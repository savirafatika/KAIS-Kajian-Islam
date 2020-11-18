<?php
session_start();
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include"../../../lib/config.php";
	include"../../../lib/koneksi.php";
	$idS = $_GET['id_soal'];
	$queryHapus = mysqli_query($con,"DELETE FROM tbl_soal WHERE id_soal='$idS'");

	if ($queryHapus) {
		echo "<script> alert ('Data Quiz berhasil Dihapus'); window.location='$admin_url'+'adminweb.php?module=quiz';</script> ";
	} else {
		echo "<script> alert ('Data Quiz gagal dihapus'); window.location='$admin_url'+'adminweb.php?module=quiz';</script> ";
	}
}
?>