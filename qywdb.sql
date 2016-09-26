-- MySQL dump 10.13  Distrib 5.6.12, for Win32 (x86)
--
-- Host: localhost    Database: qywdb
-- ------------------------------------------------------
-- Server version	5.6.12-log

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
-- Table structure for table `ar_admin`
--

DROP TABLE IF EXISTS `ar_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ar_admin` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_name` varchar(30) NOT NULL,
  `ad_password` varchar(32) NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ar_admin`
--

LOCK TABLES `ar_admin` WRITE;
/*!40000 ALTER TABLE `ar_admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `ar_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ar_article`
--

DROP TABLE IF EXISTS `ar_article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ar_article` (
  `ar_id` int(5) NOT NULL AUTO_INCREMENT,
  `ar_title` varchar(200) NOT NULL,
  `ar_author` varchar(20) NOT NULL,
  `ar_pic` varchar(200) NOT NULL,
  `ar_rem` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否被推荐',
  `ar_content` text NOT NULL,
  `ar_cateid` smallint(5) NOT NULL,
  `ar_time` varchar(20) NOT NULL,
  PRIMARY KEY (`ar_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ar_article`
--

LOCK TABLES `ar_article` WRITE;
/*!40000 ALTER TABLE `ar_article` DISABLE KEYS */;
/*!40000 ALTER TABLE `ar_article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ar_category`
--

DROP TABLE IF EXISTS `ar_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ar_category` (
  `cate_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(20) NOT NULL,
  `cate_ename` varchar(20) NOT NULL,
  `cate_pic` varchar(200) NOT NULL,
  `cate_keywords` varchar(200) NOT NULL,
  `cate_desc` text NOT NULL,
  `cate_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0封面 1列表 2产品',
  `parentid` smallint(5) DEFAULT '0' COMMENT '父分类,无限极分类核心,默认为0，即没有父类',
  `cate_content` text NOT NULL,
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ar_category`
--

LOCK TABLES `ar_category` WRITE;
/*!40000 ALTER TABLE `ar_category` DISABLE KEYS */;
INSERT INTO `ar_category` VALUES (26,'河南','','','','',1,0,''),(27,'郑州市','','','','',1,26,''),(28,'二七区','','','','',1,27,''),(29,'人民路','','','','',1,28,''),(30,'商丘市','','','','',1,26,''),(31,'山东省','','','','',1,0,''),(32,'淄博市','','','','',1,31,'');
/*!40000 ALTER TABLE `ar_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `li_link`
--

DROP TABLE IF EXISTS `li_link`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `li_link` (
  `li_id` int(11) NOT NULL AUTO_INCREMENT,
  `li_title` varchar(60) NOT NULL,
  `li_pic` varchar(200) NOT NULL,
  `li_des` text NOT NULL,
  PRIMARY KEY (`li_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `li_link`
--

LOCK TABLES `li_link` WRITE;
/*!40000 ALTER TABLE `li_link` DISABLE KEYS */;
/*!40000 ALTER TABLE `li_link` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-26  9:11:11
