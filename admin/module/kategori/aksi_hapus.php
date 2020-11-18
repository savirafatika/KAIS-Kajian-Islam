<?php
session_start();
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include"../../../lib/config.php";
	include"../../../lib/koneksi.php";
	$idKategori = $_GET['id_kategori'];
	$queryHapus = mysqli_query($con,"DELETE FROM tbl_kategori WHERE id_kategori='$idKategori'");

	if ($queryHapus) {
		echo "<script> alert ('Data kategori berhasil Dihapus'); window.location='$admin_url'+'adminweb.php?module=kategori';</script> ";
	} else {
		echo "<script> alert ('Data kategori gagal dihapus'); window.location='$admin_url'+'adminweb.php?module=edit_kategori';</script> ";
	}
}
?>