-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th8 20, 2023 lúc 03:25 PM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Warm', '2023-07-28 04:45:27', '2023-07-28 04:45:27'),
(3, 'Jacket', '2023-07-28 04:45:39', '2023-07-28 04:45:39'),
(4, 'Green', '2023-07-28 04:45:46', '2023-07-28 04:45:46'),
(5, 'Green', '2023-07-28 04:46:01', '2023-07-28 04:46:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` bigint UNSIGNED NOT NULL,
  `pay_id` int NOT NULL,
  `product_id` int NOT NULL,
  `price` double(8,2) NOT NULL,
  `soluong` double(8,2) NOT NULL,
  `tong` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`id`, `pay_id`, `product_id`, `price`, `soluong`, `tong`, `created_at`, `updated_at`) VALUES
(6, 7, 65, 60.00, 1.00, 60.00, NULL, NULL),
(7, 7, 66, 100.00, 3.00, 300.00, NULL, NULL),
(10, 10, 72, 25.00, 1.00, 25.00, NULL, NULL),
(11, 11, 72, 25.00, 3.00, 75.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `desription`, `img`, `created_at`, `updated_at`) VALUES
(7, 'Mũ', 'Mũ', 'isolated-shot-of-happy-female-child-shows-two-teeth-hides-eyes-with-stylish-hat-wears-casual-strip.jpg', '2023-07-28 01:38:29', '2023-07-28 01:38:29'),
(8, 'Giầy Dép', 'Giầy Dép', 'partial-view-of-kids-in-casual-clothing-isolated-on-yellow.jpg', '2023-07-28 01:39:34', '2023-07-28 01:39:34'),
(9, 'Quần', 'Quần', 'partial-view-of-kids-in-casual-clothing-isolated-on-yellow.jpg', '2023-07-28 01:47:02', '2023-07-28 01:47:02'),
(10, 'Áo', 'Áo', 'isolated-shot-of-happy-female-child-shows-two-teeth-hides-eyes-with-stylish-hat-wears-casual-strip.jpg', '2023-07-28 01:47:31', '2023-07-28 01:47:31'),
(11, 'Đồ Nam', 'Đồ Nam', 'a-beautiful-boy-in-a-shirt-and-bow-tie-stands-on-a-gray-background-e1657473736321.jpg', '2023-07-28 01:48:36', '2023-07-28 01:48:36'),
(12, 'Đồ Nữ', 'Đồ Nữ', 'funny-girl-with-ginger-hair-and-freckles-in-striped-red-dress-and-fashionable-cool-jacket-showing-t.jpg', '2023-07-28 01:48:50', '2023-07-28 01:48:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cate_categenders`
--

CREATE TABLE `cate_categenders` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint NOT NULL,
  `category_gender_id` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cate_genders`
--

CREATE TABLE `cate_genders` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cate_genders`
--

INSERT INTO `cate_genders` (`id`, `name`, `desription`, `created_at`, `updated_at`) VALUES
(1, 'gg', 'reg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `colors`
--

CREATE TABLE `colors` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `colors`
--

INSERT INTO `colors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Đen', '2023-07-31 03:37:01', '2023-07-31 03:37:01'),
(2, 'Đỏ', '2023-07-31 03:37:08', '2023-07-31 03:37:08'),
(3, 'Trắng', '2023-07-31 03:37:16', '2023-07-31 03:37:16'),
(4, 'Hồng', '2023-07-31 03:37:23', '2023-07-31 03:37:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `logins`
--

CREATE TABLE `logins` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_07_21_162234_create_cate_genders_table', 1),
(7, '2023_07_21_175811_create_pages_table', 1),
(8, '2023_07_22_035728_create_colors_table', 1),
(9, '2023_07_22_041559_create_sizes_table', 1),
(11, '2023_07_22_172140_create_brands_table', 1),
(12, '2023_07_22_185045_create_cate_categenders_table', 1),
(13, '2023_07_24_150816_create_logins_table', 1),
(14, '2023_07_25_151241_create_permissions_table', 1),
(15, '2023_07_25_153614_create_roles_table', 1),
(16, '2023_07_25_160048_create_table_user_role', 1),
(17, '2023_07_25_160153_create_table_permission_role', 1),
(18, '2023_07_26_104635_add_column_key_permission_table', 2),
(19, '2023_07_28_063426_add_tinhtrang_id_column_to_product_table', 3),
(20, '2023_07_22_171803_create_products_table', 4),
(22, '2023_07_21_111533_create_categories_table', 5),
(25, '2023_07_31_125539_create_tabel_product_color', 6),
(26, '2023_07_31_125614_create_tabel_product_size', 6),
(27, '2023_07_31_105323_create_product_colors_table', 7),
(28, '2023_08_01_044739_create_tabel_product_color_size', 7),
(29, '2023_08_02_155219_add_product_active', 8),
(30, '2023_08_02_155533_add_product_active', 9),
(31, '2023_08_03_091114_create_pays_table', 10),
(32, '2023_08_04_090416_create_pay_table', 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pages`
--

CREATE TABLE `pages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tacgia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pages`
--

INSERT INTO `pages` (`id`, `name`, `img`, `tacgia`, `desription`, `created_at`, `updated_at`) VALUES
(1, 'Best Travel Clothes Ideas for Kids', 'no-road-is-long-with-good-company-little-cute-kids-in-the-trunk-of-a-car-with-suitcases-looking-at-1536x1024.jpg', 'Minh', 'Dolor diam mauris lobortis orci volutpat vehicula platea nascetur risus iaculis. Lacus penatibus erat semper felis pretium inceptos curabitur posuere.', '2023-07-28 00:32:14', '2023-07-28 00:32:14'),
(2, 'Dress Your Kids’ Elegantly for Their Birthdays', 'kids-enjoying-birthday-party-1536x1024.jpg', 'Dress', 'Lacus penatibus erat semper felis pretium inceptos curabitur posuere. Urna mauris mollis lacinia ridiculus in donec libero tempor posuere iaculis aenean', '2023-07-28 00:32:46', '2023-07-28 00:32:46'),
(3, 'Trend Alert- Monochromatic Outfits for Kids', 'childhood.jpg', 'Dress', 'Urna mauris mollis lacinia ridiculus in donec libero tempor posuere iaculis aenean. Efficitur euismod mattis ultrices urna eget pede semper adipiscing vestibulum imperdiet ac.', '2023-07-28 00:33:20', '2023-07-28 00:33:20'),
(4, 'Cute Matching Brother-Sister Outfits for 2022', 'kids-playing-outdoors-1536x1290.jpg', 'Alert', 'Efficitur euismod mattis ultrices urna eget pede semper adipiscing vestibulum imperdiet ac. Integer vitae sodales phasellus et enim bibendum eleifend sagittis.', '2023-07-28 00:33:53', '2023-07-28 00:33:53'),
(5, 'How to Store & Organize Kid’s Clothing – Ultimate Guide', 'big-wardrobe-in-clothing-store-for-children-and-adults-or-family-photo-studio-1536x1024.jpg', 'Brother-Sister', 'Integer vitae sodales phasellus et enim bibendum eleifend sagittis. Nec dui sapien sodales pharetra fusce. Suscipit sagittis cubilia lacinia condimentum vestibulum.', '2023-07-28 00:34:24', '2023-07-28 00:34:24'),
(6, 'Timeless tips to help dress your little ones', 'mother-helping-son-to-get-dressed-1536x1024.jpg', 'Kids', 'Velit tellus adipiscing interdum convallis fames curabitur massa suscipit. Elementum purus nec tristique pellentesque porta aliquet molestie fusce lacus fermentum. Risus nisl arcu ante imperdiet quis bibendum pharetra. Lorem aliquam hendrerit ipsum magnis a efficitur pede ligula amet aenean malesuada.', '2023-07-28 00:35:22', '2023-07-28 00:35:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pays`
--

CREATE TABLE `pays` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pays`
--

INSERT INTO `pays` (`id`, `name`, `city`, `address`, `pay`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(7, 'nguyễn văn minh', 'Hà Nội', 'Nam từ liêm - Hà Nội', '2', '0395 222 660', 'minh12335678899@gmail.com', '2023-08-05 03:17:58', '2023-08-05 03:17:58'),
(10, 'nguyễn văn minh', 'Hà Nội', 'Nam từ liêm - Hà Nội', '1', '016696652572', 'minhnvph20236@fpt.edu.vn', '2023-08-05 08:35:23', '2023-08-05 08:35:23'),
(11, 'nguyễn văn minh', 'Hà Nội', 'Nam từ liêm - Hà Nội', '1', '01669665257', 'hn4343116@gmail.com', '2023-08-07 20:53:37', '2023-08-07 20:53:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `parent_id` int NOT NULL DEFAULT '0',
  `key_colum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `created_at`, `updated_at`, `parent_id`, `key_colum`) VALUES
(1, 'Danh Sách Danh Mục', 'Danh Sách Danh Mục', NULL, NULL, 0, ''),
(2, 'Thêm Danh Mục', 'Thêm Danh Mục', NULL, NULL, 1, 'create_category'),
(3, 'Show Danh Mục', 'Show Danh Mục', NULL, NULL, 1, 'index_category'),
(4, 'Sửa Danh Mục', 'Sửa Danh Mục', NULL, NULL, 1, 'edit_category'),
(5, 'Xóa Danh Mục', 'Xóa Danh Mục', NULL, NULL, 1, 'delete_category'),
(6, 'Danh Sách Sản Phẩm', 'Danh Sách Sản Phẩm', NULL, NULL, 0, ''),
(7, 'Thêm Sản Phẩm', 'Thêm Sản Phẩm', NULL, NULL, 6, 'create_product'),
(8, 'Show Sản Phẩm', 'Show Sản Phẩm', NULL, NULL, 6, 'index_product'),
(9, 'Sửa Sản Phẩm', 'Sửa Sản Phẩm', NULL, NULL, 6, 'edit_product'),
(10, 'Xóa Sản Phẩm', 'Xóa Sản Phẩm', NULL, NULL, 6, 'delete_product'),
(11, 'Danh Sách Brand', 'Danh Sách Brand', NULL, NULL, 0, ''),
(12, 'Thêm Brand', 'Thêm Brand', NULL, NULL, 11, 'create_brand'),
(13, 'Show Brand', 'Show Brand', NULL, NULL, 11, 'index_brand'),
(14, 'Sửa Brand', 'Sửa Brand', NULL, NULL, 11, 'edit_brand'),
(15, 'Xóa Brand', 'Xóa Brand', NULL, NULL, 11, 'delete_brand'),
(16, 'Danh Sách Page', 'Danh Sách Page', NULL, NULL, 0, ''),
(17, 'Thêm Page', 'Thêm Page', NULL, NULL, 16, 'create_page'),
(18, 'Show Page', 'Show Page', NULL, NULL, 16, 'index_page'),
(19, 'Sửa Page', 'Sửa Page', NULL, NULL, 16, 'edit_page'),
(20, 'Xóa Page', 'Xóa Page', NULL, NULL, 16, 'delete_page'),
(26, 'Danh Sách Role', 'Danh Sách Role', NULL, NULL, 0, ''),
(27, 'Thêm Role', 'Thêm Role', NULL, NULL, 26, 'create_role'),
(28, 'Show Role', 'Show Role', NULL, NULL, 26, 'index_role'),
(29, 'Sửa Role', 'Sửa Role', NULL, NULL, 26, 'edit_role'),
(30, 'Xóa Role', 'Xóa Role', NULL, NULL, 26, 'delete_role'),
(31, 'Danh Sách User', 'Danh Sách User', NULL, NULL, 0, ''),
(32, 'Thêm User', 'Thêm User', NULL, NULL, 31, 'create_user'),
(33, 'Show User', 'Show User', NULL, NULL, 31, 'index_user'),
(34, 'Sửa User', 'Sửa User', NULL, NULL, 31, 'edit_user'),
(35, 'Xóa User', 'Xóa User', NULL, NULL, 31, 'delete_user'),
(36, 'Account', 'Account', NULL, NULL, 31, 'account');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_role`
--

CREATE TABLE `permission_role` (
  `id` bigint UNSIGNED NOT NULL,
  `permission_id` int NOT NULL,
  `role_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(94, 27, 26, NULL, NULL),
(95, 28, 26, NULL, NULL),
(96, 29, 26, NULL, NULL),
(97, 30, 26, NULL, NULL),
(104, 34, 25, NULL, NULL),
(105, 35, 25, NULL, NULL),
(106, 2, 26, NULL, NULL),
(107, 3, 26, NULL, NULL),
(108, 4, 26, NULL, NULL),
(109, 5, 26, NULL, NULL),
(110, 7, 26, NULL, NULL),
(111, 8, 26, NULL, NULL),
(112, 9, 26, NULL, NULL),
(113, 10, 26, NULL, NULL),
(114, 12, 26, NULL, NULL),
(115, 13, 26, NULL, NULL),
(116, 14, 26, NULL, NULL),
(117, 15, 26, NULL, NULL),
(118, 17, 26, NULL, NULL),
(119, 18, 26, NULL, NULL),
(120, 19, 26, NULL, NULL),
(121, 20, 26, NULL, NULL),
(122, 32, 26, NULL, NULL),
(123, 33, 26, NULL, NULL),
(126, 34, 26, NULL, NULL),
(127, 35, 26, NULL, NULL),
(128, 36, 25, NULL, NULL),
(129, 36, 26, NULL, NULL),
(130, 36, 28, NULL, NULL),
(131, 2, 25, NULL, NULL),
(132, 3, 25, NULL, NULL),
(133, 4, 25, NULL, NULL),
(134, 5, 25, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `mahang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `old_price` double(8,2) NOT NULL,
  `brand` bigint NOT NULL,
  `khoiluong` double(8,2) NOT NULL,
  `desription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `danhmuc` bigint NOT NULL,
  `tinhtrang_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `mahang`, `name`, `hinhanh`, `price`, `old_price`, `brand`, `khoiluong`, `desription`, `danhmuc`, `tinhtrang_id`, `created_at`, `updated_at`, `active`) VALUES
(64, '001', 'Beach Short', 'Beach-Short-1-300x300 (1).jpg', 25.00, 30.00, 2, 0.30, 'Justo nostra nam accumsan ultrices aliquam. Morbi hac nisl ultricies cras tortor semper primis. Arcu potenti habitant class hac ex pellentesque urna. Sociosqu odio cras a quam ex id purus. Efficitur nisi nisl amet ornare nunc est congue ultrices. Malesuada consectetur maecenas sollicitudin suscipit cubilia. Etiam netus accumsan fermentum inceptos metus arcu tristique ultricies maximus lorem pharetra.', 9, 1, '2023-07-31 09:21:24', '2023-07-31 09:21:24', 1),
(65, '002', 'Blue Washed Jeans', 'Blue-Washed-Jeans-1.jpg', 60.00, 75.00, 3, 1.00, 'Justo nostra nam accumsan ultrices aliquam. Morbi hac nisl ultricies cras tortor semper primis. Arcu potenti habitant class hac ex pellentesque urna. Sociosqu odio cras a quam ex id purus. Efficitur nisi nisl amet ornare nunc est congue ultrices.', 9, 1, '2023-07-31 09:24:38', '2023-07-31 09:24:38', 1),
(66, '003', 'Dark Blue Sneaker', 'Dark-Blue-Sneaker-1-300x300.jpg', 100.00, 120.00, 4, 1.30, 'Justo nostra nam accumsan ultrices aliquam. Morbi hac nisl ultricies cras tortor semper primis. Arcu potenti habitant class hac ex pellentesque urna. Sociosqu odio cras a quam ex id purus', 8, 1, '2023-07-31 09:25:53', '2023-07-31 09:25:53', 1),
(67, '004', 'Green Rubber Sandals', 'Green-Rubber-Sandals-1-300x300.jpg', 45.00, 50.00, 4, 0.70, 'Justo nostra nam accumsan ultrices aliquam. Morbi hac nisl ultricies cras tortor semper primis. Arcu potenti habitant class hac ex pellentesque urna. Sociosqu odio cras a quam ex id purus.', 8, 1, '2023-07-31 09:27:21', '2023-07-31 09:27:21', 1),
(68, '006', 'Green Striped Sweater', 'Green-Striped-Sweater-1.jpg', 140.00, 150.00, 3, 0.60, 'Ac hendrerit viverra penatibus velit et bibendum ex maximus. Ut scelerisque facilisi consectetuer aliquet feugiat. Magnis litora quis urna turpis tincidunt. Nam velit id quisque viverra aenean fusce.', 10, 1, '2023-07-31 09:28:19', '2023-07-31 09:28:19', 1),
(69, '007', 'Plaid Shirt', 'Plaid-Shirt-1.jpg', 125.00, 0.00, 4, 0.40, 'Ac hendrerit viverra penatibus velit et bibendum ex maximus. Ut scelerisque facilisi consectetuer aliquet feugiat. Magnis litora quis urna turpis tincidunt. Nam velit id quisque viverra aenean fusce.', 11, 1, '2023-07-31 09:30:05', '2023-07-31 09:30:20', 1),
(70, '008', 'Red Flower Dress', 'Pink-Polkadot-Dress-1.jpg', 105.00, 120.00, 3, 0.50, 'Ac hendrerit viverra penatibus velit et bibendum ex maximus. Ut scelerisque facilisi consectetuer aliquet feugiat. Magnis litora quis urna turpis tincidunt. Nam velit id quisque viverra aenean fusce.', 12, 1, '2023-07-31 09:31:22', '2023-07-31 09:31:22', 1),
(71, '009', 'Winter Hat Pink', 'Winter-Hat-Pink-1.jpg', 25.00, 30.00, 2, 0.20, 'Ac hendrerit viverra penatibus velit et bibendum ex maximus. Ut scelerisque facilisi consectetuer aliquet feugiat. Magnis litora quis urna turpis tincidunt. Nam velit id quisque viverra aenean fusce.', 7, 1, '2023-07-31 09:35:32', '2023-07-31 09:35:32', 1),
(72, '010', 'Winter Hat Sweet Brown', 'Winter-Hat-Sweet-Brown-1-300x300.jpg', 25.00, 29.00, 2, 0.30, 'Ac hendrerit viverra penatibus velit et bibendum ex maximus. Ut scelerisque facilisi consectetuer aliquet feugiat. Magnis litora quis urna turpis tincidunt. Nam velit id quisque viverra aenean fusce.', 7, 1, '2023-07-31 09:36:25', '2023-07-31 09:36:25', 1),
(73, '011', 'Striped Sundress', 'Striped-Sundress-1.jpg', 50.00, 55.00, 2, 0.40, 'Ac hendrerit viverra penatibus velit et bibendum ex maximus. Ut scelerisque facilisi consectetuer aliquet feugiat. Magnis litora quis urna turpis tincidunt. Nam velit id quisque viverra aenean fusce.', 12, 1, '2023-07-31 09:39:53', '2023-07-31 09:39:53', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_color`
--

CREATE TABLE `product_color` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` int NOT NULL,
  `color_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_color`
--

INSERT INTO `product_color` (`id`, `product_id`, `color_id`, `created_at`, `updated_at`) VALUES
(24, 64, 1, NULL, NULL),
(25, 64, 2, NULL, NULL),
(26, 65, 1, NULL, NULL),
(27, 65, 2, NULL, NULL),
(28, 66, 1, NULL, NULL),
(29, 66, 3, NULL, NULL),
(30, 67, 1, NULL, NULL),
(31, 67, 3, NULL, NULL),
(32, 68, 1, NULL, NULL),
(33, 68, 2, NULL, NULL),
(34, 68, 3, NULL, NULL),
(35, 69, 1, NULL, NULL),
(36, 69, 3, NULL, NULL),
(37, 69, 1, NULL, NULL),
(38, 69, 3, NULL, NULL),
(39, 70, 1, NULL, NULL),
(40, 70, 2, NULL, NULL),
(41, 70, 4, NULL, NULL),
(42, 71, 2, NULL, NULL),
(43, 71, 4, NULL, NULL),
(44, 72, 2, NULL, NULL),
(45, 72, 3, NULL, NULL),
(46, 73, 2, NULL, NULL),
(47, 73, 4, NULL, NULL),
(48, 81, 2, NULL, NULL),
(49, 81, 1, NULL, NULL),
(50, 82, 1, NULL, NULL),
(51, 83, 1, NULL, NULL),
(52, 84, 1, NULL, NULL),
(53, 84, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_color_size`
--

CREATE TABLE `product_color_size` (
  `id` bigint UNSIGNED NOT NULL,
  `size_id` int NOT NULL,
  `product_id` int NOT NULL,
  `color_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_color_size`
--

INSERT INTO `product_color_size` (`id`, `size_id`, `product_id`, `color_id`, `created_at`, `updated_at`) VALUES
(11, 1, 79, 1, NULL, NULL),
(12, 2, 79, 2, NULL, NULL),
(13, 3, 79, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_size`
--

CREATE TABLE `product_size` (
  `id` bigint UNSIGNED NOT NULL,
  `size_id` int NOT NULL,
  `product_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_size`
--

INSERT INTO `product_size` (`id`, `size_id`, `product_id`, `created_at`, `updated_at`) VALUES
(5, 4, 63, NULL, NULL),
(6, 4, 63, NULL, NULL),
(7, 4, 63, NULL, NULL),
(8, 4, 63, NULL, NULL),
(9, 4, 63, NULL, NULL),
(10, 4, 63, NULL, NULL),
(11, 4, 63, NULL, NULL),
(12, 4, 63, NULL, NULL),
(13, 4, 63, NULL, NULL),
(14, 1, 63, NULL, NULL),
(15, 2, 63, NULL, NULL),
(16, 1, 61, NULL, NULL),
(17, 2, 61, NULL, NULL),
(18, 3, 61, NULL, NULL),
(19, 4, 61, NULL, NULL),
(20, 1, 64, NULL, NULL),
(21, 2, 64, NULL, NULL),
(22, 1, 65, NULL, NULL),
(23, 2, 65, NULL, NULL),
(24, 1, 66, NULL, NULL),
(25, 3, 66, NULL, NULL),
(26, 1, 67, NULL, NULL),
(27, 3, 67, NULL, NULL),
(28, 1, 68, NULL, NULL),
(29, 2, 68, NULL, NULL),
(30, 3, 68, NULL, NULL),
(31, 1, 69, NULL, NULL),
(32, 3, 69, NULL, NULL),
(33, 1, 69, NULL, NULL),
(34, 3, 69, NULL, NULL),
(35, 1, 70, NULL, NULL),
(36, 2, 70, NULL, NULL),
(37, 4, 70, NULL, NULL),
(38, 2, 71, NULL, NULL),
(39, 4, 71, NULL, NULL),
(40, 2, 72, NULL, NULL),
(41, 3, 72, NULL, NULL),
(42, 2, 73, NULL, NULL),
(43, 4, 73, NULL, NULL),
(44, 2, 81, NULL, NULL),
(45, 1, 81, NULL, NULL),
(46, 1, 82, NULL, NULL),
(47, 1, 83, NULL, NULL),
(48, 1, 84, NULL, NULL),
(49, 1, 84, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(25, 'khách hàng', 'khách hàng', '2023-07-28 03:45:04', '2023-07-28 04:43:51'),
(26, 'Admin', 'Admin', '2023-07-28 03:58:53', '2023-07-28 04:44:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'S', '2023-07-31 03:37:38', '2023-07-31 03:37:38'),
(2, 'M', '2023-07-31 03:37:42', '2023-07-31 03:37:42'),
(3, 'L', '2023-07-31 03:37:47', '2023-07-31 03:37:47'),
(4, 'XL', '2023-07-31 03:37:54', '2023-07-31 03:37:54'),
(5, 'XXL', '2023-07-31 03:38:02', '2023-07-31 03:38:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `hinhanh`, `phone`, `password`, `address`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'ADMIN', 'admin@gmail.com', 'a-beautiful-boy-in-a-shirt-and-bow-tie-stands-on-a-gray-background-e1657473736321.jpg', '01669665257', '$2y$10$KzRro.fECdyQTbWujK6SQuG4y4AuCuczpSLjPaDg2S9y0SNSqgcbu', 'Nam từ liêm - Hà Nội', NULL, NULL, '2023-07-26 02:30:40', '2023-08-04 20:49:17'),
(8, 'Khách Hàng', 'minh12335678899@gmail.com', 'a-beautiful-boy-in-a-shirt-and-bow-tie-stands-on-a-gray-background-e1657473736321.jpg', '0395 222 660', '$2y$10$pJTQjMu90J3W2F.k4vht2u87tkNicaXUwDh6LmbE.FkuORATlSkK.', 'Nam từ liêm - Hà Nội', NULL, NULL, '2023-07-28 20:45:47', '2023-07-30 03:51:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_role`
--

CREATE TABLE `user_role` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `role_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_role`
--

INSERT INTO `user_role` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(15, 4, 26, NULL, NULL),
(19, 9, 25, NULL, NULL),
(20, 10, 25, NULL, NULL),
(21, 12, 25, NULL, NULL),
(23, 8, 25, NULL, NULL),
(24, 13, 25, NULL, NULL),
(25, 18, 25, NULL, NULL),
(26, 19, 25, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cate_categenders`
--
ALTER TABLE `cate_categenders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cate_genders`
--
ALTER TABLE `cate_genders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_color`
--
ALTER TABLE `product_color`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_color_size`
--
ALTER TABLE `product_color_size`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `cate_categenders`
--
ALTER TABLE `cate_categenders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cate_genders`
--
ALTER TABLE `cate_genders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `logins`
--
ALTER TABLE `logins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `pays`
--
ALTER TABLE `pays`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT cho bảng `product_color`
--
ALTER TABLE `product_color`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `product_color_size`
--
ALTER TABLE `product_color_size`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
