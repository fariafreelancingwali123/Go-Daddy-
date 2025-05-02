<?php
session_start();
$conn = new mysqli("localhost", "ukaggzqxmrpfm", "rfk4kbkuqajs", "dbe14sybxoukw5");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $hash);
        $stmt->fetch();
        if (password_verify($password, $hash)) {
            $_SESSION['user_id'] = $user_id;
            header("Location: index.php");
            exit;
        }
    }
    echo "Invalid login.";
}
?>

<form method="POST">
  <h2>Login</h2>
  Email: <input type="email" name="email" required><br>
  Password: <input type="password" name="password" required><br>
  <button type="submit">Login</button>
</form>
