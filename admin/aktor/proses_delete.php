<?php
    
    include "../../config.php";

    $id_aktor = $_GET['id_aktor'];

    $result = mysqli_query($conn, "DELETE FROM aktor WHERE id_aktor='$id_aktor'");

    header("Location:index.php");
?>