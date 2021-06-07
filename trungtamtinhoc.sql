-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 05, 2021 lúc 04:51 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `trungtamtinhoc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_20_074641_create_tbl_admin_table', 1),
(5, '2021_04_20_085816_create_tbl_thematic', 1),
(6, '2021_04_20_101335_create_tbl_programminglanguage_table', 1),
(7, '2021_04_21_045426_create_tbl_class_table', 1),
(8, '2021_04_22_081055_tbl_customer_table', 1),
(9, '2021_04_22_094422_create_tbl_student_table', 1),
(10, '2021_04_23_063205_create_tbl_payment_table', 1),
(11, '2021_04_23_063922_create_tbl_order_table', 1),
(12, '2021_04_23_064252_create_tbl_order_details', 1),
(13, '2021_04_23_073147_create_tbl_social_table', 1),
(14, '2021_04_24_020700_create_tbl_coupon_table', 1),
(15, '2021_04_25_060122_create_tbl_slider_table', 1),
(16, '2021_04_25_081629_create_tbl_students_table', 1),
(17, '2021_04_25_104535_create_tbl_position_table', 1),
(18, '2021_04_26_035355_create_tbl_employee', 1),
(19, '2021_04_27_162130_create_tbl_roles_table', 1),
(20, '2021_04_27_173139_create_tbl__admin_roles', 1),
(21, '2021_04_29_063138_create_tbl_', 2),
(22, '2021_04_29_063301_create_tbl_post_notification_table', 2),
(23, '2021_04_29_095247_create_tbl__post_table', 3),
(24, '2021_04_30_090744_create_tbl__notifi_cate_tbl', 4),
(25, '2021_05_01_022940_tbl__notification_post', 5),
(26, '2021_05_03_071648_create_tbl_comment_table', 6),
(27, '2021_05_04_094714_create_tbl_information_table', 7),
(28, '2021_05_05_071617_tbl_statistical_table', 8),
(29, '2021_05_05_101455_tbl_statistical_table', 9),
(30, '2021_05_06_060313_tbl_thuchi_table', 10),
(31, '2021_05_06_065908_tbl_quanlythuchi_table', 11),
(32, '2021_05_07_061345_tbl__lop_hoc_table', 12),
(33, '2021_05_11_085240_tbl__bang_luong_table', 13),
(34, '2021_05_12_072730_tbl_diem_table', 14),
(35, '2021_05_14_070648_tbl__ca_hoc_table', 15),
(36, '2021_05_14_080348_tbl_diemdanh_table', 16),
(37, '2021_05_17_082956_tbl_kehoach_table', 17),
(38, '2021_06_01_114606_tbl_daotao_table', 18),
(39, '2021_06_02_075835_tbl_lichthi_table', 19);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` int(11) NOT NULL,
  `MaNhanVien` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `MaNhanVien`, `created_at`, `updated_at`) VALUES
