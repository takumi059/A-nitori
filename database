-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2024-12-20 03:25:47
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

-- --------------------------------------------------------

--
-- テーブルの構造 `家具`
--

CREATE TABLE `家具` (
  `id` int NOT NULL,
  `商品名` varchar(255) NOT NULL,
  `値段` int NOT NULL,
  `URL` varchar(2083) DEFAULT NULL,
  `色` varchar(2083) DEFAULT NULL,
  `種類` varchar(50) DEFAULT NULL,
  `幅` int DEFAULT NULL,
  `高さ` int DEFAULT NULL,
  `奥行き` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- テーブルのデータのダンプ `家具`
--

INSERT INTO `家具` (`id`, `商品名`, `値段`, `URL`, `色`, `種類`, `幅`, `高さ`, `奥行き`) VALUES
(4, 'シェル型チェア', 7689, 'https://www.nitori-net.jp/ec/product/3523106s/', 'ホワイト', '椅子', 45, 53, 78),
(5, 'シングルベッドフレーム', 24990, 'https://www.nitori-net.jp/ec/product/2078000/?srsltid=AfmBOooMh1IJCcN9dfgylmBmoGdjBiCeGQgE-Xx7-iQtfdlCoAtUQ8aW', 'ミドルブラウン', 'ベッド', 98, 85, 200),
(6, 'センターテーブル', 46990, 'https://www.nitori-net.jp/ec/product/1503400s/', 'グレー', 'テーブル', 120, 40, 60),
(7, 'ドレッサーテーブル', 14990, 'https://www.nitori-net.jp/ec/product/8830087/ ', 'ホワイト', 'テーブル', 90, 41, 40),
(8, 'センターテーブル', 46990, 'https://www.nitori-net.jp/ec/product/1503420/ ', 'グレー', 'テーブル', 120, 40, 60),
(9, '昇降テーブル', 17990, 'https://www.nitori-net.jp/ec/product/2600286/ ', 'ライトブラウン', 'テーブル', 80, 95, 40),
(10, '昇降テーブル', 17990, 'https://www.nitori-net.jp/ec/product/2600287/ ', 'ミドルブラウン', 'テーブル', 80, 95, 40),
(20, 'シングル 棚・照明・サイド収納付きベッドフレーム', 42990, 'https://www.nitori-net.jp/ec/product/2190600004916s/', 'ホワイトウォッシュ', 'ベッド', 98, 85, 210),
(21, 'シングル 棚・照明・サイド収納付きベッドフレーム', 42990, 'https://www.nitori-net.jp/ec/product/2190600004916s/', 'グレー', 'ベッド', 98, 85, 210),
(22, 'シングル 棚・照明・サイド収納付きベッドフレーム', 42990, 'https://www.nitori-net.jp/ec/product/2190600004916s/', 'ブラック', 'ベッド', 98, 85, 210),
(23, 'シングル 棚・照明・サイド収納付きベッドフレーム', 42990, 'https://www.nitori-net.jp/ec/product/2190600004916s/', 'ライトブラウン', 'ベッド', 98, 85, 210),
(24, 'シングル 棚・照明・サイド収納付きベッドフレーム', 42990, 'https://www.nitori-net.jp/ec/product/2190600004916s/', 'ミドルブラウン', 'ベッド', 98, 85, 210),
(25, 'シングル 棚・サイド収納付きベッドフレーム', 34990, 'https://www.nitori-net.jp/ec/product/2190600003704s/', 'ホワイトウォッシュ', 'ベッド', 98, 85, 208),
(26, 'シングル 棚・照明・サイド収納付きベッドフレーム', 34990, 'https://www.nitori-net.jp/ec/product/2190600004916s/', 'グレー', 'ベッド', 98, 85, 210),
(27, 'シングル 棚・照明・サイド収納付きベッドフレーム', 34990, 'https://www.nitori-net.jp/ec/product/2190600004916s/', 'ブラック', 'ベッド', 98, 85, 210),
(28, 'シングル 棚・照明・サイド収納付きベッドフレーム', 34990, 'https://www.nitori-net.jp/ec/product/2190600004916s/', 'ライトブラウン', 'ベッド', 98, 85, 210),
(29, 'シングル 棚・照明・サイド収納付きベッドフレーム', 34990, 'https://www.nitori-net.jp/ec/product/2190600004916s/', 'ミドルブラウン', 'ベッド', 98, 85, 210),
(30, '遮光カーテン', 4990, 'https://www.nitori-net.jp/ec/product/7313069/', 'ホワイト', 'カーテン', 100, NULL, 178),
(31, '遮光カーテン', 2792, 'https://www.nitori-net.jp/ec/product/7313278/', 'ローズ', 'カーテン', 100, NULL, 178),
(32, '遮光カーテン', 4990, 'https://www.nitori-net.jp/ec/product/7313096/', 'ライトブラウン', 'カーテン', 100, NULL, 178),
(33, 'シングルベッドフレーム引出し付き', 54990, 'https://www.nitori-net.jp/ec/product/2067740s/', 'ホワイトウォッシュ', 'ベッド', 98, 87, 209),
(34, 'シングルベッドフレーム引出し付き', 54990, 'https://www.nitori-net.jp/ec/product/2067740s/', 'ライトブラウン', 'ベッド', 98, 87, 209),
(35, 'シングルベッドフレーム引出し付き', 54990, 'https://www.nitori-net.jp/ec/product/2067740s/', 'ミドルブラウン', 'ベッド', 98, 87, 209),
(36, 'シングルベッドフレーム引出し付き', 34990, 'https://www.nitori-net.jp/ec/product/2023190s/', 'ホワイトウォッシュ', 'ベッド', 97, 85, 211),
(37, 'シングルベッドフレーム引出し付き', 34990, 'https://www.nitori-net.jp/ec/product/2023190s/', 'グレーウォッシュ', 'ベッド', 97, 85, 211),
(38, 'シングルベッドフレーム引出し付き', 34990, 'https://www.nitori-net.jp/ec/product/2023190s/', 'ライトブラウン', 'ベッド', 97, 85, 211),
(39, 'シングルベッドフレーム引出し付き', 34990, 'https://www.nitori-net.jp/ec/product/2023190s/', 'ミドルブラウン', 'ベッド', 97, 85, 211),
(40, 'シングル 棚コンセント付きチェストベッドフレーム', 21990, 'https://www.nitori-net.jp/ec/product/4968291766059s/', 'ホワイト', 'ベッド', 99, 74, 211),
(41, 'シングル 棚コンセント付きチェストベッドフレーム', 21990, 'https://www.nitori-net.jp/ec/product/4968291766059s/', 'グレー', 'ベッド', 99, 74, 211),
(42, 'シングル 棚コンセント付きチェストベッドフレーム', 21990, 'https://www.nitori-net.jp/ec/product/4968291766059s/', 'ナチュラル', 'ベッド', 99, 74, 211),
(43, 'シングル 棚コンセント付きチェストベッドフレーム', 21990, 'https://www.nitori-net.jp/ec/product/4968291766059s/', 'ブラウン', 'ベッド', 99, 74, 211),
(44, '棚・コンセント付きチェストベッドフレーム', 29990, 'https://www.nitori-net.jp/ec/product/5652690s/', 'ホワイト', 'ベッド', 106, 70, 214),
(45, '棚・コンセント付きチェストベッドフレーム', 29990, 'https://www.nitori-net.jp/ec/product/5652690s/', 'ウォールナット', 'ベッド', 106, 70, 214),
(46, '棚・コンセント付きチェストベッドフレーム', 29990, 'https://www.nitori-net.jp/ec/product/5652690s/', 'オーク', 'ベッド', 106, 70, 214),
(47, '棚・コンセント付きチェストベッドフレーム', 29990, 'https://www.nitori-net.jp/ec/product/5652690s/', 'ダークブラウン', 'ベッド', 106, 70, 214),
(48, '遮光カーテン', 4990, 'https://www.nitori-net.jp/ec/product/7313197/', 'ネイビー', 'カーテン', 100, NULL, 178),
(49, 'アクセントラグ ', 13990, ' https://www.nitori-net.jp/ec/product/7018566s ', 'イエローグリーン', 'ラグ', 200, NULL, 285),
(50, 'ワイヤーシェルフ', 6139, 'https://www.nitori-net.jp/ec/product/2113200002854-1425008791425s', 'ホワイトウォッシュ', '棚', 80, NULL, NULL),
(51, 'セメントポット', 3990, 'https://www.nitori-net.jp/ec/product/8241615s/ ', 'グレー', 'ポット', 51, 60, 47),
(52, 'シングルチェストベッドフレーム ', 39990, 'https://www.nitori-net.jp/ec/product/2049000s', 'ホワイトウォッシュ', 'ベッドフレーム', 98, 85, 200),
(53, '掛け布団カバーシングル ', 1990, 'https://www.nitori-net.jp/ec/product/7526611s/', 'イエローグリーン', '布団カバー', 150, NULL, 210),
(54, '折りたたみパーソナルチェア ', 19990, 'https://www.nitori-net.jp/ec/product/1300406s/', 'アイボリー', '椅子 ', 60, 95, 81),
(55, 'ダイニングチェア', 6392, 'https://www.nitori-net.jp/ec/product/4007014-241210772864o/', 'その他', '椅子 ', 49, 80, 55),
(70, '遮光3級カーテン＆レース 4枚セット(NラセットGY 100X178cmセット)', 4990, 'https://www.nitori-net.jp/ec/product/7313069/', 'グレー', 'カーテン・レースセット', 100, NULL, 178),
(71, '遮光3級カーテン＆レース 4枚セット(NラセットRO 100X178cmセット)', 4990, 'https://www.nitori-net.jp/ec/product/7313278/', 'ローズ', 'カーテン・レースセット', 100, NULL, 178),
(72, '遮光1級カーテン＆レース 4枚セット(NラセットBR 100X178cmセット)', 5990, 'https://www.nitori-net.jp/ec/product/7313096/', 'ブラウン', 'カーテン・レースセット', 100, NULL, 178),
(73, '遮光1級カーテン＆レース 4枚セット(NラセットNV 100X178cmセット)', 5990, 'https://www.nitori-net.jp/ec/product/7313197/', 'ネイビー', 'カーテン・レースセット', 100, NULL, 178),
(74, '遮光カーテン', 4990, 'https://www.nitori-net.jp/ec/product/7313069/', 'ホワイト', 'カーテン', 100, NULL, 178),
(75, '遮光カーテン', 2792, 'https://www.nitori-net.jp/ec/product/7313278/', 'ローズ', 'カーテン', 100, NULL, 178),
(76, '遮光カーテン', 4990, 'https://www.nitori-net.jp/ec/product/7313096/', 'ライトブラウン', 'カーテン', 100, NULL, 178),
(77, '遮光カーテン', 4990, 'https://www.nitori-net.jp/ec/product/7313197/', 'ネイビー', 'カーテン', 100, NULL, 178),
(78, '2枚合わせ毛布　シングル(NウォームWSP)', 4790, 'https://www.nitori-net.jp/ec/product/2115100008134s/', 'グレー', '布団', 140, 200, 4),
(79, '2枚合わせ毛布　シングル(NウォームWSP)', 4790, 'https://www.nitori-net.jp/ec/product/2115100008134s/', 'ダークモカ', '布団', 140, 200, 4),
(80, '2枚合わせ毛布　シングル(NウォームWSP)', 4790, 'https://www.nitori-net.jp/ec/product/2115100008134s/', 'モカ1', '布団', 140, 200, 4),
(81, '2枚合わせ毛布　シングル(NウォームWSP)', 4790, 'https://www.nitori-net.jp/ec/product/2115100008134s/', 'モカ2', '布団', 140, 200, 4),
(82, '2枚合わせ毛布　シングル(NウォームWSP)', 4790, 'https://www.nitori-net.jp/ec/product/2115100008134s/', 'ローズ', '布団', 140, 200, 4),
(83, 'ホワイトダックダウン85% 羽毛布団(ムーンシャンテンN シングル IV)', 7992, 'https://www.nitori-net.jp/ec/product/7545391s/', 'ブラウン', '布団', 150, 210, 10),
(84, 'そのまま使える吸湿発熱掛け布団　シングル(NウォームSP K2312 S)', 14990, 'https://www.nitori-net.jp/ec/product/5652817s/', 'ブラウン', '布団', 150, 210, 10),
(85, 'ホワイトダックダウン85% 羽毛布団(ムーンシャンテンN シングル IV)', 14990, 'https://www.nitori-net.jp/ec/product/5652817s/', 'アイボリー', '布団', 150, 210, 10),
(86, 'そのまま使える温度調整掛け布団　シングル(GY K2306 S)', 7992, 'https://www.nitori-net.jp/ec/product/5652690s/', 'グレー', '布団', 150, 210, NULL),
(87, '温度調整 掛け布団　シングル(CELL 2 S)', 7990, 'https://www.nitori-net.jp/ec/product/7544531s/', 'ホワイト', '布団', 150, 210, NULL),
(2078040, 'シングルベッドフレーム', 26990, 'https://www.nitori-net.jp/ec/product/2076020s/', 'ミドルブラウン', 'ベッド', 98, 85, 200),
(2078050, 'シングルベッドフレーム', 27990, 'https://www.nitori-net.jp/ec/product/2076020s/', 'ライトブラウン', 'ベッド', 98, 85, 200),
(2078060, 'シングルベッドフレーム', 27990, 'https://www.nitori-net.jp/ec/product/2076020s/', 'ホワイトウォッシュ', 'ベッド', 98, 85, 200),
(2078070, 'シングルベッドフレーム', 27990, 'https://www.nitori-net.jp/ec/product/2076020s/', 'ブラック', 'ベッド', 98, 85, 200),
(2190600, 'シングルベッドフレーム', 27990, 'https://www.nitori-net.jp/ec/product/2076020s/', 'グレー', 'ベッド', 98, 85, 200);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2190601;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
