<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$idRe = $_POST['id_reminder'];
	$tgl = $_POST['Waktu'];
	$acara = $_POST['Acara'];
	$des = $_POST['Deskripsi'];
	$queryEdit = mysqli_query($con,"UPDATE tbl_reminder SET waktu='$tgl', nama_event='$acara', deskripsi='$des' WHERE id_reminder='$idRe'");	

		if ($queryEdit) {
		echo "<script> alert ('Data Reminder berhasil diupdate'); window.location='$admin_url'+'adminweb.php?module=reminder';</script> ";
		} else {
			echo "<script> alert ('Data kategori gagal dimasukan'); window.location='$admin_url'+'adminweb.php?module=edit_reminder';</script> ";
		}
	
}
?>
