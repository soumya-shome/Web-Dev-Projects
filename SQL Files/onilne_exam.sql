-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 21, 2020 at 12:22 AM
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
-- Database: `onilne exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `c_id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `duration` varchar(1000) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

DROP TABLE IF EXISTS `exam`;
CREATE TABLE IF NOT EXISTS `exam` (
  `e_id` varchar(50) NOT NULL,
  `e_date` varchar(50) NOT NULL,
  `e_slot` varchar(50) NOT NULL,
  `st_id` varchar(50) NOT NULL,
  `c_id` varchar(50) NOT NULL,
  `p_type` varchar(50) NOT NULL,
  `p_set` varchar(50) NOT NULL,
  `activation code` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam_sl`
--

DROP TABLE IF EXISTS `exam_sl`;
CREATE TABLE IF NOT EXISTS `exam_sl` (
  `slot_no` int(50) NOT NULL,
  `time` int(50) NOT NULL,
  PRIMARY KEY (`slot_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paper_set`
--

DROP TABLE IF EXISTS `paper_set`;
CREATE TABLE IF NOT EXISTS `paper_set` (
  `p_id` varchar(100) NOT NULL,
  `c_id` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `st_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`st_id`),
  KEY `st_id` (`st_id`),
  KEY `st_id_2` (`st_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`st_id`, `password`, `type`, `email`) VALUES
('U1000', 'xyz123', 'ADMIN', 'soumya.shome99@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `p_off`
--

DROP TABLE IF EXISTS `p_off`;
CREATE TABLE IF NOT EXISTS `p_off` (
  `p_id` varchar(100) NOT NULL,
  `c_id` varchar(100) NOT NULL,
  `location` varchar(10000) NOT NULL,
  `tot_marks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `p_on`
--

DROP TABLE IF EXISTS `p_on`;
CREATE TABLE IF NOT EXISTS `p_on` (
  `p_id` varchar(100) NOT NULL,
  `c_id` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `no_of_q` varchar(50) NOT NULL,
  `ne_marks` varchar(50) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `p_id` varchar(100) NOT NULL,
  `q_no` varchar(11) NOT NULL,
  `ques` varchar(10000) NOT NULL,
  `op1` varchar(1000) NOT NULL,
  `op2` varchar(1000) NOT NULL,
  `op3` varchar(1000) NOT NULL,
  `op4` varchar(1000) NOT NULL,
  `c_opt` varchar(4) NOT NULL,
  KEY `p_id` (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
CREATE TABLE IF NOT EXISTS `result` (
  `e_id` varchar(50) NOT NULL,
  `st_id` varchar(50) NOT NULL,
  `tot_q` varchar(50) NOT NULL,
  `tot_a_q` varchar(50) NOT NULL,
  `tot_w_q` varchar(50) NOT NULL,
  `tot_r_q` varchar(50) NOT NULL,
  `marks` varchar(50) NOT NULL,
  `n_marks` varchar(50) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `percentage` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`e_id`),
  KEY `e_id` (`e_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `s_id` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(400) NOT NULL,
  `ph_no` varchar(20) NOT NULL,
  `d_o_a` varchar(50) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `st_course`
--

DROP TABLE IF EXISTS `st_course`;
CREATE TABLE IF NOT EXISTS `st_course` (
  `st_id` varchar(50) NOT NULL,
  `c_id` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  KEY `st_id` (`st_id`),
  KEY `c_id` (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `paper_set` (`p_id`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`e_id`) REFERENCES `exam` (`e_id`);

--
-- Constraints for table `st_course`
--
ALTER TABLE `st_course`
  ADD CONSTRAINT `st_course_ibfk_1` FOREIGN KEY (`st_id`) REFERENCES `student` (`s_id`),
  ADD CONSTRAINT `st_course_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `course` (`c_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
