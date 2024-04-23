/*
SQLyog Professional v12.09 (32 bit)
MySQL - 10.11.7-MariaDB-cll-lve : Database - u184690682_ams1gn
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `web_registration` */

DROP TABLE IF EXISTS `web_registration`;

CREATE TABLE `web_registration` (
  `id` varchar(50) DEFAULT NULL,
  `nama_perusahaan` varchar(250) NOT NULL,
  `id_perusahaan` varchar(8) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `domain_website` varchar(250) NOT NULL,
  `dokumen_perizinan` varchar(100) NOT NULL,
  `sektor_perusahaan` varchar(100) NOT NULL,
  `addBy` varchar(100) NOT NULL,
  `addOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `web_registration` */

insert  into `web_registration`(`id`,`nama_perusahaan`,`id_perusahaan`,`no_tlp`,`email`,`domain_website`,`dokumen_perizinan`,`sektor_perusahaan`,`addBy`,`addOn`) values ('1713847761','asd Corp','WR-49497','081','hai@gmail.com','testja.com','Test pdf perusahaan.pdf','TIK','User','2024-04-23 11:49:20');
insert  into `web_registration`(`id`,`nama_perusahaan`,`id_perusahaan`,`no_tlp`,`email`,`domain_website`,`dokumen_perizinan`,`sektor_perusahaan`,`addBy`,`addOn`) values ('1713848194','Hello World','WR-23887','0800000000000','hello@tester.com','domain.com','EPrT Score Pusat Bahasa | Telkom University.pdf','TIK','User','2024-04-23 11:56:33');
insert  into `web_registration`(`id`,`nama_perusahaan`,`id_perusahaan`,`no_tlp`,`email`,`domain_website`,`dokumen_perizinan`,`sektor_perusahaan`,`addBy`,`addOn`) values ('1713849386','Hello World','WR-29259','08123456789','hello@tester.com','tester.com','11. Pakta Integritas.docx','TIK','User','2024-04-23 12:16:25');
insert  into `web_registration`(`id`,`nama_perusahaan`,`id_perusahaan`,`no_tlp`,`email`,`domain_website`,`dokumen_perizinan`,`sektor_perusahaan`,`addBy`,`addOn`) values ('1713849394','Hello World','WR-01892','08123456789','hello@tester.com','tester.com','11. Pakta Integritas.docx','TIK','User','2024-04-23 12:16:33');
insert  into `web_registration`(`id`,`nama_perusahaan`,`id_perusahaan`,`no_tlp`,`email`,`domain_website`,`dokumen_perizinan`,`sektor_perusahaan`,`addBy`,`addOn`) values ('1713849674','test','WR-63522','test','test@gmail.com','test.com','Test pdf perusahaan.pdf','TIK','User','2024-04-23 12:21:13');
insert  into `web_registration`(`id`,`nama_perusahaan`,`id_perusahaan`,`no_tlp`,`email`,`domain_website`,`dokumen_perizinan`,`sektor_perusahaan`,`addBy`,`addOn`) values ('1713850022','tester','WR-99181','087777777','hello@world.com','hello.com','Test pdf perusahaan.pdf','TIK','User','2024-04-23 12:27:01');
insert  into `web_registration`(`id`,`nama_perusahaan`,`id_perusahaan`,`no_tlp`,`email`,`domain_website`,`dokumen_perizinan`,`sektor_perusahaan`,`addBy`,`addOn`) values ('1713850073','tester','WR-20211','087777777','hello@world.com','hello.com','Test pdf perusahaan.pdf','TIK','User','2024-04-23 12:27:52');
insert  into `web_registration`(`id`,`nama_perusahaan`,`id_perusahaan`,`no_tlp`,`email`,`domain_website`,`dokumen_perizinan`,`sektor_perusahaan`,`addBy`,`addOn`) values ('1713850374','tester','WR-46597','08888888','tester@tester.com','tester.com','11. Pakta Integritas.pdf','Lain-lain','User','2024-04-23 12:32:53');
insert  into `web_registration`(`id`,`nama_perusahaan`,`id_perusahaan`,`no_tlp`,`email`,`domain_website`,`dokumen_perizinan`,`sektor_perusahaan`,`addBy`,`addOn`) values ('1713850395','tester','WR-90404','08888888','tester@tester.com','tester.com','11. Pakta Integritas.pdf','Lain-lain','User','2024-04-23 12:33:14');
insert  into `web_registration`(`id`,`nama_perusahaan`,`id_perusahaan`,`no_tlp`,`email`,`domain_website`,`dokumen_perizinan`,`sektor_perusahaan`,`addBy`,`addOn`) values ('1713850437','tester','WR-84909','08888888','tester@tester.com','tester.com','11. Pakta Integritas.pdf','Lain-lain','User','2024-04-23 12:33:56');
insert  into `web_registration`(`id`,`nama_perusahaan`,`id_perusahaan`,`no_tlp`,`email`,`domain_website`,`dokumen_perizinan`,`sektor_perusahaan`,`addBy`,`addOn`) values ('1713850470','tester','WR-27036','08888888','tester@tester.com','tester.com','11. Pakta Integritas.pdf','Lain-lain','User','2024-04-23 12:34:29');
insert  into `web_registration`(`id`,`nama_perusahaan`,`id_perusahaan`,`no_tlp`,`email`,`domain_website`,`dokumen_perizinan`,`sektor_perusahaan`,`addBy`,`addOn`) values ('1713850600','tester','WR-97429','08888','tester@test.com','test.com','11. Pakta Integritas.pdf','TIK','User','2024-04-23 12:36:39');
insert  into `web_registration`(`id`,`nama_perusahaan`,`id_perusahaan`,`no_tlp`,`email`,`domain_website`,`dokumen_perizinan`,`sektor_perusahaan`,`addBy`,`addOn`) values ('1713851933','Hello World','WR-82758','0877777','tester@mail.com','tester.com','Test pdf perusahaan.pdf','TIK','User','2024-04-23 12:58:52');
insert  into `web_registration`(`id`,`nama_perusahaan`,`id_perusahaan`,`no_tlp`,`email`,`domain_website`,`dokumen_perizinan`,`sektor_perusahaan`,`addBy`,`addOn`) values ('1713852153','Alkademi','WR-76879','08123456789','alkademi@tester.com','alkademi.com','Test pdf perusahaan copy.pdf','TIK','User','2024-04-23 13:02:32');
insert  into `web_registration`(`id`,`nama_perusahaan`,`id_perusahaan`,`no_tlp`,`email`,`domain_website`,`dokumen_perizinan`,`sektor_perusahaan`,`addBy`,`addOn`) values ('1713852501','Hello','WR-32987','00000','hello@hello.com','hello.com','Silabus_IT Support.pdf','TIK','User','2024-04-23 13:08:20');

/*Table structure for table `web_registration_userlist` */

DROP TABLE IF EXISTS `web_registration_userlist`;

CREATE TABLE `web_registration_userlist` (
  `id` varchar(50) DEFAULT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `addOn` datetime NOT NULL,
  `type_user` enum('Standart','Admin') NOT NULL DEFAULT 'Standart'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `web_registration_userlist` */

insert  into `web_registration_userlist`(`id`,`fullname`,`email`,`password`,`addOn`,`type_user`) values ('1713851249','Testing App','test@gmail.com','bfd59291e825b5f2bbf1eb76569f8fe7','2024-04-23 12:47:28','Standart');
insert  into `web_registration_userlist`(`id`,`fullname`,`email`,`password`,`addOn`,`type_user`) values ('1713851861','Hello World','tester@mail.com','1c5d9890970e6063720f709ba0fc0993','2024-04-23 12:57:40','Admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
