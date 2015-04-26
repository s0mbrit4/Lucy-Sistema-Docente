CREATE DATABASE  IF NOT EXISTS `Herramienta` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `Herramienta`;
-- MySQL dump 10.13  Distrib 5.5.41, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: Herramienta
-- ------------------------------------------------------
-- Server version	5.5.41-0ubuntu0.14.10.1

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
-- Table structure for table `Alumnos`
--

DROP TABLE IF EXISTS `Alumnos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Alumnos` (
  `IdAlumno` int(11) NOT NULL AUTO_INCREMENT,
  `AnioA` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(30) NOT NULL,
  `FechaNac` date NOT NULL,
  `Ciudad` varchar(45) NOT NULL,
  `Nacionalidad` varchar(20) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `LiceoFK` int(11) NOT NULL,
  `GrupoFK` int(11) NOT NULL,
  `Computadora` binary(1) NOT NULL,
  `Ceibal` binary(1) NOT NULL,
  `Internet` binary(1) NOT NULL,
  `Transporte` int(11) NOT NULL,
  `Distancia` int(11) NOT NULL,
  `Tolerancia` binary(1) DEFAULT NULL,
  `Padre` binary(1) DEFAULT NULL,
  `NivPadre` int(11) DEFAULT NULL,
  `Madre` binary(1) DEFAULT NULL,
  `NivMadre` int(11) DEFAULT NULL,
  `Tutor` binary(1) DEFAULT NULL,
  `NivTutor` int(11) DEFAULT NULL,
  `Hermanos` binary(1) DEFAULT NULL,
  `CantHermanos` int(11) DEFAULT NULL,
  `NivHermanos` int(11) DEFAULT NULL,
  `Trabaja` binary(1) DEFAULT NULL,
  `Ayuda` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`IdAlumno`),
  KEY `IdGrupo_idx` (`GrupoFK`),
  KEY `LiceoFK_idx` (`LiceoFK`),
  CONSTRAINT `GrupoFK` FOREIGN KEY (`GrupoFK`) REFERENCES `Grupos` (`IdGrupo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Alumnos`
--

LOCK TABLES `Alumnos` WRITE;
/*!40000 ALTER TABLE `Alumnos` DISABLE KEYS */;
/*!40000 ALTER TABLE `Alumnos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-04-05 16:43:33
