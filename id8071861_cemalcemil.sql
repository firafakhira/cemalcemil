-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2018 at 04:55 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cemal-cemil`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `idAkun` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ponsel` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`idAkun`, `nama`, `ponsel`, `email`, `password`) VALUES
(1, 'karina', '081122334455', 'karinaad26@gmail.com', 'karina'),
(3, 'hafikamon', '081345678910', 'hafikamon@gmail.com', 'bismillah'),
(4, 'karina', '0811334455', 'karina@gmail.com', 'karina'),
(5, 'Monicametal', '098765', 'monica@gmail.com', 'monica'),
(7, 'fira', '08112333422', 'firafakhira25@gmail.com', 'fira'),
(8, 'haifa', '08217125693', 'haifa@gmail.com', 'haifa');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `idDriver` int(11) NOT NULL,
  `namaDriver` varchar(20) NOT NULL,
  `noPlat` varchar(10) NOT NULL,
  `noHp` varchar(13) NOT NULL,
  `gambar` varchar(191) NOT NULL DEFAULT '1.jpg',
  `rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`idDriver`, `namaDriver`, `noPlat`, `noHp`, `gambar`, `rating`) VALUES
(1, 'Naufal', 'D 1236 VT', '0812345678', 'haifa/Driver/nopal.jpg', 0),
(2, 'Muadz', 'F 6742 TV', '0834567847', 'haifa/Driver/mu\'adz.jpg', 2),
(3, 'Shafwany', 'F 9809 RT', '0812658979', 'haifa/Driver/opan.jpg', 4),
(4, 'Abu', 'AB 9145 HA', '0898675333', 'haifa/Driver/abu.jpg', 3),
(5, 'Bagus', 'B 4685 ST', '0811544768', 'haifa/Driver/bagus.jpg', 3),
(6, 'Hansel', 'PA 7765 AP', '08775665423', 'haifa/Driver/hansel.jpg', 3),
(7, 'Arizona', 'S 1234 AN', '08124533789', 'haifa/Driver/ari.jpg', 4),
(8, 'Haldis', 'K 4514 OL', '08129986778', 'haifa/Driver/haldis.jpg', 0),
(9, 'Hanam', 'H 1451 PL', '08776885564', 'haifa/Driver/hanam.jpg', 3),
(10, 'Roby', 'AA 9876 SA', '0898763446', 'haifa/Driver/roby.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `malmil`
--

CREATE TABLE `malmil` (
  `namaFood` varchar(20) NOT NULL,
  `harga` double NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `malmil`
--

INSERT INTO `malmil` (`namaFood`, `harga`, `jenis`) VALUES
('Cimin', 5000, 'MalmilFood'),
('Es Buah', 10000, 'MalmilIce'),
('Es Cincau', 10000, 'MalmilIce'),
('Es Doger', 5000, 'MalmilIce'),
('Es Kelapa', 10000, 'MalmilIce'),
('Es Krim', 10000, 'MalmilIce'),
('Es Serut', 5000, 'MalmilIce'),
('Kebab', 15000, 'MalmilFood'),
('Sop Buah', 10000, 'MalmilIce'),
('Sosis Bakar', 10000, 'MalmilFood'),
('Surabi', 10000, 'MalmilFood'),
('Susu KPBS', 3000, 'MalmilIce'),
('Tahu Sumedang', 5000, 'MalmilFood');

-- --------------------------------------------------------

--
-- Table structure for table `orderr`
--

CREATE TABLE `orderr` (
  `id_detail` int(5) NOT NULL,
  `idTransaksi` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `namaFood` varchar(20) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `harga` double NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `notes` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksii`
--

CREATE TABLE `transaksii` (
  `id_detail` int(5) NOT NULL,
  `idTransaksi` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `namaFood` varchar(20) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `harga` double NOT NULL,
  `lokasi` varchar(20) NOT NULL,
  `notes` varchar(50) NOT NULL,
  `namaDriver` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksii`
--

INSERT INTO `transaksii` (`id_detail`, `idTransaksi`, `tanggal`, `namaFood`, `jumlah`, `harga`, `lokasi`, `notes`, `namaDriver`) VALUES
(26, 1, '2018-11-30', 'Sop Buah', 1, 5000, 'BBC', 'aa', ''),
(27, 1, '2018-11-30', 'Es Buah', 4, 5000, 'BBC', 'aa', ''),
(28, 1, '2018-11-30', 'Siomay', 1, 5000, '', '', ''),
(29, 1, '2018-11-30', 'Lupis', 3, 5000, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`idAkun`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`idDriver`);

--
-- Indexes for table `malmil`
--
ALTER TABLE `malmil`
  ADD PRIMARY KEY (`namaFood`);

--
-- Indexes for table `orderr`
--
ALTER TABLE `orderr`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `transaksii`
--
ALTER TABLE `transaksii`
  ADD PRIMARY KEY (`id_detail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `idAkun` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `idDriver` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orderr`
--
ALTER TABLE `orderr`
  MODIFY `id_detail` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `transaksii`
--
ALTER TABLE `transaksii`
  MODIFY `id_detail` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
