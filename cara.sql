-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 12, 2022 at 09:19 AM
-- Server version: 8.0.31-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cara`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Áo thun'),
(2, 'Áo ngắn tay'),
(9, 'Áo nỉ và hoodie'),
(10, 'Áo polo');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `hex` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `name`, `hex`) VALUES
(1, 'Đen', '#000000'),
(2, 'Trắng', '#FFFFFF'),
(3, 'Đỏ', '#FF0000'),
(4, 'Xanh', '#0000FF');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_info`
--

CREATE TABLE `delivery_info` (
  `id` int NOT NULL,
  `order_id` int NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `delivery_info`
--

INSERT INTO `delivery_info` (`id`, `order_id`, `first_name`, `last_name`, `email`, `address`, `city`) VALUES
(17, 54, 'Test', 'test', 'test@gmail.com', 'test', 'Ha Noi'),
(18, 55, 'Test', 'test', 'test@gmail.com', 'test', 'Ha Noi');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int NOT NULL,
  `customer_id` int NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment` int DEFAULT '0',
  `extra_info` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `customer_id`, `status`, `create_date`, `payment`, `extra_info`) VALUES
(53, 1, 0, '2022-12-12 03:02:00', 0, NULL),
(54, 6, 2, '2022-12-12 03:02:25', 0, NULL),
(55, 6, 2, '2022-12-12 03:41:30', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int NOT NULL,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `color` int NOT NULL,
  `size` int NOT NULL,
  `quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `color`, `size`, `quantity`) VALUES
