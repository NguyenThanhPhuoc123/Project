-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 28, 2023 lúc 09:58 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `x1shop`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(15, 3, 5, '2020-08-14', '  hello');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthoadon1`
--

CREATE TABLE `cthoadon1` (
  `masohd` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `mausac` varchar(20) NOT NULL,
  `size` varchar(10) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cthoadon1`
--

INSERT INTO `cthoadon1` (`masohd`, `mahh`, `soluongmua`, `mausac`, `size`, `thanhtien`, `tinhtrang`) VALUES
(7, 3, 2, 'Màu Hồng', '35', 1090000, 0),
(9, 3, 2, ' Màu Hồng', '35', 1090000, 0),
(9, 12, 2, 'Màu Be ', '0', 1150000, 0),
(10, 9, 2, 'Màu Kem ', '38', 1490000, 0),
(10, 15, 1, 'Màu Xám Nhạt ', '37', 545000, 0),
(11, 9, 2, 'Màu Kem ', '38', 1490000, 0),
(11, 15, 1, 'Màu Xám Nhạt ', '37', 545000, 0),
(12, 9, 2, 'Màu Kem ', '38', 1490000, 0),
(12, 15, 1, 'Màu Xám Nhạt ', '37', 545000, 0),
(13, 2, 1, 'Màu Trắng', '0', 545000, 0),
(13, 24, 3, 'Màu Đen ', '38', 1800000, 0),
(14, 2, 1, 'Màu Trắng', '0', 545000, 0);

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
  `mausac` varchar(20) NOT NULL,
  `size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`mahh`, `tenhh`, `dongia`, `giamgia`, `hinh`, `Nhom`, `maloai`, `dacbiet`, `soluotxem`, `ngaylap`, `mota`, `soluongton`, `mausac`, `size`) VALUES
(1, 'Iphone 14 Pro Max', 40000000, 0, '1.jpg', 0, 1, b'1', 5, '2023-08-23', 'Thiết kế sang trọng phù hợp với người tiêu dùng.', 50, 'Màu Trắng', '128GB'),
(2, 'Iphone 13 Pro', 19000000, 0, '2.jpg', 0, 1, b'1', 3, '2022-08-23', 'Sang Trọng đẹp.', 50, 'Xanh Lá', '65GB'),
(3, 'Iphone 12 Pro Max', 12000000, 2000000, '3.jpg', 0, 1, b'0', 4, '2020-08-08', 'Sang trọng thiết kế đẹp phù hợp với người tiêu dùng', 50, 'Đen', '256GB'),
(4, 'Iphone 11 ', 10000000, 0, '4.jpg', 1, 1, b'0', 1, '2020-08-08', 'Thiết kế sang trọng đủ chức năng cho người tiêu dùng.', 50, 'Trắng', '64GB'),
(5, 'Iphone XR', 7000000, 0, '5.jpg', 1, 1, b'1', 0, '2020-08-08', 'Thiết kế sang trọng đủ chức năng cho người tiêu dùng.', 50, 'Trắng', '64GB'),
(6, 'Ipad Pro 1', 525000, 0, '6.jpg', 1, 3, b'0', 0, '2020-08-08', 'Thiết kế sang trọng đủ chức năng cho người tiêu dùng.', 50, 'Màu Đen ', '256GB'),
(9, 'Ipad Pro 2', 50000000, 0, '7.jpg', 2, 3, b'1', 1, '2020-08-08', 'Thiết kế sang trọng đủ chức năng cho người tiêu dùng.', 50, 'Màu Trắng ', '64GB'),
(10, 'Ipad Pro 3', 745000, 0, '8.jpg', 2, 3, b'1', 1, '2020-08-08', 'Thiết kế sang trọng đủ chức năng cho người tiêu dùng.', 50, 'Màu Đen', '128GB'),
(11, 'Ipad Pro 4', 575000, 0, '9.jpg', 3, 3, b'0', 1, '2020-08-08', 'Thiết kế sang trọng đủ chức năng cho người tiêu dùng.', 50, 'Màu Đen', '64GB'),
(12, 'MacBook 1', 50000000, 350000, '10.jpg', 4, 4, b'0', 2, '2020-08-08', 'Thiết kế sang trọng đủ chức năng cho người tiêu dùng.', 50, 'Màu Đen ', '500gb'),
(15, 'MacBook 2', 20000000, 0, '11.jpg', 4, 4, b'0', 1, '2020-08-08', 'Thiết kế sang trọng đủ chức năng cho người tiêu dùng.', 50, 'Màu Xám Nhạt', '256GB'),
(16, 'MacBook 3', 34000000, 300000, '12.jpg', 4, 4, b'0', 2, '2020-08-08', 'Thiết kế sang trọng đủ chức năng cho người tiêu dùng.', 50, 'Màu Hồng ', '525GB'),
(17, 'Đồng Hồ xinh đẹp', 15000000, 0, '13.jpg', 4, 6, b'1', 2, '2020-08-08', 'Thiết kế sang trọng đủ chức năng cho người tiêu dùng.', 50, 'Màu Trắng', '32GB'),
(18, 'AirPoods Pro 1', 495000, 300000, '14.jpg', 5, 5, b'0', 1, '2020-08-08', 'Thiết kế sang trọng đủ chức năng cho người tiêu dùng.', 50, 'Màu Trắng', ''),
(19, 'AirPoods Pro 2', 495000, 0, '15.jpg', 5, 5, b'1', 1, '2020-08-08', 'Thiết kế sang trọng đủ chức năng cho người tiêu dùng.', 50, 'Màu Trắng', ''),
(20, 'AirPoods Pro 3', 495000, 0, '16.jpg', 5, 5, b'0', 1, '2020-08-08', 'Thiết kế sang trọng đủ chức năng cho người tiêu dùng.', 50, 'Màu Đen', ''),
(21, 'Chuột Apple 1', 525000, 0, '21.jpg', 4, 7, b'0', 1, '2020-08-15', 'Thiết kế sang trọng đủ chức năng cho người tiêu dùng.', 50, 'Màu trắng', ''),
(22, 'Chuột Apple 2', 5000000, 50000, '22.jpg', 1, 7, b'0', 1, '2020-08-04', 'Thiết kế sang trọng đủ chức năng cho người tiêu dùng.', 23, 'Màu Den', ''),
(24, 'Bàn Phím hơi đẹp', 600000, 0, '24.jpg', 3, 8, b'1', 1, '2020-07-04', 'Thiết kế sang trọng đủ chức năng cho người tiêu dùng.', 12, 'Màu Đen', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon1`
--

