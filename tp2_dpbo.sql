/*
Navicat MySQL Data Transfer

Source Server         : MyKoneksi
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : tp2_dpbo

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2022-04-17 05:28:16
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `bidang_divisi`
-- ----------------------------
DROP TABLE IF EXISTS `bidang_divisi`;
CREATE TABLE `bidang_divisi` (
  `id_bidang` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_divisi` bigint(20) NOT NULL,
  `nama_bidang` varchar(255) NOT NULL,
  `ketua_bidang` varchar(255) NOT NULL,
  PRIMARY KEY (`id_bidang`),
  KEY `id_divisi` (`id_divisi`),
  CONSTRAINT `bidang_divisi_ibfk_1` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id_divisi`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of bidang_divisi
-- ----------------------------
INSERT INTO `bidang_divisi` VALUES ('1', '1', 'Sekretaris Umum', 'Aisyah Purnama');
INSERT INTO `bidang_divisi` VALUES ('2', '1', 'Bendahara Umum', 'Ali Yuda');
INSERT INTO `bidang_divisi` VALUES ('3', '2', 'Komunikasi', 'Akhmad Nirmala');
INSERT INTO `bidang_divisi` VALUES ('4', '2', 'Informasi', 'Idris Hamidah');
INSERT INTO `bidang_divisi` VALUES ('5', '3', 'Advokasi', 'Ali Imran');
INSERT INTO `bidang_divisi` VALUES ('6', '4', 'Kaderisasi', 'Nurul Alya');
INSERT INTO `bidang_divisi` VALUES ('7', '4', 'Penelitian dan Pengembangan', 'Ratna Cahaya');
INSERT INTO `bidang_divisi` VALUES ('8', '5', 'Olahraga', 'Putri Irfan');
INSERT INTO `bidang_divisi` VALUES ('9', '5', 'Seni', 'Arif Bima');
INSERT INTO `bidang_divisi` VALUES ('10', '1', 'Non Bidang', 'Nurul Harta');
INSERT INTO `bidang_divisi` VALUES ('13', '2', 'Non Bidang', 'Hasan Harta');
INSERT INTO `bidang_divisi` VALUES ('15', '3', 'Non Bidang', 'Taufik Wahyu');
INSERT INTO `bidang_divisi` VALUES ('16', '4', 'Non Bidang', 'Wati Usman');
INSERT INTO `bidang_divisi` VALUES ('17', '5', 'Non Bidang', 'Siti Nurul');

-- ----------------------------
-- Table structure for `divisi`
-- ----------------------------
DROP TABLE IF EXISTS `divisi`;
CREATE TABLE `divisi` (
  `id_divisi` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama_divisi` varchar(255) NOT NULL,
  `ketua_divisi` varchar(255) NOT NULL,
  PRIMARY KEY (`id_divisi`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of divisi
-- ----------------------------
INSERT INTO `divisi` VALUES ('1', 'Pimpinan', 'Nurul Harta');
INSERT INTO `divisi` VALUES ('2', 'Kominfo', 'Hasan Harta');
INSERT INTO `divisi` VALUES ('3', 'Advokasi', 'Taufik Wahyu');
INSERT INTO `divisi` VALUES ('4', 'PSDM', 'Wati Usman');
INSERT INTO `divisi` VALUES ('5', 'Mikat', 'Siti Nurul');

-- ----------------------------
-- Table structure for `pengurus`
-- ----------------------------
DROP TABLE IF EXISTS `pengurus`;
CREATE TABLE `pengurus` (
  `id_pengurus` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_bidang` bigint(20) NOT NULL,
  `nim` int(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `semester` int(5) NOT NULL,
  `divisi` varchar(255) NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pengurus`),
  KEY `id_bidang` (`id_bidang`),
  CONSTRAINT `pengurus_ibfk_1` FOREIGN KEY (`id_bidang`) REFERENCES `bidang_divisi` (`id_bidang`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of pengurus
-- ----------------------------
INSERT INTO `pengurus` VALUES ('1', '10', '190100', 'Nurul Harta', 'Ketua BEM Himalaya', '5', 'Pimpinan', 'nurulharta.jpg');
INSERT INTO `pengurus` VALUES ('4', '1', '190106', 'Aisyah Purnama', 'Ketua Bidang Sekretaris Umum', '5', 'Pimpinan', 'aisyahpurnama.jpg');
INSERT INTO `pengurus` VALUES ('5', '2', '190120', 'Ali Yuda', 'Ketua Bidang Bendahara Umum', '5', 'Pimpinan', 'aliyuda.jpg');
INSERT INTO `pengurus` VALUES ('6', '13', '190102', 'Hasan Harta', 'Ketua Divisi Kominfo', '5', 'Kominfo', 'hasanharta.jpg');
INSERT INTO `pengurus` VALUES ('7', '7', '200713', 'Dewi Anya', 'Staff Penelitian dan Pengembangan', '3', 'PSDM', 'dewianya.jpg');
INSERT INTO `pengurus` VALUES ('8', '4', '190140', 'Idris Hamidah', 'Ketua Bidang Informasi', '5', 'Kominfo', 'idrishamidah.jpg');
INSERT INTO `pengurus` VALUES ('9', '15', '190103', 'Taufik Wahyu', 'Ketua Divisi Advokasi', '5', 'Advokasi', 'taufikwahyu.jpg');
INSERT INTO `pengurus` VALUES ('10', '5', '190150', 'Ali Imran', 'Ketua Bidang Advokasi', '5', 'Advokasi', 'aliimran.jpg');
INSERT INTO `pengurus` VALUES ('11', '16', '190104', 'Wati Usman', 'Ketua Divisi PSDM', '5', 'PSDM', 'watiusman.jpg');
INSERT INTO `pengurus` VALUES ('12', '6', '190160', 'Nurul Alya', 'Ketua Bidang Kaderisasi', '5', 'PSDM', 'nurulalya.jpg');
INSERT INTO `pengurus` VALUES ('13', '7', '190170', 'Ratna Cahaya', 'Ketua Bidang Penelitian dan Pengembangan', '5', 'PSDM', 'ratnacahaya.jpg');
INSERT INTO `pengurus` VALUES ('14', '17', '190105', 'Siti Nurul', 'Ketua Divisi Minat dan Bakat', '5', 'Mikat', 'sitinurul.jpg');
INSERT INTO `pengurus` VALUES ('16', '9', '190190', 'Arif Bima', 'Ketua Bidang Seni', '5', 'Mikat', 'arifbima.jpg');
INSERT INTO `pengurus` VALUES ('17', '10', '190101', 'Saiful Anwar', 'Wakil Ketua BEM Himalaya', '5', 'Pimpinan', 'saifulanwar.jpg');
INSERT INTO `pengurus` VALUES ('18', '3', '200102', 'Budi Utomo', 'Staff Bidang Komunikasi', '3', 'Kominfo', 'budiutomo.jpg');
INSERT INTO `pengurus` VALUES ('19', '3', '200312', 'Ardiansyah Putra', 'Staff Bidang Komunikasi', '3', 'Kominfo', 'ardiansyahputra.jpg');
INSERT INTO `pengurus` VALUES ('20', '3', '200108', 'Chika Puspita', 'Staff Bidang Komunikasi', '3', 'Kominfo', 'chikapuspita.jpg');
INSERT INTO `pengurus` VALUES ('25', '17', '200111', 'Budi Gunawan', 'Bendahara Mikat', '3', 'Mikat', 'budigunawan.jpg');
INSERT INTO `pengurus` VALUES ('26', '8', '190180', 'Akhamd Nirmala', 'Ketua Bidang Olahraga', '5', 'Mikat', 'akhmadnirmala.jpg');
INSERT INTO `pengurus` VALUES ('27', '3', '190110', 'Putri Irfan', 'Ketua Bidang Komunikasi', '5', 'Kominfo', 'putriirfan.jpg');
INSERT INTO `pengurus` VALUES ('28', '1', '200845', 'Purnama Kusuma', 'Staff Sekretaris Umum', '3', 'Pimpinan', 'purnamakusuma.jpg');
INSERT INTO `pengurus` VALUES ('29', '2', '200921', 'Fatimah Cinta', 'Staff Bendahara Umum', '3', 'Pimpinan', 'fatimahcinta.jpg');
INSERT INTO `pengurus` VALUES ('30', '4', '200117', 'Bima Krisna', 'Staff Informasi', '3', 'Kominfo', 'bimakrisna.jpg');
INSERT INTO `pengurus` VALUES ('31', '4', '200212', 'Sulaiman Abdullah', 'Staff Informasi', '3', 'Kominfo', 'sulaimanabdullah.jpg');
INSERT INTO `pengurus` VALUES ('32', '5', '200833', 'Latifah Adiniya', 'Staff Advokasi', '3', 'Advokasi', 'latifahadiniya.jpg');
INSERT INTO `pengurus` VALUES ('33', '5', '200655', 'Lestari Ilham', 'Staff Advokasi', '3', 'Advokasi', 'lestariilham.jpg');
INSERT INTO `pengurus` VALUES ('34', '5', '200911', 'Hani Latifah', 'Staff Advokasi', '3', 'Advokasi', 'hanilatifah.jpg');
INSERT INTO `pengurus` VALUES ('36', '6', '200721', ' Burhan Krisna', 'Staff Kaderisasi', '3', 'PSDM', 'burhankrisna.jpg');
INSERT INTO `pengurus` VALUES ('37', '6', '200371', 'Yohanes Putra', 'Staff Kaderisasi', '3', 'PSDM', 'yohanesputra.jpg');
INSERT INTO `pengurus` VALUES ('38', '8', '200011', 'Mawar Sri', 'Staff Olahraga', '3', 'Mikat', 'mawarsri.jpg');
INSERT INTO `pengurus` VALUES ('39', '8', '200034', 'Melati Sari', 'Staff Olahraga', '3', 'Mikat', 'melatisari.jpg');
INSERT INTO `pengurus` VALUES ('40', '9', '200987', 'Cahya Putra', 'Staff Seni', '3', 'Mikat', 'cahyaputra.jpg');
INSERT INTO `pengurus` VALUES ('41', '9', '200544', 'Eka Nur', 'Staff Seni', '3', 'Mikat', 'ekanur.jpg');
INSERT INTO `pengurus` VALUES ('42', '13', '200777', 'Halimah Yuda', 'Sekretaris Kominfo', '3', 'Kominfo', 'halimahyuda.jpg');
INSERT INTO `pengurus` VALUES ('43', '13', '200811', 'Ratna Indah', 'Bendahara Kominfo', '3', 'Kominfo', 'ratnaindah.jpg');
INSERT INTO `pengurus` VALUES ('44', '15', '200122', 'Mohamad Burhan', 'Sekretaris Advokasi', '3', 'Advokasi', 'mohamadburhan.jpg');
INSERT INTO `pengurus` VALUES ('45', '15', '200224', 'Mila Jamilah', 'Bendahara Advokasi', '3', 'Advokasi', 'milajamilah.jpg');
INSERT INTO `pengurus` VALUES ('46', '16', '200712', 'Jusuf Mega', 'Sekretaris PSDM', '3', 'PSDM', 'jusufmega.jpg');
INSERT INTO `pengurus` VALUES ('47', '16', '200129', 'Cahaya Cinta', 'Bendahara PSDM', '3', 'PSDM', 'cahayacinta.jpg');
INSERT INTO `pengurus` VALUES ('48', '17', '200822', 'Ismail Samudra', 'Sekretaris Mikat', '3', 'Mikat', 'ismailsamudra.jpg');
INSERT INTO `pengurus` VALUES ('49', '7', '200182', 'Anisa Sulistia', 'Staff Penelitian dan Pengembangan', '3', 'PSDM', 'anisasulistia.jpg');
INSERT INTO `pengurus` VALUES ('50', '8', '200912', 'Budi Usman', 'Staff Olahraga', '3', 'Mikat', 'budiusman.jpg');
INSERT INTO `pengurus` VALUES ('51', '9', '200222', 'Ibrahim Junior', 'Staff Seni', '3', 'Mikat', 'ibrahimjunior.jpg');
