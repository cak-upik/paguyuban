<?php
echo "<script type=\"text/javascript\">
        function fill(val){
            if(val==0){
                alert('Val is 0');
            }else {
                alert('Val is 1');
            }
        }
      </script>";
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
                                <h3>Input Data Pembayaran</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">

                                <br />

                                <form action="#" method="post" class="form-horizontal" />
                                <fieldset>
                                    <div class="control-group">
                                        <label class="control-label" for="name">Kode Pembayaran</label>
                                        <div class="controls">
                                            <input type="text" class="input-xxlarge" name="nama" id="nama" value="trx-00001" disabled/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="kelas">Nama Supir</label>
                                        <div class="controls">
                                            <input type="text" class="input-large" name="kelas" id="kelas" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="kelas">Nama Siswa</label>
                                        <div class="controls">
                                            <script type="text/javascript">
                                                $("#test").change(function() {
                                                     alert($("#test :selected").text())
                                                });
                                            </script>
                                            <select name="test" id="test">
                                                <option value="">Siswa 1 </option>
                                                <option value="">Siswa 2 </option>
                                                <option value="">Siswa 3 </option>
                                                <option value="">Siswa 4 </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="kelas">Rute</label>
                                        <div class="controls">
                                            <input type="text" class="input-large" name="kelas" id="kelas" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="status">Jenis Layanan</label>
                                        <div class="controls">
                                            <select id="status" name="status">
                                                <option value="" />Select...
                                                <option value="oneway" />One-Way
                                                <option value="twoway" />Two-Way
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="kelas">Tarif Layanan</label>
                                        <div class="controls">
                                            <input type="text" class="input-large" name="kelas" id="kelas" value="Rp 100.000,00" disabled/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="kelas">Pembayaran</label>
                                        <div class="controls">
                                            <input type="text" class="input-large" name="kelas" id="kelas" />
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success btn">Simpan Data</button>&nbsp;&nbsp;
                                        <a href="index.php?pgy=transaksi&page=view" class="btn btn-danger btn">Batal</a>
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
                                <h3>Form Data Pembayaran</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <section id="tables">
                                    <h3>Data Pembayaran</h3>
                                    <div class="form-actions">
                                    <a href="index.php?pgy=transaksi&page=create" class="btn btn-primary btn">Tambah Pembayaran</a>
                                    <a href="javascript:alert('Under Maintenance')" class="btn btn-info btn">Edit Pembayaran</a>
                                    <a href="javascript:alert('Under Maintenance')" class="btn btn-danger btn">Hapus Pembayaran</a>
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
                                        <?php //LoadSiswa();?>
                                        <tr>
                                            <td colspan=7><center><h4>No Data</h4><center></td>
                                        </tr>
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
                                <h3>Form Data Siswa</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <section id="tables">
                                    <h3>Data Siswa</h3>
                                    <div class="form-actions">
                                    <a href="#" class="btn btn-inverse btn">Tambah Siswa</a>
                                    <a href="#" class="btn btn-inverse btn">Edit Siswa</a>
                                    <a href="#" class="btn btn-inverse btn">Hapus Siswa</a>
                                    <a href="index.php?pgy=siswa&page=view" class="btn btn-danger btn">Batal</a>
                                    </div>
                                    <table class="table table-bordered table-striped table-highlight">
                                        <thead>
                                            <tr>
                                                <th class="span1">#</th>
                                                <th>Nama Siswa</th>
                                                <th>Kelas</th>
                                                <th>Alamat</th>
                                                <th>Email</th>
                                                <th>No.Telp</th>
                                                <th>Layanan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php EditSiswa();?>
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
    } else if($_GET['page'] == 'editor') {
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

                                <form action="index.php?pgy=siswa&do=update" method="post" class="form-horizontal" />
                                <fieldset>
                                    <div class="control-group">
                                        <label class="control-label" for="name">Nama Siswa</label>
                                        <div class="controls">
                                            <input type="text" class="input-xxlarge" name="nama" id="nama" value='<?php echo getValueSiswa("nama_siswa", $_GET['id'],"id_siswa")?>'/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="kelas">Kelas</label>
                                        <div class="controls">
                                            <input type="text" class="input-large" name="kelas" id="kelas" value='<?php echo getValueSiswa("kelas", $_GET['id'],"id_siswa")?>'/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="alamat">Alamat</label>
                                        <div class="controls">
                                            <textarea class="span4" name="alamat" id="alamat" rows="4"><?php echo getValueSiswa("alamat", $_GET['id'],"id_siswa")?></textarea>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="email">Email</label>
                                        <div class="controls">
                                            <input type="email" class="input-large" name="email" id="email" value='<?php echo getValueSiswa("email", $_GET['id'],"id_siswa")?>' />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="telp">No. Telp</label>
                                        <div class="controls">
                                            <input type="text" class="input-large" name="telp" id="telp" value='<?php echo getValueSiswa("alamat", $_GET['id'],"id_siswa")?>' />
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="status">Jenis Layanan</label>
                                        <div class="controls">
                                            <select id="status" name="status">
                                                <option value="" />Select...
                                                <option value="oneway" <?php echo(getValueSiswa("status", $_GET['id'],"id_siswa") == 'oneway')?'selected':''?>>One-Way </option>
                                                <option value="twoway" <?php echo(getValueSiswa("status", $_GET['id'],"id_siswa") == 'twoway')?'selected':''?>>Two-Way </option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" name="idSiswa" id="idSiswa" value=<?php echo $_GET['id']?>>

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
    } else if ($_GET['page'] == 'delete') {
        ?>
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="span12">      		
                        <div class="widget stacked ">
                            <div class="widget-header">
                                <i class="icon-pencil"></i>
                                <h3>Form Data Siswa</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <section id="tables">
                                    <h3>Data Siswa</h3>
                                    <div class="form-actions">
                                    <a href="#" class="btn btn-inverse btn">Tambah Siswa</a>
                                    <a href="#" class="btn btn-inverse btn">Edit Siswa</a>
                                    <a href="#" class="btn btn-inverse btn">Hapus Siswa</a>
                                    <a href="index.php?pgy=siswa&page=view" class="btn btn-danger btn">Batal</a>
                                    </div>
                                    <table class="table table-bordered table-striped table-highlight">
                                        <thead>
                                            <tr>
                                                <th class="span1">#</th>
                                                <th>Nama Siswa</th>
                                                <th>Kelas</th>
                                                <th>Alamat</th>
                                                <th>Email</th>
                                                <th>No.Telp</th>
                                                <th>Layanan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php DeleteSiswaView();?>
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