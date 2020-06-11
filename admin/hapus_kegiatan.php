<?php 
    include 'database/koneksi.php';
    $id = $_GET['id'];
    mysqli_query($koneksi, "DELETE FROM kegiatan WHERE id_kegiatan ='$id'");
    header("location:kegiatan.php");

?>