-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2020 at 12:03 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ictd`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sl` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `institute` varchar(500) NOT NULL,
  `type` varchar(50) NOT NULL,
  `count` int(50) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sl`, `username`, `password`, `email`, `gender`, `mobile`, `institute`, `type`, `count`, `photo`) VALUES
(1, 'yadab', '123', 'yadab.sd2013@gmail.com', 'M', '01733267990', 'CoU', 'student', 0, ''),
(2, 'shakhaowat', '123', 'sh2018@gmail.com', 'M', '01733267990', 'CoU', 'student', 0, 'download.jpg'),
(3, 'atik', '123', 'yadab.sd2013@gmail.com', 'M', '01733267990', 'CoU', 'student', 0, 'IMG_20181012_225521_042 copy.jpg'),
(4, 'myname', '1234', 'yadab.sd2013@gmail.com', 'M', '01733267990', 'IT', 'student', 0, ''),
(5, 'yadabsd', '1234', 'yadab.sd2013@gmail.com', 'M', '01733267990', 'wfgv', 'student', 0, 'blank-book-with-pencil-powerpoint-templates.jpg'),
(6, 'account', '1234', 'yadab.sd2013@gmail.com', 'M', '01733267990', 'wfgv', 'student', 0, ''),
(7, 'manager', '1234', 'yadab.sd2013@gmail.com', 'M', '01733267990', 'wfgv', 'student', 0, ''),
(8, 'maisha', '1234', 'yadab.sd2013@gmail.com', 'F', '01733267990', 'Invariant', 'student', 0, 'blank-book-with-pencil-powerpoint-templates.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `sl` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `count` int(50) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`sl`, `username`, `password`, `count`) VALUES
(2, 'admin', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `sl` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
