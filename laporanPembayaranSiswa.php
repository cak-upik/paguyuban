<?php
if (isset($_GET['page'])) {
    ?>
    <script src="./js/jquery-1-11-1.min.js"></script>
    <script src="./js/jquery-ui.js"></script>
    <script src="./js/jquery-1.10.2.js"></script>
    <script src="./js/helper.js"></script>
    <?php
    if ($_GET['page'] == 'view') {
        ?>
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="span12">      		
                        <div class="widget stacked ">
                            <div class="widget-header">
                                <i class="icon-pencil"></i>
                                <h3>Form Laporan Pembayaran Siswa</h3>
                            </div> <!-- /widget-header -->
                            <div class="widget-content">
                                <section id="tables">
                                    <section id="tables">
                                        <h3>Laporan Pembayaran Siswa</h3>
                                        <section id="tables">
                                            <form action="index.php?pgy=lap-pembayaran-siswa&page=detail" method="post" class="form-horizontal" />
                                            <div class="control-group">
                                                <label class="control-label" for="supir">Nama Supir</label>
                                                <div class="controls">
                                                    <select name="student" id="student" class="input-large">
                                                        <option name="0">-Pilih-</option>
                                                        <?php
                                                        $query = mysql_query("SELECT id_siswa, nama_siswa FROM siswa");
                                                        while ($a = mysql_fetch_array($query)) {
                                                            echo"<option value='$a[id_siswa]'>$a[nama_siswa]</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="date">Filter Tanggal</label>
                                                <div class="controls">
                                                    <?php
                                                    $date_start = begin_date_month();
                                                    $date_end = last_date_month();
                                                    ?>
                                                    <input type="date" name="date1" class="input-medium" value="<?php echo $date_start; ?>" />
                                                    <span class="add-on"> Sampai </span>
                                                    <input type="date" name="date2" class="input-medium" value="<?php echo $date_end; ?>" />
                                                </div>	
                                            </div>
                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-inverse">Cari</button> 
                                                <button class="btn">Cancel</button>
                                            </div> 
                                            </form>                                    
                                        </section>
                                        <br />
                                    </section>
                            </div> <!-- /widget-content -->
                        </div> <!-- /widget -->
                    </div> <!-- /span12 -->
                </div>
            </div>
        </div>
        <?php
    } else if ($_GET['page'] == 'detail') {
        ?>
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="span12">      		
                        <div class="widget stacked ">
                            <div class="widget-header">
                                <i class="icon-pencil"></i>
                                <h3>Form Laporan Pembayaran Siswa</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <section id="tables">
                                    <h3>Laporan Pembayaran Siswa</h3>
                                    <table class="table table-bordered table-striped table-highlight">
                                        <thead>
                                            <tr>
                                                <th class="span1"><center>Kode Transaksi</center></th>
                                        <th class="span3"><center>Nama Siswa</center></th>
                                        <th class="span3"><center>Nominal Pembayaran</center></th>
                                        <th class="span3"><center>Tanggal Pembayaran</center></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $all = $_POST['allMonths'];
                                            $nama = $_POST['siswa'];
                                            $tgl = date('Y-m-d', strtotime($_POST['bln']));
                                            if ($all == 1)
                                                searchAllSiswa();
                                            else
                                                searchSiswa($nama, $tgl);
                                            ?>
                                        </tbody>
                                    </table>
                                    <br />
                                </section>
                                <div class="form-actions">
                                    <a href="index.php?pgy=profit&page=cetak" class="btn btn-success btn">&nbsp;&nbsp;Cetak&nbsp;&nbsp;</a>
                                    <a href="index.php?pgy=lap-pembayaran-siswa&page=view" class="btn btn-danger btn">Kembali</a>
                                </div>
                            </div> <!-- /widget-content -->
                        </div> <!-- /widget -->
                    </div> <!-- /span12 -->
                </div>
            </div>
        </div>
        <?php
    } else if ($_GET['page'] == 'cetak') {
        ?>
        <div class="main">

            <div class="container">

                <div class="row">

                    <div class="span12">

                        <div class="widget stacked">

                            <div class="widget-header">
                                <a href="index.php?pgy=laporan-pembayaran&page=view" class="btn btn-navbar"><i class="icon-chevron-left"></i><i class="icon-edit"></i></a>
                                <h3>Detail Kartu Pembayaran</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">

                                <div class="row-fluid">
                                    <div class="span2">
                                        <label class="control-label" for="name">Nama Siswa</label>
                                        <label class="control-label" for="name">Nama Orang Tua</label>
                                        <label class="control-label" for="name">Alamat</label>
                                        <label class="control-label" for="name">Telp / Hp</label>
                                        <label class="control-label" for="name">Kelas</label>
                                        <label class="control-label" for="name">Tarif</label>
                                        <label class="control-label" for="name">Sopir</label>
                                        <label class="control-label" for="name">Pilihan</label>
                                    </div>                                    
                                    <div class="span10">
                                        <?php ShowDetailIdentity($_GET['id']); ?>
                                    </div>
                                </div>
                                <br />

                                <table class="table table-bordered table-striped table-highlight">
                                    <thead>
                                        <tr>
                                            <th class="span1" rowspan=2>Tanggal</th>
                                            <th class="span1" rowspan=2>Bulan</th>
                                            <th class="span3" rowspan=2>Nominal</th>
                                            <th class="span2" colspan=2>Tanda Tangan</th>
                                        </tr>
                                        <tr>
                                            <th class="span1">Orang Tua</th>
                                            <th class="span1">Petugas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php ShowDetailTransaction($_GET['id']); ?>
                                    </tbody>
                                </table>

                            </div> <!-- /widget-content -->

                        </div> <!-- /widget -->					

                    </div> <!-- /span12 -->     	


                </div> <!-- /row -->

            </div> <!-- /container -->

        </div> <!-- /main -->
        <?php
    }
}