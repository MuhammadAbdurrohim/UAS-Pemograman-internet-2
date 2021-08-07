-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2021 at 08:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biodata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data`
--

CREATE TABLE `tbl_data` (
  `id` int(11) NOT NULL,
  `nama` varchar(123) NOT NULL,
  `email` varchar(123) NOT NULL,
  `tgl_lahir` varchar(123) NOT NULL,
  `jenis_kelamin` varchar(123) NOT NULL,
  `agama` varchar(123) NOT NULL,
  `no_hp` varchar(123) NOT NULL,
  `kota` varchar(123) NOT NULL,
  `alamat` varchar(123) NOT NULL,
  `nama_sekolah1` varchar(123) NOT NULL,
  `nama_sekolah2` varchar(123) NOT NULL,
  `nama_sekolah3` varchar(123) NOT NULL,
  `tamat_sekolah1` varchar(123) NOT NULL,
  `tamat_sekolah2` varchar(123) NOT NULL,
  `tamat_sekolah3` varchar(123) NOT NULL,
  `pengalaman_kerja` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_data`
--

INSERT INTO `tbl_data` (`id`, `nama`, `email`, `tgl_lahir`, `jenis_kelamin`, `agama`, `no_hp`, `kota`, `alamat`, `nama_sekolah1`, `nama_sekolah2`, `nama_sekolah3`, `tamat_sekolah1`, `tamat_sekolah2`, `tamat_sekolah3`, `pengalaman_kerja`) VALUES
(1, 'Muhammad Abdurrohim ', 'muhammadabdurrohim574@gmail.com', '21 Agustus 2000', 'Laki-laki', 'Islam', '089665039420', 'Cirebon', 'Blok Desa Klangenan Kecamatan Klangenan Kab Cirebon', 'SDN 1 Klangenan', 'MTs Khas Kempek', 'MA Khas kempek', '2006-2012', '2012-2015', '2015-2018', 'Praktek kerja lapangan : Guru ngajar mengaji Santri');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(123) NOT NULL,
  `password` varchar(123) NOT NULL,
  `status` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_data`
--
ALTER TABLE `tbl_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_data`
--
ALTER TABLE `tbl_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
