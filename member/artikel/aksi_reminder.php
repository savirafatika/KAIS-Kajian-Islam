<?php
	include "../../lib/config.php";
	include "../../lib/koneksi.php";

	$idpremium = $_POST['id_premium'];
	$tgl = $_POST['Waktu'];
	$acara = $_POST['Acara'];
	$deskripsi = $_POST['Deskripsi'];

	//query untuk menyimpan ke tabel tbl_kategori
	if (!empty($idpremium)) {
		$querySimpan = mysqli_query($con,"INSERT INTO tbl_reminder (id_premium, waktu, nama_event, deskripsi) VALUES ('$idpremium', '$tgl','$acara','$deskripsi')");

		if ($querySimpan) {
			echo "<script> alert ('reminder berhasil dibuat'); window.location ='profil_pre.php';</script> ";
		} else {
			echo "<script> alert ('reminder gagal dibuat'); window.location ='profil_pre.php';</script> ";
		}
	} else {
		echo "<script> alert ('maaf anda harus mendaftar akun premium'); window.location ='profil.php';</script> ";
	}

	
?>