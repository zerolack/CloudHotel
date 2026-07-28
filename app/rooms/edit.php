<?php
require_once "../config/database.php";

$id = $_GET["id"];

$stmt = $pdo->prepare("SELECT * FROM rooms WHERE id = ?");
$stmt->execute([$id]);
$room = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$room) {
    die("Room not found.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $room_number = $_POST["room_number"];
    $room_type = $_POST["room_type"];
    $price = $_POST["price"];
    $status = $_POST["status"];

    $stmt = $pdo->prepare(
        "UPDATE rooms
         SET room_number = ?, room_type = ?, price = ?, status = ?
         WHERE id = ?"
    );

    $stmt->execute([
        $room_number,
        $room_type,
        $price,
        $status,
        $id
    ]);

    header("Location: index.php");
    exit();
}
?>

<h2>Edit Room</h2>

<form method="POST">

Room Number:<br>
<input type="text" name="room_number"
value="<?php echo $room['room_number']; ?>"><br><br>

Room Type:<br>
<input type="text" name="room_type"
value="<?php echo $room['room_type']; ?>"><br><br>

Price:<br>
<input type="number" name="price"
value="<?php echo $room['price']; ?>"><br><br>

Status:<br>
<select name="status">
    <option <?php if($room['status']=="Available") echo "selected"; ?>>Available</option>
    <option <?php if($room['status']=="Occupied") echo "selected"; ?>>Occupied</option>
    <option <?php if($room['status']=="Maintenance") echo "selected"; ?>>Maintenance</option>
</select>

<br><br>

<button type="submit">Update Room</button>

</form>
