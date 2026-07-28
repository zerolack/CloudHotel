<?php

$host = "cloudhotel-database.ckl8ck4owjed.us-east-1.rds.amazonaws.com";
$dbname = "cloudhotel";
$username = "admin";
$password = "CloudHotel2026#";

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

} catch(PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

?>
