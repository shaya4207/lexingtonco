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
/*Table structure for table `properties` */

DROP TABLE IF EXISTS `properties`;

CREATE TABLE `properties` (
  `property_id` int(10) NOT NULL AUTO_INCREMENT,
  `property_name` varchar(255) DEFAULT NULL,
  `property_address` varchar(255) DEFAULT NULL,
  `property_city` varchar(255) DEFAULT NULL,
  `property_state` int(10) DEFAULT '0',
  `property_zip` varchar(15) DEFAULT NULL,
  `property_lease_contact` blob,
  `property_prop_type` varchar(255) DEFAULT NULL,
  `property_built` int(4) DEFAULT '0',
  `property_renovated` int(4) DEFAULT '0',
  `property_total_sq_ft` varchar(15) DEFAULT '0',
  `property_avail_space` varchar(15) DEFAULT '0',
  `property_description` blob,
  `property_website` varchar(255) DEFAULT NULL,
  `property_image` tinyint(1) DEFAULT '0',
  `property_image_ext` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`property_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

/*Data for the table `properties` */

insert  into `properties`(`property_id`,`property_name`,`property_address`,`property_city`,`property_state`,`property_zip`,`property_lease_contact`,`property_prop_type`,`property_built`,`property_renovated`,`property_total_sq_ft`,`property_avail_space`,`property_description`,`property_website`,`property_image`,`property_image_ext`) values (12,'Market Street Shoppes of Dalton','Market Street','Dalton',58,'30720','a:1:{i:1;a:2:{s:4:\"name\";s:0:\"\";s:5:\"email\";s:0:\"\";}}','Neighborhood',0,0,'180,853','','Nestled in the mountains at the Georgia/Tennessee border on I-75, the Dalton Outlet Shops are getting a new identity and new vitality. Now under new leadership, and poised for a new era embracing their outlet center identity, the Dalton Outlet Shops are taking aim at the regional market. With no other viable outlet center in the Chattanooga market, the Dalton Outlet Shops is focusing on attracting this nearby metro market with a dynamic new ad campaign funded by the new owners. Dominating North Georgia and South Tennessee with a strong marketing campaign, combined with new on-site management and a little ‘primping’ is sure to produce a stronger than ever center in Dalton.<br/><br/>\r\n-Situated on I-75 at Exit 333, just 23 miles south of Chattanooga, TN<br/>\r\n-Average daily traffic counts on I-75 are over 70,000<br/>\r\n-Over 13,000 cars pass the intersection of Walnut Avenue and Market Street<br/>\r\n-Within proximity to leading professional firms and financial institutions in the downtown Dalton district<br/>\r\n-In 2006, Downtown Dalton underwent a $7 Million streetscape project<br/>','',0,NULL),(14,'Rivergate Center','201 Tom Hill Sr. Blvd.','Macon',61,'31210','a:1:{i:1;a:2:{s:4:\"name\";s:12:\"Eric Frankel\";s:5:\"email\";s:20:\"eric@lexingtonco.com\";}}','Community',0,0,'206,863','','','',0,NULL),(16,'Vincennes Plaza Shopping Center','2601 N. 6th St. at Niblack Blvd.','Vincennes',65,'47591','a:1:{i:1;a:2:{s:4:\"name\";s:0:\"\";s:5:\"email\";s:0:\"\";}}','Community',1970,0,'164,541','','Located in Knox County on 6th Street, one of the city\'s major thoroughfares, adjacent to Lowe\'s Home Improvements, Dollar General Store and Rural King.<br/><br/>\r\nVincennes University, with a student population of over 7,000, is located nearby.<br/><br/>\r\nJoin J.C. Penney, Jo-Ann Fabrics, Payless Shoes, Hallmark, Domino\'s Pizza, State Farm Insurance and many more. ','',0,NULL),(17,'Quincy Place Mall','1110 Quincy Avenue','Ottumwa',65,'52501','a:1:{i:1;a:2:{s:4:\"name\";s:0:\"\";s:5:\"email\";s:0:\"\";}}','Regional Mall',1990,1999,'683,866','','Located 84 miles southeast of Des Moines, Quincy Place is located at the intersection of US Highway 34 and Quincy Avenue in Wapello County, population 36,000. Quincy Place is the dominant retail center in a trade area encompassing more than 104,000 predominantly rural residents drawn by anchor tenants Herbergers, JC Penney and Target. Principal employers in the trade area include John Deere, Excel Corporation and Ottumwa is also home to Indian Hills Community College which has an enrollment of 3,500 students. ','',0,NULL),(18,'Brownstown Shopping Plaza','23849-23995 West Road<br/>23115-23157 Telegraph Road','Brownstown',65,'48134','a:1:{i:1;a:2:{s:4:\"name\";s:12:\"Eric Frankel\";s:5:\"email\";s:20:\"eric@lexingtonco.com\";}}','Community',0,0,'98,335','','-Located on the south east corner of West Road and Telegraph Road<br/>\r\nAn area with high visibility, traffic counts, demographics, and easy access to area highways<br/><br/>\r\nJoin Kroger, Walgreens, Blockbuster Video, Fashion Bug and others','',0,NULL),(19,'Viking Plaza Shopping Center','3015 Highway 29 South','Alexandria',74,'56308','a:1:{i:1;a:2:{s:4:\"name\";s:11:\"Ira Einhorn\";s:5:\"email\";s:19:\"Ira@lexingtonco.com\";}}','Enclosed Malls',0,0,'208,000','','The Viking Plaza Mall is a 208,000 square foot shopping center well located on Highway 29 in Alexandria.  Current tenants include: Herberger\'s, JCPenney, JoAnn Fabric, Payless Shoe Source, Christopher & Banks, Vanity, Maurice\'s and many others.  Area retailers include: Menards, Wal-Mart, Fleet Farm, Office Depot, Target, and K-Mart.','http://www.vikingplaza.com',0,NULL),(20,'Westgate Mall','14136 Baxter Drive','Brainerd',61,'56425','a:1:{i:1;a:2:{s:4:\"name\";s:0:\"\";s:5:\"email\";s:0:\"\";}}','Regional Mall',1985,1998,'235,000','','Westgate Mall contains 235,000 square feet of leasable area which consists of an 82,684 square foot Herberger’s Department Store; a 34,000 square foot Dunham’s; a 30,385 square foot Big Lots and multiple interior mall units and kiosks that comprise the remaining 87,931 square feet. In addition, three outlots front the mall along the north side of U.S. 210, including Lakewood Bank, Burger King, and a vacant 1.15 acre outlot. Primary ingress and egress to the site is provided by two curb cuts on the north side of U.S. 210.','',0,NULL),(21,'Delta Plaza Shopping Center','870 Highway 1 South','Greenville',75,'38703','a:1:{i:1;a:2:{s:4:\"name\";s:12:\"Eric Frankel\";s:5:\"email\";s:20:\"Eric@lexingtonco.com\";}}','Community',0,0,'261,585','','Please see the supplemental document section below for additional material pertaining to this property.','',0,NULL),(22,'Loma Vista Shopping Center','87th & Blue Ridge Boulevard','Kansas City',76,'64138','a:1:{i:1;a:2:{s:4:\"name\";s:0:\"\";s:5:\"email\";s:0:\"\";}}','Neighborhood',1960,1986,'','','-Excellent visibility<br/>\r\n-Anchored by Sav-a-Lot<br/>\r\n-Tenants include: Gordman\'s, Baskin Robbins, Dollar General, and Bank of America','',0,NULL),(23,'Broadway and West 12th St.','281-287 Broadway','Bayonne',58,'07002','a:1:{i:1;a:2:{s:4:\"name\";s:0:\"\";s:5:\"email\";s:0:\"\";}}',' Street Retail',0,0,'9,600','','This property is located approximately 30 minutes from Manhattan and in close proximity to all the major regional airports. The locale of Bayonne is a tremendous asset as it provides one with many major highway accesses. It is minutes away from Route 440 as well as minutes away from the Bayonne Bridge that connects to the Staten Island Expressway. This gives direct access to the Verrazano Narrows Bridge, Goethals Bridge, and Outerbridge Crossing. In addition, the property is located minutes away from Newark Bay. North of Bayonne there is an entrance to the New Jersey Turnpike which provides ingress to many highways including: Route 1, Route 21, Garden State Parkway, and entrances into Manhattan. There are many forms of public transportation including the Amtrak and New Jersey Metropark station which connects Bayonne to Manhattan and Philadelphia.<br/>bBr/>\r\nThe subject property is centrally located at the intersection of Broadway and West 12th Street. Currently there is a car wash situated on the first floor with mixed-use residential/office on the second floor. The lease term with the car wash enterprise is currently on a month to month basis. Immediately across the street are two multi-national businesses, a Popeye’s and a Quick Check. There are two overhead doors on West 12th Street and one overhead door on Broadway, providing many points of entrance. The immediate surrounding area is densely populated, which in turn provides the property with major exposure. There is 93 feet of frontage on Broadway and 160 feet of frontage on West 12th Street. The building dimensions are as follows: ceiling height 12 ft., width 60 ft., and length 160 ft. The zoning on the property is commercial and can be built to suit for any purpose.','',0,NULL),(32,'Prince Plaza','2417 Flatbush Avenue','Brooklyn',83,'11234','a:1:{i:1;a:2:{s:4:\"name\";s:12:\"Eric Frankel\";s:5:\"email\";s:20:\"eric@lexingtonco.com\";}}','Street Retail',0,0,'12,000','','-Approximately 500,000 cars per day pass the intersection at Flatbush and Avenue U (1 block away)<br/>\r\n-Long terms Tenants<br/>\r\n-Excellent visibility and exposure','',0,NULL);

/*Table structure for table `siteplan` */

DROP TABLE IF EXISTS `siteplan`;

CREATE TABLE `siteplan` (
  `siteplan_id` int(11) NOT NULL AUTO_INCREMENT,
  `siteplan_property_id` int(11) NOT NULL,
  `siteplan_image_ext` varchar(15) NOT NULL,
  `siteplan_areas` text,
  PRIMARY KEY (`siteplan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `siteplan` */

insert  into `siteplan`(`siteplan_id`,`siteplan_property_id`,`siteplan_image_ext`,`siteplan_areas`) values (1,12,'jpg',NULL);

/*Table structure for table `tenants` */

DROP TABLE IF EXISTS `tenants`;

CREATE TABLE `tenants` (
  `tenants_id` int(10) NOT NULL AUTO_INCREMENT,
  `tenants_property_id` int(15) DEFAULT NULL,
  `tenants_number` int(5) DEFAULT NULL,
  `tenants_name` varchar(255) DEFAULT NULL,
  `tenants_sq_feet` varchar(25) DEFAULT NULL,
  `tenants_vacant` tinyint(1) DEFAULT '1',
  `tenants_anchor` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`tenants_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `tenants` */

insert  into `tenants`(`tenants_id`,`tenants_property_id`,`tenants_number`,`tenants_name`,`tenants_sq_feet`,`tenants_vacant`,`tenants_anchor`) values (17,9,0,'1000','2',0,0),(18,10,0,'3000','1',0,0),(19,10,0,'1000','2',0,0),(20,10,0,'1000','4',0,0),(21,10,0,'1250','5',0,0),(22,10,0,'1500','3',1,0),(23,10,0,'4500','6',0,0),(24,10,0,'1000','7',0,0);

/*Table structure for table `us_states` */

DROP TABLE IF EXISTS `us_states`;

CREATE TABLE `us_states` (
  `states_id` int(10) NOT NULL AUTO_INCREMENT,
  `states_name` varchar(35) NOT NULL,
  `states_abbr` varchar(2) NOT NULL,
  PRIMARY KEY (`states_id`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=latin1;

/*Data for the table `us_states` */

insert  into `us_states`(`states_id`,`states_name`,`states_abbr`) values (53,'Alaska','AK'),(54,'Arizona','AZ'),(55,'Arkansas','AR'),(56,'California','CA'),(57,'Colorado','CO'),(58,'Connecticut','CT'),(59,'Delaware','DE'),(60,'Florida','FL'),(61,'Georgia','GA'),(62,'Hawaii','HI'),(63,'Idaho','ID'),(64,'Illinois','IL'),(65,'Indiana','IN'),(66,'Iowa','IA'),(67,'Kansas','KS'),(68,'Kentucky','KY'),(69,'Louisiana','LA'),(70,'Maine','ME'),(71,'Maryland','MD'),(72,'Massachusetts','MA'),(73,'Michigan','MI'),(74,'Minnesota','MN'),(75,'Mississippi','MS'),(76,'Missouri','MO'),(77,'Montana','MT'),(78,'Nebraska','NE'),(79,'Nevada','NV'),(80,'New Hampshire','NH'),(81,'New Jersey','NJ'),(82,'New Mexico','NM'),(83,'New York','NY'),(84,'North Carolina','NC'),(85,'North Dakota','ND'),(86,'Ohio','OH'),(87,'Oklahoma','OK'),(88,'Oregon','OR'),(89,'Pennsylvania','PA'),(90,'Rhode Island','RI'),(91,'South Carolina','SC'),(92,'South Dakota','SD'),(93,'Tennessee','TN'),(94,'Texas','TX'),(95,'Utah','UT'),(96,'Vermont','VT'),(97,'Virginia','VA'),(98,'Washington','WA'),(99,'West Virginia','WV'),(100,'Wisconsin','WI'),(101,'Wyoming','WY'),(102,'District of Columbia','DC');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
