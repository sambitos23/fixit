-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2020 at 04:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

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
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `ph_no` char(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `services` varchar(100) NOT NULL,
  `booking_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `fname`, `lname`, `ph_no`, `email`, `password`, `address`, `DOB`, `services`, `booking_date`) VALUES
(1, 'SAMBIT', 'SAHA', '8765432123', 'sambit@gmail.com', 'sambit123', 'Krishnapally', '2020-09-09', 'Painting Service', '2020-09-10'),
(2, 'Subhangi', 'Mishra', '6767543219', 'subhangi@gmail.com', 'Binod321', 'Sambalpur', '1999-03-30', 'Electrical Service', '2020-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

CREATE TABLE `poll` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` varchar(500) DEFAULT NULL,
  `service` varchar(50) DEFAULT NULL,
  `feedback` text NOT NULL,
  `suggestions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poll`
--

INSERT INTO `poll` (`id`, `name`, `address`, `service`, `feedback`, `suggestions`) VALUES
(1, 'Subhangi', 'Sambalpur', 'Electrical', 'Excellent', 'Glad to have taken the services of FIXit. I got quick response. The technicians were on time. The work by FIXit is really praiseworthy!\r\n'),
(2, 'Sambit', 'Malda', 'Painting', 'Good', 'The technicians were on time. The work by FIXit is really praiseworthy!\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `poll`
--
ALTER TABLE `poll`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `poll`
--
ALTER TABLE `poll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
