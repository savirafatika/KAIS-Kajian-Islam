<!DOCTYPE html>
<html>
<head>
	<title>Admin | Ketentuan Berlangganan</title>
</head>
<body>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Tambah Data Ketentuan Berlangganan
			</h1>
		</section>
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-body">
						<form class="form-horizontal" action="../admin/module/ketentuan/aksi_simpan_kb.php" method="POST">
								<div class="box-body">
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Periode Berlangganan</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="Periode" name="Periode" placeholder="Periode" required/>
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Tagihan</label>
										<div class="col-sm-10">
											<input type="number" class="form-control" id="Tagihan" name="Tagihan" placeholder="Tagihan" required/>
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