<?php
include "db.php";

if (isset($_POST['submit'])) {
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Prepare the SQL statement
    $stmt = mysqli_prepare($conn, "INSERT INTO contact_messages (subject, email, phone, message) VALUES (?, ?, ?, ?)");

    if ($stmt) {
        // Bind the parameters to the SQL query
        mysqli_stmt_bind_param($stmt, "ssss", $subject, $email, $phone, $message);

        // Execute the statement
        if (mysqli_stmt_execute($stmt)) {
            // ✅ Show success alert
            echo "<script>alert('✅ Your message has been sent successfully!'); window.location.href='contact.php';</script>";
            header("contact.php");
        } else {
            echo "<script>alert('❌ Failed to send message.'); window.history.back();</script>";
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "❌ SQL preparation failed: " . mysqli_error($conn);
    }

    // Close the DB connection
    mysqli_close($conn);
}
?>
