-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 10:27 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `birth_date` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `caption` text,
  `user_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `user_id`, `firstname`, `lastname`, `email`, `password`, `address`, `city`, `state`, `country`, `gender`, `birth_date`, `contact`, `caption`, `user_image`, `created_at`, `updated_at`) VALUES
(85, NULL, 'sanket', 'chidrawar', 'sanketchidrawar@gmail.com', '678', 'rtuy', 'Pune', 'Maharashtra', 'select', 'Male', '2018-10-01', '8983134981', NULL, 'Hydrangeas_-_Copy3.jpg', '2018-09-30 18:30:00', '2018-11-13 00:41:30'),
(2, 1, 'lakhan', 'sdg', 'admin@bltpl.com', '123', 'dfgb', 'Pune', 'Maharashtra', 'India', 'Male', '2018-11-12', '7894561263', NULL, 'Koala6.jpg', '2018-11-13 01:41:43', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_associate`
--

CREATE TABLE `tbl_associate` (
  `associate_id` int(11) NOT NULL,
  `admin_id` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(100) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `birth_date` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `caption` text NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_associate`
--

INSERT INTO `tbl_associate` (`associate_id`, `admin_id`, `firstname`, `lastname`, `email`, `password`, `address`, `city`, `state`, `country`, `gender`, `birth_date`, `contact`, `caption`, `user_image`, `created_at`, `updated_at`) VALUES
(1, 1, 'sayali', 'role', 'sayalirole265@gmail.com', '123', 'AVCDE', 'Pune', 'Maharashtra', 'select', 'Female', '2018-11-01', '5469856235', '', 'Chrysanthemum_-_Copy2.jpg', '2018-11-12 23:41:40', '2018-11-14 19:41:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lead`
--

CREATE TABLE `tbl_lead` (
  `lead_id` int(10) NOT NULL,
  `associate_id` varchar(10) DEFAULT NULL,
  `admin_id` varchar(10) DEFAULT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `address` text,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `birth_date` varchar(255) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lead_track`
--

CREATE TABLE `tbl_lead_track` (
  `track_id` int(11) NOT NULL,
  `lead_id` int(10) NOT NULL,
  `admin_id` varchar(10) DEFAULT NULL,
  `associate_id` int(10) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `priority` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_next_process`
--

CREATE TABLE `tbl_next_process` (
  `next_track_id` int(10) NOT NULL,
  `lead_id` int(10) NOT NULL,
  `admin_id` int(10) DEFAULT NULL,
  `associate_id` int(10) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `priority` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `upcoming_date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(10) NOT NULL,
  `admin_id` int(10) DEFAULT NULL,
  `associate_id` int(11) DEFAULT NULL,
  `firstname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `user_image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `admin_id`, `associate_id`, `firstname`, `password`, `email`, `contact`, `user_image`) VALUES
(1, 85, NULL, 'sanket', '890', 'sanketchidrawar@gmail.com', '8983134981', 'Hydrangeas_-_Copy3.jpg'),
(6, NULL, 1, 'sayali', '12345', 'sayalirole265@gmail.com', '5469856235', 'Chrysanthemum_-_Copy2.jpg'),
(7, 2, NULL, 'lakhan', '123', 'admin@bltpl.com', '7894561263', 'Koala6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_associate`
--
ALTER TABLE `tbl_associate`
  ADD PRIMARY KEY (`associate_id`);

--
-- Indexes for table `tbl_lead`
--
ALTER TABLE `tbl_lead`
  ADD PRIMARY KEY (`lead_id`);

--
-- Indexes for table `tbl_lead_track`
--
ALTER TABLE `tbl_lead_track`
  ADD PRIMARY KEY (`track_id`);

--
-- Indexes for table `tbl_next_process`
--
ALTER TABLE `tbl_next_process`
  ADD PRIMARY KEY (`next_track_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `tbl_associate`
--
ALTER TABLE `tbl_associate`
  MODIFY `associate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_lead`
--
ALTER TABLE `tbl_lead`
  MODIFY `lead_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_lead_track`
--
ALTER TABLE `tbl_lead_track`
  MODIFY `track_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_next_process`
--
ALTER TABLE `tbl_next_process`
  MODIFY `next_track_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
