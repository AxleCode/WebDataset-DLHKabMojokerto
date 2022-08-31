<?php 
	session_start();
  include 'db.php';
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['id_admin']!="1"){
		echo '<script>window.location="login.php"</script>';
    echo "<div class='alert'>Gagal!</div>";
	}

  $logoweb = mysqli_query($koneksi, "SELECT * FROM logo WHERE id = 1");
  $lw = mysqli_fetch_object($logoweb);

  $logosek = mysqli_query($koneksi, "SELECT * FROM logo WHERE id = 2");
  $ls = mysqli_fetch_object($logosek);

  $logotata = mysqli_query($koneksi, "SELECT * FROM logo WHERE id = 3");
  $lt = mysqli_fetch_object($logotata);

  $logopenaatan = mysqli_query($koneksi, "SELECT * FROM logo WHERE id = 4");
  $lp = mysqli_fetch_object($logopenaatan);

  $logopengendalian = mysqli_query($koneksi, "SELECT * FROM logo WHERE id = 5");
  $lpe = mysqli_fetch_object($logopengendalian);

  $logosampah = mysqli_query($koneksi, "SELECT * FROM logo WHERE id = 6");
  $lsa = mysqli_fetch_object($logosampah);

  $logolab = mysqli_query($koneksi, "SELECT * FROM logo WHERE id = 7");
  $ll = mysqli_fetch_object($logolab);

  $kontakwebdlh = mysqli_query($koneksi, "SELECT * FROM kontak");
  $kontak = mysqli_fetch_object($kontakwebdlh);

  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Web - Dinas Lingkungan Hidup Kab Mojokerto</title>
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
            <small><?php echo $kontak->telpon ?></small>
          </div>
          <div class="h-100 d-inline-flex align-items-center me-4">
            <small class="far fa-envelope-open me-2"></small>
            <small><?php echo $kontak->email ?></small>
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
          src="img/<?php echo $lw->nama_files ?>"
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
        <a href="superadminweb.php" class="nav-item nav-link active">Pengaturan Bidang</a>
        <a href="superadminakun.php" class="nav-item nav-link">Pengaturan Akun</a>
        <a href="superadminkontak.php" class="nav-item nav-link">Pengaturan Kontak</a>
        
      </div>
    </div>
    <a href="logout.php" class="btn btn-danger px-3 d-none d-lg-block"><img src="img/logout.png" width="30px" alt=""> Logout</a>
  </nav>
    <!-- Navbar End -->

  

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
          <div class="text-center mx-auto" style="max-width: 800px">
            <h1 class="display-6 mb-3">
              Pengaturan Semua Logo Bidang <br>DLH Kab Mojokerto
            </h1>
          </div>
          <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <h3>Logo <?php echo $lw->nama_bidang ?></h3>
              <form action="" method="POST" enctype="multipart/form-data">
                  <div class="row g-3">
                    <div class="col-md-8">
                      <div class="form-floating">
                          <img src="img/<?php echo $lw->nama_files ?>" width="200px">
                          <input type="hidden" name="logoweb" value="<?php echo $lw->nama_files ?>">
                          <input type="file" name="gambarweb" class="input-control" >
                       
                       </div>
                    </div>
                    
                    <div class="col-12">
                 
                      <input type="submit" name="submitlogoweb" value="Edit Logo Website" class="btn btn-primary py-2 px-4">
                    </div>
                  </div>
                </form>
            </div>
            <?php 
          if (isset($_POST['submitlogoweb'])){
              $logoweb     = $_POST['logoweb'];

              $filename = $_FILES['gambarweb']['name'];
              $tmp_name = $_FILES['gambarweb']['tmp_name'];

              //jika admin ganti gambar 
              if ($filename != '') {
    
                $type1    = explode('.', $filename);
                $type2    = $type1[1]; 

                $ubahnama = 'logo'.time().'.'.$type2;
                $tipe_diizinkan = array('jpg','jpeg','png');

                //Validasi format file
                if (!in_array($type2, $tipe_diizinkan)) {
                  //Jika format file tidak ada di dalam tipe diizinkan
                  echo '<script>alert("Format File yang diizinkan hanya JPG, PNG, JPEG")</script>';
                  echo '<script>window.location="superadminweb.php"</script>';
                
                }else{
                  unlink('./img/'.$logoweb);
                  echo 'Berhasil Diupload';
                  move_uploaded_file($tmp_name, './img/'.$ubahnama);
                  $namagambar = $ubahnama;
                }

              }else{
                //jika admin tidak ganti gambar
                $namagambar = $logoweb;
              }

              $update = mysqli_query($koneksi, "UPDATE logo SET
                          nama_files = '".$namagambar."'
                          WHERE id = '".$lw->id."' 
                          ");

              if ($update) {
                echo '<script>alert("Update Logo Web Berhasil!")</script>';
                echo '<script>window.location="superadminweb.php"</script>';
              }else{
                echo 'gagal'.mysqli_error($koneksi);
              }
            }
           ?>

  
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <h3>Logo <?php echo $ls->nama_bidang ?></h3>
              <form action="" method="POST" enctype="multipart/form-data">
                  <div class="row g-3">
                    <div class="col-md-8">
                      <div class="form-floating">
                          <img src="img/<?php echo $ls->nama_files ?>" width="100px">
                          <input type="hidden" name="logosek" value="<?php echo $ls->nama_files ?>">
                          <input type="file" name="gambarsek" class="input-control" >
                       </div>
                    </div>
                    <div class="col-12">
                    <input type="submit" name="submitlogosek" value="Edit Logo Sekretariat" class="btn btn-primary py-2 px-4">
                    </div>
                  </div>
                </form>
            </div>
            <?php 
          if (isset($_POST['submitlogosek'])){
              $logosek     = $_POST['logosek'];

              $filename = $_FILES['gambarsek']['name'];
              $tmp_name = $_FILES['gambarsek']['tmp_name'];

              //jika admin ganti gambar 
              if ($filename != '') {
    
                $type1    = explode('.', $filename);
                $type2    = $type1[1]; 

                $ubahnama = 'logo'.time().'.'.$type2;
                $tipe_diizinkan = array('jpg','jpeg','png');

                //Validasi format file
                if (!in_array($type2, $tipe_diizinkan)) {
                  //Jika format file tidak ada di dalam tipe diizinkan
                  echo '<script>alert("Format File yang diizinkan hanya JPG, PNG, JPEG")</script>';
                  echo '<script>window.location="superadminweb.php"</script>';
                
                }else{
                  unlink('./img/'.$logosek);
                  echo 'Berhasil Diupload';
                  move_uploaded_file($tmp_name, './img/'.$ubahnama);
                  $namagambar = $ubahnama;
                }

              }else{
                //jika admin tidak ganti gambar
                $namagambar = $logosek;
              }

              $update = mysqli_query($koneksi, "UPDATE logo SET
                          nama_files = '".$namagambar."'
                          WHERE id = '".$ls->id."' 
                          ");

              if ($update) {
                echo '<script>alert("Update Logo Sekretariat Berhasil!")</script>';
                echo '<script>window.location="superadminweb.php"</script>';
              }else{
                echo 'gagal'.mysqli_error($koneksi);
              }
            }
           ?>

  
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <h3>Logo <?php echo $lt->nama_bidang ?></h3>
              <form action="" method="POST" enctype="multipart/form-data">
                  <div class="row g-3">
                    <div class="col-md-8">
                      <div class="form-floating">
                          <img src="img/<?php echo $lt->nama_files ?>" width="100px">
                          <input type="hidden" name="logot" value="<?php echo $lt->nama_files ?>">
                          <input type="file" name="gambart" class="input-control" >
                       
                       </div>
                    </div>
                    
                    <div class="col-12">
                      <input type="submit" name="submitlogot" value="Edit Logo Tata Lingkungan" class="btn btn-primary py-2 px-4">
                    </div>
                  </div>
                </form>
            </div>
            <?php 
          if (isset($_POST['submitlogot'])){
              $logot     = $_POST['logot'];

              $filename = $_FILES['gambart']['name'];
              $tmp_name = $_FILES['gambart']['tmp_name'];

              //jika admin ganti gambar 
              if ($filename != '') {
    
                $type1    = explode('.', $filename);
                $type2    = $type1[1]; 

                $ubahnama = 'logo'.time().'.'.$type2;
                $tipe_diizinkan = array('jpg','jpeg','png');

                //Validasi format file
                if (!in_array($type2, $tipe_diizinkan)) {
                  //Jika format file tidak ada di dalam tipe diizinkan
                  echo '<script>alert("Format File yang diizinkan hanya JPG, PNG, JPEG")</script>';
                  echo '<script>window.location="superadminweb.php"</script>';
                
                }else{
                  unlink('./img/'.$logot);
                  echo 'Berhasil Diupload';
                  move_uploaded_file($tmp_name, './img/'.$ubahnama);
                  $namagambar = $ubahnama;
                }

              }else{
                //jika admin tidak ganti gambar
                $namagambar = $logot;
              }

              $update = mysqli_query($koneksi, "UPDATE logo SET
                          nama_files = '".$namagambar."'
                          WHERE id = '".$lt->id."' 
                          ");

              if ($update) {
                echo '<script>alert("Update Logo Tata Lingkungan Berhasil!")</script>';
                echo '<script>window.location="superadminweb.php"</script>';
              }else{
                echo 'gagal'.mysqli_error($koneksi);
              }
            }
           ?>

  
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <h3>Logo <?php echo $lp->nama_bidang ?></h3>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row g-3">
                      <div class="col-md-8">
                        <div class="form-floating">
                            <img src="img/<?php echo $lp->nama_files ?>" width="100px">
                            <input type="hidden" name="logop" value="<?php echo $lp->nama_files ?>">
                            <input type="file" name="gambarp" class="input-control" >
                         
                         </div>
                      </div>
                      
                      <div class="col-12">
                        <input type="submit" name="submitlogop" value="Edit Logo Penaatan" class="btn btn-primary py-2 px-4">
                      </div>
                    </div>
                  </form>
              </div>
              <?php 
          if (isset($_POST['submitlogop'])){
              $logop     = $_POST['logop'];

              $filename = $_FILES['gambarp']['name'];
              $tmp_name = $_FILES['gambarp']['tmp_name'];

              //jika admin ganti gambar 
              if ($filename != '') {
    
                $type1    = explode('.', $filename);
                $type2    = $type1[1]; 

                $ubahnama = 'logo'.time().'.'.$type2;
                $tipe_diizinkan = array('jpg','jpeg','png');

                //Validasi format file
                if (!in_array($type2, $tipe_diizinkan)) {
                  //Jika format file tidak ada di dalam tipe diizinkan
                  echo '<script>alert("Format File yang diizinkan hanya JPG, PNG, JPEG")</script>';
                  echo '<script>window.location="superadminweb.php"</script>';
                
                }else{
                  unlink('./img/'.$logop);
                  echo 'Berhasil Diupload';
                  move_uploaded_file($tmp_name, './img/'.$ubahnama);
                  $namagambar = $ubahnama;
                }

              }else{
                //jika admin tidak ganti gambar
                $namagambar = $logop;
              }

              $update = mysqli_query($koneksi, "UPDATE logo SET
                          nama_files = '".$namagambar."'
                          WHERE id = '".$lp->id."' 
                          ");

              if ($update) {
                echo '<script>alert("Update Logo Penaatan Berhasil!")</script>';
                echo '<script>window.location="superadminweb.php"</script>';
              }else{
                echo 'gagal'.mysqli_error($koneksi);
              }
            }
           ?>

              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <h3>Logo <?php echo $lpe->nama_bidang ?></h3>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row g-3">
                      <div class="col-md-8">
                        <div class="form-floating">
                            <img src="img/<?php echo $lpe->nama_files ?>" width="100px">
                            <input type="hidden" name="logolpe" value="<?php echo $lpe->nama_files ?>">
                            <input type="file" name="gambarlpe" class="input-control" >
                         </div>
                      </div>
                      <div class="col-12">
                        <input type="submit" name="submitlogolpe" value="Edit Logo Pengendalian" class="btn btn-primary py-2 px-4">
                      </div>
                    </div>
                  </form>
              </div>
              <?php 
          if (isset($_POST['submitlogolpe'])){
              $logop     = $_POST['logolpe'];

              $filename = $_FILES['gambarlpe']['name'];
              $tmp_name = $_FILES['gambarlpe']['tmp_name'];

              //jika admin ganti gambar 
              if ($filename != '') {
    
                $type1    = explode('.', $filename);
                $type2    = $type1[1]; 

                $ubahnama = 'logo'.time().'.'.$type2;
                $tipe_diizinkan = array('jpg','jpeg','png');

                //Validasi format file
                if (!in_array($type2, $tipe_diizinkan)) {
                  //Jika format file tidak ada di dalam tipe diizinkan
                  echo '<script>alert("Format File yang diizinkan hanya JPG, PNG, JPEG")</script>';
                  echo '<script>window.location="superadminweb.php"</script>';
                
                }else{
                  unlink('./img/'.$logolpe);
                  echo 'Berhasil Diupload';
                  move_uploaded_file($tmp_name, './img/'.$ubahnama);
                  $namagambar = $ubahnama;
                }

              }else{
                //jika admin tidak ganti gambar
                $namagambar = $logolpe;
              }

              $update = mysqli_query($koneksi, "UPDATE logo SET
                          nama_files = '".$namagambar."'
                          WHERE id = '".$lpe->id."' 
                          ");

              if ($update) {
                echo '<script>alert("Update Logo Pengendalian Berhasil!")</script>';
                echo '<script>window.location="superadminweb.php"</script>';
              }else{
                echo 'gagal'.mysqli_error($koneksi);
              }
            }
           ?>


              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <h3>Logo <?php echo $lsa->nama_bidang ?></h3>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row g-3">
                      <div class="col-md-8">
                        <div class="form-floating">
                            <img src="img/<?php echo $lsa->nama_files ?>" width="100px">
                            <input type="hidden" name="logolsa" value="<?php echo $lsa->nama_files ?>">
                            <input type="file" name="gambarlsa" class="input-control" >
                         
                         </div>
                      </div>
                      
                      <div class="col-12">
                        <input type="submit" name="submitlogolsa" value="Edit Logo Pengelolan Sampah" class="btn btn-primary py-2 px-4">
                      </div>
                    </div>
                  </form>
              </div>
              <?php 
          if (isset($_POST['submitlogolsa'])){
              $logop     = $_POST['logolsa'];

              $filename = $_FILES['gambarlsa']['name'];
              $tmp_name = $_FILES['gambarlsa']['tmp_name'];

              //jika admin ganti gambar 
              if ($filename != '') {
    
                $type1    = explode('.', $filename);
                $type2    = $type1[1]; 

                $ubahnama = 'logo'.time().'.'.$type2;
                $tipe_diizinkan = array('jpg','jpeg','png');

                //Validasi format file
                if (!in_array($type2, $tipe_diizinkan)) {
                  //Jika format file tidak ada di dalam tipe diizinkan
                  echo '<script>alert("Format File yang diizinkan hanya JPG, PNG, JPEG")</script>';
                  echo '<script>window.location="superadminweb.php"</script>';
                
                }else{
                  unlink('./img/'.$logolsa);
                  echo 'Berhasil Diupload';
                  move_uploaded_file($tmp_name, './img/'.$ubahnama);
                  $namagambar = $ubahnama;
                }

              }else{
                //jika admin tidak ganti gambar
                $namagambar = $logolsa;
              }

              $update = mysqli_query($koneksi, "UPDATE logo SET
                          nama_files = '".$namagambar."'
                          WHERE id = '".$lsa->id."' 
                          ");

              if ($update) {
                echo '<script>alert("Update Logo Pengelolan Sampah Berhasil!")</script>';
                echo '<script>window.location="superadminweb.php"</script>';
              }else{
                echo 'gagal'.mysqli_error($koneksi);
              }
            }
           ?>

              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <h3>Logo <?php echo $ll->nama_bidang ?></h3>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row g-3">
                      <div class="col-md-8">
                        <div class="form-floating">
                            <img src="img/<?php echo $ll->nama_files ?>" width="100px">
                            <input type="hidden" name="logol" value="<?php echo $ll->nama_files ?>">
                            <input type="file" name="gambarl" class="input-control" >
                         
                         </div>
                      </div>
                      <div class="col-12">
                        <input type="submit" name="submitlogol" value="Edit Logo UPDT Laboratorium" class="btn btn-primary py-2 px-4">
                      </div>
                    </div>
                  </form>
              </div>
              <?php 
          if (isset($_POST['submitlogol'])){
              $logop     = $_POST['logol'];

              $filename = $_FILES['gambarl']['name'];
              $tmp_name = $_FILES['gambarl']['tmp_name'];

              //jika admin ganti gambar 
              if ($filename != '') {
    
                $type1    = explode('.', $filename);
                $type2    = $type1[1]; 

                $ubahnama = 'logo'.time().'.'.$type2;
                $tipe_diizinkan = array('jpg','jpeg','png');

                //Validasi format file
                if (!in_array($type2, $tipe_diizinkan)) {
                  //Jika format file tidak ada di dalam tipe diizinkan
                  echo '<script>alert("Format File yang diizinkan hanya JPG, PNG, JPEG")</script>';
                  echo '<script>window.location="superadminweb.php"</script>';
                
                }else{
                  unlink('./img/'.$logol);
                  echo 'Berhasil Diupload';
                  move_uploaded_file($tmp_name, './img/'.$ubahnama);
                  $namagambar = $ubahnama;
                }

              }else{
                //jika admin tidak ganti gambar
                $namagambar = $logol;
              }

              $update = mysqli_query($koneksi, "UPDATE logo SET
                          nama_files = '".$namagambar."'
                          WHERE id = '".$ll->id."' 
                          ");

              if ($update) {
                echo '<script>alert("Update Logo UPDT Laboratorium Berhasil!")</script>';
                echo '<script>window.location="superadminweb.php"</script>';
              }else{
                echo 'gagal'.mysqli_error($koneksi);
              }
            }
           ?>


          </div>
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

