-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2020 at 07:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kais`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `email`, `nama_lengkap`, `no_telp`, `alamat`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'admin 1', '0896236297678', 'jalan di Bumi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aspirasi`
--

CREATE TABLE `tbl_aspirasi` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjek` varchar(200) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_aspirasi`
--

INSERT INTO `tbl_aspirasi` (`nama`, `email`, `subjek`, `pesan`) VALUES
('secret', 'secret@mail.com', 'saran', 'masukkan video tutorial juga dong'),
('', '', '', 'makasih min ilmunya bermanfaat'),
('coba', 'coba@gmail.com', 'y', 'yesss');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bayar`
--

CREATE TABLE `tbl_bayar` (
  `id_bayar` int(10) NOT NULL,
  `id_premium` int(10) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `status_bayar` varchar(20) NOT NULL,
  `bukti` varchar(200) NOT NULL,
  `via` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bayar`
--

INSERT INTO `tbl_bayar` (`id_bayar`, `id_premium`, `tgl_bayar`, `status_bayar`, `bukti`, `via`) VALUES
(2, 3, '2019-07-21', 'Confirmed', '1.jpg', 'bca'),
(3, 2, '2019-07-21', 'Awaiting Payment', '2.jpg', 'ovo'),
(4, 5, '2020-07-21', 'Confirmed', '3.jpg', 'bni');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berlangganan`
--

CREATE TABLE `tbl_berlangganan` (
  `id_berlangganan` int(10) NOT NULL,
  `periode` varchar(15) NOT NULL,
  `tagihan` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berlangganan`
--

