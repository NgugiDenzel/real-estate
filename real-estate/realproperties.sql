-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2023 at 07:21 PM
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
-- Database: `realproperties`
--

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `property_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `type` tinyint(1) NOT NULL,
  `price` int(11) NOT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`property_id`, `user_id`, `title`, `description`, `type`, `price`, `featured_image`, `updated_at`, `created_at`) VALUES
(1, 7, '5 Bedroom in Lavington', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est hic, vitae nostrum in nulla neque minima eos sapiente consequatur explicabo. Cum perspiciatis quod recusandae, eaque expedita adipisci qui placeat labore aut possimus ullam illo facilis repellat rerum est quaerat vero perferendis suscipit maiores id asperiores! Perspiciatis optio reiciendis accusantium blanditiis mollitia saepe, qui odit iusto eos, quam, autem dignissimos doloribus porro! Dignissimos iste eveniet eos eaque consectetur nemo illum rem, id ut repellat soluta autem ipsam quaerat sit iure perspiciatis consequuntur quam minus maxime. Rem sunt accusantium ad nisi velit quasi pariatur, porro exercitationem mollitia obcaecati iure distinctio cum corrupti?', 1, 120000, 'featured_3b.jpg', '2023-12-05 16:50:33', '2023-12-05 16:42:20'),
(2, 7, '2 Bedroom in Loresho', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est hic, vitae nostrum in nulla neque minima eos sapiente consequatur explicabo. Cum perspiciatis quod recusandae, eaque expedita adipisci qui placeat labore aut possimus ullam illo facilis repellat rerum est quaerat vero perferendis suscipit maiores id asperiores! Perspiciatis optio reiciendis accusantium blanditiis mollitia saepe, qui odit iusto eos, quam, autem dignissimos doloribus porro! Dignissimos iste eveniet eos eaque consectetur nemo illum rem, id ut repellat soluta autem ipsam quaerat sit iure perspiciatis consequuntur quam minus maxime. Rem sunt accusantium ad nisi velit quasi pariatur, porro exercitationem mollitia obcaecati iure distinctio cum corrupti?', 1, 2400000, 'featured_97.jpg', '2023-12-05 18:17:28', '2023-12-05 16:53:39'),
(3, 7, '1 Bedroom in Roysambu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est hic, vitae nostrum in nulla neque minima eos sapiente consequatur explicabo. Cum perspiciatis quod recusandae, eaque expedita adipisci qui placeat labore aut possimus ullam illo facilis repellat rerum est quaerat vero perferendis suscipit maiores id asperiores! Perspiciatis optio reiciendis accusantium blanditiis mollitia saepe, qui odit iusto eos, quam, autem dignissimos doloribus porro! Dignissimos iste eveniet eos eaque consectetur nemo illum rem, id ut repellat soluta autem ipsam quaerat sit iure perspiciatis consequuntur quam minus maxime. Rem sunt accusantium ad nisi velit quasi pariatur, porro exercitationem mollitia obcaecati iure distinctio cum corrupti?', 2, 2000000, 'featured_Audio-Visual-System1.png', '2023-12-05 17:05:36', '2023-12-05 17:05:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `phone`, `email`, `password`, `updated_at`, `created_at`) VALUES
(1, 's', 's', 's', 's@gmail.com', 's', '2023-12-05 12:34:14', '2023-12-05 12:34:14'),
(2, 's', 's', 's', 's@gmail.com', 's', '2023-12-05 13:23:56', '2023-12-05 13:23:56'),
(3, 's', 's', 's', 's@gmail.com', 's', '2023-12-05 13:27:00', '2023-12-05 13:27:00'),
(4, 's', 's', 's', 's@gmail.com', 's', '2023-12-05 13:27:43', '2023-12-05 13:27:43'),
(5, 's', 's', 's', 's@gmail.com', 's', '2023-12-05 13:28:19', '2023-12-05 13:28:19'),
(6, 'Tony', 'Ngash', '0790818789', 'tony@gmail.com', '123456', '2023-12-05 13:33:20', '2023-12-05 13:33:20'),
(7, 'Mike', 'Jones', '0790818789', 'jones@gmail.com', '123456', '2023-12-05 14:16:45', '2023-12-05 14:16:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
