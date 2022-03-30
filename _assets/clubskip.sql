-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-03-2022 a las 16:32:45
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `datacaptures`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clubskip`
--

CREATE TABLE `clubskip` (
  `userid` int(255) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `cuit_cuil_dni` varchar(100) NOT NULL,
  `birthday` varchar(150) NOT NULL,
  `cellphone` varchar(150) NOT NULL,
  `address_` varchar(100) NOT NULL,
  `address_city` varchar(100) NOT NULL,
  `address_state` varchar(100) NOT NULL,
  `address_postal_code` varchar(100) NOT NULL,
  `trabaja_en_forma_independiente` tinyint(4) NOT NULL,
  `visibilidad_del_local` varchar(100) NOT NULL,
  `taller_y_local_o_solo_taller` varchar(100) NOT NULL,
  `reparacion_venta_de_repuestos_o_electrodomesticos` varchar(100) NOT NULL,
  `que_reparan` varchar(100) NOT NULL,
  `mayor_18_anos` varchar(150) NOT NULL,
  `allow_global` varchar(150) NOT NULL,
  `allow_brand` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clubskip`
--

INSERT INTO `clubskip` (`userid`, `first_name`, `last_name`, `email`, `cuit_cuil_dni`, `birthday`, `cellphone`, `address_`, `address_city`, `address_state`, `address_postal_code`, `trabaja_en_forma_independiente`, `visibilidad_del_local`, `taller_y_local_o_solo_taller`, `reparacion_venta_de_repuestos_o_electrodomesticos`, `que_reparan`, `mayor_18_anos`, `allow_global`, `allow_brand`) VALUES
(1, 'asdasda', 'asdasd', 'fabiangonzalez@ustudio.global', '', '1986-10-05', '12312312', '', '', '', '', 0, '', '', '', '', '1', '1', ''),
(2, 'asdasdasd', 'asdasdasd', 'tektektek3334@gmail.com', '12321321', '2022-03-09', '123123213', '123123123123', '213123123213', 'La Pampa', '123123123', 1, 'a_la_calle', 'taller_y_local', 'solo_reparacion', 'lavarropas-1', '1', '1', '1'),
(3, 'asdasda', 'sdaasdasd', 'fabiansato@gmail.com', '12321321', '2022-03-08', '123123123', '123123123', '3123123123', 'Misiones', '123213123', 0, 'a_la_calle', 'taller_y_local', 'solo_reparacion', 'lavarropas-1', '1', '1', '1'),
(4, 'asdasda', 'sdaasdasd', 'fabiansato@gmail.com', '12321321', '2022-03-08', '123123123', '123123123', '3123123123', 'Misiones', '123213123', 0, 'a_la_calle', 'taller_y_local', 'solo_reparacion', 'lavarropas-1', '1', '1', '1'),
(5, 'asdasda', 'sdaasdasd', 'fabiansato@gmail.com', '12321321', '2022-03-08', '123123123', '123123123', '3123123123', 'Misiones', '123213123', 0, 'a_la_calle', 'taller_y_local', 'solo_reparacion', 'lavarropas-1', '1', '1', '1'),
(6, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', ''),
(7, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', ''),
(8, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', ''),
(10, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', ''),
(11, 'gaston', 'gomez', 'fasdasd@usudio.global', '23423432', '2022-03-08', '234234234', '324234324', '234234234', 'Catamarca', '324234234', 1, '', '', '', '', '1', '1', '1'),
(12, 'gaston ', 'gomez2', 'gastongomez2@gmail.com', '31231232', '2022-03-15', '12312312312', '123123213213', '123213123', 'Rio Negro', '12312123', 0, 'a_la_calle', 'taller_y_local', 'solo_reparacion', 'lavavajillas', '1', '1', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clubskip`
--
ALTER TABLE `clubskip`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clubskip`
--
ALTER TABLE `clubskip`
  MODIFY `userid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
