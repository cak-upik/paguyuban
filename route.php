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
                                <h3>Input Data Rute</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">

                                <br />

                                <form action="index.php?pgy=rute&do=save" method="post" class="form-horizontal" />
                                <fieldset>
                                    <div class="control-group">
                                        <label class="control-label" for="name">Nama Rute</label>
                                        <div class="controls">
                                            <input type="text" class="input-xxlarge" name="nama" id="nama" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="kota">Kota</label>
                                        <div class="controls">
                                            <input type="text" class="input-large" name="kota" id="kota" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="tarif">Tarif</label>
                                        <div class="controls">
                                            <input type="text" class="input-large" name="tarif" id="tarif" />
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success btn">Simpan Data</button>&nbsp;&nbsp;
                                        <a href="index.php?pgy=rute&page=view" class="btn btn-danger btn">Batal</a>
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
                                <h3>Form Data Rute</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <section id="tables">
                                    <h3>Data Rute</h3>
                                    <div class="form-actions">
                                    <a href="index.php?pgy=rute&page=create" class="btn btn-primary btn">Tambah Rute</a>
                                    <a href="index.php?pgy=rute&page=edit" class="btn btn-info btn">Edit Rute</a>
                                    <a href="index.php?pgy=rute&page=delete" class="btn btn-danger btn">Hapus Rute</a>
                                    </div>
                                    <table class="table table-bordered table-striped table-highlight">
                                        <thead>
                                            <tr>
                                                <th class="span1">No</th>
                                                <th>Nama Rute</th>
                                                <th>Kota</th>
                                                <th>Tarif</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php LoadRute();?>
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
                                <h3>Form Data Rute</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <section id="tables">
                                    <h3>Data Rute</h3>
                                    <div class="form-actions">
                                    <a href="#" class="btn btn-inverse btn">Tambah Rute</a>
                                    <a href="#" class="btn btn-inverse btn">Edit Rute</a>
                                    <a href="#" class="btn btn-inverse btn">Hapus Rute</a>
                                    <a href="index.php?pgy=rute&page=view" class="btn btn-danger btn">Batal</a>
                                    </div>
                                    <table class="table table-bordered table-striped table-highlight">
                                        <thead>
                                            <tr>
                                                <th class="span1">#</th>
                                                <th>Nama Rute</th>
                                                <th>Kota</th>
                                                <th>Tarif</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php EditRute();?>
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
                                <h3>Input Data Rute</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">

                                <br />

                                <form action="index.php?pgy=rute&do=update" method="post" class="form-horizontal" />
                                <fieldset>
                                    <div class="control-group">
                                        <label class="control-label" for="name">Nama Rute</label>
                                        <div class="controls">
                                            <input type="text" class="input-xxlarge" name="nama" id="nama" value='<?php echo getValueRute("nama_rute", $_GET['id'],"id_rute")?>'/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="kota">Kota</label>
                                        <div class="controls">
                                            <input type="text" class="input-large" name="kota" id="kota" value='<?php echo getValueRute("kota", $_GET['id'],"id_rute")?>'/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="tarif">Tarif</label>
                                        <div class="controls">
                                            <input type="text" class="input-large" name="tarif" id="tarif" value='<?php echo getValueRute("tarif", $_GET['id'],"id_rute")?>' />
                                        </div>
                                    </div>
                                    <input type="hidden" name="idRute" id="idRute" value=<?php echo $_GET['id']?>>

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success btn">Simpan Data</button>&nbsp;&nbsp;
                                        <a href="index.php?pgy=rute&page=view" class="btn btn-danger btn">Batal</a>
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
                                <h3>Form Data Rute</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <section id="tables">
                                    <h3>Data Rute</h3>
                                    <div class="form-actions">
                                    <a href="#" class="btn btn-inverse btn">Tambah Rute</a>
                                    <a href="#" class="btn btn-inverse btn">Edit Rute</a>
                                    <a href="#" class="btn btn-inverse btn">Hapus Rute</a>
                                    <a href="index.php?pgy=rute&page=view" class="btn btn-danger btn">Batal</a>
                                    </div>
                                    <table class="table table-bordered table-striped table-highlight">
                                        <thead>
                                            <tr>
                                                <th class="span1">#</th>
                                                <th>Nama Rute</th>
                                                <th>Kota</th>
                                                <th>Tarif</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php DeleteRuteView();?>
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