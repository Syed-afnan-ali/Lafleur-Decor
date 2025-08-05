<?php
session_start();
include 'db.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cart_id = $_POST['cart_id'];

    // Get current quantity
    $stmt = $conn->prepare("SELECT quantity FROM cart WHERE id = ?");
    $stmt->bind_param("i", $cart_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if ($row) {
        $quantity = $row['quantity'];
        if ($quantity > 1) {
            // Decrease quantity
            $stmt = $conn->prepare("UPDATE cart SET quantity = quantity - 1 WHERE id = ?");
            $stmt->bind_param("i", $cart_id);
            $stmt->execute();
        } else {
            // Delete item if quantity is 1
            $stmt = $conn->prepare("DELETE FROM cart WHERE id = ?");
            $stmt->bind_param("i", $cart_id);
            $stmt->execute();
        }
    }

    header("Location: cart.php");
    exit;
}
?>
