-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Ned 09. dub 2017, 22:29
-- Verze serveru: 10.1.16-MariaDB
-- Verze PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `finefriend`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `feed`
--

CREATE TABLE `feed` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `text` varchar(200) NOT NULL,
  `timestamp` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `feed`
--

INSERT INTO `feed` (`id`, `user_id`, `text`, `timestamp`) VALUES
(1, 35, 'Jebej', 1490302711),
(2, 35, 'JEBEEEEJ', 1490302717),
(3, 38, 'Ten, kdo chce příliš mnoho, riskuje absolutně vše. Samozřejmě ten, kdo chce od života příliš málo, taky nemusí dostat nic.', 1490302773),
(4, 37, 'MARINAK nevis o tom a tak trolejbusom chodi, ty nevis ze on byl v marinactvu, ze v marinectve robil ', 1490302806),
(5, 37, 'zabil ťa na šupu byl si mrtvy šetko hned', 1490302810),
(6, 37, 'kto ta odblokuje o takom nečase?', 1490302814),
(7, 36, 'Paulie je mrtvej!', 1490302977),
(8, 39, 'Raketa', 1490303289),
(9, 36, '?', 1490303334),
(11, 40, 'Mám to v piči', 1490304081),
(12, 41, 'ŽOLOHLAVA', 1490304153),
(13, 41, 'ŽKSŽ - Žolík klávesnica stolík žolík', 1490304169),
(14, 42, 'Co je ty píčo', 1490304362),
(15, 34, 'Co ti je?', 1490304811),
(16, 44, 'hej hej', 1490305389),
(17, 44, 'hej hej', 1490305399),
(18, 45, 'Yolo', 1490346845),
(19, 46, 'dneska umiram', 1490724380),
(20, 33, 'Na pána driftoval jsem dneska', 1490727687),
(21, 47, 'Krokety ', 1490778623),
(22, 48, '360 NOSCOPE', 1490784933),
(23, 48, 'Kraketa', 1490785119),
(24, 48, 'Delobuch', 1490785129),
(25, 48, 'status', 1490785146),
(26, 48, 'Jsem marinakuv kamos', 1490785181),
(27, 48, 'spolu jsme marinovali šak logika logika ne aji o nečase o 12tej se marinovalo', 1490785207),
(28, 34, 'Tak to jo ULU', 1490785687),
(29, 49, 'Hello belongs to the all good people of VapeNation', 1490806520),
(30, 51, 'Jsem gay', 1491321310),
(31, 51, 'Jdi do pic', 1491321453),
(32, 51, 'Mam rad parky ', 1491322104),
(33, 47, 'Mam prujem cyka', 1491402086),
(34, 55, 'hovinko', 1491408314),
(35, 34, 'ZULUL', 1491463766),
(36, 56, 'Reeeeeeeeee', 1491464985),
(37, 56, 'REEEEEEEEEEEEEE', 1491465130),
(38, 42, 'Co je ty píčo', 1491465185),
(39, 34, 'Už to funguje NICE', 1491652547),
(40, 57, 'Test', 1491761383),
(41, 34, 'pls', 1491765591),
(42, 34, 'pls', 1491765675),
(43, 34, 'haha', 1491765681),
(44, 34, 'zulul', 1491765741);

-- --------------------------------------------------------

--
-- Struktura tabulky `follows`
--

