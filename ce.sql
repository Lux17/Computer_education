-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 02:30 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(200) NOT NULL,
  `rolename` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_user`, `username`, `password`, `rolename`) VALUES
(1, 'ketum', 'b8f504b6a7f1374bd9d165f8bea29579c79b7ed8', 'admin'),
(3, 'sekertaris', '9fecf78d4126417f320dcac4c4e867313c8ebacb', 'sekertaris');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_anggota` varchar(50) NOT NULL,
  `lahir` varchar(50) NOT NULL,
  `nomer_hp` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `jabatan` varchar(60) NOT NULL,
  `divisi` varchar(20) NOT NULL,
  `sub_divisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `no_anggota`, `lahir`, `nomer_hp`, `prodi`, `alamat`, `jabatan`, `divisi`, `sub_divisi`) VALUES
(1, 'Lucky  Saputra', 'CE 20.21.031', 'Cirebon, 17 Januari 2002', '08818285309', 'Teknik Informatika', 'Jl.Luwung Blok Sigebang Kec Mundu Kab Cirebon', 'Pengurus', 'Ketua Div Komputer', ''),
(4, 'Mohammad Ridwan', 'CE 20.21.019', 'Cirebon, 19 November 2022', '08818377223', 'Teknik Informatika', ' ', 'Pengurus', 'Ketua umum', '');

-- --------------------------------------------------------

--
-- Table structure for table `kas`
--

CREATE TABLE `kas` (
  `id` int(11) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `jumlah_kas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kas`
--

INSERT INTO `kas` (`id`, `bulan`, `jumlah_kas`) VALUES
(1, 'Januari', '1000000'),
(3, 'Februari', '500000');

-- --------------------------------------------------------

--
-- Table structure for table `ketum`
--

CREATE TABLE `ketum` (
  `id` int(11) NOT NULL,
  `visi` varchar(50) NOT NULL,
  `misi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ketum`
--

INSERT INTO `ketum` (`id`, `visi`, `misi`) VALUES
(3, 'Memajukan teknologi', 'Menjalankan berasas islam');

-- --------------------------------------------------------

--
-- Table structure for table `proker`
--

CREATE TABLE `proker` (
  `id` int(11) NOT NULL,
  `nama_proker` varchar(50) NOT NULL,
  `stat` varchar(50) NOT NULL,
  `divisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `proker`
--

INSERT INTO `proker` (`id`, `nama_proker`, `stat`, `divisi`) VALUES
(1, 'Webinar', 'Soon', 'Komputer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kas`
--
ALTER TABLE `kas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ketum`
--
ALTER TABLE `ketum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kas`
--
ALTER TABLE `kas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ketum`
--
ALTER TABLE `ketum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `proker`
--
ALTER TABLE `proker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
