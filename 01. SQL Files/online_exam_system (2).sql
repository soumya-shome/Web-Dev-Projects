-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2018 at 06:24 AM
-- Server version: 5.5.8-log
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_exam_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `C_ID` varchar(6) NOT NULL,
  `C_NAME` varchar(20) NOT NULL,
  PRIMARY KEY (`C_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`C_ID`, `C_NAME`) VALUES
('C1001', 'CORE JAVA'),
('C1002', 'ADVANCE JAVA'),
('C1003', 'ASP.NET'),
('C1004', 'PHP AND MYSQL'),
('C1005', 'TALLY'),
('C1006', 'MULTIMEDIA');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `EXAM_CODE` varchar(6) NOT NULL,
  `EXAM_DATE` date DEFAULT NULL,
  `EXAM_SLOT` varchar(15) DEFAULT NULL,
  `M_NO` varchar(10) DEFAULT NULL,
  `ST_ID` varchar(6) NOT NULL,
  `C_ID` varchar(6) NOT NULL,
  `P_CODE` varchar(6) DEFAULT NULL,
  `ACTIVATION_NO` int(11) NOT NULL,
  `EXAM_STATUS` varchar(12) NOT NULL,
  PRIMARY KEY (`EXAM_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`EXAM_CODE`, `EXAM_DATE`, `EXAM_SLOT`, `M_NO`, `ST_ID`, `C_ID`, `P_CODE`, `ACTIVATION_NO`, `EXAM_STATUS`) VALUES
('E1001', '2018-03-25', '11-12', 'M1', 'ST1001', 'C1001', 'P1002', 78238, 'Appeared'),
('E1002', '2018-03-25', '11-12', 'M2', 'ST1001', 'C1001', 'P1001', 94907, 'Appeared');

-- --------------------------------------------------------

--
-- Table structure for table `machine`
--

