<?php

include 'koneksi.php';

function tambah_data($data, $files){
	$tanggal = $data['tanggal'];
	$ruangan = $data['ruangan'];
	$user_ruangan = $data['user_ruangan'];
	$jenis_perbaikan = $data['jenis_perbaikan'];
	$permasalahan = $data['permasalahan'];
	$tindak_lanjut = $data['tindak_lanjut'];
	$status_perbaikan = $data['status_perbaikan'];
	$nama_teknisi = $data['nama_teknisi'];

	$query = "INSERT INTO tb_keluhan VALUES(NULL, '$tanggal', '$ruangan', '$user_ruangan', '$jenis_perbaikan', '$permasalahan', '$tindak_lanjut', '$status_perbaikan', '$nama_teknisi')";
	$sql = mysqli_query($GLOBALS['conn'], $query);

	return true;

}

function ubah_data($data, $files){
	$id_keluhan = $data['id_keluhan'];
	$tanggal = $data['tanggal'];
	$ruangan = $data['ruangan'];
	$user_ruangan = $data['user_ruangan'];
	$jenis_perbaikan = $data['jenis_perbaikan'];
	$permasalahan = $data['permasalahan'];
	$tindak_lanjut = $data['tindak_lanjut'];
	$status_perbaikan = $data['status_perbaikan'];
	$nama_teknisi = $data['nama_teknisi'];

	$queryShow = "SELECT * FROM tb_keluhan WHERE id_keluhan = '$id_keluhan';";
	$sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
	$result = mysqli_fetch_assoc($sqlShow);

	$query = "UPDATE tb_keluhan SET tanggal='$tanggal', ruangan='$ruangan', user_ruangan='$user_ruangan', jenis_perbaikan='$jenis_perbaikan', permasalahan='$permasalahan', tindak_lanjut='$tindak_lanjut', status_perbaikan='$status_perbaikan', nama_teknisi='$nama_teknisi' WHERE id_keluhan='$id_keluhan';";
	$sql = mysqli_query($GLOBALS['conn'], $query);

	return true;

}


?>