<?php
require_once "../config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    $sql = "INSERT INTO guests (name, phone, email)
            VALUES (?, ?, ?)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $phone, $email]);

    echo "Guest added successfully";
}

?>

<h2>Add Guest</h2>

<form method="POST">

Name:
<input type="text" name="name"><br><br>

Phone:
<input type="text" name="phone"><br><br>

Email:
<input type="email" name="email"><br><br>

<button type="submit">Save Guest</button>

</form>
