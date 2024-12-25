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
-- Database: `the_scrap_service`
--
CREATE DATABASE IF NOT EXISTS `the_scrap_service` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `the_scrap_service`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` varchar(10) NOT NULL,
  `admin_name` varchar(30) DEFAULT NULL,
  `admin_email` varchar(100) DEFAULT NULL,
  `admin_password` varchar(8) DEFAULT NULL,
  `admin_mobile` char(10) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_mobile`) VALUES
('admin', 'Admin', 'thescrapservice.18@gmail.com', 'admin', '9824965920');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking_info`
--

CREATE TABLE IF NOT EXISTS `tbl_booking_info` (
  `order_id` varchar(10) NOT NULL DEFAULT '',
  `customer_id` varchar(30) NOT NULL DEFAULT '',
  `scrap_collector_id` varchar(15) NOT NULL DEFAULT '',
  `scrap_category` varchar(50) NOT NULL,
  `scrap_weight_kg` float(4,2) NOT NULL,
  `scheduled_date` datetime NOT NULL,
  `longitude` decimal(10,8) NOT NULL,
  `latitude` decimal(10,8) NOT NULL,
  PRIMARY KEY (`order_id`,`customer_id`,`scrap_collector_id`),
  KEY `scrap_collector_id` (`scrap_collector_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `customer_id` varchar(10) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_mobile` char(10) NOT NULL,
  `alternate_number` varchar(10) NOT NULL,
  `customer_email` varchar(80) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `customer_name`, `customer_mobile`, `alternate_number`, `customer_email`, `customer_address`) VALUES
('animesh', 'Animesh Pandey', '9913904085', '7069277779', 'pandeyanimesh.18@gmail.com', 'Navsari'),
('Chirag1', 'Chirag Patel', '7069584785', '6352458787', 'chirag12@gmial.com', 'Bardoli');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `feedback_id` bigint(11) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(30) NOT NULL DEFAULT '',
  `scrap_collector_id` varchar(15) NOT NULL DEFAULT '',
  `feedback` text NOT NULL,
  `feedback_date` date NOT NULL,
  PRIMARY KEY (`feedback_id`),
  KEY `scrap_collector_id` (`scrap_collector_id`),
  KEY `customer_id` (`customer_id`),
  FULLTEXT KEY `customer_id_2` (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location_test`
--

CREATE TABLE IF NOT EXISTS `tbl_location_test` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `longitude` decimal(10,8) NOT NULL,
  `latitude` decimal(10,8) NOT NULL,
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_location_test`
--

INSERT INTO `tbl_location_test` (`location_id`, `longitude`, `latitude`) VALUES
(1, '72.57136210', '23.02250500');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_otp`
--

