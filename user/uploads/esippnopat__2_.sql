-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2021 at 04:12 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esippnopat`
--

-- --------------------------------------------------------

--
-- Table structure for table `hak_tanggungan`
--

CREATE TABLE `hak_tanggungan` (
  `id_ht` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nm_pemohon` varchar(100) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `jenis_sertif` varchar(100) NOT NULL,
  `no_sertif` varchar(20) NOT NULL,
  `alamat_sertif` text NOT NULL,
  `tipe_debt` varchar(50) NOT NULL,
  `nama_debt` varchar(100) NOT NULL,
  `npwp_debt` varchar(20) NOT NULL,
  `alamat_debt` text NOT NULL,
  `tipe_kredit` varchar(50) NOT NULL,
  `nama_kredit` varchar(100) NOT NULL,
  `npwp_kredit` varchar(20) NOT NULL,
  `berkedudukan` varchar(100) NOT NULL,
  `tgl_upload` date NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_size` int(20) NOT NULL,
  `file_type` varchar(20) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hak_tanggungan`
--

INSERT INTO `hak_tanggungan` (`id_ht`, `username`, `nm_pemohon`, `nik`, `jenis_sertif`, `no_sertif`, `alamat_sertif`, `tipe_debt`, `nama_debt`, `npwp_debt`, `alamat_debt`, `tipe_kredit`, `nama_kredit`, `npwp_kredit`, `berkedudukan`, `tgl_upload`, `file_name`, `file_size`, `file_type`, `status`) VALUES
(1, 'jae', 'DEA ROULY OKTARIA DAMANIK', '2171076910999002', 'Hak Milik', '', ' fkfsfdsfsdfndsdcdkncd', 'perorangan', 'cdcdc', '23423', 'sddsv', 'Badan Usaha', 'wqwd', 'sdsd', 'dsdasd', '2021-08-01', 'MTK29Juli_JaenardoAdrian_XIITKJ2.pdf', 837934, 'pdf', ''),
(2, 'jae', 'DEA ROULY OKTARIA DAMANIK', '22', 'Hak Milik Satuan Rumah Susun', '3293928u3', 'fsdfsd', 'perorangan', 'dsdsad', 'dwede', 'dqwewd', 'Badan Usaha', 'sdsd', 'sds', 'wewed', '2021-08-01', 'Presentasi_Magang__1___1_-5.pdf', 1274222, 'pdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `jual_beli`
--

CREATE TABLE `jual_beli` (
  `id_jb` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nm_penjual` varchar(100) NOT NULL,
  `nik_jual` varchar(20) NOT NULL,
  `alamat_jual` text NOT NULL,
  `nm_pembeli` varchar(100) NOT NULL,
  `nik_pembeli` varchar(20) NOT NULL,
  `alamat_pembeli` text NOT NULL,
  `jns_sertif` varchar(50) NOT NULL,
  `almt` text NOT NULL,
  `luas` varchar(100) NOT NULL,
  `hjb` varchar(50) NOT NULL,
  `tgl_upload` date NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_size` int(20) NOT NULL,
  `file_type` varchar(20) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jual_beli`
--

INSERT INTO `jual_beli` (`id_jb`, `username`, `nm_penjual`, `nik_jual`, `alamat_jual`, `nm_pembeli`, `nik_pembeli`, `alamat_pembeli`, `jns_sertif`, `almt`, `luas`, `hjb`, `tgl_upload`, `file_name`, `file_size`, `file_type`, `status`) VALUES
(1, 'jae', 'ALBERTUS ANDREJANTO', '2171', 'xssdd', 'sasda', '', '', 'Hak Guna Bangunan', 'dsasd', '90', '50.000.000', '2021-07-29', 'Gerak_Benda_dan_Makhluk_Hidup_di_Lingkungan_Sekitar.pdf', 151790, 'pdf', ''),
(2, 'jae', 'asa', 'dad', 'sadas', 'asdsa', 'dasd', 'dasd', 'Hak Guna Bangunan', 'das', '121', '12.113.132.131', '2021-07-29', 'Presentasi_Magang__1___1_.pdf', 1274222, 'pdf', ''),
(3, 'jae', 'yayaya', '976', 'fgf', 'gdf', '64554', 'fgfg', 'Hak Guna Bangunan', 'hgfhj', '70', '50.000.000', '2021-07-29', 'Gerak_Benda_dan_Makhluk_Hidup_di_Lingkungan_Sekitar-1.pdf', 151790, 'pdf', ''),
(4, 'jae', 'asa', 'dad', 'dcdds', 'fsdff', '32323', 'weefe', 'Hak Guna Bangunan', 'fdsfs', '23', '50.000.000', '2021-07-29', 'MAGANG_INDUSTRI_3311811027-revisi__1_-3.pdf', 2702051, 'pdf', ''),
(5, 'jae', 'asa', '976', 'tree', 'YAYASAN TUNAS KARYA', '323213', 'dfds', 'Hak Guna Bangunan', 'ed', '12', '50.000.000', '2021-07-29', 'Presentasi_Magang__1___1_-1.pdf', 1274222, 'pdf', ''),
(6, 'jae', 'ALBERTUS ANDREJANTO', '2171', 'piayu', 'YAYASAN TUNAS KARYA', '2171', 'dsdsd', 'Hak Milik', 'dde', '90', '50.000.000', '2021-07-30', 'E-Certificate_of_ACHIEVEMENT.pdf', 234796, 'pdf', ''),
(7, 'jae', 'asa', '2171', 'ggrt', 'gre', '2324343', 'dffg', 'Hak Guna Bangunan', 'rwfrw', '21', '50.000.000', '2021-07-30', 'E-Certificate_of_ACHIEVEMENT-1.pdf', 234796, 'pdf', ''),
(8, 'jae', 'ALBERTUS ANDREJANTO', '2171', 'batam ', 'YAYASAN TUNAS KARYA', 'dsadas', 'da,ndsjdsd', 'Hak Milik', 'dsas', '50', '35.000.000', '2021-08-01', 'E-Certificate_of_ACHIEVEMENT__1_-6.pdf', 236325, 'pdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komen` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `legalisasi`
--

CREATE TABLE `legalisasi` (
  `id_legal` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nm_pemohon` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `jenis_dok` text NOT NULL,
  `penerbit_dok` varchar(100) NOT NULL,
  `tgl_upload` date NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_size` int(20) NOT NULL,
  `file_type` varchar(20) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `legalisasi`
--

INSERT INTO `legalisasi` (`id_legal`, `username`, `nm_pemohon`, `nik`, `jenis_dok`, `penerbit_dok`, `tgl_upload`, `file_name`, `file_size`, `file_type`, `status`) VALUES
(1, 'jae', 'DEA ROULY OKTARIA DAMANIK', '2171076910999002', 'AKTE LAHIR', 'DISDUK', '2021-07-19', 'JADWAL_PERWALIAN_PRAUAS_GENAP_2021.pdf', 540357, 'pdf', 'jomblo'),
(2, 'jae', 'DEA ROULY OKTARIA DAMANIK', '2171076910999002', 'AKTE LAHIR', 'DISDUK', '2021-07-19', 'JADWAL_PERWALIAN_PRAUAS_GENAP_2021-1.pdf', 540357, 'pdf', ''),
(3, 'dea', 'dea', '22', 'AKTE nikah', 'kementrian agama', '2021-07-20', 'JADWAL_PERWALIAN_PRAUAS_GENAP_2021-2.pdf', 540357, 'pdf', ''),
(4, 'jae', 'yandre', '2193183197', 'kemenkumham', 'DISDUK', '2021-07-22', 'esippnopat__1_.sql', 10940, 'sql', ''),
(5, 'jae', 'jae', 'jasjasas', 'qwswand ', 'dasdcdaes', '2021-07-22', 'Presentasi_Magang__1_.pdf', 1274222, 'pdf', ''),
(7, 'jae', 'DEA ROULY OKTARIA DAMANIK', '2171076910999002', 'AKTE LAHIR', 'kementrian agama', '2021-07-30', 'E-Certificate_of_ACHIEVEMENT__1_-3.pdf', 236325, 'pdf', ''),
(8, 'jae', 'dea', 'fsf', 'AKTE LAHIR', 'kementrian agama', '2021-08-02', 'MAGANG_INDUSTRI_3311811027-revisi__1_-4.pdf', 2702051, 'pdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan`
--

CREATE TABLE `pelayanan` (
  `id_pel` varchar(10) NOT NULL,
  `nm_pel` varchar(50) NOT NULL,
  `biaya` varchar(50) NOT NULL,
  `durasi` varchar(50) NOT NULL,
  `syarat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelayanan`
--

INSERT INTO `pelayanan` (`id_pel`, `nm_pel`, `biaya`, `durasi`, `syarat`) VALUES
('NOT01', 'legalisasi', '200.000', '1 minggu', 'ktp , kk, surat yang ingin dilegalisasi '),
('NOT02', 'warmerking', '500.000', '2 minggu', 'ktp, kk, surat yang ingin diwarmerking, dokumen pendukung lainnya'),
('NOT03', 'uwto', 'jasa Rp.5.000.000', '6 bulan-1,5 tahun', 'KTP,KK,PL,sertifikat, SPJ&SKEP lama, IPH&faktur'),
('NOT04', 'pendirian', '500.000', '3 minggu', 'KTP, KK, NPWP pemegang saham,cap perusahaan, surat domisili \r\n'),
('NOT05', 'perubahan badan usaha', '400.000', '2 minggu', 'fotokopi kk, ktp, npwp pemegang saham, akta pendirian, SIUP, akta perubahan (jika ada)'),
('PPAT1', 'jualbeli', '2.000.000', '2 minggu', 'ktp, kk, npwp penjual dan pembeli; IPH sebelumnya, ajb sebelumya jika ada, PBB, spj-skep'),
('PPAT2', 'roya', '300.000', '2 minggu', 'ktp, npwp, kk, sertifikat, Akta Pemberian Hak Tanggungan, surat keterangan roya dari kreditur. '),
('PPAT3', 'pengecekan', ' 500.000 ', '1-7 hari', 'ktp, kk, sertifikat'),
('PPAT4', 'hak_tanggungan', '1.000.000', '3 minggu', 'ktp, kk, npwp, surat keterangan dari kreditur');

-- --------------------------------------------------------

--
-- Table structure for table `pendirian`
--

CREATE TABLE `pendirian` (
  `id_diri` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nm_badan` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `modal_awal` varchar(25) NOT NULL,
  `kbli` text NOT NULL,
  `np_saham1` varchar(50) NOT NULL,
  `ktp1` varchar(20) NOT NULL,
  `alamat1` varchar(50) NOT NULL,
  `modal1` varchar(25) NOT NULL,
  `npwp1` varchar(25) NOT NULL,
  `np_saham2` varchar(50) NOT NULL,
  `ktp2` varchar(20) NOT NULL,
  `alamat2` varchar(50) NOT NULL,
  `modal2` varchar(25) NOT NULL,
  `npwp2` varchar(25) NOT NULL,
  `tgl_upload` date NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_size` int(20) NOT NULL,
  `file_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendirian`
--

INSERT INTO `pendirian` (`id_diri`, `username`, `nm_badan`, `jenis`, `modal_awal`, `kbli`, `np_saham1`, `ktp1`, `alamat1`, `modal1`, `npwp1`, `np_saham2`, `ktp2`, `alamat2`, `modal2`, `npwp2`, `tgl_upload`, `file_name`, `file_size`, `file_type`) VALUES
(3, 'jae', 'PT MENCARI CINTA SEJATI', 'PT', '100.000.000', '21534', 'wawaaw', '121', 'wsasa', '750.000.000', '21121111', 'rwer', 'rweree', 'BT. AJI', '250.000.000', '212132', '2021-07-15', 'KBLI_2020__5_digit__New-4.pdf', 1045220, 'pdf'),
(4, 'jae', 'dfdgwr', 'PT', '100.000.000', '21313', 'DEA', 'dsff', 'frfr', '2.323.234.234', 'fvfve', 'fwefwe', '3232', 'fefrrt', '', 'ewrfewf', '2021-07-30', 'E-Certificate_of_ACHIEVEMENT__1_.pdf', 236325, 'pdf'),
(5, 'jae', 'dfdgwr', 'PT', '100.000.000', '21313', 'DEA', 'dsff', 'frfr', '2.323.234.234', 'fvfve', 'fwefwe', '3232', 'fefrrt', '', 'ewrfewf', '2021-07-30', 'E-Certificate_of_ACHIEVEMENT__1_-1.pdf', 236325, 'pdf'),
(6, 'jae', 'PT MENCARI CINTA SEJATI', 'CV', '300.000', 'ds', 'dsd', '423432', 'dsfvs', '123.243.231', 'fsdfsd', 'fsdf', 'dsfsd', 'ffsd', '21.232', '322', '2021-07-30', 'E-Certificate_of_ACHIEVEMENT-7.pdf', 234796, 'pdf');

-- --------------------------------------------------------

--
-- Table structure for table `pengecekan`
--

CREATE TABLE `pengecekan` (
  `id_cek` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nm_pemohon` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `no_sertifikat` varchar(25) NOT NULL,
  `jenis_sertif` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_upload` date NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_size` int(20) NOT NULL,
  `file_type` varchar(20) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengecekan`
--

INSERT INTO `pengecekan` (`id_cek`, `username`, `nm_pemohon`, `nik`, `no_sertifikat`, `jenis_sertif`, `alamat`, `tgl_upload`, `file_name`, `file_size`, `file_type`, `status`) VALUES
(1, 'jae', 'DEA ROULY OKTARIA DAMANIK', '2171076910999002', '3262081029371', 'Hak Milik', 'piayu', '2021-07-30', 'E-Certificate_of_ACHIEVEMENT-9.pdf', 234796, 'pdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `perubahan`
--

CREATE TABLE `perubahan` (
  `id_ubah` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nm_pemohon` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `nm_bdn_usaha` varchar(100) NOT NULL,
  `no_akta` varchar(50) NOT NULL,
  `alamat_kantor` text NOT NULL,
  `npwp_pt` varchar(20) NOT NULL,
  `jenis_perubahan` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_upload` date NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_size` int(20) NOT NULL,
  `file_type` varchar(20) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perubahan`
--

INSERT INTO `perubahan` (`id_ubah`, `username`, `nm_pemohon`, `jabatan`, `jenis`, `nm_bdn_usaha`, `no_akta`, `alamat_kantor`, `npwp_pt`, `jenis_perubahan`, `deskripsi`, `tgl_upload`, `file_name`, `file_size`, `file_type`, `status`) VALUES
(1, 'jae', 'dea', 'sds', 'CV', 'dsd', 'dasd', 'rtryt', 'rttry', 'Domisili PT', 'trttytr', '2021-07-16', 'KBLI_2020__5_digit__New-10.pdf', 1045220, 'pdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `roya`
--

CREATE TABLE `roya` (
  `id_roya` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nm_pemohon` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `no_sertifikat` varchar(25) NOT NULL,
  `no_ht` varchar(25) NOT NULL,
  `jenis_sertif` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_upload` date NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_size` int(20) NOT NULL,
  `file_type` varchar(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roya`
--

INSERT INTO `roya` (`id_roya`, `username`, `nm_pemohon`, `nik`, `no_sertifikat`, `no_ht`, `jenis_sertif`, `alamat`, `tgl_upload`, `file_name`, `file_size`, `file_type`, `status`) VALUES
(1, 'jae', 'DEA ROULY OKTARIA DAMANIK', '2171076910999002', '654321', '29317418120', 'Hak Guna Bangunan', 'da', '2021-07-30', 'E-Certificate_of_ACHIEVEMENT__1_-5.pdf', 236325, 'pdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` enum('admin','staff','klien') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `tgl_daftar`, `nama`, `email`, `username`, `password`, `level`) VALUES
(4, '2016-11-05', 'Tutorialweb', 'admin@tutorialweb.net', 'tutorialweb', 'c30b61ff99917c70e70a57d7c72ee621', 'admin'),
(12, '0000-00-00', 'admin', 'admin@gmail.com', 'admin', '0192023a7bbd73250516f069df18b500', 'klien'),
(13, '2021-06-23', 'DEA ROULY OKTARIA DAMANIK', 'deaoktaria814@gmail.com', 'dea', 'e4c3f224a956d5a5877a58a7be32e2a6', 'admin'),
(16, '2021-07-08', 'nesya', 'nesya@gmail.com', 'nesya', 'e839d3efe70382a4d0bc3ff100acfef9', 'klien'),
(17, '2021-07-08', 'jaenardo', 'jaenardodamanik04@gmail.com', 'jae', 'c29e78b96134e7df5e01c669fb1df1c5', 'klien'),
(18, '2021-07-18', 'nesya', 'nesya@gmail.com', 'dea', 'ed5b7ab83a1c502c6d5354669705b979', 'klien');

-- --------------------------------------------------------

--
-- Table structure for table `uwto`
--

CREATE TABLE `uwto` (
  `id_uwto` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nm_pemohon` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `no_pl` varchar(50) NOT NULL,
  `atasnama` varchar(50) NOT NULL,
  `luas` varchar(10) NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `no_sertifikat` varchar(25) NOT NULL,
  `tgl_akhir2` date NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `peruntukan` varchar(50) NOT NULL,
  `wilayah` varchar(100) NOT NULL,
  `tgl_upload` date NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_size` int(20) NOT NULL,
  `file_type` varchar(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uwto`
--

INSERT INTO `uwto` (`id_uwto`, `username`, `nm_pemohon`, `nik`, `no_pl`, `atasnama`, `luas`, `tgl_awal`, `tgl_akhir`, `no_sertifikat`, `tgl_akhir2`, `jenis`, `alamat`, `peruntukan`, `wilayah`, `tgl_upload`, `file_name`, `file_size`, `file_type`, `status`) VALUES
(6, 'jae', 'DEA ROULY OKTARIA DAMANIK', '2171076910999002', '1234521231134', 'eree', '20', '2021-07-15', '2021-07-23', 'adsdsd', '2021-07-24', 'Hak Guna Bangunan', 'dsddsd', 'perumahan', 'TANJUNG PIAYU', '2021-07-22', 'Presentasi_Magang__1_-1.pdf', 1274222, 'pdf', '');

-- --------------------------------------------------------

--
-- Table structure for table `warmerking`
--

CREATE TABLE `warmerking` (
  `id_war` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nm_pemohon` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `jenis_dok` varchar(100) NOT NULL,
  `penerbit_dok` varchar(100) NOT NULL,
  `deskripsi_dok` text NOT NULL,
  `tgl_upload` date NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_size` int(20) NOT NULL,
  `file_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warmerking`
--

INSERT INTO `warmerking` (`id_war`, `username`, `nm_pemohon`, `nik`, `jenis_dok`, `penerbit_dok`, `deskripsi_dok`, `tgl_upload`, `file_name`, `file_size`, `file_type`) VALUES
(1, 'jae', 'DEA ROULY OKTARIA DAMANIK', '2171076910999002', 'PERJANJIAN', 'DISDUK', 'MAU DIBUATKAN SURAT PERNJANJIAN KERJA ', '2021-07-22', 'Presentasi_Magang__1_-2.pdf', 1274222, 'pdf'),
(2, 'jae', 'dea', '22', 'AKTE nikah', 'kementrian agama', 'FFS', '2021-07-22', 'esippnopat__1_-1.sql', 10940, 'sql'),
(3, 'jae', 'DEA ROULY OKTARIA DAMANIK', '2171076910999002', 'AKTE LAHIR', 'kementrian agama', 'dsdd', '2021-07-30', 'E-Certificate_of_ACHIEVEMENT-5.pdf', 234796, 'pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hak_tanggungan`
--
ALTER TABLE `hak_tanggungan`
  ADD PRIMARY KEY (`id_ht`);

--
-- Indexes for table `jual_beli`
--
ALTER TABLE `jual_beli`
  ADD PRIMARY KEY (`id_jb`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komen`);

--
-- Indexes for table `legalisasi`
--
ALTER TABLE `legalisasi`
  ADD PRIMARY KEY (`id_legal`);

--
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`id_pel`);

--
-- Indexes for table `pendirian`
--
ALTER TABLE `pendirian`
  ADD PRIMARY KEY (`id_diri`);

--
-- Indexes for table `pengecekan`
--
ALTER TABLE `pengecekan`
  ADD PRIMARY KEY (`id_cek`);

--
-- Indexes for table `perubahan`
--
ALTER TABLE `perubahan`
  ADD PRIMARY KEY (`id_ubah`);

--
-- Indexes for table `roya`
--
ALTER TABLE `roya`
  ADD PRIMARY KEY (`id_roya`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uwto`
--
ALTER TABLE `uwto`
  ADD PRIMARY KEY (`id_uwto`);

--
-- Indexes for table `warmerking`
--
ALTER TABLE `warmerking`
  ADD PRIMARY KEY (`id_war`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hak_tanggungan`
--
ALTER TABLE `hak_tanggungan`
  MODIFY `id_ht` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jual_beli`
--
ALTER TABLE `jual_beli`
  MODIFY `id_jb` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komen` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `legalisasi`
--
ALTER TABLE `legalisasi`
  MODIFY `id_legal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pendirian`
--
ALTER TABLE `pendirian`
  MODIFY `id_diri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengecekan`
--
ALTER TABLE `pengecekan`
  MODIFY `id_cek` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `perubahan`
--
ALTER TABLE `perubahan`
  MODIFY `id_ubah` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roya`
--
ALTER TABLE `roya`
  MODIFY `id_roya` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `uwto`
--
ALTER TABLE `uwto`
  MODIFY `id_uwto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `warmerking`
--
ALTER TABLE `warmerking`
  MODIFY `id_war` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
