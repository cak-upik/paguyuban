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
                                <h3>Input Data Supir</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">

                                <br />

                                <form action="index.php?pgy=supir&do=save" method="post" class="form-horizontal" />
                                <fieldset>
                                    <div class="control-group">
                                        <label class="control-label" for="name">Nama Supir</label>
                                        <div class="controls">
                                            <input type="text" class="input-xxlarge" name="nama" id="nama" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="alamat">Alamat</label>
                                        <div class="controls">
                                            <textarea class="span4" name="alamat" id="alamat" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="kota">Kota</label>
                                        <div class="controls">
                                            <input type="text" class="input-large" name="kota" id="kota" rows="4" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="telp">No. Telp</label>
                                        <div class="controls">
                                            <input type="text" class="input-large" name="telp" id="telp" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="sim">No. SIM</label>
                                        <div class="controls">
                                            <input type="text" class="input-large" name="sim" id="sim" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="nomobil">No. Mobil</label>
                                        <div class="controls">
                                            <input type="text" class="input-large" name="nomobil" id="nomobil" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="merk">Merk Mobil</label>
                                        <div class="controls">
                                            <input type="text" class="input-large" name="merk" id="merk" />
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success btn">Simpan Data</button>&nbsp;&nbsp;
                                        <a href="index.php?pgy=supir&page=view" class="btn btn-danger btn">Batal</a>
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
                                <h3>Form Data Supir</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <section id="tables">
                                    <h3>Data Supir</h3>
                                    <div class="form-actions">
                                        <a href="index.php?pgy=supir&page=create" class="btn btn-primary btn">Tambah Supir</a>
                                        <a href="index.php?pgy=supir&page=edit" class="btn btn-info btn">Edit Supir</a>
                                        <a href="index.php?pgy=supir&page=delete" class="btn btn-danger btn">Hapus Supir</a>

                                    </div>
                                    <table class="table table-bordered table-striped table-highlight">
                                        <thead>
                                            <tr>
                                                <th class="span1">No</th>
                                                <th>Nama Supir</th>
                                                <th>Alamat</th>
                                                <th>Kota</th>
                                                <th>No. Telp</th>
                                                <th>No. SIM</th>
                                                <th>No. Mobil</th>
                                                <th>Merk Mobil</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php LoadSupir(); ?>
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
                                <h3>Form Data Supir</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <section id="tables">
                                    <h3>Data Supir</h3>
                                    <div class="form-actions">
                                        <a href="#" class="btn btn-inverse btn">Tambah Supir</a>
                                        <a href="#" class="btn btn-inverse btn">Edit Supir</a>
                                        <a href="#" class="btn btn-inverse btn">Hapus Supir</a>
                                        <a href="index.php?pgy=supir&page=view" class="btn btn-danger btn">Batal</a>
                                    </div>
                                    <table class="table table-bordered table-striped table-highlight">
                                        <thead>
                                            <tr>
                                                <th class="span1">#</th>
                                                <th>Nama Supir</th>
                                                <th>Alamat</th>
                                                <th>Kota</th>
                                                <th>No. Telp</th>
                                                <th>No. SIM</th>
                                                <th>No. Mobil</th>
                                                <th>Merk Mobil</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php EditSupir(); ?>
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
                                <h3>Input Data Supir</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">

                                <br />

                                <form action="index.php?pgy=supir&do=update" method="post" class="form-horizontal" />
                                <fieldset>
                                    <div class="control-group">
                                        <label class="control-label" for="nama">Nama Supir</label>
                                        <div class="controls">
                                            <input type="text" class="input-xxlarge" name="nama" id="nama" value='<?php echo getValueSupir("nama", $_GET['id'], "id_sopir") ?>'/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="alamat">Alamat</label>
                                        <div class="controls">
                                            <input type="text" class="input-large" name="alamat" id="alamat" value='<?php echo getValueSupir("alamat", $_GET['id'], "id_sopir") ?>'/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="kota">Kota</label>
                                        <div class="controls">
                                            <input type="text" class="input-large" name="kota" id="kota" value='<?php echo getValueSupir("kota", $_GET['id'], "id_sopir") ?>'/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="telp">No. Telp</label>
                                        <div class="controls">
                                            <input type="text" class="input-large" name="telp" id="telp" value='<?php echo getValueSupir("no_tlp", $_GET['id'], "id_sopir") ?>'/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="sim">No. SIM</label>
                                        <div class="controls">
                                            <textarea class="span4" name="sim" id="sim" rows="4"><?php echo getValueSupir("no_sim", $_GET['id'], "id_sopir") ?></textarea>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="nomobil">No. Mobil</label>
                                        <div class="controls">
                                            <input type="text" class="input-large" name="nomobil" id="nomobil" value='<?php echo getValueSupir("no_mobil", $_GET['id'], "id_sopir") ?>' />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="merk">Merk Mobil</label>
                                        <div class="controls">
                                            <input type="text" class="input-large" name="merk" id="merk" value='<?php echo getValueSupir("merk_mobil", $_GET['id'], "id_sopir") ?>' />
                                        </div>
                                    </div>
                                    <input type="hidden" name="idSupir" id="idSupir" value=<?php echo $_GET['id'] ?>>

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success btn">Simpan Data</button>&nbsp;&nbsp;
                                        <a href="index.php?pgy=supir&page=view" class="btn btn-danger btn">Batal</a>
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
                                <h3>Form Data Supir</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <section id="tables">
                                    <h3>Data Supir</h3>
                                    <div class="form-actions">
                                        <a href="#" class="btn btn-inverse btn">Tambah Siswa</a>
                                        <a href="#" class="btn btn-inverse btn">Edit Siswa</a>
                                        <a href="#" class="btn btn-inverse btn">Hapus Siswa</a>
                                        <a href="index.php?pgy=supir&page=view" class="btn btn-danger btn">Batal</a>
                                    </div>
                                    <table class="table table-bordered table-striped table-highlight">
                                        <thead>
                                            <tr>
                                                <th class="span1">#</th>
                                                <th>Nama Supir</th>
                                                <th>Alamat</th>
                                                <th>Kota</th>
                                                <th>No. Telp</th>
                                                <th>No. SIM</th>
                                                <th>No. Mobil</th>
                                                <th>Merk Mobil</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php DeleteSupirView(); ?>
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