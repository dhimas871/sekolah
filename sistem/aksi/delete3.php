<?php

include('..\koneksi.php');

$id = $_GET['id_jurusan'];
$sql = "DELETE FROM jurusan WHERE id_jurusan='$id'";
$query = mysqli_query($con, $sql);

echo "<script>window.alert('Data Telah Dihapus')
window.location='../jurusan.php?page=data-siswa'</script>'";
