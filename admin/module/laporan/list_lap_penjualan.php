
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
        <small>List Pendapatan</small>
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
              <h4 align="center">Laporan Pendapatan</h4>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No Nota</th>
                  <th>Tanggal Bayar</th>
                  <th>Tagihan</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    include "../lib/koneksi.php";
                    $total = 0;
                    $KueriKategori=mysqli_query($con,"SELECT b.id_bayar, b.tgl_bayar, d.no_nota, d.id_pembayaran, d.jml_tagihan from tbl_bayar b join tbl_detail_bayar d on b.id_bayar=d.id_pembayaran");
                    while ($kat=mysqli_fetch_array($KueriKategori)) {
                  ?>
                <tr>
                  <td><?php echo $kat['no_nota']; ?></td>
                  <td><?php echo $kat['tgl_bayar']; ?></td>
                  <td>Rp. <?php echo $kat['jml_tagihan']; ?></td>
                </tr>
                <?php
                  $total += $kat['jml_tagihan'];
                  } 
                ?>
                </tbody>
                <tr>
                  <td></td>
                  <td align="right">Total Pendapatan : </td>
                  <td><?php echo "Rp. ".$total; ?></td>
                </tr>
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