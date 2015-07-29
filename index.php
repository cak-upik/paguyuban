<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Dashboard :: E-Car</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />    

        <link href="./css/bootstrap.min.css" rel="stylesheet" />
        <link href="./css/bootstrap-responsive.min.css" rel="stylesheet" />

        <!--<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet" />-->
        <link href="./css/font-awesome.min.css" rel="stylesheet" />        

        <link href="./css/ui-lightness/jquery-ui-1.10.0.custom.min.css" rel="stylesheet" />
        <!--        <link href="./css/plugins/jquery-min-ui.css" rel="stylesheet" />
                <link href="./css/plugins/jquery-ui.css" rel="stylesheet" />-->

        <link href="./css/base-admin-2.css" rel="stylesheet" />
        <link href="./css/base-admin-2-responsive.css" rel="stylesheet" />

        <link href="./css/pages/dashboard.css" rel="stylesheet" />   
        <link href="./css/pages/plans.css" rel="stylesheet" /> 

        <link href="./css/custom.css" rel="stylesheet" />

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>

        <?php
        include './header.php';
        include './menu.php';
        include './connection.php';
        include './crudDao.php';

        session_start();
        $admin = $_GET['pgy'];
        $act = $_GET['do'];
        if (isset($admin)) {
            if ($admin == 'home') {
                include 'dashboard.php';
            } else if ($admin == 'siswa') {
                switch ($act) {
                    case "save" :
                        $namaVal = $_POST['nama'];
                        $wali = $_POST['namaortu'];
                        $kelas = $_POST['kelas'];
                        $alamat = $_POST['alamat'];
                        $email = $_POST['email'];
                        $telp = $_POST['telp'];
                        SaveSiswa($namaVal, $wali, $alamat, $kelas, $email, $telp);
                    case "update" :
                        $namaVal = $_POST['nama'];
                        $wali = $_POST['namaortu'];
                        $kelas = $_POST['kelas'];
                        $alamat = $_POST['alamat'];
                        $email = $_POST['email'];
                        $telp = $_POST['telp'];
                        $id = $_POST['idSiswa'];
                        UpdateSiswa($namaVal, $wali, $kelas, $alamat, $email, $telp, $id);
                    case "delete" :
                        $idSiswa = $_GET['id'];
                        DeleteSiswa($idSiswa);
                    default :
                        include 'frmSiswa.php';
                }
            } else if ($admin == 'supir') {
                switch ($act) {
                    case "save" :
                        $namaVal = $_POST['nama'];
                        $alamat = $_POST['alamat'];
                        $kota = $_POST['kota'];
                        $telp = $_POST['telp'];
                        $sim = $_POST['sim'];
                        $nomobil = $_POST['nomobil'];
                        $merk = $_POST['merk'];
                        SaveSupir($namaVal, $alamat, $kota, $telp, $sim, $nomobil, $merk);
                    case "update" :
                        $namaVal = $_POST['nama'];
                        $alamat = $_POST['alamat'];
                        $kota = $_POST['kota'];
                        $telp = $_POST['telp'];
                        $sim = $_POST['sim'];
                        $nomobil = $_POST['nomobil'];
                        $merk = $_POST['merk'];
                        $id = $_POST['idSupir'];
                        UpdateSupir($namaVal, $alamat, $kota, $telp, $sim, $nomobil, $merk, $id);
                    case "delete" :
                        $idSupir = $_GET['id'];
                        DeleteSupir($idSupir);
                    default :
                        include 'driver.php';
                }
            } else if ($admin == 'karyawan') {
                switch ($act) {
                    case "save" :
                        $namaVal = $_POST['nama'];
                        $tempat = $_POST['tempat'];
                        $tanggal = $_POST['tanggal'];
                        $alamat = $_POST['alamat'];
                        $email = $_POST['email'];
                        $telp = $_POST['telp'];
                        $jabatan = $_POST['jabatan'];
                        SaveKaryawan($namaVal, $tempat, $tanggal, $alamat, $email, $telp, $jabatan);
                    case "update" :
                        $namaVal = $_POST['nama'];
                        $tempat = $_POST['tempat'];
                        $tanggal = $_POST['tanggal'];
                        $alamat = $_POST['alamat'];
                        $email = $_POST['email'];
                        $telp = $_POST['telp'];
                        $jabatan = $_POST['jabatan'];
                        $id = $_POST['idKaryawan'];
                        UpdateKaryawan($namaVal, $tempat, $tanggal, $alamat, $email, $telp, $jabatan, $id);
                    case "delete" :
                        $idKaryawan = $_GET['id'];
                        DeleteKaryawan($idKaryawan);
                    default :
                        include 'employee.php';
                }
            } else if ($admin == 'rute') {
                switch ($act) {
                    case "save" :
                        $namaVal = $_POST['nama'];
                        $kota = $_POST['kota'];
                        $tarif = $_POST['tarif'];
                        SaveRute($namaVal, $kota, $tarif);
                    case "update" :
                        $namaVal = $_POST['nama'];
                        $kota = $_POST['kota'];
                        $tarif = $_POST['tarif'];
                        $id = $_POST['idRute'];
                        UpdateRute($namaVal, $kota, $tarif, $id);
                    case "delete" :
                        $idRute = $_GET['id'];
                        DeleteRute($idRute);
                    default :
                        include 'route.php';
                }
            } else if ($admin == 'enroll') {
                switch ($act) {
                    case "save" :
                        $siswa = $_POST['siswa'];
                        $supir = $_POST['supir'];
                        $rute = $_POST['rute'];
                        $layanan = $_POST['layanan'];
                        $id = $_POST['siswa'];
                        SaveLayanan($layanan, $supir, $rute, $id);
                    case "update" :
                        $siswa = $_POST['siswa'];
                        $supir = $_POST['supir'];
                        $rute = $_POST['rute'];
                        $layanan = $_POST['layanan'];
                        $id = $_POST['idSiswa'];
                        SaveLayanan($layanan, $supir, $rute, $id);
                    case "delete" :
                        $id = $_GET['id'];
                        DeleteLayanan($id);
                    default :
                        include 'enroll.php';
                }
            } else if ($admin == 'pembayaran-siswa') {
                include 'payment_student.php';
            } else if ($admin == 'pembayaran-sopir') {
                include 'payment_driver.php';
            } else if ($admin == 'laporan-pembayaran') {
                include 'laporanPembayaran.php';
            } else if ($admin == 'laporan-laba') {
                include 'provit.php';
            } else if ($admin == 'user-manage') {
                switch ($act) {                    
                    case "save" :
                        $usernames = $_POST['username'];
                        $password = $_POST['password'];
                        $nama = $_POST['name'];
                        $email = $_POST['email'];
                        $role = $_POST['role'];
                        $checked = $_POST['checkboxs'];
                        SaveUser($usernames, $password, $nama, $role, $email, $checked);
                    
                    default :
                        include 'user.php';
                }
            } else if ($admin == 'profile') {
                include 'profile.php';
            } else if ($admin == 'layout') {
                include 'layout.php';
            } else if ($admin == 'transaksi') {
                switch ($act) {
                    case "save" :
                        $kode = $_POST['kode'];
                        $siswa = $_POST['student'];
                        $supir = $_POST['sopir'];
                        $rute = $_POST['rute'];
                        $tgl = $_POST['tanggal'];
                        $id = $_POST['siswa'];
                        $cli = $_POST['closingInt'];
                        echo $cli;
                        SaveTransaksi($kode, $siswa, $supir, $rute, $tgl, $total, $cli, $cls);
//                    case "update" :
//                        $siswa = $_POST['siswa'];
//                        $supir = $_POST['supir'];
//                        $rute = $_POST['rute'];
//                        $layanan = $_POST['layanan'];
//                        $id = $_POST['idSiswa'];
//                        SaveLayanan($layanan, $supir, $rute, $id);
//                    case "delete" :
//                        $id = $_GET['id'];
//                        DeleteLayanan($id);
                    default :
                        include 'transaction.php';
                }
            } else if ($admin == 'logout') {
                include 'logout.php';
            }
        } else {
            echo "<script>javascript:window.location.replace('index.php?pgy=home');</script>";
        }
        ?>

        <div class="footer">

            <div class="container">

                <div class="row">

                    <div id="footer-copyright" class="span6">
                        &copy; 2015 Paguyuban.
                    </div> 
                </div> <!-- /row -->
            </div> <!-- /container -->
        </div> <!-- /footer -->


        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="./js/libs/jquery-1.8.3.min.js"></script>
        <script src="./js/libs/jquery-ui-1.10.0.custom.min.js"></script>
        <script src="./js/libs/bootstrap.min.js"></script>

        <script src="./js/plugins/flot/jquery.flot.js"></script>
        <script src="./js/plugins/flot/jquery.flot.pie.js"></script>
        <script src="./js/plugins/flot/jquery.flot.resize.js"></script>

        <script src="./js/Application.js"></script>

        <script src="./js/charts/area.js"></script>
        <script src="./js/charts/donut.js"></script>

    </body>
</html>
