/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

DROP DATABASE IF EXISTS `dbproyecto`;
CREATE DATABASE IF NOT EXISTS `dbproyecto` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dbproyecto`;

DROP TABLE IF EXISTS `tagenda`;
CREATE TABLE IF NOT EXISTS `tagenda` (
  `codContacto` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `codUser` int(11) NOT NULL,
  PRIMARY KEY (`codContacto`),
  KEY `codUser` (`codUser`),
  CONSTRAINT `FK_tagenda_tusuarios` FOREIGN KEY (`codUser`) REFERENCES `tusuarios` (`codUser`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

DELETE FROM `tagenda`;
/*!40000 ALTER TABLE `tagenda` DISABLE KEYS */;
INSERT INTO `tagenda` (`codContacto`, `firstName`, `lastName`, `email`, `phone`, `codUser`) VALUES
	(1, 'Ana', 'Lovera', 'analovera@gmail.com', '04122084909', 1),
	(2, 'Nelson', 'Portillo', 'nelsonportillo982@gmail.com', '04164117637', 1),
	(3, 'Jose ', 'Daniel', 'josedaniel@gmail.com', '04167654256', 1);
/*!40000 ALTER TABLE `tagenda` ENABLE KEYS */;

DROP TABLE IF EXISTS `tusuarios`;
CREATE TABLE IF NOT EXISTS `tusuarios` (
  `codUser` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `dateBrinday` datetime NOT NULL,
  `logeado` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codUser`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

DELETE FROM `tusuarios`;
/*!40000 ALTER TABLE `tusuarios` DISABLE KEYS */;
INSERT INTO `tusuarios` (`codUser`, `email`, `pass`, `firstName`, `lastName`, `phone`, `genero`, `dateBrinday`, `logeado`) VALUES
	(1, 'nelsonportillo982@gmail.com', '00cbbe8ec9c3b2d71f5401d898c15234', 'Nelson', 'Portillo', '04164117637', 'Masculino', '2000-04-12 00:00:00', 0);
/*!40000 ALTER TABLE `tusuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
