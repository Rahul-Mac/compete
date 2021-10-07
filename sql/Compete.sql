-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 08, 2020 at 10:56 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `compete`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `chat_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `message` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`chat_id`),
  KEY `sender_id` (`sender_id`),
  KEY `receiver_id` (`receiver_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `file_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `comment` varchar(20) NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `file_id` (`file_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `follower`
--

DROP TABLE IF EXISTS `follower`;
CREATE TABLE IF NOT EXISTS `follower` (
  `follower_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `followers_id` int(11) NOT NULL,
  PRIMARY KEY (`follower_id`),
  KEY `user_id` (`user_id`),
  KEY `followers_id` (`followers_id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Table structure for table `mylike`
--

DROP TABLE IF EXISTS `mylike`;
CREATE TABLE IF NOT EXISTS `mylike` (
  `like_id` int(11) NOT NULL AUTO_INCREMENT,
  `file_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`like_id`),
  KEY `file_id` (`file_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `source_id` int(11) NOT NULL,
  `source_name` varchar(20) NOT NULL,
  `link` varchar(200) NOT NULL,
  PRIMARY KEY (`notification_id`),
  KEY `user_id` (`user_id`),
  KEY `source_id` (`source_id`),
  KEY `file_id` (`file_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `report_id` int(11) NOT NULL AUTO_INCREMENT,
  `source_id` int(11) NOT NULL,
  `link` varchar(200) NOT NULL,
  `reason` varchar(200) NOT NULL,
  PRIMARY KEY (`report_id`),
  KEY `source_id` (`source_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tournament`
--

DROP TABLE IF EXISTS `tournament`;
CREATE TABLE IF NOT EXISTS `tournament` (
  `tournament_id` int(11) NOT NULL AUTO_INCREMENT,
  `tournamentUId` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `uploaded_file` longblob NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `tournament_caption` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rank` int(11) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`tournament_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Table structure for table `tournamentlikes`
--

DROP TABLE IF EXISTS `tournamentlikes`;
CREATE TABLE IF NOT EXISTS `tournamentlikes` (
  `likeid` int(11) NOT NULL AUTO_INCREMENT,
  `tournament_file_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`likeid`) USING BTREE,
  KEY `tournament_file_id` (`tournament_file_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

DROP TABLE IF EXISTS `upload`;
CREATE TABLE IF NOT EXISTS `upload` (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `file` longblob NOT NULL,
  `file_type` varchar(10) NOT NULL,
  `caption` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`file_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `category` varchar(20) NOT NULL,
  `profile_pic` mediumblob,
  `profile_pic_type` varchar(20) DEFAULT NULL,
  `email_id` varchar(20) NOT NULL,
  `log` int(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
