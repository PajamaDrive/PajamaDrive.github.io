-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- ホスト: 127.0.0.1
-- 生成日時: 2016 年 2 朁E24 日 19:28
-- サーバのバージョン: 5.6.11
-- PHP のバージョン: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `phpdb`
--
CREATE DATABASE IF NOT EXISTS `phpdb` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `phpdb`;

-- --------------------------------------------------------

--
-- テーブルの構造 `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8_unicode_ci,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- テーブルのデータのダンプ `articles`
--

INSERT INTO `articles` (`id`, `title`, `detail`, `created`) VALUES
(1, 'タイトル', '本文', '2015-01-02 13:40:15'),
(2, 'aaaa', 'aaaaa', NULL),
(4, 'abcd', 'aaa', NULL),
(6, 'q', 'q', '2015-12-03 03:20:35'),
(7, 'a', 'aaaaaa', '2015-12-03 03:20:47'),
(8, 'cdcdcd', 'good', '2015-12-03 03:21:13'),
(9, 'sasasas', 'aaaasss', '2015-12-03 03:28:34');

-- --------------------------------------------------------

--
-- テーブルの構造 `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8_unicode_ci,
  `article_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- テーブルのデータのダンプ `comments`
--

INSERT INTO `comments` (`no`, `name`, `comment`, `article_id`, `created`) VALUES
(1, 'ままま', 'みみみ', 3, NULL),
(2, 'ままま', 'みみみ', 4, '2011-12-20 13:13:13'),
(3, NULL, 'aaaa', 10, '2015-12-10 03:21:53'),
(4, 'aaaa', 'cdcdc', 10, '2015-12-10 03:23:45'),
(5, 'bcc', 'good', 9, '2015-12-10 11:28:36'),
(6, 'dssd', 'gggg', 10, '2015-12-10 11:32:47');

-- --------------------------------------------------------

--
-- テーブルの構造 `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL,
  `kanji_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kana_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hint` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `group1` int(11) NOT NULL,
  `group2` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `members`
--

