<?php
    include "../../config.php";
    $query = mysqli_query($conn, "SELECT * FROM detail_aktor");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Peran</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../app/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../app/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../app/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../app/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../app/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../app/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../app/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../app/plugins/summernote/summernote-bs4.min.css">
  <!-- Multiple -->
  <link rel="stylesheet" href="../../app/dist/css/select2.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed dark-mode">
<div class="wrapper">

  <!-- Preloader -->
  <?php include '../../include/preloader.php'?>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light dark-mode">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include '../../include/sidebar.php'?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Data Peran</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="index.php">Data Peran</a></li>
              <li class="breadcrumb-item active">Tambah Data Peran</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <form action="proses.php" method="POST" enctype="multipart/form-data">
          <div class="col-12">
            <div class="card">
              <!-- <div class="card-header">
                  Tambah Data
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                    <label for="id_film">Judul Film</label>
                    <select class="form-control select2" style="width: 100%;" name="id_film">
                    <?php
                        $data_film = mysqli_query($conn, "SELECT * FROM film ORDER BY judul_film ASC") or die (mysqli_error($conn));
                        while($film = mysqli_fetch_array($data_film)) {
                            echo '<option value="' .$film['id_film']. '">' .$film['judul_film'].'</option>';                            
                        } ?>
              </select>
                    </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="" class="col-form-label">Nama aktor</label>
                    <select class="form-control select2 multiple-select" multiple style="width: 100%;" name="aktor[]">
                    <?php
                    $query = "SELECT * FROM aktor ORDER BY nama_aktor ASC";
                    $query_run = mysqli_query($conn, $query);
                    if(mysqli_num_rows($query_run) > 0){
                      foreach($query_run as $row){
                        echo $row['nama_aktor'];?>
                        <option value="<?= $row['id_aktor'];?>"><?= $row['nama_aktor'];?></option>
                        <?php
                      }
                    }
                    ?>
                    </select>
                  </div>
                </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-1">
                        <a href="index.php" type="button" class="btn btn-secondary mt-2">Batal</a>
                        <button type="submit" class="btn btn-primary mt-2" name="simpan">Tambah</button>
                    </div>
                </div>
            </div>
            <!-- /.row -->
          </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </form>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  <?php include '../../include/footer.php'?>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../app/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../app/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../app/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../app/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../app/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../app/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../app/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../app/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../app/plugins/moment/moment.min.js"></script>
<script src="../../app/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../app/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../app/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../app/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../app/dist/js/adminlte.js"></script>
<!-- multiple -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
  $(".multiple-select").select2({
  // maximumSelectionLength: 2
  });
</script>
</body>
</html>