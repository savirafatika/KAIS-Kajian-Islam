<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$idMateri = $_POST['id_materi'];
	$Kat = $_POST['Kategori'];
	$Jen = $_POST['Jenis'];
	$Jud = $_POST['Judul'];
	$Des = $_POST['Deskripsi'];
	$Isi = $_POST['Isi'];
	$queryEdit = mysqli_query($con,"UPDATE tbl_materi SET kategori='$Kat', jenis='$Jen', judul_materi='$Jud', deskripsi='$Des', isi='$Isi' WHERE id_materi='$idMateri'");

	if ($queryEdit) {
		echo "<script> alert ('Data Materi berhasil diupdate'); window.location='$admin_url'+'adminweb.php?module=materi';</script> ";
	} else {
		echo "<script> alert ('Data Materi gagal diupdate'); window.location='$admin_url'+'adminweb.php?module=edit_materi';</script> ";
	}
}
?>
