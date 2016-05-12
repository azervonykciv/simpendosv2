-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2016 at 02:53 AM
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
  `ID_Dosen` varchar(20) NOT NULL,
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
  `ID_Jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Mk` varchar(20) NOT NULL,
  `ID_Dosen` varchar(20) NOT NULL,
  `Kelas_MK` varchar(10) NOT NULL,
  `Jam_Kelas` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_Jadwal`),
  KEY `ID_Dosen` (`ID_Dosen`),
  KEY `ID_MK` (`ID_Mk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `ID_Log` int(20) NOT NULL AUTO_INCREMENT,
  `ID_User` varchar(20) NOT NULL,
  `Tanggal` date NOT NULL,
  `Aktifitas` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_Log`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE IF NOT EXISTS `matakuliah` (
  `ID_Mk` varchar(20) NOT NULL,
  `Nama _mk` varchar(50) NOT NULL,
  `Jumlah_sks` int(11) NOT NULL,
  PRIMARY KEY (`ID_Mk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`ID_Mk`, `Nama _mk`, `Jumlah_sks`) VALUES
('0110370938', 'Ilmu Sosial & Budaya Dasar', 2),
('0110371876', 'Pend. Pancasila dan Kewarganegaraan', 2),
('0120370044', 'AIK I', 1),
('0120370045', 'AIK II', 2),
('0120370046', 'AIK III', 2),
('0120370047', 'AIK IV', 1),
('0120370212', 'Bahasa Inggris Teknik 1', 2),
('0120370213', 'Bahasa Inggris Teknik 2', 2),
('0120371708', 'Olah Raga', 2),
('0120372000', 'Pengembangan Kepribadian', 2),
('0210370053', 'Algoritma dan Struktur Data', 4),
('0210370056', 'Aljabar Linear dan Matriks', 2),
('0210371001', 'Kalkulus dan Geometri', 4),
('0210371488', 'Matematika Diskrit', 2),
('0210371578', 'Metode Numerik', 2),
('0210371835', 'Pemrograman Objek dengan Java', 4),
('0210371836', 'Pemrograman Terstruktur', 4),
('0210371970', 'Pengantar Teknologi Informasi', 2),
('0210372749', 'Statistik dan Probabilitas', 2),
('0210373670', 'Logika Informatika', 2),
('0210373671', 'Grafika Komputer I', 2),
('0220371975', 'Pengantar Topologi', 2),
('0310370372', 'Desain Database', 4),
('0310370963', 'Interaksi Manusia dan Komputer', 2),
('0310371056', 'Kecerdasan Buatan', 3),
('0310371717', 'Organisasi dan Arsitektur Komputer', 2),
('0310372511', 'Rekayasa Perangkat Lunak', 4),
('0310372623', 'Sistem Informasi', 2),
('0310372641', 'Sistem Operasi', 3),
('0310373672', 'Jaringan Komputer', 4),
('0320370064', 'Analisa & Desain Berorientasi Objek', 2),
('0320370132', 'Animasi Komputer', 3),
('0320370362', 'Data Mining', 2),
('0320370363', 'Data Warehouse', 2),
('0320370371', 'Desain dan Aplikasi Multimedia', 2),
('0320370373', 'Desain Database Terdistribusi', 3),
('0320370376', 'Design Pattern', 2),
('0320370986', 'Jaringan Wireless', 3),
('0320371217', 'Komunikasi Data', 2),
('0320371438', 'Manajemen Proyek Perangkat Lunak', 2),
('0320371658', 'Mikrokontroller', 2),
('0320371837', 'Pemrograman Web', 3),
('0320372129', 'Perencanaan e-Business', 2),
('0320372515', 'Rekayasa Ulang Sistem', 2),
('0320372625', 'Sistem Informasi Geografis', 2),
('0320373069', 'Virtual Reality', 2),
('0320373269', 'Keamanan Jaringan', 4),
('0320373673', 'Teori Bahasa dan Otomata', 2),
('0320373675', 'Pemodelan Game', 2),
('0320373676', 'Pemrograman Game', 3),
('0320373677', 'Jaringan Broadband', 3),
('0320373678', 'Rekayasa Kebutuhan', 2),
('0320373679', 'Penjaminan Kualitas Perangkat Lunak', 2),
('0320373680', 'Visi Komputer dan Pengolahan Citra', 2),
('0320373681', 'Manajemen Jaringan', 3),
('0320373682', 'Pemrograman Jaringan', 3),
('0320373683', 'Internet Forensic', 3),
('0320373685', 'Evaluasi Game', 2),
('0320373686', 'Kecerdasan Buatan untuk Game', 3),
('0320373687', 'Game Dalam Perangkat Bergerak', 2),
('0320373688', 'Pengembangan Konten Mobile', 3),
('0320373689', 'Kriptografi', 3),
('0320373690', 'Game Multiplayer', 3),
('0320373691', 'Next Generation Network Services', 3),
('0320373692', 'Jaringan Sensor Wireless', 3),
('0320373693', 'Rekayasa Interaksi', 2),
('0320373694', 'Information Retrieval', 2),
('0320373696', 'Grafika Komputer II', 2),
('0320373737', 'Rekayasa Berbasis Komponen', 2),
('0320373772', 'Virtual Private Network', 3),
('0410371620', 'Metode Penelitian I', 2),
('0420370540', 'Etika Profesi', 2),
('0420371323', 'Manajemen dan Ekonomi Teknik', 2),
('0420371395', 'Manajemen Pemasaran', 2),
('0420372851', 'Technopreneurship', 2),
('0420373674', 'Penulisan Ilmiah', 1),
('0420373684', 'Metode Penelitian II', 1),
('0420373695', 'Budaya Perusahaan', 2),
('0510372256', 'PKN', 2),
('0510372260', 'KKN', 4),
('0510372666', 'Tugas Akhir', 6),
('0520372555', 'Seminar', 1),
('0610370189', 'Bahasa Indonesia', 2),
('0610370880', 'Ilmu Kealaman Dasar', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE IF NOT EXISTS `notifikasi` (
  `ID_Notif` int(11) NOT NULL,
  `ID_User` varchar(20) NOT NULL,
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
  `ID_User` varchar(20) NOT NULL,
  `Nama_User` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email_User` varchar(30) NOT NULL,
  `Status` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_User`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
