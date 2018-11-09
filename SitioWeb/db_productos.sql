-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2018 a las 17:04:13
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

CREATE database db_productos;

use db_productos;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_productos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`, `descripcion`) VALUES
(4, 'Mates', 'Varios tipos de mates'),
(5, 'Termos', 'Contenedores para mantener el agua caliente'),
(6, 'Yerberas', 'Yerberas de todo tipo. Metal. Medera. Cuero.'),
(7, 'Materas', 'Materas de todo tipo y materiales para llevar tu equipo de mate a todos lados.'),
(8, 'Combos', 'Promociones de equipos de Mate Completos.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id_imagen` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id_imagen`, `id_producto`, `url`) VALUES
(9, 20, 'images/5be27b3eea797.jpg'),
(10, 20, 'images/5be27b3eecbcf.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `precio` double NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `id_categoria`, `nombre`, `categoria`, `precio`, `descripcion`) VALUES
(12, 4, 'Mate - Alpaca Galloneada tres patas', 'Mates', 1050, 'Mate de calabaza, alpaca cincelada en base y boquilla con tres patas. También color al natural.'),
(13, 4, 'Mate - Boquilla Galloneada', 'Mates', 960, 'Mate de calabaza, alpaca cincelada en la boquilla.'),
(14, 4, 'Mate - Alpaca trabajada', 'Mates', 760, 'Mate de calabaza, alpaca cincelada en base y boquilla.'),
(15, 4, 'Mate Base', 'Mates', 912, 'MATE BASE Y VIROLA TEJIDO MEDIO FINO'),
(16, 6, 'Yerbera chica de lona', 'Yerberas', 441, 'YERBERA REDONDA CHICA FORRADA EN LONA ENVEJECIDA'),
(17, 4, 'Mate de Algarrobo', 'Mates', 528, 'MATE DE ALGARROBO BAJO CON ALPACA\r\n'),
(18, 5, 'Termo Bala', 'Termos', 1530, 'TERMO BALA FLYING EAGLE 1/2 LITRO'),
(19, 5, 'Termo Forrado', 'Termos', 2100, 'TERMO SPINIT BALA DE 1 LITRO FORRADO'),
(20, 5, 'Termo Stanley', 'Termos', 2890, 'TERMO STANLEY ADVENTURE DE 500 ML'),
(21, 7, 'Porta Termo Mochila', 'Materas', 5250, 'PORTA TERMO QUEBRADO MOCHILA, DE CUERO.'),
(22, 7, 'Porta Termo con bolsillos', 'Materas', 6580, 'PORTA TERMO CON 2 BOLSILLOS GRANDES PARA TERMO STANLEY.'),
(23, 8, 'Adventurer', 'Combos', 2000, 'Mate Base + Termo Bala');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `admin`, `nombre`, `pass`) VALUES
(1, 1, 'pepe', '$2y$10$si8oRTDUH5OhitHUNjmMi.TkFmnaQ5fJGITzoFqNyIeLwkiQVA.wG'),
(3, 1, 'pepo', '$2y$10$sROsY1Dxj4O/EbbYDHX9XOVeWHCDlFHbfAJZhhU0hrLBREmszIZ8S');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id_imagen`),
  ADD KEY `fk_producto` (`id_producto`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `fk_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `fk_producto` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
