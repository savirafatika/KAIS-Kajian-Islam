<?php
session_start();
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include"../../../lib/config.php";
	include"../../../lib/koneksi.php";
	$idRe = $_GET['id_reminder'];
	$queryHapus = mysqli_query($con,"DELETE FROM tbl_reminder WHERE id_reminder='$idRe'");

	if ($queryHapus) {
		echo "<script> alert ('Data Reminder berhasil Dihapus'); window.location='$admin_url'+'adminweb.php?module=reminder';</script> ";
	} else {
		echo "<script> alert ('Data Reminder gagal dihapus'); window.location='$admin_url'+'adminweb.php?module=edit_reminder';</script> ";
	}
}
?>