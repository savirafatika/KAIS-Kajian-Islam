<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$idKG = $_POST['id_kg'];
	$Kategori = $_POST['Kategori'];
	$View = $_POST['View'];
	$Sub = $_POST['Subscribe'];
	$Gaji= $_POST['Gaji'];
	$queryEdit = mysqli_query($con,"UPDATE tbl_ketentuan_gaji SET kategori_guru='$Kategori', view='$View', sub='$Sub' ,gaji='$Gaji' WHERE id_kg='$idKG'");

	if ($queryEdit) {
		echo "<script> alert ('Data kententuan gaji berhasil masuk'); window.location='$admin_url'+'adminweb.php?module=ketentuan_gaji';</script> ";
	} else {
		echo "<script> alert ('Data kententuan gaji gagal dimasukan'); window.location='$admin_url'+'adminweb.php?module=edit_kg';</script> ";
	}
}
?>
