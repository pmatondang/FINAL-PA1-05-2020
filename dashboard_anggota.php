<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/css/gayaa.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Del Robotic Club</title>
    <?php
        include 'commons/header_anggota.php';
    ?>
    <style>
    .main {
      width: 800px;
      height: 600px;
      margin: 50px auto;
    }
    .panel {
        background-color: #444;
        height: 34px;
        padding: 10px;
    }
    .panel a#login_pop, .panel a#join_pop {
        border: 2px solid #aaa;
        color: #fff;
        display: block;
        float: right;
        margin-right: 10px;
        padding: 5px 10px;
        text-decoration: none;
        text-shadow: 1px 1px #000;

        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        -ms-border-radius: 10px;
        -o-border-radius: 10px;
        border-radius: 10px;
    }
    a#login_pop:hover, a#join_pop:hover {
        border-color: #eee;
    }
    .overlay {
        background-color: rgba(0, 0, 0, 0.6);
        bottom: 0;
        cursor: default;
        left: 0;
        opacity: 0;
        position: fixed;
        right: 0;
        top: 0;
        visibility: hidden;
        z-index: 1;

        -webkit-transition: opacity .5s;
        -moz-transition: opacity .5s;
        -ms-transition: opacity .5s;
        -o-transition: opacity .5s;
        transition: opacity .5s;
    }
    .overlay:target {
        visibility: visible;
        opacity: 1;
    }
    .popup {
        background-color: lightblue;
        width: 30%;
        height: 70%;
        border: 3px solid white;
        display: inline-block;
        left: 50%;
        opacity: 0;
        padding: 15px;
        position: fixed;
        text-align: justify;
        top: 80%;
        visibility: hidden;
        font-family: garamond;
        z-index: 10;

        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);

        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        -ms-border-radius: 10px;
        -o-border-radius: 10px;
        border-radius: 10px;

        -webkit-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
        -moz-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
        -ms-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
        -o-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
        box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;

        -webkit-transition: opacity .5s, top .5s;
        -moz-transition: opacity .5s, top .5s;
        -ms-transition: opacity .5s, top .5s;
        -o-transition: opacity .5s, top .5s;
        transition: opacity .5s, top .5s;
      }
      .overlay:target+.popup {
          top: 50%;
          opacity: 1;
          visibility: visible;
      }
      .close {
          background-color: black;
          height: 30px;
          line-height: 30px;
          position: absolute;
          right: 0;
          text-align: center;
          text-decoration: none;
          top: -15px;
          width: 30px;

          -webkit-border-radius: 15px;
          -moz-border-radius: 15px;
          -ms-border-radius: 15px;
          -o-border-radius: 15px;
          border-radius: 15px;
      }
      .close:before {
          color: rgba(255, 255, 255, 0.9);
          content: "X";
          font-size: 24px;
          text-shadow: 0 -1px rgba(0, 0, 0, 0.9);
      }
      .close:hover {
          background-color: rgba(64, 128, 128, 0.8);
      }
      .popup p, .popup div {
          margin-bottom: 10px;
      }
      .popup label {
          display: inline-block;
          text-align: left;
          width: 120px;
      }
      .popup input[type="text"],[type="email"], .popup input[type="password"] {
          border: 1px solid;
          border-color: #999 #ccc #ccc;
          margin: 0;
          width: 100%;
          padding: 2px;

          -webkit-border-radius: 2px;
          -moz-border-radius: 2px;
          -ms-border-radius: 2px;
          -o-border-radius: 2px;
          border-radius: 2px;
      }
      #input_reg{
          width: 100%;
      }
      .popup input[type="text"]:hover, .popup input[type="password"]:hover {
          border-color: #555 #888 #888;
      }
      .b{
          font-family:"Roboto", sans-serif;
      }
        .popup1 {
        background-color: lightblue;
        width: 30%;
        height: 76%;
        border: 3px solid white;
        display: inline-block;
        left: 50%;
        opacity: 0;
        padding: 15px;
        position: fixed;
        text-align: justify;
        top: 80%;
        visibility: hidden;
        font-family: garamond;
        z-index: 10;

        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);

        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        -ms-border-radius: 10px;
        -o-border-radius: 10px;
        border-radius: 10px;

        -webkit-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
        -moz-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
        -ms-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
        -o-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
        box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;

        -webkit-transition: opacity .5s, top .5s;
        -moz-transition: opacity .5s, top .5s;
        -ms-transition: opacity .5s, top .5s;
        -o-transition: opacity .5s, top .5s;
        transition: opacity .5s, top .5s;
      }
      .overlay:target+.popup1 {
          top: 50%;
          opacity: 1;
          visibility: visible;
      }
      .close {
          background-color: black;
          height: 30px;
          line-height: 30px;
          position: absolute;
          right: 0;
          text-align: center;
          text-decoration: none;
          top: -15px;
          width: 30px;

          -webkit-border-radius: 15px;
          -moz-border-radius: 15px;
          -ms-border-radius: 15px;
          -o-border-radius: 15px;
          border-radius: 15px;
      }
      .close:before {
          color: rgba(255, 255, 255, 0.9);
          content: "X";
          font-size: 24px;
      }
      .close:hover {
          background-color: rgba(64, 128, 128, 0.8);
      }
      .popup1 p, .popup1 div {
          margin-bottom: 10px;
      }
      .popup1 label {
          display: inline-block;
          text-align: left;
          width: 120px;
      }
      .popup1 input[type="text"],[type="email"], .popup1 input[type="password"] {
          border: 1px solid;
          border-color: #999 #ccc #ccc;
          margin: 0;
          width: 100%;
          padding: 2px;

          -webkit-border-radius: 2px;
          -moz-border-radius: 2px;
          -ms-border-radius: 2px;
          -o-border-radius: 2px;
          border-radius: 2px;
      }
      #input_reg{
          width: 100%;
      }
      .popup1 input[type="text"]:hover, .popup1 input[type="password"]:hover {
          border-color: #555 #888 #888;
      }
      </style>
