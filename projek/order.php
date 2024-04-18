<?php
require 'config.php';
 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM comp WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    
    if ($row = mysqli_fetch_array($result)) {
        
        $name = $row['name'];
        $price = $row['price'];
        $cpu = $row['cp']; 
        $mb = $row['mb']; 
        $gpu = $row['gp']; 
        $gbram = $row['gbram'];
        $store = $row['store'];
        $total_price = $price; 
        $image = $row['image'];
        
    } else {
        echo 'No product found!';
        return; 
    }
} 
?>
<?php require('inc/headerlogin.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=2.0">
  <title>GamingZone - AMD Radeon </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>        
  <?php require ('inc/links.php');?>
</head>     
<body class="bg-dark">
      

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10 mb-5">
      
    <h2 class="text-center p-2 text-white h-font">Wow you have a good taste for choosing <td><?=$name;?></td> </h2>
      <h3>product detail : </h3>
      <table class="table table-bordered bordered-dark bg-secondary text-dark text-center" width="500px">
      <tr>
        <th>Product Name </th>
        <td><?=$name;?></td>
        <td rowspan="9" class="text-center bg-secondary"><img src="<?= $image; ?>" class="my-3 shadow" width="500"></td>
      </tr>
      <tr>
        <th>CPU </th>
        <td><?= $cpu; ?></td>
      </tr>
      <tr>
        <th>Motherboard </th>
        <td><?= $mb; ?></td>
      </tr>
      <tr>
        <th>GPU </th>
        <td><?= $gpu; ?></td>
      </tr>
      <tr>
        <th>GB Ram </th>
        <td><?= $gbram; ?></td>
      </tr>
      <tr>
        <th>Store </th>
        <td><?= $store; ?></td>
      </tr>
      <tr>
        <th>Product Price </th>
        <td>RM <?= number_format($price); ?> </td>
      </tr>
      <tr>
        <th>Total Amount </th>
        <td>RM<?= number_format($total_price); ?> </td>
      </tr>
    </table>

    
    
      </div> 
      <div class="form-group text-center">
      <a href="booking.php" class="btn btn-primary btn-lg btn-block">Continue</a>
      </div>
    
    </div>
  </div>
</div>

<?php require('inc/footerlogin.php');?>
</body>
</html>
