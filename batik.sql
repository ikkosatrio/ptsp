-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2018 at 11:08 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id_album` int(11) NOT NULL,
  `nama_album` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id_album`, `nama_album`, `created_at`) VALUES
(38, 'Kasdasdsdfs', '2017-07-08 14:31:49'),
(39, 'test 2', '2017-07-14 02:04:33'),
(40, 'test 3', '2017-07-14 02:15:48');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `cover` text NOT NULL,
  `view` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_kategori`, `judul`, `deskripsi`, `cover`, `view`, `status`, `created_at`) VALUES
(2, 2, 'asdPembangunan Hanggar Ambruk di Bandara Makassar Dihentikan ', '<p>Konstruksi</p>\r\n', '1534825847IMG-20180522-WA0019.jpg', 10, 0, '2018-08-21 04:35:08'),
(3, 1, 'Tenaga Kerja Konstruksi Indonesia Memiliki Daya Saing Tinggi ', '<p><strong>Liputan6.com</strong>, Jakarta - Menteri Pekerjaan Umum Djoko Kirmanto berkeyakinan tenaga kerja konstruksi Indonesia memiliki daya saing kompetitif dan<br />\r\nkomparatif&nbsp; yang tinggi. Bahkan tenaga kerja konstruksi Indonesia tidak kalah dengan tenaga kerja kontruksi dari negara-negara lain di Asia Tenggara.</p>\r\n\r\n<p>&quot;Sejauh ini beberapa Badan Usaha Jasa Konstruksi Nasional telah memiliki pengalaman dan berhasil melaksanakan pekerjaan konstruksi di berbagai negara ASEAN, seperti Brunei Darussalam, Filipina, Malaysia, Myanmar, dan Timor Leste.&quot;kata&nbsp; Menteri Pekerjaan Umum Djoko Kirmanto, Senin (29/9/2014).</p>\r\n\r\n<p>Menurut Djoko, tahun ini nilai pasar konstruksi Indonesia akan menyamai pasar konstruksi di Korea Selatan, bahkan Indonesia diprediksi akan menjadi pasar perumahan ketiga terbesar di dunia. Artinya, Indonesia di samping merupakan pasar potensial, tetapi juga mampu berperan sebagai basis produksi sektor konstruksi di Kawasan ASEAN.</p>\r\n\r\n<p>Menyikapi akan segera terbentuknya Masyarakat Ekonomi Asean (MEA) pada akhir 2015, Djoko Kirmanto mengingatkan agar sektor konstruksi di Indonesia bersiap diri menghadapi keterbukaan pasar di lingkup ASEAN. Tentunya disiplin dan kerja keras semua bagian masyarakat konstruksi sangat dibutuhkan.</p>\r\n\r\n<p>&quot;Mari kita sikapi MEA secara proporsional, yang terpenting saya menghimbau para pelaku konstruksi untuk mempersiapkan diri<br />\r\nsebaik-baiknya, &quot; tutur Djoko.</p>\r\n\r\n<p>Djoko Kirmanto juga menghimbau agar perdagangan bebas dalam lingkup negara ASEAN tidak hanya dipersepsi untuk persaingan, namun justru untuk mengintegrasikan dan saling melengkapi kapasitas antara negara-negara tersebut dalam menghadapi negara-negara non ASEAN di era globalisasi yang lebih luas pada 2020 nanti.</p>\r\n\r\n<p>Pemerintah sendiri telah mengambil langkah-langkap progresif untuk mempersiapkan pelaku konstruksi nasional dalam menghadapi MEA. Salah satunya bahwa untuk melakukan usaha jasa konstruksi di Indonesia Badan Usaha Jasa Konstriksi ASEAN harus bekerja sama dengan Badan Usaha Jasa Konstruksi Nasional kualifikasi besar dalam bentuk joint operation atau joint venture.</p>\r\n\r\n<p>Kemudian, dengan penyertaan modal asing saat ini masih dibatasi maksimal sebesar 55 persen untulk kontraktor dan 51<br />\r\npersen untuk konsultan yang nantinya akan menjadi sebesar 70 persen setelah diberlakukannya MEA.</p>\r\n\r\n<p>Oleh karena itu, Badan Usaha Jasa Konstruksi Nasional harus menjadi partner yang aktif dalam bermitra dengan Badan Usaha Jasa Konstruksi ASEAN agar dapat mengambil manfaat dari kerja sama ini dengan tecerminnya kapasitas SDM, teknologi, dan permodalan Badan Usaha Jasa Konstruksi Nasional.</p>\r\n\r\n<p>Di samping itu, tenaga kerja jasa konstruksi asing yang bekerja di Indonesia masih dibatasi hanya untuk tingkat&nbsp; direktur, manajer, dan tenaga ahli serta harus tetap memebuhi ketentuan paraturan perundang-undangan ketenagakerjaan dan keimigrasian yang berlaku di Indonesia. &quot;Saya percaya sampai saat ini, tenaga kerja konstruksi Indonesia memiliki daya saing kompetitif dan komparatif yang relatif tinggi di kawasaan Asean,&quot; pungkas Djoko Kirmanto.</p>\r\n\r\n<p>Pengembangan SDM sangat krusial karena masih banyak pihak yang menilai sektor konstruksi Indonesia dinilai belum siap untuk menghadapi ketatnya persaingan dalam implementasi MEA 2015. Jumlah perusahaan konstruksi di Indonesia memang lebih banyak dibandingkan tenaga ahli yang tersedia. Sebagai perbandingan, perusahaan konstruksi di Indonesia mencapai 114.000,sementara China hanya 66.000. Perusahaan konstruksi China sebagian besar menangani skala proyek yang lebih<br />\r\nbesar.</p>\r\n\r\n<p>Untuk periode 2006-2013, pertumbuhan rata-rata tenaga kerja hanya sekitar 6 persen, sementara pertumbuhan rata-rata nilai konstruksi untuk periode yang sama sebesar 21 persen. Badan Pusat Statistik pada 2013 menyebutkan SDM konstruksi Indonesia mencapai 6,9 juta atau 5,7 persen dari tenaga kerja nasional.</p>\r\n\r\n<p>Dari jumlah tersebut, sebesar 4 persen merupakan tenaga ahli, 20 persen tenaga terampil, dan 76 persen sisanya merupakan tenaga kerja kurang terampil. (Amd/Gdn)</p>\r\n', '1534825831IMG-20180522-WA0032.jpg', 15, 0, '2018-08-21 04:30:31');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` longtext,
  `description` longtext,
  `icon` longtext,
  `instagram` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `logo` longtext,
  `meta_deskripsi` text NOT NULL,
  `basic` int(11) DEFAULT NULL,
  `meta_keyword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `name`, `email`, `phone`, `address`, `description`, `icon`, `instagram`, `facebook`, `logo`, `meta_deskripsi`, `basic`, `meta_keyword`) VALUES
(1, 'Batik Murni Madiun', 'batikpecel@gmail.com', '083849940637', 'Madiun', 'Batik Pecel<br>', 'icon1.png', 'madiun', 'madiun', 'logo3.png', '																																																																								Batik Pecel\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											', 5, '																																																																													Batik Pecel\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											');

-- --------------------------------------------------------

--
-- Table structure for table `gambar_album`
--

CREATE TABLE `gambar_album` (
  `id_gambar` int(11) NOT NULL,
  `id_album` int(11) DEFAULT NULL,
  `gambar` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar_album`
