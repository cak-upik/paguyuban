<?php
include './helper.php';
if (isset($_GET['page'])) {
    ?>
    <script src="./js/jquery-1-11-1.min.js"></script>
    <script src="./js/jquery-ui.js"></script>
    <script src="./js/jquery-1.10.2.js"></script>
    <script src="./js/calculate.js"></script>            

    <?php
    if ($_GET['page'] == 'create') {
        ?>
        <div class="main">

            <div class="container">

                <div class="row">

                    <div class="span12">

                        <div class="widget stacked">

                            <div class="widget-header">
                                <i class="icon-check"></i>
                                <h3>Input Data Pembayaran</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <br />
                                <form action="index.php?pgy=transaksi&do=save" method="post" class="form-horizontal">
                                    <!--<fieldset>-->
                                    <div class="row-fluid">
                                        <div class="span6">
                                            <div class="control-group">
                                                <label class="control-label" for="kodeTrx">Kode Pembayaran</label>
                                                <div class="controls">
                                                    <input type="text" class="input-large" name="kodeTrx" id="kodeTrx" value='<?php echo codeTrx(); ?>' disabled/>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="siswa">Nama Siswa</label>
                                                <div class="controls">
                                                    <!--<select name="student" id="student"></select>-->
                                                    <select name="student" id="student">
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
                                                <label class="control-label" for="sopir">Nama Supir</label>
                                                <div class="controls">
                                                    <input type="text" class="input-large" name="sopir" id="sopir" readonly=""/>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="rute">Rute</label>
                                                <div class="controls">
                                                    <input type="text" name="rute" id="rute" class="input-large" readonly=""/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="span6">                                        
                                            <div class="control-group">
                                                <label class="control-label" for="tanggal">Tanggal Pembayaran</label>
                                                <div class="controls">
                                                    <input type="text" name="tanggal" id="datepicker" class="input-large"/>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="service">Jenis Layanan</label>
                                                <div class="controls">
                                                    <input type="text" name="service" id="service" class="input-large" readonly=""/>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="tarif">Tarif Layanan</label>
                                                <div class="controls">
                                                    <div class="input-prepend">
                                                        <span class="add-on">Rp</span>                     
                                                        <input type="text" class="span9 " name="layanan" id="layanan" style="text-align: left;" readonly=""/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label" for="bayar">Pembayaran</label>
                                                <div class="controls">
                                                    <div class="input-prepend">
                                                        <span class="add-on">Rp</span>
                                                        <input type="text" class="span9" name="payment" id="payment"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="kodeTrans" id="kodeTrans" value="<?php echo codeTrx(); ?>">
                                            <input type="hidden" name="id_supir" id="id_supir">
                                            <input type="hidden" name="id_rute" id="id_rute">
                                            <input type="hidden" name="closingInt" id="closingInt"/>
                                            <input type="hidden" name="closingSupir" id="closingSupir"/>
                                        </div>
                                    </div>    
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success btn">Simpan Data</button>&nbsp;&nbsp;
                                        <a href="index.php?pgy=transaksi&page=view" class="btn btn-danger btn">Batal</a>
                                    </div>
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
                                <h3>Form Transaksi Pembayaran</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <section id="tables">
                                    <h3>Data Transaksi Pembayaran</h3>
                                    <div class="form-actions">
                                        <a href="index.php?pgy=transaksi&page=create" class="btn btn-primary btn">Tambah Pembayaran</a>
                                        <a href="index.php?pgy=transaksi&page=edit" class="btn btn-info btn">Edit Pembayaran</a>
                                        <a href="index.php?pgy=transaksi&page=delete" class="btn btn-danger btn">Hapus Pembayaran</a>
                                    </div>
                                    <table class="table table-bordered table-striped table-highlight">
                                        <thead>
                                            <tr>
                                                <th class="span1"><center>Kode</center></th>
                                        <th class="span3"><center>Nama Supir</center></th>
                                        <th class="span3"><center>Nama Siswa</center></th>
                                        <th class="span3"><center>Rute</center></th>
                                        <th class="span2"><center>Tgl Pembayaran</center></th>
                                        <th class="span1"><center>Layanan</center></th>
                                        <th class="span3"><center>Total Pembayaran</center></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php LoadTransaksi(); ?>
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
    } else if ($_GET['page'] == 'edit') {
        ?>
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="span12">      		
                        <div class="widget stacked ">
                            <div class="widget-header">
                                <i class="icon-pencil"></i>
                                <h3>Form Transaksi Pembayaran</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <section id="tables">
                                    <h3>Data Transaksi Pembayaran</h3>
                                    <div class="form-actions">
                                        <a href="#" class="btn btn-inverse btn">Tambah Pembayaran</a>
                                        <a href="#" class="btn btn-inverse btn">Edit Pembayaran</a>
                                        <a href="#" class="btn btn-inverse btn">Hapus Pembayaran</a>
                                        <a href="index.php?pgy=transaksi&page=view" class="btn btn-danger btn">Batal</a>
                                    </div>
                                    <table class="table table-bordered table-striped table-highlight">
                                        <thead>
                                            <tr>
                                                <th class="span1">#</th>
                                                <th class="span1"><center>Kode</center></th>
                                        <th class="span3"><center>Nama Supir</center></th>
                                        <th class="span3"><center>Nama Siswa</center></th>
                                        <th class="span3"><center>Rute</center></th>
                                        <th class="span2"><center>Tgl Pembayaran</center></th>
                                        <th class="span1"><center>Layanan</center></th>
                                        <th class="span3"><center>Total Pembayaran</center></th>                                           
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php EditTransaksi(); ?>
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
    } else if ($_GET['page'] == 'editor') {
        ?>
        <div class="main">

            <div class="container">

                <div class="row">

                    <div class="span12">

                        <div class="widget stacked">

                            <div class="widget-header">
                                <i class="icon-check"></i>
                                <h3>Update Data Transaksi</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <br />
                                <form action="index.php?pgy=transaksi&do=update" method="post" class="form-horizontal" />
                                <!--<fieldset>-->
                                <div class="row-fluid">
                                    <div class="span6">
                                        <div class="control-group">
                                            <label class="control-label" for="kode">Kode Pembayaran</label>
                                            <div class="controls">
                                                <input type="text" class="input-large" name="kode" id="kode" value="<?php getValueTransaksi("kode_bayar", $_GET['id']) ?>" disabled=""/>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="siswa">Nama Siswa</label>
                                            <div class="controls">
                                                <input type="text" class="input-large" name="siswa" id="siswa" value="<?php getValueTransaksi("nama_siswa", $_GET['id']) ?>" disabled=""/>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="supir">Nama Supir</label>
                                            <div class="controls">
                                                <input type="text" class="input-large" name="supir" id="supir" value="<?php getValueTransaksi("nama", $_GET['id']) ?>" disabled=""/>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="rute">Rute</label>
                                            <div class="controls">
                                                <input type="text" class="input-large" name="rute" id="rute" value="<?php getValueTransaksi("nama_rute", $_GET['id']) ?>" disabled=""/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span6">                                        
                                        <div class="control-group">
                                            <label class="control-label" for="tanggal">Tanggal Pembayaran</label>
                                            <div class="controls">
                                                <input type="text" class="input-large" name="tanggal" id="datepicker" value="<?php getValueTransaksi("tanggal_bayar", $_GET['id']) ?>" />
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="layanan">Jenis Layanan</label>
                                            <div class="controls">
                                                <input type="text" class="input-large" name="layanan" id="layanan" value="<?php getValueTransaksi("layanan", $_GET['id']) ?>" disabled=""/>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="tarif">Tarif Layanan</label>
                                            <div class="controls">
                                                <div class="input-prepend">
                                                    <span class="add-on">Rp</span>                     
                                                    <input type="text" class="input-large" name="tarif" id="tarif" value="<?php getValueTransaksi("tarif", $_GET['id']) ?>" disabled=""/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="bayar">Pembayaran</label>
                                            <div class="controls">
                                                <div class="input-prepend">
                                                    <span class="add-on">Rp</span>
                                                    <input type="text" class="input-large" name="bayar" id="bayar" value="<?php getValueTransaksi('total_bayar', $_GET['id']) ?>" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success btn">Simpan Data</button>&nbsp;&nbsp;
                                    <a href="index.php?pgy=transaksi&page=view" class="btn btn-danger btn">Batal</a>
                                </div>
                                </form>
                            </div> <!-- /widget-content -->

                        </div> <!-- /widget -->					

                    </div> <!-- /span12 -->     	


                </div> <!-- /row -->

            </div> <!-- /container -->

        </div> <!-- /main -->
        <?php
    } else if ($_GET['page'] == 'delete') {
        ?>
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="span12">      		
                        <div class="widget stacked ">
                            <div class="widget-header">
                                <i class="icon-pencil"></i>
                                <h3>Form Transaksi Pembayaran</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <section id="tables">
                                    <h3>Data Transaksi Pembayaran</h3>
                                    <div class="form-actions">
                                        <a href="#" class="btn btn-inverse btn">Tambah Pembayaran</a>
                                        <a href="#" class="btn btn-inverse btn">Edit Pembayaran</a>
                                        <a href="#" class="btn btn-inverse btn">Hapus Pembayaran</a>
                                        <a href="index.php?pgy=transaksi&page=view" class="btn btn-danger btn">Batal</a>
                                    </div>
                                    <table class="table table-bordered table-striped table-highlight">
                                        <thead>
                                            <tr>
                                                <th class="span1">#</th>
                                                <th class="span1"><center>Kode</center></th>
                                        <th class="span3"><center>Nama Supir</center></th>
                                        <th class="span3"><center>Nama Siswa</center></th>
                                        <th class="span3"><center>Rute</center></th>
                                        <th class="span2"><center>Tgl Pembayaran</center></th>
                                        <th class="span1"><center>Layanan</center></th>
                                        <th class="span3"><center>Total Pembayaran</center></th>                                    
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php DeleteTransaksiView(); ?>
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
    }
}