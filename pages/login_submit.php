<?php
 require 'include/common.php';
 ?>
<?php
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $encrypt_password = md5($password);
    $user_login_query = "SELECT id,email FROM users WHERE email='$email' AND password = '$encrypt_password'";
    $user_login_query_result = mysqli_query($con, $user_login_query) or die(mysqli_error($con));
    $total_rows_fetched = mysqli_num_rows($user_login_query_result);
    if ($total_rows_fetched == 0){
        header('location: login.php?error=Invalid Email or Password!');
    }
    else {
        $row = mysqli_fetch_array($user_login_query_result);   
        $_SESSION['email'] = $row['email'];
        $_SESSION['user_id'] = $row['id'];
        header('location: products.php');
    }
    
?>