CREATE TABLE `follows` (
  `id` int(11) NOT NULL,
  `follower_id` int(11) NOT NULL,
  `followed_id` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `follows`
--

INSERT INTO `follows` (`id`, `follower_id`, `followed_id`, `timestamp`) VALUES
(1, 34, 29, 0),
(64, 50, 37, 0),
(66, 50, 32, 0),
(7, 36, 38, 0),
(8, 39, 35, 0),
(9, 36, 34, 0),
(10, 39, 33, 0),
(11, 39, 32, 0),
(12, 39, 31, 0),
(13, 39, 29, 0),
(14, 39, 34, 0),
(15, 39, 37, 0),
(16, 39, 39, 0),
(17, 36, 32, 0),
(29, 36, 29, 0),
(19, 36, 37, 0),
(65, 50, 41, 0),
(24, 34, 39, 0),
(25, 36, 35, 0),
(26, 36, 31, 0),
(27, 36, 33, 0),
(28, 34, 34, 0),
(63, 34, 37, 0),
(62, 33, 48, 0),
(32, 36, 39, 0),
(33, 36, 40, 0),
(34, 36, 41, 0),
(35, 36, 42, 0),
(36, 42, 38, 0),
(37, 36, 36, 0),
(38, 42, 33, 0),
(39, 42, 42, 0),
(119, 34, 57, 1491767822),
(41, 42, 34, 0),
(45, 35, 35, 0),
(46, 33, 46, 0),
(47, 33, 34, 0),
(48, 33, 39, 0),
(49, 33, 37, 0),
(50, 33, 33, 0),
(51, 48, 39, 0),
(53, 48, 33, 0),
(54, 48, 32, 0),
(55, 48, 31, 0),
(56, 48, 36, 0),
(57, 48, 35, 0),
(58, 48, 37, 0),
(59, 48, 44, 0),
(60, 48, 41, 0),
(67, 51, 34, 0),
(73, 52, 34, 0),
(71, 51, 33, 0),
(72, 51, 37, 0),
(74, 34, 36, 0),
(75, 54, 54, 0),
(76, 47, 33, 1491402095),
(77, 55, 55, 1491408299),
(78, 55, 33, 1491408328),
(79, 55, 32, 1491408330),
(80, 55, 44, 1491408337),
(97, 57, 57, 1491761079),
(82, 34, 52, 1491413765),
(83, 34, 33, 1491464414),
(84, 34, 44, 1491464427),
(85, 56, 56, 1491464959),
(86, 42, 35, 1491464989),
(87, 42, 37, 1491464997),
(88, 42, 41, 1491465005),
(89, 56, 38, 1491465021),
(90, 56, 49, 1491465033),
(91, 42, 49, 1491465039),
(92, 42, 56, 1491465087),
(93, 56, 42, 1491465103),
(94, 34, 56, 1491465118),
(96, 36, 44, 1491582153),
(98, 57, 56, 1491761857),
(99, 57, 49, 1491764003),
(100, 57, 54, 1491764006),
(101, 57, 52, 1491764008),
(102, 57, 48, 1491764011),
(103, 57, 51, 1491764018),
(104, 57, 50, 1491764020),
(105, 57, 46, 1491764021),
(106, 57, 44, 1491764023),
(107, 57, 39, 1491764026),
(108, 57, 37, 1491764028),
(109, 57, 38, 1491764030),
(110, 57, 40, 1491764032),
(111, 57, 36, 1491764033),
(112, 57, 34, 1491764034),
(113, 57, 32, 1491764039),
(114, 57, 42, 1491764041),
(115, 57, 31, 1491764044),
(116, 57, 33, 1491764045),
(117, 57, 41, 1491764046),
(118, 57, 35, 1491764047);

-- --------------------------------------------------------

--
-- Struktura tabulky `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `recipient_id` int(11) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `timestamp` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `recipient_id`, `text`, `timestamp`) VALUES
(1, 34, 31, 'message to biblethump', 1491745037),
(2, 57, 38, 'Ahoj Tome', 1491761430),
(3, 57, 33, 'Ahoj Vine nemám rád diesely', 1491761442),
(4, 57, 44, 'cau cina', 1491761453),
(5, 57, 56, 'co je???', 1491763112);

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_czech_ci NOT NULL,
  `surname` varchar(100) COLLATE utf8_czech_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_czech_ci NOT NULL,
  `password` varchar(400) COLLATE utf8_czech_ci NOT NULL,
  `profilepic` varchar(300) COLLATE utf8_czech_ci NOT NULL,
  `color` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `timestamp` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `profilepic`, `color`, `timestamp`) VALUES
(33, 'vin', 'diesel', 'naVinDiesela@natural95.com', '$2y$10$1Ib4LrYac1HWgAU2Yx8FruZLVIywnatqctiBz.W01M6SPMTtN.j6u', 'https://pbs.twimg.com/profile_images/1158563236/Dom_400x400.JPG', 'indigo', 1489434770),
(32, 'Kappa', 'Pride', 'kappa@pride', '$2y$10$d/icN54Q7TV22X3rXK9JXucXF2ZwtUqU06YODYi0NgtqrCw8hwSu.', 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRwTQIOQKAvq3iS6Oh_vh_CCLCfN8IOc50yhfbw1a9UCLkHjSsEkxVIQQ', 'cyan', 1489399740),
(31, 'Bible', 'Thump', 'bible@thump', '$2y$10$Y8vQTaqRBD1AvXWhn2TTKOy/PRFyFMUtIDLBRz9HOA6DzZFM8cj0u', 'https://pbs.twimg.com/profile_images/577309793104175104/y2jIo9dq.png', 'pink', 1489399595),
(38, 'Tom', 'Angelo', 'tom@angelo', '$2y$10$svND79d6rkcen02sVw.rfOpbw369NJfURo5JRaIbp22phuh1iXmrm', 'http://www.postavy.cz/obrazky-thumbs/wiki/thomas-angelo-33227-wikithumb.jpg', 'green', 1490302761),
(44, 'tomas', 'cink', 'cinktomik@gmail.com', '$2y$10$LXpO2EREedsluFBwiw8WAOpv88qPt4qNt0CW/CTcqoqXPGSKaF.iO', 'assets/default-avatar.jpg', 'indigo', 1490305367),
(36, 'Jenny', 'Nick', 'jindrola0@seznam.cz', '$2y$10$x3bdQEfjMw3IkBJWvBR1XOOHBTNzwYrQmTed.5hxqDvPivCB6Z4BK', 'assets/default-avatar.jpg', 'green', 1490253007),
(37, 'MARINAK', ' ', 'marinak@marinak', '$2y$10$8hDbnH7RaeE2EppHcZURaeBQ7Kv1SZrXfmVEpr1g0pewpNaXrwTVa', 'http://img1.netky.sk/VIDEO-Marinaka-urazil-cesky-bulvar-Odkazal-im-toto.jpg?imageId=1178160', 'indigo', 1490257224),
(34, 'Ivan', 'Harašta', 'ivan@harasta', '$2y$10$7XazKi7vszKjEpizMfUXIeHiRR/t52641XDJb3vACyixYo1NM2fG2', 'http://files.gamebanana.com/img/ico/sprays/57822c19e1ad1.png', 'blue', 1490217871),
(35, 'Aleš', 'Bejr', 'ales@bejr', '$2y$10$ZwQmPWXXJassUDGcbgPbzejIcPJQS8tpycmuURAzrXhjlxkhgMEC6', 'https://i.ytimg.com/vi/c8mhQDb9Qbg/maxresdefault.jpg', 'blue', 1490218327),
(39, 'Adam', 'Vandam', 'raketa@prujem.com', '$2y$10$fvhP8xnIM9CYB3VGzwMaOeU11eVlfI6rBCbLlywaN7usKOYmElva6', 'https://s-media-cache-ak0.pinimg.com/originals/0e/a2/48/0ea248b9a893581962b223f9713b6182.jpg', 'red', 1490303260),
(42, 'Tos nevěděl', 'co ty retardo', 'akosed@gmail.com', '$2y$10$jh7D44MoEdaT.vD2rM3Jheyn1XdyYWlz8xIoBzOHz8ZHJYHPRCaTm', 'assets/default-avatar.jpg', 'red', 1490304326),
(40, 'Redy', 'W', 'redy@w', '$2y$10$63iZndgQ9mIKKNA.KkAP6.Xh04MuZLldRiWKjI.qBn710IrkChDjO', 'https://i.ytimg.com/vi/qmLHFu5rfoI/hqdefault.jpg', 'orange', 1490304067),
(41, 'zolik', '22', 'zolo@22', '$2y$10$e2vZ/h03arPl02.B1ZMw/.zwVxULM581altvBoq8oHHorP0gKRvE6', 'https://i.ytimg.com/vi/_8AhESiTKD0/maxresdefault.jpg', 'red', 1490304143),
(50, 'noskop', 'noskop', 'noskop@noskop', '$2y$10$H3vSzQwUrnsXsgg8w/8C4OXMLcxWQ9Fcht4fT6s0VsUKWtbPWFPSi', 'assets/default-avatar.jpg', 'blue', 1491145094),
(46, 'Kuli', 'Očko', 'kuliocko@kulikuli.cz', '$2y$10$/SZ.cZmWFzHVunOE6K9ZlOZYP0YaCnptVr4hQDkbTOuBOuHeyTJeO', 'assets/default-avatar.jpg', 'indigo', 1490724329),
(49, 'Matěj', 'Krčín', 'krcin.matt@seznam.cz', '$2y$10$DjgDfMZT6rcO5QhanKZfd.PrSvPDEn/ZhqDEDc265vy.mjRZv/qEq', 'https://i.ytimg.com/vi/evdv6hFrxpw/maxresdefault.jpg', 'red', 1490806448),
(48, 'Chuck', 'Norris', 'chuck@norris.cz', '$2y$10$q3yIe7edU2ia6szBGbWqy.GQVkkqcPzrW6L.AR6s6AfUeF2gEYn7G', 'http://www.spektra.wz.cz/tabor09/chuck/chuck1.jpg', 'orange', 1490784921),
(51, 'Jakub', 'Marikos', 'jakub@eda', '$2y$10$2BXcF397qK7sdIbP3DLhb.tSujc/sONkt2QGMo73xiQfUyoJn/qQ2', 'assets/default-avatar.jpg', 'orange', 1491321272),
(52, 'Danuska', 'Tranová ', 'danisek39@gmail.com', '$2y$10$tiGnde8el7j97sYrsPGpM.JM94lEWNIjaBlvZpJMZLWx0gNccpqPu', 'assets/default-avatar.jpg', 'cyan', 1491324016),
(56, 'Normies', 'Begone', 'vladimir.zabransky@seznam.cz', '$2y$10$D9IzBQJQJWPyRD1hwVHGoe.iwuDvbFHvn7tn8qKiXxKW32Z0zsj.W', 'https://i.warosu.org/data/lit/img/0072/75/1445675131472.jpg', 'black', 1491464959),
(54, 'tomas', 'nguyen', 'ngkikokot1201@seznam.cz', '$2y$10$93b8VsXBuQrzDfpwyAxnX.8MqmYBRGhDz3RLz/mNJ5dMkQSwUYULC', 'assets/default-avatar.jpg', 'green', 1491393422),
(57, 'test', 'estse', 'test@testik', '$2y$10$i1tQtj5JsVrMeewujRo5YeSdwbk1lcMmv5xynzJDidFpyVjk4P4pm', 'assets/default-avatar.jpg', 'green', 1491761079);

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`id`);

--
-- Klíče pro tabulku `follows`
--
ALTER TABLE `follows`
  ADD PRIMARY KEY (`id`);

--
-- Klíče pro tabulku `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Klíče pro tabulku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `feed`
--
ALTER TABLE `feed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT pro tabulku `follows`
--
ALTER TABLE `follows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
--
-- AUTO_INCREMENT pro tabulku `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pro tabulku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
