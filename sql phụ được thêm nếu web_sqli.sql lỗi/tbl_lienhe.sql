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

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  ADD PRIMARY KEY (`id_lienhe`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  MODIFY `id_lienhe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
