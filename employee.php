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
                                <h3>Input Data Karyawan</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">

                                <br />

                                <form action="index.php?pgy=karyawan&do=save" method="post" class="form-horizontal" />
                                <fieldset>
                                    <div class="control-group">
                                        <label class="control-label" for="name">Nama Karyawan</label>
                                        <div class="controls">
                                            <input type="text" class="input-xxlarge" name="nama" id="nama" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="tempatlahir">Tempat Lahir</label>
                                        <div class="controls">
                                            <input type="text" class="input-large" name="tempat" id="tempat" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="tanggallahir">Tanggal Lahir</label>
                                        <div class="controls">
                                            <input type="date" class="input-large" name="tanggal" id="tanggal" />
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

                                    <div class="control-group">
                                        <label class="control-label" for="jabatan">Jabatan</label>
                                        <div class="controls">
                                            <select id="status" name="jabatan">
                                                <option value="supir" />SUPIR
                                                <option value="administrasi" />ADMINISTRASI
                                                <option value="keuangan" />KEUANGAN
                                                <option value="manajer" />DIREKTUR / KPLA WARLAH
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success btn">Simpan Data</button>&nbsp;&nbsp;
                                        <a href="index.php?pgy=karyawan&page=view" class="btn btn-danger btn">Batal</a>
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
                                <h3>Form Data Karyawan</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <section id="tables">
                                    <h3>Data Karyawan</h3>
                                    <div class="form-actions">
                                    <a href="index.php?pgy=karyawan&page=create" class="btn btn-primary btn">Tambah Karyawan</a>
                                    <a href="index.php?pgy=karyawan&page=edit" class="btn btn-info btn">Edit Karyawan</a>
                                    <a href="index.php?pgy=karyawan&page=delete" class="btn btn-danger btn">Hapus Karyawan</a>
                                    </div>
                                    <table class="table table-bordered table-striped table-highlight">
                                        <thead>
                                            <tr>
                                                <th class="span1">No</th>
                                                <th>Nama Karyawan</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Alamat</th>
                                                <th>Email</th>
                                                <th>No.Telp</th>
                                                <th>Jabatan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php LoadKaryawan();?>
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
                                <h3>Form Data Karyawan</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <section id="tables">
                                    <h3>Data Karyawan</h3>
                                    <div class="form-actions">
                                    <a href="#" class="btn btn-inverse btn">Tambah Karyawan</a>
                                    <a href="#" class="btn btn-inverse btn">Edit Karyawan</a>
                                    <a href="#" class="btn btn-inverse btn">Hapus Karyawan</a>
                                    <a href="index.php?pgy=karyawan&page=view" class="btn btn-danger btn">Batal</a>
                                    </div>
                                    <table class="table table-bordered table-striped table-highlight">
                                        <thead>
                                            <tr>
                                                <th class="span1">#</th>
                                                <th>Nama Karyawan</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Alamat</th>
                                                <th>Email</th>
                                                <th>No.Telp</th>
                                                <th>Jabatan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php EditKaryawan();?>
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
                                <h3>Input Data Karyawan</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">

                                <br />

                                <form action="index.php?pgy=karyawan&do=update" method="post" class="form-horizontal" />
                                <fieldset>
                                    <div class="control-group">
                                        <label class="control-label" for="name">Nama Karyawan</label>
                                        <div class="controls">
                                            <input type="text" class="input-xxlarge" name="nama" id="nama" value='<?php echo getValueKaryawan("nama_karyawan", $_GET['id'],"id_karyawan")?>'/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="tempat">Tempat Lahir</label>
                                        <div class="controls">
                                            <input type="text" class="input-large" name="tempat" id="tempat" value='<?php echo getValueKaryawan("tempat_lahir", $_GET['id'],"id_karyawan")?>'/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="tanggal">Tanggal Lahir</label>
                                        <div class="controls">
                                            <input type="date" class="input-large" name="tanggal" id="tanggal" value='<?php echo getValueKaryawan("tanggal_lahir", $_GET['id'],"id_karyawan")?>'/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="alamat">Alamat</label>
                                        <div class="controls">
                                            <textarea class="span4" name="alamat" id="alamat" rows="4"><?php echo getValueKaryawan("alamat", $_GET['id'],"id_karyawan")?></textarea>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="email">Email</label>
                                        <div class="controls">
                                            <input type="email" class="input-large" name="email" id="email" value='<?php echo getValueKaryawan("email", $_GET['id'],"id_karyawan")?>' />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="telp">No. Telp</label>
                                        <div class="controls">
                                            <input type="text" class="input-large" name="telp" id="telp" value='<?php echo getValueKaryawan("no_tlp", $_GET['id'],"id_karyawan")?>' />
                                        </div>
                                    </div>

                                    <div class="control-group">
                                        <label class="control-label" for="jabatan">Jabatan</label>
                                        <div class="controls">
                                            <select id="status" name="jabatan">
                                                <option value='<?php echo getValueKaryawan("jabatan", $_GET['id'], "id_karyawan")?>' selected><?php echo getValueKaryawan("jabatan", $_GET['id'], "id_karyawan")?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" name="idKaryawan" id="idKaryawan" value=<?php echo $_GET['id']?>>

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success btn">Simpan Data</button>&nbsp;&nbsp;
                                        <a href="index.php?pgy=karyawan&page=view" class="btn btn-danger btn">Batal</a>
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
                                <h3>Form Data Karyawan</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <section id="tables">
                                    <h3>Data Karyawan</h3>
                                    <div class="form-actions">
                                    <a href="#" class="btn btn-inverse btn">Tambah Karyawan</a>
                                    <a href="#" class="btn btn-inverse btn">Edit Karyawan</a>
                                    <a href="#" class="btn btn-inverse btn">Hapus Karyawan</a>
                                    <a href="index.php?pgy=karyawan&page=view" class="btn btn-danger btn">Batal</a>
                                    </div>
                                    <table class="table table-bordered table-striped table-highlight">
                                        <thead>
                                            <tr>
                                                <th class="span1">#</th>
                                                <th>Nama Karyawan</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Alamat</th>
                                                <th>Email</th>
                                                <th>No.Telp</th>
                                                <th>Jabatan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php DeleteKaryawanView();?>
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