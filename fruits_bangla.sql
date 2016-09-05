-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 06, 2015 at 10:10 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fruits_bangla`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `u_name` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY  (`u_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`u_name`, `pass`) VALUES
('ruet', 'cse11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE IF NOT EXISTS `tbl_comment` (
  `name` varchar(300) NOT NULL,
  `mail_id` varchar(300) NOT NULL,
  `comment` varchar(300) NOT NULL,
  `gender` varchar(300) NOT NULL,
  `Date` varchar(50) NOT NULL,
  KEY `name` (`name`),
  KEY `mail_id` (`mail_id`),
  KEY `comment` (`comment`),
  KEY `comment_2` (`comment`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`name`, `mail_id`, `comment`, `gender`, `Date`) VALUES
('Jaydeb', 'jaydeb.ruet@gmail.com', 'I like banana', 'male', '2015-02-07 23:59:03'),
('sagor', 'sagor.ruet@gmail.com', 'I like mango', 'male', '2015-02-08 12:11:01'),
('Mahmud', 'mahmud.ruet@gmail.com', 'I like apple', 'male', '2015-02-09 10:26:58'),
('Jaydeb Sarker', 'jaydeb.ruet@gmail.com', 'I like ooo', 'male', '2015-02-12 10:04:27'),
('Puspen', 'puspen.ruet@gmail.com', 'I want to buy guava', 'male', '2015-02-15 00:08:03'),
('Jaydeb Sarker', 'jaydeb.ruet@gmail.com', 'I want to buy mango', 'male', '2015-02-22 00:50:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE IF NOT EXISTS `tbl_registration` (
  `email` varchar(40) NOT NULL default '',
  `password` varchar(40) NOT NULL,
  PRIMARY KEY  (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`email`, `password`) VALUES
('jaydeb.ruet@gmail.com', '12345'),
('jaydeb@gmail.com', 'hut65'),
('sumon.gre@yahoo.com', '234'),
('bristi@yahoo.com', '1234'),
('sydur.ruet@gmail.com', 'mousumi'),
('rasel.ruet@gmail.com', '12345'),
('mahmud.ruet@gmail.com', '12345'),
('puspen.ruet@gmail.com', '123');
