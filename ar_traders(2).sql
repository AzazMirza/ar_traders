-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2024 at 05:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ar traders`
--

-- --------------------------------------------------------

--
-- Table structure for table `acbalance`
--

CREATE TABLE `acbalance` (
  `id` int(10) NOT NULL,
  `ACbalance` int(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `acbalance`
--

INSERT INTO `acbalance` (`id`, `ACbalance`, `date`) VALUES
(1, 130, '2024-02-22'),
(12, 40, '2024-02-24'),
(14, 0, '2024-02-25'),
(15, -28319, '2024-02-26'),
(16, 10, '2024-02-27'),
(17, -14640, '2024-10-30'),
(18, -14500, '2024-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `cashregister`
--

CREATE TABLE `cashregister` (
  `id` int(10) NOT NULL,
  `openingBalance` int(30) NOT NULL,
  `dispatch` int(20) NOT NULL,
  `discount` int(20) NOT NULL,
  `goods` int(20) NOT NULL,
  `claim` int(20) NOT NULL,
  `recovery` int(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cashregister`
--

INSERT INTO `cashregister` (`id`, `openingBalance`, `dispatch`, `discount`, `goods`, `claim`, `recovery`, `date`) VALUES
(8, 221, 231, 29, 100, 0, 5, '2024-02-26'),
(9, 100, 100, 10, 10, 10, 10, '2024-02-27'),
(10, 9360, 9170, 2, 0, 0, 0, '2024-10-30'),
(11, 16500, 16500, 0, 0, 0, 0, '2024-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `clienthistory`
--

CREATE TABLE `clienthistory` (
  `id` int(20) NOT NULL,
  `c_name` varchar(50) DEFAULT NULL,
  `credit` int(20) DEFAULT NULL,
  `amount` int(20) DEFAULT NULL,
  `newCredit` int(30) DEFAULT NULL,
  `debit` int(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `cnic` bigint(50) DEFAULT NULL,
  `ntn` int(50) DEFAULT NULL,
  `shopName` varchar(50) DEFAULT NULL,
  `personName` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clienthistory`
--

INSERT INTO `clienthistory` (`id`, `c_name`, `credit`, `amount`, `newCredit`, `debit`, `address`, `phone`, `cnic`, `ntn`, `shopName`, `personName`, `city`, `date`) VALUES
(44, 'after', 12, 0, 111, 0, 'aaaaaassqsss', 121, 1212, 121, '12qw', 'qwqw', 'qwqw', '2024-02-11'),
(45, 'after email', 111, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-11'),
(46, 'after email', 111, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-11'),
(47, 'after email', 111, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-11'),
(48, 'after email', 111, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-11'),
(49, 'after email', 111, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-12'),
(50, 'after email', 111, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-12'),
(51, 'after email', 111, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-12'),
(52, 'after email', 111, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-12'),
(53, 'after email', 111, 12, 12, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-12'),
(54, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-12'),
(55, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-12'),
(56, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-12'),
(57, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-12'),
(58, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-12'),
(59, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-12'),
(60, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-12'),
(61, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-12'),
(62, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-12'),
(63, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-12'),
(64, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-12'),
(65, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-12'),
(66, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-12'),
(67, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-12'),
(68, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-12'),
(69, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-12'),
(70, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-12'),
(71, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-12'),
(72, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-13'),
(73, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-13'),
(74, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-13'),
(75, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-13'),
(76, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-13'),
(77, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-13'),
(78, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-13'),
(79, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-13'),
(80, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-13'),
(81, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-13'),
(82, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-13'),
(83, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-13'),
(84, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-13'),
(85, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-13'),
(86, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-13'),
(87, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-13'),
(88, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-13'),
(89, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-13'),
(90, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-14'),
(91, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-14'),
(92, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-14'),
(93, 'after email', 12, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-14'),
(94, 'after email', 0, 0, 0, NULL, 'aaaaaasssss', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-14'),
(95, 'a', 0, 200, 0, NULL, 'a', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-15'),
(96, 'a', 0, 200, 0, NULL, 'a', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-15'),
(97, 'a', 0, 200, 0, NULL, 'a', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-15'),
(98, 'a', 0, 10, 0, NULL, 'a', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-15'),
(99, 'a', 1, 3, 0, 3, 'a', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-15'),
(100, 'a', 5, 10, 0, 0, 'a', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-15'),
(101, 'a', 10, 5, 0, 0, 'a', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-15'),
(102, 'a', 10, 6, 4, 0, 'a', 0, 0, 0, '0 results', NULL, '0 results', '2024-02-15'),
(103, 'after email', 123, 122, 1, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-17'),
(104, 'after email', 123, 11, 112, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-17'),
(105, 'after email', 123, 111, 12, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-17'),
(106, 'after email', 123, 111, 12, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-17'),
(107, 'after email', 123, 23, 100, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-17'),
(108, 'after email', 100, 10, 90, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-17'),
(109, 'after email', 90, 10, 80, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-17'),
(110, 'after email', 80, 0, 100, -20, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-18'),
(111, 'after email', 100, 0, 120, -40, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-18'),
(112, 'after email', 120, 20, 140, -60, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-18'),
(113, 'after email', 140, 10, 150, -70, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-18'),
(114, 'after email', 150, 10, 160, -80, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-18'),
(115, 'after email', 160, 10, 170, -90, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-18'),
(116, 'after email', 170, 7, 177, -97, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-18'),
(117, 'after email', 177, 5, 182, -102, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-18'),
(118, 'after email', 182, 3, 185, -105, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-18'),
(119, 'after email', 185, 5, 190, -110, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-18'),
(120, 'after email', 190, 5, 195, -115, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-18'),
(121, 'after email', 195, 5, 200, -120, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-18'),
(122, 'after email', 200, 5, 205, -125, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-18'),
(123, 'after email', 205, 5, 210, -130, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-18'),
(124, 'after email', 210, 5, 215, -135, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-18'),
(125, 'after email', 215, 5, 220, -140, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-18'),
(126, 'after email', 220, 5, 225, -145, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-18'),
(127, 'after email', 225, 5, 230, -150, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-18'),
(128, ' azaz ', 1, 4, 5, -4, '', 0, 0, 0, '', '', '', '2024-02-18'),
(129, 'after email', 230, 5, 235, -155, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-18'),
(130, 'after email', 235, 5, 240, -160, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-18'),
(131, 'after email', 235, 5, 245, -165, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-18'),
(132, 'after email', 245, 5, 250, -170, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-18'),
(133, 'after email', 250, 5, 255, -175, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-18'),
(134, 'after email', 255, 5, 260, -180, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-18'),
(135, 'after email', 260, 5, 265, -185, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-18'),
(136, 'after email', 250, 5, 270, -190, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-18'),
(137, 'after email', 270, 5, 275, -195, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-18'),
(138, 'after email', 275, 5, 280, -200, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-18'),
(139, 'after email', 280, 5, 285, -205, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-18'),
(140, 'after email', 285, 5, 290, -210, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-18'),
(141, 'after email', 290, 5, 295, -215, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-18'),
(142, 'after email', 20, 2, 18, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-19'),
(143, 'after email', 0, 100, 0, 82, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-19'),
(144, 'after email', 0, 100, 0, 10, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-19'),
(145, 'after email', 0, 60, 0, 10, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-19'),
(146, 'after email', 1009, 60, 949, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-21'),
(147, 'after email', 949, 60, 889, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-22'),
(148, 'after email', 889, 60, 829, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-22'),
(149, 'after email', 829, 78, 751, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-22'),
(150, 'after email', 751, 51, 700, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-22'),
(151, 'after email', 700, 5, 695, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-22'),
(152, 'after email', 695, 5, 690, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-22'),
(153, 'after email', 690, 10, 680, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-22'),
(154, 'after email', 680, 10, 670, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-22'),
(155, 'after email', 670, 10, 660, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-22'),
(156, 'after email', 660, 10, 650, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-22'),
(157, 'after email', 650, 50, 600, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-22'),
(158, 'after email', 600, 10, 590, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-22'),
(159, 'after email', 590, 10, 580, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-22'),
(160, 'after email', 580, 10, 570, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-22'),
(161, 'after email', 570, 10, 560, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-22'),
(162, 'after email', 560, 10, 550, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-22'),
(163, 'after email', 550, 10, 540, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-22'),
(164, 'after email', 540, 10, 530, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-22'),
(165, 'after email', 530, 10, 520, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-22'),
(166, 'after email', 520, 10, 510, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-22'),
(167, 'after email', 510, 10, 500, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-23'),
(168, 'after email', 500, 10, 490, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-23'),
(169, 'after email', 490, 10, 480, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-23'),
(170, 'after email', 480, 10, 470, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-23'),
(171, 'after email', 470, 10, 460, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-23'),
(172, 'after email', 460, 10, 450, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-23'),
(173, 'after email', 450, 10, 440, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-23'),
(174, 'after email', 440, 10, 430, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-23'),
(175, 'after email', 430, 10, 420, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-23'),
(176, 'after email', 420, 10, 410, 0, 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-23'),
(178, 'azaz', 0, 10, 0, 10, 'aaaaaa', 0, 0, 0, '', '', '', '2024-02-26'),
(179, 'azaz', 0, 10, 0, 10, 'aaaaaa', 0, 0, 0, '', '', '', '2024-02-26'),
(185, 'after email', 610, 10, 600, 0, 'aaaaaasssss', 656565656, 6554545565, 767656453, 'uuyyuy', '', 'hghghg', '2024-10-30'),
(186, 'after email', 600, 10, 590, 0, 'aaaaaasssss', 656565656, 6554545565, 767656453, 'uuyyuy', '', 'hghghg', '2024-10-30'),
(187, 'after email', 590, 170, 420, 0, 'aaaaaasssss', 656565656, 6554545565, 767656453, 'uuyyuy', '', 'hghghg', '2024-10-30'),
(188, 'after email', 420, 170, 250, 0, 'aaaaaasssss', 656565656, 6554545565, 767656453, 'uuyyuy', '', 'hghghg', '2024-10-30'),
(189, 'azaz', 0, 3000, 0, 3000, 'aaaaaa', 0, 0, 0, '', '', '', '2024-10-30'),
(190, 'azaz', 0, 3000, 0, 3000, 'aaaaaa', 0, 0, 0, '', '', '', '2024-10-30'),
(191, 'azaz', 0, 3000, 0, 6000, 'aaaaaa', 0, 0, 0, '', '', '', '2024-10-30'),
(192, 'azaz', 0, 6000, 0, 5900, 'aaaaaa', 2323, 1212121, 121212, 'asaas', '', 'asasas', '2024-11-01'),
(193, 'azaz', 0, 3000, 0, 8900, 'aaaaaa', 0, 0, 0, '', '', '', '2024-11-01'),
(194, 'azaz', 0, 3000, 0, 11900, 'aaaaaa', 0, 0, 0, '', '', '', '2024-11-01'),
(195, 'azaz', 0, 3000, 0, 14900, 'aaaaaa', 2323, 1212121, 121212, 'asaas', '', 'asasas', '2024-11-01'),
(196, 'azaz', 0, 1500, 0, 16400, 'aaaaaa', 2147483647, 6554545565, 12121212, 'shop', '', 'gujrat', '2024-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(30) NOT NULL,
  `c_name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `credit` int(30) DEFAULT NULL,
  `debit` int(30) DEFAULT NULL,
  `phone` bigint(50) DEFAULT NULL,
  `cnic` bigint(50) DEFAULT NULL,
  `ntn` bigint(50) DEFAULT NULL,
  `shopName` varchar(50) DEFAULT NULL,
  `personName` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `c_name`, `address`, `credit`, `debit`, `phone`, `cnic`, `ntn`, `shopName`, `personName`, `city`, `date`) VALUES
(9, 'azaz', 'aaaaaa', 0, 16400, 3058491064, 6554545565, 12121212, 'shop', 'azaz', 'gujrat', '2024-02-15'),
(10, 'after email', 'aaaaaasssss', 255, 0, 656565656, 6554545565, 767656453, 'uuyyuy', 'hghgth', 'hghghg', '2024-02-15'),
(11, 'assa', 'aaaaaa', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-15'),
(12, 'ddd', 'jhjh', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-15'),
(13, 'ggfgf', 'hghg', 123, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-15');

-- --------------------------------------------------------

--
-- Table structure for table `creditdebit`
--

CREATE TABLE `creditdebit` (
  `id` int(10) NOT NULL,
  `credit` int(30) NOT NULL,
  `debit` int(30) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `creditdebit`
--

INSERT INTO `creditdebit` (`id`, `credit`, `debit`, `date`) VALUES
(2, 0, 600, '2024-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `dispatchdiscount`
--

CREATE TABLE `dispatchdiscount` (
  `id` int(10) NOT NULL,
  `dispatch` int(30) NOT NULL,
  `discount` int(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dispatchdiscount`
--

INSERT INTO `dispatchdiscount` (`id`, `dispatch`, `discount`, `date`) VALUES
(1, 60, 0, '2024-02-21'),
(2, 120, 100, '2024-02-22'),
(3, 351, 171, '2024-02-26'),
(4, 100, 100, '2024-02-27'),
(5, 9340, 2, '2024-10-30'),
(6, 10500, 0, '2024-11-01'),
(7, 10500, 0, '2024-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(20) NOT NULL,
  `expense` varchar(50) DEFAULT NULL,
  `personName` varchar(50) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `expense`, `personName`, `amount`, `date`) VALUES
(14, 'qqqq', 'qqqq', 0, '2024-02-18'),
(15, 'aasas', 'azaz', 100, '2024-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `id` int(10) NOT NULL,
  `Iname` varchar(30) DEFAULT NULL,
  `c_name` varchar(30) DEFAULT NULL,
  `quantity` int(30) NOT NULL,
  `rate` int(30) NOT NULL,
  `amount` int(30) NOT NULL,
  `g_name` varchar(30) DEFAULT NULL,
  `phone` bigint(50) DEFAULT NULL,
  `cnic` bigint(50) DEFAULT NULL,
  `ntn` bigint(50) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`id`, `Iname`, `c_name`, `quantity`, `rate`, `amount`, `g_name`, `phone`, `cnic`, `ntn`, `address`, `city`, `date`) VALUES
(4, ' item', 'after email', 0, 20, 100, 'azaz', 656565656, 6554545565, 767656453, 'aaaaaasssss', 'hghghg', '2024-02-25'),
(5, ' item', 'after email', 10, 20, 200, 'azaz', 656565656, 6554545565, 767656453, 'aaaaaasssss', 'hghghg', '2024-02-25'),
(6, ' item', 'after email', 5, 20, 100, 'azaz', 656565656, 6554545565, 767656453, 'aaaaaasssss', 'hghghg', '2024-02-25'),
(7, ' item', 'after email', 5, 20, 100, 'azaz', 656565656, 6554545565, 767656453, 'aaaaaasssss', 'hghghg', '2024-02-25'),
(8, ' item', 'after email', 5, 20, 100, 'azaz', 656565656, 6554545565, 767656453, 'aaaaaasssss', 'hghghg', '2024-02-25'),
(9, ' item', 'after email', 5, 20, 100, 'azaz', 656565656, 6554545565, 767656453, 'aaaaaasssss', 'hghghg', '2024-02-25'),
(10, ' item', 'after email', 5, 20, 100, 'azaz', 656565656, 6554545565, 767656453, 'aaaaaasssss', 'hghghg', '2024-02-25'),
(11, ' item', 'after email', 5, 20, 100, 'azaz', 656565656, 6554545565, 767656453, 'aaaaaasssss', 'hghghg', '2024-02-25'),
(12, ' item', 'after email', 5, 20, 100, 'azaz', 656565656, 6554545565, 767656453, 'aaaaaasssss', 'hghghg', '2024-02-25'),
(13, ' item', 'after email', 5, 20, 100, 'azaz', 656565656, 6554545565, 767656453, 'aaaaaasssss', 'hghghg', '2024-02-25'),
(20, ' item', 'after email', 5, 20, 100, 'azaz', 656565656, 6554545565, 767656453, 'aaaaaasssss', 'hghghg', '2024-02-26'),
(21, ' item', 'after email', 5, 20, 100, 'azaz', 656565656, 6554545565, 767656453, 'aaaaaasssss', 'hghghg', '2024-02-26'),
(22, ' item', 'after email', 5, 20, 100, 'azaz', 656565656, 6554545565, 767656453, 'aaaaaasssss', 'hghghg', '2024-02-26');

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `id` int(30) NOT NULL,
  `g_name` varchar(50) DEFAULT NULL,
  `date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`id`, `g_name`, `date`) VALUES
(1, 'azaz', '2023-12-28'),
(2, 'azaz', '2023-12-28'),
(3, 'azaz', '2023-12-28'),
(4, 'raees', '2023-12-28'),
(5, 'raees', '2023-12-28'),
(6, 'raees', '2023-12-28'),
(7, 'azaz', '2023-12-28'),
(8, 'azaz', '2023-12-28'),
(9, 'azaz', '2023-12-28'),
(10, 'azaz', '2023-12-28'),
(11, 'azaz', '2023-12-28'),
(12, 'asds', '2023-12-28'),
(13, '', '2023-12-28'),
(14, '', '2023-12-28'),
(15, '', '2023-12-28'),
(16, '', '2023-12-28'),
(17, 'aaa', '2023-12-28'),
(18, 'aaa', '2023-12-28'),
(19, 'azaz', '2023-12-28'),
(20, 'azzzz', '2023-12-29'),
(21, 'azzzz', '2023-12-29'),
(22, 'azzzz', '2023-12-29'),
(23, 'azzzz', '2023-12-29'),
(24, 'azzzz', '2023-12-29'),
(25, 'azzzz', '2023-12-29'),
(26, 'azzzz', '2023-12-29'),
(27, 'azzzz', '2023-12-29'),
(28, 'azzzz', '2023-12-29'),
(29, 'azzzz', '2023-12-29'),
(30, 'azzzz', '2023-12-29'),
(31, 'azzzz', '2023-12-29'),
(32, 'azzzz', '2023-12-29'),
(33, 'azzzz', '2023-12-29'),
(34, 'azzzz', '2023-12-29'),
(35, 'aaaaa', '2023-12-29'),
(36, 'aaaaa', '2023-12-29'),
(37, 'aaaaa', '2023-12-29'),
(38, 'asdf', '2023-12-29'),
(39, 'asdf', '2023-12-29'),
(40, 'asdf', '2023-12-29'),
(41, 'asdf', '2023-12-29'),
(42, 'asdf', '2023-12-29'),
(43, 'aaaaa', '2023-12-29'),
(44, 'aaaaa', '2023-12-29'),
(45, 'aaaaaaaa', '2023-12-30'),
(46, 'aaaaaaaa', '2023-12-30'),
(47, 'aaaaaaaa', '2023-12-30'),
(48, 'aaaaaaaa', '2023-12-30'),
(49, 'aaaaaaaa', '2023-12-30'),
(50, 'asdf', '2023-12-30'),
(51, 'asdf', '2023-12-30'),
(52, 'aaaaa', '2023-12-30'),
(53, 'azzzazzzazzz', '2023-12-30'),
(54, 'azzzazzzaz', '2023-12-30'),
(55, 'azzzazzzz', '2023-12-30'),
(56, 'azzzzzzz', '2023-12-30'),
(57, 'aaaaaaaaaa', '2023-12-30'),
(58, '12', '2023-12-30'),
(59, 'aaaaa1', '2023-12-30'),
(60, 'asdf', '2023-12-30'),
(61, 'asdf', '2023-12-30'),
(62, 'asdf', '2023-12-30'),
(63, '123', '2023-12-30'),
(64, '1234321', '2023-12-30'),
(65, 'asdf', '2023-12-30'),
(66, 'zazaz', '2023-12-30'),
(67, 'zazaz', '2023-12-30'),
(68, 'sadsadsa', '2023-12-30'),
(69, 'nnn', '2023-12-30'),
(70, 'ccc', '2023-12-30'),
(71, 'jjj', '2023-12-30'),
(72, 'kk', '2023-12-30'),
(73, 'azzz', '2024-01-01'),
(74, 'asdf', '2024-01-01'),
(75, 'azaz', '2024-01-03'),
(76, 'moter cycle tyres set', '2024-01-03'),
(77, 'aaaaaa123111', '2024-01-03'),
(78, 'asdf', '2024-01-07'),
(79, 'azaz', '2024-01-07'),
(80, '1', '2024-01-07'),
(81, 'all groups', '2024-01-15'),
(82, 'ccc', '2024-01-15'),
(83, 'mbnb', '2024-01-15'),
(84, 'a11', '2024-01-19'),
(85, 'aa', '2024-01-20'),
(86, 'a', '2024-01-20'),
(87, 'a ', '2024-01-20'),
(88, '111q11', '2024-01-24'),
(89, 'doctor', '2024-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(30) NOT NULL,
  `Iname` varchar(50) DEFAULT NULL,
  `ItemDesc` varchar(50) DEFAULT NULL,
  `Rate` varchar(50) DEFAULT NULL,
  `salePrice` varchar(50) DEFAULT NULL,
  `wholeSale` varchar(50) DEFAULT NULL,
  `retail` varchar(50) DEFAULT NULL,
  `g_name` varchar(50) DEFAULT NULL,
  `date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `Iname`, `ItemDesc`, `Rate`, `salePrice`, `wholeSale`, `retail`, `g_name`, `date`) VALUES
(33, ' item', 'a', '10', '20', '20', '20', 'azaz', '2023-12-28'),
(34, ' a ', 'a', 'a', 'a', 'a', 'a', 'azzzz', '2024-01-01'),
(35, ' a ', 'a', 'a', 'a', 'a', 'a', 'aaaaa1', '2024-01-01'),
(37, ' a ', 'qwq', 'qwq', 'qwq', 'qwq', 'qwq', 'qwq', '2024-01-01'),
(38, ' a ', 'df', 'fdfd', 'fdfd', 'fdfd', 'fdf', 'ffd', '2024-01-01'),
(40, ' a ', '', '', '', '', '', '', '2024-01-01'),
(41, ' az ', 'zz', 'zzz', 'zz', 'zz', 'zz', 'azaz', '2024-01-03'),
(43, '22517fll4pr', '2.25-17f-(4PR)long life', '1913', '2200', '2100', '0', 'moter cycle tyres set', '2024-01-03'),
(45, 'b', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-07'),
(46, 'b', NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-07'),
(47, ' pp ', '2.25-17f-(4PR)long life', '12', '15', '14', '', 'azzzazzzaz', '2024-01-11'),
(48, ' 2 ', '2.25-17f-(4PR)long life', '999', '2200', '14', '111', 'azzzazzzazzz', '2024-01-15'),
(49, ' 2 ', 'a', 'a', 'a', 'a', 'a', 'azaz', '2024-01-19'),
(51, ' hbh ', '', '', '', '', '', '', '2024-02-03'),
(52, ' asdf ', '', '', '', '', '', '', '2024-02-06'),
(53, ' asdf ', 'asdf', '', '', '', '', '', '2024-02-06'),
(54, ' asdf ', 'asdf', 'fdsa', '', '', '', '', '2024-02-06'),
(55, ' asdf ', 'asdf', 'fdsa', '', '', '', '', '2024-02-06'),
(56, ' asdf ', 'asdf', 'fdsa', '', '', '', '', '2024-02-06'),
(57, ' as ', '', '', '', '', '', 'azaz', '2024-02-06'),
(58, ' as ', 'x', '', '', '', '', 'azaz', '2024-02-06'),
(59, ' as ', 'x', 'z', '', '', '', 'azaz', '2024-02-06'),
(60, ' as ', 'x', 'z', 'c', '', '', 'azaz', '2024-02-06'),
(61, ' as ', 'x', 'z', 'c', 'd', '', 'azaz', '2024-02-06'),
(62, ' as ', 'x', 'z', 'c', 'd', 's', 'azaz', '2024-02-06'),
(63, ' as ', 'x', 'z', 'c', 'd', 's', 'azaz', '2024-02-06'),
(64, ' as ', 'x', 'z', 'c', 'd', 's', 'azaz', '2024-02-06'),
(65, ' as ', 'x', 'z', 'c', 'd', 's', 'azaz', '2024-02-06'),
(66, ' as ', '', '', '', '', '', 'azaz', '2024-02-06'),
(67, ' as ', 'as', '', '', '', '', 'azaz', '2024-02-06'),
(68, ' as ', 'as', 'ds', '', '', '', 'azaz', '2024-02-06'),
(69, ' as ', 'as', 'ds', 'ds', '', '', 'azaz', '2024-02-06'),
(70, ' as ', 'as', 'ds', 'ds', 'ac', '', 'azaz', '2024-02-06'),
(71, ' as ', 'as', 'ds', 'ds', 'ac', 'ac', 'azaz', '2024-02-06'),
(72, ' as ', 'as', 'ds', 'ds', 'ac', 'ac', 'azaz', '2024-02-06'),
(73, ' as ', 'as', 'ds', 'ds', 'ac', 'ac', 'azaz', '2024-02-06'),
(74, ' as ', 'as', 'ds', 'ds', 'ac', 'ac', 'azaz', '2024-02-06'),
(75, ' as ', 'as', 'ds', 'ds', 'ac', 'ac', 'azaz', '2024-02-06'),
(76, ' as ', 'as', 'ds', 'ds', 'ac', 'ac', 'azaz', '2024-02-06'),
(77, ' as ', 'as', 'ds', 'ds', 'ac', 'ac', 'azaz', '2024-02-06'),
(78, ' as ', 'as', 'ds', 'ds', 'ac', 'ac', 'azaz', '2024-02-06'),
(79, ' as ', 'as', 'ds', 'ds', 'ac', 'ac', 'azaz', '2024-02-06'),
(80, ' as ', 'as', 'ds', 'ds', 'ac', 'ac', 'azaz', '2024-02-06'),
(81, ' as ', 'as', 'ds', 'ds', 'ac', 'ac', 'azaz', '2024-02-06'),
(82, ' as ', 'as', 'ds', 'ds', 'ac', 'ac', 'azaz', '2024-02-06'),
(83, ' as ', 'as', 'ds', 'ds', 'ac', 'ac', 'azaz', '2024-02-06'),
(84, ' as ', 'as', 'ds', 'ds', 'ac', 'ac', 'azaz', '2024-02-06'),
(85, ' as ', 'as', 'ds', 'ds', 'ac', 'ac', 'azaz', '2024-02-06'),
(86, ' as ', 'as', 'ds', 'ds', 'ac', 'ac', 'azaz', '2024-02-06'),
(87, ' as ', 'as', 'ds', 'ds', 'ac', 'ac', 'azaz', '2024-02-06'),
(88, ' as ', 'as', 'ds', 'ds', 'ac', 'ac', 'azaz', '2024-02-06'),
(89, ' as ', 'as', 'ds', 'ds', 'ac', 'ac', 'azaz', '2024-02-06'),
(90, ' as ', 'as', 'ds', 'ds', 'ac', 'ac', 'azaz', '2024-02-06'),
(91, ' as ', 'as', 'ds', 'ds', 'ac', 'ac', 'azaz', '2024-02-06'),
(92, ' as ', 'as', 'ds', 'ds', 'ac', 'ac', 'azaz', '2024-02-06'),
(93, ' as ', 'as', 'ds', 'ds', 'ac', 'ac', 'azaz', '2024-02-06'),
(94, ' as ', '', '', '', '', '', 'asds', '2024-02-06'),
(95, ' as ', 'ax', 'zx', 's', 'xz', 'z', 'raees', '2024-02-06'),
(96, ' as ', 'ax', 'zx', 's', 'xz', 'z', 'raees', '2024-02-06'),
(97, ' as ', 'ax', 'zx', 's', 'xz', 'z', 'raees', '2024-02-06'),
(98, ' as ', 'ax', 'zx', 's', 'xz', 'z', 'raees', '2024-02-06'),
(99, ' as ', 'ax', 'zx', 's', 'xz', 'z', 'raees', '2024-02-06'),
(100, ' as ', 'ax', 'zx', 's', 'xz', 'z', 'raees', '2024-02-06'),
(101, ' as ', 'ax', 'zx', 's', 'xz', 'z', 'raees', '2024-02-06'),
(102, ' as ', 'ax', 'zx', 's', 'xz', 'z', 'raees', '2024-02-06'),
(103, ' as ', 'ax', 'zx', 's', 'xz', 'z', 'raees', '2024-02-06'),
(104, ' as ', 'ax', 'zx', 's', 'xz', 'z', 'raees', '2024-02-06'),
(105, ' as ', 'ax', 'zx', 's', 'xz', 'z', 'raees', '2024-02-06'),
(106, ' as ', 'ax', 'zx', 's', 'xz', 'z', 'raees', '2024-02-06'),
(107, ' as ', 'ax', 'zx', 's', 'xz', 'z', 'raees', '2024-02-06'),
(108, ' as ', 'ax', 'zx', 's', 'xz', 'z', 'raees', '2024-02-06'),
(109, ' as ', '', '', '', '', '', 'aaa', '2024-02-06'),
(110, ' as ', 'as', '', '', '', '', 'aaa', '2024-02-06'),
(111, ' as ', 'as', 'ds', '', '', '', 'aaa', '2024-02-06'),
(112, ' as ', 'as', 'ds', 'ds', '', '', 'aaa', '2024-02-06'),
(113, ' as ', 'as', 'ds', 'ds', '', '', 'aaa', '2024-02-06'),
(114, ' as ', 'as', 'ds', 'ds', 'f', 'd', 'aaa', '2024-02-06'),
(115, ' as ', 'as', 'ds', 'ds', 'f', 'd', 'aaa', '2024-02-06'),
(116, ' as ', 'as', 'ds', 'ds', 'f', 'd', 'aaa', '2024-02-06'),
(117, ' as ', 'as', 'ds', 'ds', 'f', 'd', 'aaa', '2024-02-06'),
(118, ' as ', 'as', 'ds', 'ds', 'f', 'd', 'aaa', '2024-02-06'),
(119, ' as ', 'as', 'ds', 'ds', 'f', 'd', 'aaa', '2024-02-06'),
(120, ' as ', 'as', 'ds', 'ds', 'f', 'd', 'aaa', '2024-02-06'),
(121, ' as ', 'as', 'ds', 'ds', 'f', 'd', 'aaa', '2024-02-06'),
(122, ' as ', 'as', 'ds', 'ds', 'f', 'd', 'aaa', '2024-02-06'),
(123, ' as ', 'as', 'ds', 'ds', 'f', 'd', 'aaa', '2024-02-06'),
(124, ' as ', 'as', 'ds', 'ds', 'f', 'd', 'aaa', '2024-02-06'),
(125, ' as ', 'as', 'ds', 'ds', 'f', 'd', 'aaa', '2024-02-06'),
(126, ' as ', 'as', 'ds', 'ds', 'f', 'd', 'aaa', '2024-02-06'),
(127, ' as ', 'as', 'ds', 'ds', 'f', 'd', 'aaa', '2024-02-06'),
(128, ' as ', 'as', 'ds', 'ds', 'f', 'd', 'aaa', '2024-02-06'),
(129, ' as ', 'as', 'ds', 'ds', 'f', 'd', 'aaa', '2024-02-06'),
(130, ' as ', 'as', 'ds', 'ds', 'f', 'd', 'aaa', '2024-02-06'),
(131, ' as ', 'as', 'ds', 'ds', 'f', 'd', 'aaa', '2024-02-06'),
(133, ' as ', '', '79', '89', '87', '', 'azaz', '2024-02-06'),
(134, 'a', '2.25-17f-(4PR)long life', '999', '2200', '87', '111', '', '2024-02-15'),
(135, 'phone', 'acha phone', '100', '150', '150', '1212', 'doctor', '2024-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `radio`
--

CREATE TABLE `radio` (
  `id` int(30) NOT NULL,
  `c_name` varchar(50) DEFAULT NULL,
  `credit` int(30) DEFAULT NULL,
  `amount` int(50) DEFAULT NULL,
  `debit` int(30) DEFAULT NULL,
  `paymentType` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `phone` int(50) DEFAULT NULL,
  `cnic` bigint(50) DEFAULT NULL,
  `ntn` bigint(50) DEFAULT NULL,
  `shopName` varchar(50) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `radio`
--

INSERT INTO `radio` (`id`, `c_name`, `credit`, `amount`, `debit`, `paymentType`, `address`, `phone`, `cnic`, `ntn`, `shopName`, `city`, `date`) VALUES
(19, '123456', 123, 123, 12311, 'Bank', 'sdas', 1211, 1212, 1212, 'jhhjj', 'hhjh', '2024-02-17'),
(22, 'azaz', 0, 0, 0, 'Account Adjustment', 'sd', 2323, 1212121, 121212, 'asaas', 'asasas', '2024-02-17'),
(25, 'azaz', 0, 12345, 0, 'Bank', 'sd', 2323, 1212121, 121212, 'asaas', 'asasas', '2024-02-18'),
(26, 'azaz', NULL, 0, NULL, 'Bank', NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-18'),
(27, 'azaz', NULL, 1000, NULL, 'Bank', NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-18'),
(28, 'azaz', NULL, 12345, NULL, 'Bank', NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-18'),
(29, 'azaz', NULL, 12345, NULL, 'Bank', NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-18'),
(30, 'azaz', NULL, 12345, NULL, 'Bank', NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-18'),
(33, 'after email', NULL, 5, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-18'),
(34, 'after email', NULL, 5, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-18'),
(35, 'after email', NULL, 5, NULL, 'Cheque', NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-18'),
(36, 'after email', NULL, 5, NULL, 'Cash', NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-18'),
(37, 'after email', NULL, 5, NULL, 'Cheque', NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-18'),
(38, 'after email', NULL, 5, NULL, 'Cash', NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-18'),
(40, ' azaz ', 20, 6, 0, 'bank', '', 0, 0, 0, '', '', '2024-02-18'),
(41, ' azaz ', 30, 10, 0, 'Cash', '', 0, 0, 0, '', '', '2024-02-18'),
(42, 'a', 10, 10, 0, 'Cash', 'a', 0, 0, 0, '', '', '2024-02-18'),
(43, 'a', 10, 10, 0, 'Cash', 'a', 0, 0, 0, '', '', '2024-02-18'),
(44, 'a', 10, 10, 0, 'Cash', 'a', 0, 0, 0, '', '', '2024-02-18'),
(45, 'after email', 20, 20, 0, 'Cash', 'aaaaaasssss', 0, 0, 0, '', '', '2024-02-18'),
(46, 'after email', 20, 5, 5, 'Cheque', 'aaaaaasssss', 0, 0, 0, '', '', '2024-02-18'),
(47, 'after email', 1009, 10, 0, 'Cheque', 'aaaaaasssss', 0, 0, 0, '', '', '2024-02-20'),
(48, 'after email', 510, 100, 0, 'Cheque', 'aaaaaasssss', 2147483647, 283782738723, 82378273827, 'sjkdkjk', 'jdsdjkdj', '2024-02-23'),
(49, 'after email', 610, 100, 0, 'Cheque', 'aaaaaasssss', 2147483647, 283782738723, 82378273827, 'sjkdkjk', 'jdsdjkdj', '2024-02-23'),
(50, 'after email', 255, 5, 0, 'Cash', 'aaaaaasssss', 656565656, 6554545565, 767656453, 'uuyyuy', 'hghghg', '2024-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `receivable`
--

CREATE TABLE `receivable` (
  `id` int(10) NOT NULL,
  `c_name` varchar(30) DEFAULT NULL,
  `amount` int(30) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recovery`
--

CREATE TABLE `recovery` (
  `id` int(10) NOT NULL,
  `c_name` varchar(30) DEFAULT NULL,
  `credit` int(20) NOT NULL,
  `debit` int(20) NOT NULL,
  `amount` int(20) NOT NULL,
  `paymentType` varchar(10) DEFAULT NULL,
  `Address` varchar(30) DEFAULT NULL,
  `phone` bigint(50) DEFAULT NULL,
  `cnic` bigint(50) DEFAULT NULL,
  `ntn` bigint(50) DEFAULT NULL,
  `shopName` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `receiver` varchar(10) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recovery`
--

INSERT INTO `recovery` (`id`, `c_name`, `credit`, `debit`, `amount`, `paymentType`, `Address`, `phone`, `cnic`, `ntn`, `shopName`, `city`, `receiver`, `date`) VALUES
(1, 'after email', 610, -100, 100, 'Cheque', 'aaaaaasssss', 3058491064, 283782738723, 82378273827, 'sjkdkjk', 'jdsdjkdj', 'azaz', '2024-02-23'),
(8, 'after email', 610, 0, 10, 'Cheque', 'aaaaaasssss', 0, 0, 0, '', '', NULL, '2024-02-24'),
(9, 'after email', 610, 10, 10, 'Cheque', 'aaaaaasssss', 0, 0, 0, '', '', NULL, '2024-02-24'),
(10, 'after email', 610, 0, 10, 'Cash', 'aaaaaasssss', 0, 0, 0, '', '', NULL, '2024-02-24'),
(11, 'after email', 610, 0, 10, 'bank', 'aaaaaasssss', 0, 0, 0, '', '', NULL, '2024-02-24'),
(12, 'after email', 610, 0, 10, 'Cash', 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-24'),
(13, 'after email', 610, 0, 10, '', 'aaaaaasssss', 0, 0, 0, 'asasas', 'hghgh', 'azaz', '2024-02-24'),
(16, 'after email', 610, 0, 10, 'bank', 'aaaaaasssss', 0, 0, 0, '', '', 'azaz', '2024-02-24'),
(17, 'after email', 610, 0, 10, 'bank', 'aaaaaasssss', 0, 0, 0, '', '', 'azaz', '2024-02-24'),
(18, 'after email', 610, 0, 10, 'Cheque', 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-24'),
(19, 'after email', 610, 90, 10, 'Cheque', 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-24'),
(20, 'after email', 610, 80, 10, 'Cheque', 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-24'),
(21, 'after email', 610, 0, 80, 'bank', 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-24'),
(22, 'after email', 610, 0, 10, 'Cheque', 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-24'),
(23, 'after email', 610, 0, 5, 'Cheque', 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-24'),
(24, 'after email', 610, 0, 44, 'Cheque', 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-24'),
(25, 'after email', 610, 0, 10, 'Cash', 'aaaaaasssss', 0, 0, 0, '', '', '', '2024-02-24'),
(26, 'after email', 610, 0, 10, 'bank', 'aaaaaasssss', 656565656, 6554545565, 767656453, 'uuyyuy', 'hghghg', '', '2024-02-24'),
(27, 'after email', 610, 90, 10, 'bank', 'aaaaaasssss', 656565656, 6554545565, 767656453, 'uuyyuy', 'hghghg', '', '2024-02-24'),
(28, 'after email', 610, 0, 10, 'bank', 'aaaaaasssss', 656565656, 6554545565, 767656453, 'uuyyuy', 'hghghg', '', '2024-02-24'),
(29, 'after email', 610, 80, 10, 'bank', 'aaaaaasssss', 656565656, 6554545565, 767656453, 'uuyyuy', 'hghghg', '', '2024-02-24'),
(30, 'after email', 610, 0, 10, 'Cheque', 'aaaaaasssss', 656565656, 6554545565, 767656453, 'uuyyuy', 'hghghg', '', '2024-02-24'),
(31, 'after email', 610, 0, 10, 'bank', 'aaaaaasssss', 656565656, 6554545565, 767656453, 'uuyyuy', 'hghghg', '', '2024-02-24'),
(32, 'after email', 610, 0, 10, 'Cash', 'aaaaaasssss', 656565656, 6554545565, 767656453, 'uuyyuy', 'hghghg', '', '2024-02-24'),
(33, 'after email', 610, 0, 10, 'Cheque', 'aaaaaasssss', 656565656, 6554545565, 767656453, 'uuyyuy', 'hghghg', '', '2024-02-24'),
(34, 'after email', 610, 60, 10, 'bank', 'aaaaaasssss', 656565656, 6554545565, 767656453, 'uuyyuy', 'hghghg', '', '2024-02-25'),
(35, 'after email', 610, 50, 10, 'Cheque', 'aaaaaasssss', 656565656, 6554545565, 767656453, 'uuyyuy', 'hghghg', '', '2024-02-25'),
(36, 'after email', 610, 40, 10, 'Cash', 'aaaaaasssss', 656565656, 6554545565, 767656453, 'uuyyuy', 'hghghg', '', '2024-02-25'),
(37, 'after email', 610, 30, 10, 'bank', 'aaaaaasssss', 656565656, 6554545565, 767656453, 'uuyyuy', 'hghghg', '', '2024-02-25'),
(38, 'after email', 610, 10, 20, 'Cheque', 'aaaaaasssss', 656565656, 6554545565, 767656453, 'uuyyuy', 'hghghg', '', '2024-02-25'),
(39, 'after email', 610, 10, 20, 'Cheque', 'aaaaaasssss', 656565656, 6554545565, 767656453, 'uuyyuy', 'hghghg', '', '2024-02-25'),
(40, NULL, 0, 0, 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-26'),
(41, NULL, 0, 0, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27'),
(42, 'after email', 610, 5, 5, 'Cheque', 'aaaaaasssss', 656565656, 6554545565, 767656453, 'uuyyuy', 'hghghg', '', '2024-02-26');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(10) NOT NULL,
  `Iname` varchar(50) DEFAULT NULL,
  `Quantity` int(10) NOT NULL,
  `Rate` int(10) NOT NULL,
  `salesRate` int(30) NOT NULL,
  `value` int(10) NOT NULL,
  `Discount` int(10) NOT NULL,
  `perdiscount` int(10) NOT NULL,
  `Total` int(10) NOT NULL,
  `Billing` int(10) NOT NULL,
  `g_name` varchar(50) DEFAULT NULL,
  `supplier` varchar(50) DEFAULT NULL,
  `vehicalNumber` varchar(25) DEFAULT NULL,
  `invoice` int(20) NOT NULL,
  `date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `Iname`, `Quantity`, `Rate`, `salesRate`, `value`, `Discount`, `perdiscount`, `Total`, `Billing`, `g_name`, `supplier`, `vehicalNumber`, `invoice`, `date`) VALUES
(99, 'phone', 380, 100, 0, 10000, 0, 0, 0, 10000, 'phone', 'azaz', 'aaaa', 1, '2024-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `stockhistory`
--

CREATE TABLE `stockhistory` (
  `id` int(10) NOT NULL,
  `Iname` varchar(30) DEFAULT NULL,
  `Quantity` int(20) NOT NULL,
  `rate` int(20) NOT NULL,
  `value` int(20) NOT NULL,
  `Discount` int(20) NOT NULL,
  `perdiscount` int(20) NOT NULL,
  `Total` int(20) NOT NULL,
  `Billing` int(20) NOT NULL,
  `g_name` varchar(30) DEFAULT NULL,
  `supplier` varchar(30) DEFAULT NULL,
  `vehicalNumber` varchar(20) DEFAULT NULL,
  `invoice` int(20) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stockhistory`
--

INSERT INTO `stockhistory` (`id`, `Iname`, `Quantity`, `rate`, `value`, `Discount`, `perdiscount`, `Total`, `Billing`, `g_name`, `supplier`, `vehicalNumber`, `invoice`, `date`) VALUES
(1, '22517fll4pr', 11, 1913, 21043, 0, 0, 0, 21043, '22517fll4pr', 'azaz', 'gff767', 1, '2024-02-26'),
(3, 'phone', 100, 100, 10000, 0, 0, 0, 10000, 'phone', 'azaz', 'aaaa', 1, '2024-10-30'),
(4, 'phone', 10, 100, 1000, 0, 0, 0, 1000, 'phone', 'azaz', 'aaaa', 1, '2024-10-30'),
(5, 'phone', 10, 100, 1000, 0, 0, 0, 1000, 'phone', 'azaz', 'aaaa', 2, '2024-10-30'),
(6, 'phone', 10, 100, 1000, 0, 0, 0, 1000, 'phone', 'azaz', 'aaaa', 2, '2024-10-30'),
(7, 'phone', 10, 100, 1000, 0, 0, 0, 1000, 'phone', 'azaz', '', 2, '2024-10-30'),
(8, 'phone', 10, 100, 1000, 0, 0, 0, 1000, 'phone', 'azaz', '', 2, '2024-10-30'),
(9, 'phone', 10, 100, 1000, 0, 0, 0, 1000, 'phone', 'azaz', '', 0, '2024-10-30'),
(10, 'phone', 20, 100, 2000, 0, 0, 0, 2000, 'phone', 'azaz', '', 0, '2024-10-30'),
(11, 'phone', 20, 100, 2000, 0, 0, 0, 2000, 'phone', 'azaz', '', 0, '2024-10-30'),
(12, 'phone', 20, 100, 2000, 0, 0, 0, 2000, 'phone', 'azaz', '', 0, '2024-10-30'),
(13, 'phone', 20, 100, 2000, 0, 0, 0, 2000, 'phone', 'azaz', '', 0, '2024-10-30'),
(14, 'phone', 30, 100, 3000, 0, 0, 0, 3000, 'phone', 'azaz', 'asas12', 2, '2024-11-01'),
(15, 'phone', 20, 100, 2000, 0, 0, 0, 2000, 'phone', 'azaz', 'asas12', 0, '2024-11-01'),
(16, 'phone', 20, 100, 2000, 0, 0, 0, 2000, 'phone', 'azaz', 'asas12', 0, '2024-11-01'),
(17, 'phone', 20, 100, 2000, 0, 0, 0, 2000, 'phone', 'azaz', 'asas12', 0, '2024-11-01'),
(18, 'phone', 40, 100, 4000, 0, 0, 0, 4000, 'phone', 'azaz', '', 0, '2024-11-01'),
(19, 'phone', 30, 100, 3000, 0, 0, 0, 3000, 'phone', 'azaz', '', 0, '2024-11-01'),
(20, 'phone', 20, 100, 2000, 0, 0, 0, 2000, 'phone', 'azaz', '', 0, '2024-11-01'),
(21, 'phone', 30, 100, 3000, 0, 0, 0, 3000, 'phone', 'azaz', '', 0, '2024-11-01'),
(22, 'phone', 20, 100, 2000, 0, 0, 0, 2000, 'phone', 'azaz', '', 0, '2024-11-01'),
(23, 'phone', 20, 100, 2000, 0, 0, 0, 2000, 'phone', 'azaz', '', 0, '2024-11-01'),
(24, 'phone', 20, 100, 2000, 0, 0, 0, 2000, 'phone', 'azaz', '', 0, '2024-11-01'),
(25, 'phone', 20, 100, 2000, 0, 0, 0, 2000, 'phone', 'azaz', '', 0, '2024-11-01'),
(26, 'phone', 20, 100, 2000, 0, 0, 0, 2000, 'phone', 'azaz', '', 0, '2024-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `stocksales`
--

CREATE TABLE `stocksales` (
  `id` int(20) NOT NULL,
  `Iname` varchar(50) DEFAULT NULL,
  `sQuantity` int(30) NOT NULL,
  `Rate` int(30) NOT NULL,
  `value` int(30) NOT NULL,
  `Discount` int(30) NOT NULL,
  `perdiscount` int(30) NOT NULL,
  `Total` int(30) NOT NULL,
  `Billing` int(30) NOT NULL,
  `g_name` varchar(50) DEFAULT NULL,
  `Client` varchar(50) DEFAULT NULL,
  `vehicalNumber` varchar(30) DEFAULT NULL,
  `invoice` int(30) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stocksales`
--

INSERT INTO `stocksales` (`id`, `Iname`, `sQuantity`, `Rate`, `value`, `Discount`, `perdiscount`, `Total`, `Billing`, `g_name`, `Client`, `vehicalNumber`, `invoice`, `date`) VALUES
(140, '22517fll4pr', 5, 2200, 11000, 0, 0, 0, 11000, 'moter cycle tyres set', 'after email', '', 0, '2024-02-13'),
(141, ' item', 7, 0, 0, 0, 0, 0, 0, 'azaz', 'after email', '', 0, '2024-02-13'),
(142, '22517fll4pr', 5, 2200, 0, 2, 2, 10, 10770, 'moter cycle tyres set', 'after email', '', 0, '2024-02-14'),
(143, '22517fll4pr', 5, 2200, 0, 2, 2, 56, 60312, 'moter cycle tyres set', 'after email', '', 0, '2024-02-14'),
(144, '22517fll4pr', 5, 2200, 61600, 0, 0, 0, 61600, 'moter cycle tyres set', 'after email', '', 0, '2024-02-14'),
(145, '22517fll4pr', 1, 2200, 2200, 2, 1, 2, 2176, 'moter cycle tyres set', 'after email', '', 0, '2024-02-14'),
(146, '22517fll4pr', 2, 2200, 4400, 2, 1, 4, 4352, 'moter cycle tyres set', 'after email', '', 0, '2024-02-14'),
(147, '22517fll4pr', 3, 2200, 6600, 2, 1, 6, 6528, 'moter cycle tyres set', 'after email', '', 0, '2024-02-14'),
(148, '22517fll4pr', 4, 2200, 8800, 2, 1, 8, 8704, 'moter cycle tyres set', 'after email', '', 0, '2024-02-14'),
(149, '22517fll4pr', 5, 2200, 11000, 2, 1, 10, 10880, 'moter cycle tyres set', 'after email', '', 0, '2024-02-14'),
(150, '22517fll4pr', 6, 2200, 13200, 2, 1, 12, 13056, 'moter cycle tyres set', 'after email', '', 0, '2024-02-14'),
(151, '22517fll4pr', 7, 2200, 15400, 2, 1, 14, 15232, 'moter cycle tyres set', 'after email', '', 0, '2024-02-14'),
(152, '22517fll4pr', 9, 2200, 19800, 2, 1, 18, 19584, 'moter cycle tyres set', 'after email', '', 0, '2024-02-14'),
(153, '22517fll4pr', 10, 2200, 22000, 2, 1, 20, 21760, 'moter cycle tyres set', 'after email', '', 0, '2024-02-14'),
(154, '22517fll4pr', 1, 2200, 2200, 2, 1, 2, 2176, 'moter cycle tyres set', 'after email', '', 0, '2024-02-14'),
(155, '22517fll4pr', 2, 2200, 4400, 2, 1, 4, 4352, 'moter cycle tyres set', 'after email', '', 0, '2024-02-14'),
(156, '22517fll4pr', 3, 2200, 6600, 2, 1, 6, 6528, 'moter cycle tyres set', 'after email', '', 0, '2024-02-14'),
(157, '22517fll4pr', 4, 2200, 8800, 2, 1, 8, 8704, 'moter cycle tyres set', 'after email', '', 0, '2024-02-14'),
(158, '22517fll4pr', 5, 2200, 11000, 2, 1, 10, 10880, 'moter cycle tyres set', 'after email', '', 0, '2024-02-14'),
(159, '22517fll4pr', 6, 2200, 13200, 2, 1, 12, 13056, 'moter cycle tyres set', 'after email', '', 0, '2024-02-14'),
(160, '22517fll4pr', 7, 2200, 15400, 2, 1, 14, 15232, 'moter cycle tyres set', 'after email', '', 0, '2024-02-14'),
(161, '22517fll4pr', 9, 2200, 19800, 2, 1, 18, 19584, 'moter cycle tyres set', 'after email', '', 0, '2024-02-14'),
(162, '22517fll4pr', 10, 2200, 22000, 2, 1, 20, 21760, 'moter cycle tyres set', 'after email', '', 0, '2024-02-14'),
(163, '22517fll4pr', 6, 2200, 13200, 0, 0, 0, 13200, 'moter cycle tyres set', 'after email', '', 0, '2024-02-14'),
(164, '22517fll4pr', 3, 2200, 6600, 0, 0, 0, 6600, 'moter cycle tyres set', 'a', '', 0, '2024-02-15'),
(165, '22517fll4pr', 55, 2200, 121000, 0, 0, 0, 121000, 'moter cycle tyres set', 'a', '', 0, '2024-02-15'),
(166, '22517fll4pr', 55, 2200, 121000, 0, 0, 0, 121000, 'moter cycle tyres set', 'a', '', 0, '2024-02-15'),
(167, '22517fll4pr', 7, 2200, 15400, 0, 0, 0, 15400, 'moter cycle tyres set', 'a', '', 0, '2024-02-15'),
(168, '22517fll4pr', 7, 2200, 15400, 0, 0, 0, 15400, 'moter cycle tyres set', 'a', '', 0, '2024-02-15'),
(169, '22517fll4pr', 7, 2200, 15400, 0, 0, 0, 15400, 'moter cycle tyres set', 'a', '', 0, '2024-02-15'),
(170, '22517fll4pr', 7, 2200, 15400, 0, 0, 0, 15400, 'moter cycle tyres set', 'a', '', 0, '2024-02-15'),
(171, '22517fll4pr', 7, 2200, 15400, 0, 0, 0, 15400, 'moter cycle tyres set', 'a', '', 0, '2024-02-15'),
(172, '22517fll4pr', 7, 2200, 15400, 0, 0, 0, 15400, 'moter cycle tyres set', 'a', '', 0, '2024-02-15'),
(173, '22517fll4pr', 9999, 2200, 21997800, 0, 0, 0, 21997800, 'moter cycle tyres set', 'after email', '', 0, '2024-02-17'),
(174, '22517fll4pr', 89768, 2200, 197489600, 0, 0, 0, 197489600, 'moter cycle tyres set', 'after email', '', 0, '2024-02-17'),
(175, '22517fll4pr', 60, 2200, 132000, 0, 0, 0, 132000, 'moter cycle tyres set', 'after email', '', 0, '2024-02-17'),
(176, '22517fll4pr', 30, 2200, 66000, 0, 0, 0, 66000, 'moter cycle tyres set', 'after email', '', 0, '2024-02-17'),
(177, '22517fll4pr', 10, 2200, 22000, 0, 0, 0, 22000, 'moter cycle tyres set', 'after email', '', 0, '2024-02-17'),
(178, '22517fll4pr', 180, 2200, 396000, 0, 0, 0, 396000, 'moter cycle tyres set', 'after email', '', 0, '2024-02-17'),
(179, '22517fll4pr', 2, 2200, 4400, 0, 0, 0, 4400, 'moter cycle tyres set', 'after email', '', 0, '2024-02-19'),
(180, '22517fll4pr', 4, 2200, 8800, 0, 0, 0, 8800, 'moter cycle tyres set', 'after email', '', 0, '2024-02-19'),
(181, '22517fll4pr', 4, 2200, 8800, 0, 0, 0, 8800, 'moter cycle tyres set', 'after email', '', 0, '2024-02-19'),
(182, '22517fll4pr', 1, 2200, 2200, 0, 0, 0, 2200, 'moter cycle tyres set', 'after email', '', 0, '2024-02-21'),
(183, '22517fll4pr', 1, 2200, 2200, 0, 0, 0, 2200, 'moter cycle tyres set', 'after email', '', 0, '2024-02-22'),
(184, '22517fll4pr', 1, 2200, 2200, 0, 0, 0, 2200, 'moter cycle tyres set', 'after email', '', 0, '2024-02-22'),
(185, '22517fll4pr', 77, 2200, 169400, 0, 0, 0, 169400, 'moter cycle tyres set', 'after email', '', 0, '2024-02-22'),
(186, '22517fll4pr', 20, 2200, 44000, 0, 0, 0, 44000, 'moter cycle tyres set', 'after email', '', 0, '2024-02-22'),
(187, '22517fll4pr', 50, 2200, 110000, 0, 0, 0, 110000, 'moter cycle tyres set', 'after email', '', 0, '2024-02-22'),
(188, '22517fll4pr', 50, 2200, 110000, 0, 0, 0, 110000, 'moter cycle tyres set', 'after email', '', 0, '2024-02-22'),
(189, '22517fll4pr', 10, 2200, 22000, 0, 0, 0, 22000, 'moter cycle tyres set', 'after email', '', 0, '2024-02-22'),
(190, '22517fll4pr', 10, 2200, 22000, 0, 0, 0, 22000, 'moter cycle tyres set', 'after email', '', 0, '2024-02-22'),
(191, '22517fll4pr', 10, 2200, 22000, 0, 0, 0, 22000, 'moter cycle tyres set', 'after email', '', 0, '2024-02-22'),
(192, '22517fll4pr', 10, 2200, 22000, 0, 0, 0, 22000, 'moter cycle tyres set', 'after email', '', 0, '2024-02-22'),
(193, '22517fll4pr', 10, 2200, 22000, 10, 0, 100, 21900, 'moter cycle tyres set', 'after email', '', 0, '2024-02-22'),
(194, '22517fll4pr', 10, 2200, 22000, 10, 0, 100, 21900, 'moter cycle tyres set', 'after email', '', 0, '2024-02-22'),
(195, '22517fll4pr', 10, 2200, 22000, 0, 0, 0, 22000, 'moter cycle tyres set', 'after email', '', 0, '2024-02-22'),
(196, '22517fll4pr', 10, 2200, 22000, 0, 0, 0, 22000, 'moter cycle tyres set', 'after email', '', 0, '2024-02-22'),
(197, '22517fll4pr', 10, 2200, 22000, 0, 0, 0, 22000, 'moter cycle tyres set', 'after email', '', 0, '2024-02-22'),
(198, '22517fll4pr', 10, 2200, 22000, 0, 0, 0, 22000, 'moter cycle tyres set', 'after email', '', 0, '2024-02-22'),
(199, '22517fll4pr', 10, 2200, 22000, 10, 0, 100, 21900, 'moter cycle tyres set', 'after email', '', 0, '2024-02-22'),
(200, '22517fll4pr', 10, 2200, 22000, 10, 0, 100, 21900, 'moter cycle tyres set', 'after email', '', 0, '2024-02-22'),
(201, '22517fll4pr', 5, 2200, 11000, 10, 0, 50, 10950, 'moter cycle tyres set', 'after email', '', 0, '2024-02-22'),
(202, '22517fll4pr', 5, 2200, 11000, 10, 0, 50, 10950, 'moter cycle tyres set', 'after email', '', 0, '2024-02-22'),
(203, '22517fll4pr', 10, 2200, 22000, 10, 0, 100, 21900, 'moter cycle tyres set', 'after email', '', 0, '2024-02-23'),
(204, '22517fll4pr', 10, 2200, 22000, 10, 0, 100, 21900, 'moter cycle tyres set', 'after email', '', 0, '2024-02-23'),
(205, '22517fll4pr', 10, 2200, 22000, 5, 0, 50, 21950, 'moter cycle tyres set', 'after email', '', 0, '2024-02-23'),
(206, '22517fll4pr', 10, 2200, 22000, 5, 0, 50, 21950, 'moter cycle tyres set', 'after email', '', 0, '2024-02-23'),
(207, '22517fll4pr', 10, 2200, 22000, 11, 0, 110, 21890, 'moter cycle tyres set', 'after email', '', 0, '2024-02-23'),
(208, '22517fll4pr', 10, 2200, 22000, 0, 0, 0, 22000, 'moter cycle tyres set', 'after email', '', 0, '2024-02-23'),
(209, '22517fll4pr', 10, 2200, 22000, 0, 0, 0, 22000, 'moter cycle tyres set', 'after email', '', 0, '2024-02-23'),
(210, '22517fll4pr', 5, 2200, 11000, 0, 0, 0, 11000, 'moter cycle tyres set', 'after email', '', 0, '2024-02-23'),
(211, '22517fll4pr', 5, 2200, 11000, 0, 0, 0, 11000, 'moter cycle tyres set', 'after email', '', 0, '2024-02-23'),
(212, '22517fll4pr', 5, 2200, 11000, 0, 0, 0, 11000, 'moter cycle tyres set', 'after email', '', 0, '2024-02-23'),
(213, '22517fll4pr', 5, 2200, 11000, 4, 0, 20, 10980, 'moter cycle tyres set', 'after email', '', 0, '2024-02-23'),
(214, '22517fll4pr', 10, 2200, 22000, 5, 0, 50, 21950, 'moter cycle tyres set', 'after email', '', 0, '2024-02-23'),
(215, '22517fll4pr', 1, 2200, 2200, 11, 0, 11, 2189, 'moter cycle tyres set', 'azaz', '', 0, '2024-02-26'),
(216, '22517fll4pr', 1, 2200, 2200, 11, 0, 11, 2189, 'moter cycle tyres set', 'azaz', '', 0, '2024-02-26'),
(217, '22517fll4pr', 1, 2200, 2200, 1, 0, 1, 2199, 'moter cycle tyres set', 'azaz', '', 0, '2024-02-26'),
(218, '22517fll4pr', 1, 2200, 2200, 1, 0, 1, 2199, 'moter cycle tyres set', 'azaz', '', 0, '2024-02-26'),
(219, '22517fll4pr', 2, 2200, 4400, 2, 0, 4, 4396, 'moter cycle tyres set', 'azaz', '', 0, '2024-02-26'),
(220, '22517fll4pr', 2, 2200, 4400, 2, 0, 4, 4396, 'moter cycle tyres set', 'azaz', '', 0, '2024-02-26'),
(221, '22517fll4pr', 1, 2200, 2200, 1, 0, 1, 2199, 'moter cycle tyres set', 'azaz', '', 0, '2024-02-26'),
(222, ' item', 10, 20, 200, 2, 1, 20, 178, 'azaz', 'after email', '', 1, '2024-10-30'),
(223, 'phone', 20, 150, 3000, 0, 0, 0, 3000, 'doctor', 'azaz', '', 2, '2024-10-30'),
(224, 'phone', 20, 150, 3000, 0, 0, 0, 3000, 'doctor', 'azaz', '', 3, '2024-10-30'),
(225, 'phone', 20, 150, 3000, 0, 0, 0, 3000, 'doctor', 'azaz', '', 0, '2024-10-30'),
(226, 'phone', 20, 150, 3000, 0, 0, 0, 3000, 'doctor', 'azaz', '1', 4, '2024-11-01'),
(227, 'phone', 20, 150, 3000, 0, 0, 0, 3000, 'doctor', 'azaz', '1', 4, '2024-11-01'),
(228, 'phone', 20, 150, 3000, 0, 0, 0, 3000, 'doctor', 'azaz', '', 5, '2024-11-01'),
(229, 'phone', 20, 150, 3000, 0, 0, 0, 3000, 'doctor', 'azaz', '', 6, '2024-11-01'),
(230, 'phone', 20, 150, 3000, 0, 0, 0, 3000, 'doctor', 'azaz', '1', 7, '2024-11-01'),
(231, 'phone', 10, 150, 1500, 0, 0, 0, 1500, 'doctor', 'azaz', '', 8, '2024-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(30) NOT NULL,
  `s_name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `credit` int(100) DEFAULT 0,
  `debit` int(100) DEFAULT 0,
  `phone` bigint(50) DEFAULT NULL,
  `cnic` bigint(50) DEFAULT NULL,
  `ntn` bigint(50) DEFAULT NULL,
  `shopName` varchar(50) DEFAULT NULL,
  `personName` varchar(50) DEFAULT NULL,
  `chalanvoucher` int(100) DEFAULT NULL,
  `builty` int(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `s_name`, `address`, `credit`, `debit`, `phone`, `cnic`, `ntn`, `shopName`, `personName`, `chalanvoucher`, `builty`, `city`, `date`) VALUES
(6, 'azaz', 'aaaaaa', 2000, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-06'),
(7, 'Aaaasa', 'sasasas', 0, 19130, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-06'),
(8, 'a1', 'a1', 222, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-06'),
(9, 'a2', 'a2', 0, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-06'),
(10, 'after email', 'a1', 40, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `supplierhistory`
--

CREATE TABLE `supplierhistory` (
  `id` int(15) NOT NULL,
  `s_name` varchar(50) DEFAULT NULL,
  `credit` int(20) DEFAULT NULL,
  `amount` int(20) DEFAULT NULL,
  `newCredit` int(20) DEFAULT NULL,
  `debit` int(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `cnic` bigint(50) DEFAULT NULL,
  `ntn` int(50) DEFAULT NULL,
  `shopName` varchar(50) DEFAULT NULL,
  `personName` varchar(50) DEFAULT NULL,
  `chalanvoucher` varchar(20) DEFAULT NULL,
  `builty` int(20) DEFAULT NULL,
  `city` int(50) DEFAULT NULL,
  `date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplierhistory`
--

INSERT INTO `supplierhistory` (`id`, `s_name`, `credit`, `amount`, `newCredit`, `debit`, `address`, `phone`, `cnic`, `ntn`, `shopName`, `personName`, `chalanvoucher`, `builty`, `city`, `date`) VALUES
(2, 'a2', 0, 0, 321, 1, 'asd', 123, 23, 23, 'adad', 'azaz', '12', 12, 0, '2024-02-06'),
(7, 'a1', 222666, 123, 321, 0, 'aaaaaassqsss', 121212, 122112, 12121, '12121212', '1212121', '1212', 1212, 0, '2024-02-09'),
(9, 'after email', 0, 0, 0, NULL, 'a1', 0, 0, 0, '', NULL, '', 0, 0, '2024-02-11'),
(10, 'after email', 0, 0, 0, NULL, 'a1', 0, 0, 0, '', NULL, '', 0, 0, '2024-02-11'),
(11, 'a2', 321, 0, 0, NULL, 'a2', 123, 23, 23, 'adad', NULL, '', 0, 0, '2024-02-11'),
(12, 'after email', 0, 0, 0, NULL, 'a1', 0, 0, 0, '', NULL, '', 0, 0, '2024-02-11'),
(13, 'after email', 0, 0, 0, NULL, 'a1', 0, 0, 0, '', NULL, '', 0, 0, '2024-02-11'),
(14, 'after email', 0, 0, 0, NULL, 'a1', 0, 0, 0, '', NULL, '', 0, 0, '2024-02-11'),
(15, 'after email', 0, 0, 0, NULL, 'a1', 0, 0, 0, '', NULL, '', 0, 0, '2024-02-11'),
(16, 'after email', 0, 0, 0, NULL, 'a1', 0, 0, 0, '', NULL, '', 0, 0, '2024-02-11'),
(17, 'after email', 0, 0, 0, NULL, 'a1', 0, 0, 0, '', NULL, '', 0, 0, '2024-02-11'),
(18, 'after email', 0, 0, 0, NULL, 'a1', 0, 0, 0, '', NULL, '', 0, 0, '2024-02-11'),
(19, 'after email', 0, 0, 0, NULL, 'a1', 0, 0, 0, '', NULL, '', 0, 0, '2024-02-11'),
(20, 'after email', 0, 0, 0, NULL, 'a1', 0, 0, 0, '', NULL, '', 0, 0, '2024-02-11'),
(21, 'after email', 0, 0, 0, NULL, 'a1', 0, 0, 0, '', NULL, '', 0, 0, '2024-02-11'),
(22, 'after email', 0, 0, 0, NULL, 'a1', 0, 0, 0, '', NULL, '', 0, 0, '2024-02-14'),
(23, 'after email', 0, 0, 0, NULL, 'a1', 0, 0, 0, '', NULL, '', 0, 0, '2024-02-14'),
(24, 'a2', 0, 0, 123, NULL, 'a2', 123, 23, 23, 'adad', NULL, '', 0, 0, '2024-02-14'),
(25, 'a2', 3, 120, 0, NULL, 'a2', 123, 23, 23, 'adad', NULL, '', 0, 0, '2024-02-15'),
(26, 'a2', 0, 5, 0, 0, 'a2', 123, 23, 23, 'adad', NULL, '', 0, 0, '2024-02-15'),
(27, 'a2', 0, 5, 0, 5, 'a2', 123, 23, 23, 'adad', NULL, '', 0, 0, '2024-02-15'),
(28, 'a2', 0, 5, 0, 0, 'a2', 123, 23, 23, 'adad', NULL, '', 0, 0, '2024-02-15'),
(29, 'a2', 0, 10, 0, 10, 'a2', 123, 23, 23, 'adad', NULL, '', 0, 0, '2024-02-15'),
(30, 'after email', 0, 2, 0, 2, 'a1', 0, 0, 0, '', '', '', 0, 0, '2024-02-17'),
(31, 'after email', 100, 10, 90, 0, 'a1', 0, 0, 0, '', '', '', 0, 0, '2024-02-17'),
(32, 'after email', 100, 5, 105, -5, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, '2024-02-18'),
(33, 'after email', 105, 5, 110, -10, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, '2024-02-18'),
(34, 'after email', 110, 5, 115, -15, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, '2024-02-18'),
(35, 'after email', 115, 5, 120, -20, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, '2024-02-18'),
(36, 'after email', 120, 5, 125, -25, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, '2024-02-18'),
(37, 'after email', 125, 5, 130, -30, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, '2024-02-18'),
(38, 'after email', 130, 5, 135, -35, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, '2024-02-18'),
(39, 'after email', 135, 5, 140, -40, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, '2024-02-18'),
(40, 'after email', 140, 5, 145, 45, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, '2024-02-18'),
(41, 'after email', 145, 5, 150, 40, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, '2024-02-18'),
(42, 'after email', 150, 50, 200, 10, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, '2024-02-18'),
(43, 'after email', 200, 10, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, '2024-02-18'),
(44, 'after email', 100, 10, 110, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, '2024-02-18'),
(45, 'after email', 110, 20, 0, 30, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, '2024-02-18'),
(46, 'after email', 0, 20, 0, 10, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, '2024-02-18'),
(47, 'after email', 100, 20, 0, -10, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, '2024-02-18'),
(48, 'after email', 0, 20, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, '2024-02-18'),
(49, 'after email', 10, 10, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, '2024-02-18'),
(50, 'after email', 0, 10, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, '2024-02-18'),
(51, 'after email', 10, 10, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, '2024-02-18'),
(52, 'after email', 10, 5, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, '2024-02-18'),
(53, 'after email', 10, 10, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, '2024-02-18'),
(54, 'after email', 10, 5, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, '2024-02-18'),
(55, 'after email', 10, 5, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, '2024-02-18'),
(56, 'after email', 15, 5, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', 0, NULL, '2024-02-18'),
(57, 'after email', 0, 200, 0, 80, 'a1', 0, 0, 0, '', '', '', 0, 0, '2024-02-19'),
(58, 'after email', 0, 20, 0, 10, 'a1', 0, 0, 0, '', '', '', 0, 0, '2024-02-19'),
(59, 'after email', 10, 10, 0, 0, 'a1', 0, 0, 0, '', '', '', 0, 0, '2024-02-19'),
(60, 'after email', 0, 10, 0, 10, 'a1', 0, 0, 0, '', '', '', 0, 0, '2024-02-19'),
(61, 'after email', 1000, 100, 900, 0, 'a1', 0, 0, 0, '', '', '', 0, 0, '2024-02-19'),
(62, 'after email', 900, 100, 800, 0, 'a1', 0, 0, 0, '', '', '', 0, 0, '2024-02-19'),
(63, 'after email', 0, 900, 0, 100, 'a1', 0, 0, 0, '', '', '', 0, 0, '2024-02-19'),
(64, 'after email', 200, 100, 100, 0, 'a1', 0, 0, 0, '', '', '', 0, 0, '2024-02-19'),
(65, 'after email', 100, 50, 50, 0, 'a1', 0, 0, 0, '', '', '', 0, 0, '2024-02-19'),
(66, 'after email', 50, 10, 40, 0, 'a1', 0, 0, 0, '', '', '', 0, 0, '2024-02-19'),
(67, 'azaz', 0, 22956, 0, 22956, 'aaaaaa', 0, 0, 0, '', '', '', 0, 0, '2024-02-26'),
(68, 'azaz', 0, 5739, -5739, 5739, 'aaaaaa', 0, 0, 0, '', '', '', 0, 0, '2024-02-26'),
(69, 'azaz', 100, 78, 22, 0, 'aaaaaa', 121, 1212, 121, '12qw', '', NULL, NULL, 0, '2024-10-30'),
(70, 'azaz', 22, 0, 22, 0, 'aaaaaa', 121, 1212, 121, '12qw', '', NULL, NULL, 0, '2024-10-30'),
(71, 'azaz', 22, 0, 22, 0, 'aaaaaa', 121, 1212, 121, '12qw', '', NULL, NULL, 0, '2024-10-30'),
(72, 'azaz', 0, 10000, -9978, 9978, 'aaaaaa', 121, 1212, 121, '12qw', '', NULL, NULL, 0, '2024-10-30'),
(73, 'azaz', 0, 1000, -978, 978, 'aaaaaa', 121, 1212, 121, '12qw', '', NULL, NULL, 0, '2024-10-30'),
(74, 'azaz', 0, 1000, -978, 978, 'aaaaaa', 121, 1212, 121, '12qw', '', NULL, NULL, 0, '2024-10-30'),
(75, 'azaz', 0, 1000, -900, 900, 'aaaaaa', 121, 1212, 121, '12qw', '', NULL, NULL, 0, '2024-10-30'),
(76, 'azaz', 0, 1000, 0, 900, 'aaaaaa', 0, 0, 0, '', '', NULL, NULL, 0, '2024-10-30'),
(77, 'azaz', 0, 1000, 0, 1000, 'aaaaaa', 0, 0, 0, '', '', NULL, NULL, 0, '2024-10-30'),
(78, 'azaz', 0, 1000, 0, 1000, 'aaaaaa', 0, 0, 0, '', '', NULL, NULL, 0, '2024-10-30'),
(79, 'azaz', 0, 2000, 0, 2000, 'aaaaaa', 0, 0, 0, '', '', NULL, NULL, 0, '2024-10-30'),
(80, 'azaz', 0, 2000, 0, 2000, 'aaaaaa', 0, 0, 0, '', '', NULL, NULL, 0, '2024-10-30'),
(81, 'azaz', 0, 2000, 0, 2000, 'aaaaaa', 0, 0, 0, '', '', NULL, NULL, 0, '2024-10-30'),
(82, 'azaz', 0, 2000, 0, 4000, 'aaaaaa', 0, 0, 0, '', '', NULL, NULL, 0, '2024-10-30'),
(83, 'Aaaasa', 0, 19130, 0, 19130, 'sasasas', 0, 0, 0, '', '', NULL, NULL, 0, '2024-10-31'),
(84, 'azaz', 0, 3000, 0, 6995, 'aaaaaa', 111212, 121212, 121212, 'asdfg', '', NULL, NULL, 0, '2024-11-01'),
(85, 'azaz', 2000, 2000, 2000, 0, 'aaaaaa', 111212, 121212, 121212, 'asdfg', '', NULL, NULL, 0, '2024-11-01'),
(86, 'azaz', 2000, 2000, 2000, 0, 'aaaaaa', 111212, 121212, 121212, 'asdfg', '', NULL, NULL, 0, '2024-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `supplierradio`
--

CREATE TABLE `supplierradio` (
  `id` int(10) NOT NULL,
  `s_name` varchar(50) DEFAULT NULL,
  `credit` int(30) DEFAULT NULL,
  `amount` int(30) DEFAULT NULL,
  `debit` int(30) DEFAULT NULL,
  `paymentType` varchar(30) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `phone` int(30) DEFAULT NULL,
  `cnic` bigint(50) DEFAULT NULL,
  `ntn` bigint(50) DEFAULT NULL,
  `shopName` varchar(50) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplierradio`
--

INSERT INTO `supplierradio` (`id`, `s_name`, `credit`, `amount`, `debit`, `paymentType`, `address`, `phone`, `cnic`, `ntn`, `shopName`, `city`, `date`) VALUES
(13, 'after email', 0, 20, 0, 'Cheque', 'a1', 0, 0, 0, '', '', '2024-02-18'),
(14, 'after email', 0, 10, 0, 'Cheque', 'a1', 0, 0, 0, '', '', '2024-02-18'),
(15, 'after email', 0, 10, 0, 'Cheque', 'a1', 0, 0, 0, '', '', '2024-02-18'),
(16, 'after email', 10, 10, 10, 'Cheque', 'a1', 0, 0, 0, '', '', '2024-02-18'),
(17, 'after email', 10, 5, 5, 'Cash', 'a1', 0, 0, 0, '', '', '2024-02-18'),
(18, 'after email', 10, 10, -5, 'Cheque', 'a1', 0, 0, 0, '', '', '2024-02-18'),
(19, 'after email', 10, 5, 5, 'Cheque', 'a1', 0, 0, 0, '', '', '2024-02-18'),
(20, 'after email', 10, 5, 0, 'Cheque', 'a1', 0, 0, 0, '', '', '2024-02-18'),
(21, 'after email', 15, 5, 0, 'Cheque', 'a1', 0, 0, 0, '', '', '2024-02-18'),
(22, 'after email', 20, 5, 0, 'Cheque', 'a1', 0, 0, 0, '', '', '2024-02-18'),
(23, 'after email', 25, 5, 0, 'Cheque', 'a1', 0, 0, 0, '', '', '2024-02-18'),
(24, 'after email', 30, 5, 0, 'Cheque', 'a1', 0, 0, 0, '', '', '2024-02-18'),
(25, 'after email', 35, 10, 0, 'Cash', 'a1', 0, 0, 0, '', '', '2024-02-18'),
(26, 'after email', 40, 10, 0, 'Cash', 'a1', 0, 0, 0, '', '', '2024-02-18'),
(27, 'after email', 50, 10, 0, 'Cheque', 'a1', 0, 0, 0, '', '', '2024-02-18'),
(28, 'after email', 60, 10, 0, 'Cash', 'a1', 0, 0, 0, '', '', '2024-02-19'),
(29, 'after email', 110, 50, 0, 'Cheque', 'a1', 0, 0, 0, '', '', '2024-02-19'),
(30, 'after email', 120, 20, 0, 'Cheque', 'a1', 0, 0, 0, '', '', '2024-02-19'),
(31, 'azaz', 0, 5, 3995, 'Cash', 'aaaaaa', 2323, 1212121, 121212, 'asaas', 'asasas', '2024-10-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acbalance`
--
ALTER TABLE `acbalance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashregister`
--
ALTER TABLE `cashregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clienthistory`
--
ALTER TABLE `clienthistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creditdebit`
--
ALTER TABLE `creditdebit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dispatchdiscount`
--
ALTER TABLE `dispatchdiscount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `radio`
--
ALTER TABLE `radio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receivable`
--
ALTER TABLE `receivable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recovery`
--
ALTER TABLE `recovery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `stockhistory`
--
ALTER TABLE `stockhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocksales`
--
ALTER TABLE `stocksales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplierhistory`
--
ALTER TABLE `supplierhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplierradio`
--
ALTER TABLE `supplierradio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acbalance`
--
ALTER TABLE `acbalance`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cashregister`
--
ALTER TABLE `cashregister`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `clienthistory`
--
ALTER TABLE `clienthistory`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `creditdebit`
--
ALTER TABLE `creditdebit`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dispatchdiscount`
--
ALTER TABLE `dispatchdiscount`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `radio`
--
ALTER TABLE `radio`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `receivable`
--
ALTER TABLE `receivable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recovery`
--
ALTER TABLE `recovery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `stockhistory`
--
ALTER TABLE `stockhistory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `stocksales`
--
ALTER TABLE `stocksales`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `supplierhistory`
--
ALTER TABLE `supplierhistory`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `supplierradio`
--
ALTER TABLE `supplierradio`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
