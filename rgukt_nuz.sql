-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2024 at 12:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rgukt_nuz`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` int(100) NOT NULL,
  `achievementName` varchar(250) NOT NULL,
  `field` varchar(250) NOT NULL,
  `dept` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL,
  `acadYear` int(100) NOT NULL,
  `dateTime` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `achievementName`, `field`, `dept`, `details`, `acadYear`, `dateTime`) VALUES
(1, 'abcd', 'abcd', 'CSE', 'abcde', 0, '2024-02-29 19:32:00.000000'),
(2, 'defg', 'defg', 'CSE', 'abcde', 0, '2024-02-29 19:32:00.000000'),
(3, 'defg', 'defg', 'CSE', 'abcde', 0, '2024-02-29 19:32:00.000000'),
(4, 'abcd', 'abcd', 'CSE', 'vdgfhjkl', 0, '2024-02-28 11:32:00.000000'),
(5, 'abcd', 'abcd', 'CSE', 'vdgfhjkl', 0, '2024-02-28 11:32:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `curriculum`
--

CREATE TABLE `curriculum` (
  `subCode` varchar(500) NOT NULL,
  `subName` varchar(20) DEFAULT NULL,
  `subShortName` varchar(50) NOT NULL,
  `credits` int(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `year` year(4) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `bosAcadYear` year(4) NOT NULL,
  `syllabus` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `curriculum`
--

INSERT INTO `curriculum` (`subCode`, `subName`, `subShortName`, `credits`, `dept`, `year`, `sem`, `type`, `bosAcadYear`, `syllabus`) VALUES
('', '', '', 3, 'cse', '0000', '1', 'core', '2018', ''),
('cse', 'computer', 'c', 3, 'cse', '0000', '1', 'core', '2018', 'computer science and engineering'),
('ewf92', 'ekm', 'nvkm', 3, 'cse', '0000', '1', 'core', '2018', 'ff'),
('kkh', 'd', 'w', 3, 'cse', '0000', '1', 'core', '2018', 's'),
('we', 'fghj', 'rtyu', 3, 'cse', '0000', '1', 'core', '2018', '6vbnm,'),
('weifu', 'lifl', 'lvli', 3, 'cse', '0000', '1', 'core', '2018', 'liwufn');

-- --------------------------------------------------------

--
-- Table structure for table `deptactivity`
--

CREATE TABLE `deptactivity` (
  `activityId` int(100) NOT NULL,
  `activityName` varchar(34) NOT NULL,
  `topic` text NOT NULL,
  `dept` varchar(34) NOT NULL,
  `conductedBy` text NOT NULL,
  `speakers` text NOT NULL,
  `participants` varchar(34) NOT NULL,
  `dateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deptfaculty`
--

CREATE TABLE `deptfaculty` (
  `fId` int(200) NOT NULL,
  `fName` varchar(200) NOT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `ResearchArae` text NOT NULL,
  `subTaught` text NOT NULL,
  `publications` text NOT NULL,
  `workshopConducted` varchar(1000) NOT NULL,
  `dateTime` datetime(6) DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `sno` int(11) NOT NULL,
  `empid` varchar(30) DEFAULT NULL,
  `empname` varchar(30) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`sno`, `empid`, `empname`, `dept`, `designation`, `qualification`) VALUES
(1, '150100', 'chakravarthi ', 'CSE', 'faculty', 'phd'),
(2, '150101', 'kk singh', 'CSE', 'faculty', 'phd'),
(3, '150102', 'jaya krishna', 'ECE', 'officestaff', 'Pursuing Btech'),
(4, '150103', 'mallikarjuna', 'finance', 'incharge', 'php'),
(5, '150104', 'gnana venkat', 'administration', 'incharge', 'ms'),
(6, '150105', 'suresh babu', 'studentwelfare', 'administration', 'ms'),
(7, '150106', 'sampath', 'finance', 'student', 'ms'),
(8, '150107', 'dileep', 'examcell', 'officestaff', 'ms'),
(9, '150108', 'sindhu', 'EE', 'student', 'Pursuing Btech'),
(10, '150109', 'naik', 'CE', 'hod', 'ms'),
(11, '182438', 'Pechetti jaya Sai Tharun', 'MME', 'faculty', 'wed'),
(12, '150110', 'sirisha', 'finance', 'student', 'Pursuing Btech'),
(13, '160100', 'sai', 'administration', 'incharge', 'ms'),
(14, '160101', 'janu', 'administration', 'officestaff', 'Pursuing Btech'),
(15, '160102', 'kiran', 'studentwelfare', 'student', 'Pursuing Btech'),
(16, '160103', 'gayathri', 'studentwelfare', 'officestaff', 'phd'),
(17, '160105', 'sandhya', 'administration', 'incharge', 'ms'),
(18, '160107', 'divya', 'finance', 'student', 'Pursuing Btech'),
(19, '160200', 'kavya', 'administration', 'officestaff', 'phd');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `contents` text NOT NULL,
  `accessType` varchar(50) NOT NULL,
  `dateTime` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `title`, `contents`, `accessType`, `dateTime`) VALUES
(1, 'wedj', 'kjnfe', '0', '2024-02-27 18:41:01'),
(2, 'kks', 'hello', '0', '2024-02-27 18:41:18'),
(3, 'wefjh', 'kjbwef', '0', '2024-02-27 18:50:26'),
(4, 'fkiu', 'wkgjn', '0', '2024-02-27 18:55:04'),
(5, 'wfreg', 'grwg', '0', '2024-02-27 19:50:12'),
(6, 'c', 'dsdc', '1', '2024-02-27 20:02:16'),
(7, 'fwf', 'gwrg', '0', '2024-02-27 20:05:26'),
(8, 'hiii', 'no', '0', '2024-02-27 20:06:40'),
(9, 'ja', 'sr', '0', '2024-02-27 20:06:53'),
(10, 'ghfgh', 'fghj', '0', '2024-02-27 20:33:15'),
(11, 'ghfgh', 'fghj', '0', '2024-02-27 20:33:25'),
(12, 'ghfgh', 'fghj', '0', '2024-02-27 20:33:25'),
(13, 'ghfgh', 'fghj', '0', '2024-02-27 20:33:28'),
(14, 'ghfgh', 'fghj', '0', '2024-02-27 20:33:28'),
(15, 'ghfgh', 'fghj', '0', '2024-02-27 20:33:28'),
(16, '', '', '0', '2024-02-28 11:27:03'),
(17, '', '', '0', '2024-02-28 11:36:49'),
(18, '', '', '0', '2024-02-28 11:36:51');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sno` int(11) NOT NULL,
  `id` varchar(10) NOT NULL,
  `acadYear` varchar(255) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `year` date NOT NULL DEFAULT current_timestamp(),
  `branch` varchar(30) NOT NULL,
  `class` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `pswd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sno`, `id`, `acadYear`, `name`, `year`, `branch`, `class`, `email`, `phone`, `pswd`) VALUES
(1, 'N180385', '2023-24', 'Haritha', '0000-00-00', 'CSE', '1', 'N180385@rguktnuz.ac.in', '1234567890', 'Haritha');

-- --------------------------------------------------------

--
-- Table structure for table `subfacultyallocation`
--

CREATE TABLE `subfacultyallocation` (
  `facultyId` varchar(10) NOT NULL,
  `facultyName` varchar(20) NOT NULL,
  `subCode` varchar(20) NOT NULL,
  `subShortName` varchar(10) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `year` varchar(10) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `acadYear` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sno` int(11) NOT NULL,
  `uid` varchar(30) NOT NULL,
  `uName` varchar(100) NOT NULL,
  `uEmail` varchar(100) NOT NULL,
  `uPsw` varchar(20) NOT NULL,
  `joinedYear` datetime DEFAULT current_timestamp(),
  `updatedProfile` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sno`, `uid`, `uName`, `uEmail`, `uPsw`, `joinedYear`, `updatedProfile`) VALUES
(1, 'o180357', 'poojitha', 'poojithamannava111@gmail.com', 'pooji', '0000-00-00 00:00:00', 0),
(2, 'O180034', 'Adhiti', 'o180034@rguktong.ac.in', 'Officer@034', '0000-00-00 00:00:00', 0),
(3, 'o180182', 'Janu', 'januthota12345@gmail.com', 'janu', '0000-00-00 00:00:00', 0),
(4, 'o180385', 'Haritha', 'okmg@gmail.com', 'Haritha', '0000-00-00 00:00:00', 0),
(5, 'o180660', 'kalyani', 'o180660@rguktong.ac.in', 'kalyani.k', '0000-00-00 00:00:00', 0),
(6, '1', 'havanthi', 'hav@gmail.com', '1234', '0000-00-00 00:00:00', 0),
(7, '11', 'Janusri', 'januthota1234@gmail.com', 'janu', '0000-00-00 00:00:00', 0),
(9, 'o180347', 'pooji', 'sandhya@gmail.com', 'pooji', '0000-00-00 00:00:00', 0),
(10, 'n180357', 'jaya', 'n18357@rguktn.ac.in', 'kiki', '0000-00-00 00:00:00', 0),
(11, 'o18004', 'nayani', 'o18004@rguktong.ac.in', 'kiki2', '0000-00-00 00:00:00', 0),
(12, 'o180363', 'srilakshmi', 'o180363@rguktn.ac.in', 'sri123', '0000-00-00 00:00:00', 0),
(13, 's14390', 'latha', 's14390@rgukts.ac.in', 'latha123', '0000-00-00 00:00:00', 0),
(14, '150100', 'chakravarthi ', 'cv@rguktn.ac.in', 'cv', '0000-00-00 00:00:00', 1),
(15, '150101', 'kk singh', 'kksingh@gmail.com', 'kksingh', '0000-00-00 00:00:00', 1),
(16, '150102', 'jaya krishna', 'jayakrishna@gmail.com', 'jayakrishna', '0000-00-00 00:00:00', 1),
(17, '150103', 'mallikarjuna', 'mallikarjuna@gmail.com', 'man', '0000-00-00 00:00:00', 1),
(18, '150104', 'gnana venkat', 'gnana_venkat@gmail.com', 'venkat', '0000-00-00 00:00:00', 1),
(19, '150105', 'suresh babu', 'sureshbabu@gmail.com', 'babu', '0000-00-00 00:00:00', 1),
(20, '150106', 'sampath', 'sampath@gmail.com', 'sampath', '0000-00-00 00:00:00', 1),
(21, '150110', 'sirisha', 'sirisha@gmail.com', 'sirisha', '0000-00-00 00:00:00', 1),
(23, '150107', 'dileep', 'dileep@gmail.com', 'dileep', '0000-00-00 00:00:00', 1),
(24, '150108', 'sindhu', 'sindhu@gmail.com', 'sindhu', '0000-00-00 00:00:00', 1),
(25, '150109', 'naik', 'naik@gmail.com', 'naik', '0000-00-00 00:00:00', 1),
(26, '160100', 'sai', 'saiao@gmail.com', 'sai', '0000-00-00 00:00:00', 1),
(27, '160101', 'janu', 'janufo@gmail.com', 'janu', '0000-00-00 00:00:00', 1),
(28, '160102', 'kiran', 'kiranplacement@gmail.com', 'kiran', '0000-00-00 00:00:00', 1),
(29, '160103', 'gayathri', 'gayathridsw@gmail.com', 'gayathri', '0000-00-00 00:00:00', 1),
(30, '160105', 'sandhya', 'sandhyaincharge@gmail.com', 'sandhya', '0000-00-00 00:00:00', 1),
(31, '160107', 'divya', 'divyahod@gmail.com', 'divya', '0000-00-00 00:00:00', 1),
(32, '160200', 'kavya', 'kavyaao@gmail.com', 'kavya', '0000-00-00 00:00:00', 1),
(33, '7889', 'pooji', 'okmig@gmail.com', 'pooji', '0000-00-00 00:00:00', 0),
(34, '1200', 'pooji', 'poojithamannava1112@gmail.com', 'pooji', '0000-00-00 00:00:00', 0),
(35, '1002', 'poojitha', 'vennelamannava20@gmail.com', 'poojitha', '0000-00-00 00:00:00', 0),
(36, '182436', 'aruntejamenda', 'okji@gmail.com', 'hi', '0000-00-00 00:00:00', 0),
(37, '182437', 'Anjali', 'r180815@rgukttkv.ac.in', 'Anju@123', '0000-00-00 00:00:00', 0),
(38, '182438', 'Pechetti jaya Sai Tharun', 'jaya@gmail.com', 'hi', '2024-03-12 16:46:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userrole`
--

CREATE TABLE `userrole` (
  `tId` int(20) NOT NULL,
  `uId` varchar(20) NOT NULL,
  `uName` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `dateTime` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userrole`
--

INSERT INTO `userrole` (`tId`, `uId`, `uName`, `role`, `dept`, `dateTime`) VALUES
(22, 'o180660', 'kk', 'HOD', 'CSE', '2024-02-28 13:28:39'),
(23, 'o170202', 'gk', 'Students', 'CSE', '2024-02-28 13:29:37'),
(24, 'o180001', 'lc', 'HOD', 'CIVIL', '2024-02-28 13:30:23'),
(25, 'O180082', 'V', 'Students', 'MECH', '2024-02-28 13:33:08'),
(26, 'o180663', 'kalyani', 'Faculty', 'CSE', '2024-02-28 13:51:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curriculum`
--
ALTER TABLE `curriculum`
  ADD PRIMARY KEY (`subCode`);

--
-- Indexes for table `deptactivity`
--
ALTER TABLE `deptactivity`
  ADD PRIMARY KEY (`activityId`);

--
-- Indexes for table `deptfaculty`
--
ALTER TABLE `deptfaculty`
  ADD PRIMARY KEY (`fId`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `subfacultyallocation`
--
ALTER TABLE `subfacultyallocation`
  ADD PRIMARY KEY (`facultyId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `uEmail` (`uEmail`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `userrole`
--
ALTER TABLE `userrole`
  ADD PRIMARY KEY (`tId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `deptactivity`
--
ALTER TABLE `deptactivity`
  MODIFY `activityId` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deptfaculty`
--
ALTER TABLE `deptfaculty`
  MODIFY `fId` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `userrole`
--
ALTER TABLE `userrole`
  MODIFY `tId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
