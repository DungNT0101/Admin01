-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th6 13, 2024 lúc 10:18 PM
-- Phiên bản máy phục vụ: 5.7.30-log-cll-lve
-- Phiên bản PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ginnycom657b_ginny_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dashboard`
--

CREATE TABLE `dashboard` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` text,
  `hotline` varchar(255) DEFAULT NULL,
  `zalo` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `dashboard`
--

INSERT INTO `dashboard` (`id`, `title`, `keywords`, `description`, `hotline`, `zalo`, `facebook`, `google`, `created_at`, `updated_at`) VALUES
(1, 'Ginny Shop', 'Ginny shop', 'Ginny shop', '0332555388', '0332555388', 'https://www.facebook.com/Ginny.shop85/', NULL, NULL, '2024-05-27 14:23:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kien_thuc`
--

CREATE TABLE `kien_thuc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` text,
  `type` tinyint(4) DEFAULT NULL,
  `home` tinyint(4) DEFAULT NULL,
  `hot` tinyint(4) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `content` text,
  `images` text,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `kien_thuc`
--

INSERT INTO `kien_thuc` (`id`, `title`, `slug`, `keywords`, `description`, `type`, `home`, `hot`, `avatar`, `content`, `images`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Tiêu chuẩn SGS', 'tieu-chuan-sgs', 'ginny.shop', 'Tiêu chuẩn SGS', NULL, 1, 1, 'images/kien_thuc/tieu-chuan-sgs.jpg', '<h1 class=\"title-head\">Ti&ecirc;u chuẩn SGS l&agrave; g&igrave;? Lợi &iacute;ch của chứng nhận kiểm định quốc tế SGS...</h1>\r\n<p>Chắc hẳn nhiều người trong ch&uacute;ng ta đ&atilde; nh&igrave;n thấy tr&ecirc;n bao b&igrave;, nh&atilde;n m&aacute;c nhiều sản phẩm m&igrave;nh sử dụng c&oacute; xuất hiện d&ograve;ng chữ &ldquo;ti&ecirc;u chuẩn SGS&rdquo;. Nhưng lại hiếm ai biết v&agrave; hiểu được<strong>&nbsp;ti&ecirc;u chuẩn</strong>&nbsp;<strong>SGS l&agrave; g&igrave;</strong>? Vai tr&ograve; của chứng nhận n&agrave;y? Tại sao bạn n&ecirc;n t&igrave;m mua sản phẩm c&oacute; nh&atilde;n.&nbsp; &nbsp;m&aacute;c của SGS? H&atilde;y c&ugrave;ng t&igrave;m hiểu ngay nh&eacute;!</p>\r\n<h2>1. SGS l&agrave; g&igrave;? Kh&aacute;i qu&aacute;t về vai tr&ograve; v&agrave; đối tượng của SGS</h2>\r\n<p>SGS l&agrave; t&ecirc;n viết tắt của Soci&eacute;t&eacute; G&eacute;n&eacute;rale de Surveillance SA, l&agrave; một c&ocirc;ng ty đa quốc gia được th&agrave;nh lập năm 1878, c&oacute; trụ sở tại Thụy Sỹ. SGS hoạt động rộng khắp với mạng lưới gồm 2.600 văn ph&ograve;ng v&agrave; ph&ograve;ng th&iacute; nghiệm tr&ecirc;n khắp thế giới.</p>\r\n<p>SGS chuy&ecirc;n cung cấp dịch vụ kiểm định, x&aacute;c minh, thử nghiệm v&agrave; chứng nhận chất lượng sản phẩm đạt c&aacute;c&nbsp;<strong><a href=\"https://baobixanh.com.vn/tieu-chuan-chung-nhan\">ti&ecirc;u chuẩn về sức khỏe, an to&agrave;n h&agrave;ng đầu thế giới.</a></strong></p>\r\n<p>Với hơn 97.000 nh&acirc;n vi&ecirc;n từ nh&agrave; khoa học, kỹ sư, b&aacute;c sĩ cho đến nh&agrave; h&oacute;a học, chuy&ecirc;n vi&ecirc;n đ&aacute;nh gi&aacute; v&agrave; gi&aacute;m định vi&ecirc;n. SGS được v&iacute; l&agrave; biểu tượng chất lượng to&agrave;n cầu. Vậy tổ chức n&agrave;y c&oacute; vai tr&ograve; g&igrave;? Đối tượng l&agrave; ai? C&ugrave;ng xem ngay nh&eacute;!</p>\r\n<h3>Vai tr&ograve; của tổ chức kiểm định chất lượng quốc tế</h3>\r\n<p>B&ecirc;n cạnh những chứng nhận nổi tiếng kh&aacute;c như&nbsp;<strong><a href=\"https://baobixanh.com.vn/tieu-chuan-haccp-la-gi\">HACCP</a></strong>. Th&igrave; SGS c&oacute;&nbsp;vai tr&ograve; ch&iacute;nh l&agrave; kiểm tra chất lượng v&agrave; thực trạng sản phẩm của doanh nghiệp c&oacute; đ&aacute;p ứng được c&aacute;c ti&ecirc;u chuẩn về sức khoẻ, an to&agrave;n đ&atilde; đặt ra hay kh&ocirc;ng.</p>\r\n<p>V&igrave; vậy, giấy chứng nhận SGS được coi l&agrave; cơ sở để người ti&ecirc;u d&ugrave;ng dựa v&agrave;o đ&oacute; chọn ra sản phẩm chất lượng, đảm bảo an to&agrave;n với sức khỏe khi sử dụng.</p>\r\n<p>Đ&acirc;y l&agrave; ti&ecirc;u chuẩn nhằm hướng tới mục đ&iacute;ch hạn chế c&aacute;c chất độc hại trong c&aacute;c sản phẩm phục vụ cho đời sống sinh hoạt của con người. Từ đồ gia dụng như bếp, tủ lạnh, m&aacute;y t&iacute;nh, tivi,&hellip; Hoặc c&aacute;c sản phẩm bao b&igrave; như ly giấy, t&ocirc; giấy,&nbsp;<a href=\"https://baobixanh.com.vn/ly-nhua\">ly nhựa cao cấp</a>, chai nhựa&hellip;</p>\r\n<h3>Ti&ecirc;u chuẩn SGS &aacute;p dụng cho đối tượng n&agrave;o?</h3>\r\n<p>Thực tế, SGS kh&ocirc;ng chỉ d&agrave;nh cho một số doanh nghiệp nhất định n&agrave;o cả. M&agrave; d&ugrave; loại h&igrave;nh doanh nghiệp l&agrave; g&igrave;, đang hoạt động trong lĩnh vực n&agrave;o, quy m&ocirc; ra sao th&igrave; đều c&oacute; thể &aacute;p dụng ti&ecirc;u chuẩn n&agrave;y.</p>\r\n<p>Theo đ&oacute;, ti&ecirc;u chuẩn kiểm định chất lượng quốc tế SGS &aacute;p dụng đa dạng c&aacute;c c&ocirc;ng ty/xưởng/doanh nghiệp sản xuất, chế biến v&agrave; ph&acirc;n phối trong c&aacute;c ng&agrave;nh n&ocirc;ng nghiệp, h&agrave;ng ti&ecirc;u d&ugrave;ng b&aacute;n lẻ đến h&oacute;a học, m&ocirc;i trường hay năng lượng&hellip;</p>\r\n<p>Đặc biệt l&agrave; c&aacute;c doanh nghiệp muốn chứng tỏ khả năng cung cấp dịch vụ, sản phẩm một c&aacute;ch chất lượng, đ&aacute;p ứng được c&aacute;c y&ecirc;u cầu của kh&aacute;ch h&agrave;ng cũng như c&aacute;c luật định v&agrave; chế định hiện h&agrave;nh.</p>\r\n<h2>2. Tại sao n&ecirc;n chọn sản phẩm đạt chứng nhận SGS</h2>\r\n<p>Hiện nay tr&ecirc;n thị trường, bất cứ sản phẩm n&agrave;o, d&ugrave; l&agrave; bao b&igrave; đựng thực phẩm hay đồ gia dụng cũng c&oacute; nhiều nguồn cung cấp kh&aacute;c nhau.</p>\r\n<p>Thực trạng n&agrave;y khiến người ti&ecirc;u d&ugrave;ng hoang mang kh&ocirc;ng biết n&ecirc;n lựa chọn v&agrave; đặt niềm tin v&agrave;o sản phẩm của doanh nghiệp n&agrave;o. V&agrave; ti&ecirc;u chuẩn SGS ra đời sẽ gi&uacute;p bạn điều n&agrave;y.</p>\r\n<p>Theo đ&oacute;, Tổ chức kiểm định chất lượng quốc tế cấm 6 loại h&oacute;a chất đặc biệt nguy hiểm đối với m&ocirc;i trường v&agrave; sức khỏe con người gồm: Cadmium (Cd), Thuỷ ng&acirc;n (Hg), Ch&igrave; (Pb), Hexavalent Chromium ho&aacute; trị 6 (Cr), PBBs v&agrave; chất PBDEs.</p>\r\n<p>Đồng thời, từ th&aacute;ng 7/ 2006, tất cả những sản phẩm chứa một trong s&aacute;u chất tr&ecirc;n đều kh&ocirc;ng được ph&eacute;p nhập khẩu v&agrave; b&agrave;y b&aacute;n tại c&aacute;c quốc gia Ch&acirc;u &Acirc;u (EU).</p>\r\n<p>Nếu doanh nghiệp muốn b&aacute;n sản phẩm v&agrave;o thị trường Ch&acirc;u &Acirc;u th&igrave; phải c&oacute; chứng nhận SGS k&egrave;m k&yacute; hiệu logo &ldquo;RoHS &ndash; Compliant&rdquo;, tức l&agrave; đ&atilde; được chứng minh l&agrave; sản phẩm kh&ocirc;ng chứa 6 chất độc hại n&ecirc;u tr&ecirc;n.</p>\r\n<p>Ch&iacute;nh v&igrave; vậy, chọn sản phẩm c&oacute; chứng nhận SGS l&agrave; giải ph&aacute;p h&agrave;ng đầu cho người d&ugrave;ng. Bởi lẽ, c&aacute;c sản phẩm n&agrave;y đ&atilde; trải qua c&aacute;c kh&acirc;u kiểm định, x&aacute;c minh về chất lượng, an to&agrave;n từ ch&iacute;nh c&aacute;c đội ngũ chuy&ecirc;n gia. Bạn c&oacute; thể y&ecirc;n t&acirc;m tuyệt đối khi sử dụng ch&uacute;ng.</p>\r\n<p>Với những chia sẻ tr&ecirc;n đ&acirc;y, hi vọng c&aacute;c bạn đ&atilde; hiểu r&otilde;&nbsp;<strong>ti&ecirc;u chuẩn</strong>&nbsp;<strong>SGS l&agrave; g&igrave;</strong> cũng như lợi &iacute;ch m&agrave; n&oacute; mang lại. T&oacute;m lại, đứng dưới vai tr&ograve; l&agrave; người ti&ecirc;u d&ugrave;ng th&ocirc;ng th&aacute;i, bạn n&ecirc;n lựa chọn những sản phẩm c&oacute; chứng nhận SGS g&oacute;p phần đảm bảo sự an to&agrave;n sức khoẻ cho ch&iacute;nh bản th&acirc;n v&agrave; gia đ&igrave;nh nh&eacute;!</p>', NULL, NULL, '2024-03-29 17:40:10', '2024-05-29 08:06:23'),
(3, 'Sáp thơm ô tô là gì?', 'sap-thom-o-to-la-gi', 'ginny.shop', 'Sáp thơm ô tô là gì?', NULL, 1, 1, 'images/kien_thuc/sap-thom-o-to-la-gi.png', '<h2><strong>S&aacute;p thơm &ocirc; t&ocirc; l&agrave; g&igrave;?</strong></h2>\r\n<p dir=\"ltr\">S&aacute;p thơm xe &ocirc; t&ocirc; l&agrave; một phụ kiện kh&ocirc;ng thể thiếu trong c&aacute;c h&atilde;ng xe &ocirc; t&ocirc;. Sản phẩm n&agrave;y thường được chủ xe sử dụng để l&agrave;m thơm khoang xe, loại bỏ m&ugrave;i h&ocirc;i, ẩm mốc v&agrave; mang lại kh&ocirc;ng gian thư gi&atilde;n trong qu&atilde;ng đường di chuyển d&agrave;i hoặc ngắn.</p>\r\n<h2><strong>Hướng dẫn c&aacute;ch chọn mua s&aacute;p nước hoa &ocirc; t&ocirc;</strong></h2>\r\n<p dir=\"ltr\">S&aacute;p thơm &ocirc; t&ocirc; mặc d&ugrave; l&agrave; giải ph&aacute;p tốt cho nhiều chủ xe, nhưng kh&ocirc;ng phải ai cũng biết c&aacute;ch mua s&aacute;p thơm nước hoa xe &ocirc; t&ocirc; đ&uacute;ng c&aacute;ch. V&igrave; vậy, khi chọn lựa cho m&igrave;nh d&ograve;ng sản phẩm ph&ugrave; hợp h&atilde;y lưu &yacute; đến những yếu tố sau đ&acirc;y.</p>\r\n<h3><strong>Nguồn gốc r&otilde; r&agrave;ng, an to&agrave;n</strong></h3>\r\n<p dir=\"ltr\">Với mọi loại mặt h&agrave;ng kể cả s&aacute;p nước hoa &ocirc; t&ocirc;, nếu bạn kh&ocirc;ng tra r&otilde; nguồn gốc của sản phẩm c&oacute; thể g&acirc;y ra nhiều hậu quả đ&aacute;ng tiếc khi mua phải h&agrave;ng giả. V&igrave; thế, trước khi mua người d&ugrave;ng cần t&igrave;m hiểu kỹ nguồn gốc xuất xứ v&agrave; c&aacute;c th&ocirc;ng tin chi tiết li&ecirc;n quan. Yếu tố th&agrave;nh phần an to&agrave;n cho sức khỏe của bạn lu&ocirc;n đặt tr&ecirc;n h&agrave;ng đầu so với gi&aacute; cả.&nbsp;</p>\r\n<h3><strong>M&ugrave;i hương ph&ugrave; hợp theo m&ugrave;a, kh&iacute; hậu</strong></h3>\r\n<p dir=\"ltr\">Việc chọn s&aacute;p thơm &ocirc; t&ocirc; cũng tương tự như c&aacute;ch bạn chọn nước hoa cho bản th&acirc;n, m&ugrave;i s&aacute;p thơm cũng gi&uacute;p bạn thể hiện phong c&aacute;ch c&aacute; nh&acirc;n. Ngo&agrave;i thể hiện t&iacute;nh c&aacute; nh&acirc;n, người d&ugrave;ng cũng cần lưu &yacute; đến m&ugrave;i hương th&iacute;ch hợp với thời tiết v&agrave; kh&iacute; hậu. Chẳng hạn trong những ng&agrave;y h&egrave; nắng n&oacute;ng, bạn n&ecirc;n chọn hương thơm c&oacute; m&ugrave;i bạc h&agrave;, chanh hay hương t&aacute;o,...C&ograve;n với những ng&agrave;y trời lạnh, bạn h&atilde;y chọn s&aacute;p thơm c&oacute; m&ugrave;i c&agrave; ph&ecirc;, quế,...để tạo cảm gi&aacute;c ấm &aacute;p v&agrave; dễ chịu.&nbsp;</p>\r\n<h3><strong>S&aacute;p thơm được chiết xuất tự nhi&ecirc;n, độ bền cao</strong></h3>\r\n<p dir=\"ltr\">Nếu bạn mua s&aacute;p thơm m&agrave; kh&ocirc;ng t&igrave;m hiểu kỹ về th&agrave;nh phần, c&oacute; thể mua phải s&aacute;p thơm nước hoa c&oacute; th&agrave;nh phần ho&aacute; học. Kh&ocirc;ng chỉ c&oacute; m&ugrave;i hương qu&aacute; nồng, gắt m&agrave; khi sử dụng trong thời gian d&agrave;i sẽ ảnh hưởng đến sức khỏe của bạn. V&igrave; vậy, người d&ugrave;ng cần đọc kỹ th&ocirc;ng tin về th&agrave;nh phần để mua những d&ograve;ng s&aacute;p thơm nước hoa c&oacute; hương tự nhi&ecirc;n v&agrave; an to&agrave;n cho sức khỏe của bạn.&nbsp;</p>\r\n<h2><strong>C&oacute; n&ecirc;n hay kh&ocirc;ng sử dụng s&aacute;p thơm tr&ecirc;n xe hơi?</strong></h2>\r\n<p dir=\"ltr\">Với những chiếc xế hộp, s&aacute;p thơm &ocirc; t&ocirc; l&agrave; sản phẩm kh&ocirc;ng thể thiếu. Bởi n&oacute; kh&ocirc;ng chỉ gi&uacute;p bạn khử m&ugrave;i h&ocirc;i, ẩm mốc m&agrave; c&ograve;n tỏa hương thơm dịu nhẹ, l&agrave;m sạch kh&ocirc;ng gian xe của bạn. Gi&uacute;p chủ xe c&oacute; tinh th&acirc;n thoải m&aacute;i, dễ chịu khi điều khiển phương tiện. Hơn nữa, với một chiếc xe thơm m&aacute;t, sạch sẽ cũng gi&uacute;p chủ xe tiết kiệm được thời gian trong qu&aacute; tr&igrave;nh vệ sinh nội thất.</p>\r\n<p dir=\"ltr\"><strong>S&aacute;p thơm &ocirc; t&ocirc;&nbsp;</strong>l&agrave; phụ kiện m&agrave; bạn kh&ocirc;ng thể thiếu khi sử dụng chiếc xế hộp của m&igrave;nh. Kh&ocirc;ng chỉ c&oacute; t&aacute;c dụng khử m&ugrave;i, l&agrave;m sạch kh&ocirc;ng kh&iacute; trong nội thất xe m&agrave; n&oacute; c&ograve;n gi&uacute;p bạn c&oacute; tinh thần sảng kho&aacute;i v&agrave; dễ chịu khi l&aacute;i xe. Tuy nhi&ecirc;n, h&atilde;y nhớ kiểm tra kỹ c&aacute;c th&ocirc;ng tin li&ecirc;n quan đến sản phẩm v&agrave; chọn lựa cho m&igrave;nh d&ograve;ng s&aacute;p thơm xe hơi theo sở th&iacute;ch.</p>\r\n<p dir=\"ltr\">&nbsp;</p>', NULL, NULL, '2024-03-30 00:54:20', '2024-05-29 08:19:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(8, '2024_03_24_033806_create_dashboard_table', 2),
(9, '2024_03_24_090218_create_product_categories_table', 3),
(10, '2024_03_27_133232_create_products_table', 4),
(11, '2024_03_29_102517_create_news_table', 5),
(12, '2024_03_30_001805_create_kien_thuc_table', 6),
(13, '2024_03_30_075837_create_pages_table', 7),
(14, '2024_03_31_171240_create_index_to_pages_table', 8),
(15, '2024_03_31_171616_create_index_to_kien_thuc_table', 9),
(16, '2024_03_31_171650_create_index_to_news_table', 9),
(17, '2024_03_31_171725_create_index_to_products_table', 9),
(18, '2024_03_31_171817_create_index_to_product_categories_table', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` text,
  `type` tinyint(4) DEFAULT NULL,
  `home` tinyint(4) DEFAULT NULL,
  `hot` tinyint(4) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `content` text,
  `images` text,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `keywords`, `description`, `type`, `home`, `hot`, `avatar`, `content`, `images`, `updated_by`, `created_at`, `updated_at`) VALUES
(6, 'Tại sao nên chọn sản phẩm đạt chứng nhận SGS?', 'tai-sao-nen-chon-san-pham-dat-chung-nhan-sgs', 'ginny.shop', 'Tại sao nên chọn sản phẩm đạt chứng nhận SGS?', NULL, 1, 1, 'images/news/tai-sao-nen-chon-san-pham-dat-chung-nhan-sgs.jpg', '<p dir=\"ltr\"><strong>Tại sao n&ecirc;n chọn sản phẩm đạt chứng nhận SGS?</strong></p>\r\n<p dir=\"ltr\">Hiện nay tr&ecirc;n thị trường, bất cứ sản phẩm n&agrave;o, d&ugrave; l&agrave; bao b&igrave; đựng thực phẩm hay đồ gia dụng cũng c&oacute; nhiều nguồn cung cấp kh&aacute;c nhau.</p>\r\n<p dir=\"ltr\">Thực trạng n&agrave;y khiến người ti&ecirc;u d&ugrave;ng hoang mang kh&ocirc;ng biết n&ecirc;n lựa chọn v&agrave; đặt niềm tin v&agrave;o sản phẩm của doanh nghiệp n&agrave;o. V&agrave; ti&ecirc;u chuẩn SGS ra đời sẽ gi&uacute;p bạn điều n&agrave;y.</p>\r\n<p dir=\"ltr\">Theo đ&oacute;, Tổ chức kiểm định chất lượng quốc tế cấm 6 loại h&oacute;a chất đặc biệt nguy hiểm đối với m&ocirc;i trường v&agrave; sức khỏe con người gồm: Cadmium (Cd), Thuỷ ng&acirc;n (Hg), Ch&igrave; (Pb), Hexavalent Chromium ho&aacute; trị 6 (Cr), PBBs v&agrave; chất PBDEs.</p>\r\n<p dir=\"ltr\">Đồng thời, từ th&aacute;ng 7/ 2006, tất cả những sản phẩm chứa một trong s&aacute;u chất tr&ecirc;n đều kh&ocirc;ng được ph&eacute;p nhập khẩu v&agrave; b&agrave;y b&aacute;n tại c&aacute;c quốc gia Ch&acirc;u &Acirc;u (EU).</p>\r\n<p dir=\"ltr\">Nếu doanh nghiệp muốn b&aacute;n sản phẩm v&agrave;o thị trường Ch&acirc;u &Acirc;u th&igrave; phải c&oacute; chứng nhận SGS k&egrave;m k&yacute; hiệu logo &ldquo;RoHS&rdquo;, tức l&agrave; đ&atilde; được chứng minh l&agrave; sản phẩm kh&ocirc;ng chứa 6 chất độc hại n&ecirc;u tr&ecirc;n.</p>\r\n<p dir=\"ltr\">Ch&iacute;nh v&igrave; vậy, chọn sản phẩm c&oacute; chứng nhận SGS l&agrave; giải ph&aacute;p h&agrave;ng đầu cho người d&ugrave;ng. Bởi lẽ, c&aacute;c sản phẩm n&agrave;y đ&atilde; trải qua c&aacute;c kh&acirc;u kiểm định, x&aacute;c minh về chất lượng, an to&agrave;n từ ch&iacute;nh c&aacute;c đội ngũ chuy&ecirc;n gia. Bạn c&oacute; thể y&ecirc;n t&acirc;m tuyệt đối khi sử dụng ch&uacute;ng.</p>\r\n<p>&nbsp;</p>', NULL, NULL, '2024-05-28 04:22:12', '2024-05-29 07:55:22'),
(7, 'Các chứng nhận an toàn sức khỏe của sản phẩm', 'cac-chung-nhan-an-toan-suc-khoe-cua-san-pham', 'ginny.shop', 'Các chứng nhận an toàn sức khỏe của sản phẩm', NULL, 1, 1, 'images/news/cac-chung-nhan-an-toan-suc-khoe-cua-san-pham.jpg', '<p>Với mục ti&ecirc;u mang lại sản phẩm tốt nhất v&agrave; an to&agrave;n đối với sức khỏe người ti&ecirc;u d&ugrave;ng, Ginny Shop lu&ocirc;n chọn những sản phẩm ph&ugrave; hợp với c&aacute;c ti&ecirc;u ch&iacute; tr&ecirc;n để phục vụ Qu&yacute; kh&aacute;ch h&agrave;ng.</p>\r\n<p>V&igrave; vậy Qu&yacute; kh&aacute;ch h&agrave;ng y&ecirc;n t&acirc;m khi mua h&agrave;ng tại Ginny Shop, sau đ&acirc;y l&agrave; một số chứng chỉ chứng nhận an to&agrave;n của sản phẩm Ginny Shop:</p>\r\n<p><strong>Đạt chứng nhận nhận an to&agrave;n về sức khỏe cho con người v&agrave; m&ocirc;i trường được thực hiện bởi tổ chứ CTI:&nbsp;</strong></p>\r\n<p><strong>Đạt chứng nhận an to&agrave;n về sức khỏe cho con người v&agrave; m&ocirc;i trường ti&ecirc;u chuẩn ch&acirc;u &acirc;u ROHS2.0 được thực hiện bởi tổ chức SGS.</strong></p>\r\n<p><strong><img src=\"http://ginny.com.vn//storage/photos/1/ảnh 1.jpg\" alt=\"\"><img src=\"http://ginny.com.vn//storage/photos/1/ảnh 2.jpg\" alt=\"\"></strong></p>', NULL, NULL, '2024-05-29 04:55:52', '2024-05-29 07:55:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` text,
  `avatar` varchar(255) DEFAULT NULL,
  `content` text,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `keywords`, `description`, `avatar`, `content`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Giới Thiệu', 'gioi-thieu', 'Ginny shop, sap thơm treo, Bộ đảo hải tặc One Piece và Luffy, Sáp thơm để bàn, Sáp thơm ô tô, Bảng mùi', 'The fragrance wafts out, leaving a leisurely glow\r\nHương thơm lan tỏa cho cảm giác thoải mái, thư giãn', 'images/news/gioi-thieu.png', '<p><strong>Ginny Shop</strong></p>\r\n<p>Lời đầu ti&ecirc;n, Ginny Shop ch&agrave;o mừng Qu&yacute; kh&aacute;ch h&agrave;ng đ&atilde; gh&eacute; thăm website thương mại điện tử&nbsp;<a class=\"waffle-rich-text-link\" href=\"../../../\" data-sheets-formula-bar-text-link=\"https://ginny.com.vn\" data-sheets-formula-bar-text-style=\"font-size:19px;color:#222222;font-weight:normal;text-decoration:underline;font-family:\'docs-Source Serif 4\';font-style:normal;text-decoration-skip-ink:none;\">https://ginny.com.vn</a> của ch&uacute;ng t&ocirc;i. Ginny Shop l&agrave; nơi để Qu&yacute; kh&aacute;ch h&agrave;ng tha hồ mua sắm trực tuyến c&aacute;c sản phẩm hương liệu được tổng hợp từ canxi nano. Sản phẩm ch&iacute;nh bao gồm sản phẩm nước hoa &ocirc; t&ocirc;, nước hoa chưng cất thủ c&ocirc;ng, nước hoa gia đ&igrave;nh, qu&agrave; tặng nước hoa, hương liệu đuổi muỗi, v&agrave; c&aacute;c lĩnh vực tương tự kh&aacute;c.&nbsp;</p>\r\n<p>Shop đ&atilde; c&oacute; 8 năm kinh nghiệm ph&acirc;n phối c&aacute;c sản phẩm&nbsp;hương liệu canxi tổng hợp.</p>\r\n<ul>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Sứ mệnh doanh nghiệp: Sử dụng canxi tổng hợp nano để ph&aacute;t triển c&aacute;c sản phẩm hỗ trợ sức khỏe.</p>\r\n</li>\r\n<li dir=\"ltr\" aria-level=\"1\">\r\n<p dir=\"ltr\" role=\"presentation\">Gi&aacute; trị cốt l&otilde;i: Kh&ocirc;ng đơn thuần ph&aacute;t triển, sử dụng, sản xuất sản phẩm chỉ v&igrave; lợi nhuận.</p>\r\n</li>\r\n</ul>\r\n<p><strong>Cam kết với kh&aacute;ch h&agrave;ng</strong></p>\r\n<p>Với mục ti&ecirc;u tạo ra gi&aacute; trị tốt nhất cho kh&aacute;ch h&agrave;ng, Ginny Shop cam kết lu&ocirc;n lu&ocirc;n mang những sản phẩm tốt nhất, thơm nhất v&agrave; đẹp nhất đến tay kh&aacute;ch h&agrave;ng, sản phẩm đ&atilde; được kiểm nghiệm v&agrave; chứng thực an to&agrave;n cho người sử dụng.</p>\r\n<p>Khi mua sắm tại Ginny Shop, Qu&yacute; kh&aacute;ch h&agrave;ng c&oacute; thể y&ecirc;n t&acirc;m bởi ch&uacute;ng t&ocirc;i lu&ocirc;n cam kết lợi &iacute;ch cho bạn khi mua sắm:</p>\r\n<p>Dịch vụ chăm s&oacute;c kh&aacute;ch h&agrave;ng tận t&igrave;nh trước, trong v&agrave; sau khi mua h&agrave;ng. Hỗ trợ tư vấn, giải đ&aacute;p xuy&ecirc;n suốt 7 ng&agrave;y/tuần, từ 8:00 đến 21:00.</p>\r\n<ul>\r\n<li aria-level=\"1\">Cam kết ho&agrave;n tiền 100% nếu ph&aacute;t hiện h&agrave;ng kh&ocirc;ng đ&uacute;ng chất lượng.</li>\r\n<li aria-level=\"1\">Cam kết được mua sắm với mức gi&aacute; cạnh tranh, tốt nhất so với thị trường hiện nay.</li>\r\n<li aria-level=\"1\">Uy t&iacute;n trong giao dịch l&agrave; ưu ti&ecirc;n h&agrave;ng đầu m&agrave; Shop mang đến cho kh&aacute;ch h&agrave;ng.</li>\r\n</ul>\r\n<p>Cuối c&ugrave;ng, Ginny Shop cảm ơn Qu&yacute; kh&aacute;ch h&agrave;ng đ&atilde; đồng h&agrave;nh v&agrave; tin tưởng lựa chọn ch&uacute;ng t&ocirc;i.&nbsp;</p>\r\n<p><strong>Li&ecirc;n hệ với Ginny Shop</strong></p>\r\n<p>Qu&yacute; kh&aacute;ch c&oacute; nhu cầu li&ecirc;n lạc, trao đổi hoặc đ&oacute;ng g&oacute;p &yacute; kiến, vui l&ograve;ng li&ecirc;n hệ ngay với Ginny Shop:</p>\r\n<ul>\r\n<li>Địa chỉ: Phường Vạn Ph&uacute;c, quận H&agrave; Đ&ocirc;ng, TP. H&agrave; Nội</li>\r\n<li>Điện thoại: 0332555388</li>\r\n<li>Email: Ginnyshop@gmail.com</li>\r\n<li>Website: GinnyShop.com.vn</li>\r\n</ul>', NULL, '2024-03-30 01:20:15', '2024-05-28 04:10:30'),
(2, 'Khuyến Mãi', 'khuyen-mai', 'Ginny shop', 'Ginny shop', 'images/news/khuyen-mai.png', NULL, NULL, '2024-03-31 01:47:51', '2024-03-31 09:42:03'),
(3, 'Liên Hệ', 'lien-he', 'Ginny shop, nến thơm', 'Ginny shop, nến thơm', 'images/news/lien-he.png', '<h4>Ginny Shop</h4>\r\n<ul>\r\n<li>Địa chỉ: Phường Vạn Ph&uacute;c, quận H&agrave; Đ&ocirc;ng, TP. H&agrave; Nội</li>\r\n<li>Điện thoại: 0332555388</li>\r\n<li>Email: Ginnyshop@gmail.com</li>\r\n<li>Website: GinnyShop.com.vn</li>\r\n</ul>', NULL, '2024-03-31 01:48:22', '2024-06-02 10:09:30'),
(4, 'Hướng Dẫn Mua Hàng', 'huong-dan-mua-hang', 'Ginny shop', 'Ginny shop', 'images/news/huong-dan-mua-hang.png', NULL, NULL, '2024-03-31 01:48:49', '2024-03-31 01:48:49'),
(5, 'Vận Chuyển Và Giao Nhận', 'van-chuyen-va-giao-nhan', 'Ginny shop', 'Ginny shop', 'images/news/van-chuyen-va-giao-nhan.png', '<p>234234</p>', NULL, '2024-03-31 01:49:23', '2024-03-31 09:56:54'),
(6, 'Bảo Hành', 'bao-hanh', 'Ginny shop', 'Ginny shop', 'images/news/bao-hanh.png', '<p>3234</p>', NULL, '2024-03-31 01:49:42', '2024-03-31 09:56:16'),
(7, 'Hoàn Tiền', 'hoan-tien', 'Ginny shop', 'Ginny shop', 'images/news/hoan-tien.png', '<p>ho&agrave;n tiền</p>', NULL, '2024-03-31 01:50:00', '2024-03-31 10:02:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` text,
  `price` varchar(255) DEFAULT NULL,
  `sale_price` varchar(255) DEFAULT NULL,
  `home` tinyint(4) DEFAULT NULL,
  `hot` tinyint(4) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `content` text,
  `images` text,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `category_id`, `keywords`, `description`, `price`, `sale_price`, `home`, `hot`, `avatar`, `content`, `images`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Bộ đảo hải tặc One Piece và Luffy', 'bo-dao-hai-tac-one-piece-va-luffy', 8, 'ginny.shop', 'Bộ đảo hải tặc One Piece và Luffy', '250000', '175000', 1, 0, 'images/products/bo-dao-hai-tac-one-piece-va-luffy.jpg', '<p><strong>M&oacute;c treo s&aacute;p thơm one piece v&agrave; lufy</strong></p>\r\n<p>Thiết kế nhỏ gọn, xinh xắn ph&ugrave; hợp treo tủ quần &aacute;o, ph&ograve;ng ngủ, &ocirc; t&ocirc;, treo cặp, để b&agrave;n l&agrave;m việc...</p>\r\n<p>M&ugrave;i hương lưu giữ từ 2-4 th&aacute;ng, thời gian m&ugrave;i hương tan t&ugrave;y thuộc v&agrave;o thời tiết, m&ocirc;i trường.</p>\r\n<p>Quy c&aacute;ch: 55*5mm, d&acirc;y treo cao su</p>\r\n<p>M&ugrave;i hương: Shangri La Ocean&middot; Đảm bảo &aacute;n to&agrave;n sức khỏe, an to&agrave;n tuyệt đối cho phụ nữ, trẻ con.</p>\r\n<p>Diệt khuẩn, chống ẩm mốc v&agrave; đuổi c&ocirc;n tr&ugrave;ng</p>', '<p><img src=\"../../storage/photos/1/Products/logo shop.png\" alt=\"\" width=\"206\" height=\"206\"><img src=\"../..//storage/photos/1/Products/logo shop.png\" alt=\"\" width=\"206\" height=\"206\"></p>', NULL, '2024-03-28 06:58:48', '2024-06-12 14:48:43'),
(2, 'Sáp thơm treo hoạt hình', 'sap-thom-treo-hoat-hinh', 1, 'ginny.shop', 'Sáp thơm treo hoạt hình nhiều mẫu', '170000', '130000', 1, 1, 'images/products/sap-thom-treo-hoat-hinh.jpg', '<p><strong>M&oacute;c treo s&aacute;p thơm hoạt h&igrave;nh đ&aacute;ng y&ecirc;u, tiện lợi </strong></p>\r\n<p>Ph&ugrave; hợp treo tủ quần &aacute;o, ph&ograve;ng ngủ, &ocirc; t&ocirc;, treo cặp, để b&agrave;n l&agrave;m việc...</p>\r\n<p>&nbsp;M&ugrave;i hương lưu giữ từ 2-4 th&aacute;ng, thời gian m&ugrave;i hương t&ugrave;y thuộc thời tiết, m&ocirc;i trường.</p>\r\n<p>M&ugrave;i hương: Shangri La Ocean Đảm bảo &aacute;n to&agrave;n sức khỏe, an to&agrave;n tuyệt đối cho phụ nữ, trẻ con.</p>\r\n<p>Diệt khuẩn, chống ẩm mốc v&agrave; đuổi c&ocirc;n tr&ugrave;ng</p>', '<p>2</p>', NULL, '2024-03-28 07:02:43', '2024-05-29 07:00:02'),
(4, 'Nước hoa kẹp cửa gió Koala', 'nuoc-hoa-kep-cua-gio-koala', 7, 'ginny.shop', 'Nước hoa kẹp cửa gió Koala', '250000', '168000', 1, 1, 'images/products/nuoc-hoa-kep-cua-gio-koala.png', '<p><strong>M&oacute;c treo s&aacute;p thơm hoạt h&igrave;nh Koala </strong></p>\r\n<p>Thiết kế tiện lợi, xinh đẹp.</p>\r\n<p>Ph&ugrave; hợp treo tủ quần &aacute;o, ph&ograve;ng ngủ, &ocirc; t&ocirc;, treo cặp, để b&agrave;n l&agrave;m việc...</p>\r\n<p>M&ugrave;i hương lưu giữ từ 2-4 th&aacute;ng, thời gian m&ugrave;i hương t&ugrave;y thuộc thời tiết, m&ocirc;i trường.</p>\r\n<p>M&ugrave;i hương: Shangri La Ocean Khử m&ugrave;i xe, m&ugrave;i thuốc l&aacute;, m&ugrave;i nội thất ph&aacute;t sinh b&ecirc;n trong xe một c&aacute;ch nhanh ch&oacute;ng, hiệu quả.</p>\r\n<p>Diệt khuẩn, chống ẩm mốc v&agrave; đuổi c&ocirc;n tr&ugrave;ng.</p>\r\n<p>Tạo cảm gi&aacute;c thật thoải m&aacute;i, thư th&aacute;i , chống say xe</p>', '<p>3</p>', NULL, '2024-03-28 08:18:56', '2024-05-29 07:15:12'),
(5, 'B.Duck cao cấp', 'bduck-cao-cap', 7, 'ginny.shop', 'Nước hoa kẹp cửa gió điều hòa B.Duck cao cấp', '350000', '294000', 1, 1, 'images/products/bduck-cao-cap.png', '<p><strong>M&oacute;c treo s&aacute;p thơm hoạt h&igrave;nh B.Duck thiết kế tiện lợi, xinh đẹp. </strong></p>\r\n<p>Ph&ugrave; hợp treo tủ quần &aacute;o, ph&ograve;ng ngủ, &ocirc; t&ocirc;, treo cặp, để b&agrave;n l&agrave;m việc... M&ugrave;i hương lưu giữ từ 2-4 th&aacute;ng, thời gian m&ugrave;i hương t&ugrave;y thuộc thời tiết, m&ocirc;i trường.</p>\r\n<p>M&ugrave;i hương: Shangri La Ocean Khử m&ugrave;i xe, m&ugrave;i thuốc l&aacute;, m&ugrave;i nội thất ph&aacute;t sinh b&ecirc;n trong xe một c&aacute;ch nhanh ch&oacute;ng, hiệu quả.</p>\r\n<p>Diệt khuẩn, chống ẩm mốc v&agrave; đuổi c&ocirc;n tr&ugrave;ng.</p>\r\n<p>Tạo cảm gi&aacute;c thật thoải m&aacute;i, thư th&aacute;i , chống say xe</p>', NULL, NULL, '2024-05-29 06:58:28', '2024-05-29 07:13:43'),
(7, 'Móc treo sáp thơm hoạt hình tròn', 'moc-treo-sap-thom-hoat-hinh-tron', 7, 'ginny.shop', 'Móc treo sáp thơm hoạt hình tròn', '250000', '147000', 1, 1, 'images/products/moc-treo-sap-thom-hoat-hinh-tron.png', '<p><strong>M&oacute;c treo s&aacute;p thơm hoạt h&igrave;nh tr&ograve;n</strong></p>\r\n<p>Thiết kế tiện lợi, xinh đẹp.</p>\r\n<p>Ph&ugrave; hợp treo tủ quần &aacute;o, ph&ograve;ng ngủ, &ocirc; t&ocirc;, treo cặp, để b&agrave;n l&agrave;m việc...</p>\r\n<p>M&ugrave;i hương lưu giữ từ 2-4 th&aacute;ng, thời gian m&ugrave;i hương t&ugrave;y thuộc thời tiết, m&ocirc;i trường.</p>\r\n<p>M&ugrave;i hương: Shangri La Ocean Khử m&ugrave;i xe, m&ugrave;i thuốc l&aacute;, m&ugrave;i nội thất ph&aacute;t sinh b&ecirc;n trong xe một c&aacute;ch nhanh ch&oacute;ng, hiệu quả.</p>\r\n<p>Diệt khuẩn, chống ẩm mốc v&agrave; đuổi c&ocirc;n tr&ugrave;ng.</p>\r\n<p>Tạo cảm gi&aacute;c thật thoải m&aacute;i, thư th&aacute;i , chống say xe</p>', NULL, NULL, '2024-05-29 07:43:36', '2024-05-29 07:43:36'),
(8, 'Bảng Mùi Sản Phẩm', 'bang-mui-san-pham', 9, 'Ginny shop, sap thơm treo, Bộ đảo hải tặc One Piece và Luffy, Sáp thơm để bàn, Sáp thơm ô tô, Bảng mùi', 'Danh sách bảng mùi sản phẩm của Ginny.Shop', NULL, NULL, 1, 0, 'images/products/bang-mui-san-pham.jpg', '<p>C&oacute; vai tr&ograve; mạnh mẽ trong đời sống tinh thần của ch&uacute;ng ta, m&ugrave;i hương dường như ch&iacute;nh l&agrave; khoảnh khắc của tự do, t&igrave;nh y&ecirc;u v&agrave; sự lưu luyến giữa những x&aacute;o trộn trong cuộc sống hiện đại&hellip;</p>\r\n<p>Hương thơm được v&iacute; như một thứ sức mạnh thuyết phục hơn cả lời n&oacute;i v&agrave; vẻ bề ngo&agrave;i. V&agrave; thứ sức mạnh đ&oacute; c&ograve;n trở th&agrave;nh một chất x&uacute;c t&aacute;c hữu hiệu gi&uacute;p h&oacute;a l&agrave;nh bao ti&ecirc;u cực đang tr&agrave;n v&agrave;o &yacute; thức v&agrave; gợi l&ecirc;n sự b&igrave;nh y&ecirc;n, gắn b&oacute; mật thiết với ngăn k&eacute;o hồi ức đầy lắng đọng.</p>\r\n<p>K&iacute;nh mời qu&yacute; kh&aacute;ch h&agrave;ng c&ugrave;ng chi&ecirc;m ngưỡng c&aacute;c m&ugrave;i hương đặc trưng của Ginny.Shop</p>', NULL, NULL, '2024-06-02 08:48:05', '2024-06-02 08:54:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` text,
  `avatar` varchar(255) DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product_categories`
--

INSERT INTO `product_categories` (`id`, `title`, `slug`, `keywords`, `description`, `avatar`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Sáp thơm treo', 'sap-thom-treo', 'Sáp thơm treo', 'Sáp thơm treo', NULL, 1, '2024-03-26 06:59:21', '2024-04-07 13:38:23'),
(6, 'Sáp thơm để bàn', 'sap-thom-de-ban', 'Sáp thơm để bàn', 'Sáp thơm để bàn', NULL, 1, '2024-03-26 08:11:59', '2024-04-07 13:38:34'),
(7, 'Sáp thơm ô tô', 'sap-thom-o-to', 'Sáp thơm ô tô', 'Sáp thơm ô tô', NULL, 1, '2024-03-26 08:45:07', '2024-04-07 13:39:08'),
(8, 'Bộ đảo hải tặc One Piece', 'bo-dao-hai-tac-one-piece', 'Bộ đảo hải tặc One Piece', 'Bộ đảo hải tặc One Piece', NULL, 1, '2024-04-07 13:38:07', '2024-04-07 13:40:23'),
(9, 'Bảng mùi', 'bang-mui', 'Bảng mùi', 'Bảng mùi', NULL, 1, '2024-04-07 13:39:14', '2024-04-07 13:39:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '$2y$12$pk9tJUwN0ihHEUzi7nu8qOK.6.qFeAOXMVEfYlC0dqvzxceoXR7FG', NULL, NULL, NULL),
(2, 'DungNT', '$2y$12$pk9tJUwN0ihHEUzi7nu8qOK.6.qFeAOXMVEfYlC0dqvzxceoXR7FG', NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `kien_thuc`
--
ALTER TABLE `kien_thuc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kien_thuc_title_slug_index` (`title`,`slug`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_title_slug_index` (`title`,`slug`);

--
-- Chỉ mục cho bảng `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pages_title_slug_index` (`title`,`slug`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_title_slug_index` (`title`,`slug`);

--
-- Chỉ mục cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_categories_title_slug_index` (`title`,`slug`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_name_unique` (`user_name`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `kien_thuc`
--
ALTER TABLE `kien_thuc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
