<?php

session_start();

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
    $qry = "DELETE FROM siswa WHERE id_siswa=" . $id;
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
        if (mysql_num_rows($exec) == 0) {
            echo "<tr>
                    <td colspan=7><center><h4>No Data</h4><center></td>
                  </tr>";
        }
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
                      <td>" . $i . "</td>
                      <td>" . $data['nama_siswa'] . "</td>
                      <td>" . $data['nama_wali'] . "</td>
                      <td>" . $data['kelas'] . "</td>
                      <td>" . $data['alamat'] . "</td>
                      <td>" . $data['email'] . "</td>
                      <td>" . $data['no_tlp'] . "</td>
                 </tr>";
            $i++;
        }
    }
    return $exec;
}

function EditSiswa() {
    $qry = "SELECT * FROM siswa";
    $exec = mysql_query($qry);
    if ($exec) {
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
                      <td><input type=button class='btn btn-danger btn' name=btnId" . $data['id_siswa'] . " value=Ubah onclick=window.location.assign('index.php?pgy=siswa&page=editor&id=$data[id_siswa]')></td>
                      <td>" . $data['nama_siswa'] . "</td>
                      <td>" . $data['nama_wali'] . "</td>
                      <td>" . $data['alamat'] . "</td>
                      <td>" . $data['kelas'] . "</td>
                      <td>" . $data['email'] . "</td>
                      <td>" . $data['no_tlp'] . "</td>
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
                      <td><a class='btn btn-danger btn' href=\"index.php?pgy=siswa&do=delete&id=" . $data['id_siswa'] . "\" onclick = \"if (! confirm('Anda Yakin Akan Menghapus?')) return false;\">Hapus</td>
                      <td>" . $data['nama_siswa'] . "</td>
                      <td>" . $data['nama_wali'] . "</td>
                      <td>" . $data['alamat'] . "</td>
                      <td>" . $data['kelas'] . "</td>
                      <td>" . $data['email'] . "</td>
                      <td>" . $data['no_tlp'] . "</td>
                 </tr>";
        }
    }
}

function getValueSiswa($field, $id, $param) {
    $qry = "SELECT " . $field . " FROM siswa WHERE " . $param . "='" . $id . "'";
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
    $qry = "DELETE FROM sopir WHERE id_sopir=" . $id;
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
        if (mysql_num_rows($exec) == 0) {
            echo "<tr>
                    <td colspan=7><center><h4>No Data</h4><center></td>
                  </tr>";
        }
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
                      <td>" . $i . "</td>
                      <td>" . $data['nama'] . "</td>
                      <td>" . $data['alamat'] . "</td>
                      <td>" . $data['kota'] . "</td>
                      <td>" . $data['no_tlp'] . "</td>
                      <td>" . $data['no_sim'] . "</td>
                      <td>" . $data['no_mobil'] . "</td>
                      <td>" . $data['merk_mobil'] . "</td>
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
                      <td><input type=button class='btn btn-danger btn' name=btnId" . $data['id_sopir'] . " value=Ubah onclick=window.location.assign('index.php?pgy=supir&page=editor&id=$data[id_sopir]')></td>
                      <td>" . $data['nama'] . "</td>
                      <td>" . $data['alamat'] . "</td>
                      <td>" . $data['kota'] . "</td>
                      <td>" . $data['no_tlp'] . "</td>
                      <td>" . $data['no_sim'] . "</td>
                      <td>" . $data['no_mobil'] . "</td>
                      <td>" . $data['merk_mobil'] . "</td>
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
                      <td><a class='btn btn-danger btn' href=\"index.php?pgy=supir&do=delete&id=" . $data['id_sopir'] . "\" onclick = \"if (! confirm('Anda Yakin Akan Menghapus?')) return false;\">Hapus</td>
                      <td>" . $data['nama'] . "</td>
                      <td>" . $data['alamat'] . "</td>
                      <td>" . $data['kota'] . "</td>
                      <td>" . $data['no_tlp'] . "</td>
                      <td>" . $data['no_sim'] . "</td>
                      <td>" . $data['no_mobil'] . "</td>
                      <td>" . $data['merk_mobil'] . "</td>
                 </tr>";
        }
    }
}

