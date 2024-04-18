<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GamingZone</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>        
  <?php require ('inc/links.php');?>
</head>     
<body class="bg-dark">
      
<?php require('inc/headerlogin.php'); ?>

<?php
require 'conf.php';
$sql = "SELECT * FROM `register`"; 
$result = mysqli_query($conn, $sql); 
?>
<div class="container">
  <div class="row justify-content-center">
    <?php
    while($row = mysqli_fetch_array($result)){ 
    ?>
    <div class="cog-2 col-md-3 my-4 mx-4"> 
      <div class="card border-0 shadow" style="max-width: 600px; margin:auto;">
        <div class="card-body">
          <h4 class="card-title h-font text-center text-secondary"><?= htmlspecialchars($row['name']); ?></h4> 
          <h4 class="badge rounded-pill bg-light text-dark text-wrap">Email: <?= htmlspecialchars($row['name']); ?></h4> <br>
          <h4 class="badge rounded-pill bg-light text-dark text-wrap">Phone Number : <?= htmlspecialchars($row['email']); ?></h4> <br>
          <h4 class="badge rounded-pill bg-light text-dark text-wrap">Gender :<?= htmlspecialchars($row['phoneNumber']); ?></h4> 
          <h4 class="badge rounded-pill bg-light text-dark text-wrap">Address : <?= htmlspecialchars($row['address']); ?></h4>
          <h4 class="badge rounded-pill bg-light text-dark text-wrap">Birthday: <?= htmlspecialchars($row['birthday']); ?></h4> <br>
          <h4 class="badge rounded-pill bg-light text-dark text-wrap">User Typer : <?= htmlspecialchars($row['name']); ?></h4>
          <div class="d-flex justify-content-evenly mb-1">
            <a href="nextbooking.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-outline-dark shadow-none">View</a>
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
