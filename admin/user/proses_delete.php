<?php
  include "../../config.php";

  $id_user = $_GET["id_user"];
  
  $query = "DELETE FROM login WHERE id_user='$id_user' ";
  $hasil_query = mysqli_query($conn, $query);

  if(!$hasil_query) {
    die ("Gagal menghapus data: ".mysqli_errno($conn).
     " - ".mysqli_error($conn));
  } else {
    echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
  }
?>