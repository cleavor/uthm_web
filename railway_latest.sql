-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2023 at 09:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railway`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `phone`, `pwd`) VALUES
(1, 'admin', 'admin@gmail.com', '0123456789', '$2y$10$vkJHhyzaX971uqqD5Ht9S.uZxQp/kI21XiHHfv.vfBsgW57GsJbDi');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `announcement_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `date_of_release` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`announcement_id`, `subject`, `description`, `date_of_release`) VALUES
(1, 'AAA', 'BBB', '2023-12-28'),
(15, 'CNY Holiday Memo', '11', '2023-12-28'),
(16, 'CNY Holiday Memo', '11', '2023-12-28'),
(17, '111', 'abc', '2023-12-28'),
(18, '111', 'abc', '2023-12-28');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_records`
--

CREATE TABLE `attendance_records` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `position` varchar(255) DEFAULT NULL,
  `attendance` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance_records`
--

INSERT INTO `attendance_records` (`user_id`, `name`, `email`, `position`, `attendance`, `date`) VALUES
(111, 'Eswarie Panjacharam', 'eswarie@gmail.com', 'Manager', 'Present', '2023-11-06'),
(112, 'Alya binti Ahmad', 'alya@gmail.com', 'Staff', 'Present', '2023-09-05'),
(131, 'Lim Kin Leong', 'lim@gmail.com', 'Supervisor', 'Absent', '2022-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `leave_requests`
--

CREATE TABLE `leave_requests` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `date_of_leave` date NOT NULL,
  `leave_reason` varchar(255) DEFAULT NULL,
  `leave_request_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leave_requests`
--

INSERT INTO `leave_requests` (`user_id`, `name`, `position`, `date_of_leave`, `leave_reason`, `leave_request_status`) VALUES
(111, 'Eswarie Panjacharam', 'Manager', '2023-11-20', 'Sick', 'Approved'),
(112, 'Alya binti Ahmad', 'Staff', '2023-12-12', 'Annual Leave', 'Approved'),
(131, 'Lim Kin Leong', 'Supervisor', '2023-12-15', 'Service Car', 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `other_documents`
--

CREATE TABLE `other_documents` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `documents` varchar(255) NOT NULL,
  `date_of_submission` date NOT NULL,
  `document_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `other_documents`
--

INSERT INTO `other_documents` (`user_id`, `name`, `documents`, `date_of_submission`, `document_status`) VALUES
(111, 'Eswarie Panjacharam', 'Insurance Claim Form', '2022-05-21', 'Approved'),
(112, 'Alya binti Ahmad', 'Allowance Form', '2023-02-01', 'Rejected'),
(131, 'Lim Kin Leong', 'Medical Letter', '2023-05-19', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `sickdays_records`
--

CREATE TABLE `sickdays_records` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sickdays_records`
--

INSERT INTO `sickdays_records` (`user_id`, `name`, `position`, `date`) VALUES
(111, 'Eswarie Panjacharam', 'Manager', '2023-11-06'),
(112, 'Alya binti Ahmad', 'Staff', '2023-09-05'),
(131, 'Lim Kin Leong', 'Supervisor', '2022-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `staff_records`
--

CREATE TABLE `staff_records` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `position` varchar(255) DEFAULT NULL,
  `salary` decimal(15,2) NOT NULL,
  `deduction` decimal(15,2) NOT NULL,
  `net_pay` decimal(15,2) NOT NULL,
  `work_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_records`
--

INSERT INTO `staff_records` (`user_id`, `name`, `gender`, `email`, `phone`, `address`, `position`, `salary`, `deduction`, `net_pay`, `work_status`) VALUES
(111, 'Eswarie Panjacharam', 'Female', 'eswarie@gmail.com', '0123456789', 'No. 1572 Psn Sri Kasih, 70540 Seremban, Negeri Sembilan', 'Manager', 5000.00, 400.00, 4600.00, 'Full-Time'),
(112, 'Alya binti Ahmad', 'Female', 'alya@gmail.com', '0387399740', 'No. 70 Jalan Ilian, SGR, 43300 Kajang, Selangor', 'Staff', 3000.00, 100.00, 2900.00, 'Part-Time'),
(113, 'Chai Pei Ying', 'Female', 'chai@gmail.com', '0378756436', 'G 58 Lbh Sekama Kuching, 93300 Kuching, Sarawak', 'Staff', 3000.00, 100.00, 2900.00, 'Inactive'),
(114, 'Nurul Natasha', 'Female', 'natasha@gmail.com', '0378756436', '2 Blok B1 Jln Rama Pusat Dagang, 47300 Petaling Jaya, Selangor', 'Staff', 3000.00, 100.00, 2900.00, 'Inactive'),
(115, 'Nur Syazwani', 'Female', 'syaz@gmail.com', '0377286399', '7 Lrg Aminuddin, 60000 Kuala Lumpur, Wilayah Persekutuan', 'Staff', 3000.00, 100.00, 2900.00, 'Seosonal'),
(116, 'Nik Ahmad Ashraf', 'Male', 'ashraf@gmail.com', '0189217360', '50, Jalan 3, 88000 Kota Kinabalu, Sabah', 'Staff', 3000.00, 100.00, 2900.00, 'Full-Time'),
(117, 'Jonathan Terandung', 'Male', 'jonathan@gmail.com', '0172239999', '106N Jln Trus, 80000 Johor Bahru, Johor', 'Staff', 3000.00, 100.00, 2900.00, 'Full-Time'),
(131, 'Lim Kin Leong', 'Male', 'lim@gmail.com', '0332904819', '2A 1St Floor Jln 5 Batur, 41400 Klang, Selangor', 'Supervisor', 8000.00, 300.00, 7700.00, 'Full-Time'),
(180, 'aaa', 'Male', 'aaa@gmail.com', '0123456543', 'aaa, jalan aaa, kuala lumpur', 'Staff', 3000.00, 100.00, 2900.00, 'Part-time');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `attendance_records`
--
ALTER TABLE `attendance_records`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `leave_requests`
--
ALTER TABLE `leave_requests`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `other_documents`
--
ALTER TABLE `other_documents`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `sickdays_records`
--
ALTER TABLE `sickdays_records`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `staff_records`
--
ALTER TABLE `staff_records`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `announcement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
