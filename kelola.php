<!DOCTYPE html>

<?php
include 'koneksi.php';

$id_keluhan = '';
$tanggal = '';
$ruangan = '';
$user_ruangan = '';
$jenis_perbaikan = '';
$permasalahan = '';
$tindak_lanjut = '';
$status_perbaikan = '';
$nama_teknisi = '';

if(isset($_GET['ubah'])){
	$id_keluhan = $_GET['ubah'];

	$query = "SELECT * FROM tb_keluhan WHERE id_keluhan = '$id_keluhan';";
	$sql = mysqli_query($conn, $query);
	$result = mysqli_fetch_assoc($sql);
	$tanggal = $result['tanggal'];
	$ruangan = $result['ruangan'];
	$user_ruangan = $result['user_ruangan'];
	$jenis_perbaikan = $result['jenis_perbaikan'];
	$permasalahan = $result['permasalahan'];
	$tindak_lanjut = $result['tindak_lanjut'];
	$status_perbaikan = $result['status_perbaikan'];
	$nama_teknisi = $result['nama_teknisi'];

}
?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
	
	<title>laporan_perbaikan</title>
</head>
<body>
	<nav class="navbar navbar-light bg-danger">
		<div class="container-fluid">
			<a class="navbar-brand text-white" href="#">
				<strong>
					&nbsp;SIMRS RSAB HARAPAN KITA
				</strong>
			</a>
		</div>
	</nav>
	
	<div class="container">
		<div class="mt-4">
			<form method="POST" action="proses.php" enctype="multipart/form-data">
				<input type="hidden" value="<?php echo $id_keluhan; ?>" name="id_keluhan">
				<div class="mb-3 row">
					<label for="tanggal" class="col-sm-2 col-form-label">
						Tanggal
					</label>
					<div class="col-sm-10">
						<input type="datetime-local" name="tanggal" class="form-control" id="tanggal" value="<?php $tanggal; ?>">
					</div>
				</div>
			</div>
			
			<div class="mb-3 row">
				<label for="ruangan" class="col-sm-2 col-form-label">
					Ruangan
				</label>
				<div class="col-sm-10">
					<input required type="text" name="ruangan" class="form-control" id="ruangan" placeholder="Ex: Ruangan Yang Terkendala" value="<?php echo $ruangan; ?>">
				</div>
			</div>
			
			<div class="mb-3 row">
				<label for="user_ruangan" class="col-sm-2 col-form-label">
					User Ruangan
				</label>
				<div class="col-sm-10">
					<input required type="text" name="user_ruangan" class="form-control" id="user_ruangan" placeholder="Ex: User Yang Melaporkan" value="<?php echo $user_ruangan; ?>">
				</div>
			</div>

			<div class="mb-3 row">
				<label for="jenis_perbaikan" class="col-sm-2 col-form-label">
					Jenis Perbaikan
				</label>
				<div class="col-sm-10">
					<select required id="jenis_perbaikan" name="jenis_perbaikan" class="form-select">
						<option selected></option>
						<option <?php if($jenis_perbaikan == 'CPU/Monitor'){ echo "selected";} ?> value="CPU/Monitor">CPU/Monitor</option>
						<option <?php if($jenis_perbaikan == 'Printer'){ echo "selected";} ?> value="Printer">Printer</option>
						<option <?php if($jenis_perbaikan == 'Jaringan'){ echo "selected";} ?> value="Jaringan">Jaringan</option>
					</select>
				</div>
			</div>

			<div class="mb-3 row">
				<label for="permasalahan" class="col-sm-2 col-form-label">
					Permasalahan
				</label>
				<div class="col-sm-10">
					<input required type="text" name="permasalahan" class="form-control" id="permasalahan" placeholder="Ex: Permasalahan Yang Di Laporkan" value="<?php echo $permasalahan; ?>">
				</div>
			</div>
			
			<div class="mb-3 row">
				<label for="tindak_lanjut" class="col-sm-2 col-form-label">
					Tindak Lanjut
				</label>
				<div class="col-sm-10">
					<input required type="text" name="tindak_lanjut" class="form-control" id="tindak_lanjut" placeholder="Ex: Tindak Lanjut Yang Di Lakukan" value="<?php echo $tindak_lanjut; ?>">
				</div>
			</div>
			
			<div class="mb-3 row">
				<label for="status_perbaikan" class="col-sm-2 col-form-label">
					Status Perbaikan
				</label>
				<div class="col-sm-10">
					<select required id="status_perbaikan" name="status_perbaikan" class="form-select">
						<option selected></option>
						<option <?php if($status_perbaikan == 'Done'){ echo "selected";} ?> value="Done">Done</option>
						<option <?php if($status_perbaikan == 'Proses'){ echo "selected";} ?> value="Proses">Proses</option>
						<option <?php if($status_perbaikan == 'Pending'){ echo "selected";} ?> value="Pending">Pending</option>
					</select>
				</div>
			</div>

			<div class="mb-3 row">
				<label for="nama_teknisi" class="col-sm-2 col-form-label">
					Nama Teknisi
				</label>
				<div class="col-sm-10">
					<select required id="nama_teknisi" name="nama_teknisi" class="form-select">
						<option selected></option>
						<option <?php if($nama_teknisi == 'Nova'){ echo "selected";} ?> value="Nova">Nova</option>
						<option <?php if($nama_teknisi == 'Tubagus'){ echo "selected";} ?> value="Tubagus">Tubagus</option>
						<option <?php if($nama_teknisi == 'Fahmi'){ echo "selected";} ?> value="Fahmi">Fahmi</option>
						<option <?php if($nama_teknisi == 'Lingga'){ echo "selected";} ?> value="Lingga">Lingga</option>
						<option <?php if($nama_teknisi == 'Hendra'){ echo "selected";} ?> value="Hendra">Hendra</option>
						<option <?php if($nama_teknisi == 'Indra'){ echo "selected";} ?> value="Indra">Indra</option>
						<option <?php if($nama_teknisi == 'Ifah'){ echo "selected";} ?> value="Ifah">Ifah</option>
					</select>
				</div>
			</div>


			<div class="mb-3 row mt-4">
				<div class="col">
					<?php
					if(isset($_GET['ubah'])){
						?>
						<button type="submit" name="aksi" value="edit" class="btn btn-primary">
							<i class="fa fa-floppy-o" aria-hidden="true"></i>
							Simpan Perubahan
						</button>
						<?php
					} else {
						?>
						<button type="submit" name="aksi" type="submit" value="add" class="btn btn-primary">
							<i class="fa fa-floppy-o" aria-hidden="true"></i>
							Tambahkan
						</button>
						<?php
					}
					?>
					<a href="index.php" type="button" class="btn btn-danger">
						<i class="fa fa-reply" aria-hidden="true"></i>
						Batal
					</a>
				</div>
			</div>
		</form>
		
	</div>
</body>
</html>