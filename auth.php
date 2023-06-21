<?php
include 'config.php';

   //cek value data yg dikirimkan dari form login, jika salah satu ada yg kosong
   if($_POST["nama"] =="" | $_POST["username"] == "" | $_POST["email"] =="" | $_POST["password"] == ""){
      //maka tampilkan notif dan lalu redirect kembali ke halaman register.
      echo'<script>
             alert("Jangan ada yang kosong !");
             windows.location="'.$base_url.'/register.php";
            </script>';
      return false;//hentikan proses sampai sini.
   }
   //Jika semua value data dari form register sudah benar atau salah satu tidak ada yang kosong
   //maka jalankan script ini.
   $nama = $_POST["nama"];
   $username = $_POST["username"]; // $username yg di isi dng value username dari form register
   $email = $_POST["email"]; // $email yg di isi dng value email dari form register
   $password = md5($_POST["password"]); // $password yg di isi dng value password dari form register
  
   //cek adakah email si pengguna di table login.
   $cek = mysqli_query($conn,"SELECT * FROM login WHERE email='$email'");
   //jika hasil 1 artinya email si pengguna register sudah ada di table login
   if(mysqli_num_rows($cek) === 1){
      //maka tampilkan notif ini
      echo'<script>
                alert("Email ini sudah terdaftar, silahkan coba dengan email lain !");
                window.location="'.$base_url.'/register.php";
             </script>';
        return false; //hentikan proses sampai sini.
   }
   //cek adakah username si pengguna di table login.
   $cek = mysqli_query($conn,"SELECT * FROM login WHERE username='$username'");
   //jika hasil 1 artinya username si pengguna register sudah ada di table login
   if(mysqli_num_rows($cek) === 1){
      //maka tampilkan notif ini
      echo'<script>
                alert("username ini sudah terdaftar, silahkan coba dengan username lain !");
                window.location="'.$base_url.'/register.php";
             </script>';
        return false; //hentikan proses sampai sini.
   }

  //jika email si pengguna register tidak ada dlm table login
   //maka jalankan aksi penyimpanan data baru ke table login.
   $save = mysqli_query($conn,"INSERT INTO login(username,nama,email,password) VALUES('$username','$nama','$email', '$password')");
   //cek proses penyimpanan berhasil atau tidak
   //jika true artinya berhasil
   if ($save === true) {
        //maka tampilkan notif ini
        //lalu redirect ke halaman index.php atau halaman login.
        echo'<script>
                alert("Registrasi Berhasil");
                window.location="'.$base_url.'/index.php"; 
             </script>';
   }else{
         //jika proses gagal, tampilkan notif ini lalu redirect kembali ke halaman register.
         echo'<script>
                alert("Registrasi Gagal !");
                window.location="'.$base_url.'/register.php";
             </script>';
        return false;
   }