<?php
session_start();
include "../lib/koneksi.php";
$username	= $_POST['username'];
$password	= $_POST['password'];
$level 		= $_POST['cmbLevel'];
$query=mysqli_query($con,"SELECT * from tbl_member where username = '$username'");
$num=mysqli_num_rows($query);
$row=mysqli_fetch_array($query);

	if ($num==0 OR $password!=$row['password'])
	{
		echo '<script language="javascript">alert("username belum terdaftar"); document.location="signup.php";</script>';
	} else {

		if($level == 'student'){
			$_SESSION['level']='student';
			$_SESSION['username']=$username;
			$_SESSION['password']=$password;
			echo '<script language="javascript">alert("Anda berhasil Login sebagai student!"); document.location="index_s.php";</script>';
		}else{
			$_SESSION['level']='teacher';
			$_SESSION['username']=$username;
			$_SESSION['password']=$password;
			echo '<script language="javascript">alert("Anda berhasil Login sebagai teacher!"); document.location="index_t.php";</script>';
		}
	}
?>