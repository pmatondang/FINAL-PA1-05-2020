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
  `no_hp` VARCHAR(15) NOT NULL,
  `motivasi` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=INNODB DEFAULT CHARSET=latin1;

-- data anggota


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
menunggu kedatangan saudara/i.', 22-05-2020),
(2, 'Persyaratan Anggota Baru', 'Berikut ini kami beritahukan persyaratan menjadi anggota DRC 1. Siap menjunjung tinggi sebagai pribadi yang kuat 2. ... Demikian persyaratan yang telah kami tetapkan, semoga mahasiswa dapat mengindahkannya. Terimakasih', 23-05-2020),
(3, 'Pendaftaran Mengikuti Kegiatan', 'Telah dibuka pendaftaran kegiatan yang akan diselenggarakan pada tanggal 20 Juni 2020 batas pendaftaran adalah 15 Juni 2020', 24-05-2020),
(4, 'Persyaratan Kegiatan', 'Diberitahukan bahwa setiap kelompok wajib memiliki anggota maksimal 5 orang.', 25-05-2020);

-- Struktur dari tabel `produk`
CREATE TABLE `produk` (
  `id_produk` INT(5) NOT NULL,
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
ditetapkan sebagai pemenang. ', 'pemadam-api.png'),
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
) ENGINE=INNODB DEFAULT CHARSET=utf8


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
