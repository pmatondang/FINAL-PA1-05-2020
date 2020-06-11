<!DOCTYPE html>
<html lang="en">

	<head>
		<?php 
			include 'commons/header.php';
		?>
		<title>Detail Produk</title>
	</head>

	<body id="page-top">
		<!-- Page Wrapper -->
		<div id="wrapper">
			<!-- Begin Page Content -->
			<div class="container-fluid">
				<!-- Page Heading -->
				<h1 style="color:black" class="h3 mb-2 text-gray-800">&emsp;<span class="fas fa-fw fa-briefcase"></span>&nbsp;Detail Produk</h1>
				<p class="mb-4"></p>
				<!-- DataTales Example -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<?php
								include 'database/koneksi.php';
							?>
							<?php
								$id_produk=mysqli_real_escape_string($koneksi, $_GET['id']);
								$det=mysqli_query($koneksi, "select * from produk where id_produk='$id_produk'")or die(mysql_error());
								while($d=mysqli_fetch_array($det)){
									?>					
									<table class="table" style="background:white;color:black;">
										<tr>
											<td style="width:200px;">ID Produk</td>
											<td><?php echo $d['id_produk'] ?></td>
										</tr>
										<tr>
											<td>Nama</td>
											<td><?php echo $d['nama_produk'] ?></td>
										</tr>
										<tr>
											<td>Deskripsi</td>
											<td style="text-align:justify;color:black;"><?php echo ($d['deskripsi']) ?></td>
										</tr>
										<tr>
											<td>Gambar</td>
											<td><img src="img/produk/<?php echo $d['gambar'];?>"style="width:500px;"/></td>
										</tr>
									</table>
							<?php } ?><br><br>
						</div>
					</div>
				</div>
				<a style="color:black;" class="btn" href="produk.php" class="fas fa-fw fa-arrow-left">
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
