-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 27, 2023 at 09:29 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id20142916_miniproject004`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `a_id` int(10) NOT NULL,
  `a_username` varchar(45) NOT NULL,
  `a_pass` varchar(45) NOT NULL,
  `a_level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`a_id`, `a_username`, `a_pass`, `a_level`) VALUES
(1, 'admin', '1234', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cg_no` int(10) NOT NULL,
  `catename` varchar(50) NOT NULL,
  `tharea` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cg_no`, `catename`, `tharea`) VALUES
(1, 'ข้าว', 'กลาง-อีสาน'),
(2, 'เนื้อไก่', 'ทุกภาค'),
(3, 'กระดาษชำระ', 'กลาง'),
(4, 'ขนมขบเคี้ยว', 'กลาง-ตะวันออก');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `c_no` int(11) NOT NULL,
  `S_Name` varchar(100) NOT NULL,
  `S_LastName` varchar(100) NOT NULL,
  `S_Address` varchar(100) NOT NULL,
  `S_SunjectName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`c_no`, `S_Name`, `S_LastName`, `S_Address`, `S_SunjectName`) VALUES
(1, 'พรหมเลิศ', 'วังโพธิ์', 'สมุทรปราการ', 'การงานพื้นฐานอาชีพ'),
(2, 'jakkapan', 'pollajan', 'Yala', 'English'),
(3, 'วรินทร', 'จองอาจหาญ', 'ปทุมธานี', 'สุขศึกษา'),
(4, 'sompong', 'wetchasit', 'chonburi', 'Computer'),
(5, 'ภราดา', 'มณีส่องแสง', 'กรุงเทพ', 'วิทย์-ฟิสิกส์'),
(10, 'จิราณี', 'ผ่องสกุล', 'อุบลราชธานี', 'สุขศึกษา');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `ey_no` int(10) NOT NULL,
  `ey_name` varchar(50) NOT NULL,
  `ey_lastname` varchar(10) NOT NULL,
  `ey_position` varchar(50) NOT NULL,
  `ey_salary` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`ey_no`, `ey_name`, `ey_lastname`, `ey_position`, `ey_salary`) VALUES
(1, 'Rasly', 'Moni', 'บัญชี', '12,500'),
(2, 'อุดมพร', 'สถิตดี', 'การเงิน', '11,500');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `pt_no` int(10) NOT NULL,
  `protypename` varchar(50) NOT NULL,
  `proprice` varchar(10) NOT NULL,
  `proaddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`pt_no`, `protypename`, `proprice`, `proaddress`) VALUES
(13, 'SALZ', '135', 'สมุทรปราการ'),
(14, 'CP', '69', 'นครปฐม'),
(15, 'MAXMO', '69', 'กรุงเทพมหานคร'),
(16, 'เทสโต', '25', 'ปทุมธานี'),
(17, 'Lays', '32', 'Bangkok');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sale`
--

CREATE TABLE `tbl_sale` (
  `sl_no` int(10) NOT NULL,
  `emslname` varchar(50) NOT NULL,
  `dayssale` varchar(10) NOT NULL,
  `sumsale` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sale`
--

INSERT INTO `tbl_sale` (`sl_no`, `emslname`, `dayssale`, `sumsale`) VALUES
(1, 'สุนีย์ จิตรใส', '07-11-2022', '3,799'),
(2, 'สุนีย์ จิตรใส', '07-11-2022', '3,799'),
(3, 'สมฤดี จิตรเที่ยง', '05-08-2022', '3,813');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cg_no`);

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`c_no`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`ey_no`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pt_no`);

--
-- Indexes for table `tbl_sale`
--
ALTER TABLE `tbl_sale`
  ADD PRIMARY KEY (`sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cg_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `c_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `ey_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pt_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_sale`
--
ALTER TABLE `tbl_sale`
  MODIFY `sl_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
