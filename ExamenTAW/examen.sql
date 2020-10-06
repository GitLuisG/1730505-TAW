-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-10-2020 a las 11:26:48
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `ISBN` int(11) NOT NULL,
  `nombre` int(11) NOT NULL,
  `autor` int(11) NOT NULL,
  `editorial` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `edicion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ano` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `ISBN`, `nombre`, `autor`, `editorial`, `edicion`, `ano`) VALUES
(1, 45798444, 0, 0, 'Borland', 'edicion 3', 2020),
(2, 27843713, 0, 0, 'Lycos', 'edicion 3', 2019),
(3, 44429360, 0, 0, 'Macromedia', 'edicion 3', 2020),
(4, 25642868, 0, 0, 'Macromedia', 'edicion 2', 2021),
(5, 30126386, 0, 0, 'Macromedia', 'edicion 2', 2020),
(6, 11565023, 0, 0, 'Yahoo', 'edicion 3', 2020),
(7, 20359357, 0, 0, 'Macromedia', 'edicion 2', 2021),
(8, 14305929, 0, 0, 'Sibelius', 'edicion 1', 2020),
(9, 16728542, 0, 0, 'Borland', 'edicion 1', 2021),
(10, 9995066, 0, 0, 'Altavista', 'edicion 1', 2021),
(11, 9580632, 0, 0, 'Altavista', 'edicion 2', 2020),
(12, 44342924, 0, 0, 'Apple Systems', 'edicion 3', 2021),
(13, 31586384, 0, 0, 'Microsoft', 'edicion 1', 2021),
(14, 28774142, 0, 0, 'Microsoft', 'edicion 2', 2020),
(15, 34815723, 0, 0, 'Lycos', 'edicion 1', 2020),
(16, 48707588, 0, 0, 'Google', 'edicion 3', 2020),
(17, 24401680, 0, 0, 'Lavasoft', 'edicion 2', 2020),
(18, 9435280, 0, 0, 'Google', 'edicion 2', 2020),
(19, 40351667, 0, 0, 'Lycos', 'edicion 1', 2021),
(20, 29928568, 0, 0, 'Sibelius', 'edicion 3', 2021),
(21, 38172888, 0, 0, 'Yahoo', 'edicion 2', 2021),
(22, 15484410, 0, 0, 'Macromedia', 'edicion 2', 2021),
(23, 12818108, 0, 0, 'Yahoo', 'edicion 1', 2020),
(24, 38445891, 0, 0, 'Yahoo', 'edicion 2', 2021),
(25, 23218158, 0, 0, 'Apple Systems', 'edicion 3', 2020),
(26, 27032444, 0, 0, 'Apple Systems', 'edicion 1', 2020),
(27, 32645614, 0, 0, 'Chami', 'edicion 3', 2020),
(28, 38707103, 0, 0, 'Lavasoft', 'edicion 2', 2020),
(29, 5751372, 0, 0, 'Macromedia', 'edicion 3', 2021),
(30, 49872748, 0, 0, 'Cakewalk', 'edicion 2', 2020),
(31, 5956861, 0, 0, 'Lavasoft', 'edicion 1', 2021),
(32, 29686102, 0, 0, 'Altavista', 'edicion 2', 2021),
(33, 46014451, 0, 0, 'Lavasoft', 'edicion 1', 2020),
(34, 36585384, 0, 0, 'Finale', 'edicion 3', 2020),
(35, 6828499, 0, 0, 'Adobe', 'edicion 1', 2021),
(36, 44983976, 0, 0, 'Altavista', 'edicion 2', 2020),
(37, 41287834, 0, 0, 'Sibelius', 'edicion 3', 2020),
(38, 42009728, 0, 0, 'Altavista', 'edicion 1', 2020),
(39, 12778167, 0, 0, 'Sibelius', 'edicion 2', 2020),
(40, 12007615, 0, 0, 'Apple Systems', 'edicion 1', 2020),
(41, 44460535, 0, 0, 'Lycos', 'edicion 2', 2020),
(42, 42762834, 0, 0, 'Microsoft', 'edicion 1', 2020),
(43, 42706886, 0, 0, 'Adobe', 'edicion 1', 2020),
(44, 22061252, 0, 0, 'Lycos', 'edicion 1', 2021),
(45, 45150513, 0, 0, 'Cakewalk', 'edicion 3', 2019),
(46, 9437556, 0, 0, 'Lavasoft', 'edicion 1', 2021),
(47, 30028384, 0, 0, 'Yahoo', 'edicion 2', 2020),
(48, 12211816, 0, 0, 'Apple Systems', 'edicion 1', 2021),
(49, 17034106, 0, 0, 'Yahoo', 'edicion 2', 2021),
(50, 45533645, 0, 0, 'Google', 'edicion 3', 2019),
(51, 32399850, 0, 0, 'Macromedia', 'edicion 3', 2020),
(52, 11876299, 0, 0, 'Yahoo', 'edicion 3', 2020),
(53, 40881636, 0, 0, 'Chami', 'edicion 1', 2020),
(54, 37809370, 0, 0, 'Lycos', 'edicion 2', 2020),
(55, 30565778, 0, 0, 'Adobe', 'edicion 3', 2020),
(56, 44780971, 0, 0, 'Lavasoft', 'edicion 3', 2021),
(57, 32895692, 0, 0, 'Lycos', 'edicion 1', 2019),
(58, 46711839, 0, 0, 'Lycos', 'edicion 1', 2020),
(59, 20797708, 0, 0, 'Google', 'edicion 3', 2020),
(60, 30650995, 0, 0, 'Yahoo', 'edicion 2', 2021),
(61, 5073357, 0, 0, 'Chami', 'edicion 2', 2021),
(62, 7371548, 0, 0, 'Altavista', 'edicion 2', 2021),
(63, 17120312, 0, 0, 'Lavasoft', 'edicion 3', 2021),
(64, 11754457, 0, 0, 'Lycos', 'edicion 1', 2020),
(65, 35961822, 0, 0, 'Adobe', 'edicion 2', 2020),
(66, 25137877, 0, 0, 'Sibelius', 'edicion 3', 2019),
(67, 40976164, 0, 0, 'Microsoft', 'edicion 2', 2021),
(68, 22865245, 0, 0, 'Apple Systems', 'edicion 1', 2020),
(69, 33358040, 0, 0, 'Sibelius', 'edicion 2', 2019),
(70, 35905454, 0, 0, 'Cakewalk', 'edicion 1', 2020),
(71, 41904208, 0, 0, 'Yahoo', 'edicion 3', 2020),
(72, 49638436, 0, 0, 'Apple Systems', 'edicion 2', 2021),
(73, 45105542, 0, 0, 'Google', 'edicion 2', 2020),
(74, 35413227, 0, 0, 'Chami', 'edicion 1', 2021),
(75, 24526488, 0, 0, 'Cakewalk', 'edicion 3', 2020),
(76, 42159959, 0, 0, 'Adobe', 'edicion 1', 2020),
(77, 48723635, 0, 0, 'Macromedia', 'edicion 2', 2021),
(78, 33528960, 0, 0, 'Borland', 'edicion 3', 2021),
(79, 42982609, 0, 0, 'Yahoo', 'edicion 2', 2020),
(80, 8340376, 0, 0, 'Macromedia', 'edicion 1', 2021),
(81, 40303410, 0, 0, 'Microsoft', 'edicion 1', 2021),
(82, 10915157, 0, 0, 'Yahoo', 'edicion 1', 2021),
(83, 31909652, 0, 0, 'Lycos', 'edicion 2', 2021),
(84, 50831716, 0, 0, 'Yahoo', 'edicion 3', 2019),
(85, 34831126, 0, 0, 'Lavasoft', 'edicion 1', 2021),
(86, 9060579, 0, 0, 'Sibelius', 'edicion 1', 2020),
(87, 38231675, 0, 0, 'Apple Systems', 'edicion 1', 2020),
(88, 44481984, 0, 0, 'Cakewalk', 'edicion 3', 2020),
(89, 30231622, 0, 0, 'Lavasoft', 'edicion 2', 2020),
(90, 37915185, 0, 0, 'Borland', 'edicion 2', 2020),
(91, 34565393, 0, 0, 'Lycos', 'edicion 3', 2020),
(92, 44040661, 0, 0, 'Macromedia', 'edicion 2', 2020),
(93, 10590023, 0, 0, 'Lycos', 'edicion 1', 2021),
(94, 48514567, 0, 0, 'Sibelius', 'edicion 1', 2019),
(95, 48435318, 0, 0, 'Apple Systems', 'edicion 2', 2019),
(96, 9895167, 0, 0, 'Lycos', 'edicion 1', 2020),
(97, 6713896, 0, 0, 'Finale', 'edicion 1', 2020),
(98, 41566248, 0, 0, 'Lycos', 'edicion 1', 2020),
(99, 36758686, 0, 0, 'Lycos', 'edicion 2', 2021),
(100, 12742325, 0, 0, 'Google', 'edicion 1', 2020);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(100) NOT NULL,
  `usuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contrasena` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contrasena`, `email`) VALUES
(1, 'GitLuisG', '123456789', '1730505@upv.edu.mx'),
(2, 'GitLuisG', '123456789', 'eprimo68@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
