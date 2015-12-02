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
                                <h3>Input Data Pendaftaran</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">

                                <br />

                                <form action="index.php?pgy=enroll&do=save" method="post" class="form-horizontal" />
                                <fieldset>
                                    <div class="control-group">
                                        <label class="control-label" for="siswa">Nama Siswa</label>
                                        <div class="controls">
                                            <select id="siswa" name="siswa" class="span3" >
                                            <option value="">Pilih Siswa</option>
                                                <?php getOptionSiswa();?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="supir">Nama Supir</label>
                                        <div class="controls">
                                            <select id="supir" name="supir" class="span3" >
                                            <option value="">Pilih Supir</option>
                                                <?php getOptionSupir();?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="rute">Rute</label>
                                        <div class="controls">
                                            <select id="rute" name="rute" class="span3" >
                                            <option value="">Pilih Rute</option>
                                                <?php getOptionRute();?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="layanan">Jenis Layanan</label>
                                        <div class="controls">
                                            <select id="layanan" name="layanan" class="span3" >
                                            <option value="oneway">One-Way</option>
                                            <option value="twoway">Two-Way</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success btn">Simpan Data</button>&nbsp;&nbsp;
                                        <a href="index.php?pgy=enroll&page=view" class="btn btn-danger btn">Batal</a>
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
                                <h3>Form Pendaftaran Layanan</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <section id="tables">
                                    <h3>Data Pendaftaran Layanan</h3>
                                    <div class="form-actions">
                                    <?php $qry = "SELECT * FROM siswa";
                                          $exec = mysql_query($qry);
                                          if ($exec) {
                                             if(mysql_num_rows($exec) == 0) {
                                    ?>
                                        <a href="javascript:alert('Untuk Melanjutkan Harap Isi Data Siswa Terlebih Dahulu')" class="btn btn-primary btn">Tambah</a>
                                        <a href="javascript:alert('Untuk Melanjutkan Harap Isi Data Siswa Terlebih Dahulu')" class="btn btn-info btn">Edit</a>
                                        <a href="javascript:alert('Untuk Melanjutkan Harap Isi Data Siswa Terlebih Dahulu')" class="btn btn-danger btn">Hapus</a>
                                   <?php
                                             } else {
                                   ?>
                                        <a href="index.php?pgy=enroll&page=create" class="btn btn-primary btn">Tambah</a>
                                        <a href="index.php?pgy=enroll&page=edit" class="btn btn-info btn">Edit</a>
                                        <a href="index.php?pgy=enroll&page=delete" class="btn btn-danger btn">Hapus</a>
                                   <?php
                                             }
                                          }
                                    ?>
                                    </div>
                                    <table class="table table-bordered table-striped table-highlight">
                                        <thead>
                                            <tr>
                                                <th class="span0"><center>No</center></th>
                                                <th class="span5"><center>Nama Siswa</center></th>
                                                <th class="span5"><center>Nama Supir</center></th>
                                                <th class="span4"><center>Rute</center></th>
                                                <th class="span2"><center>Jenis Layanan</center></th>
                                                <th class="span2"><center>Tarif</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php LoadLayanan();?>
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
                                <h3>Form Pendaftaran Layanan</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <section id="tables">
                                    <h3>Data Pendaftaran Layanan</h3>
                                    <div class="form-actions">
                                    <a href="#" class="btn btn-inverse btn">Tambah</a>
                                    <a href="#" class="btn btn-inverse btn">Edit</a>
                                    <a href="#" class="btn btn-inverse btn">Hapus</a>
                                    <a href="index.php?pgy=enroll&page=view" class="btn btn-danger btn">Batal</a>
                                    </div>
                                    <table class="table table-bordered table-striped table-highlight">
                                        <thead>
                                            <tr>
                                                <th class="span0"><center>#</center></th>
                                                <th class="span5"><center>Nama Siswa</center></th>
                                                <th class="span5"><center>Nama Supir</center></th>
                                                <th class="span4"><center>Rute</center></th>
                                                <th class="span2"><center>Jenis Layanan</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php EditLayanan();?>
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
                                <h3>Edit Pendaftaran Layanan</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">

                                <br />

                                <form action="index.php?pgy=enroll&do=update" method="post" class="form-horizontal" />
                                <fieldset>
                                    <div class="control-group">
                                        <label class="control-label" for="siswa">Nama Siswa</label>
                                        <div class="controls">
                                            <input type="text" class="span3" name="siswa" id="siswa" value='<?php echo getValueLayanan("nama_siswa", $_GET['id'],"id_siswa")?>' disabled/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="supir">Nama Supir</label>
                                        <div class="controls">
                                            <select id="supir" name="supir" class="span3" >
                                                <?php echo getLayananSupir($_GET['id'])?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="rute">Rute</label>
                                        <div class="controls">
                                            <select id="rute" name="rute" class="span3" >
                                                <?php echo getLayananRute($_GET['id'])?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="layanan">Layanan</label>
                                        <div class="controls">
                                            <select id="layanan" name="layanan" class="span3">
                                                <option value="oneway">One-Way</option>
                                                <option value="twoway">Two-Way</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" name="idSiswa" id="idSiswa" value=<?php echo $_GET['id']?>>

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success btn">Simpan Data</button>&nbsp;&nbsp;
                                        <a href="index.php?pgy=enroll&page=view" class="btn btn-danger btn">Batal</a>
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
                                <h3>Form Pendaftaran Layanan</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <section id="tables">
                                    <h3>Data Pendaftaran Layanan</h3>
                                    <div class="form-actions">
                                    <a href="#" class="btn btn-inverse btn">Tambah</a>
                                    <a href="#" class="btn btn-inverse btn">Edit</a>
                                    <a href="#" class="btn btn-inverse btn">Hapus</a>
                                    <a href="index.php?pgy=enroll&page=view" class="btn btn-danger btn">Batal</a>
                                    </div>
                                    <table class="table table-bordered table-striped table-highlight">
                                        <thead>
                                            <tr>
                                                <th class="span0"><center>#</center></th>
                                                <th class="span5"><center>Nama Siswa</center></th>
                                                <th class="span5"><center>Nama Supir</center></th>
                                                <th class="span4"><center>Rute</center></th>
                                                <th class="span2"><center>Jenis Layanan</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php DeleteLayananView();?>
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