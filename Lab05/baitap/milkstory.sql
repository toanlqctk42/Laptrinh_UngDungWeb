-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2021 at 03:54 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `milkstory`
--

-- --------------------------------------------------------

--
-- Table structure for table `hangsua`
--

CREATE TABLE `hangsua` (
  `mahs` varchar(10) NOT NULL,
  `tenhangsua` varchar(50) NOT NULL,
  `diachi` varchar(1000) NOT NULL,
  `dienthoai` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hangsua`
--

INSERT INTO `hangsua` (`mahs`, `tenhangsua`, `diachi`, `dienthoai`, `email`) VALUES
('AB', 'Abbott', 'Công ty nhập khẩu Việt Nam', '8741258', 'abbott@ab.com'),
('DL', 'Dutch Lady', 'Khu công nghiệp Biên Hoà - Đồng Nai', '7826451', 'dutchlady@dl.com'),
('DM', 'Dumex', 'Khu công nghiệp Sóng Thần Bình Dương', '6258943', 'dumex@dm.com'),
('DS', 'Daisy', 'Khu công nghiệp Sóng Thần Bình Dương', '5789321', 'daisy@ds.com'),
('MJ', 'Mead Johnson', 'Công ty nhập khẩu Việt Nam', '8741258', 'meadjohn@mj.com'),
('NTF', 'Nutifood', 'Khu công nghiệp Sóng Thần Bình Dương', '7895632', 'nutifood@ntf.com'),
('VNM', 'Vinamilk', '123 Nguyễn Du - Quận 1 - TP.HCM', '8794561', 'vinamilk@vnm.com');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` varchar(10) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `gioitinh` int(11) NOT NULL,
  `diachi` varchar(1000) DEFAULT NULL,
  `dienthoai` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loaisua`
--

CREATE TABLE `loaisua` (
  `maloaisua` varchar(10) NOT NULL,
  `tenloaisua` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loaisua`
--

INSERT INTO `loaisua` (`maloaisua`, `tenloaisua`) VALUES
('suabot', 'Sữa Bột'),
('suachua', 'Sữa Chua'),
('suatuoi', 'Sữa Tươi');

-- --------------------------------------------------------

--
-- Table structure for table `sua`
--

CREATE TABLE `sua` (
  `masua` varchar(10) NOT NULL,
  `tensua` varchar(100) NOT NULL,
  `mahs` varchar(10) NOT NULL,
  `maloaisua` varchar(10) NOT NULL,
  `trongluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL,
  `thanhphan` varchar(1000) DEFAULT NULL,
  `loiich` varchar(1000) DEFAULT NULL,
  `hinhanh` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hangsua`
--
ALTER TABLE `hangsua`
  ADD PRIMARY KEY (`mahs`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Indexes for table `loaisua`
--
ALTER TABLE `loaisua`
  ADD PRIMARY KEY (`maloaisua`);

--
-- Indexes for table `sua`
--
ALTER TABLE `sua`
  ADD PRIMARY KEY (`masua`),
  ADD KEY `loaisua` (`maloaisua`),
  ADD KEY `hangsua` (`mahs`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sua`
--
ALTER TABLE `sua`
  ADD CONSTRAINT `sua_ibfk_1` FOREIGN KEY (`maloaisua`) REFERENCES `loaisua` (`maloaisua`),
  ADD CONSTRAINT `sua_ibfk_2` FOREIGN KEY (`mahs`) REFERENCES `hangsua` (`mahs`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
