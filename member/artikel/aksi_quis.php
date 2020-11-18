<?php
	include "../../lib/config.php";
	include "../../lib/koneksi.php";

	$soal = $_POST['Soal'];
	$a = $_POST['A'];
	$b = $_POST['B'];
	$c = $_POST['C'];
	$d = $_POST['D'];
	$kunci = $_POST['Kunci'];
	$aktif = $_POST['Aktif'];

	//query untuk menyimpan ke tabel tbl_kategori
		$querySimpan = mysqli_query($con,"INSERT INTO tbl_soal (soal, a, b, c, d, kunci, aktif) VALUES ('$soal', '$a','$b','$c', '$d', '$kunci', '$aktif')");

		if ($querySimpan) {
			echo "<script> alert ('soal berhasil dibuat'); window.location ='quis.php';</script> ";
		} else {
			echo "<script> alert ('soal gagal dibuat'); window.location ='quis.php';</script> ";
		}
	
?>