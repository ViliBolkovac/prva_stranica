-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 06:07 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

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
  `id` int(55) NOT NULL,
  `korisnickoime` varchar(265) NOT NULL,
  `zaporka` varchar(265) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `korisnickoime`, `zaporka`) VALUES
(1, 'vili1', '$2y$10$5.kqadpTTl61/uwu77YMZuqIrsfnXukpGvmm/nFDb96u6u4RTrIa6');

-- --------------------------------------------------------

--
-- Table structure for table `log_tablica`
--

CREATE TABLE `log_tablica` (
  `id` int(55) NOT NULL,
  `korisnickoime` varchar(265) NOT NULL,
  `datum` varchar(55) NOT NULL,
  `vrijeme` varchar(55) NOT NULL,
  `status_` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_tablica`
--

INSERT INTO `log_tablica` (`id`, `korisnickoime`, `datum`, `vrijeme`, `status_`) VALUES
(3, 'vili1', '04/01/2022', '12:39:29pm', 'ulogiran'),
(4, 'vili1', '04/01/2022', '12:39:30pm', 'izlogiran'),
(5, 'vili1', '04/01/2022', '12:55:53pm', 'ulogiran'),
(6, 'vili1', '04/01/2022', '12:56:39pm', 'ulogiran'),
(7, 'vili1', '04/01/2022', '12:56:48pm', 'izlogiran'),
(8, 'vili1', '04/01/2022', '01:04:23pm', 'ulogiran'),
(9, 'vili1', '04/01/2022', '01:04:27pm', 'izlogiran'),
(10, 'vili1', '04/01/2022', '01:19:09pm', 'ulogiran'),
(11, 'vili1', '04/01/2022', '01:19:34pm', 'ulogiran'),
(12, 'vili1', '04/01/2022', '01:22:12pm', 'izlogiran'),
(13, 'vili1', '04/01/2022', '01:34:07pm', 'ulogiran'),
(14, 'vili1', '04/01/2022', '01:34:29pm', 'izlogiran'),
(15, 'vili1', '06/01/2022', '12:05:22am', 'ulogiran'),
(16, 'vili1', '06/01/2022', '12:19:02am', 'ulogiran'),
(17, 'vili1', '06/01/2022', '12:34:29am', 'izlogiran'),
(18, 'vili1', '06/01/2022', '12:45:53am', 'ulogiran'),
(19, 'vili1', '06/01/2022', '12:46:44am', 'izlogiran');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_tablica`
--
ALTER TABLE `log_tablica`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log_tablica`
--
ALTER TABLE `log_tablica`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
