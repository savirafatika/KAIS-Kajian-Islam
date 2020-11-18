
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
        <small>List Gaji Guru</small>
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
              <h4 align="center">Laporan Gaji Guru</h4>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID Gaji</th>
                  <th>ID Member</th>
                  <th>ID Golongan</th>
                  <th>Tanggal Pencairan</th>
                  <th>Jumlah Gaji</th>
                </tr>
                </thead>
                <tbody>
                	<?php
        						$KueriKategori=mysqli_query($con,"select * from tbl_penggajian");
        						while ($kat=mysqli_fetch_array($KueriKategori)) {
        					?>
                <tr>
                  <td><?php echo $kat['id_gaji']; ?></td>
                  <td><?php echo $kat['id_member']; ?></td>
                  <td><?php echo $kat['id_kg']; ?></td>
                  <td><?php echo $kat['tgl_cair']; ?></td>
                  <td><?php echo $kat['jml_gaji']; ?></td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
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
              <script>
                window.print();
              </script>