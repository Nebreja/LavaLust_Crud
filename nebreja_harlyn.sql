-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 09, 2024 at 02:37 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nebreja_harlyn`
--

-- --------------------------------------------------------

--
-- Table structure for table `hpn_users`
--

DROP TABLE IF EXISTS `hpn_users`;
CREATE TABLE IF NOT EXISTS `hpn_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `hpn_last_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `hpn_first_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `hpn_email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `hpn_gender` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `hpn_address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hpn_users`
--

INSERT INTO `hpn_users` (`id`, `hpn_last_name`, `hpn_first_name`, `hpn_email`, `hpn_gender`, `hpn_address`) VALUES
(2, 'Fababaer', 'Ivan', 'fababaer@gmail.com', 'Male', 'Laguna, Naujan'),
(3, 'Nebreja', 'Harlyn', 'nebreja@gmail.com', 'Female', 'Laguna, Naujan'),
(5, 'Tupaz', 'Daryll', 'tupaz@gmail.com', 'Male', 'Puerto Galera');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
