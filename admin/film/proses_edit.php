<?php
    
    include "../../config.php";
    
    $id_film = $_POST['id_film'];
    $judul_film = $_POST['judul_film'];
    $tahun_rilis = $_POST['tahun_rilis'];
    $durasi = $_POST['durasi'];
    $sinopsis = $_POST['sinopsis'];
    $link_trailer = $_POST['link_trailer'];
    $id_genre = $_POST['id_genre'];

    $query = mysqli_query($conn, "UPDATE `film` SET `judul_film`='$judul_film',`tahun_rilis`='$tahun_rilis',`durasi`='$durasi',`sinopsis`='$sinopsis',`link_trailer`='$link_trailer',`id_genre`='$id_genre' WHERE id_film = '$id_film'");
    // "UPDATE `film` SET `judul_film`='$judul_film',`tahun_rilis`='$tahun_rilis',`durasi`='$durasi',`sinopsis`='$sinopsis',`link_trailer`='$link_trailer',`id_genre`='$id_genre' WHERE id_film = '$id_film'";
    // $query = "WHERE id_film = '$id_film'";
    // $result = mysqli_query($conn, $query);
    
    if(!$query){
        die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
    } else {            
        echo "<script>alert('Data berhasil diubah');window.location='index.php';</script>";
    }
?> 