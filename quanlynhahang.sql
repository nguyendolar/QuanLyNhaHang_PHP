-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 10, 2023 lúc 06:29 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlynhahang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ban`
--

CREATE TABLE `ban` (
  `id` int(11) NOT NULL,
  `tenban` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ban`
--

INSERT INTO `ban` (`id`, `tenban`) VALUES
(1, 'Bàn 1 tầng trệt'),
(3, 'Bàn 1 tầng 2'),
(4, 'Bàn VIP tầng 2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucmonan`
--

CREATE TABLE `danhmucmonan` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmucmonan`
--

INSERT INTO `danhmucmonan` (`id`, `tendanhmuc`) VALUES
(3, 'Món ăn nhẹ'),
(4, 'Khai vị'),
(5, 'Món ăn chính'),
(6, 'Tráng miệng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `daubep`
--

CREATE TABLE `daubep` (
  `id` int(11) NOT NULL,
  `hoten` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `anh` varchar(1000) NOT NULL,
  `sodienthoai` varchar(250) NOT NULL,
  `vitri` varchar(250) NOT NULL,
  `kinhnghiem` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `daubep`
--

INSERT INTO `daubep` (`id`, `hoten`, `email`, `anh`, `sodienthoai`, `vitri`, `kinhnghiem`) VALUES
(1, 'Nguyễn Văn An', 'vanan@gmail.com', 'a.jpg', '0394012354', 'Bếp phụ', '0394012354'),
(3, 'Bùi Văn Hào', 'buihao@gmail.com', 'b.jpg', '0395897456', 'Bếp phụ', '0395897456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monan`
--

CREATE TABLE `monan` (
  `id` int(11) NOT NULL,
  `ten` varchar(250) NOT NULL,
  `gia` int(11) NOT NULL,
  `anh` varchar(1000) NOT NULL,
  `mota` varchar(5000) NOT NULL,
  `danhmucmonan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `monan`
--

INSERT INTO `monan` (`id`, `ten`, `gia`, `anh`, `mota`, `danhmucmonan_id`) VALUES
(1, 'Gỏi bò', 800000, 'download (9).jpg', 'Gỏi bò là món ăn mới được bổ sung vào menu của nhà hàng và đang được rất nhiều thực khách đón nhận.', 3),
(3, 'Bồ câu tiềm bí đỏ', 1000000, 'bo-cau-tiem-bi-do-1-750x422.jpg', 'Đây là món ăn kết hợp hài hòa giữa 2 loại thực phẩm rất bổ dưỡng là bồ câu và bí đỏ', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` int(11) NOT NULL,
  `hoten` varchar(500) NOT NULL,
  `anh` varchar(1000) NOT NULL,
  `email` varchar(500) NOT NULL,
  `sodienthoai` varchar(250) NOT NULL,
  `gioitinh` varchar(250) NOT NULL,
  `diachi` varchar(500) NOT NULL,
  `ngaysinh` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `hoten`, `anh`, `email`, `sodienthoai`, `gioitinh`, `diachi`, `ngaysinh`) VALUES
(1, 'Lê Hoàng Dũng', 'download (10).jpg', 'hoangdung@gmail.com', '0394083764', 'Nam', 'Hà Nội', '1998-04-11'),
(2, 'Lê Văn Nguyên', 'download (11).jpg', 'vannguyen@gmail.com', '0456384656', 'Nam', 'Đà Nẵng', '1999-03-27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `tenhienthi` varchar(500) NOT NULL,
  `taikhoan` varchar(500) NOT NULL,
  `matkhau` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `tenhienthi`, `taikhoan`, `matkhau`) VALUES
(1, 'Quản lý', 'quanly', '123456');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ban`
--
ALTER TABLE `ban`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmucmonan`
--
ALTER TABLE `danhmucmonan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `daubep`
--
ALTER TABLE `daubep`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `monan`
--
ALTER TABLE `monan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lien_ket_01` (`danhmucmonan_id`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ban`
--
ALTER TABLE `ban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `danhmucmonan`
--
ALTER TABLE `danhmucmonan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `daubep`
--
ALTER TABLE `daubep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `monan`
--
ALTER TABLE `monan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `monan`
--
ALTER TABLE `monan`
  ADD CONSTRAINT `lien_ket_01` FOREIGN KEY (`danhmucmonan_id`) REFERENCES `danhmucmonan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
