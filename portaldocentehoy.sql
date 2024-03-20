/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 8.0.30 : Database - portaldocente
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`portaldocente` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `portaldocente`;

/*Table structure for table `av_pd_carreras` */

DROP TABLE IF EXISTS `av_pd_carreras`;

CREATE TABLE `av_pd_carreras` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `carrera` varchar(100) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `av_pd_carreras` */

insert  into `av_pd_carreras`(`id`,`carrera`,`status`,`created_at`,`updated_at`) values (1,'tecnologias de informacion',1,NULL,NULL),(2,'mantenimiento',1,NULL,NULL),(3,'logistica',1,NULL,NULL);

/*Table structure for table `av_pd_ciclos` */

DROP TABLE IF EXISTS `av_pd_ciclos`;

CREATE TABLE `av_pd_ciclos` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `ciclo` varchar(50) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `av_pd_ciclos` */

insert  into `av_pd_ciclos`(`id`,`ciclo`,`status`,`created_at`,`updated_at`) values (1,'2015 Enero - Julio',1,NULL,NULL),(2,'2015 Agosto - Diciembre',1,NULL,NULL);

/*Table structure for table `av_pd_cursos` */

DROP TABLE IF EXISTS `av_pd_cursos`;

CREATE TABLE `av_pd_cursos` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `curso` varchar(150) NOT NULL,
  `hrs_teoricas` int DEFAULT NULL,
  `hrs_practicas` int DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `av_pd_cursos` */

insert  into `av_pd_cursos`(`id`,`curso`,`hrs_teoricas`,`hrs_practicas`,`status`,`created_at`,`updated_at`) values (1,'ingles',2,0,1,NULL,NULL),(2,'algebra',4,0,1,NULL,NULL),(3,'fisica',4,0,1,NULL,NULL),(4,'quimica',4,2,1,NULL,NULL),(5,'tics',2,4,1,NULL,NULL),(6,'mantenimiento',2,2,1,NULL,NULL);

/*Table structure for table `av_pd_semestres` */

DROP TABLE IF EXISTS `av_pd_semestres`;

CREATE TABLE `av_pd_semestres` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `semestre` varchar(30) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `av_pd_semestres` */

insert  into `av_pd_semestres`(`id`,`semestre`,`status`,`created_at`,`updated_at`) values (1,'primer semestre',1,NULL,NULL),(2,'segundo semestre',1,NULL,NULL),(3,'tercer semestre',1,NULL,NULL),(4,'cuarto semestre',1,NULL,NULL),(5,'quinto semestre',1,NULL,NULL),(6,'sexto semestre',1,NULL,NULL);

/*Table structure for table `av_pd_turnos` */

DROP TABLE IF EXISTS `av_pd_turnos`;

CREATE TABLE `av_pd_turnos` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `turno` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `av_pd_turnos` */

insert  into `av_pd_turnos`(`id`,`turno`,`created_at`,`updated_at`) values (1,'matutino',NULL,NULL),(2,'vespertino',NULL,NULL),(3,'enpalme',NULL,NULL);

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `pd_capacitacion` */

DROP TABLE IF EXISTS `pd_capacitacion`;

CREATE TABLE `pd_capacitacion` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `userid` int DEFAULT NULL,
  `curso` varchar(250) DEFAULT NULL,
  `capainstitucion` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `horas` int DEFAULT NULL,
  `capaanio` year DEFAULT NULL,
  `estado` tinyint DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `pd_capacitacion` */

/*Table structure for table `pd_categoria` */

DROP TABLE IF EXISTS `pd_categoria`;

CREATE TABLE `pd_categoria` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `pd_categoria` */

insert  into `pd_categoria`(`id`,`nombre`,`created_at`,`updated_at`) values (1,'Auxiliar','2024-03-11 09:46:54','2024-03-11 09:46:54'),(2,'Asociado','2024-03-11 09:46:54','2024-03-11 09:46:54'),(3,'Principal','2024-03-11 09:46:54','2024-03-11 09:46:54'),(4,'JP','2024-03-11 09:46:54','2024-03-11 09:46:54'),(5,'Docente','2024-03-11 09:46:54','2024-03-11 09:46:54');

/*Table structure for table `pd_docente` */

DROP TABLE IF EXISTS `pd_docente`;

