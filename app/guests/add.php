<?php
require_once "../config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    $stmt = $pdo->prepare(
        "INSERT INTO guests (full_name, email, phone, address)
         VALUES (?, ?, ?, ?)"
    );

    $stmt->execute([
        $full_name,
        $email,
        $phone,
        $address
    ]);

    header("Location: index.php");
    exit();
}
?>

<h2>Add New Guest</h2>

<form method="POST">

Full Name:<br>
<input type="text" name="full_name"><br><br>

Email:<br>
<input type="email" name="email"><br><br>

Phone:<br>
<input type="text" name="phone"><br><br>

Address:<br>
<textarea name="address"></textarea><br><br>

<button type="submit">Save Guest</button>

</form>
