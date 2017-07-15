-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2017 at 02:50 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bebabeba2`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `user_id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`user_id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driver_id` int(11) NOT NULL,
  `name` varchar(16) NOT NULL,
  `v_type` varchar(16) NOT NULL,
  `l_plate` varchar(10) NOT NULL,
  `phone_no` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(16) NOT NULL,
  `status` varchar(16) NOT NULL,
  `latitude` varchar(30) NOT NULL,
  `longitude` varchar(30) NOT NULL,
  `PricePerKm` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_id`, `name`, `v_type`, `l_plate`, `phone_no`, `email`, `password`, `status`, `latitude`, `longitude`, `PricePerKm`) VALUES
(1, 'sam', '', 'kah', '12345', 'mat@g.com', '12', 'approved', '0.0820153', '37.6493372', '100'),
(2, 'Patrick Sikolia', '', 'KBQ', '254712345678', 'pat@g.com', '12', 'approved', '', '', ''),
(3, 'pato', '', 'kah', '5263412', 'at@g.com', '12', 'approved', '', '', ''),
(4, 'James', '', 'KBQ', '254712543685', 'j@g.com', '12', 'approved', '', '', ''),
(5, 'Francis', '', 'KAH', '254701234567', 'f@g.com', '12', 'approved', '', '', ''),
(6, 'David', '', 'KBZ', '254712345678', 'd@g.com', '123', 'approved', '', '', ''),
(7, 'Robert', 'Saloon', 'KBJ', '254701987654', 'r@g.com', '123', 'approved', '-1.2531172', '36.6959799', '100'),
(8, 'Bernard Muchangi', 'Lorry', 'KBZ 345H', '+254723563254', 'muchangi@gmail.com', '123@4', 'approved', '', '', ''),
(9, 'Benson Kariuki', 'Motorcycle', 'KBZ 536S', '254725123654', 'ben@g.com', '4567', '', '', '', ''),
(10, 'Cetric Sam', 'Lorry', 'KCJ 877X', '254728564328', 'ceto@g.com', '0987', 'approved', '', '', ''),
(11, 'Silas Nyga', 'Saloon', 'KCA 512G', '254724567852', 'nyaga@g.com', '12345', '', '', '', ''),
(12, 'David Kitonde', 'Lorry', 'KCJ 231N', '254702635485', 'fhak', '1234', '', '', '', ''),
(13, 'Brian Munene', 'Motorcycle', 'KCH 768T', '254723452368', 'brian@g.com', '123', '', '', '', ''),
(14, 'Budusi', 'Pickup', 'KCD 342J', '254726584256', 'budusi@g.com', '123', 'approved', '', '', ''),
(15, 'James Kaindio', 'Pickup', 'KBZ 456S', '2547234587517543568965325', 'dhkd', '123', '', '', '', ''),
(16, 'James Mugo', 'Lorry', 'KCD 578H', '2547224853205684523123698', '', '', '', '', '', ''),
(17, '', 'Motorcycle', '', '', '', '', '', '', '', ''),
(18, '', 'Motorcycle', '', '', '', '', '', '', '', ''),
(19, 'Evans Kamau', 'Motorcycle', 'KCFS 435D', '254721365874', 'evank@g.com', '1234', 'approved', '', '', '200'),
(20, 'Naomi Wambui', 'Saloon', 'KCD 453K', '254722412587', 'naomi@g.com', '1234', 'approved', '0.0862385', '37.6488383', '200');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `passenger_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(16) NOT NULL,
  `status` varchar(16) NOT NULL,
  `latitude` varchar(30) NOT NULL,
  `longitude` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`passenger_id`, `name`, `phone_no`, `email`, `password`, `status`, `latitude`, `longitude`) VALUES
(1, 'Patrick', '254712345678', 'pat@g.com', '1234', 'approved', '-1.2590582', '36.7854746'),
(2, 'Kevo', '254712345678', 'kevo@g.com', '123', 'approved', '0.0820153', '37.6493372'),
(3, 'Samuel Mathai', '254701817683', 'mat@g.com', '7777', 'approved', '0.0820153', '37.6493372'),
(4, 'William', 'Maina', 'willy@g.com', '12345', 'approved', '0.0066899', '37.0758911'),
(5, 'Kelvin Koome', '254765789654', 'kev@g.com', '4567', '', '', ''),
(6, '12733&', 'vdsksba', 'gajah2392', '12', 'approved', '', ''),
(7, 'Chris Muguna', 'hsjsirkdks', 'gajah2392', '12', 'Waiting', '', ''),
(8, 'Chris Muguna', '254700213453', '52727', '12', 'Waiting', '', ''),
(9, 'Chris Muguna', '254700213453', 'chris@g.com', '12', 'approved', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`passenger_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `passenger_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
