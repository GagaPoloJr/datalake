-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2020 at 11:48 AM
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
(3, 'Life');

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
(53, 'tes slug titlew', '', 'tes-slug-titlew', '4c91631cb35908b8b2bc64240b96477a.png', '<p>ccccccc</p>', 'yes', 1, '2020-08-24 18:31:11', '0000-00-00 00:00:00', '2020-08-24 18:31:11'),
(54, 'fghf', '', 'fghf', 'bd10a90a990810f589265e7a51885782.jpg', '<p xss=removed>asdasdas<span xss=removed>Biasanya artikel ini bertebaran dimedia manapun, dan pada umumnya artikel ini seringkali dijumpai di website ataupun blog.</span></p><p xss=removed>Artikel ini berisikan tentang infomasi tertentu, contohnya adalah semisal pada bahasan didalam artikel ini tentang <a href=\"https://www.cryptowi.com/contoh-artikel/\" xss=removed><span xss=removed>contoh artikel</span></a>, maka isinyapun informasi terkait contoh-contoh artikel itu sendiri.</p><p xss=removed>Ada beberapa macam ragam jenis artikel, seperti halnya dengan artikel ilmiah, pendidikan, populer, kesehatan hingga artikel yang membahas tentang penelitian, dan tentunya masih banyak lagi terkait jenis-jenis artikel yang lainnya.</p><p xss=removed>Sebelum masuk kepembahasan terkait contoh artikel, alangkah baiknya untuk Anda simak dahulu mengenai pengertian artikel dan ciri-ciri artikel itu sendiri.</p><p xss=removed><br></p><p xss=removed>Biasanya artikel ini bertebaran dimedia manapun, dan pada umumnya artikel ini seringkali dijumpai di website ataupun blog.</p><p xss=removed>Artikel ini berisikan tentang infomasi tertentu, contohnya adalah semisal pada bahasan didalam artikel ini tentang <a href=\"https://www.cryptowi.com/contoh-artikel/\" xss=removed><span xss=removed>contoh artikel</span></a>, maka isinyapun informasi terkait contoh-contoh artikel itu sendiri.</p><p xss=removed>Ada beberapa macam ragam jenis artikel, seperti halnya dengan artikel ilmiah, pendidikan, populer, kesehatan hingga artikel yang membahas tentang penelitian, dan tentunya masih banyak lagi terkait jenis-jenis artikel yang lainnya.</p><p xss=removed>Sebelum masuk kepembahasan terkait contoh artikel, alangkah baiknya untuk Anda simak dahulu mengenai pengertian artikel dan ciri-ciri artikel itu sendiri.</p><p xss=removed><br></p><p xss=removed>Biasanya artikel ini bertebaran dimedia manapun, dan pada umumnya artikel ini seringkali dijumpai di website ataupun blog.</p><p xss=removed>Artikel ini berisikan tentang infomasi tertentu, contohnya adalah semisal pada bahasan didalam artikel ini tentang <a href=\"https://www.cryptowi.com/contoh-artikel/\" xss=removed><span xss=removed>contoh artikel</span></a>, maka isinyapun informasi terkait contoh-contoh artikel itu sendiri.</p><p xss=removed>Ada beberapa macam ragam jenis artikel, seperti halnya dengan artikel ilmiah, pendidikan, populer, kesehatan hingga artikel yang membahas tentang penelitian, dan tentunya masih banyak lagi terkait jenis-jenis artikel yang lainnya.</p><p xss=removed>Sebelum masuk kepembahasan terkait contoh artikel, alangkah baiknya untuk Anda simak dahulu mengenai pengertian artikel dan ciri-ciri artikel itu sendiri.</p><p xss=removed><br></p><p xss=removed>Biasanya artikel ini bertebaran dimedia manapun, dan pada umumnya artikel ini seringkali dijumpai di website ataupun blog.</p><p xss=removed>Artikel ini berisikan tentang infomasi tertentu, contohnya adalah semisal pada bahasan didalam artikel ini tentang <a href=\"https://www.cryptowi.com/contoh-artikel/\" xss=removed><span xss=removed>contoh artikel</span></a>, maka isinyapun informasi terkait contoh-contoh artikel itu sendiri.</p><p xss=removed>Ada beberapa macam ragam jenis artikel, seperti halnya dengan artikel ilmiah, pendidikan, populer, kesehatan hingga artikel yang membahas tentang penelitian, dan tentunya masih banyak lagi terkait jenis-jenis artikel yang lainnya.</p><p xss=removed>Sebelum masuk kepembahasan terkait contoh artikel, alangkah baiknya untuk Anda simak dahulu mengenai pengertian artikel dan ciri-ciri artikel itu sendiri.</p><p xss=removed><font color=\"#222222\" face=\"-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen-Sans, Ubuntu, Cantarell, Helvetica Neue, sans-serif\"><span xss=removed><img src=\"http://localhost/bemundip/assets/images/123121.png\" xss=removed class=\"\"></span></font><div xss=removed><font color=\"#222222\" face=\"-apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen-Sans, Ubuntu, Cantarell, Helvetica Neue, sans-serif\"><span xss=removed><br></span></font></div></p>', 'yes', 1, '2020-08-24 20:28:59', '0000-00-00 00:00:00', '2020-08-24 20:28:59');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_password` varchar(40) NOT NULL,
  `user_level` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `name`, `user_password`, `user_level`) VALUES
(1, 'haikal', 'Haikal Rahmadi', 'haikal', '1'),
(2, 'ricky', 'ricky Tendou', 'ricky', '2'),
(4, 'doni', 'doni anjing', 'doni', '2'),
(5, 'tendou', 'Tendou', 'tendou', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aspirasi`
--
ALTER TABLE `aspirasi`
  ADD PRIMARY KEY (`id_aspirasi`);

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
  MODIFY `id_aspirasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
