<?php 
    include 'database/koneksi.php';
    $id = $_GET['id'];
    mysqli_query($koneksi, "DELETE FROM anggota WHERE id_anggota='$id'");
    header("location:data_anggota.php");

?>