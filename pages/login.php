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
        
        <title>Login Page</title>
    </head>
    <body>
        <?php
        include 'include/header.php';
        ?>       
        <div class="panel panel-primary" style=" margin-top: 10%;margin-right:10% ;margin-left: 10%;margin-bottom: 10%;">
            <div class="panel-heading"><h4>LOGIN</h4></div>
            <div class="panel-body">
                <p>Login to make a purchase!</p>
                <form method="POST" action="login_submit.php">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        <div><?php 
                        error_reporting(0); 
                        echo $_GET['error']; 
                        ?></div>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <div><?php 
                        error_reporting(0); 
                        echo $_GET['error']; 
                        ?></div>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" required="true" pattern=".{6,}">
                      </div>
                      <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1" required="true">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
            <div class="panel-footer">
                <p>Don't have an account?<a href="signup.php"> Register</a></p>
            </div>
        </div>
        <?php
        include 'include/footer.php';
        ?>       
    </body>
</html>
