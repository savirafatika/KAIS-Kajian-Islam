<?php
session_start();
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include"../../../lib/config.php";
	include"../../../lib/koneksi.php";
	$idB = $_GET['id_bayar'];
	$queryHapus = mysqli_query($con,"DELETE FROM tbl_bayar WHERE id_bayar='$idB'");

	if ($queryHapus) {
		echo "<script> alert ('Data Pembayaran berhasil Dihapus'); window.location='$admin_url'+'adminweb.php?module=pembayaran';</script> ";
	} else {
		echo "<script> alert ('Data Pembayaran gagal dihapus'); window.location='$admin_url'+'adminweb.php?module=edit_pembayaran';</script> ";
	}
}
?>