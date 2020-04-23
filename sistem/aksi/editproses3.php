<?php
if(isset($_POST['edit'])) {

	include('..\koneksi.php');

	$id_jurusan 	= $_POST['id_jurusan'];
	$jurusan		= $_POST['jurusan'];
	$ket			= $_POST['ket'];

	$update = mysqli_query($con,"UPDATE jurusan SET jurusan='$jurusan', ket='$ket' WHERE id_jurusan='$id_jurusan'") or die (mysqli_error($con));

}

echo "<script>window.alert('Data Telah Diedit')
window.location='../jurusan.php?page=data-siswa'</script>'";


?>