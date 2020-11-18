<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$idBerlangganan = $_POST['id_berlangganan'];
	$Periode = $_POST['Periode'];
	$Tagihan = $_POST['Tagihan'];
	$queryEdit = mysqli_query($con,"UPDATE tbl_berlangganan SET periode='$Periode', tagihan='$Tagihan' WHERE id_berlangganan='$idBerlangganan'");

	if ($queryEdit) {
		echo "<script> alert ('Data kententuan berlangganan berhasil masuk'); window.location='$admin_url'+'adminweb.php?module=ketentuan_berlangganan';</script> ";
	} else {
		echo "<script> alert ('Data kententuan berlangganan gagal dimasukan'); window.location='$admin_url'+'adminweb.php?module=edit_kb';</script> ";
	}
}
?>
