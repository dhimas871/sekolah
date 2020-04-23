<?php 

include('..\koneksi.php');

$id = $_GET['id'];
$sql = "DELETE FROM siswa WHERE id='$id'";
$query = mysqli_query($con, $sql);

echo "<script>window.alert('Data Telah Dihapus')
window.location='../tambah.php?page=data-siswa'</script>'";

 ?>