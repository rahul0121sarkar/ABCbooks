-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 09:30 AM
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
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookpdfs`
--

CREATE TABLE `bookpdfs` (
  `pid` int(16) NOT NULL,
  `file` varchar(102) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookpdfs`
--

INSERT INTO `bookpdfs` (`pid`, `file`, `created_at`, `updated_at`) VALUES
(7, '1700836402.pdf', '2023-11-24 09:03:22', '2023-11-24 14:33:22'),
(8, '1700836426.pdf', '2023-11-24 09:03:46', '2023-11-24 14:33:46'),
(9, '1700836435.pdf', '2023-11-24 09:03:55', '2023-11-24 14:33:55'),
(10, '1700836468.pdf', '2023-11-24 09:04:28', '2023-11-24 14:34:28'),
(11, '1700836902.pdf', '2023-11-24 09:11:42', '2023-11-24 14:41:42'),
(12, '1700836995.pdf', '2023-11-24 09:13:15', '2023-11-24 14:43:15'),
(13, '1700837046.pdf', '2023-11-24 09:14:06', '2023-11-24 14:44:06'),
(14, '1700837059.pdf', '2023-11-24 09:14:19', '2023-11-24 14:44:19'),
(15, '1700837210.pdf', '2023-11-24 09:16:50', '2023-11-24 14:46:50');

-- --------------------------------------------------------

--
-- Table structure for table `book_details`
--

