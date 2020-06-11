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
				<h1 style="color:black" class="h3 mb-2 text-gray-800">&emsp;<span class="fas fa-fw fa-briefcase"></span>&nbsp;Tambah Kegiatan</h1>
				<p class="mb-12"></p>
				<!-- DataTales Example -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">Data Kegiatan</h6>
					</div>
					<div class="card-body">
						<div class="table-responsive">
                            <h3><span class="fas fa-fw fa-plus"></span> Tambah Baru</h3><br/><br/>   
                            <form action="tambah_kegiatan_proses.php" method="post" enctype="multipart/form-data">
                                <input name="id_kegiatan" type="hidden" class="form-control" style="width:90%;color:black;">
                                <div class="form-group">
                                    <label>Judul Kegiatan</label>
                                    <input name="judul_kegiatan" type="text" class="form-control" placeholder="Judul Kegiatan.." style="width:100%;color:black;" required>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label><br>
                                    <textarea name="deskripsi" class="form-control" cols="60%" rows="10" style="color:black;text-align:justify;" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input name="gambar" type="file" class="form-control"  style="width: 300px">
                                </div>
                                <div class="form-group">
                                    <label>Kategori</label><br>
                                    <input name="kategori" type="text" class="form-control" placeholder="Kategori.." style="width:100%;color:black;" required>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal</label><br>
                                    <input name="date" type="date" class="form-control" placeholder="Tanggal post.." style="width:20%;color:black;" required>
                                </div><br>
                                <input type="submit" class="btn btn-primary" value="Simpan" name="tambah" style="width:150px">
                                <a href="kegiatan.php" class="btn btn-default" data-dismiss="modal" style="width:150px;color:black;float:right;background-color:silver;" >Batal</a>
                            </form><br><br>
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