-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2020 at 04:20 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bemundip`
--

-- --------------------------------------------------------

--
-- Table structure for table `aspirasi`
--

CREATE TABLE `aspirasi` (
  `id_aspirasi` int(11) NOT NULL,
  `name` varchar(99) DEFAULT NULL,
  `aspirasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aspirasi`
--

INSERT INTO `aspirasi` (`id_aspirasi`, `name`, `aspirasi`) VALUES
(4, '', 'sadasdasdasdasdasd');

-- --------------------------------------------------------

--
-- Table structure for table `buletin`
--

CREATE TABLE `buletin` (
  `id` int(10) NOT NULL,
  `title` varchar(99) NOT NULL,
  `slug_title` varchar(128) NOT NULL,
  `thumbnail` varchar(40) NOT NULL,
  `content` text NOT NULL,
  `status` varchar(3) NOT NULL DEFAULT 'no',
  `user_id` int(10) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_uploaded` datetime NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buletin`
--

INSERT INTO `buletin` (`id`, `title`, `slug_title`, `thumbnail`, `content`, `status`, `user_id`, `date_created`, `date_uploaded`, `date_updated`) VALUES
(2, 'Tendou', 'tendou', '5f60b9da4bf27.png', '<p>asdasdasdsad</p>', 'no', 1, '2020-09-15 19:55:54', '0000-00-00 00:00:00', '2020-09-15 19:55:54'),
(3, 'Tendou11111', 'tendou11111', '5f60bb1217309.png', '<p>sadasdasdasdasd</p>', 'no', 1, '2020-09-15 20:01:06', '0000-00-00 00:00:00', '2020-09-15 20:01:06'),
(4, 'Yuri1', 'yuri1', '5f60bd55ccd1e.png', '<p>sadasdadasas</p>', 'no', 1, '2020-09-15 20:10:46', '0000-00-00 00:00:00', '2020-09-15 20:10:46'),
(5, 'Tendou111', 'tendou111', '5f60c2b0e2ba9.png', '<p>464654564564</p>', 'no', 1, '2020-09-15 20:33:37', '0000-00-00 00:00:00', '2020-09-15 20:59:25');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'asdasdasd'),
(2, 'Tech');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(10) NOT NULL,
  `title` varchar(99) NOT NULL,
  `kategori` varchar(99) NOT NULL,
  `slug_title` varchar(128) NOT NULL,
  `thumbnail` varchar(40) CHARACTER SET latin1 NOT NULL,
  `content` text NOT NULL,
  `status` varchar(3) NOT NULL DEFAULT 'no',
  `user_id` int(10) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_uploaded` datetime NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `kategori`, `slug_title`, `thumbnail`, `content`, `status`, `user_id`, `date_created`, `date_uploaded`, `date_updated`) VALUES
(2, 'Tendou2', '1', 'tendou2', '5f607d38d889f.png', '', 'yes', 1, '2020-09-15 15:37:13', '2020-09-15 15:40:59', '2020-09-15 15:37:13'),
(3, 'saaaaa', '1', 'saaaaa', '5f607d905991e.png', '<p>asdasdasdasdasd</p>', 'yes', 1, '2020-09-15 15:38:40', '2020-09-15 15:40:56', '2020-09-15 15:38:40'),
(6, 'Tendou', '2', 'tendou', '5f60bb2b8cf6b.png', '<p>asdasdas</p>', 'no', 1, '2020-09-15 20:01:31', '0000-00-00 00:00:00', '2020-09-15 20:01:31');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_password` varchar(40) NOT NULL,
  `user_level` varchar(3) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `name`, `user_password`, `user_level`, `last_login`) VALUES
(1, 'haikal', 'Haikal Rahmadi', 'haikal', '1', '2020-09-15 07:56:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aspirasi`
--
ALTER TABLE `aspirasi`
  ADD PRIMARY KEY (`id_aspirasi`);

--
-- Indexes for table `buletin`
--
ALTER TABLE `buletin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aspirasi`
--
ALTER TABLE `aspirasi`
  MODIFY `id_aspirasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `buletin`
--
ALTER TABLE `buletin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
