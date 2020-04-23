<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>index</title>
	<!-- Bootstrap -->
    <link rel="stylesheet" href="assets\style\css\bootstrap.min.css">
  </head>
  <body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Beranda</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <ul class="nav navbar-nav">
       
        <li class=""><a href="..\sekolah\siswa.php">Siswa</a></li>
        <li class=""><a href="..\sekolah\kelas.php">Kelas</a></li>

	<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tambah Data <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="..\sekolah\sistem\tambah.php">Tambah Data Siswa</a></li>
            <li><a href="..\sekolah\sistem\tambah2.php">Tambah Data Kelas</a></li>
      </ul>
      </li>
      </ul>
    </div>
  </div>
</nav>

<hr>
<hr>

<div class="jumbotron">
  <div class="container">

<?php
	$db_host ="localhost";
	$db_user ="root";
	$db_password ="";
	$db_name ="db_sekolah";

	$con =mysqli_connect("$db_host", "$db_user", "$db_password", "$db_name");
	if($con) 
{
	$sql = 'SELECT*FROM kelas';

	$query = mysqli_query($con, $sql);

	if (!$query) {
		die ('SQL Error: '.mysqli_error($conn));
	}

	echo '<table border = 1>
		  <thead>
		  	<tr>
		  		<th>id_siswa</th>
		  		<th>Nama_Kelas</th>
		  		<th>Ket</th>
		  		<th>aksi</th>
		  		<th>delete</th>
		  	</tr>
		  </thead>
		  <tbody>';

 	while($row = mysqli_fetch_array($query))
 	{
 		echo '<tr>
 				<td>'.$row['id_siswa'].'</td>
 				<td>'.$row['nama_kelas'].'</td>
 				<td>'.$row['ket'].'</td>
 				<td><a href="sistem/edit2.php?id='.$row['id_kelas'].'">edit</a></td>
        <td><a href="sistem/aksi/delete2.php?id='.$row['id_kelas'].'">delete</a></td>
 			</tr>';

 	}

	}


?>

</div>
</div>







    <script src="assets\style\js\jquery.js"></script>
    <script src="assets\style\js\bootstrap.min.js"></script>
  </body>
</html>