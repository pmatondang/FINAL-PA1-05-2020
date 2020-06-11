<?php 
$id = $_POST['id_user'];
$nama_lengkap = $_POST['nama_lengkap'];
$gender = $_POST['gender'];
$prodi = $_POST['prodi'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

include 'database/koneksi.php';

$sql = mysqli_query($koneksi, "INSERT INTO user VALUES('$id', '$nama_lengkap', '$gender', '$prodi', '$email', '$no_hp', '$username', '$password', '$role')");
	if ($sql) {
		echo "<script>alert('Akun user $id berhasil disimpan!'); window.location = 'data_user.php'</script>";	
	}else{
		echo "<script>alert('Akun user $id gagal disimpan!'); window.location = 'data_user.php'</script>";
    }
?>