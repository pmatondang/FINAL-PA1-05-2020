<?php
    // data form yang dikirimkan
    include_once 'database/cek.php';
    $nama  = $_POST['nama_lengkap'];
    $prodi  = $_POST['prodi'];
    $email  = $_POST['email'];
    $jenis  = $_POST['jenis'];
    $nama_alat  = $_POST['nama'];
    $date1 = $_POST['tgl_pinjam'];
    $date2  = $_POST['tgl_kembali'];
    
    $order = CekOrder($date1, $nama_alat);
	if($order > 0){
		echo "<script>alert('Maaf $nama , alat/ruangan $nama_alat sedang dipinjam');
			window.location = 'dashboard_anggota.php'</script>";
	}
	else{
		$do = AddOrder($nama, $prodi, $email, $jenis, $nama_alat, $date1, $date2);
		if($do > 0){    
			echo "<script>alert('Pemesanan $nama berhasil dikirim, silahkan cek email kamu.');
			window.location = 'dashboard_anggota.php'</script>";
		}
		else{
			echo "<script>alert('Maaf pemesanan $nama gagal dikirim.');
			window.location = 'dashboard_anggota.php'</script>";
		}
	}
?>