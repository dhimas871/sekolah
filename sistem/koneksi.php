<?php
$db_host = "localhost";
	$db_user = "root";
	$db_password = "";
	$db_name = "sekolah";

	$con =mysqli_connect($db_host, $db_user, $db_password, $db_name);
	if(!$con) {
		die ("koneksi gagal :".mysqli_connect_error ());
	} 
	
?>