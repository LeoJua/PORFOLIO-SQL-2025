-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2018 a las 15:38:07
-- Versión del servidor: 5.7.11
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `technology_dunk`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias_productos`
--

CREATE TABLE `categorias_productos` (
  `codigo` int(100) NOT NULL,
  `nombre` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias_productos`
--

INSERT INTO `categorias_productos` (`codigo`, `nombre`) VALUES
(1, 'verduras'),
(2, 'frutas'),
(3, 'carnes'),
(4, 'bebidas'),
(5, 'lacteos'),
(6, 'salsas'),
(7, 'verduras'),
(8, 'cocteles'),
(10, 'pescados'),
(11, 'Vino'),
(12, 'perinos'),
(13, 'perino'),
(14, 'felipe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `Id` int(11) NOT NULL,
  `id_usuario` int(100) NOT NULL,
  `numeroventa` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `id_producto` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `precio` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `cantidad` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `subtotal` text COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`Id`, `id_usuario`, `numeroventa`, `fecha`, `hora`, `id_producto`, `precio`, `cantidad`, `subtotal`) VALUES
(54, 60, 1, '2018-05-30', '09:45:11', 'perro cocido', '12000', '1', '12000'),
(55, 60, 1, '2018-05-30', '09:45:11', 'pene en salsa', '544545', '1', '544545'),
(56, 60, 2, '2018-05-30', '09:45:28', 'carne', '7000', '1', '7000'),
(57, 60, 3, '2018-06-07', '10:10:34', '', '12000', '1', '12000'),
(58, 60, 4, '2018-06-07', '10:20:12', '', '16000', '4', '64000'),
(59, 60, 5, '2018-06-07', '10:24:04', '', '7000', '20', '140000'),
(60, 60, 6, '2018-06-07', '10:24:42', '', '15000', '22', '330000'),
(61, 60, 7, '2018-06-07', '10:29:58', '', '12', '1', '12'),
(62, 60, 8, '2018-06-07', '10:30:39', '', '10000', '1', '10000'),
(63, 60, 9, '2018-06-07', '10:31:27', '', '8500', '66', '561000'),
(64, 60, 10, '2018-06-07', '10:32:49', 'perro cocido', '12000', '1', '12000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesa`
--

CREATE TABLE `mesa` (
  `id` int(250) NOT NULL,
  `numdepersonas` int(100) NOT NULL,
  `ubicacion` varchar(100) NOT NULL,
  `estado` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mesa`
--

INSERT INTO `mesa` (`id`, `numdepersonas`, `ubicacion`, `estado`) VALUES
(1, 1, 'atras', 1),
(2, 2, 'centro', 1),
(3, 6, 'atras', 1),
(4, 8, 'atras', 1),
(5, 9, 'atras', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platos`
--

CREATE TABLE `platos` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `precio` double NOT NULL,
  `id_categoria` varchar(255) CHARACTER SET latin1 NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `platos`
--

INSERT INTO `platos` (`id`, `nombre`, `descripcion`, `imagen`, `precio`, `id_categoria`, `estado`) VALUES
(1, 'carne', 'carne en bisteck', 'carne12.jpg', 7000, 'carne', 1),
(2, 'Carne', 'carne frita', 'carne2.jpg', 8500, 'carne', 1),
(3, 'vino', 'vino chileno', 'vino1.jpg', 15000, 'Vino', 1),
(4, 'vino', 'vino colombiano', 'vino2.jpg', 16000, 'vino', 1),
(7, 'cordero', 'cordero', 'cordero al horno.jpg', 16000, 'carnes', 0),
(8, 'peperoni', 'peperoni', 'peperoni.jpg', 12, 'carnes', 1),
(9, 'salmon', 'salmon', '1382545141944.jpeg', 16000, 'pescados', 1),
(10, 'cerveza ', 'marca aguila', 'cerveza-aguila-330ml.png', 2000, 'bebidas', 0),
(11, 'carne molida', 'con queso y macarrones', '', 14000, 'verduras', 0),
(12, 'arroz', 'arroz', 'carne4.jpg', 1000, 'carnes', 1),
(13, 'carne asada', 'carne', '', 14000, 'carnes', 0),
(15, 'pizza', 'pizza', '53110049.gif', 10000, 'carnes', 1),
(16, 'carne frita', 'carne', 'carne5.jpg', 10000, 'carnes', 1),
(17, 'pene en salsa', 'carne', 'carne7.jpg', 544545, 'carnes', 1),
(18, 'cuca en salsa', 'una rica en salsa', 'carne6.jpg', 35000, 'carnes', 1),
(19, 'cuca en salsa', 'una rica en salsa', 'carne13.jpg', 12000, 'carnes', 1),
(20, 'cuca en salsa', 'una rica en salsa', 'carne13.jpg', 12000, 'carnes', 1),
(21, 'perro cocido', 'un delicioso perro cocido', 'come-perro-cocian-da-novia.jpg', 20000, 'carnes', 0),
(22, 'perro cocido', 'un delicioso perro cocido', 'come-perro-cocian-da-novia.jpg', 20000, 'carnes', 0),
(23, 'perro cocido', 'un delicioso perro cocido', 'come-perro-cocian-da-novia.jpg', 12000, 'frutas', 0),
(24, 'perro cocido', 'un delicioso perro cocido', 'come-perro-cocian-da-novia.jpg', 12000, 'frutas', 0),
(25, 'perro cocido', 'delicioso perro', 'come-perro-cocian-da-novia.jpg', 12000, 'carnes', 1),
(26, 'miguel al orno', 'delicioso weeee', '', 12350, 'verduras', 1),
(27, 'miguel al orno', 'delicioso we', '', 1, '6', 1),
(28, 'pipip', 'ewelee', 'LOGO JESUS NAME.png', 4, '3', 1),
(29, 'felipe', 'asdasd', 'descarga.jpg', 12300, '4', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codigo` int(250) NOT NULL,
  `nombre` varchar(10000) NOT NULL,
  `codigo_categorias_productos` varchar(255) NOT NULL,
  `id_proveedores` varchar(255) NOT NULL,
  `cantidad` varchar(10000) NOT NULL,
  `peso` varchar(10000) NOT NULL,
  `medida` varchar(100) NOT NULL,
  `precio` varchar(10000) NOT NULL,
  `estado` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigo`, `nombre`, `codigo_categorias_productos`, `id_proveedores`, `cantidad`, `peso`, `medida`, `precio`, `estado`) VALUES
(29, 'tomate', '14', '1', '5', '50', 'Lb', '50000', 1),
(30, 'peproni', '7', '2', '5', '12', 'Ml', '40000', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(255) NOT NULL,
  `nombre` varchar(1000) NOT NULL,
  `fecha` date NOT NULL,
  `direccion` varchar(1000) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `nombre`, `fecha`, `direccion`, `telefono`, `email`, `estado`) VALUES
(1, 'postobon', '2018-04-06', 'Cl. 17a #35-75', '3122136819', 'postobon456@hotmail.com', 1),
(2, 'Carnes La 63', '2018-04-09', 'Ac 63 #16A-44, BogotÃ¡', '2111980', 'carnes63@hotmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `codigo` int(6) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `Apellido` varchar(30) NOT NULL,
  `Documento` int(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `genero` varchar(15) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `pasadmin` varchar(250) NOT NULL,
  `rol` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`codigo`, `nombre`, `Apellido`, `Documento`, `password`, `fecha`, `genero`, `telefono`, `pasadmin`, `rol`) VALUES
(1, 'Admin', 'gg', 0, '', '0001-01-01', 'Mujer', '3144722232', 'adminpost', 1),
(60, 'miguel', 'barrera', 11111, 'Migueangel', '2018-04-03', 'masculino', '314472232', '', 2),
(68, 'edw', 'edw', 5678, '123', '2018-06-22', 'Hombre', '555', '', 2),
(62, 'edwin', 'aguilar', 1233511946, 'pepe', '2018-04-20', 'Hombre', '1234', '', 0),
(63, 'edwin8', 'aguilar8', 1234, '12345', '2018-04-12', 'Mujer', '555', '', 2),
(67, 'miguel', 'angel', 45678, '123', '2018-06-14', 'Hombre', '555', '', 2),
(66, 'jhohaqn ', 'vaca', 1234567889, '12345', '2018-05-12', 'Mujer', '76876287', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(255) NOT NULL,
  `id_usuario` int(30) NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(10) NOT NULL,
  `zonahoraria` varchar(5) NOT NULL,
  `id_mesa` int(20) NOT NULL,
  `estado` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias_productos`
--
ALTER TABLE `categorias_productos`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `platos`
--
ALTER TABLE `platos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias_productos`
--
ALTER TABLE `categorias_productos`
  MODIFY `codigo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT de la tabla `mesa`
--
ALTER TABLE `mesa`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `platos`
--
ALTER TABLE `platos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `codigo` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `codigo` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
