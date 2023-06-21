<?php
  $query = mysqli_query($conn, 
  "SELECT * FROM film 
  JOIN genre ON film.id_genre=genre.id_genre
  JOIN foto ON film.id_film=foto.id_film
  JOIN detail_aktor ON film.id_film=detail_aktor.id_film
  JOIN aktor ON detail_aktor.id_aktor=aktor.id_aktor
  JOIN detail_sutradara ON film.id_film=detail_sutradara.id_film
  JOIN sutradara ON detail_sutradara.id_sutradara=sutradara.id_sutradara");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Detail Film</title>

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
</head>
<body class="hold-transition sidebar-mini layout-fixed dark-mode">
<div class="wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- <div class="card-header">
                <a href="tambah.php" type="button" class="btn bg-gradient-success">
                  Tambah Data
                </a>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr class="text-center">
                      <th width="20px">No</th>
                      <th>Film</th>
                      <th>Cover</th>
                      <th>Tahun</th>
                      <th>Genre</th>
                      <th>Durasi</th>
                      <th>Sinopsis</th>
                      <th>Trailer</th>
                      <th>Sutradara</th>
                      <th>Aktor</th>
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
                      <td><img src="../include/img-db/<?= $data['foto'];?>" style="width: 100px;"></td>
                      <td><?= $data['tahun_rilis']?></td>
                      <td><?= $data['nama_genre']?></td>
                      <td><?= $data['durasi']?></td>
                      <td><?= substr($data['sinopsis'], 0, 100)?></td>
                      <td><a href="<?= $data['link_trailer']?>"><?= substr($data['link_trailer'], 0, 23)?></a></td>
                      <td><?= $data['nama_sutradara']?></td>
                      <td><?php 
                $aktor = '';
                foreach ($query as $row1) {
                  $aktor .= $row1['nama_aktor'].', ';
                }
                echo substr($aktor, 0, -2);
              ?>
                        </td>
                      <td width="120px" class="text-center">
                          <!-- <a href="edit.php?id_film=<?= $data['id_film']?>" class="btn btn-primary"><i class="far fa-edit"></i></a>
                          <a href="proses_delete.php?id_film=<?= $data['id_film']?>" onclick="return confirm('Yakin Hapus data?')" class="btn btn-danger"><i class="far fa-trash-alt"></i></a> -->
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
</body>
</html>