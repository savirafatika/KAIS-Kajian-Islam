<?php
	include "../lib/koneksi.php";

	$username=$_POST['username'];
	$password=$_POST['password'];
	$email = $_POST['email'];
	$level = $_POST['cmbLevel'];

	$cekuser=mysqli_query($con,"SELECT * FROM tbl_member WHERE username = '$username'");

	if(mysqli_num_rows($cekuser) != 0) {
		echo '<script language="javascript">alert("Username sudah Terdaftar"); document.location="signup.php";</script>';
	} else {
			if(!$username || !$password) {
				echo '<script language="javascript">alert("Masih ada data kosong!"); document.location="signup.php";</script>';
			} else {
				$simpan = mysqli_query($con,"INSERT INTO tbl_member(username, password, email,level) VALUES('$username','$password', '$email', '$level')");

				if($simpan) {
					echo '<script language="javascript">alert("Pendaftaran Sukses, Silahkan Login"); document.location="form_login.php";</script>';
				} else {
					echo '<script language="javascript">alert("Proses Gagal");</script>';
				}
			}
	}

?> 