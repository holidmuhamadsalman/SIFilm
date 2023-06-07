<?php
include "../../config.php";

// Start proses tambah data
if (isset($_POST['simpan'])) {
    $simpan = mysqli_query($conn, "INSERT INTO aktor (nama_aktor) VALUES ('$_POST[nama_aktor]') ");

    if ($simpan){
        echo "<script>alert('Data baru berhasil ditambahkan');window.location='index.php';</script>";
    }else {
        echo "<script>alert('Gagal menambahkan data baru');window.location='index.php';</script>";
    }
}
// End proses tambah data

// Start proses Edit data
if (isset($_POST['ubah'])) {
    $ubah = mysqli_query($conn, "UPDATE aktor SET nama_aktor='$_POST[nama_aktor]' WHERE id_aktor ='$_POST[id_aktor]'");

    if ($ubah){
        echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
    }else {
        echo "<script>alert('Gagal mengubah data');window.location='index.php';</script>";
    }
}
// End proses Edit data
