-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 14, 2018 at 10:13 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `dbsimkursusfoss`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('ba05479cd1885cd83ed549c56095ea8c', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:29.0) Gecko/20100101 Firefox/29.0', 1402620563, ''),
('c80f168d17e234ddf45746626a4f7089', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:29.0) Gecko/20100101 Firefox/29.0', 1402620563, 'a:2:{s:9:\"user_data\";s:0:\"\";s:9:\"logged_in\";a:2:{s:8:\"id_admin\";s:5:\"admin\";s:8:\"password\";s:32:\"827ccb0eea8a706c4c34a16891f84e7b\";}}'),
('e1b48cbdcc229ae297c2eb9c67ebd58a', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:29.0) Gecko/20100101 Firefox/29.0', 1402630502, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` varchar(30) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `password`) VALUES
('admin', 'admin', 'a8f5f167f44f4964e6c998dee827110c');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kursus`
--

CREATE TABLE `tb_kursus` (
  `id_kursus` varchar(3) NOT NULL,
  `nama_kursus` varchar(100) NOT NULL,
  `biaya_kursus` int(10) NOT NULL,
  `id_pengajar` varchar(3) NOT NULL,
  `id_ruang` varchar(3) NOT NULL,
  `jam` time NOT NULL,
  `hari` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kursus`
--

INSERT INTO `tb_kursus` (`id_kursus`, `nama_kursus`, `biaya_kursus`, `id_pengajar`, `id_ruang`, `jam`, `hari`) VALUES
('G01', 'GIMP', 350000, 'T03', 'R01', '13:00:00', 'Rabu'),
('G02', 'Inkscape', 350000, 'T01', 'R01', '12:00:00', 'Senin'),
('O01', 'Libre Office Writer', 150000, 'T02', 'R02', '08:00:00', 'Senin'),
('O02', 'Libre Office Calc', 200000, 'T02', 'R02', '10:00:00', 'Senin'),
('P01', 'Java Netbeans', 500000, 'T01', 'R01', '10:00:00', 'Minggu'),
('P02', 'Code Igniter', 550000, 'T01', 'R01', '08:00:00', 'Minggu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_peserta` varchar(7) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `jumlah` int(10) NOT NULL,
  `no_bukti` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_peserta`, `tgl_bayar`, `jumlah`, `no_bukti`) VALUES
('G01-001', '2014-06-04', 150000, 'G01-001/2014-06-04'),
('G01-001', '2014-07-04', 50000, 'G01-001/2014-07-04'),
('G01-001', '2018-07-05', 300000, 'G01-001/2018-07-05'),
('G01-002', '2014-06-04', 50000, 'G01-002/2014-06-04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengajar`
--

CREATE TABLE `tb_pengajar` (
  `id_pengajar` varchar(3) NOT NULL,
  `nama_pengajar` varchar(50) NOT NULL,
  `kelamin` varchar(1) NOT NULL,
  `kelahiran` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `pendidikan_akhir` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `perguruan_tinggi` varchar(100) NOT NULL,
  `thn_lulus` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengajar`
--

INSERT INTO `tb_pengajar` (`id_pengajar`, `nama_pengajar`, `kelamin`, `kelahiran`, `tgl_lahir`, `alamat`, `kota`, `no_hp`, `pendidikan_akhir`, `jurusan`, `perguruan_tinggi`, `thn_lulus`) VALUES
('T01', 'Khadafi Zubaidi, S.Kom', 'P', 'Surabaya', '1978-03-10', 'RT.01 / RW.01 Lingk. Telaga Baru A', 'Taliwang', '081-917619239', 'S1', 'Teknik Informatika', 'Universitas Al-Falah Surabaya', 2002),
('T02', 'Yuainiatul Faizah, S.Kom', 'W', 'Aikmel', '1981-10-10', 'RT.01 / RW.01 Lingk. Telaga Baru A', 'Taliwang', '081-917619239', 'S1', 'Teknik Informatika', 'Universitas Al-Falah Surabaya', 2002),
('T03', 'Sahid Fajri, A.Md. Kom', 'P', 'Aikmel', '1988-12-31', 'RT.01 / RW.01 Lingk. Telaga Baru A', 'Taliwang', '081-917619239', 'D3', 'Teknik Informatika', 'AMIKOM Mataram', 2002),
('T04', 'Safi Muhammad, S.Kom', 'P', 'Surabaya', '1978-03-10', 'RT.01 / RW.01 Lingk. Telaga Baru A', 'Taliwang', '081-917619239', 'S1', 'Teknik Informatika', 'Universitas Al-Falah Surabaya', 2004);

-- --------------------------------------------------------

--
-- Table structure for table `tb_peserta`
--

CREATE TABLE `tb_peserta` (
  `id_peserta` varchar(7) NOT NULL,
  `nama_peserta` varchar(50) NOT NULL,
  `kelamin` varchar(1) NOT NULL,
  `kelahiran` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `id_kursus` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_peserta`
--

INSERT INTO `tb_peserta` (`id_peserta`, `nama_peserta`, `kelamin`, `kelahiran`, `tgl_lahir`, `alamat`, `kota`, `id_kursus`) VALUES
('G01-001', 'Rafif Adziyan', 'P', 'Lombok', '2001-06-01', 'Kampung Arab', 'Taliwang', 'G01'),
('G01-002', 'Rifat', 'P', 'Ngawi', '1999-06-03', 'Kampung Bugis', 'Taliwang', 'G01'),
('P02-001', 'Hatifah Nurjannah', 'W', 'Sumbawa', '1981-06-02', 'Kampung Arab', 'Taliwang', 'P02');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ruang`
--

CREATE TABLE `tb_ruang` (
  `id_ruang` varchar(3) NOT NULL,
  `nama_ruang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ruang`
--

INSERT INTO `tb_ruang` (`id_ruang`, `nama_ruang`) VALUES
('R01', 'Ruang Lab. Komputer 1'),
('R02', 'Ruang Lab. Komputer 2'),
('R03', 'Ruang Kelas Teori'),
('R04', 'Ruang Lab. Teknisi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_kursus`
--
ALTER TABLE `tb_kursus`
  ADD PRIMARY KEY (`id_kursus`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`no_bukti`);

--
-- Indexes for table `tb_pengajar`
--
ALTER TABLE `tb_pengajar`
  ADD PRIMARY KEY (`id_pengajar`);

--
-- Indexes for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `tb_ruang`
--
ALTER TABLE `tb_ruang`
  ADD PRIMARY KEY (`id_ruang`);

