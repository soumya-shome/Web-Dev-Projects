-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 09, 2019 at 03:54 PM
-- Server version: 5.7.24
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance_log`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendsep`
--

DROP TABLE IF EXISTS `attendsep`;
CREATE TABLE IF NOT EXISTS `attendsep` (
  `Name` varchar(50) NOT NULL,
  `CardNo` varchar(50) NOT NULL,
  `01` varchar(5) NOT NULL,
  `02` varchar(5) NOT NULL,
  `03` varchar(5) NOT NULL,
  `04` varchar(5) NOT NULL,
  `05` varchar(5) NOT NULL,
  `06` varchar(5) NOT NULL,
  `07` varchar(5) NOT NULL,
  `08` varchar(5) NOT NULL,
  `09` varchar(5) NOT NULL,
  `10` varchar(5) NOT NULL,
  `11` varchar(5) NOT NULL,
  `12` varchar(5) NOT NULL,
  PRIMARY KEY (`CardNo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendsep`
--

INSERT INTO `attendsep` (`Name`, `CardNo`, `01`, `02`, `03`, `04`, `05`, `06`, `07`, `08`, `09`, `10`, `11`, `12`) VALUES
('User1', '', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
