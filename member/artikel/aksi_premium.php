<?php
	include "../../lib/config.php";
	include "../../lib/koneksi.php";

	$idMember = $_POST['id_member'];
	$idBerlangganan = $_POST['idBerlangganan'];
	$tanggal = $_POST['Tanggal'];

	//query untuk menyimpan ke tabel tbl_kategori
	$querySimpan = mysqli_query($con,"INSERT INTO tbl_premium (id_member, id_berlangganan, tgl_daftar) VALUES ('$idMember','$idBerlangganan','$tanggal')");

	if ($querySimpan) {
		echo "<script> alert ('Berhasil mendaftar Premium'); window.location ='profil_pre.php';</script> ";
	} else {
		echo "<script> alert ('Gagal mendaftar Premium'); window.location ='profil.php';</script> ";
	}
