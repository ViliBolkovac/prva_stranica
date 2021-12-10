-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 11:19 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prvastranica`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `Id` int(11) NOT NULL,
  `korisnickoime` varchar(265) NOT NULL,
  `zaporka` varchar(265) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`Id`, `korisnickoime`, `zaporka`) VALUES
(15, 'vili1', '$2y$10$YBjAUgvugTXXYMd4eezI0.4fWTLd9HxcybWXhnG3mIs7E5sZ.BfDS');

-- --------------------------------------------------------

--
-- Table structure for table `log_tablica`
--

CREATE TABLE `log_tablica` (
  `ID` int(11) NOT NULL,
  `korisnickoime` varchar(45) NOT NULL,
  `datum` varchar(45) NOT NULL,
  `vrijeme` varchar(45) NOT NULL,
  `status_` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_tablica`
--

INSERT INTO `log_tablica` (`ID`, `korisnickoime`, `datum`, `vrijeme`, `status_`) VALUES
(6, 'vili1', '09/12/2021', '09:47:43pm', 'ulogiran'),
(7, 'vili1', '09/12/2021', '09:48:33pm', 'izlogiran');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `log_tablica`
--
ALTER TABLE `log_tablica`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `log_tablica`
--
ALTER TABLE `log_tablica`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
