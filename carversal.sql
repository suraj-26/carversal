-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 05:57 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carversal`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `detail` longtext DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `created_by` varchar(45) DEFAULT NULL,
  `created_on` datetime DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL,
  `status` int(11) DEFAULT 1 COMMENT '1:Active,0:Inactive',
  `blog_type` int(11) DEFAULT 3 COMMENT '1:story, 2: slider, 3: Blogs',
  `read_count` int(11) NOT NULL DEFAULT 0,
  `last_read` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `detail`, `image`, `created_by`, `created_on`, `updated_on`, `status`, `blog_type`, `read_count`, `last_read`) VALUES
(1, 'What the Mahindra Bolero Neo and Maruti Alto have in common?', 'It may not seem so, but the Mahindra SUV and Maruti hatchback have a similar story to tell may not seem so, but the Mahindra SUV and Maruti hatchback have a similar story to tell It may not seem so, but the Mahindra SUV and Maruti hatch...', 'carImage-4.png', '1', '2023-01-05 16:58:16', '2023-01-05 12:29:22', 1, 2, 1, '2023-01-05 12:36:56'),
(2, 'Are digital cockpits bad for data privacy?', '<p>It may not seem so, but the Mahindra SUV and Maruti hatchback have a similar story to tell may not seem so, but the Mahindra SUV and Maruti hatchback have a similar story to tell It may not seem so, but the Mahindra SUV and Maruti hatch...\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<br /></p>', 'blackcar-3.png', '1', '2023-01-05 17:01:40', '0000-00-00 00:00:00', 1, 1, 0, '0000-00-00 00:00:00'),
(3, 'Are digital cockpits bad for data privacy?', '<div>It may not seem so, but the Mahindra SUV and Maruti hatchback have a similar story to tell may not seem so, but the Mahindra SUV and Maruti hatchback have a similar story to tell It may not seem so, but the Mahindra SUV and Maruti hatchback have a similar story to tell.....\r\n\r\n\r\n\r\n\r\n\r\n<br /></div>', 'redcar-2.png', '1', '2023-01-05 17:02:43', '0000-00-00 00:00:00', 1, 1, 0, '0000-00-00 00:00:00'),
(4, 'Are digital cockpits bad for data privacy?', '<div>It may not seem so, but the Mahindra SUV and Maruti hatchback have a similar story to tell may not seem so, but the Mahindra SUV and Maruti hatchback have a similar story to tell It may not seem so, but the Mahindra SUV and Maruti hatchback have a similar story to tell.....\r\n\r\n\r\n\r\n\r\n\r\n<br /></div>', 'carImage-5.png', '1', '2023-01-05 17:03:34', '0000-00-00 00:00:00', 1, 1, 0, '0000-00-00 00:00:00'),
(5, 'Are digital cockpits bad for data privacy?', '<div>It may not seem so, but the Mahindra SUV and Maruti hatchback have a similar story to tell may not seem so, but the Mahindra SUV and Maruti hatchback have a similar story to tell It may not seem so, but the Mahindra SUV and Maruti hatchback have a similar story to tell.....\r\n\r\n\r\n\r\n\r\n\r\n<br /></div>', 'carImage-10.png', '1', '2023-01-05 17:04:41', '0000-00-00 00:00:00', 1, 3, 3, '2023-01-07 12:14:15'),
(6, 'Are digital cockpits bad for data privacy?', '<div>It may not seem so, but the Mahindra SUV and Maruti hatchback have a similar story to tell may not seem so, but the Mahindra SUV and Maruti hatchback have a similar story to tell It may not seem so, but the Mahindra SUV and Maruti hatchback have a similar story to tell.....\r\n\r\n\r\n\r\n\r\n\r\n<br /></div>', 'carImage-11.png', '1', '2023-01-05 17:05:15', '0000-00-00 00:00:00', 1, 3, 1, '2023-01-05 12:37:10'),
(7, 'Are digital cockpits bad for data privacy?', '<div>It may not seem so, but the Mahindra SUV and Maruti hatchback have a similar story to tell may not seem so, but the Mahindra SUV and Maruti hatchback have a similar story to tell It may not seem so, but the Mahindra SUV and Maruti hatchback have a similar story to tell.....\r\n\r\n\r\n\r\n\r\n\r\n<br /></div>', 'carImage-13.png', '1', '2023-01-05 17:05:48', '0000-00-00 00:00:00', 1, 3, 2, '2023-01-07 12:18:52'),
(8, 'Are digital cockpits bad for data privacy?', '<div>It may not seem so, but the Mahindra SUV and Maruti hatchback have a similar story to tell may not seem so, but the Mahindra SUV and Maruti hatchback have a similar story to tell It may not seem so, but the Mahindra SUV and Maruti hatchback have a similar story to tell.....\r\n\r\n\r\n\r\n\r\n\r\n<br /></div>', 'carImage-8.png', '1', '2023-01-05 17:11:27', '0000-00-00 00:00:00', 1, 3, 0, '0000-00-00 00:00:00'),
(9, 'Are digital cockpits bad for data privacy?', '<div>It may not seem so, but the Mahindra SUV and Maruti hatchback have a similar story to tell may not seem so, but the Mahindra SUV and Maruti hatchback have a similar story to tell It may not seem so, but the Mahindra SUV and Maruti hatchback have a similar story to tell.....\r\n\r\n\r\n\r\n\r\n\r\n<br /></div>', 'carImage-9.png', '1', '2023-01-05 17:12:04', '0000-00-00 00:00:00', 1, 3, 0, '0000-00-00 00:00:00'),
(10, 'Are digital cockpits bad for data privacy?', '<div>It may not seem so, but the Mahindra SUV and Maruti hatchback have a similar story to tell may not seem so, but the Mahindra SUV and Maruti hatchback have a similar story to tell It may not seem so, but the Mahindra SUV and Maruti hatchback have a similar story to tell.....\r\n\r\n\r\n\r\n\r\n\r\n<br /></div>', 'blackcar-31_(2).png', '1', '2023-01-05 17:33:51', '0000-00-00 00:00:00', 1, 3, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `message`, `created_on`) VALUES
(1, 'User 01', 'user@gmail.com', 'This is a Test Message', '2023-01-05 15:24:00'),
(2, 'User 02', 'user2@gmail.com', 'This is another Test Message', '2023-01-05 15:24:43');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT 1 COMMENT '1: Active, 0: Inactive',
  `created_on` datetime DEFAULT current_timestamp(),
  `type` int(11) NOT NULL COMMENT '1: Admin , 2:Users'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `username`, `email`, `password`, `status`, `created_on`, `type`) VALUES
(1, 'admin', 'admin@carversal.in', '123456', 1, '2022-12-27 12:04:08', 1),
(2, 'User 1', 'user@gmail.com', '123', 1, '2023-01-05 13:54:38', 2),
(4, 'user2', 'user2@gmail.com', '123', 1, '2023-01-05 10:45:24', 2),
(5, 'vishal', 'vishal@gbtech.in', '123456', 1, '2023-01-07 09:34:29', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_fav`
--

CREATE TABLE `user_fav` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_fav`
--

INSERT INTO `user_fav` (`id`, `user_id`, `blog_id`) VALUES
(2, 2, 2),
(3, 2, 19),
(4, 2, 16),
(6, 2, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_fav`
--
ALTER TABLE `user_fav`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_fav`
--
ALTER TABLE `user_fav`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