CREATE TABLE `pd_docente` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `userid` int DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `nombres` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `apellidos` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fechanacimiento` datetime DEFAULT NULL,
  `lugar` varchar(250) DEFAULT NULL,
  `estadocivil` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nacionalidad` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `celular` int DEFAULT NULL,
  `telefijo` int DEFAULT NULL,
  `genero` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `direccion` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `correop` varchar(250) DEFAULT NULL,
  `correoi` varchar(250) DEFAULT NULL,
  `condicion` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ano` year DEFAULT NULL,
  `estado` tinyint(1) DEFAULT '1',
  `categoria` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `pd_docente` */

/*Table structure for table `pd_estudios` */

DROP TABLE IF EXISTS `pd_estudios`;

CREATE TABLE `pd_estudios` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `userid` int DEFAULT NULL,
  `idgrados` int DEFAULT NULL,
  `institucion` varchar(250) DEFAULT NULL,
  `gradoobtenido` varchar(250) DEFAULT NULL,
  `concluidos` tinyint DEFAULT '1',
  `estado` tinyint DEFAULT '1',
  `anio` year DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `pd_estudios` */

/*Table structure for table `pd_experiencia_docente` */

DROP TABLE IF EXISTS `pd_experiencia_docente`;

CREATE TABLE `pd_experiencia_docente` (
  `id` int NOT NULL AUTO_INCREMENT,
  `universidad` varchar(250) DEFAULT NULL,
  `sinicio` varchar(250) DEFAULT NULL,
  `sfin` varchar(250) DEFAULT NULL,
  `curso` varchar(250) DEFAULT NULL,
  `nsemestres` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `pd_experiencia_docente` */

/*Table structure for table `pd_experiencia_profesional` */

DROP TABLE IF EXISTS `pd_experiencia_profesional`;

CREATE TABLE `pd_experiencia_profesional` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `userid` int DEFAULT NULL,
  `expinstitucion` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `cargo` varchar(250) DEFAULT NULL,
  `finicio` varchar(250) DEFAULT NULL,
  `ffin` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `pd_experiencia_profesional` */

/*Table structure for table `pd_grados` */

DROP TABLE IF EXISTS `pd_grados`;

CREATE TABLE `pd_grados` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `pd_grados` */

insert  into `pd_grados`(`id`,`nombre`,`created_at`,`updated_at`) values (1,'BACHILLER','2024-03-11 09:52:27','2024-03-11 09:52:27'),(2,'INGENIERO','2024-03-11 09:52:27','2024-03-11 09:52:27'),(3,'MAESTRO','2024-03-11 09:52:27','2024-03-11 09:52:27'),(4,NULL,'2024-03-11 09:52:27','2024-03-11 09:52:27');

/*Table structure for table `pd_premios` */

DROP TABLE IF EXISTS `pd_premios`;

CREATE TABLE `pd_premios` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `denominacion` varchar(250) DEFAULT NULL,
  `institucion` varchar(250) DEFAULT NULL,
  `motivo` varchar(250) DEFAULT NULL,
  `año` year DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `pd_premios` */

/*Table structure for table `pd_produccion` */

DROP TABLE IF EXISTS `pd_produccion`;

CREATE TABLE `pd_produccion` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `patente` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `pd_produccion` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`role`,`remember_token`,`created_at`,`updated_at`) values (1,'User','user@cambotutorial.com',NULL,'$2y$10$0xYnuIn2/NWv0US5eMaBiOulh/9ozieOM0oL/SXGDpzSvbYfvWbwa',0,NULL,'2024-03-16 16:16:01','2024-03-16 16:16:01'),(2,'Editor','editor@cambotutorial.com',NULL,'$2y$10$Y8UuNqZjcxtCohKyDVVn6OAw2gFVLGZKnVyAs62ZvRbJSimH.uHla',1,NULL,'2024-03-16 16:16:01','2024-03-16 16:16:01'),(3,'Admin','admin@cambotutorial.com',NULL,'$2y$10$lKTNlq6chG9vr6Z0XaV26.CkG0OLe4NB4yDMPML176LwUQX9Sonfy',2,NULL,'2024-03-16 16:16:01','2024-03-16 16:16:01'),(4,'Docente','docente@gmail.com',NULL,'$2y$10$lKTNlq6chG9vr6Z0XaV26.CkG0OLe4NB4yDMPML176LwUQX9Sonfy',1,NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
