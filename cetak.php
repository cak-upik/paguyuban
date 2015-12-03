<title>Cetak Kartu Pembayaran</title>
<link href="./css/bootstrap.min.css" rel="stylesheet" />
<link href="./css/pages/dashboard.css" rel="stylesheet" />   
<link href="./css/bootstrap-responsive.min.css" rel="stylesheet" />
<link href="./css/base-admin-2.css" rel="stylesheet" />
<!--<link href="./css/base-admin-2-responsive.css" rel="stylesheet" />-->
<style>
    body{
        font-size: 10px;
    }
</style>
<div class="main">
    <div class="container">
        <div class="row">
            <div class="span2"></div>
            <div class="span7">
                <br/>
                <table class="table" style="border: 0px">
                    <thead>
                        <tr>
                            <td style="border: 0px;"><img src="img/gallery/lr1.png"  style="width: 85px; height: 75px;" class="img-circle pull-right"></td>
                            <td style="border: 0px"><h5>PERGURUAN ISLAM RAUDLATUL JANNAH</h5> <br/>Jl. Jatisari Permai X/2 Pepelegi, Waru-Sidoarjo</td>
                        </tr>
                    </thead>
                </table>
                <div class="widget stacked">
                    <div class="widget-content">
                        <div class="row-fluid">
                            <div class="span8">
                                <table class="table table-bordered" style="border:1px; font-size: 12px">
                                    <tbody>
                                        <tr style="border:0px;">
                                            <td style="border:0px;" class="description">Nama Siswa</td>
                                            <td style="border:0px;" class="value"><span>: " . $identity['nama_siswa'] . "</span></td>
                                        </tr>
                                        <tr>
                                            <td style="border:0px;" class="description">Nama Orang Tua</td>
                                            <td style="border:0px;" class="value"><span>: " . $identity['nama_wali'] . "</span></td>
                                        </tr>
                                        <tr>
                                            <td style="border:0px;" class="description">Alamat</td>
                                            <td style="border:0px;" class="value"><span>: " . $identity['alamat'] . "</span></td>
                                        </tr>
                                        <tr>
                                            <td style="border:0px;" class="description">Telp. / HP</td>
                                            <td style="border:0px;" class="value"><span>: " . $identity['no_tlp'] . "</span></td>
                                        </tr>
                                        <tr>
                                            <td style="border:0px;" class="description">Kelas</td>
                                            <td style="border:0px;" class="value"><span>: " . $identity['kelas'] . "</span></td>
                                        </tr>
                                        <tr>
                                            <td style="border:0px;" class="description">Sopir</td>
                                            <td style="border:0px;" class="value"><span>: " . $identity['tarif'] . "</span></td>
                                        </tr>
                                        <tr>
                                            <td style="border:0px;" class="description">Pilihan</td>
                                            <td style="border:0px;" class="value"><span>: " . $identity['layanan'] . "</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row-fluid">
                                <div class="span12">
                                    <table class="table table-bordered table-striped table-highlight" style="font-size: 12px">
                                        <thead>
                                            <tr>
                                                <th class="span1" rowspan=2>Tanggal</th>
                                                <th class="span1" rowspan=2>Bulan</th>
                                                <th class="span3" rowspan=2>Nominal</th>
                                                <th class="span2" colspan=2>Tanda Tangan</th>
                                            </tr>
                                            <tr>
                                                <th class="span1">Orang Tua</th>
                                                <th class="span1">Petugas</th>
                                            </tr>
                                        </thead>
                                        <tr>
                                            <td style="border:0px;" class="description">Sopir</td>
                                            <td style="border:0px;" class="value"><span></span></td>
                                            <td style="border:0px;" class="description">Sopir</td>
                                            <td style="border:0px;" class="value"><span></span></td>    
                                            <td style="border:0px;" class="value"><span></span></td>     
                                        </tr>
                                        <tr>
                                            <td style="border:0px;" class="description">Sopir</td>
                                            <td style="border:0px;" class="value"><span></span></td>
                                            <td style="border:0px;" class="description">Sopir</td>
                                            <td style="border:0px;" class="value"><span></span></td>    
                                            <td style="border:0px;" class="value"><span></span></td>     
                                        </tr>
                                        <tr>
                                            <td style="border:0px;" class="description">Sopir</td>
                                            <td style="border:0px;" class="value"><span></span></td>
                                            <td style="border:0px;" class="description">Sopir</td>
                                            <td style="border:0px;" class="value"><span></span></td>    
                                            <td style="border:0px;" class="value"><span></span></td>     
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /widget-content -->

                </div> <!-- /widget -->					

            </div> <!-- /span12 -->     	
            <div class="span2"></div>

        </div> <!-- /row -->

    </div> <!-- /container -->

</div> <!-- /main -->