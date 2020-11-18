<?php
include "../lib/config.php";
include "../lib/koneksi.php";
$idKG=$_GET['id_kg'];
$queryEdit=mysqli_query($con,"SELECT * FROM tbl_ketentuan_gaji WHERE id_kg='$idKG'");

$hasilQuery=mysqli_fetch_array($queryEdit);
$idKG=$hasilQuery['id_kg'];
$Kategori=$hasilQuery['kategori_guru'];
$View=$hasilQuery['view'];
$Sub=$hasilQuery['sub'];
$Gaji=$hasilQuery['gaji'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | Ketentuan Penggajian</title>
</head>
<body>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Edit Data Ketentuan Penggajian
			</h1>
		</section>
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-body">
							<form class="form-horizontal" action="../admin/module/ketentuan/aksi_edit_kg.php" method="POST">
								<input type="hidden" name="id_kg" value="<?php echo $idKG; ?>">
								<div class="box-body">
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Kategori Guru</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="Kategori" name="Kategori" placeholder="Kategori" value="<?php echo $Kategori; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">View</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="View" name="View" placeholder="View" value="<?php echo $View; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Subscribe</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="Subscribe" name="Subscribe" placeholder="Subscribe" value="<?php echo $Sub; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Gaji</label>
										<div class="col-sm-10">
											<input type="number" class="form-control" id="Gaji" name="Gaji" placeholder="Gaji" value="<?php echo $Gaji; ?>">
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