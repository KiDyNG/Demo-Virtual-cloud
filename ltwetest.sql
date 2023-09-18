-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 12, 2023 lúc 05:00 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ltwetest`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `IDadmin` int(11) NOT NULL,
  `emaildangnhap` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngaytao` timestamp NOT NULL DEFAULT current_timestamp(),
  `phanquyen` tinyint(4) NOT NULL,
  `trangthaiadmin` tinyint(10) NOT NULL DEFAULT 1 COMMENT '1: Mở, 0: Khóa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`IDadmin`, `emaildangnhap`, `hoten`, `matkhau`, `ngaytao`, `phanquyen`, `trangthaiadmin`) VALUES
(1, 'pva123@gmail.com', 'Phạm Bá Việt Anh', 'pva123', '2021-10-03 10:07:04', 1, 1),
(2, 'dhn123@gmail.com', 'Đỗ Hà Nguyên', 'dhn123', '2021-10-03 10:07:04', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anh`
--

CREATE TABLE `anh` (
  `maanh` int(11) NOT NULL,
  `duongdananh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` tinyint(10) NOT NULL DEFAULT 1 COMMENT '1: Mở, 0: Khóa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `anh`
--

INSERT INTO `anh` (`maanh`, `duongdananh`, `trangthai`) VALUES
(1, '../anh_bia/anh_biank1.jpg', 1),
(2, '../anh_bia/anh_biank6.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_hoa_don`
--

CREATE TABLE `chi_tiet_hoa_don` (
  `machitiethoadon` int(100) NOT NULL,
  `mahoadon` int(100) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `tensanpham` varchar(200) NOT NULL,
  `soluong` int(100) NOT NULL,
  `gia` int(11) NOT NULL,
  `size` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_hoa_don`
--

INSERT INTO `chi_tiet_hoa_don` (`machitiethoadon`, `mahoadon`, `sp_id`, `tensanpham`, `soluong`, `gia`, `size`) VALUES
(21, 20, 45, 'MSI Modern 15', 1, 16500000, '25'),
(22, 21, 2, 'Acer Aspire 5 A514-54-540F', 1, 17000000, '23,24,25,26'),
(23, 22, 5, 'Acer Nitro 5-AN515-57-77', 1, 40000000, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cua_hang`
--

CREATE TABLE `cua_hang` (
  `ma_cua_hang` int(11) NOT NULL,
  `ten_cua_hang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi_cua_hang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email_cua_hang` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotline_cua_hang` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ban_do` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_facebook` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_internet` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_youtube` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cua_hang`
--

INSERT INTO `cua_hang` (`ma_cua_hang`, `ten_cua_hang`, `dia_chi_cua_hang`, `email_cua_hang`, `hotline_cua_hang`, `ban_do`, `link_facebook`, `link_internet`, `link_youtube`) VALUES
(1, 'ECCO', '191 P. Bà Triệu, Lê Đại Hành, Hai Bà Trưng, Hà Nội, Việt Nam', 'ecco@gmail.com', '1900 1009', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14898.63317210836!2d105.8051548554199!3d21.006330300000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac83df43d9e9%3A0x6264c4df97c5fcaa!2zQ-G7rWEgSMOgbmcgRWNjbw!5e0!3m2!1svi!2shk!4v1683772528473!5m2!1svi!2shk\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '', '', ''),
(2, 'ECCO ', '72 P. Tây Sơn, Trung Liệt, Đống Đa, Hà Nội ', 'ecco@gmail.com', '1900 1009', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14898.63317210836!2d105.8051548554199!3d21.006330300000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac7faac64f53%3A0xa1bbe4f2dbe95e33!2sEcco!5e0!3m2!1svi!2shk!4v1683773655753!5m2!1svi!2shk\" width=\"800\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `mahoadon` int(11) NOT NULL,
  `mathanhvien` int(11) NOT NULL,
  `mavanchuyen` int(11) NOT NULL,
  `mathanhtoan` int(11) NOT NULL,
  `ngaytao` timestamp NOT NULL DEFAULT current_timestamp(),
  `tennguoinhan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `diachinn` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `emailnn` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dienthoainn` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthaihoadon` tinyint(10) NOT NULL DEFAULT 1 COMMENT '1: Chưa xử lý, 2: Đang xử lý, 3: Đã xử lý. 4: Hóa đơn bị hủy'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`mahoadon`, `mathanhvien`, `mavanchuyen`, `mathanhtoan`, `ngaytao`, `tennguoinhan`, `diachinn`, `emailnn`, `dienthoainn`, `ghichu`, `trangthaihoadon`) VALUES
(20, 1, 2, 2, '2021-10-30 20:13:10', 'a', 'a', 'abc123@gmail.com', '1', 'a', 1),
(21, 1, 3, 4, '2023-04-06 13:11:48', 'a', 'a', 'nhienbang2707@gmail.com', 'a', 'a', 1),
(22, 1, 1, 4, '2023-04-09 12:57:20', 'Nguyen Thanh Tuan', 'Ha Noi', 'hn@gmail.com', '01234567', 'hang dep', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `brand_img` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `manhomsp` int(11) NOT NULL,
  `trangthailoai` tinyint(10) NOT NULL DEFAULT 1 COMMENT '1: Mở, 0: Khóa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`maloai`, `tenloai`, `brand_img`, `manhomsp`, `trangthailoai`) VALUES
(1, 'NIKE', '../brand_img/nikePNG.png', 1, 1),
(2, 'ADiDAS', '../brand_img/logo-adidas1.png', 1, 1),
(3, 'PUMA', '../brand_img/logo-puma1.png', 1, 1),
(4, 'CONVERST', '../brand_img/logo-cv.png', 1, 1),
(5, 'FILA', '../brand_img/logo-fila.png', 1, 1),
(6, 'ECCO', NULL, 1, 0),
(7, 'THE NORT FACE', '../brand_img/logo-tnf.png', 1, 1),
(8, 'REEBOK', '../brand_img/logo-reebook1.png', 1, 1),
(9, 'NEW BALANCE', '', 4, 1),
(10, 'VANS\n', '', 4, 1),
(11, 'BALENCIAGA', '', 4, 1),
(12, 'JORDAN', '', 4, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhomsp`
--

CREATE TABLE `nhomsp` (
  `manhom` int(11) NOT NULL,
  `tennhom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `trangthainhom` int(11) NOT NULL DEFAULT 1 COMMENT '1: Mở, 0: Khóa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhomsp`
--

INSERT INTO `nhomsp` (`manhom`, `tennhom`, `trangthainhom`) VALUES
(1, 'Đồ đá bóng', 1),
(2, 'Giày thể thao', 1),
(3, 'Đồ gym', 1),
(4, 'Đồ yoga', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phan_hoi_kh`
--

CREATE TABLE `phan_hoi_kh` (
  `mabinhluan` int(11) NOT NULL,
  `tenkhachhang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `anhkhachhang` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masp` int(11) DEFAULT NULL,
  `email_kh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ngaygui` timestamp NOT NULL DEFAULT current_timestamp(),
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` tinyint(10) NOT NULL DEFAULT 0 COMMENT '1: Mở, 0: Khóa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phan_hoi_kh`
--

INSERT INTO `phan_hoi_kh` (`mabinhluan`, `tenkhachhang`, `anhkhachhang`, `masp`, `email_kh`, `ngaygui`, `noidung`, `trangthai`) VALUES
(18, 'Nguyen Nhu Minh', NULL, 3, 'a\\', '2021-10-24 08:34:10', 'Sản phẩm rất tốt', 0),
(20, 'Nguyen Duc Trieu', NULL, 19, 'b', '2021-10-24 08:42:51', 'Sản phẩm không tốt', 1),
(21, 'Nguyen Kien Duy', NULL, 3, 'pva123', '2021-10-28 03:08:21', 'ok', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `sp_id` int(11) NOT NULL,
  `tensanpham` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `manhomsp` int(11) NOT NULL,
  `maloaisp` int(11) NOT NULL,
  `anhdaidien` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `gia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `khuyenmai` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gia_sau_giam` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaynhap` timestamp NOT NULL DEFAULT current_timestamp(),
  `motasp` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthaisp` tinyint(10) NOT NULL DEFAULT 1 COMMENT '1: Mở, 0: Khóa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`sp_id`, `tensanpham`, `manhomsp`, `maloaisp`, `anhdaidien`, `soluong`, `gia`, `size`, `noidung`, `khuyenmai`, `gia_sau_giam`, `ngaynhap`, `motasp`, `trangthaisp`) VALUES
(107, 'Nike Air Force 1 Low ‘Valentine’s Day’', 2, 1, 'Nike-Air-Force-1-Low-Valentines-Day-800x600.jpg', 100, '2000000', '36,37,38,39,40,41,43,44,45', 'Nike Air Force 1 Low ‘Valentine’s Day’', '41', '1190000', '2023-04-10 02:16:54', 'Nike Air Force 1 Low ‘Valentine’s Day’', 1),
(108, 'A Bathing Ape Bape Sta X Jjjjound White Grey ', 2, 1, 'jjjjound-x-bape-sta-white-grey-800x600.jpg', 100, '2000000', '36,37,38,39,40,41,43,44,45', 'Giày A Bathing Ape Bape Sta X Jjjjound White Grey Like Auth', '41', '1190000', '2023-04-10 02:17:51', 'Giày A Bathing Ape Bape Sta X Jjjjound White Grey Like Auth', 1),
(109, ' Nike Air Force 1 Low Cream Black Swoosh', 2, 1, 'af1-cream-black-swoosh-800x600.jpg', 100, '1900000', '36,37,38,39,40,41,43,44,45', ' Nike Air Force 1 Low Cream Black Swoosh', '63', '1900000', '2023-04-10 02:19:12', 'Giày Nike Air Force 1 Low Cream Black Swoosh', 1),
(110, ' Nike Air Force 1 Low Canvas Stussy Navy', 2, 1, 'af1-stussy-canvas-navy-800x600.jpg', 100, '1900000', '36,37,38,39,40,41,43,44,45', 'Giày Nike Air Force 1 Low Canvas Stussy Navy', '63', '698000', '2023-04-10 02:20:54', 'Giày Nike Air Force 1 Low Canvas Stussy Navy', 1),
(111, 'Giày Adidas Alphamagma White đế gót đen', 2, 2, 'giay-adidas-alphamagma-white-800x600.jpg', 100, '1500000', '36,37,38,39,40,41,43,44,45', ' Adidas Alphamagma White đế gót đen', '35', '898000', '2023-05-10 08:34:59', '', 1),
(112, 'Giày Adidas Alphamagma Grey Black', 2, 2, 'giay-adidas-alphamagma-grey-black-800x600.jpg', 50, '1500000', '36,37,38,39,40,41,43,44,45', ' Adidas Alphamagma Grey Black', '35', '898000', '2023-05-10 08:37:15', '', 1),
(113, 'Giày Adidas Alphamagma Black White', 2, 2, 'giay-adidas-alphamagma-black-white-800x600.jpg', 100, '1500000', '36,37,38,39,40,41,43,44,45', ' Adidas Alphamagma Black White', '35', '898000', '2023-05-10 08:41:08', '', 1),
(114, 'Giày Adidas Alphamagma Cloud White', 2, 2, 'giay-adidas-alphamagma-cloud-white-800x600.jpg', 100, '1500000', '36,37,38,39,40,41,43,44,45', 'Adidas Alphamagma Cloud White', '35', '898000', '2023-05-10 08:42:00', '', 1),
(115, 'Giày Adidas Samba OG Cloud White Core Black', 2, 2, 'adidas-Samba-OG-Cloud-White-Core-White-Black-800x600.jpg', 100, '1500000', '36,37,38,39,40,41,43,44,45', ' Adidas Samba OG Cloud White Core Black', '35', '898000', '2023-05-10 08:47:10', '', 1),
(116, 'Giày Adidas Samba Classic ‘White’', 2, 2, 'adidas-adidas-samba-classic-white-800x601.jpg', 100, '1500000', '36,37,38,39,40,41,43,44,45', ' Adidas Samba Classic ‘White’', '35', '898000', '2023-05-10 08:47:57', '', 1),
(117, 'Giày Adidas Samba OG ‘Black Gum’', 2, 2, 'Adidas-Samba-OG-Black-Gum-800x599.jpg', 100, '1350000', '36,37,38,39,40,41,43,44,45', 'Adidas Samba OG ‘Black Gum’', '25', '878000', '2023-05-10 08:50:30', '', 1),
(118, 'Converse Chuck Taylor 1970s High Fear Of God ', 2, 4, 'Giay-Converse-Chuck-Taylor-1970s-High-Fear-of-God-Natural-Replica-2-800x600.jpeg', 100, '1200000', '36,37,38,39,40,41,43,44,45', 'Converse Chuck Taylor 1970s High Fear Of God Trắng', '25', '789000', '2023-05-10 13:33:56', '', 1),
(119, 'Converse Chuck Taylor 1970s High Fear Of God ', 2, 4, 'Giay-Converse-Chuck-Taylor-1970s-High-Fear-Of-God-Black-Natural-Replica8-800x600.jpg', 100, '1200000', '36,37,38,39,40,41,43,44,45', 'Converse Chuck Taylor 1970s High Fear Of God Đen', '35', '789000', '2023-05-10 13:35:29', '', 1),
(120, 'Converse Chuck1970s Kem Cao Cổ', 2, 4, 'converse-1970s-cream-white-high-replica-1-800x600.jpg', 100, '900000', '36,37,38,39,40,41,43,44,45', 'Converse Chuck1970s Kem Cao Cổ', '25', '589000', '2023-05-10 13:36:48', '', 1),
(121, 'Converse 1970s Xanh Navy Cao Cổ', 2, 4, 'converse-1970s-navy-high-replica-800x600.jpg', 100, '1000000', '36,37,38,39,40,41,43,44,45', 'Converse 1970s Xanh Navy Cao Cổ', '35', '648000', '2023-05-10 13:37:56', '', 1),
(122, 'Converse Chuck 1970s Off White Cao Cổ', 2, 4, 'converse-off-white-1970s-replica-800x601.jpg', 100, '1200000', '36,37,38,39,40,41,43,44,45', 'Converse Chuck 1970s Off White Cao Cổ', '35', '678000', '2023-05-10 13:38:43', '', 1),
(123, 'Áo tuyển Bồ Đào Nha', 1, 2, '300035884_3003820823243213_2534977676708226706_n.jpg', 100, '2000000', 'M,L,XL,XXL', 'Áo tuyển Bồ Đào Nha', '35', '1200000', '2023-05-10 15:14:19', '', 1),
(124, 'Áo đá bóng tuyển Anh', 1, 2, '300105649_3003820756576553_4837276618163504224_n.jpg', 100, '2000000', 'M,L,XL,XXL', 'Áo đá bóng tuyển Anh', '35', '1250000', '2023-05-11 01:52:38', '', 1),
(125, 'Áo đá bóng tuyển Ý', 1, 2, '300044271_3003820929909869_3021466657545933517_n.jpg', 100, '2000000', 'M,L,XL,XXL', 'Áo đá bóng tuyển Ý', '35', '1350000', '2023-05-11 01:53:36', '', 1),
(126, 'Áo tuyển Pháp', 1, 2, '300010735_3003820873243208_8393081569778581890_n.jpg', 100, '2350000', 'M,L,XL,XXL', 'Áo tuyển Pháp', '35', '1350000', '2023-05-11 01:54:46', '', 1),
(127, 'Áo tuyển Pháp Ginola', 1, 2, '299987309_3003820739909888_8226345091007266079_n.jpg', 100, '2000000', 'M,L,XL,XXL', 'Áo tuyển Pháp Ginola', '35', '1250000', '2023-05-11 02:06:46', '', 1),
(128, 'Áo tuyển Pháp djorkaeff', 1, 3, '299973124_3003820843243211_5240720313845076734_n.jpg', 100, '2350000', 'M,L,XL,XXL', 'Áo tuyển Pháp djorkaeff', '35', '1350000', '2023-05-11 02:08:29', '', 1),
(129, 'Áo tuyển Argentina', 1, 1, '299862745_3003820856576543_1350948486219200090_n.jpg', 100, '2350000', 'M,L,XL,XXL', 'Áo tuyển Argentina', '35', '1350000', '2023-05-11 02:09:12', '', 1),
(130, 'Áo tuyển Anh', 1, 2, '299788364_3003820899909872_2836349795904786638_n.jpg', 100, '2350000', 'M,L,XL,XXL', 'Áo tuyển Anh', '35', '1250000', '2023-05-11 02:09:53', '', 1),
(131, 'Áo tuyển Anh Owen ', 1, 1, '299771201_3003820776576551_1422822729770582857_n.jpg', 100, '2530000', 'M,L,XL,XXL', 'Áo tuyển Anh sân khách', '35', '1450000', '2023-05-11 02:10:51', '', 1),
(132, 'Áo đá bóng XVI', 1, 3, '299760836_3003820963243199_1723162630671470562_n.jpg', 100, '3500000', 'M,L,XL,XXL', 'Áo đá bóng XVI', '35', '2520000', '2023-05-11 02:11:33', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `mathanhtoan` int(11) NOT NULL,
  `hinhthuctt` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ghichutt` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthai` tinyint(10) NOT NULL DEFAULT 1 COMMENT '1: Mở, 0: Khóa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhtoan`
--

INSERT INTO `thanhtoan` (`mathanhtoan`, `hinhthuctt`, `ghichutt`, `trangthai`) VALUES
(1, 'Thanh toán qua ngân hàng', '<p><span style=\"font-size: 14px;\"><span style=\"font-family: verdana,geneva,sans-serif;\">Bạn vui l&ograve;ng chuyển khoản đến một t&agrave;i khoản sau:</span></span></p>\r\n<p><em><span style=\"font-size: 14px;\"><span style=\"font-family: verdana,geneva,sans-serif;\">(Nội dung chuyển khoản: Viết Họ t&ecirc;n kh&ocirc;ng c&oacute; dấu - Số điện thoại bạn đ&atilde; đặt h&agrave;ng)</span></span></em></p>\r\n<p><span style=\"font-size: 14px;\"><span style=\"font-family: verdana,geneva,sans-serif;\">Ng&acirc;n h&agrave;ng VPBank:&nbsp;</span></span></p>\r\n<p style=\"margin-left: 40px;\"><span style=\"font-size: 14px;\"><span style=\"font-family: verdana,geneva,sans-serif;\">+ Chủ t&agrave;i khoản: Vũ Tiến Dũng</span></span></p>\r\n<p style=\"margin-left: 40px;\"><span style=\"font-size: 14px;\"><span style=\"font-family: verdana,geneva,sans-serif;\">+ Số t&agrave;i khoản: 187013836</span></span></p>\r\n<p style=\"margin-left: 40px;\"><span style=\"font-family: verdana,geneva,sans-serif; font-size: 14px;\">+&nbsp;</span><span style=\"font-size: 14px;\"><span style=\"font-family: verdana,geneva,sans-serif;\">Ng&acirc;n h&agrave;ng: VPBank chi nh&aacute;nh H&agrave; Nội<span style=\"font-size: 14px;\"><span style=\"font-family: verdana,geneva,sans-serif;\"><span style=\"font-size: 14px;\"><span style=\"font-family: verdana,geneva,sans-serif;\">​</span></span></span></span></span></span></p>\r\n<p><span style=\"font-size: 14px;\"><span style=\"font-family: verdana,geneva,sans-serif;\">Ng&acirc;n h&agrave;ng Agribank:&nbsp;</span></span></p>\r\n<p style=\"margin-left: 40px;\"><span style=\"font-family: verdana,geneva,sans-serif; font-size: 14px;\">+&nbsp;</span><span style=\"font-size: 14px;\"><span style=\"font-family: verdana,geneva,sans-serif;\">Chủ t&agrave;i khoản: Nghi&ecirc;m Thanh T&ugrave;ng</span></span></p>\r\n<p style=\"margin-left: 40px;\"><span style=\"font-family: verdana,geneva,sans-serif; font-size: 14px;\">+&nbsp;</span><span style=\"font-size: 14px;\"><span style=\"font-family: verdana,geneva,sans-serif;\">Số t&agrave;i khoản: 0087575829474</span></span></p>\r\n<p style=\"margin-left: 40px;\"><span style=\"font-family: verdana,geneva,sans-serif; font-size: 14px;\">+&nbsp;</span><span style=\"font-size: 14px;\"><span style=\"font-family: verdana,geneva,sans-serif;\">Ng&acirc;n h&agrave;ng: Agribank chi nh&aacute;nh L&aacute;ng Hạ</span></span></p>', 1),
(2, '<p>Thanh toán tiền mặt</p>', '<p><span style=\"font-family: verdana,geneva,sans-serif;\"><span style=\"font-size: 14px;\">Kh&aacute;ch h&agrave;ng thanh to&aacute;n bằng tiền mặt khi nhận h&agrave;ng</span></span></p>', 1),
(3, 'Thanh toán qua VNPAY', '<p><span style=\"font-size: 14px;\"><span style=\"font-family: verdana,geneva,sans-serif;\">Bạn vui l&ograve;ng thực hiện c&aacute;c bước sau:</span></span></p>\r\n<p style=\"margin-left: 40px;\"><span style=\"font-size: 14px;\"><span style=\"font-family: verdana,geneva,sans-serif;\">+ Bước 1:Tải v&agrave; đăng nhập ứng dụng Mobile Banking</span></span></p>\r\n<p style=\"margin-left: 40px;\"><span style=\"font-size: 14px;\"><span style=\"font-family: verdana,geneva,sans-serif;\">+ Bước 2: Chọn t&iacute;nh năng QR Pay t&iacute;ch hợp sẵn trong ứng dụng</span></span></p>\r\n<p style=\"margin-left: 40px;\"><span style=\"font-family: verdana,geneva,sans-serif; font-size: 14px;\">+&nbsp;</span><span style=\"font-size: 14px;\"><span style=\"font-family: verdana,geneva,sans-serif;\">Bước 3: Qu&eacute;t m&atilde; VNPay để thanh to&aacute;n</span></span></p>\r\n<p style=\"margin-left: 40px;\"><span style=\"font-size: 14px;\"><span style=\"font-family: verdana,geneva,sans-serif;\">+ Bước 4: Nhập số tiền v&agrave; x&aacute;c minh giao dịch</span></span></p>', 1),
(4, '<p>Thanh toán qua Momo</p>', '<p><span style=\"font-size: 14px;\"><span style=\"font-family: verdana,geneva,sans-serif;\">Bạn vui l&ograve;ng thực hiện c&aacute;c bước sau:</span></span></p>\r\n<p style=\"margin-left: 40px;\"><span style=\"font-size: 14px;\"><span style=\"font-family: verdana,geneva,sans-serif;\">+ Bước 1: Mở ứng dụng Momo chọn phần \"M&Atilde; THANH TO&Aacute;N\"</span></span></p>\r\n<p style=\"margin-left: 40px;\"><span style=\"font-size: 14px;\"><span style=\"font-family: verdana,geneva,sans-serif;\">+ Bước 2: Đưa m&atilde; thanh to&aacute;n cho thu ng&acirc;n qu&eacute;t</span></span></p>\r\n<p style=\"margin-left: 40px;\"><span style=\"font-family: verdana,geneva,sans-serif; font-size: 14px;\">+&nbsp;</span><span style=\"font-size: 14px;\"><span style=\"font-family: verdana,geneva,sans-serif;\">Bước 3: Thanh to&aacute;n ho&agrave;n tất</span></span></p>', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `mathanhvien` int(11) NOT NULL,
  `hoten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tendangnhap` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `ngaytao` timestamp NOT NULL DEFAULT current_timestamp(),
  `trangthai` tinyint(10) NOT NULL DEFAULT 1 COMMENT '1: Mở, 0: Khóa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`mathanhvien`, `hoten`, `tendangnhap`, `matkhau`, `email`, `dienthoai`, `diachi`, `ngaytao`, `trangthai`) VALUES
(1, 'Nguyễn Hồng Nhung', 'nhn123', 'nhn123', 'nhn123@gmail.com', '0985539882', 'Vĩnh Tuy, Hai Bà Trưng, Hà Nội', '2021-10-07 14:40:47', 1),
(2, 'Vũ Tiến Dũng', 'vtd123', 'vtd123', 'vtd123@gmail.com', '0377322510', 'Trần Phú, Hoàng Mai, Hà Nội', '2021-10-08 13:17:23', 1),
(3, 'Nguyễn Huy Cương', 'nhc123', 'nhc123', 'nhc123@gmail.com', '123456789', 'Vĩnh Phúc', '2021-10-18 03:41:36', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vanchuyen`
--

CREATE TABLE `vanchuyen` (
  `mavanchuyen` int(11) NOT NULL,
  `hinhthucvc` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `giacuoc` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` tinyint(10) NOT NULL DEFAULT 1 COMMENT '1: Mở; 0: Khóa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vanchuyen`
--

INSERT INTO `vanchuyen` (`mavanchuyen`, `hinhthucvc`, `giacuoc`, `trangthai`) VALUES
(1, 'Chuyển phát nhanh', '50.000', 1),
(2, 'Chuyển hàng qua bưu điện', '30.000', 1),
(3, 'Ship COD', '25.000', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`IDadmin`);

--
-- Chỉ mục cho bảng `anh`
--
ALTER TABLE `anh`
  ADD PRIMARY KEY (`maanh`);

--
-- Chỉ mục cho bảng `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD PRIMARY KEY (`machitiethoadon`),
  ADD KEY `fkhoadon` (`mahoadon`),
  ADD KEY `fksp_id` (`sp_id`);

--
-- Chỉ mục cho bảng `cua_hang`
--
ALTER TABLE `cua_hang`
  ADD PRIMARY KEY (`ma_cua_hang`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahoadon`),
  ADD KEY `fk4` (`mathanhvien`),
  ADD KEY `fk5` (`mathanhtoan`),
  ADD KEY `fk6` (`mavanchuyen`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`maloai`),
  ADD KEY `fk1` (`manhomsp`);

--
-- Chỉ mục cho bảng `nhomsp`
--
ALTER TABLE `nhomsp`
  ADD PRIMARY KEY (`manhom`);

--
-- Chỉ mục cho bảng `phan_hoi_kh`
--
ALTER TABLE `phan_hoi_kh`
  ADD PRIMARY KEY (`mabinhluan`),
  ADD KEY `fk7` (`masp`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`sp_id`),
  ADD KEY `fk2` (`manhomsp`),
  ADD KEY `fk3` (`maloaisp`);

--
-- Chỉ mục cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`mathanhtoan`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`mathanhvien`);

--
-- Chỉ mục cho bảng `vanchuyen`
--
ALTER TABLE `vanchuyen`
  ADD PRIMARY KEY (`mavanchuyen`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `IDadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `anh`
--
ALTER TABLE `anh`
  MODIFY `maanh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  MODIFY `machitiethoadon` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `cua_hang`
--
ALTER TABLE `cua_hang`
  MODIFY `ma_cua_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `nhomsp`
--
ALTER TABLE `nhomsp`
  MODIFY `manhom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `phan_hoi_kh`
--
ALTER TABLE `phan_hoi_kh`
  MODIFY `mabinhluan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  MODIFY `mathanhtoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `mathanhvien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `vanchuyen`
--
ALTER TABLE `vanchuyen`
  MODIFY `mavanchuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `fk4` FOREIGN KEY (`mathanhvien`) REFERENCES `thanhvien` (`mathanhvien`),
  ADD CONSTRAINT `fk5` FOREIGN KEY (`mathanhtoan`) REFERENCES `thanhtoan` (`mathanhtoan`),
  ADD CONSTRAINT `fk6` FOREIGN KEY (`mavanchuyen`) REFERENCES `vanchuyen` (`mavanchuyen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
