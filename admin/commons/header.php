<!DOCTYPE html>
<html lang="en">

<head>
    <link href="img/logo/logo.png" rel="icon">
  <link href="img/logo/logo.png" rel="apple-touch-icon">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.minn.css" rel="stylesheet">

</head>

<body id="page-top" style="background-color:#578EBE;">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-text mx-3"><b style="color:#fff"> Admin DRC <sup>IT Del</sup></b></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span style="color:#fff">Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <strong>
      <div class="sidebar-heading" style="color:#fff">
        Kelola Semua Data 
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="produk.php" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-file"></i>
          <span style="color:#fff">Produk</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="pengumuman.php" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-bell"></i>
          <span style="color:#fff">Pengumuman</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-list"></i>
          <span style="color:#fff">Aktivitas</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Toggle Aktivitas :</h6>
            <a class="collapse-item" href="kegiatan.php">Kegiatan</a>
            <a class="collapse-item" href="galery.php">Galery</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="pemesanan.php" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-fas fa-clipboard-list fa-2x text-gray-300"></i>
          <span style="color:#fff">Pemesanan Alat/Lab</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="upload_file.php" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-fas fa-upload fa-2x text-gray-300"></i>
          <span style="color:#fff">Mengunggah File</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="komentar.php" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-comments"></i>
          <span style="color:#fff">Komentar</span>
        </a>
      </li>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-user"></i>
          <span>Akun</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Data Akun :</h6>
            <a class="collapse-item" href="data_user.php"><i class="fas fa-fw fa-user"> User</i></a>
            <a class="collapse-item" href="data_anggota.php"><i class="fas fa-fw fa-user"> Anggota</i></a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="logout.php" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span style="color:#fff">Keluar</span>
        </a>
      </li>
      </strong>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column" style="background-color:lightblue;">
      <!-- Main Content -->
      <div id="content" style="background-color:lightblue;">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow">
          <ul class="navbar-nav ml-auto" style="background-color:lightblue;">
            <!-- Nav Item - Messages -->

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><strong style="color:black"> Del Robotic Club</strong></span>
                <img class="img-profile rounded-circle" src="img/logo.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php" data-toggle="" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Keluar
                </a>
              </div>
            </li>
          </ul>
        </nav>

    
        <!-- End of Topbar -->