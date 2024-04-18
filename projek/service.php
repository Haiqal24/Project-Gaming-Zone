<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=2.0">
  <title>GamingZone - Service</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>        
  <?php require ('inc/links.php');?>
</head>     
  <body class="bg-dark">
      
  <?php require('inc/header.php'); ?>
  <style>
    .pop:hover{
      border-top-color: var(#2ec1ac) !important;
      transform: scale(1.03);
      transition:all 0.3s;
    }
  </style>

  <div class="my-5 px-4">
    <h2 CLASS="fw-bold h-font text-center text-white">OUR SERVICE</h2>    
    <div class="h-line bg-light"></div>
    <p class="text-center mt-3 text-white">
    Our Store also provide some of good service for our lovely customer
  </p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-6 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-5 border-gray pop">
          <div class="d-flex align-item-center mb-2">  
          <img src="images/trade.png" width="90px">
          <h5 class="m-4 ms-3">Recycling and Trade-In Programs</h5>
        </div>
        <p>
        Providing options for customers to recycle their old electronics safely or trade them in for store credit towards new purchases.        </p>
        </div> 
      </div>
      <div class="col-lg-4 col-md-6 mb-6 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-5 border-gray pop">
          <div class="d-flex align-item-center mb-2">  
          <img src="images/install.png" width="90px">
          <h5 class="m-4 ms-3">Software Sales and Installation</h5>
        </div>
        <p>
        Selling and installing essential software, ranging from office productivity suites to antivirus and specialized applications.        </p>
        </div> 
      </div>  <div class="col-lg-4 col-md-6 mb-6 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-5 border-gray pop">
          <div class="d-flex align-item-center mb-2">  
          <img src="images/repair.png" width="90px">
          <h5 class="m-4 ms-3">Repair and Maintenancek</h5>
        </div>
        <p>
        Offering repair services for damaged or component replacements, as regular maintenance services.        </p>
        </div> 
      </div>  
    </div> 
  </div> 

  <?php require('inc/footer.php');?>

     


</body>
</html>