CREATE TABLE `hoadon1` (
  `masohd` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(14, 7, '2020-09-09', 545000);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khachhang1`
--

INSERT INTO `khachhang1` (`makh`, `tenkh`, `username`, `matkhau`, `email`, `diachi`, `sodienthoai`, `vaitro`) VALUES
(3, 'a', 'a', '202cb962ac59075b964b07152d234b70', 'a@gmail.com', '', '', 0),
(4, 'a', 'a', '202cb962ac59075b964b07152d234b70', 'a@gmail.com', '', '', 0),
(5, 'an', 'an', '202cb962ac59075b964b07152d234b70', 'an@gmail.com', '', '', 0),
(6, 'an', 'an', '202cb962ac59075b964b07152d234b70', 'an@gmail.com', '', '', 0),
(7, 'Nguyên', 'nguyen', '202cb962ac59075b964b07152d234b70', 'nguyen@gmail.com', '', '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(50) NOT NULL,
  `idmenu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`, `idmenu`) VALUES
(1, 'Điện Thoại', 3),
(3, 'Ipad', 3),
(4, 'Laptop', 4),
(5, 'Tai Nghe', 3),
(6, 'Đồng Hồ', 3),
(7, 'Chuột', 4),
(8, 'Bàn Phím', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `idmenu` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`idmenu`, `name`, `link`) VALUES
(1, 'Trang Chủ', 'index.php'),
(3, 'Điện thoại', ''),
(4, 'Laptop', 'View/sanphamlaptop.php'),
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
  ADD PRIMARY KEY (`mahh`),
  ADD KEY `FK_hanghoa_maloai` (`maloai`);

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
  MODIFY `mabl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `mahh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `hoadon1`
--
ALTER TABLE `hoadon1`
  MODIFY `masohd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `khachhang1`
--
ALTER TABLE `khachhang1`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
-- Các ràng buộc cho bảng `cthoadon1`
--
ALTER TABLE `cthoadon1`
  ADD CONSTRAINT `fk_cthd_mahd` FOREIGN KEY (`masohd`) REFERENCES `hoadon1` (`masohd`),
  ADD CONSTRAINT `fk_cthd_mahh` FOREIGN KEY (`mahh`) REFERENCES `hanghoa` (`mahh`);

--
-- Các ràng buộc cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `FK_hanghoa_maloai` FOREIGN KEY (`maloai`) REFERENCES `loai` (`maloai`);

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
