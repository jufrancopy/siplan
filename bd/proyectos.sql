-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-08-2018 a las 20:14:32
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrativo_servicios`
--

CREATE TABLE `administrativo_servicios` (
  `id` int(10) UNSIGNED NOT NULL,
  `item` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `costo` double(8,2) NOT NULL,
  `tipo` enum('util','mobiliario','tercerizado') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'tercerizado',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_tecnologicos`
--

CREATE TABLE `equipo_tecnologicos` (
  `id` int(10) UNSIGNED NOT NULL,
  `item` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `costo` double(8,2) NOT NULL,
  `tipo` enum('biomedico','informatico') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'biomedico',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infraestructuras`
--

CREATE TABLE `infraestructuras` (
  `id` int(10) UNSIGNED NOT NULL,
  `item` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `costo` double(8,2) NOT NULL,
  `dimension` double(8,2) NOT NULL,
  `ubicacion` double(8,2) NOT NULL,
  `tipo` enum('nueva','readecuacion','read_ampl') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'nueva',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamento_insumos`
--

CREATE TABLE `medicamento_insumos` (
  `id` int(10) UNSIGNED NOT NULL,
  `item` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `costo` double(8,2) NOT NULL,
  `tipo` enum('medicamento','insumo') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'medicamento',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_06_26_114721_create_talento_humanos_table', 1),
(4, '2018_06_26_114722_create_administrativo_servicios_table', 1),
(5, '2018_06_26_114907_create_medicamento_insumos_table', 1),
(6, '2018_06_26_114924_create_infraestructuras_table', 1),
(7, '2018_06_26_115016_create_equipo_tecnologicos_table', 1),
(8, '2018_06_26_115118_create_proyectos_table', 1),
(9, '2018_06_26_155243_create_proyecto_costos_table', 1),
(10, '2018_07_19_153550_create_departamentos_table', 1),
(11, '2018_07_30_185143_create_prog1s_table', 1),
(12, '2018_07_30_185301_create_prog2s_table', 1),
(13, '2018_07_30_185357_create_prog3s_table', 1),
(14, '2018_08_01_132528_create_prog4s_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alcance` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsables` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `entrada` datetime NOT NULL,
  `salida` datetime NOT NULL,
  `expediente_nro` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_costos`
--

CREATE TABLE `proyecto_costos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `idProyectos` int(10) UNSIGNED NOT NULL,
  `idTalentosHumanos` int(10) UNSIGNED NOT NULL,
  `idServiciosAdministrativos` int(10) UNSIGNED NOT NULL,
  `idMedicamentosInsumos` int(10) UNSIGNED NOT NULL,
  `idEquiposTecnologicos` int(10) UNSIGNED NOT NULL,
  `idInfraestructuras` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talento_humanos`
--

CREATE TABLE `talento_humanos` (
  `id` int(10) UNSIGNED NOT NULL,
  `item` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` enum('permanente','contratado') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'permanente',
  `costo` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Julio Franco', 'jucfra23@gmail.com', '$2y$10$JsMt5BYPCXlQ4m0JUz2Ot.UHwBcBg4/C86/8knE0gCYX5vpt3OJUS', NULL, '2018-08-06 17:14:38', '2018-08-06 17:14:38');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrativo_servicios`
--
ALTER TABLE `administrativo_servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipo_tecnologicos`
--
ALTER TABLE `equipo_tecnologicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `infraestructuras`
--
ALTER TABLE `infraestructuras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `medicamento_insumos`
--
ALTER TABLE `medicamento_insumos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyecto_costos`
--
ALTER TABLE `proyecto_costos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proyecto_costos_user_id_foreign` (`user_id`),
  ADD KEY `proyecto_costos_idproyectos_foreign` (`idProyectos`),
  ADD KEY `proyecto_costos_idtalentoshumanos_foreign` (`idTalentosHumanos`),
  ADD KEY `proyecto_costos_idserviciosadministrativos_foreign` (`idServiciosAdministrativos`),
  ADD KEY `proyecto_costos_idmedicamentosinsumos_foreign` (`idMedicamentosInsumos`),
  ADD KEY `proyecto_costos_idequipostecnologicos_foreign` (`idEquiposTecnologicos`),
  ADD KEY `proyecto_costos_idinfraestructuras_foreign` (`idInfraestructuras`);

--
-- Indices de la tabla `talento_humanos`
--
ALTER TABLE `talento_humanos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrativo_servicios`
--
ALTER TABLE `administrativo_servicios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `equipo_tecnologicos`
--
ALTER TABLE `equipo_tecnologicos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `infraestructuras`
--
ALTER TABLE `infraestructuras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `medicamento_insumos`
--
ALTER TABLE `medicamento_insumos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proyecto_costos`
--
ALTER TABLE `proyecto_costos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `talento_humanos`
--
ALTER TABLE `talento_humanos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `proyecto_costos`
--
ALTER TABLE `proyecto_costos`
  ADD CONSTRAINT `proyecto_costos_idequipostecnologicos_foreign` FOREIGN KEY (`idEquiposTecnologicos`) REFERENCES `equipo_tecnologicos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `proyecto_costos_idinfraestructuras_foreign` FOREIGN KEY (`idInfraestructuras`) REFERENCES `infraestructuras` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `proyecto_costos_idmedicamentosinsumos_foreign` FOREIGN KEY (`idMedicamentosInsumos`) REFERENCES `medicamento_insumos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `proyecto_costos_idproyectos_foreign` FOREIGN KEY (`idProyectos`) REFERENCES `proyectos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `proyecto_costos_idserviciosadministrativos_foreign` FOREIGN KEY (`idServiciosAdministrativos`) REFERENCES `administrativo_servicios` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `proyecto_costos_idtalentoshumanos_foreign` FOREIGN KEY (`idTalentosHumanos`) REFERENCES `talento_humanos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `proyecto_costos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
