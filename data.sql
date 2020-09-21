-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 20, 2020 at 03:40 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id14912168_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `sender` varchar(20) NOT NULL,
  `receiver` varchar(20) NOT NULL,
  `credits` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`sender`, `receiver`, `credits`) VALUES
('B', 'A', 100),
('B', 'A', 500);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `COUNTRY` varchar(20) NOT NULL,
  `credit` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`username`, `email`, `COUNTRY`, `credit`) VALUES
('SAQIB', 'SAQ@gmail.com', 'INDIA', 1000),
('MARTHA', 'MARTHA@gmail.com', 'GERMANY', 1000),
('JONAS', 'JONAS@gmail.com', 'GERMANY', 1000),
('TONY  ', 'IAMIRONMAN@gmail.com', 'USA', 1000),
('VOLDEMORT', 'RIDDLE@gmail.com', 'LONDON', 1000),
('HARRY ', 'HP@gmail.com', 'LONDON', 1000),
('CHANDLER', 'CHANDLER@gmail.com', 'USA', 1000),
('JOEY', 'JOEY@gmail.com', 'USA', 1000),
('PROFESSOR', 'PROFESSOR@gmail.com', 'SPAIN', 1000),
('HELGA', 'HELGA@gmail.com', 'USA', 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
