-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 15, 2017 at 04:02 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

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
  `print_status` varchar(20) NOT NULL,
  `print_pickup` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myprint`
--

INSERT INTO `myprint` (`print_id`, `print_date`, `print_file`, `print_status`, `print_pickup`) VALUES
(1, '2017-05-12', 'asdf.pdf', '1', 'Mulyosari'),
(2, '2017-05-14', 'qwer.pdf', '1', 'Ketintang'),
(3, '2017-05-15', 'zxcv.doc', '2', 'Kantin ITS Pusat'),
(4, '2017-05-10', 'file.pdf', '1', 'Mulyosari');

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
  MODIFY `print_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;