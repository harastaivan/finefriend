-- phpMyAdmin SQL Dump
-- version 4.4.4
-- http://www.phpmyadmin.net
--
-- Počítač: sql.endora.cz:3308
-- Vytvořeno: Úte 04. dub 2017, 17:33
-- Verze serveru: 5.6.28-76.1
-- Verze PHP: 5.4.45

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `finefriend`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `feed`
--

CREATE TABLE IF NOT EXISTS `feed` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `text` varchar(200) NOT NULL,
  `timestamp` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

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
(29, 49, 'Hello belongs to the all good people of VapeNation', 1490806520);

-- --------------------------------------------------------

--
-- Struktura tabulky `follows`
--

CREATE TABLE IF NOT EXISTS `follows` (
  `id` int(11) NOT NULL,
  `follower_id` int(11) NOT NULL,
  `followed_id` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

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
(61, 34, 48, 0),
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
(60, 48, 41, 0);

-- --------------------------------------------------------

--
-- Struktura tabulky `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
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
(0, 34, 38, 'A-a-a-a-hoj T-t-tome!', 1490713370),
(0, 38, 34, 'Co je kurva?', 1490713389),
(0, 34, 35, 'Bejre!', 1490713430),
(0, 35, 34, 'JEBEEEEJ', 1490713458),
(0, 46, 33, 'hey', 1490724348),
(0, 46, 39, 'mrdko harry to docela zabiji', 1490724373),
(0, 33, 46, 'hou', 1490724453),
(0, 33, 34, 'ty jsi zabiják\r\n', 1490724599),
(0, 33, 34, 'gl tyvole, dobre ty:D nerde:DD', 1490724646),
(0, 33, 34, 'gl tyvole, dobre ty:D nerde:DD', 1490724909),
(0, 33, 34, 'gl tyvole, dobre ty:D nerde:DD', 1490727515),
(0, 36, 34, 'motůrky :D\r\n', 1490784769),
(0, 34, 36, '????', 1490784792),
(0, 36, 34, 'budem programovat za týden :P\r\n', 1490784813),
(0, 36, 38, 'wanna rob a bank?', 1490784922),
(0, 36, 34, 'zkousim enter\r\nhusty!', 1490784972),
(0, 48, 33, 'čus morys\r\n', 1490784986),
(0, 36, 34, 'nefunguje, uplne k nicemu :D', 1490784987),
(0, 33, 48, 'cus more\r\n', 1490785004),
(0, 48, 33, 'šalalalaj čabajku k veceri dones\r\n', 1490785017),
(0, 34, 36, 'je to textarea takze to nefunguje, asi misto toho dam normal input', 1490785341),
(0, 34, 35, 'pls', 1490786637),
(0, 34, 35, 'pls', 1490786638),
(0, 50, 33, 'Hej ty zmrde', 1491145144);

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_czech_ci NOT NULL,
  `surname` varchar(100) COLLATE utf8_czech_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_czech_ci NOT NULL,
  `password` varchar(400) COLLATE utf8_czech_ci NOT NULL,
  `profilepic` varchar(300) COLLATE utf8_czech_ci NOT NULL,
  `color` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `timestamp` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `profilepic`, `color`, `timestamp`) VALUES
(33, 'vin', 'diesel', 'naVinDiesela@natural95.com', '$2y$10$1Ib4LrYac1HWgAU2Yx8FruZLVIywnatqctiBz.W01M6SPMTtN.j6u', 'https://pbs.twimg.com/profile_images/1158563236/Dom_400x400.JPG', 'indigo', 1489434770),
(32, 'Kappa', 'Pride', 'kappa@pride', '$2y$10$d/icN54Q7TV22X3rXK9JXucXF2ZwtUqU06YODYi0NgtqrCw8hwSu.', 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRwTQIOQKAvq3iS6Oh_vh_CCLCfN8IOc50yhfbw1a9UCLkHjSsEkxVIQQ', 'cyan', 1489399740),
(31, 'Bible', 'Thump', 'bible@thump', '$2y$10$Y8vQTaqRBD1AvXWhn2TTKOy/PRFyFMUtIDLBRz9HOA6DzZFM8cj0u', 'https://pbs.twimg.com/profile_images/577309793104175104/y2jIo9dq.png', 'pink', 1489399595),
(38, 'Tom', 'Angelo', 'tom@angelo', '$2y$10$svND79d6rkcen02sVw.rfOpbw369NJfURo5JRaIbp22phuh1iXmrm', 'http://www.postavy.cz/obrazky-thumbs/wiki/thomas-angelo-33227-wikithumb.jpg', 'green', 1490302761),
(44, 'tomas', 'cink', 'cinktomik@gmail.com', '$2y$10$LXpO2EREedsluFBwiw8WAOpv88qPt4qNt0CW/CTcqoqXPGSKaF.iO', 'https://i.gyazo.com/41fd490efd0ca48c391025113a130a68.png', 'indigo', 1490305367),
(36, 'Jenny', 'Nick', 'jindrola0@seznam.cz', '$2y$10$x3bdQEfjMw3IkBJWvBR1XOOHBTNzwYrQmTed.5hxqDvPivCB6Z4BK', 'https://i.gyazo.com/41fd490efd0ca48c391025113a130a68.png', 'green', 1490253007),
(37, 'MARINAK', ' ', 'marinak@marinak', '$2y$10$8hDbnH7RaeE2EppHcZURaeBQ7Kv1SZrXfmVEpr1g0pewpNaXrwTVa', 'http://img1.netky.sk/VIDEO-Marinaka-urazil-cesky-bulvar-Odkazal-im-toto.jpg?imageId=1178160', 'indigo', 1490257224),
(34, 'Ivan', 'Harašta', 'ivan@harasta', '$2y$10$7XazKi7vszKjEpizMfUXIeHiRR/t52641XDJb3vACyixYo1NM2fG2', 'http://files.gamebanana.com/img/ico/sprays/57822c19e1ad1.png', 'teal', 1490217871),
(35, 'Aleš', 'Bejr', 'ales@bejr', '$2y$10$ZwQmPWXXJassUDGcbgPbzejIcPJQS8tpycmuURAzrXhjlxkhgMEC6', 'https://i.ytimg.com/vi/c8mhQDb9Qbg/maxresdefault.jpg', 'blue', 1490218327),
(39, 'Adam', 'Vandam', 'raketa@prujem.com', '$2y$10$fvhP8xnIM9CYB3VGzwMaOeU11eVlfI6rBCbLlywaN7usKOYmElva6', 'https://s-media-cache-ak0.pinimg.com/originals/0e/a2/48/0ea248b9a893581962b223f9713b6182.jpg', 'red', 1490303260),
(42, 'Štěpán', 'Krčín', 'akosed@gmail.com', '$2y$10$jh7D44MoEdaT.vD2rM3Jheyn1XdyYWlz8xIoBzOHz8ZHJYHPRCaTm', 'https://i.gyazo.com/41fd490efd0ca48c391025113a130a68.png', 'orange', 1490304326),
(40, 'Redy', 'W', 'redy@w', '$2y$10$63iZndgQ9mIKKNA.KkAP6.Xh04MuZLldRiWKjI.qBn710IrkChDjO', 'https://i.ytimg.com/vi/qmLHFu5rfoI/hqdefault.jpg', 'orange', 1490304067),
(41, 'zolik', '22', 'zolo@22', '$2y$10$e2vZ/h03arPl02.B1ZMw/.zwVxULM581altvBoq8oHHorP0gKRvE6', 'https://i.ytimg.com/vi/_8AhESiTKD0/maxresdefault.jpg', 'red', 1490304143),
(50, 'noskop', 'noskop', 'noskop@noskop', '$2y$10$H3vSzQwUrnsXsgg8w/8C4OXMLcxWQ9Fcht4fT6s0VsUKWtbPWFPSi', 'noskop', 'blue', 1491145094),
(46, 'Kuli', 'Očko', 'kuliocko@kulikuli.cz', '$2y$10$/SZ.cZmWFzHVunOE6K9ZlOZYP0YaCnptVr4hQDkbTOuBOuHeyTJeO', 'https://i.gyazo.com/41fd490efd0ca48c391025113a130a68.png', 'indigo', 1490724329),
(49, 'Matěj', 'Krčín', 'krcin.matt@seznam.cz', '$2y$10$DjgDfMZT6rcO5QhanKZfd.PrSvPDEn/ZhqDEDc265vy.mjRZv/qEq', 'https://i.ytimg.com/vi/evdv6hFrxpw/maxresdefault.jpg', 'red', 1490806448),
(48, 'Chuck', 'Norris', 'chuck@norris.cz', '$2y$10$q3yIe7edU2ia6szBGbWqy.GQVkkqcPzrW6L.AR6s6AfUeF2gEYn7G', 'http://www.spektra.wz.cz/tabor09/chuck/chuck1.jpg', 'orange', 1490784921);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT pro tabulku `follows`
--
ALTER TABLE `follows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT pro tabulku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
