# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.29)
# Database: todoApp
# Generation Time: 2020-03-26 16:35:58 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table todoList
# ------------------------------------------------------------

DROP TABLE IF EXISTS `todoList`;

CREATE TABLE `todoList` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `todo` varchar(100) NOT NULL DEFAULT '',
  `completed` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `todoList` WRITE;
/*!40000 ALTER TABLE `todoList` DISABLE KEYS */;

INSERT INTO `todoList` (`id`, `todo`, `completed`, `deleted`)
VALUES
	(1,'walk the dog',0,0),
	(2,'tidy bedroom',0,0),
	(3,'make a slim app!',0,0),
	(4,'play tiddlywinks',0,0),
	(5,'eat cheese',0,0),
	(6,'do chores and stuff',0,0),
	(7,'prepare my presentation for a design pattern',0,0),
	(8,'finish my cv',0,0),
	(9,'contemplate life',0,0);

/*!40000 ALTER TABLE `todoList` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
