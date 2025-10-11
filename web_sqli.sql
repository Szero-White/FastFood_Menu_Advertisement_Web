-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 27, 2024 lúc 06:26 AM
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
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(4, 'toan', '3a0772443a0739141292a5429b952fe6', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `id_bv` int(11) NOT NULL,
  `tenbaiviet` varchar(200) NOT NULL,
  `tomtat` longtext NOT NULL,
  `noidung` longtext NOT NULL,
  `hinhanh` varchar(100) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`id_bv`, `tenbaiviet`, `tomtat`, `noidung`, `hinhanh`, `id_danhmuc`) VALUES
(11, '[-50% MENU GÀ ĐẪM XỐT & FREESHIP]', '🥰 HÈ THANH NHẸ CÙNG MÓN CHAY THANH ĐẠM 🌱 Với Menu món chay phong phú, Domino’s tin rằng các tín đồ Pizza sẽ có được những bữa ăn thật ngon miệng mà vẫn đủ đầy dinh dưỡng!!!', '🍗 Các Combo tối no nê với Cơm, Burger, Mì Ý, Gà Rán,... giá chỉ từ 79K/ combo\n⏰ Ưu đãi chỉ áp dụng vào khung giờ tối 17h00 đến 20h30 mỗi ngày - Kéo dài đến hết 30/06/2024', '1716382944_444904528_848747063963804_6384847408864211872_n.jpg', 12),
(13, '🎈QUẨY TIỆC LỚN NHỎ, CÓ KFC LO! ️🎊', 'Ưu đãi rõ ràng thế này thì đơn giản thôi: Thứ 3 & Thứ 5 Mua 1 Tặng 1 Pizza Tụ tập gia đình hay hội ngộ bạn bè, có KFC, gặp mặt đã vui thưởng gà thêm nhiệt\n🎉 Chiết khấu lên đến 20%\n🎉 Miễn phí giao hàng', 'Tụ tập gia đình hay hội ngộ bạn bè, có KFC, gặp mặt đã vui thưởng gà thêm nhiệt\n🎉 Chiết khấu lên đến 20%\n🎉 Miễn phí giao hàng', '1716387211_443845123_845179787653865_6063365132974545575_n.jpg', 12),
(14, '🎊 BỪNG TIỆC GÀ RÁN, SINH NHẬT HOÀNH TRÁNG ️🎊', '🔥 QUẨY CÙNG CHEER TEAM\n🔥 CHỚP QUÀ SIÊU XỊNNN', '🔥 QUẨY CÙNG CHEER TEAM\n🔥 CHỚP QUÀ SIÊU XỊNNN\n🎊 Hè nắng nóng quá đi, nhưng vẫn không là gì so với độ nóng của đội Cheer Team nhà Hut. Đặc biệt, mỗi khi Cheer Team biểu diễn thì quà tặng sẽ tung khắp lối.', '1624437657500_540.png', 12),
(15, 'GIẢM 50% TỔNG HÓA ĐƠN & FREESHIP', '⏰ LAST CALL SUMMER DEAL\r\n CHILL TIỆC NHIỀU MÓN ĐỈNH 🔥🔥🔥', '💪 THỬ TÀI BÉ YÊU, TẾT THIẾU NHI Ý NGHĨA 💞\n🤩 Cơ hội để bé thỏa sức vui chơi & có thêm trải nghiệm mới dịp 1/6 này với chương trình “Bé Học Làm Đầu Bếp Pizza”', '1716389147_OIP.jpg', 10),
(16, '🌈 TIỆC BẾ GIẢNG, THÊM HOÀNH TRÁNG VỚI COMBO CHỈ TỪ 299K ', '🚨 CẢNH BÁO, HÌNH ẢNH NÀY PHÁT RA ĐỘ NGONNN\r\n🤤 Ăn Pizza là phải tươi rói & ngon lành cỡ này nè cả nhà ơi', '🚨 CẢNH BÁO, HÌNH ẢNH NÀY PHÁT RA ĐỘ NGONNN\r\n🤤 Ăn Pizza là phải tươi rói & ngon lành cỡ này nè cả nhà ơi', '441526081_848742820630895_3442272778759241973_n.jpg', 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(1, 'Pizza - Mì Ý', 0),
(2, 'Combo', 0),
(3, 'Thức Ăn Nhẹ', 0),
(4, 'Món Thêm', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmucbaiviet`
--

CREATE TABLE `tbl_danhmucbaiviet` (
  `id_baiviet` int(11) NOT NULL,
  `tendanhmucbv` varchar(200) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmucbaiviet`
--

INSERT INTO `tbl_danhmucbaiviet` (`id_baiviet`, `tendanhmucbv`, `thutu`) VALUES
(10, 'Tin tức khuyến mãi', 0),
(12, 'Tin tức mới ', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_lienhe`
--

CREATE TABLE `tbl_lienhe` (
  `id_lienhe` int(11) NOT NULL,
  `thongtinlienhe` text NOT NULL,
  `hinhanh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_lienhe`
--

INSERT INTO `tbl_lienhe` (`id_lienhe`, `thongtinlienhe`, `hinhanh`) VALUES
(1, 'Trong thế giới ngày nay, fast food đã trở thành một phần không thể thiếu trong cuộc sống hàng ngày của chúng ta.\r\nVới nhịp sống vội vã và công việc bận rộn, fast food không chỉ là lựa chọn tiện lợi mà còn là một phần của nền \r\n                                          văn hóa ẩm thực hiện đại.\r\n\r\nFast food không chỉ đơn thuần là việc nhanh chóng lấp đầy dạ dày mà còn là trải nghiệm thú vị và hấp dẫn. Từ một \r\nchiếc burger nóng hổi, một đĩa cơm gà ăn liền, cho đến những chiếc bánh mì sandwich được trang trí ngon lành, \r\n                  fast food mang lại sự đa dạng về hương vị và lựa chọn cho bất kỳ khẩu vị nào.\r\n\r\nNhưng không chỉ là về thức ăn, fast food còn là về sự tiện lợi và linh hoạt. Thời gian ngắn ngủi để đặt hàng và \r\nnhận được bữa ăn ngon lành, mà không cần phải chờ đợi quá lâu, giúp chúng ta tiết kiệm thời gian quý báu và tận \r\n                                              hưởng cuộc sống.', '2-2.png');

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
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`id_bv`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_danhmucbaiviet`
--
ALTER TABLE `tbl_danhmucbaiviet`
  ADD PRIMARY KEY (`id_baiviet`);

--
-- Chỉ mục cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  ADD PRIMARY KEY (`id_lienhe`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `id_bv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmucbaiviet`
--
ALTER TABLE `tbl_danhmucbaiviet`
  MODIFY `id_baiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  MODIFY `id_lienhe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
