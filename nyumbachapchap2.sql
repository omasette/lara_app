-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2018 at 12:43 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nyumbachapchap2`
--

-- --------------------------------------------------------

--
-- Table structure for table `landlord_property`
--

CREATE TABLE `landlord_property` (
  `no_of_property` int(255) NOT NULL,
  `Property_Name` varchar(50) NOT NULL,
  `Property_Location` varchar(50) NOT NULL,
  `Property_Description` text NOT NULL,
  `Property_ID` int(25) NOT NULL,
  `property_Rules` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `landlord_property`
--

INSERT INTO `landlord_property` (`no_of_property`, `Property_Name`, `Property_Location`, `Property_Description`, `Property_ID`, `property_Rules`) VALUES
(1, 'Tuishi Apartments', 'Madaraka', 'hagakjcajhjdshdfgjksdfjhadfjkjdsfkjdkfhskdfjhjsd', 0, '1.hghgdjhsgdj');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Name` varchar(50) NOT NULL,
  `contactNo` int(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Email_Address` varchar(50) NOT NULL,
  `usertype_Description` text NOT NULL,
  `user_ID` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `contactNo`, `password`, `Email_Address`, `usertype_Description`, `user_ID`) VALUES
('Waweru Mburu', 787654321, 'WaweruMburu', 'mburu@gmail.com', 'Tenant', 1200),
('winnie Mandela', 712345678, '00000', 'mandela@gmail.com', 'Tenant', 98765),
('David Omasete', 743372122, '123456789', 'Omasetedavid@gmail.com', 'Landlord', 34623710),
('Lynne Nyangon', 789076435, '12345678', 'lynne.nyangon@gmail.com', 'Landlord', 34920623);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `landlord_property`
--
ALTER TABLE `landlord_property`
  ADD PRIMARY KEY (`Property_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
