-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.11-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para ambgesbd
CREATE DATABASE IF NOT EXISTS `ambgesbd` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `ambgesbd`;

-- Volcando estructura para tabla ambgesbd.certificado
CREATE TABLE IF NOT EXISTS `certificado` (
  `IdCertificado` int(11) NOT NULL AUTO_INCREMENT,
  `Modelo` mediumtext DEFAULT NULL,
  `Img` mediumtext DEFAULT NULL,
  PRIMARY KEY (`IdCertificado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla ambgesbd.certificado: ~0 rows (aproximadamente)
DELETE FROM `certificado`;
/*!40000 ALTER TABLE `certificado` DISABLE KEYS */;
/*!40000 ALTER TABLE `certificado` ENABLE KEYS */;

-- Volcando estructura para tabla ambgesbd.participante
CREATE TABLE IF NOT EXISTS `participante` (
  `IdCliente` int(11) NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(200) DEFAULT NULL,
  `Apellidos` varchar(200) DEFAULT NULL,
  `DNI` varchar(200) DEFAULT NULL,
  `Celular` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `FechaEmi` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`IdCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla ambgesbd.participante: ~0 rows (aproximadamente)
DELETE FROM `participante`;
/*!40000 ALTER TABLE `participante` DISABLE KEYS */;
/*!40000 ALTER TABLE `participante` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
