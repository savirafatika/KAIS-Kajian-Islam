<?php

session_start();

if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";

	$idbayar = $_POST['idBayar'];
	$tbeli = $_POST['TanggalB'];
	$tjatem = $_POST['TanggalJ'];
	$jml = $_POST['Jml'];

	$querySimpan = mysqli_query($con,"INSERT INTO tbl_detail_bayar (id_pembayaran, tgl_beli , tgl_jatuh_tempo, jml_tagihan) VALUES ('$idbayar','$tbeli','$tjatem','$jml')");

	if ($querySimpan) {
		echo "<script> alert ('Data Detail Bayar berhasil masuk'); window.location ='$admin_url'+'adminweb.php?module=dp';</script> ";
	} else {
		echo "<script> alert ('Data Detail Bayar gagal dimasukan'); window.location ='$admin_url'+'adminweb.php?module=tambah_dp';</script> ";
	}
}
?>