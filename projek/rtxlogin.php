<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=2.0">
  <title>GamingZone - NVIDIA GEFORCE </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>        
  <?php require ('inc/links.php');?>
</head>     
<body class="bg-dark">
      
<?php require('inc/headerlogin.php'); ?>

<?php
require 'config.php';
$sql="SELECT * FROM comp"; 
$result = mysqli_query($conn, $sql); 
?>
<div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center text-white"> NVIDIA GEFORCE Set PC !</h2>    
    <div class="h-line bg-light">
    <br></div>
</div>
<div class="container">
  <div class="row">
    <?php
    while($row=mysqli_fetch_array($result)){ 
    ?>
    <div class="cog-2 col-md-0 my-4 mx-4  ">
      <div class="card border-0 shadow" style="max-width: 600px; margin:auto;">
        <img src="<?= $row['image']; ?>" class="card-img-top" height="360"> 
        <div class="card-body">
          <h4 class="card-title h-font">  <?= $row['name']; ?></h4>
          <h3 class="utf-8">RM <?= number_format($row['price']); ?> </h3> 
          
          <h4 class="badge rounded-pill bg-light text-dark text-wrap">CPU : <?= $row['cp']; ?></h4>
          <h4 class="badge rounded-pill bg-light text-dark text-wrap">Motherboard : <?= $row['mb']; ?></h4>
          <h4 class="badge rounded-pill bg-light text-dark text-wrap">GPU : <?= $row['gp']; ?></h4>
          <h4 class="badge rounded-pill bg-light text-dark text-wrap"><?= $row['gbram']; ?>GB Ram</h4>
          <h4 class="badge rounded-pill bg-light text-dark text-wrap">Storage : <?= $row['store']; ?></h4>
          <br>               
          <div class="d-flex justify-content-evenly mb-1">
            <a href="order.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-outline-dark shadow-none">Buy Now</a>
          </div>                          
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>

<?php require('inc/footerlogin.php');?>
</body>
</html>
