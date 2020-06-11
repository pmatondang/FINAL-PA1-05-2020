<?php 
$id = $_POST['id_pengumuman'];
$judul = $_POST['judul'];
$waktu = $_POST['waktu'];
$deskripsi = $_POST['deskripsi'];

include 'database/koneksi.php';

$sql = mysqli_query($koneksi, "INSERT INTO pengumuman VALUES('$id', '$judul', '$deskripsi', '$waktu')");
	if ($sql) {
		echo "<script>alert('Pengumuman $id berhasil disimpan!'); window.location = 'pengumuman.php'</script>";	
	}else{
		echo "<script>alert('Pengumuman $id gagal disimpan!'); window.location = 'tambah_pengumuman.php'</script>";
    }
?>