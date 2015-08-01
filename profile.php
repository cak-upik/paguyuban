<?php
session_start();
if (isset($_GET['page'])) {
    if ($_GET['page'] == 'view') {
        ?>
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="span12">      		
                        <div class="widget stacked ">
                            <div class="widget-header">
                                <i class="icon-user"></i>
                                <h3>My Profile</h3>
                            </div> <!-- /widget-header -->
                            <div class="widget-content">
                                <div class="tabbable">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#profile" data-toggle="tab">Profile</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="profile">
                                            <form id="edit-profile" class="form-horizontal" />
                                            <fieldset>
                                                <?php $id = $_SESSION['login_user'];?>
                                                <div class="control-group">											
                                                    <label class="control-label" for="username">Username</label>
                                                    <div class="controls">
                                                        <input type="text" class="input-large disabled" id="username" value="<?php echo getValueProfile("username", $id) ?>" disabled="" />
                                                        <p class="help-block">Your username is for logging in and cannot be changed.</p>
                                                    </div> <!-- /controls -->				
                                                </div> <!-- /control-group -->
                                                <div class="control-group">											
                                                    <label class="control-label" for="password1">Password</label>
                                                    <div class="controls">
                                                        <input type="password" class="input-large" id="password1" value="<?php echo getValueProfile("password", $id) ?>" />
                                                    </div> <!-- /controls -->				
                                                </div> <!-- /control-group -->
                                                <div class="control-group">											
                                                    <label class="control-label" for="firstname">Name</label>
                                                    <div class="controls">
                                                        <input type="text" class="input-large" id="firstname" value="<?php echo getValueProfile("nama", $id) ?>" />
                                                    </div> <!-- /controls -->				
                                                </div> <!-- /control-group -->
                                                <div class="control-group">											
                                                    <label class="control-label" for="email">Email Address</label>
                                                    <div class="controls">
                                                        <input type="text" class="input-large" id="email" value="<?php echo getValueProfile("email", $id) ?>"/>
                                                    </div> <!-- /controls -->				
                                                </div> <!-- /control-group -->
                                                <div class="control-group">											
                                                    <label class="control-label" for="user_role">User Role</label>
                                                    <div class="controls">
                                                        <select name="role">
        <!--                                                            <option value="<?php getValueProfile("kode_bayar", $id) ?>"="superadmin">Superadmin</option>
                                                            <option value="<?php getValueProfile("kode_bayar", $id) ?>"="admin">Admin</option>
                                                            <option value="<?php getValueProfile("kode_bayar", $id) ?>"="user">User</option>-->
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
                                                                    <label class="checkbox"><input type="checkbox" name="checkboxs[]" value="<?php getValueProfile("kode_bayar", $id) ?> <?php echo $row['id_hak_akses']; ?>"> <?php echo $row['nama_hak_akses'] ?></label>
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
                                        </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /widget-content -->
                    </div> <!-- /widget -->
                </div> 
            </div> <!-- /row -->

        </div> <!-- /container -->

        </div> <!-- /main -->
        <?php
    }
}