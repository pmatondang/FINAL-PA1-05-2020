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
				<h1 style="color:black" class="h3 mb-2 text-gray-800">&emsp;<span class="fas fa-fw fa-user"></span>&nbsp;Tambah User</h1>
				<p class="mb-12"></p>
				<!-- DataTales Example -->
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">Data User</h6>
					</div>
					<div class="card-body">
						<div class="table-responsive">
                            <h3><span class="fas fa-fw fa-plus"></span> Tambah Baru</h3><br/><br/>
                            <form action="tambah_user_proses.php" method="post">
                                <div class="form-group">
                                    <input name="id_user" type="hidden" class="form-control" style="width:50%;color:black;">
                                </div>
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input name="nama_lengkap" type="text" class="form-control" placeholder="Nama Lengkap .." style="width:50%;color:black;" required>
                                </div><br>
                                <div class="form-group">
                                    <label>Gender</label><br>
                                    <select class="form-control" name="gender" id="" style="width:20%;color:black;">
                                        <option value="Pilih Gender">Pilih Gender...</option>
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>   
                                </div><br>
                                <div class="form-group">
                                    <label>Prodi</label>
                                    <input name="prodi" type="text" class="form-control" placeholder="Masukkan Prodi .." style="width:50%;color:black;" required>
                                </div><br>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="email" type="email" class="form-control" placeholder="Masukkan Email .." style="width:50%;color:black;" required>
                                </div><br>
                                <div class="form-group">
                                    <label>No_Hp</label>
                                    <input name="no_hp" type="number" class="form-control" placeholder="Masukkan no_hp .." style="width:50%;color:black;" required>
                                </div><br>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input name="username" type="text" class="form-control" placeholder="Username .." style="width:50%;color:black;" required>
                                </div><br>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input name="password" type="text" class="form-control" placeholder="Password .." style="width:50%;color:black;" required>
                                </div><br>
                                <div class="form-group">
                                    <label>Role</label>
                                    <input name="role" type="number" class="form-control" placeholder="Tetapkan Role sebagai user .." style="width:50%;color:black;" required>
                                </div><br>
                                <input type="submit" class="btn btn-primary" value="Simpan" name="tambah" style="width:150px">
                                <a href="data_user.php" class="btn btn-default" data-dismiss="modal" style="width:150px;color:black;margin-left:450px;;background-color:silver;" >Batal</a>
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