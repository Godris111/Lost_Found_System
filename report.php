<?php
session_start();
include "db.php";

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['submit'])) {

    $item_name = $_POST['item_name'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $location = $_POST['location'];
    $report_date = $_POST['report_date'];
    $contact = $_POST['contact'];

    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmp, "uploads/" . $image);

    mysqli_query($conn, "INSERT INTO items 
    (item_name, description, status, location, report_date, contact, image)
    VALUES 
    ('$item_name', '$description', '$status', '$location', '$report_date', '$contact', '$image')");

    echo "Item submitted";
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">

<h2>Report Item</h2>

<form method="POST" enctype="multipart/form-data">

<input type="text" name="item_name" placeholder="Item Name" required><br>
<textarea name="description" placeholder="Description"></textarea><br>

<select name="status">
    <option>Lost</option>
    <option>Found</option>
</select><br>

<input type="text" name="location"><br>
<input type="date" name="report_date"><br>
<input type="text" name="contact"><br>

<input type="file" name="image"><br>

<button name="submit">Submit</button>

</form>

</div>