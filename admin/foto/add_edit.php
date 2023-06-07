<?php
include "../../config.php";

// Start proses tambah data
if (isset($_POST['simpan'])) {
    
    $foto        = $_FILES['foto']['name'];
    $status       = $_POST['status'];
    $id_film   = $_POST['id_film'];
    
    if($foto != "") {
        $ekstensi_diperbolehkan = array('png','jpg');
        $x = explode('.', $foto);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['foto']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $nama_foto_baru = $angka_acak.'-'.$foto;      
        
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
            move_uploaded_file($file_tmp, '../include/img-db/'.$nama_foto_baru);
            $query = "INSERT INTO `foto`(foto, status, id_film) VALUES ('$foto','$status','$id_film')";
            $result = mysqli_query($conn, $query);

            if(!$result){
                die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
            } else {
                echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
            }
        } else {     
            echo "<script>alert('Ekstensi foto yang boleh hanya jpg atau png.');window.location='tambah.php';</script>";
        }

    } else {
        $query = "INSERT INTO `foto`(foto, status, id_film) VALUES (null,'$status','$id_film')";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
        } else {
            echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
        }
    }
    $simpan = mysqli_query($conn, "INSERT INTO foto (foto) VALUES ('$_POST[foto]') ");

    if ($simpan){
        echo "<script>alert('Data baru berhasil ditambahkan');window.location='index.php';</script>";
    }else {
        echo "<script>alert('Gagal menambahkan data baru');window.location='index.php';</script>";
    }
}
// End proses tambah data

// Start proses Edit data
if (isset($_POST['ubah'])) {
    $foto        = $_FILES['foto']['name'];
    $status       = $_POST['status'];
    $id_film   = $_POST['id_film'];
    
    if($foto != "") {
        $ekstensi_diperbolehkan = array('png','jpg');
        $x = explode('.', $foto);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['foto']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $nama_foto_baru = $angka_acak.'-'.$foto;      
        
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
            move_uploaded_file($file_tmp, '../include/img-db/'.$nama_foto_baru);
            $query = "INSERT INTO `foto`(foto, status, id_film) VALUES ('$foto','$status','$id_film')";
            $result = mysqli_query($conn, $query);

            if(!$result){
                die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
            } else {
                echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
            }
        } else {     
            echo "<script>alert('Ekstensi foto yang boleh hanya jpg atau png.');window.location='tambah.php';</script>";
        }

    } else {
        $query = "INSERT INTO `foto`(foto, status, id_film) VALUES (null,'$status','$id_film') WHERE id_foto ='$_POST[id_foto]'";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
        } else {
            echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
        }
    }

    $ubah = mysqli_query($conn, "UPDATE foto SET foto='$_POST[foto]', status='$status', id_film='$id_film'");

    if ($ubah){
        echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
    }else {
        echo "<script>alert('Gagal mengubah data');window.location='index.php';</script>";
    }
}
// End proses Edit data
