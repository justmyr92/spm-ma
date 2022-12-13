-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 01:40 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spm-ma`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account_table`
--

CREATE TABLE `admin_account_table` (
  `ADMIN_ID` varchar(10) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_account_table`
--

INSERT INTO `admin_account_table` (`ADMIN_ID`, `PASSWORD`) VALUES
('BSU-Admin', 'fb5268f9b65649ddcb02ccbae889bc85');

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `ADMIN_ID` varchar(10) NOT NULL,
  `FIRSTNAME` varchar(20) NOT NULL,
  `LASTNAME` varchar(20) NOT NULL,
  `BIRTHDATE` date NOT NULL,
  `AGE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`ADMIN_ID`, `FIRSTNAME`, `LASTNAME`, `BIRTHDATE`, `AGE`) VALUES
('BSU-Admin', 'Charlene Gale', 'Largado', '2002-10-01', 20);

-- --------------------------------------------------------

--
-- Table structure for table `student_account_table`
--

CREATE TABLE `student_account_table` (
  `SR_CODE` varchar(10) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_account_table`
--

INSERT INTO `student_account_table` (`SR_CODE`, `PASSWORD`) VALUES
('20-43622', '04ab15af63f9e493d8485c8b9870e34e'),
('20-46297', 'c48ef47e38a8001df49e1ad1be64b2e1'),
('20-45925', '9ad122d49e28a8085daf8601dba3be53'),
('20-40996', '9cc19dca65c5fea6a260483129292e04'),
('20-57844', 'c185bc5596a55efd52d27d6315a996a4'),
('20-47776', '50975aab3e48dce91bf4bb77ee969a44'),
('20-40701', 'b4bb239e616b24e1ff46e3d6fb6cb97f'),
('20-43723', '683d8d7e0ab09abb96d7f6c3d95fcb38'),
('20-47239', '59e86a1196e6bbaf6ec6df215e29d3f1'),
(' 20-40071', 'a9850c10d0e5e5ca857d5e6f6fb81257'),
('22-45051', '782c415b306e6872eb1a20266a7e3499'),
('21-40847', '6c3f3c4def7eb4d2d79a791802e11f32'),
('22-40889', 'e287c5788860f9c62a8b59a1864bae42'),
('22-42704', '093ba60f6992d071670be9cff9208ca6'),
('21-49736', 'd4fac38551152c1de3d46bfa3b04fc3e'),
('22-49981', 'd2cb2300dac10ddb23002ba06b39763f'),
('22-48908', '27e85cc0ab6f24804c61c217e51da63d'),
('20-42082', 'a2330f2d8edbaf4252483f04e9150e38'),
('20-43715', '0ff06bdfd174f286003079d637e53d40'),
('20-45394', '8c752d926a181ab8506d5e337cc42a8b'),
('20-42649', 'b24bbfb876efc2378acb4ee99dd37517');

-- --------------------------------------------------------

--
-- Table structure for table `student_attendance`
--

CREATE TABLE `student_attendance` (
  `SR_CODE` varchar(10) NOT NULL,
  `DATE` date NOT NULL,
  `STATUS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_feedback_table`
--

CREATE TABLE `student_feedback_table` (
  `FEEDBACK_ID` varchar(10) NOT NULL,
  `SR_CODE` varchar(10) NOT NULL,
  `FEEDBACK` varchar(500) NOT NULL,
  `DATE` date NOT NULL,
  `SUBJECT` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_feedback_table`
--

INSERT INTO `student_feedback_table` (`FEEDBACK_ID`, `SR_CODE`, `FEEDBACK`, `DATE`, `SUBJECT`) VALUES
('FID7929273', '20-45394', 'Good day! I just want to clarify that on December 09, 2022. I attend my course \"Systems Administration and Maintenance\" and \"System Integration and Architecture\" and I was present of that day. Sorry for the inconvenience, thank you and have a nice day ahead.', '2022-12-10', 'Attendance request');

-- --------------------------------------------------------

--
-- Table structure for table `student_performance_table`
--

CREATE TABLE `student_performance_table` (
  `SR_CODE` varchar(10) NOT NULL,
  `YEAR_LEVEL` varchar(15) NOT NULL,
  `SEM` varchar(15) NOT NULL,
  `GWA` decimal(10,2) NOT NULL,
  `CERTIFICATE` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_performance_table`
--

INSERT INTO `student_performance_table` (`SR_CODE`, `YEAR_LEVEL`, `SEM`, `GWA`, `CERTIFICATE`) VALUES
('20-43622', '2nd Year', '2nd Semester', '2.75', '63945efd961e9.jpg'),
('20-43715', '2nd Year', '2nd Semester', '3.00', '63945f209b800.jpg'),
('20-46297', '2nd Year', '2nd Semester', '3.00', '63945f5978391.jpg'),
('20-40996', '2nd Year', '2nd Semester', '3.00', '63945f6f632dc.jpg'),
('20-45394', '2nd Year', '2nd Semester', '1.80', '639462c617847.png'),
('20-42082', '2nd Year', '2nd Semester', '3.21', '63946c504eb48.jpg'),
('21-49736', '1st Year', '2nd Semester', '0.00', '63946c92013a5.jpg'),
('20-40701', '2nd Year', '2nd Semester', '1.75', '639561d41d738.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `SR_CODE` varchar(10) NOT NULL,
  `FIRSTNAME` varchar(20) NOT NULL,
  `LASTNAME` varchar(20) NOT NULL,
  `BIRTHDATE` date NOT NULL,
  `AGE` int(11) NOT NULL,
  `SEX` varchar(10) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `CONTACT_NO` varchar(20) NOT NULL,
  `YEAR_LEVEL` varchar(15) NOT NULL,
  `SEM` varchar(15) NOT NULL,
  `SECTION` varchar(15) NOT NULL,
  `COURSE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`SR_CODE`, `FIRSTNAME`, `LASTNAME`, `BIRTHDATE`, `AGE`, `SEX`, `ADDRESS`, `CONTACT_NO`, `YEAR_LEVEL`, `SEM`, `SECTION`, `COURSE`) VALUES
(' 20-40071', 'Allysa Jasmine', 'Abanilla', '2002-01-18', 20, 'Female', 'Pulong Balibaguhan, Mabini, Batangas ', '09516408233', '3rd Year', '1st Semester', 'DEVCOM-3101', 'BS Development Communication'),
('20-40701', 'Vierra Jane', 'Morales', '1999-04-02', 23, 'Female', 'San Francisco, Mabini, Batangas', '09502396262', '3rd Year', '1st Semester', 'DEVCOM-3101', 'BS Development Communication'),
('20-40996', 'Arlyn ', 'Narzoles', '2002-01-09', 20, 'Female', 'San Francisco, Mabini, Batangas ', '09207705030', '3rd Year', '1st Semester', 'IT-3101', 'BS Information Technology'),
('20-42082', 'Erirose', 'Lorenzo', '2002-01-01', 20, 'Female', 'Muzon, San Luis, Batangas ', '09123456789', '3rd Year', '1st Semester', 'DEVCOM-3101', 'BS Development Communication'),
('20-42649', 'Charlene Gale', 'Largado', '2002-10-01', 20, 'Female', 'San Pedro, Bauan, Batangas', '09155437979', '3rd Year', '1st Semester', 'IT-3101', 'BS Information Technology'),
('20-43622', 'Princes Eva', 'Ilagan', '2002-10-18', 20, 'Female', 'Poblacion Mabini Batangas', '09153553096', '3rd Year', '1st Semester', 'IT-3101', 'BS Information Technology'),
('20-43715', 'Angelyn', 'Panopio', '2000-05-27', 22, 'Female', 'Pulong Niogan, Mabini, Batangas', '09951713066', '3rd Year', '1st Semester', 'IT-3101', 'BS Information Technology'),
('20-43723', 'Louela', 'Sartin', '2002-07-12', 20, 'Female', 'P.Balibaguhan, Mabini, Batangas', '09380626843', '3rd Year', '1st Semester', 'DEVCOM-3101', 'BS Development Communication'),
('20-45394', 'Ammie Joy', 'Mallada', '2002-06-18', 20, 'Female', 'Calamias, Mabini, Batangas', '09502354399', '3rd Year', '1st Semester', 'IT-3101', 'BS Information Technology'),
('20-45925', 'Raven Jan ', 'Gonda', '2001-12-01', 21, 'Female', 'Sto. Niño, Mabini, Batangas', '09303794285', '3rd Year', '1st Semester', 'MM-3101', 'BS Marketing Management'),
('20-46297', 'Marizchelle ', 'Magtibay', '2002-02-20', 20, 'Female', 'Estrella, Mabini, Batangas ', '09167098047', '3rd Year', '1st Semester', 'IT-3101', 'BS Information Technology'),
('20-47239', 'Cherrylyn ', 'Pergis', '1999-11-03', 23, 'Female', 'Poblacion, Mabini, Batangas', '09511097496', '3rd Year', '1st Semester', 'MM-3101', 'BS Marketing Management'),
('20-47776', 'Maria Cristina', 'Castillo', '2002-11-15', 20, 'Female', 'Saguing, Mabini, Batangas', '09976521274', '4th Year', '1st Semester', 'MM-3101', 'BS Marketing Management'),
('20-57844', 'Maria Cecilia ', 'Claro', '2001-02-21', 21, 'Female', 'Sampaguita, Mabini, Batangas', '09481577229', '3rd Year', '1st Semester', 'MM-3101', 'BS Marketing Management'),
('21-40847', 'Jayvie', ' Mendoza', '2002-03-11', 20, 'Male', 'Bagalangit, Mabini, Batangas', '09318234355', '2nd Year', '1st Semester', 'IT-2101', 'BS Information Technology'),
('21-49736', ' Louien Franco', 'Axalan', '2002-02-28', 20, 'Male', 'P.Niogan, Mabini, Batangas', 'N/A', '2nd Year', '1st Semester', 'IT-2101', 'BS Information Technology'),
('22-40889', 'Rayvins ', 'Mendoza', '2002-07-27', 20, 'Male', 'Pulong Balibaguhan, Mabini, Batangas', '09159550357', '1st Year', '1st Semester', 'IT-1101', 'BS Information Technology'),
('22-42704', 'Baby Michelle', 'Andal', '2004-10-21', 18, 'Female', 'Sampaguita, Mabini, Batangas ', '09951715679', '1st Year', '1st Semester', 'IT-1101', 'BS Information Technology'),
('22-45051', 'Jester', 'Calangi', '1935-11-13', 27, 'Male', 'Pilahan, Mabini, Batangas', ' 09500714638', '1st Year', '1st Semester', 'IT-1101', 'BS Information Technology'),
('22-48908', 'William Cedrick', 'Dechosa', '2003-10-02', 19, 'Male', 'Laurel Mabini Batangas', '09157546922', '1st Year', '1st Semester', 'IT-1101', 'BS Information Technology'),
('22-49981', 'Kent Harvey', 'Alfonso', '2003-12-15', 18, 'Male', 'Malimatoc 1, Mabini Batangas', '09959518736', '1st Year', '1st Semester', 'IT-1101', 'BS Information Technology');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account_table`
--
ALTER TABLE `admin_account_table`
  ADD KEY `ADMIN_ID` (`ADMIN_ID`);

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`ADMIN_ID`);

--
-- Indexes for table `student_account_table`
--
ALTER TABLE `student_account_table`
  ADD KEY `SR_CODE` (`SR_CODE`);

--
-- Indexes for table `student_attendance`
--
ALTER TABLE `student_attendance`
  ADD KEY `SR_CODE` (`SR_CODE`);

--
-- Indexes for table `student_feedback_table`
--
ALTER TABLE `student_feedback_table`
  ADD PRIMARY KEY (`FEEDBACK_ID`),
  ADD KEY `SR_CODE` (`SR_CODE`);

--
-- Indexes for table `student_performance_table`
--
ALTER TABLE `student_performance_table`
  ADD KEY `SR_CODE` (`SR_CODE`);

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`SR_CODE`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_account_table`
--
ALTER TABLE `admin_account_table`
  ADD CONSTRAINT `admin_account_table_ibfk_1` FOREIGN KEY (`ADMIN_ID`) REFERENCES `admin_table` (`ADMIN_ID`);

--
-- Constraints for table `student_account_table`
--
ALTER TABLE `student_account_table`
  ADD CONSTRAINT `student_account_table_ibfk_1` FOREIGN KEY (`SR_CODE`) REFERENCES `student_table` (`SR_CODE`);

--
-- Constraints for table `student_attendance`
--
ALTER TABLE `student_attendance`
  ADD CONSTRAINT `student_attendance_ibfk_1` FOREIGN KEY (`SR_CODE`) REFERENCES `student_table` (`SR_CODE`);

--
-- Constraints for table `student_feedback_table`
--
ALTER TABLE `student_feedback_table`
  ADD CONSTRAINT `student_feedback_table_ibfk_1` FOREIGN KEY (`SR_CODE`) REFERENCES `student_table` (`SR_CODE`);

--
-- Constraints for table `student_performance_table`
--
ALTER TABLE `student_performance_table`
  ADD CONSTRAINT `student_performance_table_ibfk_1` FOREIGN KEY (`SR_CODE`) REFERENCES `student_table` (`SR_CODE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;