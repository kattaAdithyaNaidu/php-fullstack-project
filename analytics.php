<?php
include 'db.php';

$userQuery = mysqli_query($conn,
"SELECT COUNT(*) as totalUsers FROM users");

$orderQuery = mysqli_query($conn,
"SELECT COUNT(*) as totalOrders FROM orders");

$users = mysqli_fetch_assoc($userQuery)['totalUsers'];

$orders = mysqli_fetch_assoc($orderQuery)['totalOrders'];
?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<canvas id="myChart"></canvas>

<script>

const ctx = document.getElementById('myChart');

new Chart(ctx, {
type: 'bar',

data: {
labels: ['Users', 'Orders'],

datasets: [{
label: 'Analytics',
data: [<?php echo $users; ?>,
<?php echo $orders; ?>]
}]
}
});

</script>