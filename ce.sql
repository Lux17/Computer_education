-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2023 at 07:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(200) NOT NULL,
  `rolename` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_user`, `username`, `password`, `rolename`) VALUES
(1, 'ketum', 'b8f504b6a7f1374bd9d165f8bea29579c79b7ed8', 'admin'),
(3, 'sekertaris', '9fecf78d4126417f320dcac4c4e867313c8ebacb', 'sekertaris'),
(5, 'publikasi', 'b8f504b6a7f1374bd9d165f8bea29579c79b7ed8', 'publikasi');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_anggota` varchar(50) NOT NULL,
  `lahir` varchar(50) NOT NULL,
  `nomer_hp` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `jabatan` varchar(60) NOT NULL,
  `divisi` varchar(20) NOT NULL,
  `sub_divisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `no_anggota`, `lahir`, `nomer_hp`, `prodi`, `alamat`, `jabatan`, `divisi`, `sub_divisi`) VALUES
(5, 'Setiawan', 'CE 19.20.052', 'Cirebon, 21 Februari 2001', '08818285309', 'Teknik Informatika', ' ss', 'Demisioner', '', ''),
(17, 'Lucky  Saputra', 'CE 20.21.031', 'Cirebon, 17 Januari 2002', '08818285309', 'Teknik Informatika', ' Munduss', 'Pengurus', 'Ketua Div Organisasi', '');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `description` mediumtext NOT NULL,
  `date` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `date`, `image`) VALUES
(22, 'Harlah CE33', '<p>yuk harlah</p>', '17 Desember 2022', 'https://drive.google.com/file/d/1oYVI6dIWgciubRMq0MJ5A8obq3uZG6fO/preview'),
(23, 'Cerita rakyat', '<p>Cerita rakyat Indonesia (bahasa Inggris; folktale) adalah cerita yang berasal dari masyarakat Indonesia yang telah diwarisi secara lisan. Cerita ini menjadi satu set dari sikap, perilaku, dan nilai\r\n1.	Aghisna Baihaqi\r\n2.	Ahmad Sholeh Mashudi\r\n3.	Anwar Ibrahim\r\n4.	Ayu Meilina Zahra\r\n5.	Ayu Santika\r\n6.	Dewi Kurnia\r\n7.	Erene Nazharita\r\n8.	FATMAWATI\r\n9.	FILLAHI HAZARUL AKBAR\r\n10.	Fani Ariska\r\n11.	Hendriansah Ramadhani\r\n12.	Irma Adeliani\r\n13.	Khusnul Khotimah\r\n14.	Lais Cakrawati\r\n15.	Lala \'Adilah\r\n16.	Lilis indiyanis\r\n17.	Liviana Safitri\r\n18.	Liyani Ramadani\r\n19.	Luthfiyah Azizah Azmi\r\n20.	MOCH NASHIRUDIN ALAMSYAH\r\n21.	Mahdi\r\n22.	Mufasihatul munnaffaroh\r\n23.	Muhamad Rafly Prasetyo\r\n24.	Muhammad Aep Syaifudin\r\n25.	Muhammad Fadlan\r\n26.	Muhammad Fauzan\r\n27.	Muhammad iddar rajab\r\n28.	Najmi Annyndya Jasmine\r\n29.	Nike Widia\r\n30.	Putri Robi\'atul Adawiyah\r\n31.	Refa Agustine Surya Utami\r\n32.	Restu mulyana\r\n33.	Rian Saputra\r\n34.	Rifa Nurfaizah\r\n35.	Riyan Agus Fahera\r\n36.	Rizal Rahman\r\n37.	Sakri Sandikiawan\r\n38.	Salma Aulia Nazhira\r\n39.	Siti Cholifah\r\n40.	Suci Sugiharti Nurjanah\r\n41.	Umar Faqih\r\n42.	Wahyu\r\n43.	Wahyudin\r\n44.	Wulan triana\r\n', '18 Desember 2022', 'https://drive.google.com/file/d/1oYVI6dIWgciubRMq0MJ5A8obq3uZG6fO/view?usp=share_link'),
(24, 'HAHA', '<p>Cerita rakyat Indonesia (bahasa Inggris; folktale) adalah cerita yang berasal dari masyarakat Indonesia yang telah diwarisi secara lisan. Cerita ini menjadi satu set dari sikap, perilaku, dan nilai</p><p>Cerita rakyat Indonesia (bahasa Inggris; folktale) adalah cerita yang berasal dari masyarakat Indonesia yang telah diwarisi secara lisan. Cerita ini menjadi satu set dari sikap, perilaku, dan nilai-nilai yang dimiliki masyarakat Indonesia yang terus berlanjut ke generasi seterusnya melalui tradisi tutur.[1] Cerita tersebut umumnya memiliki nilai-nilai kearifan lokal yang berhubungan erat dengan terjadinya suatu hal (peristiwa, kejadian, dan sebagainya). Kearifan lokal tersebut biasanya tercermin dari kesenian, mata pencaharian, bahasa, kekerabatan, dan teknologi dan pengetahuan alam. Cerita rakyat Indonesia menyebar hampir di setiap daerah/pulau di Indonesia. Beberapa cerita terkadang memiliki kesamaan namun tetap memiliki sisi kekhasan warga setempat. Cerita rakyat Indonesia menjadi salah satu tradisi tutur yang harus dijaga agar tidak punah. Keanekaragaman cerita ini menjadi salah satu bukti tentang beragam kebudayaan di Indonesia.</p><p>Contoh cerita rakyat Indonesia<br>Cerita rakyat Sumatera[2]<br>Asal Mula Danau Laut Tawar<br>Asal Mula Dana Si Losung dan Si Pinggan<br>Asal Mula Sungai Ombilin dan Danau Singkar<br>Asal Usul Silampari<br>Buaya Perompak<br>Hang Tuah<br>Hikayat Keramat Bujang<br>Kera Putih dan Tali Kapal<br>Kisah Pohon Enau<br>Legenda Batu Gantung<br>Legenda Beru Ginting Sope Mbelin<br>Asal Usul Danau Toba<br>Legenda Lau Kawar<br>Legenda Mas Merah<br>Legenda Namora Pande Bosi<br>Legenda Pulau Kapal<br>Legenda Putri Bidadari<br>Legenda Putri Hijau<br>Legenda Putri Nai Mangale<br>Legenda Putri Runduk<br>Legenda Putri Ular dari Simalungun<br>Legenda Sampuraga<br>Legenda Si Gale-Gale<br>Legenda Simardan<br>Legenda si Lancang<br>Legenda Ular Kepala Tujuh<br>Musang Berjanggut<br>Pati Enggang dan Rio Brani<br>Putri Pandan Berduri<br>Putri Naga<br>Raja Pareeket<br>Raja yang Culas<br>Si Malin Kundang<br>Si Miskin yang Tamak<br>Si Pahit Lidah<br>Si Sigarlaki dan si Limbat<br>Sungai Jodoh<br>Ting Gegenting<br>Kisah Putri Ular<br>Cerita rakyat Kalimantan<br>Legenda Danau Lipan<br>Asal Mula Sungai Kawat<br>Kisah Batu Menangis<br>Legenda Pesut Mahakam<br>Cerita rakyat Jawa[3]<br>Kalarahu<br>Jaka Tarub dan Nawangwulan<br>Asal Muasal Nama Banyuwangi<br>Bawang Putih dan Bawah Merah<br>Asal Mula Huruf Jawa/Aji Saka<br>Si Wuragil<br>Loro Jonggrang dan Bandung Bondowoso<br>Dewi Sri dan Sedana<br>Ande-Ande Lumur dan Klenting Kuning<br>Awan Wedus Gembel<br>Cerita rakyat Bali<br>Cupak ajak Gerantang<br>I Belog Pengangon Bebek<br>I Duma<br>I Ketimun Mas<br>I Lutung Teken I Kakua<br>I Pucung<br>Siap Selem<br>I Sugih ajak &nbsp;I Tiwas<br>Naga Basukih<br>Ni Bawang Teken Ni Kesuna<br>Cerita rakyat Sulawesi<br>Si Penakluk Rajawali<br>Sawerigading<br>Panglima Todilaling<br>Asal Mula Ikan Duyung<br>Lahilote<br>Putri Tandampalik<br>Sigarlaki dan Limbat<br>Cerita rakyat Papua<br>Kweiya<br>Kucing Karkal dan Burung Puyuh<br>Raja Ampat dari Telur Naga<br>Batu Menangis<br>Referensi<br>Kamus Besar Bahasa Indonesia (KBBI) Online. \"Arti kata cerita\". KBBI. Diakses tanggal 26 November 2019.<br>K, Putri (2016). Kumpulan Cerita Rakyat Sumatera. Jakarta: Cerdas Interaktif.<br>Kalarahu: Kumpulan Cerita Rakyat Jawa. Jakarta: Pusat Bahasa Departemen Pendidikan Nasional. 2007.</p>', '18 Desember 2022', 'https://drive.google.com/file/d/1oYVI6dIWgciubRMq0MJ5A8obq3uZG6fO/view?usp=share_link'),
(25, 'ddf', '<p>Cerita rakyat Indonesia (bahasa Inggris; folktale) adalah cerita yang berasal dari masyarakat Indonesia yang telah diwarisi secara lisan. Cerita ini menjadi satu set dari sikap, perilaku, dan nilai-nilai yang dimiliki masyarakat Indonesia yang terus berlanjut ke generasi seterusnya melalui tradisi tutur.[1] Cerita tersebut umumnya memiliki nilai-nilai kearifan lokal yang berhubungan erat dengan terjadinya suatu hal (peristiwa, kejadian, dan sebagainya). Kearifan lokal tersebut biasanya tercermin dari kesenian, mata pencaharian, bahasa, kekerabatan, dan teknologi dan pengetahuan alam. Cerita rakyat Indonesia menyebar hampir di setiap daerah/pulau di Indonesia. Beberapa cerita terkadang memiliki kesamaan namun tetap memiliki sisi kekhasan warga setempat. Cerita rakyat Indonesia menjadi salah satu tradisi tutur yang harus dijaga agar tidak punah. Keanekaragaman cerita ini menjadi salah satu bukti tentang beragam kebudayaan di Indonesia.</p><p>Contoh cerita rakyat Indonesia<br>Cerita rakyat Sumatera[2]<br>Asal Mula Danau Laut Tawar<br>Asal Mula Dana Si Losung dan Si Pinggan<br>Asal Mula Sungai Ombilin dan Danau Singkar<br>Asal Usul Silampari<br>Buaya Perompak<br>Hang Tuah<br>Hikayat Keramat Bujang<br>Kera Putih dan Tali Kapal<br>Kisah Pohon Enau<br>Legenda Batu Gantung<br>Legenda Beru Ginting Sope Mbelin<br>Asal Usul Danau Toba<br>Legenda Lau Kawar<br>Legenda Mas Merah<br>Legenda Namora Pande Bosi<br>Legenda Pulau Kapal<br>Legenda Putri Bidadari<br>Legenda Putri Hijau<br>Legenda Putri Nai Mangale<br>Legenda Putri Runduk<br>Legenda Putri Ular dari Simalungun<br>Legenda Sampuraga<br>Legenda Si Gale-Gale<br>Legenda Simardan<br>Legenda si Lancang<br>Legenda Ular Kepala Tujuh<br>Musang Berjanggut<br>Pati Enggang dan Rio Brani<br>Putri Pandan Berduri<br>Putri Naga<br>Raja Pareeket<br>Raja yang Culas<br>Si Malin Kundang<br>Si Miskin yang Tamak<br>Si Pahit Lidah<br>Si Sigarlaki dan si Limbat<br>Sungai Jodoh<br>Ting Gegenting<br>Legenda Asal Usul Ikan Patin<br>Kisah Putri Ular<br>Cerita rakyat Kalimantan<br>Legenda Danau Lipan<br>Asal Mula Sungai Kawat<br>Kisah Batu Menangis<br>Legenda Pesut Mahakam<br>Cerita rakyat Jawa[3]<br>Kalarahu<br>Jaka Tarub dan Nawangwulan<br>Asal Muasal Nama Banyuwangi<br>Bawang Putih dan Bawah Merah<br>Asal Mula Huruf Jawa/Aji Saka<br>Si Wuragil<br>Loro Jonggrang dan Bandung Bondowoso<br>Dewi Sri dan Sedana<br>Ande-Ande Lumur dan Klenting Kuning<br>Awan Wedus Gembel<br>Cerita rakyat Bali<br>Cupak ajak Gerantang<br>I Belog Pengangon Bebek<br>I Duma<br>I Ketimun Mas<br>I Lutung Teken I Kakua<br>I Pucung<br>Siap Selem<br>I Sugih ajak &nbsp;I Tiwas<br>Naga Basukih<br>Ni Bawang Teken Ni Kesuna<br>Cerita rakyat Sulawesi<br>Si Penakluk Rajawali<br>Sawerigading<br>Panglima Todilaling<br>Asal Mula Ikan Duyung<br>Lahilote<br>Putri Tandampalik<br>Sigarlaki dan Limbat<br>Cerita rakyat Papua<br>Kweiya<br>Kucing Karkal dan Burung Puyuh<br>Raja Ampat dari Telur Naga<br>Batu Menangis<br>Referensi<br>Kamus Besar Bahasa Indonesia (KBBI) Online. \"Arti kata cerita\". KBBI. Diakses tanggal 26 November 2019.<br>K, Putri (2016). Kumpulan Cerita Rakyat Sumatera. Jakarta: Cerdas Interaktif.<br>Kalarahu: Kumpulan Cerita Rakyat Jawa. Jakarta: Pusat Bahasa Departemen Pendidikan Nasional. 2007.</p>', '18 Desember 2022', 'https://drive.google.com/file/d/1oYVI6dIWgciubRMq0MJ5A8obq3uZG6fO/view?usp=share_link'),
(26, 'sdf', '<p>Cerita rakyat Indonesia (bahasa Inggris; folktale) adalah cerita yang berasal dari masyarakat Indonesia yang telah diwarisi secara lisan. Cerita ini menjadi satu set dari sikap, perilaku, dan nilai-nilai yang dimiliki masyarakat Indonesia yang terus berlanjut ke generasi seterusnya melalui tradisi tutur.[1] Cerita tersebut umumnya memiliki nilai-nilai kearifan lokal yang berhubungan erat dengan terjadinya suatu hal (peristiwa, kejadian, dan sebagainya). Kearifan lokal tersebut biasanya tercermin dari kesenian, mata pencaharian, bahasa, kekerabatan, dan teknologi dan pengetahuan alam. Cerita rakyat Indonesia menyebar hampir di setiap daerah/pulau di Indonesia. Beberapa cerita terkadang memiliki kesamaan namun tetap memiliki sisi kekhasan warga setempat. Cerita rakyat Indonesia menjadi salah satu tradisi tutur yang harus dijaga agar tidak punah. Keanekaragaman cerita ini menjadi salah satu bukti tentang beragam kebudayaan di Indonesia.</p><p>Contoh cerita rakyat Indonesia<br>Cerita rakyat Sumatera[2]<br>Asal Mula Danau Laut Tawar<br>Asal Mula Dana Si Losung dan Si Pinggan<br>Asal Mula Sungai Ombilin dan Danau Singkar<br>Asal Usul Silampari<br>Buaya Perompak<br>Hang Tuah<br>Hikayat Keramat Bujang<br>Kera Putih dan Tali Kapal<br>Kisah Pohon Enau<br>Legenda Batu Gantung<br>Legenda Beru Ginting Sope Mbelin<br>Asal Usul Danau Toba<br>Legenda Lau Kawar<br>Legenda Mas Merah<br>Legenda Namora Pande Bosi<br>Legenda Pulau Kapal<br>Legenda Putri Bidadari<br>Legenda Putri Hijau<br>Legenda Putri Nai Mangale<br>Legenda Putri Runduk<br>Legenda Putri Ular dari Simalungun<br>Legenda Sampuraga<br>Legenda Si Gale-Gale<br>Legenda Simardan<br>Legenda si Lancang<br>Legenda Ular Kepala Tujuh<br>Musang Berjanggut<br>Pati Enggang dan Rio Brani<br>Putri Pandan Berduri<br>Putri Naga<br>Raja Pareeket<br>Raja yang Culas<br>Si Malin Kundang<br>Si Miskin yang Tamak<br>Si Pahit Lidah<br>Si Sigarlaki dan si Limbat<br>Sungai Jodoh<br>Ting Gegenting<br>Legenda Asal Usul Ikan Patin<br>Kisah Putri Ular<br>Cerita rakyat Kalimantan<br>Legenda Danau Lipan<br>Asal Mula Sungai Kawat<br>Kisah Batu Menangis<br>Legenda Pesut Mahakam<br>Cerita rakyat Jawa[3]<br>Kalarahu<br>Jaka Tarub dan Nawangwulan<br>Asal Muasal Nama Banyuwangi<br>Bawang Putih dan Bawah Merah<br>Asal Mula Huruf Jawa/Aji Saka<br>Si Wuragil<br>Loro Jonggrang dan Bandung Bondowoso<br>Dewi Sri dan Sedana<br>Ande-Ande Lumur dan Klenting Kuning<br>Awan Wedus Gembel<br>Cerita rakyat Bali<br>Cupak ajak Gerantang<br>I Belog Pengangon Bebek<br>I Duma<br>I Ketimun Mas<br>I Lutung Teken I Kakua<br>I Pucung<br>Siap Selem<br>I Sugih ajak &nbsp;I Tiwas<br>Naga Basukih<br>Ni Bawang Teken Ni Kesuna<br>Cerita rakyat Sulawesi<br>Si Penakluk Rajawali<br>Sawerigading<br>Panglima Todilaling<br>Asal Mula Ikan Duyung<br>Lahilote<br>Putri Tandampalik<br>Sigarlaki dan Limbat<br>Cerita rakyat Papua<br>Kweiya<br>Kucing Karkal dan Burung Puyuh<br>Raja Ampat dari Telur Naga<br>Batu Menangis<br>Referensi<br>Kamus Besar Bahasa Indonesia (KBBI) Online. \"Arti kata cerita\". KBBI. Diakses tanggal 26 November 2019.<br>K, Putri (2016). Kumpulan Cerita Rakyat Sumatera. Jakarta: Cerdas Interaktif.<br>Kalarahu: Kumpulan Cerita Rakyat Jawa. Jakarta: Pusat Bahasa Departemen Pendidikan Nasional. 2007.</p>', '18 Desember 2022', 'https://drive.google.com/file/d/1oYVI6dIWgciubRMq0MJ5A8obq3uZG6fO/view?usp=share_link');

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `id_inventaris` int(11) NOT NULL,
  `nama_data` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`id_inventaris`, `nama_data`) VALUES
(2, 'Lemari '),
(3, 'Printer ');

-- --------------------------------------------------------

--
-- Table structure for table `kas`
--

CREATE TABLE `kas` (
  `id` int(11) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `jumlah_kas` varchar(100) NOT NULL,
  `tahun` varchar(16) NOT NULL,
  `keterangan` varchar(120) NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kas`
