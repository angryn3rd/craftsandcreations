-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 13, 2018 at 04:03 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `craftsandcreations`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerinfo`
--

CREATE TABLE `customerinfo` (
  `serial` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pin` int(255) NOT NULL,
  `sex` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerinfo`
--

INSERT INTO `customerinfo` (`serial`, `name`, `address`, `email`, `phone`, `password`, `city`, `state`, `pin`, `sex`) VALUES
(2, 'Nishant Saikia', 'Garmur , JEC', 'nsaikia@gmail.com', 2147483647, 'kgshfowej', 'Jorhat', 'Assam', 785001, 'male'),
(3, 'Satyajeet Hazarika', 'Hostel 8', 'satyajeet.hazarika@gmail.com', 912345979, 'alkfal1093', 'Golaghat', 'Assam', 796821, 'male'),
(4, 'Uddipta Ranjan Kakoty', 'Dispur ', 'uddiptaranjan@rocketmail.com', 2147483647, 'sfafh', 'Dibrugarh', 'Assam', 0, 'male'),
(5, 'av', 'aa', 'a@gmail.com', 78, 'qwerty', 'Jorhat', 'Assam', 456, 'male'),
(6, 'the Admin', 'Dibrugarh', 'angshumansonowal09@gmail.com', 2147483647, '647', 'Dibrugarh', 'Assam', 786001, 'male'),
(7, 'Angshuman Sonowal', 'Boiragimoth Kachari Gaon', 'angshumansonowal09@gmail.com', 2147483647, '5432', 'city', 'state', 786001, 'male'),
(8, 'Nishant Saikia', 'near NRL Petrol Pump', 'nsaikia@gmail.com', 879879422, '647', 'Golaghat', 'Assam', 786458, 'male'),
(9, 'abc', 'xyz', '123@gmail.com', 586888668, '5432', 'Dibrugarh', 'Assam', 786001, 'male'),
(10, 'Abijit Nath', 'Hostel 7', 'kjhkSDH@gmail.com', 98665156, '647', 'Jorhat', 'Assam', 785001, 'male'),
(11, 'vfsdb', 'Hostel 7', 'makhdoom@gmail.com', 432535, '2343', 'Guwahati', 'Assam', 767676, 'male');

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `ID` int(3) NOT NULL,
  `USER` varchar(49) NOT NULL,
  `PASS` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`ID`, `USER`, `PASS`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `productsinfo`
--

CREATE TABLE `productsinfo` (
  `SKU` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `photo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username1` varchar(20) NOT NULL,
  `username2` varchar(20) NOT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username1`, `username2`, `gender`, `email`, `phone`) VALUES
(15, '', 'kjhkshdf', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerinfo`
--
ALTER TABLE `customerinfo`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `productsinfo`
--
ALTER TABLE `productsinfo`
  ADD PRIMARY KEY (`SKU`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerinfo`
--
ALTER TABLE `customerinfo`
  MODIFY `serial` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
