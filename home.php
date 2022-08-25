<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru</title>
</head>
<style>
	.btn{
		background-color: lightblue;
		font-family: sans-serif;
		margin: 50px;
	}
	</style>

<body>
	<center>
	<header>
		<h2>PENDAFTARAN SISWA BARU</h2>
		<h2>SMK N 1 SAYUNG</h2>
		<img src="logo1.png">
	</header>
	
	<nav>
			<a href="form-daftar.php">
				<button style="width: 100px; height: 30px" class="btn fourt">DAFTAR</button><a>
			<a href="list-siswa.php">
			<button style="width: 100px; height: 30px" class="btn fourt">PENDAFTAR</button><a>
</nav>
	<center>
	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Pendaftaran siswa baru berhasil!";
			} else {
				echo "Pendaftaran gagal!";
			}
		?>
	</p>
	<?php endif; ?>
	<a href="logout.php">LOGOUT</a>
	</body>
</html>
