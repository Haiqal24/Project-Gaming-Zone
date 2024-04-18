<?php
require 'conf.php';

$name = $email = $phoneNumber = $gender = $address = $birthday = $userType = '';

if (isset($_GET['name'])) {
    $name = $_GET['name'];
    $sql = "SELECT * FROM register WHERE name='$name'";
    $result = mysqli_query($conn, $sql);
    
    if ($row = mysqli_fetch_array($result)) {
        $name = $row['name'];
        $email = $row['email'];
        $phoneNumber = $row['phoneNumber']; 
        $gender = $row['gender']; 
        $address = $row['address']; 
        $birthday = $row['birthday'];
        $userType = $row['userType']; // Added a semicolon here
        
    } else {
        echo 'No user found!';
        return;
    }
} else {
    echo 'No user specified!';
    return;
} 
?>

<?php require('inc/adminheader.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=2.0">
  <title>GamingZone - User Profile</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>        
  <?php require ('inc/links.php');?>
</head>     
<body class="bg-light">
      


<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10 mb-5">
      
    <h2 class="text-center p-2 h-font"><br>This is your profile page Boss! <td><?=$name;?> !</td> </h2>
      <h3>Your detail : </h3>
      <table class="table table-bordered bordered-dark bg-secondary text-dark text-center" width="500px">
      <tr>
        <th>Name </th>
        <td><?=$name;?></td>
      </tr>
      <tr>
        <th>Email </th>
        <td><?= $email; ?></td>
      </tr>
      <tr>
        <th>Phone Number </th>
        <td><?= $phoneNumber; ?></td>
      </tr>
      <tr>
        <th>Gender </th>
        <td><?= $gender; ?></td>
      </tr>
      <tr>
        <th>Address </th>
        <td><?= $address; ?></td>
      </tr>
      <tr>
        <th>Birthday </th>
        <td><?= $birthday; ?></td>
      </tr>
      <tr>
        <th>User Type </th>
        <td><?= $userType; ?></td>
      </tr>
    </table>

    
    
      </div> 
      <div class="form-group text-center">
      <a href="admin.php" class="btn btn-success btn-lg btn-block">Back</a>
      </div>
    
    </div>
  </div>
</div>

<?php require('inc/footeradmin.php');?>
</body>
</html>
