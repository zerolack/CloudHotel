<

"..
.
);

	
kkk
$stmt = $pdo->query(
    "SELECT
        payments.id,
        guests.full_name,
        payments.amount,
        payments.payment_method,
        payments.payment_status,
        payments.payment_date
     FROM payments
     JOIN bookings ON payments.booking_id = bookings.id
     JOIN guests ON bookings.guest_id = guests.id"
);

$payments = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>CloudHotel - Manage Payments</h2>

<a href="add.php">Add New Payment</a>

<br><br>

<table border="1" cellpadding="10">

<tr>
    <th>Guest</th>
    <th>Amount</th>
    <th>Payment Method</th>
    <th>Status</th>
    <th>Date</th>
    <th>Action</th>
</tr>

<?php foreach($payments as $payment): ?>

<tr>
    <td><?php echo $payment["full_name"]; ?></td>
    <td><?php echo $payment["amount"]; ?></td>
    <td><?php echo $payment["payment_method"]; ?></td>
    <td><?php echo $payment["payment_status"]; ?></td>
    <td><?php echo $payment["payment_date"]; ?></td>
    <td>
        <a href="edit.php?id=<?php echo $payment["id"]; ?>">Edit</a> |
        <a href="delete.php?id=<?php echo $payment["id"]; ?>" onclick="return confirm('Delete this payment?');">Delete</a>
    </td>
</tr>

<?php endforeach; ?>

</table>
"..kkk
$stmt = $pdo->query(
    "SELECT
        payments.id,
        guests.full_name,
        payments.amount,
        payments.payment_method,
        payments.payment_status,
        payments.payment_date
     FROM payments
     JOIN bookings ON payments.booking_id = bookings.id
     JOIN guests ON bookings.guest_id = guests.id"
);

$payments = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>CloudHotel - Manage Payments</h2>

<a href="add.php">Add New Payment</a>

<br><br>

<table border="1" cellpadding="10">

<tr>
    <th>Guest</th>
    <th>Amount</th>
    <th>Payment Method</th>
    <th>Status</th>
    <th>Date</th>
    <th>Action</th>
</tr>

<?php foreach($payments as $payment): ?>

<tr>
    <td><?php echo $payment["full_name"]; ?></td>
    <td><?php echo $payment["amount"]; ?></td>
    <td><?php echo $payment["payment_method"]; ?></td>
    <td><?php echo $payment["payment_status"]; ?></td>
    <td><?php echo $payment["payment_date"]; ?></td>
    <td>
        <a href="edit.php?id=<?php echo $payment["id"]; ?>">Edit</a> |
        <a href="delete.php?id=<?php echo $payment["id"]; ?>" onclick="return confirm('Delete this payment?');">Delete</a>
    </td>
</tr>

<?php endforeach; ?>

</table>
?>


>
