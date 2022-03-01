-- phpMyAdmin SQL Dump
-- version 5.1.1-1.el7.remi
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2022 年 2 月 27 日 13:01
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
  `item` text NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `contact` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `contactform`
--

INSERT INTO `contactform` (`item`, `name`, `email`, `tel`, `contact`) VALUES
('その他', '武藤美沙', 'misakichi_610@misakichisub.pannosuke.com', '07083445177', 'テスト送信！'),
('ご意見', 'むとう　みさ', 'test-test@skillcheck-2.contactform.com', '09012345678', 'テスト送信！'),
('ご感想', 'MUTO MISA', 'test-test@skillcheck-2.contactform.com', '08012345678', 'テスト送信！');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
