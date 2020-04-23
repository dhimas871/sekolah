<?php


if(isset($_POST['tambah'])) {


	include('..\koneksi.php');

	$jurusan 	= $_POST['jurusan'];
	$ket		= $_POST['ket'];


	$input	= mysqli_query($con,"INSERT INTO jurusan VALUES ('NULL', '$jurusan', '$ket')") or die(mysqli_error($con));
	}

echo "<script>window.alert('Data Telah Ditambahkan')
window.location='../jurusan.php?page=data-siswa'</script>'";


?>