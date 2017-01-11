-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2016 at 07:15 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `merohostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `hostel_position`
--

CREATE TABLE IF NOT EXISTS `hostel_position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `latitude` double NOT NULL,
  `lognitude` double NOT NULL,
  `hostel_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hostel_id` (`hostel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `hostel_position`
--

INSERT INTO `hostel_position` (`id`, `latitude`, `lognitude`, `hostel_id`) VALUES
(1, 27.702344, 85.324236, 4),
(2, 27.7023427, 85.3210372, 181),
(3, 27.7017454, 85.3228218, 202),
(4, 27.7017502, 85.3228218, 208),
(5, 27.690591, 85.3281037, 206),
(6, 27.691048, 85.3313357, 116),
(7, 27.689278, 85.3044982, 149),
(8, 27.705093, 85.3240407, 194),
(9, 27.701883, 85.3273757, 6),
(10, 27.692317, 85.3285837, 210),
(11, 27.698893, 85.3346316, 96),
(12, 27.685734, 85.3201102, 243),
(13, 27.6930221, 85.3282934, 34),
(14, 27.68686, 85.3244052, 234),
(15, 27.739204, 85.3133583, 130);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hostel_position`
--
ALTER TABLE `hostel_position`
  ADD CONSTRAINT `hostel_position_ibfk_1` FOREIGN KEY (`hostel_id`) REFERENCES `hostel` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
