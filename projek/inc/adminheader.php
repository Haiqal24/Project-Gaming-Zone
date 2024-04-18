<?php
session_start();
?>
            
            
            
            <nav class="navbar navbar-expand-lg navbar-dark bg-white bg-dark px-lg-2 py-lg-2 shadow-sm sticky-top">
            <div class="container-fluid">
              <a class="navbar-brand me-5 fw-bold fs-6 h-font text-center text-dark" href="admin.php">Gaming Zone<Br>ADMIN</a>
              <button class="navbar-toggler shadow-none " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active me-2 text-dark" aria-current="page" href="admin.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active me-2 text-dark" href="aboutadmin.php">About Us </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active me-2 text-dark" href="serviceadmin.php">Service</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active me-2 text-dark" href="contactadmin.php">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active me-2 text-dark" href="pageadd.php">Add product</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active me-2 text-dark" href="custbooking.php">Customer Booking</a>
                  </li>
                         


 

                    </ul>
                  </li>
                  <a class="btn btn-outline-dark shadow-none me-lg-6 me-3 greeting h-font mx-5 my-2" href="admindetail.php?name=<?php echo urlencode($_SESSION["name"]);?>">
                    <i class="bi bi-person-arms-up text-dark"></i> Hello Boss, <?php echo htmlspecialchars($_SESSION["name"] ?? 'Guest'); ?>
                  </a>
                </ul>
                
                
            
                <button type="button" class="btn btn-outline-dark shadow-none me-lg-6 me-3 " data-bs-toggle="modal" data-bs-target="#LoginModal"> 
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
        

          