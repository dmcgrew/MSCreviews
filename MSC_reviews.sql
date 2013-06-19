-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 19, 2013 at 05:04 PM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `MSC_reviews`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email_address` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` VALUES(1, 'dmcgrew', '921e938d5137395a7d12a2e96aa8a1bc', 'Dustin', 'McGrew', 'dmcgrew@marketspaceagency.com');
INSERT INTO `employees` VALUES(2, 'jyavorsky', 'db7cbb5f80895c5f02af592e8caa62ac', 'Jennifer', 'Yavorsky', 'jyavorsky@marketspaceagency.com');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL COMMENT 'The user id the review belongs to.',
  `kpa1` text NOT NULL,
  `kpa1_rating` int(11) NOT NULL,
  `kpa1_notes` text NOT NULL,
  `date_updated` datetime NOT NULL,
  `date_created` datetime NOT NULL,
  `date_published` datetime NOT NULL,
  `published` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` VALUES(28, 1, '<p>dustin''s review</p>', 3, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);
INSERT INTO `reviews` VALUES(29, 2, '<p>jen''s review</p>', 5, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);
INSERT INTO `reviews` VALUES(30, 1, '<p>time test</p>', 3, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);
INSERT INTO `reviews` VALUES(31, 1, '<p>time test 2</p>', 4, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);
INSERT INTO `reviews` VALUES(32, 2, '<p>time test 5</p>', 3, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);
INSERT INTO `reviews` VALUES(33, 2, '<p>testsetsetsertsrtsdrgsdfg</p>', 2, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);
INSERT INTO `reviews` VALUES(34, 1, '<p>test time again fool</p>', 2, '', '2013-06-19 13:41:09', '2013-06-19 13:41:09', '0000-00-00 00:00:00', 0);
INSERT INTO `reviews` VALUES(35, 2, '<p>timmeeee</p>', 4, '', '2013-06-19 13:41:30', '2013-06-19 13:41:30', '2013-06-19 13:41:30', 1);
INSERT INTO `reviews` VALUES(36, 1, '<p>review</p>', 4, '', '2013-06-19 13:46:19', '2013-06-19 13:46:19', '2013-06-19 13:46:19', 1);
INSERT INTO `reviews` VALUES(37, 1, '<p>yyoyoyoyoyo</p>', 5, '', '2013-06-19 13:46:27', '2013-06-19 13:46:27', '2013-06-19 13:46:27', 1);
