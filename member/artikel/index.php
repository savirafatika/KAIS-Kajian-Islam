<?php include('../akses_s.php'); ?>
<?php
  include '../../lib/koneksi.php';
  $user = $_SESSION['username'];
  $sql = mysqli_query($con, "SELECT * FROM tbl_member Where username='$user'");
  $usr = mysqli_fetch_array($sql);
  
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
    <title>KAIS - Kajian Islam</title>

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
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><?php echo $usr['username']; ?> <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../index_s.php">Video</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Artikel</a>
                                </li>
                                <li class="nav-item">
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
    <div class="hero-area">

        <!-- Hero Slides Area -->
        <div class="hero-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img background-overlay" style="background-image: url(img/blog-img/aa.jpeg);"></div>
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img background-overlay" style="background-image: url(img/blog-img/aa.jpeg);"></div>
        </div>

        <!-- Hero Post Slide -->
        <div class="hero-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-post-slide">
                            <!-- Single Slide -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>1</p>
                                </div>
                                <div class="post-title">
                                    <a href="single-blog.html">Belajarlah dahulu FIKH HAJI, semoga dimudahkan segera</a>
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>2</p>
                                </div>
                                <div class="post-title">
                                    <a href="single-blog.html">Selektiflah dalam menuntut ilmu agama</a>
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>3</p>
                                </div>
                                <div class="post-title">
                                    <a href="single-blog.html">Lebih utama memulai chat dengan basmalah atau salam ?</a>
                                </div>
                            </div>
                            <!-- Single Slide -->
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>4</p>
                                </div>
                                <div class="post-title">
                                    <a href="single-blog.html">Mengungkit pemberian kepada orang lain termasuk Penyakit dan maksiat lisan (lidah)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">

            <div class="world-latest-articles">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="title">
                            <h5>Latest Articles</h5>
                        </div>
                        <?php
                            $q=mysqli_query($con, "SELECT * FROM tbl_materi Where jenis='artikel' ORDER BY id_materi DESC LIMIT 4");
                                while ( $r=mysqli_fetch_array($q)) {     
                        ?>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/z.jpeg" alt="Gmabar Materi">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5><?php echo $r['judul_materi']; ?></h5>
                                </a>
                                <p><?php echo $r['deskripsi']; ?></p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author"></a> on <a href="#" class="post-date"><?php echo $r['tgl_upload']; ?></a></p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="title">
                            <h5>Most Popular Videos</h5>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.4s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/quran.jpg" alt="">
                                <!-- Catagory -->
                                <div class="post-cta"><a href="https://www.youtube.com/embed/2gJ2aSuDXeM">Kajian</a></div>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>Sabar serta Yakin</h5>
                                </a>
                                <p>Ustadz Hanan Attaki Terbaru 2018 Sabar Serta Yakin (KEEP THE FAITH. PART I)</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author"></a> on <a href="#" class="post-date">2019-07-20</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.4s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/doa.jpg" alt="">
                                <!-- Catagory -->
                                <div class="post-cta"><a href="https://www.youtube.com/embed/AynEDnPbnsQ">Kajian</a></div>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>Jangan Galau dan Berputus Asa - Ust. Hanan Attaki, Lc</h5>
                                </a>
                                <p>Sesungguhnya rahmat-Ku mengalahkan kemurkaan-Ku</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author"></a> on <a href="#" class="post-date">2019-07-20</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Load More btn -->
            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn mt-50 text-center">
                        <a href="#" class="btn world-btn">Load More</a>
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