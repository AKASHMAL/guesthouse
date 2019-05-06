-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 22, 2018 at 11:33 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `roomdetail`
--

CREATE TABLE IF NOT EXISTS `roomdetail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `checkin_date` date NOT NULL,
  `checkout_date` date NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `no_of_room` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `roomtype`
--

CREATE TABLE IF NOT EXISTS `roomtype` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_type` varchar(50) NOT NULL,
  `room_price` varchar(50) NOT NULL,
  `room_seson` varchar(50) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `roomtype`
--

INSERT INTO `roomtype` (`room_id`, `room_type`, `room_price`, `room_seson`) VALUES
(1, 'deluxe', '700', 'low season'),
(2, 'deluxe', '900', 'high season'),
(3, 'super deluxe', '1000', 'low season'),
(4, 'super deluxe', '1200', 'high season'),
(5, 'suite', '1500', 'low season'),
(6, 'suite', '1800', 'high season');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `day_phone` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
