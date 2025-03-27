-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 04:40 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `i-enroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `user-admin`
--

CREATE TABLE `user-admin` (
  `id` int(11) NOT NULL,
  `idAdmin` varchar(100) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `lName` varchar(50) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `mName` varchar(50) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user-admin`
--

INSERT INTO `user-admin` (`id`, `idAdmin`, `username`, `password`, `lName`, `fName`, `mName`, `email`) VALUES
(3, 'admin2022init', 'admin', '0CVtrZH7ZysfKssDFQeoZQ==', 'admin', 'admin', 'admin', 'G5Vgc5AUmOiwOv0vtsLi7VEqAHbnlIkEtk+faqnFvPw='),
(5, 'admin2022inosidi.andrei', 'andreii', 'fwo1Pu+XTWUEMga+iEI2yA==', 'Inosidi', 'Andrei', 'Geraldino', 'jH2/uP1udkacdhcgFgGl3BQ/hcO8S40XQysBcgKTr1Q=');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user-admin`
--
ALTER TABLE `user-admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idAdmin` (`idAdmin`),
  ADD UNIQUE KEY `email` (`email`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user-admin`
--
ALTER TABLE `user-admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
