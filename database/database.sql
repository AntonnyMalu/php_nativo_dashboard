-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para dashboard
CREATE DATABASE IF NOT EXISTS `dashboard` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `dashboard`;

-- Volcando estructura para tabla dashboard.parametros
CREATE TABLE IF NOT EXISTS `parametros` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `tabla_id` int DEFAULT NULL,
  `valor` text COLLATE utf8mb4_spanish_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla dashboard.parametros: ~0 rows (aproximadamente)
INSERT INTO `parametros` (`id`, `nombre`, `tabla_id`, `valor`) VALUES
	(1, 'el nombre', 1, '122');

-- Volcando estructura para tabla dashboard.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `token` text COLLATE utf8mb4_spanish_ci,
  `path` text COLLATE utf8mb4_spanish_ci,
  `role` int NOT NULL DEFAULT '0',
  `role_id` int DEFAULT '0',
  `permisos` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci,
  `estatus` int NOT NULL DEFAULT '1',
  `band` int NOT NULL DEFAULT '1',
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `delete_at` date DEFAULT NULL,
  `dispositivo` int DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla dashboard.users: ~18 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `password`, `telefono`, `token`, `path`, `role`, `role_id`, `permisos`, `estatus`, `band`, `created_at`, `updated_at`, `delete_at`, `dispositivo`) VALUES
	(1, 'Yonathan Castillo  ', 'leothan522@gmail.com', '$2y$10$j2CQjOjBzW9XIoBDU8oNYu35KbNI7abODSvohefPy/kaAGWPC63Aq', '(0424) 338-66.00', NULL, NULL, 100, 0, NULL, 1, 1, '2023-06-10', NULL, NULL, 0),
	(4, 'Antonny  Maluenga ', 'antonnymalu15@gmail.com', '$2y$10$vED3Tv7hYNvgtstnEWzrFOICRAorvZyZO.k.GDRw53d0fCegkXvAW', '(0412) 199-56.47', NULL, NULL, 100, 0, NULL, 1, 1, '2023-06-20', '2023-07-06', NULL, 0),
	(5, 'Gabriel   35', 'gabrielmalu15@gmail.com', '$2y$10$J8tIe9YPmX7joQSZeSebq.97uszcBZdHv/0WhLvQ7WOvW1J.lPMUO', '(0412) 199-56.47', NULL, NULL, 0, 0, NULL, 0, 0, '2023-07-03', '2023-07-07', NULL, 0),
	(6, 'Manuel 89  ', 'manuel88888@gmail.com', '$2y$10$K8S97J3xEHhD7VUGzcgCReyPItJVVS8E5es7MvqTevQKwSE2rpIgS', '(8888) 888-88.88', NULL, NULL, 1, 0, NULL, 1, 0, '2023-07-07', '2023-07-07', NULL, 0),
	(7, 'antonny   ', 'antonnymalu95@gmail.com', 'zfVX9bNrrS', '(0412) 199-56.47', NULL, NULL, 0, 0, NULL, 0, 1, '2023-07-07', NULL, NULL, 0),
	(8, 'juan   123', 'juan@gmail.com', 'A9sYJALOAi', '(0215) 856-41.88', NULL, NULL, 0, 0, NULL, 1, 0, '2023-07-07', '2023-07-07', NULL, 0),
	(9, 'pedro   ', 'pedro@gmail.com', '$2y$10$SpJ9Zsp4xH4lOVKaNOR33e7gApWf.fhVIKRSp46UO.nOFrNFGaFs2', '(0412) 589-65.36', NULL, NULL, 1, 0, NULL, 0, 1, '2023-07-07', NULL, NULL, 0),
	(10, 'manuel   ', 'manuel2@gmail.com', '$2y$10$mbFU7.PymYD0phYIaW3kKODcIDSwr52lABjtK7hW2hfwTgbttrDb.', '(0214) 545-81.58', NULL, NULL, 1, 0, NULL, 1, 1, '2023-07-07', NULL, NULL, 0),
	(11, 'juan   ', 'juanjose@gmail.com', '$2y$10$0oxq1CzA/92Q8p2OWNRiouQRsj0V6USSHNoTobd8THYnm9NKPRbeu', '(0412) 589-65.44', NULL, NULL, 1, 0, NULL, 1, 1, '2023-07-07', NULL, NULL, 0),
	(12, 'angel   ', 'angel@gmail.com', '$2y$10$6b34XSbZ9Kdme2AcNPm9L.YJJRQ1hzeFeiJdnCPexliP.BJLxVtLa', '(0412) 568-96.32', NULL, NULL, 0, 0, NULL, 1, 1, '2023-07-07', NULL, NULL, 0),
	(13, 'miguel   ', 'miguel@gmail.com', '$2y$10$uUwqqEB3SSWjmpwKbEPrsOD92..Rz6olFzydwzdndEyAgFp858jKW', '(0414) 568-95.62', NULL, NULL, 0, 0, NULL, 1, 1, '2023-07-07', NULL, NULL, 0),
	(14, 'antonny2   458', 'antonny458@gmail.com', '$2y$10$vDNlWsp1OSOj6ZgXUQKv4uXpjQPHr6adqSh8FeLCl8GPFXyyEYHlW', '(8888) 888-88.88', NULL, NULL, 1, 0, NULL, 1, 0, '2023-07-07', '2023-07-07', NULL, 0),
	(15, 'daniel   ', 'daniel@gmail.com', '$2y$10$tPHNBif0CO.Okl5Nw69zTuQgNBocbUrAJGVxjkjIPnpZz6Kp6pH7m', '(0412) 589-63.56', NULL, NULL, 0, 0, NULL, 1, 1, '2023-07-07', NULL, NULL, 0),
	(16, 'ana1   ', 'ana@gmail.com', '$2y$10$4V4nAjE.P3XX3B2RGiESZ.n9uZUudYDU.AhxbX8oZqpAjovi6uas.', '(0412) 458-96.36', NULL, NULL, 0, 0, NULL, 1, 1, '2023-07-07', NULL, NULL, 0),
	(17, 'andres 77  ', 'andres@gmail.com', '$2y$10$MR4mNq4I6Sba79L7h3thye.O9Y.LVFBNrWahZuvNQuc.T61B5eZBC', '(7777) 777-77.77', NULL, NULL, 0, 0, NULL, 1, 1, '2023-07-07', '2023-07-07', NULL, 0),
	(18, 'sara   ', 'sara@gmail.com', '$2y$10$eChTbO9hVFXDiqHBrtmJ0OsGV3ruGkDfCptOIzl.E3mvVZ817Y0m6', '(0412) 458-96.36', NULL, NULL, 0, 0, NULL, 1, 1, '2023-07-07', NULL, NULL, 0),
	(19, 'manuela   ', 'manuela@gmail.com', '$2y$10$0CAVBjYegn2P6z4lHPUTGedvtV3BrAU1gy7MnnQ2QXpDFijMq4Hii', '(0412) 589-63.56', NULL, NULL, 0, 0, NULL, 1, 1, '2023-07-07', NULL, NULL, 0),
	(20, 'adriana   ', 'adriana@gmail.com', '$2y$10$8UDyduTF8rzGEkw.4NFjBexfHbVr0hWC.EkOdvE0zJbFBNMxjQ59e', '(0145) 425-57.89', NULL, NULL, 1, 0, NULL, 1, 1, '2023-07-07', NULL, NULL, 0),
	(21, 'alfredo   ', 'alfr4edo@gmail.com', '$2y$10$kFEGfUbD0SsmOFx4aMeYLOMlsR9q5eocsF8Vh7CEwPnTecHy3ZQWK', '(0415) 202-56.45', NULL, NULL, 0, 0, NULL, 1, 1, '2023-07-07', NULL, NULL, 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
