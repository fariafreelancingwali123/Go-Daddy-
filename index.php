<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Domain Search - Faria Hosting</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f2f2f2;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #4a00e0;
      color: white;
      padding: 30px 20px;
      text-align: center;
    }

    header h1 {
      margin: 0;
      font-size: 2.5em;
    }

    .container {
      max-width: 900px;
      margin: 30px auto;
      padding: 20px;
      background: white;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(0,0,0,0.05);
    }

    .search-bar {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
      justify-content: center;
    }

    .search-bar input[type="text"] {
      padding: 12px;
      width: 70%;
      max-width: 400px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
    }

    .search-bar button {
      padding: 12px 20px;
      background: #4a00e0;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }

    .search-bar button:hover {
      background: #7b2ff7;
    }

    .extensions, .promotions {
      margin-top: 40px;
    }

    .extensions h2, .promotions h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .ext-list {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 15px;
    }

    .ext-list span {
      background: #eaeaea;
      padding: 10px 15px;
      border-radius: 20px;
      font-size: 16px;
    }

    .promos {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      margin-top: 20px;
    }

    .promo-box {
      background: #f9f9f9;
      border: 1px solid #ddd;
      padding: 20px;
      border-radius: 10px;
      text-align: center;
    }

    .promo-box h3 {
      margin-top: 0;
      color: #4a00e0;
    }

    footer {
      text-align: center;
      margin-top: 40px;
      padding: 20px;
      color: #777;
    }
  </style>
</head>
<body>

<header>
  <h1>Faria Hosting - Find Your Perfect Domain</h1>
</header>

<div class="container">
  <form class="search-bar" action="check_domain.php" method="POST">
    <input type="text" name="domain" placeholder="Search domain name (e.g. mysite.com)" required>
    <button type="submit">Check Availability</button>
  </form>

  <div class="extensions">
    <h2>Popular Extensions</h2>
    <div class="ext-list">
      <span>.com</span>
      <span>.net</span>
      <span>.org</span>
      <span>.xyz</span>
      <span>.pk</span>
      <span>.tech</span>
    </div>
  </div>

  <div class="promotions">
    <h2>Current Promotions</h2>
    <div class="promos">
      <div class="promo-box">
        <h3>.COM for just $4.99</h3>
        <p>First year price only!</p>
      </div>
      <div class="promo-box">
        <h3>.XYZ only $0.99</h3>
        <p>Limited-time offer</p>
      </div>
      <div class="promo-box">
        <h3>.TECH for $1.99</h3>
        <p>Show you're future-ready</p>
      </div>
    </div>
  </div>
</div>

<footer>
  &copy; <?= date("Y") ?> Faria Hosting. All rights reserved.
</footer>

</body>
</html>
