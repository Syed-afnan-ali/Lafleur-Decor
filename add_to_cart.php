<?php
session_start();
include 'db.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION['username'];

// Get user_id from username
$stmt = $conn->prepare("SELECT id FROM user_auth WHERE username = ?");
if (!$stmt) {
    die("Prepare failed (get user_id): " . $conn->error);
}
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die("User not found.");
}

$user = $result->fetch_assoc();
$user_id = $user['id'];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];

    // Check if product is already in the cart
    $check = $conn->prepare("SELECT id, quantity FROM cart WHERE user_id = ? AND product_name = ?");
    if (!$check) {
        die("Prepare failed (check cart): " . $conn->error);
    }
    $check->bind_param("is", $user_id, $product_name);
    $check->execute();
    $checkResult = $check->get_result();

    if ($checkResult->num_rows > 0) {
        // If already in cart, increase quantity    
        $row = $checkResult->fetch_assoc();
        $new_quantity = $row['quantity'] + 1;

        $update = $conn->prepare("UPDATE cart SET quantity = ? WHERE id = ?");
        if (!$update) {
            die("Prepare failed (update cart): " . $conn->error);
        }
        $update->bind_param("ii", $new_quantity, $row['id']);
        if (!$update->execute()) {
            die("Execute failed (update cart): " . $update->error);
        }
    } else {
        // Insert new product
        $insert = $conn->prepare("INSERT INTO cart (user_id, product_name, product_price, product_image, quantity) VALUES (?, ?, ?, ?, 1)");
        if (!$insert) {
            die("Prepare failed (insert cart): " . $conn->error);
        }
        $insert->bind_param("isds", $user_id, $product_name, $product_price, $product_image);
        if (!$insert->execute()) {
            die("Execute failed (insert cart): " . $insert->error);
        }
    }

    header("Location: cart.php");
    exit;
}
?>
