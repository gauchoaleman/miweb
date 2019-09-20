--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(2, 'Rona', 'rona@rona.com', NULL, '$2y$10$i5Oyt4SvjT7lTIIui.hgsumr.p/6.H8aIFIh.BcMAFEbktRrRMY5C', NULL, '2019-06-08 00:33:18', '2019-06-08 00:33:18', 1),
(6, 'ComputerMan', 'stefan.ronacher.78@gmail.com', NULL, '$2y$10$7m/63pCQo.sGAnXIQGTACusUE8NYjqpuCmc1P6E3onSSIoPcfrFPW', NULL, '2019-06-13 01:04:48', '2019-06-13 01:04:48', 0),
(7, 'Nuevo', 'nuevo@nuevo.com', NULL, '$2y$10$p8agxYThEWzjP439pcWRa.lvbp20s0iVg/lzk6iz.0a3XErsi8R8m', NULL, '2019-06-28 01:42:00', '2019-06-28 01:42:00', 0),
(8, 'Tesina', 'tesina@gmail.com', NULL, '$2y$10$a0WShu2/fM9Dwajz8eWk2eBRPSKA67X0y0aHZ96J9NILjwpKV5oW2', NULL, '2019-07-02 01:48:22', '2019-07-02 01:48:22', 0),
(11, 'Tal para cual', 'tal@paracual.com', NULL, '$2y$10$cQwfbep0rVI7u.MeVGp8VOYFX0gFn5q9ANkm.90h.XlhXoY2qnMfy', '', '2019-08-22 01:49:31', '2019-08-22 01:49:31', 1),
(12, 'Lucas', 'lucaspassa@gmail.com', NULL, '$2y$10$a7aFlN1XKtUNd84c4.HX0envqVFvRKquW52YKJ2/aRuSKmwb1nImy', NULL, '2019-08-24 02:39:07', '2019-08-24 02:39:07', 1),
(13, 'prueba acceso', 'prueba_acceso@p.com', NULL, '$2y$10$NQ0oSQo4o0mVR7HrYFZzb.uNpw9tN5A8neiA4M5guZkr6A6KIKs1K', NULL, '2019-08-28 19:07:28', '2019-08-28 19:07:28', 0),
(15, 'prueba', 'pr@reg.com', NULL, '$2y$10$JveCI2QoiDenQw1a2AXY5.h/yUdKYRP3M9NTSzfxkFwkJ4tn9mEUa', NULL, '2019-08-30 19:19:06', '2019-08-30 19:19:06', 0),
(16, 'probando2', 'prueba@prueba.com', NULL, '$2y$10$wMLXV.WOkDptNBdksYyQXeia.dsqtAcNPRanBl95D62rOhg32jAaq', NULL, '2019-08-31 00:57:15', '2019-08-31 00:57:15', 1),
(17, 'Admin', 'admin@admin.com', NULL, '$2y$10$Y4WpqYtldMUbuHHGzxcpYe/esBb.Z1eDYzt8ACUlZokLqdYdgYN6q', NULL, '2019-09-02 03:22:11', '2019-09-02 03:22:11', 1),
(18, 'Userrr', 'user@user.com', NULL, '$2y$10$fQRritgLCGZAGxelMcrltelEy38yhvAWhZslNmgqk2geDSLcj7k1W', NULL, '2019-09-02 03:24:34', '2019-09-02 03:24:34', 0);

--
-- Volcado de datos para la tabla `events`
--

INSERT INTO `events` (`id`, `name`, `description`, `address`, `datetime`, `created_at`) VALUES
(6, 'Navidad', 'Se festeja el nacimiento de Cristo', 'En el cielo', '2019-12-24 22:00:00', '2019-09-20 16:42:50'),
(7, 'Año nuevo', 'Se festeja la venida del año que viene', 'En casa (hay fiesta)', '2019-12-31 23:00:00', '2019-09-20 16:43:33'),
(8, 'Reyes', 'Se festeja los reyes magos', 'En el cielo', '2020-01-06 20:00:00', '2019-09-20 16:44:21');
