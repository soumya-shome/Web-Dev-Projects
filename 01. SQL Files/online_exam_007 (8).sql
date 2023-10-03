-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 16, 2019 at 02:35 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_exam_007`
--

-- --------------------------------------------------------

--
-- Table structure for table `machine_allotment`
--

CREATE TABLE IF NOT EXISTS `machine_allotment` (
  `EXAM_DATE` date NOT NULL,
  `EXAM_ALOT` varchar(20) NOT NULL,
  `MAC_NO` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `machine_allotment`
--

INSERT INTO `machine_allotment` (`EXAM_DATE`, `EXAM_ALOT`, `MAC_NO`) VALUES
('2019-12-16', '11-12', 'M1'),
('2019-12-17', '11-12', 'M2');

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
('P1004A', 'PHP & MYSQL Set1', 'C1004', 2, 2, 0),
('P1004B', 'PHP & MYSQL Set2', 'C1004', 2, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `USER_ID` varchar(8) NOT NULL,
  `PASSWORD` varchar(40) NOT NULL,
  `USER_TYPE` varchar(10) NOT NULL,
  `STATUS` int(11) NOT NULL,
  `HINT QUESTION` varchar(50) NOT NULL,
  `HINT ANSWER` varchar(30) NOT NULL,
  PRIMARY KEY (`USER_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`USER_ID`, `PASSWORD`, `USER_TYPE`, `STATUS`, `HINT QUESTION`, `HINT ANSWER`) VALUES
('ST1001', '', 'STUDENT', 0, 'What is your nick name?', ''),
('U1000', '', 'ADMIN', 1, 'What is your nick name?', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `ST_ID` varchar(10) NOT NULL,
  `ST_NAME` varchar(20) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PH_NO` varchar(15) NOT NULL,
  `C_ID` varchar(10) NOT NULL,
  `STATUS` varchar(15) NOT NULL,
  PRIMARY KEY (`ST_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ST_ID`, `ST_NAME`, `EMAIL`, `PH_NO`, `C_ID`, `STATUS`) VALUES
('ST1001', 'Shreyasi Ghose', 'shreyasighose@gmail.com', '9903408260', 'C1001', 'REGULAR'),
('ST1002', 'Ayan Kishore', 'ayan962@gmail.com', '8617237051', 'C1002', 'REGULAR'),
('ST1003', 'Soumyadeep Shome', 'soumyadeepshome99@gmail.com', '9883812211', 'C1003', 'REGULAR'),
('ST1004', 'Gargi Roy', 'gargiroy@gmail.com', '9836568917', 'C1004', 'COMPLETED'),
('U1000', 'Administrator', 'skar568@gmail.com', '9874123450', '', 'COMPLETED');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
