<?php
session_start();
include 'db.php';

$user_id = $_SESSION['id'];

$food_id = $_GET['id'];

$query = "INSERT INTO orders(user_id,food_id,quantity)
VALUES('$user_id','$food_id',1)";

mysqli_query($conn,$query);

echo "Order Placed Successfully";
?>