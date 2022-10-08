-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2022 a las 23:35:06
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
  `descripcion` text NOT NULL,
  `valorizacion` varchar(200) NOT NULL,
  `peso` varchar(20) NOT NULL,
  `precio` varchar(20) NOT NULL,
  `fk_id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id`, `logo`, `nombre`, `fecha_lanzamiento`, `descripcion`, `valorizacion`, `peso`, `precio`, `fk_id_categoria`) VALUES
(1, 'https://i.ibb.co/pW00PVp/TERRARIA-LOGO.jpg', 'Terraria', '16 MAY 2011', '¡Cava, lucha, explora, construye! Con este juego de aventuras repleto de acción nada es imposible. ¡Pack de Cuatro también disponible!', '83', ' 200 MB ', 'ARS$ 129,99', 2),
(2, 'https://i.ibb.co/9vhBLp1/RUST-LOGO.jpg', 'Rust ', '8 FEB 2018', 'El único objetivo en Rust es sobrevivir. Todo quiere que mueras: la vida silvestre de la isla y otros habitantes, el medio ambiente, otros sobrevivientes. Haz lo que sea necesario para durar otra noche', '69', '10 GB', 'ARS$ 2.440,99', 2),
(3, 'https://i.ibb.co/nMtB6Yw/RAFT-LOGO.jpg', 'Raft', ' 20 JUN 2022', '¡Raft te sumerge a ti y a tus amigos en una épica aventura oceánica! ¡Solos o juntos, los jugadores luchan para sobrevivir en un peligroso viaje a través de un vasto mar! Recoge escombros, busca arrecifes y construye tu propia casa flotante, ¡pero ten cuidado con los tiburones devoradores de hombres!', '78', '10 GB', 'ARS$ 224,99', 2),
(4, 'https://i.ibb.co/Gkjf4vv/VALHEIM-LOGO.jpg', 'Valheim', '2 FEB 2021', 'Un brutal juego de supervivencia y exploración multijugador, ambientado en un purgatorio generado de forma procedural e inspirado en la cultura vikinga. ¡Lucha, construye y conquista tu viaje en una saga digna de la bendición de Odin!', '80', '1 GB', 'ARS$ 799,00', 2),
(5, 'https://i.ibb.co/znfw2jM/CYBER-LOGO.jpg', 'Cyberpunk 2077', '9 DIC 2020', 'Cyberpunk 2077 es un RPG de aventura y acción de mundo abierto ambientado en el futuro sombrío de Night City, una peligrosa megalópolis obsesionada con el poder, el glamur y las incesantes modificaciones corporales.', '86', '70 GB', 'ARS$ 2.199,00', 1),
(6, 'https://i.ibb.co/FxzwNr1/APEX-LOGO.jpg', 'Apex Legends', '5 NOV 2020', 'Apex Legends es el galardonado juego gratuito de acción en primera persona de Respawn Entertainment. Domina un elenco creciente de leyendas con potentes habilidades. Juego estratégico basado en pelotones y jugabilidad innovadora en la nueva evolución del Battle Royale', '88', '56 GB', 'Free to Play', 1),
(7, 'https://i.ibb.co/SRxZYPR/CSGO-LOGO.jpg', 'Counter-Strike: Global Offensive', '21 AGO 2012', 'Counter-Strike: Global Offensive (CS:GO) amplía el juego de acción por equipos del que fue pionero cuando salió hace más de 20 años. CS:GO incluye nuevos mapas, personajes, armas y modos de juego, y ofrece versiones actualizadas del contenido clásico de Counter-Strike (de_dust2, etc.)', '83', ' 15 GB', 'Free to Play ', 1),
(8, 'https://i.ibb.co/F8spBbz/DESTINY-LOGO.jpg', 'Destiny 2', ' 1 OCT 2019', 'Destiny 2 es un MMO de acción con un mundo único y dinámico al que tus amigos y tú os podéis unir en cualquier momento y desde cualquier lugar de forma totalmente gratuita.', '83', '105 GB', 'Free to Play', 1),
(9, 'https://i.ibb.co/b5dx9KZ/WARF-LOGO.jpg', 'WARFRAME', '25 MAR 2013', 'Despierta como un guerrero imparable y lucha junto a tus amigos en este juego de acción gratuito en línea y basado en historias.', '69', '35 GB', 'Free to Play', 1),
(14, 'https://i.ibb.co/r6JGyCz/AOE-LOGO.jpg', 'Age of Empires II', '14 NOV 2019', 'Age of Empires II: Definitive Edition incluye \"Los últimos khanes\", que incorpora 3 campañas y 4 civilizaciones nuevas. Las frecuentes actualizaciones contienen eventos, contenido adicional, nuevos modos de juego (¡como el reciente modo cooperativo!) y funciones mejoradas.', '84', ' 30 GB', 'ARS$ 299,00', 3),
(15, 'https://i.ibb.co/xMdk6TX/CIV-LOGO.jpg', 'Sid Meier’s Civilization VI', '21 OCT 2016', 'Civilization VI es la nueva entrega de la galardonada franquicia Civilization. Expande tu imperio, haz avanzar tu cultura y enfréntate a los mejores líderes de la historia. ¿Podrá tu civilización superar la prueba del tiempo?', '88', '12 GB', 'ARS$ 75,59', 3),
(16, 'https://i.ibb.co/dP0pCPT/CK2-LOGO.jpg', 'Crusader Kings III', ' 1 SEP 2020', 'Ama, lucha, planea y reclama la grandeza. Determina el legado de tu casa nobiliaria en la gran estrategia en expansión de Crusader Kings III. La muerte solo es el comienzo mientras lideras el linaje de tu dinastía en esta completa simulación realista de la Edad Media.', '91', '8 GB', 'ARS$ 701,99', 3),
(17, 'https://i.ibb.co/jh3pcGd/AC-LOGO.jpg', 'Assetto Corsa', ' 19 DIC 2014', 'Assetto Corsa v1.16 presenta la nueva pista escaneada con láser \"Laguna Seca\", 7 autos nuevos, ¡entre los que se encuentra el tan esperado Alfa Romeo Giulia Quadrifoglio! ¡Consulte el registro de cambios para obtener más información!', '85', '15 GB', 'ARS$ 224,99', 4),
(18, 'https://i.ibb.co/hd1HfLv/DIRT-LOGO.jpg', 'DiRT Rally 2.0', ' 25 FEB 2019', ' 100 GB', '84', '100 GB', 'ARS$ 279,99', 4),
(19, 'https://i.ibb.co/k8cjNnn/FH5-LOGO.jpg', 'Forza Horizon 5', ' 9 NOV 2021', '¡La aventura Horizon definitiva te espera! Explora los vibrantes paisajes de mundo abierto en constante evolución situado en México, y disfruta de una acción de conducción ilimitada y divertida con cientos de los mejores coches del mundo.', '84', ' 110 GB', 'ARS$ 3.599,00', 4),
(20, 'https://i.ibb.co/qWhgQrZ/NSF-LOGO.jpg', 'Need for Speed™ Hot Pursuit Remastered', ' 6 NOV 2020', 'Siente la emoción de la persecución y la adrenalina de escapar sobre ruedas con los coches de mayor rendimiento del mundo en Need for Speed™ Hot Pursuit Remastered, un juego de carreras trepidante y competitivo.', '74', ' 45 GB', 'ARS$ 1.799,00', 4),
(21, 'https://i.ibb.co/fDT8WGC/TWWH-LOGO.jpg', 'Total War: WARHAMMER III', ' 17 FEB 2022', 'El final cataclísmico de la trilogía de Total War™: WARHAMMER® ha llegado. Reagrupa a tus fuerzas y adéntrate en el Reino del Caos, una dimensión de terrores horripilantes en la que se decidirá el destino del mundo. ¿Conquistarás a tus demonios... o los dirigirás?', '86', ' 120 GB', 'ARS$ 3.920,99', 3);

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
