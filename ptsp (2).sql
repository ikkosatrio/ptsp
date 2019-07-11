-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jul 2019 pada 14.37
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptsp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `banding`
--

CREATE TABLE `banding` (
  `id_banding` char(20) NOT NULL,
  `id_pengadilan` int(11) NOT NULL,
  `no_perkara` text NOT NULL,
  `tgl_terima_berkas` date DEFAULT NULL,
  `no_surat_pta` text NOT NULL,
  `bulan_pta` varchar(15) NOT NULL,
  `tgl_surat_pta_m` date DEFAULT NULL,
  `tgl_surat_pta_h` varchar(50) NOT NULL,
  `nama_pb` varchar(50) NOT NULL,
  `semula_pb` varchar(50) NOT NULL,
  `umur_pb` varchar(20) NOT NULL,
  `agama_pb` varchar(20) NOT NULL,
  `pendidikan_pb` varchar(20) NOT NULL,
  `pekerjaan_pb` varchar(25) NOT NULL,
  `alamat_pb` varchar(50) NOT NULL,
  `nama_kh_pb` varchar(50) NOT NULL,
  `umur_kh_pb` varchar(20) NOT NULL,
  `agama_kh_pb` varchar(20) NOT NULL,
  `pekerjaan_kh_pb` varchar(20) NOT NULL,
  `alamat_kh_pb` varchar(50) NOT NULL,
  `nama_tb` varchar(50) NOT NULL,
  `semula_tb` varchar(20) NOT NULL,
  `umur_tb` varchar(20) NOT NULL,
  `agama_tb` varchar(20) NOT NULL,
  `pendidikan_tb` varchar(20) NOT NULL,
  `pekerjaan_tb` varchar(20) NOT NULL,
  `alamat_tb` varchar(50) NOT NULL,
  `nama_kh_tb` varchar(50) NOT NULL,
  `umur_kh_tb` varchar(20) NOT NULL,
  `agama_kh_tb` varchar(20) NOT NULL,
  `pekerjaan_kh_tb` varchar(20) NOT NULL,
  `alamat_kh_tb` varchar(50) NOT NULL,
  `tgl_putus_pa` date DEFAULT NULL,
  `no_perkara_pa` varchar(25) NOT NULL,
  `amar_pa` varchar(25) NOT NULL,
  `ketua_majelis_pa` varchar(50) NOT NULL,
  `hakim_agg_pa1` varchar(50) NOT NULL,
  `hakim_agg_pa2` varchar(50) NOT NULL,
  `pp_pa` varchar(50) NOT NULL,
  `tgl_akta_banding` date DEFAULT NULL,
  `jenis_pkr` varchar(20) NOT NULL,
  `kode_pa` varchar(20) NOT NULL,
  `no_sp_pa` varchar(20) NOT NULL,
  `bulan_sp_pa` varchar(20) NOT NULL,
  `tgl_sp_pa` date DEFAULT NULL,
  `pmh` date DEFAULT NULL,
  `ketua_majelis_pta` varchar(50) NOT NULL,
  `kode_hm` varchar(20) NOT NULL,
  `hakim_agg_pta1` varchar(50) NOT NULL,
  `kode_ha1` varchar(20) NOT NULL,
  `hakim_agg_pta2` varchar(50) NOT NULL,
  `kode_ha2` varchar(20) NOT NULL,
  `pp_pta` varchar(50) NOT NULL,
  `kode_pp_pta` varchar(20) NOT NULL,
  `penunjukkan_pp_pta` date DEFAULT NULL,
  `tgl_berkas_diterima_majelis` date DEFAULT NULL,
  `tgl_phs` date DEFAULT NULL,
  `tgl_putus_banding` date DEFAULT NULL,
  `amar_banding` varchar(50) NOT NULL,
  `tgl_minutasi` date DEFAULT NULL,
  `tgl_kirim_berkas` date DEFAULT NULL,
  `tgl_upload` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `banding`
--

INSERT INTO `banding` (`id_banding`, `id_pengadilan`, `no_perkara`, `tgl_terima_berkas`, `no_surat_pta`, `bulan_pta`, `tgl_surat_pta_m`, `tgl_surat_pta_h`, `nama_pb`, `semula_pb`, `umur_pb`, `agama_pb`, `pendidikan_pb`, `pekerjaan_pb`, `alamat_pb`, `nama_kh_pb`, `umur_kh_pb`, `agama_kh_pb`, `pekerjaan_kh_pb`, `alamat_kh_pb`, `nama_tb`, `semula_tb`, `umur_tb`, `agama_tb`, `pendidikan_tb`, `pekerjaan_tb`, `alamat_tb`, `nama_kh_tb`, `umur_kh_tb`, `agama_kh_tb`, `pekerjaan_kh_tb`, `alamat_kh_tb`, `tgl_putus_pa`, `no_perkara_pa`, `amar_pa`, `ketua_majelis_pa`, `hakim_agg_pa1`, `hakim_agg_pa2`, `pp_pa`, `tgl_akta_banding`, `jenis_pkr`, `kode_pa`, `no_sp_pa`, `bulan_sp_pa`, `tgl_sp_pa`, `pmh`, `ketua_majelis_pta`, `kode_hm`, `hakim_agg_pta1`, `kode_ha1`, `hakim_agg_pta2`, `kode_ha2`, `pp_pta`, `kode_pp_pta`, `penunjukkan_pp_pta`, `tgl_berkas_diterima_majelis`, `tgl_phs`, `tgl_putus_banding`, `amar_banding`, `tgl_minutasi`, `tgl_kirim_berkas`, `tgl_upload`, `created_at`) VALUES
('1', 5, '1', '2019-07-12', '2', 'maret', '2019-07-17', 'hijriah', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', 'z', '2019-07-03', '3', 'h', 'h', 'h', 'h', 'h', '2019-07-03', 'h', 'h', 'h', 'g', '2019-07-03', '2019-07-09', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', '2019-07-03', '2019-07-03', '2019-07-03', '2019-07-03', 'zzz', '2019-07-03', '2019-07-03', NULL, '2019-07-03 02:45:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `config`
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
-- Dumping data untuk tabel `config`
--

INSERT INTO `config` (`id`, `name`, `email`, `phone`, `address`, `description`, `icon`, `instagram`, `facebook`, `logo`, `meta_deskripsi`, `basic`, `meta_keyword`) VALUES
(1, 'Pengadilan Tinggi Agama Surabaya', 'ptasurabaya@gmail.com', '083849940637', 'PTA Surabaya', 'PTA Surabaya<br>', 'icon2.png', 'PTA Surabaya', 'PTA Surabaya', 'logo5.png', '																																																																																																																																				PTA Surabaya\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											\r\n											', 5, '																																																PTA Surabaya\r\n											\r\n											\r\n											\r\n											');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapegawai`
--

CREATE TABLE `datapegawai` (
  `id_pegawai` int(11) NOT NULL,
  `id_jbt` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tlp` int(15) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `foto` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datapegawai`
--

INSERT INTO `datapegawai` (`id_pegawai`, `id_jbt`, `nip`, `pass`, `nama`, `tlp`, `tempat_lahir`, `tanggal_lahir`, `foto`, `created_at`) VALUES
(1, 0, 'pabangkalan', 'asda', 'asda', 0, 'sd', '2019-06-27', '15616258161.jpg', '2019-06-27 08:56:56'),
(3, 2, 'pasurabaya', 'jhjh', 'jhj', 0, 'asd', '2019-06-27', '1561643817pta.png', '2019-06-27 13:55:05'),
(4, 10, 'admin', 'admin', 'admin', 0, 'surabaya', '2019-06-27', '1561644388', '2019-06-27 14:06:28'),
(5, 4, '196306141990031001', 'admin', 'H. Agus Widyo Susanto, S.H., M.H. ', 90192387, 'Malang', '1963-06-14', '1562292805', '2019-07-05 02:13:25'),
(6, 3, '111', 'ko', 'iko', 9123, 'asd', '0000-00-00', '1562848044', '2019-07-11 12:27:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailpenilaian`
--

CREATE TABLE `detailpenilaian` (
  `id_detailpenilaian` int(11) NOT NULL,
  `id_penilaian` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `kendala` varchar(255) NOT NULL,
  `id_subkat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detailpenilaian`
--

INSERT INTO `detailpenilaian` (`id_detailpenilaian`, `id_penilaian`, `nilai`, `kendala`, `id_subkat`) VALUES
(1, 1, 10, '', 5),
(2, 1, 10, '', 6),
(3, 1, 10, '', 7),
(4, 1, 10, '', 8),
(5, 1, 10, '', 9),
(6, 1, 10, '', 10),
(7, 1, 10, '', 11),
(8, 1, 10, '', 12),
(9, 1, 10, '', 13),
(10, 1, 10, '', 14),
(11, 1, 10, '', 15),
(12, 1, 10, '', 16),
(13, 1, 10, '', 17),
(14, 1, 10, '', 18),
(15, 1, 10, '', 19),
(16, 1, 10, '', 20),
(17, 1, 10, '', 21),
(18, 1, 10, '', 22),
(19, 1, 10, '', 23),
(20, 1, 10, '', 24),
(21, 1, 10, '', 25),
(22, 1, 10, '', 26),
(23, 1, 10, '', 27),
(24, 1, 10, '', 28),
(25, 1, 10, '', 29),
(26, 1, 10, '', 30),
(27, 1, 10, '', 31),
(28, 1, 10, '', 32),
(29, 1, 10, '', 33);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jbt` int(11) NOT NULL,
  `nama_jbt` varchar(50) NOT NULL,
  `desk_jbt` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jbt`, `nama_jbt`, `desk_jbt`, `created_at`) VALUES
(1, 'Ketua', '<p>Ketua Pengadilan Tinggi Agama Surabaya</p>\r\n', '2019-06-27 13:20:45'),
(2, 'Wakil Ketua', '<p>Wakil Ketua Pengadilan Tinggi Agama Surabaya</p', '2019-06-27 13:20:58'),
(3, 'Hakim Tinggi', '<p>Hakim Tinggi&nbsp;Pengadilan Tinggi Agama Surab', '2019-06-27 13:22:12'),
(4, 'Kesekretaritatan', '<p>Kesekretariatan&nbsp;Pengadilan Tinggi Agama Su', '2019-06-27 13:22:46'),
(5, 'Fungsional Umum / Staf', '<p>Fungsional Umum / Staf Pengadilan Tinggi Agama ', '2019-06-27 13:23:12'),
(6, 'Panitera', '<p>Panitera&nbsp;Pengadilan Tinggi Agama Surabaya<', '2019-06-27 13:23:37'),
(7, 'Panitera Muda', '<p>Panitera Muda&nbsp;Pengadilan Tinggi Agama Sura', '2019-06-27 13:24:13'),
(8, 'Panitera Pengganti', '<p>Panitera Pengganti Pengadilan Tinggi Agama Sura', '2019-06-27 13:24:35'),
(9, 'Tenaga Kontrak', '<p>Tenaga Kontrak&nbsp;Pengadilan Tinggi Agama Sur', '2019-06-27 13:24:50'),
(10, 'Administrator', '<p>Administrator&nbsp;Pengadilan Tinggi Agama Sura', '2019-06-27 13:25:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoripenilaian`
--

CREATE TABLE `kategoripenilaian` (
  `id_kategori` int(11) NOT NULL,
  `kode_kat` varchar(25) NOT NULL,
  `nama_kat` varchar(255) DEFAULT NULL,
  `deskripsi_kat` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategoripenilaian`
--

INSERT INTO `kategoripenilaian` (`id_kategori`, `kode_kat`, `nama_kat`, `deskripsi_kat`, `created_at`) VALUES
(5, '1', 'Penempatan dan desain PTSP', '<p>Penempatan dan desain PTSP</p>\r\n', '2019-06-19 12:53:24'),
(6, '2', 'Fasilitas PTSP', '<p>Fasilitas PTSP</p>\r\n', '2019-06-19 12:56:24'),
(9, '3', 'Sarana Penunjang PTSP', '<p>Sarana Penunjang PTSP</p>\r\n', '2019-06-20 01:35:07'),
(10, '4', 'Layanan Inti PTSP', '<p>Layanan Inti PTSP</p>\r\n', '2019-06-20 01:35:44'),
(11, '5', 'Layanan Pendukung PTSP', '<p>Layanan Pendukung PTSP</p>\r\n', '2019-06-20 01:36:11'),
(12, '6', 'Prosedur Layanan PTSP', '<p>Prosedur Layanan PTSP</p>\r\n', '2019-06-20 01:36:35'),
(13, '7', 'Performa Petugas PTSP', '<p>Performa Petugas PTSP</p>\r\n', '2019-06-20 01:36:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengadilan`
--

CREATE TABLE `pengadilan` (
  `id_pengadilan` int(11) NOT NULL,
  `nama_peng` varchar(50) NOT NULL,
  `deskripsi_peng` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengadilan`
--

INSERT INTO `pengadilan` (`id_pengadilan`, `nama_peng`, `deskripsi_peng`, `created_at`) VALUES
(1, 'Pengadilan Agama  Bangil', '<p>Pengadilan Agama&nbsp; Bangil</p>\r\n', '2019-07-03 01:43:13'),
(2, 'Pengadilan Agama  Bangkalan', '<p>Pengadilan Agama&nbsp; Bangkalan</p>\r\n', '2019-07-03 01:43:41'),
(3, 'Pengadilan Agama  Banyuwangi', '<p>Pengadilan Agama&nbsp; Banyuwangi</p>\r\n', '2019-07-03 01:43:56'),
(4, 'Pengadilan Agama  Bawean', '<p>Pengadilan Agama&nbsp; Bawean</p>\r\n', '2019-07-03 01:44:25'),
(5, 'Pengadilan Agama  Blitar', '<p>Pengadilan Agama&nbsp; Blitar</p>\r\n', '2019-07-03 01:44:45'),
(6, 'Pengadilan Agama  Bojonegoro', '<p>Pengadilan Agama&nbsp; Bojonegoro</p>\r\n', '2019-07-03 01:45:08'),
(7, 'Pengadilan Agama  Bondowoso', '', '2019-07-03 01:45:23'),
(8, 'Pengadilan Agama  Gresik', '', '2019-07-03 01:45:38'),
(9, 'Pengadilan Agama  Jember', '', '2019-07-03 01:46:43'),
(10, 'Pengadilan Agama  Jombang', '', '2019-07-03 01:46:57'),
(11, 'Pengadilan Agama  Kangean', '', '2019-07-03 01:47:16'),
(12, 'Pengadilan Agama  Kabupaten Kediri', '', '2019-07-03 01:47:26'),
(13, 'Pengadilan Agama  Kodya Kediri', '', '2019-07-03 01:47:59'),
(14, 'Pengadilan Agama  Kraksaan', '', '2019-07-03 01:48:20'),
(15, 'Pengadilan Agama  Lamongan', '', '2019-07-03 01:48:31'),
(16, 'Pengadilan Agama  Lumajang', '', '2019-07-03 01:48:43'),
(17, 'Pengadilan Agama  Kabupaten Madiun', '', '2019-07-03 01:49:02'),
(18, 'Pengadilan Agama  Kodya Madiun', '', '2019-07-03 01:49:17'),
(19, 'Pengadilan Agama  Magetan', '', '2019-07-03 01:49:28'),
(20, 'Pengadilan Agama  Kabupaten Malang', '', '2019-07-03 01:50:20'),
(21, 'Pengadilan Agama  Kodya Malang', '', '2019-07-03 01:50:35'),
(22, 'Pengadilan Agama  Mojokerto', '', '2019-07-03 01:50:53'),
(23, 'Pengadilan Agama  Nganjuk', '', '2019-07-03 01:51:03'),
(24, 'Pengadilan Agama Ngawi', '', '2019-07-03 01:51:25'),
(25, 'Pengadilan Agama Pacitan', '', '2019-07-03 01:51:38'),
(26, 'Pengadilan Agama Pamekasan', '', '2019-07-03 01:51:55'),
(27, 'Pengadilan Agama Pasuruan', '', '2019-07-03 01:52:10'),
(28, 'Pengadilan Agama Ponorogo', '', '2019-07-03 01:52:27'),
(29, 'Pengadilan Agama Probolinggo', '', '2019-07-03 01:52:40'),
(30, 'Pengadilan Agama Sampang', '', '2019-07-03 01:52:55'),
(31, 'Pengadilan Agama Sidoarjo', '', '2019-07-03 01:53:12'),
(32, 'Pengadilan Agama Situbondo', '', '2019-07-03 01:53:27'),
(33, 'Pengadilan Agama Sumenep', '', '2019-07-03 01:53:36'),
(34, 'Pengadilan Agama Surabaya', '', '2019-07-03 01:54:18'),
(35, 'Pengadilan Agama Trenggalek', '', '2019-07-03 01:54:32'),
(36, 'Pengadilan Agama Tuban', '', '2019-07-03 01:54:42'),
(37, 'Pengadilan Agama Tulungagung', '', '2019-07-03 01:54:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaianptsp`
--

CREATE TABLE `penilaianptsp` (
  `id_penilaian` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `triwulan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penilaianptsp`
--

INSERT INTO `penilaianptsp` (`id_penilaian`, `id_pegawai`, `created_at`, `triwulan`) VALUES
(1, 1, '2019-06-24 01:45:37', 1),
(2, 3, '2019-06-25 07:47:36', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `nama_desa` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `nama_desa`, `gambar`, `deskripsi`) VALUES
(1, 'Batik Pecel', 'profil.jpg', 'Batik Pecel<br>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `cover` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `slider`
--

INSERT INTO `slider` (`id_slider`, `judul`, `deskripsi`, `cover`, `created_at`) VALUES
(5, 'Batik Pecel', '', '1534173171slide_1.jpg', '2018-08-13 15:24:53'),
(6, 'Murni - Madiun', '', '1534174659slide_2.jpg', '2018-08-13 15:37:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkatpenilaian`
--

CREATE TABLE `subkatpenilaian` (
  `id_subkat` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `kode_subkat` varchar(20) NOT NULL,
  `nama_subkat` varchar(50) NOT NULL,
  `deskripsi_subkat` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subkatpenilaian`
--

INSERT INTO `subkatpenilaian` (`id_subkat`, `id_kategori`, `kode_subkat`, `nama_subkat`, `deskripsi_subkat`, `created_at`) VALUES
(4, 8, 'ddxxxx', 'sdasdasd', '<p>asdasdasxxx</p>\r\n', '2019-06-19 13:55:50'),
(5, 5, '1.1', 'Lokasi PTSP', '<ul>\r\n	<li>10 jika fasilitas PTSP mudah diketahui dan ruang tunggu PTSP luas</li>\r\n	<li>5 jika fasilitas PTSP mudah diketahui, namun ruang tunggu PTSP sempit</li>\r\n	<li>0 jika fasilitas PTSP sulit diketahui/dijangkau dan ruang tunggu PTSP sempit</li>\r\n</u', '2019-06-20 01:38:56'),
(6, 5, '1.2', 'Desain PTSP', '<ul>\r\n	<li>10 jika desain PTSP sesuai dengan jenis-jenis layanan dan memudahkan pengguna layanan</li>\r\n	<li>5 jika desain PTSP sesuai dengan jenis-jenis layanan, tapi tidak memudahkan pengguna layanan atau sebaliknya</li>\r\n	<li>0 jika desain PTSP tidak se', '2019-06-20 02:23:43'),
(7, 5, '1.3', 'Tulisan PTSP', '<ul>\r\n	<li>10 jika ada tulisan Pelayanan Terpadu Satu Pintu Pengadilan Agama Bangkalan di backdrop dari bahan Multiplek</li>\r\n	<li>5 jika ada tulisan PTSP namun ditulis langsung ke tembok/sablon/ spanduk</li>\r\n	<li>0 jika tidak ada tulisan apapun di backd', '2019-06-20 02:25:59'),
(8, 6, '2.1', 'Meja Panjang', '<ul>\r\n	<li>10 jika tersedia meja panjang yang sesuai dengan jumlah petugas PTSP</li>\r\n	<li>5 jika tersedia meja panjang, tapi tidak sesuai dengan jumlah petugas PTSP</li>\r\n	<li>0 jika tidak tersedia meja panjang untuk petugas PTSP</li>\r\n</ul>\r\n', '2019-06-20 02:45:49'),
(9, 6, '2.2', 'Kursi', '<ul>\r\n	<li>10 jika tersedia kursi untuk seluruh petugas dan pengguna layanan PTSP</li>\r\n	<li>5 jika tersedia kursi untuk sebagian petugas dan pengguna layanan PTSP</li>\r\n	<li>0 jika tersedia kursi hanya untuk petugas PTSP</li>\r\n</ul>\r\n', '2019-06-20 03:06:11'),
(10, 6, '2.3', 'Komputer / Laptop', '<ul>\r\n	<li>10 jika tersedia komputer/laptop sesuai dengan jumlah petugas PTSP</li>\r\n	<li>5 jika tersedia komputer/laptop tapi tidak sesuai dengan jumlah petugas PTSP</li>\r\n	<li>0 jika tidak tersedia komputer/laptop untuk petugas PTSP</li>\r\n</ul>\r\n', '2019-06-20 03:07:30'),
(11, 6, '2.4', 'Printer', '<ul>\r\n	<li>10 jika tersedia printer dan difungsikan</li>\r\n	<li>5 jika tersedia printer tapi tidak difungsikan</li>\r\n	<li>0 jika tidak tersedia printer&nbsp;</li>\r\n</ul>\r\n', '2019-06-20 03:08:09'),
(12, 6, '2.5', 'Telepon', '<ul>\r\n	<li>10 jika tersedia telepon saluran eksternal dan internal (PA-BX) dan difungsikan</li>\r\n	<li>5 jika hanya tersedia salah satu telepon (eksternal atau internal (PA-BX)</li>\r\n	<li>0 jika tidak tersedia telepon</li>\r\n</ul>\r\n', '2019-06-20 03:08:56'),
(13, 6, '2.6', 'Alat Tulis', '<ul>\r\n	<li>10 jika tersedia alat tulis dan digunakan</li>\r\n	<li>5 jika tersedia alat tulis tapi tidak digunakan</li>\r\n	<li>0 jika tidak tersedia alat tulis</li>\r\n</ul>\r\n', '2019-06-20 03:19:10'),
(14, 6, '2.7', 'Buku Register / Jurnal', '<ul>\r\n	<li>10 jika tersedia register/jurnal dan digunakan</li>\r\n	<li>5 jika tersedia register/jurnal tapi tidak digunakan</li>\r\n	<li>0 jika tidak tersedia register/jurnal</li>\r\n</ul>\r\n', '2019-06-20 03:20:33'),
(15, 6, '2.8', 'Brosur', '<ul>\r\n	<li>10 jika tersedia brosur yang dicetak berwarna menggunakan kertas bagus dan dibagikan</li>\r\n	<li>5 jika tersedia brosur, namun dicetak hitam putih/fotokopi dan tidak dibagikan</li>\r\n	<li>0 jika tidak tersedia brosur</li>\r\n</ul>\r\n', '2019-06-20 03:21:14'),
(16, 6, '2.9', 'Papan Nama Petugas PTSP', '<ul>\r\n	<li>10 jika tersedia papan nama para petugas PTSP yang disertai foto</li>\r\n	<li>5 jika tersedia papan nama para petugas PTSP, tapi tidak disertai foto</li>\r\n	<li>0 jika tidak tersedia papan nama para petugas PTSP&nbsp;</li>\r\n</ul>\r\n', '2019-06-20 03:22:05'),
(17, 6, '2.10', 'Papan Waktu Istirahat', '<ul>\r\n	<li>10 jika tersedia papan waktu istirahat dan digunakan</li>\r\n	<li>5 jika tersedia papan waktu istirahat tapi tidak digunakan</li>\r\n	<li>0 jika tidak tersedia papan waktu istirahat</li>\r\n</ul>\r\n', '2019-06-20 03:23:01'),
(18, 9, '3.1', 'Mesin Antrian', '<ul>\r\n	<li>10 jika tersedia mesin antrian dan difungsikan</li>\r\n	<li>5 jika tersedia mesin antrian, tapi tidak difungsikan atau masih menggunakan sistem antrian manual</li>\r\n	<li>0 jika tidak tersedia mesin antrian&nbsp;</li>\r\n</ul>\r\n', '2019-06-20 03:26:30'),
(19, 9, '3.2', 'TV Media Center', '<ul>\r\n	<li>10 jika tersedia TV media center dan difungsikan</li>\r\n	<li>5 jika tersedia TV media center, tapi tidak difungsikan</li>\r\n	<li>0 jika tidak tersedia TV media center</li>\r\n</ul>\r\n', '2019-06-20 03:27:14'),
(20, 9, '3.3', 'CCTV', '<ul>\r\n	<li>10 jika tersedia CCTV dan difungsikan</li>\r\n	<li>5 jika tersedia CCTV, tapi tidak difungsikan</li>\r\n	<li>0 jika tidak tersedia CCTV</li>\r\n</ul>\r\n', '2019-06-20 03:27:48'),
(21, 10, '4.1', 'Layanan Informasi', '<ul>\r\n	<li>10 jika terdapat layanan informasi yang menjadi satu kesatuan PTSP</li>\r\n	<li>5 jika terdapat layanan informasi tapi tidak menjadi satu kesatuan PTSP</li>\r\n	<li>0 jika tidak terdapat layanan informasi<br />\r\n	&nbsp;</li>\r\n</ul>\r\n', '2019-06-20 04:35:54'),
(22, 10, '4.2', 'Layanan Pendaftaran Perkara', '<ul>\r\n	<li>10 jika terdapat layanan pendaftaran perkara yang menjadi satu kesatuan PTSP</li>\r\n	<li>5 jika terdapat layanan pendaftaran perkara tapi tidak menjadi satu kesatuan PTSP</li>\r\n	<li>0 jika tidak terdapat layanan pendaftaran perkara</li>\r\n</ul>\r\n', '2019-06-20 04:36:31'),
(23, 10, '4.3', 'Layanan Pembayaran Perkara', '<ul>\r\n	<li>10 jika terdapat layanan pembayaran biaya yang menjadi satu kesatuan PTSP</li>\r\n	<li>5 jika terdapat layanan pembayaran biaya tapi tidak menjadi satu kesatuan PTSP</li>\r\n	<li>0 jika tidak terdapat layanan pembayaran biaya</li>\r\n</ul>\r\n', '2019-06-20 04:37:06'),
(24, 10, '4.4', 'Layanan Pengambilan Produk Pengadilan', '<ul>\r\n	<li>10 jika terdapat layanan pengambilan produk pengadilan yang menjadi satu kesatuan PTSP</li>\r\n	<li>5 jika terdapat layanan pengambilan produk pengadilan tapi tidak menjadi satu kesatuan PTSP</li>\r\n	<li>0 jika tidak terdapat layanan pengambilan p', '2019-06-20 04:37:53'),
(25, 10, '4.5', 'Layanan Pengaduan', '<ul>\r\n	<li>10 jika terdapat layanan pengaduan yang menjadi satu kesatuan PTSP</li>\r\n	<li>5 jika terdapat layanan pengaduan tapi tidak menjadi satu kesatuan PTSP</li>\r\n	<li>0 jika tidak terdapat layanan pengaduan</li>\r\n</ul>\r\n', '2019-06-20 04:38:48'),
(26, 11, '5.1', 'Layanan Bank', '<ul>\r\n	<li>10 jika terdapat layanan bank yang terintegrasi dengan PTSP</li>\r\n	<li>5 jika terdapat layanan bank, tapi tidak terintegrasi dengan PTSP</li>\r\n	<li>0 jika tidak terdapat layanan bank&nbsp;</li>\r\n</ul>\r\n', '2019-06-20 04:42:32'),
(27, 11, '5.2', 'Layanan Posbakum', '<ul>\r\n	<li>10 jika terdapat layanan Posbakum yang terintegrasi dengan PTSP</li>\r\n	<li>5 jika terdapat layanan Posbakum, tapi tidak terintegrasi dengan PTSP</li>\r\n	<li>0 jika tidak terdapat layanan Posbakum</li>\r\n</ul>\r\n', '2019-06-20 04:46:21'),
(28, 11, '5.3', 'Layanan PT POS', '<ul>\r\n	<li>10 jika terdapat layanan PT Pos yang terintegrasi dengan PTSP</li>\r\n	<li>5 jika terdapat layanan PT Pos, tapi tidak terintegrasi dengan PTSP</li>\r\n	<li>0 jika tidak terdapat layanan PT Pos<br />\r\n	&nbsp;</li>\r\n</ul>\r\n', '2019-06-20 04:46:51'),
(29, 12, '6.1', 'Waktu Operasional PTSP', '<ul>\r\n	<li>10 jika PTSP beroperasi sesuai dengan jam operasional PA</li>\r\n	<li>5 jika PTSP beroperasi kurang dari jam operasional PA</li>\r\n	<li>0 jika PTSP beroperasi secara tidak menentu<br />\r\n	&nbsp;</li>\r\n</ul>\r\n', '2019-06-20 04:47:33'),
(30, 12, '6.2', 'Prosedur pemberian layanan PTSP', '<ul>\r\n	<li>10 jika seluruh layanan dalam PTSP diberikan sesuai dengan prosedur baku</li>\r\n	<li>10 jika hanya sebagian layanan dalam PTSP yang diberikan sesuai dengan prosedur baku</li>\r\n	<li>10 jika seluruh layanan dalam PTSP diberikan tidak sesuai dengan', '2019-06-20 04:48:08'),
(31, 13, '7.1', 'Kecakapan petugas PTSP', '<ul>\r\n	<li>10 jika seluruh petugas PTSP memberikan pelayanan dengan cepat dan tepat</li>\r\n	<li>5 jika hanya sebagian petugas PTSP yang memberikan pelayanan dengan cepat dan tepat</li>\r\n	<li>0 jika seluruh petugas PTSP memberikan pelayanan dengan tidak cep', '2019-06-20 04:48:47'),
(32, 13, '7.2', 'Keramahan petugas PTSP', '<ul>\r\n	<li>10 jika seluruh petugas PTSP memberikan pelayanan dengan ramah</li>\r\n	<li>5 jika hanya sebagian petugas PTSP yang memberikan pelayanan dengan ramah</li>\r\n	<li>0 jika seluruh petugas PTSP memberikan pelayanan dengan tidak ramah</li>\r\n</ul>\r\n', '2019-06-20 04:49:17'),
(33, 13, '7.3', 'Kerapian pakaian petugas PTSP', '<ul>\r\n	<li>10 jika seluruh petugas PTSP menggunakan pakaian dinas atau seragam khusus dan mengenakan tanda pengenal</li>\r\n	<li>5 jika seluruh petugas PTSP menggunakan pakaian dinas atau seragam khusus, tapi tidak mengenakan tanda pengenal atau sebaliknya<', '2019-06-20 04:49:57');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `banding`
--
ALTER TABLE `banding`
  ADD PRIMARY KEY (`id_banding`);

--
-- Indeks untuk tabel `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datapegawai`
--
ALTER TABLE `datapegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `detailpenilaian`
--
ALTER TABLE `detailpenilaian`
  ADD PRIMARY KEY (`id_detailpenilaian`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jbt`);

--
-- Indeks untuk tabel `kategoripenilaian`
--
ALTER TABLE `kategoripenilaian`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `pengadilan`
--
ALTER TABLE `pengadilan`
  ADD PRIMARY KEY (`id_pengadilan`);

--
-- Indeks untuk tabel `penilaianptsp`
--
ALTER TABLE `penilaianptsp`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indeks untuk tabel `subkatpenilaian`
--
ALTER TABLE `subkatpenilaian`
  ADD PRIMARY KEY (`id_subkat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `datapegawai`
--
ALTER TABLE `datapegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `detailpenilaian`
--
ALTER TABLE `detailpenilaian`
  MODIFY `id_detailpenilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jbt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kategoripenilaian`
--
ALTER TABLE `kategoripenilaian`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `penilaianptsp`
--
ALTER TABLE `penilaianptsp`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `subkatpenilaian`
--
ALTER TABLE `subkatpenilaian`
  MODIFY `id_subkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
