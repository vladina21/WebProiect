-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 02:58 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproiect`
--

-- --------------------------------------------------------

--
-- Table structure for table `detalii_clase`
--

CREATE TABLE `detalii_clase` (
  `ID` int(60) NOT NULL,
  `clasa` varchar(32) NOT NULL,
  `dirig_inv` varchar(64) NOT NULL,
  `program` varchar(256) NOT NULL,
  `orar` varchar(256) NOT NULL,
  `com_parinti` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detalii_clase`
--

INSERT INTO `detalii_clase` (`ID`, `clasa`, `dirig_inv`, `program`, `orar`, `com_parinti`) VALUES
(1, '1A', 'Hariga George', '8:00-14:00', 'link', 'link');

-- --------------------------------------------------------

--
-- Table structure for table `utilizatori`
--

CREATE TABLE `utilizatori` (
  `ID` int(11) NOT NULL,
  `Nume` varchar(100) NOT NULL,
  `Prenume` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Parola` varchar(64) NOT NULL,
  `Calitate` varchar(64) NOT NULL,
  `Username` varchar(60) NOT NULL,
  `Clasa` varchar(32) NOT NULL,
  `Numar_parinte` int(11) NOT NULL,
  `Disciplina` int(11) NOT NULL,
  `Grad_didactic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utilizatori`
--

INSERT INTO `utilizatori` (`ID`, `Nume`, `Prenume`, `Email`, `Parola`, `Calitate`, `Username`, `Clasa`, `Numar_parinte`, `Disciplina`, `Grad_didactic`) VALUES
(1, 'Surdu', 'Vladina', 'vladinasurdu@gmail.com', 'vladina', 'Elev', 'vld24', '8A', 740837998, 0, 0),
(2, 'Chirila', 'Carmen', 'carmenchirila@gmail.com', 'admin', 'Admin', 'admin', 'NULL', 0, 0, 0),
(3, 'Miron', 'Tudor', 'tudormiron19@gmail.com', 'tudor', 'Elev', 'Tudor.Miron', '2A', 749919964, 0, 0),
(8, 'Surdu', 'Mihaela', 'mihaelasurdu@gmail.com', 'mihaela', 'Invatator', 'Mihaela.Surdu', 'NULL', 0, 0, 0),
(9, 'Hariga', 'George', 'georgehariga@mta.ro', '1234', 'Profesor', 'George.Hariga', 'NULL', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detalii_clase`
--
ALTER TABLE `detalii_clase`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `utilizatori`
--
ALTER TABLE `utilizatori`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detalii_clase`
--
ALTER TABLE `detalii_clase`
  MODIFY `ID` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `utilizatori`
--
ALTER TABLE `utilizatori`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
