<?php
  include "../../config.php";
  $query = mysqli_query($conn, "SELECT * FROM film JOIN genre ON film.id_genre=genre.id_genre");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Film</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../app/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../app/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../app/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../app/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="../../app/plugins/bootstrap/css/bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../app/dist/css/adminlte.min.css">
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
            <h1 class="m-0">Data Film</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item active">Data Film</li>
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
                <a href="tambah.php" type="button" class="btn bg-gradient-success">
                  Tambah Data
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="filmTable" class="table table-bordered table-striped">
                  <thead>
                    <tr class="text-center">
                      <th width="20px">No</th>
                      <th>Judul</th>
                      <th>Tahun</th>
                      <th>Durasi</th>
                      <th>Sinopsis</th>
                      <th>Trailer</th>
                      <th>Genre</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (mysqli_num_rows($query)>0) {?>
                    <?php
                    $no = 1;
                    while ($data = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                      <td class="text-center"><?= $no?></td>
                      <td><?= $data['judul_film']?></td>
                      <td><?= $data['tahun_rilis']?></td>
                      <td><?= $data['durasi']?></td>
                      <td><?= substr($data['sinopsis'], 0, 100)?></td>
                      <td><a href="<?= $data['link_trailer']?>"><?= substr($data['link_trailer'], 30)?></a></td>
                      <td><?= $data['nama_genre']?></td>
                      <td width="120px" class="text-center">
                          <a href="edit.php?id_film=<?= $data['id_film']?>" class="btn btn-primary"><i class="far fa-edit"></i></a>
                          <a href="proses_delete.php?id_film=<?= $data['id_film']?>" onclick="return confirm('Yakin Hapus data?')" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                      </td>
                      </tr>
                      <?php $no++; } ?>
                      <?php } ?>
                  </tbody>
                  <tfoot>
                    <tr class="text-center">
                      <th>No</th>
                      <th>Judul</th>
                      <th>Tahun</th>
                      <th>Durasi</th>
                      <th>Sinopsis</th>
                      <th>Trailer</th>
                      <th>Genre</th>
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
  <!-- /.content-wrapper -->

    <!-- Footer -->
    <?php include '../../include/footer.php'?>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../app/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../../app/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables JS -->
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
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
  <!-- AdminLTE -->
  <script src="../../app/dist/js/adminlte.min.js"></script>

  <script>
  $(function () {
    $("#filmTable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#filmTable_wrapper .col-md-6:eq(0)');
  });
  </script>
</body>

</html>