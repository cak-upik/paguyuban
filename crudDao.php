<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* ------------------------------------------- BEGIN SISWA DAO ------------------------------------------- */
function SaveSiswa($nama, $wali, $alamat, $kelas, $email, $notelp) {
    $qry = "INSERT INTO siswa(nama_siswa, nama_wali, alamat, kelas, email, no_tlp) VALUES('" . $nama . "','" . $wali . "','" . $alamat . "','" . $kelas . "','" . $email . "','" . $notelp . "')";
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

function UpdateSiswa($nama, $wali, $kelas, $alamat, $email, $notelp, $id) {
    $qry = "UPDATE siswa SET nama_siswa='" . $nama . "', nama_wali='" . $wali . "', alamat='" . $alamat . "', kelas='" . $kelas . "', email='" . $email . "', no_tlp='" . $notelp . "' WHERE id_siswa=" . $id;
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
                      <td>".$data['nama_wali']."</td>
                      <td>".$data['kelas']."</td>
                      <td>".$data['alamat']."</td>
                      <td>".$data['email']."</td>
                      <td>".$data['no_tlp']."</td>
                 </tr>";
            $i++;
        }
    }
    return $exec;
}

function autoCompleteSiswa() {
    $qry = "SELECT * FROM siswa";
    $exec = mysql_query($qry);
    if ($exec) {
        $siswaList = array();
        while($data=mysql_fetch_array($exec)) {
            $siswaList[] = $data['nama_siswa'];
        }
        echo json_encode($siswaList);
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
                      <td>".$data['nama_wali']."</td>
                      <td>".$data['alamat']."</td>
                      <td>".$data['kelas']."</td>
                      <td>".$data['email']."</td>
                      <td>".$data['no_tlp']."</td>
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
                      <td>".$data['nama_wali']."</td>
                      <td>".$data['alamat']."</td>
                      <td>".$data['kelas']."</td>
                      <td>".$data['email']."</td>
                      <td>".$data['no_tlp']."</td>
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

/* ------------------------------------------- BEGIN KARYAWAN DAO ------------------------------------------- */
function SaveKaryawan($nama, $tempat, $tanggal, $alamat, $email, $telp, $jabatan) {
    $qry = "INSERT INTO karyawan(nama_karyawan, tempat_lahir, tanggal_lahir, alamat, email, no_tlp, jabatan) VALUES('" . $nama . "','" . $tempat . "','" . $tanggal . "','" . $alamat . "','" . $email . "','" . $telp . "','" . $jabatan . "')";
    $exec = mysql_query($qry);
    if ($exec) {
        echo "<script>javascript:alert('Penyimpanan Data Karyawan Berhasil')</script>";
        echo "<script>javascript:window.location.assign('index.php?pgy=karyawan&page=view')</script>";
    } else {
        echo "<script>javascript:alert('Penyimpanan Data Karyawan Gagal')</script>";
        echo "<script>javascript:history.go(-1)</script>";
    }
    return $exec;
}

function UpdateKaryawan($nama, $tempat, $tanggal, $alamat, $email, $telp, $jabatan, $id) {
    $qry = "UPDATE karyawan SET nama_karyawan='" . $nama . "', tempat_lahir='" . $tempat . "', tanggal_lahir='" . $tanggal . "', alamat='" . $alamat . "', email='" . $email . "', no_tlp='" . $telp . "', jabatan='" . $jabatan . "' WHERE id_karyawan=" . $id;
    $exec = mysql_query($qry);
    if ($exec) {
        echo "<script>javascript:alert('Update Data Karyawan Berhasil')</script>";
        echo "<script>javascript:window.location.assign('index.php?pgy=karyawan&page=view')</script>";
    } else {
        echo "<script>javascript:alert('Update Data Karyawan Gagal')</script>";
        echo "<script>javascript:history.go(-1)</script>";
    }
    return $exec;
}

function DeleteKaryawan($id) {
    $qry = "DELETE FROM karyawan WHERE id_karyawan=". $id;
    $exec = mysql_query($qry);
    if ($exec) {
        echo "<script>javascript:alert('Delete Data Karyawan Berhasil')</script>";
        echo "<script>javascript:window.location.assign('index.php?pgy=karyawan&page=view')</script>";
    } else {
        echo "<script>javascript:alert('Delete Data Karyawan Gagal')</script>";
        echo "<script>javascript:history.go(-1)</script>";
    }
    return $exec;
}

function LoadKaryawan() {
    $i = 1;
    $qry = "SELECT * FROM karyawan";
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
                      <td>".$data['nama_karyawan']."</td>
                      <td>".$data['tempat_lahir']."</td>
                      <td>".$data['tanggal_lahir']."</td>
                      <td>".$data['alamat']."</td>
                      <td>".$data['email']."</td>
                      <td>".$data['no_tlp']."</td>
                      <td>".$data['jabatan']."</td>
                 </tr>";
            $i++;
        }
    } 
}

