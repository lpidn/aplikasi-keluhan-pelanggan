create database db_keluhan;

	create table tb_keluhan(
		id_keluhan INT AUTO_INCREMENT PRIMARY KEY,
		tanggal DATE, 
		ruangan VARCHAR(30),
		user_ruangan VARCHAR(30),
		jenis_perbaikan VARCHAR(50),
		permasalahan VARCHAR(100),
		tindak_lanjut VARCHAR(100),
		status_perbaikan VARCHAR(30),
		nama_teknisi VARCHAR(30)
		);