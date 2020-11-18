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
    <div class="regular-page-wrap">
        <div class="header" style="color: #EAC15B;">
            <table>
                <tr>
                    <td><a style="color: #EAC15A;" href="profil.php">
                            <img src="S.png" alt="Logo KAIS" width="100px" height="100px"></a></td>
                    <td>
                        <h1 style="color: #EAC15B;"><i class="fas fa-h1"><b>&ensp;Kajian Islam</b></i></h1>
                    </td>
                </tr>
            </table>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div>
                    <div class="page-content">
                        <h3>Berlangganan dan Tagihan</h3>
                        <div class="box-body">
                            <div class="form-group">
                                <table>
                                    <tr>
                                        <td>Periode</td>
                                        <td>&ensp; : &ensp;</td>
                                        <td><?= $usr2['periode']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Beli</td>
                                        <td>&ensp; : &ensp;</td>
                                        <td><?= $usr2['tgl_daftar']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jatuh Tempo</td>
                                        <td>&ensp; : &ensp;</td>
                                        <td><?= $usr2['tgl_jatuh_tempo']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tagihan</td>
                                        <td>&ensp; : &ensp;</td>
                                        <td><?= $usr2['tagihan']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Status Bayar</td>
                                        <td>&ensp; : &ensp;</td>
                                        <td><?= $usr2['status_bayar']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Bayar</td>
                                        <td>&ensp; : &ensp;</td>
                                        <td><?= $usr2['tgl_bayar']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Bayar</td>
                                        <td>&ensp; : &ensp;</td>
                                        <td><?= $usr2['tagihan']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Metode Pembayaran</td>
                                        <td>&ensp; : &ensp;</td>
                                        <td>
                                            <?php
                                            $v = $usr2['via'];
                                            if ($v == 'pp') {
                                                echo '<img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_100x26.png" height="50" width="100">';
                                            } else if ($v == 'bni') {
                                                echo '<img src="bni.png" height="50" width="100">';
                                            } elseif ($v == 'bca') {
                                                echo '<img src="bca.png" height="50" width="100">';
                                            } elseif ($v == 'bri') {
                                                echo '<img src="bri.png" height="50" width="100">';
                                            } elseif ($v == 'mandiri') {
                                                echo '<img src="mandiri.jpg" height="50" width="100">';
                                            } elseif ($v == 'ovo') {
                                                echo '<img src="ovo.png" height="50" width="100">';
                                            } elseif ($v == 'gopay') {
                                                echo '<img src="gopay.png" height="50" width="100">';
                                            } elseif ($v == 'dana') {
                                                echo '<img src="dana.png" height="50" width="100">';
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bukti Pembayaran</td>
                                        <td>&ensp; : &ensp;</td>
                                        <td><img src="upload/<?php echo $usr2['bukti']; ?>" height="100" width="150"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

<script>
    window.print();
</script>