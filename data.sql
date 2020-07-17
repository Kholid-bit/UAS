/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : kampus

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-11-18 00:54:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `mahasiswa`
-- ----------------------------
DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa` (
 `ID_Mahasiswa`AUTO_INCREMENT,
  `Nama` varchar(100), COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Alamat` text, COLLATE utf8mb4_unicode_ci,
  `JenisKelamin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_Mahasiswa`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of mahasiswa
-- ----------------------------
INSERT INTO `mahasiswa` VALUES ('1', 'Ardin', 'Semarang', 'Laki-laki');
INSERT INTO `mahasiswa` VALUES ('2', 'Vita', 'Semarang', 'Perempuan');
INSERT INTO `mahasiswa` VALUES ('3', 'Wisnu', 'Semarang', 'Laki-laki');
INSERT INTO `mahasiswa` VALUES ('4', 'Angga', 'Rembang', 'Laki-laki');
INSERT INTO `mahasiswa` VALUES ('5', 'Dian', 'Wonosobo', 'Laki-laki');
INSERT INTO `mahasiswa` VALUES ('6', 'Ali', 'Brebes', 'Laki-laki');
INSERT INTO `mahasiswa` VALUES ('7', 'Nia', 'Pati', 'Perempuan');
INSERT INTO `mahasiswa` VALUES ('8', 'Yudis', 'Salatiga', 'Laki-laki');
INSERT INTO `mahasiswa` VALUES ('9', 'Iman', 'Surakarta', 'Laki-laki');
INSERT INTO `mahasiswa` VALUES ('10', 'Yogi', 'Sleman', 'Laki-laki');
INSERT INTO `mahasiswa` VALUES ('11', 'Rifki', 'Semarang', 'Laki-laki');
INSERT INTO `mahasiswa` VALUES ('12', 'Anisa', 'Wonosobo', 'Perempuan');
INSERT INTO `mahasiswa` VALUES ('13', 'Rani', 'Rembang', 'Perempuan');
INSERT INTO `mahasiswa` VALUES ('14', 'Rahmat', 'Semarang', 'Laki-laki');
INSERT INTO `mahasiswa` VALUES ('15', 'Ayu', 'Semarang', 'Perempuan');
INSERT INTO `mahasiswa` VALUES ('16', 'Nabila', 'Sleman', 'Perempuan');
INSERT INTO `mahasiswa` VALUES ('17', 'Heri', 'Pati', 'Laki-laki');
INSERT INTO `mahasiswa` VALUES ('18', 'Nugroho', 'Semarang', 'Laki-laki');
INSERT INTO `mahasiswa` VALUES ('19', 'Farida', 'Salatiga', 'Perempuan');
INSERT INTO `mahasiswa` VALUES ('20', 'Andri', 'Semarang', 'Laki-laki');
INSERT INTO `mahasiswa` VALUES ('21', 'Andi', 'Surakarta', 'Laki-laki');
INSERT INTO `mahasiswa` VALUES ('22', 'Handayani', 'Semarang', 'Perempuan');
INSERT INTO `mahasiswa` VALUES ('23', 'Jeyhan', 'Bogor', 'Laki-laki');