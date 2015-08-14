-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 14, 2015 at 09:19 AM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `merohostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE IF NOT EXISTS `facility` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`id`, `name`) VALUES
(1, '24 hour electricity'),
(2, 'Wi-Fi'),
(3, 'Hot Water'),
(4, 'Locker'),
(5, 'Hostel Warden'),
(6, 'Laundry'),
(7, 'Television'),
(8, 'Gym');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `no_of_rate` int(11) DEFAULT NULL,
  `user_type` varchar(25) DEFAULT NULL,
  `comments` text,
  `recommend` varchar(10) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`no_of_rate`, `user_type`, `comments`, `recommend`, `id`, `date`) VALUES
(4, 'student', 'Good.', 'sure', 1, '2015-07-03 06:52:03'),
(1, 'student', '', 'forget it', 2, '2015-07-03 08:37:20'),
(5, 'student', '', 'sure', 3, '2015-07-03 08:37:41'),
(3, 'student', 'ThisisAshimRegmitesting', 'sure', 4, '2015-07-03 09:48:49'),
(1, 'student', '', 'forget it', 5, '2015-07-04 05:29:19'),
(4, 'advertiser', 'ithinkyoushouldletsearchthroughnameofhosteltoo.Imeanifsomeonerecommendmesomehostelandidontknowtheplacewhereitis.Itwillbehelpfultofindoutthroughyoursite.Trymakingthisserviceasgoodaspossible.Thisisawesome.Thanks', 'sure', 6, '2015-07-04 17:22:12'),
(5, 'student', '', 'sure', 7, '2015-07-04 22:17:36'),
(3, 'student', 'Iloveuashim.', 'sure', 8, '2015-07-04 23:34:36'),
(5, 'student', 'Test', 'sure', 9, '2015-07-05 04:18:59'),
(5, 'student', '?????????', 'sure', 10, '2015-07-05 11:31:39'),
(5, 'hostel', 'test', 'forget it', 12, '2015-07-05 20:45:19'),
(3, 'student', 'fasdfwef', 'sure', 13, '2015-07-06 23:09:23'),
(5, 'student', 'fasdfwefasdfwerfw', 'sure', 14, '2015-07-06 23:09:43'),
(5, 'student', 'fasdfwefasdfwerfwasdfasdf', 'sure', 15, '2015-07-06 23:09:49'),
(3, 'student', '', 'sure', 16, '2015-07-07 11:45:46'),
(3, 'student', 'kfjlakjdajdfljadfjajf', 'sure', 17, '2015-07-09 08:50:51'),
(2, 'student', 'kfjlakjdajdfljadfjajf', 'sure', 18, '2015-07-09 08:51:28'),
(2, 'student', '', 'sure', 19, '2015-07-09 08:51:54'),
(5, 'student', 'fasdfafsadfasdgsdfas', 'sure', 20, '2015-07-09 08:58:30'),
(3, 'student', '', 'sure', 21, '2015-07-09 20:49:58'),
(3, 'student', '', 'sure', 22, '2015-07-10 01:23:52'),
(3, 'student', '', 'sure', 23, '2015-07-11 09:12:39'),
(3, 'student', '', 'sure', 24, '2015-07-11 09:12:47');

-- --------------------------------------------------------

--
-- Table structure for table `fee_structure`
--

CREATE TABLE IF NOT EXISTS `fee_structure` (
  `id` int(11) NOT NULL,
  `admission` int(11) NOT NULL,
  `security_deposit` int(11) NOT NULL,
  `1_bed` varchar(255) DEFAULT NULL,
  `2_bed` varchar(255) DEFAULT NULL,
  `3_bed` varchar(255) DEFAULT NULL,
  `4_bed` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=237 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee_structure`
--

INSERT INTO `fee_structure` (`id`, `admission`, `security_deposit`, `1_bed`, `2_bed`, `3_bed`, `4_bed`) VALUES
(1, 3000, 0, NULL, '8000', '7500', '7000'),
(2, 3000, 0, NULL, '8500', '8500', '8000'),
(3, 3000, 0, NULL, NULL, '7500', '7000'),
(4, 3000, 0, '7500', '7500', '7500', '7500'),
(5, 3000, 0, NULL, NULL, '7500', NULL),
(6, 3000, 0, NULL, '8000', '7500', '7000'),
(7, 3000, 0, NULL, '7000', '7000', '6500'),
(8, 3000, 0, '8000', '7000', '6500', NULL),
(9, 3000, 0, NULL, '7100', '6600', '6500'),
(10, 3000, 0, NULL, '8500', '8000', '8000'),
(11, 3000, 0, NULL, '7000', '6500', '6000'),
(12, 3000, 0, NULL, '7000', '6500', NULL),
(13, 3000, 5000, NULL, '8000', '7700', NULL),
(14, 3000, 3000, NULL, NULL, '8000', '8000'),
(15, 3000, 0, NULL, '7000', '7000', '6500'),
(16, 3000, 0, NULL, '8000', '7000-7500', NULL),
(17, 3000, 0, NULL, '7500', '7000', NULL),
(18, 3000, 0, NULL, NULL, '8000', '7000'),
(19, 3000, 0, NULL, '8000', '7500', '7500'),
(20, 3000, 0, NULL, '8500', '8000', NULL),
(21, 3000, 0, '8500', '8000', '8000', NULL),
(22, 3000, 0, '10000', '7500', '7500', '7000'),
(23, 3000, 0, NULL, '8000', '8000', '7500'),
(24, 3000, 0, NULL, '7500', '7500', '7500'),
(25, 3000, 0, NULL, '8000', '7500', '7500'),
(26, 3000, 0, NULL, '8000', '8000', '8000'),
(27, 3000, 0, NULL, '8500', '8000', NULL),
(28, 3000, 0, NULL, NULL, '7000', NULL),
(29, 2000, 0, NULL, '8000', '7000', NULL),
(30, 3000, 0, '8500', '8000', '7800', '7500'),
(31, 3000, 0, '10000', '8000', '8000', '8000'),
(32, 2000, 0, NULL, '8000', '8000', '8000'),
(33, 3000, 0, NULL, '7500', '7000', '7000'),
(34, 3000, 0, NULL, '7500', '7000', '7000'),
(35, 3000, 0, NULL, '7500', '7000', '7000'),
(36, 3000, 0, NULL, '7500', '7000', '7000'),
(37, 3000, 0, NULL, '7500', '7000', '7000'),
(38, 3000, 0, NULL, '8500', '8000', '8000'),
(39, 3000, 0, NULL, '8500', '8000', '8000'),
(40, 3000, 0, NULL, '8500', '8000', '8000'),
(41, 3000, 0, NULL, '8500', '8000', '8000'),
(42, 3000, 0, NULL, '8500', '8000', '8000'),
(43, 3000, 0, NULL, '7500', '7000', '7000'),
(44, 3000, 0, NULL, '8500', '8000', '8000'),
(45, 3000, 0, NULL, '7500', '7000', '7000'),
(46, 3000, 0, NULL, '8500', '8000', '8000'),
(47, 3000, 0, NULL, '7500', '7000', '7000'),
(48, 3000, 0, NULL, '7500', '7000', '7000'),
(49, 3000, 0, NULL, '8500', '8000', '8000'),
(50, 3000, 0, NULL, '7500', '7000', '7000'),
(51, 3000, 0, NULL, '7500', '7000', '7000'),
(52, 3000, 0, NULL, '8500', '8000', '8000'),
(53, 3000, 0, NULL, '7500', '7000', '7000'),
(54, 3000, 0, NULL, '7500', '7000', '7000'),
(55, 3000, 0, NULL, '8500', '8000', '8000'),
(56, 3000, 0, NULL, '8500', '8000', '8000'),
(57, 3000, 0, NULL, '8500', '8000', '8000'),
(58, 3000, 0, NULL, '7500', '7000', '7000'),
(59, 3000, 0, NULL, '8500', '8000', '8000'),
(60, 3000, 0, NULL, '8500', '8000', '8000'),
(61, 3000, 0, NULL, '7500', '7000', '7000'),
(62, 3000, 0, NULL, '7500', '7000', '7000'),
(63, 3000, 0, NULL, '7500', '7000', '7000'),
(64, 3000, 0, NULL, '7500', '7000', '7000'),
(65, 3000, 0, NULL, '7500', '7000', '7000'),
(66, 3000, 0, NULL, '7500', '7000', '7000'),
(67, 3000, 0, NULL, '8500', '8000', '8000'),
(68, 3000, 0, NULL, '8500', '8000', '8000'),
(69, 3000, 0, NULL, '8500', '8000', '8000'),
(70, 3000, 0, NULL, '8500', '8000', '8000'),
(71, 3000, 0, NULL, '8500', '8000', '8000'),
(72, 3000, 0, NULL, '8500', '8000', '8000'),
(73, 3000, 0, NULL, '8500', '8000', '8000'),
(74, 3000, 0, NULL, '7500', '7000', '7000'),
(75, 3000, 0, NULL, '7500', '7000', '7000'),
(76, 3000, 0, NULL, '8500', '8000', '8000'),
(77, 3000, 0, NULL, '8500', '8000', '8000'),
(78, 3000, 0, NULL, '8500', '8000', '8000'),
(79, 3000, 0, NULL, '7500', '7000', '7000'),
(80, 3000, 0, NULL, '8500', '8000', '8000'),
(81, 3000, 0, NULL, '8500', '8000', '8000'),
(82, 3000, 0, NULL, '8500', '8000', '8000'),
(83, 3000, 0, NULL, '8500', '8000', '8000'),
(84, 3000, 0, NULL, '8500', '8000', '8000'),
(85, 3000, 0, NULL, '7500', '7000', '7000'),
(86, 3000, 0, NULL, '7500', '7000', '7000'),
(87, 3000, 0, NULL, '7500', '7000', '7000'),
(88, 3000, 0, NULL, '7500', '7000', '7000'),
(89, 3000, 0, NULL, '8500', '8000', '8000'),
(90, 3000, 0, NULL, '8500', '8000', '8000'),
(91, 3000, 0, NULL, '7500', '7000', '7000'),
(92, 3000, 0, NULL, '8500', '8000', '8000'),
(93, 3000, 0, NULL, '7500', '7000', '7000'),
(94, 3000, 0, NULL, '8500', '8000', '8000'),
(95, 3000, 0, NULL, '8500', '8000', '8000'),
(96, 3000, 0, NULL, '7500', '7000', '7000'),
(97, 3000, 0, NULL, '8500', '8000', '8000'),
(98, 3000, 0, NULL, '8500', '8000', '8000'),
(99, 3000, 0, NULL, '8500', '8000', '8000'),
(100, 3000, 0, NULL, '8500', '8000', '8000'),
(101, 3000, 0, NULL, '8500', '8000', '8000'),
(102, 3000, 0, NULL, '8500', '8000', '8000'),
(103, 3000, 0, NULL, '7500', '7000', '7000'),
(104, 3000, 0, NULL, '8500', '8000', '8000'),
(105, 3000, 0, NULL, '8500', '8000', '8000'),
(106, 3000, 0, NULL, '8500', '8000', '8000'),
(107, 3000, 0, NULL, '8500', '8000', '8000'),
(108, 3000, 0, NULL, '8500', '8000', '8000'),
(109, 3000, 0, NULL, '8500', '8000', '8000'),
(110, 3000, 0, NULL, '7500', '7000', '7000'),
(111, 3000, 0, NULL, '8500', '8000', '8000'),
(112, 3000, 0, NULL, '7500', '7000', '7000'),
(113, 3000, 0, NULL, '8500', '8000', '8000'),
(114, 3000, 0, NULL, '8500', '8000', '8000'),
(115, 3000, 0, NULL, '8500', '8000', '8000'),
(116, 3000, 0, NULL, '8500', '8000', '8000'),
(117, 3000, 0, NULL, '8500', '8000', '8000'),
(118, 3000, 0, NULL, '8500', '8000', '8000'),
(119, 3000, 0, NULL, '8500', '8000', '8000'),
(120, 3000, 0, NULL, '7500', '7000', '7000'),
(121, 3000, 0, NULL, '7500', '7000', '7000'),
(122, 3000, 0, NULL, '7500', '7000', '7000'),
(123, 3000, 0, NULL, '8500', '8000', '8000'),
(124, 3000, 0, NULL, '8500', '8000', '8000'),
(125, 3000, 0, NULL, '8500', '8000', '8000'),
(126, 3000, 0, NULL, '8500', '8000', '8000'),
(127, 3000, 0, NULL, '7500', '7000', '7000'),
(128, 3000, 0, NULL, '7500', '7000', '7000'),
(129, 3000, 0, NULL, '7500', '7000', '7000'),
(130, 3000, 0, NULL, '8500', '8000', '8000'),
(131, 3000, 0, NULL, '8500', '8000', '8000'),
(132, 3000, 0, NULL, '7500', '7000', '7000'),
(133, 3000, 0, NULL, '7500', '7000', '7000'),
(134, 3000, 0, NULL, '7500', '7000', '7000'),
(135, 3000, 0, NULL, '7500', '7000', '7000'),
(136, 3000, 0, NULL, '7500', '7000', '7000'),
(137, 3000, 0, NULL, '8500', '8000', '8000'),
(138, 3000, 0, NULL, '8500', '8000', '8000'),
(139, 3000, 0, NULL, '8500', '8000', '8000'),
(140, 3000, 0, NULL, '7500', '7000', '7000'),
(141, 3000, 0, NULL, '8500', '8000', '8000'),
(142, 3000, 0, NULL, '8500', '8000', '8000'),
(143, 3000, 0, NULL, '8500', '8000', '8000'),
(144, 3000, 0, NULL, '8500', '8000', '8000'),
(145, 3000, 0, NULL, '8500', '8000', '8000'),
(146, 3000, 0, NULL, '8500', '8000', '8000'),
(147, 3000, 0, NULL, '7500', '7000', '7000'),
(148, 3000, 0, NULL, '8500', '8000', '8000'),
(149, 3000, 0, NULL, '8500', '8000', '8000'),
(150, 3000, 0, NULL, '7500', '7000', '7000'),
(151, 3000, 0, NULL, '7500', '7000', '7000'),
(152, 3000, 0, NULL, '7500', '7000', '7000'),
(153, 3000, 0, NULL, '7500', '7000', '7000'),
(154, 3000, 0, NULL, '7500', '7000', '7000'),
(155, 3000, 0, NULL, '7500', '7000', '7000'),
(156, 3000, 0, NULL, '7500', '7000', '7000'),
(157, 3000, 0, NULL, '7500', '7000', '7000'),
(158, 3000, 0, NULL, '7500', '7000', '7000'),
(159, 3000, 0, NULL, '7500', '7000', '7000'),
(160, 3000, 0, NULL, '7500', '7000', '7000'),
(161, 3000, 0, NULL, '7500', '7000', '7000'),
(162, 3000, 0, NULL, '7500', '7000', '7000'),
(163, 3000, 0, NULL, '8500', '8000', '8000'),
(164, 3000, 0, NULL, '7500', '7000', '7000'),
(165, 3000, 0, NULL, '8500', '8000', '8000'),
(166, 3000, 0, NULL, '7500', '7000', '7000'),
(167, 3000, 0, NULL, '7500', '7000', '7000'),
(168, 3000, 0, NULL, '7500', '7000', '7000'),
(169, 3000, 0, NULL, '8500', '8000', '8000'),
(170, 3000, 0, NULL, '8500', '8000', '8000'),
(171, 3000, 0, NULL, '7500', '7000', '7000'),
(172, 3000, 0, NULL, '7500', '7000', '7000'),
(173, 3000, 0, NULL, '8500', '8000', '8000'),
(174, 3000, 0, NULL, '8500', '8000', '8000'),
(175, 3000, 0, NULL, '8500', '8000', '8000'),
(176, 3000, 0, NULL, '7500', '7000', '7000'),
(177, 3000, 0, NULL, '7500', '7000', '7000'),
(178, 3000, 0, NULL, '7500', '7000', '7000'),
(179, 3000, 0, NULL, '7500', '7000', '7000'),
(180, 3000, 0, NULL, '7500', '7000', '7000'),
(181, 3000, 0, NULL, '8500', '8000', '8000'),
(182, 3000, 0, NULL, '7500', '7000', '7000'),
(183, 3000, 0, NULL, '7500', '7000', '7000'),
(184, 3000, 0, NULL, '7500', '7000', '7000'),
(185, 3000, 0, NULL, '7500', '7000', '7000'),
(186, 3000, 0, NULL, '8500', '8000', '8000'),
(187, 3000, 0, NULL, '7500', '7000', '7000'),
(188, 3000, 0, NULL, '7500', '7000', '7000'),
(189, 3000, 0, NULL, '7500', '7000', '7000'),
(190, 3000, 0, NULL, '8500', '8000', '8000'),
(191, 3000, 0, NULL, '8500', '8000', '8000'),
(192, 3000, 0, NULL, '7500', '7000', '7000'),
(193, 3000, 0, NULL, '8500', '8000', '8000'),
(194, 3000, 0, NULL, '7500', '7000', '7000'),
(195, 3000, 0, NULL, '8500', '8000', '8000'),
(196, 3000, 0, NULL, '7500', '7000', '7000'),
(197, 3000, 0, NULL, '7500', '7000', '7000'),
(198, 3000, 0, NULL, '7500', '7000', '7000'),
(199, 3000, 0, NULL, '8500', '8000', '8000'),
(200, 3000, 0, NULL, '7500', '7000', '7000'),
(201, 3000, 0, NULL, '7500', '7000', '7000'),
(202, 3000, 0, NULL, '8500', '8000', '8000'),
(203, 3000, 0, NULL, '8500', '8000', '8000'),
(204, 3000, 0, NULL, '7500', '7000', '7000'),
(205, 3000, 0, NULL, '7500', '7000', '7000'),
(206, 3000, 0, NULL, '8500', '8000', '8000'),
(207, 3000, 0, NULL, '8500', '8000', '8000'),
(208, 3000, 0, NULL, '8500', '8000', '8000'),
(209, 3000, 0, NULL, '8500', '8000', '8000'),
(210, 3000, 0, NULL, '8500', '8000', '8000'),
(211, 3000, 0, NULL, '7500', '7000', '7000'),
(212, 3000, 0, NULL, '8500', '8000', '8000'),
(213, 3000, 0, NULL, '7500', '7000', '7000'),
(214, 3000, 0, NULL, '7500', '7000', '7000'),
(215, 3000, 0, NULL, '7500', '7000', '7000'),
(216, 3000, 0, NULL, '8500', '8000', '8000'),
(217, 3000, 0, NULL, '7500', '7000', '7000'),
(218, 3000, 0, NULL, '7500', '7000', '7000'),
(219, 3000, 0, NULL, '8500', '8000', '8000'),
(220, 3000, 0, NULL, '7500', '7000', '7000'),
(221, 3000, 0, NULL, '8500', '8000', '8000'),
(222, 3000, 0, NULL, '8500', '8000', '8000'),
(223, 3000, 0, NULL, '7500', '7000', '7000'),
(224, 3000, 0, NULL, '7500', '7000', '7000'),
(225, 3000, 0, NULL, '8500', '8000', '8000'),
(226, 3000, 0, NULL, '8500', '8000', '8000'),
(227, 3000, 0, NULL, '8500', '8000', '8000'),
(228, 3000, 0, NULL, '8500', '8000', '8000'),
(229, 3000, 0, NULL, '7500', '7000', '7000'),
(230, 3000, 0, NULL, '8500', '8000', '8000'),
(231, 3000, 0, NULL, '8500', '8000', '8000'),
(232, 3000, 0, NULL, '8500', '8000', '8000'),
(233, 3000, 0, NULL, '8500', '8000', '8000'),
(234, 3000, 0, NULL, '7500', '7000', '7000'),
(235, 3000, 0, NULL, '8500', '8000', '8000'),
(236, 3000, 5000, '15000', '8500', '8000', '8000');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE IF NOT EXISTS `hostel` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `estd_year` int(11) DEFAULT NULL,
  `fee_structure_id` int(11) DEFAULT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=237 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`id`, `name`, `gender`, `address`, `estd_year`, `fee_structure_id`, `capacity`) VALUES
