--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(12, 'Lucas', 'lucaspassa@gmail.com', NULL, '$2y$10$a7aFlN1XKtUNd84c4.HX0envqVFvRKquW52YKJ2/aRuSKmwb1nImy', NULL, '2019-08-24 02:39:07', NULL, 1),
(17, 'Admin', 'admin@admin.com', NULL, '$2y$10$xv0EUF3vwTaxIJBhchJa9Oi5ysYCedDRwkwVF34rkZGreCRh3mZ0S', NULL, '2019-09-02 03:22:11', NULL, 1),
(18, 'User', 'user@user.com', NULL, '$2y$10$va7Lz3zkhdv1Pu9QjshaQ.fuGymFEseSR.VtRUIXXf0g/7HOHyFgy', NULL, '2019-09-02 03:24:34', NULL, 0),
(27, 'Andrea Rosales', 'andrearosalespsi@gmail.com', NULL, '$2y$10$.IppyzadSsayUHMKTKj6H.BA4ESHNzPvN86XVLLxRC99Ir.NhQrtq', NULL, '2019-09-25 20:10:28', NULL, 1),
(28, 'Maria Eugenia Aparicio', 'eugeapa0125@gmail.com', NULL, '$2y$10$RMPvBQOG3Y415bj5HLSfb.ZMFQNFV8viCW4EgMRrXy/ZrCTSHfg4i', NULL, '2019-10-11 22:24:55', NULL, 1);

--
-- Volcado de datos para la tabla `events`
--

INSERT INTO `events` (`id`, `name`, `description`, `address`, `date`, `time`, `review`, `created_at`) VALUES
(6, 'Navidad', 'Se festeja el nacimiento de Cristo', 'En el cielo todos', '2019-12-24', '21:00:00', 'Review con rename Foto 1 & Foto 2', '2019-09-20 16:42:50'),
(7, 'Año nuevo', 'Se festeja la venida del año que viene', 'En casa (hay fiesta)', '2019-12-31', '22:30:00', NULL, '2019-09-20 16:43:33'),
(9, 'Reyes', 'Festejando reyes con regalitos', 'En casa, todes invitades', '2020-01-06', '17:00:00', NULL, '2019-09-20 18:08:14'),
(10, 'Charla de prevención', 'Abierta a la comunidad', 'Bolsón', '2019-11-15', '20:30:00', NULL, '2019-09-25 17:18:44');

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(7, 'Protocolos e información'),
(8, 'Protocolo');

--
-- Volcado de datos para la tabla `documents`
--

INSERT INTO `documents` (`id`, `category_id`, `title`, `extension`, `review`, `created_at`) VALUES
(9, 9, 'Hola Holaaa', 'jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-10-07 14:32:06'),
(13, 12, 'May', 'jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-10-10 20:21:49'),
(14, 10, 'Plannin g con lucas', 'jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-10-11 20:30:41'),
(15, 11, 'Doc de prueba', 'jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-10-23 21:47:26'),
(16, 11, 'Doc prueba 2', 'jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-10-23 21:47:47'),
(17, 9, 'Pdf', 'pdf', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2019-10-24 18:16:15');
