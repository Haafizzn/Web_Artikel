-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 09:57 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_artikel`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_kategori`, `judul`, `deskripsi`, `tanggal`) VALUES
(1, 4, 'Dampak Internet pada Proses Pertumbuhan Anak', 'Teknologi sangat penting karena sangat dibutuhkan dizaman sekarang dan juga mendatang baik itu orang dewasa, remaja, maupun anak-anak. Hanya saja pengguanan teknologi  inilah yang harus dikendalikan karema teknologi yang  selalu berkembang setiap saat teknologi kearah yang positif dan menghindari dampak negatifnya terutama pada anak-anak yang sangat mudah menerima informasi tanpa mengetahui kebenaran informasi tersebut.\r\nSalah satu dampak dari teknologi adalah Internet dampak yang paling banyak hal negatif dan berpengaruh terhadap proses pertumbuhan anak. \r\nAnak-anak diusia dini merupakan masa masa yang sangat penting dalam dalam perkembangan mereka, sehingga perlu diperhatikan dengan seksama apa saja yang mereka lakukan, termasuk dalam menggunakan internet. Terlalu banyak menggunakan internet dapat mengurangi waktu anak-anak untuk beraktivitas secara langsung dengan lingkungan sekitar. ', '2023-01-11'),
(3, 1, 'ini artikel baru', 'Menjual omong kosong bisa memberikan pasif income, positive nya bisa ngasih impact baik buat orang agar tidak mudah percaya dalam hal apapun tanpa adanya evidence yang kuat, karena tingkat kerendahan rakyat indonesia atas membaca apalagi dengan menggunakan literasi yang tinggi itu menjadi sebuah peluang besar bagi PT ini, dengan memberikan perjanjian hitam diatas putih setebal buku skripsi plus revisian yang bisa ditotal menjadi 1000 halaman akan memberikan kemudahan untuk signed dihalaman terakhir tanpa membacanya, alhasil ketika di persidangan akan menjadi bukti kuat dan nyata bagi PT kami ini, karena ketika client melaporkan kami ke hukum tanpa ada landasan yang kuat itu akan menjadi celah untuk kita menuju kemenangan di persidangan, dengan itu ini lah kami PT Jaya Cahyadi Abadi Sejahtera Selamanya yang bisa kamuflase dalam segala instansi manapun di indonesia, bahkan ada anggota kami di partai politik pun mendukung dan memberikan haki terhadap perusahaan ini, jadi apakah anda berminat untuk investing di perusahaan kami? Dengan modal 100% anda akan mendapatkan berkali kali lipat 0 nya menjadi 0.00000001% sengan potongan PPN 150% dan pajak transport 3% berminat hubungi kami di sini', '2023-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `nama_web` varchar(100) NOT NULL,
  `slogan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `nama_web`, `slogan`, `alamat`) VALUES
(1, 'Echo News', 'Terupdate dan terpercaya', 'Tangerang Selatan');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`) VALUES
(1, 'Teknologi'),
(2, 'Ekonomi'),
(3, 'Olahraga'),
(4, 'Kesehatan'),
(6, 'Kesenian');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `level`) VALUES
(1, 'admin', 'Aku Admin', '21232f297a57a5a743894a0e4a801fc3', '1'),
(2, 'budi', 'Budi Utomo', '00dfc53ee86af02e742515cdcf075ed3', '0'),
(3, 'selvi', 'selvia indriani', 'e7de9abd2abe6288bbbc928c62ae58ad', '0'),
(7, 'hafiz', 'hafiz', '839a54bf20626e4942bc8f11873f0654', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
