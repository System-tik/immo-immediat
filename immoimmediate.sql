-- MySQL dump 10.13  Distrib 8.0.30, for Linux (x86_64)
--
-- Host: localhost    Database: immoimmediate
-- ------------------------------------------------------
-- Server version	8.0.30-0ubuntu0.20.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `actus`
--

DROP TABLE IF EXISTS `actus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `actus` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `actu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actus`
--

LOCK TABLES `actus` WRITE;
/*!40000 ALTER TABLE `actus` DISABLE KEYS */;
INSERT INTO `actus` VALUES (1,'Je ne sais pas trop','mmff','2021-11-17 05:22:07','2021-11-17 05:22:07');
/*!40000 ALTER TABLE `actus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `biens`
--

DROP TABLE IF EXISTS `biens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `biens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `salon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chambre` int DEFAULT NULL,
  `etat` tinyint(1) NOT NULL DEFAULT '0',
  `equipe` tinyint(1) NOT NULL DEFAULT '0',
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A discuter',
  `devise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valide` tinyint(1) NOT NULL DEFAULT '0',
  `client_id` bigint unsigned DEFAULT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caract_bien` json DEFAULT NULL,
  `type_annonce_id` bigint unsigned NOT NULL,
  `type_bien_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `biens_client_id_foreign` (`client_id`),
  KEY `biens_type_annonce_id_foreign` (`type_annonce_id`),
  KEY `biens_type_bien_id_foreign` (`type_bien_id`),
  CONSTRAINT `biens_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`),
  CONSTRAINT `biens_type_annonce_id_foreign` FOREIGN KEY (`type_annonce_id`) REFERENCES `type_annonces` (`id`),
  CONSTRAINT `biens_type_bien_id_foreign` FOREIGN KEY (`type_bien_id`) REFERENCES `type_biens` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `biens`
--

