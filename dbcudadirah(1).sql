-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2023 at 05:13 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcudadirah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `naran` varchar(100) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `userpass` varchar(150) DEFAULT NULL,
  `isActive` smallint(3) DEFAULT 0,
  `isLevel` smallint(3) DEFAULT NULL,
  `menuAccess` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `naran`, `username`, `userpass`, `isActive`, `isLevel`, `menuAccess`) VALUES
(1, 'Test user1', 'admin', 'admin123', 0, 1, '1,2,3,4,5,6,7,8,9,10,11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sasansai`
--

CREATE TABLE `tbl_sasansai` (
  `id` int(11) NOT NULL,
  `id_sasan` varchar(30) DEFAULT NULL,
  `kuantidade` int(11) DEFAULT NULL,
  `data_sai` date DEFAULT NULL,
  `deskrisaun` text DEFAULT NULL,
  `autor` varchar(30) DEFAULT NULL,
  `fo_husi` varchar(100) NOT NULL,
  `simu_husi` varchar(100) NOT NULL,
  `isdeleted` smallint(3) DEFAULT 0,
  `remark` text DEFAULT NULL,
  `iby` varchar(30) DEFAULT NULL,
  `idt` datetime DEFAULT NULL,
  `uby` varchar(30) DEFAULT NULL,
  `udt` datetime DEFAULT NULL,
  `dby` varchar(30) DEFAULT NULL,
  `ddt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sasansai`
--

INSERT INTO `tbl_sasansai` (`id`, `id_sasan`, `kuantidade`, `data_sai`, `deskrisaun`, `autor`, `fo_husi`, `simu_husi`, `isdeleted`, `remark`, `iby`, `idt`, `uby`, `udt`, `dby`, `ddt`) VALUES
(1, 'S002', 5, '2023-02-18', 'Test', 'admin', 'test', 'test', 0, NULL, 'admin', '2023-02-18 12:42:47', NULL, NULL, NULL, NULL),
(2, 'S001', 10, '2023-02-18', 'test', 'admin', 'test', 'test', 0, NULL, 'admin', '2023-02-18 12:46:41', NULL, NULL, NULL, NULL),
(3, 'S001', 3, '2022-12-15', 'test', 'admin', 'mario', 'lucio', 0, NULL, 'admin', '2023-02-18 12:47:45', 'admin', '2022-12-15 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sasantama`
--

CREATE TABLE `tbl_sasantama` (
  `id` int(11) NOT NULL,
  `id_sasan` varchar(30) DEFAULT NULL,
  `kuantidade` int(11) DEFAULT NULL,
  `data_tama` date DEFAULT NULL,
  `deskrisaun` text DEFAULT NULL,
  `autor` varchar(30) DEFAULT NULL,
  `fo_husi` varchar(100) NOT NULL,
  `simu_husi` varchar(100) NOT NULL,
  `isdeleted` smallint(3) DEFAULT 0,
  `remark` text DEFAULT NULL,
  `iby` varchar(30) DEFAULT NULL,
  `idt` datetime DEFAULT NULL,
  `uby` varchar(30) DEFAULT NULL,
  `udt` datetime DEFAULT NULL,
  `dby` varchar(30) DEFAULT NULL,
  `ddt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sasantama`
--

INSERT INTO `tbl_sasantama` (`id`, `id_sasan`, `kuantidade`, `data_tama`, `deskrisaun`, `autor`, `fo_husi`, `simu_husi`, `isdeleted`, `remark`, `iby`, `idt`, `uby`, `udt`, `dby`, `ddt`) VALUES
(1, 'S002', 15, '2023-01-22', 'Sasan foin tama', 'Mario', 'UNDP', 'PNTL', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'S001', 7, '2023-01-22', 'Test untuk delete', 'Mario', 'Mario', 'PNTL', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'S001', 5, '2023-02-13', 'Test aumenta', 'Mario', 'UNDP', 'PNTL', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'S001', 30, '2022-12-13', 'test', 'admin', 'mario', 'lucio', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'S001', 2, '2022-05-02', 'test', 'admin', 'mario', 'lucio', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stocksasan`
--

CREATE TABLE `tbl_stocksasan` (
  `id` int(11) NOT NULL,
  `id_sasan` varchar(30) DEFAULT NULL,
  `naran_sasan` varchar(150) DEFAULT NULL,
  `kategoria` varchar(50) DEFAULT NULL,
  `tipu_sasan` varchar(50) DEFAULT NULL,
  `marka` varchar(50) DEFAULT NULL,
  `stok` smallint(6) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `unidade` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_stocksasan`
--

INSERT INTO `tbl_stocksasan` (`id`, `id_sasan`, `naran_sasan`, `kategoria`, `tipu_sasan`, `marka`, `stok`, `tgl`, `unidade`) VALUES
(2, 'S002', 'Laptop', 'Komputador', 'Core i3', 'ASUS', 10, '2022-11-19', 'pcs'),
(10, 'S001', 'Printer', 'Printer', 'L200', 'HP Laser Jet', 66, '2023-01-22', 'pcs');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_treemenu`
--

CREATE TABLE `tbl_treemenu` (
  `id` int(11) NOT NULL,
  `menuheader` int(11) DEFAULT NULL,
  `menutype` varchar(10) DEFAULT NULL,
  `menuname` varchar(30) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `class` varchar(30) DEFAULT NULL,
  `functions` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_treemenu`
--

INSERT INTO `tbl_treemenu` (`id`, `menuheader`, `menutype`, `menuname`, `link`, `class`, `functions`) VALUES
(1, 0, 'HD', 'Stok', 'home/fn_getstock', '', NULL),
(2, 0, 'H', 'Transaksaun', NULL, '', NULL),
(3, 2, 'D', 'Sasan Tama', 'sasan/fn_sasantama', NULL, NULL),
(4, 2, 'D', 'Sasan Sai', 'sasansai/fn_sasansai', NULL, NULL),
(5, 0, 'H', 'Relatoriu', NULL, NULL, NULL),
(6, 5, 'D', 'Sasan', 'relatoriu/', NULL, NULL),
(7, 0, 'H', 'Link Seluk', NULL, NULL, NULL),
(8, 7, 'D', 'Karta', NULL, NULL, NULL),
(9, 7, 'D', 'dadirah.org', NULL, NULL, NULL),
(10, 7, 'D', 'dadirah.sicuntiles.org', NULL, NULL, NULL),
(11, 0, 'H', 'Settings', NULL, NULL, NULL),
(12, 11, 'D', 'Kria User', NULL, NULL, NULL),
(13, 11, 'D', 'Menu Akses', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sasansai`
--
ALTER TABLE `tbl_sasansai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sasantama`
--
ALTER TABLE `tbl_sasantama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_stocksasan`
--
ALTER TABLE `tbl_stocksasan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_treemenu`
--
ALTER TABLE `tbl_treemenu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_sasansai`
--
ALTER TABLE `tbl_sasansai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_sasantama`
--
ALTER TABLE `tbl_sasantama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_stocksasan`
--
ALTER TABLE `tbl_stocksasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_treemenu`
--
ALTER TABLE `tbl_treemenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
