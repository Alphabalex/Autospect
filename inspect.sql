-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2020 at 11:34 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inspect`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Username`, `Password`) VALUES
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `checklist`
--

CREATE TABLE `checklist` (
  `id` int(11) NOT NULL,
  `vin` varchar(255) NOT NULL,
  `checklists` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `damages`
--

CREATE TABLE `damages` (
  `id` int(11) NOT NULL,
  `vin` varchar(255) NOT NULL,
  `damage` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `damages`
--

INSERT INTO `damages` (`id`, `vin`, `damage`, `image`) VALUES
(10, 'qbgertwteeopepodgcgvcvyj', 'broken mirror', 'uploads/5f7996126a793broken mirror.jpg'),
(11, 'qbgertwteeopepodgcgvcvyj', 'broken tail light', 'uploads/5f7996151665cbroken tail light.jpg'),
(12, 'qbgertwteeopepodgcgvcvyj', 'broken handle', 'uploads/5f799617baffdbroken door handle 2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `vin` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `color` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `mileage` varchar(20) NOT NULL,
  `front` varchar(255) NOT NULL,
  `back` varchar(255) NOT NULL,
  `right` varchar(255) NOT NULL,
  `left` varchar(255) NOT NULL,
  `driver` varchar(255) NOT NULL,
  `passenger` varchar(255) NOT NULL,
  `engine` varchar(255) NOT NULL,
  `tyre` varchar(255) NOT NULL,
  `vinplate` varchar(255) NOT NULL,
  `eng` text NOT NULL,
  `transmission` text NOT NULL,
  `interior` text NOT NULL,
  `exterior` text NOT NULL,
  `electricals` text NOT NULL,
  `suspension` text NOT NULL,
  `remark` text NOT NULL,
  `options` text,
  `valuation` text,
  `report_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `vin`, `model`, `color`, `location`, `mileage`, `front`, `back`, `right`, `left`, `driver`, `passenger`, `engine`, `tyre`, `vinplate`, `eng`, `transmission`, `interior`, `exterior`, `electricals`, `suspension`, `remark`, `options`, `valuation`, `report_by`) VALUES
(6, 'qbgertwteeopepodgcgvcvyj', 'toyota sienna 2012', 'blue', 'ikeja', '344556', 'uploads/5f7995f4b3ae3front.jpg', 'uploads/5f7995f4b3af8back.jpg', 'uploads/5f7995f4b3affright.jpg', 'uploads/5f7995f4b3b05left.jpg', 'uploads/5f7995f4b3b0cdriver.jpg', 'uploads/5f7995f4b3b13passenger.jpg', 'uploads/5f7995f4b3b1cengine.jpg', 'uploads/5f7995f4b3b22tyre.jpg', 'uploads/5f7995f4b3b29vin.jpg', 'makes noise and needs to be repaired', 'fair', 'ok', 'fair', 'ok', 'ok', 'car is okay for purchase', NULL, NULL, 'john doe');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(11) NOT NULL,
  `Full_Name` varchar(40) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `Full_Name`, `Password`) VALUES
(1, 'john doe', 'test1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checklist`
--
ALTER TABLE `checklist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `damages`
--
ALTER TABLE `damages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vin` (`vin`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `checklist`
--
ALTER TABLE `checklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `damages`
--
ALTER TABLE `damages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
