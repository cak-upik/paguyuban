/*
Navicat MySQL Data Transfer

Source Server         : LOCAL
Source Server Version : 50541
Source Host           : localhost:3306
Source Database       : paguyuban

Target Server Type    : MYSQL
Target Server Version : 50541
File Encoding         : 65001

Date: 2015-07-16 22:43:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `rute`
-- ----------------------------
DROP TABLE IF EXISTS `rute`;
CREATE TABLE `rute` (
  `id_rute` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama_rute` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `tarif` double DEFAULT NULL,
  PRIMARY KEY (`id_rute`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of rute
-- ----------------------------

-- ----------------------------
-- Table structure for `siswa`
-- ----------------------------
DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa` (
  `id_siswa` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama_siswa` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `email` varchar(15) DEFAULT NULL,
  `no_tlp` varchar(20) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of siswa
-- ----------------------------

-- ----------------------------
-- Table structure for `sopir`
-- ----------------------------
DROP TABLE IF EXISTS `sopir`;
CREATE TABLE `sopir` (
  `id_sopir` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `no_tlp` varchar(15) DEFAULT NULL,
  `no_sim` varchar(20) DEFAULT NULL,
  `merk_mobil` varchar(10) DEFAULT NULL,
  `no_mobil` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_sopir`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sopir
-- ----------------------------

-- ----------------------------
-- Table structure for `transaksi`
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `id_transaksi` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_siswa` bigint(20) NOT NULL DEFAULT '0',
  `id_sopir` bigint(20) NOT NULL DEFAULT '0',
  `id_rute` bigint(20) NOT NULL DEFAULT '0',
  `tanggal_bayar` date DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`,`id_siswa`,`id_sopir`,`id_rute`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of transaksi
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `jabatan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
