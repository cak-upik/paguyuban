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
                                <h3>User Management</h3>
                            </div> <!-- /widget-header -->
                            <div class="widget-content">
                                <section id="tables">
                                    <h3>Tables</h3>
                                    <table class="table table-bordered table-striped table-highlight">
                                        <thead>
                                            <tr>
                                                <th>#</th>
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
    } elseif ($_GET['page'] == "create") {
        ?>
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
                                            <form id="edit-profile" class="form-horizontal" method="post" action="index.php?pgy=user-manage&do=save"  />
                                            <fieldset>
                                                <div class="control-group">											
                                                    <label class="control-label" for="username">Username</label>
                                                    <div class="controls">
                                                        <input type="text" class="input-large disabled" id="username" name="username"/>
                                                        <p class="help-block">Your username is for logging in and cannot be changed.</p>
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
                                                    <label class="control-label" for="password1">Password</label>
                                                    <div class="controls">
                                                        <input type="password" class="input-large" name="password" id="password1"/>
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
                                                            <!--<label class="checkbox">Master</label>-->					
                                                            <div class="checkbox">
                                                                <?php
                                                                $q = mysql_query("select * from hak_akses");
                                                                while ($row = mysql_fetch_array($q)) {
                                                                    ?>
                                                                    <label class="checkbox"><input type="checkbox" name="checkboxs[]" value="<?php echo $row['id_hak_akses'] ?>"> <?php echo $row['nama_hak_akses'] ?></label>
                                                                <?php } ?>
                                                            </div> <!-- /controls -->				
                                                        </div> <!-- /control-group -->
                                                    </div>
                                                </div>                                            
                                                <div class="form-actions">
                                                    <button type="submit" class="btn btn-primary">Save</button> 
                                                    <button class="btn">Cancel</button>
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
    }
}        