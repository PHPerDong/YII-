-- --------------------------------------------------------
-- 主机:                           127.0.0.1
-- 服务器版本:                        5.6.12-log - MySQL Community Server (GPL)
-- 服务器操作系统:                      Win64
-- HeidiSQL 版本:                  9.2.0.4949
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 导出 demo 的数据库结构
CREATE DATABASE IF NOT EXISTS `demo` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `demo`;


-- 导出  表 demo.admin 结构
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(50) NOT NULL,
  `addtime` int(11) NOT NULL,
  `endtime` int(11) NOT NULL,
  `ip` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 正在导出表  demo.admin 的数据：~1 rows (大约)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `username`, `password`, `addtime`, `endtime`, `ip`) VALUES
	(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, 0, '');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;


-- 导出  表 demo.article 结构
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `titlepic` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL COMMENT '栏目',
  `content` text,
  `keywords` varchar(50) NOT NULL,
  `describe` text NOT NULL,
  `tags` varchar(50) NOT NULL DEFAULT '标签',
  `addtime` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- 正在导出表  demo.article 的数据：~3 rows (大约)
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` (`id`, `title`, `titlepic`, `pid`, `content`, `keywords`, `describe`, `tags`, `addtime`) VALUES
	(5, '不后悔退给他', '/Uploads/image/20160603/1464946480496328.jpg', 16, '<p>别不服不服</p>', '百分比', '不发不发吧', '百分比', '1465194992'),
	(6, '好好', '/Uploads/image/20160603/1464946480496328.jpg', 21, '<p>班干部发给部分不敢不敢放不给不给吧</p>', '图书', '1111111', '12121', '1465195987'),
	(7, '发给v发v发', '/Uploads/image/20160603/1464946480496328.jpg', 20, '<p>3333333333333333</p>', '发发', '发发', 'v发v', '1465197710');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;


-- 导出  表 demo.category 结构
CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- 正在导出表  demo.category 的数据：~7 rows (大约)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`cid`, `name`) VALUES
	(16, '的发v的v的v的v的'),
	(17, '吃的是草的从'),
	(18, 'GV个人个人如果如果'),
	(19, '广告贴人个人个人'),
	(20, '沟通过个人个人'),
	(21, '个人个人个人');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;


-- 导出  表 demo.customer 结构
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 正在导出表  demo.customer 的数据：~0 rows (大约)
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` (`id`, `price`, `uid`) VALUES
	(1, 10, 1);
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
