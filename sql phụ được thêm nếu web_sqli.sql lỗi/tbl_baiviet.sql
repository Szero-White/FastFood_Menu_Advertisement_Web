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

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`id_bv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `id_bv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
