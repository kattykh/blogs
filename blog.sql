-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 28, 2020 at 06:26 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `body` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `body`, `created_at`, `updated_at`) VALUES
(10, 25, 13, 'My Comment', '2027-11-19 23:30:44', NULL),
(3, 25, 13, 'sdsd', NULL, NULL),
(4, 25, 13, 'sdsd', '2027-11-19 18:30:00', NULL),
(5, 25, 13, 'sdsd', '2027-11-19 23:24:47', NULL),
(6, 25, 13, 'ddd', '2027-11-19 23:26:29', NULL),
(7, 25, 13, 'ddd', '2027-11-19 23:26:35', NULL),
(8, 25, 13, 'dd', '2027-11-19 23:28:01', NULL),
(9, 25, 13, 'First Comment', '2027-11-19 23:29:22', NULL),
(11, 25, 13, 'Hello', '2027-11-19 23:31:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `topic_id` (`topic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `image`, `body`, `published`, `created_at`) VALUES
(13, 23, 1, 'One day your life flash before your eyes', '1602917352_8FF.jpg', 'This is a sample post nnhhh', 1, '2020-09-04 20:41:22'),
(14, 23, 3, 'Wedding is simple', '1602917359_24I.jpg', 'sampleand', 1, '2020-09-04 20:44:58'),
(15, 23, 5, 'Updated section', '1602917368_33182_wallpaper280.jpg', 'samp', 1, '2020-09-04 20:45:17'),
(16, 23, 6, 'Fruits', '1602917376_25.jpg', 'addd', 1, '2020-09-04 20:45:33'),
(17, 23, 4, 'Testing', '1602917383_6.JPG', 'dreee', 1, '2020-09-04 20:45:54'),
(18, 23, 1, 'Character', '1602917397_47M.jpg', 'sample oneand1234ghfgg', 1, '2020-09-05 11:21:21');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

DROP TABLE IF EXISTS `replies`;
CREATE TABLE IF NOT EXISTS `replies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `body` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `user_id`, `comment_id`, `body`, `created_at`, `updated_at`) VALUES
(3, 25, 11, 'Replay to comment', '2027-11-19 23:52:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

DROP TABLE IF EXISTS `topics`;
CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`) VALUES
(1, 'Life', 'test hhhhjhg'),
(3, 'Quotes', 'data'),
(4, 'Fiction', 'data'),
(5, 'Biography', 'data'),
(6, 'Motivation', 'data'),
(7, 'Inspiration', 'GKLKK'),
(8, 'abi', 'sda');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created_at`) VALUES
(22, 1, 'John Carter', 'jc9787@ja.com', '$2y$10$OeaKJKjAD6zn7tL386Q7ReTjAoTgefuOJ33AeGROuT7Y.2oyjnA2a', '2020-09-05 07:27:44'),
(23, 1, 'Dev', 'dev65@gmail.com', '$2y$10$Nxp839huX9vhBrSPwzjDs.Yeow2adJgyjiBrDIHs8YYDMZNM6VLAW', '2020-09-05 07:40:28'),
(24, 0, 'Jay', 'jaycc@h.com', '$2y$10$1P8Zfa0lbo8q/i9.1LOnuOAp9JHO/JbEEA0UxaHG7DKA9a3JKxr5m', '2020-09-07 15:25:55'),
(25, 1, 'Prashant', 'psv@gmail.com', '$2y$10$WpYuHgOEWm1EEK9nWXZ/0.mRVsaoIQGo.B6X2xrgRl8tWEpyf/iKq', '2020-11-27 04:05:17');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