CREATE TABLE IF NOT EXISTS `machine` (
  `M_NO` varchar(6) NOT NULL,
  PRIMARY KEY (`M_NO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `machine`
--

INSERT INTO `machine` (`M_NO`) VALUES
('M1'),
('M2'),
('M3'),
('M4');

-- --------------------------------------------------------

--
-- Table structure for table `machine_allot`
--

CREATE TABLE IF NOT EXISTS `machine_allot` (
  `EXAM_DATE` date NOT NULL,
  `EXAM_ALOT` varchar(20) NOT NULL,
  `MAC_NO` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `machine_allot`
--

INSERT INTO `machine_allot` (`EXAM_DATE`, `EXAM_ALOT`, `MAC_NO`) VALUES
('2018-03-25', '11-12', 'M1'),
('2018-03-25', '11-12', 'M2');

-- --------------------------------------------------------

--
-- Table structure for table `paper`
--

CREATE TABLE IF NOT EXISTS `paper` (
  `P_CODE` varchar(6) NOT NULL,
  `P_NAME` varchar(20) NOT NULL,
  `C_ID` varchar(6) NOT NULL,
  `TIME_LIMIT` int(3) NOT NULL,
  `NO_OF_QUES` int(11) NOT NULL,
  `NEG_MARKS_COUNT` int(11) NOT NULL,
  PRIMARY KEY (`P_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`P_CODE`, `P_NAME`, `C_ID`, `TIME_LIMIT`, `NO_OF_QUES`, `NEG_MARKS_COUNT`) VALUES
('P1001', 'Core Java Set1', 'C1001', 2, 2, 1),
('P1002', 'Core Java Set2', 'C1001', 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `USER_ID` varchar(8) NOT NULL,
  `PASSWORD` varchar(40) NOT NULL,
  `USER_TYPE` varchar(10) NOT NULL,
  `STATUS` int(11) NOT NULL,
  `HINTS_QUES` varchar(50) NOT NULL,
  `HINTS_ANS` varchar(30) NOT NULL,
  PRIMARY KEY (`USER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`USER_ID`, `PASSWORD`, `USER_TYPE`, `STATUS`, `HINTS_QUES`, `HINTS_ANS`) VALUES
('ST1001', '250cf8b51c773f3f8dc8b4be867a9a02', 'STUDENT', 0, 'What is your nick name', 'jio'),
('U1000', '202cb962ac59075b964b07152d234b70', 'ADMIN', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `Q_NO` int(11) NOT NULL,
  `QUESTION` varchar(100) NOT NULL,
  `ANS1` varchar(70) NOT NULL,
  `ANS2` varchar(70) NOT NULL,
  `ANS3` varchar(70) NOT NULL,
  `ANS4` varchar(70) NOT NULL,
  `C_ANS` int(11) NOT NULL,
  `P_CODE` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`Q_NO`, `QUESTION`, `ANS1`, `ANS2`, `ANS3`, `ANS4`, `C_ANS`, `P_CODE`) VALUES
(1, 'JVM Full form?', 'Java Virtual Machine', 'Jama Virtual Machine', 'All of the above', 'None', 1, 'P1001'),
(2, 'JRE Full form?', 'Java Runtime Environment', 'Jata Running Entity', 'All of the above', ' None', 1, 'P1001'),
(1, 'gc gull form?', 'Green Collector', 'Garbage Collection', 'Garbage Collector', 'None ', 3, 'P1002'),
(2, 'API Fuull form', 'APP Interface', 'Application Programming Interface', 'Apple Prog Interface', 'None', 2, 'P1002');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `EXAM_CODE` varchar(6) NOT NULL,
  `TOT_QUESTION` int(11) NOT NULL,
  `NOF_ATTEMPTS` int(11) NOT NULL,
  `WRONG_ANS` int(11) NOT NULL,
  `CORRECT_ANS` int(11) NOT NULL,
  `N_MARKS` int(11) NOT NULL,
  `MARKS` int(11) NOT NULL,
  `PERCENTAGE` int(11) NOT NULL,
  `GRADE` varchar(2) NOT NULL,
  `STATUS` varchar(6) NOT NULL,
  PRIMARY KEY (`EXAM_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`EXAM_CODE`, `TOT_QUESTION`, `NOF_ATTEMPTS`, `WRONG_ANS`, `CORRECT_ANS`, `N_MARKS`, `MARKS`, `PERCENTAGE`, `GRADE`, `STATUS`) VALUES
('E1001', 2, 2, 1, 1, 1, 0, 0, 'F', 'FAIL'),
('E1002', 2, 2, 0, 2, 0, 2, 100, 'A', 'PASS');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `CITY` varchar(20) NOT NULL,
  `STATE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`CITY`, `STATE`) VALUES
('KOLKATA', 'WEST BENGAL'),
('ASANSOL', 'WEST BENGAL'),
('X', 'UP'),
('Y', 'UP');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `ST_ID` varchar(8) NOT NULL,
  `ST_NAME` varchar(20) NOT NULL,
  `EMAIL_ID` varchar(25) NOT NULL,
  `CONT_NO` varchar(10) NOT NULL,
  `C_ID` varchar(6) NOT NULL,
  `STATUS` varchar(12) NOT NULL,
  PRIMARY KEY (`ST_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ST_ID`, `ST_NAME`, `EMAIL_ID`, `CONT_NO`, `C_ID`, `STATUS`) VALUES
('ST1001', 'Shilpi Chaki', 'shilpi@gmail.com', '9874123456', 'C1001', 'COMPLETED'),
('ST1002', 'Debanjan Pramanik', 'debanjan@gmail.com', '9874123457', 'C1002', 'REGULAR'),
('ST1003', 'Swagata Adhikary', 'swgata@gmail.com', '9874123458', 'C1003', 'REGULAR'),
('ST1004', 'Ankita Chowdhury', 'ankita@gmail.com', '9874123459', 'C1001', 'REGULAR'),
('ST1005', 'Snehaprana Karmakar', 'skar@gmail.com', '9874123450', 'C1005', 'REGULAR'),
('U1000', 'Administrator', 'skar@gmail.com', '9874123450', '', 'COMPLETED');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
