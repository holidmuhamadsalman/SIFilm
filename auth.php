<?php
///////////////////////////////////////
/////////// START AKSI LOGIN //////////
///////////////////////////////////////

//jika tombol login di klik, jalankan script ini.
if(isset($_POST['login'])){
	 //cek value data yang di kirimkan dari form login, ada yg kosong atau tidak
  	 if($_POST['username'] == '' | $_POST['password'] == ''){
  	 	echo'<script>
  	 	      alert("Jangan ada yang kosong !");
  	 	      window.location="'.$base_url.'/login/login.php";
  	 	     </script>';
  	 	return false;
  	 }
     
     //Jika semua value data dari form login sudah benar atau salah satu tidak ada yang kosong
    //maka jalankan script ini.
     $username = htmlspecialchars($_POST['username']); //$name yg di isi dng value username dari form login
     $password = md5($_POST['password']); //$pass yg di isi dng value password dari form login lalu hash dengan md5
     
     include "config.php";
     //cek data username pengguna login dari table login
     //apakah ada data username pengguna login di dalam table login
     $login = mysqli_query($conn, "SELECT * FROM login WHERE username='$username'");
     //jika 1 atau datanya ada
     if(mysqli_num_rows($login) ===1){
     	//ambil data tersebut ke dalam variabel data
     	$data = mysqli_fetch_assoc($login);
        
        //cek jika password sama dan rolenya == admin
     	if($password == $data['password'] && $data['role'] == 'admin'){
     		$_SESSION['username'] = $data['username']; //buat session username
     		$_SESSION['role'] = $data['role']; //buat session role
     		header('Location: '.$base_url.'/admin/index.php'); //redirect kehalaman admin.

     	//jika password sama dan rolenya == user
     	}else if($password == $data['password'] && $data['role'] == 'user'){
     		$_SESSION['username'] = $data['username']; //buat session username
     		$_SESSION['role'] = $data['role']; //buat session role
     		header('Location: '.$base_url.'/user/index.php'); //redirect kehalaman user.

     	//jika password tidak sama, dan role pengguna == admin atau role pengguna == user
     	}else if($password != $data['password'] && $data['role'] == 'admin' | $data['role'] == 'user'){
     		//tampilkan notif ini, lalu redirect kembali ke halaman index.php atau ke form login.
     		echo'<script>
     		        alert("Nama Atau Password Salah !");
     		        window.location="'.$base_url.'/index.php";
     		     </script>';
     		return false; //hentikan proses sampai sini.
     	}
      //jika data username tidak ada dalam table login
     }else{
     	//maka tampilkan notif ini, lalu redirect langsung ke halaman index.php atau form login
     	echo'<script>
     		        alert("Akun Tidak Ada Dalam Database !");
     		        window.location="'.$base_url.'/index.php";
     		     </script>';
        return false;
     }

  }
///////////////////////////////////////
//////////// END AKSI LOGIN ///////////
///////////////////////////////////////


///////////////////////////////////////
///////// START AKSI REGISTER /////////
///////////////////////////////////////

//cek jika tombol register di klik
//maka jalankan script ini.
if(isset($_POST["register"])){
   //cek value data yg dikirimkan dari form login, jika salah satu ada yg kosong
   if($_POST["name"] =="" | $_POST["username"] == "" | $_POST["email"] =="" | $_POST["password"] == ""){
      //maka tampilkan notif dan lalu redirect kembali ke halaman register.
      echo'<script>
             alert("Jangan ada yang kosong !");
             windows.location="'.$base_url.'/register.php";
            </script>';
      return false;//hentikan proses sampai sini.
   }
   //Jika semua value data dari form register sudah benar atau salah satu tidak ada yang kosong
   //maka jalankan script ini.
   $name = $_POST["name"];
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

  //jika email si pengguna register tidak ada dlm table login
   //maka jalankan aksi penyimpanan data baru ke table login.
   $save = mysqli_query($conn,"INSERT INTO login(name,username,email,password) VALUES('$name','$username', '$email', '$password')");
   //cek proses penyimpanan berhasil atau tidak
   //jika true artinya berhasil
   if ($save === true) {
        //maka tampilkan notif ini
        //lalu redirect ke halaman index.php atau halaman login.
        echo'<script>
                alert("Registrasi Berhasil...");
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
}
///////////////////////////////////////
////////// END AKSI REGISTER //////////
///////////////////////////////////////


///////////////////////////////////////
//////// START TAMBAH PENGGUNA ////////
///////////////////////////////////////
  if(isset($_POST["tambah_pengguna"])){
   if($_POST["email"] =="" | $_POST["username"] == "" | $_POST["password"] == "" | $_POST["role"] == ""){
      echo'<script>
             alert("Jangan ada yang kosong !");
             windows.location="'.$base_url.'/admin/tambah-pengguna.php.php";
            </script>';
      return false;
   }
   $email = $_POST["email"];
   $role = $_POST["role"];
   $username = $_POST["username"];
   $password = md5($_POST["password"]);
   //cek
   $cek = mysqli_query($conn,"SELECT * FROM login WHERE email='$email'");
   if(mysqli_num_rows($cek) === 1){
      echo'<script>
                alert("Email ini sudah terdaftar, silahkan coba dengan email lain !");
                window.location="'.$base_url.'/admin/tambah-pengguna.php";
             </script>';
        return false;
   }

  //save
   $save = mysqli_query($conn,"INSERT INTO login(username,email,password,role) VALUES('$username', '$email', '$password', '$role')");
   if ($save === true) {
        echo'<script>
                alert("Pengguna Baru Berhasil Ditambahkan...");
                window.location="'.$base_url.'/admin/data-pengguna.php";
             </script>';
   }else{
         echo'<script>
                alert("Pengguna Baru Gagal Ditambahkan !");
                window.location="'.$base_url.'/admin/tambah-pengguna.php";
             </script>';
        return false;
   }
}
///////////////////////////////////////
//////// END TAMBAH PENGGUNA ////////
///////////////////////////////////////


///////////////////////////////////////
/////////// START DATA VIEW  /////////
//////////////////////////////////////
  if(isset($_SESSION["username"])){
	  $username = $_SESSION["username"]; //$username isi dng session username.
	  //cocokan data pengguna berdasarkan $username.
	  $data = mysqli_query($conn,"SELECT * FROM login WHERE username='$username'");
	  //ambil data hasil pencocokan.
	  $pengguna = mysqli_fetch_assoc($data);
      
      //data ini hanya untuk role admin
      if($_SESSION["role"] == "admin"){
	      //hitung semua pengguna
	      $count = mysqli_query($conn,"SELECT * FROM login ORDER BY id DESC");
	      $totalPengguna = mysqli_num_rows($count); //total pengguna
	      //hitung semua admin
	      $count = mysqli_query($conn,"SELECT * FROM login WHERE role='admin'");
	      $totalAdmin = mysqli_num_rows($count); //total admin
	      //hitung semua user
	      $count = mysqli_query($conn,"SELECT * FROM login WHERE role='user'");
	      $totalUser = mysqli_num_rows($count); //total user
	   }
  }
///////////////////////////////////////
///////////   END DATA VIEW  /////////
//////////////////////////////////////