-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 26 2024 г., 11:20
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `SH`
--

-- --------------------------------------------------------

--
-- Структура таблицы `banner`
--

CREATE TABLE `banner` (
  `id` int UNSIGNED NOT NULL,
  `heading` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `old_heading` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `background` varchar(255) NOT NULL,
  `old_background` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `page` varchar(255) NOT NULL,
  `old_page` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `banner`
--

INSERT INTO `banner` (`id`, `heading`, `old_heading`, `background`, `old_background`, `page`, `old_page`, `created_at`, `updated_at`) VALUES
(1, 'SHREE RECORDS', 'SHREE RECORDS1', 'Travis_scott.mp4', 'Travis_scott.mp4', 'main', 'main', NULL, '2024-01-22 11:20:24'),
(2, 'EVENTS', '', 'slide-1.jpg', '0', 'events', '', NULL, '2024-01-18 13:36:23'),
(3, 'CONTACT', '', '1633809799_109-p-domashnyaya-studiya-zvukozapisi-foto-123_1.png', '0', 'contact', '', NULL, '2024-01-18 13:59:51'),
(4, 'LABEL', '', 'Travis_scott.mp4', '0', 'label', '', NULL, NULL),
(5, 'OUR PRECIOUS', '', 'slide-1.jpg', '0', 'services', '', NULL, NULL),
(6, 'OUR PRECIOUS', '', '1f0a764b0324125b6d91de4e84b6eea5_1.png', '0', 'studio_1', '', NULL, NULL),
(7, 'OUR TEAM', '', 'XXL_1.png', '0', 'studio_2', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `change_log`
--

CREATE TABLE `change_log` (
  `id` int NOT NULL,
  `name` varchar(2555) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `table` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `change_log`
--

INSERT INTO `change_log` (`id`, `name`, `table`, `datetime`) VALUES
(127, '<tr class=\"flex gap-5\"><td>NAME</td><td>321</td><td> => </td><td>123</td></tr>\n            <tr class=\"flex gap-5\"><td>E-MAIL</td><td>321</td><td> => </td><td>123@MAIL</td></tr>\n            <tr class=\"flex gap-5\"><td>ADMIN</td><td>1</td><td> => </td><td>0</td></tr>', 'USER - EDIT', '2024-01-21 19:05:56'),
(128, '<tr class=\"flex gap-5\"><td>NAME</td><td>123</td></tr>\n            <tr class=\"flex gap-5\"><td>E-MAIL</td><td>123@MAIL</td></tr>\n            <tr class=\"flex gap-5\"><td>ADMIN</td><td>0</td></tr>', 'USERS - DELETE', '2024-01-21 19:05:59'),
(129, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">NAME</td><td>-</td><td class=\"break-normal text-balance\">123</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">ICON</td><td>-</td><td class=\"break-all text-balance\">123</td></tr>', 'SOCIAL - CREATE', '2024-01-21 19:06:04'),
(130, '<tr class=\"flex gap-5\"><td>NAME</td><td>123</td><td> => </td><td>321</td></tr>\n            <tr class=\"flex gap-5\"><td>ICON</td><td>123</td><td> => </td><td>321</td></tr>', 'SOCIAL - EDIT', '2024-01-21 19:06:09'),
(131, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">NAME</td><td>-</td><td class=\"break-normal text-balance\">321</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">ICON</td><td>-</td><td class=\"break-all text-balance\">321</td></tr>', 'SOCIAL - DELETE', '2024-01-21 19:06:11'),
(132, '<tr class=\"flex gap-5\"><td class=\"w-[125px]\">HEADING</td><td>-</td><td class=\"break-normal text-balance\">SHREE RECORDS</td><td> => </td><td class=\"break-normal text-balance\">SHREE RECORDS1</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">BACKGROUND</td><td>-</td><td class=\"break-all text-balance\">Travis_scott.mp4</td><td> => </td><td class=\"break-all text-balance\">Travis_scott.mp4</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">PAGE</td><td>-</td><td class=\"break-all text-balance\">main</td><td> => </td><td class=\"break-all text-balance\">main</td></tr>', 'BANNERS - EDIT', '2024-01-21 19:06:22'),
(133, '<tr class=\"flex gap-5\"><td>IMAGE</td><td class=\"break-all text-balance\">c79e4bfab1c87a7f9ad69dffb1f663bac_1.png</td><td> => </td><td class=\"break-all text-balance\">c79e4bfab1c87a7f9ad69dffb1f663bac_1.png1</td></tr>', 'STUDIO - CARDS - EDIT', '2024-01-21 19:06:28'),
(134, '<tr class=\"flex gap-5\"><td>TEXT</td><td class=\"break-normal text-balance\">MAC ST1UDIO 2022</td><td> => </td><td class=\"break-normal text-balance\">MAC ST1UDIO 20221</td></tr>', 'STUDIO - LIST - EDIT', '2024-01-21 19:06:32'),
(135, '<tr class=\"flex gap-5\"><td>TEXT</td><td class=\"break-normal text-balance\">MAC ST1UDIO 20221</td><td> => </td><td class=\"break-normal text-balance\">MAC ST1UDIO 20221</td></tr>', 'STUDIO - LIST - EDIT', '2024-01-21 19:06:32'),
(136, '<tr class=\"flex gap-5\"><td>IMAGE</td><td class=\"break-all text-balance\">https://upload.wikimedia.org/wikipedia/ru/thumb/9/94/%D0%93%D0%B8%D0%B3%D0%B0%D1%87%D0%B0%D0%B4.jpg/640px-%D0%93%D0%B8%D0%B3%D0%B0%D1%87%D0%B0%D0%B4.jpg</td><td> => </td><td class=\"break-all text-balance\">https://upload.wikimedia.org/wikipedi1a/ru/thumb/9/94/%D0%93%D0%B8%D0%B3%D0%B0%D1%87%D0%B0%D0%B4.jpg/640px-%D0%93%D0%B8%D0%B3%D0%B0%D1%87%D0%B0%D0%B4.jpg</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"break-normal text-balance\">TEXT</td><td>Lorem ipsum dolor1</td><td> => </td><td class=\"break-normal text-balance\">Lorem ipsum dolor1</td></tr>', 'STUDIO - PERSON - EDIT', '2024-01-21 19:06:37'),
(137, '<tr class=\"flex gap-5\"><td class=\"w-[125px]\">ICON</td><td>-</td><td class=\"break-normal text-balance\">Group.svg</td><td> => </td><td class=\"break-normal text-balance\">Group.svg</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">IMAGE</td><td>-</td><td class=\"break-all text-balance\">c79e4bfabc87a7f9ad69dffb1f663bac_1.png</td><td> => </td><td class=\"break-all text-balance\">c79e4bfabc87a7f9ad69dffb1f663bac_1.png</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">HEADERS</td><td>-</td><td class=\"break-normal text-balance\">MUSIC PRODUCTION</td><td> => </td><td class=\"break-normal text-balance\">MUSIC PRODUCTION</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">DESCRIPTION</td><td>-</td><td class=\"break-normal text-balance\">From scratch to your own song ready for release. Either you already have an idea or not even close, we will be there for you. With the best quality, attention to details, and our professional experience in the field, together we are going to create some magic!</td><td> => </td><td class=\"break-normal text-balance\">From scratch t2o your own song ready for release. Either you already have an idea or not even close, we will be there for you. With the best quality, attention to details, and our professional experience in the field, together we are going to create some magic!</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">PRICES</td><td>-</td><td class=\"break-normal text-balance\">MUSIC PRODUCTION FROM EUR 1000 / song, - incl VATSONG WRITING FROM EUR 300 / song, - incl VATHIP-HOP BEATMAKING FROM EUR 250 / song, - incl VAT</td><td> => </td><td class=\"break-normal text-balance\">MUSIC PRODUCTION FROM EUR 1000 / song, - incl VATSONG WRITING FROM EUR 300 / song, - incl VATHIP-HOP BEATMAKING FROM EUR 250 / song, - incl VAT</td></tr>', 'SERVICES - EDIT', '2024-01-21 19:06:49'),
(138, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">HEADER</td><td>-</td><td class=\"break-normal text-balance\">321</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">DESCRIPTION</td><td>-</td><td class=\"break-all text-balance\">321</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">IMAGE</td><td>-</td><td class=\"break-all text-balance\">321</td></tr>', 'LABEL - CARDS - CREATE', '2024-01-21 19:06:56'),
(139, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">HEADER</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">321</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">123</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">DESCRIPTION</td><td>-</td><td class=\"break-all text-balance w-[500px]\">321</td><td> => </td><td class=\"break-all text-balance w-[500px]\">123</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">IMAGE</td><td>-</td><td class=\"break-all text-balance w-[500px]\">321</td><td> => </td><td class=\"break-all text-balance w-[500px]\">123</td></tr>', 'LABEL - CARDS - EDIT', '2024-01-21 19:08:32'),
(140, '<tr class=\"flex gap-5\"><td class=\"w-[125px]\">HEADER</td><td>-</td><td class=\"break-normal text-balance\">123</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">DESCRIPTION</td><td>-</td><td class=\"break-all text-balance\">123</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">IMAGE</td><td>-</td><td class=\"break-all text-balance\">123</td></tr>', 'LABEL - CARDS - DELETE', '2024-01-21 19:08:46'),
(141, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">TEXT</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">Sweet Punk est l’agence du Core branding™. Nous collaborons avec les marques en alliant design, publicité, digital et contenu autour de la juste vision stratégique.\r\n                            1</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">Sweet Punk est l’agence du Core branding™. Nous collaborons avec les marques en alliant design, publicité, digital et contenu autour de la juste vision stratégique.1</td></tr>', 'LABEL - HEADER - EDIT', '2024-01-21 19:09:29'),
(142, '<tr class=\"flex gap-5\"><td class=\"w-[125px]\">NAME</td><td>-</td><td class=\"break-normal text-balance\">123</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">DESCRIPTION</td><td>-</td><td class=\"break-all text-balance\">123</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">IMAGE</td><td>-</td><td class=\"break-all text-balance\">123</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">DATA</td><td>-</td><td class=\"break-all text-balance\">2024-01-12</td></tr>', 'EVENTS - NEWS - CREATE', '2024-01-21 19:09:45'),
(143, '<tr class=\"flex gap-5\"><td class=\"w-[125px]\">HEADING</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">123</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">321</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">DESCRIPTION</td><td>-</td><td class=\"break-all text-balance w-[500px]\">123</td><td> => </td><td class=\"break-all text-balance w-[500px]\">321</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">IMAGE</td><td>-</td><td class=\"break-all text-balance w-[500px]\">123</td><td> => </td><td class=\"break-all text-balance w-[500px]\">321</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">DATA</td><td>-</td><td class=\"break-all text-balance w-[500px]\">2024-01-12</td><td> => </td><td class=\"break-all text-balance w-[500px]\">2024-01-12</td></tr>', 'EVENTS - NEWS - EDIT', '2024-01-21 19:09:53'),
(144, '<tr class=\"flex gap-5\"><td class=\"w-[125px]\">HEADING</td><td>-</td><td class=\"break-normal text-balance\">321</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">DESCRIPTION</td><td>-</td><td class=\"break-normal text-balance\">321</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">IMAGE</td><td>-</td><td class=\"break-normal text-balance\">321</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">DATE</td><td>-</td><td class=\"break-normal text-balance\">2024-01-12</td></tr>', 'EVENTS - NEWS - DELETE', '2024-01-21 19:09:56'),
(145, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">RAP NAME</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">123213</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">321</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">NAME</td><td>-</td><td class=\"break-all text-balance w-[500px]\">123123</td><td> => </td><td class=\"break-all text-balance w-[500px]\">321321</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">SURNAME</td><td>-</td><td class=\"break-all text-balance w-[500px]\">123123</td><td> => </td><td class=\"break-all text-balance w-[500px]\">312</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px] text-wrap\">DATE OF BIRTH</td><td>-</td><td class=\"break-all text-balance w-[500px]\">2024-01-05</td><td> => </td><td class=\"break-all text-balance w-[500px]\">2024-01-05</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">E-MAIL</td><td>-</td><td class=\"break-all text-balance w-[500px]\">123213@mail.ru</td><td> => </td><td class=\"break-all text-balance w-[500px]\">321213@mail.ru</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">PHONE</td><td>-</td><td class=\"break-all text-balance w-[500px]\">123123-213213-321312</td><td> => </td><td class=\"break-all text-balance w-[500px]\">3213-213213-321312</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">DATE</td><td>-</td><td class=\"break-all text-balance w-[500px]\">2024-01-18 15:04:00</td><td> => </td><td class=\"break-all text-balance w-[500px]\">2024-01-18T15:04</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">ZIP</td><td>-</td><td class=\"break-all text-balance w-[500px]\">12321321321</td><td> => </td><td class=\"break-all text-balance w-[500px]\">3211321321</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">ADDRESS</td><td>-</td><td class=\"break-all text-balance w-[500px]\">dewqdewqfewqfewqf</td><td> => </td><td class=\"break-all text-balance w-[500px]\">321qfewqfewqf</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">CITY</td><td>-</td><td class=\"break-all text-balance w-[500px]\">21r321r321r321</td><td> => </td><td class=\"break-all text-balance w-[500px]\">3121r321</td></tr>', 'EVENTS - PERSON - UPDATE', '2024-01-21 19:10:12'),
(146, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">PHONE</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">123-456-7890</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">123-456-78902</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">E-MAIL</td><td>-</td><td class=\"break-all text-balance w-[500px]\">info@mystie.com</td><td> => </td><td class=\"break-all text-balance w-[500px]\">info@mystie.com</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">ADDRESS</td><td>-</td><td class=\"break-all text-balance w-[500px]\">Shree. Lab of Arts GmbH  Wichertstrasse 4, 10439, Berlin</td><td> => </td><td class=\"break-all text-balance w-[500px]\">Shree. Lab of Arts GmbH  Wichertstrasse 4, 10439, Berlin</td></tr>', 'CONTACTS - EDIT', '2024-01-21 19:10:24'),
(147, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">NAME</td><td>-</td><td class=\"break-normal text-balance\">321</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">IMAGE</td><td>-</td><td class=\"break-all text-balance\">321</td></tr>', 'MAIN - MUSIC - CREATE', '2024-01-21 19:10:29'),
(148, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">NAME</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">321</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">123</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">IMAGE</td><td>-</td><td class=\"break-all text-balance w-[500px]\">321</td><td> => </td><td class=\"break-all text-balance w-[500px]\">123</td></tr>', 'MAIN - MUSIC - EDIT', '2024-01-21 19:10:36'),
(149, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">NAME</td><td>-</td><td class=\"break-normal text-balance\">123</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">IMAGE</td><td>-</td><td class=\"break-all text-balance\">123</td></tr>', 'MAIN - MUSIC - DELETE', '2024-01-21 19:10:38'),
(150, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">NAME</td><td>-</td><td class=\"break-normal text-balance\">321</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">IMAGE</td><td>-</td><td class=\"break-all text-balance\">321</td></tr>', 'MAIN - MUSIC - CREATE', '2024-01-21 19:17:14'),
(151, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">NAME</td><td>-</td><td class=\"break-normal text-balance\">123</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">IMAGE</td><td>-</td><td class=\"break-all text-balance\">123</td></tr>', 'MAIN - MUSIC - CREATE', '2024-01-21 19:17:47'),
(152, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">NAME</td><td>-</td><td class=\"break-normal text-balance\">321</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">IMAGE</td><td>-</td><td class=\"break-all text-balance\">321</td></tr>', 'MAIN - MUSIC - DELETE', '2024-01-21 19:17:50'),
(153, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">NAME</td><td>-</td><td class=\"break-normal text-balance w-[500px]\">123</td><td> => </td><td class=\"break-normal text-balance w-[500px]\">321</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">IMAGE</td><td>-</td><td class=\"break-all text-balance w-[500px]\">123</td><td> => </td><td class=\"break-all text-balance w-[500px]\">321</td></tr>', 'MAIN - MUSIC - EDIT', '2024-01-21 19:17:55'),
(154, '<tr class=\"flex gap-5\"><td class=\"w-[75px]\">NAME</td><td>-</td><td class=\"break-normal text-balance\">321</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[75px]\">IMAGE</td><td>-</td><td class=\"break-all text-balance\">321</td></tr>', 'MAIN - MUSIC - DELETE', '2024-01-21 19:17:57'),
(155, '<tr class=\"flex gap-5\"><td class=\"w-[125px]\">NAME</td><td>-</td><td class=\"break-normal text-balance\">123</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">NAME</td><td>-</td><td class=\"break-all text-balance\">123</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">SURNAME</td><td>-</td><td class=\"break-all text-balance\">123</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">DATE OF BIRTH</td><td>-</td><td class=\"break-all text-balance\">2024-01-16</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">E-MAIL</td><td>-</td><td class=\"break-all text-balance\">123</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">PHONE</td><td>-</td><td class=\"break-all text-balance\">123</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">DATE</td><td>-</td><td class=\"break-all text-balance\">2024-01-17 23:22:46</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">ZIP</td><td>-</td><td class=\"break-all text-balance\">123</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">ADDRESS</td><td>-</td><td class=\"break-all text-balance\">123</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">CITY</td><td>-</td><td class=\"break-all text-balance\">123</td></tr>', 'EVENTS - PERSON - DELETE', '2024-01-21 19:23:37'),
(156, '<tr class=\"flex gap-5\"><td class=\"w-[125px]\">HEADING</td><td>-</td><td class=\"break-normal text-balance\">SHREE RECORDS1</td><td> => </td><td class=\"break-normal text-balance\">SHREE RECORDS</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">BACKGROUND</td><td>-</td><td class=\"break-all text-balance\">Travis_scott.mp4</td><td> => </td><td class=\"break-all text-balance\">Travis_scott.mp4</td></tr>\n            <tr class=\"flex gap-5\"><td class=\"w-[125px]\">PAGE</td><td>-</td><td class=\"break-all text-balance\">main</td><td> => </td><td class=\"break-all text-balance\">main</td></tr>', 'BANNERS - EDIT', '2024-01-22 14:20:24'),
(157, '<tr class=\"flex gap-5\"><td>DATA</td><td>2024-01-25 18:25:56</td><td> => </td><td>2024-01-25T18:25:56</td></tr>\n            <tr class=\"flex gap-5\"><td>TEXT</td><td>Studio was rented</td><td> => </td><td>Studio was rented</td></tr>\n            <tr class=\"flex gap-5\"><td>PRICE</td><td>101</td><td> => </td><td>101</td></tr>', 'REQUEST - EDIT', '2024-01-25 17:58:30'),
(158, '<tr class=\"flex gap-5\"><td>DATA</td><td>2024-01-25 18:25:56</td><td> => </td><td>2024-01-25T18:25:56</td></tr>\n            <tr class=\"flex gap-5\"><td>TEXT</td><td>Studio was rented</td><td> => </td><td>Studio was rented</td></tr>\n            <tr class=\"flex gap-5\"><td>PRICE</td><td>101</td><td> => </td><td>101</td></tr>', 'REQUEST - EDIT', '2024-01-25 17:58:37'),
(159, '<tr class=\"flex gap-5\"><td>DATA</td><td>2024-01-25 18:25:56</td><td> => </td><td>2024-01-25T18:25:56</td></tr>\n            <tr class=\"flex gap-5\"><td>TEXT</td><td>Studio was rented</td><td> => </td><td>Studio was rented</td></tr>\n            <tr class=\"flex gap-5\"><td>PRICE</td><td>101</td><td> => </td><td>101</td></tr>', 'REQUEST - EDIT', '2024-01-25 18:01:18'),
(160, '<tr class=\"flex gap-5\"><td>DATA</td><td>2024-01-25 18:25:56</td><td> => </td><td>2024-01-25T18:25:56</td></tr>\n            <tr class=\"flex gap-5\"><td>TEXT</td><td>Studio was rented</td><td> => </td><td>Studio was rented</td></tr>\n            <tr class=\"flex gap-5\"><td>PRICE</td><td>101</td><td> => </td><td>101</td></tr>', 'REQUEST - EDIT', '2024-01-25 18:01:48'),
(161, '<tr class=\"flex gap-5\"><td>DATA</td><td>2024-01-25 18:25:56</td><td> => </td><td>2024-01-25T18:25:56</td></tr>\n            <tr class=\"flex gap-5\"><td>TEXT</td><td>Studio was rented</td><td> => </td><td>Studio was rented</td></tr>\n            <tr class=\"flex gap-5\"><td>PRICE</td><td>101</td><td> => </td><td>101123</td></tr>', 'REQUEST - EDIT', '2024-01-25 18:02:13');

-- --------------------------------------------------------

--
-- Структура таблицы `contact_contacts`
--

CREATE TABLE `contact_contacts` (
  `id` int UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contact_contacts`
--

INSERT INTO `contact_contacts` (`id`, `phone`, `old_phone`, `email`, `old_email`, `address`, `old_address`, `created_at`, `updated_at`) VALUES
(1, '123-456-78902', '123-456-7890', 'info@mystie.com', 'info@mystie.com', 'Shree. Lab of Arts GmbH  Wichertstrasse 4, 10439, Berlin', 'Shree. Lab of Arts GmbH  Wichertstrasse 4, 10439, Berlin', NULL, '2024-01-21 16:10:24');

-- --------------------------------------------------------

--
-- Структура таблицы `events_news`
--

CREATE TABLE `events_news` (
  `id` int UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descr` varchar(2555) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_descr` varchar(2555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` date NOT NULL,
  `old_data` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `events_news`
--

INSERT INTO `events_news` (`id`, `heading`, `old_heading`, `descr`, `old_descr`, `image`, `old_image`, `data`, `old_data`, `created_at`, `updated_at`) VALUES
(1, 'NEWS', 'NEWS', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nemo soluta perferendis quibusdam laboriosam voluptatibus aliquam ut', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa nemo soluta perferendis quibusdam laboriosam voluptatibus aliquam ut', 'kD9twhD52Ow.jpg', 'kD9twhD52Ow.jpg', '2024-01-20', '2024-01-20', NULL, '2024-01-21 14:33:02'),
(2, '123', NULL, '123', NULL, '123', NULL, '2024-01-04', NULL, NULL, NULL),
(3, '123', NULL, '123', NULL, '123', NULL, '2024-01-15', NULL, NULL, NULL),
(143, '123', NULL, '123', NULL, 'kD9twhD52Ow.jpg', NULL, '2024-01-12', NULL, '2024-01-21 19:09:45', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `events_person`
--

CREATE TABLE `events_person` (
  `id` bigint UNSIGNED NOT NULL,
  `rap_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_rap_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_surname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date NOT NULL,
  `old_date_of_birth` date DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` datetime NOT NULL,
  `old_date` datetime DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `events_person`
--

INSERT INTO `events_person` (`id`, `rap_name`, `old_rap_name`, `name`, `old_name`, `surname`, `old_surname`, `date_of_birth`, `old_date_of_birth`, `email`, `old_email`, `phone`, `old_phone`, `date`, `old_date`, `zip`, `old_zip`, `address`, `old_address`, `city`, `old_city`, `created_at`, `updated_at`) VALUES
(2, '321', NULL, '321', NULL, '321', NULL, '2024-01-17', NULL, '312', NULL, '312', NULL, '2024-01-10 23:04:42', NULL, '321', NULL, '321', NULL, '321', NULL, NULL, NULL),
(3, '12311', NULL, '4321', NULL, '3124', NULL, '0213-03-25', NULL, 'pavelata128@gmail.com', NULL, '+7 (937) 876 52 20', NULL, '2024-01-10 22:35:00', NULL, '2134', NULL, '1234', NULL, '1234', NULL, '2024-01-25 18:36:01', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `label_cards`
--

CREATE TABLE `label_cards` (
  `id` int UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `headers` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_headers` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descr` varchar(2555) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_descr` varchar(2555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `label_cards`
--

INSERT INTO `label_cards` (`id`, `image`, `old_image`, `headers`, `old_headers`, `descr`, `old_descr`, `created_at`, `updated_at`) VALUES
(1, 'Travis_scott.mp4', '', 'MUSIC PRODUCTION', NULL, 'From scratch to your own song ready for release. Either you already have an idea or not even close, we will be there for you. With the best quality, attention to details, and our professional experience in the field, together we are going to create some magic!', NULL, NULL, '2024-01-21 17:20:22'),
(2, 'kD9twhD52Ow.jpg', '', 'LABEL', NULL, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui doloremque repellendus  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui doloremque repellendus Lorem ipsum dolor sit amet consectetur, adipisicing elit. Lorem ipsum dolor sit amet consectetur', NULL, NULL, '2024-01-20 14:16:23'),
(3, 'SkYClbKLcb0.jpgdwqedweqdewqdwedewdqwdwdwqdewdwqdewq', '', 'LABEL', NULL, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui doloremque repellendus  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui doloremque repellendus Lorem ipsum dolor sit amet consectetur, adipisicing elit. Lorem ipsum dolor sit amet consectetur', NULL, NULL, '2024-01-21 17:57:28');

-- --------------------------------------------------------

--
-- Структура таблицы `label_header`
--

CREATE TABLE `label_header` (
  `id` int UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `label_header`
--

INSERT INTO `label_header` (`id`, `text`, `old_text`, `created_at`, `updated_at`) VALUES
(1, 'Sweet Punk est l’agence du Core branding™. Nous collaborons avec les marques en alliant design, publicité, digital et contenu autour de la juste vision stratégique.1', 'Sweet Punk est l’agence du Core branding™. Nous collaborons avec les marques en alliant design, publicité, digital et contenu autour de la juste vision stratégique.\r\n                            1', NULL, '2024-01-21 16:09:29');

-- --------------------------------------------------------

--
-- Структура таблицы `main_music`
--

CREATE TABLE `main_music` (
  `id` int UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `main_music`
--

INSERT INTO `main_music` (`id`, `image`, `old_image`, `name`, `old_name`, `created_at`, `updated_at`) VALUES
(1, 'SkYClbKLcb0.jpg', 'SkYClbKLcb0.jpg', 'GUNNA X MIGOS TYPE BEAT - EORI', 'GUNNA X MIGOS TYPE BEAT - EORI', NULL, '2024-01-21 15:51:02'),
(2, 'kD9twhD52Ow.jpg', '', 'LIL YACHTY X METRO BOOMIN TYPE BEAT - DAB WAVE', '', NULL, NULL),
(3, 'SkYClbKLcb0.jpg', '', 'GUNNA X MIGOS TYPE BEAT - EORI', '', NULL, '2024-01-20 09:41:55'),
(4, 'kD9twhD52Ow.jpg', '', 'LIL YACHTY X METRO BOOMIN TYPE BEAT - DAB WAVE', '', NULL, NULL),
(5, 'SkYClbKLcb0.jpg', '', 'GUNNA X MIGOS TYPE BEAT - EORI', '', NULL, NULL),
(6, 'kD9twhD52Ow.jpg', '', 'LIL YACHTY X METRO BOOMIN TYPE BEAT - DAB WAVE', '', NULL, NULL),
(7, 'SkYClbKLcb0.jpg', '', 'GUNNA X MIGOS TYPE BEAT - EORI', '', NULL, NULL),
(8, 'kD9twhD52Ow.jpg', '', 'LIL YACHTY X METRO BOOMIN TYPE BEAT - DAB WAVE', '', NULL, NULL),
(9, 'SkYClbKLcb0.jpg', '', 'GUNNA X MIGOS TYPE BEAT - EORI', '', NULL, NULL),
(10, 'kD9twhD52Ow.jpg', '', 'LIL YACHTY X METRO BOOMIN TYPE BEAT - DAB WAVE', '', NULL, NULL),
(11, 'SkYClbKLcb0.jpg', '', 'GUNNA X MIGOS TYPE BEAT - EORI', '', NULL, NULL),
(12, 'kD9twhD52Ow.jpg', '', 'LIL YACHTY X METRO BOOMIN TYPE BEAT - DAB WAVE', '', NULL, NULL),
(13, 'SkYClbKLcb0.jpg', '', 'GUNNA X MIGOS TYPE BEAT - EORI', '', NULL, NULL),
(14, 'kD9twhD52Ow.jpg', '', 'LIL YACHTY X METRO BOOMIN TYPE BEAT - DAB WAVE', '', NULL, NULL),
(15, 'SkYClbKLcb0.jpg', '', 'GUNNA X MIGOS TYPE BEAT - EORI', '', NULL, NULL),
(16, 'kD9twhD52Ow.jpg', '', 'LIL YACHTY X METRO BOOMIN TYPE BEAT - DAB WAVE', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_17_10_services_cards_prices', 1),
(6, '2024_01_17_11_services_banner', 1),
(7, '2024_01_17_12_services_cards', 1),
(8, '2024_01_17_13_services_headers', 1),
(9, '2024_01_17_14_services', 1),
(10, '2024_01_17_15_label_banner', 1),
(11, '2024_01_17_16_label_cards', 1),
(12, '2024_01_17_17_label_header', 1),
(13, '2024_01_17_18_label', 1),
(14, '2024_01_17_19_contact_contacts', 1),
(15, '2024_01_17_1_main_music', 1),
(16, '2024_01_17_20_contact_banner', 1),
(17, '2024_01_17_21_contact', 1),
(18, '2024_01_17_22_events_banner', 1),
(19, '2024_01_17_23_events_news', 1),
(20, '2024_01_17_24_events', 1),
(21, '2024_01_17_25_events_person', 1),
(22, '2024_01_17_26_social', 1),
(23, '2024_01_17_2_main_banner', 1),
(24, '2024_01_17_3_main', 1),
(25, '2024_01_17_4_studio_banner_1', 1),
(26, '2024_01_17_5_studio_cards', 1),
(27, '2024_01_17_6_studio_list', 1),
(28, '2024_01_17_7_studio_banner_2', 1),
(29, '2024_01_17_8_studio_person', 1),
(30, '2024_01_17_9_studio', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `requests`
--

CREATE TABLE `requests` (
  `id` int UNSIGNED NOT NULL,
  `data` datetime NOT NULL,
  `old_data` datetime DEFAULT NULL,
  `text` varchar(255) NOT NULL,
  `old_text` varchar(255) DEFAULT NULL,
  `price` int NOT NULL,
  `old_price` int DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `requests`
--

INSERT INTO `requests` (`id`, `data`, `old_data`, `text`, `old_text`, `price`, `old_price`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2024-01-25 18:25:56', '2024-01-25 18:25:56', 'Studio was rented', 'Studio was rented', 101123, 101, 2, NULL, '2024-01-25 15:02:13'),
(2, '2024-01-25 18:26:35', NULL, 'Studio was rented', NULL, 1234, NULL, 2, NULL, NULL),
(3, '2024-01-25 18:54:07', NULL, '123', NULL, 123, NULL, 2, NULL, NULL),
(4, '2024-01-25 18:55:14', NULL, '1234', NULL, 1234, NULL, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `services_cards`
--

CREATE TABLE `services_cards` (
  `id` int UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_headers` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descr` varchar(2555) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_descr` varchar(2555) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prices` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_prices` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `services_cards`
--

INSERT INTO `services_cards` (`id`, `icon`, `old_icon`, `image`, `old_image`, `headers`, `old_headers`, `descr`, `old_descr`, `prices`, `old_prices`, `created_at`, `updated_at`) VALUES
(1, 'Group.svg', 'Group.svg', 'c79e4bfabc87a7f9ad69dffb1f663bac_1.png', 'c79e4bfabc87a7f9ad69dffb1f663bac_1.png', 'MUSIC PRODUCTION', 'MUSIC PRODUCTION', 'From scratch t2o your own song ready for release. Either you already have an idea or not even close, we will be there for you. With the best quality, attention to details, and our professional experience in the field, together we are going to create some magic!', 'From scratch to your own song ready for release. Either you already have an idea or not even close, we will be there for you. With the best quality, attention to details, and our professional experience in the field, together we are going to create some magic!', 'MUSIC PRODUCTION FROM EUR 1000 / song, - incl VATSONG WRITING FROM EUR 300 / song, - incl VATHIP-HOP BEATMAKING FROM EUR 250 / song, - incl VAT', 'MUSIC PRODUCTION FROM EUR 1000 / song, - incl VATSONG WRITING FROM EUR 300 / song, - incl VATHIP-HOP BEATMAKING FROM EUR 250 / song, - incl VAT', NULL, '2024-01-21 16:06:49'),
(2, 'Vector_3.svg', '', 'Neumann_U87_Condenser_Microphone_on_the_piano_-_Studio_A,_In_Your_Ear_Studios 1.png', '', 'RECORDING', '', 'Vocals, music instruments, podcasts & radio airs - we are at your service to record it all.', '', 'STUDIO BOOTH RECORDING\r\n+  SOUND ENGINEER EUR 70 / hour, incl VAT', '', NULL, NULL),
(3, 'headphone-sound-svgrepo-com_1.svg', 'headphone-sound-svgrepo-com_1.svg', 'photo_2023-02-21_14-38-45_2.png', 'photo_2023-02-21_14-38-45_2.png', 'MASTERING', 'MASTERING', 'We balance the sonic elements of your beloved stereo mix and optimize playback across all systems and media formats. MUSIC PRODUCTION FROM EUR 1000 / song, - incl VAT', 'We balance the sonic elements of your beloved stereo mix and optimize playback across all systems and media formats. MUSIC PRODUCTION FROM EUR 1000 / song, - incl VAT', 'DIGITAL STEREO MASTERING EUR 45 / song, incl VATHYBRID: ANALOG & DIGITAL MASTERING EUR 80 / song, incl VAT', 'DIGITAL STEREO MASTERING EUR 45 / song, incl VAT\r\nHYBRID: ANALOG & DIGITAL MASTERING EUR 80 / song, incl VAT', NULL, '2024-01-21 15:27:48'),
(4, 'Group_1.svg', '', 'image_12.png', '', 'MIXING', '', 'We balance the sonic elements of your beloved stereo mix and optimize playback across all systems and media formats. MUSIC PRODUCTION FROM EUR 1000 / song, - incl VAT', '', 'UP TO 8 CHANNELS EUR 170, - incl VAT\r\nUP TO 16 CHANNELS EUR 220, - incl VAT\r\nUP TO 32 CHANNELS EUR 300, - incl VAT', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `social`
--

CREATE TABLE `social` (
  `id` bigint UNSIGNED NOT NULL,
  `icon` varchar(5255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `social`
--

INSERT INTO `social` (`id`, `icon`, `old_icon`, `name`, `old_name`, `created_at`, `updated_at`) VALUES
(1, '<i class=\"fa fa-facebook\"></i>', '<i class=\"fa fa-facebook\"></i>', 'facebook', 'facebook', NULL, '2024-01-21 15:36:02'),
(2, '<i class=\"fa fa-twitter\"></i>', '', 'twitter', '', NULL, NULL),
(3, '<i class=\"fa fa-instagram\"></i>', '', 'instagram', '', NULL, NULL),
(4, '<i class=\"fa fa-youtube\"></i>', '', 'youtube', '', NULL, NULL),
(5, '<svg xmlns=\"http://www.w3.org/2000/svg\" height=\"1em\" viewBox=\"0 0 448 512\"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d=\"M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z\"></path></svg>', '', 'tiktok', '', NULL, NULL),
(6, '<i class=\"fa fa-spotify\"></i>', '', 'spotify', '', NULL, NULL),
(7, '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 27 27\" fill=\"none\"> <path d=\"M19.1815 13.495L15.5753 14.709V18.6321L13.3396 15.4615L9.73337 16.6656L11.969 13.495L9.73337 10.3344L13.3396 11.5385L15.5753 8.36789V12.291L19.1815 13.495Z\" fill=\"#000\"></path><path d=\"M19.1815 13.495V21.6823H7.88651V5.16722H19.1815V13.495L24.1875 11.8194V3.19063L21.2811 0H2.8125V27H21.2617L24.1875 23.9799V15.1806L19.1815 13.495Z\" fill=\"#000\"></path></svg>', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `studio_cards`
--

CREATE TABLE `studio_cards` (
  `id` int UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `studio_cards`
--

INSERT INTO `studio_cards` (`id`, `image`, `old_image`, `created_at`, `updated_at`) VALUES
(1, 'c79e4bfab1c87a7f9ad69dffb1f663bac_1.png1', 'c79e4bfab1c87a7f9ad69dffb1f663bac_1.png', NULL, '2024-01-21 16:06:28'),
(2, 'photo1683036770_1.jpeg', '', NULL, '2024-01-18 17:39:03'),
(3, 'photo1683037068.jpeg', '', NULL, NULL),
(4, 'photo1683037068_1.jpeg', '', NULL, NULL),
(5, 'photo1683037154.jpeg', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `studio_list`
--

CREATE TABLE `studio_list` (
  `id` int UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `studio_list`
--

INSERT INTO `studio_list` (`id`, `text`, `old_text`, `created_at`, `updated_at`) VALUES
(1, 'MAC ST1UDIO 20221', 'MAC ST1UDIO 20221', NULL, '2024-01-21 16:06:32'),
(2, 'UNIVERSAL AUDIO APOLLO X6', '', NULL, NULL),
(3, 'PSI A23 SPEAKERS', '', NULL, '2024-01-18 17:43:57'),
(4, 'SSL FUSION', '', NULL, NULL),
(5, 'BETTERMAKER MASTERING LIMITER', '', NULL, NULL),
(6, 'AUDIENT ASP 800 MULTY CHANNEL PREAMPLIFIER', '', NULL, NULL),
(7, 'WALDORF QUANTUM SYNTHESISER', '', NULL, NULL),
(8, 'NATIVE INSTRUMENTS MASCHINE+', '', NULL, NULL),
(9, 'MOOG SUBSEQUENT 25', '', NULL, NULL),
(10, 'ELEKTRON ANALOG RYTM', '', NULL, NULL),
(11, 'ELEKTRON ANALOG FOUR MKII', '', NULL, NULL),
(12, 'AUSTRIAN AUDIO OC818', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `studio_person`
--

CREATE TABLE `studio_person` (
  `id` int UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `studio_person`
--

INSERT INTO `studio_person` (`id`, `image`, `old_image`, `text`, `old_text`, `created_at`, `updated_at`) VALUES
(1, 'https://upload.wikimedia.org/wikipedi1a/ru/thumb/9/94/%D0%93%D0%B8%D0%B3%D0%B0%D1%87%D0%B0%D0%B4.jpg/640px-%D0%93%D0%B8%D0%B3%D0%B0%D1%87%D0%B0%D0%B4.jpg', 'https://upload.wikimedia.org/wikipedia/ru/thumb/9/94/%D0%93%D0%B8%D0%B3%D0%B0%D1%87%D0%B0%D0%B4.jpg/640px-%D0%93%D0%B8%D0%B3%D0%B0%D1%87%D0%B0%D0%B4.jpg', 'Lorem ipsum dolor1', 'Lorem ipsum dolor1', NULL, '2024-01-21 16:06:37'),
(2, 'https://upload.wikimedia.org/wikipedia/ru/thumb/9/94/%D0%93%D0%B8%D0%B3%D0%B0%D1%87%D0%B0%D0%B4.jpg/640px-%D0%93%D0%B8%D0%B3%D0%B0%D1%87%D0%B0%D0%B4.jpg', '', 'Lorem ipsum dolor', '', NULL, NULL),
(3, 'https://upload.wikimedia.org/wikipedia/ru/thumb/9/94/%D0%93%D0%B8%D0%B3%D0%B0%D1%87%D0%B0%D0%B4.jpg/640px-%D0%93%D0%B8%D0%B3%D0%B0%D1%87%D0%B0%D0%B4.jpg', '', 'Lorem ipsum dolor', '', NULL, NULL),
(4, 'https://upload.wikimedia.org/wikipedia/ru/thumb/9/94/%D0%93%D0%B8%D0%B3%D0%B0%D1%87%D0%B0%D0%B4.jpg/640px-%D0%93%D0%B8%D0%B3%D0%B0%D1%87%D0%B0%D0%B4.jpg', '', 'Lorem ipsum dolor', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `old_is_admin` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `old_name`, `email`, `old_email`, `email_verified_at`, `password`, `is_admin`, `old_is_admin`, `created_at`, `updated_at`) VALUES
(1, '2222', '1111', '2222@gmail.com', '1111@gmail.com', NULL, '$2y$12$BPYrPzNWmawsZb2Xvi1RM.1V4CmouZB5fPeFXC/J0RzXhWpz1ZubC', 1, 1, '2024-01-19 16:35:55', '2024-01-21 15:54:34'),
(2, '123', NULL, 'pavelata128@gmail.com', NULL, NULL, '$2y$12$lh59Q1oTwBDqs2H7X8VIWOd6Af07UJfLEGIqz/wAWGVHnhg1cbE1m', 1, NULL, '2024-01-22 10:17:52', '2024-01-22 10:17:52');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `change_log`
--
ALTER TABLE `change_log`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contact_contacts`
--
ALTER TABLE `contact_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `events_news`
--
ALTER TABLE `events_news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `events_person`
--
ALTER TABLE `events_person`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `label_cards`
--
ALTER TABLE `label_cards`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `label_header`
--
ALTER TABLE `label_header`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `main_music`
--
ALTER TABLE `main_music`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `services_cards`
--
ALTER TABLE `services_cards`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `studio_cards`
--
ALTER TABLE `studio_cards`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `studio_list`
--
ALTER TABLE `studio_list`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `studio_person`
--
ALTER TABLE `studio_person`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `change_log`
--
ALTER TABLE `change_log`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT для таблицы `contact_contacts`
--
ALTER TABLE `contact_contacts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `events_news`
--
ALTER TABLE `events_news`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT для таблицы `events_person`
--
ALTER TABLE `events_person`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `label_cards`
--
ALTER TABLE `label_cards`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT для таблицы `label_header`
--
ALTER TABLE `label_header`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT для таблицы `main_music`
--
ALTER TABLE `main_music`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `services_cards`
--
ALTER TABLE `services_cards`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT для таблицы `social`
--
ALTER TABLE `social`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT для таблицы `studio_cards`
--
ALTER TABLE `studio_cards`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT для таблицы `studio_list`
--
ALTER TABLE `studio_list`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT для таблицы `studio_person`
--
ALTER TABLE `studio_person`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
