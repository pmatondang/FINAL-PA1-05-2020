<?php 
include 'database/koneksi.php';
$id=$_POST['hid'];	
$nama=$_POST['nama'];
$deskripsi=$_POST['deskripsi'];

if(isset($_POST['ubah_foto'])){
$foto = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
$fotobaru = date('dmYHis').$foto;
$path = "img/produl/".$fotobaru;
if(move_uploaded_file($tmp, $path)){
$query = "SELECT * FROM produk WHERE id_produk='".$id."'";
$sql = mysqli_query($koneksi, $query)or die(mysql_error());
$data = mysqli_fetch_array($sql);
 if(is_file("img/produk/".$data['gambar'])) // Jika foto ada
      unlink("img/produk/".$data['gambar']);


$query = "UPDATE produk SET nama='$nama', deskripsi='$deskripsi', gambar='$fotobaru' WHERE id_produk='$id'";
$sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){
 header("location:produk.php"); // Redirect ke halaman index.php
    }
    else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='edit_produk.php'>Kembali Ke Form</a>";
    }
  }else{
    // Jika gambar gagal diupload, Lakukan :
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='edit_produk.php'>Kembali Ke Form</a>";
  }
}
else{ // Jika user tidak menceklis checkbox yang ada di form ubah, lakukan :
  // Proses ubah data ke Database
  $query = "UPDATE produk SET nama='$nama', deskripsi='$deskripsi' WHERE id_produk='$id'";
  $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: produk.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='edit_produk.php'>Kembali Ke Form</a>";
  }
}
?>

