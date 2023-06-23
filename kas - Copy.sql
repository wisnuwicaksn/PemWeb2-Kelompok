-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 03:24 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kas`
--

-- --------------------------------------------------------

--
-- Table structure for table `kas`
--

CREATE TABLE `kas` (
  `kode` int(11) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `tgl` date NOT NULL,
  `jumlah` int(10) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `keluar` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kas`
--

INSERT INTO `kas` (`kode`, `keterangan`, `tgl`, `jumlah`, `jenis`, `keluar`) VALUES
(1165, 'test keluar', '2018-08-19', 0, 'keluar', 25000),
(2165, 'test masuk', '2018-08-19', 50000, 'masuk', 0),
(2166, 'test masuk 2', '2018-08-19', 30000, 'masuk', 0),
(2167, 'Bayar utang', '2023-06-20', 213500, 'masuk', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `email`, `password`, `level`, `foto`) VALUES
(4, 'adi', 'adi@adi.com', 'c46335eb267e2e1cde5b017acb4cd799', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_warga`
--

CREATE TABLE `tb_warga` (
  `nama` varchar(70) NOT NULL,
  `nik` int(30) NOT NULL,
  `no_rumah` varchar(100) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_warga`
--

INSERT INTO `tb_warga` (`nama`, `nik`, `no_rumah`, `keterangan`, `status`, `password`) VALUES
('admin', 1, '001A', '', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
('Wisnu Wicaksono', 2147483647, '23A', '', 'warga', '67340a8acc49d521d7fdd25db913bf9d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kas`
--
ALTER TABLE `kas`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_warga`
--
ALTER TABLE `tb_warga`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kas`
--
ALTER TABLE `kas`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2169;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
