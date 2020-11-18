
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
        <small>List Member</small>
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
              <a href="<?php echo $admin_url; ?>adminweb.php?module=tambah_member"><button type="submit" class="btn btn-primary pull-right">Tambah Data</button></a>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID Member</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Email</th>
                  <th>Level</th>
                  <th>Viewers</th>
                  <th>Subscriber</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                	<?php
        						$KueriMember=mysqli_query($con,"select * from tbl_member");
        						while ($kat=mysqli_fetch_array($KueriMember)) {
        					?>
                <tr>
                  <td><?php echo $kat['id_member']; ?></td>
                  <td><?php echo $kat['username']; ?></td>
                  <td><?php echo $kat['password']; ?></td>
                  <td><?php echo $kat['email']; ?></td>
                  <td><?php echo $kat['level']; ?></td>
                  <td><?php echo $kat['view']; ?></td>
                  <td><?php echo $kat['subscribe']; ?></td>
                  <td>
                  	<div class="btn">
          						<a href="<?php echo $admin_url; ?>adminweb.php?module=edit_member&id_member=<?php echo $kat['id_member']; ?>" class="btn btn-warning"><i class='fa fa-pencil'></i></button></a>
          						<a href="<?= $admin_url;?>/module/member/aksi_hapus.php?id_member=
          						<?= $kat['id_member']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger"><i class='fa fa-trash'></i></button></a>
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