<?php
$item_id = $_GET['id'];
include 'include/common.php';
$user_id = $_SESSION['user_id'];
$user_cart_add_query = "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$user_cart_add_query_result = mysqli_query($con, $user_cart_add_query) or die(mysqli_error($con));
header('location: products.php');
?>