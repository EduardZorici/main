-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 27, 2022 at 08:11 PM
-- Server version: 5.7.33-36
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `00438050_modx_project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_curse`
--

CREATE TABLE `tbl_curse` (
  `id_ruta` int(10) NOT NULL,
  `id_cursa` int(10) UNSIGNED NOT NULL,
  `ora_cursa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_curse`
--

INSERT INTO `tbl_curse` (`id_ruta`, `id_cursa`, `ora_cursa`) VALUES
(1, 1, '09:00'),
(1, 2, '12:00'),
(1, 3, '15:00'),
(1, 4, '19:00'),
(2, 5, '08:30'),
(2, 6, '13:30'),
(2, 7, '18:00'),
(3, 8, '10:00'),
(3, 9, '13:15'),
(3, 10, '16:30'),
(4, 11, '07:30'),
(4, 12, '11:00'),
(4, 13, '14:30'),
(4, 14, '18:00'),
(4, 15, '21:45'),
(5, 16, '08:30'),
(5, 17, '13:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_discounts`
--

CREATE TABLE `tbl_discounts` (
  `id_discount` int(10) NOT NULL,
  `categorie_discount` varchar(100) NOT NULL,
  `procent_discount` float NOT NULL,
  `procent_relativ` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_discounts`
--

INSERT INTO `tbl_discounts` (`id_discount`, `categorie_discount`, `procent_discount`, `procent_relativ`) VALUES
(1, 'Adult', 0, '0%'),
(2, 'Copil', 0.7, '70%'),
(3, 'Pensionar', 0.5, '50%'),
(4, 'Dizabilitati', 0.9, '90%');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rezervari`
--

CREATE TABLE `tbl_rezervari` (
  `id_rezervare` int(10) UNSIGNED NOT NULL,
  `nume_ruta` varchar(100) NOT NULL,
  `ora_cursa` varchar(10) NOT NULL,
  `pret_ruta` float NOT NULL,
  `procent_discount` float NOT NULL,
  `data_plecare` date NOT NULL,
  `nume_pasager` varchar(100) DEFAULT NULL,
  `email_pasager` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rezervari`
--

INSERT INTO `tbl_rezervari` (`id_rezervare`, `nume_ruta`, `ora_cursa`, `pret_ruta`, `procent_discount`, `data_plecare`, `nume_pasager`, `email_pasager`) VALUES
(1087, 'Suceava-Falticeni', '15:00', 41, 0, '2021-02-25', 'marius', 'edyciocan1569@gmail.com'),
(1088, 'Suceava-Veresti', '08:30', 3, 90, '2021-03-05', 'simina da', 'elenasiminaciocan@gmail.com'),
(1089, 'Suceava-Veresti', '08:30', 15, 50, '2021-02-16', 'Denisa popa', 'auraolaru99@gmail.com'),
(1090, 'Suceava-Falticeni', '09:00', 41, 0, '2021-02-18', 'Paula', 'paulamifttode@yahoo.com'),
(1091, 'Suceava-Siret', '10:00', 6.7, 90, '2021-02-23', 'Eduard Zorici', 'webmaster@komoder.ro'),
(1092, 'Iasi-Suceava', '08:30', 22.5, 50, '2021-02-24', 'Eduard Zorici', 'webmaster@komoder.ro'),
(1093, 'Iasi-Suceava', '13:00', 13.5, 70, '2021-03-03', 'Edilbert Ciocan', 'eduard.zorici@yahoo.com'),
(1094, 'Suceava-Radauti', '18:00', 25, 50, '2021-12-02', 'Paul Popescu', 'eduard.zorici@yahoo.com'),
(1095, 'Suceava-Veresti', '13:30', 3, 90, '2022-01-26', 'test', 'webmaster@komoder.ro');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rute`
--

CREATE TABLE `tbl_rute` (
  `id_ruta` int(10) UNSIGNED NOT NULL,
  `nume_ruta` varchar(100) NOT NULL,
  `pret_ruta` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rute`
--

INSERT INTO `tbl_rute` (`id_ruta`, `nume_ruta`, `pret_ruta`) VALUES
(1, 'Suceava-Falticeni', 41),
(2, 'Suceava-Veresti', 30),
(3, 'Suceava-Siret', 67),
(4, 'Suceava-Radauti', 50),
(5, 'Iasi-Suceava', 45);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_curse`
--
ALTER TABLE `tbl_curse`
  ADD PRIMARY KEY (`id_cursa`);

--
-- Indexes for table `tbl_discounts`
--
ALTER TABLE `tbl_discounts`
  ADD PRIMARY KEY (`id_discount`);

--
-- Indexes for table `tbl_rezervari`
--
ALTER TABLE `tbl_rezervari`
  ADD PRIMARY KEY (`id_rezervare`);

--
-- Indexes for table `tbl_rute`
--
ALTER TABLE `tbl_rute`
  ADD PRIMARY KEY (`id_ruta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_curse`
--
ALTER TABLE `tbl_curse`
  MODIFY `id_cursa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_discounts`
--
ALTER TABLE `tbl_discounts`
  MODIFY `id_discount` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_rezervari`
--
ALTER TABLE `tbl_rezervari`
  MODIFY `id_rezervare` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1096;

--
-- AUTO_INCREMENT for table `tbl_rute`
--
ALTER TABLE `tbl_rute`
  MODIFY `id_ruta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
