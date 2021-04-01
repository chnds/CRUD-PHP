/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.17-MariaDB : Database - autenticacao
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`autenticacao` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `autenticacao`;

/*Table structure for table `aut_noticias` */

DROP TABLE IF EXISTS `aut_noticias`;

CREATE TABLE `aut_noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) DEFAULT NULL,
  `conteudo` text NOT NULL,
  `autor_id` int(11) NOT NULL,
  `data` int(11) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `aut_noticias` */

insert  into `aut_noticias`(`id`,`titulo`,`conteudo`,`autor_id`,`data`) values 
(1,'Sisitema de Usuários','bla bla bla \r\n\r\nbla bla bla',1,1079449401),
(2,'Atentado em Madri','onono onono onono onono',1,1079449430),
(3,'Kernel 2.6','oioioi\r\n oioioi oioioi oioioi',2,1079449456);

/*Table structure for table `aut_usuarios` */

DROP TABLE IF EXISTS `aut_usuarios`;

CREATE TABLE `aut_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `postar` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `aut_usuarios` */

insert  into `aut_usuarios`(`id`,`nome`,`login`,`senha`,`postar`) values 
(1,'Albert Einstein','einstein','e7d80ffeefa212b7c5c55700e4f7193e','S'),
(2,'Usuário Teste','admin','698dc19d489c4e4db73e28a713eab07b','N');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
