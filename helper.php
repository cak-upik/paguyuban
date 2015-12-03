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

function day_count($month = '', $year = '') {
    if (empty($month)) {
        $month = date('m');
    }
    if (empty($year)) {
        $year = date('Y');
    }
    return date('d', mktime(0, 0, 0, $month + 1, 0, $year));
}
function begin_date_month() {
    $d1 = "01";
    $m1 = Date('m');
    $y1 = Date('Y');
    $date1 = $y1 . "-" . $m1 . "-" . $d1;
    return $date1;
}

function last_date_month() {
    $d2 = day_count();
    $m2 = Date('m');
    $y2 = Date('Y');
    $date2 = $y2 . "-" . $m2 . "-" . $d2;
    return $date2;
}