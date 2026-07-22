<?php
require_once "../config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $guest_id = $_POST["guest_id"];
    $room_number = $_POST["room_number"];
    $check_in = $_POST["check_in"];
    $check_out = $_POST["check_out"];

    $sql = "INSERT INTO bookings 
            (guest_id, room_number, check_in, check_out)
            VALUES (?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $guest_id,
        $room_number,
        $check_in,
        $check_out
    ]);

    echo "Booking created successfully";
}

?>

<h2>Create Hotel Booking</h2>

<form method="POST">

Guest ID:
<input type="number" name="guest_id"><br><br>

Room Number:
<input type="text" name="room_number"><br><br>

Check In:
<input type="date" name="check_in"><br><br>

Check Out:
<input type="date" name="check_out"><br><br>

<button type="submit">Create Booking</button>

</form>
