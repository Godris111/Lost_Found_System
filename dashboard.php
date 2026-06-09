<?php
session_start();
include "db.php";

$total = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM items"));
$lost = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM items WHERE status='Lost'"));
$found = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM items WHERE status='Found'"));
$claimed = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM items WHERE status_action='Claimed'"));
?>

<link rel="stylesheet" href="style.css">

<div class="container">

<h2>Dashboard</h2>

<p>Total Items: <?php echo $total; ?></p>
<p>Lost Items: <?php echo $lost; ?></p>
<p>Found Items: <?php echo $found; ?></p>
<p>Claimed Items: <?php echo $claimed; ?></p>

<a href="index.php">Back</a>

</div>