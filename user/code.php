<?php 
    include "../config.php";
include "proses-login.php";

    if(isset($_POST['send'])){
        $rating = $_POST['rating'];
        $komentar = $_POST['komentar'];
        $id_film = $_POST['id_film'];
        $username = $data['username'];

        $query = mysqli_query($conn,"INSERT INTO `rating`(`rating`,`komentar`, `id_film`, `username`) VALUES ('$rating','$komentar','$id_film','$username')");


        if($query){
            echo "<script>alert('Terima kasih atas review Anda:)');window.location='movie-details.php?id_film=$id_film';</script>";
        } else {
            echo "<script>alert('Data gagal ditambahkan');window.location='movie-details.php?id_film=$id_film';</script>";
        }

    } 
          
?>