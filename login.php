<?php
session_start();
include 'db.php';

if(isset($_POST['login'])){

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users
WHERE email='$email' AND verified=1";

$result = mysqli_query($conn,$query);

$user = mysqli_fetch_assoc($result);

if($user && password_verify($password,$user['password'])){

$_SESSION['user'] = $user['name'];
$_SESSION['id'] = $user['id'];
$_SESSION['role'] = $user['role'];

header("Location: dashboard.php");

}else{
echo "Invalid Login";
}
}
?>

<form method="POST">

<input type="email" name="email"><br><br>

<input type="password" name="password"><br><br>

<button name="login">Login</button>

</form>