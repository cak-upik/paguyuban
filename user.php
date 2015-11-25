<?php
if (isset($_GET['page'])) {
    if ($_GET['page'] == 'view') {
        ?>
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="span12">      		
                        <div class="widget stacked ">
                            <div class="widget-header">
                                <i class="icon-pencil"></i>
                                <h3>Form Data User</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <section id="tables">
                                    <h3>Data User</h3>
                                    <div class="form-actions">
                                        <a href="index.php?pgy=user-manage&page=create" class="btn btn-primary btn">Tambah User</a>
                                        <a href="index.php?pgy=user-manage&page=edit" class="btn btn-info btn">Edit User</a>
                                        <a href="index.php?pgy=user-manage&page=delete" class="btn btn-danger btn">Hapus User</a>

                                    </div>
                                    <table class="table table-bordered table-striped table-highlight">
                                        <thead>
                                            <tr>
                                                <th class="span1">No</th>
                                                <th>Username</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Jabatan</th>
                                                <th>Akses User</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php LoadUser(); ?>
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
    } elseif ($_GET['page'] == "create") {
        ?>
        <script type="text/javascript">

            function pilihan()
            {
                // membaca jumlah komponen dalam form bernama 'myform'
                var jumKomponen = document.myform.length;

                // jika checkbox 'Pilih Semua' dipilih
                if (document.myform[0].checked === true)
                {
                    // semua checkbox pada data akan terpilih
                    for (i = 1; i <= jumKomponen; i++)
                    {
                        if (document.myform[i].type === "checkbox")
                            document.myform[i].checked = true;
                    }
                }
                // jika checkbox 'Pilih Semua' tidak dipilih
                else if (document.myform[0].checked === false)
                {
                    // semua checkbox pada data tidak dipilih
                    for (i = 1; i <= jumKomponen; i++)
                    {
                        if (document.myform[i].type === "checkbox")
                            document.myform[i].checked = false;
                    }
                }
            }

        </script>
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="span12">      		
                        <div class="widget stacked ">
                            <div class="widget-header">
                                <i class="icon-user"></i>
                                <h3>User </h3>
                            </div> <!-- /widget-header -->
                            <div class="widget-content">
                                <div class="tabbable">
                                    <br />
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="profile">
                                            <form id="edit-profile" name="myform" class="form-horizontal" method="post" action="index.php?pgy=user-manage&do=save"  />
                                            <fieldset>
                                                <div class="control-group">											
                                                    <label class="control-label" for="username">Username</label>
                                                    <div class="controls">
                                                        <input type="text" class="input-large" id="username" name="username"/>
                                                    </div> <!-- /controls -->				
                                                </div> <!-- /control-group -->
                                                <div class="control-group">											
                                                    <label class="control-label" for="password1">Password</label>
                                                    <div class="controls">
                                                        <input type="password" class="input-large" name="password" id="password1"/>
                                                    </div> <!-- /controls -->				
                                                </div> <!-- /control-group -->
                                                <div class="control-group">											
                                                    <label class="control-label" for="firstname">Name</label>
                                                    <div class="controls">
                                                        <input type="text" class="input-large" id="name" name="name"/>
                                                    </div> <!-- /controls -->				
                                                </div> <!-- /control-group -->
                                                <div class="control-group">											
                                                    <label class="control-label" for="email">Email Address</label>
                                                    <div class="controls">
                                                        <input type="text" class="input-large" name="email" id="email"/>
                                                    </div> <!-- /controls -->				
                                                </div> <!-- /control-group -->
                                                <div class="control-group">											
                                                    <label class="control-label" for="user_role">User Role</label>
                                                    <div class="controls">
                                                        <select name="role">
                                                            <option value="superadmin">Superadmin</option>
                                                            <option value="admin">Admin</option>
                                                            <option value="user">User</option>
                                                        </select>                                                            
                                                    </div> <!-- /controls -->				
                                                </div> <!-- /control-group -->
                                                <br />

                                                <div class="widget stacked ">
                                                    <div class="widget-header">
                                                        <i class="icon-user"></i>
                                                        <h3>User Permission </h3>
                                                    </div> 
                                                    <div class="widget-content">
                                                        <div class="control-group">
                                                            <div class="checkbox">
                                                                <label class="checkbox"><input type="checkbox" value="master_siswa" name="master_siswa" > Master Siswa</label>
                                                                <label class="checkbox"><input type="checkbox" value="master_sopir" name="master_sopir" > Master Sopir</label>
                                                                <label class="checkbox"><input type="checkbox" value="master_karyawan" name="master_karyawan" > Master Karyawan</label>
                                                                <label class="checkbox"><input type="checkbox" value="master_rute" name="master_rute" > Master Rute</label>
                                                                <label class="checkbox"><input type="checkbox" value="transaksi_pendaftaran" name="transaksi_pendaftaran" > Transaksi Pendaftaran</label>
                                                                <label class="checkbox"><input type="checkbox" value="transaksi_pembayaran" name="transaksi_pembayaran" > Transaksi Pembayaran</label>
                                                                <label class="checkbox"><input type="checkbox" value="kartu_pembayaran" name="kartu_pembayaran" > Kartu Pembayaran</label>
                                                                <label class="checkbox"><input type="checkbox" value="laporan_pembayaran" name="laporan_pembayaran" > Laporan Pembayaran</label>
                                                                <label class="checkbox"><input type="checkbox" value="laporan_sopir" name="laporan_sopir" > Laporan Sopir</label>
                                                                <label class="checkbox"><input type="checkbox" value="laporan_siswa" name="laporan_siswa" > Laporan Siswa</label>
                                                                <label class="checkbox"><input type="checkbox" value="laba" name="laba" > Laba</label>
                                                                <label class="checkbox"><input type="checkbox" value="setting_user" name="setting_user" > Setting User</label>
                                                                <label class="checkbox"><input type="checkbox" value="setting_hak_akses" name="setting_hak_akses" > Setting Hak Akses</label>
                                                                <label class="checkbox"><input type="checkbox" value="setting_template" name="setting_template" > Setting Template</label>
                                                            </div> <!-- /controls -->				
                                                        </div> <!-- /control-group -->
                                                    </div>
                                                </div>                                            
                                                <div class="form-actions">
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                    <input type=button class='btn btn-danger btn' value=Batal onclick=window.location.assign('index.php?pgy=user-manage&page=view')>                                                
                                                </div> <!-- /form-actions -->
                                            </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- /widget-content -->
                        </div> <!-- /widget -->
                    </div> <!-- /span8 -->
                </div> <!-- /row -->
            </div> <!-- /container -->
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
                                <h3>Form Data User</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <section id="tables">
                                    <h3>Data User</h3>
                                    <div class="form-actions">
                                        <a href="#" class="btn btn-inverse btn">Tambah User</a>
                                        <a href="#" class="btn btn-inverse btn">Edit User</a>
                                        <a href="#" class="btn btn-inverse btn">Hapus User</a>
                                        <a href="index.php?pgy=user-manage&page=view" class="btn btn-danger btn">Batal</a>
                                    </div>
                                    <table class="table table-bordered table-striped table-highlight">
                                        <thead>
                                            <tr>
                                                <th class="span1">#</th>
                                                <th>Username</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Jabatan</th>
                                                <th>Akses User</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php EditUser(); ?>
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
    <?php } elseif ($_GET['page'] == 'editor') { ?>
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="span12">      		
                        <div class="widget stacked ">
                            <div class="widget-header">
                                <i class="icon-user"></i>
                                <h3>Edit User </h3>
                            </div> <!-- /widget-header -->
                            <div class="widget-content">
                                <div class="tabbable">
                                    <br />
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="profile">
                                            <form id="edit-profile" class="form-horizontal" method="post" action="index.php?pgy=user-manage&do=update"  />
                                            <fieldset>
                                                <div class="control-group">											
                                                    <label class="control-label" for="username">Username</label>
                                                    <div class="controls">
                                                        <input type="text" class="input-large disabled" id="username" name="username" value='<?php echo getValueUser("username", $_GET['id'], "id_user") ?>' />
                                                    </div> <!-- /controls -->				
                                                </div> <!-- /control-group -->
                                                <div class="control-group">											
                                                    <label class="control-label" for="password1">Password</label>
                                                    <div class="controls">
                                                        <input type="password" class="input-large" name="password" id="password1"value='<?php echo getValueUser("password", $_GET['id'], "id_user") ?>' />
                                                    </div> <!-- /controls -->				
                                                </div> <!-- /control-group -->
                                                <div class="control-group">											
                                                    <label class="control-label" for="firstname">Name</label>
                                                    <div class="controls">
                                                        <input type="text" class="input-large" id="name" name="name"value='<?php echo getValueUser("nama", $_GET['id'], "id_user") ?>' />
                                                    </div> <!-- /controls -->				
                                                </div> <!-- /control-group -->
                                                <div class="control-group">											
                                                    <label class="control-label" for="email">Email Address</label>
                                                    <div class="controls">
                                                        <input type="text" class="input-large" name="email" id="email"value='<?php echo getValueUser("email", $_GET['id'], "id_user") ?>' />
                                                    </div> <!-- /controls -->				
                                                </div> <!-- /control-group -->
                                                <div class="control-group">											
                                                    <label class="control-label" for="user_role">User Role</label>
                                                    <div class="controls">
                                                        <select name="role">
                                                            <option value="superadmin" <?php echo(getValueUser("role", $_GET['id'], "id_user") == 'superadmin') ? 'selected' : '' ?>>Superadmin</option>
                                                            <option value="admin" <?php echo(getValueUser("role", $_GET['id'], "id_user") == 'admin') ? 'selected' : '' ?>>Admin</option>
                                                            <option value="user" <?php echo(getValueUser("role", $_GET['id'], "id_user") == 'user') ? 'selected' : '' ?>>User</option>
                                                        </select>                                                            
                                                    </div> <!-- /controls -->				
                                                </div> <!-- /control-group -->
                                                <br />

                                                <div class="widget stacked ">
                                                    <div class="widget-header">
                                                        <i class="icon-user"></i>
                                                        <h3>User Permission </h3>
                                                    </div> 
                                                    <div class="widget-content">
                                                        <div class="control-group">								
                                                            <div class="checkbox">
                                                                <?php
//                                                                $q = mysql_query("select * from hak_akses");
//                                                                while ($row = mysql_fetch_array($q)) {
                                                                ?>
                                                                <label class="checkbox"><input type="checkbox" name="checkboxs[]" value="<?php echo $row['id_hak_akses'] ?>"> <?php echo $row['nama_hak_akses'] ?></label>
                                                                <?php // } ?>
                                                            </div> <!-- /controls -->				
                                                        </div> <!-- /control-group -->
                                                    </div>
                                                </div>                                            
                                                <div class="form-actions">
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                    <input type=button class='btn btn-danger btn' value=Batal onclick=window.location.assign('index.php?pgy=user-manage&page=view')>                                                
                                                </div> <!-- /form-actions -->
                                            </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- /widget-content -->
                        </div> <!-- /widget -->
                    </div> <!-- /span8 -->
                </div> <!-- /row -->
            </div> <!-- /container -->
        </div>
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
                                <h3>Form Data User</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <section id="tables">
                                    <h3>Data User</h3>
                                    <div class="form-actions">
                                        <a href="#" class="btn btn-inverse btn">Tambah User</a>
                                        <a href="#" class="btn btn-inverse btn">Edit User</a>
                                        <a href="#" class="btn btn-inverse btn">Hapus User</a>
                                        <a href="index.php?pgy=user-manage&page=view" class="btn btn-danger btn">Batal</a>
                                    </div>
                                    <table class="table table-bordered table-striped table-highlight">
                                        <thead>
                                            <tr>
                                                <th class="span1">No</th>
                                                <th>Username</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Jabatan</th>
                                                <th>Akses User</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php DeleteUserView(); ?>
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