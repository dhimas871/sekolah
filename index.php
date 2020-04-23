<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>index</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="..\sekolah\assets\style\css\bootstrap.min.css">
  <link rel="stylesheet" href="..\sekolah\assets\style\css\bootstrap.css">
  <link rel="stylesheet" href="..\sekolah\assets\style\css\bootstrap-theme.css">
  <link rel="stylesheet" href="..\sekolah\assets\style\css\bootstrap-theme.min.css">
  <link rel="stylesheet" href="..\sekolah\assets\style\css\style.css">

  <script src="..\sekolah\assets\style\js\jquery.js"></script>
  <script src="..\sekolah\assets\style\js\bootstrap.js"></script>
  <script src="..\sekolah\assets\style\js\bootstrap.min.js"></script>
  <script src="..\sekolah\assets\style\js\npm.js"></script>
</head>

<body>

  <header>
    <h1>Aplikasi Absensi</h1>
  </header>

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
          <li><a href="..\sekolah\sistem\tambah.php">Siswa</a></li>
          <li><a href="..\sekolah\sistem\tambah2.php">Kelas</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="jumbotron">
    <div class="container">
      <?php
      $db_host = "localhost";
      $db_user = "root";
      $db_password = "";
      $db_name = "sekolah";


      $con = mysqli_connect("$db_host", "$db_user", "$db_password", "$db_name");
      if ($con) {
        $sql = 'SELECT*FROM siswa';

        $query = mysqli_query($con, $sql);

        if (!$query) {
          die('SQL Error: ' . mysqli_error($con));
        }

        echo '<table border = 0 class="table">
      <thead>
        <tr>
          <th>Nis</th>
          <th>Nama_Siswa</th>
          <th>Jenis_Kelamin</th>
          <th>tanggal lahir</th>
          <th>Alamat</th>
          <th>aksi</th>
        </tr>
      </thead>
      <tbody>';

        while ($row = mysqli_fetch_array($query)) {
          echo '<tr>
        <td>' . $row['nis'] . '</td>
        <td>' . $row['nama_siswa'] . '</td>
        <td>' . $row['jenis_kelamin'] . '</td>
        <td>' . $row['tanggal_lahir'] . '</td>
        <td>' . $row['alamat'] . '</td>
        <td><a href="sistem/edit.php?id=' . $row['id'] . '" class="btn btn-success">edit</a> |
          <a href="sistem/aksi/delete.php?id=' . $row['id'] . '" class="btn btn-danger">delete</a></td>
      </tr>';
        }
      }

      ?>
    </div>
  </div>

  <script src="..\sekolah\assets\style\js\jquery.js"></script>
  <script src="..\sekolah\assets\style\js\bootstrap.js"></script>
  <script src="..\sekolah\assets\style\js\bootstrap.min.js"></script>
  <script src="..\sekolah\assets\style\js\npm.js"></script>
</body>

</html>