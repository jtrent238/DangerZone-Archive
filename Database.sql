-- --------------------------------------------------------
-- Host:                         mysql-jtrent238.alwaysdata.net
-- Server version:               10.4.17-MariaDB - MariaDB Server
-- Server OS:                    Linux
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for jtrent238_dangerzonemods
CREATE DATABASE IF NOT EXISTS `jtrent238_dangerzonemods` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `jtrent238_dangerzonemods`;

-- Dumping structure for table jtrent238_dangerzonemods.Mods
CREATE TABLE IF NOT EXISTS `Mods` (
  `modID` int(11) NOT NULL AUTO_INCREMENT,
  `ownerID` int(11) NOT NULL DEFAULT 0,
  `modName` mediumtext NOT NULL DEFAULT '0',
  `modDesc` mediumtext NOT NULL DEFAULT '0',
  `modThumbID` int(11) NOT NULL DEFAULT 1,
  `modImages` set('Value A','Value B') CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `modVersions` set('Value A','Value B') DEFAULT NULL,
  `modDZVersions` set('Value A','Value B') DEFAULT NULL,
  PRIMARY KEY (`modID`),
  KEY `FK_OwnerID` (`ownerID`),
  KEY `FK_ThumID` (`modThumbID`),
  CONSTRAINT `FK_OwnerID` FOREIGN KEY (`ownerID`) REFERENCES `Users` (`userID`),
  CONSTRAINT `FK_ThumID` FOREIGN KEY (`modThumbID`) REFERENCES `Thumnails` (`thumID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table jtrent238_dangerzonemods.Mods: ~1 rows (approximately)
/*!40000 ALTER TABLE `Mods` DISABLE KEYS */;
INSERT INTO `Mods` (`modID`, `ownerID`, `modName`, `modDesc`, `modThumbID`, `modImages`, `modVersions`, `modDZVersions`) VALUES
	(2, 1, '"Test Mod Name"', '"This is my Test Desc"', 1, NULL, NULL, NULL);
/*!40000 ALTER TABLE `Mods` ENABLE KEYS */;

-- Dumping structure for table jtrent238_dangerzonemods.Thumnails
CREATE TABLE IF NOT EXISTS `Thumnails` (
  `thumID` int(11) NOT NULL AUTO_INCREMENT,
  `thumFilename` varchar(50) DEFAULT NULL,
  `thumFileUrl` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`thumID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table jtrent238_dangerzonemods.Thumnails: ~1 rows (approximately)
/*!40000 ALTER TABLE `Thumnails` DISABLE KEYS */;
INSERT INTO `Thumnails` (`thumID`, `thumFilename`, `thumFileUrl`) VALUES
	(1, 'placeholder.png', './assets/img/placeholder.png');
/*!40000 ALTER TABLE `Thumnails` ENABLE KEYS */;

-- Dumping structure for table jtrent238_dangerzonemods.Users
CREATE TABLE IF NOT EXISTS `Users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(50) NOT NULL DEFAULT '0',
  `userPassword` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table jtrent238_dangerzonemods.Users: ~0 rows (approximately)
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
INSERT INTO `Users` (`userID`, `userName`, `userPassword`) VALUES
	(1, 'demouser', 'demopassword');
/*!40000 ALTER TABLE `Users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
