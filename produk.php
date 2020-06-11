<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/css/gaya.css">
    <title>Produk</title>
    <?php
        include 'commons/header.php';
    ?>
    <style>
      .styleimage{
          width:400px;
          height:300px;
      }
      .pagination > li > a, .pagination > li > span {
          padding-left: 20px;
          line-height: 1;
          margin-bottom: 20px;
          border: 2px solid silver;
          box: #1B242F;
      }
      .a{
          float: center;
      }
    </style>
</head>

<body style="background-color: lightblue">

  <!-- ======= Mobile Menu ======= -->
  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <!-- ======= Header ======= -->
  <main id="main">

    <!-- ======= Features Section ======= -->

    <section class="hero-section inner-page">
      <div class="wave">

        <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
              <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
            </g>
          </g>
        </svg>

      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-md-7 text-center hero-text">
                <h1 data-aos="fade-up" data-aos-delay="">Produk</h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Dengan penemuan baru kita dapat bekerja, dengan niat baru penemuan besar kita Dengan penemuan baru kita dapat bekerja, dengan niat baru penemuan besar yang kita buat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
      include 'database/koneksi.php';
    ?>
    <ul class="container">
      <div class="search" style="margin-top: 30px; margin-left:650px;">      
          <form method="GET" action="produk.php">
              <input  style="width:360px; height:50px; border-radius:10px;" type="text" name="cari" class="textbox" placeholder="   Masukkan id/nama produk" onfocus="this.value = '';" 
                  onblur="if(this.value == '') {
                      this.value = ' Cari produk';
                  }">&nbsp;
                  <input type="submit" value="Search" id="submit" name="submit" style="width:85px; height:50px; border-radius:10px;">
                  <div id="response"> </div>
          </form>
      </div>
    </ul>

    <?php
      $per_hal = 2;
      $id_produk = 'id_produk';
      $jumlah_record = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_produk = $id_produk");
      $jum = mysqli_num_rows($jumlah_record);
      $halaman = ceil($jum / $per_hal);
      $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
      $start = ($page - 1) * $per_hal;
    ?><br><br>
  <ul style="color:black;">
    <div class="content_box">
      <div class="container" style="background-color: lightblue;margin-top: 10px">
		    <div class="content_top" style="background-color: white; " >
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row justify-content-center">
                <div class="col-md-7 text-center hero-text">
                  <p class="mb-12" data-aos="fade-up" data-aos-delay="100">Berikut ini adalahdaftar produk yang telah berhasil dibuat oleh anggota Del Robotic Club.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12" style="background-color: white">
        		<!-- grids_of_4 -->
		        <div class="grids_of_4">
              <?php
    	          if(isset($_GET['cari'])){
  			          echo '<div> <p style="color="red"> Berikut ini hasil pencarian produk &nbsp;<b>" ' . $_GET['cari'] .' ". </b></p></div>';
		  		          $cari=mysqli_real_escape_string($koneksi, $_GET['cari']);
				        	  $produk=mysqli_query($koneksi, "select * from produk where id_produk like '%$cari%' or nama_produk like '%$cari%'");
  					        if(mysqli_num_rows($produk) == null){
                      echo "<script>alert('Produk $cari tidak ada') ;window.location='produk.php'</script>";
		  			        }
			          }
			          else{
			            $produk = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY id_produk DESC LIMIT $start, $per_hal");
			          }
			          while($p = mysqli_fetch_array($produk)){
              ?>
            <div style="background-color: lightblue; margin-top: 3px">
              <section class="section">
                <div class="container">
                  <div class="row align-items-center">
                    <div class="col-md-8 mr-auto">
                      <h2 class="mb-4"><?= $p['nama_produk']?></h2></a>
                      <p class="mb-4" style="text-align:justify;color:black;"><?= $p['deskripsi']?></p>
                    </div>
                    <div class="col-md-4" data-aos="fade-right">
                      <a data-target="blank" href="<?php echo 'admin/img/produk/'.$p['gambar']; ?>">
                        <img src="<?php echo 'admin/img/produk/'.$p['gambar']; ?>" width="500" height="500" alt="Image" class="img-fluid">
                      </a>
                    </div>
                  </div>
                </div>
              <?php } ?> </a>
              </section>
            </div><br><br>
        
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
        </div>
        <div class="row align-items-center">
            <div class="col-12">
              <div class="row justify-content-center">
                <div class="col-md-7 text-center hero-text">
                  <p class="mb-12" data-aos="fade-up" data-aos-delay="100"></p>
                </div>
              </div>
            </div>
          </div>
      </div>
    </ul>
  </div>

    <!-- ======= Testimonials Section ======= -->
    <section class="section border-top border-bottom" style="background-color: #F8F8FF">
        <div class="row justify-content-center text-center mb-6">
          <div class="col-md-4">
            <h2 class="section-heading">Review From Our Users</h2><br>
          </div>
        </div>
        <div class="container">
          <?php
            $connect = new PDO('mysql:host=localhost;dbname=db_drc', 'root', '');
            $query = "SELECT * FROM komentar WHERE parent_comment_id = '0' ORDER BY comment_id DESC LIMIT 2";
            $statement = $connect->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            $output = '';
              foreach($result as $row){
                $output .= '
                <div class="card card-default mb-4" style="color:black;">
                  <div class="card-header">By <b>'.$row["comment_sender_name"].'</b> on <i>'.$row["date"].'</i></div>
                  <div class="card-body">'.$row["comment"].'</div>
                  <div class="card-footer" align="right"><button type="button" class="btn btn-primary reply" id="'.$row["comment_id"].'
                  ">Reply</button></div>
                </div>';
              }
              echo $output;?>
          </div>
          <div class="feature-1 text-center">
            <p data-aos="fade-down" data-aos-delay="200" data-aos-offset="-500"><br>
              <a href="about_us.php" style="background-color: blue;" class="btn btn-outline-white">Add Your Reply Now</a>
            </p><br>
        </div>
      </section><!-- End Testimonials Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
        include 'commons/footer.php';
    ?>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>