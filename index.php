<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Dashboard :: E-Car</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />    

        <link href="./css/bootstrap.min.css" rel="stylesheet" />
        <link href="./css/bootstrap-responsive.min.css" rel="stylesheet" />

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet" />
        <link href="./css/font-awesome.min.css" rel="stylesheet" />        

        <link href="./css/ui-lightness/jquery-ui-1.10.0.custom.min.css" rel="stylesheet" />

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
        include './siswaDao.php';
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
                        $kelas = $_POST['kelas'];
                        $alamat = $_POST['alamat'];
                        $email = $_POST['email'];
                        $telp = $_POST['telp'];
                        $status = $_POST['status'];
                        SaveSiswa($namaVal, $kelas, $alamat, $email, $telp, $status);
                    default :
                        include 'frmSiswa.php';
                }
            } else if ($admin == 'sopir') {
                include 'driver.php';
            } else if ($admin == 'pegawai') {
                include 'employee.php';
            } else if ($admin == 'rute') {
                include 'route.php';
            } else if ($admin == 'pembayaran-siswa') {
                include 'payment_student.php';
            } else if ($admin == 'pembayaran-sopir') {
                include 'payment_driver.php';
            } else if ($admin == 'laporan-pembayaran') {
                include 'report_payment.php';
            } else if ($admin == 'laporan-laba') {
                include 'provit.php';
            } else if ($admin == 'user-manage') {
                include 'user.php';
            } else if ($admin == 'profile') {
                include 'profile.php';
            }
        } else {
            header('location:./index.php?admin=home');
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
