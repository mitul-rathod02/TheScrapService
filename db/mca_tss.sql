-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 13, 2024 at 05:26 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mca_tss`
--
CREATE DATABASE IF NOT EXISTS `mca_tss` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mca_tss`;

-- --------------------------------------------------------

--
-- Table structure for table `master_scrap_categories`
--

CREATE TABLE IF NOT EXISTS `master_scrap_categories` (
  `scrap_category_id` varchar(10) NOT NULL,
  `scrap_category_name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`scrap_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_scrap_categories`
--

INSERT INTO `master_scrap_categories` (`scrap_category_id`, `scrap_category_name`) VALUES
('SC01', 'News Papers'),
('SC02', 'Office Papers'),
('SC03', 'Copies/Books'),
('SC04', 'Cardboard'),
('SC05', 'Plastic'),
('SC06', 'Iron'),
('SC07', 'Steel'),
('SC08', 'Aluminum'),
('SC09', 'Brass'),
('SC10', 'Copper');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` varchar(10) NOT NULL,
  `admin_password` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking_info`
--

CREATE TABLE IF NOT EXISTS `tbl_booking_info` (
  `order_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(10) DEFAULT NULL,
  `scrap_collector_id` varchar(10) DEFAULT NULL,
  `scrap_category` varchar(10) DEFAULT NULL,
  `scrap_weight_kg` float(4,2) DEFAULT NULL,
  `scheduled_date` date DEFAULT NULL,
  `scheduled_time` varchar(6) NOT NULL,
  `customer_longitude` decimal(10,8) DEFAULT NULL,
  `customer_latitude` decimal(10,8) DEFAULT NULL,
  PRIMARY KEY (`order_id`),
  KEY `customer_id` (`customer_id`),
  KEY `scrap_collector_id` (`scrap_collector_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_booking_info`
--

INSERT INTO `tbl_booking_info` (`order_id`, `customer_id`, `scrap_collector_id`, `scrap_category`, `scrap_weight_kg`, `scheduled_date`, `scheduled_time`, `customer_longitude`, `customer_latitude`) VALUES
(1, 'Abhay1', 'Akash22', 'News Paper', 15.00, '2024-04-10', '', '72.58767360', '23.00968960');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `customer_id` varchar(10) NOT NULL,
  `customer_name` varchar(30) DEFAULT NULL,
  `customer_mobile` char(10) DEFAULT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `customer_address` varchar(255) DEFAULT NULL,
  `customer_alternate_mobile` char(10) DEFAULT NULL,
  `customer_password` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `customer_name`, `customer_mobile`, `customer_email`, `customer_address`, `customer_alternate_mobile`, `customer_password`) VALUES
('Abhay1', 'Abhay', '635487448', 'abhay065@gmail.com', 'Gandhi Baug, Nanpura, Surat', '7065848785', 'Abhay@12'),
('Chirag12', 'Chirag', '7584858958', 'mr.mitul62@gmail.com', 'Amroli, Surat', '7859858587', 'Chirag@1'),
('Mitul1', 'Mitul', '7069217775', 'mitulrathod131@gmail.com', 'Sardar Bridge Road, Athwa Gate, Surat', '7859858587', 'Mitul@12'),
('Pratham1', 'Pratham', '9824965920', 'patelpratham311@gmail.com', 'aamri talav street navsari', '8238213483', 'Pratham@'),
('Rahul20', 'Rahul', '7045857458', 'rahul875@gmail.com', 'Amli Kasba, Navsari', '6358784758', 'Rahul@12'),
('Rohit1', 'Rohit', '7025652484', 'rohit453@gmail.com', 'Chikhli, Navsari', '6356965858', 'Rohit@12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(10) DEFAULT NULL,
  `scrap_collector_id` varchar(10) DEFAULT NULL,
  `feedback` text,
  `feedback_date` date DEFAULT NULL,
  PRIMARY KEY (`feedback_id`),
  KEY `customer_id` (`customer_id`),
  KEY `scrap_collector_id` (`scrap_collector_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `customer_id`, `scrap_collector_id`, `feedback`, `feedback_date`) VALUES
(1, 'Rohit1', 'Akash22', 'Great service', '2024-04-19'),
(2, 'Rohit1', 'Animesh1', 'Excellent work', '2024-04-19'),
(3, 'Pratham1', 'Akash22', 'very nice experiance with akash', '2024-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_scrap_category`
--

CREATE TABLE IF NOT EXISTS `tbl_scrap_category` (
  `scrap_collector_id` varchar(10) DEFAULT NULL,
  `scrap_category_id` varchar(10) DEFAULT NULL,
  `scrap_category_name` varchar(255) NOT NULL,
  `scrap_category_price` float(5,2) DEFAULT NULL,
  KEY `scrap_category_id` (`scrap_category_id`),
  KEY `scrap_collector_id` (`scrap_collector_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_scrap_collector`
--

CREATE TABLE IF NOT EXISTS `tbl_scrap_collector` (
  `scrap_collector_id` varchar(10) NOT NULL,
  `scrap_collector_name` varchar(30) DEFAULT NULL,
  `scrap_collector_mobile` char(10) DEFAULT NULL,
  `scrap_collector_email` varchar(255) DEFAULT NULL,
  `scrap_collector_address` varchar(255) DEFAULT NULL,
  `scrap_collector_image` varchar(255) DEFAULT NULL,
  `scrap_collector_password` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`scrap_collector_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_scrap_collector`
--

INSERT INTO `tbl_scrap_collector` (`scrap_collector_id`, `scrap_collector_name`, `scrap_collector_mobile`, `scrap_collector_email`, `scrap_collector_address`, `scrap_collector_image`, `scrap_collector_password`) VALUES
('Akash22', 'Akash', '7069258514', 'akask34@gmaol.com', 'Jalalpore, Navsari', 'photo8.jpg', 'Akash@12'),
('Animesh1', 'Animesh', '7069217775', 'animesh@123gmail.com', '312, Mirambika Complex, Opp. Gandhi Baug, Nanpura', 'photo1.jpg', 'Animesh@'),
('Hiren1', 'Hiren', '7069217775', 'mitulrathod131@gmail.com', 'Sardar Bridge Road, Athwa Gate, Surat', 'photo5.jpg', 'Abc@123'),
('Manav3', 'Manav', '7041485785', 'manav35@gmail.com', 'Chikhli, Navsari', 'photo8.jpg', 'Manav@12'),
('Rohan02', 'Rohan', '7062584585', 'mr.mitul62@gmail.com', 'Baben, Bardoli', 'photo1.jpg', 'Rohan@12');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_booking_info`
--
ALTER TABLE `tbl_booking_info`
  ADD CONSTRAINT `tbl_booking_info_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `tbl_customer` (`customer_id`),
  ADD CONSTRAINT `tbl_booking_info_ibfk_2` FOREIGN KEY (`scrap_collector_id`) REFERENCES `tbl_scrap_collector` (`scrap_collector_id`);

--
-- Constraints for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD CONSTRAINT `tbl_feedback_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `tbl_customer` (`customer_id`),
  ADD CONSTRAINT `tbl_feedback_ibfk_2` FOREIGN KEY (`scrap_collector_id`) REFERENCES `tbl_scrap_collector` (`scrap_collector_id`);

--
-- Constraints for table `tbl_scrap_category`
--
ALTER TABLE `tbl_scrap_category`
  ADD CONSTRAINT `tbl_scrap_category_ibfk_1` FOREIGN KEY (`scrap_category_id`) REFERENCES `master_scrap_categories` (`scrap_category_id`),
  ADD CONSTRAINT `tbl_scrap_category_ibfk_2` FOREIGN KEY (`scrap_collector_id`) REFERENCES `tbl_scrap_collector` (`scrap_collector_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
