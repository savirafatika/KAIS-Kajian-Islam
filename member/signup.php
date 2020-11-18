<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" type="image/png" href="">
	<title>KAIS | Login</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="../admin/asset/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="../admin/asset/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="../admin/asset/adminlte/bower_components/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="../admin/asset/adminlte/dist/css/AdminLTE.min.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="../admin/asset/adminlte/plugins/iCheck/square/blue.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page" style="background: #2C2F3A;">
	<div class="login-box" style="margin-top: 10%;">
		<!-- <div class="login-logo"></div> -->
		<!-- /.login-logo -->
		<div class="login-box-body" style="background: #16181D; color:#EAC15A; box-shadow: 2px 2px 5px;">
			<center>
				<a style="color: #EAC15A;" href="../index.html">
					<img src="s.png" alt="Logo KAIS" width="100px" height="100px"></a><br>
				<h1 style="color: #EAC15A;"><i class="fas fa-h1"><b>Kajian Islam</b></i></h1>
			</center>
			<p class="login-box-msg">Register to continue</p>

			<form action="proses_signup.php" method="post">
				<div class="form-group has-feedback">
					<input style="background: #2C2F3A; color: white;" type="text" class="form-control"
						placeholder="Username" name="username" id="username" required />
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input style="background: #2C2F3A; color: white;" type="password" class="form-control"
						placeholder="Password" name="password" id="password" required />
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input style="background: #2C2F3A; color: white;" type="email" class="form-control"
						placeholder="E-mail" name="email" id="email" required />
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<select style="background: #2C2F3A; color: white;" class="form-control" name="cmbLevel">
						<option value="BLANK" class="label-input100">Akses</option>
						<?php
				              $pilihan= array("student", "teacher");
				                foreach ($pilihan as $nilai) {
				                if ($_POST['cmbLevel']==$nilai) {
				                $cek="selected";
				                } else {
				                $cek ="";
				                } 
				              echo "<option value='$nilai' $cek>$nilai</option>";
				              }
				              ?>
					</select>
				</div>
				<div class="row">
					<div class="col-xs-8">
						<div class="checkbox icheck">
							<label>
								<input type="checkbox"> Remember Me
							</label>
						</div>
					</div>
					<!-- /.col -->
					<div class="col-xs-4">
						<button type="submit" class="btn btn-block btn-flat btn-login"
							style="background: #EAC15B; color : black" id="tombol-login">Sign
							Up</button>
					</div>
					<!-- /.col -->
					<div class="social-auth-links text-center">
						<a style="color: #EAC15A;" href="index.php" class="btn btn-flat">I Have account</a> |
						<a style="color: #EAC15A;" href="../index.html" class="btn btn-flat">HOME</a>
					</div>
				</div>
			</form>

		</div>
		<!-- /.login-box-body -->
	</div>
	<!-- jQuery 3 -->
	<script src="../admin/asset/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="../admin/asset/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- iCheck -->
	<script src="../admin/asset/adminlte/plugins/iCheck/icheck.min.js"></script>
	<script>
		$(function () {
			$('input').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
				increaseArea: '20%' /* optional */
			});
		});
	</script>
</body>

</html>