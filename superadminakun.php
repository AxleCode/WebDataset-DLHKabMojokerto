<?php 
	session_start();
  include 'db.php';
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['id_admin']!="1"){
		echo '<script>window.location="login.php"</script>';
    echo "<div class='alert'>Gagal!</div>";
	}

  $akunsuperadmin = mysqli_query($koneksi, "SELECT * FROM admin WHERE id_admin ='1'");
  $asa = mysqli_fetch_object($akunsuperadmin);

  $akunsekretariat = mysqli_query($koneksi, "SELECT * FROM admin WHERE id_admin ='2'");
  $ase = mysqli_fetch_object($akunsekretariat);

  $akunpenaatan = mysqli_query($koneksi, "SELECT * FROM admin WHERE id_admin ='4'");
  $ap = mysqli_fetch_object($akunpenaatan);

  $akunpengendalian= mysqli_query($koneksi, "SELECT * FROM admin WHERE id_admin ='5'");
  $apeng = mysqli_fetch_object($akunpengendalian);

  $akunpengelolaansampah = mysqli_query($koneksi, "SELECT * FROM admin WHERE id_admin ='6'");
  $apesa= mysqli_fetch_object($akunpengelolaansampah);

  $akunlabadmin = mysqli_query($koneksi, "SELECT * FROM admin WHERE id_admin ='7'");
  $alab = mysqli_fetch_object($akunlabadmin);

  $akuntaling = mysqli_query($koneksi, "SELECT * FROM admin WHERE id_admin ='10'");
  $ataling = mysqli_fetch_object($akuntaling);
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Super Akun - Dinas Lingkungan Hidup Kab Mojokerto</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/kab.png" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div
      class="container-fluid bg-dark text-white-50 py-2 px-0 d-none d-lg-block"
    >
      <div class="row gx-0 align-items-center">
        <div class="col-lg-7 px-5 text-start">
          <div class="h-100 d-inline-flex align-items-center me-4">
            <small class="fa fa-phone-alt me-2"></small>
            <small>(0321) 593178</small>
          </div>
          <div class="h-100 d-inline-flex align-items-center me-4">
            <small class="far fa-envelope-open me-2"></small>
            <small>blhkabupatenmojokerto@gmail.com</small>
          </div>
          
        </div>
        <div class="col-lg-5 px-5 text-end">
            <small>Selamat Datang <a class="">Super Admin DLH&nbsp;</a></small>
          <div class="h-100 d-inline-flex align-items-center">
            
               <small id="jam"> </small>
               <small> &nbsp;WIB</small>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav
    class="navbar navbar-expand-lg bg-succes navbar-light sticky-top pl-5 px-4 px-lg-5"
  >
    <a href="index.html" class="navbar-brand d-flex align-items-center ">
      <h1 class="m-0">
        <img
          class="img-fluid me-3"
          src="img/logo.png"
          width="200px"
          height="600px"
          alt=""
        />
      </h1>
    </a>
    <button
      type="button"
      class="navbar-toggler"
      data-bs-toggle="collapse"
      data-bs-target="#navbarCollapse"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
      <a href="http://dlh.mojokertokab.go.id/" target="blank" class="nav-item nav-link">DLH Kab Mojokerto</a>
        <a href="superadmin.php" class="nav-item nav-link">Semua Dataset</a>
        <a href="superadminweb.php" class="nav-item nav-link ">Pengaturan Bidang</a>
        <a href="superadminakun.php" class="nav-item nav-link active">Pengaturan Akun</a>
        
      </div>
    </div>
    <a href="login.php" class="btn btn-danger px-3 d-none d-lg-block"><img src="img/logout.png" width="30px" alt=""> Logout</a>
  </nav>
    <!-- Navbar End -->

  

    <!-- Service Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center mx-auto" style="max-width: 1000px">
          <h1 class="display-6 my-6 mb-3">
            Pengaturan Akun Super Admin<br>DLH Kab Mojokerto
          </h1>
        </div>

        <!-- Akun Super Admin-->
        <div class="container mt-3 py-1 text-left p-5"> 
            <p class="display-6">Akun Super Admin</p>      
            <div class="container-xxl py-2">
                <div class="container">
                  <div class="row g-1">
                    <div class="col-lg-9 wow fadeIn" data-wow-delay="0.1s">
                      <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row g-3">
                          <div class="col-md-8">
                            <div class="form-floating">
                                <input
                                type="text"
                                class="form-control"
                                name="usersuperadmin"
                                value="<?php echo $asa->username ?>"
                                required
                              />
                              <label for="name">Username Login</label>
                             </div>
                          </div>
                          <div class="col-md-8">
                            <div class="form-floating">
                              <input
                                type="password"
                                class="form-control"
                                id="format"
                                placeholder="Password"
                                name="pass1superadmin"
                                required
                              />
                              <label for="name">Password</label>
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="form-floating">
                              <input
                                type="password"
                                class="form-control"
                                id="format"
                                placeholder="Konfirmasi Password"
                                name="pass2superadmin"
                                required
                              />
                              <label for="name">Konfirmasi Password</label>
                            </div>
                          </div>
                          
                          <div class="col-12">
                            <input type="submit" name="superadmin" value="Ganti Password" class="btn btn-primary py-2 px-4"/>
                           
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <?php 
                    if (isset($_POST['superadmin'])) {
                      $usersuperadmin   = $_POST['usersuperadmin'];
                      $pass1superadmin	= $_POST['pass1superadmin'];
						          $pass2superadmin	= $_POST['pass2superadmin'];

                      if ($pass2superadmin != $pass1superadmin) {
                        echo '<script>alert("Gagal Password Tidak Sama!")</script>';
                      }else{
                        $updatepasssuperadmin = mysqli_query($koneksi, "UPDATE admin SET
                                  username = '".$usersuperadmin."',
                                  password = '".md5($pass1superadmin)."'
                                  WHERE id_admin = '1' ");
                        if ($updatepasssuperadmin) {
                          
                          echo '<script>alert("Update Profil Berhasil!")</script>';
                          echo '<script>window.location="superadminakun.php"</script>';
                        }else{
                          echo 'gagal'.mysqli_error($koneksi);
                        }
                      }
                    }
                ?>


          <!-- Akun Admin Sekretariat-->
        <div class="container mt-6 py-6 text-left p-5"> 
            <p class="display-6">Akun Admin Bidang Sekretariat</p>      
            <div class="container-xxl py-2">
                <div class="container">
                  <div class="row g-1">
                    <div class="col-lg-9 wow fadeIn" data-wow-delay="0.1s">
                      <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row g-3">
                          <div class="col-md-8">
                            <div class="form-floating">
                                <input
                                type="text"
                                class="form-control"
                                name="usersekretariat"
                                value="<?php echo $ase->username ?>"
                                required
                              />
                              <label for="name">Username Login</label>
                             </div>
                          </div>
                          <div class="col-md-8">
                            <div class="form-floating">
                              <input
                                type="password"
                                class="form-control"
                                id="format"
                                placeholder="Password"
                                name="pass1sekretariat"
                                required
                              />
                              <label for="name">Password</label>
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="form-floating">
                              <input
                                type="password"
                                class="form-control"
                                id="format"
                                placeholder="Konfirmasi Password"
                                name="pass2sekretariat"
                                required
                              />
                              <label for="name">Konfirmasi Password</label>
                            </div>
                          </div>
                          
                          <div class="col-12">
                            <input type="submit" name="sekretariat" value="Ganti Password" class="btn btn-primary py-2 px-4"/>
                           
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <?php 
                    if (isset($_POST['sekretariat'])) {
                      $usersekretariat  = $_POST['usersekretariat'];
                      $pass1sekretariat	= $_POST['pass1sekretariat'];
						          $pass2sekretariat	= $_POST['pass2sekretariat'];

                      if ($pass2sekretariat != $pass1sekretariat) {
                        echo '<script>alert("Gagal Password Tidak Sama!")</script>';
                      }else{
                        $updatepasssekretariat = mysqli_query($koneksi, "UPDATE admin SET
                                  username = '".$usersekretariat."',
                                  password = '".md5($pass1sekretariat)."'
                                  WHERE id_admin = '2' ");
                        if ($updatepasssekretariat) {
                          
                          echo '<script>alert("Update Profil Berhasil!")</script>';
                          echo '<script>window.location="superadminakun.php"</script>';
                        }else{
                          echo 'gagal'.mysqli_error($koneksi);
                        }
                      }
                    }
                ?>

           <!-- Akun Admin BTL-->
        <div class="container mt-6 py-6 text-left p-5"> 
            <p class="display-6">Akun Admin Bidang Tata Lingkungan</p>      
            <div class="container-xxl py-2">
                <div class="container">
                  <div class="row g-5">
                    <div class="col-lg-9 wow fadeIn" data-wow-delay="0.1s">
                      <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row g-3">
                          <div class="col-md-8">
                            <div class="form-floating">
                                <input
                                type="text"
                                class="form-control"
                                id="name"
                                name="usertaling"
                                value="<?php echo $ataling->username ?>"
                              />
                              <label for="name">Username Login</label>
                                
                             </div>
                          </div>
                          <div class="col-md-8">
                            <div class="form-floating">
                              <input
                                type="password"
                                class="form-control"
                                id="format"
                                name="pass1taling"
                                placeholder="Password"
                              />
                              <label for="name">Password</label>
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="form-floating">
                              <input
                                type="password"
                                class="form-control"
                                id="format"
                                name="pass2taling"
                                placeholder="Konfirmasi Password"
                              />
                              <label for="name">Konfirmasi Password</label>
                            </div>
                          </div>
                          
                          <div class="col-12">
                            <input type="submit" name="taling" value="Ganti Password" class="btn btn-primary py-2 px-4"/>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <?php 
                    if (isset($_POST['taling'])) {
                      $usertaling   = $_POST['usertaling'];
                      $pass1taling	= $_POST['pass1taling'];
						          $pass2taling	= $_POST['pass2taling'];

                      if ($pass2taling != $pass1taling) {
                        echo '<script>alert("Gagal Password Tidak Sama!")</script>';
                      }else{
                        $updatepasstaling = mysqli_query($koneksi, "UPDATE admin SET
                                  username = '".$usertaling."',
                                  password = '".md5($pass1taling)."'
                                  WHERE id_admin = '10' ");
                        if ($updatepasstaling) {
                          
                          echo '<script>alert("Update Profil Berhasil!")</script>';
                          echo '<script>window.location="superadminakun.php"</script>';
                        }else{
                          echo 'gagal'.mysqli_error($koneksi);
                        }
                      }
                    }
                ?>


           <!-- Akun Admin BPenaatan-->
        <div class="container mt-6 py-6 text-left p-5"> 
            <p class="display-6">Akun Admin Bidang Penaatan</p>      
            <div class="container-xxl py-2">
                <div class="container">
                  <div class="row g-5">
                    <div class="col-lg-9 wow fadeIn" data-wow-delay="0.1s">
                      <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row g-3">
                          <div class="col-md-8">
                            <div class="form-floating">
                                <input
                                type="text"
                                class="form-control"
                                id="name"
                                name="userpenaatan"
                                value="<?php echo $ap->username ?>"
                              />
                              <label for="name">Username Login</label>
                                
                             </div>
                          </div>
                          <div class="col-md-8">
                            <div class="form-floating">
                              <input
                                type="password"
                                class="form-control"
                                id="format"
                                name="pass1penaatan"
                                placeholder="Password"
                              />
                              <label for="name">Password</label>
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="form-floating">
                              <input
                                type="password"
                                class="form-control"
                                id="format"
                                name="pass2penaatan"
                                placeholder="Konfirmasi Password"
                              />
                              <label for="name">Konfirmasi Password</label>
                            </div>
                          </div>
                          
                          <div class="col-12">
                          <input type="submit" name="penaatan" value="Ganti Password" class="btn btn-primary py-2 px-4"/>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <?php 
                    if (isset($_POST['penaatan'])) {
                      $userpenaatan   = $_POST['userpenaatan'];
                      $pass1penaatan	= $_POST['pass1penaatan'];
						          $pass2penaatan	= $_POST['pass2penaatan'];

                      if ($pass2penaatan != $pass1penaatan) {
                        echo '<script>alert("Gagal Password Tidak Sama!")</script>';
                      }else{
                        $updatepasspenaatan = mysqli_query($koneksi, "UPDATE admin SET
                                  username = '".$userpenaatan."',
                                  password = '".md5($pass1penaatan)."'
                                  WHERE id_admin = '4' ");
                        if ($updatepasspenaatan) {
                          
                          echo '<script>alert("Update Profil Berhasil!")</script>';
                          echo '<script>window.location="superadminakun.php"</script>';
                        }else{
                          echo 'gagal'.mysqli_error($koneksi);
                        }
                      }
                    }
                ?>

           <!-- Akun Admin BPengendalian-->
        <div class="container mt-6 py-6 text-left p-5"> 
            <p class="display-6">Akun Admin Bidang Pengendalian</p>      
            <div class="container-xxl py-2">
                <div class="container">
                  <div class="row g-5">
                    <div class="col-lg-9 wow fadeIn" data-wow-delay="0.1s">
                      <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row g-3">
                          <div class="col-md-8">
                            <div class="form-floating">
                                <input
                                type="text"
                                class="form-control"
                                id="name"
                                name="userpengendalian"
                                value="<?php echo $apeng->username ?>"
                              />
                              <label for="name">Username Login</label>
                              
                             </div>
                          </div>
                          <div class="col-md-8">
                            <div class="form-floating">
                              <input
                                type="password"
                                class="form-control"
                                id="format"
                                name="pass1pengendalian"
                                placeholder="Password"
                              />
                              <label for="name">Password</label>
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="form-floating">
                              <input
                                type="password"
                                class="form-control"
                                id="format"
                                name="pass2pengendalian"
                                placeholder="Konfirmasi Password"
                              />
                              <label for="name">Konfirmasi Password</label>
                            </div>
                          </div>
                          
                          <div class="col-12">
                          <input type="submit" name="pengendalian" value="Ganti Password" class="btn btn-primary py-2 px-4"/>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <?php 
                    if (isset($_POST['pengendalian'])) {
                      $userpengendalian   = $_POST['userpengendalian'];
                      $pass1pengendalian	= $_POST['pass1pengendalian'];
						          $pass2pengendalian	= $_POST['pass2pengendalian'];

                      if ($pass2pengendalian != $pass1pengendalian) {
                        echo '<script>alert("Gagal Password Tidak Sama!")</script>';
                      }else{
                        $updatepasspengendalian= mysqli_query($koneksi, "UPDATE admin SET
                                  username = '".$userpengendalian."',
                                  password = '".md5($pass1pengendalian)."'
                                  WHERE id_admin = '5' ");
                        if ($updatepasspengendalian) {
                          
                          echo '<script>alert("Update Profil Berhasil!")</script>';
                          echo '<script>window.location="superadminakun.php"</script>';
                        }else{
                          echo 'gagal'.mysqli_error($koneksi);
                        }
                      }
                    }
                ?>


          <!-- Akun Admin BPS-->
        <div class="container mt-6 py-6 text-left p-5"> 
            <p class="display-6">Akun Admin Bidang Pengelolaan Sampah</p>      
            <div class="container-xxl py-2">
                <div class="container">
                  <div class="row g-5">
                    <div class="col-lg-9 wow fadeIn" data-wow-delay="0.1s">
                      <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row g-3">
                          <div class="col-md-8">
                            <div class="form-floating">
                                <input
                                type="text"
                                class="form-control"
                                id="name"
                                name="userpengelolaan"
                                value="<?php echo $apesa->username ?>"
                              />
                              <label for="name">Username Login</label>
                                
                             </div>
                          </div>
                          <div class="col-md-8">
                            <div class="form-floating">
                              <input
                                type="password"
                                class="form-control"
                                id="format"
                                name="pass1pengelolaan"
                                placeholder="Password"
                              />
                              <label for="name">Password</label>
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="form-floating">
                              <input
                                type="password"
                                class="form-control"
                                id="format"
                                name="pass2pengelolaan"
                                placeholder="Konfirmasi Password"
                              />
                              <label for="name">Konfirmasi Password</label>
                            </div>
                          </div>
                          
                          <div class="col-12">
                          <input type="submit" name="pengelolaan" value="Ganti Password" class="btn btn-primary py-2 px-4"/>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <?php 
                    if (isset($_POST['pengelolaan'])) {
                      $userpengelolaan  = $_POST['userpengelolaan'];
                      $pass1pengelolaan	= $_POST['pass1pengelolaan'];
						          $pass2pengelolaan	= $_POST['pass2pengelolaan'];

                      if ($pass2pengelolaan != $pass1pengelolaan) {
                        echo '<script>alert("Gagal Password Tidak Sama!")</script>';
                      }else{
                        $updatepasspengelolaan= mysqli_query($koneksi, "UPDATE admin SET
                                  username = '".$userpengelolaan."',
                                  password = '".md5($pass1pengelolaan)."'
                                  WHERE id_admin = '6' ");
                        if ($updatepasspengelolaan) {
                          
                          echo '<script>alert("Update Profil Berhasil!")</script>';
                          echo '<script>window.location="superadminakun.php"</script>';
                        }else{
                          echo 'gagal'.mysqli_error($koneksi);
                        }
                      }
                    }
                ?>

          <!-- Akun Admin UPDT Lab-->
        <div class="container mt-6 py-6 text-left p-5"> 
            <p class="display-6">Akun Admin UPDT Laboratorium</p>      
            <div class="container-xxl py-2">
                <div class="container">
                  <div class="row g-5">
                    <div class="col-lg-9 wow fadeIn" data-wow-delay="0.1s">
                      <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row g-3">
                          <div class="col-md-8">
                            <div class="form-floating">
                                <input
                                type="text"
                                class="form-control"
                                id="name"
                                name="userlab"
                                value="<?php echo $alab->username ?>"
                              />
                              <label for="name">Username Login</label>
                                
                             </div>
                          </div>
                          <div class="col-md-8">
                            <div class="form-floating">
                              <input
                                type="password"
                                class="form-control"
                                id="format"
                                name="pass1lab"
                                placeholder="Password"
                              />
                              <label for="name">Password</label>
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="form-floating">
                              <input
                                type="password"
                                class="form-control"
                                id="format"
                                name="pass2lab"
                                placeholder="Konfirmasi Password"
                              />
                              <label for="name">Konfirmasi Password</label>
                            </div>
                          </div>
                          
                          <div class="col-12">
                          <input type="submit" name="lab" value="Ganti Password" class="btn btn-primary py-2 px-4"/>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <?php 
                    if (isset($_POST['lab'])) {
                      $userlab  = $_POST['userlab'];
                      $pass1lab	= $_POST['pass1lab'];
						          $pass2lab	= $_POST['pass2lab'];

                      if ($pass2lab != $pass1lab) {
                        echo '<script>alert("Gagal Password Tidak Sama!")</script>';
                      }else{
                        $updatepasslab= mysqli_query($koneksi, "UPDATE admin SET
                                  username = '".$userlab."',
                                  password = '".md5($pass1lab)."'
                                  WHERE id_admin = '7' ");
                        if ($updatepasslab) {
                          
                          echo '<script>alert("Update Profil Berhasil!")</script>';
                          echo '<script>window.location="superadminakun.php"</script>';
                        }else{
                          echo 'gagal'.mysqli_error($koneksi);
                        }
                      }
                    }
                ?>


      </div>
    </div>
    <!-- Service End -->

    
    <!-- Footer Start -->
    <div
      class="container-fluid bg-dark footer mt-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
     
      <div class="container-fluid copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              &copy; <a href="">2022 IT Team DLH Kab Mojokerto</a>, All Right Reserved.
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script type="text/javascript">
        window.onload = function() { jam(); }
       
        function jam() {
            var e = document.getElementById('jam'),
            d = new Date(), h, m, s;
            h = d.getHours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());
       
            e.innerHTML = h +':'+ m +':'+ s;
       
            setTimeout('jam()', 1000);
        }
       
        function set(e) {
            e = e < 10 ? '0'+ e : e;
            return e;
        }
    </script>
  </body>
</html>

