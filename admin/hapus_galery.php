<?php 
    include 'database/koneksi.php';
    $id = $_GET['id'];
    mysqli_query($koneksi, "DELETE FROM foto WHERE id_galery='$id'");
    header("location:galery.php");

?>