<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GamingZone</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>        
  <?php require('inc/links.php'); ?>
</head>     
<body class="bg-dark">

<?php session_start(); ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-lg-2 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="gzlogin.php">Gaming Zone</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active me-2" aria-current="page" href="gzlogin.php">Home</a>
        </li>
        <li class="nav-item">
         <a class="nav-link active me-2" href="aboutlogin.php">About Us </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active me-2" href="servicelogin.php">Service</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active me-2" href="contactlogin.php">Contact Us</a>
        </li>
      </ul>
      <div>
      <a class="btn btn-outline-light shadow-none me-lg-6 me-3 greeting h-font mx-5 my-2" href="userdetail.php?name=<?php echo urlencode($_SESSION["name"]);?>">
        <i class="bi bi-person-arms-up"></i> Hello, <?php echo htmlspecialchars($_SESSION["name"] ?? 'Guest'); ?>
      </a>

      <button type="button" class="btn btn-outline-light shadow-none me-lg-6 me-3" data-bs-toggle="modal" data-bs-target="#LoginModal"> 
                Logout
                </button>
              </div>
            </div>
          </nav>
          <div class="modal fade" id="LoginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <form action="GamingZone.php" method="post">             
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-emoji-frown-fill"> Are You Sure You Want to Logout?</i>
                        </h5>
                        <button type="reset" class="btn-close shadow-none " data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                            <div class="d-flex align-item-center justify-content-center">
                            <a href="GamingZone.php">
                            <button type="submit" class="btn btn-dark shadow-none">LOGOUT</button>
                            </a>
                            </div>
                    </div>                   
                </form>
              </div>
            </div>
          </div>
                </a>
          

          
                    </div>                   
                </form>
              </div>
            </div>
          </div>
