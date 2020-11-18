
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
        <small>List Ketentuan Berlangganan</small>
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
              <a href="<?php echo $admin_url; ?>adminweb.php?module=tambah_kb"><button type="submit" class="btn btn-primary pull-right">Tambah Data</button></a>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID Berlangganan</th>
                  <th>Periode Berlangganan</th>
                  <th>Tagihan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                	<?php
        						$KueriKategori=mysqli_query($con,"select * from tbl_berlangganan");
        						while ($kat=mysqli_fetch_array($KueriKategori)) {
        					?>
                <tr>
                  <td><?php echo $kat['id_berlangganan']; ?></td>
                  <td><?php echo $kat['periode']; ?></td>
                  <td><?php echo $kat['tagihan']; ?></td>
                  <td>
                  	<div class="btn">
          						<a href="<?php echo $admin_url; ?>adminweb.php?module=edit_kb&id_berlangganan=<?php echo $kat['id_berlangganan']; ?>" class="btn btn-warning"><i class='fa fa-pencil'></i></button></a>
          						<a href="<?= $admin_url;?>/module/ketentuan/aksi_hapus_kb.php?id_berlangganan=
          						<?= $kat['id_berlangganan']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger"><i class='fa fa-trash'></i></button></a>
          					</div>
                  </td>
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