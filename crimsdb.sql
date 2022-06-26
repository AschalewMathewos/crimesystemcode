/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
USE mysql;
DROP DATABASE IF EXISTS crimsdb;
CREATE DATABASE crimsdb;
USE crimsdb;

GRANT ALL PRIVILEGES ON *.* TO 'root'@'localhost' WITH GRANT OPTION;
GRANT ALL PRIVILEGES ON *.* TO 'root'@'127.0.0.1' WITH GRANT OPTION;
GRANT ALL PRIVILEGES ON *.* TO 'root'@'::1' WITH GRANT OPTION;
GRANT USAGE ON *.* TO ''@'localhost';

DROP TABLE IF EXISTS compliant_detail;
CREATE TABLE `compliant_detail` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Complainant` varchar(25) NOT NULL,
  `Crime_Type` varchar(15) NOT NULL,
  `Date` int(15) NOT NULL,
  `Time` int(15) NOT NULL,
  `Contact` int(15) NOT NULL,
  `Age` int(15) NOT NULL,
  `Suspect_Name` varchar(15) NOT NULL,
  `Address` varchar(25) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE compliant_detail DISABLE KEYS */;
INSERT INTO compliant_detail VALUES (1, 'bob', 'mobile cra', '2005-08-06', '2:30', 9122345, 19, 'abebe','combolcha');

/*!40000 ALTER TABLE compliant_detail ENABLE KEYS */;

DROP TABLE IF EXISTS crime_record;
CREATE TABLE `crime_record` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(11) NOT NULL,
  `address` varchar(25) NOT NULL,
  `crime_type` varchar(25) NOT NULL,
  `date_registered` varchar(20) NOT NULL,
  `period` varchar(25) NOT NULL,
  `details` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE crime_record DISABLE KEYS */;
INSERT INTO crime_record VALUES (1, 'julius','Gesuba','Chief', '2005-08-06', '06-10-2021', 'information not exist');
INSERT INTO crime_record VALUES (2, 'abebe','dessie','bob', '2006-08-03', '03-21-2021', 'the information of crminal');
INSERT INTO crime_record VALUES (3, 'belachew','kemisia','Chief', '2006-21-06', '09-28-2021', 'detial information of crminal');
/*!40000 ALTER TABLE crime_record ENABLE KEYS */;

DROP TABLE IF EXISTS police_office;
CREATE TABLE `police_office` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `contact_no` varchar(50) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `sex` varchar(10) NOT NULL,
  `rank` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE police_office DISABLE KEYS */;
INSERT INTO police_office VALUES (1, 'kidist belay', 'Gesuba', '0999999999', '2021-06-11', 'Female', 'Inspector');
INSERT INTO police_office VALUES (2, 'fatuma edris', 'kemisia', '0999999999', '2021-05-21', 'Female', 'Private');
INSERT INTO police_office VALUES (3, 'kebede alemu', 'abiy sheger', '0999999999', '2021-01-23', 'male', 'Private');
INSERT INTO police_office VALUES (4, 'mohamed endris', 'harbo', '0999999999', '2021-09-21', 'male', 'Private');
INSERT INTO police_office VALUES (5, 'hassen mohamed', 'Gesuba', '0999999999', '2021-01-12', 'Female', 'Private');
INSERT INTO police_office VALUES (6, 'hassen kidir', 'berberia gebeya', '0999999999', '2021-08-27', 'male', 'Chief');
    DROP TABLE IF EXISTS admin;
CREATE TABLE `admin` (
 `admin_id` tinyint(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
INSERT INTO admin VALUES (1, 'admin', 'admin', '10-5-2021');
INSERT INTO admin VALUES (2, 'police', 'police', '10-5-2021');
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
