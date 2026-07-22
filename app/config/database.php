<?php

$host = "YOUR_RDS_ENDPOINT";
$dbname = "cloudhotel";
$username = "admin";
$password = "YOUR_DB_PASSWORD";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname",
        $username,
        $password
    );

    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

} catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

?>
