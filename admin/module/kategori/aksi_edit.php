<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$idKategori = $_POST['id_kategori'];
	$KategoriMateri = $_POST['kategori_materi'];
	$queryEdit = mysqli_query($con,"UPDATE tbl_kategori SET kategori_materi='$KategoriMateri' WHERE id_kategori='$idKategori'");

	if ($queryEdit) {
		echo "<script> alert ('Data kategori berhasil masuk'); window.location='$admin_url'+'adminweb.php?module=kategori';</script> ";
	} else {
		echo "<script> alert ('Data kategori gagal dimasukan'); window.location='$admin_url'+'adminweb.php?module=edit_kategori';</script> ";
	}
}
?>
