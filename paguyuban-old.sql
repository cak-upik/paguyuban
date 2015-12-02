-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 07, 2015 at 08:34 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `paguyuban`
--

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE IF NOT EXISTS `hak_akses` (
  `id_hak_akses` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama_hak_akses` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_hak_akses`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id_hak_akses`, `nama_hak_akses`) VALUES
(1, 'master_siswa'),
(2, 'master_sopir'),
(3, 'master_karyawan'),
(4, 'master_rute'),
(5, 'trx_pendaftaran'),
(6, 'trx_pembayaran'),
(7, 'lap_pembayaran'),
(8, 'lap_sopir'),
(9, 'lap_siswa'),
(10, 'laba'),
(11, 'setting_user'),
(12, 'setting_hak_akses'),
(13, 'setting_template');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `id_karyawan` int(10) NOT NULL AUTO_INCREMENT,
  `nama_karyawan` varchar(255) NOT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` varchar(50) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_tlp` varchar(100) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `email`, `no_tlp`, `jabatan`) VALUES
(1, 'Taufik', 'Surabaya', '26 Mei 1992', 'Jl Rungkut Harapan H 22', 'muhammadtaufik92@programmer.net', '08963660652', 'direktur');

-- --------------------------------------------------------

--
-- Table structure for table `rute`
--

CREATE TABLE IF NOT EXISTS `rute` (
  `id_rute` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama_rute` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `tarif` double DEFAULT NULL,
  PRIMARY KEY (`id_rute`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `rute`
--

INSERT INTO `rute` (`id_rute`, `nama_rute`, `kota`, `tarif`) VALUES
(1, 'SBY-P', 'Surabaya', 100000),
(3, 'SBY-PP', 'Surabaya', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama_siswa` varchar(255) NOT NULL,
  `nama_wali` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `layanan` varchar(10) DEFAULT NULL,
  `no_tlp` varchar(20) DEFAULT NULL,
  `id_supir` bigint(20) DEFAULT NULL,
  `id_rute` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `nama_wali`, `alamat`, `kelas`, `email`, `layanan`, `no_tlp`, `id_supir`, `id_rute`) VALUES
(1, 'Taufik', 'Bambang Setijanto', 'Tambak Medokan Ayu 8A no 11', '5B', 'muhammadtaufik92@gmail.com', 'twoway', '089636606525', 4, 3),
(2, 'Wali', 'Hidayah', 'Rungkut', '5A', 'wali@yahoo.com', 'twoway', '089636606525', 4, 3),
(3, 'Zaidan', 'Nur Hidayati', 'Medokan', '1A', 'muhammadzaidan@gmail.com', 'twoway', '089636606525', 6, 3),
(4, 'Rizal', 'Rizal', 'Rungkut', '2 SD', 'muhammadrizal@gmail.com', 'oneway', '089636606525', 6, 1),
(5, 'ayu', 'jali', 'rungkut medokan', '2A', 'ayu@gmail.com', 'twoway', '099898234', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sopir`
--

CREATE TABLE IF NOT EXISTS `sopir` (
  `id_sopir` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `no_tlp` varchar(50) DEFAULT NULL,
  `no_sim` varchar(50) DEFAULT NULL,
  `merk_mobil` varchar(50) DEFAULT NULL,
  `no_mobil` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_sopir`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sopir`
--

INSERT INTO `sopir` (`id_sopir`, `nama`, `alamat`, `kota`, `no_tlp`, `no_sim`, `merk_mobil`, `no_mobil`) VALUES
(4, 'Joko', 'Jl. Bulak Banteng Gg VI no 20', 'Surabaya', '923842', '0987654321', 'Toyota Avanza 2012', '987654321'),
(5, 'Supadi', 'Rusun Pandugo', 'Surabaya', '08963660652', '1234567890', 'Toyota Kijang Innova', '098764321'),
(6, 'Zaki', 'Medokan Ayu II', 'Surabaya', '08923948728', '0987654321', 'Toyota 86 TRD', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` tinyint(5) NOT NULL AUTO_INCREMENT,
  `kode_bayar` varchar(255) NOT NULL,
  `id_siswa` tinyint(5) NOT NULL DEFAULT '0',
  `id_sopir` tinyint(5) NOT NULL DEFAULT '0',
  `id_rute` tinyint(5) NOT NULL DEFAULT '0',
  `tanggal_bayar` date DEFAULT NULL,
  `total_bayar` decimal(19,2) NOT NULL,
  `closing_intern` decimal(19,2) NOT NULL,
  `closing_supir` decimal(19,2) NOT NULL,
  PRIMARY KEY (`id_transaksi`,`id_siswa`,`id_sopir`,`id_rute`),
  UNIQUE KEY `kode_bayar` (`kode_bayar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `kode_bayar`, `id_siswa`, `id_sopir`, `id_rute`, `tanggal_bayar`, `total_bayar`, `closing_intern`, `closing_supir`) VALUES
(1, 'RJ-02082015-01', 1, 4, 3, '2015-08-01', 250000.00, 12500.00, 237500.00),
(2, 'RJ-02082015-02', 3, 6, 3, '2015-08-01', 200000.00, 10000.00, 190000.00),
(3, 'RJ-02082015-03', 5, 5, 1, '2015-08-01', 100000.00, 5000.00, 95000.00),
(4, 'RJ-02082015-04', 1, 4, 3, '2015-09-01', 200000.00, 10000.00, 190000.00),
(5, 'RJ-02082015-05', 3, 6, 3, '2014-12-01', 200000.00, 10000.00, 190000.00),
(6, 'RJ-02082015-06', 1, 4, 3, '2015-09-01', 200000.00, 10000.00, 190000.00),
(7, 'RJ-07082015-07', 2, 4, 3, '2015-08-07', 200000.00, 10000.00, 190000.00);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `jabatan` varchar(20) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `id_hak_akses` bigint(20) NOT NULL DEFAULT '0',
  `email` varchar(20) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `master_siswa` bit(1) DEFAULT NULL,
  `master_sopir` bit(1) DEFAULT NULL,
  `master_karyawan` bit(1) DEFAULT NULL,
  `master_rute` bit(1) DEFAULT NULL,
  `trx_pendaftaran` bit(1) DEFAULT NULL,
  `trx_pembayaran` bit(1) DEFAULT NULL,
  `kartu_pembayaran` bit(1) DEFAULT NULL,
  `lap_pembayaran` bit(1) DEFAULT NULL,
  `lap_sopir` bit(1) DEFAULT NULL,
  `lap_siswa` bit(1) DEFAULT NULL,
  `laba` bit(1) DEFAULT NULL,
  `setting_user` bit(1) DEFAULT NULL,
  `setting_hak_akses` bit(1) DEFAULT NULL,
  `setting_template` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id_user`,`id_hak_akses`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `jabatan`, `role`, `id_hak_akses`, `email`, `nama`, `master_siswa`, `master_sopir`, `master_karyawan`, `master_rute`, `trx_pendaftaran`, `trx_pembayaran`, `kartu_pembayaran`, `lap_pembayaran`, `lap_sopir`, `lap_siswa`, `laba`, `setting_user`, `setting_hak_akses`, `setting_template`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Manager', 'superadmin', 1, NULL, 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'mia', '123456', NULL, 'admin', 1, 'mia@gmail.com', 'Mia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'mia', '123456', NULL, 'admin', 2, 'mia@gmail.com', 'Mia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'mia', '123456', NULL, 'admin', 3, 'mia@gmail.com', 'Mia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'mia', '123456', NULL, 'admin', 4, 'mia@gmail.com', 'Mia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'mia', '123456', NULL, 'admin', 5, 'mia@gmail.com', 'Mia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'mia', '123456', NULL, 'admin', 6, 'mia@gmail.com', 'Mia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'mia', '123456', NULL, 'admin', 7, 'mia@gmail.com', 'Mia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'mia', '123456', NULL, 'admin', 8, 'mia@gmail.com', 'Mia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'mia', '123456', NULL, 'admin', 9, 'mia@gmail.com', 'Mia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'mia', '123456', NULL, 'admin', 10, 'mia@gmail.com', 'Mia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'mia', '123456', NULL, 'admin', 11, 'mia@gmail.com', 'Mia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'mia', '123456', NULL, 'admin', 12, 'mia@gmail.com', 'Mia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'mia', '123456', NULL, 'admin', 13, 'mia@gmail.com', 'Mia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'mia', '123456', NULL, 'admin', 1, 'mia@gmail.com', 'Mia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'mia', '123456', NULL, 'admin', 2, 'mia@gmail.com', 'Mia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'mia', '123456', NULL, 'admin', 3, 'mia@gmail.com', 'Mia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'mia', '123456', NULL, 'admin', 4, 'mia@gmail.com', 'Mia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'mia', '123456', NULL, 'admin', 5, 'mia@gmail.com', 'Mia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'mia', '123456', NULL, 'admin', 6, 'mia@gmail.com', 'Mia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'mia', '123456', NULL, 'admin', 7, 'mia@gmail.com', 'Mia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'mia', '123456', NULL, 'admin', 8, 'mia@gmail.com', 'Mia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'mia', '123456', NULL, 'admin', 9, 'mia@gmail.com', 'Mia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'mia', '123456', NULL, 'admin', 10, 'mia@gmail.com', 'Mia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'mia', '123456', NULL, 'admin', 11, 'mia@gmail.com', 'Mia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'mia', '123456', NULL, 'admin', 12, 'mia@gmail.com', 'Mia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'mia', '123456', NULL, 'admin', 13, 'mia@gmail.com', 'Mia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
