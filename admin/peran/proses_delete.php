<?php
    
    include "../../config.php";

    $id_daktor = $_GET['id_daktor'];

    $result = mysqli_query($conn, "DELETE FROM detail_aktor WHERE id_daktor='$id_daktor'");

    header("Location:index.php");
?>