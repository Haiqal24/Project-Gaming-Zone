<?php
require 'config.php';  
       


if (isset($_POST['deletebtn'])) {
    $id = $_POST['delete_id'];

    $stmt = $conn->prepare("DELETE FROM `order` WHERE id=?");
    $stmt->bind_param("i", $id);
    $execute = $stmt->execute();

    if ($execute) {
        $_SESSION['success'] = "Data deleted successfully";
    } else {
        $_SESSION['success'] = "Failed to delete data";
    }
    header('Location: custbooking.php');
    exit();
}



if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM `order` WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($row = $result->fetch_assoc()) {
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
    <title>GamingZone - Edit </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mb-5">
            <form action="code.php" method="post">
                <input type="hidden" name="edit_id" value="<?php echo htmlspecialchars($id ?? ''); ?>">
                <h2 class="text-center p-2 h-font">Edit Customer Booking for <?= htmlspecialchars($name ?? ''); ?></h2>
                <h3>Order detail:</h3>
                <div class="mb-3">
                    <label>Product Name</label>
                    <input type="text" name="edit_product" value="<?php echo htmlspecialchars($product ?? ''); ?>" class="form-control" placeholder="Enter Product Name">
                </div>
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="edit_name" value="<?php echo htmlspecialchars($name ?? ''); ?>" class="form-control" placeholder="Enter Name">
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="edit_email" value="<?php echo htmlspecialchars($email ?? ''); ?>" class="form-control" placeholder="Enter email">
                </div>
                <div class="mb-3">
                    <label>Phone Number</label>
                    <input type="text" name="edit_phone" value="<?php echo htmlspecialchars($phone ?? ''); ?>" class="form-control" placeholder="Enter Phone Number">
                </div>
                <div class="form-group text-center">
                    <a href="custbooking.php" class="btn btn-danger">Cancel</a>
                    <button type="submit" name="deletebtn" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require('inc/footeradmin.php'); ?>
</body>
</html>
