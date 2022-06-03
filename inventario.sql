-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2022 a las 15:38:03
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario`
--
CREATE DATABASE IF NOT EXISTS `inventario` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci;
USE `inventario`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `ced_cliente` varchar(10) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nom_cliente` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `ape_cliente` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tlf_cliente` varchar(10) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `direc_cliente` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `codigo` int(11) NOT NULL,
  `rif_gerente` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nom_empresa` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `direc_empresa` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tlf_empresa` varchar(10) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `ced_gerente` varchar(10) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nom_gerente` varchar(25) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `ape_gerente` varchar(25) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `correo_gerente` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tlf_gerente` varchar(10) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `iva` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material_almacen`
--

CREATE TABLE `material_almacen` (
  `id_material_almacen` int(11) NOT NULL,
  `cod_material` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `material` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `precio` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `existencia` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `ubicacion_deposito` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `status_material` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `rif_proveedor` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha_ingreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_compre`
--

CREATE TABLE `orden_compre` (
  `id_orden_compras` int(11) NOT NULL,
  `cod_material` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `material` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `precio_orden` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cantidad` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `rif_proveedor` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha_ingreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `cod_pedidos` int(11) NOT NULL,
  `cod_material` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `material_pedido` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cantidad_pedido` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha_pedido` date NOT NULL,
  `rif_proveedor` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `cod_proveedor` int(11) NOT NULL,
  `rif_proveedor` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre_proveedor` varchar(25) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tlf_proveedor` varchar(10) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `direc_proveedor` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `email_proveedor` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nom_contacto` varchar(25) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cedula` varchar(10) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cargo` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `usuario` varchar(25) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `password2` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pregunta` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `respuesta` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nivel` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha_ingreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `cedula`, `cargo`, `usuario`, `password`, `password2`, `pregunta`, `respuesta`, `nivel`, `fecha_ingreso`) VALUES
(1, 'Sebas', '1719539361', 'Admin', 'SebasAdmin', 'sebas1234', 'sebas1234', 'edad', '24 años', 'administrador', '2022-06-03');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `material_almacen`
--
ALTER TABLE `material_almacen`
  ADD PRIMARY KEY (`id_material_almacen`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`cod_pedidos`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `material_almacen`
--
ALTER TABLE `material_almacen`
  MODIFY `id_material_almacen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `cod_pedidos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
