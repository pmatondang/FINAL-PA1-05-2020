<?php 
    include 'database/koneksi.php';
    $id = $_GET['id'];
    mysqli_query($koneksi, "DELETE FROM pengumuman WHERE id_pengumuman='$id'");
    header("location:pengumuman.php");

?>