<?php
include_once 'database/cek.php';

$nama_lengkap   = $_POST['nama_lengkap'];
$gender         = $_POST['gender'];
$prodi          = $_POST['prodi'];
$email          = $_POST['email'];
$no_hp          = $_POST['no_hp'];
$username       = $_POST['username']; 
$password       = ($_POST['password']);
$role           = 2;
$konpass = $_POST['konfirmasi_password'];

if($password != $konpass){
	echo "<script>alert('Password tidak sama.');
		window.location = 'l	ogin.php'</script>";
}
else{
	$is_account_exist = CekAkun($username);
	if($is_account_exist > 0){
		echo "<script>alert('Username $username sudah dipakai');
			window.location = 'login.php'</script>";
	}
	else{
		$do = AddAkun($nama_lengkap, $gender, $prodi, $email, $no_hp, $username, $password, $role);
		if($do > 0){    
			echo "<script>alert('Akun $nama_lengkap berhasil didaftar.');
			window.location = 'login.php'</script>";
		}
		else{
			echo "<script>alert('Maaf akun $nama_lengkap gagal didaftar.');
			window.location = 'login.php'</script>";
		}
	}
}
?>