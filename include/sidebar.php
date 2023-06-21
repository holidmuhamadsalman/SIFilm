<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../app/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../app/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../app/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../app/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../app/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../app/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../app/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../app/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed dark-mode">
<div class="wrapper">

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <a href="index3.html" class="brand-link">
      <img src="../../app/dist/img/SiFilm.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .6">
      <br>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <?php
          $sql = mysqli_query($conn,"SELECT * FROM login") or die(mysqli_error($con));
          $data = mysqli_fetch_array($sql);
        ?>
        <div class="image">
          <?php if(($data['foto_user']) == NULL){?>
            <?php echo "<img src=../../include/img-user/avatar5.png class=img-circle elevation-2 alt=User Image>";
          } else {
           echo "<img src=../../include/img-user/$data[foto_user] class=img-circle elevation-2 alt=User Image>";
          } ?>
        </div>
        <div class="info">
          <a class="d-block"><?=$data['nama']?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="./../index.php" class="nav nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
                <a href="../user/index.php" class="nav nav-link">
                  <i class="far fa-user nav-icon"></i>
                  <p>Data User</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="../film/index.php" class="nav-link">
                  <i class="fas fa-film nav-icon"></i>
                  <p>Data Film</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="../aktor/index.php" class="nav-link">
                  <i class="fas fa-user-secret nav-icon"></i>
                  <p>Data Aktor</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="../sutradara/index.php" class="nav-link">
                  <i class="fas fa-user nav-icon"></i>
                  <p>Data Sutradara</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="../peran/index.php" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Data Peran</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="../produksi/index.php" class="nav-link">
                  <i class="fas fa-video nav-icon"></i>
                  <p>Data Produksi</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="../genre/index.php" class="nav-link">
                  <i class="fas fa-theater-masks nav-icon"></i>
                  <p>Data Genre</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="../foto/index.php" class="nav-link">
                  <i class="fas fa-images nav-icon"></i>
                  <p>Data Foto</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="../rating/index.php" class="nav-link">
                  <i class="fas fa-splotch nav-icon"></i>
                  <p>Data Rating</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="../../logout.php" class="nav-link bg-black">
                  <i class="fas fa-sign-out-alt nav-icon"></i>
                  <p>Log Out</p>
                </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



<!-- jQuery -->
<script src="../app/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../app/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../app/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../app/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../app/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../app/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../app/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../app/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../app/plugins/moment/moment.min.js"></script>
<script src="../app/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../app/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../app/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../app/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../app/dist/js/adminlte.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

</body>
</html>