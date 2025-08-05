<?php
session_start();
include 'db.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cart_id = $_POST['cart_id'];

    // Increase quantity
    $stmt = $conn->prepare("UPDATE cart SET quantity = quantity + 1 WHERE id = ?");
    $stmt->bind_param("i", $cart_id);
    $stmt->execute();

    header("Location: cart.php");
    exit;
}
?>
