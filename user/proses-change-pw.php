<?php 
include '../config.php';

session_start();

$username = $_SESSION['username'];
$sql = mysqli_query($conn,"SELECT * FROM login
WHERE username = '$username'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);

$username = $_POST['username'];
$password = $data['password'];
$passwordLama = md5($_POST['passwordLama']);
$newpass = md5($_POST['newpassword']);

if ($passwordLama === $password) {
$set = mysqli_query($conn,"UPDATE login SET password='$newpass' WHERE username='$username' ");
    echo "<script type='text/javascript'> 
	alert('Password Telah berubah')
	window.location.replace('../index.php'); 
	</script>";

}else{
	echo "<script type='text/javascript'>
	alert('Password Lama Tidak cocok')
	window.location.replace('change-pw.php'); 
	</script>";
}