-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2022 at 06:43 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_user`
--

CREATE TABLE `app_user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pnumber` varchar(50) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_user`
--

INSERT INTO `app_user` (`username`, `password`, `role`, `status`, `fname`, `lname`, `email`, `pnumber`, `dob`, `address`) VALUES
('aimuni', '*8DC54F2E15823C98AEA063E339A5D4C53D1A471A', 'normal', 'active', 'Aimuni', 'Nadhrah', 'aimuniyazit98@gmail.com', '0193677008', '2022-07-02', '88, Taman Maju Jaya'),
('ainaahmad', '*8DC54F2E15823C98AEA063E339A5D4C53D1A471A', 'normal', 'active', 'aina', 'ahmad', 'anykid.kye68@ymail.com', '0193677008', '2022-07-11', '88, Taman Maju Jaya'),
('alif', '*8DC54F2E15823C98AEA063E339A5D4C53D1A471A', 'admin', 'active', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `username` varchar(10) NOT NULL,
  `PHP_SELF` varchar(50) NOT NULL,
  `SERVER_NAME` varchar(50) NOT NULL,
  `HTTP_HOST` varchar(50) NOT NULL,
  `REQUEST_TIME` varchar(50) NOT NULL,
  `HTTP_USER_AGENT` varchar(50) NOT NULL,
  `SCRIPT_NAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_user`
--
ALTER TABLE `app_user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
