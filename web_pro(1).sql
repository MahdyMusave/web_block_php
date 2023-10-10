-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 10, 2023 at 10:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_me`
--

CREATE TABLE `about_me` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `img` varchar(150) NOT NULL,
  `about` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_me`
--

INSERT INTO `about_me` (`id`, `username`, `img`, `about`) VALUES
(1, 'musave@gmail.com', '', 'من خیل دوست دارم شما ها را ببینممن خیل دوست دارم شما ها را ببینم ');

-- --------------------------------------------------------

--
-- Table structure for table `contains`
--

CREATE TABLE `contains` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contains`
--

INSERT INTO `contains` (`id`, `name`) VALUES
(1, 'خلاقت'),
(2, 'زندگی'),
(3, 'آموزش'),
(4, 'خانواده'),
(5, 'دنیا'),
(6, 'عاشقانه'),
(7, 'رایانه'),
(8, 'گامپیوتر'),
(9, 'شهر'),
(10, 'روستا'),
(11, 'اس ام اس'),
(12, 'شعر');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `post` text NOT NULL,
  `title` varchar(150) NOT NULL,
  `content_id` int(11) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `role` varchar(50) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `post`, `title`, `content_id`, `time`, `date`, `role`, `tag_id`, `username`) VALUES
(1, 'آسان جان طلبــم و از پـی جـانان بــــروم گـر چــه دانم که بــه جایی نبـرد راه غریب مـن به بوی ســـر ان زلف پریشان بـــروم دلــم از وحشت زندان سکـندر بگـــرفت رخت بربندم و تا ملک سلیمان بروم چون صبا با تن بیمار و دل بـی‌طاقت بـــه هـــــواداری ان سرو خرامان بـــروم در ره او چــــو قلـم گـــر به سرم باید رفت بـا دل زخـــم کـــش و دیـده گـریان بــروم نـذر کـردم گـر از این غـــم به درآیــم روزی تا در میکده شادان و غـزل خــــوان بـــــروم ', 'live', 1, '14:02:21', '2023-10-10', 'admin', 1, 'musave@gmail.com'),
(2, 'omid is here', 'omid', 5, '12:21:00', '2023-10-10', 'admin', 3, 'musave@gmail.com'),
(3, 'omid is here', 'omid', 2, '12:21:00', '2023-10-10', 'admin', 5, 'musave@gmail.com'),
(4, 'nima is here', 'nima', 8, '12:24:00', '2023-10-10', 'admin', 9, 'musave@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `tag_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag_name`) VALUES
(1, 'ادبیات'),
(2, 'داستان'),
(3, 'زندگی'),
(4, 'زیبا'),
(5, 'شگفت انگیز');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `username`, `phone`, `password`) VALUES
(48, 'mahdy', 'musave', 'musave@gmail.com', 'musave@gmail.com', '894739847', 'm,djksdk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_me`
--
ALTER TABLE `about_me`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contains`
--
ALTER TABLE `contains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_me`
--
ALTER TABLE `about_me`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contains`
--
ALTER TABLE `contains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
