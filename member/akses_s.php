<?php
session_start();
if(isset($_SESSION['level'])!='student'){
	echo '<script language="javascript">alert("Anda harus Login sebagai student!"); document.location="index.php";</script>';
}
?>