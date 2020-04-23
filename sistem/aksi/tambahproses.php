<?php

if(isset($_POST['tambah'])) {

	include('..\koneksi.php');
	$Nis 			= $_POST['Nis'];
	$Nama 			= $_POST['Nama'];
	$Jenis_Kelamin	= $_POST['Jenis_Kelamin'];
	$tanggal_lahir	= $_POST['tanggal_lahir'];
	$Alamat 		= $_POST['Alamat'];

	$nama_file = $_FILES['img']['name'];
	$file_tmp  = $_FILES['img']['tmp_name'];
	$path	   = "gambar/".$nama_file;
	move_uploaded_file($file_tmp, $path);
	$a ="SELECT*FROM siswa WHERE Nis='$Nis'";
	$u =mysqli_query($con, $a);
	$cek = mysqli_num_rows($u);
	if ($cek >0) {
		echo "<script>window.alert('Nis Sudah Ada !1!1')
		window.location='../tambah.php?page=data-siswa'</script>";
	}
	else{

	$input	= mysqli_query($con,"INSERT INTO siswa VALUES ('NULL','$Nis', '$Nama', '$Jenis_Kelamin','$tanggal_lahir', '$Alamat', '$nama_file')");
}

echo "<script>window.alert('Data Telah Ditambahkan')
window.location='../tambah.php?page=data-siswa'</script>";

}


?>