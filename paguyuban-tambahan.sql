/*
Navicat MySQL Data Transfer

Source Server         : LOCAL
Source Server Version : 50541
Source Host           : localhost:3306
Source Database       : paguyuban

Target Server Type    : MYSQL
Target Server Version : 50541
File Encoding         : 65001

Date: 2015-07-26 23:46:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `hak_akses`
-- ----------------------------
DROP TABLE IF EXISTS `hak_akses`;
CREATE TABLE `hak_akses` (
  `id_hak_akses` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama_hak_akses` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_hak_akses`)
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
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `jabatan` varchar(20) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `id_hak_akses` bigint(20) NOT NULL DEFAULT '0',
  `email` varchar(20) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_user`,`id_hak_akses`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
