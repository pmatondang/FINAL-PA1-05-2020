<?php
// Load file koneksi.php
include "database/connection.php";
// Ambil data ID yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id'];
// Ambil Data yang Dikirim dari Form
$nis = $_POST['nama_produk'];
$nama = $_POST['deskripsi'];
// Ambil data foto yang dipilih dari form
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
// Cek apakah user ingin mengubah fotonya atau tidak
if(empty($foto)){ // Jika user tidak memilih file foto pada form
  // Lakukan proses update tanpa mengubah fotonya
  // Proses ubah data ke Database
  $sql = $pdo->prepare("UPDATE produk SET nama_produk=:nis, deskripsi=:nama WHERE id=:id");
  $sql->bindParam(':nama_produk', $nis);
  $sql->bindParam(':deskripsi', $nama);
  $sql->bindParam(':id', $id);
  $execute = $sql->execute(); // Eksekusi / Jalankan query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: produk.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
  }
}else{ // Jika user memilih foto / mengisi input file foto pada form
  // Lakukan proses update termasuk mengganti foto sebelumnya
  // Rename nama fotonya dengan menambahkan tanggal dan jam upload
  $fotobaru = date('dmYHis').$foto;
  // Set path folder tempat menyimpan fotonya
  $path = "img/produk/".$fotobaru;
  // Proses upload
  if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
    // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
    $sql = $pdo->prepare("SELECT gambar FROM produk WHERE id=:id");
    $sql->bindParam(':id', $id);
    $sql->execute(); // Eksekusi query insert
    $data = $sql->fetch(); // Ambil semua data dari hasil eksekusi $sql
    // Cek apakah file foto sebelumnya ada di folder images
    if(is_file("img/produk/".$data['gambar'])) // Jika foto ada
      unlink("img/produk/".$data['gambar']); // Hapus file foto sebelumnya yang ada di folder images
    // Proses ubah data ke Database
    $sql = $pdo->prepare("UPDATE siswa SET nama_produk=:nis, deskripsi=:nama,  gambar=:foto WHERE id=:id");
    $sql->bindParam(':nama_produk', $nis);
    $sql->bindParam(':deskripsi', $nama);
    $sql->bindParam(':gambar', $fotobaru);
    $sql->bindParam(':id', $id);
    $execute = $sql->execute(); // Eksekusi / Jalankan query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      header("location: produk.php"); // Redirect ke halaman index.php
    }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
    }
  }else{
    // Jika gambar gagal diupload, Lakukan :
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
  }
}
?>







