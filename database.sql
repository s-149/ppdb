-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Agu 2021 pada 16.48
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `Nik_Pengajar` varchar(30) NOT NULL,
  `Tanggal_ditetapkan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`Nik_Pengajar`, `Tanggal_ditetapkan`) VALUES
('1758760661200032', '2021-03-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `asal_mula_siswa`
--

CREATE TABLE `asal_mula_siswa` (
  `Nik_Siswa` varchar(30) NOT NULL,
  `Masuk_Ke_Sekolah_Ini_Sebagai` enum('murid baru') NOT NULL,
  `Asal_Mula_Sekolah_Anak` varchar(50) NOT NULL,
  `Nama_Pendidikan_Sebelumnya` varchar(50) NOT NULL,
  `Pindahan_Dari` varchar(150) NOT NULL,
  `Nisn` varchar(50) NOT NULL,
  `Dari_Tingkat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `baner`
--

CREATE TABLE `baner` (
  `id` int(11) NOT NULL,
  `Fhoto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `baner`
--

INSERT INTO `baner` (`id`, `Fhoto`) VALUES
(3, 'baner_03_Mar_2021_08_19_01_baner.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `Fhoto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `Fhoto`) VALUES
(1, 'galeri_03_Mar_2021_08_18_03_baner.jpg'),
(3, 'galeri_03_Mar_2021_08_26_43_banner.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelengkapan_data`
--

CREATE TABLE `kelengkapan_data` (
  `id` int(11) NOT NULL,
  `Nik_Siswa` varchar(30) NOT NULL,
  `Fhoto` varchar(225) NOT NULL,
  `Tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelengkapan_data`
--

INSERT INTO `kelengkapan_data` (`id`, `Nik_Siswa`, `Fhoto`, `Tanggal`) VALUES
(1, '1234', 'kelengkapan_data_03_Mar_2021_02_51_44_anonymous.jpg', '0000-00-00 00:00:00'),
(4, '1234', 'kelengkapan_data_04_Mar_2021_03_51_23_1.jpeg', '2021-03-04 09:51:23'),
(6, '12345678', '07_Jul_2021_12_04_42_1.jpeg', '2021-07-07 17:04:42'),
(7, '1112320200842000025', '11_Aug_2021_06_44_48_IMPLEMENTASI FUZYLOGIC.png', '2021-08-11 11:44:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepala_sekolah`
--

CREATE TABLE `kepala_sekolah` (
  `Nik_Pengajar` varchar(30) NOT NULL,
  `Periode` varchar(30) NOT NULL,
  `Tanggal_ditetapkan` varchar(30) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kepala_sekolah`
--

INSERT INTO `kepala_sekolah` (`Nik_Pengajar`, `Periode`, `Tanggal_ditetapkan`, `Status`) VALUES
('1736754656200052', '2026-2030', '2021-06-23', ''),
('7337748651300073', '2020-2025', '0001-01-01', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `Fhoto` varchar(225) NOT NULL,
  `Tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `logo`
--

INSERT INTO `logo` (`id`, `Fhoto`, `Tanggal`) VALUES
(5, 'logo.jpg', '2021-06-25 14:44:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orang_tua_siswa`
--

CREATE TABLE `orang_tua_siswa` (
  `Nik_Siswa` varchar(30) NOT NULL,
  `Nik_Ayah` varchar(30) NOT NULL,
  `Nama_Ayah` varchar(150) NOT NULL,
  `Pendidikan_Tertinggi_Ayah` varchar(100) NOT NULL,
  `Pekerjaan_Ayah` varchar(150) NOT NULL,
  `Nik_ibu` int(30) NOT NULL,
  `Nama_Ibu` varchar(150) NOT NULL,
  `Pendidikan_Tertinggi_Ibu` varchar(100) NOT NULL,
  `Pekerjaan_Ibu` varchar(150) NOT NULL,
  `Nama_Wali_Murid` varchar(150) NOT NULL,
  `Pendidikan_Tertinggi_Wali_Murid` varchar(100) NOT NULL,
  `Hubungan_Terhadap_Anak` varchar(150) NOT NULL,
  `Pekerjaan_Wali_Murid` varchar(150) NOT NULL,
  `No_KK` varchar(50) NOT NULL,
  `No_Hp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajar`
--

CREATE TABLE `pengajar` (
  `Nik_Pengajar` varchar(30) NOT NULL,
  `Nip` varchar(30) NOT NULL,
  `Nama_Pengajar` varchar(150) NOT NULL,
  `JK` varchar(1) NOT NULL,
  `Tempat_Lahir` varchar(100) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Alamat` text NOT NULL,
  `No_Hp` varchar(14) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Fungsi` enum('pengajar','staff') NOT NULL,
  `Jabatan` varchar(50) NOT NULL,
  `TA` varchar(30) NOT NULL,
  `Fhoto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengajar`
--

INSERT INTO `pengajar` (`Nik_Pengajar`, `Nip`, `Nama_Pengajar`, `JK`, `Tempat_Lahir`, `Tanggal_Lahir`, `Alamat`, `No_Hp`, `Status`, `Fungsi`, `Jabatan`, `TA`, `Fhoto`) VALUES
('1139748650300093', '1139748650300093', 'Lilis Lisnawati, S.Pd.I', 'P', 'Sukabumi', '1970-07-08', '0', '0852-8932-9123', 'aktif', 'pengajar', 'Guru Kelas', '0', ''),
('1234', '000123', 'sabar', 'L', 'sukabumi', '2021-08-18', 'abc', '08999', 'aktif', 'pengajar', 'pengajar', '2021', ''),
('1333763664300053', '1333763664300053', 'Mella Octora, S.Pd.Sd', 'P', 'Sukabumi', '1985-10-01', '0', '0', 'aktif', 'pengajar', 'Guru Kelas', '0', ''),
('1736754656200052', '1736754656200052', 'Ari Heriawan Mustopa', 'L', 'Sukabumi', '1976-04-04', '0', '0', 'aktif', 'staff', 'Staff TU', '0', ''),
('1758760661200032', '1758760661200032', 'Hilman Malsen, S.Pd.', 'L', 'Sukabumi', '1982-04-26', '0', '0', 'aktif', 'staff', 'OPM', '0', ''),
('1953757659300032', '1953757659300032', 'Ai Rosmiati, S.Pd.I', 'P', 'Sukabumi', '1979-06-21', '0\r\n', '0', 'aktif', 'pengajar', 'Guru Kelas', '0', ''),
('20246574192001', '20246574192001', 'Jejen', 'L', 'Sajira', '1992-02-13', '0', '0', 'aktif', 'pengajar', 'Guru Kelas', '0', ''),
('20246574198001', '20246574198001', 'Nurcahyani, S.Pd', 'P', 'Sukabumi', '1998-01-13', '0', '0', 'aktif', 'pengajar', 'Guru Kelas', '0', ''),
('3535718620200002', '3535718620200002', 'Yosep Juanda, S.Kom', 'L', 'Sukabumi', '1978-01-05', '0', '0', 'aktif', 'pengajar', 'Guru MP', '0', ''),
('4533756659300002', '4533756659300002', 'Nia Kurniasih, S.Pd.I', 'P', 'Bogor', '1978-02-01', '0', '0', 'aktif', 'pengajar', 'Guru Kelas', '0', ''),
('5049755657300083', '5049755657300083', 'Elih Nurlaela, S.E.', 'P', 'Sukabumi', '1977-07-17', '0', '0', 'aktif', 'pengajar', 'Guru Kelas', '0', ''),
('5937752653200032', '5937752653200032', 'Ade Sopyan Hadi, S.Ag.', 'L', 'Sukabumi', '1974-05-06', '0', '0', 'aktif', 'pengajar', 'Guru Kelas', '0', ''),
('7337748651300073', '7337748651300073', 'Lia Waslia, S.Pd.I', 'P', 'Sukabumi', '1970-05-10', '0', '0815-1442-5099', 'aktif', 'pengajar', 'Kepala Sekolah', '0', ''),
('7339748652300003', '7339748652300003', 'Nurhasanah, S.Pd.I', 'P', 'Sukabumi', '1970-07-10', '0', '0', 'aktif', 'pengajar', 'Guru Kelas', '0', ''),
('8662763663300002', '8662763663300002', 'Siti Patimah Zahro, S.Pd.I', 'P', 'Tangerang', '1985-03-30', '0', '0', 'aktif', 'pengajar', 'Guru Kelas', '0', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `NSS` varchar(30) NOT NULL,
  `Tahun_Berdiri` varchar(6) NOT NULL,
  `Pendiri` varchar(100) NOT NULL,
  `NamaSekolah` varchar(100) NOT NULL,
  `JenjangSekolah` enum('dasar') NOT NULL,
  `StatusSekolah` enum('swasta') NOT NULL,
  `Terakreditasi` varchar(30) NOT NULL,
  `Visi` text NOT NULL,
  `Misi` text NOT NULL,
  `Biografi` text NOT NULL,
  `Alamat` text NOT NULL,
  `Telephone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`NSS`, `Tahun_Berdiri`, `Pendiri`, `NamaSekolah`, `JenjangSekolah`, `StatusSekolah`, `Terakreditasi`, `Visi`, `Misi`, `Biografi`, `Alamat`, `Telephone`) VALUES
('111232020084', '1970', 'YAYASAN BAITURRAHMAN', 'MIS KOMPA', 'dasar', 'swasta', 'A', 'TUMBUHNYA GENERASI PEMBELAJAR YANG CERDAS, BERBUDI PEKERTI DAN BERAHLAK MULIA', '......', 'MIS KOMPA, yang beralamat di Jl. Raya Parungkuda Km. 30 No. 8 Desa Kompa - Kecamatan Parungkuda - Kabupaten Sukabumi - Provinsi Jawa Barat Kode Pos. 43357, Merupakan Sekolah Tingkat Dasar Swasta yang berdiri pada tahun 6 juli 1970 dibawah naungan YAYASAN BAITURRAHMAN CIPANGGULAAN KOMPA dan masih berdiri kokoh hingga saat ini dengan Visi dan Misi nya yaitu ', 'Jl. Raya Parungkuda Km. 30 No. 8, KP. Cipanggulaan RT 07/02  Desa Kompa - Kecamatan Parungkuda - Kabupaten Sukabumi - Provinsi Jawa Barat', '026671661067');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `Nik_Siswa` varchar(30) NOT NULL,
  `Nis` varchar(30) NOT NULL,
  `Nisn` varchar(30) NOT NULL,
  `Nama_Lengkap` varchar(100) NOT NULL,
  `Nama_Panggilan` varchar(30) NOT NULL,
  `Jenis_Kelamin` varchar(5) NOT NULL,
  `Tempat_Lahir` varchar(100) NOT NULL,
  `Tanggal_Lahir` varchar(30) NOT NULL,
  `Agama` varchar(50) NOT NULL,
  `Kewarganegaraan` varchar(30) NOT NULL,
  `Anak_Ke` varchar(5) NOT NULL,
  `Banyak_Saudara_Kandung` varchar(5) NOT NULL,
  `Banyak_Saudara_Tiri` varchar(5) NOT NULL,
  `Banyak_Saudara_Angkat` varchar(5) NOT NULL,
  `Bahasa_Sehari_Hari` varchar(50) NOT NULL,
  `Berat_Badan` varchar(5) NOT NULL,
  `Tinggi_Badan` varchar(5) NOT NULL,
  `Golongan_Darah` varchar(5) NOT NULL,
  `Penyakit_Yang_Pernah_Diderita` text NOT NULL,
  `Tinggal_Bersama` varchar(150) NOT NULL,
  `Jarak_Rumah_Ke_Sekolah` varchar(30) NOT NULL,
  `Alamat_Rumah` text NOT NULL,
  `Status_Siswa` varchar(50) NOT NULL,
  `Kelas` varchar(30) NOT NULL,
  `Tanggal_Mendaftar` varchar(30) NOT NULL,
  `TA` varchar(5) NOT NULL,
  `No_Pendaftaran` varchar(50) NOT NULL,
  `Tanggal_Diperbarui` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`Nik_Siswa`, `Nis`, `Nisn`, `Nama_Lengkap`, `Nama_Panggilan`, `Jenis_Kelamin`, `Tempat_Lahir`, `Tanggal_Lahir`, `Agama`, `Kewarganegaraan`, `Anak_Ke`, `Banyak_Saudara_Kandung`, `Banyak_Saudara_Tiri`, `Banyak_Saudara_Angkat`, `Bahasa_Sehari_Hari`, `Berat_Badan`, `Tinggi_Badan`, `Golongan_Darah`, `Penyakit_Yang_Pernah_Diderita`, `Tinggal_Bersama`, `Jarak_Rumah_Ke_Sekolah`, `Alamat_Rumah`, `Status_Siswa`, `Kelas`, `Tanggal_Mendaftar`, `TA`, `No_Pendaftaran`, `Tanggal_Diperbarui`) VALUES
('104863573', '\n1112320800392004079', '104863573', 'Alif Nur Hafidz ', 'Alif Nur Hafidz ', 'L ', 'Kuningan, 2010-07-14 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'baru', 'kelas4', '0', '2017', '2017-35', '2021-08-20 21:28:28'),
('108164816', '111232020084192078', '108164816', 'Aprilliya Kartika Ayu ', 'Aprilliya Kartika Ayu ', 'P ', 'Cikarang', '2010-04-26 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-38', '2021-07-08 20:32:27'),
('108836946', '\n111232020084170108', '108836946', 'Azril Nuralamsyah ', 'Azril Nuralamsyah ', 'L ', 'Sukabumi, 2010-02-03 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-5', '2021-07-08 20:32:46'),
('111232020084170052', '111232020084170052', '', 'Raja Iman Santosa ', 'Raja Iman Santosa ', 'L ', 'Sukabumi, 2010-10-31 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-25', '2021-07-08 20:32:46'),
('111232020084170056', '111232020084170056', '', 'Ridzki Ibrahim ', 'Ridzki Ibrahim ', 'L ', 'Sukabumi, 2010-06-14 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-27', '2021-07-08 20:32:46'),
('111232020084170057', '111232020084170057', '', 'Riyuki Letisa ', 'Riyuki Letisa ', 'P ', 'Sukabumi, 2010-10-27 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-28', '2021-07-08 20:32:46'),
('111232020084170066', '111232020084170066', '', 'Sulthan Muhammad Natsiyr ', 'Sulthan Muhammad Natsiyr ', 'L ', 'S, 2011-11-15 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-31', '2021-07-08 20:32:46'),
('111232020084171020', '111232020084171020', '', 'Intan Nuraeni ', 'Intan Nuraeni ', 'P ', 'Sukabumi, 2010-10-18 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-8', '2021-07-08 20:32:46'),
('1112320200842000025', '1112320200842000025', '', 'Fatima Thania Aurellivie\nRamdani', 'Fatima Thania Aurellivie\nRamda', 'P ', 'Sukabumi, 2014-07-01 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'baru', 'kelas1', '0', '2020', '2020-39', '2021-08-20 21:28:28'),
('111519402', '\n111232020084203078', '111519402', 'Mohamad Tesar Ismansyah ', 'Mohamad Tesar Ismansyah ', 'L ', 'Sukabumi, 2011-11-08 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-45', '2021-07-08 20:32:27'),
('113727934', '\n111232020084191054', '113727934', 'Meisia Aulia Natasya ', 'Meisia Aulia Natasya ', 'P ', 'Sukabumi, 2011-05-05 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-55', '2021-07-08 20:32:05'),
('114510414', '\n111232020084181050', '114510414', 'Salman Alfarizi ', 'Salman Alfarizi ', 'L ', 'Sukabumi, 2011-12-12 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-27', '2021-07-08 20:32:27'),
('119906777', '\n111232020084192075', '119906777', 'Nathan Ganda Resmi ', 'Nathan Ganda Resmi ', 'P ', 'Sukabumi, 2011-06-25 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-19', '2021-07-08 20:32:27'),
('121502049', '\n111232020084191030', '121502049', 'Nakhwan Lukmanul Hakim\nSujana', 'Nakhwan Lukmanul Hakim\nSujana', 'L ', 'Sukabumi, 2012-12-11 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-31', '2021-07-08 20:32:05'),
('121812431', '\n111232020084191059', '121812431', 'Muhammad Reza Hermansyah ', 'Muhammad Reza Hermansyah ', 'L ', 'Sukabumi, 2012-11-06 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-60', '2021-07-08 20:32:05'),
('121927194', '\n111232020084191048', '121927194', 'Eqi Maulana Firdaus ', 'Eqi Maulana Firdaus ', 'L ', 'Sukabumi, 2012-05-19 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-50', '2021-07-08 20:32:05'),
('123104889', '\n111232020084202079', '123104889', 'Tika Liana Maharani ', 'Tika Liana Maharani ', 'P ', 'Sukabumi, 2012-11-27 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-39', '2021-07-08 20:32:05'),
('123496050', '\n111232020084191042', '123496050', 'Alya Qonita ', 'Alya Qonita ', 'P ', 'Sukabumi, 2012-09-01 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-44', '2021-07-08 20:32:05'),
('124239664', '111232020084200148', '124239664', 'Regi Sahid Saputra ', 'Regi Sahid Saputra ', 'L ', 'Sukabumi, 2012-12-27 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-26', '2021-07-08 20:31:41'),
('124418144', '\n111232020084191012', '124418144', 'Fadhil Argani ', 'Fadhil Argani ', 'L ', 'Sukabumi, 2012-06-17 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-13', '2021-07-08 20:32:05'),
('127341188', '\n111232020084191053', '127341188', 'M. Indra Kurniawan ', 'M. Indra Kurniawan ', 'L ', 'Sukabumi, 2012-11-15 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-56', '2021-07-08 20:32:05'),
('129741219', '\n111232020084191057', '129741219', 'Muhamad Firmansyah ', 'Muhamad Firmansyah ', 'L ', 'Sukabumi, 2012-07-09 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-58', '2021-07-08 20:32:05'),
('131145427', '\n111232020084201038', '131145427', 'Muhammad Azam Al Kalifi ', 'Muhammad Azam Al Kalifi ', 'L ', 'Sukabumi, 2013-09-24 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-19', '2021-07-08 20:31:41'),
('131350942', '\n111232020084191013', '131350942', 'Fajar Maulidan ', 'Fajar Maulidan ', 'L ', 'Sukabumi, 2013-01-23 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-14', '2021-07-08 20:32:05'),
('131545130', '111232020084200123', '131545130', 'Leviansyah ', 'Leviansyah ', 'L ', 'Sukabumi, 2013-08-23 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-42', '2021-07-08 20:31:41'),
('131592773', '\n111232020084200158', '131592773', 'Syafira Yuniarti ', 'Syafira Yuniarti ', 'P ', 'Sukabumi, 2013-06-10 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-60', '2021-07-08 20:31:41'),
('131769881', '\n111232020084200146', '131769881', 'Rafka Fazar Ramadhan ', 'Rafka Fazar Ramadhan ', 'L ', 'Sukabumi, 2013-08-05 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-24', '2021-07-08 20:31:41'),
('132464582', '\n111232020084200135', '132464582', 'Ulfa Aulia Fitri ', 'Ulfa Aulia Fitri ', 'P ', 'Sukabumi, 2013-06-21 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-31', '2021-07-08 20:31:41'),
('134126455', '\n111232020084200149', '134126455', 'Reno Oktavian Hasni ', 'Reno Oktavian Hasni ', 'L ', 'Sukabumi, 2013-10-19 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-54', '2021-07-08 20:31:41'),
('134795997', '\n111232020084191061', '134795997', 'Nazril Ilham Maulana ', 'Nazril Ilham Maulana ', 'L ', 'Sukabumi, 2013-01-27 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-63', '2021-07-08 20:32:05'),
('134857252', '\n111232020084200104', '134857252', 'Alip Sigit Maulana ', 'Alip Sigit Maulana ', 'L ', 'Sukabumi, 2013-12-24 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-4', '2021-07-08 20:31:41'),
('135529621', '\n111232020084200140', '135529621', 'Muhammad Sultan Nurrahman ', 'Muhammad Sultan Nurrahman ', 'L ', 'Sukabumi, 2013-08-31 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-21', '2021-07-08 20:31:41'),
('136235445', '\n111232020084200102', '136235445', 'Aina Zahran ', 'Aina Zahran ', 'P ', 'Sukabumi, 2013-11-19 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-2', '2021-07-08 20:31:41'),
('136237304', '\n111232020084200162', '136237304', 'Anugrah Mustaqim ', 'Anugrah Mustaqim ', 'L ', 'Sukabumi, 2013-11-08 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-35', '2021-07-08 20:31:41'),
('136512899', '\n111232020084200161', '136512899', 'Rizki Raditiya Khoeri ', 'Rizki Raditiya Khoeri ', 'L ', 'Sukabumi, 2013-10-04 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-55', '2021-07-08 20:31:41'),
('136522189', '\n111232020084200143', '136522189', 'Putri Surta Indriyani ', 'Putri Surta Indriyani ', 'P ', 'Sukabumi, 2013-12-24 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-52', '2021-07-08 20:31:41'),
('137364842', '\n111232020084200166', '137364842', 'Reynard Alhamdika Lutfi ', 'Reynard Alhamdika Lutfi ', 'L ', 'Sukabumi, 2013-04-08 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-27', '2021-07-08 20:31:41'),
('138444687', '\n111232020084202157', '138444687', 'Siti Nabila ', 'Siti Nabila ', 'P ', 'Bogor, 2013-09-24 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-58', '2021-07-08 20:31:41'),
('139791093', '\n111232020084200113', '139791093', 'Dafa Sayid Fadilah ', 'Dafa Sayid Fadilah ', 'L ', 'Sukabumi, 2013-08-28 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-7', '2021-07-08 20:31:41'),
('141781110', '\n111232020084200144', '141781110', 'Melati Puspa Cantika ', 'Melati Puspa Cantika ', 'P ', 'Sukabumi, 2014-04-23 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-44', '2021-07-08 20:31:41'),
('141989242', '\n111232020084200116', '141989242', 'Dhea Salsabila Putri ', 'Dhea Salsabila Putri ', 'P ', 'Sukabumi, 2014-01-19 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-8', '2021-07-08 20:31:41'),
('143100794', '\n111232020084200120', '143100794', 'Alwi Fauzan ', 'Alwi Fauzan ', 'L ', 'Sukabumi, 2014-01-10 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-5', '2021-07-08 20:31:41'),
('143988669', '\n111232020084200161', '143988669', 'Kasiva Rohmah ', 'Kasiva Rohmah ', 'P ', 'Sukabumi, 2014-02-17 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-12', '2021-07-08 20:31:41'),
('144105148', '\n111232020084200161', '144105148', 'Sofwah Azqia Nailatul Aspa ', 'Sofwah Azqia Nailatul Aspa ', 'P ', 'Sukabumi, 2014-01-07 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-59', '2021-07-08 20:31:41'),
('145400661', '\n111232020084200134', '145400661', 'Andrian Putra ', 'Andrian Putra ', 'L ', 'Sukabumi, 2014-01-19 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-34', '2021-07-08 20:31:41'),
('3056632622', '111232020084160468', '3056632622', 'Surya Saputra ', 'Surya Saputra ', 'L ', 'Sukabumi, 2005-03-08 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-64', '2021-07-08 20:33:28'),
('3072019481', '\n111232020084150006', '3072019481', 'Alisa Nurhamidah ', 'Alisa Nurhamidah ', 'P ', 'Sukabumi, 2007-11-08 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-3', '2021-07-08 20:33:28'),
('3072329250', '\n111232020084150036', '3072329250', 'Muhammad Fikri Rahardiansyah ', 'Muhammad Fikri Rahardiansyah ', 'L ', 'Sukabumi, 2007-12-14 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-17', '2021-07-08 20:33:28'),
('3078207490', '\n111232020084150041', '3078207490', 'Nabila Yulianti ', 'Nabila Yulianti ', 'P ', 'Sukabumi, 2007-07-22 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-55', '2021-07-08 20:33:28'),
('3080131044', '\n111232020084170379', '3080131044', 'Nur Assyifa Aprilliani Andini ', 'Nur Assyifa Aprilliani Andini ', 'P ', 'Sukabumi, 2008-04-23 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-57', '2021-07-08 20:33:28'),
('3080277347', '\n111232020084150010', '3080277347', 'Audina ', 'Audina ', 'P ', 'Sukabumi, 2008-03-08 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-39', '2021-07-08 20:33:28'),
('3080282532', '\n111232020084150061', '3080282532', 'Syifa Viriyawan Nursyafa ', 'Syifa Viriyawan Nursyafa ', 'P ', 'Sukabumi, 2008-02-18 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-31', '2021-07-08 20:33:28'),
('3080732609', '\n11123202008418181', '3080732609', 'Ardila Nurjani ', 'Ardila Nurjani ', 'P ', 'Sukabumi, 2008-04-19 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-3', '2021-07-08 20:32:46'),
('3080755885', '\n111232020084150056', '3080755885', 'Sevira Aulia Sahra ', 'Sevira Aulia Sahra ', 'P ', 'Sukabumi, 2008-09-16 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-62', '2021-07-08 20:33:28'),
('3080860596', '\n111232020084150053', '3080860596', 'Rifda Renatiana ', 'Rifda Renatiana ', 'P ', 'Sukabumi, 2008-07-09 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-25', '2021-07-08 20:33:28'),
('3080916221', '\n111232020084150033', '3080916221', 'Muhammad Alwan Munir ', 'Muhammad Alwan Munir ', 'L ', 'Sukabumi, 2008-10-15 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-15', '2021-07-08 20:33:28'),
('3081054612', '\n111232020084150002', '3081054612', 'Achmad Regihan Al-bion ', 'Achmad Regihan Al-bion ', 'L ', 'Sukabumi, 2008-09-17 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-1', '2021-07-08 20:33:28'),
('3081441136', '\n111232020084150011', '3081441136', 'Aulia Nur Rachman ', 'Aulia Nur Rachman ', 'P ', 'Sukabumi, 2008-07-11 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-6', '2021-07-08 20:33:28'),
('3081764136', '\n111232020084150026', '3081764136', 'M. Syayifush Shagir Yoselvina R ', 'M. Syayifush Shagir Yoselvina ', 'L ', 'Sukabumi, 2008-07-16 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-49', '2021-07-08 20:33:28'),
('3081888125', '\n111232020084150034', '3081888125', 'Muhammad Fadli ', 'Muhammad Fadli ', 'L ', 'Sukabumi, 2008-04-17 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-16', '2021-07-08 20:33:28'),
('3081945482', '\n111232020084151039', '3081945482', 'Muhammad Firhan ', 'Muhammad Firhan ', 'L ', 'Sukabumi, 2008-06-14 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-52', '2021-07-08 20:33:28'),
('3082032791', '\n111232020084150016', '3082032791', 'Dea Amelia ', 'Dea Amelia ', 'P ', 'Sukabumi, 2008-07-01 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-41', '2021-07-08 20:33:28'),
('3082843637', '\n111232020084150003', '3082843637', 'Adelia ', 'Adelia ', 'P ', 'Sukabumi, 2008-10-18 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-36', '2021-07-08 20:33:28'),
('3083046254', '\n111232020084150005', '3083046254', 'Aldiansyah Dwi Anggara ', 'Aldiansyah Dwi Anggara ', 'L ', 'Sukabumi, 2008-12-02 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-2', '2021-07-08 20:33:28'),
('3083074458', '\n111232020084151050', '3083074458', 'Ranti Juniarti ', 'Ranti Juniarti ', 'P ', 'Sukabumi, 2008-06-06 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-22', '2021-07-08 20:33:28'),
('3083833810', '\n111232020084150052', '3083833810', 'Rifa Rahma Syifa Yanti R ', 'Rifa Rahma Syifa Yanti R ', 'P ', 'Sukabumi, 2008-03-24 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-60', '2021-07-08 20:33:28'),
('3083865403', '\n111232020084150167', '3083865403', 'Zhidane Al-zahra Regina ', 'Zhidane Al-zahra Regina ', 'L ', 'Sukabumi, 2008-10-30 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-34', '2021-07-08 20:33:28'),
('3083874675', '\n111232020084150035', '3083874675', 'Muhammad Fajri Fatahilah ', 'Muhammad Fajri Fatahilah ', 'L ', 'Sukabumi, 2008-08-22 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-51', '2021-07-08 20:33:28'),
('3084381486', '\n111232020084150015', '3084381486', 'Azzahra Nuranisa ', 'Azzahra Nuranisa ', 'P ', 'Sukabumi, 2008-06-04 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-8', '2021-07-08 20:33:28'),
('3084433233', '\n111232020084150063', '3084433233', 'Tiya Herdiyani ', 'Tiya Herdiyani ', 'P ', 'Sukabumi, 2008-07-16 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-32', '2021-07-08 20:33:28'),
('3084558110', '\n111232020084150031', '3084558110', 'Muhammad Alif Farhan ', 'Muhammad Alif Farhan ', 'L ', 'Sukabumi, 2008-03-01 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-13', '2021-07-08 20:33:28'),
('3084629885', '\n111232020084150050', '3084629885', 'Reyhan Driantama Putra ', 'Reyhan Driantama Putra ', 'L ', 'Sukabumi, 2008-11-17 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-24', '2021-07-08 20:33:28'),
('3084726130', '\n111232020084151008', '3084726130', 'Andrean Fazriansyah ', 'Andrean Fazriansyah ', 'L ', 'Sukabumi, 2008-12-20 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-38', '2021-07-08 20:33:28'),
('3085330229', '\n111232020084150001', '3085330229', 'Abdul Malik Miftahudin ', 'Abdul Malik Miftahudin ', 'L ', 'Sukabumi, 2008-09-29 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-35', '2021-07-08 20:33:28'),
('3085473829', '\n111232020084150018', '3085473829', 'Dyisha Siti Humaira ', 'Dyisha Siti Humaira ', 'P ', 'Sukabumi, 2008-05-25 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-43', '2021-07-08 20:33:28'),
('3086519022', '\n111232020084150024', '3086519022', 'M. Arief Akbar Azzahran ', 'M. Arief Akbar Azzahran ', 'L ', 'Sukabumi, 2008-12-07 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-10', '2021-07-08 20:33:28'),
('3086677601', '\n111232020084150032', '3086677601', 'Muhammad Alwan ', 'Muhammad Alwan ', 'L ', 'Sukabumi, 2008-04-11 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-14', '2021-07-08 20:33:28'),
('3086912429', '\n111232020084150044', '3086912429', 'Nova Tri Ardianti ', 'Nova Tri Ardianti ', 'P ', 'Sukabumi, 2008-11-03 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-56', '2021-07-08 20:33:28'),
('3087225255', '\n111232020084150064', '3087225255', 'Whira Danu Firmansyah ', 'Whira Danu Firmansyah ', 'L ', 'Sukabumi, 2008-11-06 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-66', '2021-07-08 20:33:28'),
('3087278210', '\n111232020084150154', '3087278210', 'Rini Kartika ', 'Rini Kartika ', 'P ', 'Sukabumi, 2008-09-18 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-27', '2021-07-08 20:33:28'),
('3087285298', '\n111232020084150038', '3087285298', 'Muhammad Hilmi ', 'Muhammad Hilmi ', 'L ', 'Sukabumi, 2008-10-31 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-53', '2021-07-08 20:33:28'),
('3087431078', '\n111232020084150042', '3087431078', 'Nanda Bayu Setiaji ', 'Nanda Bayu Setiaji ', 'L ', 'Sukabumi, 2008-06-26 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-20', '2021-07-08 20:33:28'),
('3087556110', '\n111232020084150030', '3087556110', 'Muhammad Rizky Aria Putra ', 'Muhammad Rizky Aria Putra ', 'L ', 'Depok, 2008-04-19 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-54', '2021-07-08 20:33:28'),
('3087894240', '\n111232020084150062', '3087894240', 'Tissa Nur Afifah ', 'Tissa Nur Afifah ', 'P ', 'Sukabumi, 2008-12-29 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-65', '2021-07-08 20:33:28'),
('3088773707', '\n111232020084150060', '3088773707', 'Syadiansyah ', 'Syadiansyah ', 'L ', 'Sukabumi, 2008-05-15 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-30', '2021-07-08 20:33:28'),
('3089278282', '\n111232020084150043', '3089278282', 'Nathaniela Pavita ', 'Nathaniela Pavita ', 'P ', 'Sukabumi, 2008-10-03 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-21', '2021-07-08 20:33:28'),
('3089364242', '\n111232020084150023', '3089364242', 'Junita Febianti Rahayu ', 'Junita Febianti Rahayu ', 'P ', 'Sukabumi, 2008-06-20 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-47', '2021-07-08 20:33:28'),
('3089464954', '\n111232020084150059', '3089464954', 'Suci Dwi Aulia ', 'Suci Dwi Aulia ', 'P ', 'Sukabumi, 2008-08-22 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-29', '2021-07-08 20:33:28'),
('3089534972', '\n111232020084150058', '3089534972', 'Siti Khairunnisa ', 'Siti Khairunnisa ', 'P ', 'Sukabumi, 2008-09-21 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-63', '2021-07-08 20:33:28'),
('3089905526', '\n111232020084170040', '3089905526', 'M. Nazrival Ilham ', 'M. Nazrival Ilham ', 'L ', 'Sukabumi, 2008-03-23 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-50', '2021-07-08 20:32:46'),
('3090193620', '\n1112320200841903080', '3090193620', 'Padli ', 'Padli ', 'L ', 'Sukabumi, 2009-08-28 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-59', '2021-07-08 20:32:46'),
('3090668379', '\n111232020084150021', '3090668379', 'Intan Safitri ', 'Intan Safitri ', 'P ', 'Sukabumi, 2009-08-25 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-45', '2021-07-08 20:33:28'),
('3090922389', '\n111232020084170005', '3090922389', 'Ariansyah ', 'Ariansyah ', 'L ', 'Sukabumi, 2009-04-14 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-36', '2021-07-08 20:32:46'),
('3091155092', '\n111232020084161009', '3091155092', 'Cantika Nur Salsa Bila ', 'Cantika Nur Salsa Bila ', 'P ', 'Sukabumi, 2009-12-17 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-9', '2021-07-08 20:33:08'),
('3091413703', '\n111232020084150029', '3091413703', 'Muhamad Rizki Alviansyah ', 'Muhamad Rizki Alviansyah ', 'L ', 'Sukabumi, 2009-07-10 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-50', '2021-07-08 20:33:28'),
('3091429214', '\n111232020084161002', '3091429214', 'Anjani Prameswari Atalah ', 'Anjani Prameswari Atalah ', 'P ', 'Sukabumi, 2009-10-21 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-3', '2021-07-08 20:33:08'),
('3091642357', '\n111232020084161028', '3091642357', 'Muhammad Rizky ', 'Muhammad Rizky ', 'L ', 'Sukabumi, 2009-06-09 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-31', '2021-07-08 20:33:08'),
('3091827604', '\n111232020084150013', '3091827604', 'Aulia Nurhasanah ', 'Aulia Nurhasanah ', 'P ', 'Sukabumi, 2009-02-19 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-5', '2021-07-08 20:33:28'),
('3091832854', '\n111232020084161037', '3091832854', 'Rafli Agustian ', 'Rafli Agustian ', 'L ', 'Sukabumi, 2009-08-02 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-41', '2021-07-08 20:33:08'),
('3091996730', '\n111232020084150066', '3091996730', 'Zenitiyan Avian Titan ', 'Zenitiyan Avian Titan ', 'L ', 'Sukabumi, 2009-08-16 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-67', '2021-07-08 20:33:28'),
('3092014373', '\n111232020084161033', '3092014373', 'Nazla Masda Alifa ', 'Nazla Masda Alifa ', 'P ', 'Sukabumi, 2009-09-02 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-37', '2021-07-08 20:33:08'),
('3092209852', '\n111232020084161041', '3092209852', 'Riska Nurmalasari ', 'Riska Nurmalasari ', 'P ', 'Sukabumi, 2009-05-14 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-44', '2021-07-08 20:33:08'),
('3092469828', '\n111232020084161042', '3092469828', 'Salwa ', 'Salwa ', 'P ', 'Sukabumi, 2009-08-13 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-45', '2021-07-08 20:33:08'),
('3093007252', '\n111232020084161015', '3093007252', 'Larasati Riwiyanti Lestari ', 'Larasati Riwiyanti Lestari ', 'P ', 'Sukabumi, 2009-07-11 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-18', '2021-07-08 20:33:08'),
('3093167225', '\n111232020084161024', '3093167225', 'Muhamad Daud ', 'Muhamad Daud ', 'L ', 'Sukabumi, 2009-07-18 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-26', '2021-07-08 20:33:08'),
('3093226703', '\n111232020084150025', '3093226703', 'M. Rafi Al-rusyaidi ', 'M. Rafi Al-rusyaidi ', 'L ', 'Sukabumi, 2009-01-26 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-48', '2021-07-08 20:33:28'),
('3093367353', '\n111232020084150009', '3093367353', 'Arumni Maulida Amelia ', 'Arumni Maulida Amelia ', 'P ', 'Sukabumi, 2009-03-08 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-4', '2021-07-08 20:33:28'),
('3093422097', '\n111232020084150020', '3093422097', 'Fauzan Muhammad Yasin ', 'Fauzan Muhammad Yasin ', 'L ', 'Sukabumi, 2009-01-05 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-44', '2021-07-08 20:33:28'),
('3093591140', '\n111232020084161034', '3093591140', 'Nindi Nur Zahra ', 'Nindi Nur Zahra ', 'P ', 'Sukabumi, 2009-12-16 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-38', '2021-07-08 20:33:08'),
('3093726682', '\n111232020084161019', '3093726682', 'M. Ergio Alfarizi Zakian ', 'M. Ergio Alfarizi Zakian ', 'L ', 'Sukabumi, 2009-12-21 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-21', '2021-07-08 20:33:08'),
('3093732314', '\n111232020084161022', '3093732314', 'Medina Tsaqila ', 'Medina Tsaqila ', 'P ', 'Sukabumi, 2009-12-12 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-20', '2021-07-08 20:33:08'),
('3094012137', '\n111232020084161020', '3094012137', 'Mahesa Oktaviana ', 'Mahesa Oktaviana ', 'L ', 'Sukabumi, 2009-10-16 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-19', '2021-07-08 20:33:08'),
('3094308420', '\n111232020084161048', '3094308420', 'Zaldi Alfandi Yanuar ', 'Zaldi Alfandi Yanuar ', 'L ', 'Sukabumi, 2009-08-21 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-50', '2021-07-08 20:33:08'),
('3094485690', '\n111232020084161030', '3094485690', 'Nabila Nur Rahmadina ', 'Nabila Nur Rahmadina ', 'P ', 'Sukabumi, 2009-05-09 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-34', '2021-07-08 20:33:08'),
('3094580713', '\n111232020084150039', '3094580713', 'Muhammad Nur Abdul Syakir ', 'Muhammad Nur Abdul Syakir ', 'L ', 'Sukabumi, 2009-07-28 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-18', '2021-07-08 20:33:28'),
('3094624380', '\n111232020084161011', '3094624380', 'Humaira ', 'Humaira ', 'P ', 'Sukabumi, 2009-11-06 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-14', '2021-07-08 20:33:08'),
('3094839739', '\n1112320200841703069', '3094839739', 'Moch. Arkan Aurevino Ramdani ', 'Moch. Arkan Aurevino Ramdani ', 'L ', 'Sukabumi, 2009-06-13 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-12', '2021-07-08 20:33:28'),
('3095051422', '\n111232020084161032', '3095051422', 'Natha Ramadhan ', 'Natha Ramadhan ', 'L ', 'Sukabumi, 2009-09-04 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-36', '2021-07-08 20:33:08'),
('3095278335', '\n111232020084170110', '3095278335', 'Dede Yusuf Alfikri ', 'Dede Yusuf Alfikri ', 'L ', 'Sukabumi, 2009-11-27 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-39', '2021-07-08 20:32:46'),
('3095281704', '\n111232020084161031', '3095281704', 'Nala Mahendra Nurdiansyah ', 'Nala Mahendra Nurdiansyah ', 'L ', 'Sukabumi, 2009-12-21 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-35', '2021-07-08 20:33:08'),
('3095330587', '\n111232020084161047', '3095330587', 'Ulfa Arenenisa ', 'Ulfa Arenenisa ', 'P ', 'Sukabumi, 2009-07-24 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-49', '2021-07-08 20:33:08'),
('3095480561', '\n1112320200841733078', '3095480561', 'Rehan Apriana ', 'Rehan Apriana ', 'L ', 'Sukabumi, 2009-06-06 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-23', '2021-07-08 20:33:28'),
('3095495429', '\n11123202008418068', '3095495429', 'Deisya Nurtanzila ', 'Deisya Nurtanzila ', 'P ', 'Cianjur, 2009-02-19 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-42', '2021-07-08 20:33:28'),
('3095589702', '\n111232020084150028', '3095589702', 'Ma`rifat Maulana Yusuf ', 'Ma`rifat Maulana Yusuf ', 'L ', 'Sukabumi, 2009-02-06 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-11', '2021-07-08 20:33:28'),
('3096021681', '\n111232020084161004', '3096021681', 'Ardi Junaedilah ', 'Ardi Junaedilah ', 'L ', 'Sukabumi, 2009-10-23 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-5', '2021-07-08 20:33:08'),
('3096024697', '\n111232020084161044', '3096024697', 'Sipa Putri Azahra ', 'Sipa Putri Azahra ', 'P ', 'Sukabumi, 2009-11-15 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-46', '2021-07-08 20:33:08'),
('3096101233', '\n111232020084160043', '3096101233', 'Setiawan Ramdani ', 'Setiawan Ramdani ', 'L ', 'Sukabumi, 2009-09-13 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-63', '2021-07-08 20:32:46'),
('3096187497', '\n111232020084150014', '3096187497', 'Azira Syakina ', 'Azira Syakina ', 'P ', 'Sukabumi, 2009-03-03 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-7', '2021-07-08 20:33:28'),
('3096340200', '\n111232020084161010', '3096340200', 'Hilham Raihan Saputra ', 'Hilham Raihan Saputra ', 'L ', 'Sukabumi, 2009-01-19 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-13', '2021-07-08 20:33:08'),
('3096540768', '\n111232020084161025', '3096540768', 'Muhamad Fazril Perdana ', 'Muhamad Fazril Perdana ', 'L ', 'Sukabumi, 2009-12-04 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-27', '2021-07-08 20:33:08'),
('3096582496', '\n111232020084150051', '3096582496', 'Ridho Galih Mukti Adsan ', 'Ridho Galih Mukti Adsan ', 'L ', 'Sukabumi, 2009-06-23 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-59', '2021-07-08 20:33:28'),
('3096643291', '\n111232020084161012', '3096643291', 'Ikram Arbiansyah ', 'Ikram Arbiansyah ', 'L ', 'Sukabumi, 2009-08-03 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-15', '2021-07-08 20:33:08'),
('3096700271', '\n111232020084151007', '3096700271', 'Alwan Syailendra Abdullghani ', 'Alwan Syailendra Abdullghani ', 'L ', 'Sukabumi, 2009-01-19 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-37', '2021-07-08 20:33:28'),
('3096853956', '\n111232020084164084', '3096853956', 'Anggita Putri Syahrani ', 'Anggita Putri Syahrani ', 'P ', 'Sukabumi, 2009-09-04 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-2', '2021-07-08 20:33:08'),
('3096891400', '\n111232020084163076', '3096891400', 'Fahmi Fadilah ', 'Fahmi Fadilah ', 'L ', 'Sukabumi, 2009-05-10 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-11', '2021-07-08 20:33:08'),
('3097133764', '\n111232020084161029', '3097133764', 'Nabhan Faeyza Rahman ', 'Nabhan Faeyza Rahman ', 'L ', 'Sukabumi, 2009-10-18 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-32', '2021-07-08 20:33:08'),
('3097435913', '\n111232020084161014', '3097435913', 'Kanza Kailatuzzahwa Ahlussaeni ', 'Kanza Kailatuzzahwa Ahlussaeni', 'P ', 'Sukabumi, 2009-04-10 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-17', '2021-07-08 20:33:08'),
('3097625939', '\n111232020084161027', '3097625939', 'Muhamad Solahudin ', 'Muhamad Solahudin ', 'L ', 'Sukabumi, 2009-10-10 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-30', '2021-07-08 20:33:08'),
('3098038725', '\n111232020084150019', '3098038725', 'Fadlan Putra Suhendi ', 'Fadlan Putra Suhendi ', 'L ', 'Sukabumi, 2009-01-10 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-9', '2021-07-08 20:33:28'),
('3098154958', '\n111232020084150047', '3098154958', 'Qeisya Maulida ', 'Qeisya Maulida ', 'P ', 'Sukabumi, 2009-03-12 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-58', '2021-07-08 20:33:28'),
('3098249515', '\n111232020084150012', '3098249515', 'Aulia Nurfadilah ', 'Aulia Nurfadilah ', 'P ', 'Sukabumi, 2009-10-31 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-40', '2021-07-08 20:33:28'),
('3098253413', '\n111232020084161006', '3098253413', 'Arpan Maulana ', 'Arpan Maulana ', 'L ', 'Sukabumi, 2009-11-20 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-7', '2021-07-08 20:33:08'),
('3098421612', '\n111232020084161035', '3098421612', 'Pelangi Ahya Dwi Putri ', 'Pelangi Ahya Dwi Putri ', 'P ', 'Sukabumi, 2009-04-17 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-39', '2021-07-08 20:33:08'),
('3098651838', '\n111232020084150040', '3098651838', 'Muhammad Sabiq Abiyyu Ihsan ', 'Muhammad Sabiq Abiyyu Ihsan ', 'L ', 'Sukabumi, 2009-05-05 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-19', '2021-07-08 20:33:28'),
('3098662889', '\n111232020084184068', '3098662889', 'Widi Yani ', 'Widi Yani ', 'P ', 'Sukabumi, 2009-12-05 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-33', '2021-07-08 20:33:28'),
('3098826483', '\n111232020084150022', '3098826483', 'Izmi Laela Melati ', 'Izmi Laela Melati ', 'P ', 'Sukabumi, 2009-07-07 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-46', '2021-07-08 20:33:28'),
('3098983612', '\n111232020084150157', '3098983612', 'Shifa Aulia Ramadhani ', 'Shifa Aulia Ramadhani ', 'P ', 'Sukabumi, 2009-08-27 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-28', '2021-07-08 20:33:28'),
('3099123190', '\n111232020084161005', '3099123190', 'Arip Rahman ', 'Arip Rahman ', 'L ', 'Sukabumi, 2009-02-18 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-6', '2021-07-08 20:33:08'),
('3099175682', '\n111232020084161049', '3099175682', 'Gita Shadiah ', 'Gita Shadiah ', 'P ', 'Sukabumi, 2009-05-24 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-12', '2021-07-08 20:33:08'),
('3099268809', '\n111232020084161007', '3099268809', 'Aufa Nazibah Wafi ', 'Aufa Nazibah Wafi ', 'P ', 'Sukabumi, 2009-11-12 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-8', '2021-07-08 20:33:08'),
('3099413137', '\n111232020084161018', '3099413137', 'M. Restu Saputra A. ', 'M. Restu Saputra A. ', 'L ', 'Sukabumi, 2009-08-02 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-24', '2021-07-08 20:33:08'),
('3099672758', '\n111232020084161023', '3099672758', 'Muhamad Azim ', 'Muhamad Azim ', 'L ', 'Sukabumi, 2009-08-28 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-25', '2021-07-08 20:33:08'),
('3099690496', '\n111232020084161046', '3099690496', 'Syifa Rahayu ', 'Syifa Rahayu ', 'P ', 'Cirebon, 2009-05-28 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-48', '2021-07-08 20:33:08'),
('3099852979', '\n111232020084150055', '3099852979', 'Risda Herliana ', 'Risda Herliana ', 'P ', 'Sukabumi, 2009-07-01 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-61', '2021-07-08 20:33:28'),
('3100009389', '\n111232020084170014', '3100009389', 'Eva Fauzia Hanifah ', 'Eva Fauzia Hanifah ', 'P ', 'Sukabumi, 2010-04-05 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-41', '2021-07-08 20:32:46'),
('3100832864', '\n111232020084170044', '3100832864', 'Nadia Azahra ', 'Nadia Azahra ', 'P ', 'Sukabumi, 2010-07-31 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-56', '2021-07-08 20:32:46'),
('3101022199', '\n111232020084170063', '3101022199', 'Sidki Abdul Dzaky ', 'Sidki Abdul Dzaky ', 'L ', 'Sukabumi, 2010-10-26 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-65', '2021-07-08 20:32:46'),
('3101188083', '\n1112320200841802069', '3101188083', 'Dahlia Anisa Zahra ', 'Dahlia Anisa Zahra ', 'P ', 'Sukabumi, 2010-07-16 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-38', '2021-07-08 20:32:46'),
('3101222216', '\n111232020084170101', '3101222216', 'Abduloh Arfan ', 'Abduloh Arfan ', 'L ', 'Sukabumi, 2010-10-12 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-1', '2021-07-08 20:32:46'),
('3101280753', '\n111232020084170058', '3101280753', 'Rizki Rahmat Syahputra ', 'Rizki Rahmat Syahputra ', 'L ', 'Sukabumi, 2010-07-30 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-61', '2021-07-08 20:32:46'),
('3101398342', '\n111232020084161001', '3101398342', 'Alya Syaki Zahira ', 'Alya Syaki Zahira ', 'P ', 'Sukabumi, 2010-09-14 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-1', '2021-07-08 20:33:08'),
('3101527110', '\n111232020084170102', '3101527110', 'Adek Rizky Sabiita ', 'Adek Rizky Sabiita ', 'P ', 'Sukabumi, 2010-04-14 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-2', '2021-07-08 20:32:46'),
('3101597283', '\n111232020084161013', '3101597283', 'Jihan Junita Khairunnisa ', 'Jihan Junita Khairunnisa ', 'P ', 'Jakarta, 2010-06-04 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-16', '2021-07-08 20:33:08'),
('3101820732', '\n111232020084170051', '3101820732', 'Raditia Arya Putra ', 'Raditia Arya Putra ', 'L ', 'Sukabumi, 2010-03-24 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-24', '2021-07-08 20:32:46'),
('3102135283', '\n111232020084170023', '3102135283', 'Keysha Sabila Ramdhani ', 'Keysha Sabila Ramdhani ', 'P ', 'Sukabumi, 2010-08-31 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-45', '2021-07-08 20:32:46'),
('3102225471', '\n111232020084170028', '3102225471', 'M. Fakhry Annaadhir ', 'M. Fakhry Annaadhir ', 'L ', 'Sukabumi, 2010-11-09 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-13', '2021-07-08 20:32:46'),
('3102310274', '\n111232020084170071', '3102310274', 'Yuriezki M Putra Aditia ', 'Yuriezki M Putra Aditia ', 'L ', 'Sukabumi, 2010-03-14 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-68', '2021-07-08 20:32:46'),
('3102331461', '\n111232020084170006', '3102331461', 'Awaliya Nur Hidayah ', 'Awaliya Nur Hidayah ', 'P ', 'Sukabumi, 2010-09-21 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-37', '2021-07-08 20:32:46'),
('3102332367', '\n111232020084170047', '3102332367', 'Nina Amelia Putri ', 'Nina Amelia Putri ', 'P ', 'Sukabumi, 2010-08-14 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-23', '2021-07-08 20:32:46'),
('3102544742', '\n111232020084161003', '3102544742', 'Anjani Yuniarti ', 'Anjani Yuniarti ', 'P ', 'Sukabumi, 2010-06-26 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-4', '2021-07-08 20:33:08'),
('3102749811', '\n1112320200842004060', '3102749811', 'Levyna Intan Agustin ', 'Levyna Intan Agustin ', 'P ', 'Sukabumi, 2010-08-06 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-46', '2021-07-08 20:32:46'),
('3102864233', '\n111232020084183074', '3102864233', 'Dinda Azzahra ', 'Dinda Azzahra ', 'P ', 'Sukabumi, 2010-02-23 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-10', '2021-07-08 20:33:08'),
('3102868078', '\n111232020084161039', '3102868078', 'Rahmat Fadillah ', 'Rahmat Fadillah ', 'L ', 'Sukabumi, 2010-01-28 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-43', '2021-07-08 20:33:08'),
('3102982649', '\n111232020084170074', '3102982649', 'M. Chaerul Azzam Alamsyah ', 'M. Chaerul Azzam Alamsyah ', 'L ', 'Sukabumi, 2010-04-20 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-47', '2021-07-08 20:32:46'),
('3103096421', '\n111232020084170027', '3103096421', 'M. Dani Alfiansyah ', 'M. Dani Alfiansyah ', 'L ', 'Sukabumi, 2010-01-01 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-11', '2021-07-08 20:32:46'),
('3103647777', '\n111232020084170018', '3103647777', 'Herlan Kusuma Darajat ', 'Herlan Kusuma Darajat ', 'L ', 'Sukabumi, 2010-05-11 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-42', '2021-07-08 20:32:46'),
('3103822033', '\n111232020084170032', '3103822033', 'Meisya Auliya Rahmawati ', 'Meisya Auliya Rahmawati ', 'P ', 'Sukabumi, 2010-05-27 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-12', '2021-07-08 20:32:46'),
('3103948658', '\n111232020084170069', '3103948658', 'Thea Rachel Aulia Ramadhani ', 'Thea Rachel Aulia Ramadhani ', 'P ', 'Sukabumi, 2010-09-05 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-33', '2021-07-08 20:32:46'),
('3104390783', '\n1112320200841760', '3104390783', 'Sakinah Mutia ', 'Sakinah Mutia ', 'P ', 'Sukabumi, 2010-10-12 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-29', '2021-07-08 20:32:46'),
('3104478077', '\n111232020084161036', '3104478077', 'Qurotul Sifa ', 'Qurotul Sifa ', 'P ', 'Sukabumi, 2010-07-08 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-40', '2021-07-08 20:33:08'),
('3104952418', '\n111232020084192080', '3104952418', 'Keysia Saskia Razika ', 'Keysia Saskia Razika ', 'P ', 'Sukabumi, 2010-11-18 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-43', '2021-07-08 20:32:27'),
('3105056647', '\n111232020084170025', '3105056647', 'M. Fazriel Juliandra ', 'M. Fazriel Juliandra ', 'L ', 'Sukabumi, 2010-07-30 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-14', '2021-07-08 20:32:46'),
('3105220606', '\n111232020084161053', '3105220606', 'Muhamad Raka Ridwansyah ', 'Muhamad Raka Ridwansyah ', 'L ', 'Sukabumi, 2010-01-22 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-29', '2021-07-08 20:33:08');
INSERT INTO `siswa` (`Nik_Siswa`, `Nis`, `Nisn`, `Nama_Lengkap`, `Nama_Panggilan`, `Jenis_Kelamin`, `Tempat_Lahir`, `Tanggal_Lahir`, `Agama`, `Kewarganegaraan`, `Anak_Ke`, `Banyak_Saudara_Kandung`, `Banyak_Saudara_Tiri`, `Banyak_Saudara_Angkat`, `Bahasa_Sehari_Hari`, `Berat_Badan`, `Tinggi_Badan`, `Golongan_Darah`, `Penyakit_Yang_Pernah_Diderita`, `Tinggal_Bersama`, `Jarak_Rumah_Ke_Sekolah`, `Alamat_Rumah`, `Status_Siswa`, `Kelas`, `Tanggal_Mendaftar`, `TA`, `No_Pendaftaran`, `Tanggal_Diperbarui`) VALUES
('3105298651', '\n111232020084170043', '3105298651', 'Muhammad Rizki ', 'Muhammad Rizki ', 'L ', 'Sukabumi, 2010-03-20 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-20', '2021-07-08 20:32:46'),
('3105473376', '\n111232020084170065', '3105473376', 'Sulistiana Putri Siswanto ', 'Sulistiana Putri Siswanto ', 'P ', 'Sukabumi, 2010-07-16 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-66', '2021-07-08 20:32:46'),
('3105685793', '\n111232020084171017', '3105685793', 'Hafizah Oktafiani ', 'Hafizah Oktafiani ', 'P ', 'Sukabumi, 2010-10-15 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-7', '2021-07-08 20:32:46'),
('3105690974', '\n111232020084170053', '3105690974', 'Resti Agustina ', 'Resti Agustina ', 'P ', 'Sukabumi, 2010-08-05 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-26', '2021-07-08 20:32:46'),
('3105936640', '\n111232020084161017', '3105936640', 'M. Fairuz Ramdhani ', 'M. Fairuz Ramdhani ', 'L ', 'Sukabumi, 2010-08-19 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-22', '2021-07-08 20:33:08'),
('3106056817', '\n111232020084161038', '3106056817', 'Rahesa Fitria ', 'Rahesa Fitria ', 'P ', 'Sukabumi, 2010-09-12 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-42', '2021-07-08 20:33:08'),
('3106105843', '\n1112320200841902070', '3106105843', 'Naufal Narra Suwandi ', 'Naufal Narra Suwandi ', 'L ', 'Sukabumi, 2010-04-15 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-22', '2021-07-08 20:32:46'),
('3106783119', '\n111232020084170067', '3106783119', 'Syahril Anugrah Maolana ', 'Syahril Anugrah Maolana ', 'L ', 'Sukabumi, 2010-04-04 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-67', '2021-07-08 20:32:46'),
('3106948882', '\n111232020084181019', '3106948882', 'Maulana Jibril ', 'Maulana Jibril ', 'L ', 'Sukabumi, 2010-06-27 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-13', '2021-07-08 20:32:27'),
('3107133598', '\n111232020084170050', '3107133598', 'Pitry Ramadhani Andriyanti ', 'Pitry Ramadhani Andriyanti ', 'P ', 'Sukabumi, 2010-08-15 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-60', '2021-07-08 20:32:46'),
('3107146209', '\n111232020084170046', '3107146209', 'Natasya Amelia Putri ', 'Natasya Amelia Putri ', 'P ', 'Sukabumi, 2010-08-08 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-57', '2021-07-08 20:32:46'),
('3107727639', '\n111232020084161026', '3107727639', 'Muhamad Galuh Maulana ', 'Muhamad Galuh Maulana ', 'L ', 'Sukabumi, 2010-06-07 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-28', '2021-07-08 20:33:08'),
('3108024748', '\n111232020084170011', '3108024748', 'Dhavita Siti Kulsum Nulhakim ', 'Dhavita Siti Kulsum Nulhakim ', 'P ', 'Cianjur, 2010-04-20 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-40', '2021-07-08 20:32:46'),
('3108315935', '\n111232020084170061', '3108315935', 'Satria Putra Ramadhan ', 'Satria Putra Ramadhan ', 'L ', 'Sukabumi, 2010-09-04 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-30', '2021-07-08 20:32:46'),
('3108368278', '\n111232020084170037', '3108368278', 'Muhamad Fahri Pratama ', 'Muhamad Fahri Pratama ', 'L ', 'Tasikmalaya, 2010-05-02 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-53', '2021-07-08 20:32:46'),
('3109436376', '\n111232020084170059', '3109436376', 'Safa Fitriani Nafabzah ', 'Safa Fitriani Nafabzah ', 'P ', 'Sukabumi, 2010-09-14 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-62', '2021-07-08 20:32:46'),
('3109520238', '\n111232020084170031', '3109520238', 'Meliani Elya Pagustiara ', 'Meliani Elya Pagustiara ', 'P ', 'Sukabumi, 2010-05-10 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-48', '2021-07-08 20:32:46'),
('3109596633', '\n1112320200841701013', '3109596633', 'Dwitia Octamaharani ', 'Dwitia Octamaharani ', 'P ', 'Sukabumi, 2010-10-22 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-6', '2021-07-08 20:32:46'),
('3109780316', '\n111232020084161045', '3109780316', 'Siti Nayla Maulana Yusuf ', 'Siti Nayla Maulana Yusuf ', 'P ', 'Sukabumi, 2010-05-22 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-47', '2021-07-08 20:33:08'),
('3110002587', '\n111232020084170045', '3110002587', 'Najmi Latifatul Gina ', 'Najmi Latifatul Gina ', 'P ', 'Sukabumi, 2011-04-02 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-21', '2021-07-08 20:32:46'),
('3110129815', '\n111232020084170026', '3110129815', 'M. Maulana Ibrahim ', 'M. Maulana Ibrahim ', 'L ', 'Sukabumi, 2011-03-25 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-49', '2021-07-08 20:32:46'),
('3110207917', '\n111232020084181002', '3110207917', 'Adinda Nova Aulia ', 'Adinda Nova Aulia ', 'P ', 'Sukabumi, 2011-12-15 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-2', '2021-07-08 20:32:27'),
('3110302186', '\n111232020084181016', '3110302186', 'Haifa Sabila Rahman ', 'Haifa Sabila Rahman ', 'P ', 'Sukabumi, 2011-07-24 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-9', '2021-07-08 20:32:27'),
('3110335038', '\n111232020084181056', '3110335038', 'Silla Nur Meilani ', 'Silla Nur Meilani ', 'P ', 'Sukabumi, 2011-02-25 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-30', '2021-07-08 20:32:27'),
('3110349518', '\n111232020084170029', '3110349518', 'Muhammad Luthfi Adifa\nSyaepulloh', 'Muhammad Luthfi Adifa\nSyaepull', 'L ', 'Sukabumi, 2011-04-13 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-54', '2021-07-08 20:32:46'),
('3110397963', '\n111232020084181015', '3110397963', 'Febian Dwi Rahayu ', 'Febian Dwi Rahayu ', 'P ', 'Sukabumi, 2011-12-03 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-8', '2021-07-08 20:32:27'),
('3110538105', '\n111232020084181013', '3110538105', 'Fahmi Hilman Nasiro ', 'Fahmi Hilman Nasiro ', 'L ', 'Sukabumi, 2011-07-14 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-41', '2021-07-08 20:32:27'),
('3110590753', '\n111232020084181061', '3110590753', 'Syalwa Putri Kirana ', 'Syalwa Putri Kirana ', 'P ', 'Sukabumi, 2011-12-02 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-33', '2021-07-08 20:32:27'),
('3110886152', '\n111232020084181018', '3110886152', 'Hiraya Malika Talima ', 'Hiraya Malika Talima ', 'P ', 'Sukabumi, 2011-04-30 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-11', '2021-07-08 20:32:27'),
('3110914703', '\n111232020084170007', '3110914703', 'Azmi N Sepriyani ', 'Azmi N Sepriyani ', 'L ', 'Sukabumi, 2011-02-09 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-4', '2021-07-08 20:32:46'),
('3110979269', '\n111232020084181004', '3110979269', 'Ajeng Amra Nur''ilmi ', 'Ajeng Amra Nur''ilmi ', 'P ', 'Sukabumi, 2011-06-22 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-4', '2021-07-08 20:32:27'),
('3111379271', '\n111232020084181021', '3111379271', 'Moh Arya Zulfikar ', 'Moh Arya Zulfikar ', 'L ', 'Sukabumi, 2011-07-03 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-14', '2021-07-08 20:32:27'),
('3111481806', '\n111232020084181006', '3111481806', 'Akbar Ramadan ', 'Akbar Ramadan ', 'L ', 'Sukabumi, 2011-07-05 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-5', '2021-07-08 20:32:27'),
('3111500530', '\n111232020084181024', '3111500530', 'Muhammad Luttfi Fadillah ', 'Muhammad Luttfi Fadillah ', 'L ', 'Sukabumi, 2011-12-14 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-46', '2021-07-08 20:32:27'),
('3111691077', '\n111232020084181048', '3111691077', 'Rizki Septiyaansyah ', 'Rizki Septiyaansyah ', 'L ', 'Sukabumi, 2011-09-10 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-59', '2021-07-08 20:32:27'),
('3111789050', '\n111232020084181047', '3111789050', 'Rasya Nazli Syakira ', 'Rasya Nazli Syakira ', 'P ', 'Sukabumi, 2011-04-14 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-58', '2021-07-08 20:32:27'),
('3112091893', '\n111232020084181005', '3112091893', 'Ajeng Klarisa Hapijah ', 'Ajeng Klarisa Hapijah ', 'P ', 'Sukabumi, 2011-09-29 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-35', '2021-07-08 20:32:27'),
('3112151852', '\n111232020084170034', '3112151852', 'Muhammad Adhnan ', 'Muhammad Adhnan ', 'L ', 'Sukabumi, 2011-03-05 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-17', '2021-07-08 20:32:46'),
('3112729773', '\n111232020084170035', '3112729773', 'Muhamad Fadhil Saepul Rahman ', 'Muhamad Fadhil Saepul Rahman ', 'L ', 'Sukabumi, 2011-03-05 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-52', '2021-07-08 20:32:46'),
('3112733721', '\n111232020084170041', '3112733721', 'Muhammad Rafqi Al Azhar ', 'Muhammad Rafqi Al Azhar ', 'L ', 'Sukabumi, 2011-01-29 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-18', '2021-07-08 20:32:46'),
('3112916433', '\n111232020084170036', '3112916433', 'Muhamad Fadma Nirwana ', 'Muhamad Fadma Nirwana ', 'L ', 'Sukabumi, 2011-06-14 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-15', '2021-07-08 20:32:46'),
('3113107338', '\n111232020084181044', '3113107338', 'Rahma Gusti Ramadhan ', 'Rahma Gusti Ramadhan ', 'P ', 'Sukabumi, 2011-08-26 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-24', '2021-07-08 20:32:27'),
('3113425081', '\n111232020084181028', '3113425081', 'Nadia Fauziah ', 'Nadia Fauziah ', 'P ', 'Sukabumi, 2011-11-24 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-49', '2021-07-08 20:32:27'),
('3113469504', '\n1112320200841701024', '3113469504', 'Khalda Naifa Risman ', 'Khalda Naifa Risman ', 'P ', 'Sukabumi, 2011-05-04 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-9', '2021-07-08 20:32:46'),
('3113479558', '\n111232020084181011', '3113479558', 'Delia Rahma ', 'Delia Rahma ', 'P ', 'Sukabumi, 2011-06-03 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-7', '2021-07-08 20:32:27'),
('3113601548', '\n111232020084170033', '3113601548', 'Moch Fadhil Al Fahrizi ', 'Moch Fadhil Al Fahrizi ', 'L ', 'Sukabumi, 2011-05-24 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-51', '2021-07-08 20:32:46'),
('3113738427', '\n111232020084181039', '3113738427', 'Nursipa ', 'Nursipa ', 'P ', 'Sukabumi, 2011-08-11 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-54', '2021-07-08 20:32:27'),
('3113746871', '\n111232020084181049', '3113746871', 'Sakila Rahmawati ', 'Sakila Rahmawati ', 'P ', 'Sukabumi, 2011-08-02 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-26', '2021-07-08 20:32:27'),
('3114207418', '\n111232020084181003', '3114207418', 'Adisty Maharani ', 'Adisty Maharani ', 'P ', 'Sukabumi, 2011-03-17 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-3', '2021-07-08 20:32:27'),
('3114295729', '\n111232020084170075', '3114295729', 'Muhammad Rayhan Syaputra ', 'Muhammad Rayhan Syaputra ', 'L ', 'Sukabumi, 2011-01-18 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-19', '2021-07-08 20:32:46'),
('3114334999', '\n111232020084181062', '3114334999', 'Tiya Nurlatifah ', 'Tiya Nurlatifah ', 'P ', 'Sukabumi, 2011-06-17 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-65', '2021-07-08 20:32:27'),
('3114518195', '\n111232020084181043', '3114518195', 'Rafli Stiawan ', 'Rafli Stiawan ', 'L ', 'Sukabumi, 2011-10-02 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-57', '2021-07-08 20:32:27'),
('3114809766', '\n111232020084181057', '3114809766', 'Silvina Nur Assyffa ', 'Silvina Nur Assyffa ', 'P ', 'Sukabumi, 2011-10-20 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-31', '2021-07-08 20:32:27'),
('3114988621', '\n111232020084181029', '3114988621', 'Nadzira Maryam El Firdaus ', 'Nadzira Maryam El Firdaus ', 'P ', 'Sukabumi, 2011-07-10 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-50', '2021-07-08 20:32:27'),
('3115247024', '\n111232020084170030', '3115247024', 'Maulana Malik Ibrahim ', 'Maulana Malik Ibrahim ', 'L ', 'Sukabumi, 2011-03-14 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-10', '2021-07-08 20:32:46'),
('3115382534', '\n111232020084181045', '3115382534', 'Raisa Citra Yulianti ', 'Raisa Citra Yulianti ', 'P ', 'Sukabumi, 2011-08-02 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-25', '2021-07-08 20:32:27'),
('3115548928', '\n111232020084170038', '3115548928', 'Muhamad Maulana ', 'Muhamad Maulana ', 'L ', 'Sukabumi, 2011-03-26 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-16', '2021-07-08 20:32:46'),
('3115638171', '\n111232020084181036', '3115638171', 'Nengsih Siti Lutviah ', 'Nengsih Siti Lutviah ', 'P ', 'Sukabumi, 2011-02-20 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-52', '2021-07-08 20:32:27'),
('3115669517', '\n111232020084181064', '3115669517', 'Zulfi Alfazri ', 'Zulfi Alfazri ', 'L ', 'Sukabumi, 2011-10-10 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-66', '2021-07-08 20:32:27'),
('3115712979', '\n111232020084170062', '3115712979', 'Shavira Andriani Abdullah ', 'Shavira Andriani Abdullah ', 'P ', 'Sukabumi, 2011-01-21 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-64', '2021-07-08 20:32:46'),
('3115737164', '\n111232020084181053', '3115737164', 'Sekar Febriani Maulida ', 'Sekar Febriani Maulida ', 'P ', 'Sukabumi, 2011-02-08 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-61', '2021-07-08 20:32:27'),
('3116079549', '\n111232020084170021', '3116079549', 'Kannaiya Fadiya Annisa Putri ', 'Kannaiya Fadiya Annisa Putri ', 'P ', 'Sukabumi, 2011-07-24 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-44', '2021-07-08 20:32:46'),
('3116298625', '\n111232020084181058', '3116298625', 'Silvina Ramadani ', 'Silvina Ramadani ', 'P ', 'Sukabumi, 2011-07-15 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-63', '2021-07-08 20:32:27'),
('3116315885', '\n111232020084181063', '3116315885', 'Wildan Mugia Anugrah ', 'Wildan Mugia Anugrah ', 'L ', 'Sukabumi, 2011-07-16 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-34', '2021-07-08 20:32:27'),
('3116543877', '\n111232020084181051', '3116543877', 'Salsabila Aulia Keisya ', 'Salsabila Aulia Keisya ', 'P ', 'Sukabumi, 2011-06-14 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-28', '2021-07-08 20:32:27'),
('3116641707', '\n111232020084181030', '3116641707', 'Nagita Kirani Putri ', 'Nagita Kirani Putri ', 'P ', 'Sukabumi, 2011-07-23 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-18', '2021-07-08 20:32:27'),
('3116807994', '\n111232020084181038', '3116807994', 'Nur Awafiatus Safiyah ', 'Nur Awafiatus Safiyah ', 'P ', 'Sukabumi, 2011-12-18 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-53', '2021-07-08 20:32:27'),
('3116904110', '\n111232020084170019', '3116904110', 'Imelda Sofia Aryani Putri ', 'Imelda Sofia Aryani Putri ', 'P ', 'Sukabumi, 2011-05-20 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-43', '2021-07-08 20:32:46'),
('3117494755', '\n111232020084181026', '3117494755', 'Muhammad Raden Rosyana ', 'Muhammad Raden Rosyana ', 'L ', 'Sukabumi, 2011-12-08 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-48', '2021-07-08 20:32:27'),
('3117497574', '\n111232020084181012', '3117497574', 'Egi Ramadhan ', 'Egi Ramadhan ', 'L ', 'Sukabumi, 2011-08-22 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-40', '2021-07-08 20:32:27'),
('3117694698', '\n111232020084181009', '3117694698', 'Anza Angriawan ', 'Anza Angriawan ', 'P ', 'Sukabumi, 2011-11-02 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-6', '2021-07-08 20:32:27'),
('3117748418', '\n111232020084181025', '3117748418', 'Muhammad Naufal Al Haidar ', 'Muhammad Naufal Al Haidar ', 'L ', 'Sukabumi, 2011-11-12 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-47', '2021-07-08 20:32:27'),
('3117754421', '\n111232020084181059', '3117754421', 'Siti Nur Azzyllah ', 'Siti Nur Azzyllah ', 'P ', 'Sukabumi, 2011-03-23 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-32', '2021-07-08 20:32:27'),
('3117841791', '\n111232020084181054', '3117841791', 'Sherin Aluz ', 'Sherin Aluz ', 'P ', 'Sukabumi, 2011-09-13 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-62', '2021-07-08 20:32:27'),
('3118032568', '\n111232020084181100', '3118032568', 'Shopie Ardanita Hamidah ', 'Shopie Ardanita Hamidah ', 'P ', 'Sukabumi, 2011-04-25 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-29', '2021-07-08 20:32:27'),
('3118098376', '\n111232020084181060', '3118098376', 'Sri Anjani ', 'Sri Anjani ', 'P ', 'Sukabumi, 2011-03-26 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-64', '2021-07-08 20:32:27'),
('3118372303', '\n111232020084181037', '3118372303', 'Noval Austian ', 'Noval Austian ', 'L ', 'Sukabumi, 2011-09-25 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-21', '2021-07-08 20:32:27'),
('3118568804', '\n111232020084170073', '3118568804', 'Zidan Julian Gustam ', 'Zidan Julian Gustam ', 'L ', 'Sukabumi, 2011-07-03 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-69', '2021-07-08 20:32:46'),
('3119071876', '\n111232020084181017', '3119071876', 'Haya Syala Aulia ', 'Haya Syala Aulia ', 'P ', 'Sukabumi, 2011-05-18 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-10', '2021-07-08 20:32:27'),
('3119097333', '\n111232020084170048', '3119097333', 'Nizam Ghifar Achmadi ', 'Nizam Ghifar Achmadi ', 'L ', 'Sukabumi, 2011-03-11 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-58', '2021-07-08 20:32:46'),
('3119375874', '\n111232020084181010', '3119375874', 'Arinda Putri ', 'Arinda Putri ', 'P ', 'Sukabumi, 2011-06-21 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-39', '2021-07-08 20:32:27'),
('3119618876', '\n111232020084181035', '3119618876', 'Neng Salwa Andriani ', 'Neng Salwa Andriani ', 'P ', 'Sukabumi, 2011-01-15 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-20', '2021-07-08 20:32:27'),
('3120036459', '\n111232020084181041', '3120036459', 'Putra Rabani ', 'Putra Rabani ', 'L ', 'Sukabumi, 2012-05-27 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-23', '2021-07-08 20:32:27'),
('3120364890', '\n111232020084191015', '3120364890', 'Fazri Aksan Septian ', 'Fazri Aksan Septian ', 'L ', 'Sukabumi, 2012-09-18 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-16', '2021-07-08 20:32:05'),
('3120539100', '\n111232020084191051', '3120539100', 'Gina Anggraeni Putri ', 'Gina Anggraeni Putri ', 'P ', 'Sukabumi, 2012-09-22 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-53', '2021-07-08 20:32:05'),
('3120566020', '\n111232020084181052', '3120566020', 'Sarda Ally ', 'Sarda Ally ', 'L ', 'Sukabumi, 2012-02-29 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-60', '2021-07-08 20:32:27'),
('3120658637', '\n111232020084191035', '3120658637', 'Septya Khayrunnisaa ', 'Septya Khayrunnisaa ', 'P ', 'Sukabumi, 2012-09-23 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-36', '2021-07-08 20:32:05'),
('3120747849', '\n111232020084191022', '3120747849', 'Muhammad Nafiis Al Wafi ', 'Muhammad Nafiis Al Wafi ', 'L ', 'Sukabumi, 2012-12-31 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-22', '2021-07-08 20:32:05'),
('3120964856', '\n111232020084191074', '3120964856', 'Zulfa Zahirah ', 'Zulfa Zahirah ', 'P ', 'Sukabumi, 2012-10-02 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-75', '2021-07-08 20:32:05'),
('3121029220', '\n111232020084181027', '3121029220', 'Naajiratul Muna ', 'Naajiratul Muna ', 'P ', 'Sukabumi, 2012-05-05 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-17', '2021-07-08 20:32:27'),
('3121298577', '\n111232020084191025', '3121298577', 'Muhammad Ramdhani Rachman ', 'Muhammad Ramdhani Rachman ', 'L ', 'Sukabumi, 2012-10-16 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-26', '2021-07-08 20:32:05'),
('3121344723', '\n111232020084170072', '3121344723', 'Zuhrotun Nisa Rahmalia Hidayat ', 'Zuhrotun Nisa Rahmalia Hidayat', 'P ', 'Sukabumi, 2012-01-10 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-34', '2021-07-08 20:32:46'),
('3121347485', '\n111232020084191070', '3121347485', 'Senja Oktaviani ', 'Senja Oktaviani ', 'P ', 'Sukabumi, 2012-10-17 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-71', '2021-07-08 20:32:05'),
('3121384958', '\n111232020084191056', '3121384958', 'Muhamad Angga Reksa ', 'Muhamad Angga Reksa ', 'L ', 'Sukabumi, 2012-08-29 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-57', '2021-07-08 20:32:05'),
('3121458969', '\n111232020084191034', '3121458969', 'Salwa Desinta Supendi ', 'Salwa Desinta Supendi ', 'P ', 'Sukabumi, 2012-09-14 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-35', '2021-07-08 20:32:05'),
('3121477080', '\n111232020084191023', '3121477080', 'Muhammad Exel Arrofi ', 'Muhammad Exel Arrofi ', 'L ', 'Sukabumi, 2012-08-13 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-21', '2021-07-08 20:32:05'),
('3121696491', '\n111232020084191009', '3121696491', 'Benzema Mirza Prawira ', 'Benzema Mirza Prawira ', 'L ', 'Sukabumi, 2012-08-14 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-10', '2021-07-08 20:32:05'),
('3121705313', '\n111232020084191031', '3121705313', 'Nuri Maulida ', 'Nuri Maulida ', 'P ', 'Sukabumi, 2012-11-19 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-32', '2021-07-08 20:32:05'),
('3121770237', '\n111232020084191047', '3121770237', 'Dzikri Khairil Az-zumar ', 'Dzikri Khairil Az-zumar ', 'L ', 'Sukabumi, 2012-11-08 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-49', '2021-07-08 20:32:05'),
('3121901379', '\n111232020084191029', '3121901379', 'Muhammad Zindan A Suyuti ', 'Muhammad Zindan A Suyuti ', 'L ', 'Sukabumi, 2012-05-27 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-30', '2021-07-08 20:32:05'),
('3121993918', '\n11123202008419140', '3121993918', 'Alda Adelia Putri ', 'Alda Adelia Putri ', 'P ', 'Sukabumi, 2012-05-11 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-42', '2021-07-08 20:32:05'),
('3122108443', '\n111232020084181065', '3122108443', 'Raden Gian Salsan Darmadi ', 'Raden Gian Salsan Darmadi ', 'L ', 'Sukabumi, 2012-01-20 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-56', '2021-07-08 20:32:27'),
('3122109868', '\n111232020084191021', '3122109868', 'Muhammad Nizam Alfaridzi ', 'Muhammad Nizam Alfaridzi ', 'L ', 'Sukabumi, 2012-04-09 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-24', '2021-07-08 20:32:05'),
('3122126004', '\n111232020084191028', '3122126004', 'Muhammad Zaky ', 'Muhammad Zaky ', 'L ', 'Sukabumi, 2012-09-11 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-29', '2021-07-08 20:32:05'),
('3122150523', '\n111232020084191071', '3122150523', 'Septi Madina Putri ', 'Septi Madina Putri ', 'P ', 'Sukabumi, 2012-09-02 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-72', '2021-07-08 20:32:05'),
('3122363131', '\n111232020084191017', '3122363131', 'Keila Tri Septa Maharani ', 'Keila Tri Septa Maharani ', 'P ', 'Sukabumi, 2012-09-30 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-18', '2021-07-08 20:32:05'),
('3122528528', '\n111232020084181020', '3122528528', 'Melonita Iswanti ', 'Melonita Iswanti ', 'P ', 'Sukabumi, 2012-05-26 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-44', '2021-07-08 20:32:27'),
('3122618375', '\n111232020084191072', '3122618375', 'Siti Ainnal Mardiyyah ', 'Siti Ainnal Mardiyyah ', 'P ', 'Sukabumi, 2012-10-16 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-73', '2021-07-08 20:32:05'),
('3122790372', '\n111232020084191026', '3122790372', 'Muhammad Rival Al Khafiz ', 'Muhammad Rival Al Khafiz ', 'L ', 'Sukabumi, 2012-11-28 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-27', '2021-07-08 20:32:05'),
('3123016531', '\n111232020084181022', '3123016531', 'Muhamad Hikari Al Zaidan ', 'Muhamad Hikari Al Zaidan ', 'L ', 'Sukabumi, 2012-03-27 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-15', '2021-07-08 20:32:27'),
('3123147592', '\n111232020084191055', '3123147592', 'Muhammad Yusuf Maulana ', 'Muhammad Yusuf Maulana ', 'L ', 'Sukabumi, 2012-11-07 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-61', '2021-07-08 20:32:05'),
('3123290022', '\n111232020084191050', '3123290022', 'Gilang Catur H ', 'Gilang Catur H ', 'L ', 'Sukabumi, 2012-12-16 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-52', '2021-07-08 20:32:05'),
('3123881512', '\n111232020084191058', '3123881512', 'Muhamad Gilang Anggara ', 'Muhamad Gilang Anggara ', 'L ', 'Sukabumi, 2012-01-04 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-59', '2021-07-08 20:32:05'),
('3123889216', '\n111232020084203077', '3123889216', 'Laila Nurazizatu Sholihah ', 'Laila Nurazizatu Sholihah ', 'P ', 'Garut, 2012-05-08 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-12', '2021-07-08 20:32:27'),
('3124103437', '\n111232020084191045', '3124103437', 'Bianka Purti Oktaviani ', 'Bianka Purti Oktaviani ', 'P ', 'Sukabumi, 2012-10-05 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-47', '2021-07-08 20:32:05'),
('3124112471', '\n111232020084170068', '3124112471', 'Teguh Arly Afyan ', 'Teguh Arly Afyan ', 'L ', 'Ciamis, 2012-01-12 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-32', '2021-07-08 20:32:46'),
('3124163633', '\n111232020084191006', '3124163633', 'Arsal Alfarizy ', 'Arsal Alfarizy ', 'L ', 'Sukabumi, 2012-11-08 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-7', '2021-07-08 20:32:05'),
('3124327454', '\n111232020084191041', '3124327454', 'Alia Weni Nurjanah ', 'Alia Weni Nurjanah ', 'P ', 'Sukabumi, 2012-12-23 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-43', '2021-07-08 20:32:05'),
('3124956752', '\n111232020084181007', '3124956752', 'Alya Maulida ', 'Alya Maulida ', 'P ', 'Sukabumi, 2012-02-05 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-36', '2021-07-08 20:32:27'),
('3125009975', '\n111232020084191008', '3125009975', 'Aulia Nada Sakinah ', 'Aulia Nada Sakinah ', 'P ', 'Sukabumi, 2012-04-28 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-9', '2021-07-08 20:32:05'),
('3125029127', '\n111232020084191067', '3125029127', 'Raka Ibrahim Al-awwal ', 'Raka Ibrahim Al-awwal ', 'L ', 'Sukabumi, 2012-07-05 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-69', '2021-07-08 20:32:05'),
('3125108323', '\n111232020084191018', '3125108323', 'Khairul Azzam Saputra ', 'Khairul Azzam Saputra ', 'L ', 'Sukabumi, 2012-11-02 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-19', '2021-07-08 20:32:05'),
('3125114233', '\n111232020084191043', '3125114233', 'Anisa Putri Pajriah ', 'Anisa Putri Pajriah ', 'P ', 'Sukabumi, 2012-08-02 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-45', '2021-07-08 20:32:05'),
('3125753983', '\n111232020084191027', '3125753983', 'Muhammad Tajul Falah ', 'Muhammad Tajul Falah ', 'L ', 'Sukabumi, 2012-05-29 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-28', '2021-07-08 20:32:05'),
('3126046628', '\n111132020084192076', '3126046628', 'Neng Ingeu Nur Hanijah ', 'Neng Ingeu Nur Hanijah ', 'P ', 'Sukabumi, 2012-01-09 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-51', '2021-07-08 20:32:27'),
('3126715988', '\n111232020084191062', '3126715988', 'Nur Anita Sari ', 'Nur Anita Sari ', 'P ', 'Sukabumi, 2012-12-03 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-64', '2021-07-08 20:32:05'),
('3127006939', '\n111232020084191005', '3127006939', 'Annisa Nurul Ahza ', 'Annisa Nurul Ahza ', 'P ', 'Bandung Barat, 2012-11-21 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-6', '2021-07-08 20:32:05'),
('3127142051', '\n111232020084191002', '3127142051', 'Airin Sevtaviany Putri ', 'Airin Sevtaviany Putri ', 'P ', 'Sukabumi, 2012-09-22 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-2', '2021-07-08 20:32:05'),
('3127209082', '\n111232020084191038', '3127209082', 'Zahwa Almira Sumadi ', 'Zahwa Almira Sumadi ', 'P ', 'Bogor, 2012-08-03 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-40', '2021-07-08 20:32:05'),
('3127241441', '\n111232020084181008', '3127241441', 'Angelita Nurmanda Rusmawati ', 'Angelita Nurmanda Rusmawati ', 'P ', 'Sukabumi, 2012-03-18 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-37', '2021-07-08 20:32:27'),
('3127374482', '\n111232020084191019', '3127374482', 'Muhammad Raihaan Putra ', 'Muhammad Raihaan Putra ', 'L ', 'Sukabumi, 2012-11-28 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-25', '2021-07-08 20:32:05'),
('3127751489', '\n111232020084191032', '3127751489', 'Oktafiane Safitri ', 'Oktafiane Safitri ', 'P ', 'Sukabumi, 2012-10-31 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-33', '2021-07-08 20:32:05'),
('3127766136', '\n111232020084191001', '3127766136', 'Adinda Putri Pahlevi ', 'Adinda Putri Pahlevi ', 'P ', 'Sukabumi, 2012-07-28 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-1', '2021-07-08 20:32:05'),
('3127869306', '\n111232020084181014', '3127869306', 'Fairel Athariza Rachman ', 'Fairel Athariza Rachman ', 'L ', 'Sukabumi, 2012-03-06 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-42', '2021-07-08 20:32:27'),
('3128105844', '\n111232020084181023', '3128105844', 'Muhamad Sigit Saputra ', 'Muhamad Sigit Saputra ', 'L ', 'Sukabumi, 2012-03-20 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-16', '2021-07-08 20:32:27'),
('3128162253', '\n111232020084191033', '3128162253', 'Raika Yuana Adista ', 'Raika Yuana Adista ', 'P ', 'Sukabumi, 2012-04-24 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-34', '2021-07-08 20:32:05'),
('3128230434', '\n111232020084191060', '3128230434', 'Nabila Putri Iskandar ', 'Nabila Putri Iskandar ', 'P ', 'Sukabumi, 2012-03-01 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-62', '2021-07-08 20:32:05'),
('3128266985', '\n111232020084181001', '3128266985', 'Adelia Nurazizah ', 'Adelia Nurazizah ', 'P ', 'Sukabumi, 2012-02-02 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-1', '2021-07-08 20:32:27'),
('3128282571', '\n111232020084191037', '3128282571', 'Syahwa Adinda Septia ', 'Syahwa Adinda Septia ', 'P ', 'Sukabumi, 2012-12-08 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-38', '2021-07-08 20:32:05'),
('3128339630', '\n111232020084181042', '3128339630', 'Putri Alifa Rahmah ', 'Putri Alifa Rahmah ', 'P ', 'Sukabumi, 2012-09-12 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-55', '2021-07-08 20:32:27'),
('3128554481', '\n111232020084191039', '3128554481', 'Ahmad Jumaidi Setiawan ', 'Ahmad Jumaidi Setiawan ', 'L ', 'Sukabumi, 2012-05-11 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-41', '2021-07-08 20:32:05'),
('3129050996', '\n111232020084191046', '3129050996', 'Deva Septa Dwiandra ', 'Deva Septa Dwiandra ', 'L ', 'Sukabumi, 2012-09-28 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-48', '2021-07-08 20:32:05'),
('3129079059', '\n111232020084191049', '3129079059', 'Fathir Maulana Suhendar ', 'Fathir Maulana Suhendar ', 'L ', 'Sukabumi, 2012-01-19 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-51', '2021-07-08 20:32:05'),
('3129712544', '\n111232020084191014', '3129712544', 'Fazar Aksan Ramadhan ', 'Fazar Aksan Ramadhan ', 'L ', 'Sukabumi, 2012-09-18 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-15', '2021-07-08 20:32:05'),
('3129793103', '\n111232020084181040', '3129793103', 'Prabu Arya Djwan ', 'Prabu Arya Djwan ', 'L ', 'Sukabumi, 2012-04-25 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas3', '0', '2018', '2018-22', '2021-07-08 20:32:27'),
('3129981290', '\n111232020084191052', '3129981290', 'Ibnu Padilah ', 'Ibnu Padilah ', 'L ', 'Sukabumi, 2012-11-28 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-54', '2021-07-08 20:32:05'),
('3130127635', '\n111232020084200157', '3130127635', 'Qisya Nur Akeela ', 'Qisya Nur Akeela ', 'P ', 'Sukabumi, 2013-05-30 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-53', '2021-07-08 20:31:41'),
('3130292687', '\n111232020084191016', '3130292687', 'Jieo Valley Marvin ', 'Jieo Valley Marvin ', 'L ', 'Sukabumi, 2013-03-09 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-17', '2021-07-08 20:32:05'),
('3130486904', '\n111232020084191024', '3130486904', 'Muhammad Nazril Munajatillah ', 'Muhammad Nazril Munajatillah ', 'L ', 'Sukabumi, 2013-01-24 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-23', '2021-07-08 20:32:05'),
('3130565771', '\n111232020084200124', '3130565771', 'Luthfia Zahra Talita ', 'Luthfia Zahra Talita ', 'P ', 'Sukabumi, 2013-09-29 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-43', '2021-07-08 20:31:41'),
('3131133103', '\n111232020084191004', '3131133103', 'Alya Putri ', 'Alya Putri ', 'P ', 'Sukabumi, 2013-01-27 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-5', '2021-07-08 20:32:05'),
('3131290154', '\n111232020084200101', '3131290154', 'Adam Mustofa Agwal ', 'Adam Mustofa Agwal ', 'L ', 'Sukabumi, 2013-08-15 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-1', '2021-07-08 20:31:41'),
('3131664196', '\n111232020084202104', '3131664196', 'Aura Novelia Putri ', 'Aura Novelia Putri ', 'P ', 'Sukabumi, 2013-11-22 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-6', '2021-07-08 20:31:41'),
('3131746982', '\n111232020084191007', '3131746982', 'Asri Dewi Humairah ', 'Asri Dewi Humairah ', 'P ', 'Sukabumi, 2013-03-18 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-8', '2021-07-08 20:32:05'),
('3131823263', '\n111232020084191064', '3131823263', 'Priyani Nuraeni ', 'Priyani Nuraeni ', 'P ', 'Sukabumi, 2013-12-30 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-66', '2021-07-08 20:32:05'),
('3132295007', '\n111232020084200142', '3132295007', 'Nizam Assyifa ', 'Nizam Assyifa ', 'L ', 'Sukabumi, 2013-08-15 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-22', '2021-07-08 20:31:41'),
('3132424575', '\n111232020084191073', '3132424575', 'Syahira Asya Aluna ', 'Syahira Asya Aluna ', 'P ', 'Sukabumi, 2013-04-16 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-74', '2021-07-08 20:32:05'),
('3132576402', '\n111232020084200114', '3132576402', 'Bimanyu Manggala Putra ', 'Bimanyu Manggala Putra ', 'L ', 'Sukabumi, 2013-09-23 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-38', '2021-07-08 20:31:41'),
('3132616177', '\n111232020084200103', '3132616177', 'Aini Dwi Raina ', 'Aini Dwi Raina ', 'P ', 'Sukabumi, 2013-07-04 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-3', '2021-07-08 20:31:41'),
('3132757471', '\n111232020084191044', '3132757471', 'Azzah Maulidah ', 'Azzah Maulidah ', 'P ', 'Sukabumi, 2013-01-25 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-46', '2021-07-08 20:32:05'),
('3132867822', '\n111232020084200129', '3132867822', 'Meysyahlani Putri Asysyifa ', 'Meysyahlani Putri Asysyifa ', 'P ', 'Sukabumi, 2013-05-23 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-14', '2021-07-08 20:31:41'),
('3133015695', '\n111232020084200122', '3133015695', 'Kayfa Alfishar ', 'Kayfa Alfishar ', 'P ', 'Sukabumi, 2013-04-19 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-41', '2021-07-08 20:31:41'),
('3133108018', '\n111232020084200121', '3133108018', 'Kanaya Aurelia ', 'Kanaya Aurelia ', 'P ', 'Sukabumi, 2013-05-30 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-11', '2021-07-08 20:31:41'),
('3133156131', '\n111232020084191063', '3133156131', 'Nurul Hikmah ', 'Nurul Hikmah ', 'P ', 'Sukabumi, 2013-03-20 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-65', '2021-07-08 20:32:05'),
('3133426578', '\n111232020084191011', '3133426578', 'Djibran Azziaro Wibowo ', 'Djibran Azziaro Wibowo ', 'L ', 'Sukabumi, 2013-07-23 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-12', '2021-07-08 20:32:05'),
('3133668628', '\n111232020084191010', '3133668628', 'Devino Saputra Bahari ', 'Devino Saputra Bahari ', 'L ', 'Sukabumi, 2013-01-10 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-11', '2021-07-08 20:32:05'),
('3134577328', '\n111232020084200141', '3134577328', 'Nayla Meidina Putri ', 'Nayla Meidina Putri ', 'P ', 'Sukabumi, 2013-08-08 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-51', '2021-07-08 20:31:41'),
('3134990756', '\n111232020084200145', '3134990756', 'Rafka Alif Putra ', 'Rafka Alif Putra ', 'L ', 'Sukabumi, 2013-01-05 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-23', '2021-07-08 20:31:41'),
('3135055862', '\n111232020084191065', '3135055862', 'Putri Fatimah ', 'Putri Fatimah ', 'P ', 'Sukabumi, 2013-05-22 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-67', '2021-07-08 20:32:05'),
('3135091426', '\n111232020084200134', '3135091426', 'Muhamad Akbar Syawaludin ', 'Muhamad Akbar Syawaludin ', 'L ', 'Sukabumi, 2013-08-20 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-18', '2021-07-08 20:31:41'),
('3135147660', '\n111232020084200101', '3135147660', 'Husna Liyana Zahirah ', 'Husna Liyana Zahirah ', 'P ', 'Sukabumi, 2013-10-05 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-40', '2021-07-08 20:31:41'),
('3135241608', '\n111232020084191066', '3135241608', 'Rafa Rizki Maulana ', 'Rafa Rizki Maulana ', 'L ', 'Sukabumi, 2013-01-13 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-68', '2021-07-08 20:32:05'),
('3135279037', '\n111232020084200120', '3135279037', 'Intan Syahira ', 'Intan Syahira ', 'P ', 'Sukabumi, 2013-03-18 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-10', '2021-07-08 20:31:41'),
('3135486947', '\n111232020084191069', '3135486947', 'Said Mubarok ', 'Said Mubarok ', 'L ', 'Sukabumi, 2013-04-20 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-70', '2021-07-08 20:32:05'),
('3135648996', '\n111232020084200155', '3135648996', 'Sarah Chaura Wardhani ', 'Sarah Chaura Wardhani ', 'P ', 'Jakarta, 2013-12-28 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-56', '2021-07-08 20:31:41'),
('3135732759', '\n111232020084200106', '3135732759', 'M. Azka Kiandra. P ', 'M. Azka Kiandra. P ', 'L ', 'Sukabumi, 2013-02-06 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-13', '2021-07-08 20:31:41'),
('3136219138', '\n111232020084200127', '3136219138', 'M. Gilang Alfazri ', 'M. Gilang Alfazri ', 'L ', 'Sukabumi, 2013-03-19 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-15', '2021-07-08 20:31:41'),
('3136511120', '\n111232020084200136', '3136511120', 'Muhamad Khairi El Azam ', 'Muhamad Khairi El Azam ', 'L ', 'Sukabumi, 2013-10-17 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-49', '2021-07-08 20:31:41'),
('3136635464', '\n111232020084191020', '3136635464', 'M. Arkhan Assama Al. Ar. ', 'M. Arkhan Assama Al. Ar. ', 'L ', 'Sukabumi, 2013-01-30 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-20', '2021-07-08 20:32:05'),
('3136642685', '\n111232020084201277', '3136642685', 'Muhamad Arya Maulana ', 'Muhamad Arya Maulana ', 'L ', 'Sukabumi, 2013-06-17 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-48', '2021-07-08 20:31:41'),
('3136763292', '\n111232020084191036', '3136763292', 'Silfa Ruhayati ', 'Silfa Ruhayati ', 'P ', 'Sukabumi, 2013-04-08 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-37', '2021-07-08 20:32:05'),
('3137943230', '\n111232020084200133', '3137943230', 'Muhamad Akbar Rikza ', 'Muhamad Akbar Rikza ', 'L ', 'Sukabumi, 2013-10-15 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-47', '2021-07-08 20:31:41');
INSERT INTO `siswa` (`Nik_Siswa`, `Nis`, `Nisn`, `Nama_Lengkap`, `Nama_Panggilan`, `Jenis_Kelamin`, `Tempat_Lahir`, `Tanggal_Lahir`, `Agama`, `Kewarganegaraan`, `Anak_Ke`, `Banyak_Saudara_Kandung`, `Banyak_Saudara_Tiri`, `Banyak_Saudara_Angkat`, `Bahasa_Sehari_Hari`, `Berat_Badan`, `Tinggi_Badan`, `Golongan_Darah`, `Penyakit_Yang_Pernah_Diderita`, `Tinggal_Bersama`, `Jarak_Rumah_Ke_Sekolah`, `Alamat_Rumah`, `Status_Siswa`, `Kelas`, `Tanggal_Mendaftar`, `TA`, `No_Pendaftaran`, `Tanggal_Diperbarui`) VALUES
('3138316273', '\n111232020084191003', '3138316273', 'Alisya Kusuma Dewi ', 'Alisya Kusuma Dewi ', 'P ', 'Sukabumi, 2013-03-30 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-4', '2021-07-08 20:32:05'),
('3138539143', '\n111232020084200117', '3138539143', 'Dimas Erlangga Putra ', 'Dimas Erlangga Putra ', 'L ', 'Sukabumi, 2013-10-02 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-9', '2021-07-08 20:31:41'),
('3139118170', '\n111232020084200129', '3139118170', 'Alzyo Tripta Rahman ', 'Alzyo Tripta Rahman ', 'L ', 'Sukabumi, 2013-01-21 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-33', '2021-07-08 20:31:41'),
('3139590347', '\n111232020084200132', '3139590347', 'Muhamad Aditya Pangestu ', 'Muhamad Aditya Pangestu ', 'L ', 'Sukabumi, 2013-12-27 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-46', '2021-07-08 20:31:41'),
('3139718594', '\n111232020084202060', '3139718594', 'Al Firaz Faiz ', 'Al Firaz Faiz ', 'L ', 'Sukabumi, 2013-01-28 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas2', '0', '2019', '2019-3', '2021-07-08 20:32:05'),
('3139726844', '\n111232020084200125', '3139726844', 'M. Fatih Al Muhgni ', 'M. Fatih Al Muhgni ', 'L ', 'Sukabumi, 2013-08-13 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-45', '2021-07-08 20:31:41'),
('3142649525', '\n111232020084200107', '3142649525', 'Alunna Putri Salihha ', 'Alunna Putri Salihha ', 'P ', 'Sukabumi, 2014-03-25 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-32', '2021-07-08 20:31:41'),
('3142993172', '\n111232020084200137', '3142993172', 'Muhamad Nizam Arsyad ', 'Muhamad Nizam Arsyad ', 'L ', 'Sukabumi, 2014-01-17 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-50', '2021-07-08 20:31:41'),
('3144827299', '\n111232020084200154', '3144827299', 'Sakha Arkan Wiratama ', 'Sakha Arkan Wiratama ', 'L ', 'Sukabumi, 2014-01-24 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-29', '2021-07-08 20:31:41'),
('3145467193', '\n111232020084200156', '3145467193', 'Seda Wandira ', 'Seda Wandira ', 'L ', 'Sukabumi, 2014-02-02 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-57', '2021-07-08 20:31:41'),
('3145582626', '\n111232020084200153', '3145582626', 'Syafia Al Maula Ahmad ', 'Syafia Al Maula Ahmad ', 'P ', 'Sukabumi, 2014-01-28 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-30', '2021-07-08 20:31:41'),
('3145694737', '\n111232020084200162', '3145694737', 'Muchamad Bagas Saputra ', 'Muchamad Bagas Saputra ', 'L ', 'Sukabumi, 2014-05-25 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-16', '2021-07-08 20:31:41'),
('3146857037', '\n111232020084200138', '3146857037', 'Muhammad Faturachman Sidiq ', 'Muhammad Faturachman Sidiq ', 'L ', 'Sukabumi, 2014-02-17 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-20', '2021-07-08 20:31:41'),
('3146939717', '\n111232020084200131', '3146939717', 'Muhamad Abizar Rayhan ', 'Muhamad Abizar Rayhan ', 'L ', 'Sukabumi, 2014-02-10 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-17', '2021-07-08 20:31:41'),
('3147051434', '\n111232020084200147', '3147051434', 'Rakha Pratama Rismawan ', 'Rakha Pratama Rismawan ', 'L ', 'Sukabumi, 2014-03-01 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-25', '2021-07-08 20:31:41'),
('3147253983', '\n111232020084202012', '3147253983', 'Aulya Tifira Walissa ', 'Aulya Tifira Walissa ', 'P ', 'Sukabumi, 2014-02-02 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-37', '2021-07-08 20:31:41'),
('3147340248', '\n111232020084200150', '3147340248', 'Rizki Dioghani ', 'Rizki Dioghani ', 'L ', 'Sukabumi, 2014-03-03 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-28', '2021-07-08 20:31:41'),
('3153648034', '\n111232020084200111', '3153648034', 'Arsyil Rizki Alfaro ', 'Arsyil Rizki Alfaro ', 'L ', 'Sukabumi, 2015-04-23 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas1', '0', '2020', '2020-36', '2021-07-08 20:31:41'),
('71565110', '\n111232020084170042', '71565110', 'Muhammad Rasya Nurrahman ', 'Muhammad Rasya Nurrahman ', 'L ', 'Sukabumi, 2007-10-27 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas4', '0', '2017', '2017-55', '2021-07-08 20:32:46'),
('82001024', '\n1112320200841905089', '82001024', 'Riko Anugrah Hanafi ', 'Riko Anugrah Hanafi ', 'L ', 'Bogor, 2007-10-19 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas6', '0', '2015', '2015-26', '2021-07-08 20:33:28'),
('91887794', '\n111232020084205053', '91887794', 'Moza Ozora Salsabila ', 'Moza Ozora Salsabila ', 'P ', 'Sukabumi, 2009-09-29 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-23', '2021-07-08 20:33:08'),
('98227269', '\n111232020084172076', '98227269', 'Nabila Fauziah ', 'Nabila Fauziah ', 'P ', 'Sukabumi, 2009-06-23 ', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'aktif', 'kelas5', '0', '2016', '2016-33', '2021-07-08 20:33:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `token`
--

CREATE TABLE `token` (
  `id` int(11) NOT NULL,
  `Kontak` text NOT NULL,
  `Token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `UserName` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Level` enum('user','admin','admin1','pengajar','siswa') NOT NULL,
  `Pengguna` enum('user','default') NOT NULL,
  `akses` varchar(25) NOT NULL,
  `Waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Fhoto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`UserName`, `Password`, `Level`, `Pengguna`, `akses`, `Waktu`, `Fhoto`) VALUES
('\n111232020084170000', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('\n111232020084170052', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('\n111232020084170056', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('\n111232020084170057', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('\n111232020084171020', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('\n1112320200842000025', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('104863573', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('108164816', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('108836946', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('111232020084', 'swasta', 'admin', 'user', 'aktif', '2021-07-02 19:26:00', '02_Jul_2021_02_26_00_1.jpeg'),
('111232020084170052', 'miskompa', 'siswa', 'user', 'aktif', '2021-07-02 19:17:53', 'user.png'),
('111232020084170056', 'miskompa', 'siswa', 'user', 'aktif', '2021-07-02 19:17:53', 'user.png'),
('111232020084170057', 'miskompa', 'siswa', 'user', 'aktif', '2021-07-02 19:19:42', 'user.png'),
('111232020084170066', 'miskompa', 'siswa', 'user', 'aktif', '2021-07-02 19:19:42', 'user.png'),
('111232020084171020', 'miskompa', 'siswa', 'user', 'aktif', '2021-07-02 19:19:42', 'user.png'),
('1112320200842000025', 'miskompa', 'siswa', 'user', 'aktif', '2021-07-02 19:19:42', 'user.png'),
('111519402', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('113727934', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('1139748650300093', '149', 'pengajar', 'user', 'aktif', '2021-06-25 14:23:57', 'lilis.jpg'),
('114510414', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('119906777', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('121502049', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('121812431', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('121927194', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('123104889', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('1234', '149', 'pengajar', 'user', 'aktif', '2021-08-18 04:24:35', 'user.png'),
('123496050', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('124239664', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('124418144', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('127341188', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('129741219', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('131145427', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('131350942', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('131545130', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('131592773', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('131769881', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('132464582', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('1333763664300053', '149', 'pengajar', 'user', 'aktif', '2021-06-25 14:23:57', 'user.png'),
('134126455', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('134795997', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('134857252', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('135529621', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('136235445', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('136237304', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('136512899', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('136522189', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('137364842', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('138444687', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('139791093', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('141781110', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('141989242', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('143100794', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('143988669', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('144105148', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('145400661', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('149', '149', 'admin', 'default', 'aktif', '2021-07-08 18:11:36', 'anonymous.jpg'),
('1491', '149', 'siswa', 'user', 'aktif', '2021-08-18 21:20:54', '18_Aug_2021_04_20_54_1.jpeg'),
('150', '149', 'pengajar', 'default', 'aktif', '2021-06-25 14:23:57', 'user.png'),
('1736754656200052', '149', 'pengajar', 'user', 'aktif', '2021-06-25 14:23:57', 'user.png'),
('1758760661200032', '149', 'admin', 'user', 'aktif', '2021-06-25 14:23:58', 'user.png'),
('1953757659300032', '149', 'pengajar', 'user', 'aktif', '2021-06-25 14:23:58', 'ai.jpg'),
('20246574192001', '149', 'pengajar', 'user', 'aktif', '2021-06-25 14:23:58', 'user.png'),
('20246574198001', '149', 'pengajar', 'user', 'aktif', '2021-06-25 14:23:58', 'nurcahyani.png'),
('3056632622', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3072019481', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3072329250', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3078207490', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3080131044', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3080277347', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3080282532', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3080732609', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3080755885', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3080860596', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3080916221', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3081054612', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3081441136', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3081764136', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3081888125', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3081945482', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3082032791', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3082843637', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3083046254', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3083074458', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3083833810', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3083865403', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3083874675', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3084381486', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3084433233', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3084558110', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3084629885', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3084726130', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3085330229', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3085473829', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3086519022', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3086677601', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3086912429', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3087225255', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3087278210', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3087285298', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3087431078', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3087556110', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3087894240', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3088773707', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3089278282', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3089364242', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3089464954', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3089534972', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3089905526', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3090193620', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3090668379', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3090922389', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3091155092', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3091413703', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3091429214', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3091642357', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3091827604', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3091832854', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3091996730', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3092014373', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3092209852', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3092469828', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3093007252', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3093167225', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3093226703', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3093367353', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3093422097', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3093591140', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3093726682', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3093732314', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3094012137', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3094308420', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3094485690', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3094580713', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3094624380', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3094839739', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3095051422', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3095278335', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3095281704', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3095330587', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3095480561', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3095495429', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3095589702', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3096021681', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3096024697', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3096101233', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3096187497', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3096340200', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3096540768', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3096582496', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3096643291', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3096700271', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3096853956', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3096891400', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3097133764', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3097435913', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3097625939', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3098038725', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3098154958', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3098249515', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3098253413', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3098421612', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3098651838', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3098662889', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3098826483', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3098983612', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3099123190', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3099175682', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3099268809', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3099413137', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3099672758', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3099690496', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3099852979', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3100009389', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3100832864', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3101022199', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3101188083', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3101222216', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3101280753', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3101398342', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3101527110', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3101597283', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3101820732', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3102135283', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3102225471', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3102310274', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3102331461', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3102332367', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3102544742', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3102749811', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3102864233', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3102868078', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3102982649', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3103096421', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3103647777', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3103822033', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3103948658', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3104390783', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3104478077', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3104952418', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3105056647', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3105220606', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3105298651', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3105473376', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3105685793', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3105690974', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3105936640', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3106056817', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3106105843', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3106783119', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3106948882', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3107133598', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3107146209', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3107727639', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3108024748', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3108315935', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3108368278', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3109436376', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3109520238', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3109596633', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3109780316', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3110002587', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3110129815', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3110207917', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3110302186', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3110335038', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3110349518', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3110397963', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3110538105', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3110590753', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3110886152', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3110914703', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3110979269', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3111379271', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3111481806', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3111500530', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3111691077', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3111789050', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3112091893', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3112151852', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3112729773', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3112733721', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3112916433', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3113107338', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3113425081', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3113469504', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3113479558', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3113601548', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3113738427', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3113746871', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3114207418', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3114295729', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3114334999', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3114518195', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3114809766', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3114988621', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3115247024', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3115382534', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3115548928', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3115638171', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3115669517', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3115712979', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3115737164', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3116079549', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3116298625', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3116315885', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3116543877', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3116641707', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3116807994', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3116904110', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3117494755', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3117497574', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3117694698', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3117748418', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3117754421', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3117841791', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3118032568', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3118098376', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3118372303', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3118568804', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3119071876', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3119097333', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3119375874', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3119618876', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3120036459', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3120364890', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3120539100', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3120566020', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3120658637', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3120747849', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3120964856', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3121029220', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3121298577', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3121344723', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3121347485', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3121384958', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3121458969', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3121477080', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3121696491', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3121705313', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3121770237', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3121901379', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3121993918', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3122108443', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3122109868', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3122126004', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3122150523', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3122363131', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3122528528', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3122618375', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3122790372', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3123016531', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3123147592', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3123290022', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3123881512', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3123889216', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3124103437', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3124112471', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3124163633', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3124327454', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3124956752', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3125009975', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3125029127', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3125108323', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3125114233', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3125753983', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3126046628', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3126715988', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3127006939', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3127142051', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3127209082', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3127241441', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3127374482', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3127751489', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3127766136', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3127869306', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3128105844', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3128162253', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3128230434', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3128266985', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3128282571', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3128339630', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3128554481', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3129050996', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3129079059', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3129712544', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3129793103', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3129981290', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3130127635', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3130292687', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3130486904', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3130565771', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3131133103', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3131290154', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3131664196', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3131746982', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3131823263', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3132295007', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3132424575', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3132576402', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3132616177', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3132757471', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3132867822', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3133015695', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3133108018', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3133156131', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3133426578', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3133668628', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3134577328', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3134990756', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3135055862', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3135091426', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3135147660', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3135241608', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3135279037', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3135486947', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3135648996', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3135732759', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3136219138', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3136511120', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3136635464', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3136642685', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3136763292', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3137943230', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3138316273', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3138539143', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3139118170', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3139590347', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3139718594', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3139726844', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3142649525', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3142993172', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3144827299', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3145467193', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3145582626', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3145694737', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3146857037', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3146939717', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3147051434', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3147253983', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3147340248', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3153648034', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('3535718620200002', '149', 'pengajar', 'user', 'aktif', '2021-06-25 14:23:58', 'user.png'),
('4533756659300002', '149', 'pengajar', 'user', 'aktif', '2021-06-25 14:23:58', 'nia.png'),
('5049755657300083', '149', 'pengajar', 'user', 'aktif', '2021-06-25 14:23:58', 'user.png'),
('5937752653200032', '149', 'pengajar', 'user', 'aktif', '2021-06-25 14:23:58', 'user.png'),
('71565110', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('7337748651300073', '149', 'admin1', 'user', 'aktif', '2021-06-25 14:23:58', 'lia.jpg'),
('7339748652300003', '149', 'pengajar', 'user', 'aktif', '2021-06-25 14:23:58', 'nurhasanah.jpg'),
('82001024', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('8662763663300002', '149', 'pengajar', 'user', 'aktif', '2021-06-25 14:23:58', 'user.png'),
('91887794', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('98227269', 'miskompa', 'siswa', 'user', 'aktif', '0000-00-00 00:00:00', 'user.png'),
('sabartea', '1234', 'admin', 'user', 'aktif', '2021-06-29 19:21:30', '29_Jun_2021_02_21_30_14.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Nik_Pengajar`);

--
-- Indexes for table `asal_mula_siswa`
--
ALTER TABLE `asal_mula_siswa`
  ADD PRIMARY KEY (`Nik_Siswa`);

--
-- Indexes for table `baner`
--
ALTER TABLE `baner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelengkapan_data`
--
ALTER TABLE `kelengkapan_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kepala_sekolah`
--
ALTER TABLE `kepala_sekolah`
  ADD PRIMARY KEY (`Nik_Pengajar`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orang_tua_siswa`
--
ALTER TABLE `orang_tua_siswa`
  ADD PRIMARY KEY (`Nik_Siswa`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`Nik_Pengajar`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`NSS`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`Nik_Siswa`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baner`
--
ALTER TABLE `baner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kelengkapan_data`
--
ALTER TABLE `kelengkapan_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
