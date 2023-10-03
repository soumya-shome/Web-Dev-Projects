-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 08, 2019 at 07:36 AM
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
-- Database: `nodemculog`
--
CREATE DATABASE IF NOT EXISTS `nodemculog` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `nodemculog`;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `CardNumber` double DEFAULT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `SerialNumber` double NOT NULL,
  `DateLog` date DEFAULT NULL,
  `TimeIn` time DEFAULT NULL,
  `TimeOut` time DEFAULT NULL,
  `UserStat` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=264 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `SerialNumber` double NOT NULL,
  `gender` varchar(100) NOT NULL,
  `CardID` double NOT NULL,
  `CardID_select` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;
--
-- Database: `phpnodemcu`
--
CREATE DATABASE IF NOT EXISTS `phpnodemcu` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `phpnodemcu`;

-- --------------------------------------------------------

--
-- Table structure for table `led`
--

DROP TABLE IF EXISTS `led`;
CREATE TABLE IF NOT EXISTS `led` (
  `id` int(2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `led`
--

INSERT INTO `led` (`id`, `status`) VALUES
(1, 'off'),
(2, 'on'),
(3, 'off');

-- --------------------------------------------------------

--
-- Table structure for table `weather`
--

DROP TABLE IF EXISTS `weather`;
CREATE TABLE IF NOT EXISTS `weather` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `temp` varchar(40) NOT NULL,
  `hum` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weather`
--

INSERT INTO `weather` (`id`, `temp`, `hum`) VALUES
(14, '20', '50'),
(13, '10', '40'),
(11, '16', '14'),
(12, '10', '30');
--
-- Database: `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `project`;

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

DROP TABLE IF EXISTS `table1`;
CREATE TABLE IF NOT EXISTS `table1` (
  `name` varchar(20) NOT NULL,
  `roll` int(11) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `class` int(11) NOT NULL,
  PRIMARY KEY (`roll`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`name`, `roll`, `subject`, `class`) VALUES
('Albert', 1, 'History', 5),
('shome', 12, 'maths', 3),
('hello', 56, 'computer', 8);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

DROP TABLE IF EXISTS `user_master`;
CREATE TABLE IF NOT EXISTS `user_master` (
  `uid` int(20) NOT NULL,
  `mob_no` int(15) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `utype` varchar(20) NOT NULL,
  PRIMARY KEY (`mob_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`uid`, `mob_no`, `uname`, `password`, `utype`) VALUES
(1002, 1245, 'stu2', 'asdf', 'user'),
(1000, 123, 'qwert', '1234', 'user'),
(1001, 12345, 'user1', '1234', 'admin');
--
-- Database: `register`
--
CREATE DATABASE IF NOT EXISTS `register` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `register`;

-- --------------------------------------------------------

--
-- Table structure for table `studentlog`
--

DROP TABLE IF EXISTS `studentlog`;
CREATE TABLE IF NOT EXISTS `studentlog` (
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

INSERT INTO `studentlog` (`fname`, `lname`, `gender`, `email`, `password`, `date`, `course`, `phone1`, `phone2`, `cardid`) VALUES
('123', '123', 'M', '123@gmail.com', '12', '2019-09-03', 'choose', 12345677, 12345678, 1234);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
