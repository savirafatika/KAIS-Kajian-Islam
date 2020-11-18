<?php
session_start();
 
if(isset($_SESSION['level'])!='teacher'){
	echo '<script language="javascript">alert("Anda harus Login sebagai teacher!"); document.location="index.php";</script>';
}
?>