<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include './connection.php';

$qry = "SELECT * FROM siswa";
$exec = mysql_query($qry);
if ($exec) {
    $siswaList = array();
    while($data=mysql_fetch_array($exec)) {
        $siswaList[] = $data['nama_siswa'];
    }
echo json_encode($siswaList);
}