<?php
 require 'include/common.php';
 if (!isset($_SESSION['email'])) 
 {
     header('location: index.php');
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
        
        <title>Settings</title>
    </head>
    <body>
       <?php
        include 'include/header.php';
        ?>
        <div class="panel panel-primary" style=" margin : 10% ">
            <div class="panel-heading"><h4>Change Password</h4></div>
            <div class="panel-body">
                <form method="POST" action="settings_script.php">
                      <div class="form-group">
                        <label for="exampleInputPassword1">Old Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Old Password" required="true" name="real_password" >
                        <div><?php 
                        error_reporting(0); 
                        echo $_GET['real_password_error']; 
                        ?></div>
                        <!-- comment -->
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">New Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="New Password" required="true" name="newpassword">
                        <div><?php 
                        error_reporting(0); 
                        echo $_GET['password_error']; 
                        ?></div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Re-Type New Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Re-Type New Password" required="true" name="retypepassword">
                      <div><?php 
                        error_reporting(0); 
                        echo $_GET['newpassword_error']; 
                        ?></div>
                      </div>
                      <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1" required="true">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div>
                      <button type="submit" class="btn btn-primary">Change</button>
                    </form>
            </div>
            <div class="panel-footer">
                <p>Want to Logged In?<a href="login.html"> Login</a></p>
            </div>
        </div>
      <?php
            include 'include/footer.php';
        ?>
    </body>
</html>
