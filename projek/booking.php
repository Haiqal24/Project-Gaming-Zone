<?php
require 'config.php';
$msg = "";
if (isset($_POST['submit'])) {
    $product = $_POST['product'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO `order` (product, name, email, phone) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "ssss", $product, $name, $email, $phone);

    if (mysqli_stmt_execute($stmt)) {
        $msg = "Booking product success!";
    } else {
        $msg = "Booking product failed!";
    }

    mysqli_stmt_close($stmt);
}
?>







<!DOCTYPE html>
<html lang="en">
    <head>
      
    <?php require('inc/headerlogin.php'); ?>


        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=2.0">
        <title>GamingZone - Booking</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>        
        <?php require ('inc/links.php');?>
        <style>
            .availability-form{ 
                margin-top: -50;
                z-index: 2;
                position: relative;
            }
            @media screen and(max-width: 575px) {
              .availability-form{
                margin-top: 25px;
                padding: 0 35px;
              }
            }
        </style>
        
        <title>Add product Information</title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">


        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>


        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="bg-dark">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 bg-light mt-5 rounded">
            <h2 class="text-center h-font p-2">Booking your item Now!</h2>
            <form action="" method="post" class="p-2" enctype="multipart/form-data" id="form-box">
              <div class="form-group">
                <input type="text" name="product" class="form-control" placeholder="Product Name" required>
              </div>
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
              </div>
  
              <div class="form-group">
                <input type="submit" name="submit" class="btn btn-outline-success btn-block" value="Book!">
              </div>
              <div class="form-group">
                <h4 class="text-center"><?=$msg;?></h4>

              </div>
            </form>
          </div>
        </div>

      <div class="row justify-content-center">
        <div class="col-md-6 mt-3 p-4 bg-light rounded">
          <a href="gzlogin.php" class="btn btn-success btn-lg btn-block">Continue Booking</a>
        </div>
      </div>
        
  </div>
    </body>

<!--Reach Us-->



 <?php require('inc/footerlogin.php');?>

     
      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
      

      </body>
    </html>