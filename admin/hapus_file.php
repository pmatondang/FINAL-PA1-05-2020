<?php 
    include 'database/koneksi.php';
    $id = $_GET['id'];
    mysqli_query($koneksi, "DELETE FROM data WHERE id_data='$id'");
    header("location:upload_file.php");

?>