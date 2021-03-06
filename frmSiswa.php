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
                                <h3>Form Data Siswa</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <section id="tables">
                                    <h3>Data Siswa</h3>
                                    <div class="form-actions">
                                        <a href="index.php?pgy=siswa&page=create" class="btn btn-primary btn">Tambah Siswa</a>
                                        <a href="index.php?pgy=siswa&page=edit" class="btn btn-info btn">Edit Siswa</a>
                                        <a href="index.php?pgy=siswa&page=delete" class="btn btn-danger btn">Hapus Siswa</a>
                                    </div>
                                    <table class="table table-bordered table-striped table-highlight">
                                        <thead>
                                            <tr>
                                                <th class="span1">No</th>
                                                <th>Nama Siswa</th>
                                                <th>Nama OrangTua/Wali</th>
                                                <th>Kelas</th>
                                                <th>Alamat</th>
                                                <th>Email</th>
                                                <th>No.Telp</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php LoadSiswa(); ?>
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
                                                <th>Nama OrangTua/Wali</th>
                                                <th>Alamat</th>
                                                <th>Kelas</th>
                                                <th>Email</th>
                                                <th>No.Telp</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php EditSiswa(); ?>
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
                                <h3>Input Data Siswa</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <br />

                                <form action="index.php?pgy=siswa&do=update" method="post" class="form-horizontal" />
                                <fieldset>
                                    <div class="control-group">
                                        <label class="control-label" for="name">Nama Siswa</label>
                                        <div class="controls">
                                            <input type="text" class="input-xxlarge" name="nama" id="nama" value='<?php echo getValueSiswa("nama_siswa", $_GET['id'], "id_siswa") ?>'/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="name">Nama OrangTua/Wali</label>
                                        <div class="controls">
                                            <input type="text" class="input-xxlarge" name="namaortu" id="namaortu" value='<?php echo getValueSiswa("nama_wali", $_GET['id'], "id_siswa") ?>'/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="kelas">Kelas</label>
                                        <div class="controls">
                                            <input type="text" class="input-large" name="kelas" id="kelas" value='<?php echo getValueSiswa("kelas", $_GET['id'], "id_siswa") ?>'/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="alamat">Alamat</label>
                                        <div class="controls">
                                            <textarea class="span4" name="alamat" id="alamat" rows="4"><?php echo getValueSiswa("alamat", $_GET['id'], "id_siswa") ?></textarea>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="email">Email</label>
                                        <div class="controls">
                                            <input type="email" class="input-large" name="email" id="email" value='<?php echo getValueSiswa("email", $_GET['id'], "id_siswa") ?>' />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="telp">No. Telp</label>
                                        <div class="controls">
                                            <input type="text" class="input-large" name="telp" id="telp" value='<?php echo getValueSiswa("alamat", $_GET['id'], "id_siswa") ?>' />
                                        </div>
                                    </div>
                                    <input type="hidden" name="idSiswa" id="idSiswa" value=<?php echo $_GET['id'] ?>>

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
                                                <th>Nama OrangTua/Wali</th>
                                                <th>Kelas</th>
                                                <th>Alamat</th>
                                                <th>Email</th>
                                                <th>No.Telp</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php DeleteSiswaView(); ?>
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