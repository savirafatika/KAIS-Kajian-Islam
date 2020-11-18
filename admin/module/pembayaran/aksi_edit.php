<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$idB = $_POST['id_bayar'];
	$St = $_POST['Status'];
	$queryEdit = mysqli_query($con,"UPDATE tbl_bayar SET status_bayar='$St' WHERE id_bayar='$idB'");

	if ($queryEdit) {
		echo "<script> alert ('Data Pembayaran berhasil diupdate'); window.location='$admin_url'+'adminweb.php?module=pembayaran';</script> ";
	} else {
		echo "<script> alert ('Data Pembayaran gagal diupdate'); window.location='$admin_url'+'adminweb.php?module=edit_pembayaran';</script> ";
	}
}
?>
