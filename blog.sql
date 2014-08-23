-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 23, 2014 at 08:32 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blog`;

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `artid` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `comments` text NOT NULL,
  `date_posted` date NOT NULL DEFAULT '0000-00-00',
  `categoryID` int(4) NOT NULL DEFAULT '0',
  `artchild` int(5) NOT NULL DEFAULT '0',
  `img` varchar(255) NOT NULL DEFAULT 'a.jpg',
  PRIMARY KEY (`artid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`artid`, `name`, `title`, `comments`, `date_posted`, `categoryID`, `artchild`, `img`) VALUES
(3, 'asha', 'water pollution is very harmfull', 'Most of the fields in the table should be self explanatory, except perhaps the â€œartchildâ€ column. The artchild column will hold the message ID of a message that users reply to. This is how it works: the first time a article is written, its artchild value will be â€œ0â€ and it will have an automatically created number. When a response is created to this article the new response articleâ€™s artchild will have the auto number value added to its artchild column.', '2014-08-01', 1, 0, 'a.jpg'),
(4, 'asha', 'air pollution', 'asdksg xadsdb sdfasd sdfasd   ldsafdas sdfas fdsf as f sdf asdf ', '2014-08-04', 2, 3, '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `catid` int(5) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`catid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catid`, `category`) VALUES
(1, 'Water'),
(2, 'Air'),
(3, 'Sound'),
(4, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `artid` int(11) NOT NULL,
  `replay` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT 'Unknown',
  `date` date NOT NULL DEFAULT '0000-00-00',
  `time` time NOT NULL,
  `email` varchar(255) NOT NULL DEFAULT 'emaild@something.com',
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`rid`, `artid`, `replay`, `name`, `date`, `time`, `email`) VALUES
(1, 3, 'Pollution is the introduction of contaminants into the natural environment that cause adverse change. Pollution can take the form of chemical substances or energy, such as noise, heat or light.', 'Unknown', '2014-08-23', '00:00:00', 'emaild@something.com'),
(28, 3, 'Most of the fields in the table should be self explanatory, except perhaps the â€œartchildâ€ column. The artchild column will hold the message ID of a message that users reply to. This is how it works: the first time a article is written, its artchild value ', 'asha', '2014-08-23', '18:18:41', 'zarrintasnim.ku.cse.11@gmail.com'),
(47, 4, 'Most of the fields in the table should be self explanatory, except perhaps the â€œartchildâ€ column. The artchild column will hold the message ID of a message that users reply to. This is how it works: the first time a article is written, its artchild value', 'asha', '2014-08-23', '19:16:55', 'zarrintasnim.ku.cse.11@gmail.com'),
(48, 4, 'Most of the fields in the table should be self explanatory, except perhaps the â€œartchildâ€ column. The artchild column will hold the message ID of a message that users reply to. This is how it works: the first time a article is written, its artchild value', 'asha', '2014-08-23', '19:17:11', 'zarrintasnim.ku.cse.11@gmail.com'),
(49, 4, 'Most of the fields in the table should be self explanatory, except perhaps the â€œartchildâ€ ', 'simi', '2014-08-24', '00:27:01', 'zarrintasnim.ku.cse.11@gmail.com'),
(50, 3, 's cgxz f lx, fxlj fgx.l     cv bclv bvcb d;og ;cxv ;cv  ,c vbd.g xcv jxlk c.vx ghdf,vcx gc,vkb.dfb gc', 'Shorna', '2014-08-24', '02:01:59', 'sharna1367@gmail.com'),
(51, 3, 's cgxz f lx, fxlj fgx.l cv bclv bvcb d;og ;cxv ;cv ,c vbd.g xcv jxlk c.vx ghdf,vcx gc,vkb.dfb gc', 'simi', '2014-08-24', '02:09:48', 'nirobota2011@hotmail.com'),
(53, 3, 'xcvxcv.nx;c lv;dofjgd;j g', '', '2014-08-24', '02:20:11', 'rosni.bd@gmail.com'),
(54, 3, 'Your email address will not be published. Required fields are marked ', 'dsfsdf', '2014-08-24', '02:21:26', 'rosni.bd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uname` varchar(255) NOT NULL,
  `pw` int(7) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_joined` date NOT NULL DEFAULT '0000-00-00',
  `ip` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `isbanned` varchar(255) NOT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uname`, `pw`, `email`, `date_joined`, `ip`, `level`, `isbanned`) VALUES
('asha', 1234567, 'asha.ku@hotmail.com', '2014-08-08', '::1', 'admin', 'no');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
