<?php
if(isset($_POST['edit'])) {

	include('..\koneksi.php');

	$id 			= $_POST['id'];
	$nis 			= $_POST['nis'];
	$nama_siswa 	= $_POST['nama_siswa'];
	$jenis_kelamin	= $_POST['jenis_kelamin'];
	$tanggal_lahir	= $_POST['tanggal_lahir'];
	$alamat 		= $_POST['alamat'];

	$update = mysqli_query($con,"UPDATE siswa SET nis='$nis', nama_siswa='$nama_siswa', jenis_kelamin='$jenis_kelamin', tanggal_lahir='$tanggal_lahir', alamat='$alamat' WHERE id='$id'") or die (mysqli_error($con));

}

echo "<script>window.alert('Data Telah Diedit')
window.location='../tambah.php?page=data-siswa'</script>'";

?>