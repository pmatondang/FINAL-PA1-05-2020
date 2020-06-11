<!DOCTYPE html>
<html lang="en">

<head>
  <?php 
    include 'commons/header.php';
  ?>
  <title>Produk</title>
  <style>
      .styleimage{
          width:400px;
          height:300px;
      }
      .pagination > li > a, .pagination > li > span {
          padding-left: 20px;
          line-height: 1;
          margin-bottom: 20px;
          border: 2px solid brown;
          box: #1B242F;
      }
      .a{
          float: right;
      }
      .page-link{
        color:black;
      }
    </style>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
  
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Pengumuman</h1>
          <p class="mb-4"></p>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pengumuman</h6>
            </div>
            <div class="card-body">
            <a style="margin-bottom:20px" class="btn btn-info col-md-2" href="tambah_pengumuman.php">
              <span class="fas fa-fw fa-plus"></span>Tambah Pengumuman
            </a><br/><br/>
              <div class="table-responsive">
              <?php
                include 'database/koneksi.php';
              ?>
              <?php 
                $per_hal=3;
                $jumlah_record=mysqli_query($koneksi, "SELECT * from pengumuman");
                $jum=mysqli_num_rows($jumlah_record);
                $halaman=ceil($jum / $per_hal);
                $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
                $start = ($page - 1) * $per_hal;
              ?>
              <div class="col-md-12">
                <table class="col-md-2" style="color:black">
                  <tr>
                    <td>Jumlah Pengumuman</td>		
                    <td><?php echo $jum; ?></td>
                  </tr>
                  <tr>
                    <td>Jumlah Halaman</td>	
                    <td><?php echo $halaman; ?></td>
                  </tr>
                </table>
              </div>
            
              <form action="cari_pengumuman.php" class="input-group col-md-4 col-md-offset-8" style="float:right;">
                <div class="input-group">
                <button class="btn btn-primary" type="button">
                      <i class="fas fa-search fa-sm"></i>
                    </button>
                  <input style="color:black" type="text" class="form-control bg-light border-0 small" name="cari" placeholder="Silahkan cari..." aria-label="Search" aria-describedby="basic-addon2">
                </div>
              </form><br><br><br>

              <?php 
                if(isset($_GET['cari'])){
                  echo '<div> <b>Hasil pencarian dengan kata kunci "'. $_GET['cari'] .'"</b></div><br/>';
                  $cari=mysqli_real_escape_string($koneksi, $_GET['cari']);
                  $pengumuman=mysqli_query($koneksi, "SELECT * FROM pengumuman WHERE id_pengumuman like '%$cari%' or judul like '%$cari%'");
                }else{
                  $pengumuman=mysqli_query($koneksi, "SELECT * FROM pengumuman ORDER BY waktu DESC limit $start, $per_hal");
                  
                }
                $no=1;
                $count = mysqli_num_rows($pengumuman);
                if($count == null){
                  if(isset($_GET['cari'])){
                    echo "<script>alert('Pengumuman $cari tidak ada') ;window.location = 'pengumuman.php'</script>";	
                  }
                }else{
                ?>
                  <table class="table table-bordered" style="color:black" width="100%" cellspacing="0">
                    <thead style="background: #CCCCFF;">
                      <tr><center>
                        <th>No</th>
                        <th style="width:250px;">Judul Pengumuman</th>
                        <th style="width:200px;">Waktu</th>
                        <th>Deskripsi</th>
                        <th style="width:200px;">Aksi</th></center>
                      </tr>
                    </thead>
                    <?php
                      while($b=mysqli_fetch_array($pengumuman)){
                    ?>
                    <tbody>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <input type="hidden" value="<?php echo $b['id_pengumuman'] ?>">
                        <td><?php echo $b['judul']?></td>
                        <td><?php echo $b['waktu'] ?></td>
                        <td style="text-align:justify;"><?php echo $b['deskripsi']?></td>
                        <td>
                          <a href="detail_pengumuman.php?id=<?php echo $b['id_pengumuman']; ?>" class="btn btn-info">
                            <span class="fas fa-search fa-sm"></span></a>
                          <a href="edit_pengumuman.php?id=<?php echo $b['id_pengumuman']; ?>" class="btn btn-warning">
                            <span class="fas fa-edit fa-sm"></span></a>
                          <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ 
                            location.href='hapus_pengumuman.php?id=<?php echo $b['id_pengumuman']; ?>' }" class="btn btn-danger">
                            <span class="fas fa-trash fa-sm"></span></a>
                        </td>
                      </tr>
                    </tbody>
                    <?php }?>
                  </table><br><br>
                <center>
                <ul class="pagination a" style="margin-left:740px;">
                  <?php 
                    if($page == 1){ // Jika page adalah page ke 1, maka disable link PREV
                        ?>
                          <li class="page-item"><a class="page-link" href="#">First</a></li>
                          <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <?php
                        }else{ // Jika page bukan page ke 1
                          $link_prev = ($page > 1)? $page - 1 : 1;
                        ?>
                          <li class="page-item"><a class="page-link" href="pengumuman.php?page=1">First</a></li>
                          <li class="page-item"><a class="page-link" href="pengumuman.php?page=<?php echo $link_prev; ?>">&laquo;</a></li>
                        <?php
                        }
                    for($x = 1;$x <= $halaman; $x++){?>
                      <li class="page-item" ><a class="page-link" href="?page=<?php echo $x?>"><?php echo $x ?></a></li>
                        <?php } ?>
                        
                        <?php
                        // Jika page sama dengan jumlah page, maka disable link NEXT nya
                        // Artinya page tersebut adalah page terakhir 
                        if($page == $halaman){ // Jika page terakhir ?>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">Last</a></li>
                        
                        <?php }
                        else{ // Jika Bukan page terakhir
                            $link_next = ($page < $halaman)? $page + 1 : $halaman;
                        ?>
                            <li class="page-item"><a class="page-link" href="pengumuman.php?page=<?php echo $link_next; ?>">&raquo;</a></li>
                            <li class="page-item"><a class="page-link" href="pengumuman.php?page=<?php echo $halaman; ?>">Last</a></li>    
                        <?php }
                        ?>
                    </li>
                </ul>
                </center>
                <?php }?>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
                        </div>
      <!-- Footer -->
      <?php
        include 'commons/footer.php'
      ?>
      <!-- End of Footer -->

</body>

</html>
