 <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-dark px-lg-2 py-lg-2 shadow-sm sticky-top">
            <div class="container-fluid">
              <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="GamingZone.php">Gaming Zone</a>
              <button class="navbar-toggler shadow-none " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active me-2" aria-current="page" href="GamingZone.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active me-2" href="about.php">About Us </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active me-2" href="service.php">Service</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active me-2" href="contact.php">Contact Us</a>
                  </li>        
                    </ul>
                  </li>
                </ul>
                
                
            
                <button type="button" class="btn btn-outline-light shadow-none me-lg-6 me-3" data-bs-toggle="modal" data-bs-target="#LoginModal"> 
                Login
                </button>
                <button type="button" class="btn btn-outline-light shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal"> 
                Register
                </button>
              </div>
            </div>
          </nav>

          

          <div class="modal fade" id="LoginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <form action="login.php" method="post">             
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-circle fs-3 me-2"></i> User Login 
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control shadow-none" name="email" required>
                          </div>
                          <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="Password" class="form-control shadow-none" name="password" required>
                          </div>
                            <div class="d-flex align-item-center justify-content-between mb-2">
                            <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
                            <a href="javascript: void(0)" class="tect-secondary text-decoration-none">Forgot Password?</a>
                          </div>
                    </div>                   
                </form>
              </div>
            </div>
          </div>

          <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">

                <form action="connect.php" method="post">             
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-lines-fill fs-3 me-2"></i> Create a new account
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <span class="badge rounded-pill bg-light text-dark mb-3 text-center text-wrap lh-base">
                      It's quick and Easy!
                    </span>
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-6 ps-0">
                          <label class="form-label mb-3">Name</label>
                          <input type="text" class="form-control shadow-none" id="name" name="name">
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                          <label class="form-label mb-3">Email</label>
                          <input type="email" class="form-control shadow-none" id="email" name="email">
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                          <label class="form-label">Phone Number</label>
                          <input type="number" class="form-control shadow-none" id="phoneNumber" name="phoneNumber">
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                          <label class="form-label">Gender</label>
                          <input type="gender" class="form-control shadow-none" id="gender" name="gender">
                        </div>
                        <div class="col-md-12 ps-0 mb-3">
                          <label class="form-label">Address</label>
                          <textarea class="form-control shadow-none" rows="1" id="address" name="address"></textarea>
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                          <label class="form-label mb-3">Date Of Birth</label>
                          <input type="date" class="form-control shadow-none" id="birthday" name="birthday">
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                          <label class="form-label mb-3">Password</label>
                          <input type="password" class="form-control shadow-none" id="password" name="password">
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                          <label class="form-label mb-3">Confirmation Password</label>
                          <input type="password" class="form-control shadow-none" id="confirmationPassword" name="confirmationPassword">
                        </div>
                      </div>
                    </div>
                    <div class="text-center my-1">
                      <button type="submit" class="btn btn-dark shadow-none">Register</button>
                    </div>
                    </div>                   
                </form>
              </div>
            </div>
          </div>