function getValueSupir($field, $id, $param) {
    $qry = "SELECT " . $field . " FROM sopir WHERE " . $param . "='" . $id . "'";
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
    $qry = "DELETE FROM karyawan WHERE id_karyawan=" . $id;
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
        if (mysql_num_rows($exec) == 0) {
            echo "<tr>
                    <td colspan=7><center><h4>No Data</h4><center></td>
                  </tr>";
        }
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
                      <td>" . $i . "</td>
                      <td>" . $data['nama_karyawan'] . "</td>
                      <td>" . $data['tempat_lahir'] . "</td>
                      <td>" . $data['tanggal_lahir'] . "</td>
                      <td>" . $data['alamat'] . "</td>
                      <td>" . $data['email'] . "</td>
                      <td>" . $data['no_tlp'] . "</td>
                      <td>" . $data['jabatan'] . "</td>
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
                      <td><input type=button class='btn btn-danger btn' name=btnId" . $data['id_karyawan'] . " value=Ubah onclick=window.location.assign('index.php?pgy=karyawan&page=editor&id=$data[id_karyawan]')></td>
                      <td>" . $data['nama_karyawan'] . "</td>
                      <td>" . $data['tempat_lahir'] . "</td>
                      <td>" . $data['tanggal_lahir'] . "</td>
                      <td>" . $data['alamat'] . "</td>
                      <td>" . $data['email'] . "</td>
                      <td>" . $data['no_tlp'] . "</td>
                      <td>" . $data['jabatan'] . "</td>
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
                      <td><a class='btn btn-danger btn' href=\"index.php?pgy=karyawan&do=delete&id=" . $data['id_karyawan'] . "\" onclick = \"if (! confirm('Anda Yakin Akan Menghapus?')) return false;\">Hapus</td>
                      <td>" . $data['nama_karyawan'] . "</td>
                      <td>" . $data['tempat_lahir'] . "</td>
                      <td>" . $data['tanggal_lahir'] . "</td>
                      <td>" . $data['alamat'] . "</td>
                      <td>" . $data['email'] . "</td>
                      <td>" . $data['no_tlp'] . "</td>
                      <td>" . $data['jabatan'] . "</td>
                 </tr>";
        }
    }
}

function getValueKaryawan($field, $id, $param) {
    $qry = "SELECT " . $field . " FROM karyawan WHERE " . $param . "='" . $id . "'";
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
    $qry = "DELETE FROM rute WHERE id_rute=" . $id;
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
        if (mysql_num_rows($exec) == 0) {
            echo "<tr>
                    <td colspan=7><center><h4>No Data</h4><center></td>
                  </tr>";
        }
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
                      <td>" . $i . "</td>
                      <td>" . $data['nama_rute'] . "</td>
                      <td>" . $data['kota'] . "</td>
                      <td>" . $data['tarif'] . "</td>
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
                      <td><input type=button class='btn btn-danger btn' name=btnId" . $data['id_rute'] . " value=Ubah onclick=window.location.assign('index.php?pgy=rute&page=editor&id=$data[id_rute]')></td>
                      <td>" . $data['nama_rute'] . "</td>
                      <td>" . $data['kota'] . "</td>
                      <td>" . $data['tarif'] . "</td>
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
                      <td><a class='btn btn-danger btn' href=\"index.php?pgy=rute&do=delete&id=" . $data['id_rute'] . "\" onclick = \"if (! confirm('Anda Yakin Akan Menghapus?')) return false;\">Hapus</td>
                      <td>" . $data['nama_rute'] . "</td>
                      <td>" . $data['kota'] . "</td>
                      <td>" . $data['tarif'] . "</td>
                 </tr>";
        }
    }
}

function getValueRute($field, $id, $param) {
    $qry = "SELECT " . $field . " FROM rute WHERE " . $param . "='" . $id . "'";
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
        if (mysql_num_rows($exec) == 0) {
            echo "<tr>
                    <td colspan=7><center><h4>No Data</h4><center></td>
                  </tr>";
        }
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
                      <td>" . $i . "</td>
                      <td>" . $data['nama_siswa'] . "</td>
                      <td>" . $data['nama'] . "</td>
                      <td>" . $data['nama_rute'] . "</td>
                      <td>" . $data['layanan'] . "</td>
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
                      <td><input type=button class='btn btn-danger btn' name=btnId" . $data['id_siswa'] . " value=Ubah onclick=window.location.assign('index.php?pgy=enroll&page=editor&id=$data[id_siswa]')></td>
                      <td>" . $data['nama_siswa'] . "</td>
                      <td>" . $data['nama'] . "</td>
                      <td>" . $data['nama_rute'] . "</td>
                      <td>" . $data['layanan'] . "</td>
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
                      <td><a class='btn btn-danger btn' href=\"index.php?pgy=enroll&do=delete&id=" . $data['id_siswa'] . "\" onclick = \"if (! confirm('Anda Yakin Akan Menghapus?')) return false;\">Hapus</td>
                      <td>" . $data['nama_siswa'] . "</td>
                      <td>" . $data['nama'] . "</td>
                      <td>" . $data['nama_rute'] . "</td>
                      <td>" . $data['layanan'] . "</td>
                 </tr>";
        }
    }
}

function getValueLayanan($field, $id, $param) {
    $qry = "SELECT " . $field . " FROM siswa WHERE " . $param . "='" . $id . "'";
    $exec = mysql_query($qry);
    $data = mysql_fetch_array($exec);
    $text = $data[$field];
    return $text;
}

function getOptionSiswa() {
    $qry = "SELECT id_siswa, nama_siswa FROM siswa WHERE id_supir=0 OR id_supir IS NULL AND id_rute=0 OR id_rute IS NULL ORDER BY id_siswa";
    $exec = mysql_query($qry);
    if (mysql_num_rows($exec) == 0) {
        echo "<option value=''>Tidak Ada Data</option>";
    }
    while ($data = mysql_fetch_array($exec)) {
        echo "<option value=" . $data['id_siswa'] . ">" . $data['nama_siswa'] . "</option>";
    }
}

function getOptionSupir() {
    $qry = "SELECT id_sopir, nama FROM sopir ORDER BY id_sopir";
    $exec = mysql_query($qry);
    if (mysql_num_rows($exec) == 0) {
        echo "<option value=''>Tidak Ada Data</option>";
    }
    while ($data = mysql_fetch_array($exec)) {
        echo "<option value=" . $data['id_sopir'] . ">" . $data['nama'] . "</option>";
    }
}

