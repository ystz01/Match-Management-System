-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2024 at 09:18 AM
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
-- Database: `timbang_bola_takraw`
--

-- --------------------------------------------------------

--
-- Table structure for table `hakim`
--

CREATE TABLE `hakim` (
  `nokp_hakim` varchar(12) NOT NULL,
  `nama_hakim` varchar(60) DEFAULT NULL,
  `katalaluan_hakim` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hakim`
--

INSERT INTO `hakim` (`nokp_hakim`, `nama_hakim`, `katalaluan_hakim`) VALUES
('111111111111', 'Lim mei Qi', '111'),
('781119078899', 'Amrul Fadlee', '781119078899'),
('781123079879', 'Naim Bin Abu', '781123079879'),
('890229073215', 'Wee Chee Keong', '4567');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `nama_peserta` varchar(60) DEFAULT NULL,
  `nokp_peserta` varchar(12) NOT NULL,
  `katalaluan_peserta` varchar(13) DEFAULT NULL,
  `kod_sekolah` varchar(7) DEFAULT NULL,
  `nokp_hakim` varchar(12) DEFAULT NULL,
  `mata` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`nama_peserta`, `nokp_peserta`, `katalaluan_peserta`, `kod_sekolah`, `nokp_hakim`, `mata`) VALUES
('Zulhaiman', '000908037123', '222', 'SM1234', '781119078899', 1),
('Kenny Wong', '010208011991', '222', 'SM1122', '781123079879', 4),
('Mohammad Kalad', '010519065175', '432', 'SM1234', '781119078899', 3),
('Teh Bing Kuan', '010906072209', '222', 'SM8729', '781119078899', 7),
('Zakim', '011102078819', '321321', 'SM1122', '781119078899', 4),
('Jason Kim', '011124078913', '456', 'SM1234', '781123079879', 3),
('Chai Li Ying', '021106051314', '456', 'SM1122', '781119078899', 8),
('Lee Kim Kee', '021122071199', '22233', 'SM1122', '781119078899', 1),
('Kumar A/L Pablo', '031024079983', '44451', 'SM8729', '781123079879', 7),
('Lim Lay Kuan', '040922075989', '565', 'SM8729', '781119078899', 4),
('Hamid bin Abu Mahir', '041231078967', '411', 'SM1234', '781119078899', 9),
('Ali bin Ahmad', '051212070987', '051212070987', 'SM8729', '781119078899', 2),
('Siti Haminah', '060122071234', '311', 'SM1122', '781119078899', 10),
('Fatimah', '090901070192', '123', 'SM1234', '781119078899', 5),
('Lim Ah Kao', '123123123123', '123', 'SM1122', '890229073215', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `kod_sekolah` varchar(7) NOT NULL,
  `nama_sekolah` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`kod_sekolah`, `nama_sekolah`) VALUES
('SM1122', 'SMK Opara Timun'),
('SM1234', 'SMK Taman Dagen'),
('SM8729', 'SMK Bagan Ancur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hakim`
--
ALTER TABLE `hakim`
  ADD PRIMARY KEY (`nokp_hakim`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`nokp_peserta`),
  ADD KEY `kod_sekolah` (`kod_sekolah`),
  ADD KEY `nokp_hakim` (`nokp_hakim`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`kod_sekolah`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peserta`
--
ALTER TABLE `peserta`
  ADD CONSTRAINT `peserta_ibfk_1` FOREIGN KEY (`kod_sekolah`) REFERENCES `sekolah` (`kod_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peserta_ibfk_2` FOREIGN KEY (`nokp_hakim`) REFERENCES `hakim` (`nokp_hakim`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
