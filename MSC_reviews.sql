-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 26, 2013 at 05:05 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

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
INSERT INTO `reviews` VALUES(38, 5, '<p>Dustin is cool.</p>', 4, '', '<p>Yay dustin.</p>', 2, '2013-06-26 09:12:36', '2013-06-26 09:12:36', '2013-06-26 09:12:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stars`
--

CREATE TABLE `stars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `star_content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `stars`
--

INSERT INTO `stars` VALUES(1, 5, '<p>cool story bro</p>');
INSERT INTO `stars` VALUES(2, 5, '<p>fghdfgh</p>');
INSERT INTO `stars` VALUES(3, 5, '<p>hey</p>');
INSERT INTO `stars` VALUES(4, 5, '<p>hey</p>');
INSERT INTO `stars` VALUES(5, 6, '<p>hey hey</p>');
INSERT INTO `stars` VALUES(6, 5, '<p>hi</p>');
INSERT INTO `stars` VALUES(7, 5, '<p>hey</p>');
INSERT INTO `stars` VALUES(8, 5, '<p>This is a test star.</p>');
INSERT INTO `stars` VALUES(9, 5, '<p>Another test star! <strong>YAHOOOO!!!</strong></p>\n<p><span style="color: #ff9900; background-color: #000080;"><strong>Yayyyyy!</strong></span></p>');
INSERT INTO `stars` VALUES(10, 5, '<p>tes teststsgsdfg dfg sdfg sdfg sdfgs dfgs dfgs dfgsdf&nbsp;</p>');
INSERT INTO `stars` VALUES(11, 5, '<p>dfgh dfgh dfgh dfghd fgh dfghd g</p>');
INSERT INTO `stars` VALUES(12, 6, '<p><strong>Jen is the COOLEST!!!&nbsp;</strong></p>\n<p>I''m just testing the star form. You''re still cool though.</p>');
INSERT INTO `stars` VALUES(13, 6, '<p><strong>Jen is the COOLEST!!!</strong></p>\n<p>Just testing the star from. You''re still cool though.</p>');
INSERT INTO `stars` VALUES(14, 5, '<p>you have a star</p>');
INSERT INTO `stars` VALUES(15, 6, '<p>Let me know if you get this.</p>');
INSERT INTO `stars` VALUES(16, 5, '<p>test</p>');
INSERT INTO `stars` VALUES(17, 5, '<p>test</p>');
INSERT INTO `stars` VALUES(18, 5, '<p>hllo</p>');
INSERT INTO `stars` VALUES(19, 5, '<p>sfgsdfgsdg</p>');
INSERT INTO `stars` VALUES(20, 5, '<p>heyo</p>');
INSERT INTO `stars` VALUES(21, 5, '<p>dfsdg</p>');
INSERT INTO `stars` VALUES(22, 5, '<p>fghdfghdfh</p>');
INSERT INTO `stars` VALUES(23, 5, '<p>test</p>');
INSERT INTO `stars` VALUES(24, 5, '<p>hello</p>');
INSERT INTO `stars` VALUES(25, 5, '<p>sdfgsdfg</p>');

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

INSERT INTO `users` VALUES(1, '\0\0', 'admin', '44dd539c468a2a4c0d84a129d05b440346d925ee', '9462e8eee0', 'admin@admin.com', '', NULL, NULL, 'daec901d99fd580719180ebdb095cb0890c593b0', 1268889823, 1372255962, 1, 'Dustin', 'McGrew');
INSERT INTO `users` VALUES(5, '\0\0', 'dmcgrew', '76f1d9a7f6a94418ba79f710ca93ebda0d0aa816', NULL, 'dmcgrew@marketspaceagency.com', NULL, NULL, NULL, NULL, 1372178329, 1372251256, 1, 'Dustin', 'McGrew');
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` VALUES(26, 1, 1);
INSERT INTO `users_groups` VALUES(27, 1, 10);
INSERT INTO `users_groups` VALUES(28, 5, 2);
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
