<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GamingZone - Booking</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <?php require ('inc/links.php'); ?>
</head>     
<body class="bg-dark">
      
<?php require('inc/adminheader.php'); ?><br><br>

<?php
require 'config.php';
$search_query = "";


if(isset($_GET['search'])){
    $search_query = $_GET['search'];

   
    $sql = "SELECT * FROM `order` WHERE 
            `id` LIKE '%$search_query%' OR 
            `product` LIKE '%$search_query%' OR 
            `name` LIKE '%$search_query%' OR 
            `email` LIKE '%$search_query%' OR 
            `phone` LIKE '%$search_query%'";
} else {
    
    $sql = "SELECT * FROM `order`";
}

$result = mysqli_query($conn, $sql);
?>


<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 mb-4">
      <form action="" method="get">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search" name="search" value="<?php echo htmlspecialchars($search_query); ?>">
          <button class="btn btn-outline-secondary" type="submit">Search</button>
        </div>
      </form>
    </div>
  </div>
  <div class="row justify-content-center">
    <?php
    while($row = mysqli_fetch_array($result)){ 
    ?>
    <div class="col-md-4 mb-4"> 
      <div class="card border-0 shadow" style="max-width: 600px;">
        <div class="card-body">
          <h4 class="card-title h-font text-center text-secondary"><?= htmlspecialchars($row['name']); ?></h4>
          <h4 class="badge rounded-pill bg-light text-dark text-wrap"> <?= htmlspecialchars($row['product']); ?></h4> <br>
          <h4 class="badge rounded-pill bg-light text-dark text-wrap">Name : <?= htmlspecialchars($row['name']); ?></h4> <br>
          <h4 class="badge rounded-pill bg-light text-dark text-wrap">Email : <?= htmlspecialchars($row['email']); ?></h4> <br>
          <h4 class="badge rounded-pill bg-light text-dark text-wrap">Phone Number :<?= htmlspecialchars($row['phone']); ?></h4> 
          <div class="d-flex justify-content-center mb-1">
            <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-outline-warning shadow-none mx-2">Edit</a>
            <a href="nextbooking.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-outline-success shadow-none mx-2">View</a>
            <form action="delete.php" method="post" style="display: inline;">
              <input type="hidden" name="delete_id" value="<?php echo htmlspecialchars($row['id']); ?>">
              <button type="submit" name="deletebtn" class="btn btn-sm btn-outline-danger shadow-none mx-2" onclick="return confirm('Are you sure you want to delete this entry?')">Delete</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
</div>


<?php require('inc/footeradmin.php');?>
</body>
</html>
