-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Okt 2016 pada 21.23
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ralali`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `message_subjek` varchar(50) DEFAULT NULL,
  `message_description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `respond_id` int(11) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `product_image` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `request_buyer`
--

CREATE TABLE `request_buyer` (
  `request_buyer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `image_product` varchar(250) NOT NULL,
  `date_expired` varchar(50) NOT NULL,
  `date_deadline` varchar(50) NOT NULL,
  `status_respond` varchar(10) NOT NULL DEFAULT '0,1,2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `request_buyer`
--

INSERT INTO `request_buyer` (`request_buyer_id`, `user_id`, `description`, `image_product`, `date_expired`, `date_deadline`, `status_respond`) VALUES
(1, 1, 'ayayayay', '[{"filename":"ram.jpg","path":"http:\\/\\/localhost\\/ralali\\/uploads"}]', '', '', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `respond_request`
--

CREATE TABLE `respond_request` (
  `respond_id` int(11) NOT NULL,
  `request_buyer_id` int(11) DEFAULT NULL,
  `respond_description` varchar(50) DEFAULT NULL,
  `respond_deadline` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `comment` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `respond_request`
--

INSERT INTO `respond_request` (`respond_id`, `request_buyer_id`, `respond_description`, `respond_deadline`, `status`, `comment`) VALUES
(1, 1, '', '', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_status` varchar(50) NOT NULL DEFAULT '0,1,2',
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`, `user_status`, `email`, `phone`) VALUES
(1, 'u48zep', 'f49b87d2a408bbf124d9b02c5e0c4331', '1', 'dodi.cahya@gmail.com', ''),
(2, 'dodi', 'dc82a0e0107a31ba5d137a47ab09a26b', '2', 'dodi.cahya@gmail.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `request_buyer`
--
ALTER TABLE `request_buyer`
  ADD PRIMARY KEY (`request_buyer_id`);

--
-- Indexes for table `respond_request`
--
ALTER TABLE `respond_request`
  ADD PRIMARY KEY (`respond_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `request_buyer`
--
ALTER TABLE `request_buyer`
  MODIFY `request_buyer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `respond_request`
--
ALTER TABLE `respond_request`
  MODIFY `respond_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
