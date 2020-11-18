<?php
// untuk memulai menggunakan session
session_start();
// untuk mengecek apakah session 'username' dan 'password' sudah ada belum, session tsb tercipta jika admin telah login
//jadi jika admin blm login maka tidak dapat mengakss file ini
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, anda harus login <br>";
	echo "<a href=../../index.php><b>LOGIN</b></a></center>";
} else {
	//untuk memasukkan file config.php dan file koneksi.php
	include "../../../lib/config.php";
	include "../../../lib/koneksi.php";
	//untuk menangkap variabel 'namaKategori' yang dikirim oleh form_tambah.php
	$periode = $_POST['Periode'];
	$tagihan = $_POST['Tagihan'];
	//query untuk menyimpan ke tabel tbl_kategori
	$querySimpan = mysqli_query($con,"INSERT INTO tbl_berlangganan (periode,tagihan) VALUES ('$periode','$tagihan')");
	//jika query berhasil maka akan tampil alert dan halaman akan kembali ke daftar kategori
	if ($querySimpan) {
		echo "<script> alert ('Data Ketentuan Berlangganan berhasil masuk'); window.location ='$admin_url'+'adminweb.php?module=ketentuan_berlangganan';</script> ";
	} else {
		echo "<script> alert ('Data Ketentuan Berlangganan gagal dimasukan'); window.location ='$admin_url'+'adminweb.php?module=tambah_kb';</script> ";
	}
}
?>