-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 07:20 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regform`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `fullname`, `email`, `username`, `password`, `Image`) VALUES
(1, 'Yasir Arfat', 'yasir317.kh@gmail.com', 'Yasir', '12345678', ''),
(2, 'Mehwish', 'Mehwish@gmail.com', 'Me', '12344321', 'pf-removebg-preview.png'),
(3, 'Mehwish', 'Mehwish11@gmail.com', 'Mehwish11', '12344321', 'Slider1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `all_applied`
--

CREATE TABLE `all_applied` (
  `student_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `cnic` int(15) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `father_cnic` int(15) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `contact` int(20) NOT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `nationality` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `ssc` varchar(100) NOT NULL,
  `ssc_marks` int(11) NOT NULL,
  `ssc_total` int(11) NOT NULL,
  `ssc_institute` varchar(100) NOT NULL,
  `hssc` varchar(100) NOT NULL,
  `hssc_marks` int(11) NOT NULL,
  `hssc_total` int(11) NOT NULL,
  `hssc_institute` varchar(100) NOT NULL,
  `campus` int(100) NOT NULL,
  `applying_for` int(100) NOT NULL,
  `department` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_applied`
--

INSERT INTO `all_applied` (`student_id`, `status`, `fullname`, `cnic`, `father_name`, `father_cnic`, `dob`, `gender`, `contact`, `photo`, `nationality`, `province`, `district`, `address`, `ssc`, `ssc_marks`, `ssc_total`, `ssc_institute`, `hssc`, `hssc_marks`, `hssc_total`, `hssc_institute`, `campus`, `applying_for`, `department`) VALUES
(1, 'Approved', 'Yasir', 2147483647, 'ad', 13, '2021-11-04', 'Male', 3125, '64457046_387485621890934_1753441413866979328_n.jpg', 'Pakistan', 'KPK', 'Lower Dir', 'q1q13214', 'Science', 110, 65, '121e32', 'CSc', 12213213, 133, '35', 1, 0, 0),
(2, 'Approved', 'qe', 1212, '12', 12, '2021-11-23', 'Other', 12313, '64457046_387485621890934_1753441413866979328_n.jpg', 'Pakistan', 'Sindh', 'lower dir', '121212', 'Arts', 1212, 1212, '1212', 'CSc', 1212, 1212, '1212', 1, 1, 1),
(3, 'Rejected', 'Yasir Arfat', 2147483647, 'ad', 12, '2021-12-12', 'Female', 3125, 'Capture.JPG', 'Pakistan', 'Baloch', 'Lower Dir', 'f', 'Arts', 5, 5, '121e32', 'Pre-Engineering', 5, 5, 'yt', 0, 0, 0),
(4, 'Rejected', 'hamza', 443, '656', 400000, '2021-12-05', 'Female', 3125, 'fm.JPG', 'Pakistan', 'KPK', 'lower dir', 'gyytryftf', 'Science', 54, 54, '121e32', 'CSc', 54, 76, 't', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

CREATE TABLE `campus` (
  `Cid` int(20) NOT NULL,
  `Cname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campus`
--

INSERT INTO `campus` (`Cid`, `Cname`) VALUES
(1, 'New Campus'),
(2, 'Karachi'),
(3, 'Islamabad');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Did` int(100) NOT NULL,
  `Dname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Did`, `Dname`) VALUES
(1, 'CS'),
(2, 'New IT'),
(3, 'HR'),
(4, 'Englsih'),
(5, 'BBA'),
(6, 'CS');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `Pid` int(100) NOT NULL,
  `Pname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`Pid`, `Pname`) VALUES
(1, 'BSCS'),
(2, 'MCS'),
(3, 'BS Englihs'),
(4, 'BSIT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `all_applied`
--
ALTER TABLE `all_applied`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `Campus_fr` (`campus`),
  ADD KEY `Dapartment_fr` (`department`),
  ADD KEY `Program_fr` (`applying_for`);

--
-- Indexes for table `campus`
--
ALTER TABLE `campus`
  ADD PRIMARY KEY (`Cid`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Did`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`Pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `all_applied`
--
ALTER TABLE `all_applied`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `campus`
--
ALTER TABLE `campus`
  MODIFY `Cid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Did` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `Pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
