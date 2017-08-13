/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : resume

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-08-13 21:02:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cv_member
-- ----------------------------
DROP TABLE IF EXISTS `cv_member`;
CREATE TABLE `cv_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL DEFAULT '' COMMENT '邮箱',
  `nick_name` varchar(255) NOT NULL DEFAULT '' COMMENT '昵称',
  `password` varchar(255) NOT NULL DEFAULT '' COMMENT '密码',
  `salt` varchar(255) NOT NULL DEFAULT '' COMMENT '昵称全拼用于加密',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '会员类型1：普通会员，2：企业会员',
  `register_time` int(11) NOT NULL DEFAULT '0' COMMENT '注册时间',
  `last_login_ip` varchar(11) NOT NULL DEFAULT '' COMMENT '最后一次登录IP',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='会员基础表';

-- ----------------------------
-- Records of cv_member
-- ----------------------------
INSERT INTO `cv_member` VALUES ('1', '501986411@qq.com', '噢，我想多了', '2a73071fffec0ea79d2659bcdf2c81e8', 'chenhailong', '1', '1502601963', '127.0.0.1');
INSERT INTO `cv_member` VALUES ('7', '991738189@qq.com', '噢，我想多了4', 'd8526b61f69720d007b5013dfff681f2', '7wmw0m3o6', '1', '1502601963', '127.0.0.1');
