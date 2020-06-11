<!DOCTYPE html>
<html lang="en">

	<head>
		<?php 
			include 'commons/header.php';
		?>
		<title>Detail Anggota</title>
	</head>

	<body id="page-top">
		<!-- Page Wrapper -->
		<div id="wrapper">
			<!-- Begin Page Content -->
			<div class="container-fluid">
				<!-- Page Heading -->
				<h1 style="color:black" class="h3 mb-2 text-gray-800">&emsp;<span class="fas fa-fw fa-user"></span>&nbsp;Detail Anggota</h1>
				<p class="mb-4"></p>
				<!-- DataTales Example -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">Data Anggota</h6>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<?php
								include 'database/koneksi.php';
							?>
							<?php
								$id_anggota=mysqli_real_escape_string($koneksi, $_GET['id']);
								$det=mysqli_query($koneksi, "select * from anggota where id_anggota='$id_anggota'")or die(mysql_error());
								while($d=mysqli_fetch_array($det)){
									?>					
									<table border="2" class="table" style="background:white;color:black;">
										<tr>
											<td style="width:200px;">ID Anggota</td>
											<td><?php echo $d['id_anggota'] ?></td>
										</tr>
										<tr>
											<td>Nama Lengkap</td>
											<td><?php echo $d['nama_lengkap'] ?></td>
										</tr>
										<tr>
											<td>Gender</td>
											<td><?php echo $d['gender'] ?></td>
										</tr>
                                        <tr>
											<td>Prodi</td>
											<td><?php echo $d['prodi'] ?></td>
										</tr>
                                        <tr>
											<td>Email</td>
											<td><?php echo $d['email'] ?></td>
										</tr>
                                        <tr>
											<td>Motivasi</td>
											<td style="text-align:justify;"><?php echo ($d['motivasi']) ?></td>
                                        </tr>
									</table>
							<?php } ?><br><br>
						</div>
					</div>
				</div>
				<a style="color:black;" class="btn" href="data_user.php" class="fas fa-fw fa-arrow-left">
					<span class="fa fa-sign-out-alt" style="margin-left:1400px;">&nbsp;Kembali</span><br><br>
				</a>
			</div>
		</div>
		</div>
	
	<?php
	    include 'commons/footer.php'
	?>

</body>

</html>
