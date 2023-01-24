/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.19-MariaDB : Database - wholesome_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`wholesome_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `wholesome_db`;

/*Table structure for table `data_images` */

DROP TABLE IF EXISTS `data_images`;

CREATE TABLE `data_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(160) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `votes_count` int(11) NOT NULL DEFAULT 0 COMMENT 'How many votes this image has',
  `votes_sum` int(11) DEFAULT 0 COMMENT 'Sum of all up and down votes',
  `sort_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq` (`filename`),
  KEY `sortidx` (`sort_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

/*Data for the table `data_images` */

insert  into `data_images`(`id`,`filename`,`created`,`votes_count`,`votes_sum`,`sort_id`) values 
(1,'a1PWOZ6_700bwp.webp','2023-01-14 03:46:24',1,1,1),
(2,'a6qKxpA_460swp.webp','2023-01-14 03:46:24',3,-1,4),
(3,'a8qGnGd_460swp.webp','2023-01-14 03:47:03',3,1,3),
(4,'agoAdRr_460swp.webp','2023-01-14 03:47:03',3,3,2),
(5,'aQEdyeq_460swp.webp','2023-01-14 03:47:38',3,1,7),
(7,'1.jpg','2023-01-15 03:16:37',2,2,0),
(10,'2.jpg','2023-01-15 03:16:51',1,1,0),
(11,'3.jpg','2023-01-15 03:17:33',1,1,0),
(12,'4.jpg','2023-01-15 03:17:41',1,1,0),
(13,'5.jpg','2023-01-15 03:17:49',3,1,0),
(16,'1673939243_a1PWOZ6_700bwp.webp','2023-01-17 16:08:00',0,0,0),
(17,'1673939272_a6qKxpA_460swp.webp','2023-01-17 16:09:27',1,1,0),
(18,'1673939447_a8qGnGd_460swp.webp','2023-01-17 16:10:59',0,0,0),
(19,'1673939454_1673939272_a6qKxpA_460swp.webp','2023-01-17 16:13:01',1,1,0),
(20,'1673939643_a6qKxpA_460swp.webp','2023-01-17 16:14:24',1,1,0),
(21,'1673939650_a6qKxpA_460swp.webp','2023-01-17 16:15:10',1,1,0),
(22,'1673940152_pngegg (8).png','2023-01-17 16:23:05',0,0,0),
(23,'1673940142_pngegg (4).png','2023-01-17 16:23:06',0,0,0),
(24,'1673940064_Social-Media-Assistant-2-1.png','2023-01-17 16:23:07',0,0,0),
(25,'1673940005_Social-Media-Assistant-2-1.png','2023-01-17 16:23:08',0,0,0),
(26,'1673939968_Social-Media-Assistant-2-1.png','2023-01-17 16:23:09',0,0,0),
(27,'1673939956_ZeyaYang-240x240.jpg','2023-01-17 16:23:10',0,0,0),
(28,'1673939884_alana-benton-240x240.jpg','2023-01-17 16:23:11',0,0,0),
(29,'1673939822_Kim-Enright-240x240.png','2023-01-17 16:23:23',0,0,0),
(30,'1673939794_Adela-Tomsejova-240x240.png','2023-01-17 16:23:24',0,0,0),
(31,'1673940427_Amy-Robertson-240x240.png','2023-01-17 16:27:20',0,0,0),
(32,'1673940419_asset1380565574-240x240.jpg','2023-01-17 16:27:22',0,0,0),
(33,'1673940411_Amy-Cray-240x240.png','2023-01-17 16:27:24',0,0,0),
(34,'1673940401_Lee-Lefkowitz-240x240.png','2023-01-17 16:27:25',0,0,0),
(35,'1673940388_Ben-Portney-240x240.png','2023-01-17 16:27:25',1,1,0),
(36,'1673940377_BenHorowitz-240x240.jpg','2023-01-17 16:27:26',0,0,0),
(37,'1673940366_Amy-Cray-240x240.png','2023-01-17 16:27:26',0,0,0),
(38,'1673940359_Andy-Rallo-240x240.png','2023-01-17 16:27:27',0,0,0),
(39,'1673940352_Anna-Berces-240x240.png','2023-01-17 16:27:27',0,0,0),
(40,'1673940343_Alex-Spector2-240x240.png','2023-01-17 16:27:28',0,0,0),
(41,'1673940334_Charlie-Keinath-240x240.png','2023-01-17 16:27:28',0,0,0),
(42,'1673940316_Amy-Cray-240x240.png','2023-01-17 16:27:29',0,0,0),
(43,'1673940308_Alex-Spector2-240x240.png','2023-01-17 16:27:29',0,0,0),
(44,'1673940300_Amanda-Catherine-240x240.png','2023-01-17 16:27:29',0,0,0),
(45,'1673940292_Amanda-Cantor-240x240.png','2023-01-17 16:27:30',0,0,0),
(46,'1673939761_JayRughani-photo-240x240.jpg','2023-01-17 16:27:30',0,0,0),
(47,'1673939752_agoAdRr_460swp.webp','2023-01-17 16:27:30',0,0,0),
(48,'1673939740_a6qKxpA_460swp.webp','2023-01-17 16:27:31',0,0,0);

/*Table structure for table `data_news` */

DROP TABLE IF EXISTS `data_news`;

CREATE TABLE `data_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `votes_count` int(11) DEFAULT 0,
  `votes_sum` int(11) DEFAULT 0,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

/*Data for the table `data_news` */

insert  into `data_news`(`id`,`image`,`url`,`title`,`desc`,`date`,`votes_count`,`votes_sum`,`created`) values 
(1,'https://itsjustwholesome.com/img/a6qKxpA_460swp.webp','freelancer.com','Lorem ipsum dolor sit amet ','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae cursus nulla, eget egestas mauris. Nunc et faucibus nisl, at tempus felis. Duis eleifend enim non commodo convallis. Mauris eu neque sit amet mi consectetur congue. Pellentesque accumsan leo ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing','2023-01-19',1,-1,'2023-01-19 12:11:58'),
(2,'https://itsjustwholesome.com/img/a6qKxpA_460swp.webp','upwork.com','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae cursus nulla, eget egestas mauris. Nunc et faucibus nisl, at tempus felis. Duis eleifend enim non commodo convallis. Mauris eu neque sit amet mi consectetur congue. Pellentesque accumsan leo ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing','2023-01-18',1,-1,'2023-01-19 12:12:57'),
(3,'https://itsjustwholesome.com/img/a6qKxpA_460swp.webp','guru.com','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae cursus nulla, eget egestas mauris. Nunc et faucibus nisl, at tempus felis. Duis eleifend enim non commodo convallis. Mauris eu neque sit amet mi consectetur congue. Pellentesque accumsan leo ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing','2023-01-17',0,0,'2023-01-19 12:17:18'),
(4,'https://itsjustwholesome.com/img/a6qKxpA_460swp.webp','pph.com','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae cursus nulla, eget egestas mauris. Nunc et faucibus nisl, at tempus felis. Duis eleifend enim non commodo convallis. Mauris eu neque sit amet mi consectetur congue. Pellentesque accumsan leo ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing','2023-01-16',0,0,'2023-01-19 12:17:19'),
(5,'https://itsjustwholesome.com/img/a6qKxpA_460swp.webp','fiver.com','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae cursus nulla, eget egestas mauris. Nunc et faucibus nisl, at tempus felis. Duis eleifend enim non commodo convallis. Mauris eu neque sit amet mi consectetur congue. Pellentesque accumsan leo ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing','2023-01-16',0,0,'2023-01-19 12:17:20'),
(6,'https://itsjustwholesome.com/img/a6qKxpA_460swp.webp','fiver.com','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae cursus nulla, eget egestas mauris. Nunc et faucibus nisl, at tempus felis. Duis eleifend enim non commodo convallis. Mauris eu neque sit amet mi consectetur congue. Pellentesque accumsan leo ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing','2023-01-16',0,0,'2023-01-19 12:18:54'),
(7,'https://itsjustwholesome.com/img/a6qKxpA_460swp.webp','fiver.com','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae cursus nulla, eget egestas mauris. Nunc et faucibus nisl, at tempus felis. Duis eleifend enim non commodo convallis. Mauris eu neque sit amet mi consectetur congue. Pellentesque accumsan leo ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing','2023-01-16',0,0,'2023-01-19 12:18:58'),
(8,'https://itsjustwholesome.com/img/a6qKxpA_460swp.webp','fiver.com','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae cursus nulla, eget egestas mauris. Nunc et faucibus nisl, at tempus felis. Duis eleifend enim non commodo convallis. Mauris eu neque sit amet mi consectetur congue. Pellentesque accumsan leo ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing','2023-01-16',0,0,'2023-01-19 12:19:02'),
(9,'https://itsjustwholesome.com/img/a6qKxpA_460swp.webp','fiver.com','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae cursus nulla, eget egestas mauris. Nunc et faucibus nisl, at tempus felis. Duis eleifend enim non commodo convallis. Mauris eu neque sit amet mi consectetur congue. Pellentesque accumsan leo ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing','2023-01-16',0,0,'2023-01-19 12:19:07'),
(10,'https://itsjustwholesome.com/img/a6qKxpA_460swp.webp','fiver.com','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae cursus nulla, eget egestas mauris. Nunc et faucibus nisl, at tempus felis. Duis eleifend enim non commodo convallis. Mauris eu neque sit amet mi consectetur congue. Pellentesque accumsan leo ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing','2023-01-16',0,0,'2023-01-19 12:19:13'),
(11,'https://itsjustwholesome.com/img/a6qKxpA_460swp.webp','fiver.com','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae cursus nulla, eget egestas mauris. Nunc et faucibus nisl, at tempus felis. Duis eleifend enim non commodo convallis. Mauris eu neque sit amet mi consectetur congue. Pellentesque accumsan leo ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing','2023-01-16',0,0,'2023-01-19 12:19:33'),
(12,'https://itsjustwholesome.com/img/a6qKxpA_460swp.webp','fiver.com','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae cursus nulla, eget egestas mauris. Nunc et faucibus nisl, at tempus felis. Duis eleifend enim non commodo convallis. Mauris eu neque sit amet mi consectetur congue. Pellentesque accumsan leo ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing','2023-01-16',0,0,'2023-01-19 12:20:07'),
(13,'https://itsjustwholesome.com/img/a6qKxpA_460swp.webp','fiver.com','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae cursus nulla, eget egestas mauris. Nunc et faucibus nisl, at tempus felis. Duis eleifend enim non commodo convallis. Mauris eu neque sit amet mi consectetur congue. Pellentesque accumsan leo ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing','2023-01-16',0,0,'2023-01-19 12:21:04'),
(14,'https://itsjustwholesome.com/img/a6qKxpA_460swp.webp','fiver.com','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae cursus nulla, eget egestas mauris. Nunc et faucibus nisl, at tempus felis. Duis eleifend enim non commodo convallis. Mauris eu neque sit amet mi consectetur congue. Pellentesque accumsan leo ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing','2023-01-16',0,0,'2023-01-19 12:21:12'),
(15,'https://itsjustwholesome.com/img/a6qKxpA_460swp.webp','fiver.com','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae cursus nulla, eget egestas mauris. Nunc et faucibus nisl, at tempus felis. Duis eleifend enim non commodo convallis. Mauris eu neque sit amet mi consectetur congue. Pellentesque accumsan leo ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing','2023-01-16',0,0,'2023-01-19 12:21:18'),
(16,'https://itsjustwholesome.com/img/a6qKxpA_460swp.webp','fiver.com','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae cursus nulla, eget egestas mauris. Nunc et faucibus nisl, at tempus felis. Duis eleifend enim non commodo convallis. Mauris eu neque sit amet mi consectetur congue. Pellentesque accumsan leo ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing','2023-01-16',0,0,'2023-01-19 12:21:25'),
(17,'https://itsjustwholesome.com/img/a6qKxpA_460swp.webp','fiver.com','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae cursus nulla, eget egestas mauris. Nunc et faucibus nisl, at tempus felis. Duis eleifend enim non commodo convallis. Mauris eu neque sit amet mi consectetur congue. Pellentesque accumsan leo ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing','2023-01-16',0,0,'2023-01-19 17:51:48'),
(18,'https://itsjustwholesome.com/img/a6qKxpA_460swp.webp','fiver.com','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae cursus nulla, eget egestas mauris. Nunc et faucibus nisl, at tempus felis. Duis eleifend enim non commodo convallis. Mauris eu neque sit amet mi consectetur congue. Pellentesque accumsan leo ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing','2023-01-16',0,0,'2023-01-19 17:51:49'),
(19,'https://itsjustwholesome.com/img/a6qKxpA_460swp.webp','fiver.com','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae cursus nulla, eget egestas mauris. Nunc et faucibus nisl, at tempus felis. Duis eleifend enim non commodo convallis. Mauris eu neque sit amet mi consectetur congue. Pellentesque accumsan leo ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing','2023-01-16',0,0,'2023-01-19 17:51:51'),
(20,'https://itsjustwholesome.com/img/a6qKxpA_460swp.webp','fiver.com','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae cursus nulla, eget egestas mauris. Nunc et faucibus nisl, at tempus felis. Duis eleifend enim non commodo convallis. Mauris eu neque sit amet mi consectetur congue. Pellentesque accumsan leo ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing','2023-01-16',0,0,'2023-01-19 17:51:52'),
(21,'https://itsjustwholesome.com/img/a6qKxpA_460swp.webp','fiver.com','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae cursus nulla, eget egestas mauris. Nunc et faucibus nisl, at tempus felis. Duis eleifend enim non commodo convallis. Mauris eu neque sit amet mi consectetur congue. Pellentesque accumsan leo ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing','2023-01-16',0,0,'2023-01-19 17:51:53'),
(22,'https://itsjustwholesome.com/img/a6qKxpA_460swp.webp','fiver.com','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae cursus nulla, eget egestas mauris. Nunc et faucibus nisl, at tempus felis. Duis eleifend enim non commodo convallis. Mauris eu neque sit amet mi consectetur congue. Pellentesque accumsan leo ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing','2023-01-16',0,0,'2023-01-19 17:51:54'),
(23,'https://itsjustwholesome.com/img/a6qKxpA_460swp.webp','fiver.com','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae cursus nulla, eget egestas mauris. Nunc et faucibus nisl, at tempus felis. Duis eleifend enim non commodo convallis. Mauris eu neque sit amet mi consectetur congue. Pellentesque accumsan leo ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing','2023-01-16',0,0,'2023-01-19 17:51:54'),
(24,'https://itsjustwholesome.com/img/a6qKxpA_460swp.webp','fiver.com','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae cursus nulla, eget egestas mauris. Nunc et faucibus nisl, at tempus felis. Duis eleifend enim non commodo convallis. Mauris eu neque sit amet mi consectetur congue. Pellentesque accumsan leo ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing','2023-01-16',0,0,'2023-01-19 17:51:55'),
(25,'https://itsjustwholesome.com/img/a6qKxpA_460swp.webp','fiver.com','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae cursus nulla, eget egestas mauris. Nunc et faucibus nisl, at tempus felis. Duis eleifend enim non commodo convallis. Mauris eu neque sit amet mi consectetur congue. Pellentesque accumsan leo ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing','2023-01-16',0,0,'2023-01-19 17:51:56'),
(26,'https://itsjustwholesome.com/img/a6qKxpA_460swp.webp','fiver.com','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae cursus nulla, eget egestas mauris. Nunc et faucibus nisl, at tempus felis. Duis eleifend enim non commodo convallis. Mauris eu neque sit amet mi consectetur congue. Pellentesque accumsan leo ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing','2023-01-16',0,0,'2023-01-19 17:51:57'),
(27,'https://itsjustwholesome.com/img/a6qKxpA_460swp.webp','fiver.com','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae cursus nulla, eget egestas mauris. Nunc et faucibus nisl, at tempus felis. Duis eleifend enim non commodo convallis. Mauris eu neque sit amet mi consectetur congue. Pellentesque accumsan leo ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing','2023-01-16',0,0,'2023-01-19 17:51:58'),
(28,'https://itsjustwholesome.com/img/a6qKxpA_460swp.webp','fiver.com','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae cursus nulla, eget egestas mauris. Nunc et faucibus nisl, at tempus felis. Duis eleifend enim non commodo convallis. Mauris eu neque sit amet mi consectetur congue. Pellentesque accumsan leo ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing','2023-01-16',0,0,'2023-01-19 17:51:59'),
(29,'https://itsjustwholesome.com/img/a6qKxpA_460swp.webp','fiver.com','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae cursus nulla, eget egestas mauris. Nunc et faucibus nisl, at tempus felis. Duis eleifend enim non commodo convallis. Mauris eu neque sit amet mi consectetur congue. Pellentesque accumsan leo ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing','2023-01-16',0,0,'2023-01-19 17:51:59'),
(30,'https://itsjustwholesome.com/img/a6qKxpA_460swp.webp','fiver.com','Lorem ipsum dolor sit amet','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae cursus nulla, eget egestas mauris. Nunc et faucibus nisl, at tempus felis. Duis eleifend enim non commodo convallis. Mauris eu neque sit amet mi consectetur congue. Pellentesque accumsan leo ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing','2023-01-16',0,0,'2023-01-19 17:52:01');

/*Table structure for table `data_submissions` */

DROP TABLE IF EXISTS `data_submissions`;

CREATE TABLE `data_submissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `filename` varchar(160) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

/*Data for the table `data_submissions` */

insert  into `data_submissions`(`id`,`created`,`filename`) values 
(72,'2023-01-17 16:28:31','1673940511_Social-Media-Assistant-2-1.png'),
(73,'2023-01-17 17:01:08','1673942468_Albert-Tang-240x240.jpg'),
(74,'2023-01-17 17:01:16','1673942476_BrandonCherry-photo-240x240.jpg'),
(75,'2023-01-17 17:01:23','1673942483_Amy-Cray-240x240.png'),
(76,'2023-01-17 17:01:32','1673942492_Andy-Hill-240x240.png'),
(77,'2023-01-17 17:01:43','1673942503_Mike-Jones-240x240.png'),
(78,'2023-01-17 17:01:53','1673942513_Robert-McNeely-240x240.png'),
(79,'2023-01-17 17:02:01','1673942521_Kristin-Arbide-240x240.png'),
(80,'2023-01-17 17:02:09','1673942529_Amy-Cray-240x240.png'),
(81,'2023-01-17 17:02:17','1673942537_Peter-Chan-240x240.png'),
(82,'2023-01-17 17:02:26','1673942546_Zak-Doric-240x240.png'),
(83,'2023-01-17 17:02:33','1673942553_Amy-Robertson-240x240.png'),
(84,'2023-01-17 17:02:44','1673942564_Amy-Choice-240x240.png'),
(85,'2023-01-17 17:02:51','1673942571_AlexRampell-240x240.jpg'),
(86,'2023-01-17 17:03:03','1673942583_Amy-Choice-240x240.png'),
(87,'2023-01-17 17:03:09','1673942589_Alyssa-Torres-Photo-240x240.jpg'),
(88,'2023-01-17 17:20:42','1673943642_AnneLeeSkates-photo-240x240.jpg'),
(89,'2023-01-19 17:06:34','1674115594_JayRughani-photo-240x240.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
