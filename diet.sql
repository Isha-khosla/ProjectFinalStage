-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2017 at 07:50 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jc468643_team04`
--

-- --------------------------------------------------------

--
-- Table structure for table `diet`
--

CREATE TABLE `diet` (
  `Batch` int(20) NOT NULL,
  `We_Call` varchar(20) NOT NULL,
  `No_Of_Food_Intake_Per Day` varchar(20) NOT NULL,
  `catid` int(10) NOT NULL,
  `Daily_Water` varchar(20) NOT NULL,
  `Tips` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diet`
--

INSERT INTO `diet` (`Batch`, `We_Call`, `No_Of_Food_Intake_Per Day`, `catid`, `Daily_Water`, `Tips`) VALUES
(1, 'children(15-20 year)', '3 times', 1, '2 litre', 'Start the day with a healthy breakfast,Eat lots of different foods every day,Eat more vegetables and fresh fruits,Eat more whole grains (e.g., oats, brown rice, rye, crackers, whole-wheat pasta,Regular exercise.'),
(2, 'Young(20-35 years)', '3 times', 1, '3 litre', 'Start the day with a healthy breakfast. It refuels your body and gives you energy for the day,Eat slowly.,Eat more vegetables and fresh fruits.,Eat more whole grains,Regular exercise'''),
(3, 'Young(35 + years)', '3 times', 1, '3 litre', 'Start the day with a healthy breakfast,It refuels your body and gives you energy for the day,Eat slowly.,Eat more vegetables and fresh fruits.,Eat more whole grains,Regular exercise');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diet`
--
ALTER TABLE `diet`
  ADD PRIMARY KEY (`Batch`),
  ADD UNIQUE KEY `We call` (`We_Call`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diet`
--
ALTER TABLE `diet`
  MODIFY `Batch` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
