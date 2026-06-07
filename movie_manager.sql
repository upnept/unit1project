-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 07, 2026 at 01:39 AM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `movieID` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `rating` decimal(3,1) NOT NULL,
  `year` int NOT NULL,
  PRIMARY KEY (`movieID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movieID`, `title`, `genre`, `rating`, `year`) VALUES
(1, 'Project Hail Mary', 'Sci-Fi', 9.1, 2026),
(2, 'Backrooms', 'Horror', 7.8, 2026),
(3, '28 Years Later', 'Horror', 8.2, 2026),
(4, 'The Devil Wears Prada 2', 'Comedy', 7.5, 2026),
(5, 'Scary Movie 6', 'Comedy', 6.9, 2026),
(6, 'I Love Boosters', 'Comedy', 8.0, 2026),
(7, 'Obsession', 'Thriller', 7.3, 2026),
(8, 'The Super Mario Galaxy Movie', 'Animation', 8.4, 2026),
(9, 'Seven Snimpers', 'Action', 7.1, 2026),
(10, 'The Furious', 'Action', 6.8, 2026);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
