<?php
session_start();
$conn = new mysqli("localhost", "ukaggzqxmrpfm", "rfk4kbkuqajs", "dbe14sybxoukw5");

$id = $_GET['id'];
$conn->query("DELETE FROM cart WHERE id = $id AND user_id = {$_SESSION['user_id']}");

header("Location: cart.php");
