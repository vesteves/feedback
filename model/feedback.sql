CREATE DATABASE  IF NOT EXISTS `feedback_db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `feedback_db`;
-- MySQL dump 10.13  Distrib 5.5.50, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: feedback_db
-- ------------------------------------------------------
-- Server version	5.5.50-0ubuntu0.14.04.1

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
-- Table structure for table `modulo`
--

DROP TABLE IF EXISTS `modulo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modulo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modulo` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `modulo` (`modulo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modulo`
--

LOCK TABLES `modulo` WRITE;
/*!40000 ALTER TABLE `modulo` DISABLE KEYS */;
INSERT INTO `modulo` VALUES (2,'envio'),(3,'marketing'),(1,'pagamento'),(4,'suporte geral');
/*!40000 ALTER TABLE `modulo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perfil`
--

DROP TABLE IF EXISTS `perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perfil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perfil` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfil`
--

LOCK TABLES `perfil` WRITE;
/*!40000 ALTER TABLE `perfil` DISABLE KEYS */;
INSERT INTO `perfil` VALUES (1,'tecnico'),(2,'adm');
/*!40000 ALTER TABLE `perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ponto`
--

DROP TABLE IF EXISTS `ponto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ponto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) DEFAULT NULL,
  `entrada` datetime DEFAULT NULL,
  `saida` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ponto`
--

LOCK TABLES `ponto` WRITE;
/*!40000 ALTER TABLE `ponto` DISABLE KEYS */;
INSERT INTO `ponto` VALUES (1,1,'2016-07-21 18:11:17','2016-07-21 21:11:35'),(2,1,'2016-07-22 10:42:08','2016-07-22 13:42:08'),(3,1,'2016-07-22 13:38:10','2016-07-22 16:38:10');
/*!40000 ALTER TABLE `ponto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quadradinho`
--

DROP TABLE IF EXISTS `quadradinho`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quadradinho` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modulo` int(11) DEFAULT NULL,
  `nome` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quadradinho`
--

LOCK TABLES `quadradinho` WRITE;
/*!40000 ALTER TABLE `quadradinho` DISABLE KEYS */;
INSERT INTO `quadradinho` VALUES (1,1,'boletox'),(2,1,'bcash'),(3,1,'cod'),(4,1,'pagseguroapp'),(5,1,'moip'),(6,1,'iugu'),(7,1,'mercadopago'),(8,1,'pagseguro'),(9,1,'mundipagg'),(10,1,'paypal_e'),(11,2,'correios_offline'),(12,2,'correio'),(13,2,'tnt'),(14,2,'tablerate'),(15,2,'flatrate'),(16,3,'campaignator'),(17,3,'banners'),(18,3,'frete_gratis'),(19,3,'cupom'),(20,3,'assinantes_news'),(21,3,'carrinho_abandonados'),(22,3,'r_acesso'),(23,3,'a_preditiva'),(24,3,'marketplaces'),(25,4,'suporte_geral');
/*!40000 ALTER TABLE `quadradinho` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(30) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `perfil` int(11) DEFAULT NULL,
  `ativo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'vitor','xtech123',2,1),(2,'pedro','xtech123',2,1),(3,'thiago','xtech123',2,1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xtech_log`
--

DROP TABLE IF EXISTS `xtech_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xtech_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quadradinho` int(11) DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xtech_log`
--

LOCK TABLES `xtech_log` WRITE;
/*!40000 ALTER TABLE `xtech_log` DISABLE KEYS */;
INSERT INTO `xtech_log` VALUES (1,1,1,'2016-07-21 20:29:24'),(2,1,1,'2016-07-21 20:29:26'),(3,1,1,'2016-07-21 20:40:55'),(4,1,1,'2016-07-21 20:41:22'),(5,1,1,'2016-07-22 14:29:42'),(6,3,1,'2016-07-22 14:31:10'),(7,6,1,'2016-07-22 14:31:12'),(8,1,1,'2016-07-22 15:21:29'),(9,1,1,'2016-07-22 15:21:34'),(10,1,1,'2016-07-22 15:22:33'),(11,1,1,'2016-07-22 15:22:50'),(12,1,1,'2016-07-22 15:22:52'),(13,1,1,'2016-07-22 15:23:00'),(14,1,1,'2016-07-22 15:23:06'),(15,1,1,'2016-07-22 15:23:57'),(16,1,1,'2016-07-22 15:24:36'),(17,1,1,'2016-07-22 15:25:03'),(18,1,1,'2016-07-22 15:25:16'),(19,1,1,'2016-07-22 15:25:59'),(20,1,1,'2016-07-22 15:26:45'),(21,1,1,'2016-07-22 15:26:49'),(22,1,1,'2016-07-22 15:27:17'),(23,1,1,'2016-07-22 15:27:37'),(24,1,1,'2016-07-22 15:30:46'),(25,1,1,'2016-07-22 15:33:02'),(26,1,1,'2016-07-22 15:33:04'),(27,1,1,'2016-07-22 15:33:22'),(28,1,1,'2016-07-22 15:33:30'),(29,1,1,'2016-07-22 15:33:46'),(30,1,1,'2016-07-22 15:35:30'),(31,2,1,'2016-07-22 15:35:34'),(32,1,1,'2016-07-22 15:54:36'),(33,1,1,'2016-07-22 15:55:03'),(34,1,1,'2016-07-22 15:55:17'),(35,1,1,'2016-07-22 15:57:12'),(36,1,1,'2016-07-22 15:57:14'),(37,1,1,'2016-07-22 16:00:17'),(38,1,1,'2016-07-22 16:00:36'),(39,1,1,'2016-07-22 16:02:29'),(40,1,1,'2016-07-22 16:36:37'),(41,1,1,'2016-07-22 16:38:12'),(42,1,1,'2016-07-22 16:38:15'),(43,1,1,'2016-07-22 16:38:25'),(44,1,1,'2016-07-22 16:40:33'),(45,1,1,'2016-07-22 16:41:30'),(46,1,1,'2016-07-22 16:41:40'),(47,1,1,'2016-07-22 16:42:06'),(48,1,1,'2016-07-22 16:42:33'),(49,1,1,'2016-07-22 16:43:44'),(50,1,1,'2016-07-22 16:44:02'),(51,1,1,'2016-07-22 16:44:19'),(52,1,1,'2016-07-22 16:44:29'),(53,1,1,'2016-07-22 16:45:11'),(54,1,1,'2016-07-22 16:45:13'),(55,1,1,'2016-07-22 16:46:36'),(56,1,1,'2016-07-22 16:46:58'),(57,1,1,'2016-07-22 16:50:41'),(58,1,1,'2016-07-22 16:55:56'),(59,1,1,'2016-07-22 16:56:34'),(60,1,1,'2016-07-22 16:56:43'),(61,1,1,'2016-07-22 16:56:56'),(62,1,1,'2016-07-22 16:57:34'),(63,1,1,'2016-07-22 17:02:17'),(64,1,1,'2016-07-22 17:03:48'),(65,1,1,'2016-07-22 17:04:31'),(66,1,1,'2016-07-22 17:06:04'),(67,1,1,'2016-07-22 17:06:47'),(68,1,1,'2016-07-22 17:10:09'),(69,1,1,'2016-07-22 17:10:37'),(70,1,1,'2016-07-22 17:11:15'),(71,1,1,'2016-07-22 17:12:06'),(72,1,1,'2016-07-22 17:12:08'),(73,1,1,'2016-07-22 17:13:01'),(74,1,1,'2016-07-22 17:15:07'),(75,1,1,'2016-07-22 17:15:25'),(76,2,1,'2016-07-22 17:24:22'),(77,3,1,'2016-07-22 17:24:41'),(78,2,1,'2016-07-22 17:24:42'),(79,1,1,'2016-07-22 17:34:38'),(80,1,1,'2016-07-22 17:34:47'),(81,1,1,'2016-07-22 19:17:04');
/*!40000 ALTER TABLE `xtech_log` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-22 19:03:16
