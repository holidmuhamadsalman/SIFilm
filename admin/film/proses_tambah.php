<?php
    
    include "../../config.php";

    $judul_film = $_POST['judul_film'];
    $tahun_rilis = $_POST['tahun_rilis'];
    $durasi = $_POST['durasi'];
    $sinopsis = $_POST['sinopsis'];
    $link_trailer = $_POST['link_trailer'];
    $id_genre = $_POST['id_genre'];

    $query = "INSERT INTO `film`(`judul_film`, `tahun_rilis`, `durasi`, `sinopsis`, `link_trailer`, `id_genre`) VALUES ('$judul_film','$tahun_rilis','$durasi','$sinopsis','$link_trailer','$id_genre')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
    } else {            
        echo "<script>alert('Data berhasil ditambahkan');window.location='index.php';</script>";
    }
?> 