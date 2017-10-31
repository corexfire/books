-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2017 at 02:26 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bk_book`
--

CREATE TABLE `bk_book` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date_published` date NOT NULL,
  `author` varchar(255) NOT NULL,
  `number_of_pages` int(11) NOT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bk_book`
--

INSERT INTO `bk_book` (`id`, `title`, `date_published`, `author`, `number_of_pages`, `id_type`) VALUES
(1, 'National Geographic', '2017-10-31', 'Nat Publisher', 100, 2),
(3, 'NVC', '2017-10-10', 'DASD', 200, 1),
(5, 'Magic', '2017-10-20', 'Zubair', 100, 2);

-- --------------------------------------------------------

--
-- Table structure for table `bk_type`
--

CREATE TABLE `bk_type` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bk_type`
--

INSERT INTO `bk_type` (`id`, `description`) VALUES
(1, 'One of novel'),
(2, 'Documentation'),
(3, 'Other');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bk_book`
--
ALTER TABLE `bk_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bk_type`
--
ALTER TABLE `bk_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bk_book`
--
ALTER TABLE `bk_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bk_type`
--
ALTER TABLE `bk_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
