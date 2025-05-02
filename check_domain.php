<?php
// Simulate a list of already registered domains (mock data)
$registered_domains = ['example.com', 'mywebsite.net', 'fariahosting.org'];

// Get the domain from the form
$domain = isset($_POST['domain']) ? trim(strtolower($_POST['domain'])) : '';

// Basic validation
if (empty($domain)) {
    echo "Please enter a domain name.";
    exit;
}

// Check availability
$is_available = !in_array($domain, $registered_domains);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Domain Check Result</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .result-box {
      background: white;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .available {
      color: green;
      font-size: 24px;
      margin-bottom: 20px;
    }

    .unavailable {
      color: red;
      font-size: 24px;
      margin-bottom: 20px;
    }

    a {
      display: inline-block;
      margin-top: 15px;
      padding: 10px 20px;
      background: #4a00e0;
      color: white;
      text-decoration: none;
      border-radius: 6px;
    }

    a:hover {
      background: #7b2ff7;
    }
  </style>
</head>
<body>

<div class="result-box">
  <?php if ($is_available): ?>
    <div class="available">✅ The domain <strong><?= htmlspecialchars($domain) ?></strong> is available!</div>
    <a href="add_to_cart.php?domain=<?= urlencode($domain) ?>">Add to Cart</a>
  <?php else: ?>
    <div class="unavailable">❌ Sorry, <strong><?= htmlspecialchars($domain) ?></strong> is already taken.</div>
    <a href="index.php">Try another domain</a>
  <?php endif; ?>
</div>

</body>
</html>
