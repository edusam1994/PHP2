-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-08-2023 a las 05:50:59
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `age` int(10) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `subscribers`
--

INSERT INTO `subscribers` (`id`, `name`, `email`, `age`, `phone`) VALUES
(5, '', '', 0, ''),
(6, '', '', 0, ''),
(7, '', '', 0, ''),
(8, '', '', 0, ''),
(9, '', '', 0, ''),
(10, 'Eduardo', 'ubbububu@gmail.com', 23, ''),
(11, 'Eduardo', 'ubbububu@gmail.com', 23, ''),
(12, 'Daniela ', 'ubbububu@gmail.com', 33, ''),
(13, 'Kevin Sempertegui', 'kevin_lol52@hotmail.', 23, ''),
(14, 'victor', 'jeuj@outlook.com', 23, ''),
(15, 'sam', '', 0, ''),
(16, 'je', 'ubbububu@ihih', 33, ''),
(17, 'Eduardo', 'ubbububu@ihih', 33, ''),
(18, 'j', 'ubbububu@ihih', 23, ''),
(19, 'je', 'ubbububu@ihih', 23, ''),
(20, 'je', 'ubbububu@ihih', 23, ''),
(21, 'je', 'ubbububu@ihih', 23, ''),
(22, 'j', 'ubbububu@ihih', 23, ''),
(23, 'j', 'ubbububu@ihih', 23, ''),
(24, 'j', 'ubbububu@ihih', 23, ''),
(25, '', '', 0, ''),
(26, 'Eduardo', 'ubbububu@ihih', 23, '2334444');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
