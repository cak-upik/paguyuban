<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function SaveSiswa($nama, $alamat, $kelas, $email, $notelp, $layanan) {
    $qry = "INSERT INTO siswa(nama_siswa, alamat, kelas, email, no_tlp, status) VALUES('".$nama."','".$alamat."','".$kelas."','".$email."','".$notelp."','".$layanan."')";
    $exec = mysql_query($qry);
    if($exec) {
        echo "<script>javascript:alert('Penyimpanan Data Siswa Berhasil')</script>";
        echo "<script>javascript:window.location.assign('index.php?pgy=siswa&page=view')</script>";
    }else {
        echo "<script>javascript:alert('Penyimpanan Data Siswa Gagal')</script>";
        echo "<script>javascript:history.go(-1)</script>";
    }
    return $exec;
}

function LoadSiswa() {
    
    
}