function getOptionRute() {
    $qry = "SELECT id_rute, nama_rute FROM rute ORDER BY id_rute";
    $exec = mysql_query($qry);
    if (mysql_num_rows($exec) == 0) {
        echo "<option value=''>Tidak Ada Data</option>";
    }
    while ($data = mysql_fetch_array($exec)) {
        echo "<option value=" . $data['id_rute'] . ">" . $data['nama_rute'] . "</option>";
    }
}

function getLayananRute($id) {
    $qry = "SELECT rute.id_rute, rute.nama_rute FROM siswa INNER JOIN rute ON siswa.id_rute=rute.id_rute WHERE siswa.id_siswa=" . $id;
    $qryRute = "SELECT * FROM rute";
    $exec = mysql_query($qry);
    while ($data = mysql_fetch_array($exec)) {
        echo "<option value=" . $data['id_rute'] . ">" . $data['nama_rute'] . "</option>"
        . "<option value=''>-----------------------------------------------------</option>";
    }
    $execRute = mysql_query($qryRute);
    while ($rute = mysql_fetch_array($execRute)) {
        echo "<option value=" . $rute['id_rute'] . ">" . $rute['nama_rute'] . "</option>";
    }
    $text = $data['nama_rute'];
    return $text;
}

function getLayananSupir($id) {
    $qry = "SELECT sopir.id_sopir, sopir.nama FROM siswa INNER JOIN sopir ON siswa.id_supir=sopir.id_sopir WHERE siswa.id_siswa=" . $id;
    $qrySupir = "SELECT * FROM sopir";
    $exec = mysql_query($qry);
    while ($data = mysql_fetch_array($exec)) {
        echo "<option value=" . $data['id_sopir'] . ">" . $data['nama'] . "</option>"
        . "<option value=''>-----------------------------------------------------</option>";
    }
    $execSupir = mysql_query($qrySupir);
    while ($supir = mysql_fetch_array($execSupir)) {
        echo "<option value=" . $supir['id_sopir'] . ">" . $supir['nama'] . "</option>";
    }
    $text = $data['nama'];
    return $text;
}

/* ------------------------------------------- END LAYANAN DAO ------------------------------------------- */

/* ------------------------------------------- BEGIN TRANSAKSI DAO ------------------------------------------- */

function SaveTransaksi($kode, $siswa, $supir, $rute, $tgl, $total, $cli, $cls) {
    $qry = "INSERT INTO transaksi(kode_bayar, id_siswa, id_sopir, id_rute, tanggal_bayar, total_bayar, closing_intern, closing_supir) VALUES('" . $kode . "', '" . $siswa . "', '" . $supir . "', '" . $rute . "', '" . $tgl . "', '" . $total . "', '" . $cli . "', '" . $cls . "')";
    $exec = mysql_query($qry);
    if ($exec) {
        echo "<script>javascript:alert('Penyimpanan Data Transaksi Berhasil')</script>";
        echo "<script>javascript:window.location.assign('index.php?pgy=transaksi&page=view')</script>";
    } else {
        echo "<script>javascript:alert('Penyimpanan Data Transaksi Gagal')</script>";
        echo "<script>javascript:history.go(-1)</script>";
    }
    return $exec;
}

function DeleteTransaksi($id) {
    $qry = "DELETE FROM transaksi WHERE id_transaksi=" . $id;
    $exec = mysql_query($qry);
    if ($exec) {
        echo "<script>javascript:alert('Delete Data Transaksi Berhasil')</script>";
        echo "<script>javascript:window.location.assign('index.php?pgy=transaksi&page=view')</script>";
    } else {
        echo "<script>javascript:alert('Delete Data Transaksi Gagal')</script>";
        echo "<script>javascript:history.go(-1)</script>";
    }
    return $exec;
}

function LoadTransaksi() {
    $qry = "SELECT siswa.nama_siswa, siswa.layanan, sopir.nama, rute.nama_rute, transaksi.kode_bayar, transaksi.tanggal_bayar, transaksi.total_bayar FROM transaksi INNER JOIN sopir ON transaksi.id_sopir=sopir.id_sopir INNER JOIN siswa ON transaksi.id_siswa=siswa.id_siswa INNER JOIN rute ON transaksi.id_rute=rute.id_rute GROUP BY transaksi.kode_bayar ORDER BY transaksi.kode_bayar ASC";
    $exec = mysql_query($qry);
    if ($exec) {
        if (mysql_num_rows($exec) == 0) {
            echo "<tr>
                    <td colspan=7><center><h4>No Data</h4><center></td>
                  </tr>";
        }
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
                      <td>" . $data['kode_bayar'] . "</td>
                      <td>" . $data['nama'] . "</td>
                      <td>" . $data['nama_siswa'] . "</td>
                      <td>" . $data['nama_rute'] . "</td>
                      <td>" . $data['tanggal_bayar'] . "</td>
                      <td>" . $data['layanan'] . "</td>
                      <td>" . $data['total_bayar'] . "</td>
                 </tr>";
        }
    }
}

