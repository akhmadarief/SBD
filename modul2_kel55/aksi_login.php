<?php

session_start();
include("koneksi.php");

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($connect, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
$login = mysqli_num_rows($query);

if ($login > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header('location: index.php');
}else{
	echo mysqli_error($connect);
	header('location: login.php?pesan=gagal');
}

?>
