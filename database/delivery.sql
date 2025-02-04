-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2025 at 02:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `delivery`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(320) NOT NULL,
  `password` varchar(256) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `is_admin`, `created_at`, `updated_at`) VALUES
(1, 'Gintoki', 'Gintama@gmail.com', '$2y$10$rMikmvrbY4z74DZUeBKHJOuNCS2UztyPIoQSJ2IfWRZt0mQ9TWD72', 0, '2025-01-21 08:22:31', '2025-01-21 16:28:08'),
(2, 'test', 'test@email.com', '$2y$10$RcMKPqXN3gUbe5CNW3V7DutfI40bdTe1Be9uzRS3oo1yWTClLkhwO', 0, '2025-01-21 08:30:57', '2025-01-21 16:37:59'),
(3, 'Sample', 'sample@email.com', '$2y$10$RB68TMzHze1BqNAYeUY7vOOmiXfNBsq3.15lJvfQ/A9MfTkyL5gVi', 0, '2025-01-21 08:53:28', '2025-01-21 16:54:10'),
(4, 'Jordan', 'james@email.com', '$2y$10$N1H/8ziMken2R0HAg0yaI.Ev.VU8oArHs1MKeQA2Cjgif.VrJZahi', 0, '2025-01-21 09:13:10', '2025-01-21 17:13:10'),
(5, 'Seeb', 'seeb@business.com', '$2y$10$aWLjKBrpBwqemVsArH7zQOkKNigOhvZVnMe1pniKanfI06C2amfu2', 0, '2025-01-21 09:54:42', '2025-01-21 17:54:42'),
(6, 'Charleon', 'charleon@email.com', '$2y$10$HiZs693al.QcJf0qEXxbXuaJ33c222Up5yTQPPIcawLmbL.4z29EW', 0, '2025-01-21 10:15:38', '2025-01-21 18:15:38'),
(7, 'check1', 'check1@email.com', '$2y$10$oC4cpjqm.HIXAIv3mkb0r..lr3AagAaqYmhTG7iP19B5uWv71ar.i', 0, '2025-01-22 14:54:41', '2025-01-22 22:54:41'),
(8, 'check2', 'check2@email.com', '$2y$10$W9VUUO.u3sp.X6MxPp3U4ube36L/UGEwjsi3net5WuQ7Hget2oNWS', 0, '2025-01-22 15:03:07', '2025-01-22 23:03:07'),
(9, 'Luffy', 'luffy@email.com', '$2y$10$kwBxw4SRXZJMOL9COyXzoevhM/ZItVutqFKNB4m9qwHC0RLtC6DAy', 0, '2025-01-22 15:07:06', '2025-01-22 23:07:06'),
(10, 'Nate', 'nf@business.com', '$2y$10$RGVhZQUuskaV4rAOtpnvBO61yiAMTlgxuMIk1fWjBVSErQ4ZNyN.G', 0, '2025-01-22 15:09:48', '2025-01-22 23:09:48'),
(11, 'check3', 'check3@email.com', '$2y$10$h83iVy8rBaSJYbXOjjvW5um.304QXqglFY5pi6rpegLgxel47.8Xe', 0, '2025-01-22 15:19:35', '2025-01-22 23:19:35'),
(12, 'check4', 'check4@email.com', '$2y$10$urvKANJKXuEd3ryyp7W8Mer086iKHJMmxEYD0.HdgMbXaTCLbqXtu', 0, '2025-01-22 15:21:42', '2025-01-22 23:21:42'),
(13, 'check5', 'check5@email.com', '$2y$10$BBnm/RZn590FQ5D9i/jaxuJFFpray0udbtdGe4h4Et4xnGZjxdfPm', 0, '2025-01-22 15:31:52', '2025-01-22 23:31:52'),
(14, 'check6', 'check6@email.com', '$2y$10$IgD3hwE4riot/IihgNONVuHxkPZinsIgeZjOOttCUaj2VlAMFGgOa', 0, '2025-01-22 15:33:20', '2025-01-22 23:33:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
