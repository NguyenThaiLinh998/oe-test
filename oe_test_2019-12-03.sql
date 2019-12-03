# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.4.8-MariaDB)
# Database: oe_test
# Generation Time: 2019-12-03 15:56:04 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `toppings` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;

INSERT INTO `products` (`id`, `name`, `price`, `toppings`)
VALUES
	(1,'Royal Milk Tea','4.8','Milk foam,white pearl'),
	(2,'Green Milk Tea','4.6','pearl'),
	(3,'Oolong Milk Tea','5.1','pearl'),
	(4,'Blueberry Milk Tea','5.1','Pearl, milk foam'),
	(5,'Mango Milk Tea','5.1','Aloe, Pearl'),
	(6,'Royal Milk Tea','4.8','Milk foam,white pearl'),
	(7,'Green Milk Tea','4.6','pearl'),
	(8,'Oolong Milk Tea','5.1','pearl'),
	(9,'Blueberry Milk Tea','5.1','Pearl, milk foam'),
	(10,'Mango Milk Tea','5.1','Aloe, Pearl');

/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table shopProducts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shopProducts`;

CREATE TABLE `shopProducts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `shopProducts` WRITE;
/*!40000 ALTER TABLE `shopProducts` DISABLE KEYS */;

INSERT INTO `shopProducts` (`id`, `shop`, `product`)
VALUES
	(1,'1','1'),
	(2,'1','2'),
	(3,'2','2'),
	(4,'1','3'),
	(5,'4','3'),
	(6,'1','1'),
	(7,'3','1'),
	(8,'4','5'),
	(9,'1','4'),
	(10,'2','5'),
	(11,'1','1'),
	(12,'1','2'),
	(13,'2','2'),
	(14,'1','3'),
	(15,'3','3'),
	(16,'1','1'),
	(17,'3','1'),
	(18,'3','5'),
	(19,'1','4'),
	(20,'2','5');

/*!40000 ALTER TABLE `shopProducts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table stores
# ------------------------------------------------------------

DROP TABLE IF EXISTS `stores`;

CREATE TABLE `stores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `stores` WRITE;
/*!40000 ALTER TABLE `stores` DISABLE KEYS */;

INSERT INTO `stores` (`id`, `name`)
VALUES
	(1,'Ding Tea'),
	(2,'Tocotoco'),
	(3,'Gongcha'),
	(4,'LeeTee');

/*!40000 ALTER TABLE `stores` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
