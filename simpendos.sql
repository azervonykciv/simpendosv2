-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2016 at 03:05 PM
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
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nidn` varchar(12) NOT NULL,
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

INSERT INTO `dosen` (`nidn`, `nama_dosen`, `tempat_lahir`, `tanggal_lahir`, `gelar_lengkap`, `alamat_malang`, `ref_aktivasiDosen`) VALUES
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

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `ID_Log` int(20) NOT NULL,
  `ID_User` varchar(20) NOT NULL,
  `Tanggal` date NOT NULL,
  `Aktifitas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `ID_Mk` varchar(20) NOT NULL,
  `Nama _mk` varchar(50) NOT NULL,
  `Jumlah_sks` int(11) NOT NULL
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

CREATE TABLE `notifikasi` (
  `ID_Notif` int(11) NOT NULL,
  `ID_User` varchar(20) NOT NULL,
  `Nama_Notif` varchar(30) NOT NULL,
  `Detail_Notifikasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_User` varchar(20) NOT NULL,
  `Nama_User` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email_User` varchar(30) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nidn`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`ID_Jadwal`),
  ADD KEY `ID_Dosen` (`ID_Dosen`),
  ADD KEY `ID_MK` (`ID_Mk`);

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
  MODIFY `ID_Jadwal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `ID_Log` int(20) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
