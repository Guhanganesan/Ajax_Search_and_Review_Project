-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2018 at 06:07 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajax_data`
--

CREATE TABLE `ajax_data` (
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ajax_data`
--

INSERT INTO `ajax_data` (`Name`) VALUES
('page1'),
('page2'),
('page3'),
('page4'),
('page5');

-- --------------------------------------------------------

--
-- Table structure for table `alphabet`
--

CREATE TABLE `alphabet` (
  `id` int(11) NOT NULL,
  `pages` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alphabet`
--

INSERT INTO `alphabet` (`id`, `pages`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D'),
(5, 'E'),
(6, 'F'),
(7, 'G'),
(9, 'H'),
(10, 'I'),
(11, 'J'),
(12, 'K'),
(13, 'L'),
(14, 'M');

-- --------------------------------------------------------

--
-- Table structure for table `chennai`
--

CREATE TABLE `chennai` (
  `id` varchar(30) NOT NULL,
  `pages` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chennai`
--

INSERT INTO `chennai` (`id`, `pages`) VALUES
('1', 'chennai_page1'),
('2', 'chennai_page2'),
('3', 'chennai_page3'),
('4', 'chennai_page4'),
('5', 'chennai_page5');

-- --------------------------------------------------------

--
-- Table structure for table `covai`
--

CREATE TABLE `covai` (
  `id` varchar(30) NOT NULL,
  `pages` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `covai`
--

INSERT INTO `covai` (`id`, `pages`) VALUES
('1', 'covai_page1'),
('2', 'covai_page2'),
('3', 'covai_page3'),
('4', 'covai_page4');

-- --------------------------------------------------------

--
-- Table structure for table `madurai`
--

CREATE TABLE `madurai` (
  `id` varchar(30) NOT NULL,
  `pages` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `madurai`
--

INSERT INTO `madurai` (`id`, `pages`) VALUES
('1', 'madurai_page1'),
('2', 'madurai_page2'),
('3', 'madurai_page3'),
('4', 'madurai_page4'),
('5', 'madurai_page5'),
('6', 'madurai_page6');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `name` varchar(30) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `comments` varchar(500) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pages` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`name`, `rate`, `comments`, `email`, `pages`) VALUES
('Guhan', 3, ' Nice..', 'bharadhiguhan@gmail.com', 'chennai_page1'),
('siva', 3, ' good', 'rajaduraisiva@gmail.com', 'madurai_page1'),
('Arun', 0, ' Hi Good..', 'jk@gmail.com', 'chennai_page1'),
('Tena', 3, ' I have provided 3 star', 'tena@gmail.com', 'trichy_page1'),
('Trichy', 0, ' HI.....', 'trichy@gmail.com', 'trichy_page2');

-- --------------------------------------------------------

--
-- Table structure for table `trichy`
--

CREATE TABLE `trichy` (
  `id` varchar(30) NOT NULL,
  `pages` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trichy`
--

INSERT INTO `trichy` (`id`, `pages`) VALUES
('1', 'trichy_page1'),
('2', 'trichy_page2'),
('3', 'trichy_page3'),
('4', 'trichy_page4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alphabet`
--
ALTER TABLE `alphabet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alphabet`
--
ALTER TABLE `alphabet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
