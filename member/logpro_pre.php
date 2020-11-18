<?php
session_start();
include "../lib/koneksi.php";
$username	= $_POST['username'];
$password	= $_POST['password'];
$level 		= $_POST['cmbLevel'];
$query=mysqli_query($con,"SELECT * from tbl_member join tbl_premium where username = '$username' AND password = '$password'");
$num=mysqli_num_rows($query);
$row=mysqli_fetch_array($query);
$idp=$row['id_premium'];
	if ($num==0 OR $password!=$row['password'])
	{
		echo '<script language="javascript">alert("username belum terdaftar sebagai student premium, silahkan login dan daftar premium"); document.location="index.php";</script>';
	} else {

		if (!empty($idp)) {
			if($level == 'student'){
				$_SESSION['level']='student';
				$_SESSION['username']=$username;
				$_SESSION['password']=$password;
				echo '<script language="javascript">alert("Anda berhasil Login sebagai student premium!"); document.location="index_pre.php";</script>';
			}else{
				$_SESSION['level']='teacher';
				$_SESSION['username']=$username;
				$_SESSION['password']=$password;
				echo '<script language="javascript">alert("anda bukan student premium"); document.location="index.php";</script>';
			}
		} else {
			echo '<script language="javascript">alert("Maaf anda tidak terdaftar sebagai student premium"); document.location="index.php";</script>';
		}

	}
?>