-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-04-2021 a las 11:00:08
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
-- Base de datos: `enaco_web`
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
(3, 'prueba2', 'jvilam@enaco.com.pe', '$2y$10$b1ls5ULp/IlHOlfaMFkzG.I3MvuZruwJOTkuY6CcBNMN6yVg.Q6IG', NULL, 4, NULL, '2020-09-07 21:50:26', '2020-09-07 22:03:21'),
(4, 'avargas', 'avargas@enaco.com.pe', '$2y$10$UjLuTLMUAjgoC7yipkwiF.q8r0nDnpD4uQ6sN0SX4neHYlNZrJFCy', NULL, 5, NULL, '2020-09-07 22:07:43', '2021-03-09 21:50:08'),
(5, 'lureta', 'lureta@enaco.com.pe', '$2y$10$HHcouSeyMtdeUJ8BxQg9Me7bNJGNEsDFRLp8/p0s6YQkDsw/RKF3m', NULL, 5, NULL, '2020-09-07 22:11:13', '2020-09-07 22:11:13'),
(6, 'mbalcazar', 'mbalcazar@enaco.com.pe', '$2y$10$qIk4lcEBpsQ9I/oOhWNqw.lXmaSezVuoDytq7qxnc722p4bHeUz6K', NULL, 6, NULL, '2020-09-07 22:12:54', '2020-09-07 22:12:54'),
(7, 'mmalpica', 'mmalpica@enaco.com.pe', '$2y$10$RBrFRqFTauil16hsvIBSz.Z.8tlF9zdRbvfUTFIOUpJEKvf2gF7wa', NULL, 5, NULL, '2021-01-15 23:28:45', '2021-01-15 23:28:45'),
(8, 'nmiranda', 'nmiranda@enaco.com.pe', '$2y$10$JzZpgJJxP87ALlvadO/vIOVRSVWaD6rRmGnQeW5TPgC8zez0a9KvO', NULL, 5, NULL, '2021-01-28 22:30:05', '2021-02-03 01:48:47');

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
(3, 2, '2019-12-18 21:43:43', '2019-12-18 21:43:43'),
(4, 3, '2020-12-28 22:12:43', '2020-12-28 22:12:43'),
(5, 4, '2020-12-28 22:13:27', '2020-12-28 22:13:27'),
(6, 5, '2020-12-29 19:46:36', '2020-12-29 19:46:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner_translations`
--

CREATE TABLE `banner_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` text COLLATE utf8mb4_unicode_ci,
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
(6, 'Products with inheritance', '<p>Meet the varieties we have</p>', 'See Products', 'http://web.enaco.com.pe/en/productos/industrial/todos', '/uploads/shares/banner/banner_2.jpg', '/uploads/shares/banner/banner_2.jpg', 3, 'en', '2019-12-18 21:43:43', '2020-03-31 08:53:24'),
(7, NULL, NULL, NULL, NULL, '/uploads/shares/banner/banners_delisse.png', '/uploads/shares/banner/banners_movil_delisse.png', 4, 'es', '2020-12-28 22:12:43', '2020-12-30 20:11:40'),
(8, 'Productos con herencia', '<p>Conoce las variedades que tenemos</p>', NULL, NULL, '/uploads/shares/banner/banner_delisse.png', '/uploads/shares/banner/banners_movil_delisse.png', 4, 'en', '2020-12-28 22:12:43', '2020-12-28 22:12:43'),
(9, NULL, NULL, NULL, NULL, '/uploads/shares/banner/banners_kintu.png', '/uploads/shares/banner/banners_movil_kintu.png', 5, 'es', '2020-12-28 22:13:27', '2021-01-06 19:21:33'),
(10, 'Productos con herencia', '<p>Conoce las variedades que tenemos</p>', NULL, NULL, '/uploads/shares/banner/banner_kintu.png', '/uploads/shares/banner/banners_movil_kintu.png', 5, 'en', '2020-12-28 22:13:27', '2020-12-28 22:13:27'),
(11, NULL, NULL, NULL, NULL, '/uploads/shares/banner/banners_enaco.png', '/uploads/shares/banner/banners_movil_enaco.png', 6, 'es', '2020-12-29 19:46:36', '2021-01-06 19:21:44'),
(12, '.', '<p>.</p>', NULL, NULL, '/uploads/shares/banner/banners_enaco.png', '/uploads/shares/banner/banners_movil_enaco.png', 6, 'en', '2020-12-29 19:46:36', '2020-12-29 19:46:36');

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
(13, '2020-03-02 14:11:33', '2020-03-02 14:11:33'),
(14, '2020-09-01 21:23:06', '2020-09-01 21:23:06'),
(15, '2020-09-01 21:23:17', '2020-09-01 21:23:17'),
(16, '2020-09-01 21:26:30', '2020-09-01 21:26:30'),
(17, '2020-10-22 21:53:50', '2020-10-22 21:53:50'),
(18, '2020-10-29 04:49:49', '2020-10-29 04:49:49'),
(19, '2020-10-29 04:59:54', '2020-10-29 04:59:54');

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
(1, 'Gerente General', 1, 'es', '2019-11-15 05:41:00', '2020-09-08 00:54:56', 'gerente-general'),
(2, 'Gerente General', 1, 'en', '2019-11-15 05:41:00', '2019-11-22 14:39:00', ''),
(3, 'Gerente de Administración y Finanzas (e)', 2, 'es', '2019-11-15 05:41:08', '2020-09-01 21:41:06', 'gerente-de-administracion-y-finanzas-e'),
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
(25, 'Gerente de Comercio Tradicional', 13, 'es', '2020-03-02 14:11:33', '2021-01-26 21:06:52', 'gerente-de-comercio-tradicional'),
(26, 'Gerente de Producción', 13, 'en', '2020-03-02 14:11:33', '2020-03-02 14:11:33', 'gerente-de-produccion'),
(27, 'Coordinador de Tecnología de la información y Comunicaciones', 14, 'es', '2020-09-01 21:23:06', '2020-09-01 21:23:06', 'coordinador-de-tecnologia-de-la-informacion-y-comunicaciones'),
(28, 'Coordinador de Tecnología de la información y Comunicaciones', 14, 'en', '2020-09-01 21:23:06', '2020-09-01 21:23:06', 'coordinador-de-tecnologia-de-la-informacion-y-comunicaciones'),
(29, 'Coordinador de Proyectos', 15, 'es', '2020-09-01 21:23:17', '2020-09-01 21:23:17', 'coordinador-de-proyectos'),
(30, 'Coordinador de Proyectos', 15, 'en', '2020-09-01 21:23:17', '2020-09-01 21:23:17', 'coordinador-de-proyectos'),
(31, 'Gerente de Comercio Industrial', 16, 'es', '2020-09-01 21:26:30', '2020-09-01 21:26:30', 'gerente-de-comercio-industrial'),
(32, 'Gerente de Comercio Industrial', 16, 'en', '2020-09-01 21:26:30', '2020-09-01 21:26:30', 'gerente-de-comercio-industrial'),
(33, 'Junta General de Accionistas', 17, 'es', '2020-10-22 21:53:50', '2020-10-22 21:53:50', 'junta-general-de-accionistas'),
(34, 'Junta General de Accionistas', 17, 'en', '2020-10-22 21:53:50', '2020-10-22 21:53:50', 'junta-general-de-accionistas'),
(35, 'Directores', 18, 'es', '2020-10-29 04:49:49', '2020-10-29 05:12:58', 'directores'),
(36, 'Directorio', 18, 'en', '2020-10-29 04:49:49', '2020-10-29 04:49:49', 'directorio'),
(37, 'Presidente del Directorio', 19, 'es', '2020-10-29 04:59:54', '2020-10-29 04:59:54', 'presidente-del-directorio'),
(38, 'Presidente del Directorio', 19, 'en', '2020-10-29 04:59:54', '2020-10-29 04:59:54', 'presidente-del-directorio');

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
(21, 'Cusco', 'Prácticas vinculadas a actos de corrupción en general, con énfasis en funcionarios y demás', 'Sí', 'mayo05', '44444444', '999999999', 'correo@correo.com', NULL, 'Sí', 'prueba', 1, '', '05-05-2020', '2020-05-06 01:02:04', '2020-05-06 01:02:04', '2020-D21'),
(22, 'Juliaca', 'Discriminación, intimidación, acoso u hostigamiento', 'No', 'elvis', '73538720', '931210264', 'elvis.quispe1996@gmail.com', NULL, 'Sí', 'Mucha exigencia en la calidad de recogo del producto por lo que hay mucha insatisfacción del productor. Pido los protocolos de como se ajusta la compra de los productos bajo que medida se debe recoger.', 1, '', '18-04-2021', '2021-04-18 21:29:05', '2021-04-18 21:29:05', '2021-D22');

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
(8, 'Prueba', 'mayo05', 'mayo05', '11223355441', '999999999', 'correo@correo.com', '05-05-2020', 'Me gustaría recibir información.\r\n(prueba)', 1, '2020-05-06 00:57:49', '2020-05-06 00:57:49', 'Mate de Coca'),
(9, 'jose', 'torres jimenez', 'Autonomo', 'calle san diego numero 1 piso 4 letra d', '642983054', 'jos.torresjimenez@yahoo.com', '06-09-2020', 'Hola quisiera saber si ustedes me pueden enviar hoja de coca a España. \r\nMuchas gracias', 1, '2020-09-07 02:27:59', '2020-09-07 02:27:59', 'Menta y Hoja de Coca'),
(10, 'Nathaly', 'Pacheco-Santivanez', 'Private Brand', '00000000000', '8058719703', 'nathaly.pachecosantivanez@gmail.com', '06-09-2020', 'Hola, quisiera informacion si pueden proveer exportacion para Estados Unidos. Estoy interesada en los productos industriales para marca privada.\r\n\r\nMuchas gracias!\r\nNathaly', 1, '2020-09-07 02:33:25', '2020-09-07 02:33:25', NULL),
(11, 'Nathaly', 'Pacheco-Santivanez', 'Private Brand', '00000000000', '8058719703', 'nathaly.pachecosantivanez@gmail.com', '06-09-2020', 'Hola, quisiera informacion si pueden proveer exportacion para Estados Unidos. Estoy interesada en los productos industriales para marca privada.\r\n\r\nMuchas gracias!\r\nNathaly', 1, '2020-09-07 02:33:26', '2020-09-07 02:33:26', NULL),
(12, 'Nathaly', 'Pacheco-Santivanez', 'Private Brand', '00000000000', '8058719703', 'nathaly.pachecosantivanez@gmail.com', '06-09-2020', 'Hola, quisiera informacion si pueden proveer exportacion para Estados Unidos. Estoy interesada en los productos industriales para marca privada.\r\n\r\nMuchas gracias!\r\nNathaly', 1, '2020-09-07 02:33:28', '2020-09-07 02:33:28', NULL),
(13, 'Dâmaris', 'Silveira', 'University of Brasilia', '46440569600', '+5561981278770', 'damaris@unb.br', '11-09-2020', 'Dear Sir,\r\n\r\nI  am a professor in a Brazilian Public University. Our research group is working with DNA code of Erythroxylaceae plants in a PhD project. We need a sample (1 ou 2 leaves) of authenticated  (meaning a botanical certification) Erythroxylum coca and Erythroxylum novagranatense, and we are not able to find it.  Can you have it? And if yes, can you donate 1 or 2 leaves? Thank you in advance.', 1, '2020-09-12 04:02:28', '2020-09-12 04:02:28', NULL),
(14, 'David', 'Bell', 'Drinks company', 'not known', '00447873586048', 'davidbell2003@hotmail.com', '12-09-2020', 'I am based in the UK\r\nI am very interested in working with you.\r\n\r\nI am sorry as I do not speak any Spanish\r\n\r\nPlease contact me as soon as possible.\r\n\r\nregards\r\n\r\nDavid Bell', 1, '2020-09-12 18:29:41', '2020-09-12 18:29:41', NULL),
(15, 'David', 'Bell', 'Drinks company', 'not known', '00447873586048', 'davidbell2003@hotmail.com', '12-09-2020', 'I am based in the UK\r\nI am very interested in working with you.\r\n\r\nI am sorry as I do not speak any Spanish\r\n\r\nPlease contact me as soon as possible.\r\n\r\nregards\r\n\r\nDavid Bell', 1, '2020-09-12 18:29:45', '2020-09-12 18:29:45', NULL),
(16, 'gustavo', 'Quiñonez', 'na', 'na', '3166193535', 'gstavoqinonezcarrero@gmail.com', '14-09-2020', 'hace unos años tuve la oportundad de viajar al Peru, y compre unas cajitas de hoja de coca con anis,  parece que ya no las comercionalizan,,,\r\nla pregunta es si hacen despachos a bucaramanga (colombia)  de cajitas de hoja de coca con menta, o si tienen distribuidor en colombia\r\nmi celular y whatsapp es 3166193535', 1, '2020-09-14 20:18:25', '2020-09-14 20:18:25', 'Menta y Hoja de Coca'),
(17, 'Nicolas', 'Gabrei', 'independinet', 'soy', '1164256628', 'avellanicolas@yahoo.com.ar', '14-09-2020', 'Hola soy de ARGENTINA y quisiera comprar hoja de coca para mascar.', 1, '2020-09-14 21:06:42', '2020-09-14 21:06:42', NULL),
(18, 'Nicolas', 'Gabrei', 'independinet', 'soy', '1164256628', 'avellanicolas@yahoo.com.ar', '14-09-2020', 'Hola soy de ARGENTINA y quisiera comprar hoja de coca para mascar.', 1, '2020-09-14 21:06:43', '2020-09-14 21:06:43', NULL),
(19, 'Nicolas', 'Gabrei', 'independinet', 'soy', '1164256628', 'avellanicolas@yahoo.com.ar', '14-09-2020', 'Hola soy de ARGENTINA y quisiera comprar hoja de coca para mascar.', 1, '2020-09-14 21:06:43', '2020-09-14 21:06:43', NULL),
(20, 'Nicolas', 'Gabrei', 'independinet', 'soy', '1164256628', 'avellanicolas@yahoo.com.ar', '14-09-2020', 'Hola soy de ARGENTINA y quisiera comprar hoja de coca para mascar.', 1, '2020-09-14 21:06:44', '2020-09-14 21:06:44', NULL),
(21, 'Nicolas', 'Gabrei', 'independinet', 'soy', '1164256628', 'avellanicolas@yahoo.com.ar', '14-09-2020', 'Hola soy de ARGENTINA y quisiera comprar hoja de coca para mascar.', 1, '2020-09-14 21:06:44', '2020-09-14 21:06:44', NULL),
(22, 'Nicolas', 'Gabrei', 'independinet', 'soy', '1164256628', 'avellanicolas@yahoo.com.ar', '14-09-2020', 'Hola soy de ARGENTINA y quisiera comprar hoja de coca para mascar.', 1, '2020-09-14 21:06:44', '2020-09-14 21:06:44', NULL),
(23, 'Omar', 'Pintones', 'Viceministerio de la Coca y Desarrollo Integral Bolivia', '6165889', '+59176288899', 'opintones@gmail.com', '14-09-2020', 'A tiempo de saludarlos y desearles éxitos, nos dirigimos a su empresa, para una coordinación con la unidad de Industrialización de la Coca del Viceministerio de la Coca y desarrollo Integral de Bolivia', 1, '2020-09-14 21:18:35', '2020-09-14 21:18:35', NULL),
(24, 'Omar', 'Pintones', 'Viceministerio de la Coca y Desarrollo Integral Bolivia', '6165889', '+59176288899', 'opintones@gmail.com', '14-09-2020', 'A tiempo de saludarlos y desearles éxitos, nos dirigimos a su empresa, para una coordinación con la unidad de Industrialización de la Coca del Viceministerio de la Coca y desarrollo Integral de Bolivia', 1, '2020-09-14 21:18:38', '2020-09-14 21:18:38', NULL),
(25, 'Omar', 'Pintones', 'Viceministerio de la Coca y Desarrollo Integral Bolivia', '6165889', '+59176288899', 'opintones@gmail.com', '14-09-2020', 'A tiempo de saludarlos y desearles éxitos, nos dirigimos a su empresa, para una coordinación con la unidad de Industrialización de la Coca del Viceministerio de la Coca y desarrollo Integral de Bolivia', 1, '2020-09-14 21:18:38', '2020-09-14 21:18:38', NULL),
(26, 'Omar', 'Pintones', 'Viceministerio de la Coca y Desarrollo Integral Bolivia', '6165889', '+59176288899', 'opintones@gmail.com', '14-09-2020', 'A tiempo de saludarlos y desearles éxitos, nos dirigimos a su empresa, para una coordinación con la unidad de Industrialización de la Coca del Viceministerio de la Coca y desarrollo Integral de Bolivia', 1, '2020-09-14 21:18:38', '2020-09-14 21:18:38', NULL),
(27, 'david', 'bell', 'david michael media', 'unknown', '07873586048', 'davidbell2003@hotmail.com', '14-09-2020', 'Please contact me regarding products that i want to purchase', 1, '2020-09-15 00:21:19', '2020-09-15 00:21:19', 'Infusión de Hoja de Coca'),
(28, 'Lucia victoria', 'Cabrera', 'Personal', '1884', '+5491165905837', 'luciavcabrera95@gmail.com', '17-09-2020', 'Buenos días... Mi nombre es Lucía Cabrera me comunico con ustedes ya que deseo hacer llegar hojas de coca a buenos aires /argentina. Por motivos medicinales y personales ,ya que me encuentro con la necesidad de ayudar Ami madre con la medicina .ya que ella tiene artrosis y artritis en todo su cuerpo y se que el uso de esta gran hoja sagrada es la única solución para que mi madre pase sus días lo más confortable posible ya que la hoja de coca sana y cura su dolencia..desde ya muchas gracias por leer mi mensaje..es urgente\r\nBonito día', 1, '2020-09-17 22:31:22', '2020-09-17 22:31:22', NULL),
(29, 'Lucia victoria', 'Cabrera', 'Personal', '1884', '+5491165905837', 'luciavcabrera95@gmail.com', '17-09-2020', 'Buenos días... Mi nombre es Lucía Cabrera me comunico con ustedes ya que deseo hacer llegar hojas de coca a buenos aires /argentina. Por motivos medicinales y personales ,ya que me encuentro con la necesidad de ayudar Ami madre con la medicina .ya que ella tiene artrosis y artritis en todo su cuerpo y se que el uso de esta gran hoja sagrada es la única solución para que mi madre pase sus días lo más confortable posible ya que la hoja de coca sana y cura su dolencia..desde ya muchas gracias por leer mi mensaje..es urgente\r\nBonito día', 1, '2020-09-17 22:31:25', '2020-09-17 22:31:25', NULL),
(30, 'Karen', 'Cordero', 'Delisse', '50939328', '3205552053', 'kacosa@hotmail.com', '22-09-2020', 'Hola! Me interesa saber el precio de el mate de hoja de coca y el proceso de compra y envío.', 1, '2020-09-23 02:02:40', '2020-09-23 02:02:40', 'Infusión de Hoja de Coca'),
(31, 'Karen', 'Cordero', 'Delisse', '50939328', '3205552053', 'kacosa@hotmail.com', '22-09-2020', 'Hola! Me interesa saber el precio de el mate de hoja de coca y el proceso de compra y envío.', 1, '2020-09-23 02:02:40', '2020-09-23 02:02:40', 'Infusión de Hoja de Coca'),
(32, 'Karen', 'Cordero', 'Delisse', '50939328', '3205552053', 'kacosa@hotmail.com', '22-09-2020', 'Hola! Me interesa saber el precio de el mate de hoja de coca y el proceso de compra y envío.', 1, '2020-09-23 02:02:41', '2020-09-23 02:02:41', 'Infusión de Hoja de Coca'),
(33, 'Karen', 'Cordero', 'Delisse', '50939328', '3205552053', 'kacosa@hotmail.com', '22-09-2020', 'Hola! Me interesa saber el precio de el mate de hoja de coca y el proceso de compra y envío.', 1, '2020-09-23 02:02:43', '2020-09-23 02:02:43', 'Infusión de Hoja de Coca'),
(34, 'Karen', 'Cordero', 'Delisse', '50939328', '3205552053', 'kacosa@hotmail.com', '22-09-2020', 'Hola! Me interesa saber el precio de el mate de hoja de coca y el proceso de compra y envío.', 1, '2020-09-23 02:02:44', '2020-09-23 02:02:44', 'Infusión de Hoja de Coca'),
(35, 'Rosario Mercedes', 'Fernandez Montes', 'ROSARIO S.A.C', '10457636101', '923600238', 'larosamorada22@hotmail.com', '23-09-2020', 'Buen dia! mediante la presente, deseo informes de como puedo tramitar mi LICENCIA DE FUNCIONAMIENTO, (COVID-19) porque he pensado en vender sus productos! gracias, espero respuesta.', 1, '2020-09-23 17:18:50', '2020-09-23 17:18:50', NULL),
(36, 'Rosario Mercedes', 'Fernandez Montes', 'ROSARIO S.A.C', '10457636101', '923600238', 'larosamorada22@hotmail.com', '23-09-2020', 'Buen dia! mediante la presente, deseo informes de como puedo tramitar mi LICENCIA DE FUNCIONAMIENTO, (COVID-19) porque he pensado en vender sus productos! gracias, espero respuesta.', 1, '2020-09-23 17:18:55', '2020-09-23 17:18:55', NULL),
(37, 'Grill', 'Matthias', 'Pharmaserv AG', '??????', '+41 41 340 05 55', 'matthias.grill@pharmaserv.com', '24-09-2020', 'Estimadas señoras y señores,\r\n\r\n \r\n\r\n¿Podría informarnos sobre los precios de 100 g o 1000 g de base de cocaína?\r\n\r\n¿Qué tan alta es la pureza de los lotes actuales?\r\n\r\n¿Existe un certificado de análisis para los lotes actuales?\r\n\r\n \r\n\r\nGracias de antemano.  \r\n\r\n\r\nDr. Matthias Grill\r\n\r\nPharmaserv AG', 1, '2020-09-24 15:21:16', '2020-09-24 15:21:16', NULL),
(38, 'César', 'Rivadeneira', 'independiente', 'pendiente', '0969363060', 'cesarrivadeneira@gmail.com', '24-09-2020', 'Buenos días, por favor quisiera saber los precios del mate de coca en paquete de 25 unidades 100 unidades, y otras cantidades.También quiero saber si hacen envíos a Ecuador o España  y cuanto me costaría ,primero quiero hacer un testing y probar el producto para ver si decido comercializar su producto.\r\nEspero su respuesta Att: César Rivadeneira.', 1, '2020-09-24 21:27:12', '2020-09-24 21:27:12', 'Infusión de Hoja de Coca'),
(39, 'César', 'Rivadeneira', 'independiente', 'pendiente', '0969363060', 'cesarrivadeneira@gmail.com', '24-09-2020', 'Buenos días, por favor quisiera saber los precios del mate de coca en paquete de 25 unidades 100 unidades, y otras cantidades.También quiero saber si hacen envíos a Ecuador o España  y cuanto me costaría ,primero quiero hacer un testing y probar el producto para ver si decido comercializar su producto.\r\nEspero su respuesta Att: César Rivadeneira.', 1, '2020-09-24 21:27:15', '2020-09-24 21:27:15', 'Infusión de Hoja de Coca'),
(40, 'César', 'Rivadeneira', 'independiente', 'pendiente', '0969363060', 'cesarrivadeneira@gmail.com', '24-09-2020', 'Buenos días, por favor quisiera saber los precios del mate de coca en paquete de 25 unidades 100 unidades, y otras cantidades.También quiero saber si hacen envíos a Ecuador o España  y cuanto me costaría ,primero quiero hacer un testing y probar el producto para ver si decido comercializar su producto.\r\nEspero su respuesta Att: César Rivadeneira.', 1, '2020-09-24 21:27:15', '2020-09-24 21:27:15', 'Infusión de Hoja de Coca'),
(41, 'Carmen', 'Navarro', 'particular', 'Carrer Alacant 4, 20', '637300285', 'marblava73@gmail.com', '29-09-2020', 'Quería comprar la harina . Me gustaría saber si es posible enviar a España. Gracias', 1, '2020-09-30 00:20:22', '2020-09-30 00:20:22', 'Hoja de Coca natural en polvo'),
(42, 'Gianella', 'Fabian Llantoy', 'ZELTS IMPORT SAC', '20603779259', '982497661', 'administracion@zeltsperu.com', '29-09-2020', 'Estimados,\r\n\r\nquisiera saber los requisitos para vender coca a su entidad.', 1, '2020-09-30 01:44:35', '2020-09-30 01:44:35', 'Hoja de Coca natural en polvo'),
(43, 'Javier', 'Manrique', 'Tao Center', '52367821', '+34 639 453789', 'tao@taocenter.es', '02-10-2020', 'Buenos días,\r\n\r\nMe pongo en contacto con ustedes desde Madrid, España.\r\n\r\nHe viajado muchas veces al Peru, comprado y disfrutado de sus productos.\r\n\r\nDeseo analizar la posibilidad de importar sus productos a España para comercializarlos en España y si cuadrara al resto de la Comunidad Europea.\r\n\r\nEn esa línea, les agradecería si me pudieran enviar un listado de precios de sus productos para venta, así como condiciones (forma de pago, transporte, etc.). En principio la idea es comercializar una línea de productos de hojas de coca. Por eso no me ciño sólamente a las infusiónes pues disponen de otro tipo.\r\n\r\nAgradecidos, les envía un cordial saludo\r\n\r\nJavier Manrique', 1, '2020-10-02 15:38:46', '2020-10-02 15:38:46', 'Infusión de Hoja de Coca'),
(44, 'Oscar', 'Andrade', 'Particular bussines', 'masscheleinlaan', '0484201948', 'vbong@outlook.com', '05-10-2020', 'Buenos días.\r\nCompre por internet tes de hoja de Coca y me gusto.\r\nTe hablo desde Europa.Bélgica.  Queria preguntar, sobre precios y si pueden enviar a Europa.\r\nMi idea es para emprender un negocio.\r\n\r\nYa me contaran.\r\n\r\nSaludos.', 1, '2020-10-06 02:14:19', '2020-10-06 02:14:19', NULL),
(45, 'Oscar', 'Andrade', 'Particular bussines', 'masscheleinlaan', '0484201948', 'vbong@outlook.com', '05-10-2020', 'Buenos días.\r\nCompre por internet tes de hoja de Coca y me gusto.\r\nTe hablo desde Europa.Bélgica.  Queria preguntar, sobre precios y si pueden enviar a Europa.\r\nMi idea es para emprender un negocio.\r\n\r\nYa me contaran.\r\n\r\nSaludos.', 1, '2020-10-06 02:14:22', '2020-10-06 02:14:22', NULL),
(46, 'Mar', 'Rodriguez', 'underoctobersun design', '10 Cleve Ct', '7192135489', 'themarf4208@gmail.com', '05-10-2020', 'hello id like to buy your tea please', 1, '2020-10-06 04:12:37', '2020-10-06 04:12:37', NULL),
(47, 'Mar', 'Rodriguez', 'underoctobersun design', '10 Cleve Ct', '7192135489', 'themarf4208@gmail.com', '05-10-2020', 'hello id like to buy your tea please', 1, '2020-10-06 04:12:40', '2020-10-06 04:12:40', NULL),
(48, 'Aaron', 'Montenegro', 'Quipu Seattle Restaurante', 'NA', '4254714507', 'montenegrobartra@gmail.com', '06-10-2020', 'Hola, \r\n\r\nSomos un restaurante nuevo Peruano en Seattle, USA. Estamos enteresados en sus hojas de coca. Nos gustaria saber si ya estan exportando a USA y como podemos adquirir sus productos.\r\n\r\nPor favor contactenos por email o Whatsapp.\r\n\r\nGracias\r\n\r\nAaron', 1, '2020-10-06 20:43:10', '2020-10-06 20:43:10', 'Hoja de Coca natural en polvo'),
(49, 'Itziar', 'Martin', 'Particular', '48960', '34946300811', 'txus.unzu@gmail.com', '06-10-2020', 'Vivo en España, en Bilbao y quiero saber donde puedo comprar este producto', 1, '2020-10-07 01:16:00', '2020-10-07 01:16:00', 'Infusión de Hoja de Coca'),
(50, 'Taniate', 'White', 'KCreations', '1', '19085237449', 'kstands4k@gmail.com', '07-10-2020', NULL, 1, '2020-10-07 21:42:26', '2020-10-07 21:42:26', 'Infusión de Hoja de Coca'),
(51, 'Taniate', 'White', 'KCreations', '1', '19085237449', 'kstands4k@gmail.com', '07-10-2020', NULL, 1, '2020-10-07 21:42:28', '2020-10-07 21:42:28', 'Infusión de Hoja de Coca'),
(52, 'Ismail', 'Al Marchohi', 'New Corner Group', 'BE0748769625', '+32456196219', 'contact@newcornergroup.com', '07-10-2020', 'Hola Enaco,\r\n\r\nSomos una empresa con sede en Amberes, Bélgica con gran interés en su polvo atomizado de hoja de coca sin alcaloide.\r\n\r\nQueremos utilizar esto para mejorar todo tipo de bebidas, desde té helado hasta bebidas energéticas, refrescos y leche con chocolate. ¿Es posible comprar una bolsa de 5 kg directamente de usted?\r\n\r\nPuede encontrar más información sobre nuestra empresa y la dirección de entrega aquí:\r\nNombre de la empresa: New Corner Group\r\nNúmero de IVA: BE0748.769.625\r\nDirección: Jef Lambeauxstraat 41, 2020 Amberes, Bélgica\r\nTeléfono móvil: +32456196219\r\n\r\nMe gustaría conocer sus precios, incluido el envío, a la dirección anterior y espero tener una buena colaboración.\r\n\r\nSaludos,\r\nIsmail Al Marchohi', 1, '2020-10-07 23:09:46', '2020-10-07 23:09:46', 'Polvo atomizado de Hoja de Coca'),
(53, 'Estefany Isamar', 'Torres Felix', 'Machu Picchu Foods', '20500985322', '935749286', 'torresestefany35@gmail.com', '08-10-2020', 'Buen noches, favor requiero 5 kg de producto para una investigación de tesis.', 1, '2020-10-08 06:22:57', '2020-10-08 06:22:57', 'Polvo atomizado de Hoja de Coca'),
(54, 'Luis Joyse', 'Aldea poves', 'Luis Joyse Aldea Poves', '10466258259', '948331228', 'luyoalpo25@gmail.com', '09-10-2020', 'Cómo se necesita para venderle mi producto', 1, '2020-10-09 19:31:14', '2020-10-09 19:31:14', NULL),
(55, 'Luis Joyse', 'Aldea poves', 'Luis Joyse Aldea Poves', '10466258259', '948331228', 'luyoalpo25@gmail.com', '09-10-2020', 'Cómo se necesita para venderle mi producto', 1, '2020-10-09 19:31:18', '2020-10-09 19:31:18', NULL),
(56, 'MICHELLE STEPHANIE', 'ALVARADO NATIVIDAD', '-', '0', '937413204', 'michelle.alvaradon@gmail.com', '12-10-2020', 'Hola, no sabía que existía esta empresa. Me parece bien. Actualmente, busco prácticas pre profesionales. Me gustaría saber si hay oportunidad de practicar en esta institución. Yo soy estudiante de 10mo ciclo de Psicología de la Pontificia Universidad Católica del Perú. Agradeceré su respuesta. En todo caso puedo enviarles mi CV si gustan.', 1, '2020-10-12 10:15:33', '2020-10-12 10:15:33', NULL),
(57, 'MICHELLE STEPHANIE', 'ALVARADO NATIVIDAD', '-', '0', '937413204', 'michelle.alvaradon@gmail.com', '12-10-2020', 'Hola, no sabía que existía esta empresa. Me parece bien. Actualmente, busco prácticas pre profesionales. Me gustaría saber si hay oportunidad de practicar en esta institución. Yo soy estudiante de 10mo ciclo de Psicología de la Pontificia Universidad Católica del Perú. Agradeceré su respuesta. En todo caso puedo enviarles mi CV si gustan.', 1, '2020-10-12 10:15:35', '2020-10-12 10:15:35', NULL),
(58, 'MICHELLE STEPHANIE', 'ALVARADO NATIVIDAD', '-', '0', '937413204', 'michelle.alvaradon@gmail.com', '12-10-2020', 'Hola, no sabía que existía esta empresa. Me parece bien. Actualmente, busco prácticas pre profesionales. Me gustaría saber si hay oportunidad de practicar en esta institución. Yo soy estudiante de 10mo ciclo de Psicología de la Pontificia Universidad Católica del Perú. Agradeceré su respuesta. En todo caso puedo enviarles mi CV si gustan.', 1, '2020-10-12 10:15:36', '2020-10-12 10:15:36', NULL),
(59, 'MICHELLE STEPHANIE', 'ALVARADO NATIVIDAD', '-', '0', '937413204', 'michelle.alvaradon@gmail.com', '12-10-2020', 'Hola, no sabía que existía esta empresa. Me parece bien. Actualmente, busco prácticas pre profesionales. Me gustaría saber si hay oportunidad de practicar en esta institución. Yo soy estudiante de 10mo ciclo de Psicología de la Pontificia Universidad Católica del Perú. Agradeceré su respuesta. En todo caso puedo enviarles mi CV si gustan.', 1, '2020-10-12 10:15:37', '2020-10-12 10:15:37', NULL),
(60, 'Adriana', 'Bell', 'Freelance', '.', '+34722339758', 'adrianabellrv@gmail.com', '14-10-2020', 'Buenos días,\r\nSoy Adriana Bell y trabajo como redactora freelance y además colaboro con diferentes blogs.\r\nMe pongo en contacto con ustedes porque querría saber si hay alguna posibilidad de publicar mis artículos (que incluyen el enlace do-follow) en el blog de su sitio web ( enaco.com.pe).\r\nLes podría ofrecer una recompensa económica por ello.\r\n¿Qué les parece?', 1, '2020-10-14 14:11:57', '2020-10-14 14:11:57', 'PROXIMAMENTE'),
(61, 'Italo', 'Hancco Quispe', '.', '10480240079', '927746763', 'italoohq.cusco@gmail.com', '14-10-2020', 'Deseo formar parte del proceso de seleccion para el puesto de asistente en recursos humanos', 1, '2020-10-14 19:29:27', '2020-10-14 19:29:27', 'PROXIMAMENTE'),
(62, 'Gerardo', 'Jacobo', 'Personal', 'G28490334', '+525548136358', 'geracuc@gmail.com', '15-10-2020', 'Buenas noches: ¿Qué costo tiene la bolsa de harina de coca de 500 gramos, la caja de mate de coca de 100 filtrantes? ¿Y la caja de menta y coca presentación de 25 filtrantes? \r\nGracias.', 1, '2020-10-16 04:57:23', '2020-10-16 04:57:23', 'Hoja de Coca natural en polvo'),
(63, 'Calum', 'Wharmby', 'TBD', 'TBD', '07539053315', 'wharmbyc@me.com', '18-10-2020', 'Estimado ENACO,\r\n\r\nSoy un ciudadano del Reino Unido, interesado en iniciar un nuevo negocio utilizando hoja de coca descocainizada. No puedo encontrar una manera de enumerar su sitio web en inglés, así que hice todo lo posible para entenderlo a través de un traductor. He traducido este mensaje al español al final de este mensaje para aclarar.\r\n\r\nHe examinado el proceso que se enumera para convertirse en comerciante de hoja de coca en su sitio web, aunque parece muy largo y burocrático. Supongo que esto se debe a que la hoja de coca no ha sido procesada para eliminar la cocaína, por lo tanto, los requisitos para declaraciones juradas y verificaciones de antecedentes, etc.\r\n\r\nPara probar el producto, me gustaría 1 kg de polo atomizado de Hoja de coca (sin alcaloides). ¿Cuál es su plazo de entrega aproximado al Reino Unido y cuánto costaría?\r\n\r\n¿Puede enviarnos una lista de precios para los productos de hoja de coca decocainizados?\r\n\r\nEspero su respuesta y espero que juntos podamos comercializar la hoja de coca internacionalmente.\r\n\r\nTuyo sinceramente,\r\n\r\n\r\nCalum Wharmby\r\n\r\n-------------------------------\r\n\r\nDear ENACO,\r\n\r\nI am a UK citizen, interested in starting a new business using de-cocainised coca leaf. I am unable to find a way to list your website in English so have tried my best to understand it through a translator. I have translated this message into Spanish at the bottom of this message to clarify.\r\n\r\nI have looked at the process listed for becoming a merchant of coca leaf on your website, though it seems very long winded and bureaucratic. I assume this is because the coca leaf hasn\'t been processed to remove the cocaine hence the requirements for affidavits and background checks etc.\r\n\r\nTo sample the product, I would like 1kg of polo atomizado de Hoja de coca (without alkaloids). What is your approximate delivery time to the United Kingdom and how much would this cost?\r\n\r\nCan you please forward a price list for decocainised coca leaf products?\r\n\r\nI look forward to your response and hopefully we can commercialise coca leaf internationally together.\r\n\r\nYours sincerely,\r\n\r\n\r\nCalum Wharmby', 1, '2020-10-18 20:06:01', '2020-10-18 20:06:01', 'Polvo atomizado de Hoja de Coca'),
(64, 'Calum', 'Wharmby', 'TBD', 'TBD', '07539053315', 'wharmbyc@me.com', '18-10-2020', 'Estimado ENACO,\r\n\r\nSoy un ciudadano del Reino Unido, interesado en iniciar un nuevo negocio utilizando hoja de coca descocainizada. No puedo encontrar una manera de enumerar su sitio web en inglés, así que hice todo lo posible para entenderlo a través de un traductor. He traducido este mensaje al español al final de este mensaje para aclarar.\r\n\r\nHe examinado el proceso que se enumera para convertirse en comerciante de hoja de coca en su sitio web, aunque parece muy largo y burocrático. Supongo que esto se debe a que la hoja de coca no ha sido procesada para eliminar la cocaína, por lo tanto, los requisitos para declaraciones juradas y verificaciones de antecedentes, etc.\r\n\r\nPara probar el producto, me gustaría 1 kg de polo atomizado de Hoja de coca (sin alcaloides). ¿Cuál es su plazo de entrega aproximado al Reino Unido y cuánto costaría?\r\n\r\n¿Puede enviarnos una lista de precios para los productos de hoja de coca decocainizados?\r\n\r\nEspero su respuesta y espero que juntos podamos comercializar la hoja de coca internacionalmente.\r\n\r\nTuyo sinceramente,\r\n\r\n\r\nCalum Wharmby\r\n\r\n-------------------------------\r\n\r\nDear ENACO,\r\n\r\nI am a UK citizen, interested in starting a new business using de-cocainised coca leaf. I am unable to find a way to list your website in English so have tried my best to understand it through a translator. I have translated this message into Spanish at the bottom of this message to clarify.\r\n\r\nI have looked at the process listed for becoming a merchant of coca leaf on your website, though it seems very long winded and bureaucratic. I assume this is because the coca leaf hasn\'t been processed to remove the cocaine hence the requirements for affidavits and background checks etc.\r\n\r\nTo sample the product, I would like 1kg of polo atomizado de Hoja de coca (without alkaloids). What is your approximate delivery time to the United Kingdom and how much would this cost?\r\n\r\nCan you please forward a price list for decocainised coca leaf products?\r\n\r\nI look forward to your response and hopefully we can commercialise coca leaf internationally together.\r\n\r\nYours sincerely,\r\n\r\n\r\nCalum Wharmby', 1, '2020-10-18 20:06:02', '2020-10-18 20:06:02', 'Polvo atomizado de Hoja de Coca'),
(65, 'SILVINA', 'SALVATIERRA', 'TIENDA DON LINO', '10210044359', '996951323', 'gildalina11@hotmail.com', '19-10-2020', 'SRES ENACO BUENAS TARDES, QUEREMOS INFORMACION PARA PODER VENDER HOJAS DE COCA. GRACIAS', 1, '2020-10-20 03:54:43', '2020-10-20 03:54:43', 'Menta y Hoja de Coca'),
(66, 'CARLA', 'CHYZY', 'CHYZY LOVE', 'Euler 152 piso 1 interior 1, POLANCO IV SECCION, CIUDAD DE MEXICO, CIUDAD DE MEXICO, 11550', '5519538958', 'cjchyzy@gmail.com', '20-10-2020', 'Hola, estoy interesada en la compra de hoja de coca en polvo para fabricar una marca de te.', 1, '2020-10-20 11:17:19', '2020-10-20 11:17:19', 'Hoja de Coca natural en polvo'),
(67, 'Ronnie Patrick Fabio', 'Flores Garcia', 'Chachakuma Mistico', '10700043652', '945189395', 'singalor@hotmail.com', '21-10-2020', 'Cuanto es el costo para la venta de coca como comerciante', 1, '2020-10-22 03:52:06', '2020-10-22 03:52:06', NULL),
(68, 'kira kiomara', 'Melgar Villaverde', 'D&M', '10723113054', '942399990', 'kiramelgar26@gmail.com', '22-10-2020', NULL, 1, '2020-10-22 05:37:10', '2020-10-22 05:37:10', 'Menta y Hoja de Coca'),
(69, 'Jorge', 'Muñoz Muñoz', 'Inter Andina JGBL SAC', '20602029558', '976511589', 'jlmunoz@interandina.com.pe', '22-10-2020', 'Nos interesa distribuir sus productos en los canales moderno, supermercados, grifos, Tambo, Oxxo, etc.', 1, '2020-10-23 00:34:50', '2020-10-23 00:34:50', 'Infusión de Hoja de Coca'),
(70, 'Mario', 'Soto', 'Mario Soto', '20106014782', '971089647', 'ariomvet@gmail.com', '23-10-2020', 'Buenos días quisiera saber si están atendiendo en su sede de San miguel, y en todo caso cual es el horario de atención, mis 2 padres toman harina de coca como suplemento en su desayuno lamentablemente ya se agotó.\r\n\r\nEn todo caso, como son las ventas en esta coyuntura de la pandemia?, hacen delivery?\r\n\r\nGracias', 1, '2020-10-23 21:51:14', '2020-10-23 21:51:14', 'Hoja de Coca natural en polvo'),
(71, 'Mario', 'Soto', 'Mario Soto', '20106014782', '971089647', 'ariomvet@gmail.com', '23-10-2020', 'Buenos días quisiera saber si están atendiendo en su sede de San miguel, y en todo caso cual es el horario de atención, mis 2 padres toman harina de coca como suplemento en su desayuno lamentablemente ya se agotó.\r\n\r\nEn todo caso, como son las ventas en esta coyuntura de la pandemia?, hacen delivery?\r\n\r\nGracias', 1, '2020-10-23 21:51:17', '2020-10-23 21:51:17', 'Hoja de Coca natural en polvo'),
(72, 'Fausto', 'Jauregui', 'Personal', '1709440885', '0991337253', 'faustojauregui1@hotmail.com', '26-10-2020', NULL, 1, '2020-10-26 21:19:33', '2020-10-26 21:19:33', 'Hoja de Coca natural en polvo'),
(73, 'CARLOS', 'MARTINEZ ROMERO', 'RECOLECC', '20601870330', '922267328', 'cmartinez@recolecc.com.pe', '27-10-2020', 'GESTIÒN AMBIENTAL DE LOS BIENES DENOMINADOS RESIDUOS ELECTRONICOS EN EL ESTADO\r\nBuenas tardes, por medio del presente queremos presentarnos somos RECOLECC sistema de Manejo de Residuos Electrónicos certificado por el Ministerio del Ambiente, que esta semana por primera vez ha gestionado los bienes denominados residuos electrónicos de ESSALUD que se encontraban acumulados por más de 10 años, con lo cual según el nuevo marco normativo aseguramos su tratamiento ambiental de este tipo de residuos, sin afectar la salud y el ambiente; por todo esto le escribo para solicitarle tenga a bien permitirnos a través de su GESTIÒN una capacitación a todos sus asociados (recomendamos gerencias de patrimonio, logística, operaciones y ambiental) sobre el nuevo marco normativo la Directiva N° 001-2020-EF/54.01 “PROCEDIMIENTOS PARA LA GESTIÓN DE BIENES MUEBLES ESTATALES CALIFICADOS COMO RESIDUOS DE APARATOS ELÉCTRICOS Y ELECTRÓNICOS - RAEE” con R.D 008-2020-EF/54.1 sin ningún costo y desarrollado por profesionales especialistas en patrimonio y reciclaje de residuos de aparatos eléctricos y electrónicos.\r\n\r\nComo referencia le dejo el enlace de la entrega de bienes RAEE de Essalud.\r\n\r\nhttps://www.linkedin.com/feed/update/urn:li:activity:6722934402738872320\r\nhttps://www.facebook.com/Recolecc-104043794326786\r\n\r\nNota: Adjunto imágenes de la entrega de RAEE por Essalud\r\n\r\nMuchas gracias por su atención.', 1, '2020-10-27 19:23:05', '2020-10-27 19:23:05', NULL),
(74, 'CARLOS', 'MARTINEZ ROMERO', 'RECOLECC', '20601870330', '922267328', 'cmartinez@recolecc.com.pe', '27-10-2020', 'GESTIÒN AMBIENTAL DE LOS BIENES DENOMINADOS RESIDUOS ELECTRONICOS EN EL ESTADO\r\nBuenas tardes, por medio del presente queremos presentarnos somos RECOLECC sistema de Manejo de Residuos Electrónicos certificado por el Ministerio del Ambiente, que esta semana por primera vez ha gestionado los bienes denominados residuos electrónicos de ESSALUD que se encontraban acumulados por más de 10 años, con lo cual según el nuevo marco normativo aseguramos su tratamiento ambiental de este tipo de residuos, sin afectar la salud y el ambiente; por todo esto le escribo para solicitarle tenga a bien permitirnos a través de su GESTIÒN una capacitación a todos sus asociados (recomendamos gerencias de patrimonio, logística, operaciones y ambiental) sobre el nuevo marco normativo la Directiva N° 001-2020-EF/54.01 “PROCEDIMIENTOS PARA LA GESTIÓN DE BIENES MUEBLES ESTATALES CALIFICADOS COMO RESIDUOS DE APARATOS ELÉCTRICOS Y ELECTRÓNICOS - RAEE” con R.D 008-2020-EF/54.1 sin ningún costo y desarrollado por profesionales especialistas en patrimonio y reciclaje de residuos de aparatos eléctricos y electrónicos.\r\n\r\nComo referencia le dejo el enlace de la entrega de bienes RAEE de Essalud.\r\n\r\nhttps://www.linkedin.com/feed/update/urn:li:activity:6722934402738872320\r\nhttps://www.facebook.com/Recolecc-104043794326786\r\n\r\nNota: Adjunto imágenes de la entrega de RAEE por Essalud\r\n\r\nMuchas gracias por su atención.', 1, '2020-10-27 19:23:07', '2020-10-27 19:23:07', NULL),
(75, 'Romana', 'Bezzubikoff', 'En formacion', 'En tramite', '960-961-061', 'rommyvargasb@yahoo.com', '02-11-2020', 'Buenos dias, \r\nMe gustaria solicitar informacion para poder hacer compra de MATE DE COCA para exportacion no tradicional en cantidades pequenas. Estamos en fase de elaboracion del proyecto. Cual seria el precio y cual es el minimo que se puede comprar con precio de mayorista? \r\nTambien me gustaria saber si necesariamente sale con la marca Delisse o uno puede envasarlo bajo otra marca? \r\nEl destino es paises latinoamericanos. \r\n\r\nMil gracias. Por favor, le rogaria me conteste al correo electronico mejor que al telefono. \r\nAtentamente, \r\nIng. Romana Bezzubikoff', 1, '2020-11-02 23:24:34', '2020-11-02 23:24:34', 'Infusión de Hoja de Coca'),
(76, 'LIZBETH', 'HILARI LUQUE', 'AGROINDUSTRIA JOVEN BETO', '20603340257', '949198562', 'LIZZY.HILARI@GMAIL.COM', '04-11-2020', 'Buenas tardes deseo comercializar hoja de coca en Arequipa, que requisitos necesito. Tendrá una sede aquí en Arequipa', 1, '2020-11-05 03:55:24', '2020-11-05 03:55:24', 'Menta y Hoja de Coca'),
(77, 'Danter', 'Cachique', 'Agroindustrias Sacha Foods SAC', '20605755195', '942631847', 'dcachique@gmail.com', '06-11-2020', 'Buenos días, tengo un vivero de plantas aromáticas y medicinales, mucho de mis Clientes me piden plantones de Coca, como ornamental y medicinal...desearía saber cual es el procedimiento para solicitar el permiso respectivo para poder comercializar plantones de coca.. muy agradecido. Cordial saludo', 1, '2020-11-06 23:04:20', '2020-11-06 23:04:20', 'PROXIMAMENTE'),
(78, 'Danter', 'Cachique', 'Agroindustrias Sacha Foods SAC', '20605755195', '942631847', 'dcachique@gmail.com', '06-11-2020', 'Buenos días, tengo un vivero de plantas aromáticas y medicinales, mucho de mis Clientes me piden plantones de Coca, como ornamental y medicinal...desearía saber cual es el procedimiento para solicitar el permiso respectivo para poder comercializar plantones de coca.. muy agradecido. Cordial saludo', 1, '2020-11-06 23:04:22', '2020-11-06 23:04:22', 'PROXIMAMENTE'),
(79, 'JUAN DE DIOS', 'POMARES BANCES', 'Persona natural', 'x-x-x-x-x-x', '967982276', 'jpomares@minagri.gob.pe', '09-11-2020', 'Necesito comprar harina de coca, puedo ir a la Av. Universitaria, están atendiendo?', 1, '2020-11-09 20:56:53', '2020-11-09 20:56:53', 'Polvo atomizado de Hoja de Coca'),
(80, 'Edwin Lalo', 'Torres condor', 'Torres', '10464563437', '955606058', 'multiplocatt@hotmail.com', '10-11-2020', 'Mi número de celular 955606058 urgente porfabor', 1, '2020-11-10 22:52:41', '2020-11-10 22:52:41', 'Menta y Hoja de Coca'),
(81, 'Edwin Lalo', 'Torres condor', 'Torres', '10464563437', '955606058', 'multiplocatt@hotmail.com', '10-11-2020', 'Mi número es 955606058 quiero por mayor urgente', 1, '2020-11-10 23:06:25', '2020-11-10 23:06:25', 'Menta y Hoja de Coca'),
(82, 'Edwin Lalo', 'Torres condor', 'Torres', '10464563437', '955606058', 'multiplocatt@hotmail.com', '10-11-2020', 'Mi número es 955606058 quiero por mayor urgente', 1, '2020-11-10 23:06:28', '2020-11-10 23:06:28', 'Menta y Hoja de Coca'),
(83, 'herminia', 'ruiz asparrin', 'sn', 'sn', '976959634', 'bibihuaman_25@outlook.com', '10-11-2020', 'buenas tardes, deseo comenzar a comercializar hojas de coca, por favor brindarme proceso de autorizacion y el tramite a seguir.\r\nme eh comunicado con el  numero 01 6584703, que me brindó un numero del para que me informen, pero cuando llamo me dice la señora que es numero equivocado.981810220 , favor de facilitarme a que n umero me debo comunicar para que me brinden informacion', 1, '2020-11-10 23:08:20', '2020-11-10 23:08:20', 'PROXIMAMENTE'),
(84, 'herminia', 'ruiz asparrin', 'sn', 'sn', '976959634', 'bibihuaman_25@outlook.com', '10-11-2020', 'buenas tardes, deseo comenzar a comercializar hojas de coca, por favor brindarme proceso de autorizacion y el tramite a seguir.\r\nme eh comunicado con el  numero 01 6584703, que me brindó un numero del para que me informen, pero cuando llamo me dice la señora que es numero equivocado.981810220 , favor de facilitarme a que n umero me debo comunicar para que me brinden informacion', 1, '2020-11-10 23:08:23', '2020-11-10 23:08:23', 'PROXIMAMENTE'),
(85, 'herminia', 'ruiz asparrin', 'sn', 'sn', '976959634', 'bibihuaman_25@outlook.com', '10-11-2020', 'buenas tardes, deseo comenzar a comercializar hojas de coca, por favor brindarme proceso de autorizacion y el tramite a seguir.\r\nme eh comunicado con el  numero 01 6584703, que me brindó un numero del para que me informen, pero cuando llamo me dice la señora que es numero equivocado.981810220 , favor de facilitarme a que n umero me debo comunicar para que me brinden informacion', 1, '2020-11-10 23:08:24', '2020-11-10 23:08:24', 'PROXIMAMENTE'),
(86, 'Gazzi', 'Jacob', 'Line Cu', '17.084.726-1', '+56988040802', 'gazzi.andres@gmail.com', '14-11-2020', 'Hola,\r\nSoy Gazzi Jacob, me gustaría saber si tienen experiencia exportando hacia Chile ya que me gustaría distribuir sus productos en mi región. \r\nSaludos Cordiales', 1, '2020-11-15 02:23:59', '2020-11-15 02:23:59', 'Menta y Hoja de Coca'),
(87, 'Duroy', 'Raphael', 'Amare Horto', 'de', '0650082643', 'raphaelduroy@gmail.com', '16-11-2020', 'hola, yo quiero comprar llaves de coca, semillas y mate de coca, possible de enviar a francia?\r\n\r\nGracias.', 1, '2020-11-16 10:43:11', '2020-11-16 10:43:11', 'Uña de gato con hoja de coca'),
(88, 'Ernesto', 'Bustamante', 'delindio sa', '20251213845', '998570119', 'delindio_51@hotmail.com', '18-11-2020', 'Donde  puedo comprar en lima o miraflores', 1, '2020-11-18 22:47:49', '2020-11-18 22:47:49', 'Hoja de Coca natural en polvo'),
(89, 'Franck', 'Morales', 'Agro Exportadora De Plantas Ornamentales', '531043-1', '50242120629', 'oragroex17@gmail.com', '19-11-2020', 'Saludos de Guatemala. En viaje de negocios al Peru compre sus productos y son de excelente calidad. Importamos todas las semanas Esparragos verdes frescos de J G Produce S.A.C. vía aérea DHL : Interés en comprar, distribuir y ser representantes de las 5 presentaciones que producen en Guatemala, con las presentaciones de bolsitas de té. Enviar información de certificados que avalen su calidad y cumplimiento de normas internacionales, composición en % de las diferentes presentaciones para presentarlas en Ministerio de Agricultura y obtener Licencia Importacion. Precios en US D', 1, '2020-11-19 08:41:56', '2020-11-19 08:41:56', 'Uña de gato con hoja de coca'),
(90, 'DENIS KLEIVER', 'ESTRADA SANTCRUZ', 'D Y B BOUTIQUE', '10722182125', '947172048', 'deniskleiver180@gmail.com', '21-11-2020', 'Estimados buenas tardes.\r\nsolicito información para integrar parte de su organización en lo que es el cultivo de hoja de coca. Me podrían  brindar toda la posible información requerida, espero una respuesta.\r\n\r\ngracias \r\nsaludos.\r\natte.\r\nDenis estrada', 1, '2020-11-21 23:22:59', '2020-11-21 23:22:59', 'PROXIMAMENTE'),
(91, 'Victoria', 'Fokina', 'GraceTorg', 'Russia', '+79163742034', 'coop@interproduct-wl.com', '24-11-2020', 'Hello! \r\nMy name is Victoria, I’m the representative of company “GraceTorg”. \r\nWe make energy drinks in Russia. We would like to offer you a partnership. We are interested in buying coca leaf’s liquid concentrate with all needable documents for custom house (certificates of quality). We will be glad to discuss cooperation opportunities. Thanks for your attention. \r\nBest regards, \r\nFokina Victoria \r\nHead of Cooperation Department  \r\ncoop@interproduct-wl.com \r\n+79163742034 WhatsApp', 1, '2020-11-24 19:30:15', '2020-11-24 19:30:15', NULL),
(92, 'Juan carlos', 'Huaman  yupanqui', 'Sin nombre', '7777896', '970203678', 'juanyupa-08@hotmail.com', '24-11-2020', 'Progreso en la familia', 1, '2020-11-25 03:07:19', '2020-11-25 03:07:19', 'Infusión de Hoja de Coca'),
(93, 'Juan carlos', 'Huaman  yupanqui', 'Sin nombre', '7777896', '970203678', 'juanyupa-08@hotmail.com', '24-11-2020', 'Progreso en la familia', 1, '2020-11-25 03:07:21', '2020-11-25 03:07:21', 'Infusión de Hoja de Coca'),
(94, 'Plantsource', 'The Nursery, Moorend Lane', 'U.K.', '+441811218880', '+447801672247', 'pulsasecurity@gmail.com', '27-11-2020', 'Please put my details onto your database, we are interested in distributing a selection of your tea products.  Thank you', 1, '2020-11-28 04:52:34', '2020-11-28 04:52:34', NULL),
(95, 'Yesder', 'dueñas', 'Shadu academy', 'Jr.tacna445, PUNO', '950486865', 'yesderd@gmail.com', '28-11-2020', 'Hola un gusto poder saludarlos quién representa a shadu academy somos una academia online quién se dedica a brindar información educativa en torno a las plantas naturales medicinales empleando fórmulas, enseñando recetas con la finalidad de mejorar la salud y la calidad de vida de las personas tenemos muchísimos participantes estudiantes a nivel de todo el mundo llámese Miami, Venezuela,  Colombia, Argentina, chile ecuador  y muchos otros los cuales nos consultan constantemente como ellos podrían adquirir la plantita de la hoja de coca y a partir de ello utilizarla y consumirla con la finalidad de objetivos curativos.\r\nNo encuentro respuesta para darles. \r\nAgradezco su pronta y favorable respuesta. Gracias.', 1, '2020-11-29 03:38:07', '2020-11-29 03:38:07', 'Hoja de Coca natural en polvo'),
(96, 'Federico', 'Carpio', 'Remafe', '20603111649', '984754265', 'ficocarpiovargas@gmail.com', '29-11-2020', 'Quisiera bolsa de 500 gr, 2 cajas grandes de Muna, dirección jirón Ricardo palma NO Urb santa Mónica wuanchaq', 1, '2020-11-29 10:14:17', '2020-11-29 10:14:17', 'Hoja de Coca natural en polvo'),
(97, 'YULMA RUTH', 'TANTALEAN CCAHUA', 'FIRSI SAC', '20605558861', '954 144 877', 'yulma2196@outlook.com', '30-11-2020', 'Lo saludo cordialmente\r\nSirva este medio para saludarle y dirigirme a su despacho del cual representa y a la vez presentarle a nuestra Empresa FIRSI SAC empresa formalmente constituida que ofrece sus servicios de Seguridad Privada y/o limpieza y desinfección.\r\nAsimismo, queremos aprovechar para manifestarle que estamos a su disposición para servirle. por tal motivo, estaremos atentos para resolver sus dudas y necesidades. \r\nSin otro particular, nos despedimos de Ud. agradeciendo su disposición para atender esta carta.\r\nAtte.: FIRSI SAC', 1, '2020-11-30 05:42:36', '2020-11-30 05:42:36', NULL),
(98, 'YULMA RUTH', 'TANTALEAN CCAHUA', 'FIRSI SAC', '20605558861', '954 144 877', 'yulma2196@outlook.com', '30-11-2020', 'Lo saludo cordialmente\r\nSirva este medio para saludarle y dirigirme a su despacho del cual representa y a la vez presentarle a nuestra Empresa FIRSI SAC empresa formalmente constituida que ofrece sus servicios de Seguridad Privada y/o limpieza y desinfección.\r\nAsimismo, queremos aprovechar para manifestarle que estamos a su disposición para servirle. por tal motivo, estaremos atentos para resolver sus dudas y necesidades. \r\nSin otro particular, nos despedimos de Ud. agradeciendo su disposición para atender esta carta.\r\nAtte.: FIRSI SAC', 1, '2020-11-30 05:42:38', '2020-11-30 05:42:38', NULL),
(99, 'YULMA RUTH', 'TANTALEAN CCAHUA', 'FIRSI SAC', '20605558861', '954 144 877', 'yulma2196@outlook.com', '30-11-2020', 'Lo saludo cordialmente\r\nSirva este medio para saludarle y dirigirme a su despacho del cual representa y a la vez presentarle a nuestra Empresa FIRSI SAC empresa formalmente constituida que ofrece sus servicios de Seguridad Privada y/o limpieza y desinfección.\r\nAsimismo, queremos aprovechar para manifestarle que estamos a su disposición para servirle. por tal motivo, estaremos atentos para resolver sus dudas y necesidades. \r\nSin otro particular, nos despedimos de Ud. agradeciendo su disposición para atender esta carta.\r\nAtte.: FIRSI SAC', 1, '2020-11-30 05:42:38', '2020-11-30 05:42:38', NULL),
(100, 'YULMA RUTH', 'TANTALEAN CCAHUA', 'FIRSI SAC', '20605558861', '954 144 877', 'yulma2196@outlook.com', '30-11-2020', 'Lo saludo cordialmente\r\nSirva este medio para saludarle y dirigirme a su despacho del cual representa y a la vez presentarle a nuestra Empresa FIRSI SAC empresa formalmente constituida que ofrece sus servicios de Seguridad Privada y/o limpieza y desinfección.\r\nAsimismo, queremos aprovechar para manifestarle que estamos a su disposición para servirle. por tal motivo, estaremos atentos para resolver sus dudas y necesidades. \r\nSin otro particular, nos despedimos de Ud. agradeciendo su disposición para atender esta carta.\r\nAtte.: FIRSI SAC', 1, '2020-11-30 05:42:39', '2020-11-30 05:42:39', NULL),
(101, 'Pierre', 'Winter', 'Pierre Winter MEI', '12 de outubro, 2079', '+5545984043919', 'pi1pi2pi3@gmail.com', '30-11-2020', 'Buenos dias. Nos queda hablar con vosotros acerca de sus productos y priecios.\r\n\r\nPierre Winter', 1, '2020-12-01 00:38:51', '2020-12-01 00:38:51', 'Polvo atomizado de Hoja de Coca'),
(102, 'Ronald', 'Gonzales', 'Ronald Networks eirl', 'Jr. Julio C. Delgado # 169', '945473714', 'ronaldnetworks@gmail.com', '02-12-2020', NULL, 1, '2020-12-02 07:10:37', '2020-12-02 07:10:37', 'Kintu'),
(103, 'ELIANA', 'DOLORIER', 'MUNDO PUBLICITARIO DOLORIER SAC', '20606462396', '936990862', 'elianadm@hotmail.com', '02-12-2020', 'QUISIERA COMPRAR LOS TE DELISSE DE TODOS LOS SABORES POR MAYOR.\r\nPOR FAVOR SOLICITO PRECIOS .\r\nGRACIAS.', 1, '2020-12-02 08:02:46', '2020-12-02 08:02:46', 'Cocalyptuss'),
(104, 'Meliño', 'diaz', 'grupogreenplanet@gmail.com', '20570874803', '930629923', 'grupogreenplanet@gmail.com', '02-12-2020', 'buenas tardes quisieramos que nos envie una cotización  de extracto  de hoja de coca 10 kg tambien cotícenos hoja de cxoca a granel cantidad de 100 kg.', 1, '2020-12-02 23:39:53', '2020-12-02 23:39:53', 'Polvo atomizado de Hoja de Coca'),
(105, 'Victor', 'Lopez', 'Particular', '56420', '5563171637', 'victorooez@gmail.com', '07-12-2020', NULL, 1, '2020-12-07 09:23:37', '2020-12-07 09:23:37', 'Infusión de Hoja de Coca'),
(106, 'Victor', 'Lopez', 'Particular', '56420', '5563171637', 'victorooez@gmail.com', '07-12-2020', 'Cuánto cuesta', 1, '2020-12-07 09:24:08', '2020-12-07 09:24:08', 'Infusión de Hoja de Coca'),
(107, 'Victor', 'Lopez', 'Particular', '56420', '5563171637', 'victorooez@gmail.com', '07-12-2020', 'Cuánto cuesta', 1, '2020-12-07 09:24:11', '2020-12-07 09:24:11', 'Infusión de Hoja de Coca'),
(108, 'Cynthia', 'Odika', 'Pink Butter LLC', '00000000000', '+17134943793', 'cynthiaodika@icloud.com', '07-12-2020', 'I would like to make an inquiry about the purchase of decocainized (no alkaloids) coca leaf powder to be shipped to America. \r\nKilos.', 1, '2020-12-07 13:11:03', '2020-12-07 13:11:03', 'Polvo atomizado de Hoja de Coca'),
(109, 'Cynthia', 'Odika', 'Pink Butter LLC', '00000000000', '+17134943793', 'cynthiaodika@icloud.com', '07-12-2020', 'I would like to make an inquiry about the purchase of decocainized (no alkaloids) coca leaf powder to be shipped to America. \r\nKilos.', 1, '2020-12-07 13:11:05', '2020-12-07 13:11:05', 'Polvo atomizado de Hoja de Coca'),
(110, 'Pedro Roberto', 'Legrand Rendon', 'PRONACO', '10071939648', '950018886', 'pronaco@outlook.com', '09-12-2020', 'Muy estimados;\r\nReciban un cordial saludo, les envio el presente para consultarles si se puede enviar al extranjero productos  elaborados con la  harina de coca sin alcaloide, por ejemplo galletas, chocolates, caramelos etc. \r\nQuedo en espera de su gentil respuesta, gracias.\r\nCordialmente,\r\nPedro Legrand', 1, '2020-12-09 16:53:57', '2020-12-09 16:53:57', NULL),
(111, 'FREDY', 'CHAVEZ PARDAVE', 'INDIVIDUAL', '10417216869', '962938006', 'FRECHAP007@HOTMAIL.COM', '10-12-2020', 'PROVEER MATERIA PRIMA HOJA DE COCA.', 1, '2020-12-11 02:53:00', '2020-12-11 02:53:00', 'Infusión de Hoja de Coca'),
(112, 'RICHARD WILMER', 'GARAY MERCADO', 'Richard', '10421911211', '982497661', 'wgaray241@hotmail.com', '13-12-2020', 'Quiero desarrollar el producto de harina de coca orgánica.\r\npara lo cual solicito las informaciones correspondientes como es autorizaciones para la siembra  y comercialización.', 1, '2020-12-13 06:51:16', '2020-12-13 06:51:16', 'Hoja de Coca natural en polvo'),
(113, 'David', 'Garkie0420', 'private individual', 'any time', '2176953001', 'davidgarkie356@gmail.com', '13-12-2020', 'do you sell your delisse tea in mexico? i had the privelage ,of trying the coca tea, and the coca matte powder. i loved the taste of the tea, i have metastatic colon cancer, and this tea makes my stomache feel so much better. please email me about this inquiry', 1, '2020-12-13 21:04:26', '2020-12-13 21:04:26', NULL),
(114, 'Eduardo', 'Caballero romero', 'Particular', '01314933', '914570200', 'eduardocaballeroromero@hotmail.com', '13-12-2020', 'Me interesa comprar un kilo de harina de coca gracias.', 1, '2020-12-13 22:52:43', '2020-12-13 22:52:43', 'Hoja de Coca natural en polvo');
INSERT INTO `contacto_global` (`id`, `nombres`, `apellidos`, `empresa`, `ruc`, `telefono`, `correo`, `fecha`, `mensaje`, `check`, `created_at`, `updated_at`, `producto`) VALUES
(115, 'Eduardo', 'Caballero romero', 'Particular', '01314933', '914570200', 'eduardocaballeroromero@hotmail.com', '13-12-2020', 'Me interesa comprar un kilo de harina de coca gracias.', 1, '2020-12-13 22:52:45', '2020-12-13 22:52:45', 'Hoja de Coca natural en polvo'),
(116, 'David', 'Garkie', '{private citizen}', 'any time', '(217) 695-3001', 'davidgarkie356@gmail.com', '19-12-2020', '? what is atomized atomized leaves of coca?', 1, '2020-12-19 21:50:51', '2020-12-19 21:50:51', 'Polvo atomizado de Hoja de Coca'),
(117, 'Ilya', 'Vayser', 'Coca Gum', 'Owner', '7187024383', 'ivayser@gmail.com', '20-12-2020', 'Hi there - reaching out to see if you might sell decocainized coca leaves already?', 1, '2020-12-20 09:10:05', '2020-12-20 09:10:05', 'Menta y Hoja de Coca'),
(118, 'Ilya', 'Vayser', 'Coca Gum', 'Owner', '7187024383', 'ivayser@gmail.com', '20-12-2020', 'Hi there - reaching out to see if you might sell decocainized coca leaves already?', 1, '2020-12-20 09:10:08', '2020-12-20 09:10:08', 'Menta y Hoja de Coca'),
(119, 'Carlos', 'Villegas', 'Sa de cv', '123abc', '555555555', 'villegasvmauricio@gmail.com', '20-12-2020', 'Hay legislación para el consumo, compra o transportación en México? cual son la especificaciones? muchas gracias', 1, '2020-12-20 09:36:01', '2020-12-20 09:36:01', 'Infusión de Hoja de Coca'),
(120, 'Carlos', 'Villegas', 'Sa de cv', '123abc', '555555555', 'villegasvmauricio@gmail.com', '20-12-2020', 'Hay legislación para el consumo, compra o transportación en México? cual son la especificaciones? muchas gracias', 1, '2020-12-20 09:36:03', '2020-12-20 09:36:03', 'Infusión de Hoja de Coca'),
(121, 'Robert', 'Zachert', 'Robert Zachert', 'Czerska 14 ; 00-732 Warszawa Polonia', '+48 502 06 44 66', 'robert.zachert@gazeta.pl', '30-12-2020', 'Buenos Dias,\r\n\r\n? Por favor, tienen Ustedes distribuidor o vendedor de Mate de Coca en Polonia ?\r\nConozco bien sus productos gracias a mis estancias en Peru i America del Sur.\r\nEsperando sus noticias,\r\n\r\nSaludos y Feliz año nuevo !\r\nRobert Zachert', 1, '2020-12-30 16:21:07', '2020-12-30 16:21:07', 'Infusión de Hoja de Coca'),
(122, 'Jose', 'Gonzales de Zavala', 'Amazonia Organic Products', 'Los Almendros 292 - ofc 201 - La Molina', '926480713', 'info@amazoniaorganic.com', '04-01-2021', 'Buenas tardes, hemos tenido una alianza comercial con ustedes anteriormente, necesitamos comprar Polvo de hoja de coca. Agradecemos pudieran contactarse lo antes posible, gracias', 1, '2021-01-05 00:36:51', '2021-01-05 00:36:51', 'Hoja de Coca natural en polvo'),
(123, 'Jose', 'Gonzales de Zavala', 'Amazonia Organic Products', 'Los Almendros 292 - ofc 201 - La Molina', '926480713', 'info@amazoniaorganic.com', '04-01-2021', 'Buenas tardes, hemos tenido una alianza comercial con ustedes anteriormente, necesitamos comprar Polvo de hoja de coca. Agradecemos pudieran contactarse lo antes posible, gracias', 1, '2021-01-05 00:36:54', '2021-01-05 00:36:54', 'Hoja de Coca natural en polvo'),
(124, 'PEDRO PABLO', 'MAMANI LUNA', 'WARI PYP EIRL', 'A.V. RICARDO ODONOVAN H4', '951620245', 'pedropablo7@hotmail.com', '05-01-2021', 'QUIERO SABER SI EN LA REGION TACNA EXISTE UNA OFICINA DE ENACO...', 1, '2021-01-05 21:47:09', '2021-01-05 21:47:09', 'Menta y Hoja de Coca'),
(125, 'clara', 'quantinet', 'nogent l\'abbesse', '45 rue des freres mothe', '0647452114', 'clara.quantinet@gmail.com', '05-01-2021', NULL, 1, '2021-01-06 01:33:30', '2021-01-06 01:33:30', 'Kintu'),
(126, 'x', 'x', 'x', 'asd', '1235', 'cas@outlook.com', '05-01-2021', 'hola', 1, '2021-01-06 02:08:42', '2021-01-06 02:08:42', NULL),
(127, 'x', 'x', 'x', 'asd', '1235', 'cas@outlook.com', '05-01-2021', 'hola', 1, '2021-01-06 02:08:45', '2021-01-06 02:08:45', NULL),
(128, 'WILBER', 'GUTIERREZ YANQUI', 'WILBWE GUTIERREZ YANQUI', '10013167601', '971799857', 'wilbergut06@gmail.com', '06-01-2021', 'CON QUIEN SE PUEDE COMUNICAR', 1, '2021-01-06 22:35:53', '2021-01-06 22:35:53', 'Kintu'),
(129, 'Edina', 'Ferencz', 'Meltemi', '00000000', '+36308482481', 'feredina@freemail.hu', '07-01-2021', 'Hola, \r\n\r\n\r\n¿Qué entregar a Europa, a Hungria?\r\n\r\nMejores deseos, Edina', 1, '2021-01-07 13:36:32', '2021-01-07 13:36:32', 'Infusión de Hoja de Coca'),
(130, 'Caleb', 'Dolan', 'Enaco', '6333 Pine needle ln', '5309571936', 'climbhigh.cd@gmail.com', '10-01-2021', 'I have an an account with the plant and wearhouse in mexico and was also an employee I had an medical emergency and have not worked in years. I wanted to order thru them and possibly return to work. Can you please send the contact info for that plant. Thank you', 1, '2021-01-10 21:45:42', '2021-01-10 21:45:42', NULL),
(131, 'Caleb', 'Dolan', 'Enaco', '6333 Pine needle ln', '5309571936', 'climbhigh.cd@gmail.com', '10-01-2021', 'I have an an account with the plant and wearhouse in mexico and was also an employee I had an medical emergency and have not worked in years. I wanted to order thru them and possibly return to work. Can you please send the contact info for that plant. Thank you', 1, '2021-01-10 21:45:47', '2021-01-10 21:45:47', NULL),
(132, 'Caleb', 'Dolan', 'Enaco', '6333 Pine needle ln', '5309571936', 'climbhigh.cd@gmail.com', '10-01-2021', 'I have an an account with the plant and wearhouse in mexico and was also an employee I had an medical emergency and have not worked in years. I wanted to order thru them and possibly return to work. Can you please send the contact info for that plant. Thank you', 1, '2021-01-10 21:45:48', '2021-01-10 21:45:48', NULL),
(133, 'gabriel Cristiam', 'Ramos Pastrana', 'Industrias Eurasia Sac', '20522875610', '986997191', 'eurasiatextilventas@hotmail.com', '11-01-2021', 'buenas tardes señores de ENACO deseo toda la información y los requisitos para poder comercializar cultivar la hoja de coca gracias', 1, '2021-01-11 23:34:14', '2021-01-11 23:34:14', 'PROXIMAMENTE'),
(134, 'Pierre', 'Winter', 'Pierre Winter MEI', '12 de outubro, 2079', '4598245552', 'pi1pi2pi3@gmail.com', '11-01-2021', 'Estou tentando falar com Luis Castillo, mas não tá respondendo.', 1, '2021-01-12 01:46:50', '2021-01-12 01:46:50', 'Hoja de Coca natural en polvo'),
(135, 'WALTER', 'CARDENAS', 'GOLDEN BUSINESS CORP S.A.C.', '20602357857', '935149126', 'walter.cardenas.palomino@gmail.com', '17-01-2021', 'Hola familia ENACO.\r\n\r\nquisiera comprar coca en polvo, para estados unidos, los Ángeles - California.\r\nquisiera una cotización, y que tipo de incoterms realizan.\r\ncual es el pedido mínimo, se que ustedes cuentan con documentos respectivos y eso me alegra mucho\r\n\r\nespero su pronta respuesta\r\n\r\nbendiciones', 1, '2021-01-17 18:54:56', '2021-01-17 18:54:56', 'Hoja de Coca natural en polvo'),
(136, 'WALTER', 'CARDENAS', 'GOLDEN BUSINESS CORP S.A.C.', '20602357857', '935149126', 'walter.cardenas.palomino@gmail.com', '17-01-2021', 'Hola familia ENACO.\r\n\r\nquisiera comprar coca en polvo, para estados unidos, los Ángeles - California.\r\nquisiera una cotización, y que tipo de incoterms realizan.\r\ncual es el pedido mínimo, se que ustedes cuentan con documentos respectivos y eso me alegra mucho\r\n\r\nespero su pronta respuesta\r\n\r\nbendiciones', 1, '2021-01-17 18:54:58', '2021-01-17 18:54:58', 'Hoja de Coca natural en polvo'),
(137, 'Elizabeth', 'Mendoza Salazar', 'ELIZABETH MENDOZA SALAZAR', '10084563337', '927850642', 'elizabe62k@hotmail.com', '19-01-2021', 'Deseo vender Hoja de coca y derivados al por menor', 1, '2021-01-19 22:13:59', '2021-01-19 22:13:59', NULL),
(138, 'Jesse', 'Bernier', 'Not affiliated', '00000000', '2075908181', 'jesse360@yahoo.com', '22-01-2021', 'Hello,\r\n\r\nI\'ve been experimenting with coca flour in teas and food for a little while now.  I\'ve always been interested in a decocanized extract that retains the other vitamins and minerals.\r\n\r\nI came across an image of ENACO bottles of coca extract.  Are these for sale through you?  It sounds like it matches what I\'ve been looking for.\r\n\r\nIf so are they available for purchase?', 1, '2021-01-22 08:49:58', '2021-01-22 08:49:58', NULL),
(139, 'Jasuri', 'nieves', 'Nature goods', '89 Lester Drive', '4753133158', 'Jasurimnieves@gmail.com', '22-01-2021', 'Cual es el precio?', 1, '2021-01-22 15:36:05', '2021-01-22 15:36:05', 'Hoja de Coca natural en polvo'),
(140, 'José Lúcio Dias Muniz', 'Lúcio', 'Moacyr A. castro e filhos Ltda', 'Rua Curicuari', '31993823808', 'zezinhomuniz171@gmail.com', '22-01-2021', 'Boa tarde, desejo receber o produto de vcs, porque gostei bastante.', 1, '2021-01-22 20:56:17', '2021-01-22 20:56:17', 'Uña de gato con hoja de coca'),
(141, 'José Lúcio Dias Muniz', 'Lúcio', 'Moacyr A. castro e filhos Ltda', 'Rua Curicuari', '31993823808', 'zezinhomuniz171@gmail.com', '22-01-2021', 'Boa tarde, desejo receber o produto de vcs, porque gostei bastante.', 1, '2021-01-22 20:57:20', '2021-01-22 20:57:20', 'Uña de gato con hoja de coca'),
(142, 'José Lúcio Dias Muniz', 'Lúcio', 'Moacyr A. castro e filhos Ltda', 'Rua Curicuari', '31993823808', 'zezinhomuniz171@gmail.com', '22-01-2021', 'Boa tarde, desejo receber o produto de vcs, porque gostei bastante.', 1, '2021-01-22 20:57:22', '2021-01-22 20:57:22', 'Uña de gato con hoja de coca'),
(143, 'José Lúcio Dias Muniz', 'Lúcio', 'Moacyr A. castro e filhos Ltda', 'Rua Curicuari', '31993823808', 'zezinhomuniz171@gmail.com', '22-01-2021', 'Boa tarde, desejo receber o produto de vcs, porque gostei bastante.', 1, '2021-01-22 20:57:34', '2021-01-22 20:57:34', 'Uña de gato con hoja de coca'),
(144, 'José Lúcio Dias Muniz', 'Lúcio', 'Moacyr A. castro e filhos Ltda', 'Rua Curicuari', '31993823808', 'zezinhomuniz171@gmail.com', '22-01-2021', 'Boa tarde, desejo receber o produto de vcs, porque gostei bastante.', 1, '2021-01-22 20:57:37', '2021-01-22 20:57:37', 'Uña de gato con hoja de coca'),
(145, 'Cyndi', 'Santa Cruz Lozano', 'Personal', '10467064866', '932532898', 'c.y.n.d.i_2810@hotmail.es', '24-01-2021', 'Precio al por mayor de hoja de coca', 1, '2021-01-24 05:28:20', '2021-01-24 05:28:20', 'Hoja de Coca natural en polvo'),
(146, 'Cyndi', 'Santa Cruz Lozano', 'Personal', '10467064866', '932532898', 'c.y.n.d.i_2810@hotmail.es', '24-01-2021', 'Precio al por mayor de hoja de coca', 1, '2021-01-24 05:28:21', '2021-01-24 05:28:21', 'Hoja de Coca natural en polvo'),
(147, 'Cyndi', 'Santa Cruz Lozano', 'Personal', '10467064866', '932532898', 'c.y.n.d.i_2810@hotmail.es', '24-01-2021', 'Precio al por mayor de hoja de coca', 1, '2021-01-24 05:28:22', '2021-01-24 05:28:22', 'Hoja de Coca natural en polvo'),
(148, 'Cyndi', 'Santa Cruz Lozano', 'Personal', '10467064866', '932532898', 'c.y.n.d.i_2810@hotmail.es', '24-01-2021', 'Precio al por mayor de hoja de coca', 1, '2021-01-24 05:28:23', '2021-01-24 05:28:23', 'Hoja de Coca natural en polvo'),
(149, 'Cyndi', 'Santa Cruz Lozano', 'Personal', '10467064866', '932532898', 'c.y.n.d.i_2810@hotmail.es', '24-01-2021', 'Precio al por mayor de hoja de coca', 1, '2021-01-24 05:28:23', '2021-01-24 05:28:23', 'Hoja de Coca natural en polvo'),
(150, 'Efraín', 'Anchante', 'Particular', '10100363254', '996554433', 'eaz16@hotmail.com', '01-02-2021', 'Precio por favor,\r\n tienda cercana a Los Olivos?- \r\ndelivery?\r\nGracias', 1, '2021-02-01 08:50:27', '2021-02-01 08:50:27', 'Hoja de Coca natural en polvo'),
(151, 'Yvan', 'Gutierrez Cruz', 'ALALAU MODA & ACCESORIOS', '20606701544', '922002571', 'yvanguti@hotmail.com', '01-02-2021', 'Hola buenas tardes, me gustaría saber los precios de la harina de coca en presentación de 100gr y 250gr.\r\nEspero su repuesta, gracias', 1, '2021-02-01 23:22:22', '2021-02-01 23:22:22', 'Hoja de Coca natural en polvo'),
(152, 'Ricardo', 'Ayerza', 'Personal', 'Soy extrangero', '+5930981229629', 'rayerza@newcrops.org', '01-02-2021', 'Estoy en Guayaquil, uso la hoja de coca para chaccheo y estoy interesado en aprovisionarm mensualmente con uno o dos kilos.  Uds tienen algún lugar en Tumbes o Aguas Verdes para enviarlas donde yo las recogería y pagaría.  Otra posibilidad seria que les enviara el pago por Western Union y Uds. me despacharan las hojas a alguna dirección de Tumbes o mejos Aguas Verdes.  En espera de sus comentarios, los saludo muy atentamente', 1, '2021-02-02 00:30:35', '2021-02-02 00:30:35', NULL),
(153, 'Vivienne', 'Gonzalez Villavicencio', 'None', '802 N Kennedy Ave', '2092379249', 'Tiavivienne@yahoo.com', '01-02-2021', 'Me gustaria comprar este producto', 1, '2021-02-02 04:00:03', '2021-02-02 04:00:03', 'Infusión de Hoja de Coca'),
(154, 'Daniel', 'Baisman', 'Kallpa Group', 'USA', '17076288013', 'chefbaisman@gmail.com', '02-02-2021', 'Soy Chef Peruano y deseo adquirir la coca en polvo. No se si ustedes envian a Estados Unidos. O si me pudieran guiar en la forma sencilla y rapida la coca en polvo y otros. Gracias', 1, '2021-02-02 21:27:58', '2021-02-02 21:27:58', 'Hoja de Coca natural en polvo'),
(155, 'Jose', 'Manley', 'Manley INC', '000000', '9025352055', 'josemanley1@hotmail.com', '04-02-2021', 'Do you ship Delisse tea to the USA?  Advance payment.', 1, '2021-02-04 23:10:16', '2021-02-04 23:10:16', 'Cocalyptuss'),
(156, 'Jose', 'Manley', 'Manley INC', '00000', '9045352055', 'josemanley1@hotmail.com', '04-02-2021', 'Can you ship to USA?  Advance payment.', 1, '2021-02-04 23:11:39', '2021-02-04 23:11:39', 'Infusión de Hoja de Coca'),
(157, 'Jose', 'Manley', 'Manley INC', '000000', '9045352055', 'josemanley1@hotmail.com', '04-02-2021', 'Or can you ship directly to Honduras Central America, if not the USA?   Advance payment.', 1, '2021-02-04 23:13:22', '2021-02-04 23:13:22', 'Menta y Hoja de Coca'),
(158, 'Maria Encarnación', 'Cabrera Ramírez', 'Multiservicios Mari', '10408297627', '962236652', 'mariaencarnasioncabrera@gmail.com', '05-02-2021', 'Solito Licencia para venta de coca para picchar', 1, '2021-02-05 20:09:44', '2021-02-05 20:09:44', 'PROXIMAMENTE'),
(159, 'AUGUSTO', 'INCA', 'INOXIDABLES PERUANOS S.A.', '20380918243', '922384700', 'inoxperu@inoxidablesperuanos.com.pe', '08-02-2021', 'INOXIDABLES PERUANOS\r\nPJ MUNICIPAL SECTOR 8 MZ H LOTE 02 - LIMA 42\r\n(01)715-1145 / 922384700 → https://wa.me/51922384700\r\nwww.inoxidablesperuanos.com \r\n\r\nLima, 07 de Febrero del 2021\r\n \r\nSeñores:\r\n\r\nENACO S.A.\r\n\r\nEstimado(a) reciba nuestro cordial saludo, somos INOXIDABLES PERUANOS S.A., identificados con RUC 20380918243, dedicados a la fabricación de máquinas y equipos industriales en acero inoxidable, por lo cual, hemos tenido a bien dirigirnos a Usted con el fin de ofrecerle nuestros servicios.\r\n\r\nNuestra especialidad comprende en la fabricación de Tanques - Reactores - Fermentadores - Almacenamiento - Enfriamiento - Mezcladoras en V y Horizontales - Barandas y Pasamanos - Lavaderos - Ollas Industriales - Mobiliarios - Estructuras - Baldes - Tamizadores Industriales - Grageadoras - Despulpadora de Frutas - Licuadoras Industriales - Mesas de Trabajo - Marmitas - Bandejas - Maniluvios - Utensilios - Fajas Transportadoras - Instalación de Tuberías - Autoclaves - Accesorios - Equipos Gastronómicos e Industriales en general con acabado totalmente sanitario lo cual es de uso frecuente en la industria química, farmacéutica, alimentaria y afines.\r\n\r\nEsperando nos brinde la oportunidad de poder servirlos, quedamos muy agradecidos por su atención.\r\n\r\nAtentamente\r\nAUGUSTO INCA', 1, '2021-02-08 05:38:22', '2021-02-08 05:38:22', NULL),
(160, 'AUGUSTO', 'INCA', 'INOXIDABLES PERUANOS S.A.', '20380918243', '922384700', 'inoxperu@inoxidablesperuanos.com.pe', '08-02-2021', 'INOXIDABLES PERUANOS\r\nPJ MUNICIPAL SECTOR 8 MZ H LOTE 02 - LIMA 42\r\n(01)715-1145 / 922384700 → https://wa.me/51922384700\r\nwww.inoxidablesperuanos.com \r\n\r\nLima, 07 de Febrero del 2021\r\n \r\nSeñores:\r\n\r\nENACO S.A.\r\n\r\nEstimado(a) reciba nuestro cordial saludo, somos INOXIDABLES PERUANOS S.A., identificados con RUC 20380918243, dedicados a la fabricación de máquinas y equipos industriales en acero inoxidable, por lo cual, hemos tenido a bien dirigirnos a Usted con el fin de ofrecerle nuestros servicios.\r\n\r\nNuestra especialidad comprende en la fabricación de Tanques - Reactores - Fermentadores - Almacenamiento - Enfriamiento - Mezcladoras en V y Horizontales - Barandas y Pasamanos - Lavaderos - Ollas Industriales - Mobiliarios - Estructuras - Baldes - Tamizadores Industriales - Grageadoras - Despulpadora de Frutas - Licuadoras Industriales - Mesas de Trabajo - Marmitas - Bandejas - Maniluvios - Utensilios - Fajas Transportadoras - Instalación de Tuberías - Autoclaves - Accesorios - Equipos Gastronómicos e Industriales en general con acabado totalmente sanitario lo cual es de uso frecuente en la industria química, farmacéutica, alimentaria y afines.\r\n\r\nEsperando nos brinde la oportunidad de poder servirlos, quedamos muy agradecidos por su atención.\r\n\r\nAtentamente\r\nAUGUSTO INCA', 1, '2021-02-08 05:38:25', '2021-02-08 05:38:25', NULL),
(161, 'AUGUSTO', 'INCA', 'INOXIDABLES PERUANOS S.A.', '20380918243', '922384700', 'inoxperu@inoxidablesperuanos.com.pe', '08-02-2021', 'INOXIDABLES PERUANOS\r\nPJ MUNICIPAL SECTOR 8 MZ H LOTE 02 - LIMA 42\r\n(01)715-1145 / 922384700 → https://wa.me/51922384700\r\nwww.inoxidablesperuanos.com \r\n\r\nLima, 07 de Febrero del 2021\r\n \r\nSeñores:\r\n\r\nENACO S.A.\r\n\r\nEstimado(a) reciba nuestro cordial saludo, somos INOXIDABLES PERUANOS S.A., identificados con RUC 20380918243, dedicados a la fabricación de máquinas y equipos industriales en acero inoxidable, por lo cual, hemos tenido a bien dirigirnos a Usted con el fin de ofrecerle nuestros servicios.\r\n\r\nNuestra especialidad comprende en la fabricación de Tanques - Reactores - Fermentadores - Almacenamiento - Enfriamiento - Mezcladoras en V y Horizontales - Barandas y Pasamanos - Lavaderos - Ollas Industriales - Mobiliarios - Estructuras - Baldes - Tamizadores Industriales - Grageadoras - Despulpadora de Frutas - Licuadoras Industriales - Mesas de Trabajo - Marmitas - Bandejas - Maniluvios - Utensilios - Fajas Transportadoras - Instalación de Tuberías - Autoclaves - Accesorios - Equipos Gastronómicos e Industriales en general con acabado totalmente sanitario lo cual es de uso frecuente en la industria química, farmacéutica, alimentaria y afines.\r\n\r\nEsperando nos brinde la oportunidad de poder servirlos, quedamos muy agradecidos por su atención.\r\n\r\nAtentamente\r\nAUGUSTO INCA', 1, '2021-02-08 05:38:26', '2021-02-08 05:38:26', NULL),
(162, 'ANGELA PAOLA', 'BUENO', 'EVENTOS ALBITA', '10204000242', '994885917', 'angelabuenolarrazabal@gmail.com', '08-02-2021', 'Solicito Harina de coca para elaboración de bizcochos de 100g de peso, requiero saber cuanto es el porcentaje permitido de harina de coca que debe de contener el bizcocho.', 1, '2021-02-09 04:29:53', '2021-02-09 04:29:53', 'Hoja de Coca natural en polvo'),
(163, 'miguel angel', 'nizama bustamante', 'No tengo empresa', '3333333333', '951068551', 'miguel.nizama10@gmail.com', '09-02-2021', 'Buenas tardes, le saluda Miguel Nizama Bustamante, soy estudiante de la Universidad Señor de Sipán de la ciudad de Chiclayo, quiero conseguir hoja de coca para mi proyecto de tesis, quisiera saber el procedimiento para poder conseguir la hoja y tener toda la documentación en regla.', 1, '2021-02-10 02:47:45', '2021-02-10 02:47:45', 'Menta y Hoja de Coca'),
(164, 'miguel angel', 'nizama bustamante', 'No tengo empresa', '3333333333', '951068551', 'miguel.nizama10@gmail.com', '09-02-2021', 'Buenas tardes, le saluda Miguel Nizama Bustamante, soy estudiante de la Universidad Señor de Sipán de la ciudad de Chiclayo, quiero conseguir hoja de coca para mi proyecto de tesis, quisiera saber el procedimiento para poder conseguir la hoja y tener toda la documentación en regla.', 1, '2021-02-10 02:47:48', '2021-02-10 02:47:48', 'Menta y Hoja de Coca'),
(165, 'Carlos Enrique', 'Narvaez Liñan', 'Carlos Enrique Narvaez Liñan', '10180857830', '975809500', 'knarvaez96@gmail.com', '11-02-2021', 'Buenos días estamos interesados en su producto, gracias por su respuesta.', 1, '2021-02-11 21:44:33', '2021-02-11 21:44:33', 'Hoja de Coca natural en polvo'),
(166, 'Domenico', 'Ferri', 'M.D.', 'Ioli', '+393925275564', 'egneje@gmail.com', '14-02-2021', 'Good morning\r\nI\'m interested in buying your coca powder and the mate. Do you have any representative in Italy?', 1, '2021-02-15 02:09:26', '2021-02-15 02:09:26', 'Hoja de Coca natural en polvo'),
(167, 'Domenico', 'Ferri', 'M.D.', 'Ioli', '+393925275564', 'egneje@gmail.com', '14-02-2021', 'Good morning\r\nI\'m interested in buying your coca powder and the mate. Do you have any representative in Italy?', 1, '2021-02-15 02:09:30', '2021-02-15 02:09:30', 'Hoja de Coca natural en polvo'),
(168, 'xxxxxxx', 'xxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxx', '15-02-2021', 'xxxxxxxxxxxxxxxx', 1, '2021-02-15 20:47:23', '2021-02-15 20:47:23', 'Cocalyptuss'),
(169, 'xxxxxxx', 'xxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxx', '15-02-2021', 'xxxxxxxxxxxxxxxx', 1, '2021-02-15 20:47:27', '2021-02-15 20:47:27', 'Cocalyptuss'),
(170, 'xxxxxxx', 'xxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxx', '15-02-2021', 'xxxxxxxxxxxxxxxx', 1, '2021-02-15 20:47:31', '2021-02-15 20:47:31', 'Cocalyptuss'),
(171, 'xxxxxxx', 'xxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxx', '15-02-2021', 'xxxxxxxxxxxxxxxx', 1, '2021-02-15 20:47:31', '2021-02-15 20:47:31', 'Cocalyptuss'),
(172, 'xxxxxxx', 'xxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxx', '15-02-2021', 'xxxxxxxxxxxxxxxx', 1, '2021-02-15 20:47:31', '2021-02-15 20:47:31', 'Cocalyptuss'),
(173, 'xxxxxxx', 'xxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxx', '15-02-2021', 'xxxxxxxxxxxxxxxx', 1, '2021-02-15 20:47:31', '2021-02-15 20:47:31', 'Cocalyptuss'),
(174, 'xxxxxxx', 'xxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxx', '15-02-2021', 'xxxxxxxxxxxxxxxx', 1, '2021-02-15 20:47:32', '2021-02-15 20:47:32', 'Cocalyptuss'),
(175, 'xxxxxxx', 'xxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxx', '15-02-2021', 'xxxxxxxxxxxxxxxx', 1, '2021-02-15 20:47:34', '2021-02-15 20:47:34', 'Cocalyptuss'),
(176, 'xxxxxxx', 'xxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxx', '15-02-2021', 'xxxxxxxxxxxxxxxx', 1, '2021-02-15 20:47:34', '2021-02-15 20:47:34', 'Cocalyptuss'),
(177, 'xxxxxxx', 'xxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxx', '15-02-2021', 'xxxxxxxxxxxxxxxx', 1, '2021-02-15 20:47:34', '2021-02-15 20:47:34', 'Cocalyptuss'),
(178, 'xxxxxxx', 'xxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxx', '15-02-2021', 'xxxxxxxxxxxxxxxx', 1, '2021-02-15 20:47:34', '2021-02-15 20:47:34', 'Cocalyptuss'),
(179, 'xxxxxxx', 'xxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxx', '15-02-2021', 'xxxxxxxxxxxxxxxx', 1, '2021-02-15 20:47:36', '2021-02-15 20:47:36', 'Cocalyptuss'),
(180, 'xxxxxxx', 'xxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxx', '15-02-2021', 'xxxxxxxxxxxxxxxx', 1, '2021-02-15 20:47:36', '2021-02-15 20:47:36', 'Cocalyptuss'),
(181, 'xxxxxxx', 'xxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxx', '15-02-2021', 'xxxxxxxxxxxxxxxx', 1, '2021-02-15 20:47:36', '2021-02-15 20:47:36', 'Cocalyptuss'),
(182, 'xxxxxxx', 'xxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxx', '15-02-2021', 'xxxxxxxxxxxxxxxx', 1, '2021-02-15 20:47:36', '2021-02-15 20:47:36', 'Cocalyptuss'),
(183, 'xxxxxxx', 'xxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxx', '15-02-2021', 'xxxxxxxxxxxxxxxx', 1, '2021-02-15 20:47:37', '2021-02-15 20:47:37', 'Cocalyptuss'),
(184, 'xxxxxxx', 'xxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxx', '15-02-2021', 'xxxxxxxxxxxxxxxx', 1, '2021-02-15 20:48:04', '2021-02-15 20:48:04', 'Cocalyptuss'),
(185, 'xxxxxxx', 'xxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxx', '15-02-2021', 'xxxxxxxxxxxxxxxx', 1, '2021-02-15 20:48:04', '2021-02-15 20:48:04', 'Cocalyptuss'),
(186, 'xxxxxxx', 'xxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxx', '15-02-2021', 'xxxxxxxxxxxxxxxx', 1, '2021-02-15 20:48:07', '2021-02-15 20:48:07', NULL),
(187, 'xxxxxxx', 'xxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxx', '15-02-2021', 'xxxxxxxxxxxxxxxx', 1, '2021-02-15 20:48:08', '2021-02-15 20:48:08', NULL),
(188, 'xxxxxxx', 'xxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxx', '15-02-2021', 'xxxxxxxxxxxxxxxx', 1, '2021-02-15 20:48:09', '2021-02-15 20:48:09', NULL),
(189, 'xxxxxxx', 'xxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxx', '15-02-2021', 'xxxxxxxxxxxxxxxx', 1, '2021-02-15 20:48:09', '2021-02-15 20:48:09', NULL),
(190, 'xxxxxxx', 'xxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxx', '15-02-2021', 'xxxxxxxxxxxxxxxx', 1, '2021-02-15 20:48:09', '2021-02-15 20:48:09', NULL),
(191, 'xxxxxxx', 'xxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxx', '15-02-2021', 'xxxxxxxxxxxxxxxx', 1, '2021-02-15 20:48:15', '2021-02-15 20:48:15', NULL),
(192, 'xxxxxxx', 'xxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxx', '15-02-2021', 'xxxxxxxxxxxxxxxx', 1, '2021-02-15 20:48:15', '2021-02-15 20:48:15', NULL),
(193, 'xxxxxxx', 'xxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxx', '15-02-2021', 'xxxxxxxxxxxxxxxx', 1, '2021-02-15 20:48:15', '2021-02-15 20:48:15', NULL),
(194, 'xxxxxxx', 'xxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxx', '15-02-2021', 'xxxxxxxxxxxxxxxx', 1, '2021-02-15 20:48:16', '2021-02-15 20:48:16', NULL),
(195, 'xxxxxxx', 'xxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxx', 'xxxxxxxxxxxxxxx', 'xxxxxxxxxxx', '15-02-2021', 'xxxxxxxxxxxxxxxx', 1, '2021-02-15 20:48:16', '2021-02-15 20:48:16', NULL),
(196, 'Tatiana', 'Caceres', 'Bebidas San Miguel', '20113555410', '933485332', 'comprassm@gmail.com', '15-02-2021', 'Buen dia, solicito información sobre los extractos', 1, '2021-02-15 20:50:17', '2021-02-15 20:50:17', NULL),
(197, 'Tatiana', 'Caceres', 'Bebidas San Miguel', '20113555410', '933485332', 'comprassm@gmail.com', '15-02-2021', 'Buen dia, solicito información sobre los extractos', 1, '2021-02-15 20:50:17', '2021-02-15 20:50:17', NULL),
(198, 'Tatiana', 'Caceres', 'Bebidas San Miguel', '20113555410', '933485332', 'comprassm@gmail.com', '15-02-2021', 'Buen dia, solicito información sobre los extractos', 1, '2021-02-15 20:50:19', '2021-02-15 20:50:19', NULL),
(199, 'Tatiana', 'Caceres', 'Bebidas San Miguel', '20113555410', '933485332', 'comprassm@gmail.com', '15-02-2021', 'Buen dia, solicito información sobre los extractos', 1, '2021-02-15 20:50:19', '2021-02-15 20:50:19', NULL),
(200, 'Tatiana', 'Caceres', 'Bebidas San Miguel', '20113555410', '933485332', 'comprassm@gmail.com', '15-02-2021', 'Buen dia, solicito información sobre los extractos', 1, '2021-02-15 20:50:19', '2021-02-15 20:50:19', NULL),
(201, 'Tatiana', 'Caceres', 'Bebidas San Miguel', '20113555410', '933485332', 'comprassm@gmail.com', '15-02-2021', 'Buen dia, solicito información sobre los extractos', 1, '2021-02-15 20:50:19', '2021-02-15 20:50:19', NULL),
(202, 'Tatiana', 'Caceres', 'Bebidas San Miguel', '20113555410', '933485332', 'comprassm@gmail.com', '15-02-2021', 'Buen dia, solicito información sobre los extractos', 1, '2021-02-15 20:50:20', '2021-02-15 20:50:20', NULL),
(203, 'RUBEN HILARIO', 'LOAYZA IDME', 'xxxxxxx', '10411696648', '925360010', 'rhloayzai@hotmail.com', '18-02-2021', 'deseo comprar la harina de coca como suplemento alimenticio', 1, '2021-02-18 07:50:21', '2021-02-18 07:50:21', 'Hoja de Coca natural en polvo'),
(204, 'MOHAMMED', 'GHAITHI', 'ENTERO OVERSEAS', 'NA', '00000', 'mohammed@lexicon-ye.com', '20-02-2021', 'Estimados me gustaría saber los precios al por mayor del te de coca/mate de coca y también en polvo. Espero su mensaje. Muchas gracias.', 1, '2021-02-20 07:53:23', '2021-02-20 07:53:23', 'Hoja de Coca natural en polvo'),
(205, 'MOHAMMED', 'GHAITHI', 'ENTERO OVERSEAS', 'NA', '00000', 'mohammed@lexicon-ye.com', '20-02-2021', 'Estimados me gustaría saber los precios al por mayor del te de coca/mate de coca y también en polvo. Espero su mensaje. Muchas gracias.', 1, '2021-02-20 07:53:24', '2021-02-20 07:53:24', 'Hoja de Coca natural en polvo'),
(206, 'MOHAMMED', 'GHAITHI', 'ENTERO OVERSEAS', 'NA', '00000', 'mohammed@lexicon-ye.com', '20-02-2021', 'Estimados me gustaría saber los precios al por mayor del te de coca/mate de coca y también en polvo. Espero su mensaje. Muchas gracias.', 1, '2021-02-20 07:53:26', '2021-02-20 07:53:26', 'Hoja de Coca natural en polvo'),
(207, 'RAYDA HILDA', 'BALBIN QUISPE', 'BODEGA BALBIN', '10199782679', '925467079', 'romanbalbinj@gmail.com', '21-02-2021', 'Buenas noches, quiero postular para ser comerciante minorista, requiero que se me proporciono el anexo 1 y anexo 2 que se pide en el requisito.\r\nGracias de antemano.', 1, '2021-02-21 06:41:02', '2021-02-21 06:41:02', NULL),
(208, 'RAYDA HILDA', 'BALBIN QUISPE', 'BODEGA BALBIN', '10199782679', '925467079', 'romanbalbinj@gmail.com', '21-02-2021', 'Buenas noches, quiero postular para ser comerciante minorista, requiero que se me proporciono el anexo 1 y anexo 2 que se pide en el requisito.\r\nGracias de antemano.', 1, '2021-02-21 06:41:07', '2021-02-21 06:41:07', NULL),
(209, 'Darwin', 'COLLANTES OLANO', 'PERSONA NATURAL', '10730513254', '901007903', 'COLLANTESOLANODARWINMICHAEL@GMAIL.COM', '22-02-2021', 'LES SALUDO DESDE JAEN - CAJAMARCA QUERIA PREGUNTARLES COMO PUEDO SEMBRAR HOJA DE COCA AQUI EN MI JAEN Y QUE TRAMITE PUEDO HACER PARA PODER SEMBRAR..AGRADECERIA SU AYUDA ...BUENAS TARDES', 1, '2021-02-23 02:16:46', '2021-02-23 02:16:46', 'Infusión de Hoja de Coca'),
(210, 'MARIBEL', 'MENDOZA CHOQUE', 'COMERCIANTE INDEPENDIETE', 'SIN RUC', '974420950', 'MCHMARIBEL29@GMAIL.COM', '25-02-2021', 'BUEN DIA SENORES DE ENACO, QUISIERA SABER QUE REQUISITOS SE NECESITA PARA EL COMERCIO MINORISTA DE HOJA DE COCA Y CUANTOS KILOS O ARROBAS DE HOJA DE COCA SE DEBE ADQUIRIR MENSUALMENTE EN LA SEDE DE CUSCO.', 1, '2021-02-26 02:04:51', '2021-02-26 02:04:51', NULL),
(211, 'Matheus Uener Silva', 'Matheus xD', 'MS Hidroponia', '600', '5594988067392', 'matheusuener@hotmail.com', '27-02-2021', 'Gostaria de adquirir este produto!', 1, '2021-02-27 07:18:15', '2021-02-27 07:18:15', 'Hoja de Coca natural en polvo'),
(212, 'Claudia Roxana', 'Meza', 'Employer', '1007538693', '994060613', 'c.aguilar@pucp.pe', '27-02-2021', 'Porfa quiero comprar harina de coca', 1, '2021-02-27 19:45:42', '2021-02-27 19:45:42', 'Hoja de Coca natural en polvo'),
(213, 'Alejandro', 'Vera', 'Negociaciones Reori', '10192296922', '931369553', 'averapalomino64@gmail.com', '01-03-2021', 'Porfavor, necesitamos el precio de la caja x 25 y la caja x 100 unidades filtarntes y donde lo podemos comprar y si hay algunas restricciones para exportar. Gracias.', 1, '2021-03-02 03:04:12', '2021-03-02 03:04:12', 'Infusión de Hoja de Coca'),
(214, 'Alejandro', 'Vera', 'Negociaciones Reori', '10192296922', '931369553', 'averapalomino64@gmail.com', '01-03-2021', 'Por favor necesitamos saber el costo de la caja x 25 sobres y la de 100 sobres filtrantes y en que cantidad venden.\r\nGracias.', 1, '2021-03-02 03:05:30', '2021-03-02 03:05:30', 'Uña de gato con hoja de coca'),
(215, 'Luis Alfredo', 'More zeta', 'Naturalmed', '10467588716', '927 750 144', '927 750 144', '07-03-2021', 'Buenos días \r\nSolicitó la lista de precios x mayor de todas sus cajas de filtrantes en especial la de coca de 50 y 100 filtrantes .', 1, '2021-03-07 21:54:26', '2021-03-07 21:54:26', 'Infusión de Hoja de Coca'),
(216, 'Luis Alfredo', 'More zeta', 'Naturalmed', '10467588716', '927 750 144', '927 750 144', '07-03-2021', 'Buenos días \r\nSolicitó la lista de precios x mayor de todas sus cajas de filtrantes en especial la de coca de 50 y 100 filtrantes .', 1, '2021-03-07 21:54:47', '2021-03-07 21:54:47', 'Infusión de Hoja de Coca'),
(217, 'Luis Alfredo', 'More zeta', 'Naturalmed', '10467588716', '927 750 144', '927 750 144', '07-03-2021', 'Buenos días \r\nSolicitó la lista de precios x mayor de todas sus cajas de filtrantes en especial la de coca de 50 y 100 filtrantes .', 1, '2021-03-07 21:54:59', '2021-03-07 21:54:59', 'Infusión de Hoja de Coca'),
(218, 'Luis Alfredo', 'More zeta', 'Naturalmed', '10467588716', '927 750 144', '927 750 144', '07-03-2021', 'Buenos días \r\nSolicitó la lista de precios x mayor de todas sus cajas de filtrantes en especial la de coca de 50 y 100 filtrantes .', 1, '2021-03-07 21:55:08', '2021-03-07 21:55:08', 'Infusión de Hoja de Coca'),
(219, 'CARLOS', 'MONROY RODRÍGUEZ', 'Familiar', '28221', '(+34) 670883050', 'monroyrodriguezc85@gmail.com', '08-03-2021', NULL, 1, '2021-03-08 14:35:24', '2021-03-08 14:35:24', 'Infusión de Hoja de Coca'),
(220, 'FRANCISCO', 'BARRANTES CASAPIA', 'FEDERACION DE PRODUCTORES DE LA HOJA DE COCA DE LOS VALLES RIO APURIMAC Y ENE (FEPOHCRA)', 'NO TIENE', '930473420', 'pashinfbc@gmail.com', '09-03-2021', 'Estamos muy interesados en mantener comunicación y relaciones institucionales con ENACO S.A., muchos saludos desde el Vrae', 1, '2021-03-09 15:18:10', '2021-03-09 15:18:10', 'Hoja de Coca natural en polvo'),
(221, 'luis Fernando', 'Gonzales Méndez', 'Coffe & Chocolate SAC', '20603524617', '949603032', 'luis_gomen@icloud.com', '17-03-2021', 'Hola. \r\nQuiero saber el precio de las presentaciones y a partid de qué cantidad puedo comprar.', 1, '2021-03-17 21:50:33', '2021-03-17 21:50:33', 'Hoja de Coca natural en polvo'),
(222, 'angel', 'luna', 'angel luna', '10418583091', '997267746', 'lunangel1983@hotmail.com', '17-03-2021', 'Buenas tardes quisiera sabes cual es el precio de la hoja de coca picada. y alguna información para empadronarme y poder ser comercializador de productos derivados de la hoja de coca.', 1, '2021-03-18 03:14:03', '2021-03-18 03:14:03', 'Hoja de Coca Picada'),
(223, 'Moisés', 'Arriola', 'Panaderia', 'Mayo 812, Villa Tetabiate', '+526441949351', 'moises777@hotmail.com', '18-03-2021', 'Buen día, soy de México, me interesa su concentrado de hoja de coca, tienen envíos a Mexico?\r\nMe interesa para hacer confitería. Saludos!!!', 1, '2021-03-18 07:07:26', '2021-03-18 07:07:26', 'Concentrado de Hoja de Coca'),
(224, 'RICARDO', 'Muñoz jara', 'M&J PERUNAT SERVICES E.I.R.L.', '20530345433', '993887541', 'mandy31612@gmail.com', '19-03-2021', NULL, 1, '2021-03-19 07:32:51', '2021-03-19 07:32:51', 'Hoja de Coca natural en polvo'),
(225, 'william', 'flynn', 'atlanta are electric llc', '1635 butler bridge road, covington ga 30016', '6788281111', 'deicodentl@comcast.net', '20-03-2021', 'because of the covi19 I havent been able to travel to Peru to replenish my Dellisse mate tea coca', 1, '2021-03-20 18:31:45', '2021-03-20 18:31:45', 'Infusión de Hoja de Coca'),
(226, 'william', 'flynn', 'atlanta are electric llc', '1635 butler bridge road, covington ga 30016', '6788281111', 'deicodentl@comcast.net', '20-03-2021', 'because of the covi19 I havent been able to travel to Peru to replenish my Dellisse mate tea coca', 1, '2021-03-20 18:31:49', '2021-03-20 18:31:49', 'Infusión de Hoja de Coca'),
(227, 'Sam', 'Cummings', 'Healthy mountain tea ltd', '9429047580077', '+64276464816', 'samuelcummings@outlook.com', '21-03-2021', 'Hola, chicos\r\n\r\nmi pequeña empresa ha estado importando y vendiendo sus productos durante el último año en Nueva Zelanda. el transporte aéreo es caro y estoy luchando para mantenerme al día con la creciente demanda, ¿es posible comprar un pedido a granel directamente de usted a través del transporte marítimo?', 1, '2021-03-21 10:32:49', '2021-03-21 10:32:49', 'Hoja de Coca natural en polvo'),
(228, 'Ivan', 'Fuentes', 'CIA MINERA LA MARGARITA', '20551473539', '981383538', 'comercial@cmlamargarita.com.pe', '23-03-2021', 'Estimados Señores, nuestra compañía representa a un laboratorio Europeo que esta buscando la hoja de coca pulverizada como materia prima para productos farmacéuticos. agradeceré concederme una audiencia para tratar el tema del suministro de esta materia prima. cordialmente.', 1, '2021-03-24 02:10:40', '2021-03-24 02:10:40', 'Hoja de Coca Micropulverizada'),
(229, 'Carlos Jesus', 'Fiuza Miranda', 'Carlos Jesus Fiuza Miranda.', 'Virgen del camino, 49 bajo. 36001. Pontevedra', '+34653908020', 'cica@mundo-r.com', '25-03-2021', NULL, 1, '2021-03-25 20:46:14', '2021-03-25 20:46:14', 'Infusión de Hoja de Coca'),
(230, 'Ryan', 'Manning', 'Bardaddy', 'United States', '8016476186', 'ryanearlmanning@gmail.com', '26-03-2021', NULL, 1, '2021-03-26 10:17:22', '2021-03-26 10:17:22', 'Hoja de Coca natural en polvo'),
(231, 'Ryan', 'Manning', 'Bardaddy', 'United States', '8016476186', 'ryanearlmanning@gmail.com', '26-03-2021', NULL, 1, '2021-03-26 10:17:25', '2021-03-26 10:17:25', 'Hoja de Coca natural en polvo'),
(232, 'Rafael', 'Del solar el', 'Ninguna', '10714828792', '977498317', 'r.delsolar@outlook.com', '26-03-2021', 'Hola espero el contacto', 1, '2021-03-27 04:11:03', '2021-03-27 04:11:03', 'Hoja de Coca natural en polvo'),
(233, 'Rafael', 'Del solar el', 'Ninguna', '10714828792', '977498317', 'r.delsolar@outlook.com', '26-03-2021', 'Hola espero el contacto', 1, '2021-03-27 04:11:05', '2021-03-27 04:11:05', 'Hoja de Coca natural en polvo'),
(234, 'Rafael', 'Del solar el', 'Ninguna', '10714828792', '977498317', 'r.delsolar@outlook.com', '26-03-2021', 'Hola espero el contacto', 1, '2021-03-27 04:11:06', '2021-03-27 04:11:06', 'Hoja de Coca natural en polvo'),
(235, 'Rafael', 'Del solar el', 'Ninguna', '10714828792', '977498317', 'r.delsolar@outlook.com', '26-03-2021', 'Hola espero el contacto', 1, '2021-03-27 04:11:06', '2021-03-27 04:11:06', 'Hoja de Coca natural en polvo'),
(236, 'Rafael', 'Del solar el', 'Ninguna', '10714828792', '977498317', 'r.delsolar@outlook.com', '26-03-2021', 'Hola espero el contacto', 1, '2021-03-27 04:11:06', '2021-03-27 04:11:06', 'Hoja de Coca natural en polvo'),
(237, 'Astrid', 'Rujel', 'Costa viva', '20521948061', '963031343', 'desarrollo@costavivaperu.com', '30-03-2021', 'Estoy interesada en comprar 5Kg', 1, '2021-03-30 22:10:41', '2021-03-30 22:10:41', 'Polvo Atomizado de hoja de coca'),
(238, 'JULIO CESAR', 'SALVADOR CALLE', 'JULIO CESAR SALVADOR CALLE', '10478560783', '930973304', 'julio.salvadorcalle@gmail.com', '04-04-2021', 'Estimados, muy buenas tardes. \r\nLes escribo porque estoy constituyendo mi empresa para comercializar (exportar) productos naturales peruanos como harina de maca, tocosh, y harina de coca micropulverizada. El fabricante es una empresa que tiene registros sanitarios de SENASA y otras certificaciones. Los productos se envasan en bolsas cerradas herméticamente y las presentaciones son dos, de 100 gr y 500 gr. \r\nMi consulta es la siguiente: \r\n\r\n¿Para poder exportar la harina de coca micropulverizada necesito algún permiso de ustedes como ENACO? Tal vez alguna certificación o contrato con el cliente (empresa naturista del exterior). La venta es B2B, a través de plataformas como alibaba o linio.\r\n\r\nQuedo atento a su amable respuesta. \r\n930 973 304.\r\n\r\nMuchas gracias de antemano', 1, '2021-04-05 02:13:08', '2021-04-05 02:13:08', 'Hoja de Coca Micropulverizada'),
(239, 'Delfín', 'Pérez Oscco', 'Delfín Pérez oscco', '1041667931', '931943567', 'delphynycus@hotmail.com', '05-04-2021', 'Qué debo hacer para comprar y vender hoja de coca.', 1, '2021-04-05 23:38:56', '2021-04-05 23:38:56', 'Menta y Hoja de Coca'),
(240, 'RUTH VALENTINA', 'QUIROZ VALENZUELA DE LEON', 'LEON MARKET', '10103384686', '942456502', 'ruthquirozv@yahoo.com', '07-04-2021', 'Señores: Enaco\r\n\r\nTengo clientes de mi negocio (ubicado en Huanchaco, Trujillo, Peru) me preguntan por hoja de coca para chacchar y deseo tener este producto para así cubrir esta necesidad de los clientes. \r\nComo tengo conocimiento que este producto necesita de permisos deseo orientación o un representante de ventas para comprar productos de enaco.\r\nO envieme el paso a paso para vender sus productos. \r\nMuchas Gracias por su atenciòn y a la espera de su respuesta.\r\nRuth Quiroz.', 1, '2021-04-07 08:16:06', '2021-04-07 08:16:06', 'Menta y Hoja de Coca'),
(241, 'KENT', 'VUCHETICH', 'Sanahata', '7901 Brookfield Dr.', '4023269965', 'kentvuchetich@gmail.com', '07-04-2021', 'I would lile to purchase for my herbalist.and healing company please.', 1, '2021-04-07 21:39:42', '2021-04-07 21:39:42', 'Hoja de Coca natural en polvo'),
(242, 'KENT', 'VUCHETICH', 'Sanahata', '7901 Brookfield Dr.', '4023269965', 'kentvuchetich@gmail.com', '07-04-2021', 'I would lile to purchase for my herbalist.and healing company please.', 1, '2021-04-07 21:39:44', '2021-04-07 21:39:44', 'Hoja de Coca natural en polvo'),
(243, 'KENT', 'VUCHETICH', 'Sanahata', '7901 Brookfield Dr.', '4023269965', 'kentvuchetich@gmail.com', '07-04-2021', 'I would lile to purchase for my herbalist.and healing company please.', 1, '2021-04-07 21:39:45', '2021-04-07 21:39:45', 'Hoja de Coca natural en polvo'),
(244, 'ROXANA', 'VAAMONDE', 'PERUFIX CONSULTING SAC', '20600031628', '(01) 276 6192', 'rvaamonde@perufix.com', '08-04-2021', 'Estimado Sres. Oficina de Sistemas | ENACO \r\nEncanta de saludarles cordialmente.\r\n\r\nMi nombre es Roxana Vaamonde Jefa comercial de la empresa PERU FIX CONSULTIN SAC, nos especializamos en soluciones y servicios de seguridad informática. Somos Partner de marcas como, KASPERSKY, ESET, GDATA entre otras reconocidas a nivel mundial. Me gustaría hacer llegar nuestra cartera de Software a la persona responsable en gestionar los proyectos de TI y abordar posibles proyectos para este año.\r\n\r\nAguardo su amable respuesta.\r\n¡Feliz día!', 1, '2021-04-08 22:10:38', '2021-04-08 22:10:38', NULL),
(245, 'ROXANA', 'VAAMONDE', 'PERUFIX CONSULTING SAC', '20600031628', '(01) 276 6192', 'rvaamonde@perufix.com', '08-04-2021', 'Estimado Sres. Oficina de Sistemas | ENACO \r\nEncanta de saludarles cordialmente.\r\n\r\nMi nombre es Roxana Vaamonde Jefa comercial de la empresa PERU FIX CONSULTIN SAC, nos especializamos en soluciones y servicios de seguridad informática. Somos Partner de marcas como, KASPERSKY, ESET, GDATA entre otras reconocidas a nivel mundial. Me gustaría hacer llegar nuestra cartera de Software a la persona responsable en gestionar los proyectos de TI y abordar posibles proyectos para este año.\r\n\r\nAguardo su amable respuesta.\r\n¡Feliz día!', 1, '2021-04-08 22:10:40', '2021-04-08 22:10:40', NULL),
(246, 'JULIO CESAR', 'SALVADOR CALLE', 'THE NORTH OF PERU TRADING', '4 de octubre. mz H lote 17. Piura', '930973304', 'julio.salvadorcalle@gmail.com', '08-04-2021', 'Estimados, este es el segundo mensaje que les envío. Por favor, contactarme a mi celular 930973304.\r\n\r\nMuchas gracias,', 1, '2021-04-09 01:35:31', '2021-04-09 01:35:31', 'Hoja de Coca Micropulverizada'),
(247, 'Angel', 'Panduro Paredes', 'Universidad Privada del Norte', '20215276024', '+51996115703', 'paredes9991@gmail.com', '10-04-2021', 'Buenas tardes,\r\n\r\nDesearía poder tener una breve entrevista  con algún colaborador de Enaco para poder incluirlo en mi informe del curso Financiamiento, somos un grupo de estudiantes de 8vo ciclo de Negocios Internacionales y quedaríamos muy agradecidos de poder contar con unos minutos de su tiempo.\r\nAgradeceré me puedan confirmar para poder quedar el día y la hora.\r\nQuedo muy atento a su pronta respuesta.\r\n\r\nSaludos cordiales.', 1, '2021-04-11 01:48:29', '2021-04-11 01:48:29', 'Kintu'),
(248, 'Carlos Jesus', 'Fiuza Miranda', 'Carlos Jesus Fiuza Miranda', 'Virgen del camino, 49 bajo. 36001. Pontevedra. España', '+34653908020', 'cica@mundo-r.com', '13-04-2021', NULL, 1, '2021-04-13 19:32:23', '2021-04-13 19:32:23', 'Menta y Hoja de Coca');

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

--
-- Volcado de datos para la tabla `contacto_sugerencia`
--

INSERT INTO `contacto_sugerencia` (`id`, `tipo`, `correo`, `nombres`, `telefono`, `documento`, `nacionalidad`, `mensaje`, `check`, `formaContacto`, `fecha`, `created_at`, `updated_at`) VALUES
(1, 'Comercial', 'miguelprincipemolleda@gmail.com', 'Miguel principe molleda huaman', '928946816', '06004005', 'Peruana', 'Solicito saber precio por kilos de la arina de coca', 1, 'Email', '06-09-2020', '2020-09-06 18:50:04', '2020-09-06 18:50:04'),
(2, 'Comercial', 'miguelprincipemolleda@gmail.com', 'Miguel principe molleda huaman', '928946816', '06004005', 'Peruana', 'Solicito saber precio por kilos de la arina de coca', 1, 'Email', '06-09-2020', '2020-09-06 18:50:04', '2020-09-06 18:50:04'),
(3, 'Comercial', 'miguelprincipemolleda@gmail.com', 'Miguel principe molleda huaman', '928946816', '06004005', 'Peruana', 'Solicito saber precio por kilos de la arina de coca', 1, 'Email', '06-09-2020', '2020-09-06 18:50:05', '2020-09-06 18:50:05'),
(4, 'Comercial', 'miguelprincipemolleda@gmail.com', 'Miguel principe molleda huaman', '928946816', '06004005', 'Peruana', 'Solicito saber precio por kilos de la arina de coca', 1, 'Email', '06-09-2020', '2020-09-06 18:50:07', '2020-09-06 18:50:07'),
(5, 'Comercial', 'miguelprincipemolleda@gmail.com', 'Miguel principe molleda huaman', '928946816', '06004005', 'Peruana', 'Solicito saber precio por kilos de la arina de coca', 1, 'Email', '06-09-2020', '2020-09-06 18:50:07', '2020-09-06 18:50:07'),
(6, 'Comercial', 'miguelprincipemolleda@gmail.com', 'Miguel principe molleda huaman', '928946816', '06004005', 'Peruana', 'Solicito saber precio por kilos de la arina de coca', 1, 'Email', '06-09-2020', '2020-09-06 18:50:07', '2020-09-06 18:50:07'),
(7, 'Comercial', 'mspacahuala2017@gmail.com', 'Jhon tello', '956425758', '43372134', 'Peruana', '1. Quiero vender hoja de coca como hago para tramitar mi licencia?\r\n2. Uds venden la hoja de coca y quiero saber  sus precios y variedades \r\nGracias por sus respuestas', 1, 'Email', '07-09-2020', '2020-09-07 16:05:02', '2020-09-07 16:05:02'),
(8, 'Logística', 'nc.sumajwasi.2@gmail.com', 'GIOVANA FIGUEROA', '949847813', '42954863', 'PERUANA', 'DESEAMOS PRESENTAR UNA CARTA DE PRESENTACION DE LA EMPRESA NEGOCIACIONES & CONSTRUCCIONES SUMAJ WASI SAC, , especializada en servicios generales: trabajos en Melamine y Drywall , trabajos en acero, trabajos en granito, mármol y cuarzo, acabados en interiores y exteriores en todas las variedades  de cristales y láminas de seguridad como ventanas, mamparas, espejos; así como mantenimiento de instalaciones eléctricas y sanitarias, brindando soluciones a sus necesidades de iluminación, suministro de energía eléctrica y mantenimiento de sus equipos e instalaciones.', 1, 'Email', '11-09-2020', '2020-09-12 00:20:14', '2020-09-12 00:20:14'),
(9, 'Otros', 'Kazumy.apaza2020@gmail.com', 'Korazon Apaza Chayña', '972903604', '48845554', 'Peruana', 'Buenos dias...Un Agradecimiento a la Empresa De ENACO.....  Yo quiero pedirle UNA AYUDA POR FAVOR...', 1, 'Teléfono', '12-09-2020', '2020-09-12 13:16:59', '2020-09-12 13:16:59'),
(10, 'Otros', 'Kazumy.apaza2020@gmail.com', 'Korazon Apaza Chayña', '972903604', '48845554', 'Peruana', 'Buenos dias...Un Agradecimiento a la Empresa De ENACO.....  Yo quiero pedirle UNA AYUDA POR FAVOR...', 1, 'Teléfono', '12-09-2020', '2020-09-12 13:17:02', '2020-09-12 13:17:02'),
(11, 'Otros', 'Kazumy.apaza2020@gmail.com', 'Korazón Apaza Chayña', '972903604', '48845554', 'Peruana', 'Buenos dias .... Felicidades por sus lavores en la Empresa... Yo quisiera pedirles Una Ayuda.... De todo Corazón se los pido..... Gracias..', 1, 'Email', '12-09-2020', '2020-09-12 13:24:00', '2020-09-12 13:24:00'),
(12, 'Otros', 'Kazumy.apaza2020@gmail.com', 'Korazón Apaza Chayña', '972903604', '48845554', 'Peruana', 'Buenos dias .... Felicidades por sus lavores en la Empresa... Yo quisiera pedirles Una Ayuda.... De todo Corazón se los pido..... Gracias..', 1, 'Email', '12-09-2020', '2020-09-12 13:31:20', '2020-09-12 13:31:20'),
(13, 'Otros', 'Kazumy.apaza2020@gmail.com', 'Korazón Apaza Chayña', '972903604', '48845554', 'Peruana', 'Buenos dias .... Felicidades por sus lavores en la Empresa... Yo quisiera pedirles Una Ayuda.... De todo Corazón se los pido..... Gracias..', 1, 'Teléfono', '12-09-2020', '2020-09-12 13:31:29', '2020-09-12 13:31:29'),
(14, 'Comercial', 'stibreensm2018@gmail.com', 'Stib', '982263662', '48520699', 'Peruana', 'Quiero tener información sobre como poder producir y comerciar la hoja de coca de manera legal.', 1, 'Email', '18-09-2020', '2020-09-19 01:06:21', '2020-09-19 01:06:21'),
(15, 'Comercial', 'milkaduran9@gmail.com', 'Milka Duran Rodríguez', '929399137', '24708612', 'Peruana', NULL, 1, 'Email', '23-09-2020', '2020-09-23 07:35:19', '2020-09-23 07:35:19'),
(16, 'Comercial', 'milkaduran9@gmail.com', 'Milka Duran Rodríguez', '929399137', '24708612', 'Peruana', NULL, 1, 'Email', '23-09-2020', '2020-09-23 07:35:20', '2020-09-23 07:35:20'),
(17, 'Comercial', 'milkaduran9@gmail.com', 'Milka Duran Rodríguez', '929399137', '24708612', 'Peruana', NULL, 1, 'Email', '23-09-2020', '2020-09-23 07:35:21', '2020-09-23 07:35:21'),
(18, 'Comercial', 'milkaduran9@gmail.com', 'Milka Duran Rodríguez', '929399137', '24708612', 'Peruana', NULL, 1, 'Email', '23-09-2020', '2020-09-23 07:35:23', '2020-09-23 07:35:23'),
(19, 'Comercial', 'milkaduran9@gmail.com', 'Milka Duran Rodríguez', '929399137', '24708612', 'Peruana', NULL, 1, 'Email', '23-09-2020', '2020-09-23 07:35:23', '2020-09-23 07:35:23'),
(20, 'Comercial', 'angelgboatorres1994@gmail.com', 'Ángel Gamboa Torres', '941499133', '71800153', 'Peruana', 'Buenas tardes, una consulta tengo mi bodegita y también quiero vender la hoja de coca para consumo humano, cuales son los requisitos para poder realizar mi negocio', 1, 'Email', '24-09-2020', '2020-09-25 03:32:10', '2020-09-25 03:32:10'),
(21, 'Comercial', 'angelgboatorres1994@gmail.com', 'Ángel Gamboa Torres', '941499133', '71800153', 'Peruana', 'Buenas tardes, una consulta tengo mi bodegita y también quiero vender la hoja de coca para consumo humano, cuales son los requisitos para poder realizar mi negocio', 1, 'Email', '24-09-2020', '2020-09-25 03:32:11', '2020-09-25 03:32:11'),
(22, 'Comercial', 'angelgboatorres1994@gmail.com', 'Ángel Gamboa Torres', '941499133', '71800153', 'Peruana', 'Buenas tardes, una consulta tengo mi bodegita y también quiero vender la hoja de coca para consumo humano, cuales son los requisitos para poder realizar mi negocio', 1, 'Email', '24-09-2020', '2020-09-25 03:32:19', '2020-09-25 03:32:19'),
(23, 'Comercial', 'angelgboatorres1994@gmail.com', 'Ángel Gamboa Torres', '941499133', '71800153', 'Peruana', 'Buenas tardes, una consulta tengo mi bodegita y también quiero vender la hoja de coca para consumo humano, cuales son los requisitos para poder realizar mi negocio', 1, 'Email', '24-09-2020', '2020-09-25 03:32:20', '2020-09-25 03:32:20'),
(24, 'Comercial', 'percyponciano@gmail.com', 'Percy', '923246590', '40774578', 'Peruana', 'Buenos dias, quisiera que me enviaran una proforma de todos sus productos al por mayor \r\n\r\nEspero su pronta respuesta', 1, 'Email', '28-09-2020', '2020-09-28 19:37:28', '2020-09-28 19:37:28'),
(25, 'Comercial', 'andyhuansca@gmail.com', 'andy', '970642383', '48095287', 'peru', NULL, 1, 'Teléfono', '01-10-2020', '2020-10-02 02:41:46', '2020-10-02 02:41:46'),
(26, 'Comercial', 'andyhuansca@gmail.com', 'andy', '970642383', '48095287', 'peru', NULL, 1, 'Teléfono', '01-10-2020', '2020-10-02 02:41:47', '2020-10-02 02:41:47'),
(27, 'Comercial', 'andyhuansca@gmail.com', 'andy', '970642383', '48095287', 'peru', NULL, 1, 'Teléfono', '01-10-2020', '2020-10-02 02:41:50', '2020-10-02 02:41:50'),
(28, 'Comercial', 'ndch9@hotmail.com', 'Hugo Davalos Novoa', '924332872', '40154449', 'Peruana', 'Buenos días, quisiera saber si hacen envíos a provincias exactamente para Cajamarca y cual es el monto de mínimo:\r\nAtte\r\nHugo', 1, 'Email', '04-10-2020', '2020-10-04 17:07:02', '2020-10-04 17:07:02'),
(29, 'Comercial', 'ndch9@hotmail.com', 'Hugo Davalos Novoa', '924332872', '40154449', 'Peruana', 'Buenos días, quisiera saber si hacen envíos a provincias exactamente para Cajamarca y cual es el monto de mínimo:\r\nAtte\r\nHugo', 1, 'Email', '04-10-2020', '2020-10-04 17:07:04', '2020-10-04 17:07:04'),
(30, 'Comercial', 'ndch9@hotmail.com', 'Hugo Davalos Novoa', '924332872', '40154449', 'Peruana', 'Buenos días, quisiera saber si hacen envíos a provincias exactamente para Cajamarca y cual es el monto de mínimo:\r\nAtte\r\nHugo', 1, 'Email', '04-10-2020', '2020-10-04 17:07:06', '2020-10-04 17:07:06'),
(31, 'Recursos Humanos', 'michelle.alvaradon@gmail.com', 'MICHELLE STEPHANIE', '937413204', '73118131', 'peruana', 'Hola, un gusto saludarlos. MI nombre es Michelle Alvarado. Soy estudiante de Psicología de la Pontificia Universidad Católica del Perú y estoy buscando una oportunidad para hacer mis prácticas pre profesionales. Me gustaría enviarles mi CV.', 1, 'Email', '12-10-2020', '2020-10-12 10:20:21', '2020-10-12 10:20:21'),
(32, 'Comercial', 'kiltrejol@gmail.com', 'KIL TREJO LUGO', '957433605', '22485698', 'Peruana', 'Buenas  tardes.\r\nSoy dueño de una empresa agroindustrial, queremos sembrar hoja de coca, con producción orgánica para tranformarlo en polvo soluble, capsulas, filtrantes y tabletas, es posible una licencia o autorización?\r\nEn espera de su gentil respuesta.', 1, 'Email', '14-10-2020', '2020-10-15 01:43:34', '2020-10-15 01:43:34'),
(33, 'Otros', 'alexiaromi1806@gmail.com', 'Alexia', '979366581', '70040889', 'Peruana', 'Informacion nutricional del polvo de coca', 1, 'Email', '23-10-2020', '2020-10-23 17:57:31', '2020-10-23 17:57:31'),
(34, 'Otros', 'alexiaromi1806@gmail.com', 'Alexia', '979366581', '70040889', 'Peruana', 'Informacion nutricional del polvo de coca', 1, 'Email', '23-10-2020', '2020-10-23 17:57:33', '2020-10-23 17:57:33'),
(35, 'Otros', 'alexiaromi1806@gmail.com', 'Alexia', '979366581', '70040889', 'Peruana', 'Informacion nutricional del polvo de coca', 1, 'Email', '23-10-2020', '2020-10-23 17:57:34', '2020-10-23 17:57:34'),
(36, 'Comercial', 'mldamian65@gmail.com', 'Mario Damián Aguilar', '959099708', '06652786', 'Peruana', 'Mi consulta es sobre la salida del país de semillas o plantas de coca, es posible su exportación ?', 1, 'Email', '27-10-2020', '2020-10-27 09:56:46', '2020-10-27 09:56:46'),
(37, 'Otros', 'nenasantistebann@gmail.com', 'Nelly navarrete santisteban', '994183349', '10599446', 'Peruana', 'Buenos dias quiero comprar harina de coca por kilo quisiera saber cuánto es el costo por kilo y si tienen sede en lima', 1, 'Email', '27-10-2020', '2020-10-27 21:34:41', '2020-10-27 21:34:41'),
(38, 'Otros', 'nenasantistebann@gmail.com', 'Nelly navarrete santisteban', '994183349', '10599446', 'Peruana', 'Buenos dias quiero comprar harina de coca por kilo quisiera saber cuánto es el costo por kilo y si tienen sede en lima', 1, 'Email', '27-10-2020', '2020-10-27 21:34:44', '2020-10-27 21:34:44'),
(39, 'Comercial', 'ricardocasallas@hotmail.com', 'efrain laverde', '+593984464025', '1756843940001', 'ecuatoriano', 'buenas tardes nuestro interés es comprar materia prima y productos para la fabricación de caramelos de coca, pero esta fabricación deseamos hacer en ecuador por lo tanto es importante ver si ustedes nos suministran las materias primas para esta labor, asi como conocer de los productos ya terminados que  ustedes venden conocer fichas técnicas y precios F.O.B  puerto peruano\r\nagradezco su importante gestión y respuesta', 1, 'Email', '28-10-2020', '2020-10-29 03:42:18', '2020-10-29 03:42:18'),
(40, 'Recursos Humanos', 'alzeba_66@hotmail.com', 'Alejandro', '974373689', '24950600', 'Peruano', 'Sobre las prácticas pre profecionales que vuestra entidad necesita, detalles en la convocatoria que publicaron.', 1, 'Teléfono', '09-11-2020', '2020-11-09 23:27:27', '2020-11-09 23:27:27'),
(41, 'Recursos Humanos', 'alzeba_66@hotmail.com', 'Alejandro', '974373689', '24950600', 'Peruano', 'Sobre las prácticas pre profecionales que vuestra entidad necesita, detalles en la convocatoria que publicaron.', 1, 'Teléfono', '09-11-2020', '2020-11-09 23:27:28', '2020-11-09 23:27:28'),
(42, 'Recursos Humanos', 'alzeba_66@hotmail.com', 'Alejandro', '974373689', '24950600', 'Peruano', 'Sobre las prácticas pre profecionales que vuestra entidad necesita, detalles en la convocatoria que publicaron.', 1, 'Teléfono', '09-11-2020', '2020-11-09 23:27:30', '2020-11-09 23:27:30'),
(43, 'Recursos Humanos', 'alzeba_66@hotmail.com', 'Alejandro', '974373689', '24950600', 'Peruano', 'Sobre las prácticas pre profecionales que vuestra entidad necesita, detalles en la convocatoria que publicaron.', 1, 'Teléfono', '09-11-2020', '2020-11-09 23:27:31', '2020-11-09 23:27:31'),
(44, 'Recursos Humanos', 'alzeba_66@hotmail.com', 'Alejandro', '974373689', '24950600', 'Peruano', 'Sobre las prácticas pre profecionales que vuestra entidad necesita, detalles en la convocatoria que publicaron.', 1, 'Teléfono', '09-11-2020', '2020-11-09 23:27:31', '2020-11-09 23:27:31'),
(45, 'Recursos Humanos', 'alzeba_66@hotmail.com', 'Alejandro', '974373689', '24950600', 'Peruano', 'Sobre las prácticas pre profecionales que vuestra entidad necesita, detalles en la convocatoria que publicaron.', 1, 'Teléfono', '09-11-2020', '2020-11-09 23:27:32', '2020-11-09 23:27:32'),
(46, 'Otros', '015200580e@uandina.edu.pe', 'Bryan', '962234600', '75667589', 'peruano', 'muy buenas tardes, mi consulta trata sobre el practicante para la sede de Quillabamba que requiere la empresa, a través de que medio dan a conocer a la persona apta para el puesto, gracias.', 1, 'Email', '13-11-2020', '2020-11-14 03:55:47', '2020-11-14 03:55:47'),
(47, 'Otros', '015200580e@uandina.edu.pe', 'Bryan', '962234600', '75667589', 'peruano', 'muy buenas tardes, mi consulta trata sobre el practicante para la sede de Quillabamba que requiere la empresa, a través de que medio dan a conocer a la persona apta para el puesto, gracias.', 1, 'Email', '13-11-2020', '2020-11-14 03:55:51', '2020-11-14 03:55:51'),
(48, 'Comercial', 'maquinariastumi@gmail.com', 'sauro miranda', '958074890', '43165405', 'peruano', 'buenas tardes, mi consulta es . tengo una linea de alimentos saludables en arequipa peru y que debo hacer para comercializar su producto y también si yo como empresa puedo solicitar mi propio registro sanitario para harina de oca y derivados.', 1, 'Email', '23-11-2020', '2020-11-24 03:47:00', '2020-11-24 03:47:00'),
(49, 'Comercial', 'N00132162@upn.pe', 'Willy', '978323942', '47223699', 'Peruana', 'Buenas tardes, quisiera saber cuales son los requisitos para poder comercializar la hoja de coca, de manera tradicional', 1, 'Teléfono', '13-12-2020', '2020-12-14 00:52:52', '2020-12-14 00:52:52'),
(50, 'Comercial', 'romerojanamparolando gemael .com .p', 'Rolando Romero Janampa', '952746681', '43761644', 'peru', 'Quiero producir la coca', 1, 'Teléfono', '18-12-2020', '2020-12-18 16:10:58', '2020-12-18 16:10:58'),
(51, 'Comercial', 'romerojanamparolando gemael .com .p', 'Rolando Romero Janampa', '952746681', '43761644', 'peru', 'Quiero producir la coca', 1, 'Teléfono', '18-12-2020', '2020-12-18 16:11:09', '2020-12-18 16:11:09'),
(52, 'Comercial', 'romerojanamparolando gemael .com .p', 'Rolando Romero Janampa', '952746681', '43761644', 'peru', 'Quiero producir la coca', 1, 'Teléfono', '18-12-2020', '2020-12-18 16:11:10', '2020-12-18 16:11:10'),
(53, 'Comercial', 'romerojanamparolando gemael .com .p', 'Rolando Romero Janampa', '952746681', '43761644', 'peru', 'Quiero producir la coca', 1, 'Teléfono', '18-12-2020', '2020-12-18 16:11:10', '2020-12-18 16:11:10'),
(54, 'Comercial', 'romerojanamparolando gemael .com .p', 'Rolando Romero Janampa', '952746681', '43761644', 'peru', 'Quiero producir la coca', 1, 'Teléfono', '18-12-2020', '2020-12-18 16:11:26', '2020-12-18 16:11:26'),
(55, 'Comercial', 'romerojanamparolando gemael .com .p', 'Rolando Romero Janampa', '952746681', '43761644', 'peru', 'Quiero producir la coca', 1, 'Teléfono', '18-12-2020', '2020-12-18 16:11:27', '2020-12-18 16:11:27'),
(56, 'Comercial', 'romerojanamparolando gemael .com .p', 'Rolando Romero Janampa', '952746681', '43761644', 'peru', 'Quiero producir la coca', 1, 'Teléfono', '18-12-2020', '2020-12-18 16:11:27', '2020-12-18 16:11:27'),
(57, 'Comercial', 'romerojanamparolando gemael .com .p', 'Rolando Romero Janampa', '952746681', '43761644', 'peru', 'Quiero producir la coca', 1, 'Teléfono', '18-12-2020', '2020-12-18 16:11:27', '2020-12-18 16:11:27'),
(58, 'Comercial', 'romerojanamparolando gemael .com .p', 'Rolando Romero Janampa', '952746681', '43761644', 'peru', 'Quiero producir la coca', 1, 'Teléfono', '18-12-2020', '2020-12-18 16:11:32', '2020-12-18 16:11:32'),
(59, 'Comercial', 'romerojanamparolando gemael .com .p', 'Rolando Romero Janampa', '952746681', '43761644', 'peru', 'Quiero producir la coca', 1, 'Teléfono', '18-12-2020', '2020-12-18 16:11:33', '2020-12-18 16:11:33'),
(60, 'Comercial', 'romerojanamparolando gemael .com .p', 'Rolando Romero Janampa', '952746681', '43761644', 'peru', 'Quiero producir la coca', 1, 'Teléfono', '18-12-2020', '2020-12-18 16:11:34', '2020-12-18 16:11:34'),
(61, 'Comercial', 'romerojanamparolando gemael .com .p', 'Rolando Romero Janampa', '952746681', '43761644', 'peru', 'Quiero producir la coca', 1, 'Email', '18-12-2020', '2020-12-18 16:14:51', '2020-12-18 16:14:51'),
(62, 'Comercial', 'romerojanamparolando gemael .com .p', 'Rolando Romero Janampa', '952746681', '43761644', 'peru', 'Quiero producir la coca', 1, 'Email', '18-12-2020', '2020-12-18 16:14:58', '2020-12-18 16:14:58'),
(63, 'Otros', 'danielccappa@gmail.com', 'Cesar ricapa', '2763728', '45475764', 'Peruana', 'Buenos días me gustaría vender las hojas de coca sin procesar ¿Cuál es la cantidad Mínima que debo comprar semanalmente o cada cuánto tiempo como mínimo y el precio para un minorista ? De todas me interesa la hoja Tupac y su temporada . Por último me podría explicar brevemente ,ya que es vital para mi público de deportistas de los cuales algunos si requieren control de dopaje y se que los alcaloides de la coca son prohibidos en esos casos , ¿Cual es el tiempo que debe dejar (preveer) de consumir hojas de coca una persona para tener resultados imperceptibles de los alcaloides de la coca en una prueba de dopaje? Le pregunto porque en un lado leí 24hs pero los exámenes que hacen antes de competencias como las olimpiadas van mucho más atrás como meses y hasta años aunque creo que son drogas más difíciles de eliminar por eso duran tanto , si le es posible mándeme más información acerca de las hojas de coca que vende muchas gracias.', 1, 'Email', '05-01-2021', '2021-01-05 14:28:17', '2021-01-05 14:28:17'),
(64, 'Comercial', 'ventas2@groupempresarial-aa.com', 'David Santana', '918379539', '002933498', 'VENEZOLANO', 'Estimados (as)\r\n\r\nSRES: SANTA CATALINA\r\n\r\nEs un placer para nosotros presentarle a Group Empresarial A&A SAC, una empresa peruana que brinda servicios de Mantenimientos Predictivos, Preventivos y Correctivos, limpieza, distribución de ambientes y servicios complementarios en diversos rubros tales como Restaurantes, Cafeterías, Hoteles, Minería e Industria.   \r\nGroup Empresarial A&A S.A.C. se especializa en el diseño, fabricación, distribución y servicios de equipos de cocina industrial y aparatos de refrigeración comercial, brindando soluciones innovadoras de acuerdo a los requerimientos específicos de sus clientes, manejando altos estándares de calidad y seguridad para el óptimo desarrollo del servicio.\r\n\r\nEs por ello, que ponemos a su disposición toda nuestra experiencia, infraestructura, tecnología, profesionalismo, eficiencia y los mejores costos del mercado para convertirnos en su proveedor directo.\r\n\r\nNos despedimos de ustedes no sin antes agradecer por la atención a esta misiva.\r\n\r\nQuedamos a la espera de sus gratas noticias.\r\n\r\n	Atentamente,\r\n\r\n    David Santana\r\n    Representante de Ventas\r\n    Teléfono: 918379539', 1, 'Email', '13-01-2021', '2021-01-13 19:13:07', '2021-01-13 19:13:07'),
(65, 'Comercial', 'ventas2@groupempresarial-aa.com', 'David Santana', '918379539', '002933498', 'VENEZOLANO', 'Estimados (as)\r\n\r\nSRES: SANTA CATALINA\r\n\r\nEs un placer para nosotros presentarle a Group Empresarial A&A SAC, una empresa peruana que brinda servicios de Mantenimientos Predictivos, Preventivos y Correctivos, limpieza, distribución de ambientes y servicios complementarios en diversos rubros tales como Restaurantes, Cafeterías, Hoteles, Minería e Industria.   \r\nGroup Empresarial A&A S.A.C. se especializa en el diseño, fabricación, distribución y servicios de equipos de cocina industrial y aparatos de refrigeración comercial, brindando soluciones innovadoras de acuerdo a los requerimientos específicos de sus clientes, manejando altos estándares de calidad y seguridad para el óptimo desarrollo del servicio.\r\n\r\nEs por ello, que ponemos a su disposición toda nuestra experiencia, infraestructura, tecnología, profesionalismo, eficiencia y los mejores costos del mercado para convertirnos en su proveedor directo.\r\n\r\nNos despedimos de ustedes no sin antes agradecer por la atención a esta misiva.\r\n\r\nQuedamos a la espera de sus gratas noticias.\r\n\r\n	Atentamente,\r\n\r\n    David Santana\r\n    Representante de Ventas\r\n    Teléfono: 918379539', 1, 'Email', '13-01-2021', '2021-01-13 19:13:08', '2021-01-13 19:13:08'),
(66, 'Comercial', 'ventas2@groupempresarial-aa.com', 'David Santana', '918379539', '002933498', 'VENEZOLANO', 'Estimados (as)\r\n\r\nSRES: SANTA CATALINA\r\n\r\nEs un placer para nosotros presentarle a Group Empresarial A&A SAC, una empresa peruana que brinda servicios de Mantenimientos Predictivos, Preventivos y Correctivos, limpieza, distribución de ambientes y servicios complementarios en diversos rubros tales como Restaurantes, Cafeterías, Hoteles, Minería e Industria.   \r\nGroup Empresarial A&A S.A.C. se especializa en el diseño, fabricación, distribución y servicios de equipos de cocina industrial y aparatos de refrigeración comercial, brindando soluciones innovadoras de acuerdo a los requerimientos específicos de sus clientes, manejando altos estándares de calidad y seguridad para el óptimo desarrollo del servicio.\r\n\r\nEs por ello, que ponemos a su disposición toda nuestra experiencia, infraestructura, tecnología, profesionalismo, eficiencia y los mejores costos del mercado para convertirnos en su proveedor directo.\r\n\r\nNos despedimos de ustedes no sin antes agradecer por la atención a esta misiva.\r\n\r\nQuedamos a la espera de sus gratas noticias.\r\n\r\n	Atentamente,\r\n\r\n    David Santana\r\n    Representante de Ventas\r\n    Teléfono: 918379539', 1, 'Email', '13-01-2021', '2021-01-13 19:13:11', '2021-01-13 19:13:11'),
(67, 'Recursos Humanos', 'fiorelita_15_20_43@hotmail.com', 'Fiorella', '947720547', '47643806', 'Peruana', 'Buenas tardes me dirigía a su institución para poder saber de las respuesta de la convocatoria que caduco el 04 de enero del 2021 para asesor comercial', 1, 'Email', '14-01-2021', '2021-01-14 21:38:32', '2021-01-14 21:38:32'),
(68, 'Recursos Humanos', 'fiorelita_15_20_43@hotmail.com', 'Fiorella', '947720547', '47643806', 'Peruana', 'Buenas tardes me dirigía a su institución para poder saber de las respuesta de la convocatoria que caduco el 04 de enero del 2021 para asesor comercial', 1, 'Email', '14-01-2021', '2021-01-14 21:38:34', '2021-01-14 21:38:34'),
(69, 'Recursos Humanos', 'fiorelita_15_20_43@hotmail.com', 'Fiorella', '947720547', '47643806', 'Peruana', 'Buenas tardes me dirigía a su institución para poder saber de las respuesta de la convocatoria que caduco el 04 de enero del 2021 para asesor comercial', 1, 'Email', '14-01-2021', '2021-01-14 21:38:35', '2021-01-14 21:38:35'),
(70, 'Recursos Humanos', 'carmenatayupanqui@gmail.com', 'Mary carmen', '973676233', '48392541', 'Perú', 'Me presenté al puesto de prácticas Profesionales en derecho- cusco, quisiera saber dónde puedo verificar los resultados', 1, 'Email', '14-01-2021', '2021-01-15 04:26:55', '2021-01-15 04:26:55'),
(71, 'Recursos Humanos', 'carmenatayupanqui@gmail.com', 'Mary carmen', '973676233', '48392541', 'Perú', 'Me presenté al puesto de prácticas Profesionales en derecho- cusco, quisiera saber dónde puedo verificar los resultados', 1, 'Email', '14-01-2021', '2021-01-15 04:26:57', '2021-01-15 04:26:57'),
(72, 'Recursos Humanos', 'carmenatayupanqui@gmail.com', 'Mary carmen', '973676233', '48392541', 'Perú', 'Me presenté al puesto de prácticas Profesionales en derecho- cusco, quisiera saber dónde puedo verificar los resultados', 1, 'Email', '14-01-2021', '2021-01-15 04:26:59', '2021-01-15 04:26:59'),
(73, 'Recursos Humanos', 'carmenatayupanqui@gmail.com', 'Mary carmen', '973676233', '48392541', 'Perú', 'Me presenté al puesto de prácticas Profesionales en derecho- cusco, quisiera saber dónde puedo verificar los resultados', 1, 'Email', '15-01-2021', '2021-01-15 05:20:52', '2021-01-15 05:20:52'),
(74, 'Recursos Humanos', 'carmenatayupanqui@gmail.com', 'Mary carmen', '973676233', '48392541', 'Perú', 'Me presenté al puesto de prácticas Profesionales en derecho- cusco, quisiera saber dónde puedo verificar los resultados', 1, 'Email', '15-01-2021', '2021-01-15 05:20:53', '2021-01-15 05:20:53'),
(75, 'Recursos Humanos', 'carmenatayupanqui@gmail.com', 'Mary carmen', '973676233', '48392541', 'Perú', 'Me presenté al puesto de prácticas Profesionales en derecho- cusco, quisiera saber dónde puedo verificar los resultados', 1, 'Email', '15-01-2021', '2021-01-15 05:20:55', '2021-01-15 05:20:55'),
(76, 'Recursos Humanos', 'carmenatayupanqui@gmail.com', 'Mary carmen', '973676233', '48392541', 'Perú', 'Me presenté al puesto de prácticas Profesionales en derecho- cusco, quisiera saber dónde puedo verificar los resultados', 1, 'Email', '15-01-2021', '2021-01-15 05:20:55', '2021-01-15 05:20:55'),
(77, 'Comercial', 'Mark.Alexander.King@gmail.com', 'Mark A King', '+353852256796', '0000000', 'Irlandés', 'Estimado Señores yo Dirijo una nueva empresa de bebidas, ya tengo la receta perfeccionada cuándo estaba en Perú y necesito un suministro constante de hojas de coca decocanizadas. Mi idea empezó cuándo leí un artículo sobre cómo añadiendo el extracto decocanizadas de hojas de Coca puede ayudar reducir la azúcar del las bebidas de cola y reducir la azúcar dentro de chocolate, quedó usar esto en las bebidas que yo produzco.\r\nMe gustaría empezar con comprar un Kilogramo de polvo de Hojas de Coca decocanizadas.\r\n\r\nAtentamente\r\nMark A King', 1, 'Email', '20-01-2021', '2021-01-20 05:25:42', '2021-01-20 05:25:42'),
(78, 'Comercial', 'Mark.Alexander.King@gmail.com', 'Mark A King', '+353852256796', '0000000', 'Irlandés', 'Estimado Señores yo Dirijo una nueva empresa de bebidas, ya tengo la receta perfeccionada cuándo estaba en Perú y necesito un suministro constante de hojas de coca decocanizadas. Mi idea empezó cuándo leí un artículo sobre cómo añadiendo el extracto decocanizadas de hojas de Coca puede ayudar reducir la azúcar del las bebidas de cola y reducir la azúcar dentro de chocolate, quedó usar esto en las bebidas que yo produzco.\r\nMe gustaría empezar con comprar un Kilogramo de polvo de Hojas de Coca decocanizadas.\r\n\r\nAtentamente\r\nMark A King', 1, 'Email', '20-01-2021', '2021-01-20 05:25:44', '2021-01-20 05:25:44'),
(79, 'Comercial', 'mil23van02@gmail.com', 'VANESSA', '916970346', '46764649', 'Peruana', 'Saludos cordiales, desearia información sobre los requisitos que se necesita para sembrar la hoja de coca de forma legalizada, muchas gracias.', 1, 'Email', '08-02-2021', '2021-02-08 18:04:21', '2021-02-08 18:04:21'),
(80, 'Otros', 'adely_22_24@hotmail.com', 'Adely Lucia Centeno Estrada', '990666610', '44750980', 'Peruana', 'Buen día por favor si me podrían indicar dónde están los resultados de prácticas en Derecho para oficina Jurídica de ENACO - Cusco el último día para presentar CV fue el día 11/01/2021. Gracias.', 1, 'Email', '08-02-2021', '2021-02-08 19:26:17', '2021-02-08 19:26:17'),
(81, 'Otros', 'adely_22_24@hotmail.com', 'Adely Lucia Centeno Estrada', '990666610', '44750980', 'Peruana', 'Buen día por favor si me podrían indicar dónde están los resultados de prácticas en Derecho para oficina Jurídica de ENACO - Cusco el último día para presentar CV fue el día 11/01/2021. Gracias.', 1, 'Email', '08-02-2021', '2021-02-08 19:26:20', '2021-02-08 19:26:20'),
(82, 'Otros', 'adely_22_24@hotmail.com', 'Adely Lucia Centeno Estrada', '990666610', '44750980', 'Peruana', 'Buen día por favor si me podrían indicar dónde están los resultados de prácticas en Derecho para oficina Jurídica de ENACO - Cusco el último día para presentar CV fue el día 11/01/2021. Gracias.', 1, 'Email', '08-02-2021', '2021-02-08 19:26:21', '2021-02-08 19:26:21'),
(83, 'Otros', 'miguel.nizama10@gmail.com', 'Miguel Angel Danilo Nizama Bustamante', '951068551', '71573865', 'Peruana', 'Buenas tardes quisiera como es el proceso para poder pedir una muestra de hoja de coca Erythroxylum novogranatense var. truxillense, soy estudiante de estomatología de la universidad señor de sipan de chiclayo y estoy realizando mi tesis llamada EFECTO ANTIBACTERIANO DEL EXTRACTO ETANÓLICO DE  Erytroxylum Coca “COCA” FRENTE Enterococcus Faecalis ATCC®51299™ , por lo cual desearía comunicarme con un asesor para que me indique todo los procedimientos, Muchas gracias.', 1, 'Email', '12-02-2021', '2021-02-13 00:21:03', '2021-02-13 00:21:03'),
(84, 'Otros', 'compras@corporacionliderperu.com', 'ANA KARINA', '924957902', '74315528', 'Peruana', 'Buenos días, soy del área contable de la empresa Corporacion Lider Peru S.A (RUC: 20517482472) en la cual quería informar que se actualizó el domicilio fiscal y quisiera su apoyo que al momento de realizar las facturas salga la nueva dirección.\r\nDOMICILIO FISCAL ACTUAL: \r\nCAL. LENCIO PRADO 446 - SURQUILLO.\r\n\r\nGracias por su atención.', 1, 'Email', '13-02-2021', '2021-02-13 21:24:05', '2021-02-13 21:24:05'),
(85, 'Otros', 'compras@corporacionliderperu.com', 'ANA KARINA', '924957902', '74315528', 'Peruana', 'Buenos días, soy del área contable de la empresa Corporacion Lider Peru S.A (RUC: 20517482472) en la cual quería informar que se actualizó el domicilio fiscal y quisiera su apoyo que al momento de realizar las facturas salga la nueva dirección.\r\nDOMICILIO FISCAL ACTUAL: \r\nCAL. LENCIO PRADO 446 - SURQUILLO.\r\n\r\nGracias por su atención.', 1, 'Email', '13-02-2021', '2021-02-13 21:24:07', '2021-02-13 21:24:07'),
(86, 'Otros', 'compras@corporacionliderperu.com', 'ANA KARINA', '924957902', '74315528', 'Peruana', 'Buenos días, soy del área contable de la empresa Corporacion Lider Peru S.A (RUC: 20517482472) en la cual quería informar que se actualizó el domicilio fiscal y quisiera su apoyo que al momento de realizar las facturas salga la nueva dirección.\r\nDOMICILIO FISCAL ACTUAL: \r\nCAL. LENCIO PRADO 446 - SURQUILLO.\r\n\r\nGracias por su atención.', 1, 'Email', '13-02-2021', '2021-02-13 21:24:08', '2021-02-13 21:24:08'),
(87, 'Comercial', 'gutmer.25@gmail.com', 'Gutmer untiveros cano', '941121127', '76005613', 'Peruano', 'Buen día, quiero abrir una tienda para vender hoja de coca. Deseo saber todos los detalles sobre los tramites e información referente al comercio de hoja de coca.', 1, 'Email', '17-02-2021', '2021-02-18 02:56:54', '2021-02-18 02:56:54'),
(88, 'Comercial', 'jvillenaar@gmail.com', 'Juan Carlos Villena', '920507191', '40533435', 'Peruana', 'Como y donde realizo el tramite de permiso para vender coca en mi bodega.', 1, 'Email', '25-02-2021', '2021-02-26 02:09:37', '2021-02-26 02:09:37'),
(89, 'Comercial', 'jvillenaar@gmail.com', 'Juan Carlos Villena', '920507191', '40533435', 'Peruana', 'Como y donde realizo el tramite de permiso para vender coca en mi bodega.', 1, 'Email', '25-02-2021', '2021-02-26 02:09:40', '2021-02-26 02:09:40'),
(90, 'Comercial', 'Josebacarazo@gmail.com', 'joseba', '656751032', '22710843', 'españa', 'tenéis mambe y harina de coca?\r\nenviáis a España?', 1, 'Email', '02-03-2021', '2021-03-03 02:00:03', '2021-03-03 02:00:03'),
(91, 'Comercial', 'Josebacarazo@gmail.com', 'joseba', '656751032', '22710843', 'españa', 'enviáis a España hoja de coca?', 1, 'Email', '02-03-2021', '2021-03-03 02:02:05', '2021-03-03 02:02:05'),
(92, 'Comercial', 'josebacarazo@gmail.com', 'Joseba', '656751032', '22710843', 'España', 'Quisiera que me enviaran un tfno móvil para poder llamarles por wasap y así evitar gastos telefónicos', 1, 'Email', '03-03-2021', '2021-03-03 13:38:02', '2021-03-03 13:38:02'),
(93, 'Otros', 'karlagomezr@outlook.com', 'Karla Gómez', '+593994365017', '0914738034', 'Ecuatoriana', 'Quisiera adquirir mate de coca caja de 100. Acá en Guayaquil - Ecuador. Pero imposible encontrarlo.', 1, 'Teléfono', '04-03-2021', '2021-03-04 10:28:38', '2021-03-04 10:28:38'),
(94, 'Otros', 'jimena04.admi@gmail.com', 'Jimena Goicochea Ponce', '901282353', '74983127', 'Peruana', 'Que requisitos, se requiere para registrar una plantación', 1, 'Email', '15-03-2021', '2021-03-15 22:16:58', '2021-03-15 22:16:58'),
(95, 'Otros', 'jimena04.admi@gmail.com', 'Jimena Goicochea Ponce', '901282353', '74983127', 'Peruana', 'Que requisitos, se requiere para registrar una plantación', 1, 'Email', '15-03-2021', '2021-03-15 22:16:59', '2021-03-15 22:16:59'),
(96, 'Otros', 'jimena04.admi@gmail.com', 'Jimena Goicochea Ponce', '901282353', '74983127', 'Peruana', 'Que requisitos, se requiere para registrar una plantación', 1, 'Email', '15-03-2021', '2021-03-15 22:17:02', '2021-03-15 22:17:02'),
(97, 'Recursos Humanos', 'javservice2010@hotmail.com', 'Javier', '989-755-267', '10302089', 'Peruano', 'Que régimen laboral,tienen ; el D.L. 276 o D.L. 728 se entiende que es una empresa estatal de derecho privado ,mixto', 1, 'Email', '18-03-2021', '2021-03-18 23:11:54', '2021-03-18 23:11:54'),
(98, 'Recursos Humanos', 'cmarioade@gmail.com', 'Mario', '9203153', '72678932', 'Peru', 'hola quisiera saber el cronograma o saber si ya eligió a los que pasaron la etapa evaluación de Hija de vida de la convocatoria de Enaco para practicante de informática del 17 de marzo en Cusco y Quillabamba', 1, 'Email', '22-03-2021', '2021-03-22 20:28:35', '2021-03-22 20:28:35'),
(99, 'Comercial', 'maryo97_@hotmail.com', 'Dario', '994567298', '71205621', 'Peruana', 'Hola buenas tardes.\r\nquiero información para ser minorista.', 1, 'Teléfono', '24-03-2021', '2021-03-25 01:52:56', '2021-03-25 01:52:56'),
(100, 'Comercial', 'milanter279@hotmail.com', 'Milton', '976679714', '80545976', 'Peruano', 'Requiero información de cómo solicitar permiso para la venta de hoja coca para parte sierra, especialmente para chaccheo.', 1, 'Email', '02-04-2021', '2021-04-02 19:51:40', '2021-04-02 19:51:40'),
(101, 'Comercial', 'milanter279@hotmail.com', 'Milton', '976679714', '80545976', 'Peruano', 'Requiero información de cómo solicitar permiso para la venta de hoja coca para parte sierra, especialmente para chaccheo.', 1, 'Email', '02-04-2021', '2021-04-02 19:51:42', '2021-04-02 19:51:42'),
(102, 'Comercial', 'milanter279@hotmail.com', 'Milton', '976679714', '80545976', 'Peruano', 'Requiero información de cómo solicitar permiso para la venta de hoja coca para parte sierra, especialmente para chaccheo.', 1, 'Email', '02-04-2021', '2021-04-02 19:51:57', '2021-04-02 19:51:57'),
(103, 'Comercial', 'patriciafigueroa3630@gmail.com', 'Aleyda', '930275308', '30862118', 'Peruana', 'Como puedo obtener una licencia para ser comerciante minorista de Enaco', 1, 'Email', '06-04-2021', '2021-04-06 05:50:23', '2021-04-06 05:50:23'),
(104, 'Comercial', 'patriciafigueroa3630@gmail.com', 'Aleyda', '930275308', '30862118', 'Peruana', 'Como puedo obtener una licencia para ser comerciante minorista de Enaco', 1, 'Email', '06-04-2021', '2021-04-06 05:50:24', '2021-04-06 05:50:24'),
(105, 'Comercial', 'patriciafigueroa3630@gmail.com', 'Aleyda', '930275308', '30862118', 'Peruana', 'Como puedo obtener una licencia para ser comerciante minorista de Enaco', 1, 'Email', '06-04-2021', '2021-04-06 05:50:25', '2021-04-06 05:50:25'),
(106, 'Comercial', 'patriciafigueroa3630@gmail.com', 'Aleyda', '930275308', '30862118', 'Peruana', 'Como puedo obtener una licencia para ser comerciante minorista de Enaco', 1, 'Email', '06-04-2021', '2021-04-06 05:50:26', '2021-04-06 05:50:26'),
(107, 'Comercial', 'ccalderon@hotmail.de', 'Claudia Calderón Quevedo', '00491771736152', 'C21G4067J', 'Alemana', 'Buenos dias, tengo una consulta. Mi socio y yo estamos interesados en productos de belleza, cosmetica e higiene personal a base de la hoja de coca. Mi pregunta es, si existe en el Peru alguna fabrica que produzca este tipo de productos, ya que tenemos gran interes en comercializar estos productos en Alemania. Por otro lado, si me podrían decir si el llevar productos a base de hoja de coca a Alemania, como el te de coca, es legal. Muchas gracias de antemano', 1, 'Email', '12-04-2021', '2021-04-12 20:08:14', '2021-04-12 20:08:14'),
(108, 'Comercial', 'angelitasuri.22@gmail.com', 'Teresa Caty Lampa Corasi', '985392269', '41895573', 'Peruana', 'Buen dia, como puedo tramitar y sacar mi licencia para hacer venta minorista de la hoja de coca gracias.', 1, 'Teléfono', '19-04-2021', '2021-04-19 23:59:15', '2021-04-19 23:59:15'),
(109, 'Comercial', 'angelitasuri.22@gmail.com', 'Teresa Caty Lampa Corasi', '985392269', '41895573', 'Peruana', 'Buen dia, como puedo tramitar y sacar mi licencia para hacer venta minorista de la hoja de coca gracias.', 1, 'Teléfono', '19-04-2021', '2021-04-19 23:59:17', '2021-04-19 23:59:17'),
(110, 'Comercial', 'angelitasuri.22@gmail.com', 'Teresa Caty Lampa Corasi', '985392269', '41895573', 'Peruana', 'Buen dia, como puedo tramitar y sacar mi licencia para hacer venta minorista de la hoja de coca gracias.', 1, 'Teléfono', '19-04-2021', '2021-04-19 23:59:18', '2021-04-19 23:59:18'),
(111, 'Otros', 'jeamiltoledo@gmail.com', 'JEAMIL ESTHIFF TERAN TOLEDO', '975499452', '43869675', 'PERUANA', 'Previo cordial saludo desde el Colegio de Antropólogos de Puno, mediante la presente quisiéramos contactarnos con la persona responsable de capacitación, para coordinar una ponencia desde su institución para el seminario virtual de Prevención, Tratamiento, Comercialización y Disminución del Consumo de Drogas, la cual se realizará del 03 al 07 de Mayo del 2021, siendo organizador el colegio de antropólogos de Puno en coordinación con el Instituto Antropológico para el Desarrollo e Investigación - IADI Perú.\r\n\r\nPara lo cual deseamos contar con una ponencia mínimo de 45 minutos en materia de acopio, comercialización e industrialización de la Hoja de Coca (Erythroxylum coca) y sus derivados, con fines lícitos y benéficos para la salud.\r\n\r\nEsperando una pronta respuesta y agradecido por la respuesta. \r\n\r\nCordialmente, \r\n\r\nLic. Jeamil Esthiff Teran Toledo\r\nColegio de Antropólogos Puno \r\nCel. 975499452\r\nE.mail: jeamiltoledo@gmail.com', 1, 'Email', '19-04-2021', '2021-04-20 03:25:00', '2021-04-20 03:25:00');

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
(4, 'correo@correo.com', '31-03-2020', '2020-03-31 08:34:32', '2020-03-31 08:34:32'),
(5, 'Miguelpricipemolleda@gmail.com', '06-09-2020', '2020-09-06 18:46:33', '2020-09-06 18:46:33'),
(6, 'eferro@enaco.com.pe', '06-09-2020', '2020-09-07 01:14:02', '2020-09-07 01:14:02'),
(7, 'eferro@enaco.com.pe', '06-09-2020', '2020-09-07 01:14:05', '2020-09-07 01:14:05'),
(8, 'ever_lopez3001@hotmail.com', '07-09-2020', '2020-09-08 02:59:56', '2020-09-08 02:59:56'),
(9, 'Ysc1603@gmail.com', '08-09-2020', '2020-09-08 05:43:52', '2020-09-08 05:43:52'),
(10, 'ricardoavalosa@hotmail.com', '08-09-2020', '2020-09-08 22:27:19', '2020-09-08 22:27:19'),
(11, 'memoria anual', '15-09-2020', '2020-09-15 13:25:08', '2020-09-15 13:25:08'),
(12, 'memoria anual', '15-09-2020', '2020-09-15 13:25:10', '2020-09-15 13:25:10'),
(13, 'memoria anual', '15-09-2020', '2020-09-15 13:25:18', '2020-09-15 13:25:18'),
(14, 'memoria anual', '15-09-2020', '2020-09-15 13:25:20', '2020-09-15 13:25:20'),
(15, 'melh7308@gmail.com.pe', '15-09-2020', '2020-09-15 16:09:58', '2020-09-15 16:09:58'),
(16, 'melh7308@gmail.com.pe', '15-09-2020', '2020-09-15 16:10:03', '2020-09-15 16:10:03'),
(17, 'manueltqt@gmail.com', '17-09-2020', '2020-09-17 05:12:18', '2020-09-17 05:12:18'),
(18, 'manueltqt@gmail.com', '17-09-2020', '2020-09-17 05:12:23', '2020-09-17 05:12:23'),
(19, 'Juvenalhuaman32@gmail.com.pe', '17-09-2020', '2020-09-18 02:11:19', '2020-09-18 02:11:19'),
(20, 'Juvenalhuaman32@gmail.com.pe', '17-09-2020', '2020-09-18 02:11:22', '2020-09-18 02:11:22'),
(21, 'Juvenalhuaman32@gmail.com.pe', '17-09-2020', '2020-09-18 02:11:22', '2020-09-18 02:11:22'),
(22, 'stibreensm2018@gmail.com', '18-09-2020', '2020-09-19 01:02:29', '2020-09-19 01:02:29'),
(23, 'stibreensm2018@gmail.com', '18-09-2020', '2020-09-19 01:02:33', '2020-09-19 01:02:33'),
(24, 'Regulopardomontalvo802@gmail.com', '23-09-2020', '2020-09-23 07:46:07', '2020-09-23 07:46:07'),
(25, 'Regulopardomontalvo802@gmail.com', '23-09-2020', '2020-09-23 09:24:57', '2020-09-23 09:24:57'),
(26, 'larosamorada22@hotmail.com', '23-09-2020', '2020-09-24 03:01:49', '2020-09-24 03:01:49'),
(27, 'nancyruizdominguez@gmail.com', '26-09-2020', '2020-09-26 17:09:33', '2020-09-26 17:09:33'),
(28, 'harmswcarlos@gmail.com', '27-09-2020', '2020-09-27 20:10:21', '2020-09-27 20:10:21'),
(29, 'Camilizhita@gmail.com', '01-10-2020', '2020-10-01 18:57:43', '2020-10-01 18:57:43'),
(30, 'Camilizhita@gmail.com', '01-10-2020', '2020-10-01 18:57:46', '2020-10-01 18:57:46'),
(31, 'Camilizhita@gmail.com', '01-10-2020', '2020-10-01 18:57:47', '2020-10-01 18:57:47'),
(32, 'Bolsa de trabajo', '02-10-2020', '2020-10-02 19:21:42', '2020-10-02 19:21:42'),
(33, 'Nildaticonam2@gmail.com', '06-10-2020', '2020-10-07 01:10:58', '2020-10-07 01:10:58'),
(34, 'gomerlokitruzo@gmail.com', '07-10-2020', '2020-10-07 19:37:58', '2020-10-07 19:37:58'),
(35, 'boaner0307@hotmail.com', '14-10-2020', '2020-10-14 17:26:52', '2020-10-14 17:26:52'),
(36, 'joel.tpvar.ru@gmail.com', '20-10-2020', '2020-10-20 16:14:20', '2020-10-20 16:14:20'),
(37, 'joel.tpvar.ru@gmail.com', '20-10-2020', '2020-10-20 16:14:26', '2020-10-20 16:14:26'),
(38, 'veronicaheydichp@gmail.com', '30-10-2020', '2020-10-31 04:04:15', '2020-10-31 04:04:15'),
(39, 'jorgediazguzman85@gmail.com', '03-11-2020', '2020-11-04 00:43:18', '2020-11-04 00:43:18'),
(40, 'adm.robinherrera@gmail.com', '05-11-2020', '2020-11-05 16:34:06', '2020-11-05 16:34:06'),
(41, 'Richert @hotmail. Com', '07-11-2020', '2020-11-07 19:22:00', '2020-11-07 19:22:00'),
(42, 'Richert @hotmail. Com', '07-11-2020', '2020-11-07 19:22:06', '2020-11-07 19:22:06'),
(43, 'Richert @hotmail. Com', '07-11-2020', '2020-11-07 19:23:34', '2020-11-07 19:23:34'),
(44, 'Suizaflores@hotmail.es', '11-11-2020', '2020-11-11 06:23:12', '2020-11-11 06:23:12'),
(45, 'javiermillanv73@gmail.com', '23-11-2020', '2020-11-23 15:44:46', '2020-11-23 15:44:46'),
(46, 'javiermillanv73@gmail.com', '23-11-2020', '2020-11-23 15:44:51', '2020-11-23 15:44:51'),
(47, '4;PAJZR?Q4BUgPGY', '25-11-2020', '2020-11-25 09:33:50', '2020-11-25 09:33:50'),
(48, 'y7nqqJn4a6\\EXAv:', '25-11-2020', '2020-11-25 09:33:51', '2020-11-25 09:33:51'),
(49, 'uFX;0][FxCU9=eGx', '25-11-2020', '2020-11-25 09:33:51', '2020-11-25 09:33:51'),
(50, '24COFh_hx3?34Q<S', '25-11-2020', '2020-11-25 09:33:51', '2020-11-25 09:33:51'),
(51, '9i1MHX=CY81c3o6z', '25-11-2020', '2020-11-25 09:33:51', '2020-11-25 09:33:51'),
(52, '6:9lG84<SmwrGB9C', '25-11-2020', '2020-11-25 09:33:51', '2020-11-25 09:33:51'),
(53, '<STxD0U\\Q:T;KMPM', '25-11-2020', '2020-11-25 09:33:51', '2020-11-25 09:33:51'),
(54, '[x6uFm<sLRi6BA>4', '25-11-2020', '2020-11-25 09:33:51', '2020-11-25 09:33:51'),
(55, '7WczsgyS:Tfp>>3R', '25-11-2020', '2020-11-25 09:33:51', '2020-11-25 09:33:51'),
(56, '_PF;A@PDYOPdQD6<', '25-11-2020', '2020-11-25 09:33:51', '2020-11-25 09:33:51'),
(57, '0pERpS?KUMY5byny', '25-11-2020', '2020-11-25 09:33:52', '2020-11-25 09:33:52'),
(58, 'G<NNAl_c=3Hp<MQU', '25-11-2020', '2020-11-25 09:33:52', '2020-11-25 09:33:52'),
(59, 'Xsad8ii7fl1G^eIx', '25-11-2020', '2020-11-25 09:33:52', '2020-11-25 09:33:52'),
(60, 'YF<4Ymm3iAoXK^\\t', '25-11-2020', '2020-11-25 09:33:52', '2020-11-25 09:33:52'),
(61, 'Y2^zD=m^hgmV`0iq', '25-11-2020', '2020-11-25 09:33:55', '2020-11-25 09:33:55'),
(62, '_P9:QHHKyErzR7f`', '25-11-2020', '2020-11-25 09:33:55', '2020-11-25 09:33:55'),
(63, 'qJzj:^q5e1i_?f0R', '25-11-2020', '2020-11-25 09:33:55', '2020-11-25 09:33:55'),
(64, 'GtA6qZdSD2SK;akV', '25-11-2020', '2020-11-25 09:33:55', '2020-11-25 09:33:55'),
(65, '@E8X`s[nn2e[s\\p`', '25-11-2020', '2020-11-25 09:33:55', '2020-11-25 09:33:55'),
(66, 'rzOO4THxT5_MiT>7', '25-11-2020', '2020-11-25 09:33:56', '2020-11-25 09:33:56'),
(67, 'u[[\\E]mRcsBusMS]', '25-11-2020', '2020-11-25 09:33:56', '2020-11-25 09:33:56'),
(68, 'SL0hK2M3i3LUCt>j', '25-11-2020', '2020-11-25 09:33:56', '2020-11-25 09:33:56'),
(69, 'Nf[x9OX4leNQs0cl', '25-11-2020', '2020-11-25 09:33:56', '2020-11-25 09:33:56'),
(70, '`][AZKHuSpS3HGWD', '25-11-2020', '2020-11-25 09:33:56', '2020-11-25 09:33:56'),
(71, '0N^A1rm8jK;Hz[CQ', '25-11-2020', '2020-11-25 09:33:56', '2020-11-25 09:33:56'),
(72, 'Y2ejngYJ^SxygsW\\', '25-11-2020', '2020-11-25 09:33:56', '2020-11-25 09:33:56'),
(73, 'kV?P@eBbVqSPb90Z', '25-11-2020', '2020-11-25 09:33:57', '2020-11-25 09:33:57'),
(74, 'sf?4yooiJLNiKduw', '25-11-2020', '2020-11-25 09:33:57', '2020-11-25 09:33:57'),
(75, '_5<fZx4olkNkU;5S', '25-11-2020', '2020-11-25 09:33:57', '2020-11-25 09:33:57'),
(76, 'TMifhC@S[cQ3T?sS', '25-11-2020', '2020-11-25 09:33:59', '2020-11-25 09:33:59'),
(77, 'oc0t=h;LjilJnBsX', '25-11-2020', '2020-11-25 09:33:59', '2020-11-25 09:33:59'),
(78, 'LtuZX9xlFlMW15Zi', '25-11-2020', '2020-11-25 09:34:00', '2020-11-25 09:34:00'),
(79, 'dN1w]2Y8W;dw5odk', '25-11-2020', '2020-11-25 09:34:00', '2020-11-25 09:34:00'),
(80, 'LA_qDi4N0>n4>Nr9', '25-11-2020', '2020-11-25 09:34:00', '2020-11-25 09:34:00'),
(81, 'lTDk:^PzXdhc8=5Q', '25-11-2020', '2020-11-25 09:34:00', '2020-11-25 09:34:00'),
(82, 'HUycL;lX>^\\1:bSB', '25-11-2020', '2020-11-25 09:34:00', '2020-11-25 09:34:00'),
(83, 'uywXU5@OxPEHO:V]', '25-11-2020', '2020-11-25 09:34:00', '2020-11-25 09:34:00'),
(84, ']40Ezpulo:Ddl2eW', '25-11-2020', '2020-11-25 09:34:00', '2020-11-25 09:34:00'),
(85, 'H]A:YsF=:9FhrKPB', '25-11-2020', '2020-11-25 09:34:00', '2020-11-25 09:34:00'),
(86, 'nf@CrZPOVDi8etBp', '25-11-2020', '2020-11-25 09:34:01', '2020-11-25 09:34:01'),
(87, 'C7\\mRusd2syjWE@N', '25-11-2020', '2020-11-25 09:34:01', '2020-11-25 09:34:01'),
(88, 'XXTI:0EocC=U5WnF', '25-11-2020', '2020-11-25 09:34:01', '2020-11-25 09:34:01'),
(89, 'Co84P?;]UW^xlf>c', '25-11-2020', '2020-11-25 09:34:01', '2020-11-25 09:34:01'),
(90, '[Xl;e0eoH7Dh`bo=', '25-11-2020', '2020-11-25 09:34:01', '2020-11-25 09:34:01'),
(91, 'TT0R3JS2LiJIc]ZR', '25-11-2020', '2020-11-25 09:34:01', '2020-11-25 09:34:01'),
(92, 'yZP:P=B>j[s^Lp`N', '25-11-2020', '2020-11-25 09:34:02', '2020-11-25 09:34:02'),
(93, 'I3URa1B2FXB]JxJs', '25-11-2020', '2020-11-25 09:34:02', '2020-11-25 09:34:02'),
(94, 'vlGe_716Ab;3p707', '25-11-2020', '2020-11-25 09:34:02', '2020-11-25 09:34:02'),
(95, '5GVyuHOW_jNr2mb<', '25-11-2020', '2020-11-25 09:34:02', '2020-11-25 09:34:02'),
(96, 'lcyh[JNp@1AkFZgv', '25-11-2020', '2020-11-25 09:34:04', '2020-11-25 09:34:04'),
(97, '@QUA6pTVq@=Yu^Z7', '25-11-2020', '2020-11-25 09:34:04', '2020-11-25 09:34:04'),
(98, '>;TUxe;r0Aq:3WHW', '25-11-2020', '2020-11-25 09:34:04', '2020-11-25 09:34:04'),
(99, 'axHdbe9uPxJq4R3u', '25-11-2020', '2020-11-25 09:34:05', '2020-11-25 09:34:05'),
(100, 'wWSJdXB2l>Wp7qX>', '25-11-2020', '2020-11-25 09:34:05', '2020-11-25 09:34:05'),
(101, 'piPS_TY>JV5>8cuO', '25-11-2020', '2020-11-25 09:34:05', '2020-11-25 09:34:05'),
(102, '86d=I=emrHVgd@kZ', '25-11-2020', '2020-11-25 09:34:05', '2020-11-25 09:34:05'),
(103, 'a\\;?y5NEYa`4\\gfo', '25-11-2020', '2020-11-25 09:34:05', '2020-11-25 09:34:05'),
(104, 'WNAk_VHA4sIj3]`f', '25-11-2020', '2020-11-25 09:34:05', '2020-11-25 09:34:05'),
(105, 'n4`@E`RUG<q=]=`V', '25-11-2020', '2020-11-25 09:34:05', '2020-11-25 09:34:05'),
(106, 'z`59o_FC_4zgvUdJ', '25-11-2020', '2020-11-25 09:34:06', '2020-11-25 09:34:06'),
(107, 'N=TZamUlbbL1@@;r', '25-11-2020', '2020-11-25 09:34:06', '2020-11-25 09:34:06'),
(108, 'C8CRk3_OI[HzniWi', '25-11-2020', '2020-11-25 09:34:06', '2020-11-25 09:34:06'),
(109, '^fRl;PY0Ki6vj;>l', '25-11-2020', '2020-11-25 09:34:06', '2020-11-25 09:34:06'),
(110, '4w?w8g`1_P^utt?4', '25-11-2020', '2020-11-25 09:34:06', '2020-11-25 09:34:06'),
(111, 'c0XKICvAnksv[6w9', '25-11-2020', '2020-11-25 09:34:06', '2020-11-25 09:34:06'),
(112, 'g@crJh3xVQl1Dgcd', '25-11-2020', '2020-11-25 09:34:07', '2020-11-25 09:34:07'),
(113, 'SZrqf?l]ry0\\GHW\\', '25-11-2020', '2020-11-25 09:34:07', '2020-11-25 09:34:07'),
(114, 'o6BAO85xXGdB0wY0', '25-11-2020', '2020-11-25 09:34:07', '2020-11-25 09:34:07'),
(115, 'RpL00S=y51hry<[y', '25-11-2020', '2020-11-25 09:34:07', '2020-11-25 09:34:07'),
(116, 'y[mDIsULm^c<Ub7Y', '25-11-2020', '2020-11-25 09:34:09', '2020-11-25 09:34:09'),
(117, 'FGqb0=8JG`hKqrPx', '25-11-2020', '2020-11-25 09:34:09', '2020-11-25 09:34:09'),
(118, '<VkWuCzgM62Fdz6T', '25-11-2020', '2020-11-25 09:34:09', '2020-11-25 09:34:09'),
(119, 'UU`8tW7u1hU@@BqF', '25-11-2020', '2020-11-25 09:34:10', '2020-11-25 09:34:10'),
(120, '8zNJ0<69N?_ZVljd', '25-11-2020', '2020-11-25 09:34:10', '2020-11-25 09:34:10'),
(121, '_Uq>m?Z0tyJWyv=W', '25-11-2020', '2020-11-25 09:34:10', '2020-11-25 09:34:10'),
(122, '?dS83mHVt;YsR7to', '25-11-2020', '2020-11-25 09:34:10', '2020-11-25 09:34:10'),
(123, '=g8aTBrmHo8<^I=x', '25-11-2020', '2020-11-25 09:34:10', '2020-11-25 09:34:10'),
(124, '?iUqYvezWY0:3==3', '25-11-2020', '2020-11-25 09:34:10', '2020-11-25 09:34:10'),
(125, '8ND\\NqQznVaJz8Jp', '25-11-2020', '2020-11-25 09:34:10', '2020-11-25 09:34:10'),
(126, 'JT85;ai7HzM3rsGj', '25-11-2020', '2020-11-25 09:34:11', '2020-11-25 09:34:11'),
(127, 'CZ=wQDHdHb7Vbj[;', '25-11-2020', '2020-11-25 09:34:11', '2020-11-25 09:34:11'),
(128, 'A<1v2@fFw41HuVWe', '25-11-2020', '2020-11-25 09:34:11', '2020-11-25 09:34:11'),
(129, ']r[`jyF@D8rz43AN', '25-11-2020', '2020-11-25 09:34:11', '2020-11-25 09:34:11'),
(130, 'LJLrE2y<6LaizC0@', '25-11-2020', '2020-11-25 09:34:11', '2020-11-25 09:34:11'),
(131, '@BxuhZJ3G`nX53xO', '25-11-2020', '2020-11-25 09:34:11', '2020-11-25 09:34:11'),
(132, 'boOF0<ua_eBqUug:', '25-11-2020', '2020-11-25 09:34:11', '2020-11-25 09:34:11'),
(133, 'iSvfGWpv`NZC5c[[', '25-11-2020', '2020-11-25 09:34:12', '2020-11-25 09:34:12'),
(134, 'nTTKGkQ7=5>1HB65', '25-11-2020', '2020-11-25 09:34:12', '2020-11-25 09:34:12'),
(135, 'Hq8Wc:CIr_;Z`O8;', '25-11-2020', '2020-11-25 09:34:12', '2020-11-25 09:34:12'),
(136, 'J=6yv^F9gAidbsO:', '25-11-2020', '2020-11-25 09:34:12', '2020-11-25 09:34:12'),
(137, 'Xz3W:LSH7P6OE0C6', '25-11-2020', '2020-11-25 09:34:14', '2020-11-25 09:34:14'),
(138, 'rpm23S8=tPEOxlG^', '25-11-2020', '2020-11-25 09:34:14', '2020-11-25 09:34:14'),
(139, 'hv;i?dpQ?^rEqP4c', '25-11-2020', '2020-11-25 09:34:14', '2020-11-25 09:34:14'),
(140, 'I[w8jl?b?TxYH8y<', '25-11-2020', '2020-11-25 09:34:15', '2020-11-25 09:34:15'),
(141, 'Q?:Q?Lq6<nIV`_1w', '25-11-2020', '2020-11-25 09:34:15', '2020-11-25 09:34:15'),
(142, 'SNWC?p>lx^w`xHFJ', '25-11-2020', '2020-11-25 09:34:15', '2020-11-25 09:34:15'),
(143, ']@N?U_@Z4l]Uevf@', '25-11-2020', '2020-11-25 09:34:15', '2020-11-25 09:34:15'),
(144, ':1]d2HQLaYX7ZIVQ', '25-11-2020', '2020-11-25 09:34:15', '2020-11-25 09:34:15'),
(145, 'b?K4USF]JazVx<@4', '25-11-2020', '2020-11-25 09:34:15', '2020-11-25 09:34:15'),
(146, '2_l:wlpE]O5rxlr8', '25-11-2020', '2020-11-25 09:34:15', '2020-11-25 09:34:15'),
(147, 'hjIWlg=MW<JfaHP8', '25-11-2020', '2020-11-25 09:34:16', '2020-11-25 09:34:16'),
(148, 'MfN<8I^Udjj3d>u2', '25-11-2020', '2020-11-25 09:34:16', '2020-11-25 09:34:16'),
(149, 'ez22i]x6hNnVOZ4W', '25-11-2020', '2020-11-25 09:34:16', '2020-11-25 09:34:16'),
(150, '0u;;hzX^4zB0Dq\\T', '25-11-2020', '2020-11-25 09:34:16', '2020-11-25 09:34:16'),
(151, '7IzeIRfh;dv`7LrN', '25-11-2020', '2020-11-25 09:34:16', '2020-11-25 09:34:16'),
(152, 'wwvP<sG7YhhRVHH`', '25-11-2020', '2020-11-25 09:34:16', '2020-11-25 09:34:16'),
(153, 'cqPkb1]PKPRhuK3Y', '25-11-2020', '2020-11-25 09:34:16', '2020-11-25 09:34:16'),
(154, '??hSirp32O`F[jJK', '25-11-2020', '2020-11-25 09:34:17', '2020-11-25 09:34:17'),
(155, '\\mybZ1P<zPfx3;9:', '25-11-2020', '2020-11-25 09:34:17', '2020-11-25 09:34:17'),
(156, 'z]^Ie]W3qRYTZ2@[', '25-11-2020', '2020-11-25 09:34:17', '2020-11-25 09:34:17'),
(157, 'bsR7X_S1bZZAMxDU', '25-11-2020', '2020-11-25 09:34:19', '2020-11-25 09:34:19'),
(158, 'vz:N>QLB8h3_YB7B', '25-11-2020', '2020-11-25 09:34:19', '2020-11-25 09:34:19'),
(159, '>:Vn;Ti8RIo\\I5jH', '25-11-2020', '2020-11-25 09:34:19', '2020-11-25 09:34:19'),
(160, 'N5GcY_AK_Ec?<9Qq', '25-11-2020', '2020-11-25 09:34:20', '2020-11-25 09:34:20'),
(161, 'BRf??;Yc8h<_VnBY', '25-11-2020', '2020-11-25 09:34:20', '2020-11-25 09:34:20'),
(162, 'B\\TCM>p0O@7sX=^b', '25-11-2020', '2020-11-25 09:34:20', '2020-11-25 09:34:20'),
(163, '_j3A6f;rMH:qh_Jx', '25-11-2020', '2020-11-25 09:34:20', '2020-11-25 09:34:20'),
(164, 'CmgV59Zr<=@`@pUE', '25-11-2020', '2020-11-25 09:34:20', '2020-11-25 09:34:20'),
(165, '9yD9stLY@NUpUho>', '25-11-2020', '2020-11-25 09:34:20', '2020-11-25 09:34:20'),
(166, '>o>FGIA<TCzpne<@', '25-11-2020', '2020-11-25 09:34:21', '2020-11-25 09:34:21'),
(167, ':e1CG3@@69vveqW6', '25-11-2020', '2020-11-25 09:34:21', '2020-11-25 09:34:21'),
(168, '4nusAIvlTbwos580', '25-11-2020', '2020-11-25 09:34:21', '2020-11-25 09:34:21'),
(169, 'Lrcjx4ysb@_`Q\\gQ', '25-11-2020', '2020-11-25 09:34:21', '2020-11-25 09:34:21'),
(170, '^043PmsOfJ1?zpih', '25-11-2020', '2020-11-25 09:34:21', '2020-11-25 09:34:21'),
(171, 'y3Q1vubwarSmO?LZ', '25-11-2020', '2020-11-25 09:34:22', '2020-11-25 09:34:22'),
(172, '0VPPLLn_v7e2>iJL', '25-11-2020', '2020-11-25 09:34:22', '2020-11-25 09:34:22'),
(173, 'kjhO^RTYhQkw;7lK', '25-11-2020', '2020-11-25 09:34:22', '2020-11-25 09:34:22'),
(174, 'q5DsIGDrhJEkS\\tP', '25-11-2020', '2020-11-25 09:34:22', '2020-11-25 09:34:22'),
(175, '6=@[4bfw[_iujA<r', '25-11-2020', '2020-11-25 09:34:24', '2020-11-25 09:34:24'),
(176, 'c7]mwvM21C7x2]Df', '25-11-2020', '2020-11-25 09:34:24', '2020-11-25 09:34:24'),
(177, 'hq[gFa^RQMnw?RI:', '25-11-2020', '2020-11-25 09:34:24', '2020-11-25 09:34:24'),
(178, 'hjT>hJfQm[>;Oaj6', '25-11-2020', '2020-11-25 09:34:25', '2020-11-25 09:34:25'),
(179, 'hrQEmphsiDiNG5jZ', '25-11-2020', '2020-11-25 09:34:25', '2020-11-25 09:34:25'),
(180, 'tzb8_RYmbjfV6RDo', '25-11-2020', '2020-11-25 09:34:25', '2020-11-25 09:34:25'),
(181, 'POW6?DzuNWjWP<CN', '25-11-2020', '2020-11-25 09:34:25', '2020-11-25 09:34:25'),
(182, 'q_[I=<vsxL<eTAM=', '25-11-2020', '2020-11-25 09:34:25', '2020-11-25 09:34:25'),
(183, 'paolaarcesalazar@hotmail.com', '01-12-2020', '2020-12-01 20:55:54', '2020-12-01 20:55:54'),
(184, 'rmaycol_dianderas@hotmail.com', '03-12-2020', '2020-12-03 17:56:42', '2020-12-03 17:56:42'),
(185, 'Alxrijeiro.ag@gmail.com', '04-12-2020', '2020-12-04 18:21:51', '2020-12-04 18:21:51'),
(186, 'davidgarkie356@gmail.com', '19-12-2020', '2020-12-19 21:27:05', '2020-12-19 21:27:05'),
(187, 'intranet', '23-12-2020', '2020-12-24 02:13:41', '2020-12-24 02:13:41'),
(188, 'gardel885@gmail.com', '25-12-2020', '2020-12-26 03:41:47', '2020-12-26 03:41:47'),
(189, 'danielccappa@gmail.com', '05-01-2021', '2021-01-05 13:45:49', '2021-01-05 13:45:49'),
(190, 'pedropablo7@hotmail.com', '05-01-2021', '2021-01-05 21:44:30', '2021-01-05 21:44:30'),
(191, 'Cueto_777@hotmail.com', '05-01-2021', '2021-01-06 04:02:45', '2021-01-06 04:02:45'),
(192, 'x', '06-01-2021', '2021-01-06 22:56:14', '2021-01-06 22:56:14'),
(193, 'x', '06-01-2021', '2021-01-06 22:56:14', '2021-01-06 22:56:14'),
(194, 'x', '06-01-2021', '2021-01-06 22:56:15', '2021-01-06 22:56:15'),
(195, 'x', '06-01-2021', '2021-01-06 22:56:15', '2021-01-06 22:56:15'),
(196, 'x', '06-01-2021', '2021-01-06 22:56:16', '2021-01-06 22:56:16'),
(197, 'Abigailporsiempre27@Gmail.com', '07-01-2021', '2021-01-07 23:30:34', '2021-01-07 23:30:34'),
(198, 'Ozgsari@gmail.com', '07-01-2021', '2021-01-08 00:30:18', '2021-01-08 00:30:18'),
(199, 'ridiclove.wrah@gmail.com', '12-01-2021', '2021-01-13 03:42:18', '2021-01-13 03:42:18'),
(200, 'adely_22_24@hotmail.com', '13-01-2021', '2021-01-13 23:38:22', '2021-01-13 23:38:22'),
(201, 'davidgarkie356@gmail.com', '14-01-2021', '2021-01-14 06:29:06', '2021-01-14 06:29:06'),
(202, 'jofe_llanos@hotmail.com', '14-01-2021', '2021-01-14 07:07:01', '2021-01-14 07:07:01'),
(203, 'productores', '15-01-2021', '2021-01-15 23:11:04', '2021-01-15 23:11:04'),
(204, 'danielccappa@gmail.com', '18-01-2021', '2021-01-18 09:06:09', '2021-01-18 09:06:09'),
(205, 'Wendymartelpozo10@gmail.com', '19-01-2021', '2021-01-20 00:07:09', '2021-01-20 00:07:09'),
(206, 'andelychiarahuillca@gmail.com', '25-01-2021', '2021-01-26 02:51:40', '2021-01-26 02:51:40'),
(207, 'harmswcarlos@gmail.com', '25-01-2021', '2021-01-26 04:05:10', '2021-01-26 04:05:10'),
(208, 'luanitahellen@gmail.com', '11-02-2021', '2021-02-11 20:10:08', '2021-02-11 20:10:08'),
(209, 'mavi1704@gmail.com', '12-02-2021', '2021-02-12 07:48:17', '2021-02-12 07:48:17'),
(210, 'ronalcuyuchi@gmail.com', '18-02-2021', '2021-02-18 06:48:55', '2021-02-18 06:48:55'),
(211, 'Tazmania_kapu@hotmail.com', '26-02-2021', '2021-02-26 07:14:08', '2021-02-26 07:14:08'),
(212, 'Tazmania_kapu@hotmail.com', '26-02-2021', '2021-02-26 07:14:12', '2021-02-26 07:14:12'),
(213, 'Sebas.nenin.22@gmail.com', '01-03-2021', '2021-03-01 09:48:16', '2021-03-01 09:48:16'),
(214, 'Thomas.card285814@gmail.com', '03-03-2021', '2021-03-03 21:15:02', '2021-03-03 21:15:02'),
(215, 'karlagomezr@outlook.com', '04-03-2021', '2021-03-04 10:18:23', '2021-03-04 10:18:23'),
(216, 'Kenysaucedosilva@hotmail.com', '11-03-2021', '2021-03-12 02:50:05', '2021-03-12 02:50:05'),
(217, 'info@cocaty.com', '12-03-2021', '2021-03-12 09:06:58', '2021-03-12 09:06:58'),
(218, 'anampacampos30@gmail.com', '14-03-2021', '2021-03-14 22:35:12', '2021-03-14 22:35:12'),
(219, 'Museodelacoca@hotmail.com', '19-03-2021', '2021-03-19 16:59:04', '2021-03-19 16:59:04'),
(220, 'Condorivictor@gmail.com', '29-03-2021', '2021-03-29 06:12:24', '2021-03-29 06:12:24'),
(221, 'anarosario011@gmail.com', '30-03-2021', '2021-03-31 03:18:02', '2021-03-31 03:18:02'),
(222, 'Cachaychavarry@gmail.com', '03-04-2021', '2021-04-03 22:51:23', '2021-04-03 22:51:23'),
(223, 'patriciafigueroa3630@gmail.com', '06-04-2021', '2021-04-06 05:48:34', '2021-04-06 05:48:34'),
(224, 'mafercsebastian@gmail.com', '10-04-2021', '2021-04-10 23:13:17', '2021-04-10 23:13:17'),
(225, 'Saulvera242427@gmail.com', '13-04-2021', '2021-04-13 19:56:12', '2021-04-13 19:56:12'),
(226, 'Raulvillalta3@gmail.com', '16-04-2021', '2021-04-17 03:36:37', '2021-04-17 03:36:37'),
(227, 'Raulvillalta3@gmail.com', '16-04-2021', '2021-04-17 03:36:39', '2021-04-17 03:36:39'),
(228, 'ventas@enaco.com.pe', '17-04-2021', '2021-04-17 20:19:41', '2021-04-17 20:19:41'),
(229, 'ventas@enaco.com.pe', '17-04-2021', '2021-04-17 20:19:42', '2021-04-17 20:19:42'),
(230, 'ventas@enaco.com.pe', '17-04-2021', '2021-04-17 20:19:45', '2021-04-17 20:19:45');

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
(2, '2019-11-16 02:21:30', '2019-11-16 02:21:30'),
(3, '2020-09-08 01:28:20', '2020-09-08 01:28:20'),
(4, '2020-09-29 02:16:51', '2020-09-29 02:16:51'),
(5, '2020-09-30 02:04:16', '2020-09-30 02:04:16'),
(6, '2020-11-04 03:19:12', '2020-11-04 03:19:12'),
(7, '2020-11-17 22:24:42', '2020-11-17 22:24:42');

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
(4, 'Lima', 2, 'en', '2019-11-16 02:21:30', '2019-11-16 02:21:30', ''),
(5, 'Trujillo', 3, 'es', '2020-09-08 01:28:20', '2020-09-08 01:28:20', 'trujillo'),
(6, 'Trujillo', 3, 'en', '2020-09-08 01:28:20', '2020-09-08 01:28:20', 'trujillo'),
(7, 'Juli', 4, 'es', '2020-09-29 02:16:51', '2020-09-29 02:16:51', 'juli'),
(8, 'Juli', 4, 'en', '2020-09-29 02:16:51', '2020-09-29 02:16:51', 'juli'),
(9, 'Juliaca', 5, 'es', '2020-09-30 02:04:16', '2020-09-30 02:04:16', 'juliaca'),
(10, 'Juliaca', 5, 'en', '2020-09-30 02:04:16', '2020-09-30 02:04:16', 'juliaca'),
(11, 'Quillabamba', 6, 'es', '2020-11-04 03:19:12', '2020-11-04 03:19:12', 'quillabamba'),
(12, 'Quillabamba', 6, 'en', '2020-11-04 03:19:12', '2020-11-04 03:19:12', 'quillabamba'),
(13, 'Lima', 7, 'es', '2020-11-17 22:24:42', '2020-11-17 22:24:42', 'lima'),
(14, 'Lima', 7, 'en', '2020-11-17 22:24:42', '2020-11-17 22:24:42', 'lima');

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
(81, 'Denuncias Éticas', 41, 'es'),
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
(6, '2020-09-29 21:12:10', '2020-09-29 21:12:10');

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
(1, 'Listos para Consumir', 1, 'es', '2019-11-15 03:23:45', '2021-02-18 21:49:33', 'listos-para-consumir'),
(2, 'Ready to consume', 1, 'en', '2019-11-15 03:23:45', '2021-04-18 00:56:59', 'ready-to-consume'),
(11, 'Insumos Industriales', 6, 'es', '2020-09-29 21:12:10', '2021-02-18 21:49:49', 'insumos-industriales'),
(12, 'Industrial Inputs', 6, 'en', '2020-09-29 21:12:10', '2021-04-18 00:57:22', 'industrial-inputs');

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
(1, 4, '2019-11-25 23:36:11', '2020-09-30 01:51:07'),
(2, 8, '2019-11-25 23:41:17', '2020-03-05 14:25:06'),
(3, 5, '2019-11-25 23:45:16', '2020-03-05 14:24:30'),
(4, 1, '2019-11-26 01:32:55', '2020-03-05 14:23:36'),
(5, 2, '2019-11-26 01:35:02', '2020-04-23 06:40:47'),
(6, 6, '2019-11-26 01:37:22', '2021-01-28 22:56:47'),
(7, 7, '2019-11-26 01:45:18', '2020-03-05 14:24:56'),
(8, 3, '2020-02-14 19:59:49', '2020-04-23 06:41:04'),
(10, 2, '2020-04-23 05:48:08', '2020-04-23 05:48:08'),
(11, 9, '2021-01-28 22:58:03', '2021-01-28 22:59:27');

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
(11, 'Venta Directa Bienes', 'venta-directa-bienes', 6, 'es', '2019-11-26 01:37:22', '2021-01-28 22:56:47'),
(12, 'Venta Directa Bienes', 'venta-directa-bienes', 6, 'en', '2019-11-26 01:37:22', '2019-11-26 01:37:22'),
(13, 'Socios de Negocio', 'socios-de-negocio', 7, 'es', '2019-11-26 01:45:18', '2019-11-26 01:45:18'),
(14, 'Socios de Negocio', 'socios-de-negocio', 7, 'en', '2019-11-26 01:45:18', '2019-11-26 01:45:18'),
(15, 'Declaraciones Juradas', 'declaraciones-juradas', 8, 'es', '2020-02-14 19:59:49', '2020-02-14 19:59:49'),
(16, 'Declaraciones Juradas', 'declaraciones-juradas', 8, 'en', '2020-02-14 19:59:49', '2020-02-14 19:59:49'),
(19, 'Directorio Ejecutivo', 'directorio-ejecutivo', 10, 'es', '2020-04-23 05:48:08', '2020-04-23 05:48:08'),
(20, 'Directorio Ejecutivo', 'directorio-ejecutivo', 10, 'en', '2020-04-23 05:48:08', '2020-04-23 05:48:08'),
(21, 'Venta Directa Bienes Sin Código', 'venta-directa-bienes-sin-codigo', 11, 'es', '2021-01-28 22:58:03', '2021-01-28 22:58:03'),
(22, 'Venta Directa Bienes Sin Código', 'venta-directa-bienes-sin-codigo', 11, 'en', '2021-01-28 22:58:03', '2021-01-28 22:58:03');

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
(1, 'PAC – Plan Anual de Contrataciones', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/pac-2019-enaco.pdf\",\"texto2A\":\"PAC 2019 ENACO\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/PAC_2020_ENACO.pdf\",\"texto2A\":\"PAC 2020 ENACO\"},{\"archivo1A\":\"\\/uploads\\/shares\\/info-gestion\\/PAC_2021_ENACO.pdf\",\"texto2A\":\"PAC 2021 ENACO\"}]', 1, 'es', '2019-11-25 23:37:33', '2021-01-21 00:29:07', 'pac-plan-anual-de-contrataciones'),
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
(49, 'Directorio Ejecutivo', NULL, '[{\"archivo1A\":null,\"texto2A\":\"Director - Lic. Ra\\u00fal Alberto Molina Martinez\"},{\"archivo1A\":\"\\/uploads\\/shares\\/CV\\/RECarlos_Alonso_Eduardo_Lazo_.pdf\",\"texto2A\":\"Gerencia General - Mg. Carlos Alonso V\\u00e1squez Lazo (CV)\"},{\"archivo1A\":\"\\/uploads\\/shares\\/CV\\/RE_Edgar_Gutierrez_Vargas.pdf\",\"texto2A\":\"Gerencia de Comercio Tradicional - Mg. Edgard Gutierrez Vargas (CV)\"},{\"archivo1A\":null,\"texto2A\":\"Gerencia Administrativa Financiera (e) - CPC. Abel Sebastian Contreras Granados\"},{\"archivo1A\":\"\\/uploads\\/shares\\/CV\\/RECristian_Eduardo_Galarza_Mes__as.pdf\",\"texto2A\":\"Gerencia de Planeamiento, Presupuesto y TI - Mg. Cristian Eduardo Galarza Mes\\u00edas (CV)\"},{\"archivo1A\":null,\"texto2A\":\"Contador General - CPC. Abel Sebastian Contreras Granados\"},{\"archivo1A\":null,\"texto2A\":\"Oficina de Asesoria Juridica (e) - Abog. Cesar Eduardo L\\u00f3pez Dalia\"},{\"archivo1A\":null,\"texto2A\":\"Oficina de Control Selectivo - CPC. Henry William Gil Herrera\"},{\"archivo1A\":null,\"texto2A\":\"\\u00d3rgano de Control Institucional - Abog. Edwin William Laime Palomino\"},{\"archivo1A\":null,\"texto2A\":\"Jefe de Oficina de Comercio Industrial - Ing. Ana Mar\\u00eda Cornejo Arenas\"},{\"archivo1A\":null,\"texto2A\":\"Sucursal Quillabamba (e) - Sr. Yurinel Arteaga Mar\"},{\"archivo1A\":null,\"texto2A\":\"Sucursal Huancayo - Sr. Javier Augusto Pinto Almanza\"},{\"archivo1A\":null,\"texto2A\":\"Agencia Juliaca - Dr. Alfredo Florez Seigas\"},{\"archivo1A\":null,\"texto2A\":\"Asesor Legal - Abog. Cesar Eduardo L\\u00f3pez Dalia\"}]', 25, 'es', '2020-04-23 05:49:14', '2021-04-17 20:56:39', 'directorio-ejecutivo'),
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
(17, 21, '2020-03-04 22:27:26', '2020-03-04 22:27:26'),
(18, 13, '2021-01-29 02:40:53', '2021-01-29 02:40:53');

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
(7, 1, '2020-03-03 15:25:01', '2020-03-03 15:25:01'),
(8, 1, '2020-03-03 15:27:13', '2020-03-03 15:27:13'),
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
(41, 17, '2020-03-04 23:54:53', '2020-03-04 23:54:53'),
(42, 1, '2020-09-04 05:57:05', '2020-09-04 05:57:05'),
(43, 1, '2020-09-04 06:13:12', '2020-09-04 06:13:12');

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
(13, 'Lic. Raúl Alberto Molina Martinez', '<p>Director</p>', '[{\"archivo1A\":null,\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 7, 'es', '2020-03-03 15:25:01', '2020-09-04 06:19:52', 'lic-raul-alberto-molina-martinez'),
(14, 'Lic. Rafael Domingo Cánovas Petrozzi', '<p>Gerente General</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-rafael-canovas.pdf\",\"texto2A\":null}]', 7, 'en', '2020-03-03 15:25:01', '2020-03-03 15:25:01', 'lic-rafael-domingo-canovas-petrozzi'),
(15, 'Mg. Cristian Eduardo Galarza Mesías', '<p>Gerencia General (e)</p>', '[{\"archivo1A\":null,\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 8, 'es', '2020-03-03 15:27:13', '2020-09-04 06:20:41', 'mg-cristian-eduardo-galarza-mesias'),
(16, 'CPC. Henry William Gil Herrera', '<p>Gerente de Comercio Tradicional</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-henry-gil.pdf\",\"texto2A\":null}]', 8, 'en', '2020-03-03 15:27:13', '2020-03-03 15:27:13', 'cpc-henry-william-gil-herrera'),
(19, 'CPC. Henry William Gil Herrera', '<p>Gerencia de Comercio Tradicional (e)</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-henry-gil.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 10, 'es', '2020-03-03 15:30:36', '2020-09-04 06:09:30', 'cpc-henry-william-gil-herrera'),
(20, 'CPC. Abel Sebastian Contreras Granados', '<p>Contador General</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-abel-contreras.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 10, 'en', '2020-03-03 15:30:36', '2020-03-03 15:30:36', 'cpc-abel-sebastian-contreras-granados'),
(23, 'CPC. Abel Sebastian Contreras Granados', '<p>Gerencia Administrativa y Financiera&nbsp;(e)</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-abel-contreras.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 12, 'es', '2020-03-03 15:36:00', '2020-09-04 06:18:14', 'cpc-abel-sebastian-contreras-granados'),
(24, 'Mg. Cristian Eduardo Galarza Mesías', '<p>Gerente de Planeamiento, Presupuesto y TI</p>', NULL, 12, 'en', '2020-03-03 15:36:00', '2020-03-03 15:36:00', 'mg-cristian-eduardo-galarza-mesias'),
(25, 'Mg. Cristian Eduardo Galarza Mesías', '<p>Gerencia&nbsp;de Planeamiento, Presupuesto y TI</p>', '[{\"archivo1A\":null,\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 13, 'es', '2020-03-03 15:37:22', '2020-09-04 06:07:04', 'mg-cristian-eduardo-galarza-mesias'),
(26, 'Abog. Hugo Gómez Sánchez Ramíre', '<p>OFICINA DE ASESORIA JURIDICA</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-hugo-gomez-sanchez.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 13, 'en', '2020-03-03 15:37:22', '2020-03-03 15:37:22', 'abog-hugo-gomez-sanchez-ramire'),
(29, 'CPC. Abel Sebastian Contreras Granados', '<p>Contador General</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-abel-contreras.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 16, 'es', '2020-03-03 15:47:37', '2020-09-04 06:16:57', 'cpc-abel-sebastian-contreras-granados'),
(30, 'OFICINA DE CONTROL SELECTIVO', '<p>Mg. John Charles Rodr&iacute;guez Pati&ntilde;o</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-john-rodriguez.pdf\",\"texto2A\":null}]', 16, 'en', '2020-03-03 15:47:37', '2020-03-03 15:47:37', 'oficina-de-control-selectivo'),
(31, 'Abog. Hugo Gómez Sánchez Ramírez', '<p>Oficina de Asesor&iacute;a Jur&iacute;dica</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-hugo-gomez-sanchez.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 19, 'es', '2020-03-03 15:52:20', '2020-09-04 06:16:27', 'abog-hugo-gomez-sanchez-ramirez'),
(32, 'Abog. Indira Yabar Gutierrez', '<p>&Oacute;rgano de Control Institucional</p>', NULL, 19, 'en', '2020-03-03 15:52:20', '2020-03-03 15:52:20', 'abog-indira-yabar-gutierrez'),
(33, 'Mg. John Charles Rodríguez Patiño', '<p>Oficina de Control Selectivo (e)</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-john-rodriguez.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 20, 'es', '2020-03-03 15:53:39', '2020-09-04 06:38:07', 'mg-john-charles-rodriguez-patino'),
(34, 'QF. Silveria Dongo Gonzales', '<p>Jefe de Oficina de Comercio Industrial</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-silveria-dongo.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 20, 'en', '2020-03-03 15:53:39', '2020-03-03 15:53:39', 'qf-silveria-dongo-gonzales'),
(35, 'Abog. Indira Yabar Gutierrez', '<p>&Oacute;rgano de Control Institucional</p>', NULL, 21, 'es', '2020-03-03 15:55:01', '2020-09-04 06:15:11', 'abog-indira-yabar-gutierrez'),
(36, 'Sr. Yurinel Arteaga Mar', '<p>Sucursal Quillabamba</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-yurinel-arteaga.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 21, 'en', '2020-03-03 15:55:01', '2020-03-03 15:55:01', 'sr-yurinel-arteaga-mar'),
(37, 'QF. Silveria Dongo Gonzales', '<p>Jefe de Oficina de Comercio Industrial (e)</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-silveria-dongo.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 22, 'es', '2020-03-03 15:56:17', '2020-09-04 06:40:04', 'qf-silveria-dongo-gonzales'),
(38, 'Sr. Javier Augusto Pinto Almanza', '<p>Sucursal Huancayo</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-javier-pinto.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 22, 'en', '2020-03-03 15:56:17', '2020-03-03 15:56:17', 'sr-javier-augusto-pinto-almanza'),
(39, 'Sr. Yurinel Arteaga Mar', '<p>Sucursal Quillabamba (e)</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-yurinel-arteaga.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 23, 'es', '2020-03-03 15:57:37', '2020-09-04 06:40:36', 'sr-yurinel-arteaga-mar'),
(40, 'Dr. Alfredo Florez Seigas', '<p>Agencia Juliaca</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-alfredo-flores.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 23, 'en', '2020-03-03 15:57:37', '2020-03-03 15:57:37', 'dr-alfredo-florez-seigas'),
(41, 'Declaración de Intereses', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-mariela-balcazar.pdf\",\"texto2A\":\"Balcazar Abanto Mariela Katiana - ANALISTA COMERCIAL\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-edgar-buendia.pdf\",\"texto2A\":\"Buendia Huarhua Edgar - ANALISTA ADMINISTRATIVO CONTABLE\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-mariano-bustamante.pdf\",\"texto2A\":\"Bustamante Cosi Mariano - REPRESENTANTE DE FISCALIZACI\\u00d3N\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-karen-caballero.pdf\",\"texto2A\":\"Caballero Velasquez Karen Yubitza - ASISTENTE ADMINISTRATIVO CONTABLE\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-joosep-cardenas.pdf\",\"texto2A\":\"Cardenas Mora Joosep Jhonathan - ANALISTA DE LOG\\u00cdSTICA\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-fortunado-choquehuanca.pdf\",\"texto2A\":\"Choquehuanca Vallenas Fortunato - RESPONSABLE UNIDAD OPERATIVA PALMA REAL\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-moises-contreras.pdf\",\"texto2A\":\"Contreras Solorzano Mois\\u00e9s - RESPONSABLE DE UNIDAD OPERATIVA HUANTA\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-carlos-cordero.pdf\",\"texto2A\":\"Cordero Campos Carlos Enrique - ANALISTA COMERCIAL\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-ivan-cordova.pdf\",\"texto2A\":\"Cordova Pereda Ivan Omaro - RESPONSABLE UNIDAD OPERATIVA HUARAZ\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-juniors-cruz.pdf\",\"texto2A\":\"Cruz Pepe Juniors Alex - RESPONSABLE UNIDAD OPERATIVA SAN FRANCISCO-PICHARI\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-edwin-diaz.pdf\",\"texto2A\":\"Diaz Merma Edwin - RESPONSABLE UNIDAD OPERATIVA AYAVIRI\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-eliseo-bautista.pdf\",\"texto2A\":\"Eliseo Bautista Huam\\u00e1n - RESPONSABLE UNIDAD OPERATIVA SANTA ROSA\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-edwin-ferro.pdf\",\"texto2A\":\"Ferro Justiniani Edwin - RESPONSABLE UNIDAD OPERATIVA SICUANI\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-guido-figueroa.pdf\",\"texto2A\":\"Figueroa Medina Guido Eleuterio - SUPERVISOR DE FISCALIZACI\\u00d3N\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-dionisio-flores.pdf\",\"texto2A\":\"Flores Taipe Dionicio - RESPONSABLE UNIDAD OPERATIVA SANTO TOM\\u00c1S\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-mario-fuentes.pdf\",\"texto2A\":\"Fuentes Costas Mario - RESPONSABLE UNIDAD OPERATIVA QUELLOUNO\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-juan-fuentes.pdf\",\"texto2A\":\"Fuentes Terrones Juan Carlos - REPRESENTANTE DE FISCALIZACI\\u00d3N\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-ignacio-garay.pdf\",\"texto2A\":\"Garay Calderon Ignacio Roberto - RESPONSABLE UNIDAD OPERATIVA SANTA MAR\\u00cdA\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-miguel-guerrero.pdf\",\"texto2A\":\"Guerrero Paz Miguel Angel - RESPONSABLE UNIDAD OPERATIVA HUAMACHUCO\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-angel-gutierrez.pdf\",\"texto2A\":\"Gutierrez Guevara Angel Anibal - RESPONSABLE UNIDAD OPERATIVA PUNO\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-jaime-huacallo.pdf\",\"texto2A\":\"Huacallo Farfan Jaime Jonathan - ANALISTA COMERCIAL ( E )\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-angel-huaman.pdf\",\"texto2A\":\"Huaman Isidro Angel Cesar - RESPONSABLE UNIDAD OPERATIVA SAN RAM\\u00d3N\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-jose-laura.pdf\",\"texto2A\":\"Laura Flores Jose Dario - RESPONSABLE UNIDAD OPERATIVA LIMA-JR. PUNO\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-flora-layme.pdf\",\"texto2A\":\"Layme Chacolli Flora - RESPONSABLE UNIDAD OPERATIVA JULI\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-elka-leon.pdf\",\"texto2A\":\"Leon Nima Elka Ivette - COORDINADORA DE PROYECTOS\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-juan-leon.pdf\",\"texto2A\":\"Leon Veli Juan Miguel - ANALISTA ADMINISTRATIVO CONTABLE\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-cesar_lopez2.pdf\",\"texto2A\":\"Lopez Dalia Cesar Eduardo - ASESOR LEGAL GERENCIA GENERAL\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-bautista-luis.pdf\",\"texto2A\":\"Luis Reyes Bautista - RESPONSABLE UNIDAD OPERATIVA ANDAHUAYLAS\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-yeizon-luna.pdf\",\"texto2A\":\"Luna Oviedo Yeizon Frishel - COORDINADOR DE LOG\\u00cdSTICA\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-jose-luna.pdf\",\"texto2A\":\"Luna Rios Jose Antonio - ANALISTA DE TESORER\\u00cdA\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-kevin-luque.pdf\",\"texto2A\":\"Luque Huaman Kevin Kenyo - RESPONSABLE UNIDAD OPERATIVA LLOCHEGUA\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-miguel-malpica.pdf\",\"texto2A\":\"Malpica Tasayco Miguel Angel - JEFE DE RECURSOS HUMANOS\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-victor-martinez.pdf\",\"texto2A\":\"Martinez Benites Victor Ricardo - RESPONSABLE UNIDAD OPERATIVA RANCHO GRANDE\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-rogelio-medina.pdf\",\"texto2A\":\"Medina Barra Rogelio - RESPONSABLE UNIDAD OPERATIVA KITENI\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-guillermo-melly.pdf\",\"texto2A\":\"Melly Siccha Guillermo Hilario - RESPONSABLE UNIDAD OPERATIVA CHACHAPOYAS\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-eliseo-meneses.pdf\",\"texto2A\":\"Meneses Bautista Eliseo - REPRESENTANTE DE VENTAS\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-nataly-miranda.pdf\",\"texto2A\":\"Miranda Arredondo Nataly - ANALISTA DE CONTROL PATRIMONIAL\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-samuel-ortega.pdf\",\"texto2A\":\"Ortega Guerra Samuel Edgar - RESPONSABLE UNIDAD OPERATIVA AZ\\u00c1NGARO\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-juan-ortiz.pdf\",\"texto2A\":\"Ortiz Huaman Juan Carlos - ASISTENTE DE FINANZAS\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-gloria-parra.pdf\",\"texto2A\":\"Parra Terrazos Gloria Elizabeth - ASISTENTE COMERCIAL\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-roy-paz.pdf\",\"texto2A\":\"Paz Araoz Roy Roger - RESPONSABLE UNIDAD OPERATIVA YAURI\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-pedro-pena.pdf\",\"texto2A\":\"Pe\\u00f1a Allende Pedro Wilfredo - SUPERVISOR DE FISCALIZACI\\u00d3N\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-clara-perez.pdf\",\"texto2A\":\"Perez Centeno Clara Luz - REPRESENTANTE DE VENTAS\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-betty-ramos.pdf\",\"texto2A\":\"Ramos Quenaya Betty Yidee - ANALISTA ADMINISTRATIVO CONTABLE\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-nicolas-rios.pdf\",\"texto2A\":\"Rios Angulo Nicolas Hermita\\u00f1o - RESPONSABLE UNIDAD OPERATIVA CALLANCAS\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-gladys-rivera.pdf\",\"texto2A\":\"Rivera Espinoza Gladys - SUPERVISOR DE CONTROL PATRIMONIAL\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-marco-romero.pdf\",\"texto2A\":\"Romero Ballon Marco Amilcar - ANALISTA COMERCIAL ( E )\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-junmy-salazar.pdf\",\"texto2A\":\"Salazar Durand Junmy Gisel - ANALISTA DE COSTOS Y CONTABILIDAD\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-gladys-santa-maria.pdf\",\"texto2A\":\"Santa Maria Perez Gladys Soledad - RESPONSABLE UNIDAD OPERATIVA TINGO MAR\\u00cdA\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-luis-sara.pdf\",\"texto2A\":\"Sara Llanos Luis Rodolfo - ADMINISTRADOR AGENCIA AYACUCHO\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-luis-solis.pdf\",\"texto2A\":\"Solis Bejar Luis Alberto - ADMINISTRADOR AGENCIA CUSCO\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-juana-tito.pdf\",\"texto2A\":\"Tito Quispe Juana Lupe - RESPONSABLE UNIDAD OPERATIVA AREQUIPA\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-leonardo-toribio.pdf\",\"texto2A\":\"Toribio Cconocuica Leonardo - ADMINISTRADOR AGENCIA QUEBRADA\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-elvis-toribio.pdf\",\"texto2A\":\"Toribio Neyra Elvis William - RESPONSABLE UNIDAD OPERATIVA CELEND\\u00cdN\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-luigi-ureta.pdf\",\"texto2A\":\"Ureta Luna Luigi Moshe - ANALISTA DE LOG\\u00cdSTICA ( E )\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-felix-vasquez.pdf\",\"texto2A\":\"Vasquez Cajas Felix - RESPONSABLE UNIDAD OPERATIVA MONZ\\u00d3N\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-rafael-vergara.pdf\",\"texto2A\":\"Vergara Bastidas Rafael - RESPONSABLE UNIDAD OPERATIVA HU\\u00c1NUCO\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-jorge-vila.pdf\",\"texto2A\":\"Vila Mozombite Jorge Roberto - COORDINADOR DE TIC\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-willy-bravo.pdf\",\"texto2A\":\"Willy Bravo Aparicio - ANALISTA DE CONTROL SELECTIVO\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Colaboradores\\/dj-julia-zambrano.pdf\",\"texto2A\":\"Zambrano Tupayachi Julia - REPRESENTANTE DE COMPRAS-VENTAS\"}]', 24, 'es', '2020-03-03 16:38:50', '2020-09-04 06:01:23', 'declaracion-de-intereses'),
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
(76, 'Lista', NULL, '[{\"archivo1A\":\"\\/uploads\\/shares\\/Subastas\\/2011\\/subasta1Res048_2011.pdf\",\"texto2A\":\"Resolucion Nro 048-2011 ENACO S.A\\/ GERENCIA GENERAL\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Subastas\\/2011\\/subastaAyacuchoBases2011.pdf\",\"texto2A\":\"Bases Subasta Publica Ayacucho 2011\"},{\"archivo1A\":\"\\/uploads\\/shares\\/Subastas\\/2011\\/subastaResultado002_2011.pdf\",\"texto2A\":\"Resolucion Nro 048-2011 ENACO S.A\\/ GERENCIA GENERAL\"}]', 41, 'en', '2020-03-04 23:54:53', '2020-03-04 23:54:53', 'lista'),
(77, 'Sr. Javier Augusto Pinto Almanza', '<p>Sucursal Huancayo</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-javier-pinto.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 42, 'es', '2020-09-04 05:57:05', '2020-09-04 06:13:46', 'sr-javier-augusto-pinto-almanza'),
(78, 'Lic. Raúl Alberto Molina Martinez', '<p>Director</p>', NULL, 42, 'en', '2020-09-04 05:57:05', '2020-09-04 05:57:05', 'lic-raul-alberto-molina-martinez'),
(79, 'Dr. Alfredo Florez Seigas', '<p>Agencia Juliaca</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-alfredo-flores.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 43, 'es', '2020-09-04 06:13:12', '2020-09-04 06:13:12', 'dr-alfredo-florez-seigas'),
(80, 'Dr. Alfredo Florez Seigas', '<p>Agencia Juliaca</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/Declaraciones de Intereses\\/Directorio\\/dj-alfredo-flores.pdf\",\"texto2A\":\"Declaraci\\u00f3n de Intereses\"}]', 43, 'en', '2020-09-04 06:13:12', '2020-09-04 06:13:12', 'dr-alfredo-florez-seigas');

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
(34, 'Subastas 2011', 'subastas-2011', 17, 'en', '2020-03-04 22:27:26', '2020-03-04 22:27:26'),
(35, 'VENTA DE DIRECTA DE BIENES SIN CÓDIGO', 'venta-de-directa-de-bienes-sin-codigo', 18, 'es', '2021-01-29 02:40:53', '2021-01-29 02:40:53'),
(36, 'VENTA DE DIRECTA DE BIENES SIN CÓDIGO', 'venta-de-directa-de-bienes-sin-codigo', 18, 'en', '2021-01-29 02:40:53', '2021-01-29 02:40:53');

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
(1, 'Somos la única Empresa autorizada para la comercialización de la Hoja de Coca en el Perú', '<p>La Empresa Nacional de la Coca S.A., es una empresa peruana por m&aacute;s de medio centenio dedicada al acopio, comercializaci&oacute;n e industrializaci&oacute;n de la Hoja de Coca (Erythroxylum coca) y sus derivados, con fines l&iacute;citos y ben&eacute;ficos para la salud.</p>\r\n\r\n<p>Nuestra funci&oacute;n principal es atender la demanda legal de hoja de coca, tanto para el uso tradicional, masticado (chacchado) y su industrializaci&oacute;n.</p>', '[{\"archivo1A\":\"\\/uploads\\/shares\\/historia\\/group-8-icon.png\",\"archivo2A\":\"\\/uploads\\/shares\\/historia\\/rosado_-icono.png\",\"texto3A\":\"Integraci\\u00f3n\"},{\"archivo1A\":\"\\/uploads\\/shares\\/historia\\/Artboard_4.png\",\"archivo2A\":\"\\/uploads\\/shares\\/historia\\/rojo-icono.png\",\"texto3A\":\"Excelencia en el servicio\"},{\"archivo1A\":\"\\/uploads\\/shares\\/historia\\/Artboard.png\",\"archivo2A\":\"\\/uploads\\/shares\\/historia\\/verde_-icono.png\",\"texto3A\":\"Innovaci\\u00f3n\"},{\"archivo1A\":\"\\/uploads\\/shares\\/historia\\/Artboard_5.png\",\"archivo2A\":\"\\/uploads\\/shares\\/historia\\/azul-icono.png\",\"texto3A\":\"Compromiso\"},{\"archivo1A\":\"\\/uploads\\/shares\\/historia\\/manos.png\",\"archivo2A\":\"\\/uploads\\/shares\\/historia\\/amarillo_-icono.png\",\"texto3A\":\"Integridad\"}]', 'MISIÓN', 'Conoce nuestra misión', '<p>Somos la empresa del Estado Peruano que dentro de la Estrategia Nacional de Lucha contra las Drogas se encarga del acopio, industrializaci&oacute;n y comercializaci&oacute;n de la Hoja de Coca a nivel nacional e internacional, con responsabilidad social bajo el marco de las normas legales vigentes, para satisfacer las necesidades de sus clientes.</p>', 'VISIÓN', 'Conoce nuestra visión', '<p>Ser una empresa reconocida en el mercado nacional e internacional de la comercializaci&oacute;n e industrializaci&oacute;n de la Hoja de Coca, por la calidad e innovaci&oacute;n permanente de sus productos, su personal altamente motivado y competente, procesos &oacute;ptimos y normalizados, que cumple su rol social con proveedores y clientes satisfechos.</p>', 'Ofrecemos calidad y tradición desde', '[{\"imgA\":\"\\/uploads\\/shares\\/historia\\/Grupo_1.png\",\"tx1A\":\"1948\",\"tx2A\":\"Decreto Ley N\\u00b0 11046\",\"txDesA\":\"<p>Se estableci&oacute; el Estanco de la Coca; entidad encargada del control del sembr&iacute;o, cultivo y cosecha de la Hoja de Coca en el Per&uacute;; as&iacute; como de su distribuci&oacute;n, consumo y exportaci&oacute;n.<\\/p>\"},{\"imgA\":\"\\/uploads\\/shares\\/historia\\/500x444-min.png\",\"tx1A\":\"1969\",\"tx2A\":\"Decreto Ley N\\u00b0 17525\",\"txDesA\":\"<p>Se estableci&oacute; a la Empresa de la Coca y Derivados como organismo p&uacute;blico descentralizado del Ministerio de Industria y Comercio.<\\/p>\"},{\"imgA\":\"\\/uploads\\/shares\\/historia\\/shutterstock_1483416317.png\",\"tx1A\":\"1974\",\"tx2A\":\"Decreto Ley N\\u00b0 20689\",\"txDesA\":\"<p>Dispuso que en tanto no se promulgue la Ley de la Actividad Empresarial del Estado, entidades como la Empresa Nacional de la Coca pod&iacute;an organizarse como empresas estatales.<\\/p>\"},{\"imgA\":\"\\/uploads\\/shares\\/historia\\/Grupo_8.jpg\",\"tx1A\":\"1978\",\"tx2A\":\"Ley N\\u00b0 22095\",\"txDesA\":\"<p>Se estableci&oacute; que solo el Estado, a trav&eacute;s de la Empresa Nacional de la Coca S.A. (ENACO S.A.); realizar&iacute;a la comercializaci&oacute;n interna y externa de la Hoja de Coca.<\\/p>\"},{\"imgA\":\"\\/uploads\\/shares\\/historia\\/Grupo_3.png\",\"tx1A\":\"1978\",\"tx2A\":\"Ley N\\u00b0 22232\",\"txDesA\":\"<p>Adscribi&oacute; a ENACO al sector agrario, como un organismo p&uacute;blico descentralizado.<\\/p>\"},{\"imgA\":\"\\/uploads\\/shares\\/historia\\/enaco-local.jpg\",\"tx1A\":\"1978\",\"tx2A\":\"Ley N\\u00b0 22370\",\"txDesA\":\"<p>Ley Org&aacute;nica de la Empresa Nacional de la Coca; estableci&oacute; a ENACO como empresa p&uacute;blica del sector agrario.<\\/p>\"},{\"imgA\":\"\\/uploads\\/shares\\/historia\\/Grupo_10.png\",\"tx1A\":\"1979\",\"tx2A\":\"Decreto Supremo N\\u00b0 026-79-AA\",\"txDesA\":\"<p>Se aprob&oacute; el Estatuto de ENACO como empresa p&uacute;blica.<\\/p>\"},{\"imgA\":\"\\/uploads\\/shares\\/historia\\/Grupo_7.jpg\",\"tx1A\":\"1982\",\"tx2A\":\"Decreto Supremo N\\u00b0 008-82-AG\",\"txDesA\":\"<p>Se aprob&oacute; la conversi&oacute;n de la Empresa Nacional de la Coca, en empresa estatal de derecho privado del Sector Agricultura; otorg&aacute;ndole la denominaci&oacute;n abreviada ENACO S.A.<\\/p>\"},{\"imgA\":\"\\/uploads\\/shares\\/historia\\/1574204691Grupo_4.jpg\",\"tx1A\":\"1985\",\"tx2A\":\"Decreto Superno N\\u00b0 209-EF\",\"txDesA\":\"<p>Transfiere como aporte de capital a Inversiones COFIDE S.A., la totalidad de las acciones que posee el Estado, directo en las empresas estatales de derecho privado, entre estas ENACO S.A.&nbsp;&nbsp;<\\/p>\"},{\"imgA\":\"\\/uploads\\/shares\\/historia\\/1574204691Grupo_6.jpg\",\"tx1A\":\"1997\",\"tx2A\":\"Decreto Supremo N\\u00b0 094-97-EF\",\"txDesA\":\"<p>Autoriza la transferencia a favor del MEF&nbsp;&ndash; OIOE, la totalidad de las acciones de propiedad de Inversiones COFIDE S.A. de las Empresas Estatales de Derecho Privado&nbsp;&nbsp;<\\/p>\"},{\"imgA\":\"\\/uploads\\/shares\\/historia\\/1574204691Grupo_5.jpg\",\"tx1A\":\"1999\",\"tx2A\":\"Decreto Supremo N\\u00b0 170-99-EF\",\"txDesA\":\"<p>Establece disposiciones aplicables a Entidades y Empresas del Estado para perfeccionar la transferencia de acciones al FONAFE.&nbsp;<\\/p>\"},{\"imgA\":\"\\/uploads\\/shares\\/historia\\/Grupo_10.png\",\"tx1A\":\"2001\",\"tx2A\":\"Estatuto de ENACO\",\"txDesA\":\"<p>Nuevo Estatuto de ENACO, aprobado mediante Acta de J.G.A<\\/p>\"},{\"imgA\":\"\\/uploads\\/shares\\/historia\\/getg.png\",\"tx1A\":\"2015\",\"tx2A\":\"Decreto Legislativo N\\u00b0 1241\",\"txDesA\":\"<p>Fortalece la lucha contra el tr&aacute;fico il&iacute;cito de drogas. Establece que el Estado a trav&eacute;s de ENACO S.A. realiza la industrializaci&oacute;n y comercializaci&oacute;n interna y externa de la hoja de coca proveniente de los predios empadronados.<\\/p>\"},{\"imgA\":\"\\/uploads\\/shares\\/historia\\/dfs.png\",\"tx1A\":\"2016\",\"tx2A\":\"Decreto Supremo N\\u00b0 006-2016-IN\",\"txDesA\":\"<p>Establece adem&aacute;s que ENACO S.A. ejerce fiscalizaci&oacute;n sobre la posesi&oacute;n y comercializaci&oacute;n de la hoja de coca, con intervenci&oacute;n del personal de la Polic&iacute;a Nacional del Per&uacute;&nbsp;y de ser materialmente factible, el representante del Ministerio P&uacute;blico.<\\/p>\"}]', 'Productos certificados', '<p>Gracias a la experiencia de casi cuatro d&eacute;cadas desarrollando productos y soluciones industriales, contamos con certificaciones en:</p>\r\n\r\n<ul>\r\n	<li>Certificaci&oacute;n PGH otorgado por la Direcci&oacute;n General de Salud Ambiental.</li>\r\n	<li>Registro sanitario de alimentos otorgado por la Direcci&oacute;n General de Salud Ambiental.</li>\r\n	<li>Procesos de inocuidad otorgado por SENASA.</li>\r\n</ul>', '[{\"archivoOne1A\":\"\\/uploads\\/shares\\/historia\\/147x93-min.png\"},{\"archivoOne1A\":\"\\/uploads\\/shares\\/historia\\/Group_9.png\"},{\"archivoOne1A\":\"\\/uploads\\/shares\\/historia\\/INOCUIDAD_2.jpg\"}]', 'Productos de herencia milenaria', 'Comercio Tradicional', '[{\"archivoOne1A1\":\"\\/uploads\\/shares\\/historia\\/1443x574.jpg\"},{\"archivoOne1A1\":\"\\/uploads\\/shares\\/historia\\/Bitmap_4.jpg\"},{\"archivoOne1A1\":\"\\/uploads\\/shares\\/historia\\/Bitmap_3.jpg\"},{\"archivoOne1A1\":\"\\/uploads\\/shares\\/historia\\/_DSC7836.jpg\"},{\"archivoOne1A1\":\"\\/uploads\\/shares\\/historia\\/_DSC7837.jpg\"}]', 'Comercio Tradicional', 'Conoce más de este comercio', '<p>En ENACO valoramos la dedicaci&oacute;n y el conocimiento ancestral de nuestras comunidades para el cultivo de la hoja de coca.</p>\r\n\r\n<p>Por ello, trabajamos de la mano con agricultores de diversas comunidades de los diferentes valles del Per&uacute;, contribuyendo al desarrollo sostenible e inclusivo.</p>\r\n\r\n<p>&iexcl;Se parte de este gran trabajo!&nbsp;</p>', 'Comercio Industrial', '[{\"archivoOne1A2\":\"\\/uploads\\/shares\\/historia\\/_DSC0413.jpg\"},{\"archivoOne1A2\":\"\\/uploads\\/shares\\/historia\\/_DSC0344.jpg\"},{\"archivoOne1A2\":\"\\/uploads\\/shares\\/historia\\/_DSC0431.jpg\"},{\"archivoOne1A2\":\"\\/uploads\\/shares\\/historia\\/_DSC0503.jpg\"},{\"archivoOne1A2\":\"\\/uploads\\/shares\\/historia\\/_DSC0442.jpg\"},{\"archivoOne1A2\":\"\\/uploads\\/shares\\/historia\\/_DSC0419.jpg\"},{\"archivoOne1A2\":\"\\/uploads\\/shares\\/historia\\/_DSC0473.jpg\"}]', 'Comercio Industrial', 'Conoce más de este comercio', '<p>Estamos comprometidos con la producci&oacute;n derivados de la hoja de coca bajo los m&aacute;s altos est&aacute;ndares de Calidad, a trav&eacute;s de una moderna planta de proceso que nos ha permitido obtener productos.</p>', 1, 'es', '2019-11-15 04:38:57', '2020-09-30 01:28:36'),
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
(1, 'Somos guardianes de la herencia milenaria inca única en el mundo.', '<p>Venimos trabajando por m&aacute;s de medio centenio dedicados al acopio, comercializaci&oacute;n e industrializaci&oacute;n de la hoja de coca (Erythroxylum) y sus derivados, con fines l&iacute;citos y ben&eacute;ficos para la salud.</p>', 'Conócenos', 'Nuestros productos', 'Aquí encontrarás una gran variedad', 'Generamos vínculos con las comunidades cocaleras', '<p>Generamos valor agregado a la hoja sagrada; permitiendo la mejora de condiciones a nuestros principales proveedores; comunidades cocaleras legales; quienes trabajan la tierra en armon&iacute;a con la naturaleza.</p>', NULL, 'Más información', 'Lo último en ENACO', 'Entérate las últimas noticias de la Hoja de Coca', 'Ver blog', 'https://web.enaco.com.pe/blog/', 'Mantente informado', 'Déjanos tu correo aquí', 'Suscríbete', 1, 'es', '2019-11-15 03:04:59', '2020-09-30 01:24:34'),
(2, 'De la herencia milenaria única en el mundo We have', '<p>Llega la Empresa Nacional de la Coca S.A., se cre&oacute; en el a&ntilde;o de 1949, como la &uacute;nica empresa peruana autorizada para la comercializaci&oacute;n de la hoja de coca y sus derivados. A partir del a&ntilde;o de 1982, Enaco S.A.</p>', 'Conócenos', 'Nacen nuestro productos', 'Aquí encontrarás una gran variedad', 'Linking coca farmer communities', '<p>Our bespoke events create captivating worlds of discovery and magic</p>', NULL, 'Más información', 'Lo último en ENACO', 'Entérate las últimas noticias de la hoja de coca', 'Ver blog', 'https://web.enaco.com.pe/blog/', 'Mantente informado', 'Déjanos tu correo aquí', 'Suscríbete', 1, 'en', '2019-11-15 03:04:59', '2021-04-14 22:14:21');

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
(1, '2019-11-15 03:23:32', '2020-09-18 21:45:53', '/uploads/shares/industrial/hover1.jpg', '/uploads/shares/industrial/800x719-min.png', '/uploads/shares/industrial/1000x677-3.jpg');

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
(1, 'Industrial', '<p>En ENACO mantenemos sabiamente la tradici&oacute;n en el consumo de las plantas peruanas usadas desde el tiempo de los incas</p>', 'industrial', 'Disfruta esta herencia milenaria', '<p>En ENACO mantenemos sabiamente la tradici&oacute;n en el consumo de la Hoja de Coca usada desde el tiempo de los Incas, por m&aacute;s de 30 a&ntilde;os brindando sabor y transmitiendo sabidur&iacute;a a trav&eacute;s de la industrializaci&oacute;n de esta hoja milenaria.</p>', 1, 'es', '2019-11-15 03:23:32', '2020-09-04 07:03:22'),
(2, 'Industrial', '<p>We offer a wide variety of coca leaf based products. Enjoy them in all your meals.</p>', 'industrial', 'Inherited products', '<p>We offer a wide variety of coca leaf based products. Enjoy them in all your meals.</p>', 1, 'en', '2019-11-15 03:23:32', '2021-04-18 00:55:32');

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
(1, 'info@enaco.com.pe', 'info@enaco.com.pe', 'ventas@enaco.com.pe', 'info@enaco.com.pe', 'denuncias.etica@enaco.com.pe', '2019-11-15 03:06:40', '2021-04-18 23:07:22', 0);

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
(1, 'https://www.enaco.com.pe/blog/', 'http://www.transparencia.gob.pe/enlaces/pte_transparencia_enlaces.aspx?id_entidad=13879&id_tema=1&ver=D#.XeagLehKhPa', 'http://intranet.enaco.com.pe:8080/consprod/', 'https://intranet.enaco.com.pe/felectronica/', NULL, '/uploads/shares/home/enaco_-_te__rminos_y_condiciones.pdf', NULL, 'https://www.facebook.com/enaco.oficial/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'Lima', '+51 (01) 2637219', NULL, 'Provincia', '+51 (84) 582002', NULL, 'Grandes Variedades', 'Aquí encontrarás tu producto ideal', 'Gracias', '<p>En breve nos pondremos en contacto contigo</p>', 'Nuestras Sedes', 'Es hora de charlar', '<p>Completa el formulario y uno de nuestros colaboradores se comunicar&aacute;&nbsp;contigo</p>', '[{\"tx1A\":\"Administrativo (Sede Central)\",\"tx2A\":\"+51\\u00a0(84) 582002\",\"tx3A\":null,\"tx4A\":\"Tenerias N\\u00b0 103, San Sebasti\\u00e1n, Cusco\",\"tx5A\":\"info@enaco.com.pe\"},{\"tx1A\":\"Administrativo (Sede Miraflores)\",\"tx2A\":\"+51(01) 65-84703\",\"tx3A\":null,\"tx4A\":\"Av. Arequipa N\\u00ba 4528, Miraflores, Lima\",\"tx5A\":\"info@enaco.com.pe\"}]', 'Información de gestión', 'Conoce a nuestros temas', 'Buscamos Talento', 'Encuentra el puesto que tenemos para ti', 'Buscamos Proveedores', 'Encuentra el puesto que tenemos para ti', 'Para adquisiciones menores a 8 UIT', '<p>Llega la Empresa Nacional de la Coca S.A., se cre&oacute; en el a&ntilde;o de 1949, como la &uacute;nica empresa peruana autorizada para la comercializaci&oacute;n de la hoja de coca y sus derivados.</p>', '/uploads/shares/TEST_ENACO.pdf', '¿Qué tienes para contarnos?', '¿Tienes alguna denuncia?', '<p><strong>La Empresa Nacional de la Coca S.A.</strong> ha implementado un sistema de denuncias, quejas, consultas y sugerencias, el cual cuenta con canales distintos y abiertos para cualquier persona que tenga conocimiento de alg&uacute;n hecho que contravenga nuestros principios del &ldquo;C&oacute;digo de Etica&rdquo; o en su defecto requieran hacernos llegar alguna informaci&oacute;n oportuna para atenci&oacute;n.</p>\r\n\r\n<p>Para registrar en linea una denuncia, utiliza este formulario. Llena correctamente los datos. <strong>(*) Campos obligatorios.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tambi&eacute;n puedes ingresar una denuncia, a trav&eacute;s del siguiente correo que canalizar&aacute; la informaci&oacute;n que proporciones:&nbsp;<strong><a href=\"mailto:denuncias.etica@enaco.com.pe\">denuncias.etica@enaco.com.pe</a></strong></p>', 1, 'es', '2019-11-15 03:06:40', '2020-09-24 01:57:15', '[{\"tx1A2\":\"Productos Tradicionales\",\"tx2A2\":\"+51\\u00a0(84) 582002\",\"tx3A2\":null,\"tx4A2\":\"Tenerias N\\u00b0 103, San Sebasti\\u00e1n, Cusco\",\"tx5A2\":\"ventas@enaco.com.pe\"},{\"tx1A2\":\"Productos Industriales (Sede Lima)\",\"tx2A2\":\"+51 (01) 2637219\",\"tx3A2\":null,\"tx4A2\":\"Av. Universitaria N\\u00ba602 San Miguel\",\"tx5A2\":\"ventas@enaco.com.pe\"}]', 'https://intranet.enaco.com.pe/intranet/wp-login', 'https://tde.enaco.com.pe/index.php/inicio/login', 'Gracias', '<p>Revisaremos tu caso y nos pondremos en contacto contigo</p>'),
(2, 'https://web.enaco.com.pe/blog/', 'http://www.transparencia.gob.pe/enlaces/pte_transparencia_enlaces.aspx?id_entidad=13879&id_tema=1&ver=D#.XeagLehKhPa', 'http://www.enaco.com.pe:8080/consprod/', 'https://www.enaco.com.pe/felectronica/', NULL, '/uploads/shares/enaco_-_te__rminos_y_condiciones.pdf', NULL, 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', 'Great Varieties', 'Here you will find your ideal product', 'prueba', '<p>prueba</p>', 'Find us all over Peru', 'What do you have to tell us?', '<p>&nbsp;</p>\r\n\r\n<p>Complete the form and one of our collaborators will contact you</p>', '[{\"tx1A\":\"prueba\",\"tx2A\":\"prueba\",\"tx3A\":\"prueba\",\"tx4A\":\"prueba\",\"tx5A\":\"prueba\"}]', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', 'prueba', '<p>prueba</p>', '/uploads/shares/2-atlas-pesado-webjpg.jpg', 'prueba', 'prueba', '<p>prueba</p>', 1, 'en', '2019-11-15 03:06:40', '2020-05-06 01:11:40', NULL, 'https://www.enaco.com.pe/intranet/wp-login.php', 'https://tde.enaco.com.pe/index.php/inicio/login', 'Thanks', '<p>&nbsp;</p>\r\n\r\n<p>We will review your case and contact you</p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `integrante`
--

CREATE TABLE `integrante` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci,
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
(2, NULL, '4', 1, '2019-11-15 05:42:46', '2020-10-29 05:10:04', 2),
(3, NULL, '5', 2, '2019-11-15 05:43:05', '2020-10-29 05:09:29', 3),
(12, NULL, '5', 13, '2020-03-02 14:14:48', '2020-10-29 05:09:40', 3),
(14, NULL, '5', 10, '2020-09-01 21:15:08', '2020-10-29 05:09:50', 3),
(15, NULL, '2', 18, '2020-10-29 04:44:11', '2020-10-29 05:22:22', 1),
(17, NULL, '1', 17, '2020-10-29 05:10:46', '2020-10-29 05:11:59', 1);

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
  `telefono` text COLLATE utf8mb4_unicode_ci,
  `correo` text COLLATE utf8mb4_unicode_ci,
  `direccion` text COLLATE utf8mb4_unicode_ci,
  `des` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `integrante_translations`
--

INSERT INTO `integrante_translations` (`id`, `nombreCompleto`, `integrante_id`, `locale`, `created_at`, `updated_at`, `telefono`, `correo`, `direccion`, `des`) VALUES
(3, 'Mg. Carlos Alonso Vásquez Lazo', 2, 'es', '2019-11-15 05:42:46', '2020-10-30 20:17:40', '01-6584706', 'cvasquez@enaco.com.pe', 'Av. Arequipa 4528; Miraflores - Lima', '<p>.</p>'),
(4, 'Carlos Alberto de Izcue Arnillas', 2, 'en', '2019-11-15 05:42:46', '2019-11-15 05:42:46', '', '', '', ''),
(5, 'CPC. Abel S. Contreras Granados', 3, 'es', '2019-11-15 05:43:05', '2020-10-30 20:22:27', '01-6584706', 'acontreras@enaco.com.pe', 'Av. Arequipa 4528; Miraflores - Lima', '<p>.</p>'),
(6, 'Carlos Alberto de Izcue Arnillas', 3, 'en', '2019-11-15 05:43:05', '2019-11-15 05:43:05', '', '', '', ''),
(21, 'Mg. Edgard Gutierrez Vargas', 12, 'es', '2020-03-02 14:14:48', '2021-01-26 21:06:23', '084-582027', 'egutierrez@enaco.com.pe', 'Calle Tenerias 103 ; San Sebastian - Cusco', '<p>.</p>'),
(22, 'Henry Willian Gil Herrera', 12, 'en', '2020-03-02 14:14:48', '2020-03-02 14:14:48', '-', 'hgil@enaco.com.pe', 'Av. Arequipa 4528; Miraflores - Lima', '<p>Como persona organizada y con una gran motivaci&oacute;n, soy capaz de adaptarme a cualquier circunstancia y dar siempre lo mejor de m&iacute; en cualquier proyecto, al mismo tiempo que me esfuerzo por trabajar en equipo y fomentar valores como los del compa&ntilde;erismo.</p>'),
(25, 'Mg. Cristian E. Galarza Mesias', 14, 'es', '2020-09-01 21:15:08', '2020-10-30 20:16:34', NULL, NULL, NULL, NULL),
(26, 'Cristian Eduardo Galarza Mesias', 14, 'en', '2020-09-01 21:15:08', '2020-09-01 21:15:08', NULL, NULL, NULL, NULL),
(27, 'Lic. Raúl Alberto Molina Martinez', 15, 'es', '2020-10-29 04:44:11', '2021-03-19 00:11:11', NULL, NULL, NULL, NULL),
(28, '(FONAFE)', 15, 'en', '2020-10-29 04:44:11', '2020-10-29 04:44:11', NULL, NULL, NULL, NULL),
(31, '(FONAFE)', 17, 'es', '2020-10-29 05:10:46', '2020-10-29 05:10:46', NULL, NULL, NULL, NULL),
(32, '(FONAFE)', 17, 'en', '2020-10-29 05:10:46', '2020-10-29 05:10:46', NULL, NULL, NULL, NULL);

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
(49, '2020_06_08_125607_update_industrial5_table', 25),
(50, '2020_08_14_172845_update_industrial6_table', 26),
(51, '2020_08_31_162304_update_integrante2_table', 26);

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
  `check_exportacion` tinyint(1) NOT NULL DEFAULT '0',
  `imagenBeneficios2` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `prod_indus`
--

INSERT INTO `prod_indus` (`id`, `imagenListado`, `imagenFondo`, `imagenBeneficios`, `subcat_indus_id`, `etiqueta_indus_id`, `created_at`, `updated_at`, `imagenFondoMobile`, `check_exportacion`, `imagenBeneficios2`) VALUES
(2, '/uploads/shares/industrial/listado-deli1.png', '/uploads/shares/banner_1283x780_MATE.jpg', '/uploads/shares/industrial/586x549-min.png', 3, 1, '2019-11-22 00:22:45', '2021-03-15 20:40:13', '/uploads/shares/banner_1283x780_MATE.jpg', 0, '/uploads/shares/industrial/taza.png'),
(3, '/uploads/shares/industrial/listado-deli3.png', '/uploads/shares/industrial/fondo1.jpg', '/uploads/shares/industrial/586x549-una_gato-min.png', 1, 1, '2019-11-22 01:16:39', '2020-09-29 20:27:30', '/uploads/shares/producto/fondo-producto.jpg', 0, '/uploads/shares/industrial/359x418-una_gato-min.png'),
(4, '/uploads/shares/industrial/listado-deli4.png', '/uploads/shares/banner_1283x780_MENTA__1_.jpg', '/uploads/shares/industrial/586x549-menta-min.png', 1, 1, '2019-11-22 01:21:08', '2021-03-15 21:09:49', '/uploads/shares/banner_1283x780_MENTA__1_.jpg', 0, '/uploads/shares/industrial/taza.png'),
(5, '/uploads/shares/industrial/listado-deli5.png', '/uploads/shares/banner_1283x780_EUCALIPTO.jpg', '/uploads/shares/industrial/586x549-Cocalyptuss-min.png', 1, 1, '2019-11-22 01:24:03', '2021-03-15 21:13:37', '/uploads/shares/producto/fondo-producto.jpg', 0, '/uploads/shares/industrial/b18group.png'),
(6, '/uploads/shares/industrial/listado-kintu1.png', '/uploads/shares/industrial/Grupo_6.jpg', '/uploads/shares/586x549-kintu.png', 2, 1, '2019-11-22 01:26:47', '2021-03-16 21:49:47', '/uploads/shares/producto/fondo-producto.jpg', 1, '/uploads/shares/industrial/359x418-kintu-min.png'),
(8, '/uploads/shares/producto/harina.png', '/uploads/shares/banner_1283x780_HARINA_complemento_nutricional__2_.jpg', '/uploads/shares/586x549-harina_complemento.png', 1, 1, '2020-09-29 02:22:36', '2021-03-20 02:11:57', '/uploads/shares/banner_1283x780_HARINA_complemento_nutricional__2_.jpg', 0, '/uploads/shares/359x418-hoja_picada.png'),
(10, '/uploads/shares/BIDON_carrito.png', '/uploads/shares/banner_1283x780_EXTRACTO_liquido__1_.jpg', '/uploads/shares/586x549-extracto-liquido.png', 2, 6, '2021-03-15 20:56:09', '2021-03-20 02:05:16', '/uploads/shares/banner_1283x780_EXTRACTO_liquido__1_.jpg', 1, '/uploads/shares/botella_extracto_liquido-359x418.png'),
(11, '/uploads/shares/micro_carrito.png', '/uploads/shares/banner_1283x780_HARINA_micropulverizada.jpg', '/uploads/shares/586x549-harina_INDUSTRIAL.png', 1, 6, '2021-03-15 21:36:28', '2021-03-20 02:13:34', '/uploads/shares/banner_1283x780_HARINA_micropulverizada.jpg', 0, '/uploads/shares/359x418-hoja_picada.png'),
(13, '/uploads/shares/atomizado_carrito.png', '/uploads/shares/banner_1283x780_POLVO_ATOMIZADO.jpg', '/uploads/shares/586x549-polvo_atomizado.png', 2, 6, '2021-03-15 22:22:28', '2021-03-20 02:09:20', '/uploads/shares/banner_1283x780_POLVO_ATOMIZADO.jpg', 1, '/uploads/shares/359x418-polvo_atomizado.png'),
(14, '/uploads/shares/picada_carrito.png', '/uploads/shares/banner_1283x780_HARINA_hoja_picada.jpg', '/uploads/shares/586x549-hoja_picada.png', 1, 6, '2021-03-15 22:32:32', '2021-03-20 02:10:26', '/uploads/shares/banner_1283x780_HARINA_hoja_picada.jpg', 1, '/uploads/shares/359x418-hoja_picada.png');

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
(16, 2, 3, NULL, NULL),
(17, 2, 4, NULL, NULL),
(18, 2, 5, NULL, NULL),
(19, 3, 3, NULL, NULL),
(20, 3, 5, NULL, NULL),
(21, 4, 4, NULL, NULL),
(23, 8, 2, NULL, NULL),
(24, 8, 3, NULL, NULL),
(25, 8, 4, NULL, NULL),
(26, 8, 5, NULL, NULL),
(29, 11, 10, NULL, NULL),
(32, 13, 10, NULL, NULL),
(33, 13, 11, NULL, NULL),
(35, 14, 10, NULL, NULL),
(36, 14, 11, NULL, NULL),
(37, 14, 13, NULL, NULL),
(38, 13, 14, NULL, NULL),
(39, 11, 11, NULL, NULL),
(40, 11, 13, NULL, NULL),
(41, 11, 14, NULL, NULL),
(42, 10, 10, NULL, NULL),
(43, 10, 13, NULL, NULL),
(44, 10, 14, NULL, NULL);

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
(3, 'Infusión de Hoja de Coca', 'infusion-de-hoja-de-coca', '<p>La infusi&oacute;n de Hoja de coca es una bebida milenaria, elaborada con hojas naturales que nos aporta energ&iacute;a y es buen&iacute;sima para limpiar el h&iacute;gado y s&uacute;per digestiva.&nbsp;</p>\r\n\r\n<p>&iexcl;Libre de colorantes y preservantes!</p>', '[{\"texto1A\":\"Caja 25 Filtrantes\",\"img1A\":\"\\/uploads\\/shares\\/industrial\\/deli1.png\",\"img2A\":null,\"img3A\":null},{\"texto1A\":\"Caja 100 Filtrantes\",\"img1A\":\"\\/uploads\\/shares\\/industrial\\/deli2.png\",\"img2A\":null,\"img3A\":null}]', NULL, '[{\"txt1A\":\"01\",\"txt2A\":\"Energizante natural.\"},{\"txt1A\":\"02\",\"txt2A\":\"Digestiva.\"},{\"txt1A\":\"03\",\"txt2A\":\"Previene el mal de altura.\"}]', 'Tenemos otros sabores', 2, 'es', '2019-11-22 00:22:45', '2020-09-29 20:05:05'),
(4, 'Coca tea', 'coca-tea', '<p>Coca leaf infusion is an ancient drink, made with natural leaves that gives us energy and is great for cleansing the liver and super digestive.&nbsp;</p>\r\n\r\n<p>Free of dyes and preservatives!</p>', '[{\"texto1A\":\"BOX 25 FILTERS\",\"img1A\":\"\\/uploads\\/shares\\/industrial\\/Infusi\\u00f3n de u\\u00f1a de gato y hoja de coca Delisse.png\",\"img2A\":null,\"img3A\":null},{\"texto1A\":\"BOX 100 FILTERS\",\"img1A\":\"\\/uploads\\/shares\\/industrial\\/deli2.png\",\"img2A\":null,\"img3A\":null}]', NULL, '[{\"txt1A\":\"01\",\"txt2A\":\"Natural energizer.\"},{\"txt1A\":\"02\",\"txt2A\":\"Digestive.\"},{\"txt1A\":\"03\",\"txt2A\":\"Prevents altitude sickness.\"}]', 'Other types of flavors', 2, 'en', '2019-11-22 00:22:45', '2021-04-18 01:16:48'),
(5, 'Uña de gato con hoja de coca', 'una-de-gato-con-hoja-de-coca', '<p>Una perfecta combinaci&oacute;n, la u&ntilde;a de gato una potente planta de la amazonia peruana; que mezclada con hojas de coca hacen potenciar sus propiedades.&nbsp;</p>\r\n\r\n<p>&iexcl;Libre de colorantes y preservantes!</p>', '[{\"texto1A\":\"Caja 25 filtrantes\",\"img1A\":\"\\/uploads\\/shares\\/industrial\\/deli3.png\",\"img2A\":null,\"img3A\":null}]', NULL, '[{\"txt1A\":\"01\",\"txt2A\":\"Anti-flamatorio natural.\"},{\"txt1A\":\"02\",\"txt2A\":\"Digestiva y diur\\u00e9tico.\"},{\"txt1A\":\"03\",\"txt2A\":\"Estimula y refuerza el sistema inmunol\\u00f3gico.\"}]', 'Tenemos otros sabores', 3, 'es', '2019-11-22 01:16:39', '2020-09-29 20:05:17'),
(6, 'Cat\'s claw with coca leaf', 'cats-claw-with-coca-leaf', '<p>A perfect combination, cat&#39;s claw, a powerful plant from the Peruvian Amazon, mixed with coca leaves, enhances its properties.&nbsp;</p>\r\n\r\n<p>Free of dyes and preservatives!</p>', '[{\"texto1A\":\"BOX 25 FILTERS\",\"img1A\":\"\\/uploads\\/shares\\/industrial\\/deli3.png\",\"img2A\":null,\"img3A\":null}]', NULL, '[{\"txt1A\":\"01\",\"txt2A\":\"Natural anti-inflammatory.\"},{\"txt1A\":\"02\",\"txt2A\":\"Digestive and diuretic.\"},{\"txt1A\":\"03\",\"txt2A\":\"Stimulates and strengthens the immune system.\"}]', 'Other types of coca leaf products', 3, 'en', '2019-11-22 01:16:39', '2021-04-18 02:21:35'),
(7, 'Menta y Hoja de Coca', 'menta-y-hoja-de-coca', '<p>Una combinaci&oacute;n agradable de hojas de coca y menta andina, plantas peruanas que en conjunto aumentan sus propiedades naturales adquiriendo tambi&eacute;n un agradable sabor.</p>\r\n\r\n<p>&iexcl;Libre de colorantes y preservantes!</p>', '[{\"texto1A\":\"Caja 25 filtrantes\",\"img1A\":\"\\/uploads\\/shares\\/industrial\\/deli4.png\",\"img2A\":null,\"img3A\":null}]', NULL, '[{\"txt1A\":\"01\",\"txt2A\":\"Relajante y refrescante natural.\"},{\"txt1A\":\"02\",\"txt2A\":\"Alivia el malestar estomacal (flatulencias)\"},{\"txt1A\":\"03\",\"txt2A\":\"Alivia el mal de altura.\"}]', 'Tenemos otros sabores', 4, 'es', '2019-11-22 01:21:08', '2020-06-06 00:47:11'),
(8, 'Mint and Coca Leaf Infusion', 'mint-and-coca-leaf-infusion', '<p>A pleasant combination of coca leaves and Andean mint, Peruvian plants that together increase their natural properties and also acquire a pleasant flavor.</p>\r\n\r\n<p>Free of colorants and preservatives!</p>', '[{\"texto1A\":\"BOX 25 FILTERS\",\"img1A\":\"\\/uploads\\/shares\\/industrial\\/deli4.png\",\"img2A\":null,\"img3A\":null}]', NULL, '[{\"txt1A\":\"01\",\"txt2A\":\"Natural relaxant and refreshing.\"},{\"txt1A\":\"02\",\"txt2A\":\"Relieves stomach discomfort (flatulence).\"},{\"txt1A\":\"03\",\"txt2A\":\"Relieves altitude sickness.\"}]', 'Other types of coca leaf products', 4, 'en', '2019-11-22 01:21:08', '2021-04-18 01:35:59'),
(9, 'Cocalyptuss', 'cocalyptuss', '<p>Mezcla de potentes plantas andinas, usadas tradicionalmente para combatir los problemas respiratorios.</p>\r\n\r\n<p>&iexcl;Libre de colorantes y preservantes!</p>', '[{\"texto1A\":\"Caja 25 filtrantes\",\"img1A\":\"\\/uploads\\/shares\\/industrial\\/deli5.png\",\"img2A\":null,\"img3A\":null}]', NULL, '[{\"txt1A\":\"01\",\"txt2A\":\"Alivia los s\\u00edntomas de la gripe y el resfr\\u00edo.\"},{\"txt1A\":\"02\",\"txt2A\":\"Previene el malestar estomacal.\"},{\"txt1A\":\"03\",\"txt2A\":\"Acci\\u00f3n carminativa.\"}]', 'Tenemos otros sabores', 5, 'es', '2019-11-22 01:24:03', '2020-06-09 03:59:03'),
(10, 'Coca Leaf Infusion with Eucalyptus and Mint', 'coca-leaf-infusion-with-eucalyptus-and-mint', '<p>Blend of potent Andean plants, traditionally used to combat respiratory problems.</p>\r\n\r\n<p>Free of dyes and preservatives!</p>', '[{\"texto1A\":\"BOX 25 FILTERS\",\"img1A\":\"\\/uploads\\/shares\\/industrial\\/deli5.png\",\"img2A\":null,\"img3A\":null}]', NULL, '[{\"txt1A\":\"01\",\"txt2A\":\"Relieves cold and flu symptoms.\"},{\"txt1A\":\"02\",\"txt2A\":\"Prevents stomach upset.\"},{\"txt1A\":\"03\",\"txt2A\":\"Carminative action.\"}]', 'Other types of coca leaf products', 5, 'en', '2019-11-22 01:24:03', '2021-04-18 01:45:44'),
(11, 'Kintu', 'kintu', '<p>Bebida alcoh&oacute;lica obtenida por destilaci&oacute;n de la hoja de coca, con 40&deg; GL alcoh&oacute;lico. Modo de Uso: Ideal como bajativo o cocteler&iacute;a.</p>', '[{\"texto1A\":\"Botella 500 ml\",\"img1A\":\"\\/uploads\\/shares\\/industrial\\/kintu1.png\",\"img2A\":null,\"img3A\":null},{\"texto1A\":\"Botella de 50 ml\",\"img1A\":\"\\/uploads\\/shares\\/industrial\\/listado-kintu1.png\",\"img2A\":null,\"img3A\":null}]', NULL, '[{\"txt1A\":\"01\",\"txt2A\":\"Ideal para una buena digesti\\u00f3n y sentirse bien.\"},{\"txt1A\":\"02\",\"txt2A\":\"Libre de colorantes y preservantes\"},{\"txt1A\":\"03\",\"txt2A\":\"Ideal como bajativo o cocteler\\u00eda.\"}]', 'Tenemos otros sabores', 6, 'es', '2019-11-22 01:26:47', '2021-03-16 21:47:19'),
(12, 'KINTU Coca Leaf Liquor', 'kintu-coca-leaf-liquor', '<p>Alcoholic beverage obtained by distillation of the coca leaf, with 40&deg; GL alcoholic. Directions for use: Ideal as a cocktail or cocktail mixer.</p>', '[{\"texto1A\":\"500 ML BOTTLE\",\"img1A\":\"\\/uploads\\/shares\\/industrial\\/kintu1.png\",\"img2A\":null,\"img3A\":null},{\"texto1A\":\"50 ML BOTTLE\",\"img1A\":\"\\/uploads\\/shares\\/industrial\\/listado-kintu1.png\",\"img2A\":null,\"img3A\":null}]', NULL, '[{\"txt1A\":\"01\",\"txt2A\":\"Ideal for a good digestion and feel good.\"},{\"txt1A\":\"02\",\"txt2A\":\"Free of colorants and preservatives.\"},{\"txt1A\":\"03\",\"txt2A\":\"Ideal as a snack or cocktail bar.\"}]', 'Other types of coca leaf products', 6, 'en', '2019-11-22 01:26:47', '2021-04-18 02:27:17'),
(15, 'Hoja de Coca natural en polvo', 'hoja-de-coca-natural-en-polvo', '<p>Complemento alimenticio ideal para enriquecer alimentos; rico en prote&iacute;nas, vitaminas B, C, hierro y calcio, por lo que puede ser usado como complemento nutritivo.</p>\r\n\r\n<p>Modo de Uso: Consumir de&nbsp;1 a 2 cucharaditas al d&iacute;a en jugos, batidos, frutos, sopas y postres.</p>', '[{\"texto1A\":\"Bolsa de 100 gramos\",\"img1A\":\"\\/uploads\\/shares\\/producto\\/harina.png\",\"img2A\":\"\\/uploads\\/shares\\/producto\\/harina.png\",\"img3A\":null},{\"texto1A\":\"Bolsa de 500 gramos\",\"img1A\":\"\\/uploads\\/shares\\/producto\\/harina.png\",\"img2A\":\"\\/uploads\\/shares\\/producto\\/harina.png\",\"img3A\":null},{\"texto1A\":\"Bolsa de 1 kilogramo\",\"img1A\":\"\\/uploads\\/shares\\/producto\\/harina.png\",\"img2A\":\"\\/uploads\\/shares\\/producto\\/harina.png\",\"img3A\":null}]', NULL, '[{\"txt1A\":\"01\",\"txt2A\":\"Reconstituyente y energizante.\"},{\"txt1A\":\"02\",\"txt2A\":\"Efecto anest\\u00e9sico y antidepresivo.\"},{\"txt1A\":\"03\",\"txt2A\":\"Fuente de vitaminas.\"},{\"txt1A\":\"04\",\"txt2A\":\"Coadyuvante en tratamientos de\\u00a0artritis reumatismo y osteoporosis.\"}]', 'Otros productos', 8, 'es', '2020-09-29 02:22:36', '2020-09-29 19:49:57'),
(16, 'Natural Coca leaf powder', 'natural-coca-leaf-powder', '<p>Ideal food supplement to enrich food; rich in protein, vitamins B, C, iron and calcium, so it can be used as a nutritional supplement.</p>\r\n\r\n<p>Directions: Consume 1 to 2 teaspoons per day in juices, smoothies, fruits, soups and desserts.</p>', '[{\"texto1A\":\"BAG OF 100 GRAMS\",\"img1A\":\"\\/uploads\\/shares\\/producto\\/harina.png\",\"img2A\":null,\"img3A\":null},{\"texto1A\":\"BAG OF 500 GRAMS\",\"img1A\":\"\\/uploads\\/shares\\/producto\\/harina.png\",\"img2A\":null,\"img3A\":null},{\"texto1A\":\"1 KILOGRAM BAG\",\"img1A\":\"\\/uploads\\/shares\\/producto\\/harina.png\",\"img2A\":null,\"img3A\":null}]', NULL, '[{\"txt1A\":\"01\",\"txt2A\":\"Restorative and energizing.\"},{\"txt1A\":\"02\",\"txt2A\":\"Anesthetic and antidepressant effect\"},{\"txt1A\":\"03\",\"txt2A\":\"Source of vitamins.\"},{\"txt1A\":\"04\",\"txt2A\":\"Coadjuvant in the treatment of arthritis, rheumatism and osteoporosis.\"}]', 'Other coca leaf products', 8, 'en', '2020-09-29 02:22:36', '2021-04-18 02:28:46'),
(19, 'Concentrado de Hoja de Coca', 'concentrado-de-hoja-de-coca', '<p>Extracto l&iacute;quido de Hoja de Coca para uso en la industria alimentaria, producto que conserva&nbsp;las bondades de esta hoja milenaria como antioxidantes, compuestos&nbsp; arom&aacute;ticos, vitaminas y minerales. Nivel de alcaloides no detectable</p>\r\n\r\n<p>Es ideal para su uso en la industria alimentaria, para saborizar bebidas energizantes, jugos, concentrados y m&aacute;s.</p>', '[{\"texto1A\":\"20 litros\",\"img1A\":\"\\/uploads\\/shares\\/bidon1.png\",\"img2A\":null,\"img3A\":null}]', NULL, '[{\"txt1A\":\"01\",\"txt2A\":\"Antioxidante y energizante\"},{\"txt1A\":\"02\",\"txt2A\":\"Regulador de metabolismo\"},{\"txt1A\":\"03\",\"txt2A\":\"Resaltador del sabor\"},{\"txt1A\":\"04\",\"txt2A\":\"Fuente de vitaminas\"}]', 'Extracto Líquido de Coca', 10, 'es', '2021-03-15 20:56:09', '2021-03-17 23:07:02'),
(20, 'Coca Leaf Concentrate', 'coca-leaf-concentrate', '<p>Coca leaf liquid extract for use in the food industry, a product that preserves the benefits of this ancient leaf as antioxidants, aromatic compounds, vitamins and minerals. Non-detectable alkaloid level.</p>\r\n\r\n<p>It is ideal for use in the food industry, to flavor energy drinks, juices, concentrates and more.</p>', '[{\"texto1A\":\"20 LITERS\",\"img1A\":\"\\/uploads\\/shares\\/Coca_Leaf_Concentrate.png\",\"img2A\":null,\"img3A\":null}]', NULL, '[{\"txt1A\":\"01\",\"txt2A\":\"Antioxidant and energizing\"},{\"txt1A\":\"02\",\"txt2A\":\"Metabolism regulator\"},{\"txt1A\":\"03\",\"txt2A\":\"Flavor Highlighter\"}]', 'Other types of coca leaf products', 10, 'en', '2021-03-15 20:56:09', '2021-04-18 02:29:48'),
(21, 'Hoja de Coca Micropulverizada', 'hoja-de-coca-micropulverizada', '<p>Complemento alimenticio y nutritivo ideal para enriquecer alimentos en prote&iacute;nas, vitaminas B, C, hierro, fosforo y&nbsp;calcio, por lo que puede ser usado como insumo industrial en procesos de producci&oacute;n para las industrias de alimentos, bebidas, ganaderas, acu&iacute;colas y pasteler&iacute;a.</p>\r\n\r\n<p>&nbsp;</p>', '[{\"texto1A\":\"5 kilogramos\",\"img1A\":\"\\/uploads\\/shares\\/micro_carrito.png\",\"img2A\":null,\"img3A\":null}]', NULL, '[{\"txt1A\":\"01\",\"txt2A\":\"Reconstituyente y energizante\"},{\"txt1A\":\"02\",\"txt2A\":\"Efecto anest\\u00e9sico y antidepresivo\"},{\"txt1A\":\"03\",\"txt2A\":\"Fuente de vitaminas\"},{\"txt1A\":\"04\",\"txt2A\":\"Coadyuvante en tratamientos de\\u00a0artritis reumatismo y osteoporosis\"}]', 'Extracto Líquido de Coca', 11, 'es', '2021-03-15 21:36:28', '2021-03-20 02:07:49'),
(22, 'Micropulverized Coca Leaf', 'micropulverized-coca-leaf', '<p>Ideal food and nutritional supplement to enrich food with proteins, vitamins B, C, iron, phosphorus and calcium, so it can be used as an industrial input in production processes for the food, beverage, livestock, aquaculture and bakery industries.</p>\r\n\r\n<p>&nbsp;</p>', '[{\"texto1A\":\"5 KILOGRAMS\",\"img1A\":\"\\/uploads\\/shares\\/industrial\\/Micropulverized_Coca_Leaf.png\",\"img2A\":null,\"img3A\":null}]', NULL, '[{\"txt1A\":\"01\",\"txt2A\":\"Restorative and energizing.\"},{\"txt1A\":\"02\",\"txt2A\":\"Anesthetic and antidepressant effect.\"},{\"txt1A\":\"03\",\"txt2A\":\"Source of vitamins.\"},{\"txt1A\":\"04\",\"txt2A\":\"Coadjuvant in the treatment of arthritis, rheumatism and osteoporosis.\"}]', 'Other types of coca leaf products', 11, 'en', '2021-03-15 21:36:28', '2021-04-18 02:30:24'),
(25, 'Polvo Atomizado de hoja de coca', 'polvo-atomizado-de-hoja-de-coca', '<p>Extracto en polvo de Hoja de Coca, 100% soluble, libre de gluten y niveles de alcaloides no detectables, conserva las principales propiedades de nuestra milenaria hoja.</p>\r\n\r\n<p>Usos:</p>\r\n\r\n<p>Complemento alimenticio:&nbsp;1 a 2 cucharaditas al d&iacute;a en jugos, batidos, frutos, sopas, postres o como bebida instant&aacute;nea disuelto en agua fr&iacute;a o caliente.</p>\r\n\r\n<p>Insumo industrial:&nbsp;Ideal para la elaboraci&oacute;n de alimentos, bebidas o chocolates (disminuyendo el amargor del cacao) y otros productos.</p>', '[{\"texto1A\":\"5 kilogramos\",\"img1A\":\"\\/uploads\\/shares\\/1616187312atomizado_carrito.png\",\"img2A\":null,\"img3A\":null}]', NULL, '[{\"txt1A\":\"01\",\"txt2A\":\"Antioxidante y energizante\"},{\"txt1A\":\"02\",\"txt2A\":\"Saborizante\"},{\"txt1A\":\"03\",\"txt2A\":\"Fuente de vitaminas\"},{\"txt1A\":\"04\",\"txt2A\":\"Disminuye\\u00a0el amargor del cacao\"}]', 'Extracto Líquido de Coca', 13, 'es', '2021-03-15 22:22:28', '2021-03-20 01:56:02'),
(26, 'Atomized coca leaf powder', 'atomized-coca-leaf-powder', '<p>Coca Leaf powder extract, 100% soluble, free of gluten and undetectable alkaloid levels, preserves the main properties of our millenary leaf.</p>\r\n\r\n<p>Uses:</p>\r\n\r\n<p>Food supplement: 1 to 2 teaspoons a day in juices, smoothies, fruits, soups, desserts or as an instant drink dissolved in cold or hot water.</p>\r\n\r\n<p>Industrial input: Ideal for the elaboration of food, beverages or chocolates (reducing the bitterness of cocoa) and other products.</p>', '[{\"texto1A\":\"5 KILOGRAMS\",\"img1A\":\"\\/uploads\\/shares\\/Coca_Leaf_atomized_powder.png\",\"img2A\":null,\"img3A\":null}]', NULL, '[{\"txt1A\":\"01\",\"txt2A\":\"Antioxidant and energizing.\"},{\"txt1A\":\"02\",\"txt2A\":\"Flavoring.\"},{\"txt1A\":\"03\",\"txt2A\":\"Source of vitamins.\"},{\"txt1A\":\"04\",\"txt2A\":\"Reduces cocoa bitterness.\"}]', 'Other types of coca leaf products', 13, 'en', '2021-03-15 22:22:28', '2021-04-18 02:30:48'),
(27, 'Hoja de Coca Picada', 'hoja-de-coca-picada', '<p>La Hoja de Coca es una tradici&oacute;n ancestral con amplio uso en la medicina tradicional por su contenido de vitaminas, antioxidantes y sus 14 alcaloides que contribuyen a su acci&oacute;n ben&eacute;fica para la salud y bienestar, brindando beneficios y propiedades,&nbsp;ideal para la elaboraci&oacute;n de filtrantes.</p>', '[{\"texto1A\":\"5 kilogramos\",\"img1A\":\"\\/uploads\\/shares\\/picada_carrito.png\",\"img2A\":null,\"img3A\":null}]', NULL, '[{\"txt1A\":\"01\",\"txt2A\":\"Antioxidante y energizante\"},{\"txt1A\":\"02\",\"txt2A\":\"Regulador de metabolismo\"},{\"txt1A\":\"03\",\"txt2A\":\"Previene el mal de altura\"}]', 'Extracto Líquido de Coca', 14, 'es', '2021-03-15 22:32:32', '2021-03-20 01:44:24'),
(28, 'Chopped Coca Leaf', 'chopped-coca-leaf', '<p>Coca leaf is an ancestral tradition with wide use in traditional medicine for its vitamin content, antioxidants and its 14 alkaloids that contribute to its beneficial action for health and well-being, providing benefits and properties, ideal for the elaboration of filtering products.</p>', '[{\"texto1A\":\"5 KILOGRAMS\",\"img1A\":\"\\/uploads\\/shares\\/Chopped_Coca_Leaf.png\",\"img2A\":null,\"img3A\":null}]', NULL, '[{\"txt1A\":\"01\",\"txt2A\":\"Antioxidant and energizing.\"},{\"txt1A\":\"02\",\"txt2A\":\"Metabolism regulator.\"},{\"txt1A\":\"03\",\"txt2A\":\"Prevents altitude sickness.\"}]', 'Other types of coca leaf products', 14, 'en', '2021-03-15 22:32:32', '2021-04-18 02:31:06');

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
(3, 'RRHH', 'rrhh', NULL, '2020-06-04 04:29:53', '2020-06-04 04:30:23', '{\"info\":0,\"banner\":0,\"home\":0,\"sede\":0,\"nosotros\":0,\"tradicional\":0,\"industrial\":0,\"gestion\":0,\"bolsas\":1,\"contactos\":0,\"selectores\":0}'),
(4, 'INFO_GESTION', 'info-gestion', NULL, '2020-09-07 21:59:17', '2021-01-28 22:53:32', '{\"info\":0,\"banner\":0,\"home\":0,\"sede\":0,\"nosotros\":0,\"tradicional\":0,\"industrial\":0,\"gestion\":1,\"bolsas\":0,\"contactos\":0,\"selectores\":0}'),
(5, 'BOLSAS', 'bolsas', NULL, '2020-09-07 22:00:47', '2020-09-07 22:01:31', '{\"info\":0,\"banner\":0,\"home\":0,\"sede\":0,\"nosotros\":0,\"tradicional\":0,\"industrial\":0,\"gestion\":0,\"bolsas\":1,\"contactos\":0,\"selectores\":0}'),
(6, 'INDUSTRIAL', 'industrial', NULL, '2020-09-07 22:01:21', '2021-01-06 02:09:46', '{\"info\":0,\"banner\":0,\"home\":0,\"sede\":0,\"nosotros\":0,\"tradicional\":0,\"industrial\":1,\"gestion\":0,\"bolsas\":0,\"contactos\":1,\"selectores\":0}'),
(7, 'GCT', 'gct', NULL, '2021-01-15 23:46:21', '2021-01-15 23:46:32', '{\"info\":0,\"banner\":0,\"home\":0,\"sede\":0,\"nosotros\":0,\"tradicional\":1,\"industrial\":0,\"gestion\":0,\"bolsas\":0,\"contactos\":0,\"selectores\":0}');

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
(1, 'Junin', 'junin', '[{\"txt1A\":\"Sucursal Huancayo\",\"txt2A\":\"(Huancayo)\",\"txt3A\":\"Jr. Santiago Norero N\\u00ba 430 El Tambo\",\"txt4A\":\"(064) 253233 \\/ 954175041\",\"txt5A\":\"ventas@enaco.com.pe\",\"txt6A\":\"https:\\/\\/www.google.com\\/maps\\/place\\/12%C2%B003\'26.7%22S+75%C2%B012\'58.7%22W\\/@-12.0574083,-75.2184897,17z\\/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d-12.0574083!4d-75.216301?hl=es\"}]', NULL, '[{\"tx1A\":\"Unidad Operativa Aucayacu\",\"tx2A\":\"(Huancayo)\",\"tx3A\":\"Jr. Maria Parado de Bellido N\\u00b0 656\",\"tx4A\":\"(062) 488103\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Huanuco\",\"tx2A\":\"(Huancayo)\",\"tx3A\":\"Jr. Damaso Beraum 272\",\"tx4A\":\"(062) 511274 \\/ 962330358\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Monzon\",\"tx2A\":\"(Huancayo)\",\"tx3A\":\"Jr. Per\\u00fa S\\/N (50-1), Centro Poblado de Cachicoto\",\"tx4A\":\"062-564734 \\/ 980575101\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa San Ram\\u00f3n\",\"tx2A\":\"(Huancayo)\",\"tx3A\":\"Av. Juan Santos Atahualpa 302 Urb. Tambo el Sol\",\"tx4A\":\"(064) 331156 \\/ 989240386\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Tingo Mar\\u00eda\",\"tx2A\":\"(Huancayo)\",\"tx3A\":\"Av. 28 de Julio 332\",\"tx4A\":\"(062) 562235 \\/ (062) 562235\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Tarma\",\"tx2A\":\"(Junin - Tarma)\",\"tx3A\":\"Jr. Amazonas 1260\",\"tx4A\":\"989240386 \\/ (064) 321714\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Llochehua\",\"tx2A\":\"(Ayacucho-Llochehua)\",\"tx3A\":\"Jr. 28 de Julio S\\/N\",\"tx4A\":\"980575112\",\"tx5A\":null,\"tx6A\":null}]', 1, 'es', '2019-11-15 23:40:36', '2020-09-11 02:15:34'),
(2, 'Junin', 'junin', '[{\"txt1A\":\"Oficina de ventas y administraci\\u00f3n\",\"txt2A\":\"(Junin - Huancayo)\",\"txt3A\":\"Jr. Santiago Norero N\\u00ba 430 El Tambo\",\"txt4A\":\"954175041 \\/ (064) 253233\",\"txt5A\":\"ventas@enaco.com.pe\",\"txt6A\":\"prueba\"}]', '[{\"t1A\":\"Oficina de ventas y administraci\\u00f3n\",\"t2A\":\"(Junin - Huancayo)\",\"t3A\":\"Jr. Santiago Norero N\\u00ba 430 El Tambo\",\"t4A\":\"954175041 \\/ (064) 253233\",\"t5A\":\"ventas@enaco.com.pe\",\"t6A\":\"prueba\"}]', '[{\"tx1A\":\"Oficina de ventas y administraci\\u00f3n\",\"tx2A\":\"(Junin - Huancayo)\",\"tx3A\":\"Jr. Santiago Norero N\\u00ba 430 El Tambo\",\"tx4A\":\"954175041 \\/ (064) 253233\",\"tx5A\":\"ventas@enaco.com.pe\",\"tx6A\":\"prueba\"}]', 1, 'en', '2019-11-15 23:40:36', '2019-11-15 23:40:36'),
(3, 'Lima', 'lima', NULL, '[{\"t1A\":\"Oficina de Ventas y Administraci\\u00f3n\",\"t2A\":\"(Lima - San Miguel)\",\"t3A\":\"Av.Universitaria N\\u00ba602 Urb. Pando San Miguel\",\"t4A\":\"(01) 2637219 \\/ 989223593\",\"t5A\":\"ventas@enaco.com.pe\",\"t6A\":\"https:\\/\\/www.google.com\\/maps\\/place\\/12%C2%B005\'00.4%22S+77%C2%B004\'56.6%22W\\/@-12.0834536,-77.0845639,17z\\/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d-12.0834536!4d-77.0823752?hl=es\"},{\"t1A\":\"Oficina de Ventas - Hoja de coca\",\"t2A\":\"(Lima - Lima)\",\"t3A\":\"Jr. Puno N\\u00ba1823 \\u2013 Cercado\",\"t4A\":\"(01) 3281401 \\/ 989223561\",\"t5A\":null,\"t6A\":null},{\"t1A\":\"Directorio y Gerencia general\",\"t2A\":\"(Lima - Miraflores)\",\"t3A\":\"Av. Arequipa N\\u00ba 4528 \\u2013 Miraflores\",\"t4A\":\"(01) 65-84703 \\/ (01) 65-84704 \\/ 989223556\",\"t5A\":null,\"t6A\":\"https:\\/\\/www.google.com\\/maps\\/place\\/12%C2%B006\'39.1%22S+77%C2%B001\'50.3%22W\\/@-12.1108611,-77.0328276,17z\\/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d-12.1108709!4d-77.0306463?hl=es\"}]', NULL, 2, 'es', '2019-11-21 02:02:50', '2021-04-07 08:30:44'),
(4, 'Lima', 'lima', '[{\"txt1A\":\"Oficina de ventas y administraci\\u00f3n\",\"txt2A\":\"(Lima - San Miguel)\",\"txt3A\":\"Av.Universitaria N\\u00ba602 Urb. Pando San Miguel\",\"txt4A\":\"(01) 2637219\",\"txt5A\":\"ventas@enaco.com.pe\",\"txt6A\":\"prueba\"},{\"txt1A\":\"Planta de Producci\\u00f3n\",\"txt2A\":\"(Lima - Lima)\",\"txt3A\":\"Jr. Puno N\\u00ba1823 \\u2013 Cercado\",\"txt4A\":\"(01) 3281401\",\"txt5A\":null,\"txt6A\":\"prueba\"},{\"txt1A\":null,\"txt2A\":null,\"txt3A\":null,\"txt4A\":null,\"txt5A\":null,\"txt6A\":null}]', NULL, NULL, 2, 'en', '2019-11-21 02:02:50', '2019-11-21 02:02:50'),
(5, 'La Libertad', 'la-libertad', NULL, '[{\"t1A\":\"Agencia Trujillo\",\"t2A\":\"(Trujillo - Trujillo)\",\"t3A\":\"Jr. Los Berilio N\\u00b0 502 -404 Urb. Santa In\\u00e9s\",\"t4A\":\"(044) 208984 \\/ (044) 208984 \\/ (044) 208984\",\"t5A\":null,\"t6A\":\"https:\\/\\/www.google.com\\/maps\\/place\\/8%C2%B005\'55.6%22S+79%C2%B002\'21.4%22W\\/@-8.0987806,-79.0414572,17z\\/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d-8.0987806!4d-79.0392685?hl=es\"}]', '[{\"tx1A\":\"Unidad Operativa Callancas\",\"tx2A\":\"(La Libertad - Otusco)\",\"tx3A\":\"Barrio La Pampa de Callancas - Plaza de Armas\",\"tx4A\":\"980576351\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Celendin\",\"tx2A\":\"(Cajamarca - Celendin)\",\"tx3A\":\"Jr. Jos\\u00e9 G\\u00e1lvez N\\u00b0 1012\",\"tx4A\":\"(076) 555236 \\/ 980575801\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Chachapoyas\",\"tx2A\":\"(Amazonas - Chachapoyas)\",\"tx3A\":\"Jr. Chincha Alta N\\u00b0 672\",\"tx4A\":\"(041) 477238 \\/ 949140769\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Huamachuco\",\"tx2A\":\"(La Libertad - Sanchez Carri\\u00f3n)\",\"tx3A\":\"Calle Leoncio Prado N\\u00ba313\",\"tx4A\":\"(044) 441847 \\/ 980576092\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Rancho Grande\",\"tx2A\":\"(La Libertad - Gran Chimu)\",\"tx3A\":\"Calle Principal S\\/N (Comunitario)\",\"tx4A\":\"(044) 840029 \\/ 980576107 \\/\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Distrito Operativo Huaraz\",\"tx2A\":\"(Ancash - Independencia)\",\"tx3A\":\"Jr.Guzman Barron N\\u00ba 616 Dist.Independencia\",\"tx4A\":\"(043) 421161 \\/ 943749034\",\"tx5A\":null,\"tx6A\":null}]', 3, 'es', '2019-11-21 15:36:50', '2020-09-11 02:27:21'),
(6, 'La Libertad', 'la-libertad', NULL, '[{\"t1A\":\"Agencia Trujillo\",\"t2A\":\"(Trujillo - Trujillo)\",\"t3A\":\"Jr. Los Berilios N\\u00ba 502 Santa In\\u00e9s\",\"t4A\":\"(044) 208984 \\/ (044) 208984 \\/ (044) 208984\",\"t5A\":null,\"t6A\":\"prueba\"}]', '[{\"tx1A\":\"Unidad Operativa Callancas\",\"tx2A\":\"(La Libertad - Otusco)\",\"tx3A\":\"Plaza de Armas S\\/N\",\"tx4A\":\"980576351\",\"tx5A\":null,\"tx6A\":\"prueba\"},{\"tx1A\":\"Unidad Operativa Celendin\",\"tx2A\":\"(Cajamarca - Celendin)\",\"tx3A\":\"Jr. Miguel Grau N\\u00ba 505\",\"tx4A\":\"(076) 555236 \\/ 980575801\",\"tx5A\":null,\"tx6A\":\"prueba\"}]', 3, 'en', '2019-11-21 15:36:50', '2019-11-21 15:36:50'),
(7, 'Ayacucho', 'ayacucho', NULL, '[{\"t1A\":\"Agencia Ayacucho\",\"t2A\":\"(Ayacucho - Huamanga)\",\"t3A\":\"C.H. Jose Ortiz Vergara Mz. Q Lote 3\",\"t4A\":\"(066) 312213 \\/ 966358303\",\"t5A\":null,\"t6A\":\"https:\\/\\/www.google.com\\/maps\\/place\\/13%C2%B008\'26.3%22S+74%C2%B013\'39.9%22W\\/@-13.1406463,-74.2299359,17z\\/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d-13.1406463!4d-74.2277472?hl=es\"}]', '[{\"tx1A\":\"Unidad Operativa Huanta\",\"tx2A\":\"(Ayacucho - Huanta)\",\"tx3A\":\"Jr. Libertad N\\u00ba 422\",\"tx4A\":\"(066) 322292 \\/ 980574771\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa San Francisco\",\"tx2A\":\"(Cusco - Pichari)\",\"tx3A\":\"Av. La cultura N\\u00b0 877\",\"tx4A\":\"(066) 325087 \\/ 984108740\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Santa Rosa\",\"tx2A\":\"(Ayacucho - Santa Rosa)\",\"tx3A\":\"Jr. Mariscal C\\u00e1ceres S\\/N\",\"tx4A\":\"(066) 790830 \\/ 980574748\",\"tx5A\":null,\"tx6A\":null}]', 4, 'es', '2019-11-21 15:56:43', '2020-09-11 01:56:21'),
(8, 'Ayacucho', 'ayacucho', NULL, '[{\"t1A\":\"Agencia Ayacucho\",\"t2A\":\"(Ayacucho - Huamanga)\",\"t3A\":\"Jr. Salazar BondI N\\u00ba 202 Urb. Magisterial\",\"t4A\":\"(066) 312213 \\/ 966358303\",\"t5A\":null,\"t6A\":\"prueba\"}]', '[{\"tx1A\":\"Unidad Operativa Huanta\",\"tx2A\":\"(Ayacucho - Huanta)\",\"tx3A\":\"Jr. Libertad N\\u00ba 422\",\"tx4A\":\"(066) 322292 \\/ 980574771\",\"tx5A\":null,\"tx6A\":\"prueba\"},{\"tx1A\":\"Unidad Operativa San Francisco\",\"tx2A\":\"(Cusco - Pichari)\",\"tx3A\":\"Av. Huanta N\\u00ba 023-025\",\"tx4A\":\"(066) 325087 \\/ 984108740\",\"tx5A\":null,\"tx6A\":\"prueba\"},{\"tx1A\":\"Unidad Operativa Santa Rosa\",\"tx2A\":\"(Ayacucho - Santa Rosa)\",\"tx3A\":\"Jr. Mariscal C\\u00e1ceres S\\/N\",\"tx4A\":\"(066) 790830 \\/ 980574748\",\"tx5A\":null,\"tx6A\":\"prueba\"}]', 4, 'en', '2019-11-21 15:56:43', '2019-11-21 15:56:43'),
(9, 'Cusco', 'cusco', NULL, '[{\"t1A\":\"Agencia Cusco\",\"t2A\":\"(Cusco - San Sebastian)\",\"t3A\":\"Av. Las flores N\\u00ba103, Distr. San Sebastian, Dpto Cusco\",\"t4A\":\"(084) 582013 \\/ 984108714\",\"t5A\":null,\"t6A\":\"https:\\/\\/www.google.com\\/maps\\/search\\/Enaco+S.A.\\/@-13.5265467,-71.9584156,13.19z?hl=es\"}]', '[{\"tx1A\":\"Unidad Operativa Andahuaylas\",\"tx2A\":\"(Apurimac - Andahuaylas)\",\"tx3A\":\"Av. Per\\u00fa N\\u00ba489\",\"tx4A\":\"(084) 422668 \\/ 956750623\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Kos\\u00f1ipata\",\"tx2A\":\"(Cusco - Pilcopata)\",\"tx3A\":\"Av. Antonio Iwaki- calle Enamorados S\\/N\",\"tx4A\":null,\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Santo Tom\\u00e1s\",\"tx2A\":\"(Cusco - Santo Tom\\u00e1s)\",\"tx3A\":\"Calle Manco Capac N\\u00ba102\",\"tx4A\":\"980574314\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Sicuani\",\"tx2A\":\"(Cusco - Sicuani)\",\"tx3A\":\"Jr. 28 de Julio N\\u00ba 824\",\"tx4A\":\"(084) 351890 \\/ 980573884\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Yauri\",\"tx2A\":\"(Cusco - Espinar)\",\"tx3A\":\"Calle Anta N\\u00b0 206, Distr. Espinar, Dpto Cusco\",\"tx4A\":\"984108730 \\/ (084) 582013\",\"tx5A\":null,\"tx6A\":null}]', 5, 'es', '2019-11-21 16:08:07', '2020-09-11 02:04:16'),
(10, 'Cusco', 'cusco', NULL, '[{\"t1A\":\"Agencia Cusco\",\"t2A\":\"(Cusco - San Sebastian)\",\"t3A\":\"Av. Las flores N\\u00ba103, Distr. San Sebastian, Dpto Cusco\",\"t4A\":\"(084) 582013 \\/ 984108714\",\"t5A\":null,\"t6A\":\"prueba\"}]', '[{\"tx1A\":\"Unidad Operativa Andahuaylas\",\"tx2A\":\"(Apurimac - Andahuaylas)\",\"tx3A\":\"Av. Per\\u00fa N\\u00ba489\",\"tx4A\":\"(084) 422668 \\/ 956750623\",\"tx5A\":null,\"tx6A\":\"prueba\"},{\"tx1A\":\"Unidad Operativa Kos\\u00f1ipata\",\"tx2A\":\"(Cusco - Pilcopata)\",\"tx3A\":\"Av. Antonio Iwaki- calle Enamorados S\\/N\",\"tx4A\":null,\"tx5A\":null,\"tx6A\":\"prueba\"},{\"tx1A\":\"Unidad Operativa Santo Tom\\u00e1s\",\"tx2A\":\"(Cusco - Santo Tom\\u00e1s)\",\"tx3A\":\"Calle Manco Capac N\\u00ba102\",\"tx4A\":\"980574314\",\"tx5A\":null,\"tx6A\":\"prueba\"},{\"tx1A\":\"Unidad Operativa Sicuani\",\"tx2A\":\"(Cusco - Sicuani)\",\"tx3A\":\"Jr. 28 de Julio N\\u00ba 824\",\"tx4A\":\"(084) 351890 \\/ 980573884\",\"tx5A\":null,\"tx6A\":\"prueba\"},{\"tx1A\":\"Unidad Operativa Yauri\",\"tx2A\":\"(Cusco - San Sebastian)\",\"tx3A\":\"Av. Las flores N\\u00ba103, Distr. San Sebastian, Dpto Cusco\",\"tx4A\":\"984108730 \\/ (084) 582013\",\"tx5A\":null,\"tx6A\":\"prueba\"}]', 5, 'en', '2019-11-21 16:08:07', '2019-11-21 16:08:07'),
(11, 'Puno', 'puno', NULL, '[{\"t1A\":\"Sucursal Juliaca\",\"t2A\":\"(Puno - Juliaca)\",\"t3A\":\"Hip\\u00f3lito Unanue N\\u00ba154, La Rinconada\",\"t4A\":\"(051) 321694 \\/ 951290501\",\"t5A\":null,\"t6A\":\"https:\\/\\/www.google.com\\/maps\\/place\\/15%C2%B030\'04.5%22S+70%C2%B007\'57.8%22W\\/@-15.5009728,-70.1341799,17.52z\\/data=!4m6!3m5!1s0!7e2!8m2!3d-15.5012363!4d-70.1327129\"}]', '[{\"tx1A\":\"Unidad Operativa Arequipa\",\"tx2A\":\"(Arequipa - Arequipa)\",\"tx3A\":\"Urb. Las Orquideas V-5-A Cercado\",\"tx4A\":\"(054) 281431 \\/ 959006826\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Ayaviri\",\"tx2A\":\"(Puno - Ayaviri)\",\"tx3A\":\"Arica N\\u00ba479\",\"tx4A\":\"(051) 563173 \\/ 980574619\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Azangaro\",\"tx2A\":\"(Puno - Azangaro)\",\"tx3A\":\"Jr. Cainaca N\\u00ba 131\",\"tx4A\":\"(051) 562047 \\/ 980574643\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Juli\",\"tx2A\":\"(Puno - Juli)\",\"tx3A\":\"Alfonso Ugarte S\\/N.\",\"tx4A\":\"(061) 554038 \\/ 980574690\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Palmera - Sandia\",\"tx2A\":\"(Puno - Alto Inambari)\",\"tx3A\":\"Av. Agricultura s\\/n, Barrio Union Central\",\"tx4A\":\"951290503\",\"tx5A\":null,\"tx6A\":null},{\"tx1A\":\"Unidad Operativa Puno\",\"tx2A\":\"(Puno - Puno)\",\"tx3A\":\"Av. El Sol N\\u00b0 1532, Distrito Puno\",\"tx4A\":\"(051) 366053 \\/ 980574726\",\"tx5A\":null,\"tx6A\":null}]', 6, 'es', '2019-11-21 16:38:37', '2020-09-11 02:09:01'),
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
(1, 0, 1, 1, '2021-02-03 01:56:13', '2021-03-06 02:07:38', '26-02-2021'),
(4, 1, 1, 2, '2021-03-04 01:47:16', '2021-03-17 20:46:51', '31-03-2021'),
(6, 1, 1, 2, '2021-03-16 05:34:54', '2021-03-17 20:47:07', '31-03-2021');

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
(1, 'VENTA DE BIENES SIN CÓDIGO PATRIMONIAL EN DESUSO DADOS DE BAJA.', '<p>VENTA DE&nbsp;BIENES SIN C&Oacute;DIGO PATRIMONIAL EN DESUSO DADOS DE BAJA.</p>', NULL, '/uploads/shares/Patrimonio/COMUNICADO.pdf', 1, 'es', '2021-02-03 01:59:49', '2021-02-03 01:59:49', 'bienes'),
(2, 'SELECCIÓN DEL CORREDOR DE SEGUROS PARA ENACO S.A.', '<p>SELECCI&Oacute;N DEL CORREDOR DE SEGUROS PARA ENACO S.A.</p>', NULL, '/uploads/shares/Servicios/bases_servicio_.pdf', 4, 'es', '2021-03-04 01:47:16', '2021-03-04 02:11:00', 'Servicio'),
(6, 'RESULTADO DE PROCESO DE SELECCION DE CORREDORES DE SEGURO', '<p>Resultado de Proceso de Slccion de Corredores de Seguro</p>', NULL, '/uploads/shares/Patrimonio/Resultdo_de_Procesos_Corredor.pdf', 6, 'es', '2021-03-16 05:34:54', '2021-03-16 05:34:54', 'Servicios'),
(7, 'RESULTADO DE PROCESO DE SELECCION DE CORREDORES DE SEGURO', '<p>Resultado de Proceso de Slccion de Corredores de Seguro</p>', NULL, '/uploads/shares/Patrimonio/Resultdo_de_Procesos_Corredor.pdf', 6, 'en', '2021-03-16 05:34:54', '2021-03-16 05:34:54', 'Servicios');

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
(2, 'With alkaloid', 1, 'en', '2019-11-15 03:24:38', '2021-04-18 00:49:07'),
(3, 'Sin alcaloide', 2, 'es', '2019-11-15 03:24:46', '2019-11-15 03:24:46'),
(4, 'No alkaloid', 2, 'en', '2019-11-15 03:24:46', '2021-04-18 00:49:31'),
(5, 'Hojas selectas', 3, 'es', '2020-06-18 04:18:25', '2020-06-18 04:18:25'),
(6, 'Selected leaves', 3, 'en', '2020-06-18 04:18:25', '2021-04-18 00:49:52');

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
(10, 0, 3, '2020-09-08 21:55:03', '2021-03-04 02:04:45', '13-09-2020'),
(13, 0, 1, '2020-09-18 21:57:43', '2020-09-24 05:16:22', '23-09-2020'),
(14, 0, 1, '2020-09-29 02:16:21', '2021-03-06 02:04:29', '07-10-2020'),
(15, 0, 5, '2020-09-30 02:12:28', '2021-03-04 02:04:46', '08-10-2020'),
(16, 0, 5, '2020-09-30 02:21:44', '2020-10-09 19:33:53', '08-10-2020'),
(17, 0, 1, '2020-10-12 10:00:09', '2021-01-30 02:43:53', '28-01-2021'),
(18, 0, 4, '2020-10-24 02:25:21', '2020-10-29 04:20:25', '28-10-2020'),
(19, 0, 6, '2020-11-04 03:15:44', '2020-11-13 02:23:41', '12-11-2020'),
(20, 0, 2, '2020-11-17 22:27:07', '2021-01-18 20:13:53', '21-01-2021'),
(21, 0, 2, '2020-11-17 22:28:14', '2021-01-15 23:33:23', '26-11-2020'),
(22, 0, 7, '2020-11-20 21:59:54', '2020-11-30 19:58:27', '29-11-2020'),
(23, 0, 1, '2020-12-01 02:54:00', '2021-01-30 02:44:02', '28-01-2021'),
(24, 0, 1, '2020-12-05 08:18:40', '2020-12-12 00:41:52', '10-12-2020'),
(25, 0, 2, '2020-12-05 08:22:10', '2020-12-14 19:32:16', '13-12-2020'),
(26, 0, 5, '2020-12-17 00:33:41', '2020-12-28 09:01:22', '26-12-2020'),
(27, 0, 2, '2020-12-23 22:17:07', '2021-01-05 02:17:20', '04-01-2021'),
(28, 0, 1, '2021-01-05 02:17:03', '2021-01-12 22:13:29', '11-01-2021'),
(29, 0, 3, '2021-03-09 21:59:02', '2021-03-16 19:55:44', '15-03-2021'),
(30, 0, 1, '2021-03-11 20:20:57', '2021-03-18 19:26:03', '17-03-2021'),
(31, 0, 6, '2021-03-11 20:21:52', '2021-03-18 19:26:04', '17-03-2021');

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
(15, 'Representante de Ventas - SUPLENCIA', '<p><strong><em>Unidad Operativa Huaraz</em></strong></p>', NULL, '/uploads/shares/RRHH/CE-REPRES-VENTAS-HUARAZ_SUP_04_08_2020.pdf', 10, 'es', '2020-09-08 21:55:03', '2020-09-08 22:03:07', 'FULL TIME'),
(16, 'Representante de Ventas - SUPLENCIA', '<p><strong><em>Unidad Operativa Huaraz</em></strong></p>', NULL, '/uploads/shares/RRHH/CE-REPRES-VENTAS-HUARAZ_SUP_04_08_2020.pdf', 10, 'en', '2020-09-08 21:55:03', '2020-09-08 21:55:03', 'FULL TIME'),
(22, 'Practicante - Contabilidad', '<p>Cusco</p>', NULL, '/uploads/shares/RRHH/CE_-_Practicante_-_Contabilidad_mod_18_09_2020.pdf', 13, 'es', '2020-09-18 21:57:43', '2020-09-18 21:57:43', 'Practicas'),
(23, 'Practicante - Contabilidad', '<p>Cusco</p>', NULL, '/uploads/shares/RRHH/CE_-_Practicante_-_Contabilidad_mod_18_09_2020.pdf', 13, 'en', '2020-09-18 21:57:43', '2020-09-18 21:57:43', 'Practicas'),
(24, 'Responsable de Unidad Operativa - Suplencia', '<p><strong>Unidad </strong><strong>Operativa JULI</strong></p>', NULL, '/uploads/shares/RRHH/CE-_RESP-UO-JULI_28_09_2020.pdf', 14, 'es', '2020-09-29 02:16:21', '2020-09-29 02:17:34', 'Suplencia'),
(25, 'Responsable de Unidad Operativa Juli - Suplencia', '<p><strong>Responsable de Unidad </strong><strong>Operativa - Suplencia</strong></p>', NULL, '/uploads/shares/RRHH/CE-_RESP-UO-JULI_28_09_2020.pdf', 14, 'en', '2020-09-29 02:16:21', '2020-09-29 02:16:21', 'Suplencia'),
(26, 'Auxiliar de Almacén', '<p><strong><em>Sucursal Juliaca</em></strong></p>', NULL, '/uploads/shares/RRHH/CE-_AUX-ALMA-_JULI_29_09_2020ii.pdf', 15, 'es', '2020-09-30 02:12:28', '2020-09-30 18:42:11', 'FULL TIME'),
(27, 'Auxiliar de Almacén', '<p><strong><em>Sucursal Juliaca</em></strong></p>', NULL, '/uploads/shares/RRHH/CE-_AUX-ALMA-_JULI_29_09_2020.pdf', 15, 'en', '2020-09-30 02:12:28', '2020-09-30 02:12:28', 'FULL TIME'),
(28, 'Representante de Fiscalización', '<p><strong><em>Sucursal Juliaca</em></strong></p>', NULL, '/uploads/shares/RRHH/CE-REP-FISC-JULI_29_09_2020ii.pdf', 16, 'es', '2020-09-30 02:21:44', '2020-09-30 18:42:53', 'FULL TIME'),
(29, 'Representante de Fiscalización', '<p><strong><em>Sucursal Juliaca</em></strong></p>', NULL, '/uploads/shares/RRHH/CE-REP-FISC-JULI_29_09_2020.pdf', 16, 'en', '2020-09-30 02:21:44', '2020-09-30 02:21:44', 'FULL TIME'),
(30, 'Asistente de Recursos Humanos', '<p><strong><em>Oficina </em></strong><strong><em>de Recursos Humanos</em></strong></p>', NULL, '/uploads/shares/RRHH/CONVOCATORIA_ASISTENTE_RRHH.pdf', 17, 'es', '2020-10-12 10:00:09', '2021-01-26 23:54:57', 'Suplencia'),
(31, 'Asistente de Recursos Humanos', '<p><strong><em>Oficina </em></strong><strong><em>de Recursos Humanos</em></strong></p>', NULL, '/uploads/shares/RRHH/CE-ASIST-RRHH-supl11_10_2020.pdf', 17, 'en', '2020-10-12 10:00:09', '2020-10-12 10:00:09', 'Suplencia'),
(32, 'Representante de Fiscalización AMPLIACION', '<p><strong><em>Sucursal Juliaca</em></strong></p>', NULL, '/uploads/shares/RRHH/CE-REP-FISC-JULI_29_09_2020iiAMPLIA.pdf', 18, 'es', '2020-10-24 02:25:21', '2020-10-24 02:26:33', 'FULL TIME'),
(33, 'Representante de Fiscalización AMPLIACION', '<p><strong><em>Sucursal Juliaca</em></strong></p>', NULL, '/uploads/shares/RRHH/1601472863CE-REP-FISC-JULI_29_09_2020.pdf', 18, 'en', '2020-10-24 02:25:21', '2020-10-24 02:25:21', 'FULL TIME'),
(34, 'Practicante', '<p>Sucursal Quillabamba</p>', NULL, '/uploads/shares/RRHH/C_E-Pract-Quill03_11_2020.pdf', 19, 'es', '2020-11-04 03:15:44', '2020-11-04 03:15:44', 'Practicas'),
(35, 'Practicante', '<p>Sucursal Quillabamba</p>', NULL, '/uploads/shares/RRHH/C_E-Pract-Quill03_11_2020.pdf', 19, 'en', '2020-11-04 03:15:44', '2020-11-04 03:15:44', 'Practicas'),
(36, 'Jefe de Oficina de Asesoría Jurídica', '<p>Lima</p>', NULL, '/uploads/shares/RRHH/CONVOCATORIA_ENACO-_ANALISTA_LEGAL_CONTRATACIONES_2021_21_01_2021.pdf', 20, 'es', '2020-11-17 22:27:07', '2021-01-18 20:13:53', 'FULL TIME'),
(37, 'Jefe de Oficina', '<p>Oficina de Asesor&iacute;a Jur&iacute;dica</p>', NULL, '/uploads/shares/RRHH/CE-_JEFOAJ-_17_11_2020.pdf', 20, 'en', '2020-11-17 22:27:07', '2020-11-17 22:27:07', 'FULL TIME'),
(38, 'Jefe de Oficina de Comercio Industrial', '<p>Lima</p>', NULL, '/uploads/shares/RRHH/CE_MOD-JEFEOCIND-23_11_2020.pdf', 21, 'es', '2020-11-17 22:28:14', '2020-11-23 21:02:59', 'FULL TIME'),
(39, 'Jefe de Oficina', '<p>Oficina&nbsp;de Comercio Industrial</p>', NULL, '/uploads/shares/RRHH/CE-JEFEOCIND-17_11_2020.pdf', 21, 'en', '2020-11-17 22:28:14', '2020-11-17 22:28:14', 'FULL TIME'),
(40, 'Supervisor de Operaciones Oficina de Comercio Industrial', '<p>Lima</p>', NULL, '/uploads/shares/RRHH/CE-SUP-OP-OCIND20_11_2020.pdf', 22, 'es', '2020-11-20 21:59:54', '2020-11-20 21:59:54', 'FULL TIME'),
(41, 'Supervisor de Operaciones Oficina de Comercio Industrial', '<p>Lima</p>', NULL, '/uploads/shares/RRHH/CE-SUP-OP-OCIND20_11_2020.pdf', 22, 'en', '2020-11-20 21:59:54', '2020-11-20 21:59:54', 'FULL TIME'),
(42, 'Analista Legal de Contrataciones', '<p>Oficina de Asesor&iacute;a Jur&iacute;dica</p>', NULL, '/uploads/shares/RRHH/CONVOCATORIA_ENACO-_ANALISTA_LEGAL_CONTRATACIONES.pdf', 23, 'es', '2020-12-01 02:54:00', '2021-01-26 23:53:37', 'FULL TIME'),
(43, 'Analista Legal de Contrataciones', '<p><strong><em>Oficina </em></strong><strong><em>de Asesor&iacute;a Jur&iacute;dica</em></strong></p>', NULL, '/uploads/shares/RRHH/CE-_ANAL-LEG-CONTRA30_11_2020.pdf', 23, 'en', '2020-12-01 02:54:00', '2020-12-01 02:54:00', 'FULL TIME'),
(44, 'Practicante – Oficina de Recursos Humanos', '<p><strong>Cusco</strong></p>', NULL, '/uploads/shares/RRHH/CE-Prac-RRHH04_12_2020.pdf', 24, 'es', '2020-12-05 08:18:40', '2020-12-05 08:18:40', 'Practicas'),
(45, 'Practicante – Oficina de Recursos Humanos', '<p><strong>Cusco</strong></p>', NULL, '/uploads/shares/RRHH/CE-Prac-RRHH04_12_2020.pdf', 24, 'en', '2020-12-05 08:18:40', '2020-12-05 08:18:40', 'Practicas'),
(46, 'Practicante - Informática', '<p>Lima</p>', NULL, '/uploads/shares/RRHH/CE-Prac-Infoma04_12_2020.pdf', 25, 'es', '2020-12-05 08:22:10', '2020-12-05 08:22:10', 'Practicas'),
(47, 'Practicante - Informática', '<p>Lima</p>', NULL, '/uploads/shares/RRHH/CE-Prac-Infoma04_12_2020.pdf', 25, 'en', '2020-12-05 08:22:10', '2020-12-05 08:22:10', 'Practicas'),
(48, 'JEFE DE SUCURSAL', '<p>JULIACA</p>', NULL, '/uploads/shares/RRHH/CE-JEF-SUC-JUL16_12_2020.pdf', 26, 'es', '2020-12-17 00:33:41', '2020-12-17 00:33:41', 'FULL TIME'),
(49, 'JEFE DE SUCURSAL', '<p>JULIACA</p>', NULL, '/uploads/shares/RRHH/CE-JEF-SUC-JUL16_12_2020.pdf', 26, 'en', '2020-12-17 00:33:41', '2020-12-17 00:33:41', 'FULL TIME'),
(50, 'Asistente Comercial - Oficina de Comercio Industrial', '<p>Lima</p>', NULL, '/uploads/shares/RRHH/CE-ASIST-COMER-OCIND23_12_2020.pdf', 27, 'es', '2020-12-23 22:17:07', '2020-12-23 22:17:07', 'FULL TIME'),
(51, 'Asistente Comercial - Oficina de Comercio Industrial', '<p>Lima</p>', NULL, '/uploads/shares/RRHH/CE-ASIST-COMER-OCIND23_12_2020.pdf', 27, 'en', '2020-12-23 22:17:07', '2020-12-23 22:17:07', 'FULL TIME'),
(52, 'Practicante - Oficina De Asesoría Jurídica', '<p>Sede Cusco</p>', NULL, '/uploads/shares/RRHH/CE-_Prac-_OAJ2021-04_01_2021.pdf', 28, 'es', '2021-01-05 02:17:03', '2021-01-05 02:17:03', 'Practicas'),
(53, 'Practicante - Oficina De Asesoría Jurídica', '<p>Sede Cusco</p>', NULL, '/uploads/shares/RRHH/CE-_Prac-_OAJ2021-04_01_2021.pdf', 28, 'en', '2021-01-05 02:17:03', '2021-01-05 02:17:03', 'Practicas'),
(54, 'Asistente Administrativo Contable - SUPLENCIA', '<p><strong><em>Agencia Trujillo&nbsp;</em></strong></p>', NULL, '/uploads/shares/RRHH/CE_ASIS__ADMIN__CONT_TRUJI_SUPL09_03_2021.pdf', 29, 'es', '2021-03-09 21:59:02', '2021-03-09 21:59:02', 'Suplencia'),
(55, 'Asistente Administrativo Contable - SUPLENCIA', '<p><strong><em>Agencia Trujillo&nbsp;</em></strong></p>', NULL, '/uploads/shares/RRHH/CE_ASIS__ADMIN__CONT_TRUJI_SUPL09_03_2021.pdf', 29, 'en', '2021-03-09 21:59:02', '2021-03-09 21:59:02', 'Suplencia'),
(56, 'Practicante - Informática', '<p><strong><em>Sede </em></strong><strong><em>Cusco</em></strong></p>', NULL, '/uploads/shares/RRHH/PP-_Practi_Infor_Cus11_03_2020.pdf', 30, 'es', '2021-03-11 20:20:57', '2021-03-11 20:20:57', 'Practicas'),
(57, 'Practicante - Informática', '<p><strong><em>Sede </em></strong><strong><em>Cusco</em></strong></p>', NULL, '/uploads/shares/RRHH/PP-_Practi_Infor_Cus11_03_2020.pdf', 30, 'en', '2021-03-11 20:20:57', '2021-03-11 20:20:57', 'Practicas'),
(58, 'Practicante - Informática', '<p><strong><em>Sucursal Quillabamba</em></strong></p>', NULL, '/uploads/shares/RRHH/PP-_Practi_Infor_QBBA11_03_2020.pdf', 31, 'es', '2021-03-11 20:21:52', '2021-03-11 20:21:52', 'Practicas'),
(59, 'Practicante - Informática', '<p><strong><em>Sucursal Quillabamba</em></strong></p>', NULL, '/uploads/shares/RRHH/PP-_Practi_Infor_QBBA11_03_2020.pdf', 31, 'en', '2021-03-11 20:21:52', '2021-03-11 20:21:52', 'Practicas');

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
(1, '/uploads/shares/tradicional/Campo-Tradicional3.jpg', '/uploads/shares/tradicional/1000x677-min.png', '/uploads/shares/tradicional/466x588-min.png', '/uploads/shares/tradicional/414x637.jpg', '2019-11-15 03:39:45', '2020-09-09 06:03:11');

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
(1, 'Tradicional', '<p>En ENACO contamos con una&nbsp;variedad de tipos de Hojas de Coca de los diferentes valles de acopio.</p>', 'herencia-milenaria-inca-unica-en-el-mundo', 'Herencia milenaria inca única en el mundo', '<p>La Actividad de Comercio Tradicional de ENACO est&aacute; relacionado a dos actividades principales tales como el acopio y comercializaci&oacute;n de la Hoja de Coca para su uso tradicional, masticado (chacchado), rituales, entre otros.</p>', '[{\"txt1A\":\"01\",\"txt2A\":\"Acopio\",\"txt3A\":\"Actividad que consiste en el acopio de la Hoja de Coca prove\\u00edda por productores debidamente autorizados como legales, que cultivan la Hoja de Coca, y son adquiridas por nuestras Sucursales, Agencias y Unidades Operativas a lo largo de nuestro territorio nacional.\"},{\"txt1A\":\"02\",\"txt2A\":\"Venta\",\"txt3A\":\"Actividad que consiste en la comercializaci\\u00f3n de Hoja de Coca a nivel internacional y nacional, a trav\\u00e9s de nuestras Sucursales, Agencias y Unidades Operativas a lo largo de nuestro territorio nacional.\"}]', 'Tipos de Hojas de Coca', '<p>ENACO&nbsp;cuenta con variedades de Hoja de Coca seg&uacute;n su procedencia y caracteristicas, entre las cuales tenemos:</p>\r\n\r\n<p>&nbsp;</p>', 1, 'es', '2019-11-15 03:39:45', '2020-09-30 01:33:03'),
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `banner_translations`
--
ALTER TABLE `banner_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `cargo_translations`
--
ALTER TABLE `cargo_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `contacto_global`
--
ALTER TABLE `contacto_global`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT de la tabla `contacto_sugerencia`
--
ALTER TABLE `contacto_sugerencia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT de la tabla `contacto_suscripcion`
--
ALTER TABLE `contacto_suscripcion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `departamento_translations`
--
ALTER TABLE `departamento_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `etiqueta_indus_translations`
--
ALTER TABLE `etiqueta_indus_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `gestion_nivel1_translations`
--
ALTER TABLE `gestion_nivel1_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `gestion_nivel2`
--
ALTER TABLE `gestion_nivel2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `gestion_nivel2_translations`
--
ALTER TABLE `gestion_nivel2_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `gestion_nivel3`
--
ALTER TABLE `gestion_nivel3`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `gestion_nivel3b`
--
ALTER TABLE `gestion_nivel3b`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `gestion_nivel3b_translations`
--
ALTER TABLE `gestion_nivel3b_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `gestion_nivel3_translations`
--
ALTER TABLE `gestion_nivel3_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `integrante_translations`
--
ALTER TABLE `integrante_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `niveles`
--
ALTER TABLE `niveles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `prod_indus`
--
ALTER TABLE `prod_indus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `prod_indus_relacionado`
--
ALTER TABLE `prod_indus_relacionado`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `prod_indus_translations`
--
ALTER TABLE `prod_indus_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `servicio_translations`
--
ALTER TABLE `servicio_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `trabajo_translations`
--
ALTER TABLE `trabajo_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

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
