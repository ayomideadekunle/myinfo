-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 07, 2018 at 03:14 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal`
--
CREATE DATABASE IF NOT EXISTS `personal` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `personal`;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `start` varchar(255) NOT NULL,
  `end` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `institution`, `start`, `end`, `qualification`) VALUES
(1, 'Nawair-ud-deen High School, Nalende Ibadan', '09/04/2007', '05/15/2013', 'SSCE'),
(2, 'The Polytechnic Ibadan', '10/12/2015', '09/21/2017', 'OND');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `start` text NOT NULL,
  `end` text NOT NULL,
  `company` varchar(255) NOT NULL,
  `jobrole` text NOT NULL,
  `responsibility` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `start`, `end`, `company`, `jobrole`, `responsibility`) VALUES
(1, '09/04/2015', '09/04/2016', 'CustoCrypt Technologies', 'Software Developer', 'Develop new user-facing features.\r\nEnsure the technical feasibility of UI/UX designs.\r\nOptimize application for maximum speed and scalability.\r\nImplementation of security and data protection.\r\nDesign and implementation of data storage solutions.'),
(2, '09/04/2016', '09/04/2018', 'FOENET SYSTEMS', 'System Analyst', 'Facilitate the definition of project scope, goals and deliverables.\r\nDefine project tasks and resource requirements..\r\nAssemble and coordinate project staff.\r\nManage project resource budget and allocation.\r\nPlan and schedule project timelines.\r\nTrack project deliverables using appropriate tools.\r\nPresent reports defining project progress, problems and solutions.');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `myinfo`
--

CREATE TABLE `myinfo` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `jobrole` varchar(255) NOT NULL,
  `objective` text NOT NULL,
  `summary` text NOT NULL,
  `experience` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pix` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myinfo`
--

INSERT INTO `myinfo` (`id`, `fullname`, `email`, `age`, `phone`, `website`, `address`, `jobrole`, `objective`, `summary`, `experience`, `password`, `pix`, `cv`) VALUES
(1, 'Raji Waliyu Adekunle', 'mwaliyayomide@gmail.com', '11/06/1996', '+2348128045472', 'http://ayomide.com', 'NW5/142, Omitowoju Nalende, Ibadan', 'Software Developer', 'To work in a professional and progressive organization where my potentials will be maximized.', 'Hard-working web developer with a air for creating elegant solutions in the least amount of time. Passionate about software architecture and cloud computing.', 3, 'ce16fe4978c0682c3ba03d4e99e83fe3', 'uploads/6560_24-08-2018_BeautyPlus_20180120075231_save.jpg', 'uploads/4167_24-08-2018_Raji Waliyu Adekunle - CV.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `cat_id`) VALUES
(1, 'Web Design', 1),
(2, 'UI Design & Developer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `skill_category`
--

CREATE TABLE `skill_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill_category`
--

INSERT INTO `skill_category` (`id`, `name`) VALUES
(1, 'Technical Skills'),
(2, 'Professional Skills');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myinfo`
--
ALTER TABLE `myinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill_category`
--
ALTER TABLE `skill_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `myinfo`
--
ALTER TABLE `myinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skill_category`
--
ALTER TABLE `skill_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
