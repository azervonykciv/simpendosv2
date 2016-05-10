-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 08, 2016 at 07:55 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpendos`
--

-- --------------------------------------------------------

--
-- Table structure for table `Dosen`
--

CREATE TABLE `Dosen` (
  `ID_Dosen` int(11) NOT NULL,
  `Nama_Dosen` varchar(50) NOT NULL,
  `Telepon_Dosen` varchar(20) DEFAULT NULL,
  `Email_Dosen` varchar(10) NOT NULL,
  `Alamat_Dosen` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Jadwal`
--

CREATE TABLE `Jadwal` (
  `ID_Jadwal` int(11) NOT NULL,
  `ID_MK` int(11) NOT NULL,
  `ID_Dosen` int(11) NOT NULL,
  `Kelas_MK` varchar(10) NOT NULL,
  `Jam_Kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Log`
--

CREATE TABLE `Log` (
  `ID_Log` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  `Aktifitas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `MataKuliah`
--

CREATE TABLE `MataKuliah` (
  `ID_MK` int(11) NOT NULL,
  `Nama_MK` varchar(30) NOT NULL,
  `Jumlah_SKS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Notifikasi`
--

CREATE TABLE `Notifikasi` (
  `ID_Notif` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `Nama_Notif` varchar(30) NOT NULL,
  `Detail_Notifikasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `ID_User` int(11) NOT NULL,
  `Nama_User` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email_User` varchar(30) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Dosen`
--
ALTER TABLE `Dosen`
  ADD PRIMARY KEY (`ID_Dosen`);

--
-- Indexes for table `Jadwal`
--
ALTER TABLE `Jadwal`
  ADD PRIMARY KEY (`ID_Jadwal`),
  ADD KEY `ID_Dosen` (`ID_Dosen`),
  ADD KEY `ID_MK` (`ID_MK`);

--
-- Indexes for table `Log`
--
ALTER TABLE `Log`
  ADD PRIMARY KEY (`ID_Log`);

--
-- Indexes for table `MataKuliah`
--
ALTER TABLE `MataKuliah`
  ADD PRIMARY KEY (`ID_MK`);

--
-- Indexes for table `Notifikasi`
--
ALTER TABLE `Notifikasi`
  ADD PRIMARY KEY (`ID_Notif`),
  ADD KEY `ID_User` (`ID_User`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`ID_User`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Jadwal`
--
ALTER TABLE `Jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`ID_Dosen`) REFERENCES `Dosen` (`ID_Dosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`ID_MK`) REFERENCES `MataKuliah` (`ID_MK`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Notifikasi`
--
ALTER TABLE `Notifikasi`
  ADD CONSTRAINT `notifikasi_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `User` (`ID_User`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
