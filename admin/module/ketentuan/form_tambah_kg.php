<!DOCTYPE html>
<html>
<head>
	<title>Admin | Ketentuan Penggajian</title>
</head>
<body>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Tambah Data Ketentuan Penggajian
			</h1>
		</section>
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-body">
						<form class="form-horizontal" action="../admin/module/ketentuan/aksi_simpan_kg.php" method="POST">
								<div class="box-body">
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Kategori Guru</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="Kategori" name="Kategori" placeholder="Kategori" required/>
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">View</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="View" name="View" placeholder="View" required/>
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Subscribe</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="Subscribe" name="Subscribe" placeholder="Subscribe" required/>
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Gaji</label>
										<div class="col-sm-10">
											<input type="number" class="form-control" id="Gaji" name="Gaji" placeholder="Gaji" required/>
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