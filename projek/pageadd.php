<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=2.0">
  <title>GamingZone - addproduct</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>        
  <?php require ('inc/links.php');?>
</head>     
  <body class="bg-dark">
      
  <?php require('inc/adminheader.php'); ?>
  <style>
    .pop:hover{
      border-top-color: var(#2ec1ac) !important;
      transform: scale(1.03);
      transition:all 0.3s;
    }
  </style>

  <div class="my-5 px-4">
    <h2 CLASS="fw-bold h-font text-center text-white">Adding Product</h2>    
    <div class="h-line bg-light"></div>
    <p class="text-center mt-3 text-white">
    Please choose witch product you want to add
  </p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-6 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-5 border-gray pop">
          <div class="d-flex align-item-center mb-2" > 
          <a href="addproduct.php" class="text-dark d-inline-block text-decoration-none text-dark"> 
          <img src="images/NV.png" width="145px" >
          <h5 class="m-4 ms-3 text-dark d-inline-block text-decoration-none text-dark">NVIDIA Geforce</h5>
          </a>
          </div>
        </div> 
      </div>
      
      <div class="col-lg-4 col-md-5 mb-6 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-5 border-gray pop">
          <div class="d-flex align-item-center mb-2">  
          <a href="addproductlaptop.php" class="text-dark d-inline-block text-decoration-none text-dark">
          <img src="images/lapt.jpeg" width="110">
          <h5 class="m-4 ms-3 text-dark d-inline-block text-decoration-none text-dark px-5">Laptop</h5>
          </a>
          </div> 
        </div> 
      </div>  

      
      <div class="col-lg-4 col-md-6 mb-6 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-5 border-gray pop">
          <div class="d-flex align-item-center mb-2">
          <a href="addproductamd.php" class="text-dark d-inline-block text-decoration-none text-dark">  
          <img src="images/am.png" width="160px">
          <h5 class="m-4 ms-3 text-dark d-inline-block text-decoration-none text-dark">AMD Radeon</h5>
          </a>
          </div>
        </div> 
      </div> 
    </div> 
  </div> 
  
  

  <?php require('inc/footeradmin.php');?>

     


</body>
</html>



