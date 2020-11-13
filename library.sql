-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2020 at 07:13 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--
CREATE DATABASE IF NOT EXISTS `library` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `library`;

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `ID_A` int(11) NOT NULL,
  `fName` varchar(150) DEFAULT NULL,
  `surname` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`ID_A`, `fName`, `surname`) VALUES
(21, 'Joanne', 'Rowling'),
(22, 'Joanne', 'Rowling'),
(23, 'Joanne', 'Rowling'),
(24, 'Joanne', 'Rowling'),
(25, '', 'Rowling');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `ID_M` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL,
  `FK_ID_A` int(11) DEFAULT NULL,
  `ISBN` int(13) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `FK_ID_P` int(11) DEFAULT NULL,
  `type` varchar(32) DEFAULT NULL,
  `state` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`ID_M`, `title`, `img`, `FK_ID_A`, `ISBN`, `description`, `publish_date`, `FK_ID_P`, `type`, `state`) VALUES
(12, 'Harry Potter and the Philosophers Stone', 'https://images-na.ssl-images-amazon.com/images/I/81YOuOGFCJL.jpg', 21, 2147483647, 'First book of 7', '1997-06-26', 21, 'book', 'available'),
(13, 'Harry Potter and the Chamber of Secrets', 'https://images-na.ssl-images-amazon.com/images/I/51jNORv6nQL.jpg', 22, 2147483647, 'Second book of 7', '1998-07-02', 22, 'book', 'available'),
(14, 'Harry Potter and the Chamber of Secrets', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTltzcooPkGcy1fKKqzSuO8U6S9XBpNDR9MuYc9SS_L5AbAn66O', 23, 0, 'Second Movie', '2002-11-14', 23, 'DVD', 'reserved'),
(15, 'Harry Potter and the Chamber of Secrets', 'https://images-na.ssl-images-amazon.com/images/I/51jNORv6nQL.jpg', 22, 2147483647, 'Second book of 7', '1998-07-02', 22, 'book', 'reserved'),
(16, 'Harry Potter and the Philosophers Stone', 'https://i5.walmartimages.com/asr/473391fe-9607-4d2b-ad7a-1beeb41b795c_1.e2de7d16a8ba252541d692f268bdda31.jpeg', 21, 0, 'First Movie of 7', '2001-11-26', 23, 'DVD', 'available'),
(17, 'Harry Potter and the Philosophers Stone', 'https://i5.walmartimages.com/asr/473391fe-9607-4d2b-ad7a-1beeb41b795c_1.e2de7d16a8ba252541d692f268bdda31.jpeg', 21, 0, 'First Movie of 7', '2001-11-26', 23, 'DVD', 'reserved'),
(18, 'Harry Potter and the Deathly Hallows', 'https://m.media-amazon.com/images/M/MV5BMTQ2OTE1Mjk0N15BMl5BanBnXkFtZTcwODE3MDAwNA@@._V1_UX182_CR0,0,182,268_AL_.jpg', 24, 0, 'First part of the last book.', '2010-11-17', 24, 'DVD', 'available'),
(19, 'Harry Potter and the Half-Blood Prince ', 'https://m.media-amazon.com/images/M/MV5BNzU3NDg4NTAyNV5BMl5BanBnXkFtZTcwOTg2ODg1Mg@@._V1_.jpg', 25, 0, 'The sixth instalment of the franchise ', '2009-07-16', 25, 'DVD', 'available'),
(20, 'Harry Potter and the Half-Blood Prince ', 'https://m.media-amazon.com/images/M/MV5BNzU3NDg4NTAyNV5BMl5BanBnXkFtZTcwOTg2ODg1Mg@@._V1_.jpg', 25, 0, 'The sixth instalment of the franchise ', '2009-07-16', 25, 'CD', 'reserved'),
(21, 'Harry Potter and the Half-Blood Prince ', 'https://m.media-amazon.com/images/M/MV5BNzU3NDg4NTAyNV5BMl5BanBnXkFtZTcwOTg2ODg1Mg@@._V1_.jpg', 25, 0, 'The sixth instalment of the franchise ', '2009-07-16', 25, 'DVD', 'reserved'),
(22, 'Harry Potter and the Chamber of Secrets', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTltzcooPkGcy1fKKqzSuO8U6S9XBpNDR9MuYc9SS_L5AbAn66O', 23, 0, 'Second Movie', '2002-11-14', 23, 'DVD', 'availabe');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `ID_P` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `size` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`ID_P`, `name`, `address`, `size`) VALUES
(21, 'Bloomsbury', 'London, United Kingdom', 'large'),
(22, 'Bloomsbury', 'London, United Kingdom', 'large'),
(23, 'Warner Brothers', 'Los Angeles, CA, USA', 'large'),
(24, 'Warner Brothers', 'Los Angeles, CA, USA', 'large'),
(25, '', '', 'large');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`ID_A`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`ID_M`),
  ADD KEY `FK_ID_A` (`FK_ID_A`),
  ADD KEY `FK_ID_P` (`FK_ID_P`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`ID_P`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `ID_A` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `ID_M` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `ID_P` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`FK_ID_A`) REFERENCES `author` (`ID_A`),
  ADD CONSTRAINT `media_ibfk_2` FOREIGN KEY (`FK_ID_P`) REFERENCES `publisher` (`ID_P`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
