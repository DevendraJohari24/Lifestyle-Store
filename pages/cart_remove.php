<?php
include 'include/common.php';
 $id = $_GET['id'];
 $user_id = $_SESSION['user_id'];
 $cart_delete_query = "DELETE FROM users_items WHERE item_id=$id AND user_id=$user_id";
 $cart_delete_query_result = mysqli_query($con, $cart_delete_query) or die(mysqli_error($con));
 header('location: cart.php');
?>