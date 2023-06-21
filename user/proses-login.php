<?php 
   include "../config.php";

@session_start();

if (!isset($_SESSION['username'])) {
    ?>
 <script>
    alert('Maaf ! Anda Belum Login !!');
    window.location='../index.php';
 </script>
<?php
}
$username = $_SESSION['username'];
$sql = mysqli_query($conn,"SELECT * FROM login
 WHERE username = '$username'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);
 ?>