<?php 

include('..\koneksi.php');

$id_kelas = $_GET['id_kelas'];
$sql = "DELETE FROM kelas WHERE id_kelas='$id_kelas'";
$query = mysqli_query($con, $sql);

echo "<script>window.alert('Data Telah Dihapus')
window.location='../tambah2.php?page=data-siswa'</script>'";

 ?>