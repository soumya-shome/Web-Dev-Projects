-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 23, 2019 at 11:32 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_exam_007`
--

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
CREATE TABLE IF NOT EXISTS `result` (
  `Exam Code` varchar(10) NOT NULL,
  `Student Id` varchar(10) NOT NULL,
  `Total no, of questions` varchar(10) NOT NULL,
  `No. of attempts` int(10) NOT NULL,
  `No. of wrong answers` int(10) NOT NULL,
  `No. of correct answers` int(10) NOT NULL,
  `Negative Marks` int(10) NOT NULL,
  `Percentage` int(10) NOT NULL,
  `GRADE` varchar(2) NOT NULL,
  `Status` varchar(10) NOT NULL,
  PRIMARY KEY (`Exam Code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`Exam Code`, `Student Id`, `Total no, of questions`, `No. of attempts`, `No. of wrong answers`, `No. of correct answers`, `Negative Marks`, `Percentage`, `GRADE`, `Status`) VALUES
('E1001', 'ST1001', '2', 2, 2, 0, 0, 0, '', 'Fail'),
('E1009', 'ST1002', '2', 1, 1, 1, 1, 50, 'B', 'Pass');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
