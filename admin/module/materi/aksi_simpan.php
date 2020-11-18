<?php

session_start();

if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$idMember = $_POST['idMember'];
	$tanggal = $_POST['Tanggal'];
	$kat = $_POST['Kategori'];
	$jen = $_POST['Jenis'];
	$jud = $_POST['Judul'];
	$des = $_POST['Deskripsi'];
	$isi = $_POST['Isi'];

	//query untuk menyimpan ke tabel tbl_kategori
	$querySimpan = mysqli_query($con,"INSERT INTO tbl_materi (id_member, tgl_upload, kategori, jenis, judul_materi, deskripsi, isi) VALUES ('$idMember','$tanggal','$kat','$jen','$jud','$des','$isi')");

	if ($querySimpan) {
		echo "<script> alert ('Data materi berhasil masuk'); window.location ='$admin_url'+'adminweb.php?module=materi';</script> ";
	} else {
		echo "<script> alert ('Data materi gagal dimasukan'); window.location ='$admin_url'+'adminweb.php?module=tambah_materi';</script> ";
	}
}
?>