<?php
if(isset($_POST['edit'])) {

	include('..\koneksi.php');

	$id_kelas 		= $_POST['id_kelas'];
	$id_siswa 		= $_POST['id_siswa'];
	$nama_kelas		= $_POST['nama_kelas'];
	$ket			= $_POST['ket'];

	$update = mysqli_query($con,"UPDATE kelas SET id_siswa='$id_siswa', nama_kelas='$nama_kelas', ket='$ket' WHERE id_kelas='$id_kelas'") or die (mysqli_error($con));

}

echo "<script>window.alert('Data Telah Diedit')
window.location='../tambah2.php?page=data-siswa'</script>'";


?>