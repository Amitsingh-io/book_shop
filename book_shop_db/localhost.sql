-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 27, 2020 at 03:55 AM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_shop2020`
--
CREATE DATABASE IF NOT EXISTS `book_shop2020` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `book_shop2020`;

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `admin_id` varchar(15) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `admin_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`admin_id`, `password`, `admin_name`) VALUES
('9852551149', '1234', 'Chandan Gupta');

-- --------------------------------------------------------

--
-- Table structure for table `bookshop_master`
--

CREATE TABLE `bookshop_master` (
  `P_code` bigint(20) NOT NULL,
  `P_name` varchar(50) DEFAULT NULL,
  `P_publication` varchar(30) DEFAULT NULL,
  `P_author` varchar(30) DEFAULT NULL,
  `P_language` varchar(20) DEFAULT NULL,
  `P_edition` varchar(10) DEFAULT NULL,
  `P_isbn` varchar(15) DEFAULT NULL,
  `P_year` varchar(10) DEFAULT NULL,
  `P_month` varchar(15) DEFAULT NULL,
  `P_binding` varchar(15) DEFAULT NULL,
  `P_sub` varchar(20) DEFAULT NULL,
  `P_class` varchar(20) DEFAULT NULL,
  `P_price` varchar(10) DEFAULT NULL,
  `P_image` varchar(50) DEFAULT NULL,
  `P_cat_type` varchar(25) DEFAULT NULL,
  `P_current_stock` varchar(10) DEFAULT NULL,
  `pdate` date DEFAULT NULL,
  `off` varchar(4) DEFAULT NULL,
  `prack` varchar(10) DEFAULT NULL,
  `prow` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookshop_master`
--

INSERT INTO `bookshop_master` (`P_code`, `P_name`, `P_publication`, `P_author`, `P_language`, `P_edition`, `P_isbn`, `P_year`, `P_month`, `P_binding`, `P_sub`, `P_class`, `P_price`, `P_image`, `P_cat_type`, `P_current_stock`, `pdate`, `off`, `prack`, `prow`) VALUES
(5, 'Pratiyogita Darpan', 'PDGroup', 'PD Group', 'Hindi', '1', '9770974639001', '2020', 'December', 'Paper Back', 'Competitive', '', '80', 'pd_dec_2020.jpg', 'Monthly Magazine', '10', '2020-11-14', '30', NULL, NULL),
(6, 'Yojna', 'Govt', 'Govt', 'Hindi', '1', 'issn-0971-8400', '2020', 'November', 'Paper Back', 'Competitive', '', '30', 'yojana hindi.jpg', 'Monthly Magazine', '10', '2020-11-14', '0', NULL, NULL),
(7, 'Yojna', 'Gov', 'Govt', 'English', '1', '1234567809', '2020', 'November', 'Paper Back', 'Competitive', '', '30', 'Yojana Eng.jpg', 'Monthly Magazine', '10', '2020-11-15', '0', NULL, NULL),
(8, 'Champak', 'Champak', 'Champak Hin', 'Hindi', '1', '1234567809', '2020', 'November', 'Paper Back', 'Child Magazine', '', '30', 'chmpak 2020.jpg', 'Monthly Magazine', '10', '2020-11-24', '0', '0', '0'),
(9, 'Champak Eng', 'Champak', 'Delhi Press', 'English', '1', '1234567809', '2020', 'November', 'Paper Back', 'Child Magazine', '', '35', 'ch eng 2020.jpg', 'Monthly Magazine', '10', '2020-11-24', '20', '', ''),
(10, 'Competition Success', 'Com success', 'Amit Singh', 'English', '11', '9876543201', '2020', 'October', 'Paper Back', '', '', '50', 'competitionsuccess.jpg', 'Monthly Magazine', '10', '2020-10-30', '5', NULL, NULL),
(12, 'Object-Oriented programming with C++ ', 'McGraw Hill', 'E Balagurusamy', 'English', '8', '1234567809', '2020', 'October', 'Paper Back', '', '', '599', 'object oriented programing with C++.jpg', 'Monthly Magazine', '8', '2020-11-16', '10', NULL, NULL),
(13, 'one Life One Chance', ' Motivational', 'Antonio Robins', 'English', '2005', '1230544689', '2005', 'November', 'Paper Back', '', '', '999', 'one life one chance.jpg', 'Motivational', '10', '2020-11-10', '0', NULL, NULL),
(14, 'The Magic Of Believing', ' Motivational', 'Glaude Bristoc', 'English', '2005', '1230544689', '2005', '', 'Paper Back', '', '', '899', 'The Magic of Believing.jpg', 'Motivational', '10', '2020-11-10', '0', NULL, NULL),
(15, 'I Can and I Will', ' Motivational', 'Antonio Robins', 'English', '2005', '1230544689', '2005', '', 'Paper Back', '', '', '899', 'I can and I will.jpg', 'Motivational', '8', '2020-11-10', '0', NULL, NULL),
(16, 'Think and Grow Rich', ' Motivational', 'Napoleon Hill', 'English', '2005', '1230544689', '2005', '', 'Paper Back', '', '', '599', 'Think and Grow Rich.jpg', 'Motivational', '10', '2020-11-10', '0', NULL, NULL),
(17, 'Mukta', '', 'Delhi Press', 'Hindi', '1', '', '2020', 'November', '', 'Youth magazine', '', '30', 'mukta.jpg', 'Monthly Magazine', '5', '2020-11-24', '0', '', ''),
(19, 'Farm & Food', 'Delhi Press', 'Delhi Press', 'Hindi', '1', '', '2020', 'November', '', 'Agriculture', '', '15', 'farm.jpg', 'Monthly Magazine', '5', '2020-11-24', '0', '', ''),
(20, 'Highlights Genius', 'Highlights Genies', 'Delhi Press', 'Hindi', '1', '', '', 'November', '', 'Child Magazine', '', '50', 'highlis.jpg', 'Monthly Magazine', '5', '2020-11-24', '0', '', ''),
(21, 'Sarita', 'Delhi Press', 'Delhi Press', 'Hindi', '1', '', '2020', 'November', '', 'Youth magazine', '', '50', 'sarita.jpg', 'Monthly Magazine', '5', '2020-11-24', '0', '', ''),
(22, 'Drishti', 'Drishti', 'Drishti current affairs', 'Hindi', '1', '', '2020', 'December', '', 'Competitive', '', '120', 'drishti.jpg', 'Monthly Magazine', '5', '2020-11-26', '0', '', ''),
(23, 'Grih Shobha', 'Delhi Press', 'Delhi Press', 'Hindi', '1', '', '2020', 'November', 'Paper Back', 'Female magazine', '', '50', 'grih.jpg', 'Monthly Magazine', '5', '2020-11-26', '0', '', ''),
(24, 'Meri Saheli', 'Delhi Press', 'Delhi Press', 'Hindi', '1', '', '2020', 'November', '', 'Female magazine', '', '50', 'meri sa.jpg', 'Monthly Magazine', '5', '2020-11-26', '0', '', ''),
(25, 'Vanita', 'Delhi Press', 'Delhi Press', 'Hindi', '1', '', '2020', 'November', '', 'Female magazine', '', '40', 'va.jpg', 'Monthly Magazine', '5', '2020-11-26', '0', '', ''),
(26, 'Grihlakshmi', 'Delhi Press', 'Delhi Press', 'Hindi', '1', '', '2020', 'November', '', 'Female magazine', '', '40', 'grihl.jpg', 'Monthly Magazine', '5', '2020-11-26', '0', '', ''),
(30, 'Aarogydham', 'Delhi Press', 'Delhi Press', 'Hindi', '1', '', '2020', 'November', '', 'Health Magazine', '', '40', 'aarogy.jpg', 'Monthly Magazine', '5', '2020-11-26', '0', '', ''),
(31, 'panchjanya', 'Delhi Press', 'Delhi Press', 'Hindi', '1', '', '2020', 'November', '', 'poltics', '', '30', 'panch.jpg', 'Monthly Magazine', '2', '2020-11-26', '0', '', ''),
(32, 'Tell me why', 'Manorma', 'Manorma', 'English', '1', '', '2020', 'November', '', 'Child Magazine', '', '35', 'tell me why.jpg', 'Monthly Magazine', '5', '2020-11-26', '0', '', ''),
(33, 'Mahkta Aanchal', 'Delhi Press', 'Delhi Press', 'Hindi', '1', '', '2020', 'November', '', 'Story magazine ', '', '50', 'mahkta.jpg', 'Monthly Magazine', '5', '2020-11-26', '0', '', ''),
(34, 'Mahkta Aanchal Urdu', 'Delhi Press', 'Delhi Press', 'Urdu', '1', '', '2020', 'December', '', 'Story magazine ', '', '60', 'ur.jpg', 'Monthly Magazine', '2', '2020-11-26', '0', '', ''),
(35, 'Hans', 'Delhi Press', 'Delhi Press', 'Hindi', '1', '', '2020', 'December', '', 'Story magazine ', '', '40', 'hans.jpg', 'Monthly Magazine', '2', '2020-11-26', '0', '', ''),
(36, 'Science Reporter', 'Delhi Press', 'Delhi Press', 'English', '1', '', '2020', 'December', 'Paper Back', 'Agriculture', '', '30', 'science.jpg', 'Monthly Magazine', '1', '2020-11-27', '0', '', ''),
(37, 'Vigyan Pragati', 'Delhi Press', 'Delhi Press', 'Hindi', '1', '', '2020', 'December', '', 'Agriculture', '', '30', 'vigyan.jpg', 'Monthly Magazine', '0', '2020-11-27', '0', '', ''),
(39, 'Samsmayki Mahasagar', 'Arihant ', 'Delhi Press', 'Hindi', 'Dec-2020', 'mbna', '2020', 'December', '', 'Competitive', '', '45', 'amsayki.jpg', 'Monthly Magazine', '5', '2020-11-27', '0', '', ''),
(40, 'Mathmatics', 'MTG Learning Media private Ltd', 'MTG', 'English', 'Dec-2020', '2020110012885', '2020', 'November', '', 'Competitive', '', '40', 'mth.jpg', 'Monthly Magazine', '2', '2020-11-27', '0', '', ''),
(41, 'Physics Today', 'MTG Learning Media private Ltd', 'MTG', 'English', 'novmber', '2020110012883', '2020', 'November', '', 'Competitive', '', '40', 'phy.jpg', 'Monthly Magazine', '2', '2020-11-27', '0', '', ''),
(42, 'Chemistry Today', 'MTG Learning Media private Ltd', 'MTG', 'English', 'novmber', '2020110012884', '2020', 'November', '', 'Competitive', '', '40', 'che.jpg', 'Monthly Magazine', '2', '2020-11-27', '25', '', ''),
(43, 'Biology Today', 'MTG Learning Media private Ltd', 'MTG', 'English', 'novmber', '2020110012886', '2020', 'November', '', 'Competitive', '', '40', 'bio.jpg', 'Monthly Magazine', '2', '2020-11-27', '0', '', ''),
(44, 'Samany Gyan Darpan', 'Upkar Prakashn', 'upkar prakashn', 'Hindi', 'January', '9770974642001', '2021', 'November', '', '', '', '35', 'sany.jpg', 'Monthly Magazine', '0', '2020-11-27', '0', '', ''),
(45, 'Banking Services Cronical', 'BSC Publication pvt Ltd', 'BSC', 'English', 'Dec-2020', 'mbna1', '2020', 'December', '', 'Competitive', '', '50', 'banking.jpg', 'Monthly Magazine', '5', '2020-11-27', '0', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `user_id` varchar(20) DEFAULT NULL,
  `P_code` varchar(20) DEFAULT NULL,
  `P_name` varchar(50) DEFAULT NULL,
  `P_language` varchar(20) DEFAULT NULL,
  `quantity` varchar(10) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `cdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`user_id`, `P_code`, `P_name`, `P_language`, `quantity`, `price`, `cdate`) VALUES
