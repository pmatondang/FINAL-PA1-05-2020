<?php
$id = $_POST['hid'];
$judul = $_POST['judul'];
$waktu = $_POST['waktu'];
$deskripsi = $_POST['deskripsi'];

include('database/config.php');

$sql = "UPDATE pengumuman SET judul='$judul', waktu='$waktu', deskripsi='$deskripsi' WHERE id_pengumuman='$id'";

if (mysql_query($sql))
{
	echo "<script>alert('Pengumuman $id berhasil diubah!'); window.location = 'pengumuman.php'</script>";	
}
else
{
	echo "<script>alert('Pengumuman $id gagal diubah!'); window.location = 'edit_pengumuman.php'</script>";
}

?>