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

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-danger btn">Simpan Data</button>&nbsp;&nbsp;
                                        <a href="index.php?pgy=siswa&page=view" class="btn">Batal</a>
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
                                    <a href="index.php?pgy=siswa&page=create" class="btn btn-info btn">Edit Siswa</a>
                                    <a href="index.php?pgy=siswa&page=create" class="btn btn-danger btn">Hapus Siswa</a>
                                    </div>
                                    <table class="table table-bordered table-striped table-highlight">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Michael</td>
                                                <td>Jordan</td>
                                                <td>@mjordan</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Magic</td>
                                                <td>Johnson</td>
                                                <td>@mjohnson</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Charles</td>
                                                <td>Barkley</td>
                                                <td>@cbark</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Karl</td>
                                                <td>Malone</td>
                                                <td>@kmalone</td>
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
    }
}