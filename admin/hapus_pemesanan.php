<?php 
    include 'database/koneksi.php';
    $id = $_GET['id'];
    mysqli_query($koneksi, "DELETE FROM pemesanan WHERE id_pemesanan='$id'");
    header("location:pemesanan.php");

?>