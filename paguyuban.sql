-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 23, 2015 at 12:42 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `paguyuban`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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
  `nama_siswa` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_tlp` varchar(20) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `alamat`, `kelas`, `email`, `no_tlp`, `status`) VALUES
(1, 'Taufik', 'Rungkut Harapan H 22', 'SMP', 'muhammadtaufik92@gmail.com', 'Rungkut Harapan H 22', 'twoway');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sopir`
--

INSERT INTO `sopir` (`id_sopir`, `nama`, `alamat`, `kota`, `no_tlp`, `no_sim`, `merk_mobil`, `no_mobil`) VALUES
(4, 'Joko', 'Jl. Bulak Banteng Gg VI no 20', 'Surabaya', '923842', '0987654321', 'Toyota Avanza 2012', '987654321');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_siswa` bigint(20) NOT NULL DEFAULT '0',
  `id_sopir` bigint(20) NOT NULL DEFAULT '0',
  `id_rute` bigint(20) NOT NULL DEFAULT '0',
  `tanggal_bayar` date DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`,`id_siswa`,`id_sopir`,`id_rute`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `jabatan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
