-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: sql200.ihostfull.com
-- Thời gian đã tạo: Th10 30, 2023 lúc 10:15 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `uoolo_35506633_webbanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `name_admin` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `name_admin`, `password`, `admin_status`) VALUES
(2, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `id_baiviet` int(11) NOT NULL,
  `tieudebaiviet` varchar(500) NOT NULL,
  `noidungbaiviet` text NOT NULL,
  `nguon_url` varchar(200) NOT NULL,
  `hinhanh` varchar(255) DEFAULT NULL,
  `id_danhmuc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`id_baiviet`, `tieudebaiviet`, `noidungbaiviet`, `nguon_url`, `hinhanh`, `id_danhmuc`) VALUES
(19, 'NgÆ°á»i dÃ¹ng ngÃ y cÃ ng chuá»™ng iPhone báº£n Ä‘áº¯t tiá»n', 'Apple cÃ³ nhiá»u cáº£i tiáº¿n vÃ  nÃ¢ng cáº¥p cho dÃ²ng iPhone 15 thÆ°á»ng, nhÆ°ng tá»· lá»‡ doanh sá»‘ cá»§a hai phiÃªn báº£n Pro váº«n liÃªn tá»¥c tÄƒng nhá»¯ng nÄƒm qua.', 'https://vnexpress.net/nguoi-dung-ngay-cang-chuong-iphone-ban-dat-tien-4682179.html', '1701182352_Display-shipments-show-growing-7153-5306-1701156892.jpg', 8),
(20, 'Loáº¡t Ä‘iá»‡n thoáº¡i cáº¥u hÃ¬nh tá»‘t táº§m giÃ¡ ba triá»‡u Ä‘á»“ng', 'CÃ¡c smartphone giÃ¡ ráº» tá»« Xiaomi, Honor, Poco hay Infinix Ä‘á»u cÃ³ mÃ n hÃ¬nh lá»›n trÃªn 6,5 inch, bá»™ nhá»› tá»‘i thiá»ƒu 128 GB.\r\n\r\nPhÃ¢n khÃºc Ä‘iá»‡n thoáº¡i giÃ¡ ráº» má»™t nÄƒm trá»Ÿ láº¡i Ä‘Ã¢y cÃ³ tá»‘c Ä‘á»™ tÄƒng trÆ°á»Ÿng tá»‘t, ngÆ°á»£c vá»›i sá»± tráº§m láº¯ng á»Ÿ phÃ¢n khÃºc táº§m trung, cao cáº¥p. Trong nÄƒm 2023, vá»›i má»©c giÃ¡ táº§m ba triá»‡u Ä‘á»“ng, ngÆ°á»i dÃ¹ng cÃ³ thá»ƒ chá»n cÃ¡c mÃ¡y cÃ³ RAM Ã­t nháº¥t 4 GB, tháº­m chÃ­ lÃªn tá»›i 8 GB trong khi bá»™ nhá»› khá»Ÿi Ä‘iá»ƒm khoáº£ng 128 GB. MÃ n hÃ¬nh lá»›n cÅ©ng lÃ  Æ°u Ä‘iá»ƒm cá»§a sáº£n pháº©m, phÃ¹ há»£p vá»›i ngÆ°á»i lá»›n tuá»•i, há»c sinh, sinh viÃªn.', 'https://vnexpress.net/loat-dien-thoai-cau-hinh-tot-tam-gia-ba-trieu-dong-4681840.html', '1701239199_a1-1701075774-7228-1701075819.jpg', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `id_banner` int(11) NOT NULL,
  `tenbanner` varchar(100) NOT NULL,
  `hinhanh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_banner`
--

INSERT INTO `tbl_banner` (`id_banner`, `tenbanner`, `hinhanh`) VALUES
(14, 'IP15-1', '1701180489_iphone-15-pro-max-256gb---10--1020x570.jpg'),
(15, 'IP15-2', '1701180497_vi-vn-iphone-15-pro-max-4-1020x570.jpg'),
(16, 'IP15-3', '1701180504_vi-vn-iphone-15-pro-max-256gb--(2).jpg'),
(17, 'Æ¯U ÄÃ£i Sinh viÃªn', '1701187722_samsung-galaxy-s23-ultra-sliding-th111.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL,
  `thutu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(9, 'Äiá»‡n thoáº¡i', 1),
(10, 'LapTop', 2),
(11, 'Ã‚m Thanh', 3),
(12, 'Äá»“ng Há»“', 4),
(13, 'TiVi', 5),
(14, 'Phá»¥ Kiá»‡n', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmucbv`
--

CREATE TABLE `tbl_danhmucbv` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(255) DEFAULT NULL,
  `thutu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmucbv`
--

INSERT INTO `tbl_danhmucbv` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(8, 'Thiáº¿t bá»‹', 0),
(12, 'abc', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `id_gio` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `code_gio` varchar(11) NOT NULL,
  `trangthai_don` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_giohang`
--

INSERT INTO `tbl_giohang` (`id_gio`, `id_user`, `code_gio`, `trangthai_don`) VALUES
(69, 7, '7819', 1),
(70, 9, '2508', 1),
(71, 11, '9535', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sp` int(11) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `masp` varchar(255) DEFAULT NULL,
  `giasp` decimal(10,2) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `hinhanh` varchar(255) DEFAULT NULL,
  `tomtat` text DEFAULT NULL,
  `noidung` text DEFAULT NULL,
  `tinhtrang` int(11) DEFAULT NULL,
  `id_danhmuc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sp`, `tensp`, `masp`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(20, 'OPPO Find N2 Flip 5G', '1  ', '17990000.00', 4, '1701175751_oppo-find-n2-flip-purple-thumb-1-600x600-1-600x600.webp', 'OPPO Find N2 Flip 5G - chiáº¿c Ä‘iá»‡n thoáº¡i gáº­p Ä‘áº§u tiÃªn cá»§a OPPO\r\n', 'OPPO Find N2 Flip vá»›i mÃ n hÃ¬nh gáº­p má»Ÿ Ä‘á»™c Ä‘Ã¡o giÃºp mÃ¡y trá»Ÿ thÃ nh máº«u Ä‘iá»‡n thoáº¡i lÃ½ tÆ°á»Ÿng vÃ  cá»±c ká»³ tiá»‡n lá»£i cho xu hÆ°á»›ng tÆ°Æ¡ng lai. ÄÆ°á»£c trang bá»‹ cÃ¡c thÃ´ng sá»‘ gáº§n nhÆ° thuá»™c top Ä‘áº§u trong ngÃ nh tá»« hiá»‡u nÄƒng cho Ä‘áº¿n camera, há»©a háº¹n mang láº¡i nhiá»u tráº£i nghiá»‡m má»›i máº», thÃ­ch thÃº cho ngÆ°á»i dÃ¹ng.', 1, 9),
(21, 'iPhone 15 Pro Max', '2  ', '32850000.00', 2, '1701180728_iphone-15-pro-max-natural-titanium-pure-back-iphone-15-pro-max-natural-titanium-pure-front-2up-screen-usen.webp', 'iPhone 15 Pro Max Ä‘Ã£ chÃ­nh thá»©c Ä‘Æ°á»£c ra máº¯t trong sá»± kiá»‡n Wonderlust táº¡i nhÃ  hÃ¡t Steve Jobs, California (Má»¹) vÃ o lÃºc 10h sÃ¡ng 12/9 tá»©c 0h ngÃ y 13/9 (giá» Viá»‡t Nam). Chiáº¿c iPhone má»›i trong series má»›i Ä‘em Ä‘áº¿n cho ngÆ°á»i dÃ¹ng tráº£i nghiá»‡m á»•n Ä‘á»‹nh hÆ¡n vá»›i tháº¿ há»‡ chip A17 Pro má»›i nháº¥t, cÃ¹ng cÃ´ng nghá»‡ Wi-Fi 6E. Bá»™ camera cá»§a iPhone 15 Pro Max cÅ©ng Ä‘Æ°á»£c nÃ¢ng cáº¥p thÃªm vá»›i á»‘ng kÃ­nh tele vá»›i kháº£ nÄƒng zoom quang há»c 5x vá»›i thiáº¿t káº¿ tetraprism hiá»‡n Ä‘áº¡i.', 'iPhone 15 Pro Max mÃ u sáº¯c sang cháº£nh, iFans chÃ¡y tÃºi\r\n\r\niPhone 15 Pro Max Ä‘em Ä‘áº¿n cho ngÆ°á»i dÃ¹ng Ä‘a dáº¡ng sá»± lá»±a chá»n vá»›i ba phiÃªn báº£n bá»™ nhá»› trong láº§n lÆ°á»£t lÃ  256GB/512GB/1TB vÃ  bá»‘n lá»±a chá»n mÃ u gá»“m Titan Tá»± NhiÃªn/Titan Tráº¯ng/Titan Xanh/Titan Äen. NgoÃ i viá»‡c sá»­ dá»¥ng cháº¥t liá»‡u Titan má»›i, nhá»¯ng cáº£i tiáº¿n vá» cáº¥u hÃ¬nh Ä‘Æ°á»£c Apple cáº­p nháº­t vÃ  trang bá»‹ há»©a háº¹n Ä‘em Ä‘áº¿n tráº£i nghiá»‡m ngÆ°á»i dÃ¹ng nÃ¢ng cao hÆ¡n.', 1, 9),
(22, 'Samsung Galaxy Z Fold5', '3', '31490000.00', 6, '1701180887_fold-5-chinh-thuc-2.webp', 'ï»¿Äiá»‡n thoáº¡i Samsung Galaxy Z Fold5 cÃ³ thá»ƒ dá»… dÃ ng xá»­ lÃ½ Ä‘a tÃ¡c vá»¥ mÃ  khÃ´ng lo giáº­t lag vá»›i bá»™ nhá»› RAM lÃªn tá»›i 12GB, káº¿t há»£p vá»›i chipset máº¡nh máº½ cá»§a Snapdragon â€“Snapdragon 8 Gen 2 for Galaxy. NgoÃ i ra, vá»›i mÃ n hÃ¬nh Dynamic AMOLED 2X rá»™ng lÃªn tá»›i 7.6 inch cá»§a Samsung Fold5, khÃ¡ch hÃ ng cÃ³ thá»ƒ tráº£i nghiá»‡m hÃ¬nh áº£nh rÃµ nÃ©t má»™t cÃ¡ch tá»‘i Ä‘a. ThÃªm vÃ o Ä‘Ã³, sá»± bá»n bá»‰ Ä‘áº¿n tá»« viÃªn pin 4400mAh sáº½ lÃ  ngÆ°á»i báº¡n hoÃ n háº£o cá»§a chiáº¿c Ä‘iá»‡n thoáº¡i Samsung gáº­p nÃ y suá»‘t ngÃ y dÃ i.', 'Samsung Fold 5 â€“ Chiáº¿c Ä‘iá»‡n thoáº¡i gáº­p tháº¿ há»‡ má»›i\r\nNáº¿u báº¡n Ä‘ang tÃ¬m kiáº¿m má»™t chiáº¿c smartphone Samsung mang váº» ngoÃ i sang trá»ng vá»›i cáº¥u hÃ¬nh cao cáº¥p, báº¡n cháº¯c cháº¯n khÃ´ng thá»ƒ bá» lá»¡ Ä‘iá»‡n thoáº¡i di Ä‘á»™ng Samsung Galaxy Z Fold5. LÃ  dÃ²ng Ä‘iá»‡n thoáº¡i má»›i Ä‘Æ°á»£c ra máº¯t tá»›i Ä‘Ã¢y táº¡i thá»‹ trÆ°á»ng Viá»‡t Nam, siÃªu pháº©m Samsung Galaxy mÃ n hÃ¬nh gáº­p tháº¿ há»‡ thá»© 5 há»©a háº¹n mang Ä‘áº¿n hiá»‡u nÄƒng máº¡nh máº½ vÃ  nhiá»u tÃ­nh nÄƒng má»›i Ä‘Æ°á»£c cáº£i tiáº¿n.\r\n\r\nMÃ n hÃ¬nh Samsung Galaxy Z Fold5 - Thiáº¿t káº¿ Flex, khÃ´ng náº¿p gáº¥p\r\nSo vá»›i Ä‘á»i mÃ¡y trÆ°á»›c, Samsung Galaxy Z Fold5 sáº½ cÃ³ bÆ°á»›c tiáº¿n máº¡nh máº½ khi sá»Ÿ há»¯u mÃ n hÃ¬nh chÃ­nh 7.6 inch, thiáº¿t káº¿ trÃ n viá»n cÅ©ng Ä‘em Ä‘áº¿n cho ngÆ°á»i dÃ¹ng cáº£m giÃ¡c mÃ n siÃªu rá»™ng. Äáº·c biá»‡t, Ä‘iá»‡n thoáº¡i Ä‘Æ°á»£c trang bá»‹ táº¥m ná»n Dynamic AMOLED 2X vá»›i Ä‘á»™ phÃ¢n giáº£i 2176 x 1812 pixels vÃ  táº§n sá»‘ quÃ©t 120Hz. Äiá»u nÃ y gÃ³p pháº§n nÃ¢ng táº§m cháº¥t lÆ°á»£ng hiá»ƒn thá»‹, mang láº¡i hÃ¬nh áº£nh vÃ  mÃ u sáº¯c chÃ¢n thá»±c, chi tiáº¿t vá»›i Ä‘á»™ sáº¯c nÃ©t hoÃ n háº£o nháº¥t.', 1, 9),
(23, 'Samsung Galaxy S23 Ultra', 'S23U/256  ', '23990000.00', 3, '1701181732_samsung-galaxy-s23-ultra.webp', 'Sau sá»± Ä‘á»• bá»™ thÃ nh cÃ´ng cá»§a Samsung Galaxy S22 nhá»¯ng chiáº¿c Ä‘iá»‡n thoáº¡i dÃ²ng Flagship tiáº¿p theo - Äiá»‡n thoáº¡i Samsung Galaxy S23 Ultra lÃ  Ä‘á»‘i tÆ°á»£ng Ä‘Æ°á»£c Samfans háº¿t má»±c sÄƒn Ä‘Ã³n. Kiá»ƒu dÃ¡ng thanh lá»‹ch sang cháº£nh káº¿t há»£p vá»›i nhá»¯ng bÆ°á»›c Ä‘á»™t phÃ¡ trong cÃ´ng nghá»‡ Ä‘Ã£ kiáº¿n táº¡o nÃªn siÃªu pháº©m Flagship nhÃ  Samsung.', 'Sau sá»± Ä‘á»• bá»™ thÃ nh cÃ´ng cá»§a Samsung Galaxy S22 nhá»¯ng chiáº¿c Ä‘iá»‡n thoáº¡i dÃ²ng Flagship tiáº¿p theo - Äiá»‡n thoáº¡i Samsung Galaxy S23 Ultra lÃ  Ä‘á»‘i tÆ°á»£ng Ä‘Æ°á»£c Samfans háº¿t má»±c sÄƒn Ä‘Ã³n. Kiá»ƒu dÃ¡ng thanh lá»‹ch sang cháº£nh káº¿t há»£p vá»›i nhá»¯ng bÆ°á»›c Ä‘á»™t phÃ¡ trong cÃ´ng nghá»‡ Ä‘Ã£ kiáº¿n táº¡o nÃªn siÃªu pháº©m Flagship nhÃ  Samsung.', 1, 9),
(24, 'Samsung Galaxy S21 FE', 'S21FE8/128', '9990900.00', 2, '1701182034_sm-g990_s21fe_backfront_lv.webp', 'Thiáº¿t káº¿ cao cáº¥p - Váº» Ä‘áº¹p tinh táº¿ cÃ¹ng nhiá»u mÃ u sáº¯c thá»i thÆ°á»£ng\r\nTrá»n váº¹n tá»«ng khung hÃ¬nh - MÃ n hÃ¬nh 6.4\"\", Ä‘á»™ sÃ¡ng cao cÃ¹ng táº§n sá»‘ quÃ©t 120Hz\r\nSáº¯c nÃ©t tá»«ng khung hÃ¬nh - Bá»™ ba camera 12MP, há»— trá»£ quay video 4K, chá»‘ng rung Ä‘iá»‡n tá»« EIS\r\nMÆ°á»£t mÃ  má»i tÃ¡c vá»¥ - Chip Exynos 2100 tiáº¿n trÃ¬nh 5nm máº¡nh máº½', 'Samsung S21 FE 8GB 128GB sá»Ÿ há»¯u chipset Exynos 2100 máº¡nh máº½ cÃ³ thá»ƒ chÆ¡i mÆ°á»£t mÃ , RAM 8GB vÃ  ROM 128GB cho kháº£ nÄƒng Ä‘a nhiá»‡m vÃ  lÆ°u trá»¯ á»•n Ä‘á»‹nh. ThÃªm vÃ o Ä‘Ã³ cá»¥m camera cháº¥t lÆ°á»£ng, cho hÃ¬nh áº£nh sáº¯c nÃ©t: 12MP+12MP+8MP vÃ  camera selfie 32MP. KhÃ´ng chá»‰ váº­y, cÃ¡c phiÃªn báº£n mÃ u sáº¯c thanh lá»‹ch, thá»i thÆ°á»£ng giÃºp sáº£n pháº©m ná»•i báº­t hÆ¡n giá»¯a hÃ ng loáº¡t cÃ¡c thÆ°Æ¡ng hiá»‡u khÃ¡c.', 1, 9),
(25, 'Apple Macbook Air M2', 'MacB/001', '26490000.00', 56, '1701187937_macbook_air_m22.webp', 'Macbook Air M2 2022 vá»›i thiáº¿t káº¿ sang trá»ng, váº» ngoÃ i siÃªu má»ng Ä‘áº§y lá»‹ch lÃ£m. Máº«u Macbook Air má»›i vá»›i nhá»¯ng nÃ¢ng cáº¥p vá» thiáº¿t káº¿ vÃ  cáº¥u hÃ¬nh cÃ¹ng giÃ¡ bÃ¡n pháº£i chÄƒng, Ä‘Ã¢y sáº½ lÃ  má»™t thiáº¿t bá»‹ lÃ½ tÆ°á»Ÿng cho cÃ´ng viá»‡c vÃ  giáº£i trÃ­.', 'Thiáº¿t káº¿ sang trá»ng, lá»‹ch lÃ£m - siÃªu má»ng 11.3mm, chá»‰ 1.24kg\r\nHiá»‡u nÄƒng hÃ ng Ä‘áº§u - Chip Apple M2, 8 nhÃ¢n GPU, há»— trá»£ tá»‘t cÃ¡c pháº§n má»m nhÆ° Word, Axel, Adoble Premier\r\nÄa nhiá»‡m mÆ°á»£t mÃ  - Ram 8GB, SSD 256GB cho phÃ©p vá»«a lÃ m viá»‡c, vá»«a nghe nháº¡c\r\nMÃ n hÃ¬nh sáº¯c nÃ©t - Äá»™ phÃ¢n giáº£i 2560 x 1664 cÃ¹ng Ä‘á»™ sÃ¡ng 500 nits\r\nÃ‚m thanh sá»‘ng Ä‘á»™ng - 4 loa tramg bá»‹ cÃ´ng nghá»‡ Dolby Atmos vÃ  Ã¢m thanh Ä‘a chiá»u', 1, 10),
(26, 'Apple MacBook Air M1', 'macB/002', '19490000.00', 6, '1701188067_air_m2.webp', 'Macbook Air M1 lÃ  dÃ²ng sáº£n pháº©m cÃ³ thiáº¿t káº¿ má»ng nháº¹, sang trá»ng vÃ  tinh táº¿ cÃ¹ng vá»›i Ä‘Ã³ lÃ  giÃ¡ thÃ nh pháº£i chÄƒng nÃªn MacBook Air Ä‘Ã£ thu hÃºt Ä‘Æ°á»£c Ä‘Ã´ng Ä‘áº£o ngÆ°á»i dÃ¹ng yÃªu thÃ­ch vÃ  lá»±a chá»n. ÄÃ¢y cÅ©ng lÃ  má»™t trong nhá»¯ng phiÃªn báº£n Macbook Air má»›i nháº¥t mÃ  khÃ¡ch hÃ ng khÃ´ng thá»ƒ bá» qua khi Ä‘áº¿n vá»›i CellphoneS. DÆ°á»›i Ä‘Ã¢y lÃ  chi tiáº¿t vá» thiáº¿t káº¿, cáº¥u hÃ¬nh cá»§a mÃ¡y.', 'PhÃ¹ há»£p cho láº­p trÃ¬nh viÃªn, thiáº¿t káº¿ Ä‘á»“ há»a 2D, dÃ¢n vÄƒn phÃ²ng\r\nHiá»‡u nÄƒng vÆ°á»£t trá»™i - CÃ¢n má»i tÃ¡c vá»¥ tá»« word, exel Ä‘áº¿n chá»‰nh sá»­a áº£nh trÃªn cÃ¡c pháº§n má»m nhÆ° AI, PTS\r\nÄa nhiá»‡m mÆ°á»£t mÃ  - Ram 8GB cho phÃ©p vá»«a má»Ÿ trÃ¬nh duyá»‡t Ä‘á»ƒ tra cá»©u thÃ´ng tin, vá»«a lÃ m viá»‡c trÃªn pháº§n má»m\r\nTrang bá»‹ SSD 256GB - Cho thá»i gian khá»Ÿi Ä‘á»™ng nhanh chÃ³ng, tá»‘i Æ°u hoÃ¡ thá»i gian load á»©ng dá»¥ng\r\nCháº¥t lÆ°á»£ng hÃ¬nh áº£nh sáº¯c nÃ©t - MÃ n hÃ¬nh Retina cao cáº¥p cÃ¹ng cÃ´ng nghá»‡ TrueTone cÃ¢n báº±ng mÃ u sáº¯c\r\nThiáº¿t káº¿ sang trá»ng - Náº·ng chá»‰ 1.29KG, Ä‘á»™ dÃ y 16.1mm. Tiá»‡n lá»£i mang theo má»i nÆ¡i', 1, 10),
(27, 'Macbook Air 15 inch M2', 'MacB/003', '30990000.00', 100, '1701188254_macbook_air_m2_8gb.webp', 'Macbook Air 15 M2 inch 2023 thá»ƒ hiá»‡n sá»± Ä‘á»™t phÃ¡ trÃªn thá»‹ trÆ°á»ng laptop khi sá»Ÿ há»¯u hiá»‡u nÄƒng vÆ°á»£t trá»™i tá»›i tá»« chipset Apple M2 cÃ¹ng mÃ n hÃ¬nh cá»¡ lá»›n 15 inch. MÃ¡y Ä‘Æ°á»£c tÃ­ch há»£p viÃªn pin Lithium-Polymer 66.5Wh káº¿t há»£p vá»›i cÃ´ng nghá»‡ sáº¡c cÃ´ng suáº¥t lÃªn tá»›i 70W, Ä‘em láº¡i thá»i lÆ°á»£ng sá»­ dá»¥ng suá»‘t ngÃ y dÃ i chá»‰ sau 1 láº§n sáº¡c. Vá»›i nhiá»u cáº£i tiáº¿n vÆ°á»£t trá»™i so vá»›i cÃ¡c tháº¿ há»‡ tiá»n nhiá»‡m, Ä‘Ã¢y sáº½ lÃ  sáº£n pháº©m Macbook Air hiá»‡n Ä‘áº¡i mÃ  báº¡n ráº¥t nÃªn tráº£i nghiá»‡m.', 'Hiá»‡u nÄƒng hÃ ng Ä‘áº§u vá»›i chip M2 - máº¡nh máº½ hÆ¡n 1.4 láº§n so vá»›i tháº¿ há»‡ trÆ°á»›c giÃºp nÃ¢ng cao hiá»‡u suáº¥t lÃ m viá»‡c\r\nMá»Ÿ ra khÃ´ng gian giáº£i trÃ­ chÃ¢n tháº­t vá»›i mÃ n hÃ¬nh Retina sáº¯c nÃ©t\r\nTráº£i nghiá»‡m gÃµ thoáº£i mÃ¡i vá»›i bÃ n phÃ­m Apple Magic, má»Ÿ khoÃ¡ 1 cháº¡m báº±ng Touch ID\r\nTrang bá»‹ cá»•ng thunderbolt tháº¿ há»‡ má»›i cho phÃ©p báº¡n truyá»n dá»¯ liá»‡u nhanh hÆ¡n bao giá» háº¿t', 1, 10),
(28, 'Loa Bluetooth JBL Charge 4', 'Loa/001', '2789000.00', 6, '1701188455_group_211_2_1.webp', 'Loa JBL Charge 4 â€“ Chá»‘ng nÆ°á»›c IPX7, Ã¢m thanh sá»‘ng Ä‘á»™ng\r\nLoa JBL Charge 4 lÃ  chiáº¿c loa bluetooth tháº¿ há»‡ thá»© tÆ° thuá»™c dÃ²ng JBL Charge. Báº¡n sáº½ cÃ³ má»™t bá»¯a tiá»‡c BBQ ngoÃ i trá»i, há»“ bÆ¡i hay bÃ£i biá»ƒn, ngáº­p trÃ n Ã¢m thanh sá»‘ng Ä‘á»™ng, thá»a sá»©c chÆ¡i Ä‘Ã¹a cÃ¹ng vá»›i báº¡n bÃ¨.', 'CÃ´ng suáº¥t loa Ä‘áº¿n 30 W cÃ¹ng hai bá»™ táº£n Ã¢m cho dáº£i Ã¢m tráº§m vÃ  bass máº¡nh máº½\r\nKhuyáº¿ch Ä‘áº¡i Ã¢m thanh vá»›i tÃ­nh nÄƒng JBL Connect+ káº¿t ná»‘i cÃ¹ng lÃºc hÆ¡n 100 loa\r\nChuáº©n chá»‘ng nÆ°á»›c IPX7 giÃºp tha há»“ sá»­ dá»¥ng ngoÃ i trá»i mÃ  khÃ´ng lo vÃ o nÆ°á»›c\r\nÄa dáº¡ng phÆ°Æ¡ng thá»©c káº¿t ná»‘i khi Ä‘Æ°á»£c há»— trá»£ cá»•ng cáº¯m 3.5mm vÃ  Bluetooth 4.2', 1, 11),
(29, 'Tai nghe Bluetooth Apple AirPods Pro 2022', 'taiPhone/001', '5450000.00', 5, '1701188556_group_111_5_.webp', 'Táº¡i sá»± kiá»‡n ra máº¯t iPhone 14 series, Apple Ä‘Ã£ giá»›i thiá»‡u nhiá»u sáº£n pháº©m trong Ä‘Ã³ cÃ³ tai nghe AirPods Pro tháº¿ há»‡ má»›i. Váº­y Apple AirPods Pro 2 cÃ³ gÃ¬ ná»•i báº­t vá» thiáº¿t káº¿, cháº¥t Ã¢m ra sao? CÃ³ nÃªn mua tai nghe AirPod Pro 2022 khÃ´ng?', 'TÃ­ch há»£p chip Apple H2 mang Ä‘áº¿n cháº¥t Ã¢m sá»‘ng Ä‘á»™ng cÃ¹ng kháº£ nÄƒng tÃ¡i táº¡o Ã¢m thanh 3 chiá»u vÆ°á»£t trá»™i\r\nCÃ´ng nghá»‡ Bluetooth 5.3 káº¿t ná»‘i á»•n Ä‘á»‹nh, mÆ°á»£t mÃ , tiÃªu thá»¥ nÄƒng lÆ°á»£ng tháº¥p, giÃºp tiáº¿t kiá»‡m pin Ä‘Ã¡ng ká»ƒ\r\nChá»‘ng á»“n chá»§ Ä‘á»™ng loáº¡i bá» tiáº¿ng á»“n hiá»‡u quáº£ gáº¥p Ä‘Ã´i tháº¿ há»‡ trÆ°á»›c, giÃºp nÃ¢ng cao tráº£i nghiá»‡m nghe nháº¡c\r\nChá»‘ng nÆ°á»›c chuáº©n IPX4 trÃªn tai nghe vÃ  há»™p sáº¡c, giÃºp báº¡n thá»a sá»©c táº­p luyá»‡n khÃ´ng cáº§n lo tháº¥m má»“ hÃ´i', 1, 11),
(30, 'Apple Watch SE 2 2023 40mm (GPS) viá»n nhÃ´m', 'apple/001', '5950000.00', 6, '1701188679_apple-watch-se-2023-40mm.webp', 'Apple Watch SE 2023 40mm (GPS) khÃ´ng chá»‰ lÃ  má»™t sáº£n pháº©m Ä‘á»“ng há»“ xem giá», nÃ³ cÃ²n tÃ­ch há»£p ráº¥t nhiá»u tÃ­nh nÄƒng theo dÃµi sá»©c khá»e, luyá»‡n táº­p thÃ´ng minh. Vá»›i thiáº¿t káº¿ vÃ´ cÃ¹ng sang trá»ng nhÆ° mÃ n hÃ¬nh Retina, khung viá»n nhÃ´m cÃ¹ng kÃ­nh cÆ°á»ng lá»±c cháº¯c cháº¯n.', 'Trang bá»‹ mÃ n hÃ¬nh Rentina, khung viá»n nhÃ´m cÃ¹ng kÃ­nh cÆ°á»ng lá»±c cháº¯c cháº¯n\r\nHÃµ trá»£ thao tÃ¡c mÆ°á»£t mÃ  vá»›i chip S8 SiP máº¡nh máº½\r\nDá»… dÃ ng theo dÃµi sá»©c khoáº» vá»›i cáº£m biáº¿n nhá»‹p tim, tÃ­nh nÄƒng theo dÃµi giáº¥c ngá»§, chu ká»³ kinh nguyá»‡t,...\r\nHá»— trá»£ nghe gá»i, nháº¯n tin ngay trÃªn cá»• tay mÃ  khÃ´ng cáº§n báº­t Ä‘iá»‡n thoáº¡i\r\nKÃ­ch thÆ°á»›c 40mm nhá» nháº¯n cÃ¹ng dÃ¢y Ä‘eo cao su Ãªm Ã¡i, Ã´m tay cho cáº£m giÃ¡c thoáº£i mÃ¡i', 1, 12),
(31, 'Google Tivi Xiaomi A 32 inch L32M8-P2SEA ', '345634', '24000000.00', 3, '1701244560_OIP.jpg', 'Google Tivi Xiaomi A 32 inch L32M8-P2SEA mang thiáº¿t káº¿ hiá»‡n Ä‘áº¡i, mÃ n hÃ¬nh HD kÃ­ch thÆ°á»›c 32 inch phÃ¹ há»£p Ä‘á»ƒ sá»­ dá»¥ng trong cÃ¡c cÄƒn phÃ²ng cÃ³ khÃ´ng gian nhá», tÃ­ch há»£p dáº£i mÃ u rá»™ng Wide Color Gamut cho mÃ u sáº¯c sá»‘ng Ä‘á»™ng, cÃ´ng nghá»‡ HDR10, HLG tÃ¡i táº¡o hÃ¬nh áº£nh rÃµ rÃ ng, cÃ´ng nghá»‡ Dolby Audio cho báº¡n Ä‘Æ°á»£c thÆ°á»Ÿng thá»©c Ã¢m thanh vÃ²m cuá»‘n hÃºt, tÃ¬m kiáº¿m giá»ng nÃ³i báº±ng tiáº¿ng Viá»‡t vá»›i Google Assistant.', '- Äá»™ phÃ¢n giáº£i HD vá»›i 1366 x 768 Ä‘iá»ƒm áº£nh tÃ¡i hiá»‡n hÃ¬nh áº£nh rÃµ rÃ ng, sinh Ä‘á»™ng. \r\n\r\n- Bá»™ xá»­ lÃ½ Mali-G31 MP2 hiá»‡u suáº¥t cao cho Google Tivi Xiaomi xá»­ lÃ½ mÆ°á»£t mÃ  cÃ¡c tÃ¡c vá»¥, giÃºp táº¡o nÃªn nhá»¯ng khung hÃ¬nh cháº¥t lÆ°á»£ng tá»‘t, mang Ä‘áº¿n tráº£i nghiá»‡m xem chÃ¢n thá»±c. \r\n\r\n- Dáº£i mÃ u rá»™ng Wide Color Gamut táº¡o nÃªn hÃ¬nh áº£nh vá»›i nhiá»u mÃ u sáº¯c hÆ¡n báº±ng cÃ¡ch bá»• sung mÃ u tráº¯ng vÃ o 3 mÃ u RGB gá»“m Ä‘á», xanh lÃ¡ vÃ  xanh dÆ°Æ¡ng cho báº¡n Ä‘Æ°á»£c chiÃªm ngÆ°á»¡ng cáº£nh quay vá»›i mÃ u sáº¯c sá»‘ng Ä‘á»™ng, tá»± nhiÃªn. \r\n\r\n- CÃ´ng nghá»‡ HDR10, HLG giÃºp nÃ¢ng cao Ä‘á»™ tÆ°Æ¡ng pháº£n Ä‘á»ƒ khung hÃ¬nh Ä‘Æ°á»£c tÃ¡i hiá»‡n rÃµ nÃ©t, chi tiáº¿t hÆ¡n. ', 1, 13),
(32, 'Pin sáº¡c dá»± phÃ²ng Polymer 10000mAh Type C 15W AVA+ DS2107', '235253', '1200000.00', 5, '1701244704_pin-polymer-10000mah-type-c-ava-ds2107-thumb-600x600.jpeg', 'Tá»‘i giáº£n vá» kÃ­ch cá»¡ mang Ä‘áº¿n cho báº¡n 1 thiáº¿t káº¿ sáº¡c dá»± phÃ²ng AVA+ cá»±c ká»³ nhá» gá»n, cÃ³ thá»ƒ cho vÃ o tÃºi quáº§n, tÃºi Ã¡o hoáº·c Ä‘áº·t trong tÃºi Ä‘á»“ thÆ°á»ng nháº­t vÃ  Ä‘em theo bÃªn mÃ¬nh thuáº­n tiá»‡n khi Ä‘i Ä‘áº¿n trÆ°á»ng, cÃ´ng ty, du lá»‹ch,... Thiáº¿t káº¿ 2 phiÃªn báº£n mÃ u Ä‘en sang trá»ng vÃ  mÃ u tráº¯ng thanh nhÃ£, há»£p sá»Ÿ thÃ­ch cá»§a cáº£ phÃ¡i máº¡nh vÃ  phÃ¡i Ä‘áº¹p.', 'Dung lÆ°á»£ng pin 10.000 mAh, hiá»‡u suáº¥t sáº¡c 64%.\r\nLÃµi pin Polymer Ä‘á»™ bá»n cao, cÃ³ Ä‘Ã¨n LED bÃ¡o hiá»‡u kiá»ƒm tra pin linh hoáº¡t. \r\nTÃ­ch há»£p 2 nguá»“n ra USB 5V - 2A, Type-C 5V - 3A.\r\nSáº¡c láº¡i dá»… dÃ ng vá»›i 2 nguá»“n vÃ o Micro USB 5V - 2A, Type-C 5V - 3A.\r\nThiáº¿t káº¿ Ä‘Æ¡n giáº£n, 2 mÃ u Ä‘en - tráº¯ng Ä‘áº¹p máº¯t, dá»… dÃ ng mang theo.', 1, 14);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham_gio`
--

CREATE TABLE `tbl_sanpham_gio` (
  `id_sanpham_gio` int(11) NOT NULL,
  `code_gio` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `soluong_sanpham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham_gio`
--

INSERT INTO `tbl_sanpham_gio` (`id_sanpham_gio`, `code_gio`, `id_sp`, `soluong_sanpham`) VALUES
(52, 4576, 15, 4),
(53, 7819, 26, 6),
(54, 2508, 29, 1),
(55, 9535, 29, 1),
(56, 9535, 32, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `password_user` varchar(100) NOT NULL,
  `phone_user` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `name_user`, `email`, `address`, `password_user`, `phone_user`) VALUES
(5, 'nam', 'namgoku235@gmail.com', NULL, '22c78aadb8d25a53ca407fae265a7154', NULL),
(6, 'y6y6', 'y6y', NULL, 'd5d1d81c3b13beeb889e5e4ca801ae2d', NULL),
(7, '66', '66', NULL, '3295c76acbf4caaed33c36b1b5fc2cb1', NULL),
(8, 'hanhcoder2003', 'hanhavicii@gmail.com', NULL, 'f1cd508f1316586b7a7e848b447ca030', NULL),
(9, 'hanhcr7', 'hanhcoder@gmail.com', NULL, '5cc600048e557f90c3318348154338e3', NULL),
(10, 'king1000', 'huydz119', NULL, '6b3d8b99502767b871973ac3d86550e9', NULL),
(11, 'user1', 'tien', NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL),
(12, 'Nguyá»…n Duy', 'duynam13572468@gmail.com', NULL, 'dd5818503fef1e6cd63d7b945dfa5b29', NULL);

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
  ADD PRIMARY KEY (`id_baiviet`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_danhmucbv`
--
ALTER TABLE `tbl_danhmucbv`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD PRIMARY KEY (`id_gio`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sp`);

--
-- Chỉ mục cho bảng `tbl_sanpham_gio`
--
ALTER TABLE `tbl_sanpham_gio`
  ADD PRIMARY KEY (`id_sanpham_gio`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `id_baiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmucbv`
--
ALTER TABLE `tbl_danhmucbv`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `id_gio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham_gio`
--
ALTER TABLE `tbl_sanpham_gio`
  MODIFY `id_sanpham_gio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD CONSTRAINT `tbl_baiviet_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `tbl_danhmucbv` (`id_danhmuc`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
