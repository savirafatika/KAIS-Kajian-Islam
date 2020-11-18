<?php
session_start();
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include"../../../lib/config.php";
	include"../../../lib/koneksi.php";
	$idGaji = $_GET['id_gaji'];
	$queryHapus = mysqli_query($con,"DELETE FROM tbl_penggajian WHERE id_gaji='$idGaji'");

	if ($queryHapus) {
		echo "<script> alert ('Data Penggajian berhasil Dihapus'); window.location='$admin_url'+'adminweb.php?module=gaji';</script> ";
	} else {
		echo "<script> alert ('Data Penggajian gagal dihapus'); window.location='$admin_url'+'adminweb.php?module=edit_gaji';</script> ";
	}
}
?>