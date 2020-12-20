<?php
    require 'include/common.php';
   if (isset($_SESSION['email'])) 
    {
        header('location: products.php'); 
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
        
        <title>Register Page</title>
    </head>
    <body>
        <?php
        include 'include/header.php';
        ?>
        <div class="panel panel-primary" style=" margin : 10% ">
            <div class="panel-heading"><h4>SIGNUP</h4></div>
            <div class="panel-body">
                <form method="POST" action="signup_script.php">
                     <div class="form-row">
                       <div class="col-md-6 mb-3">
                         <label for="validationServer01">Name</label>
                         <input type="text" class="form-control is-valid" id="validationServer01" required name="name">
                       </div>
                     </div>
                     <div class="form-row">
                       <div class="col-md-6 mb-3">
                         <label for="validationServer01">Email</label>
                         <input type="email" class="form-control is-valid" id="validationServer01" required name="email">
                       <div><?php 
                        error_reporting(0); 
                        echo $_GET['email_error']; 
                        ?></div>
                       </div>
                     </div>
                    <div class="form-row">
                       <div class="col-md-6 mb-3">
                         <label for="validationServer01">Password</label>
                         <input type="password" class="form-control is-valid" id="validationServer01" required name="password"><!-- comment -->
                       <div><?php 
                        error_reporting(0); 
                        echo $_GET['password_error']; 
                        ?></div>
                       </div>
                     </div>
                     <div class="form-row">
                       <div class="col-md-6 mb-3">
                         <label for="validationServer01">Contact</label>
                         <input type="number" class="form-control is-valid" id="validationServer01" required name="contact">
                       <div><?php 
                        error_reporting(0); 
                        echo $_GET['contact_error']; 
                        ?></div>
                       </div>
                     </div>
                    <div class="form-row">
                       <div class="col-md-6 mb-3">
                         <label for="validationServer01">City</label>
                         <input type="text" class="form-control is-valid" id="validationServer01" required name="city">
                       </div>
                     </div>
                    <div class="form-row">
                       <div class="col-md-6 mb-3">
                         <label for="validationServer01">Address</label>
                         <input type="text" class="form-control is-valid" id="validationServer01" required name="address">
                       </div>
                     </div>
                        <button class="btn btn-primary" style="margin: 15px" type="submit">Submit</button>
                   </form>
            </div>
            <div class="panel-footer">
                <p>Already have an account?<a href="login.php"> Login</a></p>
            </div>
        </div>
        <?php
        include 'include/footer.php';
        ?>
    </body>
</html>
