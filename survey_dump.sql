-- MariaDB dump 10.19  Distrib 10.7.4-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: 
-- ------------------------------------------------------
-- Server version	10.7.4-MariaDB-1:10.7.4+maria~focal

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `survey`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `survey` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `survey`;

--
-- Table structure for table `AltersbereichKey`
--

DROP TABLE IF EXISTS `AltersbereichKey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `AltersbereichKey` (
  `ID` int(11) NOT NULL,
  `AltersbereichName` varchar(15) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `AltersbereichKey`
--

LOCK TABLES `AltersbereichKey` WRITE;
/*!40000 ALTER TABLE `AltersbereichKey` DISABLE KEYS */;
INSERT INTO `AltersbereichKey` VALUES
(0,'17 oder jÃ¼nger'),
(1,'18-20'),
(2,'21-29'),
(3,'30-39'),
(4,'40-49'),
(5,'50-59'),
(6,'60 oder Ã¤lter');
/*!40000 ALTER TABLE `AltersbereichKey` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `BerufsfeldKey`
--

DROP TABLE IF EXISTS `BerufsfeldKey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `BerufsfeldKey` (
  `ID` int(11) NOT NULL,
  `BerufsfeldName` varchar(29) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `BerufsfeldKey`
--

LOCK TABLES `BerufsfeldKey` WRITE;
/*!40000 ALTER TABLE `BerufsfeldKey` DISABLE KEYS */;
INSERT INTO `BerufsfeldKey` VALUES
(0,'Labor'),
(1,'Handwerk'),
(2,'IT und Elektronik'),
(3,'KaufmÃ¤nnisch'),
(4,'Gesundheit und Pflege'),
(5,'Sonstiges');
/*!40000 ALTER TABLE `BerufsfeldKey` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Betriebssystem`
--

DROP TABLE IF EXISTS `Betriebssystem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Betriebssystem` (
  `TeilnehmerID` int(11) NOT NULL,
  `Betriebssystem` int(11) NOT NULL,
  `Geraeteart` int(11) NOT NULL,
  KEY `TeilnehmerID` (`TeilnehmerID`),
  KEY `Betriebssystem` (`Betriebssystem`),
  KEY `Geraeteart` (`Geraeteart`),
  CONSTRAINT `betriebssystem_ibfk_1` FOREIGN KEY (`TeilnehmerID`) REFERENCES `TeilnehmerDaten` (`TeilnehmerID`),
  CONSTRAINT `betriebssystem_ibfk_2` FOREIGN KEY (`Betriebssystem`) REFERENCES `BetriebssystemKey` (`ID`),
  CONSTRAINT `betriebssystem_ibfk_3` FOREIGN KEY (`Geraeteart`) REFERENCES `Geraeteart` (`Geraeteart`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Betriebssystem`
--

LOCK TABLES `Betriebssystem` WRITE;
/*!40000 ALTER TABLE `Betriebssystem` DISABLE KEYS */;
/*!40000 ALTER TABLE `Betriebssystem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `BetriebssystemKey`
--

DROP TABLE IF EXISTS `BetriebssystemKey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `BetriebssystemKey` (
  `ID` int(11) NOT NULL,
  `BetriebssystemName` varchar(15) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `BetriebssystemKey`
--

LOCK TABLES `BetriebssystemKey` WRITE;
/*!40000 ALTER TABLE `BetriebssystemKey` DISABLE KEYS */;
INSERT INTO `BetriebssystemKey` VALUES
(0,'Windows'),
(1,'macOS'),
(2,'Linux'),
(3,'BSD'),
(4,'iOS'),
(5,'iPadOS'),
(6,'Android'),
(7,'Firefox OS'),
(8,'Windows Phone'),
(9,'Tizen OS');
/*!40000 ALTER TABLE `BetriebssystemKey` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Bewertung`
--

DROP TABLE IF EXISTS `Bewertung`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Bewertung` (
  `TeilnehmerID` int(11) NOT NULL,
  `Bewertung` int(11) DEFAULT NULL,
  KEY `TeilnehmerID` (`TeilnehmerID`),
  KEY `Bewertung` (`Bewertung`),
  CONSTRAINT `bewertung_ibfk_1` FOREIGN KEY (`TeilnehmerID`) REFERENCES `TeilnehmerDaten` (`TeilnehmerID`),
  CONSTRAINT `bewertung_ibfk_2` FOREIGN KEY (`Bewertung`) REFERENCES `BewertungKey` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Bewertung`
--

LOCK TABLES `Bewertung` WRITE;
/*!40000 ALTER TABLE `Bewertung` DISABLE KEYS */;
/*!40000 ALTER TABLE `Bewertung` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `BewertungKey`
--

DROP TABLE IF EXISTS `BewertungKey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `BewertungKey` (
  `ID` int(11) NOT NULL,
  `BewertungName` varchar(13) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `BewertungKey`
--

LOCK TABLES `BewertungKey` WRITE;
/*!40000 ALTER TABLE `BewertungKey` DISABLE KEYS */;
INSERT INTO `BewertungKey` VALUES
(0,'Sehr gut'),
(1,'Gut'),
(2,'MittelmÃ¤ÃŸig'),
(3,'Schlecht'),
(4,'Sehr schlecht');
/*!40000 ALTER TABLE `BewertungKey` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `BildungsstandKey`
--

DROP TABLE IF EXISTS `BildungsstandKey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `BildungsstandKey` (
  `ID` int(11) NOT NULL,
  `BildungsstandName` varchar(34) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `BildungsstandKey`
--

LOCK TABLES `BildungsstandKey` WRITE;
/*!40000 ALTER TABLE `BildungsstandKey` DISABLE KEYS */;
INSERT INTO `BildungsstandKey` VALUES
(0,'Kein Abschluss'),
(1,'Qualifizierter Hauptschulabschluss'),
(2,'Mittlere Reife'),
(3,'Fachabitur'),
(4,'Allgemeines Abitur'),
(5,'Studium ohne Abschluss'),
(6,'Bachelor'),
(7,'Diplom'),
(8,'Master'),
(9,'Promotion'),
(10,'Professur');
/*!40000 ALTER TABLE `BildungsstandKey` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Browser`
--

DROP TABLE IF EXISTS `Browser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Browser` (
  `TeilnehmerID` int(11) NOT NULL,
  `Browser` int(11) DEFAULT NULL,
  KEY `TeilnehmerID` (`TeilnehmerID`),
  KEY `Browser` (`Browser`),
  CONSTRAINT `browser_ibfk_1` FOREIGN KEY (`TeilnehmerID`) REFERENCES `TeilnehmerDaten` (`TeilnehmerID`),
  CONSTRAINT `browser_ibfk_2` FOREIGN KEY (`Browser`) REFERENCES `BrowserKey` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Browser`
--

LOCK TABLES `Browser` WRITE;
/*!40000 ALTER TABLE `Browser` DISABLE KEYS */;
/*!40000 ALTER TABLE `Browser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `BrowserKey`
--

DROP TABLE IF EXISTS `BrowserKey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `BrowserKey` (
  `ID` int(11) NOT NULL,
  `BrowserName` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `BrowserKey`
--

LOCK TABLES `BrowserKey` WRITE;
/*!40000 ALTER TABLE `BrowserKey` DISABLE KEYS */;
INSERT INTO `BrowserKey` VALUES
(0,'Brave'),
(1,'Chrome'),
(2,'Chromium'),
(3,'Edge'),
(4,'Epiphany (GNOME Web)'),
(5,'Firefox'),
(6,'Internet Explorer'),
(7,'Konqueror'),
(8,'Opera'),
(9,'Safari'),
(10,'Tor Browser');
/*!40000 ALTER TABLE `BrowserKey` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FamilienstandKey`
--

DROP TABLE IF EXISTS `FamilienstandKey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FamilienstandKey` (
  `ID` int(11) NOT NULL,
  `FamilienstandName` varchar(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FamilienstandKey`
--

LOCK TABLES `FamilienstandKey` WRITE;
/*!40000 ALTER TABLE `FamilienstandKey` DISABLE KEYS */;
INSERT INTO `FamilienstandKey` VALUES
(0,'Ledig'),
(1,'Getrennt'),
(2,'Geschieden'),
(3,'Verwitwet'),
(4,'Verheiratet');
/*!40000 ALTER TABLE `FamilienstandKey` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Geraeteart`
--

DROP TABLE IF EXISTS `Geraeteart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Geraeteart` (
  `TeilnehmerID` int(11) NOT NULL,
  `Geraeteart` int(11) NOT NULL,
  KEY `TeilnehmerID` (`TeilnehmerID`),
  KEY `Geraeteart` (`Geraeteart`),
  CONSTRAINT `geraeteart_ibfk_1` FOREIGN KEY (`TeilnehmerID`) REFERENCES `TeilnehmerDaten` (`TeilnehmerID`),
  CONSTRAINT `geraeteart_ibfk_2` FOREIGN KEY (`Geraeteart`) REFERENCES `GeraeteartKey` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Geraeteart`
--

LOCK TABLES `Geraeteart` WRITE;
/*!40000 ALTER TABLE `Geraeteart` DISABLE KEYS */;
/*!40000 ALTER TABLE `Geraeteart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `GeraeteartKey`
--

DROP TABLE IF EXISTS `GeraeteartKey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `GeraeteartKey` (
  `ID` int(11) NOT NULL,
  `GeraeteartName` varchar(13) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `GeraeteartKey`
--

LOCK TABLES `GeraeteartKey` WRITE;
/*!40000 ALTER TABLE `GeraeteartKey` DISABLE KEYS */;
INSERT INTO `GeraeteartKey` VALUES
(0,'Desktop PC'),
(1,'Laptop'),
(2,'Smartphone'),
(3,'Tablet'),
(4,'Smart TV'),
(5,'Smartwatch'),
(6,'Spielekonsole');
/*!40000 ALTER TABLE `GeraeteartKey` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `GeschlechtKey`
--

DROP TABLE IF EXISTS `GeschlechtKey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `GeschlechtKey` (
  `ID` int(11) NOT NULL,
  `GeschlechtName` varchar(9) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `GeschlechtKey`
--

LOCK TABLES `GeschlechtKey` WRITE;
/*!40000 ALTER TABLE `GeschlechtKey` DISABLE KEYS */;
INSERT INTO `GeschlechtKey` VALUES
(0,'MÃ¤nnlich'),
(1,'Weiblich'),
(2,'Sonstiges');
/*!40000 ALTER TABLE `GeschlechtKey` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Mailclient`
--

DROP TABLE IF EXISTS `Mailclient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Mailclient` (
  `TeilnehmerID` int(11) NOT NULL,
  `Mailclient` int(11) DEFAULT NULL,
  KEY `TeilnehmerID` (`TeilnehmerID`),
  KEY `Mailclient` (`Mailclient`),
  CONSTRAINT `mailclient_ibfk_1` FOREIGN KEY (`TeilnehmerID`) REFERENCES `TeilnehmerDaten` (`TeilnehmerID`),
  CONSTRAINT `mailclient_ibfk_2` FOREIGN KEY (`Mailclient`) REFERENCES `MailclientKey` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Mailclient`
--

LOCK TABLES `Mailclient` WRITE;
/*!40000 ALTER TABLE `Mailclient` DISABLE KEYS */;
/*!40000 ALTER TABLE `Mailclient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MailclientKey`
--

DROP TABLE IF EXISTS `MailclientKey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MailclientKey` (
  `ID` int(11) NOT NULL,
  `MailclientName` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MailclientKey`
--

LOCK TABLES `MailclientKey` WRITE;
/*!40000 ALTER TABLE `MailclientKey` DISABLE KEYS */;
INSERT INTO `MailclientKey` VALUES
(0,'Apple Mail'),
(1,'Claws Mail'),
(2,'eM Client'),
(3,'Evolution'),
(4,'FairEmail'),
(5,'Geary'),
(6,'Google Mail-App'),
(7,'K-9 Mail'),
(8,'Outlook'),
(9,'Spark'),
(10,'Thunderbird'),
(11,'WeboberflÃ¤che');
/*!40000 ALTER TABLE `MailclientKey` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Nutzungsdauer`
--

DROP TABLE IF EXISTS `Nutzungsdauer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Nutzungsdauer` (
  `TeilnehmerID` int(11) NOT NULL,
  `Nutzungsdauer` int(11) NOT NULL,
  `Geraeteart` int(11) NOT NULL,
  KEY `TeilnehmerID` (`TeilnehmerID`),
  KEY `Nutzungsdauer` (`Nutzungsdauer`),
  KEY `Geraeteart` (`Geraeteart`),
  CONSTRAINT `nutzungsdauer_ibfk_1` FOREIGN KEY (`TeilnehmerID`) REFERENCES `TeilnehmerDaten` (`TeilnehmerID`),
  CONSTRAINT `nutzungsdauer_ibfk_2` FOREIGN KEY (`Nutzungsdauer`) REFERENCES `NutzungsdauerKey` (`ID`),
  CONSTRAINT `nutzungsdauer_ibfk_3` FOREIGN KEY (`Geraeteart`) REFERENCES `Geraeteart` (`Geraeteart`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Nutzungsdauer`
--

LOCK TABLES `Nutzungsdauer` WRITE;
/*!40000 ALTER TABLE `Nutzungsdauer` DISABLE KEYS */;
/*!40000 ALTER TABLE `Nutzungsdauer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `NutzungsdauerKey`
--

DROP TABLE IF EXISTS `NutzungsdauerKey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `NutzungsdauerKey` (
  `ID` int(11) NOT NULL,
  `NutzungsdauerName` varchar(15) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `NutzungsdauerKey`
--

LOCK TABLES `NutzungsdauerKey` WRITE;
/*!40000 ALTER TABLE `NutzungsdauerKey` DISABLE KEYS */;
INSERT INTO `NutzungsdauerKey` VALUES
(0,'Unter 1 Stunde'),
(1,'1-3 Stunden'),
(2,'3-5 Stunden'),
(3,'5-7 Stunden'),
(4,'7-8 Stunden'),
(5,'Ãœber 8 Stunden');
/*!40000 ALTER TABLE `NutzungsdauerKey` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Nutzungsgebiet`
--

DROP TABLE IF EXISTS `Nutzungsgebiet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Nutzungsgebiet` (
  `TeilnehmerID` int(11) NOT NULL,
  `Nutzungsgebiet` int(11) NOT NULL,
  `Geraeteart` int(11) NOT NULL,
  KEY `TeilnehmerID` (`TeilnehmerID`),
  KEY `Nutzungsgebiet` (`Nutzungsgebiet`),
  KEY `Geraeteart` (`Geraeteart`),
  CONSTRAINT `nutzungsgebiet_ibfk_1` FOREIGN KEY (`TeilnehmerID`) REFERENCES `TeilnehmerDaten` (`TeilnehmerID`),
  CONSTRAINT `nutzungsgebiet_ibfk_2` FOREIGN KEY (`Nutzungsgebiet`) REFERENCES `NutzungsgebietKey` (`ID`),
  CONSTRAINT `nutzungsgebiet_ibfk_3` FOREIGN KEY (`Geraeteart`) REFERENCES `Geraeteart` (`Geraeteart`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Nutzungsgebiet`
--

LOCK TABLES `Nutzungsgebiet` WRITE;
/*!40000 ALTER TABLE `Nutzungsgebiet` DISABLE KEYS */;
/*!40000 ALTER TABLE `Nutzungsgebiet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `NutzungsgebietKey`
--

DROP TABLE IF EXISTS `NutzungsgebietKey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `NutzungsgebietKey` (
  `ID` int(11) NOT NULL,
  `NutzungsgebietName` varchar(27) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `NutzungsgebietKey`
--

LOCK TABLES `NutzungsgebietKey` WRITE;
/*!40000 ALTER TABLE `NutzungsgebietKey` DISABLE KEYS */;
INSERT INTO `NutzungsgebietKey` VALUES
(0,'Arbeit'),
(1,'Surfen im Internet'),
(2,'Online-Shopping'),
(3,'Videos/Filme/Serien schauen'),
(4,'Spielen'),
(5,'Gesundheit');
/*!40000 ALTER TABLE `NutzungsgebietKey` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TeilnehmerDaten`
--

DROP TABLE IF EXISTS `TeilnehmerDaten`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TeilnehmerDaten` (
  `TeilnehmerID` int(11) NOT NULL,
  `Geschlecht` int(11) NOT NULL,
  `Altersbereich` int(11) NOT NULL,
  `Berufsfeld` int(11) NOT NULL,
  `Familienstand` int(11) NOT NULL,
  `Bildungsstand` int(11) NOT NULL,
  PRIMARY KEY (`TeilnehmerID`),
  KEY `Geschlecht` (`Geschlecht`),
  KEY `Altersbereich` (`Altersbereich`),
  KEY `Berufsfeld` (`Berufsfeld`),
  KEY `Familienstand` (`Familienstand`),
  KEY `Bildungsstand` (`Bildungsstand`),
  CONSTRAINT `teilnehmerdaten_ibfk_1` FOREIGN KEY (`Geschlecht`) REFERENCES `GeschlechtKey` (`ID`),
  CONSTRAINT `teilnehmerdaten_ibfk_2` FOREIGN KEY (`Altersbereich`) REFERENCES `AltersbereichKey` (`ID`),
  CONSTRAINT `teilnehmerdaten_ibfk_3` FOREIGN KEY (`Berufsfeld`) REFERENCES `BerufsfeldKey` (`ID`),
  CONSTRAINT `teilnehmerdaten_ibfk_4` FOREIGN KEY (`Familienstand`) REFERENCES `FamilienstandKey` (`ID`),
  CONSTRAINT `teilnehmerdaten_ibfk_5` FOREIGN KEY (`Bildungsstand`) REFERENCES `BildungsstandKey` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TeilnehmerDaten`
--

LOCK TABLES `TeilnehmerDaten` WRITE;
/*!40000 ALTER TABLE `TeilnehmerDaten` DISABLE KEYS */;
/*!40000 ALTER TABLE `TeilnehmerDaten` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `VerschluesselungDienstlich`
--

DROP TABLE IF EXISTS `VerschluesselungDienstlich`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `VerschluesselungDienstlich` (
  `TeilnehmerID` int(11) NOT NULL,
  `VerschluesselungDienstlich` int(11) NOT NULL,
  `Art` int(11) DEFAULT NULL,
  KEY `TeilnehmerID` (`TeilnehmerID`),
  KEY `VerschluesselungDienstlich` (`VerschluesselungDienstlich`),
  KEY `Art` (`Art`),
  CONSTRAINT `verschluesselungdienstlich_ibfk_1` FOREIGN KEY (`TeilnehmerID`) REFERENCES `TeilnehmerDaten` (`TeilnehmerID`),
  CONSTRAINT `verschluesselungdienstlich_ibfk_2` FOREIGN KEY (`VerschluesselungDienstlich`) REFERENCES `VerschluesselungKey` (`ID`),
  CONSTRAINT `verschluesselungdienstlich_ibfk_3` FOREIGN KEY (`Art`) REFERENCES `VerschluesselungsartKey` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `VerschluesselungDienstlich`
--

LOCK TABLES `VerschluesselungDienstlich` WRITE;
/*!40000 ALTER TABLE `VerschluesselungDienstlich` DISABLE KEYS */;
/*!40000 ALTER TABLE `VerschluesselungDienstlich` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `VerschluesselungKey`
--

DROP TABLE IF EXISTS `VerschluesselungKey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `VerschluesselungKey` (
  `ID` int(11) NOT NULL,
  `VerschluesselungName` varchar(4) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `VerschluesselungKey`
--

LOCK TABLES `VerschluesselungKey` WRITE;
/*!40000 ALTER TABLE `VerschluesselungKey` DISABLE KEYS */;
INSERT INTO `VerschluesselungKey` VALUES
(0,'Nein'),
(1,'Ja');
/*!40000 ALTER TABLE `VerschluesselungKey` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `VerschluesselungPrivat`
--

DROP TABLE IF EXISTS `VerschluesselungPrivat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `VerschluesselungPrivat` (
  `TeilnehmerID` int(11) NOT NULL,
  `VerschluesselungPrivat` int(11) NOT NULL,
  `Art` int(11) DEFAULT NULL,
  KEY `TeilnehmerID` (`TeilnehmerID`),
  KEY `VerschluesselungPrivat` (`VerschluesselungPrivat`),
  KEY `Art` (`Art`),
  CONSTRAINT `verschluesselungprivat_ibfk_1` FOREIGN KEY (`TeilnehmerID`) REFERENCES `TeilnehmerDaten` (`TeilnehmerID`),
  CONSTRAINT `verschluesselungprivat_ibfk_2` FOREIGN KEY (`VerschluesselungPrivat`) REFERENCES `VerschluesselungKey` (`ID`),
  CONSTRAINT `verschluesselungprivat_ibfk_3` FOREIGN KEY (`Art`) REFERENCES `VerschluesselungsartKey` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `VerschluesselungPrivat`
--

LOCK TABLES `VerschluesselungPrivat` WRITE;
/*!40000 ALTER TABLE `VerschluesselungPrivat` DISABLE KEYS */;
/*!40000 ALTER TABLE `VerschluesselungPrivat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `VerschluesselungsartKey`
--

DROP TABLE IF EXISTS `VerschluesselungsartKey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `VerschluesselungsartKey` (
  `ID` int(11) NOT NULL,
  `VerschluesselungsartName` varchar(35) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `VerschluesselungsartKey`
--

LOCK TABLES `VerschluesselungsartKey` WRITE;
/*!40000 ALTER TABLE `VerschluesselungsartKey` DISABLE KEYS */;
INSERT INTO `VerschluesselungsartKey` VALUES
(0,'PGP'),
(1,'S/MIME'),
(2,'Spezialisierter E-Mail-Provider');
/*!40000 ALTER TABLE `VerschluesselungsartKey` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-14 20:47:01