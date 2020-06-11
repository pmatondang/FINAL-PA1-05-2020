<?php
    session_start();
    session_destroy();
    
    echo "<script>alert('Terima kasih telah berkunjung, Anda Berhasil Logout')</script>";
    header('location:index.php');
?>