-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-02-2017 a las 15:16:58
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_proyecto6`
--
CREATE DATABASE IF NOT EXISTS `bd_proyecto6` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd_proyecto6`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_alumno`
--

CREATE TABLE `tbl_alumno` (
  `alu_id` int(5) NOT NULL,
  `alu_nom` varchar(15) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `alu_apellido` varchar(50) CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `alu_nfpublico` double(4,2) NOT NULL,
  `alu_nftribunal` double(4,2) NOT NULL,
  `proy_id` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `preg_tipo` enum('Presentación Oral','Contenido') CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `preg_categoria` enum('Profesor','Alumno') CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `preg_estado` enum('activo','inactivo') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'activo'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `proy_estado` enum('abierto','cerrado') CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `proy_nota` int(2) NOT NULL,
  `tri_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tribunal`
--

CREATE TABLE `tbl_tribunal` (
  `tri_id` int(11) NOT NULL,
  `tri_jurado` text CHARACTER SET latin1 NOT NULL,
  `tri_nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `usu_tipo` enum('admin','profesor') CHARACTER SET utf16 COLLATE utf16_spanish2_ci NOT NULL,
  `tri_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  MODIFY `alu_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_notasprofe`
--
ALTER TABLE `tbl_notasprofe`
  MODIFY `np_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_notaspublico`
--
ALTER TABLE `tbl_notaspublico`
  MODIFY `na_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_pregunta`
--
ALTER TABLE `tbl_pregunta`
  MODIFY `preg_id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_proyecto`
--
ALTER TABLE `tbl_proyecto`
  MODIFY `proy_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_tribunal`
--
ALTER TABLE `tbl_tribunal`
  MODIFY `tri_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `usu_id` int(3) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
