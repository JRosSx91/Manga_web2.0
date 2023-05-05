-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:8889
-- Tiempo de generación: 21-06-2017 a las 10:12:50
-- Versión del servidor: 5.5.42
-- Versión de PHP: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `Web Manga`
--
CREATE DATABASE IF NOT EXISTS `Web Manga` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Web Manga`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Categoría`
--

CREATE TABLE `Categoría` (
  `ID_categoria` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Categoría`
--

INSERT INTO `Categoría` (`ID_categoria`, `Nombre`) VALUES
(1, 'Shonen'),
(2, 'Shojo'),
(3, 'Kodomo'),
(4, 'Seinen'),
(5, 'Josei');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Manga`
--

CREATE TABLE `Manga` (
  `ID_manga` int(11) NOT NULL,
  `ID_categoria` int(11) NOT NULL,
  `Año_publicacion` int(11) NOT NULL,
  `Autor` varchar(100) NOT NULL,
  `Título` varchar(100) NOT NULL,
  `Url_manga` varchar(100) NOT NULL,
  `Url_imagen` varchar(100) NOT NULL,
  `Url_thumb` varchar(100) NOT NULL,
  `DateTime` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Manga`
--

INSERT INTO `Manga` (`ID_manga`, `ID_categoria`, `Año_publicacion`, `Autor`, `Título`, `Url_manga`, `Url_imagen`, `Url_thumb`, `DateTime`) VALUES
(14, 1, 1984, 'Akira Toriyama', 'Dragon Ball', '', '', '', '0000-00-00'),
(15, 2, 1998, 'Ken Akamatsu', 'Love Hina', '', '', '', '0000-00-00'),
(16, 1, 1999, 'Masashi Kishimoto', 'Naruto', '', '', '', '0000-00-00'),
(17, 4, 1969, 'Fujiko F. Fujio', 'Doraemon', '', '', '', '0000-00-00'),
(18, 3, 2009, 'Yusuke Murata', 'One-Punch Man', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Manga-User`
--

CREATE TABLE `Manga-User` (
  `ID_manga` int(11) NOT NULL,
  `User` varchar(50) NOT NULL,
  `Fecha` date NOT NULL,
  `Favorito` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `User`
--

CREATE TABLE `User` (
  `User` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Fecha_nacimiento` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `User`
--

INSERT INTO `User` (`User`, `Nombre`, `Apellido`, `Email`, `Fecha_nacimiento`, `Password`) VALUES
('JRosS91', 'Ivan', 'Gomez', 'hazee.1491@gmail.com', '1991-01-30', 'deoxys');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Categoría`
--
ALTER TABLE `Categoría`
  ADD PRIMARY KEY (`ID_categoria`);

--
-- Indices de la tabla `Manga`
--
ALTER TABLE `Manga`
  ADD PRIMARY KEY (`ID_manga`),
  ADD KEY `ID_categoria` (`ID_categoria`);

--
-- Indices de la tabla `Manga-User`
--
ALTER TABLE `Manga-User`
  ADD KEY `ID_manga` (`ID_manga`),
  ADD KEY `User` (`User`);

--
-- Indices de la tabla `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`User`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Categoría`
--
ALTER TABLE `Categoría`
  MODIFY `ID_categoria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `Manga`
--
ALTER TABLE `Manga`
  MODIFY `ID_manga` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Manga`
--
ALTER TABLE `Manga`
  ADD CONSTRAINT `ID_categoria` FOREIGN KEY (`ID_categoria`) REFERENCES `Categoría` (`ID_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `Manga-User`
--
ALTER TABLE `Manga-User`
  ADD CONSTRAINT `ID_manga` FOREIGN KEY (`ID_manga`) REFERENCES `Manga` (`ID_manga`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `User` FOREIGN KEY (`User`) REFERENCES `User` (`User`) ON DELETE CASCADE ON UPDATE CASCADE;
