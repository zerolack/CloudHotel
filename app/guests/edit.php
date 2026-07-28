<?php
require_once "../config/database.php";

$id = $_GET["id"];

$stmt = $pdo->prepare("SELECT * FROM guests WHERE id = ?");
$stmt->execute([$id]);

$guest = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$guest) {
    die("Guest not found.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    $stmt = $pdo->prepare(
        "UPDATE guests
         SET full_name = ?, email = ?, phone = ?, address = ?
         WHERE id = ?"
    );

    $stmt->execute([
        $full_name,
        $email,
        $phone,
        $address,
        $id
    ]);

    header("Location: index.php");
    exit();
}
?>

<h2>Edit Guest</h2>

<form method="POST">

Full Name:<br>
<input type="text" name="full_name"
value="<?php echo $guest['full_name']; ?>"><br><br>

Email:<br>
<input type="email" name="email"
value="<?php echo $guest['email']; ?>"><br><br>

Phone:<br>
<input type="text" name="phone"
value="<?php echo $guest['phone']; ?>"><br><br>

Address:<br>
<textarea name="address"><?php echo $guest['address']; ?></textarea><br><br>

<button type="submit">Update Guest</button>

</form>
