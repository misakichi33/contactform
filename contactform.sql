-- phpMyAdmin SQL Dump
-- version 5.1.1-1.el7.remi
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2022 年 2 月 23 日 04:47
-- サーバのバージョン： 5.7.27-log
-- PHP のバージョン: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `s0bc8_contactform`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `contactform`
--

CREATE TABLE `contactform` (
  `name` varchar(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `contactform`
--

INSERT INTO `contactform` (`name`, `email`, `contact`) VALUES
('[value-1]', '[value-2]', '[value-3]'),
('[value-1]', '[value-2]', '[value-3]'),
('[value-1]', '[value-2]', '[value-3]'),
('[value-1]', '[value-2]', '[value-3]'),
('みさきち', '[value-2]', '[value-3]'),
('みさきち', '[value-2]', '[value-3]'),
('道道', '[value-2]', '[value-3]'),
('道道', '[value-2]', '[value-3]'),
('道道', '[value-2]', '[value-3]'),
('みさ', '[value-2]', '[value-3]'),
('みさ', '[value-2]', '[value-3]'),
('星野', '[value-2]', '[value-3]'),
('星野美沙', '[value-2]', '[value-3]'),
('みさきち', '[value-2]', '[value-3]'),
('武藤　みさ', '[value-2]', '[value-3]'),
('武藤みさ', '[value-2]', '[value-3]'),
('みさみさ', 'misakichi_610@misakichisub.pannosuke.com', '受かりたい！'),
('みさきち', 'kaku.iphone7@gmail.com', '届くかな！'),
('みさ星野', 'misakichi_610@misakichisub.pannosuke.com', '届けー！'),
('みさ武藤', 'misakichi_610@misakichisub.pannosuke.com', 'アイウエオ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
