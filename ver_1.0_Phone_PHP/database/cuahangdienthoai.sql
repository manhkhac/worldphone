-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 10:15 PM
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
  `id_danhmuc` int(11) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thu_tu` int(11) DEFAULT NULL,
  `hien_thi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `ten`, `thu_tu`, `hien_thi`) VALUES
(1, 'Điện Thoại', 1, 'on'),
(2, 'Laptop', 2, 'on'),
(3, 'Máy Ảnh', 3, 'on'),
(4, 'Máy Tính Bảng', 4, 'on'),
(5, 'Phụ Kiện', 5, 'on'),
(6, 'Điện Lạnh', 6, 'off');

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
  `id_dm` int(11) NOT NULL COMMENT 'Tên danh mục',
  `masp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `matl` int(11) NOT NULL,
  `tensp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` float NOT NULL,
  `hinh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `chi_tiet` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Miêu tả'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `id_dm`, `masp`, `matl`, `tensp`, `gia`, `hinh`, `chi_tiet`) VALUES
(1, 1, 'phone0', 0, 'OPPO A7', 20000000, 'image/phone/oppo-a7-green-400x400.jpg', 'Điện Thoại'),
(2, 1, 'phone1', 0, 'Samsung Galaxy Note 9', 76000000, 'image/phone/samsung-galaxy-note-9-black-bf-400x400.jpg', 'Điện Thoại'),
(3, 1, 'phone2', 0, 'iPhone Xr 64GB', 100000000, 'image/phone/iphone-xr-black-400x400.jpg', 'Điện Thoại'),
(4, 1, 'phone3', 0, 'Samsung Galaxy J8', 54000000, 'image/phone/samsung-galaxy-j8-600x600-400x400.jpg', 'Điện Thoại'),
(5, 1, 'phone4', 0, 'Samsung Galaxy A7 (2018)', 62000000, 'image/phone/samsung-galaxy-a7-2018-blue-400x400.jpg', 'Điện Thoại'),
(6, 1, 'phone5', 0, 'Nokia 3.1 32GB', 15000000, 'image/phone/nokia-31-docquyen-400x400.jpg', 'Điện Thoại'),
(7, 1, 'phone6', 0, 'Xiaomi Mi 8 Lite', 68000000, 'image/phone/xiaomi-mi-8-lite-black-1-400x400.jpg', 'Điện Thoại'),
(8, 1, 'phone7', 0, 'Vivo Y71', 94000000, 'image/phone/vivo-y71-docquyen-400x400.jpg', 'Điện Thoại'),
(9, 1, 'phone8', 0, 'iPhone Xs Max 512GB', 30000000, 'image/phone/iphone-xs-max-512gb-gold-400x400.jpg', 'Điện Thoại'),
(10, 1, 'phone9', 0, 'iPhone Xs Max 256GB', 43000000, 'image/phone/iphone-xs-max-256gb-white-400x400.jpg', 'Điện Thoại'),
(11, 1, 'phone10', 0, 'iPhone Xs 256GB', 19, 'image/phone/iphone-xs-256gb-white-400x400.jpg', ''),
(12, 1, 'phone12', 0, 'iPhone X 256GB Gray', 23, 'image/phone/iphone-x-256gb-a1-600x600-600x600-400x400.jpg', ''),
(13, 1, 'phone13', 0, 'iPhone X 256GB Silver', 70, 'image/phone/iphone-x-256gb-silver-400x400.jpg', ''),
(14, 1, 'phone14', 0, 'iPhone Xs 64GB', 86, 'image/phone/iphone-xs-gold-400x400.jpg', ''),
(15, 1, 'phone15', 0, 'Samsung Galaxy Note 9 512GB', 67, 'image/phone/samsung-galaxy-note-9-512gb-blue-400x400.jpg', ''),
(16, 1, 'phone16', 0, 'iPhone X 64GB Gray', 35, 'image/phone/iphone-x-64gb-21-400x400.jpg', ''),
(17, 1, 'phone17', 0, 'iPhone X 64GB Silver', 39, 'image/phone/iphone-x-64gb-silver-400x400.jpg', ''),
(18, 1, 'phone18', 0, 'iPhone Xr 256GB', 34, 'image/phone/iphone-xr-256gb-white-400x400.jpg', ''),
(19, 1, 'phone19', 0, 'iPhone Xr 128GB', 28, 'image/phone/iphone-xr-128gb-red-400x400.jpg', ''),
(20, 1, 'phone20', 0, 'Samsung Galaxy S9+ 128GB', 86, 'image/phone/samsung-galaxy-s9-plus-128gb-600x600-600x600-400x400.jpg', ''),
(21, 1, 'phone21', 0, 'iPhone 7 Plus 256GB', 3, 'image/phone/iphone-7-plus-256gb-hh-400x400.jpg', ''),
(22, 1, 'phone22', 0, 'Samsung Galaxy S9+ 64GB', 31, 'image/phone/samsung-galaxy-s9-plus-64gb-xanh-san-ho-2-1-400x400.jpg', ''),
(23, 1, 'phone23', 0, 'iPhone 8 256GB', 89, 'image/phone/iphone-8-256gb-hh-400x400.jpg', ''),
(24, 1, 'phone24', 0, 'Huawei Mate 20 Pro', 59, 'image/phone/huawei-mate-20-pro-green-400x400.jpg', ''),
(25, 1, 'phone25', 0, 'iPhone 8 Plus 64GB', 1, 'image/phone/iphone-8-plus-hh-400x400.jpg', ''),
(26, 1, 'phone26', 0, 'OPPO Find X', 68, 'image/phone/oppo-find-x-1-400x400.jpg', ''),
(27, 1, 'phone27', 0, 'Samsung Galaxy Note 8', 69, 'image/phone/samsung-galaxy-note8-black-bf-1-400x400.jpg', ''),
(28, 1, 'phone28', 0, 'iPhone 7 Plus 32GB', 100, 'image/phone/iphone-7-plus-32gb-hh-400x400.jpg', ''),
(29, 1, 'phone29', 0, 'iPhone 8 64GB', 30, 'image/phone/iphone-8-64gb-hh-400x400.jpg', ''),
(30, 1, 'phone30', 0, 'Huawei Mate 20', 83, 'image/phone/huawei-mate-20-black-400x400.jpg', ''),
(31, 1, 'phone31', 0, 'iPhone 7 32GB', 19, 'image/phone/iphone-7-hh-400x400.jpg', ''),
(32, 1, 'phone32', 0, 'Xiaomi Mi 8', 73, 'image/phone/xiaomi-mi-8-1-400x400.jpg', ''),
(33, 1, 'phone33', 0, 'Samsung Galaxy A8 Star', 38, 'image/phone/samsung-galaxy-a8-star-black-400x400.jpg', ''),
(34, 1, 'phone34', 0, 'Samsung Galaxy A9 (2018)', 59, 'image/phone/samsung-galaxy-a9-2018-blue-400x400.jpg', ''),
(35, 1, 'phone35', 0, 'Samsung Galaxy A8+ (2018)', 42, 'image/phone/samsung-galaxy-a8-plus-2018-gold-400x400.jpg', ''),
(36, 1, 'phone36', 0, 'iPhone 6s Plus 32GB', 21, 'image/phone/iphone-6s-plus-32gb-vang-hong-400x400.png', ''),
(37, 1, 'phone37', 0, 'Samsung Galaxy A8 (2018)', 95, 'image/phone/samsung-galaxy-a8-2018-purple-400x400.jpg', ''),
(38, 1, 'phone38', 0, 'Vivo V11', 30, 'image/phone/vivo-v11-400x400.jpg', ''),
(39, 1, 'phone39', 0, 'Huawei Nova 3', 2, 'image/phone/huawei-nova-3-2-400x400.jpg', ''),
(40, 1, 'phone40', 0, 'Samsung Galaxy A7 (2018) 128GB', 48, 'image/phone/samsung-galaxy-a7-2018-128gb-black-400x400.jpg', ''),
(41, 1, 'phone41', 0, 'OPPO F9 6GB', 81, 'image/phone/oppo-f9-6gb-red-400x400.jpg', ''),
(42, 1, 'phone42', 0, 'Samsung Galaxy A6+ (2018)', 45, 'image/phone/samsung-galaxy-a6-plus-2018-xanh-400x400.jpg', ''),
(43, 1, 'phone43', 0, 'Nokia 7 plus', 86, 'image/phone/nokia-7-plus-2-400x400.jpg', ''),
(44, 1, 'phone44', 0, 'OPPO F9', 77, 'image/phone/oppo-f9-bf-1-400x400.jpg', ''),
(45, 1, 'phone45', 0, 'Vivo V11i', 33, 'image/phone/vivo-v11i-blue-400x400.jpg', ''),
(46, 1, 'phone46', 0, 'HTC U12 life', 53, 'image/phone/htc-u12-life-1-400x400.jpg', ''),
(47, 1, 'phone47', 0, 'Vivo V9', 19, 'image/phone/vivo-v9-2-1-600x600-400x400.jpg', ''),
(48, 1, 'phone48', 0, 'iPhone 6 32GB', 47, 'image/phone/iphone-6-32gb-gold-hh-600x600-600x600-400x400.jpg', ''),
(49, 1, 'phone49', 0, 'Realme 2 Pro 8GB/128GB', 22, 'image/phone/oppo-realme-2-pro-black-400x400.jpg', ''),
(50, 1, 'phone50', 0, 'OPPO F7', 67, 'image/phone/oppo-f7-bac-400x400.jpg', ''),
(51, 1, 'phone51', 0, 'OPPO F7 128GB', 18, 'image/phone/oppo-f7-128gb-den-400x400.jpg', ''),
(52, 1, 'phone52', 0, 'Samsung Galaxy J7+', 71, 'image/phone/samsung-galaxy-j7-plus-hh-400x400.jpg', ''),
(53, 1, 'phone53', 0, 'Xiaomi Mi A2', 77, 'image/phone/xiaomi-mi-a2-blue-400x400.jpg', ''),
(54, 1, 'phone54', 0, 'Nokia 6.1 Plus', 90, 'image/phone/nokia-61-plus-2-400x400.jpg', ''),
(55, 2, 'laptop0', 1, 'HP Pavilion 14 ce0021TU i3 8130U(4MF00PA)', 67, 'image/laptop/hp-pavilion-14-ce0021tu-i-4mf00pa-33397-ava1-400x400.jpg', ''),
(56, 2, 'laptop1', 1, 'Dell Inspiron 3576 i5 8250U (P63F002N76F)', 23, 'image/laptop/dell-inspiron-3576-p63f002n76f-450-400x400.png', ''),
(57, 2, 'laptop2', 1, 'Asus VivoBook S15 S510UA i5 8250U (BQ414T)', 43, 'image/laptop/asus-s510ua-i5-8250u-bq414t-dai-dien-450x300-400x400.jpg', ''),
(58, 2, 'laptop3', 1, 'Acer Aspire E5 576 34ND i3 8130U (NX.GRYSV.004)', 27, 'image/laptop/acer-aspire-e5-576-34nd-nxgrysv004-400x400.jpg', ''),
(59, 2, 'laptop4', 1, 'Dell Vostro 3468 i5 7200U', 50, 'image/laptop/dell-vostro-3468-i5-7200u-den-450x300-230x153.png', ''),
(60, 2, 'laptop5', 1, 'HP 15 da0054TU i3 7020U (4ME68PA)', 49, 'image/laptop/hp-15-da0054tu-4me68pa-thumb-400x400.jpg', ''),
(61, 2, 'laptop6', 1, 'Acer Aspire E5 476 i3 8130U (NX.GWTSV.002) Xám', 47, 'image/laptop/acer-aspire-e5-476-i3-8130u-nxgwtsv002-ava-400x400.jpg', ''),
(62, 2, 'laptop7', 1, 'HP Envy 13 ah0025TU i5 8250U (4ME92PA)', 65, 'image/laptop/hp-envy-13-ah0025tu-4me92pa-400x400.jpg', ''),
(63, 2, 'laptop8', 1, 'Lenovo IdeaPad 130 14IKB i3 7020U (81H60017VN)', 58, 'image/laptop/lenovo-ideapad-130-14ikb-81h60017vn-ava-400x400.jpg', ''),
(64, 2, 'laptop9', 1, 'HP Pavilion x360 cd0082TU i3 8130U (4MF15PA)', 10, 'image/laptop/hp-pavilion-x360-cd0082tu-4mf15pa-450-400x400.jpg', ''),
(65, 2, 'laptop10', 1, 'Dell Inspiron 5570 i5 8250U (M5I5238W)', 62, 'image/laptop/dell-inspiron-5570-m5i5238w-office365-dai-dien-450x300-400x400.jpg', ''),
(66, 2, 'laptop11', 1, 'HP 15 da0055TU i3 7020U (4NA89PA)', 92, 'image/laptop/hp-15-da0055tu-4na89pa-400x400.jpg', ''),
(67, 2, 'laptop12', 1, 'Asus VivoBook S15 S510UA i3 8130U (BQ222T)', 100, 'image/laptop/asus-s510ua-bq222t-thumbava-400x400.jpg', ''),
(68, 2, 'laptop13', 1, 'Dell Vostro 5568 i5 7200U (077M52)', 73, 'image/laptop/dell-vostro-5568-077m52-vangdong-450x300-450x300-400x400.png', ''),
(69, 2, 'laptop14', 1, 'HP 15 da0036TX i7 8550U (4ME78PA)', 21, 'image/laptop/hp-15-da0036tx-4me78pa-cava-400x400.jpg', ''),
(70, 2, 'laptop15', 1, 'HP 15 da0058TU i5 8250U (4NA92PA)', 38, 'image/laptop/hp-15-da0058tu-4na92pa-33397-ava1-400x400.jpg', ''),
(71, 2, 'laptop16', 1, 'Acer Aspire E5 576G 52YQ i5 8250U (NX.GWNSV.001)', 23, 'image/laptop/acer-aspire-e5-576g-52yq-nxgwnsv001-thumb-400x400.jpg', ''),
(72, 2, 'laptop17', 1, 'Lenovo Ideapad 330 15IKBR i3 7020U (81DE00LDVN)', 8, 'image/laptop/lenovo-ideapad-330-15ikbr-i3-7020u-4gb-1tb-156-win-hinhchitiet-400x400.jpg', ''),
(73, 2, 'laptop18', 1, 'Dell Vostro 3468 i3 6006U (70142649)', 2, 'image/laptop/dell-vostro-3468-70142649-450-400x400.jpg', ''),
(74, 2, 'laptop19', 1, 'Asus VivoBook S15 S510UA i3 7100U (BQ111T)', 41, 'image/laptop/asus-s510ua-i3-7100u-bq111t-thumb-400x400.jpg', ''),
(75, 2, 'laptop20', 1, 'Lenovo Ideapad S130 11IGM N4000 (81J1001JVN)', 1, 'image/laptop/lenovo-ideapad-s130-11igm-n4000-2gb-32gb-81j1001j-33397-thumb1-400x400.jpg', ''),
(76, 2, 'laptop21', 1, 'Acer Aspire A314 31 C2UX N3350 (NX.GNSSV.008)', 64, 'image/laptop/acer-aspire-a314-31-c2ux-nxgnssv008-ava-1-400x400.jpg', ''),
(77, 2, 'laptop22', 1, 'Lenovo Ideapad 120S 14IAP N4200 (81A500JYVN)', 77, 'image/laptop/lenovo-ideapad-120s-14iap-n4200-4gb-64gb-win10-81-15-400x400.jpg', ''),
(78, 2, 'laptop23', 1, 'Asus VivoBook X441MA N5000 (GA004T)', 27, 'image/laptop/asus-x441ma-n5000-ga004t-450-400x400.jpg', ''),
(79, 2, 'laptop24', 1, 'Acer Aspire A315 31 P2LJ N4200 (NX.GNTSV.010)', 12, 'image/laptop/acer-aspire-a315-31-p2lj-nxgntsv010-ava-400x400.jpg', ''),
(80, 2, 'laptop25', 1, 'HP 15 da0048TU N5000 (4ME63PA)', 75, 'image/laptop/hp-15-da0048tu-4me63pa-33397-ava1-400x400.jpg', ''),
(81, 2, 'laptop26', 1, 'Asus X441MA N5000 (GA024T)', 73, 'image/laptop/asus-x441ma-ga024t-450-400x400.jpg', ''),
(82, 2, 'laptop27', 1, 'Acer Aspire A315 51 31X0 i3 6006U (NX.GNPSV.016)', 82, 'image/laptop/acer-aspire-a315-51-31x0-i3-6006u-den-0-230x153.jpg', ''),
(83, 2, 'laptop28', 1, 'Lenovo IdeaPad 320 15IKBN i3 7130U (80XL03SNVN)', 3, 'image/laptop/lenovo-ideapad-320-15ikbn-i3-7130u-80xl03snvn-dai-dien-450x300-450x300-400x400.jpg', ''),
(84, 2, 'laptop29', 1, 'Asus X407UA i3 7020U (BV351T)', 83, 'image/laptop/asus-x407ua-bv351t-450-400x400.jpg', ''),
(85, 2, 'laptop30', 1, 'Lenovo Ideapad 330 14IKBR i3 7020U (81G2001AVN)', 3, 'image/laptop/lenovo-ideapad-330-14ikb-81g2001avn-33397-thumb-400x400.jpg', ''),
(86, 2, 'laptop31', 1, 'Asus VivoBook X407UA i3 6006U (BV129T)', 18, 'image/laptop/laptop-asus-x407ua-i3-bv129t-1-450x300-400x400.jpg', ''),
(87, 2, 'laptop32', 1, 'Asus X507UA i3 7020U (EJ727T)', 97, 'image/laptop/laptop-asus-x507ua-i3-7020u-4gb-1tb-win10-ej727t-400x400.jpg', ''),
(88, 3, 'camera0', 2, 'Máy Ảnh Canon EOS 750D Kit EF S18-55 IS STM', 81, 'image/camera/750d-moi-jpg-jpg.jpg', ''),
(89, 3, 'camera1', 2, 'Máy Ảnh Canon EOS M10 Kit EF-M15-45 (Đen)', 86, 'image/camera/may-anh-canon-eos-m10-kit-efm1545-den(2).jpg', ''),
(90, 3, 'camera2', 2, 'Máy Ảnh Sony CyberShot DSC H300 (Đen)', 92, 'image/camera/may-anh-sony-cybershot-dsc-h300--den--jpg-jpg.jpg', ''),
(91, 3, 'camera3', 2, 'Máy Ảnh Fujifilm X-A3 Kit XC16-50 F3.5-5.6 OIS II (bạc)', 59, 'image/camera/fujifilm-x-a3(2).jpg', ''),
(92, 3, 'camera4', 2, 'Máy Ảnh Canon EOS M10 Kit EF-M15-45 (Trắng)', 21, 'image/camera/canon-m10-kit-efm1545mm(1).jpg', ''),
(93, 3, 'camera5', 2, 'Máy Ảnh Fujifilm X-A5 Body', 23, 'image/camera/may-anh-fujifilm-x-a5-body.jpg', ''),
(94, 3, 'camera6', 2, 'Máy Ảnh Sony DSC-WX800', 24, 'image/camera/may-anh-sony-dsc-wx800.jpg', ''),
(95, 3, 'camera7', 2, 'MÁY ẢNH CANON EOS M50 + EF-M 22MM F2 STM', 77, 'image/camera/may-anh-canon-eos-m50-ef-m22mm-f2-stm.jpg', ''),
(96, 3, 'camera8', 2, 'MÁY ẢNH CANON EOS M6 + EF-M 22MM F2 STM', 16, 'image/camera/may-anh-canon-eos-m6-ef-m22mm-f2-stm.jpg', ''),
(97, 3, 'camera9', 2, 'Máy Ảnh Nikon Z7 + Kit NIKKOR Z 24-70mm f/4 S', 54, 'image/camera/may-anh-nikon-z7-kit-nikkor-z-2470mmf4s.jpg', ''),
(98, 3, 'camera10', 2, 'Máy Ảnh Canon EOS 750D Kit EF S18-55 IS STM', 2, 'image/camera/750d-moi-jpg-jpg.jpg', ''),
(99, 3, 'camera11', 2, 'Máy Ảnh Canon EOS M10 Kit EF-M15-45 (Đen)', 99, 'image/camera/may-anh-canon-eos-m10-kit-efm1545-den(2).jpg', ''),
(100, 3, 'camera12', 2, 'Máy Ảnh Sony CyberShot DSC H300 (Đen)', 67, 'image/camera/may-anh-sony-cybershot-dsc-h300--den--jpg-jpg.jpg', ''),
(101, 3, 'camera13', 2, 'Máy Ảnh Fujifilm X-A3 Kit XC16-50 F3.5-5.6 OIS II (bạc)', 86, 'image/camera/fujifilm-x-a3(2).jpg', ''),
(102, 3, 'camera14', 2, 'Máy Ảnh Canon EOS M10 Kit EF-M15-45 (Trắng)', 31, 'image/camera/canon-m10-kit-efm1545mm(1).jpg', ''),
(103, 3, 'camera15', 2, 'Máy Ảnh Sony Alpha A6000 (ILCE-6000L) kit 16-50 F3.5-5.6', 5, 'image/camera/alpha-a6000-16-50-oss-f3-5-5-6-lens-kit--den--jpg.jpg', ''),
(104, 3, 'camera16', 2, 'Máy Ảnh Canon PowerShot G7 X Mark II (hàng nhập khẩu)', 81, 'image/camera/canon-powershot-g7-x-mark-ii(1).jpg', ''),
(105, 3, 'camera17', 2, 'Máy Ảnh Sony CyberShot DSC H400 (Đen)', 27, 'image/camera/h400-moi-jpg.jpg', ''),
(106, 3, 'camera18', 2, 'Máy Ảnh Fujifilm X-A3 Kit XC16-50 F3.5-5.6 OIS II (Nâu)', 96, 'image/camera/may-anh-fujifilm-xa3-kit-xc1650-f3556-ois-ii-nau(1).jpg', ''),
(107, 3, 'camera19', 2, 'Máy ảnh Nikon D3400 Kit AF-P 18-55 VR', 30, 'image/camera/nikon-d3400(2).jpg', ''),
(108, 3, 'camera20', 2, 'Máy Ảnh Sony Alpha A6000 (ILCE-6000L) kit 16-50 F3.5-5.6', 35, 'image/camera/img-jpg.jpg', ''),
(109, 3, 'camera21', 2, 'Máy Ảnh Canon Ixus 185 (Đen)', 12, 'image/camera/may-anh-canon-ixus-185--den--jpg.jpg', ''),
(110, 3, 'camera22', 2, 'Máy Ảnh Sony Alpha A6000 (ILCE-6000) Body (đen)', 77, 'image/camera/sony-alpha-a6000-body-jpg.jpg', ''),
(111, 3, 'camera23', 2, 'Máy Ảnh Sony Alpha A6000 (ILCE-6000L) kit 16-50 F3.5-5.6', 7, 'image/camera/a6000-xam2-jpg.jpg', ''),
(112, 3, 'camera24', 2, 'Máy Ảnh Canon PowerShot SX430 IS', 89, 'image/camera/may-anh-canon-powershot-sx430-is-jpg.jpg', ''),
(113, 3, 'camera25', 2, 'Máy Ảnh Sony DSC WX220 (Đen)', 51, 'image/camera/wx220d-jpg.jpg', ''),
(114, 3, 'camera26', 2, 'Máy Ảnh Sony Alpha A6300 (ILCE-6300L) KIT 16-50 F3.5-5.6', 72, 'image/camera/may-anh-sony-alpha--a6300--ilce-6000l--kit-16-50-f3-5-5-6-oss--den--jpg.jpg', ''),
(115, 3, 'camera27', 2, 'Máy ảnh Fujifilm X-A5 Kit 15-45 mm F 3.5.5.6 OIS PZ (Nâu)', 19, 'image/camera/fujifilm-xa5-kit-1545-mm-f-3556-ois-pz-nau(1).jpg', ''),
(116, 3, 'camera28', 2, 'Máy Ảnh Sony Cybershot DSC W830 (Đen)', 39, 'image/camera/w830den-jpg.jpg', ''),
(117, 3, 'camera29', 2, 'Máy Ảnh Canon EOS 6D Body', 28, 'image/camera/may-anh-canon-eos-6d-body-jpg.jpg', ''),
(118, 3, 'camera30', 2, 'Máy Ảnh Canon EOS 6D Kit EF 24-105 F4L IS USM', 21, 'image/camera/canon-eos-6d1-jpg.jpg', ''),
(119, 3, 'camera31', 2, 'Máy ảnh Canon PowerShot SX730 HS - Hàng nhập khẩu', 43, 'image/camera/may-anh-canon--powershot-sx730-hs--den--jpg.jpg', ''),
(120, 3, 'camera32', 2, 'Máy ảnh Fujifilm X-A5 Kit 15-45 mm F 3.5.5.6 OIS PZ( BẠC)', 86, 'image/camera/may-anh-fujifilm-xa5(1).jpg', ''),
(121, 3, 'camera33', 2, 'Máy Ảnh Canon EOS 800D kit EF S18-55 IS STM', 10, 'image/camera/may-anh-canon-eos-800d-jpg.jpg', ''),
(122, 3, 'camera34', 2, 'Hộp phim Fujifilm Instax Mini Glossy (20 tấm)', 41, 'image/camera/hop-phim-fujifilm-instax-mini-glossy--20-tam--jpg.jpg', ''),
(123, 3, 'camera35', 2, 'Máy Ảnh Canon EOS 750D Body', 40, 'image/camera/may-anh-canon-eos-750d-body-jpg.jpg', ''),
(124, 3, 'camera36', 2, 'Máy Ảnh Fujifilm X-A3 Kit XC16-50mm F3.5-5.6 OIS II', 7, 'image/camera/fujifilm-xa3-kit-xc1650mm-f3556-ois-ii(3).jpg', ''),
(125, 3, 'camera37', 2, 'Máy Ảnh Canon EOS 3000D Kit 18-55mm F3.5-5.6 III', 53, 'image/camera/canon-3000d(1).jpg', ''),
(126, 4, 'pad0', 3, 'Samsung Galaxy Tab A 10.5 inch', 52, 'image/pad/samsung-galaxy-tab-a-105-inch-ava-400x400.jpg', ''),
(127, 4, 'pad1', 3, 'iPad Wifi 32GB (2018)', 89, 'image/pad/ipad-wifi-32gb-2018-thumb-400x400.jpg', ''),
(128, 4, 'pad2', 3, 'iPad Wifi 128 GB (2018)', 79, 'image/pad/ipad-wifi-128-gb-2018-thumb-400x400.jpg', ''),
(129, 4, 'pad3', 3, 'iPad Pro 10.5 inch Wifi Cellular 64GB (2017)', 81, 'image/pad/ipad-pro-105-inch-wifi-cellular-64gb-2017-thumb-400x400.jpg', ''),
(130, 4, 'pad4', 3, 'Samsung Galaxy Tab S4 10.5 inch S-Pen', 16, 'image/pad/samsung-galaxy-tab-s4-105-inch-thumb-400x400.jpg', ''),
(131, 4, 'pad5', 3, 'iPad Pro 10.5 inch Wifi 64GB (2017)', 48, 'image/pad/ipad-pro-105-inch-wifi-64gb-2017-thumb-600x600-400x400.jpg', ''),
(132, 4, 'pad6', 3, 'iPad Wifi Cellular 128GB (2018)', 7, 'image/pad/ipad-wifi-cellular-128gb-2018-thumb-400x400.jpg', ''),
(133, 4, 'pad7', 3, 'iPad Wifi Cellular 32GB (2018)', 37, 'image/pad/ipad-wifi-cellular-32g-2018-thumb-400x400.jpg', ''),
(134, 4, 'pad8', 3, 'iPad Wifi Cellular 32GB (2017)', 27, 'image/pad/ipad-wifi-cellular-32gb-2017-thumb-400x400.jpg', ''),
(135, 4, 'pad9', 3, 'Samsung Galaxy Tab A6 10.1 Spen', 19, 'image/pad/samsung-galaxy-tab-a6-101-spen-thumb-400x400.jpg', ''),
(136, 4, 'pad10', 3, 'Huawei MediaPad M3 8.0 (2017)', 16, 'image/pad/huawei-mediapad-m3-thumb-400x400.jpg', ''),
(137, 4, 'pad11', 3, 'Samsung Galaxy Tab A 8.0 (2017)', 33, 'image/pad/samsung-galaxy-tab-a-80-2017-thumb-400x400.jpg', ''),
(138, 4, 'pad12', 3, 'Huawei MediaPad T3 10 (2017)', 30, 'image/pad/huawei-mediapad-t3-10-thumb-400x400.jpg', ''),
(139, 4, 'pad13', 3, 'Samsung Galaxy Tab E 9.6 (SM-T561)', 22, 'image/pad/samsung-galaxy-tab-e-96-sm-t561-thumb-400x400.jpg', ''),
(140, 4, 'pad14', 3, 'Huawei MediaPad T3 8.0 (2017)', 49, 'image/pad/huawei-mediapad-t3-80-564-600x600-400x400.jpg', ''),
(141, 4, 'pad15', 3, 'Lenovo Tab 4 8 16GB (TB-8504X)', 51, 'image/pad/lenovo-tab-4-8-tb-8504x-thumb-400x400.jpg', ''),
(142, 4, 'pad16', 3, 'Lenovo Phab 2', 22, 'image/pad/lenovo-phab2-543-600x600-400x400.jpg', ''),
(143, 4, 'pad17', 3, 'Samsung Galaxy Tab A6 7.0', 55, 'image/pad/samsung-galaxy-tab-a6-70-thumb-400x400.jpg', ''),
(144, 4, 'pad18', 3, 'Mobell Tab 10', 66, 'image/pad/mobell-tab-10-2-400x400.jpg', ''),
(145, 4, 'pad19', 3, 'Mobell Tab 8 Pro', 15, 'image/pad/mobell-tab-8-pro-thumb-400x400.jpg', ''),
(146, 4, 'pad20', 3, 'Lenovo Tab 7 Essential 16GB (TB-7304X)', 33, 'image/pad/lenovo-tab-7-essential-16gb-tb-7304x-thumb-400x400.jpg', ''),
(147, 4, 'pad21', 3, 'Itel Tab it1703', 20, 'image/pad/itel-tab-it1703-thumb-600x600-400x400.jpg', ''),
(148, 4, 'pad22', 3, 'Itel Tab it1702', 70, 'image/pad/itel-tab-it1702-thumb-600x600-400x400.jpg', ''),
(149, 4, 'pad23', 3, 'Mobell Tab 7s', 16, 'image/pad/mobell-tab-7s-thumb-400x400.jpg', ''),
(150, 5, 'phu_kien0', 4, 'Dây cáp Micro USB 0.2 m Xmobile MU03', 20, 'image/phu-kien/cap-micro-usb-20cm-x-mobile-mu03-den-avatar-1-600x600.jpg', ''),
(151, 5, 'phu_kien1', 4, 'Dây cáp iPhone 4 - iPhone 4s 1 m Xmobile', 83, 'image/phu-kien/cap-x-mobile-iphone-4-ava-600x600.jpg', ''),
(152, 5, 'phu_kien2', 4, 'Sạc dây Type C 1A 1m Xmobile DS199-WB Trắng', 19, 'image/phu-kien/sac-day-type-c-1a-1m-xmobile-ds199-wb-ava-600x600.jpg', ''),
(153, 5, 'phu_kien3', 4, 'Dây cáp Micro USB 1 m eSaver DS118-TB', 14, 'image/phu-kien/cap-micro-1m-esaver-ds118br-tb-avatar-1-600x600.jpg', ''),
(154, 5, 'phu_kien4', 4, 'Dây cáp Micro USB 0.2 m eSaver DS026', 19, 'image/phu-kien/cap-micro-usb-20cm-esaver-ds026-avatar-1-600x600.jpg', ''),
(155, 5, 'phu_kien5', 4, 'Dây cáp Type C 1 m Xmobile MU09-1000', 46, 'image/phu-kien/cap-type-c-1m-x-mobile-mu09-1000-avatar-1-600x600.jpg', ''),
(156, 5, 'phu_kien6', 4, 'Dây cáp Lightning 1.2 m Devia Aex', 86, 'image/phu-kien/cap-lightning-12m-devia-aex-1-5-600x600.jpg', ''),
(157, 5, 'phu_kien7', 4, 'Dây cáp Lightning 2 m eValu LTL-04', 54, 'image/phu-kien/cap-lightning-2m-evalu-ltl-04-xanh-navi-avatar-1-600x600.jpg', ''),
(158, 5, 'phu_kien8', 4, 'Dây cáp Lightning 0.2 m eSaver Gate-0759P', 21, 'image/phu-kien/cap-lightning-20cm-esaver-gate-0759p-avatar-1-600x600.jpg', ''),
(159, 5, 'phu_kien9', 4, 'Dây cáp Micro USB 2 m Xmobile MU03', 45, 'image/phu-kien/cap-micro-usb-2-m-xmobile-mu03-1000-avatar-1-600x600.jpg', ''),
(160, 5, 'phu_kien10', 4, 'Dây cáp Lightning 1 m eValu LTL-01', 82, 'image/phu-kien/cap-lightning-1m-evalu-ltl-01-avatar-1-600x600.jpg', ''),
(161, 5, 'phu_kien11', 4, 'Móc dán điện thoại OSMIA RingCK043 Sao Đen', 24, 'image/phu-kien/moc-dan-dien-thoai-osmia-ringck043-sao-den-1-1-600x600.jpg', ''),
(162, 5, 'phu_kien12', 4, 'Móc dán điện thoại OSMIA RingCK039 Cún Trắng', 6, 'image/phu-kien/moc-dan-dien-thoai-osmia-ringck039-cun-trang-1-1-600x600.jpg', ''),
(163, 5, 'phu_kien13', 4, 'Móc dán điện thoại OSMIA RingCK036 Viền Hồng', 60, 'image/phu-kien/moc-dan-dien-thoai-osmia-ringck036-vien-hong-1-3-600x600.jpg', ''),
(164, 5, 'phu_kien14', 4, 'Adapter sạc 2 cổng 2.4A Xmobile DS133-TB', 13, 'image/phu-kien/adapter-sac-2-cong-24a-goc-x-mobile-ds133-tb-trang-avatar-1-600x600.jpg', ''),
(165, 5, 'phu_kien15', 4, 'Tai nghe nhét trong Kanen IP-219 Aqua', 75, 'image/phu-kien/tai-nghe-ep-kanen-ip-219-aqua-xam-ava-600x600.jpg', ''),
(166, 5, 'phu_kien16', 4, 'Cáp 2 đầu Lightning Micro 1m eValu Spanker B', 9, 'image/phu-kien/cap-2-dau-lightning-micro-1m-evalu-spanker-b-avatar-1-600x600.jpg', ''),
(167, 5, 'phu_kien17', 4, 'Dây cáp Micro USB 0.2 m eSaver BST-0728', 52, 'image/phu-kien/cap-micro-usb-20cm-esaver-bst-0728-trang-avatar-1-1-600x600.jpg', ''),
(168, 5, 'phu_kien18', 4, 'Cáp 2 đầu Type C Micro 1m eValu Spanker B Xanh dương', 60, 'image/phu-kien/cap-2-dau-type-c-micro-1m-evalu-spanker-b-xanh-ava-600x600.jpg', ''),
(169, 5, 'phu_kien19', 4, 'Sạc dây Nokia đầu nhỏ 1 m eSaver X032', 59, 'image/phu-kien/sac-day-nokia-dau-nho-esaver-x032-trang-ava-600x600.jpg', ''),
(170, 5, 'phu_kien20', 4, 'Cáp Type C-Type C 1m M-Best SMXU75 Trắng', 25, 'image/phu-kien/cap-type-c-type-c-1m-m-best-smxu75-trang-add-600x600.jpg', ''),
(171, 5, 'phu_kien21', 4, 'Loa Bluetooth Selfie MB-M515 Heo', 2, 'image/phu-kien/loa-bluetooth-selfie-icutes-mb-m515-heo-hong-ava-2-600x600.jpg', ''),
(172, 5, 'phu_kien22', 4, 'Adapter sạc 1A Xmobile DS130-TB', 15, 'image/phu-kien/adapter-sac-xmobile-ds130-tb-1-cong-ava-1-600x600.jpg', ''),
(173, 5, 'phu_kien23', 4, 'Cáp 3 đầu Micro Type C Lightning eValu Spanker B', 12, 'image/phu-kien/cap-3-dau-lightning-type-c-micro-1m-evalu-spanker-ava-600x600.jpg', ''),
(174, 5, 'phu_kien24', 4, 'Cáp 3 đầu Lightning Type C Micro 1m Xmobile AP03-1000', 4, 'image/phu-kien/cap-3-dau-lightning-type-c-micro-1m-ap03-1000-1-600x600.jpg', ''),
(175, 5, 'phu_kien25', 4, 'Loa Bluetooth Selfie MB-M515 Gấu', 76, 'image/phu-kien/loa-bluetooth-selfie-icutes-mb-m515-gau-xam-ava-600x600.jpg', ''),
(176, 5, 'phu_kien26', 4, 'Adapter sạc 2.4A Xmobile DS132-TB', 85, 'image/phu-kien/adapter-sac-xmobile-ds132-tb-2-cong-ava-600x600.jpg', ''),
(177, 5, 'phu_kien27', 4, 'USB 3.1 16 GB Apacer AH356', 11, 'image/phu-kien/usb-31-16gb-apacer-ah356-1-2-600x600.jpg', ''),
(178, 5, 'phu_kien28', 4, 'Tai nghe nhét trong Kanen S70', 41, 'image/phu-kien/tai-nghe-ep-kanen-s70-den-xanh-la-ava-600x600.jpg', ''),
(179, 5, 'phu_kien29', 4, 'Tai nghe Bluetooth Roman R553N Đen', 53, 'image/phu-kien/tai-nghe-bluetooth-roman-r553n-den-ava-600x600.jpg', ''),
(180, 5, 'phu_kien30', 4, 'Sạc dây Micro USB 1.2 m Xmobile TS-C079', 90, 'image/phu-kien/sac-day-x-mobile-micro-ts-c079-ava-600x600.jpg', ''),
(181, 5, 'phu_kien31', 4, 'Loa Bluetooth eSaver U220B', 37, 'image/phu-kien/loa-bluetooth-esaver-u220b-9-600x600.jpg', ''),
(182, 5, 'phu_kien32', 4, 'Cáp Lightning 1m Xmobile', 29, 'image/phu-kien/cap-sac-iphone-5-6-x-mobile-ava-1-600x600.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `passw` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_chi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` text NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioi_tinh` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngsinh` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `name`, `passw`, `dia_chi`, `sdt`, `email`, `gioi_tinh`, `ngsinh`) VALUES
(1, 'Nguyễn Quốc Hương', '12345', 'TP. Hồ Chí Minh', '2147483647', 'asdriv0@gmail.com', 'Nam', 1999),
(19, 'Nguyễn Khắc Mạnh', '99349d99167034abf0e0d3ec9a85a93f', 'Thanh Hoá', '0865983826', 'khacmanh.info@gmail.com', 'Nam', 921625200),
(44, 'Đào Như Như', 'Nhu123@#', 'Hà Nội', '985623789', 'Nhunhu@gmail.com', 'Nữ', 1023919200),
(45, '97865958', '2324', 'dsfdsf', '45435', 'admin@gmail.com', 'tdgtf', 1602540000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`),
  ADD UNIQUE KEY `ten` (`ten`);

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `id_dm` (`id_dm`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `fkdm_tloai_fksp` FOREIGN KEY (`id_dm`) REFERENCES `tbl_danhmuc` (`id_danhmuc`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
