<?php
    include 'db.php';

    $datasekretariat = mysqli_query($koneksi, "SELECT * FROM dataset WHERE id_dataset ='2'");
    $jumlahdataset = mysqli_num_rows($datasekretariat);

    $logoweb = mysqli_query($koneksi, "SELECT * FROM logo WHERE id = 1");
    $lw = mysqli_fetch_object($logoweb);
  
    $kontakwebdlh = mysqli_query($koneksi, "SELECT * FROM kontak");
    $kontak = mysqli_fetch_object($kontakwebdlh);

    $datataling = mysqli_query($koneksi, "SELECT * FROM dataset WHERE id_dataset ='10'");
    $jumlahdatasettaling = mysqli_num_rows($datataling);

    $datalabo = mysqli_query($koneksi, "SELECT * FROM dataset WHERE id_dataset ='7'");
    $jumlahdatasetlab = mysqli_num_rows($datalabo);

    $kontakwebdlh = mysqli_query($koneksi, "SELECT * FROM kontak");
    $kontak = mysqli_fetch_object($kontakwebdlh);

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
?>  

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Tata Lingkungan - Dinas Lingkungan Hidup Kab Mojokerto</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/<?php echo $lt->nama_files ?>" rel="icon" />

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
        <a href="index.php" class="nav-item nav-link">Semua Dataset</a>
        <a href="<?php echo $kontak->webutama ?>" target="blank" class="nav-item nav-link">DLH Kab Mojokerto</a>
        <div class="nav-item dropdown">
          <a
            href="#"
            class="nav-link active"
            >Bidang
          </a>
         
          <div class="dropdown-menu bg-light border-0 m-0">
          <a href="sekretariatpublic.php" class="dropdown-item " ><?php echo $ls->nama_bidang ?></a>
            <a href="btlpublic.php" class="dropdown-item active"><?php echo $lt->nama_bidang ?></a>
            <a href="penaatanpublic.php" class="dropdown-item"><?php echo $lp->nama_bidang ?></a>
            <a href="pengendalianpublic.php" class="dropdown-item"><?php echo $lpe->nama_bidang ?></a>
            <a href="persampahanpublic.php" class="dropdown-item"><?php echo $lsa->nama_bidang ?></a>
            <a href="labpublic.php" class="dropdown-item"><?php echo $ll->nama_bidang?></a>
            </div>
        </div>
        <div class="nav-item dropdown">
          <a target="blank"
            href="#"
            class="nav-link"
            >Panduan
          </a>
         
          <div class="dropdown-menu bg-light border-0 m-0">
            <a href="panduanpublic.php" target="blank" class="dropdown-item">Panduan Lihat Data</a>
            <a href="panduanunduh.php" target="blank" class="dropdown-item">Panduan Unduh Data</a>
            
          </div>
        </div>
      </div>
    </div>
    <a href="" class="btn btn-success px-3 d-none d-lg-block"><img src="" alt="">Login Admin</a>
  </nav>
    <!-- Navbar End -->

  

    <!-- Service Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center mx-auto" style="max-width: 1000px">
          <h1 class="display-6 mb-3">
            Dataset <?php echo $ls->nama_bidang ?><br>DLH Kab Mojokerto
          </h1>
        </div>

        <div class="container mt-3 text-left p-5">       
        <table class="table table-hover">
              <thead>
                <tr>
                  <th>Nama Dokumen</th>
                  <th class="text-center">Format Dokumen</th>
                  <th class="text-center">Lihat dan Unduh</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                      if($jumlahdatasettaling==0){
                   ?>  
                      <tr>
                        <td colspan="3" class="text-center">Dataset Tidak Tersedia</td>
                      </tr>   
                      <?php
                      }
                      else{

                        while($data=mysqli_fetch_array($datataling)){
                          ?>
                          <tr>
                            <td><?php echo $data['nama_dataset'] ?></td>
                            <td class="text-center"><?php echo $data['format_dataset']?></td>
                            <td class="text-center"> <a href="<?php echo $data['linkview'] ?>" target="_blank"><img src="img/google-docs.png" alt="Dataset" width="25px" ></a></td>
                          </tr>
                          <?php
                        }

                      }
                  ?>
              </tbody>
            </table>
          </div>

      </div>
    </div>
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

