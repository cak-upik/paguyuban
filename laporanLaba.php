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
                                <h3>Form Laporan Laba</h3>
                            </div> <!-- /widget-header -->
                            <div class="widget-content">
                                <section id="tables">
                                    <h3>Laporan Laba</h3>
                                    <br />
                                    <form action="index.php?pgy=profit&page=detail" method="post" class="form-horizontal" />
                                    <fieldset>
                                        <div class="control-group">
                                            <label class="control-label" for="name">Bulan</label>
                                            <div class="controls">
                                                <input type="text" class="input-large" name="bln" id="datepicker" />
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="form-actions">
                                        <!--<a href="index.php?pgy=laporan-pembayaran&page=detail" class="btn btn-info btn">Detail</a>-->
                                        <button type="submit" class="btn btn-success">&nbsp;&nbsp;Cari&nbsp;&nbsp;&nbsp;</button>
                                        <!--<a href="index.php?pgy=laporan-pembayaran&page=cetak" class="btn btn-success btn">Cetak</a>-->
                                    </div>
                                    </form>
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
                                <h3>Form Laporan Laba</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <section id="tables">
                                    <h3>Laporan Laba</h3>
                                    <table class="table table-bordered table-striped table-highlight">
                                        <thead>
                                            <tr>
                                                <th class="span1"><center>Bulan</center></th>
                                                <th class="span3"><center>Jumlah Transaksi</center></th>
                                                <th class="span3"><center>Jumlah Pembayaran</center></th>
                                                <th class="span3"><center>Jumlah Laba</center></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $tgl = date('Y-m-d', strtotime($_POST['bln']));
                                            searchTerm($tgl); 
                                            ?>
                                        </tbody>
                                    </table>
                                    <br />
                                </section>
                                <div class="form-actions">
                                    <a href="index.php?pgy=profit&page=cetak" class="btn btn-success btn">&nbsp;&nbsp;Cetak&nbsp;&nbsp;</a>
                                    <a href="index.php?pgy=profit&page=view" class="btn btn-danger btn">Kembali</a>
                                </div>
                            </div> <!-- /widget-content -->
                        </div> <!-- /widget -->
                    </div> <!-- /span12 -->
                </div>
            </div>
        </div>
        <?php
    } else if ($_GET['page'] == 'detailer') {
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