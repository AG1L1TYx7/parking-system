-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2019 at 02:48 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carparking_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `id` int(11) NOT NULL,
  `areaid` varchar(255) NOT NULL,
  `slotid` varchar(255) NOT NULL,
  `carno` varchar(255) NOT NULL,
  `entrydate` varchar(25) NOT NULL,
  `entrytime` varchar(25) NOT NULL,
  `exitdate` varchar(25) NOT NULL,
  `exittime` varchar(25) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`id`, `areaid`, `slotid`, `carno`, `entrydate`, `entrytime`, `exitdate`, `exittime`, `userid`, `status`) VALUES
(4, '1', '3', '1464874', '4', '4055', '1233', '1233', 1, 0),
(2, '2', '2', 'ba ka 1 6464', '06/13/2019', '3:00am', '06/25/2019', '01:00 pm', 2, 0),
(5, '1', '1', 'FFF 222', '06/26/2019', '10:57AM', '06/26/2019', '10:59AM', 1, 0),
(6, '1', '1', 'FFF 222', '06/26/2019', '10:57AM', '06/26/2019', '10:59AM', 1, 0),
(7, '1', '1', 'FFF 222', '06/26/2019', '10:57AM', '06/26/2019', '11AM', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_parkingareas`
--

CREATE TABLE `tbl_parkingareas` (
  `id` int(11) NOT NULL,
  `sort1` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_des` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_parkingareas`
--

INSERT INTO `tbl_parkingareas` (`id`, `sort1`, `title`, `image`, `short_des`, `description`, `status`) VALUES
(1, 2, 'CHITWAN', '1561489009064328om-campus-chabahil(1).jpg', '', '%3Cp%3E%0D%0A%09This+shopping+mall+is+located+in+the+heart+of+CHITWAN+and+one+of+the+busiest+shopping+malls+in+the+country.+It+is+a+mainly+a+thirty-six-floor+hotel+consisting+five+stories+for+shopping+area+and+rest+of+twenty-three+for+residential+and+office+purpose.%3C%2Fp%3E%0D%0A', 1),
(2, 1, 'DILLIBAZAR', '15614889851 (1).jpg', '', '%3Cp%3E%0D%0A%09This+is+situated+in+heart+of+dillibazar.+In+softwarica+college+of+IT+and+E-commerce.+in+block+E+which+is+the+recently+build+building%3C%2Fp%3E%0D%0A', 1),
(3, 3, 'KALANKI', '148438018933.jpg', '', '%3Cp%3E%0D%0A%09mall+of+kalanki+is+one+of+the+largest+multi-purpose+shopping+malls+in+the+countries+consisting+a+broad+range+of+local+and+international+brands.+It+is+one+of+the+largest+shopping+malls+in+the+country.%3C%2Fp%3E%0D%0A', 1),
(4, 4, 'NEW ROAD', '148438023344.jpg', '', '%3Cp%3E%0D%0A%09located+in+heart+of+Newroad%3C%2Fp%3E%0D%0A', 1),
(11, 1, 'CHAKRAPATH', '148438007711.jpg', '', '%3Cp%3E%0D%0A%09This+shopping+mall+is+located+in+the+heart+of+chakrapath+and+one+of+the+busiest+shopping+malls+in+the+country.+It+is+a+mainly+a+thirty-six-floor+hotel+consisting+five+stories+for+shopping+area+and+rest+of+twenty-three+for+residential+and+office+purpose.%3C%2Fp%3E%0D%0A', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(11) NOT NULL,
  `orderid` varchar(255) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cardno` varchar(255) NOT NULL,
  `expirydate` varchar(25) NOT NULL,
  `csc` varchar(25) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`id`, `orderid`, `amount`, `name`, `cardno`, `expirydate`, `csc`, `userid`, `status`) VALUES
