/*
Navicat MySQL Data Transfer

Source Server         : LOCAL
Source Server Version : 50541
Source Host           : localhost:3306
Source Database       : paguyuban

Target Server Type    : MYSQL
Target Server Version : 50541
File Encoding         : 65001

Date: 2015-08-03 06:59:30
*/

SET FOREIGN_KEY_CHECKS=0;

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Manager', 'superadmin', '1', null, 'admin', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `user` VALUES ('2', 'mia', '123456', null, 'admin', '1', 'mia@gmail.com', 'Mia', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `user` VALUES ('3', 'mia', '123456', null, 'admin', '2', 'mia@gmail.com', 'Mia', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `user` VALUES ('4', 'mia', '123456', null, 'admin', '3', 'mia@gmail.com', 'Mia', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `user` VALUES ('5', 'mia', '123456', null, 'admin', '4', 'mia@gmail.com', 'Mia', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `user` VALUES ('6', 'mia', '123456', null, 'admin', '5', 'mia@gmail.com', 'Mia', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `user` VALUES ('7', 'mia', '123456', null, 'admin', '6', 'mia@gmail.com', 'Mia', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `user` VALUES ('8', 'mia', '123456', null, 'admin', '7', 'mia@gmail.com', 'Mia', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `user` VALUES ('9', 'mia', '123456', null, 'admin', '8', 'mia@gmail.com', 'Mia', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `user` VALUES ('10', 'mia', '123456', null, 'admin', '9', 'mia@gmail.com', 'Mia', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `user` VALUES ('11', 'mia', '123456', null, 'admin', '10', 'mia@gmail.com', 'Mia', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `user` VALUES ('12', 'mia', '123456', null, 'admin', '11', 'mia@gmail.com', 'Mia', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `user` VALUES ('13', 'mia', '123456', null, 'admin', '12', 'mia@gmail.com', 'Mia', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `user` VALUES ('14', 'mia', '123456', null, 'admin', '13', 'mia@gmail.com', 'Mia', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `user` VALUES ('15', 'mia', '123456', null, 'admin', '1', 'mia@gmail.com', 'Mia', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `user` VALUES ('16', 'mia', '123456', null, 'admin', '2', 'mia@gmail.com', 'Mia', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `user` VALUES ('17', 'mia', '123456', null, 'admin', '3', 'mia@gmail.com', 'Mia', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `user` VALUES ('18', 'mia', '123456', null, 'admin', '4', 'mia@gmail.com', 'Mia', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `user` VALUES ('19', 'mia', '123456', null, 'admin', '5', 'mia@gmail.com', 'Mia', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `user` VALUES ('20', 'mia', '123456', null, 'admin', '6', 'mia@gmail.com', 'Mia', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `user` VALUES ('21', 'mia', '123456', null, 'admin', '7', 'mia@gmail.com', 'Mia', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `user` VALUES ('22', 'mia', '123456', null, 'admin', '8', 'mia@gmail.com', 'Mia', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `user` VALUES ('23', 'mia', '123456', null, 'admin', '9', 'mia@gmail.com', 'Mia', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `user` VALUES ('24', 'mia', '123456', null, 'admin', '10', 'mia@gmail.com', 'Mia', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `user` VALUES ('25', 'mia', '123456', null, 'admin', '11', 'mia@gmail.com', 'Mia', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `user` VALUES ('26', 'mia', '123456', null, 'admin', '12', 'mia@gmail.com', 'Mia', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `user` VALUES ('27', 'mia', '123456', null, 'admin', '13', 'mia@gmail.com', 'Mia', null, null, null, null, null, null, null, null, null, null, null, null, null, null);