(1, 'Sano Sansar Youth Girls Hostel', 'Girls', 'Old Baneshwor, Rohini Marg', 2071, 1, 35),
(2, 'Subhalaxmi Boys Hostel', 'Boys', 'New Plaza, Putalisadak', 2068, 2, 65),
(3, 'Anne Girls Hostel', 'Girls', 'Old Baneshwor, Rohini Marg', 2067, 3, 18),
(4, 'Sumnima Girls Hostel', 'Girls', 'New Plaza, Putalisadak', NULL, 4, 40),
(5, 'Shree Om Girls Hostel', 'Girls', 'New Plaza, Putalisadak', 2060, 5, 30),
(6, 'Ekata Boys Hostel', 'Boys', 'Dillibazar, Ghatte Kulo', 2071, 6, 30),
(7, 'Prasiddha Girls Hostel', 'Girls', 'New Baneshwor, White House', 2071, 7, 30),
(8, 'Manakamana Girls Hostel', 'Girls', 'Mid-Baneshwor', 2064, 8, 35),
(9, 'Miteri Girls Hostel', 'Girls', 'Mid-Baneshwor, Miteri Marg', 2065, 9, 90),
(10, 'Krishna Boys Hostel', 'Boys', 'Mid-Baneshwor, Miteri Marg', 2068, 10, 32),
(11, 'Phoenix Girls Hostel', 'Girls', 'Mid-Baneshwor', NULL, 11, 30),
(12, 'Next to Home Girls Hostel', 'Girls', 'Mid-Baneshwor', 2069, 12, 35),
(13, 'Himalayan Friendship Boys Hostel', 'Boys', 'Mid-Baneshwor', 2067, 13, 56),
(14, 'OM Girls Hostel', 'Girls', 'Mid-Baneshwor', 2071, 14, 30),
(15, 'Ganapati Boys Hostel', 'Boys', 'Ghatte Kulo, NawaDurga Mandir 6', 2071, 15, 30),
(16, 'Sanctuary Girls Hostel', 'Girls', 'Dillibazar, Ghatte Kulo', 2071, 16, 25),
(17, 'Vision Girls Hostel', 'Girls', 'Ghate Kullo', 2069, 17, 20),
(18, 'Samsara Boys Hostel', 'Boys', 'Dillibazar 32, Kalikasthan', NULL, 18, 32),
(19, 'Pancha Kumari Care Home', 'Girls', 'Kalikasthan', 2065, 19, 34),
(20, 'Annapurna Boys Hostel', 'Boys', 'Dillibazar 32, Kalikasthan', 2062, 20, 17),
(21, 'Bihaan Boys Hostel', 'Boys', 'Ghatte Kulo', 2061, 21, 50),
(22, 'Nawa Matrika Bhumi Girls Hostel', 'Girls', 'Kalikasthan, Dillibazar, Goswara Marga', NULL, 22, 60),
(23, 'Usha Girls Hostel', 'Girls', 'Ghatte Kulo', 2069, 23, 0),
(24, 'Unique Girls Hostel', 'Girls', 'Ghatte Kulo', 2069, 24, 0),
(25, 'Subha Laxmi Boys Hostel', 'Boys', 'Ghatte Kulo', 2069, 25, 30),
(26, 'Kathmandu Deluxe Boys Hostel', 'Boys', 'Ghatte Kulo', 2070, 26, 60),
(27, 'Balaji Boys Hostel', 'Boys', 'Ghatte Kulo', 2072, 27, 0),
(28, 'Zenith Girls Hostel', 'Girls', 'Sankhamul, New Baneshwor', 2072, 28, 0),
(29, 'Suhakanya Girls Hostel', 'Girls', 'Sankhamul, New Baneshwor', 2072, 29, 30),
(30, 'Sumit Boys'' Hostel', 'Boys', 'Sankhamul, New Baneshwor', 2071, 30, 40),
(31, 'P.G. Home Boys Hostel', 'Boys', 'Sankhamul, New Baneshwor', 2070, 31, 40),
(32, 'Banglamukhi Boys Hostel', 'Boys', 'Sankhamul, New Baneshwor', 2069, 32, 30),
(33, 'The Second Home Girls Hostel', 'Girls', 'Sankhamul, New Baneshwor', NULL, 33, 32),
(34, 'Minerva Girls Hostel', 'Girls', 'New Baneshwor, BICC Hall', NULL, 34, 0),
(35, 'Chahari Girls Hostel', 'Girls', 'New Baneshwor, Deurali Club', NULL, 35, 0),
(36, 'Anmol  Girls Hostel', 'Girls', NULL, NULL, 36, 0),
(37, 'Rupandehi Girls Hostel', 'Girls', NULL, NULL, 37, 0),
(38, 'Monalisha Boys Hostel', 'Boys', 'Shantinagar, Thulo Kharibot', NULL, 38, 0),
(39, 'Smaran Boys Hostel', 'Boys', 'Shantinagar, Thulo Kharibot', NULL, 39, 0),
(40, 'Mum’s Home Boys Hostel', 'Boys', 'Shantinagar, Kareshwor', NULL, 40, 0),
(41, 'Sweet Home Boys Hostel ', 'Boys', 'Shantinagar, Thulo Kharibot', NULL, 41, 0),
(42, 'Facebook Boys Hostel', 'Boys', NULL, NULL, 42, 0),
(43, 'Sister’s Home Girls Hostel', 'Girls', 'Shantinagar, Thulo Kharibot', NULL, 43, 0),
(44, 'Destination Boys Hostel', 'Boys', 'New Baneshwor, BICC Hall', NULL, 44, 0),
(45, 'Decent Girls Hostel', 'Girls', NULL, NULL, 45, 0),
(46, 'Kathmandu Boys Hostel', 'Boys', 'New Baneshwor, BICC Hall', NULL, 46, 0),
(47, 'D & D Girls Hostel', 'Girls', 'New Baneshwor', NULL, 47, 0),
(48, 'Nawajyoti Girls Hostel', 'Girls', 'New Baneshwor, Sangam Chowk', NULL, 48, 0),
(49, 'Blue Bird Boys Hostel', 'Boys', 'Old Baneshwor', NULL, 49, 0),
(50, 'Pancha kumari Girls Hostel', 'Girls', 'Old Baneshwor', NULL, 50, 0),
(51, 'Subha Tara Girls Hostel', 'Girls', 'Old Baneshwor', NULL, 51, 0),
(52, 'Om Boys Hostel', 'Boys', NULL, NULL, 52, 0),
(53, 'Subidha Girls Hostel', 'Girls', 'Mid Baneshwor', NULL, 53, 0),
(54, 'Mother Teresa Girls Hostel', 'Girls', NULL, NULL, 54, 0),
(55, 'Shree Ganesh Boys Hostel', 'Boys', 'Old Baneshwor, Bhimsengola Chowk', NULL, 55, 0),
(56, 'Heaven Boys Hostel', 'Boys', 'Old Baneshwor', NULL, 56, 0),
(57, 'Moonlight Boys Hostel', 'Boys', 'Old Baneshwor', NULL, 57, 0),
(58, 'Kanchan Girls Hostel', 'Girls', 'Old Baneshwor', NULL, 58, 0),
(59, 'Subham Boys Hostel', 'Boys', 'New Baneshwor, Buddhanagar', NULL, 59, 0),
(60, 'Rupandehi Boys Hostel', 'Boys', 'Mid Baneshwor', NULL, 60, 0),
(61, 'Four Sister Girls Home', 'Girls', NULL, NULL, 61, 0),
(62, 'Sairesh Girls Hostel', 'Girls', 'Mid Baneshwor', NULL, 62, 0),
(63, 'Kanya Girls Hostel', 'Girls', NULL, NULL, 63, 0),
(64, 'Oasis Girls Hostel', 'Girls', 'Mid Baneshwor', NULL, 64, 0),
(65, 'Namaste Ladies Hostel', 'Girls', NULL, NULL, 65, 0),
(66, 'Swastik Girls Hostel', 'Girls', 'Shantinagar, Katyani Chowk', NULL, 66, 0),
(67, 'Aayush Boys Hostel', 'Boys', 'Shantinagar, Katyani Chowk', NULL, 67, 0),
(68, 'New East Ideal Boys Hostel', 'Boys', 'Old Baneshwor', NULL, 68, 0),
(69, 'Narayani Boys Hostel', 'Boys', 'Shantinagar, Katyani Chowk', NULL, 69, 0),
(70, 'New Boys Hostel', 'Boys', NULL, NULL, 70, 0),
(71, 'The Queen Home Girls Hostel', 'Boys', 'Shantinagar, Katyani Chowk', NULL, 71, 0),
(72, 'Red Rose Boys Hostel', 'Boys', 'Shantinagar, Kareshwor', NULL, 72, 0),
(73, 'Vegas Boys Hostel', 'Boys', 'Shantinagar ', NULL, 73, 0),
(74, 'Happy Home Girls Hostel', 'Girls', 'New Baneshwor', NULL, 74, 0),
(75, 'Grace Girls Hostel', 'Girls', 'New Baneshwor', NULL, 75, 0),
(76, 'Shree Ganapati Boys Hostel', 'Boys', NULL, NULL, 76, 0),
(77, 'Frenz Boys Hostel', 'Boys', 'New Baneshwor', NULL, 77, 0),
(78, 'Lucky Boys Hostel', 'Boys', NULL, NULL, 78, 0),
(79, 'Girls Garden Hostel', 'Girls', 'Shantinagar, Om Shanti Chowk', NULL, 79, 0),
(80, 'Boys Garden Hostel', 'Boys', 'Shantinagar, Om Shanti Chowk', NULL, 80, 0),
(81, 'Decent Boys Hostel', 'Boys', 'Shantinagar, Sano Kharibot', NULL, 81, 0),
(82, 'GN Bajra Boys Hostel', 'Boys', 'Shantinagar ', NULL, 82, 0),
(83, 'Nawa Swarnim Sansar Boys Hostel', 'Boys', 'Shantinagar ', NULL, 83, 0),
(84, 'Decent Boys Hostel', 'Boys', 'Shantinagar, Om Shanti Chowk', NULL, 84, 0),
(85, 'Our Home Girls Hostel', 'Girls', NULL, NULL, 85, 0),
(86, 'OM Kareshower Girls Hostel', 'Girls', 'Shantinagar, Nagendra Kancha Chowk', NULL, 86, 0),
(87, 'N Y Girls Hostel', 'Girls', 'Shantinagar, Nagendra Kancha Chowk', NULL, 87, 0),
(88, 'Nil Saraswati Girls Hostel', 'Girls', NULL, NULL, 88, 0),
(89, 'Gurukul Boys Hostel', 'Boys', 'Shantinagar ', NULL, 89, 0),
(90, 'Lumbini Boys Hostel', 'Boys', 'Mid Baneshwor, Milan Chowk', NULL, 90, 0),
(91, 'Sakura Girls Hostel', 'Girls', 'Shantinagar ', NULL, 91, 0),
(92, 'Om Janaki Boys Hostel', 'Boys', 'Shantinagar, Thulo Kharibot', NULL, 92, 0),
(93, 'Sikxha Girls Hostel', 'Girls', 'Shantinagar, Thulo Kharibot', NULL, 93, 0),
(94, 'Nobelty Boys Hostel', 'Boys', NULL, NULL, 94, 0),
(95, 'Friendship Boys Hostel', 'Boys', NULL, NULL, 95, 0),
(96, 'Indreni Girls Hostel', 'Girls', 'Mid Baneshwor', NULL, 96, 0),
(97, 'Seven Hill Boys Hostel', 'Boys', NULL, NULL, 97, 0),
(98, 'Bishal Boys Hostel', 'Boys', 'Tinkune, Gairigaun', NULL, 98, 0),
(99, 'Tinkune Youth Boys Hostel', 'Boys', 'Tinkune', NULL, 99, 0),
(100, 'Shubha Shree Chhatrabas Boys Hostel', 'Boys', 'Tinkune', NULL, 100, 0),
(101, 'Bright Future Boys Hostel', 'Boys', 'Sinamangal', NULL, 101, 0),
(102, 'Dream Boys Hostel', 'Boys', 'Tinkune, Gairigaun', NULL, 102, 0),
(103, 'Shubha Shree Girls Hostel', 'Girls', 'Sinamangal, Bhimsengola Chowk', NULL, 103, 0),
(104, 'Bisal Boys Hostel', 'Boys', 'Tinkune', NULL, 104, 0),
(105, 'Modern Boys Hostel', 'Boys', 'Tinkune', NULL, 105, 0),
(106, 'Madrid Home Boys Hostel', 'Boys', 'Shantinagar, Thulo Kharibot', NULL, 106, 0),
(107, 'Sidda Baba Boys Hostel', 'Boys', 'Shantinagar, Thulo Kharibot', NULL, 107, 0),
(108, 'Advance City Boys Hostel', 'Boys', 'Tinkune, Gairigaun', NULL, 108, 0),
(109, 'Sangam Boys Hostel', 'Boys', 'New Baneshwor, Sangam Chowk', NULL, 109, 0),
(110, 'Basera Girls Hostel', 'Girls', 'New Baneshwor, Thapagaun', NULL, 110, 0),
(111, 'Panas Boys Hostel', 'Boys', 'Baneshwor Height', NULL, 111, 0),
(112, 'Swarnim Sansar Girls Hostel', 'Girls', 'Baneshwor Height', NULL, 112, 0),
(113, 'Jaya PanchaLaxmi  Boys Pvt. Ltd.', 'Boys', 'Baneshwor Height', NULL, 113, 0),
(114, 'Shree Kunja Boys Hostel', 'Boys', 'Baneshwor Height', NULL, 114, 0),
(115, 'Sunshine Boys Hostel', 'Boys', 'New Baneshwor, Bijuli Bajar', NULL, 115, 0),
(116, 'Namuna Boys Hostel', 'Boys', 'New Baneshwor, Thapagaun', NULL, 116, 0),
(117, 'Sovereign Boys Hostel', 'Boys', NULL, NULL, 117, 0),
(118, 'Up Town Boys Hostel', 'Boys', NULL, NULL, 118, 0),
(119, 'Raika Boys Hostel', 'Boys', 'Baneshwor Height', NULL, 119, 0),
(120, 'Savya Girls Hostel', 'Girls', 'Baneshwor Height', NULL, 120, 0),
(121, 'Pashupati Girls Pvt. Ltd.', 'Girls', 'Baneshwor Height', NULL, 121, 0),
(122, 'Nawa Jiban Girls Hostel', 'Girls', 'Baneshwor Height', NULL, 122, 0),
(123, 'New Hill Boys Hostel', 'Boys', 'New Baneshwor, Hanumansthan', NULL, 123, 0),
(124, 'Indreni Boys Hostel', 'Boys', 'New Baneshwor, Okharbot Marga', NULL, 124, 0),
(125, 'Kathmandu Standard Boys Hostel', 'Boys', 'New Baneshwor, Thapagaun', NULL, 125, 0),
(126, ' U Shape Boys Hostel', 'Boys', 'Old Baneshwor, Battisputali', NULL, 126, 0),
(127, 'Paradise Girls Hostel', 'Girls', 'Baneshwor Height', NULL, 127, 0),
(128, 'Best Care Girls Hostel', 'Girls', 'Maharajgunj', NULL, 128, 0),
(129, 'Ananda bhumi Girls Hostel', 'Girls', 'Chabahil', NULL, 129, 0),
(130, 'Peaceful Boys Hostel', 'Boys', 'Samakhusi', NULL, 130, 0),
(131, 'Hana Boys Hostel', 'Boys', 'Basundhara', NULL, 131, 0),
(132, 'Peace Mercy Girls Hostel', 'Girls', 'Maharajgunj', NULL, 132, 0),
(133, 'Florence Girls Hostel', 'Girls', 'Basundhara', NULL, 133, 0),
(134, 'Mother’s Home Girls Hostel', 'Girls', 'Dhapasi', NULL, 134, 0),
(135, 'Phulbari Girls Hostel', 'Girls', 'Samakhusi', NULL, 135, 0),
(136, 'Excel Girls Hostel', 'Girls', 'Maharajgunj', NULL, 136, 0),
(137, 'Mangkaal Home Boys Hostel', 'Boys', 'Jawalakhel', NULL, 137, 0),
(138, 'JS Boys Hostel', 'Boys', 'Balkumari', NULL, 138, 0),
(139, 'Chhahari Boys Hostel', 'Boys', 'Gwarko', NULL, 139, 0),
(140, 'Paradise Girls Hostel', 'Girls', 'Kupondole', NULL, 140, 0),
(141, 'Sagarmatha Boys Hostel', 'Boys', 'Kupondole', NULL, 141, 0),
(142, 'Mohini Boys Hostel', 'Boys', 'Imadol', NULL, 142, 0),
(143, 'St. Jud Boys Hostel', 'Boys', 'Jawalakhel', NULL, 143, 0),
(144, 'Surya Binayak Boys Hostel', 'Boys', NULL, NULL, 144, 0),
(145, 'Golden Boys Hostel', 'Boys', NULL, NULL, 145, 0),
(146, 'Namaste Boys Hostel', 'Boys', 'Balkumari', NULL, 146, 0),
(147, 'Namaste Girls Hostel', 'Girls', NULL, NULL, 147, 0),
(148, 'Sumangal Boys Hostel', 'Boys', 'Jawalakhel', NULL, 148, 0),
(149, 'Scholars Nest Boys Hostel', 'Boys', 'Kupondole', NULL, 149, 0),
(150, 'Daughter’s Home Girls Hostel', 'Girls', NULL, NULL, 150, 0),
(151, 'At Own Home Girls Hostel', 'Girls', 'Jawalakhel', NULL, 151, 0),
(152, 'Friendship Boarding Home Girls Hostel', 'Girls', NULL, NULL, 152, 0),
(153, 'My Trust Home Girls Hostel', 'Girls', NULL, NULL, 153, 0),
(154, 'Kumari Girls Hostel', 'Girls', NULL, NULL, 154, 0),
(155, 'Hostel for Ladies', 'Girls', 'Kupondole', NULL, 155, 0),
(156, 'Mina shree chhatrabas Girls Hostel', 'Girls', NULL, NULL, 156, 0),
(157, 'A one Girls Hostel', 'Girls', 'Bakhundol', NULL, 157, 0),
(158, 'Peace Zone Girls Hostel', 'Girls', NULL, NULL, 158, 0),
(159, 'Sarojini Girls Hostel', 'Girls', 'Jawalakhel', NULL, 159, 0),
(160, 'Happy Home Girls Hostel', 'Girls', NULL, NULL, 160, 0),
(161, 'Himali Girls Hostel', 'Girls', NULL, NULL, 161, 0),
(162, 'Executive Girls Hostel', 'Girls', 'Jhamsikhel', NULL, 162, 0),
(163, 'Darpan Boys Hostel', 'Boys', 'Anamnagar, Hanumansthan', NULL, 163, 0),
(164, 'Kamkaji Mahila Aawas Hostel', 'Girls', 'Maitidevi', NULL, 164, 0),
(165, 'Success Boys Hostel', 'Boys', 'Dillibazar', NULL, 165, 0),
(166, 'Matribhumi Girls Hostel', 'Girls', 'Anamnagar, Kalikasthan', NULL, 166, 0),
(167, 'Kumari Girls Hostel', 'Girls', 'Rato pul', NULL, 167, 0),
(168, 'Daughter Next Girls Hostel', 'Girls', 'Dillibazar', NULL, 168, 0),
(169, 'B n B Boys Hostel', 'Boys', 'Seto Pul', NULL, 169, 0),
(170, 'Maitidevi Boys Hostel', 'Boys', 'Maitidevi', NULL, 170, 0),
(171, 'Pragati Aastha Girls Hostel', 'Girls', 'Maitidevi', NULL, 171, 0),
(172, 'Matribhumi Girls Hostel', 'Girls', 'Dillibazar', NULL, 172, 0),
(173, 'Ekata Boys Hostel', 'Boys', 'Maitidevi', NULL, 173, 0),
(174, 'Yeti Boys Hostel', 'Boys', 'Maitidevi', NULL, 174, 0),
(175, 'Baba Chaitanya Boys Hostel', 'Boys', NULL, NULL, 175, 0),
(176, 'RadhaKrishna Girls Hostel', 'Girls', 'Maitidevi', NULL, 176, 0),
(177, 'BadiMallika Girls Hostel', 'Girls', 'Maitidevi, Ghatte Kulo', NULL, 177, 0),
(178, 'Anzil Girls Hostel', 'Girls', 'Maitidevi', NULL, 178, 0),
(179, 'Friends and Family Girls Hostel', 'Girls', 'Maitidevi, Ghatte Kulo', NULL, 179, 0),
(180, 'Holygems Girls Hostel', 'Girls', NULL, NULL, 180, 0),
(181, 'Sunrise Boys Hostel', 'Boys', 'Putalisadak, New Plaza', NULL, 181, 0),
(182, 'Zenith Girls Hostel', 'Girls', 'Dillibazar', NULL, 182, 0),
(183, 'New Everest Girls Hostel', 'Girls', 'Dillibazar ', NULL, 183, 0),
(184, 'Suryodaya Girls Hostel', 'Girls', 'Maitidevi', NULL, 184, 0),
(185, 'Welcome Girls Hostel', 'Girls', 'Dillibazar', NULL, 185, 0),
(186, 'Bihan Boys Hostel', 'Boys', 'Maitidevi, Ghatte Kulo', NULL, 186, 0),
(187, 'Shanti Niketan Girls Hostel', 'Girls', 'Maitidevi, Ghatte Kulo', NULL, 187, 0),
(188, 'Achievers Girls Hostel', 'Girls', 'Maitidevi, Ghatte Kulo', NULL, 188, 0),
(189, 'Usha Girls Hostel', 'Girls', 'Maitidevi, Ghatte Kulo', NULL, 189, 0),
(190, 'Diyalo Boys Hostel', 'Boys', 'Maitidevi, Ghatte Kulo', NULL, 190, 0),
(191, 'Annapurna Boys Hostel', 'Boys', 'Dillibazar', NULL, 191, 0),
(192, 'Lotus Girls Hostel', 'Girls', 'Maitidevi, Ghatte Kulo', NULL, 192, 0),
(193, 'Peace Zone Boys Hostel', 'Boys', 'Dillibazar', NULL, 193, 0),
(194, 'Diyalo Girls Hostel', 'Girls', 'Dillibazar', NULL, 194, 0),
(195, 'Om Sai Boys Hostel', 'Boys', NULL, NULL, 195, 0),
(196, 'Baba Girls Hostel', 'Girls', 'Anamnagar', NULL, 196, 0),
(197, 'Bagalamukhi Saraswoti Girls Hostel', 'Girls', 'Kamalpokhari', NULL, 197, 0),
(198, 'Elite Girls Hostel', 'Girls', 'Maitidevi, Ghatte Kulo', NULL, 198, 0),
(199, 'New Annapurna Boys Hostel', 'Boys', 'Maitidevi, Ghatte Kulo', NULL, 199, 0),
(200, 'Mukti Nath Girls Hostel', 'Girls', 'Anamnagar', NULL, 200, 0),
(201, 'Oasis Girls Hostel', 'Girls', 'Anamnagar', NULL, 201, 0),
(202, 'Aashraya kuti Boys Hostel', 'Boys', 'Putalisadak, New Plaza', NULL, 202, 0),
(203, 'Samul Boys Hostel', 'Boys', 'Putalisadak, New Plaza', NULL, 203, 0),
(204, 'Candel Girls Hostel', 'Girls', 'Maitidevi', NULL, 204, 0),
(205, 'Cherab Girls Hostel', 'Girls', 'Maitidevi', NULL, 205, 0),
(206, 'Everest Girls Hostel', 'Boys', 'Bijulibazar', NULL, 206, 0),
(207, 'New Siddhartha Boys Hostel', 'Boys', 'Thapagaun', NULL, 207, 0),
(208, 'Star Lumbini Boys Hostel', 'Boys', 'Bijulibazar', NULL, 208, 0),
(209, 'Suryakiran Boys Hostel', 'Boys', 'Babarmahal', NULL, 209, 0),
(210, 'Everest Boys Hostel', 'Boys', 'Bijulibazar', NULL, 210, 0),
(211, 'Smarika Girls', 'Girls', 'Sankhamul', NULL, 211, 0),
(212, 'Pretoria Boys Hostel', 'Boys', 'Buddhanagar', NULL, 212, 0),
(213, 'Second Home Girls Hostel', 'Girls', 'Buddhanagar', NULL, 213, 0),
(214, 'Indrawati Girls Hostel', 'Girls', 'Buddhanagar', NULL, 214, 0),
(215, 'Aamarawati Girls Hostel', 'Girls', 'Buddhanagar', NULL, 215, 0),
(216, 'Moonlight Boys Hostel', 'Boys', 'Buddhanagar', NULL, 216, 0),
(217, 'Aaraksha Girls Hostel', 'Girls', 'Buddhanagar', NULL, 217, 0),
(218, 'Modern Girls Hostel', 'Girls', 'Minbhawan', NULL, 218, 0),
(219, 'Aadarsa Boys Hostel', 'Boys', 'Buddhanagar', NULL, 219, 0),
(220, 'Parbati Girls Hostel', 'Girls', 'Buddhanagar', NULL, 220, 0),
(221, 'Gelos Boys Hostel', 'Boys', 'Buddhanagar', NULL, 221, 0),
(222, 'Capital Boys Hostel', 'Boys', 'Buddhanagar', NULL, 222, 0),
(223, 'National Girls Hostel', 'Girls', 'Buddhanagar', NULL, 223, 0),
(224, 'Paradise Girls Hostel', 'Girls', NULL, NULL, 224, 0),
(225, 'Kusang Boys Hostel', 'Boys', 'Buddhanagar', NULL, 225, 0),
(226, 'Unique Boys Hostel', 'Boys', 'Subidhanagar', NULL, 226, 0),
(227, 'Modern Boys Hostel Pvt. Ltd.', 'Boys', 'Subidhanagar', NULL, 227, 0),
(228, 'Golden Boys Hostel', 'Boys', 'Koteshwor', NULL, 228, 0),
(229, 'Subidha Chhatrabas Girls Hostel', 'Girls', 'Subidhanagar', NULL, 229, 0),
(230, 'Mega Boys Hostel', 'Boys', 'Subidhanagar', NULL, 230, 0),
(231, 'National Boys Hostel', 'Boys', 'Aloknagar', NULL, 231, 0),
(232, 'Om ktm Boys Hostel', 'Boys', 'Sankhamul', NULL, 232, 0),
(233, 'Ureka Boys Hostel', 'Boys', 'Aloknagar', NULL, 233, 0),
(234, 'Prem Sai Girls Hostel', 'Girls', 'Buddhanagar', NULL, 234, 0),
(235, 'Ma Boys Hostel', 'Boys', 'Sankhamul, Bigyan Marg', NULL, 235, 0),
(236, 'City Stay Boys Hostel', 'boys', 'Samakhushi Chowk, Kathmandu', 2012, 236, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hostel_facility`
--

CREATE TABLE IF NOT EXISTS `hostel_facility` (
  `id` int(11) NOT NULL,
  `hostel_id` int(11) NOT NULL,
  `facility_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_facility`
--

INSERT INTO `hostel_facility` (`id`, `hostel_id`, `facility_id`) VALUES
(1, 1, 6),
(2, 1, 3),
(3, 1, 4),
(4, 2, 6),
(5, 2, 3),
(6, 2, 4),
(7, 3, 7),
(8, 3, 3),
(9, 3, 4),
(10, 4, 7),
(11, 4, 3),
(12, 4, 4),
(13, 5, 7),
(14, 5, 3),
(15, 5, 4),
(16, 6, 7),
(17, 6, 3),
(18, 6, 6),
(19, 7, 3),
(20, 7, 4),
(21, 7, 6),
(22, 7, 7),
(23, 8, 7),
(24, 8, 6),
(25, 8, 4),
(26, 9, 3),
(27, 9, 4),
(28, 9, 6),
(29, 9, 7),
(30, 10, 3),
(31, 10, 4),
(32, 10, 6),
(33, 11, 3),
(34, 11, 4),
(35, 11, 6),
(36, 11, 7),
(37, 12, 3),
(38, 12, 4),
(39, 12, 6),
(40, 12, 7),
(41, 13, 3),
(42, 13, 4),
(43, 13, 6),
(44, 13, 7),
(45, 14, 3),
(46, 14, 4),
(47, 14, 6),
(48, 15, 3),
(49, 15, 4),
(50, 15, 6),
(51, 16, 3),
(52, 16, 4),
(53, 16, 6),
(54, 16, 7),
(55, 17, 4),
(56, 17, 6),
(57, 17, 7),
(58, 18, 6),
(59, 18, 7),
(60, 19, 3),
(61, 19, 4),
(62, 19, 6),
(63, 20, 6),
(64, 20, 7),
(65, 21, 3),
(66, 21, 4),
(67, 21, 6),
(68, 22, 4),
(69, 22, 6),
(70, 22, 7),
(71, 23, 3),
(72, 23, 4),
(73, 23, 6),
(74, 24, 3),
(75, 24, 4),
(76, 24, 6),
(77, 24, 7),
(78, 25, 6),
(79, 26, 3),
(80, 26, 4),
(81, 26, 6),
(82, 26, 7),
(83, 27, 4),
(84, 27, 6),
(85, 28, 4),
(86, 29, 4),
(87, 29, 6),
(88, 29, 7),
(89, 30, 3),
(90, 30, 4),
(91, 30, 6),
(92, 30, 7),
(93, 31, 3),
(94, 31, 6),
(95, 32, 3),
(96, 32, 4),
(97, 32, 6),
(98, 32, 7),
(99, 33, 3),
(100, 33, 4),
(101, 33, 6),
(102, 236, 3),
(103, 236, 4),
(104, 236, 6),
(105, 236, 7);

-- --------------------------------------------------------

--
-- Table structure for table `hostel_photo`
--

CREATE TABLE IF NOT EXISTS `hostel_photo` (
  `id` int(11) NOT NULL,
  `hostel_id` int(11) NOT NULL,
  `photo_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_photo`
--

INSERT INTO `hostel_photo` (`id`, `hostel_id`, `photo_id`) VALUES
(2, 14, 2),
(3, 14, 3),
(4, 14, 4),
(5, 14, 5),
(6, 14, 6),
(8, 13, 7),
(9, 13, 9),
(10, 13, 10),
(11, 13, 11),
(12, 13, 12),
(14, 12, 14),
(16, 11, 16),
(17, 9, 17),
(18, 9, 18),
(19, 9, 19),
(20, 9, 20),
(21, 9, 21),
(23, 9, 23),
(24, 10, 24),
(26, 10, 26),
(28, 28, 28),
(31, 2, 31),
(32, 2, 32),
(34, 2, 34),
(38, 3, 38),
(40, 27, 40),
(41, 27, 41),
(42, 27, 42),
(44, 26, 44),
(45, 26, 45),
(46, 26, 46),
(47, 26, 47),
(48, 26, 48),
(50, 25, 50),
(52, 25, 52),
(54, 24, 54),
(55, 24, 55),
(56, 24, 56),
(58, 23, 58),
(59, 23, 59),
(60, 23, 60),
(62, 22, 62),
(63, 22, 63),
(64, 22, 64),
(65, 22, 65),
(66, 22, 66),
(67, 19, 67),
(69, 19, 69),
(72, 16, 72),
(73, 15, 73),
(75, 15, 75),
(76, 15, 76),
(77, 15, 77),
(82, 20, 82),
(83, 20, 83),
(84, 20, 84),
(85, 20, 85),
(87, 28, 87),
(89, 29, 89),
(90, 30, 90),
(91, 31, 91),
(95, 33, 95);

-- --------------------------------------------------------

--
-- Table structure for table `main_photo`
--

CREATE TABLE IF NOT EXISTS `main_photo` (
  `id` int(11) NOT NULL,
  `hostel_id` int(11) DEFAULT NULL,
  `photo_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_photo`
--

INSERT INTO `main_photo` (`id`, `hostel_id`, `photo_id`) VALUES
(1, 14, 1),
(2, 13, 8),
(3, 12, 13),
(4, 11, 15),
(5, 9, 22),
(6, 10, 25),
(7, 8, 27),
(8, 4, 29),
(9, 2, 33),
(10, 5, 35),
(11, 6, 36),
(12, 1, 37),
(13, 3, 39),
(14, 27, 43),
(15, 26, 49),
(16, 25, 51),
(17, 24, 53),
(18, 189, 57),
(19, 22, 61),
(20, 50, 68),
(21, 17, 70),
(22, 16, 71),
(23, 15, 74),
(24, 21, 78),
(25, 18, 79),
(26, 191, 80),
(27, 182, 28),
(28, 33, 94),
(29, 32, 93),
(30, 31, 92),
(31, 30, 90),
(32, 29, 88),
(33, 28, 86),
(34, 234, 96);

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE IF NOT EXISTS `owner` (
  `id` int(11) NOT NULL,
  `hostel_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contact` varchar(40) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=237 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `hostel_id`, `name`, `contact`) VALUES
(1, 1, 'Suresh Bhattarai', '01-4492659, 9843583341'),
(2, 2, 'Chet Kumar Dhamala', '9852832521'),
(3, 3, 'Bishnu Shrestha', '01-4485609, 9841855077'),
(4, 4, 'Icchyakala Rai', '9851081830, 01-4417455'),
(5, 5, 'Bindu Dalmia', '9841341956, 9802670553'),
(6, 6, 'Paras Bista', '9841403191'),
(7, 7, 'Umesh Khatiwada', '01-6913154'),
(8, 8, 'Kusum Ghimire', '01-4475993'),
(9, 9, 'Ganga Thapa', '01-4494005, 9849239942'),
(10, 10, 'Bindu Subedi', '01-4489605'),
(11, 11, 'Dipa Shrestha', '9813216828'),
(12, 12, 'Raj Kumar  K.C.', '9841662729'),
(13, 13, 'Rewati Kumar Khadka', '01-4461964, 9851164794'),
(14, 14, 'Alpana Karmacharya', '01-4480385, 9842039940'),
(15, 15, 'Roma Panta', '9841580704'),
(16, 16, 'Ashok Shrestha', '9813274338, 9843616693'),
(17, 17, 'Hemanta  Pradhananda', '01-4439256'),
(18, 18, 'Kumar Adhikari', '9851083457'),
(19, 19, 'Deepali Karki', '9851165902, 9803053700'),
(20, 20, 'Naarad Khadka', '9851115818'),
(21, 21, 'Bikash Balami', '9851032066, 9849216089'),
(22, 22, 'Kamala Bhetwal', '9841139222'),
(23, 23, 'Gopi Krishna Dahal', '9841689673'),
(24, 24, 'Raju Shrestha', '9841135161'),
(25, 25, 'Jeevan Dhamala', '9843458045'),
(26, 26, 'Tanka Bahadur Baral', '9842970445'),
(27, 27, 'Mukti Nath Rijal', '9804407185'),
(28, 28, 'Suraj Bhattarai', '9851141892'),
(29, 29, 'Jyoti Timilsina', '9841861620'),
(30, 30, 'Chabilal Karki', '9851141313, 9841445533'),
(31, 31, 'Dipendra Jaiswal', '9818922088'),
(32, 32, 'Bishram Tandan', '9851009066'),
(33, 33, 'Rishi Thapaliya, Gita Dhakal', NULL),
(34, 34, 'Sita Basnet (Thapa)', '9841331321'),
(35, 35, 'Muna Shrestha', '9841131059'),
(36, 36, 'Nitasha Kharel', '9808099646'),
(37, 37, 'Bhabana Shrestha', '9849484939'),
(38, 38, 'Deepak Subedi', '9851112199'),
(39, 39, 'Suman Sapkota', '9849148691'),
(40, 40, 'Nirmal Raj Dahal', '9841687512'),
(41, 41, 'Radhika Phuyal', NULL),
(42, 42, 'Harishyam Dhungana', '9741215100'),
(43, 43, 'Gyanu Joshi', '9849246750'),
(44, 44, 'Sunita Pantha', '9849513440'),
(45, 45, 'Sarita Thapa (Nepal)', '9849071185'),
(46, 46, 'Susmita Ghimire', '9841504206'),
(47, 47, 'Kanchhi Tamang', '9841189259'),
(48, 48, 'Jitendra K.C.', '9841289342'),
(49, 49, 'Sabita Karki', '9851022477'),
(50, 50, NULL, NULL),
(51, 51, 'Mina Singh Karki', '9847054533'),
(52, 52, 'Prabin Bikram Shahi', '9848629888'),
(53, 53, 'Tirtha Bhattarai', '9742624002'),
(54, 54, 'Gita Budhathoki', '9841814778'),
(55, 55, 'Gita Khadka', '9808957670'),
(56, 56, 'Rita Neupane', '9842030353'),
(57, 57, 'Chandani Acharya', '9841850246'),
(58, 58, NULL, NULL),
(59, 59, 'Ranjita Sibakoti', '9801129947'),
(60, 60, 'Rajiv Thapa', '9851140375'),
(61, 61, 'Nirjala Acharya', NULL),
(62, 62, 'Rajendra Bohara', '9851013526'),
(63, 63, 'Bina K.C.', '9841348322'),
(64, 64, 'Pranita Shrestha', '9808366853'),
(65, 65, 'Lina Gurung', '9851138188'),
(66, 66, 'Binita, Kalpana', '9841488212'),
(67, 67, 'Dinesh Kumar Dev', '9843377093'),
(68, 68, 'Pramod Hamal', '9849226618'),
(69, 69, 'Rachana Dotel', '9841967838'),
(70, 70, 'Jayanti Raj Bhandari', '9849193377'),
(71, 71, 'Saugat D.C.', '9813426383'),
(72, 72, 'Paras Raj Panta', '9851125072'),
(73, 73, 'Lokendra Singh', '9851142755, 9841611542'),
(74, 74, 'Archana Chhetri', '9808074100'),
(75, 75, 'Bijaya Devan', '9849031534'),
(76, 76, 'Nabin Gorasaini', '9849943450'),
(77, 77, 'Bishnu Bhandari', '9851114861'),
(78, 78, 'Manju Sharma Ansari', '9841448239'),
(79, 79, 'Muna Ghanire', '9849758350'),
(80, 80, 'Surya Kumar Rai', '9849284561'),
(81, 81, 'Kedar Thapa ', '9841901315'),
(82, 82, 'Prem Lama, Sarada K.C', '9849652202'),
(83, 83, NULL, '9851012708'),
(84, 84, 'Sanjib Nepal', '9842133522'),
(85, 85, 'Binita Sharma', '9841780369'),
(86, 86, 'Gita Shah', '9841707834'),
(87, 87, 'Nira Kayastha', '9841331580'),
(88, 88, 'Ganesh Kumar Khadka', '9851165155'),
(89, 89, 'Nishanta Gautam', '9851045673'),
(90, 90, 'Sima G.C., Kalandra Bahadur', '9841829738'),
(91, 91, 'Harishyam Dhungana', NULL),
(92, 92, 'Sabita Pandey', '9841367873'),
(93, 93, 'Sila Sai Thapa', '9841311552'),
(94, 94, 'Sayara Nakarmi', NULL),
(95, 95, 'Surendra Shrestha', '9851123678'),
(96, 96, 'Hema Sharma', '9843215871'),
(97, 97, 'Kameshwor Jaiswal', '9801128555'),
(98, 98, 'Keshab Yadav', '9849903316, 01-4494636'),
(99, 99, 'Indra Kunwar', '9841314779'),
(100, 100, 'Saru Sharma, Lekh B. Niroula', '9857010176'),
(101, 101, 'Tapendra bd bhandari', '9851067149'),
(102, 102, 'Shantosh Shah', '9801018029'),
(103, 103, 'Kalpana Ghimire(Thapa)', '9849942213, 01-4465659'),
(104, 104, 'Keshab Yadav', '9849903316, 01-4494637'),
(105, 105, 'Ashok k Shah', '9851098978'),
(106, 106, 'Lal Bd Khatri', '9849896608, 01-4108067'),
(107, 107, 'Mina Sharma', '9813166192'),
(108, 108, 'Bishnu K Yadav', '9808991106'),
(109, 109, 'Usha Khadka', '9849680234'),
(110, 110, 'Kamala Karki', '9849595757'),
(111, 111, 'Raj K Shahi', '9851001543, 01-4420590'),
(112, 112, 'Kiran Rajbhandari', '9851050800'),
(113, 113, 'Januka Tamang', '9841553663'),
(114, 114, 'Kamal Pd Ghimire', '9842625532'),
(115, 115, 'Prashun Pradhan', '9857024424'),
(116, 116, 'Pradip Dewan', '9851134807'),
(117, 117, 'Hari Priya Bhattrai', '9841901315'),
(118, 118, 'Santosh Rai, Rama Khadka', '9844661302'),
(119, 119, 'Ghanashyam Pandey', '9848527257'),
(120, 120, 'Sharmina Parajuli', '01-4487164, 9841917957'),
(121, 121, 'Jamuna chhantyal, BijayaLaxmi Shah', '9849389875'),
(122, 122, 'Shyam Thapa', '01-4461805, 9851035002'),
(123, 123, 'Dil Bahadur Khadka', '01-4215753, 9841706930'),
(124, 124, 'Arjun Ghimire', '01-4495491, 9849939490'),
(125, 125, 'Damodar Acharya', '9851134408'),
(126, 126, 'Nisha karki', '9841199982'),
(127, 127, 'Usha subedi', '9841586432'),
(128, 128, 'Kusu Udas', '01-4445451, 9841485174'),
(129, 129, 'Rabindra Gautam', '01-4471973, 9849967218'),
(130, 130, 'Hari Prasad Pandey', '01-4632117, 9741008873'),
(131, 131, 'Bishnu Rai', '9803498622'),
(132, 132, 'Prabina Rawal', '01-4378700, 9851116064'),
(133, 133, 'Bijaya Timalsina', '9841666738'),
(134, 134, 'Aruna Baniya', '01-4359069, 9851023338'),
(135, 135, 'Hari Prasad Nepal', '9741008873/9849783815'),
(136, 136, 'Ramila Shrestha', '01-4390074, 9841650584'),
(137, 137, 'Purkar shrestha', '01-6923281, 9841686430'),
(138, 138, 'Nanu Adhakari', '9841296859'),
(139, 139, 'Bharat Karki', '01-5530097, 9849623654'),
(140, 140, 'Sushila Upreti', '9849532350'),
(141, 141, 'Ram Mani Bhusal', '9841794692'),
(142, 142, 'Sindu Bam Malla', '9849246173'),
(143, 143, 'Anmol Thapa', '9849552628'),
(144, 144, 'Shriwan Rai', '9818010858'),
(145, 145, 'Ganesh Satyal', '01-5548590, 9841397302'),
(146, 146, 'Lina Gurung', '9851138188'),
(147, 147, 'Lina Gurung', NULL),
(148, 148, 'Roshan Bajracharya', '01-5526861'),
(149, 149, 'Bishnu Prasad Nepal', '01-5550105, 9851021970'),
(150, 150, 'Pooja Joshi', '9841497920'),
(151, 151, 'Saili Sharma, Aliza Dhakal', '01-5001658, 9841138411, 9841873313'),
(152, 152, 'Nabin kishor Rai', '9851037689'),
(153, 153, 'Bhawana Palikhe, Rama Maskey', '01-5540911, 9846027382, 9843130182'),
(154, 154, 'Mina KC', '9841363765, 9841702074'),
(155, 155, 'Pinkey Rana', '01-4414566'),
(156, 156, 'Sushila Chand', '01-5547676'),
(157, 157, 'Rina Bindukar', '01-5554069'),
(158, 158, 'Sunita Bataju', NULL),
(159, 159, 'Sital Subba', '9841497329'),
(160, 160, 'Hira Bramhacharya', '01-5203489'),
(161, 161, 'Mina chhetri', '9851005424'),
(162, 162, 'Shova Marahatha', '01-5534035, 9849011020'),
(163, 163, 'Dharma Kharel, Jiban Kharel', '9851014322'),
(164, 164, 'Dr. Sandha Basnet', '01-4418980, 9841455580'),
(165, 165, 'Harendra Bajracharya', '9841384678'),
(166, 166, 'Prem Bhetwal, Kamala Bhetwal', '9841139222'),
(167, 167, 'Sima Shah', '01-4440704, 9841653686'),
(168, 168, 'Rojina Subedi', '01-4431735'),
(169, 169, 'Narayan Kharel', '9851061698'),
(170, 170, 'Rajendra Shrestha', '01-4436266, 9849376928'),
(171, 171, 'Aamira Karki', '01-4418980'),
(172, 172, 'Kamala Thapa', '01-4445035, 9841199684'),
(173, 173, 'Som N Dahal', '01-4416369, 9841168091'),
(174, 174, 'Sandhaya Adhikari', '01-4417515'),
(175, 175, 'Susmita Rai', '9849732160'),
(176, 176, 'Shusila Agrawal', '01-4416479, 9851020396'),
(177, 177, 'Pankaj Sharma', '01-4426150, 9843112175'),
(178, 178, 'Manila Rai Shrestha', '01-4429623, 9851081384'),
(179, 179, 'Sarada Bhattrai', '9841782004'),
(180, 180, 'Ratna Sharma Gautam', '01-4433824, 9841422637'),
(181, 181, 'Deepak Raj Acharya', '01-4434362, 9851022067, 9851022910'),
(182, 182, 'Kalpana Shah', '01-431765, 9841760704'),
(183, 183, 'Prem Prasad Bhetwal', '01-4415844, 9841139222'),
(184, 184, 'Bishnu Maya Thapa', '01-4434356, 9851040064'),
(185, 185, 'Manisha Koirala', '01-4415937, 9845039298'),
(186, 186, 'Bikash Balami', '9849216089'),
(187, 187, 'Shanti Khanal', '9851019170'),
(188, 188, 'Niraj Bhusal', '01-4770240, 9851144825'),
(189, 189, 'Narayan koirala', '01-4770650, 9841492428'),
(190, 190, 'krishna Prasad Basyal', '01-4418368, 9851142604'),
(191, 191, 'Narayan Koirala', '01-4414819, 9851115818'),
(192, 192, 'Urmila Poudel', '01-4770441, 9841610225'),
(193, 193, 'Mandira Khadgi', '01-4445197, 9841455890'),
(194, 194, 'Urmila Bhattarai, Deepak Baral', '01-4444682, 9849089745'),
(195, 195, 'Rupa Shahi', '01-4445260, 9841208196'),
(196, 196, 'Durga Pyakurel', '9851138735'),
(197, 197, 'Prem Pradhan', '01-4240577, 9841165967'),
(198, 198, 'Pramila Adhakari ', '01-4430041, 9808152282'),
(199, 199, 'Predeep Rayamajhi', '9842466125'),
(200, 200, 'Prem Pradhan', '01-4240577, 9841165967'),
(201, 201, 'Pranita Shrestha ', '01-4264794, 9851068152'),
(202, 202, 'Sita Ram Bhattarai', '9841393445'),
(203, 203, 'Arun Parajuli', '9851091328'),
(204, 204, 'Susmita Rana', '9849357336'),
(205, 205, 'Buddhi Bahadur Karki', '9807243567'),
(206, 206, 'Amita Pradhan', '01-4083530'),
(207, 207, 'Sharada Bhattarai', NULL),
(208, 208, 'Krishna Shrestha', '9841070773'),
(209, 209, 'Chetan Dahal', '9851128131, 9851179160'),
(210, 210, 'Aastha Manandhar', '01-4466341, 9841279201'),
(211, 211, 'Santosh Aryal', '01-4782651, 9841799401'),
(212, 212, 'Deepak Kumar Gautam', '01-4783473, 9851144719'),
(213, 213, 'Geeta Dhakal Thapaliya', '9841337013'),
(214, 214, 'Anita Thapa Karki', '9841215402'),
(215, 215, 'Susjma Karki Thapa', '9851089147'),
(216, 216, 'Bel kumari Uchai', '01-4785695'),
(217, 217, 'Kiran Rajbhandari', '9841139043'),
(218, 218, 'Arun Pathak', '01-4494766, 9841820723'),
(219, 219, 'Yosadha Thapa', '9841582134'),
(220, 220, 'Parbati Adhakari', '9818715553'),
(221, 221, 'Dil Bahadur Ghale', '9851054082'),
(222, 222, 'Mahesh Maharjan', '9841689665'),
(223, 223, 'Tara pun', NULL),
(224, 224, 'Usha Subedi', '01-4495435'),
(225, 225, 'Shudha Subba Limbu', '9841407542, 9851177542'),
(226, 226, 'Sohan K Shah', '01-4111882, 9849864188'),
(227, 227, 'Ashok K shah', '9851098978'),
(228, 228, 'Suresh K Choudhary', '9848450512'),
(229, 229, 'Bishnu Devi Shrestha', '9849155445'),
(230, 230, 'Sabitri Dahal', '9845281773'),
(231, 231, 'Ram Balak Baitha', '9816871391'),
(232, 232, 'Benjon Thapa', '9806798604'),
(233, 233, 'Sanjeev Shah', '9845495290'),
(234, 234, 'Pramila Rijal (Sangroula)', '9841335653'),
(235, 235, 'Tulsi Bahadur Awale', '9841214829'),
(236, 236, 'Bhim Bhandari', '9851190252');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `url`) VALUES
(1, 'https://lh3.googleusercontent.com/-YAKPj79cuRk/VYgDpxxwnDI/AAAAAAAAAWA/HTh_nYY5-JE/s640/DSCN5762.JPG'),
(2, 'https://lh3.googleusercontent.com/-9fcL1GWDGmU/VYgDp4jVmZI/AAAAAAAAAWI/2Qj0OXwz0xQ/s640/DSCN5763.JPG'),
(3, 'https://lh3.googleusercontent.com/-pwAmZfQSjdA/VYgDpwwLx5I/AAAAAAAAAWE/oUy7cVybe2A/s640/DSCN5766.JPG'),
(4, 'https://lh3.googleusercontent.com/-4tuMDlDFPPg/VYgDrfvoTRI/AAAAAAAAAWY/QTAhaG0MiPQ/s640/DSCN5772.JPG'),
(5, 'https://lh3.googleusercontent.com/-lPE-_Cwn35g/VYgDrjrOpBI/AAAAAAAAAWc/aAU2FqSlZfc/s640/DSCN5773.JPG'),
(6, 'https://lh3.googleusercontent.com/-cFcC3th8ZNQ/VYgDrgeDOcI/AAAAAAAAAWg/yqRWHgNjNnQ/s640/DSCN5774.JPG'),
(7, 'https://lh3.googleusercontent.com/-Pc3qAe0Q1I8/VYgDs6pAD8I/AAAAAAAAAWo/asIicDuPWcU/s640/DSCN5775.JPG'),
(8, 'https://lh3.googleusercontent.com/-Ayj615MqCnU/VYgDg-xCsqI/AAAAAAAAAVM/c7NnKUf4Wbs/s640/DSCN5755.JPG'),
(9, 'https://lh3.googleusercontent.com/-FvZ3iQPfG5c/VYgDglhFJ7I/AAAAAAAAAVE/OFjUyk-dskY/s640/DSCN5757.JPG'),
(10, 'https://lh3.googleusercontent.com/-VtYYI5PBvts/VYgDg9TIrnI/AAAAAAAAAVI/h2NaxB2VSpM/s640/DSCN5758.JPG'),
(11, 'https://lh3.googleusercontent.com/-_a53vQLQIF0/VYgDiTS-_fI/AAAAAAAAAVo/pjAqWcOBFs4/s640/DSCN5759.JPG'),
(12, 'https://lh3.googleusercontent.com/-rbQ-56WF490/VYgDiajJubI/AAAAAAAAAVc/QfaRrjwtEag/s640/DSCN5761.JPG'),
(13, 'https://lh3.googleusercontent.com/-kSFjvfyqyuQ/VYgDXuWOUZI/AAAAAAAAAUw/fZes-V5iVxo/s640/DSCN5752.JPG'),
(14, 'https://lh3.googleusercontent.com/-xwy9mPjjNYo/VYgDXwcCsXI/AAAAAAAAAUw/Ez4APY-2G0M/s640/DSCN5753.JPG'),
(15, 'https://lh3.googleusercontent.com/-ukzQL5MWHPI/VYgDO5pkxzI/AAAAAAAAAUI/vH0LnhXBd70/s640/DSCN5750.JPG'),
(16, 'https://lh3.googleusercontent.com/-tpcpPBau3RY/VYgDO74jFLI/AAAAAAAAAUE/MO3A6Q7C8C8/s640/DSCN5751.JPG'),
(17, 'https://lh3.googleusercontent.com/-mrlPqKZRhi8/VYgC_crAHCI/AAAAAAAAAS8/-PlVdDWKbSk/s640/DSCN5732.JPG'),
(18, 'https://lh3.googleusercontent.com/-xgqkrdqPzwk/VYgC_6T5ypI/AAAAAAAAATA/M0ugsB_pFmE/s640/DSCN5735.JPG'),
(19, 'https://lh3.googleusercontent.com/-yZf7Fw5HBDw/VYgC_bPHeuI/AAAAAAAAAS4/ZlB1FrDV8Pg/s640/DSCN5736.JPG'),
(20, 'https://lh3.googleusercontent.com/-zf8WsSBo6iQ/VYgDAyK7H6I/AAAAAAAAATI/3MfK60UsyEw/s640/DSCN5738.JPG'),
(21, 'https://lh3.googleusercontent.com/-yGDNy5kANBY/VYgDBSkVhGI/AAAAAAAAATc/6WyGXHe7mK0/s640/DSCN5739.JPG'),
(22, 'https://lh3.googleusercontent.com/-Ndr4scjDVpc/VYgDBR973mI/AAAAAAAAATY/ETO7d3gY4Yc/s640/DSCN5742.JPG'),
(23, 'https://lh3.googleusercontent.com/-Tx7YUBhKE7g/VYgDCLA7vAI/AAAAAAAAATk/PHqG8crhS5Q/s640/DSCN5745.JPG'),
(24, 'https://lh3.googleusercontent.com/-UYy0WNWopHw/VYgCrlHKMfI/AAAAAAAAASI/u8OavlEprQ8/s640/DSCN5701.JPG'),
(25, 'https://lh3.googleusercontent.com/-IWlOd64eo_s/VYgCr8vmf4I/AAAAAAAAASM/wJqtoqlCoS0/s640/DSCN5728.JPG'),
(26, 'https://lh3.googleusercontent.com/-DI1TegfGdho/VYgCr5TPF6I/AAAAAAAAASQ/J9zEEk9BmkM/s640/DSCN5731.JPG'),
(27, 'https://lh3.googleusercontent.com/-7RYSyJzVWj0/VYgCjzfI-aI/AAAAAAAAARw/ehlFtL1Do1c/s640/DSCN5699.JPG'),
(28, 'https://lh3.googleusercontent.com/-CIJWEnLNU6Q/VYgCa68WlaI/AAAAAAAAARc/vMf4JBC_K44/s640/DSCN5685.JPG'),
(29, 'https://lh3.googleusercontent.com/-LH0RGhMIULQ/VYgCSpuztMI/AAAAAAAAARA/_it9iGKlHd8/s640/DSCN5690.JPG'),
(31, 'https://lh3.googleusercontent.com/-TXbsN_VFDIU/VYgB2wLtQjI/AAAAAAAAAQI/EhhS0m3GSr0/s640/DSCN5677.JPG'),
(32, 'https://lh3.googleusercontent.com/-PT65LwsUE5E/VYgB20HKmoI/AAAAAAAAAQM/e7_lOB35tKs/s640/DSCN5679.JPG'),
(33, 'https://lh3.googleusercontent.com/-fwXY4tijPM4/VYgB4dVHJ_I/AAAAAAAAAQc/73ufYEo-bFY/s512/DSCN5682.JPG'),
(34, 'https://lh3.googleusercontent.com/-ORQHnjDpWy0/VYgB4o8QhuI/AAAAAAAAAQg/mEQjQ0_5vQU/s640/DSCN5684.JPG'),
(35, 'https://lh3.googleusercontent.com/-y3MMxqTkvYs/VYgBvDbh91I/AAAAAAAAAP0/cwNaDpnGwO4/s640/DSCN5669.JPG'),
(36, 'https://lh3.googleusercontent.com/-8Np_HpxSDn0/VYgBbd-9d4I/AAAAAAAAAPA/UNfcI0gQjoY/s640/DSCN5667.JPG'),
(37, 'https://lh3.googleusercontent.com/-5AMbMh6u1ro/VYgBVVBWXGI/AAAAAAAAAO0/cztLIzjkC74/s640/DSCN5665.JPG'),
(38, 'https://lh3.googleusercontent.com/-5SbeugRDZSY/VYgAd0Faq0I/AAAAAAAAAN4/Fhd7ytdtJiI/s640/DSCN5661.JPG'),
(39, 'https://lh3.googleusercontent.com/-oRnsZKcwDHA/VYgAdz9WuVI/AAAAAAAAAN4/4isE3fNITSk/s512/DSCN5662.JPG'),
(40, 'https://lh3.googleusercontent.com/-j_47mU0HFiw/VYgARSXkjcI/AAAAAAAAANA/S4Id3_wkgWE/s640/DSCN5653.JPG'),
(41, 'https://lh3.googleusercontent.com/-Vq284mGuEGk/VYgARQ5TXkI/AAAAAAAAANI/E_pAZmyeyWs/s640/DSCN5655.JPG'),
(42, 'https://lh3.googleusercontent.com/-WmVzGuQ6Wjc/VYgARQx9LeI/AAAAAAAAANE/FQ8w7xnaiUQ/s512/DSCN5657.JPG'),
(43, 'https://lh3.googleusercontent.com/-R9u2bLXOe6s/VYgATqZw0jI/AAAAAAAAANU/G2Ob7Q3RTk4/s640/DSCN5659.JPG'),
(44, 'https://lh3.googleusercontent.com/-XzKF_T7scws/VYgAEohGY4I/AAAAAAAAAME/NqfaUfA9HMY/s640/DSCN5643.JPG'),
(45, 'https://lh3.googleusercontent.com/-1jWN3faRhxE/VYgAE2S52CI/AAAAAAAAAMM/42bz7FPkYiY/s640/DSCN5644.JPG'),
(46, 'https://lh3.googleusercontent.com/-7QniVyHFFbQ/VYgAE6sGHtI/AAAAAAAAAMI/6bgtvRMXQ-M/s640/DSCN5645.JPG'),
(47, 'https://lh3.googleusercontent.com/-czUF7I86me4/VYgAGbmGh5I/AAAAAAAAAMc/z6shGUYFc1w/s640/DSCN5649.JPG'),
(48, 'https://lh3.googleusercontent.com/-NjF4nQ0jHpE/VYgAGhOl5fI/AAAAAAAAAMk/bJiaF6-gAmY/s640/DSCN5650.JPG'),
(49, 'https://lh3.googleusercontent.com/-ynCMBOI5QoM/VYgAGnfha0I/AAAAAAAAAMg/oeSPRVRj45c/s512/DSCN5652.JPG'),
(50, 'https://lh3.googleusercontent.com/-QC3TxCo-lhI/VYf_xoEg1CI/AAAAAAAAALk/fGw4HiyarCc/s640/DSCN5640.JPG'),
(51, 'https://lh3.googleusercontent.com/-8hpTv9rYjNw/VYf_xq7Uk9I/AAAAAAAAALc/JEDnXK6sprk/s576/DSCN5641.JPG'),
(52, 'https://lh3.googleusercontent.com/-w_15ORwsd18/VYf_x0y60JI/AAAAAAAAALo/te5wBm-mxw4/s640/DSCN5642.JPG'),
(53, 'https://lh3.googleusercontent.com/-dYQZr3BJf2I/VYf_od5KVhI/AAAAAAAAAKw/EKwS41eKb84/s640/DSCN5624.JPG'),
(54, 'https://lh3.googleusercontent.com/-UbenepeCVZY/VYf_oV_w7AI/AAAAAAAAAK0/iE0JgstKaD8/s640/DSCN5626.JPG'),
(55, 'https://lh3.googleusercontent.com/-kACouIDsK3M/VYf_ocdvCOI/AAAAAAAAAKs/d6azIYN99rI/s640/DSCN5630.JPG'),
(56, 'https://lh3.googleusercontent.com/-6bkVdSLjpRg/VYf_pgrE_1I/AAAAAAAAALE/FnEmN5jZAiQ/s640/DSCN5633.JPG'),
(57, 'https://lh3.googleusercontent.com/-oLT7Kz9gUMI/VYf_bmoKZBI/AAAAAAAAAJ8/No-kUldkseI/s640/DSCN5611.JPG'),
(58, 'https://lh3.googleusercontent.com/-qipvJWJPd30/VYf_biNRYrI/AAAAAAAAAKE/Fmzcj4CtyB0/s640/DSCN5612.JPG'),
(59, 'https://lh3.googleusercontent.com/-E6Y3cFNCj4w/VYf_bkhdQRI/AAAAAAAAAKA/KnQDXsyxgMo/s640/DSCN5614.JPG'),
(60, 'https://lh3.googleusercontent.com/-19Ie72A_1c0/VYf_c7F7iUI/AAAAAAAAAKU/GldETPPk5dI/s640/DSCN5617.JPG'),
(61, 'https://lh3.googleusercontent.com/-wLqb7-rPQus/VYf_N00aBKI/AAAAAAAAAJA/7kViA-RV5P4/s640/DSCN5599.JPG'),
(62, 'https://lh3.googleusercontent.com/-Xkbe-PZnUGs/VYf_N2sn2LI/AAAAAAAAAJI/8mc9z7u7FNM/s640/DSCN5601.JPG'),
(63, 'https://lh3.googleusercontent.com/-eLMndKKaaKM/VYf_NykhRbI/AAAAAAAAAJE/vXgqJhhGjeA/s640/DSCN5602.JPG'),
(64, 'https://lh3.googleusercontent.com/-bD00psrqDb4/VYf_Ra0yZII/AAAAAAAAAJY/csXq_2cw4Ow/s640/DSCN5606.JPG'),
(65, 'https://lh3.googleusercontent.com/-ZEPBEkbfxHw/VYf_RtdSjHI/AAAAAAAAAJg/5CtyZzKy5aI/s640/DSCN5608.JPG'),
(66, 'https://lh3.googleusercontent.com/-Qs_aTxbVeeQ/VYf_RiYZh9I/AAAAAAAAAJc/2Pb0B0n8wng/s640/DSCN5609.JPG'),
(67, 'https://lh3.googleusercontent.com/-G1SwV3Utaas/VYf_CvOSo2I/AAAAAAAAAIY/Ev9ur1hfn3g/s640/DSCN5592.JPG'),
(68, 'https://lh3.googleusercontent.com/-bQs2nsmoBUQ/VYf_Ck3xStI/AAAAAAAAAIg/-rbNYsvIomE/s640/DSCN5593.JPG'),
(69, 'https://lh3.googleusercontent.com/-9dU8jRQo0Ug/VYf_CripMWI/AAAAAAAAAIc/HV8jvug0MWw/s640/DSCN5595.JPG'),
(70, 'https://lh3.googleusercontent.com/-C9vtISPo1nw/VYf-WELEKTI/AAAAAAAAAGo/qJyLQ0Pvpu0/s640/DSCN5574.JPG'),
(71, 'https://lh3.googleusercontent.com/-JAZVahofvrE/VYf-OE9HUBI/AAAAAAAAAGU/wJqI0sJdHyk/s640/DSCN5570.JPG'),
(72, 'https://lh3.googleusercontent.com/-JifCUD4WHkE/VYf-OALh9eI/AAAAAAAAAGQ/fGt1XD6Fa2s/s512/DSCN5572.JPG'),
(73, 'https://lh3.googleusercontent.com/-69jx7tUsjAs/VYf-AhZXU3I/AAAAAAAAAFo/gaAQeG7kxDs/s640/DSCN5559.JPG'),
(74, 'https://lh3.googleusercontent.com/-LOSMJqBn05Y/VYf-Az4Bd2I/AAAAAAAAAFk/BYF9LSflb_g/s640/DSCN5560.JPG'),
(75, 'https://lh3.googleusercontent.com/-HSU2rs4PU3Q/VYf-Anx0u1I/AAAAAAAAAFg/oLdv1FW6dlM/s640/DSCN5563.JPG'),
(76, 'https://lh3.googleusercontent.com/-Or4AgbL0wcU/VYf-CPUbMuI/AAAAAAAAAF0/iBlXoSKgk74/s640/DSCN5567.JPG'),
(77, 'https://lh3.googleusercontent.com/-_t9NZZQkLZg/VYf-CFZ1a7I/AAAAAAAAAF4/novpBssYV04/s640/DSCN5568.JPG'),
(78, 'https://lh3.googleusercontent.com/-9sTeZNmxLpU/VYgBNPtoHEI/AAAAAAAAAOg/8kLPw6qQ8Cs/s512/DSCN5621.JPG'),
(79, 'https://lh3.googleusercontent.com/-LweTPP1TtII/VYf-g70Yk-I/AAAAAAAAAG8/kZOMRpcGpvo/s512/DSCN5575.JPG'),
(80, 'https://lh3.googleusercontent.com/-Q6gfoCJ79-c/VYf-o9ZrnXI/AAAAAAAAAHQ/PpaRoEm9rDI/s512/Annapurna_166.jpg'),
(81, 'https://lh3.googleusercontent.com/-a54q2v5IRWQ/VYf-pXiDrDI/AAAAAAAAAHg/F2QZsSN6GNA/s640/DSCN5579.JPG'),
(82, 'https://lh3.googleusercontent.com/-ZOFCQkVa5dM/VYf-pfjGgFI/AAAAAAAAAHc/M2ydc1t_CBE/s640/DSCN5580.JPG'),
(83, 'https://lh3.googleusercontent.com/-QucuwERztsk/VYf-0Ko9Y8I/AAAAAAAAAHw/-mQVMWvlUJU/s640/DSCN5586.JPG'),
(84, 'https://lh3.googleusercontent.com/-Mc3o7wkr5v4/VYf-0CaGgeI/AAAAAAAAAH0/-szszNZzkhA/s640/DSCN5588.JPG'),
(85, 'https://lh3.googleusercontent.com/-8O3JPJiBwAw/VYf-0YFct2I/AAAAAAAAAH8/8O_hZGfwCqw/s640/DSCN5589.JPG'),
(86, 'https://lh3.googleusercontent.com/-2tFzCm9C-8M/VYk8VEOZODI/AAAAAAAAAZA/YcMCTW04vII/s640/IMG_7051.JPG'),
(87, 'https://lh3.googleusercontent.com/-8BJjNC_zjX0/VYk8VCAZ7NI/AAAAAAAAAZE/mrDKYasM_rE/s640/IMG_7052.JPG'),
(88, 'https://lh3.googleusercontent.com/-4xxTfuBVaEE/VYk8fWDPP-I/AAAAAAAAAZc/jTYX_1lseqo/s640/IMG_7053.JPG'),
(89, 'https://lh3.googleusercontent.com/-2Od59kRbUMk/VYk8fZZYleI/AAAAAAAAAZg/zHuEtp8QhPE/s640/IMG_7054.JPG'),
(90, 'https://lh3.googleusercontent.com/-F0yV74EPkJw/VYk8tU1D7XI/AAAAAAAAAZ8/vyBBLb9GKr4/s640/IMG_7057.JPG'),
(91, 'https://lh3.googleusercontent.com/-33REWzmWpiY/VYk86HOTOkI/AAAAAAAAAaM/8arLW4q3nk0/s640/IMG_7058.JPG'),
(92, 'https://lh3.googleusercontent.com/-k3za-ULqZ3g/VYk86VUaGdI/AAAAAAAAAaQ/firHpOVVQk4/s640/IMG_7059.JPG'),
(93, 'https://lh3.googleusercontent.com/-CtDaypoZt8k/VYk9B7xCe8I/AAAAAAAAAak/qD1-L30d-_w/s640/IMG_7060.JPG'),
(94, 'https://lh3.googleusercontent.com/-nm7vTc_xIa4/VYk9Oo8j98I/AAAAAAAAAbA/Af_99a7oobs/s640/IMG_7062.JPG'),
(95, 'https://lh3.googleusercontent.com/-F0QoyuoDG3g/VYk9Ou6DoSI/AAAAAAAAAa8/NfpumKD9Vuo/s640/IMG_7063.JPG'),
(96, 'https://lh3.googleusercontent.com/-Nr5kUx_nUi4/VaJsIxJJAcI/AAAAAAAAAeA/7U8JDcxv4bo/s512-Ic42/11714441_10204464311263273_1864390858_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `review` varchar(255) DEFAULT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `display` int(11) DEFAULT NULL,
  `hostel_id` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review`, `first_name`, `last_name`, `email`, `display`, `hostel_id`, `date`, `id`) VALUES
