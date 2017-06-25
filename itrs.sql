-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-06-2017 a las 12:05:47
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `itrs`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact_request`
--

CREATE TABLE `contact_request` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `subject` varchar(256) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` varchar(256) NOT NULL,
  `ord` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `course`
--

INSERT INTO `course` (`id`, `active`, `name`, `description`, `ord`) VALUES
(1, 1, 'course.name.php', 'course.desc.php', 0),
(2, 1, 'course.name.angular', 'course.desc.angular', 1),
(3, 1, 'course.name.php', 'course.desc.php', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu_item`
--

CREATE TABLE `menu_item` (
  `id` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `txt` varchar(256) NOT NULL,
  `href` varchar(512) NOT NULL,
  `target` varchar(16) NOT NULL,
  `ord` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `menu_item`
--

INSERT INTO `menu_item` (`id`, `active`, `txt`, `href`, `target`, `ord`) VALUES
(1, 1, 'menu.name.home', '', '_self', 0),
(2, 1, 'menu.name.contact', 'contact/', '_self', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contact_request`
--
ALTER TABLE `contact_request`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menu_item`
--
ALTER TABLE `menu_item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contact_request`
--
ALTER TABLE `contact_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `menu_item`
--
ALTER TABLE `menu_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
