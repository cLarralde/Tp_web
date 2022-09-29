-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-09-2022 a las 23:55:36
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gameroom`
--
CREATE DATABASE IF NOT EXISTS `gameroom` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `gameroom`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'accion'),
(2, 'supervivencia'),
(3, 'estrategia'),
(4, 'carreras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `id` int(11) NOT NULL,
  `logo` mediumtext NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `fecha_lanzamiento` varchar(20) NOT NULL,
  `descripsion` text NOT NULL,
  `valorización` varchar(200) NOT NULL,
  `peso` varchar(20) NOT NULL,
  `precio` varchar(20) NOT NULL,
  `fk_id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id`, `logo`, `nombre`, `fecha_lanzamiento`, `descripsion`, `valorización`, `peso`, `precio`, `fk_id_categoria`) VALUES
(1, 'https://drive.google.com/file/d/16_SlB3otbPzk0sn-aDPNV28jeHRgXVVv/view?usp=sharing', 'Terraria', '16 MAY 2011', '¡Cava, lucha, explora, construye! Con este juego de aventuras repleto de acción nada es imposible. ¡Pack de Cuatro también disponible!', '83', ' 200 MB ', 'ARS$ 129,99', 2),
(2, 'https://drive.google.com/file/d/1Uids2hZ6TmirTVKSUnCVufqFVxJmLGye/view?usp=sharing', 'Rust ', '8 FEB 2018', 'El único objetivo en Rust es sobrevivir. Todo quiere que mueras: la vida silvestre de la isla y otros habitantes, el medio ambiente, otros sobrevivientes. Haz lo que sea necesario para durar otra noche', '69', '10 GB', 'ARS$ 2.440,99', 2),
(3, 'https://drive.google.com/file/d/1-39XiDnDWlWrp_tf3-xTEKqmDgMyp-Ke/view?usp=sharing', 'Raft', ' 20 JUN 2022', '¡Raft te sumerge a ti y a tus amigos en una épica aventura oceánica! ¡Solos o juntos, los jugadores luchan para sobrevivir en un peligroso viaje a través de un vasto mar! Recoge escombros, busca arrecifes y construye tu propia casa flotante, ¡pero ten cuidado con los tiburones devoradores de hombres!', '78', '10 GB', 'ARS$ 224,99', 2),
(4, 'https://drive.google.com/file/d/1KSrsFz08GkZvlBSVbX9U4pD112t0VFYH/view?usp=sharing', 'Valheim', '2 FEB 2021', 'Un brutal juego de supervivencia y exploración multijugador, ambientado en un purgatorio generado de forma procedural e inspirado en la cultura vikinga. ¡Lucha, construye y conquista tu viaje en una saga digna de la bendición de Odin!', '80', '1 GB', 'ARS$ 799,00', 2),
(5, 'https://drive.google.com/file/d/16_SlB3otbPzk0sn-aDPNV28jeHRgXVVv/view?usp=sharing', 'Cyberpunk 2077', '9 DIC 2020', 'Cyberpunk 2077 es un RPG de aventura y acción de mundo abierto ambientado en el futuro sombrío de Night City, una peligrosa megalópolis obsesionada con el poder, el glamur y las incesantes modificaciones corporales.', '86', '70 GB', 'ARS$ 2.199,00', 1),
(6, 'https://drive.google.com/file/d/1wuaOSRauQp69hReIqC1Oe-mLtb3vD7sj/view?usp=sharing', 'Apex Legends', '5 NOV 2020', 'Apex Legends es el galardonado juego gratuito de acción en primera persona de Respawn Entertainment. Domina un elenco creciente de leyendas con potentes habilidades. Juego estratégico basado en pelotones y jugabilidad innovadora en la nueva evolución del Battle Royale', '88', '56 GB', 'Free to Play', 1),
(7, 'https://drive.google.com/file/d/1fpVYMRbBFrWfAxqHKXOkdGf8-P5yxEa9/view?usp=sharing', 'Counter-Strike: Global Offensive', '21 AGO 2012', 'Counter-Strike: Global Offensive (CS:GO) amplía el juego de acción por equipos del que fue pionero cuando salió hace más de 20 años. CS:GO incluye nuevos mapas, personajes, armas y modos de juego, y ofrece versiones actualizadas del contenido clásico de Counter-Strike (de_dust2, etc.)', '83', ' 15 GB', 'Free to Play ', 1),
(8, 'https://drive.google.com/file/d/118ymaG1k4I2QOvjY_GyJSoeu4ShQuNaO/view?usp=sharing', 'Destiny 2', ' 1 OCT 2019', 'Destiny 2 es un MMO de acción con un mundo único y dinámico al que tus amigos y tú os podéis unir en cualquier momento y desde cualquier lugar de forma totalmente gratuita.', '83', '105 GB', 'Free to Play', 1),
(9, 'https://drive.google.com/file/d/1BXKkFYeBtOXCiF8AwaSkvgXq3gMzPUf0/view?usp=sharing', 'WARFRAME', '25 MAR 2013', 'Despierta como un guerrero imparable y lucha junto a tus amigos en este juego de acción gratuito en línea y basado en historias.', '69', '35 GB', 'Free to Play', 1),
(14, 'https://drive.google.com/file/d/1joQkr9Exk9LAE76L-J4V0XRC95dgHy48/view?usp=sharing', 'Age of Empires II: D', '14 NOV 2019', 'Age of Empires II: Definitive Edition incluye \"Los últimos khanes\", que incorpora 3 campañas y 4 civilizaciones nuevas. Las frecuentes actualizaciones contienen eventos, contenido adicional, nuevos modos de juego (¡como el reciente modo cooperativo!) y funciones mejoradas.', '84', ' 30 GB', 'ARS$ 299,00', 3),
(15, 'https://drive.google.com/file/d/1-4gtUZrg3QEQTUsBgK4MB_eLcgvsCi3A/view?usp=sharing', 'Sid Meier’s Civiliza', '21 OCT 2016', 'Civilization VI es la nueva entrega de la galardonada franquicia Civilization. Expande tu imperio, haz avanzar tu cultura y enfréntate a los mejores líderes de la historia. ¿Podrá tu civilización superar la prueba del tiempo?', '88', '12 GB', 'ARS$ 75,59', 3),
(16, 'https://drive.google.com/file/d/1DhJBz4JH52wp9yNBvD7A01XE6FjAK7df/view?usp=sharing', 'Crusader Kings III', ' 1 SEP 2020', 'Ama, lucha, planea y reclama la grandeza. Determina el legado de tu casa nobiliaria en la gran estrategia en expansión de Crusader Kings III. La muerte solo es el comienzo mientras lideras el linaje de tu dinastía en esta completa simulación realista de la Edad Media.', '91', '8 GB', 'ARS$ 701,99', 3),
(17, 'https://drive.google.com/file/d/144EhzzAoxi5apdC1teCyZIvJyKxHZQ9e/view?usp=sharing', 'Assetto Corsa', ' 19 DIC 2014', 'Assetto Corsa v1.16 presenta la nueva pista escaneada con láser \"Laguna Seca\", 7 autos nuevos, ¡entre los que se encuentra el tan esperado Alfa Romeo Giulia Quadrifoglio! ¡Consulte el registro de cambios para obtener más información!', '85', '15 GB', 'ARS$ 224,99', 4),
(18, 'https://drive.google.com/file/d/1i9Emz3Mij3wL8Y1Vp3R2KjgyPjg_0Zv5/view?usp=sharing', 'DiRT Rally 2.0', ' 25 FEB 2019', ' 100 GB', '84', '100 GB', 'ARS$ 279,99', 4),
(19, 'https://drive.google.com/file/d/1OBG_KNR09wFlOIZipandLBnpyCsyKdTF/view?usp=sharing', 'Forza Horizon 5', ' 9 NOV 2021', '¡La aventura Horizon definitiva te espera! Explora los vibrantes paisajes de mundo abierto en constante evolución situado en México, y disfruta de una acción de conducción ilimitada y divertida con cientos de los mejores coches del mundo.', '84', ' 110 GB', 'ARS$ 3.599,00', 4),
(20, 'https://drive.google.com/file/d/17WdkkuXwkqKYNx4sIDRdAeiKW1VDbgTS/view?usp=sharing', 'Need for Speed™ Hot Pursuit Remastered', ' 6 NOV 2020', 'Siente la emoción de la persecución y la adrenalina de escapar sobre ruedas con los coches de mayor rendimiento del mundo en Need for Speed™ Hot Pursuit Remastered, un juego de carreras trepidante y competitivo.', '74', ' 45 GB', 'ARS$ 1.799,00', 4),
(21, 'https://drive.google.com/file/d/1GaLwVQUJKJRnXZFAjQ2pcb4-pJ10_kfd/view?usp=sharing', 'Total War: WARHAMMER III', ' 17 FEB 2022', 'El final cataclísmico de la trilogía de Total War™: WARHAMMER® ha llegado. Reagrupa a tus fuerzas y adéntrate en el Reino del Caos, una dimensión de terrores horripilantes en la que se decidirá el destino del mundo. ¿Conquistarás a tus demonios... o los dirigirás?', '86', ' 120 GB', 'ARS$ 3.920,99', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(28) NOT NULL,
  `password` text NOT NULL,
  `rol` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_categoria` (`fk_id_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD CONSTRAINT `juegos_ibfk_1` FOREIGN KEY (`fk_id_categoria`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
