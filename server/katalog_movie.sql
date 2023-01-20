-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2023 at 12:21 PM
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
-- Database: `film`
--

-- --------------------------------------------------------

--
-- Table structure for table `katalog_movie`
--

CREATE TABLE `katalog_movie` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `production_house` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `release_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `katalog_movie`
--

INSERT INTO `katalog_movie` (`id`, `title`, `production_house`, `description`, `release_at`) VALUES
(1, 'Kimi No Nawa', 'CoMix Wave Films', 'Mitsuha Miyamizu, seorang gadis SMA, mendambakan untuk menjalani kehidupan seorang anak laki-laki di kota Tokyo yang ramai sebuah mimpi yang sangat kontras dengan kehidupannya saat ini di pedesaan. Sementara itu di kota, Taki Tachibana menjalani kehidupan yang sibuk sebagai siswa sekolah menengah sambil menyulap pekerjaan paruh waktu dan harapan untuk masa depan dalam arsitektur.\r\n\r\nSuatu hari, Mitsuha terbangun di sebuah ruangan yang bukan miliknya dan tiba-tiba mendapati dirinya menjalani kehidupan impian di Tokyo tetapi di dalam tubuh Taki!  Di tempat lain, Taki mendapati dirinya menjalani kehidupan Mitsuha di pedesaan yang sederhana.  Dalam mengejar jawaban atas fenomena aneh ini, mereka mulai mencari satu sama lain.\r\n\r\nKimi No Nawa berkisah tentang tindakan Mitsuha dan Taki, yang mulai memiliki dampak dramatis pada kehidupan masing-masing, menenun mereka menjadi kain yang disatukan oleh nasib dan keadaan. \r\n', '2016-12-07'),
(2, 'Tenki No Ko', 'Toho Animation', 'Tokyo mengalami hujan deras yang tampaknya mengganggu kecepatan semua orang yang tinggal di sana tanpa akhir. Di tengah hujan yang tampaknya abadi, ada anak SMA yang melarikan diri, Hodaka Morishima, yang berjuang untuk menghidupi dirinya sendiri secara finansial. Hodaka berakhir dengan pekerjaan di penerbit kecil-kecilan. Pada saat yang sama, anak yatim piatu Hina Amano juga berusaha mencari pekerjaan untuk menghidupi dirinya dan adiknya.\r\n\r\nKedua nasib terjalin ketika Hodaka mencoba untuk menyelamatkan Hina dari pria hidung belang, memutuskan untuk melarikan diri bersama. Selanjutnya, Hodaka menemukan bahwa Hina memiliki kekuatan yang aneh namun menakjubkan, kemampuan untuk memanggil matahari setiap kali ia memintanya. Dengan mempertimbangkan cuaca Tokyo yang tidak biasa, Hodaka melihat potensi dari kemampuan ini. Ia menyarankan agar Hina menjadi \"gadis sinar matahari\", seseorang yang akan membersihkan langit dari hujan saat orang-orang sangat membutuhkannya. Namun ada harga yang mahal untuk itu.', '2019-08-21'),
(3, 'Koe No Katachi', 'Kyoto Animation', ' Siswa sekolah dasar yang cukup liar bernama Shouya Ishida berusaha mengalahkan kebosanannya dengan perilaku yang kejam. \r\n\r\nKetika Shouko Nishimiya yang tuli pindah ke kelasnya, Shouya dan anggotanya terus mengganggu Shouko hanya untuk bersenang - senang. Namun ketika ibunya mengetahui tindakan yang kurang baik terhadap anaknya, lantas ia memberitahu pihak sekolah mengenai masalah tersebut. \r\n Shouya disalahkan atas semua tindakan yang dilakukan kepada Shouko. Akhirnya Shouko pindah dari sekolah tersebut, kepergian Shouko membuat Shouya mendapatkan tindakan yang serupa oleh teman - temannya. Ia dikucilkan oleh semua murid sekolah dari sd sampai smp dan para guru hanya bisa menutup mata.\r\n\r\nDi tahun ketiga sekolahnya, Shouya masih terganggu oleh kesalahan yang pernah ia buat dahulu. Dengan tulus menyesali tindakan di masa lalu, ia memulai pernjalanan untuk menebus kesalahannya kepada Shouka. Koe no Katachi meceritakan kisah yang mengharukan antara Shouya dan Shouka. ', '2016-09-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `katalog_movie`
--
ALTER TABLE `katalog_movie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `katalog_movie`
--
ALTER TABLE `katalog_movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
