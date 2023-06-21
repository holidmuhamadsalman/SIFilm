<?php
    
    include "../../config.php";
    
    $id_foto = $_POST['id_foto'];
    $foto = $_FILES['foto']['name'];
    $status = $_POST['status'];
    $id_film = $_POST['id_film'];

    if($foto != "") {
        $ekstensi_diperbolehkan = array('png','jpg','jpeg');
        $x = explode('.', $foto);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['foto']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $nama_foto_baru = $angka_acak.'-'.$foto;      
        
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
            move_uploaded_file($file_tmp, '../../include/img-db/'.$nama_foto_baru);
            $query = "UPDATE foto SET foto='$nama_foto_baru', status='$status',id_film='$id_film'";
            $query .= "WHERE id_foto = '$id_foto'";
            $result = mysqli_query($conn, $query);

            if(!$result){
                die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
            } else {
                echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
            }
        } else {     
            echo "<script>alert('Ekstensi foto yang boleh hanya jpg, png atau jpeg.');window.location='tambah.php';</script>";
        }

    } else {
        $query = "UPDATE foto SET status='$status',id_film='$id_film'";
            $query .= "WHERE id_foto = '$id_foto'";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
        } else {
            echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
        }
    }
?> 