-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 25, 2013 at 05:00 PM
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
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` VALUES(1, 'admin', 'Administrator');
INSERT INTO `groups` VALUES(2, 'employees', 'General Employees');
INSERT INTO `groups` VALUES(3, 'yavorsky', '');
INSERT INTO `groups` VALUES(4, 'parkhill', '');
INSERT INTO `groups` VALUES(5, 'merriman', '');
INSERT INTO `groups` VALUES(6, 'peters', '');
INSERT INTO `groups` VALUES(7, 'rooney', '');
INSERT INTO `groups` VALUES(8, 'miller', '');
INSERT INTO `groups` VALUES(9, 'metzger', '');
INSERT INTO `groups` VALUES(10, 'reviewer', '');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `login_attempts`
--


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
  `kpa2` text NOT NULL,
  `kpa2_rating` int(11) NOT NULL,
  `date_updated` datetime NOT NULL,
  `date_created` datetime NOT NULL,
  `date_published` datetime NOT NULL,
  `published` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` VALUES(28, 1, '<p>dustin''s review</p>', 3, '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);
INSERT INTO `reviews` VALUES(29, 2, '<p>jen''s review</p>', 5, '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);
INSERT INTO `reviews` VALUES(30, 1, '<p>time test</p>', 3, '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);
INSERT INTO `reviews` VALUES(31, 1, '<p>time test 2</p>', 4, '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);
INSERT INTO `reviews` VALUES(32, 2, '<p>time test 5</p>', 3, '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);
INSERT INTO `reviews` VALUES(33, 2, '<p>testsetsetsertsrtsdrgsdfg</p>', 2, '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);
INSERT INTO `reviews` VALUES(34, 1, '<p>test time again fool</p>', 2, '', '', 0, '2013-06-19 13:41:09', '2013-06-19 13:41:09', '0000-00-00 00:00:00', 0);
INSERT INTO `reviews` VALUES(35, 2, '<p>timmeeee</p>', 4, '', '', 0, '2013-06-19 13:41:30', '2013-06-19 13:41:30', '2013-06-19 13:41:30', 1);
INSERT INTO `reviews` VALUES(36, 1, '<p>review</p>', 4, '', '', 0, '2013-06-19 13:46:19', '2013-06-19 13:46:19', '2013-06-19 13:46:19', 1);
INSERT INTO `reviews` VALUES(37, 1, '<p>yyoyoyoyoyo</p>', 5, '', '', 0, '2013-06-19 13:46:27', '2013-06-19 13:46:27', '2013-06-19 13:46:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` VALUES(1, '\0\0', 'admin', '8d0003108aca08c6f68583cd938866f47e9c69fe', '9462e8eee0', 'admin@admin.com', '', NULL, NULL, '9d029802e28cd9c768e8e62277c0df49ec65c48c', 1268889823, 1372193730, 1, 'Admin', 'istrator');
INSERT INTO `users` VALUES(5, '\0\0', 'dmcgrew', '76f1d9a7f6a94418ba79f710ca93ebda0d0aa816', NULL, 'dmcgrew@marketspaceagency.com', NULL, NULL, NULL, NULL, 1372178329, 1372178329, 1, 'Dustin', 'McGrew');
INSERT INTO `users` VALUES(6, '\0\0', 'jyavorsky', 'a52c2c920dd084db34952c613d97af08b5ef3098', NULL, 'jyavorsky@marketspaceagency.com', NULL, NULL, NULL, NULL, 1372178378, 1372178378, 1, 'Jennifer', 'Yavorsky');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` VALUES(24, 1, 1);
INSERT INTO `users_groups` VALUES(25, 1, 10);
INSERT INTO `users_groups` VALUES(20, 5, 2);
INSERT INTO `users_groups` VALUES(21, 6, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
