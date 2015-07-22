<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* ------------------------------------------- BEGIN SISWA DAO ------------------------------------------- */
function SaveSiswa($nama, $alamat, $kelas, $email, $notelp, $layanan) {
    $qry = "INSERT INTO siswa(nama_siswa, alamat, kelas, email, no_tlp, status) VALUES('" . $nama . "','" . $alamat . "','" . $kelas . "','" . $email . "','" . $notelp . "','" . $layanan . "')";
    $exec = mysql_query($qry);
    if ($exec) {
        echo "<script>javascript:alert('Penyimpanan Data Siswa Berhasil')</script>";
        echo "<script>javascript:window.location.assign('index.php?pgy=siswa&page=view')</script>";
    } else {
        echo "<script>javascript:alert('Penyimpanan Data Siswa Gagal')</script>";
        echo "<script>javascript:history.go(-1)</script>";
    }
    return $exec;
}

function UpdateSiswa($nama, $kelas, $alamat, $email, $notelp, $layanan, $id) {
    $qry = "UPDATE siswa SET nama_siswa='" . $nama . "', alamat='" . $alamat . "', kelas='" . $kelas . "', email='" . $email . "', no_tlp='" . $notelp . "', status='" . $layanan . "' WHERE id_siswa=" . $id;
    $exec = mysql_query($qry);
    if ($exec) {
        echo "<script>javascript:alert('Update Data Siswa Berhasil')</script>";
        echo "<script>javascript:window.location.assign('index.php?pgy=siswa&page=view')</script>";
    } else {
        echo "<script>javascript:alert('Update Data Siswa Gagal')</script>";
        echo "<script>javascript:history.go(-1)</script>";
    }
    return $exec;
}

function DeleteSiswa($id) {
    $qry = "DELETE FROM siswa WHERE id_siswa=". $id;
    $exec = mysql_query($qry);
    if ($exec) {
        echo "<script>javascript:alert('Delete Data Siswa Berhasil')</script>";
        echo "<script>javascript:window.location.assign('index.php?pgy=siswa&page=view')</script>";
    } else {
        echo "<script>javascript:alert('Delete Data Siswa Gagal')</script>";
        echo "<script>javascript:history.go(-1)</script>";
    }
    return $exec;
}

function LoadSiswa() {
    $i = 1;
    $qry = "SELECT * FROM siswa";
    $exec = mysql_query($qry);
    if ($exec) {
        if(mysql_num_rows($exec) == 0) {
            echo "<tr>
                    <td colspan=7><center><h4>No Data</h4><center></td>
                  </tr>";
        }
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
                      <td>".$i."</td>
                      <td>".$data['nama_siswa']."</td>
                      <td>".$data['kelas']."</td>
                      <td>".$data['alamat']."</td>
                      <td>".$data['email']."</td>
                      <td>".$data['no_tlp']."</td>
                      <td>".$data['status']."</td>
                 </tr>";
            $i++;
        }
    } 
}

function EditSiswa() {
    $qry = "SELECT * FROM siswa";
    $exec = mysql_query($qry);
    if ($exec) {
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
                      <td><input type=button class='btn btn-danger btn' name=btnId".$data['id_siswa']." value=Ubah onclick=window.location.assign('index.php?pgy=siswa&page=editor&id=$data[id_siswa]')></td>
                      <td>".$data['nama_siswa']."</td>
                      <td>".$data['alamat']."</td>
                      <td>".$data['kelas']."</td>
                      <td>".$data['email']."</td>
                      <td>".$data['no_tlp']."</td>
                      <td>".$data['status']."</td>
                 </tr>";
        }
    }
}

function DeleteSiswaView() {
    $qry = "SELECT * FROM siswa";
    $exec = mysql_query($qry);
    if ($exec) {
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
                      <td><a class='btn btn-danger btn' href=\"index.php?pgy=siswa&do=delete&id=".$data['id_siswa']."\" onclick = \"if (! confirm('Anda Yakin Akan Menghapus?')) return false;\">Hapus</td>
                      <td>".$data['nama_siswa']."</td>
                      <td>".$data['alamat']."</td>
                      <td>".$data['kelas']."</td>
                      <td>".$data['email']."</td>
                      <td>".$data['no_tlp']."</td>
                      <td>".$data['status']."</td>
                 </tr>";
        }
    }
}

function getValueSiswa($field, $id, $param) {
    $qry = "SELECT ".$field." FROM siswa WHERE ".$param."='".$id."'";
    $exec = mysql_query($qry);
    $data = mysql_fetch_array($exec);
    $text = $data[$field];
    return $text;
}

/* ------------------------------------------- END SISWA DAO ------------------------------------------- */

