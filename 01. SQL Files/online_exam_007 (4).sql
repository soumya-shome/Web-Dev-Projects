-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2019 at 10:04 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Course Id` varchar(10) NOT NULL,
  `Course Name` varchar(30) NOT NULL
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

CREATE TABLE `exam` (
  `Exam Code` int(10) NOT NULL,
  `Exam Date` int(20) NOT NULL,
  `Exam Slot` int(10) NOT NULL,
  `Machine No.` int(50) NOT NULL,
  `Student Id` int(20) NOT NULL,
  `Course Id` int(20) NOT NULL,
  `Paper Code` varchar(20) NOT NULL,
  `Activation No.` int(20) NOT NULL,
  `Exam Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `machine`
--

CREATE TABLE `machine` (
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
-- Table structure for table `machine_allotment`
--

CREATE TABLE `machine_allotment` (
  `EXAM_DATE` date NOT NULL,
  `EXAM_ALOT` varchar(20) NOT NULL,
  `MAC_NO` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `machine_allotment`
--

INSERT INTO `machine_allotment` (`EXAM_DATE`, `EXAM_ALOT`, `MAC_NO`) VALUES
('2019-12-16', '11-12', 'M1'),
('2019-12-17', '11-12', 'M2'),
('2019-12-18', '11-12', 'M3'),
('2019-12-19', '11-12', 'M4'),
('2019-12-20', '11-12', 'M5');

-- --------------------------------------------------------

--
-- Table structure for table `paper`
--

CREATE TABLE `paper` (
  `P_CODE` varchar(10) NOT NULL,
  `P_NAME` varchar(20) NOT NULL,
  `C_ID` varchar(10) NOT NULL,
  `TIME_LIMIT` int(3) NOT NULL,
  `NO_OF_QUES` int(11) NOT NULL,
  `NEG_MARKS_COUNT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paper`
--

INSERT INTO `paper` (`P_CODE`, `P_NAME`, `C_ID`, `TIME_LIMIT`, `NO_OF_QUES`, `NEG_MARKS_COUNT`) VALUES
('P1001A', 'Core Java Set1', 'C1001', 2, 2, 0),
('P1001B', 'Core Java Set2', 'C1001', 2, 2, 0),
('P1002A', 'Advance Java Set1', 'C1002', 2, 2, 0),
('P1002B', 'Advance Java Set2', 'C1002', 2, 2, 0),
('P1003A', 'ASP.NET Set1', 'C1003', 2, 2, 0),
('P1003B', 'ASP.NET Set2', 'C1003', 2, 2, 0),
('P1004A', 'PHP & MYSQL Set1', 'C1004', 2, 2, 0),
('P1004B', 'PHP & MYSQL Set2', 'C1004', 2, 2, 0),
('P1005A', 'Tally Set1', 'C1005', 2, 2, 0),
('P1005B', 'Tally Set2', 'C1005', 2, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `USER_ID` varchar(8) NOT NULL,
  `PASSWORD` varchar(40) NOT NULL,
  `USER_TYPE` varchar(10) NOT NULL,
  `STATUS` int(11) NOT NULL,
  `HINT QUESTION` varchar(50) NOT NULL,
  `HINT ANSWER` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`USER_ID`, `PASSWORD`, `USER_TYPE`, `STATUS`, `HINT QUESTION`, `HINT ANSWER`) VALUES
('ST1001', '', 'STUDENT', 0, 'What is your nick name?', ''),
('U1000', '', 'ADMIN', 1, 'What is your nick name?', '');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `Q.No.` int(4) NOT NULL,
  `Question` varchar(50) NOT NULL,
  `Option1` varchar(20) NOT NULL,
  `Option2` varchar(20) NOT NULL,
  `Option3` varchar(20) NOT NULL,
  `Option4` varchar(20) NOT NULL,
  `Correct Answer` varchar(20) NOT NULL,
  `Paper Code` varchar(10) NOT NULL,
  `In` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`Q.No.`, `Question`, `Option1`, `Option2`, `Option3`, `Option4`, `Correct Answer`, `Paper Code`, `In`) VALUES
(1, 'Which one of the following is true about Java byte', 'Platform Independent', 'Platform Dependent', 'Cannot Say', 'None Of The Above', 'Option1', 'P1001A', 0),
(2, 'JVM provides definitions for what?', 'Instruction Set', 'Class file format', 'Garbage-collected he', 'All of the above', 'Option4', 'P1001A', 0),
(1, 'The Class Loader is responsible for which one of t', 'Compiling files', 'Executing files', 'Preventing spoofing', 'None Of The Above', 'Option3', 'P1002A', 0),
(2, 'Which one of the following is true about jdk ?', 'Platform Independent', 'Platform Dependent', 'Both of the options ', 'Depends upon the pro', 'Option2', 'P1002A', 0),
(1, 'JVM provides definitions for what ?', 'Instruction set', 'Class file format ', 'Garbage-collected he', 'All of the above', 'Option4 ', 'P1001B', 0),
(2, 'Which one of the following is true about Java byte', 'Platform Independent', 'Platform Dependent', 'Cannot Say', 'None Of The Above', 'Option1', 'P1001B', 0),
(1, 'Which one of the following is true about jdk ?', 'Platform Independent', 'Platform Dependent', 'Both options 1 & 2', 'Depends upon the pro', 'Option2', 'P1002B', 0),
(2, 'The Class Loader is responsible for which of the f', 'Compiling files', 'Executing files', 'Preventing spoofing', 'None Of The Above', 'Option3', 'P1002B', 0),
(1, 'What is the default time of session variables in A', '15 mins', '25 mins', '20 mins', '10 mins', 'Option3', 'P1003A', 0),
(2, 'Which operator is used to concatenate in ASP ?', '+', '.', '-', '/', 'Option1', 'P1003A', 0),
(1, 'Which operator is used to concatenate in ASP ?', '+', '.', '-', '/', 'Option1', 'P1003B', 0),
(2, 'what is the default time of session variables in A', '15 mins', '25 mins', '20 mins', '10 mins', 'Option3', 'P1003B', 0),
(1, 'PHP script should start with ?', ' < php >', '<?php', '<?>', 'php?>', 'Option2', 'P1004A', 0),
(2, 'PHP files have a default file extension of __ ?', '.html', '.php', '.xml', '.ph', 'Option 2', 'P1004A', 0),
(1, 'PHP files have a default file extension of __?', '.html', '.php', '.xml', '.ph', 'Option2', 'P1004B', 0),
(2, 'PHP script should start with ?', '< php >', '<?php', '<?>', 'php?>', 'Option2', 'P1004B', 0),
(1, 'What is used while exporting ledgers from Tally to', 'HTML Format', 'SDF Format', 'XML Format ', 'ASCII Format', 'Option1', 'P1005A', 0),
(2, 'What is Tally vault ?', 'Security Mechanism', 'Ledger a/c', 'Cost Category', 'None Of The Above', 'Option1', 'P1005A', 0),
(1, 'What is Tally vault ?', 'Security Mechanism', 'Ledger a/c', 'Cost Category', 'None Of The Above', 'Option1', 'P1005B', 0),
(2, 'What is used while exporting ledgers from Tally to', 'HTML Format', 'SDF Format', 'XML Format', 'ASCII Format', 'Option1', 'P1005B', 0);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
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

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ST_ID` varchar(10) NOT NULL,
  `ST_NAME` varchar(20) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PH_NO` varchar(15) NOT NULL,
  `C_ID` varchar(10) NOT NULL,
  `STATUS` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ST_ID`, `ST_NAME`, `EMAIL`, `PH_NO`, `C_ID`, `STATUS`) VALUES
('ST1001', 'Shreyasi Ghose', 'shreyasighose@gmail.com', '9903408260', 'C1001', 'REGULAR'),
('ST1002', 'Ayan Kishore', 'ayan962@gmail.com', '8617237051', 'C1002', 'REGULAR'),
('ST1003', 'Soumyadeep Shome', 'soumyadeepshome99@gmail.com', '9883812211', 'C1003', 'REGULAR'),
('ST1004', 'Gargi Roy', 'gargiroy@gmail.com', '9836568917', 'C1004', 'COMPLETED'),
('ST1005', 'Sukanya Chakraborty', 'sukanya564chakraborty@gmail.co', '9875642371', 'C1005', 'REGULAR'),
('ST1006', 'Rohit Paul', 'rohitcr@gmail.com', '9832145978', 'C1005', 'COMPLETED'),
('U1000', 'Administrator', 'skar568@gmail.com', '9874123450', '', 'COMPLETED');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Course Id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`Student Id`);

--
-- Indexes for table `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`P_CODE`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`USER_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ST_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
