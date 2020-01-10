

-- --------------------------------------------------------

--
-- Структура таблицы `city`
--

CREATE TABLE `city` (
  `city_id` int(10) NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `city`
--

INSERT INTO `city` (`city_id`, `name`) VALUES
(1, 'Англия'),
(2, 'Франция'),
(3, 'Германия'),
(4, 'Америка'),
(5, 'Россия'),
(6, 'Австралия'),
(7, 'Беларусь'),
(8, 'ОАЭ');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `product_id`, `img`) VALUES
(10, 39, '2798c71bf6d9bd61291932ee47a5f3f0.jpg'),
(11, 39, 'fc3a21db5e817a6aea25657aecc3bc23.jpg'),
(12, 39, 'd21482febde4431e2e5ae48114e6eb97.jpg'),
(13, 40, '28870c188dbd569b463d7399c2983183.jpg'),
(14, 40, 'e86038bc4a7d8a122d998f0da98d8cc8.png'),
(15, 41, '78751821b9241f187ee3a5883aa065b6.png'),
(16, 41, '7cf7c43a984f32292b5336a8d9c0407e.jpg'),
(17, 41, '1b74a1b82c2094c1a506b52fd2d764f2.jpg'),
(18, 41, 'eb317ec18ecb46b2a6caf584a37c3063.jpg'),
(19, 41, '2aaf36c8006bfdf99a1aa8250d415117.jpg'),
(20, 41, '5521e207c80b549c3fe0a963e5237db6.jpg'),
(21, 42, 'd84967e54d36c6e5a03eedfceecbcf1b.jpg'),
(22, 42, '22fac2760414919e59aea45bb7277d9c.jpg'),
(30, 43, 'a34d886d78b27edd1cd94b70f1c12daf.jpg'),
(37, 43, 'cb660b003ce25d5f23e32e93a9b00c0b.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `img`, `date`, `alias`, `img2`) VALUES
(1, 'Блог 1', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n', 'd4c66800f94278d36e1e87ed0ec98a3d.jpg', '2020-01-08', 'blog-1', NULL),
(2, 'Пост 3', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n', '67001e2e6b90a6cd28156579605fcd5e.jpg', '2020-01-08', 'post-3', ''),
(3, 'Товар 135', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n', '', '2020-01-08', 'tovar-135', '');

-- --------------------------------------------------------

--
-- Структура таблицы `price`
--

CREATE TABLE `price` (
  `price_id` int(10) NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `single_price` float NOT NULL DEFAULT 0,
  `title_price` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `price`
--

INSERT INTO `price` (`price_id`, `product_id`, `single_price`, `title_price`) VALUES
(21, 36, 656156000, '56156200'),
(22, 37, 5656150, '51651700'),
(23, 38, 15615700, '561652000'),
(24, 39, 1561, '651651'),
(25, 40, 45645600, '5456460'),
(26, 41, 651651, '65465'),
(27, 42, 6515620, '5165160'),
(28, 43, 651651, '651651');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `season_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `status` char(3) NOT NULL DEFAULT '1',
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'null',
  `hit` char(3) NOT NULL DEFAULT '0',
  `age` int(11) NOT NULL,
  `tour_period` varchar(40) NOT NULL,
  `content` text NOT NULL,
  `tour_price` float NOT NULL,
  `img2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `city_id`, `season_id`, `title`, `alias`, `status`, `keywords`, `description`, `img`, `hit`, `age`, `tour_period`, `content`, `tour_price`, `img2`) VALUES
(36, 4, 2, 'Товар 3', 'tovar-3', '1', '', '', '2a70ba8a7917ce0d1728f24dfe80f1f4.png', '1', 15, 'ывлдылаьдлд', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n', 1561, ''),
(37, 2, 3, 'Товар 1', 'tovar-1-37', '1', '', '', '6368347bb6eab31dbfaf5607158f8600.png', '1', 16, 'ыладьпдлвьл', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n', 5161, ''),
(38, 3, 2, 'Товар 4', 'tovar-4', '1', '', '', '0cf1b7d0b4969256be5ffff054d00f6e.jpg', '1', 15, 'ыьвлдьыпа', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n', 415, ''),
(39, 2, 2, 'Товар 1', 'tovar-1-39', '1', '', '', '265bbc8b587909106205ace92158c85b.jpg', '1', 16, '3 дня и 4 ночи', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n', 156165, ''),
(40, 3, 3, 'gjskkgsmflk', 'gjskkgsmflk', '1', '', '', '3f0a333e08abe19f5c4eb25886a3f50f.jpg', '0', 156, 'mrkglkm', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n', 5556460, ''),
(41, 3, 3, 'Товар 9', 'tovar-9', '1', '', '', '6d76bcf1b0734725298e90be931481c0.jpg', '0', 15, 'slgls;,,fd', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n', 1561, ''),
(42, 3, 4, 'Товар 10', 'tovar-10', '1', '', '', 'aefb57bb280fa88f477313e915652bbc.jpg', '0', 51, 'dsfklms', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n', 5161, ''),
(43, 1, 7, 'Товар 13', 'tovar-13', '1', '', '', 'fa516e67d6030f38c23be5d36f650abd.jpg', '1', 15, '3 дня и 4 ночи', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n', 156165, '657ddfa05b703051b986c868b42a9afd.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `seasons`
--

CREATE TABLE `seasons` (
  `season_id` int(10) NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `seasons`
--

INSERT INTO `seasons` (`season_id`, `name`) VALUES
(1, 'Январь'),
(2, 'Февраль'),
(3, 'Март'),
(4, 'Апрель'),
(5, 'Май'),
(6, 'Июнь'),
(7, 'Июль'),
(8, 'Август'),
(9, 'Сентябрь'),
(10, 'Октябрь'),
(11, 'Ноябрь'),
(12, 'Декабрь');

-- --------------------------------------------------------

--
-- Структура таблицы `tour_program_content`
--

CREATE TABLE `tour_program_content` (
  `id` int(10) NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `sub_title` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `role`) VALUES
(1, 'Alex', '6623434', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`price_id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`),
  ADD KEY `hit` (`hit`);

--
-- Индексы таблицы `seasons`
--
ALTER TABLE `seasons`
  ADD PRIMARY KEY (`season_id`);

--
-- Индексы таблицы `tour_program_content`
--
ALTER TABLE `tour_program_content`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `price`
--
ALTER TABLE `price`
  MODIFY `price_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT для таблицы `seasons`
--
ALTER TABLE `seasons`
  MODIFY `season_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `tour_program_content`
--
ALTER TABLE `tour_program_content`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

