<?php include('../akses_t.php'); ?>
<?php
	include"../../lib/config.php";
	include"../../lib/koneksi.php";

	$mt = mysqli_query($con,"SELECT * FROM tbl_materi");
    $mtr = mysqli_fetch_array($mt);
    $idm = $mtr['id_materi'];
	$queryHapus = mysqli_query($con,"DELETE FROM tbl_materi WHERE id_materi='$idm'");

	if ($queryHapus) {
		//echo "<script> alert ('Data Materi berhasil Dihapus'); window.location='list_materi_t.php';</script> ";
	} else {
		echo "<script> alert ('Data Materi gagal dihapus'); window.location='list_materi_t.php';</script> ";
	}
?>