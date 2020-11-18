<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$idSoal = $_POST['id_soal'];
	$Soal = $_POST['Soal'];
	$A = $_POST['A'];
	$B = $_POST['B'];
	$C = $_POST['C'];
	$D = $_POST['D'];
	$Kunci = $_POST['Kunci'];
	$Aktif = $_POST['Aktif'];

	$queryEdit = mysqli_query($con,"UPDATE tbl_soal SET id_soal='$idSoal', soal='$Soal', a='$A', b='$B', c='$C', d='$D', kunci='$Kunci', aktif='$Aktif' WHERE id_soal='$idSoal'");

	if ($queryEdit) {
		echo "<script> alert ('Data Quiz berhasil diupdate'); window.location='$admin_url'+'adminweb.php?module=quiz';</script> ";
	} else {
		echo "<script> alert ('Data Quiz gagal diupdate'); window.location='$admin_url'+'adminweb.php?module=edit_quiz';</script> ";
	}
}
?>
