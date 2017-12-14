-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-12-2017 a las 07:21:54
-- Versión del servidor: 5.7.20
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `terrazas_hostal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correos`
--

CREATE TABLE `correos` (
  `id_consulta` int(5) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `consulta` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE `habitacion` (
  `idhabitacion` int(11) NOT NULL,
  `nombre_hab` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `idtipo_habitacion` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `habitacion`
--

INSERT INTO `habitacion` (`idhabitacion`, `nombre_hab`, `idtipo_habitacion`, `estado`) VALUES
(1, '101', 1, 0),
(2, '102', 2, 0),
(3, '103', 3, 0),
(4, '201', 1, 0);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `habitacionlibre`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `habitacionlibre` (
`idhabitacion` int(11)
,`estado` int(11)
,`nombre_tipohabitacion` varchar(45)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion_has_servicio`
--

CREATE TABLE `habitacion_has_servicio` (
  `idhabitacion` int(11) NOT NULL,
  `idservicios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `huespedes`
--

CREATE TABLE `huespedes` (
  `idhuespedes` int(11) NOT NULL,
  `nombre_cliente` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `apellido_cliente` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `correo_cliente` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `telefono_cliente` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `precedencia_cliente` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `huespedes`
--

INSERT INTO `huespedes` (`idhuespedes`, `nombre_cliente`, `apellido_cliente`, `correo_cliente`, `telefono_cliente`, `precedencia_cliente`) VALUES
(1, 'lucas', 'piro', 'lucas@gmail.com', '123001230', 'lima'),
(31, '123', '321', '1223', '123', '12312'),
(30, '21', '3312', '32132', '321', '123'),
(29, 'ds', '21', '321', '321', '321'),
(28, 'asd123123', 'ad', '213', '123', '23'),
(27, 'asd123123', 'ad', '213', '123', '23'),
(26, '', 'ad', '213', '123', '23'),
(25, 'asda', 'dasd', 'dasd', 'asd', 'dasd'),
(24, 'asda', 'dasd', 'dasd', 'asd', 'dasd'),
(23, 'asda', 'dasd', 'dasd', 'asd', 'dasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `idhuespedes` int(11) NOT NULL,
  `idhabitacion` int(11) DEFAULT NULL,
  `idservicios` int(11) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_salida` date DEFAULT NULL,
  `nro_ocupantes` int(11) DEFAULT NULL,
  `detalle_reserva` varchar(50) DEFAULT NULL,
  `idusuario` tinyint(3) DEFAULT NULL,
  `idReservacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `idservicios` int(11) NOT NULL,
  `nombre_servicio` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `detalle_servicio` varchar(50) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`idservicios`, `nombre_servicio`, `detalle_servicio`) VALUES
(1, 'lavanderia', '15'),
(2, 'transporte', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_habitacion`
--

CREATE TABLE `tipo_habitacion` (
  `idtipo_habitacion` int(11) NOT NULL,
  `nombre_tipohabitacion` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `precio_habitacion` varchar(45) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_habitacion`
--

INSERT INTO `tipo_habitacion` (`idtipo_habitacion`, `nombre_tipohabitacion`, `precio_habitacion`) VALUES
(1, 'simple', '35'),
(2, 'doble', '40'),
(3, 'tiple', '50'),
(4, 'matrimonial', '45'),
(5, 'cuadruple', '60');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` tinyint(3) NOT NULL,
  `nombre_usuario` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `password_usuario` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `corre_usuario` varchar(45) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `nombre_usuario`, `password_usuario`, `corre_usuario`) VALUES
(1, 'admin', 'MTIzNDU=', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Estructura para la vista `habitacionlibre`
--
DROP TABLE IF EXISTS `habitacionlibre`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `habitacionlibre`  AS  select `h`.`idhabitacion` AS `idhabitacion`,`h`.`estado` AS `estado`,`t`.`nombre_tipohabitacion` AS `nombre_tipohabitacion` from (`habitacion` `h` join `tipo_habitacion` `t` on((`h`.`idtipo_habitacion` = `t`.`idtipo_habitacion`))) where (`h`.`estado` = 0) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `correos`
--
ALTER TABLE `correos`
  ADD PRIMARY KEY (`id_consulta`);

--
-- Indices de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`idhabitacion`);

--
-- Indices de la tabla `habitacion_has_servicio`
--
ALTER TABLE `habitacion_has_servicio`
  ADD KEY `fk_habitacion_has_servicio_servicio1_idx` (`idservicios`) USING BTREE,
  ADD KEY `fk_habitacion_has_servicio_habitacion1_idx` (`idhabitacion`) USING BTREE;

--
-- Indices de la tabla `huespedes`
--
ALTER TABLE `huespedes`
  ADD PRIMARY KEY (`idhuespedes`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`idReservacion`),
  ADD KEY `fk_huespedes_has_habitacion_habitacion1_idx` (`idhabitacion`),
  ADD KEY `fk_huespedes_has_habitacion_huespedes1_idx` (`idhuespedes`),
  ADD KEY `fk_Reserva_servicios1_idx` (`idservicios`),
  ADD KEY `fk_Reserva_Usuarios1_idx` (`idusuario`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`idservicios`);

--
-- Indices de la tabla `tipo_habitacion`
--
ALTER TABLE `tipo_habitacion`
  ADD PRIMARY KEY (`idtipo_habitacion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `correos`
--
ALTER TABLE `correos`
  MODIFY `id_consulta` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  MODIFY `idhabitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `huespedes`
--
ALTER TABLE `huespedes`
  MODIFY `idhuespedes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `idservicios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_habitacion`
--
ALTER TABLE `tipo_habitacion`
  MODIFY `idtipo_habitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
