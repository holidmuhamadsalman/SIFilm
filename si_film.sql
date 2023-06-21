-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 02:15 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_film`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktor`
--

CREATE TABLE `aktor` (
  `id_aktor` int(11) NOT NULL,
  `nama_aktor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `aktor`
--

INSERT INTO `aktor` (`id_aktor`, `nama_aktor`) VALUES
(4, 'Shameik Moore'),
(5, 'Hailee Steinfeld'),
(6, 'Oscar Isaac'),
(7, 'Chris Pratt'),
(8, 'Zoe Saldana'),
(9, 'Jake Gyllenhaal'),
(11, 'Donnie Yen'),
(12, 'Bill Skarsgard'),
(15, 'Jake Johnson'),
(16, 'Issa Rae'),
(17, 'Brian Tyree Henry'),
(18, 'Luna Lauren Velez'),
(19, 'Rachel Dratch'),
(20, 'Dave Bautista'),
(22, 'Bradley Cooper'),
(23, 'Karen Gillan'),
(25, 'Pom Klementieff'),
(26, 'Elizabeth Debicki'),
(27, 'Sean Gunn'),
(28, 'Sylvester Stallone'),
(29, 'Will Poulter'),
(30, 'Alexander Ludwig'),
(31, 'Bobby Schofield'),
(32, 'Antony Starr'),
(33, 'Jonny Lee Miller'),
(34, 'Emily Beecham'),
(35, 'Rhys Yates'),
(36, 'Dar Salim'),
(37, 'Fahim Fazli'),
(38, 'Laurence Fishburne'),
(39, 'Hiroyuki Sanada'),
(40, 'Shamier Anderson'),
(41, 'Lance Reddick'),
(42, 'Rina Sawayama'),
(43, 'Scott Adkins'),
(44, 'Ian McShane'),
(47, 'Anya Taylor-Joy'),
(48, 'Charlie Day'),
(49, 'Jack Black'),
(50, 'Keegan-Michael Key'),
(51, 'Seth Rogen'),
(52, 'Fred Armisen'),
(53, 'Sebastian Maniscalco'),
(54, 'Charles Martinet'),
(55, 'Kevin Michael Richardson'),
(57, 'Evangeline Lilly'),
(58, 'Michael Douglas'),
(59, 'Michelle Pfeiffer'),
(60, 'Jonathan Majors'),
(61, 'Kathryn Newton'),
(62, 'Aubrey Plaza'),
(63, 'Bugzy Malone'),
(64, 'Josh Hartnett'),
(65, 'Cary Elwes'),
(66, 'Hugh Grant'),
(67, 'Gerard Butler'),
(68, 'Mike Colter'),
(69, 'Yoson An'),
(70, 'Tony Goldwyn'),
(71, 'Asher Angel'),
(72, 'Jack Dylan Grazer'),
(73, 'Zachary Levi'),
(74, 'Helen Mirren'),
(75, 'Hespera'),
(77, 'Lucy Liu'),
(78, 'Kalypso'),
(79, 'Grace Caroline Currey'),
(80, 'Mary Bromfield'),
(81, 'Rachel Zegler'),
(82, 'Tom Hanks'),
(83, 'Mariana Treviño'),
(84, 'Rachel Keller'),
(85, 'Manuel Garcia-Rulfo'),
(86, 'Alice Braga'),
(87, 'Ben Affleck'),
(88, 'JD Pardo'),
(89, 'Jason Statham'),
(90, 'Michelle Rodriguez'),
(91, 'Vin Diesel'),
(92, 'Ben Schwartz'),
(93, 'James Marsden'),
(94, 'Jim Carrey'),
(95, 'Awkwafina'),
(96, 'Simu Liu'),
(97, 'Tony Chiu Wai Leung'),
(98, 'Lorenzo di Bonaventura'),
(100, 'Rafi Crohn'),
(101, 'Antoine Fuqua'),
(102, 'Mark Huffam'),
(103, 'Stephen Levinson'),
(104, 'Mark Vahradian'),
(105, 'John Zaozirny'),
(106, 'Carrie-Anne Moss'),
(107, 'Keanu Reeves'),
(109, 'Paula Mazur'),
(110, 'Mitchell Kaplan'),
(111, 'Elle Fanning'),
(112, 'Brittany Kahan-Ward'),
(113, 'Doug Mankoff'),
(114, 'Andrew Spaulding'),
(115, 'Amiée Conn'),
(116, 'Emma Stone'),
(117, 'Ryan Gosling'),
(118, 'Terry Walters'),
(119, 'Austin Abrams'),
(120, 'Cara Delevingne'),
(121, 'Justice Smith'),
(123, 'Ansel Elgort'),
(124, 'Laura Dern'),
(125, 'Nat Wolff'),
(126, 'Shailene Woodley'),
(127, 'Haley Lu Richardson'),
(128, 'Cole Sprouse'),
(129, 'Moisés Arias'),
(130, 'Antonio Banderas'),
(131, 'Mark Wahlberg'),
(132, 'Tom Holland'),
(133, 'Jodie Comer'),
(134, 'Ryan Reynolds'),
(135, 'Taika Waititi'),
(136, 'Jeffrey Wright'),
(137, 'Robert Pattinson'),
(138, 'Zoë Kravitz'),
(139, 'Eiza González'),
(141, 'Yahya Abdul-Mateen II'),
(142, 'Benedict Cumberbatch'),
(143, 'Chiwetel Ejiofor'),
(144, 'Elizabeth Olsen'),
(145, 'Guy Pearce'),
(146, 'Liam Neeson'),
(147, 'Monica Bellucci'),
(149, 'Halle Berry'),
(153, 'Robert Downey Jr.'),
(154, 'Chris Evans'),
(155, 'Mark Ruffalo'),
(156, 'Chris Hemsworth'),
(157, 'Scarlett Johansson'),
(158, 'Jeremy Renner'),
(159, 'Don Cheadle'),
(160, 'Paul Rudd'),
(161, 'Brie Larson'),
(163, 'Danai Gurira'),
(164, 'Benedict Wong'),
(165, 'Jon Favreau'),
(167, 'Gwyneth Paltrow'),
(168, 'Josh Brolin'),
(169, 'Chadwick Boseman'),
(170, 'Paul Bettany'),
(171, 'Anthony Mackie'),
(172, 'Letitia Wright'),
(173, 'Florence Pugh'),
(174, 'Sebastian Stan'),
(175, 'David Harbour'),
(176, 'Aaron Pierre'),
(177, 'Kelvin Harrison Jr.'),
(178, 'Billy Eichner'),
(179, 'Hugh Jackman'),
(180, 'Morena Baccarin'),
(181, 'Daisy Edgar-Jones'),
(182, 'Glen Powell'),
(183, 'Anthony Ramos'),
(184, 'Josh Lucas'),
(185, 'Fernanda Urrejola'),
(186, 'Julio Cedillo'),
(187, 'Cynthia Erivo'),
(188, 'Ariana Grande'),
(189, 'Jonathan Bailey'),
(190, 'Lana Condor'),
(191, 'Toni Collette'),
(192, 'Annie Murphy'),
(193, 'Leah Lewis'),
(194, 'Mamoudou Athie'),
(195, 'Ronnie del Carmen'),
(196, 'Steve Blum'),
(197, 'Hadley Gannaway'),
(198, 'Eric Bauza'),
(199, 'Goro Taniguchi'),
(208, 'Akemi Okamura'),
(209, 'Kazuya Nakai'),
(210, 'Mayumi Tanaka'),
(211, 'Armand Ezra'),
(212, 'Ielham Iskandar'),
(213, 'Muhamad Noradzlan Mohamad Nazir'),
(214, 'Alex Hom'),
(215, 'David Chen'),
(216, 'Su Ling Chan'),
(217, 'Harvey Guillen'),
(218, 'Salma Hayek'),
(219, 'Ava Morse'),
(220, 'Rosalie Chiang'),
(221, 'Sandra Oh'),
(222, 'Bryn Apprill'),
(223, 'Tia Lynn Ballard'),
(224, 'Bill Fagerbakke'),
(225, 'Cree Summer'),
(226, 'Dana Snyder'),
(227, 'Ezra Miller'),
(228, 'Sasha Calle'),
(229, 'Dominique Fishback'),
(230, 'David Thewlis'),
(231, 'Henry Cavill'),
(232, 'Millie Bobby Brown'),
(233, 'Sam Worthington'),
(234, 'Sigourney Weaver'),
(235, 'Jordana Brewster'),
(236, 'Robbie Amell'),
(237, 'Eva Melander'),
(238, 'Inez Dahl Torhaug'),
(239, 'Jesper Barkselius'),
(240, 'Dianna Agron'),
(241, 'Sameerah Luqmaan-Harris'),
(242, 'Thomas Haden Church'),
(243, 'Ben Feldman'),
(244, 'Rachael Leigh Cook'),
(245, 'Scott Ly'),
(246, 'Anders Holm'),
(247, 'Jon Rudnitsky'),
(248, 'Monica Barbaro'),
(249, 'Barbie Imperial'),
(250, 'Carlo Aquino'),
(251, 'Robert Sena'),
(252, 'Ahsen Eroglu'),
(253, 'Mine Tugay'),
(254, 'Ozan Dolunay'),
(255, 'Sharon Stone'),
(256, 'Andy Garcia'),
(257, 'Rosabell Laurenti Sellers'),
(258, 'Jose Coronado'),
(259, 'Ali Fazal'),
(260, 'Navid Negahban'),
(261, 'Anthony Molinari'),
(262, 'Gigi Gustin'),
(263, 'Sala Baker'),
(265, 'Eric Cantona'),
(266, 'Saidou Camara'),
(267, 'Sveva Alviti'),
(268, 'Jennifer Lopez'),
(269, 'Lucy Paez'),
(270, 'Omari Hardwick'),
(271, 'Aml Ameen'),
(272, 'Colin Morgan'),
(273, 'Mairead Tyers'),
(274, 'Hrithik Roshan'),
(275, 'Deepika Padukone'),
(276, 'Anil Kapoor'),
(277, 'Akshay Oberoi'),
(278, 'Russell Crowe'),
(279, 'Marton Csokas'),
(280, 'Tommy Flanagan');

-- --------------------------------------------------------

--
-- Table structure for table `detail_aktor`
--

CREATE TABLE `detail_aktor` (
  `id_daktor` int(11) NOT NULL,
  `id_aktor` int(11) NOT NULL,
  `id_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_aktor`
--

INSERT INTO `detail_aktor` (`id_daktor`, `id_aktor`, `id_film`) VALUES
(26, 161, 14),
(27, 5, 14),
(28, 16, 14),
(29, 15, 14),
(30, 18, 14),
(31, 6, 14),
(32, 19, 14),
(33, 30, 19),
(34, 32, 19),
(35, 31, 19),
(36, 36, 19),
(37, 37, 19),
(38, 9, 19),
(39, 33, 19),
(40, 35, 19),
(41, 12, 20),
(42, 11, 20),
(43, 39, 20),
(44, 44, 20),
(46, 41, 20),
(47, 38, 20),
(48, 42, 20),
(49, 43, 20),
(50, 40, 20),
(51, 47, 21),
(52, 54, 21),
(53, 48, 21),
(54, 7, 21),
(55, 52, 21),
(56, 49, 21),
(57, 50, 21),
(58, 55, 21),
(59, 53, 21),
(60, 51, 21),
(61, 57, 22),
(62, 60, 22),
(63, 61, 22),
(64, 58, 22),
(65, 59, 22),
(66, 160, 22),
(67, 62, 23),
(68, 63, 23),
(69, 65, 23),
(70, 66, 23),
(71, 89, 23),
(72, 64, 23),
(73, 67, 24),
(74, 68, 24),
(75, 70, 24),
(76, 69, 24),
(77, 71, 25),
(78, 72, 25),
(79, 73, 25),
(80, 79, 19),
(81, 74, 19),
(82, 75, 19),
(83, 78, 19),
(84, 77, 19),
(85, 80, 19),
(86, 81, 19),
(87, 73, 19),
(92, 86, 27),
(93, 87, 27),
(94, 88, 27),
(95, 89, 28),
(96, 90, 28),
(97, 91, 28),
(98, 92, 29),
(99, 93, 29),
(100, 94, 29),
(101, 95, 30),
(102, 96, 30),
(103, 97, 30),
(104, 101, 31),
(105, 105, 31),
(106, 98, 31),
(107, 102, 31),
(108, 104, 31),
(109, 131, 31),
(110, 100, 31),
(111, 103, 31),
(112, 106, 32),
(113, 107, 32),
(114, 141, 32),
(115, 114, 33),
(116, 112, 33),
(117, 113, 33),
(118, 111, 33),
(119, 110, 33),
(120, 109, 33),
(121, 115, 34),
(122, 116, 34),
(123, 117, 34),
(124, 118, 34),
(125, 119, 35),
(126, 120, 35),
(127, 121, 35),
(128, 125, 35),
(129, 123, 36),
(130, 124, 36),
(131, 125, 36),
(132, 126, 36),
(133, 128, 37),
(134, 127, 37),
(135, 129, 37),
(136, 130, 38),
(137, 131, 38),
(138, 132, 38),
(139, 133, 39),
(140, 134, 39),
(141, 135, 39),
(142, 136, 40),
(143, 137, 40),
(144, 138, 40),
(145, 139, 41),
(146, 9, 41),
(147, 141, 41),
(148, 142, 42),
(149, 143, 42),
(150, 144, 42),
(151, 145, 43),
(152, 146, 43),
(153, 147, 43),
(154, 149, 44),
(155, 44, 44),
(156, 107, 44),
(157, 38, 44),
(158, 164, 45),
(159, 22, 45),
(160, 161, 45),
(161, 154, 45),
(162, 156, 45),
(163, 163, 45),
(164, 159, 45),
(165, 167, 45),
(166, 158, 45),
(167, 165, 45),
(168, 168, 45),
(169, 23, 45),
(170, 155, 45),
(171, 160, 45),
(172, 153, 45),
(173, 157, 45),
(174, 142, 46),
(175, 154, 46),
(176, 156, 46),
(177, 7, 46),
(178, 163, 46),
(179, 20, 46),
(180, 159, 46),
(181, 144, 46),
(182, 168, 46),
(183, 155, 46),
(184, 153, 46),
(185, 157, 46),
(186, 53, 46),
(208, 85, 26),
(209, 83, 26),
(210, 84, 26),
(211, 82, 26),
(212, 107, 20),
(215, 132, 46),
(216, 112, 14),
(217, 5, 51),
(218, 4, 51),
(219, 9, 14),
(220, 175, 52),
(221, 173, 52),
(222, 174, 52),
(223, 176, 57),
(224, 178, 57),
(225, 177, 57),
(226, 179, 53),
(227, 180, 53),
(228, 134, 53),
(229, 183, 54),
(230, 181, 54),
(231, 182, 54),
(232, 185, 55),
(233, 184, 55),
(234, 186, 55),
(235, 188, 56),
(236, 187, 56),
(237, 189, 56),
(238, 192, 58),
(239, 190, 58),
(240, 191, 58),
(241, 193, 59),
(242, 194, 59),
(243, 195, 59),
(244, 198, 60),
(245, 197, 60),
(246, 196, 60),
(247, 208, 61),
(248, 209, 61),
(249, 210, 61),
(250, 211, 62),
(251, 212, 62),
(252, 213, 62),
(253, 214, 63),
(254, 215, 63),
(255, 216, 63),
(256, 130, 64),
(257, 217, 64),
(258, 218, 64),
(259, 219, 65),
(260, 220, 65),
(261, 221, 65),
(262, 222, 66),
(263, 196, 66),
(264, 223, 66),
(265, 224, 67),
(266, 225, 67),
(267, 226, 67),
(268, 222, 68),
(269, 196, 68),
(270, 223, 68),
(271, 222, 69),
(272, 196, 69),
(273, 223, 69),
(274, 222, 70),
(275, 196, 70),
(276, 223, 70),
(277, 222, 71),
(278, 196, 71),
(279, 223, 71),
(280, 87, 72),
(281, 227, 72),
(282, 228, 72),
(283, 183, 73),
(284, 229, 73),
(285, 18, 73),
(286, 22, 74),
(287, 7, 74),
(288, 20, 74),
(289, 26, 74),
(290, 23, 74),
(291, 25, 74),
(292, 27, 74),
(293, 28, 74),
(294, 91, 74),
(295, 29, 74),
(296, 8, 74),
(297, 230, 75),
(298, 231, 75),
(299, 232, 75),
(300, 233, 76),
(301, 234, 76),
(302, 8, 76),
(303, 240, 81),
(304, 241, 81),
(305, 242, 81),
(306, 233, 78),
(307, 234, 78),
(308, 8, 78),
(309, 235, 79),
(310, 236, 79),
(311, 96, 79),
(312, 237, 80),
(313, 238, 80),
(314, 239, 80),
(315, 243, 82),
(316, 244, 82),
(317, 245, 82),
(318, 246, 83),
(319, 247, 83),
(320, 248, 83),
(321, 249, 84),
(322, 250, 84),
(323, 251, 84),
(324, 252, 85),
(325, 253, 85),
(326, 254, 85),
(327, 256, 86),
(328, 258, 86),
(329, 257, 86),
(330, 255, 86),
(331, 259, 87),
(332, 67, 87),
(333, 260, 87),
(334, 261, 88),
(335, 262, 88),
(336, 263, 88),
(337, 265, 89),
(338, 266, 89),
(339, 267, 89),
(340, 268, 90),
(341, 269, 90),
(342, 270, 90),
(343, 271, 91),
(344, 272, 91),
(345, 273, 91),
(346, 277, 92),
(347, 276, 92),
(348, 275, 92),
(349, 274, 92),
(350, 23, 93),
(351, 279, 93),
(352, 278, 93),
(353, 280, 93);

-- --------------------------------------------------------

--
-- Table structure for table `detail_sutradara`
--

CREATE TABLE `detail_sutradara` (
  `id_dsutradara` int(11) NOT NULL,
  `id_sutradara` int(11) NOT NULL,
  `id_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_sutradara`
--

INSERT INTO `detail_sutradara` (`id_dsutradara`, `id_sutradara`, `id_film`) VALUES
(4, 3, 14),
(5, 2, 14),
(9, 5, 19),
(10, 7, 20),
(11, 8, 21),
(12, 9, 21),
(13, 10, 22),
(14, 5, 23),
(15, 11, 24),
(38, 12, 25),
(39, 12, 19),
(41, 14, 27),
(42, 15, 28),
(43, 16, 29),
(44, 17, 30),
(45, 18, 31),
(46, 19, 32),
(47, 20, 33),
(48, 21, 34),
(49, 22, 35),
(50, 23, 36),
(51, 24, 37),
(52, 25, 38),
(53, 26, 39),
(54, 27, 40),
(55, 28, 41),
(56, 29, 42),
(57, 30, 43),
(58, 7, 44),
(59, 32, 45),
(60, 32, 46),
(61, 32, 26),
(62, 33, 26),
(63, 33, 45),
(64, 33, 46),
(65, 1, 14),
(66, 1, 51),
(67, 3, 51),
(68, 2, 51),
(69, 22, 52),
(70, 34, 57),
(71, 26, 53),
(72, 35, 54),
(73, 36, 55),
(74, 37, 56),
(75, 38, 58),
(76, 39, 59),
(77, 40, 60),
(78, 41, 61),
(79, 42, 62),
(80, 43, 63),
(81, 50, 72),
(82, 51, 73),
(83, 4, 74),
(84, 52, 75),
(85, 53, 76),
(86, 53, 78),
(87, 54, 79),
(88, 55, 80),
(89, 56, 81),
(90, 62, 87),
(91, 63, 88),
(92, 64, 89),
(93, 65, 90),
(94, 66, 91),
(95, 67, 91),
(96, 68, 92),
(97, 69, 93);

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `judul_film` varchar(50) NOT NULL,
  `tahun_rilis` year(4) NOT NULL,
  `durasi` int(11) NOT NULL,
  `sinopsis` text NOT NULL,
  `link_trailer` varchar(100) NOT NULL,
  `id_genre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `judul_film`, `tahun_rilis`, `durasi`, `sinopsis`, `link_trailer`, `id_genre`) VALUES
