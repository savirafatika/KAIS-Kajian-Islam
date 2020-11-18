<?php

session_start();

if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$idpremium = $_POST['idPremium'];
	$tgl = $_POST['Waktu'];
	$acara = $_POST['Acara'];
	$deskripsi = $_POST['Deskripsi'];

	//query untuk menyimpan ke tabel tbl_kategori
	$querySimpan = mysqli_query($con,"INSERT INTO tbl_reminder (id_premium, waktu, nama_event, deskripsi) VALUES ('$idpremium', '$tgl','$acara','$deskripsi')");

	if ($querySimpan) {
		echo "<script> alert ('Data reminder berhasil masuk'); window.location ='$admin_url'+'adminweb.php?module=reminder';</script> ";
	} else {
		echo "<script> alert ('Data reminder gagal dimasukan'); window.location ='$admin_url'+'adminweb.php?module=tambah_reminder';</script> ";
	}
}
?>