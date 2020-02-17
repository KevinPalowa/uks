-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2019 at 02:31 PM
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
-- Database: `ekantin`
--

-- --------------------------------------------------------

--
-- Table structure for table `isi_saldo`
--

CREATE TABLE `isi_saldo` (
  `id` int(11) NOT NULL,
  `no_rfid` bigint(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `isi_saldo`
--

INSERT INTO `isi_saldo` (`id`, `no_rfid`, `jumlah`, `created`) VALUES
(56, 348472967, 20000, '2019-08-26'),
(57, 354467639, 50000, '2019-08-26'),
(58, 4139829797, 25000, '2019-08-26'),
(59, 4226734181, 10000, '2019-08-26'),
(60, 354356407, 26000, '2019-08-26'),
(61, 4139453749, 10000, '2019-08-26'),
(62, 4222945301, 20000, '2019-08-26'),
(63, 347642423, 20000, '2019-08-26'),
(64, 354524823, 20000, '2019-08-26'),
(65, 347789127, 15000, '2019-08-26'),
(66, 4222653317, 10000, '2019-08-26'),
(67, 354174951, 10000, '2019-08-26'),
(68, 354174951, 10000, '2019-08-26'),
(69, 354300103, 10000, '2019-08-26'),
(70, 4139292773, 10000, '2019-08-26'),
(71, 348086343, 10000, '2019-08-26'),
(72, 348150951, 10000, '2019-08-26'),
(73, 348310887, 10000, '2019-08-26'),
(74, 4144089621, 5000, '2019-08-26'),
(75, 349684919, 10000, '2019-08-27'),
(76, 354467639, 10000, '2019-08-27'),
(77, 349707607, 15000, '2019-08-27'),
(78, 349836215, 10000, '2019-08-27'),
(79, 347642423, 10000, '2019-08-27'),
(80, 4139292773, 20000, '2019-08-27'),
(81, 354300103, 20000, '2019-08-27'),
(82, 348472967, 15000, '2019-08-27'),
(83, 348086343, 15000, '2019-08-27'),
(84, 4222653317, 10000, '2019-08-27'),
(85, 4227902341, 5000, '2019-08-27'),
(86, 4143984565, 10000, '2019-08-27'),
(87, 354356407, 25000, '2019-08-27'),
(88, 349465575, 20000, '2019-08-27'),
(89, 4143984565, 5000, '2019-08-27'),
(90, 354174951, 10000, '2019-08-27'),
(91, 4139540677, 20000, '2019-08-27'),
(92, 354084103, 20000, '2019-08-27'),
(93, 306457271, 10000, '2019-08-27'),
(94, 4140477733, 10000, '2019-08-27'),
(95, 358861207, 15000, '2019-08-27'),
(96, 354300103, 5000, '2019-08-27'),
(97, 358816759, 10000, '2019-08-27'),
(98, 4142331173, 20000, '2019-08-27'),
(99, 350267367, 10000, '2019-08-27'),
(100, 4139523733, 5000, '2019-08-27'),
(101, 4222961109, 10000, '2019-08-27'),
(102, 347944759, 50000, '2019-08-27'),
(103, 4222934725, 10000, '2019-08-28'),
(104, 349954759, 25000, '2019-08-28'),
(105, 354356407, 25000, '2019-08-28'),
(106, 4140039413, 10000, '2019-08-28'),
(107, 4143984565, 15000, '2019-08-28'),
(108, 353948631, 10000, '2019-08-28'),
(109, 306388311, 10000, '2019-08-28'),
(110, 354111687, 15000, '2019-08-28'),
(111, 347642423, 30000, '2019-08-28'),
(112, 135636471, 30000, '2019-08-28'),
(113, 347642423, 5000, '2019-08-28'),
(114, 348180759, 30000, '2019-08-28'),
(115, 354077047, 5000, '2019-08-28'),
(116, 354300103, 20000, '2019-08-28'),
(117, 134942535, 5000, '2019-08-28'),
(118, 4222653317, 10000, '2019-08-28'),
(119, 4139632757, 10000, '2019-08-28'),
(120, 306223687, 5000, '2019-08-28'),
(121, 305930231, 10000, '2019-08-28'),
(122, 4139858789, 20000, '2019-08-28'),
(123, 4226734181, 10000, '2019-08-28'),
(124, 354298903, 15000, '2019-08-28'),
(125, 4139494325, 10000, '2019-08-28'),
(126, 359092839, 5000, '2019-08-28'),
(127, 4139964261, 5000, '2019-08-28'),
(128, 4228329621, 20000, '2019-08-28'),
(129, 354615479, 15000, '2019-08-28'),
(130, 348253495, 10000, '2019-08-28'),
(131, 354484663, 20000, '2019-08-28'),
(132, 350170279, 10000, '2019-08-28'),
(133, 350004039, 25000, '2019-08-28');

-- --------------------------------------------------------

--
-- Table structure for table `kantin`
--

CREATE TABLE `kantin` (
  `id` int(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_kantin` varchar(100) NOT NULL,
  `deskripsi_kantin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kantin`
--

INSERT INTO `kantin` (`id`, `id_user`, `nama_kantin`, `deskripsi_kantin`) VALUES
(13, 11, 'Tata boga', 'Kantin Tata Boga');

-- --------------------------------------------------------

--
-- Table structure for table `menu_kantin`
--

CREATE TABLE `menu_kantin` (
  `id` int(11) NOT NULL,
  `kantin_id` int(10) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `deskripsi_menu` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_ts_kantin`
--

CREATE TABLE `riwayat_ts_kantin` (
  `id` int(11) NOT NULL,
  `kantin_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `no_rfid` bigint(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelamin` enum('P','L') NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`no_rfid`, `nama`, `kelamin`, `kelas`, `jurusan`, `saldo`) VALUES
(134942535, 'Rere', 'P', 'X', 'Akomodasi Perhotelan', 0),
(135636471, 'Vanisa', 'P', 'X', 'Tata Boga', 25000),
(305930231, 'Intan', 'P', 'XI', 'Tata Boga', 0),
(306223687, 'Assifa', 'P', 'X', 'Desain Komunikasi dan Visual', 0),
(306388311, 'Zaky', 'L', 'X', 'akuntansi', 0),
(306457271, 'Matthew', 'L', 'X', 'Desain Komunikasi dan Visual', 7500),
(347642423, 'mega', 'P', 'X', 'Akuntansi', 2500),
(347789127, 'Christy', 'P', 'X', 'Desain Komunikasi dan Visual', 0),
(347821447, 'muhamad dafa kusnadi', 'L', 'XI', 'Sistem Informasi Jaringan dan Aplikasi', 0),
(347944759, 'Pak Agus', 'L', 'X', 'Guru', 45000),
(348086343, 'Thoriq', 'L', 'X', 'Sistem Informasi Jaringan dan Aplikasi', 5000),
(348150951, 'Pandu', 'L', 'X', 'Sistem Informasi Jaringan dan Aplikasi', 5000),
(348180759, 'Annisa Zoe', 'P', 'X', 'Tata Boga', 25000),
(348253495, 'Widya', 'P', 'X', 'Multimedia', 0),
(348310887, 'Vanessa', 'P', 'X', 'Sistem Informasi Jaringan dan Aplikasi', 5000),
(348453207, 'febrio ivanka', 'L', 'XI', 'Sistem Informasi Jaringan dan Aplikasi', 0),
(348472967, 'dedi', 'L', 'Guru', 'Guru', 5000),
(349465575, 'Claudius', 'L', 'X', 'Tata Boga', 10000),
(349684919, 'M. Ichbal', 'L', 'Guru', 'Guru', 0),
(349707607, 'Nira', 'P', 'XI', 'Sistem Informasi Jaringan dan Aplikasi', 5000),
(349836215, 'Azka', 'P', 'XI', 'Desain Komunikasi dan Visual', 5000),
(349954759, 'novri ', 'P', 'XI', 'Sistem Informasi Jaringan dan Aplikasi', 10000),
(350004039, 'Ibu Anna', 'P', 'X', 'Guru', 25000),
(350170279, 'Rifki ', 'L', 'XI', 'akuntansi', 0),
(350267367, 'Sanas', 'P', 'XI', 'Tata Boga', 2500),
(353948631, 'Kevin', 'L', 'X', 'akuntansi', 0),
(354077047, 'Bintang', 'L', 'X', 'Manajemen Perhotelan', 0),
(354084103, 'Pooja', 'P', 'X', 'akuntansi', 0),
(354111687, 'Shafatya', 'P', 'X', 'akuntansi', 5000),
(354174951, 'Shafwan', 'L', 'X', 'Sistem Informasi Jaringan dan Aplikasi', 0),
(354298903, 'Alya', 'P', 'X', 'Akomodasi Perhotelan', 0),
(354300103, 'Roni Sanjaya', 'L', 'X', 'Sistem Informasi Jaringan dan Aplikasi', 10000),
(354356407, 'viona', 'P', 'X', 'Akuntansi', 1000),
(354467639, 'bagaskara', 'L', 'XI', 'Sistem Informasi Jaringan dan Aplikasi', 30000),
(354484663, 'Pak Darmawan', 'L', 'X', 'Guru', 17500),
(354524823, 'mona', 'P', 'X', 'Akuntansi', 0),
(354597303, 'naufal', 'L', 'XI', 'Sistem Informasi Jaringan dan Aplikasi', 0),
(354615479, 'Rajendra', 'L', 'X', 'Multimedia', 0),
(358816759, 'Steven', 'L', 'X', 'Manajemen Perhotelan', 0),
(358861207, 'Nada', 'P', 'XI', 'akuntansi', 0),
(359092839, 'Angel', 'P', 'X', 'Tata Boga', 0),
(4139292773, 'Nicholas', 'L', 'X', 'Sistem Informasi Jaringan dan Aplikasi', 5000),
(4139453749, 'valen', 'P', 'X', 'Akuntansi', 0),
(4139494325, 'Nadia', 'P', 'X', 'Akomodasi Perhotelan', 0),
(4139523733, 'Arif Sanjaya', 'L', 'X', 'Desain Komunikasi dan Visual', 0),
(4139540677, 'Fahmi', 'L', 'X', 'Sistem Informasi Jaringan dan Aplikasi', 0),
(4139632757, 'Bagus', 'L', 'XII', 'Akomodasi Perhotelan', 0),
(4139829797, 'adzan', 'L', 'X', 'Akuntansi', 0),
(4139858789, 'Faisal', 'L', 'X', 'Tata Boga', 10000),
(4139964261, 'Vivian', 'P', 'X', 'Tata Boga', 0),
(4140039413, 'Natalia', 'P', 'X', 'akuntansi', 0),
(4140477733, 'Jeremia', 'L', 'X', 'Desain Komunikasi dan Visual', 5000),
(4142331173, 'Flourachinta', 'P', 'XI', 'Tata Boga', 10000),
(4143514693, 'anita', 'L', 'XI', 'Sistem Informasi Jaringan dan Aplikasi', 0),
(4143984565, 'Nadia', 'P', 'X', 'akuntansi', 0),
(4144089621, 'Pak Andriawan', 'L', 'Guru', 'Guru', 0),
(4222653317, 'Theodore', 'L', 'X', 'Sistem Informasi Jaringan dan Aplikasi', 0),
(4222934725, 'booooowwwwoooooo', 'L', 'XI', 'Sistem Informasi Jaringan dan Aplikasi', 0),
(4222945301, 'anjani', 'P', 'X', 'Akuntansi', 0),
(4222961109, 'Laras', 'P', 'X', 'Desain Komunikasi dan Visual', 0),
(4223143637, 'Muhammad Kevin Alviansyah', 'L', 'XI', 'Sistem Informasi Jaringan dan Aplikasi', 0),
(4226734181, 'owen', 'L', 'X', 'Tata Boga', 5000),
(4227902341, 'Zaidan S', 'L', 'XI', 'Sistem Informasi Jaringan dan Aplikasi', 0),
(4228329621, 'Almanda', 'P', 'X', 'Tata Boga', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `tarik_saldo`
--

CREATE TABLE `tarik_saldo` (
  `id` int(11) NOT NULL,
  `no_rfid` bigint(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `no_rfid` bigint(20) NOT NULL,
  `kantin_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `no_rfid`, `kantin_id`, `total`, `created`) VALUES
(32, 354356407, 13, 25000, '2019-08-28'),
(33, 4140039413, 13, 10000, '2019-08-28'),
(34, 4143984565, 13, 20000, '2019-08-28'),
(35, 349954759, 13, 15000, '2019-08-28'),
(36, 4222945301, 13, 15000, '2019-08-28'),
(37, 353948631, 13, 10000, '2019-08-28'),
(38, 306388311, 13, 10000, '2019-08-28'),
(39, 354111687, 13, 10000, '2019-08-28'),
(40, 4139829797, 13, 15000, '2019-08-28'),
(41, 358816759, 13, 2500, '2019-08-28'),
(42, 354524823, 13, 5000, '2019-08-28'),
(43, 347642423, 13, 30000, '2019-08-28'),
(44, 347642423, 13, 5000, '2019-08-28'),
(45, 4139292773, 13, 5000, '2019-08-28'),
(46, 348180759, 13, 5000, '2019-08-28'),
(47, 354077047, 13, 5000, '2019-08-28'),
(48, 135636471, 13, 5000, '2019-08-28'),
(49, 354300103, 13, 15000, '2019-08-28'),
(50, 354174951, 13, 5000, '2019-08-28'),
(51, 134942535, 13, 5000, '2019-08-28'),
(52, 4222653317, 13, 10000, '2019-08-28'),
(53, 4139540677, 13, 10000, '2019-08-28'),
(54, 354174951, 13, 5000, '2019-08-28'),
(55, 4139632757, 13, 10000, '2019-08-28'),
(56, 306223687, 13, 5000, '2019-08-28'),
(57, 305930231, 13, 10000, '2019-08-28'),
(58, 4226734181, 13, 10000, '2019-08-28'),
(59, 4139858789, 13, 10000, '2019-08-28'),
(60, 354298903, 13, 15000, '2019-08-28'),
(61, 4139494325, 13, 10000, '2019-08-28'),
(62, 359092839, 13, 5000, '2019-08-28'),
(63, 4139964261, 13, 5000, '2019-08-28'),
(64, 4228329621, 13, 15000, '2019-08-28'),
(65, 354615479, 13, 15000, '2019-08-28'),
(66, 4142331173, 13, 10000, '2019-08-28'),
(67, 348253495, 13, 10000, '2019-08-28'),
(68, 354484663, 13, 2500, '2019-08-28'),
(69, 350170279, 13, 10000, '2019-08-28'),
(70, 4222934725, 13, 10000, '2019-08-28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('superadmin','admin','kantin','teller') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(11, 'ivan', '$2y$10$eLRtfVm08CVHYd08PYIqLuWTFS5GlHz6VNDd4cP5.hN2BzaLu7is6', 'superadmin'),
(12, 'kantin', '$2y$10$YEgANfs1Sh5IZgntbef45esMiFeBoPiSQelz.NayhJBfG06.q7Dfm', 'kantin'),
(13, 'admin', '$2y$10$ELWIOeoVlnsExsk8f/OXz.Ch58QP3Q1aOPdEV8oPv0.2cBQ1e.Pkm', 'admin'),
(14, 'teler', '$2y$10$LBAk7DbvDSy6CU0kud4D0.U2ASFhBL9pABaRo4bC1bGJMKKtS1WhW', 'teller');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `isi_saldo`
--
ALTER TABLE `isi_saldo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_rfid` (`no_rfid`);

--
-- Indexes for table `kantin`
--
ALTER TABLE `kantin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `menu_kantin`
--
ALTER TABLE `menu_kantin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kantin_id` (`kantin_id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`no_rfid`);

--
-- Indexes for table `tarik_saldo`
--
ALTER TABLE `tarik_saldo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_rfid` (`no_rfid`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_rfid` (`no_rfid`,`kantin_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `isi_saldo`
--
ALTER TABLE `isi_saldo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `kantin`
--
ALTER TABLE `kantin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `menu_kantin`
--
ALTER TABLE `menu_kantin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tarik_saldo`
--
ALTER TABLE `tarik_saldo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `isi_saldo`
--
ALTER TABLE `isi_saldo`
  ADD CONSTRAINT `isi_saldo_ibfk_1` FOREIGN KEY (`no_rfid`) REFERENCES `siswa` (`no_rfid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kantin`
--
ALTER TABLE `kantin`
  ADD CONSTRAINT `kantin_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_kantin`
--
ALTER TABLE `menu_kantin`
  ADD CONSTRAINT `menu_kantin_ibfk_1` FOREIGN KEY (`kantin_id`) REFERENCES `kantin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tarik_saldo`
--
ALTER TABLE `tarik_saldo`
  ADD CONSTRAINT `tarik_saldo_ibfk_1` FOREIGN KEY (`no_rfid`) REFERENCES `siswa` (`no_rfid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
