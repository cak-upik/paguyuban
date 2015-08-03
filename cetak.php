<title>Cetak Kartu Pembayaran</title>
<style>
    .header{
        margin: 0 auto; width: 800px; text-align: center;
    }
    .content{
        width:auto; 
        margin: 0 auto;
        font-family: monospace; 
    }

    .content2{
        margin-left: 320px;
        margin-right: 320px;
        font-family: arial; 
    }
    table{
        border-collapse:collapse;
    }
    .table, .tableb{
        font-family: Arial; 
        font-size: 13px;
    }

    .table th{
        border:1px solid black;
        text-align:center;
        text-transform:capitalize;
    }
    .table tr{
        text-transform:capitalize;

    }
    .table td{
/*        border-right:1px solid black;
        border-left:1px solid black;*/
    }
    .info2{
        float:left;
        margin-bottom: 30px;
    }
    .info2 ol table {

        font-size: 12px;
    }
    .info1{
        font-weight:bold;
        float:left;
    }
    .info1 tr{
        font-size: 12px;
    }
    .rightleft{
        height:150px;

    }
    .rightleft .left{
        float:left

    }
    .rightleft .right{
        float:right;}
    .note2{
        font-size: 13px;
    }
    .note2{
        font-size: 12px;
        float: right;
    }
    .detail{
        border: #039;
    }
</style>

<?php
include"./connection.php";
?>
<center>
    <table cellpadding="8">
        <tr>
            <td rowspan="2"><img src="img/gallery/lr1.png" width="75" height="75"/></td>
            <td><h2>PERGURUAN ISLAM RAUDLATUL JANNAH</h2></td>
        </tr>
        <tr>
            <td>Jl. Jatisari Permai X/2 Pepelegi, Waru-Sidoarjo</td>
        </tr>
    </table>
    
    <h3>KARTU PEMBAYARAN ANTAR JEMPUT SISWA</h3>
</center>
<div class="content2" style="margin-top:30px;">
    <table class="table" cellpadding="5" cellspacing="0">
        <tr>
            <td>Nama Siswa</td>
            <td>:<?php ?></td>
        </tr>
        <tr>
            <td>Nama Ortu</td>
            <td>:<?php ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:<?php ?></td>
        </tr>
        <tr>
            <td>Tel. /HP</td>
            <td>:<?php ?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:<?php ?></td>
        </tr>
        <tr>
            <td>Tarif</td>
            <td>:<?php ?></td>
        </tr>
        <tr>
            <td>Sopir</td>
            <td>:<?php ?></td>
        </tr>
        <tr>
            <td>Jenis</td>
            <td>:<?php ?></td>
        </tr>
    </table>
    <br/>
    <table class="table" border="1px" style="width: 100%"  cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th rowspan="2">Tgl.</th>
                <th rowspan="2">Bulan</th>
                <th rowspan="2">Nominal</th>
                <th colspan="2">Tanda Tangan</th>
            </tr>
            <tr>
                <th>Orang Tua</th>
                <th>Petugas</th>
            </tr>
        </thead>
        <tbody>
            <tr >
                <td>11-12-2015</td>
                <td>Agustus</td>
                <td style='text-align:right;'>Rp. 100.000</td>
                <td style="height: 15%"></td>
                <td style="height: 15%"></td>
            </tr>
        </tbody>
    </table>
    <p><small><i>Ket: Pembayaran paling lambat tanggal 10 setiap bulannya</i></small></p>
</div>