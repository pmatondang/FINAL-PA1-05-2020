-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2020 at 02:45 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_drc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(2) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `prodi` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `motivasi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_lengkap`, `gender`, `prodi`, `email`, `motivasi`) VALUES
(1, 'Poibe Matondang', 'Perempuan', 'D3 Teknologi Informasi', 'poibematondang30@gmail.com', 'saya ingin turut serta berkontribusi'),
(2, 'Artha Hutapea', 'Perempuan', 'D3 Teknologi Informasi', '	arthapardede18@gmail.com', 'saya ingin mengasah kemampuan saya di bidang robotik'),
(3, 'Mustika Siahaan	', 'Perempuan', 'D3 Teknologi Informasi', 'mustikasiahaan4@gmail.com', 'saya ikut karena saya ingin menjadi pencipta robot'),
(4, 'Poibe Matondang', 'Laki-laki', 'D3 Teknologi Informasi', 'poibematondang30@gmail.com', 'mjhgf');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id_data` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id_data`, `name`, `file`) VALUES
(1, 'add_comment', 'files/add_comment.php'),
(2, 'cari_kegiatan', 'files/cari_kegiatan.php'),
(3, 'index', 'files/index.php');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id_galery` int(11) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_galery`, `nama_file`, `deskripsi`, `date`) VALUES
(2, 'DSC_1051.JPG', 'Mengikuti kegiatan robotik', '2020-06-03 17:00:00'),
(4, 'DSC_0979.JPG', 'Melatih bakat mahasiswa', '2020-06-11 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(5) NOT NULL,
  `judul_kegiatan` varchar(100) NOT NULL,
  `deskripsi` varchar(10000) NOT NULL,
  `gambar` varchar(45) NOT NULL,
  `kategori` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `judul_kegiatan`, `deskripsi`, `gambar`, `kategori`, `date`) VALUES
