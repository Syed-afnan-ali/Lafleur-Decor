<?php
session_start();
include 'db.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cart_id = $_POST['cart_id'];

    // Delete cart item
    $stmt = $conn->prepare("DELETE FROM cart WHERE id = ?");
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("i", $cart_id);
    $stmt->execute();

    header("Location: cart.php");
    exit;
}
?>
