<?php
 require 'include/common.php';
 if (!isset($_SESSION['email'])) 
 {
     header('location: index.php');
 }
 ?>
<?php
$email= $_SESSION['email'];
$real_password = mysqli_real_escape_string($con, $_POST['real_password']);
$newpassword = mysqli_real_escape_string($con, $_POST['newpassword']);
$retypepassword = mysqli_real_escape_string($con, $_POST['retypepassword']);
$password_query = "SELECT password FROM users WHERE email='$email'";
$password_query_result = mysqli_query($con, $password_query) or die(mysqli_error($con));
$row = mysqli_fetch_array($password_query_result);
$encrypt_real_password = md5($real_password);
$verify_pass = $row['password'];
if($encrypt_real_password != $verify_pass){
   header("location: settings.php?real_password_error=Password Entered is Wrong!");

}
if($newpassword==$real_password){
    header("location: settings.php?password_error=Password is same as before!");
}

if($newpassword!=$retypepassword){
    header("location: settings.php?newpassword_error=Password not match!");
}
if(strlen($newpassword)<6){
    header("location: settings.php?password_error=Password is too Short!");
}
else if (strlen($newpassword)>10){
    header("location: settings.php?password_error=Password is too Long!");
}
else{
      $encrypt_password = md5($newpassword);
      $change_password_query = "UPDATE users SET password= '$encrypt_password' WHERE email='$email'";
      $change_password_query_result = mysqli_query($con, $change_password_query) or die(mysqli_error($con));
      header('location: logout.php');
}

?>