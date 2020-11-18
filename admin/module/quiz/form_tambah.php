<!DOCTYPE html>
<html>
<head>
	<title>Admin | Materi</title>
</head>
<body>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Tambah Data QUIZ
			</h1>
		</section>
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-body">
						<form class="form-horizontal" action="../admin/module/quiz/aksi_simpan.php" method="POST">
								<div class="box-body">
									<!-- Soal-->
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Soal</label>
										<div class="col-sm-10">
											<textarea name="Soal" rows="4" class="form-control" name="Soal" placeholder="Apakah ... ? Bagaimana ... ? Mengapa ... ?" required/></textarea>
										</div>
									</div>
									<!-- Kategori -->
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Opsi A</label>
										<div class="col-sm-10">
											<label for="inputEmail3" class="col-sm-12 control-label"></label>
	                                        <input type="text" class="form-control" id="a" name="A" placeholder="opsi A" required/>
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Opsi B</label>
										<div class="col-sm-10">
											<label for="inputEmail3" class="col-sm-12 control-label"></label>
	                                        <input type="text" class="form-control" id="b" name="B" placeholder="opsi B" required/>
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Opsi C</label>
										<div class="col-sm-10">
											<label for="inputEmail3" class="col-sm-12 control-label"></label>
	                                        <input type="text" class="form-control" id="c" name="C" placeholder="opsi C" required/>
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Opsi D</label>
										<div class="col-sm-10">
											<label for="inputEmail3" class="col-sm-12 control-label"></label>
	                                        <input type="text" class="form-control" id="d" name="D" placeholder="opsi D" required/>
										</div>
									</div>
									<!-- Jenis -->
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
									</div>
									<!-- Judul -->
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