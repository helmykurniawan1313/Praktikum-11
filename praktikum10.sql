-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13 Apr 2020 pada 19.36
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktikum10`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `tanggal` date NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `NISN` varchar(20) NOT NULL,
  `NIK` varchar(20) NOT NULL,
  `Tempat_Lahir` varchar(20) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `No_Akta` varchar(20) NOT NULL,
  `Agama` varchar(10) NOT NULL,
  `Kewarganegaraan` varchar(20) NOT NULL,
  `Kebutuhan_Khusus` varchar(20) NOT NULL,
  `Alamat` varchar(30) NOT NULL,
  `RT` varchar(3) NOT NULL,
  `RW` varchar(3) NOT NULL,
  `Dusun` varchar(20) NOT NULL,
  `Desa` varchar(20) NOT NULL,
  `Kecamatan` varchar(20) NOT NULL,
  `Kode_Pos` varchar(8) NOT NULL,
  `Lintang` varchar(25) NOT NULL,
  `Bujur` varchar(25) NOT NULL,
  `Tempat_Tinggal` varchar(15) NOT NULL,
  `Transportasi` varchar(15) NOT NULL,
  `KKS` varchar(20) NOT NULL,
  `Anak_Ke` int(2) NOT NULL,
  `KPS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`tanggal`, `nama`, `jenis_kelamin`, `NISN`, `NIK`, `Tempat_Lahir`, `Tanggal_Lahir`, `No_Akta`, `Agama`, `Kewarganegaraan`, `Kebutuhan_Khusus`, `Alamat`, `RT`, `RW`, `Dusun`, `Desa`, `Kecamatan`, `Kode_Pos`, `Lintang`, `Bujur`, `Tempat_Tinggal`, `Transportasi`, `KKS`, `Anak_Ke`, `KPS`) VALUES
('2020-04-14', 'Helmy Kurniawan', 'Laki - Laki', '19990910', '18082010035', 'Surabaya', '1999-09-10', '10091999', 'Islam', 'INDONESIA', 'Tidak Berkebutuhan K', 'Wonoayu', '03', '03', 'Medayu', 'Medokan Ayu', 'Rungkut', '60295', 'LT 111', 'BT 112', 'Rumah Pribadi', 'Sepeda Motor', '09101999', 1, '9991'),
('2020-04-13', 'Rika Eko Wahyuni', 'Perempuan', '56665', '17082010035', 'MJK', '2020-01-07', '454545', 'Islam', 'KOREA', 'Tidak Berkebutuhan K', 'medayu', '4', '5', 'TUY', 'GUY', 'MJU', '45666', 'WERT', 'YUIO', 'Rumah Pribadi', 'Sepeda Motor', '7890', 1, '678888');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`NISN`),
  ADD UNIQUE KEY `NIK` (`NIK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
