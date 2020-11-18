<!DOCTYPE html>
<html>
<head>
	<title>Admin | Premium</title>
</head>
<body>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Tambah Data Premium
			</h1>
		</section>
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-body">
						<form class="form-horizontal" action="../admin/module/premium/aksi_simpan.php" method="POST">
								<div class="box-body">
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">ID Member</label>
										<div class="col-sm-10">
											<select class="form-control" name="idMember">
												<?php 
												include"../lib/koneksi.php";
												$kueriKategori=mysqli_query($con,"SELECT m.id_member, p.id_premium FROM tbl_member m left join tbl_premium p on m.id_member=p.id_member WHERE m.level='student' AND p.id_premium is null");
												while ($kat=mysqli_fetch_array($kueriKategori)) {
												?>
												<option value="<?php echo $kat['id_member']; ?>"><?php echo $kat['id_member']; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
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
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Tanggal Daftar</label>
										<div class="col-sm-10">
											<div class="input-group date">
							                  <div class="input-group-addon">
							                    <i class="fa fa-calendar"></i>
							                  </div>
							                  <?php $tgl=date('Y-m-d'); ?>
							                  <input type="text" class="form-control pull-right" value="<?php echo $tgl ?>" disabled>
							                  <input type="hidden" name="Tanggal" value="<?php echo $tgl ?>">
							                </div>
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