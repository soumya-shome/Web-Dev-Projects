-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2019 at 05:30 AM
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
  `Paper Code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`Q.No.`, `Question`, `Option1`, `Option2`, `Option3`, `Option4`, `Correct Answer`, `Paper Code`) VALUES
(1, 'Which one of the following is true about Java byte', 'Platform Independent', 'Platform Dependent', 'Cannot Say', 'None Of The Above', 'Option1', 'P1001A'),
(2, 'JVM provides definitions for what?', 'Instruction Set', 'Class file format', 'Garbage-collected he', 'All of the above', 'Option4', 'P1001A'),
(1, 'The Class Loader is responsible for which one of t', 'Compiling files', 'Executing files', 'Preventing spoofing', 'None Of The Above', 'Option3', 'P1002A'),
(2, 'Which one of the following is true about jdk ?', 'Platform Independent', 'Platform Dependent', 'Both of the options ', 'Depends upon the pro', 'Option2', 'P1002A'),
(1, 'JVM provides definitions for what ?', 'Instruction set', 'Class file format ', 'Garbage-collected he', 'All of the above', 'Option4 ', 'P1001B'),
(2, 'Which one of the following is true about Java byte', 'Platform Independent', 'Platform Dependent', 'Cannot Say', 'None Of The Above', 'Option1', 'P1001B'),
(1, 'Which one of the following is true about jdk ?', 'Platform Independent', 'Platform Dependent', 'Both options 1 & 2', 'Depends upon the pro', 'Option2', 'P1002B'),
(2, 'The Class Loader is responsible for which of the f', 'Compiling files', 'Executing files', 'Preventing spoofing', 'None Of The Above', 'Option3', 'P1002B'),
(1, 'What is the default time of session variables in A', '15 mins', '25 mins', '20 mins', '10 mins', 'Option3', 'P1003A'),
(2, 'Which operator is used to concatenate in ASP ?', '+', '.', '-', '/', 'Option1', 'P1003A'),
(1, 'Which operator is used to concatenate in ASP ?', '+', '.', '-', '/', 'Option1', 'P1003B'),
(2, 'what is the default time of session variables in A', '15 mins', '25 mins', '20 mins', '10 mins', 'Option3', 'P1003B'),
(1, 'PHP script should start with ?', ' < php >', '<?php', '<?>', 'php?>', 'Option2', 'P1004A'),
(2, 'PHP files have a default file extension of __ ?', '.html', '.php', '.xml', '.ph', 'Option 2', 'P1004A'),
(1, 'PHP files have a default file extension of __?', '.html', '.php', '.xml', '.ph', 'Option2', 'P1004B'),
(2, 'PHP script should start with ?', '< php >', '<?php', '<?>', 'php?>', 'Option2', 'P1004B'),
(1, 'What is used while exporting ledgers from Tally to', 'HTML Format', 'SDF Format', 'XML Format ', 'ASCII Format', 'Option1', 'P1005A'),
(2, 'What is Tally vault ?', 'Security Mechanism', 'Ledger a/c', 'Cost Category', 'None Of The Above', 'Option1', 'P1005A'),
(1, 'What is Tally vault ?', 'Security Mechanism', 'Ledger a/c', 'Cost Category', 'None Of The Above', 'Option1', 'P1005B'),
(2, 'What is used while exporting ledgers from Tally to', 'HTML Format', 'SDF Format', 'XML Format', 'ASCII Format', 'Option1', 'P1005B');
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
