<?php
include "../lib/config.php";
include "../lib/koneksi.php";
$idBayar=$_GET['id_bayar'];
$queryEdit=mysqli_query($con,"SELECT * FROM tbl_bayar WHERE id_bayar='$idBayar'");

$hasilQuery=mysqli_fetch_array($queryEdit);
$idBayar=$hasilQuery['id_bayar'];
$Status=$hasilQuery['status_bayar'];
$IdP=$hasilQuery['id_premium'];
$Tgl=$hasilQuery['tgl_bayar'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | Pembayaran</title>
</head>
<body>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Edit Data Pembayaran
			</h1>
		</section>
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-body">
							<form class="form-horizontal" action="../admin/module/pembayaran/aksi_edit.php" method="POST">
								<input type="hidden" name="id_bayar" value="<?php echo $idBayar; ?>">
								<div class="box-body">
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label"> ID Premium </label>
										<div class="col-sm-10">
											<input type="text" class="form-control" value="<?php echo $IdP ?>" readonly="readonly">
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Status Bayar</label>
										<div class="col-sm-10">
											<div class="radio">
												<label>
													<input type="radio" class="minimal" name="Status" id="Status" value="blm" checked/>Awaiting Payment
												</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" class="minimal" name="Status" id="Status" value="sdh">Confirmed
												</label>
											</div>
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