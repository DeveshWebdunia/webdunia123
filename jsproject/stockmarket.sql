-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2019 at 09:00 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stockmarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientlisting`
--

CREATE TABLE `clientlisting` (
  `client_id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(15) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `status` smallint(1) NOT NULL,
  `country` varchar(10) NOT NULL,
  `state` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `pincode` int(10) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientlisting`
--

INSERT INTO `clientlisting` (`client_id`, `name`, `email`, `phone`, `gender`, `status`, `country`, `state`, `city`, `pincode`, `url`) VALUES
(28, 'devesh sant', 'dveshsant@gfmasil.com', 2147483647, 'M', 1, 'South Aust', 'Australia', 'Mitchell', 752525, 'upload/cover_dashboard.jpg'),
(29, 'devesh sant', 'dveshsant@gfmasil.com', 2147483647, 'M', 0, '', '', '', 0, ''),
(31, 'vdvv', 'ffesfsfs', 0, '', 0, '', '', '', 0, ''),
(32, 'dgd', 'vdvfv', 0, '', 0, '', '', '', 0, ''),
(33, 'fbgfb', 'bbfbdfbd', 0, '', 1, '', '', '', 0, ''),
(34, 'fbgfb', 'bbfbdfbd', 0, '', 0, '', '', '', 0, ''),
(35, 'dvd', 'dvv', 0, '', 0, '', '', '', 0, ''),
(36, 'dgdsgdsgdssggg', 'dfgddsfsfsfsfssfsff', 0, '', 0, '', '', '', 0, ''),
(37, 'vdvddvd', 'dfvdvv', 0, 'M', 0, '', '', '', 0, ''),
(38, 'sdsd', 'dswdd', 0, 'M', 0, '', '', '', 0, ''),
(39, 'dasdsa', 'dasdsd', 0, '', 0, '', '', '', 0, ''),
(40, 'dscece', 'dasdsdsd', 0, 'M', 0, '', '', '', 0, ''),
(41, 'dsvds', 'scfc', 0, 'M', 0, '', '', '', 0, ''),
(42, 'cscscc', 'csccc', 0, 'M', 0, '', '', '', 0, ''),
(43, 'cscscc', 'csccc', 0, 'M', 0, '', '', '', 0, ''),
(44, '255325325', 'dhjddjdvdvdshjvb', 0, 'F', 0, '', '', '', 0, ''),
(45, 'vdvvx', 'cvdcczs', 2147483647, 'M', 0, '', '', '', 0, ''),
(46, 'fdsfdf', 'dsfsf', 2147483647, 'M', 0, '', '', '', 0, ''),
(47, 'DEVESH SANT', 'dveehs@debv', 2147483647, 'M', 0, '', '', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientlisting`
--
ALTER TABLE `clientlisting`
  ADD PRIMARY KEY (`client_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientlisting`
--
ALTER TABLE `clientlisting`
  MODIFY `client_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
