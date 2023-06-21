<?php
    
    include "../config.php";
    
    $username = $_POST['username'];
    $foto_user = $_FILES['foto_user']['name'];
    $email = $_POST['email'];
    $nama = $_POST['nama'];

    if($foto_user != "") {
        $ekstensi_diperbolehkan = array('png','jpg','jpeg');
        $x = explode('.', $foto_user);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['foto_user']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $nama_foto_user_baru = $angka_acak.'-'.$foto_user;      
        
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
            move_uploaded_file($file_tmp, '../include/img-user/'.$nama_foto_user_baru);
            $query = "UPDATE login SET username = '$username', nama='$nama', email='$email', foto_user='$nama_foto_user_baru' ";
            $query .= "WHERE username = '$username'";
            $result = mysqli_query($conn, $query);

            if(!$result){
                die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
            } else {
                echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
            }
        } else {     
            echo "<script>alert('Ekstensi foto_user yang boleh hanya jpg, png atau jpeg.');window.location='tambah.php';</script>";
        }

    } else {
        $query = "UPDATE login SET username = '$username', nama='$nama', email='$email'";
            $query .= "WHERE username = '$username'";
        $result = mysqli_query($conn, $query);
        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
        } else {
            echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
        }
    }
?>