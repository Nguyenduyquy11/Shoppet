-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 10, 2024 lúc 12:25 PM
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
-- Cơ sở dữ liệu: `shoppet`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thu_cungs`
--

CREATE TABLE `thu_cungs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_danh_muc` bigint(20) UNSIGNED NOT NULL,
  `ten_thu_cung` varchar(100) NOT NULL,
  `tuoi` int(11) NOT NULL,
  `gioi_tinh` varchar(10) NOT NULL,
  `gia` double(10,2) NOT NULL,
  `so_luong` int(10) UNSIGNED NOT NULL,
  `mo_ta` varchar(255) DEFAULT NULL,
  `ngay_dang` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thu_cungs`
--

INSERT INTO `thu_cungs` (`id`, `id_danh_muc`, `ten_thu_cung`, `tuoi`, `gioi_tinh`, `gia`, `so_luong`, `mo_ta`, `ngay_dang`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mèo Hunter trắng đen', 3, 'Mèo Đực', 300000.00, 2, 'Đây là một loại mèo rất thông minh và đáng yêu', '2024-08-09', NULL, NULL),
(2, 2, 'Chó Monster lông vũ', 5, 'Chó Đực', 500000.00, 5, 'Đây là một loại Chó rất nhanh nhẹn, và hài hước', '2024-08-15', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `thu_cungs`
--
ALTER TABLE `thu_cungs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `thu_cungs`
--
ALTER TABLE `thu_cungs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
