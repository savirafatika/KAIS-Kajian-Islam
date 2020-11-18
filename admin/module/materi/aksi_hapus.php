<?php
session_start();
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include"../../../lib/config.php";
	include"../../../lib/koneksi.php";
	$idMateri = $_GET['id_materi'];
	$queryHapus = mysqli_query($con,"DELETE FROM tbl_materi WHERE id_materi='$idMateri'");

	if ($queryHapus) {
		echo "<script> alert ('Data Materi berhasil Dihapus'); window.location='$admin_url'+'adminweb.php?module=materi';</script> ";
	} else {
		echo "<script> alert ('Data Materi gagal dihapus'); window.location='$admin_url'+'adminweb.php?module=edit_materi';</script> ";
	}
}
?>