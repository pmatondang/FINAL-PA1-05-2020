<?php 
global $db;
    $db = mysqli_connect('localhost','root','','db_drc');
    if(!$db){
        die("Database Connect Problem");
    }	
function ExecuteQuery($query){
	global $db;
	$result = mysqli_query($db,$query);

	return $result;
}
function CekAkun($username){
	$query = "SELECT username FROM user WHERE username ='$username'";

	$result = ExecuteQuery($query);

	return mysqli_num_rows($result);   
}
function AddAkun($nama_lengkap, $gender, $prodi, $email, $no_hp, $username, $password, $role){
	global $db;
	$query = "INSERT INTO user VALUES ('', '$nama_lengkap', '$gender', '$prodi', '$email', '$no_hp', '$username', '$password', '$role')";

	$result = ExecuteQuery($query);

	return mysqli_affected_rows($db);
}

function CekOrder($date1, $nama_alat){
	$query = "SELECT tgl_pinjam, nama FROM pemesanan WHERE tgl_pinjam ='$date1' OR nama='$nama_alat'";

	$result = ExecuteQuery($query);

	return mysqli_num_rows($result);   
}

function AddOrder($nama, $prodi, $email, $jenis, $nama_alat, $date1, $date2){
	global $db;
	$query = "INSERT INTO pemesanan VALUES ('', '$nama', '$prodi', '$email', '$jenis', '$nama_alat', '$date1', '$date2')";

	$result = ExecuteQuery($query);

	return mysqli_affected_rows($db);
}

?>