-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2018 at 01:07 PM
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
  `state` varchar(20) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
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
(1, NULL, 'sanket', 'chidrawar', 'sanketchidrawar@gmail.com', '678', 'Akurdi,Nanded', 'Pune', 'Maharashtra', 'select', 'Male', '2018-10-01', '8983134981', NULL, 'Desert_-_Copy.jpg', '2018-09-30 18:30:00', '2018-11-26 20:41:24'),
(2, 1, 'rty', 'ert', 'admin@bltpl.com', '123', 'as', 'abcdefg', NULL, NULL, 'Male', '2018-10-30', '1234567890', '3123', 'Desert.jpg', '2018-11-29 20:41:04', '0000-00-00 00:00:00');

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
  `state` varchar(20) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
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
(1, 1, 'sayali', 'role', 'sayalirole265@gmail.com', '123', 'dfgb', 'Pune', NULL, NULL, 'Female', '2018-11-08', '5469856235', '123', 'Tulips.jpg', '2018-11-28 23:41:18', '0000-00-00 00:00:00');

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
  `sales_funnel_status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lead`
--

INSERT INTO `tbl_lead` (`lead_id`, `associate_id`, `admin_id`, `firstname`, `lastname`, `email`, `address`, `city`, `state`, `country`, `gender`, `birth_date`, `contact`, `user_image`, `sales_funnel_status`, `created_at`) VALUES
(1, NULL, '1', 'Kumar', 'Joshi', 'joshi@gmail.com', 'AKURDI PUNE', 'Pune', 'Maharashtra', 'India', 'Male', '2018-10-09', '8985986485', 'demo.jpg', 'Interest', '2018-11-29 00:41:52'),
(2, NULL, '1', 'Sanket', 'Chidrawar', 'sanket@gmail.com', 'Baner Pune', 'Pune', 'Maharashtra', 'India', 'Male', '2018-10-10', '8459632219', 'demo.jpg', 'Awareness', '2018-11-29 00:41:52'),
(3, NULL, '1', 'Sayali', 'Role', 'Sayali@gmail.com', 'Shivaji Nagar', 'Pune', 'Maharashtra', 'India', 'Female', '2018-10-11', '8459632219', 'demo.jpg', 'Awareness', '2018-11-29 00:41:52'),
(4, NULL, '1', 'Lakhan', 'Rathod', 'Lucky@gmail.com', 'Shivaji Nagar', 'Pune', 'Maharashtra', 'India', 'Female', '2018-10-12', '8459632215', 'demo.jpg', 'Evaluation', '2018-11-29 00:41:52'),
(5, NULL, '1', 'Sagar', 'koturwar', 'Sagar@gmail.com', 'Shivaji Nagar', 'Pune', 'Maharashtra', 'India', 'Female', '2018-10-13', '8459632245', 'demo.jpg', 'Purchase', '2018-11-29 00:41:52'),
(6, NULL, '1', 'Suyash', 'bafna', 'Suyash@gmail.com', 'Shivaji Nagar', 'Pune', 'Maharashtra', 'India', 'Female', '2018-10-14', '8459632278', 'demo.jpg', 'Re-Evaluation', '2018-11-29 00:41:52'),
(7, NULL, '1', 'pratiksha', 'aher', 'pratiksh@gmail.com', 'Shivaji Nagar', 'Pune', 'Maharashtra', 'India', 'Female', '2018-10-15', '8459632286', 'demo.jpg', 'Re-Purchase', '2018-11-29 00:41:52'),
(8, NULL, '1', 'kiran', 'waychal', 'kiran@gmail.com', 'Shivaji Nagar', 'Pune', 'Maharashtra', 'India', 'Female', '2018-10-16', '8459632296', 'demo.jpg', 'Awareness', '2018-11-29 00:41:52'),
(9, NULL, '1', 'shubham', 'channawar', 'shubham@gmail.com', 'Shivaji Nagar', 'Pune', 'Maharashtra', 'India', 'Female', '2018-10-17', '8459632275', 'demo.jpg', 'Awareness', '2018-11-29 00:41:52'),
(10, '1', NULL, 'gauri', 'pawar', 'gauri@gmail.com', 'Shivaji Nagar', 'Pune', 'Maharashtra', 'India', 'Female', '2018-10-18', '8459632293', 'demo.jpg', 'Awareness', '2018-11-29 00:41:52'),
(11, '1', NULL, 'sambhav', 'choradia', 'sambhav@gmail.com', 'Shivaji Nagar', 'Pune', 'Maharashtra', 'India', 'Female', '2018-10-19', '8459632225', 'demo.jpg', 'Decision', '2018-11-29 00:41:52');

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
  `task_status` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lead_track`
--

INSERT INTO `tbl_lead_track` (`track_id`, `lead_id`, `admin_id`, `associate_id`, `status`, `priority`, `description`, `task_status`, `created_at`) VALUES
(1, 1, '1', NULL, 'Call', 'High', 'rty', 'completed', '2018-11-30 07:30:00'),
(2, 11, NULL, 1, 'Call', 'High', 'rtyrt', 'completed', '2018-11-30 08:11:24'),
(3, 11, NULL, 1, 'Business Proposal', 'Low', 'tyry', 'completed', '2018-11-30 08:13:56');

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

--
-- Dumping data for table `tbl_next_process`
--

INSERT INTO `tbl_next_process` (`next_track_id`, `lead_id`, `admin_id`, `associate_id`, `status`, `priority`, `description`, `upcoming_date`) VALUES
(1, 1, 1, NULL, 'Appointment', 'Medium', 'rtyrty', '2018-11-30 23:55:00'),
(2, 11, NULL, 1, 'Confirmation', 'Low', 'rtyrty', '2018-11-30 23:00:00');

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
(1, 1, NULL, 'sanket', '1234', 'sanketchidrawar@gmail.com', '8983134981', 'Desert_-_Copy.jpg'),
(2, NULL, 1, 'sayali', '123', 'sayalirole265@gmail.com', '5469856235', 'Tulips.jpg'),
(3, 2, NULL, 'rty', '123', 'admin@bltpl.com', '1234567890', 'Desert.jpg');

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
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_associate`
--
ALTER TABLE `tbl_associate`
  MODIFY `associate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_lead`
--
ALTER TABLE `tbl_lead`
  MODIFY `lead_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_lead_track`
--
ALTER TABLE `tbl_lead_track`
  MODIFY `track_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_next_process`
--
ALTER TABLE `tbl_next_process`
  MODIFY `next_track_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