--

INSERT INTO `kas` (`id`, `bulan`, `jumlah_kas`, `tahun`, `keterangan`, `jenis`) VALUES
(3, 'Februari', '500000', '2023', 'minum    ', 'Pemasukan'),
(9, 'Juli', '10000', '2023', ' membeli sedotan ', 'Pengeluaran'),
(10, 'Oktober', '10000', '2023', ' vv', 'Pemasukan'),
(11, 'Oktober', '50000', '2023', ' sedekah', 'Pemasukan'),
(12, 'September', '5000', '2023', ' jaket', 'Pengeluaran'),
(13, 'Pilih...', '1000000', '2023', ' sdd', 'Pemasukan');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(16) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(25) NOT NULL,
  `tempat` varchar(250) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `nama_kegiatan`, `tanggal`, `waktu`, `tempat`, `keterangan`) VALUES
(1, 'Makrab CE', '2023-03-01', '08.00-selesai', 'ipukan', 'Terlaksana');

-- --------------------------------------------------------

--
-- Table structure for table `ketum`
--

CREATE TABLE `ketum` (
  `id` int(11) NOT NULL,
  `visi` varchar(50) NOT NULL,
  `misi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ketum`
--

INSERT INTO `ketum` (`id`, `visi`, `misi`) VALUES
(3, 'Memajukan teknologi', 'Menjalankan berasas islam');

-- --------------------------------------------------------

--
-- Table structure for table `proker`
--

CREATE TABLE `proker` (
  `id` int(16) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(25) NOT NULL,
  `tempat` varchar(250) NOT NULL,
  `pemateri` varchar(100) DEFAULT NULL,
  `divisi` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `proker`
--

INSERT INTO `proker` (`id`, `nama_kegiatan`, `tanggal`, `waktu`, `tempat`, `pemateri`, `divisi`, `keterangan`) VALUES
(1, 'Makrab CE', '2023-03-01', '08.00-selesai', 'ipukan', 'Divisi Organisasi', 'Divisi Organisasi', 'Terlaksana');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(20) NOT NULL,
  `no_surat` varchar(200) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `perihal` varchar(250) NOT NULL,
  `kepada` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `no_surat`, `jenis`, `perihal`, `kepada`, `tujuan`) VALUES
(1, '123/pab/2022', 'Surat Masuk', 'Undangan', 'WR3', 'undangnb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id_inventaris`);

--
-- Indexes for table `kas`
--
ALTER TABLE `kas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ketum`
--
ALTER TABLE `ketum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proker`
--
ALTER TABLE `proker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id_inventaris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kas`
--
ALTER TABLE `kas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ketum`
--
ALTER TABLE `ketum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `proker`
--
ALTER TABLE `proker`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
