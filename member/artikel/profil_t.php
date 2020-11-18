<?php include('../akses_t.php'); ?>
<?php
include '../../lib/koneksi.php';
$user = $_SESSION['username'];
$sql = mysqli_query($con, "SELECT * FROM tbl_member Where username='$user'");
$usr = mysqli_fetch_array($sql);
$idM = $usr['id_member'];
$sql2 = mysqli_query($con, "SELECT * FROM tbl_penggajian Where id_member='$idM'");
$usr_gaji = mysqli_fetch_array($sql2);
$gaji = $usr_gaji['jml_gaji'];
$tgl_gaji = $usr_gaji['tgl_cair'];
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
                                    <a class="nav-link" href="../index_t.php">Video</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index_t.php">Artikel</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="profil_t.php">Profil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="list_materi_t.php">Materi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="quis.php">Quiz</a>
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
                <div class="col-12 col-md-10 col-lg-5">
                    <div class="page-content">
                        <h3>Subscriber dan Gaji</h3>
                        <div class="box-body">
                            <table>
                                <tr>
                                    <td>Views</td>
                                    <td> : &ensp;</td>
                                    <td><?= $usr['view']; ?></td>
                                </tr>
                                <tr>
                                    <td>Subscriber</td>
                                    <td> : &ensp;</td>
                                    <td><?= $usr['subscribe']; ?></td>
                                </tr>
                                <tr>
                                    <td>Jumlah Gaji</td>
                                    <td> : &ensp;</td>
                                    <td>Rp. <?= $gaji; ?>,-</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Cair</td>
                                    <td> : &ensp;</td>
                                    <td><?= $tgl_gaji; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-10 col-lg-5">
                    <div class="page-content">
                        <h3>Edit Profil</h3>
                        <form class="form-horizontal" action="aksi_profil_t.php" method="POST">
                            <input type="hidden" name="id_member" value="<?php echo $usr['id_member']; ?>">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-12">
                                        <input type="password" class="form-control form-password" id="passwordfield" name="Password" placeholder="Password" value="<?php echo $usr['password']; ?>">
                                        <input type="checkbox" class="form-checkbox"> Show password
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="Email" name="Email" placeholder="Email" value="<?php echo $usr['email']; ?>">
                                    </div>
                                </div>
                            </div><!-- /.box-body-->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div><!-- /.box-footer-->
                        </form>
                    </div>
                </div>
                <div class="col-12 col-md-10 col-lg-12">
                    <div class="page-content">
                        <h3>Upload Materi</h3>
                        <form class="form-horizontal" action="aksi_simpan_t.php" method="POST">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-12 control-label">ID Member</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="idMember" value="<?php echo $idM; ?>" readonly="readonly">
                                    </div>
                                </div>
                                <!-- Tanggal Upload -->
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-12 control-label">Tanggal Upload</label>
                                    <div class="col-sm-10">
                                        <div class="input-group date">
                                            <?php $tgl = date('Y-m-d'); ?>
                                            <input type="text" class="form-control pull-right" value="<?php echo $tgl ?>" disabled>
                                            <input type="hidden" name="Tanggal" value="<?php echo $tgl ?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- Kategori -->
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-12 control-label">Kategori</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="Kategori">
                                            <?php
                                            include "../../lib/koneksi.php";
                                            $kueriKategori = mysqli_query($con, "SELECT * FROM tbl_kategori");
                                            while ($kat = mysqli_fetch_array($kueriKategori)) {
                                            ?>
                                                <option value="<?php echo $kat['id_kategori']; ?>">
                                                    <?php echo $kat['kategori_materi']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- Jenis -->
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-12 control-label">Jenis</label>
                                    <div class="col-sm-10">
                                        <div class="radio">
                                            <label>
                                                <input type="radio" class="minimal" name="Jenis" id="jenis" value="artikel">Artikel
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" class="minimal" name="Jenis" id="jenis" value="video">Video
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Judul -->
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-12 control-label">Judul *</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="Acara" name="Judul" placeholder="Judul Materi" required />
                                    </div>
                                </div>
                                <!-- Deskripsi -->
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-12 control-label">Deskripsi *</label>
                                    <div class="col-sm-10">
                                        <textarea cols="50" rows="5" class="form-control" id="deskripsi" name="Deskripsi" placeholder="Deskripsi Materi" style="height: 70px" required /></textarea>
                                    </div>
                                </div>
                                <!-- Isi -->
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-12 control-label">Isi *</label>
                                    <div class="col-sm-10">
                                        <!-- /.box-header -->
                                        <div class="box-body pad">
                                            <textarea class="textarea" name="Isi" placeholder="tulis materi disini / link jika video" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required /></textarea>
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