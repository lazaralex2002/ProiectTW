-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: iun. 18, 2022 la 08:08 PM
-- Versiune server: 10.4.22-MariaDB
-- Versiune PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `smartchildrenmonitor`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `admin` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `phone`, `uname`, `password`, `created_at`, `admin`) VALUES
(1, 'test', 'test', 'test@gmail.com', '0000000000', 'test', 'test', '2022-06-18 18:05:14', 0),
(2, ' Alexandru Contantin', 'Lazar ', ' lazar.alex.2002@gmail.com ', ' 0745525452 ', 'lazar ', ' 234', '2022-06-18 19:25:57', 0),
(3, ' Alexandru', 'Zaharia ', ' zaharia@gmail.com ', ' 0000000000 ', 'zaha12 ', ' zaha12', '2022-06-18 20:18:29', 0),
(4, ' Lucian', 'Baciu ', ' Baciu@baciu.com ', ' 0000000000 ', 'baciu1234 ', ' baciu12324', '2022-06-18 20:23:17', 0),
(5, ' Tester', 'Tester ', ' tester1@tester.tester ', ' 0745525452 ', 'tester ', ' tester', '2022-06-18 20:25:29', 0),
(6, ' test4', 'test ', ' test4@test.test ', ' 0745525452 ', 'test4 ', ' teste', '2022-06-18 20:30:05', 0);

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`uname`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
