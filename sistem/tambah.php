<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Siswa</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="..\assets\style\css\bootstrap.min.css">
  <link rel="stylesheet" href="..\assets\style\css\bootstrap.css">
  <link rel="stylesheet" href="..\assets\style\css\bootstrap-theme.css">
  <link rel="stylesheet" href="..\assets\style\css\bootstrap-theme.min.css">
  <link rel="stylesheet" href="..\assets\style\css\style.css">

  <script src="..\assets\style\js\jquery.js"></script>
  <script src="..\assets\style\js\bootstrap.js"></script>
  <script src="..\assets\style\js\bootstrap.min.js"></script>
  <script src="..\assets\style\js\npm.js"></script>
  <script src="..\assets\style\js\popper.min.js"></script>
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
          <li><a href="..\sistem\tambah.php">Siswa</a></li>
          <li><a href="..\sistem\tambah2.php">Kelas</a></li>
          <li><a href="..\sistem\tambah3.php">Jurusan</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="jumbotron">
    <div class="container">
      <table border=0 align="center">
        <div class="judul" align="center">
          <h2>Menambahkan Data Siswa</h2>
          <hr width=50%>
        </div>

        <form action="aksi\tambahproses.php" method="post" enctype="multipart/form-data">
          <table align="center" cellpadding="3" cellspacing="0" class="table">
            <tr>
              <td>Nama Kelas</td>
              <td>:</td>
              <td>
                <?php
                include 'koneksi.php';
                $sql = "SELECT*FROM kelas";
                $query = mysqli_query($con, $sql);
                ?>
                <select name="nama_kelas">Kelas
                  <option>PILIH KELAS</option>
                  <option value="12">12</option>
                  <option value="11">11</option>
                  <option value="10">10</option>
                  <?php
                  while ($data = mysqli_fetch_array($query)) { ?>
                    <option value="<?= $data['id_kelas'] ?>"><?= $data['nama_kelas'] ?>
                      (<?php
                        if ($data['nama_kelas'] == 1) {
                          echo "10";
                        } elseif ($data['nama_kelas'] == 2) {
                          echo "11";
                        } elseif ($data['nama_kelas'] == 3) {
                          echo "12";
                        }
                        ?>)
                    </option>
                  <?php }

                  ?>
                </select>
              </td>
            </tr>

            <tr>
              <td>Nis</td>
              <td>:</td>
              <td><input type="text" name="Nis" required=""></td>
            </tr>

            <tr>
              <td>Nama Siswa</td>
              <td>:</td>
              <td><input type="text" name="Nama"></td>
            </tr>

            <tr>
              <td>Jenis Kelamin</td>
              <td>:</td>
              <td><input type="radio" name="Jenis_Kelamin" value="L">Laki-Laki <br>
                <input type="radio" name="Jenis_Kelamin" value="P">Perempuan</td>
            </tr>

            <tr>
              <td>Tanggal Lahir</td>
              <td>:</td>
              <td><input type="date" name="tanggal_lahir"></td>
            </tr>

            <tr>
              <td>Alamat</td>
              <td>:</td>
              <td><textarea name="Alamat"></textarea></td>
            </tr>

            <tr>
              <td>Foto</td>
              <td>:</td>
              <td><input type="file" name="img"></td>
            </tr>

            <tr>
              <td></td>
              <td></td>
              <td><input type="submit" name="tambah" value="tambah" class="btn btn-primary"></td>
            </tr>
          </table>
        </form>
      </table>
    </div>
  </div>

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

    echo '<table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nis</th>
          <th>Foto</th>
          <th>Nama Siswa</th>
          <th>Jenis Kelamin</th>
          <th>Tanggal Lahir</th>
          <th>Alamat</th>
        </tr>
      </thead>
      <tbody>';

    while ($row = mysqli_fetch_array($query)) {
      echo "<tr>
        <td>" . $row['id'] . "</td>
        <td>" . $row['nis'] . "</td>
        <td><img src='aksi/gambar/" . $row['gambar'] . "' width='100' height='50'></td>
        <td>" . $row['nama_siswa'] . "</td>
        <td>" . $row['jenis_kelamin'] . "</td>
        <td>" . $row['tanggal_lahir'] . "</td>
        <td>" . $row['alamat'] . "</td>
        <td><a href='edit.php?id=$row[id]' class='btn btn-warning'>edit</a> |
          <a href='aksi/delete.php?id=$row[id]' class='btn btn-danger'>delete</a></td>
      </tr>";
    }
  }
  ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="..\assets\style\js\jquery.js"></script>
  <script src="..\assets\style\js\bootstrap.js"></script>
  <script src="..\assets\style\js\bootstrap.min.js"></script>
  <script src="..\assets\style\js\npm.js"></script>
  <script src="..\assets\style\js\popper.min.js"></script>
</body>

</html>