/* ------------------------------------------- BEGIN SUPIR DAO ------------------------------------------- */
function SaveSupir($nama, $alamat, $kota, $telp, $sim, $nomobil, $merk) {
    $qry = "INSERT INTO sopir(nama, alamat, kota, no_tlp, no_sim, no_mobil, merk_mobil) VALUES('" . $nama . "','" . $alamat . "','" . $kota . "','" . $telp . "','" . $sim . "','" . $nomobil . "','" . $merk . "')";
    $exec = mysql_query($qry);
    if ($exec) {
        echo "<script>javascript:alert('Penyimpanan Data Supir Berhasil')</script>";
        echo "<script>javascript:window.location.assign('index.php?pgy=supir&page=view')</script>";
    } else {
        echo "<script>javascript:alert('Penyimpanan Data Supir Gagal')</script>";
        echo "<script>javascript:history.go(-1)</script>";
    }
    return $exec;
}

function UpdateSupir($nama, $alamat, $kota, $telp, $sim, $nomobil, $merk, $id) {
    $qry = "UPDATE sopir SET nama='" . $nama . "', alamat='" . $alamat . "', kota='" . $kota . "', no_tlp='" . $telp . "', no_sim='" . $sim . "', no_mobil='" . $nomobil . "', merk_mobil='" . $merk . "' WHERE id_sopir=" . $id;
    $exec = mysql_query($qry);
    if ($exec) {
        echo "<script>javascript:alert('Update Data Sopir Berhasil')</script>";
        echo "<script>javascript:window.location.assign('index.php?pgy=supir&page=view')</script>";
    } else {
        echo "<script>javascript:alert('Update Data Sopir Gagal')</script>";
        echo "<script>javascript:history.go(-1)</script>";
    }
    return $exec;
}

function DeleteSupir($id) {
    $qry = "DELETE FROM sopir WHERE id_sopir=". $id;
    $exec = mysql_query($qry);
    if ($exec) {
        echo "<script>javascript:alert('Delete Data Sopir Berhasil')</script>";
        echo "<script>javascript:window.location.assign('index.php?pgy=supir&page=view')</script>";
    } else {
        echo "<script>javascript:alert('Delete Data Sopir Gagal')</script>";
        echo "<script>javascript:history.go(-1)</script>";
    }
    return $exec;
}

function LoadSupir() {
    $i = 1;
    $qry = "SELECT * FROM sopir";
    $exec = mysql_query($qry);
    if ($exec) {
        if(mysql_num_rows($exec) == 0) {
            echo "<tr>
                    <td colspan=7><center><h4>No Data</h4><center></td>
                  </tr>";
        }
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
                      <td>".$i."</td>
                      <td>".$data['nama']."</td>
                      <td>".$data['alamat']."</td>
                      <td>".$data['kota']."</td>
                      <td>".$data['no_tlp']."</td>
                      <td>".$data['no_sim']."</td>
                      <td>".$data['no_mobil']."</td>
                      <td>".$data['merk_mobil']."</td>
                 </tr>";
            $i++;
        }
    } 
}

function EditSupir() {
    $qry = "SELECT * FROM sopir";
    $exec = mysql_query($qry);
    if ($exec) {
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
                      <td><input type=button class='btn btn-danger btn' name=btnId".$data['id_sopir']." value=Ubah onclick=window.location.assign('index.php?pgy=supir&page=editor&id=$data[id_sopir]')></td>
                      <td>".$data['nama']."</td>
                      <td>".$data['alamat']."</td>
                      <td>".$data['kota']."</td>
                      <td>".$data['no_tlp']."</td>
                      <td>".$data['no_sim']."</td>
                      <td>".$data['no_mobil']."</td>
                      <td>".$data['merk_mobil']."</td>
                 </tr>";
        }
    }
}

function DeleteSupirView() {
    $qry = "SELECT * FROM sopir";
    $exec = mysql_query($qry);
    if ($exec) {
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
                      <td><a class='btn btn-danger btn' href=\"index.php?pgy=supir&do=delete&id=".$data['id_sopir']."\" onclick = \"if (! confirm('Anda Yakin Akan Menghapus?')) return false;\">Hapus</td>
                      <td>".$data['nama']."</td>
                      <td>".$data['alamat']."</td>
                      <td>".$data['kota']."</td>
                      <td>".$data['no_tlp']."</td>
                      <td>".$data['no_sim']."</td>
                      <td>".$data['no_mobil']."</td>
                      <td>".$data['merk_mobil']."</td>
                 </tr>";
        }
    }
}

function getValueSupir($field, $id, $param) {
    $qry = "SELECT ".$field." FROM sopir WHERE ".$param."='".$id."'";
    $exec = mysql_query($qry);
    $data = mysql_fetch_array($exec);
    $text = $data[$field];
    return $text;
}

/* ------------------------------------------- END SUPIR DAO ------------------------------------------- */
