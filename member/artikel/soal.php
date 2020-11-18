<?php include('../akses_s.php'); ?>
<?php
  include '../../lib/koneksi.php';
  $user = $_SESSION['username'];
  $sql = mysqli_query($con, "SELECT * FROM tbl_member Where username='$user'");
  $usr = mysqli_fetch_array($sql);
  $idM=$usr['id_member'];
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
                        <a class="navbar-brand" href="index.html"><img src="s.png" alt="Logo" style="width: 70px; height: 70px; padding: 10px;"></a>
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
                                    <a class="nav-link" href="index_s.php">Artikel</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="soal.php">Quiz</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="profil.php">Profil</a>
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
    <div class="hero-area height-400 bg-img background-overlay" style="background-image: url(img/blog-img/bg4.jpg);"></div>
    <!-- ********** Hero Area End ********** -->

    <div class="regular-page-wrap section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-10">
                    <div class="page-content">
                        <h3>Latihan Soal</h3>
                        <table border="0.5">
                            <tbody>
                                <?php
                                    include '../../lib/koneksi.php';
                                    include '../../lib/config.php';
                                    $sql = "SELECT * FROM tbl_soal WHERE aktif='Y' ORDER BY RAND ()";
                                    $query = mysqli_query($con,$sql) or die (mysqli_error($con));
                                    $jumlah = mysqli_num_rows($query);
                                    $no = 0;
                                    while($data = mysqli_fetch_array($query)){
                                ?>
                                <form action="kunci.php" method="post">
                                    <input type="hidden" name="id[]" value="<?php echo $data['id_soal']; ?>">
                                    <input type="hidden" name="jumlah" value="<?php echo $jumlah; ?>">
                                    <tr><td colspan="2"> </td></tr>
                                    <tr>
                                        <td><?php echo $no = $no+1;?></td>
                                        <td>. </td>
                                        <td><?php echo $data['soal'];?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><input name="pilihan[<?php echo $data['id_soal']?>]" type="radio" value="a">A. <?php echo $data['a'];?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><input name="pilihan[<?php echo $data['id_soal']?>]" type="radio" value="b">B. <?php echo $data['b'];?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><input name="pilihan[<?php echo $data['id_soal']?>]" type="radio" value="c">C. <?php echo $data['c'];?></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><input name="pilihan[<?php echo $data['id_soal']?>]" type="radio" value="d">D. <?php echo $data['d'];?></td>
                                    </tr>
                                <?php } ?>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <input type="submit" name="submit" value="Jawab" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')" class="btn btn-primary pull right">
                                    </td>
                                </tr>
                                </form>
                            </tbody>
                        </table>
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
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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

</body>

</html>