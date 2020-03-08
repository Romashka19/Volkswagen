-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 08 2020 г., 16:30
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `volkswagen`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `wheels_id` bigint(20) UNSIGNED NOT NULL,
  `complectation_id` bigint(20) UNSIGNED NOT NULL,
  `color_id` bigint(20) UNSIGNED NOT NULL,
  `interior_id` bigint(20) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `cars`
--

INSERT INTO `cars` (`id`, `created_at`, `updated_at`, `wheels_id`, `complectation_id`, `color_id`, `interior_id`, `price`) VALUES
(4, '2020-03-07 00:58:16', '2020-03-07 00:58:16', 6, 10, 1, 2, 1100500),
(5, '2020-03-07 00:58:45', '2020-03-07 00:58:45', 5, 11, 5, 1, 1200000),
(6, '2020-03-07 00:59:13', '2020-03-07 00:59:13', 4, 13, 3, 1, 1800000),
(7, '2020-03-07 01:00:04', '2020-03-07 01:00:04', 6, 4, 1, 2, 1200000),
(8, '2020-03-07 01:00:29', '2020-03-07 01:00:29', 4, 6, 3, 4, 13000000),
(9, '2020-03-07 01:00:56', '2020-03-07 01:00:56', 4, 7, 4, 1, 1500000),
(10, '2020-03-07 01:04:29', '2020-03-07 01:04:29', 6, 14, 2, 2, 1100600);

-- --------------------------------------------------------

--
-- Структура таблицы `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `colors`
--

INSERT INTO `colors` (`id`, `created_at`, `updated_at`, `name`, `value`, `price`) VALUES
(1, NULL, NULL, 'Red', '123123', 435345),
(2, NULL, NULL, 'Blue', '123123wqerqwer', 435345),
(3, NULL, NULL, 'Black', '12315', 2500),
(4, NULL, NULL, 'Yellow', '464356345', 3000),
(5, NULL, NULL, 'Light gray', '12431243', 4000),
(6, NULL, NULL, 'Green', '12431243', 4000);

-- --------------------------------------------------------

--
-- Структура таблицы `complectations`
--

CREATE TABLE `complectations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `engine_id` bigint(20) UNSIGNED NOT NULL,
  `gearbox_id` bigint(20) UNSIGNED NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `complectations`
--

