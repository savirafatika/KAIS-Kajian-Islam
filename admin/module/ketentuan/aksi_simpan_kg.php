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
	$kategori = $_POST['Kategori'];
	$view = $_POST['View'];
	$sub = $_POST['Subscribe'];
	$gaji = $_POST['Gaji'];
	//query untuk menyimpan ke tabel tbl_kategori
	$querySimpan = mysqli_query($con,"INSERT INTO tbl_ketentuan_gaji (kategori_guru, view, sub ,gaji) VALUES ('$kategori', '$view', '$sub', '$gaji')");
	//jika query berhasil maka akan tampil alert dan halaman akan kembali ke daftar kategori
	if ($querySimpan) {
		echo "<script> alert ('Data Ketentuan Penggajian berhasil masuk'); window.location ='$admin_url'+'adminweb.php?module=ketentuan_gaji';</script> ";
	} else {
		echo "<script> alert ('Data Ketentuan Penggajian gagal dimasukan'); window.location ='$admin_url'+'adminweb.php?module=tambah_kg';</script> ";
	}
}
?>