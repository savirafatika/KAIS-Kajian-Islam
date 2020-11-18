<?php
	include "../../lib/config.php";
	include '../../lib/koneksi.php';

	$idMember = $_POST['id_member'];
	$Password = $_POST['Password'];
	$Email = $_POST['Email'];
	$queryEdit = mysqli_query($con,"UPDATE tbl_member SET password = '$Password', email = '$Email' WHERE id_member='$idMember'");

	if ($queryEdit) {
		echo "<script> alert ('berhasil update'); window.location='profil_t.php';</script> ";
	} else {
		echo "<script> alert ('gagal update'); window.location='profil_t.php';</script> ";
	}
?>
