-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 01:57 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `defence`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE `tblcourse` (
  `course_code` varchar(20) NOT NULL,
  `course` varchar(50) NOT NULL,
  `domain_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`course_code`, `course`, `domain_code`) VALUES
('af001', 'Air force Senior Sec', 'af'),
('af002', 'Air Force Group X (Technical) Exam Preparational', 'af'),
('af003', 'Air Force Group Y (Non-Technical) Exam Coaching', 'af'),
('af004', 'Air Force Airmen Selection Exam Prep', 'af'),
('af005', 'Air Force Commissioned Officer Entry Coaching', 'af'),
('af006', 'Air Force Aeronautical Engineering Exam Coaching', 'af'),
('ar001', 'Soldier General Duty (GD) Coaching', 'ar'),
('ar002', 'Technical Entry Scheme (TES) Preparation', 'ar'),
('ar003', 'Combined Defense Services (CDS) Exam Coaching', 'ar'),
('ar004', 'Territorial Army (TA) Exam Preparation', 'ar'),
('ar005', 'Army Clerk Technical (SKT) Exam Prep', 'ar'),
('ar006', 'Army Havildar Education Exam Coaching', 'ar'),
('na001', 'Naval Academy Examination (NDA & NA) Coaching', 'na'),
('na002', 'Sailor Entry Exam Preparation (Artificer Apprentic', 'na'),
('na003', 'Direct Entry Petty Officer Exam Coaching', 'na'),
('na004', 'Indian Navy Tradesman Mate Exam Prep', 'na'),
('na005', 'Navy Dockyard Apprentices Exam Coaching', 'na'),
('na006', 'Naval Armament Inspection Entry Scheme Coaching', 'na');

-- --------------------------------------------------------

--
-- Table structure for table `tbldomain`
--

CREATE TABLE `tbldomain` (
  `domain_code` varchar(20) NOT NULL,
  `domain` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbldomain`
--

INSERT INTO `tbldomain` (`domain_code`, `domain`) VALUES
('af', 'Air Force'),
('ar', 'Army'),
('na', 'Navy');

-- --------------------------------------------------------

--
-- Table structure for table `tblfacreg`
--

CREATE TABLE `tblfacreg` (
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `domain` varchar(20) NOT NULL,
  `tea_mod` varchar(80) NOT NULL,
  `exp` varchar(10) NOT NULL,
  `hd` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `pno` int(13) NOT NULL,
  `age` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblfacreg`
--

INSERT INTO `tblfacreg` (`name`, `email`, `domain`, `tea_mod`, `exp`, `hd`, `gender`, `pno`, `age`) VALUES
('apparao', 'aadvppu@gmailsgs.com	', 'Army', 'Army Clerk and Store Keeper Technical (SKT) Exam Prep', '5', 'M.tech', 'male', 786764, 45),
('lajbdlvj', 'ajkbcb@albdv.com', 'kadvj', 'Naval Armament Inspection Entry Scheme', '44', 'M.phill', 'male', 23, 33),
('dhananjay	', 'dhananjay@jfbo.com', 'Army', 'Air Force Group X', '12', 'M.phill,M.ed', 'male', 3574685, 43),
('dhruva', 'dhruva@jbsdkv.com', 'Navy', 'Combined Defense Services (CDS)', '7', 'B.sc', 'Male', 6964598, 38),
('keerthana', 'keerthana@gmail.com', 'ar', 'Territorial', '10', 'phd', 'female', 8757387, 38),
('kiran	', 'kiran@nownwo.com	', 'Army', 'Army Havildar Education', '7', 'b.trch', 'male', 8978675, 45),
('kumar	', 'kumar@slnb.com', 'Navy', 'Soldier General Duty (GD)', '3', 'm.phill', 'male', 9886384, 32),
('kushbu', 'kushbu@akbduv.com	', 'Air Force', 'Air force Senior Secondary Recruit (SSR)	', '13', 'PHD', 'female', 23424626, 44),
('pranav', 'pranav@qqw.com	', 'Air force', 'Air Force Airmen Selection	', '6', 'M.tech', 'male', 3457453, 34),
('shruthi', 'shruthi@osnos.com	', 'Navy', 'Technical Entry Scheme (TES)', '12', 'M.tech', 'female', 87379459, 42),
('supraja', 'supraja@gmail.comx', 'af', 'Air', '15', 'Phd', 'female', 5839859, 42),
('suraj', 'suraj@gua.com', 'Air Force', 'Air Force Aeronautical Engineering	', '3', 'B.ed', 'male', 3574744, 44);

-- --------------------------------------------------------

--
-- Table structure for table `tblstaff`
--

CREATE TABLE `tblstaff` (
  `domain_code` varchar(10) NOT NULL,
  `staffname` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `tea_mod` varchar(80) NOT NULL,
  `salary` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblstaff`
--

INSERT INTO `tblstaff` (`domain_code`, `staffname`, `email`, `tea_mod`, `salary`) VALUES
('af', 'kishan', 'kishan@ksjdbv.com', 'Air Force Group X (Technical)', '78000/-'),
('af0', 'kushbu', 'kushbu@akbduv.com', 'Air force Senior Secondary Recruit (SSR)', '56000/-'),
('af1', 'pranav', 'pranav@qqw.com', 'Air Force Airmen Selection ', '45000/-'),
('af2', 'suraj', 'suraj@gua.com', 'Air Force Aeronautical Engineering ', '70000/-'),
('ar0', 'apparao', 'aadvppu@gmailsgs.com', 'Army Clerk and Store Keeper Technical (SKT) Exam Prep', '67000/-'),
('ar1', 'kiran', 'kiran@nownwo.com', 'Army Havildar Education ', '55000/-'),
('na0', 'kumar', 'kumar@slnb.com', 'Soldier General Duty (GD) ', '77000/-'),
('na1', 'shruthi', 'shruthi@osnos.com', 'Technical Entry Scheme (TES) ', '65000/-'),
('na2', 'dhruva', 'dhruva@jbsdkv.com', 'Combined Defense Services (CDS) ', '80000/-');

-- --------------------------------------------------------

--
-- Table structure for table `tblstureg`
--

CREATE TABLE `tblstureg` (
  `domain_code` varchar(20) NOT NULL,
  `course_code` varchar(60) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(5) NOT NULL,
  `ip` int(5) NOT NULL,
  `state` text NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblstureg`
--

INSERT INTO `tblstureg` (`domain_code`, `course_code`, `name`, `email`, `age`, `ip`, `state`, `dob`, `gender`, `number`) VALUES
('af', 'Air Force Group X (T', 'sai', '203b1a0438@vsm.edu.in', 17, 0, '', NULL, 'male', 799758784),
('ar', 'Technical Entry Scheme (TES) Preparation', 'asfbsa', 'advadv@asnd.com', 23, 67, 'Karnataka', '2023-10-24', 'male', 24354),
('af', 'Air Force Commissioned Officer Entry Coaching', 'Dananjay', 'dhananjay@gmail.com', 21, 0, '', NULL, 'male', 79837654),
('ar', 'Technical Entry Scheme (TES) Preparation', 'dhanu', 'dhanuj@kdvkiabibsj.com', 21, 67, 'Telangana', '2023-10-16', 'male', 9786756),
('af', 'Air Force Airmen Selection Exam Prep', 'hem chandra', 'hemchandra@gmail.com', 20, 70, 'Telangana', '2003-08-25', 'male', 545893),
('af', 'Direct Entry Petty Officer Exam Coaching', 'kumar', 'kum@kdvksfbsj.com', 21, 67, 'Telangana', '2023-10-16', 'male', 9786756),
('na', 'Naval Academy Examination (NDA & NA) Coaching', 'PICHIKA HEM CHADRA SAI SANTHOSH', 'pichikasaisantosh2003@gmail.com', 21, 0, '', NULL, 'male', 2147483647),
('ar', 'ar', 'apparao', 'pichikasaisantosh@gmail.com', 35, 0, 'telangana', '2023-10-10', 'male', 234567),
('ar', 'Air Force Group X (Technical) Exam Preparational', 'raj', 'raj@kdvkj.com', 21, 67, 'Telangana', '2023-10-16', 'male', 9786756),
('ar', 'Combined Defense Services (CDS) Exam Coaching', 'siva', 'siva@sbsfb.com', 17, 70, 'Andhra Pradesh', '2005-02-08', 'male', 565476);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `level` varchar(10) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`username`, `password`, `level`, `userid`) VALUES
('santosh', 'a29bac723ca2d59ed78a2d715e17e92f', 'admin', 1),
('sai', '1651cf0d2f737d7adeab84d339dbabd3', 'user', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD PRIMARY KEY (`course_code`),
  ADD KEY `fk_proco` (`domain_code`);

--
-- Indexes for table `tbldomain`
--
ALTER TABLE `tbldomain`
  ADD PRIMARY KEY (`domain_code`);

--
-- Indexes for table `tblfacreg`
--
ALTER TABLE `tblfacreg`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `tblstaff`
--
ALTER TABLE `tblstaff`
  ADD PRIMARY KEY (`domain_code`);

--
-- Indexes for table `tblstureg`
--
ALTER TABLE `tblstureg`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD CONSTRAINT `fk_proco` FOREIGN KEY (`domain_code`) REFERENCES `tbldomain` (`domain_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
