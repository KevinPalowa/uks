-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 08:50 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uks`
--

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id` int(11) NOT NULL,
  `penyakit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `penyakit`) VALUES
(1, 'pusing'),
(2, 'gastritis'),
(3, 'gastroenteritis'),
(4, 'luka'),
(5, 'nyeri otot'),
(6, 'ispa'),
(7, 'sakit gigi'),
(8, 'epis taksis'),
(9, 'dis minore'),
(13, 'Anemia'),
(14, 'Alergi'),
(15, 'Febris'),
(18, 'sesak nafas'),
(19, 'Hipertensi'),
(20, 'Iritasi mata'),
(24, 'Colic abdomen'),
(25, 'ISK');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `id` int(11) NOT NULL,
  `no_rekammedis` char(50) NOT NULL,
  `tindakan` varchar(100) NOT NULL,
  `keluhan` varchar(100) NOT NULL,
  `diagnosa` varchar(100) NOT NULL,
  `obat` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(5) NOT NULL,
  `pemeriksa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`id`, `no_rekammedis`, `tindakan`, `keluhan`, `diagnosa`, `obat`, `tanggal`, `jam`, `pemeriksa`) VALUES
(18, 'UKS1905', 'df', 'Alergi', 'kj', 'sdf', '2019-04-04', '13.53', 'mllm'),
(19, 'UKS1905', 'pulang', 'pusing', 'pusing', 'pulang', '2019-04-15', '11.36', 'pak bowo'),
(20, 'UKS1908', 'ads', 'asdml', 'Anemia', 'sad', '2019-04-02', '12.36', 'sa'),
(21, 'UKS1908', 'sada', 'sdaad', 'Alergi', 'dsa', '2019-04-29', '12.38', 'kllk');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `no_rfid` bigint(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ttl` date NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `riwayat_alergi` varchar(100) NOT NULL,
  `no_rekammedis` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`no_rfid`, `nama`, `ttl`, `jenis_kelamin`, `kelas`, `jurusan`, `riwayat_alergi`, `no_rekammedis`) VALUES
(1231, 'bagaskara', '2018-01-31', 'P', 'X', 'Sistem Informasi Jaringan dan Aplikasi', 'asdl', 'UKS1908'),
(123123, 'brian', '2003-02-07', 'P', 'X', 'akuntansi', 'KURANG KASIH SAYANG', 'UKS1905'),
(123132, 'bagas aji', '2014-11-29', 'P', 'X', 'Akomodasi Perhotelan', 'asd', 'UKS1909'),
(21312313, 'kevin', '2018-01-31', 'L', 'XI', 'Akomodasi Perhotelan', 'sad', 'UKS19010'),
(123456789, 'Naufal Kanz H ', '2003-03-01', 'L', 'XI', 'Manajemen Perhotelan', 'makan', 'UKS1906'),
(193290139, 'Muhammad Kevin Alviansyah', '2015-12-30', 'L', 'XI', 'Sistem Informasi Jaringan dan Aplikasi', 'tidak ada', 'UKS1907'),
(348453207, 'Febrio Ivanka', '2002-02-19', 'L', 'XI', 'Sistem Informasi Jaringan dan Aplikasi', 'udang', 'UKS1901');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_rekammedis` (`no_rekammedis`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`no_rfid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `no_rfid` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=348453208;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
