<?php 
include 'database/koneksi.php';

$id = $_POST['id_galery'];
$gambar = $_FILES['nama_file']['name'];
$deskripsi = $_POST['deskripsi'];
$date = $_POST['date'];

		move_uploaded_file($_FILES['nama_file']['tmp_name'], 'img/galery/'. $gambar);
		
		$sql = mysqli_query($koneksi, "INSERT INTO foto VALUES('$id', '$gambar', '$deskripsi', '$date')");
		if ($sql) {
			echo "<script>alert('Foto $deskripsi berhasil disimpan!'); window.location = 'galery.php'</script>";	
		}else{
			echo "<script>alert('Foto $deskripsi gagal disimpan!'); window.location = 'tambah_dokumentasi.php'</script>";
	}
?>
	