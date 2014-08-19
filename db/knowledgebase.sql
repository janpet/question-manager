-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2014 at 06:35 AM
-- Server version: 5.6.11-log
-- PHP Version: 5.4.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `knowledgebase`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cid` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cid`, `name`) VALUES
(1, 'povijest'),
(2, 'sport'),
(3, 'kultura'),
(4, 'politika'),
(5, 'znanost');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `qid` int(6) NOT NULL AUTO_INCREMENT,
  `cid` int(5) NOT NULL,
  `time` date NOT NULL,
  `question` text COLLATE utf8_bin NOT NULL,
  `answer` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=16 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `cid`, `time`, `question`, `answer`) VALUES
(1, 1, '2014-04-01', 'Prvo pitanjeee', 'Odgovor na prvo pitanje3'),
(2, 2, '2014-03-12', 'Kaj ima lima?', 'Ima svašta stari'),
(4, 3, '2014-05-20', 'Da li sam u pravu?', 'Jesam, naravno!'),
(6, 4, '2014-05-20', 'Koji je glavni grad Hrvatske?', 'Naravno da je Zagreb! '),
(9, 4, '2014-05-20', ' aaaaaaaaaaaaa', ' bbbbbbbbb'),
(10, 3, '2014-05-20', 'pppppp', ' aaaaa'),
(13, 2, '2014-05-20', ' uuuuu', ' eeeeeeee'),
(14, 5, '2014-05-20', ' znanstveno pitanje', ' znanstveni odgovor'),
(15, 1, '2014-05-20', ' jebenica2', ' hdfrew');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
