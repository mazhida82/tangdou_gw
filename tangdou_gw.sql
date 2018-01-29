/*
Navicat MySQL Data Transfer

Source Server         : php
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : tangdou_gw

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-01-29 15:06:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ad
-- ----------------------------
DROP TABLE IF EXISTS `ad`;
CREATE TABLE `ad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(99) DEFAULT '',
  `url` varchar(255) DEFAULT '',
  `img` varchar(255) NOT NULL DEFAULT '' COMMENT '原图片',
  `position` tinyint(4) NOT NULL DEFAULT '1' COMMENT '所处位置：1首页 2下载APP二码....',
  `st` tinyint(4) DEFAULT '1' COMMENT '0删除 1正常 2不显示',
  `create_time` int(11) DEFAULT '0',
  `update_time` int(11) DEFAULT '0',
  `new_window` tinyint(4) DEFAULT '0' COMMENT '链接是否在新窗口打开？',
  `img_mobile` varchar(100) DEFAULT '' COMMENT '手机上图片(这个没用)',
  `word` varchar(100) DEFAULT '广告图上文字',
  PRIMARY KEY (`id`),
  KEY `position` (`position`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COMMENT='广告(所有图片设置)';

-- ----------------------------
-- Records of ad
-- ----------------------------
INSERT INTO `ad` VALUES ('1', 'logo', '', '/upload/ad/20180126/31333e43b52a0bb7c9fddfa33e02dde6.png', '1', '1', '1516955734', '1516955734', '0', '', '广告图上文字');
INSERT INTO `ad` VALUES ('2', '', '', '/upload/ad/20180126/143fb54fc5372015680af308393cb038.jpg', '2', '0', '1516955761', '1517191142', '0', '', '广告图上文字');
INSERT INTO `ad` VALUES ('3', '', '', '/upload/ad/20180126/4e70e749bd27d44680973cdd08c52550.jpg', '3', '1', '1516955794', '1516955794', '0', '', '广告图上文字');
INSERT INTO `ad` VALUES ('4', '', '', '/upload/ad/20180126/3b0b4a510677d8321bf382a22cef57aa.jpg', '4', '1', '1516955821', '1516955821', '0', '', '广告图上文字');
INSERT INTO `ad` VALUES ('5', '', '', '/upload/ad/20180126/88e2aa8307a1a395696d09fc1df323d7.jpg', '5', '1', '1516955845', '1516955845', '0', '', '广告图上文字');
INSERT INTO `ad` VALUES ('6', '', '', '/upload/ad/20180126/c190812857387462b710acacccf04d69.png', '6', '1', '1516955906', '1516955906', '0', '', '广告图上文字');
INSERT INTO `ad` VALUES ('7', '', '', '/upload/ad/20180126/76053b7eaf044ac628578b92c39c4050.png', '7', '1', '1516955923', '1516955923', '0', '', '广告图上文字');
INSERT INTO `ad` VALUES ('8', '', '', '/upload/ad/20180126/5a55129bb17ad25f3cc04e37ca0e4790.png', '8', '1', '1516955935', '1516955935', '0', '', '广告图上文字');
INSERT INTO `ad` VALUES ('9', '', '', '/upload/ad/20180129\\bc398af32072acd18e834e266209a93b.png', '9', '0', '1516955952', '1517190096', '0', '', '广告图上文字');
INSERT INTO `ad` VALUES ('14', '二维码', '', '/upload/ad/20180129\\57820f843ef068ffd3def601f15b5e24.png', '9', '1', '1517190125', '1517190125', '0', '', '广告图上文字');
INSERT INTO `ad` VALUES ('15', 'bg1', '', '/upload/ad/20180129/1ad508a53f87c62e6fb7ef39694c9e8d.jpg', '2', '1', '1517191159', '1517191159', '0', '', '广告图上文字');

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '账号',
  `pwd` char(32) DEFAULT NULL COMMENT '密码',
  `times` int(11) DEFAULT '0' COMMENT '登录次数',
  `last_time` int(11) DEFAULT '0' COMMENT '上次登录时间',
  `create_time` int(11) DEFAULT '0',
  `update_time` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='后台管理员';

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', '5b64e087878982516680b8526d828b0d', '14', '0', '0', '1517194456');

-- ----------------------------
-- Table structure for admin_log
-- ----------------------------
DROP TABLE IF EXISTS `admin_log`;
CREATE TABLE `admin_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL DEFAULT '1' COMMENT 'admin_id',
  `ip` varchar(50) DEFAULT '' COMMENT '上次登录ip',
  `last_time` int(11) DEFAULT '0' COMMENT '上次登录时间',
  `create_time` int(11) DEFAULT '0',
  `update_time` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='后台管理员登录日志';

-- ----------------------------
-- Records of admin_log
-- ----------------------------
INSERT INTO `admin_log` VALUES ('1', '1', '::1', '0', '1517190022', '1517190022');
INSERT INTO `admin_log` VALUES ('2', '1', '::1', '0', '1517194449', '1517194449');
INSERT INTO `admin_log` VALUES ('3', '1', '::1', '0', '1517194475', '1517194475');

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_id` int(11) NOT NULL DEFAULT '1' COMMENT '分类id',
  `name` varchar(100) NOT NULL,
  `click` int(11) DEFAULT '0' COMMENT '点击量',
  `img` varchar(255) NOT NULL DEFAULT '' COMMENT '列表图',
  `cont` text,
  `keywords` varchar(255) DEFAULT '',
  `description` varchar(255) DEFAULT '',
  `sort` int(11) DEFAULT '1000' COMMENT '排序',
  `st` tinyint(4) DEFAULT '1' COMMENT '0删除 1正常 2不显示',
  `index_show` tinyint(4) DEFAULT '0' COMMENT '首页或置顶',
  `create_time` int(11) DEFAULT '0',
  `update_time` int(11) DEFAULT '0',
  `charm` varchar(255) NOT NULL COMMENT '摘要',
  `tp` tinyint(4) NOT NULL DEFAULT '1' COMMENT '类型 1资讯 2案例',
  `img_erwei` varchar(255) DEFAULT '' COMMENT '案例二维码',
  PRIMARY KEY (`id`),
  KEY `cate` (`cate_id`),
  CONSTRAINT `article_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `cate` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='资讯表';

-- ----------------------------
-- Records of article
-- ----------------------------

-- ----------------------------
-- Table structure for cate
-- ----------------------------
DROP TABLE IF EXISTS `cate`;
CREATE TABLE `cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(99) NOT NULL COMMENT '名称',
  `sort` int(11) DEFAULT '0' COMMENT '排序',
  `st` tinyint(4) DEFAULT '1' COMMENT '0删除状态,1正常',
  `create_time` int(11) DEFAULT '0',
  `update_time` int(11) DEFAULT '0',
  `tp` tinyint(4) NOT NULL DEFAULT '1' COMMENT '分类类型 1资讯 2案例',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='分类';

-- ----------------------------
-- Records of cate
-- ----------------------------
INSERT INTO `cate` VALUES ('1', '产品展示', '1', '1', '1514353614', '1514353614', '1');
INSERT INTO `cate` VALUES ('2', '公司动态', '2', '1', '1514353767', '1514353767', '1');
INSERT INTO `cate` VALUES ('3', '最新资讯', '3', '1', '1514353781', '1514353804', '1');
INSERT INTO `cate` VALUES ('4', '12', '0', '0', '1514430917', '1514430921', '1');

-- ----------------------------
-- Table structure for friend
-- ----------------------------
DROP TABLE IF EXISTS `friend`;
CREATE TABLE `friend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) DEFAULT NULL,
  `name` varchar(99) NOT NULL,
  `url` varchar(255) DEFAULT '',
  `logo` varchar(255) DEFAULT '',
  `st` tinyint(4) DEFAULT NULL COMMENT '0删除状态,1正常',
  `create_time` int(11) DEFAULT '0',
  `update_time` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='合作(包括友情链接)';

-- ----------------------------
-- Records of friend
-- ----------------------------
INSERT INTO `friend` VALUES ('1', '1', '新浪', 'http://www.sina.com/', '', '1', '1514351569', '1514351909');
INSERT INTO `friend` VALUES ('2', '1', '今日头条', 'http://toutiao.com', '', '1', '1514351604', '1514351604');

-- ----------------------------
-- Table structure for menu_admin
-- ----------------------------
DROP TABLE IF EXISTS `menu_admin`;
CREATE TABLE `menu_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '导航名称',
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '导航上级id，总分两级,0表示一级',
  `controller` varchar(100) DEFAULT '' COMMENT '控制器,为一级时为""',
  `action` varchar(100) DEFAULT '' COMMENT '控制器中方法,为一级时为""',
  `param` varchar(100) DEFAULT '' COMMENT '参数',
  `sort` int(11) DEFAULT '0',
  `create_time` int(11) DEFAULT '0',
  `update_time` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COMMENT='后台左侧导航';

-- ----------------------------
-- Records of menu_admin
-- ----------------------------
INSERT INTO `menu_admin` VALUES ('34', '相关设置', '23', 'Setting', 'index', '', '0', '1514352003', '1514352018');
INSERT INTO `menu_admin` VALUES ('19', '主要管理', '0', '', '', '', '0', '1505358580', '1505358580');
INSERT INTO `menu_admin` VALUES ('22', '广告图', '19', 'Ad', 'index', '', '2', '1505358704', '1505985350');
INSERT INTO `menu_admin` VALUES ('23', '其它管理', '0', '', '', '', '1', '1505358751', '1505358751');
INSERT INTO `menu_admin` VALUES ('25', '改后台密码', '32', 'Admin', 'edit', '', '5', '1505358851', '1506056478');
INSERT INTO `menu_admin` VALUES ('32', '账号管帐', '0', '', '', '', '2', '1506056449', '1506056470');

-- ----------------------------
-- Table structure for nav
-- ----------------------------
DROP TABLE IF EXISTS `nav`;
CREATE TABLE `nav` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '1',
  `route` varchar(50) DEFAULT '' COMMENT '路由 eg:(/news)',
  `sort` tinyint(4) DEFAULT '0' COMMENT '排序',
  `st` tinyint(4) DEFAULT '1' COMMENT '0删除 1正常 2不显示',
  `create_time` int(11) DEFAULT '0',
  `update_time` int(11) DEFAULT '0',
  `contr` varchar(20) DEFAULT NULL COMMENT '控制器名称',
  `title` varchar(100) DEFAULT NULL COMMENT 'seo标题',
  `keywords` varchar(150) DEFAULT NULL COMMENT 'seo关键词',
  `description` varchar(200) DEFAULT NULL COMMENT 'seo描述',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='导航（只能修改名称、排序）';

-- ----------------------------
-- Records of nav
-- ----------------------------
INSERT INTO `nav` VALUES ('1', '首页', '/', '1', '1', '1514430981', '1514433008', 'Index', '首页', 'welove-index,welove-index,welove-index', 'welove-indexdesc,welove-indexdesc,welove-indexdesc,welove-indexdesc,welove-indexdesc,');
INSERT INTO `nav` VALUES ('2', '下载APP', '/app', '2', '1', '1514431048', '1514433014', 'App', '下载APP', 'app-index,app-indexapp-index', 'app-index,app-indexapp-indexdescapp-index,app-indexapp-indexdesc');
INSERT INTO `nav` VALUES ('3', '新闻报道', '/news', '3', '1', '1514431071', '1514432985', 'Article', '新闻报道', '新闻报道新闻报道zzzzzzzzzzzzzz', '新闻报道新闻报道ddddddddddd');
INSERT INTO `nav` VALUES ('4', '关于我们', '/about', '4', '1', '1514431094', '1514434029', 'About', '关于我们', '关于我们关于我们关于我们', '关于我们关于我们5555555555555');

-- ----------------------------
-- Table structure for setting
-- ----------------------------
DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bg1word` varchar(255) NOT NULL DEFAULT '' COMMENT 'kefu电话',
  `bg2word1` varchar(255) NOT NULL,
  `bg2word2` varchar(255) NOT NULL DEFAULT '' COMMENT '联系邮箱',
  `bg3word1` varchar(255) NOT NULL DEFAULT '' COMMENT '公司名称',
  `bg3word2` varchar(255) NOT NULL,
  `bg4word1` varchar(255) NOT NULL COMMENT '公司介绍',
  `bg4word2` varchar(255) NOT NULL,
  `create_time` int(11) DEFAULT '0',
  `update_time` int(11) DEFAULT '0',
  `beian` varchar(100) DEFAULT NULL COMMENT '备案号',
  `bg5word1` varchar(255) NOT NULL,
  `bg5word2` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='相关设置文字信息';

-- ----------------------------
-- Records of setting
-- ----------------------------
INSERT INTO `setting` VALUES ('1', '糖豆   —   做点自己喜欢的事儿', '&quot;想在有酒有肉的日子', '款待没心没肺的自己&quot;', '&quot;吃都吃的没滋没味', '怎能活的有滋有味&quot;', '&quot;只要碗里满满的', '人生就不会空虚&quot;', '1517208262', '1517209364', '版权所有：北京未来和讯信息科技有限公司　京ICP备16058967号-1', '糖豆', '随时随地选择您的专属套餐');
