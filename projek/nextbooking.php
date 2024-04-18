<?php
require 'config.php';
 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `order` WHERE id='$id'"; 
    $result = mysqli_query($conn, $sql);
    
    if ($row = mysqli_fetch_array($result)) {
        
      $product = $row['product']; 
      $name = $row['name']; 
      $email = $row['email']; 
      $phone = $row['phone']; 
        
    } else {
        echo 'No product found!';
        return; 
    }
} 
?>
<?php require('inc/adminheader.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GamingZone - CustomerBooking </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>        
  <?php require ('inc/links.php');?>
</head>     
<body class="bg-light">
      

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10 mb-5 ">
      
    <h2 class="text-center p-2 h-font">This is our customer booking <td><?=$product;?></td> </h2>
      <h3>Product detail : </h3>
      <table class="table table-bordered bordered-dark bg-secondary text-dark text-center" width="500px">
      <tr>
        <th>Product Name </th>
        <td><?=$product;?></td>
      </tr>
      <tr>
        <th>Name </th>
        <td><?= $name; ?></td>
      </tr>
      <tr>
        <th>Email </th>
        <td><?= $email; ?></td>
      </tr>
      <tr>
        <th>Phone Number </th>
        <td><?= $phone; ?></td>
      </tr>
    </table>

    
    
      </div> 
      <div class="form-group text-center">
      <a href="custbooking.php" class="btn btn-primary btn-lg btn-block">Back</a>
      </div>
    </form>
    </div>
  </div>
</div>

<?php require('inc/footeradmin.php');?>
</body>
</html>
