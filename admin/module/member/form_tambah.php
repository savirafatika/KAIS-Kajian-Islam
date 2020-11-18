<!DOCTYPE html>
<html>
<head>
	<title>Admin | Member</title>
</head>
<body>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Tambah Data Member
			</h1>
		</section>
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-body">
						<form class="form-horizontal" action="../admin/module/member/aksi_simpan.php" method="POST">
								<div class="box-body">
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Username</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="Username" name="Username" placeholder="Username" required/>
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Password</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="Password" name="Password" placeholder="Password" required/>
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="Email" name="Email" placeholder="Email" required/>
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Level</label>
										<div class="col-sm-10">
											<select class="form-control" name="Level">
												<option value="student">student</option>
												<option value="teacher">teacher</option>
											</select>
										</div>
									</div>
								</div><!-- /.box-body-->
								<div class="box-footer">
									<button type="submit" class="btn btn-primary pull right">Simpan</button>
								</div><!-- /.box-footer-->
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</body>
</html>