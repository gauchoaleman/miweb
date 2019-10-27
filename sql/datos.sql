--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `send_mail`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(17, 'Adm', 'admin@admin.com', 0, NULL, '$2y$10$iXUKFz9rLX9GrU1yqB8Kb.36FMnIFKhuFFlRQoLgPT1aIZ8u1irB.', NULL, '2019-09-02 03:22:11', '2019-10-25 19:35:13', 1),
(18, 'User', 'user@user.com', 0, NULL, '$2y$10$va7Lz3zkhdv1Pu9QjshaQ.fuGymFEseSR.VtRUIXXf0g/7HOHyFgy', NULL, '2019-09-02 03:24:34', NULL, 0),
(27, 'Andrea Rosales', 'andrearosalespsi@gmail.com', 1, NULL, '$2y$10$.IppyzadSsayUHMKTKj6H.BA4ESHNzPvN86XVLLxRC99Ir.NhQrtq', NULL, '2019-09-25 20:10:28', NULL, 1),
(28, 'Maria Eugenia Aparicio', 'eugeapa0125@gmail.com', 0, NULL, '$2y$10$RMPvBQOG3Y415bj5HLSfb.ZMFQNFV8viCW4EgMRrXy/ZrCTSHfg4i', NULL, '2019-10-11 22:24:55', NULL, 0),
(29, 'Prueba sendmail', 'hola@holap.com', 1, NULL, '$2y$10$FwEWFNOPKxdEUYeMmzV0VOMX3emaufnQI57ulUPivNgTUuW0Mjlzy', NULL, '2019-10-27 18:11:05', NULL, 0),
(30, 'Sin sendmail', 'sin@sin.com', 0, NULL, '$2y$10$c9/eVD3GGzass/vGz.Su5u7WCSD/YyK4Ia60pW4hFxIuudq3LADly', NULL, '2019-10-27 18:48:34', NULL, 0),
(31, 'con sendmail', 'a@a.com', 1, NULL, '$2y$10$xCMb3DZMO0K4ITPQWc.k9e8S3BNl9OJ5xG7OzQqVuu3oDOWTIT7ZS', NULL, '2019-10-27 18:49:06', NULL, 0),
(32, 'sin sendmail', 'aaa@bbb.com', 0, NULL, '$2y$10$o7q8Mrj0Q9IGalc6Tino2ON83L9aBJjddAiSIYHLJTVQB3htRIdOi', NULL, '2019-10-27 18:57:00', NULL, 0);
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
