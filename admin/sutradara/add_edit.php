<?php
include "../../config.php";

// Start proses tambah data
if (isset($_POST['simpan'])) {
    $simpan = mysqli_query($conn, "INSERT INTO sutradara (nama_sutradara) VALUES ('$_POST[nama_sutradara]') ");

    if ($simpan){
        echo "<script>alert('Data baru berhasil ditambahkan');window.location='index.php';</script>";
    }else {
        echo "<script>alert('Gagal menambahkan data baru');window.location='index.php';</script>";
    }
}
// End proses tambah data

// Start proses Edit data
if (isset($_POST['ubah'])) {
    $ubah = mysqli_query($conn, "UPDATE sutradara SET nama_sutradara='$_POST[nama_sutradara]' WHERE id_sutradara ='$_POST[id_sutradara]'");

    if ($ubah){
        echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
    }else {
        echo "<script>alert('Gagal mengubah data');window.location='index.php';</script>";
    }
}
// End proses Edit data
