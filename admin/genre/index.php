<?php include "../../config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data genre</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../app/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../app/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../app/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../app/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
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
      <!-- Navbar Search -->
      <li class="nav-item">
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
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
            <h1 class="m-0">Data Genre</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item active">Data Genre</li>
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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <button type="button" class="btn bg-gradient-success" data-bs-toggle="modal" data-bs-target="#modalTambah">Tambah Data</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="genreTable" class="table table-bordered table-striped">
                <thead>
                  <tr class="text-center">
                    <th width="20px">No</th>
                    <th>Nama Genre</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                  <tbody>
                    <?php
                      $genre = mysqli_query($conn,"SELECT * FROM genre");
                      $no = 1;
                      while ($data = mysqli_fetch_array($genre)):
                    ?>
                    <tr>
                      <td class="text-center"><?= $no?></td>
                      <td><?= $data['nama_genre']?></td>
                      <td width="300px" class="text-center">
                          <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $data['id_genre'] ?>"><i class="far fa-edit"></i></a>
                          <a href="proses_delete.php?id_genre=<?= $data['id_genre']; ?>" onclick="return confirm('Yakin Hapus data?')" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                      </td>
                      <!-- Start Modal Edit -->
                      <div class="modal fade bg-dark" id="modalEdit<?=$data["id_genre"]?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="modalEditLabel">Edit Data Genre</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="add_edit.php" method="POST">
                              <input type="hidden" name="id_genre" value="<?=$data['id_genre']?>">
                              <div class="modal-body">
                                <div class="mb-3">
                                  <label class="form-label">Nama Genre</label>
                                  <input type="text" class="form-control" name="nama_genre" value="<?= $data["nama_genre"];?>" required>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <!-- End Modal Edit -->
                    </tr>
                    <?php $no++; ?>
                    <?php endwhile;?>
                  </tbody>
                  <tfoot>
                    <tr class="text-center">
                      <th>No</th>
                      <th>Nama Genre</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <!-- Start Modal Tambah Data Genre-->
  <div class="modal fade bg-dark" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="modalTambahLabel">Tambah Data Genre</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="add_edit.php" method="POST">
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Nama Genre</label>
              <input type="text" class="form-control" id="nama_genre" name="nama_genre" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" id="simpan" name="simpan" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  <?php include '../../include/footer.php'?>

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
<!-- DataTables  & Plugins -->
<script src="../../app/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../app/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../app/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../app/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../app/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../app/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../app/plugins/jszip/jszip.min.js"></script>
<script src="../../app/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../app/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../app/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../app/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../app/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../app/dist/js/adminlte.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#genreTable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#genreTable_wrapper .col-md-6:eq(0)');
  });
</script>
</body>
</html>