<?php

// Copy this file to database.php and add your own database credentials

$host = "YOUR_RDS_ENDPOINT";
$dbname = "cloudhotel";
$username = "YOUR_USERNAME";
$password = "YOUR_PASSWORD";

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );

    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

?>
