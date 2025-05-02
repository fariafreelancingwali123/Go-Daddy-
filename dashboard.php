<?php
$conn = new mysqli("localhost", "ukaggzqxmrpfm", "rfk4kbkuqajs", "dbe14sybxoukw5");

$result = $conn->query("SELECT * FROM domains WHERE user_id = 1"); // fixed user for demo
?>

<!DOCTYPE html>
<html>
<head>
  <title>My Domains</title>
  <style>
    table { width: 80%; margin: auto; border-collapse: collapse; }
    th, td { padding: 10px; border: 1px solid gray; }
  </style>
</head>
<body>
  <h2>My Registered Domains</h2>
  <table>
    <tr><th>Domain</th><th>Status</th><th>Expiry Date</th></tr>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?= $row['domain_name'] ?></td>
      <td><?= $row['status'] ?></td>
      <td><?= $row['expiry_date'] ?></td>
    </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>
