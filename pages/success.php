<?php
include 'include/common.php';
if (!isset($_SESSION['email'])) 
 {
     header('location: index.php');
 }
 $user_id = $_GET['id'];
 $item_success_query = "UPDATE users_items SET status='Confirmed' WHERE status='Added to cart' AND user_id=$user_id";
 $item_success_query_result = mysqli_query($con, $item_success_query) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="../css/cascade.css" type="text/css">

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Thank You!</title>
    </head>
    <body>
        <?php
        include 'include/header.php';
        ?>
        <div id="banner_image">
            <center>
            <div class="container">
                <div id="banner_content">
                       <h1>Thank you for shopping with us. </h1>
                       <p><a href="products.php"><u>Click here</u></a> to purchase any other item.</p>
                    <a href="products.php" class="btn btn-danger
                       btn-lg active">Click Here</a>
                </div>
            </div>
            </center>
        </div>
        <?php
        include 'include/footer.php';
        ?>
    </body>
</html>