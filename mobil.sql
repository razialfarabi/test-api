/*
SQLyog Ultimate v8.82 
MySQL - 5.5.5-10.3.16-MariaDB : Database - mobil
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mobil` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `mobil`;

/*Table structure for table `mobil` */

DROP TABLE IF EXISTS `mobil`;

CREATE TABLE `mobil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_polisi` varchar(30) DEFAULT NULL,
  `merek` varchar(30) DEFAULT NULL,
  `tipe` varchar(30) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `no_kerangka` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `mobil` */

insert  into `mobil`(`id`,`no_polisi`,`merek`,`tipe`,`tahun`,`no_kerangka`) values (18,'1111111','Kawasaki','beat',2000,'haodwhadiwa'),(19,'1','honda','beat',2010,'11'),(20,'1','honda','beat',2010,'11');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
