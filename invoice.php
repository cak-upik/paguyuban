<title>Invoice</title>
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
        /*        border-right:1px solid #ffffff;
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

</center>
<div class="content2" style="margin-top:30px;">
    <table class="table" cellpadding="5" cellspacing="0">
        <tr>
            <td>No.</td>
            <td>:<?php ?></td>
        </tr>
        <tr>
            <td>Telah Diterima dari</td>
            <td>:<?php ?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:<?php ?></td>
        </tr>
        <tr>
            <td>Uang Sejumlah</td>
            <td>:<?php ?></td>
        </tr>
        <tr>
            <td>Untuk Pembayaran</td>
            <td>: <strong><i>Antar Jemput</i></strong> <?php ?></td>
        </tr>
    </table>
    <br/>
    <table class="table" cellpadding="5" cellspacing="0">
        <tr>
            <td>Terbilang</td>
            <td>Rp <?php ?></td>
        </tr>
    </table>
    <br/>
    <table style="margin-left: 475px" cellpadding="10" cellspacing="0">
        <tr>
            <td>Sidoarjo, <?php echo "11-12-2014"?></td>
        </tr>
        <tr>            
            <td></td>
        </tr>
        <tr>
            <td><p style="text-decoration:underline"><?php echo "abcd"?></p></td>
        </tr>
    </table>
</div>