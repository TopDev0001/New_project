-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 26, 2022 at 02:39 PM
-- Server version: 5.7.37-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wonderpo_qvcontest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', 'e6e061838856bf47e1de730719fb2609', '2022-03-19 06:35:33');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `kp` varchar(150) DEFAULT NULL,
  `telefon` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LastUpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`id`, `name`, `kp`, `telefon`, `email`, `Status`, `PostingDate`, `LastUpdationDate`) VALUES
(28, 'Vishal', ' 123 KP number ', '8559993678', 'vishal@gmail.com', NULL, '2022-03-23 19:57:52', NULL),
(29, 'rahul', 'noumber 4567', '9876543456', 'email@email.com', NULL, '2022-03-23 20:01:34', NULL),
(30, 'john', '1234', '9876543210', 'john@email.com', NULL, '2022-03-24 01:09:36', NULL),
(31, 'Peeter', 'KP no 1234', '98-1234567890', 'email@email.com', NULL, '2022-03-24 01:27:16', NULL),
(32, 'Vishal', 'No KP 123', '91-9876543456', 'viratvishaligeek@gmail.com', NULL, '2022-03-24 02:07:29', NULL),
(33, 'abc', '123', '123', '123@gmail.com', NULL, '2022-03-24 02:37:43', NULL),
(34, 'test', '89898965-56-5522', '045-7894555', 'test@yahoo.com', NULL, '2022-03-24 08:33:48', NULL),
(35, 'xxx', 'xxx', 'xxx', 'xxx@gmail.com', NULL, '2022-03-24 09:32:17', NULL),
(36, 'xxx', 'xx', 'xxx', 'xxx@gmail.com', NULL, '2022-03-25 01:15:49', NULL),
(37, 'ESG Governances', '89898965-56-5522', '045-7894555', 'chien.ee@wonderpod.io', NULL, '2022-03-25 07:36:25', NULL),
(38, 'test', '89898965-56-5522', '045-7894555', 'admin@admin.com', NULL, '2022-03-25 19:10:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `watch` varchar(120) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `watch`, `CreationDate`, `UpdationDate`) VALUES
(22, 'Yes', '2022-03-23 19:57:58', NULL),
(23, 'Yes', '2022-03-23 20:01:54', NULL),
(25, 'Yes', '2022-03-24 01:11:05', NULL),
(26, 'Yes', '2022-03-24 01:31:06', NULL),
(27, 'Yes', '2022-03-24 02:07:53', NULL),
(28, 'Yes', '2022-03-24 02:38:08', NULL),
(29, 'Yes', '2022-03-24 08:34:21', NULL),
(30, 'Yes', '2022-03-24 09:42:15', NULL),
(31, 'Yes', '2022-03-25 01:16:31', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
