<?php
include '../config.php';

if(isset($_POST['send'])){
    $username = $_POST['username'];
    $komentar = $_POST['komentar'];
    $id_film = $_POST['id_film'];
    $rating = $_POST['rating'];
}
?>