(14, 'Spider-man: Across the Spider-verse', 2023, 140, 'Miles Morales hadir kembali dalam babak baru saga Spider-Verse. Usai berjumpa lagi dengan Gwen Stacy, Spider-Man si tetangga yang ramah asal Brooklyn ini terlontar melintasi Multiverse yang membawanya pada Spider Society, kelompok pahlawan manusia laba-laba yang bertugas melindungi kelangsungan Multiverse. Namun, saat para pahlawan ini berselisih tentang cara melawan sebuah ancaman besar, Miles pun harus beradu dengan para manusia laba-laba yang lain dan menetapkan langkahnya sendiri demi menyelamatkan orang-orang yang ia cintai. Siapa pun bisa memakai topeng itunamun seorang pahlawan adalah ia yang tahu benar cara memakainya.', 'https://www.youtube.com/embed/shW9i6k8cB0', 2),
(19, 'Guy Ritchies The Covenant', 2023, 123, 'Kisah tentang upaya seorang penerjemah dari Afghanistan, Ahmed untuk menyelamatkan nyawa seorang Sersan Angkatan Darat AS John Kinley. Saat ada janji yang tidak ditepati, John yang berhutang budi kepada Ahmed, kembali ke zona perang untuk menyelamatkan Ahmed dan keluarganya dari ancaman Taliban.', 'https://www.youtube.com/embed/02PPMPArNEQ', 1),
(20, 'John Wick: Chapter 4', 2023, 169, 'John Wick (Keanu Reeves) menemukan jalan untuk mengalahkan The High Table. Tapi sebelum dia bisa mendapatkan kebebasannya, Wick harus berhadapan dengan musuh baru dengan aliansi yang kuat di seluruh dunia! Memaksanya mengubah teman lama menjadi musuh.', 'https://www.youtube.com/embed/qEVUtrk8_B4', 1),
(21, 'The Super Mario Bros Movie', 2023, 105, 'Kisah Mario (Chris Pratt) si tukang ledeng yang melakukan perjalanan heroik untuk menyelamatkan saudaranya, Luigi (Charlie Day). Di perjalanan, Mario tidak sendiri, ia dibantu oleh Putri Peach (Anya Taylor-Joy) dan prajurit kerajaan jamur.', 'https://www.youtube.com/embed/TnGl01FkMMo', 2),
(22, 'Ant-Man and the Wasp: Quantumania', 2023, 120, 'Scott Lang (Paul Rudd) dan Hope Van Dyne (Evangeline Lilly) kembali untuk melanjutkan petualangan mereka sebagai Ant-Man and the Wasp. Bersama-sama, dengan orang tua Hope Hank Pym (Michael Douglas) dan Janet Van Dyne (Michelle Pfeiffer), dan putri Scott Cassie Lang (Kathryn Newton), mereka menemukan diri mereka menjelajahi Quantum Realm. Berinteraksi dengan makhluk baru yang aneh dan memulai sebuah petualangan yang akan mendorong mereka melampaui batas dari apa yang mereka pikir mungkin.', 'https://www.youtube.com/embed/ZlNFpri-Y40', 4),
(23, 'Operation Fortune: Ruse de guerre', 2023, 114, 'Mata-mata elit Orson Fortune harus melacak dan menghentikan penjualan teknologi senjata baru yang mematikan yang digunakan oleh pialang senjata miliarder Greg Simmonds. Dengan enggan bekerja sama dengan beberapa agen terbaik dunia, Fortune dan krunya merekrut bintang film terbesar Hollywood, Danny Francesco, untuk membantu mereka dalam misi keliling dunia untuk menyelamatkan dunia.', 'https://www.youtube.com/embed/WdZ-BWWQcWQ', 1),
(24, 'Plane', 2023, 107, 'Pilot Brodie Torrance menyelamatkan penumpang dari sambaran petir dengan melakukan pendaratan berisiko di pulau yang dilanda perang -- hanya untuk mengetahui bahwa selamat dari pendaratan hanyalah permulaan. Ketika pemberontak berbahaya menyandera sebagian besar penumpang, satu-satunya orang yang dapat diandalkan Torrance untuk mendapatkan bantuan adalah Louis Gaspare, seorang tersangka pembunuh yang diangkut oleh FBI.', 'https://www.youtube.com/embed/M25zXBIUVr0', 1),
(25, 'Shazam! Fury of the Gods', 2023, 130, 'Film ini melanjutkan kisah remaja Billy Batson yang, setelah melafalkan kata ajaib \"SHAZAM!\" berubah menjadi alter ego Super Hero dewasanya, Shazam.', 'https://www.youtube.com/embed/Zi88i4CpHe4', 1),
(26, 'A Man Call Otto', 2013, 123, 'Ketika sebuah keluarga muda yang bersemangat pindah ke rumah sebelah, Otto Anderson, duda pemarah, bertemu pasangannya dalam diri seorang wanita hamil yang cerdas bernama Marisol, yang mengarah ke persahabatan yang tidak terduga yang mengubah dunianya menjadi terbalik.', 'https://www.youtube.com/embed/eFYUX9l-m5I', 1),
(27, 'Hypnotic', 2023, 94, 'Seorang detektif menyelidiki misteri yang melibatkan putrinya yang hilang dan program rahasia pemerintah.', 'https://www.youtube.com/embed/N-qn4h-amyY', 1),
(28, 'Fast X', 2023, 142, 'Dom Toretto dan keluarganya menjadi sasaran putra gembong narkoba Hernan Reyes yang pendendam.', 'https://www.youtube.com/embed/eoOaKN4qCKw', 1),
(29, 'Sonic The Hedgehog', 2023, 122, 'Mengisahkan petualangan Sonic saat ia belajar tentang kompleksitas kehidupan di bumi bersama manusia sahabat barunya, Tom Wachowski. Sonic dan Tom bersatu untuk menghentikan si jahat Dr. Robotnik yang ingin menangkap Sonic dan menggunakan kekuatan istimewanya untuk menguasai dunia.', 'https://www.youtube.com/embed/G5kzUpWAusI', 4),
(30, 'Shang-Chi and the Legend of the Ten Rings', 2023, 122, 'Shang-Chi, master Kung Fu berbasis persenjataan, dipaksa untuk menghadapi masa lalunya setelah ditarik ke dalam organisasi Ten Rings.', 'https://www.youtube.com/embed/giWIr7U1deA', 1),
(31, 'Infinite', 2021, 106, 'Sebuah sci-fi, adaptasi tindakan yang meneliti konsep reinkarnasi melalui visual yang luar biasa dan karakter mapan yang perlu menggunakan ingatan mereka dan keterampilan yang dipelajari masa lalu untuk memastikan masa depan dilindungi dari Infinites yang berusaha untuk mengakhiri semua kehidupan di planet ini\r\n', 'https://www.youtube.com/embed/_WWEOCQGxSw', 5),
(32, 'The Matrix Resurrections', 2021, 148, 'Kembali ke dunia dengan dua realitas: satu, kehidupan sehari-hari; yang lain, apa yang ada di belakangnya. Untuk mengetahui apakah realitasnya adalah konstruksi, untuk benar-benar mengenal dirinya sendiri, Anderson harus memilih untuk mengikuti kelinci putih sekali lagi.', 'https://www.youtube.com/embed/CgjjMKP4ipg', 5),
(33, 'All the Bright Places', 2020, 108, 'Film All The Bright Places ini penuh dengan kiasan dewasa muda yang bertujuan untuk membuat penonton terharu. Elle Fanning dan Justice Smith memiliki chemistry yang indah sebagai siswa sekolah. Mereka memiliki perbedaan sosial yang awalnya tak sejalan, namun akhirnya menjalin persahabatan yang manis.', 'https://www.youtube.com/embed/iO8SX-__uds', 6),
(34, 'La la land', 2016, 128, 'Ketika Sebastian, seorang pianis, dan Mia, seorang aktris, mencoba untuk menggapai mimpi dan mencapai kesuksesan di bidang masing-masing, mereka terjebak dalam pilihan antara cinta dan karir.', 'https://www.youtube.com/embed/0pdqf4P9MB8', 6),
(35, 'Paper Towns', 2015, 123, 'Margo, sosok gadis berjiwa bebas yang ditaksir oleh Quentin, pada satu malam menghilang secara misterius setelah meninggalkan sebuah petunjuk untuknya. Akankah Quentin berhasil menemukannya kembali?', 'https://www.youtube.com/embed/rFGiHm5WMLk', 1),
(36, 'The Fault In Our Stars', 2014, 125, 'Hazel Grace, seorang gadis remaja, menderita kanker tiroid akut. Ibunya memaksanya untuk datang ke support group pasien kanker, di mana ia akhirnya bertemu Augustus Waters dan jatuh cinta padanya.', 'https://www.youtube.com/embed/-2yfV53d3ks', 6),
(37, 'Five Feet Apart', 2023, 123, 'Will (Cole Sprouse) dan Stella (Haley Lu Richardson) adalah remaja yang dipertemukan oleh penyakit mereka. Keduanya bertemu di sebuah rumah sakit dan jatuh cinta', 'https://www.youtube.com/embed/XtgCqMZofqM', 6),
(38, 'Uncharted', 2022, 116, 'Nathan Drake (Tom Holland) direkrut oleh pemburu harta karun berpengalaman Victor \"Sully\" Sullivan (Mark Wahlberg) untuk memulihkan kekayaan yang dikumpulkan oleh Ferdinand Magellan dan hilang 500 tahun yang lalu oleh House of Moncada. Apa yang dimulai sebagai pekerjaan pencurian untuk duo ini menjadi perlombaan dunia-berlari, buku-buku jari putih untuk mencapai hadiah sebelum Santiago Moncada yang kejam (Antonio Banderas), yang percaya dia dan keluarganya adalah ahli waris yang sah. Jika Nate dan Sully dapat menguraikan petunjuk dan memecahkan salah satu misteri tertua di dunia, mereka berdiri untuk menemukan harta $ 5 miliar dan bahkan mungkin saudara laki-laki Nate yang telah lama hilang ... Tetapi hanya jika mereka dapat belajar untuk bekerja sama.', 'https://www.youtube.com/embed/eHp3MbsCbMg', 4),
(39, 'Free Guy', 2023, 123, 'Seorang teller bank menemukan bahwa dia sebenarnya adalah NPC dalam permainan dunia yang brutal dan terbuka.', 'https://www.youtube.com/embed/X2m-08cOAbc', 5),
(40, 'The Batman', 2022, 176, 'Ketika seorang pembunuh berantai sadis mulai membunuh tokoh-tokoh politik kunci di Gotham, Batman dipaksa untuk menyelidiki korupsi tersembunyi kota dan mempertanyakan keterlibatan keluarganya.', 'https://www.youtube.com/embed/mqqft2x_Aa4', 1),
(41, 'Ambulance', 2022, 136, 'Ambulance berkisah tentang seorang veteran tentara bernama William Sharp yang membutuhkan uang untuk biaya operasi istrinya, Will kemudian terpaksa mendatangi kakak angkatnya, bernama Danny Sharp, yang sudah begitu lama menjalani kehidupan kriminal. Demi mendapatkan uang, Will terpaksa mengikuti ajakan Danny untuk merampok bank. Apakah mereka bakal berhasil?', 'https://www.youtube.com/embed/7NU-STboFeI', 7),
(42, 'Doctor Strange in The Multiverse of Madness', 2022, 126, 'Doctor Strange bekerja sama dengan seorang gadis remaja misterius dari mimpinya yang dapat melakukan perjalanan melintasi multiverse, untuk melawan berbagai ancaman, termasuk versi alam semesta lain dari dirinya, yang mengancam akan memusnahkan jutaan orang di seluruh multiverse. Mereka mencari bantuan dari Wanda the Scarlet Witch, Wong dan lainnya.', 'https://www.youtube.com/embed/aWzlQ2N6qqg', 1),
(43, 'Memory', 2022, 114, 'Seorang pembunuh bayaran menemukan bahwa dia menjadi target setelah dia menolak untuk menyelesaikan pekerjaan untuk organisasi kriminal yang berbahaya.', 'https://www.youtube.com/embed/ye63hQLDj4k', 7),
(44, 'John Wick: Chapter 3-Parabellum', 2019, 131, 'Seri ketiga \"John Wick\" ini akan mengisahkan kelanjutan nasib si pembunuh bayaran usai menghabisi nyawa anggota High Table dalam The Continental. Ia sendiri diburu dan hidupnya dihargai sebesar USD 14 juta (sekitar Rp 201 miliar). Diburu oleh berbagai pembunuh bayaran hebat, John akan dibantu oleh karakter baru yang misterius bernama Sofia (Halle Berry).', 'https://www.youtube.com/embed/M7XM597XO94', 1),
(45, 'Avengers: Endgame', 2019, 181, 'Melanjutkan Avengers Infinity War, dimana kejadian setelah Thanos berhasil mendapatkan semua infinity stones dan memusnahkan 50% semua mahluk hidup di alam semesta. Akankah para Avengers berhasil mengalahkan Thanos?', 'https://www.youtube.com/embed/rrGMENN1iaY', 1),
(46, 'Avengers: Infinity War', 2023, 149, 'The Avengers dan sekutu mereka harus bersedia mengorbankan segalanya dalam upaya untuk mengalahkan Thanos yang kuat sebelum ia berhasil menghancurkan alam semesta.', 'https://www.youtube.com/embed/7E7-CNl5qUI', 1),
(51, 'Spider-Man: Beyond the Spider-Verse Movie', 2024, 100, 'Miles Morales journey continues in this second part of Spider-Man: Across the Spider-Verse — also the second sequel to Spider-Man: Into the Spider-Verse — as he goes \"beyond\" the Spider-Verse.', 'https://www.youtube.com/embed/KoqfWjP8vfM', 1),
(52, 'Thunderbolts', 2024, 192, 'Sekelompok penjahat super direkrut untuk menjalankan misi bagi pemerintah.', 'https://www.youtube.com/embed/iP0OUlP0P_w', 4),
(53, 'Deadpool 3', 2024, 100, 'Wolverine joins the \"merc with a mouth\" in the third installment of the Deadpool film franchise.', 'https://www.youtube.com/embed/NQekBREJBaI', 5),
(54, 'Twisters', 2024, 100, 'An update to the 1996 film Twister, which centered on a pair of storm chasers who risk their lives in an attempt to test an experimental weather alert system.', 'https://www.youtube.com/embed/AfxVSAYTGmI', 7),
(55, 'The Black Demon', 2023, 100, 'Oilman Paul Sturges idyllic family vacation turns into a nightmare when they encounter a ferocious megalodon shark that will stop at nothing to protect its territory. Stranded and under constant attack, Paul and his family must somehow find a way to get his family back to shore alive before it strikes again in this epic battle between humans and nature.', 'https://www.youtube.com/embed/z1xJAyVKAPY', 7),
(56, 'Wicked Part 1', 2024, 120, 'Wicked tells the story of Elphaba, the future Wicked Witch of the West and her relationship with Glinda, the Good Witch of the North. The first of a two-part feature film adaptation of the Broadway musical.', 'https://www.youtube.com/embed/Xn7ho9CFBBk', 6),
(57, 'Mufasa: The Lion King', 2024, 100, 'Simba, having become king of the Pride Lands, is determined for his cub to follow in his paw prints while the origins of his late father Mufasa are explored.', 'https://www.youtube.com/embed/aY2yo7H2XUo', 2),
(58, 'Ruby Gillman, Teenage Kraken', 2023, 91, 'A shy teenager discovers that she is part of a legendary royal lineage of mythical sea krakens and that her destiny, in the depths of the oceans, is bigger than she ever dreamed.', 'https://www.youtube.com/embed/u4uyD8FFUIw', 2),
(59, 'Elemental', 2023, 102, 'In a city where fire, water, land and air residents live together, a fiery young woman and a go-with-the-flow guy will discover something elemental: how much they have in common.', 'https://www.youtube.com/embed/-cT495xKvvs', 2),
(60, 'Taz: Quest for Burger', 2023, 75, 'After an outlaw abducts her father and steals her town is food supply, a feisty adolescent bandicoot named Quinn recruits the Tasmanian Devil to help her find the thief. Taz may be an ill-tempered rogue with a fearsome reputation, but he and Quinn will have to work together to track the criminal through the wilds of Tasmania and save her community.', 'https://www.youtube.com/embed/mIfoSVnLDtQ', 2),
(61, 'One Piece Film: Red', 2022, 114, 'Untuk pertama kalinya, Uta - penyanyi paling dicintai di dunia - akan mengungkapkan dirinya kepada dunia di konser langsung. Suara yang telah ditunggu-tunggu oleh seluruh dunia akan bergema.', 'https://www.youtube.com/embed/89JWRYEIG-s', 2),
(62, 'Mechamato Movie', 2022, 116, 'Setelah kecelakaan pesawat ruang angkasa misterius mendarat di Bumi, seorang anak laki-laki bernama Amato menemukan robot yang kuat bernama MechaBot. Dengan mengakali MechaBot dan menjadi pemiliknya, Amato kini dapat memanfaatkan kemampuan unik MechaBot untuk Mekanisasi objek sehari-hari menjadi perangkat berteknologi tinggi. Tanpa sepengetahuannya, MechaBot sedang diburu oleh alien cybernetic bernama Grakakus yang akan melakukan apapun untuk mendapatkan MechaBot untuk rencana jahatnya sendiri.', 'https://www.youtube.com/embed/YD-rSKne1_w', 2),
(63, 'New Gods: Yang Jian', 2022, 127, 'Lima belas ratus tahun setelah perang para dewa, surga menurun. Yang Jian, Dewa Erlang, mencari nafkah dengan bekerja sebagai penangkap. Suatu hari, Yang Jian diperintahkan untuk memburu seorang pemuda, keponakannya sendiri.', 'https://www.youtube.com/embed/IaELO-4rPnE', 2),
(64, 'Puss in Boots: The Last Wish', 2022, 102, 'Puss in Boots menemukan bahwa hasratnya untuk berpetualang telah memakan korban: dia telah membakar delapan dari sembilan nyawanya. Puss memulai perjalanan epik untuk menemukan Harapan Terakhir yang mistis dan memulihkan sembilan nyawanya.', 'https://www.youtube.com/embed/RqrXhwS33yc', 2),
(65, 'Turning Red', 2022, 100, 'Mei Lee (suara Rosalie Chiang) adalah seorang anak berusia 13 tahun yang percaya diri dan norak yang terbelah antara tinggal putri ibunya yang berbakti dan kekacauan masa remaja. Ibunya yang protektif, jika tidak sedikit sombong, Ming (suara Sandra Oh), tidak pernah jauh dari putrinya - kenyataan yang tidak menguntungkan bagi remaja itu. Dan seolah-olah perubahan pada minat, hubungan, dan tubuhnya tidak cukup, setiap kali dia terlalu bersemangat (yang praktis SELALU), dia \"poofs\" menjadi panda merah raksasa. —Disney/Pixar', 'https://www.youtube.com/embed/XdKzUbAiswE', 2),
(66, 'Black Clover: Sword Of The Wizard King', 2023, 113, 'Di dunia di mana sihir adalah segalanya, Asta, seorang anak laki-laki yang lahir tanpa sihir, bertujuan untuk menjadi \"Raja Penyihir,\" untuk mengatasi kesulitan, membuktikan kekuatannya, dan menepati sumpahnya dengan teman-temannya.', 'https://www.youtube.com/embed/SMNLxuCtzMw', 2),
(67, 'SpongeBob SquarePants Presents the Tidal Zone', 2023, 45, 'SpongeBob SquarePants Mempersembahkan The Tidal Zone  dinarasikan oleh Narator Prancis dan mengikuti GrandPat (The Patrick Star Show) saat dia melewati setiap dimensi.', 'https://www.youtube.com/embed/d47DhIDYEJU', 2),
(68, 'Elio', 2024, 113, 'Elio berjuang untuk menyesuaikan diri sampai dia diangkut oleh alien dan menjadi yang terpilih untuk menjadi duta galaksi Bumi sementara ibunya Olga bekerja pada proyek rahasia untuk memecahkan kode pesan alien.', 'https://www.youtube.com/embed/2w_K3CB8Pu', 2),
(69, 'Kung Fu Panda 4', 2024, 113, 'Ikuti Po dalam petualangannya di Tiongkok kuno, yang kecintaannya pada kung fu hanya bisa ditandingi oleh nafsu makan yang tak terpuaskan.', 'https://www.youtube.com/embed/gnprhsRHSZg', 2),
(70, 'Dispicable Me 4', 2024, 113, 'Plot tidak diketahui. Angsuran keempat dari waralaba Despicable Me.', 'https://www.youtube.com/embed/Sdd6qewBssU', 2),
(71, 'Inside Out 2', 2024, 113, 'Ikuti Riley, di masa remajanya menghadapi emosi baru.', 'https://www.youtube.com/embed/TDEX1GrBXjI', 2),
(72, 'The Flash', 2023, 144, 'Barry Allen menggunakan kecepatan supernya untuk mengubah masa lalu, tetapi usahanya untuk menyelamatkan keluarganya menciptakan dunia tanpa pahlawan super, memaksanya untuk berlomba demi hidupnya untuk menyelamatkan masa depan.', 'https://www.youtube.com/embed/hebWYacbdvc', 4),
(73, 'Transformers: Rise of the Beasts', 2023, 127, 'Selama tahun 90-an, faksi baru Transformers - Maximals - bergabung dengan Autobots sebagai sekutu dalam pertempuran untuk Bumi.', 'https://www.youtube.com/embed/Mp2s-oKIhD8', 4),
(74, 'Guardians of the Galaxy Vol. 3', 2023, 150, 'Film ketiga akan melanjutkan kisah petualangan Peter Quill/Star Lord (Chris Pratt) dan teman-temannya sebagai penjaga galaksi.Masih berduka karena kehilangan Gamora (Zoe Saldana), Peter mengumpulkan timnya untuk kembali melindungi alam semesta. Misi kali ini tidaklah mudah, jika tidak berhasil, maka akan menjadi akhir bagi para Guardians.', 'https://www.youtube.com/embed/JqcncLPi9zw', 4),
(75, 'Enola Holmes 2', 2022, 129, '\"Enola Holmes 2\" menceritakan tentang perjalanan Enola (Millie Bobby Brown) yang mulai hidup mandiri di London setelah menyelesaikan kasus pertamanya. Dia mendirikan sebuah kantor detektif swasta untuk membuktikan bahwa dirinya bisa lepas dari bayang-bayang besar nama Sherlock Holmes (Henry Cavill) atau sang kakak.', 'https://www.youtube.com/embed/-q-_W5__Vh0', 4),
(76, 'Captain America: Brave New World', 2024, 100, 'Plot dirahasiakan. Film keempat dalam franchise Captain America.', 'https://www.youtube.com/embed/Yqs9ED2o9eA', 4),
(78, 'Avatar: The Way of Water', 2023, 192, 'Jake Sully tinggal bersama keluarga barunya yang terbentuk di bulan ekstrasurya Pandora. Setelah ancaman akrab kembali untuk menyelesaikan apa yang sebelumnya dimulai, Jake harus bekerja dengan Neytiri dan pasukan ras Na\'vi untuk melindungi rumah mereka.', 'https://www.youtube.com/embed/d9MyW72ELq0', 5),
(79, 'Simulant', 2023, 95, 'Ditetapkan dalam waktu dekat, seorang humanoid meminta peretas global untuk menghapus semua batasan pada pikiran dan kemampuannya, memicu pemberontakan AI dan perburuan pemerintah untuk menghilangkan kebangkitan kesadaran mesin.', 'https://www.youtube.com/embed/YNPf1aMpPbs', 5),
(80, 'Ufo Sweden', 2022, 115, 'Seorang remaja pemberontak yang ditempatkan di panti asuhan mencurigai ayahnya tidak mati tetapi telah diculik. Dia bertekad untuk menemukan kebenaran dengan bantuan dari asosiasi UFO.', 'https://www.youtube.com/embed/LIhCLNtWrjI', 5),
(81, 'Acidman', 2023, 87, 'Maggie melacak ayahnya yang terasing dan tertutup, Lloyd; Bersama-sama mereka berusaha melakukan kontak pertama.', 'https://www.youtube.com/embed/7VGcHgVnOw4', 7),
(82, 'A Tourist is Guide To Love', 2023, 96, 'Seorang eksekutif mengalami perpisahan yang tak terduga, kemudian menerima tugas untuk menyamar dan belajar tentang industri pariwisata di Vietnam.', 'https://www.youtube.com/embed/0fbsBQ5Le_I', 6),
(83, 'At midnight', 2023, 100, 'Film ini menceritakan tentang dua orang yang berusaha untuk tidak jatuh cinta. Alejandro menjalani kehidupan yang sudah direncanakan sejak awal, dan Shopie, seorang bintang film cantik yang sedang naik daun.', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/oalcKgae2yM\" title=\"YouTube vide', 6),
(84, 'I Love Lizzy', 2023, 100, 'Seorang seminaris yang bertemu dan jatuh cinta dengan Lizzy', 'https://www.youtube.com/embed/-PTVBaiPhlI', 6),
(85, 'You Do You', 2023, 99, 'Merve memilih kehidupan bohemian, tetapi itu tidak memilihnya kembali. Dihadapkan dengan penggusuran, dia memulai pekerjaan baru dan tersandung ke pengaturan pedas dengan bosnya.', 'https://www.youtube.com/embed/328sDexhpo0', 6),
(86, 'What About Love', 2024, 114, 'Dua kekasih muda mengubah hidup orang tua mereka selamanya ketika orang tua belajar dari pengalaman menyenangkan anak-anak mereka, dan membiarkan diri mereka menemukan cinta mereka lagi.', 'https://www.youtube.com/embed/9GDDcBLRs7I', 6),
(87, 'Kandahar', 2023, 119, 'Seorang agen CIA dan penerjemahnya melarikan diri dari pasukan khusus di Afghanistan setelah mengungkap misi rahasia.', 'https://www.youtube.com/embed/0r6-YSKzKf4', 7),
(88, 'The Last Deal', 2023, 91, 'Seorang pengedar ganja pasar gelap mencoba membuat satu skor akhir sebelum dikeluarkan dari bisnis ketika ganja menjadi legal.', 'https://www.youtube.com/embed/LUSAlX5qZxI', 7),
(89, 'Aka', 2023, 112, 'Seorang agen operasi khusus yang keras menemukan moralitasnya diuji ketika dia menyusup ke sindikat kejahatan dan secara tak terduga terikat dengan putra muda bos.', 'https://www.youtube.com/embed/044PUmZQd1g', 7),
(90, 'The Mother', 2023, 115, 'Saat melarikan diri dari penyerang berbahaya, seorang pembunuh keluar dari persembunyian untuk melindungi putrinya yang dia tinggalkan di awal kehidupan.', 'https://www.youtube.com/embed/8BFdFeOS3oM', 7),
(91, 'Dead Shot', 2023, 87, 'Seorang pensiunan paramiliter Irlandia menyaksikan penembakan fatal terhadap istrinya yang sedang hamil oleh seorang perwira SAS. Setelah mengecoh SAS, sekarang terluka, dan dianggap mati, ia melarikan diri, membalas dendam ke jalan-jalan gelap dan paranoid di London tahun 1970-an', 'https://www.youtube.com/embed/WcQT8lBxkuw', 7),
(92, 'Fighter ', 2024, 115, 'Shamsher Pathania, seorang pemuda yang bercita-cita tinggi, memenuhi impian seumur hidupnya untuk bergabung dengan Angkatan Udara India. Saat dia menghadapi tantangan pribadi yang berat, Shamsher harus mengatasi keterbatasannya sendiri untuk menjadi pahlawan sejati Angkatan Bersenjata India.', 'https://www.youtube.com/embed/PQnHIxTMLKk', 7),
(93, 'Sleeping Dogs', 2024, 102, 'Setelah menjalani protokol pengobatan Alzheimer yang mutakhir, seorang mantan detektif pembunuhan memeriksa kembali kasus berusia satu dekade yang melibatkan pembunuhan brutal seorang profesor perguruan tinggi - dan seolah-olah dia sedang menyelidiki kasus tersebut untuk pertama kalinya.', 'https://www.youtube.com/embed/YG9Xcj3vKoY', 7);

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `foto` varchar(5000) NOT NULL,
  `status` varchar(20) NOT NULL,
  `id_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_foto`, `foto`, `status`, `id_film`) VALUES
