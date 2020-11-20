# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.31)
# Database: ToDoList
# Generation Time: 2020-11-20 10:44:18 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table CompletedItems
# ------------------------------------------------------------

DROP TABLE IF EXISTS `CompletedItems`;

CREATE TABLE `CompletedItems` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) DEFAULT NULL,
  `DueDate` date DEFAULT NULL,
  `Category` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `CompletedItems` WRITE;
/*!40000 ALTER TABLE `CompletedItems` DISABLE KEYS */;

INSERT INTO `CompletedItems` (`id`, `Name`, `DueDate`, `Category`)
VALUES
	(2,'Have kids',NULL,NULL),
	(4,'alright',NULL,NULL),
	(8,'Make DB',NULL,NULL),
	(15,'test','2020-11-29','Kids'),
	(17,'Watch New Girl','2020-11-20','Personal');

/*!40000 ALTER TABLE `CompletedItems` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ToDoItems
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ToDoItems`;

CREATE TABLE `ToDoItems` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) DEFAULT NULL,
  `DueDate` date DEFAULT NULL,
  `Category` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `ToDoItems` WRITE;
/*!40000 ALTER TABLE `ToDoItems` DISABLE KEYS */;

INSERT INTO `ToDoItems` (`id`, `Name`, `DueDate`, `Category`)
VALUES
	(30,'Make a cake','2020-11-25','Personal'),
	(31,'Buy Xmas Presents','2020-12-25','Personal'),
	(38,'Get a job','2021-01-31','Work'),
	(45,'Brush teeth','2020-11-29','Personal'),
	(46,'Get rich','2020-11-29','Financial'),
	(47,'Dollar Bills, yo','2021-02-27','Financial'),
	(48,'Smash it','2020-11-28','School'),
	(51,'alright',NULL,NULL);

/*!40000 ALTER TABLE `ToDoItems` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