CREATE TABLE IF NOT EXISTS `tbl_otp` (
  `id` int(11) NOT NULL,
  `otp` varchar(10) NOT NULL,
  `is_expired` int(11) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_otp`
--

INSERT INTO `tbl_otp` (`id`, `otp`, `is_expired`, `create_at`) VALUES
(0, '984179', 1, '2024-01-12 16:30:51'),
(0, '575811', 0, '2024-03-02 04:56:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE IF NOT EXISTS `tbl_registration` (
  `user_id` varchar(10) NOT NULL,
  `user_name` varchar(10) DEFAULT NULL,
  `email` varchar(80) NOT NULL,
  `mobile_number` varchar(10) NOT NULL,
  `profile_type` char(1) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`user_id`, `user_name`, `email`, `mobile_number`, `profile_type`, `password`) VALUES
('Akash22', 'Akashpatel', 'akashpatel7043590723@gmail.com', '7043590723', 'S', 'Akash221'),
('animesh', 'Animesh', 'pandeyanimesh.18@gmail.com', '9913904085', 'C', 'Animesh1'),
('Asha Patel', 'Asha', 'asha.patel@utu.ac.in', '9604477844', 'C', 'Ashapat1'),
('Chirag1', 'Chirag', 'chirag12@gmial.com', '7069584785', 'C', 'Chirag12'),
('Jastin1', 'Jastin', 'test@gmail.com', '7069217789', 'S', 'Jastin@1'),
('Mitul200', 'Mitul', 'mitulrathod131@gmail.com', '7069217775', 'S', 'Mitul192'),
('Pratham3', 'Pratham', 'patelpratham311@gmail.com', '9824965920', 'S', 'Pratham3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_scrap_category`
--

CREATE TABLE IF NOT EXISTS `tbl_scrap_category` (
  `scrap_collector_id` varchar(10) NOT NULL DEFAULT '',
  `scrap_category_id` varchar(10) NOT NULL DEFAULT '',
  `scrap_category_name` varchar(15) NOT NULL,
  `scrap_category_price` float(6,2) NOT NULL,
  PRIMARY KEY (`scrap_collector_id`,`scrap_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_scrap_category`
--

INSERT INTO `tbl_scrap_category` (`scrap_collector_id`, `scrap_category_id`, `scrap_category_name`, `scrap_category_price`) VALUES
('Akash22', 'SC01', 'News Papers', 10.00),
('Akash22', 'SC05', 'Office Papers', 11.00),
('Akash22', 'SC08', 'Books', 12.00),
('Akash22', 'SC11', 'Cardboard', 7.00),
('Akash22', 'SC14', 'Plastic', 10.00),
('Akash22', 'SC17', 'Iron', 28.00),
('Akash22', 'SC20', 'Steel', 36.00),
('Akash22', 'SC23', 'Aluminum', 105.00),
('Akash22', 'SC26', 'Brass', 300.00),
('Akash22', 'SC29', 'Copper', 420.00),
('Mitul200', 'SC02', 'News Papers', 12.00),
('Mitul200', 'SC06', 'Office Papers', 13.00),
('Mitul200', 'SC09', 'Books', 14.00),
('Mitul200', 'SC12', 'Cardboard', 9.00),
('Mitul200', 'SC15', 'Plastic', 12.00),
('Mitul200', 'SC18', 'Iron', 29.00),
('Mitul200', 'SC21', 'Steel', 39.00),
('Mitul200', 'SC24', 'Aluminum', 108.00),
('Mitul200', 'SC27', 'Brass', 302.00),
('Mitul200', 'SC30', 'Copper', 421.00),
('Pratham3', '', 'Coper', 50.00),
('Pratham3', 'SC04', 'News Papers', 11.00),
('Pratham3', 'SC07', 'Office Papers', 18.00),
('Pratham3', 'SC10', 'Books', 16.00),
('Pratham3', 'SC13', 'Cardboard', 6.00),
('Pratham3', 'SC16', 'Plastic', 15.00),
('Pratham3', 'SC19', 'Iron', 31.00),
('Pratham3', 'SC22', 'Steel', 41.00),
('Pratham3', 'SC25', 'Aluminum', 109.00),
('Pratham3', 'SC28', 'Brass', 306.00),
('Pratham3', 'SC31', 'Copper', 426.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_scrap_categoty`
--

CREATE TABLE IF NOT EXISTS `tbl_scrap_categoty` (
  `scrap_collector_id` varchar(10) NOT NULL DEFAULT '',
  `scrap_category_id` varchar(10) NOT NULL DEFAULT '',
  `scrap_category_name` varchar(15) NOT NULL,
  `scrap_price` float(4,2) NOT NULL,
  PRIMARY KEY (`scrap_collector_id`,`scrap_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_scrap_collector`
--

CREATE TABLE IF NOT EXISTS `tbl_scrap_collector` (
  `scrap_collector_id` varchar(10) NOT NULL,
  `scrap_collector_name` varchar(30) DEFAULT NULL,
  `scrap_collector_mobile` char(10) DEFAULT NULL,
  `scrap_collector_email` varchar(100) DEFAULT NULL,
  `scrap_collector_address` varchar(255) DEFAULT NULL,
  `scrap_collector_image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`scrap_collector_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_scrap_collector`
--

INSERT INTO `tbl_scrap_collector` (`scrap_collector_id`, `scrap_collector_name`, `scrap_collector_mobile`, `scrap_collector_email`, `scrap_collector_address`, `scrap_collector_image`) VALUES
('Akash22', 'Akash Patel', '7069258589', 'akashpatel7043590723@gmail.com', 'Navsari', 'photo8.jpg'),
('Mitul200', 'Mitul Rathod', '7069854562', 'mitul@gmail.com', 'Bardoli', 'photo5.jpg'),
('Pratham3', 'Pratham Patel', '6352458574', 'pratham@gmail.com', 'Navsari', 'photo8.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_booking_info`
--
ALTER TABLE `tbl_booking_info`
  ADD CONSTRAINT `tbl_booking_info_ibfk_1` FOREIGN KEY (`scrap_collector_id`) REFERENCES `tbl_scrap_collector` (`scrap_collector_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_booking_info_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `tbl_customer` (`customer_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD CONSTRAINT `tbl_customer_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `tbl_registration` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD CONSTRAINT `tbl_feedback_ibfk_1` FOREIGN KEY (`scrap_collector_id`) REFERENCES `tbl_scrap_collector` (`scrap_collector_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_feedback_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `tbl_customer` (`customer_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_scrap_category`
--
ALTER TABLE `tbl_scrap_category`
  ADD CONSTRAINT `tbl_scrap_category_ibfk_1` FOREIGN KEY (`scrap_collector_id`) REFERENCES `tbl_scrap_collector` (`scrap_collector_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_scrap_categoty`
--
ALTER TABLE `tbl_scrap_categoty`
  ADD CONSTRAINT `tbl_scrap_categoty_ibfk_1` FOREIGN KEY (`scrap_collector_id`) REFERENCES `tbl_scrap_collector` (`scrap_collector_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_scrap_collector`
--
ALTER TABLE `tbl_scrap_collector`
  ADD CONSTRAINT `tbl_scrap_collector_ibfk_1` FOREIGN KEY (`scrap_collector_id`) REFERENCES `tbl_registration` (`user_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
