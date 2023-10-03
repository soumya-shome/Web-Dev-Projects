-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 17, 2019 at 10:47 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_exam_007`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `Course Id` varchar(10) NOT NULL,
  `Course Name` varchar(30) NOT NULL,
  PRIMARY KEY (`Course Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Course Id`, `Course Name`) VALUES
('c1001', 'Core Java'),
('c1002', 'Advance Java'),
('c1003', 'ASP.NET'),
('c1004', 'PHP & MYSQL'),
('c1005', 'TALLY');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `Exam Code` int(10) NOT NULL,
  `Exam Date` int(20) NOT NULL,
  `Exam Slot` int(10) NOT NULL,
  `Machine No.` int(50) NOT NULL,
  `Student Id` int(20) NOT NULL,
  `Course Id` int(20) NOT NULL,
  `Paper Code` varchar(20) NOT NULL,
  `Activation No.` int(20) NOT NULL,
  `Exam Status` varchar(20) NOT NULL,
  PRIMARY KEY (`Student Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--


-- --------------------------------------------------------

--
-- Table structure for table `machine`
--

CREATE TABLE IF NOT EXISTS `machine` (
  `Machine No.` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `machine`
--

INSERT INTO `machine` (`Machine No.`) VALUES
('M1'),
('M2'),
('M3'),
('M4'),
('M5');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `Q.No.` int(4) NOT NULL,
  `Question` varchar(50) NOT NULL,
  `Option1` varchar(20) NOT NULL,
  `Option2` varchar(20) NOT NULL,
  `Option3` varchar(20) NOT NULL,
  `Option4` varchar(20) NOT NULL,
  `Correct Answer` varchar(20) NOT NULL,
  `Paper Code` varchar(10) NOT NULL,
  PRIMARY KEY (`Q.No.`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`Q.No.`, `Question`, `Option1`, `Option2`, `Option3`, `Option4`, `Correct Answer`, `Paper Code`) VALUES
(1, 'Which one of the following is true about Java byte', 'Platform Independent', 'Platform Dependent', 'Cannot Say', 'None Of The Above', 'Option1', 'P1001A'),
(2, 'JVM provides definitions for what?', 'Instruction Set', 'Class file format', 'Garbage-collected he', 'All of the above', 'Option4', 'P1001A'),
(3, 'The Class Loader is responsible for which one of t', 'Compiling files', 'Executing files', 'Preventing spoofing', 'None Of The Above', 'Option3', 'P1002A'),
(4, 'Which one of the following is true about jdk ?', 'Platform Independent', 'Platform Dependent', 'Both of the options ', 'Depends upon the pro', 'Option2', 'P1002A'),
(5, 'JVM provides definitions for what ?', 'Instruction set', 'Class file format ', 'Garbage-collected he', 'All of the above', 'Option4 ', 'P1001B'),
(6, 'Which one of the following is true about Java byte', 'Platform Independent', 'Platform Dependent', 'Cannot Say', 'None Of The Above', 'Option1', 'P1001B'),
(7, 'Which one of the following is true about jdk ?', 'Platform Independent', 'Platform Dependent', 'Both options 1 & 2', 'Depends upon the pro', 'Option2', 'P1002B'),
(8, 'The Class Loader is responsible for which of the f', 'Compiling files', 'Executing files', 'Preventing spoofing', 'None Of The Above', 'Option3', 'P1002B'),
(9, 'What is the default time of session variables in A', '15 mins', '25 mins', '20 mins', '10 mins', 'Option3', 'P1003A'),
(10, 'Which operator is used to concatenate in ASP ?', '+', '.', '-', '/', 'Option1', 'P1003A'),
(11, 'Which operator is used to concatenate in ASP ?', '+', '.', '-', '/', 'Option1', 'P1003B'),
(12, 'what is the default time of session variables in A', '15 mins', '25 mins', '20 mins', '10 mins', 'Option3', 'P1003B'),
(13, 'PHP script should start with ?', ' < php >', '<?php', '<?>', 'php?>', 'Option2', 'P1004A'),
(14, 'PHP files have a default file extension of __ ?', '.html', '.php', '.xml', '.ph', 'Option 2', 'P1004A'),
(15, 'PHP files have a default file extension of __?', '.html', '.php', '.xml', '.ph', 'Option2', 'P1004B'),
(16, 'PHP script should start with ?', '< php >', '<?php', '<?>', 'php?>', 'Option2', 'P1004B'),
(17, 'What is used while exporting ledgers from Tally to', 'HTML Format', 'SDF Format', 'XML Format ', 'ASCII Format', 'Option1', 'P1005A'),
(18, 'What is Tally vault ?', 'Security Mechanism', 'Ledger a/c', 'Cost Category', 'None Of The Above', 'Option1', 'P1005A'),
(19, 'What is Tally vault ?', 'Security Mechanism', 'Ledger a/c', 'Cost Category', 'None Of The Above', 'Option1', 'P1005B'),
(20, 'What is used while exporting ledgers from Tally to', 'HTML Format', 'SDF Format', 'XML Format', 'ASCII Format', 'Option1', 'P1005B');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

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
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

