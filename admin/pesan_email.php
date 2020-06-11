<!DOCTYPE html>
<html lang="en">
    <head>
    <?php 
        include 'commons/header.php';
    ?>
    </head>

    <body id="page-top">
        <div id="wrapper">
            <div class="container-fluid">
                <h1 class="h3 mb-2 text-gray-800">Tabel Pemesanan</h1>
                <p class="mb-4"></p>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><span class="fas fa-fw fa-clipboard-list"></span>Data Pemesanan</h6>
                    </div>
                    <?php
                        include 'database/koneksi.php';
                    ?>
                    <?php
                        $id_pesanan=mysqli_real_escape_string($koneksi, $_GET['id']);
                        $det=mysqli_query($koneksi, "SELECT * FROM pemesanan WHERE id_pemesanan='$id_pesanan'")or die(mysql_error());
                        while($d=mysqli_fetch_array($det)){
                    ?>
                    <div class=""><br>
                        <div class="col-md-12 col-md-offset-3 container" style="color:black;">
                            <h1><span class="break"></span><b><u> Form Pengiriman Pesan</u></b></h1><br><br>
                            <div>
                                <label style="font-size:20px;" for="focusedInput"><strong> Nama pengirim  </strong></label>
                                <input style="color:black;width:100%;" id="name" class="form-control" placeholder=" Nama anda ..." required>

                            </div><hr>
                            <div class="control-group">
                                <label class="control-label" style="font-size:20px;" for="focusedInput"><strong> Tujuan email </strong></label>
                                <input style="color:black;width:100%;" id="email" class="form-control" value="<?php echo $d['email'] ?>" required>
                            </div><hr>
                            <div class="control-group">
                                <label class="control-label" style="font-size:20px;" for="focusedInput"><strong> Jenis  </strong></label>
                                <input style="color:black;width:100%;" id="subject" class="form-control" value="<?php echo $d['jenis'] ?>" required>
                            </div><hr>
                            <div class="control-group">
                                <label class="control-label" style="font-size:20px;" for="focusedInput"><strong> Nama alat/ruangan  </strong></label>
                                <input style="color:black;width:100%;" id="subject" class="form-control" value="<?php echo $d['nama'] ?>" required>
                            </div><hr>
                            <div class="control-group">
                                <label class="control-label" style="font-size:20px;" for="focusedInput"><strong> Subjek  </strong></label>
                                <input style="color:black;width:100%;" id="subject" class="form-control" placeholder=" Subjek email ..." required>
                            </div><hr>
                            <div class="control-group">
                                <label class="control-label" style="font-size:20px;" for="focusedInput"><strong> Isi pesan </strong></label>
                                <textarea style="color:black;width:100%;border-box:2px black;" rows="4" id="body" placeholder=" Isi pesan yang ingin anda kirim ..." class="form-control" required></textarea>
                            </div><br><br>
                            <input style="float:left;color:#fff;width:8%;" type="button" value="Kirim" onclick="kirimEmail()" class="btn btn-primary">
                        </div><br><br><br>
                    </div>
                    <?php } ?>
                </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            function kirimEmail()
            {
                console.log("sending...");
                var name = $("#name");
                var email = $("#email");
                var subject = $("#subject");
                var body = $("#body");
                
                if(tidakkosong(name) && tidakkosong(email) && tidakkosong(subject) && tidakkosong(body)){
                    console.log("selesai..");
                    $.ajax({
                        url:'kirimEmail.php',
                        method:'POST',
                        dataType:'json',
                        data : {
                            name : name.val(),
                            email : email.val(),
                            subject : subject.val(),
                            body : body.val()
                        }, success: function (response)
                        {
                            if(response.status == "sukses")
                            alert('Email anda telah terkirim..!');
                            else{
                                alert('Maaf, silahkan coba lagi');
                                console.log(response);
                            }
                        }
                    });
                }
            }

            function tidakkosong(caller){
                if(caller.val() == "")
                {
                    caller.css('border', '1px solid red');
                    return false;
                }
                else
                {
                    caller.css('border', '');
                    return true;
                }
            }
        </script>
        
        <?php
            include 'commons/footer.php';
        ?>

    </body>
</html>
