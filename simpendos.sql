-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 31, 2016 at 09:57 AM
-- Server version: 10.1.10-MariaDB-log
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
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `ID_Dosen` varchar(12) NOT NULL,
  `nama_dosen` varchar(25) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `gelar_lengkap` varchar(15) NOT NULL,
  `alamat_malang` varchar(50) NOT NULL,
  `ref_aktivasiDosen` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`ID_Dosen`, `nama_dosen`, `tempat_lahir`, `tanggal_lahir`, `gelar_lengkap`, `alamat_malang`, `ref_aktivasiDosen`) VALUES
('0701058601', 'DENAR REGATA AKBI', 'BANYUWANGI', '1986-05-01', 'S.Kom.', '', 'A'),
('0701068603', 'AMINUDIN', 'LAMONGAN', '1986-06-01', 'S.Kom.', 'Jl. Raya Tlogomas No. 246 Malang', 'A'),
('0701078202', 'ALI SOFYAN KHOLIMI', 'SURABAYA', '1982-03-01', 'S.Kom., M.Kom.', '', 'A'),
('0706077902', 'YUDA MUNARKO', 'LAWANG MALANG', '1979-06-07', 'S.Kom. M.Sc.', 'JL.SUMBER SUKO 90 RT.03 RW.09 LAWANG MALANG', 'A'),
('0711098402', 'MASKUR', 'TULUNG AGUNG', '1984-09-11', 'S.Kom.,M.Kom.', '', 'A'),
('0714028403', 'SETIO BASUKI', 'BLITAR', '1984-02-14', 'S.T., M.T.', '', 'A'),
('0716018202', 'DIAH RISQIWATI', 'MALANG', '1982-01-16', 'S.T., M.T', 'Jl. Pudak No. 6 Rt.08 Rw.09 Lowokwaru Malang', 'A'),
('0716118701', 'SYAIFUDDIN', 'PONTIANAK', '1987-11-16', 'S.Kom.', '', 'A'),
('0717027001', 'EKO BUDI CAHYONO', 'BLITAR', '1970-02-17', 'S.Kom., M.T.', 'Jl. Jetak Ngasri 90 Dau Malang', 'A'),
('0718108701', 'EVI DWI WAHYUNI', 'BONDOWOSO', '1987-10-18', 'S.Kom.', 'Jl. Tirto Utomo Gang VII No. 1 Landungsari Malang', 'A'),
('0720038101', 'GITA INDAH MARTHASARI', 'MALANG', '1981-03-20', 'S.T., M.Kom.', '', 'A'),
('0720068701', 'WAHYU ANDHYKA KUSUMA', 'MALANG', '1987-06-20', 'S.Kom., M.Kom.', 'Jl. Kol. Sugiono Gg. V D no.10 RT.14 RW.03 Mergoso', 'A'),
('0721038602', 'HARDIANTO WIBOWO', 'PASURUAN', '1986-03-21', 'S.Kom.', '', 'A'),
('0723028801', 'GALIH WASIS WICAKSONO', 'TOLI-TOLI', '1988-02-23', 'S.Kom., M.Cs.', 'Perum Taman Embong Anyar Blok F No. 11', 'A'),
('0723118601', 'ILYAS NURYASIN', 'KEDIRI', '1986-11-23', 'S.Kom., M.Kom', 'Jl. Raya Jetis No.62-C Malang', 'A'),
('0724028602', 'LUQMAN HAKIM', 'BANGIL', '1986-02-24', 'S.Kom.', '', 'A'),
('0726038402', 'NUR HAYATIN ', 'LAMONGAN', '1984-03-26', 'S.ST.,M.Kom', '', 'A'),
('0728088701', 'YUFIZ AZHAR', 'SIDOARJO', '1987-08-28', 'S.Kom.,M.Kom', '', 'A'),
('0729118203', 'AGUS EKO MINARNO', 'PANGKALANBUN', '1982-11-29', 'S.Kom.', 'Jl.Ikhwan Hadi No.06 Rt.04 Rw.05 Ngaglik Batu', 'A'),
('0730038405', 'WILDAN SUHARSO', 'MALANG', '1984-03-30', 'S.Kom., M.Kom.', 'Sumberwuni Indah A/32 Rt.01 Rw.02 Kalirejo Lawang', 'A'),
('0730108401', 'LAILATUL HUSNIAH', 'SURABAYA', '1984-10-30', 'S.ST., M.T', 'Jl. Ronggolawe No. 20 Singosari Malang', 'A'),
('1770', 'SOFYAN ARIFIANTO', 'MALANG', '1983-05-21', 'S.Si., M.Kom.', 'Jl. Batu Amaril Blok B-2 Rt.03 Rw.04 Pandanwangi B', 'A'),
('1859', 'FERA PUTRI AYU LESTARI', 'MALANG', '1991-02-09', 'S.Kom.', 'Jl. Bandulan I/18 Rt.03 Rw.04 Bandulan Sukun Malan', 'A'),
('425', 'HARIYADY', 'MALANG', '1973-06-17', 'S.Kom., MT', '', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `ID_Jadwal` int(11) NOT NULL,
  `ID_Mk` varchar(20) NOT NULL,
  `ID_Dosen` varchar(20) NOT NULL,
  `Kelas_MK` varchar(10) NOT NULL,
  `Jam_Kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`ID_Jadwal`, `ID_Mk`, `ID_Dosen`, `Kelas_MK`, `Jam_Kelas`) VALUES
(59, '0110370938', '0701058601', 'a', '1 - 2');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_dosen`
--

CREATE TABLE `jadwal_dosen` (
  `id_jadwal_dosen` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `status_jadwal` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_dosen`
--

INSERT INTO `jadwal_dosen` (`id_jadwal_dosen`, `id_dosen`, `id_jadwal`, `status_jadwal`) VALUES
(17, 425, 26, 0),
(18, 425, 27, 0),
(19, 425, 28, 0),
(20, 425, 29, 0),
(21, 425, 30, 0),
(22, 425, 31, 0),
(23, 425, 32, 0),
(24, 425, 33, 0),
(25, 425, 34, 0),
(26, 425, 35, 0),
(27, 425, 36, 0),
(28, 425, 37, 0),
(29, 701058601, 29, 0),
(30, 701058601, 30, 0),
(31, 701058601, 31, 0),
(32, 701058601, 32, 0),
(33, 701058601, 33, 0),
(35, 701058601, 35, 0),
(37, 701058601, 37, 0),
(39, 701058601, 39, 0),
(41, 701058601, 41, 0),
(43, 701058601, 43, 0),
(45, 701058601, 45, 0),
(47, 701058601, 47, 0),
(49, 701058601, 49, 0),
(51, 701058601, 51, 0),
(53, 701058601, 53, 0),
(55, 701058601, 55, 0),
(57, 701058601, 57, 0),
(59, 701058601, 59, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_report`
--

CREATE TABLE `jadwal_report` (
  `id_jadwal_report` int(11) NOT NULL,
  `id_jadwal_dosen` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `status_report` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `ID_Log` int(20) NOT NULL,
  `ID_User` varchar(20) NOT NULL,
  `Tanggal` datetime NOT NULL,
  `Aktifitas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`ID_Log`, `ID_User`, `Tanggal`, `Aktifitas`) VALUES
(1, '123', '2016-05-24 17:49:32', 'Edit data Mata Kuliah 0110370938'),
(2, '123', '2016-05-25 04:16:31', 'Program Jadwal Dosen 425 Mata Kuliah 0110370938'),
(3, '123', '2016-05-25 04:16:37', 'Program Jadwal Dosen 425 Mata Kuliah 0110371876'),
(4, '123', '2016-05-25 04:17:37', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0110370938'),
(5, '123', '2016-05-25 04:25:01', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0120370044'),
(6, '123', '2016-05-25 05:36:54', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0110370938'),
(7, '123', '2016-05-25 05:37:44', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0110370938'),
(8, '123', '2016-05-25 05:38:07', 'Hapus data Penjadwalan Dosen 0701058601 mata kuliah 0110370938'),
(9, '123', '2016-05-25 05:38:08', 'Hapus data Penjadwalan Dosen 0701058601 mata kuliah 0110370938'),
(10, '123', '2016-05-25 06:06:09', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0110371876'),
(11, '123', '2016-05-25 06:11:14', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0210371488'),
(12, '123', '2016-05-25 06:11:22', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0310372511'),
(13, '123', '2016-05-25 06:14:35', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0120370044'),
(14, '123', '2016-05-25 06:14:49', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0120370047'),
(15, '123', '2016-05-25 06:15:33', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0120370047'),
(16, '123', '2016-05-25 06:18:02', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0110370938'),
(17, '123', '2016-05-25 06:25:03', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0110370938'),
(18, '123', '2016-05-25 06:26:21', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0110370938'),
(19, '123', '2016-05-25 06:26:40', 'Hapus data Penjadwalan Dosen 0701058601 mata kuliah 0110370938'),
(20, '123', '2016-05-25 06:26:41', 'Hapus data Penjadwalan Dosen 0701058601 mata kuliah 0110370938'),
(21, '123', '2016-05-25 06:26:44', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0110370938'),
(22, '123', '2016-05-25 06:26:46', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0110371876'),
(23, '123', '2016-05-25 06:27:54', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0110371876'),
(24, '123', '2016-05-25 06:42:56', 'Hapus data Penjadwalan Dosen 0701058601 mata kuliah 0110370938'),
(25, '123', '2016-05-25 06:42:57', 'Hapus data Penjadwalan Dosen 0701058601 mata kuliah 0110371876'),
(26, '123', '2016-05-25 06:42:58', 'Hapus data Penjadwalan Dosen 0701058601 mata kuliah 0110371876'),
(27, '123', '2016-05-25 06:43:08', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0210370056'),
(28, '123', '2016-05-25 06:44:01', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0210373671'),
(29, '123', '2016-05-25 06:44:24', 'Hapus data Penjadwalan Dosen 0701058601 mata kuliah 0210370056'),
(30, '123', '2016-05-25 07:23:44', 'Program Jadwal Dosen 425 Mata Kuliah 0210371836'),
(31, '123', '2016-05-25 09:14:49', 'Program Jadwal Dosen 425 Mata Kuliah 0110370938'),
(32, '123', '2016-05-25 16:03:16', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0110370938'),
(33, '123', '2016-05-25 16:06:37', 'Hapus data Penjadwalan Dosen 425 mata kuliah 0210371836'),
(34, '123', '2016-05-25 16:06:38', 'Hapus data Penjadwalan Dosen 425 mata kuliah 0110370938'),
(35, '123', '2016-05-25 16:07:01', 'Program Jadwal Dosen 425 Mata Kuliah 0110370938'),
(36, '123', '2016-05-25 17:20:46', 'Program Jadwal Dosen 425 Mata Kuliah 0110370938'),
(37, '123', '2016-05-25 17:22:05', 'Program Jadwal Dosen 425 Mata Kuliah 0110370938'),
(38, '123', '2016-05-25 17:22:34', 'Program Jadwal Dosen 425 Mata Kuliah 0110370938'),
(39, '123', '2016-05-25 17:25:54', 'Program Jadwal Dosen 425 Mata Kuliah 0110370938'),
(40, '123', '2016-05-25 17:27:19', 'Program Jadwal Dosen 425 Mata Kuliah 0110371876'),
(41, '123', '2016-05-25 17:28:12', 'Program Jadwal Dosen 425 Mata Kuliah 0110371876'),
(42, '123', '2016-05-25 17:28:16', 'Hapus data Penjadwalan Dosen 425 mata kuliah 0110371876'),
(43, '123', '2016-05-25 17:28:41', 'Program Jadwal Dosen 425 Mata Kuliah 0110371876'),
(44, '123', '2016-05-25 17:29:36', 'Hapus data Penjadwalan Dosen 425 mata kuliah 0110371876'),
(45, '123', '2016-05-25 17:29:45', 'Program Jadwal Dosen 425 Mata Kuliah 0110371876'),
(46, '123', '2016-05-25 17:30:17', 'Hapus data Penjadwalan Dosen 425 mata kuliah 0110371876'),
(47, '123', '2016-05-25 17:30:25', 'Program Jadwal Dosen 425 Mata Kuliah 0120370044'),
(48, '123', '2016-05-25 17:31:10', 'Hapus data Penjadwalan Dosen 425 mata kuliah 0120370044'),
(49, '123', '2016-05-25 17:31:16', 'Program Jadwal Dosen 425 Mata Kuliah 0120370045'),
(50, '123', '2016-05-25 17:31:26', 'Hapus data Penjadwalan Dosen 425 mata kuliah 0120370045'),
(51, '123', '2016-05-25 17:33:32', 'Program Jadwal Dosen 425 Mata Kuliah 0120370047'),
(52, '123', '2016-05-25 17:33:35', 'Hapus data Penjadwalan Dosen 425 mata kuliah 0120370047'),
(53, '123', '2016-05-25 17:33:39', 'Hapus data Penjadwalan Dosen 425 mata kuliah 0110371876'),
(54, '123', '2016-05-25 17:35:05', 'Program Jadwal Dosen 425 Mata Kuliah 0120371708'),
(55, '123', '2016-05-26 03:46:11', 'Hapus data Penjadwalan Dosen 425 mata kuliah 0120371708'),
(56, '123', '2016-05-26 03:46:19', 'Hapus data Penjadwalan Dosen 425 mata kuliah 0110370938'),
(57, '0701058601', '2016-05-29 15:45:11', 'Hapus data Penjadwalan Dosen 0701058601 mata kuliah 0110370938'),
(58, '0701058601', '2016-05-29 15:45:23', 'Hapus data Penjadwalan Dosen 0701058601 mata kuliah 0110370938'),
(59, '0701058601', '2016-05-29 15:45:50', 'Hapus data Penjadwalan Dosen 0701058601 mata kuliah 0110370938'),
(60, '0701058601', '2016-05-29 16:03:39', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0110370938'),
(61, '123', '2016-05-29 16:04:25', 'Hapus data Penjadwalan Dosen 0701058601 mata kuliah 0110370938'),
(62, '0701058601', '2016-05-29 16:08:52', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0110370938'),
(63, '0701058601', '2016-05-29 16:10:00', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0110371876'),
(64, '0701058601', '2016-05-29 16:28:30', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0120370044'),
(65, '0110370938', '2016-05-29 16:40:51', 'Hapus data Penjadwalan Dosen 0110370938 mata kuliah '),
(66, '0110371876', '2016-05-29 16:53:59', 'Hapus data Penjadwalan Dosen 0110371876 mata kuliah '),
(67, '0120370044', '2016-05-29 16:54:00', 'Hapus data Penjadwalan Dosen 0120370044 mata kuliah '),
(68, '0701058601', '2016-05-29 17:01:01', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0110370938'),
(69, '0110370938', '2016-05-31 08:26:16', 'Hapus data Penjadwalan Dosen 0110370938 mata kuliah '),
(71, '0701058601', '2016-05-31 08:29:01', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0110370938'),
(73, '0110370938', '2016-05-31 08:38:09', 'Hapus data Penjadwalan Dosen 0110370938 mata kuliah '),
(75, '0701058601', '2016-05-31 08:38:18', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0110370938'),
(77, '0110370938', '2016-05-31 08:43:15', 'Hapus data Penjadwalan Dosen 0110370938 mata kuliah '),
(79, '0701058601', '2016-05-31 08:43:39', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0110370938'),
(81, '0110370938', '2016-05-31 08:50:18', 'Hapus data Penjadwalan Dosen 0110370938 mata kuliah '),
(83, '0701058601', '2016-05-31 08:50:24', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0110370938'),
(85, '0110370938', '2016-05-31 08:58:45', 'Hapus data Penjadwalan Dosen 0110370938 mata kuliah '),
(87, '0701058601', '2016-05-31 08:58:47', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0110370938'),
(89, '0110370938', '2016-05-31 09:19:35', 'Hapus data Penjadwalan Dosen 0110370938 mata kuliah '),
(91, '0701058601', '2016-05-31 09:19:39', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0110370938'),
(93, '0110370938', '2016-05-31 09:20:28', 'Hapus data Penjadwalan Dosen 0110370938 mata kuliah '),
(95, '0701058601', '2016-05-31 09:20:29', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0110370938'),
(97, '0110370938', '2016-05-31 09:41:16', 'Hapus data Penjadwalan Dosen 0110370938 mata kuliah '),
(99, '0701058601', '2016-05-31 09:41:18', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0110370938'),
(101, '0110370938', '2016-05-31 09:44:59', 'Hapus data Penjadwalan Dosen 0110370938 mata kuliah '),
(103, '0701058601', '2016-05-31 09:45:00', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0110370938'),
(105, '0110370938', '2016-05-31 09:46:57', 'Hapus data Penjadwalan Dosen 0110370938 mata kuliah '),
(107, '0701058601', '2016-05-31 09:46:59', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0110370938'),
(109, '0110370938', '2016-05-31 09:47:56', 'Hapus data Penjadwalan Dosen 0110370938 mata kuliah '),
(111, '0701058601', '2016-05-31 09:48:03', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0110370938'),
(113, '0110370938', '2016-05-31 09:52:02', 'Hapus data Penjadwalan Dosen 0110370938 mata kuliah '),
(115, '0701058601', '2016-05-31 09:52:13', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0110370938'),
(117, '0110370938', '2016-05-31 09:53:09', 'Hapus data Penjadwalan Dosen 0110370938 mata kuliah '),
(119, '0701058601', '2016-05-31 09:53:11', 'Program Jadwal Dosen 0701058601 Mata Kuliah 0110370938');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `ID_Mk` varchar(20) NOT NULL,
  `Nama_mk` varchar(50) NOT NULL,
  `Jumlah_sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`ID_Mk`, `Nama_mk`, `Jumlah_sks`) VALUES
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

CREATE TABLE `notifikasi` (
  `ID_Notif` int(11) NOT NULL,
  `ID_User` varchar(20) NOT NULL,
  `Nama_Notif` varchar(30) NOT NULL,
  `Detail_Notifikasi` varchar(200) NOT NULL,
  `ID_Dosen` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifikasi`
--

INSERT INTO `notifikasi` (`ID_Notif`, `ID_User`, `Nama_Notif`, `Detail_Notifikasi`, `ID_Dosen`) VALUES
(299, '0701058601', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(301, '0701068603', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(303, '0701078202', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(305, '0706077902', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(307, '0711098402', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(309, '0714028403', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(311, '0716018202', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(313, '0716118701', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(315, '0717027001', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(317, '0718108701', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(319, '0720038101', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(321, '0720068701', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(323, '0721038602', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(325, '0723028801', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(327, '0723118601', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(329, '0724028602', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(331, '0726038402', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(333, '0728088701', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(335, '0729118203', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(337, '0730038405', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(339, '0730108401', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(341, '1770', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(343, '1859', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(345, '425', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(349, '0701058601', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(351, '0701068603', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(353, '0701078202', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(355, '0706077902', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(357, '0711098402', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(359, '0714028403', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(361, '0716018202', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(363, '0716118701', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(365, '0717027001', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(367, '0718108701', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(369, '0720038101', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(371, '0720068701', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(373, '0721038602', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(375, '0723028801', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(377, '0723118601', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(379, '0724028602', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(381, '0726038402', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(383, '0728088701', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(385, '0729118203', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(387, '0730038405', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(389, '0730108401', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(391, '1770', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(393, '1859', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(395, '425', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(399, '0701058601', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(401, '0701068603', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(403, '0701078202', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(405, '0706077902', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(407, '0711098402', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(409, '0714028403', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(411, '0716018202', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(413, '0716118701', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(415, '0717027001', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(417, '0718108701', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(419, '0720038101', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(421, '0720068701', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(423, '0721038602', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(425, '0723028801', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(427, '0723118601', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(429, '0724028602', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(431, '0726038402', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(433, '0728088701', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(435, '0729118203', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(437, '0730038405', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(439, '0730108401', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(441, '1770', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(443, '1859', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(445, '425', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(449, '0701058601', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(451, '0701068603', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(453, '0701078202', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(455, '0706077902', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(457, '0711098402', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(459, '0714028403', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(461, '0716018202', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(463, '0716118701', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(465, '0717027001', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(467, '0718108701', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(469, '0720038101', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(471, '0720068701', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(473, '0721038602', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(475, '0723028801', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(477, '0723118601', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(479, '0724028602', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(481, '0726038402', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(483, '0728088701', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(485, '0729118203', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(487, '0730038405', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(489, '0730108401', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(491, '1770', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(493, '1859', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(495, '425', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(499, '0701058601', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(501, '0701068603', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(503, '0701078202', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(505, '0706077902', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(507, '0711098402', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(509, '0714028403', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(511, '0716018202', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(513, '0716118701', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(515, '0717027001', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(517, '0718108701', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(519, '0720038101', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(521, '0720068701', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(523, '0721038602', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(525, '0723028801', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(527, '0723118601', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(529, '0724028602', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(531, '0726038402', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(533, '0728088701', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(535, '0729118203', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(537, '0730038405', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(539, '0730108401', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(541, '1770', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(543, '1859', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(545, '425', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(549, '0701058601', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(551, '0701068603', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(553, '0701078202', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(555, '0706077902', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(557, '0711098402', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(559, '0714028403', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(561, '0716018202', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(563, '0716118701', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(565, '0717027001', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(567, '0718108701', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(569, '0720038101', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(571, '0720068701', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(573, '0721038602', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(575, '0723028801', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(577, '0723118601', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(579, '0724028602', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(581, '0726038402', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(583, '0728088701', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(585, '0729118203', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(587, '0730038405', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(589, '0730108401', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(591, '1770', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(593, '1859', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(595, '425', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(599, '0701058601', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(601, '0701068603', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(603, '0701078202', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(605, '0706077902', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(607, '0711098402', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(609, '0714028403', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(611, '0716018202', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(613, '0716118701', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(615, '0717027001', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(617, '0718108701', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(619, '0720038101', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(621, '0720068701', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(623, '0721038602', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(625, '0723028801', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(627, '0723118601', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(629, '0724028602', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(631, '0726038402', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(633, '0728088701', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(635, '0729118203', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(637, '0730038405', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(639, '0730108401', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(641, '1770', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(643, '1859', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601'),
(645, '425', 'Jadwal Kuliah', 'Kelas a Pada Jam Kelas 1 - 2 Telah diambil', '0701058601');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_User` varchar(20) NOT NULL,
  `Nama_User` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_User`, `Nama_User`, `Password`, `Status`) VALUES
('0701058601', 'DENAR REGATA AKBI', '123456', 'Dosen'),
('0701068603', 'AMINUDIN', '123456', 'Dosen'),
('0701078202', 'ALI SOFYAN KHOLIMI', '123456', 'Dosen'),
('0706077902', 'YUDA MUNARKO', '123456', 'Dosen'),
('0711098402', 'MASKUR', '123456', 'Dosen'),
('0714028403', 'SETIO BASUKI', '123456', 'Dosen'),
('0716018202', 'DIAH RISQIWATI', '123456', 'Dosen'),
('0716118701', 'SYAIFUDDIN', '123456', 'Dosen'),
('0717027001', 'EKO BUDI CAHYONO', '123456', 'Dosen'),
('0718108701', 'EVI DWI WAHYUNI', '123456', 'Dosen'),
('0720038101', 'GITA INDAH MARTHASARI', '123456', 'Dosen'),
('0720068701', 'WAHYU ANDHYKA KUSUMA', '123456', 'Dosen'),
('0721038602', 'HARDIANTO WIBOWO', '123456', 'Dosen'),
('0723028801', 'GALIH WASIS WICAKSONO', '123456', 'Dosen'),
('0723118601', 'ILYAS NURYASIN', '123456', 'Dosen'),
('0724028602', 'LUQMAN HAKIM', '123456', 'Dosen'),
('0726038402', 'NUR HAYATIN ', '123456', 'Dosen'),
('0728088701', 'YUFIZ AZHAR', '123456', 'Dosen'),
('0729118203', 'AGUS EKO MINARNO', '123456', 'Dosen'),
('0730038405', 'WILDAN SUHARSO', '123456', 'Dosen'),
('0730108401', 'LAILATUL HUSNIAH', '123456', 'Dosen'),
('123', 'Tama', '123', 'Admin'),
('123333', 'hahah', '123456', 'Super Admin'),
('1770', 'SOFYAN ARIFIANTO', '123456', 'Dosen'),
('1859', 'FERA PUTRI AYU LESTARI', '123456', 'Dosen'),
('425', 'HARIYADY', '123456', 'Dosen'),
('701058601', 'Gusti Alfian', '123', 'Dosen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`ID_Dosen`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`ID_Jadwal`),
  ADD KEY `ID_Dosen` (`ID_Dosen`),
  ADD KEY `ID_MK` (`ID_Mk`);

--
-- Indexes for table `jadwal_dosen`
--
ALTER TABLE `jadwal_dosen`
  ADD PRIMARY KEY (`id_jadwal_dosen`),
  ADD KEY `id_dosen` (`id_dosen`),
  ADD KEY `id_jadwal` (`id_jadwal`);

--
-- Indexes for table `jadwal_report`
--
ALTER TABLE `jadwal_report`
  ADD PRIMARY KEY (`id_jadwal_report`),
  ADD KEY `id_jadwal_dosen` (`id_jadwal_dosen`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`ID_Log`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`ID_Mk`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`ID_Notif`),
  ADD KEY `ID_User` (`ID_User`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `ID_Jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `jadwal_dosen`
--
ALTER TABLE `jadwal_dosen`
  MODIFY `id_jadwal_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `jadwal_report`
--
ALTER TABLE `jadwal_report`
  MODIFY `id_jadwal_report` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `ID_Log` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `ID_Notif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=647;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
