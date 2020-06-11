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
				<h1 style="color:black" class="h3 mb-2 text-gray-800">&emsp;<span class="fas fa-fw fa-bell"></span>&nbsp;Tambah Pengumuman</h1>
				<p class="mb-12"></p>
				<!-- DataTales Example -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">Data Pengumuman</h6>
					</div>
					<div class="card-body">
						<div class="table-responsive">
                            <h3><span class="fas fa-fw fa-plus"></span> Tambah Baru</h3><br/><br/>
                            <form action="tambah_pengumuman_proses.php" method="post">
                                <div class="form-group">
                                    <input name="id_pengumuman" type="hidden" class="form-control" placeholder="Judul Pengumuman.." style="width:90%;color:black;">
                                </div>
                                <div class="form-group">
                                    <label>Judul Pengumuman</label>
                                    <input name="judul" type="text" class="form-control" placeholder="Judul Pengumuman.." style="width:90%;color:black;" required>
                                </div><br>
                                <div class="form-group">
                                    <label>Waktu posting</label>
                                    <input name="waktu" type="date" class="form-control" placeholder="Waktu Posting.." style="width:90%;color:black;" required>
                                </div><br>
                                <div class="form-group">
                                    <label>Deskripsi</label><br>
                                    <textarea name="deskripsi" class="form-control" cols="80%" rows="10" style="color:black;text-align:justify" required></textarea>
                                </div><br>
                                <input type="submit" class="btn btn-primary" value="Simpan" name="tambah" style="width:150px">
                                <a href="pengumuman.php" class="btn btn-default" data-dismiss="modal" style="width:150px;color:black;float:right;background-color:silver;" >Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
            include 'commons/footer.php'
        ?>
      <!-- End of Footer -->

    </body>

</html>