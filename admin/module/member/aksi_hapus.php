<?php
session_start();
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include"../../../lib/config.php";
	include"../../../lib/koneksi.php";
	$idMember = $_GET['id_member'];
	$queryHapus = mysqli_query($con,"DELETE FROM tbl_member WHERE id_member='$idMember'");

	if ($queryHapus) {
		echo "<script> alert ('Data Member berhasil Dihapus'); window.location='$admin_url'+'adminweb.php?module=member';</script> ";
	} else {
		echo "<script> alert ('Data Member gagal dihapus'); window.location='$admin_url'+'adminweb.php?module=edit_member';</script> ";
	}
}
?>