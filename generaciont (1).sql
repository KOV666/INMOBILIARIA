-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2023 a las 20:47:57
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `generaciont`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `sesion` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id`, `sesion`, `nombre`, `precio`) VALUES
(1, '302hgl@gmail.com', '268 San Gabriel St, Winter Springs, FL 32708', '32.000,000 USD'),
(2, 'giaa15851@gmail.com', '268 San Gabriel St, Winter Springs, FL 32708', '32.000,000 USD'),
(3, 'giaa15851@gmail.com', '89 REEDING RIDGE DR W, JACKSONVILLE, FL 32225', '350.000,000 USD'),
(4, '302hgl@gmail.com', '89 REEDING RIDGE DR W, JACKSONVILLE, FL 32225', '350.000,000 USD'),
(5, '302hgl@gmail.com', '911 TYLER ST, JACKSONVILLE, FL 32209', '187.000,000 USD'),
(6, '302hgl@gmail.com', '89 REEDING RIDGE DR W, JACKSONVILLE, FL 32225', '350.000,000 USD'),
(7, '302hgl@gmail.com', '715 NE 12th Ter, Crystal River, FL 34428', '224.900,000 USD'),
(8, '302hgl@gmail.com', '1684 NE 31st Ct, Pompano Beach, FL 33064', '475.000,000 USD'),
(9, '302hgl@gmail.com', '89 REEDING RIDGE DR W, JACKSONVILLE, FL 32225', '350.000,000 USD'),
(10, '302hgl@gmail.com', '89 REEDING RIDGE DR W, JACKSONVILLE, FL 32225', '350.000,000 USD'),
(11, '302hgl@gmail.com', '12420 PECAN HICKORY CT, JACKSONVILLE, FL 32226', '365.000,000 USD'),
(12, '302hgl@gmail.com', '268 San Gabriel St, Winter Springs, FL 32708', '32.000,000 USD'),
(13, '302hgl@gmail.com', '715 NE 12th Ter, Crystal River, FL 34428', '224.900,000 USD'),
(14, '302hgl@gmail.com', '89 REEDING RIDGE DR W, JACKSONVILLE, FL 32225', '350.000,000 USD'),
(15, '302hgl@gmail.com', '911 TYLER ST, JACKSONVILLE, FL 32209', '187.000,000 USD'),
(16, '302hgl@gmail.com', '12420 PECAN HICKORY CT, JACKSONVILLE, FL 32226', '365.000,000 USD'),
(17, '302hgl@gmail.com', '911 TYLER ST, JACKSONVILLE, FL 32209', '187.000,000 USD'),
(18, '302hgl@gmail.com', '911 TYLER ST, JACKSONVILLE, FL 32209', '187.000,000 USD'),
(19, '302hgl@gmail.com', '1684 NE 31st Ct, Pompano Beach, FL 33064', '475.000,000 USD'),
(20, '302hgl@gmail.com', '1684 NE 31st Ct, Pompano Beach, FL 33064', '475.000,000 USD'),
(21, '302hgl@gmail.com', '911 TYLER ST, JACKSONVILLE, FL 32209', '187.000,000 USD'),
(22, '302hgl@gmail.com', '1684 NE 31st Ct, Pompano Beach, FL 33064', '475.000,000 USD'),
(23, '302hgl@gmail.com', '715 NE 12th Ter, Crystal River, FL 34428', '224.900,000 USD'),
(24, '302hgl@gmail.com', '89 REEDING RIDGE DR W, JACKSONVILLE, FL 32225', '350.000,000 USD'),
(25, '302hgl@gmail.com', '12420 PECAN HICKORY CT, JACKSONVILLE, FL 32226', '365.000,000 USD'),
(26, '302hgl@gmail.com', '268 San Gabriel St, Winter Springs, FL 32708', '32.000,000 USD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrarse`
--

CREATE TABLE `registrarse` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registrarse`
--

INSERT INTO `registrarse` (`id`, `nombre`, `apellido`, `email`, `password`) VALUES
(1, 'kevin', 'nini', 'kevnini@gmail.com', '123'),
(3, 'Andres', 'Wasilczuk', '302hgl@gmail.com', '666'),
(4, 'Andres', 'Wasel', 'giaa15851@gmail.com', '666'),
(5, 'Andres', 'tusan', 'masqueradewaltz60@gmail.com', '666');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reseña`
--

CREATE TABLE `reseña` (
  `id` int(11) NOT NULL,
  `reseña` text NOT NULL,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reseña`
--

INSERT INTO `reseña` (`id`, `reseña`, `user`) VALUES
(1, 'Esta Bueno', '302hgl@gmail.com'),
(2, 'zaza', '302hgl@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion`
--

CREATE TABLE `sesion` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sesion`
--

INSERT INTO `sesion` (`id`, `email`, `password`) VALUES
(1, 'masqueradewaltz60@gmail.com', '666');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` text NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `ruta` text NOT NULL,
  `estado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`id`, `nombre`, `precio`, `descripcion`, `ruta`, `estado`) VALUES
(1, '268 San Gabriel St, Winter Springs, FL 32708', '32.000,000 USD', '¡Tu Casa de Sueños te espera en Winter Springs! ¡Bienvenido a su oasis completamente renovado en uno de los barrios y distritos escolares más deseables! ¡Esta casa unifamiliar de 3 dormitorios y 2 bañ', 'https://photos.zillowstatic.com/fp/5b5bbe7b5e16e75eaf2dc74eeb176511-cc_ft_960.webp', 0),
(2, '268 San Gabriel St, Winter Springs, FL 32708', '350.000,000 USD', '¡Tu Casa de Sueños te espera en Winter Springs! ¡Bienvenido a su oasis completamente renovado en uno de los barrios y distritos escolares más deseables! ¡Esta casa unifamiliar de 3 dormitorios y 2 bañ', 'https://photos.zillowstatic.com/fp/d8b3507578c2f271d5596fd1aa83ed09-cc_ft_960.webp', 0),
(3, '911 TYLER ST, JACKSONVILLE, FL 32209', '24.000,000USD', 'Esta encantadora casa ofrece una paleta de colores naturales\r\n                  en todo, proporcionando un ambiente tranquilo y acogedor. El\r\n                  espacio de vida flexible incluye otras h', 'https://photos.zillowstatic.com/fp/b733448e8095f61c612e73345427a914-cc_ft_960.webp', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registrarse`
--
ALTER TABLE `registrarse`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reseña`
--
ALTER TABLE `reseña`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sesion`
--
ALTER TABLE `sesion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `registrarse`
--
ALTER TABLE `registrarse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `reseña`
--
ALTER TABLE `reseña`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sesion`
--
ALTER TABLE `sesion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
