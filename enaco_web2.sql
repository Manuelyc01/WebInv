-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-04-2021 a las 11:00:22
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `enaco_web2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `image`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@mail.com', '$2y$10$WQ.3mXYz0GPDkCRwyDxo7u3FMxB9zUUiQOnIfnsfga9I/ytSyG4uG', NULL, 1, NULL, NULL, NULL),
(2, 'prueba1', 'prueba@gmail.com', '$2y$10$w/wAgNOCRaehzUxYZMuO8.4pFPqDVEBubF7DnFqpFHryb8/M9Clj.', NULL, 1, NULL, '2020-02-13 22:51:26', '2020-02-14 19:38:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE `banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `orden` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`id`, `orden`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-11-15 03:07:35', '2019-11-15 03:07:35'),
(3, 2, '2019-12-18 21:43:43', '2019-12-18 21:43:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner_translations`
--

CREATE TABLE `banner_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `textoBtn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enlaceBtn` text COLLATE utf8mb4_unicode_ci,
  `fondoDesktop` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fondoMobile` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `banner_translations`
--

INSERT INTO `banner_translations` (`id`, `titulo`, `des`, `textoBtn`, `enlaceBtn`, `fondoDesktop`, `fondoMobile`, `banner_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'Cosechamos tradición', '<p>Disfruta el aroma de la herencia milenaria</p>', 'Conócenos', 'http://web.enaco.com.pe/es/nosotros/historia', '/uploads/shares/banner/banner.jpg', '/uploads/shares/banner/mobile-1.jpg', 1, 'es', '2019-11-15 03:07:35', '2020-03-31 08:48:28'),
(2, 'Reaping tradition', '<p>Enjoy the aroma of the thousand-year legacy</p>', 'Known us', 'http://web.enaco.com.pe/en/nosotros/historia', '/uploads/shares/banner/banner.jpg', '/uploads/shares/banner/banner.jpg', 1, 'en', '2019-11-15 03:07:35', '2020-03-31 08:52:51'),
(5, 'Productos con herencia', '<p>Conoce las variedades que tenemos</p>', 'Productos', 'http://web.enaco.com.pe/es/productos/industrial/todos', '/uploads/shares/banner/banner_2.jpg', '/uploads/shares/banner/mobile-2_1.jpg', 3, 'es', '2019-12-18 21:43:43', '2020-03-31 08:49:21'),
(6, 'Products with inheritance', '<p>Meet the varieties we have</p>', 'See Products', 'http://web.enaco.com.pe/en/productos/industrial/todos', '/uploads/shares/banner/banner_2.jpg', '/uploads/shares/banner/banner_2.jpg', 3, 'en', '2019-12-18 21:43:43', '2020-03-31 08:53:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id`, `created_at`, `updated_at`) VALUES
(1, '2019-11-15 05:41:00', '2019-11-15 05:41:00'),
(2, '2019-11-15 05:41:08', '2019-11-15 05:41:08'),
(5, '2019-11-22 15:11:12', '2019-11-22 15:11:12'),
(6, '2019-11-22 15:15:18', '2019-11-22 15:15:18'),
(7, '2019-11-22 15:15:52', '2019-11-22 15:15:52'),
(8, '2019-11-22 15:21:04', '2019-11-22 15:21:04'),
(10, '2019-12-04 17:02:41', '2019-12-04 17:02:41'),
(11, '2019-12-04 17:06:59', '2019-12-04 17:06:59'),
(12, '2020-02-28 23:25:38', '2020-02-28 23:25:38'),
(13, '2020-03-02 14:11:33', '2020-03-02 14:11:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo_translations`
--

CREATE TABLE `cargo_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cargo_translations`
--

INSERT INTO `cargo_translations` (`id`, `nombre`, `cargo_id`, `locale`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'Gerente General (e)', 1, 'es', '2019-11-15 05:41:00', '2020-04-23 03:52:07', 'gerente-general-e'),
(2, 'Gerente General', 1, 'en', '2019-11-15 05:41:00', '2019-11-22 14:39:00', ''),
(3, 'Gerente de Administración y Finanzas', 2, 'es', '2019-11-15 05:41:08', '2020-02-28 20:18:50', 'gerente-de-administracion-y-finanzas'),
(4, 'Gerente', 2, 'en', '2019-11-15 05:41:08', '2019-11-15 05:41:08', ''),
(9, 'Coordinador', 5, 'es', '2019-11-22 15:11:12', '2019-11-22 15:11:12', 'coordinador'),
(10, 'Coordinador', 5, 'en', '2019-11-22 15:11:12', '2019-11-22 15:11:12', 'coordinador'),
(11, 'Redise-o Organizacional', 6, 'es', '2019-11-22 15:15:18', '2019-11-22 15:15:18', 'redise-o-organizacional'),
(12, 'Redise-o Organizacional', 6, 'en', '2019-11-22 15:15:18', '2019-11-22 15:15:18', 'redise-o-organizacional'),
(13, 'Contador General', 7, 'es', '2019-11-22 15:15:52', '2019-11-22 15:15:52', 'contador-general'),
(14, 'Contador General', 7, 'en', '2019-11-22 15:15:52', '2019-11-22 15:15:52', 'contador-general'),
(15, 'Supervisor de Presupuesto y Estadística', 8, 'es', '2019-11-22 15:21:04', '2019-11-22 15:21:04', 'supervisor-de-presupuesto-y-estadistica'),
(16, 'Supervisor de Presupuesto y Estadística', 8, 'en', '2019-11-22 15:21:04', '2019-11-22 15:21:04', 'supervisor-de-presupuesto-y-estadistica'),
(19, 'Gerente de Planeamiento, Presupuesto e Informática', 10, 'es', '2019-12-04 17:02:41', '2020-02-28 20:18:31', 'gerente-de-planeamiento-presupuesto-e-informatica'),
(20, 'Gerente de Planeamiento, presupuesto e informática', 10, 'en', '2019-12-04 17:02:41', '2019-12-04 17:02:41', 'gerente-de-planeamiento-presupuesto-e-informatica'),
(21, 'Jefe de oficina de asesoría jurídica', 11, 'es', '2019-12-04 17:06:59', '2019-12-04 17:06:59', 'jefe-de-oficina-de-asesoria-juridica'),
(22, 'Jefe de oficina de asesoría jurídica', 11, 'en', '2019-12-04 17:06:59', '2019-12-04 17:06:59', 'jefe-de-oficina-de-asesoria-juridica'),
(23, 'Jefe de oficina de comercio industrial', 12, 'es', '2020-02-28 23:25:38', '2020-02-28 23:25:38', 'jefe-de-oficina-de-comercio-industrial'),
(24, 'Jefe de oficina de comercio industrial', 12, 'en', '2020-02-28 23:25:38', '2020-02-28 23:25:38', 'jefe-de-oficina-de-comercio-industrial'),
(25, 'Gerente de Comercio Tradicional (e)', 13, 'es', '2020-03-02 14:11:33', '2020-04-23 03:52:24', 'gerente-de-comercio-tradicional-e'),
(26, 'Gerente de Producción', 13, 'en', '2020-03-02 14:11:33', '2020-03-02 14:11:33', 'gerente-de-produccion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cate_servicio`
--

CREATE TABLE `cate_servicio` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cate_servicio`
--

INSERT INTO `cate_servicio` (`id`, `created_at`, `updated_at`) VALUES
(1, '2019-11-16 03:18:25', '2019-11-16 03:18:25'),
(2, '2019-11-16 03:18:39', '2019-11-16 03:18:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cate_servicio_translations`
--

CREATE TABLE `cate_servicio_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_servicio_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cate_servicio_translations`
--

INSERT INTO `cate_servicio_translations` (`id`, `nombre`, `cate_servicio_id`, `locale`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'Compra de bienes', 1, 'es', '2019-11-16 03:18:25', '2019-11-16 03:24:06', 'compra-de-bienes'),
(2, 'Compra de bienes', 1, 'en', '2019-11-16 03:18:25', '2019-11-16 03:18:25', ''),
(3, 'Compra de servicios', 2, 'es', '2019-11-16 03:18:39', '2019-11-16 03:24:09', 'compra-de-servicios'),
(4, 'Compra de servicios', 2, 'en', '2019-11-16 03:18:39', '2019-11-16 03:18:39', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto_denuncia`
--

CREATE TABLE `contacto_denuncia` (
  `id` int(10) UNSIGNED NOT NULL,
  `sede` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identificarse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombres` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dni` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arrayInvolucrados` text COLLATE utf8mb4_unicode_ci,
  `sospecha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `denunciaMensaje` text COLLATE utf8mb4_unicode_ci,
  `checkTerminos` tinyint(1) NOT NULL,
  `archivo` text COLLATE utf8mb4_unicode_ci,
  `fecha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `identificador` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contacto_denuncia`
--

INSERT INTO `contacto_denuncia` (`id`, `sede`, `tipo`, `identificarse`, `nombres`, `dni`, `telefono`, `correo`, `arrayInvolucrados`, `sospecha`, `denunciaMensaje`, `checkTerminos`, `archivo`, `fecha`, `created_at`, `updated_at`, `identificador`) VALUES
(1, 'Cusco', 'Prácticas vinculadas a actos de corrupción en general, con énfasis en funcionarios y demás', 'Sí', 'dfgdgdf', '70339310', '616 9009', 'jose@staffcreativa.pe', '[{\"nombres\":\"\",\"apellidos\":\"\",\"relacion\":\"\",\"cargo\":\"\",\"adicional\":\"\",\"tipo\":\"Persona interna\"}]', 'Sí', 'dfgdfgd', 1, 'archivos_denuncias/2020-D01-Fecha-08-01-2020.docx', '08-01-2020', '2020-01-08 20:02:49', '2020-01-08 20:02:49', '2020-D01'),
(2, 'Cusco', 'Prácticas vinculadas a actos de corrupción en general, con énfasis en funcionarios y demás', 'Sí', 'sfgdfgdf', '70339310', '616 9009', 'jose@staffcreativa.pe', '[{\"nombres\":\"\",\"apellidos\":\"\",\"relacion\":\"\",\"cargo\":\"\",\"adicional\":\"\",\"tipo\":\"Persona interna\"}]', 'Sí', 'dfgdfgdfg', 1, 'archivos_denuncias/2020-D02-Fecha-08-01-2020.docx', '08-01-2020', '2020-01-08 20:06:05', '2020-01-08 20:06:05', '2020-D02'),
(3, 'Cusco', 'Prácticas vinculadas a actos de corrupción en general, con énfasis en funcionarios y demás', 'Sí', 'Jose Francisco Palomino Lau', '70339310', '616 9009', 'jose@staffcreativa.pe', NULL, 'Sí', 'Prueba 123', 1, 'archivos_denuncias/2020-D03-Fecha-09-01-2020.docx', '09-01-2020', '2020-01-09 16:31:49', '2020-01-09 16:31:49', '2020-D03'),
(4, 'Cusco', 'Prácticas vinculadas a actos de corrupción en general, con énfasis en funcionarios y demás', 'Sí', 'Jose Francisco Palomino Lau', '70339310', '616 9009', 'jose@staffcreativa.pe', NULL, 'Sí', 'sdfsdfs', 1, 'archivos_denuncias/2020-D04-Fecha-09-01-2020.docx', '09-01-2020', '2020-01-09 16:32:34', '2020-01-09 16:32:34', '2020-D04'),
(5, 'Cusco', 'Prácticas vinculadas a actos de corrupción en general, con énfasis en funcionarios y demás', 'Sí', 'Jose Francisco Palomino Lau', '70339310', '616 9009', 'jose@staffcreativa.pe', NULL, 'Sí', 'sdfsfdsf', 1, 'archivos_denuncias/2020-D05-Fecha-09-01-2020.docx', '09-01-2020', '2020-01-09 16:34:10', '2020-01-09 16:34:10', '2020-D05'),
(6, 'Cusco', 'Prácticas vinculadas a actos de corrupción en general, con énfasis en funcionarios y demás', 'Sí', 'dasdsd', '1253673', '1234567890', 'comercial2@staffcreativa.com', NULL, 'No sabe', 'eqweeqweq', 1, 'archivos_denuncias/2020-D06-Fecha-09-01-2020.pdf', '09-01-2020', '2020-01-09 16:51:17', '2020-01-09 16:51:17', '2020-D06'),
(7, 'Cusco', 'Prácticas vinculadas a actos de corrupción en general, con énfasis en funcionarios y demás', 'Sí', 'Claudia Burgos', '70339310', '511 221 1575', 'claudia@staffcreativa.com', NULL, 'Sí', 'ajjfbkwf', 1, 'archivos_denuncias/2020-D07-Fecha-09-01-2020.docx', '09-01-2020', '2020-01-09 22:40:13', '2020-01-09 22:40:13', '2020-D07'),
(8, 'Cusco', 'Prácticas vinculadas a actos de corrupción en general, con énfasis en funcionarios y demás', 'Sí', 'prueba pineda', '60877888', '923131813', 'informes@terreno.pe', NULL, 'No sabe', 'prueba', 1, 'archivos_denuncias/2020-D08-Fecha-09-01-2020.pdf', '09-01-2020', '2020-01-09 22:41:45', '2020-01-09 22:41:45', '2020-D08'),
(9, 'Cusco', 'Prácticas vinculadas a actos de corrupción en general, con énfasis en funcionarios y demás', 'Sí', 'prueba pineda', '60877888', '923131813', 'informes@terreno.pe', NULL, 'No sabe', 'prueba', 1, 'archivos_denuncias/2020-D09-Fecha-09-01-2020.pdf', '09-01-2020', '2020-01-09 22:41:48', '2020-01-09 22:41:48', '2020-D09'),
(10, 'Cusco', 'Prácticas vinculadas a actos de corrupción en general, con énfasis en funcionarios y demás', 'Sí', 'prueba20', '70339310', '616 9009', 'jose@staffcreativa.pe', NULL, 'Sí', 'fghfgh', 1, 'archivos_denuncias/2020-D010-Fecha-09-01-2020.docx', '09-01-2020', '2020-01-09 23:52:15', '2020-01-09 23:52:15', '2020-D010'),
(11, 'Cusco', 'Prácticas vinculadas a actos de corrupción en general, con énfasis en funcionarios y demás', 'Sí', 'prueba20', '70339310', '616 9009', 'jose@staffcreativa.pe', NULL, 'Sí', 'fghfgh', 1, 'archivos_denuncias/2020-D11-Fecha-09-01-2020.jpg', '09-01-2020', '2020-01-09 23:52:54', '2020-01-09 23:52:54', '2020-D11'),
(12, 'Cusco', 'Prácticas vinculadas a actos de corrupción en general, con énfasis en funcionarios y demás', 'Sí', 'prueba20', '70339310', '616 9009', 'jose@staffcreativa.pe', NULL, 'Sí', 'sdfsdfds', 1, 'archivos_denuncias/2020-D12-Fecha-09-01-2020.jpg', '09-01-2020', '2020-01-09 23:57:19', '2020-01-09 23:57:19', '2020-D12'),
(13, 'Cusco', 'Prácticas vinculadas a actos de corrupción en general, con énfasis en funcionarios y demás', 'Sí', 'prueba20', '70339310', '616 9009', 'jose@staffcreativa.pe', NULL, 'Sí', 'dfgdfg', 1, 'archivos_denuncias/2020-D13-Fecha-10-01-2020.docx', '10-01-2020', '2020-01-10 00:05:38', '2020-01-10 00:05:38', '2020-D13'),
(14, 'Cusco', 'Prácticas vinculadas a actos de corrupción en general, con énfasis en funcionarios y demás', 'Sí', 'Claudia Burgos', '70339310', '511 221 1575', 'claudia@staffcreativa.com', NULL, 'Sí', 'gfgngn', 1, 'archivos_denuncias/2020-D14-Fecha-10-01-2020.jpeg', '10-01-2020', '2020-01-10 00:08:09', '2020-01-10 00:08:09', '2020-D14'),
(15, 'Quillabamba', 'Prácticas vinculadas a actos de corrupción en general, con énfasis en funcionarios y demás', 'Sí', 'prueba', '60846136', '923131813', 'jose@staffcreativa.pe', NULL, 'No desea revelarlo', 'prueba', 1, 'archivos_denuncias/2020-D15-Fecha-11-01-2020.jpg', '11-01-2020', '2020-01-11 00:29:30', '2020-01-11 00:29:30', '2020-D15'),
(16, 'Lima', 'Prácticas vinculadas a actos de corrupción en general, con énfasis en funcionarios y demás', 'Sí', 'Prueba Staff', '70707070', '333333', 'desarrollo@staffcreativa.pe', NULL, 'No sabe', 'Prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba prueba.', 1, 'archivos_denuncias/2020-D16-Fecha-22-01-2020.png', '22-01-2020', '2020-01-22 17:05:02', '2020-01-22 17:05:02', '2020-D16'),
(17, 'Cusco', 'Prácticas vinculadas a actos de corrupción en general, con énfasis en funcionarios y demás', 'Sí', 'Prueba2 Staff', '70707070', '3333333', 'desarrollo@staffcreativa.pe', NULL, 'No sabe', 'adad', 1, 'archivos_denuncias/2020-D17-Fecha-22-01-2020.png', '22-01-2020', '2020-01-22 17:36:03', '2020-01-22 17:36:03', '2020-D17'),
(18, 'Cusco', 'Prácticas vinculadas a actos de corrupción en general, con énfasis en funcionarios y demás', 'Sí', 'Prueba3', '70707070', '3333333', 'desarrollo@staffcreativa.pe', NULL, 'No sabe', 'asasdasdsad', 1, 'archivos_denuncias/2020-D18-Fecha-22-01-2020.png', '22-01-2020', '2020-01-22 17:44:21', '2020-01-22 17:44:21', '2020-D18'),
(19, 'Cusco', 'Prácticas vinculadas a actos de corrupción en general, con énfasis en funcionarios y demás', 'Sí', 'pruebaStaff4', '70348452', '3333333', 'desarrollo@staffcreativa.pe', NULL, 'Sí', 'prueba prueba', 1, 'archivos_denuncias/2020-D19-Fecha-22-01-2020.png', '22-01-2020', '2020-01-22 17:49:02', '2020-01-22 17:49:02', '2020-D19'),
(20, 'Trujillo', 'Prácticas vinculadas a actos de corrupción en general, con énfasis en funcionarios y demás', 'Sí', 'Moises', '88556655', '999999999', 'correo@correo.com', NULL, 'No sabe', 'Esta es una prueba del dia 30/03/2020 10:37pm', 1, '', '31-03-2020', '2020-03-31 08:38:33', '2020-03-31 08:38:33', '2020-D20'),
(21, 'Cusco', 'Prácticas vinculadas a actos de corrupción en general, con énfasis en funcionarios y demás', 'Sí', 'mayo05', '44444444', '999999999', 'correo@correo.com', NULL, 'Sí', 'prueba', 1, '', '05-05-2020', '2020-05-06 01:02:04', '2020-05-06 01:02:04', '2020-D21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto_global`
--

CREATE TABLE `contacto_global` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombres` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empresa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ruc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensaje` text COLLATE utf8mb4_unicode_ci,
  `check` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `producto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contacto_global`
--

INSERT INTO `contacto_global` (`id`, `nombres`, `apellidos`, `empresa`, `ruc`, `telefono`, `correo`, `fecha`, `mensaje`, `check`, `created_at`, `updated_at`, `producto`) VALUES
(1, 'Prueba', 'Prueba', 'Prueba empresa', '20510497725', '616 9009', 'jose@staffcreativa.pe', '09-01-2020', 'dfsgdfgdfg', 1, '2020-01-09 16:36:12', '2020-01-09 16:36:12', 'Mate de Coca'),
(2, 'dfgdfg', 'dfgdfg', 'dfgd', '20510497725', '2411112', 'jose@staffcreativa.pe', '09-01-2020', NULL, 1, '2020-01-09 16:43:29', '2020-01-09 16:43:29', NULL),
(3, 'prueba', 'prueba', 'prueba', '20510497725', '616 9009', 'jose@staffcreativa.pe', '09-01-2020', NULL, 1, '2020-01-09 16:44:21', '2020-01-09 16:44:21', 'Mate de Coca'),
(4, 'ddd', 'ddd', 'dddd', 'dddd', 'ddd', 's@gmail.com', '24-03-2020', 'dddd', 1, '2020-03-24 20:00:24', '2020-03-24 20:00:24', 'Hoja de coca con menta'),
(5, 'ddd', 'ddd', 'dddd', 'dddd', 'ddd', 's@gmail.com', '24-03-2020', 'select * from info where id=1;', 1, '2020-03-24 20:01:54', '2020-03-24 20:01:54', 'Hoja de coca con menta'),
(6, 'test', 'test', 'testscript', '12909090909', '999898989', 'test@gmail.com', '24-03-2020', '<a href=\"\"www.testmalicioso.com\">texto</a>\r\n<script>alert(\"script malicioso\");</script>', 1, '2020-03-24 20:49:19', '2020-03-24 20:49:19', 'Hoja de Coca con menta'),
(7, 'Moises', 'Acosta', 'prueba marzo', '10203040501', '999999999', 'correo@correo.com', '31-03-2020', 'Prueba de la opcion contactanos 30/03/2020 9:38pm', 1, '2020-03-31 07:38:58', '2020-03-31 07:38:58', 'Mate de Coca'),
(8, 'Prueba', 'mayo05', 'mayo05', '11223355441', '999999999', 'correo@correo.com', '05-05-2020', 'Me gustaría recibir información.\r\n(prueba)', 1, '2020-05-06 00:57:49', '2020-05-06 00:57:49', 'Mate de Coca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto_sugerencia`
--

CREATE TABLE `contacto_sugerencia` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombres` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documento` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nacionalidad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensaje` text COLLATE utf8mb4_unicode_ci,
  `check` tinyint(1) NOT NULL,
  `formaContacto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto_suscripcion`
--

CREATE TABLE `contacto_suscripcion` (
  `id` int(10) UNSIGNED NOT NULL,
  `correo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contacto_suscripcion`
--

INSERT INTO `contacto_suscripcion` (`id`, `correo`, `fecha`, `created_at`, `updated_at`) VALUES
(1, 'correo@correo.com', '31-03-2020', '2020-03-31 08:34:29', '2020-03-31 08:34:29'),
(2, 'correo@correo.com', '31-03-2020', '2020-03-31 08:34:31', '2020-03-31 08:34:31'),
(3, 'correo@correo.com', '31-03-2020', '2020-03-31 08:34:31', '2020-03-31 08:34:31'),
(4, 'correo@correo.com', '31-03-2020', '2020-03-31 08:34:32', '2020-03-31 08:34:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id`, `created_at`, `updated_at`) VALUES
(1, '2019-11-16 02:21:24', '2019-11-16 02:21:24'),
(2, '2019-11-16 02:21:30', '2019-11-16 02:21:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento_translations`
--

CREATE TABLE `departamento_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departamento_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `departamento_translations`
--

INSERT INTO `departamento_translations` (`id`, `nombre`, `departamento_id`, `locale`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'Cusco', 1, 'es', '2019-11-16 02:21:24', '2019-11-16 02:55:04', 'cusco'),
(2, 'Cusco', 1, 'en', '2019-11-16 02:21:24', '2019-11-16 02:21:24', ''),
(3, 'Lima', 2, 'es', '2019-11-16 02:21:30', '2019-11-16 02:55:08', 'lima'),
(4, 'Lima', 2, 'en', '2019-11-16 02:21:30', '2019-11-16 02:21:30', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dictionaries`
--

CREATE TABLE `dictionaries` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `dictionaries`
--

INSERT INTO `dictionaries` (`id`, `slug`) VALUES
(25, 'ver-productos'),
(26, 'ver-todos-los-productos'),
(27, 'nosotros'),
(28, 'historia'),
(29, 'nuestro-equipo'),
(30, 'productos'),
(31, 'sedes'),
(32, 'bolsas-de-trabajo'),
(33, 'bolsas-de-servicio'),
(34, 'blog'),
(35, 'informacion-gestion'),
(36, 'transparencia'),
(37, 'codigo-de-etica'),
(38, 'factura-electronica'),
(39, 'atencion-al-usuario'),
(40, 'ayuda-y-sugerencias'),
(41, 'denuncias'),
(42, 'legales'),
(43, 'terminos-y-condiciones'),
(44, 'privacidad-de-datos'),
(45, 'contactos'),
(46, 'siguenos-en'),
(47, 'todos-los-derechos-reservados'),
(48, 'disenada-por'),
(49, 'sucursal'),
(50, 'agencia'),
(51, 'unidad'),
(52, 'direccion'),
(53, 'telefono'),
(54, 'correo'),
(55, 'encuentranos-aqui'),
(56, 'cocaleros'),
(57, 'conocenos'),
(58, 'comercio-industrial'),
(59, 'equipo'),
(60, 'contactanos'),
(61, 'telf'),
(62, 'cel'),
(63, 'nombre'),
(64, 'apellido'),
(65, 'empresa'),
(66, 'ruc'),
(67, 'email'),
(68, 'acepto'),
(69, 'enviar'),
(70, 'ver-detalle'),
(71, 'solicitar-ahora'),
(72, 'beneficios'),
(73, 'ficha-de-producto'),
(74, 'no-productos'),
(75, 'zona-de-venta'),
(76, 'cotizar'),
(77, 'ver-mas'),
(78, 'tipo-consulta'),
(79, 'dni-o-identificacion'),
(80, 'nacionalidad'),
(81, 'forma-de-contacto'),
(82, 'acepto-autorizacion'),
(83, 'postula-aqui'),
(84, 'escoger-departamento'),
(85, 'no-servicio'),
(86, 'no-trabajos'),
(87, 'encuentranos-en-fb-como'),
(88, 'ser-comerciante'),
(89, 'herramientas-internas'),
(90, 'reporte-cocaleros'),
(91, 'intranet'),
(92, 'tde'),
(93, 'ver-mas-informacion-servicio'),
(94, 'denuncia'),
(95, 'home'),
(96, 'exportacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dictionary_translations`
--

CREATE TABLE `dictionary_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `static_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dictionary_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `dictionary_translations`
--

INSERT INTO `dictionary_translations` (`id`, `static_text`, `dictionary_id`, `locale`) VALUES
(49, 'Ver productos', 25, 'es'),
(50, 'See products', 25, 'en'),
(51, 'Ver todos los productos', 26, 'es'),
(52, 'ver-todos-los-productos', 26, 'en'),
(53, 'Nosotros', 27, 'es'),
(54, 'About us', 27, 'en'),
(55, 'Historia', 28, 'es'),
(56, 'Our story', 28, 'en'),
(57, 'Nuestro equipo', 29, 'es'),
(58, 'nuestro-equipo', 29, 'en'),
(59, 'Productos', 30, 'es'),
(60, 'Our Products', 30, 'en'),
(61, 'Sedes', 31, 'es'),
(62, 'Site', 31, 'en'),
(63, 'Bolsas de trabajo', 32, 'es'),
(64, 'bolsas-de-trabajo', 32, 'en'),
(65, 'Bolsas de servicio', 33, 'es'),
(66, 'bolsas-de-servicio', 33, 'en'),
(67, 'Blog', 34, 'es'),
(68, 'Blog', 34, 'en'),
(69, 'Información de gestión', 35, 'es'),
(70, 'informacion-gestion', 35, 'en'),
(71, 'Portal de Transparecia', 36, 'es'),
(72, 'Transparencia', 36, 'en'),
(73, 'Código de ética', 37, 'es'),
(74, 'codigo-de-etica', 37, 'en'),
(75, 'Factura electrónica', 38, 'es'),
(76, 'factura-electronica', 38, 'en'),
(77, 'Atención al usuario', 39, 'es'),
(78, 'Customer  Support', 39, 'en'),
(79, 'Consultas y sugerencias', 40, 'es'),
(80, 'Enquiries and suggestions', 40, 'en'),
(81, 'Denuncias', 41, 'es'),
(82, 'denuncias', 41, 'en'),
(83, 'Legales', 42, 'es'),
(84, 'legales', 42, 'en'),
(85, 'Términos y condiciones', 43, 'es'),
(86, 'Terms & Conditions', 43, 'en'),
(87, 'Privacidad de datos', 44, 'es'),
(88, 'privacidad-de-datos', 44, 'en'),
(89, 'Contactos', 45, 'es'),
(90, 'Contact us', 45, 'en'),
(91, 'Síguenos en', 46, 'es'),
(92, 'siguenos-en', 46, 'en'),
(93, 'Todos los derechos reservados', 47, 'es'),
(94, 'todos-los-derechos-reservados', 47, 'en'),
(95, 'Diseñada por', 48, 'es'),
(96, 'disenada-por', 48, 'en'),
(97, 'Sucursal', 49, 'es'),
(98, 'Branch', 49, 'en'),
(99, 'Agencia', 50, 'es'),
(100, 'Agency', 50, 'en'),
(101, 'Unidad Operativa', 51, 'es'),
(102, 'Operational Unit', 51, 'en'),
(103, 'Dirección', 52, 'es'),
(104, 'direccion', 52, 'en'),
(105, 'Teléfono', 53, 'es'),
(106, 'telefono', 53, 'en'),
(107, 'Correo', 54, 'es'),
(108, 'correo', 54, 'en'),
(109, 'Encuéntranos aquí', 55, 'es'),
(110, 'encuentranos-aqui', 55, 'en'),
(111, 'Cocaleros', 56, 'es'),
(112, 'Cocaleros', 56, 'en'),
(113, 'Conócenos', 57, 'es'),
(114, 'Meet us', 57, 'en'),
(115, 'Ver productos', 58, 'es'),
(116, 'comercio-industrial', 58, 'en'),
(117, 'Equipo', 59, 'es'),
(118, 'Staff', 59, 'en'),
(119, 'Contáctanos', 60, 'es'),
(120, 'Contact us', 60, 'en'),
(121, 'Telf', 61, 'es'),
(122, 'telf', 61, 'en'),
(123, 'Cel', 62, 'es'),
(124, 'cel', 62, 'en'),
(125, 'Nombre', 63, 'es'),
(126, 'nombre', 63, 'en'),
(127, 'Apellido', 64, 'es'),
(128, 'apellido', 64, 'en'),
(129, 'Empresa', 65, 'es'),
(130, 'empresa', 65, 'en'),
(131, 'Ruc', 66, 'es'),
(132, 'ruc', 66, 'en'),
(133, 'Email', 67, 'es'),
(134, 'email', 67, 'en'),
(135, 'Acepto', 68, 'es'),
(136, 'acepto', 68, 'en'),
(137, 'Enviar', 69, 'es'),
(138, 'Send', 69, 'en'),
(139, 'Ver detalle', 70, 'es'),
(140, 'See detail', 70, 'en'),
(141, 'Solicitar ahora', 71, 'es'),
(142, 'solicitar-ahora', 71, 'en'),
(143, 'Beneficios', 72, 'es'),
(144, 'beneficios', 72, 'en'),
(145, 'Ficha de producto', 73, 'es'),
(146, 'ficha-de-producto', 73, 'en'),
(147, 'No productos', 74, 'es'),
(148, 'no-productos', 74, 'en'),
(149, 'Zona de venta', 75, 'es'),
(150, 'zona-de-venta', 75, 'en'),
(151, 'Cotiza ahora', 76, 'es'),
(152, 'cotizar', 76, 'en'),
(153, 'Ver más', 77, 'es'),
(154, 'ver-mas', 77, 'en'),
(155, 'Tipo consulta', 78, 'es'),
(156, 'tipo-consulta', 78, 'en'),
(157, 'DNI o identificación', 79, 'es'),
(158, 'dni-o-identificacion', 79, 'en'),
(159, 'Nacionalidad', 80, 'es'),
(160, 'nacionalidad', 80, 'en'),
(161, 'Forma de contacto', 81, 'es'),
(162, 'forma-de-contacto', 81, 'en'),
(163, 'Acepto autorización', 82, 'es'),
(164, 'acepto-autorizacion', 82, 'en'),
(165, 'Postula aquí', 83, 'es'),
(166, 'postula-aqui', 83, 'en'),
(167, 'Escoger departamento', 84, 'es'),
(168, 'escoger-departamento', 84, 'en'),
(169, 'No servicio', 85, 'es'),
(170, 'no-servicio', 85, 'en'),
(171, 'No trabajos', 86, 'es'),
(172, 'no-trabajos', 86, 'en'),
(173, 'Encuéntranos como', 87, 'es'),
(174, 'encuentranos-en-fb-como', 87, 'en'),
(175, 'Ser Comerciante', 88, 'es'),
(176, 'ser-comerciante', 88, 'en'),
(177, 'Herramientas Internas', 89, 'es'),
(178, 'herramientas-internas', 89, 'en'),
(179, 'Reporte Cocaleros', 90, 'es'),
(180, 'reporte-cocaleros', 90, 'en'),
(181, 'Intranet', 91, 'es'),
(182, 'intranet', 91, 'en'),
(183, 'TDE', 92, 'es'),
(184, 'tde', 92, 'en'),
(185, 'Ver información', 93, 'es'),
(186, 'ver-mas-informacion-servicio', 93, 'en'),
(187, 'denuncia', 94, 'es'),
(188, 'denuncia', 94, 'en'),
(189, 'home', 95, 'es'),
(190, 'home', 95, 'en'),
(191, 'Exportación', 96, 'es'),
(192, 'exportacion', 96, 'en');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id`, `imagen`, `created_at`, `updated_at`) VALUES
(1, '/uploads/shares/equipo/1574209446Artboard.png', '2019-11-15 05:40:26', '2019-11-20 00:24:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_translations`
--

CREATE TABLE `equipo_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `textoBtn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `equipo_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `equipo_translations`
--

INSERT INTO `equipo_translations` (`id`, `titulo`, `subtitulo`, `textoBtn`, `equipo_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'Nuestro Equipo', 'Conoce a nuestros profesionales', 'Ver Organigrama', 1, 'es', '2019-11-15 05:40:26', '2020-03-31 08:29:41'),
(2, 'Our Staff', 'Meet our professionals', 'Ver Organigrama', 1, 'en', '2019-11-15 05:40:27', '2019-12-17 17:39:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etiqueta_indus`
--

CREATE TABLE `etiqueta_indus` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `etiqueta_indus`
--

INSERT INTO `etiqueta_indus` (`id`, `created_at`, `updated_at`) VALUES
(1, '2019-11-15 03:23:45', '2019-11-15 03:23:45'),
(4, '2019-11-15 03:24:09', '2019-11-15 03:24:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etiqueta_indus_translations`
--

CREATE TABLE `etiqueta_indus_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etiqueta_indus_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `etiqueta_indus_translations`
--

INSERT INTO `etiqueta_indus_translations` (`id`, `nombre`, `etiqueta_indus_id`, `locale`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'Infusiones', 1, 'es', '2019-11-15 03:23:45', '2019-11-15 22:04:16', 'infusiones'),
(2, 'Infusiones', 1, 'en', '2019-11-15 03:23:45', '2019-11-15 03:23:45', ''),
(7, 'Licor', 4, 'es', '2019-11-15 03:24:09', '2019-11-15 22:04:27', 'licor'),
(8, 'Licor', 4, 'en', '2019-11-15 03:24:09', '2019-11-15 03:24:09', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etiqueta_tradi`
--

CREATE TABLE `etiqueta_tradi` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `etiqueta_tradi`
--

INSERT INTO `etiqueta_tradi` (`id`, `created_at`, `updated_at`) VALUES
(1, '2019-11-15 07:46:12', '2019-11-15 07:46:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etiqueta_tradi_translations`
--

CREATE TABLE `etiqueta_tradi_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etiqueta_tradi_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `etiqueta_tradi_translations`
--

INSERT INTO `etiqueta_tradi_translations` (`id`, `nombre`, `etiqueta_tradi_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'Hoja de coca', 1, 'es', '2019-11-15 07:46:12', '2019-11-20 18:15:16'),
(2, 'prueba', 1, 'en', '2019-11-15 07:46:12', '2019-11-15 07:46:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion_nivel1`
--

CREATE TABLE `gestion_nivel1` (
  `id` int(10) UNSIGNED NOT NULL,
  `orden` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `gestion_nivel1`
--

INSERT INTO `gestion_nivel1` (`id`, `orden`, `created_at`, `updated_at`) VALUES
(1, 4, '2019-11-25 23:36:11', '2020-03-05 14:24:13'),
(2, 8, '2019-11-25 23:41:17', '2020-03-05 14:25:06'),
(3, 5, '2019-11-25 23:45:16', '2020-03-05 14:24:30'),
(4, 1, '2019-11-26 01:32:55', '2020-03-05 14:23:36'),
(5, 2, '2019-11-26 01:35:02', '2020-04-23 06:40:47'),
(6, 6, '2019-11-26 01:37:22', '2020-03-05 14:24:42'),
(7, 7, '2019-11-26 01:45:18', '2020-03-05 14:24:56'),
(8, 3, '2020-02-14 19:59:49', '2020-04-23 06:41:04'),
(10, 2, '2020-04-23 05:48:08', '2020-04-23 05:48:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion_nivel1_translations`
--

CREATE TABLE `gestion_nivel1_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gestion_nivel1_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `gestion_nivel1_translations`
--

INSERT INTO `gestion_nivel1_translations` (`id`, `nombre`, `slug`, `gestion_nivel1_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'Plan Anual de Contrataciones (PAC)', 'plan-anual-de-contrataciones-pac', 1, 'es', '2019-11-25 23:36:11', '2020-03-03 21:47:06'),
(2, 'Plan Anual de Contrataciones 2019', 'plan-anual-de-contrataciones-2019', 1, 'en', '2019-11-25 23:36:11', '2019-11-25 23:36:11'),
(3, 'Informes Evaluación de Software', 'informes-evaluacion-de-software', 2, 'es', '2019-11-25 23:41:17', '2019-11-25 23:41:17'),
(4, 'Informes Evaluación de Software', 'informes-evaluacion-de-software', 2, 'en', '2019-11-25 23:41:17', '2019-11-25 23:41:17'),
(5, 'Gastos de Publicidad / Subastas', 'gastos-de-publicidad-subastas', 3, 'es', '2019-11-25 23:45:16', '2020-03-04 22:20:47'),
(6, 'Gastos de Publicidad', 'gastos-de-publicidad', 3, 'en', '2019-11-25 23:45:16', '2019-11-25 23:45:16'),
(7, 'Código de Ética', 'codigo-de-etica', 4, 'es', '2019-11-26 01:32:55', '2019-11-26 01:32:55'),
(8, 'Código de Ética', 'codigo-de-etica', 4, 'en', '2019-11-26 01:32:55', '2019-11-26 01:32:55'),
(9, 'Marco Legal', 'marco-legal', 5, 'es', '2019-11-26 01:35:02', '2019-11-26 01:35:02'),
(10, 'Marco Legal', 'marco-legal', 5, 'en', '2019-11-26 01:35:02', '2019-11-26 01:35:02'),
(11, 'Venta Directa Bienes', 'venta-directa-bienes', 6, 'es', '2019-11-26 01:37:22', '2019-11-26 01:37:22'),
(12, 'Venta Directa Bienes', 'venta-directa-bienes', 6, 'en', '2019-11-26 01:37:22', '2019-11-26 01:37:22'),
(13, 'Socios de Negocio', 'socios-de-negocio', 7, 'es', '2019-11-26 01:45:18', '2019-11-26 01:45:18'),
(14, 'Socios de Negocio', 'socios-de-negocio', 7, 'en', '2019-11-26 01:45:18', '2019-11-26 01:45:18'),
(15, 'Declaraciones Juradas', 'declaraciones-juradas', 8, 'es', '2020-02-14 19:59:49', '2020-02-14 19:59:49'),
(16, 'Declaraciones Juradas', 'declaraciones-juradas', 8, 'en', '2020-02-14 19:59:49', '2020-02-14 19:59:49'),
(19, 'Directorio Ejecutivo', 'directorio-ejecutivo', 10, 'es', '2020-04-23 05:48:08', '2020-04-23 05:48:08'),
(20, 'Directorio Ejecutivo', 'directorio-ejecutivo', 10, 'en', '2020-04-23 05:48:08', '2020-04-23 05:48:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion_nivel2`
--

CREATE TABLE `gestion_nivel2` (
  `id` int(10) UNSIGNED NOT NULL,
  `gestion_nivel1_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `gestion_nivel2`
--

INSERT INTO `gestion_nivel2` (`id`, `gestion_nivel1_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-11-25 23:37:33', '2019-11-25 23:37:33'),
(2, 2, '2019-11-25 23:44:06', '2019-11-25 23:44:06'),
(3, 3, '2019-11-25 23:51:05', '2019-11-25 23:51:05'),
(11, 4, '2019-11-26 01:33:43', '2019-11-26 01:33:43'),
(12, 5, '2019-11-26 01:36:28', '2019-11-26 01:36:28'),
(13, 6, '2019-11-26 01:38:52', '2019-11-26 01:38:52'),
(14, 7, '2019-11-26 01:49:17', '2019-11-26 01:49:17'),
(15, 7, '2019-11-26 01:51:50', '2019-11-26 01:51:50'),
(16, 8, '2020-02-14 20:02:04', '2020-02-14 20:02:04'),
(17, 8, '2020-02-14 20:02:48', '2020-02-14 20:02:48'),
(21, 3, '2020-03-04 22:25:46', '2020-03-04 22:25:46'),
(25, 10, '2020-04-23 05:49:14', '2020-04-23 05:49:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion_nivel2_translations`
--

CREATE TABLE `gestion_nivel2_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` text COLLATE utf8mb4_unicode_ci,
  `array` text COLLATE utf8mb4_unicode_ci,
  `gestion_nivel2_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `gestion_nivel2_translations`
--

INSERT INTO `gestion_nivel2_translations` (`id`, `titulo`, `des`, `array`, `gestion_nivel2_id`, `locale`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'PAC – Plan Anual de Contrataciones', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pac-2019-enaco.pdf\",\"texto2A\":\"PAC 2019 enaco\"}]', 1, 'es', '2019-11-25 23:37:33', '2020-03-04 22:14:02', 'pac-plan-anual-de-contrataciones'),
(2, 'PAC – Plan Anual de Contrataciones 2019', '<p>dfsd</p>', NULL, 1, 'en', '2019-11-25 23:37:33', '2019-11-25 23:37:33', 'pac-plan-anual-de-contrataciones-2019'),
(3, 'Informe Previo de Evaluación de Software', '<p>.</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/ipesoftware201601.pdf\",\"texto2A\":\"Informe Previo de Evaluaci\\on de Software 01-2016 seg\\u00fan lo ordenado en el Articulo 5\\u00ba De La Ley 28612\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/ipesoftware201602.pdf\",\"texto2A\":\"Informe Previo de Evaluaci\\on de Software 02-2016 seg\\u00fan lo ordenado en el Articulo 5\\u00ba De La Ley 28612\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/ipesoftware201501.pdf\",\"texto2A\":\"Informe Previo de Evaluaci\\on de Software 01-2015 seg\\u00fan lo ordenado en el Articulo 5\\u00ba De La Ley 28612\"}]', 2, 'es', '2019-11-25 23:44:06', '2020-03-03 22:11:03', 'informe-previo-de-evaluacion-de-software'),
(4, 'Informe Previo de Evaluación de Software 01-2016', '<p>fdsfsdf</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/ipesoftware201601.pdf\",\"texto2A\":\"Informe Previo de Evaluaci\\on de Software 01-2016 seg\\u00fan lo ordenado en el Articulo 5\\u00ba De La Ley 28612\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/ipesoftware201602.pdf\",\"texto2A\":\"Informe Previo de Evaluaci\\on de Software 02-2016 seg\\u00fan lo ordenado en el Articulo 5\\u00ba De La Ley 28612\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/ipesoftware201501.pdf\",\"texto2A\":\"Informe Previo de Evaluaci\\on de Software 01-2015 seg\\u00fan lo ordenado en el Articulo 5\\u00ba De La Ley 28612\"}]', 2, 'en', '2019-11-25 23:44:06', '2019-11-25 23:44:06', 'informe-previo-de-evaluacion-de-software-01-2016'),
(5, 'Gastos de Publicidad', '<p>En base a lo normado en el Art&iacute;culo 51&ordm; de la Ley 28278</p>', NULL, 3, 'es', '2019-11-25 23:51:05', '2020-03-16 21:06:28', 'gastos-de-publicidad'),
(6, 'Gastos de Publicidad 2017 en base a lo normado en el Artículo 51º de la Ley 28278', '<p>fsdfs</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub1t2017.pdf\",\"texto2A\":\"I Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/Publicidad2t-2017-Ley28278.pdf\",\"texto2A\":\"II Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/Publicidad3t-2017-Ley28278.pdf\",\"texto2A\":\"III Trimestre\"}]', 3, 'en', '2019-11-25 23:51:05', '2019-11-25 23:51:05', 'gastos-de-publicidad-2017-en-base-a-lo-normado-en-el-articulo-51o-de-la-ley-28278'),
(21, 'Código de Ética ENACO', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/AD-006-2018-APROBAC-CODIGO-DE-ETICA-DE-ENACO-S-A.pdf\",\"texto2A\":\"C\\u00f3digo de \\u00c9tica ENACO\"}]', 11, 'es', '2019-11-26 01:33:43', '2020-04-23 07:21:17', 'codigo-de-etica-enaco'),
(22, 'Código de Ética', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/AD-006-2018-APROBAC-CODIGO-DE-ETICA-DE-ENACO-S-A.pdf\",\"texto2A\":\"AD-006-2018-APROBAC-CODIGO-DE-ETICA-DE-ENACO-S-A\"}]', 11, 'en', '2019-11-26 01:33:43', '2019-11-26 01:33:43', 'codigo-de-etica'),
(23, 'Marco Legal', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/Marco Legal\\/Marco_legal_internacional.pdf\",\"texto2A\":\"Marco legal internacional\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Resolucion-Legislativa-25352-nov-23-1991.pdf\",\"texto2A\":\"Resolucion-Legislativa-25352-nov-23-1991\"}]', 12, 'es', '2019-11-26 01:36:28', '2020-03-05 00:03:11', 'marco-legal'),
(24, 'Marco Legal', '<p><strong>Marco legal internacional</strong></p>\r\n\r\n<p>El Per&uacute; es miembro de la Convenci&oacute;n &Uacute;nica de 1961 sobre Estupefacientes, que se&ntilde;ala que todos los Estados miembros est&aacute;n obligados a prohibir el cultivo del arbusto y/o planta de hoja de coca y como tal debe ejercer todas las acciones que tiene en su poder para eliminarlo, y donde se realizan cultivos del arbusto de coca, se aplicar&aacute; un sistema de fiscalizaci&oacute;n que establece un organismo oficial para desempe&ntilde;ar las siguientes funciones:</p>\r\n\r\n<ul>\r\n	<li>Designar zonas y parcelas de terreno en que se permitir&aacute; el cultivo.</li>\r\n	<li>S&oacute;lo podr&aacute;n dedicarse a dicho cultivo los cultivadores que posean una licencia.</li>\r\n	<li>Cada licencia especificar&aacute; la superficie en la que se autoriza el cultivo.</li>\r\n	<li>Todos los cultivadores estar&aacute;n obligados a entregar la totalidad de sus cosechas.</li>\r\n	<li>Se comprar&aacute; y tomar&aacute; posesi&oacute;n material de dichas cosechas, lo antes posible, a m&aacute;s tardar cuatro meses despu&eacute;s de terminada la recolecci&oacute;n.</li>\r\n</ul>\r\n\r\n<p>En el Per&uacute;, ENACO es la &uacute;nica empresa estatal en el mundo, que legalmente posee el monopolio de la comercializaci&oacute;n de la hoja de coca en su pa&iacute;s.</p>\r\n\r\n<p>El Per&uacute; se reserv&oacute; el derecho de autorizar temporalmente la masticaci&oacute;n de la hoja de coca, por lo cual acept&oacute; que en un plazo de 25 a&ntilde;os esta actividad quedar&iacute;a prohibida en su territorio.<em>(1)</em>&nbsp;En la Convenci&oacute;n de las Naciones Unidas contra el tr&aacute;fico il&iacute;cito de estupefacientes y sustancias sicotr&oacute;picas de 1988, art&iacute;culo 14, se se&ntilde;al&oacute; que los pa&iacute;ses miembros adoptar&aacute;n medidas para evitar el cultivo il&iacute;cito de plantas que contengan estupefacientes o sustancias sicotr&oacute;picas como la hoja de coca, y erradicar aquellas que se cultiven il&iacute;citamente en su territorio.<em>(2)</em></p>\r\n\r\n<p>Sin embargo, el Congreso de la Rep&uacute;blica aprob&oacute; esta Convenci&oacute;n con reserva y declara que no se considera obligado a tipificar como delito penal el cultivo l&iacute;cito e il&iacute;cito de hoja de coca y otros cultivos similares<em>(3)</em>; por tanto, el Per&uacute;, puede mantener vigente la masticaci&oacute;n de la hoja de coca en el pa&iacute;s</p>\r\n\r\n<p><strong>Marco legal Nacional</strong></p>\r\n\r\n<p>Existe un amplio marco regulatorio que rige el accionar de ENACO S.A. como monopolio en la comercializaci&oacute;n de la hoja de coca, en t&eacute;rminos de normas de creaci&oacute;n, competencias, acuerdos internacionales, y de gesti&oacute;n p&uacute;blica definidas por el Fondo de Fomento de la Actividad Empresarial del Estado- FONAFE, como ente rector, tales como:</p>\r\n\r\n<ul>\r\n	<li>Ley N&ordm; 27170 &ndash; Ley del Fondo Nacional de Financiamiento de la Actividad Empresarial del Estado &ndash; FONAFE, su Reglamento y modificatorias.</li>\r\n	<li>Decreto Legislativo N&ordm; 1031 &ndash; Decreto Legislativo que Promueve la Eficiencia de la Actividad Empresarial del Estado y su Reglamento.</li>\r\n	<li>Ley N&ordm; 27245 &ndash; Ley de Responsabilidad y Transparencia Fiscal, su reglamento y normas modificatorias y complementarias.</li>\r\n	<li>Ley N&ordm; 28411 &ndash; Ley General del Sistema Nacional de Presupuesto.</li>\r\n	<li>Ley N&ordm; 27293 &ndash; Ley del Sistema Nacional de Inversi&oacute;n P&uacute;blica, su Reglamento y normas modificatorias y complementarias.</li>\r\n	<li>Decreto Legislativo N&ordm; 1017 &ndash; Ley de Contrataciones del Estado, su Reglamento y normas modificatorias y complementarias.</li>\r\n	<li>Directiva de Gesti&oacute;n de FONAFE, aprobada mediante Acuerdo de Directorio N&ordm; 001-2013/006-FONAFE.</li>\r\n	<li>C&oacute;digo de Control Interno de las Empresas del Estado, aprobado por Acuerdo de Directorio N&ordm; 001-2006-/028-FONAFE y modificatorias.</li>\r\n</ul>\r\n\r\n<hr />\r\n<p>1) Art. 49: &ldquo;1. Al firmar, ratificar o adherirse a la Convenci&oacute;n, toda Parte podr&aacute; reservarse el derecho de autorizar<br />\r\ntemporalmente en cualquiera de sus territorios:&nbsp;</p>\r\n\r\n<ol>\r\n	<li>El uso del opio con fines casi m&eacute;dicos.</li>\r\n	<li>El uso del opio para fumar.</li>\r\n	<li>La masticaci&oacute;n de la hoja de coca.</li>\r\n</ol>\r\n\r\n<p>2) Convenci&oacute;n de Naciones Unidas contra el tr&aacute;fico il&iacute;cito de estupefacientes y sustancias sicotr&oacute;picas de 1988. Art. 14: &ldquo;Cada una de las partes adoptar&aacute; medidas adecuadas para evitar el cultivo il&iacute;cito de las plantas que contengan estupefacientes o sustancias sicotr&oacute;picas, tales como las plantas de adormidera, los arbustos de coca y las plantas de cannabis, as&iacute; como erradicar aquellas que se cultiven il&iacute;citamente en su territorio. Las medidas que se adopten deber&aacute;n respetar los derechos humanos fundamentales y tendr&aacute;n debidamente en cuenta los usos tradicionales l&iacute;citos, donde al respecto exista la evidencia hist&oacute;rica, as&iacute; como la protecci&oacute;n del medio ambiente.&rdquo;</p>\r\n\r\n<p>3) El Congreso de la Rep&uacute;blica del Per&uacute; resuelve aprobar la Convenci&oacute;n de las Naciones Unidas de 1988 mediante Resoluci&oacute;n Legislativa No 25352 del 23 de noviembre de 1991, con la reserva y declaraci&oacute;n siguiente:&nbsp;<a href=\"https://www.enaco.com.pe/wp-content/uploads/2014/09/Resolucion-Legislativa-25352-nov-23-1991.pdf\">Resolucion-Legislativa-25352-nov-23-1991</a></p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/TEST_ENACO.pdf\",\"texto2A\":\".\"}]', 12, 'en', '2019-11-26 01:36:28', '2019-11-26 01:36:28', 'marco-legal'),
(25, 'Venta Directa Bienes', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/acta-de-resultado-de-venta-directa.pdf\",\"texto2A\":\"Acta de Resultados de Venta Directa\"}]', 13, 'es', '2019-11-26 01:38:52', '2020-03-04 22:14:51', 'venta-directa-bienes'),
(26, 'Venta Directa Bienes', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/acta-de-resultado-de-venta-directa.pdf\",\"texto2A\":\"acta de resultados de venta directa\"}]', 13, 'en', '2019-11-26 01:38:52', '2019-11-26 01:38:52', 'venta-directa-bienes'),
(27, 'Productores', '<p align=\"justify\">Los productores son agricultores que cultivan la hoja de coca y estan registrados en el padr&oacute;n elaborado en el a&ntilde;o 1978 de acuerdo a la Ley 22095 y sus disposiciones transitorias. Este padr&oacute;n seg&uacute;n la misma ley, no puede ser modificado.</p>', NULL, 14, 'es', '2019-11-26 01:49:17', '2020-03-04 22:11:26', 'productores'),
(28, 'Productores', '<p>Los productores son agricultores que cultivan la hoja de coca y estan registrados en el padr&oacute;n elaborado en el a&ntilde;o 1978 de acuerdo a la Ley 22095 y sus disposiciones transitorias. Este padr&oacute;n seg&uacute;n la misma ley, no puede ser modificado.</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/TEST_ENACO.pdf\",\"texto2A\":\".\"}]', 14, 'en', '2019-11-26 01:49:17', '2019-11-26 01:49:17', 'productores'),
(29, 'Comerciantes', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/Socios\\/Comerciantes.pdf\",\"texto2A\":\"REQUISITOS PARA SER CONSIDERADO COMERCIANTE DE HOJA DE COCA\"}]', 15, 'es', '2019-11-26 01:51:50', '2020-03-05 00:04:22', 'comerciantes'),
(30, 'Comerciantes', '<p>PARA SER COMERCIANTE MINORISTA DE HOJA DE COCA</p>\r\n\r\n<p><strong>REQUISITOS PARA SER CONSIDERADO POSTULANTE</strong></p>\r\n\r\n<p>Los aspirantes inicialmente presentar&aacute;n los siguientes documentos:</p>\r\n\r\n<p>a) Solicitud dirigida al Jefe de la Sucursal y/o Administrador de Agencia peticionando se autorice en calidad de comerciante minorista para vender hoja de coca, seg&uacute;n modelo (Anexo N&ordm; 01);</p>\r\n\r\n<p>b) Declaraci&oacute;n Jurada conteniendo la informaci&oacute;n solicitada (Anexo N&ordm;02);</p>\r\n\r\n<p>c) Fotocopia de su Documento Nacional de Identidad;</p>\r\n\r\n<p>d) Fotocopia de la Licencia de Funcionamiento o Autorizaci&oacute;n Municipal acreditando que el comerciante realiza su actividad comercial de manera permanente en la direcci&oacute;n del distrito al que pertenece. Para casos excepcionales, por autoridades de su competencia (caser&iacute;os, gobernaturas, etc);</p>\r\n\r\n<p><strong>RECEPCI&Oacute;N DE DOCUMENTOS</strong></p>\r\n\r\n<p>a) Se recibir&aacute;n solicitudes seg&uacute;n necesidades de la empresa y requerimiento del mercado;</p>\r\n\r\n<p>b) Las Sucursales, Agencias y Unidades Operativas de Venta, recibir&aacute;n los expedientes, registr&aacute;ndolos en el libro de ingresos de documentos debiendo ser consolidados en la Sede de o Sucursal, seg&uacute;n sea el caso;</p>\r\n\r\n<p><strong>CALIFICACI&Oacute;N</strong></p>\r\n\r\n<p>El Administrador de la Sucursal o Jefe de Agencia, convocar&aacute; a la Comisi&oacute;n Calificadora que estar&aacute; integrada por:</p>\r\n\r\n<p>a) Administrador de la Sucursal o Jefe de Agencia;</p>\r\n\r\n<p>b) Representante de la Secci&oacute;n Comercial o Promotor;</p>\r\n\r\n<p>La Comisi&oacute;n proceder&aacute; a la calificaci&oacute;n bajo los siguientes criterios:</p>\r\n\r\n<p>a) Localizaci&oacute;n debidamente definida;</p>\r\n\r\n<p>b) El postulante de preferencia deber&aacute; contar con un establecimiento comercial, a excepci&oacute;n de los que expendan en ferias, mercados y paradas;</p>\r\n\r\n<p>La calificaci&oacute;n y cobertura se har&aacute; en estricto orden correlativo, seg&uacute;n registro de recepci&oacute;n de expedientes.<br />\r\nLa Empresa a trav&eacute;s de la Gerencia de Comercio Nacional, de manera excepcional y ante petici&oacute;n debidamente sustentada y documentada de los Administradores y/o de Sucursal y/o Jefes de Agencia, proceder&aacute; a la calificaci&oacute;n de LICENCIAS PROVISIONALES; el otorgamiento de estas se efectuara ante necesidad expresa de incrementar el volumen de las ventas y no podr&aacute; exceder los seis meses de vigencia, los requisitos para poder acceder a este beneficio est&aacute;n determinadas en el numeral 4.3. de la Directiva N&ordf; 004-2008-E/OPDI;</p>\r\n\r\n<p><strong>OTORGAMIENTO</strong></p>\r\n\r\n<p>Concluida la primera fase del proceso de calificaci&oacute;n, la Sucursal o Agencia enviar&aacute; a cada Unidad Operativa la relaci&oacute;n de los postulantes aptos, otorg&aacute;ndose un plazo de cuarenticinco (45) d&iacute;as h&aacute;biles para la presentaci&oacute;n de los siguientes documentos:</p>\r\n\r\n<p>a) Certificado de antecedentes policiales o declaraci&oacute;n jurada, seg&uacute;n sea el caso;<br />\r\nb) Certificado de antecedentes penales o declaraci&oacute;n jurada, seg&uacute;n sea el caso;<br />\r\nc) Certificado de antecedentes judiciales o declaraci&oacute;n jurada, seg&uacute;n sea el caso;<br />\r\nd) Tres (03) fotograf&iacute;as tama&ntilde;o carnet (recientes);<br />\r\ne) Copia del Registro &Uacute;nico de Contribuyente (R.U.C.), si lo tuviera;<br />\r\nf) Copia de la Licencia Municipal de Funcionamiento, seg&uacute;n sea el caso;</p>\r\n\r\n<p>Los documentos antes citados deber&aacute;n ser recepcionados por las Unidades Operativas y enviados a la sede de Agencia o Sucursal para la consolidaci&oacute;n de la calificaci&oacute;n.</p>\r\n\r\n<p>Concluido el proceso de verificaci&oacute;n de documentos, Administraci&oacute;n de la Sucursal y/o Agencia pondr&aacute; en conocimiento de la Gerencia de Comercio Nacional, quien dispondr&aacute; la asignaci&oacute;n del c&oacute;digo de la Licencia, procediendo la Administraci&oacute;n de la Sucursal o quien haga sus veces en la Agencia a emitir la Licencia correspondiente;</p>\r\n\r\n<p>La Sucursales o Agencias, proceder&aacute;n a la entrega de la Licencia, previo pago por la Licencia de Comercializaci&oacute;n, cuyo monto ser&aacute; fijado por la Gerencia de Comercio Nacional;</p>\r\n\r\n<p>La Licencia de comercializaci&oacute;n para ser v&aacute;lida debe estar firmada por:<br />\r\nEL ADMINISTRADOR o JEFE DE LA AGENCIA DE LA ZONA.</p>\r\n\r\n<p><strong>OBLIGACIONES DEL COMERCIANTE MINORISTA</strong></p>\r\n\r\n<p>1. El comerciante debe Renovar la autorizaci&oacute;n de su Licencia cada TRES a&ntilde;o, del mismo modo deber&aacute; Revalidar dicho documento anualmente entre los meses de enero a marzo de cada a&ntilde;o como plazo m&aacute;ximo, salvo excepciones debidamente justificados y autorizados por la Gerencia de Comercio Tradicional y de acuerdo al procedimiento establecido en el numeral 4.9;</p>\r\n\r\n<p>2. El comerciante minorista se abastecer&aacute; &uacute;nica y exclusivamente de las Unidades Operativas de Venta de ENACO S.A. o del distribuidor autorizado del &aacute;mbito de su competencia, seg&uacute;n sea el caso;</p>\r\n\r\n<p>3. El comerciante minorista no podr&aacute; dejar de comprar a ENACO S.A. por m&aacute;s de 60 d&iacute;as, si al cabo de 15 d&iacute;as de su notificaci&oacute;n no explica las causales de su inactividad, &eacute;ste hecho dar&aacute; lugar a retirar la autorizaci&oacute;n de la Licencia correspondiente;</p>\r\n\r\n<p>4. El comerciante minorista tiene la obligaci&oacute;n de vender hoja de coca &uacute;nicamente al consumidor final (chacchador), expendiendo s&oacute;lo en la direcci&oacute;n y lugar autorizado; debiendo exhibir en lugar visible el documento que autoriza vender hoja de coca;</p>\r\n\r\n<p>5. El comerciante minorista no podr&aacute; vender fuera de su zona autorizada, salvo previo conocimiento y autorizaci&oacute;n del Jefe de Sucursal o Administrador de Agencia o quien haga las veces, cuando esta autorizaci&oacute;n implique el desplazamiento f&iacute;sico del comerciante del &aacute;mbito de una Unidad Operativa de Ventas a otra, deber&aacute; contar necesariamente con el consentimiento de los responsables de dichas oficinas;</p>\r\n\r\n<p>6. Las veces en que ENACO S.A. o a quien delegue, requiera la presentaci&oacute;n de los siguientes documentos: Factura y/o Boleta de la &uacute;ltima compra, Libro de cuenta Corriente para verificar la existencia f&iacute;sica de hoja de coca, el comerciante est&aacute; obligado a facilitar estos documentos y la informaci&oacute;n;</p>\r\n\r\n<p>7. El comerciante reconoce que el documento que autoriza vender hoja de coca es de car&aacute;cter personal e intransferible. En casos fortuitos debidamente justificados podr&aacute; ejercer dicha actividad un representante con carta poder por un per&iacute;odo no mayor de noventa (90) d&iacute;as;</p>\r\n\r\n<p>8. El comerciante est&aacute; obligado a devolver el documento que autoriza vender hoja de coca una vez que haya sido inhabilitado.</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/TEST_ENACO.pdf\",\"texto2A\":\".\"}]', 15, 'en', '2019-11-26 01:51:50', '2019-11-26 01:51:50', 'comerciantes'),
(31, 'Declaración de Intereses', NULL, NULL, 16, 'es', '2020-02-14 20:02:04', '2020-02-14 20:02:04', 'declaracion-de-intereses'),
(32, 'Declaración de Intereses', NULL, NULL, 16, 'en', '2020-02-14 20:02:04', '2020-02-14 20:02:04', 'declaracion-de-intereses'),
(33, 'Declaración de Bienes', NULL, NULL, 17, 'es', '2020-02-14 20:02:48', '2020-02-14 20:02:48', 'declaracion-de-bienes'),
(34, 'Declaración de Bienes', NULL, NULL, 17, 'en', '2020-02-14 20:02:48', '2020-02-14 20:02:48', 'declaracion-de-bienes'),
(41, 'Subastas', NULL, NULL, 21, 'es', '2020-03-04 22:25:46', '2020-03-04 22:25:46', 'subastas'),
(42, 'Subastas', NULL, NULL, 21, 'en', '2020-03-04 22:25:46', '2020-03-04 22:25:46', 'subastas'),
(49, 'Directorio Ejecutivo', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/CV\\/CVSamalvides.pdf\",\"texto2A\":\"Presidente - Dr. Elberth Hern\\u00e1n Samalvides M\\u00e1rquez (CV)\"},{\"archivo1A\":null,\"texto2A\":\"Director - Lic. Eduardo Mart\\u00edn Gonz\\u00e1les Ch\\u00e1vez (CV)\"},{\"archivo1A\":\"\\/uploads\\/shares\\/CV\\/CV-Fernando-Parodi-Zevallos.pdf\",\"texto2A\":\"Director - CP. Fernando Jos\\u00e9 Parodi Zevallos (CV)\"},{\"archivo1A\":null,\"texto2A\":\"Director - Mg. Rub\\u00e9n Ismael Vargas C\\u00e9spedes (CV)\"},{\"archivo1A\":\"\\/uploads\\/shares\\/CV\\/CV-Jason-Saavedra.pdf\",\"texto2A\":\"Director - Mg. Jason Oscar Saavedra Paredes (CV)\"},{\"archivo1A\":null,\"texto2A\":\"Gerencia General(e) - Mg. Cristian Eduardo Galarza Mes\\u00edas (CV)\"},{\"archivo1A\":\"\\/uploads\\/shares\\/CV\\/CV_Henry-Gil.pdf\",\"texto2A\":\"Gerencia de Comercio Tradicional(e) - CPC. Henry William Gil Herrera (CV)\"},{\"archivo1A\":\"\\/uploads\\/shares\\/CV\\/CV_Peck-Yali-Suarez-.pdf\",\"texto2A\":\"Gerencia Administrativa Financiera - Mg. Peck Yali Suarez Ysla (CV)\"},{\"archivo1A\":null,\"texto2A\":\"Gerencia de Planeamiento, Presupuesto y TI - Mg. Cristian Eduardo Galarza Mes\\u00edas (CV)\"},{\"archivo1A\":\"\\/uploads\\/shares\\/CV\\/CV_ABEL-CONTRERAS.pdf\",\"texto2A\":\"Contador General - CPC. Abel Sebastian Contreras Granados (CV)\"},{\"archivo1A\":null,\"texto2A\":\"Oficina de Asesoria Juridica - Abog. Hugo G\\u00f3mez S\\u00e1nchez Ram\\u00edrez (CV)\"},{\"archivo1A\":\"\\/uploads\\/shares\\/CV\\/CV_RODRIGUEZ-JHON-.pdf\",\"texto2A\":\"Oficina de Control Selectivo - Mg. John Charles Rodr\\u00edguez Pati\\u00f1o (CV)\"},{\"archivo1A\":null,\"texto2A\":\"\\u00d3rgano de Control Institucional - Abog. Indira Yabar Gutierrez (CV)\"},{\"archivo1A\":null,\"texto2A\":\"Jefe de Oficina de Comercio Industrial - QF. Silveria Dongo Gonzales (CV)\"},{\"archivo1A\":\"\\/uploads\\/shares\\/CV\\/CV_-Yurinel-Arteaga-.pdf\",\"texto2A\":\"Sucursal Quillabamba - Sr. Yurinel Arteaga Mar (CV)\"},{\"archivo1A\":\"\\/uploads\\/shares\\/CV\\/CV_JAVIER-PINTO-.pdf\",\"texto2A\":\"Sucursal Huancayo - Sr. Javier Augusto Pinto Almanza (CV)\"},{\"archivo1A\":\"\\/uploads\\/shares\\/CV\\/CV_Alfredo-Flores-Seijas-.pdf\",\"texto2A\":\"Agencia Juliaca - Dr. Alfredo Florez Seigas (CV)\"}]', 25, 'es', '2020-04-23 05:49:14', '2020-04-23 07:01:29', 'directorio-ejecutivo'),
(50, 'Directorio Ejecutivo', NULL, NULL, 25, 'en', '2020-04-23 05:49:14', '2020-04-23 05:49:14', 'directorio-ejecutivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion_nivel3`
--

CREATE TABLE `gestion_nivel3` (
  `id` int(10) UNSIGNED NOT NULL,
  `gestion_nivel2_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `gestion_nivel3`
--

INSERT INTO `gestion_nivel3` (`id`, `gestion_nivel2_id`, `created_at`, `updated_at`) VALUES
(1, 16, '2020-02-14 20:04:29', '2020-02-14 20:04:29'),
(2, 16, '2020-02-14 20:06:10', '2020-02-14 20:06:10'),
(3, 17, '2020-02-14 20:07:09', '2020-02-14 20:07:09'),
(4, 17, '2020-02-14 20:07:36', '2020-02-14 20:07:36'),
(7, 3, '2020-03-04 22:21:47', '2020-03-04 22:21:47'),
(8, 3, '2020-03-04 22:22:16', '2020-03-04 22:22:16'),
(9, 3, '2020-03-04 22:23:32', '2020-03-04 22:23:32'),
(10, 3, '2020-03-04 22:23:47', '2020-03-04 22:23:47'),
(11, 3, '2020-03-04 22:24:11', '2020-03-04 22:24:11'),
(12, 3, '2020-03-04 22:24:25', '2020-03-04 22:24:25'),
(13, 3, '2020-03-04 22:24:37', '2020-03-04 22:24:37'),
(14, 3, '2020-03-04 22:24:51', '2020-03-04 22:24:51'),
(15, 21, '2020-03-04 22:26:54', '2020-03-04 22:26:54'),
(16, 21, '2020-03-04 22:27:10', '2020-03-04 22:27:10'),
(17, 21, '2020-03-04 22:27:26', '2020-03-04 22:27:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion_nivel3b`
--

CREATE TABLE `gestion_nivel3b` (
  `id` int(10) UNSIGNED NOT NULL,
  `gestion_nivel3_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `gestion_nivel3b`
--

INSERT INTO `gestion_nivel3b` (`id`, `gestion_nivel3_id`, `created_at`, `updated_at`) VALUES
(2, 1, '2020-03-03 15:14:03', '2020-03-03 15:14:03'),
(3, 1, '2020-03-03 15:15:22', '2020-03-03 15:15:22'),
(4, 1, '2020-03-03 15:20:33', '2020-03-03 15:20:33'),
(5, 1, '2020-03-03 15:22:44', '2020-03-03 15:22:44'),
(6, 1, '2020-03-03 15:23:19', '2020-03-03 15:23:19'),
(7, 1, '2020-03-03 15:25:01', '2020-03-03 15:25:01'),
(8, 1, '2020-03-03 15:27:13', '2020-03-03 15:27:13'),
(9, 1, '2020-03-03 15:28:48', '2020-03-03 15:28:48'),
(10, 1, '2020-03-03 15:30:36', '2020-03-03 15:30:36'),
(12, 1, '2020-03-03 15:36:00', '2020-03-03 15:36:00'),
(13, 1, '2020-03-03 15:37:22', '2020-03-03 15:37:22'),
(16, 1, '2020-03-03 15:47:37', '2020-03-03 15:47:37'),
(19, 1, '2020-03-03 15:52:20', '2020-03-03 15:52:20'),
(20, 1, '2020-03-03 15:53:39', '2020-03-03 15:53:39'),
(21, 1, '2020-03-03 15:55:01', '2020-03-03 15:55:01'),
(22, 1, '2020-03-03 15:56:17', '2020-03-03 15:56:17'),
(23, 1, '2020-03-03 15:57:37', '2020-03-03 15:57:37'),
(24, 2, '2020-03-03 16:38:50', '2020-03-03 16:38:50'),
(27, 7, '2020-03-04 22:34:31', '2020-03-04 22:34:31'),
(30, 8, '2020-03-04 22:40:06', '2020-03-04 22:40:06'),
(33, 9, '2020-03-04 22:46:25', '2020-03-04 22:46:25'),
(34, 10, '2020-03-04 23:23:21', '2020-03-04 23:23:21'),
(35, 11, '2020-03-04 23:29:57', '2020-03-04 23:29:57'),
(36, 12, '2020-03-04 23:32:46', '2020-03-04 23:32:46'),
(37, 13, '2020-03-04 23:35:24', '2020-03-04 23:35:24'),
(38, 14, '2020-03-04 23:40:31', '2020-03-04 23:40:31'),
(39, 15, '2020-03-04 23:49:11', '2020-03-04 23:49:11'),
(40, 16, '2020-03-04 23:50:25', '2020-03-04 23:50:25'),
(41, 17, '2020-03-04 23:54:53', '2020-03-04 23:54:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion_nivel3b_translations`
--

CREATE TABLE `gestion_nivel3b_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` text COLLATE utf8mb4_unicode_ci,
  `array` text COLLATE utf8mb4_unicode_ci,
  `gestion_nivel3b_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `gestion_nivel3b_translations`
--

INSERT INTO `gestion_nivel3b_translations` (`id`, `titulo`, `des`, `array`, `gestion_nivel3b_id`, `locale`, `created_at`, `updated_at`, `slug`) VALUES
(3, 'Dr. Elberth Hernán Samalvides Márquez', '<p>Presidente</p>', NULL, 2, 'es', '2020-03-03 15:14:03', '2020-04-23 03:48:59', 'dr-elberth-hernan-samalvides-marquez'),
(4, 'Dr. Elberth Hernán Samalvides Márquez (Presidente)', NULL, NULL, 2, 'en', '2020-03-03 15:14:03', '2020-03-03 15:14:03', 'dr-elberth-hernan-samalvides-marquez-presidente'),
(5, 'Lic. Eduardo Martín Gonzáles Chávez', '<p>Director&nbsp;</p>', NULL, 3, 'es', '2020-03-03 15:15:22', '2020-03-03 15:59:01', 'lic-eduardo-martin-gonzales-chavez'),
(6, 'Lic. Eduardo Martín Gonzáles Chávez', NULL, NULL, 3, 'en', '2020-03-03 15:15:22', '2020-03-03 15:15:22', 'lic-eduardo-martin-gonzales-chavez'),
(7, 'CP. Fernando José Parodi Zevallos', '<p>Director&nbsp;</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/DJ-2019-Fernando-Parodi.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 4, 'es', '2020-03-03 15:20:33', '2020-03-03 15:59:07', 'cp-fernando-jose-parodi-zevallos'),
(8, 'CP. Fernando José Parodi Zevallos', '<p>Director</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/DJ-2019-Fernando-Parodi.pdf\",\"texto2A\":null}]', 4, 'en', '2020-03-03 15:20:33', '2020-03-03 15:20:33', 'cp-fernando-jose-parodi-zevallos'),
(9, 'Mg. Rubén Ismael Vargas Céspedes', '<p>Director&nbsp;</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-ruben-vargas.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 5, 'es', '2020-03-03 15:22:44', '2020-03-03 15:59:14', 'mg-ruben-ismael-vargas-cespedes'),
(10, 'Mg. Rubén Ismael Vargas Céspedes', '<p>Director</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-ruben-vargas.pdf\",\"texto2A\":null}]', 5, 'en', '2020-03-03 15:22:44', '2020-03-03 15:22:44', 'mg-ruben-ismael-vargas-cespedes'),
(11, 'Mg. Jason Oscar Saavedra Paredes', '<p>Director&nbsp;</p>', NULL, 6, 'es', '2020-03-03 15:23:19', '2020-03-03 15:59:20', 'mg-jason-oscar-saavedra-paredes'),
(12, 'Mg. Jason Oscar Saavedra Paredes', '<p>Director</p>', NULL, 6, 'en', '2020-03-03 15:23:19', '2020-03-03 15:23:19', 'mg-jason-oscar-saavedra-paredes'),
(13, 'Mg. Cristian Eduardo Galarza Mesías', '<p>Gerencia General (e)</p>', NULL, 7, 'es', '2020-03-03 15:25:01', '2020-04-23 03:49:28', 'mg-cristian-eduardo-galarza-mesias'),
(14, 'Lic. Rafael Domingo Cánovas Petrozzi', '<p>Gerente General</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-rafael-canovas.pdf\",\"texto2A\":null}]', 7, 'en', '2020-03-03 15:25:01', '2020-03-03 15:25:01', 'lic-rafael-domingo-canovas-petrozzi'),
(15, 'CPC. Henry William Gil Herrera', '<p>Gerencia&nbsp;de Comercio Tradicional (e)</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-henry-gil.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 8, 'es', '2020-03-03 15:27:13', '2020-04-23 03:49:51', 'cpc-henry-william-gil-herrera'),
(16, 'CPC. Henry William Gil Herrera', '<p>Gerente de Comercio Tradicional</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-henry-gil.pdf\",\"texto2A\":null}]', 8, 'en', '2020-03-03 15:27:13', '2020-03-03 15:27:13', 'cpc-henry-william-gil-herrera'),
(17, 'Mg. Peck Yali Suarez Ysla', '<p>Gerencia de Administraci&oacute;n y Finanzas</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-peck-suarez.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 9, 'es', '2020-03-03 15:28:48', '2020-03-03 15:31:40', 'mg-peck-yali-suarez-ysla'),
(18, 'Mg. Peck Yali Suarez Ysla', '<p>Gerencia de Administraci&oacute;n y Finanzas</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-peck-suarez.pdf\",\"texto2A\":null}]', 9, 'en', '2020-03-03 15:28:48', '2020-03-03 15:28:48', 'mg-peck-yali-suarez-ysla'),
(19, 'CPC. Abel Sebastian Contreras Granados', '<p>Contador General</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-abel-contreras.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 10, 'es', '2020-03-03 15:30:36', '2020-03-03 15:30:36', 'cpc-abel-sebastian-contreras-granados'),
(20, 'CPC. Abel Sebastian Contreras Granados', '<p>Contador General</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-abel-contreras.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 10, 'en', '2020-03-03 15:30:36', '2020-03-03 15:30:36', 'cpc-abel-sebastian-contreras-granados'),
(23, 'Mg. Cristian Eduardo Galarza Mesías', '<p>Gerencia&nbsp;de Planeamiento, Presupuesto y TI</p>', NULL, 12, 'es', '2020-03-03 15:36:00', '2020-03-03 15:44:21', 'mg-cristian-eduardo-galarza-mesias'),
(24, 'Mg. Cristian Eduardo Galarza Mesías', '<p>Gerente de Planeamiento, Presupuesto y TI</p>', NULL, 12, 'en', '2020-03-03 15:36:00', '2020-03-03 15:36:00', 'mg-cristian-eduardo-galarza-mesias'),
(25, 'Abog. Hugo Gómez Sánchez Ramíre', '<p>Oficina de Asesor&iacute;a Jur&iacute;dica</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-hugo-gomez-sanchez.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 13, 'es', '2020-03-03 15:37:22', '2020-03-03 15:42:53', 'abog-hugo-gomez-sanchez-ramire'),
(26, 'Abog. Hugo Gómez Sánchez Ramíre', '<p>OFICINA DE ASESORIA JURIDICA</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-hugo-gomez-sanchez.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 13, 'en', '2020-03-03 15:37:22', '2020-03-03 15:37:22', 'abog-hugo-gomez-sanchez-ramire'),
(29, 'Mg. John Charles Rodríguez Patiño', '<p>Oficina de Control Selectivo</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-john-rodriguez.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 16, 'es', '2020-03-03 15:47:37', '2020-03-03 15:50:51', 'mg-john-charles-rodriguez-patino'),
(30, 'OFICINA DE CONTROL SELECTIVO', '<p>Mg. John Charles Rodr&iacute;guez Pati&ntilde;o</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-john-rodriguez.pdf\",\"texto2A\":null}]', 16, 'en', '2020-03-03 15:47:37', '2020-03-03 15:47:37', 'oficina-de-control-selectivo'),
(31, 'Abog. Indira Yabar Gutierrez', '<p>&Oacute;rgano de Control Institucional</p>', NULL, 19, 'es', '2020-03-03 15:52:20', '2020-03-03 15:52:20', 'abog-indira-yabar-gutierrez'),
(32, 'Abog. Indira Yabar Gutierrez', '<p>&Oacute;rgano de Control Institucional</p>', NULL, 19, 'en', '2020-03-03 15:52:20', '2020-03-03 15:52:20', 'abog-indira-yabar-gutierrez'),
(33, 'QF. Silveria Dongo Gonzales', '<p>Jefe de Oficina de Comercio Industrial</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-silveria-dongo.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 20, 'es', '2020-03-03 15:53:39', '2020-03-03 15:53:39', 'qf-silveria-dongo-gonzales'),
(34, 'QF. Silveria Dongo Gonzales', '<p>Jefe de Oficina de Comercio Industrial</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-silveria-dongo.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 20, 'en', '2020-03-03 15:53:39', '2020-03-03 15:53:39', 'qf-silveria-dongo-gonzales'),
(35, 'Sr. Yurinel Arteaga Mar', '<p>Sucursal Quillabamba</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-yurinel-arteaga.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 21, 'es', '2020-03-03 15:55:01', '2020-03-03 15:55:01', 'sr-yurinel-arteaga-mar'),
(36, 'Sr. Yurinel Arteaga Mar', '<p>Sucursal Quillabamba</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-yurinel-arteaga.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 21, 'en', '2020-03-03 15:55:01', '2020-03-03 15:55:01', 'sr-yurinel-arteaga-mar'),
(37, 'Sr. Javier Augusto Pinto Almanza', '<p>Sucursal Huancayo</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-javier-pinto.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 22, 'es', '2020-03-03 15:56:17', '2020-03-03 15:56:17', 'sr-javier-augusto-pinto-almanza'),
(38, 'Sr. Javier Augusto Pinto Almanza', '<p>Sucursal Huancayo</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-javier-pinto.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 22, 'en', '2020-03-03 15:56:17', '2020-03-03 15:56:17', 'sr-javier-augusto-pinto-almanza'),
(39, 'Dr. Alfredo Florez Seigas', '<p>Agencia Juliaca</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-alfredo-flores.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 23, 'es', '2020-03-03 15:57:37', '2020-03-03 15:57:37', 'dr-alfredo-florez-seigas'),
(40, 'Dr. Alfredo Florez Seigas', '<p>Agencia Juliaca</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-alfredo-flores.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 23, 'en', '2020-03-03 15:57:37', '2020-03-03 15:57:37', 'dr-alfredo-florez-seigas'),
(41, 'Declaración de Intereses', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-mariela-balcazar.pdf\",\"texto2A\":\"Balcazar Abanto Mariela Katiana - ANALISTA COMERCIAL\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-edgar-buendia.pdf\",\"texto2A\":\"Buendia Huarhua Edgar - ANALISTA ADMINISTRATIVO CONTABLE\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-mariano-bustamante.pdf\",\"texto2A\":\"Bustamante Cosi Mariano - REPRESENTANTE DE FISCALIZACI\\u00d3N\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-karen-caballero.pdf\",\"texto2A\":\"Caballero Velasquez Karen Yubitza - ASISTENTE ADMINISTRATIVO CONTABLE\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-joosep-cardenas.pdf\",\"texto2A\":\"Cardenas Mora Joosep Jhonathan - ANALISTA DE LOG\\u00cdSTICA\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-fortunado-choquehuanca.pdf\",\"texto2A\":\"Choquehuanca Vallenas Fortunato - RESPONSABLE UNIDAD OPERATIVA PALMA REAL\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-moises-contreras.pdf\",\"texto2A\":\"Contreras Solorzano Mois\\u00e9s - RESPONSABLE DE UNIDAD OPERATIVA HUANTA\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-carlos-cordero.pdf\",\"texto2A\":\"Cordero Campos Carlos Enrique - ANALISTA COMERCIAL\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-ivan-cordova.pdf\",\"texto2A\":\"Cordova Pereda Ivan Omaro - RESPONSABLE UNIDAD OPERATIVA HUARAZ\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-juniors-cruz.pdf\",\"texto2A\":\"Cruz Pepe Juniors Alex - RESPONSABLE UNIDAD OPERATIVA SAN FRANCISCO-PICHARI\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-edwin-diaz.pdf\",\"texto2A\":\"Diaz Merma Edwin - RESPONSABLE UNIDAD OPERATIVA AYAVIRI\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-eliseo-bautista.pdf\",\"texto2A\":\"Eliseo Bautista Huam\\u00e1n - RESPONSABLE UNIDAD OPERATIVA SANTA ROSA\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-edwin-ferro.pdf\",\"texto2A\":\"Ferro Justiniani Edwin - RESPONSABLE UNIDAD OPERATIVA SICUANI\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-guido-figueroa.pdf\",\"texto2A\":\"Figueroa Medina Guido Eleuterio - SUPERVISOR DE FISCALIZACI\\u00d3N\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-dionisio-flores.pdf\",\"texto2A\":\"Flores Taipe Dionicio - RESPONSABLE UNIDAD OPERATIVA SANTO TOM\\u00c1S\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-mario-fuentes.pdf\",\"texto2A\":\"Fuentes Costas Mario - RESPONSABLE UNIDAD OPERATIVA QUELLOUNO\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-juan-fuentes.pdf\",\"texto2A\":\"Fuentes Terrones Juan Carlos - REPRESENTANTE DE FISCALIZACI\\u00d3N\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-ignacio-garay.pdf\",\"texto2A\":\"Garay Calderon Ignacio Roberto - RESPONSABLE UNIDAD OPERATIVA SANTA MAR\\u00cdA\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-miguel-guerrero.pdf\",\"texto2A\":\"Guerrero Paz Miguel Angel - RESPONSABLE UNIDAD OPERATIVA HUAMACHUCO\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-angel-gutierrez.pdf\",\"texto2A\":\"Gutierrez Guevara Angel Anibal - RESPONSABLE UNIDAD OPERATIVA PUNO\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-jaime-huacallo.pdf\",\"texto2A\":\"Huacallo Farfan Jaime Jonathan - ANALISTA COMERCIAL ( E )\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-angel-huaman.pdf\",\"texto2A\":\"Huaman Isidro Angel Cesar - RESPONSABLE UNIDAD OPERATIVA SAN RAM\\u00d3N\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-jose-laura.pdf\",\"texto2A\":\"Laura Flores Jose Dario - RESPONSABLE UNIDAD OPERATIVA LIMA-JR. PUNO\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-flora-layme.pdf\",\"texto2A\":\"Layme Chacolli Flora - RESPONSABLE UNIDAD OPERATIVA JULI\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-elka-leon.pdf\",\"texto2A\":\"Leon Nima Elka Ivette - COORDINADORA DE PROYECTOS\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-juan-leon.pdf\",\"texto2A\":\"Leon Veli Juan Miguel - ANALISTA ADMINISTRATIVO CONTABLE\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-cesar_lopez2.pdf\",\"texto2A\":\"Lopez Dalia Cesar Eduardo - ASESOR LEGAL GERENCIA GENERAL\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-bautista-luis.pdf\",\"texto2A\":\"Luis Reyes Bautista - RESPONSABLE UNIDAD OPERATIVA ANDAHUAYLAS\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-yeizon-luna.pdf\",\"texto2A\":\"Luna Oviedo Yeizon Frishel - COORDINADOR DE LOG\\u00cdSTICA\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-jose-luna.pdf\",\"texto2A\":\"Luna Rios Jose Antonio - ANALISTA DE TESORER\\u00cdA\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-kevin-luque.pdf\",\"texto2A\":\"Luque Huaman Kevin Kenyo - RESPONSABLE UNIDAD OPERATIVA LLOCHEGUA\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-miguel-malpica.pdf\",\"texto2A\":\"Malpica Tasayco Miguel Angel - JEFE DE RECURSOS HUMANOS\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-victor-martinez.pdf\",\"texto2A\":\"Martinez Benites Victor Ricardo - RESPONSABLE UNIDAD OPERATIVA RANCHO GRANDE\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-rogelio-medina.pdf\",\"texto2A\":\"Medina Barra Rogelio - RESPONSABLE UNIDAD OPERATIVA KITENI\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-guillermo-melly.pdf\",\"texto2A\":\"Melly Siccha Guillermo Hilario - RESPONSABLE UNIDAD OPERATIVA CHACHAPOYAS\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-eliseo-meneses.pdf\",\"texto2A\":\"Meneses Bautista Eliseo - REPRESENTANTE DE VENTAS\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-nataly-miranda.pdf\",\"texto2A\":\"Miranda Arredondo Nataly - ANALISTA DE CONTROL PATRIMONIAL\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-samuel-ortega.pdf\",\"texto2A\":\"Ortega Guerra Samuel Edgar - RESPONSABLE UNIDAD OPERATIVA AZ\\u00c1NGARO\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-juan-ortiz.pdf\",\"texto2A\":\"Ortiz Huaman Juan Carlos - ASISTENTE DE FINANZAS\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-gloria-parra.pdf\",\"texto2A\":\"Parra Terrazos Gloria Elizabeth - ASISTENTE COMERCIAL\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-roy-paz.pdf\",\"texto2A\":\"Paz Araoz Roy Roger - RESPONSABLE UNIDAD OPERATIVA YAURI\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-pedro-pena.pdf\",\"texto2A\":\"Pe\\u00f1a Allende Pedro Wilfredo - SUPERVISOR DE FISCALIZACI\\u00d3N\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-clara-perez.pdf\",\"texto2A\":\"Perez Centeno Clara Luz - REPRESENTANTE DE VENTAS\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-betty-ramos.pdf\",\"texto2A\":\"Ramos Quenaya Betty Yidee - ANALISTA ADMINISTRATIVO CONTABLE\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-nicolas-rios.pdf\",\"texto2A\":\"Rios Angulo Nicolas Hermita\\u00f1o - RESPONSABLE UNIDAD OPERATIVA CALLANCAS\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-gladys-rivera.pdf\",\"texto2A\":\"Rivera Espinoza Gladys - SUPERVISOR DE CONTROL PATRIMONIAL\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-marco-romero.pdf\",\"texto2A\":\"Romero Ballon Marco Amilcar - ANALISTA COMERCIAL ( E )\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-junmy-salazar.pdf\",\"texto2A\":\"Salazar Durand Junmy Gisel - ANALISTA DE COSTOS Y CONTABILIDAD\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-gladys-santa-maria.pdf\",\"texto2A\":\"Santa Maria Perez Gladys Soledad - RESPONSABLE UNIDAD OPERATIVA TINGO MAR\\u00cdA\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-luis-sara.pdf\",\"texto2A\":\"Sara Llanos Luis Rodolfo - ADMINISTRADOR AGENCIA AYACUCHO\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-luis-solis.pdf\",\"texto2A\":\"Solis Bejar Luis Alberto - ADMINISTRADOR AGENCIA CUSCO\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-juana-tito.pdf\",\"texto2A\":\"Tito Quispe Juana Lupe - RESPONSABLE UNIDAD OPERATIVA AREQUIPA\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-leonardo-toribio.pdf\",\"texto2A\":\"Toribio Cconocuica Leonardo - ADMINISTRADOR AGENCIA QUEBRADA\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-elvis-toribio.pdf\",\"texto2A\":\"Toribio Neyra Elvis William - RESPONSABLE UNIDAD OPERATIVA CELEND\\u00cdN\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-luigi-ureta.pdf\",\"texto2A\":\"Ureta Luna Luigi Moshe - ANALISTA DE LOG\\u00cdSTICA ( E )\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-felix-vasquez.pdf\",\"texto2A\":\"Vasquez Cajas Felix - RESPONSABLE UNIDAD OPERATIVA MONZ\\u00d3N\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-rafael-vergara.pdf\",\"texto2A\":\"Vergara Bastidas Rafael - RESPONSABLE UNIDAD OPERATIVA HU\\u00c1NUCO\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-jorge-vila.pdf\",\"texto2A\":\"Vila Mozombite Jorge Roberto - COORDINADOR DE INFORM\\u00c1TICA\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-willy-bravo.pdf\",\"texto2A\":\"Willy Bravo Aparicio - ANALISTA DE CONTROL SELECTIVO\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-julia-zambrano.pdf\",\"texto2A\":\"Zambrano Tupayachi Julia - REPRESENTANTE DE COMPRAS-VENTAS\"}]', 24, 'es', '2020-03-03 16:38:50', '2020-03-13 21:29:53', 'declaracion-de-intereses'),
(42, 'Declaración de Intereses', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-abel-contreras.pdf\",\"texto2A\":\"CONTADOR GENERAL - Contreras Granados Abel Sebastian\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-alfredo-flores.pdf\",\"texto2A\":\"JEFE SUCURSAL JULIACA - \\tSr. Flores Seijas Alfredo\"}]', 24, 'en', '2020-03-03 16:38:50', '2020-03-03 16:38:50', 'declaracion-de-intereses'),
(47, 'En base a lo normado en el Artículo 51º de la Ley 28278', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub1t2017.pdf\",\"texto2A\":\"I Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/Publicidad2t-2017-Ley28278.pdf\",\"texto2A\":\"II Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/Publicidad3t-2017-Ley28278.pdf\",\"texto2A\":\"III Trimestre\"}]', 27, 'es', '2020-03-04 22:34:31', '2020-03-04 23:12:53', 'en-base-a-lo-normado-en-el-articulo-51o-de-la-ley-28278'),
(48, 'I Trimestre', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub1t2017.pdf\",\"texto2A\":\"I Trimestre PDF\"}]', 27, 'en', '2020-03-04 22:34:31', '2020-03-04 22:34:31', 'i-trimestre'),
(53, 'En base a lo normado en el Artículo 51º de la Ley 28278', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub1t2016.pdf\",\"texto2A\":\"I Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub2t2016.pdf\",\"texto2A\":\"II Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub3t2016.pdf\",\"texto2A\":\"III Trimestre\"}]', 30, 'es', '2020-03-04 22:40:06', '2020-03-04 23:15:52', 'en-base-a-lo-normado-en-el-articulo-51o-de-la-ley-28278'),
(54, 'I Trimestre', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub1t2016.pdf\",\"texto2A\":\"Descarga PDF\"}]', 30, 'en', '2020-03-04 22:40:06', '2020-03-04 22:40:06', 'i-trimestre'),
(59, 'En base a lo normado en el Artículo 51º de la Ley 28278', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub1t2015.pdf\",\"texto2A\":\"I Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub2t2015.pdf\",\"texto2A\":\"II Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub3t2015.pdf\",\"texto2A\":\"III Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub4t2015.pdf\",\"texto2A\":\"IV Trimestre\"}]', 33, 'es', '2020-03-04 22:46:25', '2020-03-04 23:20:03', 'en-base-a-lo-normado-en-el-articulo-51o-de-la-ley-28278'),
(60, 'I Trimestre', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub1t2015.pdf\",\"texto2A\":\"Descarga PDF\"}]', 33, 'en', '2020-03-04 22:46:25', '2020-03-04 22:46:25', 'i-trimestre'),
(61, 'En base a Lo Normado en el Articulo 51º De La Ley 28278', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub1t2014.pdf\",\"texto2A\":\"I Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub2t2014.pdf\",\"texto2A\":\"II Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub3t2014.pdf\",\"texto2A\":\"III Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub4t2014.pdf\",\"texto2A\":\"IV Trimestre\"}]', 34, 'es', '2020-03-04 23:23:21', '2020-03-04 23:23:21', 'en-base-a-lo-normado-en-el-articulo-51o-de-la-ley-28278'),
(62, 'En base a Lo Normado en el Articulo 51º De La Ley 28278', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub1t2014.pdf\",\"texto2A\":\"I Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub2t2014.pdf\",\"texto2A\":\"II Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub3t2014.pdf\",\"texto2A\":\"III Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub4t2014.pdf\",\"texto2A\":\"IV Trimestre\"}]', 34, 'en', '2020-03-04 23:23:21', '2020-03-04 23:23:21', 'en-base-a-lo-normado-en-el-articulo-51o-de-la-ley-28278'),
(63, 'En base a Lo Normado en el Articulo 51º De La Ley 28278', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub1t2013.pdf\",\"texto2A\":\"I Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub2t2013.pdf\",\"texto2A\":\"II Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub3t2013.pdf\",\"texto2A\":\"III Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub4t2013.pdf\",\"texto2A\":\"IV Trimestre\"}]', 35, 'es', '2020-03-04 23:29:57', '2020-03-04 23:29:57', 'en-base-a-lo-normado-en-el-articulo-51o-de-la-ley-28278'),
(64, 'En base a Lo Normado en el Articulo 51º De La Ley 28278', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub1t2013.pdf\",\"texto2A\":\"I Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub2t2013.pdf\",\"texto2A\":\"II Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub3t2013.pdf\",\"texto2A\":\"III Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub4t2013.pdf\",\"texto2A\":\"IV Trimestre\"}]', 35, 'en', '2020-03-04 23:29:57', '2020-03-04 23:29:57', 'en-base-a-lo-normado-en-el-articulo-51o-de-la-ley-28278'),
(65, 'En base a Lo Normado en el Articulo 51º De La Ley 28278', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub1t2012.pdf\",\"texto2A\":\"I Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub2t2012.pdf\",\"texto2A\":\"II Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub3t2012.pdf\",\"texto2A\":\"III Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub4t2012.pdf\",\"texto2A\":\"IV Trimestre\"}]', 36, 'es', '2020-03-04 23:32:46', '2020-03-04 23:32:46', 'en-base-a-lo-normado-en-el-articulo-51o-de-la-ley-28278'),
(66, 'En base a Lo Normado en el Articulo 51º De La Ley 28278', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub1t2012.pdf\",\"texto2A\":\"I Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub2t2012.pdf\",\"texto2A\":\"II Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub3t2012.pdf\",\"texto2A\":\"III Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub4t2012.pdf\",\"texto2A\":\"IV Trimestre\"}]', 36, 'en', '2020-03-04 23:32:46', '2020-03-04 23:32:46', 'en-base-a-lo-normado-en-el-articulo-51o-de-la-ley-28278'),
(67, 'En base a Lo Normado en el Articulo 51º De La Ley 28278', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub1t2011.pdf\",\"texto2A\":\"I Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub2t2011.pdf\",\"texto2A\":\"II Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub3t2011.pdf\",\"texto2A\":\"III Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub4t2011.pdf\",\"texto2A\":\"IV Trimestre\"}]', 37, 'es', '2020-03-04 23:35:24', '2020-03-04 23:35:24', 'en-base-a-lo-normado-en-el-articulo-51o-de-la-ley-28278'),
(68, 'En base a Lo Normado en el Articulo 51º De La Ley 28278', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub1t2011.pdf\",\"texto2A\":\"I Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub2t2011.pdf\",\"texto2A\":\"II Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub3t2011.pdf\",\"texto2A\":\"III Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub4t2011.pdf\",\"texto2A\":\"IV Trimestre\"}]', 37, 'en', '2020-03-04 23:35:24', '2020-03-04 23:35:24', 'en-base-a-lo-normado-en-el-articulo-51o-de-la-ley-28278'),
(69, 'En base a Lo Normado en el Articulo 51º De La Ley 28278', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub1t2010.pdf\",\"texto2A\":\"I Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub1t22010.pdf\",\"texto2A\":\"II Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub1t32010.pdf\",\"texto2A\":\"III Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub1t42010.pdf\",\"texto2A\":\"IV Trimestre\"}]', 38, 'es', '2020-03-04 23:40:31', '2020-03-04 23:40:31', 'en-base-a-lo-normado-en-el-articulo-51o-de-la-ley-28278'),
(70, 'En base a Lo Normado en el Articulo 51º De La Ley 28278', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub1t2010.pdf\",\"texto2A\":\"I Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub1t22010.pdf\",\"texto2A\":\"II Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub1t32010.pdf\",\"texto2A\":\"III Trimestre\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pub1t42010.pdf\",\"texto2A\":\"IV Trimestre\"}]', 38, 'en', '2020-03-04 23:40:31', '2020-03-04 23:40:31', 'en-base-a-lo-normado-en-el-articulo-51o-de-la-ley-28278'),
(71, 'Subasta Pública de los bienes dados de baja', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/Subastas\\/2020\\/AVISO-DE-CONVOCATORIA-VEHICULOSvf.pdf\",\"texto2A\":\"Convocatoria a Subasta P\\u00fablica 002-2020-FONAFE\"}]', 39, 'es', '2020-03-04 23:49:11', '2020-03-04 23:59:39', 'subasta-publica-de-los-bienes-dados-de-baja'),
(72, 'Lista', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/Subastas\\/2020\\/AVISO-DE-CONVOCATORIA-VEHICULOSvf.pdf\",\"texto2A\":\"Convocatoria a Subasta P\\u00fablica 002-2020-FONAFE\"}]', 39, 'en', '2020-03-04 23:49:11', '2020-03-04 23:49:11', 'lista'),
(73, 'Subasta Pública de los bienes dados de baja', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/Subastas\\/2013\\/subasta2013c.pdf\",\"texto2A\":\"Convocatoria a Subasta P\\u00fablica\"}]', 40, 'es', '2020-03-04 23:50:25', '2020-03-04 23:59:49', 'subasta-publica-de-los-bienes-dados-de-baja'),
(74, 'Lista', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/Subastas\\/2013\\/subasta2013c.pdf\",\"texto2A\":\"Convocatoria a Subasta P\\u00fablica\"}]', 40, 'en', '2020-03-04 23:50:25', '2020-03-04 23:50:25', 'lista'),
(75, 'Subasta Pública de los bienes dados de baja', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/Subastas\\/2011\\/subasta1Res048_2011.pdf\",\"texto2A\":\"Resolucion Nro 048-2011 ENACO S.A\\/ GERENCIA GENERAL\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Subastas\\/2011\\/subastaAyacuchoBases2011.pdf\",\"texto2A\":\"Bases Subasta Publica Ayacucho 2011\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Subastas\\/2011\\/subastaResultado002_2011.pdf\",\"texto2A\":\"Resolucion Nro 048-2011 ENACO S.A\\/ GERENCIA GENERAL\"}]', 41, 'es', '2020-03-04 23:54:53', '2020-03-05 00:00:02', 'subasta-publica-de-los-bienes-dados-de-baja'),
(76, 'Lista', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/Subastas\\/2011\\/subasta1Res048_2011.pdf\",\"texto2A\":\"Resolucion Nro 048-2011 ENACO S.A\\/ GERENCIA GENERAL\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Subastas\\/2011\\/subastaAyacuchoBases2011.pdf\",\"texto2A\":\"Bases Subasta Publica Ayacucho 2011\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Subastas\\/2011\\/subastaResultado002_2011.pdf\",\"texto2A\":\"Resolucion Nro 048-2011 ENACO S.A\\/ GERENCIA GENERAL\"}]', 41, 'en', '2020-03-04 23:54:53', '2020-03-04 23:54:53', 'lista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion_nivel3_translations`
--

CREATE TABLE `gestion_nivel3_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gestion_nivel3_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `gestion_nivel3_translations`
--

INSERT INTO `gestion_nivel3_translations` (`id`, `nombre`, `slug`, `gestion_nivel3_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'Directorio', 'directorio', 1, 'es', '2020-02-14 20:04:29', '2020-02-14 20:04:29'),
(2, 'Directorio', 'directorio', 1, 'en', '2020-02-14 20:04:29', '2020-02-14 20:04:29'),
(3, 'Colaboradores ENACO', 'colaboradores-enaco', 2, 'es', '2020-02-14 20:06:10', '2020-02-14 20:06:10'),
(4, 'Colaboradores ENACO', 'colaboradores-enaco', 2, 'en', '2020-02-14 20:06:10', '2020-02-14 20:06:10'),
(5, 'Directorio', 'directorio', 3, 'es', '2020-02-14 20:07:09', '2020-02-14 20:07:09'),
(6, 'Directorio', 'directorio', 3, 'en', '2020-02-14 20:07:09', '2020-02-14 20:07:09'),
(7, 'Colaboradores ENACO', 'colaboradores-enaco', 4, 'es', '2020-02-14 20:07:36', '2020-02-14 20:07:36'),
(8, 'Colaboradores ENACO', 'colaboradores-enaco', 4, 'en', '2020-02-14 20:07:36', '2020-02-14 20:07:36'),
(13, 'Gastos de Publicidad 2017', 'gastos-de-publicidad-2017', 7, 'es', '2020-03-04 22:21:47', '2020-03-04 22:23:01'),
(14, 'Gastos de Publicidad 2007-2', 'gastos-de-publicidad-2007-2', 7, 'en', '2020-03-04 22:21:47', '2020-03-04 22:21:47'),
(15, 'Gastos de Publicidad 2016', 'gastos-de-publicidad-2016', 8, 'es', '2020-03-04 22:22:16', '2020-03-04 22:22:16'),
(16, 'Gastos de Publicidad 2016', 'gastos-de-publicidad-2016', 8, 'en', '2020-03-04 22:22:16', '2020-03-04 22:22:16'),
(17, 'Gastos de Publicidad 2015', 'gastos-de-publicidad-2015', 9, 'es', '2020-03-04 22:23:32', '2020-03-04 22:23:32'),
(18, 'Gastos de Publicidad 2015', 'gastos-de-publicidad-2015', 9, 'en', '2020-03-04 22:23:32', '2020-03-04 22:23:32'),
(19, 'Gastos de Publicidad 2014', 'gastos-de-publicidad-2014', 10, 'es', '2020-03-04 22:23:47', '2020-03-04 22:23:47'),
(20, 'Gastos de Publicidad 2014', 'gastos-de-publicidad-2014', 10, 'en', '2020-03-04 22:23:47', '2020-03-04 22:23:47'),
(21, 'Gastos de Publicidad 2013', 'gastos-de-publicidad-2013', 11, 'es', '2020-03-04 22:24:11', '2020-03-04 22:24:11'),
(22, 'Gastos de Publicidad 2013', 'gastos-de-publicidad-2013', 11, 'en', '2020-03-04 22:24:11', '2020-03-04 22:24:11'),
(23, 'Gastos de Publicidad 2012', 'gastos-de-publicidad-2012', 12, 'es', '2020-03-04 22:24:25', '2020-03-04 22:24:25'),
(24, 'Gastos de Publicidad 2012', 'gastos-de-publicidad-2012', 12, 'en', '2020-03-04 22:24:25', '2020-03-04 22:24:25'),
(25, 'Gastos de Publicidad 2011', 'gastos-de-publicidad-2011', 13, 'es', '2020-03-04 22:24:37', '2020-03-04 22:24:37'),
(26, 'Gastos de Publicidad 2011', 'gastos-de-publicidad-2011', 13, 'en', '2020-03-04 22:24:37', '2020-03-04 22:24:37'),
(27, 'Gastos de Publicidad 2010', 'gastos-de-publicidad-2010', 14, 'es', '2020-03-04 22:24:51', '2020-03-04 22:24:51'),
(28, 'Gastos de Publicidad 2010', 'gastos-de-publicidad-2010', 14, 'en', '2020-03-04 22:24:51', '2020-03-04 22:24:51'),
(29, 'Subastas 2020', 'subastas-2020', 15, 'es', '2020-03-04 22:26:54', '2020-03-04 22:26:54'),
(30, 'Subastas 2020', 'subastas-2020', 15, 'en', '2020-03-04 22:26:54', '2020-03-04 22:26:54'),
(31, 'Subastas 2013', 'subastas-2013', 16, 'es', '2020-03-04 22:27:10', '2020-03-04 22:27:10'),
(32, 'Subastas 2013', 'subastas-2013', 16, 'en', '2020-03-04 22:27:10', '2020-03-04 22:27:10'),
(33, 'Subastas 2011', 'subastas-2011', 17, 'es', '2020-03-04 22:27:26', '2020-03-04 22:27:26'),
(34, 'Subastas 2011', 'subastas-2011', 17, 'en', '2020-03-04 22:27:26', '2020-03-04 22:27:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia`
--

CREATE TABLE `historia` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagenIzqB1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagenDerB1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgHojaIzqB2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgHojaDerB2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgB4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `historia`
--

INSERT INTO `historia` (`id`, `imagenIzqB1`, `imagenDerB1`, `imgHojaIzqB2`, `imgHojaDerB2`, `imgB4`, `created_at`, `updated_at`) VALUES
(1, '/uploads/shares/historia/634x700-min.png', '/uploads/shares/historia/530x700-min.png', '/uploads/shares/historia/164x232-min.png', '/uploads/shares/historia/178X180-4.png', '/uploads/shares/historia/nosotros3.jpg', '2019-11-15 04:38:57', '2020-08-13 03:04:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia_translations`
--

CREATE TABLE `historia_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `tituloB1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desB1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `arrayB1` text COLLATE utf8mb4_unicode_ci,
  `tituloMisionB2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtituloMisionB2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desMisionB2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tituloVisionB2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtituloVisionB2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desVisionB2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tituloB3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arrayB3` text COLLATE utf8mb4_unicode_ci,
  `tituloB4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desB4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `arrayB4` text COLLATE utf8mb4_unicode_ci,
  `tituloB5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `textoBtn1B5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `array1B5` text COLLATE utf8mb4_unicode_ci,
  `titulo1B5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitulo1B5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des1B5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `textoBtn2B5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `array2B5` text COLLATE utf8mb4_unicode_ci,
  `titulo2B5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitulo2B5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des2B5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `historia_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `historia_translations`
--

INSERT INTO `historia_translations` (`id`, `tituloB1`, `desB1`, `arrayB1`, `tituloMisionB2`, `subtituloMisionB2`, `desMisionB2`, `tituloVisionB2`, `subtituloVisionB2`, `desVisionB2`, `tituloB3`, `arrayB3`, `tituloB4`, `desB4`, `arrayB4`, `tituloB5`, `textoBtn1B5`, `array1B5`, `titulo1B5`, `subtitulo1B5`, `des1B5`, `textoBtn2B5`, `array2B5`, `titulo2B5`, `subtitulo2B5`, `des2B5`, `historia_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'Somos la única Empresa autorizada para la comercialización de la Hoja de Coca en el Perú', '<p>La Empresa Nacional de la Coca S.A., es una empresa peruana con m&aacute;s de 37 a&ntilde;os dedicada al acopio, comercializaci&oacute;n e industrializaci&oacute;n de la hoja de coca (Erythroxylum coca) y sus derivados, con fines l&iacute;citos y ben&eacute;ficos para la salud.</p>\r\n\r\n<p>Nuestra funci&oacute;n principal es atender la demanda legal de hoja de coca, tanto para el uso tradicional (chacchado) y su industrializaci&oacute;n.</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/historia\\/group-8-icon.png\",\"archivo2A\":\"\\/uploads\\/shares\\/historia\\/rosado_-icono.png\",\"texto3A\":\"Integraci\\u00f3n\"},{\"archivo1A\":\"\\/uploads\\/shares\\/historia\\/Artboard_4.png\",\"archivo2A\":\"\\/uploads\\/shares\\/historia\\/rojo-icono.png\",\"texto3A\":\"Excelencia en el servicio\"},{\"archivo1A\":\"\\/uploads\\/shares\\/historia\\/Artboard.png\",\"archivo2A\":\"\\/uploads\\/shares\\/historia\\/verde_-icono.png\",\"texto3A\":\"Innovaci\\u00f3n\"},{\"archivo1A\":\"\\/uploads\\/shares\\/historia\\/Artboard_5.png\",\"archivo2A\":\"\\/uploads\\/shares\\/historia\\/azul-icono.png\",\"texto3A\":\"Compromiso\"},{\"archivo1A\":\"\\/uploads\\/shares\\/historia\\/manos.png\",\"archivo2A\":\"\\/uploads\\/shares\\/historia\\/amarillo_-icono.png\",\"texto3A\":\"Integridad\"}]', 'MISIÓN', 'Conoce nuestra misión', '<p>Somos la empresa del Estado Peruano que dentro de la Estrategia Nacional de Lucha contra las Drogas se encarga del acopio, industrializaci&oacute;n y comercializaci&oacute;n de la Hoja de Coca a nivel nacional e internacional, con responsabilidad social bajo el marco de las normas legales vigentes, para satisfacer las necesidades de sus clientes.</p>', 'VISIÓN', 'Conoce nuestra visión', '<p>Ser una empresa reconocida en el mercado nacional e internacional de la comercializaci&oacute;n e industrializaci&oacute;n de la Hoja de Coca, por la calidad e innovaci&oacute;n permanente de sus productos, su personal altamente motivado y competente, procesos &oacute;ptimos y normalizados, que cumple su rol social con proveedores y clientes satisfechos.</p>', 'Ofrecemos calidad y tradición desde', '[{\"imgA\":\"\\/uploads\\/shares\\/historia\\/Grupo_1.png\",\"tx1A\":\"1948\",\"tx2A\":\"Decreto Ley N\\u00b0 11046\",\"txDesA\":\"<p>Se estableci&oacute; el Estanco de la Coca; entidad encargada del control del sembr&iacute;o, cultivo y cosecha de la Hoja de Coca en el Per&uacute;; as&iacute; como de su distribuci&oacute;n, consumo y exportaci&oacute;n.<\\/p>\"},{\"imgA\":\"\\/uploads\\/shares\\/historia\\/500x444-min.png\",\"tx1A\":\"1969\",\"tx2A\":\"Decreto Ley N\\u00b0 17525\",\"txDesA\":\"<p>Se estableci&oacute; a la Empresa de la Coca y Derivados como organismo p&uacute;blico descentralizado del Ministerio de Industria y Comercio.<\\/p>\"},{\"imgA\":\"\\/uploads\\/shares\\/historia\\/shutterstock_1483416317.png\",\"tx1A\":\"1974\",\"tx2A\":\"Decreto Ley N\\u00b0 20689\",\"txDesA\":\"<p>Dispuso que en tanto no se promulgue la Ley de la Actividad Empresarial del Estado, entidades como la Empresa Nacional de la Coca pod&iacute;an organizarse como empresas estatales.<\\/p>\"},{\"imgA\":\"\\/uploads\\/shares\\/historia\\/Grupo_8.jpg\",\"tx1A\":\"1978\",\"tx2A\":\"Ley N\\u00b0 22095\",\"txDesA\":\"<p>Se estableci&oacute; que solo el Estado, a trav&eacute;s de la Empresa Nacional de la Coca S.A. (ENACO S.A.); realizar&iacute;a la comercializaci&oacute;n interna y externa de la Hoja de Coca.<\\/p>\"},{\"imgA\":\"\\/uploads\\/shares\\/historia\\/Grupo_3.png\",\"tx1A\":\"1978\",\"tx2A\":\"Ley N\\u00b0 22232\",\"txDesA\":\"<p>Adscribi&oacute; a ENACO al sector agrario, como un organismo p&uacute;blico descentralizado.<\\/p>\"},{\"imgA\":\"\\/uploads\\/shares\\/historia\\/enaco-local.jpg\",\"tx1A\":\"1978\",\"tx2A\":\"Ley N\\u00b0 22370\",\"txDesA\":\"<p>Ley Org&aacute;nica de la Empresa Nacional de la Coca; estableci&oacute; a ENACO como empresa p&uacute;blica del sector agrario.<\\/p>\"},{\"imgA\":\"\\/uploads\\/shares\\/historia\\/Grupo_10.png\",\"tx1A\":\"1979\",\"tx2A\":\"Decreto Supremo N\\u00b0 026-79-AA\",\"txDesA\":\"<p>Se aprob&oacute; el Estatuto de ENACO como empresa p&uacute;blica.<\\/p>\"},{\"imgA\":\"\\/uploads\\/shares\\/historia\\/Grupo_7.jpg\",\"tx1A\":\"1982\",\"tx2A\":\"Decreto Supremo N\\u00b0 008-82-AG\",\"txDesA\":\"<p>Se aprob&oacute; la conversi&oacute;n de la Empresa Nacional de la Coca, en empresa estatal de derecho privado del Sector Agricultura; otorg&aacute;ndole la denominaci&oacute;n abreviada ENACO S.A.<\\/p>\"},{\"imgA\":\"\\/uploads\\/shares\\/historia\\/1574204691Grupo_4.jpg\",\"tx1A\":\"1985\",\"tx2A\":\"Decreto Superno N\\u00b0 209-EF\",\"txDesA\":\"<p>Transfiere como aporte de capital a Inversiones COFIDE S.A., la totalidad de las acciones que posee el Estado, directo en las empresas estatales de derecho privado, entre estas ENACO S.A.&nbsp;&nbsp;<\\/p>\"},{\"imgA\":\"\\/uploads\\/shares\\/historia\\/1574204691Grupo_6.jpg\",\"tx1A\":\"1997\",\"tx2A\":\"Decreto Supremo N\\u00b0 094-97-EF\",\"txDesA\":\"<p>Autoriza la transferencia a favor del MEF&nbsp;&ndash; OIOE, la totalidad de las acciones de propiedad de Inversiones COFIDE S.A. de las Empresas Estatales de Derecho Privado&nbsp;&nbsp;<\\/p>\"},{\"imgA\":\"\\/uploads\\/shares\\/historia\\/1574204691Grupo_5.jpg\",\"tx1A\":\"1999\",\"tx2A\":\"Decreto Supremo N\\u00b0 170-99-EF\",\"txDesA\":\"<p>Establece disposiciones aplicables a Entidades y Empresas del Estado para perfeccionar la transferencia de acciones al FONAFE.&nbsp;<\\/p>\"},{\"imgA\":\"\\/uploads\\/shares\\/historia\\/Grupo_10.png\",\"tx1A\":\"2001\",\"tx2A\":\"Estatuto de ENACO\",\"txDesA\":\"<p>Nuevo Estatuto de ENACO, aprobado mediante Acta de J.G.A<\\/p>\"},{\"imgA\":\"\\/uploads\\/shares\\/historia\\/getg.png\",\"tx1A\":\"2015\",\"tx2A\":\"Decreto Legislativo N\\u00b0 1241\",\"txDesA\":\"<p>Fortalece la lucha contra el tr&aacute;fico il&iacute;cito de drogas. Establece que el Estado a trav&eacute;s de ENACO S.A. realiza la industrializaci&oacute;n y comercializaci&oacute;n interna y externa de la hoja de coca proveniente de los predios empadronados.<\\/p>\"},{\"imgA\":\"\\/uploads\\/shares\\/historia\\/dfs.png\",\"tx1A\":\"2016\",\"tx2A\":\"Decreto Supremo N\\u00b0 006-2016-IN\",\"txDesA\":\"<p>Establece adem&aacute;s que ENACO S.A. ejerce fiscalizaci&oacute;n sobre la posesi&oacute;n y comercializaci&oacute;n de la hoja de coca, con intervenci&oacute;n del personal de la Polic&iacute;a Nacional del Per&uacute;&nbsp;y de ser materialmente factible, el representante del Ministerio P&uacute;blico.<\\/p>\"}]', 'Productos certificados', '<p>Gracias a la experiencia de casi cuatro d&eacute;cadas desarrollando productos y soluciones industriales, contamos con certificaciones en:</p>\r\n\r\n<ul>\r\n	<li>Certificaci&oacute;n PGH otorgado por la Direcci&oacute;n General de Salud Ambiental.</li>\r\n	<li>Registro sanitario de alimentos otorgado por la Direcci&oacute;n General de Salud Ambiental.</li>\r\n	<li>Procesos de inocuidad otorgado por SENASA.</li>\r\n</ul>', '[{\"archivoOne1A\":\"\\/uploads\\/shares\\/historia\\/147x93-min.png\"},{\"archivoOne1A\":\"\\/uploads\\/shares\\/historia\\/Group_9.png\"},{\"archivoOne1A\":\"\\/uploads\\/shares\\/historia\\/INOCUIDAD_2.jpg\"}]', 'Productos de herencia milenaria', 'Comercio Tradicional', '[{\"archivoOne1A1\":\"\\/uploads\\/shares\\/historia\\/1443x574.jpg\"},{\"archivoOne1A1\":\"\\/uploads\\/shares\\/historia\\/Bitmap_4.jpg\"},{\"archivoOne1A1\":\"\\/uploads\\/shares\\/historia\\/Bitmap_3.jpg\"},{\"archivoOne1A1\":\"\\/uploads\\/shares\\/historia\\/_DSC7836.jpg\"},{\"archivoOne1A1\":\"\\/uploads\\/shares\\/historia\\/_DSC7837.jpg\"}]', 'Comercio Tradicional', 'Conoce más de este comercio', '<p>En ENACO valoramos la dedicaci&oacute;n y el conocimiento ancestral de las comunidades para el cultivo de la hoja de coca.</p>\r\n\r\n<p>Por ello, trabajamos de la mano con agricultores de diversas comunidades de los diferentes valles del Per&uacute;, contribuyendo al desarrollo sostenible e inclusivo.</p>\r\n\r\n<p>Se parte de este gran trabajo!&nbsp;</p>', 'Comercio Industrial', '[{\"archivoOne1A2\":\"\\/uploads\\/shares\\/historia\\/_DSC0413.jpg\"},{\"archivoOne1A2\":\"\\/uploads\\/shares\\/historia\\/_DSC0344.jpg\"},{\"archivoOne1A2\":\"\\/uploads\\/shares\\/historia\\/_DSC0431.jpg\"},{\"archivoOne1A2\":\"\\/uploads\\/shares\\/historia\\/_DSC0503.jpg\"},{\"archivoOne1A2\":\"\\/uploads\\/shares\\/historia\\/_DSC0442.jpg\"},{\"archivoOne1A2\":\"\\/uploads\\/shares\\/historia\\/_DSC0419.jpg\"},{\"archivoOne1A2\":\"\\/uploads\\/shares\\/historia\\/_DSC0473.jpg\"}]', 'Comercio Industrial', 'Conoce más de este comercio', '<p>Estamos comprometidos con la producci&oacute;n derivados de la hoja de coca bajo los m&aacute;s altos est&aacute;ndares de Calidad, a trav&eacute;s de una moderna planta de proceso que nos ha permitido obtener productos.</p>', 1, 'es', '2019-11-15 04:38:57', '2020-08-13 02:15:46'),
(2, 'Somos Enaco // La única empresa Nacional de hoja de coca en Perú', '<p>La Empresa Nacional de la Coca S.A. es la &uacute;nica empresa peruana autorizada para la comercializaci&oacute;n de la hoja de coca y sus derivados. A partir del a&ntilde;o de 1982, ENACO S.A. es una empresa estatal de derecho privado, en la modalidad de sociedad an&oacute;nima, cuya funci&oacute;n principal es atender la demanda legal de hoja de coca y derivados, tanto para uso tradicional como industrial. En otros t&eacute;rminos, es la instituci&oacute;n autorizada para la comercializaci&oacute;n e industrializaci&oacute;n de la hoja de coca con fines l&iacute;citos.</p>', NULL, 'Luchamos contra las drogas', 'Conoce a nuestra misión', '<p>Somos la empresa del Estado Peruano que dentro de la Estrategia Nacional de Lucha contra las Drogas se encarga del acopio, industrializaci&oacute;n y comercializaci&oacute;n de la hoja de coca a nivel nacional e internacional, con responsabilidad social bajo el marco de las normas legales vigentes, para satisfacer las necesidades de sus clientes.</p>', 'Comprometidos a brindar calidad', 'Conoce a nuestra misión', '<p>Somos la empresa del Estado Peruano que dentro de la Estrategia Nacional de Lucha contra las Drogas se encarga del acopio, industrializaci&oacute;n y comercializaci&oacute;n de la hoja de coca a nivel nacional e internacional, con responsabilidad social bajo el marco de las normas legales vigentes, para satisfacer las necesidades de sus clientes.</p>', 'Ofrecemos calidad y tradición desde', '[{\"imgA\":\"\\/uploads\\/shares\\/historia\\/group-5.jpg\",\"tx1A\":\"1969\",\"tx2A\":\"Decreto Ley 17525\",\"txDesA\":\"<p>prueba<\\/p>\"},{\"imgA\":\"\\/uploads\\/shares\\/historia\\/group-5.jpg\",\"tx1A\":\"1969\",\"tx2A\":\"Decreto Ley 17525\",\"txDesA\":\"<p>prueba<\\/p>\"}]', 'Ofrecemos calidad y tradición desde', '<p>Our bespoke events create captivating worlds of discovery and magic, unique to your guests&rsquo; tastes. From the elaborately themed appearance of the yacht to the.</p>', '[{\"archivoOne1A\":\"\\/uploads\\/shares\\/historia\\/group-48.png\"},{\"archivoOne1A\":\"\\/uploads\\/shares\\/historia\\/group-48.png\"},{\"archivoOne1A\":\"\\/uploads\\/shares\\/historia\\/group-48.png\"}]', 'Productos de herencia milenaria', 'Prueba', '[{\"archivoOne1A1\":\"\\/uploads\\/shares\\/historia\\/b10-bitmap.jpg\"}]', 'Prueba', 'Prueba', '<p>Prueba</p>', 'Prueba', '[{\"archivoOne1A2\":\"\\/uploads\\/shares\\/historia\\/b10-bitmap.jpg\"}]', 'Prueba', 'Prueba', '<p>Prueba</p>', 1, 'en', '2019-11-15 04:38:57', '2019-12-17 18:52:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `home`
--

CREATE TABLE `home` (
  `id` int(10) UNSIGNED NOT NULL,
  `imgIzqB2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgDerB2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgHojaB3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgFondoB4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `coverVideoB4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgHojaB5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `home`
--

INSERT INTO `home` (`id`, `imgIzqB2`, `imgDerB2`, `imgHojaB3`, `imgFondoB4`, `coverVideoB4`, `imgHojaB5`, `created_at`, `updated_at`) VALUES
(1, '/uploads/shares/home/504x710-min.png', '/uploads/shares/home/469x661-min.png', '/uploads/shares/home/178X180-3.png', '/uploads/shares/home/1600x613.jpg', '/uploads/shares/home/1600x600-min.png', '/uploads/shares/home/hoja3.png', '2019-11-15 03:04:59', '2020-08-13 01:15:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `home_translations`
--

CREATE TABLE `home_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `tituloB2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desB2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `textoBtnB2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tituloB3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtituloB3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tituloB4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desB4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `enlaceVideoB4` text COLLATE utf8mb4_unicode_ci,
  `textoBtnB4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tituloB5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtituloB5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `textoBtnB5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enlaceBtnB5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tituloB6` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placeHolderB6` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `textoBtnB6` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `home_translations`
--

INSERT INTO `home_translations` (`id`, `tituloB2`, `desB2`, `textoBtnB2`, `tituloB3`, `subtituloB3`, `tituloB4`, `desB4`, `enlaceVideoB4`, `textoBtnB4`, `tituloB5`, `subtituloB5`, `textoBtnB5`, `enlaceBtnB5`, `tituloB6`, `placeHolderB6`, `textoBtnB6`, `home_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'Somos Guardianes de la herencia milenaria INCA única en el mundo.', '<p>Somos una empresa peruana con m&aacute;s de 37 a&ntilde;os dedicada al acopio, comercializaci&oacute;n e industrializaci&oacute;n de la hoja de coca (Erythroxylum) y sus derivados, con fines l&iacute;citos y ben&eacute;ficos para la salud</p>', 'Conócenos', 'Nacen nuestros productos', 'Aquí encontrarás una gran variedad', 'Generamos vínculos con las comunidades cocaleras', '<p>Generamos valor agregado a la hoja sagrada; permitiendo la mejora de condiciones a nuestros principales proveedores; comunidades cocaleras legales; quienes trabajan la tierra en armon&iacute;a con la naturaleza.</p>', NULL, 'Más información', 'Lo último en ENACO', 'Entérate las últimas noticias de la Hoja de Coca', 'Ver blog', 'https://web.enaco.com.pe/blog/', 'Mantente informado', 'Déjanos tu correo aquí', 'Suscríbete', 1, 'es', '2019-11-15 03:04:59', '2020-06-05 03:52:52'),
(2, 'De la herencia milenaria única en el mundo', '<p>Llega la Empresa Nacional de la Coca S.A., se cre&oacute; en el a&ntilde;o de 1949, como la &uacute;nica empresa peruana autorizada para la comercializaci&oacute;n de la hoja de coca y sus derivados. A partir del a&ntilde;o de 1982, Enaco S.A.</p>', 'Conócenos', 'Nacen nuestro productos', 'Aquí encontrarás una gran variedad', 'Linking coca farmer communities', '<p>Our bespoke events create captivating worlds of discovery and magic</p>', NULL, 'Más información', 'Lo último en ENACO', 'Entérate las últimas noticias de la hoja de coca', 'Ver blog', 'https://web.enaco.com.pe/blog/', 'Mantente informado', 'Déjanos tu correo aquí', 'Suscríbete', 1, 'en', '2019-11-15 03:04:59', '2020-05-06 01:13:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `industrial`
--

CREATE TABLE `industrial` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imagenFondoListado` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagenCaladaListado` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagenFondo` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `industrial`
--

INSERT INTO `industrial` (`id`, `created_at`, `updated_at`, `imagenFondoListado`, `imagenCaladaListado`, `imagenFondo`) VALUES
(1, '2019-11-15 03:23:32', '2020-08-13 02:36:26', '/uploads/shares/industrial/hover1.jpg', '/uploads/shares/industrial/800x719-min.png', '/uploads/shares/industrial/1000x677-3.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `industrial_translations`
--

CREATE TABLE `industrial_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `tituloListado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desListado` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tituloB1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desB1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `industrial_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `industrial_translations`
--

INSERT INTO `industrial_translations` (`id`, `tituloListado`, `desListado`, `slug`, `tituloB1`, `desB1`, `industrial_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'Industrial', '<p>En ENACO mantenemos sabiamente la tradici&oacute;n en el consumo de las plantas peruanas usadas desde el tiempo de los incas</p>', 'industrial', 'Disfruta esta herencia milenaria', '<p>En ENACO mantenemos sabiamente la tradici&oacute;n en el consumo de las plantas peruanas usadas desde el tiempo de los incas, por m&aacute;s de 30 a&ntilde;os brindando sabor y transmitiendo sabidur&iacute;a a trav&eacute;s de la industrializaci&oacute;n de esta hoja milenaria.</p>', 1, 'es', '2019-11-15 03:23:32', '2020-06-05 04:30:24'),
(2, 'Industrial', '<p>Contamos con una gran variedad de productos a base de hoja de coca. Disfr&uacute;talos en todas tu comidas.</p>', 'industrial', 'inherited products', '<p>Contamos con una gran variedad de productos a base de hoja de coca. Disfr&uacute;talos en todas tu comidas.</p>', 1, 'en', '2019-11-15 03:23:32', '2019-12-17 17:45:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info`
--

CREATE TABLE `info` (
  `id` int(10) UNSIGNED NOT NULL,
  `correoWeb` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correoFormSuscribete` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correoFormContactanos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correoFormSugerencias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correoFormDenuncias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `activarIdioma` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `info`
--

INSERT INTO `info` (`id`, `correoWeb`, `correoFormSuscribete`, `correoFormContactanos`, `correoFormSugerencias`, `correoFormDenuncias`, `created_at`, `updated_at`, `activarIdioma`) VALUES
(1, 'info@enaco.com.pe', 'info@enaco.com.pe', 'ventas@enaco.com.pe', 'info@enaco.com.pe', 'denuncias.etica@enaco.com.pe', '2019-11-15 03:06:40', '2020-01-03 15:06:26', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_translations`
--

CREATE TABLE `info_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `enlaceBlog` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enlaceTransparencia` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enlaceCocaleros` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enlaceFE` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codEticaPDF` text COLLATE utf8mb4_unicode_ci,
  `terminosPDF` text COLLATE utf8mb4_unicode_ci,
  `privacidadDatosPDF` text COLLATE utf8mb4_unicode_ci,
  `facebookEnaco` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebookDelisse` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebookKintu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ciudadBase` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tlfCiudadBase` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celCiudadBase` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ciudadProv` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tlfCiudadProv` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celCiudadProv` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tituloProductos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtituloProductos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tituloGracias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desGracias` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tituloSedes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tituloContactanos` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desContactanos` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `arrayContactanos` text COLLATE utf8mb4_unicode_ci,
  `tituloGestion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtituloGestion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tituloTrabajo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtituloTrabajo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tituloServiciosB1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtituloServiciosB1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tituloServiciosB2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desServiciosB2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdfServiciosB2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tituloSugerencia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tituloDenuncia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desDenuncia` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `info_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `array2Contactanos` text COLLATE utf8mb4_unicode_ci,
  `intranet` text COLLATE utf8mb4_unicode_ci,
  `tde` text COLLATE utf8mb4_unicode_ci,
  `tituloGraciasDe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desGraciasDe` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `info_translations`
--

INSERT INTO `info_translations` (`id`, `enlaceBlog`, `enlaceTransparencia`, `enlaceCocaleros`, `enlaceFE`, `codEticaPDF`, `terminosPDF`, `privacidadDatosPDF`, `facebookEnaco`, `facebookDelisse`, `facebookKintu`, `ciudadBase`, `tlfCiudadBase`, `celCiudadBase`, `ciudadProv`, `tlfCiudadProv`, `celCiudadProv`, `tituloProductos`, `subtituloProductos`, `tituloGracias`, `desGracias`, `tituloSedes`, `tituloContactanos`, `desContactanos`, `arrayContactanos`, `tituloGestion`, `subtituloGestion`, `tituloTrabajo`, `subtituloTrabajo`, `tituloServiciosB1`, `subtituloServiciosB1`, `tituloServiciosB2`, `desServiciosB2`, `pdfServiciosB2`, `tituloSugerencia`, `tituloDenuncia`, `desDenuncia`, `info_id`, `locale`, `created_at`, `updated_at`, `array2Contactanos`, `intranet`, `tde`, `tituloGraciasDe`, `desGraciasDe`) VALUES
(1, 'https://web.enaco.com.pe/blog/', 'http://www.transparencia.gob.pe/enlaces/pte_transparencia_enlaces.aspx?id_entidad=13879&id_tema=1&ver=D#.XeagLehKhPa', 'http://www.enaco.com.pe:8080/consprod/', 'https://www.enaco.com.pe/felectronica/', NULL, '/uploads/shares/home/enaco_-_te__rminos_y_condiciones.pdf', NULL, 'https://www.facebook.com/enaco.oficial/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'Lima', '+51 (01) 2637219', NULL, 'Provincia', '+51 (84) 582002', NULL, 'Grandes Variedades', 'Aquí encontrarás tu producto ideal', 'Gracias', '<p>En breve nos pondremos en contacto contigo</p>', 'Nuestras Sedes', 'Es hora de charlar', '<p>Completa el formulario y uno de nuestros colaboradores se comunicar&aacute;&nbsp;contigo</p>', '[{\"tx1A\":\"Administrativo (Sede Central)\",\"tx2A\":\"+51\\u00a0(84) 582002\",\"tx3A\":null,\"tx4A\":\"Tenerias N\\u00b0 103, San Sebasti\\u00e1n, Cusco\",\"tx5A\":\"info@enaco.com.pe\"},{\"tx1A\":\"Administrativo (Sede Miraflores)\",\"tx2A\":\"+51(01) 65-84703\",\"tx3A\":null,\"tx4A\":\"Av. Arequipa N\\u00ba 4528, Miraflores, Lima\",\"tx5A\":\"info@enaco.com.pe\"}]', 'Información de gestión', 'Conoce a nuestros temas', 'Buscamos Talento', 'Encuentra el puesto que tenemos para ti', 'Buscamos Proveedores', 'Encuentra el puesto que tenemos para ti', 'Para adquisiciones menores a 8 UIT', '<p>Llega la Empresa Nacional de la Coca S.A., se cre&oacute; en el a&ntilde;o de 1949, como la &uacute;nica empresa peruana autorizada para la comercializaci&oacute;n de la hoja de coca y sus derivados.</p>', '/uploads/shares/TEST_ENACO.pdf', '¿Qué tienes para contarnos?', '¿Tienes alguna denuncia?', '<p><strong>La Empresa Nacional de la Coca S.A.</strong> ha implementado un sistema de denuncias, quejas, consultas y sugerencias, el cual cuenta con canales distintos y abiertos para cualquier persona que tenga conocimiento de alg&uacute;n hecho que contravenga nuestros principios del &ldquo;C&oacute;digo de Etica&rdquo; o en su defecto requieran hacernos llegar alguna informaci&oacute;n oportuna para atenci&oacute;n.</p>\r\n\r\n<p>Para registrar en linea una denuncia, utiliza este formulario. Llena correctamente los datos. <strong>(*) Campos obligatorios.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tambi&eacute;n puedes ingresar una denuncia, a trav&eacute;s del siguiente correo que canalizar&aacute; la informaci&oacute;n que proporciones:&nbsp;<strong><a href=\"mailto:denuncias.etica@enaco.com.pe\">denuncias.etica@enaco.com.pe</a></strong></p>', 1, 'es', '2019-11-15 03:06:40', '2020-05-06 01:09:26', '[{\"tx1A2\":\"Productos Tradicionales\",\"tx2A2\":\"+51\\u00a0(84) 582002\",\"tx3A2\":null,\"tx4A2\":\"Tenerias N\\u00b0 103, San Sebasti\\u00e1n, Cusco\",\"tx5A2\":\"ventas@enaco.com.pe\"},{\"tx1A2\":\"Productos Industriales (Sede Lima)\",\"tx2A2\":\"+51 (01) 2637219\",\"tx3A2\":null,\"tx4A2\":\"Av. Universitaria N\\u00ba602 San Miguel\",\"tx5A2\":\"ventas@enaco.com.pe\"}]', 'https://www.enaco.com.pe/intranet/wp-login.php', 'https://tde.enaco.com.pe/index.php/inicio/login', 'Gracias', '<p>Revisaremos tu caso y nos pondremos en contacto contigo</p>'),
(2, 'https://web.enaco.com.pe/blog/', 'http://www.transparencia.gob.pe/enlaces/pte_transparencia_enlaces.aspx?id_entidad=13879&id_tema=1&ver=D#.XeagLehKhPa', 'http://www.enaco.com.pe:8080/consprod/', 'https://www.enaco.com.pe/felectronica/', NULL, '/uploads/shares/enaco_-_te__rminos_y_condiciones.pdf', NULL, 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', 'Great Varieties', 'Here you will find your ideal product', 'prueba', '<p>prueba</p>', 'Find us all over Peru', 'What do you have to tell us?', '<p>&nbsp;</p>\r\n\r\n<p>Complete the form and one of our collaborators will contact you</p>', '[{\"tx1A\":\"prueba\",\"tx2A\":\"prueba\",\"tx3A\":\"prueba\",\"tx4A\":\"prueba\",\"tx5A\":\"prueba\"}]', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', '<p>prueba</p>', '/uploads/shares/2-atlas-pesado-webjpg.jpg', 'prueba', 'prueba', '<p>prueba</p>', 1, 'en', '2019-11-15 03:06:40', '2020-05-06 01:11:40', NULL, 'https://www.enaco.com.pe/intranet/wp-login.php', 'https://tde.enaco.com.pe/index.php/inicio/login', 'Thanks', '<p>&nbsp;</p>\r\n\r\n<p>We will review your case and contact you</p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `integrante`
--

CREATE TABLE `integrante` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `orden` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `niveles_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `integrante`
--

INSERT INTO `integrante` (`id`, `imagen`, `orden`, `cargo_id`, `created_at`, `updated_at`, `niveles_id`) VALUES
(2, '/uploads/shares/equipo/cgalarza4.jpg', '1', 1, '2019-11-15 05:42:46', '2020-04-23 05:01:19', 1),
(3, '/uploads/shares/equipo/Capa_10.jpg', '3', 2, '2019-11-15 05:43:05', '2020-03-02 13:44:45', 2),
(12, '/uploads/shares/equipo/Hgil4.jpg', '4', 13, '2020-03-02 14:14:48', '2020-03-02 14:48:54', 2),
(13, '/uploads/shares/equipo/Capa_7.jpg', '1', 1, '2020-09-01 04:55:04', '2020-09-01 04:55:04', 1),
(14, '/uploads/shares/equipo/Capa_7.jpg', '1', 1, '2020-09-01 04:55:12', '2020-09-01 04:55:12', 1),
(15, '/uploads/shares/equipo/Capa_7.jpg', '1', 1, '2020-09-01 04:55:17', '2020-09-01 04:55:17', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `integrante_translations`
--

CREATE TABLE `integrante_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombreCompleto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `integrante_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `telefono` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `integrante_translations`
--

INSERT INTO `integrante_translations` (`id`, `nombreCompleto`, `integrante_id`, `locale`, `created_at`, `updated_at`, `telefono`, `correo`, `direccion`, `des`) VALUES
(3, 'Cristian Eduardo Galarza Mesias', 2, 'es', '2019-11-15 05:42:46', '2020-03-03 13:11:53', '01-6584706', 'cgalarza@enaco.com.pe', 'Av. Arequipa 4528; Miraflores - Lima', '<p>.</p>'),
(4, 'Carlos Alberto de Izcue Arnillas', 2, 'en', '2019-11-15 05:42:46', '2019-11-15 05:42:46', '', '', '', ''),
(5, 'Peck Yali Suarez Ysla', 3, 'es', '2019-11-15 05:43:05', '2020-03-03 13:12:01', '01-6584706', 'psuarez@enaco.com.pe', 'Av. Arequipa 4528; Miraflores - Lima', '<p>.</p>'),
(6, 'Carlos Alberto de Izcue Arnillas', 3, 'en', '2019-11-15 05:43:05', '2019-11-15 05:43:05', '', '', '', ''),
(21, 'Henry William Gil Herrera', 12, 'es', '2020-03-02 14:14:48', '2020-06-04 21:12:56', '084-582027', 'hgil@enaco.com.pe', 'Calle Tenerias 103 ; San Sebastian - Cusco', '<p>.</p>'),
(22, 'Henry Willian Gil Herrera', 12, 'en', '2020-03-02 14:14:48', '2020-03-02 14:14:48', '-', 'hgil@enaco.com.pe', 'Av. Arequipa 4528; Miraflores - Lima', '<p>Como persona organizada y con una gran motivaci&oacute;n, soy capaz de adaptarme a cualquier circunstancia y dar siempre lo mejor de m&iacute; en cualquier proyecto, al mismo tiempo que me esfuerzo por trabajar en equipo y fomentar valores como los del compa&ntilde;erismo.</p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_04_28_215424_create_seo_routes_table', 1),
(2, '2017_04_29_204123_create_roles_table', 1),
(3, '2017_04_30_205956_create_admins_table', 1),
(4, '2017_10_11_160450_create_redirections_table', 1),
(5, '2019_03_16_190855_create_info_table', 1),
(6, '2019_10_31_163059_create_banner_table', 1),
(7, '2019_11_04_160132_create_contacto_table', 1),
(8, '2019_11_05_161822_create_home_table', 1),
(9, '2019_11_05_170351_create_historia_table', 1),
(10, '2019_11_05_173705_create_equipo_table', 1),
(11, '2019_11_05_193749_create_tradicional_table', 1),
(12, '2019_11_05_193825_create_industrial_table', 1),
(13, '2019_11_05_193924_create_sede_table', 1),
(14, '2019_11_05_194145_create_gestion_table', 1),
(15, '2019_11_06_144642_create_trabajo_table', 1),
(16, '2019_11_15_151426_update_industrial_table', 2),
(18, '2019_11_15_170003_update_etiquetaindus99_table', 3),
(19, '2019_11_15_173855_create_dictionary_table', 4),
(20, '2019_11_15_213311_update_trabajo99_table', 5),
(21, '2019_11_15_213801_update_trabajo98_table', 6),
(22, '2019_11_15_215203_update_departamento99_table', 7),
(23, '2019_11_15_221939_update_servicio99_table', 8),
(24, '2019_11_15_234546_update_integrante99_table', 9),
(25, '2019_11_18_150817_update_home_table', 10),
(26, '2019_11_18_153201_update_banner_table', 10),
(27, '2019_11_18_160355_update_gestion299_table', 10),
(28, '2019_11_19_175156_update_contacto_table', 11),
(29, '2019_11_19_181100_update_contacto2_table', 11),
(30, '2019_11_21_145810_table_info2_table', 12),
(31, '2019_11_21_171103_update_home2_table', 13),
(32, '2019_11_21_173632_update_trabajo2_table', 13),
(33, '2019_11_22_150211_update_cargo99_table', 14),
(34, '2019_11_25_162426_update_industrial2_table', 15),
(35, '2019_11_25_163039_update_industrial3_table', 15),
(36, '2019_11_26_011407_update_gestion298_table', 16),
(37, '2019_11_27_165223_update_info99_table', 17),
(38, '2019_11_27_172200_update_industrial99_table', 17),
(39, '2019_11_27_172956_create_niveles_table', 17),
(40, '2019_12_19_010138_update_tradicional_table', 18),
(41, '2019_12_23_152459_update_contacto3_table', 19),
(42, '2020_01_03_161326_update_info90_table', 19),
(43, '2020_01_07_164258_uodate_info_89_table', 20),
(44, '2020_02_07_172558_create_gestion3_table', 21),
(45, '2020_02_10_145408_update_gestion3_table', 21),
(46, '2020_02_13_207873_update_roles_table', 22),
(47, '2021_02_13_207873_update_roles1_table', 23),
(48, '2020_03_16_190646_update_info88_table', 24),
(49, '2020_06_08_125607_update_industrial5_table', 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles`
--

CREATE TABLE `niveles` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `niveles`
--

INSERT INTO `niveles` (`id`, `nombre`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Nivel 1', 'nivel-1', '2019-11-27 19:30:03', '2019-11-27 19:30:03'),
(2, 'Nivel 2', 'nivel-2', '2019-11-27 19:30:11', '2019-11-27 19:30:11'),
(3, 'Nivel 3', 'nivel-3', '2019-11-27 19:30:21', '2019-11-27 19:30:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prod_indus`
--

CREATE TABLE `prod_indus` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagenListado` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagenFondo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagenBeneficios` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcat_indus_id` int(10) UNSIGNED DEFAULT NULL,
  `etiqueta_indus_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imagenFondoMobile` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `check_exportacion` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prod_indus`
--

INSERT INTO `prod_indus` (`id`, `imagenListado`, `imagenFondo`, `imagenBeneficios`, `subcat_indus_id`, `etiqueta_indus_id`, `created_at`, `updated_at`, `imagenFondoMobile`, `check_exportacion`) VALUES
(2, '/uploads/shares/industrial/listado-deli1.png', '/uploads/shares/industrial/Grupo_3-1.jpg', '/uploads/shares/industrial/586x549-min.png', 3, 1, '2019-11-22 00:22:45', '2020-08-13 03:45:20', '/uploads/shares/producto/fondo-producto.jpg', 0),
(3, '/uploads/shares/industrial/listado-deli3.png', '/uploads/shares/industrial/fondo1.jpg', '/uploads/shares/industrial/586x549-una_gato-min.png', 1, 1, '2019-11-22 01:16:39', '2020-08-31 20:05:42', '/uploads/shares/producto/fondo-producto.jpg', 0),
(4, '/uploads/shares/industrial/listado-deli4.png', '/uploads/shares/industrial/Grupo_4.jpg', '/uploads/shares/industrial/586x549-menta-min.png', 1, 1, '2019-11-22 01:21:08', '2020-08-31 20:06:56', '/uploads/shares/producto/fondo-producto.jpg', 0),
(5, '/uploads/shares/industrial/listado-deli5.png', '/uploads/shares/industrial/Grupo_5.jpg', '/uploads/shares/industrial/586x549-Cocalyptuss-min.png', 1, 1, '2019-11-22 01:24:03', '2020-08-31 20:03:40', '/uploads/shares/producto/fondo-producto.jpg', 0),
(6, '/uploads/shares/industrial/listado-kintu1.png', '/uploads/shares/industrial/KINTU.jpg', '/uploads/shares/industrial/tea6.png', 2, 4, '2019-11-22 01:26:47', '2020-06-09 05:22:15', '/uploads/shares/producto/fondo-producto.jpg', 1),
(7, '/uploads/shares/industrial/listado-kintu2.png', '/uploads/shares/industrial/1574462577Grupo_7.jpg', '/uploads/shares/industrial/tea5.png', 2, 4, '2019-11-22 01:30:15', '2020-06-09 05:22:39', '/uploads/shares/producto/fondo-producto.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prod_indus_relacionado`
--

CREATE TABLE `prod_indus_relacionado` (
  `id` int(10) UNSIGNED NOT NULL,
  `prod_indus_id` int(10) UNSIGNED NOT NULL,
  `rel_indus_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prod_indus_relacionado`
--

INSERT INTO `prod_indus_relacionado` (`id`, `prod_indus_id`, `rel_indus_id`, `created_at`, `updated_at`) VALUES
(4, 3, 2, NULL, NULL),
(6, 4, 2, NULL, NULL),
(7, 4, 3, NULL, NULL),
(8, 5, 2, NULL, NULL),
(9, 5, 3, NULL, NULL),
(10, 5, 4, NULL, NULL),
(11, 6, 2, NULL, NULL),
(12, 6, 3, NULL, NULL),
(13, 7, 2, NULL, NULL),
(14, 7, 4, NULL, NULL),
(15, 7, 6, NULL, NULL),
(16, 2, 3, NULL, NULL),
(17, 2, 4, NULL, NULL),
(18, 2, 5, NULL, NULL),
(19, 3, 3, NULL, NULL),
(20, 3, 5, NULL, NULL),
(21, 4, 4, NULL, NULL),
(22, 6, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prod_indus_translations`
--

CREATE TABLE `prod_indus_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `arrayPresentaciones` text COLLATE utf8mb4_unicode_ci,
  `fichaPDF` text COLLATE utf8mb4_unicode_ci,
  `arrayBeneficios` text COLLATE utf8mb4_unicode_ci,
  `tituloRelacionados` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_indus_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prod_indus_translations`
--

INSERT INTO `prod_indus_translations` (`id`, `nombre`, `slug`, `des`, `arrayPresentaciones`, `fichaPDF`, `arrayBeneficios`, `tituloRelacionados`, `prod_indus_id`, `locale`, `created_at`, `updated_at`) VALUES
(3, 'Infusión de Hoja de Coca', 'infusion-de-hoja-de-coca', '<p>La infusi&oacute;n de Hoja de coca es una bebida milenaria, elaborada con hojas naturales que nos aporta energ&iacute;a y es buen&iacute;sima para limpiar el h&iacute;gado y s&uacute;per digestiva.&nbsp;&iexcl;Libre de colorantes y preservantes!</p>', '[{\"texto1A\":\"Caja 25 Filtrantes\",\"img1A\":\"\\/uploads\\/shares\\/industrial\\/deli1.png\",\"img2A\":null,\"img3A\":null},{\"texto1A\":\"Caja 100 Filtrantes\",\"img1A\":\"\\/uploads\\/shares\\/industrial\\/deli2.png\",\"img2A\":null,\"img3A\":null}]', NULL, '[{\"txt1A\":\"01\",\"txt2A\":\"Energizante natural\"},{\"txt1A\":\"02\",\"txt2A\":\"Digestiva.\"},{\"txt1A\":\"03\",\"txt2A\":\"Previene el mal de altura.\"}]', 'Tenemos otros sabores', 2, 'es', '2019-11-22 00:22:45', '2020-06-05 09:06:20'),
(4, 'Mate de Coca', 'mate-de-coca', '<p>Producto ideal para enriquecer alimentos (Coca energizante natural), puede ser usado de manera directa con jugos, yogurt, sopas&nbsp; y otros.</p>', NULL, '/uploads/shares/TEST_ENACO.pdf', NULL, 'Otros tipos de sabores', 2, 'en', '2019-11-22 00:22:45', '2019-11-22 00:22:45'),
(5, 'Uña de gato con hoja de coca', 'una-de-gato-con-hoja-de-coca', '<p>Una perfecta combinaci&oacute;n, la u&ntilde;a de gato una potente planta de la amazonia peruana; que mezclada con hojas de coca hacen potenciar sus propiedades.&nbsp;&iexcl;Libre de colorantes y preservantes!</p>', '[{\"texto1A\":\"Caja 25 filtrantes\",\"img1A\":\"\\/uploads\\/shares\\/industrial\\/deli3.png\",\"img2A\":null,\"img3A\":null}]', NULL, '[{\"txt1A\":\"01\",\"txt2A\":\"Anti-iflamatorio natural.\"},{\"txt1A\":\"02\",\"txt2A\":\"Digestiva y diur\\u00e9tico.\"},{\"txt1A\":\"03\",\"txt2A\":\"Estimula y refuerza el sistema inmunol\\u00f3gico.\"}]', 'Tenemos otros sabores', 3, 'es', '2019-11-22 01:16:39', '2020-06-05 04:52:26'),
(6, 'Uña de gato', 'una-de-gato', '<p>Producto ideal para enriquecer alimentos (Coca energizante natural), puede ser usado de manera directa con jugos, yogurt, sopas&nbsp; y otros.</p>', '[{\"texto1A\":\"Caja 25 filtrantes\",\"img1A\":\"\\/uploads\\/shares\\/industrial\\/deli3.png\",\"img2A\":null,\"img3A\":null}]', NULL, '[{\"txt1A\":\"01\",\"txt2A\":\"facilita la oxigenaci\\u00f3n del oprganismo por lo que es usado para curar el \\u201cMal de altura\\u201d\"},{\"txt1A\":\"02\",\"txt2A\":\"Diet\\u00e9tico, bajo un regimen de alimentaci\\u00f3n saludable\"},{\"txt1A\":\"03\",\"txt2A\":\"Contiene minerales como calcio, f\\u00f3sforo, hierro, sodio, potasio.\"}]', 'Otros tipos de coca', 3, 'en', '2019-11-22 01:16:39', '2019-11-22 01:16:39'),
(7, 'Menta y Hoja de Coca', 'menta-y-hoja-de-coca', '<p>Una combinaci&oacute;n agradable de hojas de coca y menta andina, plantas peruanas que en conjunto aumentan sus propiedades naturales adquiriendo tambi&eacute;n un agradable sabor.</p>\r\n\r\n<p>&iexcl;Libre de colorantes y preservantes!</p>', '[{\"texto1A\":\"Caja 25 filtrantes\",\"img1A\":\"\\/uploads\\/shares\\/industrial\\/deli4.png\",\"img2A\":null,\"img3A\":null}]', NULL, '[{\"txt1A\":\"01\",\"txt2A\":\"Relajante y refrescante natural.\"},{\"txt1A\":\"02\",\"txt2A\":\"Alivia el malestar estomacal (flatulencias)\"},{\"txt1A\":\"03\",\"txt2A\":\"Alivia el mal de altura.\"}]', 'Tenemos otros sabores', 4, 'es', '2019-11-22 01:21:08', '2020-06-06 00:47:11'),
(8, 'Hoja de coca con menta', 'hoja-de-coca-con-menta', '<p>Producto ideal para enriquecer alimentos (Coca energizante natural), puede ser usado de manera directa con jugos, yogurt, sopas&nbsp; y otros.</p>', '[{\"texto1A\":\"Caja 25 filtrantes\",\"img1A\":\"\\/uploads\\/shares\\/industrial\\/deli4.png\",\"img2A\":null,\"img3A\":null}]', NULL, '[{\"txt1A\":\"01\",\"txt2A\":\"facilita la oxigenaci\\u00f3n del oprganismo por lo que es usado para curar el \\u201cMal de altura\\u201d\"},{\"txt1A\":\"02\",\"txt2A\":\"facilita la oxigenaci\\u00f3n del oprganismo por lo que es usado para curar el \\u201cMal de altura\\u201d\"},{\"txt1A\":\"03\",\"txt2A\":\"facilita la oxigenaci\\u00f3n del oprganismo por lo que es usado para curar el \\u201cMal de altura\\u201d\"}]', 'Otros tipos de coca', 4, 'en', '2019-11-22 01:21:08', '2019-11-22 01:21:08'),
(9, 'Cocalyptuss', 'cocalyptuss', '<p>Mezcla de potentes plantas andinas, usadas tradicionalmente para combatir los problemas respiratorios.</p>\r\n\r\n<p>&iexcl;Libre de colorantes y preservantes!</p>', '[{\"texto1A\":\"Caja 25 filtrantes\",\"img1A\":\"\\/uploads\\/shares\\/industrial\\/deli5.png\",\"img2A\":null,\"img3A\":null}]', NULL, '[{\"txt1A\":\"01\",\"txt2A\":\"Alivia los s\\u00edntomas de la gripe y el resfr\\u00edo.\"},{\"txt1A\":\"02\",\"txt2A\":\"Previene el malestar estomacal.\"},{\"txt1A\":\"03\",\"txt2A\":\"Acci\\u00f3n carminativa.\"}]', 'Tenemos otros sabores', 5, 'es', '2019-11-22 01:24:03', '2020-06-09 03:59:03'),
(10, 'Hoja de coca con Eucalipto y Menta', 'hoja-de-coca-con-eucalipto-y-menta', '<p>Producto ideal para enriquecer alimentos (Coca energizante natural), puede ser usado de manera directa con jugos, yogurt, sopas&nbsp; y otros.</p>', '[{\"texto1A\":\"Caja 25 filtrantes\",\"img1A\":\"\\/uploads\\/shares\\/industrial\\/deli5.png\",\"img2A\":null,\"img3A\":null}]', NULL, '[{\"txt1A\":\"01\",\"txt2A\":\"facilita la oxigenaci\\u00f3n del oprganismo por lo que es usado para curar el \\u201cMal de altura\\u201d\"},{\"txt1A\":\"02\",\"txt2A\":\"facilita la oxigenaci\\u00f3n del oprganismo por lo que es usado para curar el \\u201cMal de altura\\u201d\"},{\"txt1A\":\"03\",\"txt2A\":\"facilita la oxigenaci\\u00f3n del oprganismo por lo que es usado para curar el \\u201cMal de altura\\u201d\"}]', 'Otros tipos de coca', 5, 'en', '2019-11-22 01:24:03', '2019-11-22 01:24:03'),
(11, 'Kintu Aromático', 'kintu-aromatico', '<p>Bebida alcoh&oacute;lica obtenida por destilaci&oacute;n de la hoja de coca, con 40&deg; GL alcoh&oacute;lico. Ideal como bajativo o cocteler&iacute;a.</p>', '[{\"texto1A\":\"Botella 500 ml\",\"img1A\":\"\\/uploads\\/shares\\/industrial\\/kintu1.png\",\"img2A\":null,\"img3A\":null}]', NULL, '[{\"txt1A\":\"1\",\"txt2A\":\"Ideal para una buena digesti\\u00f3n y sentirse bien\"}]', 'Tenemos otros sabores', 6, 'es', '2019-11-22 01:26:47', '2020-06-18 04:41:59'),
(12, 'Kintu Aromático', 'kintu-aromatico', '<p>Producto ideal para enriquecer alimentos (Coca energizante natural), puede ser usado de manera directa con jugos, yogurt, sopas&nbsp; y otros.</p>', '[{\"texto1A\":\"Botella 500 ml\",\"img1A\":\"\\/uploads\\/shares\\/industrial\\/kintu1.png\",\"img2A\":null,\"img3A\":null}]', NULL, '[{\"txt1A\":\"01\",\"txt2A\":\"facilita la oxigenaci\\u00f3n del oprganismo por lo que es usado para curar el \\u201cMal de altura\\u201d\"},{\"txt1A\":\"02\",\"txt2A\":\"facilita la oxigenaci\\u00f3n del oprganismo por lo que es usado para curar el \\u201cMal de altura\\u201d\"},{\"txt1A\":\"03\",\"txt2A\":\"facilita la oxigenaci\\u00f3n del oprganismo por lo que es usado para curar el \\u201cMal de altura\\u201d\"}]', 'Otros tipos de coca', 6, 'en', '2019-11-22 01:26:47', '2019-11-22 01:38:41'),
(13, 'Kintu tradicional', 'kintu-tradicional', '<p>Bebida obtenida por destilaci&oacute;n al vac&iacute;o del extracto de Hoja de Coca. De agradable sabor y aroma. Contiene grado alcoholico de 40&ordm;gl</p>', '[{\"texto1A\":\"Botella 500 ml\",\"img1A\":\"\\/uploads\\/shares\\/industrial\\/kintu2.png\",\"img2A\":null,\"img3A\":null}]', NULL, '[{\"txt1A\":\"01\",\"txt2A\":\"Agradable sabror.\"},{\"txt1A\":\"02\",\"txt2A\":\"Facilita la digesti\\u00f3n.\"},{\"txt1A\":\"03\",\"txt2A\":\"Libre de preservantes y alcaloides.\"}]', 'Tenemos otros sabores', 7, 'es', '2019-11-22 01:30:15', '2020-03-03 19:59:33'),
(14, 'Kintu tradicional', 'kintu-tradicional', '<p>Producto ideal para enriquecer alimentos (Coca energizante natural), puede ser usado de manera directa con jugos, yogurt, sopas&nbsp; y otros.</p>', '[{\"texto1A\":\"Botella 500 ml\",\"img1A\":\"\\/uploads\\/shares\\/industrial\\/kintu2.png\",\"img2A\":null,\"img3A\":null}]', NULL, '[{\"txt1A\":\"01\",\"txt2A\":\"facilita la oxigenaci\\u00f3n del oprganismo por lo que es usado para curar el \\u201cMal de altura\\u201d\"},{\"txt1A\":\"02\",\"txt2A\":\"facilita la oxigenaci\\u00f3n del oprganismo por lo que es usado para curar el \\u201cMal de altura\\u201d\"},{\"txt1A\":\"03\",\"txt2A\":\"facilita la oxigenaci\\u00f3n del oprganismo por lo que es usado para curar el \\u201cMal de altura\\u201d\"}]', 'Otros tipos de coca', 7, 'en', '2019-11-22 01:30:15', '2019-11-22 01:39:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prod_tradi`
--

CREATE TABLE `prod_tradi` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagenListado` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `etiqueta_tradi_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prod_tradi`
--

INSERT INTO `prod_tradi` (`id`, `imagenListado`, `etiqueta_tradi_id`, `created_at`, `updated_at`) VALUES
(1, '/uploads/shares/tradicional/Tipo Cusco/Tipo_Cusco.png', 1, '2019-11-15 07:50:23', '2019-11-21 18:23:16'),
(2, '/uploads/shares/tradicional/Tipo Tupac/Tipo_Tupac_o_Truxillense.png', 1, '2019-11-20 18:22:23', '2019-11-20 18:22:23'),
(3, '/uploads/shares/tradicional/Tipo tingo/Tipo_Tingo.png', 1, '2019-11-20 19:26:48', '2019-11-20 19:26:48'),
(4, '/uploads/shares/tradicional/Tipo huanta/Tipo_Huanta.png', 1, '2019-11-20 19:41:35', '2019-11-20 19:41:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prod_tradi_relacionado`
--

CREATE TABLE `prod_tradi_relacionado` (
  `id` int(10) UNSIGNED NOT NULL,
  `prod_tradi_id` int(10) UNSIGNED NOT NULL,
  `rel_tradi_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prod_tradi_relacionado`
--

INSERT INTO `prod_tradi_relacionado` (`id`, `prod_tradi_id`, `rel_tradi_id`, `created_at`, `updated_at`) VALUES
(2, 2, 1, NULL, NULL),
(3, 3, 2, NULL, NULL),
(4, 1, 2, NULL, NULL),
(9, 1, 4, NULL, NULL),
(11, 2, 3, NULL, NULL),
(12, 3, 1, NULL, NULL),
(13, 3, 4, NULL, NULL),
(14, 1, 3, NULL, NULL),
(15, 2, 4, NULL, NULL),
(16, 4, 1, NULL, NULL),
(17, 4, 2, NULL, NULL),
(18, 4, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prod_tradi_translations`
--

CREATE TABLE `prod_tradi_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `zonaVenta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `array` text COLLATE utf8mb4_unicode_ci,
  `tituloRelacionados` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_tradi_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `documento` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prod_tradi_translations`
--

INSERT INTO `prod_tradi_translations` (`id`, `nombre`, `slug`, `des`, `zonaVenta`, `array`, `tituloRelacionados`, `prod_tradi_id`, `locale`, `created_at`, `updated_at`, `documento`) VALUES
(1, 'Tipo Cusco', 'tipo-cusco', '<p>Hoja de Coca cuya producci&oacute;n proviene de las provincias de La Convernci&oacute;n, Calca y Paucartambo; Regi&oacute;n de cusco, por el volumen de captaci&oacute;n es la hoja que se comercializa en mayor porcentaje a nivel nacional. Tiene buena consistencia en referencia a los otros tipos de Hoja de Coca y de sabor agradable, preferentemente se consume en las regiones de Cusco, Arequipa, Puno, Junin y Ancash. Por sus caracter&iacute;sticas orgonnol&eacute;pticas las hojas de coca que provienen de los Distritos de Yanatile y Kcos&ntilde;ipata son las m&aacute;s preferidas en todas las zonas de consumo tradicional.</p>', 'Agen. Juliaca / Agen. Cusco / Agen. Trujillo / Suc. Lima / Suc. Huancayo', '[{\"texto1A\":\"Industrial\",\"img1A\":\"\\/uploads\\/shares\\/tradicional\\/Tipo Cusco\\/Tipo_Cusco-detalle.png\",\"img2A\":null,\"img3A\":null},{\"texto1A\":\"Inca\",\"img1A\":\"\\/uploads\\/shares\\/tradicional\\/Tipo Cusco\\/CUSCO-INKA.png\",\"img2A\":null,\"img3A\":null},{\"texto1A\":\"Primera\",\"img1A\":\"\\/uploads\\/shares\\/tradicional\\/Tipo Cusco\\/CUSCO-PRIMERA.png\",\"img2A\":null,\"img3A\":null}]', 'Otros tipos de coca', 1, 'es', '2019-11-15 07:50:23', '2020-03-03 19:56:43', '/uploads/shares/tradicional/Requisitos_para_Comerciante.pdf'),
(2, 'Tipo Cusco', 'tipo-cusco', '<p>Hoja de coca cuya producci&oacute;n proviene de las provincias de La Convernci&oacute;n, Calca y Paucartambo; Regi&oacute;n de cusco, por el volumen de captaci&oacute;n es la hoja que se comercializa en mayor porcentaje a nivel nacional. Tiene buena consistencia en referencia a los otros tipos de hoja de coca y de sabor agradable, preferentemente se consume en las regiones de Cusco, Arequipa, Puno, Junin y Ancash. Por sus caracter&iacute;sticas orgonnol&eacute;pticas las hojas de coca que provienen de los Distritos de Yanatile y Kcos&ntilde;ipata son las m&aacute;s preferidas en todas las zonas de consumo tradicional.</p>', 'Agen. Juliaca / Agen. Cusco / Agen. Trujillo / Suc. Lima / Suc. Huancayo', '[{\"texto1A\":\"Presentaci\\u00f3n 1\",\"img1A\":\"\\/uploads\\/shares\\/tradicional\\/b16-bitmap.png\",\"img2A\":\"\\/uploads\\/shares\\/tradicional\\/b16-bitmap.png\",\"img3A\":\"\\/uploads\\/shares\\/tradicional\\/b16-bitmap.png\"}]', 'Otros tipos de coca', 1, 'en', '2019-11-15 07:50:23', '2019-11-26 00:40:11', NULL),
(3, 'Tipo Tupac o Truxillense', 'tipo-tupac-o-truxillense', '<p>Hoja peque&ntilde;a, de intenso color, esta es una variedad dulce que los Incas prefer&iacute;an y llamaban tupac - coca o coca noble por su sabor agradable y caracter&iacute;stico debido a su alto contenido de aceite de gualter&iacute;a y otros compuestos saborizantes. Es cultivada en la costa norte del pa&iacute;s, y su consumo se circunscribe exclusivamente a dicha zona, la producci&oacute;n es relativamente m&iacute;nima.</p>', 'Agen. Juliaca', '[{\"texto1A\":\"Inca\",\"img1A\":\"\\/uploads\\/shares\\/tradicional\\/Tipo Tupac\\/Tipo_Tupac_o_Truxillense-detalle.png\",\"img2A\":null,\"img3A\":null},{\"texto1A\":\"Industrial\",\"img1A\":\"\\/uploads\\/shares\\/tradicional\\/Tipo Tupac\\/TUPAC-INDUSTRIAL.png\",\"img2A\":null,\"img3A\":null}]', 'Otros tipos de coca', 2, 'es', '2019-11-20 18:22:23', '2020-01-03 15:02:19', '/uploads/shares/tradicional/Requisitos_para_Comerciante.pdf'),
(4, 'Tipo Tupac o Truxillense', 'tipo-tupac-o-truxillense', '<p>Hoja peque&ntilde;a, de intenso color, esta es una variedad dulce que los Incas prefer&iacute;an y llamaban tupac - coca o coca noble por su sabor agradable y caracter&iacute;stico debido a su alto contenido de aceite de gualter&iacute;a y otros compuestos saborizantes. Es cultivada en la costa norte del pa&iacute;s, y su consumo se circunscribe exclusivamente a dicha zona, la producci&oacute;n es relativamente m&iacute;nima.</p>', 'Agen. Juliaca / Agen. Cusco / Agen. Trujillo / Suc. Lima / Suc. Huancayo', NULL, 'Otros tipos de coca', 2, 'en', '2019-11-20 18:22:23', '2019-11-20 18:22:23', NULL),
(5, 'Tipo Tingo', 'tipo-tingo', '<p>Hoja de mayor tama&ntilde;o, de un color verde intenso y fuerte consistencia, es ampliamente cultivada en los h&uacute;medos valles tropicales de las faldas occidentales de los Andes y que pertenece a la Regi&oacute;n Huanuco, posee mayor cantidad de alcaloides y es la hoja que re&uacute;ne mayores condiciones organol&eacute;pticas (sabor, olor, color y consistencia). Su consumo tradicional se extiende a las Regiones de Huanuco, Junin y Lima</p>', 'Agen. Ayacucho / Suc. Lima / Suc. Huancayo', '[{\"texto1A\":\"Industrial\",\"img1A\":\"\\/uploads\\/shares\\/tradicional\\/Tipo tingo\\/Tipo_Tingo-detalle.png\",\"img2A\":null,\"img3A\":null},{\"texto1A\":\"Inca\",\"img1A\":\"\\/uploads\\/shares\\/tradicional\\/Tipo tingo\\/TINGO-INKA.png\",\"img2A\":null,\"img3A\":null},{\"texto1A\":\"Primera\",\"img1A\":\"\\/uploads\\/shares\\/tradicional\\/Tipo tingo\\/TINGO-PRIMERA.png\",\"img2A\":null,\"img3A\":null}]', 'Otros tipos de coca', 3, 'es', '2019-11-20 19:26:48', '2020-01-03 15:02:38', '/uploads/shares/tradicional/Requisitos_para_Comerciante.pdf'),
(6, 'Tipo Tingo', 'tipo-tingo', '<p>Hoja de mayor tama&ntilde;o, de un color verde intenso y fuerte consistencia, es ampliamente cultivada en los h&uacute;medos valles tropicales de las faldas occidentales de los Andes y que pertenece a la Regi&oacute;n Huanuco, posee mayor cantidad de alcaloides y es la hoja que re&uacute;ne mayores condiciones organol&eacute;pticas (sabor, olor, color y consistencia). Su consumo tradicional se extiende a las Regiones de Huanuco, Junin y Lima</p>', 'Agen. Juliaca / Agen. Cusco / Agen. Trujillo / Suc. Lima / Suc. Huancayo', '[{\"texto1A\":\"Industrial\",\"img1A\":null,\"img2A\":\"\\/uploads\\/shares\\/tradicional\\/Tipo tingo\\/Tipo_Tingo-detalle.png\",\"img3A\":null}]', 'Otros tipos de coca', 3, 'en', '2019-11-20 19:26:48', '2019-11-20 19:26:48', NULL),
(7, 'Tipo Huanta', 'tipo-huanta', '<p>Este tipo de hoja producto en la Regi&oacute;n Ayacucho, de color verde p&aacute;lido, delgado y fr&aacute;gil consistencia, por sus caracter&iacute;sticas el tiempo de almacenaje debe ser corto. El consumo tradicional se circunscribe a las Regiones de Ayacucho y Junin. Parte de su producci&oacute;n se deriva para fines de exportaci&oacute;n.</p>', 'Agen. Ayacucho / Suc. Lima / Suc. Huancayo', '[{\"texto1A\":\"Industrial\",\"img1A\":\"\\/uploads\\/shares\\/tradicional\\/Tipo huanta\\/Tipo_Huanta-detalle.png\",\"img2A\":null,\"img3A\":null},{\"texto1A\":\"Inca\",\"img1A\":\"\\/uploads\\/shares\\/tradicional\\/Tipo huanta\\/HUANTA-INKA.png\",\"img2A\":null,\"img3A\":null}]', 'Otros tipos de coca', 4, 'es', '2019-11-20 19:41:35', '2020-01-03 15:02:56', '/uploads/shares/tradicional/Requisitos_para_Comerciante.pdf'),
(8, 'Tipo Huanta', 'tipo-huanta', '<p>Este tipo de hoja producto en la Regi&oacute;n Ayacucho, de color verde p&aacute;lido, delgado y fr&aacute;gil consistencia, por sus caracter&iacute;sticas el tiempo de almacenaje debe ser corto. El consumo tradicional se circunscribe a las Regiones de Ayacucho y Junin. Parte de su producci&oacute;n se deriva para fines de exportaci&oacute;n.</p>', 'Agen. Juliaca / Agen. Cusco / Agen. Trujillo / Suc. Lima / Suc. Huancayo', '[{\"texto1A\":\"Industrial\",\"img1A\":\"\\/uploads\\/shares\\/tradicional\\/Tipo huanta\\/Tipo_Huanta-detalle.png\",\"img2A\":null,\"img3A\":null},{\"texto1A\":\"Inka\",\"img1A\":\"\\/uploads\\/shares\\/tradicional\\/Tipo huanta\\/HUANTA-INKA.png\",\"img2A\":null,\"img3A\":null}]', 'Otros tipos de coca', 4, 'en', '2019-11-20 19:41:35', '2019-11-26 00:35:35', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redirections`
--

CREATE TABLE `redirections` (
  `id` int(10) UNSIGNED NOT NULL,
  `old_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `new_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permiso` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `code`, `created_at`, `updated_at`, `permiso`) VALUES
(1, 'SUPER_ADMIN', 'super_admin', 1, NULL, NULL, '{\"info\":1,\"banner\":1,\"home\":1,\"sede\":1,\"nosotros\":1,\"tradicional\":1,\"industrial\":1,\"gestion\":1,\"bolsas\":1,\"contactos\":1,\"selectores\":1}'),
(2, 'ADMIN', 'admin', 2, NULL, NULL, '{\"info\":1,\"banner\":1,\"home\":1,\"sede\":1,\"nosotros\":1,\"tradicional\":1,\"industrial\":1,\"gestion\":1,\"bolsas\":1,\"contactos\":1,\"selectores\":1}'),
(3, 'RRHH', 'rrhh', NULL, '2020-06-04 04:29:53', '2020-06-04 04:30:23', '{\"info\":0,\"banner\":0,\"home\":0,\"sede\":0,\"nosotros\":0,\"tradicional\":0,\"industrial\":0,\"gestion\":0,\"bolsas\":1,\"contactos\":0,\"selectores\":0}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede`
--

CREATE TABLE `sede` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagenMapa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sede`
--

INSERT INTO `sede` (`id`, `imagenMapa`, `created_at`, `updated_at`) VALUES
(1, '/uploads/shares/Sedes/fsdf.png', '2019-11-15 23:40:36', '2019-11-21 01:43:33'),
(2, '/uploads/shares/Sedes/lima-test.png', '2019-11-21 02:02:50', '2020-02-25 23:30:34'),
(3, '/uploads/shares/Sedes/la_libertad.png', '2019-11-21 15:36:50', '2019-11-21 17:31:39'),
(4, '/uploads/shares/Sedes/ayacucho.png', '2019-11-21 15:56:43', '2019-11-21 17:32:27'),
(5, '/uploads/shares/Sedes/cusco.png', '2019-11-21 16:08:07', '2019-11-21 17:32:44'),
(6, '/uploads/shares/Sedes/puno.png', '2019-11-21 16:38:37', '2019-11-21 17:33:37'),
(7, '/uploads/shares/Sedes/cusco.png', '2019-11-21 17:03:48', '2019-11-21 17:32:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede_denuncia`
--

CREATE TABLE `sede_denuncia` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sede_denuncia`
--

INSERT INTO `sede_denuncia` (`id`, `created_at`, `updated_at`) VALUES
(1, '2019-11-23 01:39:13', '2019-11-23 01:39:13'),
(2, '2019-11-23 01:39:23', '2019-11-23 01:39:23'),
(3, '2019-11-23 01:39:30', '2019-11-23 01:39:30'),
(4, '2019-11-23 01:39:38', '2019-11-23 01:39:38'),
(5, '2019-11-23 01:39:46', '2019-11-23 01:39:46'),
(6, '2019-11-23 01:39:52', '2019-11-23 01:39:52'),
(7, '2019-11-23 01:40:01', '2019-11-23 01:40:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede_denuncia_translations`
--

CREATE TABLE `sede_denuncia_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sede_denuncia_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sede_denuncia_translations`
--

INSERT INTO `sede_denuncia_translations` (`id`, `nombre`, `sede_denuncia_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'Cusco', 1, 'es', '2019-11-23 01:39:13', '2019-11-23 01:39:13'),
(2, 'Cusco', 1, 'en', '2019-11-23 01:39:13', '2019-11-23 01:39:13'),
(3, 'Quillabamba', 2, 'es', '2019-11-23 01:39:23', '2019-11-23 01:39:23'),
(4, 'Quillabamba', 2, 'en', '2019-11-23 01:39:23', '2019-11-23 01:39:23'),
(5, 'Juliaca', 3, 'es', '2019-11-23 01:39:30', '2019-11-23 01:39:30'),
(6, 'Juliaca', 3, 'en', '2019-11-23 01:39:30', '2019-11-23 01:39:30'),
(7, 'Huancayo', 4, 'es', '2019-11-23 01:39:38', '2019-11-23 01:39:38'),
(8, 'Huancayo', 4, 'en', '2019-11-23 01:39:38', '2019-11-23 01:39:38'),
(9, 'Trujillo', 5, 'es', '2019-11-23 01:39:46', '2019-11-23 01:39:46'),
(10, 'Trujillo', 5, 'en', '2019-11-23 01:39:46', '2019-11-23 01:39:46'),
(11, 'Lima', 6, 'es', '2019-11-23 01:39:52', '2019-11-23 01:39:52'),
(12, 'Lima', 6, 'en', '2019-11-23 01:39:52', '2019-11-23 01:39:52'),
(13, 'Ayacucho', 7, 'es', '2019-11-23 01:40:01', '2019-11-23 01:40:01'),
(14, 'Ayacucho', 7, 'en', '2019-11-23 01:40:01', '2019-11-23 01:40:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sede_translations`
--

CREATE TABLE `sede_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arraySucursal` text COLLATE utf8mb4_unicode_ci,
  `arrayAgencia` text COLLATE utf8mb4_unicode_ci,
  `arrayUnidad` text COLLATE utf8mb4_unicode_ci,
  `sede_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sede_translations`
--

INSERT INTO `sede_translations` (`id`, `nombre`, `slug`, `arraySucursal`, `arrayAgencia`, `arrayUnidad`, `sede_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'Junin', 'junin', '[{\"txt1A\":\"Sucursal Huancayo\",\"txt2A\":\"(Huancayo)\",\"txt3A\":\"Jr. Santiago Norero N\\u00ba 430 El Tambo\",\"txt4A\":\"(064) 253233 \\/ 954175041\",\"txt5A\":\"ventas@enaco.com.pe\",\"txt6A\":\"https:\\/\\/www.google.com\\/maps\\/place\\/12%C2%B003\'26.7%22S+75%C2%B012\'58.7%22W\\/@-12.0574083,-75.2184897,17z\\/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d-12.0574083!4d-75.216301?hl=es\"}]', NULL, '[{\"tx1A\":\"Unidad Operativa Aucayacu\",\"tx2A\":\"(Huancayo)\",\"tx3A\":\"Jr. Maria Parado de Bellido N\\u00b0 656\",\"tx4A\":\"(062) 488103\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Huanuco\",\"tx2A\":\"(Huancayo)\",\"tx3A\":\"Jr. Damaso Beraum 272\",\"tx4A\":\"(062) 511274 \\/ 962330358\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Monzon\",\"tx2A\":\"(Huancayo)\",\"tx3A\":\"Jr. Santo Toribio N\\u00ba430\",\"tx4A\":\"062-564734 \\/ 980575101\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa San Ram\\u00f3n\",\"tx2A\":\"(Huancayo)\",\"tx3A\":\"Av. Juan Santos Atahualpa 302 Urb. Tambo el Sol\",\"tx4A\":\"(064) 331156 \\/ 989240386\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Tingo Mar\\u00eda\",\"tx2A\":\"(Huancayo)\",\"tx3A\":\"Av. 28 de Julio 332\",\"tx4A\":\"(062) 562235 \\/ (062) 562235\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Tarma\",\"tx2A\":\"(Junin - Tarma)\",\"tx3A\":\"Jr. Amazonas 1260\",\"tx4A\":\"989240386 \\/ (064) 321714\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Llochehua\",\"tx2A\":\"(Ayacucho-Llochehua)\",\"tx3A\":\"Jr. 28 de Julio S\\/N\",\"tx4A\":\"980575112\",\"tx5A\":null,\"tx6A\":null}]', 1, 'es', '2019-11-15 23:40:36', '2019-12-04 00:24:24'),
(2, 'Junin', 'junin', '[{\"txt1A\":\"Oficina de ventas y administraci\\u00f3n\",\"txt2A\":\"(Junin - Huancayo)\",\"txt3A\":\"Jr. Santiago Norero N\\u00ba 430 El Tambo\",\"txt4A\":\"954175041 \\/ (064) 253233\",\"txt5A\":\"ventas@enaco.com.pe\",\"txt6A\":\"prueba\"}]', '[{\"t1A\":\"Oficina de ventas y administraci\\u00f3n\",\"t2A\":\"(Junin - Huancayo)\",\"t3A\":\"Jr. Santiago Norero N\\u00ba 430 El Tambo\",\"t4A\":\"954175041 \\/ (064) 253233\",\"t5A\":\"ventas@enaco.com.pe\",\"t6A\":\"prueba\"}]', '[{\"tx1A\":\"Oficina de ventas y administraci\\u00f3n\",\"tx2A\":\"(Junin - Huancayo)\",\"tx3A\":\"Jr. Santiago Norero N\\u00ba 430 El Tambo\",\"tx4A\":\"954175041 \\/ (064) 253233\",\"tx5A\":\"ventas@enaco.com.pe\",\"tx6A\":\"prueba\"}]', 1, 'en', '2019-11-15 23:40:36', '2019-11-15 23:40:36'),
(3, 'Lima', 'lima', NULL, '[{\"t1A\":\"Oficina de Ventas y Administraci\\u00f3n\",\"t2A\":\"(Lima - San Miguel)\",\"t3A\":\"Av.Universitaria N\\u00ba602 Urb. Pando San Miguel\",\"t4A\":\"(01) 2637219 \\/ 989223593\",\"t5A\":\"ventas@enaco.com.pe\",\"t6A\":\"https:\\/\\/www.google.com\\/maps\\/place\\/12%C2%B005\'00.4%22S+77%C2%B004\'56.6%22W\\/@-12.0834536,-77.0845639,17z\\/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d-12.0834536!4d-77.0823752?hl=es\"},{\"t1A\":\"Planta de Producci\\u00f3n\",\"t2A\":\"(Lima - Lima)\",\"t3A\":\"Jr. Puno N\\u00ba1823 \\u2013 Cercado\",\"t4A\":\"(01) 3281401 \\/ 989223561\",\"t5A\":null,\"t6A\":null},{\"t1A\":\"Directorio y Gerencia general\",\"t2A\":\"(Lima - Miraflores)\",\"t3A\":\"Av. Arequipa N\\u00ba 4528 \\u2013 Miraflores\",\"t4A\":\"(01) 65-84703 \\/ (01) 65-84704 \\/ 989223556\",\"t5A\":null,\"t6A\":\"https:\\/\\/www.google.com\\/maps\\/place\\/12%C2%B006\'39.1%22S+77%C2%B001\'50.3%22W\\/@-12.1108611,-77.0328276,17z\\/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d-12.1108709!4d-77.0306463?hl=es\"}]', NULL, 2, 'es', '2019-11-21 02:02:50', '2020-03-03 19:54:21'),
(4, 'Lima', 'lima', '[{\"txt1A\":\"Oficina de ventas y administraci\\u00f3n\",\"txt2A\":\"(Lima - San Miguel)\",\"txt3A\":\"Av.Universitaria N\\u00ba602 Urb. Pando San Miguel\",\"txt4A\":\"(01) 2637219\",\"txt5A\":\"ventas@enaco.com.pe\",\"txt6A\":\"prueba\"},{\"txt1A\":\"Planta de Producci\\u00f3n\",\"txt2A\":\"(Lima - Lima)\",\"txt3A\":\"Jr. Puno N\\u00ba1823 \\u2013 Cercado\",\"txt4A\":\"(01) 3281401\",\"txt5A\":null,\"txt6A\":\"prueba\"},{\"txt1A\":null,\"txt2A\":null,\"txt3A\":null,\"txt4A\":null,\"txt5A\":null,\"txt6A\":null}]', NULL, NULL, 2, 'en', '2019-11-21 02:02:50', '2019-11-21 02:02:50'),
(5, 'La Libertad', 'la-libertad', NULL, '[{\"t1A\":\"Agencia Trujillo\",\"t2A\":\"(Trujillo - Trujillo)\",\"t3A\":\"Jr. Los Berilio N\\u00b0 502 -404 Urb. Santa In\\u00e9s\",\"t4A\":\"(044) 208984 \\/ (044) 208984 \\/ (044) 208984\",\"t5A\":null,\"t6A\":\"https:\\/\\/www.google.com\\/maps\\/place\\/8%C2%B005\'55.6%22S+79%C2%B002\'21.4%22W\\/@-8.0987806,-79.0414572,17z\\/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d-8.0987806!4d-79.0392685?hl=es\"}]', '[{\"tx1A\":\"Unidad Operativa Callancas\",\"tx2A\":\"(La Libertad - Otusco)\",\"tx3A\":\"Plaza de Armas S\\/N\",\"tx4A\":\"980576351\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Celendin\",\"tx2A\":\"(Cajamarca - Celendin)\",\"tx3A\":\"Jr. Miguel Grau N\\u00ba 505\",\"tx4A\":\"(076) 555236 \\/ 980575801\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Chachapoyas\",\"tx2A\":\"(Amazonas - Chachapoyas)\",\"tx3A\":\"San Juan de rejo s\\/n\",\"tx4A\":\"(041) 477238 \\/ 949140769\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Huamachuco\",\"tx2A\":\"(La Libertad - Sanchez Carri\\u00f3n)\",\"tx3A\":\"Calle Leoncio Prado N\\u00ba313\",\"tx4A\":\"(044) 441847 \\/ 980576092\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Rancho Grande\",\"tx2A\":\"(La Libertad - Gran Chimu)\",\"tx3A\":\"Calle Principal S\\/N (Comunitario)\",\"tx4A\":\"(044) 840029 \\/ 980576107 \\/\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Distrito Operativo Huaraz\",\"tx2A\":\"(Ancash - Independencia)\",\"tx3A\":\"Jr.Guzman Barron N\\u00ba 616 Dist.Independencia\",\"tx4A\":\"(043) 421161 \\/ 943749034\",\"tx5A\":null,\"tx6A\":null}]', 3, 'es', '2019-11-21 15:36:50', '2019-12-04 00:23:08'),
(6, 'La Libertad', 'la-libertad', NULL, '[{\"t1A\":\"Agencia Trujillo\",\"t2A\":\"(Trujillo - Trujillo)\",\"t3A\":\"Jr. Los Berilios N\\u00ba 502 Santa In\\u00e9s\",\"t4A\":\"(044) 208984 \\/ (044) 208984 \\/ (044) 208984\",\"t5A\":null,\"t6A\":\"prueba\"}]', '[{\"tx1A\":\"Unidad Operativa Callancas\",\"tx2A\":\"(La Libertad - Otusco)\",\"tx3A\":\"Plaza de Armas S\\/N\",\"tx4A\":\"980576351\",\"tx5A\":null,\"tx6A\":\"prueba\"},{\"tx1A\":\"Unidad Operativa Celendin\",\"tx2A\":\"(Cajamarca - Celendin)\",\"tx3A\":\"Jr. Miguel Grau N\\u00ba 505\",\"tx4A\":\"(076) 555236 \\/ 980575801\",\"tx5A\":null,\"tx6A\":\"prueba\"}]', 3, 'en', '2019-11-21 15:36:50', '2019-11-21 15:36:50'),
(7, 'Ayacucho', 'ayacucho', NULL, '[{\"t1A\":\"Agencia Ayacucho\",\"t2A\":\"(Ayacucho - Huamanga)\",\"t3A\":\"Jr. Salazar BondI N\\u00ba 202 Urb. Magisterial\",\"t4A\":\"(066) 312213 \\/ 966358303\",\"t5A\":null,\"t6A\":\"https:\\/\\/www.google.com\\/maps\\/place\\/13%C2%B008\'26.3%22S+74%C2%B013\'39.9%22W\\/@-13.1406463,-74.2299359,17z\\/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d-13.1406463!4d-74.2277472?hl=es\"}]', '[{\"tx1A\":\"Unidad Operativa Huanta\",\"tx2A\":\"(Ayacucho - Huanta)\",\"tx3A\":\"Jr. Libertad N\\u00ba 422\",\"tx4A\":\"(066) 322292 \\/ 980574771\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa San Francisco\",\"tx2A\":\"(Cusco - Pichari)\",\"tx3A\":\"Av. Huanta N\\u00ba 023-025\",\"tx4A\":\"(066) 325087 \\/ 984108740\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Santa Rosa\",\"tx2A\":\"(Ayacucho - Santa Rosa)\",\"tx3A\":\"Jr. Mariscal C\\u00e1ceres S\\/N\",\"tx4A\":\"(066) 790830 \\/ 980574748\",\"tx5A\":null,\"tx6A\":null}]', 4, 'es', '2019-11-21 15:56:43', '2019-12-04 00:22:15'),
(8, 'Ayacucho', 'ayacucho', NULL, '[{\"t1A\":\"Agencia Ayacucho\",\"t2A\":\"(Ayacucho - Huamanga)\",\"t3A\":\"Jr. Salazar BondI N\\u00ba 202 Urb. Magisterial\",\"t4A\":\"(066) 312213 \\/ 966358303\",\"t5A\":null,\"t6A\":\"prueba\"}]', '[{\"tx1A\":\"Unidad Operativa Huanta\",\"tx2A\":\"(Ayacucho - Huanta)\",\"tx3A\":\"Jr. Libertad N\\u00ba 422\",\"tx4A\":\"(066) 322292 \\/ 980574771\",\"tx5A\":null,\"tx6A\":\"prueba\"},{\"tx1A\":\"Unidad Operativa San Francisco\",\"tx2A\":\"(Cusco - Pichari)\",\"tx3A\":\"Av. Huanta N\\u00ba 023-025\",\"tx4A\":\"(066) 325087 \\/ 984108740\",\"tx5A\":null,\"tx6A\":\"prueba\"},{\"tx1A\":\"Unidad Operativa Santa Rosa\",\"tx2A\":\"(Ayacucho - Santa Rosa)\",\"tx3A\":\"Jr. Mariscal C\\u00e1ceres S\\/N\",\"tx4A\":\"(066) 790830 \\/ 980574748\",\"tx5A\":null,\"tx6A\":\"prueba\"}]', 4, 'en', '2019-11-21 15:56:43', '2019-11-21 15:56:43'),
(9, 'Cusco', 'cusco', NULL, '[{\"t1A\":\"Agencia Cusco\",\"t2A\":\"(Cusco - San Sebastian)\",\"t3A\":\"Av. Las flores N\\u00ba103, Distr. San Sebastian, Dpto Cusco\",\"t4A\":\"(084) 582013 \\/ 984108714\",\"t5A\":null,\"t6A\":\"https:\\/\\/www.google.com\\/maps\\/search\\/Enaco+S.A.\\/@-13.5265467,-71.9584156,13.19z?hl=es\"}]', '[{\"tx1A\":\"Unidad Operativa Andahuaylas\",\"tx2A\":\"(Apurimac - Andahuaylas)\",\"tx3A\":\"Av. Per\\u00fa N\\u00ba489\",\"tx4A\":\"(084) 422668 \\/ 956750623\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Kos\\u00f1ipata\",\"tx2A\":\"(Cusco - Pilcopata)\",\"tx3A\":\"Av. Antonio Iwaki- calle Enamorados S\\/N\",\"tx4A\":null,\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Santo Tom\\u00e1s\",\"tx2A\":\"(Cusco - Santo Tom\\u00e1s)\",\"tx3A\":\"Calle Manco Capac N\\u00ba102\",\"tx4A\":\"980574314\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Sicuani\",\"tx2A\":\"(Cusco - Sicuani)\",\"tx3A\":\"Jr. 28 de Julio N\\u00ba 824\",\"tx4A\":\"(084) 351890 \\/ 980573884\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Yauri\",\"tx2A\":\"(Cusco - San Sebastian)\",\"tx3A\":\"Av. Las flores N\\u00ba103, Distr. San Sebastian, Dpto Cusco\",\"tx4A\":\"984108730 \\/ (084) 582013\",\"tx5A\":null,\"tx6A\":null}]', 5, 'es', '2019-11-21 16:08:07', '2019-12-04 00:28:04'),
(10, 'Cusco', 'cusco', NULL, '[{\"t1A\":\"Agencia Cusco\",\"t2A\":\"(Cusco - San Sebastian)\",\"t3A\":\"Av. Las flores N\\u00ba103, Distr. San Sebastian, Dpto Cusco\",\"t4A\":\"(084) 582013 \\/ 984108714\",\"t5A\":null,\"t6A\":\"prueba\"}]', '[{\"tx1A\":\"Unidad Operativa Andahuaylas\",\"tx2A\":\"(Apurimac - Andahuaylas)\",\"tx3A\":\"Av. Per\\u00fa N\\u00ba489\",\"tx4A\":\"(084) 422668 \\/ 956750623\",\"tx5A\":null,\"tx6A\":\"prueba\"},{\"tx1A\":\"Unidad Operativa Kos\\u00f1ipata\",\"tx2A\":\"(Cusco - Pilcopata)\",\"tx3A\":\"Av. Antonio Iwaki- calle Enamorados S\\/N\",\"tx4A\":null,\"tx5A\":null,\"tx6A\":\"prueba\"},{\"tx1A\":\"Unidad Operativa Santo Tom\\u00e1s\",\"tx2A\":\"(Cusco - Santo Tom\\u00e1s)\",\"tx3A\":\"Calle Manco Capac N\\u00ba102\",\"tx4A\":\"980574314\",\"tx5A\":null,\"tx6A\":\"prueba\"},{\"tx1A\":\"Unidad Operativa Sicuani\",\"tx2A\":\"(Cusco - Sicuani)\",\"tx3A\":\"Jr. 28 de Julio N\\u00ba 824\",\"tx4A\":\"(084) 351890 \\/ 980573884\",\"tx5A\":null,\"tx6A\":\"prueba\"},{\"tx1A\":\"Unidad Operativa Yauri\",\"tx2A\":\"(Cusco - San Sebastian)\",\"tx3A\":\"Av. Las flores N\\u00ba103, Distr. San Sebastian, Dpto Cusco\",\"tx4A\":\"984108730 \\/ (084) 582013\",\"tx5A\":null,\"tx6A\":\"prueba\"}]', 5, 'en', '2019-11-21 16:08:07', '2019-11-21 16:08:07'),
(11, 'Puno', 'puno', NULL, '[{\"t1A\":\"Agencia Juliaca\",\"t2A\":\"(Puno - Juliaca)\",\"t3A\":\"Hip\\u00f3lito Unanue N\\u00ba154, La Rinconada\",\"t4A\":\"(051) 321694 \\/ 951290501\",\"t5A\":null,\"t6A\":\"https:\\/\\/www.google.com\\/maps\\/place\\/15%C2%B030\'04.5%22S+70%C2%B007\'57.8%22W\\/@-15.5009728,-70.1341799,17.52z\\/data=!4m6!3m5!1s0!7e2!8m2!3d-15.5012363!4d-70.1327129\"}]', '[{\"tx1A\":\"Unidad Operativa Arequipa\",\"tx2A\":\"(Arequipa - Arequipa)\",\"tx3A\":\"Urb. Las Orquideas V-5-A Cercado\",\"tx4A\":\"(061) 554038 \\/ 980574690\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Ayaviri\",\"tx2A\":\"(Puno - Ayaviri)\",\"tx3A\":\"Arica N\\u00ba479\",\"tx4A\":\"(051) 563173 \\/ 980574619\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Azangaro\",\"tx2A\":\"(Puno - Azangaro)\",\"tx3A\":\"Jr. Cainaca N\\u00ba 131\",\"tx4A\":\"(051) 562047 \\/ 980574643\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Juli\",\"tx2A\":\"(Puno - Juli)\",\"tx3A\":\"Alfonso Ugarte S\\/N.\",\"tx4A\":\"(061) 554038 \\/ 980574690\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Palmera - Sandia\",\"tx2A\":\"(Puno - Alto Inambari)\",\"tx3A\":\"Av. Raymondi n\\u00ba121\",\"tx4A\":\"951290503\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Puno\",\"tx2A\":\"(Puno - Puno)\",\"tx3A\":\"Jr. Melgar N\\u00ba174, Cercado\",\"tx4A\":\"(051) 366053 \\/ 980574726\",\"tx5A\":null,\"tx6A\":null}]', 6, 'es', '2019-11-21 16:38:37', '2019-12-04 00:26:04'),
(12, 'Puno', 'puno', NULL, '[{\"t1A\":\"Agencia Juliaca\",\"t2A\":\"(Puno - Juliaca)\",\"t3A\":\"Hip\\u00f3lito Unanue N\\u00ba154, La Rinconada\",\"t4A\":\"(051) 321694 \\/ 951290501\",\"t5A\":null,\"t6A\":\"prueba\"}]', '[{\"tx1A\":\"Unidad Operativa Arequipa\",\"tx2A\":\"(Arequipa - Arequipa)\",\"tx3A\":\"Urb. Las Orquideas V-5-A Cercado\",\"tx4A\":\"(061) 554038 \\/ 980574690\",\"tx5A\":null,\"tx6A\":\"prueba\"},{\"tx1A\":\"Unidad Operativa Ayaviri\",\"tx2A\":\"(Puno - Ayaviri)\",\"tx3A\":\"Arica N\\u00ba479\",\"tx4A\":\"(051) 563173 \\/ 980574619\",\"tx5A\":null,\"tx6A\":\"prueba\"},{\"tx1A\":\"Unidad Operativa Azangaro\",\"tx2A\":\"(Puno - Azangaro)\",\"tx3A\":\"Jr. Cainaca N\\u00ba 131\",\"tx4A\":\"(051) 562047 \\/ 980574643\",\"tx5A\":null,\"tx6A\":\"prueba\"},{\"tx1A\":\"Unidad Operativa Juli\",\"tx2A\":\"(Puno - Juli)\",\"tx3A\":\"Alfonso Ugarte S\\/N.\",\"tx4A\":\"(061) 554038 \\/ 980574690\",\"tx5A\":null,\"tx6A\":\"prueba\"},{\"tx1A\":\"Unidad Operativa Palmera - Sandia\",\"tx2A\":\"(Puno - Alto Inambari)\",\"tx3A\":\"Av. Raymondi n\\u00ba121\",\"tx4A\":\"951290503\",\"tx5A\":null,\"tx6A\":\"prueba\"},{\"tx1A\":\"Unidad Operativa Puno\",\"tx2A\":\"(Puno - Puno)\",\"tx3A\":\"Jr. Melgar N\\u00ba174, Cercado\",\"tx4A\":\"(051) 366053 \\/ 980574726\",\"tx5A\":null,\"tx6A\":\"prueba\"}]', 6, 'en', '2019-11-21 16:38:37', '2019-11-21 16:38:37'),
(13, 'Quillabamba', 'quillabamba', '[{\"txt1A\":\"Sucursal Quillabamba\",\"txt2A\":\"(Cusco - Santa Ana)\",\"txt3A\":\"Jr. Pavayoc S\\/N\",\"txt4A\":\"(084) 281030 \\/ 984108719\",\"txt5A\":null,\"txt6A\":\"https:\\/\\/www.google.com\\/maps\\/place\\/12%C2%B051\'46.8%22S+72%C2%B041\'13.7%22W\\/@-12.8630013,-72.6893228,17z\\/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d-12.8630013!4d-72.6871341?hl=es\"}]', '[{\"t1A\":\"Agencia Quebrada\",\"t2A\":\"(Cusco - Yanatile)\",\"t3A\":\"Poblado San Ignacio s\\/n\",\"t4A\":\"984108723 \\/ 943689136\",\"t5A\":null,\"t6A\":null}]', '[{\"tx1A\":\"Unidad Operativa Colca\",\"tx2A\":\"(Cusco - Ocobamba)\",\"tx3A\":\"Calle Principal S\\/N\",\"tx4A\":\"951290502 \\/ 980575339\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Echarate\",\"tx2A\":\"(Cusco - Echarate)\",\"tx3A\":\"Calle Principal Puente Echarate\",\"tx4A\":\"980575224 \\/ 958325292\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Kiteni\",\"tx2A\":\"(Cusco - Echarate)\",\"tx3A\":\"Av. Wiesse S\\/N\",\"tx4A\":\"984108725\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Maranura\",\"tx2A\":\"(Cusco - Maranura)\",\"tx3A\":\"Av. La Cultura S\\/N\",\"tx4A\":\"980575260\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Palma Real\",\"tx2A\":\"(Cusco - Echarate)\",\"tx3A\":\"Calle Principal S\\/N\",\"tx4A\":\"980575209\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Putucusi\",\"tx2A\":\"(Cusco - Quellouno)\",\"tx3A\":\"Calle Principal S\\/N\",\"tx4A\":\"980575597 \\/ 980575180\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Quellouno\",\"tx2A\":\"(Cusco - Quellouno)\",\"tx3A\":\"Calle Jos\\u00e9 Olaya S\\/N\",\"tx4A\":\"980575180\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa San Lorenzo\",\"tx2A\":\"(Cusco - Ocobamba)\",\"tx3A\":\"Calle Principal S\\/N\",\"tx4A\":\"980575339 \\/ 951290502\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Santa Mar\\u00eda\",\"tx2A\":\"(Cusco - Maranura)\",\"tx3A\":\"Calle Los Manzanares S\\/N\",\"tx4A\":\"980575187\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Versalles\",\"tx2A\":\"(Cusco - Ocobamba)\",\"tx3A\":\"Calle Principal S\\/N\",\"tx4A\":\"980575553 \\/ 980575339\",\"tx5A\":null,\"tx6A\":null}]', 7, 'es', '2019-11-21 17:03:48', '2019-12-04 00:25:05'),
(14, 'Quillabamba', 'quillabamba', '[{\"txt1A\":\"Sucursal Quillabamba\",\"txt2A\":\"(Cusco - Santa Ana)\",\"txt3A\":\"Jr. Pavayoc S\\/N\",\"txt4A\":\"(084) 281030 \\/ 984108719\",\"txt5A\":null,\"txt6A\":\"prueba\"}]', '[{\"t1A\":\"Agencia Quebrada\",\"t2A\":\"(Cusco - Yanatile)\",\"t3A\":\"Poblado San Ignacio s\\/n\",\"t4A\":\"984108723 \\/ 943689136\",\"t5A\":null,\"t6A\":\"prueba\"}]', '[{\"tx1A\":\"Unidad Operativa Colca\",\"tx2A\":\"(Cusco - Ocobamba)\",\"tx3A\":\"Calle Principal S\\/N\",\"tx4A\":\"951290502 \\/ 980575339\",\"tx5A\":null,\"tx6A\":\"prueba\"},{\"tx1A\":\"Unidad Operativa Echarate\",\"tx2A\":\"(Cusco - Echarate)\",\"tx3A\":\"Calle Principal Puente Echarate\",\"tx4A\":\"980575224 \\/ 958325292\",\"tx5A\":null,\"tx6A\":\"prueba\"},{\"tx1A\":\"Unidad Operativa Kiteni\",\"tx2A\":\"(Cusco - Echarate)\",\"tx3A\":\"Av. Wiesse S\\/N\",\"tx4A\":\"984108725\",\"tx5A\":null,\"tx6A\":\"prueba\"},{\"tx1A\":\"Unidad Operativa Maranura\",\"tx2A\":\"(Cusco - Maranura)\",\"tx3A\":\"Av. La Cultura S\\/N\",\"tx4A\":\"980575260\",\"tx5A\":null,\"tx6A\":\"prueba\"},{\"tx1A\":\"Unidad Operativa Palma Real\",\"tx2A\":\"(Cusco - Echarate)\",\"tx3A\":\"Calle Principal S\\/N\",\"tx4A\":\"980575209\",\"tx5A\":null,\"tx6A\":\"prueba\"},{\"tx1A\":\"Unidad Operativa Putucusi\",\"tx2A\":\"(Cusco - Quellouno)\",\"tx3A\":\"Calle Principal S\\/N\",\"tx4A\":\"980575597 \\/ 980575180\",\"tx5A\":null,\"tx6A\":\"prueba\"},{\"tx1A\":\"Unidad Operativa Quellouno\",\"tx2A\":\"(Cusco - Quellouno)\",\"tx3A\":\"Calle Jos\\u00e9 Olaya S\\/N\",\"tx4A\":\"980575180\",\"tx5A\":null,\"tx6A\":\"prueba\"},{\"tx1A\":\"Unidad Operativa San Lorenzo\",\"tx2A\":\"(Cusco - Ocobamba)\",\"tx3A\":\"Calle Principal S\\/N\",\"tx4A\":\"980575339 \\/ 951290502\",\"tx5A\":null,\"tx6A\":\"prueba\"},{\"tx1A\":\"Unidad Operativa Santa Mar\\u00eda\",\"tx2A\":\"(Cusco - Maranura)\",\"tx3A\":\"Calle Los Manzanares S\\/N\",\"tx4A\":\"980575187\",\"tx5A\":null,\"tx6A\":\"prueba\"},{\"tx1A\":\"Unidad Operativa Versalles\",\"tx2A\":\"(Cusco - Ocobamba)\",\"tx3A\":\"Calle Principal S\\/N\",\"tx4A\":\"980575553 \\/ 980575339\",\"tx5A\":null,\"tx6A\":\"prueba\"}]', 7, 'en', '2019-11-21 17:03:48', '2019-11-21 17:03:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seo_routes`
--

CREATE TABLE `seo_routes` (
  `id` int(10) UNSIGNED NOT NULL,
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_title` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_description` varchar(160) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_imagen` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id` int(10) UNSIGNED NOT NULL,
  `visible` tinyint(1) DEFAULT NULL,
  `departamento_id` int(10) UNSIGNED DEFAULT NULL,
  `cate_servicio_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fechaFin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id`, `visible`, `departamento_id`, `cate_servicio_id`, `created_at`, `updated_at`, `fechaFin`) VALUES
(3, 1, 1, 1, '2019-11-16 03:35:10', '2019-11-21 17:58:39', '22-11-2019'),
(4, 1, 1, 1, '2019-11-21 01:31:43', '2019-11-21 17:58:45', '28-11-2019'),
(5, 1, 2, 1, '2019-11-21 01:33:14', '2019-11-21 17:58:53', '23-11-2019'),
(6, 1, 1, 2, '2019-11-21 01:33:31', '2019-11-21 17:59:00', '27-11-2019'),
(7, 1, 2, 2, '2019-11-21 01:33:52', '2019-11-21 17:59:07', '24-11-2019');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio_translations`
--

CREATE TABLE `servicio_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci,
  `pdf` text COLLATE utf8mb4_unicode_ci,
  `servicio_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servicio_translations`
--

INSERT INTO `servicio_translations` (`id`, `titulo`, `des`, `url`, `pdf`, `servicio_id`, `locale`, `created_at`, `updated_at`, `tipo`) VALUES
(3, 'ENACO - Cusco', '<p>Proveedor de empaque y embalaje entre otros</p>', NULL, '/uploads/shares/TEST_ENACO.pdf', 3, 'es', '2019-11-16 03:35:10', '2019-11-21 01:35:36', 'Full Time'),
(4, 'ENACO - Trujillo', '<p>Jefe de mantenimiento, conocimiento en coca</p>', 'https://www.youtube.com/watch?v=YFk78viOTwg', NULL, 3, 'en', '2019-11-16 03:35:10', '2019-11-16 03:35:10', 'Full Time'),
(5, 'ENACO - Cusco', '<p>Proveedor de empaque y embalaje entre otros</p>', NULL, '/uploads/shares/TEST_ENACO.pdf', 4, 'es', '2019-11-21 01:31:43', '2019-11-21 01:31:43', 'Full Time'),
(6, 'ENACO - Cusco', '<p>Proveedor de empaque y embalaje entre otros</p>', NULL, '/uploads/shares/TEST_ENACO.pdf', 4, 'en', '2019-11-21 01:31:43', '2019-11-21 01:31:43', 'Full Time'),
(7, 'ENACO - Lima', '<p>Proveedor de empaque y embalaje entre otros</p>', NULL, '/uploads/shares/TEST_ENACO.pdf', 5, 'es', '2019-11-21 01:33:14', '2019-11-21 01:35:55', 'Full Time'),
(8, 'ENACO - Cusco', '<p>Proveedor de empaque y embalaje entre otros</p>', NULL, '/uploads/shares/TEST_ENACO.pdf', 5, 'en', '2019-11-21 01:33:14', '2019-11-21 01:33:14', 'Full Time'),
(9, 'ENACO - Lima', '<p>Proveedor de empaque y embalaje entre otros</p>', NULL, '/uploads/shares/TEST_ENACO.pdf', 6, 'es', '2019-11-21 01:33:31', '2019-11-21 01:33:31', 'Full Time'),
(10, 'ENACO - Lima', '<p>Proveedor de empaque y embalaje entre otros</p>', NULL, '/uploads/shares/TEST_ENACO.pdf', 6, 'en', '2019-11-21 01:33:31', '2019-11-21 01:33:31', 'Full Time'),
(11, 'ENACO - Lima', '<p>Proveedor de empaque y embalaje entre otros</p>', NULL, '/uploads/shares/TEST_ENACO.pdf', 7, 'es', '2019-11-21 01:33:52', '2019-11-21 01:36:05', 'Full Time'),
(12, 'ENACO - Trujillo', '<p>Proveedor de empaque y embalaje entre otros</p>', NULL, '/uploads/shares/TEST_ENACO.pdf', 7, 'en', '2019-11-21 01:33:52', '2019-11-21 01:33:52', 'Full Time');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcat_indus`
--

CREATE TABLE `subcat_indus` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `subcat_indus`
--

INSERT INTO `subcat_indus` (`id`, `created_at`, `updated_at`) VALUES
(1, '2019-11-15 03:24:38', '2019-11-15 03:24:38'),
(2, '2019-11-15 03:24:46', '2019-11-15 03:24:46'),
(3, '2020-06-18 04:18:25', '2020-06-18 04:18:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcat_indus_translations`
--

CREATE TABLE `subcat_indus_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcat_indus_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `subcat_indus_translations`
--

INSERT INTO `subcat_indus_translations` (`id`, `nombre`, `subcat_indus_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'Con alcaloide', 1, 'es', '2019-11-15 03:24:38', '2019-11-15 03:24:38'),
(2, 'Con alcaloide', 1, 'en', '2019-11-15 03:24:38', '2019-11-15 03:24:38'),
(3, 'Sin alcaloide', 2, 'es', '2019-11-15 03:24:46', '2019-11-15 03:24:46'),
(4, 'Sin alcaloide', 2, 'en', '2019-11-15 03:24:46', '2019-11-15 03:24:46'),
(5, 'Hojas selectas', 3, 'es', '2020-06-18 04:18:25', '2020-06-18 04:18:25'),
(6, 'Hojas selectas', 3, 'en', '2020-06-18 04:18:25', '2020-06-18 04:18:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_denuncia`
--

CREATE TABLE `tipo_denuncia` (
  `id` int(10) UNSIGNED NOT NULL,
  `orden` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_denuncia`
--

INSERT INTO `tipo_denuncia` (`id`, `orden`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-11-23 01:36:14', '2019-11-23 01:36:14'),
(2, 2, '2019-11-23 01:36:23', '2019-11-23 01:36:23'),
(3, 3, '2019-11-23 01:36:38', '2019-11-23 01:36:38'),
(4, 4, '2019-11-23 01:36:48', '2019-11-23 01:36:48'),
(5, 5, '2019-11-23 01:37:00', '2019-11-23 01:37:18'),
(6, 6, '2019-11-23 01:38:04', '2019-11-23 01:38:04'),
(7, 7, '2019-11-23 01:38:20', '2019-11-23 01:38:20'),
(8, 8, '2019-11-23 01:38:40', '2019-11-23 01:38:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_denuncia_translations`
--

CREATE TABLE `tipo_denuncia_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_denuncia_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_denuncia_translations`
--

INSERT INTO `tipo_denuncia_translations` (`id`, `nombre`, `tipo_denuncia_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'Prácticas vinculadas a actos de corrupción en general, con énfasis en funcionarios y demás', 1, 'es', '2019-11-23 01:36:14', '2019-11-23 01:36:14'),
(2, 'Prácticas vinculadas a actos de corrupción en general, con énfasis en funcionarios y demás', 1, 'en', '2019-11-23 01:36:14', '2019-11-23 01:36:14'),
(3, 'Actividades, situaciones sospechosas o señales de alerta de comportamiento de funcionarios y demás', 2, 'es', '2019-11-23 01:36:23', '2019-11-23 01:36:23'),
(4, 'Actividades, situaciones sospechosas o señales de alerta de comportamiento de funcionarios y demás', 2, 'en', '2019-11-23 01:36:23', '2019-11-23 01:36:23'),
(5, 'Incumplimiento de normas, leyes y regulaciones', 3, 'es', '2019-11-23 01:36:38', '2019-11-23 01:36:38'),
(6, 'Incumplimiento de normas, leyes y regulaciones', 3, 'en', '2019-11-23 01:36:38', '2019-11-23 01:36:38'),
(7, 'Conflicto de interés', 4, 'es', '2019-11-23 01:36:49', '2019-11-23 01:36:49'),
(8, 'Conflicto de interés', 4, 'en', '2019-11-23 01:36:49', '2019-11-23 01:36:49'),
(9, 'Discriminación, intimidación, acoso u hostigamiento', 5, 'es', '2019-11-23 01:37:00', '2019-11-23 01:37:00'),
(10, 'Discriminación, intimidación, acoso u hostigamiento', 5, 'en', '2019-11-23 01:37:00', '2019-11-23 01:37:00'),
(11, 'Delito, fraude, corrupción, robo, soborno o chantaje', 6, 'es', '2019-11-23 01:38:04', '2019-11-23 01:38:04'),
(12, 'Delito, fraude, corrupción, robo, soborno o chantaje', 6, 'en', '2019-11-23 01:38:04', '2019-11-23 01:38:04'),
(13, 'Presión por parte de Jefe Inmediato para realizar labores sin las medidas de seguridad necesaria', 7, 'es', '2019-11-23 01:38:20', '2019-11-23 01:38:20'),
(14, 'Presión por parte de Jefe Inmediato para realizar labores sin las medidas de seguridad necesaria', 7, 'en', '2019-11-23 01:38:20', '2019-11-23 01:38:20'),
(15, 'Otros', 8, 'es', '2019-11-23 01:38:40', '2019-11-23 01:38:40'),
(16, 'Otros', 8, 'en', '2019-11-23 01:38:40', '2019-11-23 01:38:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_sugerencia`
--

CREATE TABLE `tipo_sugerencia` (
  `id` int(10) UNSIGNED NOT NULL,
  `orden` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_sugerencia`
--

INSERT INTO `tipo_sugerencia` (`id`, `orden`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-11-26 01:55:52', '2019-11-26 01:55:52'),
(2, 2, '2019-11-26 01:56:07', '2019-11-26 01:56:07'),
(3, 3, '2019-11-26 01:56:23', '2019-11-26 01:56:23'),
(4, 4, '2019-11-26 01:56:50', '2019-11-26 01:56:50'),
(5, 5, '2019-11-26 01:56:58', '2019-11-26 01:56:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_sugerencia_translations`
--

CREATE TABLE `tipo_sugerencia_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_sugerencia_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_sugerencia_translations`
--

INSERT INTO `tipo_sugerencia_translations` (`id`, `nombre`, `tipo_sugerencia_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'Comercial', 1, 'es', '2019-11-26 01:55:52', '2019-11-26 01:55:52'),
(2, 'Comercial', 1, 'en', '2019-11-26 01:55:52', '2019-11-26 01:55:52'),
(3, 'Logística', 2, 'es', '2019-11-26 01:56:07', '2019-11-26 01:56:07'),
(4, 'Logística', 2, 'en', '2019-11-26 01:56:07', '2019-11-26 01:56:07'),
(5, 'Recursos Humanos', 3, 'es', '2019-11-26 01:56:23', '2019-11-26 01:56:23'),
(6, 'Recursos Humanos', 3, 'en', '2019-11-26 01:56:23', '2019-11-26 01:56:23'),
(7, 'Visitas académicas', 4, 'es', '2019-11-26 01:56:50', '2019-11-26 01:56:50'),
(8, 'Visitas académicas', 4, 'en', '2019-11-26 01:56:50', '2019-11-26 01:56:50'),
(9, 'Otros', 5, 'es', '2019-11-26 01:56:58', '2019-11-26 01:56:58'),
(10, 'Otros', 5, 'en', '2019-11-26 01:56:58', '2019-11-26 01:56:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo`
--

CREATE TABLE `trabajo` (
  `id` int(10) UNSIGNED NOT NULL,
  `visible` tinyint(1) DEFAULT NULL,
  `departamento_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fechaFin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `trabajo`
--

INSERT INTO `trabajo` (`id`, `visible`, `departamento_id`, `created_at`, `updated_at`, `fechaFin`) VALUES
(1, 1, 2, '2019-11-16 02:39:04', '2019-11-21 17:57:50', '01-11-2019'),
(2, 1, 1, '2019-11-21 01:24:29', '2019-11-21 17:57:57', '24-11-2019'),
(3, 1, 1, '2019-11-21 01:25:44', '2019-11-21 17:58:03', '23-11-2019'),
(4, 1, 2, '2019-11-21 01:26:19', '2019-11-21 17:58:09', '22-11-2019'),
(5, 1, 2, '2019-11-21 01:26:46', '2019-11-21 17:58:15', '22-11-2019'),
(6, 1, 1, '2019-11-21 01:27:29', '2019-11-21 17:58:26', '20-11-2019');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo_translations`
--

CREATE TABLE `trabajo_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci,
  `pdf` text COLLATE utf8mb4_unicode_ci,
  `trabajo_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `trabajo_translations`
--

INSERT INTO `trabajo_translations` (`id`, `titulo`, `des`, `url`, `pdf`, `trabajo_id`, `locale`, `created_at`, `updated_at`, `tipo`) VALUES
(1, 'ENACO - Trujillo', '<p>Jefe de mantenimiento, conocimientos en coca</p>', NULL, '/uploads/shares/TEST_ENACO.pdf', 1, 'es', '2019-11-16 02:39:04', '2019-11-21 01:23:24', 'Full Time'),
(2, 'ENACO - Trujillo', '<p>Jefe de mantenimiento, conocimientos en coca</p>', 'https://www.youtube.com/watch?v=YFk78viOTwg', NULL, 1, 'en', '2019-11-16 02:39:04', '2019-11-16 02:39:04', 'Full Time'),
(3, 'ENACO - Lima', '<p>Jefe de mantenimiento, conocimientos en coca</p>', NULL, '/uploads/shares/TEST_ENACO.pdf', 2, 'es', '2019-11-21 01:24:29', '2019-11-21 01:24:29', 'Full Time'),
(4, 'ENACO - Lima', '<p>Jefe de mantenimiento, conocimientos en coca</p>', NULL, '/uploads/shares/TEST_ENACO.pdf', 2, 'en', '2019-11-21 01:24:29', '2019-11-21 01:24:29', 'Full Time'),
(5, 'ENACO - Trujillo', '<p>Jefe de mantenimiento, conocimientos en coca</p>', NULL, '/uploads/shares/TEST_ENACO.pdf', 3, 'es', '2019-11-21 01:25:44', '2019-11-21 01:25:44', 'Full Time'),
(6, 'ENACO - Trujillo', '<p>Jefe de mantenimiento, conocimientos en coca</p>', NULL, '/uploads/shares/TEST_ENACO.pdf', 3, 'en', '2019-11-21 01:25:44', '2019-11-21 01:25:44', 'Full Time'),
(7, 'ENACO - Cusco', '<p>Jefe de mantenimiento, conocimientos en coca</p>', NULL, '/uploads/shares/TEST_ENACO.pdf', 4, 'es', '2019-11-21 01:26:19', '2019-11-21 01:26:19', 'Full Time'),
(8, 'ENACO - Cusco', '<p>Jefe de mantenimiento, conocimientos en coca</p>', NULL, '/uploads/shares/TEST_ENACO.pdf', 4, 'en', '2019-11-21 01:26:19', '2019-11-21 01:26:19', 'Full Time'),
(9, 'ENACO - Lima', '<p>Jefe de mantenimiento, conocimientos en coca</p>', NULL, '/uploads/shares/TEST_ENACO.pdf', 5, 'es', '2019-11-21 01:26:46', '2019-11-21 01:26:46', 'Full Time'),
(10, 'ENACO - Lima', '<p>Jefe de mantenimiento, conocimientos en coca</p>', NULL, '/uploads/shares/TEST_ENACO.pdf', 5, 'en', '2019-11-21 01:26:46', '2019-11-21 01:26:46', 'Full Time'),
(11, 'ENACO - Cusco', '<p>Jefe de mantenimiento, conocimientos en coca</p>', NULL, '/uploads/shares/TEST_ENACO.pdf', 6, 'es', '2019-11-21 01:27:29', '2019-11-21 01:27:29', 'Full Time'),
(12, 'ENACO - Cusco', '<p>Jefe de mantenimiento, conocimientos en coca</p>', NULL, '/uploads/shares/TEST_ENACO.pdf', 6, 'en', '2019-11-21 01:27:29', '2019-11-21 01:27:29', 'Full Time');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tradicional`
--

CREATE TABLE `tradicional` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagenFondoListado` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagenCaladaListado` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagenIzqB1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagenDerB1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tradicional`
--

INSERT INTO `tradicional` (`id`, `imagenFondoListado`, `imagenCaladaListado`, `imagenIzqB1`, `imagenDerB1`, `created_at`, `updated_at`) VALUES
(1, '/uploads/shares/tradicional/hover2.jpg', '/uploads/shares/tradicional/1000x677-min.png', '/uploads/shares/tradicional/466x588-min.png', '/uploads/shares/tradicional/414x637.jpg', '2019-11-15 03:39:45', '2020-08-13 03:52:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tradicional_translations`
--

CREATE TABLE `tradicional_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `tituloListado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desListado` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tituloB1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desB1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `arrayB1` text COLLATE utf8mb4_unicode_ci,
  `tituloB2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desB2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tradicional_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tradicional_translations`
--

INSERT INTO `tradicional_translations` (`id`, `tituloListado`, `desListado`, `slug`, `tituloB1`, `desB1`, `arrayB1`, `tituloB2`, `desB2`, `tradicional_id`, `locale`, `created_at`, `updated_at`) VALUES
(1, 'Tradicional', '<p>En ENACO contamos con una&nbsp;variedad de tipos de Hojas de Coca de los diferentes valles de acopio.</p>', 'herencia-milenaria-inca-unica-en-el-mundo', 'Herencia milenaria inca única en el mundo', '<p>La Actividad de Comercio Tradicional de ENACO est&aacute; relacionada a dos actividades principales tales como el acopio y comercializaci&oacute;n de la hoja de coca para su uso tradicional (chacchado, rituales, entre otros).</p>', '[{\"txt1A\":\"01\",\"txt2A\":\"Acopio\",\"txt3A\":\"Actividad que consiste en el acopio de la hoja de coca prove\\u00edda por productores debidamente autorizados como legales, que cultivan la hoja de coca, realizada desde nuestras Sucursales, Agencias y Unidades operativas a lo largo de nuestro territorio nacional.\"},{\"txt1A\":\"02\",\"txt2A\":\"Venta\",\"txt3A\":\"Actividad que consiste en la comercializaci\\u00f3n de la hoja de coca, a nivel nacional e internacional, realizada desde nuestras Sucursales, Agencias y Unidades operativas a lo largo de nuestro territorio nacional.\"}]', 'Tipos de Hojas de Coca', '<p>ENACO S.A. cuenta con variedades de hoja de coca seg&uacute;n su procedencia y caracteristicas, tales como:</p>\r\n\r\n<p>&nbsp;</p>', 1, 'es', '2019-11-15 03:39:45', '2020-06-04 23:09:41'),
(2, 'Tradicional', '<p>En enaco contamos con una gran variedad de hojas de coca. Tenemos lo que est&aacute;s buscando.</p>', 'incan-millenary-heritage-unique-in-the-world', 'Incan millenary heritage unique in the world', '<p>La Actividad de Comercio Tradicional en la Empresa Nacional de la Coca est&aacute; relacionada a dos actividades fundamentales las cuales constituyen el CORE del Negocio de la Empresa.</p>', '[{\"txt1A\":\"1\",\"txt2A\":\"Purchase\",\"txt3A\":\"Actividad que consisten en el acopio de la hoja de coca de los productores registrados como legales esto a lo largo del territorio nacional, actividad que se realizada desde nuestras Sucursales, Agencias y Unidades operativas de Compra. Las compras se realizan de dos formas Compras en los locales de ENACO y compras m\\u00f3viles a trav\\u00e9s de rutas preestablecidas por la empresa.\"},{\"txt1A\":\"2\",\"txt2A\":\"Sale\",\"txt3A\":\"Actividad que consisten en colocar el producto ya empacado en arrobas de 11.5 kg cada una en los mercados tradicionales, acci\\u00f3n que ENACO efect\\u00faa a trav\\u00e9s Comerciantes Mayoristas y Minoristas a quienes la empresa les otorga una Licencia de comercializaci\\u00f3n. Las ventas se efect\\u00faan en dos formas ventas en los locales de ENACO y ventas m\\u00f3viles\"}]', 'Products with tradition', '<p>&nbsp;</p>\r\n\r\n<p>Enaco S.A. para un mejor y uniforme manejo comercial a determinado tipos de hoja de coca y calidades que a continuaci&oacute;n se muestran.</p>', 1, 'en', '2019-11-15 03:39:45', '2019-12-17 17:48:55');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_name_unique` (`name`),
  ADD KEY `admins_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `banner_translations`
--
ALTER TABLE `banner_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `banner_translations_banner_id_locale_unique` (`banner_id`,`locale`),
  ADD KEY `banner_translations_locale_index` (`locale`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cargo_translations`
--
ALTER TABLE `cargo_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cargo_translations_cargo_id_locale_unique` (`cargo_id`,`locale`),
  ADD KEY `cargo_translations_locale_index` (`locale`);

--
-- Indices de la tabla `cate_servicio`
--
ALTER TABLE `cate_servicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cate_servicio_translations`
--
ALTER TABLE `cate_servicio_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cate_servicio_translations_cate_servicio_id_locale_unique` (`cate_servicio_id`,`locale`),
  ADD KEY `cate_servicio_translations_locale_index` (`locale`);

--
-- Indices de la tabla `contacto_denuncia`
--
ALTER TABLE `contacto_denuncia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto_global`
--
ALTER TABLE `contacto_global`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto_sugerencia`
--
ALTER TABLE `contacto_sugerencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto_suscripcion`
--
ALTER TABLE `contacto_suscripcion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `departamento_translations`
--
ALTER TABLE `departamento_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `departamento_translations_departamento_id_locale_unique` (`departamento_id`,`locale`),
  ADD KEY `departamento_translations_locale_index` (`locale`);

--
-- Indices de la tabla `dictionaries`
--
ALTER TABLE `dictionaries`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dictionary_translations`
--
ALTER TABLE `dictionary_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dictionary_translations_dictionary_id_locale_unique` (`dictionary_id`,`locale`),
  ADD KEY `dictionary_translations_locale_index` (`locale`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipo_translations`
--
ALTER TABLE `equipo_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `equipo_translations_equipo_id_locale_unique` (`equipo_id`,`locale`),
  ADD KEY `equipo_translations_locale_index` (`locale`);

--
-- Indices de la tabla `etiqueta_indus`
--
ALTER TABLE `etiqueta_indus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `etiqueta_indus_translations`
--
ALTER TABLE `etiqueta_indus_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `etiqueta_indus_translations_etiqueta_indus_id_locale_unique` (`etiqueta_indus_id`,`locale`),
  ADD KEY `etiqueta_indus_translations_locale_index` (`locale`);

--
-- Indices de la tabla `etiqueta_tradi`
--
ALTER TABLE `etiqueta_tradi`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `etiqueta_tradi_translations`
--
ALTER TABLE `etiqueta_tradi_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `etiqueta_tradi_translations_etiqueta_tradi_id_locale_unique` (`etiqueta_tradi_id`,`locale`),
  ADD KEY `etiqueta_tradi_translations_locale_index` (`locale`);

--
-- Indices de la tabla `gestion_nivel1`
--
ALTER TABLE `gestion_nivel1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gestion_nivel1_translations`
--
ALTER TABLE `gestion_nivel1_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gestion_nivel1_translations_gestion_nivel1_id_locale_unique` (`gestion_nivel1_id`,`locale`),
  ADD KEY `gestion_nivel1_translations_locale_index` (`locale`);

--
-- Indices de la tabla `gestion_nivel2`
--
ALTER TABLE `gestion_nivel2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gestion_nivel2_gestion_nivel1_id_foreign` (`gestion_nivel1_id`);

--
-- Indices de la tabla `gestion_nivel2_translations`
--
ALTER TABLE `gestion_nivel2_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gestion_nivel2_translations_gestion_nivel2_id_locale_unique` (`gestion_nivel2_id`,`locale`),
  ADD KEY `gestion_nivel2_translations_locale_index` (`locale`);

--
-- Indices de la tabla `gestion_nivel3`
--
ALTER TABLE `gestion_nivel3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gestion_nivel3_gestion_nivel2_id_foreign` (`gestion_nivel2_id`);

--
-- Indices de la tabla `gestion_nivel3b`
--
ALTER TABLE `gestion_nivel3b`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gestion_nivel3b_gestion_nivel3_id_foreign` (`gestion_nivel3_id`);

--
-- Indices de la tabla `gestion_nivel3b_translations`
--
ALTER TABLE `gestion_nivel3b_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gestion_nivel3b_translations_gestion_nivel3b_id_locale_unique` (`gestion_nivel3b_id`,`locale`),
  ADD KEY `gestion_nivel3b_translations_locale_index` (`locale`);

--
-- Indices de la tabla `gestion_nivel3_translations`
--
ALTER TABLE `gestion_nivel3_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gestion_nivel3_translations_gestion_nivel3_id_locale_unique` (`gestion_nivel3_id`,`locale`),
  ADD KEY `gestion_nivel3_translations_locale_index` (`locale`);

--
-- Indices de la tabla `historia`
--
ALTER TABLE `historia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historia_translations`
--
ALTER TABLE `historia_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `historia_translations_historia_id_locale_unique` (`historia_id`,`locale`),
  ADD KEY `historia_translations_locale_index` (`locale`);

--
-- Indices de la tabla `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `home_translations`
--
ALTER TABLE `home_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `home_translations_home_id_locale_unique` (`home_id`,`locale`),
  ADD KEY `home_translations_locale_index` (`locale`);

--
-- Indices de la tabla `industrial`
--
ALTER TABLE `industrial`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `industrial_translations`
--
ALTER TABLE `industrial_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `industrial_translations_industrial_id_locale_unique` (`industrial_id`,`locale`),
  ADD KEY `industrial_translations_locale_index` (`locale`);

--
-- Indices de la tabla `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `info_translations`
--
ALTER TABLE `info_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `info_translations_info_id_locale_unique` (`info_id`,`locale`),
  ADD KEY `info_translations_locale_index` (`locale`);

--
-- Indices de la tabla `integrante`
--
ALTER TABLE `integrante`
  ADD PRIMARY KEY (`id`),
  ADD KEY `integrante_cargo_id_foreign` (`cargo_id`),
  ADD KEY `integrante_niveles_id_foreign` (`niveles_id`);

--
-- Indices de la tabla `integrante_translations`
--
ALTER TABLE `integrante_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `integrante_translations_integrante_id_locale_unique` (`integrante_id`,`locale`),
  ADD KEY `integrante_translations_locale_index` (`locale`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `niveles`
--
ALTER TABLE `niveles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prod_indus`
--
ALTER TABLE `prod_indus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prod_indus_subcat_indus_id_foreign` (`subcat_indus_id`),
  ADD KEY `prod_indus_etiqueta_indus_id_foreign` (`etiqueta_indus_id`);

--
-- Indices de la tabla `prod_indus_relacionado`
--
ALTER TABLE `prod_indus_relacionado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prod_indus_relacionado_prod_indus_id_index` (`prod_indus_id`),
  ADD KEY `prod_indus_relacionado_rel_indus_id_index` (`rel_indus_id`);

--
-- Indices de la tabla `prod_indus_translations`
--
ALTER TABLE `prod_indus_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `prod_indus_translations_prod_indus_id_locale_unique` (`prod_indus_id`,`locale`),
  ADD KEY `prod_indus_translations_locale_index` (`locale`);

--
-- Indices de la tabla `prod_tradi`
--
ALTER TABLE `prod_tradi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prod_tradi_etiqueta_tradi_id_foreign` (`etiqueta_tradi_id`);

--
-- Indices de la tabla `prod_tradi_relacionado`
--
ALTER TABLE `prod_tradi_relacionado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prod_tradi_relacionado_prod_tradi_id_index` (`prod_tradi_id`),
  ADD KEY `prod_tradi_relacionado_rel_tradi_id_index` (`rel_tradi_id`);

--
-- Indices de la tabla `prod_tradi_translations`
--
ALTER TABLE `prod_tradi_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `prod_tradi_translations_prod_tradi_id_locale_unique` (`prod_tradi_id`,`locale`),
  ADD KEY `prod_tradi_translations_locale_index` (`locale`);

--
-- Indices de la tabla `redirections`
--
ALTER TABLE `redirections`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indices de la tabla `sede`
--
ALTER TABLE `sede`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sede_denuncia`
--
ALTER TABLE `sede_denuncia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sede_denuncia_translations`
--
ALTER TABLE `sede_denuncia_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sede_denuncia_translations_sede_denuncia_id_locale_unique` (`sede_denuncia_id`,`locale`),
  ADD KEY `sede_denuncia_translations_locale_index` (`locale`);

--
-- Indices de la tabla `sede_translations`
--
ALTER TABLE `sede_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sede_translations_sede_id_locale_unique` (`sede_id`,`locale`),
  ADD KEY `sede_translations_locale_index` (`locale`);

--
-- Indices de la tabla `seo_routes`
--
ALTER TABLE `seo_routes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `servicio_departamento_id_foreign` (`departamento_id`),
  ADD KEY `servicio_cate_servicio_id_foreign` (`cate_servicio_id`);

--
-- Indices de la tabla `servicio_translations`
--
ALTER TABLE `servicio_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `servicio_translations_servicio_id_locale_unique` (`servicio_id`,`locale`),
  ADD KEY `servicio_translations_locale_index` (`locale`);

--
-- Indices de la tabla `subcat_indus`
--
ALTER TABLE `subcat_indus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subcat_indus_translations`
--
ALTER TABLE `subcat_indus_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subcat_indus_translations_subcat_indus_id_locale_unique` (`subcat_indus_id`,`locale`),
  ADD KEY `subcat_indus_translations_locale_index` (`locale`);

--
-- Indices de la tabla `tipo_denuncia`
--
ALTER TABLE `tipo_denuncia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_denuncia_translations`
--
ALTER TABLE `tipo_denuncia_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tipo_denuncia_translations_tipo_denuncia_id_locale_unique` (`tipo_denuncia_id`,`locale`),
  ADD KEY `tipo_denuncia_translations_locale_index` (`locale`);

--
-- Indices de la tabla `tipo_sugerencia`
--
ALTER TABLE `tipo_sugerencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_sugerencia_translations`
--
ALTER TABLE `tipo_sugerencia_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tipo_sugerencia_translations_tipo_sugerencia_id_locale_unique` (`tipo_sugerencia_id`,`locale`),
  ADD KEY `tipo_sugerencia_translations_locale_index` (`locale`);

--
-- Indices de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trabajo_departamento_id_foreign` (`departamento_id`);

--
-- Indices de la tabla `trabajo_translations`
--
ALTER TABLE `trabajo_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `trabajo_translations_trabajo_id_locale_unique` (`trabajo_id`,`locale`),
  ADD KEY `trabajo_translations_locale_index` (`locale`);

--
-- Indices de la tabla `tradicional`
--
ALTER TABLE `tradicional`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tradicional_translations`
--
ALTER TABLE `tradicional_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tradicional_translations_tradicional_id_locale_unique` (`tradicional_id`,`locale`),
  ADD KEY `tradicional_translations_locale_index` (`locale`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `banner_translations`
--
ALTER TABLE `banner_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `cargo_translations`
--
ALTER TABLE `cargo_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `cate_servicio`
--
ALTER TABLE `cate_servicio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cate_servicio_translations`
--
ALTER TABLE `cate_servicio_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `contacto_denuncia`
--
ALTER TABLE `contacto_denuncia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `contacto_global`
--
ALTER TABLE `contacto_global`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `contacto_sugerencia`
--
ALTER TABLE `contacto_sugerencia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contacto_suscripcion`
--
ALTER TABLE `contacto_suscripcion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `departamento_translations`
--
ALTER TABLE `departamento_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `dictionaries`
--
ALTER TABLE `dictionaries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT de la tabla `dictionary_translations`
--
ALTER TABLE `dictionary_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `equipo_translations`
--
ALTER TABLE `equipo_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `etiqueta_indus`
--
ALTER TABLE `etiqueta_indus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `etiqueta_indus_translations`
--
ALTER TABLE `etiqueta_indus_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `etiqueta_tradi`
--
ALTER TABLE `etiqueta_tradi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `etiqueta_tradi_translations`
--
ALTER TABLE `etiqueta_tradi_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `gestion_nivel1`
--
ALTER TABLE `gestion_nivel1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `gestion_nivel1_translations`
--
ALTER TABLE `gestion_nivel1_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `gestion_nivel2`
--
ALTER TABLE `gestion_nivel2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `gestion_nivel2_translations`
--
ALTER TABLE `gestion_nivel2_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `gestion_nivel3`
--
ALTER TABLE `gestion_nivel3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `gestion_nivel3b`
--
ALTER TABLE `gestion_nivel3b`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `gestion_nivel3b_translations`
--
ALTER TABLE `gestion_nivel3b_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de la tabla `gestion_nivel3_translations`
--
ALTER TABLE `gestion_nivel3_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `historia`
--
ALTER TABLE `historia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `historia_translations`
--
ALTER TABLE `historia_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `home`
--
ALTER TABLE `home`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `home_translations`
--
ALTER TABLE `home_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `industrial`
--
ALTER TABLE `industrial`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `industrial_translations`
--
ALTER TABLE `industrial_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `info`
--
ALTER TABLE `info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `info_translations`
--
ALTER TABLE `info_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `integrante`
--
ALTER TABLE `integrante`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `integrante_translations`
--
ALTER TABLE `integrante_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `niveles`
--
ALTER TABLE `niveles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `prod_indus`
--
ALTER TABLE `prod_indus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `prod_indus_relacionado`
--
ALTER TABLE `prod_indus_relacionado`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `prod_indus_translations`
--
ALTER TABLE `prod_indus_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `prod_tradi`
--
ALTER TABLE `prod_tradi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `prod_tradi_relacionado`
--
ALTER TABLE `prod_tradi_relacionado`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `prod_tradi_translations`
--
ALTER TABLE `prod_tradi_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `redirections`
--
ALTER TABLE `redirections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sede`
--
ALTER TABLE `sede`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `sede_denuncia`
--
ALTER TABLE `sede_denuncia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `sede_denuncia_translations`
--
ALTER TABLE `sede_denuncia_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `sede_translations`
--
ALTER TABLE `sede_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `seo_routes`
--
ALTER TABLE `seo_routes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `servicio_translations`
--
ALTER TABLE `servicio_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `subcat_indus`
--
ALTER TABLE `subcat_indus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `subcat_indus_translations`
--
ALTER TABLE `subcat_indus_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipo_denuncia`
--
ALTER TABLE `tipo_denuncia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tipo_denuncia_translations`
--
ALTER TABLE `tipo_denuncia_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `tipo_sugerencia`
--
ALTER TABLE `tipo_sugerencia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipo_sugerencia_translations`
--
ALTER TABLE `tipo_sugerencia_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `trabajo_translations`
--
ALTER TABLE `trabajo_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tradicional`
--
ALTER TABLE `tradicional`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tradicional_translations`
--
ALTER TABLE `tradicional_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Filtros para la tabla `banner_translations`
--
ALTER TABLE `banner_translations`
  ADD CONSTRAINT `banner_translations_banner_id_foreign` FOREIGN KEY (`banner_id`) REFERENCES `banner` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `cargo_translations`
--
ALTER TABLE `cargo_translations`
  ADD CONSTRAINT `cargo_translations_cargo_id_foreign` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `cate_servicio_translations`
--
ALTER TABLE `cate_servicio_translations`
  ADD CONSTRAINT `cate_servicio_translations_cate_servicio_id_foreign` FOREIGN KEY (`cate_servicio_id`) REFERENCES `cate_servicio` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `departamento_translations`
--
ALTER TABLE `departamento_translations`
  ADD CONSTRAINT `departamento_translations_departamento_id_foreign` FOREIGN KEY (`departamento_id`) REFERENCES `departamento` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `dictionary_translations`
--
ALTER TABLE `dictionary_translations`
  ADD CONSTRAINT `dictionary_translations_dictionary_id_foreign` FOREIGN KEY (`dictionary_id`) REFERENCES `dictionaries` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `equipo_translations`
--
ALTER TABLE `equipo_translations`
  ADD CONSTRAINT `equipo_translations_equipo_id_foreign` FOREIGN KEY (`equipo_id`) REFERENCES `equipo` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `etiqueta_indus_translations`
--
ALTER TABLE `etiqueta_indus_translations`
  ADD CONSTRAINT `etiqueta_indus_translations_etiqueta_indus_id_foreign` FOREIGN KEY (`etiqueta_indus_id`) REFERENCES `etiqueta_indus` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `etiqueta_tradi_translations`
--
ALTER TABLE `etiqueta_tradi_translations`
  ADD CONSTRAINT `etiqueta_tradi_translations_etiqueta_tradi_id_foreign` FOREIGN KEY (`etiqueta_tradi_id`) REFERENCES `etiqueta_tradi` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `gestion_nivel1_translations`
--
ALTER TABLE `gestion_nivel1_translations`
  ADD CONSTRAINT `gestion_nivel1_translations_gestion_nivel1_id_foreign` FOREIGN KEY (`gestion_nivel1_id`) REFERENCES `gestion_nivel1` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `gestion_nivel2`
--
ALTER TABLE `gestion_nivel2`
  ADD CONSTRAINT `gestion_nivel2_gestion_nivel1_id_foreign` FOREIGN KEY (`gestion_nivel1_id`) REFERENCES `gestion_nivel1` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `gestion_nivel2_translations`
--
ALTER TABLE `gestion_nivel2_translations`
  ADD CONSTRAINT `gestion_nivel2_translations_gestion_nivel2_id_foreign` FOREIGN KEY (`gestion_nivel2_id`) REFERENCES `gestion_nivel2` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `gestion_nivel3`
--
ALTER TABLE `gestion_nivel3`
  ADD CONSTRAINT `gestion_nivel3_gestion_nivel2_id_foreign` FOREIGN KEY (`gestion_nivel2_id`) REFERENCES `gestion_nivel2` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `gestion_nivel3b`
--
ALTER TABLE `gestion_nivel3b`
  ADD CONSTRAINT `gestion_nivel3b_gestion_nivel3_id_foreign` FOREIGN KEY (`gestion_nivel3_id`) REFERENCES `gestion_nivel3` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `gestion_nivel3b_translations`
--
ALTER TABLE `gestion_nivel3b_translations`
  ADD CONSTRAINT `gestion_nivel3b_translations_gestion_nivel3b_id_foreign` FOREIGN KEY (`gestion_nivel3b_id`) REFERENCES `gestion_nivel3b` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `gestion_nivel3_translations`
--
ALTER TABLE `gestion_nivel3_translations`
  ADD CONSTRAINT `gestion_nivel3_translations_gestion_nivel3_id_foreign` FOREIGN KEY (`gestion_nivel3_id`) REFERENCES `gestion_nivel3` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `historia_translations`
--
ALTER TABLE `historia_translations`
  ADD CONSTRAINT `historia_translations_historia_id_foreign` FOREIGN KEY (`historia_id`) REFERENCES `historia` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `home_translations`
--
ALTER TABLE `home_translations`
  ADD CONSTRAINT `home_translations_home_id_foreign` FOREIGN KEY (`home_id`) REFERENCES `home` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `industrial_translations`
--
ALTER TABLE `industrial_translations`
  ADD CONSTRAINT `industrial_translations_industrial_id_foreign` FOREIGN KEY (`industrial_id`) REFERENCES `industrial` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `info_translations`
--
ALTER TABLE `info_translations`
  ADD CONSTRAINT `info_translations_info_id_foreign` FOREIGN KEY (`info_id`) REFERENCES `info` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `integrante`
--
ALTER TABLE `integrante`
  ADD CONSTRAINT `integrante_cargo_id_foreign` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `integrante_niveles_id_foreign` FOREIGN KEY (`niveles_id`) REFERENCES `niveles` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `integrante_translations`
--
ALTER TABLE `integrante_translations`
  ADD CONSTRAINT `integrante_translations_integrante_id_foreign` FOREIGN KEY (`integrante_id`) REFERENCES `integrante` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `prod_indus`
--
ALTER TABLE `prod_indus`
  ADD CONSTRAINT `prod_indus_etiqueta_indus_id_foreign` FOREIGN KEY (`etiqueta_indus_id`) REFERENCES `etiqueta_indus` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `prod_indus_subcat_indus_id_foreign` FOREIGN KEY (`subcat_indus_id`) REFERENCES `subcat_indus` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `prod_indus_relacionado`
--
ALTER TABLE `prod_indus_relacionado`
  ADD CONSTRAINT `prod_indus_relacionado_prod_indus_id_foreign` FOREIGN KEY (`prod_indus_id`) REFERENCES `prod_indus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `prod_indus_relacionado_rel_indus_id_foreign` FOREIGN KEY (`rel_indus_id`) REFERENCES `prod_indus` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `prod_indus_translations`
--
ALTER TABLE `prod_indus_translations`
  ADD CONSTRAINT `prod_indus_translations_prod_indus_id_foreign` FOREIGN KEY (`prod_indus_id`) REFERENCES `prod_indus` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `prod_tradi`
--
ALTER TABLE `prod_tradi`
  ADD CONSTRAINT `prod_tradi_etiqueta_tradi_id_foreign` FOREIGN KEY (`etiqueta_tradi_id`) REFERENCES `etiqueta_tradi` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `prod_tradi_relacionado`
--
ALTER TABLE `prod_tradi_relacionado`
  ADD CONSTRAINT `prod_tradi_relacionado_prod_tradi_id_foreign` FOREIGN KEY (`prod_tradi_id`) REFERENCES `prod_tradi` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `prod_tradi_relacionado_rel_tradi_id_foreign` FOREIGN KEY (`rel_tradi_id`) REFERENCES `prod_tradi` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `prod_tradi_translations`
--
ALTER TABLE `prod_tradi_translations`
  ADD CONSTRAINT `prod_tradi_translations_prod_tradi_id_foreign` FOREIGN KEY (`prod_tradi_id`) REFERENCES `prod_tradi` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `sede_denuncia_translations`
--
ALTER TABLE `sede_denuncia_translations`
  ADD CONSTRAINT `sede_denuncia_translations_sede_denuncia_id_foreign` FOREIGN KEY (`sede_denuncia_id`) REFERENCES `sede_denuncia` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `sede_translations`
--
ALTER TABLE `sede_translations`
  ADD CONSTRAINT `sede_translations_sede_id_foreign` FOREIGN KEY (`sede_id`) REFERENCES `sede` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `servicio_cate_servicio_id_foreign` FOREIGN KEY (`cate_servicio_id`) REFERENCES `cate_servicio` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `servicio_departamento_id_foreign` FOREIGN KEY (`departamento_id`) REFERENCES `departamento` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `servicio_translations`
--
ALTER TABLE `servicio_translations`
  ADD CONSTRAINT `servicio_translations_servicio_id_foreign` FOREIGN KEY (`servicio_id`) REFERENCES `servicio` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `subcat_indus_translations`
--
ALTER TABLE `subcat_indus_translations`
  ADD CONSTRAINT `subcat_indus_translations_subcat_indus_id_foreign` FOREIGN KEY (`subcat_indus_id`) REFERENCES `subcat_indus` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `tipo_denuncia_translations`
--
ALTER TABLE `tipo_denuncia_translations`
  ADD CONSTRAINT `tipo_denuncia_translations_tipo_denuncia_id_foreign` FOREIGN KEY (`tipo_denuncia_id`) REFERENCES `tipo_denuncia` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `tipo_sugerencia_translations`
--
ALTER TABLE `tipo_sugerencia_translations`
  ADD CONSTRAINT `tipo_sugerencia_translations_tipo_sugerencia_id_foreign` FOREIGN KEY (`tipo_sugerencia_id`) REFERENCES `tipo_sugerencia` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD CONSTRAINT `trabajo_departamento_id_foreign` FOREIGN KEY (`departamento_id`) REFERENCES `departamento` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `trabajo_translations`
--
ALTER TABLE `trabajo_translations`
  ADD CONSTRAINT `trabajo_translations_trabajo_id_foreign` FOREIGN KEY (`trabajo_id`) REFERENCES `trabajo` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `tradicional_translations`
--
ALTER TABLE `tradicional_translations`
  ADD CONSTRAINT `tradicional_translations_tradicional_id_foreign` FOREIGN KEY (`tradicional_id`) REFERENCES `tradicional` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
