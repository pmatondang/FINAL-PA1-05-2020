<!DOCTYPE html>
<html lang="en">

	<head>
		<?php 
			include 'commons/header.php';
		?>
		<title>Detail Pemesanan</title>
	</head>

	<body id="page-top">
		<!-- Page Wrapper -->
		<div id="wrapper">
			<!-- Begin Page Content -->
			<div class="container-fluid">
				<!-- Page Heading -->
				<h1 style="color:black" class="h3 mb-2 text-gray-800">&emsp;<span class="fas fa-fw fa-clipboard-list"></span>&nbsp;Detail Pemesanan</h1>
				<p class="mb-12"></p>
				<!-- DataTales Example -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">Data Pemesanan</h6>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<?php
								include 'database/koneksi.php';
							?>
							<?php
								$id_pesanan=mysqli_real_escape_string($koneksi, $_GET['id']);
								$det=mysqli_query($koneksi, "SELECT * FROM pemesanan WHERE id_pemesanan='$id_pesanan'")or die(mysql_error());
								while($d=mysqli_fetch_array($det)){
									?>					
									<table class="table" border="2" style="background:white;color:black;   ">
										<tr>
											<td style="width:300px;">ID Pesanan</td>
											<td><?php echo $d['id_pemesanan'] ?></td>
										</tr>
										<tr>
											<td>Nama Pemesan</td>
											<td><?php echo $d['nama_lengkap'] ?></td>
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
											<td>Jenis</td>
											<td><?php echo $d['jenis'] ?></td>
										</tr>
                                        <tr>
											<td>Lama Peminjaman</td>
											<td><?php echo $d['tgl_pinjam'] ?> sampai <?php echo $d['tgl_kembali'] ?></td>
										</tr>
                                        <tr style="height:200px;">
                                        </tr>
									</table>
							<?php } ?><br><br>
						</div>
					</div>
				</div>
                <a style="color:black;" class="btn" href="pemesanan.php" class="fas fa-fw fa-arrow-left">
					<span class="fa fa-sign-out-alt" style="margin-left:1400px;">&nbsp;Kembali</span><br>
				</a>
			</div>
            </div>
		</div>
	
	<?php
	    include 'commons/footer.php'
	?>

</body>

</html>
