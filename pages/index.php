<?php
 require 'include/common.php';
 if (isset($_SESSION['email'])) 
 {
     header('location: products.php'); 
 }
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
        
        <title>LifeStyle Store</title>
    </head>
    <body>
        <?php
        include 'include/header.php';
        ?>
        <div id="banner_image">
            <center>
            <div class="container">
                <div id="banner_content">
                       <h1>We sell lifestyle</h1>
                        <p>Flat 40% OFF on premium brands</p>
                    <a href="products.php" class="btn btn-danger
                       btn-lg active">Shop Now</a>
                </div>
            </div>
            </center>
        </div>
        <?php
        include 'include/footer.php';
        ?>
    </body>
</html>