<?php
require_once "../config/database.php";

$guests = $pdo->query("SELECT * FROM guests")->fetchAll(PDO::FETCH_ASSOC);
$rooms = $pdo->query("SELECT * FROM rooms WHERE status='Available'")->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $guest_id = $_POST["guest_id"];
    $room_id = $_POST["room_id"];
    $check_in = $_POST["check_in"];
    $check_out = $_POST["check_out"];

    $stmt = $pdo->prepare(
        "INSERT INTO bookings (guest_id, room_id, check_in, check_out)
         VALUES (?, ?, ?, ?)"
    );

    $stmt->execute([
        $guest_id,
        $room_id,
        $check_in,
        $check_out
    ]);

    header("Location: index.php");
    exit();
}
?>

<h2>Add New Booking</h2>

<form method="POST">

Guest:<br>
<select name="guest_id">

<?php foreach($guests as $guest): ?>

<option value="<?php echo $guest['id']; ?>">
<?php echo $guest['full_name']; ?>
</option>

<?php endforeach; ?>

</select>

<br><br>

Room:<br>
<select name="room_id">

<?php foreach($rooms as $room): ?>

<option value="<?php echo $room['id']; ?>">
<?php echo $room['room_number']; ?>
</option>

<?php endforeach; ?>

</select>

<br><br>

Check In:<br>
<input type="date" name="check_in">

<br><br>

Check Out:<br>
<input type="date" name="check_out">

<br><br>

<button type="submit">Save Booking</button>

</form><?php
require_once "../config/database.php";

$guests = $pdo->query("SELECT * FROM guests")->fetchAll(PDO::FETCH_ASSOC);
$rooms = $pdo->query("SELECT * FROM rooms WHERE status='Available'")->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $guest_id = $_POST["guest_id"];
    $room_id = $_POST["room_id"];
    $check_in = $_POST["check_in"];
    $check_out = $_POST["check_out"];

    $stmt = $pdo->prepare(
        "INSERT INTO bookings (guest_id, room_id, check_in, check_out)
         VALUES (?, ?, ?, ?)"
    );

    $stmt->execute([
        $guest_id,
        $room_id,
        $check_in,
        $check_out
    ]);

    header("Location: index.php");
    exit();
}
?>

<h2>Add New Booking</h2>

<form method="POST">

Guest:<br>
<select name="guest_id">

<?php foreach($guests as $guest): ?>

<option value="<?php echo $guest['id']; ?>">
<?php echo $guest['full_name']; ?>
</option>

<?php endforeach; ?>

</select>

<br><br>

Room:<br>
<select name="room_id">

<?php foreach($rooms as $room): ?>

<option value="<?php echo $room['id']; ?>">
<?php echo $room['room_number']; ?>
</option>

<?php endforeach; ?>

</select>

<br><br>

Check In:<br>
<input type="date" name="check_in">

<br><br>

Check Out:<br>
<input type="date" name="check_out">

<br><br>

<button type="submit">Save Booking</button>

</form>
