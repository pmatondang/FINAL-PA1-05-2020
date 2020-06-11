<?php 
include 'database/koneksi.php';

$id = $_POST['id_kegiatan'];
$judul = $_POST['judul_kegiatan'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_FILES['gambar']['name'];
$kategori = $_POST['kategori'];
$date = $_POST['date'];


		move_uploaded_file($_FILES['gambar']['tmp_name'], 'img/kegiatan/'. $gambar);
		
		$sql = mysqli_query($koneksi, "INSERT INTO kegiatan VALUES('$id', '$judul', '$deskripsi', '$gambar', '$kategori', '$date')");
		if ($sql) {
			echo "<script>alert('Data kegiatan $judul berhasil disimpan!'); window.location = 'kegiatan.php'</script>";	
		}else{
			echo "<script>alert('Data kegiatan $judul gagal disimpan!'); window.location = 'tambah_kegiatan.php'</script>";
	}
?>
	