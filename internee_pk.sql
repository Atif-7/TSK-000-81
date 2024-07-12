-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: internee.pk
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

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
-- Table structure for table `internships`
--

DROP TABLE IF EXISTS `internships`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `internships` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Category` varchar(255) DEFAULT NULL,
  `CoverImg` varchar(255) DEFAULT NULL,
  `Duration` int(11) DEFAULT NULL,
  `Type` varchar(255) DEFAULT NULL,
  `Status` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `internships`
--

LOCK TABLES `internships` WRITE;
/*!40000 ALTER TABLE `internships` DISABLE KEYS */;
INSERT INTO `internships` VALUES (1,'Frontend Development','FrontEnd.jpeg',1,'Remote',0),(2,'Cloud Computing ','cloud.jpg',1,'Remote',0),(3,'Backend Development','BackendDevelopment.jpeg',1,'Remote',0),(4,'Mobile App Development','Mobile App Developer.jpeg',1,'Remote',0),(5,'Figma Internship','figma.png',1,'Remote',0),(6,'Chatbot Development','chatbot.jpeg',1,'Remote',0),(7,'Data Analytics','analysis.jpg',1,'remote',0),(8,'Graphic Design','graphics.jpg',1,'remote',0),(9,'Cyber Security','cyber.jpeg',1,'remote',0);
/*!40000 ALTER TABLE `internships` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sub_interns`
--

DROP TABLE IF EXISTS `sub_interns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sub_interns` (
  `subId` int(11) NOT NULL,
  `DomainName` varchar(255) DEFAULT NULL,
  `LogoImg` varchar(255) DEFAULT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `Duration` int(11) DEFAULT NULL,
  `JobType` varchar(255) DEFAULT NULL,
  `WorkType` varchar(255) DEFAULT NULL,
  `ApplyLink` text DEFAULT NULL,
  `CategId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_interns`
--

LOCK TABLES `sub_interns` WRITE;
/*!40000 ALTER TABLE `sub_interns` DISABLE KEYS */;
INSERT INTO `sub_interns` VALUES (1,'MERN Stack Internship','mern.png','Karachi, Pakistan',1,'Internship','Remote','https://docs.google.com/forms/d/e/1FAIpQLSd6PxijXvz3R8Vdl3livzg9_aPES_abyydAyde0SV0BxmeT2w/closedform',3),(2,'PHP Development Internship','php.png','Karachi, Pakistan',1,'Internship','Remote','https://docs.google.com/forms/d/e/1FAIpQLSfCOUPfXXqPKVp2aIlYPRiSa-Ll7lbfQjxfpZ4xI7ffNimPow/closedform',3),(4,'HTML CSS JS Internship','htmlcssjs.png','Karachi, Pakistan',1,'OnSite','Remote','https://forms.gle/XmQbTNBEqvkkPRoW6',1),(5,'Flutter Internship','flutter.png','Karachi, Pakistan',1,'OnSite','Remote','https://docs.google.com/forms/d/e/1FAIpQLSfKt0T2qtUlau5tR1EsDoin2NNgtvqq4VJ2r7wb8lDCOx8ckg/closedform',4);
/*!40000 ALTER TABLE `sub_interns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_contact`
--

DROP TABLE IF EXISTS `tbl_contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_contact` (
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  FULLTEXT KEY `message` (`message`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_contact`
--

LOCK TABLES `tbl_contact` WRITE;
/*!40000 ALTER TABLE `tbl_contact` DISABLE KEYS */;
INSERT INTO `tbl_contact` VALUES ('atifurehman176@gmail.com','03193955313','testing','2024-07-09 05:38:47'),('ratif3610@gmail.com','03193955313','test','2024-07-12 05:08:56');
/*!40000 ALTER TABLE `tbl_contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_internees`
--

DROP TABLE IF EXISTS `tbl_internees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_internees` (
  `Internee_Id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `Intern_Category` int(11) DEFAULT NULL,
  `Education` varchar(255) DEFAULT NULL,
  `Start_date` datetime DEFAULT NULL,
  `End_date` datetime DEFAULT NULL,
  `Intern_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_internees`
--

LOCK TABLES `tbl_internees` WRITE;
/*!40000 ALTER TABLE `tbl_internees` DISABLE KEYS */;
INSERT INTO `tbl_internees` VALUES (1,'John Doe','john@example.com','123-456-7890',1,'Bachelor of Science in Computer Science','2023-06-15 09:00:00','2023-12-15 17:00:00',1),(2,'Jane Smith','jane@example.com','987-654-3210',2,'Master of Business Administration','2023-07-01 08:30:00','2023-12-31 16:30:00',0),(3,'Alice Johnson','alice@example.com','555-555-5555',1,'Bachelor of Arts in Economics','2023-08-01 10:00:00','2023-11-30 18:00:00',1),(4,'Bob Williams','bob@example.com','444-444-4444',3,'Bachelor of Science in Engineering','2023-09-01 08:00:00','2024-01-31 16:00:00',1);
/*!40000 ALTER TABLE `tbl_internees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_reviews`
--

DROP TABLE IF EXISTS `tbl_reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_reviews` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `location` mediumtext DEFAULT NULL,
  `feedback` text DEFAULT NULL,
  `Review_date` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_reviews`
--

LOCK TABLES `tbl_reviews` WRITE;
/*!40000 ALTER TABLE `tbl_reviews` DISABLE KEYS */;
INSERT INTO `tbl_reviews` VALUES (1,'Rabia Javed','Karachi, Pakistan','internee.pk is the best, most comprehensive 21st century innovation for those student who`s looking for internship and upgrade their skillsets. Their projects are tough but market valued.','0000-00-00'),(2,'Nagina Asif','Karachi, Pakistan','internee.pk is all about helping us grow our careers. May Allah give them more achivements and success on their journy.','2024-07-07'),(3,'Razaullah Sami','KPK, Pakistan','Thanks to internee.pk, I grew my skills here and now I am working as a Flutter Developer in an US company.','2024-07-07'),(4,'Muhammad Rafiq','Sindh Divison, Pakistan','After getting this internship, my skill got enhance more than my expectation. JazakAllah for this.','2024-07-07');
/*!40000 ALTER TABLE `tbl_reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(50) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `UserPass` varchar(15) DEFAULT NULL,
  `UserRole` int(11) DEFAULT 0,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Atif Ur Rehman','atif@email.com','atif',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-07-12 10:26:33
