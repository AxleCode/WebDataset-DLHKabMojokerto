<?php 
                    if(isset($_GET['pesan'])){
                      if($_GET['pesan']=="gagal"){
                        echo "<script>alert('Username dan Password tidak sesuai !');</script>";
                      }
                    }
                    include'db.php';

                    $logoweb = mysqli_query($koneksi, "SELECT * FROM logo WHERE id = 1");
                    $lw = mysqli_fetch_object($logoweb);


                  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Login Admin Database - DLH Kab Mojokerto</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/protection.png" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/bootstrap-login-form.min.css" />
</head>

<body>
  <!-- Start your project here-->
  <section class="vh-100" style="background-color: rgb(0, 23, 43);">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img
                  src="img/p.jpg"
                  alt="login form"
                  class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
                />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
  
                  <form action="cek_login.php" method="post">
  
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <img src="img/<?php echo $lw->nama_files ?>" alt="" width="350px"><i  style="color: #ff6219;"></i>
                    </div>
  
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Login to a Specific Admin Account</h5>
  
                    <div class="form-outline mb-4">
                      <input type="text" name="username" class="form-control form-control-lg" required/>
                      <label class="form-label" for="form2Example17">Username</label>
                    </div>
  
                    <div class="form-outline mb-4">
                      <input type="password" name="password" class="form-control form-control-lg" required/>
                      <label class="form-label" for="form2Example27">Password</label>
                    </div>
  
                    <div class="pt-1 mb-4">
                      <input type="submit" name="submitadmin" value="Login" class="btn btn-dark btn-lg btn-block">
                    </div>
                    
                    <a href="#!" class="small text-muted">&copy; <a href="">2022 IT Team DLH Kab Mojokerto</a>, All Right Reserved.</a>
                  </form>
                

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>

</html>