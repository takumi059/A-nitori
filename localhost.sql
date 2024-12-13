-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2024-12-13 03:45:36
-- サーバのバージョン： 8.0.40
-- PHP のバージョン: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `商品`
--
CREATE DATABASE IF NOT EXISTS `商品` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `商品`;

-- --------------------------------------------------------

--
-- テーブルの構造 `家具`
--

CREATE TABLE `家具` (
  `id` int NOT NULL,
  `商品名` varchar(255) NOT NULL,
  `値段` decimal(10,2) NOT NULL,
  `URL` varchar(2083) DEFAULT NULL,
  `型番` varchar(2083) DEFAULT NULL,
  `色` varchar(2083) DEFAULT NULL,
  `種類` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- テーブルのデータのダンプ `家具`
--

INSERT INTO `家具` (`id`, `商品名`, `値段`, `URL`, `型番`, `色`, `種類`) VALUES
(4, 'シェル型チェア', 7689.00, 'https://www.nitori-net.jp/ec/product/3523106s/', 'K-1195W-3 WH', 'ホワイト', '椅子');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `家具`
--
ALTER TABLE `家具`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `家具`
--
ALTER TABLE `家具`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
