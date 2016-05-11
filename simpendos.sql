-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2016 at 03:01 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simpendos`
--
CREATE DATABASE IF NOT EXISTS `simpendos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `simpendos`;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `ID_Dosen` int(11) NOT NULL,
  `Nama_Dosen` varchar(50) NOT NULL,
  `Telepon_Dosen` varchar(20) DEFAULT NULL,
  `Email_Dosen` varchar(10) NOT NULL,
  `Alamat_Dosen` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`ID_Dosen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `ID_Jadwal` int(11) NOT NULL,
  `ID_MK` int(11) NOT NULL,
  `ID_Dosen` int(11) NOT NULL,
  `Kelas_MK` varchar(10) NOT NULL,
  `Jam_Kelas` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_Jadwal`),
  KEY `ID_Dosen` (`ID_Dosen`),
  KEY `ID_MK` (`ID_MK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `ID_Log` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  `Aktifitas` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_Log`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE IF NOT EXISTS `matakuliah` (
  `ID_MK` int(11) NOT NULL,
  `Nama_MK` varchar(30) NOT NULL,
  `Jumlah_SKS` int(11) NOT NULL,
  PRIMARY KEY (`ID_MK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`ID_MK`, `Nama_MK`, `Jumlah_SKS`) VALUES
(320, 'Sistem Informasi Geografis', 2),
(3677, 'Internet Forensic', 3),
(110370938, 'Ilmu Sosial & Budaya Dasar', 2),
(110371876, 'Pend. Pancasila dan Kewarganeg', 2),
(120370044, 'AIK I', 1),
(120370045, 'AIK II', 1),
(120370046, 'AIK III', 1),
(120370212, 'Bahasa Inggris Teknik 1', 2),
(120370213, 'Bahasa Inggris Teknik 2', 2),
(120371708, 'Olahraga', 2),
(120372000, 'Pengembangan Kepribadian', 2),
(210370053, 'Algoritma dan Struktur Data', 4),
(210370056, 'Aljabar Linear dan Matriks', 2),
(210371001, 'Kalkulus dan Geometri', 4),
(210371488, 'Matematika Diskrit', 2),
(210371578, 'Metode Numerik', 2),
(210371835, 'Pemrograman Objek dengan Java', 4),
(210371836, 'Pemrograman Terstruktur', 4),
(210371970, 'Pengantar Teknologi Informasi', 2),
(210372749, 'Statistik dan Probabilitas', 2),
(210373670, 'Logika Informatika', 2),
(210373671, 'Grafika Komputer I', 2),
(220371975, 'Pengantar Topologi', 2),
(310370372, 'Desain Database', 4),
(310370963, 'Interaksi Manusia dan Komputer', 2),
(310371056, 'Kecerdasan Buatan', 3),
(310371717, 'Organisasi dan Arsitektur Komp', 2),
(310372511, 'Rekayasa Perangkat Lunak', 4),
(310372623, 'Sistem Informasi', 2),
(310372641, 'Sistem Operasi', 3),
(310373672, 'Jaringan Komputer', 4),
(320370064, 'Analisa & Desain Berorientasi ', 2),
(320370132, 'Animasi Komputer', 3),
(320370362, 'Data Mining', 2),
(320370363, 'Data Warehouse', 2),
(320370371, 'Desain dan Aplikasi Multimedia', 2),
(320370373, 'Desain Database Terdistribusi', 3),
(320370376, 'Design Pattern', 2),
(320370986, 'Jaringan Wireless', 3),
(320371217, 'Komunikasi Data', 2),
(320371438, 'Manajemen Proyek Perangkat Lun', 2),
(320371658, 'Mikrokontroller', 2),
(320371837, 'Pemrograman Web', 4),
(320372129, 'Perencanaan e-Business', 2),
(320372625, 'Rekayasa Ulang Sistem', 2),
(320373069, 'Virtual Reality', 2),
(320373269, 'Keamanan Jaringan', 4),
(320373673, 'Teori Bahasa dan Otomata', 2),
(320373675, 'Pemodelan Game', 2),
(320373676, 'Pemrograman Game', 3),
(320373677, 'Jaringan Broadband', 3),
(320373678, 'Rekayasa Kebutuhan', 2),
(320373679, 'Penjaminan Kualitas Perangkat ', 2),
(320373680, 'Visi Komputer dan Pengolahan C', 2),
(320373681, 'Manajemen Jaringan', 3),
(320373682, 'Pemrograman Jaringan', 3),
(320373685, 'Evaluasi Game', 2),
(320373686, 'Kecerdasan Buatan untuk Game', 3),
(320373687, 'Game Dalam Perangkat Bergerak', 2),
(320373688, 'Pengembangan Konten Mobile', 3),
(320373689, 'Kriptografi', 3),
(320373690, 'Game Multiplayer', 3),
(320373691, 'Next Generation Network Servic', 3),
(320373692, 'Jaringan Sensor Wireless', 3),
(320373693, 'Rekayasa Interaksi', 2),
(320373694, 'Information Retrieval', 2),
(320373696, 'Grafika Komputer II', 2),
(320373737, 'Rekayasa Berbasis Komponen', 2),
(320373772, 'Virtual Private Network', 3),
(420370540, 'Etika Profesi', 2),
(420371395, 'Manajemen Pemasaran', 2),
(420372851, 'Technopreneurship', 2),
(420373684, 'Metode Penelitian II', 1),
(420373695, 'Budaya Perusahaan', 2),
(510372256, 'PKN', 2),
(510372260, 'KKN', 4),
(510372666, 'Tugas Akhir', 6),
(520372555, 'Seminar', 1),
(610370189, 'Bahasa Indonesia', 2),
(610370880, 'Ilmu Kealaman Dasar', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE IF NOT EXISTS `notifikasi` (
  `ID_Notif` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `Nama_Notif` varchar(30) NOT NULL,
  `Detail_Notifikasi` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_Notif`),
  KEY `ID_User` (`ID_User`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID_User` int(11) NOT NULL,
  `Nama_User` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email_User` varchar(30) NOT NULL,
  `Status` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_User`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`ID_Dosen`) REFERENCES `dosen` (`ID_Dosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`ID_MK`) REFERENCES `matakuliah` (`ID_MK`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD CONSTRAINT `notifikasi_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `user` (`ID_User`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
