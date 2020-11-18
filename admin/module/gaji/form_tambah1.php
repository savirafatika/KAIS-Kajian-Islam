<!DOCTYPE html>
<html>

<head>
	<title>Admin | Penggajian</title>
</head>

<body>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Tambah Data Penggajian
			</h1>
		</section>
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-body">
							<form id="formgol" class="form-horizontal" action="../admin/module/gaji/aksi_simpan.php" method="POST">
								<div class="box-body">
									<div id="gj">
										<?php
										include "../lib/koneksi.php";
										$kg = mysqli_query($con, "SELECT * FROM tbl_ketentuan_gaji");
										$kueriKategori = mysqli_query($con, "SELECT m.id_member, m.level, m.view, m.subscribe, p.id_gaji, k.id_kg, k.kategori_guru, k.gaji FROM tbl_member m left join tbl_penggajian p on m.id_member=p.id_member left join tbl_ketentuan_gaji k on p.id_kg=k.id_kg WHERE m.level='teacher' AND m.view>=1000 AND m.subscribe>=500 AND p.id_gaji is null");
										$jsArray = "var dtgaji = new Array();\n";
										?>
										<div class="form-group">
											<label for="inputEmail3" class="col-sm-2 control-label">ID Member</label>
											<div class="col-sm-10">
												<select class="form-control" name="id_member" id="id_member" onchange="changeValue(this.value)">
													<option> - Pilih - </option>
													<?php
													$dthasil = mysqli_fetch_array($kg);
													while ($kat = mysqli_fetch_array($kueriKategori)) { ?>
														<option value="<?php echo $kat['id_member']; ?>">
															<?php echo $kat['id_member']; ?></option>
													<?php
														$jsArray .= "dtgaji['" . $kat['id_member'] . "'] = {gol:'" . addslashes($dthasil['id_kg']) . "',jml:'" . addslashes($dthasil['gaji']) . "' };\n";
													} ?>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label for="inputEmail3" class="col-sm-2 control-label"> ID Golongan</label>
											<div class="col-sm-10">
												<?php
												$hsl = mysqli_fetch_array($kueriKategori);
												?>
												<input type="text" class="form-control" name="kategori_guru" id="id_kg" value="<?php echo $hsl['id_kg'] ?>" readonly="readonly" />
											</div>
										</div>
										<div class="form-group">
											<label for="inputEmail3" class="col-sm-2 control-label">Jumlah Gaji</label>
											<div class="col-sm-10">
												<?php
												$hsl = mysqli_fetch_array($kueriKategori);
												?>
												<input type="text" class="form-control" name="gaji" id="gaji" value="<?php echo $hsl['gaji'] ?>" readonly="readonly" />
											</div>
										</div>
										<div class="form-group">
											<label for="inputEmail3" class="col-sm-2 control-label">Tanggal Cair</label>
											<div class="col-sm-10">
												<div class="input-group date">
													<div class="input-group-addon">
														<i class="fa fa-calendar"></i>
													</div>
													<?php
													$tgl1 = date('Y-m-01');
													$tgl = date('Y-m-d', strtotime('+1 month', strtotime($tgl1)));
													?>
													<input type="text" class="form-control pull-right" value="<?php echo $tgl ?>" disabled>
													<input type="hidden" name="Tanggal" value="<?php echo $tgl ?>">
												</div>
											</div>
										</div>
										<script type="text/javascript">
											<?php echo $jsArray; ?>

											function
											changeValue(id_member) {
												document.getElementById('id_kg').value =
													dtgaji[id_member].gol;
												document.getElementById('gaji').value =
													dtgaji[id_member].jml;
											};
										</script>
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