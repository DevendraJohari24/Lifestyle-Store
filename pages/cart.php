<?php
include 'include/common.php';
if (!isset($_SESSION['email'])) 
 {
     header('location: login.php');
 }
?>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="../css/cascade.css" type="text/css">

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Cart</title>
    </head>
    <body>
       <?php
       include 'include/header.php';
       ?>
        <?php
       $user_id = $_SESSION['user_id'];
       $select_query = "SELECT * FROM users_items up INNER JOIN items u ON u.id=up.item_id WHERE user_id='$user_id' AND status='Added to cart'";
       $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
       $total_rows_fetched = mysqli_num_rows($select_query_result);
        ?>
        <?php
        if($total_rows_fetched == 0){
            echo '<div id="banner_image">
                <center>
                <div class="container">
                    <div id="banner_content">
                           <h1>No items!</h1>
                            <p>Add items to Cart First!</p>'.$user_id. $select_query.'
                        <a href="products.php" class="btn btn-danger
                           btn-lg active">Shop Now</a>
                    </div>
                </div>
                </center>
            </div>';
        } 
        else{
            
        echo '<div class="container" style="margin: 10%">
            <table class="table table-bordered">
                <thead class="thead-dark">
                <tr>
                  <th scope="col">Item Number</th>
                  <th scope="col">Item Name</th>
                  <th scope="col">Price</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>';
                $sum = 0;
                $i=1;
                while($row = mysqli_fetch_array($select_query_result))
                { 
                echo'<tr>
                  <th scope="row">'.$i.'</th>
                  <th scope="row">'.$row['name'].'</th>
                  <th scope="row">Rs '.$row['price'].'</th><!-- comment -->
                  <th scope="row"><a href="cart_remove.php?id='.$row['item_id'].'" class="remove_item_link"> Remove</a></th>
                </tr>';
                   $sum = $sum + $row['price'];
                   $i=$i+1;
                    }
                echo '<tr>
                  <th scope="row"></th>
                  <td class="warning">Total</td>
                  <td class="warning">'.$sum.'/-</td>
                  <td class="warning"><a href="success.php?id='.$user_id.'"><button class="btn btn-primary">Confirm Order</button></a></td>
                </tr>
              </tbody>
            </table>
        </div>';
                ?>
        <?php } ?>
        <?php
       include 'include/footer.php';
        ?>
    </body>
</html>
