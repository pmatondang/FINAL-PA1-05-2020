<?php
        // data form yang dikirimkan
        $nama  = $_POST['nama_lengkap'];
        $gender  = $_POST['gender'];
        $prodi  = $_POST['prodi'];
        $email  = $_POST['email'];
        $motivasi  = $_POST['motivasi'];
        require_once('database/koneksi.php');
        $sql = mysqli_query($koneksi, "INSERT INTO anggota VALUES('', '$nama', '$gender', '$prodi', '$email', '$motivasi')");
		if ($sql) {
			echo "<script>alert('Registrasi anggota $nama berhasil didaftar'); window.location = 'pengumuman.php'</script>";	
		}else{
			echo "<script>alert('Registrasi $nama gagal didaftar'); window.location = 'index.php'</script>";
	}