function EditKaryawan() {
    $qry = "SELECT * FROM karyawan";
    $exec = mysql_query($qry);
    if ($exec) {
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
                      <td><input type=button class='btn btn-danger btn' name=btnId".$data['id_karyawan']." value=Ubah onclick=window.location.assign('index.php?pgy=karyawan&page=editor&id=$data[id_karyawan]')></td>
                      <td>".$data['nama_karyawan']."</td>
                      <td>".$data['tempat_lahir']."</td>
                      <td>".$data['tanggal_lahir']."</td>
                      <td>".$data['alamat']."</td>
                      <td>".$data['email']."</td>
                      <td>".$data['no_tlp']."</td>
                      <td>".$data['jabatan']."</td>
                 </tr>";
        }
    }
}

function DeleteKaryawanView() {
    $qry = "SELECT * FROM karyawan";
    $exec = mysql_query($qry);
    if ($exec) {
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
                      <td><a class='btn btn-danger btn' href=\"index.php?pgy=karyawan&do=delete&id=".$data['id_karyawan']."\" onclick = \"if (! confirm('Anda Yakin Akan Menghapus?')) return false;\">Hapus</td>
                      <td>".$data['nama_karyawan']."</td>
                      <td>".$data['tempat_lahir']."</td>
                      <td>".$data['tanggal_lahir']."</td>
                      <td>".$data['alamat']."</td>
                      <td>".$data['email']."</td>
                      <td>".$data['no_tlp']."</td>
                      <td>".$data['jabatan']."</td>
                 </tr>";
        }
    }
}

function getValueKaryawan($field, $id, $param) {
    $qry = "SELECT ".$field." FROM karyawan WHERE ".$param."='".$id."'";
    $exec = mysql_query($qry);
    $data = mysql_fetch_array($exec);
    $text = $data[$field];
    return $text;
}

/* ------------------------------------------- END KARYAWAN DAO ------------------------------------------- */

/* ------------------------------------------- BEGIN RUTE DAO ------------------------------------------- */
function SaveRute($nama, $kota, $tarif) {
    $qry = "INSERT INTO rute(nama_rute, kota, tarif) VALUES('" . $nama . "','" . $kota . "','" . $tarif . "')";
    $exec = mysql_query($qry);
    if ($exec) {
        echo "<script>javascript:alert('Penyimpanan Data Rute Berhasil')</script>";
        echo "<script>javascript:window.location.assign('index.php?pgy=rute&page=view')</script>";
    } else {
        echo "<script>javascript:alert('Penyimpanan Data Rute Gagal')</script>";
        echo "<script>javascript:history.go(-1)</script>";
    }
    return $exec;
}

function UpdateRute($nama, $kota, $tarif, $id) {
    $qry = "UPDATE rute SET nama_rute='" . $nama . "', kota='" . $kota . "', tarif='" . $tarif . "' WHERE id_rute=" . $id;
    $exec = mysql_query($qry);
    if ($exec) {
        echo "<script>javascript:alert('Update Data Rute Berhasil')</script>";
        echo "<script>javascript:window.location.assign('index.php?pgy=rute&page=view')</script>";
    } else {
        echo "<script>javascript:alert('Update Data Rute Gagal')</script>";
        echo "<script>javascript:history.go(-1)</script>";
    }
    return $exec;
}

function DeleteRute($id) {
    $qry = "DELETE FROM rute WHERE id_rute=". $id;
    $exec = mysql_query($qry);
    if ($exec) {
        echo "<script>javascript:alert('Delete Data Rute Berhasil')</script>";
        echo "<script>javascript:window.location.assign('index.php?pgy=rute&page=view')</script>";
    } else {
        echo "<script>javascript:alert('Delete Data Rute Gagal')</script>";
        echo "<script>javascript:history.go(-1)</script>";
    }
    return $exec;
}

