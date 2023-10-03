-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 09, 2019 at 07:44 AM
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
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `stuDetails`
--

DROP TABLE IF EXISTS `stuDetails`;
CREATE TABLE IF NOT EXISTS `stuDetails` (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `course` varchar(30) NOT NULL,
  `phone1` int(40) NOT NULL,
  `phone2` int(40) NOT NULL,
  `cardid` int(30) NOT NULL,
  PRIMARY KEY (`cardid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentlog`
--

INSERT INTO `stuDetails` (`fname`, `lname`, `gender`, `email`, `password`, `date`, `course`, `phone1`, `phone2`, `cardid`) VALUES
('123', '123', 'M', '123@gmail.com', '12', '2019-09-03', 'choose', 12345677, 12345678, 1234);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
