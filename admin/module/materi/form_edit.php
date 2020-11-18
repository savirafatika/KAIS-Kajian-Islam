<?php
include "../lib/config.php";
include "../lib/koneksi.php";
$idMateri=$_GET['id_materi'];
$queryEdit=mysqli_query($con,"SELECT * FROM tbl_materi WHERE id_materi='$idMateri'");

$hasilQuery=mysqli_fetch_array($queryEdit);
$idMateri=$hasilQuery['id_materi'];
$Kat=$hasilQuery['kategori'];
$Jen=$hasilQuery['jenis'];
$Jud=$hasilQuery['judul_materi'];
$Des=$hasilQuery['deskripsi'];
$Isi=$hasilQuery['isi'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | Materi</title>
</head>
<body>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Edit Data Materi
			</h1>
		</section>
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-body">
							<form class="form-horizontal" action="../admin/module/materi/aksi_edit.php" method="POST">
								<input type="hidden" name="id_materi" value="<?php echo $idMateri; ?>">
								<div class="box-body">
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Kategori</label>
										<div class="col-sm-10">
											<select class="form-control" name="Kategori">
												<?php 
												include"../lib/koneksi.php";
												$kueriKategori=mysqli_query($con,"SELECT * FROM tbl_kategori");
												while ($kat=mysqli_fetch_array($kueriKategori)) {
												?>
												<option value="<?php echo $kat['id_kategori']; ?>"><?php echo $kat['kategori_materi']; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
									<!-- Jenis -->
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Jenis</label>
										<div class="col-sm-10">
											<div class="radio">
												<label>
													<input type="radio" class="minimal" name="Jenis" id="jenis" value="artikel" checked/>Artikel
												</label>
											</div>
											<div class="radio">
												<label>
													<input type="radio" class="minimal" name="Jenis" id="jenis" value="video">Video
												</label>
											</div>
										</div>
									</div>
									<!-- Judul -->
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Judul Materi</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="Judul" name="Judul" placeholder="Judul Materi" value="<?php echo $Jud; ?>">
										</div>
									</div>
									<!-- Deskripsi -->
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Deskripsi</label>
										<div class="col-sm-10">
											<textarea cols="50" rows="5" class="form-control" id="deskripsi" name="Deskripsi"  style="height: 70px" required/><?php echo $Des ?></textarea>					
										</div>
									</div>
									<!-- Isi -->
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Isi</label>
										<div class="col-sm-10">
								            <!-- /.box-header -->
								            <div class="box-body pad">
								                <textarea class="textarea" name="Isi" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required/><?php echo $Isi ?></textarea>
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