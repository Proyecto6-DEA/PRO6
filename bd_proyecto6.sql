-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-02-2017 a las 15:12:43
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.6

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
  `alu_nom` varchar(15) COLLATE utf16_spanish2_ci NOT NULL,
  `alu_apellido` varchar(50) COLLATE utf16_spanish2_ci NOT NULL,
  `alu_nfpublico` double(4,2) NOT NULL,
  `alu_nftribunal` double(4,2) NOT NULL,
  `proy_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_notasalumno`
--

CREATE TABLE `tbl_notasalumno` (
  `na_id` int(5) NOT NULL,
  `na_nombre` varchar(30) COLLATE utf16_spanish2_ci NOT NULL,
  `na_curso` varchar(50) COLLATE utf16_spanish2_ci NOT NULL,
  `na_MAC` varchar(30) COLLATE utf16_spanish2_ci NOT NULL,
  `na_nota` int(2) NOT NULL,
  `preg_id` int(2) NOT NULL,
  `alu_id` int(5) NOT NULL,
  `proy_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_notasprofe`
--

CREATE TABLE `tbl_notasprofe` (
  `np_id` int(5) NOT NULL,
  `np_nota` int(2) NOT NULL,
  `np_comentario` text COLLATE utf16_spanish2_ci NOT NULL,
  `preg_id` int(2) NOT NULL,
  `alu_id` int(5) NOT NULL,
  `profe_id` int(3) NOT NULL,
  `proy_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pregunta`
--

CREATE TABLE `tbl_pregunta` (
  `preg_id` int(2) NOT NULL,
  `preg_txt` text COLLATE utf16_spanish2_ci NOT NULL,
  `preg_tipo` enum('Presentación Oral','Contenido') COLLATE utf16_spanish2_ci NOT NULL,
  `preg_categoria` enum('Profesor','Alumno') COLLATE utf16_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_profesor`
--

CREATE TABLE `tbl_profesor` (
  `pro_id` int(3) NOT NULL,
  `pro_nombre` varchar(15) COLLATE utf16_spanish2_ci NOT NULL,
  `pro_apellido` varchar(50) COLLATE utf16_spanish2_ci NOT NULL,
  `pro_usuario` varchar(15) COLLATE utf16_spanish2_ci NOT NULL,
  `pro_pass` varchar(15) COLLATE utf16_spanish2_ci NOT NULL,
  `pro_tipo` enum('admin','jurado') COLLATE utf16_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_proyecto`
--

CREATE TABLE `tbl_proyecto` (
  `proy_id` int(5) NOT NULL,
  `proy_nom` varchar(100) COLLATE utf16_spanish2_ci NOT NULL,
  `proy_curso` varchar(50) COLLATE utf16_spanish2_ci NOT NULL,
  `proy_ano` varchar(20) COLLATE utf16_spanish2_ci NOT NULL,
  `proy_pin` int(4) NOT NULL,
  `proy_estado` enum('abierto','cerrado') COLLATE utf16_spanish2_ci NOT NULL,
  `proy_nota` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_alumno`
--
ALTER TABLE `tbl_alumno`
  ADD PRIMARY KEY (`alu_id`);

--
-- Indices de la tabla `tbl_notasalumno`
--
ALTER TABLE `tbl_notasalumno`
  ADD PRIMARY KEY (`na_id`);

--
-- Indices de la tabla `tbl_notasprofe`
--
ALTER TABLE `tbl_notasprofe`
  ADD PRIMARY KEY (`np_id`);

--
-- Indices de la tabla `tbl_pregunta`
--
ALTER TABLE `tbl_pregunta`
  ADD PRIMARY KEY (`preg_id`);

--
-- Indices de la tabla `tbl_profesor`
--
ALTER TABLE `tbl_profesor`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indices de la tabla `tbl_proyecto`
--
ALTER TABLE `tbl_proyecto`
  ADD PRIMARY KEY (`proy_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_alumno`
--
ALTER TABLE `tbl_alumno`
  MODIFY `alu_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_notasalumno`
--
ALTER TABLE `tbl_notasalumno`
  MODIFY `na_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_notasprofe`
--
ALTER TABLE `tbl_notasprofe`
  MODIFY `np_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_pregunta`
--
ALTER TABLE `tbl_pregunta`
  MODIFY `preg_id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_profesor`
--
ALTER TABLE `tbl_profesor`
  MODIFY `pro_id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_proyecto`
--
ALTER TABLE `tbl_proyecto`
  MODIFY `proy_id` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
