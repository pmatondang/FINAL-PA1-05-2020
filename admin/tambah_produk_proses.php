<?php 
include 'database/koneksi.php';

$id = $_POST['id_produk'];
$nama = $_POST['nama_produk'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_FILES['gambar']['name'];

		move_uploaded_file($_FILES['gambar']['tmp_name'], 'img/produk/'. $gambar);
		
		$sql = mysqli_query($koneksi, "INSERT INTO produk VALUES('$id', '$nama', '$deskripsi', '$gambar')");
		if ($sql) {
			echo "<script>alert('Data $nama berhasil disimpan!'); window.location = 'produk.php'</script>";	
		}else{
			echo "<script>alert('Data $nama gagal disimpan!'); window.location = 'tambah_produk.php'</script>";
	}
?>
	