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

/*Table structure for table `aboutus` */

DROP TABLE IF EXISTS `aboutus`;

CREATE TABLE `aboutus` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `status` enum('open','hold','publish') DEFAULT 'open',
  `sequence` int(4) DEFAULT 0,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_aboutus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `aboutus` */

insert  into `aboutus`(`id`,`name`,`title`,`content`,`status`,`sequence`,`created`,`modified`,`created_by`,`modified_by`,`deleted`) values (1,'about','About','CollegeSpace is a socio-economic portal available to all students and alumni of NSIT. The CS initiative was launched on 4th July, 2011 with the motive of making accessible each and every single piece of information pertaining to NSIT on an online platform. Our ultimate aim lies in creating an online database on which each student can rely upon; and we strive to achieve this every single day. Providing unparalleled assistance to students in every branch continues to be our one biggest objective.','publish',1,'2021-02-01 20:27:15','2021-02-01 20:27:17',1,1,0),(2,'who-founded-it','Who founded it?','Sahil Gulati, immensely talented and known for his marketing & managerial skills, is a passionate web developer. Tushar Gupta is an avid technology fan; Instrumentation may have been his branch, but computer runs in his blood. What all information does it provide? Events & updates – Providing up to date information on events & latest happenings Societies – Descriptions, links to pages, contact details and latest news Academics – Useful academic data including syllabus, timetables, recommended books, study notes, results & exam papers Festivals – Details regarding each festival, including photos of past fests Admission – An updated source for all prospective students Miscellaneous – Entertainment sources including games & literature FAQ – Frequently asked questions about NSIT','publish',2,NULL,NULL,NULL,NULL,0),(3,'our-departments','Our Departments','Technical – The backbone of CS. Responsible for maintaining the site and keeping it technically up to date. Comprised of hardworking web development enthusiasts. Content Writing – Information gets its true worth only after it’s beautifully written. That’s their motto and they work to keep true to these words. Responsible for articles regarding societies, festivals, recent events & much more. Designing – They do everything from collecting notes & papers to visiting the admin in the break of dawn to get the results for each semester. All this, just for you. Probably the most hardworking department, they sweat day & night to keep you updated. Marketing – Apple wouldn’t have succeeded without the marketing genius of Steve Jobs behind them, would they? This department is responsible for publicizing CollegeSpace and its different groups & content. It even collaborates with different societies in college for various activities.','publish',3,NULL,NULL,NULL,NULL,0),(4,'working-ethics','Working Ethics','We started with a team of three and after three successful years, we’ve expanded into a network of around 60 hard-working and determined team members, all sharing a common passion to keep you updated. With the freedom given to each team member to enable them to explore innovative ideas, a hierarchy system ensures a sense of discipline amongst the members. We’re not always working – we love to party too! Celebrating and reveling in each CS accomplishment is an important aspect of our work. Regardless of the department you’re in, we bring out the best in you. Be it web development, writing, marketing or managing – we encourage each other to explore our fields of interest with zeal.','publish',4,NULL,NULL,NULL,NULL,0);

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

/*Table structure for table `documents` */

DROP TABLE IF EXISTS `documents`;

