-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 27, 2024 lúc 06:27 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_sqli`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(200) NOT NULL,
  `masp` varchar(200) NOT NULL,
  `giasp` varchar(200) NOT NULL,
  `soluong` int(11) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text NOT NULL,
  `hinhanh` varchar(200) NOT NULL,
  `thutu` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `soluong`, `tomtat`, `noidung`, `hinhanh`, `thutu`, `id_danhmuc`) VALUES
(2, '1 Bánh Trứng', '01', '6000', 50, '1 Bánh Trứng', '', '1715133384_1-eggtart.jpg', 0, 4),
(3, '2 Viên Khoai Môn', '02', '60000', 50, '2 Viên Khoai Môn', '', '2-taro.jpg', 0, 4),
(4, '3 Gà Miếng Nuggets', '03', '62000', 50, '3 Gà Miếng Nuggets', '', '1715133611_3_Nuggests.jpg', 0, 4),
(5, '3 Cá Thanh', '04', '62000', 50, '3 Cá Thanh', '', '1715133641_3-Fishsticks.jpg', 0, 4),
(6, '3 Cánh Gà', '05', '20000', 50, '3 Cánh Gà', '', '3-HW.jpg', 0, 2),
(7, '3 - Tago', '06', '25000', 50, '3 - Tago', '', '3-taro.jpg', 0, 3),
(8, '4 - Cherrow', '07', '25000', 50, '4 - Cherrow', '', '5-TENDERS.jpg', 0, 3),
(9, '4 Bánh Trứng', '08', '250000', 50, '4 Bánh Trứng', '', '4-eggtart.jpg', 0, 4),
(10, '5 Gà Miếng Nuggets', '09', '200000', 50, '5 Gà Miếng Nuggets', '', 'Burger-Zinger.jpg', 0, 3),
(11, '5 - Pumcheese', '10', '204000', 50, '5 - Pumcheese', '', '5-Pumcheese.jpg', 0, 3),
(12, 'CBO-A_HD', '11', '250000', 50, 'CBO-A_HD', '', '1715133992_CBO-A_HD.jpg', 0, 2),
(13, 'CBO-B_HD', '12', '250000', 50, 'CBO-B_HD', '', 'CBO-B_HD.jpg', 0, 2),
(14, '7Up Lon', '13', '20000', 50, '7Up Lon', '', '1715134104_7UP_CAN.jpg', 0, 4),
(15, 'Pepsi Lon', '14', '20000', 50, 'Pepsi Lon', '', '1715134125_PEPSI_CAN.jpg', 0, 4),
(16, 'Pizza Ngập Vị Phô Mai ', '15', '255000', 50, 'Pizza Ngập Vị Phô Mai Hảo Hạng - Cheesy Madness', '', 'CHEESY+MADNESS+NO+NEW+PC.jpg', 0, 1),
(17, 'Pizza Hải Sản Xốt ', '16', '255000', 50, 'Pizza Hải Sản Xốt ', '', '1715134438_LIME+PESTO+-+ANH+SP+(2).png', 0, 1),
(18, 'ChoCoA', '17', '225000', 50, 'ChoCoA', '', '1715134560_ChoCoA.jpg', 0, 2),
(19, 'Pizza New York Bò ', '18', '225000', 50, 'Pizza New York Bò ', '', '1715134612_Menu+BG+1.jpg', 0, 1),
(20, '5 - Tenders', '19', '25000', 50, '5 - Tenders', '', '1715134684_5-TENDERS.jpg', 0, 3),
(21, 'Trà Đào', '20', '25000', 50, 'Trà Đào', '', '1715137276_Peach-Tea.jpg', 0, 4),
(22, 'Mì Ý Gà Viên', '21', '25000', 50, 'Mì Ý Gà Viên', '', '1715137333_MI-Y-GA-ZINGER.jpg', 0, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
