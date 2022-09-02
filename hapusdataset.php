<?php 
	include 'db.php';

	if(isset($_GET['iddatasetsekretariat'])){
		
		$deletedataset = mysqli_query($koneksi, "DELETE FROM dataset WHERE id = '".$_GET['iddatasetsekretariat']."' ");
		echo '<script>window.location="sekretariatadmin.php"</script>';
	}
	
	if(isset($_GET['iddatasetbtl'])){
		
		$deletedataset = mysqli_query($koneksi, "DELETE FROM dataset WHERE id = '".$_GET['iddatasetbtl']."' ");
		echo '<script>window.location="btladmin.php"</script>';
	}
	
	if(isset($_GET['iddatasetpenaatan'])){
		
		$deletedataset = mysqli_query($koneksi, "DELETE FROM dataset WHERE id = '".$_GET['iddatasetpenaatan']."' ");
		echo '<script>window.location="penaatanadmin.php"</script>';
	}
	
	if(isset($_GET['iddatasetpengendalian'])){
		
		$deletedataset = mysqli_query($koneksi, "DELETE FROM dataset WHERE id = '".$_GET['iddatasetpengendalian']."' ");
		echo '<script>window.location="pengendalianadmin.php"</script>';
	}
	
	if(isset($_GET['iddatasetpersampahan'])){
		
		$deletedataset = mysqli_query($koneksi, "DELETE FROM dataset WHERE id = '".$_GET['iddatasetpersampahan']."' ");
		echo '<script>window.location="persampahanadmin.php"</script>';
	}

	
	if(isset($_GET['iddatasetlab'])){
		
		$deletedataset = mysqli_query($koneksi, "DELETE FROM dataset WHERE id = '".$_GET['iddatasetlab']."' ");
		echo '<script>window.location="labadmin.php"</script>';
	}
 ?>