INSERT INTO `complectations` (`id`, `created_at`, `updated_at`, `name`, `engine_id`, `gearbox_id`, `model_id`) VALUES
(4, '2020-03-02 21:22:37', '2020-03-02 21:22:37', 'Standart(Polo)', 1, 2, 3),
(6, '2020-03-02 22:00:02', '2020-03-02 22:00:02', 'Advanced(Polo)', 2, 1, 3),
(7, '2020-03-02 22:14:40', '2020-03-02 22:14:40', 'Premium(Polo)', 3, 2, 3),
(10, '2020-03-07 00:26:32', '2020-03-07 00:26:32', 'Standart(Polo Sedan)', 2, 3, 1),
(11, '2020-03-07 00:28:27', '2020-03-07 00:28:27', 'AdvancedI(Polo Sedan)', 1, 2, 1),
(13, '2020-03-07 00:36:00', '2020-03-07 00:36:00', 'Premium(Polo Sedan)', 3, 2, 1),
(14, '2020-03-07 00:40:38', '2020-03-07 00:40:38', 'Standart(Golf)', 2, 4, 4),
(15, '2020-03-07 00:44:31', '2020-03-07 00:44:31', 'Advanced(Golf)', 3, 3, 4),
(16, '2020-03-07 00:45:15', '2020-03-07 00:45:15', 'Premium(Golf)', 4, 3, 4),
(17, '2020-03-07 00:50:11', '2020-03-07 00:50:11', 'Standart(T-Roc)', 3, 2, 5),
(18, '2020-03-07 00:54:12', '2020-03-07 00:54:12', 'Advanced(T-Roc)', 4, 2, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `engines`
--

CREATE TABLE `engines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `volume` int(11) NOT NULL,
  `power` int(11) NOT NULL,
  `fuel` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `engines`
--

INSERT INTO `engines` (`id`, `created_at`, `updated_at`, `name`, `volume`, `power`, `fuel`, `price`) VALUES
(1, NULL, NULL, '1.6 л MPI', 1598, 90, '92', 1200),
(2, NULL, NULL, '1.4 TSI', 1398, 125, '98', 2000),
(3, NULL, NULL, '1.8 TSI', 1798, 170, '98', 3000),
(4, NULL, NULL, 'V6 2.5 TSI', 2499, 240, '98', 4000),
(5, NULL, NULL, 'V6 3.0 TSFI', 2998, 350, '100', 5000),
(6, NULL, NULL, 'V8 4.0 TFSI', 4000, 400, '98', 8000);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `gearboxes`
--

CREATE TABLE `gearboxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gears_count` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `gearboxes`
--

INSERT INTO `gearboxes` (`id`, `created_at`, `updated_at`, `type`, `name`, `gears_count`, `price`) VALUES
(1, NULL, NULL, 'automatic', 'Culbaba', 7, 2200),
(2, NULL, NULL, 'machanic', '4-FE', 6, 1800),
(3, NULL, NULL, 'Automatic', '45-ka', 6, 4000),
(4, NULL, NULL, 'Mechanical', '45-km', 6, 3500);

-- --------------------------------------------------------

--
-- Структура таблицы `interiors`
--

CREATE TABLE `interiors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `material` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `interiors`
--

INSERT INTO `interiors` (`id`, `created_at`, `updated_at`, `name`, `material`, `color`, `price`) VALUES
(1, NULL, NULL, 'Wood', 'wood', 'white', 12313),
(2, NULL, NULL, 'Plastic', 'plastic', 'black', 12313),
(3, NULL, NULL, 'Plastic', 'Plastic', 'White', 400),
(4, NULL, NULL, 'Plastic', 'Plastic', 'Brown', 400);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(23, '2020_02_28_121253_create_cars_table', 2),
(24, '2020_02_27_135026_create_order_table', 3),
(61, '2014_10_12_000000_create_users_table', 4),
(62, '2014_10_12_100000_create_password_resets_table', 4),
(63, '2019_08_19_000000_create_failed_jobs_table', 4),
(64, '2020_02_27_125510_create_engines_table', 4),
(65, '2020_02_27_125804_create_gearboxes_table', 4),
(66, '2020_02_27_125932_create_models_table', 4),
(67, '2020_02_27_130052_create_complectations_table', 4),
(68, '2020_02_27_130259_create_wheels_table', 4),
(69, '2020_02_27_130445_create_colors_table', 4),
(70, '2020_02_27_132614_create_interiors_table', 4),
(71, '2020_03_01_123301_create_cars_table', 4),
(72, '2020_03_01_123427_create_order_table', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `models`
--

CREATE TABLE `models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `photo` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_first` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_second` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_customise` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_text` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_first` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_first` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_second` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text_second` char(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `models`
--

INSERT INTO `models` (`id`, `created_at`, `updated_at`, `name`, `price`, `photo`, `photo_first`, `photo_second`, `photo_customise`, `other_text`, `tagline`, `title_first`, `text_first`, `title_second`, `text_second`) VALUES
(1, NULL, NULL, 'Polo sedan', 1800200, 'img/polo.jpg', 'img/polo-back.png', 'img/polo-inside.png', 'https://a.d-cd.net/8rQAAgDYGeA-960.jpg', 'Нова місцевість рідко буваю звичною та зручною. Тим більше важливо, що на Вас там чекає. Завдяки своєму продуманому та ергономічному інтер\'єру Polo sedan робить вашу подорож максимально комфортною.\r\n', 'По новому стильний. Як завжди, надійний.', 'Обладнання і Безпека', 'В Polo sedan Ви завжди зможете почуватися розслаблено. З такою кількістю асистентів водієві залишається лише повністю сконцентруватися на дорозі. Будьте впевнені: він буде надихати Вас знову і знову.</p>\r\n', 'Комфорт', 'Неважливо, у наскільки далеку подорож Ви зібралися. У Polo sedan водій та його пасажири завжди будуть отримувати насолоду від обраного маршруту.</p>\r\n'),
(3, NULL, NULL, 'Polo.', 1746775, 'img/polo2.png', '', '', 'https://www.german-auto.com.ua/novini/povernennya-tiguan-limited-edition-teper-vzhe-z-dyzelnym-dvyhunom-2-0-tdi/@@poi.imageproxy/e9d8c204f21547afa9c02f3432fb6780/5acffaeb-8d5e-4e74-a0bf-27f47e51521b.png/news', '', 'Захист з кожного боку. Краса з кожного ракурсу.', '', '', '', ''),
(4, NULL, NULL, 'Golf', 1746775, 'img/golf.png', 'https://pictures.topspeed.com/IMG/crop/201910/the-2020-volkswagen--29_800x0w.jpg', 'https://lh5.googleusercontent.com/proxy/nVeRUpKnwKoN-v5_FTfsyuSu8jZJ0c3ir_OQGLCQMDgabh9m-Qd7EOEjC6Sm5ZwV7oqgihCdxaAYZFm56ZwaY6u_igt3YzC342MVmv_0Ohd_YRXV0ER2aA', 'https://img1.autospot.ru/images/volkswagen/golf_new/584652', '', 'Універсальний, як ніхто інший.', 'Інтер\'єр', 'З моменту свого дебюту Golf GTI нагадував ідеально підібрану за формою та розміром пару улюблених джинс. Із самого початку Volkswagen створив набір визначних особливостей', 'Силовий агрегат та ходова частина', 'Новий Golf GTI буде доступний з 245-сильним двигуном, об\'ємом 2.0 літри (EA888 evo4). Крутний момент зріс та складає 370 Нм. Чотирьохциліндровий двигун працює в парі з 6-ступеневою МКПП або опційною 7-ступеневою DSG (DQ381 DSG).'),
(5, NULL, NULL, 'Новий T-Roc.', 1431243, 'img/t-roc.png', 'https://i.infocar.ua/i/12/5336/1400x936.jpg', 'https://auto.ironhorse.ru/wp-content/uploads/2017/08/TRoc-int1.jpg', 'https://www.regentgarage.com/media/images/50352538/p2.3257cccab58e2bdb7944b823da8b9e79.png', 'Перше враження має значення.', 'Твій наступний крок.', 'Твій наступний крок', 'Як і личить першому в лінійці кросоверу T-Roc поєднує в собі практичність SUV та спритність хетчбека. Його дизайн підкреслює характер: висока якість, уважне ставлення до дрібниць та випромінює стиль. Народжений впевненим.', 'Обладнання та дизайн', 'Монотонність і T-Roc - абсолютно несумісні поняття. Для T-Roc можливе двоколірне лакофарбове покриття дозволяє не сумніватися, що це справді стильна комплектація. Для комплектації T-Roc Sport на вибір доступні варіанти Black і Flash Red*.'),
(6, NULL, NULL, 'Tiguan.', 1431243, 'img/tiguan.png', '', '', 'https://simferopol.masmotors.ru/colors/volkswagen-tiguan/4.png', '', 'Незвіданне чекає на Вас.', '', '', '', ''),
(7, NULL, NULL, 'Новий Touareg.', 12312123, 'img/touareg.png', '', '', 'https://simferopol.masmotors.ru/colors/volkswagen-touareg/1.png', '', 'Позашляховик якісно нового покоління.', '', '', '', ''),
(8, NULL, NULL, 'Arteon', 156767356, 'img/swipe2.jpg', '', '', 'https://c4d709dd302a2586107d-f8305d22c3db1fdd6f8607b49e47a10c.ssl.cf1.rackcdn.com/stock-images/daed04a2aa5e6aa763e99a94276eba3a.png', '', 'Купе нового покоління.', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `car_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `address` char(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`id`, `created_at`, `updated_at`, `car_id`, `user_id`, `address`) VALUES
(4, '2020-03-07 01:05:55', '2020-03-07 01:05:55', 4, 6, 'Privilna 1-9');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `phone`, `access`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'Dani4ka TEst', 'qwe@qwe.qwe', NULL, '123', 'admin', '$2y$10$wKYreunMoEq4PAHzAW.souJV9ju/dZQJ6s4ObNKsxm2EjqgwwSRyW', NULL, '2020-03-06 22:09:07', '2020-03-06 22:09:07'),
(7, 'Andrii', 'andr@mail.ru', NULL, '123', 'user', '$2y$10$iXXdcZNj8bnlwgI.Wh5wpu4Aa.Rlq7x7O9ezeV/JHVxvjp6VZmDAy', NULL, '2020-03-06 22:19:21', '2020-03-06 22:19:21'),
(8, 'dani4ka', '228@gmail.com', NULL, '123', 'user', '$2y$10$RFWhiCNHUZi7L0/cD9GFDORCbsl.UfYD86VlrvLqGPSFx/2V.ebEi', NULL, '2020-03-08 11:23:36', '2020-03-08 11:23:36');

-- --------------------------------------------------------

--
-- Структура таблицы `wheels`
--

CREATE TABLE `wheels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `radius` int(11) NOT NULL,
  `photo` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `wheels`
--

INSERT INTO `wheels` (`id`, `created_at`, `updated_at`, `name`, `radius`, `photo`, `price`) VALUES
(1, NULL, NULL, 'Spin(Custom)', 27, '', 500),
(2, NULL, NULL, 'Dollar(Custom)', 15, '', 4000),
(3, NULL, NULL, 'R-line', 22, '', 2500),
(4, NULL, NULL, 'GTI-line', 20, '', 2200),
(5, NULL, NULL, 'Premium', 19, '', 3000),
(6, NULL, NULL, 'Standart', 17, '', 1500);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `complectations`
--
ALTER TABLE `complectations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `engines`
--
ALTER TABLE `engines`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gearboxes`
--
ALTER TABLE `gearboxes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `interiors`
--
ALTER TABLE `interiors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `wheels`
--
ALTER TABLE `wheels`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `complectations`
--
ALTER TABLE `complectations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `engines`
--
ALTER TABLE `engines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `gearboxes`
--
ALTER TABLE `gearboxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `interiors`
--
ALTER TABLE `interiors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT для таблицы `models`
--
ALTER TABLE `models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `wheels`
--
ALTER TABLE `wheels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
