<?php

session_start();

if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$idMember = $_POST['idMember'];
	$idBerlangganan = $_POST['idBerlangganan'];
	$tanggal = $_POST['Tanggal'];

	//query untuk menyimpan ke tabel tbl_kategori
	$querySimpan = mysqli_query($con,"INSERT INTO tbl_premium (id_member, id_berlangganan, tgl_daftar) VALUES ('$idMember','$idBerlangganan','$tanggal')");

	if ($querySimpan) {
		echo "<script> alert ('Data premium berhasil masuk'); window.location ='$admin_url'+'adminweb.php?module=premium';</script> ";
	} else {
		echo "<script> alert ('Data premium gagal dimasukan'); window.location ='$admin_url'+'adminweb.php?module=tambah_premium';</script> ";
	}
}
?>