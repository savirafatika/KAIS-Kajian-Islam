<?php
include "../lib/config.php";
include "../lib/koneksi.php";
$idKategori=$_GET['id_kategori'];
$queryEdit=mysqli_query($con,"SELECT * FROM tbl_kategori WHERE id_kategori='$idKategori'");

$hasilQuery=mysqli_fetch_array($queryEdit);
$idKategori=$hasilQuery['id_kategori'];
$KategoriMateri=$hasilQuery['kategori_materi'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | Kategori</title>
</head>
<body>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Edit Data Kategori
			</h1>
		</section>
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-body">
							<form class="form-horizontal" action="../admin/module/kategori/aksi_edit.php" method="POST">
								<input type="hidden" name="id_kategori" value="<?php echo $idKategori; ?>">
								<div class="box-body">
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Kategori Materi</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="KategoriMateri" name="kategori_materi" placeholder="Kategori Materi" value="<?php echo $KategoriMateri; ?>">
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