<?php
include "../lib/config.php";
include "../lib/koneksi.php";
$idSoal=$_GET['id_soal'];
$queryEdit=mysqli_query($con,"SELECT * FROM tbl_soal WHERE id_soal='$idSoal'");

$hasilQuery=mysqli_fetch_array($queryEdit);
$idSoal=$hasilQuery['id_soal'];
$Soal=$hasilQuery['soal'];
$A=$hasilQuery['a'];
$B=$hasilQuery['b'];
$C=$hasilQuery['c'];
$D=$hasilQuery['d'];
$Kunci=$hasilQuery['kunci'];
$Aktif=$hasilQuery['aktif'];
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
				Edit Data Quiz
			</h1>
		</section>
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-body">
							<form class="form-horizontal" action="../admin/module/quiz/aksi_edit.php" method="POST">
								<input type="hidden" name="id_soal" value="<?php echo $idSoal; ?>">
								<div class="box-body">
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Soal</label>
										<div class="col-sm-10">
											<textarea class="form-control" name="Soal" rows="4"><?php echo $Soal; ?></textarea>
										</div>
									</div>
									<!-- Jenis -->
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Opsi A</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="A" value="<?php echo $A; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Opsi B</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="B" value="<?php echo $B; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Opsi C</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="C" value="<?php echo $C; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Opsi D</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" name="D" value="<?php echo $D; ?>">
										</div>
									</div>
									<!-- Judul -->
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Kunci Jawaban</label>
										<div class="col-sm-10">
											<label>
                                                <input type="radio" class="minimal" name="Kunci" id="kunci" value="a">A     
                                              </label>
                                              <label>
                                                <input type="radio" class="minimal" name="Kunci" id="kunci" value="b">B     
                                              </label>
                                              <label>
                                                <input type="radio" class="minimal" name="Kunci" id="kunci" value="c">C     
                                              </label>
                                              <label>
                                                <input type="radio" class="minimal" name="Kunci" id="kunci" value="d">D     
                                              </label>
										</div>
									</div>
									<!-- Deskripsi -->
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Aktifkan Soal</label>
										<div class="col-sm-10">
											<div class="radio">
                                              <label>
                                                <input type="radio" class="minimal" name="Aktif" id="Aktif" value="Y">Y
                                              </label>
                                              <label>
                                                <input type="radio" class="minimal" name="Aktif" id="Aktif" value="N">N
                                              </label>
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