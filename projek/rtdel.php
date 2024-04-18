<?php
require 'config.php';  
       


if (isset($_POST['deletebtnn'])) {
    $id = $_POST['delete_id'];

    $stmt = $conn->prepare("DELETE FROM `comp` WHERE id=?");
    $stmt->bind_param("i", $id);
    $execute = $stmt->execute();

    if ($execute) {
        $_SESSION['success'] = "Data deleted successfully";
    } else {
        $_SESSION['success'] = "Failed to delete data";
    }
    header('Location: custbooking.php');
    exit();
}

require 'config.php';  
       


if (isset($_POST['deletbtnn'])) {
    $id = $_POST['delete_id'];

    $stmt = $conn->prepare("DELETE FROM `comps` WHERE id=?");
    $stmt->bind_param("i", $id);
    $execute = $stmt->execute();

    if ($execute) {
        $_SESSION['success'] = "Data deleted successfully";
    } else {
        $_SESSION['success'] = "Failed to delete data";
    }
    header('Location: custbooking.php');
    exit();
}

?>