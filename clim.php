<?php
session_start();
include "db.php";

$id = $_GET['id'];
$user = $_SESSION['user'];

mysqli_query($conn, "UPDATE items 
SET status_action='Claimed', claimed_by='$user' 
WHERE id=$id");

header("Location: view.php");
?>