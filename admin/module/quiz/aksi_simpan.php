<?php

session_start();

if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$sl = $_POST['Soal'];
	$oa = $_POST['A'];
	$ob = $_POST['B'];
	$oc = $_POST['C'];
	$od = $_POST['D'];
	$kc = $_POST['Kunci'];
	$ak = $_POST['Aktif'];

	//query untuk menyimpan ke tabel tbl_kategori
	$querySimpan = mysqli_query($con,"INSERT INTO tbl_soal (soal, a, b, c, d, kunci, aktif) VALUES ('$sl','$oa','$ob','$oc','$od','$kc','$ak')");

	if ($querySimpan) {
		echo "<script> alert ('Data quiz berhasil masuk'); window.location ='$admin_url'+'adminweb.php?module=quiz';</script> ";
	} else {
		echo "<script> alert ('Data quiz gagal dimasukan'); window.location ='$admin_url'+'adminweb.php?module=tambah_quiz';</script> ";
	}
}
?>