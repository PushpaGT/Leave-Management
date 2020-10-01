-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 13, 2019 at 11:53 AM
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
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`, `type`) VALUES
('1BF18MCA04', 'bish', 'student'),
('1BM18MCA17', 'push', 'student'),
('admin', 'admin', 'admin'),
('E01', 'hod', 'hod'),
('E02', 'staff', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `sl_no` int(3) NOT NULL AUTO_INCREMENT,
  `name` char(25) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `mail_id` varchar(20) NOT NULL,
  PRIMARY KEY (`sl_no`),
  UNIQUE KEY `sl_no` (`sl_no`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`sl_no`, `name`, `designation`, `mail_id`) VALUES
(1, 'Dr.D N Sujatha', 'Professor', 'dns.mca@bmsce.ac.in'),
(2, 'Dr.CH Ram Mohan Reddy', 'Associate Profe', 'rmr.mca@bmsce.ac.in'),
(3, 'Dr.K.VijayKumar', 'Associate Profe', 'vijaykumar.mca@bmsce'),
(4, 'Dr.S.Uma', 'Associate Professor', 'uma.mca@bmsce.ac.in'),
(5, 'Lakshminarayana P', 'Associate Professor', 'pln.mca@bmsce.ac.in'),
(6, 'K Girish', 'Associate Professor', 'gk.mca@bmsce.ac.in'),
(7, 'K P Shailaja', 'Associate Professor', 'shailaja.mca@bmsce.a'),
(8, 'M SivaRamaKrishna', 'Assistant Professor', 'sivaram.mca@bmsce.ac'),
(9, 'R V Raghavendra Rao', 'Assistant Professor', 'rr.mca@bmsce.ac.in'),
(10, 'S Shilpa', 'Assistant Professor', 'shilpa.mca@bmsce.ac.'),
(11, 'T S Pushpa', 'Assistant Professor', 'pushpa.mca@bmsce.ac.'),
(12, 'V Padmapriya', 'Assistant Professor', 'padmapriya.mca@bmsce');

-- --------------------------------------------------------

--
-- Table structure for table `proctor_17`
--

DROP TABLE IF EXISTS `proctor_17`;
CREATE TABLE IF NOT EXISTS `proctor_17` (
  `sl_no` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `mail_id` varchar(50) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proctor_17`
--

