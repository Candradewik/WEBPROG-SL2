-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 02:41 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keuangansl2`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nama_depan` varchar(50) NOT NULL,
  `nama_tengah` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nik` varchar(16) NOT NULL,
  `warga_negara` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` varchar(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password1` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama_depan`, `nama_tengah`, `nama_belakang`, `tempat_lahir`, `tgl_lahir`, `nik`, `warga_negara`, `email`, `no_hp`, `alamat`, `kode_pos`, `username`, `password1`) VALUES
('Aaa', 'Bbb', 'Ccc', 'Mataram', '2022-03-15', '1234123412341234', 'Indonesia', 'abc@gmail.com', '083129052111', 'Nusa Tenggara Barat', '1234', 'abc', 'abc'),
('Putu Adi', 'Candra', 'Dewi', 'Ampenan', '2022-04-01', '1234123412341234', 'Indonesia', 'candradewi583@gmail.com', '083129052175', 'Lombok, Nusa Tenggara Barat', '2345', 'dewi', '123'),
('Ayu', 'Dinda', 'Pratiwi', 'Ampenan', '2022-03-01', '1234123412341235', 'Indonesia', 'dinda@gmail.com', '083129052100', 'Ampenan', '1234', 'dinda', 'dinda'),
('Rifal', 'Hari', 'Topan', 'Mataram', '2001-02-11', '1234123412341234', 'Indonesia', 'rifal@gmail.com', '083129051111', 'Rembiga', '1111', 'rifal', 'rht');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
