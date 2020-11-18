<?php include('../akses_s.php'); ?>
<?php
include '../../lib/koneksi.php';
$user = $_SESSION['username'];
$sql = mysqli_query($con, "SELECT * FROM tbl_member Where username='$user'");
$usr = mysqli_fetch_array($sql);
$idM = $usr['id_member'];
$sql2 = mysqli_query($con, "SELECT d.no_nota, d.id_pembayaran, d.tgl_beli, d.tgl_jatuh_tempo, d.jml_tagihan, b.id_bayar, b.id_premium, b.tgl_bayar, b.status_bayar, b.bukti, b.via, p.id_berlangganan, p.id_member, p.tgl_daftar, br.periode, br.tagihan FROM tbl_detail_bayar d right join tbl_bayar b on d.id_pembayaran=b.id_bayar join tbl_premium p on b.id_premium=p.id_premium join tbl_berlangganan br on p.id_berlangganan=br.id_berlangganan Where id_member='$idM'");
$usr2 = mysqli_fetch_array($sql2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>World - Blog &amp; Magazine Template</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <!-- Logo -->
                        <a class="navbar-brand" href="index.html"><img src="S.png" alt="Logo" style="width: 70px; height: 70px; padding: 10px;"></a>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#"><?php echo $usr['username']; ?> <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../index_s.php">Video</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Artikel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="soal.php">Quiz</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Profil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="profil_pre.php">Reminder</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../logout.php">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-400 bg-img background-overlay" style="background-image: url(img/blog-img/bg4.jpg);">
    </div>
    <!-- ********** Hero Area End ********** -->

    <div class="regular-page-wrap section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-4">
                    <div class="page-content">
                        <h3>Edit Profil</h3>
                        <form class="form-horizontal" action="aksi_profil.php" method="POST">
                            <input type="hidden" name="id_member" value="<?php echo $usr['id_member']; ?>">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputEmail3" class="control-label">Password : </label>
                                    <div>
                                        <input type="password" class="form-control form-password" id="passwordfield" name="Password" placeholder="Password" value="<?php echo $usr['password']; ?>">
                                        <input type="checkbox" class="form-checkbox"> Show password
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="control-label">Email : </label>
                                    <div>
                                        <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" value="<?php echo $usr['email']; ?>">
                                    </div>
                                </div>
                            </div><!-- /.box-body-->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div><!-- /.box-footer-->
                        </form>
                    </div>
                </div>
                <div class="col-12 col-md-10 col-lg-4">
                    <div class="page-content">
                        <h3>Daftar Fitur Premium</h3>
                        <form class="form-horizontal" action="aksi_premium.php" method="POST">
                            <div class="box-body">
                                <input type="hidden" class="form-control" name="id_member" value="<?php echo $usr['id_member']; ?>">
                                <div class="form-group">
                                    <label for="inputEmail3" class="control-label">Berlangganan : </label>
                                    <div>
                                        <select class="form-control" name="id_berlangganan" onchange="changeValue(this.value)">
                                            <?php
                                            include "../../lib/koneksi.php";
                                            $kueriKategori = mysqli_query($con, "SELECT * FROM tbl_berlangganan");
                                            $jsArray = "var jml_tag = new Array();\n";
                                            while ($kat = mysqli_fetch_array($kueriKategori)) {
                                            ?>
                                                <option value="<?php echo $kat['id_berlangganan']; ?>">
                                                    <?php echo $kat['periode']; ?></option>
                                            <?php $jsArray .= "jml_tag['" . $kat['id_berlangganan'] . "'] = {tagihan:'" . addslashes($kat['tagihan']) . "'};\n";
                                            } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="control-label">Tagihan : </label>
                                    <div>
                                        <input type="text" class="form-control" name="tagihan" id="tagihan" disabled>
                                        <script type="text/javascript">
                                            <?= $jsArray; ?>

                                            function changeValue(id_berlangganan) {
                                                document.getElementById('tagihan').value = jml_tag[id_berlangganan].tagihan;
                                            };
                                        </script>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="control-label">Tanggal Daftar : </label>
                                    <div>
                                        <div class="input-group date">
                                            <?php $tgl = date('Y-m-d'); ?>
                                            <input type="text" class="form-control" value="<?php echo $tgl ?>" disabled>
                                            <input type="hidden" name="Tanggal" value="<?php echo $tgl ?>">
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.box-body-->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary pull right">Daftar</button>
                            </div><!-- /.box-footer-->
                        </form>
                    </div>
                </div>
                <div class="col-12 col-md-10 col-lg-4">
                    <div class="page-content">
                        <h3>Berlangganan dan Tagihan</h3>
                        <div class="box-body">
                            <div class="form-group">
                                <table>
                                    <tr>
                                        <td>Periode</td>
                                        <td> : &ensp;</td>
                                        <td><?= $usr2['periode']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Beli</td>
                                        <td> : &ensp;</td>
                                        <td><?= $usr2['tgl_daftar']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jatuh Tempo</td>
                                        <td> : &ensp;</td>
                                        <td><?= $usr2['tgl_jatuh_tempo']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tagihan</td>
                                        <td> : &ensp;</td>
                                        <td><?= $usr2['tagihan']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Status Bayar</td>
                                        <td> : &ensp;</td>
                                        <td><?= $usr2['status_bayar']; ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Konfirmasi Bayar</button>
                            <a href="cetak_bukti.php"><button type="submit" class="btn btn-primary"><i class="fa fa-print"></i></button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal KONFIRMASI PEMBAYARAN-->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Pembayaran</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form method="POST" enctype="multipart/form-data" action="konfirmasi.php">
                    <input type="hidden" name="id_premium" value="<?php echo $usr2['id_premium']; ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="control-label">Metode Pembayaran : </label>
                            <div>
                                <input type="radio" id="pp" name="via" value="pp"> <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_100x26.png" alt="Beli sekarang dengan PayPal" /></a><br><br>
                                <p>Bank Trasfer <br>
                                    <input type="radio" id="bni" name="via" value="bni">
                                    <img src="bni.png" width="80px" height="60px">&ensp;
                                    <input type="radio" id="bca" name="via" value="bca">
                                    <img src="bca.png" width="80px" height="60px">&ensp;
                                    <input type="radio" id="bri" name="via" value="bri">
                                    <img src="bri.png" width="80px" height="60px">&ensp;
                                    <input type="radio" id="mandiri" name="via" value="mandiri">
                                    <img src="mandiri.jpg" width="80px" height="60px">&ensp;
                                    <p>E-Money <br>
                                        <input type="radio" id="ovo" name="via" value="ovo">
                                        <img src="ovo.png" width="70px" height="50px">&ensp;
                                        <input type="radio" id="gopay" name="via" value="gopay">
                                        <img src="gopay.png" width="80px" height="60px">&ensp;
                                        <input type="radio" id="dana" name="via" value="dana">
                                        <img src="dana.png" width="80px" height="60px">&ensp;
                                    </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="control-label">Bukti Sah : </label>
                            <div>
                                <input type="file" class="form-control" name="gambar" id="gambar">
                                <p>Hanya gambar dengan format : .png .jpg .jpeg Max 1 MB</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Bayar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                        <div class="copywrite-text mt-30">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <ul class="footer-menu d-flex justify-content-between">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Gadgets</a></li>
                            <li><a href="#">Video</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <h5>Subscribe</h5>
                        <form action="#" method="post">
                            <input type="email" name="email" id="email" placeholder="Enter your mail">
                            <button type="button"><i class="fa fa-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.form-checkbox').click(function() {
                if ($(this).is(':checked')) {
                    $('.form-password').attr('type', 'text');
                } else {
                    $('.form-password').attr('type', 'password');
                }
            });
        });
    </script>
</body>

</html>