function EditTransaksi() {
    $qry = "SELECT siswa.nama_siswa, siswa.layanan, sopir.nama, rute.nama_rute, transaksi.id_transaksi, transaksi.kode_bayar, transaksi.tanggal_bayar, transaksi.total_bayar FROM transaksi INNER JOIN sopir ON transaksi.id_sopir=sopir.id_sopir INNER JOIN siswa ON transaksi.id_siswa=siswa.id_siswa INNER JOIN rute ON transaksi.id_rute=rute.id_rute GROUP BY transaksi.kode_bayar ORDER BY transaksi.kode_bayar ASC";
    $exec = mysql_query($qry);
    if ($exec) {
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
                      <td><input type=button class='btn btn-danger btn' name=btnId" . $data['id_transaksi'] . " value=Ubah onclick=window.location.assign('index.php?pgy=transaksi&page=editor&id=$data[id_transaksi]')></td>
                      <td>" . $data['kode_bayar'] . "</td>
                      <td>" . $data['nama'] . "</td>
                      <td>" . $data['nama_siswa'] . "</td>
                      <td>" . $data['nama_rute'] . "</td>
                      <td>" . $data['tanggal_bayar'] . "</td>
                      <td>" . $data['layanan'] . "</td>
                      <td>" . $data['total_bayar'] . "</td>
                 </tr>";
        }
    }
}

function DeleteTransaksiView() {
    $qry = "SELECT siswa.nama_siswa, siswa.layanan, sopir.nama, rute.nama_rute, transaksi.kode_bayar, transaksi.tanggal_bayar, transaksi.total_bayar FROM transaksi INNER JOIN sopir ON transaksi.id_sopir=sopir.id_sopir INNER JOIN siswa ON transaksi.id_siswa=siswa.id_siswa INNER JOIN rute ON transaksi.id_rute=rute.id_rute GROUP BY transaksi.kode_bayar ORDER BY transaksi.kode_bayar ASC";
    $exec = mysql_query($qry);
    if ($exec) {
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
                      <td><a class='btn btn-danger btn' href=\"index.php?pgy=transaksi&do=delete&id=" . $data['id_transaksi'] . "\" onclick = \"if (! confirm('Anda Yakin Akan Menghapus?')) return false;\">Hapus</td>
                      <td>" . $data['kode_bayar'] . "</td>
                      <td>" . $data['nama'] . "</td>
                      <td>" . $data['nama_siswa'] . "</td>
                      <td>" . $data['nama_rute'] . "</td>
                      <td>" . $data['tanggal_bayar'] . "</td>
                      <td>" . $data['layanan'] . "</td>
                      <td>" . $data['total_bayar'] . "</td>
                 </tr>";
        }
    }
}

function getValueTransaksi($field, $id) {
    $qry = "SELECT siswa.nama_siswa, siswa.layanan, sopir.nama, rute.nama_rute, transaksi.kode_bayar, transaksi.tanggal_bayar, transaksi.total_bayar FROM transaksi INNER JOIN sopir ON transaksi.id_sopir=sopir.id_sopir INNER JOIN siswa ON transaksi.id_siswa=siswa.id_siswa INNER JOIN rute ON transaksi.id_rute=rute.id_rute GROUP BY transaksi.kode_bayar WHERE id_transaksi=" . $id . " ORDER BY transaksi.kode_bayar ASC";
    $exec = mysql_query($qry);
    $data = mysql_fetch_array($exec);
    $text = $data[$field];
    return $text;
}

function getOptionSiswaTransaksi() {
    $qry = "SELECT id_siswa, nama_siswa FROM siswa WHERE id_supir=0 OR id_supir IS NULL AND id_rute=0 OR id_rute IS NULL ORDER BY id_siswa";
    $exec = mysql_query($qry);
    if (mysql_num_rows($exec) == 0) {
        echo "<option value=''>Tidak Ada Data</option>";
    }
    while ($data = mysql_fetch_array($exec)) {
        echo "<option value=" . $data['id_siswa'] . ">" . $data['nama_siswa'] . "</option>";
    }
}

function getOptionSupirTransaksi() {
    $qry = "SELECT id_sopir, nama FROM sopir ORDER BY id_sopir";
    $exec = mysql_query($qry);
    if (mysql_num_rows($exec) == 0) {
        echo "<option value=''>Tidak Ada Data</option>";
    }
    while ($data = mysql_fetch_array($exec)) {
        echo "<option value=" . $data['id_sopir'] . ">" . $data['nama'] . "</option>";
    }
}

function getOptionTransaksi() {
    $qry = "SELECT id_rute, nama_rute FROM rute ORDER BY id_rute";
    $exec = mysql_query($qry);
    if (mysql_num_rows($exec) == 0) {
        echo "<option value=''>Tidak Ada Data</option>";
    }
    while ($data = mysql_fetch_array($exec)) {
        echo "<option value=" . $data['id_rute'] . ">" . $data['nama_rute'] . "</option>";
    }
}

