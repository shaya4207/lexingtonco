/*
SQLyog Professional v10.51 
MySQL - 5.1.50-community : Database - lexingtonco
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `prop_types` */

DROP TABLE IF EXISTS `prop_types`;

CREATE TABLE `prop_types` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `prop_types` */

insert  into `prop_types`(`id`,`name`) values (1,'Neighborhood');

/*Table structure for table `properties` */

DROP TABLE IF EXISTS `properties`;

CREATE TABLE `properties` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` int(10) DEFAULT NULL,
  `zip` varchar(15) DEFAULT NULL,
  `lease_contact` blob,
  `prop_type` int(5) DEFAULT NULL,
  `built` int(4) DEFAULT NULL,
  `renovated` int(4) DEFAULT NULL,
  `total_sq_ft` varchar(15) DEFAULT NULL,
  `avail_space` varchar(15) DEFAULT NULL,
  `description` blob,
  `website` varchar(255) DEFAULT NULL,
  `image` tinyint(1) DEFAULT '0',
  `image_ext` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `properties` */

insert  into `properties`(`id`,`name`,`address`,`city`,`state`,`zip`,`lease_contact`,`prop_type`,`built`,`renovated`,`total_sq_ft`,`avail_space`,`description`,`website`,`image`,`image_ext`) values (1,'Test Name','Test Address','Test City',28,'11219','a:3:{i:0;s:15:\"Lease Contact 1\";i:1;s:15:\"Lease Contact 2\";i:2;s:15:\"Lease Contact 3\";}',1,2004,2012,'15000','3500','This is a very long description, it is quite long, and thus should take up a lot of space but not a lot of text','http://www.website.com',1,'.jpg'),(2,'Country Club Centre','1700 Carter Hill Road','Montgomery',1,'36106','a:2:{i:1;a:2:{s:4:\"name\";s:14:\"Alan Retkinski\";s:5:\"email\";s:20:\"Alan@lexingtonco.com\";}i:2;a:2:{s:4:\"name\";s:11:\"Ira Einhorn\";s:5:\"email\";s:19:\"Ira@lexingtonco.com\";}}',1,1991,2007,'67,622','1500 Sq Ft','Country Club Centre is strategically positioned\r\nadjacent to the Montgomery Country Club,\r\nHuntingdon College, and the Mulberry\r\nshopping district. The GLA of the center is over\r\n65,000 sf with national tenants and strong local\r\nretailers that attract high traffic flow. Country\r\nClub Centre is approximately less than 1 mile\r\nfrom I-85 and is 3.4 miles from I-65.\r\n\r\nCountry Club Centre is a neighborhood retail\r\ncenter located across the street from the\r\nMontgomery Country Club near Huntingdon\r\nCollege in the Mulberry shopping district of\r\nMontgomery, Alabama. Sales/SF at the Winn-\r\nDixie are in the upper quartile for their stores.\r\nCountry Club Centre is a strong in-fill location,\r\nsurrounded by dense residential neighborhoods\r\nand fully developed land.\r\n\r\nPlease see the Downloads section for additional\r\nmaterials pertaining to this property.','http://www.website.com',1,'.jpg');

/*Table structure for table `tenants` */

DROP TABLE IF EXISTS `tenants`;

CREATE TABLE `tenants` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `number` int(5) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `sq_feet` varchar(25) DEFAULT NULL,
  `property_id` int(15) DEFAULT NULL,
  `vacant` tinyint(1) DEFAULT '1',
  `anchor` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tenants` */

/*Table structure for table `us_states` */

DROP TABLE IF EXISTS `us_states`;

CREATE TABLE `us_states` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(35) NOT NULL,
  `abbr` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

/*Data for the table `us_states` */

insert  into `us_states`(`id`,`name`,`abbr`) values (1,'Alabama','AL'),(2,'Alaska','AK'),(3,'Arizona','AZ'),(4,'Arkansas','AR'),(5,'California','CA'),(6,'Colorado','CO'),(7,'Connecticut','CT'),(8,'Delaware','DE'),(9,'District of Columbia','DC'),(10,'Florida','FL'),(11,'Georgia','GA'),(12,'Hawaii','HI'),(13,'Idaho','ID'),(14,'Illinois','IL'),(15,'Indiana','IN'),(16,'Iowa','IA'),(17,'Kansas','KS'),(18,'Kentucky','KY'),(19,'Louisiana','LA'),(20,'Maine','ME'),(21,'Maryland','MD'),(22,'Massachusetts','MA'),(23,'Michigan','MI'),(24,'Minnesota','MN'),(25,'Mississippi','MS'),(26,'Missouri','MO'),(27,'Montana','MT'),(28,'Nebraska','NE'),(29,'Nevada','NV'),(30,'New Hampshire','NH'),(31,'New Jersey','NJ'),(32,'New Mexico','NM'),(33,'New York','NY'),(34,'North Carolina','NC'),(35,'North Dakota','ND'),(36,'Ohio','OH'),(37,'Oklahoma','OK'),(38,'Oregon','OR'),(39,'Pennsylvania','PA'),(40,'Rhode Island','RI'),(41,'South Carolina','SC'),(42,'South Dakota','SD'),(43,'Tennessee','TN'),(44,'Texas','TX'),(45,'Utah','UT'),(46,'Vermont','VT'),(47,'Virginia','VA'),(48,'Washington','WA'),(49,'West Virginia','WV'),(50,'Wisconsin','WI'),(51,'Wyoming','WY');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
