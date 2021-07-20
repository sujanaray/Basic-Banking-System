-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2021 at 07:52 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparks_foundation_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers_details`
--

CREATE TABLE `customers_details` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `balance` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers_details`
--

INSERT INTO `customers_details` (`id`, `name`, `email`, `balance`) VALUES
(1001, 'Sunit Kapoor', 'sunit12@gmail.com', 35000),
(1004, 'Ranadip Sharma', 'rsharma@gmail.com', 25000),
(1107, 'Sushmita Khan', 'sushmita23@gmail.com', 50000),
(1204, 'Payal Biswas', 'pbiswas19@gmail,com', 100000),
(1138, 'Sham Sundar', 'shamss@gmail.com', 123000),
(1009, 'Hardip Khoor', 'hardip1237@gmail.com', 78500),
(1010, 'Abhay Singh', 'abhays@gmail.com', 35000),
(1210, 'Ratan Ghosh', 'rghosh@gmail.com', 85000),
(1150, 'Liza Agarwal', 'lizagarwal@gmail.com', 204000),
(1186, 'Ram Shukla', 'rshukla99@gmail.com', 87000);

-- --------------------------------------------------------

--
-- Table structure for table `transfer_history`
--

CREATE TABLE `transfer_history` (
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer_history`
--

INSERT INTO `transfer_history` (`sender`, `receiver`, `amount`) VALUES
('Liza Agarwal', 'Ranadip Sharma', 5000),
('Ranadip Sharma', 'Sunit Kapoor', 5000),
('Liza Agarwal', 'Abhay Singh', 1000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