('njsbd', 'x', 'y', 'x@y.com', 0, 30, '2015-07-03 22:13:13', 15),
('One of the best hostel in babarmahal, Baneshwor.\nhttps://www.facebook.com/suryakiranboyshostel', 'Bikash', 'pandey', 'bikash@gmail.com', 1, 209, '2015-07-05 00:03:38', 16),
('asdfasdfsad', 'adefgad', 'asdfasf', 'asdfswd@asdf.com', 0, 13, '2015-07-06 23:03:53', 20),
('dsfg', 'dsfg', 'gsd', 'dsg@sdfg.sf', 0, 103, '2015-07-06 23:06:14', 21),
('Free  WiFi \nHot Water\nPeace environment\nLocker\nHigenic food\n', 'Ramkrishna', 'Adhikari', 'ramkrishnaadhikari065@Gmail.com', 1, 25, '2015-07-05 11:18:13', 18),
('ssssssssssssssssssssss', 'bijay', 'chhetri', 'bijay0710@gmail.com', 0, 219, '2015-07-08 23:45:58', 22);

-- --------------------------------------------------------

--
-- Table structure for table `temp_fee_structure`
--

CREATE TABLE IF NOT EXISTS `temp_fee_structure` (
  `id` int(11) NOT NULL,
  `admission` int(11) DEFAULT NULL,
  `security_deposit` int(11) DEFAULT NULL,
  `1_bed` varchar(255) DEFAULT NULL,
  `2_bed` varchar(255) DEFAULT NULL,
  `3_bed` varchar(255) DEFAULT NULL,
  `4_bed` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=241 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_fee_structure`
--

INSERT INTO `temp_fee_structure` (`id`, `admission`, `security_deposit`, `1_bed`, `2_bed`, `3_bed`, `4_bed`) VALUES
(239, 3000, 5000, '15000', '8500', '8000', '8000');

-- --------------------------------------------------------

--
-- Table structure for table `temp_hostel`
--

CREATE TABLE IF NOT EXISTS `temp_hostel` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `estd_year` int(11) DEFAULT NULL,
  `fee_structure_id` int(11) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=241 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_hostel`
--

INSERT INTO `temp_hostel` (`id`, `name`, `gender`, `address`, `estd_year`, `fee_structure_id`, `capacity`) VALUES
(239, 'City Stay Boys Hostel', '	boys', 'Samakhushi Chowk, Kathmandu ', 2012, 239, 0);

-- --------------------------------------------------------

--
-- Table structure for table `temp_hostel_facility`
--

CREATE TABLE IF NOT EXISTS `temp_hostel_facility` (
  `id` int(11) NOT NULL,
  `hostel_id` int(11) NOT NULL,
  `facility_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_hostel_facility`
--

INSERT INTO `temp_hostel_facility` (`id`, `hostel_id`, `facility_id`) VALUES
(104, 239, 3),
(105, 239, 4),
(107, 239, 6),
(108, 239, 7);

-- --------------------------------------------------------

--
-- Table structure for table `temp_owner`
--

CREATE TABLE IF NOT EXISTS `temp_owner` (
  `id` int(11) NOT NULL,
  `hostel_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=241 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_owner`
--

INSERT INTO `temp_owner` (`id`, `hostel_id`, `name`, `contact`) VALUES
(239, 239, ' Bhim Bhandari ', '9851190252');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_structure`
--
ALTER TABLE `fee_structure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_fee_st_hostel` (`fee_structure_id`);

--
-- Indexes for table `hostel_facility`
--
ALTER TABLE `hostel_facility`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_host_facility` (`hostel_id`),
  ADD KEY `fk_facility_host` (`facility_id`);

--
-- Indexes for table `hostel_photo`
--
ALTER TABLE `hostel_photo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_host_photo` (`hostel_id`),
  ADD KEY `fk_photo_host` (`photo_id`);

--
-- Indexes for table `main_photo`
--
ALTER TABLE `main_photo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_main_host` (`hostel_id`),
  ADD KEY `fk_main_photo` (`photo_id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_owner_hostel` (`hostel_id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_fee_structure`
--
ALTER TABLE `temp_fee_structure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_hostel`
--
ALTER TABLE `temp_hostel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_temp_fee_st_hostel` (`fee_structure_id`);

--
-- Indexes for table `temp_hostel_facility`
--
ALTER TABLE `temp_hostel_facility`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_temp_host_facility` (`hostel_id`),
  ADD KEY `fk_temp_facility_host` (`facility_id`);

--
-- Indexes for table `temp_owner`
--
ALTER TABLE `temp_owner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_temp_owner_hostel` (`hostel_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `fee_structure`
--
ALTER TABLE `fee_structure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=237;
--
-- AUTO_INCREMENT for table `hostel`
--
ALTER TABLE `hostel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=237;
--
-- AUTO_INCREMENT for table `hostel_facility`
--
ALTER TABLE `hostel_facility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT for table `hostel_photo`
--
ALTER TABLE `hostel_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `main_photo`
--
ALTER TABLE `main_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=237;
--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `temp_fee_structure`
--
ALTER TABLE `temp_fee_structure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=241;
--
-- AUTO_INCREMENT for table `temp_hostel`
--
ALTER TABLE `temp_hostel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=241;
--
-- AUTO_INCREMENT for table `temp_hostel_facility`
--
ALTER TABLE `temp_hostel_facility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT for table `temp_owner`
--
ALTER TABLE `temp_owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=241;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `hostel`
--
ALTER TABLE `hostel`
  ADD CONSTRAINT `fk_fee_st_hostel` FOREIGN KEY (`fee_structure_id`) REFERENCES `fee_structure` (`id`);

--
-- Constraints for table `hostel_facility`
--
ALTER TABLE `hostel_facility`
  ADD CONSTRAINT `fk_facility_host` FOREIGN KEY (`facility_id`) REFERENCES `facility` (`id`),
  ADD CONSTRAINT `fk_host_facility` FOREIGN KEY (`hostel_id`) REFERENCES `hostel` (`id`);

--
-- Constraints for table `hostel_photo`
--
ALTER TABLE `hostel_photo`
  ADD CONSTRAINT `fk_host_photo` FOREIGN KEY (`hostel_id`) REFERENCES `hostel` (`id`),
  ADD CONSTRAINT `fk_photo_host` FOREIGN KEY (`photo_id`) REFERENCES `photo` (`id`);

--
-- Constraints for table `main_photo`
--
ALTER TABLE `main_photo`
  ADD CONSTRAINT `fk_main_host` FOREIGN KEY (`hostel_id`) REFERENCES `hostel` (`id`),
  ADD CONSTRAINT `fk_main_photo` FOREIGN KEY (`photo_id`) REFERENCES `photo` (`id`);

--
-- Constraints for table `owner`
--
ALTER TABLE `owner`
  ADD CONSTRAINT `fk_owner_hostel` FOREIGN KEY (`hostel_id`) REFERENCES `hostel` (`id`);

--
-- Constraints for table `temp_hostel`
--
ALTER TABLE `temp_hostel`
  ADD CONSTRAINT `fk_temp_fee_st_hostel` FOREIGN KEY (`fee_structure_id`) REFERENCES `temp_fee_structure` (`id`);

--
-- Constraints for table `temp_hostel_facility`
--
ALTER TABLE `temp_hostel_facility`
  ADD CONSTRAINT `fk_temp_facility_host` FOREIGN KEY (`facility_id`) REFERENCES `facility` (`id`),
  ADD CONSTRAINT `fk_temp_host_facility` FOREIGN KEY (`hostel_id`) REFERENCES `temp_hostel` (`id`);

--
-- Constraints for table `temp_owner`
--
ALTER TABLE `temp_owner`
  ADD CONSTRAINT `fk_temp_owner_hostel` FOREIGN KEY (`hostel_id`) REFERENCES `temp_hostel` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
