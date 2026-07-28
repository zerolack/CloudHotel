<?php
require_once "../includes/auth.php";
require_once "../config/database.php";

$stmt = $pdo->query("SELECT * FROM rooms");

$rooms = $stmt->fetchAll(PDO::FETCH_ASSOC);

include "../includes/header.php";
?>

<h2>🛏️ CloudHotel - Manage Rooms</h2>

<a class="actions-btn" href="add.php">➕ Add New Room</a>

<br><br>

<table class="room-table">

<tr>
    <th>Room Number</th>
    <th>Type</th>
    <th>Price</th>
    <th>Status</th>
    <th>Action</th>
</tr>

<?php foreach($rooms as $room): ?>

<tr>

<td>
<?php echo $room["room_number"]; ?>
</td>

<td>
<?php echo $room["room_type"]; ?>
</td>

<td>
₦<?php echo number_format($room["price"], 2); ?>
</td>

<td>
<?php echo $room["status"]; ?>
</td>

<td>

<a href="edit.php?id=<?php echo $room["id"]; ?>">
✏️ Edit
</a>

|

<a href="delete.php?id=<?php echo $room["id"]; ?>" onclick="return confirm('Delete this room?');">
🗑️ Delete
</a>

</td>

</tr>

<?php endforeach; ?>

</table>

<?php
include "../includes/footer.php";
?>
