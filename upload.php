<?php
require_once 'database/konfig.php';

if(ISSET($_POST['submit'])){
	if($_FILES['upload']['name'] != "") {
		$file = $_FILES['upload'];
		
		$file_name = $file['name'];
		$file_temp = $file['tmp_name'];
		$name = explode('.', $file_name);
		$path = "files/".$file_name;
		
		$conn->query("INSERT INTO `data` VALUES('', '$name[0]', '$path')") or die(mysqli_error());
		
		move_uploaded_file($file_temp, $path);
		header("location:upload_file.php");
		
	}else{
		echo "<script>alert('Tidak ada file yang ingin diupload!')</script>";
		echo "<script>window.location='upload_file.php'</script>";
	}
}
?>