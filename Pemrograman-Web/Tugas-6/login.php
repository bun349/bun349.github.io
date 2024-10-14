<?php
session_start();

// Simulasi data user dari database
$valid_user = "bunga";
$valid_password = "password123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == $valid_user && $password == $valid_password) {
        $_SESSION["username"] = $username;
        header("Location: welcome.php");
    } else {
        echo "Login failed!";
    }
}
?>

<form method="post" action="">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">
</form>