(6, '1', '100', 'bshwo890', '332', '06/19/2019', 'dsds', 1, 1),
(7, '3', '100', 'bishworup', '5454', '06/20/2019', '4444', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `sort1` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_des` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `sort1`, `title`, `image`, `short_des`, `description`, `status`) VALUES
(1, 1, 'image', '148328725311.jpg', '', '', 1),
(2, 2, 'image2', '148328729122.jpg', '', '', 1),
(3, 3, 'sdsd', '148328731233.jpg', '', '', 1),
(4, 4, 'ddfd', '14832875194444.jpg', '', '', 1),
(5, 5, 'dfdfd', '148328735355.jpg', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slots`
--

CREATE TABLE `tbl_slots` (
  `id` int(11) NOT NULL,
  `slotid` varchar(255) NOT NULL,
  `areaid` varchar(255) NOT NULL,
  `exitdate` varchar(255) NOT NULL,
  `exittime` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slots`
--

INSERT INTO `tbl_slots` (`id`, `slotid`, `areaid`, `exitdate`, `exittime`, `status`) VALUES
(1, '1', '1', '06/26/2019', '11AM', 0),
(2, '2', '1', '03/24/2017', '01:00 PM', 0),
(3, '1', '2', '', '', 0),
(4, '2', '2', '06/25/2019', '01:00 pm', 0),
(5, '3', '1', '1233', '1233', 1),
(6, '4', '1', '06/30/2019', '18:00', 1),
(7, '5', '1', '', '', 0),
(8, '6', '1', '', '', 0),
(9, '7', '1', '06/28/2019', '20:00', 1),
(10, '8', '1', '', '', 0),
(11, '9', '1', '07/01/2019', '56:00', 1),
(12, '10', '1', '', '', 0),
(13, '11', '1', '', '', 0),
(14, '12', '1', '', '', 0),
(15, '13', '1', '', '', 0),
(16, '14', '1', '', '', 0),
(17, '15', '1', '', '', 0),
(18, '16', '1', '', '', 0),
(19, '17', '1', '', '', 0),
(20, '18', '1', '', '', 0),
(21, '19', '1', '', '', 0),
(22, '20', '1', '', '', 0),
(23, '21', '1', '', '', 0),
(24, '22', '1', '', '', 0),
(25, '23', '1', '', '', 0),
(26, '24', '1', '', '', 0),
(27, '1', '3', '', '', 0),
(28, '3', '2', '', '', 0),
(29, '4', '2', '', '', 0),
(30, '5', '2', '06/27/2019', '01:00 pm', 0),
(31, '6', '2', '06/26/2019', '4:00am', 0),
(32, '7', '2', '', '', 0),
(33, '8', '2', '', '', 0),
(34, '9', '2', '', '', 0),
(35, '10', '2', '', '', 0),
(36, '11', '2', '', '', 0),
(37, '12', '2', '', '', 0),
(38, '13', '2', '', '', 0),
(39, '14', '2', '', '', 0),
(40, '15', '2', '', '', 0),
(41, '16', '2', '', '', 0),
(42, '17', '2', '', '', 0),
(43, '18', '2', '', '', 0),
(44, '19', '2', '', '', 0),
(45, '20', '2', '', '', 0),
(46, '21', '2', '', '', 0),
(47, '22', '2', '', '', 0),
(48, '23', '2', '', '', 0),
(49, '24', '2', '', '', 0),
(50, '2', '3', '', '', 0),
(51, '3', '3', '', '', 0),
(52, '4', '3', '', '', 0),
(53, '5', '3', '', '', 0),
(54, '6', '3', '', '', 0),
(55, '7', '3', '', '', 0),
(56, '8', '3', '', '', 0),
(57, '9', '3', '', '', 0),
(58, '10', '3', '', '', 0),
(59, '11', '3', '', '', 0),
(60, '12', '3', '', '', 0),
(61, '13', '3', '', '', 0),
(62, '14', '3', '', '', 0),
(63, '15', '3', '', '', 0),
(64, '16', '3', '', '', 0),
(65, '17', '3', '', '', 0),
(66, '18', '3', '', '', 0),
(67, '19', '3', '', '', 0),
(68, '20', '3', '', '', 0),
(69, '21', '3', '', '', 0),
(70, '22', '3', '', '', 0),
(71, '23', '3', '', '', 0),
(72, '24', '3', '', '', 0),
(73, '1', '4', '', '', 0),
(74, '2', '4', '', '', 0),
(75, '3', '4', '', '', 0),
(76, '4', '4', '', '', 0),
(77, '5', '4', '', '', 0),
(78, '6', '4', '', '', 0),
(79, '7', '4', '', '', 0),
(80, '8', '4', '', '', 0),
(81, '9', '4', '', '', 0),
(82, '10', '4', '', '', 0),
(83, '11', '4', '', '', 0),
(84, '12', '4', '', '', 0),
(85, '13', '4', '', '', 0),
(86, '14', '4', '', '', 0),
(87, '15', '4', '', '', 0),
(88, '16', '4', '', '', 0),
(89, '17', '4', '', '', 0),
(90, '18', '4', '', '', 0),
(91, '19', '4', '', '', 0),
(92, '20', '4', '', '', 0),
(93, '21', '4', '', '', 0),
(94, '22', '4', '', '', 0),
(95, '23', '4', '', '', 0),
(96, '24', '4', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `fname`, `lname`, `telephone`, `confirm_password`, `password`, `email`, `address`, `status`) VALUES
(1, 'bishworup', 'adhikari', '9849010697', '123', '12345', 'bshwo890@gmail.com', 'Sukedhara', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_parkingareas`
--
ALTER TABLE `tbl_parkingareas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slots`
--
ALTER TABLE `tbl_slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_parkingareas`
--
ALTER TABLE `tbl_parkingareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_slots`
--
ALTER TABLE `tbl_slots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
