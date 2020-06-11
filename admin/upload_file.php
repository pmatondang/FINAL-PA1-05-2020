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
  <div id="wrapper">
    <div class="container-fluid">
      <h1 class="h3 mb-2 text-gray-800">Mengunggah File</h1>
        <p class="mb-4"></p>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data File</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <form class="form-inline" method="POST" action="upload.php" enctype="multipart/form-data">
                <input class="form-control" type="file" name="upload"/>
					      &emsp;<button type="submit" class="btn btn-success form-control" name="submit"><span class="glyphicon glyphicon-upload"></span> Upload</button>
                </form>
                <br/><br/>
                <div class="form-group">

                  <table id="example" style="width:100%;" border>
                    <thead>
                      <tr style="color:black;background-color:lightblue;">  
                        <td style="width:50px;"><b>No</b></td>
                        <td><b>Nama File</b></td>
                        <td style="width:400px;"><b>Aksi</b></td>
                      </tr>
                    </thead>
                    <tbody class="alert-success" style="color:black">
                      <?php
                      require 'database/konfig.php';
                        $row = $conn->query("SELECT * FROM `data` ORDER BY id_data DESC") or die(mysqli_error());
                        $no = 1;
                        while($fetch = $row->fetch_array()){
                      ?>
                      <tr>
                        <?php 
                        $name = explode('/', $fetch['file']);
                        ?>
                        <td style="text-align:center;"><?php echo $no++ ?></td>
                        <input type="hidden" value="<?php echo $fetch['id_data']?>">
                        <td><?php echo $fetch['name']?></td>
                        <td><a href="download.php?file=<?php echo $name[1]?>" class="btn btn-primary"><span class="fas fa-download fa-sm"></span></a>
                          <a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ 
                            location.href='hapus_file.php?id=<?php echo $fetch['id_data']; ?>' }" class="btn btn-danger">
                                        <span class="fas fa-trash fa-sm"></span></a>
                        </td>
                      </tr>
                      <?php
                        }
                      ?><hr>
                    </tbody><br>
                  </table>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
      <?php
        include 'commons/footer.php';
      ?>

    <!--Script Javascript-->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script>
    $(document).ready(function() {
      $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
        'colvis'
        ]
      } );
    } );
    </script>
  </body>
</html>