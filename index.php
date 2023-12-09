<?php
include 'koneksi.php';
session_start();

$query = "SELECT * FROM tb_keluhan;";
$sql = mysqli_query($conn, $query);
$no = 0;


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
	
	<!-- Data Tables -->
	<link rel="stylesheet" type="text/css" href="datatables/datatables.css">
	<script type="text/javascript" src="datatables/datatables.js"></script>

	<title>laporan_perbaikan</title>
</head>

<script type="text/javascript">
	$(document).ready(function() {
		$('#dt').DataTable();
	} );
</script>

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
	
	<!-- Judul -->
	<div class="container">
		<h1 class="mt-4">Laporan Perbaikan Harian</h1>
		<figure>
			<blockquote class="blockquote">
				<p>Perbaikan Hardware & Software.</p>
			</blockquote>
		</figure>

		<a href="kelola.php" type="button" class="btn btn-primary mb-3">

			<i class="fa fa-plus"></i>
			Tambah Data
		</a>

		<?php
		if(isset($_SESSION['eksekusi'])):
			?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<?php 
				echo $_SESSION['eksekusi'];
				?>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			<?php
			session_destroy(); 
		endif;
		?>

		<div class="table-responsive">
			<table id="dt" class="table align-middle cell-border hover">
				<thead>
					<tr>
						<th><center>No.</center></th>
						<th>Tanggal</th>
						<th>Ruangan</th>
						<th>User Ruangan</th>
						<th>Jenis Perbaikan</th>
						<th>Permasalahan</th>
						<th>Tindak Lanjut</th>
						<th>Status Perbaikan</th>
						<th>Nama Teknisi</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while($result = mysqli_fetch_assoc($sql)){
						?>
						<tr>
							<td>
								<center>
									<?php echo ++$no; ?>.
								</center>
							</td>
							<td>
								<?php echo $result['tanggal']; ?>
							</td>
							<td>
								<?php echo $result['ruangan']; ?>
							</td>
							<td>
								<?php echo $result['user_ruangan']; ?>
							</td>
							<td>
								<?php echo $result['jenis_perbaikan']; ?>
							</td>
							<td>
								<?php echo $result['permasalahan']; ?>
							</td>
							<td>
								<?php echo $result['tindak_lanjut']; ?>
							</td>
							<td>
								<?php echo $result['status_perbaikan']; ?>
							</td>
							<td>
								<?php echo $result['nama_teknisi']; ?>
							</td>
							<td>
								<a href="kelola.php?ubah=<?php echo $result['id_keluhan']; ?>" type="button" class="btn btn-success btn-sm">
									<i class="fa fa-pencil"></i>
								</a>
							</td>
						</tr>
						<?php

					}  

					?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="mb-5"></div>


	
</body>
</html>