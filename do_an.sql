-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th1 06, 2023 lúc 02:21 AM
-- Phiên bản máy phục vụ: 5.7.36
-- Phiên bản PHP: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `do_an`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_posts`
--

DROP TABLE IF EXISTS `category_posts`;
CREATE TABLE IF NOT EXISTS `category_posts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_posts`
--

INSERT INTO `category_posts` (`id`, `title`, `short_desc`, `created_at`, `updated_at`) VALUES
(1, 'Bữa xế', 'Ăn xế là bước quan trọng để bổ sung lại năng lượng tiêu hao từ trưa đến chiều, cái khó là làm thế nào để nạp vào một lượng vừa đủ lại bổ sung các chất cần thiết cho cơ thể mà không làm tăng cân.', '2022-12-29 20:39:21', '2022-12-30 00:32:55'),
(2, 'Bữa trưa', 'Bữa trưa là một bữa ăn vào khoảng giữa ngày. Trong thế kỷ 20, ý nghĩa dần dần thu hẹp thành một bữa ăn nhỏ hoặc vừa được ăn vào buổi trưa. Bữa trưa thường là bữa ăn thứ hai trong ngày, sau bữa sáng.', '2022-12-29 20:40:18', '2023-01-04 08:19:35'),
(5, 'Điểm tâm', 'bữa ăn đầu tiên trong ngày, thường là vào buổi sáng sau khi thức dậy với thực đơn thường gồm những món thức ăn nhanh, nhẹ kèm theo các món tráng miệng và giải khát như trà, sữa, cà phê, nước giải khát.', '2022-12-29 23:33:20', '2022-12-29 23:54:02'),
(6, 'Thức ăn nhanh', ' là các loại đồ ăn được chế biến tại chỗ và phục vụ cho người ăn một cách nhanh chóng. Thông thường, các món ăn này được chế biến với các thành phần được làm nóng trước hoặc đã được nấu từ trước và phục vụ khách hàng theo hình thức gói mang đi.', '2022-12-30 00:59:00', '2022-12-30 00:59:00'),
(7, 'Bữa tối', 'bữa ăn chính thứ ba trong ngày diễn ra vào thời điểm chiều tối. Tùy từng quốc gia, dân tộc, cộng đồng, vùng miền và văn hóa, tập tục mà thời điểm ăn tối có thể chênh lệch nhau.', '2022-12-31 07:24:10', '2022-12-31 07:24:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_20_133354_create_tintucs_table', 1),
(6, '2022_12_21_022552_create_categories_table', 1),
(7, '2022_12_22_135333_create_posts_table', 2),
(8, '2022_12_22_144523_create_category_posts_table', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_category_id` bigint(255) NOT NULL,
  `post_date` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `views`, `short_desc`, `desc`, `image`, `post_category_id`, `post_date`, `created_at`, `updated_at`) VALUES
