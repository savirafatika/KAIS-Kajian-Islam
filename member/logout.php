<?php
	session_start();
	unset($_SESSION['username']);
	session_destroy();
	echo '<script language="javascript">alert("Anda telah berhasil LOGOUT..."); document.location="../index.html";</script>';
?>