function getRuteTransaksi($id) {
    $qry = "SELECT rute.id_rute, rute.nama_rute FROM siswa INNER JOIN rute ON siswa.id_rute=rute.id_rute WHERE siswa.id_siswa=" . $id;
    $qryRute = "SELECT * FROM rute";
    $exec = mysql_query($qry);
    while ($data = mysql_fetch_array($exec)) {
        echo "<option value=" . $data['id_rute'] . ">" . $data['nama_rute'] . "</option>"
        . "<option value=''>-----------------------------------------------------</option>";
    }
    $execRute = mysql_query($qryRute);
    while ($rute = mysql_fetch_array($execRute)) {
        echo "<option value=" . $rute['id_rute'] . ">" . $rute['nama_rute'] . "</option>";
    }
    $text = $data['nama_rute'];
    return $text;
}

function getSupirTransaksi($id) {
    $qry = "SELECT sopir.id_sopir, sopir.nama FROM siswa INNER JOIN sopir ON siswa.id_supir=sopir.id_sopir WHERE siswa.id_siswa=" . $id;
    $qrySupir = "SELECT * FROM sopir";
    $exec = mysql_query($qry);
    while ($data = mysql_fetch_array($exec)) {
        echo "<option value=" . $data['id_sopir'] . ">" . $data['nama'] . "</option>"
        . "<option value=''>-----------------------------------------------------</option>";
    }
    $execSupir = mysql_query($qrySupir);
    while ($supir = mysql_fetch_array($execSupir)) {
        echo "<option value=" . $supir['id_sopir'] . ">" . $supir['nama'] . "</option>";
    }
    $text = $data['nama'];
    return $text;
}

/* ------------------------------------------- END TRANSAKSI DAO ------------------------------------------- */

/* ------------------------------------------- START USER DAO ------------------------------------------- */

function SaveUser($usernames, $password, $nama, $role, $email, $jabatan, $master_siswa, $master_sopir, $master_karyawan, $master_rute, $transaksi_pendaftaran, $transaksi_pembayaran, $kartu_pembayaran, $laporan_pembayaran, $laporan_sopir, $laporan_siswa, $laba, $setting_user, $setting_hak_akses, $setting_template) {
    $qry = "INSERT INTO user(username, password, nama, role, email, jabatan, master_siswa, master_sopir, master_karyawan, master_rute, trx_pendaftaran, trx_pembayaran, kartu_pembayaran, lap_pembayaran, lap_sopir, lap_siswa, laba, setting_user, setting_hak_akses, setting_template)"
            . " VALUES('" . $usernames . "', '" . $password . "', '" . $nama . "','" . $role . "','" . $email . "','" . "','" . $jabatan . "','" . $master_siswa . "','" . $master_sopir . "','" . $master_karyawan . "','" . $master_rute . "','" . $transaksi_pendaftaran . "','" . $transaksi_pembayaran . "','" . $kartu_pembayaran . "','" . $laporan_pembayaran . "','" . $laporan_sopir . "','" . $laporan_siswa . "','" . $laba . "','" . $setting_user . "','" . $setting_hak_akses . "','" . $setting_template . "')";
    $exec = mysql_query($qry);
    if ($exec) {
        echo "<script>javascript:alert('Penyimpanan Data User Berhasil')</script>";
        echo "<script>javascript:window.location.assign('index.php?pgy = user-manage&page = view')</script>";
    } else {
        echo "<script>javascript:alert('Penyimpanan Data User Gagal')</script>";
        echo "<script>javascript:history.go( - 1)</script>";
    }
    return $exec;
}

function UpdateUser($id, $usernames, $password, $nama, $role, $email, $jabatan, $master_siswa, $master_sopir, $master_karyawan, $master_rute, $transaksi_pendaftaran, $transaksi_pembayaran, $kartu_pembayaran, $laporan_pembayaran, $laporan_sopir, $laporan_siswa, $laba, $setting_user, $setting_hak_akses, $setting_template) {
    $qry = "UPDATE user SET username='" . $usernames . "', password ='" . $password . "', nama ='" . $nama . "', role='" . $role . "', email='" . $email . "'"
            . ", jabatan='" . $jabatan . "', master_siswa='" . $master_siswa . "', master_sopir='" . $master_sopir . "', master_karyawan='" . $master_karyawan . "'"
            . ", master_rute='" . $master_rute . "', trx_pendaftaran='" . $transaksi_pendaftaran . "', trx_pembayaran='" . $transaksi_pembayaran . "'"
            . ", kartu_pembayaran='" . $kartu_pembayaran . "', lap_pembayaran='" . $laporan_pembayaran . "', lap_sopir='" . $laporan_sopir . "', lap_siswa='" . $laporan_siswa . "'"
            . ", laba='" . $laba . "', setting_user='" . $setting_user . "', setting_hak_akses='" . $setting_hak_akses . "', setting_template='" . $setting_template . " WHERE id_karyawan=" . $id;
    
    $exec = mysql_query($qry);
    if ($exec) {
        echo "<script>javascript:alert('Update Data User Berhasil')</script>";
        echo "<script>javascript:window.location.assign('index.php?pgy=user-manage&page=view')</script>";
    } else {
        echo "<script>javascript:alert('Update Data User Gagal')</script>";
        echo "<script>javascript:history.go(-1)</script>";
    }
    return $exec;
}

