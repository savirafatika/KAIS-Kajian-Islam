<!DOCTYPE html>
<html>
<head>
	<title>Admin | Materi</title>
</head>
<body>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Tambah Data Materi
			</h1>
		</section>
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-body">
						<form class="form-horizontal" action="../admin/module/materi/aksi_simpan.php" method="POST">
								<div class="box-body">
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">ID Member</label>
										<div class="col-sm-10">
											<select class="form-control" name="idMember">
												<?php 
												include"../lib/koneksi.php";
												$kueriKategori=mysqli_query($con,"SELECT * FROM tbl_member WHERE level='teacher'");
												while ($kat=mysqli_fetch_array($kueriKategori)) {
												?>
												<option value="<?php echo $kat['id_member']; ?>"><?php echo $kat['id_member']; ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
									<!-- Tanggal Upload -->
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Tanggal Upload</label>
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
									<!-- Kategori -->
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
													<input type="radio" class="minimal" name="Jenis" id="jenis" value="artikel">Artikel
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
										<label for="inputEmail3" class="col-sm-2 control-label">Judul</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="Acara" name="Judul" placeholder="Judul Materi" required/>
										</div>
									</div>
									<!-- Deskripsi -->
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Deskripsi</label>
										<div class="col-sm-10">
											<textarea cols="50" rows="5" class="form-control"  id="deskripsi" name="Deskripsi" placeholder="Deskripsi Materi" style="height: 70px" required/></textarea>					
										</div>
									</div>
									<!-- Isi -->
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Isi</label>
										<div class="col-sm-10">
								            <!-- /.box-header -->
								            <div class="box-body pad">
								                <textarea class="textarea" name="Isi" placeholder="tulis materi disini" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required/></textarea>
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