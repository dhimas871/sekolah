<?php


if(isset($_POST['tambah'])) {

	# code...
	include('..\koneksi.php');

	$id_siswa 	= $_POST['id_siswa'];
	$nama_kelas 	= $_POST['nama_kelas'];
	$ket 	= $_POST['ket'];

	
	$input	= mysqli_query($con,"INSERT INTO kelas VALUES ('NULL', '$id_siswa','$nama_kelas','$ket')") or die(mysqli_error($con));
}

echo "<script>window.alert('Data Telah Ditambah')
window.location='../tambah2.php?page=data-siswa'</script>'";

?>