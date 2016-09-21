CREATE DATABASE  IF NOT EXISTS `cdcatalog` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `cdcatalog`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: 157.190.186.37    Database: cdcatalog
-- ------------------------------------------------------
-- Server version	5.6.20-log

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
-- Table structure for table `albums`
--

DROP TABLE IF EXISTS `albums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `albums` (
  `albumID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `artist` varchar(256) NOT NULL,
  `country` varchar(128) NOT NULL,
  `company` varchar(256) NOT NULL,
  `price` float NOT NULL,
  `year` smallint(6) NOT NULL,
  PRIMARY KEY (`albumID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albums`
--

LOCK TABLES `albums` WRITE;
/*!40000 ALTER TABLE `albums` DISABLE KEYS */;
INSERT INTO `albums` VALUES (1,'Ring of Destiny','Jack Black','USA','MCA',11.99,1997),(2,'Taste','Rory Gallagher','Ireland','RCA',22.77,1970),(3,'Pronounced','Lynard Skynard','USA','MCA',17.99,1971),(4,'Sayonara','Kurinoya','Japan','Sony',14.21,1985),(5,'Crossroads','Robert Johnson','USA','Mecca',16.55,1957),(6,'Wishing Well','Gary Moore','IE','Brush',27.11,1987),(7,'Big Man','Big Tom','USA','Tristar',12.99,1947),(8,'Deepest Purple','Deep Purple','UK','Mecca',26.35,1974),(9,'Irish Tour','Gary Moore','IE','Brush',23.11,1967),(10,'Four Country Roads','Big Tom','Ireland','Emerald',22.99,1987),(11,'Ballads','Brendan Boyer','IE','Country Themes',14.55,1979),(12,'Alive and Kicking','Skid Row','IE','Brush and Bridgeman',27.11,1976),(13,'Bon Jovi Never Rang Me','Brush Shiels','Ireland','Bruised Records',14.99,2012),(14,'Smoke Along The Track','Big Tom and The Mainliners','Ireland','K-Mac Records',14.99,1975);
/*!40000 ALTER TABLE `albums` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-11-27 20:42:09
