<!DOCTYPE html>
<html lang="en">

<head>
  <link href="img/logo/logo.png" rel="icon">
  <link href="img/logo/logo.png" rel="apple-touch-icon">
  <?php 
    include 'commons/header.php';
  ?>
</head>
      
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    <!-- Content Row -->
    <div class="row">
      <div class="col-lg-6 mb-4">
          <div class="card bg-primary text-white shadow">
            <div class="card-body">
              <h2><a href="produk.php" style="color:white">Produk</a></h2>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-4">
          <div class="card bg-success text-white shadow">
            <div class="card-body">
              <h2><a href="pengumuman.php" style="color:white">Pengumuman</a></h2>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-4">
          <div class="card bg-info text-white shadow">
            <div class="card-body">
              <h2><a href="kegiatan.php" style="color:white">Kegiatan</a></h2>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-4">
          <div class="card bg-warning text-white shadow">
            <div class="card-body">
                <h2><a href="galery.php" style="color:white">Galery</a></h2>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-4">
          <div class="card bg-danger text-white shadow">
            <div class="card-body">
              <h2><a href="pemesanan.php" style="color:white">Pemesanan</a></h2>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-4">
          <div class="card bg-secondary text-white shadow">
            <div class="card-body">
              <h2><a href="komentar.php" style="color:white">Komentar</a></h2>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-4">
        <div class="card bg-dark text-white shadow">
          <div class="card-body">
            <h2><a href="anggota.php" style="color:white">Anggota</a></h2>
          </div>
        </div>
      </div>
        <div class="col-lg-6 mb-4">
          <div class="card bg-light text-black shadow">
            <div class="card-body">
              <h2><a href="user.php" style="color:black">User</a></h2>
            </div>
          </div>
      </div>
    </div>  
  </div>
    <!-- End of Main Content -->

      <?php
        include 'commons/footer.php'
      ?>
</body>

</html>
