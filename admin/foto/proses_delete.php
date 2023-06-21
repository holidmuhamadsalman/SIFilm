<?php
  include "../../config.php";

  $id_foto = $_GET["id_foto"];

  // Query untuk mendapatkan informasi nama gambar dari tabel
  $query = "SELECT foto FROM foto WHERE id_foto = '$id_foto'";

  // Eksekusi query dan ambil hasilnya
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($result);
  $foto = $row['foto'];

  // Hapus data gambar dari tabel
  $query_hapus = "DELETE FROM foto WHERE id_foto = '$id_foto'";
  mysqli_query($conn, $query_hapus);

  // Hapus gambar dari direktori
  $path_gambar = '../../include/img-db/' . $foto;
  if (file_exists($path_gambar)) {
    unlink($path_gambar);
    echo "<script>alert('Data berhasil dihapus.');window.location='index.php';</script>";
  } else {
    echo "Gambar tidak ditemukan.";
  }
  
?>