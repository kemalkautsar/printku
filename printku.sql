-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2017 at 04:00 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `printku`
--

-- --------------------------------------------------------

--
-- Table structure for table `myprint`
--

CREATE TABLE `myprint` (
  `print_id` int(5) NOT NULL,
  `print_date` date NOT NULL,
  `print_file` varchar(100) NOT NULL,
  `print_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myprint`
--

INSERT INTO `myprint` (`print_id`, `print_date`, `print_file`, `print_status`) VALUES
(1, '2017-05-12', 'asdf.pdf', '1'),
(2, '2017-05-14', 'qwer.pdf', '1'),
(3, '2017-05-15', 'zxcv.doc', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myprint`
--
ALTER TABLE `myprint`
  ADD PRIMARY KEY (`print_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myprint`
--
ALTER TABLE `myprint`
  MODIFY `print_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
