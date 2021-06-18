-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2021 pada 16.31
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab_progweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `topic` varchar(500) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `news_by` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `topic`, `content`, `image`, `date`, `news_by`) VALUES
(10, 'SR Rank Edel’s Rare Avatar [Student Council President Edel] will be on special sale!', '- Sale Duration:\r\nWestern: May 4, 2021(Tue) 00:00 – May 31, 2021(Mon) 23:59 (Server Time, UTC-4)\r\nAsia: May 4, 2021(Tue) 10:00 – June 1, 2021(Tue) 09:59 (Server Time, UTC+9)\r\n \r\n- Purchase this by going to [Shop] → [Custom Shop] → [Student Council President Edel].\r\n \r\n- [Student Council President Edel] is sold as Avatar Only or as a set including Avatar, Profile Icon, and Profile Border.\r\n\r\nThat’s all for now, Chasers! As always, don’t forget to check Moot for updates!\r\n \r\nChase On!\r\n-GrandChase Team', 'Jun 18, 2021 12.18.52 PM.png', 'Jun 18, 2021', 23),
(11, '[EVENT] A Savior In Blue', 'Hello, Chasers!\r\n \r\nThe ever-reliable scion of the noble House of Erudon re-enters the fray, now clad in even bluer armor, ready to be your shield. With the release of his Soul Imprint, we’re celebrating with a very special Event! His loyal S-Rank Pet Temphy is yours to claim along with power-up materials via an Attendance Event! (｡･∀･)ﾉﾞ\r\n \r\nDon’t forget to complete Daily missions and claim rewards each day! ♥\r\n \r\n※ Ronan Soul Imprint Event Icon can be found on the main lobby screen!\r\n\r\nReady to save the world with Ronan at your side? Let’s go!\r\n \r\nChase On!\r\n-GrandChase Teams', 'Jun 18, 2021 12.20.13 PM.png', 'Jun 18, 2021', 23),
(12, 'An all-new Avatar for Ronan, the [Royal Knight] will be on special sale!', '- Sale Duration:\r\nWestern: May 18, 2021 (Tue) After Maintenance – June 14, 2021 (Tue) 23:59 (Server Time, UTC-4)\r\nAsia: May 18, 2021 (Tue) After Maintenance – June 15, 2021 (Tue) 09:59 (Server Time, UTC+9)\r\n- Purchase this by going to [Shop] → [Custom Shop] → [Royal Knight Ronan].\r\n- [Royal Knight Ronan] is sold as Avatar Only or as a set including Avatar, Profile Icon, and Profile Border.\r\n\r\nAs always, keep an eye on Moot for further announcements.\r\n \r\nChase On!\r\n-GrandChase Team', 'Jun 18, 2021 12.22.57 PM.png', 'Jun 18, 2021', 23),
(13, '[EVENT] Royally Passing-Through!', 'Hello, Chasers!\r\n \r\nPull up those Adventuring boots and nudge your team out the gate, the Royal Pass is back for another series of awesome rewards! ꒰◍ॢ•ᴗ•◍ॢ꒱\r\n \r\nIf you’ve never tried the Royal Pass before, fear not! We’ve got you covered! You can earn all of the awesome rewards and more just by accumulating points from various missions, find out below:\r\n \r\n■ Royal Pass Event\r\n※ Check out the Royal Pass Event Icon on the main lobby screen!\r\n\r\n1. Event Duration:\r\nWestern: May 25, 2021 (Tue), 00:00 – June 14, 2021 (Mon), 23:59 (Server Time, UTC -4)\r\nAsia: May 25, 2021 (Tue), 10:00 – June 14, 2021 (Mon), 23:59 (Sever Time, UTC +9)\r\n \r\n2. Event Info:\r\n \r\n- Clear Daily Point Missions and Accumulative Point Missions to collect points!\r\nWhen you have collected all points necessary, you can acquire rewards based on the Rank you’ve reached. Excess points will count towards the next Rank, and so on.\r\n- Royal Pass and Special Royal Pass are divided into a total of 30 Ranks. Shall we get started? +_+/\r\n\r\nClimb the ranks of the Royal Pass and get all those goodies! Are you ready?\r\n \r\nChase On!\r\n-GrandChase Team', 'Jun 18, 2021 12.24.53 PM.png', 'Jun 18, 2021', 23);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `admin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `nickname`, `admin`) VALUES
(23, 'brianzw', '$2y$10$oPfpzyogvBX5cdJXRUS6keJhYdK9MuuQhziAC8Fp1Usmp6HcR1mse', 'brianwijaya2003@gmail.com', 'Breeze風', 1),
(28, 'aa', '$2y$10$9siw18I4l1ZUDEhCxF/yNOsEx5tGISuqB./TJ5orhxfF4iiIEL27i', 'aa@aa.com', 'Breeze123', 0),
(35, 'tes', '$2y$10$jvcU745TYYn2oJKYDORPLu3C9szfBgp0Tn/.4qvLwFP3gP9wNNPIu', 'tes@tes', 'tes', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_by` (`news_by`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`news_by`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
