-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2017 a las 18:58:34
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `internado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adventistas`
--

CREATE TABLE `adventistas` (
  `id_adventistas` int(11) NOT NULL,
  `iglesia` varchar(45) NOT NULL,
  `distrito` varchar(45) NOT NULL,
  `mision` varchar(45) NOT NULL,
  `cargo` varchar(45) NOT NULL,
  `fami_advenrtista` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id_carrera` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `nivel` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id_estudiantes` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `lugar` tinytext NOT NULL,
  `fech_nacimiento` varchar(45) NOT NULL,
  `cedula` decimal(10,0) NOT NULL,
  `e-mail` varchar(45) NOT NULL,
  `edad` varchar(45) NOT NULL,
  `nacinalidad` varchar(45) NOT NULL,
  `celular` varchar(45) NOT NULL,
  `salud_id_salud` int(11) NOT NULL,
  `carrera_id_carrera` int(11) NOT NULL,
  `representante_id_representante` int(11) NOT NULL,
  `religion_id_religion` int(11) NOT NULL,
  `login_id_login` int(11) NOT NULL,
  `adventistas_id_adventistas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(45) NOT NULL,
  `date` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `tipo`, `fullname`, `email`, `password`, `date`, `status`) VALUES
(1, 'admin', 'Ivan Fernando Paz', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', '', 'activo'),
(2, '', 'Raymond Amangandi', 'raymond.amangandi@itsae.edu.ec', '25d55ad283aa400af464c76d713c07ad', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `religion`
--

CREATE TABLE `religion` (
  `id_religion` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `bautizado` varchar(45) NOT NULL,
  `fecha_bautizmo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representante`
--

CREATE TABLE `representante` (
  `id_representante` int(11) NOT NULL,
  `genero` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `estado_civil` varchar(45) NOT NULL,
  `profesion` varchar(45) NOT NULL,
  `ocupacion` varchar(45) NOT NULL,
  `religion` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salida`
--

CREATE TABLE `salida` (
  `id_salida` int(11) NOT NULL,
  `nombre_u` varchar(45) NOT NULL,
  `motivo_sa` varchar(45) NOT NULL,
  `lugar_destino` varchar(45) NOT NULL,
  `salida` varchar(45) NOT NULL,
  `retorno` varchar(45) NOT NULL,
  `estudiantes_id_estudiantes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salud`
--

CREATE TABLE `salud` (
  `id_salud` int(11) NOT NULL,
  `tipo_sangre` varchar(45) NOT NULL,
  `emfermedades` varchar(45) NOT NULL,
  `alergias` varchar(45) NOT NULL,
  `medicamento_toma` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adventistas`
--
ALTER TABLE `adventistas`
  ADD PRIMARY KEY (`id_adventistas`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id_carrera`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id_estudiantes`),
  ADD KEY `fk_estudiantes_salud_idx` (`salud_id_salud`),
  ADD KEY `fk_estudiantes_carrera1_idx` (`carrera_id_carrera`),
  ADD KEY `fk_estudiantes_representante1_idx` (`representante_id_representante`),
  ADD KEY `fk_estudiantes_religion1_idx` (`religion_id_religion`),
  ADD KEY `fk_estudiantes_login1_idx` (`login_id_login`),
  ADD KEY `fk_estudiantes_adventistas1_idx` (`adventistas_id_adventistas`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `religion`
--
ALTER TABLE `religion`
  ADD PRIMARY KEY (`id_religion`);

--
-- Indices de la tabla `representante`
--
ALTER TABLE `representante`
  ADD PRIMARY KEY (`id_representante`);

--
-- Indices de la tabla `salida`
--
ALTER TABLE `salida`
  ADD PRIMARY KEY (`id_salida`),
  ADD KEY `fk_salida_estudiantes1_idx` (`estudiantes_id_estudiantes`);

--
-- Indices de la tabla `salud`
--
ALTER TABLE `salud`
  ADD PRIMARY KEY (`id_salud`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adventistas`
--
ALTER TABLE `adventistas`
  MODIFY `id_adventistas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id_carrera` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id_estudiantes` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `religion`
--
ALTER TABLE `religion`
  MODIFY `id_religion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `representante`
--
ALTER TABLE `representante`
  MODIFY `id_representante` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `salida`
--
ALTER TABLE `salida`
  MODIFY `id_salida` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `salud`
--
ALTER TABLE `salud`
  MODIFY `id_salud` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `fk_estudiantes_adventistas1` FOREIGN KEY (`adventistas_id_adventistas`) REFERENCES `adventistas` (`id_adventistas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estudiantes_carrera1` FOREIGN KEY (`carrera_id_carrera`) REFERENCES `carrera` (`id_carrera`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estudiantes_login1` FOREIGN KEY (`login_id_login`) REFERENCES `login` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estudiantes_religion1` FOREIGN KEY (`religion_id_religion`) REFERENCES `religion` (`id_religion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estudiantes_representante1` FOREIGN KEY (`representante_id_representante`) REFERENCES `representante` (`id_representante`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_estudiantes_salud` FOREIGN KEY (`salud_id_salud`) REFERENCES `salud` (`id_salud`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `salida`
--
ALTER TABLE `salida`
  ADD CONSTRAINT `fk_salida_estudiantes1` FOREIGN KEY (`estudiantes_id_estudiantes`) REFERENCES `estudiantes` (`id_estudiantes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
