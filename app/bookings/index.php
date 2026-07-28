<?php
require_once "../includes/auth.php";
require_once "../config/database.php";

$stmt = $pdo->query(
    "SELECT
        bookings.id,
        guests.full_name,
        rooms.room_number,
        bookings.check_in,
        bookings.check_out,
        bookings.status
     FROM bookings
     JOIN guests ON bookings.guest_id = guests.id
     JOIN rooms ON bookings.room_id = rooms.id"
);

$bookings = $stmt->fetchAll(PDO::FETCH_ASSOC);

include "../includes/header.php";
?>

<h2>CloudHotel - Manage Bookings</h2>

<a href="add.php">Add New Booking</a>

<br><br>

<table border="1" cellpadding="10" width="100%">

<tr>
    <th>Guest</th>
    <th>Room</th>
    <th>Check In</th>
    <th>Check Out</th>
    <th>Status</th>
    <th>Action</th>
</tr>

<?php foreach($bookings as $booking): ?>

<tr>

    <td><?php echo $booking["full_name"]; ?></td>

    <td><?php echo $booking["room_number"]; ?></td>

    <td><?php echo $booking["check_in"]; ?></td>

    <td><?php echo $booking["check_out"]; ?></td>

    <td><?php echo $booking["status"]; ?></td>

    <td>
        <a href="edit.php?id=<?php echo $booking["id"]; ?>">Edit</a> |
        <a href="delete.php?id=<?php echo $booking["id"]; ?>" onclick="return confirm('Delete this booking?');">Delete</a>
    </td>

</tr>

<?php endforeach; ?>

</table>

<?php
include "../includes/footer.php";
?>
