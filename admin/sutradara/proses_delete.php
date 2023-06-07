<?php
    
    include "../../config.php";

    $id_sutradara = $_GET['id_sutradara'];

    $result = mysqli_query($conn, "DELETE FROM sutradara WHERE id_sutradara='$id_sutradara'");

    header("Location:index.php");
?>