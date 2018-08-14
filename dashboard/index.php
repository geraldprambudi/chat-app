<?php
	session_start();

	include '../setting/database.php';
	include '../setting/status_session.php';


	$id_member = $_SESSION['id_member'];

	$nama_member = mysqli_query($koneksi, "SELECT nama_lengkap FROM member WHERE id_member = '$id_member'");
	$data = mysqli_fetch_array($nama_member);

	if(!isset($_SESSION['id_member'])) {
		echo "<script>alert('silahkan login dahulu')</script>";
		echo 'header("location:../index.php")';
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 	<h1>Selamat datang di halaman member <?php echo $id_member;?></h1>
 	<p><a href="logout.php">Logout</a></p>
 	<P>teks ini hanya bisa di baca oleh member</P>
</body>
</html>