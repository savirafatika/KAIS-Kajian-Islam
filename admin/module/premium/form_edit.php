<?php
include "../lib/config.php";
include "../lib/koneksi.php";
$idPremium=$_GET['id_premium'];
$queryEdit=mysqli_query($con,"SELECT * FROM tbl_premium WHERE id_premium='$idPremium'");

$hasilQuery=mysqli_fetch_array($queryEdit);
$idPremium=$hasilQuery['id_premium'];
$idBerlangganan=$hasilQuery['id_berlangganan'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | Premium</title>
</head>
<body>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Edit Data Premium
			</h1>
		</section>
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-body">
							<form class="form-horizontal" action="../admin/module/premium/aksi_edit.php" method="POST">
								<input type="hidden" name="id_premium" value="<?php echo $idPremium; ?>">
								<div class="box-body">
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Berlangganan</label>
										<div class="col-sm-10">
											<select class="form-control" name="idBerlangganan">
												<?php 
												include"../lib/koneksi.php";
												$kueriKategori=mysqli_query($con,"SELECT * FROM tbl_berlangganan");
												while ($kat=mysqli_fetch_array($kueriKategori)) {
												?>
												<option value="<?php echo $kat['id_berlangganan']; ?>"><?php echo $kat['periode']; ?></option>
												<?php } ?>
											</select>
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