-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2014-12-14 20:48:01
-- 服务器版本： 5.6.21-log
-- PHP Version: 5.6.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `noisedatalist`
--

-- --------------------------------------------------------

--
-- 表的结构 `noisedata`
--

CREATE TABLE IF NOT EXISTS `noisedata` (
`DataID` int(10) NOT NULL,
  `NoiseLevel` float NOT NULL,
  `LocationLat` float NOT NULL,
  `LocationLon` float NOT NULL,
  `UserID` varchar(30) NOT NULL,
  `RecordTime` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=189 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `noisedata`
--

INSERT INTO `noisedata` (`DataID`, `NoiseLevel`, `LocationLat`, `LocationLon`, `UserID`, `RecordTime`) VALUES
(1, 70.2, 65.6234, 22.1402, 'chen', '2014-12-08'),
(2, 55.6, 65.2136, 22.1402, 'chen', '2014-12-03'),
(7, 66.3, 65.618, 22.2376, 'chen', '2014-12-04'),
(8, 34.7, 65.3446, 22.1603, 'chen', '2014-12-16'),
(9, 76.2, 65.3456, 22.9543, 'hao', '2014-12-08'),
(10, 34.9, 65.561, 22.9135, 'hao', '2014-12-04'),
(11, 33.8, 65.5985, 22.6791, 'test', '2014-12-02'),
(12, 50.2, 65.6294, 22.7957, 'test', '2014-12-03'),
(13, 81.3, 65.8964, 22.8594, 'test', '2014-12-08'),
(14, 32.6, 65.6939, 22.1385, 'hao', '2014-12-03'),
(15, 48.1, 65.6713, 22.875, 'chen', '2014-12-06'),
(16, 55.1, 65.8913, 22.1875, 'hao', '2014-12-01'),
(17, 51.6, 65.8946, 22.1204, 'hao', '2014-12-05'),
(18, 63.6, 65.5783, 22.1363, 'chen', '2014-12-03'),
(19, 23.7, 65.5663, 22.1543, 'chen', '2014-12-02'),
(20, 39.4, 65.3426, 22.1964, 'chen', '2014-12-03'),
(21, 19.7, 65.5319, 22.0874, 'hao', '2014-12-10'),
(22, 29.1, 65.6432, 22.0974, 'hao', '2014-12-05'),
(23, 52.8, 65.5512, 22.2397, 'test', '2014-12-02'),
(24, 72.7, 65.2861, 22.7493, 'hao', '2014-12-03'),
(25, 77.3, 65.6701, 22.1353, 'hao', '2014-12-03'),
(26, 45.4, 65.3845, 22.1743, 'hao', '2014-12-02'),
(27, 34.6, 65.8343, 22.1195, 'test', '2014-12-02'),
(28, 63.3, 65.6903, 22.1904, 'hao', '2014-12-04'),
(29, 82.5, 65.9841, 22.2075, 'hao', '2014-12-03'),
(30, 34.1, 65.6213, 22.1452, 'chen', '2014-12-02'),
(31, 82.5, 65.5693, 22.1905, 'test', '2014-12-01'),
(32, 34.8, 65.6451, 22.0986, 'hao', '2014-12-03'),
(33, 94.5, 65.6747, 22.1189, 'test', '2014-12-04'),
(34, 43.8, 65.6743, 22.1457, 'hao', '2014-12-02'),
(35, 73.1, 65.5543, 22.1185, 'test', '2014-12-03'),
(36, 70.4, 65.6428, 22.1234, 'hao', '2014-12-04'),
(37, 69.3, 65.6434, 22.1834, 'test', '2014-12-06'),
(38, 65.2, 65.1619, 22.1384, 'hao', '2014-12-09'),
(39, 52.7, 65.5619, 22.139, 'hao', '2014-12-03'),
(40, 49.2, 65.5619, 22.1229, 'hao', '2014-12-03'),
(41, 50.6, 65.1618, 22.1178, 'chen', '2014-12-01'),
(42, 66.3, 65.1618, 22.1744, 'chen', '2014-12-02'),
(43, 54.2, 65.5612, 22.1847, 'hao', '2014-12-07'),
(44, 71.1, 65.1625, 22.1234, 'hao', '2014-12-14'),
(45, 73.2, 65.3423, 22.1875, 'chen', '2014-12-03'),
(46, 41.9, 65.2134, 22.7596, 'test', '2014-12-01'),
(47, 32.5, 65.1623, 22.1994, 'chen', '2014-12-03'),
(48, 74.5, 65.5618, 22.1434, 'hao', '2014-12-02'),
(49, 62.9, 65.5462, 22.1345, 'hao', '2014-12-03'),
(50, 55.9, 65.6618, 22.1455, 'hao', '2014-12-01'),
(51, 82.6, 65.6834, 22.1675, 'hao', '2014-12-05'),
(52, 81.8, 65.5618, 22.1734, 'test', '2014-12-01'),
(53, 65.8, 65.524, 22.1469, 'hao', '2014-12-01'),
(54, 93.6, 65.5612, 22.1194, 'test', '2014-12-08'),
(55, 35.9, 65.5918, 22.1308, 'chen', '2014-12-03'),
(56, 45.4, 65.6618, 22.1973, 'test', '2014-12-03'),
(57, 73.1, 65.6618, 22.1794, 'chen', '2014-12-04'),
(58, 15.3, 65.6012, 22.1799, 'test', '2014-12-03'),
(59, 23.8, 65.3618, 22.1954, 'chen', '2014-12-10'),
(60, 34.6, 65.3974, 22.123, 'chen', '2014-12-03'),
(61, 56.8, 65.6618, 22.1598, 'hao', '2014-12-02'),
(62, 82.4, 65.5318, 22.1342, 'hao', '2014-12-03'),
(63, 60.3, 65.6243, 22.1653, 'hao', '2014-12-06'),
(64, 50.8, 65.6325, 22.1138, 'test', '2014-12-03'),
(65, 40.8, 65.6618, 22.2289, 'test', '2014-12-02'),
(66, 60.3, 65.5788, 22.1543, 'test', '2014-12-05'),
(67, 34.4, 65.5634, 22.1735, 'hao', '2014-12-03'),
(68, 64.6, 65.6032, 22.1231, 'hao', '2014-12-03'),
(69, 34.8, 65.6193, 22.1274, 'hao', '2014-12-16'),
(70, 44.8, 65.6178, 22.1343, 'chen', '2014-12-03'),
(71, 65.6, 65.6034, 22.1184, 'hao', '2014-12-02'),
(72, 71.7, 65.6267, 22.1533, 'hao', '2014-12-02'),
(73, 43.8, 65.6232, 22.1456, 'test', '2014-12-09'),
(74, 77.3, 65.6234, 22.1345, 'chen', '2014-12-05'),
(75, 12.7, 65.6232, 22.1323, 'chen', '2014-12-02'),
(76, 78.6, 65.6234, 22.1243, 'test', '2014-12-07'),
(77, 74.3, 65.6123, 22.1654, 'chen', '2014-12-09'),
(78, 43.1, 65.6124, 22.1279, 'hao', '2014-12-08'),
(79, 67.9, 65.7423, 22.1166, 'test', '2014-12-09'),
(80, 94.1, 65.7834, 22.0947, 'hao', '2014-12-09'),
(81, 66.2, 65.7295, 22.1047, 'test', '2014-12-10'),
(82, 84.7, 65.6245, 22.1435, 'hao', '2014-12-09'),
(83, 56.1, 65.6147, 22.1493, 'hao', '2014-12-05'),
(84, 42.9, 65.5794, 22.1543, 'hao', '2014-12-09'),
(85, 55.3, 65.6498, 22.1966, 'hao', '2014-12-07'),
(86, 34.8, 65.3447, 22.3149, 'hao', '2014-12-05'),
(87, 77.5, 65.0487, 22.4687, 'hao', '2014-12-04'),
(88, 49.8, 65.6183, 22.0376, 'chen', '2014-12-03'),
(89, 87.2, 65.1237, 22.1875, 'chen', '2014-12-08'),
(90, 81.7, 65.8733, 22.149, 'chen', '2014-12-05'),
(91, 32.9, 65.6876, 22.1634, 'chen', '2014-12-03'),
(92, 28.6, 65.1564, 22.5486, 'hao', '2014-12-01'),
(93, 84.1, 65.5906, 22.1434, 'chen', '2014-12-11'),
(94, 73.6, 65.6233, 22.1251, 'hao', '2014-12-07'),
(95, 52.9, 65.5901, 22.1598, 'test', '2014-12-05'),
(96, 76.6, 65.5937, 22.0898, 'chen', '2014-12-09'),
(97, 65.3, 65.6725, 22.1876, 'test', '2014-12-06'),
(98, 43.9, 65.5897, 22.1486, 'test', '2014-12-06'),
(99, 32.9, 65.3987, 22.1675, 'hao', '2014-12-09'),
(100, 69.5, 65.2847, 22.1291, 'chen', '2014-12-06'),
(101, 57.3, 65.6034, 22.1876, 'hao', '2014-12-05'),
(102, 78.4, 65.6179, 22.0857, 'chen', '2014-12-05'),
(103, 56.8, 65.6463, 22.1907, 'chen', '2014-12-04'),
(104, 46.9, 65.6199, 22.0979, 'hao', '2014-12-09'),
(105, 22.7, 65.6141, 22.1775, 'hao', '2014-12-11'),
(107, 56.2, 65.614, 22.1775, 'test', '2014-12-11'),
(108, 23.6, 65.6141, 22.1775, 'hao', '2014-12-11'),
(111, 54.2, 65.6141, 22.1775, 'hao', '2014-12-11'),
(112, 54.2, 65.6141, 22.1775, 'hao', '2014-12-11'),
(120, 54.2, 65.6141, 22.1775, 'hao', '2014-12-11'),
(122, 35.9, 65.614, 22.1775, 'chen', '2014-12-12'),
(126, 35.9, 65.614, 22.1775, 'chen', '2014-12-12'),
(163, 35.9, 65.614, 22.1775, 'chen', '2014-12-12'),
(188, 21.5, 65.6141, 22.1775, 'hao', '2014-12-14');

-- --------------------------------------------------------

--
-- 表的结构 `usersdata`
--

CREATE TABLE IF NOT EXISTS `usersdata` (
  `UserName` varchar(30) NOT NULL DEFAULT '',
  `Password` varchar(20) NOT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `CustomerName` varchar(20) DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `MobilePhone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `usersdata`
--

INSERT INTO `usersdata` (`UserName`, `Password`, `Email`, `CustomerName`, `Birthday`, `MobilePhone`) VALUES
('chen', 'chen', 'chen@123.com', 'Coop', '2014-12-08', '+46 700012345'),
('hao', 'hao', 'hao@123.com', 'ICA', '2014-12-09', '+46 700045678'),
('test', 'test', 'test@t123.com', 'Willys', '2014-12-10', '+46 700098765');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `noisedata`
--
ALTER TABLE `noisedata`
 ADD PRIMARY KEY (`DataID`);

--
-- Indexes for table `usersdata`
--
ALTER TABLE `usersdata`
 ADD PRIMARY KEY (`UserName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `noisedata`
--
ALTER TABLE `noisedata`
MODIFY `DataID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=189;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
