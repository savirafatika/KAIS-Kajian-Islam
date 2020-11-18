<!DOCTYPE html>
<html>
<head>
	<title>Admin | Premium</title>
</head>
<body>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Tambah Data Reminder
			</h1>
		</section>
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-body">
						<form class="form-horizontal" action="../admin/module/reminder/aksi_simpan.php" method="POST">
								<div class="box-body">
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">ID Premium </label>
										<div class="col-sm-10">
											<select class="form-control" name="idPremium">
												<?php 
												include"../lib/koneksi.php";
												$kueriKategori=mysqli_query($con,"SELECT * FROM tbl_premium");
												while ($kat=mysqli_fetch_array($kueriKategori)) {
												?>
												<option value="<?php echo $kat['id_premium']; ?>"><?php echo $kat['id_premium']; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
									<!-- DateTime Picker -->
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Tanggal & Waktu Event </label>
										<div class="col-sm-10">
											<div class="input-group date">
							                  <div class="input-group-addon">
							                    <i class="fa fa-calendar"></i>
							                  </div>
							                  <input type="text" name="Waktu" id="form_dt" class="form-control pull-right" />
							                </div>
										</div>
									</div>
						            <!-- Nama Event -->
						            <div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Nama Event</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="Acara" name="Acara" placeholder="Nama Event" required/>
										</div>
									</div>
									<!-- Deskripsi -->
						            <div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Deskripsi</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="Deskripsi" name="Deskripsi" placeholder="Deskripsi" required/>
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