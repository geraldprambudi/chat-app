<?php
	session_start();

	include '../setting/database.php';
	include '../setting/status_session.php';
	$id_member = $_SESSION['id_member'];

	$nama_member = mysqli_query($koneksi, "SELECT nama_lengkap FROM member WHERE id_member = '$id_member'");
	$data = mysqli_fetch_array($nama_member);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 	<h1>Halaman Blog <?php echo $data['nama_lengkap'];?></h1><br>
 	<p><a href="index.php">Halaman Depan</a></p><br>
 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
 	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
 	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>
 	<p><a href="logout.php">Logout</a></p><br>
 	<P>teks ini hanya bisa di baca oleh member</P><br>
</body>
</html>