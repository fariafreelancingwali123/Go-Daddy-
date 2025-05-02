<?php
$domain = $_POST['domain'];
$available_domains = ['mysite.com', 'example.net', 'demo.org']; // mock data

$is_available = !in_array($domain, $available_domains);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Domain Result</title>
</head>
<body>
  <h1><?php echo $domain; ?> is <?php echo $is_available ? "available ✅" : "not available ❌"; ?></h1>
  <?php if($is_available): ?>
    <form action="add_to_cart.php" method="POST">
      <input type="hidden" name="domain" value="<?php echo $domain; ?>">
      <button type="submit">Add to Cart</button>
    </form>
  <?php endif; ?>
  <a href="index.php">Search Again</a>
</body>
</html>
