-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2023 at 11:56 PM
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
-- Database: `grading_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `shortname` varchar(20) NOT NULL,
  `institute` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `shortname`, `institute`) VALUES
(1, 'Bachelor of Science in Information Technology', 'BSIT', 'FCDSET'),
(2, 'Bachelor of Science in Civil Engineering', 'BSCE', 'FCDSET'),
(3, 'Bachelor of Science in Criminology', 'BSCRIM', 'FGBM'),
(4, 'Bachelor of Science in Business Administration', 'BSBA', 'FGBM'),
(5, 'Bachelor of Science in Agriculture', 'BSA', 'FALS'),
(6, 'Bachelor of Science in Nursing', 'BSN', 'FNAHS'),
(7, 'BS in Hotel and Restaurant Management', 'BSHRM', 'FGBM'),
(8, 'Bachelor of Industrial Technology Management', 'BITM', 'FCDSET'),
(9, 'Bachelor of Science in Biology', 'BSBIO', 'FALS'),
(10, 'Bachelor of Elementary Education', 'BEE', 'FTED');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `institute` varchar(20) NOT NULL,
  `course` varchar(50) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `id`, `last_name`, `first_name`, `middle_name`, `date_of_birth`, `gender`, `institute`, `course`, `contact_number`, `password`) VALUES
('2023-0001', 12, 'Burnea', 'John Paul', 'Manglangit', '2001-10-11', 'Male', 'FCDSET', 'BSIT', '09122922132', 'grade2023'),
('2023-0002', 17, 'Francisco', 'Justine', 'Camilo', '2002-12-28', 'Male', 'FCDSET', 'BSIT', '09150522603', 'grade2023'),
('2023-0003', 19, 'Belbelone', 'bonjovie', 'abunda', '3213-12-12', 'Male', 'FCDSET', 'BSCE', '09123412', 'grade2023');

-- --------------------------------------------------------

--
-- Table structure for table `institutes`
--

CREATE TABLE `institutes` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `shortname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `institutes`
--

INSERT INTO `institutes` (`id`, `name`, `shortname`) VALUES
(1, 'Faculty of Data Science Computing Engineering and ', 'FCDSET'),
(2, 'Faculty of Agriculture and Life Sciences', 'FALS'),
(3, 'Faculty of Teachers Education', 'FTED'),
(4, 'Faculty of Governance and Business Management', 'FGBM'),
(5, 'Faculty of Nursing and Allied Health Sciences', 'FNAHS');

-- --------------------------------------------------------

--
-- Table structure for table `schoolyear`
--

CREATE TABLE `schoolyear` (
  `id` int(11) NOT NULL,
  `school_year` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `isActive` enum('Active','Inactive','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schoolyear`
--

INSERT INTO `schoolyear` (`id`, `school_year`, `semester`, `isActive`) VALUES
(2, '2023-2024', '1st Semester', 'Inactive'),
(3, '2023-2024', '2nd Semester', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `home_address` varchar(255) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `municipality` varchar(50) DEFAULT NULL,
  `barangay` varchar(50) DEFAULT NULL,
  `purok` varchar(50) DEFAULT NULL,
  `zip_code` varchar(10) DEFAULT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `institute` varchar(20) DEFAULT NULL,
  `course` varchar(50) DEFAULT NULL,
  `emergency_contact_name` varchar(100) DEFAULT NULL,
  `emergency_contact_number` varchar(20) DEFAULT NULL,
  `emergency_contact_address` varchar(255) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `last_name`, `first_name`, `middle_name`, `date_of_birth`, `gender`, `home_address`, `province`, `municipality`, `barangay`, `purok`, `zip_code`, `contact_number`, `institute`, `course`, `emergency_contact_name`, `emergency_contact_number`, `emergency_contact_address`, `password`) VALUES
(1, '2021-1580', 'Francisco', 'Justine', 'Camilo', '2002-12-28', 'male', 'Upper Tagawisan', 'Davao Oriental', 'City of Mati', 'Badas', 'Purok-3', '8200', '09150522603', 'FCDSET', 'BSIT', 'Kayes Francisco', '09566771093', 'Upper Tagawisan', 'grade2023');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `unit` int(11) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `code`, `description`, `unit`, `type`) VALUES
(1, 'ITP 132', 'Advance Database', 3, 'Lecture'),
(2, 'ITPE 130', 'Integrative Programming', 3, 'Lecture'),
(3, 'ITP 131', 'Networking 2', 3, 'Lecture'),
(4, 'ITBAN', 'Fundamentals of BA', 3, 'Lecture');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `institute_fk` (`institute`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`),
  ADD KEY `institute` (`institute`,`course`);

--
-- Indexes for table `institutes`
--
ALTER TABLE `institutes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shortname` (`shortname`);

--
-- Indexes for table `schoolyear`
--
ALTER TABLE `schoolyear`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `institutes`
--
ALTER TABLE `institutes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `schoolyear`
--
ALTER TABLE `schoolyear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `institute_fk` FOREIGN KEY (`institute`) REFERENCES `institutes` (`shortname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