LOCK TABLES `biens` WRITE;
/*!40000 ALTER TABLE `biens` DISABLE KEYS */;
INSERT INTO `biens` VALUES (1,'Une villa meublée','Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, ut delectus. Officia aspernatur quis sit quidem porro nam ipsam iure delectus neque, necessitatibus optio, dolorem quia. Vitae similique officiis officia.','1',1,1,0,'klklk','19','fc',0,NULL,'kkjk','[4, 3]',1,1,'2021-11-14 18:25:14','2022-03-02 08:44:00'),(2,'Une villa meublée','Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, ut delectus. Officia aspernatur quis sit quidem porro nam ipsam iure delectus neque, necessitatibus optio, dolorem quia. Vitae similique officiis officia.','2',2,0,1,'kjkkjkk','23','fc',0,NULL,'kj','[2]',2,1,'2021-11-14 19:04:01','2022-03-02 08:44:07'),(3,'mfmm','Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, ut delectus. Officia aspernatur quis sit quidem porro nam ipsam iure delectus neque, necessitatibus optio, dolorem quia. Vitae similique officiis officia.','2',2,0,1,'kdkk','3000','$',0,NULL,'Kinshasa','[1]',1,1,'2022-03-23 04:54:26','2022-03-23 04:54:47'),(4,'Une villa meublée','Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, ut delectus. Officia aspernatur quis sit quidem porro nam ipsam iure delectus neque, necessitatibus optio, dolorem quia. Vitae similique officiis officia.','2',2,0,1,'kjkkjkk','5000','$',0,NULL,'kj','[2, 5]',2,1,'2022-03-23 04:55:01','2022-03-23 05:03:06'),(5,'Une villa meublée','Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, ut delectus. Officia aspernatur quis sit quidem porro nam ipsam iure delectus neque, necessitatibus optio, dolorem quia. Vitae similique officiis officia.','1',1,1,0,'klklk','19','fc',0,NULL,'kkjk','[4, 3]',1,2,'2022-03-23 04:55:26','2022-03-23 04:55:26'),(6,'Une villa meublée','Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, ut delectus. Officia aspernatur quis sit quidem porro nam ipsam iure delectus neque, necessitatibus optio, dolorem quia. Vitae similique officiis officia.','2',2,0,1,'kjkkjkk','23','fc',0,NULL,'kj','[2]',2,3,'2022-03-23 04:58:39','2022-03-23 04:58:39');
/*!40000 ALTER TABLE `biens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `caract_biens`
--

DROP TABLE IF EXISTS `caract_biens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `caract_biens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `bien_id` bigint unsigned NOT NULL,
  `caract_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `caract_biens_bien_id_foreign` (`bien_id`),
  KEY `caract_biens_caract_id_foreign` (`caract_id`),
  CONSTRAINT `caract_biens_bien_id_foreign` FOREIGN KEY (`bien_id`) REFERENCES `biens` (`id`),
  CONSTRAINT `caract_biens_caract_id_foreign` FOREIGN KEY (`caract_id`) REFERENCES `caracts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `caract_biens`
--

LOCK TABLES `caract_biens` WRITE;
/*!40000 ALTER TABLE `caract_biens` DISABLE KEYS */;
/*!40000 ALTER TABLE `caract_biens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `caracts`
--

DROP TABLE IF EXISTS `caracts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `caracts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `lib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `caracts`
--

LOCK TABLES `caracts` WRITE;
/*!40000 ALTER TABLE `caracts` DISABLE KEYS */;
INSERT INTO `caracts` VALUES (1,'Air','2021-11-14 18:22:11','2021-11-14 18:22:11'),(2,'Jeux','2021-11-14 18:22:23','2021-11-14 18:22:23'),(3,'Piscine','2021-11-14 18:22:31','2021-11-14 18:22:31'),(4,'Spa','2021-11-14 18:22:46','2021-11-14 18:22:46'),(5,'Cuisine equipée','2022-03-23 05:02:53','2022-03-23 05:02:53');
/*!40000 ALTER TABLE `caracts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comptes`
--

DROP TABLE IF EXISTS `comptes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comptes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comptes`
--

LOCK TABLES `comptes` WRITE;
/*!40000 ALTER TABLE `comptes` DISABLE KEYS */;
INSERT INTO `comptes` VALUES (1,'kck','Facebook','nnmmnmnmnmn','2021-11-17 05:17:30','2021-11-17 05:19:03'),(2,'jfjf','Twitter','fjjj','2021-11-17 05:20:28','2021-11-17 05:20:59'),(3,'nnfnf','LinkedIn','nfnfnf','2021-11-17 05:20:40','2021-11-17 05:21:11');
/*!40000 ALTER TABLE `comptes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'mfjfj','Email','immo-immediat@gmail.com','2021-11-17 05:17:46','2021-11-17 05:17:46'),(2,'jjfj','Tel','+243 82 24 23 686','2021-11-17 05:18:13','2021-11-17 05:18:13'),(3,'mdm','Adresse','fmfmfmfmfmfm','2021-11-17 05:18:26','2021-11-17 05:18:26');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favoris`
--

DROP TABLE IF EXISTS `favoris`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `favoris` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `bien_id` bigint unsigned NOT NULL,
  `client_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `favoris_bien_id_foreign` (`bien_id`),
  KEY `favoris_client_id_foreign` (`client_id`),
  CONSTRAINT `favoris_bien_id_foreign` FOREIGN KEY (`bien_id`) REFERENCES `biens` (`id`),
  CONSTRAINT `favoris_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favoris`
--

LOCK TABLES `favoris` WRITE;
/*!40000 ALTER TABLE `favoris` DISABLE KEYS */;
/*!40000 ALTER TABLE `favoris` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `galleries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` VALUES (1,'fkfk','2021-11-15 05:50:12','2021-11-15 05:50:12'),(2,'eke','2021-11-15 05:51:08','2021-11-15 05:51:08'),(3,'f','2021-11-15 05:51:40','2021-11-15 05:51:40');
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (116,'2014_10_12_000000_create_users_table',1),(117,'2014_10_12_100000_create_password_resets_table',1),(118,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(119,'2019_08_19_000000_create_failed_jobs_table',1),(120,'2019_12_14_000001_create_personal_access_tokens_table',1),(121,'2021_10_24_075423_create_sessions_table',1),(122,'2021_11_04_103522_create_type_biens_table',1),(123,'2021_11_04_103538_create_type_annonces_table',1),(124,'2021_11_04_103752_create_caracts_table',1),(125,'2021_11_04_104213_create_clients_table',1),(126,'2021_11_04_104234_create_biens_table',1),(127,'2021_11_04_104239_create_caract_biens_table',1),(128,'2021_11_04_104406_create_propositions_table',1),(129,'2021_11_04_104421_create_favoris_table',1),(130,'2021_11_04_104452_create_galleries_table',1),(131,'2021_11_04_104459_create_actus_table',1),(132,'2021_11_04_104506_create_contacts_table',1),(133,'2021_11_04_104525_create_comptes_table',1),(134,'2021_11_04_104546_create_motivations_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `motivations`
--

DROP TABLE IF EXISTS `motivations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `motivations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `lib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `motivations`
--

LOCK TABLES `motivations` WRITE;
/*!40000 ALTER TABLE `motivations` DISABLE KEYS */;
INSERT INTO `motivations` VALUES (1,'Mettez toute les chances de votre côté pour être satisfait\nen bénéficiant d\'un service flexible, adapté à vos besoins.\nNous réalisons vos rêves en un seul clic. Alos, attez vous de cliquer et devenez heureux! ','2021-11-17 05:21:33','2021-11-17 05:21:51'),(2,'fjfjfjjffjfjfjf','2022-03-23 04:50:08','2022-03-23 04:50:08');
/*!40000 ALTER TABLE `motivations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `propositions`
--

DROP TABLE IF EXISTS `propositions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `propositions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bien_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `propositions_bien_id_foreign` (`bien_id`),
  CONSTRAINT `propositions_bien_id_foreign` FOREIGN KEY (`bien_id`) REFERENCES `biens` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propositions`
--

LOCK TABLES `propositions` WRITE;
/*!40000 ALTER TABLE `propositions` DISABLE KEYS */;
/*!40000 ALTER TABLE `propositions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('03n6XpOAdy35oAvKFoOF6uOyV0Ix9DOaMQAZ5Cti',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiOEhNZGZDTzZRNTdramljNnJUNFFralRuS214WnNSOXNiTkxaVE8xcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/MzMxNTcxOTM2PSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1648014692),('0lusN061PUweIxq9YYbQq3FBzwi2myiNuf4lzDLD',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNlRTZ1ZyRTFtRjhzY29IbHZhTGVmaFpBUDlPTnBDYmo3N1pvWFJrYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/MjExNzMwNTA5NT0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1648014698),('1mWc5ueTGwH9z7Lgxm1sS8BIVg7dYAdEfrE1tPiK',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTlk3djRkellROE9ueXBnUnprc3lpd1JWMnFoZndXWWQ5WmYzQmdXeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/MTU3NzkyOTE3Mj0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1648014753),('2JlDzogFcxoFdq1cNrniLMDw2XfXrcgN6CRFDAHr',1,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTo2OntzOjY6Il90b2tlbiI7czo0MDoia0ZRSEZXdVVPZnBDRkdKZWdaVjlwUmdJV2t1VFh6M2tiNnUzc21lcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kZXRhaWwvNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCR5RmhFOVJRRTN2dDMwbGFOZUpHSDR1YXB4NjVXYnZ4LmptLjJ3eWQzYTlpSkg4ODlndE02QyI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkeUZoRTlSUUUzdnQzMGxhTmVKR0g0dWFweDY1V2J2eC5qbS4yd3lkM2E5aUpIODg5Z3RNNkMiO30=',1648015504),('35ylt8H9coTPuv6139cUcgkCELcWnazOmendaoiB',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoieWxNekt5SU41aDFvbkZBaVIybUZLV0FTMFF6ckM3YlpBNlZBMGpEdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/NzcyNDg4NTQxPSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1648014688),('3BX560kE8UnvCEztO0681PfpkmlcE8kvjXhe1XV6',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiSVBsOW1TZ3MzWjZGcGpkV1VjZ3NWYzV1VkhhbjdGWXZGNFVySDd5TyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/MTI2NjM3NTI0NT0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1648014686),('3dYuIArsa7vxlsj6ctmuEtDOM5vgbApGilYSQUNl',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ1FvRWRFWUFWVkJZN2RpcG90YVo2V2h4cnBZNVM3dldTQ2RYYlA4WiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/MTkzNTY2NTY3Nj0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1648014667),('5pgPPkHaF4MmELDTanjaVxTK8vi8fGYpxvFhagOb',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZURsSzg2Q0VDUDlEdnY5dkxtZjloZUxCWUZzQWNlSU5CcVZ2T3R4SyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/MjA0MDM1NjEwND0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1648014783),('9Qd4xYnPPBzcZCIkD8UvoiuViAozNfzNaeK4elHt',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoia0hsWHNRQnBqSXBQVEVaTjFhOEFqWDJMcDBpdng3YXUwY3NUUzZQNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/NTUwMDM1MTQxPSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1648014687),('aC5rZ5xFV53iy5yCD9uMHrsCFFZivlyUHJqfhXLn',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiUUhyVWM4cVp5bEllcFF0WlFJSWlKV3hzTXJqM0ZydHhCNkJnR2x0ZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/MTAxMzc4Mzc2OT0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1648014738),('aeUjRJVXdHq62nDTb0IKcoSRPMYnqq4db8ET7e9m',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoielVQazg1dnEwY0lwWHQxTkd0QmR2UFNJalV6VFpOeFBkWERTSEVoRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/NjIxNjA0NDExPSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1648014672),('dkgtBjmM3f6MebUX5tI08nhjBPbDs1wWOQRTGbTW',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTmhDVWJUcmdxaGFTdEcwSmxNYU9SU2JZTjNvb1did0lWbkk1bXBKWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/NjYwNTg0NDc5PSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1648014665),('esjGX2XOPFuJ4bDW1XEq4EccG8rnw5ycQVYR84xO',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiMVdsMjhxSEVxclBXMGNoTjlraGVDWVNwdGQ1MU9NeEtBM1gwZU81cCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/MTIzNjE5OTgwMD0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1648014681),('f5pqM2IgZrLDhZiOD2dhZg8pkpCU9Vlhzf4G6OYr',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNEpSdWpydHI1S3ljd1JZYnc3d3p4OFhDbXMxTjlCWHpvNjRJWURnbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/MTk2ODMyNTgzMD0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1648014740),('FNTfy4NylOeubL2moVc1zSAwGWooIR97Lsv1fa8n',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiMDFaeFFjUnl1Rkl0Z1BQYXRBUEdIdEp4dDVzODNpUUNGWnUyNDdJRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/NzY4ODU1NDk0PSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1648014686),('gM5jqw95fNHZTK3l2mbiUoyiAbquMTPseUCxjdJI',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiMm4yNVBQNGg0TWk5U0c5Wk4wN0VtME1Cd3l3aUdNTjM1UGxKUUFaSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/MzE0MTA2OTQxPSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1648014686),('hACCpqxlVd6bgvLIFkdBCB83OrXP5xGtRaEii3Kx',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiU3JZSzRlRThWZWVxMHhTcW1waFJzeGs0dm9XV2Uzd1hnZGxBVUhSdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/MTQ5NDgwMzcyPSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1648014678),('HmCBNeSABn5d2cD7LmlI9BbeO76JDaXYPIk9bK5R',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiYkxVb1BNWnMyVm43ODdjV2c0SHBxYVhJQ2dCQUZRWElyeDBYUDZ6diI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/OTI3Nzk2MDU5PSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1648014688),('HPaSMeV6Xj3SGc6u4jePZWmaffgFQX1TtDsFDEVx',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiRUhHNEpLMHJrU2pObWtaNGQ5SGxTbkVMdzNuOU52TklzR0VBM2l3eCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/ODU1NDQ4OTY4PSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1648014686),('j5bWojmR8n41zLeHyotyAJH1TxpjglmvKAG4BBOW',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiWUl2WjVsSUlPUkFmbFBkSmUyeTF6RkEwcklPY01laHl5RkpuVVZkWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/MTUyOTM3OTQ1Nj0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1648014682),('jbrNzBV1gMgdXZ0UDJMBpIwd4PAUCZURXXW92dfp',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoieUk4anptczZVNXhvQU83dXZDME00dUphV1MwQWhEcXFEZG0ybVpQayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/MTU5NjQ0NjIyNz0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1648014684),('jcaUHrQVHgs0edxF4S0HyrGNK3Uxz0uIgrWio0se',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNDhHbDc0Z0E0WlhsTEVZYXJ2VFBnbXhHa2lTTVhNbkg0eFRpVWZWVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/MTY1MzI4NDY5Mj0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1648014671),('noL2ABhMDYICAI99CkyqFIkB5p0ChxzqvtXwjhcJ',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiSWhWYlh0bHhXaXJqWTVZazRhQnBRUjQwZnRNU3ZDdkpFYW84UHltTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/NTM0OTIzNDY9Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1648014681),('Pil0Dkbh2AWGXVu4OGPzMXMljBmvPUPHcqIoQsAW',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoidjdVM1RUVU1UQ1NZN2dWalE1WnZaaDM3TTdHSjY3Z0JCTnVrcDg2cSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/MTg4NDIwNTk4Nj0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1648014665),('qB0DyiK3nay80W1B8RmR1gbEeKv89tc8BZ8zu7Ku',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiV1U0ektCWjkwcFN3QXJ1dG1qaFFuMUYzMHNyeHppNjA4cnNtVXB3MyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/MTE1OTU0ODUxNj0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1648014662),('r8FyuJezMzmPGEdEhQ75rnzFi9et1mjyUJSzgeep',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiN1BUQjltV0xRbmxTcVdpMFZIdEpVTUxXbEREYzFlWEIwVk82Skx2YSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/MTEzMjM3MDE3ND0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1648014670),('SMu3foQkBR4uVi3nVIhbzkhTzvMNQx5GSKvWH2Yt',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNE9uSWZXdElrRUxPb05PU3VobXhqZE15OFV6UUFYZWVkRFcxNFdsciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/MTExMTM3OTI0Nz0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1648014676),('sQDwfpjjEqgalla8ccJ6r3YsRHS5NyqqMM9BuFyy',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoidDJXdHRsY2VGT1hYMVlldWp0d3BOdmQyU0NIa3UwZDR1SEhHakpZOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/MTExOTE4Njc5Nz0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1648014678),('U0ObtS92DJkkvIwWcTijmOVgRr2wpoERCTL54b0m',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiY3ZnWE9WS0N3eHo3aWFCd1VhMFEzV1paSzhJNXVqSXR3U0pnRzg2SSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=',1648014802),('ws0d62b8U0Ncx5WrT7tBV8nd2PFyUnuyYIxvkmFn',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:103.0) Gecko/20100101 Firefox/103.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoieHVVd2VSMFVWbDU1QnNlaTVWNURrWTJIVDJRanpmT050aXFLWFJUWiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=',1662369759),('wumMHzrLxgmZ3EvqXDq6580JHPQJxw76v08maBu0',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiR0w2dXI0SWg5NWh4RWZBS0pHS2lsS3BEVnRsU0JabTY2djh1bHVuYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/MTk5MTkwMzEwMT0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1648014660),('WxHPfxBjPTChdcKGsFQiryqAygKYDv6dXH3WoQin',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiWVBna3BtUFdkN2xQTzUyZjVLUmkwQ0QyQk9DYlpLNE1kb1VObWJSciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/NzQ3MDkxNTY0PSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1648014682),('Z3A2T0SIFi23PnKWIMNNhI0wgSqgfz0w4R3xi5pP',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTlFLOGpjaktvNlM1SEdxanNaUXNjQ2ZXbnlycFN6VnVLMEs1Q2s2cSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/MTcxODIxNDI0OT0iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1648014608),('ZshIHJ01CliUfID2iPpOloyy91cHaeRdUuyk6RVO',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNFN5VEZ5cTBXc0tzTXg5MVBQWWgzU0JMOEdxMWQxMFJzektVb2x1eCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/NDQ5MzExNzE1PSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1648014675),('ZW2Fl67DSt4RAGd6oNxUqAxS5HGg7SRTW6EnVJ1w',NULL,'127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:98.0) Gecko/20100101 Firefox/98.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiSXpOTHZuS05vNVNYUm9PSVlQOUNCU1J5dHhaTlJ5a1RtVmFQVjRYSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/OTQ5ODI1Njc1PSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1648014674);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type_annonces`
--

DROP TABLE IF EXISTS `type_annonces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `type_annonces` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `lib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type_annonces`
--

LOCK TABLES `type_annonces` WRITE;
/*!40000 ALTER TABLE `type_annonces` DISABLE KEYS */;
INSERT INTO `type_annonces` VALUES (1,'A vendre','2021-11-14 18:23:36','2021-11-14 18:23:36'),(2,'A louer','2021-11-14 18:23:42','2021-11-14 18:23:42');
/*!40000 ALTER TABLE `type_annonces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type_biens`
--

DROP TABLE IF EXISTS `type_biens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `type_biens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `lib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type_biens`
--

LOCK TABLES `type_biens` WRITE;
/*!40000 ALTER TABLE `type_biens` DISABLE KEYS */;
INSERT INTO `type_biens` VALUES (1,'Maison','2021-11-14 18:23:15','2021-11-14 18:23:15'),(2,'Appartement','2021-11-14 18:23:22','2021-11-14 18:23:22'),(3,'Studio','2021-11-14 18:23:29','2021-11-14 18:23:29');
/*!40000 ALTER TABLE `type_biens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin3','admin3@immo.com',NULL,'$2y$10$yFhE9RQE3vt30laNeJGH4uapx65Wbvx.jm.2wyd3a9iJH889gtM6C',NULL,NULL,NULL,NULL,NULL,'2021-11-14 18:22:01','2021-11-14 18:22:01');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-05 10:57:57
