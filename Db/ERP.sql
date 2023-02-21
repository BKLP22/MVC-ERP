-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-02-2023 a las 12:46:17
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `erp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `dni` varchar(9) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `correo` varchar(40) DEFAULT NULL,
  `ciudad` varchar(30) DEFAULT NULL,
  `cp` varchar(6) DEFAULT NULL,
  `iban` varchar(30) DEFAULT NULL,
  `tlf` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`dni`, `nombre`, `apellido`, `correo`, `ciudad`, `cp`, `iban`, `tlf`) VALUES
('35678788C', 'Steven', 'Miguel', 'steven@gmail.com', 'Madrid', '28037', 'ES7921000813610723462213', '629749431');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id_compra` int(6) NOT NULL,
  `id_proveedor` int(3) DEFAULT NULL,
  `fecha_compra` datetime DEFAULT NULL,
  `precio` decimal(9,2) DEFAULT NULL,
  `coste_logistico` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id_compra`, `id_proveedor`, `fecha_compra`, `precio`, `coste_logistico`) VALUES
(1, 1, '0000-00-00 00:00:00', '1040.00', '8.30'),
(3, 1, '0000-00-00 00:00:00', NULL, NULL),
(4, 1, '1212-12-12 00:00:00', NULL, NULL),
(5, 1, '1313-12-13 00:00:00', NULL, NULL),
(6, 1, '1414-12-13 00:00:00', NULL, NULL),
(7, 1, '1333-03-12 00:00:00', NULL, NULL),
(8, 1, '1232-03-12 00:00:00', NULL, NULL),
(9, 1, '3321-03-31 00:00:00', NULL, NULL),
(10, 1, '3321-03-31 00:00:00', NULL, NULL),
(11, 1, '3321-03-31 00:00:00', NULL, NULL),
(12, 1, '3321-03-31 00:00:00', NULL, NULL),
(13, 1, '3321-03-31 00:00:00', NULL, NULL),
(14, 1, '3332-03-31 00:00:00', NULL, NULL),
(15, 1, '1212-03-12 00:00:00', NULL, NULL),
(17, 1, '2121-03-12 00:00:00', NULL, NULL),
(18, 1, '2333-03-12 00:00:00', NULL, NULL),
(19, 1, '2333-03-12 00:00:00', NULL, NULL),
(20, 1, '1233-03-12 00:00:00', NULL, NULL),
(21, 1, '2133-03-12 00:00:00', NULL, NULL),
(22, 1, '3333-02-12 00:00:00', NULL, NULL),
(23, 1, '3332-03-12 00:00:00', NULL, NULL),
(24, 1, '1233-03-12 00:00:00', NULL, NULL),
(25, 1, '2132-03-12 00:00:00', NULL, NULL),
(26, 1, '2023-02-10 00:00:00', NULL, NULL),
(27, 1, '2023-02-18 00:00:00', NULL, NULL),
(28, 1, '2023-02-10 00:00:00', NULL, NULL),
(29, 1, '2023-02-16 00:00:00', NULL, NULL),
(30, 1, '2023-02-25 00:00:00', NULL, NULL),
(31, 1, '2023-02-11 00:00:00', NULL, NULL),
(32, 1, '2023-02-02 00:00:00', NULL, NULL),
(33, 1, '2023-03-03 00:00:00', NULL, NULL),
(34, 1, '2023-02-17 00:00:00', NULL, NULL),
(35, 1, '2023-02-24 00:00:00', NULL, NULL),
(36, 1, '2023-02-26 00:00:00', NULL, NULL),
(37, 1, '2023-02-18 00:00:00', NULL, NULL),
(38, 1, '2023-02-25 00:00:00', NULL, NULL),
(39, 1, '2023-02-12 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envio`
--

