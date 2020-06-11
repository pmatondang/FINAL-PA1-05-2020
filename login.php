<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="assets/css/gayaa.css">
    <title>Del Robotic Club</title>
    <?php
        include 'commons/header.php';
    ?>
    <style>
        #login {
        box-shadow: 0 0 25px black,  
                    0 1px 5px rgba(0, 0, 0, 0.2),
                    0 3px 0 black,
                    0 4px 0 rgba(0, 0, 0, .2),
                    0 6px 0 blue,  
                    0 7px 0 rgba(0, 0, 0, .2);
        }
        #login {
            padding: 30px;
            margin-top: 150px;
            margin-left: 200px;
            z-index: -1;
            background: transparant;
            width: 500px;
            left: 47%;
        }
        #login:before {
            content: '';
            position: absolute;
            z-index: -1;
            border: 5px dashed pink;
            top: 5px;
            bottom: 5px;
            left: 5px;
            right: 5px;
            box-shadow: 0 0 0;
        }
        h2 {
            text-shadow: 3px 3px 0 rgba(255, 255, 255, .7), 0px 5px 0 rgba(0, 0, 0, .5);
            text-transform: uppercase;
            text-align: center;
            color: black;
            letter-spacing: 4px;
            font: normal 50px/1 Verdana, Helvetica;
            position: relative;
        }
        h2:after,h2:before {
            background-color: #777;
            height: 1px;
            position: absolute;
            top: 15px;
            width: 120px;   
        }
        h2:after {      
            right: 0;
        }
        h2:before {
            background-image: linear-gradient(right, #777, black);
            left: 0;
        }
        #login input[type="submit"] {
            display: block;
            font-size: 18px;
            font-weight: bold;
            border: 0;
            width: 100px;
            text-shadow: 0px 1px 0px rbga(255, 255, 255, 1);
            background-color: grey;
            border-radius: 5px;
            box-shadow: 4px 5px 10px rgba(0, 0, 0, 0.3);
        }
        .input{
            width: 350px;
            height: 40px;
            margin: 3px;
            padding-left: 10px;
            font-family: garamond;
        }
        .span{
            margin-left: 15px;
            padding-right: 12px;
        }
        .img-logo{
            height: 200px;
            width: 220px;
            padding-right: 10px;
            margin: 20px 110px;
        }
        #submit{
            height: 40px; 
            color: black;
            margin-left: 150px;
        }
        /* registrasi */
        .img-reg{
            height: 100px;
            width: 100px;
            padding-right: 10px;
            margin: 20px 110px;
        }
        #regis{
        box-shadow: 0 0px 30px black,  
                    0 1px 1px rgba(0, 0, 0, 0.2),
                    0 3px 0 black,
                    0 4px 0 rgba(0, 0, 0, .2),
                    0 6px 0 pink,  
                    0 7px 0 rgba(0, 0, 0, .2);
        }
        #regis{
            padding: 30px;
            margin-top: 150px;
            margin-left: 250px;
            z-index: 0;
            background: transparant;
            width: 600px;
            left: 47%;
        }
        #regis input[type="submit"] {
            display: block;
            font-size: 18px;
            font-weight: bold;
            border: 0;
            width: 100px;
            text-shadow: 3px 4px 4px rbga(300, 255, 255, 5);
            background-color: silver;
            border-radius: 5px;
            box-shadow: 4px 5px 10px rgba(3, 3, 8, 0.3);
        }
        h4{
            text-shadow: 2px 2px 0 rgba(255, 255, 255, .7), 0px 4px 0 rgba(0, 0, 0, .5);
            text-transform: uppercase;
            text-align: center;
            color: black;
            letter-spacing: 3px;
            font: normal 30px/1 Verdana, Helvetica;
            position: relative; 
        }
        .submit_daftar{
            height: 40px; 
            color: black;
            margin-left: 222px;
        }
        #input_reg{
            width: 2000px;
        }
    </style>
</head>

<body class="body">
    <!-- ======= Hero Section ======= -->
    <section class="hero-section">
        <table width="100%" border="0">
            <tr>
                <td>
                    <div>
                        <form id="login" action="login_proses.php" method="POST">
                            <img src = "images/logo/logo_user.jpg" class="img-logo">
                            <h2><b>Login Here</b></h2><br><br>
                            <fieldset id="inputs" style="color: black;">
                                <div class="input-group">
                                    <span class="glyphicon glyphicon-user span"></span>
                                    <input type="text" class="input" name="username" placeholder="Username" required>
                                </div><br>
                                <div class="input-group">
                                    <span class="glyphicon glyphicon-lock span"></span>
                                    <input type="password" class="input" name="password" placeholder="Password" required>
                                </div><br>
                            </fieldset>
                            <fieldset id="actions">
                                <input type="submit" id="submit" value="Login">
                            </fieldset>
                        </form>
                    </div>
                </td>

                <td>
            		<form method="POST" action="registrasi_proses.php" id="regis">
                        <h4><b>Registrasi akun to be a member of DRC</b></h4>
                        <fieldset id="inputs" style="color: black;">
                            <div class="input-group">Nama lengkap 
    	    	                <br><input type="text" id="input_reg" class="input" name="nama_lengkap" placeholder="your name" required>
                            </div>
                            <div class="input-group">Jenis Kelamin
                                <span class="glyphicon glyphicon-user span"></span>
                                <select id="input_reg" name="gender" required>
                                    <option value="-">- Pilih Gender -</option>
                                    <option value="Laki-laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="input-group">Prodi
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
                            <div class="input-group">Email
                                <span class="glyphicon glyphicon-user span"></span>
                                <input type="email" id="input_reg" class="input" name="email" placeholder="your email" required> 
                            </div>
                            <div class="input-group">Nomor HP/WA
                                <span class="glyphicon glyphicon-user span"></span>
                                <input type="number" id="input_reg" class="input" name="no_hp" placeholder="your phone number" required> 
                            </div>
                            <div class="input-group">Username
                                <span class="glyphicon glyphicon-user span"></span>
                                <input type="text" id="input_reg" class="input" name="username" placeholder="username" required>  
                            </div>
                            <div class="input-group">Password
                                <span class="glyphicon glyphicon-lock span"></span>
                                    <input type="password" id="input_reg" class="input" name="password" placeholder="password" required>
                            </div>
                            <div class="input-group">Confirm Password
                                <span class="glyphicon glyphicon-lock span"></span>
                                    <input type="password" id="input_reg" class="input" name="konfirmasi_password" placeholder="konfirmasi password" required>
                            </div>
                        </fieldset><br>
                        <fieldset>
                            <input type="submit" class="submit_daftar" name="submit_daftar" value="DAFTAR">
                        </fieldset>
                    </form>
                </td>
            </tr>
        </table>
    </section><!-- End Hero -->

    <!--footer-->
    <?php 
        include 'commons/footer_login.php';
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