<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$idPremium = $_POST['id_premium'];
	$Berlangganan = $_POST['idBerlangganan'];
	$queryEdit = mysqli_query($con,"UPDATE tbl_premium SET id_berlangganan='$Berlangganan' WHERE id_premium='$idPremium'");

	if ($queryEdit) {
		echo "<script> alert ('Data Premium berhasil masuk'); window.location='$admin_url'+'adminweb.php?module=premium';</script> ";
	} else {
		echo "<script> alert ('Data Premium gagal dimasukan'); window.location='$admin_url'+'adminweb.php?module=edit_premium';</script> ";
	}
}
?>
