<?php
require_once "../config/database.php";

$id = $_GET["id"];

$stmt = $pdo->prepare("SELECT * FROM bookings WHERE id = ?");
$stmt->execute([$id]);

$booking = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$booking) {
    die("Booking not found.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $check_in = $_POST["check_in"];
    $check_out = $_POST["check_out"];
    $status = $_POST["status"];

    $stmt = $pdo->prepare(
        "UPDATE bookings
         SET check_in = ?, check_out = ?, status = ?
         WHERE id = ?"
    );

    $stmt->execute([
        $check_in,
        $check_out,
        $status,
        $id
    ]);

    header("Location: index.php");
    exit();
}
?>

<h2>Edit Booking</h2>

<form method="POST">

Check In:<br>
<input type="date" name="check_in"
value="<?php echo $booking['check_in']; ?>">

<br><br>

Check Out:<br>
<input type="date" name="check_out"
value="<?php echo $booking['check_out']; ?>">

<br><br>

Status:<br>
<select name="status">

<option value="Pending"
<?php if($booking['status']=="Pending") echo "selected"; ?>>
Pending
</option>

<option value="Confirmed"
<?php if($booking['status']=="Confirmed") echo "selected"; ?>>
Confirmed
</option>

<option value="Completed"
<?php if($booking['status']=="Completed") echo "selected"; ?>>
Completed
</option>

<option value="Cancelled"
<?php if($booking['status']=="Cancelled") echo "selected"; ?>>
Cancelled
</option>

</select>

<br><br>

<button type="submit">Update Booking</button>

</form>
