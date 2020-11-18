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
	$KategoriMateri = $_POST['KategoriMateri'];
	//query untuk menyimpan ke tabel tbl_kategori
	$querySimpan = mysqli_query($con,"INSERT INTO tbl_kategori (kategori_materi) VALUES ('$KategoriMateri')");
	//jika query berhasil maka akan tampil alert dan halaman akan kembali ke daftar kategori
	if ($querySimpan) {
		echo "<script> alert ('Data kategori berhasil masuk'); window.location ='$admin_url'+'adminweb.php?module=kategori';</script> ";
	} else {
		echo "<script> alert ('Data kategori gagal dimasukan'); window.location ='$admin_url'+'adminweb.php?module=tambah_kategori';</script> ";
	}
}
?>