-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2021 at 06:54 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `baris`
--

CREATE TABLE `baris` (
  `idBaris` int(10) NOT NULL,
  `namaBaris` varchar(10) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `idLemari` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baris`
--

INSERT INTO `baris` (`idBaris`, `namaBaris`, `keterangan`, `idLemari`) VALUES
(0, '111', '', 1),
(1, '1222', '222', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bt`
--

CREATE TABLE `bt` (
  `idBukuTanah` varchar(100) NOT NULL,
  `noHak` int(10) NOT NULL,
  `idJenisHak` int(10) NOT NULL,
  `idDesa` int(10) NOT NULL,
  `idKondisi` int(10) NOT NULL,
  `idBundel` int(10) NOT NULL,
  `idSU` int(100) NOT NULL,
  `idBundelSengketa` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bundel`
--

CREATE TABLE `bundel` (
  `idBundel` int(10) NOT NULL,
  `namaBundel` varchar(50) NOT NULL,
  `idBaris` int(10) NOT NULL,
  `idDesa` int(10) NOT NULL,
  `sengketa` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `idDesa` int(10) NOT NULL,
  `namaDesa` varchar(50) NOT NULL,
  `idKec` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jenishak`
--

CREATE TABLE `jenishak` (
  `idJenisHak` int(10) NOT NULL,
  `namaJenisHak` varchar(50) NOT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenishak`
--

INSERT INTO `jenishak` (`idJenisHak`, `namaJenisHak`, `keterangan`) VALUES
(1, 'Hak Milik', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kec`
--

CREATE TABLE `kec` (
  `idKec` int(10) NOT NULL,
  `namaKec` varchar(50) NOT NULL,
  `idKota` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kondisi`
--

CREATE TABLE `kondisi` (
  `idKondisi` int(10) NOT NULL,
  `namaKondisi` varchar(50) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kondisi`
--

INSERT INTO `kondisi` (`idKondisi`, `namaKondisi`, `keterangan`) VALUES
(0, 'a', 'a'),
(1, 'Baik', NULL),
(4, '4', '4'),
(5, '5', '5'),
(7, '7', '7'),
(8, '18', '18'),
(111, 's', 's'),
(444444, '444', '44');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `idKota` int(10) NOT NULL,
  `namaKota` varchar(50) NOT NULL,
  `idProv` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`idKota`, `namaKota`, `idProv`) VALUES
(1, 'Banda Aceh', 11),
(123, 'Aceh besar', 11);

-- --------------------------------------------------------

--
-- Table structure for table `lemari`
--

CREATE TABLE `lemari` (
  `idLemari` int(10) NOT NULL,
  `namaLemari` varchar(50) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lemari`
--

INSERT INTO `lemari` (`idLemari`, `namaLemari`, `keterangan`) VALUES
(0, '', '333'),
(1, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `idPinjam` int(100) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `tglPinjam` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tglKembali` date NOT NULL,
  `susun` int(5) NOT NULL,
  `idWaktu` int(10) NOT NULL,
  `idWarkah` int(10) DEFAULT NULL,
  `idBt` int(10) DEFAULT NULL,
  `idSu` int(10) DEFAULT NULL,
  `noInvoice` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prov`
--

CREATE TABLE `prov` (
  `idProv` int(10) NOT NULL,
  `namaProv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prov`
--

INSERT INTO `prov` (`idProv`, `namaProv`) VALUES
(1, '2'),
(11, 'Aceh');

-- --------------------------------------------------------

--
-- Table structure for table `su`
--

CREATE TABLE `su` (
  `idSu` int(10) NOT NULL,
  `nomor` int(5) NOT NULL,
  `tahun` year(4) NOT NULL,
  `idDesa` int(10) NOT NULL,
  `idBundel` int(10) NOT NULL,
  `idBundelSengketa` int(10) DEFAULT NULL,
  `idKondisi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `idWaktu` int(10) NOT NULL,
  `pelayanan` varchar(100) NOT NULL,
  `durasi` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `warkah`
--

CREATE TABLE `warkah` (
  `idWarkah` int(10) NOT NULL,
  `tahun` year(4) NOT NULL,
  `idBundel` int(10) NOT NULL,
  `idDesa` int(10) NOT NULL,
  `idKondisi` int(10) NOT NULL,
  `idBundelSengketa` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baris`
--
ALTER TABLE `baris`
  ADD PRIMARY KEY (`idBaris`);

--
-- Indexes for table `bt`
--
ALTER TABLE `bt`
  ADD PRIMARY KEY (`idBukuTanah`);

--
-- Indexes for table `bundel`
--
ALTER TABLE `bundel`
  ADD PRIMARY KEY (`idBundel`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`idDesa`);

--
-- Indexes for table `jenishak`
--
ALTER TABLE `jenishak`
  ADD PRIMARY KEY (`idJenisHak`);

--
-- Indexes for table `kec`
--
ALTER TABLE `kec`
  ADD PRIMARY KEY (`idKec`);

--
-- Indexes for table `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`idKondisi`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`idKota`);

--
-- Indexes for table `lemari`
--
ALTER TABLE `lemari`
  ADD PRIMARY KEY (`idLemari`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`idPinjam`);

--
-- Indexes for table `prov`
--
ALTER TABLE `prov`
  ADD PRIMARY KEY (`idProv`);

--
-- Indexes for table `su`
--
ALTER TABLE `su`
  ADD PRIMARY KEY (`idSu`);

--
-- Indexes for table `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`idWaktu`);

--
-- Indexes for table `warkah`
--
ALTER TABLE `warkah`
  ADD PRIMARY KEY (`idWarkah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
