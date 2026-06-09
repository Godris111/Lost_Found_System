<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">

<h1>Lost & Found System</h1>

<p>Welcome <?php echo $_SESSION['user']; ?></p>

<div class="nav">
    <a href="report.php">Report Item</a>
    <a href="view.php">View Items</a>
    <a href="dashboard.php">Dashboard</a>
    <a href="logout.php">Logout</a>
</div>

</div>