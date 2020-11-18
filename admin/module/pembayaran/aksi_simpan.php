<?php

session_start();

if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$idP = $_POST['idPremium'];
	$Tgl = $_POST['Tanggal'];
	$Stb = $_POST['Status'];

	//query untuk menyimpan ke tabel tbl_kategori
	$querySimpan = mysqli_query($con,"INSERT INTO tbl_bayar (id_premium, tgl_bayar, status_bayar) VALUES ('$idP', '$Tgl','$Stb')");

	if ($querySimpan) {
		echo "<script> alert ('Data Pembayaran berhasil masuk'); window.location ='$admin_url'+'adminweb.php?module=pembayaran';</script> ";
	} else {
		echo "<script> alert ('Data Pembayaran gagal dimasukan'); window.location ='$admin_url'+'adminweb.php?module=tambah_pembayaran';</script> ";
	}
}
?>