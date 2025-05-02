<?php
$domain = $_POST['domain'];

$conn = new mysqli("localhost", "ukaggzqxmrpfm", "rfk4kbkuqajs", "dbe14sybxoukw5");
$conn->query("INSERT INTO domains (user_id, domain_name, extension, status, expiry_date) VALUES (1, '$domain', '.com', 'Active', DATE_ADD(NOW(), INTERVAL 1 YEAR))");

echo "<h2>Domain added! <a href='dashboard.php'>Go to Dashboard</a></h2>";
?>
