<?php
if (isset($_GET['page'])) {
    if ($_GET['page'] == 'create') {
        ?>
        <div class="main">

            <div class="container">

                <div class="row">

                    <div class="span12">

                        <div class="widget stacked">

                            <div class="widget-header">
                                <i class="icon-check"></i>
                                <h3>Input Data Siswa</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">

                                <br />

                                <form action="index.php?pgy=siswa&do=save" method="post" class="form-horizontal" />
                                <fieldset>
                                    <div class="control-group">
                                        <label class="control-label" for="name">Nama Siswa</label>
                                        <div class="controls">
                                            <input type="text" class="input-xxlarge" name="nama" id="nama" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="namaortu">Nama OrangTua/Wali</label>
                                        <div class="controls">
                                            <input type="text" class="input-xxlarge" name="namaortu" id="namaortu" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="kelas">Kelas</label>
                                        <div class="controls">
                                            <input type="text" class="input-large" name="kelas" id="kelas" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="alamat">Alamat</label>
                                        <div class="controls">
                                            <textarea class="span4" name="alamat" id="alamat" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="email">Email</label>
                                        <div class="controls">
                                            <input type="email" class="input-large" name="email" id="email" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="telp">No. Telp</label>
                                        <div class="controls">
                                            <input type="text" class="input-large" name="telp" id="telp" />
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success btn">Simpan Data</button>&nbsp;&nbsp;
                                        <a href="index.php?pgy=siswa&page=view" class="btn btn-danger btn">Batal</a>
                                    </div>
                                </fieldset>
                                </form>

                            </div> <!-- /widget-content -->

                        </div> <!-- /widget -->					

                    </div> <!-- /span12 -->     	


                </div> <!-- /row -->

            </div> <!-- /container -->

        </div> <!-- /main -->
        <?php
    } else if ($_GET['page'] == 'view') {
        ?>
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="span12">      		
                        <div class="widget stacked ">
                            <div class="widget-header">
                                <i class="icon-pencil"></i>
                                <h3>Form Kartu Pembayaran</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <section id="tables">
                                    <h3>Kartu Pembayaran</h3>
                                    <div class="form-actions">
                                        <a href="index.php?pgy=laporan-pembayaran&page=detail" class="btn btn-info btn">Detail</a>
                                        <a href="index.php?pgy=laporan-pembayaran&page=cetak" class="btn btn-success btn">Cetak</a>
                                    </div>
                                    <table class="table table-bordered table-striped table-highlight">
                                        <thead>
                                            <tr>
                                                <th class="span0"<center>No</center></th>
                                                <th class="span2"><center>Kode Transaksi</center></th>
                                                <th class="span4"><center>Nama Siswa</center></th>
                                                <th class="span0"><center>Kelas</center></th>
                                                <th class="span3"><center>Nama Sopir</center></th>
                                                <th class="span2"><center>Tgl.Pembayaran</center></th>
                                                <th class="span2"><center>Tarif</center></th>
                                                <th class="span3"><center>Total</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php LoadLaporanKartu(); ?>
                                        </tbody>
                                    </table>
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
                                <h3>Form Kartu Pembayaran</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <section id="tables">
                                    <h3>Kartu Pembayaran</h3>
                                    <div class="form-actions">
                                        <a href="#" class="btn btn-inverse btn">Detail</a>
                                        <a href="#" class="btn btn-inverse btn">Cetak</a>
                                        <a href="index.php?pgy=laporan-pembayaran&page=view" class="btn btn-danger btn">Batal</a>
                                    </div>
                                    <table class="table table-bordered table-striped table-highlight">
                                        <thead>
                                            <tr>
                                                <th class="span0"<center>#</center></th>
                                                <th class="span2"><center>Kode Transaksi</center></th>
                                                <th class="span4"><center>Nama Siswa</center></th>
                                                <th class="span0"><center>Kelas</center></th>
                                                <th class="span3"><center>Nama Sopir</center></th>
                                                <th class="span2"><center>Tgl.Pembayaran</center></th>
                                                <th class="span2"><center>Tarif</center></th>
                                                <th class="span3"><center>Total</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php DetailView(); ?>
                                        </tbody>
                                    </table>
                                    <br />
                                </section>
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

                                <table class="table table-bordered table-striped table-highlight span6">
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