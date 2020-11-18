<!DOCTYPE html>
<html>
<head>
	<title>Admin | Pembayaran</title>
</head>
<body>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Tambah Data Pembayaran
			</h1>
		</section>
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-body">
						<form class="form-horizontal" action="../admin/module/pembayaran/aksi_simpan.php" method="POST">
								<div class="box-body">
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">ID Premium </label>
										<div class="col-sm-10">
											<select class="form-control" name="idPremium">
												<?php 
												include"../lib/koneksi.php";
												$kueriKategori=mysqli_query($con,"SELECT b.id_bayar, p.id_premium FROM tbl_premium p left join tbl_bayar b on p.id_premium=b.id_premium WHERE b.id_bayar is null");
												while ($kat=mysqli_fetch_array($kueriKategori)) {
												?>
												<option value="<?php echo $kat['id_premium']; ?>"><?php echo $kat['id_premium']; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
									<!-- Date Picker -->
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Tanggal Bayar </label>
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
						            <!-- Status Bayar -->
						            <div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Status bayar</label>
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