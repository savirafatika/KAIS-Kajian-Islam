<?php
include "../lib/config.php";
include "../lib/koneksi.php";
$idMember=$_GET['id_member'];
$queryEdit=mysqli_query($con,"SELECT * FROM tbl_member WHERE id_member='$idMember'");

$hasilQuery=mysqli_fetch_array($queryEdit);
$idMember=$hasilQuery['id_member'];
$Username=$hasilQuery['username'];
$Password=$hasilQuery['password'];
$Email=$hasilQuery['email'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | Member</title>
</head>
<body>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Edit Data Member
			</h1>
		</section>
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-body">
							<form class="form-horizontal" action="../admin/module/member/aksi_edit.php" method="POST">
								<input type="hidden" name="id_member" value="<?php echo $idMember; ?>">
								<div class="box-body">
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Username</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="Username" name="Username" placeholder="Username" value="<?php echo $Username; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Password</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="Password" name="Password" placeholder="Password" value="<?php echo $Password; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="Email" name="Email" placeholder="Email" value="<?php echo $Email; ?>">
										</div>
									</div>
								</div><!-- /.box-body-->
								<div class="box-footer">
									<button type="submit" class="btn btn-primary pull-right">Simpan</button>
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