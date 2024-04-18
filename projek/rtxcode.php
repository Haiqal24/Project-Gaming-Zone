<?php
session_start();

require 'config.php'; 

if (isset($_POST['btn'])) {
    
    $id = $_POST['edit_id'];
    $name = $_POST['edit_name'];
    $price = $_POST['edit_price'];
    $cp = $_POST['edit_cp'];
    $gp = $_POST['edit_gp'];
    $gbram = $_POST['edit_gbram'];
    $store = $_POST['edit_store'];

   
    $stmt = $conn->prepare("UPDATE comp SET name=?, price=?, cp=?, mb=?, gp=?, gbram=?, store=? WHERE id=?");
    
    
    $stmt->bind_param("ssssssss", $name, $price, $cp, $gp, $mb, $gbram, $store, $id);

    
    $query_run = $stmt->execute(); 

  
    if ($query_run) {
        $_SESSION['success'] = "Your Data is Updated";
        
    } else {
        $_SESSION['success'] = "Your Data is NOT Updated";
    }

    
    header('Location: rtxadmin.php'); 
    exit(); 
}
?>
