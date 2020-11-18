<?php
session_start();
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include"../../../lib/config.php";
	include"../../../lib/koneksi.php";
	$idBerlangganan = $_GET['id_berlangganan'];
	$queryHapus = mysqli_query($con,"DELETE FROM tbl_berlangganan WHERE id_berlangganan='$idBerlangganan'");

	if ($queryHapus) {
		echo "<script> alert ('Data kententuan berlangganan berhasil Dihapus'); window.location='$admin_url'+'adminweb.php?module=ketentuan_berlangganan';</script> ";
	} else {
		echo "<script> alert ('Data kententuan berlangganan gagal dihapus'); window.location='$admin_url'+'adminweb.php?module=edit_kb';</script> ";
	}
}
?>