-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 02:06 PM
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
-- Database: `pemweb-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `gedung`
--

CREATE TABLE `gedung` (
  `id_gedung` int(11) NOT NULL,
  `nama_gedung` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gedung`
--

INSERT INTO `gedung` (`id_gedung`, `nama_gedung`, `deskripsi`, `foto`) VALUES
(1, 'Gedung A', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ea assumenda ex iste obcaecati magni officiis. Et recusandae veniam magni illo, quam necessitatibus harum animi sapiente? Pariatur vero quam sapiente aspernatur nam tempore odit. Quo, ab quidem cumque ea cum in eos? Accusantium quisquam expedita et dolor ad corporis totam sed, dolorum fugit quo ipsa eveniet, quidem aperiam maiores odio cupiditate ipsam accusamus vel iusto voluptas pariatur quia esse possimus? Sit, nesciunt veritatis eius aspernatur numquam ad quas eveniet quisquam! Rerum fugit magni accusamus autem soluta non nesciunt cupiditate praesentium id, dolore exercitationem itaque, cum facere quam hic nam! Id.', '../img/gedung.jpg'),
(2, 'Gedung B', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ea assumenda ex iste obcaecati magni officiis. Et recusandae veniam magni illo, quam necessitatibus harum animi sapiente? Pariatur vero quam sapiente aspernatur nam tempore odit. Quo, ab quidem cumque ea cum in eos? Accusantium quisquam expedita et dolor ad corporis totam sed, dolorum fugit quo ipsa eveniet, quidem aperiam maiores odio cupiditate ipsam accusamus vel iusto voluptas pariatur quia esse possimus? Sit, nesciunt veritatis eius aspernatur numquam ad quas eveniet quisquam! Rerum fugit magni accusamus autem soluta non nesciunt cupiditate praesentium id, dolore exercitationem itaque, cum facere quam hic nam! Id.', '../img/gedung2.jpg'),
(3, 'Gedung C', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ea assumenda ex iste obcaecati magni officiis. Et recusandae veniam magni illo, quam necessitatibus harum animi sapiente? Pariatur vero quam sapiente aspernatur nam tempore odit. Quo, ab quidem cumque ea cum in eos? Accusantium quisquam expedita et dolor ad corporis totam sed, dolorum fugit quo ipsa eveniet, quidem aperiam maiores odio cupiditate ipsam accusamus vel iusto voluptas pariatur quia esse possimus? Sit, nesciunt veritatis eius aspernatur numquam ad quas eveniet quisquam! Rerum fugit magni accusamus autem soluta non nesciunt cupiditate praesentium id, dolore exercitationem itaque, cum facere quam hic nam! Id.', '../img/gedung3.jpg'),
(4, 'Gedung D', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ea assumenda ex iste obcaecati magni officiis. Et recusandae veniam magni illo, quam necessitatibus harum animi sapiente? Pariatur vero quam sapiente aspernatur nam tempore odit. Quo, ab quidem cumque ea cum in eos? Accusantium quisquam expedita et dolor ad corporis totam sed, dolorum fugit quo ipsa eveniet, quidem aperiam maiores odio cupiditate ipsam accusamus vel iusto voluptas pariatur quia esse possimus? Sit, nesciunt veritatis eius aspernatur numquam ad quas eveniet quisquam! Rerum fugit magni accusamus autem soluta non nesciunt cupiditate praesentium id, dolore exercitationem itaque, cum facere quam hic nam! Id.', '../img/gedung.jpg'),
(5, 'Gedung E', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ea assumenda ex iste obcaecati magni officiis. Et recusandae veniam magni illo, quam necessitatibus harum animi sapiente? Pariatur vero quam sapiente aspernatur nam tempore odit. Quo, ab quidem cumque ea cum in eos? Accusantium quisquam expedita et dolor ad corporis totam sed, dolorum fugit quo ipsa eveniet, quidem aperiam maiores odio cupiditate ipsam accusamus vel iusto voluptas pariatur quia esse possimus? Sit, nesciunt veritatis eius aspernatur numquam ad quas eveniet quisquam! Rerum fugit magni accusamus autem soluta non nesciunt cupiditate praesentium id, dolore exercitationem itaque, cum facere quam hic nam! Id.', '../img/gedung2.jpg'),
(6, 'Gedung F', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ea assumenda ex iste obcaecati magni officiis. Et recusandae veniam magni illo, quam necessitatibus harum animi sapiente? Pariatur vero quam sapiente aspernatur nam tempore odit. Quo, ab quidem cumque ea cum in eos? Accusantium quisquam expedita et dolor ad corporis totam sed, dolorum fugit quo ipsa eveniet, quidem aperiam maiores odio cupiditate ipsam accusamus vel iusto voluptas pariatur quia esse possimus? Sit, nesciunt veritatis eius aspernatur numquam ad quas eveniet quisquam! Rerum fugit magni accusamus autem soluta non nesciunt cupiditate praesentium id, dolore exercitationem itaque, cum facere quam hic nam! Id.', '../img/gedung3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama`) VALUES
(1, 'Informatika'),
(2, 'Teknik elektro'),
(3, 'Teknik geologi'),
(4, 'Teknik Sipil'),
(5, 'Teknik Industri'),
(6, '-');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_ruangan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `organisasi` varchar(255) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `waktu_awal` datetime NOT NULL,
  `waktu_selesai` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_ruangan`, `id_user`, `organisasi`, `keperluan`, `waktu_awal`, `waktu_selesai`, `status`) VALUES
(5, 6, 3, 'test', 'test', '2023-11-30 01:25:00', '2023-11-04 01:25:00', 'Disetujui'),
(6, 8, 4, 'test', '213123', '2023-11-15 01:57:00', '2023-11-08 01:57:00', 'Disetujui'),
(11, 1, 15, 'test', '213123', '2023-11-24 21:35:00', '2023-11-03 21:35:00', 'Disetujui'),
(15, 6, 3, 'asdfghj', 'sdthn', '2023-11-19 22:39:00', '2023-11-04 22:39:00', 'Diproses'),
(16, 5, 3, 'asdfghj', '213123', '2023-11-30 22:44:00', '2023-11-12 22:44:00', 'Diproses'),
(18, 7, 3, 'asdfghj', 'sdthn', '2023-11-03 12:39:00', '2023-11-04 22:39:00', 'Diproses'),
(19, 5, 3, '111111', '213123', '2023-11-30 22:44:00', '2023-11-12 22:44:00', 'Diproses'),
(20, 4, 3, 'asdfghj', 'sdthn', '2023-11-19 22:39:00', '2023-11-04 22:39:00', 'Diproses'),
(22, 3, 15, 'dfhgbn', 'dsstytjg', '2023-11-17 16:27:34', '2023-11-17 16:27:34', 'Diproses'),
(23, 1, 3, 'xxxxxxxx', 'xxxxxxxx', '2023-11-17 23:25:00', '2023-11-17 23:25:00', 'Diproses'),
(24, 1, 3, 'xxxxxxxx', 'xxxxxxxx', '2023-11-17 23:25:00', '2023-11-17 23:25:00', 'Diproses'),
(25, 1, 3, 'yyyyyyyyy', 'yyyyyyy', '2023-11-17 23:26:00', '2023-11-17 23:26:00', 'Diproses');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `nama_ruangan` varchar(255) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `fasilitas` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_gedung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id_ruangan`, `nama_ruangan`, `kapasitas`, `fasilitas`, `deskripsi`, `foto`, `id_gedung`) VALUES
(1, 'A201', 45, 'AC, TV, Proyektor, Kulkas', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo inventore id reiciendis, assumenda nemo facilis, aperiam dignissimos, ipsam omnis molestiae rerum. Dolorum veritatis nisi accusantium nihil at consequuntur et possimus doloribus eum aperiam quae pariatur non odit aspernatur alias natus aliquid facilis voluptates libero impedit dolore, corporis debitis esse quibusdam! Blanditiis laudantium vero, consectetur deserunt error sed. Tempora similique magni, corporis deleniti dolore ad, hic illum molestiae repudiandae quod minus, ut voluptates architecto quibusdam mollitia! Officia iusto veritatis rerum repellendus in maxime vero quis repudiandae dolores illo accusantium expedita, earum cupiditate labore provident, placeat obcaecati, consectetur porro possimus ab excepturi.', '../img/ruang.jpg', 1),
(2, 'A301', 50, 'AC, TV, Proyektor, Kulkas', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo inventore id reiciendis, assumenda nemo facilis, aperiam dignissimos, ipsam omnis molestiae rerum. Dolorum veritatis nisi accusantium nihil at consequuntur et possimus doloribus eum aperiam quae pariatur non odit aspernatur alias natus aliquid facilis voluptates libero impedit dolore, corporis debitis esse quibusdam! Blanditiis laudantium vero, consectetur deserunt error sed. Tempora similique magni, corporis deleniti dolore ad, hic illum molestiae repudiandae quod minus, ut voluptates architecto quibusdam mollitia! Officia iusto veritatis rerum repellendus in maxime vero quis repudiandae dolores illo accusantium expedita, earum cupiditate labore provident, placeat obcaecati, consectetur porro possimus ab excepturi.', '../img/ruang2.jpg', 1),
(3, 'C103', 70, 'AC, TV, Proyektor, Kulkas', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo inventore id reiciendis, assumenda nemo facilis, aperiam dignissimos, ipsam omnis molestiae rerum. Dolorum veritatis nisi accusantium nihil at consequuntur et possimus doloribus eum aperiam quae pariatur non odit aspernatur alias natus aliquid facilis voluptates libero impedit dolore, corporis debitis esse quibusdam! Blanditiis laudantium vero, consectetur deserunt error sed. Tempora similique magni, corporis deleniti dolore ad, hic illum molestiae repudiandae quod minus, ut voluptates architecto quibusdam mollitia! Officia iusto veritatis rerum repellendus in maxime vero quis repudiandae dolores illo accusantium expedita, earum cupiditate labore provident, placeat obcaecati, consectetur porro possimus ab excepturi.', '../img/ruang3.jpg', 3),
(4, 'C201', 35, 'AC, TV, Proyektor, Kulkas', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo inventore id reiciendis, assumenda nemo facilis, aperiam dignissimos, ipsam omnis molestiae rerum. Dolorum veritatis nisi accusantium nihil at consequuntur et possimus doloribus eum aperiam quae pariatur non odit aspernatur alias natus aliquid facilis voluptates libero impedit dolore, corporis debitis esse quibusdam! Blanditiis laudantium vero, consectetur deserunt error sed. Tempora similique magni, corporis deleniti dolore ad, hic illum molestiae repudiandae quod minus, ut voluptates architecto quibusdam mollitia! Officia iusto veritatis rerum repellendus in maxime vero quis repudiandae dolores illo accusantium expedita, earum cupiditate labore provident, placeat obcaecati, consectetur porro possimus ab excepturi.', '../img/ruang4.jpg', 3),
(5, 'Lab Pemrograman', 20, 'AC, TV, Proyektor, Kulkas', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo inventore id reiciendis, assumenda nemo facilis, aperiam dignissimos, ipsam omnis molestiae rerum. Dolorum veritatis nisi accusantium nihil at consequuntur et possimus doloribus eum aperiam quae pariatur non odit aspernatur alias natus aliquid facilis voluptates libero impedit dolore, corporis debitis esse quibusdam! Blanditiis laudantium vero, consectetur deserunt error sed. Tempora similique magni, corporis deleniti dolore ad, hic illum molestiae repudiandae quod minus, ut voluptates architecto quibusdam mollitia! Officia iusto veritatis rerum repellendus in maxime vero quis repudiandae dolores illo accusantium expedita, earum cupiditate labore provident, placeat obcaecati, consectetur porro possimus ab excepturi.', '../img/ruang5.jpg', 4),
(6, 'Lab Jaringan', 20, 'AC, TV, Proyektor, Kulkas', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo inventore id reiciendis, assumenda nemo facilis, aperiam dignissimos, ipsam omnis molestiae rerum. Dolorum veritatis nisi accusantium nihil at consequuntur et possimus doloribus eum aperiam quae pariatur non odit aspernatur alias natus aliquid facilis voluptates libero impedit dolore, corporis debitis esse quibusdam! Blanditiis laudantium vero, consectetur deserunt error sed. Tempora similique magni, corporis deleniti dolore ad, hic illum molestiae repudiandae quod minus, ut voluptates architecto quibusdam mollitia! Officia iusto veritatis rerum repellendus in maxime vero quis repudiandae dolores illo accusantium expedita, earum cupiditate labore provident, placeat obcaecati, consectetur porro possimus ab excepturi.', '../img/ruang.jpg', 4),
(7, 'E301', 70, 'AC, TV, Proyektor, Kulkas', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo inventore id reiciendis, assumenda nemo facilis, aperiam dignissimos, ipsam omnis molestiae rerum. Dolorum veritatis nisi accusantium nihil at consequuntur et possimus doloribus eum aperiam quae pariatur non odit aspernatur alias natus aliquid facilis voluptates libero impedit dolore, corporis debitis esse quibusdam! Blanditiis laudantium vero, consectetur deserunt error sed. Tempora similique magni, corporis deleniti dolore ad, hic illum molestiae repudiandae quod minus, ut voluptates architecto quibusdam mollitia! Officia iusto veritatis rerum repellendus in maxime vero quis repudiandae dolores illo accusantium expedita, earum cupiditate labore provident, placeat obcaecati, consectetur porro possimus ab excepturi.', '../img/ruang2.jpg', 5),
(8, 'E202', 40, 'AC, TV, Proyektor, Kulkas', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo inventore id reiciendis, assumenda nemo facilis, aperiam dignissimos, ipsam omnis molestiae rerum. Dolorum veritatis nisi accusantium nihil at consequuntur et possimus doloribus eum aperiam quae pariatur non odit aspernatur alias natus aliquid facilis voluptates libero impedit dolore, corporis debitis esse quibusdam! Blanditiis laudantium vero, consectetur deserunt error sed. Tempora similique magni, corporis deleniti dolore ad, hic illum molestiae repudiandae quod minus, ut voluptates architecto quibusdam mollitia! Officia iusto veritatis rerum repellendus in maxime vero quis repudiandae dolores illo accusantium expedita, earum cupiditate labore provident, placeat obcaecati, consectetur porro possimus ab excepturi.', '../img/ruang3.jpg', 5),
(9, 'F112', 25, 'AC, TV, Proyektor, Kulkas', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo inventore id reiciendis, assumenda nemo facilis, aperiam dignissimos, ipsam omnis molestiae rerum. Dolorum veritatis nisi accusantium nihil at consequuntur et possimus doloribus eum aperiam quae pariatur non odit aspernatur alias natus aliquid facilis voluptates libero impedit dolore, corporis debitis esse quibusdam! Blanditiis laudantium vero, consectetur deserunt error sed. Tempora similique magni, corporis deleniti dolore ad, hic illum molestiae repudiandae quod minus, ut voluptates architecto quibusdam mollitia! Officia iusto veritatis rerum repellendus in maxime vero quis repudiandae dolores illo accusantium expedita, earum cupiditate labore provident, placeat obcaecati, consectetur porro possimus ab excepturi.', '../img/ruang4.jpg', 6),
(10, 'F212', 30, 'AC, TV, Proyektor, Kulkas', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo inventore id reiciendis, assumenda nemo facilis, aperiam dignissimos, ipsam omnis molestiae rerum. Dolorum veritatis nisi accusantium nihil at consequuntur et possimus doloribus eum aperiam quae pariatur non odit aspernatur alias natus aliquid facilis voluptates libero impedit dolore, corporis debitis esse quibusdam! Blanditiis laudantium vero, consectetur deserunt error sed. Tempora similique magni, corporis deleniti dolore ad, hic illum molestiae repudiandae quod minus, ut voluptates architecto quibusdam mollitia! Officia iusto veritatis rerum repellendus in maxime vero quis repudiandae dolores illo accusantium expedita, earum cupiditate labore provident, placeat obcaecati, consectetur porro possimus ab excepturi.', '../img/ruang5.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL,
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `isAdmin`, `id_jurusan`) VALUES
(3, 'jasmine', 'jasmineaf04@gmail.com', '$2y$10$RZHlXKrU18mhmUFQOIpr6.1KmOjv38SJ9Oi3xfT7C0dh1Yml9uPSS', 0, 1),
(4, 'sdasfdsf', 'qwe@qwe.qwe', '$2y$10$kPgA3HeO7Ta7eP4jwGJvLeynLL43qSvI4CYGuBsqxTMP3Dn1vjRvy', 0, 2),
(15, 'admin', 'mimin@fyujdksl.com', '$2y$10$dZsGMWLnCyzk3OauusBYse2YpLA4SDFSkA1K3uiH/6kE13SAFwxSu', 1, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`id_gedung`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_ruangan` (`id_ruangan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`id_ruangan`),
  ADD KEY `id_gedung` (`id_gedung`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gedung`
--
ALTER TABLE `gedung`
  MODIFY `id_gedung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangan` (`id_ruangan`),
  ADD CONSTRAINT `peminjaman_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD CONSTRAINT `ruangan_ibfk_1` FOREIGN KEY (`id_gedung`) REFERENCES `gedung` (`id_gedung`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
