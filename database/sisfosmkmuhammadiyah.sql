-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 03:50 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfosmkmuhammadiyah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(2) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `nama_lengkap` text DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `blokir` enum('Ya','Tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`, `alamat`, `no_telp`, `email`, `blokir`) VALUES
(1, 'admin', '$2y$10$xEBV/x3pLGd4Aw4J/H4sn.BB8ssrN9lIEIhIwg17ihgPwncr6o5zG', 'Administrator', 'Admin Jalan Oke', '08151515', 'admin@admin.com', 'Tidak'),
(2, 'ngadiminUpdate', '$2y$10$548.W4rQrfURL9fxFDbrKumFXkOs4RuACLs0KEl1sV4KN9daWuMRG', 'Admin Website', 'Ngadimin Aja', '087184848', 'rahmat123@gmail.com', 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id_agama` int(11) NOT NULL,
  `keterangan` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id_agama`, `keterangan`) VALUES
(1, 'Katholik'),
(2, 'Kristen'),
(3, 'Budha'),
(4, 'Hindu'),
(5, 'Konghucu'),
(6, 'Islam');

-- --------------------------------------------------------

--
-- Table structure for table `analisis`
--

CREATE TABLE `analisis` (
  `id_analis` int(11) NOT NULL,
  `id_ujian` int(11) DEFAULT NULL,
  `id_soal` int(11) DEFAULT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `jawaban` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `analisis`
--

INSERT INTO `analisis` (`id_analis`, `id_ujian`, `id_soal`, `id_siswa`, `jawaban`) VALUES
(1, 2, 1, 1, 3),
(2, 2, 2, 1, 4),
(3, 2, 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `analisis_essay`
--

CREATE TABLE `analisis_essay` (
  `id_analisis_essay` int(11) NOT NULL,
  `id_ujian` int(11) NOT NULL,
  `id_soal_essay` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `analisis_essay`
--

INSERT INTO `analisis_essay` (`id_analisis_essay`, `id_ujian`, `id_soal_essay`, `id_siswa`, `jawaban`) VALUES
(1, 2, 1, 1, 'oke oce sip deh');

-- --------------------------------------------------------

--
-- Table structure for table `bursa`
--

CREATE TABLE `bursa` (
  `id_bursa` int(11) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `id_bursa_pic` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bursa`
--

INSERT INTO `bursa` (`id_bursa`, `keterangan`, `id_bursa_pic`) VALUES
(1, 'Adalah Lembaga yang menjalankan fungsi mempertemukan / memfasilitasi pertemuan antara pencari kerja dengan pengguna tenaga kerja untuk ditempatkan melalui sistem antar kerja. BKK SMK Muhammadiyah 1 Purbalingga maupun dari Lulusan dari sekolah lain untuk ditempatkan di perusahaan - perusahaan ternama.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bursa_pic`
--

CREATE TABLE `bursa_pic` (
  `id_bursa_pic` int(11) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `file` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bursa_pic`
--

INSERT INTO `bursa_pic` (`id_bursa_pic`, `keterangan`, `file`) VALUES
(1, 'Seleksi Kerja 1', 'eskul-2021-03-02_20_03_03.jpg'),
(2, 'Seleksi Kerja 2', 'bursa-2021-03-02_18_03_46.jpg'),
(3, 'Pemberangkatan', 'bursa-2021-03-02_18_03_46.jpg'),
(4, 'Penempatan', 'bursa-2021-03-02_18_03_46.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakul`
--

CREATE TABLE `ekstrakul` (
  `id_eskul` int(11) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `file` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ekstrakul`
--

INSERT INTO `ekstrakul` (`id_eskul`, `keterangan`, `file`) VALUES
(1, 'Ikatan Pelajar Muhammadiyah', 'eskul-2021-03-02_18_03_08.jpg'),
(2, 'Pramuka / Hisbul Wathan', 'eskul-2021-03-02_18_03_46.jpg'),
(3, 'Palang Merah Remaja', 'eskul-2021-03-02_18_03_08.jpg'),
(4, 'Tapak Suci', 'eskul-2021-03-02_18_03_08.jpg'),
(5, 'Paskibraka', 'eskul-2021-03-02_18_03_08.jpg'),
(6, 'Desain Grafis', 'eskul-2021-03-02_18_03_08.jpg'),
(7, 'Musik', 'eskul-2021-03-02_18_03_08.jpg'),
(8, 'Tahfidzul Quran', 'eskul-2021-03-02_18_03_08.jpg'),
(9, 'English Club', 'eskul-2021-03-02_18_03_08.jpg'),
(10, 'Panahan', 'eskul-2021-03-02_18_03_08.jpg'),
(11, 'Kelas Wirausaha', 'eskul-2021-03-02_18_03_08.jpg'),
(12, 'Motorcross', 'eskul-2021-03-02_18_03_08.jpg'),
(13, 'Futsal', 'eskul-2021-03-02_18_03_08.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `file_materi`
--

CREATE TABLE `file_materi` (
  `id_materi` int(7) NOT NULL,
  `judul` text DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_mata_pelajaran` int(11) DEFAULT NULL,
  `nama_file` varchar(64) DEFAULT NULL,
  `tgl_posting` date DEFAULT NULL,
  `pembuat` int(11) DEFAULT NULL,
  `hits` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file_materi`
--

INSERT INTO `file_materi` (`id_materi`, `judul`, `id_kelas`, `id_mata_pelajaran`, `nama_file`, `tgl_posting`, `pembuat`, `hits`) VALUES
(1, 'Tutorial Virtualisasi Operating System Linux Update', 1, 1, 'document-1-2021-01-27_20_01_58.pdf', '2021-01-27', 1, 27),
(2, '2', 1, 1, 'document-1-2021-01-27_20_01_58.pdf', '2021-01-27', 1, 27),
(3, '3', 1, 1, 'document-1-2021-01-27_20_01_58.pdf', '2021-01-27', 1, 28),
(4, '4', 1, 1, 'document-1-2021-01-27_20_01_58.pdf', '2021-01-27', 1, 28),
(5, 'Tutorial Virtualisasi Operating System Linux Update', 1, 1, 'document-1-2021-01-27_20_01_58.pdf', '2021-01-27', 1, 27),
(6, 'Tutorial Virtualisasi Operating System Linux Update', 1, 1, 'document-1-2021-01-27_20_01_58.pdf', '2021-01-27', 1, 27),
(7, 'Tutorial Virtualisasi Operating System Linux Update', 1, 1, 'document-1-2021-01-27_20_01_58.pdf', '2021-01-27', 1, 27),
(8, 'Tutorial Virtualisasi Operating System Linux Update', 1, 1, 'document-1-2021-01-27_20_01_58.pdf', '2021-01-27', 1, 27),
(9, 'Tutorial Virtualisasi Operating System Linux Update', 1, 1, 'document-1-2021-01-27_20_01_58.pdf', '2021-01-27', 1, 27);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `keterangan` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `keterangan`) VALUES
(1, 'X'),
(2, 'XI'),
(3, 'XII');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_detail`
--

CREATE TABLE `kelas_detail` (
  `id_kelas_detail` int(11) NOT NULL,
  `kelas` int(11) DEFAULT NULL,
  `wali_kelas` int(11) DEFAULT NULL,
  `ketua_kelas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas_detail`
--

INSERT INTO `kelas_detail` (`id_kelas_detail`, `kelas`, `wali_kelas`, `ketua_kelas`) VALUES
(3, 1, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `kelas_tugas`
--

CREATE TABLE `kelas_tugas` (
  `id_kelas_tugas` int(11) NOT NULL,
  `id_topik` int(3) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `aktif` enum('Ya','Tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `master_pelajaran`
--

CREATE TABLE `master_pelajaran` (
  `id_mapel` int(11) NOT NULL,
  `mapel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_pelajaran`
--

INSERT INTO `master_pelajaran` (`id_mapel`, `mapel`) VALUES
(1, 'Pemrograman Dasar'),
(2, 'Sistem Operasi'),
(3, 'Bahasa Indonesia'),
(4, 'Bahasa Inggris');

-- --------------------------------------------------------

--
-- Table structure for table `mengajar`
--

CREATE TABLE `mengajar` (
  `id_mengajar` int(11) NOT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `id_pengajar` int(11) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mengajar`
--

INSERT INTO `mengajar` (`id_mengajar`, `nama`, `id_pengajar`, `id_kelas`, `deskripsi`) VALUES
(1, '4', 1, 1, 'Mengajar Dari Jam 08.00 - 09.30');

-- --------------------------------------------------------

--
-- Table structure for table `mitrabkk`
--

CREATE TABLE `mitrabkk` (
  `id_mitra` int(11) NOT NULL,
  `nama_mitra` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mitrabkk`
--

INSERT INTO `mitrabkk` (`id_mitra`, `nama_mitra`) VALUES
(1, 'PT HONDA PROSPECT MOTOR (PT. HPM)'),
(2, 'PT. ASTRA HONDA MOTOR'),
(3, 'PT. SUZUKI SMG SUNTER'),
(4, 'PT. YAMAHA INDONESIA MANUFACTURING'),
(5, 'PT. OSHUNG CIKARANG '),
(6, 'PT. LG INNOTECT'),
(7, 'PT. OPPO TANGERANG'),
(8, 'PT. PRAKASA ALAM SEGAR'),
(9, 'PT. ASABA CKRNG'),
(10, 'PT. SHOPEE SUNTER'),
(11, 'PT. VIVO TANGERANG'),
(12, 'PT. EPSON CIKARANG'),
(13, 'PT. CHEMCO');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_tq` int(11) NOT NULL,
  `jawaban` text NOT NULL,
  `sisa_waktu` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `jml_benar` int(5) DEFAULT NULL,
  `jml_kosong` int(5) DEFAULT NULL,
  `jml_salah` int(5) DEFAULT NULL,
  `nilai` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_siswa`, `id_tq`, `jawaban`, `sisa_waktu`, `waktu_selesai`, `jml_benar`, `jml_kosong`, `jml_salah`, `nilai`) VALUES
(1, 1, 2, '0', '00:00:00', '15:22:25', 0, 0, 3, '30'),
(2, 1, 3, '0', '00:10:00', '14:18:51', 0, 0, 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE `pengajar` (
  `id_pengajar` int(3) NOT NULL,
  `nip` char(12) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `username_login` varchar(20) NOT NULL,
  `password_login` text NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki - Laki','Perempuan') NOT NULL,
  `agama` varchar(20) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `email` text NOT NULL,
  `foto` text NOT NULL,
  `blokir` enum('Ya','Tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`id_pengajar`, `nip`, `nama_lengkap`, `username_login`, `password_login`, `alamat`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `no_telp`, `email`, `foto`, `blokir`) VALUES
(1, '121222212', 'Rudi Pengajar Update', 'pengajar', '$2y$10$1GnBVF6LY5k9eHDil0Ict.dP4rDS/dVcBAk37nCyV0/hXu3dgdrPi', 'Jl Kebayoran Baru Jakarta Selatan', 'Asahan', '1978-11-03', 'Laki - Laki', '1', '08121212121', 'rudi@gmail.com', 'Pengajar-Rudi_Pengajar_Update-2021-01-27_17_01_42.jpg', 'Tidak'),
(2, '12121212', 'Testing Guru Update', 'testing', '$2y$10$pCCInN60VaCZjLsNn3dd7ewvkkKkhl/yImDaG56Z/r0C12xSz.jly', 'Admin', 'Admin', '2021-01-26', 'Laki - Laki', '3', '081515151', 'tst@test.com', 'pengajar-Testing_Guru-2021-01-26_21_01_54.jpg', 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `sarana_prasarana`
--

CREATE TABLE `sarana_prasarana` (
  `id_prasara` int(11) NOT NULL,
  `keterangan` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sarana_prasarana`
--

INSERT INTO `sarana_prasarana` (`id_prasara`, `keterangan`) VALUES
(1, 'Ruang Kelas Nyaman berbasis multimedia dan LCD Proyektor'),
(2, 'Lab. Akuntansi dan Keuangan Lembaga'),
(3, 'Lab. Otomatisasi dan Tata Kelola Perkantoran'),
(4, 'Lab. Teknik Komputer dan Jaringan'),
(5, 'Lab. Fiber Optik Telkom'),
(6, 'Lab. Multimedia'),
(7, 'Lab. Bahasa'),
(8, 'Lab. Kewirausahaan'),
(9, 'Lab. Bengkel Otomotif TKRO'),
(10, 'Lab. Bengkel Otomotif TBSM'),
(11, 'Studio Musik'),
(12, 'Bursa Kerja Khusus (BKK)'),
(13, 'Fotocopy Center'),
(14, 'Mini Market One Mart'),
(15, 'Bank Surya Artha'),
(16, 'Perpustakaan'),
(17, 'Hotspot Area'),
(18, 'Lapangan Olahraga'),
(19, 'Unit Kesehatan Sekolah'),
(20, 'Test 1');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(9) NOT NULL,
  `nis` varchar(20) DEFAULT NULL,
  `nama_lengkap` text DEFAULT NULL,
  `username_login` varchar(20) DEFAULT NULL,
  `password_login` text DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tempat_lahir` varchar(25) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('Laki - Laki','Perempuan') DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `nama_ayah` text DEFAULT NULL,
  `nama_ibu` text DEFAULT NULL,
  `th_masuk` int(4) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `blokir` enum('Ya','Tidak') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `nama_lengkap`, `username_login`, `password_login`, `id_kelas`, `alamat`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `nama_ayah`, `nama_ibu`, `th_masuk`, `email`, `no_telp`, `foto`, `blokir`) VALUES
(1, '121212121', 'Rudi Siswanto', 'siswa', '$2y$10$g9Nq7ID72RSVocYK7IZzLeB379YNZD7wGi/kiUH8Fia.hDuOu905m', 1, 'Jalan Kebayoran Terlalu Lama', 'Cirebon', '2001-01-06', 'Perempuan', '2', 'Rido Suroyo', 'Suryati', 2020, 'siswan@gmail.com', '081525188', 'siswa-Siduarta-2021-01-23_19_01_00.jpg', 'Tidak'),
(2, '121212121', 'Rudi Siswanto1', 'siswa1', '$2y$10$b4Z.erGj4AQksc50vz6YROg6L3fpivli//6OyPmzFTYeKGTXWnpkW', 1, 'Jalan Kebayoran Terlalu Lama', 'Cirebon', '2001-01-06', 'Perempuan', '2', 'Rido Suroyo1', 'Suryati1', 2020, 'siswan1@gmail.com', '081525188', 'siswa-Siduarta-2021-01-23_19_01_00.jpg', 'Tidak'),
(3, '121212121', 'Rudi Siswanto2', 'siswa2', '$2y$10$b4Z.erGj4AQksc50vz6YROg6L3fpivli//6OyPmzFTYeKGTXWnpkW', 1, 'Jalan Kebayoran Terlalu Lama', 'Cirebon', '2001-01-06', 'Perempuan', '2', 'Rido Suroyo2', 'Suryati2', 2020, 'siswan2@gmail.com', '081525188', 'siswa-Siduarta-2021-01-23_19_01_00.jpg', 'Tidak'),
(4, '121212121', 'Rudi Siswanto3', 'siswa3', '$2y$10$b4Z.erGj4AQksc50vz6YROg6L3fpivli//6OyPmzFTYeKGTXWnpkW', 1, 'Jalan Kebayoran Terlalu Lama', 'Cirebon', '2001-01-06', 'Perempuan', '2', 'Rido Suroyo2', 'Suryati2', 2020, 'siswan2@gmail.com', '081525188', 'siswa-Siduarta-2021-01-23_19_01_00.jpg', 'Tidak'),
(5, '121212121', 'Rudi Siswanto4', 'siswa4', '$2y$10$b4Z.erGj4AQksc50vz6YROg6L3fpivli//6OyPmzFTYeKGTXWnpkW', 1, 'Jalan Kebayoran Terlalu Lama', 'Cirebon', '2001-01-06', 'Perempuan', '2', 'Rido Suroyo2', 'Suryati2', 2020, 'siswan2@gmail.com', '081525188', 'siswa-Siduarta-2021-01-23_19_01_00.jpg', 'Tidak'),
(6, '121212121', 'Rudi Siswanto5', 'siswa6', '$2y$10$b4Z.erGj4AQksc50vz6YROg6L3fpivli//6OyPmzFTYeKGTXWnpkW', 1, 'Jalan Kebayoran Terlalu Lama', 'Cirebon', '2001-01-06', 'Perempuan', '2', 'Rido Suroyo2', 'Suryati2', 2020, 'siswan2@gmail.com', '081525188', 'siswa-Siduarta-2021-01-23_19_01_00.jpg', 'Tidak'),
(7, '121212121', 'Rudi Siswanto6', 'siswa7', '$2y$10$b4Z.erGj4AQksc50vz6YROg6L3fpivli//6OyPmzFTYeKGTXWnpkW', 1, 'Jalan Kebayoran Terlalu Lama', 'Cirebon', '2001-01-06', 'Perempuan', '2', 'Rido Suroyo2', 'Suryati2', 2020, 'siswan2@gmail.com', '081525188', 'siswa-Siduarta-2021-01-23_19_01_00.jpg', 'Tidak'),
(8, '121212121', 'Rudi Siswanto7', 'siswa8', '$2y$10$b4Z.erGj4AQksc50vz6YROg6L3fpivli//6OyPmzFTYeKGTXWnpkW', 1, 'Jalan Kebayoran Terlalu Lama', 'Cirebon', '2001-01-06', 'Perempuan', '2', 'Rido Suroyo2', 'Suryati2', 2020, 'siswan2@gmail.com', '081525188', 'siswa-Siduarta-2021-01-23_19_01_00.jpg', 'Tidak'),
(9, '121212121', 'Rudi Siswanto8', 'siswa9', '$2y$10$b4Z.erGj4AQksc50vz6YROg6L3fpivli//6OyPmzFTYeKGTXWnpkW', 1, 'Jalan Kebayoran Terlalu Lama', 'Cirebon', '2001-01-06', 'Perempuan', '2', 'Rido Suroyo2', 'Suryati2', 2020, 'siswan2@gmail.com', '081525188', 'siswa-Siduarta-2021-01-23_19_01_00.jpg', 'Tidak'),
(10, '121222211', 'Siduarta', 'siduarta', '$2y$10$jE4ZkVkBQ5N2nX/Pied0qecznJHPQTcvCVdHnzyDSJWeUC0cVgcAS', 3, 'Jalan Sidorajo Timur Raya Nomor 21 O Kapuas Barat, Sulawesi Tenggara, Indonesia', 'Kapuas', '1984-08-16', 'Laki - Laki', '3', 'Sidoreta', 'Sidorati', 2019, 'test@test.com', '081505215', 'siswa-Siduarta-2021-01-23_19_01_00.jpg', 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL,
  `id_tq` int(3) DEFAULT NULL,
  `soal` text DEFAULT NULL,
  `pilihan_1` text DEFAULT NULL,
  `pilihan_2` text DEFAULT NULL,
  `pilihan_3` text DEFAULT NULL,
  `pilihan_4` text DEFAULT NULL,
  `pilihan_5` text DEFAULT NULL,
  `jawaban` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `id_tq`, `soal`, `pilihan_1`, `pilihan_2`, `pilihan_3`, `pilihan_4`, `pilihan_5`, `jawaban`) VALUES
(1, 2, 'Sebutkan OS Bukan Linux', 'Red Hat', 'SuSe', 'Mint', 'Debian', 'Mac', 5),
(2, 2, 'Siapakah Pencipta Operating Sistem Linux', 'Bill Gates', 'Steve Jobs', 'Linus Troval', 'Jack Ma', 'Elon Musk', 3),
(3, 2, 'Testing Soal 3', 'a', 'b', 'c', 'd', 'e', 2),
(6, 3, 'Test 1', 'a', 'b', 'c', 'd', 'e', 4);

-- --------------------------------------------------------

--
-- Table structure for table `soal_essay`
--

CREATE TABLE `soal_essay` (
  `id_soal_essay` int(11) NOT NULL,
  `id_tq` int(3) DEFAULT NULL,
  `isi_soal` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soal_essay`
--

INSERT INTO `soal_essay` (`id_soal_essay`, `id_tq`, `isi_soal`) VALUES
(1, 2, 'Jelaskan Pengeritan Dari OS'),
(2, 3, 'oke oce');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testi` int(11) NOT NULL,
  `id_siswa` int(11) DEFAULT NULL,
  `judul` varchar(128) DEFAULT NULL,
  `konten` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testi`, `id_siswa`, `judul`, `konten`) VALUES
(1, 1, 'Semangat', 'Oke Oce Sip GPP Gua Ganteng Kok'),
(2, 2, 'Semangat Aja Ya', 'Oke Oce Sip GPP Gua Ganteng Kok Ngikut Atas'),
(3, 1, 'SMK Oke', 'Oke Oce Deh');

-- --------------------------------------------------------

--
-- Table structure for table `topik_quiz`
--

CREATE TABLE `topik_quiz` (
  `id_tq` int(3) NOT NULL,
  `judul` text DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_mata_pelajaran` int(11) DEFAULT NULL,
  `tgl_buat` date DEFAULT NULL,
  `pembuat` int(11) DEFAULT NULL,
  `waktu_mengerjakan` time NOT NULL,
  `info` text DEFAULT NULL,
  `terbit` enum('Ya','Tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topik_quiz`
--

INSERT INTO `topik_quiz` (`id_tq`, `judul`, `id_kelas`, `id_mata_pelajaran`, `tgl_buat`, `pembuat`, `waktu_mengerjakan`, `info`, `terbit`) VALUES
(2, 'Virtualisasi VM Ware VSphere', 1, 2, '2021-01-29', 1, '01:15:00', 'Silahkan Di Kerjakan Boleh Melihat Google', 'Ya'),
(3, 'Merancang Bundling OS', 3, 2, '2021-01-31', 1, '00:10:00', 'Test', 'Ya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `analisis`
--
ALTER TABLE `analisis`
  ADD PRIMARY KEY (`id_analis`);

--
-- Indexes for table `analisis_essay`
--
ALTER TABLE `analisis_essay`
  ADD PRIMARY KEY (`id_analisis_essay`);

--
-- Indexes for table `bursa`
--
ALTER TABLE `bursa`
  ADD PRIMARY KEY (`id_bursa`);

--
-- Indexes for table `bursa_pic`
--
ALTER TABLE `bursa_pic`
  ADD PRIMARY KEY (`id_bursa_pic`);

--
-- Indexes for table `ekstrakul`
--
ALTER TABLE `ekstrakul`
  ADD PRIMARY KEY (`id_eskul`);

--
-- Indexes for table `file_materi`
--
ALTER TABLE `file_materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `kelas_detail`
--
ALTER TABLE `kelas_detail`
  ADD PRIMARY KEY (`id_kelas_detail`);

--
-- Indexes for table `kelas_tugas`
--
ALTER TABLE `kelas_tugas`
  ADD PRIMARY KEY (`id_kelas_tugas`);

--
-- Indexes for table `master_pelajaran`
--
ALTER TABLE `master_pelajaran`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `mengajar`
--
ALTER TABLE `mengajar`
  ADD PRIMARY KEY (`id_mengajar`);

--
-- Indexes for table `mitrabkk`
--
ALTER TABLE `mitrabkk`
  ADD PRIMARY KEY (`id_mitra`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id_pengajar`);

--
-- Indexes for table `sarana_prasarana`
--
ALTER TABLE `sarana_prasarana`
  ADD PRIMARY KEY (`id_prasara`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `soal_essay`
--
ALTER TABLE `soal_essay`
  ADD PRIMARY KEY (`id_soal_essay`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testi`);

--
-- Indexes for table `topik_quiz`
--
ALTER TABLE `topik_quiz`
  ADD PRIMARY KEY (`id_tq`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id_agama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `analisis`
--
ALTER TABLE `analisis`
  MODIFY `id_analis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `analisis_essay`
--
ALTER TABLE `analisis_essay`
  MODIFY `id_analisis_essay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bursa`
--
ALTER TABLE `bursa`
  MODIFY `id_bursa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bursa_pic`
--
ALTER TABLE `bursa_pic`
  MODIFY `id_bursa_pic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ekstrakul`
--
ALTER TABLE `ekstrakul`
  MODIFY `id_eskul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `file_materi`
--
ALTER TABLE `file_materi`
  MODIFY `id_materi` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelas_detail`
--
ALTER TABLE `kelas_detail`
  MODIFY `id_kelas_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelas_tugas`
--
ALTER TABLE `kelas_tugas`
  MODIFY `id_kelas_tugas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_pelajaran`
--
ALTER TABLE `master_pelajaran`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mengajar`
--
ALTER TABLE `mengajar`
  MODIFY `id_mengajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mitrabkk`
--
ALTER TABLE `mitrabkk`
  MODIFY `id_mitra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `id_pengajar` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sarana_prasarana`
--
ALTER TABLE `sarana_prasarana`
  MODIFY `id_prasara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `soal_essay`
--
ALTER TABLE `soal_essay`
  MODIFY `id_soal_essay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `topik_quiz`
--
ALTER TABLE `topik_quiz`
  MODIFY `id_tq` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
