-- MariaDB dump 10.18  Distrib 10.4.17-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: user
-- ------------------------------------------------------
-- Server version	10.4.17-MariaDB

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
-- Table structure for table `recentmatch`
--

DROP TABLE IF EXISTS `recentmatch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recentmatch` (
  `home` char(20) NOT NULL,
  `away` char(20) NOT NULL,
  `result` char(10) DEFAULT NULL,
  `win` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recentmatch`
--

LOCK TABLES `recentmatch` WRITE;
/*!40000 ALTER TABLE `recentmatch` DISABLE KEYS */;
INSERT INTO `recentmatch` VALUES ('グラナダ','バルセロナ','0-4','バルセロナ'),('アトレティコ','バルセロナ','2-3','バルセロナ'),('ウエスカ','バルセロナ','0-1','バルセロナ'),('バルセロナ','エイバル','1-1','drow'),('バリャドリード','バルセロナ','0-3','バルセロナ');
/*!40000 ALTER TABLE `recentmatch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schematch`
--

DROP TABLE IF EXISTS `schematch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schematch` (
  `home` char(20) NOT NULL,
  `away` char(20) NOT NULL,
  `day` datetime DEFAULT NULL,
  `opponent` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schematch`
--

LOCK TABLES `schematch` WRITE;
/*!40000 ALTER TABLE `schematch` DISABLE KEYS */;
INSERT INTO `schematch` VALUES ('エルチェ','バルセロナ','2021-01-13 00:15:00','エルチェ'),('バルセロナ','アトレティコ','2021-01-31 00:00:00','アトレティコ'),('ベティス','バルセロナ','2021-02-07 00:00:00','ベティス'),('バルセロナ','アラベス','2021-02-14 00:00:00','アラベス'),('バルセロナ','カディス','2021-02-21 00:00:00','カディス'),('バルセロナ','エルチェ','2021-02-25 00:00:00','エルチェ'),('セビージャ','バルセロナ','2021-02-28 00:00:00','セビージャ'),('オサスナ','バルセロナ','2021-03-07 00:00:00','オサスナ'),('バルセロナ','ウエスカ','2021-03-14 00:00:00','ウエスカ'),('ソシエダ','バルセロナ','2021-03-21 00:00:00','ソシエダ'),('バルセロナ','バリャドリード','2021-04-04 00:00:00','バリャドリード'),('レアルマドリード','バルセロナ','2021-04-11 00:00:00','レアルマドリード'),('バルセロナ','ヘタフェ','2021-04-21 00:00:00','ヘタフェ'),('ビジャレアル','バルセロナ','2021-04-25 00:00:00','ビジャレアル'),('バルセロナ','グラナダ','2021-04-28 00:00:00','グラナダ'),('バレンシア','バルセロナ','2021-05-02 00:00:00','バレンシア'),('バルセロナ','アトレティコ','2021-05-09 00:00:00','アトレティコ'),('レバンテ','バルセロナ','2021-05-12 00:00:00','レバンテ'),('エイバル','バルセロナ','2021-05-23 00:00:00','エイバル');
/*!40000 ALTER TABLE `schematch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `toiawase`
--

DROP TABLE IF EXISTS `toiawase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `toiawase` (
  `name` char(10) NOT NULL,
  `email` char(20) NOT NULL,
  `number` int(11) NOT NULL,
  `subject` char(30) NOT NULL,
  `inquiry` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `toiawase`
--

LOCK TABLES `toiawase` WRITE;
/*!40000 ALTER TABLE `toiawase` DISABLE KEYS */;
INSERT INTO `toiawase` VALUES ('松井','aaa@xxx.com',87878,'あ','ああああああああああ'),('松井','aaa@xxx.com',87878,'あ','ああああああああああ'),('松井','aaa@xxx.com',87878,'あ','ああああああああああ'),('i','b',87878,'あ','いふｎ'),('山内創太','souta@xxx.com',724545,'明日は何曜日？','しるかぼけ'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','z'),('i','aaa@xxx.com',87878,'あ','、'),('i','aaa@xxx.com',87878,'あ','、'),('i','aaa@xxx.com',87878,'あ','、'),('i','aaa@xxx.com',87878,'あ','、'),('i','aaa@xxx.com',87878,'あ','、'),('i','aaa@xxx.com',87878,'あ','ｋ、'),('i','aaa@xxx.com',87878,'明日は何曜日？','m'),('i','From:aaa@xxx.com',87878,'明日は何曜日？',',oh'),('i','From:aaa@xxx.com',87878,'明日は何曜日？',',oh'),('i','From:hizabakudansout',87878,'明日は何曜日？','m'),('i','From:hizabakudansout',87878,'明日は何曜日？','m'),('i','From:me@example.com',87878,'明日は何曜日？','a'),('i','From:me@example.com',87878,'明日は何曜日？','kljh'),('i','',87878,'明日は何曜日？','n'),('i','',87878,'明日は何曜日？','n'),('i','hizabakudan.souta@i.',87878,'明日は何曜日？','n'),('i','hizabakudan.souta@i.',87878,'明日は何曜日？',',jh'),('i','i',87878,'明日は何曜日？','.j'),('i','hizabakudan.souta@i.',87878,'明日は何曜日？',':;h'),('やまうち','hizabakudan.souta@i.',87878,'明日は何曜日？','あ'),('i','hizabakudan.souta@i.',87878,'明日は何曜日？','あ'),('i','hizabakudan.s@outloo',87878,'明日は何曜日？','nice'),('山内創太','hizabakudan.s@outloo',724545,'明日は何曜日？','しるかぼけ'),('i','hizabakudan.s@outloo',87878,'test','test');
/*!40000 ALTER TABLE `toiawase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` char(40) NOT NULL,
  `password` char(20) NOT NULL,
  `name` char(20) NOT NULL,
  `gender` char(1) DEFAULT NULL,
  `old` int(11) NOT NULL,
  `memo` char(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userinfo`
--

LOCK TABLES `userinfo` WRITE;
/*!40000 ALTER TABLE `userinfo` DISABLE KEYS */;
INSERT INTO `userinfo` VALUES (1,'hiza@xxx.com','00001111','青木岳','1',29,'がんばれおれ'),(3,'ultimateprogram2@gmail.com','0000','3代目世界のアゲチン','0',101,'あともう少しで完成ですね、しんどいとは思いますが、相当実力がついていると思いますので、ここを乗り切りましょう！！'),(6,'test@test.com','1111','test','0',98,'');
/*!40000 ALTER TABLE `userinfo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-29 17:41:03
