<div class="subnavbar">
    <div class="subnavbar-inner">
        <div class="container">
            <a class="btn-subnavbar collapsed" data-toggle="collapse" data-target=".subnav-collapse">
                <i class="icon-reorder"></i>
            </a>
            <?php
            $getPage = $_GET['pgy'];
            $active = "";
//            if ($getPage == "home") {
//                $active = "class=\"active\"";
//            } else if ($getPage == 'siswa') {
//                $active = "class=\"active\"";
//            } else if ($getPage == 'sopir') {
//                $active = "class=\"active\"";
//            } else if ($getPage == 'pegawai') {
//                $active = "class=\"active\"";
//            } else if ($getPage == 'rute') {
//                $active = "class=\"active\"";
//            } else if ($getPage == 'pembayaran-siswa') {
//                $active = "class=\"active\"";
//            } else if ($getPage == 'pembayaran-sopir') {
//                $active = "class=\"active\"";
//            } else if ($getPage == 'laporan-pembayaran') {
//                $active = "class=\"active\"";
//            } else if ($getPage == 'laporan-laba') {
//                $active = "class=\"active\"";
//            } else if ($getPage == 'user-manage') {
//                $active = "class=\"active\"";
//            } else if ($getPage == 'profile') {
//                $active = "class=\"active\"";
//            }
            ?>
            <div class="subnav-collapse collapse">
                <ul class="mainnav">
                    <li <?php echo $active ?>>
                        <a href="index.php?pgy=home">
                            <i class="icon-dashboard"></i>
                            <span>Dashboard</span>
                        </a>	    				
                    </li>
                    <li class="dropdown">					
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-edit"></i>
                            <span>Master</span>
                            <b class="caret"></b>
                        </a>	    
                        <ul class="dropdown-menu">
                            <li <?php echo $active ?>><a href="index.php?pgy=siswa&page=view">Siswa</a></li>
                            <li <?php echo $active ?>><a href="index.php?pgy=sopir&page=view">Sopir</a></li>
                            <li <?php echo $active ?>><a href="index.php?pgy=pegawai&page=view">Pegawai</a></li>
                            <li <?php echo $active ?>><a href="index.php?pgy=rute&page=view">Rute</a></li>
                        </ul> 				
                    </li>
                    <li class="dropdown">					
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-shopping-cart"></i>
                            <span>Transaksi</span>
                            <b class="caret"></b>
                        </a>	    
                        <ul class="dropdown-menu">
                            <li <?php echo $active ?>><a href="index.php?pgy=pembayaran-siswa&page=view">Pembayaran</a></li>
                        </ul> 				
                    </li>
                    <li class="dropdown">					
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-bar-chart"></i>
                            <span>Laporan</span>
                            <b class="caret"></b>
                        </a>	    
                        <ul class="dropdown-menu">
                            <li <?php echo $active ?>><a href="index.php?pgy=laporan-pembayaran&page=view">Pembayaran</a></li>
                            <li <?php echo $active ?>><a href="index.php?pgy=laporan-laba&page=view">Pembayaran Supir</a></li>
                            <li <?php echo $active ?>><a href="index.php?pgy=laporan-laba&page=view">Pembayaran Siswa</a></li>
                            <li <?php echo $active ?>><a href="index.php?pgy=laporan-laba&page=view">Laba</a></li>
                        </ul> 				
                    </li>
                    <li class="dropdown">					
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-cogs"></i>
                            <span>Pengaturan</span>
                            <b class="caret"></b>
                        </a>	    
                        <ul class="dropdown-menu">
                            <li <?php echo $active ?>><a href="index.php?pgy=laporan-pembayaran&page=view">User</a></li>
                            <li <?php echo $active ?>><a href="index.php?pgy=laporan-laba&page=view">Hak Akses</a></li>
                            <li <?php echo $active ?>><a href="index.php?pgy=laporan-laba&page=view">Paguyuban</a></li>
                        </ul> 				
                    </li>
                    <!--                    <li class="dropdown">					
                                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="icon-th"></i>
                                                <span>Components</span>
                                                <b class="caret"></b>
                                            </a>	    
                                            <ul class="dropdown-menu">
                                                <li><a href="./elements.html">Elements</a></li>
                                                <li><a href="./validation.html">Validation</a></li>
                                                <li><a href="./jqueryui.html">jQuery UI</a></li>
                                                <li><a href="./charts.html">Charts</a></li>
                                                <li><a href="./popups.html">Popups/Notifications</a></li>
                                            </ul> 				
                                        </li>
                                        <li class="dropdown">					
                                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="icon-copy"></i>
                                                <span>Sample Pages</span>
                                                <b class="caret"></b>
                                            </a>	    
                                            <ul class="dropdown-menu">
                                                <li><a href="./pricing.html">Pricing Plans</a></li>
                                                <li><a href="./faq.html">FAQ's</a></li>
                                                <li><a href="./gallery.html">Gallery</a></li>
                                                <li><a href="./reports.html">Reports</a></li>
                                                <li><a href="./account.html">User Account</a></li>
                                            </ul> 				
                                        </li>
                                        <li class="dropdown">					
                                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="icon-external-link"></i>
                                                <span>Extra Pages</span>
                                                <b class="caret"></b>
                                            </a>	
                                            <ul class="dropdown-menu">
                                                <li><a href="./login.html">Login</a></li>
                                                <li><a href="./signup.html">Signup</a></li>
                                                <li><a href="./error.html">Error</a></li>
                                                <li class="dropdown-submenu">
                                                    <a tabindex="-1" href="#">Dropdown menu</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a tabindex="-1" href="#">Second level link</a></li>
                                                        <li><a tabindex="-1" href="#">Second level link</a></li>
                                                        <li><a tabindex="-1" href="#">Second level link</a></li>
                                                    </ul>
                                                </li>
                                            </ul>    				
                                        </li>-->
                </ul>
            </div> <!-- /.subnav-collapse -->
        </div> <!-- /container -->
    </div> <!-- /subnavbar-inner -->
</div> <!-- /subnavbar -->