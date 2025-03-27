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
-- Table structure for table `user-faculty`
--

CREATE TABLE `user-faculty` (
  `id` int(11) NOT NULL,
  `idFaculty` varchar(50) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `mName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `department` varchar(10) NOT NULL,
  `curriculum` varchar(10) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user-faculty`
--

INSERT INTO `user-faculty` (`id`, `idFaculty`, `fName`, `mName`, `lName`, `department`, `curriculum`, `password`, `email`) VALUES
(6, 'tomagan.ariel', 'Ariel', '', 'Tomagan', 'CICT', 'BSCS', 'jXxJcC9hhrVzg+f3I/dVFA==', '766NDJMMXc4WEHEvZWQP+q+znMTyEBXaXcTuSiG1aDI='),
(7, 'vinalon.haidee', 'Haidee', 'Argana', 'Vinalon', 'CICT', 'BSCS', 'AH06HQO2IVRGKqVRJA0C6g==', 'wFd75Gt5VXRmfPngCTTq20uhpWb/LL7YtCnoMii6FR0='),
(8, 'nuez.jeric', 'Jeric', '', 'Nuez', 'CICT', 'BSCS', 'rk2Kn41Oh3i61ZN9uos9og==', 'ZS5aKcWoaPECrI2itjkktg=='),
(9, 'pineda.arlene', 'Arlene', '', 'Pineda', 'CICT', 'BSCS', 'qCL44Yq4X+AIuD+TlEGHhg==', 'Fj7l1KURxHdBIzVna+SZQw=='),
(10, 'calderon.joelvilzon', 'Joelvilzon', 'Macuja', 'Calderon', 'CICT', 'BSCS', 'tSRmSICUhd4rk5nQ2sPs8g==', 'nSFocAfoGbuvDy/annTyrA=='),
(11, 'cruz.mark', 'Mark', '', 'Cruz', 'CAS', 'BSCS', 'g+VEJIPNXoUpjdlVdRlBCw==', 'D/9Bv3jc5VbEVXCO5dRIpg==');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user-faculty`
--
ALTER TABLE `user-faculty`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idFaculty` (`idFaculty`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user-faculty`
--
ALTER TABLE `user-faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
