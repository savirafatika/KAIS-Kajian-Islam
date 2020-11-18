<?php include('akses_t.php'); ?>
<?php
  include '../lib/koneksi.php';
  $user = $_SESSION['username'];
  $sql = mysqli_query($con, "SELECT * FROM tbl_member Where username='$user'");
  $usr = mysqli_fetch_array($sql);
  
?>
<!DOCTYPE HTML>
<!--
	Full Motion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Member Area | KAIS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />

		<link rel="stylesheet" href="../asset/css/style.css">
		<link rel="stylesheet" href="../asset/css/flaticon.css">
	</head>
	<body id="top">

			<!-- Banner -->
			<!--
				To use a video as your background, set data-video to the name of your video without
				its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
				formats to work correctly.
			-->
			<!-- NAV -->
			<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			    <div class="container">
			      <a class="navbar-brand" href="index.html"><img src="../s.png" style="width: 60px; height: 60px;"></a>
			      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			        <span class="oi oi-menu"></span> Menu
			      </button>

			      <div class="collapse navbar-collapse" id="ftco-nav">
			        <ul class="navbar-nav ml-auto">
			            <li class="nav-item"><a href="#" class="nav-link"><span class="flaticon-employee"></span><?php echo $usr['username']; ?></a></li>
			            <li class="nav-item active"><a href="index_t.php" class="nav-link">Video</a></li>
			            <li class="nav-item"><a href="artikel/index_t.php" class="nav-link">Artikel</a></li>
			            <li class="nav-item"><a href="artikel/profil_t.php" class="nav-link">Profil</a></li>
			            <li class="nav-item"><a href="artikel/profil_t.php" class="nav-link">Materi</a></li>
			            <li class="nav-item"><a href="artikel/quis.php" class="nav-link">Quiz</a></li>
			            <li class="nav-item"><a href="list_materi_t.php" class="nav-link">Logout</a></li>
			        </ul>
			      </div>
			    </div>
			</nav>

			<section id="banner" data-video="images/banner">
					<div class="inner">
						<header>
							<h1>Waching It</h1>
							<p>Always Enjoy With Our Vidio<br />
							 <a href="https://templated.co/"></a></p>
						</header>
						<a href="#main" class="more">Learn More</a>
					</div>
				</section>

			<!-- Main -->
				<div id="main">
					<div class="inner">

					<!-- Boxes -->
						<div class="thumbnails">

							<div class="box" style="height: auto;">
								<a href="https://www.youtu.be/ugHnQuWzHzM" class="image fit"><img src="images/kid.jpg" alt="" /></a>
								<div class="inner">
									<h3></h3>
									<p>Hukum Islam</p>
									<a href="https://www.youtu.be/ugHnQuWzHzM" class="button fit" data-poptrox="youtube,800x400">Watch</a>
								</div>
							</div>

							<div class="box">
								<a href="https://www.youtu.be/09e0wnyYsTs" class="image fit"><img src="images/quran.jpg" alt="" /></a>
								<div class="inner">
									<h3></h3>
									<p>Ilmu Tajwid</p>
									<a href="https://www.youtu.be/09e0wnyYsTs" class="button style2 fit" data-poptrox="youtube,800x400">Watch</a>
								</div>
							</div>

							<div class="box">
								<a href="https://www.youtu.be/iMO23cj75z8" class="image fit"><img src="images/doa.jpg" alt="" /></a>
								<div class="inner">
									<h3></h3>
									<p>Ilmu Fiqh</p>
									<a href="https://www.youtu.be/iMO23cj75z8" class="button style3 fit" data-poptrox="youtube,800x400">Watch</a>
								</div>
							</div>

							<div class="box">
								<a href="" class="image fit"><img src="images/cew.jpg" alt="https://www.youtu.be/45ggBzgYDr8" /></a>
								<div class="inner">
									<h3></h3>
									<p>Ilmu Fiqh Wanita</p>
									<a href="https://www.youtu.be/45ggBzgYDr8" class="button style2 fit" data-poptrox="youtube,800x400">Watch</a>
								</div>
							</div>

							<div class="box">
								<a href="https://www.youtu.be/sJhjzChIJhk" class="image fit"><img src="images/suci.jpg" alt="" /></a>
								<div class="inner">
									<h3></h3>
									<p>Ilmu Bersuci</p>
									<a href="https://www.youtu.be/sJhjzChIJhk" class="button style3 fit" data-poptrox="youtube,800x400">Watch</a>
								</div>
							</div>

							<div class="box">
								<a href="https://www.youtu.be/x_o1A-2w6Hc" class="image fit"><img src="images/akh.jpg" alt="" /></a>
								<div class="inner">
									<h3></h3>
									<p>Ilmu Ahklak</p>
									<a href="https://www.youtu.be/x_o1A-2w6Hc" class="button fit" data-poptrox="youtube,800x400">Watch</a>
								</div>
							</div>

						</div>

					</div>
				</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>