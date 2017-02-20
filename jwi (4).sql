-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2017 at 07:26 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jwi`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `name`) VALUES
(1, 'qqqqqqqqqqq1');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `img` varchar(100) NOT NULL,
  `thumbnail` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cname`, `status`, `img`, `thumbnail`) VALUES
(5, 'Mechanical', 'Active', 'blog-widget-03.png', 'mech.png'),
(7, 'Electronics/Electrical', 'Active', 'blog-post-02.jpg', 'ele.png'),
(8, 'Computer & IT', '', '', 'com.png'),
(11, 'Civil & Infrastrcture', '', 'civil.png', 'civil.png'),
(12, 'Print', '', 'print.png', 'print.png'),
(13, 'Waste Management', '', '', 'waste.png'),
(14, 'Packaging', '', '', 'package.png'),
(15, 'Pharma', '', '', 'pharma.png');

-- --------------------------------------------------------

--
-- Table structure for table `port`
--

CREATE TABLE IF NOT EXISTS `port` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `subcategory` varchar(100) NOT NULL,
  `repeats` varchar(100) NOT NULL,
  `port` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `rid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `port`
--

INSERT INTO `port` (`id`, `category`, `subcategory`, `repeats`, `port`, `description`, `rid`) VALUES
(1, '7', '', '2', 'q', 'sds', 0),
(2, '7', '2', 'Yes', 'portfolio', 'jasdkljalskd', 11);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `dp` varchar(100) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `bday` date DEFAULT NULL,
  `cname` varchar(100) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `address` varchar(220) DEFAULT NULL,
  `area` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `fb` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `rid`, `dp`, `gender`, `bday`, `cname`, `designation`, `address`, `area`, `website`, `fb`) VALUES
(1, 11, 'blog-widget-01.png', '1', '1996-05-14', 'r1', 'rr', 'rr', '1', 'www.google.com', 'rr11'),
(2, 8, '', '', '0000-00-00', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `token` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `lname`, `email`, `password`, `contact`, `token`, `time`, `status`) VALUES
(3, 'p', 'p', 'piyu@gmail.com', 'ppp', 'p', 1987, '2017-01-08 03:24:23', ''),
(6, 'k', 'k', 'kamal@gmail.com', 'k', '777', 1469, '2017-01-08 03:38:30', ''),
(7, 'p', 'pp', 'payal@gmail.com', 'pp', '890474763', 1182, '2017-01-08 04:56:37', ''),
(8, 'yy', 'yy', 'yy@yy.com', 'y', '7878787878', 1848, '2017-01-08 04:59:15', 'Deactive'),
(11, 'vishal', 'melwani', 'vishal@gmail.com', 'vishal', '789798978', 1079, '2017-01-09 08:55:54', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `req`
--

CREATE TABLE IF NOT EXISTS `req` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(220) NOT NULL,
  `img` varchar(100) NOT NULL,
  `location` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL,
  `subcategory` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `repeats` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `tags` varchar(220) NOT NULL,
  `transpot` varchar(100) NOT NULL,
  `budget` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `req`
--

INSERT INTO `req` (`id`, `title`, `description`, `img`, `location`, `category`, `subcategory`, `quantity`, `repeats`, `type`, `tags`, `transpot`, `budget`, `rid`, `status`, `time`) VALUES
(1, 'Turning', 'a', 'Headset-512.png', '1', '2', '2', 2, 1, 0, 'a', '2', 233, 10, 'Active', '2017-01-08 09:55:13');

-- --------------------------------------------------------

--
-- Table structure for table `selcted_saler`
--

CREATE TABLE IF NOT EXISTS `selcted_saler` (
  `id` int(11) NOT NULL,
  `req_id` int(11) NOT NULL,
  `saller_id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selcted_saler`
--

INSERT INTO `selcted_saler` (`id`, `req_id`, `saller_id`, `status`) VALUES
(1, 6, 11, 'Requested');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `id` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `cid` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `thumbnail` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `sname`, `cid`, `status`, `image`, `thumbnail`) VALUES
(1, 'cat1', 5, 'Active', 'resumes-list-avatar-02.png', 'resumes-list-avatar-02.png'),
(2, 'c1', 7, 'Active', 'blog-widget-03.png', 'blog-widget-03.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `port`
--
ALTER TABLE `port`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `req`
--
ALTER TABLE `req`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `selcted_saler`
--
ALTER TABLE `selcted_saler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `port`
--
ALTER TABLE `port`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `req`
--
ALTER TABLE `req`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `selcted_saler`
--
ALTER TABLE `selcted_saler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
