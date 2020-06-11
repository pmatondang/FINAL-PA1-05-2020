<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/css/gaya.css">  
    <link href="images/logo/logo.png" rel="icon">
    <title>Download file</title>
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
          margin-right: 30px;
      }
    </style>
</head>

<body style="background-color: lightblue">
  <div class="form-group">
    <div id="wrapper">
      <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800" align="center">Tabel File Download</h1>
          <table id="example" class="display responsive nowrap container" style="width:90%" align="center" border="1">
            <thead>
            <tr>  
                <th style="width:40px;">No</th>
                <th>Nama File</th>
                <th width="500px;">Silahkan download disini</th>
              </tr>
            </thead>
            <tbody class="alert-success">
              <?php
                require 'database/konfig.php';
                $row = $conn->query("SELECT * FROM `data` ORDER BY id_data DESC") or die(mysqli_error());
                $no=1;
                while($fetch = $row->fetch_array()){
              ?>
              <tr>
                <?php 
                  $name = explode('/', $fetch['file']);
                ?>
                <td style="text-align:center;"><?php echo $no++ ?></td>
                <input type="hidden" value="<?php echo $fetch['id_data']?>">
                <td><?php echo $fetch['name']?></td>
                <td><a href="download.php?file=<?php echo $name[1]?>" class="btn btn-primary"><span class="glyphicon glyphicon-download"></span> Download</a>
              </tr>
              <?php
              }
              ?>
            </tbody>
          </table><br>
          <a style="color:black;" class="btn" href="dashboard_anggota.php" class="fas fa-fw fa-arrow-left">
            <span class="fa fa-sign-out-alt" style="margin-left:100px;"><button style="background-color:black;color:white;width:10%;height:50px;font-size:20px;cursor:pointer;"><b>Kembali</b></button></span><br><br>
		  </a>
      </div>
    </div>
  </div>


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