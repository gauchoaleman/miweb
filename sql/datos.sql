--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `is_admin`) VALUES
(12, 'Lucas', 'lucaspassa@gmail.com', NULL, '$2y$10$a7aFlN1XKtUNd84c4.HX0envqVFvRKquW52YKJ2/aRuSKmwb1nImy', NULL, '2019-08-24 02:39:07', 0),
(17, 'Administrador', 'admin@admin.com', NULL, '$2y$10$xv0EUF3vwTaxIJBhchJa9Oi5ysYCedDRwkwVF34rkZGreCRh3mZ0S', NULL, '2019-09-02 03:22:11', 1),
(18, 'User', 'user@user.com', NULL, '$2y$10$va7Lz3zkhdv1Pu9QjshaQ.fuGymFEseSR.VtRUIXXf0g/7HOHyFgy', NULL, '2019-09-02 03:24:34', 0),
(20, 'testing', 'rona@rona.com', NULL, '$2y$10$o1hu9rbWr./G42aUE7ZIXO2PdrlcyW7mRUGcAwDy8oSIWVd4QYVd6', NULL, '2019-09-09 23:29:06', 1),
(21, '|isto', 'rona@rona.comm', NULL, '$2y$10$DBYpJbnibXVwT2BlvYKBs.KAHolRzkzw7btrJ2iZ4sDp9Z6KGIFwG', NULL, '2019-09-09 23:30:12', 0),
(24, 'prueb', 'pr@reg.com.ar', NULL, '$2y$10$pTiXeL9kwUM4RlnDfMCKiOWeRhaZQqMRRKYJ70McBrma9gCsACUtO', NULL, '2019-09-16 21:54:34', 0),
(25, 'Stefan Ronacher', 'a@b.com', NULL, '$2y$10$tAZm4Rzb2TMRti8QJSNareaUwtI5op8uKmftH2T2YNJiyws.d40BK', NULL, NULL, 1),
(26, 'prueba timezone', 'time@time.com', NULL, '$2y$10$7aMI1f8r10IpKkBRbEpiaOqUcZ19sPmbYqds5OyYOPzQFEDtVh1s2', NULL, NULL, 0),
(27, 'Andrea Rosales', 'andrearosalespsi@gmail.com', NULL, '$2y$10$.IppyzadSsayUHMKTKj6H.BA4ESHNzPvN86XVLLxRC99Ir.NhQrtq', NULL, '2019-09-25 20:10:28', 1),
(28, 'Stefan Ronacher', 'prueba@p.com', NULL, '$2y$10$2gEQZen6s7pOspRX6CT9dO.JqKR6Z/1sbQgjIbnmukXmBUiF08nli', NULL, NULL, 0);

--
-- Volcado de datos para la tabla `events`
--

INSERT INTO `events` (`id`, `name`, `description`, `address`, `date`, `time`, `created_at`) VALUES
(6, 'Navidad', 'Se festeja el nacimiento de Cristo', 'En el cielo todos', '2019-12-24', '20:00:00', '2019-09-20 16:42:50'),
(7, 'Año nuevo', 'Se festeja la venida del año que viene', 'En casa (hay fiesta)', '2019-12-31', '22:30:00', '2019-09-20 16:43:33'),
(9, 'Reyes', 'Festejando reyes con regalitos', 'En casa, todes invitades', '2020-01-06', '17:00:00', '2019-09-20 18:08:14'),
(10, 'Charla de prevención', 'Abierta a la comunidad', 'Bolsón', '2019-11-15', '20:30:00', '2019-09-25 17:18:44');

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(7, 'Protocolos e información'),
(8, 'Protocolo');
