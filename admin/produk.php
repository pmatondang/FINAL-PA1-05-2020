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
          <h1 class="h3 mb-2 text-gray-800">Produk</h1>
          <p class="mb-4"></p>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
            </div>
            <div class="card-body">
              <a style="margin-bottom:20px" class="btn btn-info col-md-2" href="tambah_produk.php">
                <span class="fas fa-fw fa-plus"></span>Tambah Produk
              </a><br/><br/>
              <div class="table-responsive">
              <?php
                include 'database/koneksi.php';
              ?>
              <?php 
                $per_hal=2;
                $jumlah_record=mysqli_query($koneksi, "SELECT * from produk");
                $jum=mysqli_num_rows($jumlah_record);
                $halaman=ceil($jum / $per_hal);
                $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
                $start = ($page - 1) * $per_hal;
              ?>
              <div class="col-md-12">
                <table class="col-md-2" style="color:black">
                  <tr>
                    <td>Jumlah Produk</td>		
                    <td><?php echo $jum; ?></td>
                  </tr>
                  <tr>
                    <td>Jumlah Halaman</td>	
                    <td><?php echo $halaman; ?></td>
                  </tr>
                </table>
              </div>
            
              <form action="cari_produk.php" class="input-group col-md-4 col-md-offset-8" style="float:right;">
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
                  $produk=mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk LIKE '%$cari%' OR nama_produk LIKE '%$cari%'");
                }else{
                  $produk=mysqli_query($koneksi, "SELECT * FROM  produk ORDER BY id_produk DESC LIMIT $start, $per_hal");
                  
                }
                $no=1;
                $count = mysqli_num_rows($produk);
                if($count == null){
                  if(isset($_GET['cari'])){
                    echo "<script>alert('Produk $cari tidak ada') ;window.location = 'produk.php'</script>";	
                  }
                }else{
                ?>
                  <table class="table table-bordered" style="color:black" width="100%" cellspacing="0">
                    <thead style="background: #CCCCFF;">
                      <tr><center>
                        <th>No</th>
                        <th style="width:200px;">Nama Produk</th>
                        <th>Deskripsi</th>
                        <th style="width:200px;">Aksi</th></center>
                      </tr>
                    </thead>
                    <?php
                      while($b=mysqli_fetch_array($produk)){
                    ?>
                    <tbody>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <input type="hidden" value="<?php echo $b['id_produk'] ?>">
                        <td><?php echo $b['nama_produk']?></td>
                        <td style="text-align:justify;"><?php echo $b['deskripsi']?></td>
                        <td>
                          <a href="detail_produk.php?id=<?php echo $b['id_produk']; ?>" class="btn btn-info">
                            <span class="fas fa-search fa-sm"></span></a>
                          <a href="edit_produk.php?id=<?php echo $b['id_produk']; ?>" class="btn btn-warning">
                            <span class="fas fa-edit fa-sm"></span></a>
                          <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ 
                            location.href='hapus_produk.php?id=<?php echo $b['id_produk']; ?>' }" class="btn btn-danger">
                            <span class="fas fa-trash-alt fa-sm"></span></a>
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
                          <li class="page-item"><a class="page-link" href="produk.php?page=1">First</a></li>
                          <li class="page-item"><a class="page-link" href="produk.php?page=<?php echo $link_prev; ?>">&laquo;</a></li>
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
                            <li class="page-item"><a class="page-link" href="produk.php?page=<?php echo $link_next; ?>">&raquo;</a></li>
                            <li class="page-item"><a class="page-link" href="produk.php?page=<?php echo $halaman; ?>">Last</a></li>    
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
