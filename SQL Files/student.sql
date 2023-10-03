-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 18, 2020 at 12:32 PM
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
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
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
('ST1005', 'Sukanya Chakraborty', 'sukanya564chakraborty@gmail.co', '9875642371', 'C1005', 'REGULAR'),
('ST1006', 'Rohit Paul', 'rohitcr@gmail.com', '9832145978', 'C1005', 'COMPLETED'),
('U1000', 'Administrator', 'skar568@gmail.com', '9874123450', '', 'COMPLETED');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