('9576385389', '44', NULL, NULL, '1', NULL, '2020-12-18'),
('9135329372', '41', NULL, NULL, '1', NULL, '2020-12-19'),
('9576385389', '37', NULL, NULL, '1', NULL, '2020-12-19');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` bigint(10) NOT NULL,
  `cat_type` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_type`) VALUES
(1, 'Monthly Magazine'),
(2, 'Text Books'),
(3, 'Exam corner'),
(4, 'children Books'),
(5, 'Biographies and Autobiographic'),
(6, 'Film and Photography'),
(7, 'Cooking and Hospitality'),
(8, 'Religion'),
(9, 'Traveling and Wildlife'),
(10, 'Sports'),
(11, 'Yoga and Fitness'),
(12, 'Map and Atlas'),
(13, 'Literature and Fiction'),
(14, 'Defense and Security'),
(15, 'Law And References'),
(16, 'Motivational');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `order_id` int(10) NOT NULL,
  `P_code` bigint(20) DEFAULT NULL,
  `P_name` varchar(50) DEFAULT NULL,
  `qty` varchar(5) DEFAULT NULL,
  `paymentrefno` varchar(50) DEFAULT NULL,
  `user_id` varchar(15) DEFAULT NULL,
  `productamt` varchar(5) DEFAULT NULL,
  `odate` date DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`order_id`, `P_code`, `P_name`, `qty`, `paymentrefno`, `user_id`, `productamt`, `odate`, `status`) VALUES