function LoadRute() {
    $i = 1;
    $qry = "SELECT * FROM rute";
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
                      <td>".$data['nama_rute']."</td>
                      <td>".$data['kota']."</td>
                      <td>".$data['tarif']."</td>
                 </tr>";
            $i++;
        }
    } 
}

function EditRute() {
    $qry = "SELECT * FROM rute";
    $exec = mysql_query($qry);
    if ($exec) {
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
                      <td><input type=button class='btn btn-danger btn' name=btnId".$data['id_rute']." value=Ubah onclick=window.location.assign('index.php?pgy=rute&page=editor&id=$data[id_rute]')></td>
                      <td>".$data['nama_rute']."</td>
                      <td>".$data['kota']."</td>
                      <td>".$data['tarif']."</td>
                 </tr>";
        }
    }
}

function DeleteRuteView() {
    $qry = "SELECT * FROM rute";
    $exec = mysql_query($qry);
    if ($exec) {
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
                      <td><a class='btn btn-danger btn' href=\"index.php?pgy=rute&do=delete&id=".$data['id_rute']."\" onclick = \"if (! confirm('Anda Yakin Akan Menghapus?')) return false;\">Hapus</td>
                      <td>".$data['nama_rute']."</td>
                      <td>".$data['kota']."</td>
                      <td>".$data['tarif']."</td>
                 </tr>";
        }
    }
}

function getValueRute($field, $id, $param) {
    $qry = "SELECT ".$field." FROM rute WHERE ".$param."='".$id."'";
    $exec = mysql_query($qry);
    $data = mysql_fetch_array($exec);
    $text = $data[$field];
    return $text;
}

/* ------------------------------------------- END RUTE DAO ------------------------------------------- */

/* ------------------------------------------- BEGIN LAYANAN DAO ------------------------------------------- */
function SaveLayanan($layanan, $supir, $rute, $id) {
    $qry = "UPDATE siswa SET layanan='" . $layanan . "', id_supir='" . $supir . "', id_rute='" . $rute . "' WHERE id_siswa=" . $id;
    $exec = mysql_query($qry);
    if ($exec) {
        echo "<script>javascript:alert('Penyimpanan Data Layanan Berhasil')</script>";
        echo "<script>javascript:window.location.assign('index.php?pgy=enroll&page=view')</script>";
    } else {
        echo "<script>javascript:alert('Penyimpanan Data Layanan Gagal')</script>";
        echo "<script>javascript:history.go(-1)</script>";
    }
    return $exec;
}

function DeleteLayanan($id) {
    $qry = "UPDATE siswa SET layanan='', id_supir='', id_rute='' WHERE id_siswa=" . $id;
    $exec = mysql_query($qry);
    if ($exec) {
        echo "<script>javascript:alert('Delete Data Layanan Berhasil')</script>";
        echo "<script>javascript:window.location.assign('index.php?pgy=enroll&page=view')</script>";
    } else {
        echo "<script>javascript:alert('Delete Data Layanan Gagal')</script>";
        echo "<script>javascript:history.go(-1)</script>";
    }
    return $exec;
}

function LoadLayanan() {
    $i = 1;
    $qry = "SELECT siswa.nama_siswa, siswa.layanan, sopir.nama, rute.nama_rute FROM siswa INNER JOIN sopir ON siswa.id_supir=sopir.id_sopir INNER JOIN rute ON siswa.id_rute=rute.id_rute GROUP BY siswa.id_siswa ORDER BY siswa.id_siswa ASC";
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
                      <td>".$data['nama']."</td>
                      <td>".$data['nama_rute']."</td>
                      <td>".$data['layanan']."</td>
                 </tr>";
            $i++;
        }
    } 
}

function EditLayanan() {
    $qry = "SELECT siswa.id_siswa, siswa.nama_siswa, siswa.layanan, sopir.nama, rute.nama_rute FROM siswa INNER JOIN sopir ON siswa.id_supir=sopir.id_sopir INNER JOIN rute ON siswa.id_rute=rute.id_rute GROUP BY siswa.id_siswa ORDER BY siswa.id_siswa ASC";
    $exec = mysql_query($qry);
    if ($exec) {
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
                      <td><input type=button class='btn btn-danger btn' name=btnId".$data['id_siswa']." value=Ubah onclick=window.location.assign('index.php?pgy=enroll&page=editor&id=$data[id_siswa]')></td>
                      <td>".$data['nama_siswa']."</td>
                      <td>".$data['nama']."</td>
                      <td>".$data['nama_rute']."</td>
                      <td>".$data['layanan']."</td>
                 </tr>";
        }
    }
}

