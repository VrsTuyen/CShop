-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th3 28, 2022 lúc 05:14 AM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `Username` char(30) COLLATE utf8_unicode_ci NOT NULL,
  `Password` char(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`Username`, `Password`) VALUES
('Admin', '123'),
('Tuyen', '112233'),
('tuyen1', '111'),
('', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

DROP TABLE IF EXISTS `donhang`;
CREATE TABLE IF NOT EXISTS `donhang` (
  `MaHD` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `MaKH` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Ngaydathang` date NOT NULL,
  `Tongtien` int(11) NOT NULL,
  PRIMARY KEY (`MaHD`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangct`
--

DROP TABLE IF EXISTS `donhangct`;
CREATE TABLE IF NOT EXISTS `donhangct` (
  `MaDH` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Mahang` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Soluong` int(11) NOT NULL,
  `Dongia` int(11) NOT NULL,
  PRIMARY KEY (`MaDH`,`Mahang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

DROP TABLE IF EXISTS `hanghoa`;
CREATE TABLE IF NOT EXISTS `hanghoa` (
  `Mahang` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Tenhang` text COLLATE utf8_unicode_ci NOT NULL,
  `Dongia` int(11) NOT NULL,
  `Soluong` int(11) NOT NULL,
  `DVT` text COLLATE utf8_unicode_ci NOT NULL,
  `Anh` text COLLATE utf8_unicode_ci NOT NULL,
  `Maloai` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Mota` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Mahang`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihang`
--

DROP TABLE IF EXISTS `loaihang`;
CREATE TABLE IF NOT EXISTS `loaihang` (
  `Maloai` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Tenloai` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Maloai`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaihang`
--

INSERT INTO `loaihang` (`Maloai`, `Tenloai`) VALUES
('1', ' HÃ ng loáº¡i 1'),
('a', 'HÃ ng loáº¡i A');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
