<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=2.0">
        <title>GamingZone</title>
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
    </head>
    <body class="bg-white">

        

        
          <?php require('inc/adminheader.php'); ?>


          
          
          <div class="container-fluid px-lg-0 mt-0">
            <div class="swiper swiper-container">
              <div class="swiper-wrapper">
              <div class="swiper-slide">
                  <img src="images/02.jpg" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                  <img src="images/01.jpg" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                  <img src="images/1.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                  <img src="images/2.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                  <img src="images/00.jpg" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                  <img src="images/3.jpg" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                  <img src="images/4.jpeg" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                  <img src="images/6.png" class="w-100 d-block">
                </div>
                
                
                </div>
              </div>
            </div>
          </div>

          

          <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font text-dark">Laptop Section</h2>
          <?php
            require 'config.php';
            $sql="SELECT * FROM laptop"; 
            $result = mysqli_query($conn, $sql); 
            ?>

<div class="container">
    <div class="row">
        <?php
        require 'config.php';
        $sql = "SELECT * FROM laptop";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
        ?>
        <div class="col-lg-3 col-md-5 my-5">
            <div class="card border-5 shadow" style="max-width: 230px; margin:auto;">
                <img src="<?= $row['image']; ?>" class="card-img-top" height="200">
                <div class="card-body">
                    <h4 class="card-title h-font"><?= $row['name']; ?></h4>
                    <h3 class="utf-8">RM <?= number_format(floatval($row['price'])); ?></h3>
                    <h4 class="badge rounded-pill bg-light text-dark text-wrap">CPU : <?= $row['cp']; ?></h4>
                    <h4 class="badge rounded-pill bg-light text-dark text-wrap">GPU : <?= $row['gp']; ?></h4>
                    <h4 class="badge rounded-pill bg-light text-dark text-wrap"><?= $row['gbram']; ?>GB Ram</h4>
                    <h4 class="badge rounded-pill bg-light text-dark text-wrap">Storage : <?= $row['store']; ?></h4>
                    <br>
                    <div class="d-flex justify-content-evenly mb-1">
                        <a href="editlaptop.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-outline-warning shadow-none mx-2">Edit</a>
                        <a href="orderlaptopadmin.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-outline-primary shadow-none">View</a>
                        <form action="deletelaptop.php" method="post" style="display: inline;">
                          <input type="hidden" name="deletee_id" value="<?php echo htmlspecialchars($row['id']); ?>">
                          <button type="submit" name="deletee" class="btn btn-sm btn-outline-danger shadow-none mx-2" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>







                

                
            </div>
          </div>

          <!--Our PC Section-->

          <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font text-dark">PC Section</h2>

          <div class="container">
            <div class="row align-item-center">
                <div class="col-lg-5 col-md-6 my-3 mx-5">
                    <div class="card border-0 shadow" style="max-width: 10000px; margin:auto;">
                        <img src="images/nvdia.jpg" class="card-img-top">
                        <div class="card-body">
                          <h4>NVIDIA GEFORCE</h4>
                          <h5 class="mb-4">CARDS</h5>
                          
                          <span class="badge rounded-pill bg-light text-dark text-wrap">
                          RTX4050/Ti
                          </span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">
                          RTX3050/Ti
                          </span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">
                          RTX4060/tI
                          </span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">
                          RTX3060/Ti
                          </span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">
                          RTX4070/super/Ti/Ti super
                          </span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">
                          RTX3070/Ti
                          </span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">
                          RTX3080/Ti
                          </span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">
                          RTX4080/super
                          </span>
                          <span class="badge rounded-pill bg-light text-dark text-wrap">
                          RTX3090/Ti
                          </span>                    
                          <span class="badge rounded-pill bg-light text-dark text-wrap">
                          RTX4090                  
                          </span> 
                          <span class="badge rounded-pill bg-light text-dark text-wrap">
                          more..                 
                          </span> 
                                         
                          <div class="d-flex justify-content-evenly mb-1">
                          
                            <a href="rtxadmin.php" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                          </div>                          
                        </div>
                    </div>
                </div>
                        
                <div class="col-lg-5 col-md-6 my-3 mx-5">
                    <div class="card border-0 shadow" style="max-width: 900px; margin:auto;">
                        <img src="images/amd2.png" class="card-img-top">
                        <div class="card-body">
                          <h4>AMD Radeon</h4>
                          <h5 class="mb-4">CARDS</h5>
                          
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                    RX6800 XT
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    RX6750 XT
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    RX7900
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    RX7600
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    RX7800 XT
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    RX6600 XT
                    </span>                    
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    more..                 
                    </span> 
                    <br> 
                      <div class="d-flex justify-content-evenly mb-4">
                   <a href="amdadmin.php" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
                          </div>                          
                        </div>
                    </div>
                    </div>
                    </div>
                
                

                
            </div>
          </div>

          

              
          <h2 class="mt-6 pt-5 mb-5 text-center fw-bold h-font text-dark">We are Also provide</h2>

              
      <div class="container">
        <div class="row justify-content-evenly">
          
            
          <div class="col-lg-2 col-md-2 text-center text-dark bg-light rounded shadow py-4 my-3 ">
              <img src="images/fastservice.jpg" width="70px">
              <h5 class="mt-3"><br>Fast<br>Service</h5>
            </div> 
            <div class="col-lg-2 col-md-2 text-center text-dark bg-light rounded shadow py-4 my-3 ">
              <img src="images/kastemer.png" width="80px">
              <h5 class="mt-3">Easy to understand customer</h5>
            </div> 
            <div class="col-lg-2 col-md-2 text-center text-dark bg-light rounded shadow py-4 my-3 ">
              <img src="images/waranty.png" width="80px">
              <h5 class="mt-3"><br>1 Year<br>warranty</h5>
            </div> 
            <div class="col-lg-2 col-md-2 text-center text-dark bg-light rounded shadow py-4 my-3 ">
              <img src="images/freegift.jpg" width="60px">
              <h5 class="mt-3"><br>Many<br>Free Gift</h5>
            </div> 
            <div class="col-lg-2 col-md-2 text-center text-dark bg-light rounded shadow py-4 my-3 ">
              <img src="images/delivery.jpg" width="80px">
              <h5 class="mt-3"><br>Fast Delivery</h5>
            </div> 
            
            </div>
        </div>


<!--Reach Us-->



 <?php require('inc/footeradmin.php');?>

     
      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
      
      <script>
          var swiper = new Swiper(".swiper-container", {
            spaceBetweem: 30,
            effect: "fade",
            loop: true,
            autoplay: {
              delay: 3500,
              disableOnInteractiom: false,
            }          
          });
        </script>

      </body>
    </html>