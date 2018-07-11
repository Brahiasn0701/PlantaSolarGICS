-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2018 a las 13:08:12
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `platasolar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `int_ana`
--

CREATE TABLE `int_ana` (
  `INT_ANA_ID` int(11) NOT NULL,
  `INT_ANA_Uhrzeit` time DEFAULT NULL,
  `INT_ANA_Intervall` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `INT_ANA_W_V0` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `INT_ANA_G_M0` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `INT_ANA_T_U0` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `INT_ANA_T_M0` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `INT_ANA_T_M13` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `INT_ANA_T_M14` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `INT_ANA_T_M15` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `int_kpc`
--

CREATE TABLE `int_kpc` (
  `INT_KPC_ID` int(11) NOT NULL,
  `INT_KPC_Timestamp` time NOT NULL,
  `INT_KPC_KPC` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `INT_KPC_P_Reactive` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `INT_KPC_CosPhi` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `int_kwr`
--

CREATE TABLE `int_kwr` (
  `INT_KWR_ID` int(10) NOT NULL,
  `INT_KWR_DATE` date NOT NULL COMMENT 'DIA DE LA TOMA DE LOS DATOS',
  `INT_KWR_TIME` time NOT NULL COMMENT 'HORA EN QUE SE TOMAN LOS DATOS',
  `INT_KWR_S` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'CAMPO INDEFINIDO',
  `INT_KWR_TECHNOLOGY` int(10) NOT NULL COMMENT 'FK DE LA TABLA DONDE ESTAN LOS 4 TIPOS DE TECNOLOGIA',
  `INT_KWR_KPC` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT 'CAMPO INDEFINIDO',
  `INT_KWR_U_DC_V` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ELECTRICIDAD DIRECTA VOLTIOS',
  `INT_KWR_I_DC_A` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ELECTRICIDAD DIRECTA AMPERIOS',
  `INT_KWR_P_DC_W` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ELECTRICIDAD DIRECTA VATIOS',
  `INT_KWR_U_AC_V` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ELECTRICIDAD ALTERNA VOLTIOS',
  `INT_KWR_I_AC_A` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ELECTRICIDAD ALTERNA AMPERIOS',
  `INT_KWR_P_AC_W` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ELECTRICIDAD ALTERNA VATIOS'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kaco_status`
--

CREATE TABLE `kaco_status` (
  `KACO_STATUS_` int(11) NOT NULL,
  `KACO_STATUS_time` time NOT NULL,
  `KACO_STATUS_Addr` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_S_OLD` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_S_NEW` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_U_DC_0` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_I_DC_0` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_P_DC_WR` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_U_AC_0` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_I_AC_0` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_P_AC_WR` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_T_WR` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_E_D_WR` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_U_DC_1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_I_DC_1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_P_DC_1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_U_DC_2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_I_DC_2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_P_DC_2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_U_DC_3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_I_DC_3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_P_DC_3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_U_AC_1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_I_AC_1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_P_AC_1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_U_AC_2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_I_AC_2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_P_AC_2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_U_AC_3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_I_AC_3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_P_AC_3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_COS_PHI` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_V_0` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_A_0` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_W_0` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_V_1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_A_1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_W_1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_C` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_Wh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_V_2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_A_2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_W_2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_V_3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_A_3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_W_3` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_V_4` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_A_4` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `KACO_STATUS_W_4` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `technologies`
--

CREATE TABLE `technologies` (
  `TECHNOLOGIES_ID` int(11) NOT NULL,
  `TECHNOLOGIES_NAME` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `technologies`
--

INSERT INTO `technologies` (`TECHNOLOGIES_ID`, `TECHNOLOGIES_NAME`) VALUES
(1, 'SILICIO MONOCRISTALINO'),
(2, 'SILICIO POLICRISTALINO'),
(3, 'AMORFO DE CAPA FINA'),
(4, 'MONOCRISTALINO DE ALTA EFICIENCIA ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `USERS_NAME` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `USERS_LAST_NAME` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `USERS_EMAIL` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `USERS_PASSWORD` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`USERS_NAME`, `USERS_LAST_NAME`, `USERS_EMAIL`, `USERS_PASSWORD`) VALUES
('ROBINSON ANDRES', 'CORTES GALINDO', 'ROBINSONANDRESCORTES@GMAIL.COM', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `int_ana`
--
ALTER TABLE `int_ana`
  ADD PRIMARY KEY (`INT_ANA_ID`);

--
-- Indices de la tabla `int_kpc`
--
ALTER TABLE `int_kpc`
  ADD PRIMARY KEY (`INT_KPC_ID`);

--
-- Indices de la tabla `int_kwr`
--
ALTER TABLE `int_kwr`
  ADD PRIMARY KEY (`INT_KWR_ID`),
  ADD KEY `INT_KWR_TECHNOLOGY` (`INT_KWR_TECHNOLOGY`);

--
-- Indices de la tabla `kaco_status`
--
ALTER TABLE `kaco_status`
  ADD PRIMARY KEY (`KACO_STATUS_`);

--
-- Indices de la tabla `technologies`
--
ALTER TABLE `technologies`
  ADD PRIMARY KEY (`TECHNOLOGIES_ID`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `USERS_EMAIL` (`USERS_EMAIL`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `int_ana`
--
ALTER TABLE `int_ana`
  MODIFY `INT_ANA_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `int_kpc`
--
ALTER TABLE `int_kpc`
  MODIFY `INT_KPC_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `int_kwr`
--
ALTER TABLE `int_kwr`
  MODIFY `INT_KWR_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `kaco_status`
--
ALTER TABLE `kaco_status`
  MODIFY `KACO_STATUS_` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `technologies`
--
ALTER TABLE `technologies`
  MODIFY `TECHNOLOGIES_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `int_kwr`
--
ALTER TABLE `int_kwr`
  ADD CONSTRAINT `int_kwr_ibfk_1` FOREIGN KEY (`INT_KWR_TECHNOLOGY`) REFERENCES `technologies` (`TECHNOLOGIES_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