(1, 'Mengadakan rapat setiap bulan', 'Kegiatan ini dilakukan untuk melakukan evaluasi terhadap pekerjaan pengurus dan mendiskusikan rencana berikutnya yang akan dilakukan klub DRC.', '1591789870_5453.jpg', 'Kegiatan rutin', '2020-05-11 10:00:00'),
(2, 'Megikuti Kontes Robot Indonesia setiap tahun', 'Kegiatan mengikuti kontes dilakukan untuk menambah kreativitas anggota agar mampu bersaing di ranah yang lebih luas.', '1591789975_3416.jpg', 'Kegiatan rutin', '2020-05-11 17:00:00'),
(3, 'Melakukan pelatihan pada anggota DRC setiap bulan', 'Pelatihan ini dilakukan agar anggota tetap aktif dalam meningkatkan minat di bidang robotik.', 'DSC_0988.jpg', 'Kegiatan rutin', '2020-06-02 12:16:00');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(1, 0, 'klub ini merupakan salah satu klub yang menyenangkan dimana kita bisa belajar sambil bermain dan hal ini lebih seru dibanding serius tetapi membuat stress.', 'poibe', '2020-05-23 02:04:39'),
(2, 1, 'Betul sekali saya senang menjadi anggota DRC', 'Anita', '2020-05-25 21:38:44');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(5) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `prodi` varchar(40) NOT NULL,
  `email` varchar(45) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `jenis` varchar(40) NOT NULL,
  `tgl_pinjam` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tgl_kembali` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `nama_lengkap`, `prodi`, `email`, `nama`, `jenis`, `tgl_pinjam`, `tgl_kembali`) VALUES
(1, 'Poibe Matondang', 'DIII Teknologi Informasi', 'poibematondang30@gmail.com', 'arduino', 'alat', '2020-06-25 10:00:00', '2020-06-30 10:00:00'),
(2, 'Alfredo Manalu', 'DIII Teknologi Informasi', 'alfredocalvin02@gmail.com', 'obeng', 'alat', '2020-06-27 10:00:00', '2020-07-02 10:00:00'),
(3, 'Anita Siagian', 'DIII Teknologi Informasi', 'anitasiagian11@gmail.com', 'sensor', 'alat', '2020-06-29 10:00:00', '2020-07-05 10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(20) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `waktu` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul`, `deskripsi`, `waktu`) VALUES
(1, 'Perekrutan Anggota Baru', 'Diberitahukan kepada seluruh mahasiswa yang ingin mendaftarkan diri sebagai anggota DRC dapat \nmendaftarkan dirinya pada website ini dengan batas pendaftaran tanggal 23 Juni 2020. Sekian pengumuman ini kami sampaikan. Kami \nmenunggu kedatangan saudara/i.', '0000-00-00'),
(2, 'Persyaratan Anggota Baru', 'Berikut ini kami beritahukan persyaratan menjadi anggota DRC 1. Siap menjunjung tinggi sebagai pribadi yang kuat 2. ... Demikian persyaratan yang telah kami tetapkan, semoga mahasiswa dapat mengindahkannya. Terimakasih', '2020-05-27'),
(3, 'Pendaftaran Mengikuti Kegiatan', 'Telah dibuka pendaftaran kegiatan yang akan diselenggarakan pada tanggal 20 Juni 2020 batas pendaftaran adalah 15 Juni 2020', '2020-05-24'),
(4, 'Persyaratan Kegiatan', 'Diberitahukan bahwa setiap kelompok wajib memiliki anggota maksimal 5 orang.', '2020-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(5) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi` varchar(10000) NOT NULL,
  `gambar` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi`, `gambar`) VALUES
(1, 'Robot Pemadam Api Berkaki', 'Sebuah robot berkaki meyerupai laba-laba diletakkan disebuah arena yang menyerupai rumah dengan 4 buah ruangan dimana pada salah \r\nsatu ruangan terdapat sebuah lilin yang mewakili sebuah titik api. Robot kemudian ditempatkan pada suatu ruangan secara acak. Ketika alarm berbunyi maka robot tersebut \r\nharus dapat menemukan keberadaan titik api secara otonomus tanpa dikendalikan oleh operator. Robot harus dapat memadamkan titik api tersebut dan mampu kembali ke ruang \r\nsemula. Diberikan tiga kali kesempatan untuk robot dalam memadamkan api. Robot dengan jumlah waktu tercepat atau terkecil dalam tiga kali kesempatan tersebut akan \r\nditetapkan sebagai pemenang. ', '1591790810_3351.jpg'),
(2, 'Baju Robot Sepakbola ', 'Robot sepakbola beroda merupakan robot yang memiliki tugas bermain sepakbola layaknya permainan sepakbola pada umumnya. Robot dapat menendang bola, \nmenggiring bola, mengoper bola serta memiliki penjaga gawang. Pertandinan dilangsungkan dengan 3 pemain dan 1 penjaga gawang. Skor terbanyak akan dinyatakan sebagai pemenang. \nRobot akan bermain bole secara autonomous tanpa dikendalikan oleh operator. Robot harus bisa mengidentifikasi peluit wasit sebagai peringatan dan mendeteksi bola dan pemain lawan. \nRobot memiliki roda sebagai alat untuk bergerak, memiliki penendang untuk menendang bola dan memiliki kamera untuk mengidentifikasi lawan, bola dan gawang.', 'sepakbola-roda.png'),
(3, 'Robot Tematik', 'hgf', '1591790835_2866.png');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(2) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `prodi` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `gender`, `prodi`, `email`, `no_hp`, `username`, `password`, `role`) VALUES
(1, 'Admin', 'P', 'D3 Teknologi Informasi', 'admin@gmail.com', '09362255364', 'admin', 'admin', 1),
(2, 'Poibe', 'P', 'D3 Teknologi Informasi', 'poibe@gmail.com', '098374516', 'poibe', 'poibe', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_galery`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_galery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
