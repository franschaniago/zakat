-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2016 at 04:04 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `izakat`
--

-- --------------------------------------------------------

--
-- Table structure for table `amil`
--

CREATE TABLE `amil` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amil`
--

INSERT INTO `amil` (`id`, `username`, `password`, `email`, `level`) VALUES
(1, 'frans chaniago', 'c6d8aebe2067dde6f9e16510534f7ae5246fa64e', 'franschaniago5@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(100) NOT NULL,
  `isi_artikel` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama_mustahiq` varchar(100) NOT NULL,
  `nama_penginput` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `gambar`, `nama_mustahiq`, `nama_penginput`) VALUES
(5, 'Yayasan Yatim Piatu An - Nur', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro quisquam, debitis tempore ea necessitatibus tempora est corporis, doloribus aspernatur, quos officiis aut fuga. Consectetur nisi doloribus nobis numquam earum, quod unde dolores harum quis aperiam doloremque praesentium nesciunt sunt libero, voluptas. Vero molestiae eum odit nam autem obcaecati quas aperiam</p>', '../img/artikel/satu.png', 'Bambang', 'frans chaniago'),
(12, 'Yayasan Bunda', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque hic asperiores tempora velit explicabo, magni. Ab voluptate incidunt, ducimus alias quibusdam dolorum a hic omnis. Facere deleniti, assumenda voluptates eligendi.</p>', '../img/artikel/girl.jpg', 'Rian', 'frans chaniago'),
(16, 'Seragam untuk ani', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus autem consequuntur adipisci excepturi quidem doloremque iusto odit, cumque voluptatum id. Dolores beatae quo vitae ipsum enim alias incidunt doloribus dolor!</p>', 'img/artikel/satu.png', 'Suherman', 'frans chaniago');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `idbanner` int(11) NOT NULL,
  `banner` varchar(50) NOT NULL,
  `link` text NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`idbanner`, `banner`, `link`, `keterangan`) VALUES
(7, 'img/banner/satu.png', 'http://limasekawan.com', 'banner2');

-- --------------------------------------------------------

--
-- Table structure for table `komentar_artikel`
--

CREATE TABLE `komentar_artikel` (
  `id` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `nama_muzakki` varchar(50) NOT NULL,
  `isi_komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar_artikel`
--

INSERT INTO `komentar_artikel` (`id`, `id_artikel`, `nama_muzakki`, `isi_komentar`) VALUES
(4, 7, '2', '<p>ini komentar 1</p>'),
(5, 5, 'frans chaniago', '<p>ini komentar ke tiga</p>'),
(6, 5, 'defi', '<p>ini komentar defi</p>'),
(7, 7, 'defi', '<p>ini komentar defi</p>'),
(8, 5, 'frans chaniago', '<p>ini komentar ke empat frans&nbsp;<strong>tes</strong></p>'),
(9, 5, 'rian deni', '<p>alhamdulillah sangat bermanfaat</p>'),
(10, 12, 'frans chaniago', '<p>sangat bermanfaat</p>');

-- --------------------------------------------------------

--
-- Table structure for table `mustahiq`
--

CREATE TABLE `mustahiq` (
  `id` int(11) NOT NULL,
  `nama_penerima` varchar(100) NOT NULL,
  `nama_yayasan` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jumlah_zakat` int(100) NOT NULL,
  `tgl_penyaluran` date NOT NULL,
  `nama_amil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mustahiq`
--

INSERT INTO `mustahiq` (`id`, `nama_penerima`, `nama_yayasan`, `alamat`, `jumlah_zakat`, `tgl_penyaluran`, `nama_amil`) VALUES
(7, 'Bambang Yadi', '', 'Pasarkemis Tangerang', 900000, '2016-06-27', 'Frans Chaniago'),
(8, 'Rian', 'Yayasan Anak Yatim', 'Jl Padjajaran No 5 Bandung', 2000000, '2016-07-11', 'frans chaniago'),
(9, 'Suhermand', '', 'JL diponegoro no 5 surabaya', 200000, '2016-07-04', 'frans chaniago');

-- --------------------------------------------------------

--
-- Table structure for table `muzakki`
--

CREATE TABLE `muzakki` (
  `id_user` int(11) NOT NULL,
  `foto_profil` varchar(100) NOT NULL,
  `namalengkap` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` bigint(15) NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `muzakki`
--

INSERT INTO `muzakki` (`id_user`, `foto_profil`, `namalengkap`, `email`, `password`, `alamat`, `no_tlp`, `tgl_daftar`) VALUES
(2, 'img/foto_profil/big-smile-smiley_icon-icons.com_57417.png', 'frans chaniago', 'franschaniago5@gmail.com', 'c6d8aebe2067dde6f9e16510534f7ae5246fa64e', 'perumnas 4 tangerang', 62898200221, '2016-06-26'),
(9, '', 'defi', 'defi@gmail.com', 'bb2c9b7bd81864f0198e5139e4962f7d436f31b3', 'binong permai', 628315898234, '2016-06-27'),
(10, '', 'ficky chaniago', 'fickychaniago5@gmail.com', 'ficky', 'pasarkemis', 6289647154241, '2016-06-28'),
(11, '', 'andi rizki', 'andirizki@gmail.com', '72fc05205c1c35ebaca282da5bbaf56b10a4d50f', 'balaraja', 6289491692912, '2016-07-17'),
(13, 'img/foto_profil/images (1).png', 'toni', 'toni@gmail.com', '532ff71c0f0c138e61afd0c77279be9f5bb6c4f0', 'jl jend sudirman no 15', 9878979, '2016-07-25'),
(14, '', 'aku', 'dini@gmail.com', 'cf28d4a60940dfd42ec682f0d803b2a1a2799a7e', '', 0, '2016-07-25');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `balasan_admin` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `id_user`, `nama_user`, `pesan`, `balasan_admin`, `status`) VALUES
(2, 2, 'frans chaniago', 'frans', '', 0),
(4, 0, 'frans chaniago', 'komentar 3\r\n', 'adada', 1),
(5, 0, 'frans chaniago', 'ini pesan user', 'oke', 1),
(6, 2, 'frans chaniago', 'saya sudah bayar untuk zakat perdagangan', 'oke zakat sudah kami terima jazakumullah :-)', 1),
(7, 2, 'frans chaniago', 'saya sudah bayar seminngu yang lalu, kenapa sampai sekarang transaksi saya belum ada di tabel ?', 'transaksi anda sudah kami cek dan belum masuk, silahkan kirim kan bukti transfer anda. terimakasih', 1),
(8, 9, 'defi', 'gimana caranya kalo saya mau bayar zakat di ezakat ?', 'anda bisa membaca petunjuk pembayaran di menu FAQ (Forum Answer Question)', 1),
(9, 9, 'defi', 'apakah kalo bayar di ezakat kena cas tambahan ?', 'semua free', 1),
(10, 0, 'toni', 'terimakasih aplikasinya', 'adsad', 1),
(11, 0, 'toni', 'terimakasih aplikasinya', 'sda', 1),
(12, 0, 'toni', 'a', 'sadasd', 1),
(13, 0, 'toni', 'dada', 'sfsdfd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_user` varchar(100) NOT NULL,
  `no_transaksi` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_transaksi` varchar(100) NOT NULL,
  `bukti_transfer` varchar(100) NOT NULL,
  `jumlah_bayar` varchar(100) NOT NULL,
  `nama_bank` varchar(70) NOT NULL,
  `no_rekening` int(25) NOT NULL,
  `atas_nama` varchar(50) NOT NULL,
  `rekening_bank_tujuan` varchar(70) NOT NULL,
  `jumlah_bayar_konfirmasi` int(100) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `keterangan` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_user`, `no_transaksi`, `nama`, `jenis_transaksi`, `bukti_transfer`, `jumlah_bayar`, `nama_bank`, `no_rekening`, `atas_nama`, `rekening_bank_tujuan`, `jumlah_bayar_konfirmasi`, `tgl_bayar`, `keterangan`, `status`) VALUES
(5, '2', '0510055715', 'frans chaniago', 'Zakat Perdagangan', 'img/bukti_transfer/ebangking.jpg', '100000', '', 0, '', '', 0, '2016-07-02', '', 2),
(6, '2', '0510062903', 'frans chaniago', 'Zakat Ternak', 'img/bukti_transfer/ebangking.jpg', '2000000', '', 0, '', '', 0, '2016-07-01', '', 2),
(10, '2', '160627062932', 'frans chaniago', 'Zakat Perdagangan', 'img/bukti_transfer/a.JPG', '1000000', 'bri', 2147483647, 'frans', 'mandiri', 1000000, '2016-06-27', '', 2),
(11, '2', '160714063122', 'frans chaniago', '0', 'img/bukti_transfer/Home.png', '1125000', 'mandiri', 2147483647, 'frans', 'bri', 1125000, '2016-07-15', '', 3),
(12, '9', '160714075451', 'defi', 'Zakat Emas Perak', 'img/bukti_transfer/Payment   National Zakat Foundation.png', '1125000', 'bri', 2147483647, 'defi', 'mandiri', 1125000, '2016-07-15', 'mau bayar zakat', 2),
(14, '12', '160717075306', 'rian deni', 'Zakat Perdagangan', 'img/bukti_transfer/Home.png', '1252500', '0', 2147483647, 'rian deni', 'mandiri', 1252500, '2016-07-18', 'bismillah, niat saya bayar zakat perdagangan karna allah', 2),
(15, '11', '160717080122', 'andi rizki', 'Zakat Pertanian', 'img/bukti_transfer/Home.png', '1000000', '0', 2147483647, 'andi', 'bri', 1000000, '2016-07-18', 'niat bayar zakat', 3),
(16, '13', '160725043937', 'toni', 'Zakat Emas Perak', '', '1125000', '', 0, '', '', 0, '0000-00-00', '', 0),
(17, '13', '16072504410317', 'toni', 'Zakat Emas Perak', 'img/bukti_transfer/Bukti-Transfer-ATM.jpg', '10000000', '0', 2147483647, 'toni', 'mandiri', 10000000, '2016-07-25', '', 2),
(18, '14', '16072508221018', 'aku', 'Zakat Pertanian', 'img/bukti_transfer/Bukti-Transfer-ATM.jpg', '5200000', 'bri', 2147483647, 'dini', 'bri', 5200000, '2016-07-25', 'saya bayar zakat pertanian', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amil`
--
ALTER TABLE `amil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`idbanner`);

--
-- Indexes for table `komentar_artikel`
--
ALTER TABLE `komentar_artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mustahiq`
--
ALTER TABLE `mustahiq`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_penerima` (`nama_penerima`);

--
-- Indexes for table `muzakki`
--
ALTER TABLE `muzakki`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `namalengkap` (`namalengkap`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amil`
--
ALTER TABLE `amil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `idbanner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `komentar_artikel`
--
ALTER TABLE `komentar_artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `mustahiq`
--
ALTER TABLE `mustahiq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `muzakki`
--
ALTER TABLE `muzakki`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
