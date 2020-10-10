-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2020 at 06:42 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `sheet`
--
--
CREATE TABLE `sheet` (
  `name` varchar(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `html` int(11) NOT NULL,
  `mysql` int(11) NOT NULL,
  `php` int(11) NOT NULL,
  `percentage` int(11) NOT NULL,
  `result` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sheet`
--

INSERT INTO `sheet` (`name`, `username`, `html`, `mysql`, `php`, `percentage`, `result`) VALUES
('Siddesh', 'supersid69', 56, 85, 74, 72, 'P'),
('Sarvesh', 'idioticsaru', 100, 100, 100, 100, 'P'),
('Shreedhar', 'scipt_kiddie', 100, 90, 80, 90, 'P'),
('Prasad', 'prasad_007', 100, 100, 95, 98, 'P'),
('Himanshu', 'Blackout_Himan', 100, 80, 90, 90, 'P');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `username`, `password`) VALUES
('Siddesh', 'supersid69', '7bccfde7714a1ebadf06c5f4cea752c1'),
('Sarvesh', 'idioticsaru', '7813d1590d28a7dd372ad54b5d29d033'),
('Shreedhar', 'scipt_kiddie', '22ac3c5a5bf0b520d281c122d1490650'),
('Prasad', 'prasad_007', '9e94b15ed312fa42232fd87a55db0d39'),
('Himanshu', 'Blackout_Himan', 'eb62f6b9306db575c2d596b1279627a4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
