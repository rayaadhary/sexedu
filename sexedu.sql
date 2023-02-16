-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2023 at 08:32 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sexedu`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `kode_artikel` varchar(255) NOT NULL,
  `judul_artikel` text NOT NULL,
  `deskripsi_artikel` text NOT NULL,
  `penjelasan_artikel` text NOT NULL,
  `gambar_artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`kode_artikel`, `judul_artikel`, `deskripsi_artikel`, `penjelasan_artikel`, `gambar_artikel`) VALUES
('B00001', 'Hampir 90% Nikah Dini di Pacitan Karena Hamil Duluan', 'Tingkat pernikahan dini di Kabupaten Pacitan, Jawa Timur cukup tinggi, sejak 2015 hingga sekarang ada 147 pasangan yang menikah. Lebih dari 90% pernikahan dini tersebut disebabkan karena pasangan wanita hamil duluan.', '<br>Tingkat pernikahan dini di Kabupaten Pacitan, Jawa Timur cukup tinggi, sejak 2015 hingga sekarang ada 147 pasangan yang menikah. Lebih dari 90% pernikahan dini tersebut disebabkan karena pasangan wanita hamil duluan.</br>\r\n\r\n<br>Wakil Panitera Pengadilan Agama Pacitan, Nasrudin, mengatakan pada 2015 jumlah pasangan muda yang mengajukan dispensasi nikah sebanyak 105 pasangan. Sedangkan pada 2016 hingga Agustus ada sebanyak 45 pasangan yang mengajukan dispensasi nikah. Jumlah lebih banyak ditemui pada 2014 yaitu dengan 130 pengajuan dispensasi nikah dan pada 2013 sebanyak 126 pengajuan dispensasi nikah.</br>\r\n\r\n\r\n<br>Dia mengatakan pengajuan dispensasi nikah ini karena kedua pasangan masih di bawah umur dan saat ingin menikah mereka ditolak Kantor Urusan Agama (KUA). Mereka ditolak di KUA karena belum cukup usianya. Sesuai UU Nomor 1/1974 tentang Perkawinan, batasan minimal usia nikah bagi laki-laki yaitu 19 tahun dan perempuan berusia 16 tahun.</br>\r\n\r\n<br>Pasangan yang mengajukan dispensasi nikah ke PA pasti berusia di bawah itu, karena UU tidak memperbolehkan. Tetapi ada dispensasi yang bisa dikeluarkan pengadilan supaya pasangan tersebut bisa menikah,â€ kata dia saat berbincang dengan Madiunpos.com di ruang kerjanya, Kamis (11/8/2016).</br>\r\n\r\n<br>Nasrudin menyampaikan faktor penyebab banyaknya anak di bawah umur yang mengajukan dispensasi nikah sangat beragam. Tetapi, sebagian besar penyebab pernikahan dini karena pasangan perempuan sudah hamil. Sedangkan faktor lainnya yaitu orang tua tidak ingin anaknya berbuat zina sebelum ada ikatan pernikahan, tetapi untuk faktor ini sangat sedikit jumlahnya.</br>\r\n\r\n<br>Ada orang tua yang melihat anaknya sudah berpacaran dengan pasangannya dan takut kalau berbuat maksiat, sehingga langsung dinikahkan. Tetapi paling banyak memang karena kecelakaan atau hamil duluan, terang dia.</br>\r\n\r\n<br>Untuk mengajukan dispensasi nikah, kata dia ada beberapa syarat yang harus dipenuhi oleh yang mengajukan, yaitu harus ada surat penolakan dari KUA, foto kopi surat nikah orang tua, foto kopi KTP orang tua, akta kelahiran, surat penghasilan calon suami dari desa, dan surat dokter ketika calon istri hamil.</br>\r\n\r\n<br>Untuk syarat penghasilan calon suami harus ada karena itu menjadi salah satu pertimbangan hakim untuk mengeluarkan dispensasi nikah. Hal ini karena sebagai seorang suami harus memiliki penghasilan untuk menafkahi istrinya nanti.</br>\r\n\r\n<br>Kalau tidak memiliki penghasilan, hakim tidak bisa memberikan dispensasi nikah. Memberi nafkah adalah kewajiban suami. Selain itu, untuk pengajuan karena hamil duluan juga harus menyertakan surat keterangan hamil dari dokter, terang dia.</br>\r\n\r\n<br>Lebih lanjut, dalam mengeluarkan dispensasi nikah ini harus melalui proses peradilan yang dipimpin hakim PA. Ada beberapa pasangan yang ditolak karena syarat administrasi tidak terpenuhi.</br>\r\n\r\n<br>Mengenai banyaknya pernikahan dini yang terjadi di Pacitan, Nasrudin mengimbau kepada orang tua untuk lebih mengawasi pergaulan anak-anaknya. Apalagi di era teknologi informasi seperti saat ini, perlu ada pengawasan lebih dari orang tua.</br>', '63ec732800028.png');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`username`, `password`) VALUES
('abdullah', 'stani'),
('akhdan', 'rafly'),
('gilang', 'diva'),
('silvyani', 'nurlaila'),
('vira', 'aprillia');

-- --------------------------------------------------------

--
-- Table structure for table `tips`
--

CREATE TABLE `tips` (
  `kode_tips` varchar(255) NOT NULL,
  `judul_tips` text NOT NULL,
  `deskripsi_tips` text NOT NULL,
  `gambar_tips` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tips`
--

INSERT INTO `tips` (`kode_tips`, `judul_tips`, `deskripsi_tips`, `gambar_tips`) VALUES
('T00001', 'Gunakan Alat Kontrasepsi', 'Untuk menghindari penularan penyakit menular Seks, meningkatkan kualitas keluarga, dan mengurangi resiko kematian ibu dan bayi.', '63ec5b24a7948.png'),
('T00002', 'Mendapatkan Edukasi Seks', 'Pengetahuan fungsi organ reproduksi dengan menanamkan moral dan etika agar tidak terjadi penyalahgunaan organ reproduksi', '63ec5b85dc3aa.png'),
('T00003', 'Selektif Berteman', 'Karakter seseorang dapat terbentuk dari siapa dia berteman dan hindari pergaulan teman yang membawa dampak buruk', '63ec5bcd17119.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`kode_artikel`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`kode_tips`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