--

INSERT INTO `gambar_album` (`id_gambar`, `id_album`, `gambar`) VALUES
(15, 38, '2_i.jpg'),
(16, 39, 'Asset_1.png'),
(17, 39, 'usaha-keripik-pangsit.jpg'),
(18, 40, 'placeit.png');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id_header` int(11) NOT NULL,
  `profil` varchar(255) DEFAULT NULL,
  `artikel` varchar(255) DEFAULT NULL,
  `produk` varchar(255) DEFAULT NULL,
  `potensi` varchar(255) DEFAULT NULL,
  `gallery` varchar(255) DEFAULT NULL,
  `kontak` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id_header`, `profil`, `artikel`, `produk`, `potensi`, `gallery`, `kontak`) VALUES
(1, 'profil.jpg', 'artikel.jpg', 'produk.jpg', 'produk1.jpg', 'produk2.jpg', 'produk3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` text NOT NULL,
  `deskripsi_kat` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`, `deskripsi_kat`, `created_at`) VALUES
(1, 'Konstruksi2', '<p>Konstruksi4</p>\r\n', '2017-06-29 09:05:38'),
(2, 'halo', 'test', '2017-07-15 16:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_product`
--

CREATE TABLE `kategori_product` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `deskripsi_kat` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_product`
--

INSERT INTO `kategori_product` (`id_kategori`, `nama`, `deskripsi_kat`, `created_at`) VALUES
(2, 'test 1', '<p>asdasd</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2018-08-14 16:42:16');

-- --------------------------------------------------------

--
-- Table structure for table `pejabat`
--

CREATE TABLE `pejabat` (
  `id_pejabat` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `prioritas` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pejabat`
--

INSERT INTO `pejabat` (`id_pejabat`, `nama`, `jabatan`, `foto`, `prioritas`) VALUES
(3, 'zc 2', 'czxc 2', '150013394160_1_energetics_noni_(1).jpg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT '0',
  `pesan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `email`, `status`, `pesan`, `created_at`) VALUES
(2, 'sdf', 'sdf', '1', 'sdf', '2018-07-21 14:27:15');

-- --------------------------------------------------------

--
-- Table structure for table `potensi`
--

CREATE TABLE `potensi` (
  `id_potensi` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `cover` text NOT NULL,
  `view` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `potensi`
--

INSERT INTO `potensi` (`id_potensi`, `judul`, `deskripsi`, `cover`, `view`, `created_at`) VALUES
(7, 'ini test potensi', '<p>isi test potensi</p>\r\n', '14999987216-03-11_MARK_green_blueberry_fruit_after_bloom_.jpg', 5, '2017-07-15 13:43:38'),
(8, 'test potensi 2', '<p>test potensi 2</p>\r\n', '150002551460_1_energetics_noni_(1).jpg', 26, '2017-07-15 14:11:15');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `cover` text NOT NULL,
  `view` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `stok` int(11) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `judul`, `deskripsi`, `cover`, `view`, `harga`, `created_at`, `stok`, `id_kategori`) VALUES
(4, 'ini produk2', '<p>isi produk2</p>\r\n', '1534825883IMG-20180726-WA0010.jpg', 69, 4000, '2018-08-21 04:31:23', 30, 2);

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `nama_desa` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `nama_desa`, `gambar`, `deskripsi`) VALUES
(1, 'Batik Pecel', 'profil.jpg', 'Batik Pecel<br>');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `cover` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `judul`, `deskripsi`, `cover`, `created_at`) VALUES
(5, 'Batik Pecel', '', '1534173171slide_1.jpg', '2018-08-13 15:24:53'),
(6, 'Murni - Madiun', '', '1534174659slide_2.jpg', '2018-08-13 15:37:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambar_album`
--
ALTER TABLE `gambar_album`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id_header`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kategori_product`
--
ALTER TABLE `kategori_product`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pejabat`
--
ALTER TABLE `pejabat`
  ADD PRIMARY KEY (`id_pejabat`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `potensi`
--
ALTER TABLE `potensi`
  ADD PRIMARY KEY (`id_potensi`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id_album` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gambar_album`
--
ALTER TABLE `gambar_album`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id_header` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kategori_product`
--
ALTER TABLE `kategori_product`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pejabat`
--
ALTER TABLE `pejabat`
  MODIFY `id_pejabat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `potensi`
--
ALTER TABLE `potensi`
  MODIFY `id_potensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
