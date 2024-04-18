<?php
session_start();

require 'config.php'; 

if (isset($_POST['updatebtn'])) {
    
    $id = $_POST['edit_id'];
    $product = $_POST['edit_product'];
    $name = $_POST['edit_name'];
    $email = $_POST['edit_email'];
    $phone = $_POST['edit_phone'];

   
    $stmt = $conn->prepare("UPDATE `order` SET product=?, name=?, email=?, phone=? WHERE id=?");
    
    
    $stmt->bind_param("ssssi", $product, $name, $email, $phone, $id); 

    
    $query_run = $stmt->execute(); 

  
    if ($query_run) {
        $_SESSION['success'] = "Your Data is Updated";
        
    } else {
        $_SESSION['success'] = "Your Data is NOT Updated";
    }

    
    header('Location: custbooking.php'); 
    exit(); 
}


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




session_start();
require 'config.php'; 

if (isset($_POST['editbtn'])) {
    $id = $_POST['edit_id'];
    $name = $_POST['edit_name'];
    $price = $_POST['edit_price'];
    $cp = $_POST['edit_cp'];
    $gp = $_POST['edit_gp'];
    $gbram = $_POST['edit_gbram'];
    $store = $_POST['edit_store'];

    
    $stmt = $conn->prepare("UPDATE laptop SET name=?, price=?, cp=?, gp=?, gbram=?, store=? WHERE id=?");
    
    $stmt->bind_param("ssssssi", $name, $price, $cp, $gp, $gbram, $store, $id); 

    $query_run = $stmt->execute(); 

    if ($query_run) {
        $_SESSION['success'] = "Your Data is Updated";
    } else {
        $_SESSION['error'] = "Your Data is NOT Updated";
    }

    header('Location: admin.php'); 
    exit(); 
}

session_start();

require 'config.php'; 

if (isset($_POST['bttn'])) {
    
    $id = $_POST['edit_id'];
    $name = $_POST['edit_name'];
    $price = $_POST['edit_price'];
    $cp = $_POST['edit_cp'];
    $gp = $_POST['edit_gp'];
    $gbram = $_POST['edit_gbram'];
    $store = $_POST['edit_store'];

   
    $stmt = $conn->prepare("UPDATE comps SET name=?, price=?, cp=?, mb=?, gp=?, gbram=?, store=? WHERE id=?");
    
    
    $stmt->bind_param("ssssssss", $name, $price, $cp, $gp, $mb, $gbram, $store, $id);

    
    $query_run = $stmt->execute(); 

  
    if ($query_run) {
        $_SESSION['success'] = "Your Data is Updated";
        
    } else {
        $_SESSION['success'] = "Your Data is NOT Updated";
    }

    
    header('Location: amdadmin.php'); 
    exit(); 
}

?>


