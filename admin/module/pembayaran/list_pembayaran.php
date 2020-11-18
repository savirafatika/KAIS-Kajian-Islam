<!-- Content Wrapper. Contains page content -->
<?php
include "../lib/config.php";
include "../lib/koneksi.php";
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Tables
      <small>List Pembayaran</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Tables</a></li>
      <li class="active">Data tables</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Table With Full Features</h3>
            <a href="<?php echo $admin_url; ?>adminweb.php?module=tambah_pembayaran"><button type="submit" class="btn btn-primary pull-right">Tambah Data</button></a>
          </div>

          <!-- /.box-header -->
          <div class="box-body">
            <form enctype="multipart/form-data">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID Bayar</th>
                    <th>ID Premium</th>
                    <th>Tanggal Bayar</th>
                    <th>Status Bayar</th>
                    <th>Bukti Pembayaran</th>
                    <th>Metode Pembayaran</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $KueriKategori = mysqli_query($con, "SELECT * FROM tbl_bayar");
                  while ($kat = mysqli_fetch_array($KueriKategori)) {
                  ?>
                    <tr>
                      <td><?php echo $kat['id_bayar']; ?></td>
                      <td><?php echo $kat['id_premium']; ?></td>
                      <td><?php echo $kat['tgl_bayar']; ?></td>
                      <td><?php echo $kat['status_bayar']; ?></td>
                      <td><img src="1.jpg" width="150" height="100"></td>
                      <td><?= $v = $kat['via']; ?></td>
                      <td>
                        <div class="btn">
                          <a href="<?php echo $admin_url; ?>adminweb.php?module=edit_pembayaran&id_bayar=<?php echo $kat['id_bayar']; ?>" class="btn btn-warning"><i class='fa fa-pencil'></i></button></a>
                          <a href="<?= $admin_url; ?>/module/pembayaran/aksi_hapus.php?id_bayar=
          						<?= $kat['id_bayar']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger"><i class='fa fa-trash'></i></button></a>
                        </div>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </form>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->