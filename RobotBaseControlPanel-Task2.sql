-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2021 at 02:38 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robot_arm_control_panel`
--

-- --------------------------------------------------------

--
-- Table structure for table `base`
--

CREATE TABLE `base` (
  `timestamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `direction` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `base`
--

INSERT INTO `base` (`timestamp`, `direction`) VALUES
('2021-06-27 12:32:17.000000', 'forward'),
('2021-06-27 12:33:14.000000', 'stop');

-- --------------------------------------------------------

--
-- Table structure for table `engines`
--

CREATE TABLE `engines` (
  `timestamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `Engine1` int(3) NOT NULL,
  `Engine2` int(3) NOT NULL,
  `Engine3` int(3) NOT NULL,
  `Engine4` int(3) NOT NULL,
  `Engine5` int(3) NOT NULL,
  `Engine6` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `engines`
--

INSERT INTO `engines` (`timestamp`, `Engine1`, `Engine2`, `Engine3`, `Engine4`, `Engine5`, `Engine6`) VALUES
('2021-06-27 12:32:53.000000', 60, 150, 148, 180, 180, 0);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `timestamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `Start` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`timestamp`, `Start`) VALUES
('2021-06-27 12:32:53.000000', 'ON');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
