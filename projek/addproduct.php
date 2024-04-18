<?php
require 'config.php';
$msg = "";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $cp = $_POST['cp'];
    $mb = $_POST['mb'];
    $gp = $_POST['gp'];
    $gbram = $_POST['gbram'];
    $store = $_POST['store'];

    
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES['image']["name"]);

        if (move_uploaded_file($_FILES['image']["tmp_name"], $target_file)) {

          $sql = "INSERT INTO comp(name,price,cp,mb,gp,gbram,store,image) VALUES(?,?,?,?,?,?,?,?)";
            $stmt = mysqli_prepare($conn, $sql);

            
            mysqli_stmt_bind_param($stmt, "ssssssss", $name, $price, $cp, $mb, $gp, $gbram, $store, $target_file);

            
            if (mysqli_stmt_execute($stmt)) {
                $msg = "Product Added to the database successfully!";
            } else {
                $msg = "Product failed to be added to the database!";
            }

            
            mysqli_stmt_close($stmt);
        } else {
            $msg = "Sorry, there was an error uploading your file.";
        }
    } else {
        $msg = "Please select a file to upload.";
    }
}
?>







<!DOCTYPE html>
<html lang="en">
    <head>
      
    <?php require('inc/adminheader.php'); ?>


        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=2.0">
        <title>GamingZone - add product</title>
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
            <h2 class="text-center h-font p-2">NVIDIA Geforce</h2>
            <form action="" method="post" class="p-2" enctype="multipart/form-data" id="form-box">
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Product Name" required>
              </div>
              <div class="form-group">
                <input type="text" name="price" class="form-control" placeholder="Product Price" required>
              </div>
              <div class="form-group">
                <input type="text" name="cp" class="form-control" placeholder="Product CPU" required>
              </div>
              <div class="form-group">
                <input type="text" name="mb" class="form-control" placeholder="Product Motherboard" required>
              </div>
              <div class="form-group">
                <input type="text" name="gp" class="form-control" placeholder="Product GPU" required>
              </div>
              <div class="form-group">
                <input type="text" name="gbram" class="form-control" placeholder="Product Ram" required>
              </div>
              <div class="form-group">
                <input type="text" name="store" class="form-control" placeholder="Product Storage" required>
              </div>
              <div class="form-group">
              <div class="mb-4">
                <label class="form-label">Picture of the product</label>
                <input type="file" name="image" class="form-control shadow-none"required>
              </div>
              </div>
              <div class="form-group">
                <input type="submit" name="submit" class="btn btn-outline-success btn-block" value="Add">
              </div>
              <div class="form-group">
                <h4 class="text-center"><?=$msg;?></h4>

              </div>
            </form>
          </div>
        </div>

      <div class="row justify-content-center">
        <div class="col-md-6 mt-3 p-4 bg-light rounded">
          <a href="rtxadmin.php" class="btn btn-primary btn-lg btn-block">Go to product page</a>
        </div>
      </div>
        
          </div>
    </body>
  
        
          


          

          

          

              
          


<!--Reach Us-->



 <?php require('inc/footeradmin.php');?>

     
      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
      

      </body>
    </html>