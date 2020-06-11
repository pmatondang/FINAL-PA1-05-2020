<?php
    include 'commons/header.php';
        require_once('database/connection.php');
        $upload_dir = 'img/kegiatan/';

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM kegiatan WHERE id_kegiatan=".$id;
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
            }else {
                $errorMsg = 'Tidak dapat melihat data';
            }
        }

        if(isset($_POST['Submit'])){
            $judul = $_POST['judul_kegiatan'];
            $deskripsi = $_POST['deskripsi'];
            $kategori = $_POST['kategori'];
            $date = $_POST['date'];
            $imgName = $_FILES['image']['name'];
            $imgTmp = $_FILES['image']['tmp_name'];
            $imgSize = $_FILES['image']['size'];
                if($imgName){
                    $imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));
                    $allowExt  = array('jpeg', 'jpg', 'png', 'gif');
                    $userPic = time().'_'.rand(1000,9999).'.'.$imgExt;
                    if(in_array($imgExt, $allowExt)){
                        if($imgSize < 5000000){
                            unlink($upload_dir.$row['gambar']);
                            move_uploaded_file($imgTmp ,$upload_dir.$userPic);
                        }else{
                            $errorMsg = 'Gambar terlalu besar';
                        }
                    }else{
                        $errorMsg = 'Tolong pilih gambar yang valid';
                    }
                } else{
                    $userPic = $row['gambar'];
                }

                if(!isset($errorMsg)){
                    $sql = "UPDATE kegiatan SET judul_kegiatan = '".$judul."',	deskripsi = '".$deskripsi."', kategori = '".$kategori."', date = '".$date."', gambar = '".$userPic."' WHERE id_kegiatan=".$id;
                    $result = mysqli_query($conn, $sql);
                    if($result){
                        echo "<script>alert('Kegiatan $judul berhasil diubah!'); window.location = 'kegiatan.php'</script>";	
                    }else{
                        $errorMsg = 'Error '.mysqli_error($conn);
                    }
                }
            }
?>

<!DOCTYPE html>
<html>
    <head>  
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
    </head>
        
    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Begin Page Content -->
            <div class="container-fluid" style="color:black">
                <!-- Page Heading -->
                <h1 style="color:black" class="h3 mb-2 text-gray-800">&emsp;<span class="fas fa-fw fa-briefcase"></span>&nbsp;Edit Kegiatan</h1>
                <p class="mb-12"></p>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Kegiatan</h6>
                    </div>
                    <div class="card-body">
                        <div class="table">
                            <div class="row justify-content-center">
                                <div class="col-md-12">                
                                    <div class="card-body">
                                        <form class="" action="" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="name">Judul Kegiatan</label>
                                                <input style="color:black;" type="text" class="form-control" name="judul_kegiatan"  value="<?php echo $row['judul_kegiatan']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="contact">Tanggal</label>
                                                <input style="color:black;" type="text" class="form-control" name="date" value="<?php echo $row['date']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="contact">Deskripsi</label>
                                                <textarea name="deskripsi" class="form-control" cols="60%" rows="10" style="color:black;text-align:justify;" required><?php echo $row['deskripsi']; ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="contact">Kategori</label>
                                                <input style="color:black;" type="text" class="form-control" name="kategori" value="<?php echo $row['kategori']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="image">Pilih Gambar</label>
                                            <div class="col-md-4">
                                                <img src="<?php echo $upload_dir.$row['gambar'] ?>" width="100%"><br><br>
                                                <input type="file" class="form-control" name="image" value="">
                                            </div><br><br>
                                            <div class="form-group">
                                                <button type="submit" name="Submit" class="btn btn-primary waves">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div> 
        <?php
            include 'commons/footer.php'
        ?>
        
        <script src="js/bootstrap.min.js" charset="utf-8"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
    
    </body>
</html>
