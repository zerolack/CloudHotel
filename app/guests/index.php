<?php
require_once "../includes/auth.php";
require_once "../config/database.php";

$stmt = $pdo->query("SELECT * FROM guests");

$guests = $stmt->fetchAll(PDO::FETCH_ASSOC);

include "../includes/header.php";
?>

<h2>CloudHotel - Manage Guests</h2>

<a href="add.php">Add New Guest</a>

<br><br>

<table border="1" cellpadding="10" width="100%">

<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Address</th>
    <th>Action</th>
</tr>

<?php foreach($guests as $guest): ?>

<tr>

    <td><?php echo $guest["full_name"]; ?></td>
    <td><?php echo $guest["email"]; ?></td>
    <td><?php echo $guest["phone"]; ?></td>
    <td><?php echo $guest["address"]; ?></td>

    <td>
        <a href="edit.php?id=<?php echo $guest["id"]; ?>">Edit</a> |
        <a href="delete.php?id=<?php echo $guest["id"]; ?>" onclick="return confirm('Delete this guest?');">Delete</a>
    </td>

</tr>

<?php endforeach; ?>

</table>

<?php
include "../includes/footer.php";
?>
