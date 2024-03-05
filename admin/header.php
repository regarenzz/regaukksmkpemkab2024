<nav class="navbar navbar-expand border-bottom border-body bg-light sticky-top" data-bs-theme="light">
        <div class="container-lg">
            <a class="navbar-brand" href="./"><i class="bi bi-alipay"></i> Alice Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas-body">
                                <ul class="navbar-nav nav-pills justify-content-start flex-grow-1">
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo (isset($_GET['x']) && $_GET['x']=='home' || !isset($_GET['x'])) ? "active link-light bg-secondary" : "" ; ?> ps-2" aria-current="page" href="home"><i class="bi bi-house"></i> Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo (isset($_GET['x']) && $_GET['x']=='produk') ? "active link-light bg-secondary" : "" ; ?> ps-2" href="produk"><i class="bi bi-card-list"></i> Produk</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo (isset($_GET['x']) && $_GET['x']=='user') ? "active link-light bg-secondary" : "" ; ?> ps-2" href="user"><i class="bi bi-person-vcard"></i> User</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo (isset($_GET['x']) && $_GET['x']=='penjualan') ? "active link-light bg-secondary" : "" ; ?> ps-2" href="penjualan"><i class="bi bi-cash-coin"></i> Penjualan</a>
                                    </li>
                                </ul>
                            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <?php echo $_SESSION['username_admin'] ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end mt-2">
                        <li><a class="dropdown-item" href="./" data-bs-toggle="modal" data-bs-target="#password" ><i class="bi bi-key"></i> Password</a></li>
                            <li><a class="dropdown-item" href="../proses/logout.php"><i class="bi bi-box-arrow-left"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
       
    </nav>

    <!-- modal ubah password-->
<div class="modal fade" id="password" tabindex="-1" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg modal-fullscreen-md-down">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Password User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form class="text-center needs-validation" novalidate action="../proses/ubah-password.php" method="POST">
                  
                  <div class="row">
                  <div class="col-lg-6">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Rega" name="username"
                          value="<?php echo $_SESSION['username_admin'] ?>" disabled>
                        <label for="floatingInput">Username</label>
                        <div class="invalid-feedback text-start">
                          Masukan username anda
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword"  name="passwordlama"
                          value="" required>
                        <label for="floatingInput">Password Lama</label>
                        <div class="invalid-feedback text-start">
                          Masukan Password Lama anda
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                  <div class="col-lg-6">
                      <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" name="passwordbaru"
                          value="" required >
                        <label for="floatingInput">Password Baru</label>
                        <div class="invalid-feedback text-start">
                          Masukan Password Baru
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword"  name="repasswordbaru"
                          value="" required >
                        <label for="floatingInput">Ulangi Password Baru Anda</label>
                        <div class="invalid-feedback text-start">
                          Masukan lagi Password Baru anda
                        </div>
                      </div>
                    </div>                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="ubah_password_validate" value="1234">Save
                      changes</button>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>
        <!-- end modal ubah password-->