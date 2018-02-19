-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-02-2018 a las 21:02:37
-- Versión del servidor: 5.6.39
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `slot`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pets`
--

CREATE TABLE `pets` (
  `id_pet` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `id_specie` int(11) NOT NULL,
  `sex` varchar(1) NOT NULL,
  `birth_date` date DEFAULT NULL,
  `death_date` date DEFAULT NULL,
  `creation_date` datetime NOT NULL,
  `observation` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pets`
--

INSERT INTO `pets` (`id_pet`, `name`, `id_specie`, `sex`, `birth_date`, `death_date`, `creation_date`, `observation`) VALUES
(1, 'mia', 2, 'f', '2013-06-06', NULL, '2018-02-16 00:00:00', 'ss'),
(3, 'negra', 3, 'm', '2016-12-04', '2018-02-10', '2018-02-04 00:00:00', 'muerta'),
(5, 'Marcelo Barroso', 2, 'f', '2014-02-25', '2018-01-09', '2018-02-16 00:00:00', 'qweq'),
(9, 'preueba final', 5, 'm', '2016-06-15', NULL, '2018-02-16 00:00:00', 'prueba'),
(10, 'final ', 6, 'm', '2009-06-05', NULL, '2018-02-16 00:00:00', 'da1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `species`
--

CREATE TABLE `species` (
  `id_specie` int(11) NOT NULL,
  `name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `species`
--

INSERT INTO `species` (`id_specie`, `name`) VALUES
(2, 'perro'),
(3, 'gato'),
(4, 'ave'),
(5, 'conejo'),
(6, 'hamster');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id_pet`),
  ADD KEY `id_specie` (`id_specie`);

--
-- Indices de la tabla `species`
--
ALTER TABLE `species`
  ADD PRIMARY KEY (`id_specie`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pets`
--
ALTER TABLE `pets`
  MODIFY `id_pet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `species`
--
ALTER TABLE `species`
  MODIFY `id_specie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pets`
--
ALTER TABLE `pets`
  ADD CONSTRAINT `pets_ibfk_1` FOREIGN KEY (`id_specie`) REFERENCES `species` (`id_specie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
