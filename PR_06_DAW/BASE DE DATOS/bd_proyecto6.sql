-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2017 a las 22:07:02
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_proyecto6`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_alumno`
--

CREATE TABLE `tbl_alumno` (
  `alu_id` int(5) NOT NULL,
  `alu_nom` varchar(15) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `alu_apellido` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `alu_nfpublico` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `alu_nftribunal` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `proy_id` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_alumno`
--

INSERT INTO `tbl_alumno` (`alu_id`, `alu_nom`, `alu_apellido`, `alu_nfpublico`, `alu_nftribunal`, `proy_id`) VALUES
(1, 'DanielDaniel', 'Vargas Benítez', '0.00', '1.0000', 1),
(2, 'Edhu', 'Edhu', '0.00', '1.0000', 1),
(3, 'Daniel', 'Vargas', '0.00', '6.0000', 2),
(4, 'Edhu', 'Edhu', '0.00', '7.2000', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_notasprofe`
--

CREATE TABLE `tbl_notasprofe` (
  `np_id` int(5) NOT NULL,
  `np_nota` int(2) NOT NULL,
  `np_comentario` text CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `preg_id` int(2) NOT NULL,
  `alu_id` int(5) NOT NULL,
  `pro_id` int(3) NOT NULL,
  `np_fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_notasprofe`
--

INSERT INTO `tbl_notasprofe` (`np_id`, `np_nota`, `np_comentario`, `preg_id`, `alu_id`, `pro_id`, `np_fecha`) VALUES
(116, 8, '', 3, 4, 2, '2017-02-28 20:16:53'),
(115, 6, '', 3, 3, 2, '2017-02-28 20:16:53'),
(111, 1, '', 4, 1, 1, '2017-02-28 20:14:38'),
(112, 1, '', 4, 2, 1, '2017-02-28 20:14:38'),
(113, 6, '', 1, 3, 2, '2017-02-28 20:16:53'),
(114, 8, '', 1, 4, 2, '2017-02-28 20:16:53'),
(109, 1, '', 2, 1, 1, '2017-02-28 20:14:38'),
(110, 1, '', 2, 2, 1, '2017-02-28 20:14:38'),
(105, 1, '', 3, 1, 1, '2017-02-28 20:14:38'),
(106, 1, '', 3, 2, 1, '2017-02-28 20:14:38'),
(107, 1, '', 5, 1, 1, '2017-02-28 20:14:38'),
(108, 1, '', 5, 2, 1, '2017-02-28 20:14:38'),
(103, 1, '', 1, 1, 1, '2017-02-28 20:14:38'),
(104, 1, '', 1, 2, 1, '2017-02-28 20:14:38'),
(117, 6, '', 5, 3, 2, '2017-02-28 20:16:53'),
(118, 8, '', 5, 4, 2, '2017-02-28 20:16:53'),
(119, 9, '', 2, 3, 2, '2017-02-28 20:16:53'),
(120, 9, '', 2, 4, 2, '2017-02-28 20:16:53'),
(121, 3, '', 4, 3, 2, '2017-02-28 20:16:53'),
(122, 3, '', 4, 4, 2, '2017-02-28 20:16:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_notaspublico`
--

CREATE TABLE `tbl_notaspublico` (
  `na_id` int(5) NOT NULL,
  `na_nombre` varchar(30) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `na_curso` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `na_MAC` varchar(30) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `na_nota` int(2) NOT NULL,
  `preg_id` int(2) NOT NULL,
  `alu_id` int(5) NOT NULL,
  `na_fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pregunta`
--

CREATE TABLE `tbl_pregunta` (
  `preg_id` int(2) NOT NULL,
  `preg_txt` text CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `preg_tipo` enum('Presentació Oral','Contingut') CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `preg_categoria` enum('Professor','Alumne') CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `preg_estado` enum('activo','inactivo') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'activo'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_pregunta`
--

INSERT INTO `tbl_pregunta` (`preg_id`, `preg_txt`, `preg_tipo`, `preg_categoria`, `preg_estado`) VALUES
(1, '¿De que color tiene Edhu el pelo?', 'Presentació Oral', 'Professor', 'activo'),
(2, '¿Cuantas veces ha hablado Aaron en Catalan?', 'Contingut', 'Professor', 'activo'),
(3, 'Preguntame lo que quieras', 'Presentació Oral', 'Professor', 'activo'),
(4, 'Preguntame lo que quieras 2 ', 'Contingut', 'Professor', 'activo'),
(5, 'Que hora es', 'Presentació Oral', 'Professor', 'activo'),
(8, 'Pregunta profesor ORAL', 'Presentació Oral', 'Professor', 'activo'),
(7, '¿Cuantas horas?', 'Presentació Oral', 'Alumne', 'activo'),
(9, 'Pregunta profesor contenido', 'Presentació Oral', 'Professor', 'activo'),
(10, 'Pregunta profesor contenido', 'Contingut', 'Professor', 'activo'),
(11, 'Pregunta profesor ORAL', 'Presentació Oral', 'Alumne', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_proyecto`
--

CREATE TABLE `tbl_proyecto` (
  `proy_id` int(5) NOT NULL,
  `proy_nom` varchar(100) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `proy_curso` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `proy_fecha` date NOT NULL,
  `proy_pin` int(4) NOT NULL,
  `proy_estado` enum('inactivo','activo','finalizado') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'inactivo',
  `proy_nota` int(2) NOT NULL,
  `tri_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_proyecto`
--

INSERT INTO `tbl_proyecto` (`proy_id`, `proy_nom`, `proy_curso`, `proy_fecha`, `proy_pin`, `proy_estado`, `proy_nota`, `tri_id`) VALUES
(1, 'Proyecto Votación 1', 'DAW', '2017-02-09', 1234, 'activo', 1, 1),
(2, 'Proyecto Votación 2', 'DAW', '2017-02-09', 1245, 'activo', 6, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tribunal`
--

CREATE TABLE `tbl_tribunal` (
  `tri_id` int(11) NOT NULL,
  `tri_jurado` text CHARACTER SET latin1 NOT NULL,
  `tri_nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_tribunal`
--

INSERT INTO `tbl_tribunal` (`tri_id`, `tri_jurado`, `tri_nombre`) VALUES
(0, 'null', 'null'),
(2, 'David Marin\r\nIgnasi Romero\r\nSergio Jimenez', 'Tribunal 1'),
(3, '1 2 3', 'Tribunal 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `usu_id` int(3) NOT NULL,
  `usu_nombre` varchar(15) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `usu_apellido` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `usu_usuario` varchar(15) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `usu_pass` varchar(15) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `usu_tipo` enum('admin','tribunal','professor') CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL DEFAULT 'professor',
  `tri_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`usu_id`, `usu_nombre`, `usu_apellido`, `usu_usuario`, `usu_pass`, `usu_tipo`, `tri_id`) VALUES
(1, 'david', 'marin', 'david.marin', '1234', 'admin', 0),
(2, 'Sergio', 'Jimenez', 'SerJim', '1234', 'tribunal', 1),
(3, 'aadsf', 'asdf', 'asdf', 'adsf', 'admin', 0),
(4, 'adf', 'adsf', 'adf', 'adsf', 'professor', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_alumno`
--
ALTER TABLE `tbl_alumno`
  ADD PRIMARY KEY (`alu_id`);

--
-- Indices de la tabla `tbl_notasprofe`
--
ALTER TABLE `tbl_notasprofe`
  ADD PRIMARY KEY (`np_id`);

--
-- Indices de la tabla `tbl_notaspublico`
--
ALTER TABLE `tbl_notaspublico`
  ADD PRIMARY KEY (`na_id`);

--
-- Indices de la tabla `tbl_pregunta`
--
ALTER TABLE `tbl_pregunta`
  ADD PRIMARY KEY (`preg_id`);

--
-- Indices de la tabla `tbl_proyecto`
--
ALTER TABLE `tbl_proyecto`
  ADD PRIMARY KEY (`proy_id`);

--
-- Indices de la tabla `tbl_tribunal`
--
ALTER TABLE `tbl_tribunal`
  ADD PRIMARY KEY (`tri_id`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`usu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_alumno`
--
ALTER TABLE `tbl_alumno`
  MODIFY `alu_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tbl_notasprofe`
--
ALTER TABLE `tbl_notasprofe`
  MODIFY `np_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
--
-- AUTO_INCREMENT de la tabla `tbl_notaspublico`
--
ALTER TABLE `tbl_notaspublico`
  MODIFY `na_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_pregunta`
--
ALTER TABLE `tbl_pregunta`
  MODIFY `preg_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `tbl_proyecto`
--
ALTER TABLE `tbl_proyecto`
  MODIFY `proy_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_tribunal`
--
ALTER TABLE `tbl_tribunal`
  MODIFY `tri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `usu_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
