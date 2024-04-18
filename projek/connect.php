<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $birthday = $_POST['birthday'];
    $password = $_POST['password'];
    $confirmationPassword = $_POST['confirmationPassword'];

    //database connection
    $conn = new mysqli('localhost','root','','gz');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into register(name, email,phoneNumber, gender, address, birthday, password, confirmationPassword)
    values(?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssississ", $name, $email, $phoneNumber, $gender, $address, $birthday, $password, $confirmationPassword);
        $stmt->execute();
        header('location:afterregister.php'); 
        $stmt->close();
        $conn->close();
    }
?>