-- Database: `db_drc`
CREATE DATABASE db_drc;

-- Struktur dari tabel `role`

CREATE TABLE `role` (
  `id_role` INT(2) NOT NULL AUTO_INCREMENT,
  `role` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

-- data role
INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

CREATE TABLE `admin` (
  `id_admin` INT(2) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(30) NOT NULL,
  `password` VARCHAR(20) NOT NULL,
  `id_role` INT(2) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

-- data admin

-- Struktur dari tabel `user`
CREATE TABLE `user` (
  `id_user` INT(10) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` VARCHAR(50) NOT NULL,
  `gender` VARCHAR(10) NOT NULL,
  `prodi` VARCHAR(35) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `no_hp` VARCHAR(15) NOT NULL,
  `username` VARCHAR(20) NOT NULL,
  `password` VARCHAR(20) NOT NULL,
  `role` INT(2) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

-- data user
INSERT INTO `user` (`id_user`, `nama_lengkap`, `gender`, `prodi`, `email`, `no_hp`, `username`, `password`, `role`) VALUES
(1, 'Admin', 'P', 'D3 Teknologi Informasi', 'admin@gmail.com', '09362255364', 'admin', 'admin', 1),
(2, 'Poibe', 'P', 'D3 Teknologi Informasi', 'poibe@gmail.com', '098374516', 'poibe', 'poibe', 2);

-- Struktur dari tabel `anggota`
CREATE TABLE `anggota` (
  `id_anggota` INT(10) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` VARCHAR(50) NOT NULL,
  `gender` VARCHAR(10) NOT NULL,
  `prodi` VARCHAR(35) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `motivasi` VARCHAR(500) NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

-- data anggota
INSERT INTO `anggota` (`id_anggota`, `nama_lengkap`, `gender`, `prodi`, `email`, `motivasi`) VALUES
(1, 'Poibe Matondang', 'Perempuan', 'D3 Teknologi Informasi', 'poibematondang30@gmail.com', 'saya ingin turut serta berkontribusi'),
(2, 'Artha Hutapea', 'Perempuan', 'D3 Teknologi Informasi', '	arthapardede18@gmail.com', 'saya ingin mengasah kemampuan saya di bidang robotik'),
(3, 'Mustika Siahaan	', 'Perempuan', 'D3 Teknologi Informasi', 'mustikasiahaan4@gmail.com', 'saya ikut karena saya ingin menjadi pencipta robot');


-- Struktur dari tabel `pengumuman`
CREATE TABLE `pengumuman` (
  `id_pengumuman` INT(20) NOT NULL AUTO_INCREMENT,
  `judul` VARCHAR(100) NOT NULL,
  `deskripsi` VARCHAR(500) NOT NULL,
  `waktu` DATE,
  PRIMARY KEY (`id_pengumuman`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

-- data pengumuman
INSERT INTO `pengumuman` (`id_pengumuman`, `judul`, `deskripsi`, `waktu`) VALUES
(1, 'Perekrutan Anggota Baru', 'Diberitahukan kepada seluruh mahasiswa yang ingin mendaftarkan diri sebagai anggota DRC dapat 
mendaftarkan dirinya pada website ini dengan batas pendaftaran tanggal 23 Juni 2020. Sekian pengumuman ini kami sampaikan. Kami 
menunggu kedatangan saudara/i.', '2020-05-22'),
(2, 'Persyaratan Anggota Baru', 'Berikut ini kami beritahukan persyaratan menjadi anggota DRC <br> 1. Siap menjunjung tinggi sebagai pribadi yang kuat <br> 2. Turut berpartisipasi atas kegiatan yang dilakukan oleh Del Robotic Club
Demikian persyaratan yang telah kami tetapkan, semoga mahasiswa dapat mengindahkannya. Terima kasih', '2020-05-27'),
(3, 'Pendaftaran Mengikuti Kegiatan', 'Telah dibuka pendaftaran kegiatan yang akan diselenggarakan pada tanggal 20 Juni 2020 batas pendaftaran adalah 15 Juni 2020', '2020-05-24'),
(4, 'Persyaratan Kegiatan', 'Diberitahukan bahwa setiap kelompok wajib memiliki anggota maksimal 5 orang.', '2020-05-22');

-- Struktur dari tabel `produk`
CREATE TABLE `produk` (
  `id_produk` INT(5) NOT NULL AUTO_INCREMENT,
  `nama_produk` VARCHAR(100) NOT NULL,
  `deskripsi` VARCHAR(10000) NOT NULL,
  `gambar` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi`, `gambar`) VALUES
(1, 'Robot Pemadam Api Berkaki', 'Sebuah robot berkaki meyerupai laba-laba diletakkan disebuah arena yang menyerupai rumah dengan 4 buah ruangan dimana pada salah 
satu ruangan terdapat sebuah lilin yang mewakili sebuah titik api. Robot kemudian ditempatkan pada suatu ruangan secara acak. Ketika alarm berbunyi maka robot tersebut 
harus dapat menemukan keberadaan titik api secara otonomus tanpa dikendalikan oleh operator. Robot harus dapat memadamkan titik api tersebut dan mampu kembali ke ruang 
semula. Diberikan tiga kali kesempatan untuk robot dalam memadamkan api. Robot dengan jumlah waktu tercepat atau terkecil dalam tiga kali kesempatan tersebut akan 
ditetapkan sebagai pemenang. ', 'pemadam-api.jpg'),
(2, 'Baju Robot Sepakbola ', 'Robot sepakbola beroda merupakan robot yang memiliki tugas bermain sepakbola layaknya permainan sepakbola pada umumnya. Robot dapat menendang bola, 
menggiring bola, mengoper bola serta memiliki penjaga gawang. Pertandinan dilangsungkan dengan 3 pemain dan 1 penjaga gawang. Skor terbanyak akan dinyatakan sebagai pemenang. 
Robot akan bermain bole secara autonomous tanpa dikendalikan oleh operator. Robot harus bisa mengidentifikasi peluit wasit sebagai peringatan dan mendeteksi bola dan pemain lawan. 
Robot memiliki roda sebagai alat untuk bergerak, memiliki penendang untuk menendang bola dan memiliki kamera untuk mengidentifikasi lawan, bola dan gawang.', 'sepakbola-roda.png');

-- Struktur dari tabel `komentar`
CREATE TABLE `komentar` (
  `comment_id` INT(11) NOT NULL AUTO_INCREMENT,
  `parent_comment_id` INT(11) NOT NULL,
  `comment` VARCHAR(200) NOT NULL,
  `comment_sender_name` VARCHAR(40) NOT NULL,
  `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- Dumping data komentar
INSERT INTO `komentar` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(1, 0, 'klub ini merupakan salah satu klub yang menyenangkan dimana kita bisa belajar sambil bermain dan hal ini lebih seru dibanding serius tetapi membuat stress.', 'poibe', '2020-05-23 09:04:39'),
(2, 1, 'Betul sekali saya senang menjadi anggota DRC', 'Anita', '2020-05-26 04:38:44');

-- Struktur dari tabel `kegiatan`
CREATE TABLE `kegiatan` (
  `id_kegiatan` INT(5) NOT NULL AUTO_INCREMENT,
  `judul_kegiatan` VARCHAR(100) NOT NULL,
  `deskripsi` VARCHAR(10000) NOT NULL,
  `gambar` VARCHAR(45) NOT NULL,
  `kategori` VARCHAR(40) NOT NULL,
  `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kegiatan`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

-- Dumping data kegiatan

INSERT INTO `kegiatan` (`id_kegiatan`, `judul_kegiatan`, `deskripsi`, `gambar`, `kategori`, `date`) VALUES
(1, 'Mengadakan rapat setiap bulan', 'Kegiatan ini dilakukan untuk melakukan evaluasi terhadap pekerjaan pengurus dan mendiskusikan rencana berikutnya yang akan dilakukan klub DRC.', '1591789870_5453.jpg', 'Kegiatan rutin', '2020-05-11 17:00:00'),
(2, 'Megikuti Kontes Robot Indonesia setiap tahun', 'Kegiatan mengikuti kontes dilakukan untuk menambah kreativitas anggota agar mampu bersaing di ranah yang lebih luas.', '1591789975_3416.jpg', 'Kegiatan rutin', '2020-05-12 00:00:00'),
(3, 'Melakukan pelatihan pada anggota DRC setiap bulan', 'Pelatihan ini dilakukan agar anggota tetap aktif dalam meningkatkan minat di bidang robotik.', 'DSC_0988.jpg', 'Kegiatan rutin', '2020-06-02 19:16:00');


-- Struktur dari tabel `foto`
CREATE TABLE `foto` (
 `id_galery` INT(11) NOT NULL AUTO_INCREMENT,
 `nama_file` VARCHAR(255) NOT NULL,
 `deskripsi` VARCHAR(255),
 `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 PRIMARY KEY (`id_galery`)
)ENGINE = MYISAM;

-- Dumping data foto
INSERT INTO `foto` (`id_galery`, `nama_file`, `deskripsi`, `date`) VALUES
(1, 'DSC_1051.JPG', 'Mengikuti kegiatan robotik', '2020-06-03 17:00:00'),
(2, 'DSC_0979.JPG', 'Melatih bakat mahasiswa', '2020-06-11 17:00:00');


-- Struktur dari tabel `foto`
CREATE TABLE `pemesanan` (
  `id_pemesanan` INT(5) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` VARCHAR(100) NOT NULL,
  `prodi` VARCHAR(40) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `nama` VARCHAR(45) NOT NULL,
  `jenis` VARCHAR(40) NOT NULL,
  `tgl_pinjam` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tgl_kembali` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_pemesanan`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

-- Dumping data untuk tabel `produk`
INSERT INTO `pemesanan` (`id_pemesanan`, `nama_lengkap`, `prodi`, `email`, `nama`, `jenis`, `tgl_pinjam`, `tgl_kembali`) VALUES
(1, 'Poibe Matondang', 'DIII Teknologi Informasi', 'poibematondang30@gmail.com', 'arduino', 'alat', '2020-06-25 17:00:00', '2020-06-30 17:00:00'),
(2, 'Alfredo Manalu', 'DIII Teknologi Informasi', 'alfredocalvin02@gmail.com', 'obeng', 'alat', '2020-06-27 17:00:00', '2020-07-02 17:00:00'),
(3, 'Anita Siagian', 'DIII Teknologi Informasi', 'anitasiagian11@gmail.com', 'sensor', 'alat', '2020-06-29 17:00:00', '2020-07-05 17:00:00');

-- Struktur dari tabel `file`
CREATE TABLE `data` (
  `id_data` INT(11) NOT NULL,
  `name` VARCHAR(200) NOT NULL,
  `file` VARCHAR(500) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;

ALTER TABLE `data`
  ADD PRIMARY KEY (`id_data`);

ALTER TABLE `data`
  MODIFY `id_data` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

-- Dumping data untuk tabel `data`
INSERT INTO `data` (`id_data`, `name`, `file`) VALUES
(1, 'add_comment', 'files/add_comment.php'),
(2, 'cari_kegiatan', 'files/cari_kegiatan.php');