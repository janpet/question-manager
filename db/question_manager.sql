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
-- Database: `question_manager`
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
(1, 'economy'),
(2, 'politics'),
(3, 'culture'),
(4, 'sport'),
(5, 'science');

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
(1, 1, '2014-02-04', 'Who is the richest man in the world ?', 'The richest man is Bill Gates'),
(2, 1, '2014-02-12', 'What is the name if currency in Japan', 'Japanese currency is named Yen'),
(3, 2, '2014-03-20', 'What is the capital of Portugal ?', 'Capital of Portugal is Lisabon'),
(4, 2, '2014-04-02', 'How many states are part of European Union', 'European Union has 28 members'),
(5, 3, '2014-04-09', 'Name the most famous painting in the world', 'The most famous painting is Mona Lisa by Leonardo da Vinci'),
(6, 3, '2014-04-17', 'Culture question 2',''),
(7, 4, '2014-04-25', 'Who won the last world cup ?', 'Germany won the last world cup'),
(8, 4, '2014-05-03', 'Sport question 2 ?',''),
(9, 5, '2014-05-19', 'Science question 1?', 'Science answer 1');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
