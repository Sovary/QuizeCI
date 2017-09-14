/*
Navicat MySQL Data Transfer

Source Server         : cnn_mysql
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : dbquizin

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-02-03 01:12:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_answers
-- ----------------------------
DROP TABLE IF EXISTS `tb_answers`;
CREATE TABLE `tb_answers` (
  `ans_id` int(11) NOT NULL AUTO_INCREMENT,
  `answer` varchar(255) DEFAULT NULL,
  `ans_corrected` char(1) DEFAULT NULL,
  `ans_created` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `quiz_id` int(11) NOT NULL,
  PRIMARY KEY (`ans_id`),
  KEY `quiz_id` (`quiz_id`),
  CONSTRAINT `tb_answers_ibfk_1` FOREIGN KEY (`quiz_id`) REFERENCES `tb_quizes` (`quiz_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_answers
-- ----------------------------
INSERT INTO `tb_answers` VALUES ('1', 'ជម្ងឺសសៃរអុបទិចខូចខាត', '0', '2017-01-31 22:23:43', '1');
INSERT INTO `tb_answers` VALUES ('2', 'សម្ពាធទឹកក្នុងភ្នែកឡើងលើសពី21មីលីម៉ែត្រប៉ារ៉ត', '0', '2017-01-31 22:23:43', '1');
INSERT INTO `tb_answers` VALUES ('3', 'ស្ទះរន្ធថង់ទឹកភ្នែក', '1', '2017-01-31 22:23:43', '1');
INSERT INTO `tb_answers` VALUES ('8', 'au sciaskopie.', '0', '2017-02-02 01:01:51', '3');
INSERT INTO `tb_answers` VALUES ('9', 'au gonioscope,', '1', '2017-02-02 01:01:51', '3');
INSERT INTO `tb_answers` VALUES ('10', 'au tonomètre,', '0', '2017-02-02 01:01:51', '3');
INSERT INTO `tb_answers` VALUES ('11', 'à l’ophtalmoscope,', '0', '2017-02-02 01:01:51', '3');
INSERT INTO `tb_answers` VALUES ('12', 'au campimètre.', '0', '2017-02-02 01:01:51', '3');
INSERT INTO `tb_answers` VALUES ('13', 'Tractional Retinal Detachement', '0', '2017-02-02 01:02:35', '4');
INSERT INTO `tb_answers` VALUES ('14', 'Dot haemorrhages', '1', '2017-02-02 01:02:35', '4');
INSERT INTO `tb_answers` VALUES ('15', 'Vitreous haemorrhage', '0', '2017-02-02 01:02:35', '4');
INSERT INTO `tb_answers` VALUES ('16', 'Cotton-wool spots', '0', '2017-02-02 01:02:35', '4');
INSERT INTO `tb_answers` VALUES ('17', 'Maculopathy', '0', '2017-02-02 01:02:35', '4');
INSERT INTO `tb_answers` VALUES ('18', 'បីប្រភេទ', '0', '2017-02-02 20:51:54', '5');
INSERT INTO `tb_answers` VALUES ('19', 'មួយប្រភេទ', '0', '2017-02-02 20:51:54', '5');
INSERT INTO `tb_answers` VALUES ('20', 'ពីរប្រភេទ', '1', '2017-02-02 20:51:54', '5');
INSERT INTO `tb_answers` VALUES ('21', 'បួនប្រភេទ', '0', '2017-02-02 20:51:54', '5');
INSERT INTO `tb_answers` VALUES ('22', 'cortex cérébral', '0', '2017-02-02 20:52:34', '6');
INSERT INTO `tb_answers` VALUES ('23', 'chiasma optique', '1', '2017-02-02 20:52:34', '6');
INSERT INTO `tb_answers` VALUES ('24', 'papille optique', '0', '2017-02-02 20:52:34', '6');
INSERT INTO `tb_answers` VALUES ('25', 'bandelette optique', '0', '2017-02-02 20:52:34', '6');
INSERT INTO `tb_answers` VALUES ('31', 'មើលជិតមិនច្បាស់', '0', '2017-02-02 20:53:49', '8');
INSERT INTO `tb_answers` VALUES ('32', 'អាកុំម៉ូដេហ្សិន (Accommodation) ថយចុះ', '0', '2017-02-02 20:53:49', '8');
INSERT INTO `tb_answers` VALUES ('33', 'មើលឆ្ងាយមិនច្បាស់', '1', '2017-02-02 20:53:49', '8');
INSERT INTO `tb_answers` VALUES ('34', 'កើតឡើងចាប់ពីអាយុ40ឆ្នាំឡើងទៅ', '0', '2017-02-02 20:53:49', '8');
INSERT INTO `tb_answers` VALUES ('35', 'Photoreceptors', '0', '2017-02-02 20:54:40', '9');
INSERT INTO `tb_answers` VALUES ('36', 'Ganglion', '0', '2017-02-02 20:54:40', '9');
INSERT INTO `tb_answers` VALUES ('37', 'Bipolar', '0', '2017-02-02 20:54:40', '9');
INSERT INTO `tb_answers` VALUES ('38', 'Horizontal', '0', '2017-02-02 20:54:40', '9');
INSERT INTO `tb_answers` VALUES ('39', 'Müllers', '1', '2017-02-02 20:54:40', '9');
INSERT INTO `tb_answers` VALUES ('55', 'Bipolar cell', '1', '2017-02-02 20:56:54', '13');
INSERT INTO `tb_answers` VALUES ('56', 'Horizontal cell', '0', '2017-02-02 20:56:54', '13');
INSERT INTO `tb_answers` VALUES ('57', 'Rod', '0', '2017-02-02 20:56:54', '13');
INSERT INTO `tb_answers` VALUES ('58', 'Cone', '0', '2017-02-02 20:56:54', '13');
INSERT INTO `tb_answers` VALUES ('59', 'Ganglion cell', '0', '2017-02-02 20:56:54', '13');
INSERT INTO `tb_answers` VALUES ('60', 'Medication', '1', '2017-02-02 20:57:51', '14');
INSERT INTO `tb_answers` VALUES ('61', 'Congenital', '0', '2017-02-02 20:57:51', '14');
INSERT INTO `tb_answers` VALUES ('62', 'Myasthenia gravis', '0', '2017-02-02 20:57:51', '14');
INSERT INTO `tb_answers` VALUES ('63', 'Trauma', '0', '2017-02-02 20:57:51', '14');
INSERT INTO `tb_answers` VALUES ('64', 'Chronic progressive external ophthalmoplegia (CPEO)', '0', '2017-02-02 20:57:51', '14');
INSERT INTO `tb_answers` VALUES ('65', 'Cranial nerve palsy', '0', '2017-02-02 20:57:51', '14');
INSERT INTO `tb_answers` VALUES ('66', 'une angiographie', '1', '2017-02-02 20:58:28', '15');
INSERT INTO `tb_answers` VALUES ('67', 'une échographie', '0', '2017-02-02 20:58:28', '15');
INSERT INTO `tb_answers` VALUES ('68', 'des potentiels évoqués visuels', '0', '2017-02-02 20:58:28', '15');
INSERT INTO `tb_answers` VALUES ('69', 'la mesure de l’acuité visuelle', '0', '2017-02-02 20:58:28', '15');
INSERT INTO `tb_answers` VALUES ('70', '	 un électrorétinogramme', '0', '2017-02-02 20:58:28', '15');

-- ----------------------------
-- Table structure for tb_quizes
-- ----------------------------
DROP TABLE IF EXISTS `tb_quizes`;
CREATE TABLE `tb_quizes` (
  `quiz_id` int(11) NOT NULL AUTO_INCREMENT,
  `quiz_question` varchar(255) DEFAULT NULL,
  `quiz_mark` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `quiz_created` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`quiz_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `tb_quizes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_quizes
-- ----------------------------
INSERT INTO `tb_quizes` VALUES ('1', 'អ្វីទៅហៅថាទឹកដក់ក្នុងភ្នែក លើកលែងតែ?', '4.3', '1', '2017-02-02 00:55:09');
INSERT INTO `tb_quizes` VALUES ('3', ' L’étude de l’angle iridocornéen se fait grâce à l’examen :', '5.0', '1', '2017-02-02 01:01:51');
INSERT INTO `tb_quizes` VALUES ('4', 'រោគសញ្ញាខាងក្រោមនេះធ្វើអោយគំហើញថយចុះក្នុង Diabetic retinopathy លើកលៃងតែ', '5.0', '1', '2017-02-02 01:02:35');
INSERT INTO `tb_quizes` VALUES ('5', 'ទឹកដក់ក្នុងភ្នែកចែកចេញជាប៉ុន្មានប្រភេទ?', '4.0', '1', '2017-02-02 20:51:54');
INSERT INTO `tb_quizes` VALUES ('6', 'Les nerfs optique droit et gauche se réunissent au niveau :', '5.0', '1', '2017-02-02 20:52:34');
INSERT INTO `tb_quizes` VALUES ('8', 'អ្វីទៅហៅថាភ្នែកប្រេសបាយអូបពា (prebyopia) លើកលែងតែ?', '5.0', '1', '2017-02-02 20:53:49');
INSERT INTO `tb_quizes` VALUES ('9', 'តើកោសិកាប្រសាទណាដែលមិនមានក្នុងរ៉េទីន?', '4.0', '1', '2017-02-02 20:54:40');
INSERT INTO `tb_quizes` VALUES ('13', 'តើកោសិកាណាមួយដែលមានតួនាទីសម្រាប់មើលឆ្ងាយ?', '4.0', '1', '2017-02-02 20:56:54');
INSERT INTO `tb_quizes` VALUES ('14', 'មួយណាដែលមិនមែនជាមូលហេតុបណ្តាលអោយភ្នែកស្រលៀង:', '5.0', '1', '2017-02-02 20:57:51');
INSERT INTO `tb_quizes` VALUES ('15', 'Un sujet présente une cataracte totale sénile,avant de poser l’indication opératoire,tous les examens suivants peuvent avoir un intérêt sauf un ,lequel?', '5.0', '1', '2017-02-02 20:58:28');

-- ----------------------------
-- Table structure for tb_users
-- ----------------------------
DROP TABLE IF EXISTS `tb_users`;
CREATE TABLE `tb_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` text,
  `user_email` text,
  `user_password` text,
  `user_created` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `user_status` char(1) DEFAULT NULL,
  `user_level` text,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tb_users
-- ----------------------------
INSERT INTO `tb_users` VALUES ('1', 'heng', 'heng@mail.com', 'a', '2017-01-30 21:07:44', 't', 'user');