INSERT INTO `tbl_berlangganan` (`id_berlangganan`, `periode`, `tagihan`) VALUES
(1, 'sebulan', 150000),
(2, '3bulan', 400000),
(3, '6bulan', 750000),
(4, 'setahun', 1400000),
(5, 'Trial-7hari', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_bayar`
--

CREATE TABLE `tbl_detail_bayar` (
  `no_nota` int(10) NOT NULL,
  `id_pembayaran` int(10) NOT NULL,
  `tgl_beli` date NOT NULL,
  `tgl_jatuh_tempo` date NOT NULL,
  `jml_tagihan` int(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail_bayar`
--

INSERT INTO `tbl_detail_bayar` (`no_nota`, `id_pembayaran`, `tgl_beli`, `tgl_jatuh_tempo`, `jml_tagihan`) VALUES
(3, 4, '2020-07-21', '2020-10-21', 400000),
(2, 3, '2019-06-29', '2019-09-29', 400000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(10) NOT NULL,
  `kategori_materi` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `kategori_materi`) VALUES
(1, 'Ilmu Tajwid'),
(2, 'Ilmu Fiqh'),
(5, 'Kumpulan Hadist'),
(6, 'Kata - kata Mutiara');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ketentuan_gaji`
--

CREATE TABLE `tbl_ketentuan_gaji` (
  `id_kg` int(10) NOT NULL,
  `kategori_guru` varchar(50) NOT NULL,
  `view` int(25) NOT NULL,
  `sub` int(25) NOT NULL,
  `gaji` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ketentuan_gaji`
--

INSERT INTO `tbl_ketentuan_gaji` (`id_kg`, `kategori_guru`, `view`, `sub`, `gaji`) VALUES
(1, 'golongan1', 1000, 500, 500000),
(2, 'golongan2', 1000, 1000, 1000000),
(3, 'golongan3', 5000, 500, 2500000),
(4, 'golongan4', 5000, 5000, 5000000),
(5, 'golongan5', 5000, 1100, 5500000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_materi`
--

CREATE TABLE `tbl_materi` (
  `id_materi` int(10) NOT NULL,
  `id_member` int(10) NOT NULL,
  `tgl_upload` date NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `judul_materi` varchar(30) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `like` int(15) NOT NULL,
  `unlike` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_materi`
--

INSERT INTO `tbl_materi` (`id_materi`, `id_member`, `tgl_upload`, `kategori`, `jenis`, `judul_materi`, `deskripsi`, `isi`, `like`, `unlike`) VALUES
(1, 2, '2019-06-13', '1', 'artikel', 'Bacaan Nun Sukun dan Tanwin', 'Izhar halqi adalah jelas atau terang dalam membaca', '<p>Hukum bacaan ini yaitu apabila ada tanwin bertemu dengan huruf halqi(<strong>Ø§ , Ø­ , Ø® , Ø¹ , Øº ,Ù‡Ø§ </strong>Cara membacanya yaitu dengan jelas dan tidak mendengung maupun samar-samar.<br></p>', 100, 10),
(2, 2, '2019-07-01', '1', 'artikel', 'Bacaan Nun Sukun dan Tanwin', 'Idhgam Bigunnah dan Idhgam Bilagunnah', '<p></p><p><strong>Idgham Bigunnah</strong></p><p>Idgham\r\n adalah &nbsp;memasukkan/meleburkan huruf nun mati atau tanwin (Ù€Ù‹Ù€ÙÙ€ÙŒ / Ù†Ù’) \r\nke dalam suatu huruf sesudahnya dengan disertai dengung, jika kalian \r\nbertemu dengan salah satu huruf yang empat, yaitu: Ù† Ù… Ùˆ ÙŠ</p><p><strong>Idgham Bilagunnah</strong></p><p>Adalah\r\n &nbsp;memasukkan/meleburkan huruf nun mati atau tanwin (Ù€Ù‹Ù€ÙÙ€ÙŒ / Ù†Ù’) ke \r\ndalam suatu &nbsp;huruf sesudahnya tanpa atau tidak disertai dengung, jika \r\nbertemu dengan huruf lam atau ra (Ø±ØŒ Ù„)</p><br><p></p>', 0, 0),
(3, 2, '2019-07-01', '1', 'artikel', 'Hukum Bacaan Nun Sukun/ Tanwin', 'Hukum Bacaan Iqlab', '<p>Iqlab adalah menukar atau mengganti \r\nbunyi. Ketika ada nun sukun atau tanwin(Ù€Ù‹Ù€ÙÙ€ÙŒ / Ù†Ù’) bertemu dengan \r\nhuruf ba (Ø¨), maka dibaca dengan cara menyuarakan /merubah bunyi Ù†Ù’ \r\nmenjadi suara mim (Ù…Ù’), merapatkan dua bibir serta mendengung.<br></p>', 0, 0),
(4, 2, '2019-07-01', '1', 'artikel', 'Hukum Bacaan Nun Sukun/ Tanwin', 'Hukum Bacaan Ikhfa', '<p>Ikhfa adalah menyamarkan atau tidak \r\njelas bisa juga dengung. ketika ada nun sukun atau tanwin (Ù€Ù‹Ù€ÙÙ€ÙŒ /Ù†Ù’) \r\nbertemu dengan salah satu huruf ikhfa yang ada &nbsp;15 huruf seperti (Øª Ø« Ø¬ Ø¯\r\n Ø° Ø³ Ø´ Øµ Ø¶ Ø· Ø¸ Ù Ù‚ Ùƒ ), maka dibacanya dengung samar-samar, antara jelas\r\n dan tidak (antara izhar dan idgham) dengan mendengung<br></p>', 0, 0),
(9, 5, '2019-07-02', '2', 'artikel', 'Fiqh Islam', 'Pengertian Fiqh Islam', '<p>\r\n\r\n</p><h4><strong>Pengertian Fiqh</strong></h4><p>Fiqih menurut bahasa berarti â€˜pahamâ€™, seperti dalam firman Allah:</p><p><em>â€œMaka mengapa orang-orang itu (orang munafik) hampir-hampir tidak memahami pembicaraan sedikitpun?â€</em>&nbsp;(QS. An Nisa: 78)</p><p>dan sabda Rasulullah <em>shallallahu â€˜alaihi wa sallam</em>:</p><p><em>â€œSesungguhnya panjangnya shalat dan pendeknya khutbah seseorang, merupakan tanda akan kepahamannya.â€</em>&nbsp;(Muslim no. 1437, Ahmad no. 17598, Daarimi no. 1511)</p><p>Fiqih Secara Istilah Mengandung Dua Arti:</p><ol><li>Pengetahuan tentang hukum-hukum syariâ€™at yang berkaitan dengan perbuatan dan perkataan <em>mukallaf</em>&nbsp;(mereka yang sudah terbebani menjalankan syariâ€™at agama), yang diambil dari dalil-dalilnya yang bersifat terperinci, berupa nash-nash al Qurâ€™an dan As sunnah serta yang bercabang darinya yang berupa ijmaâ€™ dan ijtihad.</li><li>Hukum-hukum syariâ€™at itu sendiri. Jadi perbedaan antara kedua definisi tersebut bahwa yang pertama di gunakan untuk mengetahui hukum-hukum (Seperti seseorang ingin mengetahui apakah suatu perbuatan itu wajib atau sunnah, haram atau makruh, ataukah mubah, ditinjau dari dalil-dalil yang ada), sedangkan yang kedua adalah untuk hukum-hukum syariâ€™at itu sendiri (yaitu hukum apa saja yang terkandung dalam shalat, zakat, puasa, haji, dan lainnya berupa syarat-syarat, rukun-rukun, kewajiban-kewajiban, atau sunnah-sunnahnya).</li></ol><h4><strong>Hubungan Antara Fiqh dan Aqidah Islam</strong></h4><p>Diantara keistimewaan fiqih Islam -yang kita katakan sebagai hukum-hukum syariâ€™at yang mengatur perbuatan dan perkataan <em>mukallaf</em>â€“ memiliki keterikatan yang kuat dengan keimanan terhadap Allah dan rukun-rukun aqidah Islam yang lain. Terutama Aqidah yang berkaitan dengan iman dengan hari akhir. Yang demikian Itu dikarenakan keimanan kepada Allah-lah yang dapat menjadikan seorang muslim berpegang teguh dengan hukum-hukum agama, dan terkendali untuk menerapkannya sebagai bentuk ketaatan dan kerelaan. Sedangkan orang yang tidak beriman kepada Allah tidak merasa terikat dengan shalat maupun puasa dan tidak memperhatikan apakah perbuatannya termasuk yang halal atau haram. Maka berpegang teguh dengan hukum-hukum syariâ€™at tidak lain merupakan bagian dari keimanan terhadap Dzat yang menurunkan dan mensyariâ€™atkannya terhadap para hambaNya.</p><p>Contohnya:</p><p>Allah memerintahkan bersuci dan menjadikannya sebagai salah satu keharusan dalam keiman kepada Allah sebagaimana firman-Nya:</p><p><em>â€œHai orang-orang yang beriman, apabila kamu hendak mengerjakan shalat, maka basuhlah mukamu dan tanganmu sampai dengan siku, dan sapulah kepalamu dan (basuh) kakimu sampai dengan kedua mata kaki.â€</em>&nbsp;(QS. Al Maidah: 6)</p><p>Juga seperti shalat dan zakat yang Allah kaitkan dengan keimanan terhadap hari akhir, sebagaimana firman-Nya:</p><p><em>â€œ(yaitu) orang-orang yang mendirikan sembahyang dan menunaikan zakat dan mereka yakin akan adanya negeri akhirat.â€</em>&nbsp;(QS. An naml: 3)</p><p>Demikian pula taqwa, pergaulan baik, menjauhi kemungkaran dan contoh lainnya, yang tidak memungkinkan untuk disebutkan satu persatu. (lihat <em>Fiqhul Manhaj</em>&nbsp;hal. 9-12)</p><h4><strong>Fiqh Islam Mencakup Seluruh Perbuatan Manusia</strong></h4><p>Tidak ragu lagi bahwa kehidupan manusia meliputi segala aspek. Dan kebahagiaan yang ingin dicapai oleh manusia mengharuskannya untuk memperhatikan semua aspek tersebut dengan cara yang terprogram dan teratur. Manakala fiqih Islam adalah ungkapan tentang hukum-hukum yang Allah syariâ€™atkan kepada para hamba-Nya, demi mengayomi seluruh kemaslahatan mereka dan mencegah timbulnya kerusakan ditengah-tengah mereka, maka fiqih Islam datang memperhatikan aspek tersebut dan mengatur seluruh kebutuhan manusia beserta hukum-hukumnya.</p><p>Penjelasannya sebagai berikut:</p><p>Kalau kita memperhatikan kitab-kitab fiqih yang mengandung hukum-hukum syariâ€™at yang bersumber dari Kitab Allah, Sunnah Rasulnya, serta Ijmaâ€™ (kesepakatan) dan Ijtihad para ulama kaum muslimin, niscaya kita dapati kitab-kitab tersebut terbagi menjadi tujuh bagian, yang kesemuanya membentuk satu undang-undang umum bagi kehidupan manusia baik bersifat pribadi maupun bermasyarakat. Yang perinciannya sebagai berikut:</p><ol><li>Hukum-hukum yang berkaitan dengan ibadah kepada Allah. Seperti wudhu, shalat, puasa, haji dan yang lainnya. Dan ini disebut dengan Fiqih Ibadah.</li><li>Hukum-hukum yang berkaitan dengan masalah kekeluargaan. Seperti pernikahan, talaq, nasab, persusuan, nafkah, warisan dan yang lainya. Dan ini disebut dengan Fikih <em>Al Ahwal As sakhsiyah</em>.</li><li>Hukum-hukum yang berkaitan dengan perbuatan manusia dan hubungan diantara mereka, seperti jual beli, jaminan, sewa menyewa, pengadilan dan yang lainnya. Dan ini disebut Fiqih Muâ€™amalah.</li><li>Hukum-hukum yang berkaitan dengan kewajiban-kewajiban pemimpin (kepala negara). Seperti menegakan keadilan, memberantas kedzaliman dan menerapkan hukum-hukum syariâ€™at, serta yang berkaitan dengan kewajiban-kewajiban rakyat yang dipimpin. Seperti kewajiban taat dalam hal yang bukan maâ€™siat, dan yang lainnya. Dan ini disebut dengan Fiqih <em>Siasah Syarâ€™iah</em>.</li><li>Hukum-hukum yang berkaitan dengan hukuman terhadap pelaku-pelaku kejahatan, serta penjagaan keamanan dan ketertiban. Seperti hukuman terhadap pembunuh, pencuri, pemabuk, dan yang lainnya. Dan ini disebut sebagai Fiqih <em>Al â€˜Ukubat</em>.</li><li>Hukum-hukum yang mengatur hubungan negeri Islam dengan negeri lainnya. Yang berkaitan dengan pembahasan tentang perang atau damai dan yang lainnya. Dan ini dinamakan dengan Fiqih <em>As Siyar</em>.</li><li>Hukum-hukum yang berkaitan dengan akhlak dan prilaku, yang baik maupun yang buruk. Dan ini disebut dengan adab dan akhlak.</li></ol><p>Demikianlah kita dapati bahwa fiqih Islam dengan hukum-hukumnya meliputi semua kebutuhan manusia dan memperhatikan seluruh aspek kehidupan pribadi dan masyarakat.</p>Sumber : Majalah Fatawa<p></p>', 0, 0),
(10, 5, '2019-07-02', '2', 'artikel', 'Fiqh Islam', 'Sumber - Sumber Fiqh Islam', '<p>\r\n\r\n</p><h4><strong>Sumber-Sumber Fiqh Islam</strong></h4><p>Semua hukum yang terdapat dalam fiqih Islam kembali kepada empat sumber:</p><p>1. Al-Qurâ€™an</p><p>Al Qurâ€™an adalah kalamullah yang diturunkan kepada Nabi kita Muhammad untuk menyelamatkan manusia dari kegelapan menuju cahaya yang terang benderang. Ia adalah sumber pertama bagi hukum-hukum fiqih Islam. Jika kita menjumpai suatu permasalahan, maka pertamakali kita harus kembali kepada Kitab Allah guna mencari hukumnya.</p><p>Sebagai contoh:</p><p>Bila kita ditanya tentang hukum khamer (miras), judi, pengagungan terhadap bebatuan dan mengundi nasib, maka jika kita merujuk kepada Al Qurâ€™an niscaya kita akan mendapatkannya dalam firman Allah subhanahu wa Taâ€™ala: (QS. Al maidah: 90)</p><p>Bila kita ditanya tentang masalah jual beli dan riba, maka kita dapatkan hukum hal tersebut dalam Kitab Allah (QS. Al baqarah: 275). Dan masih banyak contoh-contoh yang lain yang tidak memungkinkan untuk di perinci satu persatu.</p><p>2. As-Sunnah</p><p>As-Sunnah yaitu semua yang bersumber dari Nabi berupa perkataan, perbuatan atau persetujuan.</p><p>Contoh perkataan/sabda Nabi:</p><p><em>â€œMencela sesama muslim adalah kefasikan dan membunuhnya adalah kekufuran.â€</em>&nbsp;(Bukhari no. 46, 48, muslim no. 64, 97, Tirmidzi no. 1906,2558, Nasaâ€™i no. 4036, 4037, Ibnu Majah no. 68, Ahmad no. 3465, 3708)</p><p>Contoh perbuatan:</p><p>Apa yang diriwayatkan oleh Bukhari (Bukhari no. 635, juga diriwayatkan oleh Tirmidzi no. 3413, dan Ahmad no. 23093, 23800, 34528) bahwa â€˜Aisyah pernah ditanya: <em>â€œApa yang biasa dilakukan Rasulullah di rumahnya?â€</em>&nbsp;Aisyah menjawab: <em>â€œBeliau membantu keluarganya; kemudian bila datang waktu shalat, beliau keluar untuk menunaikannya.â€</em></p><p>Contoh persetujuan:</p><p>Apa yang diriwayatkan oleh Abu Dawud (Hadits no. 1267) bahwa Nabi pernah melihat seseorang shalat dua rakaat setelah sholat subuh, maka Nabi berkata kepadanya: <em>â€œShalat subuh itu dua rakaatâ€, </em>orang tersebut menjawab, <em>â€œsesungguhnya saya belum shalat sunat dua rakaat sebelum subuh, maka saya kerjakan sekarang.â€</em>&nbsp;Lalu Nabi <em>shollallahuâ€™alaihiwasallam</em>&nbsp;terdiam. Maka diamnya beliau berarti menyetujui disyariâ€™atkannya shalat Sunat Qabliah subuh tersebut setelah shalat subuh bagi yang belum menunaikannya.</p><p>As-Sunnah adalah sumber kedua setelah al Qurâ€™an. Bila kita tidak mendapatkan hukum dari suatu permasalahn dalam Al Qurâ€™an maka kita merujuk kepada as-Sunnah dan wajib mengamalkannya jika kita mendapatkan hukum tersebut. Dengan syarat, benar-benar bersumber dari Nabi shollallahuâ€™alaihiwasallam dengan sanad yang sahih.</p><p>As Sunnah berfungsi sebagai penjelas al Qurâ€™an dari apa yang bersifat global dan umum. Seperti perintah shalat; maka bagaimana tatacaranya didapati dalam as Sunnah. Oleh karena itu Nabi bersabda:</p><p><em>â€œShalatlah kalian sebagaimana kalian melihat aku shalat.â€</em>&nbsp;(Bukhari no. 595)</p><p>Sebagaimana pula as-Sunnah menetapkan sebagian hukum-hukum yang tidak dijelaskan dalam Al Qurâ€™an. Seperti pengharaman memakai cincin emas dan kain sutra bagi laki-laki.</p><p>3. Ijmaâ€™</p><p>Ijmaâ€™ bermakna: Kesepakatan seluruh ulama mujtahid dari umat Muhammad <em>shollallahuâ€™alaihiwasallam</em>&nbsp;dari suatu generasi atas suatu hukum syarâ€™i, dan jika sudah bersepakat ulama-ulama tersebutâ€”baik pada generasi sahabat atau sesudahnyaâ€”akan suatu hukum syariâ€™at maka kesepakatan mereka adalah ijmaâ€™, dan beramal dengan apa yang telah menjadi suatu ijmaâ€™ hukumnya wajib. Dan dalil akan hal tersebut sebagaimana yang dikabarkan Nabi <em>shollallahuâ€™alaihiwasallam</em>, bahwa tidaklah umat ini akan berkumpul (bersepakat) dalam kesesatan, dan apa yang telah menjadi kesepakatan adalah hak (benar).</p><p>Dari Abu Bashrah <em>rodiallahuâ€™anhu</em>, bahwa Nabi <em>shollallahuâ€™alaihiwasallam</em>&nbsp;bersabda:</p><p><em>â€œSesungguhnya Allah tidaklah menjadikan ummatku atau ummat Muhammad berkumpul (besepakat) di atas kesesatan.â€</em>&nbsp;(Tirmidzi no. 2093, Ahmad 6/396)</p><p>Contohnya:</p><p>Ijma para sahabat ra bahwa kakek mendapatkan bagian 1/6 dari harta warisan bersama anak laki-laki apabila tidak terdapat bapak.</p><p>Ijmaâ€™ merupakan sumber rujukan ketiga. Jika kita tidak mendapatkan didalam Al Qurâ€™an dan demikian pula sunnah, maka untuk hal yang seperti ini kita melihat, apakah hal tersebut telah disepakatai oleh para ulama muslimin, apabila sudah, maka wajib bagi kita mengambilnya dan beramal dengannya.</p><p>4. Qiyas</p><p>Yaitu: Mencocokan perkara yang tidak didapatkan di dalamnya hukum syarâ€™i dengan perkara lain yang memiliki nash yang sehukum dengannya, dikarenakan persamaan sebab/alasan antara keduanya. Pada qiyas inilah kita merujuâ€™ apabila kita tidak mendapatkan nash dalam suatu hukum dari suatu permasalahan, baik di dalam Al Qurâ€™an, sunnah maupun ijmaâ€™.</p><p>Ia merupakan sumber rujukan keempat setelah Al Qurâ€™an, as Sunnah dan Ijmaâ€™.</p><p>Rukun Qiyas</p><p>Qiyas memiliki empat rukun:</p><ol><li>Dasar (dalil).</li><li>Masalah yang akan diqiyaskan.</li><li>Hukum yang terdapat pada dalil.</li><li>Kesamaan sebab/alasan antara dalil dan masalah yang diqiyaskan.</li></ol><p>Contoh:</p><p>Allah mengharamkan khamer dengan dalil Al Qurâ€™an, sebab atau alasan pengharamannya adalah karena ia memabukkan, dan menghilangkan kesadaran. Jika kita menemukan minuman memabukkan lain dengan nama yang berbeda selain khamer, maka kita menghukuminya dengan haram, sebagai hasil Qiyas dari khamer. Karena sebab atau alasan pengharaman khamer yaitu â€œmemabukkanâ€ terdapat pada minuman tersebut, sehingga ia menjadi haram sebagaimana pula khamer.</p><p>Inilah sumber-sumber yang menjadi rujukan syariâ€™at dalam perkara-perkara fiqih Islam, kami sebutkan semoga mendapat manfaat, adapun lebih lengkapnya dapat dilihat di dalam kitab-kitab usul fiqh Islam (<em>Fiqhul Manhaj â€˜ala Manhaj Imam Syafiâ€™i</em>).</p><p>***</p><p>Sumber: Majalah Fatawa</p><p></p>', 0, 0),
(11, 8, '2019-07-02', '6', 'artikel', 'Kata Mutiara Islam', 'kata mutiara islamiyah', '<p>\r\n\r\nâ€œYang palilng aku takutkan atas umat ini adalah orang berilmu yang munafikâ€\r\n\r\n<br></p>', 0, 0),
(12, 8, '2019-07-02', '6', 'artikel', 'Kata Mutiara Islam', 'kata kata mutiara islamiyah', '<p>\r\n\r\nâ€œCiri kelalaian manusia adalah sering mengeluh ketika sedang diuji dan jarang bersyukur ketika mendapatkan nikmatâ€\r\n\r\n<br></p>', 0, 0),
(13, 8, '2019-07-02', '6', 'artikel', 'Kata Mutiara Islam', 'kata kata mutiara islamiyah', '<p>\r\n\r\nâ€œSahabat ialah yang ketika bersama kita, dia menguatkan kita dan apabila tidak di sisi kita mereka adalah orang yang selalu mendoâ€™akan kebaikan untuk kitaâ€\r\n\r\n<br></p>', 0, 0),
(14, 8, '2019-07-02', '6', 'artikel', 'Kata Mutiara Islam', 'kata kata mutiara islam', '<p>\r\n\r\nâ€œJadilah muslimah yang memiliki dua kecantikan, cantik luar yang dilindungi hijab syarâ€™i. Cantik dalam yang dihiasi akhlak terpujiâ€\r\n\r\n<br></p>', 0, 0),
(15, 8, '2019-07-02', '6', 'artikel', 'Kata Mutiara Islam', 'kata kata mutiara islamiyah', '<p>\r\n\r\nâ€œDipilih karena rupa mungkin membanggakan, tapi dipilih karena agamanya jauh lebih mengagumkanâ€\r\n\r\n<br></p>', 0, 0),
(16, 8, '2019-07-02', '6', 'artikel', 'Kata Mutiara Islam', 'kata kata mutiara islam', '<p>\r\n\r\nâ€œTidak ada orang yang memburu dunia dia akan sukses, justru dia ditunggu dengan masalah-masalah yang akan menimpanyaâ€\r\n\r\n<br></p>', 0, 0),
(17, 8, '2019-07-02', '1', 'artikel', 'Kata Mutiara Islam', 'kata kata mutiara islamiyah', '<p>\r\n\r\nâ€œKebahagiaan terletak pada kemenangan memerangi hawa nafsu dan menahan kehendak yang berlebih-lebihanâ€\r\n\r\n<br></p>', 0, 0),
(18, 8, '2019-07-02', '6', 'artikel', 'Kata Mutiara Islam', 'kata kata mutiara islamiyah', '<p>\r\n\r\nâ€œMereka yang terlalu dalam terluka disebabkan terlalu jauh meninggalkan cinta kepada Allah dan Rasul-Nyaâ€\r\n\r\n<br></p>', 0, 0),
(19, 8, '2019-07-02', '6', 'artikel', 'Kata Mutiara Islam', 'kata kata mutiara islamiyah', '<p>â€œApalah gunanya hidup 100 tahun kalau tidak shalat dan tidak mengajiâ€<br></p>', 0, 0),
(20, 8, '2019-07-02', '6', 'artikel', 'Kata Mutiara Islam', 'kata kata mutiara islam', '<p>\r\n\r\nâ€œOrang yang kuat bukanlah dia yang tidak pernah menangis, tetapi orang yang terus istiqomah di tengah godaanâ€\r\n\r\n<br></p>', 0, 0),
(21, 10, '2019-07-02', '5', 'artikel', 'Kumpulan Hadist Mudah di Ingat', 'kumpulan hadits yang mudah di ingat', '<p>\r\n\r\n</p><h3><strong>Hadits Pendek tentang Berlepas Diri dari Kaum Kuffar</strong></h3><p>Dari <a target=\"_blank\" rel=\"nofollow\" href=\"http://temanshalih.com/abdullah-bin-umar-bin-al-khaththab-melawan-pelajar-menyimpang/\">Abdullah bin â€˜Umar</a>, RasulullÄh ØµÙ„Ù‰ Ø§Ù„Ù„Ù‡ Ø¹Ù„ÙŠÙ‡ ÙˆØ³Ù„Ù… bersabda,</p><h4>Ù…ÙŽÙ†Ù’ ØªÙŽØ´ÙŽØ¨Ù‘ÙŽÙ‡ÙŽ Ø¨ÙÙ‚ÙŽÙˆÙ’Ù…Ù ÙÙŽÙ‡ÙÙˆÙŽ Ù…ÙÙ†Ù’Ù‡ÙÙ…Ù’</h4><blockquote><p>â€œBarangsiapa menyerupai suatu kaum, maka dia termasuk bagian dari mereka.â€ â€“<a target=\"_blank\" rel=\"nofollow\" href=\"https://temanshalih.com/daftar-istilah-dalam-ilmu-hadits/\"><em><strong>&nbsp;Hadits Hasan Shahih (al-Albani):</strong></em></a>&nbsp;Sunan Abi Dawud, kitab al-Libas, nomor 4031. Bulugh al-Maram, nomor 1514.</p></blockquote>\r\n\r\n<br><p></p>', 0, 0),
(22, 2, '2019-07-02', '5', 'artikel', 'Kumpulan Hadist Mudah di Ingat', 'Hadist Pendek tentang Berbagi Hadiah', '<p>\r\n\r\n</p><h3><strong>Hadits Pendek tentang Berbagi Hadiah</strong></h3><h4>ØªÙŽÙ‡ÙŽØ§Ø¯ÙÙˆÙ’Ø§ ØªÙŽØ­ÙŽØ§Ø¨ÙÙ‘ÙˆÙ’Ø§</h4><blockquote><p>â€œBerbagi hadiahlah kalian, niscaya kalian akan saling mencintai.â€ â€“ <a target=\"_blank\" rel=\"nofollow\" href=\"https://temanshalih.com/daftar-istilah-dalam-ilmu-hadits/\"><em><strong>Hadits Hasan (Al-Albani):</strong></em></a>Hadits Riwayat Al-Bukhari dalam Al-Adab Al-Mufrad nomor 594 (Ø§Ù„Ø£Ø¯Ø¨ Ø§Ù„Ù…ÙØ±Ø¯</p></blockquote>\r\n\r\n<br><p></p>', 0, 0),
(23, 10, '2019-07-02', '5', 'artikel', 'Kumpulan Hadist Mudah di Ingat', 'Hadits Pendek tentang Pemahaman Agama', '<p>\r\n\r\n</p><h3><strong>Hadits Pendek tentang Pemahaman Agama</strong></h3><h4>Ù…ÙŽÙ†Ù’ ÙŠÙØ±ÙØ¯Ù Ø§Ù„Ù„Ù‡Ù Ø¨ÙÙ‡Ù Ø®ÙŽÙŠÙ’Ø±Ù‹Ø§ ÙŠÙÙÙŽÙ‚Ù‘ÙÙ‡Ù’Ù‡Ù ÙÙÙŠ Ø§Ù„Ø¯Ù‘ÙÙŠÙ†Ù</h4><blockquote><p>â€œBarang siapa yang dikehendaki kebaikan oleh AllÄh, maka AllÄh akan memahamkannya (diberi kepahaman) dalam urusan agama. â€¦â€ â€“ <a target=\"_blank\" rel=\"nofollow\" href=\"https://temanshalih.com/daftar-istilah-dalam-ilmu-hadits/\"><em><strong>Shahih Muslim</strong></em></a>&nbsp;nomor 1037 (ÙƒØªØ§Ø¨ Ø§Ù„Ø²ÙƒØ§Ø©</p></blockquote>\r\n\r\n<br><p></p>', 0, 0),
(24, 10, '2019-07-02', '5', 'artikel', 'Kumpulan Hadist Mudah di Ingat', 'Hadits Pendek tentang Hadits Kewjiban mengikuti Su', '<p>\r\n\r\n</p><h3><strong>Hadits Pendek tentang Hadits Kewajiban Mengikuti Sunnah Rasulullah</strong></h3><h4>â€Ž Ù…ÙŽÙ†Ù’ Ø¹ÙŽÙ…ÙÙ„ÙŽ Ø¹ÙŽÙ…ÙŽÙ„Ù‹Ø§ Ù„ÙŽÙŠÙ’Ø³ÙŽ Ø¹ÙŽÙ„ÙŽÙŠÙ’Ø­Ù Ø£ÙŽÙ…Ø±ÙÙ†ÙŽØ§ ÙÙŽØ­ÙÙˆÙŽ Ø±ÙŽØ¯Ù‘Ù</h4><blockquote><p>Dari â€˜Aisyah (Ø±Ø¶ÙŠ Ø§Ù„Ù„Ù‡ Ø¹Ù†Ù‡Ø§) berkata: â€œRasulullÄh (â€ŽØµÙ„Ù‰ Ø§Ù„Ù„Ù‡ Ø¹Ù„ÙŠÙ‡ ÙˆØ³Ù„Ù…) bersabda: â€˜Barangsiapa yang melakukan sebuah amal perbuatan yang tidak ada contohnya dari kami maka amal perbuatan itu tertolakâ€™.â€ â€“ <a target=\"_blank\" rel=\"nofollow\" href=\"https://temanshalih.com/daftar-istilah-dalam-ilmu-hadits/\"><em><strong>Shahih Muslim</strong></em></a>&nbsp;nomor 1718 (ÙƒØªØ§Ø¨ Ø§Ù„Ø£Ù‚Ø¶ÙŠØ©), <em>al-Qowaâ€™id al-Fiqhiyyah</em>. II/26.</p></blockquote>\r\n\r\n<br><p></p>', 0, 0),
(25, 10, '2019-07-02', '5', 'artikel', 'Kumpulan Hadist Mudah di Ingat', 'Hadits Pendek Larangan Menggambar Makhluk Hidup Be', '<p>\r\n\r\n</p><h3><strong>Hadits Pendek Larangan Menggambar Makhluk Hidup Bernyawa</strong></h3><p>Dalam <a target=\"_blank\" rel=\"nofollow\" href=\"https://temanshalih.com/daftar-istilah-dalam-ilmu-hadits/\"><em>ash-Shahiihaiin</em></a>&nbsp;(al-Bukhari dan Muslim) diriwayatkan dari Abu Saâ€™id Ø±Ø¶ÙŠ Ø§Ù„Ù„Ù‡ Ø¹Ù†Ù‡Ù…Ø§, dia berkata, Nabi â€ŽØµÙ„Ù‰ Ø§Ù„Ù„Ù‡ Ø¹Ù„ÙŠÙ‡ ÙˆØ³Ù„Ù… bersabda,</p><h4>Ø§ÙÙ†Ù‘ÙŽ Ø£ÙŽØ´ÙŽØ¯Ù‘ÙŽ Ø§Ù„Ù†Ù‘ÙŽØ§Ø³Ù Ø¹ÙŽØ°ÙŽØ§Ø¨Ù‹Ø§ ÙŠÙŽÙˆÙ’Ù…ÙŽ Ø§Ù„Ù’Ù‚ÙÙŠÙŽØ§Ù…ÙŽØ©Ù Ø§Ù„Ù’Ù…ÙØµÙŽÙˆÙ‘ÙØ±ÙÙˆÙ’Ù†ÙŽ</h4><blockquote><p>Sesungguhnya manusia yang paling keras siksaannya pada hari Kiamat adalah orang-orang yang menggambar (makhluk yang bernyawa). â€“ Hadits <em><a target=\"_blank\" rel=\"nofollow\" href=\"https://temanshalih.com/daftar-istilah-dalam-ilmu-hadits/\"><strong>Muttafaq â€˜Alaih</strong></a></em>: Diriwayatkan oleh Imam Al-Bukhari dan Imam Muslim. Sunan an-Nasaâ€™i nomor 5357, 5364, Sahih al-Bukhari nomor 5950, 6109, Shahih Muslim nomor 2107.</p></blockquote>\r\n\r\n<br><p></p>', 0, 0),
(26, 10, '2019-07-02', '5', 'video', 'Kumpulan Hadist Mudah di Ingat', 'Hadits Pendek Menyatakan Cinta', '<p>\r\n\r\n</p><h3><strong>Hadits Pendek Menyatakan Cinta</strong></h3><h4>â€ŽØ¥ÙØ°ÙŽØ§ Ø£ÙŽØ­ÙŽØ¨Ù‘ÙŽ Ø£ÙŽØ­ÙŽØ¯ÙÙƒÙÙ…Ù’ Ø£ÙŽØ®ÙŽØ§Ù‡Ù ÙÙŽÙ„Ù’ÙŠÙØ¹Ù’Ù„ÙÙ…Ù’Ù‡Ù Ø¥ÙÙŠÙ‘ÙŽØ§Ù‡Ù</h4><blockquote><p>Apabila seseorang mencintai saudaranya maka hendaklah dia memberi tau bahwa dia mencintainya. â€“ <a target=\"_blank\" rel=\"nofollow\" href=\"https://temanshalih.com/daftar-istilah-dalam-ilmu-hadits/\"><em><strong>Hadits Hasan</strong></em></a>&nbsp;(al-Albani): at-Tirmidzi nomor 2392 (ÙƒØªØ§Ø¨ Ø§Ù„Ø²Ù‡Ø¯ Ø¹Ù† Ø±Ø³ÙˆÙ„ Ø§Ù„Ù„Ù‡ ØµÙ„Ù‰ Ø§Ù„Ù„Ù‡ Ø¹Ù„ÙŠÙ‡ ÙˆØ³Ù„Ù…)</p></blockquote>\r\n\r\n<br><p></p>', 0, 0),
(27, 10, '2019-07-02', '1', 'artikel', 'Kumpulan Hadist Mudah di Ingat', 'Hadits Pendek Niat Beramal', '<p>\r\n\r\n</p><h3><strong>Hadits Pendek Niat Beramal</strong></h3><p>Dari â€˜Umar bin Al-Khaththab, aku mendengar RasulullÄh â€ŽØµÙ„Ù‰ Ø§Ù„Ù„Ù‡ Ø¹Ù„ÙŠÙ‡ ÙˆØ³Ù„Ù… bersabda,</p><h4>Ø¥ÙÙ†Ù‘ÙŽÙ…ÙŽØ§ Ø§Ù„Ø£ÙŽØ¹Ù’Ù…ÙŽØ§Ù„Ù Ø¨ÙØ§Ù„Ù†Ù‘ÙÙŠÙ‘ÙŽØ§ØªÙ ÙˆÙŽØ¥ÙÙ†Ù‘ÙŽÙ…ÙŽØ§ Ù„ÙÙƒÙÙ„Ù‘Ù Ø§Ù…Ù’Ø±ÙØ¦Ù Ù…ÙŽØ§ Ù†ÙŽÙˆÙŽÙ‰</h4><blockquote><p>Sesungguhnya setiap amal itu (tergantung) pada niatnya, dan seseorang itu akan mendapatkan sesuai dengan  yang dia niatkan.  â€“<a target=\"_blank\" rel=\"nofollow\" href=\"https://temanshalih.com/daftar-istilah-dalam-ilmu-hadits/\"><em><strong>&nbsp;Hadits Shahih</strong></em></a>&nbsp;(al-Albani): Shahih Bukhari nonor 1, 6689, 6953, Shahih Muslim nomor 1907, Sunan Abi Dawud nomor 2201, Sunan an-Nasaâ€™i nomor 3794.</p></blockquote>\r\n\r\n<br><p></p>', 0, 0),
(28, 10, '2019-07-02', '5', 'artikel', 'Kumpulan Hadist Mudah di Ingat', 'Hadits Pendek Menuntut Ilmu', '<p>\r\n\r\n</p><h3><strong>Hadits Pendek Menuntut Ilmu</strong></h3><p>RasulullÄh ØµÙ„Ù‰ Ø§Ù„Ù„Ù‡ Ø¹Ù„ÙŠÙ‡ ÙˆØ³Ù„Ù… bersabda,</p><h4>Ø·ÙŽÙ„ÙŽØ¨Ù Ø§Ù„Ù’Ø¹ÙÙ„Ù’Ù…Ù ÙÙŽØ±ÙÙŠØ¶ÙŽØ©ÙŒ Ø¹ÙŽÙ„ÙŽÙ‰ ÙƒÙÙ„Ù‘Ù Ù…ÙØ³Ù’Ù„ÙÙ…Ù</h4><blockquote><p>Menuntut ilmu itu wajib bagi setiap muslim. â€“ Shahih: Ibnu Majah no. 224 (ÙƒØªØ§Ø¨ Ø§Ù„Ù…Ù‚Ø¯Ù…Ø©), dari Shahabat Anas bin Malik Ø±Ø¶Ù‰ Ø§Ù„Ù„Ù‡ Ø¹Ù†Ù‡</p></blockquote>\r\n\r\n<br><p></p>', 0, 0),
(29, 2, '2019-07-02', '1', '', 'Kumpulan Hadist Mudah di Ingat', 'Hadits Pendek Perintah Istiqomah', '<p>\r\n\r\n</p><h3><strong>Hadits Pendek Perintah Istiqamah</strong></h3><h4>Ù‚ÙÙ„Ù’ Ø¢Ù…ÙŽÙ†Ù’ØªÙ Ø¨ÙØ§Ù„Ù„Ù‡Ù ÙÙŽØ§Ø³Ù’ØªÙŽÙ‚ÙÙ…Ù’</h4><blockquote><p>Katakanlah, â€˜Aku beriman kepada Allahâ€™, kemudian beristiqamahlah (berpegang teguh kepada ketaatan). â€“ <em><strong><a target=\"_blank\" rel=\"nofollow\" href=\"https://temanshalih.com/daftar-istilah-dalam-ilmu-hadits/\">Shahih</a></strong></em>&nbsp;Muslim nomor 38.</p></blockquote>\r\n\r\n<br><p></p>', 0, 0),
(30, 7, '2019-07-02', '2', 'artikel', 'Ilmu Fiqh Bersuci', 'Bab Tentang Thaharoh', '<p>\r\n\r\n</p><p><strong>Thaharah</strong>&nbsp;jika ditinjau menurut bahasa mempunyai arti bersuci. Dan jika menurut syaraâ€™ artinya iala membersihkan diri, tempat, pakaian, dan benda-benda lain dari najis serta hadas menurut cara-cara yang ditentukan oleh syariat islam.</p><p>Sebenarnya Thaharah atau bersuci adalah syarat yang harus dipenuhi sebelum kita melakukan ibadah. Itulah mengapa bersuci menjadi permasalahan yang sangat penting di dalam ajaran islam.</p><div><div></div></div><p>Dan tata cara yang bersuci yang telah diajarkan di dalam Islam dan dicontohkan oleh Rasulullah dimaksudkan agar kita sebelum beribadah kepada Allah, kondisi kita bersih baik dari hadast besar dan hadast kecil.</p><h2>Dalil Thaharah dalam Islam</h2><p>Dan sebenarnya, bab Thaharah ini menempati kedudukan yang sangat penting dalam melakukan ibadah. Bahkan di beberapa kitab hadist, bab Thaharah menempati bab pertama. Atau paling tidak pada bab kedua dan ketiga.</p><p>Thaharah hukumnya wajib berdasarkan Alquran dan As-Sunnah. Allah SWT &nbsp;berfirman dalam surat Al-Maidah ayat 6 yang artinya :</p><p><em>Hai orang-orang yang beriman, apabila kalian hendak mengerjakan salat, maka basuhlah muka kalian dan tangan kalian sampai dengan siku, dan sapulah kepala kalian, dan (basuh) kaki kalian sampai dengan kedua mata kaki.â€ </em></p><p>Dan juga di dalam Surat Al-Mudatstsir ayat 4 dan Al-Baqarah ayat 222. Allah SWT juga berfirman,</p><p><i>â€œDan, pakaianmu bersihkanlah.â€</i>&nbsp;(Surat Al-Mudatstsir: 4).</p><p><i>â€œSesungguhnya Allah menyukai orang-orang yang tobat dan menyukai orang-orang yang menyucikan diri.â€</i>&nbsp;(Surat Al-Baqarah: 222)</p>\r\n\r\n\r\n\r\n<p>Sedangkan Rasulullah S.A.W bersabda dalam hadist yang berbunyi <em>â€œKunci salat adalah bersuci.â€</em><br>Dalam hadist lain Rasulullah SAW bersabda, â€œSalat tanpa wudhu tidak diterima.â€ (HR Muslim). Rasulullah saw. Bersabda, â€œKesucian adalah sebagian dari iman.â€ (HR Muslim).</p><p>Bukti pentingnya thaharah misalnya saja, setiap orang yang akan mengerjakan salat dan tawaf diwajibkan terlebih dahulu untuk melakukan Thaharah,sepertih berwudlu, tayamum jika tidak ada air, atau juga mandi.</p>\r\n\r\n<br><p></p>', 0, 0),
(31, 7, '2019-07-02', '2', 'artikel', 'Ilmu Fiqh Bersuci', 'Macam - macam thaharoh atau Bersuci', '<p>\r\n\r\n</p><h2>Macam-Macam Thaharah atau Bersuci</h2><p>Thaharah (bersuci) terbagi menjadi beberapa jenis pembagian, pembagian ini macamnya tergantung dari jenis hadast dan juga keadaannya. Macam-macam Thaharah diataranya seperti berwudlu, taâ€™yamum, dan juga mandi besar (mandi junub). Penjelasan selengkapnya sebagai berikut :</p>\r\n\r\n\r\n\r\n<h2><br></h2><p></p>', 0, 0),
(32, 7, '2019-07-02', '2', 'artikel', 'Ilmu Fiqh Bersuci', 'Thaharoh berwudhu', '<p>\r\n\r\n</p><h2><b>Thaharah Wudlu</b></h2>\r\n\r\n\r\n\r\n<p>Jenis thaharah yang pertama kita bahas adalah berwudlu. Wudlu jika diartikan menurut bahasa adalah membersihkan sebagian anggota badan . Dan jika dilihat menurut syaraâ€™, berwudlu adalah membersihkan bagian-bagian tertentu dengan niatan tertentu pula.</p><p>Hukum wudlu dibagi menjadi dua. Pertama berhukum wajib, hukum wajib ini diperuntukan bagi orang yang mempunyai hadats  dan sunnah untuk orang yang memperbarui wudlu baik itu dilakukan setelah shalat ataupun setelah melakukan mandi wajib, serta ketika orang yang junub akan melakukan makan, tidur atau wathi dan lain sebagainya.</p><h3><b>Tata Cara Bersuci Wudlu atau Fardlu Wudlu</b></h3><p>Fardlu wudlu adalah hal yang harus kita lakukan untuk melaksanakan wudlu. Sebenarnya ada beberapa pendapat mengenai tata cara berwudlu, namun disini saya akan mengulas sesuai pendapat Imam Madzab Imam Syafiâ€™i radhiallahu anhu. Fardlu wudlu menurut pendapat beliau ada 6 diantaranya yaitu:<br>1. &nbsp;  Niat<br>2. &nbsp;  Membasuh wajah<br>3. &nbsp;  Membasuh kedua tangan beserta dua siku<br>4. &nbsp;  Mengusap sebagian kepala<br>5. &nbsp;  Membasuh dua kaki sampai mata kaki<br>6. &nbsp;  Tertib .</p><p>Itulah fardlu wudlu atau tata cara berwudlu yang harus kita ikuti, dan untuk rukun wudlu yang terakhir yaitu â€œTertibâ€ dimaksudkan adalah kita harus melakukan semua fardlu tersebut diatas secara berurutan dari nomer satu sampai terakhir.</p><h3><b>Syarat Sahnya Wudlu</b></h3><p>Adapun berikut ini adalah syarat wudlu yaitu hal-hal yang harus terpenuhi sebelum melaksanakan wudlu. Beberapa syarat untuk melaksanakan wudlu agar wudlu yang telah kita lakukan menjadi sah adalah sebagai berikut :<br>(1) &nbsp;  Islam,<br>(2) &nbsp;  Cerdas; tidak bodoh ataupun gila,<br>(3) &nbsp;  Suci dari haid serta nifas,<br>(4) &nbsp;  Bersih beberapa hal yang menghalangi atau juga mencegah mengalirnya air sampai ke kulit<br>(5) &nbsp; &nbsp;Pada anggota yang dikenai air wudlu tidak mengandung hal yang dapat merubah sifat air<br>(6) &nbsp;  Mengerti kefardluan wudlu<br>(7) &nbsp;  Tidak meyakini bahwa fardlu wudlu adalah sunnah<br>(8) &nbsp;  Air yang suci<br>(9) &nbsp;  Menghilangkan najis yang terlihat<br>(10) &nbsp;  Mengalirkan air di seluruh anggota wudlu .</p>\r\n\r\n\r\n\r\n<p>Jadi selain fardlu wudlu yang sebelumnya harus dilakukan berurutan, syarat-syarat wudlu diatas juga harus dipenuhi agar wudlu yang kita lakukan menjadi sah sesuai syariat Islam.</p><h3><b>Sunnah dalam Wudlu</b></h3><p>Diantara syarat wajib yang harus dilakukan agar wudlu kita menjadi sah. Ada juga beberapa sunnah wudlu merupakan hal yang apabila dikerjakan pada saat berwudlu, kita akan mendapat pahala tambahan dan juga bila kita tinggalkan, tidaklah mengapa alias kita tidak berdosa. Diantaranya yaitu:<br>(a) &nbsp;  Bersiwak sebelum berwudlu<br>(b) &nbsp; &nbsp;Dimulai dengan bacaan Basmalah<br>(c) &nbsp; &nbsp;Diawali dengan membasuh kedua telapak tangan dan sela-selanya juga<br>(d) &nbsp;  Berkumur<br>(e) &nbsp;  Menghisap sedikit air melewati hidung dan menyemprotkan air tersebut kembali keluar dari lubang hidung<br>(f) &nbsp; &nbsp;Mengusap seluruh kepala<br>(g) &nbsp;Ulangi setiap rukun sebanyak tiga kali;</p><div></div><h3><b>Hal-hal yang Membatalkan Wudlu</b></h3><p>Sekarang kita belajar tentang beberapa hal yang dapat membatalkan Wudlu. Diantaranya adalah sebagai berikut :<br>1. &nbsp;  Segala sesuatu yang keluar dari qubul atau dubur kecuali mani;<br>2. &nbsp;  Hilangnya akal kecuali sebab tidur yang tetap duduknya;<br>3. &nbsp;  Bertemunya dua kulit laki-laki dan perempuan yang sudah baligh dan berlainan;<br>4. &nbsp;  Menyentuh qubul atau lubang dubur dengan telapak tangan atau ujung jari bagian dalam.</p><p>Dengan mengetahui beberapa hal yang membatalkan wudlu diatas, diharapkan untuk kita dapat terjaga dari hal tersebut untuk selalu menjaga wudlu kita dimanapun dan kapanpun kita berada.</p>\r\n\r\n<br><p></p>', 0, 0),
(33, 7, '2019-07-02', '2', 'artikel', 'Ilmu Fiqh Bersuci', 'Thaharah Mandi (Al Ghusl)', '<p>\r\n\r\n</p><h2><b>Thaharah Mandi (Al Ghusl)</b></h2>\r\n\r\n\r\n\r\n<p>Mandi secara bahasa adalah mengalirkan air ke segala sesuatu baik badan, pakaian dan sebagainya tanpa diiringi dengan niat. Sedangkan menurut syaraâ€™ mandi yaitu mengalirkan air ke seluruh anggota badan denagn niat tertentu.</p><p>Dalam islam, mandi atau Al Ghusl memiliki posisi yang cukup urgen. Hal ini  mengingat mandi bertujuan untuk menghilangkan hadats atau kotoran yang tidak bisa dihilangkan hanya dengan wudlu.</p><p>Namun mandi yang dimaksud disini tentunya memiliki karakteristik serta aturan yang berbeda dari mandi yang hanya untuk membersihkan badan dari kotoran yang melekat di tubuh. Berikut beberapa hal yang menyangkut mandi dalam Islam:</p><h3><b>Hal yang Mewajibkan Mandi</b></h3><p>Adapun beberapa hal yang membuat kita harus melakukan bersuci atau thaharah dengan cara Mandi Besar adalah sebagai berikut :</p><p>1. &nbsp;  Bertemunya dua kemaluan<br>2. &nbsp;  Keluarnya mani<br>3. &nbsp;  Haidl<br>4. &nbsp;  Nifas<br>5. &nbsp;  Wiladah<br>6. &nbsp;  Meninggal dunia</p><h3><b>Fardlu Mandi Besar atau Mandi Junub</b></h3>\r\n\r\n\r\n\r\n<p>Mandi secara bahasa adalah mengalirkan air ke segala sesuatu baik badan, pakaian dan sebagainya tanpa diiringi dengan niat. Sedangkan menurut syaraâ€™ mandi yaitu mengalirkan air ke seluruh anggota badan denagn niat tertentu.</p><p>Dalam islam, mandi atau Al Ghusl memiliki posisi yang cukup urgen. Hal ini  mengingat mandi bertujuan untuk menghilangkan hadats atau kotoran yang tidak bisa dihilangkan hanya dengan wudlu.</p><p>Namun mandi yang dimaksud disini tentunya memiliki karakteristik serta aturan yang berbeda dari mandi yang hanya untuk membersihkan badan dari kotoran yang melekat di tubuh. Berikut beberapa hal yang menyangkut mandi dalam Islam:</p><h3><b>Hal yang Mewajibkan Mandi</b></h3><p>Adapun beberapa hal yang membuat kita harus melakukan bersuci atau thaharah dengan cara Mandi Besar adalah sebagai berikut :</p><p>1. &nbsp;  Bertemunya dua kemaluan<br>2. &nbsp;  Keluarnya mani<br>3. &nbsp;  Haidl<br>4. &nbsp;  Nifas<br>5. &nbsp;  Wiladah<br>6. &nbsp;  Meninggal dunia</p><h3><b>Fardlu Mandi Besar atau Mandi Junub</b></h3>\r\n\r\n\r\n\r\n<h3><b>Sunnah Dalam Mandi</b></h3><p>Beberapa sunnah mandi yang dianjurkan adalah lima perkara, yaitu:<br>1. &nbsp; &nbsp;Diawali dengan bacaan basmalah<br>2. &nbsp;  Berwudlu dahulu sebelum melakukan mandi wajib<br>3. &nbsp;  Menggosok-gosokkan tangan pada bagian tubuh, terutama pada tubuh yang terkena najis<br>4. &nbsp;  Berturut-turut<br>5. &nbsp; &nbsp;Dahulukan anggota badan sebelah kanan</p><h4><b>Syarat Mandi Wajib (Al Ghusl)</b></h4><p>Adapun syarat mandi sebenarnya sama saja sebagaimana syarat dalam kita melaksanakan wudlu, seperti :</p><p>(1) &nbsp;  Islam,<br>(2) &nbsp;  Cerdas; tidak bodoh ataupun gila,<br>(3) &nbsp;  Suci dari haid serta nifas,<br>(4) &nbsp;  Bersih beberapa hal yang menghalangi atau juga mencegah mengalirnya air sampai ke kulit<br>(5) &nbsp; &nbsp;Pada anggota yang dikenai air wudlu tidak mengandung hal yang dapat merubah sifat air<br>(6) &nbsp;  Mengerti kefardluan wudlu<br>(7) &nbsp;  Tidak meyakini bahwa fardlu wudlu adalah sunnah<br>(8) &nbsp;  Air yang suci<br>(9) &nbsp;  Menghilangkan najis yang terlihat<br>(10) &nbsp;  Mengalirkan air di seluruh anggota wudlu .</p><h3><b>Mandi Mandi yang Disunnahkan</b></h3><p>Beberapa mandi yang disunnahkan dalam Islam adalah mandi jumâ€™at, mandi dua hari raya , mandi dua gerhana , mandi karena islamnya orang kafir serta mandi karena sembuhnya orang gila dan orang yang berpenyakit ayan</p>\r\n\r\n<br><p></p>', 0, 0),
(34, 7, '2019-07-02', '1', 'artikel', 'Ilmu Fiqh Bersuci', 'Thaharah Tayammum', '<p>\r\n\r\n</p><h2><b>Thaharah Tayammum</b></h2>\r\n\r\n\r\n\r\n<p>Menurut bahasa, tayammum adalah menyengaja (Ø§Ù„Ù‚ØµØ¯). Sedangkan menurut ishtilah yaitu mengusapkan debu pada wajah dan kedua tangan dengan niat tertentu. Tayammum yaitu sebuah ritual penyucian diri dari hadats dengan menggunakan debu sebagai pengganti air dikarenakan beberapa sebab atau hal tertentu.</p><h3>Sebab Dilaksanakan Taâ€™yamum</h3><p>Sebab-sebab tayammum terbagi menjadi dua kategori. Pertama yaitu tayammum yang wajib mengulangi sholat yang telah dilakukan seperti tayammum karena tidak adanya air di tempat yang biasanya terdapat air melimpah, lupa meletakkan air, hilangnya air dari tempatnya dan sebagainya .</p><p>Kedua yaitu dimana tidak diwajibkan untuk mengulangi sholat yang telah dilakuakan seperti tayammum karena tidak ada air di tempat yang sudah biasa tidak ada airnya dan kebutuhan akan air tersebut untuk diminum atau dijual untuk memenuhi kebutuhan, tidak adanya air kecuali dengan harga tertentu dan tidak ada uang untuk membeli atau akan dipergunakan untuk kebutuhan lain .</p><h3>Tata Cara Taâ€™yamum</h3><p>Fardlu tayammum ada lima yaitu memindahkan debu dari tanah atau udara kebagian yang diusap, niat, mengusap wajah, mengusap dua tangan hingga kedua siku dan tertib. Beberapa Sunnah tayammum yaitu bersiwak, membaca basmalah, mendahulukan anggota kanan, berturut-turut, menipiskan debu pada telapak tangan.</p><p>Hal hal yang membatalkan tayammum diantaranya yaitu hadats, murtad, mengira telah ada air di luar sholat, mengerti tentang keberadaan air, mampu untuk membeli air dan sebagainya.</p>\r\n\r\n\r\n\r\nItulah ulasan kita mengenai Thaharah kali ini. Semoga ilmu tentang thaharah baik itu <strong>Pengertian Thaharah, Macam-macam Thaharah,</strong>&nbsp;dan juga <strong>Tata Cara Bersuci atau Thaharah</strong>&nbsp;dapat menjadi tambahan ilmu dan kamu aplikasikan di kehidupan sehari-hari. Semoga bermanfaat.\r\n\r\n<br><p></p>', 0, 0),
(35, 2, '2020-07-21', '1', '', 'Kekuatan', 'Jangan Menyerah', 'Berfikir Positif', 0, 0),
(36, 2, '2020-07-21', '2', '', 'Kekuatan', 'Jangan Menyerah', 'Berfikir Posif', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id_member` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `level` varchar(10) NOT NULL,
  `view` int(15) NOT NULL,
  `subscribe` int(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id_member`, `username`, `password`, `email`, `level`, `view`, `subscribe`) VALUES
(2, 'Nisa Karima', '12355', 'nisa@gmail.com', 'teacher', 1011, 560),
(3, 'Puput Eka Sari', '123456', 'put123@gmail.com', 'student', 0, NULL),
(4, 'Bivan Alzacky', 'zacky123', 'zacky@gmail.com', 'student', 0, NULL),
(5, 'Nada Citra', 'Nada123', 'Nada123@gmail.com', 'teacher', 5100, 600),
(6, 'Fachim Ranjana', 'r123', 'Fachim@yahoo.com', 'student', 0, NULL),
(7, 'Widya Fathul', 'fat123', 'fathul20@yahoo.com', 'teacher', 1500, 1110),
(8, 'Herni Fajar San', 'her123', 'Herni@gmail.com', 'teacher', 0, NULL),
(9, 'Fitri Norma', 'Norma123', 'Norma@gmail.com', 'student', 0, NULL),
(10, 'Bambang Santoso', '12344', 'bambang@gmail.com', 'teacher', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penggajian`
--

CREATE TABLE `tbl_penggajian` (
  `id_gaji` int(10) NOT NULL,
  `id_member` int(10) NOT NULL,
  `id_kg` int(10) NOT NULL,
  `tgl_cair` date NOT NULL,
  `jml_gaji` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penggajian`
--

INSERT INTO `tbl_penggajian` (`id_gaji`, `id_member`, `id_kg`, `tgl_cair`, `jml_gaji`) VALUES
(1, 2, 1, '2019-07-01', 500000),
(9, 7, 2, '2020-08-01', 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_premium`
--

CREATE TABLE `tbl_premium` (
  `id_premium` int(10) NOT NULL,
  `id_member` int(10) NOT NULL,
  `id_berlangganan` int(10) NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_premium`
--

INSERT INTO `tbl_premium` (`id_premium`, `id_member`, `id_berlangganan`, `tgl_daftar`) VALUES
(5, 3, 2, '2020-07-21'),
(2, 6, 1, '2019-06-29'),
(3, 9, 4, '2019-07-21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reminder`
--

CREATE TABLE `tbl_reminder` (
  `id_reminder` int(10) NOT NULL,
  `id_premium` int(10) NOT NULL,
  `waktu` datetime NOT NULL,
  `nama_event` varchar(20) NOT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reminder`
--

INSERT INTO `tbl_reminder` (`id_reminder`, `id_premium`, `waktu`, `nama_event`, `deskripsi`) VALUES
(1, 1, '2019-06-05 07:30:00', 'kuliah', 'berangkat presentasi FINAL PROJECT'),
(6, 2, '2019-07-01 17:01:36', 'coba', 'coba'),
(8, 3, '2019-06-30 10:50:23', 'seminar', 'tantangan ecommerce');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_soal`
--

CREATE TABLE `tbl_soal` (
  `id_soal` int(11) NOT NULL,
  `soal` text NOT NULL,
  `a` varchar(100) NOT NULL,
  `b` varchar(100) NOT NULL,
  `c` varchar(100) NOT NULL,
  `d` varchar(100) NOT NULL,
  `kunci` varchar(10) NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_soal`
--

INSERT INTO `tbl_soal` (`id_soal`, `soal`, `a`, `b`, `c`, `d`, `kunci`, `aktif`) VALUES
(1, 'Munculnya beberapa gerakan separatis di Indonesia semisal; GAM, Bintang Kejora, dan lain sebagainya dalam kajian fiqh islam masuk dalam pembahasanâ€¦', 'Qadzaf', 'Bughat', 'Hirabah', 'Qatâ€™ut thariq', 'b', 'Y'),
(2, 'Tekhnis pelaksanaan had perampokan, dimana hukuman disesuaikan dengan tingkat kejahatan yang dilakukan perampok disebutâ€¦', 'Takhyiri', 'Hadidi', 'Tauziâ€™i', 'Taâ€™zir', 'c', 'Y'),
(3, 'Siapakah ibu Nabi Muhammad ...', 'Siti Aminah', 'Siti Khadija', 'Aisyah', 'Abu Thalib', 'a', 'Y'),
(5, 'dan gagal membuat soal quiz', '1', '2', '3', '4', '', ''),
(6, 'Zakat adalah rukun islam nomer ... ', '1', '2', '3', '4', 'd', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_bayar`
--
ALTER TABLE `tbl_bayar`
  ADD PRIMARY KEY (`id_bayar`),
  ADD UNIQUE KEY `id_premium` (`id_premium`);

--
-- Indexes for table `tbl_berlangganan`
--
ALTER TABLE `tbl_berlangganan`
  ADD PRIMARY KEY (`id_berlangganan`);

--
-- Indexes for table `tbl_detail_bayar`
--
ALTER TABLE `tbl_detail_bayar`
  ADD PRIMARY KEY (`no_nota`),
  ADD UNIQUE KEY `id_pembayaran` (`id_pembayaran`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_ketentuan_gaji`
--
ALTER TABLE `tbl_ketentuan_gaji`
  ADD PRIMARY KEY (`id_kg`);

--
-- Indexes for table `tbl_materi`
--
ALTER TABLE `tbl_materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `tbl_penggajian`
--
ALTER TABLE `tbl_penggajian`
  ADD PRIMARY KEY (`id_gaji`),
  ADD UNIQUE KEY `id_member` (`id_member`),
  ADD UNIQUE KEY `id_kg` (`id_kg`);

--
-- Indexes for table `tbl_premium`
--
ALTER TABLE `tbl_premium`
  ADD PRIMARY KEY (`id_premium`),
  ADD UNIQUE KEY `id_member` (`id_member`),
  ADD UNIQUE KEY `id_berlangganan` (`id_berlangganan`);

--
-- Indexes for table `tbl_reminder`
--
ALTER TABLE `tbl_reminder`
  ADD PRIMARY KEY (`id_reminder`),
  ADD UNIQUE KEY `id_premium` (`id_premium`);

--
-- Indexes for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_bayar`
--
ALTER TABLE `tbl_bayar`
  MODIFY `id_bayar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_berlangganan`
--
ALTER TABLE `tbl_berlangganan`
  MODIFY `id_berlangganan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_detail_bayar`
--
ALTER TABLE `tbl_detail_bayar`
  MODIFY `no_nota` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_ketentuan_gaji`
--
ALTER TABLE `tbl_ketentuan_gaji`
  MODIFY `id_kg` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_materi`
--
ALTER TABLE `tbl_materi`
  MODIFY `id_materi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id_member` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_penggajian`
--
ALTER TABLE `tbl_penggajian`
  MODIFY `id_gaji` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_premium`
--
ALTER TABLE `tbl_premium`
  MODIFY `id_premium` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_reminder`
--
ALTER TABLE `tbl_reminder`
  MODIFY `id_reminder` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
