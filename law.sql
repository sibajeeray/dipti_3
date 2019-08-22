-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2019 at 07:37 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `law`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'India Penal Code'),
(5, 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `contents` varchar(1500) NOT NULL,
  `author` varchar(50) NOT NULL,
  `category_id` varchar(4) NOT NULL,
  `attachment_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `contents`, `author`, `category_id`, `attachment_name`) VALUES
(1, 'Demo Post', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis erat ultrices, posuere ipsum quis, mollis felis. Duis eleifend dui id lectus lobortis vulputate. Aliquam commodo odio ac lacus convallis, id cursus diam rhoncus. Duis interdum elit placerat nulla pellentesque lacinia. Vivamus semper augue id mauris cursus, et mollis erat pellentesque. Donec cursus urna dolor, ut efficitur metus rutrum ut. Aenean auctor fermentum turpis, eu imperdiet nulla pretium in. Nunc varius fermentum scelerisque. Integer gravida semper augue semper dignissim. Donec gravida nunc maximus velit faucibus, in porttitor nunc molestie. Quisque eu magna sit amet diam suscipit luctus sed eget felis. Donec lacinia semper luctus. Nulla sodales tortor eu volutpat condimentum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer massa turpis, vehicula eu efficitur at, egestas pulvinar nibh. Sed auctor sem libero, in ullamcorper ipsum eleifend vel. Sed finibus libero eget dui lobortis, vel molestie enim congue. Praesent sed commodo diam, nec tempus tortor. Vivamus laoreet nec sapien sed facilisis. Pellentesque suscipit neque vitae velit elementum, et porta nunc varius. Curabitur finibus, purus at maximus facilisis, justo metus tempus magna, ac lacinia elit dui non nulla. Vivamus interdum ligula auctor suscipit auctor. Nam viverra massa a feugiat maximus.\r\n\r\nEtiam posuere dui vel magna volutpat volutpat. Nunc pretium, neque vel elementum feugiat, lacus libero dictum enim, at vehicula mi', 'Sibajee', '1', 'demo.docx'),
(2, 'Demo Post 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis erat ultrices, posuere ipsum quis, mollis felis. Duis eleifend dui id lectus lobortis vulputate. Aliquam commodo odio ac lacus convallis, id cursus diam rhoncus. Duis interdum elit placerat nulla pellentesque lacinia. Vivamus semper augue id mauris cursus, et mollis erat pellentesque. Donec cursus urna dolor, ut efficitur metus rutrum ut. Aenean auctor fermentum turpis, eu imperdiet nulla pretium in. Nunc varius fermentum scelerisque. Integer gravida semper augue semper dignissim. Donec gravida nunc maximus velit faucibus, in porttitor nunc molestie. Quisque eu magna sit amet diam suscipit luctus sed eget felis. Donec lacinia semper luctus. Nulla sodales tortor eu volutpat condimentum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer massa turpis, vehicula eu efficitur at, egestas pulvinar nibh. Sed auctor sem libero, in ullamcorper ipsum eleifend vel. Sed finibus libero eget dui lobortis, vel molestie enim congue. Praesent sed commodo diam, nec tempus tortor. Vivamus laoreet nec sapien sed facilisis. Pellentesque suscipit neque vitae velit elementum, et porta nunc varius. Curabitur finibus, purus at maximus facilisis, justo metus tempus magna, ac lacinia elit dui non nulla. Vivamus interdum ligula auctor suscipit auctor. Nam viverra massa a feugiat maximus.\r\n\r\nEtiam posuere dui vel magna volutpat volutpat. Nunc pretium, neque vel elementum feugiat, lacus libero dictum enim, at vehicula mi', 'Sibajee 1', '1', 'demo - Copy.docx'),
(3, 'Demo Post 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis erat ultrices, posuere ipsum quis, mollis felis. Duis eleifend dui id lectus lobortis vulputate. Aliquam commodo odio ac lacus convallis, id cursus diam rhoncus. Duis interdum elit placerat nulla pellentesque lacinia. Vivamus semper augue id mauris cursus, et mollis erat pellentesque. Donec cursus urna dolor, ut efficitur metus rutrum ut. Aenean auctor fermentum turpis, eu imperdiet nulla pretium in. Nunc varius fermentum scelerisque. Integer gravida semper augue semper dignissim. Donec gravida nunc maximus velit faucibus, in porttitor nunc molestie. Quisque eu magna sit amet diam suscipit luctus sed eget felis. Donec lacinia semper luctus. Nulla sodales tortor eu volutpat condimentum.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer massa turpis, vehicula eu efficitur at, egestas pulvinar nibh. Sed auctor sem libero, in ullamcorper ipsum eleifend vel. Sed finibus libero eget dui lobortis, vel molestie enim congue. Praesent sed commodo diam, nec tempus tortor. Vivamus laoreet nec sapien sed facilisis. Pellentesque suscipit neque vitae velit elementum, et porta nunc varius. Curabitur finibus, purus at maximus facilisis, justo metus tempus magna, ac lacinia elit dui non nulla. Vivamus interdum ligula auctor suscipit auctor. Nam viverra massa a feugiat maximus.\r\nEtiam posuere dui vel magna volutpat volutpat. Nunc pretium, neque vel elementum feugiat, lacus libero dictum enim, at vehicula mi lec', 'Sibajee 2', '5', 'demo - Copy (2).docx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
