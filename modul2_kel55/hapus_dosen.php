<?php

include("koneksi.php");

session_start();
if($_SESSION['status']!="login"){
	header("location: login.php?pesan=belum_login");
}

$id = $_GET['id'];

$query = mysqli_query($connect, "DELETE FROM dosen WHERE id_dosen='$id'")
or die(mysqli_error($connect));

if ($query){
	header('location: dosen.php');
}
else{
	echo mysqli_error($connect);
}

?>
