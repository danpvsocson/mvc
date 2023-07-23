-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 30, 2022 lúc 04:30 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `admin`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(234) NOT NULL,
  `password` varchar(234) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `ngaysinh` date DEFAULT NULL,
  `sdt` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `diachi` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `trangthai` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `hoten`, `gioitinh`, `ngaysinh`, `sdt`, `email`, `diachi`, `avatar`, `trangthai`) VALUES
(12, '111', '111', '11', 1, '2111-11-11', '111', '111@gmail.com', '11', 'https://localhost/admin/uploads/anh-profile-nam.jpg', 1),
(21, '222', 'sđsd', 'Phạm Văn Dần', 1, '2022-07-12', '033777225322', 'ilovefamilyhk9@gmail.com222', 'Thôn Gò Gạo, Xã Minh Trí, Huyện Sóc Sơn, Thành Phố Hà Nội', 'https://bit.ly/3nOXIFh', 1),
(22, '333', 'sđsd', 'Phạm Văn Dần', 1, '2022-07-12', '0337772253333', 'ilovefamilyhk9@gmail.com333', 'Thôn Gò Gạo, Xã Minh Trí, Huyện Sóc Sơn, Thành Phố Hà Nội', 'https://bit.ly/3nOXIFh', 1),
(23, '444', '111', '11', 1, '2111-11-11', '11444', '11@gmail.com444', '11', 'https://localhost/admin/uploads/anh-profile-nam.jpg', 1),
(24, '5', '111', '11', 1, '2111-11-11', '11', '11@gmail.com', '11', 'https://localhost/admin/uploads/anh-profile-nam.jpg', 1),
(25, '6', '111', '11', 1, '2111-11-11', '11', '11@gmail.com', '11', 'https://localhost/admin/uploads/anh-profile-nam.jpg', 1),
(26, '7', '111', '11', 1, '2111-11-11', '11', '11@gmail.com', '11', 'https://localhost/admin/uploads/anh-profile-nam.jpg', 1),
(27, '8', '111', '11', 1, '2111-11-11', '11', '11@gmail.com', '11', 'https://localhost/admin/uploads/anh-profile-nam.jpg', 1),
(28, '11', '12121', 'Phạm Văn Dầnsdsd', 1, '2022-07-12', '1212', 'ilovefamilyhk9@gmail.comsdsd', 'Thôn Gò Gạo, Xã Minh Trí, Huyện Sóc Sơn, Thành Phố Hà Nội', 'https://bit.ly/3nOXIFh', 1),
(29, '12', '1212', 'Phạm Văn Dầnsdsdsd', 1, '2022-07-12', '12121', 'ilovefamilyhk9@gmail.comsdsdsd', 'Thôn Gò Gạo, Xã Minh Trí, Huyện Sóc Sơn, Thành Phố Hà Nội', 'https://bit.ly/3nOXIFh', 1),
(30, '13', '1212', 'Phạm Văn Dần', 1, '2022-07-12', '1222211', 'ilovefamilyhk9@gmail.com1', 'Thôn Gò Gạo, Xã Minh Trí, Huyện Sóc Sơn, Thành Phố Hà Nội', 'https://bit.ly/3nOXIFh', 1),
(31, '88', '888', 'Phạm Văn Dần', 1, '2022-07-15', '033777225388', 'ilovefamilyhk9@gmail.com8', 'Thôn Gò Gạo, Xã Minh Trí, Huyện Sóc Sơn, Thành Phố Hà Nội', 'https://bit.ly/3nOXIFh', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bug`
--

CREATE TABLE `bug` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(255) NOT NULL,
  `login_fail` int(10) UNSIGNED NOT NULL,
  `trangthai` tinyint(1) NOT NULL,
  `luottruycap` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `content`
--

CREATE TABLE `content` (
  `id` int(10) UNSIGNED NOT NULL,
  `nhombaiviet` varchar(255) DEFAULT NULL,
  `tieude` text NOT NULL,
  `url` text NOT NULL,
  `chitiet` text DEFAULT NULL,
  `ngaydang` datetime NOT NULL,
  `luotxem` int(10) UNSIGNED DEFAULT NULL,
  `trangthai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `so_sim`
--

CREATE TABLE `so_sim` (
  `id` int(10) UNSIGNED NOT NULL,
  `so` varchar(255) NOT NULL,
  `gia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `so_sim`
--

INSERT INTO `so_sim` (`id`, `so`, `gia`) VALUES
(1, '0123456789', '1000000'),
(15, '1234', '1234'),
(18, '11111', '1'),
(22, '1102', '1102');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bug`
--
ALTER TABLE `bug`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `so_sim`
--
ALTER TABLE `so_sim`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `bug`
--
ALTER TABLE `bug`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `content`
--
ALTER TABLE `content`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `so_sim`
--
ALTER TABLE `so_sim`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
