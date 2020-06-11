<!DOCTYPE html>
<html lang="en">

	<head>
		<?php 
			include 'commons/header.php';
		?>
		<title>Dashboard Admin</title>
	</head>

	<body id="page-top">
		<!-- Page Wrapper -->
		<div id="wrapper">
			<!-- Begin Page Content -->
			<div class="container-fluid" style="color:black">
				<!-- Page Heading -->
				<h1 style="color:black" class="h3 mb-2 text-gray-800">&emsp;<span class="fas fa-fw fa-bell"></span>&nbsp;Data Pengumuman</h1>
				<p class="mb-12"></p>
				<!-- DataTales Example -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">Data Pengumuman</h6>
					</div>
					<div class="card-body">
                        <h3><span class="glyphicon glyphicon-briefcase"></span>  Edit Pengumuman</h3>
						<?php
							$id = $_GET['id'];
							include 'database/config.php';
							$sql ="SELECT * FROM pengumuman WHERE id_pengumuman = '$id' ORDER BY id_pengumuman";
							$result = mysql_query($sql);
							$d = mysql_num_rows($result);
							$i = 0;
						
							while ($i < $d){
								$autoid = mysql_result($result,$i,"id_pengumuman");
								$judul = mysql_result($result,$i,"judul");
								$waktu = mysql_result($result,$i,"waktu");
								$deskripsi = mysql_result($result,$i,"deskripsi");
								$i++;
							}
						?>					
						<form action="update_pengumuman.php" method="post" enctype="multipart/form-data">
							<table class="table">
								<tr>
									<td>Judul</td>
									<td><input style="color:black" type="text" class="form-control" name="judul" value="<?php echo $judul?>" style="width: 1000px"></td>
								</tr>
								<tr>
									<td>Waktu Post</td>
									<td><input style="color:black" type="text" class="form-control" name="waktu" value="<?php echo $waktu ?>" style="width: 1000px"></td>
								</tr>
								<tr>
									<td>Deskripsi</td>
									<td><textarea name="deskripsi" class="form-control" cols="80%" rows="10" style="color:black;text-align:justify;"><?php echo $deskripsi?></textarea></td>
								</tr>
								<tr>
									<td></td>
									<td><button type="submit" onclick="return confirmUpdate()" class="btn btn-primary">Save Changes</button>
									<input type="hidden" name="hid" value="<?php echo $autoid ?>">	
									<a href="pengumuman.php" class="btn btn-default" data-dismiss="modal" style="width:150px;color:black;float:right;background-color:silver;" >Batal</a>
								</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	    include 'commons/footer.php'
	?>

</body>

</html>
