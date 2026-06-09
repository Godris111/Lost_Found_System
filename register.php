<?php
include "db.php";

if (isset($_POST['register'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    mysqli_query($conn, "INSERT INTO users (username, password) VALUES ('$username', '$password')");

    echo "Registered successfully <a href='login.php'>Login</a>";
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">
<h2>Register</h2>

<form method="POST">
    <input type="text" name="username" required><br>
    <input type="password" name="password" required><br>
    <button name="register">Register</button>
</form>

<a href="login.php">Back</a>
</div>