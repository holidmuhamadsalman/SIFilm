<?php
    
    include "../../config.php";

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $query = "INSERT INTO `login`(`nama`, `username`, `email`, `password`, `role`) VALUES ('$nama','$username','$email','$password','$role')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($conn)." - ".mysqli_error($conn));
    } else {            
        echo "<script>alert('Data berhasil ditambahkan');window.location='index.php';</script>";
    }
?> 