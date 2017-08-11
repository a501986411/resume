/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : resume

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-08-11 18:21:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cv_member
-- ----------------------------
DROP TABLE IF EXISTS `cv_member`;
CREATE TABLE `cv_member` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL DEFAULT '' COMMENT '邮箱',
  `nick_name` varchar(255) NOT NULL DEFAULT '' COMMENT '昵称',
  `password` varchar(255) NOT NULL DEFAULT '' COMMENT '密码',
  `salt` varchar(255) NOT NULL DEFAULT '' COMMENT '昵称全拼用于加密',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='会员基础表';

-- ----------------------------
-- Records of cv_member
-- ----------------------------
INSERT INTO `cv_member` VALUES ('1', '501986411@qq.com', '噢，我想多了', '2a73071fffec0ea79d2659bcdf2c81e8', 'chenhailong');
