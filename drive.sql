-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 11, 2022 at 03:28 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `drive`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(45) NOT NULL,
  `image` blob NOT NULL,
  `adult` varchar(45) NOT NULL,
  `jup` varchar(45) NOT NULL,
  `top` varchar(45) NOT NULL,
  `about` varchar(45) NOT NULL,
  `seat` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `code` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `image`, `adult`, `jup`, `top`, `about`, `seat`, `status`, `code`) VALUES
(14, 'Toyota', '', '100', 'abuja', 'lagos', 'mm', '10', 'admin', 'CAR741c74c'),
(16, 'Honda', '', '200', 'Lagos', 'Ibadan', 'nice car', '5', 'admin', 'CAR6c3061c'),
(17, 'bus', '', '700', 'Abuja', 'Akure', 'by car', '10', 'admin', 'CAR9f2aed5');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `code` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `num` varchar(45) NOT NULL,
  `nation` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `year` varchar(45) NOT NULL,
  `month` varchar(45) NOT NULL,
  `day` varchar(45) NOT NULL,
  `trip` varchar(50) NOT NULL,
  `trav` varchar(100) NOT NULL,
  `trato` varchar(100) NOT NULL,
  `joun` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `back` varchar(100) NOT NULL,
  `arrive` varchar(100) NOT NULL,
  `person` varchar(100) NOT NULL,
  `human` varchar(100) NOT NULL,
  `adult` varchar(100) NOT NULL,
  `child` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `adult_1` varchar(100) NOT NULL,
  `child_1` varchar(100) NOT NULL,
  `total_1` varchar(100) NOT NULL,
  `name_1` varchar(100) NOT NULL,
  `nation_1` varchar(100) NOT NULL,
  `gender_1` varchar(100) NOT NULL,
  `year_1` varchar(100) NOT NULL,
  `month_1` varchar(100) NOT NULL,
  `day_1` varchar(100) NOT NULL,
  `name_2` varchar(100) NOT NULL,
  `nation_2` varchar(100) NOT NULL,
  `gender_2` varchar(100) NOT NULL,
  `year_2` varchar(100) NOT NULL,
  `month_2` varchar(100) NOT NULL,
  `day_2` varchar(100) NOT NULL,
  `name_3` varchar(100) NOT NULL,
  `nation_3` varchar(100) NOT NULL,
  `gender_3` varchar(100) NOT NULL,
  `year_3` varchar(100) NOT NULL,
  `month_3` varchar(100) NOT NULL,
  `day_3` varchar(100) NOT NULL,
  `car` varchar(45) NOT NULL,
  `seat` varchar(45) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `code`, `name`, `password`, `num`, `nation`, `gender`, `year`, `month`, `day`, `trip`, `trav`, `trato`, `joun`, `time`, `back`, `arrive`, `person`, `human`, `adult`, `child`, `total`, `adult_1`, `child_1`, `total_1`, `name_1`, `nation_1`, `gender_1`, `year_1`, `month_1`, `day_1`, `name_2`, `nation_2`, `gender_2`, `year_2`, `month_2`, `day_2`, `name_3`, `nation_3`, `gender_3`, `year_3`, `month_3`, `day_3`, `car`, `seat`) VALUES
(22, 'DC593fef1', 'mide', '1212', '08121181894', 'Nigeria', 'Male', '1999', 'April', '5', 'One way Ticket', 'LAGOS__(ikotun stop)', 'OYO__(ibadan stop)', '2022-11-01', '9:00am', '', '', '1', '1', '4000', '3300', '7300', '3900', '3000', '6900', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, 'DC0c6fcf0', 'movic', '8907', '07045689439', 'Nigeria', 'Male', '1978', 'May', '15', 'One way Ticket', 'LAGOS__(ikotun stop)', 'OYO__(ibadan stop)', '2022-11-07', '9:00am', '', '', '1', '3', '4000', '3300', '13900', '3900', '3000', '12900', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 'DC4019008', 'rasaq ibrahim kolawole', '12121212', '09015604158', 'South Africa', 'Male', '2010', 'April', '19', 'One way Ticket', 'LAGOS__(ikotun stop)', 'x', '2022-12-27', '12:00pm', '2022-12-31', '7:00am', '3', '2', '4000', '3300', '18600', '3900', '3000', '17700', '', 'A', 'Male', '2002', 'h', '9', '', 'A', 'Male', '2002', 'h', '9', '', 'A', 'Male', '2002', 'h', '9', '', ''),
(25, 'DCff05280', 'Taoreed', '9090', '08071231653', 'Nigeria', 'Male', '2001', 'April', '2', '', '', '', '', '', '', '', '', '', '4000', '3300', '', '3900', '3000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
