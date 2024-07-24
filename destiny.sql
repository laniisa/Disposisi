-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2024 at 05:40 PM
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
-- Database: destiny
--

-- --------------------------------------------------------

--
-- Table structure for table kontak
--

CREATE TABLE kontak (
  id int(11) NOT NULL,
  username varchar(300) NOT NULL,
  subjek varchar(300) NOT NULL,
  pesan text NOT NULL,
  status varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table kontak
--

INSERT INTO kontak (id, username, subjek, pesan, status) VALUES
(2, 'calistaandt', 'Hai', 'Halo, ini Calista', 'confirmed'),
(3, 'calistaandt', 'AC Rusak', 'Tolong perbaiki', 'pending'),
(4, 'calistaandt', 'Air Kotor', 'Bersihkan!!!!!!!!!!!', 'confirmed'),
(5, 'bunna', 'Lowongan Pekerjaan', 'Halo, saya Bunga Jelita. Apakah ada lowongan pekerjaan?', 'confirmed'),
(6, 'bunna', 'Taman', 'Tamannya rumputnya sangat rimbun', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table makanan
--

CREATE TABLE makanan (
  id_makanan int(11) NOT NULL,
  menu_makanan varchar(255) NOT NULL,
  deskripsi_makanan text NOT NULL,
  harga_makanan decimal(10,2) NOT NULL,
  gambar_makanan varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table makanan
--

INSERT INTO makanan (id_makanan, menu_makanan, deskripsi_makanan, harga_makanan, gambar_makanan) VALUES
(10052, 'Lasagna Panggang', 'Jenis pasta bentuk lebar satu ini dapat disajikan dengan saus bolognese, carbonara, atau saus lainnya.', 45000.00, '667b60c4ced31.jpg'),
(10054, 'Pan Seared Salmon', 'sajian main course kontinental dengan bahan utama ikan salmon yang cara memasaknya memakai teknik pan seared dengan hasilnya, daging salmon tidak hancur dan lebih renyah pada bagian luarnya. Dengan rasanya semakin lengkap disajikan bersama spinach creamy sauce atau saus bayam creamy.', 89000.00, 'pan-seared-salmon.jpg'),
(10056, 'Gyoza', 'Pangsit berbentuk bulan sabit dengan nama gyoza. Sebuah appetizer dari Jepang dengan isiannya beragam', 36000.00, 'gyoza.jpg'),
(10058, 'Chicken Maryland', 'Sajian ayam goreng krispi dengan saus bechamel yang rasanya gurih.', 67000.00, 'chicken-maryland.jpg'),
(10059, 'Tagliatelle Pasta', ' Sajian pasta klasik yang dipadukan dengan sosis bratwurst khas Jerman', 45000.00, 'tagliatelle-pasta.jpg'),
(10060, 'Canapa', 'Canapé dari Prancis, terbuat dari roti berukuran sekali gigit yang di atasnya diberi aneka topping, mulai dari tuna hingga keju.', 56000.00, 'canape.jpg'),
(10061, 'Bruschetta', 'Merupakan potongan roti dengan topping, seperti sayur dan daging', 49000.00, 'bruschetta.jpeg'),
(10062, 'Gravlax', 'Disajikan bersama roti bagel, gravlax  adalah appetizer khas Skandinavia berupa salmon yang diawetkan', 89000.00, 'gravlax.jpg'),
(10063, 'Guacamole', 'Dibuat dari alpukat yang dihaluskan, guacamole, hidangan appetizer Meksiko juga dicampur  bawang bombai, cabai, hingga tomat.', 48900.00, 'guacamole.jpg'),
(10064, 'Jiaozi', 'Jiaozi atau dumpling dari China gak hanya jadi appetizer melainkan juga main course.', 35000.00, 'jiaozi.jpg'),
(10065, 'Waffle', 'Dessert', 39000.00, 'waffle.jpg'),
(10066, 'Pancake', 'Dessert', 42000.00, 'pancake.jpg');

-- --------------------------------------------------------

--
-- Table structure for table minuman
--

CREATE TABLE minuman (
  id_minuman int(11) NOT NULL,
  nama_minuman varchar(100) NOT NULL,
  harga_minuman int(11) NOT NULL,
  deskripsi_minuman varchar(100) NOT NULL,
  gambar_minuman varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table minuman
--

INSERT INTO minuman (id_minuman, nama_minuman, harga_minuman, deskripsi_minuman, gambar_minuman) VALUES
(1001, 'Es Teh Manis', 5000, 'Minuman teh manis dingin', '667b636adccdc.jpg'),
(1003, 'Cappuccino', 15000, 'Minuman kopi dengan campuran susu dan buih', '667b631de5272.jpeg'),
(1004, 'Mojito', 18000, 'Minuman segar beralkohol dengan perasan jeruk nipis dan daun mint', '667b632bbfc43.jpg'),
(1006, 'Lime and cocopandan squash', 25000, 'Minuman dengan varian sirup jeruk dan sirup cocopandan dengan tambahan biji selasih, dan perasan jer', 'Lime_and_cocopandan_squash4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table pelanggan
--

CREATE TABLE pelanggan (
  nama varchar(300) NOT NULL,
  username varchar(300) NOT NULL,
  password varchar(300) NOT NULL,
  email varchar(50) NOT NULL,
  telp varchar(20) NOT NULL,
  id_role int(11) NOT NULL,
  image varchar(300) NOT NULL,
  tgl_lahir date NOT NULL,
  alamat varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table pelanggan
--

INSERT INTO pelanggan (nama, username, password, email, telp, id_role, image, tgl_lahir, alamat) VALUES
('Bunga Jelita', 'bunna', '$2y$10$fO3OzyzqE.gHCQ6tCRHrpu8NUUWpRdGRJIMDO5QundnWPY0InDN7K', 'bunga@gmail.com', '082673868726', 2, 'Screenshot_20240525_221018_Love_deepspace-removebg-preview.png', '2001-12-06', 'N019 Zone'),
('Calista Anindita', 'calistaandt', '$2y$10$htzAi8pZoRJzgFTaIg2Bw.dYzHQUfaagaSksvDvV60ee06Dwk2tkq', 'calistaandta@gmail.com', '082323031346', 2, 'profile_calistaandt.jpg', '2024-06-21', 'Pwt'),
('Lani', 'lani', '$2y$10$2vGK6WgeJQcP6mGzDiw3puaEwzBOzNqCM1zzxWbSpEWOT1ttyxTcG', 'laniii@gmail.com', '085741620836', 2, 'profile_lani.jpg', '2012-06-12', '-'),
('Lanii', 'lanii', '$2y$10$LmfHWGFLTPje3l57I6fJB.g/PR1DMOsUjc2VZL8SbeTEtW4a6ElB.', 'laniii22@gmail.com', '0987653578', 2, 'default.jpg', '2024-06-13', '');

-- --------------------------------------------------------

--
-- Table structure for table ulasan
--

CREATE TABLE ulasan (
  id int(11) NOT NULL,
  username varchar(300) NOT NULL,
  pesan text NOT NULL,
  rating tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table ulasan
--

INSERT INTO ulasan (id, username, pesan, rating) VALUES
(2, 'calistaandt', 'Enak Banget Lho', 5);

-- --------------------------------------------------------

--
-- Table structure for table user
--

CREATE TABLE user (
  username varchar(100) NOT NULL,
  password varchar(300) NOT NULL,
  id_role int(11) DEFAULT NULL,
  is_active int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table user
--

INSERT INTO user (username, password, id_role, is_active) VALUES
('admin', '$2y$10$LYztn9cEQ/fIBzPQKPuFfOWHT.KS6Evrwun.J2TafvWOPpzCfJI0m', 1, 1),
('bunna', '$2y$10$fO3OzyzqE.gHCQ6tCRHrpu8NUUWpRdGRJIMDO5QundnWPY0InDN7K', 2, 1),
('calistaandt', '$2y$10$htzAi8pZoRJzgFTaIg2Bw.dYzHQUfaagaSksvDvV60ee06Dwk2tkq', 2, 1),
('lani', '$2y$10$2vGK6WgeJQcP6mGzDiw3puaEwzBOzNqCM1zzxWbSpEWOT1ttyxTcG', 2, 1),
('lanii', '$2y$10$LmfHWGFLTPje3l57I6fJB.g/PR1DMOsUjc2VZL8SbeTEtW4a6ElB.', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table user_role
--

CREATE TABLE user_role (
  id int(11) NOT NULL,
  role varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table user_role
--

INSERT INTO user_role (id, role) VALUES
(1, 'admin'),
(2, 'cust');

--
-- Indexes for dumped tables
--

--
-- Indexes for table kontak
--
ALTER TABLE kontak
  ADD PRIMARY KEY (id);

--
-- Indexes for table makanan
--
ALTER TABLE makanan
  ADD PRIMARY KEY (id_makanan);

--
-- Indexes for table minuman
--
ALTER TABLE minuman
  ADD PRIMARY KEY (id_minuman);

--
-- Indexes for table pelanggan
--
ALTER TABLE pelanggan
  ADD PRIMARY KEY (username);

--
-- Indexes for table ulasan
--
ALTER TABLE ulasan
  ADD PRIMARY KEY (id);

--
-- Indexes for table user
--
ALTER TABLE user
  ADD PRIMARY KEY (username);

--
-- Indexes for table user_role
--
ALTER TABLE user_role
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table kontak
--
ALTER TABLE kontak
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table ulasan
--
ALTER TABLE ulasan
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table user_role
--
ALTER TABLE user_role
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