(6, 'Cà phê', '568', '<p>C&agrave; ph&ecirc;&nbsp;C&oacute; người n&oacute;i: &ldquo;C&agrave; ph&ecirc; kh&ocirc;ng phải l&agrave; th&uacute; thanh thản như tr&agrave;, c&agrave;ng kh&ocirc;ng mạnh mẽ bạo liệt như rượu. Người thưởng thức nhẹ nh&agrave;ng cho rằng c&agrave; ph&ecirc; l&agrave; gạch nối giữa niềm vui v&agrave; nỗi buồn. Với ai đang muộn phiền, c&agrave; ph&ecirc; c&agrave;ng day dứt như một bản nhạc c&oacute; nhiều dấu lặng. C&ograve;n những kẻ m&ocirc;n đồ của gi&aacute;o ph&aacute;i c&agrave; ph&ecirc; th&igrave; cho đ&oacute; l&agrave; người đ&agrave;n b&agrave; mang b&ugrave;a ngải trong m&igrave;nh&hellip;.&rdquo;</p>', '<p><em><strong>C&agrave; ph&ecirc;</strong></em>&nbsp;(gốc từ&nbsp;<em>caf&eacute;</em>&nbsp;trong tiếng Ph&aacute;p) l&agrave; một loại thức uống m&agrave;u đen c&oacute; chứa chất caffein.&nbsp;C&oacute; người n&oacute;i: &ldquo;C&agrave; ph&ecirc; kh&ocirc;ng phải l&agrave; th&uacute; thanh thản như tr&agrave;, c&agrave;ng kh&ocirc;ng mạnh mẽ bạo liệt như rượu. Người thưởng thức nhẹ nh&agrave;ng cho rằng c&agrave; ph&ecirc; l&agrave; gạch nối giữa niềm vui v&agrave; nỗi buồn. Với ai đang muộn phiền, c&agrave; ph&ecirc; c&agrave;ng day dứt như một bản nhạc c&oacute; nhiều dấu lặng. C&ograve;n những kẻ m&ocirc;n đồ của gi&aacute;o ph&aacute;i c&agrave; ph&ecirc; th&igrave; cho đ&oacute; l&agrave; người đ&agrave;n b&agrave; mang b&ugrave;a ngải trong m&igrave;nh&hellip;.&rdquo;</p>', '1672829166_caphe2.jpg', 6, '05-01-2023', NULL, NULL),
(2, 'bài viết số 2', '538', '<p>b&agrave;i viết số 2</p>', '<p>b&agrave;i viết số 2</p>', '1672829189_caphe.jpg', 2, '05-01-2023', NULL, NULL),
(8, 'Bài viết số 3', '1143', '<p>B&agrave;i viết số 3</p>', '<p>B&agrave;i viết số 3</p>', '1672845829_caphe.jpg', 1, '05-01-2023', NULL, NULL),
(7, 'Capuchino', '333', '<p>C&agrave; ph&ecirc; capuchino tr&ocirc;ng hấp dẫn bởi lớp bọt sữa xốp v&agrave; nh&igrave;n bắt mắt ph&iacute;a tr&ecirc;n</p>', '<p>Capuchino l&agrave; một loại c&agrave; ph&ecirc; gồm c&oacute; c&agrave; ph&ecirc; v&agrave; lớp bọt sữa (được đ&aacute;nh b&ocirc;ng nằm ở ph&iacute;a tr&ecirc;n), c&ugrave;ng với một &iacute;t&nbsp;<a href=\"https://www.dienmayxanh.com/vao-bep/bot-ca-cao-dung-de-lam-gi-cach-su-dung-bot-ca-cao-an-toan-va-13171\" rel=\"noopener\" target=\"_blank\" title=\"bột ca cao\">bột ca cao</a>&nbsp;hoặc&nbsp;<a href=\"https://www.dienmayxanh.com/vao-bep/cach-lam-bot-que-don-gian-nhanh-chong-tai-nha-08236\" rel=\"noopener\" target=\"_blank\" title=\"bột quế\">bột quế</a>&nbsp;được rắc l&ecirc;n bề mặt thức uống trước khi phục vụ.</p>\r\n\r\n<p>Capuchino thường được sử dụng v&agrave;o buổi s&aacute;ng hoặc trước - sau bữa ăn.</p>', '1672829154_caphe1.jpg', 5, '05-01-2023', NULL, NULL),
(9, 'Cà phê phin', '999', 'Cà phê Việt được pha thủ công bằng một dụng cụ chuyên dùng pha cà phê là “phin” mang lại hương vị đậm đà trọn vị cho ly cà phê thành phẩm', 'Cà phê phin là tên gọi cho món cà phê được pha bằng phin – là một vật dụng có hình dáng tương tự một chiếc cốc, dưới đáy có nhiều lỗ nhỏ li ti, kèm thêm một dụng cụ nén hình tròn đặt vừa vào trong cốc phin dùng để pha và lọc cà phê.\r\n\r\nĐi tới bất kỳ quán cà phê nào ở Việt Nam, chúng ta cũng đều nghe thấy những tên gọi quen thuộc như: cà phê đen nóng/đá, cà phê sữa nóng/đá.\r\n\r\nĐấy là hai dạng phổ biến của cà phê phin, tùy vào sở thích mà thực khách có thể lựa chọn uống cà phê phin nguyên chất vì vị đắng thơm của nó, cũng có thể thêm một ít sữa vào để ly cà phê trở nên ngọt béo hơn.', '1672886764_caphefin.jpg', 7, '05-01-2023', NULL, NULL),
(10, 'Cà phê Trứng', '900', 'Cà phê trứng là một loại thức uống có nguồn gốc từ Việt Nam được làm từ cà phê (cà phê vối) với trứng gà (có nhỏ thêm mật ong) và sữa đặc có đường.', 'Nguyên liệu để làm cà phê trứng gồm trứng gà tươi, đường, sữa, cà phê. Lòng đỏ trứng gà được đánh bông bằng tay cùng với sữa, đường cát, sau đó đổ cà phê đang đun sôi lên. Ly cà phê bồng bềnh trong một màu nâu thơm. Cà phê trứng được làm từ trứng đánh bông lên hòa quyện cùng cà phê, được pha rất khéo, để vừa đổ cà phê nóng vào phần trứng đã đánh bông, sẽ tạo thành lớp bọt đẹp và thơm. Thực khách luôn có thêm một chiếc thìa con để thưởng thức bọt kem bên trên giống như món khai vị trước khi uống cà phê bên dưới.', '1672928939_caphetrung.jpg', 5, '05-01-2023', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Việt Phạm', 'test@gmail.com', NULL, '$2y$10$R.pIO6HW4hpCdDHcGigPF.xx9hk4ycb0Aq2mIWGwC9PfF3p1OZvFG', NULL, '2022-12-21 06:16:35', '2022-12-21 06:16:35'),
(3, 'Tiến Việt', 'test2@gmail.com', NULL, '$2y$10$sq3cMJh7O3f0e4u6IZZfbenVifAfCqfe.eoWi79O5qmPlyB3DTFre', NULL, '2022-12-25 20:51:18', '2022-12-25 20:51:18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