CREATE TABLE `documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module_id` int(10) DEFAULT NULL,
  `record_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `original_name` varchar(255) DEFAULT NULL,
  `size` int(10) DEFAULT NULL,
  `size_type` enum('MB','KB','GB','Bytes') DEFAULT 'KB',
  `extension` varchar(10) DEFAULT NULL,
  `file_path` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `fk1_documents_idx` (`module_id`),
  CONSTRAINT `fk1_documents_idx` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `documents` */

insert  into `documents`(`id`,`module_id`,`record_id`,`name`,`original_name`,`size`,`size_type`,`extension`,`file_path`,`created`,`modified`,`created_by`,`modified_by`,`deleted`) values (1,1,1,'12321_abc.png','abc.png',1000,'KB','png','upload','2021-01-17 15:40:36','2021-01-17 15:40:39',1,1,0);

/*Table structure for table `modules` */

DROP TABLE IF EXISTS `modules`;

CREATE TABLE `modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `is_public` enum('Yes','No') DEFAULT 'No',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_name_idx` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

/*Data for the table `modules` */

insert  into `modules`(`id`,`name`,`is_public`,`created`,`modified`,`created_by`,`modified_by`,`deleted`) values (1,'Users','No','2021-01-17 15:36:50','2021-01-17 15:36:52',1,1,0),(2,'Documents','No','2021-01-17 15:43:51','2021-01-17 15:43:54',1,1,0),(3,'Courses','No','2021-01-17 15:44:09','2021-01-17 15:44:12',1,1,0),(4,'Home','Yes','2021-01-17 15:44:59','2021-01-17 15:45:02',1,1,0),(5,'ContactUs','Yes','2021-01-17 15:45:19','2021-01-17 15:45:22',1,1,0),(6,'Gallery','No','2021-01-17 15:47:12','2021-01-17 15:47:15',1,1,0),(7,'Blog','No','2021-01-17 15:47:30','2021-01-17 15:47:33',1,1,0),(8,'Placement','No',NULL,NULL,NULL,NULL,0),(9,'AboutUs','No',NULL,NULL,NULL,NULL,0),(10,'Attendance','No',NULL,NULL,NULL,NULL,0),(11,'Events','No',NULL,NULL,NULL,NULL,0),(12,'TimeTable','No',NULL,NULL,NULL,NULL,0);

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
  `deleted` tinyint(1) DEFAULT 0 COMMENT '0 => Not Deleted, 1=> Deleted',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_users_user_name` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`id`,`user_name`,`first_name`,`last_name`,`mobile`,`email`,`password`,`gender`,`address`,`address2`,`zip`,`state`,`country`,`course`,`pid`,`status`,`is_admin`,`created`,`modified`,`created_by`,`modified_by`,`deleted`) values (1,'ajay','Ajay','Kumar','99999999900','ajay123@gmail.com','055e47515b4c44f79eddf184f0bb06ec','male','',NULL,NULL,NULL,NULL,NULL,NULL,'Active','on','2021-01-14 20:30:02','2021-01-14 20:30:14',NULL,NULL,0),(2,'admin1','Ajay','Kumar','2323423','ajay@gmail.com ','e6e061838856bf47e1de730719fb2609','male','dssd',NULL,3333,'up','india','btech',NULL,'Active','off','2021-01-14 20:30:02','2021-01-14 20:30:14',NULL,NULL,0),(3,'fdg','dfgf','dfgdf','fdg',NULL,NULL,'male',NULL,NULL,NULL,NULL,NULL,'{\r\n\"btech\" : true,\r\n\"mca\" : false,\r\n}',NULL,'Active','off','2021-01-14 20:30:02','2021-01-14 20:30:14',NULL,NULL,0),(6,'fdgg','dfgf','dfg','dfgfdg',NULL,NULL,'male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Active','off','2021-01-14 20:30:02','2021-01-14 20:30:14',NULL,NULL,0),(7,'33eeee',NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Active','off','2021-01-14 20:30:02','2021-01-14 20:30:14',NULL,NULL,0),(8,'fdfdf44',NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Active','off','2021-01-14 20:30:02','2021-01-14 20:30:14',NULL,NULL,0),(9,'34rrrrrrr',NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Active','off','2021-01-14 20:30:02','2021-01-14 20:30:14',NULL,NULL,0),(10,'3434',NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Active','off','2021-01-14 20:30:02','2021-01-14 20:30:14',NULL,1,1),(12,'rrererer',NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Active','off','2021-01-14 20:30:02','2021-01-14 20:30:14',NULL,1,1),(13,'2323',NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Active','off','2021-01-14 20:30:02','2021-01-14 20:30:14',NULL,1,1),(14,'2132',NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Active','off','2021-01-14 20:30:02','2021-01-14 20:30:14',NULL,1,1),(15,'12323',NULL,NULL,NULL,NULL,NULL,'male',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Inactive','off','2021-01-14 20:30:02','2021-01-14 20:30:14',NULL,1,1);

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
