<?php 
	session_start();
  include 'db.php';
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['id_admin']==''){
		echo '<script>window.location="login.php"</script>';
    echo "<div class='alert'>Gagal!</div>";
	}

  $kontakwebdlh = mysqli_query($koneksi, "SELECT * FROM kontak");
  $kontak = mysqli_fetch_object($kontakwebdlh);

  $logoweb = mysqli_query($koneksi, "SELECT * FROM logo WHERE id = 1");
  $lw = mysqli_fetch_object($logoweb);
  
  $datasekretariat = mysqli_query($koneksi, "SELECT * FROM dataset WHERE id_dataset ='5'");
  $jumlahdataset = mysqli_num_rows($datasekretariat);

  $logopengendalian = mysqli_query($koneksi, "SELECT * FROM logo WHERE id = 5");
  $lpe = mysqli_fetch_object($logopengendalian);
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Pengendalian Admin - Dinas Lingkungan Hidup Kab Mojokerto</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/<?php echo $lpe->nama_files ?>" rel="icon" />

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
            <small>Selamat Datang <a class=""><?php 
            if($_SESSION['id_admin']=='1'){
              echo "<a href='superadmin.php'>Super Admin DLH</a>";
            }
            else if($_SESSION['id_admin']=='5'){
              echo "Admin Pengendalian DLH";
            }
             ?>&nbsp;</a></small>
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
        <a href="<?php echo $kontak->webutama ?>" target="blank" class="nav-item nav-link">DLH Kab Mojokerto</a>
        <a href="pengendalianadmin.php" class="nav-item nav-link ">Pengaturan Data</a>
        <a href="pengendalianlogo.php" class="nav-item nav-link active">Pengaturan Logo</a>
        <a href="pengendalianakun.php" class="nav-item nav-link">Pengaturan Akun</a>
        
      </div>
    </div>
    <a href="login.php" class="btn btn-danger px-3 d-none d-lg-block"><img src="img/logout.png" width="30px" alt=""> Logout</a>
  </nav>
    <!-- Navbar End -->

  

    <!-- Service Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center mx-auto" style="max-width: 1000px">
          <h1 class="display-6 mb-3">
            Dataset Bidang Pengendalian<br>DLH Kab Mojokerto
          </h1>
        </div>

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
                  echo '<script>window.location="pengendalianlogo.php"</script>';
                
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
                echo '<script>window.location="pengendalianlogo.php"</script>';
              }else{
                echo 'gagal'.mysqli_error($koneksi);
              }
            }
           ?>
    <!-- Service End -->

    
    <!-- Footer Start -->
    <div
      class="container-fluid bg-dark footer mt-5 wow fadeIn position-absolute bottom-0 end-0"
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

