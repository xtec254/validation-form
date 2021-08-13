-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2021 at 09:56 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hugh`
--

-- --------------------------------------------------------

--
-- Table structure for table `lewi`
--

CREATE TABLE `hugh` (
  `First` varchar(200) NOT NULL,
  `Middle` varchar(200) NOT NULL,
  `Last` varchar(200) NOT NULL,
  `Birthday` varchar(200) NOT NULL,
  `Citizenship` varchar(200) NOT NULL,
  `nationality` varchar(200) NOT NULL,
  `Identification` varchar(200) NOT NULL,
  `Studies` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `Education` varchar(200) NOT NULL,
  `others` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `Language` varchar(200) NOT NULL,
  `Religious` varchar(200) NOT NULL,
  `affiliation` varchar(200) NOT NULL,
  `postal` varchar(200) NOT NULL,
  `code` varchar(200) NOT NULL,
  `Town` varchar(200) NOT NULL,
  `pcountry` varchar(200) NOT NULL,
  `Mobile` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
