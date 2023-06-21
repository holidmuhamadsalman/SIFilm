<?php
    
    include "../../config.php";

    $id_dsutradara = $_GET['id_dsutradara'];

    $result = mysqli_query($conn, "DELETE FROM detail_sutradara WHERE id_dsutradara='$id_dsutradara'");

    header("Location:index.php");
?>