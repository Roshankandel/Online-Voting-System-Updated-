-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2022 at 02:30 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votingv2`
--

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` int(11) NOT NULL,
  `voter_id` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(30) NOT NULL,
  `fathername` varchar(30) NOT NULL,
  `citznum` varchar(30) NOT NULL,
  `idate` varchar(30) NOT NULL,
  `pphoto` varchar(150) NOT NULL,
  `citzphoto` varchar(150) NOT NULL,
  `district` varchar(30) NOT NULL,
  `municipality` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `votingstatus` tinyint(1) NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `code` int(11) NOT NULL,
  `mailstatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `voter_id`, `password`, `fullname`, `dob`, `gender`, `fathername`, `citznum`, `idate`, `pphoto`, `citzphoto`, `district`, `municipality`, `email`, `votingstatus`, `verified`) VALUES
(2, 'vthBEcV5pzyos2X', 'abc', 'fhsjf', '2022-10-13', 'Male', 'fhlfhg', '84', '2022-10-20', 'IMG-5440 (3).jpg', ' IMG-5440 (2).jpg', 'mvf', 'mv', 'abc@gmail.com', 0, 0),
(3, 'VWq6keaFRps1m8S', 'abc', 'fh', '2022-10-13', 'Male', 'fhlfhg', '84', '2022-10-20', 'IMG-5440 (3).jpg', ' IMG-5440 (3).jpg', 'mvf', 'mv', 'abc@gmail.com', 0, 0),
(4, 'XES736iLGjTNVOs', 'abc', 'localhost', '2022-10-12', 'Male', 'djabjfga', '71577650', '2015-07-05', 'IMG-5440 (2).jpg', ' IMG-5440 (3).jpg', 'yqyqi', '7156598', 'abc@gmail.com', 0, 0),
(5, 'pC4HZTb8f9YDj7q', 'abc', 'jrojvqoi', '2001-11-22', 'Male', 'dfhglhrqgv', '74979', '2022-10-13', 'IMG-5440 (2).jpg', ' IMG-5440 (1).jpg', 'qtyio', 'kfvjghlfg', 'hello@gmail.com', 0, 0),
(6, 'PZ5jRbYVe647ilo', 'abc', 'njkewfhe', '2001-10-08', 'Male', 'gihrtgu', '7457580', '2022-10-05', 'IMG-5440 (3).jpg', ' IMG-5440 (1).jpg', 'jhuityyut', 'hghjguittu', 'abc1@gmail.com', 0, 0),
(7, 'EmypF5qUkLQNVlb', 'abc', 'lfjrj', '2001-09-30', 'Female', 'hvjg;j', '123', '2022-10-19', 'IMG-5440 (3).jpg', ' 1FF39F7F-2407-4941-A098-A1125AB69B64.JPG', 'baglung', 'kathekhola', 'roshan@gmail.com', 0, 0),
(8, 'Oks6wAbicTgde8q', 'abc', 'anfr', '2001-09-28', 'Female', 'fvjhg', '123', '0018-09-08', 'IMG-5440 (2).jpg', ' IMG-5440 (2).jpg', 'hrfyiu', 'njktgkj', 'abc12@gmail.com', 0, 0),
(9, 'JHMar5b8wVpXs9L', 'abc', '.rhfrg', '2001-11-11', 'Female', 'nkghtg', '123', '2022-09-27', 'IMG-5440 (2).jpg', ' IMG-5440 (3).jpg', '132', '23', 'abc1111@gmail.com', 0, 0),
(10, '3RyFIXDCS58qG9T', 'abc', 'rhfrg', '2001-11-11', 'Male', 'nkghtgh', '123544754675', '2022-09-27', 'IMG-5440 (3).jpg', ' IMG-5440 (2).jpg', '132', '23', 'abc1111555@gmail.com', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
