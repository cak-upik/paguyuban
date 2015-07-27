<?php

include './connection.php';
if (isset($_GET['getValStd'])) {
    $query = mysql_query("select s.layanan,sp.nama, r.nama_rute, r.tarif  from siswa s
                        join sopir sp on s.id_supir = sp.id_sopir
                        join rute r on s.id_rute = r.id_rute
                        where s.id_siswa = '$_GET[getValStd]' 
                        ");
    $result = mysql_fetch_array($query);
    
    echo json_encode($result);
}