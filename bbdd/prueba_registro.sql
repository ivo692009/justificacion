-- MySQL dump 10.13  Distrib 5.7.16, for Linux (x86_64)
--
-- Host: localhost    Database: prueba
-- ------------------------------------------------------
-- Server version	5.7.16-0ubuntu0.16.04.1

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
-- Table structure for table `registro`
--

DROP TABLE IF EXISTS `registro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grupo` varchar(200) NOT NULL,
  `categoria` varchar(200) NOT NULL,
  `proyecto` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `persona_1` varchar(75) NOT NULL,
  `dni1` int(11) NOT NULL,
  `date1` date NOT NULL,
  `email1` varchar(75) NOT NULL,
  `persona_2` varchar(75) DEFAULT 'null',
  `dni2` int(11) DEFAULT NULL,
  `date2` date DEFAULT NULL,
  `email2` varchar(75) DEFAULT 'null',
  `persona_3` varchar(75) DEFAULT 'null',
  `dni3` int(11) DEFAULT NULL,
  `date3` date DEFAULT NULL,
  `email3` varchar(75) DEFAULT 'null',
  `persona_4` varchar(75) DEFAULT 'null',
  `dni4` int(11) DEFAULT NULL,
  `date4` date DEFAULT NULL,
  `email4` varchar(75) DEFAULT 'null',
  `persona_5` varchar(75) DEFAULT 'null',
  `dni5` int(11) DEFAULT NULL,
  `date5` date DEFAULT NULL,
  `email5` varchar(75) DEFAULT 'null',
  `localidad` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registro`
--

LOCK TABLES `registro` WRITE;
/*!40000 ALTER TABLE `registro` DISABLE KEYS */;
INSERT INTO `registro` VALUES (74,'los capos','desarrollo','pepas','pepas para todos y todas','ivo luis alfredo lares',38046456,'1994-09-06','ivo692009@gmail.com','',0,NULL,'','',0,NULL,'','',0,NULL,'','',0,NULL,'','DOCTOR RICARDO ROJAS'),(75,'los capos','desarrollo','ssssssssssss','asdasdasdasdasdasdasdasdasdasdas','ivo luis alfredo lares',38046456,'1994-09-06','ivo692009@gmail.com','',0,NULL,'','',0,NULL,'','',0,NULL,'','',0,NULL,'','EL HOYO'),(76,'los capos','desarrollo','ssssssssssss','pepas para todos y todas','ivo luis alfredo lares',38046456,'1994-09-06','ivo692009@gmail.com','',0,NULL,'','',0,NULL,'','',0,NULL,'','',0,NULL,'','CORCOVADO'),(77,'los capos','desarrollo','ssssssssssss','pepas para todos y todas','ivo luis alfredo lares',38046456,'1994-09-06','ivo692009@gmail.com',NULL,0,NULL,'','',0,NULL,'','',0,NULL,'','',0,NULL,'','DOLAVON'),(78,'asdasdasd','desarrollo','ssssssssssss','asdasdasdasdasdasdasdasdasdasdas','ivo luis alfredo lares',38046456,'1994-09-06','ivo692009@gmail.com',NULL,0,NULL,'','',0,NULL,'','',0,NULL,'','',0,NULL,'','CUSHAMEN'),(79,'asdasdasd','desarrollo','ssssssssssss','asdasdasdasdasdasdasdasdasdasdas','ivo luis alfredo lares',38046456,'1994-09-06','ivo692009@gmail.com',NULL,0,NULL,'',NULL,0,NULL,'',NULL,0,NULL,'',NULL,0,NULL,'','DIQUE FLORENTINO AMEGHINO'),(80,'los capos','desarrollo','asdasd','asdasdasdasdasdasdasdasdasdasdas','ivo luis alfredo lares',38046456,'1994-09-06','ivo692009@gmail.com','',0,NULL,'','',0,NULL,'','',0,NULL,'','',0,NULL,'','CHOLILA'),(81,'asdasdasd','desarrollo','ssssssssssss','pepas para todos y todas','ivo luis alfredo lares',38046456,'1994-09-06','ivo692009@gmail.com',NULL,0,NULL,'',NULL,0,NULL,'',NULL,0,NULL,'',NULL,0,NULL,'','DOCTOR RICARDO ROJAS'),(82,'asdasdasd','desarrollo','asdasd','pepas para todos y todas','asdasdasd',38046456,'1994-09-06','ivo692009@gmail.com',NULL,0,NULL,'',NULL,0,NULL,'',NULL,0,NULL,'',NULL,0,NULL,'','CORCOVADO'),(83,'asdasdasd','desarrollo','asdasd','pepas para todos y todas','ivo luis alfredo lares',38046456,'1994-09-06','ivo692009@gmail.com',NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,'EPULEF'),(84,'los capos','desarrollo','asdasdasd','pepas para todos y todas','ivo luis alfredo lares',38046456,'1994-09-06','ivo692009@gmail.com',NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,'COSTA DE CHUBUT'),(85,'ññññññññññññññññññññññ','multimedia','ññññññññññññññññññññññ','ñññññññññññññññññññññññññññññññññ','ñññññññññññññññññññññññññ',38046456,'1994-09-06','ivo692009@gmail.com',NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,'CHOLILA'),(86,'ññññññññññññññññññññññ','desarrollo','ññññññññññññññññññññññ','asdasdasdasdasdasdasdasdasdasdas','ivo luis alfredo lares',38046456,'1994-09-06','ivo692009@gmail.com',NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,'EPULEF'),(87,'ññññññññññññññññññññññ','desarrollo','ññññññññññññññññññññññ','asdasdasdasdasdasdasdasdasdasdas','ivo luis alfredo lares',38046456,'1994-09-06','ivo692009@gmail.com',NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,'COMODORO RIVADAVIA'),(88,'ññññññññññññññññññññññ','desarrollo','ññññññññññññññññññññññ','asdasdasdasdasdasdasdasdasdasdas','ivo luis alfredo lares',38046456,'1994-09-06','ivo692009@gmail.com',NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,'BUEN PASTO'),(89,'ññññññññññññññññññññññ','desarrollo','ssssssssssss','asdasdasdasdasdasdasdasdasdasdas','asdasdasdasdasd',32564897,'1980-09-06','ivo692009@gmail.com',NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,'CUSHAMEN'),(90,'ññññññññññññññññññññññ','desarrollo','ññññññññññññññññññññññ','asdasdasdasdasdasdasdasdasdasdas','ivo luis alfredo lares',38046456,'1994-09-06','ivo692009@gmail.com',NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,'DOLAVON'),(91,'ññññññññññññññññññññññ','desarrollo','ssssssssssss','asdasdasdasdasdasdasdasdasdasdas','ivo luis alfredo lares',38046456,'1994-09-06','ivo692009@gmail.com',NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,'TECKA'),(92,'ññññññññññññññññññññññ','desarrollo','ññññññññññññññññññññññ','asdasdasdasdasdasdasdasdasdasdas','ivo luis alfredo lares',38046456,'1994-06-01','ivo692009@gmail.com',NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,'CORCOVADO'),(93,'ññññññññññññññññññññññ','desarrollo','ññññññññññññññññññññññ','asdasdasdasdasdasdasdasdasdasdas','ñññññññññññññññññññññññññ',38046456,'1994-09-06','ivo692009@gmail.com',NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,'CUSHAMEN'),(94,'ññññññññññññññññññññññ','desarrollo','asdasd','adsafas!\"#!\"$!\"sadasdqasd','ivo luis alfredo lares',38046456,'1994-09-06','ivo692009@gmail.com',NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,'COSTA DE CHUBUT'),(95,'ññññññññññññññññññññññ','desarrollo','ññññññññññññññññññññññ','asdasdasdasdasdasdasdasdasdasdas','asdasdasdasdasd',38046456,'1994-09-06','ivo692009@gmail.com',NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,'CORCOVADO'),(96,'ññññññññññññññññññññññ','desarrollo','ssssssssssss','asdasdasdasdasdasdasdasdasdasdas','ivo luis alfredo lares',38046456,'1994-09-06','ivo692009@gmail.com',NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,'COSTA DE CHUBUT'),(97,'ññññññññññññññññññññññ','desarrollo','ññññññññññññññññññññññ','asdasdasdasdasdasdasdasdasdasdas','ñññññññññññññññññññññññññ',38046546,'1994-09-06','ivo692009@gmail.com',NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,'DOLAVON'),(98,'ññññññññññññññññññññññ','desarrollo','ññññññññññññññññññññññ','asdasdasdasdasdasdasdasdasdasdas','ivo luis alfredo lares',38046456,'1994-09-06','ivo692009@gmail.com',NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,'CUSHAMEN'),(99,'asdasd','desarrollo','asdasd','asdasdasdasdasdasdasdasdasdasdas','ivo luis alfredo lares',38046456,'1994-09-06','ivo692009@gmail.com',NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,'COMODORO RIVADAVIA'),(100,'ññññññññññññññññññññññ','desarrollo','ññññññññññññññññññññññ','asdasdasdasdasdasdasdasdasdasdas','ñññññññññññññññññññññññññ',38046456,'1994-09-06','ivo692009@gmail.com','pepito trueno',38046456,'1994-09-06','masdpomasopd@gmail.com',NULL,0,NULL,NULL,NULL,0,NULL,NULL,NULL,0,NULL,NULL,'COSTA DE CHUBUT'),(101,'los capos','desarrollo','pepas','pepas para todos y todas','ivo luis alfredo lares',38046456,'1994-09-06','ivo692009@gmail.com','pepito trueno',38046456,'1994-09-06','masdpomasopd@gmail.com','josesito de san martin',38046456,'1994-09-06','pepepepepep@gmail.com','Melocotonero',31235689,'1991-06-06','ivo692009@gmai.com','peperoni',29865478,'1987-02-02','manhatanMilo@hotmail.com.com','CORCOVADO');
/*!40000 ALTER TABLE `registro` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-11 12:25:52