(124, 54, 1, 1, 2, 1),
(126, 55, 1, 1, 2, 1000),
(127, 55, 1, 2, 2, 1),
(131, 53, 2, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int NOT NULL,
  `discount` int NOT NULL,
  `featured_image` longtext NOT NULL,
  `list_image` longtext NOT NULL,
  `created_date` datetime NOT NULL,
  `category` int NOT NULL,
  `view` int NOT NULL DEFAULT '0',
  `featured` tinyint(1) DEFAULT '0',
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description_detail` longtext NOT NULL,
  `color` varchar(200) NOT NULL,
  `size` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `discount`, `featured_image`, `list_image`, `created_date`, `category`, `view`, `featured`, `description`, `description_detail`, `color`, `size`) VALUES
(1, 'Áo Thun Cổ Tròn Ngắn Tay', 244000, 198000, 'goods_01_441464.webp', 'goods_69_431599.jpg', '2022-12-04 18:03:21', 1, 100, 1, 'Sản phẩm với độ hoàn thiện cao, đơn giản nhưng có thiết kế và độ bền vượt trội.', '<p><span style=\"color: rgb(27, 27, 27); font-family: \"Helvetica Neue\", HelveticaNeue, Helvetica, \"Noto Sans\", Roboto, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", \"ヒラギノ角ゴ  Pro W3\", \"Noto Sans CJK JP\", Osaka, Meiryo, メイリオ, \"MS PGothic\", \"ＭＳ  Ｐゴシック\", \"Hiragino Sans GB\", \"Arial Unicode MS\", sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">- Nhóm thiết kế tại Paris, do Christophe Lemaire dẫn đầu, đã tạo ra bộ sưu tập LifeWear mới bằng cách sử dụng các loại vải tân tiến và kiểu dáng hiện đại.</span></p><br style=\"background-repeat: no-repeat; box-sizing: inherit; padding: 0px; margin: 0px; color: rgb(27, 27, 27); font-family: \"Helvetica Neue\", HelveticaNeue, Helvetica, \"Noto Sans\", Roboto, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", \"ヒラギノ角ゴ  Pro W3\", \"Noto Sans CJK JP\", Osaka, Meiryo, メイリオ, \"MS PGothic\", \"ＭＳ  Ｐゴシック\", \"Hiragino Sans GB\", \"Arial Unicode MS\", sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<p><span style=\"color: rgb(27, 27, 27); font-family: \"Helvetica Neue\", HelveticaNeue, Helvetica, \"Noto Sans\", Roboto, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", \"ヒラギノ角ゴ  Pro W3\", \"Noto Sans CJK JP\", Osaka, Meiryo, メイリオ, \"MS PGothic\", \"ＭＳ  Ｐゴシック\", \"Hiragino Sans GB\", \"Arial Unicode MS\", sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">- Áo thun cổ thuyền có thiết kế đơn giản được làm từ chất liệu vải jersey dày dặn.</span></p><br style=\"background-repeat: no-repeat; box-sizing: inherit; padding: 0px; margin: 0px; color: rgb(27, 27, 27); font-family: \"Helvetica Neue\", HelveticaNeue, Helvetica, \"Noto Sans\", Roboto, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", \"ヒラギノ角ゴ  Pro W3\", \"Noto Sans CJK JP\", Osaka, Meiryo, メイリオ, \"MS PGothic\", \"ＭＳ  Ｐゴシック\", \"Hiragino Sans GB\", \"Arial Unicode MS\", sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<p><span style=\"color: rgb(27, 27, 27); font-family: \"Helvetica Neue\", HelveticaNeue, Helvetica, \"Noto Sans\", Roboto, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", \"ヒラギノ角ゴ  Pro W3\", \"Noto Sans CJK JP\", Osaka, Meiryo, メイリオ, \"MS PGothic\", \"ＭＳ  Ｐゴシック\", \"Hiragino Sans GB\", \"Arial Unicode MS\", sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">- Do chất liệu áo độc đáo với số lượng sợi thấp được dệt nhỏ gọn nên sản phẩm bền, lâu phai và càng giặt càng đẹp.</span></p><br style=\"background-repeat: no-repeat; box-sizing: inherit; padding: 0px; margin: 0px; color: rgb(27, 27, 27); font-family: \"Helvetica Neue\", HelveticaNeue, Helvetica, \"Noto Sans\", Roboto, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", \"ヒラギノ角ゴ  Pro W3\", \"Noto Sans CJK JP\", Osaka, Meiryo, メイリオ, \"MS PGothic\", \"ＭＳ  Ｐゴシック\", \"Hiragino Sans GB\", \"Arial Unicode MS\", sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<p><span style=\"color: rgb(27, 27, 27); font-family: \"Helvetica Neue\", HelveticaNeue, Helvetica, \"Noto Sans\", Roboto, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", \"ヒラギノ角ゴ  Pro W3\", \"Noto Sans CJK JP\", Osaka, Meiryo, メイリオ, \"MS PGothic\", \"ＭＳ  Ｐゴシック\", \"Hiragino Sans GB\", \"Arial Unicode MS\", sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">- Cổ áo có thể điều chỉnh để tạo kiểu cổ phẳng.</span></p><br style=\"background-repeat: no-repeat; box-sizing: inherit; padding: 0px; margin: 0px; color: rgb(27, 27, 27); font-family: \"Helvetica Neue\", HelveticaNeue, Helvetica, \"Noto Sans\", Roboto, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", \"ヒラギノ角ゴ  Pro W3\", \"Noto Sans CJK JP\", Osaka, Meiryo, メイリオ, \"MS PGothic\", \"ＭＳ  Ｐゴシック\", \"Hiragino Sans GB\", \"Arial Unicode MS\", sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<p><span style=\"color: rgb(27, 27, 27); font-family: \"Helvetica Neue\", HelveticaNeue, Helvetica, \"Noto Sans\", Roboto, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", \"ヒラギノ角ゴ  Pro W3\", \"Noto Sans CJK JP\", Osaka, Meiryo, メイリオ, \"MS PGothic\", \"ＭＳ  Ｐゴシック\", \"Hiragino Sans GB\", \"Arial Unicode MS\", sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">- Dáng áo vừa vặn, rộng rãi mang phong cách hiện đại.</span></p>', '1,2,4', '2,3'),
(2, 'AIRism Cotton Áo Thun Cổ Tròn Dáng Rộng', 391000, 293000, 'vngoods_19_425974.webp', 'goods_425974_sub14.jpg,goods_425974_sub17.jpg,goods_425974_sub18.jpg', '2022-12-04 18:03:21', 1, 1000, 1, 'Chất liệu với bề mặt của cotton cùng hiệu năng mát mẻ của \"AIRism\". Đường viền cổ áo hẹp tạo phong cách gọn gàng, sạch sẽ.', '<p><span style=\"color: rgb(27, 27, 27); font-family: \"Helvetica Neue\", HelveticaNeue, Helvetica, \"Noto Sans\", Roboto, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", \"ヒラギノ角ゴ  Pro W3\", \"Noto Sans CJK JP\", Osaka, Meiryo, メイリオ, \"MS PGothic\", \"ＭＳ  Ｐゴシック\", \"Hiragino Sans GB\", \"Arial Unicode MS\", sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Bộ sưu tập Uniqlo U là thành quả của đội ngũ các nhà thiết kế tận tâm và lành nghề có trụ sở tại Trung tâm Nghiên cứu và Phát triển Paris của chúng tôi do Giám đốc Nghệ thuật Christophe Lemaire lãnh đạo.</span></p><br style=\"background-repeat: no-repeat; box-sizing: inherit; padding: 0px; margin: 0px; color: rgb(27, 27, 27); font-family: \"Helvetica Neue\", HelveticaNeue, Helvetica, \"Noto Sans\", Roboto, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", \"ヒラギノ角ゴ  Pro W3\", \"Noto Sans CJK JP\", Osaka, Meiryo, メイリオ, \"MS PGothic\", \"ＭＳ  Ｐゴシック\", \"Hiragino Sans GB\", \"Arial Unicode MS\", sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><br style=\"background-repeat: no-repeat; box-sizing: inherit; padding: 0px; margin: 0px; color: rgb(27, 27, 27); font-family: \"Helvetica Neue\", HelveticaNeue, Helvetica, \"Noto Sans\", Roboto, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", \"ヒラギノ角ゴ  Pro W3\", \"Noto Sans CJK JP\", Osaka, Meiryo, メイリオ, \"MS PGothic\", \"ＭＳ  Ｐゴシック\", \"Hiragino Sans GB\", \"Arial Unicode MS\", sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<p><span style=\"color: rgb(27, 27, 27); font-family: \"Helvetica Neue\", HelveticaNeue, Helvetica, \"Noto Sans\", Roboto, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", \"ヒラギノ角ゴ  Pro W3\", \"Noto Sans CJK JP\", Osaka, Meiryo, メイリオ, \"MS PGothic\", \"ＭＳ  Ｐゴシック\", \"Hiragino Sans GB\", \"Arial Unicode MS\", sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">- Vải hai mặt với vẻ ngoài sạch sẽ, mịn màng.</span></p><br style=\"background-repeat: no-repeat; box-sizing: inherit; padding: 0px; margin: 0px; color: rgb(27, 27, 27); font-family: \"Helvetica Neue\", HelveticaNeue, Helvetica, \"Noto Sans\", Roboto, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", \"ヒラギノ角ゴ  Pro W3\", \"Noto Sans CJK JP\", Osaka, Meiryo, メイリオ, \"MS PGothic\", \"ＭＳ  Ｐゴシック\", \"Hiragino Sans GB\", \"Arial Unicode MS\", sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<p><span style=\"color: rgb(27, 27, 27); font-family: \"Helvetica Neue\", HelveticaNeue, Helvetica, \"Noto Sans\", Roboto, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", \"ヒラギノ角ゴ  Pro W3\", \"Noto Sans CJK JP\", Osaka, Meiryo, メイリオ, \"MS PGothic\", \"ＭＳ  Ｐゴシック\", \"Hiragino Sans GB\", \"Arial Unicode MS\", sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">- Thiết kế cổ tròn, kiểu dáng đẹp.</span></p><br style=\"background-repeat: no-repeat; box-sizing: inherit; padding: 0px; margin: 0px; color: rgb(27, 27, 27); font-family: \"Helvetica Neue\", HelveticaNeue, Helvetica, \"Noto Sans\", Roboto, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", \"ヒラギノ角ゴ  Pro W3\", \"Noto Sans CJK JP\", Osaka, Meiryo, メイリオ, \"MS PGothic\", \"ＭＳ  Ｐゴシック\", \"Hiragino Sans GB\", \"Arial Unicode MS\", sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<p><span style=\"color: rgb(27, 27, 27); font-family: \"Helvetica Neue\", HelveticaNeue, Helvetica, \"Noto Sans\", Roboto, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", \"ヒラギノ角ゴ  Pro W3\", \"Noto Sans CJK JP\", Osaka, Meiryo, メイリオ, \"MS PGothic\", \"ＭＳ  Ｐゴシック\", \"Hiragino Sans GB\", \"Arial Unicode MS\", sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">- Tay áo lửng và vừa vặn.</span></p><br style=\"background-repeat: no-repeat; box-sizing: inherit; padding: 0px; margin: 0px; color: rgb(27, 27, 27); font-family: \"Helvetica Neue\", HelveticaNeue, Helvetica, \"Noto Sans\", Roboto, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", \"ヒラギノ角ゴ  Pro W3\", \"Noto Sans CJK JP\", Osaka, Meiryo, メイリオ, \"MS PGothic\", \"ＭＳ  Ｐゴシック\", \"Hiragino Sans GB\", \"Arial Unicode MS\", sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<p><span style=\"color: rgb(27, 27, 27); font-family: \"Helvetica Neue\", HelveticaNeue, Helvetica, \"Noto Sans\", Roboto, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", \"ヒラギノ角ゴ  Pro W3\", \"Noto Sans CJK JP\", Osaka, Meiryo, メイリオ, \"MS PGothic\", \"ＭＳ  Ｐゴシック\", \"Hiragino Sans GB\", \"Arial Unicode MS\", sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">- Chất liệu vải hai mặt và dáng rộng.</span></p>', '1,2,3,4', '2,1,4'),
(3, 'Áo Thun Cổ Tròn Ngắn Tay', 244000, 178000, 'goods_69_431599.webp', 'goods_422992_sub14.jpg,goods_422992_sub17.jpg,goods_422992_sub18.jpg', '2022-12-04 18:03:21', 1, 100, 0, 'Thiết kế tỉ mỉ chú ý đến từng chi tiết và đường cắt phong cách.', '<p><span style=\"color: rgb(27, 27, 27); font-family: \"Helvetica Neue\", HelveticaNeue, Helvetica, \"Noto Sans\", Roboto, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", \"ヒラギノ角ゴ  Pro W3\", \"Noto Sans CJK JP\", Osaka, Meiryo, メイリオ, \"MS PGothic\", \"ＭＳ  Ｐゴシック\", \"Hiragino Sans GB\", \"Arial Unicode MS\", sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">- Nhóm thiết kế từ Paris, do Christophe Lemaire dẫn đầu, đã tạo ra một bộ sưu tập LifeWear mới với chất liệu vải sáng tạo và thiết kế hiện đại.</span></p><br style=\"background-repeat: no-repeat; box-sizing: inherit; padding: 0px; margin: 0px; color: rgb(27, 27, 27); font-family: \"Helvetica Neue\", HelveticaNeue, Helvetica, \"Noto Sans\", Roboto, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", \"ヒラギノ角ゴ  Pro W3\", \"Noto Sans CJK JP\", Osaka, Meiryo, メイリオ, \"MS PGothic\", \"ＭＳ  Ｐゴシック\", \"Hiragino Sans GB\", \"Arial Unicode MS\", sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<p><span style=\"color: rgb(27, 27, 27); font-family: \"Helvetica Neue\", HelveticaNeue, Helvetica, \"Noto Sans\", Roboto, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", \"ヒラギノ角ゴ  Pro W3\", \"Noto Sans CJK JP\", Osaka, Meiryo, メイリオ, \"MS PGothic\", \"ＭＳ  Ｐゴシック\", \"Hiragino Sans GB\", \"Arial Unicode MS\", sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">- Một phần của bộ sưu tập bao gồm những sản phẩm cần thiết được tạo ra tại xưởng may ở Paris của chúng tôi do giám đốc nghệ thuật Christophe Lemaire và một nhóm các nhà thiết kế quốc tế, chuyên khám phá, khai thác và phát triển của các loại vải mới.</span></p><br style=\"background-repeat: no-repeat; box-sizing: inherit; padding: 0px; margin: 0px; color: rgb(27, 27, 27); font-family: \"Helvetica Neue\", HelveticaNeue, Helvetica, \"Noto Sans\", Roboto, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", \"ヒラギノ角ゴ  Pro W3\", \"Noto Sans CJK JP\", Osaka, Meiryo, メイリオ, \"MS PGothic\", \"ＭＳ  Ｐゴシック\", \"Hiragino Sans GB\", \"Arial Unicode MS\", sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<p><span style=\"color: rgb(27, 27, 27); font-family: \"Helvetica Neue\", HelveticaNeue, Helvetica, \"Noto Sans\", Roboto, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", \"ヒラギノ角ゴ  Pro W3\", \"Noto Sans CJK JP\", Osaka, Meiryo, メイリオ, \"MS PGothic\", \"ＭＳ  Ｐゴシック\", \"Hiragino Sans GB\", \"Arial Unicode MS\", sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">- Chất lượng cao và mang lại giá trị tuyệt vời.</span></p><br style=\"background-repeat: no-repeat; box-sizing: inherit; padding: 0px; margin: 0px; color: rgb(27, 27, 27); font-family: \"Helvetica Neue\", HelveticaNeue, Helvetica, \"Noto Sans\", Roboto, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", \"ヒラギノ角ゴ  Pro W3\", \"Noto Sans CJK JP\", Osaka, Meiryo, メイリオ, \"MS PGothic\", \"ＭＳ  Ｐゴシック\", \"Hiragino Sans GB\", \"Arial Unicode MS\", sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<p><span style=\"color: rgb(27, 27, 27); font-family: \"Helvetica Neue\", HelveticaNeue, Helvetica, \"Noto Sans\", Roboto, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", \"ヒラギノ角ゴ  Pro W3\", \"Noto Sans CJK JP\", Osaka, Meiryo, メイリオ, \"MS PGothic\", \"ＭＳ  Ｐゴシック\", \"Hiragino Sans GB\", \"Arial Unicode MS\", sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">- Đây là một trong sản phẩm được yêu thích nhất của chúng tôi, từ mùa này sang mùa khác.</span></p><br style=\"background-repeat: no-repeat; box-sizing: inherit; padding: 0px; margin: 0px; color: rgb(27, 27, 27); font-family: \"Helvetica Neue\", HelveticaNeue, Helvetica, \"Noto Sans\", Roboto, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", \"ヒラギノ角ゴ  Pro W3\", \"Noto Sans CJK JP\", Osaka, Meiryo, メイリオ, \"MS PGothic\", \"ＭＳ  Ｐゴシック\", \"Hiragino Sans GB\", \"Arial Unicode MS\", sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">\r\n<p><span style=\"color: rgb(27, 27, 27); font-family: \"Helvetica Neue\", HelveticaNeue, Helvetica, \"Noto Sans\", Roboto, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", \"ヒラギノ角ゴ  Pro W3\", \"Noto Sans CJK JP\", Osaka, Meiryo, メイリオ, \"MS PGothic\", \"ＭＳ  Ｐゴシック\", \"Hiragino Sans GB\", \"Arial Unicode MS\", sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">- Màu sắc mới giúp đa dạng phong cách của bạn.</span></p>', '3,4', '1,3'),
(4, 'Áo Thun Kẻ Sọc Cổ Tròn Dài Tay', 489000, 293000, 'vngoods_69_453626.webp', 'goods_453626_sub17.jpg,goods_453626_sub18.jpg', '2022-12-04 18:03:21', 1, 100, 1, 'Áo thun cotton 100% bền đẹp. Kẻ sọc rộng tạo cảm giác giản dị.', '<p><span style=\"color: rgb(27, 27, 27); font-family: &quot;Helvetica Neue&quot;, HelveticaNeue, Helvetica, &quot;Noto Sans&quot;, Roboto, Arial, &quot;Hiragino Sans&quot;, &quot;Hiragino Kaku Gothic Pro&quot;, &quot;ヒラギノ角ゴ  Pro W3&quot;, &quot;Noto Sans CJK JP&quot;, Osaka, Meiryo, メイリオ, &quot;MS PGothic&quot;, &quot;ＭＳ  Ｐゴシック&quot;, &quot;Hiragino Sans GB&quot;, &quot;Arial Unicode MS&quot;, sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">- Chất liệu vải 100% cotton dày dặn, trọng lượng trung bình tạo cảm giác thoải mái.</span></p><br style=\"background-repeat: no-repeat; box-sizing: inherit; padding: 0px; margin: 0px; color: rgb(27, 27, 27); font-family: &quot;Helvetica Neue&quot;, HelveticaNeue, Helvetica, &quot;Noto Sans&quot;, Roboto, Arial, &quot;Hiragino Sans&quot;, &quot;Hiragino Kaku Gothic Pro&quot;, &quot;ヒラギノ角ゴ  Pro W3&quot;, &quot;Noto Sans CJK JP&quot;, Osaka, Meiryo, メイリオ, &quot;MS PGothic&quot;, &quot;ＭＳ  Ｐゴシック&quot;, &quot;Hiragino Sans GB&quot;, &quot;Arial Unicode MS&quot;, sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">\n<p><span style=\"color: rgb(27, 27, 27); font-family: &quot;Helvetica Neue&quot;, HelveticaNeue, Helvetica, &quot;Noto Sans&quot;, Roboto, Arial, &quot;Hiragino Sans&quot;, &quot;Hiragino Kaku Gothic Pro&quot;, &quot;ヒラギノ角ゴ  Pro W3&quot;, &quot;Noto Sans CJK JP&quot;, Osaka, Meiryo, メイリオ, &quot;MS PGothic&quot;, &quot;ＭＳ  Ｐゴシック&quot;, &quot;Hiragino Sans GB&quot;, &quot;Arial Unicode MS&quot;, sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">- Thiết kế cổ áo đẹp mắt với đường khâu ẩn.</span></p><br style=\"background-repeat: no-repeat; box-sizing: inherit; padding: 0px; margin: 0px; color: rgb(27, 27, 27); font-family: &quot;Helvetica Neue&quot;, HelveticaNeue, Helvetica, &quot;Noto Sans&quot;, Roboto, Arial, &quot;Hiragino Sans&quot;, &quot;Hiragino Kaku Gothic Pro&quot;, &quot;ヒラギノ角ゴ  Pro W3&quot;, &quot;Noto Sans CJK JP&quot;, Osaka, Meiryo, メイリオ, &quot;MS PGothic&quot;, &quot;ＭＳ  Ｐゴシック&quot;, &quot;Hiragino Sans GB&quot;, &quot;Arial Unicode MS&quot;, sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">\n<p><span style=\"color: rgb(27, 27, 27); font-family: &quot;Helvetica Neue&quot;, HelveticaNeue, Helvetica, &quot;Noto Sans&quot;, Roboto, Arial, &quot;Hiragino Sans&quot;, &quot;Hiragino Kaku Gothic Pro&quot;, &quot;ヒラギノ角ゴ  Pro W3&quot;, &quot;Noto Sans CJK JP&quot;, Osaka, Meiryo, メイリオ, &quot;MS PGothic&quot;, &quot;ＭＳ  Ｐゴシック&quot;, &quot;Hiragino Sans GB&quot;, &quot;Arial Unicode MS&quot;, sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">- Thiết kế unisex với kẻ sọc ba màu rực rỡ.</span></p><br style=\"background-repeat: no-repeat; box-sizing: inherit; padding: 0px; margin: 0px; color: rgb(27, 27, 27); font-family: &quot;Helvetica Neue&quot;, HelveticaNeue, Helvetica, &quot;Noto Sans&quot;, Roboto, Arial, &quot;Hiragino Sans&quot;, &quot;Hiragino Kaku Gothic Pro&quot;, &quot;ヒラギノ角ゴ  Pro W3&quot;, &quot;Noto Sans CJK JP&quot;, Osaka, Meiryo, メイリオ, &quot;MS PGothic&quot;, &quot;ＭＳ  Ｐゴシック&quot;, &quot;Hiragino Sans GB&quot;, &quot;Arial Unicode MS&quot;, sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">\n<p><span style=\"color: rgb(27, 27, 27); font-family: &quot;Helvetica Neue&quot;, HelveticaNeue, Helvetica, &quot;Noto Sans&quot;, Roboto, Arial, &quot;Hiragino Sans&quot;, &quot;Hiragino Kaku Gothic Pro&quot;, &quot;ヒラギノ角ゴ  Pro W3&quot;, &quot;Noto Sans CJK JP&quot;, Osaka, Meiryo, メイリオ, &quot;MS PGothic&quot;, &quot;ＭＳ  Ｐゴシック&quot;, &quot;Hiragino Sans GB&quot;, &quot;Arial Unicode MS&quot;, sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">- Có thể mặc riêng lẻ hoặc kết hợp mặc nhiều lớp.</span></p>', '1,2,4', '2,3'),
(5, 'Áo Polo Dry Vải Pique Ngắn Tay', 489000, 345000, 'goods_69_455677.webp', 'goods_69_455677.webp', '2022-12-04 18:03:21', 10, 1000, 0, 'Các đường sọc trên cổ áo tạo thêm điểm nhấn cho phong cách. Hoàn hảo cho các môn thể thao hoặc trang phục bình thường.', '<p><span style=\"color: rgb(27, 27, 27); font-family: &quot;Helvetica Neue&quot;, HelveticaNeue, Helvetica, &quot;Noto Sans&quot;, Roboto, Arial, &quot;Hiragino Sans&quot;, &quot;Hiragino Kaku Gothic Pro&quot;, &quot;ヒラギノ角ゴ  Pro W3&quot;, &quot;Noto Sans CJK JP&quot;, Osaka, Meiryo, メイリオ, &quot;MS PGothic&quot;, &quot;ＭＳ  Ｐゴシック&quot;, &quot;Hiragino Sans GB&quot;, &quot;Arial Unicode MS&quot;, sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">- Chất liệu vải 100% cotton dày dặn, trọng lượng trung bình tạo cảm giác thoải mái.</span></p><br style=\"background-repeat: no-repeat; box-sizing: inherit; padding: 0px; margin: 0px; color: rgb(27, 27, 27); font-family: &quot;Helvetica Neue&quot;, HelveticaNeue, Helvetica, &quot;Noto Sans&quot;, Roboto, Arial, &quot;Hiragino Sans&quot;, &quot;Hiragino Kaku Gothic Pro&quot;, &quot;ヒラギノ角ゴ  Pro W3&quot;, &quot;Noto Sans CJK JP&quot;, Osaka, Meiryo, メイリオ, &quot;MS PGothic&quot;, &quot;ＭＳ  Ｐゴシック&quot;, &quot;Hiragino Sans GB&quot;, &quot;Arial Unicode MS&quot;, sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">\n<p><span style=\"color: rgb(27, 27, 27); font-family: &quot;Helvetica Neue&quot;, HelveticaNeue, Helvetica, &quot;Noto Sans&quot;, Roboto, Arial, &quot;Hiragino Sans&quot;, &quot;Hiragino Kaku Gothic Pro&quot;, &quot;ヒラギノ角ゴ  Pro W3&quot;, &quot;Noto Sans CJK JP&quot;, Osaka, Meiryo, メイリオ, &quot;MS PGothic&quot;, &quot;ＭＳ  Ｐゴシック&quot;, &quot;Hiragino Sans GB&quot;, &quot;Arial Unicode MS&quot;, sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">- Thiết kế cổ áo đẹp mắt với đường khâu ẩn.</span></p><br style=\"background-repeat: no-repeat; box-sizing: inherit; padding: 0px; margin: 0px; color: rgb(27, 27, 27); font-family: &quot;Helvetica Neue&quot;, HelveticaNeue, Helvetica, &quot;Noto Sans&quot;, Roboto, Arial, &quot;Hiragino Sans&quot;, &quot;Hiragino Kaku Gothic Pro&quot;, &quot;ヒラギノ角ゴ  Pro W3&quot;, &quot;Noto Sans CJK JP&quot;, Osaka, Meiryo, メイリオ, &quot;MS PGothic&quot;, &quot;ＭＳ  Ｐゴシック&quot;, &quot;Hiragino Sans GB&quot;, &quot;Arial Unicode MS&quot;, sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">\n<p><span style=\"color: rgb(27, 27, 27); font-family: &quot;Helvetica Neue&quot;, HelveticaNeue, Helvetica, &quot;Noto Sans&quot;, Roboto, Arial, &quot;Hiragino Sans&quot;, &quot;Hiragino Kaku Gothic Pro&quot;, &quot;ヒラギノ角ゴ  Pro W3&quot;, &quot;Noto Sans CJK JP&quot;, Osaka, Meiryo, メイリオ, &quot;MS PGothic&quot;, &quot;ＭＳ  Ｐゴシック&quot;, &quot;Hiragino Sans GB&quot;, &quot;Arial Unicode MS&quot;, sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">- Thiết kế unisex với kẻ sọc ba màu rực rỡ.</span></p><br style=\"background-repeat: no-repeat; box-sizing: inherit; padding: 0px; margin: 0px; color: rgb(27, 27, 27); font-family: &quot;Helvetica Neue&quot;, HelveticaNeue, Helvetica, &quot;Noto Sans&quot;, Roboto, Arial, &quot;Hiragino Sans&quot;, &quot;Hiragino Kaku Gothic Pro&quot;, &quot;ヒラギノ角ゴ  Pro W3&quot;, &quot;Noto Sans CJK JP&quot;, Osaka, Meiryo, メイリオ, &quot;MS PGothic&quot;, &quot;ＭＳ  Ｐゴシック&quot;, &quot;Hiragino Sans GB&quot;, &quot;Arial Unicode MS&quot;, sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">\n<p><span style=\"color: rgb(27, 27, 27); font-family: &quot;Helvetica Neue&quot;, HelveticaNeue, Helvetica, &quot;Noto Sans&quot;, Roboto, Arial, &quot;Hiragino Sans&quot;, &quot;Hiragino Kaku Gothic Pro&quot;, &quot;ヒラギノ角ゴ  Pro W3&quot;, &quot;Noto Sans CJK JP&quot;, Osaka, Meiryo, メイリオ, &quot;MS PGothic&quot;, &quot;ＭＳ  Ｐゴシック&quot;, &quot;Hiragino Sans GB&quot;, &quot;Arial Unicode MS&quot;, sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: 0.16px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">- Có thể mặc riêng lẻ hoặc kết hợp mặc nhiều lớp.</span></p>', '1,2,3,4', '2,1,4'),
(28, 'Disney Áo Nỉ Dài Tay', 784000, 588000, 'vngoods_54_455906.webp', 'vngoods_54_455906.webp', '2022-12-12 07:12:33', 9, 200, 0, 'Disney Mickey & Friends hiện là linh vật thể thao tại các trường đại học!', 'Disney Mickey & Friends hiện là linh vật thể thao tại các trường đại học!', '1,2,3,4', '1,2,3,4'),
(29, 'Áo Khoác Nỉ Có Mũ Chui Đầu Dài Tay', 784000, 686000, 'vngoods_02_453613.webp', 'vngoods_02_453613.webp', '2022-12-12 07:12:17', 9, 200, 1, 'A stylish sweatshirt with a cozy lining and authentic details.', 'A stylish sweatshirt with a cozy lining and authentic details.', '1,2,3,4', '1,2,3,4'),
(30, 'Ukiyoe Archive Áo Nỉ Dài Tay', 787000, 686000, 'vngoods_03_455823.webp', 'vngoods_03_455823.webp', '2022-12-12 07:12:43', 9, 200, 0, 'Ukiyo-e UT với các thiết kế cổ điển của Hokusai, Hiroshige và Kuniyoshi nay đã trở lại!', 'Ukiyo-e UT với các thiết kế cổ điển của Hokusai, Hiroshige và Kuniyoshi nay đã trở lại!', '1,2,3,4', '1,2,3,4');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `name`) VALUES
(1, 'XL'),
(2, 'M'),
(3, 'L'),
(4, 'S');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `display_name` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `profile_image` longtext NOT NULL,
  `role` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `display_name`, `username`, `password`, `email`, `profile_image`, `role`) VALUES
(1, 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'lemle2580@gmail.com', 'https://templateprj.vercel.app/img/products/n3.jpg', 0),
(5, 'huyyeuviet', 'huyyeuviet', '827ccb0eea8a706c4c34a16891f84e7b', 'longddphx22967@fpt.edu.vn', 'http://localhost/duan1/assets/images/314896096_676413974053994_1051460235729395105_n.jpg', 0),
(6, 'alskdjf', 'cara_dev', 'd4e618faf0441e9c2a5fec90f2b60043', 'cara_de@gmail.com', 'http://localhost/duan1/assets/images/298254862_145663998109108_7358436904942111304_n.jpg', 1),
(15, '1313', '1313', 'f09696910bdd874a99cd74c8f05b5c44', 'zipfo13od21@gmail.com', 'http://localhost/duan1/assets/images/test.jpg', 0),
(16, '1414a', '1414', 'a01610228fe998f515a72dd730294d87', 'lemle25141480@gmail.com', 'http://localhost/duan1/assets/images/test.jpg', 0),
(17, 'nd1', 'nd1', 'd41d8cd98f00b204e9800998ecf8427e', 'nd1@gmail.com', 'http://localhost/duan1/assets/images/314896096_676413974053994_1051460235729395105_n.jpg', 0),
(30, 'test', 'test', '098f6bcd4621d373cade4e832627b4f6', 'test@gmail.com', 'http://localhost/duan1/assets/images/302565088_197842199331873_240580744480604483_n.jpg', 0),
(35, 'test1', 'test1', 'ad0234829205b9033196ba818f7a872b', 'test1@gmail.com', 'http://localhost/duan1/assets/images/302565088_197842199331873_240580744480604483_n.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_info`
--
ALTER TABLE `delivery_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `delivery_info`
--
ALTER TABLE `delivery_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
