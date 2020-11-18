<?php
	include "../../lib/config.php";
	include "../../lib/koneksi.php";

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
		echo "<script> alert ('berhasil upload materi'); window.location ='list_materi_t.php';</script> ";
	} else {
		echo "<script> alert ('gagal upload materi'); window.location ='profil_t.php';</script> ";
	}
?>