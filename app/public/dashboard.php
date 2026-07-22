<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
?>

<h1>CloudHotel Dashboard</h1>

<p>Welcome, <?php echo $_SESSION["user"]; ?></p>

<ul>
    <li>Manage Guests</li>
    <li>Manage Rooms</li>
    <li>Manage Bookings</li>
</ul>