(1, 'nguyendinhhuu64@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Hoa Anh Tuc', 398202124, 'ADMIN', '2021-05-04 23:07:19', '2021-05-04 23:07:19'),
(2, 'DoQuyetKieuQuang@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Do Quyet Kieu Quang', 398202124, 'GĐ01', '2021-05-04 23:07:19', '2021-05-04 23:07:19'),
(3, 'HoangTrongLong@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Hoang Trong Long', 398202124, 'GV01', '2021-05-04 23:07:19', '2021-05-04 23:07:19'),
(4, 'LeXuanHong@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Le Xuan Hong', 398202124, 'NV02', '2021-05-04 23:07:19', '2021-05-04 23:07:19'),
(5, 'DangThiMinhThu@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Dang Thi Minh Thu', 398202124, 'KT01', '2021-05-04 23:07:19', '2021-05-04 23:07:19'),
(6, 'nguyenminhhuy@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyen Minh Huy', 39821234, 'NV01', '2021-05-06 22:51:38', '2021-05-06 22:51:38'),
(7, 'HoangTrongA@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Hoàng Trọng A', 398202342, 'GV05', '2021-05-11 23:17:41', '2021-05-11 23:17:41'),
(8, 'nguyenthibichthiem@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Thị Bích Thiềm', 398202121, 'GV04', '2021-05-11 23:46:45', '2021-05-11 23:46:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin_role`
--

CREATE TABLE `tbl_admin_role` (
  `id_admin_roles` int(10) UNSIGNED NOT NULL,
  `admin_admin_id` int(11) NOT NULL,
  `roles_id_roles` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin_role`
--

INSERT INTO `tbl_admin_role` (`id_admin_roles`, `admin_admin_id`, `roles_id_roles`, `created_at`, `updated_at`) VALUES
(11, 1, 1, NULL, NULL),
(12, 2, 2, NULL, NULL),
(13, 4, 4, NULL, NULL),
(14, 3, 3, NULL, NULL),
(15, 5, 5, NULL, NULL),
(21, 6, 3, NULL, NULL),
(22, 7, 3, NULL, NULL),
(23, 8, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_bangluong`
--

CREATE TABLE `tbl_bangluong` (
  `id` int(10) UNSIGNED NOT NULL,
  `MaNhanVien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenNhanVien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ChucVu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `LuongCung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Cong` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GhiChu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TongTien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_bangluong`
--

INSERT INTO `tbl_bangluong` (`id`, `MaNhanVien`, `TenNhanVien`, `ChucVu`, `LuongCung`, `Tru`, `Cong`, `GhiChu`, `Email`, `TongTien`, `created_at`, `updated_at`) VALUES
(3, 'ADMIN', 'Nguyễn Đình Hữu', 'Nhân viên', '12000000', '10000', NULL, 'trừ đi làm trễ. lương tháng 5', 'nguyendinhhuu64@gmail.com', '11990000', NULL, NULL),
(4, 'KT01', 'Đặng Thị Minh Thư', 'Kế toán', '7000000', NULL, NULL, 'lương tháng 5', 'DangThiMinhThu@gmail.com', '7000000', NULL, NULL),
(5, 'GV05', 'Hoàng Trọng A', 'Giáo viên', '9000000', '20000', NULL, 'đi trể.lương thnags 5', 'HoangTrongA@gmail.com', '8980000', NULL, NULL),
(6, 'GV01', 'Hoàng Trọng Long', 'Giáo viên', '8500000', NULL, '200000', 'Cộng thêm 1 tiết', 'HoangTrongLong@gmail.com', '8700000', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cahoc`
--

CREATE TABLE `tbl_cahoc` (
  `id` int(10) UNSIGNED NOT NULL,
  `MaCaHoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaLop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaGV` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ngay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PhongHoc` varchar(233) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cahoc`
--

INSERT INTO `tbl_cahoc` (`id`, `MaCaHoc`, `MaLop`, `MaGV`, `Ngay`, `Gio`, `PhongHoc`, `created_at`, `updated_at`) VALUES
(1, 'LTGAME01_GV04_1', 'LTGAME01', 'GV04', '2021-05-11', '20:00', 'H3.01', '2021-05-14 00:41:09', '2021-05-14 00:41:09'),
(2, 'LTGAME01_GV04_2', 'LTGAME01', 'GV04', '2021-05-13', '20:00', 'A2.01', '2021-05-14 00:46:40', '2021-05-14 00:46:40'),
(3, 'FOREXNC01', 'FOREXNC02', 'GV01', '2021-05-11', '15:30', 'D12.05', '2021-05-15 02:40:24', '2021-05-15 02:40:24'),
(4, 'LTGAME02_GV05_1', 'LTGAME02', 'GV05', '2021-05-19', '11:30', 'H7.05', '2021-05-29 07:03:27', '2021-05-29 07:03:27'),
(5, 'THVP-01-GV05', 'THVP-01', 'GV05', '2022-10-12', '15:00', 'A3.03', '2021-06-01 22:54:22', '2021-06-01 22:54:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_class`
--

CREATE TABLE `tbl_class` (
  `class_id` int(10) UNSIGNED NOT NULL,
  `class_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thematic_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `opending_day` date NOT NULL,
  `schedule_day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `study_time` int(11) NOT NULL,
  `tuition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_number` int(11) NOT NULL,
  `student_sold` int(11) NOT NULL,
  `class_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TinhTrang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_class`
--

INSERT INTO `tbl_class` (`class_id`, `class_name`, `class_code`, `class_image`, `thematic_id`, `language_id`, `opending_day`, `schedule_day`, `study_time`, `tuition`, `address_class`, `class_desc`, `student_number`, `student_sold`, `class_status`, `TinhTrang`, `created_at`, `updated_at`) VALUES
(10, 'Lập trình game 2D & 3D UNITY', 'LTGAME01', 'unity86.jpg', 2, 3, '2021-05-11', 'Thứ ba, thứ năm; buổi tối 20:00', 4, '8000000', 'IUH', '<h2>GIỚI THIỆU</h2>\r\n\r\n<p>Unity hiện đang l&agrave; framework được nhiều Game Studio tr&ecirc;n to&agrave;n thế giới sử dụng. được x&acirc;y dựng bởi đội ngũ Unity Technologies. Một trong những đặc điểm l&agrave;m cho Unity được b&igrave;nh chọn l&agrave; nền tảng Game Engine tốt nhất hiện nay l&agrave;:</p>\r\n\r\n<p>- Lập tr&igrave;nh bằng C#, l&agrave; ng&ocirc;n ngữ rất th&acirc;n thuộc với lập tr&igrave;nh vi&ecirc;n.</p>\r\n\r\n<p>- Hỗ trợ đang nền tảng: Chỉ cần viết code 1 lần, v&agrave; game của ch&uacute;ng ta sẽ chạy được tr&ecirc;n cả iOS, Android, WindowsPhone... v&agrave; thậm ch&iacute; l&agrave; cả tr&ecirc;n Web Browser</p>\r\n\r\n<p>- Unity c&oacute; bộ c&ocirc;ng cụ hỗ trợ trong Engine Game cực mạnh như Graphic Rendering(DirectX, OpenGL), physic (NVIDIA PhysX), audio (OpenAL) gi&uacute;p qu&aacute; tr&igrave;nh ph&aacute;t triển game trở n&ecirc;n nhanh v&agrave; đơn giản hơn.</p>\r\n\r\n<p>- Kho thư viện Asset Store khổng lồ miễn ph&iacute; lẫn co ph&iacute; do cộng đồng cả thế giới cung cấp, bạn sẽ c&oacute; nhiều lựa chọn hơn để tạo ra những game cực chất</p>\r\n\r\n<h2>ĐIỀU KIỆN THEO HỌC</h2>\r\n\r\n<p>- Y&ecirc;u th&iacute;ch game tr&ecirc;n Mobile.</p>\r\n\r\n<p>- Phải c&oacute; laptop cấu h&igrave;nh tối thiểu Core i3, Ram 4G (Windows hoặc MAC)</p>\r\n\r\n<p>- Đ&atilde; biết lập tr&igrave;nh một ng&ocirc;n ngữ bất k&igrave;.</p>\r\n\r\n<h2>MỤC TI&Ecirc;U KH&Oacute;A HỌC</h2>\r\n\r\n<p>Ho&agrave;n tất kh&oacute;a học, học vi&ecirc;n sẽ:</p>\r\n\r\n<p>- Tự lập tr&igrave;nh được game 2D &amp; 3D chạy tr&ecirc;n tất cả c&aacute;c d&ograve;ng m&aacute;y iOS, Android, Windows Phone &amp; Tr&igrave;nh duyệt web</p>\r\n\r\n<p>- Tự x&acirc;y dựng hệ thống game 2D để kiếm tiền với quảng c&aacute;o AdMob</p>\r\n\r\n<p>- Nếu chăm chỉ luyện tập, c&oacute; thể lập nh&oacute;m/team &amp; Studio l&agrave;m Game.</p>\r\n\r\n<p>- Đặc biệt, học vi&ecirc;n sẽ nắm được kỹ thuật tự x&acirc;y dựng c&aacute;c nh&acirc;n vật, kỹ thuật tạo chuyển động 3D theo như &yacute; của m&igrave;nh m&agrave; kh&ocirc;ng cần bất k&igrave; một thư viện hỗ trợ n&agrave;o.</p>\r\n\r\n<p>- Tự m&igrave;nh x&acirc;y dựng được thể loại game 3D Online thời gian thực nhiều người chơi.</p>\r\n\r\n<p><iframe frameborder=\"0\" height=\"315\" src=\"https://www.youtube.com/embed/75G39YG1Ahc\" width=\"560\"></iframe></p>\r\n\r\n<h2>BẰNG CẤP - CHỨNG NHẬN</h2>\r\n\r\n<p>Tham dự tr&ecirc;n 80% số buổi học, v&agrave; ho&agrave;n tất đồ &aacute;n cuối kh&oacute;a, học vi&ecirc;n sẽ được cấp Chứng nhận ho&agrave;n tất kh&oacute;a học của&nbsp;<strong>Trung T&acirc;m Đ&agrave;o Tạo Tin Học Khoa Phạm</strong>, c&oacute; gi&aacute; trị to&agrave;n quốc</p>', 11, 8, '1', 0, NULL, NULL),
(12, 'Lập trình PYTHON', 'LTPYTHON01', 'py87.jpg', 4, 7, '2021-10-12', 'Thứ ba, thứ năm; 19:00', 4, '4850000', 'IUH', '<h2>GIỚI THIỆU</h2>\r\n\r\n<p>Python l&agrave; một ng&ocirc;n ngữ lập tr&igrave;nh th&ocirc;ng dịch bậc cao, được tạo bởi gi&aacute;o sư Guido Van Rossum người H&agrave; Lan năm 1991. Ban đầu, Python được sinh ra với ti&ecirc;u ch&iacute; &quot;Đơn giản - Dễ hiểu&quot; d&agrave;nh cho lập tr&igrave;nh vi&ecirc;n. Cũng ch&iacute;nh v&igrave; sự th&acirc;n thiện của Python, dần dần cộng đồng ng&agrave;y c&agrave;ng ph&aacute;t triển, c&aacute;c ứng dụng Python c&oacute; quy m&ocirc; ng&agrave;y c&agrave;ng lớn. V&agrave; đến ng&agrave;y h&ocirc;m nay, Python đ&atilde; thật sự chứng tỏ sức mạnh của m&igrave;nh.</p>\r\n\r\n<p>Bạn c&oacute; thể sử dụng Python để viết c&aacute;c ứng dụng Web Application, Destop Application, Networking App, Data Analyse, Machine Learing v&agrave; h&agrave;ng loạt c&aacute;c ứng kh&aacute;c phục vụ cho người d&ugrave;ng. Đặc biệt với sự ph&aacute;t triển c&ocirc;ng nghệ hiện nay, ứng dụng Tr&iacute; Tuệ Nh&acirc;n Tạo, ph&acirc;n t&iacute;ch data lu&ocirc;n được c&aacute;c nh&agrave; tuyển dụng săn đ&oacute;n h&agrave;ng đầu.</p>\r\n\r\n<p>Nhằm đ&aacute;p ứng nhu cầu của c&aacute;c nh&agrave; tuyển dụng, cũng như những developer muốn tự m&igrave;nh hiện tự &yacute; tưởng độc đ&aacute;o của ri&ecirc;ng m&igrave;nh. Trung T&acirc;m Đ&agrave;o Tạo C&ocirc;ng Nghệ Khoa Phạm ra mắt &quot;KH&Oacute;A HỌC LẬP TR&Igrave;NH PYTHON TỪ CƠ BẢN ĐẾN N&Acirc;NG CAO&quot;.</p>\r\n\r\n<h2>MỤC TI&Ecirc;U KH&Oacute;A HỌC</h2>\r\n\r\n<p>Kh&oacute;a học cung cấp cho học vi&ecirc;n đủ khả kiến thức để tuyển nghề Lập tr&igrave;nh Python, với đầy đủ c&aacute;c kĩ năng sau:</p>\r\n\r\n<p>- Nền tảng lập tr&igrave;nh tr&ecirc;n ng&ocirc;n ngữ Python vững chắc.</p>\r\n\r\n<p>- Nắm vững lập tr&igrave;nh Hướng đối tượng trong OOP</p>\r\n\r\n<p>- Tự x&acirc;y dựng ứng dụng web bất k&igrave; theo m&ocirc; h&igrave;nh MVC với Django</p>\r\n\r\n<p>- Tự x&acirc;y dựng Web Service, Restful API kết nối database bất k&igrave;, phục vụ cho Mobile App/Angular &amp; iOT</p>\r\n\r\n<p>- Data Science cơ bản: Kĩ năng thu thập data tr&ecirc;n Internet &amp; ph&acirc;n t&iacute;ch dữ liệu theo y&ecirc;u cầu kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<p>- Machine Learning cơ bản: Nắm vững kỹ thuật nhận dạng &acirc;m thanh, nhận dạng giọng n&oacute;i phục vụ cho c&aacute;c ứng dụng th&ocirc;ng minh.</p>\r\n\r\n<h2>ĐIỀU KIỆN THEO HỌC</h2>\r\n\r\n<p>- Đ&atilde; biết lập tr&igrave;nh cơ bản một ng&ocirc;n ngữ bất k&igrave;.</p>\r\n\r\n<h2>BẰNG CẤP - CHỨNG NHẬN</h2>\r\n\r\n<p>Tham dự tr&ecirc;n 80% số buổi học, v&agrave; ho&agrave;n tất đồ &aacute;n cuối kh&oacute;a, học vi&ecirc;n sẽ được cấp Chứng nhận ho&agrave;n tất kh&oacute;a học của&nbsp;<strong>Trung T&acirc;m Đ&agrave;o Tạo Tin Học Khoa Phạm</strong>, c&oacute; gi&aacute; trị to&agrave;n quốc</p>', 15, 1, '1', 0, NULL, NULL),
(14, 'Lập trình fontend cơ bản', 'LTFONTEND-CB', 'front-end69.jpg', 1, 8, '2022-04-12', 'Thứ ba, thứ năm; 17:30', 4, '3000000', 'IUH', '<h2>Giới Thiệu</h2>\r\n\r\n<p>Thiết kế web lu&ocirc;n l&agrave; một nghề hấp dẫn bất k&igrave; thời điểm n&agrave;o, bạn thử Google từ kho&aacute; &quot;Tuyển dụng Lập tr&igrave;nh Front End&quot; sẽ thấy ngay c&aacute;c nh&agrave; tuyển dụng đang săn đ&oacute;n với mức lương cực hấp dẫn.</p>\r\n\r\n<p>Nếu bạn đam m&ecirc; thiết kế web, bạn c&oacute; những &yacute; tưởng giao diện b&aacute; đạo, việc c&ograve;n lại l&agrave; kỹ năng lập tr&igrave;nh Front-End h&atilde;y để kho&aacute; học n&agrave;y dẫn đường bạn nh&eacute;.</p>\r\n\r\n<h2>Mục Ti&ecirc;u Kho&aacute; Học:</h2>\r\n\r\n<p>- Đủ khả năng tự thiết kế giao diện trang web ho&agrave;n chỉnh.</p>\r\n\r\n<p>- Sử dụng th&agrave;nh thạo c&aacute;c c&ocirc;ng nghệ thiết kế giao diện web: HTML 5, CSS3, c&aacute;c CSS Framework &amp; c&aacute;c thư viện JavaScript mới nhất hiện nay.</p>\r\n\r\n<p>- Tự cắt ho&agrave;n chỉnh giao diện web từ file PSD sang HTML + đầy đủ hiệu ứng phức tạp</p>\r\n\r\n<p>- Đủ khả năng ứng tuyển nghề: Lập tr&igrave;nh Front-End tại c&aacute;c c&ocirc;ng ty.</p>\r\n\r\n<p>- Tự nhận c&aacute;c dự &aacute;n freelancer ri&ecirc;ng m&igrave;nh.</p>\r\n\r\n<p>- Đủ khả năng x&acirc;y dựng c&aacute;c sản phẩm để b&aacute;n tr&ecirc;n c&aacute;c k&ecirc;nh như ThemeForest.</p>\r\n\r\n<p>- Điểm cộng cực lớn cho c&aacute;c bạn khi xin việc l&agrave;m lập tr&igrave;nh web bất k&igrave; ng&ocirc;n ngữ n&agrave;o (PHP, .NET, Java, Nodejs)</p>\r\n\r\n<h2>Đối Tượng Học:</h2>\r\n\r\n<p>Tất cả mọi người y&ecirc;u th&iacute;ch thiết kế web</p>\r\n\r\n<h2>Điều Kiện Học</h2>\r\n\r\n<p>C&oacute; laptop ri&ecirc;ng (Cấu h&igrave;nh tối thiểu Core i3, Ram 4G)</p>', 15, 0, '1', 0, NULL, NULL),
(15, 'Lập trình fontend nâng cao', 'LTFONTEND01', 'fe64.jpg', 1, 8, '2022-05-10', 'Thứ bảy, thứ tư; 09:00', 4, '4300000', 'IUH', '<h2>Giới Thiệu</h2>\r\n\r\n<p>Thiết kế web lu&ocirc;n l&agrave; một nghề hấp dẫn bất k&igrave; thời điểm n&agrave;o, bạn thử Google từ kho&aacute; &quot;Tuyển dụng Lập tr&igrave;nh Front End&quot; sẽ thấy ngay c&aacute;c nh&agrave; tuyển dụng đang săn đ&oacute;n với mức lương cực hấp dẫn.</p>\r\n\r\n<p>Nếu bạn đam m&ecirc; thiết kế web, bạn c&oacute; những &yacute; tưởng giao diện b&aacute; đạo, việc c&ograve;n lại l&agrave; kỹ năng lập tr&igrave;nh Front-End h&atilde;y để kho&aacute; học n&agrave;y dẫn đường bạn nh&eacute;.</p>\r\n\r\n<h2>Mục Ti&ecirc;u Kho&aacute; Học:</h2>\r\n\r\n<p>- Đủ khả năng tự thiết kế giao diện trang web ho&agrave;n chỉnh.</p>\r\n\r\n<p>- Sử dụng th&agrave;nh thạo c&aacute;c c&ocirc;ng nghệ thiết kế giao diện web: HTML 5, CSS3, c&aacute;c CSS Framework &amp; c&aacute;c thư viện JavaScript mới nhất hiện nay.</p>\r\n\r\n<p>- Tự cắt ho&agrave;n chỉnh giao diện web từ file PSD sang HTML + đầy đủ hiệu ứng phức tạp</p>\r\n\r\n<p>- Đủ khả năng ứng tuyển nghề: Lập tr&igrave;nh Front-End tại c&aacute;c c&ocirc;ng ty.</p>\r\n\r\n<p>- Tự nhận c&aacute;c dự &aacute;n freelancer ri&ecirc;ng m&igrave;nh.</p>\r\n\r\n<p>- Đủ khả năng x&acirc;y dựng c&aacute;c sản phẩm để b&aacute;n tr&ecirc;n c&aacute;c k&ecirc;nh như ThemeForest.</p>\r\n\r\n<p>- Điểm cộng cực lớn cho c&aacute;c bạn khi xin việc l&agrave;m lập tr&igrave;nh web bất k&igrave; ng&ocirc;n ngữ n&agrave;o (PHP, .NET, Java, Nodejs)</p>\r\n\r\n<h2>Đối Tượng Học:</h2>\r\n\r\n<p>Tất cả mọi người y&ecirc;u th&iacute;ch thiết kế web</p>\r\n\r\n<h2>Điều Kiện Học</h2>\r\n\r\n<p>C&oacute; laptop ri&ecirc;ng (Cấu h&igrave;nh tối thiểu Core i3, Ram 4G)</p>', 12, 10, '1', 1, NULL, NULL),
(16, 'Tin học văn phòng', 'THVP-01', '180.png', 5, 6, '2022-06-22', 'Thứ ba, thứ năm; 15:30', 4, '3500000', 'IUH', '<p>sdfdsfsdf</p>\r\n\r\n<p>sdfsdf</p>\r\n\r\n<p>sdf</p>\r\n\r\n<p>sdfdsf</p>', 12, 0, '1', 0, NULL, NULL),
(17, 'Khóa học Forex cơ bản', 'FOREX01', 'forex-nangcao23.jpg', 6, 6, '2022-01-12', 'Thứ ba, thứ năm; 17:30', 2, '3500000', 'IUH', '<p>&lt;h2&gt;Giới Thiệu&lt;/h2&gt;</p>\r\n\r\n<p>&lt;p&gt;Thiết kế web lu&amp;ocirc;n l&amp;agrave; một nghề hấp dẫn bất k&amp;igrave; thời điểm n&amp;agrave;o, bạn thử Google từ kho&amp;aacute; &amp;quot;Tuyển dụng Lập tr&amp;igrave;nh Front End&amp;quot; sẽ thấy ngay c&amp;aacute;c nh&amp;agrave; tuyển dụng đang săn đ&amp;oacute;n với mức lương cực hấp dẫn.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;Nếu bạn đam m&amp;ecirc; thiết kế web, bạn c&amp;oacute; những &amp;yacute; tưởng giao diện b&amp;aacute; đạo, việc c&amp;ograve;n lại l&amp;agrave; kỹ năng lập tr&amp;igrave;nh Front-End h&amp;atilde;y để kho&amp;aacute; học n&amp;agrave;y dẫn đường bạn nh&amp;eacute;.&lt;/p&gt;</p>\r\n\r\n<p>&lt;h2&gt;Mục Ti&amp;ecirc;u Kho&amp;aacute; Học:&lt;/h2&gt;</p>\r\n\r\n<p>&lt;p&gt;- Đủ khả năng tự thiết kế giao diện trang web ho&amp;agrave;n chỉnh.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;- Sử dụng th&amp;agrave;nh thạo c&amp;aacute;c c&amp;ocirc;ng nghệ thiết kế giao diện web: HTML 5, CSS3, c&amp;aacute;c CSS Framework &amp;amp; c&amp;aacute;c thư viện JavaScript mới nhất hiện nay.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;- Tự cắt ho&amp;agrave;n chỉnh giao diện web từ file PSD sang HTML + đầy đủ hiệu ứng phức tạp&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;- Đủ khả năng ứng tuyển nghề: Lập tr&amp;igrave;nh Front-End tại c&amp;aacute;c c&amp;ocirc;ng ty.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;- Tự nhận c&amp;aacute;c dự &amp;aacute;n freelancer ri&amp;ecirc;ng m&amp;igrave;nh.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;- Đủ khả năng x&amp;acirc;y dựng c&amp;aacute;c sản phẩm để b&amp;aacute;n tr&amp;ecirc;n c&amp;aacute;c k&amp;ecirc;nh như ThemeForest.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;- Điểm cộng cực lớn cho c&amp;aacute;c bạn khi xin việc l&amp;agrave;m lập tr&amp;igrave;nh web bất k&amp;igrave; ng&amp;ocirc;n ngữ n&amp;agrave;o (PHP, .NET, Java, Nodejs)&lt;/p&gt;</p>\r\n\r\n<p>&lt;h2&gt;Đối Tượng Học:&lt;/h2&gt;</p>\r\n\r\n<p>&lt;p&gt;Tất cả mọi người y&amp;ecirc;u th&amp;iacute;ch thiết kế web&lt;/p&gt;</p>\r\n\r\n<p>&lt;h2&gt;Điều Kiện Học&lt;/h2&gt;</p>\r\n\r\n<p>&lt;p&gt;C&amp;oacute; laptop ri&amp;ecirc;ng (Cấu h&amp;igrave;nh tối thiểu Core i3, Ram 4G)&lt;/p&gt;</p>', 10, 0, '1', 0, NULL, NULL),
(19, 'Lập trình game Unity', 'LTGAME01', 'BC37.png', 2, 3, '2022-06-12', 'Thứ ba, thứ năm: 20:00', 4, '8000000', 'IUH', '<p>&lt;h2&gt;GIỚI THIỆU&lt;/h2&gt;</p>\r\n\r\n<p>&lt;p&gt;Python l&amp;agrave; một ng&amp;ocirc;n ngữ lập tr&amp;igrave;nh th&amp;ocirc;ng dịch bậc cao, được tạo bởi gi&amp;aacute;o sư Guido Van Rossum người H&amp;agrave; Lan năm 1991. Ban đầu, Python được sinh ra với ti&amp;ecirc;u ch&amp;iacute; &amp;quot;Đơn giản - Dễ hiểu&amp;quot; d&amp;agrave;nh cho lập tr&amp;igrave;nh vi&amp;ecirc;n. Cũng ch&amp;iacute;nh v&amp;igrave; sự th&amp;acirc;n thiện của Python, dần dần cộng đồng ng&amp;agrave;y c&amp;agrave;ng ph&amp;aacute;t triển, c&amp;aacute;c ứng dụng Python c&amp;oacute; quy m&amp;ocirc; ng&amp;agrave;y c&amp;agrave;ng lớn. V&amp;agrave; đến ng&amp;agrave;y h&amp;ocirc;m nay, Python đ&amp;atilde; thật sự chứng tỏ sức mạnh của m&amp;igrave;nh.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;Bạn c&amp;oacute; thể sử dụng Python để viết c&amp;aacute;c ứng dụng Web Application, Destop Application, Networking App, Data Analyse, Machine Learing v&amp;agrave; h&amp;agrave;ng loạt c&amp;aacute;c ứng kh&amp;aacute;c phục vụ cho người d&amp;ugrave;ng. Đặc biệt với sự ph&amp;aacute;t triển c&amp;ocirc;ng nghệ hiện nay, ứng dụng Tr&amp;iacute; Tuệ Nh&amp;acirc;n Tạo, ph&amp;acirc;n t&amp;iacute;ch data lu&amp;ocirc;n được c&amp;aacute;c nh&amp;agrave; tuyển dụng săn đ&amp;oacute;n h&amp;agrave;ng đầu.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;Nhằm đ&amp;aacute;p ứng nhu cầu của c&amp;aacute;c nh&amp;agrave; tuyển dụng, cũng như những developer muốn tự m&amp;igrave;nh hiện tự &amp;yacute; tưởng độc đ&amp;aacute;o của ri&amp;ecirc;ng m&amp;igrave;nh. Trung T&amp;acirc;m Đ&amp;agrave;o Tạo C&amp;ocirc;ng Nghệ Khoa Phạm ra mắt &amp;quot;KH&amp;Oacute;A HỌC LẬP TR&amp;Igrave;NH PYTHON TỪ CƠ BẢN ĐẾN N&amp;Acirc;NG CAO&amp;quot;.&lt;/p&gt;</p>\r\n\r\n<p>&lt;h2&gt;MỤC TI&amp;Ecirc;U KH&amp;Oacute;A HỌC&lt;/h2&gt;</p>\r\n\r\n<p>&lt;p&gt;Kh&amp;oacute;a học cung cấp cho học vi&amp;ecirc;n đủ khả kiến thức để tuyển nghề Lập tr&amp;igrave;nh Python, với đầy đủ c&amp;aacute;c kĩ năng sau:&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;- Nền tảng lập tr&amp;igrave;nh tr&amp;ecirc;n ng&amp;ocirc;n ngữ Python vững chắc.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;- Nắm vững lập tr&amp;igrave;nh Hướng đối tượng trong OOP&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;- Tự x&amp;acirc;y dựng ứng dụng web bất k&amp;igrave; theo m&amp;ocirc; h&amp;igrave;nh MVC với Django&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;- Tự x&amp;acirc;y dựng Web Service, Restful API kết nối database bất k&amp;igrave;, phục vụ cho Mobile App/Angular &amp;amp; iOT&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;- Data Science cơ bản: Kĩ năng thu thập data tr&amp;ecirc;n Internet &amp;amp; ph&amp;acirc;n t&amp;iacute;ch dữ liệu theo y&amp;ecirc;u cầu kh&amp;aacute;ch h&amp;agrave;ng.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;- Machine Learning cơ bản: Nắm vững kỹ thuật nhận dạng &amp;acirc;m thanh, nhận dạng giọng n&amp;oacute;i phục vụ cho c&amp;aacute;c ứng dụng th&amp;ocirc;ng minh.&lt;/p&gt;</p>\r\n\r\n<p>&lt;h2&gt;ĐIỀU KIỆN THEO HỌC&lt;/h2&gt;</p>\r\n\r\n<p>&lt;p&gt;- Đ&amp;atilde; biết lập tr&amp;igrave;nh cơ bản một ng&amp;ocirc;n ngữ bất k&amp;igrave;.&lt;/p&gt;</p>\r\n\r\n<p>&lt;h2&gt;BẰNG CẤP - CHỨNG NHẬN&lt;/h2&gt;</p>\r\n\r\n<p>&lt;p&gt;Tham dự tr&amp;ecirc;n 80% số buổi học, v&amp;agrave; ho&amp;agrave;n tất đồ &amp;aacute;n cuối kh&amp;oacute;a, học vi&amp;ecirc;n sẽ được cấp Chứng nhận ho&amp;agrave;n tất kh&amp;oacute;a học của&amp;nbsp;&lt;strong&gt;Trung T&amp;acirc;m Đ&amp;agrave;o Tạo Tin Học Khoa Phạm&lt;/strong&gt;, c&amp;oacute; gi&amp;aacute; trị to&amp;agrave;n quốc&lt;/p&gt;</p>', 10, 0, '1', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(10) UNSIGNED NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `comment_class_id` int(11) NOT NULL,
  `comment_status` int(11) NOT NULL,
  `comment_parent_comment` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `comment`, `comment_name`, `comment_date`, `comment_class_id`, `comment_status`, `comment_parent_comment`, `created_at`, `updated_at`) VALUES
(26, 'hay quá admin ơi.', 'quang', '2021-05-14 06:50:13', 10, 0, 0, '2021-05-13 23:49:52', '2021-05-13 23:50:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_coupon`
--

CREATE TABLE `tbl_coupon` (
  `coupon_id` int(10) UNSIGNED NOT NULL,
  `coupon_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_time` int(11) NOT NULL,
  `coupon_condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_number` int(11) NOT NULL,
  `coupon_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_coupon`
--

INSERT INTO `tbl_coupon` (`coupon_id`, `coupon_name`, `coupon_time`, `coupon_condition`, `coupon_number`, `coupon_code`, `created_at`, `updated_at`) VALUES
(1, 'Cuối kì điểm A', 100, '1', 10, 'A90', '2021-04-28 07:39:10', '2021-04-28 07:39:10'),
(2, 'Covid 19', 100, '1', 20, 'COVID19', '2021-05-04 22:24:58', '2021-05-04 22:24:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_phone`, `customer_address`, `created_at`, `updated_at`) VALUES
(3, 'nguyendinhhuu123', 'nguyendinhhuu98@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '+84398202124', 'Hà Tĩnh', NULL, NULL),
(4, 'quang', 'nguyendinhhuu1998@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0398202124', 'Ho Chi Minh', NULL, NULL),
(5, 'hoang trong long', 'hoangtronglong@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0398202124', 'Hà Tĩnh', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_daotao`
--

CREATE TABLE `tbl_daotao` (
  `id` int(10) UNSIGNED NOT NULL,
  `TieuDe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ChiTiet` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhmuc_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HienThi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_daotao`
--

INSERT INTO `tbl_daotao` (`id`, `TieuDe`, `Slug`, `ChiTiet`, `danhmuc_id`, `HienThi`, `created_at`, `updated_at`) VALUES
(1, 'KHÓA HỌC THỰC CHIẾN TỔNG HỢP LẬP TRÌNH WEB/MOBILE/BACK-END TỪ A-Z', 'khoa-hoc-thuc-chien-tong-hop-lap-trinh-webmobileback-end-tu-a-z', '<h2>Giới Thiệu</h2>\r\n\r\n<p>Giữa học l&yacute; thuyết v&agrave; thực chiến l&agrave; một khoảng c&aacute;ch rất xa, trong khi ai cũng biết nếu kh&ocirc;ng c&oacute; sản phẩm thực tế th&igrave; đừng nghĩ đến việc c&oacute; được việc l&agrave;m tốt. Ch&iacute;nh v&igrave; thế, Trung T&acirc;m Đ&agrave;o Tạo Tin Học Khoa Phạm ra mắt &quot;KH&Oacute;A HỌC THỰC CHIẾN TỔNG HỢP LẬP TR&Igrave;NH WEB/MOBILE/BACK-END TỪ A-Z&quot; d&agrave;nh cho c&aacute;c bạn lập tr&igrave;nh vi&ecirc;n Web/Mobile/Backend.</p>\r\n\r\n<p>Đặc biệt, kh&oacute;a học n&agrave;y c&ograve;n hướng dẫn c&aacute;ch &aacute;p dụng kĩ năng lập tr&igrave;nh v&agrave;o thực tế, cụ thể l&agrave; ứng dụng cho t&agrave;i ch&iacute;nh. Tận dụng tốt kĩ năng n&agrave;y sẽ gi&uacute;p bạn kiếm được một nguồn thu nhập thụ động h&agrave;ng th&aacute;ng. H&atilde;y nhớ rằng t&agrave;i ch&iacute;nh l&agrave; nơi đầy cạm bẫy v&agrave; chỉ c&oacute; 1% người th&agrave;nh c&ocirc;ng. Ch&iacute;nh v&igrave; thế, bằng ch&iacute;nh kinh nghiệm của m&igrave;nh, ngay trong kh&oacute;a học n&agrave;y, giảng vi&ecirc;n sẽ truyền đạt hết những g&igrave; c&oacute; thể gi&uacute;p bạn đạt th&agrave;nh c&ocirc;ng m&agrave; kh&ocirc;ng phải d&iacute;nh c&aacute;c sai lầm uổng ph&iacute;.</p>\r\n\r\n<h2>Mục Ti&ecirc;u Kho&aacute; Học:</h2>\r\n\r\n<p>- 100% học vi&ecirc;n đều sẽ c&oacute; một sản phẩm chạy thực tế do ch&iacute;nh học vi&ecirc;n x&acirc;y dựng từ A-Z đ&uacute;ng chuẩn full stack: Front-End, Back-End, Tự build &amp; config Server/Domain, v&agrave; theo d&otilde;i ứng dụng trong suốt qu&aacute; tr&igrave;nh hoạt động.</p>\r\n\r\n<p>- Ho&agrave;n tất kh&oacute;a học, học vi&ecirc;n sẽ c&oacute; khả năng tự ph&acirc;n t&iacute;ch v&agrave; x&acirc;y dựng một ứng dụng ho&agrave;n chỉnh đ&uacute;ng chuẩn full stack. Bạn sẽ nhận r&otilde; ưu điểm / khuyết điểm của m&igrave;nh trong từng kh&acirc;u. Đặc biệt, bạn sẽ biết r&otilde; c&aacute;ch x&acirc;y dựng &yacute; tưởng của m&igrave;nh th&agrave;nh thực tế, chứ kh&ocirc;ng c&ograve;n phải mơ mộng một &yacute; tưởng n&agrave;o đ&oacute; nữa.</p>\r\n\r\n<p>- Đủ khả năng ứng tuyển c&aacute;c c&ocirc;ng việc Lập tr&igrave;nh Back-End (Web c&aacute;c c&ocirc;ng nghệ kh&aacute;c nhau, Android, iOS, React Native, iOT), full stack MEAN, lập tr&igrave;nh Angular.</p>\r\n\r\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"blob:https://trungtamtinhoc.com/16b66714-8b47-438c-ba6d-82ac332f97aa\" width=\"1567\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<h2>Điều Kiện Học:</h2>\r\n\r\n<p>- Đ&atilde; ho&agrave;n tất kh&oacute;a học lập tr&igrave;nh MEAN, hoặc kiến thức tương đương (Đ&atilde; biết Nodejs + MongoDB + HTML/CSS cơ bản)</p>\r\n\r\n<h2>Đối Tượng Học:</h2>\r\n\r\n<p>- Những bạn muốn ứng tuyển nghề Lập tr&igrave;nh Back-End (Web c&aacute;c c&ocirc;ng nghệ kh&aacute;c nhau, Android, iOS, React Native, iOT), full stack MEAN, lập tr&igrave;nh Angular.</p>\r\n\r\n<p>- C&aacute;c bạn đang l&agrave;m việc li&ecirc;n quan đến lập tr&igrave;nh muốn t&igrave;m hiểu về lập tr&igrave;nh back-end chuy&ecirc;n s&acirc;u, cũng như c&aacute;ch tự triển khai một ứng dụng chạy thực tế.</p>\r\n\r\n<p>- Những bạn y&ecirc;u th&iacute;ch lập tr&igrave;nh, muốn t&igrave;m th&ecirc;m một nguồn thu nhập kh&aacute;c với lập tr&igrave;nh t&agrave;i ch&iacute;nh.</p>\r\n\r\n<h2>BẰNG CẤP - CHỨNG NHẬN</h2>\r\n\r\n<p>Tham dự tr&ecirc;n 80% số buổi học, v&agrave; ho&agrave;n tất đồ &aacute;n cuối kh&oacute;a, học vi&ecirc;n sẽ được cấp Chứng nhận của Trung T&acirc;m Đ&agrave;o Tạo C&ocirc;ng Nghệ Khoa Phạm, c&oacute; gi&aacute; trị to&agrave;n quốc</p>\r\n\r\n<h2>ĐĂNG K&Iacute; HỌC</h2>\r\n\r\n<p>- Đăng k&iacute; trực tiếp tại Trung T&acirc;m Đ&agrave;o Tạo C&ocirc;ng Nghệ Khoa Phạm.<br />\r\n(38 Nguyễn L&acirc;m, Phường 6, Quận 10, TP.HCM)</p>\r\n\r\n<h2>NỘI DUNG KH&Oacute;A HỌC</h2>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Phần 1: BACK-END: MONGODB, NODEJS, EXPRESS</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Phần 2: FRONT-END: ANGULAR, SWIFT (iOS), EJS FRAMEWORK</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Phần 3: DEPLOY TH&Agrave;NH ỨNG DỤNG CHẠY THỰC TẾ, TỰ CONFIG SERVER/DOMAIN TỪ A-Z</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Phần 4: LẬP TR&Igrave;NH BOT Đ&Aacute;NH BITCOIN, BOT FOREX TẠO NGUỒN THU NHẬP THỤ ĐỘNG.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Phần 5:KINH NGHIỆM THỰC TẾ VỀ ỨNG DỤNG ĐẶC BIỆT CỦA NODEJS V&Agrave;O CUỘC SỐNG.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '1', '1', '2021-06-01 08:13:28', '2021-06-01 08:13:28'),
(2, 'KHÓA HỌC LẬP TRÌNH GAME 2D & 3D UNITY', 'khoa-hoc-lap-trinh-game-2d-3d-unity', '<h2>GIỚI THIỆU</h2>\r\n\r\n<p>Unity hiện đang l&agrave; framework được nhiều Game Studio tr&ecirc;n to&agrave;n thế giới sử dụng. được x&acirc;y dựng bởi đội ngũ Unity Technologies. Một trong những đặc điểm l&agrave;m cho Unity được b&igrave;nh chọn l&agrave; nền tảng Game Engine tốt nhất hiện nay l&agrave;:</p>\r\n\r\n<p>- Lập tr&igrave;nh bằng C#, l&agrave; ng&ocirc;n ngữ rất th&acirc;n thuộc với lập tr&igrave;nh vi&ecirc;n.</p>\r\n\r\n<p>- Hỗ trợ đang nền tảng: Chỉ cần viết code 1 lần, v&agrave; game của ch&uacute;ng ta sẽ chạy được tr&ecirc;n cả iOS, Android, WindowsPhone... v&agrave; thậm ch&iacute; l&agrave; cả tr&ecirc;n Web Browser</p>\r\n\r\n<p>- Unity c&oacute; bộ c&ocirc;ng cụ hỗ trợ trong Engine Game cực mạnh như Graphic Rendering(DirectX, OpenGL), physic (NVIDIA PhysX), audio (OpenAL) gi&uacute;p qu&aacute; tr&igrave;nh ph&aacute;t triển game trở n&ecirc;n nhanh v&agrave; đơn giản hơn.</p>\r\n\r\n<p>- Kho thư viện Asset Store khổng lồ miễn ph&iacute; lẫn co ph&iacute; do cộng đồng cả thế giới cung cấp, bạn sẽ c&oacute; nhiều lựa chọn hơn để tạo ra những game cực chất</p>\r\n\r\n<h2>ĐIỀU KIỆN THEO HỌC</h2>\r\n\r\n<p>- Y&ecirc;u th&iacute;ch game tr&ecirc;n Mobile.</p>\r\n\r\n<p>- Phải c&oacute; laptop cấu h&igrave;nh tối thiểu Core i3, Ram 4G (Windows hoặc MAC)</p>\r\n\r\n<p>- Đ&atilde; biết lập tr&igrave;nh một ng&ocirc;n ngữ bất k&igrave;.</p>\r\n\r\n<h2>MỤC TI&Ecirc;U KH&Oacute;A HỌC</h2>\r\n\r\n<p>Ho&agrave;n tất kh&oacute;a học, học vi&ecirc;n sẽ:</p>\r\n\r\n<p>- Tự lập tr&igrave;nh được game 2D &amp; 3D chạy tr&ecirc;n tất cả c&aacute;c d&ograve;ng m&aacute;y iOS, Android, Windows Phone &amp; Tr&igrave;nh duyệt web</p>\r\n\r\n<p>- Tự x&acirc;y dựng hệ thống game 2D để kiếm tiền với quảng c&aacute;o AdMob</p>\r\n\r\n<p>- Nếu chăm chỉ luyện tập, c&oacute; thể lập nh&oacute;m/team &amp; Studio l&agrave;m Game.</p>\r\n\r\n<p>- Đặc biệt, học vi&ecirc;n sẽ nắm được kỹ thuật tự x&acirc;y dựng c&aacute;c nh&acirc;n vật, kỹ thuật tạo chuyển động 3D theo như &yacute; của m&igrave;nh m&agrave; kh&ocirc;ng cần bất k&igrave; một thư viện hỗ trợ n&agrave;o.</p>\r\n\r\n<p>- Tự m&igrave;nh x&acirc;y dựng được thể loại game 3D Online thời gian thực nhiều người chơi.</p>\r\n\r\n<h2>BẰNG CẤP - CHỨNG NHẬN</h2>\r\n\r\n<p>Tham dự tr&ecirc;n 80% số buổi học, v&agrave; ho&agrave;n tất đồ &aacute;n cuối kh&oacute;a, học vi&ecirc;n sẽ được cấp Chứng nhận ho&agrave;n tất kh&oacute;a học của&nbsp;<strong>Trung T&acirc;m Đ&agrave;o Tạo Tin Học Khoa Phạm</strong>, c&oacute; gi&aacute; trị to&agrave;n quốc</p>\r\n\r\n<h2>THỜI GIAN &amp; HỌC PH&Iacute;</h2>\r\n\r\n<p>-&nbsp;<strong>Thời lượng</strong>: 3 th&aacute;ng.</p>\r\n\r\n<p>-&nbsp;<strong>Học ph&iacute; tại Khoa Phạm</strong>: 8.000.000</p>\r\n\r\n<p>-&nbsp;<strong>Địa điểm học</strong>: Trung T&acirc;m Đ&agrave;o Tạo Tin Học Khoa Phạm</p>\r\n\r\n<p>263/14 L&yacute; Thường Kiệt, Phường 15, Quận 11, TP.HCM</p>\r\n\r\n<p>- Lưu &yacute;: Do đặc th&ugrave; lớp lập tr&igrave;nh game cần sự tương t&aacute;c giữa giảng vi&ecirc;n &amp; học vi&ecirc;n, do đ&oacute;, kh&oacute;a học n&agrave;y KH&Ocirc;NG &Aacute;P DỤNG phương thức HỌC TỪ XA qua teamviewer</p>', '2', '1', '2021-06-01 08:42:53', '2021-06-01 08:42:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_diem`
--

CREATE TABLE `tbl_diem` (
  `id` int(11) NOT NULL,
  `MaHocVien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenHocVien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaLop` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GK` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TH` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CK` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TB` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `XepLoai` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pk` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_diem`
--

INSERT INTO `tbl_diem` (`id`, `MaHocVien`, `TenHocVien`, `MaLop`, `GK`, `TH`, `CK`, `TB`, `XepLoai`, `pk`, `created_at`, `updated_at`) VALUES
(20, 'VC03', 'Châu Nhuận Phát', 'FOREXNC01', '7', '3', '2', '3.3', 'Học lại', 0, NULL, NULL),
(24, 'VC011', 'Tiểu Long Nữ', 'FOREXNC01', '8', '10', '6', '7.6', 'Khá', 0, NULL, NULL),
(25, 'VC07', 'Lưu Đức Hòa', 'FOREXNC02', '10', '7', '10', '9.1', 'Giỏi', 0, NULL, NULL),
(26, 'VC02', 'Nguyễn Đình Hữu', 'LTGAME01', '8', '7', '10', '8.7', 'Giỏi', 0, NULL, NULL),
(27, 'VC05', 'Trần Long C', 'LTGAME01', '8', '3', '2', '3.5', 'Học lại', 0, NULL, NULL),
(28, 'VC09', 'Vi Tiểu Bảo', 'PHP02', '7', '3', '2', '3.3', 'Học lại', 0, NULL, NULL),
(30, 'VC10', 'Lưu Bị', 'PHP02', '8', '4', '3', '4.3', 'Học lại', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_diemdanh`
--

CREATE TABLE `tbl_diemdanh` (
  `id` int(10) UNSIGNED NOT NULL,
  `MaCaHoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaHV` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiemDanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoBuoiVang` int(11) NOT NULL,
  `GhiChu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenNhanVien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaNhanVien` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` int(11) NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrinhDo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ChucVu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `HinhAnh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_employee`
--

INSERT INTO `tbl_employee` (`id`, `TenNhanVien`, `MaNhanVien`, `DiaChi`, `SDT`, `Email`, `TrinhDo`, `ChucVu`, `NgaySinh`, `HinhAnh`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Đình Hữu', 'ADMIN', 'Hà Tĩnh', 398202124, 'nguyendinhhuu64@gmail.com', 'Đại học', '1', '1999-05-10', 'huu1.jpg', NULL, NULL),
(2, 'Đỗ Quyết Kiều Quang', 'GĐ01', 'Bình Dương', 398202342, 'DoQuyetKieuQuang@gmail.com', 'Đại học', '3', '1999-06-23', 'quang23.jpg', NULL, NULL),
(3, 'Đặng Thị Minh Thư', 'KT01', 'Kiên Giang', 398202121, 'DangThiMinhThu@gmail.com', 'Đại học', '4', '1999-06-26', 'thu95.jpg', NULL, NULL),
(4, 'Hoàng Trọng Long', 'GV01', 'Hà Tĩnh', 38292124, 'HoangTrongLong@gmail.com', 'Đại học', '2', '1999-09-16', 'long94.jpg', NULL, NULL),
(5, 'Lê Xuân Hồng', 'NV02', 'Bình Dương', 398202133, 'LeXuanHong@gmail.com', 'Đại học', '1', '1999-08-19', 'hong13.jpg', NULL, NULL),
(6, 'Nguyễn Minh Huy', 'NV01', 'Cà Mau', 398202121, 'nguyenminhhuy@gmail.com', 'Đại học', '1', '1999-10-20', 'huy30.jpg', NULL, NULL),
(8, 'Nguyễn Thị Bích Thiềm', 'GV04', 'Hà Tĩnh', 398202121, 'nguyenthibichthiem@gmail.com', 'Đại học', '2', '1978-05-20', 'cs257.jpg', NULL, NULL),
(9, 'Hoàng Trọng A', 'GV05', 'Bình Dương', 398202342, 'HoangTrongA@gmail.com', 'Đại học', '2', '1997-07-23', 'woman-1063100_64058.jpg', NULL, NULL),
(11, 'Phạm Nhật Vượng', 'NV03', 'Hà Tĩnh', 398202342, 'phamnhatvuong@gmail.com', 'Tiến sĩ', '4', '1856-12-22', 'woman-3083453_64084.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_information`
--

CREATE TABLE `tbl_information` (
  `info_id` int(10) UNSIGNED NOT NULL,
  `info_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info_map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `info_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info_fanpage` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_kehoach`
--

CREATE TABLE `tbl_kehoach` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenKeHoach` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `File` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_kehoach`
--

INSERT INTO `tbl_kehoach` (`id`, `TenKeHoach`, `Slug`, `File`, `created_at`, `updated_at`) VALUES
(3, 'Kế hoạc khai giảng khóa hè 2022', 'ke-hoac-khai-giang-khoa-he-2022', 'CV_TTS_PHP75.pdf', '2021-06-03 05:09:23', NULL),
(4, 'Kế hoạc khai giảng khóa hè 2022', 'ke-hoac-khai-giang-khoa-he-2022', 'CV_TTS_PHP82.pdf', '2021-06-03 05:11:21', NULL),
(5, 'Kế hoạc khai giảng khóa hè 2022', 'ke-hoac-khai-giang-khoa-he-2022', 'BBLVN381.docx', '2021-06-03 05:13:49', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_lichthi`
--

CREATE TABLE `tbl_lichthi` (
  `id` int(10) UNSIGNED NOT NULL,
  `MaLop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenLop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayThi` date NOT NULL,
  `GioThi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PhongThi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GiamThi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_lichthi`
--

INSERT INTO `tbl_lichthi` (`id`, `MaLop`, `TenLop`, `NgayThi`, `GioThi`, `PhongThi`, `GiamThi`, `created_at`, `updated_at`) VALUES
(1, 'PHP01', 'Lập trình PHP & MYSQL', '2022-10-12', '15:00', 'H5.01', 'GV01', NULL, NULL),
(2, 'PHP02', 'Lập trình PHP & MYSQL nâng cao', '2022-10-12', '09:00', 'A3.01', 'GV01', NULL, NULL),
(3, 'FOREX01', 'Khóa học Forex cơ bản', '2022-10-20', '12:30', 'H5.01', 'GV01', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_loai_thu_chi`
--

CREATE TABLE `tbl_loai_thu_chi` (
  `Loai_id` int(10) UNSIGNED NOT NULL,
  `Loai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenLoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_loai_thu_chi`
--

INSERT INTO `tbl_loai_thu_chi` (`Loai_id`, `Loai`, `TenLoai`, `created_at`, `updated_at`) VALUES
(1, 'Chi', 'Chi phí lương', NULL, NULL),
(2, 'Chi', 'Chi phí phát sinh (khác)', NULL, NULL),
(3, 'Chi', 'Khuyến mãi học phí', NULL, NULL),
(4, 'Thu', 'Thu học phí', NULL, NULL),
(5, 'Chi', 'Chi phí quảng cáo', NULL, NULL),
(6, 'Chi', 'Chi phí lương', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_lop_hoc`
--

CREATE TABLE `tbl_lop_hoc` (
  `id` int(10) UNSIGNED NOT NULL,
  `MaLop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenLop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaGV` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TinhTrang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_lop_hoc`
--

INSERT INTO `tbl_lop_hoc` (`id`, `MaLop`, `TenLop`, `MaGV`, `TinhTrang`, `created_at`, `updated_at`) VALUES
(1, 'PHP01', 'Lập trình PHP & MYSQL', 'GV02', 0, NULL, NULL),
(2, 'PHP02', 'Lập trình PHP & MYSQL nâng cao', 'GV01', 0, NULL, NULL),
(3, 'FOREX01', 'Khóa học Forex cơ bản', 'GV03', 0, NULL, NULL),
(6, 'FOREXNC02', 'Lớp học tin học văn phòng nâng cao', 'GV01', 0, NULL, NULL),
(7, 'LTGAME01', 'Lập trình game Unity', 'GV05', 1, NULL, NULL),
(8, 'THVP-01', 'Tin học văn phòng', 'GV01', 1, NULL, NULL),
(9, 'LTGAME02', 'Lập trình Game 2D 3D', 'GV05', 0, NULL, NULL),
(10, 'LTPYTHON01', 'Lập trình PYTHON', 'GV01', 0, NULL, NULL),
(11, 'LTFONTEND01', 'Lập trình fontend nâng cao', 'GV05', 0, NULL, NULL),
(12, 'LTFONTEND-CB', 'Lập trình fontend cơ bản', 'GV05', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_news_category`
--

CREATE TABLE `tbl_news_category` (
  `news_cate_id` int(10) UNSIGNED NOT NULL,
  `news_cate_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_cate_status` int(11) NOT NULL,
  `news_cate_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_cate_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_news_category`
--

INSERT INTO `tbl_news_category` (`news_cate_id`, `news_cate_name`, `news_cate_status`, `news_cate_slug`, `news_cate_desc`, `created_at`, `updated_at`) VALUES
(8, 'Tin Công Nghệ', 1, 'tin-cong-nghe', 'tin tức về công nghệ, ngôn ngữ lập trình mới nhất', NULL, NULL),
(9, 'Tin Lập Trình', 1, 'tin-lap-trinh', 'tin tức về lập trình, ngôn ngữ lập trình', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_news_post`
--

CREATE TABLE `tbl_news_post` (
  `news_post_id` int(10) UNSIGNED NOT NULL,
  `news_post_title` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_post_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_post_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_post_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_post_meta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_post_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_post_status` int(11) NOT NULL,
  `news_post_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_cate_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_news_post`
--

INSERT INTO `tbl_news_post` (`news_post_id`, `news_post_title`, `news_post_slug`, `news_post_desc`, `news_post_content`, `news_post_meta`, `news_post_keyword`, `news_post_status`, `news_post_image`, `news_cate_id`, `created_at`, `updated_at`) VALUES
(7, 'Đường sự nghiệp của một lập trình viên bạn nên biết', 'duong-su-nghiep-cua-mot-lap-trinh-vien-ban-nen-biet', '<p>C&oacute; một sự thật m&agrave; nhiều lập tr&igrave;nh vi&ecirc;n phải đối mặt đ&oacute; l&agrave; sự nghiệp lập tr&igrave;nh của họ sẽ tiến đến một cấp cao nhất v&agrave; sau đ&oacute; l&agrave; sẽ bắt đầu đi l&ugrave;i, ch&aacute;n code (Ngoại trừ những người thật sự đam m&ecirc; code). H&ocirc;m nay, TopDev sẽ cung cấp cho bạn một số th&ocirc;ng tin định hướng nghề nghiệp quan trọng m&agrave; bạn cần phải biết, từ đ&oacute; bạn c&oacute; thể biết trước tương lai m&igrave;nh cần g&igrave; cho bản th&acirc;n.</p>', '<p>Trang blog Topdev đ&atilde; cho đăng b&agrave;i viết &ldquo;<a href=\"https://topdev.vn/blog/that-nghiep-tuoi-35-khung-hoang-tuoi-30-thuc-ra-duoc-bao-truoc-boi-nhung-con-buon-ngu-tuoi-25/\">Thất nghiệp tuổi 35: Khủng hoảng tuổi 30 thực ra được b&aacute;o trước bởi những cơn buồn ngủ tuổi 25?</a>&ldquo;, v&agrave; nhiều lập tr&igrave;nh vi&ecirc;n kỳ cựu cho rằng khoảng thời gian sự nghiệp l&agrave;m việc hiệu quả của một lập tr&igrave;nh vi&ecirc;n l&agrave; c&oacute; giới hạn. Nhưng c&acirc;u hỏi đặt ra l&agrave; liệu điều đ&oacute; l&agrave; c&oacute; thật kh&ocirc;ng? v&agrave; n&oacute; c&oacute; nghi&ecirc;m trọng kh&ocirc;ng?</p>\r\n\r\n<ul>\r\n	<li>Tương lai của một lập tr&igrave;nh vi&ecirc;n sẽ ra sao khi ng&agrave;y c&agrave;ng lớn tuổi?</li>\r\n	<li>Roadmap sự nghiệp của một lập tr&igrave;nh vi&ecirc;n&nbsp;tr&ocirc;ng sẽ như thế n&agrave;o?</li>\r\n	<li>Những lựa chọn trong sự nghiệp v&agrave; những kỳ vọng về c&aacute;c lựa chọn đ&oacute; l&agrave; g&igrave;?</li>\r\n</ul>\r\n\r\n<p>Mọi người đều cho rằng c&aacute;c lập tr&igrave;nh vi&ecirc;n về sau c&oacute; thể trở th&agrave;nh người quản l&yacute; hoặc l&atilde;nh đạo. Nhưng nhiều lập tr&igrave;nh vi&ecirc;n kh&ocirc;ng hiểu được kỳ vọng v&agrave; y&ecirc;u cầu c&ocirc;ng việc của một nh&agrave; quản l&yacute;.</p>\r\n\r\n<p>Chắc chắn, tất cả ch&uacute;ng ta đều c&oacute; những manager, việc trở th&agrave;nh một manager c&oacute; &yacute; nghĩa g&igrave;? C&oacute; những kỳ vọng g&igrave;? V&agrave; sự kh&aacute;c biệt giữa một manager cấp trung v&agrave; leader cấp cao l&agrave; g&igrave;?</p>\r\n\r\n<p>Trong b&agrave;i viết n&agrave;y, ch&uacute;ng t&ocirc;i sẽ chỉ cho bạn một con đường sự nghiệp từ sự khởi đầu trong lĩnh vực kỹ thuật như một Junior Developer cho đến level cao nhất l&agrave; trở th&agrave;nh một CTO (Gi&aacute;m đốc c&ocirc;ng nghệ).</p>\r\n\r\n<p><strong>Lưu &yacute;:</strong>&nbsp;Sự nghiệp mỗi người mỗi kh&aacute;c, sự hướng dẫn n&agrave;y kh&ocirc;ng thể ph&ugrave; hợp với tất cả mọi người. Nhiều bạn sẽ th&iacute;ch hợp với vai tr&ograve; quản l&yacute;, ngược lại cũng rất nhiều bạn đam m&ecirc; code, coi code l&agrave; phải giải tr&iacute; mỗi khi gặp bế tắc chẳng hạn. C&oacute; thể l&uacute;c bạn 22 tuổi bạn chỉ mong l&agrave; được ngồi code v&agrave; kh&ocirc;ng th&iacute;ch việc quản l&yacute;, nhưng biết đ&acirc;u l&ecirc;n 30 bạn lại bắt đầu ch&aacute;n code. V&igrave; vậy hiểu v&agrave; chọn lựa đ&uacute;ng sẽ tr&aacute;nh cho ch&uacute;ng ta hụt hẫng khi gặp phải v&agrave;i trục trặc tr&ecirc;n con đường sự nghiệp.</p>\r\n\r\n<h2>1.Fresher</h2>\r\n\r\n<p><a href=\"https://topdev.vn/viec-lam-it?q=fresher\" rel=\"noopener noreferrer\" target=\"_new\">Fresher</a>&nbsp;l&agrave; để chỉ những sinh vi&ecirc;n học ng&agrave;nh c&ocirc;ng nghệ th&ocirc;ng tin mới ra trường, những người mới bắt đầu bước ch&acirc;n v&agrave;o c&ocirc;ng việc của lập tr&igrave;nh vi&ecirc;n. Fresher l&agrave; những người đ&atilde; trang bị đầy đủ kiến thức căn bản cần c&oacute;, kiến thức về c&aacute;c logic, cấu tr&uacute;c phần mềm, cơ sở dữ liệu&hellip; V&agrave; cần một m&ocirc;i trường để thực hiện, triển khai, học hỏi v&agrave; ph&aacute;t triển l&ecirc;n c&aacute;c kỹ năng ch&iacute;nh v&agrave; kỹ năng mềm. Bạn c&oacute; thể xem th&ecirc;m&nbsp;<a href=\"https://topdev.vn/blog/fresher-la-gi/\">Fresher l&agrave; g&igrave;</a>&nbsp;tại đ&acirc;y.</p>\r\n\r\n<h2>2.Junior Developer</h2>\r\n\r\n<ul>\r\n	<li>0-2 năm kinh nghiệm. Thường l&agrave; người trải qua giai đoạn intern v&agrave; fresher, đ&atilde; c&oacute; kinh nghiệm trong việc lập tr&igrave;nh ứng dụng tr&ecirc;n thực tế.</li>\r\n	<li>Hiểu biết sơ bộ về to&agrave;n bộ một v&ograve;ng đời ứng dụng, sử dụng ng&ocirc;n ngữ lập tr&igrave;nh hay framework.</li>\r\n	<li>Hiểu biết về cơ sở dữ liệu, lưu trữ v&agrave; xuất dữ liệu. L&uacute;c n&agrave;y c&oacute; thể viết c&aacute;c chức năng cho ứng dụng, tuy nhi&ecirc;n code sẽ c&oacute; r&aacute;c nhiều do chưa c&oacute; kinh nghiệm tối ưu dẫn để việc chồng ch&eacute;o trong việc truy xuất dữ liệu. L&uacute;c n&agrave;y đ&ocirc;i khi code dở sẽ dẫn đến tốn resource server rất nhiều.</li>\r\n</ul>\r\n\r\n<p>Khi bạn bắt đầu bước ch&acirc;n v&agrave;o sự nghiệp lập tr&igrave;nh, n&oacute; chắc chắn đầy kh&oacute; khăn v&agrave; dễ khiến bạn nản l&ograve;ng. C&oacute; l&uacute;c bạn cảm thấy độ hiểu biết kiến thức của m&igrave;nh chưa đủ để đ&aacute;p ứng cho c&ocirc;ng việc, kh&ocirc;ng chắc chắn về việc l&agrave;m thế n&agrave;o m&agrave; người ta c&oacute; thể viết ra những ứng dụng lớn v&agrave; phức tạp đến như vậy. V&agrave; đ&ocirc;i khi, bạn lại tự hỏi tại sao m&igrave;nh vẫn chưa l&ecirc;n được cấp độ Senior. Bạn nh&igrave;n v&agrave;o c&aacute;c lập tr&igrave;nh vi&ecirc;n senior kh&aacute;c v&agrave; nghĩ rằng về cơ bản th&igrave; bạn cũng đang l&agrave;m c&ocirc;ng việc giống như họ.</p>\r\n\r\n<p>Điểm yếu của junior đương nhi&ecirc;n ch&iacute;nh l&agrave; kinh nghiệm, ngay cả nhưng bạn th&ocirc;ng minh v&agrave; học hỏi nhanh cũng chưa được tiếp x&uacute;c đến c&aacute;c chức năng hay code cũng như vấn đề h&oacute;c b&uacute;a. Cho n&ecirc;n để giải quyết c&aacute;c vấn đề tr&ecirc;n bạn cần tiếp tục ki&ecirc;n tr&igrave; học hỏi, tự x&acirc;y dựng cho m&igrave;nh một sản phẩm tương tự để c&oacute; thể giải quyết c&aacute;c vấn đề cơ bản một c&aacute;ch gọn g&agrave;ng, khi ấy leader của bạn sẽ thấy bạn đủ vững để truyền kinh nghiệm v&agrave; giao cho bạn c&aacute;ch giải quyết vấn đề kh&oacute; hơn.</p>\r\n\r\n<h2>3.Senior developer</h2>\r\n\r\n<ul>\r\n	<li>3-8+ năm kinh nghiệm</li>\r\n	<li>C&oacute; thể xử l&yacute; c&aacute;c vấn đề phức tạp, viết ứng dụng lớn</li>\r\n	<li>C&oacute; khả năng thiết kế c&aacute;c cấu tr&uacute;c cơ sở dữ liệu lớn, c&aacute;c t&iacute;nh năng phức tạp của ứng dụng</li>\r\n	<li>Hiểu biết s&acirc;u sắc về cơ sở dữ liệu v&agrave; c&aacute;c dịch vụ ứng dụng (queues, caching, v.v&hellip;)</li>\r\n</ul>\r\n\r\n<p>Lập tr&igrave;nh vi&ecirc;n ở level senior l&agrave; những người thực sự quan trọng trong việc x&acirc;y dựng to&agrave;n bộ c&aacute;c ứng dụng ở quy m&ocirc; lớn. L&ecirc;n đến level n&agrave;y, bạn sẽ đứng trước hai hướng đi của sự nghiệp. Một l&agrave; khi bạn hiểu c&ocirc;ng nghệ đủ để trở th&agrave;nh một lập tr&igrave;nh vi&ecirc;n senior, th&igrave; bạn c&oacute; thể đ&atilde; c&oacute; những kinh nghiệm kỹ thuật đủ s&acirc;u để trở th&agrave;nh một technical leader hoặc CTO (Gi&aacute;m đốc c&ocirc;ng nghệ) của một startup, tuy nhi&ecirc;n l&uacute;c n&agrave;y bạn phải học hỏi th&ecirc;m về quản l&yacute; con người, quản l&yacute; một quy tr&igrave;nh ph&aacute;t triển phần mềm&hellip;</p>\r\n\r\n<p>Ngược lại bạn sẽ tiếp tục đ&agrave;o s&acirc;u kiến ​​thức kỹ thuật, đam m&ecirc; giải quyết những vấn đề về hệ thống lớn, chịu tải cao, n&oacute;i chung l&agrave; bạn kh&ocirc;ng th&iacute;ch d&acirc;y dưa v&agrave;o việc quản l&yacute; con người.</p>\r\n\r\n<h2>4.Tech lead</h2>\r\n\r\n<ul>\r\n	<li>5-10+ năm kinh nghiệm lập tr&igrave;nh</li>\r\n	<li>C&oacute; c&aacute;c kỹ năng của một senior</li>\r\n	<li>Hiểu đủ s&acirc;u v&agrave; rộng về c&aacute;c c&ocirc;ng nghệ, chọn cho team dev một hay nhiều tech stack để giải quyết vấn đề trong hệ thống lớn.</li>\r\n</ul>\r\n\r\n<p>Đến level n&agrave;y, bạn sẽ c&oacute; rất nhiều quyết định quan trọng để mọi lập tr&igrave;nh vi&ecirc;n trong team đi theo, n&agrave;o l&agrave; chọn ng&ocirc;n ngữ g&igrave;, chọn tools g&igrave;, thiết kế hệ thống ra sao, theo chuẩn quy tr&igrave;nh l&agrave;m phần mềm n&agrave;o.</p>\r\n\r\n<p>L&uacute;c n&agrave;y c&oacute; đ&ocirc;i khi bạn sẽ code những định nghĩa, những quy luật đặt biến chẳng hạn, tuy nhi&ecirc;n c&ocirc;ng việc ch&iacute;nh thường l&agrave; thiết kế hệ thống va đảm bảo hệ thống c&oacute; thể scale lớn, c&oacute; thể kết hợp nhiều tech stack để vận h&agrave;nh đ&aacute;p ứng nhu cầu.</p>\r\n\r\n<h2>5.Quản l&yacute; cấp trung</h2>\r\n\r\n<ul>\r\n	<li>Chức danh n&agrave;y thường l&agrave; Product Manager hoặc Project Manager</li>\r\n	<li>L&agrave; người quyết định rất lớn đế những chức năng cần phải c&oacute; của một sản phẩm th&ocirc;ng qua nghi&ecirc;n cứu, khảo s&aacute;t v&agrave; đo đạc.</li>\r\n</ul>\r\n\r\n<p>Sau h&agrave;ng năm trời c&ograve;ng lưng ra code bạn đ&atilde; cảm thấy vị tr&iacute; của m&igrave;nh trở n&ecirc;n nh&agrave;m ch&aacute;n v&agrave; c&ocirc;ng việc qu&aacute; nặng nề. Trong khi bạn bị việc rượt đuổi th&igrave; PM của bạn suốt ng&agrave;y đi v&ograve;ng quanh hối th&uacute;c. Bạn cảm thấy stress v&agrave; bất c&ocirc;ng, bạn nghĩ nếu PM l&agrave; &ldquo;người đi hối&rdquo; th&igrave; bạn cũng l&agrave;m được. &ldquo;Phải trở th&agrave;nh PM ng&agrave;y b&acirc;y giờ mới được!&rdquo; &ndash; Bạn quyết t&acirc;m như vậy.</p>\r\n\r\n<p>V&agrave; đ&uacute;ng l&agrave; như vậy, khi đ&atilde; trở th&agrave;nh một PM bạn sẽ kh&ocirc;ng cần phải code nữa. Nhưng b&ugrave; lại cho việc đ&oacute;, bạn c&oacute; &ldquo;cả t&aacute;&rdquo; việc phải thực hiện, v&agrave; tr&aacute;ch nhiệm của bạn cũng &ldquo;cao ngất trời&rdquo;. Xem th&ecirc;m&nbsp;<a href=\"https://topdev.vn/blog/pm-la-gi/\">PM l&agrave; g&igrave;</a>&nbsp;v&agrave;&nbsp;<a href=\"https://topdev.vn/blog/lam-sao-de-tro-thanh-product-manager/\">l&agrave;m sao để trở th&agrave;nh Product Manager</a>&nbsp;th&agrave;nh c&ocirc;ng tại đ&acirc;y.</p>\r\n\r\n<h2>6.Quản l&yacute; cấp cao</h2>\r\n\r\n<ul>\r\n	<li>CTO hoặc CEO</li>\r\n</ul>\r\n\r\n<p>Đến l&uacute;c n&agrave;y bạn sẽ trở th&agrave;nh một người truyền cảm hứng, dẫn dắt c&aacute;c leader v&agrave; team đi theo một vision n&agrave;o đ&oacute;. Bạn ở nấc thang sự nghiệp đỉnh cao n&agrave;y, th&igrave; bạn c&agrave;ng &iacute;t tiếp x&uacute;c với c&ocirc;ng việc lập tr&igrave;nh. Điều quan trọng nhất l&uacute;c n&agrave;y l&agrave; về con người.</p>\r\n\r\n<p>C&aacute;c nh&agrave; quản l&yacute; cấp trung (mid-level manager) vẫn c&oacute; thể c&oacute; thời gian để vọc vạch với c&ocirc;ng nghệ, nhưng c&aacute;c quản l&yacute; cấp cao phải d&agrave;nh tất cả thời gian của họ để tập trung v&agrave;o vấn đề con người: truyền cảm hứng, tạo động lực, l&atilde;nh đạo, v&agrave; ra chiến lược.</p>\r\n\r\n<h2><strong>Kết luận</strong></h2>\r\n\r\n<p>TopDev hy vọng b&agrave;i viết n&agrave;y đ&atilde; cho bạn một số hướng dẫn v&agrave; những hiểu biết để bạn c&oacute; thể chuẩn bị cho tương lai ph&iacute;a trước. Như đ&atilde; n&oacute;i từ đầu, kh&ocirc;ng phải ai cũng ph&ugrave; hợp, điều quan trọng l&agrave; bạn th&iacute;ch l&agrave;m g&igrave; v&agrave; đừng bỏ cuộc. Lu&ocirc;n c&oacute; những lập tr&igrave;nh vi&ecirc;n lớn tuổi nhưng vẫn code miệt m&agrave;i v&igrave; đam m&ecirc;, lu&ocirc;n c&oacute; những t&agrave;i năng trẻ l&ecirc;n l&agrave;m l&atilde;nh đạo, quan trọng hơn hết l&agrave; thấy y&ecirc;u c&ocirc;ng việc m&igrave;nh đang l&agrave;m.</p>', 'Đường sự nghiệp của một lập trình viên bạn nên biết', 'lap trinh vien it', 1, 'ng.jpg', 9, NULL, NULL),
(8, 'Cách tạo REST API với JSON Server', 'cach-tao-rest-api-voi-json-server', '<p>Một c&ocirc;ng việc kh&aacute; phổ biến đối với front-end developer l&agrave; phải giả lập một backend REST service để nhận JSON data cung cấp cho ứng dụng front-end, v&agrave; đảm bảo n&oacute; hoạt động như mong đợi trong khi đang chờ ph&iacute;a backend ho&agrave;n thiện service.</p>', '<p>Bạn vẫn c&oacute; thể c&agrave;i đặt backend server đầy đủ, bằng c&aacute;ch sử dụng Node.js, Express v&agrave; MongoDB, tuy nhi&ecirc;n việc n&agrave;y tốn kh&aacute; nhiều thời gian v&agrave; phức tạp. Trong khi đ&oacute; JSON Server lại l&agrave; một giải ph&aacute;p kh&aacute; ho&agrave;n thiện cho y&ecirc;u cầu nhanh v&agrave; đơn giản với đầy đủ c&aacute;c thao t&aacute;c CRUD (Create Read Update Delete).</p>\r\n\r\n<p>V&igrave; vậy b&agrave;i viết n&agrave;y sẽ hướng dẫn bạn c&aacute;ch c&agrave;i đặt JSON server v&agrave; publish một sample REST API.</p>\r\n\r\n<p>Nội dung&nbsp;[<a href=\"https://codegym.vn/blog/2020/04/14/cach-tao-rest-api-voi-json-server/#\">ẩn</a>]</p>\r\n\r\n<ul>\r\n	<li><a href=\"https://codegym.vn/blog/2020/04/14/cach-tao-rest-api-voi-json-server/#Chuan_bi\">Chuẩn bị</a></li>\r\n	<li><a href=\"https://codegym.vn/blog/2020/04/14/cach-tao-rest-api-voi-json-server/#Cai_dat_JSON_Server\">C&agrave;i đặt JSON Server</a></li>\r\n	<li><a href=\"https://codegym.vn/blog/2020/04/14/cach-tao-rest-api-voi-json-server/#Tao_JSON_File\">Tạo JSON File</a></li>\r\n	<li><a href=\"https://codegym.vn/blog/2020/04/14/cach-tao-rest-api-voi-json-server/#Khoi_dong_Server\">Khởi động Server</a></li>\r\n	<li><a href=\"https://codegym.vn/blog/2020/04/14/cach-tao-rest-api-voi-json-server/#Mot_so_thao_tac_truy_van\">Một số thao t&aacute;c truy vấn</a>\r\n	<ul>\r\n		<li><a href=\"https://codegym.vn/blog/2020/04/14/cach-tao-rest-api-voi-json-server/#Filter\">Filter</a></li>\r\n		<li><a href=\"https://codegym.vn/blog/2020/04/14/cach-tao-rest-api-voi-json-server/#Paginate\">Paginate</a></li>\r\n		<li><a href=\"https://codegym.vn/blog/2020/04/14/cach-tao-rest-api-voi-json-server/#Sort\">Sort</a></li>\r\n		<li><a href=\"https://codegym.vn/blog/2020/04/14/cach-tao-rest-api-voi-json-server/#Bai_viet_lien_quan\">B&agrave;i viết li&ecirc;n quan</a></li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<h2><strong>Chuẩn bị</strong></h2>\r\n\r\n<p>C&agrave;i node cho m&aacute;y t&iacute;nh của bạn bằng c&aacute;ch tải g&oacute;i ph&ugrave; hợp với hệ điều h&agrave;nh của bạn ở link sau&nbsp;<a href=\"https://nodejs.org/en/download/\">https://nodejs.org/en/download/</a></p>\r\n\r\n<p>Sau khi c&agrave;i đặt xong ch&uacute;ng ta tiến h&agrave;nh kiểm tra version của node v&agrave; npm bằng c&aacute;ch như sau:</p>\r\n\r\n<pre>\r\n$ node -v\r\n$ npm &ndash;v</pre>\r\n\r\n<p>Nếu m&agrave;n h&igrave;nh xuất hiện version của node v&agrave; npm (Node Package Managerment) th&igrave; c&oacute; nghĩa bạn đ&atilde; c&agrave;i đặt th&agrave;nh c&ocirc;ng</p>\r\n\r\n<h2><strong>C&agrave;i đặt JSON Server</strong></h2>\r\n\r\n<p>JSON Server được đ&oacute;ng g&oacute;i như một NPM package. V&igrave; vậy việc c&agrave;i đặt c&oacute; thể được thực hiện th&ocirc;ng qua việc sử dụng g&oacute;i node.js manager:</p>\r\n\r\n<p>$ npm install -g json-server</p>\r\n\r\n<p>Tuỳ chọn -g sẽ gi&uacute;p cho package được c&agrave;i đặt ở level hệ thống.</p>\r\n\r\n<h2><strong>Tạo JSON File</strong></h2>\r\n\r\n<p>Tiếp theo, h&atilde;y tạo file JSON v&agrave; đặt t&ecirc;n file theo c&uacute; ph&aacute;p &lt;t&ecirc;n file&gt;.json v&iacute; dụ: data.json. Trong file n&agrave;y sẽ chứa những dữ liệu được trả về bởi REST API. Dưới đ&acirc;y l&agrave; một v&iacute; dụ về file json n&agrave;y:</p>\r\n\r\n<pre>\r\n{\r\n  &quot;employees&quot;: [\r\n    {\r\n      &quot;id&quot;: 1,\r\n      &quot;firstName&quot;: &quot;Phuc&quot;,\r\n      &quot;lastName&quot;: &quot;L&ecirc;&quot;,\r\n      &quot;address&quot;: &quot;28 Nguyễn Tri Phương, Ph&uacute; Nhuận, TP Huế&quot;,\r\n	&quot;profile&quot;: {\r\n		&quot;username&quot;: &quot;phuc.le@codegym.vn&quot;,\r\n      	&quot;email&quot;: &quot;phuc.le@codegym.vn&quot;,\r\n	},\r\n    },\r\n    {\r\n      &quot;id&quot;: 2,\r\n      &quot;firstName&quot;: &quot;Khanh&quot;,\r\n      &quot;lastName&quot;: &quot;L&ecirc;&quot;,\r\n      &quot;address&quot;: &quot;28 Nguyễn Tri Phương, Ph&uacute; Nhuận, TP Huế&quot;,\r\n	    	&quot;profile&quot;: {\r\n		&quot;username&quot;: &quot;khanh.le@codegym.vn&quot;,\r\n      	&quot;email&quot;: &quot;khanh.le@codegym.vn&quot;,\r\n		},\r\n    },\r\n    {\r\n      &quot;id&quot;: 3,\r\n      &quot;firstName&quot;: &quot;Ho&agrave;ng&quot;,\r\n      &quot;lastName&quot;: &quot;Phan&quot;,\r\n      &quot;address&quot;: &quot;28 Nguyễn Tri Phương, Ph&uacute; Nhuận, TP Huế&quot;,\r\n		&quot;profile&quot;: {\r\n		&quot;username&quot;: &quot;hoang.phan@codegym.vn&quot;,\r\n      	&quot;email&quot;: &quot;hoang.phan@codegym.vn&quot;,\r\n		}\r\n    }\r\n}</pre>\r\n\r\n<p>Cấu tr&uacute;c tr&ecirc;n m&ocirc; tả employee object với c&aacute;c trường id, firstName, lastName, address v&agrave; profile.</p>\r\n\r\n<h2><strong>Khởi động Server</strong></h2>\r\n\r\n<p>H&atilde;y khởi động JSON server bằng việc chạy c&acirc;u lệnh sau:</p>\r\n\r\n<pre>\r\nGET /employees?_sort=firstName,lastName&amp;_order=desc,asc</pre>\r\n\r\n<p><em><strong>Lưu &yacute;:</strong>&nbsp;Nếu file json kh&ocirc;ng nằm ở thư mục gốc th&igrave; ch&uacute;ng ta sử dụng lện cd để đặt con trỏ hệ thống tới thư mục chứa file data.json rồi mới thực hiện lệnh tr&ecirc;n.</em></p>\r\n\r\n<p>File data.json được truyền v&agrave;o như một tham số trong c&acirc;u lệnh tr&ecirc;n, v&agrave; option &ndash;watch được th&ecirc;m v&agrave;o nhằm đảm bảo server được chạy ở chế độ xem, ở chế độ n&agrave;y, server sẽ xem x&eacute;t những thay đổi v&agrave; cập nhật kết quả v&agrave;o API một c&aacute;ch ph&ugrave; hợp.</p>\r\n\r\n<p>B&acirc;y giờ h&atilde;y mở địa chỉ&nbsp;<a href=\"http://localhost:3000/employees\">http://localhost:3000/employees</a>&nbsp;tr&ecirc;n browser v&agrave; ta sẽ nhận được kết quả của file json m&agrave; ta đ&atilde; tạo.</p>\r\n\r\n<p>Những HTTP endpoints sau đ&acirc;y được tạo tự động bởi JSON server, ta c&oacute; thể tuỳ chọn để sử dụng sao cho ph&ugrave; hợp với mục đ&iacute;ch của m&igrave;nh:</p>\r\n\r\n<pre>\r\nGET    /employees\r\nGET    /employees/{id}\r\nPOST   /employees\r\nPUT    /employees/{id}\r\nPATCH  /employees/{id}\r\nDELETE /employees/{id}</pre>\r\n\r\n<p><strong><em>Lưu &yacute;:</em></strong></p>\r\n\r\n<ul>\r\n	<li>Gi&aacute; trị của id kh&ocirc;ng được thay đổi, v&agrave; n&oacute; sẽ được tăng dần sau mỗi POST request.</li>\r\n	<li>Nếu ta c&oacute; cung cấp gi&aacute; trị cho id cho PUT hoặc PATCH request th&igrave; gi&aacute; trị đ&oacute; sẽ được bỏ qua.</li>\r\n	<li>C&aacute;c loại POST, PUT v&agrave; PATCH request th&igrave; phải bổ sung th&ecirc;m Content-Type: application/json trong body. Nếu kh&ocirc;ng c&oacute; thiết lập n&agrave;y th&igrave; dữ liệu sẽ kh&ocirc;ng được cập nhật v&agrave;o file data.json.</li>\r\n</ul>\r\n\r\n<h2><strong>Một số thao t&aacute;c truy vấn</strong></h2>\r\n\r\n<h3><strong>Filter</strong></h3>\r\n\r\n<p>Sử dụng dấu . để truy cập v&agrave;o c&aacute;c thuộc t&iacute;nh</p>\r\n\r\n<pre>\r\nGET /employees?firstName=&rdquo;Ho&agrave;ng&rdquo;&amp;lastName =&rdquo;Phan&rdquo;\r\nGET /employees?id=1\r\nGET /employees?profile.email=khanh.le@codegym.vn\r\n</pre>\r\n\r\n<h3><strong>Paginate</strong></h3>\r\n\r\n<p>Sử dụng _page&nbsp;v&agrave; t&ugrave;y chọn&nbsp;_limit&nbsp;để trả về dữ liệu sau khi được ph&acirc;n trang. Mặc định _limit l&agrave; 10</p>\r\n\r\n<pre>\r\nGET /employees?_page=7\r\nGET /employees?_page=7&amp;_limit=20</pre>\r\n\r\n<h3><strong>Sort</strong></h3>\r\n\r\n<p>Sử dụng _sort v&agrave; _order. Mặc định l&agrave; sắp xếp tăng dần:</p>\r\n\r\n<pre>\r\nGET /employees?_sort=firstName&amp;_order=asc\r\nGET /employees/1/?_sort=firstName&amp;_order=desc</pre>\r\n\r\n<p>Sắp xếp nhiều trường:</p>\r\n\r\n<pre>\r\nGET /employees?_sort=firstName,lastName&amp;_order=desc,asc</pre>\r\n\r\n<p>Ngo&agrave;i ra, để t&igrave;m hiểu s&acirc;u hơn về những hỗ trợ m&agrave; json server cung cấp, c&aacute;c bạn c&oacute; thể t&igrave;m hiểu th&ecirc;m ở đ&acirc;y&nbsp;<a href=\"https://github.com/typicode/json-server\">https://github.com/typicode/json-server</a></p>\r\n\r\n<p><em>Author: Nguyễn Hữu Anh Khoa</em></p>', 'Cách tạo REST API với JSON Server', 'json', 1, 'json94.jpg', 9, NULL, NULL),
(9, 'So sánh giữa Laravel và Phalcon', 'so-sanh-giua-laravel-va-phalcon', '<p>Gần đ&acirc;y mới xin được việc, c&ocirc;ng ty l&agrave;m về Phalcon n&ecirc;n m&igrave;nh cũng d&agrave;nh kh&aacute; nhiều thời gian để t&igrave;m hiểu về n&oacute;. D&ugrave; trước kia học Laravel l&agrave; chủ yếu (nhưng xin việc mấy chỗ đ&oacute; lại từ chối) n&ecirc;n m&igrave;nh dịch b&agrave;i n&agrave;y để t&igrave;m hiểu v&agrave; so s&aacute;nh giữa 2 framework ch&uacute;t chơi. B&agrave;i viết n&agrave;y so s&aacute;nh Laravel 6 v&agrave; Phalcon 3.4. Khi so s&aacute;nh cuối mối phần so s&aacute;nh sẽ c&oacute; tổng điểm để dễ ph&acirc;n biệt.</p>', '<h2><strong>1. C&agrave;i đặt v&agrave; khởi đầu</strong></h2>\r\n\r\n<p>C&agrave;i đặt v&agrave; bắt đầu với Laravel rất dễ, bạn chỉ cần d&ugrave;ng composer để c&agrave;i đặt c&aacute;c g&oacute;i v&agrave; sau đ&oacute; c&oacute; thể bắt đầu một dự &aacute;n mới. Bạn cũng c&oacute; thể copy c&aacute;c file Laravel rồi sau đ&oacute; bắt đầu chỉnh sửa, code&hellip;</p>\r\n\r\n<p>C&agrave;i đặt Phalcon kh&oacute; hơn, thực tế m&igrave;nh đ&atilde; kh&ocirc;ng thể c&agrave;i đặt th&agrave;nh c&ocirc;ng Phalcon 4 v&agrave; phải nhờ mới c&agrave;i được Phalcon 3.4. Đ&oacute; l&agrave; v&igrave; Phalcon kh&ocirc;ng được viết bằng PHP (d&ugrave; bạn sẽ code bằng php 100%). N&oacute; l&agrave; một phần mở rộng của C, bạn sẽ cần c&agrave;i n&oacute; tr&ecirc;n server hoặc local server đẻ c&oacute; thể d&ugrave;ng n&oacute; y&ecirc;u cầu bi&ecirc;n dịch hoặc tải c&aacute;c bản bi&ecirc;n dịch sẵn v&agrave; kich hoạt thủ c&ocirc;ng tr&ecirc;n web server của bạn. Điều n&agrave;y sẽ g&acirc;y nhiều kh&oacute; khăn nếu kh&ocirc;ng th&agrave;nh thạo. Phalcon cũng cung cấp một c&ocirc;ng cụ l&agrave; Phalcon devtools để gi&uacute;p bạn tạo dự &aacute;n v&agrave; chỉnh sửa code.<br />\r\nPhải n&oacute;i th&ecirc;m l&agrave; khi tạo dự &aacute;n, Phalcon thường nhanh hơn Laravel.</p>\r\n\r\n<p>D&oacute; c&agrave;i đặt Phalcon phức tạp hơn n&ecirc;n phần n&agrave;y Laravel thắng.<br />\r\nLaravel : 1<br />\r\nPhalcon: 0</p>\r\n\r\n<h2><strong>2. Cấu tr&uacute;c file</strong></h2>\r\n\r\n<p>Đ&acirc;y l&agrave; phần rất quan trọng với c&aacute;c lập trinh vi&ecirc;n.<br />\r\nLaravel thực sự tổ chức kh&aacute; tốt, nhưng c&oacute; một số vấn đề đ&oacute; l&agrave; phần model được đặt trong folder gốc app, model được d&ugrave;ng trong một số folder kh&aacute;c như controller&hellip; N&oacute; kh&ocirc;ng thực sự clean lắm. Ngo&agrave;i ra, cấu tr&uacute;c file c&oacute; thể tổ trức tốt hơn ở một số phần nữa. V&agrave; Laravel l&agrave; một framework rất nặng do c&oacute; nhiều file mặc định.<br />\r\nPhalcon c&oacute; một ch&uacute;t kh&aacute;c biệt, n&oacute; được c&agrave;i đặt như một ph&acirc;n mở rộng của C tr&ecirc;n m&aacute;y chủ, n&ecirc;n kh&ocirc;ng c&oacute; file n&agrave;o của Phalcon trong dự &aacute;n của bạn, điều n&agrave;y khiến cho cấu tr&uacute;c thư mục thật sự clean v&agrave; đơn giản. Bạn c&oacute; thể d&ugrave;ng c&aacute;c kỹ thuật design pattern của bạn với Phalcon hoặc d&ugrave;ng c&aacute;c c&aacute;c cấu tr&uacute;c mặc định do Phalcon devtools cung cấp. V&igrave; bạn chỉ c&oacute; c&aacute;c file bạn cần trong dự &aacute;n của bạn n&ecirc;n việc upload hay copy, di chuyển n&oacute; sẽ rất đơn giản. B&ecirc;n dưới l&agrave; cấu tr&uacute;c thư mục của Phalcon.</p>\r\n\r\n<p><img alt=\"Laravel và Phalcon\" height=\"298\" src=\"https://i0.wp.com/tapchilaptrinh.vn/wp-content/uploads/2020/07/so-sanh-laravel-va-phalcon-4.png?resize=263%2C298&amp;ssl=1\" width=\"263\" /></p>\r\n\r\n<p>Cấu tr&uacute;c thư muc của Laravel d&agrave;i hơn rất nhiều.</p>\r\n\r\n<p><img alt=\"Laravel và Phalcon\" height=\"487\" sizes=\"(max-width: 403px) 100vw, 403px\" src=\"https://i1.wp.com/tapchilaptrinh.vn/wp-content/uploads/2020/07/so-sanh-laravel-va-phalcon-9-1.png?resize=403%2C487&amp;ssl=1\" srcset=\"https://i1.wp.com/tapchilaptrinh.vn/wp-content/uploads/2020/07/so-sanh-laravel-va-phalcon-9-1.png?w=403&amp;ssl=1 403w, https://i1.wp.com/tapchilaptrinh.vn/wp-content/uploads/2020/07/so-sanh-laravel-va-phalcon-9-1.png?resize=248%2C300&amp;ssl=1 248w\" width=\"403\" /></p>\r\n\r\n<p>D&ugrave; vậy cấu tr&uacute;c n&agrave;y c&oacute; thể kh&ocirc;ng ảnh hưởng nhiều do ta thường chỉ l&agrave;m việc với một v&agrave;i folder, file chứ kh&ocirc;ng d&ugrave;ng hết. Điểm cho phần n&agrave;y l&agrave; Phalcon nhỉnh hơn:<br />\r\nLaravel: 1 &mdash; Phalcon: 1</p>\r\n\r\n<h2><strong>3. Tốc độ v&agrave; hiệu suất</strong></h2>\r\n\r\n<p>So s&aacute;nh một c&aacute;ch đơn giản. PHP l&agrave; ng&ocirc;n ngữ được viết bằng C, một v&agrave;i phần l&agrave; C++, n&oacute; rất nhanh nhưng PHP tự n&oacute; sẽ chậm hơn C/C++ một ch&uacute;t. Laravel được viết bằng PHP, c&ograve;n Phalcon viết bằng C, n&ecirc;n c&oacute; thể n&oacute;i Phalcon nhanh hơn.<br />\r\nĐiểm cho phần n&agrave;y:<br />\r\nLaravel : 1 &mdash; Phalcon: 2</p>\r\n\r\n<h2><strong>4. Độ phức tạp</strong></h2>\r\n\r\n<p>Mất bao l&acirc;u để c&oacute; thể học v&agrave; x&acirc;y dựng một ứng dụng l&agrave; vấn đề quan trọng.<br />\r\nLaravel thực sự rất dễ học, c&aacute;c t&agrave;i liệu của Laravel v&agrave; hướng dẫn của n&oacute; thất sự rất dầy đủ, chi tiết, dễ tiếp cận. Laravel rất dễ hiểu ngay cả với người mới.<br />\r\nPhalcon cũng c&oacute; c&aacute;c t&agrave;i liệu tốt tr&ecirc;n web của n&oacute;. Nhưng thực sự n&oacute; kh&aacute; phức tap cả với người d&ugrave;ng đ&atilde; c&oacute; nền tảng chứ chưa n&oacute;i đến người mới. Phalcon cũng c&oacute; video hướng dẫn nhưng kh&ocirc;ng nhiều như Laravel.<br />\r\nPhần n&agrave;y Laravel được đ&aacute;nh gi&aacute; cao hơn. Tuy nhi&ecirc;n nếu đ&atilde; th&agrave;nh thạo, Laravel hay framework n&agrave;o đ&oacute; d&ugrave;ng MCV th&igrave; việc chuyển qua Phalcon sẽ dễ hơn hẳn.</p>\r\n\r\n<p>Laravel: 2 &mdash; Phalcon: 2</p>\r\n\r\n<h2><strong>5. Kiến tr&uacute;c</strong></h2>\r\n\r\n<p>Hầu hết c&aacute;c framework hiện nay đều d&ugrave;ng kiến tr&uacute;c MVC (model &ndash; view &ndash; controller) v&igrave; n&oacute; dễ sử dụng v&agrave; được chấp nhận rộng r&atilde;i trong cộng đồng lập tr&igrave;nh.</p>\r\n\r\n<p>Laravel cũng sử dụng MVC v&agrave; sử dụng n&oacute; rất tốt. Tuy nhi&ecirc;n khi ứng dụng của bạn ng&agrave;y c&agrave;ng ph&aacute;t triển lớn hơn v&agrave; bạn gặp vấn đề với MVC, l&uacute;c n&agrave;y sẽ cần tới HMVC (Hỉearchical MVC), đ&acirc;y l&agrave; một m&ocirc; h&igrave;nh mạnh mẽ, được cải tiến từ MVC để chuy&ecirc;n d&ugrave;ng cho c&aacute;c hệ thống lớn. Gải sử bạn c&oacute; một trang web với 2 phần blog v&agrave; diễn đ&agrave;n, HMVC cho ph&eacute;p chia 2 phần n&agrave;y th&agrave;nh c&aacute;c th&agrave;nh phần MVC để bạn c&oacute; thể ph&aacute;t triển ri&ecirc;ng nhưng vẫn d&ugrave;ng đươc chung với nhau.<br />\r\nPhalcon cho ph&eacute;p triển khau kiến tr&uacute;c như vậy trong n&oacute; c&ograve;n Laravel th&igrave; hạn chế hơn. N&ecirc;n phần n&agrave;y Phalcon thắng.<br />\r\nLaravel : 2 &mdash; Phalcon: 3.</p>\r\n\r\n<h2><strong>6. Kết nối cơ sở dữ liệu</strong></h2>\r\n\r\n<p>Cơ sở dữ liệu l&agrave; một phần quan trọng của mọi ứng dụng. V&agrave; cả Laravel v&agrave; Phalcon đều cung cấp c&aacute;c giải ph&aacute;p rất tốt. Cũng d&ugrave;ng ORM (Object relarional mapping) để tải hoặc lưu dữ liệu dễ d&agrave;ng.<br />\r\nTuy nhi&ecirc;n Laravel c&oacute; Eloquent để tận dụng c&aacute;c model khi l&agrave;m việc với cơ sở dữ liệu, Phalcon cũng c&oacute; c&ocirc;ng cụ tương tự nhưng thực sự Eloquent dễ d&ugrave;ng hơn.<br />\r\nC&oacute; một c&ocirc;ng cụ tương tự ORM l&agrave; ODM (Object document maping) thường d&ugrave;ng cho c&aacute;c CSDL NoSQL như MongoDB. Tiếc l&agrave; Laravel kh&ocirc;ng hộ trợ n&oacute;, để d&ugrave;ng, bạn cần c&agrave;i them c&aacute;c g&oacute;i mở rộng. Phalcon th&igrave; c&oacute; hỗ trợ. Vậy n&ecirc;n điểm sau phần n&agrave;y l&agrave;:<br />\r\nLaravel : 3 &mdash; Phalcon: 4.</p>\r\n\r\n<h2><strong>7. Routing v&agrave; Controller</strong></h2>\r\n\r\n<p>Với web app th&igrave; mọi vấn đề điều li&ecirc;n quan đến routing. Cả 2 frameworks đều cung cấp c&aacute;c phương thức định tuyến v&agrave; c&oacute; khả năng xử l&yacute; c&aacute;c HTTP method phổ biến như POST, GET,&hellip;.</p>\r\n\r\n<p>Định tuyến trong laravel rất đơn giản, c&oacute; thể n&oacute;i laravel biết nhưng g&igrave; bạn muốn v&agrave; cung cấp cho bạn những g&igrave; cần thiết để định tuyến trở n&ecirc;n dễ d&agrave;ng.<br />\r\nPhalcon th&igrave; kh&oacute; định tuyến hơn, một vấn đề thường gặp với định tuyến với Phalcon l&agrave; thiếu c&aacute;c tham số t&ugrave;y chọn, n&ecirc;n đ&ocirc;i khi bạn cần định tuyến 2 lần, một với tham số v&agrave; 1 kh&ocirc;ng c&oacute; n&oacute;.</p>\r\n\r\n<p>Cả hai tham số đều hỗ trợ c&aacute;c tiền tố v&agrave; nh&oacute;m route. Tuy nhi&ecirc;n Laravel hỗ trợ định tuyến cả với t&ecirc;n miền phụ, c&ograve;n Phalcon th&igrave; kh&ocirc;ng.</p>\r\n\r\n<p>N&ecirc;n về phần định tuyến th&igrave; Laravel đ&atilde; thắng. Điểm sau c&aacute;c phần l&agrave;:<br />\r\nLaravel: 4 &mdash; Phalcon: 4</p>\r\n\r\n<h2><strong>8. Template engines</strong></h2>\r\n\r\n<p>Khi n&oacute;i tới một ứng dụng th&igrave; phần front-end l&agrave; một trong những phần quan trọng nhất.<br />\r\nTemplate engines l&agrave; c&aacute;c c&ocirc;ng cụ gi&uacute;p hỗ trợ bạn kết n&oacute;i back-end với HTML/CSS v&agrave; đối khi cả JS để n&acirc;ng cao trải nghiệm cho ứng dụng của bạn.<br />\r\nLaravel cung cấp một c&ocirc;ng cụ mạnh mẽ l&agrave; Blade, c&ograve;n Phalcon sử dụng Volt, một ph&aacute;t triển từ Twig( từ Symfony) nhưng đơn giản hơn v&agrave; được bi&ecirc;n dịch trước.<br />\r\nCả Blade v&agrave; Volt đều tốt nhưng Blade tiện dụng hơn do c&aacute;c chức năng v&agrave; phương thức c&oacute; sẵn. C&ograve;n Volt th&igrave; nhanh hơn do c&oacute; được bi&ecirc;n dịch trước.<br />\r\nBlade cũng c&oacute; thể lưu trong cache để nhanh hơn nhưng bạn cần thiết lập để Laravel l&agrave;m n&oacute;.<br />\r\nThật ta tất cả những g&igrave; ta cần từ template engines l&agrave; gi&uacute;p ch&uacute;ng ta x&acirc;y dựng front-ent nhanh ch&oacute;ng v&agrave; cả volt v&agrave; blade đều l&agrave;m tốt nhưng volt th&igrave; cleaner hơn blade. Điểm phần n&agrave;y cho Phalcon:<br />\r\nTổng điểm: Laravel: 4 &mdash; Phalcon: 5.</p>\r\n\r\n<h2><strong>9. i18n</strong></h2>\r\n\r\n<p>Một ứng dụng c&oacute; thể cần quốc tế h&oacute;a, hỗ trợ nhiều ng&ocirc;n ngữ v&agrave; nếu kh&ocirc;ng c&oacute; c&ocirc;ng cụ rất kh&oacute; để l&agrave;m điều đ&oacute;.<br />\r\nNhiều ứng dụng c&oacute; thể kh&ocirc;ng cần nhưng với frameworks vẫn rất cần hỗ trợ. V&agrave; cả hai đều hỗ trợ tốt việc n&agrave;y.<br />\r\nTổng điểm: Laravel: 5 &mdash; Phalcon: 6.</p>\r\n\r\n<h2><strong>10. Security</strong></h2>\r\n\r\n<p>Bảo mật l&agrave; thứ sẽ thay đổi cuộc sống của bạn, t&ugrave;y v&agrave;o việc bạn l&agrave;m n&oacute; tốt hay tệ.<br />\r\nKhi viết một ứng dụng, bạn cần c&oacute; tr&aacute;ch nhiệm đảm bảo kh&ocirc;ng ai c&oacute; thể gian lận v&agrave; sử dụng chức năng của ứng dụng theo những c&aacute;ch ngo&agrave;i dự định.<br />\r\nCả Laravel v&agrave; Phalcon đều l&agrave;m rất tốt việc n&agrave;y, ch&uacute;ng đều c&oacute; thể gi&uacute;p ph&ograve;ng thủ trước hầu hết c&aacute;c cuộc tấn c&ocirc;ng, đặc biệt l&agrave; c&aacute;c loại tấn c&ocirc;ng phổ biến như XSS v&agrave; ti&ecirc;m SQL.<br />\r\nTuy nhi&ecirc;n, Laravel cung cấp một c&aacute;ch tốt hơn để d&ugrave;ng CSRF token c&ograve;n Phalcon sẽ kh&oacute; hơn v&agrave; cần thiết lập n&oacute;.<br />\r\nN&ecirc;n Laravel được điểm lần n&agrave;y.<br />\r\nTổng điểm: Laravel: 6 &mdash; Phalcon: 6</p>\r\n\r\n<h2><strong>11. Middleware</strong></h2>\r\n\r\n<p>Bạn cần l&agrave;m g&igrave; khi bạn muốn chạy một c&ocirc;ng việc n&agrave;o đ&oacute; mỗi khi người d&ugrave;ng thực hiện một request n&agrave;o đ&oacute; tới ứng dụng của bạn? Dĩ nhi&ecirc;n đ&oacute; l&agrave; Middleware.<br />\r\nMiddleware rất quan trọng trong c&aacute;c ứng dụng phức tạp. V&agrave; phần n&agrave;y Laravel thắng v&igrave; Phalcon kh&ocirc;ng hỗ trợ middleware. Nếu muốn d&ugrave;ng, bạn cần thiết lập n&oacute; trong phương thức&nbsp;<em>__contruct()&nbsp;</em>của controller.<br />\r\nTổng điểm: Laravel: 7 &mdash; Phalcon: 6.</p>\r\n\r\n<h2><strong>12. API Restful</strong></h2>\r\n\r\n<p>Một số lập tr&igrave;nh vi&ecirc;n sử dụng back-end chỉ để d&ugrave;ng cho c&aacute;c API v&agrave; để thiết kế c&aacute;c hệ thống Restful API.<br />\r\nLaravel hỗ trợ việc n&agrave;y, v&agrave; cung cấp c&aacute;c c&ocirc;ng cụ để l&agrave;m tố gi&uacute;p bạn thực hiện n&oacute; bao gồm cả axios v&agrave; hỗ trợ SCRF.<br />\r\nVới Phalcon bạn cần thiết lập respone của API controller, chuyển đổi n&oacute; th&agrave;nh dạng JSON (Laravel mặc định l&agrave;m điều đ&oacute;) v&agrave; cập nhật CSRF token để request sau kh&ocirc;ng bị lỗi.<br />\r\nN&ecirc;n điểm phần n&agrave;y cho Laravel:<br />\r\nTổng điểm: Laravel: 8 &mdash; Phalcon: 6.</p>\r\n\r\n<h2><strong>13. T&ugrave;y biến</strong></h2>\r\n\r\n<p>Khi mọi thứ ph&aacute;t triển phức tạp hơn, cao hơn v&agrave; bạn muốn t&ugrave;y biến framework của bạn. Điều n&agrave;y th&igrave; Phalcon hỗ trợ tốt hơn với Zephir, một ng&ocirc;n ngữ lập tr&igrave;nh cấp cao để viết c&aacute;c phần mở rộng cho PHP cho c&aacute;c lập tr&igrave;nh vi&ecirc;n PHP m&agrave; kh&ocirc;ng cần kiến thức về C.<br />\r\nN&ecirc;n khi bạn t&ugrave;y biến Phalcon bạn vẫn c&oacute; thể đảm bảo tốc độ của n&oacute;, c&ograve;n khi bạn t&ugrave;y biến Laravel, bạn cần d&ugrave;ng PHP, điều n&agrave;y khiến cho c&oacute; th&ecirc;m nhiều t&aacute;c vụ được chạy trong ứng dụng v&agrave; l&agrave;m tốc độ giảm.<br />\r\nPhalcon thắng trong việc t&ugrave;y biến.<br />\r\nTổng điểm: Laravel: 8 &mdash; Phalcon: 7.</p>\r\n\r\n<h2><strong>14. Cộng đồng</strong></h2>\r\n\r\n<p>Điều g&igrave; xảy ra khi bạn gặp kh&oacute; khăn với ứng dụng của bạn, bạn t&igrave;m kiếm tr&ecirc;n google v&agrave; thường th&igrave; kết quả sẽ dẫn đến Stackoverflow. Đ&oacute; l&agrave; l&uacute;c cộng đồng quan trọng. Một cộng đồng lớn sẽ l&agrave;m vấn đề của bạn trở l&ecirc;n nhỏ hơn. Khi c&oacute; cộng đồng lớn, nhiều khả năng vấn đề của bạn đ&atilde; c&oacute; người gặp trước đ&acirc;y v&agrave; khi đ&oacute; c&oacute; thể sẽ c&oacute; lời giải.<br />\r\nR&otilde; r&agrave;ng cộng đồng Laravel lớn hơn. N&ecirc;n Laravel thắng.<br />\r\nTổng điểm: Laravel: 9 &mdash; Phalcon: 7.</p>\r\n\r\n<h2><strong>15. Dễ sử dụng</strong></h2>\r\n\r\n<p>Một lần nữa đ&acirc;y l&agrave; điều hay được nhắc đến về Laravel. Rất dễ bắt đầu với Laravel, n&oacute; hỗ trợ những c&aacute;ch code hay, đơn giản v&agrave; dễ học.<br />\r\nPhalcon th&igrave; y&ecirc;u cầu lập tr&igrave;nh vi&ecirc;n cấp cao hơn v&agrave; họ cảm thấy Laravel qu&aacute;&nbsp;<em>magic</em>&nbsp;với họ (<em>magic</em>&nbsp;l&agrave; thuật ngữ d&ugrave;ng khi m&ocirc;t tả việc người d&ugrave;ng kh&ocirc;ng thấy những việc framework l&agrave;m cho họ ).<br />\r\nN&ecirc;n một lần nữa Laravel thắng.<br />\r\nTổng điểm: Laravel: 10 &mdash; Phalcon: 7.</p>\r\n\r\n<h2><strong>16. Coding style</strong></h2>\r\n\r\n<p>Đ&acirc;y l&agrave; quan điểm kh&aacute;c c&aacute; nh&acirc;n nhưng m&igrave;nh thấy c&aacute;ch code của Phalcon thường &ldquo;clean&rdquo; hơn Laravel. V&agrave; c&aacute;ch code của Phalcon cũng gi&uacute;p người kh&aacute;c dễ đọc hơn khi lần đầu đọc code của bạn.<br />\r\nC&aacute;c pattern Phalcon cung cấp cũng cleaner hơn trong c&aacute;c file config v&agrave; cả c&aacute;c thứ kh&aacute;c.<br />\r\nTổng điểm: Laravel: 10 &mdash; Phalcon: 8.</p>\r\n\r\n<h2><strong>17. Deployment</strong></h2>\r\n\r\n<p>Điều cuối c&ugrave;ng cần l&agrave;m với một ứng dụng l&agrave; l&agrave;m cho n&oacute; hoạt động, nếu bạn kh&ocirc;ng l&agrave;m n&oacute; th&igrave; giống như l&agrave; bạn kh&ocirc;ng l&agrave;m g&igrave; cả. Đ&acirc;y l&agrave; một trong những bước quan trọng nhất.</p>\r\n\r\n<p>Laravel được hỗ trợ bởi 90% c&aacute;c hosting service , n&ecirc;n bạn kh&ocirc;ng cần thực hiện nhiều t&ugrave;y chỉnh v&agrave; thực hiện những việc khi bạn c&agrave;i đặt ứng dụng tr&ecirc;n hosting service. Bạn chỉ cần tải n&oacute; l&ecirc;n.<br />\r\nDeploy một ứng dụng Phalcon kh&ocirc;ng kh&oacute; hơn Laravel , đ&ocirc;i khi c&oacute; thể dễ d&agrave;ng hơn nếu bạn c&oacute; thể t&igrave;m thấy một v&agrave;o m&aacute;y chủ c&oacute; hỗ trợ c&agrave;i đặt v&agrave;i tiện &iacute;ch mở r&ocirc;ng của Phalcon trừ khi bạn cần d&ugrave;ng VPS để triển khai ứng dụng của bạn, bao gồm cả việc c&agrave;i đặt , thiết lập t&ugrave;y chỉnh cần thiết v&agrave; bi&ecirc;n dịch.<br />\r\nNh&igrave;n chung Deploy ứng dụng Phalcon khiến bạn mất nhiều thời gian v&agrave; tiền bạc hơn Laravel. N&ecirc;n Laravel được điểm.<br />\r\nTổng điểm: Laravel: 11 &mdash; Phalcon: 8.</p>\r\n\r\n<h2><strong>18. T&agrave;i nguy&ecirc;n Front-end</strong></h2>\r\n\r\n<p>Phần n&agrave;y kh&ocirc;ng thực sự l&agrave; một phần của framework nhưng cũng n&ecirc;n nhắc tới.<br />\r\nD&ugrave;ng Laravel rất dễ chịu khi c&oacute; nhiều hỗ trợ như Webpack . Laravel cũng hỗ trợ Vue v&agrave; React c&ugrave;ng với việc c&oacute; thể d&ugrave;ng ngay Bootstrap.<br />\r\nPhalcon th&igrave; hầu như chẳng c&oacute; mấy t&agrave;i nguy&ecirc;n về front-end&nbsp;.<br />\r\nN&ecirc;n d&ugrave; kh&ocirc;ng t&iacute;nh điểm th&igrave; Laravel vẫn thắng lần n&agrave;y.</p>\r\n\r\n<h2><strong>Kết luận</strong></h2>\r\n\r\n<p>Tổng kết lại với điểm số Laravel: 11 &mdash; Phalcon: 8. Laravel đ&atilde; thắng. Nhưng sự kh&aacute;c biệt điểm số kh&ocirc;ng qu&aacute; lớn. R&otilde; r&agrave;ng cả Laravel v&agrave; Phalcon c&oacute; ưu điểm ri&ecirc;ng, tuy nhi&ecirc;n với một ch&uacute;t &iacute;t trải nghiệm cả 2 framework n&agrave;y, m&igrave;nh nhận thấy nếu biết về 1 framework th&igrave; việc chuyển qua framework kia kh&aacute; dễ d&agrave;ng trường hợp của m&igrave;nh l&agrave; từ Laravel sang Phalcon).<br />\r\nTr&ecirc;n đ&acirc;y chỉ c&oacute; một &iacute;t trải nhiệm của m&igrave;nh, đa phần c&ograve;n lại l&agrave; được dịch từ nguồn dưới, mọi người tham khảo tại link nh&eacute;.<br />\r\n<a href=\"https://dev.to/adnanbabakan/a-comparison-between-laravel-and-phalcon-2471\" rel=\"noreferrer noopener\" target=\"_blank\">https://dev.to/adnanbabakan/a-comparison-between-laravel-and-phalcon-2471</a></p>\r\n\r\n<p><em>Author: Dư Thanh Ho&agrave;ng</em></p>', 'So sánh giữa Laravel và Phalcon', 'laravel', 1, 'la80.png', 9, NULL, NULL);
INSERT INTO `tbl_news_post` (`news_post_id`, `news_post_title`, `news_post_slug`, `news_post_desc`, `news_post_content`, `news_post_meta`, `news_post_keyword`, `news_post_status`, `news_post_image`, `news_cate_id`, `created_at`, `updated_at`) VALUES
(10, 'Xây dựng crawler siêu đơn giản với Java', 'xay-dung-crawler-sieu-don-gian-voi-java', '<p>Crawler l&agrave; một c&ocirc;ng cụ gi&uacute;p thu thập dữ liệu, th&ocirc;ng tin từ c&aacute;c trang web kh&aacute;c nhau. Một trong những v&iacute; dụ về crawler m&agrave; ch&uacute;ng ta gặp hằng ng&agrave;y l&agrave; Google. Google l&agrave; một hệ thống c&oacute; nhiều m&aacute;y chủ c&oacute; thể crawling rất nhiều trang web tr&ecirc;n Internet, từ đ&oacute; ch&uacute;ng ta c&oacute; thể t&igrave;m kiếm nội dung những trang web m&agrave; ch&uacute;ng ta cần dựa v&agrave;o từ kho&aacute; cụ thể.</p>', '<h2><strong>Giới thiệu</strong></h2>\r\n\r\n<p>Crawler l&agrave; một c&ocirc;ng cụ gi&uacute;p thu thập dữ liệu, th&ocirc;ng tin từ c&aacute;c trang web kh&aacute;c nhau. Một trong những v&iacute; dụ về crawler m&agrave; ch&uacute;ng ta gặp hằng ng&agrave;y l&agrave; Google. Google l&agrave; một hệ thống c&oacute; nhiều m&aacute;y chủ c&oacute; thể crawling rất nhiều trang web tr&ecirc;n Internet, từ đ&oacute; ch&uacute;ng ta c&oacute; thể t&igrave;m kiếm nội dung những trang web m&agrave; ch&uacute;ng ta cần dựa v&agrave;o từ kho&aacute; cụ thể. Hoặc l&agrave; những trang web so s&aacute;nh gi&aacute; cả từ nhiều nguồn kh&aacute;c nhau (<a href=\"http://websosanh.vn/\" rel=\"noreferrer noopener\" target=\"_blank\">websosanh.vn</a>), trang tin b&aacute;o tổng hợp (<a href=\"http://baomoi.com/\" rel=\"noreferrer noopener\" target=\"_blank\">baomoi.com</a>) v&agrave; nhiều v&iacute; dụ kh&aacute;c m&agrave; m&igrave;nh kh&ocirc;ng thể liệt k&ecirc; hết ở đ&acirc;y.</p>\r\n\r\n<p>Ch&uacute;ng ta c&oacute; thể tự viết một crawler đơn giản nhằm thu gom một số dữ liệu cơ bản n&agrave;o đ&oacute;. Khi hướng dẫn học vi&ecirc;n học module 2 (Advance Programming with Java) tại CodeGym, m&igrave;nh thường giao b&agrave;i tập x&acirc;y dựng c&ocirc;ng cụ crawler n&agrave;y. V&iacute; dụ thu thập gi&aacute; bất động sản tr&ecirc;n c&aacute;c trang rao vặt hoặc gi&aacute; sản phẩm tr&ecirc;n c&aacute;c trang thương mại điện tử. Qua b&agrave;i viết n&agrave;y, m&igrave;nh sẽ hướng dẫn lại c&aacute;c bạn l&agrave;m b&agrave;i tập n&agrave;y với ng&ocirc;n ngữ lập tr&igrave;nh Java.</p>\r\n\r\n<h4><strong>Một số y&ecirc;u cầu cơ bản để thực hiện b&agrave;i tập n&agrave;y:</strong></h4>\r\n\r\n<ul>\r\n	<li>Nắm vững c&uacute; ph&aacute;p ng&ocirc;n ngữ lập tr&igrave;nh Java</li>\r\n	<li>Sử dụng được ng&ocirc;n ngữ đ&aacute;nh dấu HTML</li>\r\n	<li>Sử dụng được biểu thức ch&iacute;nh quy (regular expression) &mdash; c&ograve;n được gọi l&agrave; regex</li>\r\n	<li>Một &iacute;t hiểu biết về HTTP (Giao thức được sử dụng để truy cập c&aacute;c trang web qua Internet)</li>\r\n	<li>Hiểu cơ bản phương ph&aacute;p lập tr&igrave;nh hướng đối tượng</li>\r\n	<li>Hiểu cơ bản về design pattern</li>\r\n</ul>\r\n\r\n<p><em><strong>Ghi ch&uacute;:</strong>&nbsp;Tr&ecirc;n thực tế, c&oacute; nhiều thư viện hỗ trợ ch&uacute;ng ta l&agrave;m crawler hiệu quả hơn c&aacute;ch l&agrave;m trong b&agrave;i n&agrave;y. Với mục đ&iacute;ch học l&agrave; ch&iacute;nh, m&igrave;nh sẽ kh&ocirc;ng sử dụng c&aacute;c thư viện đấy m&agrave; sẽ tự x&acirc;y dựng lấy, c&aacute;c bạn nh&eacute;!</em></p>\r\n\r\n<h2><strong>Thiết kế chương tr&igrave;nh</strong></h2>\r\n\r\n<p>Ch&uacute;ng ta sẽ x&acirc;y dựng một c&ocirc;ng cụ c&oacute; thể thu thập được tin tức bất động sản đang rao (bao gồm b&aacute;n v&agrave; cho thu&ecirc;) tại c&aacute;c website sau:</p>\r\n\r\n<ul>\r\n	<li><a href=\"https://batdongsan.com.vn/\" rel=\"noreferrer noopener\" target=\"_blank\">https://batdongsan.com.vn/</a></li>\r\n	<li><a href=\"https://batdongsan24h.com.vn/\" rel=\"noreferrer noopener\" target=\"_blank\">https://batdongsan24h.com.vn/</a></li>\r\n	<li><a href=\"https://nhadat24h.net/\" rel=\"noreferrer noopener\" target=\"_blank\">https://nhadat24h.net/</a></li>\r\n	<li><a href=\"https://diendanbatdongsan.vn/\" rel=\"noreferrer noopener\" target=\"_blank\">https://diendanbatdongsan.vn/</a></li>\r\n</ul>\r\n\r\n<h2><strong>M&ocirc; tả dữ liệu</strong></h2>\r\n\r\n<p>Khai b&aacute;o class c&oacute; t&ecirc;n l&agrave;&nbsp;<code>ClassifiedAd</code>&nbsp;để m&ocirc; tả th&ocirc;ng tin thu thập được từ c&aacute;c trang web. Bao gồm:&nbsp;<em>ti&ecirc;u đề, loại tin rao, diện t&iacute;ch, gi&aacute;, m&ocirc; tả chi tiết, h&igrave;nh ảnh (link).</em></p>\r\n\r\n<p>Sau khi khảo s&aacute;t nội dung c&aacute;c trang web, ch&uacute;ng ta thấy rằng:</p>\r\n\r\n<ul>\r\n	<li>C&aacute;c tin c&oacute; thể hiển thị gi&aacute; tổng (t&iacute;nh tr&ecirc;n to&agrave;n bộ diện t&iacute;ch) hoặc gi&aacute; theo m&eacute;t vu&ocirc;ng. V&igrave; vậy cần khai b&aacute;o những class sau để m&ocirc; tả loại gi&aacute; được hiển thị:&nbsp;<code>enum TypePrice</code>,&nbsp;<code>class Price</code>.</li>\r\n	<li>Đơn vị tiền c&oacute; thể l&agrave; &ldquo;triệu đồng&rdquo; hoặc &ldquo;tỷ đồng&rdquo;. V&igrave; vậy cần thuộc t&iacute;nh&nbsp;<code>unit</code>&nbsp;tương ứng trong&nbsp;<code>class Price</code>. Gi&aacute; trị được liệt k&ecirc; trong&nbsp;<code>enum Unit</code>&nbsp;để x&aacute;c định đơn vị tiền tệ.</li>\r\n	<li>C&aacute;c tin rao được ph&acirc;n loại th&agrave;nh: b&aacute;n căn hộ, b&aacute;n nh&agrave; đất, b&aacute;n biệt thự, cho thu&ecirc;,&hellip;&nbsp;<code>enum TypeAd</code>&nbsp;được khai b&aacute;o cho mục đ&iacute;ch n&agrave;y.</li>\r\n</ul>\r\n\r\n<pre>\r\nenum TypePrice {\r\n    PRICE_PER_M2,   // loại gi&aacute; dựa tr&ecirc;n m2\r\n    TOTAL_PRICE     // gi&aacute; to&agrave;n bộ\r\n}\r\nenum Unit {\r\n    MILLION_VND,\r\n    BILLION_VND,\r\n}\r\nclass Price {\r\n    private Float price;\r\n    private TypePrice typePrice;\r\n		private Unit unit;\r\n}\r\nenum TypeAd {\r\n		...,\r\n    SELL,\r\n    RENTAL,\r\n    OTHERS\r\n}\r\nclass ClassifiedAd {\r\n    private String title;       // ti&ecirc;u đề\r\n    private TypeAd typeAd;      // loại tin\r\n    private Price price;        // gi&aacute;\r\n    private Float acreage;      // diện t&iacute;ch\r\n    private String description; // m&ocirc; tả\r\n}</pre>\r\n\r\n<h2><strong>Thiết kế tổng quan</strong></h2>\r\n\r\n<p>Qua khảo s&aacute;t c&aacute;c trang web m&agrave; cần thu thập tin, ch&uacute;ng ta c&oacute; thể x&aacute;c định thứ tự c&aacute;c bước để thu thập tin như sau:</p>\r\n\r\n<ol>\r\n	<li>Truy cập trang chủ, liệt k&ecirc; danh s&aacute;ch những danh mục tin (v&iacute; dụ: chung cư, nh&agrave; đất, biệt thự,&hellip;)</li>\r\n	<li>Truy cập c&aacute;c danh mục tin để liệt k&ecirc; c&aacute;c tin đang rao</li>\r\n	<li>Truy cập trang chi tiết của từng tin để lấy c&aacute;c th&ocirc;ng tin chi tiết</li>\r\n</ol>\r\n\r\n<p>Ch&uacute;ng ta sẽ &aacute;p dụng pattern&nbsp;<code>Template Method</code>&nbsp;để chuyển c&aacute;c bước tr&ecirc;n th&agrave;nh một d&atilde;y c&aacute;c bước xử l&yacute; chung cho mỗi trang web.</p>\r\n\r\n<pre>\r\npublic abstract class Crawler {\r\n// bước 1\r\n    abstract Iterable&lt;Subpage&gt; inspectHomepage();\r\n		\r\n// bước 2\r\n    abstract Iterable&lt;DetailPage&gt; inspectSubpage(Subpage subpage);\r\n		\r\n// bước 3\r\n    abstract ClassifiedAd inspectDetailPage(DetailPage detailPage);\r\n// Đ&acirc;y l&agrave; thao t&aacute;c chung cho tất cả c&aacute;c trang web m&agrave; ch&uacute;ng ta muốn thu thập tin\r\n    Iterable&lt;ClassifiedAd&gt; inspect() {\r\n        List&lt;ClassifiedAd&gt; classifiedAds = new ArrayList&lt;&gt;();\r\n        Iterable&lt;Subpage&gt; subpages = inspectHomepage();\r\n        for (Subpage subpage: subpages) {\r\n            Iterable&lt;DetailPage&gt; detailPages = inspectSubpage(subpage);\r\n            for (DetailPage detailPage: detailPages) {\r\n                ClassifiedAd classifiedAd = inspectDetailPage(detailPage);\r\n                classifiedAds.add(classifiedAd);\r\n            }\r\n        }\r\n        return classifiedAds;\r\n    }\r\n}</pre>\r\n\r\n<p>Với mỗi trang web cụ thể, ch&uacute;ng ta c&oacute; một c&aacute;ch thu thập kh&aacute;c nhau (v&igrave; giao diện mỗi trang kh&aacute;c nhau). Trong tương lai, ch&uacute;ng ta c&oacute; thể bổ sung những trang web kh&aacute;c hoặc thay đổi c&aacute;ch thức thu thập. V&igrave; thế ch&uacute;ng ta sẽ x&acirc;y dựng c&aacute;c class phục vụ việc crawle cho từng trang web cụ thể theo thiết kế như sau:</p>\r\n\r\n<p><img alt=\"\" height=\"161\" src=\"https://i1.wp.com/codegym.vn/wp-content/uploads/2020/04/xay-dung-crawler-sieu-don-gian-voi-java-1.png?resize=807%2C174&amp;ssl=1\" srcset=\"https://i1.wp.com/codegym.vn/wp-content/uploads/2020/04/xay-dung-crawler-sieu-don-gian-voi-java-1.png?resize=807%2C174&amp;ssl=1 807w, https://codegym.vn/wp-content/uploads/2020/04/xay-dung-crawler-sieu-don-gian-voi-java-1-480x103.png 480w\" width=\"745\" /></p>\r\n\r\n<p>Sơ đồ lớp (class diagram) chương tr&igrave;nh Crawler</p>\r\n\r\n<p>Ở thiết kế tr&ecirc;n, ch&uacute;ng ta &aacute;p dụng kiến thức về&nbsp;<code>abstract class</code>&nbsp;trong lập tr&igrave;nh hướng đối tượng nhằm đảm bảo c&oacute; thể dễ d&agrave;ng mở rộng c&aacute;c trang web muốn thu thập. Khi cần bổ sung trang mới, ch&uacute;ng ta c&oacute; thể&nbsp;<code>implement</code>&nbsp;th&ecirc;m Crawler m&agrave; kh&ocirc;ng phải sửa đổi ở khung thiết kế v&agrave; luồng thực thi của chương tr&igrave;nh. Cuối c&ugrave;ng l&agrave; class&nbsp;<code>MySimpleCrawler</code>&nbsp;chứa đoạn m&atilde; khởi động chương tr&igrave;nh.</p>\r\n\r\n<p>B&acirc;y giờ, ch&uacute;ng ta viết m&atilde; kiểm tra xem &yacute; tưởng thiết kế tr&ecirc;n c&oacute; thể thực hiện được chưa nh&eacute;! T&iacute;nh năng ban đầu sẽ l&agrave; khởi động chương tr&igrave;nh v&agrave; lấy những tin rao ở c&aacute;c trang&nbsp;<a href=\"https://batdongsan.com.vn/\" rel=\"noreferrer noopener\" target=\"_blank\">batdongsan.com.vn</a>.</p>\r\n\r\n<p><em>Ghi ch&uacute;: Ở c&ocirc;ng cụ si&ecirc;u đơn giản n&agrave;y, ch&uacute;ng ta chưa t&iacute;nh đến việc l&agrave;m thế n&agrave;o để tối ưu thời gian chạy, lấy nhiều tin ở c&aacute;c trang tiếp theo, l&ecirc;n lịch chạy để lu&ocirc;n cập nhật được tin mới nhất, hoặc thậm ch&iacute; l&agrave; cấu h&igrave;nh thời gian ngắt qu&atilde;ng giữa c&aacute;c lần thu thập (để tr&aacute;nh trường hợp một số trang kh&ocirc;ng cho ph&eacute;p tạo request li&ecirc;n tục trong khoảng thời gian nhất định n&agrave;o đ&oacute;).</em></p>\r\n\r\n<h2><strong>Start coding!</strong></h2>\r\n\r\n<h2><strong>1. X&aacute;c định c&aacute;c nội dung cần thu thập</strong></h2>\r\n\r\n<p>Để lấy được nội dung trang web, ch&uacute;ng ta c&oacute; thể sử dụng một t&iacute;nh năng tạo HTTP request đơn giản m&agrave; Java cung cấp l&agrave; class&nbsp;<code>URL</code>.</p>\r\n\r\n<p>Để tạo một request đến trang web cần lấy nội dung, ch&uacute;ng ta sử dụng h&agrave;m dưới đ&acirc;y:</p>\r\n\r\n<pre>\r\nprivate static String getContentFrom(String link) throws IOException {\r\n        // Gởi HTTP request v&agrave; nhận về kết quả l&agrave; chuỗi c&aacute;c thẻ HTML\r\n        URL url = new URL(link);\r\n        Scanner scanner = new Scanner(new InputStreamReader(url.openStream()));\r\n        scanner.useDelimiter(&quot;\\\\\\\\Z&quot;);\r\n        String content = scanner.next();\r\n        scanner.close();\r\n        // xo&aacute; c&aacute;c k&yacute; tự ngắt d&ograve;ng (xuống d&ograve;ng)\r\n        content = content.replaceAll(&quot;\\\\\\\\R&quot;, &quot;&quot;);\r\n        return content;\r\n    }</pre>\r\n\r\n<p>Khi request th&agrave;nh c&ocirc;ng, c&aacute;c trang web thường trả về c&aacute;c thẻ HTML. Nếu nơi nhận l&agrave; tr&igrave;nh duyệt th&igrave; c&aacute;c thẻ HTML n&agrave;y sẽ được dựng h&igrave;nh (render) th&agrave;nh giao diện của trang web. C&ograve;n c&ocirc;ng cụ crawler của ch&uacute;ng ta chỉ xem đấy l&agrave; c&aacute;c chuỗi k&yacute; tự. Việc ch&uacute;ng ta cần l&agrave;m l&agrave; t&igrave;m những vị tr&iacute; chứa th&ocirc;ng tin cần thiết b&ecirc;n trong chuỗi ấy. Biểu thức ch&iacute;nh quy (regex) c&oacute; thể được &aacute;p dụng trong trường hợp n&agrave;y.</p>\r\n\r\n<p>Như vậy, ch&uacute;ng ta cần l&agrave;m hai bước sau để lấy được th&ocirc;ng tin trong trang web:</p>\r\n\r\n<ul>\r\n	<li><strong>Bước 1</strong>: X&aacute;c định vị tr&iacute; th&ocirc;ng tin cần lấy trong chuỗi HTML để t&igrave;m được quy tắc đ&aacute;nh dấu</li>\r\n	<li><strong>Bước 2</strong>: Dựa v&agrave;o quy tắc đ&aacute;nh dấu tr&ecirc;n, ch&uacute;ng ta x&aacute;c định biểu thức ch&iacute;nh quy ph&ugrave; hợp để lọc được chuỗi th&ocirc;ng tin cần thiết</li>\r\n</ul>\r\n\r\n<p>Để đơn giản ho&aacute;&nbsp;<em>Bước 1 &mdash; T&igrave;m vị tr&iacute; c&aacute;c th&ocirc;ng tin cần thiết trong chuỗi HTML trả về</em>, ch&uacute;ng ta c&oacute; thể sử dụng chức năng Inspect (trong bộ Developer Tools) của tr&igrave;nh duyệt Google Chrome hoặc Firefox để tra đến vị tr&iacute; m&atilde; nguồn th&ocirc;ng qua giao diện trực quan.</p>\r\n\r\n<p>Dưới đ&acirc;y l&agrave; phần minh hoạ c&aacute;c bước tr&ecirc;n cho việc liệt k&ecirc; danh s&aacute;ch những danh mục tin ở trang chủ của trang web&nbsp;<a href=\"https://batdongsan.com.vn/ban-can-ho-chung-cu-ha-noi\" rel=\"noreferrer noopener\" target=\"_blank\">batdongsan.com.vn</a>&nbsp;(Như đ&atilde; tr&igrave;nh b&agrave;y&nbsp;<strong>Bước 1</strong>&nbsp;trong mục&nbsp;<strong>Thiết kế tổng quan</strong>).</p>\r\n\r\n<h3><strong>1.1. Hướng dẫn bước 1</strong></h3>\r\n\r\n<ul>\r\n	<li>Truy cập trang web&nbsp;<a href=\"https://batdongsan.com.vn/ban-can-ho-chung-cu-ha-noi\" rel=\"noreferrer noopener\" target=\"_blank\">batdongsan.com.vn</a>&nbsp;tr&ecirc;n tr&igrave;nh duyệt</li>\r\n	<li>Mở chức năng Inspect với ph&iacute;m tắt Option + CMD + I (hệ điều h&agrave;nh MacOS) hoặc Ctrl + Shift + P (hệ điều h&agrave;nh Windows)</li>\r\n	<li>Di chuyển chuột đến mục&nbsp;<code>Nh&agrave; đất b&aacute;n</code>&nbsp;&gt;&nbsp;<code>B&aacute;n căn hộ chung cư</code>&nbsp;tr&ecirc;n thanh định hướng (menu) &gt; Bấm chuột phải &gt; Chọn&nbsp;<strong>Inspect</strong>.</li>\r\n</ul>\r\n\r\n<p><img alt=\"\" height=\"634\" src=\"https://i1.wp.com/codegym.vn/wp-content/uploads/2020/04/xay-dung-crawler-sieu-don-gian-voi-java-8.png?resize=600%2C643&amp;ssl=1\" srcset=\"https://i1.wp.com/codegym.vn/wp-content/uploads/2020/04/xay-dung-crawler-sieu-don-gian-voi-java-8.png?resize=600%2C643&amp;ssl=1 600w, https://codegym.vn/wp-content/uploads/2020/04/xay-dung-crawler-sieu-don-gian-voi-java-8-480x514.png 480w\" width=\"592\" /></p>\r\n\r\n<p>R&ecirc; chuột đến mục Nh&agrave; đất b&aacute;n &gt; B&aacute;n căn hộ chung cư tr&ecirc;n thanh định hướng (menu), click chuột phải, chọn Inspect.</p>\r\n\r\n<ul>\r\n	<li>Qua nội dung hiển thị tr&ecirc;n tab Element, ch&uacute;ng ta c&oacute; thể thấy m&atilde; HTML của những thẻ đ&aacute;nh dấu mục&nbsp;<code>B&aacute;n căn hộ chung cư</code>&nbsp;như b&ecirc;n dưới:</li>\r\n</ul>\r\n\r\n<p><img alt=\"\" height=\"528\" src=\"https://i1.wp.com/codegym.vn/wp-content/uploads/2020/04/xay-dung-crawler-sieu-don-gian-voi-java-6.png?resize=700%2C534&amp;ssl=1\" width=\"692\" /></p>\r\n\r\n<p>Qua nội dung hiển thị tr&ecirc;n tab Element, ch&uacute;ng ta c&oacute; thể thấy m&atilde; HTML của những thẻ đ&aacute;nh dấu mục B&aacute;n căn hộ chung cư như tr&ecirc;n.</p>\r\n\r\n<p><em>Như vậy, ch&uacute;ng ta x&aacute;c định được m&atilde; đ&aacute;nh dấu c&aacute;c đường link của c&aacute;c danh mục tin tr&ecirc;n trang web n&agrave;y l&agrave; thẻ&nbsp;</em><code><em>&lt;a&gt;</em></code><em>&nbsp;nằm trong thẻ&nbsp;</em><code><em>&lt;li&gt;</em></code><em>&nbsp;c&oacute; class l&agrave;&nbsp;</em><code><em>lv1</em></code><em>.</em></p>\r\n\r\n<h3><strong>1.2. Hướng dẫn bước 2</strong></h3>\r\n\r\n<p>Qua bước 1, ch&uacute;ng ta x&aacute;c định được rằng, để lấy được đường link của danh mục con&nbsp;<code>B&aacute;n căn hộ chung cư</code>&nbsp;th&igrave; phải lấy thuộc t&iacute;nh&nbsp;<code>href</code>&nbsp;của thẻ&nbsp;<code>&lt;a&gt;</code>&nbsp;nằm trong&nbsp;<code>&lt;li class=&quot;lv1&quot;&gt;</code>.</p>\r\n\r\n<p>Vậy regex c&oacute; thể d&ugrave;ng ở đ&acirc;y l&agrave;:</p>\r\n\r\n<pre>\r\nPattern pLink = Pattern.compile(Pattern p = Pattern.compile(&quot;&lt;div class=&#39;p-title&#39;&gt;&lt;h3&gt;&lt;a href=&#39;(.*?)&#39; title&quot;););</pre>\r\n\r\n<p>Gi&aacute; trị của th&ocirc;ng tin m&agrave; ch&uacute;ng ta muốn t&igrave;m l&agrave; đường link nằm giữa&nbsp;<code>&lt;li class=&#39;lv1&#39;&gt;&lt;a href=&#39;</code>&nbsp;v&agrave;&nbsp;<code>&#39; class=&#39;haslink &#39;&gt;</code>&nbsp;được đại diện bằng c&aacute;c k&iacute; tự&nbsp;<code>(.*?)</code>.</p>\r\n\r\n<p>Bạn c&oacute; thể kiểm tra kết quả t&igrave;m kiếm dựa tr&ecirc;n regex tr&ecirc;n bằng một chương tr&igrave;nh demo nhỏ với những d&ograve;ng m&atilde; sau:</p>\r\n\r\n<pre>\r\npublic class DemoUsingURL {\r\n    private static String getContentFrom(String link) throws IOException {\r\n        ...\r\n    }\r\n    public static void main(String[] args) throws IOException {\r\n        String content = getContentFrom(&quot;&lt;https://batdongsan.com.vn&gt;&quot;);\r\n        // Regex\r\n        Pattern p = Pattern.compile(Pattern pLink = Pattern.compile(Pattern p = Pattern.compile(&quot;&lt;div class=&#39;p-title&#39;&gt;&lt;h3&gt;&lt;a href=&#39;(.*?)&#39; title&quot;);););\r\n        Matcher m = p.matcher(content);\r\n        while (m.find()) {\r\n            System.out.println(m.group(1));\r\n        }\r\n    }\r\n}</pre>\r\n\r\n<p>Kết quả của đoạn code tr&ecirc;n như sau:</p>\r\n\r\n<pre>\r\n/ban-can-ho-chung-cu\r\n/ban-nha-rieng\r\n/ban-nha-biet-thu-lien-ke\r\n/ban-nha-mat-pho\r\n/ban-dat-nen-du-an\r\n...\r\n...\r\n/phong-thuy-van-phong\r\n/tin-tuc-phong-thuy-theo-tuoi\r\n/nha-moi-gioi\r\n/doanh-nghiep</pre>\r\n\r\n<p>Đ&acirc;y l&agrave; những đường link con, c&oacute; thể kết hợp với chuỗi&nbsp;<code>https://batdongsan.com.vn</code>&nbsp;để tạo ra đường link dẫn tới nội dung c&aacute;c danh mục tin được rao.</p>\r\n\r\n<p>Ở kết quả tr&ecirc;n, ch&uacute;ng ta thấy c&oacute; một số đường link kh&ocirc;ng ph&ugrave; hợp. V&igrave; đ&oacute; l&agrave; những đường link m&agrave; ch&uacute;ng ta kh&ocirc;ng muốn thu thập nội dung. V&iacute; dụ:&nbsp;<code>/phong-thuy-van-phong</code>,&nbsp;<code>/tin-tuc-phong-thuy-theo-tuoi</code>,&nbsp;<code>/nha-moi-gioi</code>,&hellip; Ch&uacute;ng ta sẽ t&igrave;m c&aacute;ch loại bỏ những kết quả kh&ocirc;ng mong đợi n&agrave;y.</p>\r\n\r\n<p>Xem x&eacute;t lại m&atilde; HTML của trang web, ch&uacute;ng ta sẽ ph&aacute;t hiện ra c&aacute;c thẻ&nbsp;<code>&lt;li class=&#39;lv1&#39;&gt;</code>&nbsp;chứa c&aacute;c th&ocirc;ng tin cần thiết n&agrave;y nằm trong 2 nội dung sau:</p>\r\n\r\n<h4><strong>Nh&agrave; đất b&aacute;n</strong></h4>\r\n\r\n<pre>\r\n&lt;li class=&#39;lv0&#39;&gt;&lt;a href=&quot;/nha-dat-ban&quot; class=&quot;haslink &quot;&gt;Nh&agrave; đất b&aacute;n&lt;/a&gt;\r\n...nội dung c&aacute;c danh mục con của mục Nh&agrave; đất b&aacute;n ở đ&acirc;y\r\n&lt;/li&gt;</pre>\r\n\r\n<p><strong>Nh&agrave; đất cho thu&ecirc;</strong></p>\r\n\r\n<pre>\r\n&lt;li class=&#39;lv0&#39;&gt;&lt;a href=&quot;/nha-dat-cho-thue&quot; class=&quot;haslink &quot;&gt;Nh&agrave; đất cho thu&ecirc;&lt;/a&gt;\r\n...nội dung c&aacute;c danh mục con của mục Nh&agrave; đất cho thu&ecirc; ở đ&acirc;y\r\n&lt;/li&gt;</pre>\r\n\r\n<p>Đoạn code tr&ecirc;n cần sửa lại như dưới đ&acirc;y để loại ra những link kh&ocirc;ng cần thiết:</p>\r\n\r\n<pre>\r\npublic class DemoUsingURL {\r\n    private static String getContentFrom(String link) throws IOException {\r\n        ...\r\n    }\r\n    private static List&lt;String&gt; getLinksFromMenu(String content, String menuPattern) {\r\n        // Regex\r\n        List&lt;String&gt; links = new ArrayList&lt;&gt;();\r\n        Pattern p = Pattern.compile(menuPattern);\r\n        Matcher m = p.matcher(content);\r\n        while (m.find()) {\r\n            Pattern p2 = Pattern.compile(Pattern pLink = Pattern.compile(Pattern p = Pattern.compile(&quot;&lt;div class=&#39;p-title&#39;&gt;&lt;h3&gt;&lt;a href=&#39;(.*?)&#39; title&quot;);););\r\n            Matcher m2 = p2.matcher(m.group(1));\r\n            while (m2.find()) links.add(m2.group(1));\r\n        }\r\n        return links;\r\n    }\r\n    public static void main(String[] args) throws IOException {\r\n        String content = getContentFrom(&quot;&lt;https://batdongsan.com.vn&gt;&quot;);\r\n        String sellMenuPattern = &quot;&lt;li class=&#39;lv0&#39;&gt;&lt;a href=&#39;/nha-dat-ban&#39; class=&#39;haslink &#39;&gt;Nh&agrave; đất b&aacute;n&lt;/a&gt;&lt;ul&gt;(.*?)&lt;/ul&gt;&quot;;\r\n        List&lt;String&gt; sellLinks = getLinksFromMenu(content, sellMenuPattern);\r\n        String rentalMenuPattern = &quot;&lt;li class=&#39;lv0&#39;&gt;&lt;a href=&#39;/nha-dat-cho-thue&#39; class=&#39;haslink &#39;&gt;Nh&agrave; đất cho thu&ecirc;&lt;/a&gt;&lt;ul&gt;(.*?)&lt;/ul&gt;&quot;;\r\n        List&lt;String&gt; rentalLinks = getLinksFromMenu(content, rentalMenuPattern);\r\n        System.out.println(sellLinks);\r\n        System.out.println(rentalLinks);\r\n    }\r\n}</pre>\r\n\r\n<p>Ở đoạn code tr&ecirc;n, m&igrave;nh t&aacute;ch phần lấy nội dung từ đường dẫn trang web th&agrave;nh h&agrave;m&nbsp;<code>getContentFrom</code>, v&agrave; một h&agrave;m t&aacute;ch link từ nội dung c&oacute; t&ecirc;n l&agrave;&nbsp;<code>getLinksFromMenu</code>. H&agrave;m&nbsp;<code>main</code>&nbsp;sử dụng hai h&agrave;m được khai b&aacute;o ở tr&ecirc;n để lấy c&aacute;c đường link nằm trong mục&nbsp;<strong>Nh&agrave; đất b&aacute;n</strong>&nbsp;v&agrave;&nbsp;<strong>Nh&agrave; đất cho thu&ecirc;.</strong></p>\r\n\r\n<h3><strong>1.3. Thực h&agrave;nh</strong></h3>\r\n\r\n<p>B&acirc;y giờ, c&aacute;c bạn c&oacute; thể tự thực h&agrave;nh với hướng dẫn hai bước tr&ecirc;n để x&aacute;c định những th&ocirc;ng tin c&ograve;n lại.</p>\r\n\r\n<p><em>Nếu cần c&oacute; kết quả ngay th&igrave; bạn c&oacute; thể tham khảo m&atilde; nguồn m&igrave;nh cung cấp ở cuối b&agrave;i viết n&agrave;y!&nbsp;</em></p>\r\n\r\n<h3><strong>1.4. Tổng hợp c&aacute;c regex t&igrave;m được</strong></h3>\r\n\r\n<p>Dưới đ&acirc;y c&aacute;c regex đ&atilde; t&igrave;m được với trang&nbsp;<a href=\"http://batdongsan.com.vn/\" rel=\"noreferrer noopener\" target=\"_blank\">batdongsan.com.vn</a>&nbsp;để c&aacute;c bạn tham khảo:</p>\r\n\r\n<ol>\r\n	<li>Link c&aacute;c danh mục tin</li>\r\n	<li>Link đến nội dung chi tiết</li>\r\n	<li>Th&ocirc;ng tin cụ thể (như ti&ecirc;u đề, gi&aacute;, diện t&iacute;ch,&hellip;) trong tin chi tiết</li>\r\n</ol>\r\n\r\n<h4><strong>1.4.1. Link c&aacute;c danh mục tin</strong></h4>\r\n\r\n<p>T&igrave;m c&aacute;c link b&ecirc;n trong mục &ldquo;Nh&agrave; đất b&aacute;n&rdquo; v&agrave; &ldquo;Nh&agrave; đất cho thu&ecirc;&rdquo;:</p>\r\n\r\n<pre>\r\nPattern p1 = Pattern.compile(&quot;&lt;li class=&#39;lv0&#39;&gt;&lt;a href=&#39;/nha-dat-ban&#39; class=&#39;haslink &#39;&gt;Nh&agrave; đất b&aacute;n&lt;/a&gt;&lt;ul&gt;(.*?)&lt;/ul&gt;&quot;);\r\nPattern p2 = Pattern.compile(&quot;&lt;li class=&#39;lv0&#39;&gt;&lt;a href=&#39;/nha-dat-cho-thue&#39; class=&#39;haslink &#39;&gt;Nh&agrave; đất cho thu&ecirc;&lt;/a&gt;&lt;ul&gt;(.*?)&lt;/ul&gt;&quot;);</pre>\r\n\r\n<p>Sau đ&oacute;, t&igrave;m c&aacute;c link danh mục thuộc &ldquo;Nh&agrave; đất b&aacute;n&rdquo; v&agrave; &ldquo;Nh&agrave; đất cho thu&ecirc;&rdquo; để loại c&aacute;c link kh&ocirc;ng cần thiết:</p>\r\n\r\n<pre>\r\nPattern pLink = Pattern.compile(Pattern p = Pattern.compile(&quot;&lt;div class=&#39;p-title&#39;&gt;&lt;h3&gt;&lt;a href=&#39;(.*?)&#39; title&quot;););</pre>\r\n\r\n<p><strong>1.4.2. Link đến nội dung chi tiết</strong></p>\r\n\r\n<pre>\r\nPattern pLink = Pattern.compile(Pattern p = Pattern.compile(&quot;&lt;div class=&#39;p-title&#39;&gt;&lt;h3&gt;&lt;a href=&#39;(.*?)&#39; title&quot;););</pre>\r\n\r\n<p><strong>1.4.3. Th&ocirc;ng tin cụ thể trong tin chi tiết</strong></p>\r\n\r\n<pre>\r\n&lt;span id=&quot;48e5&quot; class=&quot;ir gx ap ce in b ei is it r iu&quot; data-selectable-paragraph=&quot;&quot;&gt;String title = &quot;&lt;h1 itemprop=\\\\&quot;name\\\\&quot;&gt;(.*?)&lt;/h1&gt;&quot;;\r\nString price = &quot;&lt;span class=\\\\&quot;gia-title mar-right-15\\\\&quot;&gt;&lt;b&gt;Gi&aacute;:&lt;/b&gt;&lt;strong&gt;(.*?)&lt;/strong&gt;&quot;;&lt;/span&gt;&lt;span id=&quot;e97c&quot; class=&quot;ir gx ap ce in b ei iv iw ix iy iz it r iu&quot; data-selectable-paragraph=&quot;&quot;&gt;Pattern p = Pattern.compile(title + &quot;.*&quot; + price);&lt;/span&gt;</pre>\r\n\r\n<h2><strong>2. Viết m&atilde; crawler cho từng trang web cụ thể</strong></h2>\r\n\r\n<p>X&aacute;c định được c&aacute;c regex pattern để lấy những th&ocirc;ng tin cần thiết ở tr&ecirc;n l&agrave; ch&uacute;ng ta đ&atilde; đi được 50% chặng đường. Việc c&ograve;n lại l&agrave; kết hợp c&aacute;c regex tr&ecirc;n để viết m&atilde; crawler cụ thể cho từng trang web theo thiết kế được tr&igrave;nh b&agrave;y trong mục&nbsp;<strong>Thiết kế tổng quan</strong>.</p>\r\n\r\n<p>C&aacute;c class d&agrave;nh cho trang cụ thể sẽ&nbsp;<code>implement</code>&nbsp;những phương thức&nbsp;<code>abstract</code>&nbsp;đ&atilde; định nghĩa trong Crawler:</p>\r\n\r\n<pre>\r\n    // bước 1\r\n    abstract Iterable&lt;Subpage&gt; inspectHomepage();\r\n		\r\n    // bước 2\r\n    abstract Iterable&lt;DetailPage&gt; inspectSubpage(Subpage subpage);\r\n		\r\n    // bước 3\r\n    abstract ClassifiedAd inspectDetailPage(DetailPage detailPage);</pre>\r\n\r\n<p><code>inspectHomepage()</code>&nbsp;sẽ sử dụng c&aacute;c regex như minh hoạ trong mục Hướng dẫn bước 1.</p>\r\n\r\n<p><code>inspectSubpage</code>&nbsp;trả về danh s&aacute;ch link c&aacute;c trang chi tiết.</p>\r\n\r\n<p><code>inspectDetailPage</code>&nbsp;trả về th&ocirc;ng tin cụ thể từ trang chi tiết.</p>\r\n\r\n<h2><strong>Cải tiến</strong></h2>\r\n\r\n<p>Như đ&atilde; tr&igrave;nh b&agrave;y ở tr&ecirc;n, đ&acirc;y l&agrave; một c&ocirc;ng cụ &ldquo;si&ecirc;u đơn giản&rdquo;. V&igrave; thế sẽ thiếu nhiều t&iacute;nh năng để crawler thực sự hữu &iacute;ch tr&ecirc;n thực tế như tối ưu thời gian chạy, l&ecirc;n lịch chạy để lu&ocirc;n cập nhật được tin mới nhất, lưu v&agrave;o kho dữ liệu ph&ugrave; hợp phục vụ tra cứu hoặc t&iacute;nh to&aacute;n/so s&aacute;nh&hellip;</p>\r\n\r\n<p>M&igrave;nh sẽ đưa ra một số gợi &yacute; để c&aacute;c bạn c&oacute; thể tiếp tục t&igrave;m hiểu v&agrave; cải tiến c&ocirc;ng cụ n&agrave;y nh&eacute;!</p>\r\n\r\n<ol>\r\n	<li>Sử dụng Thread để tối ưu thời gian chạy, giảm thời gian đợi giữa c&aacute;c lần request nội dung từng trang web. V&igrave; mỗi trang được xử l&yacute; độc lập, việc đợi kết quả của request n&agrave;y sẽ kh&ocirc;ng ảnh hưởng đến kết quả của c&aacute;c request c&ograve;n lại.</li>\r\n	<li>Sử dụng Crob Job để l&ecirc;n lịch chạy hằng ng&agrave;y hoặc một khung thời gian cố định (v&iacute; dụ: 10 ph&uacute;t 1 lần). Hiện tại, c&aacute;c thao t&aacute;c phải được k&iacute;ch hoạt thủ c&ocirc;ng. Việc n&agrave;y sẽ kh&ocirc;ng gi&uacute;p hệ thống c&oacute; được dữ liệu mới nhất.</li>\r\n	<li>Sử dụng một hệ CSDL cụ thể để gom dữ liệu thu thập được. Hệ CSDL sẽ gi&uacute;p ch&uacute;ng ta c&oacute; thể xử l&yacute; v&agrave; đưa ra một số th&ocirc;ng tin hữu &iacute;ch. V&iacute; dụ: so s&aacute;nh gi&aacute; thị trường với từng khu vực cụ thể, hoặc t&igrave;m gi&aacute; tốt nhất được rao tr&ecirc;n c&aacute;c trang theo nhu cầu của người d&ugrave;ng.</li>\r\n</ol>\r\n\r\n<p><em>Author: Đặng Huy H&ograve;a</em></p>', 'Xây dựng crawler siêu đơn giản với Java', 'java', 1, 'hj6.jpg', 9, NULL, NULL),
(11, 'iPhone 13 (iPhone 12s) lộ ảnh render mới', 'iphone-13-iphone-12s-lo-anh-render-moi-phan-notch-tren-man-hinh-nho-hon-iphone-12-camera-sau-duoc-can-chinh-theo-duong-cheo', 'Crawler là một công cụ giúp thu thập dữ liệu, thông tin từ các trang web khác nhau. Một trong những ví dụ về crawler mà chúng ta gặp hằng ngày là Google. Google là một hệ thống có nhiều máy chủ có thể crawling rất nhiều trang web trên Internet, từ đó chúng ta có thể tìm kiếm nội dung những trang web mà chúng ta cần dựa vào từ khoá cụ thể.', '<p>Bản render iPhone 13 mới n&agrave;y được tạo ra bởi YouTuber người Ấn Độ (@Waqar Khan), nhưng nh&igrave;n chung thiết kế kh&ocirc;ng kh&aacute;c nhiều so với những render r&ograve; rỉ trước đ&acirc;y, ngoại trừ c&aacute;ch bố tr&iacute; notch v&agrave; camera sau.</p>\r\n\r\n<p>Theo đ&oacute;, phần notch tr&ecirc;n ảnh render mới nhỏ hơn so với&nbsp;<a href=\"https://www.thegioididong.com/dtdd/iphone-12\" target=\"_blank\" title=\"Chi tiết iPhone 12\" type=\"Chi tiết iPhone 12\">iPhone 12</a>, c&ograve;n camera ph&iacute;a sau đ&atilde; được căn chỉnh theo đường ch&eacute;o kh&aacute;c với c&aacute;ch bố tr&iacute; theo chiều dọc tr&ecirc;n iPhone 12.</p>\r\n\r\n<figure class=\"easyimage easyimage-full\"><img alt=\"\" src=\"blob:https://trungtamtinhoc.com/75e34a5b-80c0-42a6-a243-4ec51287fd3d\" width=\"800\" />\r\n<figcaption></figcaption>\r\n</figure>\r\n\r\n<p>Ảnh render của @Waqar Khan cũng tiết lộ rằng iPhone 13 sẽ c&oacute; s&aacute;u t&ugrave;y chọn m&agrave;u sắc, bao gồm: T&iacute;m nhạt, đỏ, xanh đậm, cam, trắng ấm v&agrave; đen.</p>\r\n\r\n<p>iPhone 13 được cho sẽ d&ugrave;ng m&agrave;n h&igrave;nh&nbsp;<a href=\"https://www.thegioididong.com/samsung\" target=\"_blank\" title=\"Các sản phẩm của Samsung\" type=\"Các sản phẩm của Samsung\">Samsung</a>&nbsp;LTPO hỗ trợ tốc độ l&agrave;m tươi th&iacute;ch ứng 120 Hz - đ&acirc;y sẽ l&agrave; d&ograve;ng&nbsp;<a href=\"https://www.thegioididong.com/dtdd-apple-iphone\" target=\"_blank\" title=\"Đặt mua iPhone tại Thegioididong.com\" type=\"Đặt mua iPhone tại Thegioididong.com\">iPhone</a>&nbsp;đầu ti&ecirc;n của Apple hỗ trợ tốc độ l&agrave;m tươi tr&ecirc;n 60 Hz.</p>\r\n\r\n<p>Ngo&agrave;i ra, d&ograve;ng iPhone 13 sẽ được trang bị vi xử l&yacute; A15 Bionic mới của Apple, c&ocirc;ng nghệ Wi-Fi 6E mới nhất v&agrave; bộ phận camera được cải tiến.</p>', 'iPhone 13 (iPhone 12s) lộ ảnh render mới, phần notch trên màn hình nhỏ hơn iPhone 12, camera sau được căn chỉnh theo đường chéo', 'cong nghe', 1, '1235.jpg', 8, NULL, NULL),
(12, 'Anh lập trình viên tìm ra easter egg siêu thú vị nhưng trốn cực kỹ suốt 25 năm qua trên Windows 95', 'anh-lap-trinh-vien-tim-ra-easter-egg-sieu-thu-vi-nhung-tron-cuc-ky-suot-25-nam-qua-tren-windows-95', 'Crawler là một công cụ giúp thu thập dữ liệu, thông tin từ các trang web khác nhau. Một trong những ví dụ về crawler mà chúng ta gặp hằng ngày là Google. Google là một hệ thống có nhiều máy chủ có thể crawling rất nhiều trang web trên Internet, từ đó chúng ta có thể tìm kiếm nội dung những trang web mà chúng ta cần dựa vào từ khoá cụ thể.', '<p>Easter egg l&agrave; kh&aacute;i niệm được d&ugrave;ng để &aacute;m chỉ những chi tiết si&ecirc;u nhỏ c&oacute; li&ecirc;n quan đến 1 hoặc nhiều yếu tố nổi tiếng trong x&atilde; hội hoặc trong nền văn ho&aacute; đại ch&uacute;ng. Ch&uacute;ng được t&aacute;c giả đưa v&agrave;o c&aacute;c t&aacute;c phẩm của m&igrave;nh một c&aacute;ch tinh tế, đ&ocirc;i khi rất kh&oacute; ph&aacute;t hiện để tăng phần th&uacute; vị cho người xem, người đọc hoặc người chơi. Easter egg c&oacute; thể &ldquo;ẩn th&acirc;n&quot; trong bất kỳ lĩnh vực n&agrave;o, chủ yếu l&agrave; những bộ phim hay tr&ograve; chơi điện tử, v&agrave; cũng c&oacute; l&uacute;c l&agrave; trong cả c&aacute;c phần mềm m&aacute;y t&iacute;nh quen thuộc.</p>\r\n\r\n<p>Mới đ&acirc;y, lập tr&igrave;nh vi&ecirc;n c&oacute; biệt danh Albacore đ&atilde; ph&aacute;t hiện ra 1 easter egg si&ecirc;u th&uacute; vị trong ứng dụng Windows 95 Internet Mail - 25 năm sau khi ph&aacute;t h&agrave;nh, gi&uacute;p mở ra 1 danh s&aacute;ch bao gồm t&ecirc;n của những lập tr&igrave;nh vi&ecirc;n kh&aacute;c đ&atilde; đ&oacute;ng g&oacute;p cho phần mềm n&agrave;y. Trước đ&oacute;, chưa một ai ph&aacute;t hiện ra easter egg n&ecirc;u tr&ecirc;n, đồng nghĩa với việc n&oacute; đ&atilde; ẩn m&igrave;nh th&agrave;nh c&ocirc;ng trong suốt hơn 2 thập kỷ vừa qua.</p>\r\n\r\n<p>Chia sẻ tr&ecirc;n Twitter c&aacute; nh&acirc;n, Albacore cho biết: &quot;<em>Kh&ocirc;ng bao giờ l&agrave; qu&aacute; muộn để t&igrave;m ra những easter egg mới. T&ocirc;i đ&atilde; t&igrave;nh cờ ph&aacute;t hiện ra 1 chi tiết c&oacute; lẽ l&agrave; chưa c&oacute; ai để &yacute; đến trong Internet Mail của Windows 95/IE4. Tất cả những g&igrave; bạn cần l&agrave;m l&agrave; mở cửa sổ About của ứng dụng n&agrave;y l&ecirc;n, chọn 1 trong c&aacute;c file hiển thị v&agrave; nhập lệnh MORTIMER. Danh s&aacute;ch t&ecirc;n c&aacute;c lập tr&igrave;nh vi&ecirc;n/nh&agrave; ph&aacute;t triển của n&oacute; sẽ bắt đầu hiện ra v&agrave; tự động chạy</em>&quot;.</p>\r\n\r\n<p>Cụ thể hơn, để truy cập easter egg n&agrave;y, bạn cần khởi động&nbsp;<strong><em>Internet Mail &gt; Help &gt; About</em></strong>. Khi cửa sổ About hiện l&ecirc;n, chọn file comctl32.dll (chỉ click chuột 1 lần để m&aacute;y highlight file n&agrave;y l&ecirc;n) rồi g&otilde; MORTIMER. L&uacute;c n&agrave;y, 1 cửa sổ nhỏ sẽ tự động chạy danh s&aacute;ch c&aacute;c lập tr&igrave;nh vi&ecirc;n đ&atilde; tạo n&ecirc;n Internet Mail, hệt như đoạn credit của 1 bộ phim vậy.</p>\r\n\r\n<p>Trước đ&oacute;, Albacore cũng từng chia sẻ đoạn video về 1 easter egg kh&aacute;c cũng li&ecirc;n quan đến Windows 95, nhưng l&agrave; danh s&aacute;ch c&aacute;c nh&agrave; ph&aacute;t triển của hệ điều h&agrave;nh n&agrave;y. Chia sẻ với BleepingComputer, anh cho biết c&aacute;ch thức t&igrave;m ra n&oacute; hơi phức tạp hơn 1 ch&uacute;t: Đầu ti&ecirc;n, bạn cần tạo 1 thư mục c&oacute; t&ecirc;n &quot;and now, the moment you&rsquo;ve all been waiting for&quot; rồi đổi t&ecirc;n n&oacute; th&agrave;nh &quot;we proudly present for your viewing pleasure&quot;, cuối c&ugrave;ng đổi th&agrave;nh &quot;The Microsoft Windows 95 Product Team!&quot;. Những thao t&aacute;c r&otilde; r&agrave;ng l&agrave; rất đơn giản, kh&ocirc;ng đ&ograve;i hỏi kiến thức chuy&ecirc;n s&acirc;u về tin học, nhưng lại cực kỳ lắt l&eacute;o v&agrave; rất kh&oacute; để c&oacute; thể tự m&agrave;y m&ograve; ra.</p>\r\n\r\n<p>Để đơn giản h&oacute;a qu&aacute; tr&igrave;nh n&agrave;y, Albacore đ&atilde; chỉnh sửa file shell32.dll. Từ đ&acirc;y, chỉ cần truy cập v&agrave;o thư mục c&oacute; t&ecirc;n &quot;Clouds&quot; l&agrave; danh s&aacute;ch đội ngũ lập tr&igrave;nh vi&ecirc;n của Windows 95 đ&atilde; lập tức tự động hiển thị, giống như đoạn video dưới đ&acirc;y. Ngo&agrave;i ra, đoạn nhạc nền MIDI chắc chắn sẽ khiến cho kh&ocirc;ng &iacute;t người cảm thấy ho&agrave;i cổ về 1 thời ch&acirc;n ướt ch&acirc;n r&aacute;o l&agrave;m quen với thế giới m&aacute;y t&iacute;nh, với những tựa game đơn giản m&agrave; đầy hấp dẫn tr&ecirc;n hệ điều h&agrave;nh n&agrave;y.</p>', 'Anh lập trình viên tìm ra easter egg siêu thú vị nhưng trốn cực kỹ suốt 25 năm qua trên Windows 95', 'lap trinh', 1, 'a1122.jpg', 9, NULL, NULL),
(13, 'Đường sự nghiệp của một lập trình viên bạn nên biết', 'duong-su-nghiep-cua-mot-lap-trinh-vien-ban-nen-biet', '<p>C&oacute; một sự thật m&agrave; nhiều lập tr&igrave;nh vi&ecirc;n phải đối mặt đ&oacute; l&agrave; sự nghiệp lập tr&igrave;nh của họ sẽ tiến đến một cấp cao nhất v&agrave; sau đ&oacute; l&agrave; sẽ bắt đầu đi l&ugrave;i, ch&aacute;n code (Ngoại trừ những người thật sự đam m&ecirc; code). H&ocirc;m nay, TopDev sẽ cung cấp cho bạn một số th&ocirc;ng tin định hướng nghề nghiệp quan trọng m&agrave; bạn cần phải biết, từ đ&oacute; bạn c&oacute; thể biết trước tương lai m&igrave;nh cần g&igrave; cho bản th&acirc;n.</p>', '<p>Trang blog Topdev đ&atilde; cho đăng b&agrave;i viết &ldquo;<a href=\"https://topdev.vn/blog/that-nghiep-tuoi-35-khung-hoang-tuoi-30-thuc-ra-duoc-bao-truoc-boi-nhung-con-buon-ngu-tuoi-25/\">Thất nghiệp tuổi 35: Khủng hoảng tuổi 30 thực ra được b&aacute;o trước bởi những cơn buồn ngủ tuổi 25?</a>&ldquo;, v&agrave; nhiều lập tr&igrave;nh vi&ecirc;n kỳ cựu cho rằng khoảng thời gian sự nghiệp l&agrave;m việc hiệu quả của một lập tr&igrave;nh vi&ecirc;n l&agrave; c&oacute; giới hạn. Nhưng c&acirc;u hỏi đặt ra l&agrave; liệu điều đ&oacute; l&agrave; c&oacute; thật kh&ocirc;ng? v&agrave; n&oacute; c&oacute; nghi&ecirc;m trọng kh&ocirc;ng?</p>\r\n\r\n<ul>\r\n	<li>Tương lai của một lập tr&igrave;nh vi&ecirc;n sẽ ra sao khi ng&agrave;y c&agrave;ng lớn tuổi?</li>\r\n	<li>Roadmap sự nghiệp của một lập tr&igrave;nh vi&ecirc;n&nbsp;tr&ocirc;ng sẽ như thế n&agrave;o?</li>\r\n	<li>Những lựa chọn trong sự nghiệp v&agrave; những kỳ vọng về c&aacute;c lựa chọn đ&oacute; l&agrave; g&igrave;?</li>\r\n</ul>\r\n\r\n<p>Mọi người đều cho rằng c&aacute;c lập tr&igrave;nh vi&ecirc;n về sau c&oacute; thể trở th&agrave;nh người quản l&yacute; hoặc l&atilde;nh đạo. Nhưng nhiều lập tr&igrave;nh vi&ecirc;n kh&ocirc;ng hiểu được kỳ vọng v&agrave; y&ecirc;u cầu c&ocirc;ng việc của một nh&agrave; quản l&yacute;.</p>\r\n\r\n<p>Chắc chắn, tất cả ch&uacute;ng ta đều c&oacute; những manager, việc trở th&agrave;nh một manager c&oacute; &yacute; nghĩa g&igrave;? C&oacute; những kỳ vọng g&igrave;? V&agrave; sự kh&aacute;c biệt giữa một manager cấp trung v&agrave; leader cấp cao l&agrave; g&igrave;?</p>\r\n\r\n<p>Trong b&agrave;i viết n&agrave;y, ch&uacute;ng t&ocirc;i sẽ chỉ cho bạn một con đường sự nghiệp từ sự khởi đầu trong lĩnh vực kỹ thuật như một Junior Developer cho đến level cao nhất l&agrave; trở th&agrave;nh một CTO (Gi&aacute;m đốc c&ocirc;ng nghệ).</p>\r\n\r\n<p><strong>Lưu &yacute;:</strong>&nbsp;Sự nghiệp mỗi người mỗi kh&aacute;c, sự hướng dẫn n&agrave;y kh&ocirc;ng thể ph&ugrave; hợp với tất cả mọi người. Nhiều bạn sẽ th&iacute;ch hợp với vai tr&ograve; quản l&yacute;, ngược lại cũng rất nhiều bạn đam m&ecirc; code, coi code l&agrave; phải giải tr&iacute; mỗi khi gặp bế tắc chẳng hạn. C&oacute; thể l&uacute;c bạn 22 tuổi bạn chỉ mong l&agrave; được ngồi code v&agrave; kh&ocirc;ng th&iacute;ch việc quản l&yacute;, nhưng biết đ&acirc;u l&ecirc;n 30 bạn lại bắt đầu ch&aacute;n code. V&igrave; vậy hiểu v&agrave; chọn lựa đ&uacute;ng sẽ tr&aacute;nh cho ch&uacute;ng ta hụt hẫng khi gặp phải v&agrave;i trục trặc tr&ecirc;n con đường sự nghiệp.</p>\r\n\r\n<h2>1.Fresher</h2>\r\n\r\n<p><a href=\"https://topdev.vn/viec-lam-it?q=fresher\" rel=\"noopener noreferrer\" target=\"_new\">Fresher</a>&nbsp;l&agrave; để chỉ những sinh vi&ecirc;n học ng&agrave;nh c&ocirc;ng nghệ th&ocirc;ng tin mới ra trường, những người mới bắt đầu bước ch&acirc;n v&agrave;o c&ocirc;ng việc của lập tr&igrave;nh vi&ecirc;n. Fresher l&agrave; những người đ&atilde; trang bị đầy đủ kiến thức căn bản cần c&oacute;, kiến thức về c&aacute;c logic, cấu tr&uacute;c phần mềm, cơ sở dữ liệu&hellip; V&agrave; cần một m&ocirc;i trường để thực hiện, triển khai, học hỏi v&agrave; ph&aacute;t triển l&ecirc;n c&aacute;c kỹ năng ch&iacute;nh v&agrave; kỹ năng mềm. Bạn c&oacute; thể xem th&ecirc;m&nbsp;<a href=\"https://topdev.vn/blog/fresher-la-gi/\">Fresher l&agrave; g&igrave;</a>&nbsp;tại đ&acirc;y.</p>\r\n\r\n<h2>2.Junior Developer</h2>\r\n\r\n<ul>\r\n	<li>0-2 năm kinh nghiệm. Thường l&agrave; người trải qua giai đoạn intern v&agrave; fresher, đ&atilde; c&oacute; kinh nghiệm trong việc lập tr&igrave;nh ứng dụng tr&ecirc;n thực tế.</li>\r\n	<li>Hiểu biết sơ bộ về to&agrave;n bộ một v&ograve;ng đời ứng dụng, sử dụng ng&ocirc;n ngữ lập tr&igrave;nh hay framework.</li>\r\n	<li>Hiểu biết về cơ sở dữ liệu, lưu trữ v&agrave; xuất dữ liệu. L&uacute;c n&agrave;y c&oacute; thể viết c&aacute;c chức năng cho ứng dụng, tuy nhi&ecirc;n code sẽ c&oacute; r&aacute;c nhiều do chưa c&oacute; kinh nghiệm tối ưu dẫn để việc chồng ch&eacute;o trong việc truy xuất dữ liệu. L&uacute;c n&agrave;y đ&ocirc;i khi code dở sẽ dẫn đến tốn resource server rất nhiều.</li>\r\n</ul>\r\n\r\n<p>Khi bạn bắt đầu bước ch&acirc;n v&agrave;o sự nghiệp lập tr&igrave;nh, n&oacute; chắc chắn đầy kh&oacute; khăn v&agrave; dễ khiến bạn nản l&ograve;ng. C&oacute; l&uacute;c bạn cảm thấy độ hiểu biết kiến thức của m&igrave;nh chưa đủ để đ&aacute;p ứng cho c&ocirc;ng việc, kh&ocirc;ng chắc chắn về việc l&agrave;m thế n&agrave;o m&agrave; người ta c&oacute; thể viết ra những ứng dụng lớn v&agrave; phức tạp đến như vậy. V&agrave; đ&ocirc;i khi, bạn lại tự hỏi tại sao m&igrave;nh vẫn chưa l&ecirc;n được cấp độ Senior. Bạn nh&igrave;n v&agrave;o c&aacute;c lập tr&igrave;nh vi&ecirc;n senior kh&aacute;c v&agrave; nghĩ rằng về cơ bản th&igrave; bạn cũng đang l&agrave;m c&ocirc;ng việc giống như họ.</p>\r\n\r\n<p>Điểm yếu của junior đương nhi&ecirc;n ch&iacute;nh l&agrave; kinh nghiệm, ngay cả nhưng bạn th&ocirc;ng minh v&agrave; học hỏi nhanh cũng chưa được tiếp x&uacute;c đến c&aacute;c chức năng hay code cũng như vấn đề h&oacute;c b&uacute;a. Cho n&ecirc;n để giải quyết c&aacute;c vấn đề tr&ecirc;n bạn cần tiếp tục ki&ecirc;n tr&igrave; học hỏi, tự x&acirc;y dựng cho m&igrave;nh một sản phẩm tương tự để c&oacute; thể giải quyết c&aacute;c vấn đề cơ bản một c&aacute;ch gọn g&agrave;ng, khi ấy leader của bạn sẽ thấy bạn đủ vững để truyền kinh nghiệm v&agrave; giao cho bạn c&aacute;ch giải quyết vấn đề kh&oacute; hơn.</p>\r\n\r\n<h2>3.Senior developer</h2>\r\n\r\n<ul>\r\n	<li>3-8+ năm kinh nghiệm</li>\r\n	<li>C&oacute; thể xử l&yacute; c&aacute;c vấn đề phức tạp, viết ứng dụng lớn</li>\r\n	<li>C&oacute; khả năng thiết kế c&aacute;c cấu tr&uacute;c cơ sở dữ liệu lớn, c&aacute;c t&iacute;nh năng phức tạp của ứng dụng</li>\r\n	<li>Hiểu biết s&acirc;u sắc về cơ sở dữ liệu v&agrave; c&aacute;c dịch vụ ứng dụng (queues, caching, v.v&hellip;)</li>\r\n</ul>\r\n\r\n<p>Lập tr&igrave;nh vi&ecirc;n ở level senior l&agrave; những người thực sự quan trọng trong việc x&acirc;y dựng to&agrave;n bộ c&aacute;c ứng dụng ở quy m&ocirc; lớn. L&ecirc;n đến level n&agrave;y, bạn sẽ đứng trước hai hướng đi của sự nghiệp. Một l&agrave; khi bạn hiểu c&ocirc;ng nghệ đủ để trở th&agrave;nh một lập tr&igrave;nh vi&ecirc;n senior, th&igrave; bạn c&oacute; thể đ&atilde; c&oacute; những kinh nghiệm kỹ thuật đủ s&acirc;u để trở th&agrave;nh một technical leader hoặc CTO (Gi&aacute;m đốc c&ocirc;ng nghệ) của một startup, tuy nhi&ecirc;n l&uacute;c n&agrave;y bạn phải học hỏi th&ecirc;m về quản l&yacute; con người, quản l&yacute; một quy tr&igrave;nh ph&aacute;t triển phần mềm&hellip;</p>\r\n\r\n<p>Ngược lại bạn sẽ tiếp tục đ&agrave;o s&acirc;u kiến ​​thức kỹ thuật, đam m&ecirc; giải quyết những vấn đề về hệ thống lớn, chịu tải cao, n&oacute;i chung l&agrave; bạn kh&ocirc;ng th&iacute;ch d&acirc;y dưa v&agrave;o việc quản l&yacute; con người.</p>\r\n\r\n<h2>4.Tech lead</h2>\r\n\r\n<ul>\r\n	<li>5-10+ năm kinh nghiệm lập tr&igrave;nh</li>\r\n	<li>C&oacute; c&aacute;c kỹ năng của một senior</li>\r\n	<li>Hiểu đủ s&acirc;u v&agrave; rộng về c&aacute;c c&ocirc;ng nghệ, chọn cho team dev một hay nhiều tech stack để giải quyết vấn đề trong hệ thống lớn.</li>\r\n</ul>\r\n\r\n<p>Đến level n&agrave;y, bạn sẽ c&oacute; rất nhiều quyết định quan trọng để mọi lập tr&igrave;nh vi&ecirc;n trong team đi theo, n&agrave;o l&agrave; chọn ng&ocirc;n ngữ g&igrave;, chọn tools g&igrave;, thiết kế hệ thống ra sao, theo chuẩn quy tr&igrave;nh l&agrave;m phần mềm n&agrave;o.</p>\r\n\r\n<p>L&uacute;c n&agrave;y c&oacute; đ&ocirc;i khi bạn sẽ code những định nghĩa, những quy luật đặt biến chẳng hạn, tuy nhi&ecirc;n c&ocirc;ng việc ch&iacute;nh thường l&agrave; thiết kế hệ thống va đảm bảo hệ thống c&oacute; thể scale lớn, c&oacute; thể kết hợp nhiều tech stack để vận h&agrave;nh đ&aacute;p ứng nhu cầu.</p>\r\n\r\n<h2>5.Quản l&yacute; cấp trung</h2>\r\n\r\n<ul>\r\n	<li>Chức danh n&agrave;y thường l&agrave; Product Manager hoặc Project Manager</li>\r\n	<li>L&agrave; người quyết định rất lớn đế những chức năng cần phải c&oacute; của một sản phẩm th&ocirc;ng qua nghi&ecirc;n cứu, khảo s&aacute;t v&agrave; đo đạc.</li>\r\n</ul>\r\n\r\n<p>Sau h&agrave;ng năm trời c&ograve;ng lưng ra code bạn đ&atilde; cảm thấy vị tr&iacute; của m&igrave;nh trở n&ecirc;n nh&agrave;m ch&aacute;n v&agrave; c&ocirc;ng việc qu&aacute; nặng nề. Trong khi bạn bị việc rượt đuổi th&igrave; PM của bạn suốt ng&agrave;y đi v&ograve;ng quanh hối th&uacute;c. Bạn cảm thấy stress v&agrave; bất c&ocirc;ng, bạn nghĩ nếu PM l&agrave; &ldquo;người đi hối&rdquo; th&igrave; bạn cũng l&agrave;m được. &ldquo;Phải trở th&agrave;nh PM ng&agrave;y b&acirc;y giờ mới được!&rdquo; &ndash; Bạn quyết t&acirc;m như vậy.</p>\r\n\r\n<p>V&agrave; đ&uacute;ng l&agrave; như vậy, khi đ&atilde; trở th&agrave;nh một PM bạn sẽ kh&ocirc;ng cần phải code nữa. Nhưng b&ugrave; lại cho việc đ&oacute;, bạn c&oacute; &ldquo;cả t&aacute;&rdquo; việc phải thực hiện, v&agrave; tr&aacute;ch nhiệm của bạn cũng &ldquo;cao ngất trời&rdquo;. Xem th&ecirc;m&nbsp;<a href=\"https://topdev.vn/blog/pm-la-gi/\">PM l&agrave; g&igrave;</a>&nbsp;v&agrave;&nbsp;<a href=\"https://topdev.vn/blog/lam-sao-de-tro-thanh-product-manager/\">l&agrave;m sao để trở th&agrave;nh Product Manager</a>&nbsp;th&agrave;nh c&ocirc;ng tại đ&acirc;y.</p>\r\n\r\n<h2>6.Quản l&yacute; cấp cao</h2>\r\n\r\n<ul>\r\n	<li>CTO hoặc CEO</li>\r\n</ul>\r\n\r\n<p>Đến l&uacute;c n&agrave;y bạn sẽ trở th&agrave;nh một người truyền cảm hứng, dẫn dắt c&aacute;c leader v&agrave; team đi theo một vision n&agrave;o đ&oacute;. Bạn ở nấc thang sự nghiệp đỉnh cao n&agrave;y, th&igrave; bạn c&agrave;ng &iacute;t tiếp x&uacute;c với c&ocirc;ng việc lập tr&igrave;nh. Điều quan trọng nhất l&uacute;c n&agrave;y l&agrave; về con người.</p>\r\n\r\n<p>C&aacute;c nh&agrave; quản l&yacute; cấp trung (mid-level manager) vẫn c&oacute; thể c&oacute; thời gian để vọc vạch với c&ocirc;ng nghệ, nhưng c&aacute;c quản l&yacute; cấp cao phải d&agrave;nh tất cả thời gian của họ để tập trung v&agrave;o vấn đề con người: truyền cảm hứng, tạo động lực, l&atilde;nh đạo, v&agrave; ra chiến lược.</p>\r\n\r\n<h2><strong>Kết luận</strong></h2>\r\n\r\n<p>TopDev hy vọng b&agrave;i viết n&agrave;y đ&atilde; cho bạn một số hướng dẫn v&agrave; những hiểu biết để bạn c&oacute; thể chuẩn bị cho tương lai ph&iacute;a trước. Như đ&atilde; n&oacute;i từ đầu, kh&ocirc;ng phải ai cũng ph&ugrave; hợp, điều quan trọng l&agrave; bạn th&iacute;ch l&agrave;m g&igrave; v&agrave; đừng bỏ cuộc. Lu&ocirc;n c&oacute; những lập tr&igrave;nh vi&ecirc;n lớn tuổi nhưng vẫn code miệt m&agrave;i v&igrave; đam m&ecirc;, lu&ocirc;n c&oacute; những t&agrave;i năng trẻ l&ecirc;n l&agrave;m l&atilde;nh đạo, quan trọng hơn hết l&agrave; thấy y&ecirc;u c&ocirc;ng việc m&igrave;nh đang l&agrave;m.</p>', 'Đường sự nghiệp của một lập trình viên bạn nên biết', 'cong nghe', 1, 'hj25.jpg', 9, NULL, NULL);
INSERT INTO `tbl_news_post` (`news_post_id`, `news_post_title`, `news_post_slug`, `news_post_desc`, `news_post_content`, `news_post_meta`, `news_post_keyword`, `news_post_status`, `news_post_image`, `news_cate_id`, `created_at`, `updated_at`) VALUES
(14, 'Cách tạo REST API với JSON Server', 'cach-tao-rest-api-voi-json-server', '<p>Một c&ocirc;ng việc kh&aacute; phổ biến đối với front-end developer l&agrave; phải giả lập một backend REST service để nhận JSON data cung cấp cho ứng dụng front-end, v&agrave; đảm bảo n&oacute; hoạt động như mong đợi trong khi đang chờ ph&iacute;a backend ho&agrave;n thiện service.</p>', '<p>Bạn vẫn c&oacute; thể c&agrave;i đặt backend server đầy đủ, bằng c&aacute;ch sử dụng Node.js, Express v&agrave; MongoDB, tuy nhi&ecirc;n việc n&agrave;y tốn kh&aacute; nhiều thời gian v&agrave; phức tạp. Trong khi đ&oacute; JSON Server lại l&agrave; một giải ph&aacute;p kh&aacute; ho&agrave;n thiện cho y&ecirc;u cầu nhanh v&agrave; đơn giản với đầy đủ c&aacute;c thao t&aacute;c CRUD (Create Read Update Delete).</p>\r\n\r\n<p>V&igrave; vậy b&agrave;i viết n&agrave;y sẽ hướng dẫn bạn c&aacute;ch c&agrave;i đặt JSON server v&agrave; publish một sample REST API.</p>\r\n\r\n<p>Nội dung&nbsp;[<a href=\"https://codegym.vn/blog/2020/04/14/cach-tao-rest-api-voi-json-server/#\">ẩn</a>]</p>\r\n\r\n<ul>\r\n	<li><a href=\"https://codegym.vn/blog/2020/04/14/cach-tao-rest-api-voi-json-server/#Chuan_bi\">Chuẩn bị</a></li>\r\n	<li><a href=\"https://codegym.vn/blog/2020/04/14/cach-tao-rest-api-voi-json-server/#Cai_dat_JSON_Server\">C&agrave;i đặt JSON Server</a></li>\r\n	<li><a href=\"https://codegym.vn/blog/2020/04/14/cach-tao-rest-api-voi-json-server/#Tao_JSON_File\">Tạo JSON File</a></li>\r\n	<li><a href=\"https://codegym.vn/blog/2020/04/14/cach-tao-rest-api-voi-json-server/#Khoi_dong_Server\">Khởi động Server</a></li>\r\n	<li><a href=\"https://codegym.vn/blog/2020/04/14/cach-tao-rest-api-voi-json-server/#Mot_so_thao_tac_truy_van\">Một số thao t&aacute;c truy vấn</a>\r\n	<ul>\r\n		<li><a href=\"https://codegym.vn/blog/2020/04/14/cach-tao-rest-api-voi-json-server/#Filter\">Filter</a></li>\r\n		<li><a href=\"https://codegym.vn/blog/2020/04/14/cach-tao-rest-api-voi-json-server/#Paginate\">Paginate</a></li>\r\n		<li><a href=\"https://codegym.vn/blog/2020/04/14/cach-tao-rest-api-voi-json-server/#Sort\">Sort</a></li>\r\n		<li><a href=\"https://codegym.vn/blog/2020/04/14/cach-tao-rest-api-voi-json-server/#Bai_viet_lien_quan\">B&agrave;i viết li&ecirc;n quan</a></li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<h2><strong>Chuẩn bị</strong></h2>\r\n\r\n<p>C&agrave;i node cho m&aacute;y t&iacute;nh của bạn bằng c&aacute;ch tải g&oacute;i ph&ugrave; hợp với hệ điều h&agrave;nh của bạn ở link sau&nbsp;<a href=\"https://nodejs.org/en/download/\">https://nodejs.org/en/download/</a></p>\r\n\r\n<p>Sau khi c&agrave;i đặt xong ch&uacute;ng ta tiến h&agrave;nh kiểm tra version của node v&agrave; npm bằng c&aacute;ch như sau:</p>\r\n\r\n<pre>\r\n$ node -v\r\n$ npm &ndash;v</pre>\r\n\r\n<p>Nếu m&agrave;n h&igrave;nh xuất hiện version của node v&agrave; npm (Node Package Managerment) th&igrave; c&oacute; nghĩa bạn đ&atilde; c&agrave;i đặt th&agrave;nh c&ocirc;ng</p>\r\n\r\n<h2><strong>C&agrave;i đặt JSON Server</strong></h2>\r\n\r\n<p>JSON Server được đ&oacute;ng g&oacute;i như một NPM package. V&igrave; vậy việc c&agrave;i đặt c&oacute; thể được thực hiện th&ocirc;ng qua việc sử dụng g&oacute;i node.js manager:</p>\r\n\r\n<p>$ npm install -g json-server</p>\r\n\r\n<p>Tuỳ chọn -g sẽ gi&uacute;p cho package được c&agrave;i đặt ở level hệ thống.</p>\r\n\r\n<h2><strong>Tạo JSON File</strong></h2>\r\n\r\n<p>Tiếp theo, h&atilde;y tạo file JSON v&agrave; đặt t&ecirc;n file theo c&uacute; ph&aacute;p &lt;t&ecirc;n file&gt;.json v&iacute; dụ: data.json. Trong file n&agrave;y sẽ chứa những dữ liệu được trả về bởi REST API. Dưới đ&acirc;y l&agrave; một v&iacute; dụ về file json n&agrave;y:</p>\r\n\r\n<pre>\r\n{\r\n  &quot;employees&quot;: [\r\n    {\r\n      &quot;id&quot;: 1,\r\n      &quot;firstName&quot;: &quot;Phuc&quot;,\r\n      &quot;lastName&quot;: &quot;L&ecirc;&quot;,\r\n      &quot;address&quot;: &quot;28 Nguyễn Tri Phương, Ph&uacute; Nhuận, TP Huế&quot;,\r\n	&quot;profile&quot;: {\r\n		&quot;username&quot;: &quot;phuc.le@codegym.vn&quot;,\r\n      	&quot;email&quot;: &quot;phuc.le@codegym.vn&quot;,\r\n	},\r\n    },\r\n    {\r\n      &quot;id&quot;: 2,\r\n      &quot;firstName&quot;: &quot;Khanh&quot;,\r\n      &quot;lastName&quot;: &quot;L&ecirc;&quot;,\r\n      &quot;address&quot;: &quot;28 Nguyễn Tri Phương, Ph&uacute; Nhuận, TP Huế&quot;,\r\n	    	&quot;profile&quot;: {\r\n		&quot;username&quot;: &quot;khanh.le@codegym.vn&quot;,\r\n      	&quot;email&quot;: &quot;khanh.le@codegym.vn&quot;,\r\n		},\r\n    },\r\n    {\r\n      &quot;id&quot;: 3,\r\n      &quot;firstName&quot;: &quot;Ho&agrave;ng&quot;,\r\n      &quot;lastName&quot;: &quot;Phan&quot;,\r\n      &quot;address&quot;: &quot;28 Nguyễn Tri Phương, Ph&uacute; Nhuận, TP Huế&quot;,\r\n		&quot;profile&quot;: {\r\n		&quot;username&quot;: &quot;hoang.phan@codegym.vn&quot;,\r\n      	&quot;email&quot;: &quot;hoang.phan@codegym.vn&quot;,\r\n		}\r\n    }\r\n}</pre>\r\n\r\n<p>Cấu tr&uacute;c tr&ecirc;n m&ocirc; tả employee object với c&aacute;c trường id, firstName, lastName, address v&agrave; profile.</p>\r\n\r\n<h2><strong>Khởi động Server</strong></h2>\r\n\r\n<p>H&atilde;y khởi động JSON server bằng việc chạy c&acirc;u lệnh sau:</p>\r\n\r\n<pre>\r\nGET /employees?_sort=firstName,lastName&amp;_order=desc,asc</pre>\r\n\r\n<p><em><strong>Lưu &yacute;:</strong>&nbsp;Nếu file json kh&ocirc;ng nằm ở thư mục gốc th&igrave; ch&uacute;ng ta sử dụng lện cd để đặt con trỏ hệ thống tới thư mục chứa file data.json rồi mới thực hiện lệnh tr&ecirc;n.</em></p>\r\n\r\n<p>File data.json được truyền v&agrave;o như một tham số trong c&acirc;u lệnh tr&ecirc;n, v&agrave; option &ndash;watch được th&ecirc;m v&agrave;o nhằm đảm bảo server được chạy ở chế độ xem, ở chế độ n&agrave;y, server sẽ xem x&eacute;t những thay đổi v&agrave; cập nhật kết quả v&agrave;o API một c&aacute;ch ph&ugrave; hợp.</p>\r\n\r\n<p>B&acirc;y giờ h&atilde;y mở địa chỉ&nbsp;<a href=\"http://localhost:3000/employees\">http://localhost:3000/employees</a>&nbsp;tr&ecirc;n browser v&agrave; ta sẽ nhận được kết quả của file json m&agrave; ta đ&atilde; tạo.</p>\r\n\r\n<p>Những HTTP endpoints sau đ&acirc;y được tạo tự động bởi JSON server, ta c&oacute; thể tuỳ chọn để sử dụng sao cho ph&ugrave; hợp với mục đ&iacute;ch của m&igrave;nh:</p>\r\n\r\n<pre>\r\nGET    /employees\r\nGET    /employees/{id}\r\nPOST   /employees\r\nPUT    /employees/{id}\r\nPATCH  /employees/{id}\r\nDELETE /employees/{id}</pre>\r\n\r\n<p><strong><em>Lưu &yacute;:</em></strong></p>\r\n\r\n<ul>\r\n	<li>Gi&aacute; trị của id kh&ocirc;ng được thay đổi, v&agrave; n&oacute; sẽ được tăng dần sau mỗi POST request.</li>\r\n	<li>Nếu ta c&oacute; cung cấp gi&aacute; trị cho id cho PUT hoặc PATCH request th&igrave; gi&aacute; trị đ&oacute; sẽ được bỏ qua.</li>\r\n	<li>C&aacute;c loại POST, PUT v&agrave; PATCH request th&igrave; phải bổ sung th&ecirc;m Content-Type: application/json trong body. Nếu kh&ocirc;ng c&oacute; thiết lập n&agrave;y th&igrave; dữ liệu sẽ kh&ocirc;ng được cập nhật v&agrave;o file data.json.</li>\r\n</ul>\r\n\r\n<h2><strong>Một số thao t&aacute;c truy vấn</strong></h2>\r\n\r\n<h3><strong>Filter</strong></h3>\r\n\r\n<p>Sử dụng dấu . để truy cập v&agrave;o c&aacute;c thuộc t&iacute;nh</p>\r\n\r\n<pre>\r\nGET /employees?firstName=&rdquo;Ho&agrave;ng&rdquo;&amp;lastName =&rdquo;Phan&rdquo;\r\nGET /employees?id=1\r\nGET /employees?profile.email=khanh.le@codegym.vn\r\n</pre>\r\n\r\n<h3><strong>Paginate</strong></h3>\r\n\r\n<p>Sử dụng _page&nbsp;v&agrave; t&ugrave;y chọn&nbsp;_limit&nbsp;để trả về dữ liệu sau khi được ph&acirc;n trang. Mặc định _limit l&agrave; 10</p>\r\n\r\n<pre>\r\nGET /employees?_page=7\r\nGET /employees?_page=7&amp;_limit=20</pre>\r\n\r\n<h3><strong>Sort</strong></h3>\r\n\r\n<p>Sử dụng _sort v&agrave; _order. Mặc định l&agrave; sắp xếp tăng dần:</p>\r\n\r\n<pre>\r\nGET /employees?_sort=firstName&amp;_order=asc\r\nGET /employees/1/?_sort=firstName&amp;_order=desc</pre>\r\n\r\n<p>Sắp xếp nhiều trường:</p>\r\n\r\n<pre>\r\nGET /employees?_sort=firstName,lastName&amp;_order=desc,asc</pre>\r\n\r\n<p>Ngo&agrave;i ra, để t&igrave;m hiểu s&acirc;u hơn về những hỗ trợ m&agrave; json server cung cấp, c&aacute;c bạn c&oacute; thể t&igrave;m hiểu th&ecirc;m ở đ&acirc;y&nbsp;<a href=\"https://github.com/typicode/json-server\">https://github.com/typicode/json-server</a></p>\r\n\r\n<p><em>Author: Nguyễn Hữu Anh Khoa</em></p>', 'Cách tạo REST API với JSON Server', 'api', 1, 'ng88.jpg', 9, NULL, NULL),
(15, 'Đường sự nghiệp của một lập trình viên bạn nên biết', 'duong-su-nghiep-cua-mot-lap-trinh-vien-ban-nen-biet', '<p>&lt;p&gt;C&amp;oacute; một sự thật m&amp;agrave; nhiều lập tr&amp;igrave;nh vi&amp;ecirc;n phải đối mặt đ&amp;oacute; l&amp;agrave; sự nghiệp lập tr&amp;igrave;nh của họ sẽ tiến đến một cấp cao nhất v&amp;agrave; sau đ&amp;oacute; l&amp;agrave; sẽ bắt đầu đi l&amp;ugrave;i, ch&amp;aacute;n code (Ngoại trừ những người thật sự đam m&amp;ecirc; code). H&amp;ocirc;m nay, TopDev sẽ cung cấp cho bạn một số th&amp;ocirc;ng tin định hướng nghề nghiệp quan trọng m&amp;agrave; bạn cần phải biết, từ đ&amp;oacute; bạn c&amp;oacute; thể biết trước tương lai m&amp;igrave;nh cần g&amp;igrave; cho bản th&amp;acirc;n.&lt;/p&gt;</p>', '<p>&lt;p&gt;Trang blog Topdev đ&amp;atilde; cho đăng b&amp;agrave;i viết &amp;ldquo;&lt;a href=&quot;https://topdev.vn/blog/that-nghiep-tuoi-35-khung-hoang-tuoi-30-thuc-ra-duoc-bao-truoc-boi-nhung-con-buon-ngu-tuoi-25/&quot;&gt;Thất nghiệp tuổi 35: Khủng hoảng tuổi 30 thực ra được b&amp;aacute;o trước bởi những cơn buồn ngủ tuổi 25?&lt;/a&gt;&amp;ldquo;, v&amp;agrave; nhiều lập tr&amp;igrave;nh vi&amp;ecirc;n kỳ cựu cho rằng khoảng thời gian sự nghiệp l&amp;agrave;m việc hiệu quả của một lập tr&amp;igrave;nh vi&amp;ecirc;n l&amp;agrave; c&amp;oacute; giới hạn. Nhưng c&amp;acirc;u hỏi đặt ra l&amp;agrave; liệu điều đ&amp;oacute; l&amp;agrave; c&amp;oacute; thật kh&amp;ocirc;ng? v&amp;agrave; n&amp;oacute; c&amp;oacute; nghi&amp;ecirc;m trọng kh&amp;ocirc;ng?&lt;/p&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;Tương lai của một lập tr&amp;igrave;nh vi&amp;ecirc;n sẽ ra sao khi ng&amp;agrave;y c&amp;agrave;ng lớn tuổi?&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;Roadmap sự nghiệp của một lập tr&amp;igrave;nh vi&amp;ecirc;n&amp;nbsp;tr&amp;ocirc;ng sẽ như thế n&amp;agrave;o?&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;Những lựa chọn trong sự nghiệp v&amp;agrave; những kỳ vọng về c&amp;aacute;c lựa chọn đ&amp;oacute; l&amp;agrave; g&amp;igrave;?&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;p&gt;Mọi người đều cho rằng c&amp;aacute;c lập tr&amp;igrave;nh vi&amp;ecirc;n về sau c&amp;oacute; thể trở th&amp;agrave;nh người quản l&amp;yacute; hoặc l&amp;atilde;nh đạo. Nhưng nhiều lập tr&amp;igrave;nh vi&amp;ecirc;n kh&amp;ocirc;ng hiểu được kỳ vọng v&amp;agrave; y&amp;ecirc;u cầu c&amp;ocirc;ng việc của một nh&amp;agrave; quản l&amp;yacute;.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;Chắc chắn, tất cả ch&amp;uacute;ng ta đều c&amp;oacute; những manager, việc trở th&amp;agrave;nh một manager c&amp;oacute; &amp;yacute; nghĩa g&amp;igrave;? C&amp;oacute; những kỳ vọng g&amp;igrave;? V&amp;agrave; sự kh&amp;aacute;c biệt giữa một manager cấp trung v&amp;agrave; leader cấp cao l&amp;agrave; g&amp;igrave;?&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;Trong b&amp;agrave;i viết n&amp;agrave;y, ch&amp;uacute;ng t&amp;ocirc;i sẽ chỉ cho bạn một con đường sự nghiệp từ sự khởi đầu trong lĩnh vực kỹ thuật như một Junior Developer cho đến level cao nhất l&amp;agrave; trở th&amp;agrave;nh một CTO (Gi&amp;aacute;m đốc c&amp;ocirc;ng nghệ).&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;strong&gt;Lưu &amp;yacute;:&lt;/strong&gt;&amp;nbsp;Sự nghiệp mỗi người mỗi kh&amp;aacute;c, sự hướng dẫn n&amp;agrave;y kh&amp;ocirc;ng thể ph&amp;ugrave; hợp với tất cả mọi người. Nhiều bạn sẽ th&amp;iacute;ch hợp với vai tr&amp;ograve; quản l&amp;yacute;, ngược lại cũng rất nhiều bạn đam m&amp;ecirc; code, coi code l&amp;agrave; phải giải tr&amp;iacute; mỗi khi gặp bế tắc chẳng hạn. C&amp;oacute; thể l&amp;uacute;c bạn 22 tuổi bạn chỉ mong l&amp;agrave; được ngồi code v&amp;agrave; kh&amp;ocirc;ng th&amp;iacute;ch việc quản l&amp;yacute;, nhưng biết đ&amp;acirc;u l&amp;ecirc;n 30 bạn lại bắt đầu ch&amp;aacute;n code. V&amp;igrave; vậy hiểu v&amp;agrave; chọn lựa đ&amp;uacute;ng sẽ tr&amp;aacute;nh cho ch&amp;uacute;ng ta hụt hẫng khi gặp phải v&amp;agrave;i trục trặc tr&amp;ecirc;n con đường sự nghiệp.&lt;/p&gt;</p>\r\n\r\n<p>&lt;h2&gt;1.Fresher&lt;/h2&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;a href=&quot;https://topdev.vn/viec-lam-it?q=fresher&quot; rel=&quot;noopener noreferrer&quot; target=&quot;_new&quot;&gt;Fresher&lt;/a&gt;&amp;nbsp;l&amp;agrave; để chỉ những sinh vi&amp;ecirc;n học ng&amp;agrave;nh c&amp;ocirc;ng nghệ th&amp;ocirc;ng tin mới ra trường, những người mới bắt đầu bước ch&amp;acirc;n v&amp;agrave;o c&amp;ocirc;ng việc của lập tr&amp;igrave;nh vi&amp;ecirc;n. Fresher l&amp;agrave; những người đ&amp;atilde; trang bị đầy đủ kiến thức căn bản cần c&amp;oacute;, kiến thức về c&amp;aacute;c logic, cấu tr&amp;uacute;c phần mềm, cơ sở dữ liệu&amp;hellip; V&amp;agrave; cần một m&amp;ocirc;i trường để thực hiện, triển khai, học hỏi v&amp;agrave; ph&amp;aacute;t triển l&amp;ecirc;n c&amp;aacute;c kỹ năng ch&amp;iacute;nh v&amp;agrave; kỹ năng mềm. Bạn c&amp;oacute; thể xem th&amp;ecirc;m&amp;nbsp;&lt;a href=&quot;https://topdev.vn/blog/fresher-la-gi/&quot;&gt;Fresher l&amp;agrave; g&amp;igrave;&lt;/a&gt;&amp;nbsp;tại đ&amp;acirc;y.&lt;/p&gt;</p>\r\n\r\n<p>&lt;h2&gt;2.Junior Developer&lt;/h2&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;0-2 năm kinh nghiệm. Thường l&amp;agrave; người trải qua giai đoạn intern v&amp;agrave; fresher, đ&amp;atilde; c&amp;oacute; kinh nghiệm trong việc lập tr&amp;igrave;nh ứng dụng tr&amp;ecirc;n thực tế.&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;Hiểu biết sơ bộ về to&amp;agrave;n bộ một v&amp;ograve;ng đời ứng dụng, sử dụng ng&amp;ocirc;n ngữ lập tr&amp;igrave;nh hay framework.&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;Hiểu biết về cơ sở dữ liệu, lưu trữ v&amp;agrave; xuất dữ liệu. L&amp;uacute;c n&amp;agrave;y c&amp;oacute; thể viết c&amp;aacute;c chức năng cho ứng dụng, tuy nhi&amp;ecirc;n code sẽ c&amp;oacute; r&amp;aacute;c nhiều do chưa c&amp;oacute; kinh nghiệm tối ưu dẫn để việc chồng ch&amp;eacute;o trong việc truy xuất dữ liệu. L&amp;uacute;c n&amp;agrave;y đ&amp;ocirc;i khi code dở sẽ dẫn đến tốn resource server rất nhiều.&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;p&gt;Khi bạn bắt đầu bước ch&amp;acirc;n v&amp;agrave;o sự nghiệp lập tr&amp;igrave;nh, n&amp;oacute; chắc chắn đầy kh&amp;oacute; khăn v&amp;agrave; dễ khiến bạn nản l&amp;ograve;ng. C&amp;oacute; l&amp;uacute;c bạn cảm thấy độ hiểu biết kiến thức của m&amp;igrave;nh chưa đủ để đ&amp;aacute;p ứng cho c&amp;ocirc;ng việc, kh&amp;ocirc;ng chắc chắn về việc l&amp;agrave;m thế n&amp;agrave;o m&amp;agrave; người ta c&amp;oacute; thể viết ra những ứng dụng lớn v&amp;agrave; phức tạp đến như vậy. V&amp;agrave; đ&amp;ocirc;i khi, bạn lại tự hỏi tại sao m&amp;igrave;nh vẫn chưa l&amp;ecirc;n được cấp độ Senior. Bạn nh&amp;igrave;n v&amp;agrave;o c&amp;aacute;c lập tr&amp;igrave;nh vi&amp;ecirc;n senior kh&amp;aacute;c v&amp;agrave; nghĩ rằng về cơ bản th&amp;igrave; bạn cũng đang l&amp;agrave;m c&amp;ocirc;ng việc giống như họ.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;Điểm yếu của junior đương nhi&amp;ecirc;n ch&amp;iacute;nh l&amp;agrave; kinh nghiệm, ngay cả nhưng bạn th&amp;ocirc;ng minh v&amp;agrave; học hỏi nhanh cũng chưa được tiếp x&amp;uacute;c đến c&amp;aacute;c chức năng hay code cũng như vấn đề h&amp;oacute;c b&amp;uacute;a. Cho n&amp;ecirc;n để giải quyết c&amp;aacute;c vấn đề tr&amp;ecirc;n bạn cần tiếp tục ki&amp;ecirc;n tr&amp;igrave; học hỏi, tự x&amp;acirc;y dựng cho m&amp;igrave;nh một sản phẩm tương tự để c&amp;oacute; thể giải quyết c&amp;aacute;c vấn đề cơ bản một c&amp;aacute;ch gọn g&amp;agrave;ng, khi ấy leader của bạn sẽ thấy bạn đủ vững để truyền kinh nghiệm v&amp;agrave; giao cho bạn c&amp;aacute;ch giải quyết vấn đề kh&amp;oacute; hơn.&lt;/p&gt;</p>\r\n\r\n<p>&lt;h2&gt;3.Senior developer&lt;/h2&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;3-8+ năm kinh nghiệm&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;C&amp;oacute; thể xử l&amp;yacute; c&amp;aacute;c vấn đề phức tạp, viết ứng dụng lớn&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;C&amp;oacute; khả năng thiết kế c&amp;aacute;c cấu tr&amp;uacute;c cơ sở dữ liệu lớn, c&amp;aacute;c t&amp;iacute;nh năng phức tạp của ứng dụng&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;Hiểu biết s&amp;acirc;u sắc về cơ sở dữ liệu v&amp;agrave; c&amp;aacute;c dịch vụ ứng dụng (queues, caching, v.v&amp;hellip;)&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;p&gt;Lập tr&amp;igrave;nh vi&amp;ecirc;n ở level senior l&amp;agrave; những người thực sự quan trọng trong việc x&amp;acirc;y dựng to&amp;agrave;n bộ c&amp;aacute;c ứng dụng ở quy m&amp;ocirc; lớn. L&amp;ecirc;n đến level n&amp;agrave;y, bạn sẽ đứng trước hai hướng đi của sự nghiệp. Một l&amp;agrave; khi bạn hiểu c&amp;ocirc;ng nghệ đủ để trở th&amp;agrave;nh một lập tr&amp;igrave;nh vi&amp;ecirc;n senior, th&amp;igrave; bạn c&amp;oacute; thể đ&amp;atilde; c&amp;oacute; những kinh nghiệm kỹ thuật đủ s&amp;acirc;u để trở th&amp;agrave;nh một technical leader hoặc CTO (Gi&amp;aacute;m đốc c&amp;ocirc;ng nghệ) của một startup, tuy nhi&amp;ecirc;n l&amp;uacute;c n&amp;agrave;y bạn phải học hỏi th&amp;ecirc;m về quản l&amp;yacute; con người, quản l&amp;yacute; một quy tr&amp;igrave;nh ph&amp;aacute;t triển phần mềm&amp;hellip;&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;Ngược lại bạn sẽ tiếp tục đ&amp;agrave;o s&amp;acirc;u kiến ​​thức kỹ thuật, đam m&amp;ecirc; giải quyết những vấn đề về hệ thống lớn, chịu tải cao, n&amp;oacute;i chung l&amp;agrave; bạn kh&amp;ocirc;ng th&amp;iacute;ch d&amp;acirc;y dưa v&amp;agrave;o việc quản l&amp;yacute; con người.&lt;/p&gt;</p>\r\n\r\n<p>&lt;h2&gt;4.Tech lead&lt;/h2&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;5-10+ năm kinh nghiệm lập tr&amp;igrave;nh&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;C&amp;oacute; c&amp;aacute;c kỹ năng của một senior&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;Hiểu đủ s&amp;acirc;u v&amp;agrave; rộng về c&amp;aacute;c c&amp;ocirc;ng nghệ, chọn cho team dev một hay nhiều tech stack để giải quyết vấn đề trong hệ thống lớn.&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;p&gt;Đến level n&amp;agrave;y, bạn sẽ c&amp;oacute; rất nhiều quyết định quan trọng để mọi lập tr&amp;igrave;nh vi&amp;ecirc;n trong team đi theo, n&amp;agrave;o l&amp;agrave; chọn ng&amp;ocirc;n ngữ g&amp;igrave;, chọn tools g&amp;igrave;, thiết kế hệ thống ra sao, theo chuẩn quy tr&amp;igrave;nh l&amp;agrave;m phần mềm n&amp;agrave;o.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;L&amp;uacute;c n&amp;agrave;y c&amp;oacute; đ&amp;ocirc;i khi bạn sẽ code những định nghĩa, những quy luật đặt biến chẳng hạn, tuy nhi&amp;ecirc;n c&amp;ocirc;ng việc ch&amp;iacute;nh thường l&amp;agrave; thiết kế hệ thống va đảm bảo hệ thống c&amp;oacute; thể scale lớn, c&amp;oacute; thể kết hợp nhiều tech stack để vận h&amp;agrave;nh đ&amp;aacute;p ứng nhu cầu.&lt;/p&gt;</p>\r\n\r\n<p>&lt;h2&gt;5.Quản l&amp;yacute; cấp trung&lt;/h2&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;Chức danh n&amp;agrave;y thường l&amp;agrave; Product Manager hoặc Project Manager&lt;/li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;L&amp;agrave; người quyết định rất lớn đế những chức năng cần phải c&amp;oacute; của một sản phẩm th&amp;ocirc;ng qua nghi&amp;ecirc;n cứu, khảo s&amp;aacute;t v&amp;agrave; đo đạc.&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;p&gt;Sau h&amp;agrave;ng năm trời c&amp;ograve;ng lưng ra code bạn đ&amp;atilde; cảm thấy vị tr&amp;iacute; của m&amp;igrave;nh trở n&amp;ecirc;n nh&amp;agrave;m ch&amp;aacute;n v&amp;agrave; c&amp;ocirc;ng việc qu&amp;aacute; nặng nề. Trong khi bạn bị việc rượt đuổi th&amp;igrave; PM của bạn suốt ng&amp;agrave;y đi v&amp;ograve;ng quanh hối th&amp;uacute;c. Bạn cảm thấy stress v&amp;agrave; bất c&amp;ocirc;ng, bạn nghĩ nếu PM l&amp;agrave; &amp;ldquo;người đi hối&amp;rdquo; th&amp;igrave; bạn cũng l&amp;agrave;m được. &amp;ldquo;Phải trở th&amp;agrave;nh PM ng&amp;agrave;y b&amp;acirc;y giờ mới được!&amp;rdquo; &amp;ndash; Bạn quyết t&amp;acirc;m như vậy.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;V&amp;agrave; đ&amp;uacute;ng l&amp;agrave; như vậy, khi đ&amp;atilde; trở th&amp;agrave;nh một PM bạn sẽ kh&amp;ocirc;ng cần phải code nữa. Nhưng b&amp;ugrave; lại cho việc đ&amp;oacute;, bạn c&amp;oacute; &amp;ldquo;cả t&amp;aacute;&amp;rdquo; việc phải thực hiện, v&amp;agrave; tr&amp;aacute;ch nhiệm của bạn cũng &amp;ldquo;cao ngất trời&amp;rdquo;. Xem th&amp;ecirc;m&amp;nbsp;&lt;a href=&quot;https://topdev.vn/blog/pm-la-gi/&quot;&gt;PM l&amp;agrave; g&amp;igrave;&lt;/a&gt;&amp;nbsp;v&amp;agrave;&amp;nbsp;&lt;a href=&quot;https://topdev.vn/blog/lam-sao-de-tro-thanh-product-manager/&quot;&gt;l&amp;agrave;m sao để trở th&amp;agrave;nh Product Manager&lt;/a&gt;&amp;nbsp;th&amp;agrave;nh c&amp;ocirc;ng tại đ&amp;acirc;y.&lt;/p&gt;</p>\r\n\r\n<p>&lt;h2&gt;6.Quản l&amp;yacute; cấp cao&lt;/h2&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;CTO hoặc CEO&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;p&gt;Đến l&amp;uacute;c n&amp;agrave;y bạn sẽ trở th&amp;agrave;nh một người truyền cảm hứng, dẫn dắt c&amp;aacute;c leader v&amp;agrave; team đi theo một vision n&amp;agrave;o đ&amp;oacute;. Bạn ở nấc thang sự nghiệp đỉnh cao n&amp;agrave;y, th&amp;igrave; bạn c&amp;agrave;ng &amp;iacute;t tiếp x&amp;uacute;c với c&amp;ocirc;ng việc lập tr&amp;igrave;nh. Điều quan trọng nhất l&amp;uacute;c n&amp;agrave;y l&amp;agrave; về con người.&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;C&amp;aacute;c nh&amp;agrave; quản l&amp;yacute; cấp trung (mid-level manager) vẫn c&amp;oacute; thể c&amp;oacute; thời gian để vọc vạch với c&amp;ocirc;ng nghệ, nhưng c&amp;aacute;c quản l&amp;yacute; cấp cao phải d&amp;agrave;nh tất cả thời gian của họ để tập trung v&amp;agrave;o vấn đề con người: truyền cảm hứng, tạo động lực, l&amp;atilde;nh đạo, v&amp;agrave; ra chiến lược.&lt;/p&gt;</p>\r\n\r\n<p>&lt;h2&gt;&lt;strong&gt;Kết luận&lt;/strong&gt;&lt;/h2&gt;</p>\r\n\r\n<p>&lt;p&gt;TopDev hy vọng b&amp;agrave;i viết n&amp;agrave;y đ&amp;atilde; cho bạn một số hướng dẫn v&amp;agrave; những hiểu biết để bạn c&amp;oacute; thể chuẩn bị cho tương lai ph&amp;iacute;a trước. Như đ&amp;atilde; n&amp;oacute;i từ đầu, kh&amp;ocirc;ng phải ai cũng ph&amp;ugrave; hợp, điều quan trọng l&amp;agrave; bạn th&amp;iacute;ch l&amp;agrave;m g&amp;igrave; v&amp;agrave; đừng bỏ cuộc. Lu&amp;ocirc;n c&amp;oacute; những lập tr&amp;igrave;nh vi&amp;ecirc;n lớn tuổi nhưng vẫn code miệt m&amp;agrave;i v&amp;igrave; đam m&amp;ecirc;, lu&amp;ocirc;n c&amp;oacute; những t&amp;agrave;i năng trẻ l&amp;ecirc;n l&amp;agrave;m l&amp;atilde;nh đạo, quan trọng hơn hết l&amp;agrave; thấy y&amp;ecirc;u c&amp;ocirc;ng việc m&amp;igrave;nh đang l&amp;agrave;m.&lt;/p&gt;</p>', 'Đường sự nghiệp của một lập trình viên bạn nên biết', 'it', 1, 's114.jpg', 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_notifi_cate`
--

CREATE TABLE `tbl_notifi_cate` (
  `noti_cate_id` int(10) UNSIGNED NOT NULL,
  `noti_cate_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noti_cate_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noti_cate_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noti_cate_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_notifi_cate`
--

INSERT INTO `tbl_notifi_cate` (`noti_cate_id`, `noti_cate_name`, `noti_cate_status`, `noti_cate_slug`, `noti_cate_desc`, `created_at`, `updated_at`) VALUES
(1, 'Thông báo lịch học', '1', 'thong-bao-lich-hoc', 'Trang dùng để đưa thông về lịch học các khóa học cho học viên theo dõi', NULL, NULL),
(2, 'Thông báo lịch thi', '1', 'thong-bao-lich-thi', 'Trang dùng để đưa thông về lịch thi giữa kì, cuối kì cho học viên kịp thời cập nhật.', NULL, NULL),
(4, 'Thông báo kết quả', '1', 'thong-bao-ket-qua', 'Cung cấp điểm thi cho học viên cập nhật', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_noti_post`
--

CREATE TABLE `tbl_noti_post` (
  `noti_post_id` int(10) UNSIGNED NOT NULL,
  `noti_post_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noti_post_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noti_post_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noti_post_status` int(11) NOT NULL,
  `noti_post_document` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noti_cate_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_noti_post`
--

INSERT INTO `tbl_noti_post` (`noti_post_id`, `noti_post_title`, `noti_post_slug`, `noti_post_desc`, `noti_post_status`, `noti_post_document`, `noti_cate_id`, `created_at`, `updated_at`) VALUES
(2, 'Điểm thi giữa kì lớp PHPNC01', 'diem-thi-giua-ki-lop-phpnc01', '<p>C&aacute;c học vi&ecirc;n xem điểm của m&igrave;nh. Nếu c&oacute; sai s&oacute;t th&ocirc;ng b&aacute;o sớm với giảng vi&ecirc;n để điều chỉnh</p>', 1, 'CV_TTS_PHP22.pdf', 4, NULL, NULL),
(3, 'Lịch thi khóa học Lập trình game lớp LTGAME01 đã có danh sách rồi. Học viên vào tải về xem', 'lich-thi-khoa-hoc-lap-trinh-game-ltgame01-da-co-lich-thi', 'Lịch thi khóa học Lập trình game lớp LTGAME01 đã có danh sách rồi. Học viên vào tải về xem', 1, 'C154.pdf', 2, NULL, NULL),
(5, 'Điểm thi giữa kì lớp PHPNC01', 'diem-thi-giua-ki-lop-phpnc01', '<p>sgsdg</p>\r\n\r\n<p>sdgsdgsg</p>', 1, 'danh-sach-luong40.xlsx', 4, NULL, NULL),
(6, 'Điểm thi giữa kì lớp PHPNC01', 'diem-thi-giua-ki-lop-phpnc01', '<p>fghgfhgfh</p>', 1, 'danh-sach-luong3.xlsx', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_status` int(11) NOT NULL,
  `order_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_orders`
--

INSERT INTO `tbl_orders` (`order_id`, `customer_id`, `order_status`, `order_code`, `created_at`, `updated_at`) VALUES
(10, 3, 2, 'f38ac', '2021-05-14 06:59:36', NULL),
(11, 3, 1, 'd5bda', '2021-05-17 09:45:20', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(10) UNSIGNED NOT NULL,
  `class_id` int(11) NOT NULL,
  `order_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tuition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_number` int(11) NOT NULL,
  `coupon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `class_id`, `order_code`, `class_name`, `tuition`, `student_number`, `coupon`, `created_at`, `updated_at`) VALUES
(7, 10, 'f38ac', 'Lập trình game Unity', '8000000', 1, 'no', NULL, NULL),
(8, 10, 'd5bda', 'Lập trình game Unity', '8000000', 1, 'no', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_position`
--

CREATE TABLE `tbl_position` (
  `position_id` int(10) UNSIGNED NOT NULL,
  `position_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_position`
--

INSERT INTO `tbl_position` (`position_id`, `position_name`, `created_at`, `updated_at`) VALUES
(1, 'Nhân viên', NULL, NULL),
(2, 'Giáo viên', NULL, NULL),
(3, 'Giám đốc', NULL, NULL),
(4, 'Kế toán', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_programminglanguage`
--

CREATE TABLE `tbl_programminglanguage` (
  `language_id` int(10) UNSIGNED NOT NULL,
  `language_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_programminglanguage`
--

INSERT INTO `tbl_programminglanguage` (`language_id`, `language_name`, `language_desc`, `language_keywords`, `language_status`, `created_at`, `updated_at`) VALUES
(1, 'PHP & MYSQL', 'etghgdh', 'dfh', 1, NULL, NULL),
(2, 'Word', 'sD', 'Ada', 1, NULL, NULL),
(3, 'Unity', 'aD', 'ada', 1, NULL, NULL),
(4, 'C#', 'AdZXzX', 'zXzXz', 1, NULL, NULL),
(5, 'Photoshop CS6', 'sdsd', 'sadsa', 1, NULL, NULL),
(6, 'Phần mềm', 'các phần mềm hỗ trợ cho các khóa học tin học văn phòng', 'không có', 1, NULL, NULL),
(7, 'PYTHON', 'ngôn ngữ lập trình1', 'python', 1, NULL, NULL),
(8, 'HTML & CSS & JS', 'ngôn ngữ lập trình fontend', 'html css js', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id_roles` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_roles`
--

INSERT INTO `tbl_roles` (`id_roles`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'director', NULL, NULL),
(3, 'teacher', NULL, NULL),
(4, 'employee', NULL, NULL),
(5, 'accountant', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(10) UNSIGNED NOT NULL,
  `slider_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_name`, `slider_image`, `slider_desc`, `slider_status`, `created_at`, `updated_at`) VALUES
(1, 'MOS Excel', 'hu14.png', 'giam code', 1, NULL, NULL),
(3, 'Giảm giá 30/04', 'h386.png', 'đfdsf', 1, NULL, NULL),
(4, 'Giảm giá Word', 'hu276.png', 'giảm giá word', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_social`
--

CREATE TABLE `tbl_social` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `provider_user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_social`
--

INSERT INTO `tbl_social` (`user_id`, `provider_user_id`, `provider`, `user`, `created_at`, `updated_at`) VALUES
(1, '2871327809804830', 'facebook', 1, NULL, NULL),
(2, '100821101521100723134', 'GOOGLE', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_statistical`
--

CREATE TABLE `tbl_statistical` (
  `statistical_id` int(11) NOT NULL,
  `order_date` varchar(100) NOT NULL,
  `tuition` varchar(200) NOT NULL,
  `clasfit` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_statistical`
--

INSERT INTO `tbl_statistical` (`statistical_id`, `order_date`, `tuition`, `clasfit`, `quantity`, `total_order`) VALUES
(1, '2020-11-08', '20000000', '7000000', 90, 10),
(2, '2020-11-07', '68000000', '9000000', 60, 8),
(3, '2020-11-06', '30000000', '3000000', 45, 7),
(4, '2020-11-05', '45000000', '3800000', 30, 9),
(5, '2020-11-04', '30000000', '1500000', 15, 12),
(6, '2020-11-03', '8000000', '700000', 65, 30),
(7, '2020-11-02', '28000000', '23000000', 32, 20),
(8, '2020-11-01', '25000000', '20000000', 7, 6),
(9, '2020-10-31', '36000000', '28000000', 40, 15),
(10, '2020-10-30', '50000000', '13000000', 89, 19),
(11, '2020-10-29', '20000000', '15000000', 63, 11),
(12, '2020-10-28', '25000000', '16000000', 94, 14),
(13, '2020-10-27', '32000000', '17000000', 16, 10),
(14, '2020-10-26', '33000000', '19000000', 14, 5),
(15, '2020-10-25', '36000000', '18000000', 22, 12),
(16, '2020-10-24', '34000000', '20000000', 33, 20),
(17, '2020-10-23', '25000000', '16000000', 94, 14),
(18, '2020-10-22', '12000000', '7000000', 16, 10),
(19, '2020-10-21', '63000000', '19000000', 14, 5),
(20, '2020-10-20', '66000000', '18000000', 22, 12),
(21, '2020-10-19', '74000000', '20000000', 33, 20),
(22, '2020-10-18', '63000000', '19000000', 14, 5),
(23, '2020-10-17', '66000000', '18000000', 23, 12),
(24, '2020-10-16', '74000000', '20000000', 32, 20),
(25, '2020-10-15', '63000000', '19000000', 14, 5),
(26, '2020-10-14', '66000000', '18000000', 23, 12),
(27, '2020-10-13', '74000000', '20000000', 33, 20),
(28, '2020-10-12', '66000000', '18000000', 23, 12),
(29, '2020-10-11', '74000000', '20000000', 10, 20),
(30, '2020-10-10', '63000000', '19000000', 14, 5),
(31, '2020-10-09', '66000000', '18000000', 23, 12),
(32, '2020-10-08', '74000000', '20000000', 15, 20),
(33, '2020-10-07', '66000000', '18000000', 23, 12),
(34, '2020-10-06', '74000000', '20000000', 30, 22),
(35, '2020-10-05', '66000000', '18000000', 23, 12),
(36, '2020-10-04', '74000000', '20000000', 32, 20),
(37, '2020-10-03', '63000000', '19000000', 14, 5),
(38, '2020-10-02', '66000000', '18000000', 23, 12),
(39, '2020-10-01', '74000000', '20000000', 32, 20),
(40, '2020-09-30', '63000000', '19000000', 14, 5),
(41, '2020-09-29', '66000000', '18000000', 23, 12),
(42, '2020-09-28', '74000000', '20000000', 15, 20),
(43, '2020-09-27', '66000000', '18000000', 23, 12),
(44, '2020-09-26', '74000000', '20000000', 30, 22),
(45, '2020-09-25', '66000000', '18000000', 23, 12),
(46, '2020-09-24', '74000000', '20000000', 32, 20),
(47, '2020-09-23', '63000000', '19000000', 14, 5),
(48, '2020-09-22', '66000000', '18000000', 23, 12),
(49, '2020-09-21', '74000000', '20000000', 32, 20),
(50, '2020-09-20', '63000000', '19000000', 14, 5),
(51, '2020-09-19', '66000000', '18000000', 23, 12),
(52, '2020-09-18', '74000000', '20000000', 15, 20),
(53, '2020-09-17', '66000000', '18000000', 23, 12),
(54, '2020-09-16', '74000000', '20000000', 30, 22),
(55, '2020-09-15', '66000000', '18000000', 23, 12),
(56, '2020-09-14', '74000000', '20000000', 32, 20),
(57, '2020-09-13', '63000000', '19000000', 14, 5),
(58, '2020-09-12', '66000000', '18000000', 23, 12),
(59, '2020-09-11', '74000000', '20000000', 32, 20),
(60, '2020-09-10', '63000000', '19000000', 14, 5),
(61, '2020-09-09', '66000000', '18000000', 23, 12),
(62, '2020-09-08', '74000000', '20000000', 15, 20),
(63, '2020-09-07', '66000000', '18000000', 23, 12),
(64, '2020-09-06', '74000000', '20000000', 30, 22),
(65, '2020-09-05', '66000000', '18000000', 23, 12),
(66, '2020-09-04', '74000000', '20000000', 32, 20),
(67, '2020-09-03', '63000000', '19000000', 14, 5),
(68, '2020-09-02', '66000000', '18000000', 23, 12),
(69, '2020-09-01', '74000000', '20000000', 32, 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_students`
--

CREATE TABLE `tbl_students` (
  `id` int(10) UNSIGNED NOT NULL,
  `MaHocVien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TenHocVien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgaySinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GhiChu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TinhTrang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` int(11) NOT NULL,
  `MaPH` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_students`
--

INSERT INTO `tbl_students` (`id`, `MaHocVien`, `TenHocVien`, `NgaySinh`, `Lop`, `Diachi`, `GhiChu`, `TinhTrang`, `SDT`, `MaPH`, `created_at`, `updated_at`) VALUES
(2, 'VC02', 'Nguyễn Đình Hữu', '1998-05-10', 'LTFONTEND-CB', 'Hà Tĩnh', 'Siêu coder', '1', 398202124, 'PH02', NULL, NULL),
(6, 'VC05', 'Trần Long C', '1995-09-22', 'LTGAME01', 'Quảng Bình', 'Không', '1', 39236130, 'PH05', NULL, NULL),
(7, 'VC07', 'Lưu Đức Hòa', '2001-06-29', 'FOREXNC02', 'Hà Tĩnh', 'Lười vl', '1', 392361890, 'PH07', NULL, NULL),
(8, 'VC03', 'Châu Nhuận Phát', '1974-06-18', 'FOREXNC01', 'Trung Quốc', 'Siêu coder', '1', 3923613, 'PH08', NULL, NULL),
(9, 'VC011', 'Tiểu Long Nữ', '1994-11-25', 'FOREXNC01', 'Trung Quốc', 'Đẹp quá', '1', 3971243, 'PH011', NULL, NULL),
(10, 'VC08', 'Tiểu Yến Tử', '1988-06-17', 'PHP01', 'Trung Quốc', 'Không', '1', 39236123, 'PH07', NULL, NULL),
(12, 'VC09', 'Vi Tiểu Bảo', '1989-10-23', 'PHP02', 'Trung Quốc', 'Không', '1', 39236130, 'PH05', NULL, NULL),
(13, 'VC10', 'Lưu Bị', '1990-06-30', 'LTGAME01', 'Trung Quốc', 'Lười vls', '1', 39236130, 'PH02', NULL, NULL),
(14, 'VC12', 'Ngô Thị Bích Ngân', '1999-11-20', 'PHP02', 'Bình Thuận', NULL, '1', 3928231, 'PH05', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thematic`
--

CREATE TABLE `tbl_thematic` (
  `thematic_id` int(10) UNSIGNED NOT NULL,
  `thematic_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thematic_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thematic_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_thematic`
--

INSERT INTO `tbl_thematic` (`thematic_id`, `thematic_name`, `thematic_desc`, `thematic_status`, `created_at`, `updated_at`) VALUES
(1, 'Lập trình Website', 'htfhrt', 1, NULL, NULL),
(2, 'Lập trình GAME', 'game', 1, NULL, NULL),
(3, 'Đồ họa đa truyền thông', 'sdas', 1, NULL, NULL),
(4, 'Lập trình PYTHON', 'sdsad', 1, NULL, NULL),
(5, 'Tin Học Văn phòng', 'sadsa', 1, NULL, NULL),
(6, 'Forex', 'kiếm tiền online', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_thu_chi`
--

CREATE TABLE `tbl_thu_chi` (
  `id` int(10) UNSIGNED NOT NULL,
  `NgayThang` date NOT NULL,
  `ThuChi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Loai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NguoiThu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NoiDung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoTienThu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoTienChi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GhiChu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_thu_chi`
--

INSERT INTO `tbl_thu_chi` (`id`, `NgayThang`, `ThuChi`, `Loai`, `NguoiThu`, `NoiDung`, `SoTienThu`, `SoTienChi`, `GhiChu`, `created_at`, `updated_at`) VALUES
(3, '2021-04-29', 'Thu', 'Thu học phí', 'KT01', 'Tiền học phí khóa học lập trình php & mysql', '4500000', '0', 'không', NULL, NULL),
(4, '2021-05-01', 'Thu', 'Thu học phí', 'KT01', 'Tiền học phí khóa học forex', '5000000', '0', 'không', NULL, NULL),
(5, '2021-04-06', 'Chi', 'Chi phí quảng cáo', 'KT01', 'Chi tiền sửa wifi', '0', '1500000', 'Không', NULL, NULL),
(6, '2021-05-04', 'Chi', 'Chi phí lương', 'KT01', 'Trả lương admin (Nguyễn Đình Hữu)', '0', '2500000', 'Không', NULL, NULL),
(7, '2021-05-05', 'Chi', 'Chi phí quảng cáo', 'KT01', 'Chi phí quảng cáo website', '0', '3500000', NULL, NULL, NULL),
(8, '2021-04-24', 'Chi', 'Chi phí lương', 'KT01', 'lương giáo viên: Lê xuân Hồng', '0', '10000000', NULL, NULL, NULL),
(9, '2021-05-05', 'Thu', 'Thu học phí', 'KT01', 'Tiền học phí khóa học forex', '4500000', '0', 'không', NULL, NULL),
(10, '2022-10-06', 'Thu', 'Thu học phí', 'KT01', 'Tiền học phí khóa học lập trình php & mysql', '4500000', '0', NULL, NULL, NULL),
(11, '2022-10-06', 'Chi', 'Khuyến mãi học phí', 'KT01', 'miễn giảm học phí do dịch covid19', '0', '1500000', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Chỉ mục cho bảng `tbl_admin_role`
--
ALTER TABLE `tbl_admin_role`
  ADD PRIMARY KEY (`id_admin_roles`);

--
-- Chỉ mục cho bảng `tbl_bangluong`
--
ALTER TABLE `tbl_bangluong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_cahoc`
--
ALTER TABLE `tbl_cahoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_class`
--
ALTER TABLE `tbl_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Chỉ mục cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Chỉ mục cho bảng `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `tbl_daotao`
--
ALTER TABLE `tbl_daotao`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_diem`
--
ALTER TABLE `tbl_diem`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `MaHocVien` (`MaHocVien`);

--
-- Chỉ mục cho bảng `tbl_diemdanh`
--
ALTER TABLE `tbl_diemdanh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_information`
--
ALTER TABLE `tbl_information`
  ADD PRIMARY KEY (`info_id`);

--
-- Chỉ mục cho bảng `tbl_kehoach`
--
ALTER TABLE `tbl_kehoach`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_lichthi`
--
ALTER TABLE `tbl_lichthi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_loai_thu_chi`
--
ALTER TABLE `tbl_loai_thu_chi`
  ADD PRIMARY KEY (`Loai_id`);

--
-- Chỉ mục cho bảng `tbl_lop_hoc`
--
ALTER TABLE `tbl_lop_hoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_news_category`
--
ALTER TABLE `tbl_news_category`
  ADD PRIMARY KEY (`news_cate_id`);

--
-- Chỉ mục cho bảng `tbl_news_post`
--
ALTER TABLE `tbl_news_post`
  ADD PRIMARY KEY (`news_post_id`);

--
-- Chỉ mục cho bảng `tbl_notifi_cate`
--
ALTER TABLE `tbl_notifi_cate`
  ADD PRIMARY KEY (`noti_cate_id`);

--
-- Chỉ mục cho bảng `tbl_noti_post`
--
ALTER TABLE `tbl_noti_post`
  ADD PRIMARY KEY (`noti_post_id`);

--
-- Chỉ mục cho bảng `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Chỉ mục cho bảng `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Chỉ mục cho bảng `tbl_position`
--
ALTER TABLE `tbl_position`
  ADD PRIMARY KEY (`position_id`);

--
-- Chỉ mục cho bảng `tbl_programminglanguage`
--
ALTER TABLE `tbl_programminglanguage`
  ADD PRIMARY KEY (`language_id`);

--
-- Chỉ mục cho bảng `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- Chỉ mục cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Chỉ mục cho bảng `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `tbl_statistical`
--
ALTER TABLE `tbl_statistical`
  ADD PRIMARY KEY (`statistical_id`);

--
-- Chỉ mục cho bảng `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `MaHocVien` (`MaHocVien`);

--
-- Chỉ mục cho bảng `tbl_thematic`
--
ALTER TABLE `tbl_thematic`
  ADD PRIMARY KEY (`thematic_id`);

--
-- Chỉ mục cho bảng `tbl_thu_chi`
--
ALTER TABLE `tbl_thu_chi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_admin_role`
--
ALTER TABLE `tbl_admin_role`
  MODIFY `id_admin_roles` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `tbl_bangluong`
--
ALTER TABLE `tbl_bangluong`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_cahoc`
--
ALTER TABLE `tbl_cahoc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_class`
--
ALTER TABLE `tbl_class`
  MODIFY `class_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `tbl_coupon`
--
ALTER TABLE `tbl_coupon`
  MODIFY `coupon_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_daotao`
--
ALTER TABLE `tbl_daotao`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_diem`
--
ALTER TABLE `tbl_diem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `tbl_diemdanh`
--
ALTER TABLE `tbl_diemdanh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_information`
--
ALTER TABLE `tbl_information`
  MODIFY `info_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_kehoach`
--
ALTER TABLE `tbl_kehoach`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_lichthi`
--
ALTER TABLE `tbl_lichthi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_loai_thu_chi`
--
ALTER TABLE `tbl_loai_thu_chi`
  MODIFY `Loai_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_lop_hoc`
--
ALTER TABLE `tbl_lop_hoc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_news_category`
--
ALTER TABLE `tbl_news_category`
  MODIFY `news_cate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_news_post`
--
ALTER TABLE `tbl_news_post`
  MODIFY `news_post_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tbl_notifi_cate`
--
ALTER TABLE `tbl_notifi_cate`
  MODIFY `noti_cate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_noti_post`
--
ALTER TABLE `tbl_noti_post`
  MODIFY `noti_post_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_position`
--
ALTER TABLE `tbl_position`
  MODIFY `position_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_programminglanguage`
--
ALTER TABLE `tbl_programminglanguage`
  MODIFY `language_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id_roles` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_statistical`
--
ALTER TABLE `tbl_statistical`
  MODIFY `statistical_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tbl_thematic`
--
ALTER TABLE `tbl_thematic`
  MODIFY `thematic_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_thu_chi`
--
ALTER TABLE `tbl_thu_chi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
