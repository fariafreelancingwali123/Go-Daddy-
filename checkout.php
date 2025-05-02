<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    die("Please <a href='login.php'>login</a> first.");
}

$conn = new mysqli("localhost", "ukaggzqxmrpfm", "rfk4kbkuqajs", "dbe14sybxoukw5");
$user_id = $_SESSION['user_id'];

// Mock registration to 'domains' table
$cart = $conn->query("SELECT * FROM cart WHERE user_id = $user_id");

while ($row = $cart->fetch_assoc()) {
    $domain = $row['domain_name'];
    $conn->query("INSERT INTO domains (user_id, domain_name, extension, status, expiry_date) 
        VALUES ($user_id, '$domain', '.com', 'Active', DATE_ADD(NOW(), INTERVAL 1 YEAR))");
}

// Clear cart
$conn->query("DELETE FROM cart WHERE user_id = $user_id");

echo "<h2>Checkout Complete!</h2><p>Your domains are now active. <a href='dashboard.php'>Go to Dashboard</a></p>";
