<?php
  include "../../config.php";

  $id_film = $_GET["id_film"];
  
  $query = "DELETE FROM film WHERE id_film='$id_film' ";
  $hasil_query = mysqli_query($conn, $query);

  if(!$hasil_query) {
    die ("Gagal menghapus data: ".mysqli_errno($conn).
     " - ".mysqli_error($conn));
  } else {
    echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
  }
?>