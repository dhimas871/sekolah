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
        <li><a href="..\sistem\jurusan.php">Jurusan</a></li>
      </ul>
    </div>
  </div>
 </nav>


<div class="jumbotron">
<div class="container">
<table border=0 align="center">
<div class="judul" align="center">
            <h2>Menambahkan Data Kelas</h2>
            <hr width=50%>
        </div>

	<form action="aksi\tambahproses2.php" method="post">
		<table align="center" cellpadding="3" cellspacing="0" class="table">
			<tr>
				<td>ID Siswa</td>
				<td>:</td>
				<td><input type="text" name="id_siswa"></td>
			</tr>

			<tr>
				<td>Kelas</td>
				<td>:</td>
				  <td>
              <select name="nama_kelas"> 
              <option>PILIH KELAS</option>
              <option value="12">12</option>
              <option value="11">11</option>
              <option value="10">10</option>
              </select>
             </td>
			</tr>

			<tr>
				<td>Keterangan</td>
				<td>:</td>
				<td><textarea name="ket"></textarea></td>

			</tr>

			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="tambah" value="tambah" class="btn btn-default"></td>
			</tr>
			</tr>
		</table>
    </form>
  </table>
 </div>
</div>

	<?php
	$db_host ="localhost";
	$db_user ="root";
	$db_password ="";
	$db_name ="sekolah";


	$con =mysqli_connect("$db_host", "$db_user", "$db_password", "$db_name");
	if($con) 
	{
	$sql = 'SELECT*FROM kelas';

	$query = mysqli_query($con, $sql);

	if (!$query) {
		die ('SQL Error: '.mysqli_error($con));
	}

	echo '<table class="table table-striped">
		  <thead>
		  	<tr>
		  		<th>ID Kelas</th>
		  		<th>ID Siswa</th>
		  		<th>Kelas</th>
		  		<th>Ket</th>
		  		<th>aksi</th>
		  	</tr>
		  </thead>
		  <tbody>';

 	while($row = mysqli_fetch_array($query))
 	{
 		echo '<tr>
 				<td>'.$row['id_kelas'].'</td>
 				<td>'.$row['id_siswa'].'</td>
 				<td>'.$row['nama_kelas'].'</td>
 				<td>'.$row['ket'].'</td>
 			 	<td><a href="edit2.php?id_kelas='.$row['id_kelas'].'" class="btn btn-info">edit</a> | 
 					<a href="aksi/delete2.php?id_kelas='.$row['id_kelas'].'" class="btn btn-danger">delete</a></td>
 			</tr>';

 	}

 	}

	?>

   	<script src="..\assets\style\js\jquery.js"></script>
   	<script src="..\assets\style\js\bootstrap.js"></script>
   	<script src="..\assets\style\js\bootstrap.min.js"></script>
   	<script src="..\assets\style\js\npm.js"></script>
  </body>
</html>