-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-07-2023 a las 22:35:03
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
-- Base de datos: `gafitas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `IdProducto` varchar(7) NOT NULL,
  `Nombre` varchar(90) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Precio` float NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `Estado` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`IdProducto`, `Nombre`, `Cantidad`, `Precio`, `IdUsuario`, `Estado`) VALUES
('ADCO80P', '', 1, 0, 27, 'Pagado'),
('ADDERUN', '', 3, 0, 27, 'Pagado'),
('TC06M', '', 4, 0, 27, 'Pagado'),
('ADCO80P', '', 5, 0, 27, 'Pagado'),
('ADDERUN', '', 3, 0, 27, 'Pagado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `proptar` varchar(30) COLLATE utf8_bin NOT NULL,
  `numtar` int(25) NOT NULL,
  `cvv` int(10) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `IdProducto` varchar(7) NOT NULL,
  `Nombre` varchar(90) NOT NULL,
  `Marca` varchar(30) NOT NULL,
  `Precio` float NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `Imagen` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`IdProducto`, `Nombre`, `Marca`, `Precio`, `Descripcion`, `Imagen`) VALUES
('ADALBEY', 'Tommy Hilfiger TH 1554/S', 'Tommy Hilfiger', 2444, '', 'ADALBEY.png'),
('ADCO80P', 'Tommy Hilfiger TH 1555/S', 'Tommy Hilfiger', 2299, '', 'ADCO80P.png'),
('ADDERUN', 'Tommy Hilfiger TH 1556/S', 'Tommy Hilfiger', 2099, '', 'ADDERUN.jpg'),
('ADOZWEE', 'Tommy Hilfiger TH 1557/S', 'Tommy Hilfiger', 2399, '', 'ADOZWEE.jpg'),
('ADPUHDM', 'Tommy Hilfiger TH 1558/S\r\n', 'Tommy Hilfiger', 2899, '', 'ADPUHDM.jpg'),
('ADSTASM', 'Tommy Hilfiger TH 1559/S', 'Tommy Hilfiger', 1799, '', 'ADSTASM.png'),
('ADSUPST', 'Tommy Hilfiger TH 1560/S', 'Tommy Hilfiger', 1799, '', 'ADSUPST.jpg'),
('ADSWIFT', 'Tommy Hilfiger TH 1562/S', 'Tommy Hilfiger', 1799, ' ', 'ADSWIFT.jpg'),
('ADUL19M', 'Tommy Hilfiger TH 1566/S', 'Tommy Hilfiger', 3799, '', 'ADUL19M.jpg'),
('NIAILV8', 'Louis Vuitton Evidence', 'Louis Vuitton', 2199, '', 'NIAILV8.jpg'),
('NIAIMA9', 'Louis Vuitton Attitude', 'Louis Vuitton', 2699, '', 'NIAIMA9.jpg'),
('NIAIR1M', 'Louis Vuitton Millionaire', 'Louis Vuitton', 1449, '', 'NIAIR1M.jpg'),
('NIAZSC2', 'Louis Vuitton Essential V', 'Louis Vuitton', 2799, '', 'NIAZSC2.jpg'),
('NICOBMW', 'Louis Vuitton Frontrow', 'Louis Vuitton', 1899, '', 'NICOBMW.jpg'),
('NICOVIN', 'Louis Vuitton Runway', 'Louis Vuitton', 1499, '', 'NICOVIN.jpg'),
('NIREINR', 'Louis Vuitton Blossom', 'Louis Vuitton', 3099, '', 'NIREINR.jpg'),
('NISBADV', 'Louis Vuitton New Wave', 'Louis Vuitton', 1799, '', 'NISBADV.jpg'),
('NISBCHC', 'Louis Vuitton Jungle', 'Louis Vuitton', 918, '', 'NISBCHC.png'),
('NISBDHP', 'Louis Vuitton Flower', 'Louis Vuitton', 3433, '', 'NISBDHP.jpg'),
('TC05D', 'Ray-Ban Wayfarer', 'Ray-Ban', 649, '', 'TC05D.jpg'),
('TC06M', 'Ray-Ban Aviator', 'Ray-Ban', 1039, '', 'TC06M.jpg'),
('TC07R', 'Ray-Ban Clubmaster', 'Ray-Ban', 639, '', 'TC07R.jpg'),
('TC09SI', 'Ray-Ban Round Metal', 'Ray-Ban', 649, '', 'TC09SI.jpg'),
('TCC01TA', 'Ray-Ban New Wayfarer', 'Ray-Ban', 1129, '', 'TCC01TA.jpg'),
('TCC02TH', 'Ray-Ban Cats 5000', 'Ray-Ban', 1099, '', 'TCC02TH.jpg'),
('TCC04TH', 'Ray-Ban Blaze Clubmaster', 'Ray-Ban', 1199, '', 'TCC04TH.jpg'),
('TCC08TL', 'Ray-Ban RB2132', 'Ray-Ban', 1279, '', 'TCC08TL.jpg'),
('TCC10T', 'Ray-Ban RB2132', 'Ray-Ban', 959, '', 'TCC10T.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(30) NOT NULL,
  `pass` varchar(110) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user`, `pass`, `email`) VALUES
(25, 'luis', '$2y$12$XNKNA23YmZiwOEATTNiFg.h9kg7ZhdG5fjk1/JmFYOTlxaqQUKU8i', 'luiisfalvarez@gmail.com'),
(26, 'juan', '$2y$12$7nSqbhJFtpPbbk88unnX3eA6ruV8K3U22klZzXAIqr6Jj5O2gnX8G', 'pavel__alvarez@hotmail.com'),
(27, 'javier m', '$2y$12$SPIR4t.AyOmg0aBuAjHmtOcUXEqF9FP0cYRRD2EXKheTehZmvt8Fe', 'crashding@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD KEY `IdProducto` (`IdProducto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`IdProducto`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
