<?php

include 'db.php';

$search = $_GET['search'];

$query = "SELECT * FROM foods
WHERE food_name LIKE '%$search%'";

$result = mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result)){

echo "<h3>".$row['food_name']."</h3>";

}
?>