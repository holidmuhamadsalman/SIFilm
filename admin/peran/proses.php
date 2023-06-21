<?php
    session_start();

    include "../../config.php";

    if(isset($_POST['simpan'])){
        $id_film = $_POST['id_film'];
        $aktor = $_POST['aktor'];

        foreach($aktor as $row){
            // echo $row;
            $query = "INSERT INTO detail_aktor (id_film, id_aktor) VALUES ('$id_film','$row')";
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
        $aktor = $_POST['aktor'];

        foreach($aktor as $row){
            // echo $row;
            $query = "SELECT * FROM detail_aktor WHERE id_film = '$id_film'";
            $query_run = mysqli_query($conn, $query);

            $data_aktor = [];
            foreach($query_run as $peran){
                $data_aktor[] = $peran['id_aktor'];
            }

            // insert data yang baru ditambahkan
            foreach($aktor as $data){
                if(!in_array($data, $data_aktor)){
                    $insert_query = "INSERT INTO detail_aktor (id_film, id_aktor) VALUES ('$id_film','$data')";
                    $insert_query_run = mysqli_query($conn, $insert_query);
                }
            }
            // delete added aktor
            foreach($data_aktor as $row_aktor){
                if(!in_array($row_aktor, $aktor)){
                    $delete_query = "DELETE FROM detail_aktor WHERE id_film='$id_film' AND id_aktor='$row_aktor'";
                    $delete_query_run = mysqli_query($conn, $delete_query);
                }
            }
        }
        header("Location: index.php");
    }
?> 