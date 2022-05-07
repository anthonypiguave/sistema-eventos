/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.14-MariaDB : Database - xenturionit_respaldo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`xenturionit_respaldo` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `xenturionit_respaldo`;

/*Table structure for table `admins` */

DROP TABLE IF EXISTS `admins`;

CREATE TABLE `admins` (
  `ID_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_admin` varchar(75) DEFAULT NULL,
  `apellido_admin` varchar(75) DEFAULT NULL,
  `usuario` varchar(50) NOT NULL,
  `hash_pass` varchar(60) NOT NULL,
  `nivel` int(1) NOT NULL,
  `creado` datetime DEFAULT NULL,
  `actualizado` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_admin`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

/*Data for the table `admins` */

insert  into `admins`(`ID_admin`,`nombre_admin`,`apellido_admin`,`usuario`,`hash_pass`,`nivel`,`creado`,`actualizado`) values (1,'admin','admin','admin','$2y$12$lHcrW0zESdGLopYmrO4eA.b4BG.bEPRu0Q81UQb449WcwPizJoYIG',1,NULL,'2022-04-22 23:04:31'),(2,'Anthony','Piguave','anthony','$2y$12$JTF5VEf.wPmmPZ3KDyZ4teBN09VB.ym1nKpvbV/g8bnazVSrMOlLO',1,'2022-04-25 20:39:16',NULL);

/*Table structure for table `categoria_evento` */

DROP TABLE IF EXISTS `categoria_evento`;

CREATE TABLE `categoria_evento` (
  `id_categoria` tinyint(10) NOT NULL AUTO_INCREMENT,
  `cat_evento` varchar(50) NOT NULL,
  `icono` varchar(15) NOT NULL,
  `actualizado` datetime NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

/*Data for the table `categoria_evento` */

insert  into `categoria_evento`(`id_categoria`,`cat_evento`,`icono`,`actualizado`) values (1,'Seminario','fa-university','0000-00-00 00:00:00'),(2,'Conferencia','fa-address-book','2022-04-23 13:04:35'),(3,'Talleres','fa-code','0000-00-00 00:00:00');

/*Table structure for table `cuentas_bancarias` */

DROP TABLE IF EXISTS `cuentas_bancarias`;

CREATE TABLE `cuentas_bancarias` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nombre_banco` varchar(50) DEFAULT NULL,
  `tipo_cuenta` varchar(15) DEFAULT NULL,
  `nro_cuenta` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `ced_ruc` varchar(14) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `creado` datetime DEFAULT NULL,
  `actualizado` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

/*Data for the table `cuentas_bancarias` */

insert  into `cuentas_bancarias`(`id`,`nombre_banco`,`tipo_cuenta`,`nro_cuenta`,`email`,`ced_ruc`,`descripcion`,`creado`,`actualizado`) values (1,'BANCO PICHINCHA','AHORRO','123','email@email.com','0953708050001','TRANFERENCIA BANCO PICHINCHA',NULL,NULL);

/*Table structure for table `eventos` */

DROP TABLE IF EXISTS `eventos`;

CREATE TABLE `eventos` (
  `evento_id` tinyint(10) NOT NULL AUTO_INCREMENT,
  `nombre_evento` varchar(60) NOT NULL,
  `fecha_evento` date NOT NULL,
  `hora_evento` varchar(10) NOT NULL,
  `cupo` int(11) DEFAULT NULL,
  `id_cat_evento` tinyint(10) NOT NULL,
  `id_inv` tinyint(4) NOT NULL,
  `clave` varchar(10) NOT NULL,
  `fecha_creado` datetime DEFAULT NULL,
  `fecha_editado` date DEFAULT NULL,
  PRIMARY KEY (`evento_id`),
  KEY `id_cat_evento` (`id_cat_evento`),
  KEY `id_inv` (`id_inv`),
  CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`id_cat_evento`) REFERENCES `categoria_evento` (`id_categoria`),
  CONSTRAINT `eventos_ibfk_2` FOREIGN KEY (`id_inv`) REFERENCES `invitados` (`invitado_id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8;

/*Data for the table `eventos` */

insert  into `eventos`(`evento_id`,`nombre_evento`,`fecha_evento`,`hora_evento`,`cupo`,`id_cat_evento`,`id_inv`,`clave`,`fecha_creado`,`fecha_editado`) values (4,'HTML5 y CSS3','2016-12-09','02:00 PM',0,3,3,'taller_01',NULL,'2022-05-05'),(6,'WordPress','2016-12-09','19:00:00',NULL,3,5,'taller_13',NULL,NULL),(7,'Como ser freelancer','2016-12-09','10:00:00',NULL,2,6,'conf_01',NULL,NULL),(8,'Tecnologías del Futuro PHP','2016-12-09','05:00 PM',NULL,2,3,'conf_02',NULL,NULL),(9,'Seguridad en la Web','2016-12-09','07:00 PM',NULL,2,2,'conf_03',NULL,NULL),(10,'Diseño UI y UX para móviles','2016-12-09','10:00:00',NULL,1,6,'sem_01',NULL,NULL),(12,'PHP y MySQL','2016-12-10','12:00:00',NULL,3,2,'taller_03',NULL,NULL),(13,'JavaScript Avanzado','2016-12-10','14:00:00',NULL,3,3,'taller_04',NULL,NULL),(14,'SEO en Google','2016-12-10','17:00:00',NULL,3,4,'taller_05',NULL,NULL),(15,'De Photoshop a HTML5 y CSS3','2016-12-10','19:00:00',NULL,3,5,'taller_06',NULL,NULL),(16,'PHP Intermedio y Avanzado','2016-12-10','21:00:00',NULL,3,6,'taller_07',NULL,NULL),(17,'Como crear una tienda online que venda millones en pocos día','2016-12-10','10:00:00',NULL,2,6,'conf_04',NULL,NULL),(18,'Los mejores lugares para encontrar trabajo','2016-12-10','17:00:00',NULL,2,1,'conf_05',NULL,NULL),(19,'Pasos para crear un negocio rentable ','2016-12-10','19:00:00',NULL,2,2,'conf_06',NULL,NULL),(22,'Laravel','2016-12-11','10:00:00',NULL,3,1,'taller_08',NULL,NULL),(23,'Crea tu propia API','2016-12-11','12:00:00',NULL,3,2,'taller_09',NULL,NULL),(24,'JavaScript y jQuery','2016-12-11','14:00:00',NULL,3,3,'taller_10',NULL,NULL),(25,'Creando Plantillas para WordPress','2016-12-11','17:00:00',NULL,3,4,'taller_11',NULL,NULL),(26,'Tiendas Virtuales en Magento','2016-12-11','19:00:00',NULL,3,5,'taller_12',NULL,NULL),(30,'Creando una App en Android en una mañana','2016-12-11','10:00:00',NULL,1,4,'sem_04',NULL,NULL),(31,'Creando una App en iOS en una tarde','2016-12-11','17:00:00',NULL,1,1,'sem_05',NULL,NULL),(32,'Flexbox para principiantes','2016-12-10','11:00:00',NULL,2,4,'conf_07',NULL,NULL),(78,'Apache Ignite: Mejora la Velocidad, la Escala y la Disponibi','2022-04-01','08:00 AM',25,3,3,'','2022-04-25 22:10:00',NULL),(79,'Utilizando la Red Informática ToolKit (CNTK) - Guayaquil','2022-04-01','10:00 PM',26,3,3,'','2022-04-25 22:21:53',NULL);

/*Table structure for table `invitados` */

DROP TABLE IF EXISTS `invitados`;

CREATE TABLE `invitados` (
  `invitado_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nombre_invitado` varchar(30) NOT NULL,
  `apellido_invitado` varchar(30) NOT NULL,
  `descripcion` text NOT NULL,
  `url_imagen` varchar(50) NOT NULL,
  `editado` datetime NOT NULL,
  `url_facebook` varchar(200) DEFAULT NULL,
  `url_twitter` varchar(200) DEFAULT NULL,
  `url_instagram` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`invitado_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

/*Data for the table `invitados` */

insert  into `invitados`(`invitado_id`,`nombre_invitado`,`apellido_invitado`,`descripcion`,`url_imagen`,`editado`,`url_facebook`,`url_twitter`,`url_instagram`) values (1,'Willow ','Trantow','Dennis Ritchie fue un reconocido científico informático estadounidense. Es mejor recordado por crear el lenguaje de programación C y sus contribuciones al desarrollo del sistema operativo UNIX.','willow_trantow(1).jpg','2022-05-05 21:40:31',NULL,NULL,NULL),(2,'Cole ','Emmerich  ','un estudiante finlandés, desarrolló el sistema operativo Linux, similar a Unix mientras estaba haciendo su maestría en el año 1991.','3(1).jpg','2022-05-05 21:40:01',NULL,NULL,NULL),(3,'Brenden ','Legros','Brenden Legros Nació el 29 de enero de 1972 en Cambridge.','Brenden_Legros.png','2022-05-05 21:39:46',NULL,NULL,NULL),(4,'Jack ','Christiansen','Stephen Gary Wozniak, hijo de un ingeniero de Lockheed Martin, nacido el 11 de agosto de 1950, quedó fascinado por la electrónica a una edad temprana. Aunque nunca fue un estudiante estrella en el sentido tradicional, Wozniak tenía una aptitud para construir componentes electrónicos que funcionen desde cero.','2(1).jpg','2022-05-05 21:40:13',NULL,NULL,NULL),(5,'Harold','Garcia','Científico computacional estadounidense. Colaboró en el diseño y desarrollo de los sistemas operativos Multics y Unix, así como el desarrollo de varios lenguajes de programación como el C','5(1).jpg','2022-05-05 21:45:31',NULL,NULL,NULL),(6,'Alejandrin ','Littel','Sergey Mikhaylovich Brin, empresario de Internet e informático, nació el 21 de agosto de 1973 en Moscú, Rusia. El hijo de un matemático soviético economista, Brin y su familia emigraron a los Estados Unidos para escapar de la persecución judía en 1979. Luego de graduarse en matemáticas y ciencias de la computación de la Universidad de Maryland en College Park, Brin ingresó a la Universidad de Stanford, donde se reunió Página Larry. Ambos alumnos estaban completando doctorados en informática.','4(1).jpg','2022-05-05 21:43:05',NULL,NULL,NULL),(7,'Andres','Parra','Es un mexicano, ingeniero físico graduado de la Universidad Iberoamericana y actor formado en CEFAC, la escuela oficial de actuación de TV Azteca y en CEA, la escuela oficial de actores de Televisa. Debido a su trayectoria académica y a su experiencia en su negocio de mercadeo en red, donde llegó a ser uno de los distribuidores más grandes del mundo en la industria, Diego empezó a utilizar sus habilidades para comunicar de manera sistematizada su conocimiento y experiencias de vida, dando conferencias y talleres en 2005, para motivar a su audiencia a superarse, a lograr sus metas y a diseñar la vida deseada.','invitado1.jpg','2022-05-05 21:47:33','https://facebook.com/a1','https://twitter.com/a1','https://instagram.com/a1');

/*Table structure for table `regalos` */

DROP TABLE IF EXISTS `regalos`;

CREATE TABLE `regalos` (
  `ID_regalo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_regalo` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_regalo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `regalos` */

insert  into `regalos`(`ID_regalo`,`nombre_regalo`) values (1,'Pulsera'),(2,'Etiquetas'),(3,'Plumas');

/*Table structure for table `registrados` */

DROP TABLE IF EXISTS `registrados`;

CREATE TABLE `registrados` (
  `ID_Registrado` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_registrado` varchar(50) NOT NULL,
  `apellido_registrado` varchar(50) NOT NULL,
  `email_registrado` varchar(100) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `pases_articulos` longtext NOT NULL,
  `talleres_registrados` longtext NOT NULL,
  `regalo` int(11) NOT NULL,
  `total_pagado` varchar(50) NOT NULL,
  `pagado` int(1) NOT NULL,
  PRIMARY KEY (`ID_Registrado`),
  KEY `regalo` (`regalo`),
  CONSTRAINT `registrados_ibfk_1` FOREIGN KEY (`regalo`) REFERENCES `regalos` (`ID_regalo`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8;

/*Data for the table `registrados` */

insert  into `registrados`(`ID_Registrado`,`nombre_registrado`,`apellido_registrado`,`email_registrado`,`fecha_registro`,`pases_articulos`,`talleres_registrados`,`regalo`,`total_pagado`,`pagado`) values (34,'juan','vv','correo@correo.com','2018-10-22 02:48:24','{\"un_dia\":{\"cantidad\":\"1\"},\"pase_completo\":{\"cantidad\":\"\"},\"pase_2dias\":{\"cantidad\":\"\"}}','{\"eventos\":[\"7\"]}',2,'30',1),(35,'juan','de la ','correo@correo.com','2018-10-22 02:57:36','{\"un_dia\":{\"cantidad\":\"1\"},\"pase_completo\":{\"cantidad\":\"\"},\"pase_2dias\":{\"cantidad\":\"\"}}','{\"eventos\":[\"8\"]}',2,'30',1),(38,'jua','c','correo@correo.com','2018-10-22 03:02:55','{\"un_dia\":{\"cantidad\":\"1\"},\"pase_completo\":{\"cantidad\":\"\"},\"pase_2dias\":{\"cantidad\":\"\"}}','{\"eventos\":[\"7\"]}',2,'30',1),(39,'Juan Pablo','pablo','correo@correo.com','2018-10-22 03:04:08','{\"un_dia\":{\"cantidad\":\"1\"},\"pase_completo\":{\"cantidad\":\"\"},\"pase_2dias\":{\"cantidad\":\"\"}}','{\"eventos\":[\"8\"]}',1,'30',1),(40,'juan','co','correo@correo.com','2018-10-22 03:07:14','{\"un_dia\":{\"cantidad\":\"1\"},\"pase_completo\":{\"cantidad\":\"\"},\"pase_2dias\":{\"cantidad\":\"\"}}','{\"eventos\":[\"7\"]}',2,'30',0),(82,'aaaaa','aaaa','aaaa@email.com','2022-04-25 06:06:24','{\"un_dia\":{\"cantidad\":\"0\"},\"pase_completo\":{\"cantidad\":\"0\"},\"pase_2dias\":{\"cantidad\":\"1\"}}','{\"eventos\":[\"9\",\"14\"]}',1,'45',1),(83,'aaaaa','aaaa','aaaa@email.com','2022-04-25 06:17:46','{\"un_dia\":{\"cantidad\":\"1\"},\"pase_completo\":{\"cantidad\":\"0\"},\"pase_2dias\":{\"cantidad\":\"0\"}}','{\"eventos\":[\"10\"]}',1,'30',0),(85,'pruebacompra@gmail.com','pruebacompra@gmail.com','pruebacompra@gmail.com','2022-04-27 06:22:26','{\"un_dia\":{\"cantidad\":\"1\"},\"pase_completo\":{\"cantidad\":\"0\"},\"pase_2dias\":{\"cantidad\":\"0\"},\"camisas\":1,\"etiquetas\":1}','{\"eventos\":[\"10\"]}',2,'41.3',0),(86,'pruebacompra@gmail.com','pruebacompra@gmail.com','pruebacompra@gmail.com','2022-04-27 06:22:54','{\"un_dia\":{\"cantidad\":\"1\"},\"pase_completo\":{\"cantidad\":\"0\"},\"pase_2dias\":{\"cantidad\":\"0\"},\"camisas\":1,\"etiquetas\":1}','{\"eventos\":[\"10\"]}',2,'41.3',1),(87,'prueba','prueba','prueba@gmail.com','2022-04-27 06:25:49','{\"un_dia\":{\"cantidad\":\"1\"},\"pase_completo\":{\"cantidad\":\"0\"},\"pase_2dias\":{\"cantidad\":\"0\"},\"camisas\":1,\"etiquetas\":1}','{\"eventos\":[\"10\"]}',2,'41.3',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