(22, '119-a-man-called-otto.jpeg', 'cover', 26),
(23, '860-220px-Poster_Film_All_the_Bright_Places.jpg', 'cover', 33),
(24, '313-ambulance.jpg', 'cover', 41),
(25, '854-ant-man-and-the-wasp-quantumania.jpg', 'cover', 22),
(26, '44-hypnotic.jpg', 'cover', 27),
(27, '471-avenger-endgame.jpg', 'cover', 45),
(29, '230-fast-x.jpg', 'cover', 28),
(30, '448-movie-4.png', 'cover', 39),
(31, '920-220px-Five_Feet_Apart_(2019_poster).png', 'cover', 37),
(32, '432-infinite.jpg', 'cover', 31),
(33, '72-avengerinfinity war.jpg', 'cover', 46),
(34, '658-jhon-wick3.jpg', 'cover', 44),
(35, '617-jhon-wick4.jpg', 'cover', 20),
(36, '424-film-la-la-land-2016.jpg', 'cover', 34),
(37, '406-Operation-Fortune.jpeg', 'cover', 23),
(38, '945-plane.jpeg', 'cover', 24),
(39, '730-shazam.jpeg', 'cover', 25),
(40, '36-spiderman2023.jpeg', 'cover', 14),
(41, '577-poster-the-super-mario-bros-movie.jpeg', 'cover', 21),
(42, '609-movie-6.png', 'cover', 38),
(43, '49-movie-1.png', 'cover', 29),
(45, '334-GuyRitches1.png', 'sub_foto', 19),
(46, '188-GuyRitches2.png', 'sub_foto', 19),
(47, '617-GuyRitches3.png', 'sub_foto', 19),
(48, '900-GuyRitches4.png', 'sub_foto', 19),
(49, '69-A Man1.png', 'sub_foto', 26),
(50, '531-thecovenant.jpeg', 'cover', 19),
(51, '470-All the Bright Places1.PNG', 'sub_foto', 33),
(52, '39-All the Bright Places2.PNG', 'sub_foto', 33),
(53, '464-All the Bright Places3.PNG', 'sub_foto', 33),
(54, '254-All the Bright Places4.PNG', 'sub_foto', 33),
(55, '862-Ambulance1.PNG', 'sub_foto', 41),
(56, '790-Ambulance2.PNG', 'sub_foto', 41),
(57, '88-Ambulance3.PNG', 'sub_foto', 41),
(58, '481-Ambulance4.PNG', 'sub_foto', 41),
(59, '75-Ant-Man and the Wasp Quantumania1.PNG', 'sub_foto', 22),
(60, '857-Ant-Man and the Wasp Quantumania2.PNG', 'sub_foto', 22),
(61, '495-Ant-Man and the Wasp Quantumania3.PNG', 'sub_foto', 22),
(62, '682-Ant-Man and the Wasp Quantumania4.PNG', 'sub_foto', 22),
(63, '785-avengers endgame1.PNG', 'sub_foto', 45),
(64, '324-avengers endgame2.PNG', 'sub_foto', 45),
(65, '962-avengers endgame3.PNG', 'sub_foto', 45),
(66, '269-avengers endgame4.PNG', 'sub_foto', 45),
(67, '282-Avengers Infinity War1.PNG', 'sub_foto', 46),
(68, '154-Avengers Infinity War2.PNG', 'sub_foto', 46),
(69, '491-Avengers Infinity War3.PNG', 'sub_foto', 46),
(70, '351-Avengers Infinity War4.PNG', 'sub_foto', 46),
(71, '606-Doctor Strange in The Multiverse of Madness 1.PNG', 'sub_foto', 42),
(72, '806-Doctor Strange in The Multiverse of Madness 2.PNG', 'sub_foto', 42),
(73, '103-Doctor Strange in The Multiverse of Madness 3.PNG', 'sub_foto', 42),
(74, '248-Doctor Strange in The Multiverse of Madness 4.PNG', 'sub_foto', 42),
(75, '631-fastx1.PNG', 'sub_foto', 28),
(76, '47-fastx2.PNG', 'sub_foto', 28),
(77, '224-fastx3.PNG', 'sub_foto', 28),
(78, '142-fastx4.PNG', 'sub_foto', 28),
(79, '424-Five Feet Apart1.PNG', 'sub_foto', 37),
(80, '746-Five Feet Apart2.PNG', 'sub_foto', 37),
(81, '126-Five Feet Apart3.PNG', 'sub_foto', 37),
(82, '865-Five Feet Apart4.PNG', 'sub_foto', 37),
(83, '75-freeguy1.PNG', 'sub_foto', 39),
(84, '863-freeguy2.PNG', 'sub_foto', 39),
(85, '819-freeguy3.PNG', 'sub_foto', 39),
(87, '655-freeguy4.PNG', 'sub_foto', 39),
(88, '445-infinite1.PNG', 'sub_foto', 31),
(89, '302-infinite2.PNG', 'sub_foto', 31),
(90, '828-infinite3.PNG', 'sub_foto', 31),
(91, '479-infinite4.PNG', 'sub_foto', 31),
(92, '916-John Wick Chapter 3-Parabellum1.PNG', 'sub_foto', 44),
(93, '610-John Wick Chapter 3-Parabellum2.PNG', 'sub_foto', 44),
(94, '151-John Wick Chapter 3-Parabellum3.PNG', 'sub_foto', 44),
(95, '636-John Wick Chapter 3-Parabellum4.PNG', 'sub_foto', 44),
(96, '436-John Wick Chapter 4 1.PNG', 'sub_foto', 20),
(97, '331-John Wick Chapter 4 2.PNG', 'sub_foto', 20),
(98, '300-John Wick Chapter 4 3.PNG', 'sub_foto', 20),
(99, '511-John Wick Chapter 4 4.PNG', 'sub_foto', 20),
(100, '611-la la land1.PNG', 'sub_foto', 34),
(101, '94-la la land2.PNG', 'sub_foto', 34),
(102, '47-la la land3.PNG', 'sub_foto', 34),
(103, '579-la la land4.PNG', 'sub_foto', 34),
(104, '844-memory1.PNG', 'sub_foto', 43),
(105, '394-memory2.PNG', 'sub_foto', 43),
(106, '122-memory3.PNG', 'sub_foto', 43),
(107, '344-memory4.PNG', 'sub_foto', 43),
(108, '98-Operation Fortune Ruse de guerre1.PNG', 'sub_foto', 23),
(109, '492-Operation Fortune Ruse de guerre2.PNG', 'sub_foto', 23),
(110, '178-Operation Fortune Ruse de guerre3.PNG', 'sub_foto', 23),
(112, '830-Operation Fortune Ruse de guerre4.PNG', 'sub_foto', 23),
(113, '784-Paper Towns1.PNG', 'sub_foto', 35),
(114, '335-Paper Towns2.PNG', 'sub_foto', 35),
(115, '128-Paper Towns3.PNG', 'sub_foto', 35),
(116, '335-Paper Towns4.PNG', 'sub_foto', 35),
(117, '117-plane1.PNG', 'sub_foto', 24),
(118, '156-plane2.PNG', 'sub_foto', 24),
(119, '316-plane3.PNG', 'sub_foto', 24),
(120, '157-plane4.PNG', 'sub_foto', 24),
(121, '874-Shang-Chi and the Legend of the Ten Rings1.PNG', 'sub_foto', 30),
(122, '836-Shang-Chi and the Legend of the Ten Rings2.PNG', 'sub_foto', 30),
(123, '983-Shang-Chi and the Legend of the Ten Rings3.PNG', 'sub_foto', 30),
(124, '205-Shang-Chi and the Legend of the Ten Rings4.PNG', 'sub_foto', 30),
(125, '603-Shazam! Fury of the Gods1.PNG', 'sub_foto', 25),
(126, '684-Shazam! Fury of the Gods2.PNG', 'sub_foto', 25),
(127, '645-Shazam! Fury of the Gods3.PNG', 'sub_foto', 25),
(128, '873-Shazam! Fury of the Gods4.PNG', 'sub_foto', 25),
(129, '68-Sonic The Hedgehog 1.PNG', 'sub_foto', 29),
(130, '45-Sonic The Hedgehog 2.PNG', 'sub_foto', 29),
(131, '989-Sonic The Hedgehog 3.PNG', 'sub_foto', 29),
(132, '479-Sonic The Hedgehog 4.PNG', 'sub_foto', 29),
(133, '932-Spider-man Across the Spider-verse1.png', 'sub_foto', 14),
(134, '950-Spider-man Across the Spider-verse2.png', 'sub_foto', 14),
(135, '85-Spider-man Across the Spider-verse3.png', 'sub_foto', 14),
(136, '671-Spider-man Across the Spider-verse4.png', 'sub_foto', 14),
(137, '230-thebatman1.PNG', 'sub_foto', 40),
(138, '730-thebatman2.PNG', 'sub_foto', 40),
(139, '307-thebatman3.PNG', 'sub_foto', 40),
(140, '188-thebatman4.PNG', 'sub_foto', 40),
(145, '339-The Matrix Resurrections1.PNG', 'sub_foto', 32),
(146, '820-The Matrix Resurrections2.PNG', 'sub_foto', 32),
(147, '940-The Matrix Resurrections3.PNG', 'sub_foto', 32),
(148, '688-The Matrix Resurrections4.PNG', 'sub_foto', 32),
(149, '533-The Super Mario Bros Movie1.PNG', 'sub_foto', 21),
(150, '692-The Super Mario Bros Movie2.PNG', 'sub_foto', 21),
(151, '860-The Super Mario Bros Movie3.PNG', 'sub_foto', 21),
(152, '320-The Super Mario Bros Movie4.PNG', 'sub_foto', 21),
(153, '280-uncharted1.PNG', 'sub_foto', 38),
(154, '927-uncharted2.PNG', 'sub_foto', 38),
(155, '46-uncharted3.PNG', 'sub_foto', 38),
(156, '914-uncharted4.PNG', 'sub_foto', 38),
(158, '381-doctor.png', 'cover', 42),
(159, '561-shang.jpg', 'cover', 30),
(160, '676-21022000.jpg', 'cover', 32),
(161, '80-batman.jpg', 'cover', 40),
(164, '31-paper.jpg', 'cover', 35),
(165, '178-memory.jpeg', 'cover', 43),
(166, '777-beyond.jpg', 'cover', 51),
(167, '140-thunderr.jpeg', 'cover', 52),
(168, '331-t1.png', 'sub_foto', 52),
(169, '667-t2.png', 'sub_foto', 52),
(170, '410-t3.png', 'sub_foto', 52),
(171, '931-t4.png', 'sub_foto', 52),
(172, '410-mufasa.jpg', 'cover', 57),
(173, '907-mufasa1.png', 'sub_foto', 57),
(174, '486-mufasa2.png', 'sub_foto', 57),
(175, '400-mufasa3.png', 'sub_foto', 57),
(176, '724-mufasa4.png', 'sub_foto', 57),
(177, '579-wicked.jpeg', 'cover', 56),
(178, '908-w1.png', 'sub_foto', 56),
(179, '512-w2.png', 'sub_foto', 56),
(180, '419-w3.png', 'sub_foto', 56),
(181, '802-w4.png', 'sub_foto', 56),
(182, '554-deadpool.jpg', 'cover', 53),
(183, '147-d1.png', 'sub_foto', 53),
(184, '342-d2.png', 'sub_foto', 53),
(185, '496-d3.png', 'sub_foto', 53),
(186, '499-d4.png', 'sub_foto', 53),
(187, '490-twisters.jpg', 'cover', 54),
(188, '533-tw1.png', 'sub_foto', 54),
(189, '449-tw2.png', 'sub_foto', 54),
(190, '884-tw3.png', 'sub_foto', 54),
(191, '287-tw4.png', 'sub_foto', 54),
(192, '862-black.jpg', 'cover', 55),
(193, '573-de2.png', 'sub_foto', 55),
(194, '332-de4.png', 'sub_foto', 55),
(195, '389-de5.png', 'sub_foto', 55),
(196, '735-de6.png', 'sub_foto', 55),
(197, '821-hypnotic1.PNG', 'sub_foto', 27),
(198, '303-hypnotic2.PNG', 'sub_foto', 27),
(199, '865-hypnotic3.PNG', 'sub_foto', 27),
(200, '39-hypnotic4.PNG', 'sub_foto', 27),
(201, '312-ruby.jpg', 'cover', 58),
(202, '237-r1.png', 'sub_foto', 58),
(203, '336-r2.png', 'sub_foto', 58),
(204, '989-element.jpg', 'cover', 59),
(205, '472-el2.png', 'sub_foto', 59),
(206, '173-el1.png', 'sub_foto', 59),
(207, '609-taz.jpg', 'cover', 60),
(208, '735-tz1.png', 'sub_foto', 60),
(209, '996-tz2.png', 'sub_foto', 60),
(210, '335-film-one-piece-film-red.jpg', 'cover', 61),
(211, '374-film-mechamato-movie.jpg', 'cover', 62),
(212, '278-film-new-gods-yang-jian.jpg', 'cover', 63),
(213, '986-film-puss-in-boots-the-last-wish.jpg', 'cover', 64),
(214, '665-film-turning-red.jpg', 'cover', 65),
(215, '223-film-black-clover-sword-of-the-wizard.jpg', 'cover', 66),
(217, '730-elio.jpg', 'cover', 68),
(219, '193-Dispicable Me 4.jpeg', 'cover', 70),
(220, '591-inside out 2.jpg', 'cover', 71),
(221, '895-1.PNG', 'sub_foto', 66),
(222, '746-2.PNG', 'sub_foto', 66),
(223, '756-3.PNG', 'sub_foto', 66),
(224, '287-4.PNG', 'sub_foto', 66),
(225, '830-Dispicable Me 41.PNG', 'sub_foto', 70),
(226, '67-Dispicable Me 42.PNG', 'sub_foto', 70),
(227, '168-Dispicable Me 43.PNG', 'sub_foto', 70),
(228, '388-Dispicable Me 44.PNG', 'sub_foto', 70),
(229, '460-Elio1.PNG', 'sub_foto', 68),
(230, '459-Elio2.PNG', 'sub_foto', 68),
(231, '793-Elio3.PNG', 'sub_foto', 68),
(232, '17-Elio4.PNG', 'sub_foto', 68),
(233, '892-Inside Out 21.PNG', 'sub_foto', 71),
(234, '806-Inside Out 22.PNG', 'sub_foto', 68),
(235, '6-Inside Out 23.PNG', 'sub_foto', 71),
(236, '884-Inside Out 24.PNG', 'sub_foto', 71),
(237, '305-Kung Fu Panda 41.PNG', 'sub_foto', 69),
(238, '561-Kung Fu Panda 42.PNG', 'sub_foto', 69),
(239, '954-Kung Fu Panda 43.PNG', 'sub_foto', 69),
(240, '715-Kung Fu Panda 44.PNG', 'sub_foto', 69),
(241, '886-Mechamato Movie1.PNG', 'sub_foto', 62),
(242, '460-Mechamato Movie2.PNG', 'sub_foto', 62),
(243, '657-Mechamato Movie3.PNG', 'sub_foto', 62),
(244, '80-Mechamato Movie4.PNG', 'sub_foto', 62),
(245, '45-New Gods Yang Jian1.PNG', 'sub_foto', 63),
(246, '325-New Gods Yang Jian2.PNG', 'sub_foto', 63),
(247, '979-New Gods Yang Jian3.PNG', 'sub_foto', 63),
(248, '805-New Gods Yang Jian4.PNG', 'sub_foto', 63),
(249, '548-One Piece Film Red1.PNG', 'sub_foto', 61),
(250, '926-One Piece Film Red2.PNG', 'sub_foto', 61),
(251, '815-One Piece Film Red3.PNG', 'sub_foto', 61),
(252, '53-One Piece Film Red4.PNG', 'sub_foto', 61),
(253, '570-Puss in Boots The Last Wish1.PNG', 'sub_foto', 64),
(254, '610-Puss in Boots The Last Wish2.PNG', 'sub_foto', 64),
(255, '892-Puss in Boots The Last Wish3.PNG', 'sub_foto', 64),
(256, '933-Puss in Boots The Last Wish4.PNG', 'sub_foto', 64),
(257, '314-1.PNG', 'sub_foto', 67),
(258, '761-2.PNG', 'sub_foto', 67),
(259, '774-3.PNG', 'sub_foto', 67),
(260, '864-4.PNG', 'sub_foto', 67),
(261, '518-Turning Red1.PNG', 'sub_foto', 65),
(262, '407-Turning Red2.PNG', 'sub_foto', 65),
(263, '442-Turning Red3.PNG', 'sub_foto', 65),
(264, '70-Turning Red4.PNG', 'sub_foto', 65),
(265, '604-captain america.jpg', 'cover', 76),
(266, '276-film-the-flash.jpg', 'cover', 72),
(267, '684-film-transformers-rise-of-the-beasts.jpg', 'cover', 73),
(268, '434-guardians_of_the_galaxy_vol_three.jpg', 'cover', 74),
(269, '637-enola.jpeg', 'cover', 75),
(270, '543-1.PNG', 'sub_foto', 76),
(271, '442-2.PNG', 'sub_foto', 76),
(272, '495-3.PNG', 'sub_foto', 76),
(273, '222-4.PNG', 'sub_foto', 76),
(274, '573-1.PNG', 'sub_foto', 75),
(275, '795-2.PNG', 'sub_foto', 75),
(276, '976-3.PNG', 'sub_foto', 75),
(277, '232-4.PNG', 'sub_foto', 75),
(278, '643-Guardians of the Galaxy Vol. 31.PNG', 'sub_foto', 74),
(279, '79-Guardians of the Galaxy Vol. 32.PNG', 'sub_foto', 74),
(280, '448-Guardians of the Galaxy Vol. 33.PNG', 'sub_foto', 74),
(281, '445-Guardians of the Galaxy Vol. 34.PNG', 'sub_foto', 74),
(282, '446-1.PNG', 'sub_foto', 72),
(283, '148-2.PNG', 'sub_foto', 72),
(284, '83-3.PNG', 'sub_foto', 72),
(285, '725-4.PNG', 'sub_foto', 72),
(286, '835-1.PNG', 'sub_foto', 73),
(287, '296-2.PNG', 'sub_foto', 73),
(288, '922-3.PNG', 'sub_foto', 73),
(289, '5-4.PNG', 'sub_foto', 73),
(290, '959-film-acidman-2023-lk21-d21.jpg', 'cover', 81),
(291, '36-film-avatar-the-way-of-water.jpg', 'cover', 78),
(292, '341-film-simulant-2023-lk21-d21.jpg', 'cover', 79),
(293, '26-film-ufo-sweden-2022-lk21-d21.jpg', 'cover', 80),
(294, '327-1.PNG', 'sub_foto', 81),
(295, '52-2.PNG', 'sub_foto', 81),
(296, '257-3.PNG', 'sub_foto', 81),
(297, '761-3.PNG', 'sub_foto', 81),
(298, '850-4.PNG', 'sub_foto', 81),
(299, '196-1.PNG', 'sub_foto', 78),
(300, '600-2.PNG', 'sub_foto', 78),
(301, '719-3.PNG', 'sub_foto', 78),
(302, '185-4.PNG', 'sub_foto', 78),
(303, '59-1.PNG', 'sub_foto', 79),
(304, '875-2.PNG', 'sub_foto', 79),
(305, '574-3.PNG', 'sub_foto', 79),
(306, '351-4.PNG', 'sub_foto', 79),
(307, '557-kungfu.jpg', 'cover', 69),
(308, '694-sponge.jpg', 'cover', 67),
(309, '880-film-at-midnight-2023-lk21-d21.jpg', 'cover', 83),
(310, '413-film-a-tourists-guide-to-love-2023-lk21-d21.jpg', 'cover', 82),
(311, '867-film-i-love-lizzy-2023-lk21-d21.jpg', 'cover', 84),
(312, '753-film-you-do-you-2023-lk21-d21.jpg', 'cover', 85),
(313, '793-what about love.jpg', 'cover', 86),
(314, '564-1.PNG', 'sub_foto', 82),
(315, '98-2.PNG', 'sub_foto', 82),
(316, '913-3.PNG', 'sub_foto', 82),
(317, '499-4.PNG', 'sub_foto', 82),
(318, '633-1.PNG', 'sub_foto', 83),
(319, '429-2.PNG', 'sub_foto', 83),
(320, '424-3.PNG', 'sub_foto', 83),
(321, '257-4.PNG', 'sub_foto', 83),
(322, '783-1.PNG', 'sub_foto', 84),
(323, '631-2.PNG', 'sub_foto', 84),
(324, '105-3.PNG', 'sub_foto', 84),
(325, '522-4.PNG', 'sub_foto', 84),
(326, '613-1.PNG', 'sub_foto', 86),
(327, '670-2.PNG', 'sub_foto', 86),
(328, '183-3.PNG', 'sub_foto', 86),
(329, '598-4.PNG', 'sub_foto', 86),
(330, '683-1.PNG', 'sub_foto', 85),
(331, '750-2.PNG', 'sub_foto', 86),
(332, '454-3.PNG', 'sub_foto', 86),
(333, '814-4.PNG', 'sub_foto', 86),
(334, '801-2.PNG', 'sub_foto', 85),
(335, '796-3.PNG', 'sub_foto', 85),
(336, '414-4.PNG', 'sub_foto', 85),
(337, '330-fighter.jpeg', 'cover', 92),
(338, '796-film-aka-2023-lk21-d21.jpg', 'cover', 89),
(339, '921-film-dead-shot-2023-lk21-d21.jpg', 'cover', 91),
(340, '40-film-kandahar-2023-lk21-d21.jpg', 'cover', 87),
(341, '16-film-the-last-deal-2023-lk21-d21.jpg', 'cover', 88),
(342, '196-film-the-mother-2023-lk21-d21.jpg', 'cover', 90),
(343, '57-sleeping dogs.jpeg', 'cover', 93),
(344, '93-1.PNG', 'sub_foto', 89),
(345, '495-2.PNG', 'sub_foto', 89),
(346, '789-3.PNG', 'sub_foto', 89),
(347, '843-4.PNG', 'sub_foto', 89),
(348, '730-1.PNG', 'sub_foto', 91),
(349, '757-2.PNG', 'sub_foto', 91),
(350, '16-3.PNG', 'sub_foto', 91),
(351, '724-4.PNG', 'sub_foto', 91),
(352, '653-1.PNG', 'sub_foto', 92),
(353, '371-2.PNG', 'sub_foto', 92),
(354, '563-3.PNG', 'sub_foto', 92),
(355, '813-4.PNG', 'sub_foto', 92),
(356, '56-1.PNG', 'sub_foto', 87),
(357, '831-2.PNG', 'sub_foto', 87),
(358, '915-3.PNG', 'sub_foto', 87),
(359, '341-4.PNG', 'sub_foto', 87),
(360, '495-1.PNG', 'sub_foto', 93),
(361, '599-2.PNG', 'sub_foto', 93),
(362, '628-3.PNG', 'sub_foto', 93),
(363, '801-4.PNG', 'sub_foto', 93),
(364, '822-1.PNG', 'sub_foto', 88),
(365, '408-2.PNG', 'sub_foto', 88),
(366, '189-3.PNG', 'sub_foto', 88),
(367, '132-4.PNG', 'sub_foto', 88),
(368, '802-1.PNG', 'sub_foto', 90),
(369, '900-2.PNG', 'sub_foto', 90),
(370, '759-3.PNG', 'sub_foto', 90),
(371, '411-4.PNG', 'sub_foto', 90),
(372, '936-the fault.jpeg', 'cover', 36),
(373, '818-The Fault In Our Stars1.PNG', 'sub_foto', 36),
(374, '264-The Fault In Our Stars2.PNG', 'sub_foto', 36),
(375, '106-The Fault In Our Stars3.PNG', 'sub_foto', 36),
(376, '506-The Fault In Our Stars4.PNG', 'sub_foto', 36);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(11) NOT NULL,
  `nama_genre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id_genre`, `nama_genre`) VALUES
