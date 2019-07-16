-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2019 pada 09.55
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
('000', 2, '12312', '0000-00-00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', '0000-00-00', '6', '', '7', '', '8', '', '9', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '0000-00-00', '0000-00-00', NULL, '2019-07-11 13:40:26'),
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
(4, 10, 'admin', 'admin', 'admin', 0, 'surabaya', '2019-06-27', '1561644388', '2019-06-27 14:06:28'),
(10, 1, '195304221976011001', 'ketuapta', 'Drs. H. Bahrussam Yunus, S.H., M.H', 90808, '	Pare Pare', '1953-04-22', '1562893510ketua.jpg', '2019-07-12 01:05:10'),
(11, 2, '195210021976081001', 'wakilketuapta', 'Drs.H. Moh. Munawar', 45627787, 'Bojonegoro', '1952-10-02', '1562895257munawar.jpg', '2019-07-12 01:32:42'),
(12, 3, '195807081984031002', 'hakimpta', 'Drs. H. Lutfi, S.H., M.H', 7568487, 'Tuban', '1958-07-08', '1562896095lutfi.jpg', '2019-07-12 01:48:15'),
(13, 3, '195901081987032002', 'hakimpta', 'Dra. Hj. Zulaecho, M.H', 8676546, 'Pekalongan', '1955-07-21', '1562896553zulaicho.jpg', '2019-07-12 01:55:53'),
(14, 3, '195701111985121001', 'hakimpta', 'Drs. H. M. Badawi, S.H.,M.H', 4765588, 'Sleman', '1957-01-11', '1562897657badawi.jpg', '2019-07-12 02:14:17'),
(15, 3, '195509081985031002', 'hakimpta', 'H. Marzuqi, S.H., M.H.', 2147483647, 'Mataram', '1955-09-08', '1562898365Marzuqi.jpg', '2019-07-12 02:26:05'),
(16, 3, '196008031991031002', 'hakimpta', 'Drs.H.Nur Khazim, M.H.', 2147483647, 'Semarang', '1960-08-03', '1562898627nur.jpg', '2019-07-12 02:30:27'),
(17, 3, '195608131988031001', 'hakimpta', 'Drs.H.Hasan Bisri, S.H., M.H ', 8746834, 'Cirebon', '1956-08-13', '1562899236hasan.jpg', '2019-07-12 02:40:36'),
(18, 3, '195210051979031003', 'hakimpta', 'Drs.H.Ghufron Sulaiman, S.H.,M.Hum', 912039, 'Gresik', '1952-10-05', '1562899742Gufron.jpg', '2019-07-12 02:49:02'),
(19, 3, '195504101981031005', 'hakimpta', 'Drs.H. Abd. Munir, S.H', 91283, 'Pangkep', '1955-04-10', '1562899824munir.jpg', '2019-07-12 02:50:24'),
(20, 3, '195508041986031002', 'hakimpta', 'Drs.H.Muzni Ilyas, S.H., M.H', 12312, 'Bukit Tinggi', '1955-08-14', '1562901252muzni.jpg', '2019-07-12 03:14:12'),
(21, 3, '195207221981011001', 'hakimpta', 'Drs.H.Cholisin, S.H.,M.Hum ', 912830, 'Gresik', '1952-07-22', '1562901343cholisin.jpg', '2019-07-12 03:15:43'),
(22, 3, '195307151982031003', 'hakimpta', 'Drs.H.M. Roehan EL Ghani, S.H', 8901293, 'Magetan', '1953-07-15', '1562901429cholisin.jpg', '2019-07-12 03:17:09'),
(23, 3, '195504151982031001', 'hakimpta', 'Drs. H. Solihun, S.H.,M.H', 8901283, 'Banyuwangi', '1955-04-15', '1562901600Solihun.jpg', '2019-07-12 03:20:00'),
(24, 3, '195404021980031003', 'hakimpta', 'Drs.H.Asrofin Sahlan, S.H.,M.H', 9812937, 'Bojonegoro', '1954-04-02', '1562901867asrofin.jpg', '2019-07-12 03:24:28'),
(25, 3, '195303101979031003', 'hakimpta', 'Drs.H.Masruri Syuhadak, S.H.,M.H', 2147483647, 'Lamongan', '1953-03-10', '1562903040masruri.jpg', '2019-07-12 03:44:00'),
(26, 3, '195303251981031003', 'hakimpta', 'Drs. H. Imam Bahrun', 9120397, 'Ponorogo', '1953-03-25', '1562903113imam.jpg', '2019-07-12 03:45:13'),
(27, 3, '195212121981031007', 'hakimpta', 'Drs. H. Ashfari, S.H.,M.H', 98798, 'Ponorogo', '1952-12-12', '1562903622ashfari.jpg', '2019-07-12 03:53:42'),
(28, 3, '195210121978031003', 'hakimta', 'H.A. Afandi Zaini, S.H.,S.Ag.,M.M', 81293, 'Bangkalan', '1952-10-12', '1562903836afandi.jpg', '2019-07-12 03:57:16'),
(29, 3, '195305101981011001', 'hakimpta', 'Drs.H. Abdullah Cholil, M.Hum', 809128, 'Jember', '1953-05-10', '1562904026cholil.jpg', '2019-07-12 04:00:26'),
(30, 3, '195308141981031002', 'hakimpta', 'Drs.H Hadi Muhtarom, S.H', 98129308, 'Madiun', '1953-08-14', '1562904310hadi.jpg', '2019-07-12 04:05:10'),
(31, 3, '195208031980032001', 'hakimpta', 'Dra.Hj Ma\'fufah Shidqon, S.H.,M.H', 98129038, 'Tuban', '1952-08-03', '1562904394mafufah.jpg', '2019-07-12 04:06:34'),
(32, 3, '19541014.198603.1.001', 'hakimpta', 'Drs. H. Basuni, S.H.,M.H', 90989312, 'Sidoarjo', '1954-10-14', '1562904635basuni.jpg', '2019-07-12 04:10:35'),
(33, 3, '195208011980032002', 'hakimpta', 'Dra. Hj. Marwiyah', 9871293, 'Purworejo', '1952-08-01', '1562904922marwiyah.jpg', '2019-07-12 04:15:22'),
(34, 6, '19680109.199303.1.001', 'paniterapta', 'Dr. H. Didi Kusnadi, M.Ag.', 9812398, 'Majalengka', '1968-01-09', '1562905004didi.jpg', '2019-07-12 04:16:44'),
(35, 7, '195908251984032002', 'panmudpta', 'Dra. Hj. Chairussakinah Ady', 128397, 'surabaya', '1959-08-25', '1562905089sakinah.jpg', '2019-07-12 04:18:09'),
(36, 7, '19641025.199303.2.002', 'panmudpta', 'Dra.Hj.Suffana Qomah ', 908123, 'Gresik', '1964-10-25', '1562905157suffana.jpg', '2019-07-12 04:19:17'),
(37, 8, '196306171991031001', 'pppta', 'H.Mukalili, S.H. ', 2147483647, 'Surabaya', '1963-06-17', '1562905424mukalili.jpg', '2019-07-12 04:23:44'),
(38, 8, '196005301979032001', 'pppta', 'Hj. Melati Pudjiwiandari, S.H. ', 918239081, 'surabaya', '1960-05-03', '1562905612melati.jpg', '2019-07-12 04:26:52'),
(39, 8, '197105201994032004', 'pppta', 'Hj. Diah Anggraeni S.H.,M.H. ', 9218309, 'Surabaya', '1977-05-01', '1562905727diah.jpg', '2019-07-12 04:28:47'),
(40, 8, '195806171983031007', 'pppta', 'Masruchin, S.H. ', 918238, 'Jombang', '1958-06-17', '1562905807masruhin.jpg', '2019-07-12 04:30:07'),
(41, 8, '19630705.199303.2.003', 'pppta', 'Hj. Siti Rofi\'ah,S,H. ', 9812903, 'Blitar', '1963-07-05', '1562905896sitirofiah.jpg', '2019-07-12 04:31:36'),
(42, 8, '19740118.200212.2.002', 'pppta', 'Diana Kholidah,S.H., M.H. ', 98917237, 'Sampang', '1974-01-18', '1562906222diana.jpg', '2019-07-12 04:37:02'),
(43, 8, '19630822.199303.2.001', 'pppta', 'Dra.Sri Pratiwiningrum, M.HES ', 98123, 'Sidoarjo', '1963-08-22', '1562906276ningrum.jpg', '2019-07-12 04:37:56'),
(44, 8, '19710520.199403.2.004', 'pppta', 'Hj. Chalimah Tuzuhro S.H. ', 98219038, 'Surabaya', '1971-05-20', '1562906331chalimah.jpg', '2019-07-12 04:38:51'),
(45, 8, '196106081993031001', 'pppta', 'Drs. Sudarno, S.H. M.H ', 2147483647, 'Magetan', '1961-06-08', '1562906499sudarno.jpg', '2019-07-12 04:41:39'),
(46, 8, '19660503.200604.2.002', 'pppta', 'Hj. Sufa\'ah, S.Ag ', 9182390, 'Lamongan', '1966-05-03', '1562906553sufaah.jpg', '2019-07-12 04:42:33'),
(47, 8, '19760213.200904.2.001', 'pppta', 'Eva Ervina, S.E., S.H.', 90981823, 'Malang', '1973-02-09', '1562906640eva.jpg', '2019-07-12 04:44:00'),
(48, 4, '196306141990031001', 'sekretarispta', 'H. Agus Widyo Susanto, S.H., M.H. ', 901283, 'Malang', '1963-06-14', '1562906707agus.jpg', '2019-07-12 04:45:07'),
(49, 4, '197210211993031002', 'kabagpta', 'Maulana Musa Sugi Alam, S.H ', 878978, 'Pasuran', '1972-10-21', '1562906775musa.jpg', '2019-07-12 04:46:15'),
(50, 4, '19750128.200212.1.004', 'kabagpta', 'Mokhamad Kodi, S.H., M.H.', 2147483647, 'Jombang', '1975-01-28', '1562906921kodi.jpg', '2019-07-12 04:48:41'),
(51, 4, '19820205.200604.1.005', 'kasubpta', 'Rohmad Bahrudin, S.Kom.', 2147483647, 'Sidoarjo', '1982-02-05', '1562906992rahmat.jpg', '2019-07-12 04:49:52'),
(52, 4, '198110092009121003', 'kasubpta', 'Priyo Setiawan, S.Kom ', 89127389, 'Blitar', '1981-10-09', '1562912115priyo.jpg', '2019-07-12 06:15:15'),
(53, 4, '19750527.200912.1.002', 'kasubpta', 'Lukmanul Hakim, S.E., S.H. ', 9812093, 'Surabaya', '1975-05-27', '1562912191lukman.jpg', '2019-07-12 06:16:31'),
(54, 4, '19730103.200604.1.001', 'kasubpta', 'Rusmin Rapi, S.T ', 98120938, 'Ujung Pandang', '1973-01-03', '1562912258rusmin.jpg', '2019-07-12 06:17:39'),
(55, 5, '198707042012122001', 'stafpta', 'Argita Budi Mawarni, S.H. ', 91823908, 'Surabaya', '1987-07-04', '1562912599gita.jpg', '2019-07-12 06:23:19'),
(56, 5, '19860618.200904.2.015', 'stafpta', 'Irma Amalia, S.E.', 9128739, 'Semarang', '1986-07-18', '1562912649irma.jpg', '2019-07-12 06:24:09'),
(57, 5, '199106172015032001', 'stafpta', 'Ika Karlina,S,H. ', 918230981, 'Gowa', '1991-06-17', '1562912709ika.jpg', '2019-07-12 06:25:09'),
(58, 5, '198111252009121003', 'stafpta', 'Heri sulistiono, S.Kom ', 912839, 'Semarang', '1981-11-25', '1562912763', '2019-07-12 06:26:03'),
(59, 5, '198403152009122003', 'stafpta', 'Ana mutma\'inah A.md ', 91283091, 'Lamongan', '1982-03-15', '1562912817ana.jpg', '2019-07-12 06:26:57'),
(60, 5, '197810192011012005', 'stafpta', 'Isnayati, A.Md ', 8129738, 'Tembilahan', '1978-10-17', '1562912875isna.jpg', '2019-07-12 06:27:55'),
(61, 5, '198712162006041001', 'stafpta', 'Dimas Hirawan, S.H. ', 9081293, 'Jayapura', '1987-12-16', '1562912937dimas.jpg', '2019-07-12 06:28:57'),
(62, 5, '19840521.200912.2.003', 'stafpta', 'Lailiya Rahmah, A.Md ', 98123908, 'Sidoarjo', '1984-05-21', '1562913014lia.jpg', '2019-07-12 06:30:14'),
(63, 5, '199002032014031002', 'stafpta', 'Robi NAG,S,HI. ', 9128298, 'Kendal', '1990-02-03', '1562913079roby.jpg', '2019-07-12 06:31:19');

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
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

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
