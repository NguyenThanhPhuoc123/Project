-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 17, 2023 lúc 05:39 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopht`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `user` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`user`, `password`) VALUES
('Admin', '123456'),
('Admin1', '654321');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan1`
--

CREATE TABLE `binhluan1` (
  `mabl` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaybl` date NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan1`
--

INSERT INTO `binhluan1` (`mabl`, `mahh`, `makh`, `ngaybl`, `noidung`) VALUES
(1, 3, 7, '2020-08-14', '  gghnn'),
(2, 4, 7, '2020-08-14', '  nhẹ và đẹp'),
(3, 3, 5, '2020-08-14', 'lịch sự, nhã nhặn'),
(4, 3, 5, '2020-08-14', '  đẹp và lịch sự'),
(5, 3, 5, '2020-08-14', '  đẹp và lịch sự'),
(6, 3, 5, '2020-08-14', '  đẹp và lịch sự'),
(7, 3, 5, '2020-08-14', '  đẹp và lịch sự'),
(8, 3, 5, '2020-08-14', '  dfgdfsg'),
(9, 3, 5, '2020-08-14', '  dfgdfsg'),
(10, 3, 5, '2020-08-14', '  dfgdfsg'),
(11, 3, 5, '2020-08-14', '  dfgdfsg'),
(12, 3, 5, '2020-08-14', '  dfgdfsg'),
(13, 3, 5, '2020-08-14', '  hello'),
(14, 3, 5, '2020-08-14', '  hello'),
(15, 3, 5, '2020-08-14', '  hello'),
(16, 20, 9, '2023-03-17', '  ngon');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthoadon1`
--

CREATE TABLE `cthoadon1` (
  `masohd` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `mausac` varchar(20) NOT NULL,
  `size` int(3) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cthoadon1`
--

INSERT INTO `cthoadon1` (`masohd`, `mahh`, `soluongmua`, `mausac`, `size`, `thanhtien`, `tinhtrang`) VALUES
(7, 3, 2, '', 0, 1090000, 0),
(9, 3, 2, '', 0, 1090000, 0),
(9, 12, 2, '', 0, 1150000, 0),
(10, 9, 2, '', 38, 1490000, 0),
(10, 15, 1, '', 37, 545000, 0),
(11, 9, 2, '', 38, 1490000, 0),
(11, 15, 1, '', 37, 545000, 0),
(12, 9, 2, '', 38, 1490000, 0),
(12, 15, 1, '', 37, 545000, 0),
(13, 2, 1, '', 0, 545000, 0),
(13, 24, 3, '', 38, 1800000, 0),
(14, 2, 1, '', 0, 545000, 0),
(15, 24, 5, '', 0, 3000000, 0),
(16, 24, 5, '', 0, 3000000, 0),
(17, 24, 5, '', 0, 3000000, 0),
(18, 24, 5, '', 0, 3000000, 0),
(19, 24, 5, '', 0, 3000000, 0),
(20, 24, 5, '', 0, 3000000, 0),
(21, 24, 5, '', 0, 3000000, 0),
(37, 21, 1, '', 0, 525000, 0),
(37, 22, 1, '', 0, 5000000, 0),
(38, 21, 1, '', 0, 525000, 0),
(38, 22, 1, '', 0, 5000000, 0),
(39, 22, 1, '', 0, 500000, 0),
(40, 22, 1, '', 0, 500000, 0),
(41, 22, 1, '', 0, 500000, 0),
(42, 22, 1, '', 0, 500000, 0),
(43, 22, 1, '', 0, 500000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahh` int(11) NOT NULL,
  `tenhh` varchar(60) NOT NULL,
  `dongia` float NOT NULL,
  `giamgia` float NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `Nhom` int(4) NOT NULL,
  `maloai` int(11) NOT NULL,
  `dacbiet` bit(1) NOT NULL,
  `soluotxem` int(11) NOT NULL,
  `ngaylap` date NOT NULL,
  `mota` varchar(2000) NOT NULL,
  `soluongton` int(11) NOT NULL,
  `mausac` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `size` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`mahh`, `tenhh`, `dongia`, `giamgia`, `hinh`, `Nhom`, `maloai`, `dacbiet`, `soluotxem`, `ngaylap`, `mota`, `soluongton`, `mausac`, `size`) VALUES
(3, 'Trà ướp hoa ngọc lan', 545000, 300000, 'yen3.jpg', 0, 1, b'0', 4, '2020-08-08', 'Thơm, ngon, bổ , rẻ hổ trợ tốt cho sức khỏe', 50, '', 0),
(4, 'Trà ướp hoa nhài', 545000, 0, 'yen4.jpg', 1, 3, b'0', 1, '2020-08-08', 'Thơm, ngon, bổ , rẻ hổ trợ tốt cho sức khỏe', 50, '', 0),
(5, 'Trà ướp hoa sen', 525000, 0, 'yen5.jpg', 1, 3, b'1', 0, '2020-08-08', 'Thơm, ngon, bổ , rẻ hổ trợ tốt cho sức khỏe', 50, '', 0),
(6, 'Yến hồng tơ sơ chế thượng hạng', 525000, 0, 'yen1.jpg', 1, 3, b'0', 0, '2020-08-08', 'Thơm, ngon, bổ , rẻ hổ trợ tốt cho sức khỏe', 50, '', 0),
(9, 'Trà Thiết Quan Âm', 745000, 0, 'yen2.jpg', 2, 5, b'1', 1, '2020-08-08', 'Thơm, ngon , bổ , rẻ hổ trợ sức khỏe', 50, '', 0),
(10, 'Trà ướp hoa ngọc lan', 745000, 0, 'yen3.jpg', 2, 5, b'1', 1, '2020-08-08', 'Thơm, ngon, bổ , rẻ hổ trợ tốt cho sức khỏe', 50, '', 0),
(11, 'Trà ướp hoa nhài', 575000, 0, 'yen4.jpg', 3, 1, b'0', 1, '2020-08-08', 'Thơm, ngon, bổ , rẻ hổ trợ tốt cho sức khỏe', 0, '', 0),
(12, 'Trà ướp hoa sen', 575000, 350000, 'yen5.jpg', 3, 1, b'0', 2, '2020-08-08', 'Thơm, ngon, bổ , rẻ hổ trợ tốt cho sức khỏe', 50, '', 0),
(15, 'Yến hồng tơ sơ chế thượng hạng', 545000, 0, 'yen1.jpg', 4, 1, b'0', 1, '2020-08-08', 'Thơm, ngon, bổ , rẻ hổ trợ tốt cho sức khỏe', 50, '', 0),
(16, 'Trà ướp hoa sen', 545000, 300000, 'yen2.jpg', 4, 1, b'0', 2, '2020-08-08', 'Thơm, ngon, bổ , rẻ hổ trợ tốt cho sức khỏe', 50, '', 0),
(17, 'Trà ướp hoa ngọc lan', 545000, 0, 'yen3.jpg', 4, 1, b'1', 2, '2020-08-08', 'Thơm, ngon, bổ , rẻ hổ trợ tốt cho sức khỏe', 50, '', 0),
(18, 'Trà ướp hoa nhài', 495000, 300000, 'yen4.jpg', 5, 8, b'0', 1, '2020-08-08', 'Thơm, ngon, bổ , rẻ hổ trợ tốt cho sức khỏe', 50, '', 0),
(19, 'Trà ướp hoa sen', 495000, 0, 'yen5.jpg', 5, 8, b'1', 1, '2020-08-08', 'Thơm, ngon, bổ , rẻ hổ trợ tốt cho sức khỏe', 50, '', 0),
(20, 'Yến hồng tơ sơ chế thượng hạng', 495000, 0, 'yen1.jpg', 5, 8, b'0', 1, '2020-08-08', 'Thơm, ngon, bổ , rẻ hổ trợ tốt cho sức khỏe', 50, '', 0),
(21, 'Trà ướp hoa sen', 525000, 0, 'product-10-1-1-400x533.jpg', 4, 1, b'0', 1, '2020-08-15', 'Thơm, ngon, bổ , rẻ hổ trợ tốt cho sức khỏe', 50, '', 0),
(25, 'yen', 5450000, 1000, 'product-06-1-1-400x533.jpg', 1, 1, b'1', 12, '2003-12-05', 'abc', 15, '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon1`
--

CREATE TABLE `hoadon1` (
  `masohd` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon1`
--

INSERT INTO `hoadon1` (`masohd`, `makh`, `ngaydat`, `tongtien`) VALUES
(1, 7, '2020-08-13', 2240000),
(2, 7, '2020-08-13', 2240000),
(3, 7, '2020-08-13', 2240000),
(4, 7, '2020-08-13', 2240000),
(5, 7, '2020-08-13', 2240000),
(6, 7, '2020-08-13', 2240000),
(7, 7, '2020-08-13', 2240000),
(8, 7, '2020-08-13', 2240000),
(9, 7, '2020-08-13', 2240000),
(10, 7, '2020-08-13', 2035000),
(11, 7, '2020-08-13', 2035000),
(12, 7, '2020-08-13', 2035000),
(13, 5, '2020-09-02', 545000),
(14, 7, '2020-09-09', 545000),
(15, 8, '2023-02-09', 0),
(16, 8, '2023-02-09', 0),
(17, 8, '2023-02-09', 0),
(18, 8, '2023-02-09', 0),
(19, 8, '2023-02-09', 0),
(20, 8, '2023-02-09', 0),
(21, 8, '2023-02-09', 0),
(22, 8, '2023-02-09', 0),
(23, 8, '2023-02-09', 0),
(24, 8, '2023-02-09', 0),
(25, 8, '2023-02-09', 0),
(26, 8, '2023-02-09', 0),
(27, 8, '2023-02-09', 0),
(28, 8, '2023-02-09', 0),
(29, 8, '2023-02-09', 0),
(30, 8, '2023-02-09', 0),
(31, 8, '2023-02-09', 0),
(32, 8, '2023-02-09', 0),
(33, 8, '2023-02-09', 0),
(34, 8, '2023-02-09', 0),
(35, 8, '2023-02-09', 0),
(36, 8, '2023-02-09', 0),
(37, 8, '2023-02-09', 5525000),
(38, 8, '2023-02-09', 5525000),
(39, 8, '2023-02-10', 500000),
(40, 8, '2023-02-10', 500000),
(41, 8, '2023-02-10', 500000),
(42, 8, '2023-02-10', 500000),
(43, 8, '2023-02-10', 500000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang1`
--

CREATE TABLE `khachhang1` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` text NOT NULL,
  `sodienthoai` varchar(12) NOT NULL,
  `vaitro` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang1`
--

INSERT INTO `khachhang1` (`makh`, `tenkh`, `username`, `matkhau`, `email`, `diachi`, `sodienthoai`, `vaitro`) VALUES
(3, 'a', 'a', '202cb962ac59075b964b07152d234b70', 'a@gmail.com', '', '', 0),
(4, 'a', 'a', '202cb962ac59075b964b07152d234b70', 'a@gmail.com', '', '', 0),
(5, 'an', 'an', '202cb962ac59075b964b07152d234b70', 'an@gmail.com', '', '', 0),
(6, 'an', 'an', '202cb962ac59075b964b07152d234b70', 'an@gmail.com', '', '', 0),
(7, 'Nguyên', 'nguyen', '202cb962ac59075b964b07152d234b70', 'nguyen@gmail.com', '', '', 0),
(8, 'ntp', 'ntp', '28faaeb71dd26119732211bcf21befc9', 'thanhphuoc131203@gmail.com', 'âu cơ', '0971186973', 0),
(9, 'ntp', 'ntp1', '4c9b4510acb9f61dcebbc0168b3e7656', 'thanhphuoc131203@gmail.com', 'âu cơ', '0971186973', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(50) NOT NULL,
  `idmenu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`, `idmenu`) VALUES
(1, '', 3),
(3, '', 3),
(4, '', 3),
(5, '', 3),
(6, '', 3),
(7, '', 3),
(8, '', 3),
(10, '', 4),
(13, '', 4),
(16, 'Túi xách LS', 5),
(17, 'Túi xách mini', 5),
(18, 'Túi vải', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `idmenu` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`idmenu`, `name`, `link`) VALUES
(1, 'Trang Chủ', 'index.php'),
(3, 'Giày', ''),
(4, 'Túi Xách', 'View/sanphamtui.php'),
(5, 'Liên Hệ', 'View/lienhe.php'),
(6, 'Tài Khoản', 'View/gioithieu.php');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan1`
--
ALTER TABLE `binhluan1`
  ADD PRIMARY KEY (`mabl`),
  ADD KEY `fk_bl_mahh` (`mahh`),
  ADD KEY `fk_bl_kh` (`makh`);

--
-- Chỉ mục cho bảng `cthoadon1`
--
ALTER TABLE `cthoadon1`
  ADD PRIMARY KEY (`masohd`,`mahh`),
  ADD KEY `fk_cthd_mahh` (`mahh`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahh`);

--
-- Chỉ mục cho bảng `hoadon1`
--
ALTER TABLE `hoadon1`
  ADD PRIMARY KEY (`masohd`),
  ADD KEY `fk_hoadon_kh` (`makh`);

--
-- Chỉ mục cho bảng `khachhang1`
--
ALTER TABLE `khachhang1`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`),
  ADD KEY `FK_loai_menu` (`idmenu`);

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan1`
--
ALTER TABLE `binhluan1`
  MODIFY `mabl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `mahh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `hoadon1`
--
ALTER TABLE `hoadon1`
  MODIFY `masohd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `khachhang1`
--
ALTER TABLE `khachhang1`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan1`
--
ALTER TABLE `binhluan1`
  ADD CONSTRAINT `fk_bl_kh` FOREIGN KEY (`makh`) REFERENCES `khachhang1` (`makh`),
  ADD CONSTRAINT `fk_bl_mahh` FOREIGN KEY (`mahh`) REFERENCES `hanghoa` (`mahh`);

--
-- Các ràng buộc cho bảng `hoadon1`
--
ALTER TABLE `hoadon1`
  ADD CONSTRAINT `fk_hoadon_kh` FOREIGN KEY (`makh`) REFERENCES `khachhang1` (`makh`);

--
-- Các ràng buộc cho bảng `loai`
--
ALTER TABLE `loai`
  ADD CONSTRAINT `FK_loai_menu` FOREIGN KEY (`idmenu`) REFERENCES `menu` (`idmenu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
