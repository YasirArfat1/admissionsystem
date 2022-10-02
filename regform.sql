-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2019 at 10:46 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `admin` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin`, `fullname`, `contact`, `username`, `password`) VALUES
(2, 'Asmat Ullah', '02043130310', 'admin', 'admin');

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
  `campus` varchar(100) NOT NULL,
  `applying_for` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_applied`
--

INSERT INTO `all_applied` (`student_id`, `status`, `fullname`, `cnic`, `father_name`, `father_cnic`, `dob`, `gender`, `contact`, `photo`, `nationality`, `province`, `district`, `address`, `ssc`, `ssc_marks`, `ssc_total`, `ssc_institute`, `hssc`, `hssc_marks`, `hssc_total`, `hssc_institute`, `campus`, `applying_for`, `department`) VALUES
(25, 'Rejected', 'Jawad Khan', 2147483647, 'Muhammad Abdullah', 2147483647, '1994-11-02', 'male', 2147483647, '20181009_10455221.jpg', 'pak', 'kpk', 'Dir Lower', 'Mayar Khadagzai Tehsil Adenzai', 'Science', 618, 1050, 'BISE Mkd', 'P-eng', 626, 1100, 'BISE Mkd', 'Main Campus', 'BS', 'Computer Science'),
(26, 'Approved', 'Asmat Ullah', 2147483647, 'Hemeed Gul', 2147483647, '2019-01-02', 'male', 2147483647, '20181009_10455221.jpg', 'pak', 'kpk', 'Dir', 'Darora', 'Science', 22, 777, 'BISE Mkd', 'P-eng', 656, 786, 'BISE Mkd', 'Warai Campus', 'BSC', 'Zoology'),
(27, 'Approved', 'Jawad Khan', 2147483647, 'Muhammad Abdullah', 2147483647, '1994-11-02', 'male', 2147483647, '20181009_10455221.jpg', 'pak', 'kpk', 'Dir Lower', 'Mayar Khadagzai Tehsil Adenzai', 'Science', 618, 1050, 'BISE Mkd', 'P-eng', 626, 1100, 'BISE Mkd', 'Main Campus', 'BS', 'Computer Science'),
(28, 'Approved', 'Asmat Ullah', 2147483647, 'Hemeed Gul', 2147483647, '2019-01-02', 'male', 2147483647, '20181009_10455221.jpg', 'pak', 'kpk', 'Dir', 'Darora', 'Science', 22, 777, 'BISE Mkd', 'P-eng', 656, 786, 'BISE Mkd', 'Warai Campus', 'BSC', 'Zoology'),
(29, 'Rejected', 'Jawad Khan', 2147483647, 'Muhammad Abdullah', 2147483647, '1994-11-02', 'male', 2147483647, '20181009_10455221.jpg', 'pak', 'kpk', 'Dir Lower', 'Mayar Khadagzai Tehsil Adenzai', 'Science', 618, 1050, 'BISE Mkd', 'P-eng', 626, 1100, 'BISE Mkd', 'Main Campus', 'BS', 'Computer Science'),
(30, 'Approved', 'Jawad Khan', 2147483647, 'Muhammad Abdullah', 2147483647, '1994-11-02', 'male', 2147483647, '20181009_10455221.jpg', 'pak', 'kpk', 'Dir Lower', 'Mayar Khadagzai Tehsil Adenzai', 'Science', 618, 1050, 'BISE Mkd', 'P-eng', 626, 1100, 'BISE Mkd', 'Main Campus', 'BS', 'Computer Science'),
(31, 'Rejected', 'Jawad Khan', 2147483647, 'Muhammad Abdullah', 2147483647, '1994-11-02', 'male', 2147483647, '20181009_10455221.jpg', 'pak', 'kpk', 'Dir Lower', 'Mayar Khadagzai Tehsil Adenzai', 'Science', 618, 1050, 'BISE Mkd', 'P-eng', 626, 1100, 'BISE Mkd', 'Main Campus', 'BS', 'Computer Science'),
(32, 'Approved', 'Asmat Ullah', 2147483647, 'Hemeed Gul', 2147483647, '2019-01-02', 'male', 2147483647, '20181009_10455221.jpg', 'pak', 'kpk', 'Dir', 'Darora', 'Science', 22, 777, 'BISE Mkd', 'P-eng', 656, 786, 'BISE Mkd', 'Warai Campus', 'BSC', 'Zoology'),
(33, 'Rejected', 'Jawad Khan', 2147483647, 'Muhammad Abdullah', 2147483647, '1994-11-02', 'male', 2147483647, '20181009_10455221.jpg', 'pak', 'kpk', 'Dir Lower', 'Mayar Khadagzai Tehsil Adenzai', 'Science', 618, 1050, 'BISE Mkd', 'P-eng', 626, 1100, 'BISE Mkd', 'Main Campus', 'BS', 'Computer Science'),
(34, 'Pending', 'Asmat Ullah', 2147483647, 'Hemeed Gul', 2147483647, '2019-01-02', 'male', 2147483647, '20181009_10455221.jpg', 'pak', 'kpk', 'Dir', 'Darora', 'Science', 22, 777, 'BISE Mkd', 'P-eng', 656, 786, 'BISE Mkd', 'Warai Campus', 'BSC', 'Zoology'),
(35, 'Approved', 'Jawad Khan', 2147483647, 'Muhammad Abdullah', 2147483647, '1994-11-02', 'male', 2147483647, '20181009_10455221.jpg', 'pak', 'kpk', 'Dir Lower', 'Mayar Khadagzai Tehsil Adenzai', 'Science', 618, 1050, 'BISE Mkd', 'P-eng', 626, 1100, 'BISE Mkd', 'Main Campus', 'BS', 'Computer Science'),
(36, 'Approved', 'khen Jawad', 2147483647, 'Muhammad Abdullah', 2147483647, '1994-11-02', 'male', 2147483647, '20181009_10455221.jpg', 'pak', 'kpk', 'Dir Lower', 'Mayar Khadagzai Tehsil Adenzai', 'Science', 618, 1050, 'BISE Mkd', 'P-eng', 626, 1100, 'BISE Mkd', 'Main Campus', 'BS', 'Computer Science'),
(37, 'Pending', 'Asmat Ullah', 2147483647, 'Hemeed Gul', 2147483647, '2019-01-02', 'male', 2147483647, '20181009_10455221.jpg', 'pak', 'kpk', 'Dir', 'Darora', 'Science', 22, 777, 'BISE Mkd', 'P-eng', 656, 786, 'BISE Mkd', 'Warai Campus', 'BSC', 'Zoology');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin`);

--
-- Indexes for table `all_applied`
--
ALTER TABLE `all_applied`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `all_applied`
--
ALTER TABLE `all_applied`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
