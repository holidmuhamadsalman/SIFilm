<?php
    
    include "../../config.php";

    $id_rating= $_GET['id_rating'];

    $result = mysqli_query($conn, "DELETE FROM rating WHERE id_rating='$id_rating'");

    header("Location:index.php");
?>

