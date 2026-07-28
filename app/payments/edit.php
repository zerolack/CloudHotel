<?php
require_once "../config/database.php";

$id = $_GET["id"];

$stmt = $pdo->prepare("SELECT * FROM payments WHERE id = ?");
$stmt->execute([$id]);

$payment = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$payment) {
    die("Payment not found.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $amount = $_POST["amount"];
    $payment_method = $_POST["payment_method"];
    $payment_status = $_POST["payment_status"];

    $stmt = $pdo->prepare(
        "UPDATE payments
         SET amount = ?, payment_method = ?, payment_status = ?
         WHERE id = ?"
    );

    $stmt->execute([
        $amount,
        $payment_method,
        $payment_status,
        $id
    ]);

    header("Location: index.php");
    exit();
}
?>

<h2>Edit Payment</h2>

<form method="POST">

Amount:<br>
<input type="number" name="amount" step="0.01"
value="<?php echo $payment['amount']; ?>">

<br><br>

Payment Method:<br>
<select name="payment_method">

<option value="Cash" <?php if($payment['payment_method']=="Cash") echo "selected"; ?>>
Cash
</option>

<option value="Card" <?php if($payment['payment_method']=="Card") echo "selected"; ?>>
Card
</option>

<option value="Transfer" <?php if($payment['payment_method']=="Transfer") echo "selected"; ?>>
Transfer
</option>

</select>

<br><br>

Payment Status:<br>
<select name="payment_status">

<option value="Pending" <?php if($payment['payment_status']=="Pending") echo "selected"; ?>>
Pending
</option>

<option value="Paid" <?php if($payment['payment_status']=="Paid") echo "selected"; ?>>
Paid
</option>

<option value="Refunded" <?php if($payment['payment_status']=="Refunded") echo "selected"; ?>>
Refunded
</option>

</select>

<br><br>

<button type="submit">Update Payment</button>

</form>
