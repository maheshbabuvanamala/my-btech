-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 04, 2013 at 03:47 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uis`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `user` varchar(10) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `access_lvl` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`user`, `pwd`, `access_lvl`) VALUES
('fac_flat', 'flat', 2),
('fac_ise', 'ise', 2),
('fac_psp', 'psp', 2),
('fac_scld', 'scld', 2),
('r092414', 'raj', 1),
('r092415', 'nani', 1),
('R092416', 'IPS', 1),
('R092417', 'CHINTU', 1),
('R092425', 'dinnu', 1),
('varun', 'varun', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `user` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`user`, `password`, `fname`, `lname`, `branch`, `subject`, `gender`) VALUES
('fac_flat', 'flat', 'LakshmiKanth', 'Kanth', 'CSE', 'FLAT', 'Male'),
('fac_ise', 'ise', 'Prakasu', 'Prakasu', 'CSE', 'ISE', 'Male'),
('fac_psp', 'psp', 'Jayanth', 'Jayanth', 'cse', 'PSP', 'Male'),
('fac_scld', 'scld', 'Vishnu', 'Vishnu', 'CSE', 'SCLD', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE IF NOT EXISTS `notices` (
  `user` varchar(30) NOT NULL,
  `notice` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`user`, `notice`, `time`) VALUES
('r092415', 'haiklsjlfkjsssdfljslklkj jaksljlk ajlfdsjldfjlkj\r\nsfjskdjf\r\nahskjdfhkjs\r\nashdfkjhskdjfhksj', '2013-03-01 16:55:13'),
('fac_ise', 'hiii how are you guys....', '2013-03-03 09:56:28'),
('fac_scld', 'GudMrng Students ..There will be Externel Lab Exam From Monday.', '2013-03-03 18:33:16');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE IF NOT EXISTS `queries` (
  `user` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `query` text NOT NULL,
  `q_no` int(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`user`, `subject`, `query`, `q_no`, `time`, `answer`) VALUES
('r092415', 'SCLD', 'What is the name of Mahesh', 1001, '2013-03-03 15:09:31', 'glhgjkgh'),
('r092415', 'SCLD', 'whaai', 1002, '2013-03-03 15:10:16', ''),
('r092415', 'ISE', 'haii Darling', 1003, '2013-03-03 15:11:21', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `user` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`user`, `password`, `fname`, `lname`, `course`, `dob`, `gender`, `Email`, `phone`) VALUES
('R092425', 'dinnu', 'Dinesh', 'Katakam', 'PUC', '10-06-1994', 'Male', 'dinu.iiit@gmail.com', '8500202425'),
('R092417', 'CHINTU', 'PramodKumar', 'Pothedar', 'Engineering', '21-09-1994', 'Male', 'pothedarpramod@gmail.com', '8985461244'),
('r092414', 'raj', 'raj', 'raj', 'PUC', '01-01-1234', 'Male', 'raj', '8985461361'),
('R092415', 'nani', 'MaheshBabu', 'Vanamala', 'Engineering', '02-01-1994', 'Male', 'mahesh.atp.dmm@gmail.com', '9502117334'),
('R092416', 'IPS', 'Sairam', 'Pammi', 'PUC', '13-05-1994', 'Male', 'sairam1305@gmail.com', '9848373624'),
('varun', 'varun', 'v', 'a', 'PUC', '01-01-2099', 'Male', 'abcd@rgukt.net', '0000000000');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE IF NOT EXISTS `updates` (
  `update` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`update`, `time`) VALUES
('EndsemResults updated', '2013-03-03 01:01:27'),
('SummerInternship IITM', '2013-03-03 01:01:27'),
('PUC Remedial Time Table Updated.', '2013-03-03 01:13:38'),
('Engineering Sem Time Table Updated', '2013-03-03 03:26:37'),
('Sports Results are Updated', '2013-03-03 03:26:37');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
