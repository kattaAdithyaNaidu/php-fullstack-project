<?php
session_start();

if(!isset($_SESSION['user'])){
header("Location: login.php");
}
?>

<h1>Welcome <?php echo $_SESSION['user']; ?></h1>

<a href="logout.php">Logout</a>
<?php
include 'db.php';

$result = mysqli_query($conn,"SELECT * FROM foods");

while($row = mysqli_fetch_assoc($result)){
?>

<div>

<h2><?php echo $row['food_name']; ?></h2>

<p>₹<?php echo $row['price']; ?></p>

<img src="uploads/<?php echo $row['image']; ?>" width="150">

<br><br>

<a href="order.php?id=<?php echo $row['id']; ?>">
Order Now
</a>

</div>

<?php } ?>