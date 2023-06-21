<?php
  include "../../config.php";

  $username = $_GET["username"];
  
  $query = "DELETE FROM login WHERE username='$username' ";
  $hasil_query = mysqli_query($conn, $query);

  if(!$hasil_query) {
    die ("Gagal menghapus data: ".mysqli_errno($conn).
     " - ".mysqli_error($conn));
  } else {
    echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
  }
?>