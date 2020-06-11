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
    <div class="container-fluid">
      <h1 class="h3 mb-2 text-gray-800">Galery</h1>
      <p class="mb-4"></p>
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Data Galery</h6>
        </div>
        <div class="card-body">
          <a style="margin-bottom:20px" class="btn btn-info col-md-2" href="tambah_dokumentasi.php">
            <span class="fas fa-fw fa-plus"></span>Tambah Dokumentasi
          </a><br/><br/>
            <?php
              include 'database/koneksi.php';
            ?>
            <?php
              $per_hal =6;
              $id_galery = 'id_galery';
              $jumlah_record = mysqli_query($koneksi, "SELECT * FROM foto WHERE id_galery = $id_galery");
              $jum = mysqli_num_rows($jumlah_record);
              $halaman = ceil($jum / $per_hal);
              $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
              $start = ($page - 1) * $per_hal;
            ?>
            <div class="col-md-12">
                <table class="col-md-2" style="color:black">
                  <tr>
                    <td>Jumlah Gambar</td>		
                    <td><?php echo $jum; ?></td>
                  </tr>
                  <tr>
                    <td>Jumlah Halaman</td>	
                    <td><?php echo $halaman; ?></td>
                  </tr>
                </table>
              </div>

            <ul style="color:black;">
              <div class="">
                <div class="grids_of_4"><br><br>
                    <div class="row mb-5" >
                      <?php
                        if(isset($_GET['cari'])){
                          echo '<p style="color="red">&emsp;Berikut ini hasil pencarian foto <b>"' . $_GET['cari'] .' ". </b></p>';
                            $cari=mysqli_real_escape_string($koneksi, $_GET['cari']);
                            $galery=mysqli_query($koneksi, "SELECT * FROM foto WHERE id_galery LIKE '%$cari%' OR deskripsi LIKE '%$cari%'");
                            if(mysqli_num_rows($galery) == null){
                              echo "<script>alert('Foto $cari yang dicari tidak ada') ;window.location='galery.php'</script>";
                            }
                        }
                        else{
                          $galery = mysqli_query($koneksi, "SELECT * FROM foto ORDER BY date DESC LIMIT $start, $per_hal");
                        }
                        while($p = mysqli_fetch_array($galery)){
                      ?>
                        <div class="col-md-4">
                          <div class="post-entry">
                            <a data-target="blank" href="<?php echo 'img/galery/'.$p['nama_file']; ?>">
                              <img style="height:300px" src="<?php echo 'img/galery/'.$p['nama_file']; ?>" width="350" alt="Image" class="img-fluid">
                            </a>
                              <span class="post-meta"><br><br>
                              <a onclick="if(confirm('Apakah anda yakin ingin menghapus foto ini ??')){ 
                                location.href='hapus_galery.php?id=<?php echo $p['id_galery']; ?>' }" class="btn btn-danger">
                                <span class="fas fa-trash-alt fa-sm"></span>
                              </a> 
                              Dipost tanggal <?= $p['date']?><br> By <a href="#">Admin</a>.
                              Deskripsi : <?= $p['deskripsi']?></p><br>
                              </span>
                            </div>
                        </div>
                      <?php } ?></a>
                    </div>
                  </section>

                  <ul class="pagination a">
                    <?php 
                      if($page == 1){ // Jika page adalah page ke 1, maka disable link PREV
                          ?>
                            <li class="page-item"><a class="page-link" href="#">First</a></li>
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                          <?php
                          }else{ // Jika page bukan page ke 1
                            $link_prev = ($page > 1)? $page - 1 : 1;
                          ?>
                            <li class="page-item"><a class="page-link" href="galery.php?page=1">First</a></li>
                            <li class="page-item"><a class="page-link" href="galery.php?page=<?php echo $link_prev; ?>">&laquo;</a></li>
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
                              <li class="page-item"><a class="page-link" href="galery.php?page=<?php echo $link_next; ?>">&raquo;</a></li>
                              <li class="page-item"><a class="page-link" href="galery.php?page=<?php echo $halaman; ?>">Last</a></li>    
                          <?php }
                          ?>
                      </li>
                  </ul>
                </div>
              </div>
            </ul>
        </div>
    </div></div></div>
                          

  <!-- Footer -->
  <?php
    include 'commons/footer.php'
  ?>
  <!-- End of Footer -->

  </body>
</html>
