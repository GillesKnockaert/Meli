-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: Meli
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `tblcategory`
--

DROP TABLE IF EXISTS `tblcategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblcategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nameNL` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nameFR` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `largeIcon` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smallIcon` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `startColor` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `endColor` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcategory`
--

LOCK TABLES `tblcategory` WRITE;
/*!40000 ALTER TABLE `tblcategory` DISABLE KEYS */;
INSERT INTO `tblcategory` VALUES (1,'Gebeurtenissen','','','','#F76B1C','#F9AE46'),(2,'Meli Marketing','','','','#429321','#B4EC51'),(3,'Attracties','','','','#9F041B','#F5515F'),(4,'Gadgets','','','','#814AC4','#7668FE'),(5,'Bijen en honing','','','','#A5A5A5','#EEEEEE'),(6,'Salons','','','','#17C97B','#0CA69E'),(7,'Varia','','','','#0B7AF2','#084476');
/*!40000 ALTER TABLE `tblcategory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblcollectionitem`
--

DROP TABLE IF EXISTS `tblcollectionitem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblcollectionitem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titleNL` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `titleFR` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descriptionNL` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descriptionFR` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imageURL` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `categoryID` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mustShowDate` tinyint(1) DEFAULT NULL,
  `positionX` double DEFAULT NULL,
  `positionY` double DEFAULT NULL,
  `yearFrom` int(11) DEFAULT NULL,
  `yearTill` int(11) DEFAULT NULL,
  `columnID` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_216D6143A7592BB9` (`categoryID`),
  CONSTRAINT `FK_216D6143A7592BB9` FOREIGN KEY (`categoryID`) REFERENCES `tblcategory` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblcollectionitem`
--

LOCK TABLES `tblcollectionitem` WRITE;
/*!40000 ALTER TABLE `tblcollectionitem` DISABLE KEYS */;
INSERT INTO `tblcollectionitem` VALUES (15,NULL,NULL,NULL,NULL,'Export/Media/Maps/meli560.jpg',NULL,NULL,'map',NULL,NULL,NULL,1959,1979,1);
/*!40000 ALTER TABLE `tblcollectionitem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblmedia`
--

DROP TABLE IF EXISTS `tblmedia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblmedia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titleNL` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `titleFR` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descriptionNL` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descriptionFR` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contentURLNL` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contentURLFR` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `collectionID` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_43E8ABFBC17B5ED1` (`collectionID`),
  CONSTRAINT `FK_43E8ABFBC17B5ED1` FOREIGN KEY (`collectionID`) REFERENCES `tblcollectionitem` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblmedia`
--

LOCK TABLES `tblmedia` WRITE;
/*!40000 ALTER TABLE `tblmedia` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblmedia` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-11  9:29:10