function DeleteLayananView() {
    $qry = "SELECT siswa.id_siswa, siswa.nama_siswa, siswa.layanan, sopir.nama, rute.nama_rute FROM siswa INNER JOIN sopir ON siswa.id_supir=sopir.id_sopir INNER JOIN rute ON siswa.id_rute=rute.id_rute GROUP BY siswa.id_siswa ORDER BY siswa.id_siswa ASC";
    $exec = mysql_query($qry);
    if ($exec) {
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
                      <td><a class='btn btn-danger btn' href=\"index.php?pgy=enroll&do=delete&id=".$data['id_siswa']."\" onclick = \"if (! confirm('Anda Yakin Akan Menghapus?')) return false;\">Hapus</td>
                      <td>".$data['nama_siswa']."</td>
                      <td>".$data['nama']."</td>
                      <td>".$data['nama_rute']."</td>
                      <td>".$data['layanan']."</td>
                 </tr>";
        }
    }
}

function getValueLayanan($field, $id, $param) {
    $qry = "SELECT ".$field." FROM siswa WHERE ".$param."='".$id."'";
    $exec = mysql_query($qry);
    $data = mysql_fetch_array($exec);
    $text = $data[$field];
    return $text;
}

function getOptionSiswa(){
    $qry = "SELECT id_siswa, nama_siswa FROM siswa WHERE id_supir=0 OR id_supir IS NULL AND id_rute=0 OR id_rute IS NULL ORDER BY id_siswa";
    $exec = mysql_query($qry);
    if(mysql_num_rows($exec) == 0) {
            echo "<option value=''>Tidak Ada Data</option>";
    }
    while($data=  mysql_fetch_array($exec)){
        echo "<option value=". $data['id_siswa'] .">". $data['nama_siswa'] ."</option>";
    }
}

function getOptionSupir(){
    $qry = "SELECT id_sopir, nama FROM sopir ORDER BY id_sopir";
    $exec = mysql_query($qry);
    if(mysql_num_rows($exec) == 0) {
            echo "<option value=''>Tidak Ada Data</option>";
    }
    while($data=  mysql_fetch_array($exec)){
        echo "<option value=". $data['id_sopir'] .">". $data['nama'] ."</option>";
    }
}

function getOptionRute(){
    $qry = "SELECT id_rute, nama_rute FROM rute ORDER BY id_rute";
    $exec = mysql_query($qry);
    if(mysql_num_rows($exec) == 0) {
            echo "<option value=''>Tidak Ada Data</option>";
    }
    while($data=  mysql_fetch_array($exec)){
        echo "<option value=". $data['id_rute'] .">". $data['nama_rute'] ."</option>";
    }
}

function getLayananRute($id) {
    $qry = "SELECT rute.id_rute, rute.nama_rute FROM siswa INNER JOIN rute ON siswa.id_rute=rute.id_rute WHERE siswa.id_siswa=".$id;
    $qryRute = "SELECT * FROM rute";
    $exec = mysql_query($qry);
    while($data=mysql_fetch_array($exec)){
        echo "<option value=". $data['id_rute'] .">". $data['nama_rute'] ."</option>"
           . "<option value=''>-----------------------------------------------------</option>";
    }
    $execRute = mysql_query($qryRute);
    while($rute=mysql_fetch_array($execRute)){
        echo "<option value=". $rute['id_rute'] .">". $rute['nama_rute'] ."</option>";
    }
    $text = $data['nama_rute'];
    return $text;
}

function getLayananSupir($id) {
    $qry = "SELECT sopir.id_sopir, sopir.nama FROM siswa INNER JOIN sopir ON siswa.id_supir=sopir.id_sopir WHERE siswa.id_siswa=".$id;
    $qrySupir = "SELECT * FROM sopir";
    $exec = mysql_query($qry);
    while($data=mysql_fetch_array($exec)){
        echo "<option value=". $data['id_sopir'] .">". $data['nama'] ."</option>"
           . "<option value=''>-----------------------------------------------------</option>";
    }
    $execSupir = mysql_query($qrySupir);
    while($supir=mysql_fetch_array($execSupir)) {
        echo "<option value=". $supir['id_sopir'] .">". $supir['nama'] ."</option>";
    }
    $text = $data['nama'];
    return $text;
}

/* ------------------------------------------- END LAYANAN DAO ------------------------------------------- */