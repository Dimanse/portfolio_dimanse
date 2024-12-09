-- -------------------------------------------------------------
-- TablePlus 6.0.0(550)
--
-- https://tableplus.com/
--
-- Database: domingo_curbeira
-- Generation Time: 2024-12-09 14:53:04.2890
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


CREATE TABLE `mensajes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `apellidos` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `mensaje` text,
  `fecha` varchar(10) DEFAULT NULL,
  `hora` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `trabajos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `url_github` varchar(60) DEFAULT NULL,
  `url_web` varchar(60) DEFAULT NULL,
  `imagen` varchar(40) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `trabajos` (`id`, `nombre`, `url_github`, `url_web`, `imagen`, `descripcion`) VALUES
(1, 'UpTask', 'https://github.com/Dimanse/UpTask_mvc', 'https://uptask-dimanse.domcloud.dev/', 'uptask.png', 'UpTask, administrador de tareas creado con PHP, mvc y Sass'),
(2, 'AppSalon', 'https://github.com/Dimanse/appsalon-mvc-php', 'https://appsalon-dimanse.domcloud.dev/', 'appsalon.png', 'AppSalon, es una aplicación web para reserva de citas en peluqueria, creada con PHP, mvc y Sass.'),
(3, 'DiabetesApp', 'https://github.com/Dimanse/DiabetesAppPWA', 'https://appdiabetes.domcloud.dev/', 'diabetesapp.png', 'DiabetesApp, es una applicación web para registro médicos creadeo con laravel, mvc, sass y tailwind CSS'),
(4, 'Contador de calorías', 'https://github.com/Dimanse/contadorCalorias', 'https://countercal.netlify.app/', 'contador_calorias.png', 'Contador de calorías es una aplicación web para el registro de ingesta de calorias y registro de calorías quemadas,creado con tailwind CSS, React, TypeScript y contextAPI'),
(5, 'Planificador de Gastos', 'https://github.com/Dimanse/contadorgastos', 'https://adminexpenses.netlify.app/', 'administrador-gastos.png', 'Planificador de gastos es una aplicación creada con React, Typescript, contextAPI y tailwind CSS, donde podras planificar y gestionar tus gastos mensuales'),
(6, 'Asesoria Gastronómica', 'https://github.com/Dimanse/asesoriaGastronomica', 'https://asesoriasjl.netlify.app/', 'asesoria_gastronomica.png', 'J&L Asesorias, es un prototipo para una pagina web estatica para una asesoria gastronómioca, creada con Tailwind CSS, JavaScript y Html.'),
(7, 'Guitar LA', 'https://github.com/Dimanse/carritoGuitar', 'https://guitarlacarritousereducer.netlify.app/', 'guitarla.png', 'Guitar LA, Carrito de la compra para página web de tienda de guitaras hecha con React, Bootstrap y TypeScript.\n ');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;