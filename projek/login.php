<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];


// Database connection
$con = new mysqli("localhost", "root", "", "gz");

if ($con->connect_error) {
    die("Failed to connect: " . $con->connect_error);
} else {
    $stmt = $con->prepare("SELECT * FROM register WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    
    $stmt_result = $stmt->get_result();
    
    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        
        if ($data['password'] === $password) {
            // Start session and set name
            $_SESSION['name'] = $data['name'];

            if ($data['userType'] === 'admin') {
                header('Location: admin.php'); // Redirect to admin page
                exit();
            } elseif ($data['userType'] === 'user') {
                header('Location: gzlogin.php'); // Redirect to user page
                exit();
            }
        } else {
            $error = 'Incorrect email or password!';
            header('Location: wrong.php');
            exit();
        
        }
    } else {
        $error = 'Incorrect email or password!';
        header('Location: wrong.php');
        exit();
    }
}
?>