function LoadUser() {
    $i = 1;
    $qry = "SELECT * FROM user where role not like '

superadmin'";
    $exec = mysql_query($qry);
    if ($exec) {
        if (mysql_num_rows($exec) == 0) {
            echo "<tr>
    <td colspan=7><center><h4>No Data</h4><center></td>
        </tr>";
        }
        while ($data = mysql_fetch_array($exec)) {
//            if ($data['role'] == 'superadmin') {
//                echo "<tr>
//                      <td>" . $i . "</td>
//                      <td>" . $data['username'] . "</td>
//                      <td>" . $data['nama'] . "</td>
//                      <td>" . $data['email'] . "</td>
//                      <td>" . $data['jabatan'] . "</td>
//                      <td>" . $data['role'] . "</td>
//                 </tr>";
//            } else {
            echo "<tr>
            <td>" . $i . "</td>
            <td>" . $data['username'] . "</td>
            <td>" . $data['nama'] . "</td>
            <td>" . $data['email'] . "</td>
            <td>" . $data['jabatan'] . "</td>
            <td>" . $data['role'] . "</td>
        </tr>";
//            }
            $i++;
        }
    }
}

function EditUser() {
    $qry = "SELECT * FROM user";
    $exec = mysql_query($qry);
    if ($exec) {
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
            <td><input type=button class='btn

                       btn-danger btn' name=btnId" . $data['id_user'] . " value=Ubah onclick=window.location.assign('index.php?pgy = user-manage&page = editor&id = $data[id_user]')></td>
            <td>" . $data['username'] . "</td>
            <td>" . $data['nama'] . "</td>
            <td>" . $data['email'] . "</td>
            <td>" . $data['jabatan'] . "</td>
            <td>" . $data['role'] . "</td>
        </tr>";
        }
    }
}

function getValueUser($field, $id, $param) {
    $qry = "SELECT " . $field . " FROM user WHERE " . $param . "='" . $id . "'";
    $exec = mysql_query($qry);
    $data = mysql_fetch_array($exec);
    $text = $data[$field];
    return $text;
}

function DeleteUserView() {
    $qry = "SELECT * FROM user";
    $exec = mysql_query($qry);
    if ($exec) {
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
            <td><a class='btn btn-danger

                   btn' href=\"index.php?pgy=user-manage&do=delete&id=" . $data['id_user'] . "\" onclick = \"if (! confirm('Anda Yakin Akan Menghapus?')) return false;\">Hapus</td>
            <td>" . $data['username'] . "</td>
            <td>" . $data['nama'] . "</td>
            <td>" . $data['email'] . "</td>
            <td>" . $data['jabatan'] . "</td>
            <td>" . $data['role'] . "</td>
        </tr>";
        }
    }
}

/* ------------------------------------------- END USER DAO ------------------------------------------- */

/* ------------------------------------------- LAPORAN KARTU PEMBAYARAN DAO ------------------------------------------- */

function LoadLaporanKartu() {
    $i = 1;
    $qry = "SELECT siswa.nama_siswa, siswa.nama_wali, siswa.layanan, siswa.alamat, siswa.no_tlp, siswa.kelas, sopir.nama, rute.nama_rute, rute.tarif, transaksi.kode_bayar, transaksi.tanggal_bayar, transaksi.total_bayar FROM transaksi INNER JOIN sopir ON transaksi.id_sopir=sopir.id_sopir INNER JOIN siswa ON transaksi.id_siswa=siswa.id_siswa INNER JOIN rute ON transaksi.id_rute=rute.id_rute GROUP BY siswa.id_siswa ORDER BY transaksi.id_transaksi ASC";
    $exec = mysql_query($qry);
    if ($exec) {
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
            <td>$i</td>
            <td>" . $data['

                kode_bayar'] . "</td>
            <td>" . $data['nama_siswa'] . "</td>
            <td>" . $data['kelas'] . "</td>
            <td>" . $data['nama'] . "</td>
            <td>" . $data['tanggal_bayar'] . "</td>
            <td>" . $data['tarif'] . "</td>
            <td>" . $data['total_bayar'] . "</td>
        </tr>";
            $i++;
        }
    }
    return $exec;
}

function ShowDetailIdentity($id) {
    $qry = "SELECT siswa.nama_siswa, siswa.nama_wali, siswa.layanan, siswa.alamat, siswa.no_tlp, siswa.kelas, sopir.nama, rute.nama_rute, rute.tarif, transaksi.kode_bayar FROM transaksi INNER JOIN sopir ON transaksi.id_sopir=sopir.id_sopir INNER JOIN siswa ON transaksi.id_siswa=siswa.id_siswa INNER JOIN rute ON transaksi.id_rute=rute.id_rute WHERE siswa.id_siswa=" . $id . " GROUP BY siswa.id_siswa";
    $exec = mysql_query($qry);
    if ($exec) {
        if (mysql_num_rows($exec) == 0) {
            echo "<script>javascript:alert('Tidak 

                                    Ada Data');";
        } else {
            $identity = mysql_fetch_array($exec);
            echo "  <label class=\"control-label\" for=\"namaSiswa\">: " . $identity['nama_siswa'] . "</label>
                                    < label class = \"control-label\" for=\"ortu\">: " . $identity['nama_wali'] . "</label>
                                    < label class = \"control-label\" for=\"alamat\">: " . $identity['alamat'] . "</label>
                                    < label class = \"control-label\" for=\"telp\">: " . $identity['no_tlp'] . "</label>
                                    < label class = \"control-label\" for=\"kelas\">: " . $identity['kelas'] . "</label>
                                    < label class = \"control-label\" for=\"tarif\">: " . $identity['tarif'] . "</label>
                                    < label class = \"control-label\" for=\"sopir\">: " . $identity['nama'] . "</label>
                                    < label class = \"control-label\" for=\"pilihan\">: " . $identity['layanan'] . "</label>";
        }
    }
    return $exec;
}

