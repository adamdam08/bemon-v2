-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 02:33 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bemon_v2`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id_account` int(11) NOT NULL,
  `email` varchar(32) NOT NULL,
  `kata_sandi` varchar(32) NOT NULL,
  `level` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id_account`, `email`, `kata_sandi`, `level`) VALUES
(1, 'admin@bemon.com', 'ed2b1f468c5f915f3f1cf75d7068baae', 2),
(2, 'adamrahmawan120@gmail.com', 'ed2b1f468c5f915f3f1cf75d7068baae', 0),
(3, 'adamrahmawan9320@gmail.com', 'ed2b1f468c5f915f3f1cf75d7068baae', 1),
(4, 'laluagung309@gmail.com', 'ed2b1f468c5f915f3f1cf75d7068baae', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_bengkel`
--

CREATE TABLE `data_bengkel` (
  `id_account` int(32) NOT NULL,
  `nama_pemilik` varchar(32) NOT NULL,
  `nama_bengkel` varchar(20) NOT NULL,
  `telepon` varchar(32) NOT NULL,
  `kitas` varchar(100) NOT NULL,
  `surat_usaha` varchar(100) NOT NULL,
  `kapasitas` int(32) NOT NULL,
  `koordinat` varchar(32) NOT NULL,
  `status` varchar(32) NOT NULL,
  `alamat` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_bengkel`
--

INSERT INTO `data_bengkel` (`id_account`, `nama_pemilik`, `nama_bengkel`, `telepon`, `kitas`, `surat_usaha`, `kapasitas`, `koordinat`, `status`, `alamat`) VALUES
(3, 'adam achmad rachmawan', 'BE-MON BETA', '085815368964', '1574868728.jpg', '1574868728.jpg', 2, 'S08.14023 E112.31009', 'confirmed', 'Selopuro / Wlingi');

-- --------------------------------------------------------

--
-- Table structure for table `data_customer`
--

CREATE TABLE `data_customer` (
  `id_account` int(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `telepon` varchar(32) NOT NULL,
  `kitas` varchar(32) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_customer`
--

INSERT INTO `data_customer` (`id_account`, `nama`, `telepon`, `kitas`) VALUES
(2, 'adam achmad rachmawan', '085815368964', '1574868267.jpg'),
(4, 'lalu sugab', '085815368964', '1574870798.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_reservasi`
--

CREATE TABLE `data_reservasi` (
  `id_reservasi` int(12) NOT NULL,
  `id_bengkel` int(12) NOT NULL,
  `id_customer` int(12) NOT NULL,
  `seri_kendaraan` varchar(32) NOT NULL,
  `nopol` varchar(32) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(32) NOT NULL,
  `status` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_reservasi`
--

INSERT INTO `data_reservasi` (`id_reservasi`, `id_bengkel`, `id_customer`, `seri_kendaraan`, `nopol`, `tanggal`, `jam`, `status`) VALUES
(1, 3, 2, 'Suzuki Satria FU', 'AG 5615 ZV', '2019-11-28', '10 : 30', 'expired'),
(2, 3, 2, 'Suzuki Satria FU', 'N 5616 AN', '2019-11-28', '14 : 22', 'expired'),
(3, 3, 2, 'Supra X 125', 'S 7778 SD', '2019-11-28', '11 : 22', 'expired'),
(4, 3, 2, 'Supra X 125', 'AG 5615 ZV', '2019-11-28', '11 : 22', 'expired'),
(5, 3, 2, 'Suzuki Satria FU', 'AG 5615 ZV', '2019-11-28', '10 : 22', 'expired'),
(6, 3, 2, 'Suzuki Satria FU', 'AG 5615 ZV', '2019-11-28', '10 : 22', 'expired'),
(7, 3, 2, 'Suzuki Satria FU', 'AG 5615 ZV', '2019-11-28', '10 : 22', 'expired'),
(8, 3, 2, 'Suzuki Satria FU', 'AG 5615 ZV', '2019-11-28', '9 : 22', 'expired'),
(9, 3, 2, 'Suzuki Satria FU', 'AG 5615 ZV', '2019-11-29', '10 : 22', 'expired');

-- --------------------------------------------------------

--
-- Table structure for table `review_bengkel`
--

CREATE TABLE `review_bengkel` (
  `id_review` int(32) NOT NULL,
  `id_bengkel` int(32) NOT NULL,
  `rating` int(32) NOT NULL,
  `review` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_bengkel`
--

INSERT INTO `review_bengkel` (`id_review`, `id_bengkel`, `rating`, `review`) VALUES
(1, 3, 4, 'Jutaan orang bahkan tidak mengetahui bahwa mereka bisa memiliki 1000 USD per hari tanpa keluar rumah'),
(2, 3, 5, 'ã¾ã  ã©ã‘ åˆ‡ã‚Œãšã«ã„ ã® å‡ã£ãŸ'),
(3, 3, 5, 'muri muri desu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`);

--
-- Indexes for table `data_bengkel`
--
ALTER TABLE `data_bengkel`
  ADD PRIMARY KEY (`id_account`);

--
-- Indexes for table `data_customer`
--
ALTER TABLE `data_customer`
  ADD PRIMARY KEY (`id_account`);

--
-- Indexes for table `data_reservasi`
--
ALTER TABLE `data_reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- Indexes for table `review_bengkel`
--
ALTER TABLE `review_bengkel`
  ADD PRIMARY KEY (`id_review`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id_account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `data_reservasi`
--
ALTER TABLE `data_reservasi`
  MODIFY `id_reservasi` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `review_bengkel`
--
ALTER TABLE `review_bengkel`
  MODIFY `id_review` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
