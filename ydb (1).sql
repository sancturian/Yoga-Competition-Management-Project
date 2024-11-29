-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 04, 2018 at 06:25 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ydb`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `winner`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `winner` ()  NO SQL
SELECT abc.player_id,MAX(totalmarks) AS winner FROM ( SELECT player_id,SUM(judges.marks) AS totalmarks FROM judges GROUP BY judges.player_id) AS abc CROSS JOIN competitors.name$$

DROP PROCEDURE IF EXISTS `winner1`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `winner1` ()  NO SQL
SELECT  SUM(judges.marks),judges.player_id,competitors.name from judges INNER JOIN competitors ON judges.player_id=competitors.player_id GROUP BY judges.player_id ORDER BY SUM(judges.marks) DESC$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `competitors`
--

DROP TABLE IF EXISTS `competitors`;
CREATE TABLE IF NOT EXISTS `competitors` (
  `player_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `age_group` char(10) NOT NULL,
  `dob` date NOT NULL,
  `gender` char(8) NOT NULL,
  `district` varchar(30) NOT NULL,
  PRIMARY KEY (`player_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `competitors`
--

INSERT INTO `competitors` (`player_id`, `name`, `age_group`, `dob`, `gender`, `district`) VALUES
(1, 'shubhankar', '13-18', '2018-09-04', 'male', 'pune'),
(2, 'nishant', '19-28', '2018-09-27', 'male', 'sangli'),
(3, 'sherlock', '19-28', '2018-10-22', 'Male', 'nagpur'),
(11, 'harshal', '13-18', '2018-09-21', 'male', 'nagpur'),
(12, 'hj', '13-18', '2018-10-26', 'Male', 'ahmednagar'),
(18, 'j', '13-18', '2018-10-06', 'Male', 'ahmednagar'),
(19, 'sajsjd', '13-18', '2018-10-24', 'female', 'sangli');

-- --------------------------------------------------------

--
-- Table structure for table `judges`
--

DROP TABLE IF EXISTS `judges`;
CREATE TABLE IF NOT EXISTS `judges` (
  `judgename` varchar(30) NOT NULL,
  `marks` int(11) NOT NULL,
  `player_id` int(11) NOT NULL,
  KEY `player_id` (`player_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `judges`
--

INSERT INTO `judges` (`judgename`, `marks`, `player_id`) VALUES
('mohandas', 5, 1),
('karamchand', 4, 1),
('munshi', 5, 1),
('kalyani', 4, 1),
('priya', 5, 1),
('mohandas', 1, 2),
('karamchand', 5, 2),
('munshi', 2, 2),
('kalyani', 5, 2),
('priya', 3, 2),
('mohandas', 1, 11),
('karamchand', 5, 11),
('munshi', 4, 11),
('kalyani', 5, 11),
('priya', 2, 11),
('mohandas', 1, 12),
('karamchand', 5, 12),
('munshi', 5, 12),
('kalyani', 4, 12),
('priya', 1, 12),
('mohandas', 5, 3),
('karamchand', 5, 3),
('munshi', 5, 3),
('kalyani', 5, 3),
('priya', 5, 3),
('mohandas', 1, 18),
('mohandas', 1, 18),
('mohandas', 5, 19);

--
-- Triggers `judges`
--
DROP TRIGGER IF EXISTS `marksupdate`;
DELIMITER $$
CREATE TRIGGER `marksupdate` BEFORE INSERT ON `judges` FOR EACH ROW IF NEW.marks < 1
	THEN SET NEW.marks = 1;
ELSEIF NEW.marks > 5
	THEN SET NEW.marks = 5;
END IF
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'skj', 'shubhankar2512@gmail.com', 'edab074acc03cd820a9930cd491e2a0e'),
(2, 'shubhankar', 'nishantlangade@gmail.com', '0e11d184398255abe79cac2d7d7fec73'),
(3, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(4, 's_ranvare', 'surajranvare678@gmail.com', '42bacbe73996d52573bde0921ec2255a'),
(5, 'abc', 'abc@gmail.com', '900150983cd24fb0d6963f7d28e17f72');

-- --------------------------------------------------------

--
-- Table structure for table `yoga`
--

DROP TABLE IF EXISTS `yoga`;
CREATE TABLE IF NOT EXISTS `yoga` (
  `yoga_id` int(11) NOT NULL AUTO_INCREMENT,
  `yoganame` varchar(30) NOT NULL,
  `player_id` int(11) NOT NULL,
  PRIMARY KEY (`yoga_id`),
  KEY `player_id` (`player_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yoga`
--

INSERT INTO `yoga` (`yoga_id`, `yoganame`, `player_id`) VALUES
(1, 'tadasana', 1),
(2, 'shavasana', 1),
(3, 'bakrasana', 1),
(4, 'bagulasana', 1),
(5, 'makrasana', 1),
(6, 'shavasana', 2),
(7, 'tadasana', 2),
(8, 'medhashakti', 2),
(9, 'bagulasana', 2),
(10, 'netrashakti', 2),
(11, 'shavasana', 11),
(12, 'tadasana', 11),
(13, 'padmasan', 11),
(14, 'devasana', 11),
(15, 'drishtiasana', 11),
(17, 'tadasana', 18),
(18, 'tadasana', 18),
(20, 'shavasana', 19);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `judges`
--
ALTER TABLE `judges`
  ADD CONSTRAINT `playercheck` FOREIGN KEY (`player_id`) REFERENCES `competitors` (`player_id`);

--
-- Constraints for table `yoga`
--
ALTER TABLE `yoga`
  ADD CONSTRAINT `playercheck1` FOREIGN KEY (`player_id`) REFERENCES `competitors` (`player_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
