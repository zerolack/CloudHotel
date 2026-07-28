<?php
require_once "../includes/auth.php";
require_once "../config/database.php";

$rooms = $pdo->query("SELECT COUNT(*) FROM rooms")->fetchColumn();

$available = $pdo->query(
    "SELECT COUNT(*) FROM rooms WHERE status='Available'"
)->fetchColumn();

$occupied = $pdo->query(
    "SELECT COUNT(*) FROM rooms WHERE status='Occupied'"
)->fetchColumn();

$guests = $pdo->query("SELECT COUNT(*) FROM guests")->fetchColumn();

$bookings = $pdo->query("SELECT COUNT(*) FROM bookings")->fetchColumn();

$revenue = $pdo->query(
    "SELECT SUM(amount) FROM payments WHERE payment_status='Paid'"
)->fetchColumn();

if (!$revenue) {
    $revenue = 0;
}

$occupancy = 0;

if ($rooms > 0) {
    $occupancy = ($occupied / $rooms) * 100;
}

include "../includes/header.php";
?>

<h2>CloudHotel Dashboard</h2>

<p>Welcome back, <?php echo $_SESSION["user"]["email"]; ?></p>

<div class="dashboard-cards">

<div class="card"> <h3>🛏️ Total Rooms</h3>
<p><?php echo $rooms; ?></p>
</div>

<div class="card">
<h3>✅ Available Rooms</h3>
<p><?php echo $available; ?></p>
</div>

<div class="card">
<h3>👥 Total Guests</h3>
<p><?php echo $guests; ?></p>
</div>

<div class="card">
<h3>📅 Total Bookings</h3>
<p><?php echo $bookings; ?></p>
</div>

<div class="card">
<h3>💰 Total Revenue</h3>
<p>₦<?php echo number_format($revenue, 2); ?></p>
</div>

<div class="card">
<h3>🏨 Room Occupancy</h3>
<p><?php echo number_format($occupancy, 0); ?>%</p>
</div>

<br>

<h3 class="mt-4">Quick Actions</h3>

<div class="actions">

<a href="../rooms/">
🛏️ Manage Rooms
</a>

<a href="../guests/">
👥 Manage Guests
</a>

<a href="../bookings/">
📅 Manage Bookings
</a>

<a href="../payments/">
💰 Manage Payments
</a>

</div>

</div>

</body>
</html>
