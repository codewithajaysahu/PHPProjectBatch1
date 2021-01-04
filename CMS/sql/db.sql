/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.5-10.4.16-MariaDB : Database - phpcms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
USE `phpcms`;

/*Table structure for table `courses` */

DROP TABLE IF EXISTS `courses`;

CREATE TABLE `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  `status` enum('active','inactive') DEFAULT 'active',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_courses_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `courses` */

insert  into `courses`(`id`,`name`,`created`,`modified`,`created_by`,`modified_by`,`deleted`,`status`) values (1,'MCA',NULL,NULL,NULL,NULL,0,'active'),(2,'Btech',NULL,NULL,NULL,NULL,0,'active'),(3,'BCA',NULL,NULL,NULL,NULL,0,'active');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `gender` enum('male','female','other') DEFAULT 'male',
  `address` text DEFAULT NULL,
  `address2` text DEFAULT NULL,
  `zip` int(8) DEFAULT NULL,
  `state` varchar(40) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `course` text DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `status` enum('Active','Inactive') DEFAULT 'Active',
  `is_admin` enum('on','off') DEFAULT 'off',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_users_user_name` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`id`,`user_name`,`first_name`,`last_name`,`mobile`,`email`,`password`,`gender`,`address`,`address2`,`zip`,`state`,`country`,`course`,`pid`,`status`,`is_admin`,`created`,`modified`,`created_by`,`modified_by`) values (1,'ajay','Ajay','Kumar','99999999900','ajay123@gmail.com','055e47515b4c44f79eddf184f0bb06ec','male','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'off',NULL,'2020-12-30 21:03:24',NULL,NULL),(2,'admin1','Ajay','Kumar','2323423','ajay@gmail.com ','e6e061838856bf47e1de730719fb2609','male','dssd',NULL,3333,'up','india','btech',NULL,NULL,'off',NULL,NULL,NULL,NULL),(3,'fdg','dfgf','dfgdf','fdg',NULL,NULL,'male',NULL,NULL,NULL,NULL,NULL,'{\r\n\"btech\" : true,\r\n\"mca\" : false,\r\n}',NULL,NULL,'off',NULL,NULL,NULL,NULL),(6,'fdgg','dfgf','dfg','dfgfdg',NULL,NULL,'male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'off',NULL,NULL,NULL,NULL),(7,'33eeee',NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'off',NULL,NULL,NULL,NULL),(8,'fdfdf44',NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'off',NULL,NULL,NULL,NULL),(9,'34rrrrrrr',NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'off',NULL,NULL,NULL,NULL),(10,'3434',NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'off',NULL,NULL,NULL,NULL),(12,'rrererer',NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'off',NULL,NULL,NULL,NULL),(13,'2323',NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'off',NULL,NULL,NULL,NULL),(14,'2132',NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'off',NULL,NULL,NULL,NULL),(15,'12323',NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'off',NULL,NULL,NULL,NULL);

/*Table structure for table `users_courses_rel` */

DROP TABLE IF EXISTS `users_courses_rel`;

CREATE TABLE `users_courses_rel` (
  `user_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  UNIQUE KEY `idx_users_courses_rel_user_id_course_id` (`user_id`,`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `users_courses_rel` */

insert  into `users_courses_rel`(`user_id`,`course_id`) values (1,1),(1,2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