INSERT INTO `proctor_17` (`sl_no`, `name`, `designation`, `mail_id`) VALUES
(1, 'Dr.CH Ram Mohan Reddy', 'Associate Profe', 'rmr.mca@bmsce.ac.in'),
(2, 'Dr.S.Uma', 'Associate Professor', 'uma.mca@bmsce.ac.in'),
(3, 'Lakshminarayana P', 'Associate Professor', 'pln.mca@bmsce.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `proctor_18`
--

DROP TABLE IF EXISTS `proctor_18`;
CREATE TABLE IF NOT EXISTS `proctor_18` (
  `sl_no` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `mail_id` varchar(50) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proctor_18`
--

INSERT INTO `proctor_18` (`sl_no`, `name`, `designation`, `mail_id`) VALUES
(1, 'K Girish', 'Associate Professor', 'gk.mca@bmsce.ac.in'),
(2, 'K P Shailaja', 'Associate Professor', 'shailaja.mca@bmsce.a'),
(3, 'M SivaRamaKrishna', 'Assistant Professor', 'sivaram.mca@bmsce.ac');

-- --------------------------------------------------------

--
-- Table structure for table `proctor_19`
--

DROP TABLE IF EXISTS `proctor_19`;
CREATE TABLE IF NOT EXISTS `proctor_19` (
  `sl_no` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `mail_id` varchar(50) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proctor_19`
--

INSERT INTO `proctor_19` (`sl_no`, `name`, `designation`, `mail_id`) VALUES
(1, 'R V Raghavendra Rao', 'Assistant Professor', 'rr.mca@bmsce.ac.in'),
(2, 'S Shilpa', 'Assistant Professor', 'shilpa.mca@bmsce.ac.'),
(3, 'T S Pushpa', 'Assistant Professor', 'pushpa.mca@bmsce.ac.');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `Reason` varchar(80) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `name`, `Reason`, `status`) VALUES
(3, 'hu', 'ji', 0),
(2, 'Pushpa', 'i am not feeling good', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sem2`
--

DROP TABLE IF EXISTS `sem2`;
CREATE TABLE IF NOT EXISTS `sem2` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(20) NOT NULL,
  `SEM` varchar(5) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `PHONE_NUMBER` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem2`
--

INSERT INTO `sem2` (`ID`, `NAME`, `SEM`, `EMAIL`, `PHONE_NUMBER`) VALUES
(1, 'Aditya', '2', 'Aditya@gmail.com', '8147000000'),
(2, 'Akshat', '2', 'Akshat@gmail.com', '8951000000'),
(3, 'Anubhav', '2', 'Anubhav@gmail.com', '9242000000'),
(4, 'Arjun', '2', 'Arjun@gmail.com', '7795100000'),
(5, 'Ashish', '2', 'Ashish@gmail.com', '9243100000'),
(6, 'Bhaskar', '2', 'Bhaskar@gmail.com', '9035100000'),
(7, 'Bikram', '2', 'Bikram@gmail.com', '8147400000'),
(8, 'Bishwajit', '2', 'Bishwajit@gmail.com', '8147499999'),
(9, 'Chiranjeev', '2', 'Chiranjeev@gmail.com', '7411499999'),
(10, 'Daljeet', '2', 'Daljeet@gmail.com', '7204399999'),
(11, 'Dilip', '2', 'Dilip@gmail.com', '9241399999'),
(12, 'Gaurav', '2', 'Gaurav@gmail.com', '9241300000'),
(13, 'Gautam', '2', 'Gautam@gmail.com', '8904300000'),
(14, 'Girish', '2', 'Girish@gmail.com', '9036200000'),
(15, 'Gurdeep', '2', 'Gurdeep@gmail.com', '8123300000'),
(16, 'Indiresh', '2', 'Indiresh@gmail.com', '7204000000'),
(17, 'Ishranth', '2', 'Ishranth@gmail.com', '8123000000'),
(18, 'Jagan', '2', 'Jagan@gmail.com', '8904000000'),
(19, 'Jaideep', '2', 'Jaideep@gmail.com', '9241000000'),
(20, 'Jeet', '2', 'Jeet@gmail.com', '9241000000'),
(21, 'Karun', '2', 'Karun@gmail.com', '8147100000'),
(22, 'Kshitij', '2', 'Kshitij@gmail.com', '8951100000'),
(23, 'Lalit', '2', 'Lalit@gmail.com', '9242100000'),
(24, 'Manvik', '2', 'Manvik@gmail.com', '7795200000'),
(25, 'Mridul', '2', 'Mridul@gmail.com', '8792200000'),
(26, 'Naagesh', '2', 'Naagesh@gmail.com', '9035200000'),
(27, 'Naishadh', '2', 'Naishadh@gmail.com', '9243200000'),
(28, 'Nilaksh', '2', 'Nilaksh@gmail.com', '8050300000'),
(29, 'Parth', '2', 'Parth@gmail.com', '8867300000'),
(30, 'Pavan', '2', 'Pavan@gmail.com', '9036300000'),
(31, 'Pranav', '2', 'Pranav@gmail.com', '7204400000'),
(32, 'Pushpa', '2', 'Pushpa@gmail.com', '8123400000'),
(33, 'Ritesh', '2', 'Ritesh@gmail.com', '7204099999'),
(34, 'Sachin', '2', 'Sachin@gmail.com', '8123099999'),
(35, 'Samir', '2', 'Samir@gmail.com', '9241099999'),
(36, 'Sanchit', '2', 'Sanchit@gmail.com', '7411199999'),
(37, 'Sandeep', '2', 'Sandeep@gmail.com', '8147199999'),
(38, 'Sanjay', '2', 'Sanjay@gmail.com', '8951199999'),
(39, 'Siddharth', '2', 'Siddharth@gmail.com', '9242199999'),
(40, 'Sparsh', '2', 'Sparsh@gmail.com', '7795299999'),
(41, 'Tarun', '2', 'Tarun@gmail.com', '8792299999'),
(42, 'Tushar', '2', 'Tushar@gmail.com', '9035299999'),
(43, 'Udit', '2', 'Udit@gmail.com', '9243299999'),
(44, 'Uttam', '2', 'Uttam@gmail.com', '8050399999'),
(45, 'Varun', '2', 'Varun@gmail.com', '8867399999'),
(46, 'Vikas', '2', 'Vikas@gmail.com', '9036399999'),
(47, 'Vinay', '2', 'Vinay@gmail.com', '7204499999'),
(48, 'Vipul', '2', 'Vipul@gmail.com', '8123499999'),
(49, 'Yashwant', '2', 'Yashwant@gmail.com', '7411000000'),
(50, 'William', '2', 'William@gmail.com', '7411000000');

-- --------------------------------------------------------

--
-- Table structure for table `sem3`
--

DROP TABLE IF EXISTS `sem3`;
CREATE TABLE IF NOT EXISTS `sem3` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(20) NOT NULL,
  `SEM` varchar(5) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `PHONE_NUMBER` varchar(15) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem3`
--

INSERT INTO `sem3` (`ID`, `NAME`, `SEM`, `EMAIL`, `PHONE_NUMBER`) VALUES
(1, 'Aditya', '3', 'Aditya@gmail.com', '8147000000'),
(2, 'Akshat', '3', 'Akshat@gmail.com', '8951000000'),
(3, 'Anubhav', '3', 'Anubhav@gmail.com', '9242000000'),
(4, 'Arjun', '3', 'Arjun@gmail.com', '7795100000'),
(5, 'Ashish', '3', 'Ashish@gmail.com', '9243100000'),
(6, 'Bhaskar', '3', 'Bhaskar@gmail.com', '9035100000'),
(7, 'Bikram', '3', 'Bikram@gmail.com', '8147400000'),
(8, 'Bishwajit', '3', 'Bishwajit@gmail.com', '8147499999'),
(9, 'Chiranjeev', '3', 'Chiranjeev@gmail.com', '7411499999'),
(10, 'Daljeet', '3', 'Daljeet@gmail.com', '7204399999'),
(11, 'Dilip', '3', 'Dilip@gmail.com', '9241399999'),
(12, 'Gaurav', '3', 'Gaurav@gmail.com', '9241300000'),
(13, 'Gautam', '3', 'Gautam@gmail.com', '8904300000'),
(14, 'Girish', '3', 'Girish@gmail.com', '9036200000'),
(15, 'Gurdeep', '3', 'Gurdeep@gmail.com', '8123300000'),
(16, 'Indiresh', '3', 'Indiresh@gmail.com', '7204000000'),
(17, 'Ishranth', '3', 'Ishranth@gmail.com', '8123000000'),
(18, 'Jagan', '3', 'Jagan@gmail.com', '8904000000'),
(19, 'Jaideep', '3', 'Jaideep@gmail.com', '9241000000'),
(20, 'Jeet', '3', 'Jeet@gmail.com', '9241000000'),
(21, 'Karun', '3', 'Karun@gmail.com', '8147100000'),
(22, 'Kshitij', '3', 'Kshitij@gmail.com', '8951100000'),
(23, 'Lalit', '3', 'Lalit@gmail.com', '9242100000'),
(24, 'Manvik', '3', 'Manvik@gmail.com', '7795200000'),
(25, 'Mridul', '3', 'Mridul@gmail.com', '8792200000'),
(26, 'Naagesh', '3', 'Naagesh@gmail.com', '9035200000'),
(27, 'Naishadh', '3', 'Naishadh@gmail.com', '9243200000'),
(28, 'Nilaksh', '3', 'Nilaksh@gmail.com', '8050300000'),
(29, 'Parth', '3', 'Parth@gmail.com', '8867300000'),
(30, 'Pavan', '3', 'Pavan@gmail.com', '9036300000'),
(31, 'Pranav', '3', 'Pranav@gmail.com', '7204400000'),
(32, 'Pushpa', '3', 'Pushpa@gmail.com', '8123400000'),
(33, 'Ritesh', '3', 'Ritesh@gmail.com', '7204099999'),
(34, 'Sachin', '3', 'Sachin@gmail.com', '8123099999'),
(35, 'Samir', '3', 'Samir@gmail.com', '9241099999'),
(36, 'Sanchit', '3', 'Sanchit@gmail.com', '7411199999'),
(37, 'Sandeep', '3', 'Sandeep@gmail.com', '8147199999'),
(38, 'Sanjay', '3', 'Sanjay@gmail.com', '8951199999'),
(39, 'Siddharth', '3', 'Siddharth@gmail.com', '9242199999'),
(40, 'Sparsh', '3', 'Sparsh@gmail.com', '7795299999'),
(41, 'Tarun', '3', 'Tarun@gmail.com', '8792299999'),
(42, 'Tushar', '3', 'Tushar@gmail.com', '9035299999'),
(43, 'Udit', '3', 'Udit@gmail.com', '9243299999'),
(44, 'Uttam', '3', 'Uttam@gmail.com', '8050399999'),
(45, 'Varun', '3', 'Varun@gmail.com', '8867399999'),
(46, 'Vikas', '3', 'Vikas@gmail.com', '9036399999'),
(47, 'Vinay', '3', 'Vinay@gmail.com', '7204499999'),
(48, 'Vipul', '3', 'Vipul@gmail.com', '8123499999'),
(49, 'Yashwant', '3', 'Yashwant@gmail.com', '7411000000'),
(50, 'William', '3', 'William@gmail.com', '7411000000');

-- --------------------------------------------------------

--
-- Table structure for table `sem4`
--

DROP TABLE IF EXISTS `sem4`;
CREATE TABLE IF NOT EXISTS `sem4` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(20) NOT NULL,
  `SEM` varchar(5) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `PHONE_NUMBER` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem4`
--

INSERT INTO `sem4` (`ID`, `NAME`, `SEM`, `EMAIL`, `PHONE_NUMBER`) VALUES
(1, 'Aditya', '4', 'Aditya@gmail.com', '8147000000'),
(2, 'Akshat', '4', 'Akshat@gmail.com', '8951000000'),
(3, 'Anubhav', '4', 'Anubhav@gmail.com', '9242000000'),
(4, 'Arjun', '4', 'Arjun@gmail.com', '7795100000'),
(5, 'Ashish', '4', 'Ashish@gmail.com', '9243100000'),
(6, 'Bhaskar', '4', 'Bhaskar@gmail.com', '9035100000'),
(7, 'Bikram', '4', 'Bikram@gmail.com', '8147400000'),
(8, 'Bishwajit', '4', 'Bishwajit@gmail.com', '8147499999'),
(9, 'Chiranjeev', '4', 'Chiranjeev@gmail.com', '7411499999'),
(10, 'Daljeet', '4', 'Daljeet@gmail.com', '7204399999'),
(11, 'Dilip', '4', 'Dilip@gmail.com', '9241399999'),
(12, 'Gaurav', '4', 'Gaurav@gmail.com', '9241300000'),
(13, 'Gautam', '4', 'Gautam@gmail.com', '8904300000'),
(14, 'Girish', '4', 'Girish@gmail.com', '9036200000'),
(15, 'Gurdeep', '4', 'Gurdeep@gmail.com', '8123300000'),
(16, 'Indiresh', '4', 'Indiresh@gmail.com', '7204000000'),
(17, 'Ishranth', '4', 'Ishranth@gmail.com', '8123000000'),
(18, 'Jagan', '4', 'Jagan@gmail.com', '8904000000'),
(19, 'Jaideep', '4', 'Jaideep@gmail.com', '9241000000'),
(20, 'Jeet', '4', 'Jeet@gmail.com', '9241000000'),
(21, 'Karun', '4', 'Karun@gmail.com', '8147100000'),
(22, 'Kshitij', '4', 'Kshitij@gmail.com', '8951100000'),
(23, 'Lalit', '4', 'Lalit@gmail.com', '9242100000'),
(24, 'Manvik', '4', 'Manvik@gmail.com', '7795200000'),
(25, 'Mridul', '4', 'Mridul@gmail.com', '8792200000'),
(26, 'Naagesh', '4', 'Naagesh@gmail.com', '9035200000'),
(27, 'Naishadh', '4', 'Naishadh@gmail.com', '9243200000'),
(28, 'Nilaksh', '4', 'Nilaksh@gmail.com', '8050300000'),
(29, 'Parth', '4', 'Parth@gmail.com', '8867300000'),
(30, 'Pavan', '4', 'Pavan@gmail.com', '9036300000'),
(31, 'Pranav', '4', 'Pranav@gmail.com', '7204400000'),
(32, 'Pushpa', '4', 'Pushpa@gmail.com', '8123400000'),
(33, 'Ritesh', '4', 'Ritesh@gmail.com', '7204099999'),
(34, 'Sachin', '4', 'Sachin@gmail.com', '8123099999'),
(35, 'Samir', '4', 'Samir@gmail.com', '9241099999'),
(36, 'Sanchit', '4', 'Sanchit@gmail.com', '7411199999'),
(37, 'Sandeep', '4', 'Sandeep@gmail.com', '8147199999'),
(38, 'Sanjay', '4', 'Sanjay@gmail.com', '8951199999'),
(39, 'Siddharth', '4', 'Siddharth@gmail.com', '9242199999'),
(40, 'Sparsh', '4', 'Sparsh@gmail.com', '7795299999'),
(41, 'Tarun', '4', 'Tarun@gmail.com', '8792299999'),
(42, 'Tushar', '4', 'Tushar@gmail.com', '9035299999'),
(43, 'Udit', '4', 'Udit@gmail.com', '9243299999'),
(44, 'Uttam', '4', 'Uttam@gmail.com', '8050399999'),
(45, 'Varun', '4', 'Varun@gmail.com', '8867399999'),
(46, 'Vikas', '4', 'Vikas@gmail.com', '9036399999'),
(47, 'Vinay', '4', 'Vinay@gmail.com', '7204499999'),
(48, 'Vipul', '4', 'Vipul@gmail.com', '8123499999'),
(49, 'Yashwant', '4', 'Yashwant@gmail.com', '7411000000'),
(50, 'William', '4', 'William@gmail.com', '7411000000');

-- --------------------------------------------------------

--
-- Table structure for table `sem5`
--

DROP TABLE IF EXISTS `sem5`;
CREATE TABLE IF NOT EXISTS `sem5` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(20) NOT NULL,
  `SEM` varchar(5) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `PHONE_NUMBER` varchar(15) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem5`
--

INSERT INTO `sem5` (`ID`, `NAME`, `SEM`, `EMAIL`, `PHONE_NUMBER`) VALUES
(1, 'Aditya', '5', 'Aditya@gmail.com', '8147000000'),
(2, 'Akshat', '5', 'Akshat@gmail.com', '8951000000'),
(3, 'Anubhav', '5', 'Anubhav@gmail.com', '9242000000'),
(4, 'Arjun', '5', 'Arjun@gmail.com', '7795100000'),
(5, 'Ashish', '5', 'Ashish@gmail.com', '9243100000'),
(6, 'Bhaskar', '5', 'Bhaskar@gmail.com', '9035100000'),
(7, 'Bikram', '5', 'Bikram@gmail.com', '8147400000'),
(8, 'Bishwajit', '5', 'Bishwajit@gmail.com', '8147499999'),
(9, 'Chiranjeev', '5', 'Chiranjeev@gmail.com', '7411499999'),
(10, 'Daljeet', '5', 'Daljeet@gmail.com', '7204399999'),
(11, 'Dilip', '5', 'Dilip@gmail.com', '9241399999'),
(12, 'Gaurav', '5', 'Gaurav@gmail.com', '9241300000'),
(13, 'Gautam', '5', 'Gautam@gmail.com', '8904300000'),
(14, 'Girish', '5', 'Girish@gmail.com', '9036200000'),
(15, 'Gurdeep', '5', 'Gurdeep@gmail.com', '8123300000'),
(16, 'Indiresh', '5', 'Indiresh@gmail.com', '7204000000'),
(17, 'Ishranth', '5', 'Ishranth@gmail.com', '8123000000'),
(18, 'Jagan', '5', 'Jagan@gmail.com', '8904000000'),
(19, 'Jaideep', '5', 'Jaideep@gmail.com', '9241000000'),
(20, 'Jeet', '5', 'Jeet@gmail.com', '9241000000'),
(21, 'Karun', '5', 'Karun@gmail.com', '8147100000'),
(22, 'Kshitij', '5', 'Kshitij@gmail.com', '8951100000'),
(23, 'Lalit', '5', 'Lalit@gmail.com', '9242100000'),
(24, 'Manvik', '5', 'Manvik@gmail.com', '7795200000'),
(25, 'Mridul', '5', 'Mridul@gmail.com', '8792200000'),
(26, 'Naagesh', '5', 'Naagesh@gmail.com', '9035200000'),
(27, 'Naishadh', '5', 'Naishadh@gmail.com', '9243200000'),
(28, 'Nilaksh', '5', 'Nilaksh@gmail.com', '8050300000'),
(29, 'Parth', '5', 'Parth@gmail.com', '8867300000'),
(30, 'Pavan', '5', 'Pavan@gmail.com', '9036300000'),
(31, 'Pranav', '5', 'Pranav@gmail.com', '7204400000'),
(32, 'Pushpa', '5', 'Pushpa@gmail.com', '8123400000'),
(33, 'Ritesh', '5', 'Ritesh@gmail.com', '7204099999'),
(34, 'Sachin', '5', 'Sachin@gmail.com', '8123099999'),
(35, 'Samir', '5', 'Samir@gmail.com', '9241099999'),
(36, 'Sanchit', '5', 'Sanchit@gmail.com', '7411199999'),
(37, 'Sandeep', '5', 'Sandeep@gmail.com', '8147199999'),
(38, 'Sanjay', '5', 'Sanjay@gmail.com', '8951199999'),
(39, 'Siddharth', '5', 'Siddharth@gmail.com', '9242199999'),
(40, 'Sparsh', '5', 'Sparsh@gmail.com', '7795299999'),
(41, 'Tarun', '5', 'Tarun@gmail.com', '8792299999'),
(42, 'Tushar', '5', 'Tushar@gmail.com', '9035299999'),
(43, 'Udit', '5', 'Udit@gmail.com', '9243299999'),
(44, 'Uttam', '5', 'Uttam@gmail.com', '8050399999'),
(45, 'Varun', '5', 'Varun@gmail.com', '8867399999'),
(46, 'Vikas', '5', 'Vikas@gmail.com', '9036399999'),
(47, 'Vinay', '5', 'Vinay@gmail.com', '7204499999'),
(48, 'Vipul', '5', 'Vipul@gmail.com', '8123499999'),
(49, 'Yashwant', '5', 'Yashwant@gmail.com', '7411000000'),
(50, 'William', '5', 'William@gmail.com', '7411000000');

-- --------------------------------------------------------

--
-- Table structure for table `sem6`
--

DROP TABLE IF EXISTS `sem6`;
CREATE TABLE IF NOT EXISTS `sem6` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(20) NOT NULL,
  `SEM` varchar(5) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `PHONE_NUMBER` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sem6`
--

INSERT INTO `sem6` (`ID`, `NAME`, `SEM`, `EMAIL`, `PHONE_NUMBER`) VALUES
(1, 'Aditya', '6', 'Aditya@gmail.com', '8147000000'),
(2, 'Akshat', '6', 'Akshat@gmail.com', '8951000000'),
(3, 'Anubhav', '6', 'Anubhav@gmail.com', '9242000000'),
(4, 'Arjun', '6', 'Arjun@gmail.com', '7795100000'),
(5, 'Ashish', '6', 'Ashish@gmail.com', '9243100000'),
(6, 'Bhaskar', '6', 'Bhaskar@gmail.com', '9035100000'),
(7, 'Bikram', '6', 'Bikram@gmail.com', '8147400000'),
(8, 'Bishwajit', '6', 'Bishwajit@gmail.com', '8147499999'),
(9, 'Chiranjeev', '6', 'Chiranjeev@gmail.com', '7411499999'),
(10, 'Daljeet', '6', 'Daljeet@gmail.com', '7204399999'),
(11, 'Dilip', '6', 'Dilip@gmail.com', '9241399999'),
(12, 'Gaurav', '6', 'Gaurav@gmail.com', '9241300000'),
(13, 'Gautam', '6', 'Gautam@gmail.com', '8904300000'),
(14, 'Girish', '6', 'Girish@gmail.com', '9036200000'),
(15, 'Gurdeep', '6', 'Gurdeep@gmail.com', '8123300000'),
(16, 'Indiresh', '6', 'Indiresh@gmail.com', '7204000000'),
(17, 'Ishranth', '6', 'Ishranth@gmail.com', '8123000000'),
(18, 'Jagan', '6', 'Jagan@gmail.com', '8904000000'),
(19, 'Jaideep', '6', 'Jaideep@gmail.com', '9241000000'),
(20, 'Jeet', '6', 'Jeet@gmail.com', '9241000000'),
(21, 'Karun', '6', 'Karun@gmail.com', '8147100000'),
(22, 'Kshitij', '6', 'Kshitij@gmail.com', '8951100000'),
(23, 'Lalit', '6', 'Lalit@gmail.com', '9242100000'),
(24, 'Manvik', '6', 'Manvik@gmail.com', '7795200000'),
(25, 'Mridul', '6', 'Mridul@gmail.com', '8792200000'),
(26, 'Naagesh', '6', 'Naagesh@gmail.com', '9035200000'),
(27, 'Naishadh', '6', 'Naishadh@gmail.com', '9243200000'),
(28, 'Nilaksh', '6', 'Nilaksh@gmail.com', '8050300000'),
(29, 'Parth', '6', 'Parth@gmail.com', '8867300000'),
(30, 'Pavan', '6', 'Pavan@gmail.com', '9036300000'),
(31, 'Pranav', '6', 'Pranav@gmail.com', '7204400000'),
(32, 'Pushpa', '6', 'Pushpa@gmail.com', '8123400000'),
(33, 'Ritesh', '6', 'Ritesh@gmail.com', '7204099999'),
(34, 'Sachin', '6', 'Sachin@gmail.com', '8123099999'),
(35, 'Samir', '6', 'Samir@gmail.com', '9241099999'),
(36, 'Sanchit', '6', 'Sanchit@gmail.com', '7411199999'),
(37, 'Sandeep', '6', 'Sandeep@gmail.com', '8147199999'),
(38, 'Sanjay', '6', 'Sanjay@gmail.com', '8951199999'),
(39, 'Siddharth', '6', 'Siddharth@gmail.com', '9242199999'),
(40, 'Sparsh', '6', 'Sparsh@gmail.com', '7795299999'),
(41, 'Tarun', '6', 'Tarun@gmail.com', '8792299999'),
(42, 'Tushar', '6', 'Tushar@gmail.com', '9035299999'),
(43, 'Udit', '6', 'Udit@gmail.com', '9243299999'),
(44, 'Uttam', '6', 'Uttam@gmail.com', '8050399999'),
(45, 'Varun', '6', 'Varun@gmail.com', '8867399999'),
(46, 'Vikas', '6', 'Vikas@gmail.com', '9036399999'),
(47, 'Vinay', '6', 'Vinay@gmail.com', '7204499999'),
(48, 'Vipul', '6', 'Vipul@gmail.com', '8123499999'),
(49, 'Yashwant', '6', 'Yashwant@gmail.com', '7411000000'),
(50, 'William', '6', 'William@gmail.com', '7411000000');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(20) NOT NULL,
  `SEM` varchar(5) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `PHONE_NUMBER` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `NAME`, `SEM`, `EMAIL`, `PHONE_NUMBER`) VALUES
(2, 'Akshat', '1', 'Akshat@gmail.com', '8951000000'),
(3, 'Anubhav', '1', 'Anubhav@gmail.com', '9242000000'),
(4, 'Arjun', '1', 'Arjun@gmail.com', '7795100000'),
(5, 'Ashish', '1', 'Ashish@gmail.com', '9243100000'),
(6, 'Bhaskar', '1', 'Bhaskar@gmail.com', '9035100000'),
(7, 'Bikram', '1', 'Bikram@gmail.com', '8147400000'),
(8, 'Bishwajit', '1', 'Bishwajit@gmail.com', '8147499999'),
(9, 'Chiranjeev', '1', 'Chiranjeev@gmail.com', '7411499999'),
(10, 'Daljeet', '1', 'Daljeet@gmail.com', '7204399999'),
(11, 'Dilip', '1', 'Dilip@gmail.com', '9241399999'),
(12, 'Gaurav', '1', 'Gaurav@gmail.com', '9241300000'),
(13, 'Gautam', '1', 'Gautam@gmail.com', '8904300000'),
(14, 'Girish', '1', 'Girish@gmail.com', '9036200000'),
(15, 'Gurdeep', '1', 'Gurdeep@gmail.com', '8123300000'),
(16, 'Indiresh', '1', 'Indiresh@gmail.com', '7204000000'),
(17, 'Ishranth', '1', 'Ishranth@gmail.com', '8123000000'),
(18, 'Jagan', '1', 'Jagan@gmail.com', '8904000000'),
(19, 'Jaideep', '1', 'Jaideep@gmail.com', '9241000000'),
(20, 'Jeet', '1', 'Jeet@gmail.com', '9241000000'),
(21, 'Karun', '1', 'Karun@gmail.com', '8147100000'),
(22, 'Kshitij', '1', 'Kshitij@gmail.com', '8951100000'),
(23, 'Lalit', '1', 'Lalit@gmail.com', '9242100000'),
(24, 'Manvik', '1', 'Manvik@gmail.com', '7795200000'),
(25, 'Mridul', '1', 'Mridul@gmail.com', '8792200000'),
(26, 'Naagesh', '1', 'Naagesh@gmail.com', '9035200000'),
(27, 'Naishadh', '1', 'Naishadh@gmail.com', '9243200000'),
(28, 'Nilaksh', '1', 'Nilaksh@gmail.com', '8050300000'),
(29, 'Parth', '1', 'Parth@gmail.com', '8867300000'),
(30, 'Pavan', '1', 'Pavan@gmail.com', '9036300000'),
(31, 'Pranav', '1', 'Pranav@gmail.com', '7204400000'),
(32, 'Pushpa', '1', 'Pushpa@gmail.com', '8123400000'),
(33, 'Ritesh', '1', 'Ritesh@gmail.com', '7204099999'),
(34, 'Sachin', '1', 'Sachin@gmail.com', '8123099999'),
(35, 'Samir', '1', 'Samir@gmail.com', '9241099999'),
(36, 'Sanchit', '1', 'Sanchit@gmail.com', '7411199999'),
(37, 'Sandeep', '1', 'Sandeep@gmail.com', '8147199999'),
(38, 'Sanjay', '1', 'Sanjay@gmail.com', '8951199999'),
(39, 'Siddharth', '1', 'Siddharth@gmail.com', '9242199999'),
(40, 'Sparsh', '1', 'Sparsh@gmail.com', '7795299999'),
(41, 'Tarun', '1', 'Tarun@gmail.com', '8792299999'),
(42, 'Tushar', '1', 'Tushar@gmail.com', '9035299999'),
(43, 'Udit', '1', 'Udit@gmail.com', '9243299999'),
(44, 'Uttam', '1', 'Uttam@gmail.com', '8050399999'),
(45, 'Varun', '1', 'Varun@gmail.com', '8867399999'),
(46, 'Vikas', '1', 'Vikas@gmail.com', '9036399999'),
(47, 'Vinay', '1', 'Vinay@gmail.com', '7204499999'),
(48, 'Vipul', '1', 'Vipul@gmail.com', '8123499999'),
(49, 'Yashwant', '1', 'Yashwant@gmail.com', '7411000000'),
(50, 'William', '1', 'William@gmail.com', '7411000000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
