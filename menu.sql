-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: weilai
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `menu_admin`
--

DROP TABLE IF EXISTS `menu_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COMMENT='后台左侧导航';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_admin`
--

LOCK TABLES `menu_admin` WRITE;
/*!40000 ALTER TABLE `menu_admin` DISABLE KEYS */;
INSERT INTO `menu_admin` VALUES (19,'主要管理',0,'','','',0,1505358580,1505358580),(20,'资讯',19,'Article','index','',0,1505358628,1505358628),(21,'案例',19,'Anli','index','',1,1505358670,1505358670),(22,'广告图',19,'Ad','index','',2,1505358704,1505985350),(23,'其它管理',0,'','','',1,1505358751,1505358751),(24,'招贤纳士',23,'Recruit','index','',4,1505358773,1505985417),(25,'改后台密码',32,'Admin','edit','',5,1505358851,1506056478),(26,'案例分类',23,'CateAnli','index','',0,1505369468,1505985504),(27,'案例功能',23,'Func','index','',1,1505375321,1505465516),(28,'合作/友情链接',23,'friend','index','',2,1505438054,1505465577),(29,'SEO设置',19,'SeoSet','index','',4,1505699413,1505985442),(30,'视频',19,'Shipin','index','',3,1505985336,1505985336),(31,'视频分类',23,'CateShipin','index','',1,1505985398,1505985485),(32,'账号管帐',0,'','','',2,1506056449,1506056470),(33,'主持人',23,'Host','index','',5,1506056578,1506056578),(34,'客服qq',23,'Setting','index','',0,1511759584,1511759609);
/*!40000 ALTER TABLE `menu_admin` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-22 18:08:31
