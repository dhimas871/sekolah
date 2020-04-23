<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>index</title>
	<!-- Bootstrap -->
    <link rel="stylesheet" href="..\assets\style\css\bootstrap.min.css">
    <link rel="stylesheet" href="..\assets\style\css\bootstrap.css">
    <link rel="stylesheet" href="..\assets\style\css\bootstrap-theme.css">
    <link rel="stylesheet" href="..\assets\style\css\bootstrap-theme.min.css">
    <link rel="stylesheet" href="..\assets\style\css\style.css">

   	<script src="..\assets\style\js\jquery.js"></script>
   	<script src="..\assets\style\js\bootstrap.js"></script>
   	<script src="..\assets\style\js\bootstrap.min.js"></script>
   	<script src="..\assets\style\js\npm.js"></script>
  </head>
  <body>

<header><h1>Aplikasi Absensi</h1></header>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="..\index.php">Beranda</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="..\sistem\tambah.php">Siswa</a></li>
        <li><a href="..\sistem\tambah2.php">Kelas</a></li>
      </ul>
    </div>
  </div>
 </nav>

<div class="jumbotron">
<div class="container">
<table border=0 align="center">
		<div class="judul" align="center">
            <h2>Edit Data Siswa</h2>
            <hr width=50%>
        </div>


	<?php

	include ('koneksi.php');

	$id = $_GET ['id'];

	$show = mysqli_query($con,"SELECT*FROM siswa WHERE id='$id'");
	$data = mysqli_fetch_array($show);
	?>

<form action="aksi\editproses.php" method="post">
	<input type="hidden" name="id" value="<?php echo $id ?>">
	<table cellpadding="3" cellspacing="0" align="center" class="table">

			<tr>
				<td>Nis</td>
				<td>:</td>
				<td><input type="text" name="nis" value="<?php echo $data['nis'];?>" required></td>

			</tr>

			<tr>
				<td>Nama Siswa</td>
				<td>:</td>
				<td><input type="text" name="nama_siswa" value="<?php echo $data['nama_siswa'];?>" required></td>
			</tr>

			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" name="jenis_kelamin" value="L">Laki-Laki <br>
					<input type="radio" name="jenis_kelamin" value="P">Perempuan</td>
			</tr>

			<tr>
				<td>Tanggal lahir</td>
				<td>:</td>
				<td><input type="date" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'];?>" required></td>
			</tr>

			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'];?>" required></td>
			</tr>

			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="edit" value="edit" class="btn btn-info">
					<a class="btn btn-default" href="..\sistem\tambah.php" role="button">Batal</a></td>
			</tr>

	</table>
</form>
</table>
</div>
</div>

   	<script src="..\assets\style\js\jquery.js"></script>
   	<script src="..\assets\style\js\bootstrap.js"></script>
   	<script src="..\assets\style\js\bootstrap.min.js"></script>
   	<script src="..\assets\style\js\npm.js"></script>
  </body>
</html>