(7, 12, 'Object-Oriented programming with C++ ', '2', 'N2010270830310139019020', '9576385389', '180', '2020-11-11', 'Not Deliver'),
(8, 4, 'प्रतियोगता दर्पण ', '2', 'N2010270830310139019020', '9576385389', '70', '2020-11-11', 'Not Deliver'),
(11, 15, 'I Can and I Will', '2', 'N2010270830310139019110', '9576385389', '899', '2020-11-11', 'Not Deliver'),
(12, 6, 'Yojna', '1', '123456789', '9576385389', '70', '2020-11-11', 'Not Deliver'),
(13, 44, 'Samany Gyan Darpan', '1', 's20122020', '9430625854', '35', '2020-12-20', 'Not Deliver');

-- --------------------------------------------------------

--
-- Table structure for table `stock_mst`
--

CREATE TABLE `stock_mst` (
  `Stock_ID` bigint(20) NOT NULL,
  `P_code` varchar(20) DEFAULT NULL,
  `P_name` varchar(50) DEFAULT NULL,
  `P_language` varchar(20) DEFAULT NULL,
  `P_current_stock` varchar(10) DEFAULT NULL,
  `P_stock_in` varchar(10) DEFAULT NULL,
  `P_stock_in_date` date DEFAULT NULL,
  `P_stock_out` varchar(10) DEFAULT NULL,
  `P_stock_out_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock_mst`
--

INSERT INTO `stock_mst` (`Stock_ID`, `P_code`, `P_name`, `P_language`, `P_current_stock`, `P_stock_in`, `P_stock_in_date`, `P_stock_out`, `P_stock_out_date`) VALUES
(3, '4', 'प्रतियोगता दर्पण', 'English', '26', '01', '2020-10-23', NULL, NULL),
(4, '4', 'प्रतियोगता दर्पण', 'English', '30', '04', '2020-10-23', NULL, NULL),
(5, '4', 'प्रतियोगता दर्पण', 'English', '35', '05', '2020-10-23', NULL, NULL),
(6, '4', 'प्रतियोगता दर्पण', 'English', '35', '05', '2020-10-23', NULL, NULL),
(7, '4', 'प्रतियोगता दर्पण', 'English', '40', '05', '2020-10-23', NULL, NULL),
(8, '4', 'प्रतियोगता दर्पण', 'English', '45', '05', '2020-10-23', NULL, NULL),
(16, '4', 'प्रतियोगता दर्पण', 'English', '40', NULL, NULL, '05', '2020-10-23'),
(17, '4', 'प्रतियोगता दर्पण', 'English', '35', NULL, NULL, '05', '2020-10-23'),
(18, '4', 'प्रतियोगता दर्पण', 'English', '30', NULL, NULL, '05', '2020-10-23'),
(19, '4', 'प्रतियोगता दर्पण', 'English', '35', '05', '2020-10-23', NULL, NULL),
(20, '4', 'प्रतियोगता दर्पण', 'English', '40', '05', '2020-10-23', NULL, NULL),
(29, '12', 'Object-Oriented programming with C++ ', 'English', '8', NULL, NULL, '2', '2020-11-11'),
(30, '4', 'प्रतियोगता दर्पण ', 'Hindi', '38', NULL, NULL, '2', '2020-11-11'),
(35, '15', 'I Can and I Will', 'English', '8', NULL, NULL, '2', '2020-11-11'),
(36, '6', 'Yojna', 'Hindi', '9', NULL, NULL, '1', '2020-11-11'),
(37, '6', 'Yojna', 'Hindi', '10', '1', '2020-11-16', NULL, NULL),
(38, '44', 'Samany Gyan Darpan', 'Hindi', '9', NULL, NULL, '1', '2020-12-20'),
(39, '44', 'Samany Gyan Darpan', 'Hindi', '0', NULL, NULL, '9', '2020-12-25'),
(40, '37', 'Vigyan Pragati', 'Hindi', '0', NULL, NULL, '1', '2020-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `useraddress`
--

CREATE TABLE `useraddress` (
  `user_id` varchar(15) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `mobilenumber` varchar(15) DEFAULT NULL,
  `landmark` varchar(20) DEFAULT NULL,
  `locality` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `state` varchar(15) DEFAULT NULL,
  `district` varchar(20) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `altmobile` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraddress`
--

INSERT INTO `useraddress` (`user_id`, `username`, `mobilenumber`, `landmark`, `locality`, `address`, `state`, `district`, `pincode`, `altmobile`) VALUES
('9576385389', 'Amit Kumar', '9576385389', 'Airtel Tower', 'Cps', 'Ffv', 'Bihar', 'Saran', '841301', ''),
('9430625854', 'satyendra kumar', '9430625854', 'Koniya Maiya ka Mand', 'Hotal Mayur', 'Govt Bus Stand Chapra', 'bihar', 'saran', '841301', '9852551149');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `user_id` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`user_id`, `password`, `name`, `email`) VALUES
('1000000000', '1235', 'Sanny Kumar', ''),
('9135329372', 'amit', 'Abhishek kumar Singh', ''),
('9430625854', '9430625854', 'satyendra kumar', 'satyendra.k56@gmail.com'),
('9576385389', 'amit', 'Amit Kumar Singh', 'amitrcc98@gmail.com'),
('9852551149', 'S@s9852551149', 'satyendra kumar', ''),
('9876543210', '12345', 'Baby Doll', 'baby@gma');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookshop_master`
--
ALTER TABLE `bookshop_master`
  ADD PRIMARY KEY (`P_code`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `stock_mst`
--
ALTER TABLE `stock_mst`
  ADD PRIMARY KEY (`Stock_ID`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookshop_master`
--
ALTER TABLE `bookshop_master`
  MODIFY `P_code` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `stock_mst`
--
ALTER TABLE `stock_mst`
  MODIFY `Stock_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
