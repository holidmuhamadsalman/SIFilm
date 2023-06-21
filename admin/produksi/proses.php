<?php
    session_start();

    include "../../config.php";

    if(isset($_POST['simpan'])){
        $id_film = $_POST['id_film'];
        $sutradara = $_POST['sutradara'];

        foreach($sutradara as $row){
            // echo $row;
            $query = "INSERT INTO detail_sutradara (id_film, id_sutradara) VALUES ('$id_film','$row')";
            $query_run = mysqli_query($conn, $query);
        }

        if($query_run){
            echo "<script>alert('Data berhasil ditambahkan');window.location='index.php';</script>";
        } else {
            die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
        }
    }

    if(isset($_POST['ubah'])){
        $id_film = $_POST['id_film'];
        $sutradara = $_POST['sutradara'];

        foreach($sutradara as $row){
            // echo $row;
            $query = "SELECT * FROM detail_sutradara WHERE id_film = '$id_film'";
            $query_run = mysqli_query($conn, $query);

            $data_sutradara = [];
            foreach($query_run as $peran){
                $data_sutradara[] = $peran['id_sutradara'];
            }

            // insert data yang baru ditambahkan
            foreach($sutradara as $data){
                if(!in_array($data, $data_sutradara)){
                    // echo $data." insert here";
                    $insert_query = "INSERT INTO detail_sutradara (id_film, id_sutradara) VALUES ('$id_film','$data')";
                    $insert_query_run = mysqli_query($conn, $insert_query);
                    header("Location: index.php");
                }
            }
            // delete added sutradara
            foreach($data_sutradara as $row_sutradara){
                if(!in_array($row_sutradara, $sutradara)){
                    // echo $row_sutradara." delete this one </br>";
                    $delete_query = "DELETE FROM detail_sutradara WHERE id_film='$id_film' AND id_sutradara='$row_sutradara'";
                    $delete_query_run = mysqli_query($conn, $delete_query);
                }
            }
        }

        header("Location: index.php?id_user=$id_user");
        exit(0);
    }
?> 