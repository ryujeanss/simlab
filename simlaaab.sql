-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 09:06 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simlaaab`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_alat`
--

CREATE TABLE `form_alat` (
  `alat_id` int(11) NOT NULL,
  `fa_name` text NOT NULL,
  `fa_matkul` text NOT NULL,
  `fa_nim` int(11) NOT NULL,
  `fa_alat` varchar(200) NOT NULL,
  `fa_email` varchar(200) NOT NULL,
  `fa_nohp` int(13) NOT NULL,
  `fa_tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `form_lab`
--

CREATE TABLE `form_lab` (
  `lab_id` int(11) NOT NULL,
  `fl_nama` text NOT NULL,
  `fl_matkul` text NOT NULL,
  `fl_nim` int(11) NOT NULL,
  `fl_lab` text NOT NULL,
  `fl_email` varchar(200) NOT NULL,
  `fl_nohp` int(13) NOT NULL,
  `fl_tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form_alat`
--
ALTER TABLE `form_alat`
  ADD PRIMARY KEY (`alat_id`);

--
-- Indexes for table `form_lab`
--
ALTER TABLE `form_lab`
  ADD PRIMARY KEY (`lab_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form_alat`
--
ALTER TABLE `form_alat`
  MODIFY `alat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_lab`
--
ALTER TABLE `form_lab`
  MODIFY `lab_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