CREATE TABLE `book_details` (
  `id` int(16) NOT NULL,
  `title` varchar(99) DEFAULT NULL,
  `author_name` varchar(99) DEFAULT NULL,
  `price` varchar(44) DEFAULT NULL,
  `description` varchar(799) DEFAULT NULL,
  `author` varchar(777) DEFAULT NULL,
  `comment` varchar(666) DEFAULT NULL,
  `image` varchar(102) NOT NULL,
  `pid` int(17) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_details`
--

INSERT INTO `book_details` (`id`, `title`, `author_name`, `price`, `description`, `author`, `comment`, `image`, `pid`, `created_at`, `updated_at`) VALUES
(22, 'To have & To hold', 'Molly Millwood', 'Rs.66', 'this book offers invaluable insights into the challenges and joys of modern motherhood and the impact it has on marital relationships. To gain a deeper understanding of this important topic and navigate the intricate dynamics of motherhood and marriage', 'Molly was trained in the scientist-practitioner model of clinical psychology, emerging from graduate school and postdoctoral work with the skills for providing psychotherapy and other clinical services', 'one of the best book in the market to understand the differences between relationships', '1700837518.webp', 14, '2023-11-25 07:35:48', '2023-11-25 07:35:48'),
(23, 'How to win Friends', 'Dale Carnegie', 'Rs.122', 'The teachings of Dale Carnegie are timeless and will assist you in reaching your full potential in this complex and cutthroat era. They are as relevant today as they were when Carnegie first published them.', 'American writer and lecturer, and the developer of courses in self-improvement, salesmanship, corporate training, public speaking, and interpersonal skills. Born into poverty on a farm in Missouri, he was the author of How to Win Friends and Influence People', 'one of the best book in the market about communication', '1700837729.webp', 7, '2023-11-25 07:36:15', '2023-11-25 07:36:15'),
(24, 'Ikigai', 'Héctor García & Francesc Miralles', 'Rs.145', 'this book offers valuable insights into the concept of ikigai and how it can lead to a fulfilling and joyful life. To enhance your personal growth and understanding of this Japanese secret', 'the bestselling author of IKIGAI the Japanese Secret to a Long and Happy Life (with Francesc Miralles), The Magic of Japan, Ichigo Ichie, A geek in Japan, and other books. I write about Japanese culture and how its wisdom can help us to lead better lives.', 'Basic but effective method for a healthy lifestyle', '1700838002.webp', 13, '2023-11-25 07:36:46', '2023-11-25 07:36:46'),
(25, 'Discipline Equals Freedom', 'Jocko Willink', 'Rs.188', 'this field manual offers invaluable insights into the principles of discipline and how they can lead to freedom in all aspects of life. To enhance your personal growth and embrace a life of discipline,', 'is an American author, podcaster, and retired United States Navy officer who served in the Navy SEALs and is a former member of SEAL Team 3.', 'Its about discipline', '1700838548.webp', 11, '2023-11-25 07:37:46', '2023-11-25 07:37:46'),
(26, 'The Evolution of Corporate Goverment', 'Bob Tricker', 'Rs.102', 'this book offers valuable insights into the history, development, and contemporary practices of corporate governance. To enhance your understanding of this crucial aspect of business management', 'is an expert in corporate governance who wrote the first book to use the title corporate governance in 1984,[2] based on his research at Nuffield College, Oxford. He was also the founder-editor of the research journal Corporate Governance', 'simple concept of corporate world', '1700838732.webp', 12, '2023-11-25 07:40:15', '2023-11-25 07:40:15'),
(27, 'July\'s People', 'Gordimer Nadine', 'Rs.145', 'this book offers readers a poignant exploration of racial and societal dynamics in a South African context. To gain deeper insights into this important literary work', 'was a South African writer and political activist. She received the Nobel Prize in Literature in 1991, recognized as a writer \"who through her magnificent epic writing has ... been of very great benefit to humanity', 'good book', '1700838911.webp', 10, '2023-11-25 07:40:38', '2023-11-25 07:40:38'),
(28, 'Everything is F*cked', 'Mark Manson', 'Rs.122', '“Everything Is F*cked” delves into the profound idea that hope and despair are two sides of the same coin. Mark Manson encourages readers to confront the uncomfortable realities of life, acknowledging that while hope can be a powerful force for positive change, it can also lead to disillusionment and despair.', 'I am the three-time #1 New York Times bestselling author of The Subtle Art of Not Giving a F*ck, as well as other titles. My books have sold over 20 million copies, been translated into more than 65 languages, and reached number one in more than a dozen countries', 'if you like bold unfiltered writing then this book is for you', '1700839089.webp', 9, '2023-11-25 07:41:36', '2023-11-25 07:41:36'),
(29, 'Before the coffee gets cold', 'Toshikazu Kawaguchi', 'Rs.142', 'Before the Coffee Gets Cold” introduces readers to a small, unassuming cafe in Tokyo known as Funiculi Funicula. But this is not an ordinary cafe; it holds a magical secret. Within its walls, there is a chair that allows those who sit in it to travel through time', 'Toshikazu Kawaguchi was born in Osaka, Japan, in 1971. He formerly produced, directed and wrote for the theatrical group Sonic Snail. As a playwright, his works include COUPLE, Sunset Song, and Family Time. The novel Before the coffee gets cold is adapted from a 1110 Productions play by Kawaguchi, which won the 10th Suginami Drama Festival grand prize.', 'Author did a great job with the storytelling', '1700839278.webp', 8, '2023-11-25 07:42:18', '2023-11-25 07:42:18');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(15) NOT NULL,
  `name` varchar(77) DEFAULT NULL,
  `email` varchar(77) DEFAULT NULL,
  `subject` varchar(77) DEFAULT NULL,
  `message` varchar(102) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(2, 'legafn', 'rahulsarkar0121@gmail.com', 'afsl', 'fasjl', '2023-10-25 01:02:33', '2023-10-25 06:32:33'),
(3, 'aegfln', 'rahulsarkar0121@gmail.com', 'fas', 'gasfc', '2023-10-25 01:04:00', '2023-10-25 06:34:00'),
(4, 'Aditya Nagar', 'Aditya@gmail.com', 'happy', 'there is nothing to say', '2023-10-28 03:34:38', '2023-10-28 09:04:38'),
(5, 'Digesh', 'digesh@gmail.com', 'nothing', 'laptop', '2023-10-31 00:36:32', '2023-10-31 06:06:32');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(14) NOT NULL,
  `email` varchar(66) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'rahulsarkar0121@gmail.com', '12345', '2023-11-10 05:33:53', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookpdfs`
--
ALTER TABLE `bookpdfs`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `book_details`
--
ALTER TABLE `book_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookpdfs`
--
ALTER TABLE `bookpdfs`
  MODIFY `pid` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `book_details`
--
ALTER TABLE `book_details`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