INSERT INTO `members` (`id`, `kanji_name`, `kana_name`, `hint`, `group1`, `group2`) VALUES
(1, '宮澤佐江', 'みやざわさえ', 'ゲンキング', 6, 2),
(2, '横山由依', 'よこやまゆい', 'ニローニ', 1, NULL),
(3, '北原里英', 'きたはらりえ', 'ウナギイヌ', 5, NULL),
(4, '指原莉乃', 'さしはらりの', '345', 4, NULL),
(5, '渡辺麻友', 'わたなべまゆ', 'おしりシスターズ', 1, NULL),
(6, '柏木由紀', 'かしわぎゆき', 'ブラック', 1, NULL),
(7, '白間美瑠', 'しろまみる', 'みるの？みないの？どっちかな？', 3, 1),
(8, '宮脇咲良', 'みやわきさくら', '桜島！！', 4, 1),
(9, '大島優子', 'おおしまゆうこ', 'たかみな具合悪いんだからふざけんじゃねえぞ！', 8, NULL),
(10, '高橋みなみ', 'たかはしみなみ', '努力は必ず報われる', 1, NULL),
(11, '生田絵梨花', 'いくたえりか', 'からあげ姉妹', 10, NULL),
(12, '白石麻衣', 'しらいしまい', 'うまズキッ！', 10, NULL),
(13, '岡田栞奈', 'おかだかんな', '青い鳥になりたい', 4, NULL),
(14, '近野莉菜', 'ちかのりな', 'もーもーめー', 7, NULL),
(15, '鈴木まりや', 'すずきまりや', '3時のおやつ', 6, 1),
(16, '高山一美', 'たかやまかずみ', 'くりぃむクイズミラクル9', 10, NULL),
(17, '松井珠理奈', 'まついじゅりな', '親父ギャグ大好き', 2, NULL),
(18, '前田敦子', 'まえだあつこ', 'うわにゃんにゃんいんじゃんもうダメだ', 8, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=112 ;

--
-- テーブルのデータのダンプ `messages`
--

INSERT INTO `messages` (`no`, `name`, `message`, `created`) VALUES
(1, '宮澤佐江', 'ゲンキング', '2011-01-02 12:00:00'),
(2, '横山由依', 'ホンマヤン', '2015-11-19 11:58:50'),
(94, '宮澤佐江', '陽気、無邪気、元気！○○歳の宮澤佐江です。', '2015-11-23 21:55:26'),
(95, 'ｔｔｔｔ', 'ｔｔｔｔ', '2015-11-23 18:38:34'),
(96, 'ppp', 'aa', '2015-11-23 20:26:24'),
(100, 'fre', 'dddaaarrr', '2015-11-23 20:25:26'),
(101, 'aaaa', 'gtgtgt', '2015-11-23 20:25:48'),
(103, 'aa', 'あいうえお', '2015-11-25 01:48:59'),
(104, '8888', 'AKB', '2015-11-25 01:50:12'),
(105, '9999', '777', '2015-11-25 01:50:42'),
(106, 'aaaaa', 'ssss', '2015-11-24 00:45:49'),
(108, 'ssss', 'abcde', '2015-11-25 01:47:55'),
(109, '99999', 'sssss', '2015-11-23 23:12:45'),
(110, 'ｒｒｒ', 'ああああ', '2015-11-23 23:18:58'),
(111, 'aaa', '涙サプライズ！', '2015-11-26 10:51:12');

-- --------------------------------------------------------

--
-- テーブルの構造 `musics`
--

CREATE TABLE IF NOT EXISTS `musics` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `hint` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `group_name` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `musics`
--

INSERT INTO `musics` (`id`, `title`, `hint`, `group_name`, `type`) VALUES
(1, 'ヘビーローテーション', '大島優子初センターシングル', 1, 1),
(2, '大声ダイヤモンド', '松井珠理奈初センターシングル', 1, 1),
(3, '1!2!3!4!ヨロシク!', 'クリスマス　バレンタインデー　誕生日', 2, 1),
(4, 'スキ!スキ!スキップ!', 'HKT48 1stシングル', 4, 1),
(5, 'カモネギックス', '鴨葱', 3, 1),
(8, 'After rain', 'DOCUMENTARY of AKB48 主題歌', 1, 3),

(10, '消せない炎', '炎よ未来を照らしてくれ', 2, 2),
(12, '奇跡は間に合わない', 'AKBグループリクアワ2016第1位', 1, 4),
(13, '大スキ+大キライ=大好き!', '歌唱メンバー：さえうめ', 9, 3),
(14, 'ときめきアンティーク', '痩せた豚と金のおまる', 9, 1),
(15, 'オキドキ', 'SKE48　7thシングル', 2, 1),
(17, '夏のFree&Easy', '夏だからやっちゃおう！', 5, 1),
(18, 'イビサガール', '真夏日はキスをしよう', 3, 3),
(20, '12秒', 'コールは「よっ！」', 4, 1),
(21, '孤独なランナー', 'リクアワ2012第3位', 9, 2),
(23, 'ダンケシェーン', 'やっぱ乃木坂だな～！', 5, 2),
(24, '恋のお縄', '親方！てぇへんだ！', 9, 1),
(25, '唇 触れず...', '君を君を君を君を君を傷つけない', 9, 1),
(26, 'コスモスの記憶', '晴れ渡る秋の空', 2, 2),
(27, 'チューしようぜ!', 'AKBアイドリング!!!', 9, 1),
(28, '何度も狙え!', '奇跡に期待しちゃ馬鹿を見るよ', 3, 4),
(30, '遠くにいても', 'NMBのコンサートのタイトルの一部にもなっている', 2, 4),

(34, 'ごめんね ジュエル', '離さない離さない', 1, 4),
(35, 'Blue rose', 'AKB歌劇団の核となっている楽曲', 1, 4),
(36, '君はペガサス', 'AKB歌劇団の核となっている楽曲', 1, 4),
(37, '愛の色', 'プリズムは可視光線', 1, 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
