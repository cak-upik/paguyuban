<?php

include './connection.php';
//get id student
if (isset($_GET['getValStd'])) {
    $query = mysql_query("select s.layanan, sp.id_sopir, sp.nama, r.id_rute, r.nama_rute, r.tarif  from siswa s
                        join sopir sp on s.id_supir = sp.id_sopir
                        join rute r on s.id_rute = r.id_rute
                        where s.id_siswa = '$_GET[getValStd]' 
                        ");
    $result = mysql_fetch_array($query);

    echo json_encode($result);
}

//function code trx
function codeTrx() {
    $query = mysql_query("SELECT (substr(kode_bayar,14,2) + 1) as kode FROM `transaksi` order by id_transaksi desc limit 1 ");
    $row = mysql_fetch_array($query);

    $depan = 'RJ';
    $tengah = date("dmY");
    $belakang = getMo($row['kode']);
    if ($belakang == '') {
        $bel = '01';
    } else {
        $bel = $belakang;
    }
    return $depan . '-' . $tengah . '-' . $bel;
}

//function date
function getMo($no) {
    if ($no == 1) {
        return "01";
    } elseif ($no == 2) {
        return "02";
    } elseif ($no == 3) {
        return "03";
    } elseif ($no == 4) {
        return "04";
    } elseif ($no == 5) {
        return "05";
    } elseif ($no == 6) {
        return "06";
    } elseif ($no == 7) {
        return "07";
    } elseif ($no == 8) {
        return "08";
    } elseif ($no == 9) {
        return "09";
    } else {
        return $no;
    }
}

function parseNamaBulan($when){
    $monthName="";
    if(isset($when)) {
        switch ($when) {
            case "1" :
                $monthName = "Januari";
            case "2" :
                $monthName = "Februari";
            case "3" :
                $monthName = "Maret";
            case "4" :
                $monthName = "April";
            case "5" :
                $monthName = "Mei";
            case "6" :
                $monthName = "Juni";
            case "7" :
                $monthName = "Juli";
            case "8" :
                $monthName = "Agustus";
            case "9" :
                $monthName = "September";
            case "10" :
                $monthName = "Oktober";
            case "11" :
                $monthName = "November";
            case "12" :
                $monthName = "Desember";
            default :
                $monthName = "Invalid";
        }
    }
    return $monthName;
}
