<?php
include 'db.php';

$email = $_GET['email'];

if(isset($_POST['verify'])){

$userotp = $_POST['otp'];

$query = "SELECT * FROM users
WHERE email='$email' AND otp='$userotp'";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result)>0){

mysqli_query($conn,
"UPDATE users SET verified=1 WHERE email='$email'");

echo "Account Verified";

}else{
echo "Invalid OTP";
}
}
?>

<form method="POST">

<input type="text" name="otp" placeholder="Enter OTP">

<button name="verify">Verify</button>

</form>