<?php
session_start();
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include"../../../lib/config.php";
	include"../../../lib/koneksi.php";
	$idKG = $_GET['id_kg'];
	$queryHapus = mysqli_query($con,"DELETE FROM tbl_ketentuan_gaji WHERE id_kg='$idKG'");

	if ($queryHapus) {
		echo "<script> alert ('Data kententuan gaji berhasil Dihapus'); window.location='$admin_url'+'adminweb.php?module=ketentuan_gaji';</script> ";
	} else {
		echo "<script> alert ('Data kententuan gaji gagal dihapus'); window.location='$admin_url'+'adminweb.php?module=edit_kg';</script> ";
	}
}
?>