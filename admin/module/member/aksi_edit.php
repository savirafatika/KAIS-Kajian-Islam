<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$idMember = $_POST['id_member'];
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];
	$Email = $_POST['Email'];
	$queryEdit = mysqli_query($con,"UPDATE tbl_member SET username='$Username', password = '$Password', email = '$Email' WHERE id_member='$idMember'");

	if ($queryEdit) {
		echo "<script> alert ('Data Member berhasil masuk'); window.location='$admin_url'+'adminweb.php?module=member';</script> ";
	} else {
		echo "<script> alert ('Data Member gagal dimasukan'); window.location='$admin_url'+'adminweb.php?module=edit_member';</script> ";
	}
}
?>
