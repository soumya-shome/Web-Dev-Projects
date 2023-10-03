-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 14, 2019 at 09:20 AM
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
-- Table structure for table `attendsep19`
--

DROP TABLE IF EXISTS `attendsep19`;
CREATE TABLE IF NOT EXISTS `attendsep19` (
  `Name` varchar(50) NOT NULL,
  `CardNo` varchar(50) NOT NULL,
  `1` varchar(5) NOT NULL,
  `2` varchar(5) NOT NULL,
  `3` varchar(5) NOT NULL,
  `4` varchar(5) NOT NULL,
  `5` varchar(5) NOT NULL,
  `6` varchar(5) NOT NULL,
  `7` varchar(5) NOT NULL,
  `8` varchar(5) NOT NULL,
  `9` varchar(5) NOT NULL,
  `10` varchar(5) NOT NULL,
  `11` varchar(5) NOT NULL,
  `12` varchar(5) NOT NULL,
  `13` varchar(5) NOT NULL,
  `14` varchar(5) NOT NULL,
  `15` varchar(5) NOT NULL,
  `16` varchar(5) NOT NULL,
  `17` varchar(5) NOT NULL,
  `18` varchar(5) NOT NULL,
  `19` varchar(5) NOT NULL,
  `20` varchar(5) NOT NULL,
  `21` varchar(5) NOT NULL,
  `22` varchar(5) NOT NULL,
  `23` varchar(5) NOT NULL,
  `24` varchar(5) NOT NULL,
  `25` varchar(5) NOT NULL,
  `26` varchar(5) NOT NULL,
  `27` varchar(5) NOT NULL,
  `28` varchar(5) NOT NULL,
  `29` varchar(5) NOT NULL,
  `30` varchar(5) NOT NULL,
  PRIMARY KEY (`CardNo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendsep19`
--

INSERT INTO `attendsep19` (`Name`, `CardNo`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`, `21`, `22`, `23`, `24`, `25`, `26`, `27`, `28`, `29`, `30`) VALUES
('User', '.EA C1 4F D3.', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'P', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'P'),
('Soumyadeep', '06 D3 AB 1B', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
('WE', '0D 11 57 73', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `studetails`
--

DROP TABLE IF EXISTS `studetails`;
CREATE TABLE IF NOT EXISTS `studetails` (
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `CardNo` varchar(50) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Phone1` varchar(50) NOT NULL,
  `Phone2` varchar(50) NOT NULL,
  PRIMARY KEY (`CardNo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studetails`
--

INSERT INTO `studetails` (`FName`, `LName`, `CardNo`, `Email`, `Password`, `Course`, `DOB`, `Phone1`, `Phone2`) VALUES
('User', 'Last', 'EA C1 4F D3', 'some@gmail.com', 'qwerty', 'something', '2019-09-05', '123', '2134'),
('Soumyadeep', 'Shome', '06 D3 AB 1B', 'soumya@gmail.com', 'xyz123', 'PHP', '1999-07-04', '9883812211', '9804359379'),
('WE', 'WE', '0D 11 57 73', '12er@gmail.com', 'asa', 'WR', '2019-09-04', '124', '124');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
