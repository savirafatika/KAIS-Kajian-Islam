<!DOCTYPE html>
<html>

<head>
	<title>Admin | Pembayaran</title>
</head>

<body>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Tambah Data Detail Pembayaran
			</h1>
		</section>
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-body">
							<form class="form-horizontal" action="../admin/module/detail_pembayaran/aksi_simpan.php"
								method="POST">
								<div class="box-body">
									<div id="dp">
										<?php 
										include"../lib/koneksi.php";
										$kueriKategori=mysqli_query($con,"SELECT d.no_nota, b.id_bayar, b.id_premium, p.id_berlangganan, p.tgl_daftar, br.periode, br.tagihan FROM tbl_detail_bayar d right join tbl_bayar b on d.id_pembayaran=b.id_bayar join tbl_premium p on b.id_premium=p.id_premium join tbl_berlangganan br on p.id_berlangganan=br.id_berlangganan WHERE d.no_nota is null");
										$jsArray = "var dtbyr = new Array();\n";	
									?>
										<div class="form-group">
											<label for="inputEmail3" class="col-sm-2 control-label">ID Bayar </label>
											<div class="col-sm-10">
												<select class="form-control" id="id_bayar" name="idBayar"
													onchange="changeValue(this.value)">
													<option> - Pilih - </option>
													<?php
												while ($kat=mysqli_fetch_array($kueriKategori)) { ?>
													<option value="<?php echo $kat['id_bayar']; ?>">
														<?php echo $kat['id_bayar']; ?></option>
													<?php 
												$Tgl=$kat['tgl_daftar'];
												$Berlangganan=$kat['id_berlangganan'];
												if ($Berlangganan==1) {
												  $tgl=date('Y-m-d', strtotime('+1 month', strtotime($Tgl)));
												  } elseif ($Berlangganan==2) {
												  	$tgl=date('Y-m-d', strtotime('+3 month', strtotime($Tgl)));
												  } elseif ($Berlangganan==3) {
												  	$tgl=date('Y-m-d', strtotime('+6 month', strtotime($Tgl)));
												  } else {
												  	$tgl=date('Y-m-d', strtotime('+1 year', strtotime($Tgl)));
												  }
												$jsArray .= "dtbyr['" . $kat['id_bayar'] . "'] = {lgn:'" . addslashes($kat['periode']) . "',tbeli:'" . addslashes($kat['tgl_daftar']) . "' ,tjatem:'".addslashes($tgl)."',tgh:'".addslashes($kat['tagihan'])."'};\n"; 
												} ?>
												</select>
											</div>
										</div>
										<!-- Belangganan -->
										<div class="form-group">
											<label for="inputEmail3" class="col-sm-2 control-label">Berlangganan</label>
											<div class="col-sm-10">
												<div class="input-group date">
													<div class="input-group-addon">
														<i class="fa fa-calendar"></i>
													</div>
													<?php
							                  $hasilQuery=mysqli_fetch_array($kueriKategori);
							                  ?>
													<input type="text" id="Berlangganan" class="form-control pull-right"
														value="<?php echo $hasilQuery['periode']; ?>"
														readonly="readonly" />
												</div>
											</div>
										</div>
										<!-- Tanggal beli -->
										<div class="form-group">
											<label for="inputEmail3" class="col-sm-2 control-label">Tanggal Beli
											</label>
											<div class="col-sm-10">
												<div class="input-group date">
													<div class="input-group-addon">
														<i class="fa fa-calendar"></i>
													</div>
													<?php
							                  $hasilQuery=mysqli_fetch_array($kueriKategori);
							                  ?>
													<input type="text" id="tgl_daftar" name="TanggalB"
														class="form-control pull-right"
														value="<?php echo $hasilQuery['tgl_daftar']; ?>"
														readonly="readonly" />
												</div>
											</div>
										</div>
										<!-- Tanggal Jatem -->
										<div class="form-group">
											<label for="inputEmail3" class="col-sm-2 control-label">Jatuh Tempo </label>
											<div class="col-sm-10">
												<div class="input-group date">
													<div class="input-group-addon">
														<i class="fa fa-calendar"></i>
													</div>
													<?php
							                  $hasilQuery=mysqli_fetch_array($kueriKategori);
							                  ?>
													<input type="text" id="TanggalJ" name="TanggalJ"
														class="form-control pull-right" readonly="readonly">
												</div>
											</div>
										</div>
										<!-- Jumlah Tagihan -->
										<div class="form-group">
											<label for="inputEmail3" class="col-sm-2 control-label"> Jumlah
												Tagihan</label>
											<div class="col-sm-10">
												<?php 
											$hasilQuery=mysqli_fetch_array($kueriKategori);
											?>
												<input type="text" id="tagihan" name="Jml" class="form-control"
													value="<?php echo $hasilQuery['tagihan']; ?>" readonly="readonly">
											</div>
										</div>
										<script type="text/javascript">
											< ? php echo $jsArray; ? >
											function
											changeValue(id_bayar) {
												document.getElementById('Berlangganan').value =
													dtbyr[id_bayar].lgn;
												document.getElementById('tgl_daftar').value =
													dtbyr[id_bayar].tbeli;
												document.getElementById('TanggalJ').value =
													dtbyr[id_bayar].tjatem;
												document.getElementById('tagihan').value =
													dtbyr[id_bayar].tgh;
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