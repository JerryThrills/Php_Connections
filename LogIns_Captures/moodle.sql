-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2022 at 07:41 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moodle_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `moodle`
--

CREATE TABLE `moodle` (
  `Username` varchar(25) NOT NULL,
  `Registration_Number` varchar(10) NOT NULL,
  `Acess_Number` varchar(15) NOT NULL,
  `Year` int(1) NOT NULL,
  `Course` varchar(7) NOT NULL,
  `Semester` varchar(2) NOT NULL,
  `Amount_Paid` int(8) NOT NULL,
  `Balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moodle`
--
/*Just a demo of the input captured form the form plus some calculations of the 
the Balance*/;
INSERT INTO `moodle` (`Username`, `Registration_Number`, `Acess_Number`, `Year`, `Course`, `Semester`, `Amount_Paid`, `Balance`) VALUES
('WAMALA JERIMIAH', 'S20B13/256', '2', 0, 'BSIT-1', '45', 0, 0),
('Nabimanya Rinah', 'S20B13/086', 'A90501', 1, 'BSWAS', '3', 250000, 0),
('Nuwaherweza Ronah', 'S20B13/085', 'A98901', 4, 'SocialW', '2', 2450000, 0),
('Kent Kyeswa', 'S20B13/056', 'A97801', 3, 'BSWASA', '2', 3500000, 500000),
('Weskisa John', 'S20B13/047', 'A8945', 1, 'BSCS-2', '3', 6700000, -2700000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