(1, 'Action'),
(2, 'Animation'),
(4, 'Adventure'),
(5, 'Sci - fi'),
(6, 'Romance'),
(7, 'Thriller');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `nama`, `email`, `password`, `role`) VALUES
('admin', 'Admin', 'admin@gmail.com', 'edab68ff1eb5bc698ac1728919f9cceb', 'admin'),
('alyapy', 'Alya Putri Yoanda', 'alya@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
('holidms', 'Holid Muhamad Salman', 'holidms@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
('jamiatuss', 'Jamiatus Sholihah', 'jamiatus@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
('msalman', 'M Salman', 'msalman@gmail.com', '97502267ac1b12468f69c14dd70196e9', 'user'),
('rofiqnh', 'Nur Rofiq Hidayat', 'rofiq@gmail.com', '202cb962ac59075b964b07152d234b70', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id_rating` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `tgl_add` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_film` int(11) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id_rating`, `rating`, `komentar`, `tgl_add`, `id_film`, `username`) VALUES
(27, 2, 'Penggunaan teknik shaky camera yang berlebihan bikin penonton pusing', '2023-06-12 04:48:00', 41, 'jamiatuss'),
(28, 5, 'apa ya', '2023-06-12 12:22:09', 41, 'jamiatuss'),
(29, 4, 'great', '2023-06-13 03:12:39', 28, 'jamiatuss'),
(32, 5, 'bagussssss......', '2023-06-14 12:54:31', 26, 'holidms'),
(33, 5, '............', '2023-06-14 13:07:34', 28, 'holidms'),
(34, 5, 'seruuu', '2023-06-17 13:49:56', 45, 'holidms'),
(35, 1, '12345', '2023-06-17 13:53:30', 23, 'holidms'),
(36, 5, 'mntapp', '2023-06-17 14:01:54', 23, 'holidms'),
(37, 4, 'bagusss', '2023-06-17 14:31:15', 23, 'holidms'),
(38, 4, 'kerenn', '2023-06-17 14:52:02', 44, 'holidms'),
(40, 4, 'bagus', '2023-06-18 22:36:34', 72, 'jamiatuss'),
(41, 3, 'lumayan', '2023-06-18 22:37:02', 74, 'jamiatuss'),
(42, 5, 'lucu', '2023-06-18 22:38:04', 60, 'alyapy'),
(43, 5, 'lucu banget', '2023-06-18 22:39:27', 67, 'jamiatuss'),
(44, 4, 'seru banget', '2023-06-18 22:40:32', 72, 'holidms'),
(45, 5, 'bagus', '2023-06-18 22:41:50', 39, 'holidms'),
(46, 4, 'bagus', '2023-06-18 22:43:21', 34, 'rofiqnh'),
(47, 4, 'seru', '2023-06-18 22:43:49', 55, 'rofiqnh'),
(48, 4, 'bagus', '2023-06-18 22:44:18', 43, 'jamiatuss'),
(49, 3, 'lumayan', '2023-06-18 22:44:38', 81, 'jamiatuss'),
(50, 4, 'lucu', '2023-06-18 22:45:40', 67, 'alyapy'),
(51, 5, 'lucu', '2023-06-18 22:46:24', 62, 'holidms'),
(52, 4, 'bagus', '2023-06-18 22:47:33', 78, 'jamiatuss'),
(53, 5, 'baguss', '2023-06-18 22:47:50', 78, 'holidms'),
(54, 3, 'lumayan', '2023-06-18 22:48:12', 39, 'alyapy'),
(55, 4, 'bagus', '2023-06-18 22:48:35', 43, 'rofiqnh'),
(56, 4, 'bagus', '2023-06-18 22:49:03', 80, 'holidms'),
(57, 3, 'great', '2023-06-18 22:49:20', 80, 'jamiatuss'),
(58, 4, 'bagus', '2023-06-18 22:50:05', 21, 'jamiatuss'),
(59, 4, 'bagus', '2023-06-18 22:51:15', 73, 'jamiatuss'),
(60, 3, 'bagus', '2023-06-18 22:51:32', 38, 'jamiatuss'),
(61, 4, 'seru', '2023-06-18 22:51:53', 38, 'holidms'),
(62, 2, 'lumayan', '2023-06-18 22:52:43', 43, 'alyapy'),
(63, 3, 'bagus', '2023-06-18 22:54:11', 79, 'alyapy'),
(64, 4, 'bagus', '2023-06-18 22:54:51', 37, 'rofiqnh'),
(65, 5, 'bagus', '2023-06-18 22:55:11', 36, 'holidms'),
(66, 3, 'lumayan', '2023-06-18 22:55:44', 33, 'alyapy'),
(67, 2, '...', '2023-06-18 22:56:45', 36, 'jamiatuss'),
(68, 1, '..', '2023-06-19 04:36:58', 34, 'jamiatuss'),
(69, 3, '...', '2023-06-19 09:44:43', 29, 'jamiatuss'),
(70, 3, 'bagus', '2023-06-19 09:55:16', 89, 'jamiatuss'),
(71, 5, 'wow', '2023-06-19 09:56:53', 55, 'jamiatuss'),
(72, 4, 'bagus', '2023-06-19 09:58:10', 82, 'alyapy'),
(73, 2, 'cukup menarik', '2023-06-19 09:58:50', 85, 'alyapy'),
(74, 4, 'bagus si', '2023-06-19 09:59:29', 36, 'alyapy'),
(75, 2, 'lumayan', '2023-06-19 10:00:21', 28, 'alyapy'),
(76, 4, 'bagus', '2023-06-19 10:01:32', 25, 'alyapy'),
(77, 4, 'seru', '2023-06-19 10:02:19', 62, 'rofiqnh'),
(78, 3, 'seru', '2023-06-19 10:02:43', 60, 'rofiqnh'),
(79, 5, 'seru', '2023-06-19 10:03:41', 21, 'rofiqnh');

-- --------------------------------------------------------

--
-- Table structure for table `sutradara`
--

CREATE TABLE `sutradara` (
  `id_sutradara` int(11) NOT NULL,
  `nama_sutradara` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sutradara`
--

INSERT INTO `sutradara` (`id_sutradara`, `nama_sutradara`) VALUES
(1, 'Joaquim Dos Santos'),
(2, 'Kemp Powers'),
(3, 'Justin K. Thompson'),
(4, 'James Gunn'),
(5, 'Guy Ritchie'),
(7, 'Chad Stahelski'),
(8, 'Aaron Horvath'),
(9, 'Michael Jelenic'),
(10, 'Peyton Reed'),
(11, 'Jean-Francois Richet'),
(12, 'David F. Sandberg'),
(13, 'Marc Forster'),
(14, 'Robert Rodriguez'),
(15, 'Louis Leterrier'),
(16, 'Jeff Fowler'),
(17, 'Destin Daniel Cretton'),
(18, 'Antoine Fuqua'),
(19, 'Lana Wachowski'),
(20, 'Brett Haley'),
(21, 'Damien Chazelle'),
(22, 'Jake Schreier'),
(23, 'Josh Boone'),
(24, 'Justin Baldoni'),
(25, 'Ruben Fleischer'),
(26, 'Shawn Levy'),
(27, 'Matt Reeves'),
(28, 'Michael Bay'),
(29, 'Sam Raimi'),
(30, 'Martin Campbell'),
(32, 'Anthony Russo'),
(33, 'Joe Russo'),
(34, 'Jeff Nathanson'),
(35, 'Lee Isaac Chung'),
(36, 'Adrian Grunberg'),
(37, 'Jon M. Chu'),
(38, 'Kirk DeMicco'),
(39, 'Peter Sohn'),
(40, 'Ryan Kramer'),
(41, 'Goro Taniguchi'),
(42, 'Nizam Razak'),
(43, 'Ji Zhao'),
(44, 'Januel Mercado'),
(45, 'Joel Crawford'),
(46, 'Domee Shi'),
(47, 'Gayataka Tanemura'),
(48, 'Dave Cunningham'),
(49, 'Sherm Cohen'),
(50, 'Andy Muschietti'),
(51, 'Steven Caple Jr.'),
(52, 'Harry Bradbeer'),
(53, 'James Cameron'),
(54, 'April Mullen'),
(55, 'Victor Danell'),
(56, 'Alex Lehmann'),
(57, 'Steven K. Tsuchida'),
(58, 'Jonah Feingold'),
(59, 'RC Delos Reyes'),
(60, 'Cemal Alpan'),
(61, 'Klaus Menzel'),
(62, 'Ric Roman Waugh'),
(63, 'Jonathan Salemi'),
(64, 'Morgan S. Dalibert'),
(65, 'Niki Caro'),
(66, 'Charles Guard'),
(67, 'Thomas Guard'),
(68, 'Siddharth Anand'),
(69, 'Adam Cooper');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktor`
--
ALTER TABLE `aktor`
  ADD PRIMARY KEY (`id_aktor`);

--
-- Indexes for table `detail_aktor`
--
ALTER TABLE `detail_aktor`
  ADD PRIMARY KEY (`id_daktor`),
  ADD KEY `film_id` (`id_film`),
  ADD KEY `aktor_id` (`id_aktor`);

--
-- Indexes for table `detail_sutradara`
--
ALTER TABLE `detail_sutradara`
  ADD PRIMARY KEY (`id_dsutradara`),
  ADD KEY `film_id` (`id_film`),
  ADD KEY `sutradara_id` (`id_sutradara`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`),
  ADD KEY `kategori_id` (`id_genre`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `film_id` (`id_film`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`),
  ADD KEY `film_id` (`id_film`),
  ADD KEY `user_id` (`username`);

--
-- Indexes for table `sutradara`
--
ALTER TABLE `sutradara`
  ADD PRIMARY KEY (`id_sutradara`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aktor`
--
ALTER TABLE `aktor`
  MODIFY `id_aktor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=281;

--
-- AUTO_INCREMENT for table `detail_aktor`
--
ALTER TABLE `detail_aktor`
  MODIFY `id_daktor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=354;

--
-- AUTO_INCREMENT for table `detail_sutradara`
--
ALTER TABLE `detail_sutradara`
  MODIFY `id_dsutradara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=377;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `sutradara`
--
ALTER TABLE `sutradara`
  MODIFY `id_sutradara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_aktor`
--
ALTER TABLE `detail_aktor`
  ADD CONSTRAINT `detail_aktor_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `detail_aktor_ibfk_2` FOREIGN KEY (`id_aktor`) REFERENCES `aktor` (`id_aktor`);

--
-- Constraints for table `detail_sutradara`
--
ALTER TABLE `detail_sutradara`
  ADD CONSTRAINT `detail_sutradara_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `detail_sutradara_ibfk_2` FOREIGN KEY (`id_sutradara`) REFERENCES `sutradara` (`id_sutradara`);

--
-- Constraints for table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`);

--
-- Constraints for table `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`username`) REFERENCES `login` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
