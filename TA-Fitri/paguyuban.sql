/*
Navicat MySQL Data Transfer

Source Server         : Mysql@Local
Source Server Version : 50051
Source Host           : localhost:3306
Source Database       : paguyuban

Target Server Type    : MYSQL
Target Server Version : 50051
File Encoding         : 65001

Date: 2015-12-02 01:16:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `hak_akses`
-- ----------------------------
DROP TABLE IF EXISTS `hak_akses`;
CREATE TABLE `hak_akses` (
  `id_hak_akses` bigint(20) NOT NULL auto_increment,
  `nama_hak_akses` varchar(50) default NULL,
  PRIMARY KEY  (`id_hak_akses`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of hak_akses
-- ----------------------------
INSERT INTO `hak_akses` VALUES ('1', 'master_siswa');
INSERT INTO `hak_akses` VALUES ('2', 'master_sopir');
INSERT INTO `hak_akses` VALUES ('3', 'master_karyawan');
INSERT INTO `hak_akses` VALUES ('4', 'master_rute');
INSERT INTO `hak_akses` VALUES ('5', 'trx_pendaftaran');
INSERT INTO `hak_akses` VALUES ('6', 'trx_pembayaran');
INSERT INTO `hak_akses` VALUES ('7', 'lap_pembayaran');
INSERT INTO `hak_akses` VALUES ('8', 'lap_sopir');
INSERT INTO `hak_akses` VALUES ('9', 'lap_siswa');
INSERT INTO `hak_akses` VALUES ('10', 'laba');
INSERT INTO `hak_akses` VALUES ('11', 'setting_user');
INSERT INTO `hak_akses` VALUES ('12', 'setting_hak_akses');
INSERT INTO `hak_akses` VALUES ('13', 'setting_template');

-- ----------------------------
-- Table structure for `karyawan`
-- ----------------------------
DROP TABLE IF EXISTS `karyawan`;
CREATE TABLE `karyawan` (
  `id_karyawan` int(10) NOT NULL auto_increment,
  `nama_karyawan` varchar(255) NOT NULL,
  `tempat_lahir` varchar(50) default NULL,
  `tanggal_lahir` varchar(50) default NULL,
  `alamat` varchar(255) default NULL,
  `email` varchar(100) default NULL,
  `no_tlp` varchar(100) default NULL,
  `jabatan` varchar(100) default NULL,
  PRIMARY KEY  (`id_karyawan`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of karyawan
-- ----------------------------
INSERT INTO `karyawan` VALUES ('1', 'Taufik', 'Surabaya', '26 Mei 1992', 'Jl Rungkut Harapan H 22', 'muhammadtaufik92@programmer.net', '08963660652', 'direktur');

-- ----------------------------
-- Table structure for `rute`
-- ----------------------------
DROP TABLE IF EXISTS `rute`;
CREATE TABLE `rute` (
  `id_rute` bigint(20) NOT NULL auto_increment,
  `nama_rute` varchar(50) default NULL,
  `kota` varchar(50) default NULL,
  `tarif` double default NULL,
  PRIMARY KEY  (`id_rute`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of rute
-- ----------------------------
INSERT INTO `rute` VALUES ('1', 'SBY-P', 'Surabaya', '100000');
INSERT INTO `rute` VALUES ('3', 'SBY-PP', 'Surabaya', '200000');

-- ----------------------------
-- Table structure for `siswa`
-- ----------------------------
DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa` (
  `id_siswa` bigint(20) NOT NULL auto_increment,
  `nama_siswa` varchar(255) NOT NULL,
  `nama_wali` varchar(255) default NULL,
  `alamat` varchar(255) default NULL,
  `kelas` varchar(50) default NULL,
  `email` varchar(100) NOT NULL,
  `layanan` varchar(10) default NULL,
  `no_tlp` varchar(20) default NULL,
  `id_supir` bigint(20) default NULL,
  `id_rute` bigint(20) default NULL,
  PRIMARY KEY  (`id_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of siswa
-- ----------------------------
INSERT INTO `siswa` VALUES ('1', 'Taufik', 'Bambang Setijanto', 'Tambak Medokan Ayu 8A no 11', '5B', 'muhammadtaufik92@gmail.com', 'twoway', '089636606525', '4', '3');
INSERT INTO `siswa` VALUES ('2', 'Wali', 'Hidayah', 'Rungkut', '5A', 'wali@yahoo.com', 'twoway', '089636606525', '4', '3');
INSERT INTO `siswa` VALUES ('3', 'Zaidan', 'Nur Hidayati', 'Medokan', '1A', 'muhammadzaidan@gmail.com', 'twoway', '089636606525', '6', '3');
INSERT INTO `siswa` VALUES ('4', 'Rizal', 'Rizal', 'Rungkut', '2 SD', 'muhammadrizal@gmail.com', 'oneway', '089636606525', '6', '1');
INSERT INTO `siswa` VALUES ('5', 'ayu', '', '', '', '', 'twoway', '', '5', '1');
INSERT INTO `siswa` VALUES ('6', 'Sumi', 'Bonah', 'surabaya', '2', '', 'oneway', '', '4', '3');

-- ----------------------------
-- Table structure for `sopir`
-- ----------------------------
DROP TABLE IF EXISTS `sopir`;
CREATE TABLE `sopir` (
  `id_sopir` bigint(20) NOT NULL auto_increment,
  `nama` varchar(255) default NULL,
  `alamat` varchar(255) default NULL,
  `kota` varchar(50) default NULL,
  `no_tlp` varchar(50) default NULL,
  `no_sim` varchar(50) default NULL,
  `merk_mobil` varchar(50) default NULL,
  `no_mobil` varchar(50) default NULL,
  PRIMARY KEY  (`id_sopir`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sopir
-- ----------------------------
INSERT INTO `sopir` VALUES ('4', 'Joko', 'Jl. Bulak Banteng Gg VI no 20', 'Surabaya', '923842', '0987654321', 'Toyota Avanza 2012', '987654321');
INSERT INTO `sopir` VALUES ('5', 'Supadi', 'Rusun Pandugo', 'Surabaya', '08963660652', '1234567890', 'Toyota Kijang Innova', '098764321');
INSERT INTO `sopir` VALUES ('6', 'Zaki', 'Medokan Ayu II', 'Surabaya', '08923948728', '0987654321', 'Toyota 86 TRD', '123456789');

-- ----------------------------
-- Table structure for `transaksi`
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `id_transaksi` bigint(20) NOT NULL auto_increment,
  `kode_bayar` bigint(50) NOT NULL,
  `id_siswa` bigint(20) NOT NULL default '0',
  `id_sopir` bigint(20) NOT NULL default '0',
  `id_rute` bigint(20) NOT NULL default '0',
  `tanggal_bayar` date default NULL,
  `total_bayar` decimal(19,2) NOT NULL,
  `closing_intern` decimal(19,2) NOT NULL,
  `closing_supir` decimal(19,2) NOT NULL,
  PRIMARY KEY  (`id_transaksi`,`id_siswa`,`id_sopir`,`id_rute`),
  KEY `id_siswa` (`id_siswa`),
  KEY `id_sopir` (`id_sopir`),
  CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`),
  CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_sopir`) REFERENCES `sopir` (`id_sopir`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of transaksi
-- ----------------------------
INSERT INTO `transaksi` VALUES ('1', '0', '1', '4', '3', '2015-08-17', '200000.00', '10000.00', '190000.00');
INSERT INTO `transaksi` VALUES ('2', '0', '1', '4', '3', '2015-09-02', '13435423.00', '671771.00', '12763652.00');
INSERT INTO `transaksi` VALUES ('3', '0', '1', '4', '3', '2015-09-14', '23424.00', '1171.00', '22253.00');
INSERT INTO `transaksi` VALUES ('4', '0', '1', '4', '3', '2015-10-19', '200000.00', '10000.00', '190000.00');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` bigint(20) NOT NULL auto_increment,
  `username` varchar(25) default NULL,
  `password` varchar(255) default NULL,
  `jabatan` varchar(20) default NULL,
  `role` varchar(50) default NULL,
  `id_hak_akses` bigint(20) NOT NULL default '0',
  `email` varchar(50) default NULL,
  `nama` varchar(100) default NULL,
  `master_siswa` bit(1) default NULL,
  `master_sopir` bit(1) default NULL,
  `master_karyawan` bit(1) default NULL,
  `master_rute` bit(1) default NULL,
  `trx_pendaftaran` bit(1) default NULL,
  `trx_pembayaran` bit(1) default NULL,
  `kartu_pembayaran` bit(1) default NULL,
  `lap_pembayaran` bit(1) default NULL,
  `lap_sopir` bit(1) default NULL,
  `lap_siswa` bit(1) default NULL,
  `laba` bit(1) default NULL,
  `setting_user` bit(1) default NULL,
  `setting_hak_akses` bit(1) default NULL,
  `setting_template` bit(1) default NULL,
  PRIMARY KEY  (`id_user`,`id_hak_akses`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Manager', 'superadmin', '1', null, 'admin', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `user` VALUES ('28', 'mita', 'mintul', null, 'admin', '0', 'mintul@gmail.com', 'Dimita', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `user` VALUES ('29', 'iema', 'im03tbang3t', null, 'admin', '0', 'choyyima.aja@gmail.c', 'Iema', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
