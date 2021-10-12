-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 02, 2020 at 01:22 PM
-- Server version: 5.6.47-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `football`
--

-- --------------------------------------------------------

--
-- Table structure for table `current_tourn_points`
--

CREATE TABLE `current_tourn_points` (
  `ctp_id` int(11) NOT NULL,
  `sno` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `match_no` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `team_group` varchar(255) NOT NULL,
  `played_games` varchar(255) NOT NULL,
  `points` int(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `wins` varchar(255) NOT NULL,
  `loss` varchar(255) NOT NULL,
  `tie` varchar(255) NOT NULL,
  `goals_scored` int(11) NOT NULL,
  `goals_scored_against` int(11) NOT NULL,
  `goals_differences` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `current_tourn_points`
--

INSERT INTO `current_tourn_points` (`ctp_id`, `sno`, `tour_id`, `match_no`, `team_id`, `team_group`, `played_games`, `points`, `position`, `wins`, `loss`, `tie`, `goals_scored`, `goals_scored_against`, `goals_differences`) VALUES
(5, 0, 7, 2, 29, 'A', '1', 4, '', '0', '1', '0', 4, 10, -6),
(6, 0, 7, 2, 33, 'A', '1', 10, '', '1', '0', '0', 10, 4, 6),
(9, 0, 7, 1, 29, 'A', '1', 4, '', '1', '0', '0', 4, 1, 3),
(11, 0, 8, 1, 29, 'A', '1', 3, '', '1', '0', '0', 4, 1, 3),
(12, 0, 8, 1, 33, 'A', '1', 0, '', '0', '1', '0', 1, 4, -3),
(13, 0, 8, 2, 29, 'A', '1', 3, '', '1', '0', '0', 5, 2, 3),
(14, 0, 8, 2, 30, 'A', '1', 0, '', '0', '1', '0', 2, 5, -3),
(15, 0, 8, 4, 32, 'B', '1', 1, '', '0', '0', '1', 2, 2, 2),
(16, 0, 8, 4, 43, 'B', '1', 1, '', '0', '0', '1', 2, 2, 2),
(17, 0, 8, 3, 32, 'B', '1', 3, '', '1', '0', '0', 7, 4, 3),
(18, 0, 8, 3, 3, 'B', '1', 0, '', '0', '1', '0', 4, 7, -3),
(19, 0, 8, 5, 29, 'SemiF', '1', 3, '', '1', '0', '0', 2, 1, 1),
(20, 0, 8, 5, 32, 'SemiF', '1', 0, '', '0', '1', '0', 1, 2, -1),
(21, 0, 8, 6, 33, 'SemiF', '1', 0, '', '0', '1', '0', 0, 2, -2),
(22, 0, 8, 6, 43, 'SemiF', '1', 3, '', '1', '0', '0', 2, 0, 2),
(23, 0, 8, 7, 29, 'Finals', '1', 3, '', '1', '0', '0', 2, 1, 1),
(24, 0, 8, 7, 43, 'Finals', '1', 0, '', '0', '1', '0', 1, 2, -1),
(25, 0, 9, 1, 63, 'A', '1', 0, '', '0', '1', '0', 3, 5, -2),
(26, 0, 9, 1, 64, 'A', '1', 3, '', '1', '0', '0', 5, 3, 2),
(27, 0, 9, 2, 65, 'A', '1', 3, '', '1', '0', '0', 2, 1, 1),
(28, 0, 9, 2, 66, 'A', '1', 0, '', '0', '1', '0', 1, 2, -1),
(29, 0, 9, 3, 67, 'B', '1', 0, '', '0', '1', '0', 1, 2, -1),
(30, 0, 9, 3, 68, 'B', '1', 3, '', '1', '0', '0', 2, 1, 1),
(31, 0, 9, 4, 62, 'B', '1', 0, '', '0', '1', '0', 1, 5, -4),
(32, 0, 9, 4, 69, 'B', '1', 3, '', '1', '0', '0', 5, 1, 4),
(33, 0, 9, 5, 70, 'C', '1', 3, '', '1', '0', '0', 2, 0, 2),
(34, 0, 9, 5, 71, 'C', '1', 0, '', '0', '1', '0', 0, 2, -2),
(35, 0, 9, 6, 72, 'C', '1', 0, '', '0', '1', '0', 0, 4, -4),
(36, 0, 9, 6, 73, 'C', '1', 3, '', '1', '0', '0', 4, 0, 4),
(37, 0, 9, 7, 74, 'D', '1', 3, '', '1', '0', '0', 3, 2, 1),
(38, 0, 9, 7, 75, 'D', '1', 0, '', '0', '1', '0', 2, 3, -1),
(39, 0, 9, 8, 76, 'D', '1', 0, '', '0', '1', '0', 1, 5, -4),
(40, 0, 9, 8, 77, 'D', '1', 3, '', '1', '0', '0', 5, 1, 4),
(41, 0, 9, 9, 63, 'A', '1', 3, '', '1', '0', '0', 2, 1, 1),
(42, 0, 9, 9, 66, 'A', '1', 0, '', '0', '1', '0', 1, 2, -1),
(43, 0, 9, 10, 64, 'A', '1', 1, '', '0', '0', '1', 1, 1, 1),
(44, 0, 9, 10, 65, 'A', '1', 1, '', '0', '0', '1', 1, 1, 1),
(45, 0, 9, 11, 67, 'B', '1', 1, '', '0', '0', '1', 2, 2, 2),
(46, 0, 9, 11, 69, 'B', '1', 1, '', '0', '0', '1', 2, 2, 2),
(47, 0, 9, 12, 68, 'B', '1', 0, '', '0', '1', '0', 1, 2, -1),
(48, 0, 9, 12, 62, 'B', '1', 3, '', '1', '0', '0', 2, 1, 1),
(49, 0, 9, 13, 70, 'C', '1', 1, '', '0', '0', '1', 2, 2, 2),
(50, 0, 9, 13, 73, 'C', '1', 1, '', '0', '0', '1', 2, 2, 2),
(51, 0, 9, 14, 71, 'C', '1', 1, '', '0', '0', '1', 2, 2, 2),
(52, 0, 9, 14, 72, 'C', '1', 1, '', '0', '0', '1', 2, 2, 2),
(53, 0, 9, 15, 74, 'D', '1', 1, '', '0', '0', '1', 1, 1, 1),
(54, 0, 9, 15, 77, 'D', '1', 1, '', '0', '0', '1', 1, 1, 1),
(55, 0, 9, 16, 75, 'D', '1', 3, '', '1', '0', '0', 3, 2, 1),
(56, 0, 9, 16, 76, 'D', '1', 0, '', '0', '1', '0', 2, 3, -1),
(57, 0, 9, 17, 63, 'A', '1', 0, '', '0', '1', '0', 0, 3, -3),
(58, 0, 9, 17, 65, 'A', '1', 3, '', '1', '0', '0', 3, 0, 3),
(59, 0, 9, 18, 64, 'A', '1', 3, '', '1', '0', '0', 3, 2, 1),
(60, 0, 9, 18, 66, 'A', '1', 0, '', '0', '1', '0', 2, 3, -1),
(61, 0, 9, 19, 67, 'B', '1', 3, '', '1', '0', '0', 1, 0, 1),
(62, 0, 9, 19, 62, 'B', '1', 0, '', '0', '1', '0', 0, 1, -1),
(63, 0, 9, 20, 68, 'B', '1', 3, '', '1', '0', '0', 2, 1, 1),
(64, 0, 9, 20, 69, 'B', '1', 0, '', '0', '1', '0', 1, 2, -1),
(65, 0, 9, 21, 70, 'C', '1', 3, '', '1', '0', '0', 5, 0, 5),
(66, 0, 9, 21, 72, 'C', '1', 0, '', '0', '1', '0', 0, 5, -5),
(67, 0, 9, 22, 71, 'C', '1', 0, '', '0', '1', '0', 0, 4, -4),
(68, 0, 9, 22, 73, 'C', '1', 3, '', '0', '1', '0', 4, 0, 4),
(69, 0, 9, 23, 74, 'D', '1', 1, '', '0', '0', '1', 3, 3, 3),
(70, 0, 9, 23, 76, 'D', '1', 1, '', '0', '0', '1', 3, 3, 3),
(71, 0, 9, 24, 75, 'D', '1', 1, '', '0', '0', '1', 3, 3, 3),
(72, 0, 9, 24, 77, 'D', '1', 1, '', '0', '0', '1', 3, 3, 3),
(73, 0, 9, 28, 77, 'SemiF', '1', 0, '', '0', '1', '0', 0, 0, 0),
(74, 0, 9, 28, 70, 'SemiF', '1', 1, '', '1', '0', '0', 0, 0, 0),
(77, 0, 9, 26, 64, 'SemiF', '1', 0, '', '0', '1', '0', 0, 0, 0),
(78, 0, 9, 26, 68, 'SemiF', '1', 1, '', '1', '0', '0', 0, 0, 0),
(79, 0, 9, 27, 73, 'SemiF', '1', 1, '', '1', '0', '0', 2, 1, 1),
(80, 0, 9, 27, 74, 'SemiF', '1', 0, '', '0', '1', '0', 1, 2, -1),
(81, 0, 9, 25, 65, 'SemiF', '1', 0, '', '0', '1', '0', 1, 1, 0),
(82, 0, 9, 25, 69, 'SemiF', '1', 1, '', '1', '0', '0', 1, 1, 0),
(83, 0, 9, 33, 73, 'Finals', '1', 1, '', '1', '0', '0', 3, 2, 1),
(84, 0, 9, 33, 69, 'Finals', '1', 0, '', '0', '1', '0', 2, 3, -1),
(85, 0, 10, 1, 88, 'A', '1', 3, '', '1', '0', '0', 3, 0, 3),
(86, 0, 10, 1, 90, 'A', '1', 0, '', '0', '1', '0', 0, 3, -3),
(87, 0, 10, 2, 92, 'A', '1', 3, '', '1', '0', '0', 3, 1, 2),
(88, 0, 10, 2, 95, 'A', '1', 0, '', '0', '1', '0', 1, 3, -2),
(89, 0, 10, 3, 89, 'B', '1', 3, '', '0', '1', '0', 3, 0, 3),
(90, 0, 10, 3, 91, 'B', '1', 0, '', '1', '0', '0', 0, 3, -3),
(91, 0, 10, 4, 93, 'B', '1', 0, '', '0', '1', '0', 1, 3, -2),
(92, 0, 10, 4, 94, 'B', '1', 3, '', '1', '0', '0', 3, 1, 2),
(93, 0, 10, 5, 96, 'C', '1', 3, '', '1', '0', '0', 5, 2, 3),
(94, 0, 10, 5, 98, 'C', '1', 0, '', '0', '1', '0', 2, 5, -3),
(95, 0, 10, 6, 102, 'C', '1', 3, '', '1', '0', '0', 2, 0, 2),
(96, 0, 10, 6, 104, 'C', '1', 0, '', '0', '1', '0', 0, 2, -2),
(97, 0, 10, 7, 97, 'D', '1', 0, '', '0', '1', '0', 0, 3, -3),
(98, 0, 10, 7, 103, 'D', '1', 3, '', '1', '0', '0', 3, 0, 3),
(99, 0, 10, 8, 100, 'D', '1', 0, '', '0', '1', '0', 1, 2, -1),
(100, 0, 10, 8, 101, 'D', '1', 3, '', '1', '0', '0', 2, 1, 1),
(101, 0, 10, 9, 88, 'A', '1', 3, '', '1', '0', '0', 8, 1, 7),
(102, 0, 10, 9, 95, 'A', '1', 0, '', '0', '1', '0', 1, 8, -7),
(103, 0, 10, 10, 90, 'A', '1', 3, '', '1', '0', '0', 2, 1, 1),
(104, 0, 10, 10, 92, 'A', '1', 0, '', '0', '1', '0', 1, 2, -1),
(105, 0, 10, 11, 89, 'B', '1', 3, '', '1', '0', '0', 4, 1, 3),
(106, 0, 10, 11, 94, 'B', '1', 0, '', '0', '1', '0', 1, 4, -3),
(107, 0, 10, 12, 91, 'B', '1', 3, '', '1', '0', '0', 10, 0, 10),
(108, 0, 10, 12, 93, 'B', '1', 0, '', '0', '1', '0', 0, 10, -10),
(109, 0, 10, 13, 96, 'C', '1', 1, '', '0', '0', '1', 1, 1, 0),
(110, 0, 10, 13, 104, 'C', '1', 1, '', '0', '0', '1', 1, 1, 0),
(111, 0, 10, 14, 98, 'C', '1', 0, '', '0', '1', '0', 2, 8, -6),
(112, 0, 10, 14, 102, 'C', '1', 3, '', '1', '0', '0', 8, 2, 6),
(113, 0, 10, 15, 97, 'D', '1', 0, '', '0', '1', '0', 3, 5, -2),
(114, 0, 10, 15, 101, 'D', '1', 3, '', '1', '0', '0', 5, 3, 2),
(115, 0, 10, 16, 103, 'D', '1', 1, '', '0', '0', '1', 3, 3, 0),
(116, 0, 10, 16, 100, 'D', '1', 1, '', '0', '0', '1', 3, 3, 0),
(119, 0, 10, 17, 88, 'A', '1', 3, '', '1', '0', '0', 4, 2, 2),
(120, 0, 10, 17, 92, 'A', '1', 0, '', '0', '1', '0', 2, 4, -2),
(121, 0, 10, 18, 90, 'A', '1', 1, '', '0', '0', '1', 2, 2, 0),
(122, 0, 10, 18, 95, 'A', '1', 1, '', '0', '0', '1', 2, 2, 0),
(123, 0, 10, 19, 89, 'B', '1', 3, '', '1', '0', '0', 10, 0, 10),
(124, 0, 10, 19, 93, 'B', '1', 0, '', '0', '1', '0', 0, 10, -10),
(125, 0, 10, 20, 96, 'C', '1', 3, '', '1', '0', '0', 1, 0, 1),
(126, 0, 10, 20, 102, 'C', '1', 0, '', '0', '1', '0', 0, 1, -1),
(127, 0, 10, 21, 98, 'C', '1', 1, '', '0', '0', '1', 4, 4, 0),
(128, 0, 10, 21, 104, 'C', '1', 1, '', '0', '0', '1', 4, 4, 0),
(129, 0, 10, 23, 97, 'D', '1', 3, '', '1', '0', '0', 3, 2, 1),
(130, 0, 10, 23, 100, 'D', '1', 0, '', '0', '1', '0', 2, 3, -1),
(131, 0, 10, 24, 103, 'D', '1', 0, '', '0', '1', '0', 2, 3, -1),
(132, 0, 10, 24, 101, 'D', '1', 3, '', '1', '0', '0', 3, 2, 1),
(133, 0, 10, 29, 88, 'QuaterF', '1', 1, '', '1', '0', '0', 3, 0, 3),
(134, 0, 10, 29, 96, 'QuaterF', '1', 0, '', '0', '1', '0', 0, 3, -3),
(135, 0, 10, 30, 88, 'QuaterF', '1', 1, '', '1', '0', '0', 3, 0, 3),
(136, 0, 10, 30, 96, 'QuaterF', '1', 0, '', '0', '1', '0', 0, 3, -3),
(137, 0, 10, 27, 96, 'QuaterF', '1', 1, '', '1', '0', '0', 2, 1, 1),
(138, 0, 10, 27, 103, 'QuaterF', '1', 0, '', '0', '1', '0', 1, 2, -1),
(139, 0, 10, 30, 88, 'SemiF', '1', 1, '', '1', '0', '0', 3, 0, 3),
(140, 0, 10, 30, 96, 'SemiF', '1', 0, '', '0', '1', '0', 0, 3, -3),
(141, 0, 10, 32, 88, 'Finals', '1', 0, '', '0', '1', '0', 3, 4, -1),
(142, 0, 10, 32, 89, 'Finals', '1', 1, '', '1', '0', '0', 4, 3, 1),
(143, 0, 10, 31, 89, 'SemiF', '1', 1, '', '1', '0', '0', 4, 1, 3),
(144, 0, 10, 31, 101, 'SemiF', '1', -16, '', '0', '1', '0', 1, 4, -3),
(145, 0, 11, 1, 29, 'A', '1', 3, '', '1', '0', '0', 3, 0, 3),
(146, 0, 11, 1, 30, 'A', '1', 0, '', '0', '1', '0', 0, 3, -3),
(147, 0, 11, 2, 30, 'Finals', '1', 1, '', '1', '0', '0', 3, 2, 1),
(148, 0, 11, 2, 29, 'Finals', '1', 0, '', '0', '1', '0', 2, 3, -1),
(149, 0, 12, 1, 106, 'A', '1', 3, '', '1', '0', '0', 3, 0, 3),
(150, 0, 12, 1, 107, 'A', '1', 0, '', '0', '1', '0', 0, 3, -3),
(151, 0, 12, 2, 108, 'A', '1', 0, '', '0', '1', '0', 1, 9, -8),
(152, 0, 12, 2, 109, 'A', '1', 3, '', '1', '0', '0', 9, 1, 8),
(155, 0, 12, 4, 112, 'B', '1', 1, '', '0', '0', '1', 1, 1, 0),
(156, 0, 12, 4, 113, 'B', '1', 1, '', '0', '0', '1', 1, 1, 0),
(157, 0, 12, 5, 108, 'A', '1', 1, '', '0', '0', '1', 1, 1, 0),
(158, 0, 12, 5, 106, 'A', '1', 1, '', '0', '0', '1', 1, 1, 0),
(159, 0, 12, 6, 109, 'A', '1', 3, '', '1', '0', '0', 8, 0, 8),
(160, 0, 12, 6, 107, 'A', '1', 0, '', '0', '1', '0', 0, 8, -8),
(161, 0, 13, 1, 63, 'A', '1', 0, '', '0', '1', '0', 1, 2, -1),
(162, 0, 13, 1, 74, 'A', '1', 1, '', '1', '0', '0', 2, 1, 1),
(163, 0, 13, 2, 65, 'A', '1', 1, '', '0', '0', '1', 1, 1, 0),
(164, 0, 13, 2, 72, 'A', '1', 1, '', '0', '0', '1', 1, 1, 0),
(165, 0, 13, 3, 64, 'B', '1', 1, '', '0', '0', '1', 0, 0, 0),
(166, 0, 13, 3, 68, 'B', '1', 1, '', '0', '0', '1', 0, 0, 0),
(167, 0, 13, 5, 69, 'C', '1', 1, '', '0', '0', '1', 1, 1, 0),
(168, 0, 13, 5, 73, 'C', '1', 1, '', '0', '0', '1', 1, 1, 0),
(169, 0, 13, 6, 116, 'C', '1', 1, '', '0', '0', '1', 1, 1, 0),
(170, 0, 13, 6, 114, 'C', '1', 1, '', '0', '0', '1', 1, 1, 0),
(171, 0, 13, 7, 71, 'D', '1', 3, '', '1', '0', '0', 2, 1, 1),
(172, 0, 13, 7, 75, 'D', '1', 0, '', '0', '1', '0', 1, 2, -1),
(175, 0, 13, 11, 64, 'B', '1', 1, '', '0', '0', '1', 1, 1, 0),
(176, 0, 13, 11, 66, 'B', '1', 1, '', '0', '0', '1', 1, 1, 0),
(177, 0, 13, 9, 63, 'A', '1', 3, '', '1', '0', '0', 3, 2, 1),
(178, 0, 13, 9, 72, 'A', '1', 0, '', '0', '1', '0', 2, 3, -1),
(181, 0, 13, 13, 68, 'B', '1', 3, '', '1', '0', '0', 2, 1, 1),
(182, 0, 13, 13, 62, 'B', '1', 0, '', '0', '1', '0', 1, 2, -1),
(183, 0, 13, 12, 64, 'B', '1', 3, '', '1', '0', '0', 4, 0, 4),
(184, 0, 13, 12, 66, 'B', '1', 0, '', '0', '1', '0', 0, 4, -4),
(187, 0, 13, 14, 114, 'C', '1', 1, '', '0', '0', '1', 3, 3, 0),
(188, 0, 13, 14, 69, 'C', '1', 1, '', '0', '0', '1', 3, 3, 0),
(189, 0, 13, 0, 73, 'C', '1', 3, '', '1', '0', '0', 3, 0, 3),
(190, 0, 13, 0, 116, 'C', '1', 0, '', '0', '1', '0', 0, 3, -3),
(193, 0, 13, 16, 63, 'A', '1', 1, '', '0', '0', '1', 1, 1, 0),
(194, 0, 13, 16, 65, 'A', '1', 1, '', '0', '0', '1', 1, 1, 0),
(195, 0, 13, 18, 62, 'A', '1', 0, '', '0', '1', '0', 0, 6, -6),
(196, 0, 13, 18, 64, 'A', '1', 6, '', '1', '0', '0', 6, 0, 6),
(197, 0, 13, 19, 66, 'B', '1', 0, '', '0', '1', '0', 1, 5, -4),
(198, 0, 13, 19, 68, 'B', '1', 3, '', '1', '0', '0', 5, 1, 4),
(199, 0, 13, 20, 114, 'C', '1', 0, '', '0', '1', '0', 0, 2, -2),
(200, 0, 13, 20, 73, 'C', '1', 3, '', '1', '0', '0', 2, 0, 2),
(201, 0, 13, 23, 71, 'D', '1', 1, '', '1', '0', '0', 1, 0, 1),
(202, 0, 13, 23, 117, 'D', '1', 0, '', '0', '1', '0', 0, 1, -1),
(203, 0, 13, 24, 115, 'D', '1', 3, '', '1', '0', '0', 3, 0, 3),
(204, 0, 13, 24, 75, 'D', '1', 0, '', '0', '1', '0', 0, 3, -3),
(205, 0, 13, 4, 62, 'B', '1', 1, '', '1', '0', '0', 1, 0, 1),
(206, 0, 13, 4, 66, 'B', '1', 0, '', '0', '1', '0', 0, 1, -1),
(207, 0, 13, 8, 115, 'D', '1', 3, '', '1', '0', '0', 2, 0, 2),
(208, 0, 13, 8, 117, 'D', '1', 0, '', '0', '1', '0', 0, 2, -2),
(209, 0, 13, 30, 64, 'QuaterF', '1', 1, '', '1', '0', '0', 4, 2, 2),
(210, 0, 13, 30, 74, 'QuaterF', '1', 0, '', '0', '1', '0', 2, 4, -2),
(211, 0, 13, 33, 69, 'QuaterF', '1', 1, '', '1', '0', '0', 2, 1, 1),
(212, 0, 13, 33, 115, 'QuaterF', '1', 0, '', '0', '1', '0', 1, 2, -1),
(213, 0, 13, 31, 63, 'QuaterF', '1', 0, '', '0', '1', '0', 0, 2, -2),
(214, 0, 13, 31, 68, 'QuaterF', '1', 1, '', '1', '0', '0', 2, 0, 2),
(215, 0, 13, 34, 73, 'QuaterF', '1', 1, '', '1', '0', '0', 2, 0, 2),
(216, 0, 13, 34, 75, 'QuaterF', '1', 0, '', '0', '1', '0', 0, 2, -2),
(217, 0, 13, 35, 73, 'SemiF', '1', 1, '', '1', '0', '0', 3, 0, 3),
(218, 0, 13, 35, 64, 'SemiF', '1', 0, '', '0', '1', '0', 0, 3, -3),
(219, 0, 13, 36, 69, 'SemiF', '1', 1, '', '1', '0', '0', 4, 3, 1),
(220, 0, 13, 36, 68, 'SemiF', '1', 0, '', '0', '1', '0', 3, 4, -1),
(221, 0, 13, 38, 73, 'Finals', '1', 1, '', '1', '0', '0', 5, 4, 1),
(222, 0, 13, 38, 69, 'Finals', '1', 0, '', '0', '1', '0', 4, 5, -1),
(225, 0, 13, 15, 71, 'D', '1', 0, '', '0', '1', '0', 0, 1, -1),
(226, 0, 13, 15, 115, 'D', '1', 3, '', '1', '0', '0', 1, 0, 1),
(227, 0, 13, 17, 75, 'D', '1', 3, '', '1', '0', '0', 4, 0, 4),
(228, 0, 13, 17, 117, 'D', '1', 0, '', '0', '1', '0', 0, 4, -4),
(229, 0, 13, 21, 69, 'D', '1', 3, '', '1', '0', '0', 1, 0, 1),
(230, 0, 13, 21, 116, 'D', '1', 0, '', '0', '1', '0', 0, 1, -1),
(233, 0, 13, 10, 74, 'A', '1', 1, '', '0', '0', '1', 1, 1, 0),
(234, 0, 13, 10, 65, 'A', '1', 1, '', '0', '0', '1', 1, 1, 0),
(235, 0, 12, 7, 113, 'B', '1', 1, '', '0', '0', '1', 2, 2, 0),
(236, 0, 12, 7, 111, 'B', '1', 1, '', '0', '0', '1', 2, 2, 0),
(241, 0, 12, 10, 107, 'A', '1', 3, '', '1', '0', '0', 3, 0, 3),
(242, 0, 12, 10, 108, 'A', '1', 0, '', '0', '1', '0', 0, 3, -3),
(243, 0, 12, 9, 106, 'A', '1', 1, '', '0', '0', '1', 3, 3, 0),
(244, 0, 12, 9, 109, 'A', '1', 1, '', '0', '0', '1', 3, 3, 0),
(245, 0, 12, 11, 113, 'B', '1', 0, '', '0', '1', '0', 1, 2, -1),
(246, 0, 12, 11, 110, 'B', '1', 3, '', '1', '0', '0', 2, 1, 1),
(247, 0, 12, 12, 111, 'B', '1', 3, '', '1', '0', '0', 2, 0, 2),
(248, 0, 12, 12, 112, 'B', '1', 0, '', '0', '1', '0', 0, 2, -2),
(249, 0, 12, 3, 110, 'B', '1', 1, '', '0', '0', '1', 2, 2, 0),
(250, 0, 12, 3, 111, 'B', '1', 1, '', '0', '0', '1', 2, 2, 0),
(251, 0, 12, 8, 112, 'B', '1', 3, '', '1', '0', '0', 4, 2, 2),
(252, 0, 12, 8, 110, 'B', '1', 0, '', '0', '1', '0', 2, 4, -2),
(253, 0, 12, 13, 109, 'SemiF', '1', 1, '', '1', '0', '0', 2, 0, 2),
(254, 0, 12, 13, 112, 'SemiF', '1', 0, '', '0', '1', '0', 0, 2, -2),
(255, 0, 12, 14, 106, 'SemiF', '1', 0, '', '0', '1', '0', 0, 1, -1),
(256, 0, 12, 14, 111, 'SemiF', '1', 1, '', '1', '0', '0', 1, 0, 1),
(257, 0, 7, 1, 121, 'A', '1', 1, '', '0', '0', '1', 1, 1, 0),
(258, 0, 7, 1, 30, 'A', '1', 1, '', '0', '0', '1', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `firebase_tokens`
--

CREATE TABLE `firebase_tokens` (
  `fcm_id` int(11) NOT NULL,
  `fcm_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `firebase_tokens`
--

INSERT INTO `firebase_tokens` (`fcm_id`, `fcm_token`, `user_id`) VALUES
(1, 'd7d-OGYHqao:APA91bGnuz0JhWWhZD1UuNYt5g9KjSzjNcwSzbZxj1CD50SRUbxfykF2lz_fvykUlBbq9RTzLwpq3tiw1sNv61tQP4eELwTWZsnw2FCRWiABKHWqbAvrz94Zfr432AU9yXHSaByQUl4c', 1),
(2, 'dL6wmH5j1v0:APA91bEuFsni5wp2a7vvJBHrQgh_R2tCO_QlJtGvG_eMsqYN0icZQ9u-rsawRHxWuS9nsbty5eOIzAE_ObJzGkYavlZr0r-irkfU9XVqCbEafmCPpYrc5dbv6CrN3rtb3VnjTrnq46cM', 3),
(3, 'eQ6FgA6xSnw:APA91bE6qvC9-151WoXpV9cOG-SV4CXU769NDdq3BnDaPgctS6Nt3l7lK5FsxKrJs1ZfHEC9o8CtI09mlm9L4b2Ycfk4SnA0lJRvrJUhHsWf3aWn_t2y7EaI11MsA50cQ7Bq9F4RWS2a', 2),
(79, 'f4kSAbBQ-gw:APA91bHX0eOQLQsR_qOr-5uWXy_d2niwoqLt_hW-AiqDPOh3aEACt_uuzAspMCdIVmdS_wJEsGwQzenaNx6kTBMj-uVfLU80jE2vBe-X9aUJERO7cE_UqpsXMsynOhT8A61wE07optZg', 87),
(4, 'fEXWYl-apZE:APA91bFSuQcvdcSmAx4Eqq75i4Ua6NWF0Z_l2kT0v0_rFbx4luCvrXAt432bDRXFqUkYWTLR7LuPIKRS7uniC0EV3FhWUNW_3MbXJZ4hds6zIPkeI5dxQCYjEiPItylYnrztXTGB4CU_', 4),
(5, 'dfLeTfeHIPE:APA91bGAvT0HBTHwFCRpP2REkzwuMpt2DkzrgB_OZDNsiydW-VZzOf-GrXEJ2_JFlMI5-HNwWRRjUlSrFoHANvUTqqKnhLDDB5bDx1fCM3YwLTyveBxWu9apQPKr11iRNbQRFPQFrYKH', 5),
(6, 'fmYpcvnjpL8:APA91bEqGUSLrvatPmGyzPn9RQSpE9a72aDvGjrl3Cd25WqGkfsKZi_xrpRQeG3TKFSbC8vcNXKgm7BWbSVSFUhMANesLf-GBN5BRcXU7-Y62qrkn5zI9aYHqUFz9c3rMgxHgPq9ZHtv', 6),
(7, 'fitzzF1weK8:APA91bESbRm9xE4ar3nPCf-IvEs04a_aBh_T8oLFK7vI0mjEGKqBEWo1lIpD1Uuu-_A2qAdqDEsVOydD9piIRZVtDGVeFcGgYPoi_zl20RD3IFOtsUrpt2xuaoQeuhzLmPq8hzpXDtU9', 7),
(8, 'fNTsGaQxSOKGxqlV-J--L3:APA91bE0xph0dt9tWOGnqVPt43XaL7Qmc9MSyHFadH52wYgCsQT5pu5wnBq7-YqnadEhZAHwuCuiOdgVxsZ7K_XlP5Y3RDcPndBlwxFIGQI0-AhHCh4_Hm7hXpyEyOtow_rVIEiU_9lg', 8),
(82, 'c9g2ZEdIMsM:APA91bFBH-uJPAxkqh4cpo2J6qVfmY3zUElvyXrBHwycKB_7PwQMpHJ1mr0tELUYQLKGDnt4Vn0WsSYO9ul0t16-fYOxZdz6QvZ6QqvhEohDWGngGGfuXhKjZ8M6E0gPvvYx1qAYnvA-', 90),
(18, 'e8gB2F80A-M:APA91bG9ihbYnRUYOXoYkvGItx21jIf4waVqt73SXrYjJtPLn-EyPGUcTXIocVRYg8DqvSfBL9a0GOZZnhjtk1IGRHXavRskvMgFbAt2BkqP4dpVuCvSTNkyefHdn1Fvc33fh-YWz_8P', 18),
(9, 'de4WaK-iHVQ:APA91bGL8KiMWcGt7zu6rw7P023KDmkm-Qu0CI2kEqLfu5Flg6AzvZ5A79f6yhbCoINM4U0u-pjNDYJfkTgzMAMRZ4JzeQNHr8p0Qz6EqgPL4d-81RGiTrCRZeZ84_34GWhqbwPUuE0E', 9),
(10, 'fhKA-uYmcfc:APA91bHE2FnRJP9gDP-WUbjf5FkZP7oaoySS-VpzpWolY3i1xvfq5MKneeSWY_X_N2f6RkRy1HDKBeYRsmw94g2blTs2drsyAoiXa8lhgJpHqBjIrnyTuy10mJOH29iOfoSh6uFOpMuu', 10),
(11, 'd1oeDkx0_78:APA91bG7yG_1jA6jXzFGfkk1y2vTmxEwRjDGUw9mmhBRou29nex6_HIEp3zMO591tv7YUyP7sezsIXfnuGNLkMCMOLHJc95lWrpEJiUyUoKAn0B50yCM6NmwARuYIT1Y7mDLCLQ123Df', 11),
(12, 'd6F6ATLHe2o:APA91bHU6IH8KkCgndxirX0p27lndG0wD3wfnRUAc4CQbyEaUaDFn2QvMzbaMsFg5VNUvpIhL0GxAOkmdUSQ5IADAJYOlYsfRRi-HqYM_B-RG3sk0hr4rvxqKW9Sex87gOZD4uS2WIII', 12),
(13, 'eLh-JLFOtDY:APA91bGEigKjjUR1gO0sAfrXmHwez6Z--wdqkFuilPcM1WdGQHnPPfjbjdpAcr3GDi9-IB4pnShJYyQBoFNPIUZY1d8joJBCrBmnM7pMSDinafz0ct234F6OIWRmXS5XRzzeOD9POLVm', 13),
(14, 'dIZ99Uwp--A:APA91bGyRddr6K-jgP2-7jv2ywV3cJCJbFjr951WjE8s0KfMO4J1A2usJVkYqihwuxQuBlqGoxdEF9W5N-RAEHCz7Pni6zSdkPF4J1sSSkcm0kx3qxY-j38lG-jHBH1svS_r1PfG4lVJ', 14),
(15, 'eMH-Dxtei7g:APA91bGCJjI8GWyXYvMH_FojExYEHBgQxToWjM2KwX6K6wturSHhCd_jWkPUw9bsfB87CWm8Tr65AtZ4PehmvPa75nAXSIxUBLdTQCS4Md3RuJLILLJHcN-sWYk5Vv0CIVLx3GeR9eWK', 15),
(16, 'f45IdhNJZ1E:APA91bEeP4wy-JP3LilR47vfkrvZUaKv8Ogwp8JwIKEOJDRQLdqy-hzJF1exgdYzBnE6rDd1QANU-P2xg-QZ-VzCi-8CcQ1SQigTYieYYqUrPEBgjHoCHlo0yMGXTFaD_Frw-747jTbo', 16),
(17, 'c_MJI8fM1Ps:APA91bFkYV_zcZ8qGnqVNCSFXBe31E1tDGEVsd5A9U7dnLuDs-x4wh0XoRtojhx829_EE_jdA3x-w6bIZbacui_I-GS0NpCTaSvtus6k8Y4iDLJU2TjA1QQIxj__aNeki6np0C4VTZm5', 17),
(29, 'fRjhIkMJOyU:APA91bHGcqx768n_VB2uDJGR5RSwtOo5BwHYAZ-dGQKxbLnsYTlEEfUXP8DGMZWqTWNCqmRg7laYZtXCZx3f5y0FmLXJBeNVn7Bi69KLdx7jscwWyQ3iG0SqS_zo6eoYVlmOVsU0W89g', 30),
(19, 'fWfWMc6_yAQ:APA91bHf8dCE413ECeQ5yPGaSg2vJtpASIVFfLDTGn4G57-y8FDGBpygE-yd_7T4DesJQRq9zkoGub8l_3hhAdWsaKE3DfWBty5rvhfOvyW1Z4hJSAl7Gopf7J40vVzLwhH7D6uosxWB', 20),
(20, 'dyMaThGIsOU:APA91bFCEyUa62bIfgpzb0xVCNJysexGYv00R3keA5iUw_TRiWnDlie3Oe2WKslxLZFPWnWO5AHsZWDWajuotCM3LBeFW-45ZZzr6QTvTmAEfWos4HEjDGG4vmpUSVadGlZw_uZxiHGy', 21),
(21, 'f0uKcC5feaQ:APA91bGHw9H6XT9PJzBErV30339VjNaKo3MkPqU2nU4x52YhW73kjBoehwzCePgtUp6D8RlO_hgn8a8WntAZpoj4RXf0zWq2DOKoDOdLL8RiB2F7ui7vBC47_z_BRjXQkbf0uB2UR03V', 22),
(22, 'cjmFlNXalDM:APA91bGeDTOEDTYwsLX6tWReGmUD37G8hkvqq2hlg9DbJ0MERHY-dsCyqfnTaDhYYo9BQHxKRPp5qNB46q09McPwm7b9V54awM67X96h2DGh4IQZP5-4lSq5ah7mJUcmFZg9zRKhfoJV', 23),
(23, 'f3kOX6x3Dfw:APA91bGUYCvzRcbmtZlRrrzS5mwXvBxh002B2qsboqkKJQCQ1DxkDiUCR6BfKcmpHh55nMIpV7ZaWq5eTntsIzeAxreIw9xllFiL_rlmnzmSIrL4Kklbo2675mzba6l8BUfFlN3ysTn2', 24),
(24, 'dG7ZBDbG2rQ:APA91bHKndCp6urPp_H4_do2yvE9K4llByvamjlgx8-XvEDkPXk465Ps4B3lq474hKySQrMbNRN_SkP64fHmOj1bg4XqUGABAaD0d_GT05w8C5m7gCC5-YSjzEYufGzW-h44n9PcMx6u', 25),
(25, 'fxo3NooWVvk:APA91bGkjhxI17k3cpMrmHyUaHbs8Zy3DQakifpSzVhOpUlLLWwVMOGbhwHUR_6h6Sc4WCV86RiDyxJCwa3ZXx9cVY9AfXawJJRPAV7e7h97SQLRUxxH31fxZk4iaZ9NvFPCurVHsNpS', 26),
(26, 'fxo3NooWVvk:APA91bGkjhxI17k3cpMrmHyUaHbs8Zy3DQakifpSzVhOpUlLLWwVMOGbhwHUR_6h6Sc4WCV86RiDyxJCwa3ZXx9cVY9AfXawJJRPAV7e7h97SQLRUxxH31fxZk4iaZ9NvFPCurVHsNpS', 27),
(27, 'cZkeWZpGfkA:APA91bH472J-1Mzyf0q9Z-gH3Uxk3uJb7HT167Yr_lvVzaszeo27-UCcq7Hb8ZoglbgaB6pGNv6ru1-9Gdm_KJCr5StxL6kxQPW2gIB7y_N7i8xCn1cQBn-tE0L-Dyxd2g7gvhjfgdPw', 28),
(28, 'd5Gdzr0kths:APA91bFK1xGDmCnQWnHbExc3yMenaj-1QCJF2cQRlbpSIpl5AgElhJnbzPz2RM5ZBXTgO_dXVC20naXL2IcFhdxHQOX1W24EVCNpQ4obqOU5R3U4m7cD9Ilu4Pls4aaQpZr0BMfD53qz', 29),
(33, 'dN2UEgYt4ZM:APA91bGkqCu1FqCxg5G0TaW1_AAzBnuUeD1tx_8y53hzPKJC7ZxeCgprO39PjUsdm5CKmJW_lQu9U_yiHjNVEU709tqg8s7oFgV9hymTJsdy9WJpU-b9D3QWfxBH9TqeTf0NgqbpdWiC', 34),
(30, 'dSqO-lAjkq0:APA91bFgtXCYSs3s4CYJgv3_vzTepFV0u5uularkc66z3poOx8CrJFcD9pKb2khjM8n199vUd8DMFN5Gi4b8QNDFH81fZjwKUk3URvh158Qe2cbstji0i_-gRUJY1aWy8fZ79SpDN8QV', 31),
(31, 'dIS6v7MEAV0:APA91bFHrzqrlktUgxMAyvCzI2OWU3xfguqQmgS4iPupKWzBLwZx6v_dPQZbtx3Qla0vpycF4bWwPtbfLl95IyP6sa4Ith_smeM50S5F1kvRZrnMkRDfYn1-3z6JWwjW86GxWHff0slK', 32),
(32, 'eBlcsdE0dDk:APA91bEjgaw1U0nNcRs-tQbQUyoT7--DVWgTLuLOWD6UJutIRkAaWwDY7xqRU7pRbcYqHxxsoviGNrtxSdjg4cy7m-1WFJJwSA37zhLU3VlmO_435pKrFnPexo3lOxXC8B2EqjOApDbQ', 33),
(73, 'ePdNlrvtkB0:APA91bF2jZYYW5waPQQcLifCCsSVYI4T1zGqvv4optgizt8xDW-IvBlttwNIieQE-dTjthKxzh9_OIrROwSzOgig_B2R-rHgDr1J0KvMYUHFyZHB-PXLuGz-bK_gOdIFVabffT2aAEsx', 79),
(34, 'dNVkjGh5DM4:APA91bFIAY93VE2M-pEcwO5iM88hjP4p4QCmU-RLDQL5h8nqoDZXjNhRlgaBdQPTcoLq0cAkVmR1DDwOoObpBOGvfEuW3xaEEwgV6Uply9oYDGDC3lRv1igJcXr4b5-__R6IL6bpwXW7', 35),
(35, 'dNVkjGh5DM4:APA91bFIAY93VE2M-pEcwO5iM88hjP4p4QCmU-RLDQL5h8nqoDZXjNhRlgaBdQPTcoLq0cAkVmR1DDwOoObpBOGvfEuW3xaEEwgV6Uply9oYDGDC3lRv1igJcXr4b5-__R6IL6bpwXW7', 36),
(36, 'dNVkjGh5DM4:APA91bFIAY93VE2M-pEcwO5iM88hjP4p4QCmU-RLDQL5h8nqoDZXjNhRlgaBdQPTcoLq0cAkVmR1DDwOoObpBOGvfEuW3xaEEwgV6Uply9oYDGDC3lRv1igJcXr4b5-__R6IL6bpwXW7', 37),
(37, 'cFq6X-U-PSs:APA91bErG4ScjKiRwzE7lnd_sDqrU1agf12oPhDV4wq8CEDA6y4lnavfkDfGMwmiEXBERbvhFzmYAr1ESVD_QIZE7MxBlNm2IIoRlgTcb8ITIYA8Jxvh74LwBA1PRc0mQ4v3gCPUjnpa', 38),
(38, 'dNVkjGh5DM4:APA91bFIAY93VE2M-pEcwO5iM88hjP4p4QCmU-RLDQL5h8nqoDZXjNhRlgaBdQPTcoLq0cAkVmR1DDwOoObpBOGvfEuW3xaEEwgV6Uply9oYDGDC3lRv1igJcXr4b5-__R6IL6bpwXW7', 39),
(39, 'dNVkjGh5DM4:APA91bFIAY93VE2M-pEcwO5iM88hjP4p4QCmU-RLDQL5h8nqoDZXjNhRlgaBdQPTcoLq0cAkVmR1DDwOoObpBOGvfEuW3xaEEwgV6Uply9oYDGDC3lRv1igJcXr4b5-__R6IL6bpwXW7', 40),
(40, 'dNVkjGh5DM4:APA91bFIAY93VE2M-pEcwO5iM88hjP4p4QCmU-RLDQL5h8nqoDZXjNhRlgaBdQPTcoLq0cAkVmR1DDwOoObpBOGvfEuW3xaEEwgV6Uply9oYDGDC3lRv1igJcXr4b5-__R6IL6bpwXW7', 41),
(41, 'dNVkjGh5DM4:APA91bFIAY93VE2M-pEcwO5iM88hjP4p4QCmU-RLDQL5h8nqoDZXjNhRlgaBdQPTcoLq0cAkVmR1DDwOoObpBOGvfEuW3xaEEwgV6Uply9oYDGDC3lRv1igJcXr4b5-__R6IL6bpwXW7', 42),
(42, 'e-K8noPPjSM:APA91bE2om6xQm0wxpAJHFTAyCB5CqBLx7AKBsKUmo7HJgnpM03tdGVRM2JiEk2i-cTrW8dG5iz1ofaJy-xTQQ5BW9STc7aw3lhKaRxwpEQQaycRy_UnvfilYNNjs0lJnVj7-kq5PqMX', 43),
(43, 'dNVkjGh5DM4:APA91bFIAY93VE2M-pEcwO5iM88hjP4p4QCmU-RLDQL5h8nqoDZXjNhRlgaBdQPTcoLq0cAkVmR1DDwOoObpBOGvfEuW3xaEEwgV6Uply9oYDGDC3lRv1igJcXr4b5-__R6IL6bpwXW7', 44),
(44, 'dL6wmH5j1v0:APA91bEuFsni5wp2a7vvJBHrQgh_R2tCO_QlJtGvG_eMsqYN0icZQ9u-rsawRHxWuS9nsbty5eOIzAE_ObJzGkYavlZr0r-irkfU9XVqCbEafmCPpYrc5dbv6CrN3rtb3VnjTrnq46cM', 46),
(45, 'dL6wmH5j1v0:APA91bEuFsni5wp2a7vvJBHrQgh_R2tCO_QlJtGvG_eMsqYN0icZQ9u-rsawRHxWuS9nsbty5eOIzAE_ObJzGkYavlZr0r-irkfU9XVqCbEafmCPpYrc5dbv6CrN3rtb3VnjTrnq46cM', 47),
(46, 'dL6wmH5j1v0:APA91bEuFsni5wp2a7vvJBHrQgh_R2tCO_QlJtGvG_eMsqYN0icZQ9u-rsawRHxWuS9nsbty5eOIzAE_ObJzGkYavlZr0r-irkfU9XVqCbEafmCPpYrc5dbv6CrN3rtb3VnjTrnq46cM', 48),
(47, 'dL6wmH5j1v0:APA91bEuFsni5wp2a7vvJBHrQgh_R2tCO_QlJtGvG_eMsqYN0icZQ9u-rsawRHxWuS9nsbty5eOIzAE_ObJzGkYavlZr0r-irkfU9XVqCbEafmCPpYrc5dbv6CrN3rtb3VnjTrnq46cM', 49),
(48, 'eMXCqaIgRCI:APA91bF6XmcgIwigw3AwgIyC3n5yb-gcDhpyE1gJ_SWorSX8qfVlttDNIzkoya2x3l6pd86yvGdZayQB_oQrslt_qwerT1M11Wb_B4er8dNvnWWA0gaxyqK2HAGrC766J-9Z_bDk4WfE', 51),
(49, 'czv5DTwkeok:APA91bHNFXUB3Iob55T2n-EUOoqoE1FCMhAXKk59g4tIQJOhBdJ9yNPt2HZvM_JUW8DBmywO-fwm9mNxTv3MW4i9b6tjQDMn59VuBn9qjnJQB5K0cckIkPMm5OZJD-YvyIkuOaWIAfXL', 52),
(50, 'ek0NO6hldaE:APA91bHjVStccNvWxCNWcX0SuQ3HItesCI-Qfw7nI6SMrlsEdSWUDpnQ2D8O91UdHo21zPoyYsNSAXxq6Rb26ZWaja5gt52ot0BzD9EDnXHq0MqQNa-jAWUu_8xpxIcSKHNFH_FGJwy0', 53),
(51, 'ebkEV_6r7jY:APA91bHsJOVezi6deWoDY847rq6NAV6tRg5Gr_18JkqcUluZQvwa5NxLtYlLYpeH4wdw9l8qv1SPArTWDxU2571f1fd69wZ8f-a6Jpey8z42zbrAhE3vmGJANKEY3bxMB4Y2GBp75c7W', 54),
(52, 'fbS2NTRaVJc:APA91bH444zqpIbdU3tNe4UNpvdY4BNDeTeZJqY4NZ31q7WNwhZIhMzJWVSkHTT6rilWjbWGPrJnqdC4FodeHTBYq_QkR5yW9-K9nt7_ycPCs3YaYESyu2RLNlKFvNyEYnsm4cCOpQph', 56),
(53, 'eFiwCgAyJ2o:APA91bE7SavqwOJSDdLcdwuoCoO8Y6sWXpk2eM2vTyNyVW4krOzl_DTdN8rIg9ED85NTDtyMqFwpt2HTcco3sCUkHe-A1mWYJvKFYhYtPfMhXPTRRlqGBzflmXLjB7cLRZDkNZ0JXqQE', 57),
(54, 'eTYi3ttBmM4:APA91bFSmSM_ZLSbb7cUYO_qT-LjJk3XGGPBdW8qol4TMcgGbHeNIwuqAdOblKvF15Eo1A0KK-ENKtdSfbLjGCWnDYaR-Ephr_8jBca-UM1ZKwLqAKPAOr4_LzB-yBPMrMFT9s7SSeO7', 58),
(55, 'cBfm0ogZ5d4:APA91bHG0JL-TtiBthsx-HBad-FPGnvv7_DhziMZMKpPsFBOcyEu4KiW1CQ_k6ctWG_7AA9OgIoYzEHTcm80EPzXS1k6QQ722r0RI4FfIO0bXOViHS7m-0vr9Q40KzW9ReTVK1ClPokG', 59),
(56, 'e1QiiTJbI0w:APA91bGrLsIbQMSaya4ELaU3zipWEoK4Hnwo3W3WgP5BDk03qmmePuG10npU2Tl6eesNlfah9wZyYc1SAxKhBjn2ag6mPjHD-E7_0UH1xzG5N5Vjiobagd2LjvVmlg_uTUBYIqNCOA-_', 60),
(57, 'centyGCY0rA:APA91bFfIf2jBbsHMisJwOzFG1XK8VVstQmQ6Rmh5-fJ4H_mdrUpYUTRc8yYOKXQ76q1C_bUGZi1jKd-HhOsHvCJbrnxQNaaazHSOYpRcqP3d5BBW-ijEwazZDZ6JCoNQ83NPICOcLGR', 61),
(58, 'fVbSBmvnvVk:APA91bH0nuWEme9uAiS38Q9jSbjkK0XUD5AuVf0DMVfK2RjL602sjrrQ0vxA1lX5PotWtWHpDRAgKdJ2yD5VcPEm1mcnfdpSJYW_C2_VkNLs-ts-YD6uiT0ogRlZMCRhEcAdJTystFSA', 62),
(59, 'dIZax3GmEs0:APA91bEcJVx84zq7oWZw4PgK3OvLDG_9Lxed0iIXp944s0NuIxNfytWIqXHF-Uq2lqF1kgKXyxVMyKpFg_UdAiwSfAcnBbCuIEA5gyi28nWefylWMPZ-ti3J8h4rB1mTbMOs7qD49cyz', 63),
(60, 'cMh-k4_cEro:APA91bFrbgs-Sfq6HzhbSzGfbB9rnyt_u0DWQ8SULKga1T1n6TKcTKD4sgcsonMGMOEH2jdWw23nex8hHMqBLAayCmdzt7f_hAVMmHimRGVE47JJqByLnWykeL_syWccHHq7eV2Uy5X9', 65),
(61, 'fQ7jikLehHY:APA91bGbtabVBbqtn4z7Ts80v0WqyVQuD-2vM36p5V8y-evaFhb169vD_IqNmuuiFlGMrRa6Vf4UfyFS2wcvV5m6jX5_KaNSueM91gh1YbACGzCTZ064xFmPIBw1StT0Pze4YFoMumCx', 66),
(62, 'fsrB_o_wbSM:APA91bFAhAT1kDmbvjGQ5Y2ySnF7LlwapFvWY9ItaRT9t_Xh9pjbM_dLc2BsAzIdALC1QEAqFRYZyHZ9iYmzIQGm8VYDt6hIPemL2Xdx_BNMYYx9kCx9il3Zb-hIvTafStZdxecqxln4', 67),
(63, 'cdA_fRMA5fo:APA91bF6Wxl4Hg6FPCTG50kJAh11WUBY68tLtK5PWFWunXxZRWOxI_hkPycyj_uv_mttBEiN985W2kbAmIRFXjVQOZO-H7Jm28IX-thu5BiGpimB6_tmqYHE5Zqu7HvyyPlc4dFm6rmn', 68),
(64, 'f1YZvtjgIAY:APA91bFvKvapYgvE8zDI65-zrgFlkx4J0XkzI5SsOdWa7zMFj7HuYpWtlXORpitrE09AM6JS61yuWKmDtOnW-nr2F4GkYlvEonxOHfOKUQKC-MKheRgGtmll8Dwcxkehj1IVrNyvZH8w', 69),
(65, 'f7EZnePDHOY:APA91bEaip5AlH2Z2kSLgLz1VF2FCo2N6YEag6JJp_d78bjq2U0qWfvhSIoOe5ujNhOO8UQwyd_cfHxGab6dCDFb4qBcw--YFAoZnOClygh-TwHfYJKuRrGfGx2_fdZBmGLlWS77araX', 70),
(66, 'ePmfAys6VPI:APA91bFI8aUtzfxjemai_6agOxlfPLTINbhU1VhsnkvLKJLvLrkF3bNT2UHwc90sc7DhEdBFMQ474O8b4WPfgr5AlmP5RSTFIMTJ3PqVof4T4E1gvHYtMyZNdoWPgU8POSzPx8A5mKZm', 71),
(67, 'ee8Eia2V8dE:APA91bGTbaYxZTQHJmAixBuSTlUaM-ABq_N3LCIdMQCmtfdxc8-tut4V1pRNysj9v-_5TV2fMd9jdV5wZxD20X6iiXDoTjBF1camcvCMARIcXjjHCzkjQGorbyuPZtB9mjlmGExQhJeJ', 72),
(68, 'f9DQ2-2WYDM:APA91bHlHeRK9PPXkbiXN4doy5P1aDKXt-o16eWA3pGz0yB_hZMeI8VWZtEOjyi8JWfOsBz9SJVCmXf1EZD1f_8Zz-aVEisom2PFRf8v6PyveJz2YsO9QGb7At22i4tg-oNMrrZK62Ye', 73),
(69, 'dDfrhLb3rXI:APA91bE4pNY7zcjF3qCAzyq1yGbB2sxguvXVPeVu58JTuGKp_TwAuplelfvYWR2JwuMcUzWetXI9B7fgsk7Dh_oWgzS5kX5MV87kYRecsTw_KlCDpwqQAu89OroerPVXMIK1cusCkCzf', 75),
(70, 'erbHEQwyGp0:APA91bFIdnD_bVb-NuvHsDXfLhBOMyfEV77eZ0Z2w-HEahBg6ZH3fN-y00-n9EglkFNrOS76aM2yfSqC1Nsqe163S3eYcYhPJGaL--tEnysrnmaAPnKU9GQ7mIyVvVam9PCFR_jm_aGs', 76),
(71, 'dn3BcXuzzB4:APA91bFSglFcyDFSDzeZcoV03cP36W92P20IwWOuxt7Uo8b1TZkJQJHdxRJuwT6QG7ntSbWtdbi9cyX8iMmdTh1DWcZeuOPFZB3lMUiGscOyFKJ7dQJl7GMUudsHdjGe4-GzDWsqLTfL', 77),
(72, 'cso0voK6Msk:APA91bEstaX3JqVkcRFgNMWKkqT8M6D2g_odRko8R3e2bbKDmJcqj8HxC_WQsJsrlwxeCn1KQPnDFCSn2VrY58oC5MDYRZJTL4gJludd3oEDkaTutwCyIOjXBnihmpMle7YW7s8SC2eI', 78),
(74, 'cRd1kCE_ybY:APA91bEN6t2yle2aqJYZ_PyYs0OzAFS027ncDMYkvvbpfXyB2v2cRLPup5WJUf163FOzG3vGnZh0GWOWhYzDpJkX4SKAX63p5-PUIahLJKWQC8qyz8FZRfll0AdXk4xkd9SxY7dZMcB1', 81),
(75, 'dIS6v7MEAV0:APA91bFHrzqrlktUgxMAyvCzI2OWU3xfguqQmgS4iPupKWzBLwZx6v_dPQZbtx3Qla0vpycF4bWwPtbfLl95IyP6sa4Ith_smeM50S5F1kvRZrnMkRDfYn1-3z6JWwjW86GxWHff0slK', 82),
(76, 'dvyc0RIx5_Q:APA91bHkBysQlu6lMrnS7L8MTUN5pLl3A86RcJVG3KMkF8ucmVgapOsrPsJlSwLUfn-uH2-KPwLvaIMO5je8bJcliRJcHwxo8ex3MWaSjoAqRy3WGR1A85D5uXm9L922uBhLee4296WN', 83),
(77, 'cIjY4myhcwc:APA91bGsH-a3dLIkf5gXSsZNOD_wYnHsfWtyxQHcd5IG_JpPDwPOrCI_lge5OEHsYxmYbTg0RnnXqwQ6Lp41O5VeVMrkK7LBmOPrIzZ-sxw0eT9stu3DmZsV-JLDN1lPpm-NdB8tzwal', 84),
(78, 'e5zU9uVem3c:APA91bFEFRt_GZr0V-GPpALpOvt0HH3Z5k7Ghn4s0StL3xuPv6NcaT4pb21XCiJlCaGWj78rHu44adfr11vHIyyWLnDIA83KVjzZcO-_yyK1Tawbmd9ilmX-7OdL8wV7YUCJiDkE7vBi', 85),
(81, 'fxcScWgLFgk:APA91bGK2Cax9dTNqQ1Z21l8tFhf9xWFP9L1i4VgZ9-U71ux09dTCBwvh8q00YxE4WZ0TIwd_Ch5VPP3EemwwUvxzu81_GNOonkQehkpYsDg_jp1IEinscZQOZEkjgkadFWtrs0_eFtG', 89),
(80, 'cXr9SEBxYBE:APA91bFbB6ZE3_eQ07OG_CMlIz5Q8QUySu0AMGNXb-3Yy4AUtSNNXlDorOT5kJ_vexMB-b8ijfqGZbdd8KAM1KkpijqczH9VBJiZULwac2aeviv7PhQRZow73eze3FEPBOpX4cJkuaUz', 88),
(83, 'eH8v2zD5BjY:APA91bF9xqcYCsV16raRzIfCOtgCAY0I_0kwwVPxM61-q5RyCBZzGMTH1jZ-9xlF7VoliQvuRY8UThczNJJ26WHQuopjmlQnEQknq_HFQRym3kjPx5uyli8dLXcdAX7ms5F2kMjD2vWd', 91),
(156, 'fIGq43_2vAo:APA91bFnl9bkIjcB0yCns1tEfm6NbFhan3SL2kFcO4qEY4krG19tgOLPQkVuN9A61p-_tJia4j2wJ_UV_JHGDMcmLqzFXkqSwTPcfHxgTlWKXKxj5DquKr3MpFvcOHzstlJF4ZvQYvfv', 179),
(84, 'cTJjB1HWarE:APA91bF2qvTU8x5mAgOtM7MZuoX-kx27ybZVhL8qKRN-WUgZ6YoJfoXho2ilGUatoFYPfvvdcoV8IzlxclsxzKQ4LLBmdXXpW8Oku2SyS3VEGOkitI13ziz03ttgY9x-1QQnH5s4TZqH', 92),
(85, 'cTJjB1HWarE:APA91bF2qvTU8x5mAgOtM7MZuoX-kx27ybZVhL8qKRN-WUgZ6YoJfoXho2ilGUatoFYPfvvdcoV8IzlxclsxzKQ4LLBmdXXpW8Oku2SyS3VEGOkitI13ziz03ttgY9x-1QQnH5s4TZqH', 93),
(86, 'cTJjB1HWarE:APA91bF2qvTU8x5mAgOtM7MZuoX-kx27ybZVhL8qKRN-WUgZ6YoJfoXho2ilGUatoFYPfvvdcoV8IzlxclsxzKQ4LLBmdXXpW8Oku2SyS3VEGOkitI13ziz03ttgY9x-1QQnH5s4TZqH', 94),
(87, 'cTJjB1HWarE:APA91bF2qvTU8x5mAgOtM7MZuoX-kx27ybZVhL8qKRN-WUgZ6YoJfoXho2ilGUatoFYPfvvdcoV8IzlxclsxzKQ4LLBmdXXpW8Oku2SyS3VEGOkitI13ziz03ttgY9x-1QQnH5s4TZqH', 95),
(88, 'cTJjB1HWarE:APA91bF2qvTU8x5mAgOtM7MZuoX-kx27ybZVhL8qKRN-WUgZ6YoJfoXho2ilGUatoFYPfvvdcoV8IzlxclsxzKQ4LLBmdXXpW8Oku2SyS3VEGOkitI13ziz03ttgY9x-1QQnH5s4TZqH', 96),
(89, 'cTJjB1HWarE:APA91bF2qvTU8x5mAgOtM7MZuoX-kx27ybZVhL8qKRN-WUgZ6YoJfoXho2ilGUatoFYPfvvdcoV8IzlxclsxzKQ4LLBmdXXpW8Oku2SyS3VEGOkitI13ziz03ttgY9x-1QQnH5s4TZqH', 97),
(90, 'cTJjB1HWarE:APA91bF2qvTU8x5mAgOtM7MZuoX-kx27ybZVhL8qKRN-WUgZ6YoJfoXho2ilGUatoFYPfvvdcoV8IzlxclsxzKQ4LLBmdXXpW8Oku2SyS3VEGOkitI13ziz03ttgY9x-1QQnH5s4TZqH', 98),
(91, 'cTJjB1HWarE:APA91bF2qvTU8x5mAgOtM7MZuoX-kx27ybZVhL8qKRN-WUgZ6YoJfoXho2ilGUatoFYPfvvdcoV8IzlxclsxzKQ4LLBmdXXpW8Oku2SyS3VEGOkitI13ziz03ttgY9x-1QQnH5s4TZqH', 99),
(92, 'cTJjB1HWarE:APA91bF2qvTU8x5mAgOtM7MZuoX-kx27ybZVhL8qKRN-WUgZ6YoJfoXho2ilGUatoFYPfvvdcoV8IzlxclsxzKQ4LLBmdXXpW8Oku2SyS3VEGOkitI13ziz03ttgY9x-1QQnH5s4TZqH', 100),
(93, 'cTJjB1HWarE:APA91bF2qvTU8x5mAgOtM7MZuoX-kx27ybZVhL8qKRN-WUgZ6YoJfoXho2ilGUatoFYPfvvdcoV8IzlxclsxzKQ4LLBmdXXpW8Oku2SyS3VEGOkitI13ziz03ttgY9x-1QQnH5s4TZqH', 101),
(94, 'cTJjB1HWarE:APA91bF2qvTU8x5mAgOtM7MZuoX-kx27ybZVhL8qKRN-WUgZ6YoJfoXho2ilGUatoFYPfvvdcoV8IzlxclsxzKQ4LLBmdXXpW8Oku2SyS3VEGOkitI13ziz03ttgY9x-1QQnH5s4TZqH', 102),
(95, 'cTJjB1HWarE:APA91bF2qvTU8x5mAgOtM7MZuoX-kx27ybZVhL8qKRN-WUgZ6YoJfoXho2ilGUatoFYPfvvdcoV8IzlxclsxzKQ4LLBmdXXpW8Oku2SyS3VEGOkitI13ziz03ttgY9x-1QQnH5s4TZqH', 103),
(96, 'cTJjB1HWarE:APA91bF2qvTU8x5mAgOtM7MZuoX-kx27ybZVhL8qKRN-WUgZ6YoJfoXho2ilGUatoFYPfvvdcoV8IzlxclsxzKQ4LLBmdXXpW8Oku2SyS3VEGOkitI13ziz03ttgY9x-1QQnH5s4TZqH', 104),
(97, 'cTJjB1HWarE:APA91bF2qvTU8x5mAgOtM7MZuoX-kx27ybZVhL8qKRN-WUgZ6YoJfoXho2ilGUatoFYPfvvdcoV8IzlxclsxzKQ4LLBmdXXpW8Oku2SyS3VEGOkitI13ziz03ttgY9x-1QQnH5s4TZqH', 105),
(98, 'cTJjB1HWarE:APA91bF2qvTU8x5mAgOtM7MZuoX-kx27ybZVhL8qKRN-WUgZ6YoJfoXho2ilGUatoFYPfvvdcoV8IzlxclsxzKQ4LLBmdXXpW8Oku2SyS3VEGOkitI13ziz03ttgY9x-1QQnH5s4TZqH', 106),
(99, 'cTJjB1HWarE:APA91bF2qvTU8x5mAgOtM7MZuoX-kx27ybZVhL8qKRN-WUgZ6YoJfoXho2ilGUatoFYPfvvdcoV8IzlxclsxzKQ4LLBmdXXpW8Oku2SyS3VEGOkitI13ziz03ttgY9x-1QQnH5s4TZqH', 107),
(100, 'evORXGCvAJE:APA91bFoVQ1nVz4Yau8pkdm8warzJ8yq3XSsNlBWAcxuoAL4Tz9ocVOZskwzQdbfM93XIe_-QHrucKPVgXn2pPFs3U-fNjZv_OtkWgz3Voq3jG0N3mCNAyvXMlfxDL9vXJjTKKSJYoT8', 109),
(101, 'eQkc7HpKHVE:APA91bHTVLn_fYi_n77nmuf0G-H2CBp1yLEjJO-GKCSS5M36f0wRbxGVKCRRNuP0bJG1yI_jWI9dLoxD3UhnvrTaIh0JZ3CHNbdgn_5DTgwbsJO0bbZWYNFqKHZAAgH7MMPlDL0x6Ic0', 111),
(102, 'cmQJt4M4hYw:APA91bH3rIjk0SeleHTAKk2VEklGyhC0WEun8YmmVHc3eBe4VIPjFrFOjmjWYsAg5e_FY_eGRry7heLYz8A9nJ3qjBmWYSlwW3nJbn4qsazhMYxEv0V2-f7pSIJAEfznmJEXU8u0Tz2s', 112),
(103, 'dF79GwHcYZA:APA91bFqeQjc-oj-5Zxe-HzQ3TAKA3pCG9vWR_csAmKJwrz9sULH47NHm998Kb5YD-lCyBbTsyDaaNSzK0ewk1x4Nlhbv7f_g6TcujOsf0AvUZwccGCH7cSdEJSPGwPSqz4rM5LBKwFW', 113),
(104, 'dKJ4buuXl7c:APA91bE07TUTUr53aeESlxJ7xwXSYQ-xWCHi2OsFmEhthWgLWTG5dCMEwZP8ABbeFeWWdvYh02xcmg7OIEwiv89VOlUN64WCTeKQ5BpYYjg_JDyx1uySoErBHNnZvqQadzbTbQMhzCQu', 114),
(105, 'ftQS3wJUpv4:APA91bELlcAI_U4RlqbSBpc0VTkCtK4tKf3lB0ks0fhUW6lPBVF01nqQceTZRcYMxXmexheG1F0DRDgv0Tbti1UWH_0UOS7PSq_O2TTPAk-lgxdLlYtc9Vj_9yEdhHlSxGtWxU2xjapK', 115),
(106, 'cyS58vOEXLw:APA91bE0n_U8VjMtdsgn2thCw2GIScxLsfwz0bmUa6N5gbkfqv-osfZRESKlE6L257mvduCSdzBEkD5GGGDFW0EqCVuEl7XV-Kpkq2FehAN75nDYdkm5Oxm72CxqwjWmQFyII1IViCpz', 117),
(107, 'cOGl4ex4Sio:APA91bEyD264PZiXtf1ZHn1tBV42PFeTo8B8ZBR-lxTdJSyhe68IzXjLipaonnaNUbCDVZbS_hTFwkICbpY51BbKiak0-P14eQ97zQSzzmAqbmuhAzGFiT6TaKbbwVIkjvKwz7WCmm8C', 118),
(108, 'dKEJGHeEmqQ:APA91bE-vmMdwN68UW3WpU0VBxJ1kc1kVuRxtAkJNxdC1N_0naxRDvRuHnZhSFQFUr7lhiy-hHsyFfeXfrz8d3dcT1PoiaLX1Ct9Lwk9x_WWogpImUtc9JWflvmtz428SHjRtljusMUc', 119),
(109, 'dtsneLDqzQc:APA91bGqPG4yucynnVW_8omFeQ_GBlgEPoiBtEzB8JhlrJy_Rk1OF7T2UkEbDKKDTIR0MYpRGLR8K-2qF0elUcyc02lEoTC1zzthA08sxKf6KKXAaQ92MkVLTP2IU_HupLEJcadIwEjY', 121),
(110, 'e80Q1kdnqHk:APA91bHLOOdtnfWKCCDeJaNfDnGNrwJjdlnRurNsnFXP_DHuh0fFWuHbrMzBnORE_ZrycHGc438k3eLutz6yaV8ZM0_UIyYtNFaJ7FhAYSwr9afbQOKIA51ZcsrDglCJS9BwlqEFtcwD', 123),
(111, 'cuQ3dw9ftn4:APA91bGojl0lQYvmppAmeJODJ-_dxp3qI_k8Lpx4-EGR19jRnASCuLFCsBjZGvJ6JGs3BGGEiAW8Bysubb7e1JbmH4CnibZ2ft93oMSXJcEtQHOnlOCBFZJpc7G4YdJQIBXnTUhKOPMB', 126),
(112, 'eP3dTz5Tz9A:APA91bFCZnSd2P1h0XHZxf-uXPE15LhJ62vOrZzXv8KNR3KZ9bd0FJzSJX5wR0unxw7BCkl_8F28lGZpXU0YWVpUUSO7Yd8VSFZH_fXfpmKg1srMpulV1gNv9gvZZdyX7QNTaCrp6zD9', 130),
(113, 'fErDCHm7uzc:APA91bHWwUSYfzkgn9slQIa9FlbrIBELFYj77oAOaCXOl-WLqH8jNWXo313ASU1Vrc85XfNCEr5oEy8f9k7gkYH5llb3HXYG3A0i7KtSEUIpVKXRpdlB6M1RFEqcBvmt1qxjxq9m2f3E', 131),
(114, 'd0ZdlIpvZZY:APA91bH_I_9IwxKAI_Z7Pcf6eSIDr_NBzM3aKKRtk8NnynPiMwCEzfo892nuuvAel-Hbq_NDPH7aOubY2EeMWfiavTF7mHoFXqH1CfdHweNlAnj4sJORGqqqJ0TwuG77DFUB7ILS1Gqb', 133),
(115, 'f3a1fqxrb1s:APA91bEdrq_SQAm95IkeruCrx8DiTKsBMNU4mZPlnKphwQ67Av_se6jPARFcXA3SwgtZD5fNBx1pxlkDfUqRybr-DGEOMVUV2ekd83KsLZowm1uysM9o8AX5oQ1snOyVBRHfelHb1uLG', 134),
(116, 'ckHNXf2FQnE:APA91bGKwjBugWytT1Y3hc1oYNoqH5fY3WrR3-djiwzkwS74szNfDOrSsZHmtVNScZD5_egxWPGiu2TvmUqkBpzz8BEb46sOuba2ClIXUyzn_KWmDG5RWVpk03Vtp4HG47H5Bi-0Iz6l', 137),
(117, 'e_z0XIqFkLE:APA91bGSWXqQ_SbhmZrPBUYleFz2hcm8FMXdTyzwuKHXbJMB729rgtWBVklXHb58uqQYitxk6tgSCZF3ppuKP1BzNhjPmQLd6X17i9VU0tduqIOv4-HN4HMG0BK8RrTrBIGU_MDlv9f_', 138),
(118, 'cu2KwFc_S9k:APA91bFUtsTi8iuJ_ysKop7wWyg0x8FlbZOewbGzb5ShxUKPH84gS8-atXyx6NJ66yJQyntWUNG65l7T0NyKQfhFs7fgImDuVZroVsAAJVTLgL2slIfIL15UYtUJFhTICVH2gosYUB5r', 139),
(119, 'emGYGg_nifI:APA91bEJ505H2TB6oaY_8Axzo01BwplOkV3icnBtksMZdHPUTJUnDaCzIJuSp_PNY4_yOSVOLeUsm1oIbqXilqgCiAhk4tfNuWZL_34Pw6nmgE6ySpD7b_zzzcLpu2cjHcAG5BU3Khpk', 140),
(120, 'dTG0OoH1Imc:APA91bGjm2xh9blO0KDFrgfh0YztRKyiv-g2czPm5SnW6iKrcEEsy7TUFh1neb8tSbcx7N4CTvOuhdyTDh1w3i2hOTsF-mIZiOEDSwtpK7AImzznTnUqfkzuX1Ph9I6iH38U5sW80Beq', 141),
(121, 'd3FHoaRjpSY:APA91bH8Qr3A8m_OHy3Qntj_KMH-3Rs51y-pFL5Dzp70gxf7DhyDCbCaopWC-gXL9_9GF_78EJ7WtZQ894gheZSd2Vcu8hYrcpVRTEnpcq0SHjDfVjY7SOuhn7XnhpbTWw4byX4N1OHd', 142),
(122, 'c0T_yh-wFP0:APA91bEzhtU-z1aqG6y32PW1glhCSaFHwEa3sxCnZYOLqiWG0xrdiOSM2vK-C6OgOBzYYbK0uN5lzD-cGILi7ISIU-VO6h0mowUP5ZSTuDn-3GP03HZdRltJZEaEczLY2sjwq_KYlQgF', 143),
(123, 'eGD3M7wGq1w:APA91bFUvR-g6vEAQMj162-K_Q8GEICWU2enKEd-lykN4yM_x4fP19KpoWYJlHqUf53P3A3-g25Bwvx0aCW4Ywtruj38Di3xsGpNaMK6pZTCk6zhbu8JBafWgLmF3QX-fBFNXAUe2Om_', 144),
(124, 'f8IFPxiKf8Q:APA91bEYqxI4T0XjM_MJD3WMh74Ja33LaW4QHLWPMT0PHYsOWJhKZ6aCwmzBRnfphu_FeTrCvZkAGjZ7Q-kv3rQdyAn33MqxTq1rnp9mnyD37MXrbEX1FoAYh4j9EKMQ47UAw60AZf02', 147),
(125, 'dajGWFIdr70:APA91bFaCDOSFihNWpMHYr4luOWMtehZFugRsQEdGPuexEg9IVMu-F_FFVIYn7HstwWR5DDvAy-6pt95cEq7OqY-gOB-b4To0TTbJkP0MOjPKyQoupToeaVuCdvnVnGhFlYcYVnM5J9R', 148),
(126, 'f4STc2qtVvE:APA91bHlN_S3eOrznPePCi1QPlrpoOvZrTW20wk5gpHbClZiroQWA7b4MBZAnlMBOFiKYL-T9RoEH3bZJgXfQmUJcbZrA2VuwWHSwhpkizpTn6BePqLP16xmWk4ezEjzJvXRYbsIW37n', 149),
(127, 'ft82xIEpyWg:APA91bHDkT4WMSC41y2Ijnu6vaCgTYuq5W-WGc3bbYcSETlTrhWIE5XHGilMC7k1iUv2VlCWr_ZR2s107k8XjazlEp1I1Zo6vTQstfbpXPRhp1y6ZjBZwrpZoWax2EjSFtEOrfCVRtwz', 150),
(128, 'fSy5qbtKDTY:APA91bFBBdDeffQ3IeFWUxt895LxOivTyCFU0qCcMjqWO3IKyl7sgu4GYDYTQ7djuRh0SsjMQTqZyK_XpXCX_laxrrLJaNElDt_sc0fJYgGj1JCsVYDwIqOm12V1AIQSGJbv7KwyTo62', 151),
(129, 'dYEYKr-J0Zo:APA91bHDPV9uzwZzyMqxKRRG7J9zm0p5T0zRs24UshPgUC3t0SwnKKZBRmfN-PHd2-0DBMTv0QjQAl-JH3sAloPrUYVPxv7G8L6_1W8F1kvNLfrydg0ZVAIOl3GSSHTIyaUN397oRev5', 152),
(130, 'ezgfH1fd_gg:APA91bHkCQwnNxfewzWHQNcsOife96V6EBlN4o6d07G303VMFUjBgfuDdyO8H2viQALM1v9lb5b8mMI2bZ6YJGy8IDaoODEK8cCE2Rdwyclo1RjeD4NplWrKyOJ_AMBsuGgRRIuJ4lZa', 153),
(131, 'cTJjB1HWarE:APA91bF2qvTU8x5mAgOtM7MZuoX-kx27ybZVhL8qKRN-WUgZ6YoJfoXho2ilGUatoFYPfvvdcoV8IzlxclsxzKQ4LLBmdXXpW8Oku2SyS3VEGOkitI13ziz03ttgY9x-1QQnH5s4TZqH', 154),
(132, 'ezgfH1fd_gg:APA91bHkCQwnNxfewzWHQNcsOife96V6EBlN4o6d07G303VMFUjBgfuDdyO8H2viQALM1v9lb5b8mMI2bZ6YJGy8IDaoODEK8cCE2Rdwyclo1RjeD4NplWrKyOJ_AMBsuGgRRIuJ4lZa', 155),
(133, 'cTJjB1HWarE:APA91bF2qvTU8x5mAgOtM7MZuoX-kx27ybZVhL8qKRN-WUgZ6YoJfoXho2ilGUatoFYPfvvdcoV8IzlxclsxzKQ4LLBmdXXpW8Oku2SyS3VEGOkitI13ziz03ttgY9x-1QQnH5s4TZqH', 156),
(134, 'ezgfH1fd_gg:APA91bHkCQwnNxfewzWHQNcsOife96V6EBlN4o6d07G303VMFUjBgfuDdyO8H2viQALM1v9lb5b8mMI2bZ6YJGy8IDaoODEK8cCE2Rdwyclo1RjeD4NplWrKyOJ_AMBsuGgRRIuJ4lZa', 157),
(135, 'cTJjB1HWarE:APA91bF2qvTU8x5mAgOtM7MZuoX-kx27ybZVhL8qKRN-WUgZ6YoJfoXho2ilGUatoFYPfvvdcoV8IzlxclsxzKQ4LLBmdXXpW8Oku2SyS3VEGOkitI13ziz03ttgY9x-1QQnH5s4TZqH', 158),
(136, 'cTJjB1HWarE:APA91bF2qvTU8x5mAgOtM7MZuoX-kx27ybZVhL8qKRN-WUgZ6YoJfoXho2ilGUatoFYPfvvdcoV8IzlxclsxzKQ4LLBmdXXpW8Oku2SyS3VEGOkitI13ziz03ttgY9x-1QQnH5s4TZqH', 159),
(137, 'ezgfH1fd_gg:APA91bHkCQwnNxfewzWHQNcsOife96V6EBlN4o6d07G303VMFUjBgfuDdyO8H2viQALM1v9lb5b8mMI2bZ6YJGy8IDaoODEK8cCE2Rdwyclo1RjeD4NplWrKyOJ_AMBsuGgRRIuJ4lZa', 160),
(138, 'cTJjB1HWarE:APA91bF2qvTU8x5mAgOtM7MZuoX-kx27ybZVhL8qKRN-WUgZ6YoJfoXho2ilGUatoFYPfvvdcoV8IzlxclsxzKQ4LLBmdXXpW8Oku2SyS3VEGOkitI13ziz03ttgY9x-1QQnH5s4TZqH', 161),
(139, 'cTJjB1HWarE:APA91bF2qvTU8x5mAgOtM7MZuoX-kx27ybZVhL8qKRN-WUgZ6YoJfoXho2ilGUatoFYPfvvdcoV8IzlxclsxzKQ4LLBmdXXpW8Oku2SyS3VEGOkitI13ziz03ttgY9x-1QQnH5s4TZqH', 162),
(140, 'ezgfH1fd_gg:APA91bHkCQwnNxfewzWHQNcsOife96V6EBlN4o6d07G303VMFUjBgfuDdyO8H2viQALM1v9lb5b8mMI2bZ6YJGy8IDaoODEK8cCE2Rdwyclo1RjeD4NplWrKyOJ_AMBsuGgRRIuJ4lZa', 163),
(141, 'cTJjB1HWarE:APA91bF2qvTU8x5mAgOtM7MZuoX-kx27ybZVhL8qKRN-WUgZ6YoJfoXho2ilGUatoFYPfvvdcoV8IzlxclsxzKQ4LLBmdXXpW8Oku2SyS3VEGOkitI13ziz03ttgY9x-1QQnH5s4TZqH', 164),
(142, 'cTJjB1HWarE:APA91bF2qvTU8x5mAgOtM7MZuoX-kx27ybZVhL8qKRN-WUgZ6YoJfoXho2ilGUatoFYPfvvdcoV8IzlxclsxzKQ4LLBmdXXpW8Oku2SyS3VEGOkitI13ziz03ttgY9x-1QQnH5s4TZqH', 165),
(143, 'ezgfH1fd_gg:APA91bHkCQwnNxfewzWHQNcsOife96V6EBlN4o6d07G303VMFUjBgfuDdyO8H2viQALM1v9lb5b8mMI2bZ6YJGy8IDaoODEK8cCE2Rdwyclo1RjeD4NplWrKyOJ_AMBsuGgRRIuJ4lZa', 166),
(144, 'ezgfH1fd_gg:APA91bHkCQwnNxfewzWHQNcsOife96V6EBlN4o6d07G303VMFUjBgfuDdyO8H2viQALM1v9lb5b8mMI2bZ6YJGy8IDaoODEK8cCE2Rdwyclo1RjeD4NplWrKyOJ_AMBsuGgRRIuJ4lZa', 167),
(145, 'cTJjB1HWarE:APA91bF2qvTU8x5mAgOtM7MZuoX-kx27ybZVhL8qKRN-WUgZ6YoJfoXho2ilGUatoFYPfvvdcoV8IzlxclsxzKQ4LLBmdXXpW8Oku2SyS3VEGOkitI13ziz03ttgY9x-1QQnH5s4TZqH', 168),
(146, 'ezgfH1fd_gg:APA91bHkCQwnNxfewzWHQNcsOife96V6EBlN4o6d07G303VMFUjBgfuDdyO8H2viQALM1v9lb5b8mMI2bZ6YJGy8IDaoODEK8cCE2Rdwyclo1RjeD4NplWrKyOJ_AMBsuGgRRIuJ4lZa', 169),
(147, 'e8V6lzph1c8:APA91bE02pOPFBH5ha9rWFweXpyqOLesBr3xBZwqzQ1dw4s4Qy-6K0Dw3zF_TNDsm0-UcLkhZNqt_SKbFraQ1jDiJD3CN74n9ceC3EGPV5nKw-yA7_fEOfY9uPQBiIoNM3pBhsJsTJ5P', 170),
(148, 'ez2wj4GXas8:APA91bF6C7mr2EtvBK6feB4AoBXWS1WnuI_djLruvIBv2l5ri5j6fL0xGLEFzf4uumcDefNg0DvoHXZjCqO61s4E-mA0FIr6HWHdv-XAkKHBl8YlTN2m8KGxVyI27VI8YlFL-MGDoYqa', 171),
(149, 'd9WBNEXRuWE:APA91bGD6qOKKFbnRFFQFM4NBpqrz44BBiGk8DLvLudyI1hnjlClb91NxivKUeVbRXs-FpXCWudvnp-PA8qIoyVyF-i3Zb9vjEDsL8J8N5JN0cBeXl0dXS9OQW-VuOODepP13tcEusr-', 172),
(150, 'dW04pXupFt0:APA91bF53U3hpc9VpfipoQM4vsym1MIy7hhvL1rxdWHmuW18oyMJ4Rzs4kX5BYVYDdumEF9WS71RHpVOZMg5JqFC7Vv2ntBrv1wbe7CLzqPfZ-vuCZbJbK_DRjR4PCBxNe4AAiKh1BOs', 173),
(151, 'fwQSrZ0jD98:APA91bFxUa4o76iApAHmKumE7MgV1v3jvJ_3OGEDqEJyRozh1p76XZkscAR-yeoEBEBh2QJWbwYCua_r6z8JdNwv30CHQ4c5sw9TTCadt-516xuQ-7dTnbmOsgYSCxrpAfqEXpz0_0ZO', 174),
(152, 'cFF9ZUz1vms:APA91bHlXRNMhIZK-i-t389zlFIfDXmrskzK9jHBOPAPNhqdbsn-I_J9q2uqNDACjDoVR2eFQHnxNnumGJZgCnzGQ39b6vtTbZM8uk9awLmvzoOa1KKzKEJVN1QywukJmRhis6y72Ok2', 175),
(153, 'cVb2kTU7ipQ:APA91bF9AHhCfS8t4ZBss3jfpOIxpI2lCEKoHcIDtALpsXcxeWVEAfUOpKhCdESi1xj5yEVOFWdo95THO87N6DNGadLcB7mx06S87Nw_MITRJJ4lfClTOzRDBmF9UtEw1vYB2bzDC8rl', 176),
(154, 'dtx1dBQqSOA:APA91bFnGgLmGFoi4NSOsT3Xfqc4BJfgP8zCDOQzFeEjnoGlIYVmOMtXAGEJv2cuQiqr0Vd127S8gtrRAkk869tIsGJmNcIXz-paZOqiE47shQbgRj5Zb_Nw14O-jOSc2w25BwxIS8xa', 177),
(155, 'd3Lrf_rJWYs:APA91bG3Js6GnE9ewq2K_RXO4xwdBZNth9WBa6ISc6t-kMZPIfmt8fENP1FbC2pInw9M-OAxEKJvA-APZpYSscv3ft1I1qYQ5b_wnXizK--GmNGgWHo7ymewmnqSYn4kUre7etTSpsoZ', 178),
(157, 'fiZh4F4lcng:APA91bFIKISMwNZyht3evgCilPVGsuA9PVi9NSE0623dpElIPphfbxUYrEKrKxR2LPoG9Z54y3syg6DKL9ZPHmLt5wRfsAgcEDOaivSLmCYoN054VYL-dl57015HxV3-yq_RoR8q5sFt', 180),
(158, 'eux9uidRf30:APA91bHAQCDRiFoncHGPpgbahqjP0RaOdAGCnauDGObWQk5coIe6YzXgfobOut6LBJe6F7Ty6PGyVTAtoCz1gya41ERt8lcx-rluRs5Qo_6eYgOJP_qb5nYmqIO0cJSH8r_5fYhuRIjo', 181),
(159, 'faus5ilNEAU:APA91bGth3l3l1T0glS70EWl6IU9K3Qkueh6rDnP-7R1X54OD1XQsvt-UmobAXJKVaP0G8ZHKezRWduPxlDhJCU_quYyhCJQj7tozlhgBHVdMOhqSdidM7O9_kQuu5LScwBh89wBOjN9', 182),
(188, 'eyrE5YtlUUM:APA91bEQ9XYdhiKbTNS5BDcB6tBVeuWkO-A0eTb_WegWL_O2c7yh4T6tdk1T1Z1ZvBgY00_VYzTzV3cLoCY1DQ8NcyYW3xUUDn9Oj73EOoDIJlI-KF3Ror7iLkLTHhKmlESW7Xf54o9H', 220),
(160, 'ezgfH1fd_gg:APA91bHkCQwnNxfewzWHQNcsOife96V6EBlN4o6d07G303VMFUjBgfuDdyO8H2viQALM1v9lb5b8mMI2bZ6YJGy8IDaoODEK8cCE2Rdwyclo1RjeD4NplWrKyOJ_AMBsuGgRRIuJ4lZa', 183),
(161, 'ezgfH1fd_gg:APA91bHkCQwnNxfewzWHQNcsOife96V6EBlN4o6d07G303VMFUjBgfuDdyO8H2viQALM1v9lb5b8mMI2bZ6YJGy8IDaoODEK8cCE2Rdwyclo1RjeD4NplWrKyOJ_AMBsuGgRRIuJ4lZa', 184),
(162, 'ezgfH1fd_gg:APA91bHkCQwnNxfewzWHQNcsOife96V6EBlN4o6d07G303VMFUjBgfuDdyO8H2viQALM1v9lb5b8mMI2bZ6YJGy8IDaoODEK8cCE2Rdwyclo1RjeD4NplWrKyOJ_AMBsuGgRRIuJ4lZa', 185),
(163, 'ezgfH1fd_gg:APA91bHkCQwnNxfewzWHQNcsOife96V6EBlN4o6d07G303VMFUjBgfuDdyO8H2viQALM1v9lb5b8mMI2bZ6YJGy8IDaoODEK8cCE2Rdwyclo1RjeD4NplWrKyOJ_AMBsuGgRRIuJ4lZa', 186),
(164, 'ezgfH1fd_gg:APA91bHkCQwnNxfewzWHQNcsOife96V6EBlN4o6d07G303VMFUjBgfuDdyO8H2viQALM1v9lb5b8mMI2bZ6YJGy8IDaoODEK8cCE2Rdwyclo1RjeD4NplWrKyOJ_AMBsuGgRRIuJ4lZa', 187),
(165, 'ezgfH1fd_gg:APA91bHkCQwnNxfewzWHQNcsOife96V6EBlN4o6d07G303VMFUjBgfuDdyO8H2viQALM1v9lb5b8mMI2bZ6YJGy8IDaoODEK8cCE2Rdwyclo1RjeD4NplWrKyOJ_AMBsuGgRRIuJ4lZa', 188),
(166, 'ezgfH1fd_gg:APA91bHkCQwnNxfewzWHQNcsOife96V6EBlN4o6d07G303VMFUjBgfuDdyO8H2viQALM1v9lb5b8mMI2bZ6YJGy8IDaoODEK8cCE2Rdwyclo1RjeD4NplWrKyOJ_AMBsuGgRRIuJ4lZa', 189),
(167, 'ezgfH1fd_gg:APA91bHkCQwnNxfewzWHQNcsOife96V6EBlN4o6d07G303VMFUjBgfuDdyO8H2viQALM1v9lb5b8mMI2bZ6YJGy8IDaoODEK8cCE2Rdwyclo1RjeD4NplWrKyOJ_AMBsuGgRRIuJ4lZa', 190),
(168, 'cKVWTfLijYk:APA91bHt62YetB0kLpvIF89Q0flgTVCvSC6wn8ukX9yhNYYOhl0Wbl-wonD2JxOOMg9kMHM8H6HoLa6c_77boLQRSX5coHAwtpfbyqrwgqnzgKvvnfQ1JMDEodAAgRa8Dus3_4NVzXy-', 192),
(169, 'cNgZGc_kohU:APA91bFRQzIU40iiI18VElLNN8k5BjflZDnp-FV0_t9Q5MqHj7Px8SH_g04RlxmZZDZ0sNoKwTiDwMaVzZRPhV-nKcAVnPa1cvxmENNnwy4u6LhQiWeTVfbVfWlt6NQ6g7CE0kHgGmTW', 193),
(170, 'c_1NK6fUKx4:APA91bE8dVIpL40lAtvKotZBLATKgkQx8X0zvnrtfYZbeuhdXcIEeNirYXMcK0gGJhk-Swwhi3ypgr66O7RFCgL57zQUUReeKfKBobxYHAnhxt7Go5eD1HlGCTjWYgYMwrnzWZeqgDcD', 194),
(171, 'f9bzMWDCwWQ:APA91bFNRBiE5gyqZq-Q6T6l_b4kfJD4MYUq6JvE9KiimjUvOba1LuQ6dIhK-rt3szzgAGvMAwyy_zPn-cOdpAbD-dN965noP7VJxcui3sJcKVUDs8mofkAqCl1Wqg21cDfc6aovAuO4', 197),
(172, 'd1i2KVsBubs:APA91bHi9DyaRz2xmU1DWphTqcbYLfuOx-hjrU_d3qhNp0NG7loSgVngGF8jvxU4FWJyM9ku0L5S7c8TaWMscLKxDm3fztIlEtYCdKloAL3aOFh1iCQ5psz1klUQYHF3FagfcebhYuA6', 198),
(173, 'eaHjwjsGWRY:APA91bGvBQs047IaWgM_h422r9tZSHt9EqpYIv1dr35BnH4-nWmKV7Fj8jxqC95fiJmpgogotp5huzT70XpiCadF8P3R6XrFYBk3eoopuN9SxDDOW1fbFz9dB56M6YVRuvP32_0yyodj', 199),
(174, 'coKnTLeVo7o:APA91bFQ2D7gVtmgyR1jJTDIqrEdm4PhIn47Xwc--FNPPP3zDmK6ZTxpje3eMmfQ1Ao8Qm3VVV6RDReYdl_Gv27H08_dbGttiaQFvnw4NHhIUbwiycIE3fvhDDoPHSHvjoialQAOurPj', 200),
(175, 'eg_HSQyhr1U:APA91bFDOw3v01zlOucBKEMjMXqbf-olZBj7iFSVzALntRlXWhdjyV58h_yy8BRUJwamB-Vkcinltc91urh1Sj9NtUiPhZLPncnOodM6lH3DQMsNcLAhzSYkhpdZ6Q9TlLVdO4jx4l37', 201),
(176, 'ezgfH1fd_gg:APA91bHkCQwnNxfewzWHQNcsOife96V6EBlN4o6d07G303VMFUjBgfuDdyO8H2viQALM1v9lb5b8mMI2bZ6YJGy8IDaoODEK8cCE2Rdwyclo1RjeD4NplWrKyOJ_AMBsuGgRRIuJ4lZa', 203),
(177, 'ezgfH1fd_gg:APA91bHkCQwnNxfewzWHQNcsOife96V6EBlN4o6d07G303VMFUjBgfuDdyO8H2viQALM1v9lb5b8mMI2bZ6YJGy8IDaoODEK8cCE2Rdwyclo1RjeD4NplWrKyOJ_AMBsuGgRRIuJ4lZa', 204),
(178, 'ezgfH1fd_gg:APA91bHkCQwnNxfewzWHQNcsOife96V6EBlN4o6d07G303VMFUjBgfuDdyO8H2viQALM1v9lb5b8mMI2bZ6YJGy8IDaoODEK8cCE2Rdwyclo1RjeD4NplWrKyOJ_AMBsuGgRRIuJ4lZa', 205),
(179, 'ezgfH1fd_gg:APA91bHkCQwnNxfewzWHQNcsOife96V6EBlN4o6d07G303VMFUjBgfuDdyO8H2viQALM1v9lb5b8mMI2bZ6YJGy8IDaoODEK8cCE2Rdwyclo1RjeD4NplWrKyOJ_AMBsuGgRRIuJ4lZa', 206),
(180, 'cfObUu2FX8c:APA91bHOkBCxGWzRiPncMX8Vyy5CBMG-ggdu3fGGPpxtibr9jL9tZl3qfIkVhw7djo_ZegrS-JhMmWWwVJkMTGxpfX1u4Ps0NrGJH_tOLL1NMUJtFAk5B1Ye7UucVGGXKDdYFfr3MiKK', 208),
(181, 'ecVkTICQn48:APA91bHrivQLG3MbYsqAKaE6PiibFDHhTM-pvOUmIY1zEfbY1O2GjecHCCRBo-81TPaO2BFlHZt-tCTZ4rDcrJ-OBiUd0Ldxi_yEGp-l5Ivu_AMkuNNFQGIYCnSDt0fINTxLzpHgvGXV', 209),
(182, 'f945QE-stkQ:APA91bFDDip5sD0XnquLpO615PQmu8PPWSKC9iAsbmBafUKX3AC0hl5xIiU8kirYW2ZcKqF-jKnNTULFemCxGs-Ae_9AUAFIh4IIlElhoAwtL-wiNhYlofxRt-vEGjp_tRJBcqVEh4KN', 210),
(183, 'ebf1MVwbkXI:APA91bFimBD3U7iGPEoHGtD2scTpULKNyZlIPBQGSCZZqDkOLj4QfkUHjM6JTE8XN8oTNk69v5R8LIydD35KVRGhO9UPajyo7ryxqmHnT2B7SoafABzKBbyp6QHUA3ks0DVAYZAKJdmi', 212),
(184, 'fBGLTS5qqHQ:APA91bE-6r9Nod_Uw9QXGwUHpR5jq8-CD7JF_GHidrL-31THnTRUkQBz10-TdBRTh6pLvG7eBi5PmszLNtQEpIX270Q3s0AnlvCqxU6NQ7En8PQ4vgA3zzx1RLr-BycXPVnn1VSGC4KK', 213),
(185, 'e3hZRhny1Kc:APA91bFE8Um00LAJ_OL4Sy0mPiKZEKk0DkR6XmKabjlVEEZE_qvTjpT3lV8mcSZ7h7tgNqljWDcxYP2asUP5er1fpCaAiPqQ8Haq9TSc2jv91Ykj8LoAskYKVtZOSMsC0NL2ImD8el0m', 214),
(186, 'cCpDHBYuSMY:APA91bHWfEAOpDx8Vundah-N_INnNwuGu00wAgq31IRTquV_Ix2QfcWjZBpT8wBufRWXkDWVRvOVmjU3xt__zta3p_w_HdOlk5BfzBx3MzDo-EDLehYJGMMUNH8aZBkmvoO0QiaGEa_J', 216),
(187, 'dohZN6C8yKk:APA91bHa_2RLPbwzSKQPlUgHjIgq5K-xSv-GEyEFDrkDRszerN0TWzC8OhhCnAc-t84d1XRQCzN9R04tA8nz2fXHcRF99dGi8p3xKW9tGaed2HNJ_GNFf6Wt4l8PPv6_0qU967anEkoR', 219),
(189, 'fpvi8K_cXmM:APA91bG1CGEF3Njowm2BrLIghRexBYFYbgjEEjrCRehGhHNcGxxslB86FtG9WnoMEVill9yYH8N-IJedrJpiLte-iSfEkZLH-zy5S0lfEp1g0_HjpcXtSbOq_v0AtA8M60jDHFeJN-2V', 222),
(232, 'fBKRKzVnTBs:APA91bGHmzdt1MJ33EyFyzmD0niMf4qjGvOURjSdgI94NVKIseRJ9KGd2MqmoTapwC2y2FdGZTsW00s0B12wlbw_gnHP8FnGnau1XV1ExAbUPCE1FoW9XYo5cbQvom73wu89LiAxI9t_', 271),
(190, 'd19vYekBmlk:APA91bHEfINZ3dLqAXaWq4erEL8I_9umFnre1tc4aFew7WAUmwqYUJiYwKwD5q3UjcXV-PWZAmDwtHtC_AemxCe5JI61GKwpTCTZ-OOiC1f5PNMwHNU3tV3oh8Xqzw1KazBlMP1UNUXU', 223),
(191, 'fi4T1EfGQUE:APA91bHE_wpgfvuFM3e1vOJxWSJzB4FB8aYWxm2W9Y0mZhuXrvyyvlFRP6x_KxxS2fRZZRQi_I-qIACFGMmHbh8dytGHVTnlgtgDAVRJFjGxRBlU9XG7fFfpdVSQcSSi-uGJuS6bQMBg', 224),
(192, 'cf6sqYap9z4:APA91bFtgDEa8pNiolEka0eXfJB_PxVIPQSqgPtK8IVjBzBp0Jc6ZVSqJw4guVcqE9Dqnuape6ox73bL2X3uRvlHStW_sfUyTgwHjMK_UhVpQImZGVULiMk6hHzmzISAA4CPGly6i2XR', 225),
(193, 'd-p2VlDM30s:APA91bFqEygIi8pdLA1qd-A2B4qTbE2VhcpO0GsSlk8nkgYsqOVKJMugR17mkyvScnBe3JyQe3908YDZMWIK--wH8fPzfZvE0ymx-2QbiVyQ8kjJo5Vbeu_o2UgZCD1NZJnnG4lvHmpH', 227),
(194, 'fM--m9IwH_I:APA91bEu7plBwq1uS58t3HiKSY2Eq5nXLXPwIz5z480kM5_-TnZhRRl6Z-S_UHHXadLJ8u7XdIMnPX8Z0ZmhCDUZ1FfJifFOCdDH4zEX8XQpOhvY2CQiNaaxuWpwluHGtVr4NkvB2n7N', 228),
(195, 'd-WL9c06CB0:APA91bGWaibV82NLQ1GfkICmHzynGN4vsa5KixfBA5shSn6ozZU5u4YwNXQa0YpkFJ8CsiU6ZDtw9GE49jaNIha3MWTBXTsyvo0EP6-fXcA76qQ-JK1X4hgdnTedO95y4w4t7QktoJAb', 229),
(196, 'dzyH39xJedw:APA91bFhNO-VJ2koMvJjdmxACx8rjEna2k51HfXDGxwjtzUPQ_hT661EBYBLXoX48LyNcGJCKPk39XkBeNzT0dGkRAq1WpSMa1PxvaRqmV70-oS98gKMzhPubJKKFIF441MqdQbLfdob', 230),
(197, 'f4_9ua-OWQI:APA91bFIhMsOarYt8qPoHh5y5lIeYNLIaXOYVg20PKx41RnLK3U_TX7wI9F0QLM4-TcQYQoWFPDoNXFDOO2hNUZzezjbMxNJf8fziY0G7x8IFPwDUYQK4xi1wqKjxnc2Zuqlp3VxQ7LR', 231),
(198, 'e1WxdDWTr5A:APA91bG4UvHuiakypft58CHw9-1PXJRQMY_rWVLbq8DW0PvIqvO5YOCrPcU4lrQUYh7PyvxmNgpz7e5aVYYe2J-3niBtkYE61NEsQHyQL24MuAxxaM-AlxIWa5hQ3nZXqoyvu2tvGuvg', 232),
(199, 'e9gIM24HWD8:APA91bFW4s_Vv6uW9Nudj79aWkuKg7G1m8IGHUK920efYG5URD624uglQkEfOK9Tl1kMdypug6YvhZI0y2-gfJNeBnXpvsYkVOncsDpWeUaMDQ5CPMtmb5Mbgpb6Tg0uAXxaAxTReLtj', 234),
(200, 'fMwG-Tm_pFI:APA91bEtWZY0st7qUIYNJp9EL0LjVGHwyWvnwpTOuhNsDi7wFnCOxsQr7_FIEMkOpKxLKq3bDyjJPb33E9cmxqi_JSMbIAwoycZEIUTDokAHna-a3eJtK9g_XhqVGQdGDZPWKgL3X3bv', 235),
(201, 'dlnnGIx30ZA:APA91bE5FjJ_GfNgK72i3TfZ81mkZja7drQxaNb1UlnIYfhYgrm6f4h8l1Nr29uvk1TfiunpokXsNjooegPHL4h0k8I4ueBC6u_0fAO8nCrxGSAQlCa1QplK6Ip8A62LK4R75RyyQSSX', 236),
(202, 'cCvi987YeSE:APA91bEXeQgDwPO-87ZhT4bHxOe5u1r8jSWQu1RQwCKqZabD0_ExFA__-Cdf9v5qVO_Ae7UASk1a5Esajzdalw_HQdwzzZUIkqns6fsbTAgg2TJtxz2onSn946En6jW4mVtvkcdO2h66', 237),
(203, 'eJmCNA-1ylw:APA91bERj7YLIQtE9moDF5HYla7MAWTCLi7OugnfFiA3qGBlBdYQeqg6djUjRoy42qRjPSMAtee5h4ZvQ8DUv12geC1OD93jMz0_W9xl5i0_tVCbJ2eMiH4tO_CMwEhkc5ciAKpmys6r', 239),
(204, 'elYRL15qCz0:APA91bFl3XMXjXo0PrY02xE-k-jDbzm7IwgA-6iuW3Jly0-vkbV90TFSWc2rU1W4Tc3gjPzEMJyl2rpV1u6IXZYKwS6gQGA0j0cRjXKt0_n9zeVgG06PKq2p-BeJCWB6ytRQhPudg43a', 240),
(205, 'cl-8sKg43yc:APA91bEQwX_CND7tABq3-EDrGSVZ3kneA0JrcSnhOt_t3rKst-DGz9Aw5DpOm6uM3qHKOSKOcHFfZL_64W4V__yvwhePM-uzFQ-rRN8wKKCe-5ZHGVG5rnuQjZOUu_IXjfwJlAxpA8h6', 241),
(206, 'cu_yPhyzoug:APA91bHatiYqwYLgCVkv7TcV1JBQQAVMSOiB-Yi__jQK_2QhDYG65T21xSVWqzE3SJF3myphoMO1A16IS1isbKgAaYra6jdDpaChz-B3ZNN0hXyYwa-tI_bGmU8iDianKdwvcdnNXohj', 242),
(207, 'cqH60wR56e4:APA91bE7MDzcZPyEk9LeID3DsTNKgjHG7R2xtJonsTEjfkR5CeDOiviaMiPUlJNJUQ_B3UpikaS7MibMDFzYJjpaRaQLZtfMfklEbQvS8HIXY09rXWx63E-aPSzt2qdzzgOExX0YCTkQ', 243),
(208, 'dma3Pc7E3Es:APA91bEGeKydQtbblMNUhetTd6nRWLbnCULfpUTp_SLVNGNMcunvxM5dsuDc64P1ySh9dWAU8jaT-vhMIiCovjqIW9zwge3HuBJPvnkVhriWWYK_Xedd2Tl-rBpwHzYCOkqY95d7sC0y', 244),
(209, 'c7Gpuearol8:APA91bGlkqWnn8ODIg_uxJtnlVKrISfuml-N4T5L_KbL4OAwVVDlVG1zftvsDPu3MNGNKo2ySr-XO1aQyboQ3jAl7D46q4hmlOuxU87pnu-69VlvAo5RsE5Ho3Ld4WwKIEoWhgwsY13S', 245),
(210, 'cL0e9XOW_-w:APA91bFYPNIi2ZxYmta6XAw_gJYWv_M1oBDY660PhePamOF2D2Fk3gPreRkkoRDTGefBPOPtTJyHKnsbPxp4ersiiTf0zT_YqnZA9iiar8UGJKgZmsm_I_IWcQaBA6tz_PdtNyyy0_Za', 247),
(211, 'dlV_Iml63a4:APA91bEvCrudK6jM9pfnYkgBcsuw0d0ghHoGrl5F_oPRT9imj3RCNHHkHh1R63pYbUhg3266m71yFNHlhcueibSIDOy75vFzo78Hwb090ITAmUOxjUftSNYnFDJGh2m0GmMI7aib-kay', 248),
(212, 'cuSEAr0lUCY:APA91bF0nfWBgxJfak9Ya80Yz-3PYU_qg8CyjPxNc1HbI8-vheYEkfOkKQz7X2BgabtX40-ai4HfX1tgVaj-69XcraOj-x1gVGw5keA5RvVwnt-VuSNVtefDkOJFeBdXSZ__KYzvYc-n', 249),
(213, 'e3Yzg3QbGbc:APA91bGJiTQakZNAwmVkfuQSwcHcXCtSqIoS4zsEnzKkbyxkk2loovOZgOp2qt1q0LnMeBGzJLfJdTZrCNqtkRp8cQbItOgoLqT6fqalu09iix5xlxQUQzy3kuHn4-xjrJIc3SSIBfwg', 250),
(214, 'fNrCeM-Essk:APA91bHM7Y1Rlq3zcvDqOH1fC4pnl1INwgYX1EAbw3odTDDQDhCws291RKXqDg2Wpo2PGFTr5Ic1zPm94iEvYBHIN34qbVEB4P_MZsH3JvoxtLQElsEfyRB0BqdJ3jnVQfeYCUhk5kLQ', 251),
(215, 'eIRcY5vRpGo:APA91bGQlvOFIZ1JMmzLDNWUlsc0yGrgrZuJUp7ihpuNvLgSG0kvYzPSlHNw7vSkQpBCXHroaF1o45d7yGpgTVkgMEPXvkg_MbeMvnrUU0eHVRcgKPMBH1arRHESF4Swm4GQ6Mq-CIXe', 252),
(216, 'eCoP9HP4ruE:APA91bHeRj4FTz0tlfovw70ImWDlUpYG8BN44XGmUvRB78wMDvVqzBxEIYt29MhKG6DPvfyteMGzYw2F7rJWnl-iJdOM-HiwraBRYOJ0P_7lVaR2jjamIKTPKYh9heEu6_U6alIVV9QP', 253),
(217, 'cONdhnraSZE:APA91bHsN561cWFQNMWdIq32lZZbVAbZWW4Bee7DiVYl4H8iJc0vwEsaSnvmXRsRwBOmhbGqJC_0vvJgEcDuuZL1XR93JKKYji4oKzqC3UGWjw_bifvoOCA2vdhLdHWohlCenv-OoRKO', 254),
(218, 'cg1WT6lPYXg:APA91bHBd4WfoP7GGhZORAX82ABMjo_H2MTAwANLOhnZ5zDr8EmJkA3dE6w36b4OgtmDarzHjeihJF5s79IJNVmiR-aBwfkagkvTvn01s86i8L6V5uN0PFE7lcBR7gPkyxFUVpByjI4l', 255),
(219, 'cTJjB1HWarE:APA91bF2qvTU8x5mAgOtM7MZuoX-kx27ybZVhL8qKRN-WUgZ6YoJfoXho2ilGUatoFYPfvvdcoV8IzlxclsxzKQ4LLBmdXXpW8Oku2SyS3VEGOkitI13ziz03ttgY9x-1QQnH5s4TZqH', 256),
(220, 'f0pmdB5KwWg:APA91bHf8hnqQNbQLbG4YjtOAw74ePuTnXpay_tXL5IkFmHfCX1BfKr0gA4O7-jWNVJuFv3PsJ_BHCIpyXzkt1Ntgo7tCZ9GMEm5WSgXcu_PZ6TW0LwpMmtm8nqTzPnJhNxYv3wkw1nL', 257),
(221, 'fGSnmtn_kA4:APA91bHFEfceKlr7J1HgKhtK-EK_BVvFC_1PWlO0mmVUCO6EMLEKV8QFxqHmFUWM8GH9zcM5FEETY80CgnqSoWaoKo-YmMy_mII5C9jkhVlldOsuhiZkMjkH78YLCW0MVX7SC9My-IgH', 258),
(222, 'd8Mw3R9lXfk:APA91bFhszD5gG_BQYYjFMZp4GzFZMyLlcR_1-n3SPQF2esxqT3wDAQpTrlN8dnj0T9ZiYxDmv0eQ5Myu5hQy2y4tUg7fkdxRKxkEql5UgQdu8kFAMdR8mRl-21_ff9sohy8DXhRSAzB', 259),
(223, 'd7qZYXv4yfU:APA91bHSI8q2WyvnC9K-GCv2_fWcEfTcyZ3O-XeUNOObxwN6rGg7lMDtMK_9_OGUGDQj8OSZXu0ti5q-Sf3PJ9ipyfCdrOKbDe5x4Wg1lByJHd3-dQcvw1zvBKhxmYce7nXeNlHLkmuE', 262),
(224, 'cfFsH4rIPqQ:APA91bEpzhI4c6ANFLLOtSDOBPjg0UsvkaCsNF4JKxXgT7MXnAf_R1MZnjA8QMTMG5OSYfpKEbfNAB6dtI_Laj0kh5OGpChewTT7IcupBq0n6_39EuiEj3NCzgn7jjzZGAOS59FKVsvy', 263),
(225, 'cVC6qYzFPFo:APA91bE3SXyu-dnxAmpsaI_uGzHZsvd3kcnX6dU2jlZyZtLEnyCwP6pdD5_qPZ3CmJ8LiXp3EPVXHcA_wlOG_4n2Z3hFlt4kE1K-8MhPkAZjbzozcLk6RWsCMJDid2unpCEN_qyDl13q', 264),
(226, 'cCmuqJ8oOOA:APA91bHzenKMzIKvcpPxdu88FrBzvpMQfi_JQC_r85wxe2KFJlUUDsdUA-jz4cbtukOAIad6Eq00DBwI1RKY7jKkKJ-NPHPd71Eez3QAqqqXtilq0PgehmuslULdwlUhZx9hdrXtU9m1', 265),
(227, 'eCJOI4QZk3k:APA91bETe8pEPaRK8guCAUko61t1MUOV_a9Re83pCZE549WJtQ1Pei862_y8bKklGDHqhJcdGHKQ8WK37KHl9Oz09eDXNz5OwVpR980bW-p-cs1ito_BTFJVS-MHiHiu54m2LZ-t7EZr', 266),
(228, 'dUwI3jVkKWo:APA91bHqpuPSKfFkkm9gAuXmL13uKjN0kX4NRdDUzYO1BoeUzklN6xc4BgjUajhqLyPz9DdgXIlMoqPa_xJM6iToK0RF3vaScgEiVRY1eItYVlqxF0SJGuYhFI7dqcOPRrEWJhe4god1', 267),
(229, 'cJUDCzbfYq8:APA91bELvFxsfXfwgXqU-zt9WXU_ndWmkp2DDncYLULrJvipAumM7Na51VuYopa23MoSP4heMwcz_agCbyHEBgUU0PWzarvJbZewyWu9nc5Y8pCLG0Zh7qMiq8RWCNfw1uWCgOqCleP6', 268),
(230, 'eyfJAyKTpQU:APA91bHQZHd7uAOWrF8tginXZuF1EUf2iIRrobUxGTEq6IQROku4k_17xu7CS7Z5mr6WKEvLeH6azFbwzEvq4XRWT3gr7RBKZH_vC3ZopHYp-QtAGINzNoMItLkBnSGl3tfCWZGTjTbG', 269),
(231, 'exbYmOF1yb0:APA91bFv3QnTbor8FH7-DmQtSgq1aobFBpJwvHFMXJCxDLKHbRiLDAHUd7UKF7Xkbl9CG6v1KO5WoFTd5RbmR1fyPpIN-wBYVD97EjQPr8mx63hPWvoGUbE0FB_-YR0DuTzFqYrVc0E2', 270),
(233, 'driRDiEhpIQ:APA91bF1RzJWcAUlie2NGernabf4ENokYZZY8ju4fAuZoJQoGquS2hcLzhzLYMJZvw2jEfVI4dNVtY-VYbVDzkNnfdtRBiVZoaBa2AyPp_3zbTRefbLRg5iI7JZF8k2eFtYQPnZJDVm4', 273),
(234, 'elFNBSr7KoQ:APA91bEPQzGvEscX2ZnJf-KspiGxjZyv3U90v33n8Tgoh6IZP4DgQojgwVsIWiGxh1_oCDApxJgLzBWhb9NOrPVsAKTIxEUVCSPFJzv8Di79gEhgVXsvrppMiswISxlDa8Ll8dWUhYav', 275),
(235, 'f8Z_KTE92xo:APA91bHsJHxVXgWVJavd2HHjgG5HgP_gQZyCwrWWcRgaV24S_zi7jSANtHwVIh2KxmkeXUnDdEYIONr-XPFdsf_NI1GqNDtAAMpx_bMkK-2z4eYdNa0rD7v3cIHVH1LBChcUyb13791G', 277),
(236, 'eBlcsdE0dDk:APA91bEjgaw1U0nNcRs-tQbQUyoT7--DVWgTLuLOWD6UJutIRkAaWwDY7xqRU7pRbcYqHxxsoviGNrtxSdjg4cy7m-1WFJJwSA37zhLU3VlmO_435pKrFnPexo3lOxXC8B2EqjOApDbQ', 278),
(237, 'fl7Z9TFKSAE:APA91bFjDfNVoqkYlUyOIiQrwKMrY-xkCIuVlAlpFluLJHtaS4NWSdM1R0CAU2I_X0BYf7apzMyIXTbKWe9Nzpd-AfP8wQaWdlU2m3fcU4o5NaT9nCd0M27O3QpX_Nl8ZZyaSwahcrmN', 280),
(238, 'd3KEMnFnKHc:APA91bF7ZG1W8Hn_ahNuzkYVg5zLOGphaPfp7gqr5dIwZ6UxZLGKtJ7g991FiK8RVcQOtyR_wOHWxw773bEh1Ah63Cnzu6DFY71eyshoc250Mdu4_4S6DE_R2v_ENNaWJjRXpxr3ncw0', 281),
(239, 'e3GWD3WqGY0:APA91bF2dk8tl7-tXJNSkDr-dj6e7J9gEbgNr4dK4aPxfUVB38M70X8GJ1S_WSblEsckeIiIkeQ9w2DilroSo67LR4TEsMcnBe9M7PAQ5QQ_HrIrRV4DGLLehF9FDrnqup51xaxuJ0D1', 282),
(240, 'eBlcsdE0dDk:APA91bEjgaw1U0nNcRs-tQbQUyoT7--DVWgTLuLOWD6UJutIRkAaWwDY7xqRU7pRbcYqHxxsoviGNrtxSdjg4cy7m-1WFJJwSA37zhLU3VlmO_435pKrFnPexo3lOxXC8B2EqjOApDbQ', 283),
(241, 'dEVxbijQmZ8:APA91bExGSBTiB-whxuyPiRYWaKXZpddtozBtNifHU0R6d6NgMnR3PWhQFYjfKb4bXjAPHxSDs5YUbERKljVBAcKNVdTMkJCZYyn-NuX35mKSVuf3wghP_1NeBGEduEz7IjSvRH6Mt43', 284),
(242, 'fo-cue4E0mk:APA91bHxGEy5aQvRn-SMkuosa8BZ3PRn3sUOvU1Oozki_VWl01ChKJOaqYQrepoDdIqc6rbGgkzaTrTaA44JEX-fT_ugII7Y1JjtSpCXpP-scq2STYk6GpkI_dlBIPFMQ3Jc5zwwnKAJ', 285),
(243, 'c48Uz_Q0Tmui04g--FHHJR:APA91bHVxNFZM3Invb9ZSqXUeGW-59Z1gm3P5yrvaFhvmpOkorbF6LxGhRdAvk7ftqoBrb3VQMK8YD5x70f5qGPNeyTgOOcUyN4iwrLDaf51BPUrHNgl1vvaOAHqXbwGlV9VB4bG5Qi6', 287),
(244, 'c1VEmxpbAb0:APA91bG6Lyq9h2t9JuXUoLi4qCirM74JILHu9il4XFmEAXmsZq5EdaVW2z-a_ub6PY4rpFwJNiLLQM1adR2c07wL5z0H5ypOgkhwVW3l956_1r69H0IIw_5TQFbO01LGwwEHVWFzMmTd', 288),
(245, 'cNEGSofPahY:APA91bFBZk312VHaNAPqXhC4NOS6TbcOWYz0w6B9yHckbgnTVYoDdKqZDa_gmq2QdhOXOEGnIh8cKBQjZ24xO8HO1Ce7bnDYnkpq8OQBq2rakCwp96s7annd1IZJ7E9UMid83cssC17T', 292),
(246, 'ezHRwsbEC90:APA91bF0NMx511Ha1oJcPqZ4ZNBpb2f7guZYPi0_F__8kzUQHvIyI2RNcLDM13fjQEIhLAe3CcVVypEAfv-q9zpxrV49nlLpDhnoOBlNC4vZ0QVVL8RV9IbmYSMSCNlpCTOPp1ZXQAUM', 293),
(247, 'e1U3WBUxyRE:APA91bGESGTzhk3Jm9gI0nwVci1vnULVQIHv64Hb7uvoBxib7vFaiqDdNF36n_grStXjHYn71mf6A-Z4Z3CWuDyWCzB55Nkeq2Ky2qYmDwrbPfa9Gjb_G2irCTuzpgLL3rm14N0hJCaM', 296),
(248, 'f7wddGJYoo8:APA91bFDzLJRtf1QxDA8J2DbzGeRh-IQ2MjBM4yeFL9LGzDEUY6W8G5DNswe2vX5KpckbjjW795X3QeYhIn6pv-3sY-20xplHxnORVd2xJkcPpL8hHdnmxjcFaOdfZ0R2_4_4D6nrU7S', 299),
(249, 'fvk6so8HFjk:APA91bHmfmNtVPWhlPVlKIDShP4tWjt4BQMMaPa6VjOWWy5IcQw6rsGkV_c1uK7wJrvz6BDK5W7zdaExxR2pa38Vhrtu2PeDT1eFw73Lw_4H_UDbWz9gUBMImvC4GcI2k4FbscDYzNrG', 300),
(250, 'cVQzkRPD07M:APA91bEq2oVhkH-yyTp1RplOWgQH0larU7aAFEhiF0VDnc0ie-q1kbzCUkx_JPykO5RuRxidfyOdpvPV3ghufZZuxsfXXxrCqQgksR5wBcrTHy-xZAS165RPA29gcM8ri2oU25s_Vedh', 302),
(251, '', 19),
(252, 'cGB04BFvRh-A_4NzYxRt1H:APA91bFGyf2_cqPmqqzM_Lc2DuEjgLYXJuKAP30p05focXXoGHCCZr4v3ZqAA9f15j1gLeQR94pT_M3CIneUSDLOzBHrystG6NypmV-G0LkendEVdbTsLdGbB1bexlu6mpwHSMAQmgB6', 303);

-- --------------------------------------------------------

--
-- Table structure for table `ground_working_hours`
--

CREATE TABLE `ground_working_hours` (
  `work_hour_id` int(11) NOT NULL,
  `ground_id` varchar(255) DEFAULT NULL,
  `day_value` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `day_on_off` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `open_time` varchar(255) DEFAULT NULL,
  `close_time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ground_working_hours`
--

INSERT INTO `ground_working_hours` (`work_hour_id`, `ground_id`, `day_value`, `day_on_off`, `open_time`, `close_time`) VALUES
(1, '1', 'Sunday', 'on', '03:03 AM', '03:03 PM'),
(2, '1', 'Monday', 'on', '03:03 AM', '03:03 PM'),
(3, '1', 'Tuesday', 'on', '03:03 AM', '03:03 PM'),
(4, '1', 'Wednesday', 'on', '03:03 AM', '03:03 PM'),
(5, '1', 'Thursday', 'on', '03:03 AM', '03:03 PM'),
(6, '1', 'Friday', 'on', '03:03 AM', '03:03 PM'),
(7, '1', 'Saturday', 'on', '03:03 AM', '03:03 PM'),
(8, '2', 'Sunday', 'on', '09:00 AM', '11:59 PM'),
(9, '2', 'Monday', 'on', '09:00 AM', '11:59 PM'),
(10, '2', 'Tuesday', 'on', '09:00 AM', '11:59 PM'),
(11, '2', 'Wednesday', 'on', '09:00 AM', '11:59 PM'),
(12, '2', 'Thursday', 'on', '09:00 AM', '11:59 PM'),
(13, '2', 'Friday', 'on', '09:00 AM', '11:59 PM'),
(14, '2', 'Saturday', 'on', '09:00 AM', '11:59 PM'),
(15, '3', 'Sunday', 'on', '03:00 PM', '11:59 PM'),
(16, '3', 'Monday', 'on', '03:00 PM', '11:59 PM'),
(17, '3', 'Tuesday', 'on', '03:00 PM', '11:59 PM'),
(18, '3', 'Wednesday', 'on', '03:00 PM', '11:59 PM'),
(19, '3', 'Thursday', 'on', '03:00 PM', '11:59 PM'),
(20, '3', 'Friday', 'on', '03:00 PM', '11:59 PM'),
(21, '3', 'Saturday', 'on', '03:00 PM', '11:59 PM'),
(22, '4', 'Sunday', 'on', '12:00 PM', '11:59 PM'),
(23, '4', 'Monday', 'on', '12:00 PM', '11:59 PM'),
(24, '4', 'Tuesday', 'on', '12:00 PM', '11:59 PM'),
(25, '4', 'Wednesday', 'on', '12:00 PM', '11:59 PM'),
(26, '4', 'Thursday', 'on', '12:00 PM', '11:59 PM'),
(27, '4', 'Friday', 'on', '12:00 PM', '11:59 PM'),
(28, '4', 'Saturday', 'on', '12:00 PM', '11:59 PM'),
(29, '5', 'Sunday', 'on', '12:00 PM', '11:59 PM'),
(30, '5', 'Monday', 'on', '12:00 PM', '11:59 PM'),
(31, '5', 'Tuesday', 'on', '12:00 PM', '11:59 PM'),
(32, '5', 'Wednesday', 'on', '12:00 PM', '11:59 PM'),
(33, '5', 'Thursday', 'on', '12:00 PM', '11:59 PM'),
(34, '5', 'Friday', 'on', '12:00 PM', '11:59 PM'),
(35, '5', 'Saturday', 'on', '12:00 PM', '11:59 PM'),
(36, '6', 'Sunday', 'on', '01:00 PM', '11:59 PM'),
(37, '6', 'Monday', 'on', '01:00 PM', '11:59 PM'),
(38, '6', 'Tuesday', 'on', '01:00 PM', '11:59 PM'),
(39, '6', 'Wednesday', 'on', '01:00 PM', '11:59 PM'),
(40, '6', 'Thursday', 'on', '01:00 PM', '11:59 PM'),
(41, '6', 'Friday', 'on', '01:00 PM', '11:59 PM'),
(42, '6', 'Saturday', 'on', '01:00 PM', '11:59 PM'),
(43, '7', 'Sunday', 'on', '03:00 PM', '11:59 PM'),
(44, '7', 'Monday', 'on', '03:00 PM', '11:59 PM'),
(45, '7', 'Tuesday', 'on', '03:00 PM', '11:59 PM'),
(46, '7', 'Wednesday', 'on', '03:00 PM', '11:59 PM'),
(47, '7', 'Thursday', 'on', '03:00 PM', '11:59 PM'),
(48, '7', 'Friday', 'on', '03:00 PM', '11:59 PM'),
(49, '7', 'Saturday', 'on', '03:00 PM', '11:59 PM'),
(50, '8', 'Sunday', 'on', '03:00 PM', '11:59 PM'),
(51, '8', 'Monday', 'on', '03:00 PM', '11:59 PM'),
(52, '8', 'Tuesday', 'on', '03:00 PM', '11:59 PM'),
(53, '8', 'Wednesday', 'on', '03:00 PM', '11:59 PM'),
(54, '8', 'Thursday', 'on', '03:00 PM', '11:59 PM'),
(55, '8', 'Friday', 'on', '03:00 PM', '11:59 PM'),
(56, '8', 'Saturday', 'on', '03:00 PM', '11:59 PM'),
(57, '9', 'Sunday', 'on', '04:00 PM', '11:59 PM'),
(58, '9', 'Monday', 'on', '04:00 PM', '11:59 PM'),
(59, '9', 'Tuesday', 'on', '04:00 PM', '11:59 PM'),
(60, '9', 'Wednesday', 'on', '04:00 PM', '11:59 PM'),
(61, '9', 'Thursday', 'on', '04:00 PM', '11:59 PM'),
(62, '9', 'Friday', 'on', '04:00 PM', '11:59 PM'),
(63, '9', 'Saturday', 'on', '04:00 PM', '11:59 PM'),
(64, '10', 'Sunday', 'on', '09:00 AM', '09:43 PM'),
(65, '10', 'Monday', 'on', '09:52 AM', '02:52 PM'),
(66, '10', 'Tuesday', 'on', '02:52 AM', '02:52 PM'),
(67, '10', 'Wednesday', 'on', '02:52 AM', '02:52 PM'),
(68, '10', 'Thursday', 'on', '02:52 AM', '02:52 PM'),
(69, '10', 'Friday', 'on', '02:52 AM', '02:52 PM'),
(70, '10', 'Saturday', 'on', '02:52 AM', '02:52 PM'),
(71, '11', 'Sunday', 'on', '09:00 AM', '11:59 PM'),
(72, '11', 'Monday', 'on', '09:00 AM', '11:59 PM'),
(73, '11', 'Tuesday', 'on', '09:00 AM', '11:59 PM'),
(74, '11', 'Wednesday', 'on', '09:00 AM', '11:59 PM'),
(75, '11', 'Thursday', 'on', '09:00 AM', '11:59 PM'),
(76, '11', 'Friday', 'on', '09:00 AM', '11:59 PM'),
(77, '11', 'Saturday', 'on', '09:00 AM', '11:59 PM'),
(78, '12', 'Sunday', 'on', '09:00 AM', '11:59 PM'),
(79, '12', 'Monday', 'on', '09:00 AM', '11:59 PM'),
(80, '12', 'Tuesday', 'on', '09:00 AM', '11:59 PM'),
(81, '12', 'Wednesday', 'on', '09:00 AM', '11:59 PM'),
(82, '12', 'Thursday', 'on', '09:00 AM', '11:59 PM'),
(83, '12', 'Friday', 'on', '09:00 AM', '11:59 PM'),
(84, '12', 'Saturday', 'on', '09:00 AM', '11:59 PM'),
(85, '13', 'Sunday', 'on', '04:00 PM', '11:00 PM'),
(86, '13', 'Monday', 'on', '09:00 AM', '11:00 PM'),
(87, '13', 'Tuesday', 'on', '04:00 PM', '11:00 PM'),
(88, '13', 'Wednesday', 'on', '04:00 PM', '11:00 PM'),
(89, '13', 'Thursday', 'off', '', ''),
(90, '13', 'Friday', 'off', '', ''),
(91, '13', 'Saturday', 'on', '05:00 PM', '11:00 PM'),
(92, '14', 'Sunday', 'off', '', ''),
(93, '14', 'Monday', 'off', '', ''),
(94, '14', 'Tuesday', 'off', '', ''),
(95, '14', 'Wednesday', 'off', '', ''),
(96, '14', 'Thursday', 'on', '02:30 PM', '03:30 PM'),
(97, '14', 'Friday', 'off', '', ''),
(98, '14', 'Saturday', 'off', '', ''),
(99, '15', 'Sunday', 'on', '07:30 AM', '11:59 PM'),
(100, '15', 'Monday', 'on', '07:30 AM', '11:59 PM'),
(101, '15', 'Tuesday', 'on', '07:30 AM', '11:59 PM'),
(102, '15', 'Wednesday', 'on', '07:30 AM', '11:59 PM'),
(103, '15', 'Thursday', 'on', '07:30 AM', '11:59 PM'),
(104, '15', 'Friday', 'on', '07:30 AM', '11:59 PM'),
(105, '15', 'Saturday', 'on', '07:30 AM', '11:59 PM'),
(106, '16', 'Sunday', 'on', '12:00 AM', '11:59 PM'),
(107, '16', 'Monday', 'on', '12:00 AM', '11:59 PM'),
(108, '16', 'Tuesday', 'on', '12:00 AM', '11:59 PM'),
(109, '16', 'Wednesday', 'on', '12:00 AM', '11:59 PM'),
(110, '16', 'Thursday', 'on', '12:00 AM', '11:59 PM'),
(111, '16', 'Friday', 'on', '12:00 AM', '11:59 PM'),
(112, '16', 'Saturday', 'on', '12:00 AM', '11:59 PM'),
(113, '17', 'Sunday', 'on', '07:00 AM', '11:59 PM'),
(114, '17', 'Monday', 'on', '07:00 AM', '11:59 PM'),
(115, '17', 'Tuesday', 'on', '07:00 AM', '11:59 PM'),
(116, '17', 'Wednesday', 'on', '07:00 AM', '11:59 PM'),
(117, '17', 'Thursday', 'on', '07:00 AM', '11:59 PM'),
(118, '17', 'Friday', 'on', '07:00 AM', '11:59 PM'),
(119, '17', 'Saturday', 'on', '07:00 AM', '11:59 PM'),
(120, '18', '0', 'off', '', ''),
(121, '18', '0', 'off', '', ''),
(122, '18', '0', 'off', '', ''),
(123, '18', '0', 'off', '', ''),
(124, '18', '0', 'off', '', ''),
(125, '18', '0', 'off', '', ''),
(126, '18', '0', 'off', '', ''),
(127, '19', 'Sunday', 'on', '10:00 AM', '11:00 PM'),
(128, '19', 'Monday', 'on', '10:00 AM', '11:00 PM'),
(129, '19', 'Tuesday', 'on', '10:00 AM', '11:00 PM'),
(130, '19', 'Wednesday', 'on', '10:00 AM', '11:00 PM'),
(131, '19', 'Thursday', 'on', '10:00 AM', '11:00 PM'),
(132, '19', 'Friday', 'on', '04:00 PM', '10:00 PM'),
(133, '19', 'Saturday', 'on', '10:00 AM', '11:00 PM'),
(134, '20', 'Sunday', 'on', '07:00 AM', '07:00 AM'),
(135, '20', 'Monday', 'on', '07:00 AM', '07:00 AM'),
(136, '20', 'Tuesday', 'on', '07:00 AM', '07:00 AM'),
(137, '20', 'Wednesday', 'on', '07:00 AM', '07:00 AM'),
(138, '20', 'Thursday', 'on', '07:00 AM', '07:00 AM'),
(139, '20', 'Friday', 'on', '07:00 AM', '07:00 AM'),
(140, '20', 'Saturday', 'on', '07:00 AM', '07:00 AM'),
(141, '21', 'Sunday', 'on', '10:00 AM', '10:00 PM'),
(142, '21', 'Monday', 'on', '10:00 AM', '10:00 PM'),
(143, '21', 'Tuesday', 'on', '10:00 AM', '10:00 PM'),
(144, '21', 'Wednesday', 'on', '10:00 AM', '10:00 PM'),
(145, '21', 'Thursday', 'on', '10:00 AM', '10:00 PM'),
(146, '21', 'Friday', 'on', '10:00 AM', '10:00 PM'),
(147, '21', 'Saturday', 'on', '10:00 AM', '10:00 PM'),
(148, '22', 'Sunday', 'on', '05:00 PM', '09:30 PM'),
(149, '22', 'Monday', 'on', '05:00 PM', '09:30 PM'),
(150, '22', 'Tuesday', 'on', '05:00 PM', '09:30 PM'),
(151, '22', 'Wednesday', 'on', '05:00 PM', '09:30 PM'),
(152, '22', 'Thursday', 'off', '', ''),
(153, '22', 'Friday', 'off', '', ''),
(154, '22', 'Saturday', 'on', '06:00 PM', '09:30 PM'),
(155, '23', 'Sunday', 'on', '11:00 AM', '12:00 PM'),
(156, '23', 'Monday', 'on', '11:00 AM', '12:00 PM'),
(157, '23', 'Tuesday', 'on', '11:00 AM', '12:00 PM'),
(158, '23', 'Wednesday', 'on', '11:00 AM', '12:00 PM'),
(159, '23', 'Thursday', 'on', '11:00 AM', '12:00 PM'),
(160, '23', 'Friday', 'on', '11:00 PM', '12:00 PM'),
(161, '23', 'Saturday', 'on', '11:00 AM', '12:00 PM'),
(162, '24', 'Sunday', 'on', '10:00 AM', '11:00 PM'),
(163, '24', 'Monday', 'on', '10:00 AM', '11:00 PM'),
(164, '24', 'Tuesday', 'on', '10:00 AM', '11:00 PM'),
(165, '24', 'Wednesday', 'on', '10:00 AM', '11:00 PM'),
(166, '24', 'Thursday', 'on', '10:00 AM', '11:00 PM'),
(167, '24', 'Friday', 'on', '10:00 AM', '11:00 PM'),
(168, '24', 'Saturday', 'on', '10:00 AM', '11:00 PM'),
(169, '25', 'Sunday', 'on', '10:00 AM', '11:00 PM'),
(170, '25', 'Monday', 'on', '10:00 AM', '11:00 PM'),
(171, '25', 'Tuesday', 'on', '10:00 AM', '11:00 PM'),
(172, '25', 'Wednesday', 'on', '10:00 AM', '11:00 PM'),
(173, '25', 'Thursday', 'on', '10:00 AM', '11:00 PM'),
(174, '25', 'Friday', 'on', '10:00 AM', '11:00 PM'),
(175, '25', 'Saturday', 'on', '10:00 AM', '11:00 PM'),
(176, '26', 'Sunday', 'on', '05:00 PM', '11:30 PM'),
(177, '26', 'Monday', 'on', '05:00 PM', '11:30 PM'),
(178, '26', 'Tuesday', 'on', '05:00 PM', '11:30 PM'),
(179, '26', 'Wednesday', 'on', '05:00 PM', '11:30 PM'),
(180, '26', 'Thursday', 'on', '05:00 PM', '11:30 PM'),
(181, '26', 'Friday', 'on', '05:00 PM', '11:30 PM'),
(182, '26', 'Saturday', 'on', '05:00 PM', '11:30 PM'),
(183, '27', 'Sunday', 'on', '10:00 AM', '11:00 PM'),
(184, '27', 'Monday', 'on', '10:00 AM', '11:00 PM'),
(185, '27', 'Tuesday', 'on', '10:00 AM', '11:00 PM'),
(186, '27', 'Wednesday', 'on', '10:00 AM', '11:00 PM'),
(187, '27', 'Thursday', 'on', '10:00 AM', '11:00 PM'),
(188, '27', 'Friday', 'on', '10:00 AM', '11:00 PM'),
(189, '27', 'Saturday', 'on', '10:00 AM', '11:00 PM'),
(190, '28', 'Sunday', 'on', '10:00 AM', '10:30 PM'),
(191, '28', 'Monday', 'on', '10:00 AM', '10:30 PM'),
(192, '28', 'Tuesday', 'on', '10:00 AM', '10:30 PM'),
(193, '28', 'Wednesday', 'on', '10:00 AM', '10:30 PM'),
(194, '28', 'Thursday', 'on', '10:00 AM', '10:30 PM'),
(195, '28', 'Friday', 'on', '04:00 PM', '10:30 PM'),
(196, '28', 'Saturday', 'on', '10:00 AM', '10:30 PM'),
(197, '29', 'Sunday', 'on', '10:00 AM', '11:00 PM'),
(198, '29', 'Monday', 'on', '10:00 AM', '11:00 PM'),
(199, '29', 'Tuesday', 'on', '10:00 AM', '11:00 PM'),
(200, '29', 'Wednesday', 'on', '10:00 AM', '11:00 PM'),
(201, '29', 'Thursday', 'on', '10:00 AM', '11:00 PM'),
(202, '29', 'Friday', 'on', '10:00 AM', '11:00 PM'),
(203, '29', 'Saturday', 'on', '10:00 AM', '11:00 PM'),
(204, '30', 'Sunday', 'on', '11:00 AM', '11:00 PM'),
(205, '30', 'Monday', 'on', '11:00 AM', '11:00 PM'),
(206, '30', 'Tuesday', 'on', '11:00 AM', '11:00 PM'),
(207, '30', 'Wednesday', 'on', '11:00 AM', '11:00 PM'),
(208, '30', 'Thursday', 'on', '11:00 AM', '11:00 PM'),
(209, '30', 'Friday', 'on', '11:00 AM', '11:00 PM'),
(210, '30', 'Saturday', 'on', '04:00 PM', '12:00 AM'),
(211, '31', 'Sunday', 'on', '12:00 PM', '12:00 AM'),
(212, '31', 'Monday', 'on', '12:00 PM', '12:00 AM'),
(213, '31', 'Tuesday', 'on', '12:00 PM', '12:00 AM'),
(214, '31', 'Wednesday', 'on', '12:00 PM', '12:00 AM'),
(215, '31', 'Thursday', 'on', '12:00 PM', '12:00 AM'),
(216, '31', 'Friday', 'on', '12:00 PM', '12:00 AM'),
(217, '31', 'Saturday', 'on', '12:00 PM', '12:00 AM'),
(218, '32', 'Sunday', 'off', '', ''),
(219, '32', 'Monday', 'on', '09:00 AM', '09:00 PM'),
(220, '32', 'Tuesday', 'on', '09:00 AM', '09:00 PM'),
(221, '32', 'Wednesday', 'on', '09:00 AM', '09:00 PM'),
(222, '32', 'Thursday', 'on', '09:00 AM', '09:00 PM'),
(223, '32', 'Friday', 'off', '', ''),
(224, '32', 'Saturday', 'off', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `invite_friendly_game`
--

CREATE TABLE `invite_friendly_game` (
  `if_game_id` int(11) NOT NULL,
  `req_team_id` int(11) DEFAULT NULL,
  `res_team_id` int(11) DEFAULT NULL,
  `res_captain_id` int(11) DEFAULT NULL,
  `res_status` int(11) NOT NULL DEFAULT '0' COMMENT '	0->Req_sent,1->Accept,2->Reject	',
  `notification_status` int(11) NOT NULL COMMENT '0->Unseen,1->Seen'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invite_friendly_game`
--

INSERT INTO `invite_friendly_game` (`if_game_id`, `req_team_id`, `res_team_id`, `res_captain_id`, `res_status`, `notification_status`) VALUES
(1, 4, 3, 3, 0, 1),
(2, 7, 4, 1, 0, 1),
(3, 8, 4, 1, 2, 1),
(4, 8, 10, 1, 0, 1),
(5, 7, 10, 1, 2, 1),
(6, 11, 10, 1, 1, 1),
(7, 7, 10, 1, 2, 1),
(8, 7, 10, 1, 0, 1),
(9, 8, 7, 1, 2, 1),
(10, 9, 7, 1, 2, 1),
(11, 8, 7, 1, 2, 1),
(12, 8, 7, 1, 2, 1),
(13, 8, 7, 1, 0, 1),
(14, 9, 7, 1, 0, 1),
(15, 31, 29, 8, 2, 1),
(16, 31, 29, 8, 1, 1),
(17, 3, 30, 2, 2, 1),
(18, 38, 36, 26, 0, 0),
(19, 34, 36, 26, 0, 0),
(20, 34, 34, 21, 1, 1),
(21, 34, 29, 8, 0, 0),
(22, 79, 30, 2, 0, 0),
(23, 81, 3, 3, 0, 0),
(24, 87, 81, 115, 0, 0),
(25, 87, 83, 126, 2, 1),
(26, 125, 29, 8, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `join_team_notification`
--

CREATE TABLE `join_team_notification` (
  `jt_noti_id` int(11) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `captain_id` int(11) DEFAULT NULL,
  `player_id` int(11) DEFAULT NULL,
  `jt_noti_status` int(11) NOT NULL DEFAULT '0' COMMENT '0->Req_sent,1->Accept,2->Reject',
  `notification_status` int(11) NOT NULL COMMENT '0->Unseen,1->Seen'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `join_team_notification`
--

INSERT INTO `join_team_notification` (`jt_noti_id`, `team_id`, `captain_id`, `player_id`, `jt_noti_status`, `notification_status`) VALUES
(32, 22, 1, 2, 1, 1),
(34, 23, 12, 13, 0, 0),
(35, 24, 1, 8, 1, 1),
(36, 24, 1, 8, 0, 0),
(37, 25, 1, 8, 1, 1),
(38, 26, 1, 8, 2, 1),
(43, 29, 8, 1, 2, 1),
(44, 29, 8, 1, 2, 1),
(45, 29, 8, 1, 2, 1),
(46, 29, 8, 1, 2, 1),
(47, 29, 8, 1, 2, 1),
(48, 29, 8, 1, 2, 1),
(49, 29, 8, 1, 2, 1),
(50, 29, 8, 1, 2, 1),
(52, 3, 3, 24, 1, 1),
(53, 36, 26, 27, 1, 1),
(54, 3, 3, 14, 1, 1),
(56, 3, 3, 56, 0, 1),
(57, 56, 61, 62, 1, 1),
(58, 56, 61, 62, 0, 1),
(59, 56, 61, 63, 1, 1),
(60, 56, 61, 64, 1, 1),
(61, 56, 61, 64, 0, 0),
(62, 38, 34, 72, 1, 1),
(63, 48, 43, 75, 0, 0),
(64, 34, 21, 77, 1, 1),
(65, 23, 12, 78, 0, 0),
(66, 34, 21, 79, 1, 1),
(67, 34, 21, 80, 1, 1),
(68, 34, 21, 81, 1, 1),
(69, 61, 23, 21, 1, 1),
(70, 61, 23, 81, 1, 1),
(71, 23, 12, 85, 0, 0),
(72, 70, 100, 108, 0, 0),
(73, 23, 12, 131, 0, 0),
(74, 35, 25, 131, 1, 1),
(75, 3, 3, 127, 0, 0),
(76, 35, 25, 175, 1, 1),
(77, 23, 12, 177, 0, 0),
(78, 3, 3, 181, 0, 0),
(79, 61, 23, 192, 0, 1),
(80, 31, 9, 197, 0, 1),
(81, 36, 26, 197, 0, 0),
(82, 61, 23, 197, 0, 1),
(83, 35, 25, 125, 0, 0),
(84, 38, 34, 125, 0, 0),
(85, 44, 39, 125, 0, 0),
(86, 31, 9, 181, 0, 1),
(87, 35, 25, 181, 0, 0),
(88, 38, 34, 181, 0, 0),
(89, 31, 9, 225, 0, 1),
(90, 39, 35, 225, 0, 0),
(91, 36, 26, 241, 0, 0),
(92, 125, 244, 245, 1, 1),
(93, 55, 53, 250, 0, 0),
(94, 23, 12, 267, 0, 0),
(95, 38, 34, 267, 0, 0),
(96, 3, 3, 267, 0, 0),
(97, 23, 12, 293, 0, 0),
(98, 59, 50, 87, 0, 0),
(99, 50, 46, 298, 0, 0),
(100, 36, 26, 299, 0, 0),
(101, 124, 243, 299, 0, 0),
(102, 131, 287, 299, 0, 0),
(103, 36, 26, 301, 0, 0),
(104, 61, 23, 301, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `phrase_id` int(11) NOT NULL,
  `phrase` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `english` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `arabic` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`phrase_id`, `phrase`, `english`, `arabic`) VALUES
(1, 'Add Ground Owner', 'Add Ground Owner', 'إضافة مالك الملعب'),
(2, 'Ground Owner Form', 'Ground Owner Form', 'نموذج مالك الملعب'),
(3, 'Ground User Name', '', 'اسم مالك الملعب'),
(4, 'Email Address ', '', 'عنوان البريد الإلكتروني'),
(5, 'Phone Number', '', 'رقم الهاتف'),
(6, 'Address', '', 'العنوان'),
(7, 'State', '', 'الحالة'),
(8, 'City', '', 'المدينة'),
(9, 'Zip', '', 'الرمز البريدي'),
(10, 'Profile Image', '', 'الصورة الشخصية'),
(11, 'Submit Form', '', 'تقديم النموذج'),
(12, 'Reset', '', 'إعادة تعيين'),
(13, 'Ground Owner List', '', 'قائمة ملّاك الملاعب '),
(14, 'Email Address', '', 'عنوان البريد الإلكتروني'),
(15, 'Players List', '', 'قائمة اللاعبين'),
(16, 'Mobile', '', 'الهاتف'),
(17, 'Last Name Ratings', '', 'اسم العائلة التقييمات'),
(18, 'Team List', '', 'قائمة الفريق'),
(19, 'Team Size', '', 'حجم الفريق'),
(20, 'Edit Team', '', 'تحرير فريق'),
(21, 'Team Form', '', 'نموذج فريق'),
(22, 'Team Name', '', 'اسم الفريق'),
(23, 'Team Captain', '', 'فريق الكابتن'),
(24, 'Date', '', 'تاريخ'),
(25, 'Team Slogon', '', 'شعار الفريق'),
(26, 'Team Logo', '', 'شعار الفريق'),
(27, 'Back', '', 'الى الخلف'),
(28, 'Add Ground', '', 'إضافة ملعب'),
(29, 'Ground Form', '', 'نموذج الملعب'),
(30, 'Ground Name', '', 'اسم الملعب'),
(31, 'Ground Owner', '', 'مالك الملعب'),
(32, 'Ground Email', '', 'عنوان البريد الإلكتروني'),
(33, 'Lattitude', '', 'خط العرض'),
(34, 'Location', '', 'موقعك'),
(35, 'Longitude', '', 'خط الطول'),
(36, 'Availablity', '', 'التوافر'),
(37, 'Available', '', 'متاح'),
(38, 'UnAvailable', '', 'غير متوفره'),
(39, 'Contact Number', '', 'رقم الاتصال'),
(40, 'Years Of Active', '', 'سنوات النشط'),
(41, 'Ground Facilities', '', 'مرافق الملعب'),
(42, 'Description', '', 'وصف'),
(43, 'SL Commission', '', 'نسبة ستريت ليغ'),
(44, 'Working Hours', '', 'ساعات العمل'),
(45, 'Day of Week', '', 'يوم من الأسبوع'),
(46, 'Is open', '', 'مفتوح'),
(47, 'Open Time', '', 'وقت متاح'),
(48, 'Close Time', '', 'وقت الاغلاق'),
(49, 'Sunday', '', 'الأحد'),
(50, 'Monday', '', 'الإثنين'),
(51, 'Tuesday', '', 'الثلاثاء'),
(52, 'Wednesday', '', 'الأربعاء'),
(53, 'Thursday', '', 'الخميس'),
(54, 'Friday', '', ' الجمعة'),
(55, 'Saturday', '', ' السبت'),
(56, 'Open', '', 'افتح'),
(57, 'Gallery', '', 'صالة العرض'),
(58, 'Albums', '', 'ألبومات'),
(59, 'Add Ground Size', '', 'إضافة حجم الملعب'),
(60, 'Ground Size Form', '', 'نموذج حجم الملعب'),
(61, 'Ground Price', '', 'سعر الملعب'),
(62, 'Ground Size', '', 'حجم الملعب'),
(63, 'Discound', '', 'خصم'),
(64, 'Ground Sq/Ft', '', 'الأرض مربع / قدم'),
(65, 'Upto Players', '', 'اللاعبين تصل'),
(66, 'Ground Size List', '', 'قائمة حجم الملعب'),
(67, 'Add Ground Facility', '', 'إضافة مرافق للملعب'),
(68, 'Ground Facility Form', '', 'نموذج مرافق الملعب '),
(69, 'Ground Facility', '', 'مرافق الملعب'),
(70, 'Facility List', '', 'قائمة المرافق'),
(71, 'Add Tournament', '', 'إضافة بطولة'),
(72, 'Name', '', 'اسم'),
(73, 'Start Date', '', 'تاريخ البدء'),
(74, 'End Date', '', 'تاريخ الانتهاء'),
(75, 'Team Limit', '', 'عدد اللاعبين'),
(76, 'Team Player Limit', '', 'فريق لاعب الحد'),
(77, 'Tournament Type', '', 'نظام البطولة'),
(78, 'Reg Fees', '', 'رسوم  البطولة'),
(79, 'Reg Last Date', '', 'ريج تاريخ آخر'),
(80, 'Winner Price', '', 'الفائز الأسعار'),
(81, 'Runner Price', '', 'عداء الأسعار'),
(82, 'Trophy Picture', '', 'صورة الجائزة'),
(83, 'Tournament Image', '', 'صور البطولة'),
(84, 'Awards', '', 'الجوائز'),
(85, 'Tournament List', '', 'قائمة البطولة'),
(86, 'Add Tournment', '', 'إضافة بطولة'),
(87, 'Add schedule', '', 'إضافة جدول'),
(88, 'Add Points', '', 'أضف نقاط'),
(89, 'Add Tournament Schedule', '', 'إضافة جدول البطولة'),
(90, 'Tournament Schedule Form', '', 'نموذج جدول البطولة'),
(91, 'Tournament', '', 'البطوبة'),
(92, 'Team A', '', 'فريق A'),
(93, 'Team B', '', 'فريق B'),
(94, 'Groups', '', 'المجموعات'),
(95, 'Match No', '', 'رقم المباراة'),
(96, 'Time', '', 'الوقت'),
(97, 'Add Match', '', 'إضافة مباراة'),
(98, 'Tournament Points Form', '', 'نموذج نقاط البطولة '),
(99, 'Played Games', '', 'المباريات الملعوبة'),
(100, 'Wins', '', 'انتصارات'),
(101, 'Goals Scored', '', 'الاهداف المسجلة'),
(102, 'Goals Difference', '', 'فارق الأهداف'),
(103, 'Total Points', '', 'مجموع النقاذ'),
(104, 'Loss', '', 'خسارة'),
(105, 'Tie', '', 'تعادل'),
(106, 'Goals Against', '', 'اهداف المباراة'),
(107, 'Add Awards', '', 'إضافة جوائز'),
(108, 'Awards Form', '', 'نموذج الجوائز'),
(109, 'Award Name', '', 'اسم الجائزة'),
(110, 'Bookings List', '', 'قائمة الحجوزات'),
(111, 'Bookings Status List', '', 'حالة قائمة الحجوزات'),
(112, 'Add Booking', '', 'إضافة حجز'),
(113, 'Booking Form', '', 'استمارة الحجز'),
(114, 'Player Name', '', 'اسم اللاعب'),
(115, 'Booking Amount', '', 'مبلغ الحجز'),
(116, 'Payment Type', '', 'نوع الدفع'),
(117, 'Booking Date', '', 'تاريخ الحجز'),
(118, 'Bookings Calendar', '', 'سجل الحجوزات'),
(119, 'Payment List', '', 'قائمة الدفع'),
(120, 'Total Amount', '', 'المبلغ الإجمالي'),
(121, 'Payment Mode', '', 'طريقة الدفع'),
(122, 'Status', '', 'الحالة'),
(123, 'Close', '', 'قريب'),
(124, 'Save', '', 'حفظ'),
(125, 'Reports', '', 'تقارير'),
(126, 'From Date', '', 'من التاريخ'),
(127, 'To Date', '', 'حتى الآن'),
(128, 'General Settings', '', 'الاعدادات العامة'),
(129, 'Email', '', 'البريد الإلكتروني'),
(130, 'Language', '', 'لغة'),
(131, 'Profile Settings', '', 'إعدادات الملف الشخصي'),
(132, 'Change language', '', 'غير اللغة'),
(133, 'Manage Language', '', 'إدارة اللغة'),
(134, 'Option', '', 'اختيار'),
(135, 'Total Ground', '', 'مجموع الأرضي'),
(136, 'Total Team', '', 'مجموع الفرق'),
(137, 'Total Booking', '', 'إجمالي الحجز'),
(138, 'Total Players', '', 'مجموع اللاعبين'),
(139, 'Top Rating Player List', '', 'قائمة أفضل اللاعبين'),
(140, 'Total Tournament', '', 'مجموع البطولة'),
(141, 'Dashboard', '', 'لوحة القيادة'),
(142, 'Tournament Details', '', 'تفاصيل البطولة'),
(143, 'Reviews & Ratings', '', 'الآراء و التقييمات'),
(144, 'Players', '', 'اللاعبين'),
(145, 'Team', '', 'الفريق'),
(146, 'Ground', '', 'الملعب'),
(147, 'Add Ground', '', 'إضافة ملعب'),
(148, 'Ground List', '', 'قائمة الملعب'),
(149, 'Ground Size/Price', '', 'حجم/سعر الملعب'),
(150, 'Add Size/Price', '', 'إضافة الحجم / السعر'),
(151, ' Size/Price List', '', 'قائمة السعر/الحجم'),
(152, 'Add Facility', '', 'إضافة مرافق'),
(153, ' Facility List', '', ' قائمة المرافق'),
(154, 'Booking Tournament List', '', 'قائمة حجوزات البطولة'),
(155, 'Tournament Awards', '', 'جوائز البطولة'),
(156, 'Add Awards', '', 'إضافة جوائز'),
(157, ' Awards List', '', ' قائمة الجوائز'),
(158, 'Booking', '', 'الحجز'),
(159, 'Booking List', '', 'قائمة الحجز'),
(160, 'Booking Calendar', '', 'قائمة الحجوزات'),
(161, 'Payments', '', 'المدفوعات'),
(162, 'Payments List', '', 'قائمة المدفوعات'),
(163, 'Reports List', '', 'قائمة التقارير'),
(164, 'Settings', '', 'الإعدادات'),
(165, 'Language Settings', '', 'اعدادات اللغة'),
(166, 'Admin', '', 'مشرف'),
(167, 'Edit Profile', '', 'تعديل الملف الشخصي'),
(168, 'Logout', '', 'الخروج'),
(169, 'Admin Profile', '', 'ملف تعريف المسؤول'),
(170, 'Image', '', 'صورة'),
(171, 'Change Password', '', 'غير كلمة السر'),
(172, 'Old Password', '', 'كلمة المرور القديمة'),
(173, 'New Password', '', 'كلمة السر الجديدة'),
(174, 'Confirm Password', '', 'تأكيد كلمة المرور'),
(175, 'Profile', '', 'الملف الشخصي'),
(176, 'Enter your Mail', '', 'أدخل البريد الخاص بك'),
(177, 'Password', '', 'كلمه السر'),
(178, 'Enter your User Name', '', ' اسم المستخدم'),
(179, 'Enter User Email', '', ' البريد الإلكتروني '),
(180, 'Mobile Number', '', 'رقم الهاتف '),
(181, 'Landline Number', '', 'رقم الهاتف الثابت'),
(182, 'Address', '', 'عنوان'),
(183, 'Area', '', 'منطقة'),
(184, 'City', '', 'مدينة'),
(185, 'Zip', '', 'الرمز البريدي'),
(186, 'No file chosen', '', 'لم تقم باختيار ملف'),
(187, 'Search', '', 'بحث'),
(188, 'S.NO', '', 'لا'),
(189, 'User Name', '', 'اسم المستخدم'),
(190, 'Profile Image', '', 'صورة البروفيل'),
(191, 'Status', '', 'الحالة'),
(192, 'Actions', '', 'أفعال'),
(193, 'entries', '', 'إدخالات'),
(194, 'Showing', '', 'عرض'),
(195, 'Previous', '', 'سابق'),
(196, 'Next', '', 'التالى'),
(197, 'Close', '', 'اغلاق'),
(198, 'Delete', '', 'حذف'),
(199, 'Player Name', '', 'اسم اللاعب'),
(200, 'Email', '', 'البريد الإلكتروني'),
(201, 'Contact', '', 'اتصل'),
(202, 'Player Image', '', 'لاعب صورة'),
(203, 'Team Size', '', 'حجم الفريق'),
(204, 'Team Name', '', 'اسم الفريق'),
(205, 'Team Captain', '', 'كابتن الفريق'),
(206, 'Team Logo', '', 'شعار الفريق'),
(207, 'Enter your Team name', '', ' اسم فريقك'),
(208, 'Enter Team email', '', ' بريدك فريق'),
(209, 'Phone Number', '', 'رقم الهاتف'),
(210, 'Enter The Team Slogon', '', 'أدخل شعار الفريق'),
(211, 'Enter your Ground name', '', 'أدخل اسم الميدان الخاص بك'),
(212, 'Enter Location', '', 'إدخال الدولة'),
(213, 'Enter City ', '', ' مدينة'),
(214, 'Enter Phone number', '', ' رقم الهاتف'),
(215, 'Enter your Ground Description', '', 'أدخل الوصف الأرضي'),
(216, 'Enter SL Commission Rate', '', 'أدخل SL تقييم اللجنة'),
(217, 'Available Pitches', '', 'الراتنجات المتاحة'),
(218, 'Contact Number', '', 'رقم الاتصال'),
(219, 'Ground Name', '', 'اسم الأرض'),
(220, 'Enter a Ground Sq Ft', '', 'أدخل قدم مربع الأرضي'),
(221, 'Enter a Ground Price', '', 'أدخل الأسعار الأرضي'),
(222, 'Enter a Discount', '', 'أدخل الخصم'),
(223, 'Enter a Upto Players', '', 'إدخال اللاعبين تصل'),
(224, 'Size', '', 'بحجم'),
(225, 'Enter your Ground Facility', '', 'أدخل مرفق الأرضي الخاص بك'),
(226, 'Facility Name', '', 'إسم المنشأة'),
(227, 'Enter Tournament name', '', 'أدخل اسم البطولة'),
(228, 'Tournament City', '', 'البطولة سيتي'),
(229, 'Team Limit', '', 'الحد الفريق'),
(230, 'Team Player Limit', '', 'فريق لاعب الحد'),
(231, 'Enter The Reg Fees', '', 'ادخل رسوم ريج'),
(232, 'Enter The Winner Price Amount', '', 'أدخل الفائز الأسعار المبلغ'),
(233, 'Enter The Runner Price Amount', '', 'ادخل عداء الأسعار المبلغ'),
(234, 'Enter a Groups', '', 'أدخل المجموعات'),
(235, 'Enter a Match Number', '', 'أدخل الرقم المباراة'),
(236, 'Enter a Match Time', '', 'أدخل وقت المباراة'),
(237, 'Enter your Award Name', '', 'أدخل اسم جائزة الخاص بك'),
(238, 'csv', '', 'ملف CSV'),
(239, 'SNO', '', 'لا'),
(240, 'Reliantech', '', 'Reliantech'),
(241, 'Academic', '', 'أكاديمي'),
(243, 'Street League', '', 'شارع الدوري'),
(244, 'Club', '', 'النادي'),
(245, 'Add Booking', '', 'إضافة الحجز'),
(246, 'Price (AED)', '', 'السعر (درهم)'),
(247, 'Grounds', '', 'أرض'),
(248, 'Owner Name', '', 'اسم المالك'),
(249, 'Map', '', 'خريطة'),
(250, 'Active', '', 'نشيط'),
(251, 'In Active', '', 'غير نشط'),
(252, 'Edit Ground Owner', '', 'تحرير مالك الأرض'),
(253, 'Delete Confirm', '', 'حذف تأكيد'),
(254, 'Are You Sure To Delete...?', '', 'هل انت متأكد من الحذف...؟'),
(255, ' Contact Number', '', 'رقم الاتصال'),
(256, 'In Year Of Active', '', 'في سنة نشطة'),
(257, 'SL Commission', '', 'SL عمولة'),
(258, 'Select Ground Owner', '', 'حدد مالك الأرض'),
(259, 'Picture', '', 'صورة'),
(260, 'Ground Description', '', 'وصف الأرض'),
(261, 'Select Ground Name', '', 'حدد اسم الأرض'),
(262, 'Select Size', '', 'أختر الحجم'),
(263, 'Ground Sq Ft', '', 'قدم مربع قدم'),
(264, 'Ground Size/Price', '', 'حجم الأرض / السعر'),
(265, 'Size/Price List', '', 'حجم / قائمة الأسعار'),
(266, 'Sq ft', '', 'قدم مربع'),
(267, 'Discount', '', 'خصم'),
(268, 'Edit Ground Size', '', 'تحرير حجم الأرض'),
(269, 'Water', '', 'ماء'),
(270, 'Jersy', '', 'جيرسي'),
(271, 'Rest Room', '', 'غرفة الاستراحة'),
(272, 'sauna', '', 'ساونا'),
(273, 'Team Players Limit', '', 'فريق اللاعبين الحد'),
(274, 'Select Type', '', 'اختر صنف'),
(275, 'Edit Tournament', '', 'تحرير البطولة'),
(276, 'Tournament Form', '', 'شكل البطولة'),
(277, 'Tournament Booking', '', 'حجز البطولة'),
(278, 'Tournament Name', '', 'اسم البطولة'),
(279, 'Limit', '', 'حد'),
(280, 'Booked', '', 'حجز'),
(281, 'Pending', '', 'قيد الانتظار'),
(282, 'Action', '', 'عمل'),
(283, 'Book', '', 'كتاب'),
(284, 'Schedule', '', 'جدول'),
(285, 'Points', '', 'نقاط'),
(286, 'Bracket', '', 'قوس'),
(287, 'Book Tournament', '', 'كتاب البطولة'),
(288, 'Booking Team', '', 'فريق الحجز'),
(289, 'Add Award', '', 'إضافة جائزة'),
(290, 'Award', '', 'جائزة'),
(291, 'Awards List', '', 'قائمة الجوائز'),
(292, 'Edit Awards', '', 'تحرير الجوائز'),
(293, 'Booking Ground', '', 'الحجز الأرض'),
(294, 'Booking City', '', 'مدينة الحجز'),
(295, 'Status', '', 'الحالة'),
(296, 'Cancel Booking', '', 'إلغاء الحجز'),
(297, 'Cancelled', '', 'ألغيت'),
(298, 'Booking Type', '', 'نوع الحجز'),
(299, 'Select Booking Type', '', 'اختر نوع الحجز'),
(300, 'Select Payment Mode', '', 'حدد طريقة الدفع'),
(301, 'Player Number', '', 'رقم اللاعب'),
(302, 'Booking Date ', '', 'تاريخ الحجز'),
(303, 'Cash', '', 'السيولة النقدية'),
(304, 'Card', '', 'بطاقة'),
(305, 'ground owner amount', '', 'مبلغ مالك الأرض'),
(306, 'View', '', 'رأي'),
(307, 'Payment', '', 'دفع'),
(308, 'Report', '', 'أبلغ عن'),
(309, 'Generate Report', '', 'توليد تقرير'),
(310, 'Amount', '', 'كمية'),
(311, 'Date', '', 'تاريخ'),
(312, 'Mode', '', 'الوضع'),
(313, 'Approval Status', '', 'حالة القبول'),
(314, 'Profile Setting', '', 'إعداد الملف الشخصي'),
(315, 'Select Language', '', 'اختار اللغة'),
(316, 'Report List', '', 'قائمة التقارير'),
(317, 'Congratulation', '', 'تهنئة'),
(318, 'You have got a new badge', '', 'لديك شارة جديدة'),
(319, 'Edit Phrase', '', 'تحرير العبارة'),
(320, 'Language List', '', 'قائمة اللغات'),
(321, 'Add Phrase', '', 'أضف عبارة'),
(322, 'English', '', 'الإنجليزية'),
(323, 'Arabic', '', 'عربى'),
(324, 'Last Name', '', 'الكنية'),
(325, 'Rating', '', 'تقييم'),
(326, 'Phrase', '', 'العبارة'),
(327, 'Register', '', 'تسجيل'),
(328, 'Latitude', '', 'خط العرض'),
(329, 'Ground Availablity', '', 'توافر الأرض'),
(330, 'Tournament Register Fees', '', 'رسوم تسجيل البطولة'),
(331, 'Register Last Date', '', 'سجل آخر موعد'),
(332, 'Tournament Limit', '', 'حد البطولة'),
(333, 'Player', '', 'لاعب'),
(334, 'Booking Payment', '', 'دفع الحجز'),
(335, 'Booking Approval', '', ''),
(336, 'Booking Time', '', 'وقت الحجز'),
(337, 'Payment Date', '', 'موعد الدفع'),
(338, 'Payment Amount', '', 'مبلغ الدفع'),
(339, 'Payment Status', '', 'حالة السداد'),
(341, ' Delete Image', '', 'حذف صورة'),
(342, 'Booking Date', '', 'تاريخ الحجز'),
(343, 'Edit Booking', '', 'تحرير الحجز'),
(344, 'On Line', '', 'عبر الانترنت'),
(345, 'Off Line', '', 'غير متصل على الانترنت'),
(346, 'Paid', '', 'دفع'),
(347, 'Un Paid', '', 'غير مدفوعة'),
(349, 'Edit Ground', '', 'تحرير الأرض'),
(350, 'Edit Facility', '', 'تحرير مرفق'),
(351, 'Register Teams', '', 'تسجيل الفرق'),
(352, 'Remaining', '', 'متبق'),
(353, 'Select Ground Size', '', 'حدد حجم الأرض'),
(354, 'Select Tournament Name', '', 'اختر اسم البطولة'),
(355, 'Select Team A Name', '', 'اختر اسم الفريق'),
(356, 'Select Team B Name', '', 'اختر اسم الفريق'),
(357, 'Remove', '', 'إزالة'),
(358, 'WON', '', 'وون'),
(359, 'Edit', '', 'تصحيح'),
(360, 'Matches', '', 'اعواد الكبريت'),
(361, 'Qualifiers', '', 'تصفيات'),
(362, 'semifinals', '', 'الدور نصف النهائي'),
(363, 'Final', '', 'نهائي'),
(364, ' Contact Number', '', ''),
(365, 'Tournaments', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `logo_settings`
--

CREATE TABLE `logo_settings` (
  `id` int(11) NOT NULL,
  `logo_image` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo_settings`
--

INSERT INTO `logo_settings` (`id`, `logo_image`, `created_at`) VALUES
(1, '8826874.png', '2019-07-16 04:32:38');

-- --------------------------------------------------------

--
-- Table structure for table `otp_expiry`
--

CREATE TABLE `otp_expiry` (
  `id` int(11) NOT NULL,
  `otp` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `is_expired` int(11) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `otp_expiry`
--

INSERT INTO `otp_expiry` (`id`, `otp`, `is_expired`, `create_at`) VALUES
(1, '2742', 1, '2019-07-23 10:58:07'),
(2, '7507', 0, '2019-07-25 10:55:37'),
(3, '2274', 1, '2019-07-25 10:57:47'),
(4, '6565', 0, '2019-07-25 12:14:12'),
(5, '5646', 1, '2019-07-25 12:17:26'),
(6, '7197', 1, '2019-07-26 11:27:34'),
(7, '5779', 1, '2019-07-30 09:12:56'),
(8, '9066', 0, '2019-07-30 11:01:40'),
(9, '2970', 1, '2019-07-30 13:05:42'),
(10, '9069', 0, '2019-08-14 09:52:21'),
(11, '5205', 0, '2019-08-14 09:53:13'),
(12, '9957', 1, '2019-08-20 06:17:40'),
(13, '2071', 1, '2019-08-20 06:20:50'),
(14, '2621', 1, '2019-08-20 06:32:09'),
(15, '9182', 1, '2019-08-22 12:05:24'),
(16, '1663', 0, '2019-11-11 18:26:32'),
(17, '9247', 1, '2019-11-11 18:27:51'),
(18, '8081', 1, '2019-11-12 08:05:41'),
(19, '7979', 0, '2019-11-12 08:06:36'),
(20, '5425', 0, '2019-11-12 08:32:15'),
(21, '9231', 0, '2019-11-12 08:36:01'),
(22, '3990', 0, '2019-11-14 14:25:48'),
(23, '1317', 1, '2019-11-14 14:36:00'),
(24, '3226', 1, '2019-11-18 12:10:43'),
(25, '7993', 1, '2019-11-18 12:36:46'),
(26, '7416', 1, '2019-11-18 12:41:56'),
(27, '1149', 1, '2019-11-21 16:03:56'),
(28, '8118', 1, '2019-11-21 16:06:53'),
(29, '3032', 1, '2019-11-22 10:12:20'),
(30, '2101', 1, '2019-11-23 18:38:27'),
(31, '9375', 1, '2019-11-27 10:34:37'),
(32, '2632', 1, '2019-11-27 10:49:11'),
(33, '1500', 0, '2020-02-01 20:45:39'),
(34, '6809', 1, '2020-02-07 18:59:48'),
(35, '3141', 1, '2020-02-22 14:49:31'),
(36, '4419', 1, '2020-02-23 19:57:01'),
(37, '3902', 0, '2020-02-24 08:45:22'),
(38, '6106', 0, '2020-02-24 08:49:41'),
(39, '3285', 0, '2020-02-28 18:56:43'),
(40, '5965', 0, '2020-02-29 18:34:50'),
(41, '2426', 0, '2020-02-29 18:38:52'),
(42, '2772', 0, '2020-02-29 18:39:33'),
(43, '8735', 1, '2020-03-11 07:48:46'),
(44, '3871', 0, '2020-03-11 07:49:46'),
(45, '1648', 1, '2020-03-11 07:53:07'),
(46, '7323', 0, '2020-03-11 07:53:48');

-- --------------------------------------------------------

--
-- Table structure for table `payment_gateway_settings`
--

CREATE TABLE `payment_gateway_settings` (
  `id` int(11) NOT NULL,
  `working_key` varchar(256) DEFAULT NULL,
  `access_code` varchar(256) DEFAULT NULL,
  `merchant_id` varchar(256) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_gateway_settings`
--

INSERT INTO `payment_gateway_settings` (`id`, `working_key`, `access_code`, `merchant_id`, `updated_at`) VALUES
(1, '778EF617D020B0772EA2478A1762C9F0', 'AVXH03GG04AO67HXOA', '45524', '2019-08-19 13:00:07');

-- --------------------------------------------------------

--
-- Table structure for table `player_review_rating`
--

CREATE TABLE `player_review_rating` (
  `id` int(11) NOT NULL,
  `player_id` int(25) DEFAULT NULL,
  `given_player_id` int(25) DEFAULT NULL,
  `review` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `rating` int(25) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0->Active,2->InActive',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player_review_rating`
--

INSERT INTO `player_review_rating` (`id`, `player_id`, `given_player_id`, `review`, `rating`, `status`, `created_at`) VALUES
(1, 2, 8, 'Good', 5, 1, '2019-08-23 06:59:15'),
(2, 2, 1, 'Good', 4, 1, '2019-09-09 05:02:48'),
(4, 2, NULL, NULL, NULL, 1, '2019-09-09 06:44:22'),
(5, 34, 34, 'ـ', 5, 1, '2019-11-29 12:53:26'),
(6, 34, 34, 'ًًـ', 5, 1, '2019-11-30 15:13:14'),
(7, 39, 34, 'من أفضل الفرق في ابوظبي ', 5, 1, '2019-12-03 15:40:46'),
(8, 267, 267, 'Good team ', 5, 1, '2020-03-03 00:21:48');

-- --------------------------------------------------------

--
-- Table structure for table `sleague_bookings`
--

CREATE TABLE `sleague_bookings` (
  `booking_id` int(11) NOT NULL,
  `booking_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `book_code` int(11) DEFAULT NULL,
  `booking_ground` int(11) DEFAULT NULL,
  `booking_groundcity` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `booking_ground_size` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `booking_team` int(11) DEFAULT NULL,
  `booking_tour_id` int(11) DEFAULT NULL,
  `booking_player` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `booking_player_number` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `player_name` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `booking_sdate` date DEFAULT NULL,
  `booking_time` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `booking_paymenttype` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `booking_type` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `booking_amount` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `booking_approval` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `who_cancelled` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cancel_date` date DEFAULT NULL,
  `cancel_time` time DEFAULT NULL,
  `cancel_reason` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `booking_status` int(11) DEFAULT '0',
  `payment_status` int(10) DEFAULT '2' COMMENT '1->Paid,2->Un Paid',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sleague_bookings`
--

INSERT INTO `sleague_bookings` (`booking_id`, `booking_code`, `book_code`, `booking_ground`, `booking_groundcity`, `booking_ground_size`, `booking_team`, `booking_tour_id`, `booking_player`, `booking_player_number`, `player_name`, `booking_sdate`, `booking_time`, `booking_paymenttype`, `booking_type`, `booking_amount`, `booking_approval`, `who_cancelled`, `cancel_date`, `cancel_time`, `cancel_reason`, `booking_status`, `payment_status`, `created_at`, `updated_at`) VALUES
(2, 'SL-1001', 1001, 3, 'Fujairah', '3', 0, NULL, '1', NULL, NULL, '2019-08-18', '23:00', 'cash', 'App', '90', '1', 'Player', '1970-01-01', '14:51:00', NULL, 0, 1, '2019-08-17 14:43:05', '2019-08-19 12:09:34'),
(6, 'SL-1004', 1004, 3, 'Fujairah', '3', NULL, NULL, NULL, '8341774432', 'Vasan', '2019-08-20', '15:00,15:30,16:00', 'cash', 'Street League', '270', '0', NULL, NULL, NULL, NULL, 0, 2, '2019-08-19 17:24:19', '2019-08-19 11:54:19'),
(9, 'SL-1007', 1007, 3, 'Fujairah', '3', 0, NULL, '3', NULL, NULL, '2019-08-21', '18:30', 'card', 'App', '90', '0', NULL, NULL, NULL, NULL, 0, 2, '2019-08-19 18:35:17', '2019-08-19 13:05:17'),
(10, 'SL-1008', 1008, 4, 'Sharjah', '4', 0, NULL, '1', NULL, NULL, '2019-08-20', '12:00', 'cash', 'App', '90', '1', 'Player', '1970-01-01', '14:14:00', NULL, 0, 2, '2019-08-20 14:05:36', '2019-08-20 08:44:11'),
(11, 'SL-1009', 1009, 3, 'Fujairah', '3', 0, NULL, '3', NULL, NULL, '2019-08-21', '16:00,16:30', 'card', 'App', '180', '0', NULL, NULL, NULL, NULL, 0, 2, '2019-08-20 14:37:41', '2019-08-20 09:07:41'),
(13, 'SL-1010', 1010, 3, 'Fujairah', '3', 1, NULL, '1', NULL, NULL, '2019-08-22', '16:00', 'cash', 'App', '90', '0', NULL, NULL, NULL, NULL, 0, 2, '2019-08-21 17:14:27', '2019-08-21 11:44:27'),
(14, 'SL-1011', 1011, 4, 'Sharjah', '4', 1, NULL, '1', NULL, NULL, '2019-08-21', '12:00', 'cash', 'App', '90', '0', NULL, NULL, NULL, NULL, 0, 2, '2019-08-21 17:17:01', '2019-08-21 11:47:01'),
(15, 'SL-1012', 1012, 2, 'Fujairah', '2', 3, NULL, '3', NULL, NULL, '2019-08-22', '09:30,10:00', 'card', 'App', '130', '0', NULL, NULL, NULL, NULL, 0, 2, '2019-08-22 18:04:56', '2019-08-22 12:34:56'),
(16, 'SL-1013', 1013, 10, NULL, '5', NULL, 2, NULL, NULL, NULL, '2019-09-10', '02:52,03:22', NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-09-09 07:36:43'),
(17, 'SL-1014', 1014, 2, 'Fujairah', '2', 0, NULL, '13', NULL, NULL, '2019-09-12', '22:00,22:30,23:00,23:30', 'card', 'App', '260', '0', NULL, NULL, NULL, NULL, 0, 2, '2019-09-12 21:33:57', '2019-09-12 16:03:57'),
(18, 'SL-1015', 1015, 2, 'Fujairah', '2', 27, NULL, '1', NULL, NULL, '2019-09-28', '09:00', 'cash', 'App', '65', '1', 'Player', '1970-01-01', '17:41:00', NULL, 0, 2, '2019-09-26 17:39:16', '2019-09-26 12:11:14'),
(19, 'SL-1016', 1016, 2, 'Fujairah', '2', 27, NULL, '8', NULL, NULL, '2019-10-01', '09:00,17:30,18:00', 'cash', 'App', '195', '0', NULL, NULL, NULL, NULL, 0, 2, '2019-09-30 14:22:02', '2019-09-30 08:52:02'),
(20, 'SL-1017', 1017, 2, 'Fujairah', '2', 0, NULL, '18', NULL, NULL, '2019-10-14', '10:00,10:30', 'card', 'App', '130', '0', NULL, NULL, NULL, NULL, 0, 2, '2019-10-12 01:34:42', '2019-10-11 20:04:42'),
(21, 'SL-1018', 1018, 2, 'Fujairah', '2', 0, NULL, '1', NULL, NULL, '2019-10-16', '23:30', NULL, 'App', '65', '0', NULL, NULL, NULL, NULL, 0, 2, '2019-10-16 12:39:05', '2019-10-16 07:09:05'),
(22, 'SL-1019', 1019, 2, 'Fujairah', '2', 29, NULL, '8', NULL, NULL, '2019-10-16', '21:30', NULL, 'App', '65', '0', NULL, NULL, NULL, NULL, 0, 2, '2019-10-16 12:39:08', '2019-10-16 07:09:08'),
(23, 'SL-1020', 1020, 2, 'Fujairah', '2', 30, NULL, '2', NULL, NULL, '2019-10-16', '19:00', NULL, 'App', '65', '0', NULL, NULL, NULL, NULL, 0, 2, '2019-10-16 12:40:00', '2019-10-16 07:10:00'),
(24, 'SL-1021', 1021, 2, 'Fujairah', '2', 30, NULL, '2', NULL, NULL, '2019-10-16', '23:00', 'card', 'App', '65', '0', NULL, NULL, NULL, NULL, 0, 2, '2019-10-16 13:10:52', '2019-10-16 07:40:52'),
(25, 'SL-1022', 1022, 2, 'Fujairah', '2', 30, NULL, '2', NULL, NULL, '2019-10-16', '22:00', 'cash', 'App', '65', '0', NULL, NULL, NULL, NULL, 0, 2, '2019-10-16 13:14:56', '2019-10-16 07:44:56'),
(26, 'SL-1023', 1023, 3, NULL, '3', NULL, 1, NULL, NULL, NULL, '2019-11-07', '15:00,15:30,16:00,16:30', NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-11-06 07:23:13'),
(27, 'SL-1024', 1024, 3, NULL, '3', NULL, 1, NULL, NULL, NULL, '2019-11-08', '22:00,22:30,23:00,23:30', NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-11-06 10:27:59'),
(28, 'SL-1025', 1025, 3, NULL, '3', NULL, 1, NULL, NULL, NULL, '2019-11-10', '20:30,21:00,21:30,22:00', NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-11-07 07:16:14'),
(29, 'SL-1026', 1026, 3, NULL, '3', NULL, 1, NULL, NULL, NULL, '2019-11-22', '19:00,19:30,20:00,20:30,21:00', NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-11-21 10:14:06'),
(30, 'SL-1027', 1027, 3, NULL, '3', NULL, 1, NULL, NULL, NULL, '2019-11-24', '18:00,18:30,19:00,19:30,20:00', NULL, 'Tournament', NULL, '1', 'Admin', '2019-11-21', '16:14:00', 'no', 0, 0, '0000-00-00 00:00:00', '2019-11-21 10:44:02'),
(31, 'SL-1028', 1028, 3, NULL, '3', NULL, 1, NULL, NULL, NULL, '2019-11-22', '18:00,18:30,19:00,19:30,20:00,20:30,21:00', NULL, 'Tournament', NULL, '1', 'Admin', '2019-11-21', '16:12:00', 'Game Cancelled', 0, 0, '0000-00-00 00:00:00', '2019-11-21 10:42:42'),
(33, 'SL-1029', 1029, 13, 'Abu Dhabi', '7', NULL, NULL, NULL, '0554838092', 'Abdullah', '2019-11-30', '21:00,21:30,22:00', 'cash', 'Club', '360', '0', NULL, NULL, NULL, NULL, 0, 2, '2019-11-30 21:41:07', '2019-11-30 16:11:07'),
(34, 'SL-1030', 1030, 13, 'Abu Dhabi', '7', 3, NULL, '3', NULL, NULL, '2019-11-30', '22:30,23:00', 'card', 'App', '240', '0', NULL, NULL, NULL, NULL, 0, 2, '2019-11-30 21:43:49', '2019-11-30 16:13:49'),
(37, 'SL-1031', 1031, 2, NULL, '2', NULL, 6, NULL, NULL, NULL, '2019-12-06', '10:30,11:00', NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-11-30 17:20:40'),
(39, 'SL-1032', 1032, 13, NULL, '7', NULL, 5, NULL, NULL, NULL, '2019-12-02', '10:00', NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-01 19:19:30'),
(40, 'SL-1033', 1033, 13, NULL, '7', NULL, 5, NULL, NULL, NULL, '2019-12-02', '10:00', NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-01 19:19:30'),
(41, 'SL-1034', 1034, 13, NULL, '7', NULL, 5, NULL, NULL, NULL, '2019-12-02', NULL, NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-01 19:21:01'),
(42, 'SL-1035', 1035, 13, NULL, '7', NULL, 5, NULL, NULL, NULL, '2019-12-02', NULL, NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-01 19:25:07'),
(43, 'SL-1036', 1036, 13, NULL, '11', NULL, 5, NULL, NULL, NULL, '2019-12-02', '10:30', NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-01 19:36:36'),
(44, 'SL-1037', 1037, 13, NULL, '7', NULL, 5, NULL, NULL, NULL, '2019-12-02', '10:30', NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-01 19:36:36'),
(45, 'SL-1038', 1038, 13, NULL, '12', NULL, 5, NULL, NULL, NULL, '2019-12-02', '10:30', NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-01 19:37:51'),
(46, 'SL-1039', 1039, 13, NULL, '13', NULL, 5, NULL, NULL, NULL, '2019-12-02', '10:30', NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-01 19:38:56'),
(47, 'SL-1040', 1040, 13, NULL, '7', NULL, 5, NULL, NULL, NULL, '2019-12-02', '11:00', NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-01 19:40:07'),
(48, 'SL-1041', 1041, 13, NULL, '11', NULL, 5, NULL, NULL, NULL, '2019-12-02', '11:00', NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-01 19:41:08'),
(49, 'SL-1042', 1042, 13, NULL, '12', NULL, 5, NULL, NULL, NULL, '2019-12-02', '11:00', NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-01 19:42:10'),
(50, 'SL-1043', 1043, 13, NULL, '13', NULL, 5, NULL, NULL, NULL, '2019-12-02', NULL, NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-01 19:42:55'),
(51, 'SL-1044', 1044, 13, NULL, '7', NULL, 5, NULL, NULL, NULL, '2019-12-02', '11:30', NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-01 19:44:32'),
(52, 'SL-1045', 1045, 13, NULL, '11', NULL, 5, NULL, NULL, NULL, '2019-12-02', '11:30', NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-01 19:45:36'),
(53, 'SL-1046', 1046, 13, NULL, '12', NULL, 5, NULL, NULL, NULL, '2019-12-02', '11:30', NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-01 19:46:36'),
(54, 'SL-1047', 1047, 13, NULL, '13', NULL, 5, NULL, NULL, NULL, '2019-12-02', '11:30', NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-01 19:47:32'),
(55, 'SL-1048', 1048, 13, NULL, '7', NULL, 5, NULL, NULL, NULL, '2019-12-02', '12:00', NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-01 19:58:28'),
(56, 'SL-1049', 1049, 13, NULL, '11', NULL, 5, NULL, NULL, NULL, '2019-12-02', NULL, NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-01 20:06:12'),
(57, 'SL-1050', 1050, 13, NULL, '12', NULL, 5, NULL, NULL, NULL, '2019-12-02', '12:00', NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-01 20:08:47'),
(58, 'SL-1051', 1051, 13, NULL, '7', NULL, 5, NULL, NULL, NULL, '2019-12-02', '12:30', NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-01 20:19:37'),
(59, 'SL-1052', 1052, 13, NULL, '11', NULL, 5, NULL, NULL, NULL, '2019-12-02', '12:30', NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-01 20:20:46'),
(60, 'SL-1053', 1053, 13, NULL, '12', NULL, 5, NULL, NULL, NULL, '2019-12-02', NULL, NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-01 20:21:49'),
(61, 'SL-1054', 1054, 13, NULL, '12', NULL, 5, NULL, NULL, NULL, '2019-12-02', '12:30', NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-01 20:23:31'),
(62, 'SL-1055', 1055, 13, NULL, '13', NULL, 5, NULL, NULL, NULL, '2019-12-02', NULL, NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-01 20:24:35'),
(63, 'SL-1056', 1056, 13, NULL, '7', NULL, 5, NULL, NULL, NULL, '2019-12-02', '13:00', NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-01 20:30:27'),
(64, 'SL-1057', 1057, 13, NULL, '12', NULL, 5, NULL, NULL, NULL, '2019-12-02', NULL, NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-01 20:32:44'),
(65, 'SL-1058', 1058, 13, NULL, '11', NULL, 5, NULL, NULL, NULL, '2019-12-02', '13:00', NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-01 20:32:44'),
(66, 'SL-1059', 1059, 13, NULL, '13', NULL, 5, NULL, NULL, NULL, '2019-12-02', '13:00', NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-01 20:34:10'),
(67, 'SL-1060', 1060, 13, NULL, '7', NULL, 5, NULL, NULL, NULL, '2019-12-02', '13:30', NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-01 20:35:16'),
(68, 'SL-1061', 1061, 13, NULL, '12', NULL, 5, NULL, NULL, NULL, '2019-12-02', '13:30', NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-01 20:36:06'),
(69, 'SL-1062', 1062, 3, NULL, '3', NULL, 6, NULL, NULL, NULL, '2019-12-17', '15:00,15:30,16:00,16:30', NULL, 'Tournament', NULL, '0', NULL, NULL, NULL, NULL, 0, 0, '0000-00-00 00:00:00', '2019-12-14 08:00:47'),
(70, 'SL-1063', 1063, 17, 'Dubai', '10', 0, NULL, '78', NULL, NULL, '2019-12-18', '18:00,18:30,19:00,19:30,20:00,20:30,21:00,21:30,22:00,22:30,23:00,23:30', 'cash', 'App', '1800', '1', 'Player', '1970-01-01', '08:48:00', NULL, 0, 2, '2019-12-17 10:12:11', '2019-12-17 04:48:47'),
(71, 'SL-1064', 1064, 17, 'Dubai', '10', 0, NULL, '78', NULL, NULL, '2019-12-18', '07:00,07:30,08:00,08:30,09:00,09:30,10:00,10:30,11:00,11:30,12:00,12:30,13:00,13:30,14:30,15:00,15:30,16:00,14:00,17:00,16:30,17:30,18:30,18:00,19:00,19:30,20:00,20:30,21:00,21:30,22:00,22:30,23:00,23:30', 'cash', 'App', '5100', '0', NULL, NULL, NULL, NULL, 0, 2, '2019-12-17 10:16:16', '2019-12-17 04:46:16'),
(72, 'SL-1065', 1065, 17, 'Dubai', '10', 0, NULL, '84', NULL, NULL, '2020-01-02', '20:00,21:00', 'card', 'App', '300', '0', NULL, NULL, NULL, NULL, 0, 2, '2019-12-25 16:39:00', '2019-12-25 11:09:00'),
(73, 'SL-1066', 1066, 13, 'Abu Dhabi', '7', 29, NULL, '8', NULL, NULL, '2019-12-30', '20:00', 'card', 'App', '120', '0', NULL, NULL, NULL, NULL, 0, 2, '2019-12-27 02:44:33', '2019-12-26 21:14:33'),
(74, 'SL-1067', 1067, 13, 'Abu Dhabi', '7', 29, NULL, '8', NULL, NULL, '2020-01-07', '16:00', 'cash', 'App', '120', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-01-06 11:52:19', '2020-01-06 06:22:19'),
(87, 'SL-1068', 1068, 19, 'Abu Dhabi', '14', 30, NULL, '2', NULL, NULL, '2020-01-13', '10:00', 'card', 'App', '96', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-01-14 01:40:58', '2020-01-13 20:10:58'),
(89, 'SL-1070', 1070, 13, 'Abu Dhabi', '7', 77, NULL, '107', NULL, NULL, '2020-01-14', '18:30', 'card', 'App', '120', '0', NULL, NULL, NULL, NULL, 0, 1, '2020-01-14 08:26:15', '2020-01-14 02:58:07'),
(90, 'SL-1071', 1071, 13, 'Abu Dhabi', '7', 77, NULL, '107', NULL, NULL, '2020-01-15', '19:00', 'card', 'App', '120', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-01-15 10:49:16', '2020-01-15 05:19:16'),
(93, 'SL-1074', 1074, 19, 'Abu Dhabi', '14', 0, NULL, '90', NULL, NULL, '2020-01-18', '20:00', 'cash', 'App', '96', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-01-18 16:24:14', '2020-01-18 10:54:14'),
(94, 'SL-1075', 1075, 19, 'Abu Dhabi', '14', 0, NULL, '90', NULL, NULL, '2020-01-19', '19:00', 'card', 'App', '96', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-01-18 16:26:22', '2020-01-18 10:56:22'),
(95, 'SL-1076', 1076, 19, 'Abu Dhabi', '14', 0, NULL, '90', NULL, NULL, '2020-01-19', '19:00', 'cash', 'App', '96', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-01-18 16:26:51', '2020-01-18 10:56:51'),
(96, 'SL-1077', 1077, 19, 'Abu Dhabi', '14', NULL, NULL, NULL, '0509999999', 'ALDHAFRA SPORT CLUBE', '2020-01-22', '18:00,18:30', 'cash', 'Club', '260', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-01-21 21:15:12', '2020-01-21 15:45:12'),
(97, 'SL-1078', 1078, 22, 'Abu Dhabi', '27', 0, NULL, '131', NULL, NULL, '2020-02-01', '21:00', 'cash', 'App', '230', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-02 02:53:28', '2020-02-01 21:23:28'),
(98, 'SL-1079', 1079, 23, 'Abu Dhabi', '31', 0, NULL, '131', NULL, NULL, '2020-02-03', '12:00,11:30,11:00', NULL, 'App', '712.5', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-03 19:21:35', '2020-02-03 13:51:35'),
(101, 'SL-1080', 1080, 19, 'Abu Dhabi', '20', 0, NULL, '131', NULL, NULL, '2020-02-04', '19:00', 'cash', 'App', '130', '1', 'Player', '2020-04-02', '19:27:00', NULL, 0, 2, '2020-02-04 17:10:40', '2020-02-04 15:27:51'),
(102, 'SL-1081', 1081, 13, 'Abu Dhabi', '13', 0, NULL, '131', NULL, NULL, '2020-02-04', '18:30', 'cash', 'App', '120', '1', 'Player', '2020-04-02', '19:27:00', NULL, 0, 2, '2020-02-04 17:13:43', '2020-02-04 15:27:48'),
(103, 'SL-1082', 1082, 13, 'Abu Dhabi', '13', 0, NULL, '131', NULL, NULL, '2020-02-04', '19:00', 'cash', 'App', '120', '1', 'Player', '2020-04-02', '19:27:00', NULL, 0, 2, '2020-02-04 17:14:32', '2020-02-04 15:27:36'),
(104, 'SL-1083', 1083, 22, 'Abu Dhabi', '26', 0, NULL, '149', NULL, NULL, '2020-02-04', '20:00', 'cash', 'App', '200', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-04 21:11:57', '2020-02-04 15:41:57'),
(105, 'SL-1084', 1084, 19, 'Abu Dhabi', '20', 0, NULL, '131', NULL, NULL, '2020-02-04', '20:00,20:30,21:00', 'cash', 'App', '390', '1', 'Player', '2020-04-02', '20:14:00', NULL, 0, 2, '2020-02-04 21:43:07', '2020-02-04 16:14:32'),
(106, 'SL-1085', 1085, 19, 'Abu Dhabi', '16', 0, NULL, '90', NULL, NULL, '2020-02-12', '20:00', 'cash', 'App', '150', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-10 20:33:03', '2020-02-10 15:03:03'),
(107, 'SL-1086', 1086, 13, 'Abu Dhabi', '7', 0, NULL, '139', NULL, NULL, '2020-02-12', '18:30', 'cash', 'App', '120', '1', 'Player', '2020-12-02', '05:01:00', NULL, 0, 2, '2020-02-12 06:31:38', '2020-02-12 01:01:58'),
(108, 'SL-1087', 1087, 19, 'Abu Dhabi', '18', 35, NULL, '131', NULL, NULL, '2020-02-14', '16:00,16:30,17:00,17:30,18:00,18:30,19:00,19:30', 'cash', 'App', '1200', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-15 03:29:00', '2020-02-14 21:59:00'),
(109, 'SL-1088', 1088, 22, 'Abu Dhabi', '26', 0, NULL, '210', NULL, NULL, '2020-02-18', '20:00', 'cash', 'App', '200', '1', 'Player', '1970-01-01', '21:06:00', NULL, 0, 2, '2020-02-17 22:35:48', '2020-02-17 17:06:09'),
(110, 'SL-1089', 1089, 22, 'Abu Dhabi', '28', 0, NULL, '210', NULL, NULL, '2020-02-20', '21:00', 'cash', 'App', '305', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-17 22:37:40', '2020-02-17 17:07:40'),
(111, 'SL-1090', 1090, 13, 'Abu Dhabi', '12', 0, NULL, '212', NULL, NULL, '2020-02-26', '19:00', 'cash', 'App', '120', '1', 'Player', '1970-01-01', '17:37:00', NULL, 0, 2, '2020-02-18 16:40:46', '2020-02-18 13:37:40'),
(112, 'SL-1091', 1091, 22, 'Abu Dhabi', '27', 0, NULL, '213', NULL, NULL, '2020-02-19', '19:00', 'cash', 'App', '230', '1', 'Player', '1970-01-01', '22:30:00', NULL, 0, 2, '2020-02-18 23:59:40', '2020-02-18 18:30:01'),
(113, 'SL-1092', 1092, 21, 'Abu Dhabi', '22', 0, NULL, '215', NULL, NULL, '2020-02-19', '19:30,19:00', 'cash', 'App', '210', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-19 16:02:19', '2020-02-19 10:32:19'),
(114, 'SL-1093', 1093, 22, 'Abu Dhabi', '26', NULL, NULL, NULL, '0509999999', 'Hamid Test', '2020-02-19', '20:00,20:30', 'cash', 'Club', '400', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-19 23:18:32', '2020-02-19 17:48:32'),
(115, 'SL-1094', 1094, 26, 'Abu Dhabi', '36', NULL, NULL, NULL, '050000000000', 'M test', '2020-02-20', '18:00,18:30,19:00,19:30,20:00', 'cash', 'Club', '825', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-20 15:30:39', '2020-02-20 10:00:39'),
(116, 'SL-1095', 1095, 26, 'Abu Dhabi', '36', NULL, NULL, NULL, '0508435137', 'SALLAH', '2020-02-20', '21:00,21:30,22:00,22:30,23:00', 'cash', 'Club', '825', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-20 15:34:03', '2020-02-20 10:04:03'),
(117, 'SL-1096', 1096, 26, 'Abu Dhabi', '38', NULL, NULL, NULL, '0553554488', 'Sallah Almeri', '2020-02-20', '17:00,17:30,18:00', 'cash', 'Club', '495', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-20 15:46:01', '2020-02-20 10:16:01'),
(118, 'SL-1097', 1097, 26, 'Abu Dhabi', '35', 103, NULL, '168', NULL, NULL, '2020-02-20', '17:30', 'cash', 'App', '140', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-21 00:44:48', '2020-02-20 19:14:48'),
(119, 'SL-1098', 1098, 22, 'Abu Dhabi', '28', NULL, NULL, NULL, '050000000', 'Hamoodi', '2020-02-24', '20:00,20:30,21:00,21:30,22:00', 'cash', 'Club', '1525', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-24 15:19:23', '2020-02-24 09:49:23'),
(120, 'SL-1099', 1099, 22, 'Abu Dhabi', '28', NULL, NULL, NULL, '050000000', 'Hamoodi', '2020-02-24', '20:00,20:30,21:00,21:30,22:00', 'cash', 'Club', '1525', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-24 15:19:26', '2020-02-24 09:49:26'),
(121, 'SL-1100', 1100, 22, 'Abu Dhabi', '26', NULL, NULL, NULL, '05000000000', 'Almoosawi', '2020-02-24', '21:00,21:30', 'cash', 'Club', '400', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-24 15:22:52', '2020-02-24 09:52:52'),
(122, 'SL-1101', 1101, 22, 'Abu Dhabi', '46', NULL, NULL, NULL, '050000000', 'Haitham', '2020-02-24', '21:00,21:30', 'cash', 'Club', '400', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-24 15:28:30', '2020-02-24 09:58:30'),
(123, 'SL-1102', 1102, 22, 'Abu Dhabi', '46', NULL, NULL, NULL, '050000000', 'Saleh Al Jaari', '2020-02-24', '20:00,20:30', 'cash', 'Club', '400', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-24 15:34:36', '2020-02-24 10:04:36'),
(124, 'SL-1103', 1103, 22, 'Abu Dhabi', '27', NULL, NULL, NULL, '050000000', 'Yusuf Alhammadi', '2020-02-24', '20:00,20:30,21:00,21:30', 'cash', 'Club', '920', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-24 15:36:40', '2020-02-24 10:06:40'),
(125, 'SL-1104', 1104, 22, 'Abu Dhabi', '47', NULL, NULL, NULL, '050000000', 'Hamoodi', '2020-02-24', '20:00,20:30,21:00,21:30', 'cash', 'Club', '800', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-24 16:09:18', '2020-02-24 10:39:18'),
(126, 'SL-1105', 1105, 22, 'Abu Dhabi', '48', NULL, NULL, NULL, '050000000', 'Hamoodi', '2020-02-24', '20:00,20:30,21:00,21:30', 'cash', 'Club', '800', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-24 16:10:59', '2020-02-24 10:40:59'),
(127, 'SL-1106', 1106, 22, 'Abu Dhabi', '26', NULL, NULL, NULL, '05000000', 'Salem Al Ameri', '2020-02-24', '20:00,20:30', 'cash', 'Club', '400', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-24 16:17:44', '2020-02-24 10:47:44'),
(128, 'SL-1107', 1107, 26, 'Abu Dhabi', '36', NULL, NULL, NULL, '0500000000', 'Academy Manual', '2020-02-25', '17:00,17:30,18:00,18:30', 'cash', 'Academic', '660', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-25 17:00:00', '2020-02-25 11:30:00'),
(129, 'SL-1108', 1108, 26, 'Abu Dhabi', '36', NULL, NULL, NULL, '05000000000', 'Booking Manual', '2020-02-25', '19:00,19:30,20:00,20:30,21:00,21:30', 'cash', 'Club', '990', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-25 17:01:46', '2020-02-25 11:31:46'),
(130, 'SL-1109', 1109, 26, 'Abu Dhabi', '38', NULL, NULL, NULL, '0500000000', 'Booking Manual', '2020-02-25', '20:00,20:30,21:00,21:30', 'cash', 'Club', '660', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-25 17:02:43', '2020-02-25 11:32:43'),
(131, 'SL-1110', 1110, 26, 'Abu Dhabi', '39', NULL, NULL, NULL, '0500000000', 'Academy Manual', '2020-02-25', '17:00,17:30,18:00,18:30', 'cash', 'Academic', '660', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-25 17:03:42', '2020-02-25 11:33:42'),
(132, 'SL-1111', 1111, 26, 'Abu Dhabi', '39', NULL, NULL, NULL, '0500000000', 'Booking Manual', '2020-02-25', '20:00,20:30,21:00,21:30', 'cash', 'Club', '660', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-25 17:04:21', '2020-02-25 11:34:21'),
(133, 'SL-1112', 1112, 26, 'Abu Dhabi', '35', NULL, NULL, NULL, '05000000000', 'Booking Manual', '2020-02-25', '17:00,17:30,18:00,18:30,19:00,19:30,20:00,20:30', 'cash', 'Club', '1120', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-25 17:05:19', '2020-02-25 11:35:19'),
(134, 'SL-1113', 1113, 26, 'Abu Dhabi', '36', NULL, NULL, NULL, '0500000000', 'Booking Manual', '2020-02-26', '17:00,17:30,18:00,18:30,19:00,19:30,20:00,20:30,21:00,21:30', 'cash', 'Club', '1650', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-25 17:06:16', '2020-02-25 11:36:16'),
(135, 'SL-1114', 1114, 26, 'Abu Dhabi', '38', NULL, NULL, NULL, '0500000000', 'Booking Manual', '2020-02-26', '17:00,17:30,18:00,18:30,19:00,19:30,20:00,20:30,21:00,21:30', 'cash', 'Club', '1650', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-25 17:06:55', '2020-02-25 11:36:55'),
(136, 'SL-1115', 1115, 26, 'Abu Dhabi', '39', NULL, NULL, NULL, '0500000000', 'Booking Manual', '2020-02-26', '17:00,17:30,18:00,18:30,19:00,19:30,20:00,20:30,21:00,21:30,22:00,22:30', 'cash', 'Tournament', '1980', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-25 17:15:45', '2020-02-25 11:45:45'),
(137, 'SL-1116', 1116, 26, 'Abu Dhabi', '35', NULL, NULL, NULL, '050000000', 'Booking Manual', '2020-02-26', '17:00,17:30,18:00,18:30,20:00,20:30,21:00,21:30', 'cash', 'Club', '1120', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-25 17:17:18', '2020-02-25 11:47:18'),
(138, 'SL-1117', 1117, 26, 'Abu Dhabi', '36', NULL, NULL, NULL, '0500000000', 'Booking Manual', '2020-02-27', '17:00,17:30,18:00,18:30,20:00,20:30,21:00,21:30,22:00,22:30', 'cash', 'Club', '1650', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-25 17:19:05', '2020-02-25 11:49:05'),
(139, 'SL-1118', 1118, 26, 'Abu Dhabi', '38', NULL, NULL, NULL, '0500000000', 'Booking Manual', '2020-02-27', '17:00,17:30,18:00,18:30', 'cash', 'Club', '660', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-25 17:19:48', '2020-02-25 11:49:48'),
(140, 'SL-1119', 1119, 26, 'Abu Dhabi', '39', NULL, NULL, NULL, '0500000000', 'Booking Manual', '2020-02-27', '17:00,17:30,18:00,18:30', 'cash', 'Club', '660', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-25 17:20:17', '2020-02-25 11:50:17'),
(141, 'SL-1120', 1120, 26, 'Abu Dhabi', '35', NULL, NULL, NULL, '0500000000', 'Booking Manual', '2020-02-27', '17:00,17:30,18:00,18:30', 'cash', 'Club', '560', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-25 17:20:52', '2020-02-25 11:50:52'),
(142, 'SL-1121', 1121, 26, 'Abu Dhabi', '35', NULL, NULL, NULL, '0500000000', 'Booking Manual', '2020-02-28', '20:00,20:30,21:00,21:30,22:00,22:30', 'cash', 'Club', '840', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-25 17:24:49', '2020-02-25 11:54:49'),
(143, 'SL-1122', 1122, 26, 'Abu Dhabi', '36', NULL, NULL, NULL, '0500000001', 'Senior', '2020-02-28', '17:00,17:30,18:00,18:30', 'cash', 'Club', '660', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-25 17:25:43', '2020-02-25 11:55:43'),
(144, 'SL-1123', 1123, 26, 'Abu Dhabi', '38', NULL, NULL, NULL, '05000000001', 'Senior', '2020-02-28', '17:00,17:30,18:00,18:30', 'cash', 'Club', '660', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-25 17:26:24', '2020-02-25 11:56:24'),
(145, 'SL-1124', 1124, 26, 'Abu Dhabi', '39', NULL, NULL, NULL, '05000000001', 'Senior', '2020-02-28', '17:00,17:30,18:00,18:30', 'cash', 'Club', '660', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-25 17:27:03', '2020-02-25 11:57:03'),
(146, 'SL-1125', 1125, 26, 'Abu Dhabi', '36', NULL, NULL, NULL, '0500000002', 'Jairo', '2020-02-28', '19:00,19:30,20:00', 'cash', 'Club', '495', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-25 17:27:52', '2020-02-25 11:57:52'),
(147, 'SL-1126', 1126, 26, 'Abu Dhabi', '38', NULL, NULL, NULL, '0500000001', 'Jairo', '2020-02-28', '19:00,19:30,20:00', 'cash', 'Club', '495', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-25 17:28:22', '2020-02-25 11:58:22'),
(148, 'SL-1127', 1127, 26, 'Abu Dhabi', '39', NULL, NULL, NULL, '0500000001', 'Jairo', '2020-02-28', '19:00,19:30,20:00', 'cash', 'Club', '495', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-25 17:29:00', '2020-02-25 11:59:00'),
(149, 'SL-1128', 1128, 28, 'Ras Al Khaimah', '43', NULL, NULL, NULL, '05000000000', 'Ahmed', '2020-02-25', '20:00,21:00', 'cash', 'Club', '150', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-25 20:45:15', '2020-02-25 15:15:15'),
(150, 'SL-1129', 1129, 28, 'Ras Al Khaimah', '43', NULL, NULL, NULL, '05000000000', 'Ahmed', '2020-02-25', '20:00,21:00', 'cash', 'Club', '150', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-25 20:45:36', '2020-02-25 15:15:36'),
(151, 'SL-1130', 1130, 28, 'Ras Al Khaimah', '45', NULL, NULL, NULL, '0521010766', 'Mostafa', '2020-02-27', '21:30,22:30', 'cash', 'Club', '180', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-25 20:52:36', '2020-02-25 15:22:36'),
(152, 'SL-1131', 1131, 19, 'Abu Dhabi', '18', 0, NULL, '90', NULL, NULL, '2020-02-29', '20:00,20:30', NULL, 'App', '300', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-28 14:31:19', '2020-02-28 09:01:19'),
(153, 'SL-1132', 1132, 22, 'Abu Dhabi', '28', NULL, NULL, NULL, '0500000000', 'Dr. Fares', '2020-03-01', '20:00,20:30', 'cash', 'Club', '610', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-29 21:00:43', '2020-02-29 15:30:43'),
(154, 'SL-1133', 1133, 22, 'Abu Dhabi', '26', NULL, NULL, NULL, '0500000000', 'Dr. Fares', '2020-03-01', '20:00,20:30', 'cash', 'Club', '400', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-29 21:03:38', '2020-02-29 15:33:38'),
(155, 'SL-1134', 1134, 22, 'Abu Dhabi', '26', NULL, NULL, NULL, '0500000000', 'Dr. Fares', '2020-03-01', '20:00,20:30', 'cash', 'Club', '400', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-29 21:03:41', '2020-02-29 15:33:41'),
(156, 'SL-1135', 1135, 22, 'Abu Dhabi', '46', NULL, NULL, NULL, '500000000', 'Dr. Fares', '2020-03-01', '20:00,20:30', 'cash', 'Club', '400', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-29 21:04:22', '2020-02-29 15:34:22'),
(157, 'SL-1136', 1136, 22, 'Abu Dhabi', '46', NULL, NULL, NULL, '500000000', 'Al Musawi', '2020-03-01', '21:00,21:30', 'cash', 'Club', '400', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-29 21:11:11', '2020-02-29 15:41:11'),
(158, 'SL-1137', 1137, 22, 'Abu Dhabi', '47', NULL, NULL, NULL, '500000000', 'Abdulrahman', '2020-03-01', '20:00,20:30', 'cash', 'Club', '400', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-29 21:12:26', '2020-02-29 15:42:26'),
(159, 'SL-1138', 1138, 22, 'Abu Dhabi', '47', NULL, NULL, NULL, '500000000', 'Eissa', '2020-03-01', '21:00,21:30', 'cash', 'Club', '400', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-29 21:13:26', '2020-02-29 15:43:26'),
(160, 'SL-1139', 1139, 22, 'Abu Dhabi', '48', NULL, NULL, NULL, '500000000', 'Nawaf', '2020-03-01', '20:00,20:30,21:00,21:30', 'cash', 'Club', '800', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-29 21:14:55', '2020-02-29 15:44:55'),
(161, 'SL-1140', 1140, 22, 'Abu Dhabi', '48', NULL, NULL, NULL, '500000000', 'Nawaf', '2020-03-01', '20:00,20:30,21:00,21:30', 'cash', 'Club', '800', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-29 21:14:58', '2020-02-29 15:44:58'),
(162, 'SL-1141', 1141, 22, 'Abu Dhabi', '26', NULL, NULL, NULL, '500000000', 'Hamoodi', '2020-03-02', '20:00,20:30,21:00,21:30', 'cash', 'Club', '800', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-29 21:22:59', '2020-02-29 15:52:59'),
(163, 'SL-1142', 1142, 22, 'Abu Dhabi', '46', NULL, NULL, NULL, '500000000', 'Hamoodi', '2020-03-02', '20:00,20:30,21:00,21:30', 'cash', 'Club', '800', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-29 21:23:52', '2020-02-29 15:53:52'),
(164, 'SL-1143', 1143, 22, 'Abu Dhabi', '28', NULL, NULL, NULL, '500000000', 'Hamoodi', '2020-03-02', '20:00,20:30,21:00,21:30', 'cash', 'Club', '1220', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-29 21:24:41', '2020-02-29 15:54:41'),
(165, 'SL-1144', 1144, 22, 'Abu Dhabi', '48', NULL, NULL, NULL, '500000000', 'haitham', '2020-03-02', '20:00,20:30,21:00,21:30', 'cash', 'Club', '800', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-29 21:25:57', '2020-02-29 15:55:57'),
(166, 'SL-1145', 1145, 22, 'Abu Dhabi', '26', NULL, NULL, NULL, '500000000', 'Eissa Mohammed', '2020-02-03', '21:00,21:30', 'cash', 'Club', '400', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-02-29 21:30:45', '2020-02-29 16:00:45'),
(167, 'SL-1146', 1146, 26, 'Abu Dhabi', '35', 0, NULL, '257', NULL, NULL, '2020-02-29', '19:00', 'cash', 'App', '140', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-01 00:15:27', '2020-02-29 18:45:27'),
(172, 'SL-1147', 1147, 26, 'Abu Dhabi', '36', NULL, NULL, NULL, '052000000', 'Abdallah Mohamed', '2020-03-02', '19:00,20:00', 'cash', 'Club', '330', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-02 17:07:33', '2020-03-02 11:37:33'),
(173, 'SL-1148', 1148, 26, 'Abu Dhabi', '36', NULL, NULL, NULL, '050123456', 'banyas', '2020-03-02', '21:00,23:00', 'cash', 'Club', '330', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-02 17:09:42', '2020-03-02 11:39:42'),
(174, 'SL-1149', 1149, 26, 'Abu Dhabi', '38', NULL, NULL, NULL, '0501234568', 'FARAA', '2020-03-02', '22:00,23:00', 'cash', 'Club', '330', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-02 17:11:57', '2020-03-02 11:41:57'),
(175, 'SL-1150', 1150, 26, 'Abu Dhabi', '39', NULL, NULL, NULL, '050000000', 'HAWAD HASSAN', '2020-03-02', '21:00,22:00', 'cash', 'Club', '330', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-02 17:13:00', '2020-03-02 11:43:00'),
(176, 'SL-1151', 1151, 26, 'Abu Dhabi', '38', NULL, NULL, NULL, '052222222', 'MAJED', '2020-03-02', '20:00,21:00', 'cash', 'Club', '330', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-02 17:14:03', '2020-03-02 11:44:03'),
(177, 'SL-1152', 1152, 26, 'Abu Dhabi', '36', NULL, NULL, NULL, '050123456', 'JAWAD', '2020-03-03', '20:00,20:30,21:00,21:30,22:00', 'cash', 'Club', '825', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-02 17:23:42', '2020-03-02 11:53:42'),
(178, 'SL-1153', 1153, 26, 'Abu Dhabi', '38', NULL, NULL, NULL, '0502314568', 'MAJED', '2020-03-03', '20:00,20:30,21:00', 'cash', 'Club', '495', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-02 17:25:40', '2020-03-02 11:55:40'),
(179, 'SL-1154', 1154, 26, 'Abu Dhabi', '39', NULL, NULL, NULL, '050123456', 'THABIT', '2020-03-03', '20:00,20:30,21:00', 'cash', 'Club', '495', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-02 17:29:09', '2020-03-02 11:59:09'),
(180, 'SL-1155', 1155, 26, 'Abu Dhabi', '35', NULL, NULL, NULL, '050654789', 'NASER BADER', '2020-03-03', '22:00,22:30,23:00', 'cash', 'Club', '420', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-02 17:30:20', '2020-03-02 12:00:20'),
(181, 'SL-1156', 1156, 26, 'Abu Dhabi', '36', NULL, NULL, NULL, '0501234569', 'HAWAD AL ZUBEIDI', '2020-03-04', '20:00,20:30,21:00', 'cash', 'Club', '495', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-02 17:33:22', '2020-03-02 12:03:22'),
(182, 'SL-1157', 1157, 26, 'Abu Dhabi', '36', NULL, NULL, NULL, '0501234568', 'HAWAD HASSAN', '2020-03-04', '21:30,22:00', 'cash', 'Club', '330', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-02 17:38:21', '2020-03-02 12:08:21'),
(183, 'SL-1158', 1158, 26, 'Abu Dhabi', '38', NULL, NULL, NULL, '050123789', 'MOHAMED AL KHATIRI', '2020-03-04', '21:00,22:00', 'cash', 'Club', '330', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-02 17:41:32', '2020-03-02 12:11:32'),
(184, 'SL-1159', 1159, 26, 'Abu Dhabi', '39', NULL, NULL, NULL, '0564646464', 'HAMAD SALEM', '2020-03-04', '21:00,22:00', 'cash', 'Club', '330', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-02 17:44:34', '2020-03-02 12:14:34'),
(185, 'SL-1160', 1160, 26, 'Abu Dhabi', '39', NULL, NULL, NULL, '0501234569', 'SALEJ JALAL', '2020-03-04', '20:00,20:30', 'cash', 'Club', '330', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-02 17:47:23', '2020-03-02 12:17:23'),
(186, 'SL-1161', 1161, 26, 'Abu Dhabi', '35', NULL, NULL, NULL, '050123963', 'QUSAY', '2020-03-04', '21:00,22:00', 'cash', 'Club', '280', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-02 17:48:15', '2020-03-02 12:18:15'),
(187, 'SL-1162', 1162, 26, 'Abu Dhabi', '36', NULL, NULL, NULL, '0501236547', 'MAHMOUD ZAHRAN', '2020-03-05', '20:00,21:00', 'cash', 'Club', '330', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-02 18:05:20', '2020-03-02 12:35:20'),
(188, 'SL-1163', 1163, 26, 'Abu Dhabi', '36', NULL, NULL, NULL, '050123456', 'BANYAS', '2020-03-05', '21:30,22:00', 'cash', 'Club', '330', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-02 18:06:50', '2020-03-02 12:36:50'),
(189, 'SL-1164', 1164, 26, 'Abu Dhabi', '35', NULL, NULL, NULL, '050654789', 'MOHSEN', '2020-03-06', '17:00,18:00', 'cash', 'Club', '280', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-02 18:07:57', '2020-03-02 12:37:57'),
(190, 'SL-1165', 1165, 26, 'Abu Dhabi', '39', 0, NULL, '237', NULL, NULL, '2020-03-02', '21:30', 'card', 'App', '165', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-03 03:23:52', '2020-03-02 21:53:52'),
(191, 'SL-1166', 1166, 26, 'Abu Dhabi', '39', 0, NULL, '237', NULL, NULL, '2020-03-02', '21:30', 'card', 'App', '165', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-03 03:23:58', '2020-03-02 21:53:58'),
(192, 'SL-1167', 1167, 13, 'Abu Dhabi', '12', 0, NULL, '269', NULL, NULL, '2020-03-04', '18:00', 'card', 'App', '120', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-04 13:42:13', '2020-03-04 08:12:13'),
(193, 'SL-1168', 1168, 13, 'Abu Dhabi', '12', 0, NULL, '269', NULL, NULL, '2020-03-04', '18:00', 'cash', 'App', '120', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-04 13:42:45', '2020-03-04 08:12:45'),
(211, 'SL-1186', 1186, 24, 'Khor Fakkan', '33', 29, NULL, '8', NULL, NULL, '2020-03-05', '10:00', 'card', 'App', '100', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 01:33:00', '2020-03-05 20:03:00'),
(213, 'SL-1188', 1188, 26, 'Abu Dhabi', '36', 29, NULL, '8', NULL, NULL, '2020-03-05', '17:00,17:30', 'card', 'App', '330', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 01:35:45', '2020-03-05 20:05:45'),
(215, 'SL-1189', 1189, 28, 'Ras Al Khaimah', '43', 0, NULL, '7', NULL, NULL, '2020-03-08', '10:00,10:30', 'card', 'App', '150', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 02:18:41', '2020-03-05 20:48:41'),
(216, 'SL-1190', 1190, 28, 'Ras Al Khaimah', '43', 0, NULL, '7', NULL, NULL, '2020-03-08', '10:00,10:30', 'card', 'App', '150', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 02:18:45', '2020-03-05 20:48:45'),
(217, 'SL-1191', 1191, 28, 'Ras Al Khaimah', '43', 0, NULL, '7', NULL, NULL, '2020-03-08', '10:00,10:30', 'card', 'App', '150', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 02:18:48', '2020-03-05 20:48:48'),
(218, 'SL-1192', 1192, 28, 'Ras Al Khaimah', '43', 0, NULL, '7', NULL, NULL, '2020-03-08', '10:00,10:30', 'card', 'App', '150', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 02:18:56', '2020-03-05 20:48:56'),
(219, 'SL-1193', 1193, 28, 'Ras Al Khaimah', '43', 0, NULL, '7', NULL, NULL, '2020-03-08', '10:00,10:30', 'card', 'App', '150', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 02:18:57', '2020-03-05 20:48:57'),
(220, 'SL-1194', 1194, 28, 'Ras Al Khaimah', '43', 0, NULL, '7', NULL, NULL, '2020-03-08', '10:00,10:30', 'card', 'App', '150', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 02:18:59', '2020-03-05 20:48:59'),
(221, 'SL-1195', 1195, 30, 'Ras Al Khaimah', '50', 0, NULL, '7', NULL, NULL, '2020-03-19', '17:30,18:00', 'card', 'App', '150', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 02:21:29', '2020-03-05 20:51:29'),
(222, 'SL-1196', 1196, 29, 'Ras Al Khaimah', '49', 0, NULL, '7', NULL, NULL, '2020-03-19', '16:30,17:00', 'card', 'App', '150', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 02:32:15', '2020-03-05 21:02:15'),
(223, 'SL-1197', 1197, 29, 'Ras Al Khaimah', '49', 0, NULL, '7', NULL, NULL, '2020-03-19', '16:30,17:00', 'card', 'App', '150', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 02:32:17', '2020-03-05 21:02:17'),
(224, 'SL-1198', 1198, 2, 'Fujairah', '2', 29, NULL, '8', NULL, NULL, '2020-03-07', '09:00,09:30', NULL, 'App', '130', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 02:38:36', '2020-03-05 21:08:36'),
(226, 'SL-1200', 1200, 24, 'Khor Fakkan', '33', 0, NULL, '7', NULL, NULL, '2020-03-24', '14:30,15:00', 'card', 'App', '200', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 02:41:47', '2020-03-05 21:11:47'),
(227, 'SL-1201', 1201, 24, 'Khor Fakkan', '33', 0, NULL, '7', NULL, NULL, '2020-03-24', '14:30,15:00', 'card', 'App', '200', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 02:41:51', '2020-03-05 21:11:51'),
(228, 'SL-1202', 1202, 28, 'Ras Al Khaimah', '44', 0, NULL, '7', NULL, NULL, '2020-03-18', '16:30,17:00', 'card', 'App', '130', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 02:47:14', '2020-03-05 21:17:14'),
(229, 'SL-1203', 1203, 28, 'Ras Al Khaimah', '44', 0, NULL, '7', NULL, NULL, '2020-03-18', '16:30,17:00', 'card', 'App', '130', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 02:47:18', '2020-03-05 21:17:18'),
(230, 'SL-1204', 1204, 28, 'Ras Al Khaimah', '44', 0, NULL, '7', NULL, NULL, '2020-03-18', '16:30,17:00', 'card', 'App', '130', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 02:47:20', '2020-03-05 21:17:20'),
(231, 'SL-1205', 1205, 28, 'Ras Al Khaimah', '44', 0, NULL, '7', NULL, NULL, '2020-03-18', '16:30,17:00', 'card', 'App', '130', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 02:47:21', '2020-03-05 21:17:21'),
(232, 'SL-1206', 1206, 23, 'Abu Dhabi', '30', 0, NULL, '7', NULL, NULL, '2020-03-18', '11:00,11:30', 'card', 'App', '265.5', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 02:47:57', '2020-03-05 21:17:57'),
(233, 'SL-1207', 1207, 23, 'Abu Dhabi', '30', 0, NULL, '7', NULL, NULL, '2020-03-18', '11:00,11:30', 'card', 'App', '265.5', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 02:47:59', '2020-03-05 21:17:59'),
(234, 'SL-1208', 1208, 19, 'Abu Dhabi', '15', 0, NULL, '7', NULL, NULL, '2020-03-26', '14:30,15:00', 'card', 'App', '260', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 02:48:34', '2020-03-05 21:18:34'),
(237, 'SL-1211', 1211, 27, 'Ras Al Khaimah', '40', 29, NULL, '8', NULL, NULL, '2020-03-05', '11:00', 'card', 'App', '75', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 03:05:32', '2020-03-05 21:35:32'),
(238, 'SL-1212', 1212, 27, 'Ras Al Khaimah', '40', 29, NULL, '8', NULL, NULL, '2020-03-05', '11:30', 'card', 'App', '75', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 03:10:41', '2020-03-05 21:40:41'),
(239, 'SL-1213', 1213, 2, 'Fujairah', '2', 29, NULL, '8', NULL, NULL, '2020-03-05', '09:00', 'card', 'App', '65', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 04:09:08', '2020-03-05 22:39:08'),
(243, 'SL-1216', 1216, 30, 'Ras Al Khaimah', '50', 0, NULL, '7', NULL, NULL, '2020-03-09', '11:30,12:00', 'card', 'App', '150', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 11:46:46', '2020-03-06 06:16:46'),
(244, 'SL-1217', 1217, 28, 'Ras Al Khaimah', '43', 48, NULL, '43', NULL, NULL, '2020-03-06', '16:30', 'card', 'App', '75', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 14:32:25', '2020-03-06 09:02:25'),
(245, 'SL-1218', 1218, 28, 'Ras Al Khaimah', '43', 48, NULL, '43', NULL, NULL, '2020-03-06', '16:30', 'card', 'App', '75', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 14:32:27', '2020-03-06 09:02:27'),
(246, 'SL-1219', 1219, 28, 'Ras Al Khaimah', '43', 48, NULL, '43', NULL, NULL, '2020-03-06', '16:30', 'card', 'App', '75', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 14:32:29', '2020-03-06 09:02:29'),
(247, 'SL-1220', 1220, 28, 'Ras Al Khaimah', '43', 48, NULL, '43', NULL, NULL, '2020-03-06', '16:30', 'card', 'App', '75', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 14:32:35', '2020-03-06 09:02:35'),
(248, 'SL-1221', 1221, 28, 'Ras Al Khaimah', '43', 48, NULL, '43', NULL, NULL, '2020-03-06', '16:30', 'card', 'App', '75', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 14:32:37', '2020-03-06 09:02:37'),
(249, 'SL-1222', 1222, 27, 'Ras Al Khaimah', '42', 29, NULL, '8', NULL, NULL, '2020-03-07', '10:00', 'card', 'App', '60', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 16:57:17', '2020-03-06 11:27:17'),
(254, 'SL-1225', 1225, 27, 'Ras Al Khaimah', '40', 29, NULL, '8', NULL, NULL, '2020-03-06', '10:00', 'card', 'App', '75', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 20:46:51', '2020-03-06 15:16:51'),
(255, 'SL-1226', 1226, 28, 'Ras Al Khaimah', '43', 0, NULL, '7', NULL, NULL, '2020-03-17', '14:00,14:30', 'card', 'App', '150', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-06 21:41:17', '2020-03-06 16:11:17'),
(256, 'SL-1227', 1227, 2, 'Fujairah', '2', 29, NULL, '8', NULL, NULL, '2020-03-07', '10:00', 'card', 'App', '65', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-07 13:20:17', '2020-03-07 07:50:17'),
(257, 'SL-1228', 1228, 19, 'Abu Dhabi', '14', 0, NULL, '7', NULL, NULL, '2020-03-09', '18:30,19:00', 'card', 'App', '260', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-08 12:22:49', '2020-03-08 06:52:49'),
(258, 'SL-1229', 1229, 28, 'Ras Al Khaimah', '45', 0, NULL, '278', NULL, NULL, '2020-03-09', '18:00,18:30,19:00', 'card', 'App', '270', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-08 18:58:23', '2020-03-08 13:28:23'),
(259, 'SL-1230', 1230, 28, 'Ras Al Khaimah', '45', 0, NULL, '278', NULL, NULL, '2020-03-09', '18:00,18:30,19:00', 'card', 'App', '270', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-08 18:58:29', '2020-03-08 13:28:29'),
(260, 'SL-1231', 1231, 28, 'Ras Al Khaimah', '45', 0, NULL, '278', NULL, NULL, '2020-03-09', '18:00,18:30,19:00', 'cash', 'App', '270', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-08 18:58:44', '2020-03-08 13:28:44'),
(261, 'SL-1232', 1232, 28, 'Ras Al Khaimah', '45', 0, NULL, '278', NULL, NULL, '2020-03-08', '18:00,19:00,18:30', 'cash', 'App', '270', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-08 19:21:04', '2020-03-08 13:51:04'),
(262, 'SL-1233', 1233, 19, 'Abu Dhabi', '16', 0, NULL, '279', NULL, NULL, '2020-03-09', '20:00,20:30,21:00,21:30', 'card', 'App', '600', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-09 13:43:17', '2020-03-09 08:13:17'),
(263, 'SL-1234', 1234, 19, 'Abu Dhabi', '16', 0, NULL, '279', NULL, NULL, '2020-03-09', '20:30,21:00,21:30,22:00', 'cash', 'App', '600', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-09 13:43:58', '2020-03-09 08:13:58'),
(264, 'SL-1235', 1235, 26, 'Abu Dhabi', '36', 0, NULL, '222', NULL, NULL, '2020-03-11', '20:00,20:30', 'cash', 'App', '330', '1', 'Player', '2020-11-03', '09:39:00', NULL, 0, 2, '2020-03-11 11:08:58', '2020-03-11 05:39:48'),
(265, 'SL-1236', 1236, 26, 'Abu Dhabi', '39', 0, NULL, '222', NULL, NULL, '2020-03-11', '19:00,19:30', 'cash', 'App', '330', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-11 11:10:40', '2020-03-11 05:40:40'),
(266, 'SL-1237', 1237, 26, 'Abu Dhabi', '36', NULL, NULL, NULL, '0500000000000', 'Bookingmamual', '2020-03-11', '17:00,17:30,18:00,18:30', 'cash', 'Club', '660', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-11 11:58:37', '2020-03-11 06:28:37'),
(267, 'SL-1238', 1238, 2, 'Fujairah', '2', 29, NULL, '8', NULL, NULL, '2020-03-11', '09:00', 'cash', 'App', '65', '1', 'Admin', '2020-03-11', '13:01:00', 'Testing process', 0, 2, '2020-03-11 12:47:05', '2020-03-11 07:31:20'),
(268, 'SL-1239', 1239, 2, 'Fujairah', '2', 29, NULL, '8', NULL, NULL, '2020-03-11', '09:00', 'cash', 'App', '65', '1', 'Player', '2020-11-03', '14:03:00', NULL, 0, 2, '2020-03-11 13:59:53', '2020-03-11 08:33:18'),
(269, 'SL-1240', 1240, 2, 'Fujairah', '2', 29, NULL, '8', NULL, NULL, '2020-03-11', '09:00', 'cash', 'App', '65', '1', 'Player', '2020-11-03', '23:50:00', NULL, 0, 2, '2020-03-11 23:46:36', '2020-03-11 18:20:46'),
(270, 'SL-1241', 1241, 2, 'Fujairah', '2', 29, NULL, '8', NULL, NULL, '2020-03-11', '20:00', 'cash', 'App', '65', '1', 'Player', '2020-12-03', '00:00:00', NULL, 0, 2, '2020-03-11 23:58:20', '2020-03-11 18:30:23'),
(271, 'SL-1242', 1242, 24, 'Khor Fakkan', '33', 0, NULL, '288', NULL, NULL, '2020-03-13', '21:00,21:30', 'cash', 'App', '200', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-12 22:18:54', '2020-03-12 16:48:54'),
(272, 'SL-1243', 1243, 2, 'Fujairah', '2', 29, NULL, '8', NULL, NULL, '2020-03-12', '20:00,20:30', 'cash', 'App', '130', '1', 'Player', '2020-12-03', '23:24:00', NULL, 0, 2, '2020-03-12 22:39:25', '2020-03-12 17:54:39'),
(273, 'SL-1244', 1244, 2, 'Fujairah', '2', 29, NULL, '8', NULL, NULL, '2020-03-12', '20:00,20:30', 'cash', 'App', '130', '1', 'Player', '2020-12-03', '23:26:00', NULL, 0, 2, '2020-03-12 23:24:55', '2020-03-12 17:56:23'),
(274, 'SL-1245', 1245, 26, 'Abu Dhabi', '35', 0, NULL, '222', NULL, NULL, '2020-03-16', '19:00,19:30', 'cash', 'App', '280', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-14 15:10:35', '2020-03-14 09:40:35'),
(275, 'SL-1246', 1246, 26, 'Abu Dhabi', '36', 0, NULL, '295', NULL, NULL, '2020-03-15', '22:30,23:00', 'cash', 'App', '330', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-15 20:54:31', '2020-03-15 15:24:31'),
(276, 'SL-1247', 1247, 23, 'Abu Dhabi - أبوظبي', '29', 0, NULL, '6', NULL, NULL, '2020-03-21', '11:00,12:00,11:30', 'card', 'App', '398.25', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-03-21 23:43:54', '2020-03-21 18:13:54'),
(277, 'SL-1248', 1248, 28, 'Ras Al Khaimah - رأس الخيمة', '44', 138, NULL, '303', NULL, NULL, '2020-04-01', '11:00', 'card', 'App', '65', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-04-01 19:51:21', '2020-04-01 14:21:21'),
(278, 'SL-1249', 1249, 28, 'Ras Al Khaimah - رأس الخيمة', '44', 138, NULL, '303', NULL, NULL, '2020-04-01', '11:00', 'cash', 'App', '65', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-04-01 19:52:06', '2020-04-01 14:22:06'),
(279, 'SL-1250', 1250, 32, 'Chennai - تشيناي', '57', NULL, NULL, NULL, '8667632613', 'Dhamotharan', '2020-04-02', '12:00', 'cash', 'Street League', '75', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-04-02 00:52:30', '2020-04-01 19:22:30'),
(280, 'SL-1251', 1251, 32, 'Chennai - تشيناي', '57', 139, NULL, '19', NULL, NULL, '2020-04-01', '09:00,09:30', 'cash', 'App', '75', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-04-02 00:57:33', '2020-04-01 19:27:33'),
(281, 'SL-1252', 1252, 32, 'Chennai - تشيناي', '57', 139, NULL, '19', NULL, NULL, '2020-04-02', '20:00,20:30', 'cash', 'App', '75', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-04-02 23:35:23', '2020-04-02 18:05:23'),
(282, 'SL-1253', 1253, 32, 'Chennai - تشيناي', '55', 29, NULL, '8', NULL, NULL, '2020-04-08', '09:00,09:30', 'cash', 'App', '80', '0', NULL, NULL, NULL, NULL, 0, 2, '2020-04-03 01:43:29', '2020-04-02 20:13:29');

-- --------------------------------------------------------

--
-- Table structure for table `sleague_bulk_bookings`
--

CREATE TABLE `sleague_bulk_bookings` (
  `bulk_booking_id` int(11) NOT NULL,
  `booking_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `book_code` int(11) NOT NULL,
  `booking_ground` int(11) NOT NULL,
  `booking_groundcity` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `booking_ground_size` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `booking_team` int(11) NOT NULL,
  `booking_player` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `booking_player_number` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `player_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `booking_from` date NOT NULL,
  `booking_to` date NOT NULL,
  `booking_time` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `booking_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `booking_amount` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `booking_approval` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `who_cancelled` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cancel_date` date NOT NULL,
  `cancel_time` time NOT NULL,
  `cancel_reason` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `booking_status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sleague_bulk_bookings`
--

INSERT INTO `sleague_bulk_bookings` (`bulk_booking_id`, `booking_code`, `book_code`, `booking_ground`, `booking_groundcity`, `booking_ground_size`, `booking_team`, `booking_player`, `booking_player_number`, `player_name`, `booking_from`, `booking_to`, `booking_time`, `booking_type`, `booking_amount`, `booking_approval`, `who_cancelled`, `cancel_date`, `cancel_time`, `cancel_reason`, `booking_status`, `created_at`, `updated_at`) VALUES
(2, 'SLB-1000', 1000, 22, 'Abu Dhabi', '26', 0, '', '0500000000', 'Academy', '2020-02-24', '2020-03-26', '17:00,17:30,18:00,18:30,19:00,19:30', '', '', '', '', '0000-00-00', '00:00:00', '', 0, '2020-02-24 15:50:55', '2020-02-24 10:20:55'),
(3, 'SLB-1001', 1001, 22, 'Abu Dhabi', '27', 0, '', '0500000000', 'Academy', '2020-02-24', '2020-03-26', '17:00,17:30,18:00,18:30,19:00,19:30', '', '', '', '', '0000-00-00', '00:00:00', '', 0, '2020-02-24 15:51:50', '2020-02-24 10:21:50'),
(4, 'SLB-1002', 1002, 22, 'Abu Dhabi', '28', 0, '', '0500000000', 'Academy', '2020-02-24', '2020-03-26', '17:00,17:30,18:00,18:30,19:00,19:30', '', '', '', '', '0000-00-00', '00:00:00', '', 0, '2020-02-24 15:52:20', '2020-02-24 10:22:20'),
(5, 'SLB-1003', 1003, 22, 'Abu Dhabi', '46', 0, '', '0500000000', 'Aacdemy', '2020-02-24', '2020-03-26', '17:00,17:30,18:00,18:30,19:00,19:30', '', '', '', '', '0000-00-00', '00:00:00', '', 0, '2020-02-24 15:53:10', '2020-02-24 10:23:10'),
(6, 'SLB-1004', 1004, 22, 'Abu Dhabi', '47', 0, '', '0500000000', 'Aacdemy', '2020-02-24', '2020-03-26', '17:00,17:30,18:00,18:30,19:00,19:30', '', '', '', '', '0000-00-00', '00:00:00', '', 0, '2020-02-24 15:53:43', '2020-02-24 10:23:43'),
(7, 'SLB-1005', 1005, 22, 'Abu Dhabi', '48', 0, '', '0500000000', 'Academy', '2020-02-24', '2020-03-26', '17:00,17:30,18:00,18:30,19:00,19:30', '', '', '', '', '0000-00-00', '00:00:00', '', 0, '2020-02-24 15:54:15', '2020-02-24 10:24:15');

-- --------------------------------------------------------

--
-- Table structure for table `sleague_ground_facility`
--

CREATE TABLE `sleague_ground_facility` (
  `facility_id` int(11) NOT NULL,
  `facility_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `del_status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sleague_ground_facility`
--

INSERT INTO `sleague_ground_facility` (`facility_id`, `facility_name`, `del_status`) VALUES
(1, 'Artificial grass', 1),
(2, 'Water', 1),
(3, 'Restroom', 1),
(4, 'Sand pitch', 1),
(5, 'Refreshments', 1),
(6, 'Ball', 0),
(7, 'Ball', 1),
(8, 'Changing Rooms', 0),
(9, 'Stadium Lights', 0),
(10, 'Grass: Authentic', 0),
(11, 'Grass: Artificial', 0),
(12, 'Mosque', 0),
(13, 'Food Stations', 0),
(14, 'Gaming Console Station', 1),
(15, 'Cafeteria', 0),
(16, 'Crowd Bleachers', 0),
(17, 'Crowd Bleachers', 1),
(18, 'Basketball Court', 0),
(19, 'Bibs', 0),
(20, 'كرة', 0),
(21, 'محطة الغذاء', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sleague_ground_size_duration`
--

CREATE TABLE `sleague_ground_size_duration` (
  `id` int(11) NOT NULL,
  `ground_id` int(11) NOT NULL,
  `size` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `slot` int(11) DEFAULT NULL COMMENT '60->30Mins,120->1Hour,180->1:30Mins,240->2Hour',
  `ground_sq_ft` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ground_price` double(10,2) DEFAULT NULL,
  `ground_discount` int(11) DEFAULT NULL,
  `after_discount_ground_price` double(10,2) DEFAULT NULL,
  `upto_players` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `del_status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sleague_ground_size_duration`
--

INSERT INTO `sleague_ground_size_duration` (`id`, `ground_id`, `size`, `slot`, `ground_sq_ft`, `ground_price`, `ground_discount`, `after_discount_ground_price`, `upto_players`, `del_status`) VALUES
(1, 1, '5*5', 0, '2500', 100.00, 5, 0.00, '11', 1),
(2, 2, '7*7', 60, '', 130.00, 0, 130.00, '', 0),
(3, 3, '7*7', 0, '', 180.00, 0, 0.00, '10', 0),
(4, 4, '7*7', 0, '', 180.00, 0, 0.00, '', 0),
(5, 10, '5*5', 0, '', 25.00, 5, 0.00, '', 1),
(6, 11, '7*7', 0, '', 250.00, 0, 0.00, '', 0),
(7, 13, '7*7', 60, '', 300.00, 20, 240.00, '', 0),
(8, 15, '7*7', 0, '', 400.00, 0, 0.00, '', 0),
(9, 16, '7*7', 0, '', 300.00, 0, 0.00, '', 0),
(10, 17, '5*5', 0, '', 300.00, 0, 0.00, '', 0),
(11, 13, '7*7', 60, '', 300.00, 20, 240.00, '14', 0),
(12, 13, '7*7', 60, '', 300.00, 20, 240.00, '14', 0),
(13, 13, '7*7', 60, '', 300.00, 20, 240.00, '14', 0),
(14, 19, '6*6', 60, '', 325.00, 20, 260.00, '12', 0),
(15, 19, '6*6', 60, '', 325.00, 20, 260.00, '12', 0),
(16, 19, '7*7', 60, '', 375.00, 20, 300.00, '14', 0),
(17, 5, '7*7', 0, '', 200.00, 0, 0.00, '', 0),
(18, 19, '7*7', 60, '', 375.00, 20, 300.00, '14', 0),
(19, 19, '7*7', 0, '', 375.00, 20, 0.00, '7', 1),
(20, 19, '6*6', 60, '', 325.00, 20, 260.00, '12', 0),
(21, 19, '6*6', 60, '', 325.00, 20, 260.00, '12', 0),
(22, 21, '5*5', 0, '', 210.00, 0, 0.00, '10', 0),
(23, 21, '7*7', 0, '', 330.00, 0, 0.00, '14', 0),
(24, 21, '8*8', 0, '', 578.00, 0, 0.00, '16', 0),
(25, 22, '11*11', 0, '', 788.00, 5, 0.00, '22', 1),
(26, 22, '7*7', 60, '', 400.00, 0, 400.00, '14', 0),
(27, 22, '8*8', 60, '', 460.00, 0, 460.00, '16', 0),
(28, 22, '9*9', 60, '', 610.00, 0, 610.00, '18', 0),
(29, 23, '7*7', 60, '', 295.00, 10, 265.50, '14', 0),
(30, 23, '7*7', 60, '', 295.00, 10, 265.50, '14', 0),
(31, 23, '11*11', 60, '', 500.00, 5, 475.00, '22', 0),
(32, 19, '4*4', 60, '', 200.00, 20, 160.00, '8', 0),
(33, 24, '6*6', 60, '', 200.00, 0, 200.00, '20', 0),
(34, 25, '6*6', 0, '', 6.00, 0, 0.00, '12', 0),
(35, 26, '6*6', 60, '', 280.00, 0, 280.00, '12', 0),
(36, 26, '7*7', 60, '', 330.00, 0, 330.00, '14', 0),
(37, 26, '8*8', 0, '', 580.00, 0, 0.00, '18', 1),
(38, 26, '7*7', 60, '', 330.00, 0, 330.00, '14', 0),
(39, 26, '7*7', 60, '', 330.00, 0, 330.00, '14', 0),
(40, 27, '7*7', 60, '', 200.00, 25, 150.00, '14', 0),
(41, 27, '6*6', 60, '', 130.00, 0, 130.00, '12', 0),
(42, 27, '6*6', 60, '', 120.00, 0, 120.00, '12', 0),
(43, 28, '8*8', 60, '', 200.00, 25, 150.00, '16', 0),
(44, 28, '5*5', 60, '', 130.00, 0, 130.00, '10', 0),
(45, 28, '6*6', 60, '', 180.00, 0, 180.00, '12', 0),
(46, 22, '7*7', 60, '', 400.00, 0, 400.00, '14', 0),
(47, 22, '7*7', 60, '', 400.00, 0, 400.00, '14', 0),
(48, 22, '7*7', 60, '', 400.00, 0, 400.00, '14', 0),
(49, 29, '6*6', 60, '', 150.00, 0, 150.00, '12', 0),
(50, 30, '8*8', 60, '', 150.00, 0, 150.00, '16', 0),
(51, 31, '6*6', 60, '', 300.00, 0, 300.00, '12', 0),
(52, 31, '6*6', 60, '', 300.00, 0, 300.00, '12', 0),
(53, 31, '8*8', 60, '', 500.00, 0, 500.00, '16', 0),
(54, 32, '7*7', 60, '', 100.00, 10, 90.00, '', 1),
(55, 32, '7*7(1)', 60, '', 100.00, 20, 80.00, '', 0),
(56, 32, '7*7(2)', 60, '', 100.00, 15, 85.00, '', 0),
(57, 32, '7*7', 60, '', 100.00, 25, 75.00, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sleague_payments`
--

CREATE TABLE `sleague_payments` (
  `pay_id` int(11) NOT NULL,
  `booking_id` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ground_id` int(11) DEFAULT NULL,
  `ground_owner_id` int(11) DEFAULT NULL,
  `player_id` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_amount` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `groundowner_amount` decimal(10,2) DEFAULT NULL,
  `sl_amount` decimal(10,2) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `payment_mode` int(11) NOT NULL COMMENT '1->On Line,2->Off Line',
  `payment_status` int(11) NOT NULL COMMENT '1->Paid,2->Un Paid',
  `cancel_status` int(11) NOT NULL DEFAULT '0' COMMENT '0-Approved, 1- Cancelled',
  `tracking_id` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `bank_ref_no` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sleague_payments`
--

INSERT INTO `sleague_payments` (`pay_id`, `booking_id`, `ground_id`, `ground_owner_id`, `player_id`, `payment_amount`, `groundowner_amount`, `sl_amount`, `payment_date`, `payment_mode`, `payment_status`, `cancel_status`, `tracking_id`, `bank_ref_no`) VALUES
(1, 'SL-1000', 3, 25, '1', '90', '90.00', '0.00', '2019-08-17', 2, 1, 1, '108009918672', '542572'),
(2, 'SL-1001', 3, 25, '1', '90', '90.00', '0.00', NULL, 2, 1, 1, '108009918900', '545183'),
(5, 'SL-1003', 3, 25, '1', '90', '90.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(6, '6', 3, 25, 'Vasan', '270', '270.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(7, 'SL-1005', 3, 25, '1', '90', '90.00', '0.00', NULL, 2, 1, 1, '108009919032', '546197'),
(9, 'SL-1007', 3, 25, '3', '90', '90.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(10, 'SL-1008', 4, 26, '1', '90', '90.00', '0.00', NULL, 2, 2, 1, NULL, NULL),
(11, 'SL-1009', 3, 25, '3', '180', '180.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(13, 'SL-1010', 3, 25, '1', '90', '90.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(14, 'SL-1011', 4, 26, '1', '90', '90.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(15, 'SL-1012', 2, 24, '3', '130', '126.10', '3.90', NULL, 1, 2, 0, NULL, NULL),
(16, 'SL-1014', 2, 24, '13', '260', '252.20', '7.80', NULL, 1, 2, 0, NULL, NULL),
(17, 'SL-1015', 2, 24, '1', '65', '63.05', '1.95', NULL, 2, 2, 1, NULL, NULL),
(18, 'SL-1016', 2, 24, '8', '195', '189.15', '5.85', NULL, 2, 2, 0, NULL, NULL),
(19, 'SL-1017', 2, 24, '18', '130', '126.10', '3.90', NULL, 1, 2, 0, NULL, NULL),
(20, 'SL-1018', 2, 24, '1', '65', '63.05', '1.95', NULL, 2, 2, 0, NULL, NULL),
(21, 'SL-1019', 2, 24, '8', '65', '63.05', '1.95', NULL, 2, 2, 0, NULL, NULL),
(22, 'SL-1020', 2, 24, '2', '65', '63.05', '1.95', NULL, 2, 2, 0, NULL, NULL),
(23, 'SL-1021', 2, 24, '2', '65', '63.05', '1.95', NULL, 1, 2, 0, NULL, NULL),
(24, 'SL-1022', 2, 24, '2', '65', '63.05', '1.95', NULL, 2, 2, 0, NULL, NULL),
(25, '33', 13, 35, 'Abdullah', '360', '334.80', '25.20', NULL, 2, 2, 0, NULL, NULL),
(26, 'SL-1030', 13, 35, '3', '240', '223.20', '16.80', NULL, 1, 2, 0, NULL, NULL),
(27, 'SL-1063', 17, 34, '78', '1800', '1800.00', '0.00', NULL, 2, 2, 1, NULL, NULL),
(28, 'SL-1064', 17, 34, '78', '5100', '5100.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(29, 'SL-1065', 17, 34, '84', '300', '300.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(30, 'SL-1066', 13, 35, '8', '120', '111.60', '8.40', NULL, 1, 2, 0, NULL, NULL),
(31, 'SL-1067', 13, 35, '8', '120', '111.60', '8.40', NULL, 2, 2, 0, NULL, NULL),
(44, 'SL-1068', 19, 36, '2', '96', '91.20', '4.80', NULL, 1, 2, 0, NULL, NULL),
(46, 'SL-1070', 13, 35, '107', '120', '111.60', '8.40', NULL, 1, 1, 0, '109011979557', '546890'),
(47, 'SL-1071', 13, 35, '107', '120', '111.60', '8.40', NULL, 1, 2, 0, NULL, NULL),
(50, 'SL-1074', 19, 36, '90', '96', '91.20', '4.80', NULL, 2, 2, 0, NULL, NULL),
(51, 'SL-1075', 19, 36, '90', '96', '91.20', '4.80', NULL, 1, 2, 0, NULL, NULL),
(52, 'SL-1076', 19, 36, '90', '96', '91.20', '4.80', NULL, 2, 2, 0, NULL, NULL),
(53, '96', 19, 36, 'ALDHAFRA SPORT CLUBE', '260', '260.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(54, 'SL-1078', 22, 37, '131', '230', '218.50', '11.50', NULL, 2, 2, 0, NULL, NULL),
(55, 'SL-1079', 23, 38, '131', '712.5', '676.88', '35.63', NULL, 2, 2, 0, NULL, NULL),
(58, 'SL-1080', 19, 36, '131', '130', '130.00', '0.00', NULL, 2, 2, 1, NULL, NULL),
(59, 'SL-1081', 13, 35, '131', '120', '111.60', '8.40', NULL, 2, 2, 1, NULL, NULL),
(60, 'SL-1082', 13, 35, '131', '120', '111.60', '8.40', NULL, 2, 2, 1, NULL, NULL),
(61, 'SL-1083', 22, 37, '149', '200', '190.00', '10.00', NULL, 2, 2, 0, NULL, NULL),
(62, 'SL-1084', 19, 36, '131', '390', '390.00', '0.00', NULL, 2, 2, 1, NULL, NULL),
(63, 'SL-1085', 19, 36, '90', '150', '150.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(64, 'SL-1086', 13, 35, '139', '120', '111.60', '8.40', NULL, 2, 2, 1, NULL, NULL),
(65, 'SL-1087', 19, 36, '131', '1200', '1200.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(66, 'SL-1088', 22, 37, '210', '200', '190.00', '10.00', NULL, 2, 2, 1, NULL, NULL),
(67, 'SL-1089', 22, 37, '210', '305', '289.75', '15.25', NULL, 2, 2, 0, NULL, NULL),
(68, 'SL-1090', 13, 35, '212', '120', '111.60', '8.40', NULL, 2, 2, 1, NULL, NULL),
(69, 'SL-1091', 22, 37, '213', '230', '218.50', '11.50', NULL, 2, 2, 1, NULL, NULL),
(70, 'SL-1092', 21, 37, '215', '210', '199.50', '10.50', NULL, 2, 2, 0, NULL, NULL),
(71, '114', 22, 37, 'Hamid Test', '400', '380.00', '20.00', NULL, 2, 2, 0, NULL, NULL),
(72, '115', 26, 42, 'M test', '825', '825.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(73, '116', 26, 42, 'SALLAH', '825', '825.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(74, '117', 26, 42, 'Sallah Almeri', '495', '495.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(75, 'SL-1097', 26, 42, '168', '140', '140.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(76, '119', 22, 37, 'Hamoodi', '1525', '1448.75', '76.25', NULL, 2, 2, 0, NULL, NULL),
(77, '120', 22, 37, 'Hamoodi', '1525', '1448.75', '76.25', NULL, 2, 2, 0, NULL, NULL),
(78, '121', 22, 37, 'Almoosawi', '400', '380.00', '20.00', NULL, 2, 2, 0, NULL, NULL),
(79, '122', 22, 37, 'Haitham', '400', '380.00', '20.00', NULL, 2, 2, 0, NULL, NULL),
(80, '123', 22, 37, 'Saleh Al Jaari', '400', '380.00', '20.00', NULL, 2, 2, 0, NULL, NULL),
(81, '124', 22, 37, 'Yusuf Alhammadi', '920', '874.00', '46.00', NULL, 2, 2, 0, NULL, NULL),
(82, '125', 22, 37, 'Hamoodi', '800', '760.00', '40.00', NULL, 2, 2, 0, NULL, NULL),
(83, '126', 22, 37, 'Hamoodi', '800', '760.00', '40.00', NULL, 2, 2, 0, NULL, NULL),
(84, '127', 22, 37, 'Salem Al Ameri', '400', '380.00', '20.00', NULL, 2, 2, 0, NULL, NULL),
(85, '128', 26, 42, 'Academy Manual', '660', '660.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(86, '129', 26, 42, 'Booking Manual', '990', '990.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(87, '130', 26, 42, 'Booking Manual', '660', '660.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(88, '131', 26, 42, 'Academy Manual', '660', '660.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(89, '132', 26, 42, 'Booking Manual', '660', '660.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(90, '133', 26, 42, 'Booking Manual', '1120', '1120.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(91, '134', 26, 42, 'Booking Manual', '1650', '1650.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(92, '135', 26, 42, 'Booking Manual', '1650', '1650.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(93, '136', 26, 42, 'Booking Manual', '1980', '1980.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(94, '137', 26, 42, 'Booking Manual', '1120', '1120.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(95, '138', 26, 42, 'Booking Manual', '1650', '1650.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(96, '139', 26, 42, 'Booking Manual', '660', '660.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(97, '140', 26, 42, 'Booking Manual', '660', '660.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(98, '141', 26, 42, 'Booking Manual', '560', '560.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(99, '142', 26, 42, 'Booking Manual', '840', '840.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(100, '143', 26, 42, 'Senior', '660', '660.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(101, '144', 26, 42, 'Senior', '660', '660.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(102, '145', 26, 42, 'Senior', '660', '660.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(103, '146', 26, 42, 'Jairo', '495', '495.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(104, '147', 26, 42, 'Jairo', '495', '495.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(105, '148', 26, 42, 'Jairo', '495', '495.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(106, '149', 28, 44, 'Ahmed', '150', '150.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(107, '150', 28, 44, 'Ahmed', '150', '150.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(108, '151', 28, 44, 'Mostafa', '180', '180.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(109, 'SL-1131', 19, 36, '90', '300', '300.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(110, '153', 22, 37, 'Dr. Fares', '610', '579.50', '30.50', NULL, 2, 2, 0, NULL, NULL),
(111, '154', 22, 37, 'Dr. Fares', '400', '380.00', '20.00', NULL, 2, 2, 0, NULL, NULL),
(112, '155', 22, 37, 'Dr. Fares', '400', '380.00', '20.00', NULL, 2, 2, 0, NULL, NULL),
(113, '156', 22, 37, 'Dr. Fares', '400', '380.00', '20.00', NULL, 2, 2, 0, NULL, NULL),
(114, '157', 22, 37, 'Al Musawi', '400', '380.00', '20.00', NULL, 2, 2, 0, NULL, NULL),
(115, '158', 22, 37, 'Abdulrahman', '400', '380.00', '20.00', NULL, 2, 2, 0, NULL, NULL),
(116, '159', 22, 37, 'Eissa', '400', '380.00', '20.00', NULL, 2, 2, 0, NULL, NULL),
(117, '160', 22, 37, 'Nawaf', '800', '760.00', '40.00', NULL, 2, 2, 0, NULL, NULL),
(118, '161', 22, 37, 'Nawaf', '800', '760.00', '40.00', NULL, 2, 2, 0, NULL, NULL),
(119, '162', 22, 37, 'Hamoodi', '800', '760.00', '40.00', NULL, 2, 2, 0, NULL, NULL),
(120, '163', 22, 37, 'Hamoodi', '800', '760.00', '40.00', NULL, 2, 2, 0, NULL, NULL),
(121, '164', 22, 37, 'Hamoodi', '1220', '1159.00', '61.00', NULL, 2, 2, 0, NULL, NULL),
(122, '165', 22, 37, 'haitham', '800', '760.00', '40.00', NULL, 2, 2, 0, NULL, NULL),
(123, '166', 22, 37, 'Eissa Mohammed', '400', '380.00', '20.00', NULL, 2, 2, 0, NULL, NULL),
(124, 'SL-1146', 26, 42, '257', '140', '140.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(125, '168', 30, 43, 'moataz', '150', '150.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(126, '169', 30, 43, 'moataz', '150', '150.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(127, '170', 30, 43, 'moataz', '1875', '1875.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(128, '171', 30, 43, 'moataz', '1725', '1725.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(129, '172', 26, 42, 'Abdallah Mohamed', '330', '330.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(130, '173', 26, 42, 'banyas', '330', '330.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(131, '174', 26, 42, 'FARAA', '330', '330.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(132, '175', 26, 42, 'HAWAD HASSAN', '330', '330.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(133, '176', 26, 42, 'MAJED', '330', '330.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(134, '177', 26, 42, 'JAWAD', '825', '825.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(135, '178', 26, 42, 'MAJED', '495', '495.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(136, '179', 26, 42, 'THABIT', '495', '495.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(137, '180', 26, 42, 'NASER BADER', '420', '420.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(138, '181', 26, 42, 'HAWAD AL ZUBEIDI', '495', '495.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(139, '182', 26, 42, 'HAWAD HASSAN', '330', '330.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(140, '183', 26, 42, 'MOHAMED AL KHATIRI', '330', '330.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(141, '184', 26, 42, 'HAMAD SALEM', '330', '330.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(142, '185', 26, 42, 'SALEJ JALAL', '330', '330.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(143, '186', 26, 42, 'QUSAY', '280', '280.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(144, '187', 26, 42, 'MAHMOUD ZAHRAN', '330', '330.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(145, '188', 26, 42, 'BANYAS', '330', '330.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(146, '189', 26, 42, 'MOHSEN', '280', '280.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(147, 'SL-1165', 26, 42, '237', '165', '165.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(148, 'SL-1166', 26, 42, '237', '165', '165.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(149, 'SL-1167', 13, 35, '269', '120', '111.60', '8.40', NULL, 1, 2, 0, NULL, NULL),
(150, 'SL-1168', 13, 35, '269', '120', '111.60', '8.40', NULL, 2, 2, 0, NULL, NULL),
(168, 'SL-1186', 24, 40, '8', '100', '95.00', '5.00', NULL, 1, 2, 0, NULL, NULL),
(170, 'SL-1188', 26, 42, '8', '330', '330.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(172, 'SL-1189', 28, 44, '7', '150', '150.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(173, 'SL-1190', 28, 44, '7', '150', '150.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(174, 'SL-1191', 28, 44, '7', '150', '150.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(175, 'SL-1192', 28, 44, '7', '150', '150.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(176, 'SL-1193', 28, 44, '7', '150', '150.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(177, 'SL-1194', 28, 44, '7', '150', '150.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(178, 'SL-1195', 30, 43, '7', '150', '150.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(179, 'SL-1196', 29, 43, '7', '150', '150.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(180, 'SL-1197', 29, 43, '7', '150', '150.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(181, 'SL-1198', 2, 24, '8', '130', '126.10', '3.90', NULL, 2, 2, 0, NULL, NULL),
(183, 'SL-1200', 24, 40, '7', '200', '190.00', '10.00', NULL, 1, 2, 0, NULL, NULL),
(184, 'SL-1201', 24, 40, '7', '200', '190.00', '10.00', NULL, 1, 2, 0, NULL, NULL),
(185, 'SL-1202', 28, 44, '7', '130', '130.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(186, 'SL-1203', 28, 44, '7', '130', '130.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(187, 'SL-1204', 28, 44, '7', '130', '130.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(188, 'SL-1205', 28, 44, '7', '130', '130.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(189, 'SL-1206', 23, 38, '7', '265.5', '252.23', '13.28', NULL, 1, 2, 0, NULL, NULL),
(190, 'SL-1207', 23, 38, '7', '265.5', '252.23', '13.28', NULL, 1, 2, 0, NULL, NULL),
(191, 'SL-1208', 19, 36, '7', '260', '260.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(194, 'SL-1211', 27, 43, '8', '75', '75.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(195, 'SL-1212', 27, 43, '8', '75', '75.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(196, 'SL-1213', 2, 24, '8', '65', '63.05', '1.95', NULL, 1, 2, 0, NULL, NULL),
(200, 'SL-1216', 30, 43, '7', '150', '150.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(201, 'SL-1217', 28, 44, '43', '75', '75.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(202, 'SL-1218', 28, 44, '43', '75', '75.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(203, 'SL-1219', 28, 44, '43', '75', '75.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(204, 'SL-1220', 28, 44, '43', '75', '75.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(205, 'SL-1221', 28, 44, '43', '75', '75.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(206, 'SL-1222', 27, 43, '8', '60', '60.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(211, 'SL-1225', 27, 43, '8', '75', '75.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(212, 'SL-1226', 28, 44, '7', '150', '150.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(213, 'SL-1227', 2, 24, '8', '65', '63.05', '1.95', NULL, 1, 2, 0, NULL, NULL),
(214, 'SL-1228', 19, 36, '7', '260', '260.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(215, 'SL-1229', 28, 44, '278', '270', '270.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(216, 'SL-1230', 28, 44, '278', '270', '270.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(217, 'SL-1231', 28, 44, '278', '270', '270.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(218, 'SL-1232', 28, 44, '278', '270', '270.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(219, 'SL-1233', 19, 36, '279', '600', '600.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(220, 'SL-1234', 19, 36, '279', '600', '600.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(221, 'SL-1235', 26, 42, '222', '330', '330.00', '0.00', NULL, 2, 2, 1, NULL, NULL),
(222, 'SL-1236', 26, 42, '222', '330', '330.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(223, '266', 26, 42, 'Bookingmamual', '660', '660.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(224, 'SL-1238', 2, 24, '8', '65', '63.05', '1.95', NULL, 2, 2, 1, NULL, NULL),
(225, 'SL-1239', 2, 24, '8', '65', '63.05', '1.95', NULL, 2, 2, 1, NULL, NULL),
(226, 'SL-1240', 2, 24, '8', '65', '63.05', '1.95', NULL, 2, 2, 1, NULL, NULL),
(227, 'SL-1241', 2, 24, '8', '65', '63.05', '1.95', NULL, 2, 2, 1, NULL, NULL),
(228, 'SL-1242', 24, 40, '288', '200', '190.00', '10.00', NULL, 2, 2, 0, NULL, NULL),
(229, 'SL-1243', 2, 24, '8', '130', '126.10', '3.90', NULL, 2, 2, 1, NULL, NULL),
(230, 'SL-1244', 2, 24, '8', '130', '126.10', '3.90', NULL, 2, 2, 1, NULL, NULL),
(231, 'SL-1245', 26, 42, '222', '280', '280.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(232, 'SL-1246', 26, 42, '295', '330', '330.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(233, 'SL-1247', 23, 38, '6', '398.25', '378.34', '19.91', NULL, 1, 2, 0, NULL, NULL),
(234, 'SL-1248', 28, 44, '303', '65', '65.00', '0.00', NULL, 1, 2, 0, NULL, NULL),
(235, 'SL-1249', 28, 44, '303', '65', '65.00', '0.00', NULL, 2, 2, 0, NULL, NULL),
(236, '279', 32, 46, 'Dhamotharan', '75', '67.50', '7.50', NULL, 2, 2, 0, NULL, NULL),
(237, 'SL-1251', 32, 46, '19', '75', '67.50', '7.50', NULL, 2, 2, 0, NULL, NULL),
(238, 'SL-1252', 32, 46, '19', '75', '67.50', '7.50', NULL, 2, 2, 0, NULL, NULL),
(239, 'SL-1253', 32, 46, '8', '80', '72.00', '8.00', NULL, 2, 2, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sleague_players`
--

CREATE TABLE `sleague_players` (
  `player_id` int(11) NOT NULL,
  `team_id` int(11) DEFAULT '0',
  `player_fname` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `player_lname` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `player_password` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `player_mnumber` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `player_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `player_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `player_city` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `player_address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `player_ratings` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `player_status` int(11) DEFAULT '0',
  `player_display` int(11) DEFAULT '0',
  `player_role` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `team_role` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `device_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `login_status` int(11) DEFAULT NULL COMMENT '0->Logged In , 1->Logged Out',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sleague_players`
--

INSERT INTO `sleague_players` (`player_id`, `team_id`, `player_fname`, `player_lname`, `player_password`, `player_mnumber`, `player_email`, `player_image`, `player_city`, `player_address`, `player_ratings`, `player_status`, `player_display`, `player_role`, `team_role`, `device_id`, `login_status`, `created_at`, `updated_at`) VALUES
(1, 32, 'Rajussss', NULL, 'e10adc3949ba59abbe56e057f20f883e', '9551392249', 'Raj@mailinator.com', '1571143858.jpg', NULL, NULL, NULL, 0, 0, 'Defender', 'Captain', 'sadasdad', 1, '2019-11-06 06:42:32', NULL),
(2, 30, 'Srini', NULL, 'e10adc3949ba59abbe56e057f20f883e', '8341774432', 'Srini@mailinator.com', '1566545508.jpg', NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 0, '2020-01-31 15:57:32', NULL),
(3, 3, 'Bharat', NULL, '7a1d3735c59edcca9532ee0cf4c3aadc', '0505497598', 'Mpbharat27691@gmail.com', '1571379715.jpg', NULL, NULL, NULL, 0, 0, 'Goal Keeper', 'Captain', 'sadasdad', 0, '2019-12-25 11:14:37', NULL),
(4, 0, 'PREM SANKAR ', NULL, '2c7133e368c18c64aeb9e211ac535f3b', '0507918926', 'asab@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', '', 'sadasdad', 1, '2019-09-10 12:24:06', NULL),
(5, 0, 'MPS', NULL, '09ba38887a013fb8001eff125532137c', '0564329229', 'premsankarmani@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', '', 'sadasdad', 1, '2020-02-11 18:01:50', NULL),
(6, 0, 'john earl', NULL, 'f96bab092691101646fa482f64c53c44', '0544564044', 'johnearlvalentin9@gmail.com', '1566110611.jpg', NULL, NULL, NULL, 0, 0, 'MidFielder', '', 'sadasdad', 0, '2019-08-22 12:07:03', NULL),
(7, 0, 'aamq', NULL, '107353555457dab1f2f8aa8d8ac0e020', '0503733353', 'aboood.1994@yahoo.com', '1566474700.jpg', NULL, NULL, NULL, 0, 0, 'Forwarder', '', 'sadasdad', 0, '2020-03-11 19:52:03', NULL),
(8, 29, 'Dhamo', NULL, 'e10adc3949ba59abbe56e057f20f883e', '8667632613', 'Dhamo@mailinator.com', '1581081536.jpg', NULL, NULL, NULL, 0, 0, 'Defender', 'Captain', 'sadasdad', 0, '2020-03-27 23:41:55', NULL),
(9, 31, 'Admh', NULL, '470f4f08e6afadb2e1f881b71da090f1', '0561351066', 'Hussain.alshaikh7@icloud.com', 'man.png', NULL, NULL, NULL, 0, 0, 'Defender', 'Captain', 'sadasdad', 0, '2019-10-24 06:52:25', NULL),
(10, 0, 'Sree Siranjevee', NULL, '4d9ee4f774ea29394b1e6638164ee1b5', '0551870914', 'siranjevee.ms@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', '', 'sadasdad', 0, '2019-09-26 11:12:09', NULL),
(11, 0, 'Anees', NULL, 'df0a1908ffd10918ebaf48441cabe0a2', '0529061086', 'aneesmohammed440@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', '', 'sadasdad', 0, '2019-09-10 12:24:06', NULL),
(12, 23, 'Nellai', NULL, 'e10adc3949ba59abbe56e057f20f883e', '8526562570', 'nellaidinesh5@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Goal Keeper', 'Captain', 'sadasdad', 0, '2019-09-12 12:06:20', NULL),
(13, 0, 'AQ', NULL, '9d618c05de9df27d72d07af161a5ef10', '0553733353', 'tato.1994@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2019-09-12 16:01:21', NULL),
(14, 3, 'Bu Muaath', NULL, '5c45ecd373d0c6d491f575cbdd37ff25', '0506430709', 'Mbaaqeel@hotmail.com', '1574962068.jpg', NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2019-11-28 17:27:57', NULL),
(15, 0, 'Santosh', NULL, '356e7c36aae9c8ea1d7c6067c9c057b6', '9985507825', 'xinthemobileapps@gmail.com', 'man.png', NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2019-09-26 09:08:46', NULL),
(16, 0, 'El Richard ', NULL, '6ae199a93c381bf6d5de27491139d3f9', '6941157987', 'Wuerorichard@mail.com', NULL, NULL, NULL, NULL, 0, 0, 'Goal Keeper', NULL, 'sadasdad', 0, '2019-09-27 05:39:59', NULL),
(17, 0, 'Arzama', NULL, '3b62bd7f14b6c17b3c6d41c9141f3f5b', '0508225519', 'Arzama@live.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2019-09-30 09:05:53', NULL),
(18, 0, 'Muaath Alhashmi', NULL, '25f9e794323b453885f5181f1b624d0b', '0529909696', 'Muaathalhashmi@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2019-10-11 20:03:42', NULL),
(19, 139, 'Developer', NULL, 'e10adc3949ba59abbe56e057f20f883e', '8667632613', 'dev@mailinator.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', 'Captain', 'sadasdad', 1, '2020-04-01 17:40:26', NULL),
(20, 0, 'Mayood fosh', NULL, '26b3d8c103dc518aba42936309c37d35', '0554667177', 'Mayoodfosh@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2019-11-22 14:48:28', NULL),
(21, 61, 'Saif', NULL, '59a92ab22e74e5a78be44f99f01d523b', '0507944422', 'Saif_hammadi797@hotmail.com', '1574440704.jpg', NULL, NULL, NULL, 0, 0, 'Forwarder', '', 'sadasdad', 0, '2019-12-24 12:06:26', NULL),
(22, 0, 'Eisa alblooshi', NULL, 'a8247fc72938f5b78375dbaa94cafc89', '0508987893', 'Eisa.h.alblooshi@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2019-11-22 19:03:36', NULL),
(23, 61, 'Ahmad Albloushi', NULL, 'c8c254bf0369b5db7f936ef8e8a78a93', '0501155269', 'a-7mx1@hotmail.com', '1576921105.jpg', NULL, NULL, NULL, 0, 0, 'MidFielder', 'Captain', 'sadasdad', 0, '2019-12-23 19:05:00', NULL),
(24, 3, 'Abdulla', NULL, '4e9d3826f298d985564ab4ca0580bc5c', '0508171728', 'aaa1980xxx@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2019-11-23 19:15:50', NULL),
(25, 35, 'yassersharawy', NULL, 'dd1791ae64ebbaa227ac7c13712546ff', '0508000192', 'yinfo83@gmail.com', '1575388785.jpg', NULL, NULL, NULL, 0, 0, 'MidFielder', 'Captain', 'sadasdad', 0, '2019-12-03 15:59:55', NULL),
(26, 36, 'Ahmedkhalil', NULL, '32aa2fd87338e241978c48ab319641bc', '0556883359', 'Ahmood.khalil7@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', 'Captain', 'sadasdad', 1, '2019-11-23 18:36:35', NULL),
(27, 36, 'Alimoosa', NULL, '58aca83d8aa5a5a3365c65eb4b16d747', '0528804401', 'Alimusa.alshehi@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 1, '2019-11-23 18:33:48', NULL),
(28, 57, 'Fares yaser', NULL, '778b3c8ce5c645dd58f7ac7281ad6271', '0526866105', 'faresyaser18@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', 'Captain', 'sadasdad', 0, '2019-12-05 02:38:01', NULL),
(29, 0, 'Hamed  saad', NULL, '388ec3e3fa4983032b4f3e7d8fcb65ad', '0561222993', 'Captian_hamed@yahoo.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2019-11-24 16:23:20', NULL),
(30, 0, 'Badranpogba ', NULL, '4a1a43710820b1f69787218ba4d3f7b3', '0582004026', 'Badran-dxb@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2019-11-25 10:01:35', NULL),
(31, 0, 'Salhani', NULL, '14ca77f3e5168862fcdf8538ed189d1c', '0526501577', 'salhaniomer@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2019-11-26 09:57:23', NULL),
(32, 0, 'Hamdan alhammadi', NULL, 'a2d4c139a314a65538a90cfec46917c0', '0545554262', 'Hamdan_hammadi797@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 1, '2019-12-06 10:03:58', NULL),
(33, 43, 'Moataz', NULL, '7c89f0298c6762258b7de07339e9aef1', '0521010766', 'moatazshahin5@gmail.com', '1574953699.jpg', NULL, NULL, NULL, 0, 0, 'MidFielder', 'Captain', 'sadasdad', 1, '2020-03-11 07:59:07', NULL),
(34, 38, 'Aboassil', NULL, '169b3facf1bdb700e681f3625c1e4d0e', '0555505140', 'ab0_assil@hotmail.com', '1575031899.jpg', NULL, NULL, NULL, 0, 0, 'Defender', 'Captain', 'sadasdad', 0, '2019-11-29 12:56:31', NULL),
(35, 39, 'Abdulla', NULL, '5d793fc5b00a2348c3fb9ab59e5ca98a', '0500000000', 'Xxxxx@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2019-11-29 17:05:06', NULL),
(36, 40, 'Aaqq', NULL, 'aac928cf0e83e197848caa1adb781d6f', '0503733335', 'AAQq@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2019-11-30 14:56:29', NULL),
(37, 41, 'AAQ', NULL, '79cfeb94595de33b3326c06ab1c7dbda', '0553753336', 'AAQ@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2019-12-01 14:10:55', NULL),
(38, 0, 'Nossa', NULL, 'a90ada06e1d14c5f6f49a34581c3a4b9', '0554855990', 'adfe.finance1992@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Goal Keeper', NULL, 'sadasdad', 0, '2019-11-30 17:32:10', NULL),
(39, 44, 'mohammed shaker ', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '0507908611', 'Fares@hot.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2019-12-01 14:12:44', NULL),
(40, 45, 'Aljwarih', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '0555858560', 'Aljwarih@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2019-12-01 14:18:15', NULL),
(41, 46, ' Nassar', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '0554855998', 'Nassar@hotmao.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2019-12-01 14:20:54', NULL),
(42, 47, 'Yousef', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '0547190858', 'Yousuf@hot.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2019-12-01 14:23:19', NULL),
(43, 48, 'Subait Khater', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '0509962222', 'SubaitKhater@hot.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 0, '2019-12-01 14:23:45', NULL),
(44, 49, 'Yaseen', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '0545271312', 'Yas@hot.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2019-12-01 14:26:47', NULL),
(45, 0, 'Alzubaidi', NULL, '85be4c4537a5c0e67a88905d9267a971', '0503860086', 'Alzubaidiae@hotmail.com', NULL, NULL, NULL, NULL, 1, 0, 'MidFielder', NULL, 'sadasdad', NULL, '2019-12-01 15:16:40', NULL),
(46, 50, 'Jofan', NULL, '34d0b7ff954e3df484dc405867c99557', '0555280767', 'Jofan@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', 'Captain', 'sadasdad', 1, '2019-12-01 15:20:55', NULL),
(47, 51, 'Alminhali', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '0500000001', 'Alminhali@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', 'Captain', 'sadasdad', 1, '2019-12-01 15:29:03', NULL),
(48, 52, 'Ahmed', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '0500000002', 'Ahmed@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', 'Captain', 'sadasdad', 1, '2019-12-01 15:32:53', NULL),
(49, 53, 'Abduljalil', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '0500000003', 'Abduljalil@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', 'Captain', 'sadasdad', 1, '2019-12-01 16:00:40', NULL),
(50, 59, 'Hamdan', NULL, '97de4dc70cb203ba2cf1ae051bbd997d', '0558089031', 'Mazkadkhoda@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 0, '2019-12-22 12:12:08', NULL),
(51, 54, 'Essam', NULL, '0aff4bfe848e9553bc01f91bdf621966', '0501220524', 'essam6270@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 0, '2019-12-03 13:01:43', NULL),
(52, 0, 'Salem', NULL, 'c466dd17bcc7b43530be23cdf38a002d', '0504328761', 'Dhdhdhdj@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2019-12-03 18:03:54', NULL),
(53, 55, 'Hhbanker', NULL, 'fb89dbc60add5e10a6409019bef24905', '0507827872', 'Hhbanker@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 0, '2019-12-03 19:16:49', NULL),
(54, 0, 'Omar', NULL, '9adc6da0f313a5b9372ced59754313a6', '0501516444', 'Imkggdd@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2019-12-03 19:42:53', NULL),
(55, 0, 'Hazza', NULL, 'f3206fcae2c8c7e850fc26376bb04243', '0561095800', 'Hazzamsn10@gmail.com', '1575405983.jpg', NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2019-12-03 20:46:30', NULL),
(56, 0, 'Sultan', NULL, '4db9f42d95ab2a26a31afceb4fbcf13f', '0502360051', 'Sultan.abdulla33@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2019-12-04 03:04:15', NULL),
(57, 0, 'Ibrahimselim', NULL, '8f2b6589e1ec4c5915c779d32927f31a', '0559915533', 'ibrahiimselim@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2019-12-04 03:57:49', NULL),
(58, 0, 'Mayed', NULL, 'cd33ef30577e7820431999b90d1069ea', '0503603609', 'mayedayoun@icloud.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2019-12-04 09:36:14', NULL),
(59, 80, 'Ahmed Ali', NULL, '3acecb95b147ad74a27ca47696d25463', '0501627462', 'Ahmed1400000000000@gmail.com', '1579209099.jpg', NULL, NULL, NULL, 0, 0, 'Goal Keeper', 'Captain', 'sadasdad', 0, '2020-01-16 21:16:12', NULL),
(60, 0, 'Alkurby', NULL, 'bcfe888baf09f2beafb34d98390c5262', '0529005778', 'm7amad_alkurby@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2019-12-04 12:04:37', NULL),
(61, 56, 'Salem alhammadi', NULL, 'e20ff1287f6c876bdd3db2ccd038b06a', '0567039555', 'Salem123ssmi@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 0, '2019-12-04 12:16:00', NULL),
(62, 56, 'Khalifa alsuwaidi ', NULL, '4f7462b0da9d5da28cde6ac87aa43239', '0508004262', 'S340gtz@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2019-12-04 12:19:42', NULL),
(63, 56, 'Suhail alharmi ', NULL, 'fa33ff24d4b5ced11bbda840c7ccad04', '0563131852', 'Alharmiss@mail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2019-12-04 12:21:18', NULL),
(64, 56, 'Abdulrahman Baobaid', NULL, '88d684aa236b3e80288802224c05b32e', '0563321401', 'baobaidabdulrahman@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2019-12-04 12:32:20', NULL),
(65, 0, 'Mohamed', NULL, '8bdce75f9b91b009d1b9cb0668824702', '0568733398', 'Tambash45@hotmail.com', '1575465806.jpg', NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2019-12-04 13:23:30', NULL),
(66, 0, 'Adil', NULL, 'bd838e07ef03cd933426e71bce4f42b8', '0508336003', 'Adil.mekkaoui1956@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Goal Keeper', NULL, 'sadasdad', 0, '2019-12-04 14:23:09', NULL),
(67, 0, 'Guruprasad', NULL, '0ba7b11510b2bc41da458fb23840c79b', '5157082860', 'Sgpharish@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Goal Keeper', NULL, 'sadasdad', 0, '2019-12-04 18:57:59', NULL),
(68, 0, 'Khadarjr', NULL, '0176863dfb6de473a6550f416e440bf4', '0505538426', 'Khadar-78@outlook.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2019-12-04 22:07:50', NULL),
(69, 0, 'Ahmed osama', NULL, 'fd66bdf23f151d4d1a2da7800e09334e', '0568613465', 'ahmado752@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2019-12-04 22:24:33', NULL),
(70, 0, 'obaidalmaktoum', NULL, '607ad5055e897de91a53005708098ac4', '0502960000', 'obaidalmaktoum@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2019-12-05 07:34:20', NULL),
(71, 0, 'AlHarthi', NULL, 'd110ffd3ae54f58eedae0b22b5ed6b4d', '0526363163', 'Sultanjoke@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2019-12-05 12:19:32', NULL),
(72, 38, 'Mohamed ', NULL, 'bc24d3e4eb3770830bc1867bc9e7b987', '0525405544', 'Hamodik107@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-01-13 02:26:17', NULL),
(73, 58, 'mmusawa', NULL, '7fe90a01d9b25b11c9bc22b8bc89914e', '0506627541', 'mmusawa@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 0, '2019-12-05 19:02:36', NULL),
(74, 0, 'Hassan alhammadi', NULL, '57980698b934c0a39d44042a4d663e60', '0585467464', 'Mr.small4uae@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Goal Keeper', NULL, 'sadasdad', 0, '2019-12-06 10:14:41', NULL),
(75, 0, 'Sultanad', NULL, 'b855e2a8521fb892719f481465134275', '0509191990', 'Alsultan10ad@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2019-12-09 07:43:21', NULL),
(76, 0, 'Ibrahim Mohammed', NULL, 'a74fb35897f7fbbbe6a461b2bd308ddf', '0568889232', 'Ibrahim.alsaffar1@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2019-12-13 08:42:49', NULL),
(77, 0, 'Mohammad', NULL, '0d733b5a91f1f970bf6c0a4f6fc67a31', '0544078055', 'Mohammad77788@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', '', 'sadasdad', 0, '2019-12-23 19:19:43', NULL),
(78, 0, 'Mohammad', NULL, 'a053096017e3a5e108eaf3d70fd2bb72', '0507215551', 'Burgaibaa@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2019-12-17 03:19:59', NULL),
(79, 0, 'MATAR', NULL, 'db592b1fd6fe620f1df06b266b2ed994', '0508345008', 'mataraltayer5@gmail.com', '1576857389.jpg', NULL, NULL, NULL, 0, 0, 'Forwarder', '', 'sadasdad', 0, '2019-12-23 19:19:43', NULL),
(80, 0, 'Hussain', NULL, '16dae8220dabd6b3d94b070e88fe224e', '0565301375', 'hussain.alsayegh2007@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', '', 'sadasdad', 0, '2019-12-23 19:19:43', NULL),
(81, 61, 'MohammadA', NULL, '55d03971a5b1e299002ee2606c6744bb', '0544497447', 'mataraltayer11@gmail.com', '1577020618.jpg', NULL, NULL, NULL, 0, 0, 'Defender', '', 'sadasdad', 0, '2019-12-24 15:38:35', NULL),
(82, 0, 'Hamdan', NULL, 'a2d4c139a314a65538a90cfec46917c0', '0507030265', 'Htfhtfht@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Goal Keeper', NULL, 'sadasdad', 1, '2019-12-20 20:45:21', NULL),
(83, 0, 'KnuckleDuster', NULL, '2aed4adbfcd2a8bf385d28545a89857b', '0565301376', 'J.alsayegh2005@gmail.com', 'man.png', NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 1, '2019-12-21 07:52:46', NULL),
(84, 96, 'Chadi', NULL, '0dacbb36ae81eda9978cf9c1e328b1d8', '0543846938', 'Shadykwid@gmail.com', '1579445041.jpg', NULL, NULL, NULL, 0, 0, 'MidFielder', 'Captain', 'sadasdad', 0, '2020-02-07 11:07:24', NULL),
(85, 0, 'Xxzzret', NULL, 'b6a86948982c0692da150aa87ed4134a', '0501423337', 'Ssert1212@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2019-12-28 22:25:00', NULL),
(86, 0, 'Almarzouqi', NULL, 'f50db83c94e1e725476295c6ee97d4b8', '0567909050', 'almarzouqisauod46@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-01-02 15:25:28', NULL),
(87, 0, 'Sultan', NULL, '3be2734fd294250bc86e57463f010fb3', '0502541972', 'boka_man@icloud.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-01-04 13:51:24', NULL),
(88, 0, 'Uvais', NULL, '60872905bc03694fa2ec8ce6b75ff76a', '0503787270', 'uvaisthiruvallur@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-01-07 19:27:15', NULL),
(89, 0, 'FCROMAD', NULL, '324fcda3a5c48ca67d6fa7cfcd2216f1', '0558004598', 'fcromad@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-01-09 06:44:53', NULL),
(90, 0, 'Fadi', NULL, '072332780ca7f21302e557ad485e83f1', '0504173675', 'fadiabumorra@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-01-09 13:53:50', NULL),
(91, 0, 'Ahmad ', NULL, '8b064cc3c13d3fc822f9e1b0cd770dd7', '0562332054', 'aa4392565@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-01-09 20:30:06', NULL),
(92, 62, 'IndianCaptain', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '9999999999', 'IndiancaptainS@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Goal Keeper', 'Captain', 'sadasdad', 1, '2020-01-10 11:35:27', NULL),
(93, 63, 'UAECaptain', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '9999999998', 'UAECaptainS@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-01-10 11:37:09', NULL),
(94, 64, 'SyriaCaptainS', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '9999999997', 'SyriaCaptainS@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-01-10 11:38:29', NULL),
(95, 65, 'TogoCaptainS', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '9999999996', 'TogoCaptainS@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-01-10 11:40:13', NULL),
(96, 66, 'FranceCaptainS', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '9999999995', 'FranceCaptainS@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-01-10 11:41:50', NULL),
(97, 67, 'SpainCaptainS', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '9999999994', 'SpainCaptainS@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-01-10 11:43:47', NULL),
(98, 68, 'MouritaniaCaptainS', NULL, 'add090288dfe129bb17c32845e438b19', '9999999992', 'MouritaniaCaptainS@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-01-10 11:45:16', NULL),
(99, 69, 'JordanCaptainS', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '9999999991', 'JordanCaptainS@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-01-10 11:46:29', NULL),
(100, 70, 'EnglandCaptainS', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '9999999990', 'EnglandCaptainS@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-01-10 11:48:52', NULL),
(101, 71, 'LebanonCaptainS', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '9999999989', 'LebanonCaptainS@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-01-10 11:50:05', NULL),
(102, 72, 'BrazilCaptainS', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '9999999987', 'BrazilCaptainS@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-01-10 11:51:34', NULL),
(103, 73, 'EgyptCaptainS', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '9999999888', 'EgyptCaptainS@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-01-10 11:52:39', NULL),
(104, 74, 'PalestineCaptainS', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '9999999986', 'PalestineCaptainS@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-01-10 11:53:48', NULL),
(105, 75, 'SudanCaptainS', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '9999999985', 'SudanCaptainS@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-01-10 11:54:58', NULL),
(106, 76, 'CameronCaptainS', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '9999999833', 'CameronCaptainS@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-01-10 11:55:59', NULL),
(107, 77, 'RoamaniaCaptainS', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '9999999982', 'RoamaniaCaptainS@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-02-07 10:55:53', NULL),
(108, 78, 'Justin Bosman', NULL, '869b4aec5ea57303f2cee1f2c346f9be', '0549932220', 'Justinbhbosman@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', 'Captain', 'sadasdad', 0, '2020-01-10 17:42:42', NULL),
(109, 0, 'MAZEN Hindawi ', NULL, '27159f4688d66334dd89fa71838e9bf4', '0559280207', 'tshefa77@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-01-11 18:52:54', NULL),
(110, 0, 'SalemAli', NULL, 'd1beeb862c2fe11a07b7f0a9e9912baa', '0507078080', 'Salem.2003.ali@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-01-12 15:36:31', NULL),
(111, 0, 'Ahmed', NULL, '1c95b9038bac1596705fcc19dae841b3', '0544614114', 'Tzz-@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-01-15 10:30:43', NULL),
(112, 0, 'Hasan Alhammadi', NULL, 'b258a97803295756c87f59acef025a4e', '0501211337', 'Bu-3li@msn.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-01-16 15:43:48', NULL),
(113, 79, 'Saud', NULL, 'c9402db7de43777c76b6a9ca0840cca2', '0503600563', 'Saudalmessabi@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 0, '2020-01-16 16:01:22', NULL),
(114, 0, 'Talal', NULL, '6575895d4b221afac4823065f83e5208', '0526126303', 'hassanfaisal268@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-01-17 07:06:56', NULL),
(115, 81, 'Mohammed', NULL, 'b2759f0168ebd6ed07d73a6445d09b5f', '0556839472', 'M7md.y10@gmail.com', 'man.png', NULL, NULL, NULL, 0, 0, 'Defender', 'Captain', 'sadasdad', 0, '2020-01-19 15:22:33', NULL),
(116, 0, 'Abdulaziz', NULL, 'adf6eeca6c607c46d3ea45a3cd2c5261', '0504843846', 'azeezabdul975@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-01-22 01:38:11', NULL),
(117, 0, 'Alawialali', NULL, '4af6d549fb5eb118d1ed4d4a8a0264d6', '0502192112', '3lawi.alali2005@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-01-24 14:44:18', NULL),
(118, 0, 'alisaeed', NULL, 'beac9a5c444904e4cd1449198610a11b', '0521881997', 'alialsffar26@gmail.com', '1579879965.jpg', NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-01-24 15:32:48', NULL),
(119, 82, 'Ali', NULL, 'e732a0a0ba23bccf93809f42b30a748e', '0503893337', 'Ali1alali1@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', 'Captain', 'sadasdad', 0, '2020-01-25 09:48:15', NULL),
(120, 0, 'Abdalla ', NULL, '0f663ce1a8cd7e4562e07a5d47cc90f9', '0509993789', 'Abdallauae-12@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-01-25 21:37:04', NULL),
(121, 0, 'Khalifa', NULL, '5d68ed85947ecc295a8ecb4f2d65191c', '0521070225', 'Brundo9595@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-01-28 19:07:20', NULL),
(122, 0, 'Alraessi', NULL, '2edad42dff1c0d3c55ca729986e4fd93', '0501111111', 'q@live.com', 'man.png', NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 1, '2020-01-29 08:11:12', NULL),
(123, 0, 'Abdulrahman Almansoori', NULL, 'ac3ae0af7198b5badf85fb4cf9310c31', '0552676886', 'Da7mon-77@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-01-29 09:58:13', NULL),
(124, 0, 'Xmnsr', NULL, '3c614ee5f048c3bf339182f4cda1b639', '0567772586', 'Mansourabusharib69@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Goal Keeper', NULL, 'sadasdad', 0, '2020-01-31 12:03:23', NULL),
(125, 0, 'sayyid afreed bp', NULL, '572139cb2464fe5fa1c4e2180cdefcff', '0562573237', 'sayyidafreed473@gmail.com', 'man.png', NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-01 12:39:52', NULL),
(126, 0, 'Abdulla alhammadi', NULL, '7e95cd2b36ab4caad07ce1d57b7b1b55', '0567848488', 'Abdullaalrousi1@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Goal Keeper', '', 'sadasdad', 0, '2020-03-02 21:14:13', NULL),
(127, 0, 'Mayed', NULL, '88ca2013c6350ccec919e7adc0eedd21', '0567637333', 'Mayed1996@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-01 15:26:21', NULL),
(128, 0, 'Hadif Zamzam', NULL, 'f4d47275f987c6b54adbb7877a84f0dd', '0529999596', 'hadifzamzam@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-02-01 15:54:31', NULL),
(129, 0, 'Omar abdulla', NULL, 'bae294c9434830196106405dc6f40ac8', '0561546555', '662513449@aths.ac.ae', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-01 16:27:20', NULL),
(130, 0, 'AHMEDALALI', NULL, '89bd280f2a4508c785a0a26cc2790f50', '0504744019', 'Ahmadalali504@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Goal Keeper', NULL, 'sadasdad', 0, '2020-02-01 18:34:40', NULL),
(131, 35, 'Mohammad', NULL, '3dca39f25e0e051442a4a5ecb55fe771', '0547215551', 'Mburqaiba@gmail.com', 'man.png', NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-09 15:03:34', NULL),
(132, 0, 'A', NULL, '7e92ddd86e991cbfb90ffaa861c1b542', '0501338765', 'abood2017000@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-01 22:09:10', NULL),
(133, 0, 'mrnehaim', NULL, '94e69dd85108665f60460f5dab4a8d32', '0508055802', 'mr.nehaim@hotmail.co', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-02-02 16:12:20', NULL),
(134, 0, 'Mohd', NULL, '75eefe183871d142b7337668eb5d3c34', '0508666227', 'A.d_m@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-02-03 06:52:02', NULL),
(135, 0, 'Hamad ', NULL, 'ea60d526b41f3aa9ecdb19dea0a3599f', '0503169911', 'Hamad.alhammadi88@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-03 19:19:50', NULL),
(136, 0, 'Mohd', NULL, '5f650533c49a002b04608b29c65438f4', '0501039105', 'Alamiiri.97@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-03 19:54:51', NULL),
(137, 0, 'Alikhaled', NULL, '9dfda2d4b907f1c44ad0788da9dc3ec6', '0556667197', 'ali9164916491649164@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-03 20:00:36', NULL),
(138, 0, 'Khalifaalmazmi', NULL, '0a925d350bcc638fd063c50b0f1debf7', '0509787315', 'khalifaalmazmi7@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-02-03 21:06:16', NULL),
(139, 0, 'A', NULL, '82a86f4d0a5d27e44963c5614ddfb480', '0502334476', 'Abdullahramadan10@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-04 01:38:21', NULL),
(140, 0, 'royalalzaabi', NULL, 'be4c73f1b5eedbedf40d1151f6025acf', '0508293939', 'khaled.alzaabi99@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-04 04:57:27', NULL),
(141, 0, 'Omaralalawi', NULL, '8f989c11524d9290f7e254eaf3620453', '0556451441', 'Ex3mooor@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-04 05:11:18', NULL),
(142, 84, 'Ammar albastaki', NULL, '7f0d2514e1ad16f9d05a6ad8962a4e63', '0555566795', 'H00371676@hct.ac.ae', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', 'Captain', 'sadasdad', 0, '2020-02-04 05:20:49', NULL),
(143, 0, 'Mubarak', NULL, '373ea2d342735142268e7d7f8b033948', '0508008485', 'Mubarakalyahyaei@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-02-04 05:49:50', NULL),
(144, 0, 'Bukhalaf', NULL, '58834cc1cd44ff8a7208d3c16a58f42d', '0506153636', 'ali.h79@hotmail.com', '1580798980.jpg', NULL, NULL, NULL, 0, 0, 'Forwarder', '', 'sadasdad', 0, '2020-02-04 06:58:50', NULL),
(145, 0, 'Obaid Alfalasi', NULL, 'bc201a79e1b9a624b37a0af1746184d6', '0501101051', 'O.albudoor@gmail.com', 'man.png', NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-04 08:01:36', NULL),
(146, 0, 'Abmaltamimi', NULL, '842bc42425078773ddde318f64eda263', '0544322280', 'Altemimi1992@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-04 09:01:23', NULL),
(147, 0, 'David De Gea', NULL, 'e7b2eac361086b0482a196bb87d40b59', '0503144545', 'd.degea@gmail.com', '1580807014.jpg', NULL, NULL, NULL, 0, 0, 'Goal Keeper', NULL, 'sadasdad', 0, '2020-02-04 09:05:15', NULL),
(148, 86, 'Muhammed Labba', NULL, '435093ef3e4e539faa1d04346a0b64df', '0561602294', 'mslabba@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Goal Keeper', 'Captain', 'sadasdad', 0, '2020-02-04 12:10:23', NULL),
(149, 0, 'Avdalh', NULL, 'c8d89e661a4dbc38307b59d0802c9f51', '0508831344', 'Avdalhsh@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-04 15:40:52', NULL),
(150, 0, 'Ahmed', NULL, '2fd7d9d79d757e3fe6929df06b79aece', '0502664424', 'hamoodalameri007@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-04 16:06:40', NULL),
(151, 87, 'Shaiba', NULL, 'cb9b7e4b6fd00d46047cfb60585cb729', '0562125544', 'Ahaaseees@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Goal Keeper', 'Captain', 'sadasdad', 0, '2020-02-04 18:23:18', NULL),
(152, 0, 'Alkaabi', NULL, 'bfcceca875fd3be9a0d0909326ab0348', '0505111949', 'Bo7maid782@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-06 12:33:38', NULL),
(153, 88, 'Salespory', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '0509999999', 'Salespory@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', 'Captain', 'sadasdad', 1, '2020-02-07 10:54:44', NULL),
(154, 89, 'AlKaramacaptain', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '9999999954', 'Alkaramacaptain@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-02-07 10:58:15', NULL),
(155, 90, 'Union ', NULL, 'ee38e26545765c2c81e9ac06f7ee697d', '0555555555', 'Union@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-02-07 10:58:19', NULL),
(156, 91, 'HamsAladiyaCaptain ', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '9999999239', 'HamsAladiyaCaptain@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-02-07 11:00:20', NULL),
(157, 92, 'Al rayan captain ', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '0588888888', 'Alrayan@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', 'Captain', 'sadasdad', 1, '2020-02-07 11:01:45', NULL),
(158, 93, 'ArnaCaptain', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '9999999956', 'Arnacaptain@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-02-07 11:02:05', NULL),
(159, 94, 'AinSahbCaptain', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '9999994644', 'AinSahbCaptain@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-02-07 11:05:39', NULL),
(160, 95, 'Shabab halab ', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '0522222222', 'Shababhalab@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', 'Captain', 'sadasdad', 1, '2020-02-07 11:04:56', NULL),
(161, 97, 'HolyGunsCaptain', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '9999565969', 'HolyGunsCaptain@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-02-07 11:09:09', NULL),
(162, 98, 'AlGarahCaptain', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '9999464946', 'AlGarah@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-02-07 11:10:30', NULL),
(163, 99, 'Al garah ', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '0522222221', 'Alagarh@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', 'Captain', 'sadasdad', 1, '2020-02-07 11:14:39', NULL),
(164, 100, 'BazlathCaptain', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '9999946464', 'Bazlath@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-02-07 11:13:33', NULL),
(165, 101, 'KhalidBinWaledCaptain', NULL, 'add090288dfe129bb17c32845e438b19', '9643495899', 'KhalidBinWaled@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-02-07 11:18:10', NULL),
(166, 0, 'Al araby ', NULL, 'ee38e26545765c2c81e9ac06f7ee697d', '0599999999', 'Alaraby@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Goal Keeper', NULL, 'sadasdad', 1, '2020-02-07 11:16:31', NULL),
(167, 102, 'Alarabi', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '0577777777', 'Alarabi@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Goal Keeper', 'Captain', 'sadasdad', 1, '2020-02-07 11:19:03', NULL),
(168, 103, 'AlFtwaCaptain', NULL, 'add090288dfe129bb17c32845e438b19', '9999946769', 'Alftwa@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-02-29 18:38:44', NULL),
(169, 104, 'Tiger syria ', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '0533333333', 'Tigersyria@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-02-11 16:04:53', NULL),
(170, 0, 'Hsn', NULL, 'aac69adb1d7b19f74bbec85932991375', '0504128128', 'ad4128128@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-07 12:32:30', NULL),
(171, 0, 'rashid', NULL, '6abe845eb5a9a177d34732942860fb5e', '0543118379', 'jazrawei16@icloud.com', NULL, NULL, NULL, NULL, 0, 0, 'Goal Keeper', NULL, 'sadasdad', 0, '2020-02-07 12:55:35', NULL),
(172, 0, 'Faria AlMulla', NULL, 'f6ace8d522dad082e7ea4bc59a114d06', '0553353003', 'froosfalah@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 1, '2020-02-07 20:54:05', NULL),
(173, 0, 'Hamdan', NULL, 'a6894db516bb0b3d114a0b2e671e0134', '0505222846', 'Hamdan_2796@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-02-08 16:28:02', NULL),
(174, 105, 'Ahj', NULL, '84526877187226c7dc1cd2e1272c4488', '0526000753', 'O0-o0o@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Goal Keeper', 'Captain', 'sadasdad', 0, '2020-02-08 18:26:28', NULL),
(175, 35, 'Uae', NULL, '1da56851443da889b2bf994ee37483fc', '0505110042', 'Jassim_6666@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-09 15:03:46', NULL),
(176, 0, 'Ramah', NULL, 'd495f5d9b9187b84453110248b18bc32', '0503260302', 'Ramah-hamo1@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-09 15:08:27', NULL),
(177, 0, 'Hamad', NULL, 'cd3f41dcaaf85d7eb954ca497e01ae1f', '0554466220', 'Hamadalhanaei@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-09 19:43:50', NULL),
(178, 0, 'OmarALIBRAHIM ', NULL, '5d49f008665209d4cc948004c09d241c', '0507072324', 'Omer3310@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Goal Keeper', NULL, 'sadasdad', 0, '2020-02-10 09:06:38', NULL),
(179, 0, 'mansour', NULL, 'a00f05f6eef161b70c563de38ba6a0ab', '0504467141', 'mansouralsaadi1@hotmail.com', 'man.png', NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-23 12:55:54', NULL),
(180, 0, 'Sultan', NULL, 'ec0963fc90c6b4dc2a01b94e3926c8b7', '0526337338', 'Sultanahmedalshehhi@gmail.com', 'man.png', NULL, NULL, NULL, 0, 0, 'Goal Keeper', NULL, 'sadasdad', 0, '2020-02-10 22:48:59', NULL),
(181, 0, 'Hamam alhamami', NULL, '4ca58e0b107bd4306a5dee389f6f3622', '0501192561', 'u6_-@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-11 02:23:55', NULL),
(182, 0, 'Kinan jammal ', NULL, '5edc0ddbf6093861f9ab982ba1e3a44c', '0501363555', 'Kenanko_16@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-02-11 06:54:55', NULL),
(183, 106, 'Captain marselia ', NULL, 'dcddb75469b4b4875094e14561e573d8', '0511111111', 'Captainmarselia@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', 'Captain', 'sadasdad', 1, '2020-02-11 16:08:26', NULL),
(184, 107, 'Captain Emperror', NULL, 'dcddb75469b4b4875094e14561e573d8', '0599999956', 'Captainemperror@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Goal Keeper', 'Captain', 'sadasdad', 1, '2020-02-11 16:11:47', NULL),
(185, 108, 'Captainrealmadrid', NULL, 'dcddb75469b4b4875094e14561e573d8', '0500000222', 'Captainrealmadrid@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-02-11 16:15:06', NULL),
(186, 109, 'Alameedcapatain', NULL, 'dcddb75469b4b4875094e14561e573d8', '0522222888', 'Alameedcapatain@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', 'Captain', 'sadasdad', 1, '2020-02-11 16:17:31', NULL),
(187, 110, 'El alamy captain', NULL, 'dcddb75469b4b4875094e14561e573d8', '0589999999', 'Elalamycaptain@gmil.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', 'Captain', 'sadasdad', 1, '2020-02-11 16:20:00', NULL),
(188, 111, 'El sharkcaptain', NULL, 'dcddb75469b4b4875094e14561e573d8', '0566666111', 'Elsharkcaptain@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', 'Captain', 'sadasdad', 1, '2020-02-11 16:22:01', NULL),
(189, 112, 'Eloloyeacaptain', NULL, 'dcddb75469b4b4875094e14561e573d8', '0599922211', 'Eloloyeacaptain@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-02-11 16:24:07', NULL),
(190, 113, 'Ajaxcaptain', NULL, 'dcddb75469b4b4875094e14561e573d8', '0566666666', 'Ajaxcaptain@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-02-14 10:48:00', NULL),
(191, 0, 'Abdulla', NULL, '84686feae4d67d1805eb6617798dfd9b', '0569292565', 'Abdulla90ad@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-11 17:48:42', NULL),
(192, 0, 'AhmadOmar', NULL, '82332c59e628414d0aa7bf672d2de5f9', '0555533373', 'A7mad23455@gmail.com', 'man.png', NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-12 18:52:47', NULL),
(193, 0, 'humaid ail', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '0503622265', 'Humaid384a@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-11 18:51:40', NULL),
(194, 0, 'Omar', NULL, '688b52e838597d0384bb3504968b14ca', '0501933404', 'Ors.55@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-12 13:10:30', NULL),
(195, 0, 'Hamdan', NULL, '22b6602927a086c133fc7cdf9a1c7fb9', '0554334432', 'Hsfedvvv@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-12 13:26:42', NULL),
(196, 0, 'Mohammad', NULL, 'c6c3424e8d2bb86336888ae5703b6a6f', '0505767626', 'ma5767626@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-12 17:50:34', NULL),
(197, 0, 'Ahmed', NULL, '133692a3bf43b5678ca227e889359c7f', '0561050777', 'a.7.mody@hotmail.com', 'man.png', NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-28 18:57:32', NULL),
(198, 0, 'Adham khadra', NULL, 'f1cbcfc25af723a0a64e6a5c95beeddf', '0551879143', 'Adham367781@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-12 19:57:26', NULL),
(199, 0, 'Mohammed', NULL, '25f9e794323b453885f5181f1b624d0b', '0509972991', 'MJ.alhosani@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-13 07:48:33', NULL),
(200, 0, 'ali ibrhaim', NULL, '095d7ac001c345e357148dba547cc2ea', '0558838831', 'alialmansoori837@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-02-13 07:51:39', NULL),
(201, 0, 'mohaibra', NULL, '9d65693ff697e4b4edee75a18bb9efbf', '0528838831', 'mielmansouri@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-13 07:52:21', NULL),
(202, 0, 'Mazin', NULL, 'de36cd0d38402433a1af2d0836723a23', '0509720050', 'Mazin4uae@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-14 07:32:12', NULL),
(203, 114, 'Clombia captain ', NULL, 'd3eb9a9233e52948740d7eb8c3062d14', '0533333331', 'Columbiacaptain@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', 'Captain', 'sadasdad', 1, '2020-02-14 10:49:52', NULL),
(204, 115, 'Pakistani captain', NULL, 'ae8b5aa26a3ae31612eec1d1f6ffbce9', '0501010101', 'Pakistantournament@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-02-14 10:53:01', NULL),
(205, 116, 'Yemen captain ', NULL, '22a4d9b04fe95c9893b41e2fde83a427', '0577777771', 'Yemen@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Goal Keeper', 'Captain', 'sadasdad', 1, '2020-02-14 10:54:55', NULL),
(206, 117, 'Algerie capatin', NULL, 'f1474baa2e1307801d26f87686fc5b75', '0324567890', 'Algerie@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', 'Captain', 'sadasdad', 0, '2020-02-14 10:56:18', NULL),
(207, 0, 'Moahmmed alhamed', NULL, '2ac9cb7dc02b3c0083eb70898e549b63', '0566734890', 'M.t.alhamed@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-16 06:29:14', NULL),
(208, 0, 'Abdalla', NULL, 'ab2a9de36cc1537ce8e2d09e7088b02d', '0561880069', 'bin.al5oor@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-02-16 06:54:10', NULL),
(209, 0, 'Rashid', NULL, 'c892b3770d3c4f5614071dbb7d31237b', '0551810811', 'Rashid-faisal@outlook.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-16 13:52:34', NULL),
(210, 0, 'Hamidshariff', NULL, '78a1e5afe8dfee0497a6541b8bedcc63', '0507201100', 'Hamidahmed0026@yahoo.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-17 17:04:17', NULL),
(211, 0, 'Salz', NULL, 'bf471e7de8e749f27c2934e81f3d6bfe', '0504228846', 'ainawy33@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-02-17 20:37:00', NULL),
(212, 0, 'Khamks', NULL, '85775ee24401308f3ed300b599466e7a', '0527717723', 'K.albusaeedi@me.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-18 11:06:55', NULL),
(213, 0, 'Msk', NULL, '8797adaaadca007903daa3d6f05d5057', '0502117576', 'Alshamsi_vip_991@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-18 18:28:00', NULL),
(214, 118, 'Aakash', NULL, '3ab5555baa05d546f43d29ccce361373', '8130140537', 'Source.aakash@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', 'Captain', 'sadasdad', 0, '2020-02-18 20:17:34', NULL),
(215, 0, 'Mohamed alshehhi', NULL, '0d1278118935a09df09c83d15f3eea05', '0508355001', 'Altheeb876@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-19 10:24:22', NULL),
(216, 120, 'Jameel', NULL, '42ce4fa6cbdb63cf15f33a0d73cb4d88', '0503677596', 'Sukhoo886@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 0, '2020-02-20 15:04:47', NULL),
(217, 0, 'Omar almansoori', NULL, 'b8054d23753f00ec8d30c42b7b217d5a', '0556135135', 'Omar.aaaa2003@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-22 13:18:57', NULL),
(218, 0, 'Renato sanches', NULL, 'c41a6bb94e403a9d282ad4cce4e20923', '0504986899', 'Kingfifa8484@gmail.com', '1582489287.jpg', NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-02-23 20:21:32', NULL),
(219, 0, 'Hassan', NULL, '79680f31878e1981520efbab8b859fcf', '0508987168', 'Hassanali_7@icloud.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-24 00:37:24', NULL),
(220, 0, 'Ralzaabi', NULL, '1a8fe40278b12c00a70b75bfd6b43ac9', '0501222123', 'Ralzaabi999@outlook.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-24 06:36:25', NULL),
(221, 121, 'ضهامو', NULL, 'e10adc3949ba59abbe56e057f20f883e', '8667632613', 'dhamu@mailinator.com', 'man.png', NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 1, '2020-02-24 12:18:47', NULL),
(222, 0, 'Salem', NULL, 'c9ce1ba797b200810bab1e046fa77f3b', '0508830588', 'A712@live.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-02-24 08:58:46', NULL),
(223, 0, 'Sultan', NULL, 'f4168617af6ae09529bb1a4541a69830', '0562222531', 'sultansalm315@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-24 12:37:35', NULL),
(224, 0, 'Rashid Fahad', NULL, '672804a28208b9ae012d1c92ba6ace09', '0567903639', 'rashid01fahad1234@gmail.com', 'man.png', NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-24 20:01:02', NULL),
(225, 0, 'Ali Aldahri', NULL, 'ffea70df04c9fd0401dc993c8ddb9ed4', '0565216967', 'aaldahri_20@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-24 20:45:12', NULL),
(226, 0, 'alhosani', NULL, 'd69cc0b06a98638f17a729ac40af177a', '0522727213', 'al.hosany2003@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Goal Keeper', NULL, 'sadasdad', 0, '2020-02-25 10:54:03', NULL),
(227, 122, 'Alhammadiyousif', NULL, '958c760fe161cbf82075905d6b97ea8d', '0561017000', 'alhammadiyousif911@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 0, '2020-02-25 12:13:33', NULL),
(228, 0, 'زايد', NULL, '8fc2338fb7bdd9d3dbf53db9f6abe7fe', '0547311819', 'Zayedmmm30@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-25 15:05:20', NULL),
(229, 0, 'Mohammedahmed', NULL, 'ccd4751966bc550870cc36d01f5e6aa8', '0503357050', 'Mohed6.10.2006@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-02-26 10:37:57', NULL),
(230, 0, 'Aboooooood', NULL, 'cd6e4341bc7c01115e81d07f0e02f533', '0562340480', 'Abdulrahman678222@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-26 19:02:10', NULL),
(231, 0, 'Hamad', NULL, '0f237501fb3af015fdea005d0249c02e', '0552956756', 'Hamadjameel770@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-28 05:48:20', NULL),
(232, 0, 'amsu', NULL, '4b81a16c30fbb1e2909d30e93f89acf5', '0503333034', 'amsu87@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-02-28 09:22:21', NULL),
(233, 0, 'Mohammed', NULL, '3b13316bc807fb4f1d7d20f1c5fb2b7c', '0567270070', 'Maalattar123456@gmail.cpm', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-28 09:22:39', NULL),
(234, 0, 'BUJABER', NULL, '8b5f1e2609adc4af357457fda84b1d00', '0527111796', 'N.K.88@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-02-28 09:32:27', NULL),
(235, 0, 'Soud', NULL, 'c8a8860e1f31f7eb253a18df44cc8eb4', '0503687755', 'Soud-66@live.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-28 09:33:16', NULL),
(236, 0, 'Ultrasboy', NULL, '373cd4114eda9fb739b5b730689fe178', '0567779959', 'Ahmedhero1995_@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-28 09:41:41', NULL),
(237, 0, 'Ahmed', NULL, '02c262fa5bfe05c90d47e22575fd30b1', '0562229707', 'Elshamsi_2010@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-28 09:44:58', NULL),
(238, 0, 'Waleed', NULL, '8056b89eea6780dc512a4f15a7f3d397', '0501015593', 'W-5665@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-28 09:45:56', NULL),
(239, 0, 'faisal', NULL, '69ef1f4520ae237e4eddc8da5a7fa9b8', '0566085855', 'fares2008@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-28 10:04:39', NULL),
(240, 0, 'Mrq', NULL, '347735550afd92d29fcdf34e4bba2607', '0562583344', 'Zqom12@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-28 10:05:55', NULL),
(241, 123, 'Khalifa', NULL, '97b08291fe1e20b3ca4694c4e559739e', '0504147461', 'Khalifajhfdg@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Goal Keeper', 'Captain', 'sadasdad', 1, '2020-02-28 10:36:14', NULL),
(242, 0, 'Mohammed', NULL, '9b88d8d44ab19c1bc5372ac3d14fdf80', '0506100316', 'buatscw@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-02-28 10:53:31', NULL),
(243, 124, 'Abdulrahman', NULL, '940a45b4b2475ac40561d528bf67b1e8', '0502558189', 'abdulrahman4390321@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', 'Captain', 'sadasdad', 0, '2020-02-28 12:04:45', NULL),
(244, 125, 'alsamahi', NULL, '1b22839f1109d8d9586ccc500978925e', '0557799896', 'alsemahi2001@hotmail.com', '1582893562.jpg', NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 0, '2020-02-28 12:42:11', NULL),
(245, 125, 'Aahmkh', NULL, 'e33edfbc209896524cab21ac578de8d9', '0567311549', 'Alkendi7078@mail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-28 15:00:53', NULL),
(246, 0, 'Maen', NULL, '0cf68486eb525158f50f41218198aa7f', '0502460264', 'Maen21277@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-02-28 15:38:25', NULL),
(247, 0, 'سلطان', NULL, '14d51dbf92cb3f9e72334baea27889e4', '0556700004', 'Alhammadisultan821@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-28 16:06:15', NULL),
(248, 0, 'Khalaf', NULL, '699bb485685618b0a66b4d4ff18d1a9f', '0558861688', 'Khalaf.binghaith@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-28 16:47:26', NULL);
INSERT INTO `sleague_players` (`player_id`, `team_id`, `player_fname`, `player_lname`, `player_password`, `player_mnumber`, `player_email`, `player_image`, `player_city`, `player_address`, `player_ratings`, `player_status`, `player_display`, `player_role`, `team_role`, `device_id`, `login_status`, `created_at`, `updated_at`) VALUES
(249, 0, 'Ahmed', NULL, 'cbda1edd938bbc7eabb182a3bda5f6e4', '0508844324', 'A.ibrahimoh10@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-29 04:32:01', NULL),
(250, 126, 'Ahmed', NULL, '9ba9a5b2e7b9501f59d9c8a536b8f453', '0544344878', 'Ahmed_wadeea123@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', 'Captain', 'sadasdad', 0, '2020-02-29 09:52:43', NULL),
(251, 0, 'Zero', NULL, 'acba5acbac15dcc542bc728c49b59fde', '0505655333', 'Hammod2544@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-02-29 10:06:39', NULL),
(252, 0, 'Alsuwaidi', NULL, '2819799aa34e6c1a00c8c0695e67eb0f', '0502722722', 'akbalsuwaidi@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-29 11:06:02', NULL),
(253, 0, 'Obaid', NULL, '2b89567f11880ecad30c8e2b30b9ac87', '0527272443', 'Obaid.king@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-29 11:41:36', NULL),
(254, 0, 'Yaqoub', NULL, 'aebb76d0ac2534db697c5bb1a1c94ad4', '0544405218', 'Mr.joker316399@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 1, '2020-02-29 12:50:25', NULL),
(255, 0, 'BLEED', NULL, 'eccce614ce2de083c7ae74dd023889a3', '0564466611', 'Salem2727@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-29 14:41:52', NULL),
(256, 0, 'Test', NULL, '827ccb0eea8a706c4c34a16891f84e7b', '9999999464', 'Test@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-29 18:40:39', NULL),
(257, 0, 'Ahmed', NULL, 'e95658bd61e399f9977dc0787ee415a4', '0507062003', 'Al.ahmedali.al@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-02-29 18:40:54', NULL),
(258, 0, 'Mohd', NULL, 'a59f349d80e5a54931700dc657cb3115', '0503353887', 'Callmee26@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-02-29 20:28:47', NULL),
(259, 0, 'Mohammed', NULL, '28d1427d26659fdc261cde035ed46f57', '0501661413', 'Ban-ali-77@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-02-29 20:37:04', NULL),
(260, 0, 'مانع', NULL, '6daad817256c0a0400f1e3c14d86cf87', '0543666220', 'manea-theking@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-03-01 11:38:20', NULL),
(261, 0, 'Rashed', NULL, 'b60c306f62fbc07820dd607b17968aa2', '0564520004', 'Childishprof@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-03-01 17:14:36', NULL),
(262, 0, 'عبدالرحمن', NULL, '44dc905bfb748957b703a3b747c0735f', '0507057057', 'Praws1@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-03-01 17:47:48', NULL),
(263, 0, 'Marouane', NULL, '637f2a4ec6859cad4ad4143f5f9f62b3', '0521767143', 'Marouaneaminejaouhari@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-03-01 18:27:34', NULL),
(264, 0, 'ابراهيم', NULL, '945c27e30362b200e014b8413d6da8f9', '0568750061', 'ebrahimalmansoori67@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-03-02 06:37:43', NULL),
(265, 0, 'Yaser', NULL, 'd80cf557317f3abaf9ea04fc3b51d38d', '0562409999', 'Nos4404@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-03-02 12:33:42', NULL),
(266, 0, 'Mohammed', NULL, '3ab50d1d68ab2f93ddfc756bb8d45967', '0558133445', 'M7m7ho@gmali.com', NULL, NULL, NULL, NULL, 0, 0, 'Goal Keeper', NULL, 'sadasdad', 0, '2020-03-02 15:24:13', NULL),
(267, 0, 'عبدالرحمن', NULL, '28e0b688b1887869a1af7cdabd788d30', '0553883992', 'ah.alhosani@icloud.com', 'man.png', NULL, NULL, NULL, 0, 0, 'Defender', '', 'sadasdad', 0, '2020-03-12 03:51:55', NULL),
(268, 0, 'Ahm', NULL, 'e5f6693afd3279b3b69e44799efd8e32', '0508696300', 'Ahmedmohamed.1995@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-03-03 10:11:03', NULL),
(269, 0, 'Mohammed', NULL, '161ebd7d45089b3446ee4e0d86dbcf92', '0069954782', 'belalbb@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Goal Keeper', NULL, 'sadasdad', 0, '2020-03-04 08:07:39', NULL),
(270, 0, 'Saleh', NULL, 'e54321ef50fab7936e0a45efe8c43258', '0564207670', 'Salehaal3li@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-03-04 18:31:14', NULL),
(271, 0, 'عبدالرحمن', NULL, '7f451461d49785bd82a8e48dbc66c5cf', '0566707764', 'a.jamal2399@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-03-05 14:44:12', NULL),
(272, 0, 'Mohammed', NULL, '5eaba94ad8b03de63b0c23f65c4be7c5', '0561115600', 'Malameri8060@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-03-05 15:57:43', NULL),
(273, 0, 'kalhammadi', NULL, '83f0267745401040ca104db2c5ba0a5d', '0556110122', 'hammadi1996@live.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-03-05 19:51:21', NULL),
(274, 128, 'Saif', NULL, 'ff6689752957bf9d7606a716873d4448', '0564709979', 'saif07almaz@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Goal Keeper', 'Captain', 'sadasdad', 0, '2020-03-06 09:07:12', NULL),
(275, 0, 'Ali', NULL, '434c1bb77f11082b175ff4a6295f64fc', '0563215272', 'Alseyabii_99@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-03-07 16:46:50', NULL),
(276, 0, 'AhmedOmar', NULL, 'ed36c2b690f236a4529db4d406707039', '0528000266', 'sowalf10@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-03-08 12:27:31', NULL),
(277, 0, 'Alketbi', NULL, 'f0d49bbe64d08143d40ce1ab06c5b728', '0503170704', 'Alktbiccr7@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-03-08 13:21:36', NULL),
(278, 0, 'Streetleague', NULL, 'dcddb75469b4b4875094e14561e573d8', '0501234589', 'Streetleague@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 1, '2020-03-11 07:43:07', NULL),
(279, 0, 'AlZaabi', NULL, '4eec69b5e60328201c3d9e0d0c20997a', '0505323456', 'Yjz2002@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-03-09 07:46:53', NULL),
(280, 0, 'Fahadsaid', NULL, 'a975f3259cbd83629835f0e0d01d4c3a', '0501279294', 'Hawen.95@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Goal Keeper', NULL, 'sadasdad', 0, '2020-03-09 18:45:10', NULL),
(281, 0, 'Saif', NULL, '87064159aa6580285a51c36f821ca46e', '0501523925', 'Saifalhaithami10@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-03-10 16:05:55', NULL),
(282, 129, 'Hamdanovic', NULL, '18068d02a46ee8616dd738cbe182c790', '0522466452', 'Hamdan7422236@hotmail.com', '1583858148.jpg', NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 0, '2020-03-10 16:35:52', NULL),
(283, 130, 'Mostafashahin', NULL, '5ecf1dd91c77df61b6259f9a058445dd', '0501235468', 'moatazhady7@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', 'Captain', 'sadasdad', 0, '2020-03-11 08:07:48', NULL),
(284, 0, 'Zol', NULL, '7bde95532b886f71671410c027844408', '0567226484', 'Zoolxgg1@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-03-11 21:01:05', NULL),
(285, 0, 'Aam', NULL, '887328df2afeeebb60355755d256e3f5', '0557776888', '3xalmustaki@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-03-11 23:03:38', NULL),
(286, 0, 'Mohammedalhadi', NULL, '2d285d0cac98897bc3120c43e251fe44', '0529749689', 'mohammmedomar956@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-03-12 03:08:51', NULL),
(287, 131, 'MOHAMMAD ', NULL, '31ea4832035927ec7a84b0045db3d6bc', '0525338327', 'mahmoodhaider41@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', 'Captain', 'sadasdad', 0, '2020-03-12 17:39:21', NULL),
(288, 0, 'Hassan ', NULL, 'd2e91c5e26879a243c0c1011e8ae0c3b', '0564553666', 'Hassanalhosani211@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-03-12 16:46:48', NULL),
(289, 132, 'Mohamed', NULL, '0ee7a8c60b721ef21d7232918d6b3056', '0566000866', 'Alaydaroos77@gmail.com', '1584088013.jpg', NULL, NULL, NULL, 0, 0, 'Defender', 'Captain', 'sadasdad', 0, '2020-03-13 08:29:07', NULL),
(290, 133, 'Hza3iii', NULL, '0cdf0e4c23e203221244d70e2534f871', '0502006363', 'Alharazihazza@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', 'Captain', 'sadasdad', 0, '2020-03-13 18:04:45', NULL),
(291, 134, 'Mansour', NULL, 'ef90841110b6f88e5680f7e7d07e9e50', '0569223000', 'Malzarooni47@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 0, '2020-03-13 19:15:06', NULL),
(292, 135, 'Adel', NULL, 'd5753b4e7c4a453418dd9658bf6b8a4e', '0526259222', 'aaljneibi@ega.ae', NULL, NULL, NULL, NULL, 0, 0, 'Defender', 'Captain', 'sadasdad', 0, '2020-03-13 21:20:55', NULL),
(293, 0, 'Boza', NULL, '759aa44d4eaeb57f963541be1bdcada0', '0556656754', 'Hamodinho_M@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-03-13 21:55:09', NULL),
(294, 0, 'Yousif', NULL, 'c774cdf0d4ef51fef4a033d312c7fd56', '0568388583', 'Yousif.2003@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-03-13 23:18:19', NULL),
(295, 0, 'Khalid ', NULL, '25f9e794323b453885f5181f1b624d0b', '0504384124', 'jsgh@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-03-15 15:08:01', NULL),
(296, 0, 'Salem', NULL, '8b8752efcc3ee5d75e395f754379fc7f', '0566647808', 'Salemaljas119@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-03-16 23:52:37', NULL),
(297, 0, 'Hamad', NULL, '9a8a85fae074de1497594f5f29756527', '0504929556', 'Hamadhaidarali@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Goal Keeper', NULL, 'sadasdad', 0, '2020-03-17 01:28:41', NULL),
(298, 136, 'AHMED', NULL, '771ac9b8f0cfe4881ae4f65503863ccc', '0544440136', 'Aljazeera76@outlook.com', NULL, NULL, NULL, NULL, 0, 0, 'MidFielder', 'Captain', 'sadasdad', 0, '2020-03-18 12:52:35', NULL),
(299, 0, 'Zuhair', NULL, '372785dafdbece313dfcbf7b3a77d52d', '0563205524', 'Mmalnuimi@hotmail.com', '1584540090.jpg', NULL, NULL, NULL, 0, 0, 'MidFielder', NULL, 'sadasdad', 0, '2020-03-18 14:01:48', NULL),
(300, 137, 'الوحدة ', NULL, '1ec2f25cefe2cccab5266376d5b7f0d8', '0509669448', 'R01810146@ra.ac.ae', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', 'Captain', 'sadasdad', 0, '2020-03-19 00:56:54', NULL),
(301, 0, 'Khamis', NULL, '6a732765a731827b05d5e78443c51c2d', '0544800912', '5meez2004@gmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Defender', NULL, 'sadasdad', 0, '2020-03-20 00:53:45', NULL),
(302, 0, 'Humood1', NULL, 'b8db449cd4e91ce23a600ce4455cb378', '0524010010', 'humood1@hotmail.com', NULL, NULL, NULL, NULL, 0, 0, 'Forwarder', NULL, 'sadasdad', 0, '2020-03-21 10:43:20', NULL),
(303, 138, 'Numan', NULL, 'e10adc3949ba59abbe56e057f20f883e', '0505573607', 'numangillani@outlook.com', NULL, NULL, NULL, NULL, 0, 0, 'Goal Keeper', 'Captain', 'sadasdad', 0, '2020-04-01 14:05:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sleague_review_rating`
--

CREATE TABLE `sleague_review_rating` (
  `id` int(25) NOT NULL,
  `player_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ground_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `review` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `rating` int(25) DEFAULT NULL,
  `comments` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0->Active,2->InActive',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sleague_review_rating`
--

INSERT INTO `sleague_review_rating` (`id`, `player_id`, `ground_id`, `review`, `rating`, `comments`, `status`, `created_at`, `modified_at`) VALUES
(1, '1', '3', 'Nice', 3, 'vasan', 0, '2019-08-17 12:29:29', NULL),
(2, '2', '2', 'good', 5, 'vasan', 0, '2019-08-17 12:36:36', NULL),
(3, '13', '2', 'Nice', 5, NULL, 0, '2019-09-12 16:04:34', NULL),
(4, '7', '2', '', 5, NULL, 0, '2019-11-11 18:31:40', NULL),
(5, '24', '13', 'ملاعب جميلة وسعر طيب وخدمة مميزة ةيوجد مسبح كبير ومكان للإستحمام وتغيير الملابس', 5, NULL, 0, '2019-11-24 16:20:17', NULL),
(6, '29', '13', 'ملاعب مميزة وبراكن متوفرةوخدمة مميزة وسعر رائع \nمع توافر غرف تبديل ملابس وحمامات ', 5, NULL, 0, '2019-11-24 16:25:47', NULL),
(7, '34', '13', 'أكادمية محترمة وملاعب جيدا \n\nبالتوفيق ', 5, NULL, 0, '2019-11-29 13:03:01', NULL),
(8, '57', '13', 'They have most of sport activities in one place ', 5, NULL, 0, '2019-12-04 04:00:40', NULL),
(9, '107', '19', 'Excellent ground conditions! ', 5, NULL, 0, '2020-01-12 15:38:13', NULL),
(10, '7', '22', 'Perfect', 5, NULL, 0, '2020-02-23 19:59:07', NULL),
(11, '298', '26', 'Is good', 5, NULL, 0, '2020-03-18 12:48:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sleague_team_rating`
--

CREATE TABLE `sleague_team_rating` (
  `id` int(25) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `team_rating` int(11) DEFAULT NULL,
  `team_review` varchar(1500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sleague_team_rating`
--

INSERT INTO `sleague_team_rating` (`id`, `team_id`, `team_rating`, `team_review`) VALUES
(1, 23, 5, 'Good team'),
(2, 34, 5, 'My casiun team ❤️'),
(3, 56, 5, 'Best team'),
(4, 35, 1, 'M\n'),
(5, 3, 0, 'تلعبون ضدنا اذا اعماركم من 14 الى 16');

-- --------------------------------------------------------

--
-- Table structure for table `sleague_tourn_awards`
--

CREATE TABLE `sleague_tourn_awards` (
  `id` int(11) NOT NULL,
  `award_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `del_status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sleague_tourn_awards`
--

INSERT INTO `sleague_tourn_awards` (`id`, `award_name`, `del_status`) VALUES
(1, 'Penalty king', 0),
(2, 'Goal keeper', 0),
(3, 'ملوك الأهداف', 0),
(4, 'المربى المذهل في وسط المدينة ، لا يوفر ملعب كرة القدم هذا ملعبًا لكرة القدم فحسب ، بل يوفر أيضًا الترفيه للمقيمين بالقرب من الملعب. كما يضم ملعبًا لكرة السلة حيث يمكن للأطفال من جميع مناحي الحياة اللعب. إنها بالتأكيد واحدة من الأماكن التي يمكن ممارستها في', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sleague_tourn_register_teams`
--

CREATE TABLE `sleague_tourn_register_teams` (
  `id` int(11) NOT NULL,
  `tour_id` int(11) DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1->Register,2->Not Register'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sleague_tourn_register_teams`
--

INSERT INTO `sleague_tourn_register_teams` (`id`, `tour_id`, `team_id`, `status`) VALUES
(9, 5, 3, 2),
(10, 5, 40, 2),
(11, 5, 38, 1),
(12, 5, 41, 2),
(13, 5, 3, 2),
(14, 5, 43, 2),
(17, 6, 29, 1),
(18, 5, 35, 1),
(19, 5, 44, 1),
(20, 5, 45, 1),
(21, 5, 46, 1),
(22, 5, 47, 1),
(23, 5, 49, 1),
(24, 5, 48, 1),
(25, 5, 50, 1),
(26, 5, 51, 1),
(27, 5, 52, 1),
(28, 5, 53, 1),
(29, 6, 30, 1),
(40, 9, 62, 1),
(41, 9, 63, 1),
(42, 9, 64, 1),
(43, 9, 65, 1),
(44, 9, 66, 1),
(45, 9, 67, 1),
(46, 9, 68, 1),
(47, 9, 69, 1),
(48, 9, 70, 1),
(49, 9, 71, 1),
(50, 9, 72, 1),
(51, 9, 73, 1),
(52, 9, 74, 1),
(53, 9, 75, 1),
(54, 9, 76, 1),
(55, 9, 77, 1),
(56, 10, 88, 1),
(57, 10, 92, 1),
(58, 10, 90, 1),
(59, 10, 95, 1),
(60, 10, 89, 1),
(61, 10, 91, 1),
(62, 10, 93, 1),
(63, 10, 94, 1),
(64, 10, 96, 1),
(65, 10, 98, 1),
(66, 10, 97, 1),
(67, 10, 103, 1),
(68, 10, 100, 1),
(69, 10, 101, 1),
(70, 10, 102, 1),
(71, 10, 104, 1),
(72, 12, 106, 1),
(73, 12, 107, 1),
(74, 12, 108, 1),
(75, 12, 109, 1),
(76, 12, 110, 1),
(77, 12, 111, 1),
(78, 12, 112, 1),
(79, 12, 113, 1),
(80, 13, 62, 1),
(81, 13, 63, 1),
(82, 13, 64, 1),
(83, 13, 65, 1),
(84, 13, 66, 1),
(85, 13, 68, 1),
(86, 13, 69, 1),
(87, 13, 71, 1),
(88, 13, 72, 1),
(89, 13, 73, 1),
(90, 13, 75, 1),
(91, 13, 74, 1),
(92, 13, 114, 1),
(93, 13, 115, 1),
(94, 13, 116, 1),
(95, 13, 117, 1),
(103, 14, 129, 1),
(105, 14, 133, 1),
(106, 14, 135, 1),
(107, 14, 136, 1),
(108, 14, 137, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sl_add_team_notification`
--

CREATE TABLE `sl_add_team_notification` (
  `at_noti_id` int(11) NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `player_id` int(11) DEFAULT NULL,
  `noti_status` int(11) NOT NULL DEFAULT '0' COMMENT '0->Req_sent,1->Accept,2->Reject',
  `notification_status` int(11) NOT NULL COMMENT '0->Unseen,1->Seen'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sl_add_team_notification`
--

INSERT INTO `sl_add_team_notification` (`at_noti_id`, `team_id`, `player_id`, `noti_status`, `notification_status`) VALUES
(1, 1, 6, 1, 1),
(4, 3, 7, 0, 1),
(5, 3, 6, 0, 1),
(53, 19, 8, 1, 0),
(56, 20, 8, 1, 0),
(58, 21, 8, 1, 0),
(63, 28, 2, 0, 0),
(64, 28, 16, 0, 0),
(67, 29, 1, 2, 1),
(68, 29, 1, 2, 1),
(69, 29, 1, 2, 1),
(70, 29, 1, 2, 1),
(71, 29, 1, 2, 1),
(72, 29, 1, 2, 1),
(73, 29, 1, 2, 1),
(74, 29, 1, 2, 1),
(75, 29, 1, 2, 1),
(76, 29, 1, 2, 1),
(77, 29, 1, 2, 1),
(78, 29, 1, 2, 1),
(79, 29, 1, 0, 1),
(81, 36, 27, 1, 1),
(82, 61, 78, 0, 0),
(83, 85, 127, 0, 0),
(84, 127, 32, 0, 0),
(85, 127, 52, 0, 0),
(86, 127, 54, 0, 0),
(87, 127, 56, 0, 0),
(88, 127, 58, 0, 0),
(89, 127, 60, 0, 0),
(90, 127, 66, 0, 0),
(91, 127, 71, 0, 0),
(92, 127, 77, 0, 0),
(93, 127, 76, 0, 0),
(94, 127, 79, 0, 0),
(95, 127, 80, 0, 0),
(96, 35, 16, 0, 0),
(97, 35, 15, 0, 0),
(98, 35, 13, 0, 0),
(99, 138, 58, 0, 0),
(100, 138, 7, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sl_split_payment`
--

CREATE TABLE `sl_split_payment` (
  `sp_id` int(11) NOT NULL,
  `amount_spliter_id` int(11) DEFAULT NULL,
  `split_amount` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sp_player_id` int(11) DEFAULT NULL,
  `sp_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sms_content_field`
--

CREATE TABLE `sms_content_field` (
  `sms_content_field_id` int(11) NOT NULL,
  `sms_content_field_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `english` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `arabic` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sms_settings`
--

CREATE TABLE `sms_settings` (
  `id` int(11) NOT NULL,
  `api_key` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sender_id` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `text_type` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_mobile_code` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_settings`
--

INSERT INTO `sms_settings` (`id`, `api_key`, `sender_id`, `text_type`, `country_mobile_code`, `updated_at`) VALUES
(1, 'C20023945cdaa05feb7163.74004062', 'Strt League', 'unicode', '971', '2020-04-02 18:06:26');

-- --------------------------------------------------------

--
-- Table structure for table `smtp_settings`
--

CREATE TABLE `smtp_settings` (
  `id` int(11) NOT NULL,
  `smtp_host` varchar(256) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `smtp_username` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_password` varchar(256) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `smtp_port` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_from` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_from_email` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smtp_settings`
--

INSERT INTO `smtp_settings` (`id`, `smtp_host`, `smtp_username`, `smtp_password`, `smtp_port`, `smtp_from`, `smtp_from_email`, `updated_at`) VALUES
(1, '獭', 'streetleague.me@gmail.com', '却', '587', 'Street League', 'streetleague.me@gmail.com', '2019-07-25 09:39:36');

-- --------------------------------------------------------

--
-- Table structure for table `tourn_match_result`
--

CREATE TABLE `tourn_match_result` (
  `id` int(11) NOT NULL,
  `sno` int(11) NOT NULL,
  `tour_id` int(11) DEFAULT NULL,
  `team_id` int(11) DEFAULT NULL,
  `match_no` int(11) NOT NULL,
  `team_group` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `played_games` varchar(11) DEFAULT NULL,
  `points` int(55) DEFAULT NULL,
  `position` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `wins` varchar(11) DEFAULT NULL,
  `loss` varchar(11) DEFAULT NULL,
  `tie` varchar(11) DEFAULT NULL,
  `goals_scored` int(11) DEFAULT NULL,
  `goals_scored_against` int(11) DEFAULT NULL,
  `goals_differences` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourn_match_result`
--

INSERT INTO `tourn_match_result` (`id`, `sno`, `tour_id`, `team_id`, `match_no`, `team_group`, `played_games`, `points`, `position`, `wins`, `loss`, `tie`, `goals_scored`, `goals_scored_against`, `goals_differences`) VALUES
(1, 8, 5, 44, 0, 'A', '4', 12, '1', '4', '0', '0', 14, 1, '13'),
(2, 10, 5, 38, 0, 'A', '5', 6, '5', '2', '3', '0', 5, 13, '-5'),
(3, 9, 5, 45, 0, 'A', '4', 6, '4', '2', '2', '0', 11, 13, '-2'),
(4, 11, 5, 46, 0, 'A', '5', 4, '5', '1', '3', '1', 12, 18, '-6'),
(5, 12, 5, 47, 0, 'A', '4', 1, '6', '0', '3', '1', 6, 13, '-7'),
(6, 8, 5, 49, 0, 'A', '3', 9, '2', '3', '0', '0', 12, 4, '10'),
(7, 20, 5, 53, 0, 'B', '5', 1, '6', '0', '4', '1', 6, 16, '-10'),
(8, 14, 5, 48, 0, 'B', '5', 11, '1', '3', '0', '2', 16, 5, '11'),
(9, 17, 5, 52, 0, 'B', '5', 7, '4', '2', '2', '1', 7, 6, '-4'),
(10, 16, 5, 35, 0, 'B', '4', 7, '3', '2', '1', '1', 9, 3, '6'),
(11, 15, 5, 50, 0, 'B', '5', 11, '2', '3', '0', '2', 12, 7, '5'),
(12, 19, 5, 51, 0, 'B', '4', 1, '5', '0', '3', '1', 6, 9, '-8'),
(13, 3, 5, 41, 0, '', '', 0, '', '', '', '', 0, 0, ''),
(14, 4, 5, 44, 0, 'SemiF', '1', 1, '1', '1', '0', '0', 3, 0, '3'),
(15, 5, 5, 49, 0, 'SemiF', '1', 1, '2', '1', '0', '0', 0, 0, '0'),
(16, 6, 5, 48, 0, 'SemiF', '1', 0, '3', '0', '0', '0', 0, 0, '0'),
(17, 7, 5, 50, 0, 'SemiF', '1', 0, '4', '0', '0', '0', 0, 3, '-3'),
(18, 1, 5, 44, 0, 'Finals', '1', 1, '1', '', '', '', 4, 3, '1'),
(19, 2, 5, 49, 0, 'Finals', '1', 0, '2', '', '', '', 3, 4, '-1'),
(20, 1, 6, 29, 0, 'A', '8', 10, '1', '8', '0', '0', 20, 8, '8'),
(21, 2, 7, 29, 1, 'A', '5', 8, '1', '1', '1', '0', 8, 11, '-3'),
(22, 1, 7, 30, 1, 'A', '4', 11, '', '0', '0', '1', 1, 1, '0'),
(23, 3, 7, 33, 2, 'A', '2', 10, '', '1', '0', '0', 10, 4, '6'),
(24, 0, 8, 29, 2, 'A', '2', 6, '', '2', '0', '0', 9, 3, '6'),
(25, 0, 8, 33, 1, 'A', '1', 0, '', '0', '1', '0', 1, 4, '-3'),
(26, 0, 8, 30, 2, 'A', '1', 0, '', '0', '1', '0', 2, 5, '-3'),
(27, 0, 8, 32, 3, 'B', '2', 4, '', '1', '0', '1', 9, 6, '5'),
(28, 0, 8, 43, 4, 'B', '1', 1, '', '0', '0', '1', 2, 2, '2'),
(29, 0, 8, 3, 3, 'B', '1', 0, '', '0', '1', '0', 4, 7, '-3'),
(30, 0, 8, 29, 5, 'SemiF', '1', 3, '', '1', '0', '0', 2, 1, '1'),
(31, 0, 8, 32, 5, 'SemiF', '1', 0, '', '0', '1', '0', 1, 2, '-1'),
(32, 0, 8, 33, 6, 'SemiF', '1', 0, '', '0', '1', '0', 0, 2, '-2'),
(33, 0, 8, 43, 6, 'SemiF', '1', 3, '', '1', '0', '0', 2, 0, '2'),
(34, 0, 8, 29, 7, 'Finals', '1', 3, '', '1', '0', '0', 2, 1, '1'),
(35, 0, 8, 43, 7, 'Finals', '1', 0, '', '0', '1', '0', 1, 2, '-1'),
(36, 0, 9, 63, 17, 'A', '3', 3, '', '1', '2', '0', 5, 9, '-4'),
(37, 0, 9, 64, 18, 'A', '3', 7, '', '2', '0', '1', 9, 6, '4'),
(38, 0, 9, 65, 17, 'A', '3', 7, '', '2', '0', '1', 6, 2, '5'),
(39, 0, 9, 66, 18, 'A', '3', 0, '', '0', '3', '0', 4, 7, '-3'),
(40, 0, 9, 67, 19, 'B', '3', 4, '', '1', '1', '1', 4, 4, '2'),
(41, 0, 9, 68, 20, 'B', '3', 6, '', '2', '1', '0', 5, 4, '1'),
(42, 0, 9, 62, 19, 'B', '3', 3, '', '1', '2', '0', 3, 7, '-4'),
(43, 0, 9, 69, 20, 'B', '3', 4, '', '1', '1', '1', 8, 5, '5'),
(44, 0, 9, 70, 21, 'C', '3', 7, '', '2', '0', '1', 9, 2, '9'),
(45, 0, 9, 71, 22, 'C', '3', 1, '', '0', '2', '1', 2, 8, '-4'),
(46, 0, 9, 72, 21, 'C', '3', 1, '', '0', '2', '1', 2, 11, '-7'),
(47, 0, 9, 73, 22, 'C', '3', 7, '', '1', '1', '1', 10, 2, '10'),
(48, 0, 9, 74, 23, 'D', '3', 5, '', '1', '0', '2', 7, 6, '5'),
(49, 0, 9, 75, 24, 'D', '3', 4, '', '1', '1', '1', 8, 8, '3'),
(50, 0, 9, 76, 23, 'D', '3', 1, '', '0', '2', '1', 6, 11, '-2'),
(51, 0, 9, 77, 24, 'D', '3', 5, '', '1', '0', '2', 9, 5, '8'),
(52, 0, 9, 77, 28, 'SemiF', '1', 0, '', '0', '1', '0', 0, 0, '0'),
(53, 0, 9, 70, 28, 'SemiF', '1', 1, '', '1', '0', '0', 0, 0, '0'),
(54, 0, 9, 73, 27, 'SemiF', '2', 1, '', '1', '0', '0', 2, 1, '1'),
(55, 0, 9, 74, 27, 'SemiF', '2', 0, '', '0', '1', '0', 1, 2, '-1'),
(56, 0, 9, 64, 26, 'SemiF', '1', 0, '', '0', '1', '0', 0, 0, '0'),
(57, 0, 9, 68, 26, 'SemiF', '1', 1, '', '1', '0', '0', 0, 0, '0'),
(58, 0, 9, 65, 25, 'SemiF', '1', 0, '', '0', '1', '0', 1, 1, '0'),
(59, 0, 9, 69, 25, 'SemiF', '1', 1, '', '1', '0', '0', 1, 1, '0'),
(60, 0, 9, 73, 33, 'Finals', '1', 1, '', '1', '0', '0', 3, 2, '1'),
(61, 0, 9, 69, 33, 'Finals', '1', 0, '', '0', '1', '0', 2, 3, '-1'),
(62, 0, 10, 88, 17, 'A', '3', 9, '', '3', '0', '0', 15, 3, '12'),
(63, 0, 10, 90, 18, 'A', '3', 4, '', '1', '1', '1', 4, 6, '-2'),
(64, 0, 10, 92, 17, 'A', '3', 3, '', '1', '2', '0', 6, 7, '-1'),
(65, 0, 10, 95, 18, 'A', '3', 1, '', '0', '2', '1', 4, 13, '-9'),
(66, 0, 10, 89, 19, 'B', '3', 9, '', '2', '1', '0', 17, 1, '16'),
(67, 0, 10, 91, 12, 'B', '2', 3, '', '2', '0', '0', 10, 3, '7'),
(68, 0, 10, 93, 19, 'B', '3', 0, '', '0', '3', '0', 1, 23, '-22'),
(69, 0, 10, 94, 11, 'B', '2', 3, '', '1', '1', '0', 4, 5, '-1'),
(70, 0, 10, 96, 20, 'C', '3', 7, '', '2', '0', '1', 7, 3, '4'),
(71, 0, 10, 98, 21, 'C', '3', 1, '', '0', '2', '1', 8, 17, '-9'),
(72, 0, 10, 102, 20, 'C', '3', 6, '', '2', '1', '0', 10, 3, '7'),
(73, 0, 10, 104, 21, 'C', '3', 2, '', '0', '1', '2', 5, 7, '-2'),
(74, 0, 10, 97, 23, 'D', '3', 3, '', '1', '2', '0', 6, 10, '-4'),
(75, 0, 10, 103, 24, 'D', '3', 4, '', '1', '1', '1', 8, 6, '2'),
(76, 0, 10, 100, 23, 'D', '3', 1, '', '0', '2', '1', 6, 8, '-2'),
(77, 0, 10, 101, 24, 'D', '3', 9, '', '3', '0', '0', 10, 6, '4'),
(78, 0, 10, 88, 30, 'QuaterF', '2', 2, '', '2', '0', '0', 6, 0, '6'),
(79, 0, 10, 96, 27, 'QuaterF', '3', 1, '', '1', '2', '0', 2, 7, '-5'),
(80, 0, 10, 103, 27, 'QuaterF', '1', 0, '', '0', '1', '0', 1, 2, '-1'),
(81, 0, 10, 88, 30, 'SemiF', '1', 1, '', '1', '0', '0', 3, 0, '3'),
(82, 0, 10, 96, 30, 'SemiF', '1', 0, '', '0', '1', '0', 0, 3, '-3'),
(83, 0, 10, 88, 32, 'Finals', '1', 0, '', '0', '1', '0', 3, 4, '-1'),
(84, 0, 10, 89, 32, 'Finals', '1', 1, '', '1', '0', '0', 4, 3, '1'),
(85, 0, 10, 89, 31, 'SemiF', '1', 1, '', '1', '0', '0', 4, 1, '3'),
(86, 0, 10, 101, 31, 'SemiF', '1', -16, '', '0', '1', '0', 1, 4, '-3'),
(87, 0, 11, 29, 1, 'A', '1', 3, '', '1', '0', '0', 3, 0, '3'),
(88, 0, 11, 30, 1, 'A', '1', 0, '', '0', '1', '0', 0, 3, '-3'),
(89, 0, 11, 30, 2, 'Finals', '1', 1, '', '1', '0', '0', 3, 2, '1'),
(90, 0, 11, 29, 2, 'Finals', '1', 0, '', '0', '1', '0', 2, 3, '-1'),
(91, 0, 12, 106, 9, 'A', '3', 5, '', '1', '0', '2', 7, 4, '3'),
(92, 0, 12, 107, 10, 'A', '3', 3, '', '1', '2', '0', 3, 11, '-8'),
(93, 0, 12, 108, 10, 'A', '3', 1, '', '0', '2', '1', 2, 13, '-11'),
(94, 0, 12, 109, 9, 'A', '3', 7, '', '2', '0', '1', 20, 4, '16'),
(95, 0, 12, 110, 8, 'B', '3', 4, '', '1', '1', '1', 6, 7, '-1'),
(96, 0, 12, 111, 3, 'B', '3', 5, '', '1', '0', '2', 6, 4, '2'),
(97, 0, 12, 112, 8, 'B', '3', 4, '', '1', '1', '1', 5, 5, '0'),
(98, 0, 12, 113, 11, 'B', '3', 2, '', '0', '1', '2', 4, 5, '-1'),
(99, 0, 13, 63, 16, 'A', '3', 4, '', '1', '1', '1', 5, 5, '0'),
(100, 0, 13, 74, 10, 'A', '2', 2, '', '1', '0', '1', 3, 2, '1'),
(101, 0, 13, 65, 10, 'A', '3', 3, '', '0', '0', '3', 3, 3, '0'),
(102, 0, 13, 72, 9, 'A', '2', 1, '', '0', '1', '1', 3, 4, '-1'),
(103, 0, 13, 64, 12, 'B', '3', 5, '', '1', '0', '2', 5, 1, '4'),
(104, 0, 13, 68, 19, 'B', '3', 7, '', '2', '0', '1', 7, 2, '5'),
(105, 0, 13, 69, 14, 'C', '2', 2, '', '0', '0', '2', 4, 4, '0'),
(106, 0, 13, 73, 20, 'C', '3', 7, '', '2', '0', '1', 6, 1, '5'),
(107, 0, 13, 116, 0, 'C', '2', 1, '', '0', '1', '1', 1, 4, '-3'),
(108, 0, 13, 114, 20, 'C', '3', 2, '', '0', '1', '2', 4, 6, '-2'),
(109, 0, 13, 71, 15, 'D', '3', 4, '', '2', '1', '0', 3, 2, '1'),
(110, 0, 13, 75, 17, 'D', '3', 3, '', '1', '2', '0', 5, 5, '0'),
(111, 0, 13, 66, 4, 'B', '4', 1, '', '0', '3', '1', 2, 11, '-9'),
(112, 0, 13, 62, 4, 'B', '2', 1, '', '1', '1', '0', 2, 2, '0'),
(113, 0, 13, 117, 17, 'D', '3', 0, '', '0', '3', '0', 0, 7, '-7'),
(114, 0, 13, 62, 18, 'A', '1', 0, '', '0', '1', '0', 0, 6, '-6'),
(115, 0, 13, 64, 18, 'A', '1', 6, '', '1', '0', '0', 6, 0, '6'),
(116, 0, 13, 115, 15, 'D', '3', 9, '', '3', '0', '0', 6, 0, '6'),
(117, 0, 13, 64, 30, 'QuaterF', '1', 1, '', '1', '0', '0', 4, 2, '2'),
(118, 0, 13, 74, 30, 'QuaterF', '1', 0, '', '0', '1', '0', 2, 4, '-2'),
(119, 0, 13, 69, 33, 'QuaterF', '1', 1, '', '1', '0', '0', 2, 1, '1'),
(120, 0, 13, 115, 33, 'QuaterF', '1', 0, '', '0', '1', '0', 1, 2, '-1'),
(121, 0, 13, 63, 31, 'QuaterF', '1', 0, '', '0', '1', '0', 0, 2, '-2'),
(122, 0, 13, 68, 31, 'QuaterF', '1', 1, '', '1', '0', '0', 2, 0, '2'),
(123, 0, 13, 73, 34, 'QuaterF', '1', 1, '', '1', '0', '0', 2, 0, '2'),
(124, 0, 13, 75, 34, 'QuaterF', '1', 0, '', '0', '1', '0', 0, 2, '-2'),
(125, 0, 13, 73, 35, 'SemiF', '1', 1, '', '1', '0', '0', 3, 0, '3'),
(126, 0, 13, 64, 35, 'SemiF', '1', 0, '', '0', '1', '0', 0, 3, '-3'),
(127, 0, 13, 69, 36, 'SemiF', '1', 1, '', '1', '0', '0', 4, 3, '1'),
(128, 0, 13, 68, 36, 'SemiF', '1', 0, '', '0', '1', '0', 3, 4, '-1'),
(129, 0, 13, 73, 38, 'Finals', '1', 1, '', '1', '0', '0', 5, 4, '1'),
(130, 0, 13, 69, 38, 'Finals', '1', 0, '', '0', '1', '0', 4, 5, '-1'),
(131, 0, 13, 69, 21, 'D', '1', 3, '', '1', '0', '0', 1, 0, '1'),
(132, 0, 13, 116, 21, 'D', '1', 0, '', '0', '1', '0', 0, 1, '-1'),
(133, 0, 12, 109, 13, 'SemiF', '1', 1, '', '1', '0', '0', 2, 0, '2'),
(134, 0, 12, 112, 13, 'SemiF', '1', 0, '', '0', '1', '0', 0, 2, '-2'),
(135, 0, 12, 106, 14, 'SemiF', '1', 0, '', '0', '1', '0', 0, 1, '-1'),
(136, 0, 12, 111, 14, 'SemiF', '1', 1, '', '1', '0', '0', 1, 0, '1'),
(137, 0, 7, 121, 1, 'A', '1', 1, '', '0', '0', '1', 1, 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tourn_match_schedule`
--

CREATE TABLE `tourn_match_schedule` (
  `tourn_match_id` int(11) NOT NULL,
  `tour_id` int(11) DEFAULT NULL,
  `booking_code` varchar(55) NOT NULL,
  `book_code` int(11) NOT NULL,
  `groups` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `match_number` int(11) DEFAULT NULL,
  `team1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `team2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ground_id` int(11) DEFAULT NULL,
  `ground_size` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `match_status` int(11) NOT NULL COMMENT '1->Completed,0->Not Completed'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourn_match_schedule`
--

INSERT INTO `tourn_match_schedule` (`tourn_match_id`, `tour_id`, `booking_code`, `book_code`, `groups`, `match_number`, `team1`, `team2`, `date`, `time`, `ground_id`, `ground_size`, `match_status`) VALUES
(1, 5, 'SL-1032', 0, 'A', 1, '51', '53', '2019-12-02', '10:00', 13, '7', 0),
(2, 5, 'SL-1033', 0, 'A', 4, '47', '49', '2019-12-02', '10:00', 13, '7', 0),
(3, 5, 'SL-1034', 0, 'B', 2, '48', '52', '2019-12-02', NULL, 13, '7', 0),
(4, 5, 'SL-1035', 0, 'A', 3, '44', '38', '2019-12-02', NULL, 13, '7', 0),
(5, 5, 'SL-1036', 0, 'A', 6, '48', '51', '2019-12-02', '10:30', 13, '11', 0),
(6, 5, 'SL-1037', 0, 'B', 5, '35', '50', '2019-12-02', '10:30', 13, '7', 0),
(7, 5, 'SL-1038', 0, 'A', 7, '46', '45', '2019-12-02', '10:30', 13, '12', 0),
(8, 5, 'SL-1039', 0, 'A', 8, '44', '47', '2019-12-02', '10:30', 13, '13', 0),
(9, 5, 'SL-1040', 0, 'B', 9, '52', '50', '2019-12-02', '11:00', 13, '7', 0),
(10, 5, 'SL-1041', 0, 'B', 11, '53', '35', '2019-12-02', '11:00', 13, '11', 0),
(11, 5, 'SL-1042', 0, 'A', 11, '38', '45', '2019-12-02', '11:00', 13, '12', 0),
(12, 5, 'SL-1043', 0, 'A', 12, '47', '46', '2019-12-02', NULL, 13, '13', 0),
(13, 5, 'SL-1044', 0, 'B', 13, '35', '48', '2019-12-02', '11:30', 13, '7', 0),
(14, 5, 'SL-1045', 0, 'B', 14, '50', '51', '2019-12-02', '11:30', 13, '11', 0),
(15, 5, 'SL-1046', 0, 'A', 15, '44', '45', '2019-12-02', '11:30', 13, '12', 0),
(16, 5, 'SL-1047', 0, 'A', 16, '38', '46', '2019-12-02', '11:30', 13, '13', 0),
(17, 5, 'SL-1048', 0, 'B', 17, '53', '52', '2019-12-02', '12:00', 13, '7', 0),
(18, 5, 'SL-1049', 0, 'B', 18, '48', '50', '2019-12-02', NULL, 13, '11', 0),
(19, 5, 'SL-1050', 0, 'A', 19, '46', '49', '2019-12-02', '12:00', 13, '12', 0),
(20, 5, 'SL-1051', 0, 'B', 21, '52', '35', '2019-12-02', '12:30', 13, '7', 0),
(21, 5, 'SL-1052', 0, 'B', 22, '53', '53', '2019-12-02', '12:30', 13, '11', 0),
(22, 5, 'SL-1053', 0, 'A', 23, '45', '49', '2019-12-02', NULL, 13, '12', 0),
(23, 5, 'SL-1054', 0, 'A', 23, '45', '49', '2019-12-02', '12:30', 13, '12', 0),
(24, 5, 'SL-1055', 0, 'A', 24, '38', '47', '2019-12-02', NULL, 13, '13', 0),
(25, 5, 'SL-1056', 0, 'B', 25, '52', '51', '2019-12-02', '13:00', 13, '7', 0),
(26, 5, 'SL-1057', 0, 'A', 27, '44', '46', '2019-12-02', NULL, 13, '12', 0),
(27, 5, 'SL-1058', 0, 'B', 26, 'Select', 'Select', '2019-12-02', '13:00', 13, '11', 0),
(28, 5, 'SL-1059', 0, 'A', 28, '49', '38', '2019-12-02', '13:00', 13, '13', 0),
(29, 5, 'SL-1060', 0, 'B', 29, '35', 'Select', '2019-12-02', '13:30', 13, '7', 0),
(30, 5, 'SL-1061', 0, 'A', 30, '44', '49', '2019-12-02', '13:30', 13, '12', 0),
(41, 9, 'SLT-1007', 1007, 'A', 1, '63', '64', '2020-01-10', '03:30 PM', 19, '14', 1),
(42, 9, 'SLT-1008', 1008, 'A', 2, '65', '66', '2020-01-10', '03:30 PM', 19, '14', 1),
(43, 9, 'SLT-1009', 1009, 'B', 3, '67', '68', '2020-01-10', '03:30 PM', 19, '14', 1),
(44, 9, 'SLT-1010', 1010, 'B', 4, '62', '69', '2020-01-10', '03:30 PM', 19, '14', 1),
(45, 9, 'SLT-1011', 1011, 'C', 5, '70', '71', '2020-01-10', '03:55 PM', 19, '14', 1),
(46, 9, 'SLT-1012', 1012, 'C', 6, '72', '73', '2020-01-10', '03:55 PM', 19, '14', 1),
(47, 9, 'SLT-1013', 1013, 'D', 7, '74', '75', '2020-01-10', '03:55 PM', 19, '14', 1),
(48, 9, 'SLT-1014', 1014, 'D', 8, '76', '77', '2020-01-10', '03:55 PM', 19, '14', 1),
(49, 9, 'SLT-1015', 1015, 'A', 9, '63', '66', '2020-01-10', '04:20 PM', 19, '14', 1),
(50, 9, 'SLT-1016', 1016, 'A', 10, '64', '65', '2020-01-10', '04:20 PM', 19, '14', 1),
(51, 9, 'SLT-1017', 1017, 'B', 11, '67', '69', '2020-01-10', '04:20 PM', 19, '14', 1),
(52, 9, 'SLT-1018', 1018, 'B', 12, '68', '62', '2020-01-10', '04:20 PM', 19, '14', 1),
(53, 9, 'SLT-1019', 1019, 'C', 13, '70', '73', '2020-01-10', '04:45 PM', 19, '14', 1),
(54, 9, 'SLT-1020', 1020, 'C', 14, '71', '72', '2020-01-10', '04:45 PM', 19, '14', 1),
(55, 9, 'SLT-1021', 1021, 'D', 15, '74', '77', '2020-01-10', '04:45 PM', 19, '14', 1),
(56, 9, 'SLT-1022', 1022, 'D', 16, '75', '76', '2020-01-10', '04:45 PM', 19, '14', 1),
(57, 9, 'SLT-1023', 1023, 'A', 17, '63', '65', '2020-01-10', '05:10 PM', 19, '14', 1),
(58, 9, 'SLT-1024', 1024, 'A', 18, '64', '66', '2020-01-10', '05:10 PM', 19, '14', 1),
(59, 9, 'SLT-1025', 1025, 'B', 19, '67', '62', '2020-01-10', '05:10 PM', 19, '14', 1),
(60, 9, 'SLT-1026', 1026, 'B', 20, '68', '69', '2020-01-10', '05:10 PM', 19, '14', 1),
(61, 9, 'SLT-1027', 1027, 'C', 21, '70', '72', '2020-01-10', '05:35 PM', 19, '14', 1),
(62, 9, 'SLT-1028', 1028, 'C', 22, '71', '73', '2020-01-10', '05:35 PM', 19, '14', 1),
(63, 9, 'SLT-1029', 1029, 'D', 23, '74', '76', '2020-01-10', '05:35 PM', 19, '14', 1),
(64, 9, 'SLT-1030', 1030, 'D', 24, '75', '77', '2020-01-10', '05:35 PM', 19, '14', 1),
(65, 9, 'SLT-1031', 1031, 'SemiF', 25, '65', '69', '2020-01-10', '06:00 PM', 19, '14', 1),
(66, 9, 'SLT-1032', 1032, 'SemiF', 26, '64', '68', '2020-01-10', '06:00 PM', 19, '14', 1),
(67, 9, 'SLT-1033', 1033, 'SemiF', 27, '73', '74', '2020-01-10', '06:00 PM', 19, '14', 1),
(68, 9, 'SLT-1034', 1034, 'SemiF', 28, '77', '70', '2020-01-10', '06:00 PM', 19, '14', 1),
(69, 9, 'SLT-1035', 1035, 'Finals', 33, '73', '69', '2020-01-10', '07:50 PM', 19, '14', 1),
(71, 10, 'SLT-1036', 1036, 'A', 1, '88', '90', '2020-02-07', '03:00 PM', 19, '18', 1),
(72, 10, 'SLT-1037', 1037, 'B', 3, '89', '91', '2020-02-07', '03:00 PM', 19, '16', 1),
(73, 10, 'SLT-1038', 1038, 'B', 4, '93', '94', '2020-02-07', '03:00 PM', 19, '16', 1),
(74, 10, 'SLT-1039', 1039, 'A', 2, '92', '95', '2020-02-07', '03:00 PM', 19, '16', 1),
(75, 10, 'SLT-1040', 1040, 'C', 5, '96', '98', '2020-02-07', '03:25 PM', 19, '16', 1),
(76, 10, 'SLT-1041', 1041, 'C', 6, '102', '104', '2020-02-07', '03:25 PM', 19, '16', 1),
(77, 10, 'SLT-1042', 1042, 'D', 7, '97', '103', '2020-02-07', '03:25 PM', 19, '16', 1),
(78, 10, 'SLT-1043', 1043, 'D', 8, '100', '101', '2020-02-07', '03:25 PM', 19, '16', 1),
(79, 10, 'SLT-1044', 1044, 'A', 9, '88', '95', '2020-02-07', '03:50 PM', 19, '16', 1),
(80, 10, 'SLT-1045', 1045, 'A', 10, '90', '92', '2020-02-07', '03:50 PM', 19, '16', 1),
(81, 10, 'SLT-1046', 1046, 'B', 11, '89', '94', '2020-02-07', '03:50 PM', 19, '16', 1),
(82, 10, 'SLT-1047', 1047, 'B', 12, '91', '93', '2020-02-07', '03:50 PM', 19, '16', 1),
(83, 10, 'SLT-1048', 1048, 'C', 13, '96', '104', '2020-02-07', '04:15 PM', 19, '16', 1),
(84, 10, 'SLT-1049', 1049, 'C', 14, '98', '102', '2020-02-07', '04:15 PM', 19, '16', 1),
(85, 10, 'SLT-1050', 1050, 'D', 15, '97', '101', '2020-02-07', '04:15 PM', 19, '16', 1),
(86, 10, 'SLT-1051', 1051, 'D', 16, '103', '100', '2020-02-07', '04:15 PM', 19, '16', 1),
(87, 10, 'SLT-1052', 1052, 'A', 17, '88', '92', '2020-02-07', '04:40 PM', 19, '16', 1),
(88, 10, 'SLT-1053', 1053, 'A', 18, '90', '95', '2020-02-07', '04:40 PM', 19, '16', 1),
(89, 10, 'SLT-1054', 1054, 'B', 19, '89', '93', '2020-02-07', '04:40 PM', 19, '16', 1),
(90, 10, 'SLT-1055', 1055, 'B', 20, '91', '94', '2020-02-07', '04:40 PM', 19, '16', 0),
(91, 10, 'SLT-1056', 1056, 'C', 20, '96', '102', '2020-02-07', '05:05 PM', 19, '16', 1),
(92, 10, 'SLT-1057', 1057, 'C', 21, '98', '104', '2020-02-07', '05:05 PM', 19, '16', 1),
(93, 10, 'SLT-1058', 1058, 'D', 23, '97', '100', '2020-02-07', '05:05 PM', 19, '16', 1),
(94, 10, 'SLT-1059', 1059, 'D', 24, '103', '101', '2020-02-07', '05:05 PM', 19, '16', 1),
(95, 10, 'SLT-1060', 1060, 'QuaterF', 25, '88', '91', '2020-02-07', '05:30 PM', 19, '16', 0),
(96, 10, 'SLT-1061', 1061, 'QuaterF', 26, '89', '90', '2020-02-07', '05:30 PM', 19, '16', 0),
(97, 10, 'SLT-1062', 1062, 'QuaterF', 27, '96', '103', '2020-02-07', '05:30 PM', 19, '16', 1),
(98, 10, 'SLT-1063', 1063, 'QuaterF', 28, '101', '102', '2020-02-07', '05:30 PM', 19, '16', 0),
(99, 10, 'SLT-1064', 1064, 'SemiF', 30, '88', '96', '2020-02-07', '06:30 PM', 19, '15', 1),
(101, 10, 'SLT-1066', 1066, 'Finals', 32, '88', '89', '2020-02-07', '09:00 AM', 19, '20', 1),
(102, 10, 'SLT-1067', 1067, 'SemiF', 31, '89', '101', '2020-02-07', '08:00 PM', 19, '19', 1),
(103, 12, 'SLT-1068', 1068, 'A', 1, '106', '107', '2020-02-11', '08:30 PM', 24, '33', 1),
(104, 12, 'SLT-1069', 1069, 'A', 2, '108', '109', '2020-02-11', '09:15 PM', 24, '33', 1),
(105, 12, 'SLT-1070', 1070, 'B', 3, '110', '111', '2020-02-11', '10:15 PM', 24, '33', 1),
(106, 12, 'SLT-1071', 1071, 'B', 4, '112', '113', '2020-02-12', '08:30 PM', 24, '33', 1),
(107, 12, 'SLT-1072', 1072, 'A', 5, '108', '106', '2020-02-12', '09:30 PM', 24, '33', 1),
(109, 12, 'SLT-1073', 1073, 'A', 6, '109', '107', '2020-02-12', '10:30 PM', 24, '33', 1),
(110, 13, 'SLT-1074', 1074, 'A', 1, '63', '74', '2020-02-14', '03:15 PM', 25, '34', 1),
(111, 13, 'SLT-1075', 1075, 'A', 2, '65', '72', '2020-02-14', '03:30 AM', 25, '34', 1),
(112, 13, 'SLT-1076', 1076, 'B', 3, '64', '68', '2020-02-14', '03:30 AM', 25, '34', 1),
(113, 13, 'SLT-1077', 1077, 'B', 4, '62', '66', '2020-02-14', '03:30 AM', 25, '34', 1),
(114, 13, 'SLT-1078', 1078, 'C', 5, '69', '73', '2020-02-14', '03:55 AM', 25, '34', 1),
(115, 13, 'SLT-1079', 1079, 'C', 6, '116', '114', '2020-02-14', '03:54 AM', 25, '34', 1),
(116, 13, 'SLT-1080', 1080, 'D', 7, '71', '75', '2020-02-14', '03:55 AM', 25, '34', 1),
(117, 13, 'SLT-1081', 1081, 'D', 8, '115', '117', '2020-02-14', '03:55 AM', 25, '34', 1),
(118, 13, 'SLT-1082', 1082, 'A', 9, '63', '72', '2020-02-14', '05:30 AM', 25, 'Select', 1),
(120, 13, 'SLT-1084', 1084, 'A', 10, '74', '65', '2020-02-14', '04:20 PM', 25, '34', 1),
(121, 13, 'SLT-1085', 1085, 'B', 11, '64', '66', '2020-02-14', '05:30 AM', 25, 'Select', 1),
(122, 13, 'SLT-1086', 1086, 'A', 11, '74', '65', '2020-02-14', '04:20 AM', 25, '34', 0),
(123, 13, 'SLT-1087', 1087, 'B', 12, '64', '66', '2020-02-14', '04:21 PM', 25, '34', 1),
(124, 13, 'SLT-1088', 1088, 'B', 13, '68', '62', '2020-02-14', '05:30 PM', 25, 'Select', 1),
(125, 13, 'SLT-1089', 1089, 'C', 0, '73', '116', '2020-02-14', '04:21 PM', 25, '34', 1),
(126, 13, 'SLT-1090', 1090, 'C', 14, '69', '114', '2020-02-14', '04:45 PM', 25, '34', 1),
(127, 13, 'SLT-1091', 1091, 'D', 15, '71', '115', '2020-02-14', '04:44 PM', 25, 'Select', 1),
(128, 13, 'SLT-1092', 1092, 'D', 15, '75', '117', '2020-02-14', '04:45 AM', 25, '34', 0),
(129, 13, 'SLT-1093', 1093, 'A', 16, '63', '65', '2020-02-14', '05:10 AM', 25, '34', 1),
(131, 13, 'SLT-1095', 1095, 'A', 18, '62', '64', '2020-02-14', '05:11 AM', 25, '34', 1),
(132, 13, 'SLT-1096', 1096, 'B', 19, '66', '68', '2020-02-14', '05:10 PM', 25, '34', 1),
(133, 13, 'SLT-1097', 1097, 'B', 20, '69', '116', '2020-02-14', '05:35 AM', 25, '34', 0),
(134, 13, 'SLT-1098', 1098, 'C', 20, '114', '73', '2020-02-14', '05:34 PM', 25, '34', 1),
(135, 13, 'SLT-1099', 1099, 'D', 23, '71', '117', '2020-02-14', '05:35 AM', 25, '34', 1),
(136, 13, 'SLT-1100', 1100, 'D', 24, '115', '75', '2020-02-14', '05:30 AM', 25, 'Select', 0),
(137, 13, 'SLT-1101', 1101, 'D', 24, '115', '75', '2020-02-14', '05:35 AM', 25, '34', 1),
(138, 13, 'SLT-1102', 1102, 'A', 9, '63', '72', '2020-02-14', '04:20 PM', 25, '34', 0),
(139, 13, 'SLT-1103', 1103, 'C', 14, '114', '69', '2020-02-14', '04:45 PM', 25, '34', 1),
(140, 13, 'SLT-1104', 1104, 'D', 17, '75', '117', '2020-02-14', '04:45 PM', 25, '34', 1),
(141, 13, 'SLT-1105', 1105, 'D', 21, '69', '116', '2020-02-14', '05:35 PM', 25, '34', 1),
(142, 13, 'SLT-1106', 1106, 'QuaterF', 30, '64', '74', '2020-02-14', '06:30 PM', 25, '34', 1),
(143, 13, 'SLT-1107', 1107, 'QuaterF', 31, '63', '68', '2020-02-14', '06:30 PM', 25, '34', 1),
(144, 13, 'SLT-1108', 1108, 'QuaterF', 33, '69', '115', '2020-02-14', '07:00 PM', 25, '34', 1),
(145, 13, 'SLT-1109', 1109, 'QuaterF', 34, '73', '75', '2020-02-14', '07:00 PM', 25, '34', 1),
(146, 13, 'SLT-1110', 1110, 'SemiF', 35, '73', '64', '2020-02-14', '08:00 PM', 25, '34', 1),
(147, 13, 'SLT-1111', 1111, 'SemiF', 36, '69', '68', '2020-02-14', '08:31 PM', 25, '34', 1),
(148, 13, 'SLT-1112', 1112, 'Finals', 38, '73', '69', '2020-02-14', '09:00 PM', 25, '34', 1),
(149, 12, 'SLT-1113', 1113, 'B', 7, '113', '111', '2020-02-15', '09:00 PM', 24, '33', 1),
(150, 12, 'SLT-1114', 1114, 'B', 8, '112', '110', '2020-02-15', '10:00 PM', 24, '33', 1),
(151, 12, 'SLT-1115', 1115, 'A', 9, '106', '109', '2020-02-16', '09:00 PM', 24, '33', 1),
(152, 12, 'SLT-1116', 1116, 'A', 10, '107', '108', '2020-02-16', '10:00 PM', 24, '33', 1),
(153, 12, 'SLT-1117', 1117, 'B', 11, '113', '110', '2020-02-17', '10:16 AM', 24, '33', 1),
(154, 12, 'SLT-1118', 1118, 'B', 12, '111', '112', '2020-02-17', '10:30 PM', 24, '33', 1),
(155, 12, 'SLT-1119', 1119, 'SemiF', 13, '109', '112', '2020-02-19', '09:15 PM', 24, '33', 1),
(157, 12, 'SLT-1120', 1120, 'SemiF', 14, '106', '111', '2020-02-19', '09:20 PM', 24, '33', 1),
(158, 12, 'SLT-1121', 1121, 'Finals', 15, '109', '111', '2020-02-21', '09:00 AM', 24, '33', 0);

-- --------------------------------------------------------

--
-- Table structure for table `version`
--

CREATE TABLE `version` (
  `id` int(11) NOT NULL,
  `version` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '(android or iso)',
  `version_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `version_request` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `version_force` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `del_status` int(11) NOT NULL COMMENT '0->Active,2->Inactive',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `version`
--

INSERT INTO `version` (`id`, `version`, `version_code`, `version_request`, `version_force`, `del_status`, `updated_at`) VALUES
(1, 'android', '2.3.12', 'true', 'false', 0, '2020-03-27 18:47:50'),
(2, 'ios', '2.3.7', 'true', 'false', 0, '2020-03-27 18:47:50');

-- --------------------------------------------------------

--
-- Table structure for table `yalla_ground`
--

CREATE TABLE `yalla_ground` (
  `ground_id` int(11) NOT NULL,
  `ground_name` varchar(120) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ground_owner_id` int(11) DEFAULT NULL,
  `ground_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ground_location` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ground_city` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ground_lat` double DEFAULT NULL,
  `ground_long` double DEFAULT NULL,
  `ground_phone` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ground_year` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ground_picture` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `ground_availablity` varchar(120) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `online_booking` int(11) DEFAULT '0' COMMENT '0->Available,1->Not Available',
  `ground_facility_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ground_about` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ground_desc` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ground_sl_commission` int(11) DEFAULT NULL,
  `ground_status` int(11) NOT NULL DEFAULT '0' COMMENT '0->Active,2->InActive',
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yalla_ground`
--

INSERT INTO `yalla_ground` (`ground_id`, `ground_name`, `ground_owner_id`, `ground_email`, `ground_location`, `ground_city`, `ground_lat`, `ground_long`, `ground_phone`, `ground_year`, `ground_picture`, `ground_availablity`, `online_booking`, `ground_facility_id`, `ground_about`, `ground_desc`, `ground_sl_commission`, `ground_status`, `created_at`, `updated_at`) VALUES
(1, 'Al Rigga Football Pitch', 23, 'Pitch@mailinator.com', 'Al Marfa - Abu Dhabi - United Arab Emirates', 'Dubai', 24.116944751185162, 53.4608590265681, '1311313131', '10', '466994download.jpg,588764db.jpg,355163comnatenaiglowspinart.jpg', 'available', 0, '1,3,4,5', 'The person is not picking up his phone for bookings and it is very irritating, since I have it make a booking as soon as possible.', NULL, 0, 1, NULL, '2020-02-20 19:05:36'),
(2, 'Athletic Sports Academy', 24, 'athleticsportsfujairah@gmail.com', 'Al Ittihad - Al Owaid Rd - Fujairah - United Arab Emirates', 'Fujairah - الفجيرة', 25.123362888237143, 56.33005276892012, '971529902200', '2105', '38128020190708_163103.jpg,30990820190708_163125.jpg,28283720190708_163157.jpg,54473220190708_163237.jpg,68373620190708_163319.jpg,40489220190708_163516.jpg,48950620190708_163643.jpg', 'available', 1, '11,18,19', 'Jam smacked right in the middle of the city, this football pitch does not only offer a football pitch, but also leisure for residents near the pitch. It also has a basketball court where kids from all walks of life can play. This is definitely one of the go to places in Fujairah to play football.', NULL, 3, 0, NULL, '2020-04-01 15:27:05'),
(3, 'United Football Club', 25, 'unitedfcfujairah@gmail.com', 'Fujairah - United Arab Emirates', 'Fujairah', 25.111519562636733, 56.35650616116875, '0581603658', '2013', '75796320190708_170509.jpg,69173120190708_170622.jpg,20364620190708_170647.jpg,31408020190708_170744.jpg,11606920190708_170757.jpg,42059220190708_170831.jpg,23640620190708_171047.jpg,80146120190708_171126.jpg,20970120190708_171217.jpg,22840120190708_174353.jpg,89502020190708_174411.jpg,95961820190708_174528.jpg,79161620190708_175514.jpg,93614820190708_175532.jpg', 'available', 1, '6,8,9,11,12,13,14,15,16,19', 'United Football Club is one of the best football pitches to play at for its pristine location. Right next to the beach, it gives the players the warm breeze of the ocean and lets players enjoy not only the game but nature itself. United Football Club also has a game station where kids and adults can play console games if they are trying to avoid getting sweaty. And while at it, try out their Foodstation as well that offers amazing dishes!', NULL, 0, 1, NULL, '2020-02-16 04:46:45'),
(4, 'Al Forsan Football Club Sharjah', 26, 'alforsansharjah@gmail.com', 'Tasjeel Auto Village, - Near Free Zone - Sharjah - United Arab Emirates', 'Sharjah', 25.336611289321688, 55.46990106446356, '0558933444', '2015', '', 'unavailable', 1, '6,8,9,11,15,16,19', 'Al Forsan is located near the Emirates Auction, so if you feel like buying a car for yourself, why not try to go to Al Forsan along the way and get sweaty with other players! Not only that it offers state of the art pitches, it also has everything a player needs from the ground like changing rooms, toilets, mosque, etc! it is definitely one of the places to go to for football.', NULL, 0, 1, NULL, '2020-01-14 02:53:01'),
(5, 'FootBox Sports Playgrounds', 27, 'footboxuaq@gmail.com', 'Unnamed Road - Umm Al Quwain (Umm Al Qiwain) - United Arab Emirates', 'Um Al Quwain', 25.486616287738315, 55.57876504411721, '0559559933', '2017', '35375620190710_185129.jpg,38414420190710_185159.jpg,15037320190710_185251.jpg,76940120190710_185314.jpg,70297720190710_185516.jpg,87147420190710_185543.jpg,72612720190710_185605.jpg,59087420190710_185743.jpg,97340720190710_185802.jpg,76464720190710_185943.jpg', 'available', 1, '6,8,9,11,15,18,19', 'Being a quiet place doesn', NULL, 0, 1, NULL, '2020-02-16 04:46:53'),
(6, 'Jamahir Football Club', 28, 'jamahirfcfujairah@gmail.com', 'Corniche Rd - Fujairah - United Arab Emirates', 'Fujairah', 25.109567243077258, 56.356705938943676, '0505221600', '2015', '12660620190708_175628.jpg,19610120190708_175645.jpg,21920620190708_175652.jpg,79358320190708_175713.jpg,86270720190708_175726.jpg,12788820190708_175734.jpg,93626220190708_175754.jpg,26044820190708_175815.jpg', 'available', 1, '6,8,9,11,13,15,19', 'Jamahir is one, if not, the nicest location to play football in Fujairah. Located right in the shores of Corniche Road beach, it has multiple pitches that players will love to try at, and they also have a cafeteria that offers great food! Right along the road is an amusement park for the family to enjoy while the rest of them play football! it is a must try football pitch in Fujairah for sure!', NULL, 0, 1, NULL, '2020-01-14 02:53:47'),
(7, 'Al Khan Beach Stadium', 29, 'alkhanfcsharjah@gmail.com', 'Unnamed Road - Sharjah - United Arab Emirates', 'Sharjah', 25.330464881277155, 55.355857247499394, '0564328020', '2017', '', 'available', 1, '6,11,19', 'Sun kissed, ocean breeze, sweaty palms, beach vibes and football. What\'s not to like? If not the closest football pitch near the beach, the location is just next level for this football ground, get those work stress with you and sweat it out while watching the scenic view of the sunset and go back feeling rejuvenated instead of being tired. This Sharjah football pitch is for sure, one-of-a-kind.', NULL, 0, 1, NULL, '2020-01-14 02:53:08'),
(8, 'Al Tanafus Sports Management', 30, 'altanafusfc@gmail.com', 'شارع الحميدية - Ajman - United Arab Emirates', 'Ajman', 25.400978408917656, 55.52684574356915, '0557667888', '2012', '578069whatsappimage20190822at1338141j.jpg,512962whatsappimage20190822at133814j.jpg,710261whatsappimage20190822at133815j.jpg', 'available', 1, '6,8,9,11,13,15,16,19', 'Located in Ajman, it is one of the football pitches where there is more than just playing that the ground offers, it is home to the best academies around to tech your kids the fundamentals of playing the sport. It also is located near the city and is very accessible to a lot of parents to drop off their kids and do groceries at the same time. Al Tanafus is a must visit place to play football and do other things alike, it is, a sports park anyway!', NULL, 0, 1, NULL, '2020-01-14 02:53:55'),
(9, 'Gulf Heroes Sports Center', 31, 'gulfheroessc@gmail.com', '12th St - Dubai - United Arab Emirates', 'Dubai', 25.22062988701589, 55.409181347106134, '0569766007', '2016', '', 'available', 1, '6,8,9,11,15,16,19', 'Gulf Heroes is located in Mirdif and is one of the most well maintained grounds there is. It has a lot of academies that kids can attend to and learn how to play football. They also have one of the best laid artificial grass in all pitches in Dubai. Also in a very strategic location, near villas and City Center Mirdif, this definitely is one football pitch you\'ll never get tired of visiting.', NULL, 0, 1, NULL, '2020-01-14 02:53:14'),
(10, 'أكاديمية الألعاب الرياضية', 34, 'add@mailinator.com', 'Fujairah - United Arab Emirates', 'Fujairah', 25.12724677243263, 56.335418317601714, '0000000000', '10', '754955astro_park0.jpg', 'unavailable', 1, '6,8,20,21', 'المربى المذهل في وسط المدينة ، لا يوفر ملعب كرة القدم هذا ملعبًا لكرة القدم فحسب ، بل يوفر أيضًا الترفيه للمقيمين بالقرب من الملعب. كما يضم ملعبًا لكرة السلة حيث يمكن للأطفال من جميع مناحي الحياة اللعب. إنها بالتأكيد واحدة من الأماكن التي يمكن ممارستها في الفجيرة للعب كرة القدم.', NULL, 3, 1, NULL, '2019-12-25 11:20:03'),
(11, 'Quattro Sports Center', 33, 'quattrosportscenter@gmail.com', 'As Safia Street, As Safia - Ajman - United Arab Emirates', 'Ajman', 25.420522347575872, 55.47463728847542, '0551902200', '2013', '733008quattro.jpg,280581rp12.jpg,476933rp13.jpg,361817rp15.jpg,325854rp16.jpg,114718rp1.jpg', 'available', 1, '6,8,9,11,13,15,16,19', '', NULL, 0, 1, NULL, '2020-02-16 04:46:38'),
(12, 'Abdullah Al Qasmi Ground', 34, 'streetleague.testmail@gmail.com', 'Souk Tower - Abu Dhabi - United Arab Emirates', 'Abu Dhabi', 24.4903428, 54.355098699999985, '0544564044', '2019', '', 'unavailable', 0, '6,8,9,11,12,13,14,15,16,18,19', '', NULL, 0, 1, NULL, '2019-11-14 14:25:23'),
(13, 'Captain Academy', 35, 'captainacademyae@gmail.com', '169 شارع الشاعر - Abu Dhabi - United Arab Emirates', 'Abu Dhabi - أبوظبي', 24.352128593554774, 54.68159533367403, '0561222993', '1', '442199img20190831wa0129.jpg,145949imagej.jpg', 'available', 1, '8,10,11', 'Located in Al Manara Private School in Al Shamkha City opposite Bani Yas Sports Club', NULL, 0, 0, NULL, '2020-04-01 18:06:52'),
(14, 'Abdullah Grounds', 34, 'mundus1rector@gmail.com', '8 شارع التِّبَارِي - Abu Dhabi - United Arab Emirates', 'Calabasas', 24.484749916300302, 54.36096886471346, '0505497598', '1', '606223untitled1.jpg', 'unavailable', 0, '6', '', NULL, 0, 1, NULL, '2019-11-22 10:33:03'),
(15, 'Koora Dome', 34, 'play@kooradome.com', 'Dubai - Al Ain Rd - Dubai - United Arab Emirates', 'Dubai', 25.21775213961607, 55.316512235167274, '80056672', '2019', '884311kooradome12.jpg,721173kooradome22.jpg', 'unavailable', 1, '6,8,9,11,12,13', 'Indoor and outdoor football pitches inside AlWasl Club ملعب مغطى داخل نادي الوصل\nIndoor: 500 AED (400 before 5pm)\nOutdoor: 400 AED (300 before 5pm)', NULL, 0, 1, NULL, '2020-01-28 17:25:38'),
(16, 'Bel Remaitha Club pitches - Nad Al Hamar', 34, 'info@belremitha.com', 'Nad Al Hamar area - Dubai - United Arab Emirates', 'Dubai', 25.213636076576318, 55.379608006816504, '0552682201', '2019', '901016belremitha2.jpg', 'unavailable', 1, '6,8,11,12', '6 vs 6 outdoor pitches in Nad Al Hamar. 300 AED for 1 hour. 400 AED for 1.5 hours. 500 AED for 2 hours', NULL, 0, 1, NULL, '2020-02-16 04:47:01'),
(17, 'Bel Remaitha Club pitches - Al Rigga', 34, 'info@belremaitha.com', '11 Al Rigga Rd - Dubai - United Arab Emirates', 'Dubai', 25.266127599686392, 55.31728319634901, '0552682201', '2019', '', 'unavailable', 1, '6,9,11', '5 vs 5 outdoor pitches in Nad Al Hamar. 300 AED for 1 hour. 400 AED for 1.5 hours. 500 AED for 2 hours', NULL, 0, 1, NULL, '2020-01-13 06:11:31'),
(18, '0', 0, '0', '0', '0', 0, 0, '0', '0', '', '0', 0, NULL, '0', NULL, 0, 1, NULL, '2020-01-10 07:54:48'),
(19, 'Target Global', 36, 'chadistreetleague@gmail.com', 'Sultan bin Zayeds Stadium (behind Al Hosn university)', 'Abu Dhabi - أبوظبي', 24.460084934103904, 54.37579282064424, '0521010766', '1', '616687whatsappimage20200110at120412pm3j.jpg,191587whatsappimage20200110at120412pm2j.jpg,677956whatsappimage20200110at120412pm1j.jpg,885551whatsappimage20200110at120412pmj.jpg', 'available', 1, '8,11,12,15,19', 'A fresh new ground located right in Abu Dhabi behind Al Hosn University.', NULL, 0, 0, NULL, '2020-03-19 15:55:47'),
(20, 'target sport', 36, 'chadistreetleague@gmail.com', '13 Al Safeeh St - Abu Dhabi - United Arab Emirates', 'AbuDhabi', 24.460312750324317, 54.374954274476536, '0547536667', '2020', '65978474921896_182703789573424_7266052817372569438_n.jpg', '0', 0, '6,8,9,11,12,13,15,19,20,21', '', NULL, 0, 1, NULL, '2020-01-19 15:11:01'),
(21, 'Regional Sports - Virginia Private School', 37, 'johnny@regionalsports.ae', 'Virginia International Private School, 40 شارع الرائد - Abu Dhabi - United Arab Emirates', 'Abu Dhabi', 24.390718756067375, 54.65404877901069, '0527787111', '7', '824665virginia_1j.jpg,834307virginia_3j.jpg,514661virginia_2j.jpg,413899whatsappimage20200128at81246pmj.jpg,779224whatsappimage20200128at75055pm3j.jpg', 'unavailable', 1, '6,8,9,11,19', 'Regional Sports has built a strong reputation for managing football pitches since 2013. With hundreds of customers playing on our pitches daily, our staff ensure the players make the most of their time with us and offer them incomparable services.', NULL, 5, 1, NULL, '2020-02-20 09:44:33'),
(22, 'Regional Sports - Al Yasmina Academy', 37, 'johnny@regionalsports.ae', 'Al Yasmina School Khalifa City A - أبو ظبي - United Arab Emirates', 'Abu Dhabi - أبوظبي', 24.426735984523983, 54.54610723217333, '0508866369', '2013', '766104yasmina_4j.jpg,724063yasmina_3j.jpg,305166yasmina_1j.jpg,907798yasmin_2j.jpg', 'unavailable', 1, '8,11,19', 'Regional Sports has built a strong reputation for managing football pitches since 2013. With hundreds of customers playing on our pitches daily, our staff ensure the players make the most of their time with us and offer them incomparable services.', NULL, 5, 0, NULL, '2020-03-20 14:04:26'),
(23, 'ملعب الشهامه', 38, 'alaafootbllbahyia@gmail.com', '9 Lane 332 - Abu Dhabi - United Arab Emirates', 'Abu Dhabi - أبوظبي', 24.550538216265547, 54.67059449756621, '0509877604', '2013', '416833whatsappimage20200128at92701pm1j.jpg,344660whatsappimage20200128at92701pmj.jpg,506646whatsappimage20200128at92701pm2j.jpg,118195whatsappimage20200128at92701pm3j.jpg', 'available', 1, '11,19', 'تم انشاؤها من قبل تقنيي  المحترفين في خلال اربعة اسابيع مختصين\nسطح الملعب يغطى بالجيل الثالث والرابع من العشب الصناعي محاطة بشك جانبي ومغطي بشبك من الاعلى\nملعب ممتاز', NULL, 5, 0, NULL, '2020-04-01 15:27:10'),
(24, 'Al Sharq Stadium', 40, 'moatazshahin5@gmail.com', 'Seaport Street, Baladia Building, Corniche - إمارة الشارقةّ - United Arab Emirates', 'Khor Fakkan - خورفكان', 25.345504468526602, 56.3604943649188, '0566511613', '2010', '434521whatsappimage20200211at74727pm2j.jpg,894567whatsappimage20200211at74727pm1j.jpg,126838whatsappimage20200211at74727pmj.jpg', 'unavailable', 1, '11,19', '', NULL, 5, 0, NULL, '2020-04-01 15:27:15'),
(25, 'Koora Sports', 41, 'Moatazshahin5@gmail.com', 'Al Rami St - Abu Dhabi - United Arab Emirates', 'Abu Dhabi', 24.50032965723719, 54.394926785581944, '0503342725', '2018', '294647whatsappimage20200213at112326pm6j.jpg,561478whatsappimage20200213at112326pm5j.jpg,140610whatsappimage20200213at112326pm4j.jpg,610234whatsappimage20200213at112326pm3j.jpg,376437whatsappimage20200213at112326pm2j.jpg,857181whatsappimage20200213at112326pm1j.jpg,650023whatsappimage20200213at112326pmj.jpg', 'available', 0, '8,11,19', '', NULL, 5, 1, NULL, '2020-02-16 07:35:04'),
(26, 'Regional Sports - Virginia Private School', 42, 'Mohamod@regionalsport.ae', '40 شارع الرائد - Abu Dhabi - United Arab Emirates', 'Abu Dhabi - أبوظبي', 24.390746007200526, 54.6540076, '0523739796', '2016', '360299whatsappimage20200114at1523563j.jpg,700060whatsappimage20200114at1523562j.jpg,565947whatsappimage20200114at1523561j.jpg,466085whatsappimage20200114at152356j.jpg', 'unavailable', 1, '8,11,19', '', NULL, 0, 0, NULL, '2020-03-20 14:07:02'),
(27, 'Rotana', 43, 'moatazhady7@gmail.com', 'Unnamed Road - Ras al Khaimah - United Arab EmiratesE11 - Ras al Khaimah - United Arab Emirates', 'Ras Al Khaimah - رأس الخيمة', 25.846206207944185, 56.014129084908134, '0563627610', '2010', '828963whatsappimage20200223at2257421j.jpg,966017whatsappimage20200223at2257431j.jpg,769429whatsappimage20200223at225744j.jpg,195994whatsappimage20200223at2257451j.jpg,649682whatsappimage20200223at225745j.jpg', 'available', 1, '8,10,12', 'wonderful football ground with many facilities', NULL, 0, 0, NULL, '2020-04-01 15:27:23'),
(28, 'Sport City - Boost Ras Al Khaimah', 44, 'moatazhady7@gmail.com', 'E11 - Ras al Khaimah - United Arab Emirates', 'Ras Al Khaimah - رأس الخيمة', 25.74615473221334, 55.901682526582604, '0508297027', '2010', '183669whatsappimage20200223at2257391j.jpg,623816whatsappimage20200223at225742j.jpg,281117whatsappimage20200223at225746j.jpg,774009whatsappimage20200223at2257471j.jpg,718781whatsappimage20200223at225747j.jpg,951969whatsappimage20200224at004735j.jpg,722874whatsappimage20200224at004737j.jpg,956560whatsappimage20200224at004738j.jpg', 'available', 1, '8,11,12,13', 'ملعب كرة قدم رائع مع العديد من المرافق أيضا حمام سباحة ومسجد ، وملعبان في الهواء الطلق وملعب واحد مغطى', NULL, 0, 0, NULL, '2020-04-01 15:27:29'),
(29, 'AL Mamoora', 43, 'moatazhady7@gmail.com', 'Unnamed Road - Ras al Khaimah - United Arab Emirates', 'Ras Al Khaimah - رأس الخيمة', 25.805463507614515, 55.97189198115487, '0563627610', '2010', '206369whatsappimage20200223at2257431j.jpg,123890whatsappimage20200223at2257441j.jpg,246854whatsappimage20200223at225744j.jpg,506840whatsappimage20200223at2257451j.jpg', 'available', 1, '12', 'Wonder full Football Ground With Many Facilities', NULL, 0, 0, NULL, '2020-04-01 15:27:34'),
(30, 'X 1 -', 43, 'moatazhady7@gmail.com', 'Ahmad Bin Masjid Rd - Ras al Khaimah - United Arab Emirates', 'Ras Al Khaimah - رأس الخيمة', 25.800682247085486, 55.95853400228983, '0563627610', '2009', '363196whatsappimage20200228at2229401j.jpg,941993whatsappimage20200228at2229402j.jpg,956114whatsappimage20200228at2229403j.jpg,438611whatsappimage20200228at2229404j.jpg,875106whatsappimage20200228at2229405j.jpg,415206whatsappimage20200228at222940j.jpg', 'available', 0, '11', 'Wonder full Football With Many Facilities  in site the city', NULL, 0, 0, NULL, '2020-03-20 14:08:19'),
(31, 'Al Bahia Stadium', 45, 'moatazhady7@gmail.com', '9 Al Zajil Ln - Abu Dhabi - United Arab Emirates', 'Abu Dhabi - أبوظبي', 24.513439807250695, 54.653863299999976, '0503108810', '2015', '152216whatsappimage20200308at124518j.jpg,947311whatsappimage20200308at1245191j.jpg,211114whatsappimage20200308at1245192j.jpg,400119whatsappimage20200308at1245193j.jpg,958959whatsappimage20200308at1245194j.jpg,682256whatsappimage20200308at124519j.jpg', 'available', 1, '8,11,12,15,19', 'Amazing Ground With Many Benefits Including Cafeteria, Changing Rooms ,  \nMosque', NULL, 0, 0, NULL, '2020-03-20 14:08:39'),
(32, 'Testing ground', 46, 'dhamotharan@reliantrade.com', '67, Raja Muthiah Rd, Periamet, Periyamedu, Periyamet, Chennai, Tamil Nadu 600007, India', 'Chennai - تشيناي', 13.085609953691272, 80.27111909999999, '8667632613', '1', '897058download2.jpg,967192download.jpg,639194images2.jpg,941352images4.jpg,227756sanh.jpg', 'available', 0, '8,10,11,12,15,19', 'Amazing Ground With Many Benefits Including Cafeteria, Changing Rooms , Mosque', NULL, 10, 0, NULL, '2020-04-02 17:59:02');

-- --------------------------------------------------------

--
-- Table structure for table `yalla_team`
--

CREATE TABLE `yalla_team` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `captain_id` int(11) DEFAULT NULL,
  `team_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `team_city` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `team_phone` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `team_date` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `team_size` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `team_logo` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `team_slogon` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `team_status` int(11) DEFAULT '0' COMMENT '0->Active,2->InActive',
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yalla_team`
--

INSERT INTO `yalla_team` (`team_id`, `team_name`, `captain_id`, `team_email`, `team_city`, `team_phone`, `team_date`, `team_size`, `team_logo`, `team_slogon`, `team_status`, `created_at`, `updated_at`) VALUES
(3, 'AUH rockers ', 3, NULL, 'Abu Dhabi', NULL, '2019/08/22', '10', '1566475059.jpg', NULL, 0, '2019-08-22 17:27:45', '2019-08-22 11:57:45'),
(23, 'Senior Stars', 12, NULL, 'Tirunelveli', NULL, '2019/09/12', '11', '1568289953.jpg', NULL, 0, '2019-09-12 17:36:20', '2019-09-12 12:06:20'),
(29, 'Dragula', 8, NULL, 'Dragen World', NULL, '2019/10/09', '11', '', NULL, 0, '2019-10-09 14:04:17', '2019-11-21 12:43:54'),
(30, 'Testing', 2, NULL, 'Chennai', NULL, '2019/10/14', '11', '', NULL, 0, '2019-10-14 10:50:03', '2019-10-14 05:20:03'),
(31, 'AlNasr', 9, NULL, 'Dubai', NULL, '2019/10/24', '10', '', NULL, 0, '2019-10-24 12:21:26', '2019-10-24 06:51:26'),
(32, 'Beaters', 1, NULL, 'Chennai', NULL, '2019/11/06', '11', '', NULL, 0, '2019-11-06 11:41:08', '2019-11-06 06:11:08'),
(35, 'Najoom AlDarawish', 25, NULL, 'Abu Dhabi', NULL, '2019/11/23', '10', '1574531459.jpg', NULL, 0, '2019-11-23 23:21:03', '2019-11-23 17:51:03'),
(36, 'Alrashidiya', 26, NULL, 'Dubai', NULL, '2019/11/23', '11', '', NULL, 0, '2019-11-23 23:54:11', '2019-11-23 18:24:11'),
(38, 'AlFOotoa', 34, NULL, 'Abudhabi', NULL, '2019/11/29', '9', '1575032181.jpg', NULL, 0, '2019-11-29 18:26:31', '2019-11-29 12:56:31'),
(39, 'RAK', 35, NULL, 'Rak', NULL, '2019/11/29', '7', '', NULL, 0, '2019-11-29 22:34:35', '2019-11-29 17:04:35'),
(40, 'Abdullla', 36, NULL, 'Rak', NULL, '2019/11/29', '11', '', NULL, 0, '2019-11-29 22:41:15', '2019-11-29 17:11:15'),
(41, '', 37, NULL, 'Rak', NULL, '2019/11/30', '11', '', NULL, 0, '2019-11-30 20:28:01', '2019-12-01 16:46:41'),
(43, 'Auh legends', 33, NULL, 'Abu Dhabi', NULL, '2019/11/30', '11', '', NULL, 0, '2019-11-30 21:10:34', '2019-11-30 15:40:34'),
(44, 'Dr Faris', 39, NULL, 'AD', NULL, '2019/12/01', '11', '', NULL, 0, '2019-12-01 19:42:27', '2019-12-01 14:12:27'),
(45, 'Aljwarih', 40, NULL, 'AD', NULL, '2019/12/01', '11', '', NULL, 0, '2019-12-01 19:46:39', '2019-12-01 14:16:39'),
(46, 'Njoom Albahreah', 41, NULL, 'AD', NULL, '2019/12/01', '11', '', NULL, 0, '2019-12-01 19:49:50', '2019-12-01 14:19:50'),
(47, 'Alusood', 42, NULL, 'AD', NULL, '2019/12/01', '11', '', NULL, 0, '2019-12-01 19:52:42', '2019-12-01 14:22:42'),
(48, ' Rooh alitihad', 43, NULL, 'AD', NULL, '2019/12/01', '11', '', NULL, 0, '2019-12-01 19:53:45', '2019-12-01 14:23:45'),
(49, 'Njoom alshamah', 44, NULL, 'AD', NULL, '2019/12/01', '11', '', NULL, 0, '2019-12-01 19:54:53', '2019-12-01 14:24:53'),
(50, 'Aljazera', 46, NULL, 'Abu Dhabi', NULL, '2019/12/01', '11', '', NULL, 0, '2019-12-01 20:50:18', '2019-12-01 15:20:18'),
(51, 'Sports Middle East', 47, NULL, 'Abu Dhabi', NULL, '2019/12/01', '11', '', NULL, 0, '2019-12-01 20:57:18', '2019-12-01 15:27:18'),
(52, 'Alzubaidi', 48, NULL, 'Abu Dhabi', NULL, '2019/12/01', '11', '', NULL, 0, '2019-12-01 21:00:23', '2019-12-01 15:30:23'),
(53, 'Captain', 49, NULL, 'Abu Dhabi', NULL, '2019/12/01', '7', '', NULL, 0, '2019-12-01 21:05:18', '2019-12-01 15:35:18'),
(54, 'Abu Dhabi National Takaful', 51, NULL, 'Abu Dhabi ', NULL, '2019/12/03', '11', '', NULL, 0, '2019-12-03 18:31:43', '2019-12-03 13:01:43'),
(55, 'Hh', 53, NULL, 'Alain', NULL, '2019/12/04', '11', '', NULL, 0, '2019-12-04 00:46:49', '2019-12-03 19:16:49'),
(56, 'Vamos', 61, NULL, 'Abudhabi', NULL, '2019/12/04', '11', '', NULL, 0, '2019-12-04 17:46:00', '2019-12-04 12:16:00'),
(57, 'Ya 7aram', 28, NULL, 'Ajman', NULL, '2019/12/05', '7', '', NULL, 0, '2019-12-05 08:08:01', '2019-12-05 02:38:01'),
(58, 'Happiness ', 73, NULL, 'Abu Dhabi', NULL, '2019/12/06', '7', '', NULL, 0, '2019-12-06 00:32:36', '2019-12-05 19:02:36'),
(59, 'Hamdan', 50, NULL, 'Shj', NULL, '2019/12/22', '7', '', NULL, 0, '2019-12-22 17:42:08', '2019-12-22 12:12:08'),
(61, 'Allahab', 23, NULL, 'Dubai', NULL, '2019/12/24', '11', '1577127874.jpg', NULL, 0, '2019-12-24 00:35:00', '2019-12-23 19:05:00'),
(62, 'India DFC', 92, NULL, 'Abu Dhabi', NULL, '2020/01/10', '7', '', NULL, 0, '2020-01-10 17:05:13', '2020-01-10 11:35:13'),
(63, 'UAE DFC', 93, NULL, 'Abu Dhabi', NULL, '2020/01/10', '7', '', NULL, 0, '2020-01-10 17:07:00', '2020-01-10 11:37:00'),
(64, 'Syria DFC', 94, NULL, 'Abu Dhabi', NULL, '2020/01/10', '7', '', NULL, 0, '2020-01-10 17:08:15', '2020-01-10 11:38:15'),
(65, 'Togo DFC', 95, NULL, 'Abu Dhabi', NULL, '2020/01/10', '7', '', NULL, 0, '2020-01-10 17:09:58', '2020-01-10 11:39:58'),
(66, 'France DFS', 96, NULL, 'Abu Dhabi', NULL, '2020/01/10', '7', '', NULL, 0, '2020-01-10 17:11:23', '2020-01-10 11:41:23'),
(67, 'Spain DFC', 97, NULL, 'Abu Dhabi ', NULL, '2020/01/10', '7', '', NULL, 0, '2020-01-10 17:13:23', '2020-01-10 11:43:23'),
(68, 'Mouritania DFC', 98, NULL, 'Abu Dhabi', NULL, '2020/01/10', '7', '', NULL, 0, '2020-01-10 17:15:07', '2020-01-10 11:45:07'),
(69, 'Jordan DFC', 99, NULL, 'Abu Dhabi ', NULL, '2020/01/10', '7', '', NULL, 0, '2020-01-10 17:16:19', '2020-01-10 11:46:19'),
(70, 'England DFC', 100, NULL, 'Abu Dhabi ', NULL, '2020/01/10', '7', '', NULL, 0, '2020-01-10 17:18:43', '2020-01-10 11:48:43'),
(71, 'Lebanon', 101, NULL, 'Abu Dhabi ', NULL, '2020/01/10', '7', '', NULL, 0, '2020-01-10 17:19:56', '2020-01-10 11:49:56'),
(72, 'Brazil DFC', 102, NULL, 'Abu Dhabi', NULL, '2020/01/10', '7', '', NULL, 0, '2020-01-10 17:21:24', '2020-01-10 11:51:24'),
(73, 'Egypt DFC', 103, NULL, 'Abu Dhabi', NULL, '2020/01/10', '7', '', NULL, 0, '2020-01-10 17:22:30', '2020-01-10 11:52:30'),
(74, 'Palestine DFC', 104, NULL, 'Abu Dhabi', NULL, '2020/01/10', '7', '', NULL, 0, '2020-01-10 17:23:40', '2020-01-10 11:53:40'),
(75, 'Sudan DFC', 105, NULL, 'Abu Dhabi ', NULL, '2020/01/10', '7', '', NULL, 0, '2020-01-10 17:24:49', '2020-01-10 11:54:49'),
(76, 'Cameron DFC', 106, NULL, 'Abu Dhabi', NULL, '2020/01/10', '7', '', NULL, 0, '2020-01-10 17:25:51', '2020-01-10 11:55:51'),
(77, 'Romania DFC', 107, NULL, 'Abu Dhabi', NULL, '2020/01/10', '7', '', NULL, 0, '2020-01-10 17:27:00', '2020-01-10 11:57:00'),
(78, 'South Africa DFC', 108, NULL, 'Abu Dhabi', NULL, '2020/01/10', '8', '', NULL, 0, '2020-01-10 23:12:42', '2020-01-10 17:42:42'),
(79, 'Barcelona', 113, NULL, 'Abu dhabi', NULL, '2020/01/16', '6', '', NULL, 0, '2020-01-16 21:31:22', '2020-01-16 16:01:22'),
(80, 'Chelsea FC', 59, NULL, 'sharjah', NULL, '2020/01/17', '11', '', NULL, 0, '2020-01-17 02:46:12', '2020-01-16 21:16:12'),
(81, 'Abudhabi city', 115, NULL, 'Abudhabi', NULL, '2020/01/19', '7', '1579447282.jpg', NULL, 0, '2020-01-19 20:52:33', '2020-01-19 15:22:33'),
(82, 'Kings', 119, NULL, 'Shj', NULL, '2020/01/25', '8', '', NULL, 0, '2020-01-25 15:18:15', '2020-01-25 09:48:15'),
(84, 'Shabab al sharjah', 142, NULL, 'Sharjah', NULL, '2020/02/04', '7', '', NULL, 0, '2020-02-04 10:50:49', '2020-02-04 05:20:49'),
(86, 'Youth India', 148, NULL, 'Abu Dhabi', NULL, '2020/02/04', '11', '', NULL, 0, '2020-02-04 17:40:23', '2020-02-04 12:10:23'),
(87, 'Team Yas', 151, NULL, 'Abu Dhabi', NULL, '2020/02/04', '8', '', NULL, 0, '2020-02-04 23:53:18', '2020-02-04 18:23:18'),
(88, 'Salespory', 153, NULL, 'Abu Dhabi ', NULL, '2020/02/07', '10', '', NULL, 0, '2020-02-07 16:24:29', '2020-02-07 10:54:29'),
(89, 'AlKarama', 154, NULL, 'Abu Dhabi', NULL, '2020/02/07', '10', '', NULL, 0, '2020-02-07 16:27:56', '2020-02-07 10:57:56'),
(90, 'Union ', 155, NULL, 'Abu dhabi', NULL, '2020/02/07', '10', '', NULL, 0, '2020-02-07 16:28:02', '2020-02-07 10:58:02'),
(91, 'Hams Aladiya', 156, NULL, 'Abu Dhabi ', NULL, '2020/02/07', '10', '', NULL, 0, '2020-02-07 16:30:11', '2020-02-07 11:00:11'),
(92, 'Al rayan ', 157, NULL, 'Abu Dhabi ', NULL, '2020/02/07', '10', '', NULL, 0, '2020-02-07 16:30:36', '2020-02-07 11:00:36'),
(93, 'Arna', 158, NULL, 'Abu Dhabi', NULL, '2020/02/07', '10', '', NULL, 0, '2020-02-07 16:31:58', '2020-02-07 11:01:58'),
(94, 'Ain Sahb', 159, NULL, 'Abu Dhabi ', NULL, '2020/02/07', '10', '', NULL, 0, '2020-02-07 16:33:30', '2020-02-07 11:03:30'),
(95, 'Shabab halab ', 160, NULL, 'Abu dhabi ', NULL, '2020/02/07', '10', '', NULL, 0, '2020-02-07 16:34:30', '2020-02-07 11:04:30'),
(96, ' Target sports ', 84, NULL, 'Abu dhabi', NULL, '2020/02/07', '10', '', NULL, 0, '2020-02-07 16:37:24', '2020-02-07 11:07:24'),
(97, 'Holy Guns', 161, NULL, 'Abu Dhabi', NULL, '2020/02/07', '10', '', NULL, 0, '2020-02-07 16:38:59', '2020-02-07 11:08:59'),
(98, 'Al Garah', 162, NULL, 'Abu Dhabi', NULL, '2020/02/07', '10', '', NULL, 0, '2020-02-07 16:40:21', '2020-02-07 11:10:21'),
(99, 'Algarah ', 163, NULL, 'Abu dhabi', NULL, '2020/02/07', '10', '', NULL, 0, '2020-02-07 16:40:35', '2020-02-07 11:10:35'),
(100, 'Bazlet', 164, NULL, 'Abu Dhabi', NULL, '2020/02/07', '10', '', NULL, 0, '2020-02-07 16:43:25', '2020-02-07 11:13:25'),
(101, 'Khalid Bin Waled', 165, NULL, 'Abu Dhabi', NULL, '2020/02/07', '10', '', NULL, 0, '2020-02-07 16:45:35', '2020-02-07 11:15:35'),
(102, 'Alarabi', 167, NULL, 'Abu dhabi', NULL, '2020/02/07', '10', '', NULL, 0, '2020-02-07 16:48:52', '2020-02-07 11:18:52'),
(103, 'Al Ftwa', 168, NULL, 'Abu Dhabi ', NULL, '2020/02/07', '10', '', NULL, 0, '2020-02-07 16:49:14', '2020-02-07 11:19:14'),
(104, 'Tiger syria ', 169, NULL, 'Abu dhabi ', NULL, '2020/02/07', '10', '', NULL, 0, '2020-02-07 16:51:26', '2020-02-07 11:21:26'),
(105, 'Alshahama', 174, NULL, 'Ad', NULL, '2020/02/08', '9', '1581186384.jpg', NULL, 0, '2020-02-08 23:56:28', '2020-02-08 18:26:28'),
(106, 'Marselia ', 183, NULL, 'Khorfakkan', NULL, '2020/02/11', '10', '', NULL, 0, '2020-02-11 21:38:13', '2020-02-11 16:08:13'),
(107, 'The emperror', 184, NULL, 'Khorfakkan', NULL, '2020/02/11', '10', '', NULL, 0, '2020-02-11 21:41:34', '2020-02-11 16:11:34'),
(108, 'Real madrid ', 185, NULL, 'Khorfakkan ', NULL, '2020/02/11', '10', '', NULL, 0, '2020-02-11 21:44:49', '2020-02-11 16:14:49'),
(109, 'Al ameed ', 186, NULL, 'Khorfakkan ', NULL, '2020/02/11', '10', '', NULL, 0, '2020-02-11 21:47:12', '2020-02-11 16:17:12'),
(110, 'Al alamy ', 187, NULL, 'Khorfakkan ', NULL, '2020/02/11', '10', '', NULL, 0, '2020-02-11 21:49:15', '2020-02-11 16:19:15'),
(111, 'El shark', 188, NULL, 'Khorfakkan ', NULL, '2020/02/11', '10', '', NULL, 0, '2020-02-11 21:51:48', '2020-02-11 16:21:48'),
(112, 'El loloyea ', 189, NULL, 'Khorfakkan ', NULL, '2020/02/11', '10', '', NULL, 0, '2020-02-11 21:53:58', '2020-02-11 16:23:59'),
(113, 'Ajax', 190, NULL, 'Khorfakkan ', NULL, '2020/02/11', '10', '', NULL, 0, '2020-02-11 21:55:58', '2020-02-11 16:25:58'),
(114, 'Uae Olympic', 203, 'coulambia@gmail.com', 'Abu dhabi', '05111111166', '2020-02-14', '10', '', '', 0, '2020-02-14 16:19:37', '2020-02-14 13:43:03'),
(115, 'Pakistan', 204, NULL, 'Abu dhabi ', NULL, '2020/02/14', '10', '', NULL, 0, '2020-02-14 16:22:43', '2020-02-14 10:52:43'),
(116, 'Yemen ', 205, NULL, 'Abudhabi', NULL, '2020/02/14', '10', '', NULL, 0, '2020-02-14 16:24:41', '2020-02-14 10:54:41'),
(117, 'Algerie', 206, NULL, 'Abu dhabi', NULL, '2020/02/14', '10', '', NULL, 0, '2020-02-14 16:26:18', '2020-02-14 10:56:18'),
(118, 'Dnjsjs', 214, NULL, 'Jsjdjen', NULL, '2020/02/19', '11', '', NULL, 0, '2020-02-19 01:47:34', '2020-02-18 20:17:34'),
(120, 'Al  forzan ', 216, NULL, 'Abu Dhabi ', NULL, '2020/02/20', '5', '', NULL, 0, '2020-02-20 20:34:47', '2020-02-20 15:04:47'),
(121, 'كينg', 221, NULL, 'شآنناي', NULL, '2020/02/24', '11', '', NULL, 0, '2020-02-24 15:46:29', '2020-02-24 10:16:29'),
(122, 'Kfnteam', 227, NULL, 'Khorfakkan', NULL, '2020/02/25', '11', '', NULL, 0, '2020-02-25 17:43:33', '2020-02-25 12:13:33'),
(123, 'شعبيه', 241, NULL, 'دبي', NULL, '2020/02/28', '7', '', NULL, 0, '2020-02-28 16:05:46', '2020-02-28 10:35:46'),
(124, 'Alain', 243, NULL, 'Shj', NULL, '2020/02/28', '6', '', NULL, 0, '2020-02-28 17:34:45', '2020-02-28 12:04:45'),
(125, 'fujairah', 244, NULL, 'الفجيرةfujairah', NULL, '2020/02/28', '7', '1582893680.jpg', NULL, 0, '2020-02-28 18:12:11', '2020-02-28 12:42:11'),
(126, 'الابطال', 250, NULL, 'العين', NULL, '2020/02/29', '10', '', NULL, 0, '2020-02-29 15:22:43', '2020-02-29 09:52:43'),
(128, 'ALASHBAL', 274, NULL, 'Alshahamma', NULL, '2020/03/06', '9', '', NULL, 0, '2020-03-06 14:37:12', '2020-03-06 09:07:12'),
(129, 'Hamdanovic', 282, NULL, 'AbuDhabi', NULL, '2020/03/10', '8', '', NULL, 0, '2020-03-10 22:02:46', '2020-03-10 16:32:46'),
(130, 'Motazrockerz', 283, NULL, 'Bahiya', NULL, '2020/03/11', '10', '', NULL, 0, '2020-03-11 13:37:48', '2020-03-11 08:07:48'),
(131, 'الطوية', 287, NULL, 'alain', NULL, '2020/03/12', '10', '', NULL, 0, '2020-03-12 23:09:21', '2020-03-12 17:39:21'),
(132, 'Sl3yers', 289, NULL, 'Alfalah', NULL, '2020/03/13', '7', '1584088136.jpg', NULL, 0, '2020-03-13 13:59:07', '2020-03-13 08:29:07'),
(133, 'CORONA', 290, NULL, 'Abu Dhabi', NULL, '2020/03/13', '6', '', NULL, 0, '2020-03-13 23:34:45', '2020-03-13 18:04:45'),
(134, 'Alzarooni', 291, NULL, 'Sharjah', NULL, '2020/03/14', '5', '1584126874.jpg', NULL, 0, '2020-03-14 00:45:06', '2020-03-13 19:15:06'),
(135, 'Wiper', 19, NULL, 'Chennai', NULL, '2020/03/14', '12', '1585749736.jpg', NULL, 0, '2020-03-14 02:50:55', '2020-04-01 17:40:45'),
(136, 'Aljazeera', 298, NULL, 'AD', NULL, '2020/03/18', '6', '1584535897.jpg', NULL, 0, '2020-03-18 18:22:35', '2020-03-18 12:52:35'),
(137, 'اصحاب السعاده ', 300, NULL, 'Abu dhabi ', NULL, '2020/03/19', '12', '', NULL, 0, '2020-03-19 06:26:54', '2020-03-19 00:56:54'),
(138, 'Numan Test', 303, NULL, 'Dubau', NULL, '2020/04/01', '12', '', NULL, 0, '2020-04-01 19:35:25', '2020-04-01 14:05:25'),
(139, 'Wiper', 19, NULL, 'Chennai', NULL, '2020/04/01', '22', '', NULL, 0, '2020-04-01 23:10:26', '2020-04-01 17:40:26');

-- --------------------------------------------------------

--
-- Table structure for table `yalla_tournament`
--

CREATE TABLE `yalla_tournament` (
  `tour_id` int(11) NOT NULL,
  `tour_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tour_address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `tour_city` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tour_contact` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tour_startdate` date DEFAULT NULL,
  `tour_enddate` date DEFAULT NULL,
  `tour_teamlimit` int(11) DEFAULT NULL,
  `tour_playerlimit` int(11) DEFAULT NULL,
  `tour_cmp_limit` int(11) DEFAULT NULL,
  `tour_groundname` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tour_type` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tour_regfees` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tour_trophy` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `award_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tour_booked_status` int(11) NOT NULL DEFAULT '1' COMMENT '1->Booked,2->Not Booked',
  `tour_delstatus` int(11) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tour_reglastdate` date DEFAULT NULL,
  `tour_winner_price` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tour_runner_price` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `tour_banner` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yalla_tournament`
--

INSERT INTO `yalla_tournament` (`tour_id`, `tour_name`, `tour_address`, `tour_city`, `tour_contact`, `tour_startdate`, `tour_enddate`, `tour_teamlimit`, `tour_playerlimit`, `tour_cmp_limit`, `tour_groundname`, `tour_type`, `tour_regfees`, `tour_trophy`, `award_id`, `tour_booked_status`, `tour_delstatus`, `created_at`, `updated_at`, `tour_reglastdate`, `tour_winner_price`, `tour_runner_price`, `tour_banner`) VALUES
(5, 'Captain Academy Tournament', 'Abudhabi', 'Alshawamekh', NULL, '2019-12-02', '2019-12-03', 12, 1, 12, '10', 'league', '500', '113562.jpg', '', 1, 0, NULL, '2019-12-01 15:36:11', '2019-12-01', '7000', '3000', '3169697.jpg'),
(6, 'VICTORY CUP 2019', 'Dubai', 'دبي', NULL, '2019-12-09', '2019-12-10', 2, 11, 2, '3', 'league', '90', '1754616.PNG', '1,2', 1, 1, NULL, '2020-02-10 13:28:17', '2019-12-08', '11', '11', '20602.PNG'),
(7, 'PayTM Cup', 'Nehru Stadium, Chennai', 'CHENNAI', NULL, '2020-02-24', '2020-02-24', 4, 11, 4, '13', 'league', '500', '677505.jpg', '1,2,3', 1, 1, NULL, '2020-02-24 11:57:53', '2020-02-24', '2000', '1000', '274468.jpg'),
(8, 'Test Cup', '', '', NULL, '2020-01-09', '2020-01-09', 8, 7, 6, '3', 'league', '0', '4366311.jpg', '', 1, 1, NULL, '2020-02-05 17:55:34', '2020-01-08', '', '', '475002.jpeg'),
(9, 'Dr Firas Tournament', '', '', NULL, '2020-01-10', '2020-01-10', 16, 11, 16, '19', 'league', '0', '', '', 1, 0, NULL, '2020-01-10 12:01:42', '2020-01-09', '', '', '489729.jpeg'),
(10, 'Target Syrian League Cup 2020', '', 'Abu Dhabi', NULL, '2020-02-07', '2020-02-07', 16, 10, 16, '19', 'league', '0', '', '', 1, 0, NULL, '2020-02-07 11:21:49', '2020-02-07', '', '', '490851.jpeg'),
(11, 'PAYTM Cup 2020', 'Neru stadium, chennai', 'Chennai', NULL, '2020-03-10', '2020-03-10', 1, 10, 0, '13', 'league', '500', '6259161.png', '1,2', 1, 1, NULL, '2020-03-09 09:23:37', '2020-03-08', '2000', '1000', '829294.jpg'),
(12, 'KhorFakkan league 2020', 'Al Sharq Stadium, KhorFakkan', 'Khor Fakkan', NULL, '2020-02-11', '2020-02-21', 8, 12, 8, '24', 'league', '1000', '8765497.png', '2', 1, 0, NULL, '2020-02-11 16:26:51', '2020-02-04', '7000', '3000', '805850.png'),
(13, 'Dr Firas Tournament 2020', 'Al Reem Island Koora Sports', 'Abu Dhabi', NULL, '2020-02-14', '2020-02-14', 16, 6, 16, '25', 'league', '0', '', '1,2', 1, 0, NULL, '2020-02-14 10:59:42', '2020-02-14', '10000', '5000', '475930.jpeg'),
(14, 'Street League ِالباهيه', 'ممر الزاجل منطقة الباهيه خلف حديقه الباهية', 'Abu Dhabi', NULL, '2020-03-20', '2020-03-20', 16, 15, 5, '31', 'league', '1400', '5170046.JPG', '1,2,3', 1, 0, NULL, '2020-03-19 00:57:27', '2020-03-19', '7000', '3000', '43349.png');

-- --------------------------------------------------------

--
-- Table structure for table `yalla_users`
--

CREATE TABLE `yalla_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `language` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT 'english',
  `text_align` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT 'ltr',
  `user_role` int(11) NOT NULL COMMENT '1->admin,2->ground owner',
  `user_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_phone` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_landline` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `user_country` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_area` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_city` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_zip` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_image` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `disp_status` int(10) DEFAULT '0' COMMENT '0->Active,1->InActive',
  `user_status` int(11) DEFAULT '0' COMMENT '0->Active,1->Deleted',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yalla_users`
--

INSERT INTO `yalla_users` (`user_id`, `user_name`, `language`, `text_align`, `user_role`, `user_email`, `user_password`, `user_phone`, `user_landline`, `user_address`, `user_country`, `user_area`, `user_city`, `user_zip`, `user_image`, `disp_status`, `user_status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'english', 'ltr', 1, 'streetleague.me@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '505497598', '', 'Abu Dubai', '0', 'Abu Dubai', 'Abu Dubai', 'Uae Icad2_', '3110557.png', 0, 0, '2020-02-20 19:06:20', '0000-00-00 00:00:00'),
(23, 'Al Rigga', 'english', 'ltr', 2, 'rigga@mailinator.com', 'e11170b8cbd2d74102651cb967fa28e5', '8341774432', '', '1 Al Rigga Rd - Dubai - United Arab Emirates', '0', 'United Arab Emirates', 'Dubai', '11', '1828021.png', 0, 0, '2020-02-20 18:10:00', NULL),
(24, 'Athletic Sports Academy', 'english', 'ltr', 2, 'athleticsportsfujairah@gmail.com', '68ef66e024ac043982348bb044592f3b', '0501922800', '', 'Al Ittihad - Al Owaid Rd - Fujairah - United Arab Emirates', '0', '16 Building Al Ittihad Road Fujairah', 'Fujairah', '', '4378725.jpg', 0, 0, '2019-08-15 10:27:22', NULL),
(25, 'United Football Club', 'english', 'ltr', 2, 'unitedfcfujairah@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '0581603658', '', 'Rugaylat Rd - Fujairah - United Arab Emirates', '0', 'Corniche Road, Fujairah City', 'Fujairah', '', '7100687.jpg', 0, 0, '2019-12-10 18:48:10', NULL),
(26, 'Al Forsan Football Club Sharjah', 'english', 'ltr', 2, 'alforsansharjah@gmail.com', 'a6576b8c6d2d56d173d31b4d0e024872', '0558933444', '', 'Unnamed Road - Sharjah - United Arab Emirates', '0', 'Saif Zone, near Emirates Auction', 'Sharjah', '', '9656377.JPG', 0, 0, '2019-08-18 06:05:18', NULL),
(27, 'Footbox Sports Playground', 'english', 'ltr', 2, 'footboxuaq@gmail.com', '7932271906b73e538d2148df4fb51e90', '0559559933', '', 'Unnamed Road - Umm Al Quwain (Umm Al Qiwain) - United Arab Emirates', '0', 'Al Abrab Um Al Quawain, United Arab Emirates', 'Um Al Quawain', '', '8901749.jpg', 0, 0, '2019-08-18 08:25:14', NULL),
(28, 'Jamahir Football Club', 'english', 'ltr', 2, 'jamahirfcfujairah@gmail.com', '85c07022b90bf0af71d4169dbdda8e0a', '0505221600', '', 'Corniche Rd - Fujairah - United Arab Emirates', '0', 'Corniche Road, Fujairah City', 'Fujairah', '', '5299844.jpg', 0, 0, '2019-08-22 09:17:42', NULL),
(29, 'Al Khan Beach Stadium', 'english', 'ltr', 2, 'alkhanfcsharjah@gmail.com', '649727e466d7fed34fd02edfb395a651', '0564328020', '', 'Unnamed Road - Sharjah - United Arab Emirates', '0', 'Al Khan Beach, Al Khan', 'Sharjah', '', '', 0, 0, '2019-08-22 09:33:16', NULL),
(30, 'Al Tanafus Sports Park', 'english', 'ltr', 2, 'altanafusfc@gmail.com', 'c98363a320bb3219002cea075248fbb4', '0557667888', '', 'شارع الحميدية - Ajman - United Arab Emirates', '0', 'Sports Park, Al Hamidiya 2', 'Ajman', '', '', 0, 0, '2019-08-22 09:55:55', NULL),
(31, 'Gulf Heroes Sports Center', 'english', 'ltr', 2, 'gulfheroessc@gmail.com', '383d56bd82f99729ddd05106c61b74ba', '0569766007', '', '24 12th St - Dubai - United Arab Emirates', '0', 'Mirdif, Dubai', 'Dubai', '', '', 0, 0, '2019-08-22 11:42:02', NULL),
(32, 'أكاديمية الألعاب الرياضية', 'english', 'ltr', 5, 'q@mailinator.com', 'b94cbf00661cc3594822d14d7c2877f2', '2000000000', '', 'الاتحاد - طريق العويد - الفجيرة - الإمارات العربية المتحدة', '0', 'مبنى 16 ، شارع الاتحاد ، الفجيرة', 'الفجيرة', '', '9326150.jpg', 0, 0, '2019-11-14 14:09:42', NULL),
(33, 'Quattro Sports Center', 'english', 'ltr', 2, 'quattrosportscenter@gmail.com', '6900f32c7e0ae121bd572888277a1c63', '0551902200', '067413032', 'As Safia Street, As Safia - Ajman - United Arab Emirates', '0', 'Al Safia Street', 'Ajman', '', '712546.jpg', 0, 0, '2019-09-05 11:34:58', NULL),
(34, 'Abdullah Al Qasmi', 'english', 'ltr', 2, 'streetleague.testmail@gmail.com', '9255daf968e27788df1a75e2f28f9b39', '0544564044', '', 'Al Ghaith Tower - Hamdan Bin Mohammed St - Abu Dhabi - United Arab Emirates', '0', 'Hamdan St.', 'Abu Dhabi', '', '', 0, 0, '2019-09-12 08:09:47', NULL),
(35, 'Captain Hamed', 'english', 'ltr', 2, 'CaptainAcademyae@gmail.com', 'cf651d401c31c7a547456da80a0a034d', '0561222993', '', '177 شارع الشاعر - Abu Dhabi - United Arab Emirates', '0', 'Al Shamkha', 'Abu Dhabi', '', '', 0, 0, '2019-11-14 14:08:11', NULL),
(36, 'Chadi', 'english', 'ltr', 2, 'chadistreetleague@gmail.com', 'cf69eb75112c271297019fcd024daf39', '0521010766', '', 'Agility Global integrated Logistics Jebel Ali South Zone U.A.E - Al Karamah St - Abu Dhabi - United Arab Emirates', '0', 'Delma Street', 'Abu Dhabi', '', '', 0, 0, '2020-01-10 07:46:02', NULL),
(37, 'David', 'english', 'ltr', 2, 'david@regionalsports.ae', '001618d711fe82d199445ab89e4b4442', '0508866369', '', 'Al Rahah St - Abu Dhabi - United Arab Emirates', '0', 'Al Bandar', 'Abu Dhabi', '', '', 0, 0, '2020-02-24 05:57:26', NULL),
(38, 'Alaa', 'english', 'ltr', 2, 'Alaafootballbahiya@gmail.com', '6b770f2c38c6ead81040b899c2eb1ce7', '0509877604', '', '33 شارع التَّوَاصُل - Abu Dhabi - United Arab Emirates', '0', 'Al Bahiya', 'Abu Dhabi', '', '', 0, 0, '2020-01-28 17:33:56', NULL),
(39, 'Test', 'english', 'ltr', 3, 'test@gmail.com', '3f2bf39e21acd8041270a7954c275720', '8341774432', '', 'v.o.c., Lalgudi, Tamil Nadu 621004, India', '0', 'chennai', 'Chennai', '600100', '3936750.jpg', 0, 0, '2020-01-29 19:09:58', NULL),
(40, 'Abdul Azeez', 'english', 'ltr', 2, 'moatazshahin5@gmail.com', '4f1ec1205410890323d761a63d78bfea', '0566511613', '', 'Unnamed Road - Sharjah - United Arab Emirates', '0', 'Khor Fakkan', 'Khor Fakkan', '', '', 0, 0, '2020-02-11 15:41:36', NULL),
(41, 'Mohamed el baw', 'english', 'ltr', 2, 'Moatazshahin5@gmail.com', 'f0a352883f3fab6f473ce07be952b58f', '0503342725', '', 'Al Rami St - Abu Dhabi - United Arab Emirates', '0', 'Reem Island', 'Abu Dhabi', '', '', 0, 0, '2020-02-14 09:29:46', NULL),
(42, 'Mohamod', 'english', 'ltr', 2, 'Mohamod@regionalsports.ae', '7345bc89e825c0757712928910c89c98', '0523739796', '', '1 شارع البَندَر - أبوظبي - United Arab Emirates', '0', 'Bandar', 'Abu Dhabi', '', '', 0, 0, '2020-02-20 09:26:52', NULL),
(43, 'Abu Jassem', 'english', 'ltr', 2, 'moatazhady7@gmail.com', '4450fa2bf984363f78c8ede6b6b81c75', '0563627610', '', 'E11 - Ras al Khaimah - United Arab Emirates', '0', 'Ras Alkhaimah', 'Ras  Alkhaimah', '02', '', 0, 0, '2020-02-23 19:25:34', NULL),
(44, 'Ahmed el dbany', 'english', 'ltr', 2, 'moatazhady7@gmail.com', 'ad33032182182ee0762969bf717acaef', '0508297027', '', 'Unnamed Road - Ras al Khaimah - United Arab Emirates', '0', 'Ras Alkhaimah', 'Ras Al Khaimah', '', '', 0, 0, '2020-02-23 20:28:35', NULL),
(45, 'Raaoof', 'english', 'ltr', 2, 'moatazhady7@gmail.com', 'c4585bf9c6bec74a9ee7fce177bcc997', '0503108810', '', 'Al Zajil Ln - Abu Dhabi - United Arab Emirates', '0', 'Al bahya', 'Abu Dhabi', '', '', 0, 0, '2020-03-08 09:02:36', NULL),
(46, 'Testing Owner', 'english', 'ltr', 2, 'dhamotharandev@gmail.com', '437be31154ba9030929dc2edbc2aa3f4', '8675990546', '', '20/9, Devi Karumariamman Nagar Extension, Velachery, Chennai, Tamil Nadu 600042, India', '0', 'TAMIL NADU', 'Chennai', '600042', '', 0, 0, '2020-04-01 19:04:24', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `current_tourn_points`
--
ALTER TABLE `current_tourn_points`
  ADD PRIMARY KEY (`ctp_id`);

--
-- Indexes for table `firebase_tokens`
--
ALTER TABLE `firebase_tokens`
  ADD PRIMARY KEY (`fcm_id`),
  ADD KEY `fk_firebase_tokens` (`user_id`);

--
-- Indexes for table `ground_working_hours`
--
ALTER TABLE `ground_working_hours`
  ADD PRIMARY KEY (`work_hour_id`);

--
-- Indexes for table `invite_friendly_game`
--
ALTER TABLE `invite_friendly_game`
  ADD PRIMARY KEY (`if_game_id`);

--
-- Indexes for table `join_team_notification`
--
ALTER TABLE `join_team_notification`
  ADD PRIMARY KEY (`jt_noti_id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`phrase_id`);

--
-- Indexes for table `logo_settings`
--
ALTER TABLE `logo_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp_expiry`
--
ALTER TABLE `otp_expiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_gateway_settings`
--
ALTER TABLE `payment_gateway_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `player_review_rating`
--
ALTER TABLE `player_review_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sleague_bookings`
--
ALTER TABLE `sleague_bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `sleague_bulk_bookings`
--
ALTER TABLE `sleague_bulk_bookings`
  ADD PRIMARY KEY (`bulk_booking_id`);

--
-- Indexes for table `sleague_ground_facility`
--
ALTER TABLE `sleague_ground_facility`
  ADD PRIMARY KEY (`facility_id`);

--
-- Indexes for table `sleague_ground_size_duration`
--
ALTER TABLE `sleague_ground_size_duration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sleague_payments`
--
ALTER TABLE `sleague_payments`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `sleague_players`
--
ALTER TABLE `sleague_players`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `sleague_review_rating`
--
ALTER TABLE `sleague_review_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sleague_team_rating`
--
ALTER TABLE `sleague_team_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sleague_tourn_awards`
--
ALTER TABLE `sleague_tourn_awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sleague_tourn_register_teams`
--
ALTER TABLE `sleague_tourn_register_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sl_add_team_notification`
--
ALTER TABLE `sl_add_team_notification`
  ADD PRIMARY KEY (`at_noti_id`);

--
-- Indexes for table `sl_split_payment`
--
ALTER TABLE `sl_split_payment`
  ADD PRIMARY KEY (`sp_id`);

--
-- Indexes for table `sms_content_field`
--
ALTER TABLE `sms_content_field`
  ADD PRIMARY KEY (`sms_content_field_id`);

--
-- Indexes for table `sms_settings`
--
ALTER TABLE `sms_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smtp_settings`
--
ALTER TABLE `smtp_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourn_match_result`
--
ALTER TABLE `tourn_match_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourn_match_schedule`
--
ALTER TABLE `tourn_match_schedule`
  ADD PRIMARY KEY (`tourn_match_id`);

--
-- Indexes for table `version`
--
ALTER TABLE `version`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yalla_ground`
--
ALTER TABLE `yalla_ground`
  ADD PRIMARY KEY (`ground_id`);

--
-- Indexes for table `yalla_team`
--
ALTER TABLE `yalla_team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `yalla_tournament`
--
ALTER TABLE `yalla_tournament`
  ADD PRIMARY KEY (`tour_id`);

--
-- Indexes for table `yalla_users`
--
ALTER TABLE `yalla_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `current_tourn_points`
--
ALTER TABLE `current_tourn_points`
  MODIFY `ctp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;

--
-- AUTO_INCREMENT for table `firebase_tokens`
--
ALTER TABLE `firebase_tokens`
  MODIFY `fcm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `ground_working_hours`
--
ALTER TABLE `ground_working_hours`
  MODIFY `work_hour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;

--
-- AUTO_INCREMENT for table `invite_friendly_game`
--
ALTER TABLE `invite_friendly_game`
  MODIFY `if_game_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `join_team_notification`
--
ALTER TABLE `join_team_notification`
  MODIFY `jt_noti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `phrase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=366;

--
-- AUTO_INCREMENT for table `logo_settings`
--
ALTER TABLE `logo_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `otp_expiry`
--
ALTER TABLE `otp_expiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `payment_gateway_settings`
--
ALTER TABLE `payment_gateway_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `player_review_rating`
--
ALTER TABLE `player_review_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sleague_bookings`
--
ALTER TABLE `sleague_bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=283;

--
-- AUTO_INCREMENT for table `sleague_bulk_bookings`
--
ALTER TABLE `sleague_bulk_bookings`
  MODIFY `bulk_booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sleague_ground_facility`
--
ALTER TABLE `sleague_ground_facility`
  MODIFY `facility_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sleague_ground_size_duration`
--
ALTER TABLE `sleague_ground_size_duration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `sleague_payments`
--
ALTER TABLE `sleague_payments`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `sleague_players`
--
ALTER TABLE `sleague_players`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=304;

--
-- AUTO_INCREMENT for table `sleague_review_rating`
--
ALTER TABLE `sleague_review_rating`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sleague_team_rating`
--
ALTER TABLE `sleague_team_rating`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sleague_tourn_awards`
--
ALTER TABLE `sleague_tourn_awards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sleague_tourn_register_teams`
--
ALTER TABLE `sleague_tourn_register_teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `sl_add_team_notification`
--
ALTER TABLE `sl_add_team_notification`
  MODIFY `at_noti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `sl_split_payment`
--
ALTER TABLE `sl_split_payment`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sms_content_field`
--
ALTER TABLE `sms_content_field`
  MODIFY `sms_content_field_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sms_settings`
--
ALTER TABLE `sms_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `smtp_settings`
--
ALTER TABLE `smtp_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tourn_match_result`
--
ALTER TABLE `tourn_match_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `tourn_match_schedule`
--
ALTER TABLE `tourn_match_schedule`
  MODIFY `tourn_match_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `version`
--
ALTER TABLE `version`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `yalla_ground`
--
ALTER TABLE `yalla_ground`
  MODIFY `ground_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `yalla_team`
--
ALTER TABLE `yalla_team`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `yalla_tournament`
--
ALTER TABLE `yalla_tournament`
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `yalla_users`
--
ALTER TABLE `yalla_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
