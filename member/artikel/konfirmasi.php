<?php
//untuk memasukkan file config.php dan file koneksi.php
include "../../lib/config.php";
include "../../lib/koneksi.php";
//Ambil data yg dikirim dari form
$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];
// data selain gambar
$id_Premium = $_POST['id_premium'];
$Via = $_POST['via'];
//set path folder tempat menyimpan gambar
$path = "upload/" . $nama_file;

if (!isset($_POST['via']) || !$_POST['via']) {
    echo "<script> alert ('Konfirmasi Pembayaran Gagal, pilih metode pembayaran!'); window.location ='profil.php';</script>";
} else {
    // ================================================================
    if ($tipe_file == "image/jpeg" || $tipe_file == "image/png" || $tipe_file == "image/jpg") {
        if ($ukuran_file <= 1000000) {
            if (move_uploaded_file($tmp_file, $path)) {
                $querySimpan = mysqli_query($con, "UPDATE tbl_bayar SET bukti='$nama_file', via='$Via' WHERE id_premium='$id_Premium'");
                if ($querySimpan) {
                    echo "<script> alert ('Konfirmasi Berhasil dikirim, Silahkan tunggu Status Berganti 1 x 24jam'); window.location ='profil.php';</script> ";
                } else {
                    echo "<script> alert ('Konfirmasi Gagal dikirim'); window.location ='profil.php';</script> ";
                }
            } else {
                echo "<script> alert('Bukti Pembayaran Gagal Dikirim'); window.location ='profil.php';</script> ";
            }
        } else {
            echo "<script> alert('Bukti Pembayaran Gagal Dikirim, ukuran melebihi 1 MB'); window.location ='profil.php';</script> ";
        }
    } else {
        echo "<script> alert('Bukti Pembayaran Gagal Dikirim, ekstensi harus JPG/JPEG/PNG'); window.location ='profil.php';</script> ";
    }
    // ================================================================
}