</head>

<body class="body">
  <!-- ======= Hero Section ======= -->
  <section class="hero-section" id="hero">
    <div class="wave">
      <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
            <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
          </g>
        </g>
      </svg>
    </div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 hero-text-image">
          <div class="row">
            <div class="col-lg-7 text-center text-lg-left" id="intro-section">
              <h1 data-aos="fade-right">Mari Ciptakan Robotmu dengan DRC</h1>
              <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"></p>
              <a data-aos="fade-right" href="#pesan_form" id="login_pop" class="btn btn-outline-white">Pemesanan alat/ruangan</a>    
            </div>
            <!-- pemesanan alat dan ruangan -->
            <a href="#x" class="overlay" id="pesan_form"></a>
              <div class="popup1">
                <b><center><h4>Silakan pesan sekarang</h4>
                <p style="color:black;">Mari isi data anda</p></center></b>
                <form method="POST" action="proses_pemesanan.php">
                    <fieldset id="inputs" style="color: black;" class="b">
                        <div class="input-group">Nama lengkap</div>
                        <input type="text" id="input_reg" class="input" name="nama_lengkap" placeholder="nama anda" required>
                        <div class="input-group">Prodi</div>
                        <div>
                            <span class="glyphicon glyphicon-user span"></span>
                            <select id="input_reg" name="prodi" required>
                                <option value="-">- Pilih Prodi -</option>
                                <option value="DII TEKNOLOGI INFORMASI">DII TEKNOLOGI INFORMASI</option>
                                <option value="DIV TEKNOLOGI REKAYASA PERANGKAT LUNAK">DIV TEKNOLOGI REKAYASA PERANGKAT LUNAK</option>
                                <option value="DIII TEKNIK KOMPUTER">DIII TEKNIK KOMPUTER</option>
                                <option value="S1 INFORMATIKA">S1 INFORMATIKA</option>
                                <option value="S1 SISTEM INFORMASI">S1 SISTEM INFORMASI</option>
                                <option value="S1 TEKNIK ELEKTRO">S1 TEKNIK ELEKTRO</option>
                                <option value="S1 MANAJEMEN REKAYASA">S1 MANAJEMEN REKAYASA</option>
                                <option value="S1 BIOPROSES">S1 BIOPROSES</option>
                            </select> 
                        </div>
                        <div class="input-group">Email</div>
                        <div>
                            <input type="email" class="input" name="email" placeholder="masukkan email" required> 
                        </div>
                        <div class="input-group">Jenis</div>
                        <div>
                                <select class="form-control" name="jenis">
                                <option value="">Pilih..</option>
                                <option value="Alat">Alat</option>
                                <option value="Ruangan">Ruangan</option>        
                            </select>
                        </div>
                        <div class="input-group">Nama alat/ruangan</div>
                        <div>
                            <input type="text" class="input" name="nama" placeholder="masukkan nama alat/ruangan" required> 
                        </div>
                        <div class="input-group">Tanggal peminjaman</div>
                        <div>
                            <input type="date" class="input" name="tgl_pinjam" placeholder="masukkan tanggal hari ini" required> sampai
                            <input type="date" class="input" name="tgl_kembali" placeholder="masukkan tanggal pengembalian" required> 
                        </div><br>
                        <div>
                            <center><input type="submit" name="submit_anggota" value="Pesan Sekarang"></center>
                        </div>
                    </fieldset>
                </form>
                <a class="close" href="#close"></a>
              </div>

            <!-- end pemesanan-->
            <div class="col-lg-5 iphone-wrap">
              <img src="images/logo/logo2.png" alt="Image" class="phone-1" data-aos="fade-right">
              <img src="images/logo/logo1.png" alt="Image" class="phone-2" data-aos="fade-right" data-aos-delay="200">
            </div>
          </div>
        </div>
      </div>
    </div>
   </section><br><br><!-- End Hero -->
 <!-- <div class="container" style="background-color: rgb(159, 223, 243)"> -->
  <main id="main">
    <!-- ======= Home Section ======= -->
      <div class="container">
        <section class="section">
            <div class="row align-items-center">
                <div class="col-md-6 mr-auto">
                    <h2 class="mb-4">Sejarah Singkat Del Robotic</h2>
                    <p class="mb-4" style="text-align:justify;color:black;">
                      <?php $file_name = 'text/sejarah.txt';
                        $content = file_get_contents($file_name);
                        echo($content);?>
                      </p>
                    <!-- <p><a href="#" class="btn btn-primary">Download Now</a></p> -->
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <img src="images/DSC_1064.jpg" alt="Image" class="img-fluid">
                </div>
            </div><br><br>
            <h2 class="mb-4">Visi Misi</h2>
              <div class="row">
                <div class="col-md-8 mr-auto">
                  <p style="text-align:justify;color:black;">
                    <?php $file_name = 'text/visimisi.txt';
                      $content = file_get_contents($file_name);
                      echo($content);?>
                  </p>
            <div class="row mb-5">
              <div class="col-md-6">
                <figure><img src="images/DSC_1063.jpg" alt="" class="img-fluid">
                  <figcaption style="text-align:justify;"><b><center> Ketua Klub Robotic Del 2019/2020 mengikuti kompetisi di Universitas Dian Nuswantoro yang bertempat di Semarang</center></b></figcaption>
                </figure>
              </div>
              <div class="col-md-6">
                <figure><img src="images/DSC_1047.jpg" alt="" class="img-fluid">
                  <figcaption><strong><center>Proses persiapan menampilkan robot</center></strong></figcaption>
                </figure>
              </div>
            </div>
            <blockquote>
              <p style="text-align:justify;color:black;">
                <?php $file_name = 'text/penjelasan.txt';
                  $content = file_get_contents($file_name);
                  echo($content);?>
              </p>
            </blockquote>
            <div class="pt-5"></div>
          </div>
          <div class="col-md-4 sidebar">
            <div class="sidebar-box" style="background:silver;">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                    <img src="images/del.png" style="width:280px; height:150px;"><br><br>
                    <center><a href="https://www.del.ac.id/?page_id=136" class="btn btn-primary">UKM IT Del</a></p></center>
                </div>
              </form>
            </div>
            <div class="sidebar-box" style="background:#6699cc;">
              <div class="categories">
                <h3><strong>Produk</strong></h3>
                <div class="slider">
                  <figure>
                    <div class="slide"><img src="images/DSC_0949.jpg"></div>
                    <div class="slide"><img src="images/DSC_0988.jpg"></div>
                    <div class="slide"><img src="images/DSC_0979.jpg"></div>
                    <div class="slide"><img src="images/DSC_1051.jpg" alt=""></div>
                  </figure>
                </div><center>
              </div>
            </div>
            <div class="sidebar-box" style="background:#996699;">
            <?php
              require_once('database/koneksi.php');
            ?>
            <?php
              $kegiatan = mysqli_query($koneksi, "SELECT * FROM kegiatan ORDER BY id_kegiatan LIMIT 1");
              while($p = mysqli_fetch_array($kegiatan)){ ?>
              <center>
                <a href="kegiatan.php?>"><img src="<?php echo 'admin/img/kegiatan/'.$p['gambar']; ?>" width="250" height="170"></a><br><br>
                <h3 style="color:white;"><?=$p['judul_kegiatan']?></h3>
                <p style="color:white;"><?=$p['deskripsi']?></p>
              </center><?php }?>
            </div>
            <div class="sidebar-box" style="background:#8FBC8F; ">
              <h3>Tanggapan tentang Robotic</h3>
              <p style="text-align:justify;color:black;">
                <?php $file_name = 'text/quotes.txt';
                  $content = file_get_contents($file_name);
                  echo($content);
                  ?>
              </p>
              <p style="text-align:justify;color:black;"> Dikutip dari <br>
                <a style="text-align:justify;color:black;"href="https://netz.id/news/2017/05/12/00416/1008120517/tips-agar-tenaga-manusia-tak-tergantikan-robot">
                  https://netz.id/news/2017/05/12/00416/1008120517/tips-agar-tenaga-manusia-tak-tergantikan-robot</a>
              </p>
            </div>
          </div>
        </div>
      </div>
 </div> 
  <?php
    require_once('database/koneksi.php');
  ?>
    <div class="col-md-12" style="background-color: silver">
      <div class="container"> 
        <div class="row justify-content-center text-center mb-5" data-aos="fade">
          <div class="col-md-12 mb-12"><br>
            <img src="images/notice/papan_pengumuman.png" alt="Image" class="img-fluid">
          </div>
        </div>
        <?php
	        $pengumuman = mysqli_query($koneksi, "SELECT * FROM pengumuman ORDER BY id_pengumuman LIMIT 2");
  	      while($p = mysqli_fetch_array($pengumuman)){ ?>
        
          <div class="col-md-12">
            <div class="col-md 8">
              <div class="step">
                <div class="content_box"><a href="pengumuman.php?id=<?=$p['id_pengumuman']?>">
                  <p style="color:black;float:right;"><?= $p['waktu']?></p></a>
                  <h3><a style="color:black;" href="pengumuman.php?id=<?=$p['id_pengumuman']?>"> <?= $p['judul']?></h3>
                  <p style="text-align:justify"><?= $p['deskripsi']?></p>
                  <div class="clearfix"></div>
		      		  </div>
              </div>
            </div>
          </div><br>
        <?php }?>
        <div>
          <div class="feature-1 text-center">
            <p data-aos="fade-down" data-aos-delay="200" data-aos-offset="-500"><br>
              <a href="pengumuman_anggota.php" class="btn btn-outline-white" style="color:black;">Lebih Banyak Pengumuman</a>
            </p>
          </div>
        </div><br>
      </div>
    </section>
  </div>
 
  <div class="col-md-12" style="background-color: lightblue">
    <section class="section">
      <?php
        $produk = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY id_produk LIMIT 1");
        while($p = mysqli_fetch_array($produk)){
      ?>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8 mr-auto"><a href="produk.php?id=<?=$p['id_produk']?>">
            <h2 class="mb-4"><a style="color:black" href="produk.php?id=<?=$p['id_produk']?>"> <?= $p['nama_produk']?></h2></a>
            <p class="mb-4" style="text-align:justify;color:black;"><?= $p['deskripsi']?></p>
          </div>
          <div class="col-md-4" data-aos="fade-left">
            <img src="<?php echo 'admin/img/produk/'.$p['gambar']; ?>" width="500" height="500" alt="Image" class="img-fluid">
          </div>
        </div>
      </div><?php } ?>
      <p><center><a href="produk_anggota.php" class="btn btn-primary">Semua Produk</a></center></p>
    </section>
    
      <!-- ======= Testimonials Section ======= -->
      <section class="section border-top border-bottom" style="background-color: #F8F8FF;">
        <div class="row justify-content-center text-center mb-6">
          <div class="col-md-4">
            <h2 class="section-heading">Saran atau Komentar User</h2><br>
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
          <div class="feature-1 text-center" >
            <p data-aos="fade-down" data-aos-delay="200" data-aos-offset="-500"><br>
              <a href="about_us_anggota.php" style="background-color: blue;" class="btn btn-outline-white">Tambahkan Jawabanmu Sekarang</a>
            </p><br>
        </div>
      </section><!-- End Testimonials Section -->
  </div>

    <!--footer-->
      <?php
          include 'commons/footer_anggota.php';
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

