<?php
session_start();
require 'config.php';

if (isset($_POST['deletee'])) {
    // Sanitize input to prevent SQL injection
    $id = intval($_POST['deletee_id']);

    // Prepare and execute the DELETE query
    $stmt = $conn->prepare("DELETE FROM laptop WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    // Check if any rows were affected
    if ($stmt->affected_rows > 0) {
        $_SESSION['success'] = "Laptop entry deleted successfully.";
    } else {
        $_SESSION['error'] = "Failed to delete laptop entry.";
    }

    // Redirect back to admin page
    header('Location: admin.php');
    exit();
} else {
    // Handle invalid request
    $_SESSION['error'] = "Invalid request.";
    header('Location: admin.php');
    exit();
}
?>
