<?php
session_start();
?>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <i class="icon-cog"></i>
            </a>
            <a class="brand" href="index.php?pgy=home">
                E-Car <br>
                Antar Jemput Siswa
                Raudhatul Jannah
            </a>
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> 
                            <?php
                            include './connection.php';
                            $user_login =  $_SESSION['login_user'];                            
                            $query = mysql_query("select * from user where id_user='$user_login'");
                            $result = mysql_fetch_array($query);
                            echo $result['nama']; ?>
                            <b class="caret"></b>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="index.php?pgy=profile&page=view">My Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->	
        </div> <!-- /container -->
    </div> <!-- /navbar-inner -->
</div> <!-- /navbar -->
