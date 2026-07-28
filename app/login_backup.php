<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "admin" && $password == "admin123") {
        $_SESSION["user"] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid login details";
    }
}

?>

<h2>CloudHotel Login</h2>

<form method="POST">
    Username:
    <input type="text" name="username"><br><br>

    Password:
    <input type="password" name="password"><br><br>

    <button type="submit">Login</button>
</form>
