<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url('vendors/font-awesome/css/font-awesome.min.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('vendors/css/vendor.bundle.base.css'); ?>">
  <link rel="stylesheet" href="<?= base_url('vendors/mdi/css/materialdesignicons.min.css'); ?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?= base_url('vendors/datatables.net-bs4/dataTables.bootstrap4.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('js/jsa/select.dataTables.min.css'); ?>">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet"href="<?= base_url('css/stylea.css'); ?>">
  <!-- endinject -->
  <!--   <link rel="shortcut icon" href="images/logo-mini.svg" /> -->
  <link rel="shortcut icon" href="<?= base_url('images/logo aku-nobg-notext.png'); ?>">
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

</head>

<body>

<button onclick="topFunction()" id="myBtn" title="Go to top">Back To Top</button>
<script>
// fungsi ketika user men scroll ke bawah 40 px maka tombol back to top akan muncul
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
// fungsi ketika user meng klik tombol back to top maka halaman akan menscroll ke atas
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="<?php echo site_url('Dashboard');?>"><img src="<?= base_url('images/logo aku-nobg-tex.png'); ?>" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="<?php echo site_url('Dashboard');?>"><img src="<?= base_url('images/logo aku-nobg-notext.png'); ?>" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="fa fa-navicon"></span>
        </button>
        
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a href="<?php echo site_url('Login/logout');?>" class="dropdown-item" onclick="return confirm('Yakin ingin logout?')">
                <i class="fa fa-power-off text-primary"></i>Logout
            </a>
          </li>
        </ul>

        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type a="button" data-toggle="offcanvas">
          <span class="fa fa-navicon"></span>
        </button>
      </div>
    </nav>

    <!-- PANEL MENU KIRI [START] -->
    <div class="container-fluid page-body-wrapper">
      <!--  partial:partials/_sidebar.html  --> 
      <nav class="sidebar sidebar-offcanvas" id="sidebar" >
        <ul class="nav">
    
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Dashboard');?>">
              <iconify-icon icon="heroicons:window" class="menu-icon"></iconify-icon>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
                   
          
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Job');?>">
              <iconify-icon icon="heroicons:list-bullet" style="font-size: 18px; border: 2px solid; border-radius: 5px; padding: 0.5px;" class="menu-icon"></iconify-icon>
              <span class="menu-title">Data Lowongan</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Pendaftar');?>">
              <iconify-icon icon="fluent:people-team-24-filled" class="menu-icon"></iconify-icon>
              <span class="menu-title">Data Pendaftar</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Pengguna');?>">
              <iconify-icon icon="fluent:people-edit-24-filled" class="menu-icon"></iconify-icon>
              <span class="menu-title">Data Admin</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Outlet');?>">
              <iconify-icon icon="fa-solid:store" style="font-size: 20px;" class="menu-icon"></iconify-icon>
              <span class="menu-title">Data Outlet</span>
            </a>
          </li>
          
        </ul>
      </nav>
    <!-- PANEL MENU KIRI [END] -->

    <!-- PANEL UTAMA [START] -->
      <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Selamat Datang, <?php echo $nama; ?></h3>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 mb-4 stretch-card transparent">
              <div class="card card-tale">
                <div class="card-body text-center">
                  <a href="<?php echo site_url('Job');?>" style="color: #555555; text-decoration: none;">
                    <p class="fs-20 mb-4">DATA LOWONGAN</p>
                    <p class="fs-30 mb-2"><?php echo $lowongan; ?></p>
                    <p class="fs-15 mb-6">Posisi Pekerjaan</p>
                  </a>
                </div>
              </div>
            </div>
          
            <div class="col-md-4 mb-4 stretch-card transparent">
              <div class="card card-tale">
                <div class="card-body text-center">
                  <a href="<?php echo site_url('Pendaftar');?>" style="color: #555555; text-decoration: none;">
                    <p class="fs-20 mb-4">DATA PENDAFTAR</p>
                    <p class="fs-30 mb-2"><?php echo $pelamar; ?></p>
                    <p class="fs-15 mb-6">Pendaftar</p>
                  </a>
                </div>
              </div>
            </div>
          
            <div class="col-md-4 mb-4 stretch-card transparent">
              <div class="card card-tale">                   
                <div class="card-body text-center">
                  <a href="<?php echo site_url('Pengguna');?>" style="color: #555555; text-decoration: none;">
                    <p class="fs-20 mb-4">DATA ADMIN</p>
                    <p class="fs-30 mb-2"><?php echo $admin; ?></p>
                    <p class="fs-15 mb-6">Admin</p>
                  </a>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-4 stretch-card transparent">
              <div class="card card-tale">
                <div class="card-body text-center">
                  <a href="<?php echo site_url('Outlet');?>" style="color: #555555; text-decoration: none;">
                    <p class="fs-20 mb-4">DATA OUTLET</p>
                    <p class="fs-30 mb-2"><?php echo $outlet; ?></p>
                    <p class="fs-15 mb-6">Outlet</p>
                  </a>
                </div>
              </div>
            </div>
          </div>
          
        </div>

        <!-- content-wrapper ends -->

        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-flex justify-content-center">
            <span class="text-muted text-center">
              &copy; <script> document.write(new Date().getFullYear()) </script> PT. Loer Group Jaya. All rights reserved.
            </span>
          </div>
        </footer>        
        
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?php echo base_url().'vendors/js/vendor.bundle.base.js'?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?php echo base_url().'vendors/chart.js/Chart.min.js'?>"></script>
  <script src="<?php echo base_url().'vendors/datatables.net/jquery.dataTables.js'?>"></script>
  <script src="<?php echo base_url().'vendors/datatables.net-bs4/dataTables.bootstrap4.js'?>"></script>
  <script src="<?php echo base_url().'js/jsa/dataTables.select.min.js'?>"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo base_url().'js/jsa/off-canvas.js'?>"></script>
  <script src="<?php echo base_url().'js/jsa/hoverable-collapse.js'?>"></script>
  <script src="<?php echo base_url().'js/jsa/template.js'?>"></script>
  <script src="<?php echo base_url().'js/jsa/settings.js'?>"></script>
  <script src="<?php echo base_url().'js/jsa/todolist.js'?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url().'js/jsa/dashboard.js'?>"></script>
  <script src="<?php echo base_url().'js/jsa/Chart.roundedBarCharts.js'?>"></script>
  <!-- End custom js for this page-->
</body>

</html>
