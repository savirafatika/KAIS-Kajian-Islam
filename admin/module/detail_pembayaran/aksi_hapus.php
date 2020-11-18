<?php
session_start();
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include"../../../lib/config.php";
	include"../../../lib/koneksi.php";
	$Nota = $_GET['no_nota'];
	$queryHapus = mysqli_query($con,"DELETE FROM tbl_detail_bayar WHERE no_nota='$Nota'");

	if ($queryHapus) {
		echo "<script> alert ('Data Detail Bayar berhasil Dihapus'); window.location='$admin_url'+'adminweb.php?module=dp';</script> ";
	} else {
		echo "<script> alert ('Data Detail bayar gagal dihapus'); window.location='$admin_url'+'adminweb.php?module=dp';</script> ";
	}
}
?>