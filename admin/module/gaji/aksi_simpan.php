<?php

session_start();

if (empty($_SESSION['namauser']) and empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$idMember = $_POST['idMember'];
	$idKg = $_POST['id_kg'];
	$tanggal = $_POST['Tanggal'];
	$gaji = $_POST['gaji'];

	$querySimpan = mysqli_query($con, "INSERT INTO tbl_penggajian (id_member, id_kg, tgl_cair, jml_gaji) VALUES ('$idMember','$idKg','$tanggal','$gaji')");

	if ($querySimpan) {
		echo "<script> alert ('Data Penggajian berhasil masuk'); window.location ='$admin_url'+'adminweb.php?module=gaji';</script> ";
	} else {
		echo "<script> alert ('Data Penggajian gagal dimasukan'); window.location ='$admin_url'+'adminweb.php?module=tambah_gaji';</script> ";
	}
}
