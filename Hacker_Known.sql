-- phpMyAdmin SQL Dump
-- version 3.5.8.1deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 11 月 15 日 09:27
-- 服务器版本: 5.5.34-0ubuntu0.13.04.1
-- PHP 版本: 5.4.9-4ubuntu2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `Hacker_Known`
--

-- --------------------------------------------------------

--
-- 表的结构 `CT_Job_State`
--

CREATE TABLE IF NOT EXISTS `CT_Job_State` (
  `SID` int(33) NOT NULL AUTO_INCREMENT,
  `Job_State` varchar(40) NOT NULL,
  PRIMARY KEY (`SID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `CT_Job_Title`
--

CREATE TABLE IF NOT EXISTS `CT_Job_Title` (
  `TID` int(33) unsigned NOT NULL,
  `Job_Title` varchar(66) NOT NULL,
  PRIMARY KEY (`TID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `CT_Point`
--

CREATE TABLE IF NOT EXISTS `CT_Point` (
  `Points` varchar(33) NOT NULL,
  `Degree` int(33) NOT NULL,
  PRIMARY KEY (`Points`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `CT_Special_Sector`
--

CREATE TABLE IF NOT EXISTS `CT_Special_Sector` (
  `SID` int(33) unsigned NOT NULL DEFAULT '0',
  `Special_Sector` varchar(66) NOT NULL,
  PRIMARY KEY (`SID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `CT_Tech_Sector`
--

CREATE TABLE IF NOT EXISTS `CT_Tech_Sector` (
  `TID` int(33) unsigned NOT NULL DEFAULT '0',
  `Tech_Sector` varchar(44) NOT NULL,
  PRIMARY KEY (`TID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `CT_Work_Years`
--

CREATE TABLE IF NOT EXISTS `CT_Work_Years` (
  `YID` int(66) NOT NULL AUTO_INCREMENT,
  `Work_Years` date NOT NULL,
  PRIMARY KEY (`YID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `HK_MD5_LOCAL`
--

CREATE TABLE IF NOT EXISTS `HK_MD5_LOCAL` (
  `MID` int(66) unsigned NOT NULL AUTO_INCREMENT,
  `PlainText` varchar(200) NOT NULL,
  `16_CipherText` varchar(22) NOT NULL,
  `32_CipherText` varchar(39) NOT NULL,
  PRIMARY KEY (`MID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `HK_MD5_UPDATE`
--

CREATE TABLE IF NOT EXISTS `HK_MD5_UPDATE` (
  `MID` int(40) unsigned NOT NULL AUTO_INCREMENT,
  `UID` int(22) unsigned NOT NULL,
  `PlainText` text NOT NULL,
  `16_CipherText` int(17) NOT NULL,
  `32_CipherText` varchar(39) NOT NULL,
  PRIMARY KEY (`MID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `HK_User_Cont`
--

CREATE TABLE IF NOT EXISTS `HK_User_Cont` (
  `UID` int(22) unsigned NOT NULL AUTO_INCREMENT,
  `Email` varchar(22) NOT NULL,
  `Phone` varchar(22) NOT NULL,
  `QQ` varchar(22) NOT NULL,
  `Website` text NOT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `HK_User_Info`
--

CREATE TABLE IF NOT EXISTS `HK_User_Info` (
  `UID` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `Photo` varchar(20) NOT NULL,
  `NickName` varchar(22) NOT NULL,
  `Email` varchar(22) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Sex` int(1) NOT NULL,
  `Birthday` date NOT NULL,
  `Area` text NOT NULL,
  `Signature` text NOT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `HK_User_Info`
--

INSERT INTO `HK_User_Info` (`UID`, `Photo`, `NickName`, `Email`, `Password`, `Sex`, `Birthday`, `Area`, `Signature`) VALUES
(1, '/var/www', 'x', '964697423@qq.com', '4297f44b13955235245b2497399d7a93', 1, '2013-11-07', 'neijiangshi', 'just f4ck'),
(2, 'SDGDFG', 'y', 'DFGDFG', '4297f44b13955235245b2497399d7a93', 2, '2013-11-18', 'SDGFDGDF', 'DSFGFDG'),
(13, '', '21', '21', '3c59dc048e8850243be8079a5c74d079', 1, '0000-00-00', '', ''),
(14, '', '1', '123', 'c4ca4238a0b923820dcc509a6f75849b', 1, '0000-00-00', '', ''),
(15, '', '1', '123', 'c4ca4238a0b923820dcc509a6f75849b', 1, '0000-00-00', '', ''),
(16, '', '1', '212', 'c4ca4238a0b923820dcc509a6f75849b', 1, '0000-00-00', '', ''),
(17, '', 'r1', '123123123123', 'c4ca4238a0b923820dcc509a6f75849b', 1, '0000-00-00', '', ''),
(18, '', '1', '1', 'c4ca4238a0b923820dcc509a6f75849b', 1, '0000-00-00', '', ''),
(19, '', '2', '2', 'c81e728d9d4c2f636f067f89cc14862c', 1, '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `HK_User_Job`
--

CREATE TABLE IF NOT EXISTS `HK_User_Job` (
  `UID` int(22) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `Job_State` text NOT NULL,
  `Work_Years` int(10) unsigned NOT NULL,
  `Company` text NOT NULL,
  `Job_Title` varchar(22) NOT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `HK_User_Point`
--

CREATE TABLE IF NOT EXISTS `HK_User_Point` (
  `UID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Point` varchar(33) NOT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `HK_User_Tech`
--

CREATE TABLE IF NOT EXISTS `HK_User_Tech` (
  `UID` int(22) unsigned NOT NULL AUTO_INCREMENT,
  `Tech_Sector` text NOT NULL,
  `Special_Sector` text NOT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
