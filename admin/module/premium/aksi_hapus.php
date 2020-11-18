<?php
session_start();
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include"../../../lib/config.php";
	include"../../../lib/koneksi.php";
	$idPre = $_GET['id_premium'];
	$queryHapus = mysqli_query($con,"DELETE FROM tbl_premium WHERE id_premium='$idPre'");

	if ($queryHapus) {
		echo "<script> alert ('Data Premium berhasil Dihapus'); window.location='$admin_url'+'adminweb.php?module=premium';</script> ";
	} else {
		echo "<script> alert ('Data Premium gagal dihapus'); window.location='$admin_url'+'adminweb.php?module=edit_premium';</script> ";
	}
}
?>