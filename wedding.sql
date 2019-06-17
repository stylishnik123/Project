-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2014 at 07:17 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `carrier`
--

CREATE TABLE IF NOT EXISTS `carrier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `email` varchar(25) NOT NULL,
  `language` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `carrier`
--

INSERT INTO `carrier` (`id`, `name`, `address`, `contact`, `city`, `email`, `language`, `experience`, `gender`) VALUES
(1, 'sunny', 'aps', '9878898778', 'chandigarh', 'guri00786@gmail.com', 'keefef', 'fewfef', 'Male'),
(2, '', 'jkbbl;io', '', '0', '', '', '', ''),
(3, '', 'hjb', '', '0', '', '', '', ''),
(4, 'hghj', 'jhhhn', 'nkmk', 'chandigarh', 'kansal.vandana9@gmail.com', 'nkk', 'nk', 'Female'),
(5, '', 'j   m m', '', '0', '', '', '', ''),
(6, '', 'scxdv', '', '0', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PhoneNumber` varchar(255) NOT NULL,
  `YourQuerry` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Name` (`Name`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`Id`, `Name`, `Email`, `PhoneNumber`, `YourQuerry`) VALUES
(1, 'aman', 'aman@gmail.com', '82301949737', 'dnkefn'),
(2, '', '', '', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `description`) VALUES
(1, '5 March', 'We Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis auconsectetuer adipiscing elit, sed diam nonummy nibh euismod tinciduntconsectetuer adipiscing elit, sed diam nonummy nibh euismod sed diam.'),
(2, '7 April', 'Wedding Shop is India''s top online wedding website. It is the online gateway to the best wedding planning experience for the about-to-be married couples. This site is constantly updated with latest wedding trends and unique wedding ideas. It is an Indian wedding website which connects soon-to-be-married couples directly to the top wedding experts to get the best ideas and tips.\n');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, '', '453565');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
