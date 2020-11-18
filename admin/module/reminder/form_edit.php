<?php
include "../lib/config.php";
include "../lib/koneksi.php";
$idRe=$_GET['id_reminder'];
$queryEdit=mysqli_query($con,"SELECT * FROM tbl_reminder WHERE id_reminder='$idRe'");

$hasilQuery=mysqli_fetch_array($queryEdit);
$idRe=$hasilQuery['id_reminder'];
$Waktu=$hasilQuery['waktu'];
$Acara=$hasilQuery['nama_event'];
$Des=$hasilQuery['deskripsi'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | Reminder</title>
</head>
<body>
	<div class="content-wrapper">
		<section class="content-header">
			<h1>
				Edit Data Reminder
			</h1>
		</section>
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-body">
							<form class="form-horizontal" action="../admin/module/reminder/aksi_edit.php" method="POST">
								<input type="hidden" name="id_reminder" value="<?php echo $idRe; ?>">
								<div class="box-body">
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Waktu</label>
										<div class="col-sm-10">
											<div class="input-group date">
							                  <div class="input-group-addon">
							                    <i class="fa fa-calendar"></i>
							                  </div>
							                  <input type="text" name="Waktu" id="form_dt" class="form-control pull-right" value="<?php echo $Waktu ?>"/>
							                </div>
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Acara</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="Acara" name="Acara" placeholder="Acara" value="<?php echo $Acara ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail3" class="col-sm-2 control-label">Deskripsi</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="Deskripsi" name="Deskripsi" placeholder="Deskripsi" value="<?php echo $Des ?>">
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