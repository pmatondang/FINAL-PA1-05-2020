<?php
	session_start();
    include 'database/koneksi.php';
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$pass'")or die(mysql_error());
	if(mysqli_num_rows($query)==0){
		echo "<script> alert('Username dan Password invalid.'); window.location = 'login.php'</script>";
	}else{
		$_SESSION['username']=$username;
		$_SESSION['masuk']=TRUE;
		$row=mysqli_fetch_assoc($query);
		$_SESSION['username']=$row['username'];
		$_SESSION['role']=$row['role'];
		$_SESSION['nama_lengkap']=$row['nama_lengkap'];
		$_SESSION['id_users']=$row['id_user'];

		if ($row['role']==1) {
			echo "<script>alert('Selamat datang $username'); window.location = 'admin/index.php'</script>";	
		}
		if ($row['role']==2) {
			echo "<script>alert('Selamat bergabung $username'); window.location = 'dashboard_anggota.php'</script>";
	}else{
		echo "<script>alert('Username dan Password invalid.'); window.location = 'login.php'</script>";
	}
}
	?>