function ShowDetailTransaction($id) {
//    setlocale(LC_ALL, "id_ID");
//    date_default_timezone_set('Asia
//Jakarta');
//    strftime("%B", strtotime($data['tanggal']));
//    date("F", strtotime($data['tanggal']))
    $qry = "SELECT DATE(tanggal_bayar) as tanggal, MONTHNAME(tanggal_bayar) as bulan, total_bayar FROM transaksi INNER JOIN siswa ON transaksi.id_siswa=siswa.id_siswa WHERE siswa.id_siswa=" . $id;
    $exec = mysql_query($qry);
    while ($data = mysql_fetch_array($exec)) {
        echo "<tr>
                    < td class = \"span2\">" . date('d-m-Y ', strtotime($data['tanggal'])) . "</td>
                    < td class = \"span1\">" . $data['bulan'] . "</td>
                    < td class = \"span3\">" . $data['total_bayar'] . "</td>
                    < td class = \"span2\"></td>
                    < td class = \"span2\"></td>

                                                < /tr>";
    }
}

function DetailView() {
    $qry = "SELECT siswa.id_siswa, siswa.nama_siswa, siswa.nama_wali, siswa.layanan, siswa.alamat, siswa.no_tlp, siswa.kelas, sopir.nama, rute.nama_rute, rute.tarif, transaksi.id_transaksi, transaksi.kode_bayar, transaksi.tanggal_bayar, transaksi.total_bayar FROM transaksi INNER JOIN sopir ON transaksi.id_sopir=sopir.id_sopir INNER JOIN siswa ON transaksi.id_siswa=siswa.id_siswa INNER JOIN rute ON transaksi.id_rute=rute.id_rute GROUP BY siswa.id_siswa ORDER BY transaksi.id_transaksi ASC";
    $exec = mysql_query($qry);
    if ($exec) {
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
                  < td > < input type = button class = '

btn btn - info btn' name=btnDetail" . $data['id_siswa'] . " value=Detail onclick=window.location.assign('index.php?pgy = laporan - pembayaran & page = detailer & id = " . $data['id_siswa'] . "')></td>
                  < td > " . $data['kode_bayar'] . " < /td>
                  < td > " . $data['nama_siswa'] . " < /td>
                  < td > " . $data['kelas'] . " < /td>
                  < td > " . $data['nama'] . " < /td>
                  < td > " . $data['tanggal_bayar'] . " < /td>
                  < td > " . $data['tarif'] . " < /td>
                  < td > " . $data['total_bayar'] . " < /td>
                                              < /tr>";
        }
    }
    return $exec;
}

function GoPrint($nama, $wali, $kelas, $alamat, $email, $notelp, $id) {
    $qry = "UPDATE siswa SET nama_siswa='"
            . $nama . "', nama_wali='" . $wali . "', alamat='" . $alamat . "', kelas='" . $kelas . "', email='" . $email . "', no_tlp='" . $notelp . "' WHERE id_siswa=" . $id;
    $exec = mysql_query($qry);
    if ($exec) {
        echo "<script>javascript:alert('Update Data Siswa Berhasil')</script>";
        echo "<script>javascript:window.location.assign('index.php?pgy = siswa&page = view')</script>";
    } else {
        echo "<script>javascript:alert('Update Data Siswa Gagal')</script>";
        echo "<script>javascript:history.go( - 1)</script>";
    }
    return $exec;
}

function PreviewMe($id) {
    $qry = "DELETE FROM siswa WHERE id_siswa=" . $id;
    $exec = mysql_query($qry);
    if ($exec) {
        echo "<script>javascript:alert('

Delete Data Siswa Berhasil')</script>";
        echo "<script>javascript:window.location.assign('index.php?pgy = siswa&page = view')</script>";
    } else {
        echo "<script>javascript:alert('Delete Data Siswa Gagal')</script>";
        echo "<script>javascript:history.go( - 1)</script>";
    }
    return $exec;
}

/* ------------------------------------------- LAPORAN KARTU PEMBAYARAN DAO ------------------------------------------- */

/* ------------------------------------------- START PROFILE DAO ------------------------------------------- */

function getValueProfile($field, $id) {
    $qry = "select nama, username, `password`, jabatan, role, email from user where id_user=" . $id;
    $exec = mysql_query($qry);
    $data = mysql_fetch_array($exec);
    $text = $data[$field];
    return $text;
}

/* ------------------------------------------- END PROFILE DAO ------------------------------------------- */

/* ------------------------------------------- START LAPORAN LABA DAO ------------------------------------------- */

