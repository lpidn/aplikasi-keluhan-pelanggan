<?php
/*	Untuk Terhubung Dengan database*/
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'db_keluhan';

$conn = mysqli_connect($host, $user, $pass, $db);

if($conn){
	/*echo "Koneksi Berhasil";*/
}

mysqli_select_db($conn, $db);
?>