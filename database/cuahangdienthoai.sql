-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2020 at 05:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cuahangdienthoai`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thu_tu` int(11) NOT NULL,
  `hien_thi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`ten`, `thu_tu`, `hien_thi`) VALUES
('Điện Thoại', 1, 'on'),
('Laptop', 2, 'on'),
('Máy Ảnh', 3, 'on'),
('Máy Tính Bảng', 4, 'on'),
('Phụ Kiện', 5, 'on'),
('Điện Lạnh', 6, 'off');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `khach_hang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoi_diem` date NOT NULL,
  `tong_tien` float NOT NULL,
  `tinh_trang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_donhang`
--

INSERT INTO `tbl_donhang` (`khach_hang`, `thoi_diem`, `tong_tien`, `tinh_trang`) VALUES
('Trần Văn Nhân', '0000-00-00', 15000000, 'Đã giao'),
('Trần Văn Nhân', '0000-00-00', 15000000, 'Đã giao'),
('Trần Văn Nhân', '0000-00-00', 15000000, 'Đã giao'),
('Trần Văn Dũng', '0000-00-00', 2500000, 'Chưa giao');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `masp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `matl` int(11) NOT NULL,
  `tensp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` float NOT NULL,
  `hinh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `loai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hien_thi` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `masp`, `matl`, `tensp`, `gia`, `hinh`, `loai`, `hien_thi`) VALUES
(1, 'phone0', 0, 'OPPO A7', 20000000, 'image/phone/oppo-a7-green-400x400.jpg', 'Điện Thoại', 'on'),
(2, 'phone1', 0, 'Samsung Galaxy Note 9', 76000000, 'image/phone/samsung-galaxy-note-9-black-bf-400x400.jpg', 'Điện Thoại', 'on'),
(3, 'phone2', 0, 'iPhone Xr 64GB', 100000000, 'image/phone/iphone-xr-black-400x400.jpg', 'Điện Thoại', 'on'),
(4, 'phone3', 0, 'Samsung Galaxy J8', 54000000, 'image/phone/samsung-galaxy-j8-600x600-400x400.jpg', 'Điện Thoại', 'on'),
(5, 'phone4', 0, 'Samsung Galaxy A7 (2018)', 62000000, 'image/phone/samsung-galaxy-a7-2018-blue-400x400.jpg', 'Điện Thoại', 'on'),
(6, 'phone5', 0, 'Nokia 3.1 32GB', 15000000, 'image/phone/nokia-31-docquyen-400x400.jpg', 'Điện Thoại', 'on'),
(7, 'phone6', 0, 'Xiaomi Mi 8 Lite', 68000000, 'image/phone/xiaomi-mi-8-lite-black-1-400x400.jpg', 'Điện Thoại', 'on'),
(8, 'phone7', 0, 'Vivo Y71', 94000000, 'image/phone/vivo-y71-docquyen-400x400.jpg', 'Điện Thoại', 'on'),
(9, 'phone8', 0, 'iPhone Xs Max 512GB', 30000000, 'image/phone/iphone-xs-max-512gb-gold-400x400.jpg', 'Điện Thoại', 'on'),
(10, 'phone9', 0, 'iPhone Xs Max 256GB', 43000000, 'image/phone/iphone-xs-max-256gb-white-400x400.jpg', 'Điện Thoại', 'on'),
(11, 'phone10', 0, 'iPhone Xs 256GB', 19, 'image/phone/iphone-xs-256gb-white-400x400.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `passw` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioi_tinh` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngsinh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `name`, `passw`, `dia_chi`, `sdt`, `email`, `gioi_tinh`, `ngsinh`) VALUES
(1, 'Nguyễn Quốc Hương', '12345', 'TP. Hồ Chí Minh', 2147483647, 'asdriv0@gmail.com', 'Nam', 0),
(19, 'Nguyễn Khắc Mạnh', '99349d99167034abf0e0d3ec9a85a93f', 'thanh hoa', 865983826, 'khacmanh.info@gmail.com', 'nam', 1299446702),
(20, 'manh', '12345', 'thanh hoa', 25644151, 'khacmanh.info@gmail.com', 'nam', 0),
(21, 'manh', '12345', 'thanh hoa', 25644151, 'khacmanh.info@gmail.com', 'nam', 0),
(22, 'manh', '12345', 'Ha noi', 25644151, 'kdfdo@gmail.com', 'nu', 0),
(34, 'Lục Phá Đá', '123456', 'Hà Nội', 21546165, 'info@gmail.com', 'Nam', 2020),
(35, 'Nguyễn Khắc Mạnh', '2324', 'dsfdsf', 865983826, 'khacnh@gmail.com', 'tdgtf', 2020),
(36, 'Nguyễn Khắc Mạnh', '2324', 'dsfdsf', 865983826, 'khacnh@gmail.com', 'tdgtf', 2020),
(37, 'Nguyễn Khắc Mạnh', '2324', 'dsfdsf', 865983826, 'khacnh@gmail.com', 'tdgtf', 2020),
(38, 'fdsf', '434234', 'ds', 2147483647, 'rtgserdginfo@gmail.com', 'Nam', 1999),
(39, '97865958', 'fgdg', 'gfsdg', 342234, 'admin@gmail.com', '5435', 2020);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
