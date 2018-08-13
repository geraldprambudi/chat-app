<!DOCTYPE html>
<html>
<head>
	<title>Halaman Daftar Dan Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery.js"></script>
	<script src="js/daftar.js"></script>
</head>
<body>
	<h1>Selamat datang, member</h1>
	<table width="100%">
		<tr>
			<td>
				<h3>Login</h3>
				<form id="formlogin" method="post">
					Username
					<br>
					<input type="text" id="username_login" name="username_login" />
					<br>
					
					Password
					<br>
					<input type="password" id="password_login" name="password_login" />
					<br>
					<br>
					<input type="submit" id="submit_login" name="submit_login" value="LOGIN"></input>
				</form>
			</td>


			<td>
				<h3>Register</h3>
				<form id="formdaftar" method="post">
					Nama Lengkap
					<br>
					<input type="text" name="nama_lengkap_daftar" name="nama_lengkap_daftar" />

					<br><br>

					Jenis Kelamin
					<br>
					<select id="gender_daftar" name="gender_daftar">
						<option value="0">- Pilih Gender -</option>
						<option value="1">- Pria -</option>
						<option value="2">- Perempuan -</option>
					</select>
					<br><br>
					Alamat <br>
					<textarea id="alamat_daftar" name="alamat_daftar" cols="30" rows="5">
					</textarea>

					<br><br>
					Username
					<br>
					<input type="text" name="username_daftar" name="username_daftar" />

					<br><br>


					Password
					<br>
					<input type="password" name="password_daftar" name="password_daftar" />

					<br><br>

					<input type="submit" id="submit_daftar" name="submit_daftar" value="DAFTAR"/>

					<br>
					<div id="loading_daftar">Loading....</div>
					<br>
					<div id="keterangan"></div>
				</form>
			</td>
		</tr>
	</table>
</body>
</html>