function searchTerm($tgl) {
    $qry = "SELECT COUNT(id_transaksi) AS total_trx, SUM(total_bayar) AS total_byr, SUM(closing_intern) AS profit, MONTHNAME(tanggal_bayar) AS bulan FROM transaksi WHERE MONTH(tanggal_bayar) = MONTH('

" . $tgl . "

')";
    $exec = mysql_query($qry);
    if ($exec) {
        //        echo "<script>javascript:window.location.assign('index.php?pgy = profit&do = detail')</script>";
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
            <td><center>" . $data['bulan'] . "</center></td>
        <td><center>" . $data['total_trx'] . "</center></td>
        <td><center>" . $data['total_byr'] . "</center></td>
        <td><center>" . $data['profit'] . "</center></td>
        </tr>";
        }
    }
    return $exec;
}

function searchAll() {
    $qry = "SELECT COUNT(id_transaksi) AS total_trx, SUM(total_bayar) AS total_byr, SUM(closing_intern) AS profit, MONTHNAME(tanggal_bayar) AS bulan FROM transaksi GROUP BY MONTH(tanggal_bayar)";
    $exec = mysql_query($qry);
    if ($exec) {
        echo "<script>javascript:window.location.assign('index.php?pgy = profit & do = detail')</script>";
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
            <td><center>" . $data['bulan'] . "</center></td>
        <td><center>" . $data['total_trx'] . "</center></td>
        <td><center>" . $data['total_byr'] . "</center></td>
        <td><center>" . $data['profit'] . "</center></td>
        </tr>";
        }
    }
    return $exec;
}

/* ------------------------------------------- END LAPORAN LABA DAO ------------------------------------------- */

/* ------------------------------------------- START LAPORAN PEMBAYARAN SISWA DAO ------------------------------------------- */

function searchSiswa($nama, $tgl) {
    $qry = "SELECT transaksi.kode_bayar, siswa.nama_siswa, transaksi.total_bayar, DATE_FORMAT(transaksi.tanggal_bayar, ' %

d -%m-%Y') AS tanggal FROM transaksi INNER JOIN siswa ON transaksi.id_siswa=siswa.id_siswa WHERE siswa.nama_siswa='" . $nama . "' AND MONTH(tanggal_bayar) = MONTH('" . $tgl . "') ORDER BY transaksi.id_transaksi";
    $exec = mysql_query($qry);
    if ($exec) {
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
            <td><center>" . $data['kode_bayar'] . "</center></td>
        <td><center>" . $data['nama_siswa'] . "</center></td>
        <td><center>" . $data['total_bayar'] . "</center></td>
        <td><center>" . $data['tanggal'] . "</center></td>
        </tr>";
        }
    }
    return $exec;
}

function searchAllSiswa() {
    $qry = "SELECT transaksi.kode_bayar, siswa.nama_siswa, transaksi.total_bayar, DATE_FORMAT(transaksi.tanggal_bayar, ' %

d-%m-%Y') AS tanggal FROM transaksi INNER JOIN siswa ON transaksi.id_siswa=siswa.id_siswa ORDER BY transaksi.id_transaksi";
    $exec = mysql_query($qry);
    if ($exec) {
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
            <td><center>" . $data['kode_bayar'] . "</center></td>
        <td><center>" . $data['nama_siswa'] . "</center></td>
        <td><center>" . $data['total_bayar'] . "</center></td>
        <td><center>" . $data['tanggal'] . "</center></td>
        </tr>";
        }
    }
    return $exec;
}

/* ------------------------------------------- END LAPORAN PEMBAYARAN SISWA DAO ------------------------------------------- */

/* ------------------------------------------- START LAPORAN PEMBAYARAN SUPIR DAO ------------------------------------------- */

function searchSupir($nama, $tgl) {
    $qry = "SELECT transaksi.kode_bayar, sopir.nama, transaksi.closing_supir, DATE_FORMAT(transaksi.tanggal_bayar, ' %

d -%m-%Y') AS tanggal FROM transaksi INNER JOIN sopir ON transaksi.id_sopir=sopir.id_sopir WHERE sopir.nama='" . $nama . "' AND MONTH(tanggal_bayar) = MONTH('" . $tgl . "') ORDER BY transaksi.id_transaksi";
    $exec = mysql_query($qry);
    if ($exec) {
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
            <td><center>" . $data['kode_bayar'] . "</center></td>
        <td><center>" . $data['nama'] . "</center></td>
        <td><center>" . $data['closing_supir'] . "</center></td>
        <td><center>" . $data['tanggal'] . "</center></td>
        </tr>";
        }
    }
    return $exec;
}

function searchAllSupir() {
    $qry = "SELECT transaksi.kode_bayar, sopir.nama, transaksi.closing_supir, DATE_FORMAT(transaksi.tanggal_bayar, ' %

d-%m-%Y') AS tanggal FROM transaksi INNER JOIN sopir ON transaksi.id_sopir=sopir.id_sopir ORDER BY transaksi.id_transaksi";
    $exec = mysql_query($qry);
    if ($exec) {
        while ($data = mysql_fetch_array($exec)) {
            echo "<tr>
            <td><center>" . $data['kode_bayar'] . "</center></td>
        <td><center>" . $data['nama'] . "</center></td>
        <td><center>" . $data['closing_supir'] . "</center></td>
        <td><center>" . $data['tanggal'] . "</center></td>
        </tr>";
        }
    }
    return $exec;
}

/* ------------------------------------------- END LAPORAN PEMBAYARAN SISWA DAO ------------------------------------------- */