CREATE TABLE `envio` (
  `id_pedido` int(6) NOT NULL,
  `total` decimal(9,2) DEFAULT NULL,
  `dni_cliente` varchar(9) DEFAULT NULL,
  `coste_envio` decimal(5,2) DEFAULT NULL,
  `tiempo_estimado` varchar(30) DEFAULT NULL,
  `tiempo_real` varchar(30) DEFAULT NULL,
  `fecha_venta` datetime DEFAULT NULL,
  `fecha_envio` datetime DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `envio`
--

INSERT INTO `envio` (`id_pedido`, `total`, `dni_cliente`, `coste_envio`, `tiempo_estimado`, `tiempo_real`, `fecha_venta`, `fecha_envio`, `direccion`) VALUES
(1, '26.40', '35678788C', '2.00', '2 dias', '2 dias', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Calle Cortada n34 7A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escandallo`
--

CREATE TABLE `escandallo` (
  `id_compuesto` varchar(6) NOT NULL,
  `id_producto` varchar(6) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `uds` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_compra`
--

CREATE TABLE `factura_compra` (
  `id_compra` int(6) NOT NULL,
  `id_producto` varchar(6) NOT NULL,
  `cantidad` int(4) DEFAULT NULL,
  `precio_unitario` decimal(9,2) DEFAULT NULL,
  `total` decimal(9,2) DEFAULT NULL,

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `factura_compra`
--

INSERT INTO `factura_compra` (`id_compra`, `id_producto`, `cantidad`, `precio_unitario`, `total`) VALUES
(1, '1', 100, '10.40', '1048.30'),
(1, '2', 100, '20.80', '2080.00'),
(19, '', 100, '10.00', '1000.00'),
(39, '', 100, '10.00', '1000.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_venta`
--

CREATE TABLE `factura_venta` (
  `id_pedido` int(6) NOT NULL,
  `id_producto` varchar(6) NOT NULL,
  `cantidad` int(4) DEFAULT NULL,
  `pvp_unitario` decimal(9,2) DEFAULT NULL,
  `total` decimal(9,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `factura_venta`
--

INSERT INTO `factura_venta` (`id_pedido`, `id_producto`, `cantidad`, `pvp_unitario`, `total`) VALUES
(1, '1', 2, '13.20', '26.40'),
(1, '2', 10, '30.50', '305.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poblaciones`
--

CREATE TABLE `poblaciones` (
  `cp` varchar(6) NOT NULL,
  `poblacion` varchar(40) DEFAULT NULL,
  `provincia` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `poblaciones`
--

INSERT INTO `poblaciones` (`cp`, `poblacion`, `provincia`) VALUES
('28007', 'Madrid', 'Madrid'),
('28037', 'Madrid', 'Madrid');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` varchar(6) NOT NULL,
  `precio_unitario` decimal(9,2) DEFAULT NULL,
  `pvp` decimal(9,2) DEFAULT NULL,
  `modelo` varchar(30) DEFAULT NULL,
  `marca` varchar(30) DEFAULT NULL,
  `categoria` varchar(20) DEFAULT NULL,
  `descripcion` varchar(60) DEFAULT NULL,
  `stock` int(6) DEFAULT NULL,
  `final` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `precio_unitario`, `pvp`, `modelo`, `marca`, `categoria`, `descripcion`, `stock`, `final`) VALUES
('1', '10.40', '13.20', 'EX12', 'SUPERMARCA', 'Limpieza', 'Producto altamente eficaz para quitar manchas', 98, 0),
('2', '20.80', '30.50', 'EX15', 'SUPERMARCA', 'Limpieza', 'Producto para limpiar madera', 100, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int(3) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `cp` varchar(6) DEFAULT NULL,
  `correo` varchar(40) DEFAULT NULL,
  `tlf` varchar(14) DEFAULT NULL,
  `iban` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `nombre`, `cp`, `correo`, `tlf`, `iban`) VALUES
(1, 'Casaca SA', '28007', 'casaca@gmail.com', '666666777', 'ES7921000813610123456789'),
(2, 'Merino SA', '28037', 'merino@gmail.com', '666666624', 'ES1123123123123123'),
(3, 'Steven CORP', '28037', 'merino@gmail.com', '666666624', 'ES1123123123123123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ide_usu` int(11) NOT NULL,
  `nom_usu` varchar(10) DEFAULT NULL,
  `cor_usu` varchar(50) DEFAULT NULL,
  `con_usu` varchar(100) DEFAULT NULL,
  `tip_usu` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ide_usu`, `nom_usu`, `cor_usu`, `con_usu`, `tip_usu`) VALUES
(1, 'Bryan', 'kenny@kenny.com', '$2y$10$lE5C2w3EwO6C0d7JgIQ/VuJZ5xwj2u7fBC7XIzTxXU75spK8OO/P6', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`dni`),
  ADD KEY `fk_cppoblaciones_cpclientes` (`cp`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `fk_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `envio`
--
ALTER TABLE `envio`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `fk_pedidos_dni` (`dni_cliente`);

--
-- Indices de la tabla `escandallo`
--
ALTER TABLE `escandallo`
  ADD PRIMARY KEY (`id_compuesto`,`id_producto`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `factura_compra`
--
ALTER TABLE `factura_compra`
  ADD PRIMARY KEY (`id_compra`,`id_producto`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `factura_venta`
--
ALTER TABLE `factura_venta`
  ADD PRIMARY KEY (`id_pedido`,`id_producto`),
  ADD KEY `factura` (`id_producto`);

--
-- Indices de la tabla `poblaciones`
--
ALTER TABLE `poblaciones`
  ADD PRIMARY KEY (`cp`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`),
  ADD KEY `fk_cppoblaciones_cpproveedores` (`cp`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ide_usu`),
  ADD UNIQUE KEY `nom_usu` (`nom_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ide_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `fk_cppoblaciones_cpclientes` FOREIGN KEY (`cp`) REFERENCES `poblaciones` (`cp`);

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `fk_proveedor` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedores` (`id_proveedor`);

--
-- Filtros para la tabla `envio`
--
ALTER TABLE `envio`
  ADD CONSTRAINT `fk_factura_idenvio` FOREIGN KEY (`id_pedido`) REFERENCES `factura_venta` (`id_pedido`),
  ADD CONSTRAINT `fk_pedidos_dni` FOREIGN KEY (`dni_cliente`) REFERENCES `clientes` (`dni`);

--
-- Filtros para la tabla `escandallo`
--
ALTER TABLE `escandallo`
  ADD CONSTRAINT `escandallo_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`),
  ADD CONSTRAINT `fk_escandallo_productos` FOREIGN KEY (`id_compuesto`) REFERENCES `productos` (`id_producto`);

--
-- Filtros para la tabla `factura_compra`
--
ALTER TABLE `factura_compra`
  ADD CONSTRAINT `fk_facturacompra_idcompra` FOREIGN KEY (`id_compra`) REFERENCES `compras` (`id_compra`);

--
-- Filtros para la tabla `factura_venta`
--
ALTER TABLE `factura_venta`
  ADD CONSTRAINT `factura` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `factura_compra` (`id_producto`);

--
-- Filtros para la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD CONSTRAINT `fk_cppoblaciones_cpproveedores` FOREIGN KEY (`cp`) REFERENCES `poblaciones` (`cp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;





