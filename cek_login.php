<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'db.php';
 
// menangkap data yang dikirim dari form login
 //mysqli_real_escape_string($koneksi agar sql tidak rusak ketika dimasukkan karakter seperti tanda kutip bintang dll
 $username  = mysqli_real_escape_string($koneksi, $_POST['username']);
 $password = mysqli_real_escape_string($koneksi, $_POST['password']);
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from admin where username = '".$username."' AND password = '".md5($password)."' ");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['id_admin']=="1"){
 
		// buat session login dan super admin
		$_SESSION['username'] = $username;
		$_SESSION['id_admin'] = "1";
		// alihkan ke halaman super admin
		header("location:superadmin.php");
 
	// cek jika user login sebagai sekretariat
	}else if($data['id_admin']=="2"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['id_admin'] = "2";
		// alihkan ke halaman sekretariat 
		header("location:sekretariatadmin.php");
 
	// cek jika user login sebagai bidang tata lingkungan admin
	}else if($data['id_admin']=="10"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['id_admin'] = "10";
		// alihkan ke halaman bidang tata lingkungan admin
		header("location:btladmin.php");
 

    }else if($data['id_admin']=="4"){
		// buat session login dan username bidang penaatan
		$_SESSION['username'] = $username;
		$_SESSION['id_admin'] = "4";
		// alihkan ke halaman dashboard bidang penaatan
		header("location:penaatanadmin.php");
 
    }else if($data['id_admin']=="5"){
		// buat session login dan username bidang pengendalian
		$_SESSION['username'] = $username;
		$_SESSION['id_admin'] = "5";
		// alihkan ke halaman dashboard bidang pengendalian
		header("location:pengendalianadmin.php");
 
    }else if($data['id_admin']=="6"){
		// buat session login dan username bidang pengelolaan sampah
		$_SESSION['username'] = $username;
		$_SESSION['id_admin'] = "6";
		// alihkan ke halaman dashboard bidang pengelolaan sampah
		header("location:persampahanadmin.php");
 
    }else if($data['id_admin']=="7"){
		// buat session login dan username uptd lab admin
		$_SESSION['username'] = $username;
		$_SESSION['id_admin'] = "7";
		// alihkan ke halaman dashboard uptd lab admin
		header("location:labadmin.php");
 
	}else{
 
		// alihkan ke halaman login kembali
        header("location:login.php?pesan=gagal");
        
	}	
}else{
    header("location:login.php?pesan=gagal");
}
 
?>