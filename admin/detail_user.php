<!DOCTYPE html>
<html lang="en">

	<head>
		<?php 
			include 'commons/header.php';
		?>
		<title>Detail User</title>
	</head>

	<body id="page-top">
		<!-- Page Wrapper -->
		<div id="wrapper">
			<!-- Begin Page Content -->
			<div class="container-fluid">
				<!-- Page Heading -->
				<h1 style="color:black" class="h3 mb-2 text-gray-800">&emsp;<span class="fas fa-fw fa-user"></span>&nbsp;Detail User</h1>
				<p class="mb-4"></p>
				<!-- DataTales Example -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">Data User</h6>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<?php
								include 'database/koneksi.php';
							?>
							<?php
								$id_user=mysqli_real_escape_string($koneksi, $_GET['id']);
								$det=mysqli_query($koneksi, "select * from user where id_user='$id_user'")or die(mysql_error());
								while($d=mysqli_fetch_array($det)){
									?>					
									<table class="table" border="2" style="background:white;color:black;">
										<tr>
											<td style="width:500px;">ID User</td>
											<td><?php echo $d['id_user'] ?></td>
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
											<td>No_Hp</td>
											<td><?php echo $d['no_hp'] ?></td>
										</tr>
                                        <tr>
											<td>Username</td>
											<td><?php echo $d['username'] ?></td>
										</tr>
                                        <tr>
											<td>Password</td>
											<td><?php echo $d['password'] ?></td>
										</tr>
                                        <tr>
											<td>Role</td>
											<td><?php echo $d['role'] ?></td>
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
