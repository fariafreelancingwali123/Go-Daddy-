<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    die("Please <a href='login.php'>login</a> to view your cart.");
}

$conn = new mysqli("localhost", "ukaggzqxmrpfm", "rfk4kbkuqajs", "dbe14sybxoukw5");

$user_id = $_SESSION['user_id'];
$result = $conn->query("SELECT * FROM cart WHERE user_id = $user_id");
?>

<h2>Your Cart</h2>
<table border="1">
<tr><th>Domain</th><th>Action</th></tr>
<?php while ($row = $result->fetch_assoc()): ?>
<tr>
  <td><?= $row['domain_name'] ?></td>
  <td><a href="remove_from_cart.php?id=<?= $row['id'] ?>">Remove</a></td>
</tr>
<?php endwhile; ?>
</table>

<br>
<a href="checkout.php">Proceed to Checkout</a>
