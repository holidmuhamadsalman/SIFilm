<?php
    
    include "../../config.php";

    $id_genre = $_GET['id_genre'];

    $result = mysqli_query($conn, "DELETE FROM genre WHERE id_genre='$id_genre'");

    header("Location:index.php");
?>