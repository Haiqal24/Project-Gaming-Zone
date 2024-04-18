<?php
require 'config.php';  

if (isset($_POST['bttn'])) {
    $id = $_POST['edit_id'];
    $name = $_POST['edit_name'];
    $price = $_POST['edit_price'];
    $cp = $_POST['edit_cp'];
    $mb = $_POST['edit_mb']; 
    $gp = $_POST['edit_gp'];
    $gbram = $_POST['edit_gbram'];
    $store = $_POST['edit_store'];
    
    $stmt = $conn->prepare("UPDATE comps SET name=?, price=?, cp=?, mb=?, gp=?, gbram=?, store=? WHERE id=?");
    $stmt->bind_param("sssssssi", $name, $price, $cp, $mb, $gp, $gbram, $store, $id);
    $execute = $stmt->execute();

    if ($execute) {
        session_start(); 
        $_SESSION['success'] = "Your Data is Updated";
    } else {
        $_SESSION['error'] = "Your Data is NOT Updated"; 
    }
    header('Location: admin.php');
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM `comps` WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($row = $result->fetch_assoc()) {
        $name = $row['name'];
        $price = $row['price'];
        $cp = $row['cp'];
        $mb = $row['mb'];
        $gp = $row['gp'];
        $gbram = $row['gbram'];
        $store = $row['store'];
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
    <title>GamingZone - Edit PC RTX </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mb-5">
            <form action="code.php" method="post">
                <input type="hidden" name="edit_id" value="<?php echo htmlspecialchars($id ?? ''); ?>">
                <h2 class="text-center p-2 h-font">Edit Geforce RTX Details for <?= htmlspecialchars($name ?? ''); ?></h2>
                <h3> PC details:</h3>
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="edit_name" value="<?php echo htmlspecialchars($name ?? ''); ?>" class="form-control" placeholder="Enter Name">
                </div>
                <div class="mb-3">
                    <label>Price</label>
                    <input type="text" name="edit_price" value="<?php echo htmlspecialchars($price ?? ''); ?>" class="form-control" placeholder="Enter Price">
                </div>
                <div class="mb-3">
                    <label>CPU</label>
                    <input type="text" name="edit_cp" value="<?php echo htmlspecialchars($cp ?? ''); ?>" class="form-control" placeholder="Enter CPU">
                </div>
                <div class="mb-3">
                    <label>Motherboard</label>
                    <input type="text" name="edit_mb" value="<?php echo htmlspecialchars($mb ?? ''); ?>" class="form-control" placeholder="Enter Motherboard brand"> <!-- corrected variable name -->
                </div>
                <div class="mb-3">
                    <label>GPU</label>
                    <input type="text" name="edit_gp" value="<?php echo htmlspecialchars($gp ?? ''); ?>" class="form-control" placeholder="Enter GPU">
                </div>
                <div class="mb-3">
                    <label>GB RAM</label>
                    <input type="text" name="edit_gbram" value="<?php echo htmlspecialchars($gbram ?? ''); ?>" class="form-control" placeholder="Enter GB RAM">
                </div>
                <div class="mb-3">
                    <label>Storage</label>
                    <input type="text" name="edit_store" value="<?php echo htmlspecialchars($store ?? ''); ?>" class="form-control" placeholder="Enter Storage">
                </div>
        
                <div class="form-group text-center">
                    <a href="amdadmin.php" class="btn btn-danger">Cancel</a>
                    <button type="submit" name="bttn" class="btn btn-primary">Update</button>
                </div>

            </form>
        </div>
    </div>
</div>

<?php require('inc/footeradmin.php'); ?>
</body>
</html>
